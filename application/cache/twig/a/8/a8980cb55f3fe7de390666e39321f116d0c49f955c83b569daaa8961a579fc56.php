<?php

/* admin/clientManage/contactRecord.html */
class __TwigTemplate_8bb8baddd01d3a4ebd781f3b2f8597a37f5f9d064d23c1244bfadd707c117429 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<style type=\"text/css\">
    #templateCon label{
        width:60px;
    }
\t#templateBox input{height:30px;width:180px;padding-left:5px;}
</style>

<div class=\" widget-main\">
    <div class=\"row\">
        <!-- <h3 class=\"header smaller lighter blue\">联系记录</h3> -->
        <div class=\"row\" style=\"margin-top: 20px;position:relative;\" id=\"topTool\">
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <select  style=\"margin:12px !important;width: 180px\" id=\"employees\" sear=\"khm_contact_log.create_user\" pts=3 class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\" >
                    <option value=\"\">创建人</option>
                </select>
            </div>
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <input type=\"text\" pts=0 id=\"\" sear=\"khm_customer.name\" placeholder=\"企业名称\" class=\"kh_name\" />
            </div>
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <button type=\"button\" id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
                    <i class=\"fa fa-search\"></i>
                </button>
            </div>
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <button id=\"heightsearch\" type=\"button\" title=\"高级搜索\" class=\"btn btn-info btn-sm\" style=\"background-color:#00c0ef !important;\">
                    <i class=\"fa fa-filter\"></i>
                </button>
            </div>
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32    !important;\">
                    <i class=\"fa fa-refresh\"></i>
                </button>
            </div>
            <div class=\"col-sx-4\" contentAuthority=\"119\" style=\" float: left;margin-right: 5px;\">
                  <button type=\"button\" id=\"addItem\" title=\"添加\" style=\"outline: none;background:#32CD32 !important;border-color: #32CD32!important;\"
                    class=\"btn addBtn btn-info btn-sm position-relative\">
                        <i class=\"fa fa-plus\"></i>
                    </button> 
            </div>
            <div class=\"col-sx-4\" contentAuthority=\"302\" style=\" float: left; margin-right: 5px;\">
                <button type=\"button\"  title=\"导出\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"exportfile moveToClue btn addBtn btn-info btn-sm position-relative\">
                    <i class=\"fa fa-sign-out\"></i>
                </button>
            </div>

            <!--高级搜索-->
            <div id=\"heightsearch1\" class=\"col-sx-12\" style=\"margin-top:30px;position: absolute; background: #fff; z-index: 1041;padding: 20px 10px; display: none;\">
                <div class=\"row\">
                    <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                        <label>企业名称</label>
                        <select>
                            <option> = </option>
                        </select>
                        <input type=\"text\" gjs=0 sear=\"khm_customer.name\" />
                    </div>
                    <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                        <label>创建人</label>
                        <select>
                            <option> = </option>
                        </select>
                        <select style=\"margin:12px !important;width: 180px\" sear=\"khm_contact_log.create_user\" gjs=\"3\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
                            <option value=\"\">请选择</option>
                        </select>
                    </div>
                    <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                        <label>联系时间</label>
                        <select>
                            <option> = </option>
                            <option> > </option>
                            <option> &lt; </option>
                        </select>
                        <div class=\"input-group\"  style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\"  data-status=\"rangtime\" gjs=0 sear=\"khm_contact_log.log_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t</div>
                       <!-- <div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
                        <input id=\"date-timepicker1\" class=\"date-timepicker1\" data-type=\"gj\" data-status=\"time\" gjs=\"0\" sear=\"khm_contact_log.log_time\" style=\"height: 30px;width: 150px;\">
                        <span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                        </span>
                    </div>-->
                    </div>
                    <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                        <label>联系内容</label>
                        <select>
                            <option> = </option>
                        </select>
                        <input type=\"text\" gjs=0 sear=\"khm_contact_log.contact_msg\">
                    </div>
                    <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                        <label>联系途径</label>
                        <select>
                            <option> = </option>
                        </select>
                        <select gjs=0 data-type=\"gj\" sear=\"khm_contact_log.contact_way\" style=\"width:180px;\">
                            <option value=\"\">请选择</option>
                            <option value=\"1\">电话</option>
                            <option value=\"2\">微信</option>
                            <option value=\"3\">QQ</option>
                            <option value=\"4\">邮箱</option>
                            <option value=\"5\">上门</option>
                            <option value=\"6\">短信</option>
                        </select>
                    </div>
                    <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                        <label>联系类型</label>
                        <select>
                            <option> = </option>
                        </select>
                        <select gjs=0 data-type=\"gj\" sear=\"khm_contact_log.contact_type\" style=\"width:180px;\">
                            <option value=\"\">请选择</option>
                            <option value=\"1\">售后</option>
                            <option value=\"2\">投诉</option>
                            <option value=\"3\">收款</option>
                            <option value=\"4\">线索</option>
                            <option value=\"5\">商机</option>
                            <option value=\"6\">拜访</option>
                        </select>
                    </div>
                    <div class=\"col-sx-4\" style=\"clear:both;padding-top:10px;text-align:center;\">
                        <button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
                        查询
                    </button>
                        <button type=\"button\" id=\"rest\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
                           重置
                        </button>
                    </div>
                </div>
            </div> 
        </div>
    </div>
                <div class=\"custom_table\">
                    <table id=\"dynamic-table\">
                        <thead>
                        <tr class=\"thColor\">
                        \t<th class=\"hidden-480 center\">操作</th>
                            <th data-num=\"1\">企业名称</th>
                            <th data-num=\"2\">创建人</th>
                            <th data-num=\"3\" class=\"hidden-480\">联系时间</th>
                            <th data-num=\"4\" class=\"hidden-480\">联系内容</th>
                            <th data-num=\"5\" class=\"hidden-480\">联系途径</th>
                            <th data-num=\"6\" class=\"hidden-480\">联系类型</th>
                            
                        </tr>
                        </thead>

                        <tbody id=\"dynamic-table_data\">
                            <!-- <tr>
                                <td data-num=\"1\">
                                    <a href=\"#\">深圳税脉网络财务有限公司θ</a>
                                </td>
                                <td data-num=\"2\">
                                    李四
                                </td>
                                <td data-num=\"3\" class=\"\">2017-8-19</td>
                                <td data-num=\"4\">

                                </td>
                                <td data-num=\"5\"> 电话</td>
                                <td data-num=\"6\">售后服务</td>
                                <td class=\"center\">
                                    <label class=\"pos-rel\">
                                        <a> <span style=\"cursor: pointer\" id=\"recordEdit\" class=\"lbl\">编辑&nbsp</span></a>|
                                        <a> <span style=\"cursor: pointer\" class=\"lbl red\">&nbsp删除</span></a>
                                    </label>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
                <div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
                    <div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" id=\"num\"></div>
                    <!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
                    <div id=\"pageBar\" class=\"pagination\"></div>
                    <div align=\"right\" style=\"float: right;  width: 10%;\">
                        <select style=\"width: 100px;\" id=\"changePageNum\">
                            <option value=\"10\">每页10条</option>
                            <option value=\"20\">每页20条</option>
                            <option value=\"50\">每页50条</option>
                            <option value=\"100\">每页100条</option>
                            <option value=\"200\">每页200条</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class=\"row\" id=\"template\" style=\"display:none;\">
                
                <div style=\"margin-top:15px;\">
                        <label> 企业名称： </label>
                        <select  id=\"customer_name\" field=\"customer_id\" style=\"width: 180px;\">
