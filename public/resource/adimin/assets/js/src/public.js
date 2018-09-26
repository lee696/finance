/*
 * 描述TODO
 * @author:涂爱波 Version 1.0.0 2017-8-19
 */

/**
 *
 * @param {type} template   模板id
 */
checklogin();
function checklogin() {
    var logTime = parseInt(ykp.getCookie('loginTime'));
    var nTime = Date.now();
	if(!ykp.getCookie('uid') ){
        setLogout();
		return false;
	}
   	if((nTime-logTime) > 7200000){
        setLogout();
        return false;
    }else {
        ykp.setCookie('loginTime',nTime)
	}
   /* if((nTime-logTime) >7200000){
        setLogout()
        return false;
    }*/
}
//显示备注
function showRemark() {
	$(".iconBnt").hover(function (e) {
		var it=$(this);
        $("body").append('<div id="_showmark" style="position: absolute;top:'+ (e.pageY+12) +'px; left:'+(e.pageX+ 12) +'px;z-index:9999999;text-shadow: none !important;padding: 3px 8px;color: #000 !important;text-align: left !important;background: #fff !important;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">'+ it.attr("data-original-title") +'</div>');
    },function () {

    })
}

function setLogout() {
    ykp.prompt('请重新登陆！');
    ykp.setCookie('uid', '');
    ykp.setCookie('code', '');
    ykp.setCookie('ci_session', '');
    ykp.setCookie('userinfo', '');
    ykp.setCookie('login_token', '');
    sessionStorage.setItem('userinfo', '');
    window.location = '/admin/logout';
}

function showMark(template) {
	$('#showBox .title_operation').html('');
	$('#showBox .customer_label').html('');
	//显示遮罩添加节点
	//模板内容
	var html = $(template).html();
	//把内容
	if($('#templateCon').html('<!--startprint-->' + html + '<!--endprint-->')) {
		$('.in').addClass('modal-backdrop');
		$('#showBox').removeClass('ishide');
	}
	$('input,textarea').change(function() {
		$(this).val($(this).val().trim());
	})

	$('#templateCon').data('flag', '1');
	setTimeout(function() {
		$('.select2-search__field').unbind('input').on('input', function() {
			$(this).val($(this).val().trim()).trigger('change');
		})
	}, 3000);
	$("#temHeader").width($("#showBox").width()-47);
}
$('#showBox .close_get').unbind('click').click(function() {
    $("#temHeader").width(0);
    $("#showBox").width('');
	$('#templateCon').data('flag', '2');
	$('#showBox .title').html("");
	cs.close();
});

$('#showBox #close').on('click', function() {
	$('.in').removeClass('modal-backdrop');
	$('#showBox').addClass('ishide');
})

$('.in').unbind().click(function() {
    if($('#templateCon').data('flag') == '1') {
		return;
	}
    $(this).removeClass('modal-backdrop');
	$('#showBox').addClass('ishide');
	$('.headerName').hide();
	//	$("#heightsearch1").hide()
})

function closeMark() {
    $("#temHeader").width(0);
    $("#showBox").width('');
	$('#templateCon').data('flag', '2');
	$('#showBox .title').html("");
	cs.close();
}

function showConfirm(data) {
	bootbox.confirm({
		message: data,
		buttons: {
			confirm: {
				label: "确认",
				className: "btn-primary btn-sm",
			},
			cancel: {
				label: "取消",
				className: "btn-sm",
			}
		},
		callback: function(result) {
		}
	});
}

