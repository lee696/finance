cs.tableheader(); //设置table 最大高度
var custom = {
	get_custom_info: function() {
		var _it = this;
		//显示 客户详情弹出层
		$('.customerDetail').unbind('click').click(function(event) {
			var it = $(this);
			var id = $(this).parent().attr('data-cid');
			var employees = {};
            var xiezData=[];
            var fuzperson ='';
            var otherCus = [];
			ykp.doAjax({
				async: false,
				url: '/api/api_customer/get_customer_pos',
				method: 'post',
				data: {
					customer_id: id
				},
				success: function(res) {
					otherCus = res.data.rele;
				}
			})

			//获取所有员工
			getEmployees();

			function getEmployees() {
				ykp.doAjax({
					url: '/api/api_employees/f7',
					method: 'post',
					async: false,
					data: {
						select: 'bmm_employees.id,bmm_employees.name'
					},
					success: function(res) {
						var data = res.data;
						for(var i in data) {
							employees[data[i]['id']] = data[i]['name'];

						}
					}
				});
			}
			showMark('.popup_detail');
            $("#showBox").width("100%");
            $("#temHeader").width($("#showBox").width()-47);
			$('#templateCon [contentauthority="252"]').show();
			var rows = 10;
			//时间插件
            _timeplug();
            function _timeplug() {
                if(!ace.vars['old_ie']) {
                    $('#templateCon .date-timepicker22').datetimepicker({
                        // format: 'YYYY-MM-DD HH:mm',//use this option to display seconds
                        icons: {
                            time: 'fa fa-clock-o',
                            date: 'fa fa-calendar',
                            up: 'fa fa-chevron-up',
                            down: 'fa fa-chevron-down',
                            previous: 'fa fa-chevron-left',
                            next: 'fa fa-chevron-right',
                            today: 'fa fa-arrows ',
                            clear: 'fa fa-trash',
                            close: 'fa fa-times'
                        }
                    }).next().on(ace.click_event, function() {
                        $(this).prev().focus();
                    });
                }
            }

			//客户基本信息
            cuMoreInfo()
			function cuMoreInfo(){
                $('#templateCon .customerGrupe').unbind("change");
                $('#templateCon .principal').unbind("change");
                $('#templateCon .customerlevel').unbind("change");
				ykp.doAjax({
					url: "/api/api_info/get_type_more",
					method: 'get',
					async:false,
					data: {
						customer_id:id
					},
					success: function (res) {
						var resdata = res.data;

						$('#templateCon .folman').html(employees[resdata["跟进人"].id]);
                        $('#templateCon ._next_time').val(cs.getNowTime(resdata["下次跟进时间"].time,true));
						//编辑下次跟进时间
                        var subone = 1;
                        $('#templateCon ._next_time').blur(function() {
                            if(subone == 1){
                                subone+=1;
                            var it = $(this);
                            var ntime = new Date(it.val());
                            var data = ntime.getTime();
								ykp.doAjax({
									url: "/api/api_info/get_type_more",
									method: 'post',
									data: {
										customer_id:id,
										next_time: data / 1000
									},
									success: function (res) {
										ykp.prompt('下次跟进时间编辑成功');
                                        subone = 1;
									}
								})
                            }
                        })

						//编辑客户级别
                        $('#templateCon .customerlevel').val(resdata['客户级别'].rank).change();
                        $('#templateCon .customerlevel').unbind().change(function() {
                            var it = $(this);
                            ykp.doAjax({
                                url: "/api/api_info/get_type_more",
                                method: 'post',
                                data: {
                                    customer_id:id,
                                    rank: it.val()
                                },
                                success: function (res) {
                                    ykp.prompt('客户级别编辑成功');
                                    cuMoreInfo();
                                }
                            })
                        });

						let cate_id = resdata['客户分组'].type;
						//加载客户分组
						loadCusCate(cate_id)
						function loadCusCate(cate_id) {
                            var _custGrup={};
							$('#templateCon .customerGrupe ,#templateCon .principal').select2({
								allowClear: true
							});
							ykp.doAjax({
								url: '/api/api_customer/clue_type_list',
								method: 'get',
								async:false,
								data: {},
								success: function(res) {
									var data = res.data;
									var cate_html = [];

									for(var i in data) {
                                        _custGrup[data[i]['id']] =  data[i]['name'];
										cate_html.push('<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>');
									}
									$('#templateCon .customerGrupe').html('<option value="">请选择客户分组</option>');
									$('#templateCon .customerGrupe').append(cate_html.join(''));
									if(cate_id) {
										$('#templateCon .customerGrupe').val(cate_id).trigger('change');
									}
                                }
							});

                            //编辑客户分组
                            $('#templateCon .customerGrupe').unbind("change").change(function() {
                                var it = $(this);
                                ykp.doAjax({
                                    url: "/api/api_info/get_type_more",
                                    method: 'post',
                                    data: {
                                        customer_id:id,
                                        type: it.val()
                                    },
                                    success: function (res) {
                                        //$('#dynamic-table_data').find('td[data-cid=' + id + ']').parent('tr').find('td[data-num=5]').html(_custGrup[it.val()]);
                                        ykp.prompt('客户分组更换成功');
                                        cuMoreInfo();
                                    }
                                })
                            })

                        }


						//销售阶段
						if(resdata["销售阶段"].rank !=0){
							$("#templateCon .sales_stage label").eq(resdata["销售阶段"].rank -1).addClass('acti');
                        }

						//销售团队
						var _selling_groups = []
						for( k in employees){
							_selling_groups.push('<option value="' + k + '">' + employees[k] + '</option>');
						};
						$('#templateCon .selling_groups select').html('');
						$('#templateCon .selling_groups select').append(_selling_groups.join(''));
                        fuzperson = resdata["负责人"].id
						if(resdata["负责人"].id) {
							$('#templateCon .selling_groups select').val(resdata["负责人"].id).trigger('change');
						}else {
                            $('#templateCon .otherItembox .disitems').eq(1).hide();
                            $('#templateCon .otherItembox .disitems').eq(2).hide();
                            $('#templateCon .noxshide').html('');
                        }

						var _xiezPerson = [];
						 xiezData = resdata["协作人"].id.split(',');
                        for( let v=0;v<xiezData.length;v++){
							_xiezPerson.push('<label tit="'+xiezData[v]+'"  style="cursor:pointer;border:1px #bdd7ee solid;position:relative;top:-1px;margin-right: 10px;border-radius:0;width: 150px;padding: 0;height: 35px;line-height:35px;text-align: center;margin-bottom: 5px;">'+ employees[xiezData[v]] +'</label>');
						};
						if(resdata["协作人"].id){
                            $('#templateCon .selling_groups label').remove();
							$('#templateCon .selling_groups .addSellingperson').before(_xiezPerson.join(''));
							//协作人
							xiaosgrupe();
						}


                        //编辑负责人
                        $('#templateCon .principal').unbind("change").change(function() {
                            var it = $(this);
                            ykp.doAjax({
                                url: "/api/api_info/edit_user",
                                method: 'post',
                                data: {
                                    customer_id:id,
                                    user_id: it.val()
                                },
                                success: function (res) {
                                    ykp.prompt('负责人更换成功');
                                    cuMoreInfo();

                                }
                            })
                        })
					}
				});
            }

            //销售团队 编辑协作人
            xiaosgrupe();
			function xiaosgrupe(){
				$('#showBox .addSellingperson').unbind().click(function() {
					//弹出编辑协作人
					$('.set_Sellingperson').fadeIn();
					$(".set_Sellingperson .close_label").click(function () {
						$('.set_Sellingperson').fadeOut();
					})

					$('.set_Sellingperson ._sellingperson').select2({
						allowClear: true
					});
                    var _allperson =[];
					for(var i in employees) {
						if(employees[i] && i!= fuzperson) {
							_allperson.push('<option value="'+ i +'"> '+ employees[i] +' </option>');
						}
					}
					$('.set_Sellingperson ._sellingperson').html(_allperson.join(','));
                    $('.set_Sellingperson ._sellingperson').val(xiezData).trigger('change');
                    $(".set_Sellingperson .hold").unbind().click(function () {
                        var data = $('.set_Sellingperson ._sellingperson').select2('data');
                        var _salesma = [];
                        if(data.length == 0) {
                            ykp.prompt('请选择协作人');
                            return false;
                        } else {
                            for(var i in data) {
                                _salesma.push(data[i]['id']);
                            }
                        }
                        ykp.doAjax({
                            url: '/api/api_info/edit_user',
                            method: 'post',
                            data: {
                                customer_id:id,
                                    team_id:_salesma.join()
							},
                            success: function(res) {
                               /* $('.set_label .labels').html('');
                                var data = res.data.items;*/
                                ykp.prompt('编辑成功');
                                cuMoreInfo()
                                $('.set_Sellingperson').fadeOut();
                                xiaosgrupe();
                            }

                        });

                    })
				});
            }


			//编辑销售阶段
            $("#templateCon .sales_stage label").click(function () {
            	let it = $(this);
				let index = $(this).index()
                layui.use('layer', function() {
                    var layer = layui.layer;
                    layer.confirm('确认更换销售阶段吗？', function(flag) {
                        var _this = $(this);
                        if(flag) {
                            ykp.doAjax({
                                url: "/api/api_info/get_type_more",
                                method: 'post',
                                data: {
                                    customer_id:id,
                                    srank: index +1
                                },
                                success: function (res) {
                                    ykp.prompt('更换成功');
                                    it.addClass("acti").siblings().removeClass("acti");
                                    layer.closeAll();
                                }
                            })
                        }
                    });
                });

            })

			ykp.doAjax({
				url: "/api/api_customer/info",
				method: 'post',
				data: {
					filter: "khm_customer.id = " + id
				},
				success: function(res) {
					var data = res.data;
					var status = ['未合作', '合作中', '已解约'];
					var labels = data['label_list'];
                    if(labels && labels.length > 0) {
                        var label_id = [];
                        var html = [];
                        for(var i in labels) {
                            html.push(`<label label-id="${labels[i]['id']}" class="btn btn-info btn-sm fl" style="border:1px #bdd7ee solid;margin-right:10px;background-color:${labels[i]['color']} !important;border-radius:0;width: 150px;padding: 0;height: 35px;line-height:35px;text-align: center;margin-bottom: 5px;position: relative;top:1px;">
									${labels[i]['title']}
								</label>`);
                        }
                        $('#showBox .customer_label').prepend(html.join(''));
                    }

                    $('#showBox .title').html('<select style="width:260px" class="select2" id ="Cuses">  </select> <span id="customNum" style=" margin-left: 10px">' + $('#showBox #Cuses').find('option').length + '</span>');
                    $('#showBox #Cuses').select2({
                        allowClear: true
                    });
                    $('#showBox #Cuses').append('<option selected="selected" value="' + data['khm_customer.id'] + '"> ' + data['khm_customer.name'] + ' </option>');

                    var customNum = 0;

                    if(otherCus != '') {
                        $('#showBox #Cuses').html('');
                        for(var i in otherCus) {
                            $('#showBox #Cuses').append('<option selected="' + (otherCus[i]['id'] == id ? true : false) + '" value="' + otherCus[i]['id'] + '"> ' + otherCus[i]['name'] + ' </option>')
                        }
                    }
                    $('#showBox #customNum').html($('#showBox #Cuses').find('option').length);
                    $('#showBox #Cuses').val(id).trigger('change');
                    $('#showBox #Cuses').change(function() {
                        var html = $('<span style="display:none;" data-cid="' + $(this).val() + '"><a class="customerDetail"></a></span>');
                        $('body').append(html);
                        _it.get_custom_info();
                        html.find('a').click();
                    })

                    //绑定经纬度便于下个地图显示中心地点
                    $('.js-map').attr('data-lat', data['khm_customer.location_lat']).attr('data-lng', data['khm_customer.location_lng']);
                    $('#templateCon .basic_message [basic]').each(function(i, e) {
                        switch(i) {
                            case 1:
                                $(this).text(status[data['khm_customer.status']]);
                                break;
                            default:
                                break;
                        }
                    });

					/*if(labels && labels.length > 0) {
						var label_id = [];
						var html = [];
						for(var i in labels) {
							console.log(labels[i])
							html.push(
								`<label label-id="${labels[i]['id']}" class="btn btn-info btn-sm" style="padding:1px 4px;background-color:${labels[i]['color']} !important;border:none;margin-right:10px;">
									${labels[i]['title']}
								</label>`
							);
						}
						$('#showBox .customer_label').html(html.join(''));
					}*/

					$('#showBox .title').html('<select style="width:260px" class="select2" id ="Cuses">  </select> <span id="customNum" style=" margin-left: 10px">' + $('#showBox #Cuses').find('option').length + '</span>');
					$('#showBox #Cuses').select2({
						allowClear: true
					});
					$('#showBox #Cuses').append('<option selected="selected" value="' + data['khm_customer.id'] + '"> ' + data['khm_customer.name'] + ' </option>');

					var customNum = 0;

					if(otherCus != '') {
						$('#showBox #Cuses').html('');
						for(var i in otherCus) {
							$('#showBox #Cuses').append('<option selected="' + (otherCus[i]['id'] == id ? true : false) + '" value="' + otherCus[i]['id'] + '"> ' + otherCus[i]['name'] + ' </option>')
						}
					}
					$('#showBox #customNum').html($('#showBox #Cuses').find('option').length);
					$('#showBox #Cuses').val(id).trigger('change');
					$('#showBox #Cuses').change(function() {
						var html = $('<span style="display:none;" data-cid="' + $(this).val() + '"><a class="customerDetail"></a></span>');
						$('body').append(html);
						_it.get_custom_info();
						html.find('a').click();
					})

					//绑定经纬度便于下个地图显示中心地点
					$('.js-map').attr('data-lat', data['khm_customer.location_lat']).attr('data-lng', data['khm_customer.location_lng']);

					$('#templateCon .basic_message [basic]').each(function(i, e) {
						switch(i) {
							case 0:
								//$(this).text(data['khm_customer.customer_num']);
								break;
							case 1:
								//$(this).text(ranks[data['khm_customer.rank']]);
								break;
							case 2:
								$(this).text(status[data['khm_customer.status']]);
								break;
							default:
								break;
						}
					});
				}
			});

			//所属仓位
			ykp.doAjax({
				url: "/api/api_customer/get_customer_pos",
				method: 'post',
				data: {
					filter: 'khm_contact_log.is_del <> 1',
					customer_id: id
				},
				success: function(res) {
					var data = res.data;
					if(data.log['name']) {
						$('#templateCon .basic_message [follow]').each(function(i, e) {
							switch(i) {
								case 0:
									//$(this).text(data['log']['name']);
									break;
								case 1:
									$(this).text(data['log']['log_time'] != 0 ? cs.getNowTime(data['log']['log_time'],true) : '');
									break;
								default:
									break;
							}
						});
					}

					if(data['pos']) {
						$('#templateCon .basic_message [position]').text(data['pos']['pos_name'] + data['pos']['pos_num']);
					}
				}
			});

			$('#showBox .title_operation').html(`
				<a class="editLabel" href="javascript:;" title="编辑" contentAuthority="251" style="padding:4px 10px 5px 10px;background:#428bca;color:#fff;">
					<i class="fa fa-pencil"></i>
				</a>`);

			if(cs.getNodes([251], true)) {
				$('#showBox [contentAuthority="251"]').show();
			};

			//最近联系记录
			getRecentContactRecords(id);

			//联系时间
			//cs.timeplug();
			//$('#templateCon .date-timepicker1').val(new Date().toLocaleDateString().replace(/\//g, '-'));

			//待办任务
			//         todo_task();
			//         function todo_task(){
			//         	var now = new Date().toLocaleDateString();
			//         	var serviceMonth = now.substring(0,now.lastIndexOf('/')).replace(/\//g,'');

			// // `<td>
			// // 	<button style="position:relative;padding:5px 12px;border-radius:16px;border:none;outline:none;background-color:#c5e0f1;">送单任务</button>
			// // </td>`;

			//         }

			//页面跳转
			function skPage(urls) {
				var url_ = urls.split('&')[0].split('=')[1];
				$('.navBarTable ').find('a').each(function() {
					//console.log($(this).attr('data-index') + urls.split('&')[1].replace(/i=/, ''));
					if($(this).attr('data-index') == urls.split('&')[1].replace(/i=/, '')) {
						$(this).find('#fa-close').click();
					}
				})
				$('#navBox #nav-list li').find('li[data-url="/admin/' + url_ + '"]').click();
			}

			//新建联系记录
			new_contactRecord();
			go_map();

			function go_map() {
				$('.js-map').click(function(event) {
					var lat = $(this).attr('data-lat');
					var lng = $(this).attr('data-lng');
					window.open('/admin/go_map?lat=' + lat + '&lng=' + lng +'&cId='+id);
				});
			};

			function new_contactRecord() {
				$('#templateCon .new_contactRecord').click(function() {
					if(!cs.getNodes([252], true)) {
						ykp.prompt('请联系管理员添加该权限！');
						return;
					};
					var postdata = {
						contact_user: ykp.getCookie('uid'),
						customer_id: id
					};

					postdata['contact_type'] = $(".contact_type .newCactive") ? $(".contact_type .newCactive").attr("data-val"): '';
					postdata['contact_way'] = $(".contact_way .newCactive") ? $(".contact_way .newCactive").attr("data-val"):'';
                    postdata['contact_msg'] =  $("#templateCon #contact_msg").val() ? $("#templateCon #contact_msg").val():'';
                    //postdata["log_time"] = Date.now();
                    postdata["log_time"] = Date.parse(new Date()) / 1000;
                    ykp.doAjax({
                         url: '/api/api_contact_log/add',
                         method: 'post',
                         data: postdata,
                         success: function(res) {
                             it.click();
                         }
                     });
				});
			}

			//最近联系记录
			function getRecentContactRecords(id) {
				var Id = id;
				ykp.list({
					url: '/api/api_contact_log/grid',
					method: 'post',
					data: {
						filter: 'khm_contact_log.is_del <> 1 and khm_contact_log.customer_id = ' + id,
						order: 'khm_contact_log.log_time desc,khm_contact_log.id desc',
						limit: rows,
						page: 1
					},
                    datacont:{
						id:"#zynum"
					},
					pageBar: {
						id: '#templateBox #zypageBar'
					},
					loadList: function(res) {
						if(res.data.items == "") {
							ykp.prompt("暂无数据");
							$('#templateCon .recent_contact_record').html('<div style="border:1px solid #ddd;text-align:center;height: 40px;line-height: 40px;">暂无数据</div>');
							return;
						} else {
							var data = res.data.items;
							var html = [];
							var contact_way = ['电话', '微信', 'QQ', '邮箱', '上门', '短信'];
							var contact_type = ['售后', '投诉', '收款', '线索', '商机', '拜访'];

							for(var i in data) {
								html.push(
									`<div style="border-top:1px solid #eee;border-bottom:1px solid #eee; padding:14px 0 14px 0;">
										<div>
											<div style="width:40px; border-radius:40px;height: 40px; float:left;   text-align: center;line-height: 40px;color: #fff; display:${data[i]['last_info']['avatar'] ? "none" : "block"}; background:${data[i]['last_info']['avatar'] ? "none" : "#4ebefd"};">${data[i]['last_info']['name']}</div>
											<img style="width:${data[i]['last_info']['avatar'] ? "40" : "0"}px;  border-radius:40px; display:${data[i]['last_info']['avatar'] ? "inline-block" : "none"} ;"   src="${data[i]['last_info']['avatar'] }" onerror="${onError(this)}">
											<span style=" margin-left: 10px;" class="contact_person">${data[i]['last_info']['name']}</span>
											
											<div style="text-align: right;float:right;">
												<span style="background-color:#ccecff;padding:2px 8px;font-size:12px;color:#666; margin-right:5px;">
													${contact_type[--data[i]['khm_contact_log.contact_type']]}
												</span>
												
												<span style="background-color:#ccecff;padding:2px 8px;font-size:12px;color:#666; margin-top: 10px;display: inline-block;">
													${contact_way[--data[i]['khm_contact_log.contact_way']]}
												</span>
													<span style="position:relative;">
													${data[i]['khm_contact_log.log_time'] != 0 ? cs.getNowTime(data[i]['khm_contact_log.log_time'],true) : ''}
												</span>
											</div>
											

										</div>
										<div style="margin-top:10px;padding-left:45px;padding-bottom:10px;">
											<span style="float:left;position:relative;top:4px;">
												${data[i]['khm_contact_log.contact_msg']}
											</span>
											
										</div>
									</div>`
								);
							}
							$('#templateCon .recent_contact_record').html(html.join(''));

							$('#templateCon #changePageNum').change(function() {
								rows = $(this).val();
								getRecentContactRecords(Id);
							})
						}
					}
				})

				function onError(_this) {
					//					$(this).remove();
					//console.log(_this);
				}
			}

			//启动layui
			layuiTab(id);

			function layuiTab(id) {
				layui.use('element', function(data) {
					var element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块

					element.on('tab(demo)', function(data) {
						var index = data.index;
						changePagesize(id, index);
                        //console.log(index);
                        switch(index) {
							case 0:
								abstract(id);
								break;
							case 1:
								info(id);
								break;
							case 2:
								contacts(id);
								break;
                            case 3:
                                businessoppr(id, element);
                                break;
                            case 4:
                                visit(id, element);
                                break;
							case 5:
								service(id, element);
								break;
							case 6:
								team(id, element);
								break;
							case 7:
								contract(id, element)
								break;
							case 8:
								getmoney(id);
								break;
							case 9:
								expenditure(id);
								break;
							case 10:
								billing(id);
								break;
							case 11:
								goods(id, element);
								break;
							case 12:
								enclosure(id);
								break;
							case 13:
								change(id);
								break;
							default:
								break;
						}
					});
				})

				//切换每页条目数
				function changePagesize(id, index) {
					$('#templateCon #changePageNum').change(function() {
						var page_size = $(this).val();
						if(index == 2) {
							getContactsList(page_size, id);
						}
						if(6) {
							getGatheringList(id, page_size);
						}
						if(index == 7) {
							getExpenditureList(page_size, id);
						}
						if(index == 8) {
							getBillingList(page_size, id);
						}
						if(index == 11) {
							getModifyRecords(page_size, id);
						}
					});
				}

				//判断返回数据为空则提示暂无数据
				function alertMsg(res) {
					if(res.data.items == "") {
						ykp.prompt("暂无数据");
						$('#templateCon .layui-tab-item.layui-show').find('tbody').html('<tr><td colspan="30" style="color:#7d7d7d;text-align:center !important;">暂无数据</td></tr>');
						return false;
					}
					return true;
				}

				//摘要
				function abstract(id) {
					getRecentContactRecords(id);
				}
                $(".contact_type span,.contact_way span").click(function(){
					var it = $(this);
					it.addClass("newCactive").siblings().removeClass("newCactive")
                })

				//信息
				function info(id) {
					var employees = []; //所有员工
					var employees_2 = []; //所有员工id和部门id
					ykp.doAjax({
						showBlock: true,
						async: false,
						url: '/api/api_employees/f7',
						method: 'post',
						data: {
							select: 'bmm_employees.id,bmm_employees.name,bmm_employees.department'
						},
						success: function(res) {
							var data = res.data;
							for(var i in data) {
								employees[data[i]['id']] = data[i]['name'];
								employees_2[data[i]['id']] = data[i]['department'];
							}
						}
					});
					var customer_type = [];

					//获取所有公海类型
					ykp.doAjax({
						url: '/api/api_customer_type/f7',
						method: 'post',
						anysc: false,
						data: {
							select: 'khm_customer_type.id,khm_customer_type.name'
						},
						success: function(res) {
							var data = res.data;
							customer_type[0] = '';
							for(var i in data) {
								customer_type[data[i]['id']] = data[i]['name'];
							}
						}
					});

					var department = [];
					//获取所有部门
					ykp.doAjax({
						url: '/api/api_department/f7',
						method: 'post',
						async: false,
						data: {
							select: 'bmm_department.id,bmm_department.name,bmm_department.cid',
							limit: 999
						},
						success: function(res) {
							var data = res.data;
							// console.log(data)
							if(data != '') {
								department = data;
							}
						}
					});

					var lastdetail = [];
					ykp.doAjax({
						url: '/api/api_customer/get_last',
						method: 'post',
						async: false,
						data: {
							customer_id: id,
							limit: 999
						},
						success: function(res) {
							lastdetail = res.data;
						}
					})

					ykp.doAjax({
						url: "/api/api_customer/info",
						method: 'post',
						data: {
							filter: "khm_customer.id = " + id
						},
						success: function(res) {
							var data = res.data;
							var rank = ['', 'A', 'B', 'C', 'D'];
							var status = ['未合作', '合作中', '已解约'];
							var reason = ['无进行中的合同', '合同已解约'];
                            var industry = ['', '批发零售业', '制造业', '租赁和商务服务业', '仓储运输业', '餐饮住宿业', '信息软件业', '金融业', '房地产业', '建筑业', '教育', '文体娱乐业', '卫生和社会工作', '居民服务', '修理业', '农林牧渔业'];
							$('#templateCon .layui-tab-item.layui-show').find('td[data-title]').each(function() {
								for(var i in data) {
									if(i.replace(/khm_customer./, '') == $(this).attr('data-title')) {
										if(i.replace(/khm_customer./, '') == 'create_at' || i.replace(/khm_customer./, '') == 'stablish_time') {
											$(this).text(cs.getNowTime(data[i]));
										} else if(i.replace(/khm_customer./, '') == 'rank') {
											$(this).text(rank[data[i]]);
										} else if(i.replace(/khm_customer./, '') == 'status') {
											$(this).text(status[data[i]]);
										} else if(i.replace(/khm_customer./, '') == 'create_id') {
											$(this).text(employees[data[i]]);
										} else if(i.replace(/khm_customer./, '') == 'type') {
											$(this).text(customer_type[data[i]]);
										} else if(i.replace(/khm_customer./, '') == 'range') {
											$(this).attr('title', data[i]);
											$(this).text(data[i]);
										} else if(i.replace(/khm_customer./, '') == 'basic') {
											$(this).text(data[i] ? (data[i] == '1' ? '有' : '无') : '');
										} else if(i.replace(/khm_customer./, '') == 'name') {
											$(this).html(data[i] + '<i style="width:15px;display:inline-block"></i> <button class="btn" style="line-height:15px;" id="editz" data-id="' + data['khm_customer.id'] + '">编辑</button>');
										} else if(i.replace(/khm_customer./, '') == 'tax_type') {
											$(this).text(data[i] ? (data[i] == '1' ? '一般纳税人' : '小规模') : '');
										} else if(i.replace(/khm_customer./, '') == 'industry'){
											$(this).text(industry[data[i]]);
										}
										else {
											$(this).text(data[i]);
										}
									}
								}
								if($(this).attr('data-title') == 'reason') {
									$(this).text(lastdetail.contract['status'] >= 3 ? reason[lastdetail.contract.status - 3] : '----');
								} else if($(this).attr('data-title') == 'voiduser') {
									$(this).text(lastdetail.contract['status'] >= 3 ? lastdetail.contract.userInfo.name : '----');
								} else if($(this).attr('data-title') == 'voiddept') {
									$(this).text(lastdetail.contract['status'] >= 3 ? lastdetail.contract.userInfo.dep_name : '----');
								} else if($(this).attr('data-title') == 'create_dep') {
									$(this).text(department[employees_2[data['khm_customer.create_id']] - 1] == undefined ? '----' : department[employees_2[data['khm_customer.create_id']] - 1].name);
								} else if($(this).attr('data-title') == 'update_by') {
									$(this).text(lastdetail.contract['update_by'] == '0' ? '----' : employees[lastdetail.contract.update_by]);
								}
							})
							$('#templateCon .layui-tab-item.layuiTab-show').find('td[pos-id]').text($('#templateCon .basic_message [position]').text());
							toEdit();

							function toEdit() {
								$('#editz').click(function() {

									var id = $(this).attr('data-id');
									ykp.doAjax({
										url: '/api/api_contract/grid',
										method: 'post',
										data: {
											limit: 999,
											filter: 'khm_customer.id=' + id,
											page: 1,
										},
										success: function(res) {
											var data = res.data.items;
											var flag = false;
											for(var i in data) {
												if(data[i]['htm_contract.contract_type'] == 1) { //如果有长期合同
													flag = true;
													break;
												}
											}
											ykp.setCookie('data-id', id);
											if(data.length > 0) {
												if(flag) {
													//如果有长期合同跳客户服务
													skPage('?url=customerService&i=0-1-0&type=1');
												} else {
													//否则跳合作客户
													skPage('?url=partner&i=0-2-0&type=1');
												}
											} else {
												//没有合同跳客户公海
												skPage('?url=seaOfclients&i=0-2-2&type=1');
											}
										}
									})
								})
							}

						}
					})
				}

				//获取联系人数据
				function getContactsList(page_size, id) {
					ykp.list({
						url: '/api/api_contact_book/grid',
						method: 'post',
						data: {
							filter: 'khm_contact_book.customer_id = ' + id,
							limit: page_size
						},
                        datacont:{
							id:"#lxnum"
						},
						pageBar: {
							id: '#lxpageBar'
						},
						loadList: function(res) {
							if(!alertMsg(res)) {
								return;
							}
							var _html = [];
							var data = res.data.items;
							var sexArr = ['', '男', '女', '未知']; //性别
							for(var i in data) {
								_html.push(
									`<tr data-id="${data[i]['khm_contact_book.id']}">
		                    			<td>${data[i]['khm_contact_book.num']}</td>
										<td>${data[i]['khm_contact_book.username']}</td>
										<td>${sexArr[data[i]['khm_contact_book.sex']]}</td>
										<td>${data[i]['khm_contact_book.phone']}</td>
										<td>${data[i]['khm_contact_book.telephone']}</td>
										<td>${data[i]['khm_contact_book.qq']}</td>
										<td>${data[i]['khm_contact_book.main_user'] == 1 ? '是' : '否'}</td>
										<td>${data[i]['khm_contact_book.is_main'] == 1 ? '是' : '否'}</td>
									</tr>`
								);
							}

							$('#templateCon .layui-tab-item.layui-show').find('tbody').html(_html.join(''));
							//联系人页面跳转
							$('.layui-tab-content>div').eq(2).find('tbody tr').click(function() {
								var id = $(this).attr('data-id')
								ykp.setCookie('detailsId', id, 1 / 24);
								skPage('?url=contacts&i=0-2-5&type=1');
								//window.location=;
							})
						}
					});
				}

				//联系人
				function contacts(id) {
					getContactsList(10, id);
				}


                //获取商机列表
                function getBusinessopprList(id, pagesize) {
                    ykp.list({
                        url: '/api/api_opportunity/grid',
                        method: 'post',
                        data: {
                            limit: pagesize,
                            filter: 'cwm_opportunity.customer_id =' + id,
                            page: 1
                        },
                        datacont:{
                            id:"#sjnum"
                        },
                        pageBar: {
                            id: '#sjpageBar'
                        },
                        loadList: function(res) {
                            var data = res.data.items;
                            if(!data || data.length == 0) {
                                $('#templateCon .layui-tab-item.layui-show .custom_table').eq(1).find('tbody').html(
                                    `<tr><td colspan="30" style="color:#7d7d7d;text-align:center !important;">暂无数据</td></tr>`
                                );
                                return;
                            }

                            var _data = [];
                            var html = '';
                            var visterStatus = ['未成交' ,'已成交' ,'挂起','已放弃'];
                            var xin = [];
                            var content = '';
                            var styles = [];
                            $('#dynamic-table th').each(function(i,e){
                                styles.push($(this).css('display'));
                            });
                            for(var i = 0; i < data.length; i++) {
                                // console.log(employees);
                                html += `<tr data-id=${data[i]['cwm_opportunity.id']}>
								
                                <td data-num="1" style="display:${styles[1]}" data-con="${data[i]['cwm_opportunity.cid']}">
                                    ${data[i]['cwm_opportunity.name']}
                                </td>
                                <td data-num="2" style="display:${styles[2]}" data-con="${data[i]['cwm_opportunity.customer_id']}" data-cid="${data[i]['cwm_opportunity.customer_id']}">
                                    <a class="customerDetail pos-rel" href="#">${data[i]['cwm_opportunity.customer_name']}</a>
                                    <label class="pos-rel">
				 					<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}" data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>
			 				 		</label>
                                </td>
                                <td class="center" data-num="3" style="display:${styles[3]}" data-con="${data[i]['cwm_opportunity.oppo_time']}">
                                       ${cs.getNowTime(data[i]['cwm_opportunity.oppo_time'])}
                                </td>
								
                                <td class="center" data-num="4" style="display:${styles[4]};text-align: right !important; " data-con="${data[i]['cwm_opportunity.price']}">
                                        	 ${data[i]['cwm_opportunity.price']}
                                     
                                </td>
                                <td class="center" data-num="5" style="display:${styles[5]}" data-con="${data[i]['cwm_opportunity.status']}">
                                    ${visterStatus[data[i]['cwm_opportunity.status']]}
                                </td>

                                <td class="center" data-num="6" style="display:${styles[6]}" data-con="${data[i]['cwm_opportunity.remark']}">
                                      
                                        	 ${data[i]['cwm_opportunity.remark']}
                                     
                                </td>
                                <td class="center" data-num="7" style="display:${styles[7]}" data-con="${data[i]['cwm_opportunity.possibility']}">
                                    ${((data[i]['cwm_opportunity.possibility']/5)*100).toFixed(2)+"%"}
                                       
                                </td>
                             
                                <td class="center" data-num="8" style="display:${styles[9]}" data-con="${data[i]['cwm_opportunity.source']}">
                                       
                                        	${data[i]['cwm_opportunity.source'] == 1 ? '线上' : '线下'}
                                       
                                </td>
                               
                                <td class="center" data-num="9" style="display:${styles[13]}" data-con="${data[i]['cwm_opportunity.master_user']}">
                                       
                                        	${data[i]['mast_info'] ? data[i]['mast_info']['name'] : ''}
                                        
                                </td>
                               
                                <td class="center" data-num="10" style="display:${styles[17]}" data-con="${data[i]['cwm_opportunity.create_user_name']}">
                                        
                                        	${employees[data[i]['cwm_opportunity.create_user']]}
                                </td>
                                <td class="center" data-num="11" style="display:${styles[18]}" data-con="${data[i]['cwm_opportunity.create_time']}">
                                       
                                        	${cs.getNowTime(data[i]['cwm_opportunity.create_time'],true)}
                                       
                                </td>
                                <td class="center" data-num="12" style="display:${styles[19]}" data-con="${data[i]['cwm_opportunity.last_modify_user']}">
                                     
                                        ${employees[data[i]['cwm_opportunity.last_modify_user']]}
                                       
                                </td>
                                <td class="center" data-num="13" style="display:${styles[20]}" data-con="${data[i]['cwm_opportunity.last_modify_time']}">
                                       
                                        ${cs.getNowTime(data[i]['cwm_opportunity.last_modify_time'],true)}
                                </td>
                                
                            </tr>`;

                            }

                            $('#templateCon .layui-tab-item.layui-show .custom_table').eq(0).find('tbody').html(html);

                            $('#templateCon .layui-tab-item').eq(3).find('.custom_table tbody tr').click(function() {
                         
                                var skId = $(this).attr('data-id');
                                ykp.setCookie('skId', skId, 1 / 24);
                                //window.location='?url=lackOfrecord&i=0-5-0&type=1';
                              skPage('?url=opportunity&i=0-2-8&type=1');
                            })
                        }
                    })
                }

                //商机
                function businessoppr(id) {
                    getBusinessopprList(id, 10);
                }

                var companies = {};
                //获取所有客户
                ykp.doAjax({
                    async: false,
                    url: '/api/api_customer/f7',
                    method: 'post',
                    data: {
                        select: 'khm_customer.id,khm_customer.name'
                    },
                    success: function(res) {
                        var data = res.data;
                        var option = '';
                        for(var i in data) {
                            option += `<option value="${data[i]['id']}"> ${data[i]['name']}</option>`;
                            companies[data[i]['id']] = data[i]['name']
                        }
                        $('.advandced-search2').select2({
                            allowClear: true
                        });
                        $('.advandced-search2').append(option);
                        //getList();
                    }
                });

                var serviceitems = [];

                //获取所有服务项目
                ykp.doAjax({
                    async: false,
                    url: '/api/api_product/f7',
                    method: 'post',
                    data: {
                        select: 'ckm_product.id,ckm_product.name'
                    },
                    success: function(res) {
                        var data = res.data;
                        for(var i in data) {
                            serviceitems[parseInt(data[i]['id'])] = data[i]['name'];
                            $('.advandced-search3').append(new Option(data[i]['name'], data[i]['id']));
                        }
                        $('.advandced-search3').select2({
                            allowClear: true
                        });

                    }
                });

                //获取拜访列表
                function getVisitList(id, pagesize) {

                    ykp.list({
                        url: '/api/api_visit/grid',
                        method: 'post',
                        data: {
                            limit: pagesize,
                            filter: 'cwm_visit.customer_id =' + id,
                            page: 1
                        },
                        datacont:{
                            id:"#bfnum"
                        },
                        pageBar: {
                            id: '#bfpageBar'
                        },
                        loadList: function(res) {
                            var data = res.data.items;
  //                          console.log(data);
                            if(!data || data.length == 0) {
                                $('#templateCon .layui-tab-item.layui-show .custom_table').eq(1).find('tbody').html(
                                    `<tr><td colspan="30" style="color:#7d7d7d;text-align:center !important;">暂无数据</td></tr>`
                                );
                                return;
                            }
                            var html = '';

                            var styles = [];
                            $('.thColor th').not(':first').each(function(i, e) {
                                styles.push($(this).css('display'));
                            });

                            //协访人员
                            var assistance;
                            var _assistance = [];
                            var _assistance1 = [];

                            var Status = ['已成交', '未成交', '已放弃', '已挂起'];
                            for(var i = 0; i < data.length; i++) {
                                assistance = data[i]['helper_list'] ? data[i]['helper_list'] : [];

                                for(var k in assistance) {
                                    _assistance.push(assistance[k]['name']);
                                    _assistance1.push(assistance[k]['id']);
                                }

                                html += `<tr data-id="${data[i]['cwm_visit.id']}">
							<td data-num="1" style="display:${styles[0]}">
								${data[i]['cwm_visit.id']}
							</td>
							<td data-num="2" style="display:${styles[1]}" data-cid="${data[i]['cwm_visit.customer_id']}">
								<a href="javascript:;" class="customerDetail pos-rel" title="#333333">${companies[data[i]['cwm_visit.customer_id']]}</a>
								<label class="pos-rel">
				 				<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}" data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>
			 				 </label>
							</td>
							<td class="" data-num="3" style="display:${styles[2]}">
								${data[i]['cwm_visit.theme']}
							</td>
							<td class="center" data-num="4" style="display:${styles[3]}" data-product="${data[i]['cwm_visit.product_id']}">
                                    <span class="lbl">
                                    	${serviceitems[data[i]['cwm_visit.product_id']]}
                                    </span>
							</td>
							
							<td class="center" data-num="5" style="display:${styles[4]}">
								
                                    <span class="lbl">${data[i]['cwm_visit.desc']}</span>
                                </label>
							</td>
							<td class="center" data-num="7" style="display:${styles[6]}" data-uid="${data[i]['cwm_visit.visit_id']}">
								
                                    <span class="lbl">${employees[data[i]['cwm_visit.visit_id']]}</span>
							</td>
							<td class="center" data-num="11" style="display:${styles[10]}" data-status="${data[i]['cwm_visit.status']}">
								
                                    <span class="lbl">${Status[data[i]['cwm_visit.status'] ]}</span>
							</td>
							<td class="center" data-num="6" style="display:${styles[5]}">
								
                                    <span class="lbl">${_assistance.join(',')}</span>
							</td>
							<td class="center" data-num="12" style="display:${styles[11]}">
								
                                    <span class="lbl">${employees[data[i]['cwm_visit.create_user']]}</span>
							</td>
							<td class="center" data-num="13" style="display:${styles[12]}">
								
                                    <span class="lbl">${cs.getNowTime(data[i]['cwm_visit.create_time'],true)}</span>
							</td>
							<td class="center" data-num="14" style="display:${styles[13]}">
								<span class="lbl">${data[i]['cwm_visit.update_time'] != 0 ? cs.getNowTime(data[i]['cwm_visit.update_time'],true) : ''}</span>
							</td>
							<td class="center" data-num="15" style="display:${styles[14]}">
                                   <span class="lbl">
                                   	 ${data[i]['cwm_visit.update_user'] != 0 ? employees[data[i]['cwm_visit.update_user']] : ''}
                                   </span>
							</td>
						</tr>`;

                                _assistance = [];
                            };

                            $('#templateCon .layui-tab-item.layui-show .custom_table').eq(0).find('tbody').html(html);

                            $('#templateCon .layui-tab-item').eq(4).find('.custom_table tbody tr').click(function() {
                                var skId = $(this).attr('data-id');
                                ykp.setCookie('skId', skId, 1 / 24);
                                //window.location='?url=lackOfrecord&i=0-5-0&type=1';
                                skPage('?url=visit&i=0-2-9&type=1');
                            })
                        }
                    })
                }

                //拜访
                function visit(id) {
                    getVisitList(id, 10);
                }

				//获取服务列表
				function getServiceList(id, element) {
					ykp.doAjax({
						showBlock: true,
						url: "/api/api_service/get_customer_service",
						method: 'get',
						data: {
							customer_id: id
						},
						success: function(res) {
							var data = res.data;
							if(!data || data.length == 0) {
								$('#templateCon .layui-tab-item.layui-show').html(
									`<div style="background-color: #c5e0f1;text-align:center;height: 40px;line-height: 40px;">
										暂无数据
									</div>`
								);
								return;
							}

							var data = res.data;
							var html = ['<div class="layui-collapse" lay-accordion>'];
							var list;
							var status;
							for(var i in data) {
								status = data[i].statue;
								list = data[i]['list'];
                               // console.log(data[i]['flow']);
                                html.push(
									`<div class="layui-colla-item lay-even lay-skin="line"">
									    <h2 class="layui-colla-title">
									    	<label>合同类型：长期合同</label>
									    	<i style="padding:0 20px;"></i>
									    	<label>订单编号：${data[i]['contract_code']}</label>
									    	<i style="padding:0 20px;"></i>
									    	<label>${status == 4 ? "已作废" : ""}</label>
									    </h2>
									    <div class="layui-colla-content">
									    	${generateServiceTable(list,data[i]['flow'] ? data[i]['flow'] : ['送单','整单']).join('') }
									    </div>
									</div>`);
							}

							html.push('</div></div>');
                            var table = $('#templateCon .layui-tab-item.layui-show').html(html.join('')).find(".border-table");
							//服务页面跳转
							$('.layui-tab-content>div').eq(3).find('tbody td').click(function() {
                                var id = $(this).attr('conid');
                                var type = $(this).attr('type');
                                ykp.setCookie('detailsId', id, 1 / 24);
                                skPage(service_url[type]);
                                //window.location=service_url[type];
							})
							// 绑定hover事件
							table.find(".service_icon")
								.mouseenter(function(){
									$(this).addClass("tr-hover").next().addClass("tr-hover");
								})
								.mouseleave(function(){
									$(this).removeClass("tr-hover").next().removeClass("tr-hover");
								});
							table.find(".linesss")
								.mouseenter(function(){
									$(this).addClass("tr-hover").prev().addClass("tr-hover");
								})
								.mouseleave(function(){
									$(this).removeClass("tr-hover").prev().removeClass("tr-hover");
								});
							element.init();
						}
					})
				}

				//生成服务信息td
				function generateServiceTable(list, flow) {
                    var month;
					var html = [];
					var th = "";
					flow = JSON.parse(flow);
                    for(var i in flow) {
						th += "<th>" + flow[i] + "</th>"
					}
					html.push(
						`<div class="custom_table">
							<table class="border-table">
								<thead>
									<tr>
										<th class="year"></th>
										${th}
									</tr>
								</thead>
								<tbody class="all_service_data">`
					);

					var _html;
					var detail = {};
					var _detail = new Array(2);
					var index = ['', 'fa fa-circle-o', 'glyphicon glyphicon-ok', 'glyphicon glyphicon-remove'];
					for(var i in list) {
						month = i; //.substring(4);

						detail = list[i];
                        for(var k in detail) {
							_detail[k - 1] = detail[k];
						}
                        for(var k = 0; k < _detail.length; k++) {
							if(_detail[k]) { //月
								_html = $(
									`<tr class="service_icon" >
										<td rowspan="2"  class="month lines" get_money="${_detail[k]['get_money']}" >
											${month}
										</td>
									</tr>
									<tr class="linesss " style="backbround:red">
									</tr>`
								);
								break;
							}
						}

						for(var k = 0; k < _detail.length; k++) {
							if(_detail[k]) {
								_html.eq(0).append(
									`<th class="lines"  conid="${_detail[k] ? _detail[k]['contract_id'] : ''}" type="t${_detail[k]['type']}">
									${_detail[k] ? (_detail[k]['status'] == 2 ? (_detail[k]['refer_id'] != '0' ? employees[_detail[k]['refer_id']] : '') : '') : ''}
								</th>`);
								_html.eq(2).append(
									`<th class="lines"   conid="${_detail[k]['contract_id']}" type="t${_detail[k]['type']}">
										${_detail[k] ? (_detail[k]['status'] == 2 ? (_detail[k]['refer_time'] != 0 ? cs.getNowTime(_detail[k]['refer_time'],true) : '' )  : '') : ''}
									</th>`);
							}
						}
                        html.push(_html.eq(0).prop('outerHTML'));
						html.push(_html.eq(1).prop('outerHTML'));
						html.push(_html.eq(2).prop('outerHTML'));
						_detail = [];
					}

					html.push('</tbody></table></div>');
                   // console.log(html.join(''));
                    return html;
				}

				//服务页面url的数组
				var service_url = {
					t1: '?url=customer&i=0-1-5&type=1',
					t2: '?url=getList&i=0-1-2&type=1',
					t3: '?url=entire&i=0-1-3&type=1',
					t4: '?url=account&i=0-1-4&type=1',
					t5: '?url=tax&i=0-1-6&type=1',
					t6: '?url=single&i=0-1-7&type=1'
				}

				//服务
				function service(id, element) {
					getServiceList(id, element);
				}

				//团队
				function team(id, element) {
					ykp.doAjax({
						showBlock: true,
						url: "/api/api_contract/get_contract_list2",
						method: 'get',
						data: {
							order: 'htm_contract.contract_type desc',
							company_id: id
						},
						success: function(res) {
							// return;
							var data = res.data;
							if(!data || data.length == 0) {
								$('#templateCon .layui-tab-item.layui-show').html(
									`<div style="background-color: #c5e0f1;text-align:center;height: 40px;line-height: 40px;">
										暂无数据
									</div>`
								);
								return;
							}

							//加载select2
							ykp.loadJs('/resource/adimin/components/select2/dist/js/select2.js');

							$('#templateCon .layui-tab-item.layui-show').html('');

							var employees = []; //所有员工
							ykp.doAjax({
								async: false,
								url: '/api/api_employees/f7',
								method: 'post',
								data: {
									select: 'bmm_employees.id,bmm_employees.name'
								},

								success: function(res) {
									var data = res.data;
									for(var i in data) {
										if(data[i]['name']) {
											employees[data[i]['id']] = data[i]['name'];
										}

									}
								}
							});

							var html = ['<div class="layui-collapse" lay-accordion>']; //折叠面板
							var _html = []; //面板内容
							var flow_detail = []; //流程详情
							var relation = []; //关注人 id

							var tr = ''; //面板内容中的每一条tr
							var num = 1;
							for(var i in data) {
								staff_list = data[i]['staff_list'];

								_html.push(
									`<div class="custom_table" contract_id="${data[i]['id']}">
										<table style="margin-bottom:5px;">
											<thead>
												<tr>
													<th>序号</th>
													<th>${data[i]['contract_type'] == '1' ? '产品流程' : '产品名称'}</th>
													<th>负责人</th>
													<th>${data[i]['contract_type'] == '1' ? '关注人' : '协作人'}</th>
												</tr>
											</thead>
											<tbody>`
								);

								for(var k in staff_list) {
									relation = data[i]['contract_type'] == 1 ? staff_list[k]['relation_staff_id'].split(',') : staff_list[k]['team_id'].split(',');

									_html.push(
										`<tr data-type="${data[i]['contract_type']}" flow_name="${data[i]['contract_type'] == '1' ? staff_list[k]['process'] : ''}" task_id="${data[i]['contract_type'] == '1' ? staff_list[k]['task_id'] : staff_list[k]['id']}">
											<td>${num++}</td>
											<td>${data[i]['contract_type'] == '1' ? staff_list[k]['process'] : staff_list[k]['priduct_name']}</td>
											<td>${data[i]['contract_type'] == '1' ? (staff_list[k]['staff_id'] != '0' ? employees[staff_list[k]['staff_id']] : '') : (staff_list[k]['one_fuze'] != '0' ? employees[staff_list[k]['one_fuze']] : '')}</td>
											<td>
												<select id="state" multiple="" name="state" staff_ids="${relation.join(',')}" class="select2 select2-hidden-accessible" style="width: 500px;" tabindex="-1" aria-hidden="true">
												</select>
												<span contentAuthority="253">
													<button class="save_relation btn btn-info btn-sm" style="padding:7px 12px;">
														保存
													</button>
												</span>
											</td>
										</tr>`
									);

									relation = [];
								}

								_html.push(
									`</tbody></table></div>`
								);

								html.push(
									`<div class="layui-colla-item">
									    <h2 class="layui-colla-title">
									    	<label>合同类型：</label>
									    	<label style="width:60px !important;text-align:left;">${(data[i]['contract_type'] == 1 ? '长期合同' : '一次性合同')}</label>
									    	<i style="padding:0 20px;"></i>
									    	<label>订单编号：${data[i]['contract_code']}</label>
									    </h2>
									    <div class="layui-colla-content">
									    	${_html.join('')}
									    </div>
									</div>`
								);
								_html = [];
								num = 1;
							}

							html.push('</div></div>');
							$('#templateCon .layui-tab-item.layui-show').html(html.join(''));
							if(cs.getNodes([253], true)) {
								$('#templateCon [contentAuthority="253"]').show();
							}

							//select2默认值
							$('#templateCon .layui-tab-item .select2').each(function(index, element) {

								for(var i in employees) {

									$(this).append(new Option(employees[i], i));
								}

								if($(this).attr('staff_ids').trim()) {
									$(this).val($(this).attr('staff_ids').split(',')).trigger('change');
								}
							});

							//启用select2
							$('#templateCon .layui-tab-item .select2').select2({
								allowClear: true
							});

							//保存关注人的修改
							$('#templateCon .save_relation').unbind('click').click(function() {
								var postdata = {};
								// console.log($(this).parent().parent().find('[staff_ids]'));
								var data = $(this).parent().parent().find('[staff_ids]').select2('data');
								var relation_id = [];
								for(var i in data) {
									relation_id.push(data[i]['id']);
								}
								postdata['relation_id'] = relation_id.join(',');
								postdata['task_id'] = $(this).parents('tr').attr('task_id');
								postdata['contract_id'] = $(this).parents('.custom_table').attr('contract_id');
								postdata['company_id'] = id;
								postdata['flow_name'] = $(this).parents('tr').attr('flow_name');
								var msg = $(this).parents('tr').attr('data-type') == 2 ? '协作人修改成功' : '关注人修改成功';
								ykp.doAjax({
									url: '/api/api_contract/set_contract_info',
									method: 'post',
									data: postdata,
									success: function(res) {
										ykp.prompt(msg);
										// $('#templateCon [lay-id="td"]').click();
									}
								});
							});
							//重新渲染面板
							element.init('collapse');
						}
					})
				}

				//合同
				function contract(id, element) {
					ykp.doAjax({
						showBlock: true,
						url: "/api/api_contract/grid",
						method: 'post',
						data: {
							filter: "khm_customer.id = " + id,
							order: 'htm_contract.contract_type desc',
							limit: 10
						},
						success: function(res) {
							var data = res.data.items;

							if(!data || data.length == 0) {
								$('#templateCon .layui-tab-item.layui-show').html(
									`<div style="background-color: #c5e0f1;text-align:center;height: 40px;line-height: 40px;">
										暂无数据
									</div>`
								);
								return;
							}

							$('#templateCon .layui-tab-item.layui-show').html('');

							var service_product = []; //所有服务产品
							ykp.doAjax({
								async: false,
								url: '/api/api_product/f7',
								method: 'post',
								data: {
									select: 'ckm_product.id,ckm_product.name,ckm_product.type,ckm_product.price',
									filter: 'ckm_product.is_del <> 1'
								},
								success: function(res) {
									service_product = res.data;
								}
							});

							var employees = []; //所有员工
							ykp.doAjax({
								async: false,
								url: '/api/api_employees/f7',
								method: 'post',
								data: {
									select: 'bmm_employees.id,bmm_employees.name'
								},
								success: function(res) {
									var data = res.data;
									for(var i in data) {
										employees[data[i]['id']] = data[i]['name'];
									}
								}
							});

							var _html = [];
							var html = ['<div class="layui-collapse" lay-accordion>'];

							var approve_statu = ['审核中', '审核失败', '审核成功']; //审批状态
							var spStatus = cs.getSpStatus('合同', true);
							var cStatus = ['未激活', '已激活', '已挂起', '已结束', '已作废']; //合同状态
							var cycle = {
								'1': '每月',
								'3': '季度',
								'6': '半年',
								'12': '每年'
							}; //服务周期
							var source = ['', '线上', '线下']; //订单来源

							var salesman_id = []; //业务人员id
							var salesman = []; //业务人员
							var task = []; //任务
							var task_detail = {}; //任务详情

							for(var i in data) {
								task_detail['product'] = [];
								task = data[i]['task'];
								salesman_id = data[i]['market'];
								for(var k in salesman_id) {
									salesman.push(salesman_id[k]['info']['name']);
								}

								for(var k in task) {
									if(k == 0) {
										task_detail['start_time'] = task[k]['start_time'];
										task_detail['end_time'] = task[k]['end_time'];
									}

									if(k != 0) {
										task_detail['start_time'] = task_detail['start_time'] > task[k]['start_time'] ? task[k]['start_time'] : task_detail['start_time'];
										task_detail['end_time'] = task_detail['end_time'] > task[k]['end_time'] ? task_detail['end_time'] : task[k]['end_time'];
									}

									if(data[i]['htm_contract.contract_type'] == 1) {
										task_detail['pricing'] = task[k]['pricing'];
										task_detail['discount'] = task[k]['discount'];
										task_detail['count'] = task[k]['count'];
										task_detail['count_send'] = task[k]['count_send'];
									}

									if(data[i]['htm_contract.contract_type'] == 2) {
										task_detail['pricing'] = '';
										task_detail['discount'] = '';
										task_detail['count'] = '';
										task_detail['count_send'] = '';
									}

									task_detail['product'].push(task[k]['productName']);
								}

								if(data[i]['htm_contract.contract_type'] == 1) {
									//<td class="unite-label">标准价</td> <td data-title="pricing">${task_detail['pricing']}</td>
									_html.push(
										`<table style="margin-bottom:5px;">
											<tr>
												<td class="unite-label">客户名称</td>
												<td data-title="name">${data[i]['khm_customer.name']}</td>
												<td class="unite-label">订单来源</td>
												<td data-title="is_source">${source[data[i]['htm_contract.is_source']]}</td>
											</tr>
											<tr>
												<td class="unite-label">合同类型</td>
												<td data-title="contract_type">${data[i]['htm_contract.contract_type'] == 1 ? '长期合同' : '一次性合同'}</td>
												<td class="unite-label">合同编码</td>
												<td data-title="contract_num">${data[i]['htm_contract.contract_num']}</td>
											</tr>
											<tr>
												<td class="unite-label">服务产品</td>
												<td data-title="productName">${task_detail['product']}</td>
												<td class="unite-label">数量</td>
												<td data-title="count">${task_detail['count']}</td>
											</tr>
											<tr>
												<td class="unite-label">赠送</td>
												<td data-title="count_send">${task_detail['count_send']}</td>												
											</tr>
											<tr>
												<td class="unite-label">折扣价</td>
												<td data-title="discount">${task_detail['discount']}</td>
												<td class="unite-label">折后总额</td>
												<td data-title="discount_total">${data[i]['htm_contract.discount_total']}</td>
											</tr>
											<tr>
												<td class="unite-label">账本费</td>
												<td data-title="account_book">${data[i]['htm_contract.account_book']}</td>
												<td class="unite-label">服务周期</td>
												<td data-title="payment_cycle">${cycle[data[i]['htm_contract.payment_cycle']]}</td>
											</tr>
											<tr>
												<td class="unite-label">合同总额</td>
												<td data-title="total">${eval(data[i]['htm_contract.account_book'] + '+' + data[i]['htm_contract.discount_total']).toFixed(2)}</td>
												<td class="unite-label">收款周期</td>
												<td data-title="get_cycle">${data[i]['htm_contract.get_cycle']}个月</td>
											</tr>
											<tr>
												<td class="unite-label">业务员</td>
												<td colspan="3" data-title="market">${salesman.join(',')}</td>
											</tr>
											<tr>
												<td class="unite-label">签约时间</td>
												<td data-title="signed_time">${data[i]['htm_contract.create_time'] !=  '0' ? cs.getNowTime(data[i]['htm_contract.create_time']) : ''}</td>
				                                <td class="unite-label">发票认证</td>
				                                <td data-title="is_tax">${data[i]['htm_contract.is_tax'] == '0' ? '否' : '是'}</td>
											</tr>
											<tr>
												<td class="unite-label">开始时间</td>
												<td data-title="start_time">${task_detail['start_time'] != 0 ? cs.getNowTime(task_detail['start_time']) : ''}</td>
												<td class="unite-label">截至时间</td>
												<td data-title="end_time">${task_detail['end_time'] != 0 ? cs.getNowTime(task_detail['end_time']) : ''}</td>
											</tr>
											<tr>
												<td class="unite-label">合同状态</td>
												<td data-title="status">${spStatus ? cStatus[data[i]['htm_contract.status']] : "无需审批"}</td>
												<td class="unite-label">备注</td>
												<td data-title="remark">${data[i]['htm_contract.remark']}</td>
											</tr>
											<tr>
												<td class="unite-label">创建人</td>
												<td data-title="create_by">${employees[data[i]['htm_contract.create_by']]}</td>
												<td class="unite-label">创建时间</td>
												<td data-title="create_time">${data[i]['htm_contract.create_time'] !=  '0' ? cs.getNowTime(data[i]['htm_contract.create_time']) : ''}</td>
											</tr>
											<tr>
												<td class="unite-label">已收款金额</td>
												<td data-title="get_money">${data[i]['htm_contract.get_money']}</td>
												<td class="unite-label">待收款金额</td>
												<td data-title="name">${eval(data[i]['htm_contract.total_monry']+'-'+data[i]['htm_contract.get_money']).toFixed(2)}</td>
											</tr>
										</table>`
									);
								}

								if(data[i]['htm_contract.contract_type'] == 2) {
									_html.push(
										`<table style="margin-bottom:5px;">
											<tr>
												<td class="unite-label">客户名称</td>
												<td colspan="3" data-title="name">${data[i]['khm_customer.name']}</td>
											</tr>
											<tr>
												<td class="unite-label">合同类型</td>
												<td data-title="contract_type">${data[i]['htm_contract.contract_type'] == 1 ? '长期合同' : '一次性合同'}</td>
												<td class="unite-label">合同编码</td>
												<td data-title="contract_num">${data[i]['htm_contract.contract_num']}</td>
											</tr>
											<tr>
												<td class="unite-label">服务项目</td>
												<td data-title="productName">${task_detail['product']}</td>
												<td class="unite-label">合同金额</td>
												<td data-title="discount_total">${data[i]['htm_contract.discount_total']}</td>
											</tr>
											<tr>
												<td class="unite-label">业务员</td>
												<td data-title="market">${salesman.join(',')}</td>
												<td class="unite-label">签约时间</td>
												<td data-title="signed_time">${data[i]['htm_contract.signed_time'] != '0' ? cs.getNowTime(data[i]['htm_contract.signed_time']) : ''}</td>
											</tr>
											<tr>
												<td class="unite-label">开始时间</td>
												<td data-title="start_time">${task_detail['start_time'] != 0 ? cs.getNowTime(task_detail['start_time']) : ''}</td>
												<td class="unite-label">截至时间</td>
												<td data-title="end_time">${task_detail['end_time'] != 0 ? cs.getNowTime(task_detail['end_time']) : ''}</td>
											</tr>
											<tr>
												<td class="unite-label">合同状态</td>
												<td data-title="status">${spStatus ? cStatus[data[i]['htm_contract.status']] : "无需审批"}</td>
												<td class="unite-label">备注</td>
												<td data-title="remark">${data[i]['htm_contract.remark']}</td>
											</tr>
											<tr>
												<td class="unite-label">创建人</td>
												<td data-title="create_by">${employees[data[i]['htm_contract.create_by']]}</td>
												<td class="unite-label">创建时间</td>
												<td data-title="create_time">${data[i]['htm_contract.create_time'] !=  '0' ? cs.getNowTime(data[i]['htm_contract.create_time']) : ''}</td>
											</tr>
											<tr>
												<td class="unite-label">已收款金额</td>
												<td data-title="get_money">${data[i]['htm_contract.get_money']}</td>
												<td class="unite-label">待收款金额</td>
												<td data-title="name">${eval(data[i]['htm_contract.total_monry']+'-'+data[i]['htm_contract.get_money'])}</td>
											</tr>
										</table>`
									);
								}

								html.push(
									`<div class="layui-colla-item">
									    <h2 class="layui-colla-title">
									    	<label>合同类型：</labe>
									    	<label style="width:60px !important;text-align:left;">${(data[i]['htm_contract.contract_type'] == 1 ? '长期合同' : '一次性合同')}</label>
									    	<i style="padding:0 20px;"></i>
									    	<label>签约时间：${data[i]['htm_contract.create_time'] !=  '0' ? cs.getNowTime(data[i]['htm_contract.create_time']) : ''}</label>
									    	<i style="padding:0 20px;"></i>
									    	<label>订单编号：${data[i]['htm_contract.contract_code']}</label>
									    	
									    </h2>
									    <div class="layui-colla-content">${_html.join('')}</div>
									</div>`
								);

								salesman_id = [];
								salesman = [];
								tasks = [];
								task_detail = {};
								_html = [];
							}
							html.push('</div>');
							$('#templateCon .layui-tab-item.layui-show').html(html.join(''));

							element.init();
						}
					})
				}

				//生成td
				function generateTd(obj) {
					// console.log(obj);
					if(!obj) {
						return `<td get_money></td>`;
					}
					var index = ['', 'fa fa-circle-o', 'glyphicon glyphicon-ok', 'glyphicon glyphicon-remove'];
					return `<td get_money="${obj['get_money']}" money_status="${obj['money_status']}"><label class="${index[obj['money_status']]}"></label></td>`;
				}

				//获取收款列表
				function getGatheringList(id, pagesize) {
					//					ykp.doAjax({
					//						showBlock:true,
					//						url: '/api/api_finance/qklist',
					//						method: 'post',
					//						data: {
					//							page_size: 10,
					//							where: 'htm_contract.customer_id = ' + id,
					//							page:1
					//						},
					//						success:function(res){
					//							var data = res.data.items;
					//							if(!data || data.length == 0){
					//								$('#templateCon .layui-tab-item.layui-show .custom_table').eq(0).find('tbody').html(
					//									`<tr><td colspan="30" style="color:#7d7d7d;text-align:center !important;">暂无数据</td></tr>`
					//								);
					//								return;
					//							}
					//							var html = [];
					//							var info;
					//							var _info = [];
					//							for(var i in data){
					//								info = data[i]['list'];
					//
					//								for(var k in info){
					//									_info[info[k]['time'].substring(4) - 1] = {get_money:info[k]['get_money'],money_status:info[k]['money_status']};
					//								}
					//
					//								html.push(
					//									`<tr conid="${data[i]['contract_id']}">
					//										<td>${data[i]['info']['htm_contract.contract_code']}</td>
					//										<td>${data[i].overdue}</td>
					//										<td>${data[i].yq_money}元</td>`
					//								);
					//
					//
					//								for(var k=0;k<12;k++){
					//									html.push(generateTd(_info[k]));
					//								}
					//
					//								html.push('</td>');
					//								_info = [];
					//							}
					//							$('#templateCon .layui-tab-item.layui-show .custom_table').eq(0).find('tbody').html(html.join(''));
					//							//欠款页面跳转
					//							$('.layui-tab-item').eq(6).find('.custom_table tbody tr').click(function(){
					//						 		var index = $(this).parents('.custom_table').index();
					//						 		var conid = $(this).attr('conid');//合同id
					//						 		var _url = index==0?'/api/api_finance/qklist':'/api/api_finance/qk_other_list';//属于记账还是其他
					//								ykp.setCookie('detailsId',conid,1/24);
					//								ykp.setCookie('_url',_url,1/24);
					//								//window.location='?url=lackOfrecord&i=0-5-0&type=1';
					//								skPage('?url=lackOfrecord&i=0-5-0&type=1')
					//							})
					//						}
					//					})
					ykp.list({
						url: '/api/api_finance/receivables_list',
						method: 'post',
						data: {
							limit: pagesize,
							filter: 'khm_customer.id = ' + id,
							page: 1
						},
                        datacont:{
                            id:"#shouknum"
                        },
                        pageBar: {
                            id: '#shoukpageBar'
                        },
						loadList: function(res) {
							var data = res.data.items;
							if(!data || data.length == 0) {
								$('#templateCon .layui-tab-item.layui-show .custom_table').eq(1).find('tbody').html(
									`<tr><td colspan="30" style="color:#7d7d7d;text-align:center !important;">暂无数据</td></tr>`
								);
								return;
							}

							var html = '';
							var get_way = ['', '现金', '支付宝', '微信', '银行卡'];
							var sstatus = ['', '待审核', '通过', '未通过'];
							var ths = $('#dynamic-table .thColor th');
							var styles = [];
							for(i = 0; i < ths.length; i++) {
								styles.push(ths.eq(i).css('display'));
							}
							//审批权限为true可以审批,为false不可审批
							var spApp = cs.approve_authority({
								name: '收款',
								nodes: [163]
							});
							var cxApp = cs.approve_authority({
								name: '收款',
								nodes: [271]
							});
							var product_name = {};
							var arr = [];
							for(var i in data) {
								if(data[i]['product_name']) {
									arr = [];
									data[i]['product_name'].forEach(function(item) {
										arr.push(item.name);
									})
									product_name[i] = arr.join(',');
								} else {
									product_name[i] = data[i]['cwm_receivables.product_name'];
								}
							}

							var customer_name;
							for(var i in data) {
								customer_name = '<a class="customerDetail pos-rel" href="#">' + data[i]['khm_customer.name'] + '</a> ' +
									'<label class="pos-rel"> <i class="iconBnt fa fa-info-circle" style="color:' + (data[i]['Remark'].length > 0 ? 'red' : "") + '"  data-rel="tooltip" data-placement="right" data-html="true" title="' + cs.getRemark(data[i]["Remark"]) + '" ></i></label>';
								html +=
									'<tr data-id="' + data[i]['cwm_receivables.id'] + '" data-status="' + data[i]['cwm_receivables.status'] + '">' +
									'<td style="display: ' + styles[2] + '" data-num="1"><sapn class="cedit">' + data[i]['cwm_receivables.num'] + '</span></td>' +
									'<td data-cid="' + data[i]['khm_customer.id'] + '" style="display:' + styles[3] + '" data-num="2"><a class="customerDetail pos-rel" href="#">' + (data[i]['cwm_receivables.customer_id'] != '0' ? customer_name : data[i]['cwm_receivables.customer_name']) + '</a></td>' +
									'<td style="display: ' + styles[4] + '" data-num="3"><sapn class="cedit">' + (data[i]['cwm_receivables.order_id'] != '0' ? data[i]['cwm_receivables.order_id'] : '') + '</sapn></td>' +
									'<td style="display: ' + styles[5] + '" data-num="4"><sapn class="cedit">' + product_name[i] + '</sapn></td>' +
									'<td style="display: ' + styles[6] + '" data-num="5" data-status="' + data[i]['cwm_receivables.status'] + '"><sapn class="cedit">' + sstatus[data[i]['cwm_receivables.status']] + '</sapn></td>' +
									'<td style="display: ' + styles[7] + '" data-num="6"><sapn class="cedit">' + data[i]['cwm_receivables.confirm_remark'] + '</sapn></td>' +
									'<td style="display: ' + styles[8] + '" data-num="7"><sapn class="cedit">' + (data[i]['cwm_receivables.get_time'] != '0' ? ykp.formatDate(new Date(parseInt(data[i]['cwm_receivables.get_time'] * 1000)), 'Y-M-d') : '') + '</sapn></td>' +
									'<td style="display: ' + styles[9] + '" data-num="8"><sapn class="cedit">' + (parseInt(data[i]['cwm_receivables.get_money']) + parseInt(data[i]['cwm_receivables.get_account_book'])).toFixed(2) + '</sapn></td>' +
									'<td style="display: ' + styles[10] + '" data-num="9"><sapn class="cedit">' + get_way[data[i]['cwm_receivables.get_way']] + '</sapn></td>' +
									'<td style="display: ' + styles[11] + '" data-num="10"><sapn class="cedit">' + data[i]['xtm_kh_bank.bank_name'] + '</sapn></td>' +
									'<td style="display: ' + styles[12] + '" data-num="11"><sapn class="cedit">' + (data[i]['cwm_receivables.receiver'] ? employees[data[i]['cwm_receivables.receiver']] : '') + '</sapn></td>' +
									'<td style="display: ' + styles[13] + '" data-num="12"><sapn class="cedit">' + data[i]['cwm_receivables.remark'] + '</sapn></td>' +
									'<td style="display: ' + styles[14] + '" data-num="13"><sapn class="cedit">' + employees[data[i]['cwm_receivables.create']] + '</sapn></td>' +
									'<td style="display: ' + styles[15] + '" data-num="14"><sapn class="cedit">' + (data[i]['cwm_receivables.create_at'] != '0' ? ykp.formatDate(new Date(parseInt(data[i]['cwm_receivables.create_at'] * 1000)), 'Y-M-d H:m:s') : '') + '</sapn></td>' +
									'<td style="display: ' + styles[16] + '" data-num="15"><sapn class="cedit">' + (data[i]['cwm_receivables.confirm'] ? employees[data[i]['cwm_receivables.confirm']] : '') + '</sapn></td>' +
									'<td style="display: ' + styles[17] + '" data-num="16"><sapn class="cedit">' + (data[i]['cwm_receivables.confirm_at'] != '0' ? ykp.formatDate(new Date(parseInt(data[i]['cwm_receivables.confirm_at'] * 1000)), 'Y-M-d H:m:s') : '') + '</sapn></td>' +
									'</tr>'
							};
							$('#templateCon .layui-tab-item.layui-show .custom_table').eq(0).find('tbody').html(html);

							$('#templateCon .layui-tab-item').eq(6).find('.custom_table tbody tr').click(function() {
								var skId = $(this).attr('data-id');
								ykp.setCookie('skId', skId, 1 / 24);
								//window.location='?url=lackOfrecord&i=0-5-0&type=1';
								skPage('?url=collectionRecord&i=0-5-1&type=1');
							})
						}
					})
				}

				//收款
				function getmoney(id) {
					getGatheringList(id, 10);
				}

				//获取支出列表
				function getExpenditureList(page_size, id) {
					ykp.list({
						url: '/api/api_finance/expenditure_list',
						method: 'post',
						data: {
							limit: page_size,
							filter: "cwm_expenditure.object_type = 1 and cwm_expenditure.object = " + id
						},
                        datacont:{
                            id:"#zcnum"
                        },
						pageBar: {
							id: '#zcpageBar'
						},
						loadList: function(res) {
							if(!alertMsg(res)) {
								return;
							}
							var data = res.data.items;
							var _html = [];

							//审批状态
							var status = ['审核中', '审批失败', '审批成功'];
							//支出类别
							var give_types = ['', '退款', '费用', '报销'];
							//支付方式
							var give_ways = ['', '现金', '支付宝', '微信', '银行卡'];

							var spStatus = cs.getSpStatus('支出', true);

							for(var i in data) {
								_html.push(
									`<tr data-id="${data[i]['cwm_expenditure.id']}">
										<td>${data[i]['cwm_expenditure.id']}</td>
										<td>${data[i]['cwm_expenditure.order_id']}</td>
										<td>${(spStatus ?status[data[i]['cwm_expenditure.status']] : "")}</td>
										<td>${data[i]['cwm_expenditure.give_time'] != '0' ? cs.getNowTime(data[i]['cwm_expenditure.give_time']) : ''}</td>
										<td>${data[i]['cwm_expenditure.give_money']}</td>
										<td>${give_types[data[i]['cwm_expenditure.give_way']]}</td>
										<td>${give_ways[data[i]['cwm_expenditure.give_type']]}</td>
										<td>${data[i]['cwm_expenditure.accounts']}</td>
										<td>${data[i]['cwm_expenditure.duty_name']}</td>
										<td title="${data[i]['cwm_expenditure.remark']+data[i]['cwm_expenditure.remark']}" style="width:150px;">${data[i]['cwm_expenditure.remark']}</td>
									</tr>`
								)
							}
							$('#templateCon .layui-tab-item.layui-show').find('tbody').html(_html.join(''));
							//支出页面跳转
							$('.layui-tab-content>div').eq(7).find('tbody tr').click(function() {
								var id = $(this).attr('data-id'); //该条记录的id
								ykp.setCookie('detailsId', id, 1 / 24);
								//window.location='?url=expenditure&i=0-5-4&type=1';
								skPage('?url=expenditure&i=0-5-4&type=1')
							})
						}
					})
				}

				//支出
				function expenditure(id) {
					getExpenditureList(10, id);
				}

				//获取开票列表
				function getBillingList(page_size, id) {
					ykp.list({
						url: '/api/api_comprehensive_bill/grid',
						method: 'post',
						data: {
							page_size: page_size,
							filter: "zhm_comprehensive_bill.customer_id = " + id
						},
                        datacont:{
                            id:"#kpnum"
                        },
                        pageBar: {
                            id: '#kppageBar'
                        },
						loadList: function(res) {
							if(!alertMsg(res)) {
								return;
							}

							var data = res.data.items;
							var _html = [];

							//审批状态
							var status = ['审核中', '审批失败', '审批成功'];
							var spStatus = cs.getSpStatus('开票', true);

							for(var i in data) {
								_html.push(
									`<tr data-id="${data[i]['zhm_comprehensive_bill.id']}">
										<td>${data[i]['zhm_comprehensive_bill.bill_id']}</td>
										<td>${data[i]['khm_customer.name']}</td>
										<td>${data[i]['zhm_comprehensive_bill.order_number']}</td>
										<td>${(spStatus ?status[data[i]['zhm_comprehensive_bill.status']] : "无需审批")}</td>
										<td>${data[i]['zhm_comprehensive_bill.bill_date'] != '0' ? cs.getNowTime(data[i]['zhm_comprehensive_bill.bill_date']) : ''}</td>
										<td>${data[i]['zhm_comprehensive_bill.bill_money']}</td>
										<td>${data[i]['zhm_comprehensive_bill.bill_type'] == 1 ? '增值税专用发票' : '普通'}</td>
										<td>${data[i]['zhm_comprehensive_bill.bill_number']}</td>
										<td>${data[i]['zhm_comprehensive_bill.>bill_header_type'] == 1 ? '公司' : '个人'}</td>
										<td>${data[i]['zhm_comprehensive_bill.bill_header']}</td>
										<td>${data[i]['khm_customer.social_credit_code']}</td>
									</tr>`
								)
							}

							$('#templateCon .layui-tab-item.layui-show').find('tbody').html(_html.join(''));
							//开票页面跳转
							$('.layui-tab-content>div').eq(8).find('tbody tr').click(function() {
								var id = $(this).attr('data-id'); //该条记录的id
								ykp.setCookie('detailsId', id, 1 / 24);
								//window.location='?url=pf_billing&i=0-2-10&type=1';
								skPage('?url=pf_billing&i=0-2-10&type=1');
							})
						}
					})
				}

				//开票
				function billing(id) {
					getBillingList(10, id);
				}

				//获取物品列表
				function getGoodsList(id, type) {
					// var filter;
					// if(url.indexOf('inventory') != '-1'){
					// 	filter = 'ckm_inventory.customer_id = ' + id;
					// }
					// if(url.indexOf('inventory') == '-1'){
					// 	filter = 'customer_id = ' + id;
					// }
					ykp.doAjax({
						url: '/api/api_accountancies/get_num_info',
						method: 'post',
						data: {
							customer_id: id,
							type: type
						},
						success: function(res) {
							var data = res.data;
							if(!data || data.length == 0) {
								$('#templateCon .layui-colla-content.layui-show tbody').html(
									`<tr><td colspan="30" style="color:#7d7d7d;text-align:center !important;">暂无数据</td></tr>`
								);
								return;
							}
							handleGoodsData(data, id);
						}
					});
				}

				//处理物品数据
				function handleGoodsData(data, id) {
					var goods_html = [];

					for(var i in data) {
						goods_html.push(
							`<tr>
								<td style="width:15%;text-align:center !important;">物品名称</td>
								<td style="width:35%;text-align:center !important;">${data[i]['goods']}</td>
								<td style="width:15%;text-align:center !important;">物品数量</td>
								<td style="width:35%;text-align:center !important;">${data[i]['count']}</td>
							</tr>`
						);
					}
					// if(!type){
					// 	var Status = ['未审核','未通过','已通过'];  //审核状态
					// 	var Type = ['','凭证','单据','证件'];  //仓库名称
					// 	for(var i in data){
					// 		html.push(
					// 			`<tr data-id="${data[i]['ckm_inventory.id']}">
					// 				<td>${data[i]['ckm_inventory.num']}</td>
					// 				<td>${data[i]['ckm_inventory.pd_time'] != 0 ? cs.getNowTime(data[i]['ckm_inventory.pd_time']) : ''}</td>
					// 				<td>${Type[data[i]['ckm_inventory.type']]}仓</td>
					// 				<td>${1}</td>
					// 				<td>${data[i]['ckm_inventory.kc_goods']}</td>
					// 				<td>${data[i]['ckm_inventory.kc_num']}</td>
					// 				<td>${data[i]['ckm_inventory.pd_num']}</td>
					// 				<td>${data[i]['ckm_inventory.pd_kc']}</td>
					// 				<td>${1}</td>
					// 				<td>${employees[data[i]['ckm_inventory.create_id']]}</td>
					// 				<td>${data[i]['ckm_inventory.create_at'] !='0' ? cs.getNowTime(data[i]['ckm_inventory.create_at']) : ''}</td>
					// 			</tr>`
					// 		)
					// 	}
					// }

					// if(type == 1){
					// 	var Type = ['','凭证','单据','证件'];  //入库类型
					// 	for(var i in data){
					// 		html.push(
					// 			`<tr data-id="${data[i]['ckm_in_warehouse.id']}">
					// 				<td>${data[i]['ckm_in_warehouse.num']}</td>
					// 				<td>${Type[data[i]['ckm_in_warehouse.type']]}</td>
					// 				<td>${Type[data[i]['ckm_in_warehouse.type']]}仓</td>
					// 				<td>${employees[data[i]['ckm_in_warehouse.jb_id']]}</td>
					// 				<td>${data[i]['ckm_in_warehouse.time'] !=0 ? cs.getNowTime(data[i]['ckm_in_warehouse.time']) : ''}</td>
					// 				<td>${data[i]['ckm_in_warehouse.goods']}</td>
					// 				<td>${data[i]['ckm_in_warehouse.number']}</td>
					// 				<td>${employees[data[i]['ckm_in_warehouse.create_id']]}</td>
					// 				<td>${data[i]['ckm_in_warehouse.create_time'] !=0 ? cs.getNowTime(data[i]['ckm_in_warehouse.create_time']) : ''}</td>
					// 			</tr>`
					// 		)
					// 	}
					// }

					// if(type == 2){
					// 	var Type = ['','证件','凭证','票据'];  //仓库名称

					// 	for(var i in data){
					// 		html.push(
					// 			`<tr data-id="${data[i]['ckm_out_warehouse.id']}">
					// 				<td>${data[i]['ckm_out_warehouse.num']}</td>
					// 				<td>${Type[data[i]['ckm_out_warehouse.type']]}</td>
					// 				<td>${Type[data[i]['ckm_out_warehouse.type']]}仓</td>
					// 				<td>${employees[data[i]['ckm_out_warehouse.jb_id']]}</td>
					// 				<td>${data[i]['ckm_out_warehouse.time'] !=0 ? cs.getNowTime(data[i]['ckm_out_warehouse.time']) : ''}</td>
					// 				<td>${data[i]['ckm_out_warehouse.goods']}</td>
					// 				<td>${data[i]['ckm_out_warehouse.number']}</td>
					// 				<td>${employees[data[i]['ckm_out_warehouse.create_id']]}</td>
					// 				<td>${data[i]['ckm_out_warehouse.create_time'] !=0 ? cs.getNowTime(data[i]['ckm_out_warehouse.create_time']) : ''}</td>
					// 			</tr>`
					// 		)
					// 	}
					// }

					$('#templateCon .layui-colla-content.layui-show tbody').html(goods_html.join(''));

					$('.layui-tab-content>div').eq(9).find('.layui-colla-item tbody tr').click(function() {
						// var index = $(this).parents('.layui-colla-itemd').index();
						// var id = $(this).attr('data-id');
						var _url = '?url=depotCheck&i=0-4-3&type=1';
						// if (index == 0) {
						// 	_url = '?url=depotCheck&i=0-4-3&type=1';//盘点
						// } else if (index == 1) {
						// 	_url = '?url=depotStorage&i=0-4-0&type=1';//入库
						// } else {
						// 	_url = '?url=depotOutGo&i=0-4-1&type=1';//出库
						// }
						ykp.setCookie('detailsId', id, 1 / 24);
						//window.location = _url;
						skPage(_url);
					})

					// element.init('collapse');

				}

				//物品
				function goods(id, element) {
					element.init('collapse');
					element.on('collapse(demo1)', function(data) {
						//得到当前面板的展开状态，true或者false
						if(data.show) {
							// console.log(1);
							if($('#templateCon .layui-colla-content.layui-show').attr('index') == 0) {
								getGoodsList(id, 1);
							}
							if($('#templateCon .layui-colla-content.layui-show').attr('index') == 1) {
								getGoodsList(id, 2);
							}
							if($('#templateCon .layui-colla-content.layui-show').attr('index') == 2) {
								getGoodsList(id, 3);
							}
						}
					});
					// getGoodsList('/api/api_accountancies/inventory',10,id);
					// element.init('collapse');
				}

				//附件列表
				function getEnclosureList(id) {
					ykp.doAjax({
						url: '/api/api_customer/get_customer_file_new',
						method: 'post',
						data: {
							customer_id: id
						},
						success: function(res) {
							var data = res.data;
							if(!data || data.length == 0) {
								$('#templateCon .layui-tab-item.layui-show tbody').html(
									`<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d !important;" class="page">暂无数据</div></td></tr>`
								);
								return;
							}

							var _html = [];

							for(var i in data) {
								_html.push(
									`<tr data-id="${data[i]['id']}" data-name="${data[i]['name']}">
										<td><a href="${data[i]['url']} " data-url="${data[i]['url']} "  target=_blank>${data[i]['name']}</a></td>
										<td>${data[i]['create_at'] }</td>
										<td>${data[i]['create_name']}</td>
										<td>
											<span contentAuthority="254">
												<button class="loadFile" url="${data[i]['url']}" style="padding:4px 10px 5px 10px;background:#428bca;color:#fff;border:none;">下载</button>
												<button class="deleteFile" style="padding:4px 10px 5px 10px;background:red;color:#fff;border:none;">删除</button>
											</span>
										</td>
									</tr>`
								)
							}

							$('#templateCon .layui-tab-item.layui-show').find('tbody').html(_html.join(''));
							/*$('#templateCon .layui-tab-item.layui-show').find('a').click(function() {
								var name = $(this).text();
								var url = $(this).attr('data-url').trim();
								window.open(ykp.api_url + "/api/api_common/update_file_name?file_url=" + url + "&name=" + name)
							})*/
							if(cs.getNodes([254], true)) {
								$('#templateCon [contentAuthority="254"]').show();
							};
							loadEnenclosure(id);
						}
					})
				}

				//下载附件
				function loadEnenclosure(Id) {
					$('#templateCon .loadFile').click(function() {
						var name = $(this).parents('tr').attr('data-name');
						var url = $(this).attr('url').trim();
                        //console.log(url);
                        //console.log(ykp.api_url);
                        //window.open(url);
                        function download(src) {
                            var $a = document.createElement('a');
                            $a.setAttribute("href", src);
                            $a.setAttribute("download", "");
                            var evObj = document.createEvent('MouseEvents');
                            evObj.initMouseEvent( 'click', true, true, window, 0, 0, 0, 0, 0, false, false, true, false, 0, null);
                            $a.dispatchEvent(evObj);
                        };
                        download(url)
					});
					$('#templateCon .deleteFile').click(function() {
						var id = $(this).parents('tr').attr('data-id');

						var nodes = ykp.getCookie('nodes').split(',');
						if(nodes.indexOf('287') == -1) {
							ykp.prompt('你没有权限');
							return false;
						}
						ykp.doAjax({
							url: "/api/api_customer/del_customer_new",
							method: "post",
							data: {
								id: id
							},
							success: function(res) {
								ykp.prompt('删除成功');
								getEnclosureList(Id)
							}
						})
					});
				}

				//附件
				function enclosure(id) {
					getEnclosureList(id);

				}

				//获取修改记录
				function getModifyRecords(page_size, id) {
					ykp.list({
						url: '/api/api_customer/customer_record',
						method: 'post',
						data: {
							customer_id: id,
							limit: page_size
						},
                        datacont:{
                            id:"#xgjlnum"
                        },
                        pageBar: {
                            id: '#xgjlpageBar'
                        },
						loadList: function(res) {
							var data = res.data.items;
							if(!data || data.length == 0) {
								$('#templateCon .layui-tab-item.layui-show tbody').html(
									`<div style="background-color: #c5e0f1;text-align:center;height: 40px;line-height: 40px;">
										暂无数据
									</div>`
								);
								return;
							}

							var html = [];
							var operations = ['', '添加', '编辑', '删除'];
							var content = [];
							for(var i in data) {
								content = data[i]['khm_update_record.record_list'] ? JSON.parse(data[i]['khm_update_record.record_list']) : "";
								html.push(
									`<tr>
										<td style="text-align:left;font-size:16px;">
											${cs.getNowTime(data[i]['khm_update_record.create_at'],true)}，
											<span>${employees[data[i]['khm_update_record.user_id']]}</span>
											<span>${operations[data[i]['khm_update_record.type']]}了</span>
											<a href="javascript:;" style="margin-right: 10px;">${data[i]['khm_update_record.content']}</a>
											<a href="javascript:;" title="${getContent(data[i]['khm_update_record.type'], content).split('+').join('&#13;')}" style="width: 700px;overflow: hidden;text-overflow: ellipsis;font-weight: normal;">${getContent(data[i]['khm_update_record.type'], content).split('+').join(',')}</a>
										</td>
									</tr>`
								);
							}
							$('#templateCon .layui-tab-item.layui-show tbody').html(html.join(''));
						}
					});
				}

				function getContent(type, content) {
					var html = [];
					var sType = {
						1:"一般纳税人",
						2:"小规模"
					}
					if(type == 1) {
						for(var i in content) {
							if(content[i]['after']){
								html.push(content[i]['name']+' : '+content[i]['after'])
							}
							
						}
						return html.join('+');
					} else if(type == 2) {
						for(var i in content) {
							if(content[i]['after']){
								if(content[i]['name'] == "税务类型"){
									
									html.push(content[i]['name']+' : '+sType[content[i]['before']]+' 改为 '+  sType[content[i]['after']])
								}else{
									html.push(content[i]['name']+' : '+content[i]['before']+' 改为 '+  content[i]['after']);
								}
							}
						}
						return html.join('+');
					} else {
						return html.join("+");
					}
				}

				//修改记录
				function change(id) {
					getModifyRecords(10, id);
				}
			}

			//获取仓位信息
			function getPositionInfo() {
				var positionInfo;
				ykp.doAjax({
					url: '/api/api_customer/get_ckm_position_list2',
					method: 'get',
					async: false,
					data: {},
					success: function(res) {
						positionInfo = res.data;
                    }
				});
				return positionInfo;
			}

			//获取客户负责人
			function getCustomerLeader(id) {
				var customerLeader;
				ykp.doAjax({
					url: '/api/api_contract/get_last_contract',
					method: 'post',
					async: false,
					data: {
						customer_id: id
					},
					success: function(res) {
                        customerLeader = res.data;
					}
				});
				return customerLeader;
			}

			//获取所有区域，切换区域，切换仓位
			//ele1 区域节点
			//ele2 仓位节点
			function getAllAreasAndChangeAreaToChangePositions(ele1, ele2, position) {
				//获取所有区域
				ykp.doAjax({
					url: '/api/api_accountancies/get_all_pos',
					method: 'get',
					data: {},
					success: function(res) {
						var data = res.data;
						//区域信息html
						var area_html = [];
						for(var i in data) {
							area_html.push('<option value="' + i + '">' + i + '</option>');
						}
						ele1.append(area_html.join(''));

						//切换区域，切换仓位
						ele1.change(function() {
							//清空仓位信息
							ele2.html('<option value="">请选择仓位</option>').select2();

							//区域
							var area = $(this).val();

							//如果区域不存在，则返回
							if(!area) {
								return;
							}

							var _data = data[area];
							//仓位信息html
							var position_html = [];
							for(var i in _data) {
								position_html.push('<option value="' + _data[i]['id'] + '">' + _data[i]['name'] + '</option>');
							}
							ele2.append(position_html.join(''));
						});

						//如果存在了仓位信息，就默认选中
						if(position) {
							for(var i in data) {
								for(var j in data[i]) {
									if(position['pos_id'] == data[i][j]['id']) {
										ele1.val(i).trigger('change');
										ele2.val(position['pos_id']).trigger('change');
										break;
									}
								}
							}
						}
					}
				});
			}

			//客户详情弹出层选择 添加客户标签
			$('#showBox .addCustomerLabel').click(function() {

				//弹出添加客户标签层
				$('.set_label').fadeIn();

				//设置系统标签
				$('.set_label .system_label').click(function() {
					var _url = $(this).attr('url');
					window.location = _url;
				});

				//获取所有标签分组 和 标签分组所对应标签，并默认选中公司已有的标签
				ykp.doAjax({
					url: '/api/api_label_cat/index',
					method: 'get',
					data: {},
					success: function(res) {
						$('.set_label .labels').html('');
						var data = res.data.items;
						var html = [];
						var labels = [];
						var _labels = [];

						for(var i in data) {
							labels = data[i]['list'];

							for(var k in labels) {
								_labels.push(
									`<label label-id="${labels[k]['id']}" class="btn btn-info btn-sm pos-rel" style="background-color:${labels[k]['color']} !important;border:none;margin: 5px 5px;" label-id="${data[i]['cwm_label.id']}">
				 						${labels[k]['title']}
				 					</label>`
								);
							}

							html.push(
								`<tr>
									<td style="width:20%;">${data[i]['cwm_label_cat.title']}</td>
									<td style="word-wrap:break-word;white-space: normal !important;">${_labels.join('')}</td>
								</tr>`
							);

							_labels = [];
						}

						$('.set_label .label_area').html(html.join(''));

						//默认选中公司已有的标签
						$('#showBox .customer_label label').each(function(i, e) {
							$('.set_label .label_area label[label-id=' + $(this).attr('label-id') + ']').append(
								`<i class="fa fa-check-circle" aria-hidden="true" style="color:red;padding-left:10px;"></i>`
							);
						});

						//选择 || 取消选择的标签
						$('.set_label .label_area label').click(function() {
							if($(this).find('.fa.fa-check-circle').length > 0) {
								$(this).find('.fa.fa-check-circle').remove();
								return;
							}
							$(this).append(
								`<i class="fa fa-check-circle" aria-hidden="true" style="color:red;padding-left:10px;"></i>`
							);
						});
					}
				});
			});



			//客户详情弹出层选择 编辑
			$('#showBox .editLabel').click(function() {
				$('#showBox .title').text('编辑客户信息');

				showMark('.edit_popup');
				$('#showBox .title_operation').html(
					`<a class="back_to_detail" href="javascript:;" title="返回" style="padding:4px 10px 5px 10px;background:#428bca;color:#fff;">
						<i class="fa fa-arrow-left" aria-hidden="true"></i>
					</a>`
				);

				//客户基本信息
				ykp.doAjax({
					url: "/api/api_customer/info",
					method: 'post',
					data: {
						filter: "khm_customer.id = " + id
					},
					success: function(res) {
						var data = res.data;
						// $('#templateCon [position]').data('position',data['khm_customer.area']);

						$('#templateCon [basic]').each(function(i, e) {
							switch(i) {
								case 0:
									$(this).val(data['khm_customer.customer_num']);
									break;
								case 1:
									$(this).val(data['khm_customer.rank']);
									break;
								case 2:
									$(this).val(data['khm_customer.status']);
									break;
								default:
									break;
							}
						});
					}
				});

				//所属仓位
				var _data;
				ykp.doAjax({
					url: "/api/api_customer/get_customer_pos",
					async: false,
					method: 'post',
					data: {
						filter: 'khm_contact_log.is_del <> 1',
						customer_id: id
					},
					success: function(res) {
						_data = res.data;

						if(_data.log['name']) {
							$('#templateCon [follow]').each(function(i, e) {
								switch(i) {
									case 0:
										$(this).val(_data['log']['name']);
										break;
									case 1:
										$(this).val(_data['log']['last_modify_time'] != 0 ? cs.getNowTime(_data['log']['last_modify_time']) : '');
										break;
									default:
										break;
								}
							});
						}

						if(_data['pos']) {
							$('#templateCon [position]').text(_data['pos']['pos_name'] + _data['pos']['pos_num']);
						}

					}
				});

				//转移仓位
				//$('#templateCon .transfer').unbind('click').click(function() {
					if($(this).hasClass('transferring')) {
						$('#templateCon .transfer_content').hide();
						$(this).removeClass('transferring');
						return;
					};
					$(this).addClass('transferring');
					$('#templateCon .transfer_content').show();
					$('#templateCon [syllable]').select2({
						allowClear: true
					});

					//获取所有区域，切换区域，切换仓位
					getAllAreasAndChangeAreaToChangePositions($('#templateCon [syllable="area"]'), $('#templateCon [syllable="position"]'), _data['pos']);

					//获取客户负责人
					var customerLeader = getCustomerLeader(id);

					//仓位信息
					var positionInfo = getPositionInfo();

                //仓位负责人
					var positionLeader = {
						'报税': positionInfo['bs'],
						'送单': positionInfo['sod'],
						'客服': positionInfo['kf'],
						'收单': positionInfo['sd'],
						'记账': positionInfo['zz'],
						'整单': positionInfo['zd']
					}

                //流程 html
					var procedure_html = [];
                for(var i in positionLeader) {
						procedure_html.push(
							`<tr>
								<td style="width:50%;"><i class="reqired_label">*</i>${i}</td>
								<td>
									<select style="width:180px;" process="${i}" leader="${positionLeader[i]}" default="${customerLeader[i] ? customerLeader[i] : '0'}">
										<option value="0">请选择</option>
									</select>
								</td>
							</tr>`
						);
					}
                $('#templateCon .leader_info').html(procedure_html.join(''));
					$('#templateCon .leader_info [process]').select2({
						allowClear: true
					});

					//负责人html
					var leader_html = [];
					//负责人
					var leaders;
                $('#templateCon .leader_info [process]').each(function(i, e) {
						if(!$(e).attr('leader')) {
							return true;
						}
						leaders = $(e).attr('leader').split(',');
						for(var k in leaders) {
							if(employees[leaders[k]]){
                                leader_html.push(
                                    `<option value="${leaders[k]}">${employees[leaders[k]]}</option>`
                                );
							}

						}

						$(e).append(leader_html.join('')).val($(this).attr('default')).trigger('change');
						leaders = '';
						leader_html = [];
					});

					// var area = $('#templateCon [position]').data('position');
					// if(!area){
					// 	ykp.prompt('请添加仓位信息');
					//                 return;
					//             }
					//             area = area.split(',');
					//             ykp.doAjax({
					//                 async:false,
					//                 url:'/api/api_accountancies/get_position',
					//                 method:'post',
					//                 data:{
					//                     type:2,
					//                     name:area[1]
					//                 },
					//                 success:function(res){
					//                     var data = res.data;
					//                     if(data.length > 0){
					//                     	$('#templateCon .transfer_content').show();
					//                     	$('#templateCon .transfer_content .pos_name').find('option').not(':first').remove();
					//                         for(var i in data){
					//                            $('#templateCon .transfer_content .pos_name').append(new Option(data[i]['name'],data[i]['id']));
					//                         }
					//                     }
					//                     if(data.length == 0){
					//                         ykp.doAjax({
					//                             async:false,
					//                             url:'/api/api_accountancies/get_position',
					//                             method:'post',
					//                             data:{
					//                                 type:1,
					//                                 name:area[0]
					//                             },
					//                             success:function(res){
					//                                 if(data.length > 0){
					//                                 	$('#templateCon .transfer_content').show();
					//                                 	$('#templateCon .transfer_content .pos_name').find('option').not(':first').remove();
					//                                     for(var i in data){
					//                                         $('#templateCon .transfer_content .pos_name').append(new Option(data[i]['name'],data[i]['id']));
					//                                     }
					//                                 }
					//                                 if(data.length == 0){
					//                                     ykp.prompt('请添加仓位信息');
					//                                 }
					//                             }
					//                         });
					//                     }
					//                 } 
					//             });
				//});

				//点击编辑客户信息返回  返回客户详情
				$('#showBox .back_to_detail').click(function() {
					it.click();
				});

				//保存编辑客户信息
				$('#showBox .edit_sure').unbind('click').click(function() {
				    var area1 = $("#templateCon .transfer_content select[syllable=area]").val();
                    var area2 = $("#templateCon .transfer_content select[syllable=position]").val();
                    var baos = $("#templateCon .transfer_content select[process=报税]").val();
                    var songd = $("#templateCon .transfer_content select[process=送单]").val();
                    var kef = $("#templateCon .transfer_content select[process=客服]").val();
                    var shoud = $("#templateCon .transfer_content select[process=收单]").val();
                    var jiz = $("#templateCon .transfer_content select[process=记账]").val();
                    var zhengd = $("#templateCon .transfer_content select[process=整单]").val();
                    var yuany = $("#templateCon .transfer_content textarea[syllable_1=reason]").val().trim();
                    if(!area1){
                        ykp.prompt("请选择区域名称");
                        return;
                    }
                    if(!area2){
                        ykp.prompt("请选择仓位");
                        return;
                    }
                    if(!baos || baos == 0){
                        ykp.prompt("请选择报税负责人");
                        return;
                    }
                    if(!songd || songd == 0 ){
                        ykp.prompt("请选择送单负责人");
                        return;
                    }
                    if(!kef || kef == 0){
                        ykp.prompt("请选择客服负责人");
                        return;
                    }
                    if(!shoud || shoud == 0){
                        ykp.prompt("请选择收单负责人");
                        return;
                    }
                    if(!jiz || jiz == 0){
                        ykp.prompt("请选择记账负责人");
                        return;
                    }
                    if(!zhengd || zhengd == 0){
                        ykp.prompt("请选择整单负责人");
                        return;
                    }
                    if(!yuany){
                        ykp.prompt("输入转移原因");
                        return;
                    }


					var postdata = {};
					postdata['customer_id'] = id;
					$('#templateCon [field]').not(':hidden').each(function(i, e) {
						postdata[$(this).attr('field')] = $(this).val();
					});

					if(!$('#templateCon .transfer_content').is(':hidden')) {
						//分配员工
						var assign = [];
						$('#templateCon .leader_info [default]').each(function(i, e) {
							assign.push({
								'process': $(this).attr('process'),
								'staff_id': $(this).val()
							});
						});
						postdata['assign'] = JSON.stringify(assign);
						postdata['reason'] = $('#templateCon [syllable_1="reason"]').val().trim();
						postdata['pos_id'] = $('#templateCon [syllable="position"]').val().trim();
					}

					ykp.doAjax({
						url: '/api/api_customer/customer_pos',
						method: 'post',
						data: postdata,
						success: function(res) {
							it.click();
						}
					});
				});
			});

			//关闭客户标签弹出层
			$('.set_label .close_label,.set_label .hold').unbind('click').click(function(event) {
				if($(event.target).hasClass('hold')) {
					var postdata = {};
					postdata['label_id'] = [];
					$('.set_label .label_area .fa.fa-check-circle').each(function(i, e) {
						postdata['label_id'].push($(this).parent().attr('label-id'));
					});

					if(postdata['label_id'].length > 5) {
						ykp.prompt('公司标签不能超过5个！');
						return;
					}

					postdata['label_id'] = postdata['label_id'].join(',');
					postdata['customer_id'] = id;

					ykp.doAjax({
						url: '/api/api_customer/customer_label',
						method: 'post',
						data: postdata,
						success: function(res) {
							ykp.prompt('客户标签设置成功');
							$('.set_label').fadeOut();

							it.click();
						}
					});
				}
				if(!$(event.target).hasClass('hold')) {
					$('.set_label').fadeOut();
				}
			});
		});
	},

	showReamrk: function() {
		cs.getElem1();
		$(' .fa-info-circle').unbind('click').click(function() {
			$("[data-rel='tooltip']").tooltip('hide');
			showMark('#remark');
			var custom_name = $(this).parent().prev().text();
			var filename = [];
			$('#showBox .title').text(custom_name);
			var cid = $(this).parents('td').attr('data-cid');
			//客户详情弹出层选择 添加客户标签
			$('#showBox .add').unbind('click').click(function() {
				$('#addremark').html(
					'<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;'+
					'box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">'+
					'<div style="padding:15px;border-bottom:1px solid #ddd;">'+
						'<span style="display: inline-block;">添加备注</span>'+
						'<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>'+
					'</div>'+
					'<div style="padding: 10px 50px;">'+
						'<input type="text" width="200px" placeholder="备注" style="margin: auto;" id="labelName" />'+
						'</div>'+
						'<div style="padding: 10px 50px;">'+
						'<select id="typeName">'+
						'<option value="0">公开备注</option>'+
						'<option value="1">私人备注</option>'+
						'</select>'+
						'</div>'+
						'<div style="padding: 10px 50px;">'+
						'<div id=""  class="fileName">'+
						'<div id="" style="position: relative;">'+
						'<span id="">'+
						'</span>'+
						'</div>'+
						'</div>'+
						'<button type="button" id="upload" style="outline: none;background-color: #009688 !important; margin-top: 20px;" class="btn btn-info btn-sm position-relative">'+
						'上传文件'+
						'</button>'+
						'</div>'+
						'<div style="padding:15px;text-align:right;">'+
						'<button class="close_label">关闭</button>'+
						'<button class="hold">保存</button>'+
						'</div>'+
						'</div>'
				);


				$('#addremark').fadeIn();
                //$('#addremark .fileName').html('');

				cs.upload1({
					el: "#upload",
					showEl: ".fileName",
					callback: showName
				})
                filename=[];

                function showName(url, name) {
					filename.push({
						name: name,
						url: url
					});
					var text = [];
					for(var i in filename) {
						text.push(`<div id="" style="position: relative;">
							<span id="">
								<a href="${filename[i].url}">${filename[i].name}</a>
							</span>
							<i style="color:red" class="ace-icon fa fa-trash-o delfile"></i>
						</div>`);
					}
					$('.fileName').html(text.join(''));
					$('.delfile').click(function() {
						var index = $(this).parent().index();
						$(this).parent().remove();
						filename.splice(index, 1);
					})
				}

				$('#addremark .hold').unbind('click').click(function() {
					var approve_reply = $('#addremark').find('input').val();
					if(approve_reply == '') {
						ykp.prompt('备注不能为空！');
						return false;
					}
					var type = $('#addremark').find('select').val();
					if(type == '') {
						ykp.prompt('备注类型不能为空！');
						return false;
					}
					var files = [];

					ykp.doAjax({
						url: '/api/api_cus_remark/add',
						method: 'post',
						data: {
							remark: approve_reply,
							cid: cid,
							type: type,
							files: JSON.stringify(filename)
						},
						success: function(res) {
							ykp.prompt('添加成功!');
							getContr(cid);
							$('#addremark').find('input').val('');
							$('#addremark select').find('option').eq(0).attr('selected', true);
							$('.close_label').parents('.label_popup').fadeOut();
						}
					})

				})
				cs.closePop();
			});

			getContr(cid);
			//			addList('','#datalist2',3);
		})

		//添加备注
		function addRemarks(cid) {
			$('#templateCon .recordEdit').unbind('click').click(function() {
				var id = $(this).parents('tr').attr('data-id');
				var user = ykp.getCookie('uid');
                layui.use('layer', function() {
                    var layer = layui.layer;
                    layer.confirm('确定要完成吗？', function(index) {
						ykp.doAjax({
							url: '/api/api_cus_remark/edit',
							method: 'post',
							data: {
								id: id,
								user: user
							},
							success: function(res) {
								ykp.prompt('已完成');;
								getContr(cid);
                                layer.closeAll();
							}
						})
                    });
                })
			})
		}

		//删除备注
		function delRemarks(cid) {
			$('#templateCon .del').unbind('click').click(function() {
				var id = $(this).parents('tr').attr('data-id');
				layui.use('layer', function() {
					var layer = layui.layer;
					layer.confirm('真的删除行么', function(index) {
						ykp.doAjax({
							url: '/api/api_cus_remark/del',
							method: 'post',
							data: {
								id: id
							},
							success: function(res) {
								ykp.prompt('删除成功');
								getContr(cid);
								layer.closeAll();
							}
						})
					});
				})
			});
		}

		//获取备注
		function getContr(cid) {
			var user = ykp.getCookie('uid');
			var emplo = JSON.parse(ykp.getCookie('employArr1'));
			ykp.doAjax({
				url: '/api/api_cus_remark/f7',
				method: 'post',
				data: {
					filter: '(khm_remark.type =  0 and khm_remark.is_del = 0 and khm_remark.cid = ' + cid + ') or (khm_remark.type =  1 and khm_remark.is_del = 0 and khm_remark.user = ' + user + ' and khm_remark.cid = ' + cid + ')',
					order: "khm_remark.time desc"
				},
				success: function(res) {
					
					var data = res.data;
					var company_unfinished = []; //公司未完成备注
					var company_finished = []; //公司完成备注
					var personal_unfinished = []; //个人未完成备注
					var personal_finished = []; //个人完成备注
					var fileList = {
						"name": [],
						"url": []
					};
					for(var i in data) {
						fileList.name = [];
						if(data[i]['khm_remark.files']) {
							for(var j in JSON.parse(data[i]['khm_remark.files'])) {
								fileList['name'].push('<a href=' + JSON.parse(data[i]['khm_remark.files'])[j].url + ' target="_blank">' + JSON.parse(data[i]['khm_remark.files'])[j].name + '</a>');
								//									fileList['url'].push(JSON.parse(data[i]['khm_remark.files'])[j].url);
							}
						}
						if(data[i]['khm_remark.type'] == 0 && data[i]['khm_remark.state'] == 0) {

							company_unfinished.push(
								`<tr data-id="${data[i]['khm_remark.id']}">
									<td style="text-align: center;">${data[i]['khm_remark.remark']}</td>
									<td style="text-align: center;">未完成  </td>
									<td style="text-align: center;">${emplo[data[i]['khm_remark.user']]}</td>
									<td style="text-align: center;">${data[i]['khm_remark.time'] != '0' ? cs.getNowTime(data[i]['khm_remark.time']) : ''}</td>
									<td style="text-align: center;">${fileList['name'].join('<br/>')}</td>
									<td class="center">
										<a> <span style="cursor: pointer" id="recordEdit" class="recordEdit lbl btnBlue">点击完成</span></a>
									</td>
								</tr>`
							);
						}
						if(data[i]['khm_remark.type'] == 0 && data[i]['khm_remark.state'] == 1) {
							company_finished.push(
								`<tr data-id="${data[i]['khm_remark.id']}">
									<td style="text-align: center;">${data[i]['khm_remark.remark']}</td>
									<td style="text-align: center;">已完成</td>
									<td style="text-align: center;">${emplo[data[i]['khm_remark.user']]}</td>
									<td style="text-align: center;">${cs.getNowTime(data[i]['khm_remark.time'])}</td>
									<td style="text-align: center;">${emplo[data[i]['khm_remark.enduser']]}</td>
									<td style="text-align: center;">${data[i]['khm_remark.endtime'] != '0' ? cs.getNowTime(data[i]['khm_remark.endtime']) : ''}</td>
									<td style="text-align: center;">${fileList['name'].join('<br/>')}</td>
									<td class="center del">
										<a href="#" class="del"> <span class="lbl btnRed" contentAuthority="283">删除</span></a>
									</td>
								</tr>`
							);
						}
						if(data[i]['khm_remark.type'] == 1 && data[i]['khm_remark.state'] == 0) {
							personal_unfinished.push(
								`<tr data-id="${data[i]['khm_remark.id']}"><td style="text-align: center;">${data[i]['khm_remark.remark']}</td>
									<td style="text-align: center;">${data[i]['khm_remark.time'] != '0' ? cs.getNowTime(data[i]['khm_remark.time']) : ''}</td>
									<td style="text-align: center;">未完成</td>
									<td style="text-align: center;">${fileList['name'].join('<br/>')}</td>
									<td class="center">
					                    <a> <span style="cursor: pointer" id="recordEdit" class="recordEdit lbl btnBlue">点击完成</span></a>
								</td></tr>`
							);
						}
						if(data[i]['khm_remark.type'] == 1 && data[i]['khm_remark.state'] == 1) {
							personal_finished.push(
								`<tr data-id="${data[i]['khm_remark.id']}">
									<td style="text-align: center;">${data[i]['khm_remark.remark']}</td>
									<td style="text-align: center;">已完成</td>
									<td style="text-align: center;">${emplo[data[i]['khm_remark.user']]}</td>
									<td style="text-align: center;">${cs.getNowTime(data[i]['khm_remark.time'])}</td>http://api.finance.yunkepai.net/resource/uploads//20171226/219f9d23531e835.png
									<td style="text-align: center;">${emplo[data[i]['khm_remark.enduser']]}</td>
									<td style="text-align: center;">${data[i]['khm_remark.endtime'] != '0' ? cs.getNowTime(data[i]['khm_remark.endtime']) : ''}</td>
									<td style="text-align: center;">${fileList['name'].join('<br/>')}</td>
									<td class="center del">
										<a href="#" class="del"> <span class="lbl btnRed">删除</span></a>
									</td>
								</tr>`
							);
						}
					}

					if(company_unfinished.length == 0) {
						$('#templateBox #datalist').html('<tr><td colspan="30" style="color:#7d7d7d;text-align:center !important;">暂无数据</td></tr>');
					}
					if(company_finished.length == 0) {
						$('#templateBox #datalist3').html('<tr><td colspan="30" style="color:#7d7d7d;text-align:center !important;">暂无数据</td></tr>');
					}
					if(personal_unfinished.length == 0) {
						$('#templateBox #datalist2').html('<tr><td colspan="30" style="color:#7d7d7d;text-align:center !important;">暂无数据</td></tr>');
					}
					if(personal_finished.length == 0) {
						$('#templateBox #datalist4').html('<tr><td colspan="30" style="color:#7d7d7d;text-align:center !important;">暂无数据</td></tr>');
					}
					if(company_unfinished.length > 0) {
						$('#templateBox #datalist').html(company_unfinished.join(''));
					}
					if(company_finished.length > 0) {
						$('#templateBox #datalist3').html(company_finished.join(''));
					}
					if(personal_unfinished.length > 0) {
						$('#templateBox #datalist2').html(personal_unfinished.join(''));
					}
					if(personal_finished.length > 0) {
						$('#templateBox #datalist4').html(personal_finished.join(''));
					}
                    $("#temHeader").width($("#showBox").width()-47);
					cs.getNodes([283]);
					//删除备注
					delRemarks(cid);
					//添加备注
					addRemarks(cid);
				}
			});
			// return;
			// var el = '#datalist';
			// var url = '/api/api_cus_remark/index';
			// var filter = 'khm_remark.type = 0 and khm_remark.state = 0 and khm_remark.is_del = 0 and khm_remark.cid='+cid;
			// var user = ykp.getCookie('uid');
			// var page_size = 10;
			// if(type == 1) {
			// 	el = '#templateBox #datalist';
			// }else if(type == 2) {
			// 	el = '#templateBox #datalist2';
			// 	filter = 'khm_remark.type = 1 and khm_remark.state = 0 and khm_remark.is_del = 0 and khm_remark.user='+user;
			// }else if(type == 3){
			// 	el = '#templateBox #datalist3';
			// 	filter = 'khm_remark.type = 0 and khm_remark.state = 1 and khm_remark.is_del = 0 and khm_remark.cid='+cid;
			// }else{
			// 	el = '#templateBox #datalist4';
			// 	filter = 'khm_remark.type = 1 and khm_remark.state = 1 and khm_remark.is_del = 0 and khm_remark.user='+user;
			// }
			// var Data = {
			// 		limit:10,
			// 		filter:filter,
			// 		cid:cid
			// 	}
			// if(type == 2) {
			// 	Data.user = user;
			// }
			// ykp.list({
			// 	url:url,
			// 	method:'post',
			// 	data:Data,
			// 	pageBar: {id: '#pageBar2'},
			// 	loadList:function(res) {
			// 		if(res.data.items == "") {
			// 			$(el).html('<tr><td colspan="30">暂无数据</td></tr>');
			// 			return ;
			// 		}
			// 		addList(res,el,type,cid);
			// 	}
			// })
		}

		//获取个人未完成备注
		function addList(res, el, type, cid) {
			var data = res.data.items;
			var content = '';
			for(var i in data) {
				if(type == 1) {
					content += `<tr data-id="${data[i]['khm_remark.id']}">
					<td style="text-align: center;">${data[i]['khm_remark.remark']}</td>
					<td style="text-align: center;">未完成  </td>
					<td style="text-align: center;">${data[i]['khm_remark.user']}</td>
					<td style="text-align: center;">${data[i]['khm_remark.time'] != '0' ? cs.getNowTime(data[i]['khm_remark.time']) : ''}
					<td class="center">
						<a> <span style="cursor: pointer" id="recordEdit" class="recordEdit lbl btnBlue">点击完成</span></a>
					</td>
				</tr>`
				} else if(type == 3 || type == 4) {
					content += `<tr data-id="${data[i]['khm_remark.id']}">
					<td style="text-align: center;">${data[i]['khm_remark.remark']}</td>
					<td style="text-align: center;">已完成</td>
					<td style="text-align: center;">${data[i]['khm_remark.user']}</td>
					<td style="text-align: center;">${cs.getNowTime(data[i]['khm_remark.time'])}</td>
					<td style="text-align: center;">${data[i]['khm_remark.enduser']}</td>
					<td style="text-align: center;">${data[i]['khm_remark.endtime'] != '0' ? cs.getNowTime(data[i]['khm_remark.endtime']) : ''}</td>
					<td class="center del">
						<a href="#" class="del"> <span class="lbl btnRed">删除</span></a>
					</td>
				</tr>`
				} else {
					content += `<tr data-id="${data[i]['khm_remark.id']}"><td style="text-align: center;">${data[i]['khm_remark.remark']}</td>
					<td style="text-align: center;">${data[i]['khm_remark.time'] != '0' ? cs.getNowTime(data[i]['khm_remark.time']) : ''}</td>
					<td style="text-align: center;">未完成</td>
					<td class="center">
	                    <a> <span style="cursor: pointer" id="recordEdit" class="recordEdit lbl btnBlue">点击完成</span></a>
					</td></tr>`
				}
			}

			$(el).html(content);

			$(el + ' .del').unbind('click').click(function() {
				var id = $(this).parents('tr').attr('data-id');
				ykp.doAjax({
					url: '/api/api_cus_remark/del',
					method: 'post',
					data: {
						id: id
					},
					success: function(res) {
						ykp.prompt('删除成功');
						getContr(1, cid);
						getContr(2, cid);
						getContr(3, cid);
						getContr(4, cid);
					}
				})
			})

			$(el + ' .recordEdit').unbind('click').click(function() {
				var id = $(this).parents('tr').attr('data-id');
				var user = ykp.getCookie('uid');
				ykp.doAjax({
					url: '/api/api_cus_remark/edit',
					method: 'post',
					data: {
						id: id,
						user: user
					},
					success: function(res) {
						ykp.prompt('已完成');;
						getContr(1, cid);
						getContr(2, cid);
						getContr(3, cid);
						getContr(4, cid);
					}
				})
			})
		}
	}
}