\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t</select>
                        <!-- <label style=\"margin-left:10px;\"> 联系人： </label>
                        <input class=\"required\" field=\"contact_user\" msg=\"联系人不能为空\"> -->
                </div>
                <div style=\"margin-top:15px;\">
                        <label> 联系时间： </label>
                        <div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
                            <input class=\"date-timepicker1 required\" msg=\"联系时间不能为空\" field=\"log_time\" style=\"height: 30px; width: 150px;\">
                            <span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                                <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                            </span>
                        </div>
                        <label style=\"margin-left:10px;\"> 联系内容： </label>
                        <input class=\"required\" field=\"contact_msg\" msg=\"联系内容不能为空\" placeholder=\"\">
                </div>
                <div style=\"margin-top:15px;\">
                        <label> 联系途径： </label>
                        <!--<input class=\"required\" msg=\"联系途径不能为空\">-->
                         <select class=\"required\" field=\"contact_way\" style=\"width:180px;\" msg=\"联系途径不能为空\">
                        \t<option value=\"\">请选择</option>
                             <option value=\"1\">电话</option>
                             <option value=\"2\">微信</option>
                             <option value=\"3\">QQ</option>
                             <option value=\"4\">邮箱</option>
                             <option value=\"5\">上门</option>
                             <option value=\"6\">短信</option>
                        </select>
                        <label style=\"margin-left:10px;\" > 联系类型： </label>
                        <!--<input class=\"required\" msg=\"联系类型不能为空\">-->
                        <select class=\"required\" field=\"contact_type\" style=\"width:180px;\" msg=\"联系类型不能为空\">
                        \t<option value=\"\">请选择</option>
                            <option value=\"1\">售后</option>
                            <option value=\"2\">投诉</option>
                            <option value=\"3\">收款</option>
                            <option value=\"4\">线索</option>
                            <option value=\"5\">商机</option>
                            <option value=\"6\">拜访</option>
                        </select>
                </div>
                <div style=\"text-align:center;margin-top:15px;\">
                    <span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
                    <button class=\"sure_button add\">
                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                        保存
                    </button>
                </div>      
            </div>
        ";
        // line 243
        $this->loadTemplate("admin/mark.html", "admin/clientManage/contactRecord.html", 243)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/clientManage/contactRecord.html", 243)->display($context);
        // line 244
        echo "    </div>