var cs = {
	file_length: 5 * 1024 * 1024,
	version: '1.0.1',
	api_url: ykp.api_url,
	__construct: function() {
		var that = this;
	},

	/**
	 * 
	 * @param {Object} el  节点
	 * @param {Object} count   展示的总数
	 * @param {Object} sumNum  数据总数
	 * @param {Function} callback  回调
	 */
	setPagination: function(el, count, sumNum, pagesize, page_no, callback) {

		count = Math.ceil(sumNum / pagesize) < 5 ? Math.ceil(sumNum / pagesize) : 5;
		$(el).pagination({
			currentPage: 1,
			totalPage: Math.ceil(sumNum / pagesize),
			isShow: true,
			count: count,
			homePageText: "首页",
			endPageText: "尾页",
			prevPageText: "上一页",
			nextPageText: "下一页",
			infoFormat: '{}开始〜结束{}条，共{总}条',
			callback: function(current) {
				if($.isFunction(callback)) {
					callback(current);
				}
			}
		});
		setTimeout(function() {
			$('#onProcess').parent().remove();
		}, 500);
	},

	/*
	 * 自定义table列表
	 * hearderId  table表头id
	 * tbodyId table表内容容器id
	 * stasus 是否有checkbox
	 */

	custorm_check: function(hearderId, tbodyId, stasus) {
		var Select = '';
		var content = `<div class='custom'  id="custom" style='text-align: right;margin-bottom:5px;position:relative;'>
								<span class="tip" style="left: -169px;z-index:2;bottom: 5px;position:absolute;display:none;padding: 2px 5px;  background: rgba(0,0,0,.7); color: #fff;border-radius: 2px;">蓝色表示显示，灰色表示隐藏</span>
								<button  class="customBtn btn" style="background-color: #00a65a !important;"><span class="ace-icon fa fa-cog bigger-130" style="margin-right:0;position: relative;top: 1px;"></span></button>
								<div style="display: none;left: -125px; max-height:350px; overflow: auto;" id="headerName" class='headerName'>
									<ul style='list-style: none;  margin-left: 0px !important; color: #333; font-size: 14px;' id="selectList" class='selectList'>

									</ul>
								</div>
							</div>`;
		
		if(hearderId.indexOf('2') != -1) {
			$(hearderId).parents('.widget-body').eq(0).prev().append(content);
			$(hearderId + " thead tr th").each(function(i) {
                if(stasus) {
					if(i != 0 && $(this).text().trim() != '操作') {
						Select += `<li>${$(this).text()}</li>`;
					}
				} else {
					if($(this).text().trim() != '操作') {
						Select += `<li class="${$(this).is(':hidden') ? "select" :""}">${$(this).text()}</li>`;
					}
				}
			})
			$(hearderId).parents('.widget-body').prev().find('.selectList').html(Select);
			$(hearderId).parents('.widget-body').prev().find('.customBtn').click(function() {
				if($(this).next().css('display') == 'none') {
                    $('.in').addClass('modal-backdrop');
					$(this).next().css('display', 'block');
				} else {
                    $(this).next().css('display', 'none');
				}
			})
			$(hearderId).parents('.widget-body').prev().find('.selectList li').click(function() {
				if($(this).attr('class') == 'select') {
					$(this).removeClass('select')
					var value = $(this).text().trim();
					var Class = '';
					$(hearderId + " th").each(function() {
						if($(this).text().trim() == value) {
							Class = $(this).attr('data-num');
							$(this).show();
							$(tbodyId + ' tr td').each(function() {
								if($(this).attr('data-num') == Class) {
									$(this).show();
								}
							})
						}
					})
				} else {
					$(this).addClass('select');
					var value = $(this).text().trim();
					var Class = '';
					$(hearderId + " th").each(function() {
						if($(this).text().trim() == value) {
							Class = $(this).attr('data-num');
							$(this).hide();
							$(tbodyId + ' tr td').each(function() {
								if($(this).attr('data-num') == Class) {
									$(this).hide();
								}
							})
						}
					})
				}
			})
			return;
		} else {
			$('#topTool').append(content);
		};
		$('.customBtn').mouseenter(function() {
			$(this).prev().fadeIn();
		})
		$('.customBtn').mouseleave(function() {
			$(this).prev().fadeOut();
		})
		$(hearderId + " thead tr th").each(function(i) {
			if(stasus) {
				if(i != 0 && $(this).text().trim() != '操作') {

					Select += `<li>${$(this).text()}</li>`;
				}
			} else {
				if($(this).text().trim() != '操作') {
					Select += `<li class="${$(this).is(':hidden') ? "select" :""}">${$(this).text()}</li>`;
				}
			}

		})
		$('.selectList').html(Select);
		$('.custom .customBtn').click(function() {
            if($(this).next().css('display') == 'none') {
				$('.in').addClass('modal-backdrop');
				$(this).next().css('display', 'block');
/*               $('.in').unbind().click(function() {
            	   		alert(333)
                        $(this).removeClass('modal-backdrop');
                        $('#showBox').addClass('ishide');
                        $('.headerName').hide();
                        
                        $("#headerName").width(0);
                        $("#showBox").width('');
                    	$('#templateCon').data('flag', '2');
                    	$('#showBox .title').html("");
                    	cs.close();
                })*/
			} else {
                $(this).removeClass('modal-backdrop');
                $('#showBox').addClass('ishide');
                $('.headerName').hide();
                $(this).next().css('display', 'none');
			}
		})

		$('.selectList li').click(function() {
			if($(this).attr('class') == 'select') {
				$(this).removeClass('select')
				var value = $(this).text().trim();
				var Class = '';
				$(hearderId + " th").each(function() {
					if($(this).text().trim() == value) {
						Class = $(this).attr('data-num');
						$(this).show();
						$(tbodyId + ' tr td').each(function() {
							if($(this).attr('data-num') == Class) {
								$(this).show();
							}
						})
					}
				})
			} else {
				$(this).addClass('select')
				var value = $(this).text().trim();
				var Class = '';
				$(hearderId + " th").each(function() {
					if($(this).text().trim() == value) {
						Class = $(this).attr('data-num');
						$(this).hide();
						$(tbodyId + ' tr td').each(function() {
							if($(this).attr('data-num') == Class) {
								$(this).hide();
							}
						})
					}
				})
			}
		})

	},

	getTime: function(time, statu,end) {
		var timeArr = time.split("-");
		if(statu) {
			if(end){
				return parseInt(Date.parse(new Date(time) / 1000)) - 1;
			}else {
				return parseInt(Date.parse(new Date(time) / 1000));
			}
		} else {
			time = time.split('-').reverse().join('-');
			return parseInt(new Date(time) / 1000);
		}

	},

	getNowTime: function(time, statu) {
		if(!time || time == 0) {
			return "";
		}
		var time = new Date(time * 1000),
			year = time.getFullYear(),
			month = this.fixZero(time.getMonth() + 1, 2),
			day = this.fixZero(time.getDate(), 2),
			hour = this.fixZero(time.getHours(), 2),
			minute = this.fixZero(time.getMinutes(), 2),
			second = this.fixZero(time.getSeconds(), 2);

		//		time = year + "-" + month + "-" + day + " " + hour + ":" + minute + ":" + second;
		if(statu) {
			time = year + "-" + month + "-" + day + " " + hour + ":" + minute + ":" + second;
		} else {
			time = year + "-" + month + "-" + day;
		}
		return time;
	},

	/**
	 * 获取所有的仓位
	 */
	getAllCw: function(callback) {
		ykp.doAjax({
			url: "/api/api_inventory/get_all_pos?type=1",
			method: "get",
			success: function(res) {
                var dataArr = []; //存放数组
				var optionArr = ['<option value="">请选择</option>']; //存放  option
				var data = res.data;
				for(var i in data) {
					dataArr = dataArr.concat(data[i]);
				}
				for(var i in dataArr) {
					optionArr.push('<option value="' + dataArr[i].id + '">' + dataArr[i].name + '</option>');
				}
				if(typeof callback == 'function') {
					callback(optionArr.join(''));
				}
			}
		})
	},

	/**
	 * 获取所有的仓位
	 */
	getAllCw1: function(callback) {
		ykp.doAjax({
			url: "/api/api_inventory/get_all_pos?type=1",
			method: "get",
			success: function(res) {
				var dataArr = []; //存放数组
				var optionArr = ['<option value="">请选择</option>']; //存放  option
				var data = res.data;
				for(var i in data) {
					dataArr = dataArr.concat(data[i]);
				}
				for(var i in dataArr) {
					optionArr.push('<option value="' + dataArr[i].name + '">' + dataArr[i].name + '</option>');
				}
				if(typeof callback == 'function') {
					callback(optionArr.join(''));
				}
			}
		})
	},

	/**
	 * 补零操作
	 * @param num 需要补零的字符
	 * @param length 需要补零的位数 如 7 补为07，length=2,007length则为3
	 */
	fixZero: function(num, length) {
		var str = "" + num,
			len = str.length,
			s = "";
		for(var i = length; i-- > len;) {
			s += "0";
		}
		return s + str;
	},

	jzexport: function(params, callback) {
		$('.mergeItem').click(function() {
			var file;
			$('#export').show();
			$('#export #efile').after($('#export #efile').clone().val(""));
			$('#export #efile').eq(0).remove();
			$('#efile').change(function() {
				file = this.files[0];
			})
			if(params.url) {
				$('#ghItem').unbind('click').click(function() {
					ykp.prompt("因数据过多，下载模板需要时间，请等待！", {
						startTime: 0,
						endTime: 3000
					});
					var $el = $(this);
					$el.attr('disabled', true);
					ykp.doAjax({
						url: params.url,
						method: 'post',
						data: {
							type: params.type,
							title: params.title,
						},
						success: function(res) {
							window.open(res.data);
							$el.attr('disabled', false);
						}
					})
				})
			} else if(params.Url) {
				$('#ghItem').click(function() {
					ykp.prompt("因数据过多，下载模板需要时间，请等待！", {
						startTime: 0,
						endTime: 3000
					});
					var $el = $(this);
					setTimeout(function() {
						$el.attr('disabled', false);
					}, 3000);
					window.open(ykp.api_url + params.Url);
				})
			}
			$('.submit').unbind('click').click(function() {
				if(file == undefined) {
					ykp.prompt("请添加数据再上传");
				} else {
					var $el = $(this);
					$el.attr('disabled', true);
					var fd = new FormData();
					//					fd.append('service', file);
					fd.append(params.key ? params.key : 'service', file);
					fd.append('login_token', ykp.getCookie('login_token'));
					var data = {
						url: ykp.api_url + (params.url1 || "/api/api_service/upload_batch"),
						fd: fd,
					}
					cs.cexport(data, function(res) {
						if(res.code == 200) {
							if($.isFunction(callback)) {
								$('#efile').after($('#efile').clone().val(""));
								$('#efile').remove();
								callback(res);
							}
						} else {
							ykp.prompt(res.msg);
						}

					})
				}
			})
			cs.closePop();
		});
	},

	cexport: function(data, callback, err) {
	
		$.ajax({
			url: data.url,
			type: "post",
			dataType: 'json',
			data: data.fd,
			cache: false,
			contentType: false,
			processData: false,
			
			success: function(res) {
				
				if(res.data) {
						ykp.prompt("导入需要时间 请耐心等待");
				//	ykp.prompt("上传信息有误");
					$('#efile').after($('#efile').clone().val(""));
					$('.label_popup').hide();
					$('#efile').remove();
					layui.use('layer',function(){
						layui.layer.confirm('问题数据不能导入，是否下载查看', function(index){
                            layer.closeAll();
					        window.open(res.data);
					    });
					})
					
				} else {
					
					if($.isFunction(callback)) {
						ykp.prompt("导入需要时间 请耐心等待");
						callback(res);
					}
				}
				
				

			},
			error: function(err) {
				if($.isFunction(err)) {
					err(err);
				}
			}
		});
	},
	cexport1: function(data, callback) {
		$.ajax({
			url: data.url,
			type: "post",
			dataType: 'json',
			data: data.fd,
			cache: false,
			contentType: false,
			processData: false,
			success: function(res) {
				if($.isFunction(callback)) {
					callback(res);
				}
			},
			error: function() {

			}
		});
	},

	/**
	 * 
	 * @param {Object} data  url  参数   methods方式
	 * @param {Function} callback  回调
	 */
	doAjax: function(data, callback) {
		var that = this;
		if(!data.url) {
			return;
		}
		var div = document.createElement("div");
		var html = '<div class="dataTables_processing" id="onProcess" style="z-index:1100;">' + '<div class="note-success" style="padding:10px;border-radius:10px;">' + '<img  style="margin-right:10px;top:-1px;display: inline-block; position:relative" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABAElEQVQ4T6WTUVEDQRBEXysgcRAcBAUEBSABFICE4AAHHA5wACgACZGAg6Z6a44ix90FKv2ztTUzPdO9s+JIaKre9hXwWPELSR9juXMEr8B5Fb1J2theA5+Sdj3ZHMEzcFmJT0AIf06UO3sEtq+BlaSt7QWwTUfgAQhhP9F9cn4RzPlZnnSVs+k9mZTw18f5JrAd1qbrwCSRcwt0km4aQbn7DiwlRfMkbCd+0vQHhzoO42V0zM4E3b8JhoRjz7iQFJ17sL0CInMn6Wx0kWznrdeSkhxv2pnNi8nASxWe9ts4nCDLk4JmZBlmScu639UEadQw64Ht9oEk5Q+M4mgTvwDVbGURV0/HhAAAAABJRU5ErkJggg==" class="rotate"/>' + '<span style="">' + '数据玩命加载中...' + '</div>' + '</div>'
		div.innerHTML = ""; //html
		var Fun = function() {};
		Fun = function() {
			$('body').append(div);
		};
		var method = data.method ? data.method : 'get';
		$.ajax({
			beforeSend: Fun,
			url: that.api_url + data.url,
			type: data.method,
			dataType: 'json',
			data: data.data,
			success: function(res) {
				if(res.code == 200) {
					if($.isFunction(callback)) {
						callback(res);
						setTimeout(function() {
							$('#onProcess').parent().remove()
						}, 100);
					}
				} else {
					setTimeout(function() {
						$('#onProcess').parent().remove()

					}, 100);
				}

			},
			error: function(err) {
				setTimeout(function() {
					$('#onProcess').parent().remove()
				}, 500);
				ykp.prompt(err.msg)
			}
		})
	},

	getPreMonth: function(date) {
		var arr = date.split('-');
		var year = arr[0]; //获取当前日期的年份  
		var month = arr[1]; //获取当前日期的月份  
		var day = arr[2]; //获取当前日期的日  
		var days = new Date(year, month, 0);
		days = days.getDate(); //获取当前日期中月的天数  
		var year2 = year;
		var month2 = parseInt(month) - 1;
		if(month2 == 0) {
			year2 = parseInt(year2) - 1;
			month2 = 12;
		}
		var day2 = day;
		var days2 = new Date(year2, month2, 0);
		days2 = days2.getDate();
		if(day2 > days2) {
			day2 = days2;
		}
		if(month2 < 10) {
			month2 = '0' + month2;
		}
		var t2 = year2 + '.' + month2;
		return t2;
	}, //默认选中  false
	getYearAndMonth: function(start, end, el, status, custom,ispoint) {
		var result = ['201401'];
		var starts = start.split('-');
		var ends = end.split('-');
		var staYear = parseInt(starts[0]);
		var staMon = parseInt(starts[1]);
		var endYear = parseInt(ends[0]);
		var endMon = parseInt(ends[1]);
		var data = [];
		var ispoint = ispoint || false;
		while(staYear <= endYear) {
			if(status != "year") {
				if(staYear === endYear) {
					while(staMon < endMon) {
						staMon++;
						ispoint ? result.push(staYear + (staMon < 10 ? "0" + staMon : staMon.toString())) :result.push(staYear + "." + (staMon < 10 ? "0" + staMon : staMon));

					}
					staYear++;
				} else {
					staMon++;
					if(staMon > 12) {
						staMon = 1;
						staYear++;
					}
                     ispoint ? result.push(staYear + (staMon < 10 ? "0" + staMon: staMon.toString())):result.push(staYear + "." + (staMon < 10 ? "0" + staMon : staMon));
				}
			} else {
				if(staYear === endYear) {
					while(staMon < endMon) {
						staMon++;
						result.push(staYear);
					}
					staYear++;
				} else {
					staMon++;
					if(staMon > 12) {
						staMon = 1;
						staYear++;
					}
					result.push(staYear);
				}
			}
		}
		var date = new Date().getFullYear() + '.' + (new Date().getMonth() + 1 < 10 ? '0' + (new Date().getMonth() + 1) : new Date().getMonth() + 1);
		if(status != "year") {
			date = new Date().getFullYear() + '.' + (new Date().getMonth() + 1 < 10 ? '0' + (new Date().getMonth()) : new Date().getMonth());
		} else if(status == "year") {
			date = new Date().getFullYear();
			result.shift();
		}
		data.push('<option value="">请选择</option>');
		result.forEach(function(item) {
			if(custom) {
				data.push(`<option value="${item}">${item}</option>`);
			} else {
				if(item == date) {
					data.push(`<option selected=true value="${item}">${item}</option>`);
				} else {
					data.push(`<option value="${item}">${item}</option>`);
				}
			}

		})
		if(!el) {
			$('#templateBox').find('select[field=tax_money_period]').each(function() {
				$(this).html(data.join(''));
			});
		} else {
			$(el).html(data.join(''));
		}
		return result;
	},
	getYear: function(start, end, el) {
		var year = [];
		for(var i = start; i < start + 25; i++) {

			if(i < end) {
				year.push(i);
			}

		}
		var data = [];
		data.push('<option value="">请选择</option>');
		year.forEach(function(item) {
			data.push(`<option value="${item}">${item}</option>`);

		})
		if(!el) {
			$('#templateBox').find('select[field=tax_money_period]').each(function() {
				$(this).html(data.join(''));
			});
		} else {
			$(el).html(data.join(''));
		}
	},
	getPreMonth: function(date) {
		var arr = date.split('.');
		var year = arr[0]; //获取当前日期的年份  
		var month = arr[1]; //获取当前日期的月份  
		var day = arr[2]; //获取当前日期的日  
		var days = new Date(year, month, 0);
		days = days.getDate(); //获取当前日期中月的天数  
		var year2 = year;
		var month2 = parseInt(month) - 1;
		if(month2 == 0) {
			year2 = parseInt(year2) - 1;
			month2 = 12;
		}
		var day2 = day;
		var days2 = new Date(year2, month2, 0);
		days2 = days2.getDate();
		if(day2 > days2) {
			day2 = days2;
		}
		if(month2 < 10) {
			month2 = '0' + month2;
		}
		var t2 = year2 + '.' + month2;
		return t2;
	},

	/**
	 * 
	 * @param {String} time  时间  201709
	 */
	GetMounth: function(time) {
		if(time.charAt(4) == "0") {
			return time.substr(5)
		}
		return time.substr(4)
	},

	close: function() {
		$('.in').removeClass('modal-backdrop');
		$('#showBox').addClass('ishide');
		$('#templateCon').data('flag', '2');
	},

	/**
	 * 
	 * @param {String} searchID  搜索按钮id
	 * @param {Object} data ajax传的参数
	 * @param {String} filter  查询过滤字段  例：where filter
	 * @param {Boolean} status   是否是tabel选项卡
	 * @param {Object} callback   回调函数 返回res
	 * @param {String} defaultCondition 默认过滤条件，可传可不传
	 *  @param {String} assistant_type 记账能量环类型，可传可不传
	 */

	doSearch: function(searchID, data, filter, status, callback, defaultCondition, assistant_type, gz,paging) {
        var otherSear = {};
		var _paging = paging ? paging : "#pageBar";
		$(document).keydown(function(event) {
			if(event.keyCode == 13) {
				if($('.modal-backdrop').length == 0) {
					$(searchID).trigger("click");
				} else {
					return false;
				}
			}
		});

		$('#changePageNum').change(function() {
			data.data.pagesize ? data.data.pagesize = $(this).val() : "";
			data.data.rows ? data.data.rows = $(this).val() : "";
			data.data.page_size ? data.data.page_size = $(this).val() : "";
			data.data.limit ? data.data.limit = $(this).val() : "";
		})
		$(searchID).unbind('click').click(function() {
			var where = [];
			var num = 0;
			var partantId;
			if(status) {
				var index = $('.kind').find('.now').index();
				partantId = '#' + $('.tab-pane').eq(index).attr('id');
				type = index == 0 ? 2 : 1;
			} else {
				partantId = "";
			}
			
			$(partantId + ' [pts=4]').each(function() {
				if($(this).val() != "") {
					if($(this).attr('table')) {
						where.push('htm_contract.id IN  (SELECT contract_id FROM ' + $(this).attr('table') + ' WHERE ' + $(this).attr('sear') + '  =' + $(this).val() + ')');
						num++;
						return true;
					}
					where.push($(this).attr('sear') + ' IN (SELECT customer_id FROM ckm_position_num WHERE pos_name LIKE \'%' + $(this).val() + '%\')');
					num++;
				}
			});
			$(partantId + ' [pts=2]').each(function() {
				if($(this).select2('data')[0]['id'] != "") {
					where.push('FIND_IN_SET(' + $(this).select2('data')[0]['id'] + ',' + $(this).attr('sear') + ')');
					num++;
				}
			});
			$(partantId + ' [pts=3]').each(function() {
				if($(this).select2('data')[0]['id'] != "") {
					where.push($(this).attr('sear') + ' = ' + $(this).select2('data')[0]['id']);
					num++;
				}
			});
			$(partantId + ' [pts=5getNodes]').each(function() {
				where.push($(this).attr('sear') + ' = ' + $(this).val());
				num++;
			});
			$(partantId + ' [pts=1]').each(function() {
				if($(this).val() != "") {

					if($(this).attr('area') == '0') {
						where.push('(ckm_administration.type = 1 AND ckm_administration.province LIKE \'%' + $(this).val() + '%\') OR (ckm_administration.type = 2 AND ckm_administration.city LIKE \'%' + $(this).val() + '%\')');
						num++;
						return;
					}
					if($(this).attr('area') == '1') {
						where.push('ckm_position.city LIKE \'%' + $(this).val() + '%\'');
						num++;
						return;
					}
					if($(this).attr('status') == 'time' && gz) {
						data['data'][$(this).attr('sear')] = $(this).val().replace(/\./, "-");
						otherSear[$(this).attr('sear')] = $(this).val().replace(/\./, "-");
						num++;
						return;
					} else if($(this).attr('status') == 'time') {
						data['data'][$(this).attr('sear')] = $(this).val().replace(/\./, "");
						otherSear[$(this).attr('sear')] = $(this).val().replace(/\./, "-");
						num++;
						return;
					}
					data['data'][$(this).attr('sear')] = $(this).val();
					otherSear[$(this).attr('sear')] = $(this).val();
					num++;
				}else{
					if(data.hasOwnProperty('data')) {
						delete data.data[$(this).attr('sear')];
						//data['data'].splice($(this).attr('sear'),1);
					}
				}
			});
            $(partantId + ' [pts=20]').each(function() {
                //后面修改搜搜条件要用到
                //if($(this).attr('okeywords')) {
                //if($(this).val() != "") {
                //data.data[$(this).attr('sear')] = $(this).val();
                //num++;
                //}
                if($(this).val() != "") {
                    if($(this).attr('data-status') == 'rangtime') {
                        var time = $(this).val().split('-');
                        where.push($(this).attr('sear') + ' between ' + new Date(time[0]) / 1000 + ' and ' + (new Date(time[1]) / 1000 + 86399));
                    } else {
                        where.push($(this).attr('sear') + ' like \'%' + $(this).val() + '%\'');
                        data['data'][$(this).attr('sear1')] = $(this).val();
                    }
                    num++;
                }
            });

			$(partantId + ' [pts=0]').each(function() {
				//后面修改搜搜条件要用到
				//if($(this).attr('okeywords')) {
				//if($(this).val() != "") {
				//data.data[$(this).attr('sear')] = $(this).val();
				//num++;
				//}
				//}
				if($(this).val() != "") {
					if($(this).attr('data-status') == 'rangtime') {
						var time = $(this).val().split('-');
						where.push($(this).attr('sear') + ' between ' + new Date(time[0]) / 1000 + ' and ' + (new Date(time[1]) / 1000 + 86399));
					} else {
						where.push($(this).attr('sear') + ' like \'%' + $(this).val() + '%\'');
					}
					num++;
				}
				//}
			});

			//判断输入框是否输入检索关键字    && num == 0
			if(num == 0) {
				ykp.prompt('搜索条件至少输入一个！');
				return false;
			}

			//当分为小规模和一般纳税人时
			if(status) {
				if(status != 'haha') {
					var index = $('.kind').find('.now').index();
					type = index == 0 ? 2 : 1;
					where.push('khm_customer.tax_type=' + type);
				}
			}

			if(defaultCondition) {
				where.push(defaultCondition);
			}
			if(where.length > 0) {
				where = where.join(' and ');
				data.data[filter] = where;
			}

			//日志页面
			if(data.type == 1) {
				var index = parseInt($('.nav-tabs .active').index());
				data.data[filter] += ' and type =' + (index + 1)
			}

			if($('#pageBar li ').length > 0) {
				$('#pageBar').children().remove();

			}
			ykp.list({
				url: data.url,
				method: data.method,
				data: data.data,
				pageBar: {
					id: _paging
				},
				loadList: function(res) {
                    if($.isFunction(callback)) {
						cs.last_year_month();
						var tableId = $(partantId).find('table').attr('id');
						ykp.setCookie('filter', where);
						ykp.setCookie('where', where);
						callback(res, where,otherSear);
					}
				}
			})

			if(assistant_type) {
				if(!assistant_type.type) {
					var url = "";
					ykp.doAjax({
						url: assistant_type.url,
						method: data.method,
						data: data.data,
						success: function(res) {
							var data = {};
							data['assistants'] = res.data['目标'];
							data['assistants']['complete'] = data['assistants']['done'];
							data['assistants']['total'] = data['assistants']['all'];
							data['assistants']['mubiao'] = data['assistants']['mubiao'];
							data['months'] = res.data['本月新增'];
							data['months']['complete'] = data['months']['done'];
							data['months']['total'] = data['months']['all'];
							data['history'] = res.data['历史积压'];
							data['history']['complete'] = data['history']['done'];
							data['history']['total'] = data['history']['all'];
							data['total'] = res.data['累计任务'];
							data['total']['complete'] = data['total']['done'];
							data['total']['total'] = data['total']['all'];
							cs.changeChart(data, "", true);
						}
					})
				} else {
					ykp.doAjax({
						url: assistant_type.url,
						method: data.method,
						data: data.data,
						success: function(res) {
							var data = {};
							data['invoice'] = res.data['本月发票认证'];
							data['invoice']['complete'] = data['invoice']['done'];
							data['invoice']['total'] = data['invoice']['all'];
							data['state_tax'] = res.data['本月国税申报'];
							data['state_tax']['complete'] = data['state_tax']['done'];
							data['state_tax']['total'] = data['state_tax']['all'];
							data['local_tax'] = res.data['本月地税申报'];
							data['local_tax']['complete'] = data['local_tax']['done'];
							data['local_tax']['total'] = data['local_tax']['all'];
							data['gs'] = res.data['本月工商申报'];
							data['gs']['complete'] = data['gs']['done'];
							data['gs']['total'] = data['gs']['all'];
							data['sw'] = res.data['本月税务申报'];
							data['sw']['complete'] = data['sw']['done'];
							data['sw']['total'] = data['sw']['all'];
							cs.changeChart(data, true);
						}
					})

				}
			}

		})
	},

	/**
	 * 高级搜索
	 * @param {String} searchID  搜索按钮id
	 * @param {Object} data ajax传的参数
	 * @param {String} filter  查询过滤字段  例：where filter
	 * @param {Boolean} status   是否是tabel选项卡
	 * @param {Object} callback   回调函数 返回res
	 *  @param {String} defaultCondition 默认过滤条件，可传可不传
	 * @param {String} assistant_type 记账能量环类型，可传可不传
	 */

	hSearch: function(searchID, data, filter, status, callback, defaultCondition, assistant_type,paging) {
		var _paging = paging ? paging : "#pageBar"
        $(document).keydown(function(event) {
			if(event.keyCode == 13) {
				if($('.modal-backdrop').length == 1 && $(searchID).parents('.col-sx-12').css('display') == 'block') {
					$(searchID).trigger("click");
				} else {
					return false;
				}
			}
		});

		$('#changePageNum').change(function() {
			data.data.pagesize = data.data.pagesize ? $(this).val() : "";
			data.data.rows = data.data.rows ? $(this).val() : "";
			data.data.page_size = data.data.page_size ? $(this).val() : "";
			data.data.limit = data.data.limit ?  $(this).val() : "";
		})
		$(searchID).unbind('click').click(function() {
           	data.data.page = 1;
            var where = [];
			var partantId;
			var num = 0; //存放  分出来的字段数量   防止无条件直接搜索
			if(status) {
				var index = $('.kind').find('.now').index();
				partantId = '#' + $('.tab-pane').eq(index).attr('id');
			} else {
				partantId = "";

			}

			$(partantId + ' [gjs=3]').each(function() {
				if($(this).select2('data')[0]['id'] != "") {
					where.push($(this).attr('sear') + ' = ' + $(this).select2('data')[0]['id']);
					num++;
				}
			});

			//需要计算的高级搜索
			$(partantId + ' [gjs=8]').each(function() {
				if($(this).val().trim() != "") {
					where.push('(htm_contract.total_monry - htm_contract.get_money) ' + $(this).parents('.col-sx-4').find('select').val() + ' ' + $(this).val().trim());
					num++;
				}
			});
			$(partantId + ' [gjs=1]').each(function() {
				if($(this).val() != "") {
					if($(this).attr('table')) {
						where.push('htm_contract.id IN  (SELECT contract_id FROM ' + $(this).attr('table') + ' WHERE ' + $(this).attr('sear') + '  =' + $(this).val() + ')');
						num++;
						return true;
					}
					data['data'][$(this).attr('sear')] = $(this).val();
					num++;
				}
			});
			$(partantId + ' [gjs=2]').each(function() {
				if($(this).select2('data')[0]['id'] != "") {
					where.push('FIND_IN_SET(' + $(this).select2('data')[0]['id'] + ',' + $(this).attr('sear') + ')');
					num++;
				}
			});
			$(partantId + ' [gjs=4]').each(function() {
				if($(this).select2('data')[0]['id'] != "") {
					where.push($(this).attr('sear') + ' = ' + $(this).select2('data')[0]['id'] + ')');
					num++;
				}
			});
			$(partantId + ' [gjs=6]').each(function() {
				if($(this).val() != "") {
					if($(this).attr('tax') == 'true') {
						where.push('jzm_service_info.id in (SELECT service_id FROM jzm_tax_details WHERE ' + $(this).attr('sear') + ' = ' + $(this).val() + ')');
						num++;
						return;
					}
					if($(this).attr('sear') == 'jzm_service_info.get_money') {

						if($(this).val() == '0') {
							where.push('jzm_service_info.get_money = 0');
						}
						if($(this).val() == '1') {
							where.push('jzm_service_info.get_money != 0');
						}
						num++;
						return;
					}
					where.push($(this).attr('sear') + ' IN (SELECT customer_id FROM ckm_position_num WHERE pos_id = ' + $(this).val() + ')');
					num++;
				}
			});

			$(partantId + ' [gjs=7]').each(function() {
				if($(this).val() != '' && $(this).attr('data-type') == 'gj') {
					var val = $(this).parents('.col-sx-4').find('select').val();
					if($(this).attr('data-status') == 'time') {
						where.push('htm_contract.id IN (SELECT contract_id FROM htm_task WHERE ' + $(this).attr('sear') + ' ' + val + ' ' + (new Date($(this).val()) / 1000) + ' )');
					} else {
						where.push('htm_contract.id IN (SELECT contract_id FROM htm_task WHERE ' + $(this).attr('sear') + ' ' + val + ' ' + $(this).val() + ' )');
					}
					num++;
				} else if($(this).val() != "") {
					if($(this).attr('marketing-id') == '1') {
						where.push('htm_contract.id IN (SELECT contract_id FROM htm_task_staff WHERE staff_id = ' + $(this).val() + ' )');
						num++;
						return true;
					}
					if($(this).attr('marketing-id') == '0') {
						where.push('htm_contract.id IN (SELECT contract_id FROM htm_contract_marketing WHERE marketing_id = ' + $(this).val() + ' )');
						num++;
						return true;
					}
					if($(this).attr('marketing-id') == '2') {
						where.push('(ckm_administration.type = 1 AND ckm_administration.province LIKE \'%' + $(this).val() + '%\') OR (ckm_administration.type = 2 AND ckm_administration.city LIKE \'%' + $(this).val() + '%\')');
						num++;
						return true;
					}
					if($(this).attr('marketing-id') == '3') {
						where.push('ckm_position.city LIKE \'%' + $(this).val() + '%\'');
						num++;
						return true;
					}
					where.push($(this).attr('sear') + ' IN (SELECT contract_id FROM htm_task WHERE product_id IN (SELECT id FROM ckm_product WHERE NAME LIKE \'%' + $(this).val() + '%\'))');
					num++;
				}
			});

			$(partantId + ' [gjs=9]').each(function() {
				if($(this).val()) {
					if($(this).attr('type') == 2) {
						where.push(($(this).attr('sear') + ' = ' + $(this).val() + ' or htm_task.create_id' + ' = ' + $(this).val()));
						num++;
					} else {
						where.push($(this).attr('sear') + ' = ' + $(this).val());
						num++;
					}
				}

			});

			$(partantId + ' [gjs=10]').each(function() {
				if($(this).val() && $(this).next().val()) {
					if($(this).attr('sear') == 'htm_task.discount') {
						where.push('htm_contract.id IN (SELECT contract_id FROM htm_task WHERE discount >= ' + $(this).val() + ' AND discount <=' + $(this).next().val() + ') ');

					} else {
						where.push($(this).attr('sear') + ' >=  ' + $(this).val() + ' and ' + $(this).attr('sear') + " <= " + $(this).next().val());
					}
					num++;
				}
			});

			//欠账本费
			$(partantId + ' [gjs=11]').each(function() {
				if($(this).val() && $(this).prev().attr('gjs') != 10) {
					var val = $(this).parents('.col-sx-4').find('select').val();
					where.push('(htm_contract.account_book - htm_contract.get_account_book) ' + val + ' ' + $(this).val());
					num++;
				}
			});

			var year = '';
			var month = '';
			var tableId = $(partantId).find('table').attr('id');
			$(partantId + ' [gjs=5]').each(function() {
				if($(this).val() != "") {
					if($(this).attr('sear') == 'year') {
						year = $(this).val().trim();
						if($(this).attr('data-year')) {
							//遍历列表
							cs.initTheard((partantId || "#dynamic-table"), year);
							$(partantId + ' #custom').remove();
                            $(".row").find("th").each(function (e,i) {
                            })
							//cs.custorm_check('#' + tableId, '#dataList', false);

						}
					}
					if($(this).attr('sear') == 'month') {
						month = $(this).val().trim();
					}
					num++;
				}
			});
			if(year && month) {
				data['data']['month2'] = year + month;
				var Month = month.charAt(0) == 0 ? month.replace([0], '') : month;
				cs.last_year_month({
					year: year,
					month: Month - 1
				});
				$(partantId + ' #custom').remove();
			}
			if(!year && month) {
				data['data']['month2'] = new Date().getFullYear() + month;
				var Month = month.charAt(0) == 0 ? month.replace([0], '') : month;
				cs.last_year_month({
					year: year,
					month: Month - 1
				});
				$(partantId + ' #custom').remove();
			}
			if(year && !month) {
				data['data']['month2'] = year + '12';
				cs.last_year_month({
					year: year,
					month: 11
				});
				$(partantId + ' #custom').remove();
			}

			$(partantId + ' [gjs=0]').each(function() {
				//有条件有关键字
				//后面修改搜搜条件要用到
				if($(this).val() != "" && $(this).attr('data-type') == 'gj') {
					var val = $(this).parents('.col-sx-4').find('select').val();
					if($(this).attr('sear') == 'jzm_service_info.get_money') {
						if($(this).val() == '0') {
							where.push($(this).attr('sear') + ' != -1');
						}
						if($(this).val() == '1') {
							where.push($(this).attr('sear') + ' = -1');
						}
						num++;
						return true;
					}
					if($(this).attr('data-status') == 'time') {
						where.push($(this).attr('sear') + ' ' + val + ' ' + new Date($(this).val()) / 1000);
					} else {
						where.push($(this).attr('sear') + ' ' + val + ' ' + $(this).val());
					}
					num++;
					return true;
				}
				if($(this).val() != "") {
					if($(this).attr('data-type') == 'time') {

					} else if($(this).attr('data-status') == 'rangtime') {
						var time = $(this).val().split('-');
						where.push($(this).attr('sear') + ' between ' + new Date(time[0]) / 1000 + ' and ' + (new Date(time[1]) / 1000 + 86399));
					} else {
						where.push($(this).attr('sear') + ' like \'%' + $(this).val() + '%\'');
					}
					num++;
				}
			});

            $(partantId + ' [gjs=20]').each(function() {
                //有条件有关键字
                //后面修改搜搜条件要用到
                if($(this).val() != "" && $(this).attr('data-type') == 'gj') {
                    var val = $(this).parents('.col-sx-4').find('select').val();
                    if($(this).attr('sear') == 'jzm_service_info.get_money') {
                        if($(this).val() == '0') {
                            where.push($(this).attr('sear') + ' != -1');
                        }
                        if($(this).val() == '1') {
                            where.push($(this).attr('sear') + ' = -1');
                        }
                        num++;
                        return true;
                    }
                    if($(this).attr('data-status') == 'time') {
                        where.push($(this).attr('sear') + ' ' + val + ' ' + new Date($(this).val()) / 1000);
                    } else {
                        where.push($(this).attr('sear') + ' ' + val + ' ' + $(this).val());
                    }
                    num++;
                    return true;
                }
                if($(this).val() != "") {
                    if($(this).attr('data-type') == 'time') {
                    } else if($(this).attr('data-status') == 'rangtime') {
                        var time = $(this).val().split('-');
                        where.push($(this).attr('sear') + ' between ' + new Date(time[0]) / 1000 + ' and ' + (new Date(time[1]) / 1000 + 86399));
                    } else {
                        where.push($(this).attr('sear') + ' like \'%' + $(this).val() + '%\'');
                        data['data'][$(this).attr('sear1')] = $(this).val();
                    }
                    num++;
                }
            });

			//有条件无关键字 如 ：客户级别
			// $(partantId + 'select[gjs=0]').each(function(i) {
			// 	if($(this).val() != "") {
			// 		where.push($(this).attr('sear') + ' = \'' + $(this).val() + "\'");
			// 	}
			// })

			//当分为小规模和一般纳税人时

			//判断输入框是否输入检索关键字   && num == 0
			if(num == 0) {
				ykp.prompt('搜索条件至少输入一个！');
				return false;
			}
			if(status) {
				if(status != 'haha') {
					var index = $('.kind').find('.now').index();
					var type = index == 0 ? 2 : 1;
					where.push('khm_customer.tax_type=' + type);
				}
			}

			if(defaultCondition) {
                where.push(defaultCondition);
			}

			if(where.length > 0) {
				where = where.join(' and ');
				data.data[filter] = where;
			}
			//针对客户服务的合作状态为已失效的新增一个查询逻辑
			if(data.url == '/api/api_customer/customer' && data.data.type == '3' && data.data[filter].indexOf('khm_customer.status = 2') != -1) {
				data.data.type = 4;
			}
			if(data.url == '/api/api_customer/customer' && data.data.type == '4' && data.data[filter].indexOf('khm_customer.status = 1') != -1) {
                data.data.type = 3;
            }
			ykp.setCookie('filter', where);
			ykp.setCookie('where', where);
			ykp.setCookie('month2', data.data['month2']  ? data.data['month2'] : "");
            ykp.list({
				url: data.url,
				method: data.method,
				data: data.data,
				pageBar: {
					id: _paging
				},
				loadList: function(res) {
					var tableId = $(partantId).find('table').attr('id');
					if($.isFunction(callback)) {
						if(data.data['month2']) {
							callback(res, where, data.data['month2']);
						} else {
							callback(res, where);
						}
					}
				}
			})

			if(assistant_type) {
				var url = "";
				ykp.doAjax({
					url: assistant_type.url,
					method: data.method,
					data: data.data,
					success: function(res) {
						var data = {};
						if(res.data.length == 0) return ;
						if(!assistant_type.type) {
							data['assistants'] = res.data['目标'];
							data['assistants']['complete'] = data['assistants']['done'];
							data['assistants']['total'] = data['assistants']['all'];
							data['assistants']['mubiao'] = data['assistants']['mubiao'];
							data['months'] = res.data['本月新增'];
							data['months']['complete'] = data['months']['done'];
							data['months']['total'] = data['months']['all'];
							data['history'] = res.data['历史积压'];
							data['history']['complete'] = data['history']['done'];
							data['history']['total'] = data['history']['all'];
							data['total'] = res.data['累计任务'];
							data['total']['complete'] = data['total']['done'];
							data['total']['total'] = data['total']['all'];
							cs.changeChart(data, "", true);
						} else {
							data['invoice'] = res.data['本月发票认证'];
							data['invoice']['complete'] = data['invoice']['done'];
							data['invoice']['total'] = data['invoice']['all'];
							data['state_tax'] = res.data['本月国税申报'];
							data['state_tax']['complete'] = data['state_tax']['done'];
							data['state_tax']['total'] = data['state_tax']['all'];
							data['local_tax'] = res.data['本月地税申报'];
							data['local_tax']['complete'] = data['local_tax']['done'];
							data['local_tax']['total'] = data['local_tax']['all'];
							data['gs'] = res.data['本月工商申报'];
							data['gs']['complete'] = data['gs']['done'];
							data['gs']['total'] = data['gs']['all'];
							data['sw'] = res.data['本月税务申报'];
							data['sw']['complete'] = data['sw']['done'];
							data['sw']['total'] = data['sw']['all'];
							cs.changeChart(data, true);
						}

					}
				})
			}

		})
	},
	setFuze: function(option) {
		if(!$("#move").length) {
			$(`<div class="label_popup moveout" id="move" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;max-height: 400px;">
			<div style="max-width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
	        box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">
	
				<div style="padding:15px;border-bottom:1px solid #ddd;">
					<span style="display: inline-block;font-size:14px;">移交负责人</span>
					<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>
				</div>
				<div style="padding: 10px 20px;">
					<div style="margin-bottom: 10px; margin-top: 10px;max-height:300px;overflow:auto;">
						<table>
							<tbody class="move_message">
								<tr>
									<td>
										<span>移交给</span>
										<i style="padding:0 5px;"></i>
										<select class="employees select2-hidden-accessible" style="width:200px">
											<option value="">请选择负责人</option>
										</select>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div style="padding:20px;text-align:right;">
					<button class="hold_label btn btn-info btn-sm">保存</button>
				</div>
			</div>
		</div>`).insertAfter("#showBox");
		}

		var employees = {};
		//获取所有员工
		ykp.doAjax({
			url: '/api/api_employees/f7',
			method: 'post',
			data: {
				select: 'bmm_employees.id,bmm_employees.name'
			},
			success: function(res) {
				var data = res.data;
				for(var i in data) {
					if(data[i].name) {
						employees[data[i].id] = data[i].name;
					}
				}
			}
		});

		$('.moveToClue').unbind('click').click(function() {
			var datalist = "";
			var _index = 0;
			if(option.check) { //切换标签

				datalist = $('.kind .now').index() == 0 ? option.conId[0] : option.conId[1];
				_index = $('.kind .now').index() == 0 ? 2 : 1;
			} else {
				datalist = option.conId;
			}
			var customer_id = []; //公司id
			var index = $(this).parent().index();

			$(datalist).find('td').not("#tax").find('[type="checkbox"]').each(function(i, e) {
				if($(this).prop('checked') == true) {
					customer_id.push($(this).parents('tr').attr('customer-id') || $(this).parents('tr').attr('cid'));
				}
			});
			if(customer_id.length <= 0) {
				ykp.prompt('请先选择公司！');
				return;
			}

			$('.move_message .employees').select2({
				allowClear: true
			});

			var employees_html = [];
			for(var i in employees) {
				employees_html.push('<option value="' + i + '">' + employees[i] + '</option>');
			}
            $('.move_message .employees').html('<option>请选择负责人</option>');
			$('.move_message .employees').append(employees_html.join(''));
			//显示移出层
			$('.moveout').fadeIn();

			//保存移出信息
			$('.moveout .hold_label').unbind('click').click(function() {
				var user_id = $('.moveout  .employees').val();

				if(!user_id) {
					ykp.prompt('请选择负责人');
					return;
				}
				var postdata = {

					to_user: user_id
				};
				if(option.task) {
					postdata.tasks = customer_id.join(',');
				} else if(option.books) {
					postdata.books = customer_id.join(',');
				} else {
					postdata.customers = customer_id.join(',');
				}
				if(option.type) {
					postdata["type"] = option.type;
				}

				ykp.doAjax({
					url: option.url,
					method: 'post',
					data: postdata,
					success: function(res) {
						ykp.prompt('移交成功');
						$('.move_message .employees').val("").trigger('change');
						$('#move').fadeOut();
						if(typeof option.fun == "function") {
							option.fun(option.check ? _index : "");
						}
					}
				});
			});
			//隐藏移出层
			cs.closePop();
		});
	},

	getyearList: function(el) {
		var num = 2000;
		var arr = [];
		arr.push(`<option value="">请选择</option>`);
		for(var i = num; i < num + 51; i++) {

			arr.push(`<option value="${i}"> ${i} </option>`);
		}
		$(el).find('select[data-year=true]').html(arr.join(','));
	},

	initTheard: function(id, year) {
		var month = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
		$(id).find('th[data-month]').each(function(i) {
			$(this).text(year + "" + parseInt(month[i]));
		})
	},
	last_year_month: function(data, month) {
		var year = data ? (data.year ? data.year : new Date().getFullYear()) : "";
		var d = data ? new Date(year, data.month, 1) : new Date();
		var result = [];
		var index = $('.kind').find('.now').index();
		var partantId = '#' + $('.tab-pane').eq(index).attr('id');
		var num = (parseInt(d.getMonth()) + 1) < 10 ? "0" + (parseInt(d.getMonth()) + 1) : (parseInt(d.getMonth()) + 1);
		result.push(d.getFullYear() + "" + num);
		var num = month || 11;
		for(var i = 0; i < num; i++) {
			var gmonth = d.getMonth();
			d.setMonth(d.getMonth() - 1);
			var m = d.getMonth() + 1;
			m = m < 10 ? ("0" + m) : m;
			if((d.getFullYear() + "" + m).indexOf('00') != 4) {
				result.push(d.getFullYear() + "" + m);
			}
		}
		result = result.reverse();
		return result;
	},

	getSearch: function(option, fun) {
		var list = option.list;
		var el = option.el;
		var el1 = option.el1;
		var option = "";
		var content = '';
		var dataList = {};
		for(var i in list) {
			if(list[i].url && list[i].key) {
				var key = list[i]['key'];
				var title = list[i]['title'];
				ykp.doAjax({
					url: list[i].url,
					method: 'post',
					async: false,
					data: {
						select: list[i]['select'] || 'bmm_employees.id,bmm_employees.name'
					},
					success: function(res) {
						var data = res.data;

						var option = ''
						for(var i in data) {
							if(data[i][title] ? !data[i][title] : !data[i]['name']) {
								continue;
							}
							option += `<option value="${data[i]['id']}">${ data[i][title] ? data[i][title] : data[i]['name']}</option>`
						}
						dataList[key] = option;
					}
				});
			}
		}
        var selectOption = "";
		for(var i in list) {
			if(list[i].type == 'text') {
				if(list[i].range) {
					selectOption = "<option> = </option><option> < </option><option> > </option>";
				} else {
					selectOption = "<option> = </option>"
				}

				content += `<div class="col-sx-4" style=" float: left; margin-bottom:5px;">	<label>${list[i].name}</label>
							<select>
								${selectOption}
							</select>
							<input type="text" ${list[i].range ? "data-type='gj' " : ''} gjs=0 sear="${list[i].search}" />
						</div></div>`;
			} else if(list[i].type == 'number') {
				content += `<div class="col-sx-4" style=" float: left; margin-bottom:5px;">
							<label>${list[i].name}</label>
							<select>
								<option> = </option>
								<option> &lt; </option>
								<option> > </option>
							</select>

							<input type="number" data-type="gj" gjs=0 sear="${list[i].search}" />
						</div>`;
			} else if(list[i].type == 'time') {
				content += `<div class="col-sx-4" style=" float: left;margin-bottom:5px;">
						<label>${list[i].name}</label>
							<select>
								${selectOption}
							</select>
						<div class="input-group"  style="display: inline-flex; width: 180px;">
								<span class="input-group-addon">
									<i class="fa fa-calendar bigger-110"></i>
								</span>
							<input class="form-control" type="text"  data-status="rangtime" gjs=0 sear="${list[i].search}" name="date-range-picker" id="id-date-range-picker-1" />
						</div>
					</div>`;
			} else if(list[i].type == 'select') {
				option = '';
				if(!list[i].url) {
					content += `<div class="col-sx-4" style=" float: left; margin-bottom:5px;">
							<label>${list[i].name}</label>
							<select>
								<option> = </option>
							</select>
							<select gjs=0 sear="${list[i].search}" class="${list[i].class || ""}" data-type="gj" style="width:180px;"><option value="">请选择</option>`;
					for(var j in list[i].option) {
						option += `<option value="${list[i].option[j]['val']}">${list[i].option[j]['text']}</option>`;
					}
					content += option;
				} else {
					option = '';
					content += `<div class="col-sx-4" style=" float: left; margin-bottom:5px;">
                        <label>${list[i].name}</label>
                        <select>
                            <option> = </option>
                        </select>
                    	 <select style="margin:12px !important;width: 180px" sear="${list[i].search}" gjs="3" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">    
						<option value="">请选择</option>
					`;
					content += dataList[list[i].key];
				}
				content += '</select></div>';
			}
		}

		content += `<div style="text-align:center;clear:both;padding-top:10px; ">
							<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">
		                        查询
		                    </button>
							<button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">
		                       重置
		                    </button>
						</div>`;
        $(el1).html(content);
		$('.advandced-search').select2({
			allowClear: true
		});
		cs.timeplug();
		cs.dataRang();
		//高级搜索
		cs.showHeightSearch(el, el1);
		fun();
	},

	/**
	 * 
	 * @param {Object} data    参数
	 * @param {Function} callback  回调
	 */
	spList: function(data, callback, name) {
		var page_size = data.page_size ? data.page_size : 10; //每页多少个
		var current = data.current ? data.current : 1; //当前页
		//var current = ykp.getCookie('page_no') || 1; //当前页
		var approve_type = data.type; //；类型
		var filter = []; //查询条件存放地址
		var curFilter = [];
		var dataArr = {};
		if(!data.filter) {
			filter.push('spm_approves.approve_type = ' + approve_type);
		}

        //审核状态
		if(data.approve_result) {
			filter.push('approve_result = ' + data.approve_result);
		}

		//过滤条件
		if(data.filter) {
			filter.push(data.filter);
		}

		//		if(curFilter){
		//			
		//		}

		//搜索关键字khm_customer.name
		if(data.search) {

			//			$('.portlet').find('input').each(function() {
			//				filter.push($(this).attr('sear') + ' like \'%' + $(this).val() + '%\'');
			//				
			//			})
			// 	filter.push(' approve_code like \'%'+ data.search + '%\'');
			filter = filter.concat(data.search);
		}

		filter = filter.join(' and ');

		dataArr = {
			url: '/api/Api_approves/get_list',
			method: 'post',
			data: {
				page_size: page_size,
				page: current,
				filter: filter,
				order: data.order
			}
		}
        //通用排序
		cs.general_sort({
			url: '/api/Api_approves/get_list',
			method: 'post',
			data: {
				page_size: page_size,
				page: current,
				filter: filter,
				order: data.order
			},
			pageBar: {
				id: '#pageBar'
			},
			contentId: data.contentId, //默认排序
			initOrder: data.initOrder, //初始化sort
			defaultOrder: data.defaultOrder,
			params: data.params
		}, function(res, _sort_role) {
			if($.isFunction(callback)) {
				callback(res, _sort_role);
			}
		});
		if(!cs.getSpStatus(name)) {
			ykp.prompt('暂时没有开启审批功能');
			return false;
		}

		ykp.list({
			url: '/api/Api_approves/get_list',
			method: 'post',
			data: {
				limit: page_size,
				page: current,
				filter: filter,
				order: data.order
			},
			pageBar: {
				id: '#pageBar'
			},
			loadList: function(res) {
				if($.isFunction(callback)) {
					ykp.setCookie('filter', filter);
					callback(res, data.order, filter);
				}
			}
		});
	},

	closePop: function() {
		$('.close_label').unbind('click').click(function() {
			$(this).parents('.label_popup').fadeOut();
		})
	},

	//时间插件
	timeplug: function(status) {
		if(status) {
			if(!ace.vars['old_ie']) {
				$('.date-timepicker1').datetimepicker({
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
		} else {
			if(!ace.vars['old_ie']) {
				$('.date-timepicker1').datetimepicker({
					format: 'YYYY-MM-DD', //use this option to display seconds
					//					todayHighlight:true,
					//					inline: true,  
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
					},
					//					todayHighlight:true
				}).next().on(ace.click_event, function() {
					$(this).prev().focus();
				});
			}
		}

	},

	dataRang: function() {
/*		$('input[name=date-range-picker]').daterangepicker({
				'applyClass': 'btn-sm btn-success',
				'cancelClass': 'btn-sm btn-default',
				"clearBtn": true,
				locale: {
					applyLabel: '确认',
					cancelLabel: '取消',
				}
		})*/
        var curDate = new Date();
		var curYear = curDate.getFullYear();
		var curMonth = curDate.getMonth();
		var curDay = curDate.getDate();
		var lastMonth = curDate.getMonth() - 1;
        $('input[name=date-range-picker]').daterangepicker({
            'applyClass': 'btn-sm btn-success',
            'cancelClass': 'btn-sm btn-default',
            startDate: moment(),
            "alwaysShowCalendars": true,
            locale: {
                format: 'YYYY/MM/DD',
                applyLabel: '确认',
                cancelLabel: '取消',
                customRangeLabel:'其它时间',
            },
            ranges: {
                '今天': [moment().startOf('day'), moment()],
                '昨天': [moment().subtract('days', 1).startOf('day'), moment().subtract('days', 1).endOf('day')],
                '最近7天': [moment().subtract('days', 6), moment()],
                '最近30天': [moment().subtract('days', 29), moment()],
                //'本月': [moment([curYear, curMonth, 1]), moment().endOf('month')],
                //'上一月': [moment([curYear, lastMonth, 1]), moment([curYear, lastMonth, 1]).endOf('month')],
                '本月': [moment().startOf('month'), moment().endOf('month')],
                '上一月': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                '近一年': [moment().subtract(12, 'month'), moment()]
            }
        })

		.prev().on(ace.click_event, function() {
            $(this).next().focus();
			});
        $('input[name="date-range-picker"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });

		$('input[name=date-range-picker]').val('');
	},

	/**
	 * 
	 * @param {Object} data  参数
	 */
	drowPieCharts: function(data) {
		if(!data.el) {
			ykp.prompt('节点没有找到');
			return false;
		}
		var text = data.title.text ? data.title.text : ''
		var x = data.title.x ? data.title.x : 'center'; //默认为左边

		var option = {
			title: {
				text: text,
				x: x
			},
			tooltip: {
				trigger: 'item',
				formatter: "{a} <br/>{b} : {c} ({d}%)"
			},
			legend: {
				show: data.legend.show,
				orient: 'vertical',
				right: 0,
				data: data.legend.data
			},
			series: [{
				name: data.series.name,
				type: 'pie',
				radius: '55%',
				center: ['50%', '60%'],
				data: data.series.data,
				itemStyle: {
					emphasis: {
						shadowBlur: 10,
						shadowOffsetX: 0,
						shadowColor: 'rgba(0, 0, 0, 0.5)'
					}
				}
			}]
		};

		var myChart = echarts.init(document.getElementById(data.el));
		myChart.setOption(option);
	},

	/**
	 * 
	 * @param {Object} data  参数
	 */

	drowDPieCharts: function(data) {
		if(!data.el) {
			ykp.prompt('节点没有找到');
			return false;
		}
		var text = data.title.text ? data.title.text : ''
		var x = data.title.x ? data.title.x : 'left'; //默认为左边
		var option = {
			title: {
				text: text,
				subtext: '',
				x: 'center',
				bottom: 0,
			},
			tooltip: {
				trigger: 'item',
				formatter: "{a} <br/>{b}: {c} ({d}%)"
			},
			legend: {
				orient: 'vertical',
				x: x,
				bottom: 0,
				data: data.legend.data
			},
			series: [{
					name: data.series.name,
					type: 'pie',
					selectedMode: 'single',
					radius: [0, '30%'],
					label: {
						normal: {
							position: 'inner'
						}
					},
					labelLine: {
						normal: {
							show: false
						}
					},
					data: data.series.data
				},
				{
					name: '访问来源',
					type: 'pie',
					radius: ['40%', '55%'],
					label: {
						normal: {
							formatter: '{a|{a}}{abg|}\n{hr|}\n  {b|{b}：}{c}  {per|{d}%}  ',
							backgroundColor: '#eee',
							borderColor: '#aaa',
							borderWidth: 1,
							borderRadius: 4,
							rich: {
								a: {
									color: '#999',
									lineHeight: 22,
									align: 'center'
								},
								hr: {
									borderColor: '#aaa',
									width: '100%',
									borderWidth: 0.5,
									height: 0
								},
								b: {
									fontSize: 16,
									lineHeight: 33
								},
								per: {
									color: '#eee',
									backgroundColor: '#334455',
									padding: [2, 4],
									borderRadius: 2
								}
							}
						}
					},
					data: data.series1.data
				}
			]
		}

		var myChart = echarts.init(document.getElementById(data.el));
		myChart.setOption(option);
	},

	/**
	 * 
	 * @param {Object} data  option 参数
	 */
	drowBline: function(data) {
		if(!data.el) {
			ykp.prompt('节点没有找到');
			return false;
		}

		var text = data.title.text ? data.title.text : ''
		var x = data.title.x ? data.title.x : 'center'; //默认为左边
		var option = {
			title: {
				text: text,
				bottom: 0,
				x: 'center'
			},
			tooltip: {
				trigger: 'axis'
			},
			legend: {
				data: data.Ddata
			},
			grid: {
				left: '3%',
				right: '4%',
				bottom: '15%',
				top: '5%',
				containLabel: true
			},
			toolbox: {
				feature: {
					saveAsImage: {}
				}
			},
			xAxis: {
				type: 'category',
				boundaryGap: false,
				data: data.xData
			},
			yAxis: {
				type: 'value'
			},
			series: [{
				name: data.name,
				type: 'line',
				stack: '总量',
				data: data.sData
			}]
		};
		var myChart = echarts.init(document.getElementById(data.el));
		myChart.setOption(option);
	},

	/**
	 * 柱状图
	 * @param {Object} data  参数
	 */
	drowLine: function(data) {
		if(!data.el) {
			ykp.prompt('节点没有找到');
			return false;
		}

		var text = data.title.text ? data.title.text : ''
		var x = data.title.x ? data.title.x : 'center'; //默认为左边
		var option = {
			title: {
				text: `2017年${7}月客户统计图(总结:${data.length}个)`,
				x: 'center'
			},
			tooltip: {},
			toolbox: {
				show: true,
				feature: {
					magicType: {
						type: ['line', 'bar']
					},
					saveAsImage: {}
				}
			},
			legend: {
				data: ['销量'],
				left: 0,
			},
			xAxis: {
				data: data.data
			},
			yAxis: {},
			series: [{
				name: data.yData.name,
				type: 'bar',
				data: data.yData.data,
				itemStyle: {
					normal: {
						color: '#4ad2ff'
					}
				},
			}]
		};

		var myChart = echarts.init(document.getElementById(data.el));
		myChart.setOption(option);
	},
	//弹出层错误提示
	popErrorMsg: function(msg) {
		ykp.prompt(msg);
//		$('#templateCon .msg').html(msg).fadeIn(function() {
//			setTimeout(function() {
//				$('#templateCon .msg').fadeOut();
//			}, 1000);
//		});
	},

	//弹出层验证
	popValidate: function() {
		var flag = true;
		$('#templateCon').find('.required').not(':hidden').each(function(i, e) {
			if(this.localName == 'select') {
				if(this.selectedIndex == 0) {
					cs.popErrorMsg($(this).attr('msg'));
					flag = false;
					return false;
				}
			} else if(!$(this).val().trim()) {
				cs.popErrorMsg($(this).attr('msg'));
				flag = false;
				return false;
			}
		});
		return flag;
	},
	//客户详情
	customerDetail: function() {
		//显示 客户详情弹出层 
		$('.customerDetail').unbind('click').click(function() {
			showMark('.popup_detail');
			var id = $(this).parent().attr('data-cid');
			$('#templateBox').find('#custom_id').attr('data-id', id);
			//			var divss = $('#templateCon .tab_kind .active').attr('href').substring(1);
			//			$('#showBox #' + divss).show();
			//
			//			//切换选项
			//			$('#showBox .tab_kind a').click(function() {
			//				if($(this).hasClass('active')) {
			//					return;
			//				}
			//				$(this).addClass('active').siblings().removeClass('active');
			//				divss = $(this).attr('href').substring(1);
			//				$('#showBox #' + divss).show().siblings().hide();
			//				$('#showBox>div')[0].scrollIntoView(false);
			//			});

			//			//客户详情弹出层选择 添加客户标签
			//			$('#showBox .addCustomerLabel').click(function() {
			//				$('.label_popup').fadeIn();
			//			});

			//客户详情弹出层选择 编辑
			$('#showBox .editLabel').click(function() {
				showMark('.edit_popup');

				//点击编辑客户信息返回  返回客户详情
				$('#templateCon .back_to_detail').click(function() {
					$('.customerDetail').click();
				});

				$('#showBox .edit_sure').click(function() {
					$('.customerDetail').click();
				});
			});
		});

		//关闭客户标签弹出层
		$('.label_popup .close_label,.label_popup .hold').click(function() {
			$('.label_popup').fadeOut();
		});
	},

	getChart: function(type, status, data) {
		//		var url = status == true ? '/api/api_service/bs_assistant_list' : '/api/api_service/assistant_list';
		var url = status == true ? '/api/api_service/bs_assistant_list_new' : '/api/api_service/assistant_list_new';

		if(!data) {
			var data = status == true ? {} : {
				type: type
			};
		} else {
			var data = data
		}

		ykp.loadJs('/resource/adimin/components/_mod/easypiechart/jquery.easypiechart.js');
		ykp.doAjax({
			url: url,
			method: 'POST',
			data: data,
			success: function(res) {
				var data = {};
				if(res.data.length == 0) return ;
				if(status) {
					data['invoice'] = res.data['本月发票认证'];
					data['invoice']['complete'] = data['invoice']['done'];
					data['invoice']['total'] = data['invoice']['all'];
					data['state_tax'] = res.data['本月国税申报'];
					data['state_tax']['complete'] = data['state_tax']['done'];
					data['state_tax']['total'] = data['state_tax']['all'];
					data['local_tax'] = res.data['本月地税申报'];
					data['local_tax']['complete'] = data['local_tax']['done'];
					data['local_tax']['total'] = data['local_tax']['all'];
					data['gs'] = res.data['本月工商申报'];
					data['gs']['complete'] = data['gs']['done'];
					data['gs']['total'] = data['gs']['all'];
					data['sw'] = res.data['本月税务申报'];
					data['sw']['complete'] = data['sw']['done'];
					data['sw']['total'] = data['sw']['all'];
					cs.changeChart(data, status);
				} else {
					data['assistants'] = res.data['目标'];
					data['assistants']['complete'] = data['assistants']['done'];
					data['assistants']['total'] = data['assistants']['all'];
					data['assistants']['mubiao'] = data['assistants']['mubiao'];
					data['months'] = res.data['本月新增'];
					data['months']['complete'] = data['months']['done'];
					data['months']['total'] = data['months']['all'];
					data['history'] = res.data['历史积压'];
					data['history']['complete'] = data['history']['done'];
					data['history']['total'] = data['history']['all'];
					data['total'] = res.data['累计任务'];
					data['total']['complete'] = data['total']['done'];
					data['total']['total'] = data['total']['all'];
					cs.changeChart(data, status);

				}

				//				cs.changeChart(res.data, status);
			}
		})
	},
	//获取员工

	/**
	 * 
	 * @param {String} el   节点id
	 * @param {String} director   默认选中项
	 * @param {String} el1    部门节点
	 */
	getEmple: function(el, director, el1) {
		ykp.doAjax({
			url: "/api/api_employees/grid",
			method: "post",
			data: {
				page: 1,
				limit: 999
			},
			success: function(res) {
				if(res.data.item == "") {
					ykp.prompt("暂无员工");
					return false;
				} else {
					var data = res.data.items;
					var content = [];
					var department = '';
					for(var i in data) {
						if(el1) {
							if(director == data[i]['bmm_employees.id']) {
								$(el1).val(data[i]['bmm_department.name']).attr('department-id', data[i]['bmm_department.id']);
							}
						}
						if(data[i]['bmm_employees.name']) {
							content.push('<option department-id="' + data[i]['bmm_department.id'] + '" department="' + data[i]['bmm_department.name'] + '" value="' + data[i]['bmm_employees.id'] + '">' + data[i]['bmm_employees.name'] + '</option>');
						}
					}
					$(el).append(content.join(''));
					if(director) {
						$(el + ' option[value=' + director + ']').attr('selected', true);
					}
				}

			}
		})
	},

	getElem1: function() {
		var name = [];
		var emploArr = {};
		ykp.doAjax({
			url: "/api/api_employees/grid",
			method: "post",
			data: {
				limit: 999,
			},
			success: function(res) {
				/*var data = res.data.items;
				for(var i in data) {
					name.push({
						name: data[i]['bmm_employees.name'],
						id: data[i]['bmm_employees.id']
					})
					emploArr[data[i]['bmm_employees.id']] = data[i]['bmm_employees.name']
				}
				ykp.setCookie("employArr", JSON.stringify(name));
				ykp.setCookie("employArr1", JSON.stringify(emploArr));*/
			}
		})
	},
	getElem2: function(el, id) {
		var bmm_employees = [];
		ykp.doAjax({
			url: "/api/api_employees/grid",
			method: "post",
			data: {
				limit: 999,
			},
			success: function(res) {
				var data = res.data.items;
				for(var i in data) {
					if(data[i]['bmm_employees.name']) {
						bmm_employees.push('<option value="' + data[i]['bmm_employees.id'] + '">' + data[i]['bmm_employees.name'] + '</option>');
					}
				}
				$(el).append(bmm_employees.join(''));
				if(id) {
					$(el + ' option[value=' + id + ']').attr('selected', true);
					$(el).val(id).trigger('change');
				}
			}
		})
	},
	getElemName: function(data, uid) {
		var name = [];
		for(var i in data) {
			if(data[i]['bmm_employees.cid'] == uid) {
				name = data[i]['bmm_employees.name'];
				return false;
			}
		}
		//		ykp.doAjax({
		//			url: "/api/api_employees/grid",
		//			method: "post",
		//			data: {
		//				limit: 999,
		//			},
		//			success: function(res) {
		//				var data = res.data.items;
		//				
		//			}
		//		})
		return name;
	},
	/**
	 * 
	 * @param {Object} peoId  员工id
	 */
	getUserName: function(peoId) {
		var name = JSON.parse(ykp.getCookie("employArr", name));
		for(var i in name) {
			if(peoId == name[i].id) {
				return name[i].name;
			}
		}
	},
	//获取上级部门

	/**
	 * 
	 * @param {String} el   节点id
	 * @param {String} id   默认选中项
	 */
	getParentPart: function(el, id) {
		ykp.doAjax({
			url: "/api/api_department/index",
			method: "post",
			data: {
				limit: 999,
				filter: 'bmm_department.is_del = 0 and bmm_department.parent = 0'
			},
			success: function(res) {
				if(res.data.item == "") {
					ykp.prompt("暂无部门");
					return false;
				} else {
					var data = res.data.items;
					var content = [];
					for(var i in data) {
						content.push('<option value="' + data[i]['bmm_department.id'] + '">' + data[i]['bmm_department.name'] + '</option>');
					}
					$(el).append(content.join(''));
					if(id) {
						$(el + ' option[value=' + id + ']').attr('selected', true);
					}
				}

			}
		})
	},

	//获取公司   和员工
	/**
	 * 
	 * @param {String} el   节点id
	 * @param {String} id   默认选中项
	 */
	get_cus: function(el, id) {
		var customers = [];
		ykp.doAjax({
			url: '/api/api_customer/get_customer',
			method: 'post',
			data: {
				type: 1
			},
			success: function(res) {
				$(el).select2({
					allowClear: true
				})
				var data = res.data;
				for(var i in data) {
					customers.push('<option value="' + data[i]['khm_customer.id'] + '">' + data[i]['khm_customer.name'] + '</option>')
				}
				$(el).append(customers.join(''));
				if(id) {
					$(el + ' option[value=' + id + ']').attr('selected', true);
					$(el).val(id).trigger('change');
				}
			}
		})

	},
	get_cus1: function(el, id) {
		var customers = [];
		var customers = [];
		ykp.doAjax({
			url: '/api/api_customer/get_not_transfer',
			method: 'get',
			success: function(res) {
				$(el).select2({
					allowClear: true
				})
				var data = res.data;
				for(var i in data) {
					customers.push('<option value="' + data[i]['khm_customer.id'] + '">' + data[i]['khm_customer.name'] + '</option>')
				}
				$(el).append(customers.join(''));
				if(id) {
					$(el + ' option[value=' + id + ']').attr('selected', true);
					$(el).val(id).trigger('change');
				}
			}
		})
	},

	get_cus2: function(el, id) {
		var customers = [];
		var customers = [];
		ykp.doAjax({
			url: '/api/api_customer/f7',
			method: 'post',
			data:{
				limit:999,
				select:"khm_customer.id,khm_customer.name"
			},
			async:false,
			success: function(res) {
				$(el).select2({
					allowClear: true
				})
				var data = res.data;
				for(var i in data) {
					customers.push('<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>')
				}
				$(el).append(customers.join(''));
				if(id) {
					$(el + ' option[value=' + id + ']').attr('selected', true);
					$(el).val(id).trigger('change');
				}
			}
		})
	},

	get_cp: function(el, id) {
		var customers = [];
		ykp.doAjax({
			url: '/api/api_product/index',
			method: 'post',
			data: {
				limit: 20,
				filter: "ckm_product.type!=1"
			},
			async:false,
			success: function(res) {
				$(el).select2({
					allowClear: true
				})
				var data = res.data.items;
				for(var i in data) {
					customers.push('<option value="' + data[i]['ckm_product.id'].replace(/^[0]*/g,"") + '">' + data[i]['ckm_product.name'] + '</option>')
				}
				$(el).append(customers.join(''));
				if(id) {
					$(el + ' option[value=' + id + ']').attr('selected', true);
					$(el).val(id).trigger('change');
				}
			}
		})
	},

	get_lc: function(el, id) {
		ykp.doAjax({
			url: '/api/api_process/index',
			method: 'post',
			data: {
				limit: 20,
				filter: 'km_process =' + id
			},
			success: function(res) {
				$(el).select2({
					allowClear: true
				})
				var data = res.data.items[0]['ckm_process.status'];
				for(var i in data) {
					customers.push('<option value="' + data[i]['ckm_product.id'] + '">' + data[i]['ckm_product.name'] + '</option>')
				}
				$(el).append(customers.join(''));
				if(id) {
					$(el + ' option[value=' + id + ']').attr('selected', true);
					$(el).val(id).trigger('change');
				}
			}
		})
	},
	/**
	 * 获取页面数据
	 * @param {string} url   地址
	 * @param {Bool} state  是否玩命加载
	 * @param {Object} data  参数
	 */

	getPageContent: function(url, state, data) {
		var div = document.createElement("div");
		var html = '<div class="dataTables_processing" id="onProcess">' + '<div id="mark"></div><div class="note-success" style="padding:10px;border-radius:10px;">' + '<img  style="margin-right:10px;top:-1px;display: inline-block; position:relative" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABAElEQVQ4T6WTUVEDQRBEXysgcRAcBAUEBSABFICE4AAHHA5wACgACZGAg6Z6a44ix90FKv2ztTUzPdO9s+JIaKre9hXwWPELSR9juXMEr8B5Fb1J2theA5+Sdj3ZHMEzcFmJT0AIf06UO3sEtq+BlaSt7QWwTUfgAQhhP9F9cn4RzPlZnnSVs+k9mZTw18f5JrAd1qbrwCSRcwt0km4aQbn7DiwlRfMkbCd+0vQHhzoO42V0zM4E3b8JhoRjz7iQFJ17sL0CInMn6Wx0kWznrdeSkhxv2pnNi8nASxWe9ts4nCDLk4JmZBlmScu639UEadQw64Ht9oEk5Q+M4mgTvwDVbGURV0/HhAAAAABJRU5ErkJggg==" class="rotate"/>' + '<span style="font-size:14px;">' + '数据玩命加载中...' + '</div>' + '</div>'
		div.innerHTML = ""; //html

		//获取页面内容，改变地址栏数据
		var newUrl = '';
		var index = url.lastIndexOf('/');
		var controller = url.slice((index + 1), url.length);
		if(data && data.currentIndex != '0-0' && data.currentIndex != 'undefined') {
			newUrl = "/admin/?url=" + controller + '&i=' + data.currentIndex + '&type=' + data.liType;
		} else if(data.currentIndex == '0-0') {
			newUrl = "/admin/";
		} else {
			newUrl = "/admin/?url=" + controller;
		}

		var stateObject = {};
		var title = "";
		history.pushState(stateObject, title, newUrl);

		//判断是否有缓存数据
		var content = ykp.getLocalStorage(data.currentIndex);

		if(content) {
			$('a[data-index="' + data['currentIndex'] + '"]').click();
			return;
		}
		var Fun = function() {

		};
		if(state)
			Fun = function() {
				$('body').append(div);
			};
		$.get({
			beforeSend: Fun,
			url: url,
			success: function(res) {
				$('#contentBox').html(res);
				// var height = $(window).height();
				//$('.custom_table').css('height', '458px');
				// setCurrentLeftHeight();
				ykp.setLocalStorage(data.currentIndex, res);
				setTimeout(function() {
					$('#onProcess').parent().remove()
				}, 500);
			},
			error: function(err) {
				setTimeout(function() {
					$('#onProcess').parent().remove()
				}, 500);
			}
		});
	},

	skipPage: function(urls) {
		var index_1 = urls.indexOf('='); //第一个=位置
		var index_2 = urls.indexOf('&'); //第一个&位置
		var url_ = urls.substring(index_1 + 1, index_2);
		var index_3 = urls.substring(index_1 + 1, url_.length).indexOf('='); //第二个=位置

		var index_4 = urls.substring(index_2 + 1, url_.length).indexOf('&'); //第二个&位置
		var index_5 = urls.lastIndexOf('='); //最后一个=位置
		var data = {
			currentIndex: urls.split('&')[1].split('=')[1],
			liType: urls.split('&')[2].split('=')[1]
		}
		this.getPageContent(url_, true, data);
	},

	getTaxMonth: function(time) {
		if(time && time.indexOf("0") == 0) {
			time = time.replace(/0/, "");
		}
		var status = {
			gStatus: true, //国税申报
			dStatus: true, //地税申报
			gongStatus: false, //工商年报
			swStatus: false //税务年报
		}
		var resTime = time ? time.split('') : "";
		resTime ? resTime.splice(4, 0, "-") : "";
	//	var gStatusArr = [1, 4, 7, 10];
	   var gStatusArr = [3,6,9,12];
		//		var date = new Date().getMonth()+1;
		var date = resTime ? new Date(resTime.join('')).getMonth() + 1 : new Date().getMonth() + 1;
		(status.gongStatus = date <= 5)||(status.gongStatus = date == 12) ? true : false;
		var index = $('.kind').find('.now').index(); //一般纳税人  国税每月显示
		status.gStatus = index == 0 ? (gStatusArr.indexOf(date) != -1 ? true : false) : true;
		status.swStatus = date <= 5 ? true : false;
		return status;
	},

	changeChart: function(data, status, New) {
		if(!status) {
			if(data.length == 0) {
				$('.easy-pie-chart.percentage').each(function(i) {
					$(this).data('easyPieChart').update(0);
					$(this).find('span').text(0);
					$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(0).text('已完成：0')
					$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(1).text('未完成：0')
				});
			} else {
				var ratio = 0; //比例
				$('.easy-pie-chart.percentage').each(function(i, e) {
					if(i == 0) {
						if(data.assistants.total == 0 && data.assistants.complete == 0) {
							$(this).data('easyPieChart').update(0);
						} else if(data.assistants.total == 0 && data.assistants.complete != 0) {
							$(this).data('easyPieChart').update(100);
						} else {
							$(this).data('easyPieChart').update(data.assistants.complete / data.assistants.total * 100);
						}
						$(this).find('span').text(data.assistants.complete);
						$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(0).text('已完成：' + data.assistants.complete);
						$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(1).text('未完成：' + (data.assistants.none < 0 ? 0 : data.assistants.none));
						$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(2).text('目标：' + data.assistants.mubiao);
					} else if(i == 1) {
						if(data.months.total == 0 && data.months.complete == 0) {
							$(this).data('easyPieChart').update(0);
						} else if(data.months.total == 0 && data.months.complete != 0) {
							$(this).data('easyPieChart').update(100);
						} else {
							$(this).data('easyPieChart').update(data.months.complete / data.months.total * 100);
						}
						$(this).find('span').text(data.months.complete);
						$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(0).text('已完成：' + data.months.complete)
						$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(1).text('未完成：' + (data.months.none < 0 ? 0 : data.months.none));
					} else if(i == 2) {
						if(data.history.total == 0 && data.history.complete == 0) {
							$(this).data('easyPieChart').update(0);
						} else if(data.history.total == 0 && data.history.complete != 0) {
							$(this).data('easyPieChart').update(100);
						} else {
							$(this).data('easyPieChart').update(data.history.complete / data.history.total * 100);
						}
						$(this).find('span').text(data.history.complete);
						$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(0).text('已完成：' + data.history.complete)
						$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(1).text('未完成：' + (data.history.none < 0 ? 0 : data.history.none))
					} else {
						if(data.total.total == 0 && data.total.complete == 0) {
							$(this).data('easyPieChart').update(0);
						} else if(data.total.total == 0 && data.total.complete != 0) {
							$(this).data('easyPieChart').update(100);
						} else {
							$(this).data('easyPieChart').update(data['total']['complete'] / data['total']['total'] * 100);
						}
						$(this).find('span').text(data.total.complete);
						$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(0).text('已完成：' + data.total.complete)
						$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(1).text('未完成：' + (data.total.none < 0 ? 0 : data.total.none))
					}
				})
			}

		} else {

			if(data.length == 0) {
				$('.easy-pie-chart.percentage').each(function(i) {
					$(this).data('easyPieChart').update(0);
					$(this).find('span').text(0);
					$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(0).text('已完成：0')
					$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(1).text('未完成：0')
				});
			} else {
				if(New) {
					$('.easy-pie-chart.percentage').each(function(i) {
						if(i == 0) {
							$(this).data('easyPieChart').update(parseInt(data.state_tax.done / data.state_tax.total) * 100);
							$(this).find('span').text(data.state_tax.done);
							$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(0).text('已完成：' + data.state_tax.done)
							$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(1).text('未完成：' + Math.abs(data.state_tax.none))
						} else if(i == 1) {
							$(this).data('easyPieChart').update(parseInt(data.local_tax.done / data.local_tax.total) * 100);
							$(this).find('span').text(data.local_tax.done);
							$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(0).text('已完成：' + data.local_tax.done)
							$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(1).text('未完成：' + Math.abs(data.local_tax.none))
						} else {
							$(this).data('easyPieChart').update(parseInt(data.invoice.done / data.invoice.total) * 100);
							$(this).find('span').text(data.invoice.done);
							$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(0).text('已完成：' + data.invoice.done)
							$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(1).text('未完成：' + Math.abs(data.invoice.none))
						}
					});
				} else {
					$('.easy-pie-chart.percentage').each(function(i) {
						if(i == 0) {
							$(this).data('easyPieChart').update(parseInt(data.state_tax.complete / data.state_tax.total) * 100);
							$(this).find('span').text(data.state_tax.complete);
							$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(0).text('已完成：' + data.state_tax.complete)
							$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(1).text('未完成：' + Math.abs(data.state_tax.none))
						} else if(i == 1) {
							$(this).data('easyPieChart').update(parseInt(data.local_tax.complete / data.local_tax.total) * 100);
							$(this).find('span').text(data.local_tax.complete);
							$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(0).text('已完成：' + data.local_tax.complete)
							$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(1).text('未完成：' + Math.abs(data.local_tax.none))
						} else if(i == 2) {
							$(this).data('easyPieChart').update(parseInt(data.invoice.complete / data.invoice.total) * 100);
							$(this).find('span').text(data.invoice.complete);
							$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(0).text('已完成：' + data.invoice.complete)
							$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(1).text('未完成：' + Math.abs(data.invoice.none))
						} else if(i == 3) {
							$(this).data('easyPieChart').update(parseInt(data.gs.complete / data.gs.total) * 100);
							$(this).find('span').text(data.gs.complete);
							$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(0).text('已完成：' + data.gs.complete)
							$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(1).text('未完成：' + Math.abs(data.gs.none))
						} else {
							$(this).data('easyPieChart').update(parseInt(data.sw.complete / data.sw.total) * 100);
							$(this).find('span').text(data.sw.complete);
							$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(0).text('已完成：' + data.sw.complete)
							$(this).parents('.infobox-progress').siblings().find('.infobox-content').eq(1).text('未完成：' + Math.abs(data.sw.none))
						}
					});
				}
			}

		}
	},

	// getObjectURL: function(file) {
	// 	var url = null;
	// 	if(window.createObjectURL != undefined) { // basic
	// 		url = window.createObjectURL(file);
	// 	} else if(window.URL != undefined) {
	// 		// mozilla(firefox)
	// 		url = window.URL.createObjectURL(file);
	// 	} else if(window.webkitURL != undefined) {
	// 		// webkit or chrome
	// 		url = window.webkitURL.createObjectURL(file);
	// 	}
	// 	return url;
	// },
	imgResize: function(el, callback) {
		$(el).localResizeIMG({
			quality: 2,
			success: function(result) {
				cs.uploadImg(result, function(res) {
					if($.isFunction(callback)) {
						callback(res)
					}
				})
			}
		});
	},
	uploadImg: function(data, callback) {
        ykp.doAjax({
			url: '/api/api_common/upload_img',
			method: 'post',
			data: {
				dir: 'uploadImg',
				name: data.name,
				base64: data.clearBase64
			},
			success: function(res) {
				if($.isFunction(callback)) {
                    res.data["name"] = data.name
                    callback(res)
				}
			}
		})
	},
	//	uploadImg: function(data, callback) {
	//		ykp.doAjax({
	//			url: '/api/api_common/upload_img',
	//			method: 'post',
	//			data: {
	//				dir: 'uploadImg',
	//				name: data.name,
	//				base64: data.clearBase64
	//			},
	//			success: function(res) {
	//				if($.isFunction(callback)) {
	//					callback(res)
	//				}
	//			}
	//		})
	//	},
	checkAll: function(status) {
		$("tbody input[name='check']").each(function(i, n) {
			n.checked = status;
		});
	},
	rest: function(status, element) {
		var el = status ? '#rest1' : '#rest';
		$(el).click(function() {
            $(element).find('input').val('');
			$(element).find('[gjs=0],[gjs=1],[gjs=5],[gjs=7],[gjs=8]').val('');
			$(element).find('[gjs=0],[gjs=2],[gjs=3],[gjs=4],[gjs=6],[gjs=7],[gjs=1],.advandced-search').val('').trigger('change');
		})
	},
	_print: function(el) {
		$(el).click(function() {
			var bdhtml = window.document.body.innerHTML;
			var sprnstr = "<!--startprint-->";
			var eprnstr = "<!--endprint-->";
			var prnhtml = bdhtml.substr(bdhtml.indexOf(sprnstr) + 17);
			prnhtml = prnhtml.substring(0, prnhtml.indexOf(eprnstr));
			var myWindow = window.open();
			myWindow.document.write(prnhtml);
			// window.document.body.innerHTML = prnhtml;
			myWindow.print();
		});
	},
	/**
	 * 主体内容权限样式设置
	 * @param {array} nodes 权限值
	 * @param {boolean} statu 是否审批
	 */
	getNodes: function(nodes, statu) {
		if(!ykp.getCookie('nodes')) {
			return false;
		}
		var _nodes = ykp.getCookie('nodes').split(',');
		for(var i in nodes) {
			if($.inArray('' + nodes[i], _nodes) != -1) {
				if(statu) {
					return true;
				}
				$('div[contentAuthority="' + nodes[i] + '"],span[contentAuthority="' + nodes[i] + '"],button[contentAuthority="' + nodes[i] + '"]').css('display', 'inline-block');
				//$('[contentAuthority="' + nodes[i] + '"]').css('display', 'inline-block');
			} else {
				$('[contentAuthority="' + nodes[i] + '"]').remove();
			}
			if(statu) {
				return false;
			}
		}
	},
	/**
	 * 审批权限样式设置
	 * 1.判断是否启用审批
	 * 2.判断是否拥有权限或者是否是审批人
	 */
	approve_authority: function(obj) {
		//可以审批则为true,不能审批为false
		var flag = cs.getSpStatus(obj['name']);
		if(flag) {
			//是否具有审批权限
			var flag_1 = cs.getNodes(obj.nodes, true);

			//是否是审批人
			var spList = JSON.parse(ykp.getCookie('spList'));
			var spList_user = spList[obj.name]['user'].split(',');
			var flag_2 = $.inArray(ykp.getCookie('uid'), spList_user) == -1 ? false : true;

			flag = flag_1 || flag_2;
		}

		return flag;
	},

	//获取审批开关功能 
	/**
	 * @param {String} name   审批页面 
	 */
	getSpStatus: function(name) {
		var spList = ykp.getCookie('spList');
		var _spList = JSON.parse(spList);

		var status = false;
		if(_spList[name]) {
			if(_spList[name]['status'] == 1) {
				status = true;
			}
		}

		return status;
	},
	getRemark: function(data) {
		var msg = [];
		if(!data || data.length == 0) {
			return "没有备注"
		}
		for(var i in data) {
			msg.push((parseInt(i) + 1) + "、" + data[i]['remark']);
		}
		return msg.join('<br/>');
	},

	//通用排序
	//默认
	general_sort: function(obj, callback, default_obj) {
        var title = "";
		var postData = $.extend({}, obj);
		for(var i = 0; i < obj.params.length; i++) {
			for(var j = 0; j < obj.params[i].field.length; j++) {
				if(obj.params[i].field[j]) {
					title = $(obj.params[i].id).find('th').eq(j).text();				
					$(obj.params[i].id).find('th').eq(j).html(`
						<span>${title}</span>
						<span class="table-sort" field="${obj.params[i].field[j]}">
							<i class="edge table-sort-asc" sort="asc"></i>
							<i class="edge table-sort-desc" sort="desc"></i>
						</span>`);
					//初始化 排序条件
					if(obj.initOrder && obj.params[i].field[j] == obj.initOrder) {
						postData['data']['order'] = obj.initOrder + ' desc';
						$(obj.params[i].id).find('th').eq(j).find('.edge').eq(1).addClass('sorted');			
					}
				}
			}
		}
		//点击标题时
		$('thead th').find('span').not('.lbl').unbind('click').click(function() {

            if(!$(this).hasClass("table-sort")) {
				var iBtn = $(this).parent().find('.edge');
				$(this).parent().siblings().find('.edge').removeClass('sorted');
				var sort1 = $(iBtn[0]);
				var sort2 = $(iBtn[1]);
				if(!sort1.hasClass('sorted') && !sort2.hasClass('sorted')) {
					sort1.addClass('sorted');
				} else if(sort1.hasClass('sorted') && !sort2.hasClass('sorted')) {
					sort1.removeClass('sorted');
					sort2.addClass('sorted');
				} else if(!sort1.hasClass('sorted') && sort2.hasClass('sorted')) {
					sort2.removeClass('sorted');
				}
				var postData = $.extend({}, obj);
				if(iBtn) { //有排序标识时
					iBtn.each(function(index) {					
						if($(this).hasClass('sorted')) {
							postData['data']['order'] = $(this).parent().attr('field') + ' ' + $(this).attr('sort');
							return false;
						} else {
							postData['data']['order'] = obj.defaultOrder + '';
						}
					})
				}
                var page_size = $("#changePageNum").val() || 10;
                var data = $.extend({},JSON.parse(ykp.getCookie('filterData')),{
					filter: ykp.getCookie('filter') || postData['data']['filter'],
					//limit: postData['data'].pagesize || page_size,
					limit: page_size,
					page_size: page_size,
					type: postData['data'].type || "",
					order: postData['data']['order'],
					where: ykp.getCookie('where') || "",
					page: ykp.getCookie('page_no') || 1,
				});
                if(ykp.getCookie('month2')) {
					data.month2 = ykp.getCookie('month2')
				}
				if(obj.check) {
					obj.contentId = $('.kind').find('.now').index() == 0 ? "#dataList" : "#dataList1";
					var ctype = $('.kind').find('.now').index() == 0 ? 2 : 1;
					if(data.where.indexOf('khm_customer.tax_type=') == -1) data.where = data.where + "khm_customer.tax_type=" + ctype;
				}
                ykp.list({
					url: postData['url'],
					method: postData['method'],
					data: data,
					pageBar: postData['pageBar'],
					loadList: function(res) {
						if(res.data.items == "") {
							setTimeout(function() {
								ykp.prompt('暂无数据！');
							}, 1000);
							$(obj.contentId).html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');
							return false;
						}

						if(callback && typeof(callback) === 'function') {
							ykp.setCookie("order",postData['data']['order']);
							callback(res, postData['data']['order']);
						}
					}
				});

			}
		});

		$('.edge').unbind('click').click(function(event) {
			var postData = $.extend({}, obj);
			if($(this).hasClass('sorted')) {
				postData['data']['order'] = postData['data']['order'] = obj.defaultOrder + '';;
				$('.edge').removeClass('sorted');
			} else {
				$('.edge').removeClass('sorted');
				$(this).addClass('sorted');
				postData['data']['order'] = $(this).parent().attr('field') + ' ' + $(this).attr('sort');

			}
			var page_size = $("#changePageNum").val()  || 10;
            var data = $.extend({},JSON.parse(ykp.getCookie('filterData')),{
				filter: ykp.getCookie('filter') || postData['data']['filter'],
				limit: page_size,
				page_size: page_size,
				type: postData['data'].type || "",
				order: postData['data']['order'],
				where: ykp.getCookie('where') || "",
				page: ykp.getCookie('page_no') || 1,
			});
            if(ykp.getCookie('month2')) {
				data.month2 = ykp.getCookie('month2');
			}
			if(obj.check) {
				obj.contentId = $('.kind').find('.now').index() == 0 ? "#dataList" : "#dataList1";
				var ctype = $('.kind').find('.now').index() == 0 ? 2 : 1;
				if(data.where.indexOf('khm_customer.tax_type=') == -1) data.where = data.where + "khm_customer.tax_type=" + ctype;
			}

			ykp.list({
				url: postData['url'],
				method: postData['method'],
				data: data,
				pageBar: postData['pageBar'],
				loadList: function(res) {
					if(res.data.items == "") {
						setTimeout(function() {
							ykp.prompt('暂无数据！');
						}, 1000);
						$(obj.contentId).html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');
						return false;
					}
					if(callback && typeof(callback) === 'function') {
						callback(res, postData['data']['order']);
					}
				}
			});

		});

		$('#changePageNum').change(function() {
			obj.data.pagesize = $(this).val();
			obj.data.rows = $(this).val();
			obj.data.page_size = $(this).val();
		})
	},
	//高级搜索显示 与 隐藏
	showHeightSearch: function(el1, el2) {
		//高级搜索
		$('.in').click(function() {
			if($(el1).hasClass('active')) {
				$(el1).removeClass('active').css('z-index', '');
				$(el2).slideUp();
			}
		});

		cs.getyearList(el2);
		//触发高级搜索点击事件
		clickSearch();

		function clickSearch() {
			$(el1).unbind('click').click(function() {
				$(this).off('click');
				if($(this).hasClass('active')) {
					$('.in').removeClass('modal-backdrop');
					$(this).removeClass('active').css('z-index', '');
					$(el2).slideUp(function() {
						clickSearch();
					});

				} else {
					$('.in').addClass('modal-backdrop');
					$(el2).slideDown(function() {
						clickSearch();
					});
					$(this).attr('class', 'btn btn-info btn-sm active').css('z-index', '1041');
					if(el2.indexOf('_') != -1) {
						cs.rest(true, el2);
					} else {
						cs.rest(false, el2);
					}
					/*if($('#heightsearch .cw')) {
						cs.getAllCw(function(option) {
							$('#heightsearch1 .cw').html(option);
							$('#heightsearch1 .cw').select2({
								allowClear: true
							})
						})
					}*/
				}
				setTimeout(function() {
					$('.select2-search__field').unbind('input').on('input', function() {
						$(this).val($(this).val().trim()).trigger('change')
					})
				}, 1000);
			})
		}
	},
	//侧边栏 权限样式设置
	authority: function() {
		if(!ykp.getCookie('nodes')) {
			return;
		}
		var nodes = ykp.getCookie('nodes').split(',');

		$('[authority]').each(function(i, e) {
			if($.inArray($(this).attr('authority'), nodes) == -1) {
				$(this).remove();
				return true;
			}
			$(this).show();
		});

		// for(var i in nodes){
		// 	$('[authority='+ nodes[i] +']').show();
		// }

		var num = 0;
		$('.menuB,.miniLi').each(function(i, e) {
			$(e).find('.authority').each(function(index, element) {
				if($(element).css('display') != 'none') {
					num++;
					return false;
				}
			});

			if(num > 0) {
				if($(e).hasClass('miniLi')) {
					$(e).css('display', 'flex');
				}
				$(e).show();
				num = 0;
			}
		});
	},
	//layui上传文件
	upload: function(option) {
		layui.use('upload', function() {
			var upload = layui.upload;
			var name = "";
			upload.render({
				elem: option.el, //绑定元素
				url: ykp.api_url + '/api/api_common/upload_file', //上传接口
				choose: function(obj) {
				},
				accept: 'file', //普通文件
				before: function(obj) {
					obj.preview(function(index, file, result) {
						name = file.name;
					})
				},
				done: function(res) {
					//上传完毕回调
					if(typeof option.callback == 'function') {
						option.callback(res.data, name);
					}
				},
				error: function() {
					//请求异常回调
				}
			});
		})
	},

	//layui可复用上传文件
	upload1: function(option) {
		layui.use('upload', function() {
			var upload = layui.upload;
			var name = "";
			upload.render({
				elem: option.el //绑定元素
					,
				url: ykp.api_url + '/api/api_common/upload_file', //上传接口
				choose: function(obj) {
				},
				accept: 'file', //普通文件
				before: function(obj) {
					obj.preview(function(index, file, result) {
						name = file.name;
					})
				},
				done: function(res) {
					//上传完毕回调
					var index = '';
					if(option.tab) {
						$('.statistics_tit').find('li').each(function() {
							if($(this).hasClass('acti')) {
								index = $(this).index();
							}
						})
						$('.contractType').eq(index).find(option.ael).append('<p style="padding-left: 2px;"><a data-url="' + res.data + '">' + name + '</a><i style="color: red; margin-left: 20px;cursor: pointer;" class="ace-icon fa fa-trash-o gdel gdel2"></i></p>');
					} else {
						$(option.ael).append('<p style="padding-left: 2px;"><a href="' + res.data + '" data-url="' + res.data + '" target= _blank >' + name + '</a><i style="color: red; margin-left: 20px;cursor: pointer;" class="ace-icon fa fa-trash-o gdel gdel2"></i></p>')
					}
					/*$(option.ael).find('a').click(function() {
						var name = $(this).text();
						var url = $(this).attr('data-url');
						//window.open(ykp.api_url + "/api/api_common/update_file_name?file_url=" + url + "&name=" + name)
					})*/
					$(option.ael + ' .gdel2').click(function() {
						$(this).parent().remove();
					})

					if(typeof option.callback == 'function') {
						option.callback(res.data, name);

					}
				},
				error: function() {
					//请求异常回调
				}
			});
		})
	},

	//切换支付方式，获取对应的账户信息
	//支付方式节点 ele1
	//账户信息节点 ele2
	changePayWayGetAccounts: function(ele1, ele2) {
		$(ele1).next().hide();
		$(ele1).next().next().hide();
		ele1.unbind('change').change(function() {
			//清空账户信息
			ele2.find('option').not(':first').remove();

			//支付方式
			var pay_way = $(this).val();
			if(pay_way == 1 || !pay_way) { //如果支付方式不存在，则返回
				$(this).next().hide();
				$(this).next().next().hide();
				return;
			} else {
				$(this).next().show();
				$(this).next().next().show();
			}

			ykp.doAjax({
				showBlock: true,
				url: '/api/api_bank/f7',
				method: 'post',
				data: {
					filter: 'xtm_kh_bank.type = ' + pay_way,
					select: 'xtm_kh_bank.bank_name,xtm_kh_bank.id'
				},
				success: function(res) {
					var data = res.data;
					//账户信息html
					var accounts_html = [];
					for(var i in data) {
						accounts_html.push('<option value="' + data[i]['id'] + '">' + data[i]['bank_name'] + '</option>');
					}
					ele2.append(accounts_html.join(''));
				}
			});

		});
	},

	tableheader: function() {
		var custom_table = $('.custom_table');
		$('.custom_table').css('max-height', '700px');
		//		$('.custom_table table').css('max-height','500px');
		//		custom_table.css('max-height','500px');
		//		var nav = $('.custom_table thead');
		//		var html = $('.custom_table table thead').html();
		////		html.addClass('table-header');
		//		var num = 0;
		//		$(custom_table).scroll(function() {
		//			if($(custom_table).scrollTop() > 35) {
		//				if(num == 0) {
		//					$('.custom_table').append(html);
		//					$(html).addClass('table-header');
		//					num++;
		//				}
		//			} else {
		//				$('.custom_table').remove('.table-header');
		////				nav.removeClass("table-header");
		//			}
		//		})
	},

	sc: function(type, callback) {
		$('.sc').click(function() {
			var customer_id = $(this).parents('tr').attr('cid') || $(this).parents('td').attr('data-cid').trim();
            var relation = $(this).attr('relation') == 0 ? 1 : 0;
			ykp.doAjax({
				url: "/api/api_contract/attention",
				method: "post",
				data: {
					process: type || "记账",
					customer_id:parseInt(customer_id),
					relation: relation
				},
				success: function(res) {
					if(typeof callback == 'function') {
						callback(res)
					}
				}
			})
		})
	},
	exportFile: function(param) {
		$('.exportfile').unbind('click').click(function() {
			if(param.url) {
				ykp.doAjax({
					url: param.url || " /api/api_task/export",
					method: "post",
					data: {
						title: param.title || "任务",
						type:param.type
					},
					success: function(res) {
						window.open(res.data)
					}
				})
			}
		})
	}
}

function Month(month, ftype) {
	var result = "";
	var El = ftype == 2 ? '#dynamic-table1' : '#dynamic-table2';
	$(El + ' .thColor .month').each(function(i, e) {
		if(month == $(this).text()) {
			result = i;
			return false;
		}
	})
	return result;
}

function changeTwoDecimal_f(x) {　　
	var f_x = parseFloat(x);　　
	if(isNaN(f_x))　　 {　　　　
		return 0;　　
	}　　
	var f_x = Math.round(x * 100) / 100;　　
	var s_x = f_x.toString();　　
	var pos_decimal = s_x.indexOf('.');　　
	if(pos_decimal < 0)　　 {　　　　
		pos_decimal = s_x.length;　　
		s_x += '.';　　
	}　　
	while(s_x.length <= pos_decimal + 2)　　 {　　　　
		s_x += '0';　　
	}　　
	return s_x;
}
//全选函数
function checkAll(status) {
	$("tbody input[name='check']").each(function(i, n) {
		n.checked = status;
	});
}
$('#changePageNum').change(function() {
	$("thead input[type='checkbox']").each(function(i, n) {
		n.checked = false;
	});
});

$('input,textarea').change(function() {
	if($(this).attr('type') != 'file'){
		$(this).val($(this).val().trim());
	}
});
$('input').mouseout(function (){
	if($(this).attr('type') != 'file'){
		$(this).val($(this).val().trim());
	}
});

//缩略图方式上传图片
function uploadsmallimg() {
        $('#templateCon .uploadFiles').unbind('click').click(function() {
             var it = this;
             cs.imgResize(it, function(res) {
                 var data = res.data;
                 //如果点击的是图片则是替换操作
                 if($(it).hasClass('instead')) {
                     $(it).next().attr('src', data['url']);
                     return;
                 }
                 if($('#templateCon #imgBox img').length >= 4) {
                     $('#templateCon #imgBox').find('label:last').hide();
                 }

                 var img_html =
                     '<label style="float:left;margin-right:10px;position: relative;">' +
                     '<i class="fa fa-remove pic-close" style="position: absolute;color: #fff;top: 2px;right: 2px;"></i>' +
                     //'<input type="file" class="uploadFiles instead" style="position:absolute;left:-9999px;opacity: 0;" />'+
                     '<img name="' + data['name'] + '" class="image" src="' + data['url'] + '" style="height:70px;width:70px;">' +
                     '</label>';

                 $('#templateCon #imgBox').prepend(img_html);
                 click();
                 uploadsmallimg();
                 $('.fa-remove').unbind().click(function() {
                     $(this).parent().remove();
                     if($('#templateCon #imgBox img').length < 5) {
                         $('#templateCon #imgBox').find('label:last').show();
                     }
                 })
             });
        });
        click();
    	function click() {
            $('#templateBox ').find('.image').unbind('click').click(function () {
                var src = $(this).attr('src');
                if (src == '/resource/adimin/assets/images/avatar.png' || src == "") {
                    ykp.prompt('没有图片');
                    return false;
                }
                $('#templateCon [addfield="username"]').prop('disabled', true);
                layui.use('layer', function () {
                    var lsyer = layui.layer;
                    layer.open({
                        type: 1,
                        title: "图片详情",
                        skin: 'layer-pic-box', //加上边框
                        area: ['500px', '500px'], //宽高
                        content: '<div style="margin: auto; margin-top: 11px;"><img class="img" data-url="' + src + '" src="' + src + '"  style="display: inline-block;object-fit: cover;width: 100%;"></div>'
                    })
                    $('.layui-layer-content').find('.img').click(function () {
                        var name = $(this).text();
                        var url = $(this).attr('data-url');
                        window.open(ykp.api_url + "/api/api_common/update_file_name?file_url=" + url + "&name=" + name)
                    })
                })
                $('#templateCon [addfield="username"]').prop('disabled', false);
            })
        }
}