</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script>
    jQuery(function (\$) {
        cs.getNodes([119]);
        cs.dataRang();
        var rows = 10;//每页显示的条目数
        var filter = 'khm_contact_log.is_del = 0';
        var order = 'khm_contact_log.id desc';

        //导出功能
        cs.exportFile({
            url:\"/api/api_contact_log/export\",
            title:\"联系记录\"
        });
        
        //切换每页显示的条目数
        \$('#changePageNum').change(function() {
            rows = \$(this).val();
            ykp.setCookie('page_size',rows);
            getList();
        })

\t\t\$('#flush').click(function(){
\t\t\tfilter = 'khm_contact_log.is_del = 0';\t
\t\t\t\$('[sear=\"khm_customer.name\"]').val('');
\t\t\t\$('[sear=\"khm_contact_log.create_user\"]').val('').trigger('change');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetList();
\t\t})

        //通用排序
        cs.general_sort({
            url: '/api/api_contact_log/grid',
            method: 'post',
            data: {
                filter:'',
                limit: rows,
                type:1
            },
            pageBar: {
                id: '#pageBar'
            },
            initOrder:'khm_customer.id',
            defaultOrder: order,
            contentId: \"#dataList\",
            params:[{
                id: \"#dynamic-table\",
                field:[\"\",\"khm_customer.name\",\"khm_contact_log.create_user\",
                    \"khm_contact_log.log_time\",\"khm_contact_log.contact_msg\",\"khm_contact_log.contact_way\",\"khm_contact_log.contact_type\"
                ]
            }]
        }, function(res, _sort_role) {
            sort_role = _sort_role;
            handleData(res);
        });

        //普通搜索
        function doSearch(){
            var data = {
                url: '/api/api_contact_log/grid',
                methods: 'post',
                data: {
                    limit:rows
                }
            }

            cs.doSearch('#search', data, 'filter', false, function(res,_filter) {
                filter = _filter;
                if(res.data.items == \"\") {
                     setTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
                    \$('#dynamic-table_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
                } else {
                    handleData(res);
                }
            },'khm_contact_log.is_del=0')
        }

        //高级搜索
        function advancedSearch(){
            var data = {
                url: '/api/api_contact_log/grid',
                methods: 'post',
                data: {
                    limit:rows
                }
            }

            cs.hSearch('.search1', data, 'filter', false, function(res,_filter) {
                filter = _filter;
                \$('.in').click();
                \$('#heightsearch').removeClass('active');
                \$(\"#heightsearch1\").slideUp();
                if(res.data.items == \"\") {
                     setTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
                    \$('#dynamic-table_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
                } else {
                    handleData(res);
                }
            },'khm_contact_log.is_del=0')
        }

        //高级搜索按钮
        cs.showHeightSearch('#heightsearch', '#heightsearch1');

        //时间插件
        cs.timeplug();

        getEmployees();
        function getEmployees(el){
            var employees={};
            ykp.doAjax({
                url: '/api/api_employees/f7',
                method: 'post',
                async: false,
                data: {
                    select: 'bmm_employees.id,bmm_employees.name'
                },
                success: function(res) {
                    var data = res.data;
                      \$('.advandced-search').select2({allowClear:true});
                      var option = ''
                    for(var i in data) {
                    \tif(data[i]['name']) {
                        option+=`<option value=\"\${data[i]['id']}\">\${data[i]['name']}</option>`
                      } 
                    }
                    \$('.advandced-search').append(option);
                }
            });
        }


        //获取列表数据
        getList(2);
        function getList(_type = 1){
        \tif(_type == 2){
    \t\t\tykp.setCookie(\"filter\", \"\");
    \t\t\tykp.setCookie(\"where\", \"\");
        \t}
            doSearch();
            advancedSearch();
            ykp.list({
                url: '/api/api_contact_log/grid',
                method: 'post',
                data: {
                    filter:filter,
                    limit: rows,
                    order:order
                },
                pageBar: {id: '#pageBar'},
                loadList:function(res){
                    if(res.data.items == \"\") {
                         setTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
                        \$('#dynamic-table_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
                        return false;
                    } else {
                        handleData(res);
                    }
                }
            })
        }

        //处理数据
        function handleData(res){
            var data = res.data.items;
            var html = [];
            var contact_way = ['','电话', '微信', 'QQ', '邮箱', '上门', '短信'];
            var contact_type = ['','售后', '投诉', '收款', '线索', '商机', '拜访'];

            var styles = [];
            var lxContent = [];
            var num;
            
            \$('#dynamic-table th').each(function(i,e){
                styles.push(\$(this).css('display'));
            });
            for(var i in data){
            \tconsole.log(data[i]['khm_contact_log.log_time'])
                num = Math.ceil(data[i]['khm_contact_log.contact_msg'].length / 20);
\t\t\t\tfor(var j = 0; j < num ; j++) {
\t\t\t\t\tlxContent.push(data[i]['khm_contact_log.contact_msg'].slice(20*j,(j + 1) * 20));
\t\t\t\t}
                html.push(
                    `<tr contractRecord-id=\"\${data[i]['khm_contact_log.id']}\">
                    \t<td class=\"center\">
                            <label class=\"pos-rel\">
                                <a contentAuthority=\"120\"> <span style=\"cursor: pointer\" title=\"编辑\" class=\"recordEdit lbl btBlue\"><i class=\"fa fa-pencil-square-o\"></i></span></a>
                                <a contentAuthority=\"121\"> <span style=\"cursor: pointer\" title=\"删除\" class=\"lbl delete btRed\"><i class=\"fa fa-trash-o\"></i></span></a>
                            </label>
                        </td>
                        <td data-num=\"1\" style=\"display:\${styles[1]}\" data-con='\${data[i]['khm_contact_log.customer_id']}' data-cid=\"\${data[i]['khm_contact_log.customer_id']}\">
                            <a class=\"customerDetail pos-rel\" href=\"#\">\${data[i]['khm_customer.name']}</a>
                            
                             <label class=\"pos-rel\">
\t\t\t\t \t\t\t\t<i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data[i]['Remark'].length > 0 ? 'red' : ''}\"  data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i>
\t\t\t \t\t\t\t </label>
                        </td>
                        <td data-num=\"2\" style=\"display:\${styles[2]}\">
                            \${data[i]['create_info']['name']}
                        </td>
                        <td data-num=\"3\" style=\"display:\${styles[3]}\" class=\"\">\${data[i]['khm_contact_log.log_time'] != 0 ? cs.getNowTime(data[i]['khm_contact_log.log_time'],true) : ''}</td>
                        <td data-num=\"4\" style=\"display:\${styles[4]}\" title=\"\${lxContent.join('&#13;')}\">
                        \t<label style=\"width:100px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;\">
\t\t\t\t \t\t\t\t\${data[i]['khm_contact_log.contact_msg']}
\t\t\t \t\t\t\t</label>
                            
                        </td>
                        <td data-num=\"5\" style=\"display:\${styles[5]}\"> \${contact_way[data[i]['khm_contact_log.contact_way']]}</td>
                        <td data-num=\"6\" style=\"display:\${styles[6]}\">\${contact_type[data[i]['khm_contact_log.contact_type']]}</td>
                        
                    </tr>`
                );
                lxContent = [];
            }

            \$('#dynamic-table_data').html(html.join(''));
\t\t\t// \$(\"[data-rel='tooltip']\").tooltip();
\t\t\t// custom.showReamrk();

\t\t\tcs.getNodes([120,121]);
\t\t\t
            editOrDelete(data);
             
             custom.get_custom_info();
             
             custom.showReamrk();
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
        }

        //自定义列表
        cs.custorm_check('#dynamic-table', '#dynamic-table_data', false);

        //添加联系记录
        \$('#addItem').click(function () {
            showMark('#template');         
 \t\t\t\$('#showBox .title').text('添加记录');                     
\t\t\tcs.get_cus2('#templateBox #customer_name')
\t\t\t
            //联系时间
            cs.timeplug(true);

            \$('#templateCon .add').click(function(){
            \tif(\$('#templateCon [field]').attr('field') == 'customer_id' && \$('#templateCon [field]').val() == \"\") {
\t\t\t\t\tykp.prompt('企业名称不能为空！');
\t\t\t\t\treturn false;
\t\t\t\t}
                if(!cs.popValidate()){
                    return;
                }
\t\t\t\t
\t\t\t\t
                var postdata = {};
                \$('#templateCon [field]').each(function(i,e){
                    if(\$(this).attr('field') == 'log_time'){
                        postdata[\$(this).attr('field')] = new Date(\$(this).val()) / 1000;
                        return true;
                    }
                    postdata[\$(this).attr('field')] = \$(this).val();
                });
                    var user =JSON.parse(ykp.getCookie('userinfo'));
                    postdata['contact_user'] = user['id'];
                ykp.doAjax({
                    url:'/api/api_contact_log/add',
                    method:'post',
                    data:postdata,
                    success:function(res){
                    \tconsole.log(res)
                        ykp.prompt('添加成功');
                        cs.close();
                        getList();
                    }
                });
            });
        })

        //编辑&删除功能
        function editOrDelete(data) {
            \$('.recordEdit').click(function () {
                var index = \$(this).parents('tr').index();
                var _data = data[index];
                var id = \$(this).parents('tr').attr('contractRecord-id');
                var tdss = \$(this).parents('td').siblings();
                showMark('#template');
                \$('#showBox .title').text('编辑记录');

                //联系时间
                cs.timeplug(true);

                var field = '';
                \$('#templateCon [field]').each(function(i,e){
                    field = 'khm_contact_log.' + \$(this).attr('field');
                    if(\$(this).attr('field') == 'customer_id'){
                        \$('#templateBox #customer_name').html('<option value=\"'+ _data['khm_customer.id'] +'\">'+ _data['khm_customer.name'] +'</option').prop('disabled',true);
                        // cs.get_cus('#templateBox #customer_name',_data['khm_customer.id']);
                        return true;
                    }
                    if(\$(this).attr('field') == 'log_time'){
                        \$(this).val(cs.getNowTime(_data[field],true));
                        return true;
                    }
                    \$(this).val(_data[field]);
                });

                \$('#templateCon .add').click(function(){
                    if(!cs.popValidate()){
                        return;
                    }
                    var postdata = {
                        id:id
                    };             

                    \$('#templateCon [field]').each(function(i,e){
                        if(\$(this).attr('field') == 'log_time'){
                            postdata[\$(this).attr('field')] = new Date(\$(this).val()) / 1000;
                            return true;
                        }
                        postdata[\$(this).attr('field')] = \$(this).val();
                    });
                    var user =JSON.parse(ykp.getCookie('userinfo'));
                    postdata['contact_user'] = user['id'];
                    ykp.doAjax({
                        url:'/api/api_contact_log/edit',
                        method:'post',
                        data:postdata,
                        success:function(res){
                            ykp.prompt('编辑成功');
                            cs.close();
                            getList();
                        }
                    });
                });
            })

            \$('.delete').click(function(){
                var id = \$(this).parents('tr').attr('contractRecord-id');
                layui.use('layer',function() {
                \tvar layer = layui.layer;
                \tlayer.confirm('确认删除吗？', function(index){
\t\t\t\t         ykp.doAjax({
\t\t                    url:'/api/api_contact_log/del',
\t\t                    method:'post',
\t\t                    data:{
\t\t                        id:id
\t\t                    },
\t\t                    success:function(res){
\t\t                    \tykp.prompt('删除成功');
\t\t                        getList();
\t\t                        layer.closeAll();
\t\t                    }
\t\t               });
\t\t\t\t    });
                })
                
            });
        }
    });
</script>";
    }

    public function getTemplateName()
    {
        return "admin/clientManage/contactRecord.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 244,  263 => 243,  19 => 1,);
    }
}
/* <style type="text/css">*/
/*     #templateCon label{*/
/*         width:60px;*/
/*     }*/
/* 	#templateBox input{height:30px;width:180px;padding-left:5px;}*/
/* </style>*/
/* */
/* <div class=" widget-main">*/
/*     <div class="row">*/
/*         <!-- <h3 class="header smaller lighter blue">联系记录</h3> -->*/
/*         <div class="row" style="margin-top: 20px;position:relative;" id="topTool">*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <select  style="margin:12px !important;width: 180px" id="employees" sear="khm_contact_log.create_user" pts=3 class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true" >*/
/*                     <option value="">创建人</option>*/
/*                 </select>*/
/*             </div>*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <input type="text" pts=0 id="" sear="khm_customer.name" placeholder="企业名称" class="kh_name" />*/
/*             </div>*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <button type="button" id="search" title="搜索" class="btn btn-info btn-sm">*/
/*                     <i class="fa fa-search"></i>*/
/*                 </button>*/
/*             </div>*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <button id="heightsearch" type="button" title="高级搜索" class="btn btn-info btn-sm" style="background-color:#00c0ef !important;">*/
/*                     <i class="fa fa-filter"></i>*/
/*                 </button>*/
/*             </div>*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32    !important;">*/
/*                     <i class="fa fa-refresh"></i>*/
/*                 </button>*/
/*             </div>*/
/*             <div class="col-sx-4" contentAuthority="119" style=" float: left;margin-right: 5px;">*/
/*                   <button type="button" id="addItem" title="添加" style="outline: none;background:#32CD32 !important;border-color: #32CD32!important;"*/
/*                     class="btn addBtn btn-info btn-sm position-relative">*/
/*                         <i class="fa fa-plus"></i>*/
/*                     </button> */
/*             </div>*/
/*             <div class="col-sx-4" contentAuthority="302" style=" float: left; margin-right: 5px;">*/
/*                 <button type="button"  title="导出" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="exportfile moveToClue btn addBtn btn-info btn-sm position-relative">*/
/*                     <i class="fa fa-sign-out"></i>*/
/*                 </button>*/
/*             </div>*/
/* */
/*             <!--高级搜索-->*/
/*             <div id="heightsearch1" class="col-sx-12" style="margin-top:30px;position: absolute; background: #fff; z-index: 1041;padding: 20px 10px; display: none;">*/
/*                 <div class="row">*/
/*                     <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                         <label>企业名称</label>*/
/*                         <select>*/
/*                             <option> = </option>*/
/*                         </select>*/
/*                         <input type="text" gjs=0 sear="khm_customer.name" />*/
/*                     </div>*/
/*                     <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                         <label>创建人</label>*/
/*                         <select>*/
/*                             <option> = </option>*/
/*                         </select>*/
/*                         <select style="margin:12px !important;width: 180px" sear="khm_contact_log.create_user" gjs="3" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/*                             <option value="">请选择</option>*/
/*                         </select>*/
/*                     </div>*/
/*                     <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                         <label>联系时间</label>*/
/*                         <select>*/
/*                             <option> = </option>*/
/*                             <option> > </option>*/
/*                             <option> &lt; </option>*/
/*                         </select>*/
/*                         <div class="input-group"  style="display: inline-flex; width: 180px;">*/
/* 							<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 							<input class="form-control" type="text"  data-status="rangtime" gjs=0 sear="khm_contact_log.log_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 						</div>*/
/*                        <!-- <div class="input-group" style="display: inline-flex; width: 180px;">*/
/*                         <input id="date-timepicker1" class="date-timepicker1" data-type="gj" data-status="time" gjs="0" sear="khm_contact_log.log_time" style="height: 30px;width: 150px;">*/
/*                         <span class="input-group-addon" style="width:30px;height:30px;">*/
/*                             <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                         </span>*/
/*                     </div>-->*/
/*                     </div>*/
/*                     <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                         <label>联系内容</label>*/
/*                         <select>*/
/*                             <option> = </option>*/
/*                         </select>*/
/*                         <input type="text" gjs=0 sear="khm_contact_log.contact_msg">*/
/*                     </div>*/
/*                     <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                         <label>联系途径</label>*/
/*                         <select>*/
/*                             <option> = </option>*/
/*                         </select>*/
/*                         <select gjs=0 data-type="gj" sear="khm_contact_log.contact_way" style="width:180px;">*/
/*                             <option value="">请选择</option>*/
/*                             <option value="1">电话</option>*/
/*                             <option value="2">微信</option>*/
/*                             <option value="3">QQ</option>*/
/*                             <option value="4">邮箱</option>*/
/*                             <option value="5">上门</option>*/
/*                             <option value="6">短信</option>*/
/*                         </select>*/
/*                     </div>*/
/*                     <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                         <label>联系类型</label>*/
/*                         <select>*/
/*                             <option> = </option>*/
/*                         </select>*/
/*                         <select gjs=0 data-type="gj" sear="khm_contact_log.contact_type" style="width:180px;">*/
/*                             <option value="">请选择</option>*/
/*                             <option value="1">售后</option>*/
/*                             <option value="2">投诉</option>*/
/*                             <option value="3">收款</option>*/
/*                             <option value="4">线索</option>*/
/*                             <option value="5">商机</option>*/
/*                             <option value="6">拜访</option>*/
/*                         </select>*/
/*                     </div>*/
/*                     <div class="col-sx-4" style="clear:both;padding-top:10px;text-align:center;">*/
/*                         <button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/*                         查询*/
/*                     </button>*/
/*                         <button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/*                            重置*/
/*                         </button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div> */
/*         </div>*/
/*     </div>*/
/*                 <div class="custom_table">*/
/*                     <table id="dynamic-table">*/
/*                         <thead>*/
/*                         <tr class="thColor">*/
/*                         	<th class="hidden-480 center">操作</th>*/
/*                             <th data-num="1">企业名称</th>*/
/*                             <th data-num="2">创建人</th>*/
/*                             <th data-num="3" class="hidden-480">联系时间</th>*/
/*                             <th data-num="4" class="hidden-480">联系内容</th>*/
/*                             <th data-num="5" class="hidden-480">联系途径</th>*/
/*                             <th data-num="6" class="hidden-480">联系类型</th>*/
/*                             */
/*                         </tr>*/
/*                         </thead>*/
/* */
/*                         <tbody id="dynamic-table_data">*/
/*                             <!-- <tr>*/
/*                                 <td data-num="1">*/
/*                                     <a href="#">深圳税脉网络财务有限公司θ</a>*/
/*                                 </td>*/
/*                                 <td data-num="2">*/
/*                                     李四*/
/*                                 </td>*/
/*                                 <td data-num="3" class="">2017-8-19</td>*/
/*                                 <td data-num="4">*/
/* */
/*                                 </td>*/
/*                                 <td data-num="5"> 电话</td>*/
/*                                 <td data-num="6">售后服务</td>*/
/*                                 <td class="center">*/
/*                                     <label class="pos-rel">*/
/*                                         <a> <span style="cursor: pointer" id="recordEdit" class="lbl">编辑&nbsp</span></a>|*/
/*                                         <a> <span style="cursor: pointer" class="lbl red">&nbsp删除</span></a>*/
/*                                     </label>*/
/*                                 </td>*/
/*                             </tr> -->*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*                 <div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/*                     <div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
/*                     <!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/*                     <div id="pageBar" class="pagination"></div>*/
/*                     <div align="right" style="float: right;  width: 10%;">*/
/*                         <select style="width: 100px;" id="changePageNum">*/
/*                             <option value="10">每页10条</option>*/
/*                             <option value="20">每页20条</option>*/
/*                             <option value="50">每页50条</option>*/
/*                             <option value="100">每页100条</option>*/
/*                             <option value="200">每页200条</option>*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row" id="template" style="display:none;">*/
/*                 */
/*                 <div style="margin-top:15px;">*/
/*                         <label> 企业名称： </label>*/
/*                         <select  id="customer_name" field="customer_id" style="width: 180px;">*/
/* 							<option value="">请选择</option>*/
/* 						</select>*/
/*                         <!-- <label style="margin-left:10px;"> 联系人： </label>*/
/*                         <input class="required" field="contact_user" msg="联系人不能为空"> -->*/
/*                 </div>*/
/*                 <div style="margin-top:15px;">*/
/*                         <label> 联系时间： </label>*/
/*                         <div class="input-group" style="display: inline-flex; width: 180px;">*/
/*                             <input class="date-timepicker1 required" msg="联系时间不能为空" field="log_time" style="height: 30px; width: 150px;">*/
/*                             <span class="input-group-addon" style="width:30px;height:30px;">*/
/*                                 <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                             </span>*/
/*                         </div>*/
/*                         <label style="margin-left:10px;"> 联系内容： </label>*/
/*                         <input class="required" field="contact_msg" msg="联系内容不能为空" placeholder="">*/
/*                 </div>*/
/*                 <div style="margin-top:15px;">*/
/*                         <label> 联系途径： </label>*/
/*                         <!--<input class="required" msg="联系途径不能为空">-->*/
/*                          <select class="required" field="contact_way" style="width:180px;" msg="联系途径不能为空">*/
/*                         	<option value="">请选择</option>*/
/*                              <option value="1">电话</option>*/
/*                              <option value="2">微信</option>*/
/*                              <option value="3">QQ</option>*/
/*                              <option value="4">邮箱</option>*/
/*                              <option value="5">上门</option>*/
/*                              <option value="6">短信</option>*/
/*                         </select>*/
/*                         <label style="margin-left:10px;" > 联系类型： </label>*/
/*                         <!--<input class="required" msg="联系类型不能为空">-->*/
/*                         <select class="required" field="contact_type" style="width:180px;" msg="联系类型不能为空">*/
/*                         	<option value="">请选择</option>*/
/*                             <option value="1">售后</option>*/
/*                             <option value="2">投诉</option>*/
/*                             <option value="3">收款</option>*/
/*                             <option value="4">线索</option>*/
/*                             <option value="5">商机</option>*/
/*                             <option value="6">拜访</option>*/
/*                         </select>*/
/*                 </div>*/
/*                 <div style="text-align:center;margin-top:15px;">*/
/*                     <span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/*                     <button class="sure_button add">*/
/*                         <i class="fa fa-check" aria-hidden="true"></i>*/
/*                         保存*/
/*                     </button>*/
/*                 </div>      */
/*             </div>*/
/*         {% include 'admin/mark.html' %} {% include 'admin/customerDetail.html' %}*/
/*     </div>*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script>*/
/*     jQuery(function ($) {*/
/*         cs.getNodes([119]);*/
/*         cs.dataRang();*/
/*         var rows = 10;//每页显示的条目数*/
/*         var filter = 'khm_contact_log.is_del = 0';*/
/*         var order = 'khm_contact_log.id desc';*/
/* */
/*         //导出功能*/
/*         cs.exportFile({*/
/*             url:"/api/api_contact_log/export",*/
/*             title:"联系记录"*/
/*         });*/
/*         */
/*         //切换每页显示的条目数*/
/*         $('#changePageNum').change(function() {*/
/*             rows = $(this).val();*/
/*             ykp.setCookie('page_size',rows);*/
/*             getList();*/
/*         })*/
/* */
/* 		$('#flush').click(function(){*/
/* 			filter = 'khm_contact_log.is_del = 0';	*/
/* 			$('[sear="khm_customer.name"]').val('');*/
/* 			$('[sear="khm_contact_log.create_user"]').val('').trigger('change');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getList();*/
/* 		})*/
/* */
/*         //通用排序*/
/*         cs.general_sort({*/
/*             url: '/api/api_contact_log/grid',*/
/*             method: 'post',*/
/*             data: {*/
/*                 filter:'',*/
/*                 limit: rows,*/
/*                 type:1*/
/*             },*/
/*             pageBar: {*/
/*                 id: '#pageBar'*/
/*             },*/
/*             initOrder:'khm_customer.id',*/
/*             defaultOrder: order,*/
/*             contentId: "#dataList",*/
/*             params:[{*/
/*                 id: "#dynamic-table",*/
/*                 field:["","khm_customer.name","khm_contact_log.create_user",*/
/*                     "khm_contact_log.log_time","khm_contact_log.contact_msg","khm_contact_log.contact_way","khm_contact_log.contact_type"*/
/*                 ]*/
/*             }]*/
/*         }, function(res, _sort_role) {*/
/*             sort_role = _sort_role;*/
/*             handleData(res);*/
/*         });*/
/* */
/*         //普通搜索*/
/*         function doSearch(){*/
/*             var data = {*/
/*                 url: '/api/api_contact_log/grid',*/
/*                 methods: 'post',*/
/*                 data: {*/
/*                     limit:rows*/
/*                 }*/
/*             }*/
/* */
/*             cs.doSearch('#search', data, 'filter', false, function(res,_filter) {*/
/*                 filter = _filter;*/
/*                 if(res.data.items == "") {*/
/*                      setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/*                     $('#dynamic-table_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/*                 } else {*/
/*                     handleData(res);*/
/*                 }*/
/*             },'khm_contact_log.is_del=0')*/
/*         }*/
/* */
/*         //高级搜索*/
/*         function advancedSearch(){*/
/*             var data = {*/
/*                 url: '/api/api_contact_log/grid',*/
/*                 methods: 'post',*/
/*                 data: {*/
/*                     limit:rows*/
/*                 }*/
/*             }*/
/* */
/*             cs.hSearch('.search1', data, 'filter', false, function(res,_filter) {*/
/*                 filter = _filter;*/
/*                 $('.in').click();*/
/*                 $('#heightsearch').removeClass('active');*/
/*                 $("#heightsearch1").slideUp();*/
/*                 if(res.data.items == "") {*/
/*                      setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/*                     $('#dynamic-table_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/*                 } else {*/
/*                     handleData(res);*/
/*                 }*/
/*             },'khm_contact_log.is_del=0')*/
/*         }*/
/* */
/*         //高级搜索按钮*/
/*         cs.showHeightSearch('#heightsearch', '#heightsearch1');*/
/* */
/*         //时间插件*/
/*         cs.timeplug();*/
/* */
/*         getEmployees();*/
/*         function getEmployees(el){*/
/*             var employees={};*/
/*             ykp.doAjax({*/
/*                 url: '/api/api_employees/f7',*/
/*                 method: 'post',*/
/*                 async: false,*/
/*                 data: {*/
/*                     select: 'bmm_employees.id,bmm_employees.name'*/
/*                 },*/
/*                 success: function(res) {*/
/*                     var data = res.data;*/
/*                       $('.advandced-search').select2({allowClear:true});*/
/*                       var option = ''*/
/*                     for(var i in data) {*/
/*                     	if(data[i]['name']) {*/
/*                         option+=`<option value="${data[i]['id']}">${data[i]['name']}</option>`*/
/*                       } */
/*                     }*/
/*                     $('.advandced-search').append(option);*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/* */
/*         //获取列表数据*/
/*         getList(2);*/
/*         function getList(_type = 1){*/
/*         	if(_type == 2){*/
/*     			ykp.setCookie("filter", "");*/
/*     			ykp.setCookie("where", "");*/
/*         	}*/
/*             doSearch();*/
/*             advancedSearch();*/
/*             ykp.list({*/
/*                 url: '/api/api_contact_log/grid',*/
/*                 method: 'post',*/
/*                 data: {*/
/*                     filter:filter,*/
/*                     limit: rows,*/
/*                     order:order*/
/*                 },*/
/*                 pageBar: {id: '#pageBar'},*/
/*                 loadList:function(res){*/
/*                     if(res.data.items == "") {*/
/*                          setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/*                         $('#dynamic-table_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/*                         return false;*/
/*                     } else {*/
/*                         handleData(res);*/
/*                     }*/
/*                 }*/
/*             })*/
/*         }*/
/* */
/*         //处理数据*/
/*         function handleData(res){*/
/*             var data = res.data.items;*/
/*             var html = [];*/
/*             var contact_way = ['','电话', '微信', 'QQ', '邮箱', '上门', '短信'];*/
/*             var contact_type = ['','售后', '投诉', '收款', '线索', '商机', '拜访'];*/
/* */
/*             var styles = [];*/
/*             var lxContent = [];*/
/*             var num;*/
/*             */
/*             $('#dynamic-table th').each(function(i,e){*/
/*                 styles.push($(this).css('display'));*/
/*             });*/
/*             for(var i in data){*/
/*             	console.log(data[i]['khm_contact_log.log_time'])*/
/*                 num = Math.ceil(data[i]['khm_contact_log.contact_msg'].length / 20);*/
/* 				for(var j = 0; j < num ; j++) {*/
/* 					lxContent.push(data[i]['khm_contact_log.contact_msg'].slice(20*j,(j + 1) * 20));*/
/* 				}*/
/*                 html.push(*/
/*                     `<tr contractRecord-id="${data[i]['khm_contact_log.id']}">*/
/*                     	<td class="center">*/
/*                             <label class="pos-rel">*/
/*                                 <a contentAuthority="120"> <span style="cursor: pointer" title="编辑" class="recordEdit lbl btBlue"><i class="fa fa-pencil-square-o"></i></span></a>*/
/*                                 <a contentAuthority="121"> <span style="cursor: pointer" title="删除" class="lbl delete btRed"><i class="fa fa-trash-o"></i></span></a>*/
/*                             </label>*/
/*                         </td>*/
/*                         <td data-num="1" style="display:${styles[1]}" data-con='${data[i]['khm_contact_log.customer_id']}' data-cid="${data[i]['khm_contact_log.customer_id']}">*/
/*                             <a class="customerDetail pos-rel" href="#">${data[i]['khm_customer.name']}</a>*/
/*                             */
/*                              <label class="pos-rel">*/
/* 				 				<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}"  data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>*/
/* 			 				 </label>*/
/*                         </td>*/
/*                         <td data-num="2" style="display:${styles[2]}">*/
/*                             ${data[i]['create_info']['name']}*/
/*                         </td>*/
/*                         <td data-num="3" style="display:${styles[3]}" class="">${data[i]['khm_contact_log.log_time'] != 0 ? cs.getNowTime(data[i]['khm_contact_log.log_time'],true) : ''}</td>*/
/*                         <td data-num="4" style="display:${styles[4]}" title="${lxContent.join('&#13;')}">*/
/*                         	<label style="width:100px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;">*/
/* 				 				${data[i]['khm_contact_log.contact_msg']}*/
/* 			 				</label>*/
/*                             */
/*                         </td>*/
/*                         <td data-num="5" style="display:${styles[5]}"> ${contact_way[data[i]['khm_contact_log.contact_way']]}</td>*/
/*                         <td data-num="6" style="display:${styles[6]}">${contact_type[data[i]['khm_contact_log.contact_type']]}</td>*/
/*                         */
/*                     </tr>`*/
/*                 );*/
/*                 lxContent = [];*/
/*             }*/
/* */
/*             $('#dynamic-table_data').html(html.join(''));*/
/* 			// $("[data-rel='tooltip']").tooltip();*/
/* 			// custom.showReamrk();*/
/* */
/* 			cs.getNodes([120,121]);*/
/* 			*/
/*             editOrDelete(data);*/
/*              */
/*              custom.get_custom_info();*/
/*              */
/*              custom.showReamrk();*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/*         }*/
/* */
/*         //自定义列表*/
/*         cs.custorm_check('#dynamic-table', '#dynamic-table_data', false);*/
/* */
/*         //添加联系记录*/
/*         $('#addItem').click(function () {*/
/*             showMark('#template');         */
/*  			$('#showBox .title').text('添加记录');                     */
/* 			cs.get_cus2('#templateBox #customer_name')*/
/* 			*/
/*             //联系时间*/
/*             cs.timeplug(true);*/
/* */
/*             $('#templateCon .add').click(function(){*/
/*             	if($('#templateCon [field]').attr('field') == 'customer_id' && $('#templateCon [field]').val() == "") {*/
/* 					ykp.prompt('企业名称不能为空！');*/
/* 					return false;*/
/* 				}*/
/*                 if(!cs.popValidate()){*/
/*                     return;*/
/*                 }*/
/* 				*/
/* 				*/
/*                 var postdata = {};*/
/*                 $('#templateCon [field]').each(function(i,e){*/
/*                     if($(this).attr('field') == 'log_time'){*/
/*                         postdata[$(this).attr('field')] = new Date($(this).val()) / 1000;*/
/*                         return true;*/
/*                     }*/
/*                     postdata[$(this).attr('field')] = $(this).val();*/
/*                 });*/
/*                     var user =JSON.parse(ykp.getCookie('userinfo'));*/
/*                     postdata['contact_user'] = user['id'];*/
/*                 ykp.doAjax({*/
/*                     url:'/api/api_contact_log/add',*/
/*                     method:'post',*/
/*                     data:postdata,*/
/*                     success:function(res){*/
/*                     	console.log(res)*/
/*                         ykp.prompt('添加成功');*/
/*                         cs.close();*/
/*                         getList();*/
/*                     }*/
/*                 });*/
/*             });*/
/*         })*/
/* */
/*         //编辑&删除功能*/
/*         function editOrDelete(data) {*/
/*             $('.recordEdit').click(function () {*/
/*                 var index = $(this).parents('tr').index();*/
/*                 var _data = data[index];*/
/*                 var id = $(this).parents('tr').attr('contractRecord-id');*/
/*                 var tdss = $(this).parents('td').siblings();*/
/*                 showMark('#template');*/
/*                 $('#showBox .title').text('编辑记录');*/
/* */
/*                 //联系时间*/
/*                 cs.timeplug(true);*/
/* */
/*                 var field = '';*/
/*                 $('#templateCon [field]').each(function(i,e){*/
/*                     field = 'khm_contact_log.' + $(this).attr('field');*/
/*                     if($(this).attr('field') == 'customer_id'){*/
/*                         $('#templateBox #customer_name').html('<option value="'+ _data['khm_customer.id'] +'">'+ _data['khm_customer.name'] +'</option').prop('disabled',true);*/
/*                         // cs.get_cus('#templateBox #customer_name',_data['khm_customer.id']);*/
/*                         return true;*/
/*                     }*/
/*                     if($(this).attr('field') == 'log_time'){*/
/*                         $(this).val(cs.getNowTime(_data[field],true));*/
/*                         return true;*/
/*                     }*/
/*                     $(this).val(_data[field]);*/
/*                 });*/
/* */
/*                 $('#templateCon .add').click(function(){*/
/*                     if(!cs.popValidate()){*/
/*                         return;*/
/*                     }*/
/*                     var postdata = {*/
/*                         id:id*/
/*                     };             */
/* */
/*                     $('#templateCon [field]').each(function(i,e){*/
/*                         if($(this).attr('field') == 'log_time'){*/
/*                             postdata[$(this).attr('field')] = new Date($(this).val()) / 1000;*/
/*                             return true;*/
/*                         }*/
/*                         postdata[$(this).attr('field')] = $(this).val();*/
/*                     });*/
/*                     var user =JSON.parse(ykp.getCookie('userinfo'));*/
/*                     postdata['contact_user'] = user['id'];*/
/*                     ykp.doAjax({*/
/*                         url:'/api/api_contact_log/edit',*/
/*                         method:'post',*/
/*                         data:postdata,*/
/*                         success:function(res){*/
/*                             ykp.prompt('编辑成功');*/
/*                             cs.close();*/
/*                             getList();*/
/*                         }*/
/*                     });*/
/*                 });*/
/*             })*/
/* */
/*             $('.delete').click(function(){*/
/*                 var id = $(this).parents('tr').attr('contractRecord-id');*/
/*                 layui.use('layer',function() {*/
/*                 	var layer = layui.layer;*/
/*                 	layer.confirm('确认删除吗？', function(index){*/
/* 				         ykp.doAjax({*/
/* 		                    url:'/api/api_contact_log/del',*/
/* 		                    method:'post',*/
/* 		                    data:{*/
/* 		                        id:id*/
/* 		                    },*/
/* 		                    success:function(res){*/
/* 		                    	ykp.prompt('删除成功');*/
/* 		                        getList();*/
/* 		                        layer.closeAll();*/
/* 		                    }*/
/* 		               });*/
/* 				    });*/
/*                 })*/
/*                 */
/*             });*/
/*         }*/
/*     });*/
/* </script>*/