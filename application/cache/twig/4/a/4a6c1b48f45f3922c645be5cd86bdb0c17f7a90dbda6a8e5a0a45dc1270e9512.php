<?php

/* admin/clientManage/contacts.html */
class __TwigTemplate_9d9cc515e3742e7fbe49d70b02057a0e257de9e4f58efcf2ffcb1283dd0d861c extends Twig_Template
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
        width:96px;
    }

</style>
<div class=\" widget-main\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <!-- <h3 class=\"header smaller lighter blue\">联系人</h3> -->
                <div class=\"row\" style=\"margin-top: 20px;position:relative;\" id=\"topTool\">
                    <!--<h3 class=\"header smaller lighter blue\">送单</h3>-->
                    <div class=\"col-sx-4\"  style=\" float: left;margin-right: 5px;\">
                        <input type=\"text\" pts=\"0\" sear=\"khm_contact_book.username\"  placeholder=\"姓名\"  />
                    </div>
                    <div class=\"col-sx-4\"  style=\" float: left;margin-right: 5px;\">
                        <input type=\"text\" pts=\"0\" sear=\"khm_customer.name\"  placeholder=\"企业名称\"  />
                    </div>
                     <div class=\"col-sx-4\"  style=\" float: left;margin-right: 5px;\">
                        <input type=\"number\" pts=\"0\" sear=\"khm_contact_book.phone\"  placeholder=\"手机\" />
                    </div>
                     <div class=\"col-sx-4\"  style=\" float: left;margin-right: 5px;\">
                        <input type=\"number\" pts=\"0\" sear=\"khm_contact_book.telephone\"  placeholder=\"电话\"  />
                    </div>
                     <div class=\"col-sx-4\"  style=\" float: left;margin-right: 5px;\">
                        <input type=\"number\" pts=\"0\" sear=\"khm_contact_book.qq\"  placeholder=\"QQ\" />
                    </div>
                    <div class=\"col-sx-4\"  style=\" float: left;margin-right: 5px;\">
                        <button type=\"button\" title=\"搜索\" class=\"_search btn btn-info btn-sm\">
                            <i class=\"fa fa-search\"></i>
                        </button>
                    </div>
                    <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                        <button id=\"heightsearch\" title=\"高级搜索\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color:#00c0ef !important;\">
                            <i class=\"fa fa-filter\"></i>
                        </button>
                    </div>
                    <div class=\"col-sx-4\"  style=\" float: left;margin-right: 5px;\">
                         <button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
                            <i class=\"fa fa-refresh\"></i>
                        </button>
                    </div>
                    <div class=\"col-sx-4\" contentAuthority=\"122\" style=\" float: left;margin-right: 5px; \">
                        <button type=\"button\" title=\"添加\" id=\"addItem\" class=\"btn addBtn btn-info btn-sm\" style=\"background:#32CD32 !important;border-color: #32CD32!important;\">
                            <i class=\"fa fa-plus\"></i>
                        </button>
                    </div>
                    <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\" contentAuthority=\"125\">
                        <button type=\"button\" id=\"mergeItem\" title=\"合并重复联系人\" class=\"btn btn-info btn-sm\" style=\"background-color: #F7B824 !important; border-color:#F7B824 ; \">
                            <i class=\"fa fa-plus\"></i>

                        </button>
                    </div>
                    <div class=\"col-sx-4\" contentAuthority=\"303\" style=\" float: left; margin-right: 5px;\">
                        <button type=\"button\"  title=\"导出\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"exportfile moveToClue btn addBtn btn-info btn-sm position-relative\">
                            <i class=\"fa fa-sign-out\"></i>
                        </button>
                    </div>
                    
                    <!--高级搜索-->
                    <div id=\"heightsearch1\" class=\"col-sx-12\" style=\"margin-top:30px;position: absolute; background: #fff; z-index: 1041;padding: 20px 10px; display: none;\">
                        <div class=\"row\">
                            <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                                <label>姓名</label>
                                <select>
                                    <option> = </option>
                                </select>
                                <input type=\"text\" gjs=0 sear=\"khm_contact_book.username\" />
                            </div>
                            <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                                <label>性别</label>
                                <select>
                                    <option> = </option>
                                </select>
                                <select gjs=0 data-type=\"gj\" sear=\"khm_contact_book.sex\" style=\"width:180px;\">
                                    <option value=\"\">请选择</option>
                                    <option value=\"1\">男</option>
                                    <option value=\"2\">女</option>
                                    <option value=\"3\">未知</option>
                                </select>
                            </div>
                            <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                                <label>企业名称</label>
                                <select>
                                    <option> = </option>
                                </select>
                                <input type=\"text\" gjs=0 sear=\"khm_customer.name\" />
                            </div>
                            <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                                <label>合作状态</label>
                                <select>
                                    <option> = </option>
                                </select>
                                <select gjs=0 data-type=\"gj\" sear=\"khm_customer.status\" style=\"width:180px;\">
                                    <option value=\"\">请选择</option>
                                    <option value=\"0\">未合作</option>
                                    <option value=\"1\">合作中</option>
                                    <option value=\"2\">已解决</option>
                                </select>
                            </div>
                            <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                                <label>手机</label>
                                <select>
                                    <option> = </option>
                                </select>
                                <input type=\"text\" gjs=0 sear=\"khm_contact_book.phone\" />
                            </div>
                            <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                                <label>电话</label>
                                <select>
                                    <option> = </option>
                                </select>
                                <input type=\"text\" gjs=0 sear=\"khm_contact_book.telephone\" />
                            </div>
                            <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                                <label>QQ</label>
                                <select>
                                    <option> = </option>
                                </select>
                                <input type=\"text\" gjs=0 sear=\"khm_contact_book.qq\" />
                            </div>
                            <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                                <label>关键决策人</label>
                                <select>
                                    <option> = </option>
                                </select>
                                <select gjs=0 data-type=\"gj\" sear=\"khm_contact_book.main_user\" style=\"width:180px;\">
                                    <option value=\"\">请选择</option>
                                    <option value=\"1\">是</option>
                                    <option value=\"0\">否</option>
                                </select>
                            </div>
                            <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                                <label>主要联系人</label>
                                <select>
                                    <option> = </option>
                                </select>
                                <select gjs=0 data-type=\"gj\" sear=\"khm_contact_book.is_main\" style=\"width:180px;\">
                                    <option value=\"\">请选择</option>
                                    <option value=\"1\">是</option>
                                    <option value=\"0\">否</option>
                                </select>
                            </div>
                            <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                                <label>修改人</label>
                                <select>
                                    <option> = </option>
                                </select>
                                <select style=\"margin:12px !important;width: 180px\" sear=\"khm_contact_book.last_modify_user\" gjs=\"3\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
                                    <option value=\"\">请选择</option>
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
                <div class=\"custom_table\">
                    <table id=\"dynamic-table\">
                        <thead>
                        <tr class=\"thColor\">
                           \t<th class=\"hidden-480 center\">操作</th>
                            <th data-num=\"1\">姓名</th>
                            <th data-num=\"2\">性别</th>
                            <th data-num=\"3\" class=\"hidden-480\">企业名称</th>
                            <th data-num=\"4\" class=\"hidden-480\">合作状态</th>
                            <th data-num=\"5\" class=\"hidden-480\">手机号码</th>
                            <th data-num=\"6\" class=\"hidden-480\">固定电话</th>
                            <th data-num=\"7\" class=\"hidden-480\">QQ</th>
                            <th data-num=\"8\" class=\"hidden-480\">关键决策人</th>
                            <th data-num=\"9\" class=\"hidden-480\">主要联系人</th>
                            <th data-num=\"10\" class=\"hidden-480\">修改人</th>
                            <th data-num=\"11\" class=\"hidden-480\">修改时间</th>
                            <th data-num=\"12\" class=\"hidden-480\">创建人</th>
                            <th data-num=\"13\" class=\"hidden-480\">创建时间</th>
                            <th data-num=\"14\" class=\"hidden-480\">企业数</th>
                        </tr>
                        </thead>

                        <tbody id=\"dynamic-table_data\">

                        </tbody>
                    </table>
                </div>
                <div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 20%;\" id=\"num\"></div>
\t\t\t\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t\t\t\t<div id=\"pageBar\" class=\"pagination\"></div>
\t\t\t\t\t<div align=\"right\" style=\"float: right;  width: 10%;\">
\t\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>

            <div class=\"row\" id=\"template\" style=\"display:none;\">
                <div class=\"col-sm-12\">
                    <div class=\"widget-box\">
                        <div style=\"margin-top:15px;\">
                            <label><i class=\"reqired_label\">*</i>手机号码： </label>
                            <input type=\"number\" addfield=\"phone\">
                            <label>企业名称：</label>
                            <input addfield=\"customer_id\"  style=\"display:none;\" company=\"1\">
                            <select style=\"width: 180px !important;\" addfield=\"customer_id\" style=\"display:none;\" company=\"2\">
                                <option value=\"\">请选择</option>
                            </select>
                            
                        </div>
                         <div style=\"margin-top:15px;\">
                            <label>姓名：</label>
                            <input type=\"text\" addfield=\"username\">
                            <label>性别： </label>
                            <input name=\"sex\" checked=\"true\" value=\"1\" type=\"radio\" style=\"margin-right:5px;position:relative;top:2px;\">男&nbsp;&nbsp;
                            <input  name=\"sex\" type=\"radio\" value=\"2\" style=\"margin-right:5px;position:relative;top:2px;\">女&nbsp;&nbsp;
                            <input  name=\"sex\" type=\"radio\" value=\"3\" style=\"margin-right:5px;position:relative;top:2px;\">未知
                        </div>
                         <div style=\"margin-top:15px;\">
                            <label>固定电话：</label>
                            <input type=\"number\" addfield=\"telephone\">
                            <label>QQ： </label>
                            <input type=\"number\" addfield=\"qq\">
                        </div>
                         <div style=\"margin-top:15px;\">
                            <label>主要联系人： </label>
                            <select style=\"width:180px;\" addfield=\"is_main\">
                                <option value=\"\"> ---请选择--- </option>
                                <option value=\"1\">是</option>
                                <option value=\"0\">否</option>
                            </select>
                            <label>关键决策人：</label>
                            <select style=\"width:180px;\" addfield=\"main_user\">
                                <option value=\"\"> ---请选择--- </option>
                                <option value=\"1\">是</option>
                                <option value=\"0\">否</option>
                            </select>
                        </div>
                        <div style=\"margin-top:15px;\">
                           <div class=\"custom_table\">
                               <table>
                                   <thead>
                                       <tr>
                                           <th style=\"width:10px;\"><label class=\"increase\" style=\"position:relative;cursor:pointer;font-size:20px;text-align:center;width:10px;\">+</label></th>
                                           <th>联系地址</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       
                                   </tbody>
                               </table>
                           </div>
                        </div>
                       <div style=\"text-align:center;margin-top:15px;\">
                            <span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
                            <button class=\"sure_button add\">
                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                保存
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"row\" id=\"template1\" style=\"display:none;\">
                <div class=\"col-sm-12\">
                    <div class=\"space-12\"></div>

                    <div class=\"widget-box\">
                        <div class=\"widget-header widget-header-small\">
                            <h5 id=\"editTitile\" class=\"widget-title lighter\">联系人信息</h5>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <!-- PAGE CONTENT BEGINS -->
                                <form class=\"form-horizontal\" role=\"form\">
                                    <div class=\"form-group\">
                                        <label>姓名：</label>
                                        <span addfield=\"username\">12313</span>
                                        <label>性别： </label>
                                        <span addfield=\"sex\"></span>
                                    </div>
                                     <div class=\"form-group\">
                                     \t<label>企业名称：</label>
                                        <span addfield=\"contact_user\"></span>
                                        <label>手机号码： </label>
                                        <span addfield=\"phone\"></span>
                                    </div>
                                     <div class=\"form-group\">
                                     \t<label>电话订花：</label>
                                        <span addfield=\"telephone\"></span>
                                        <label>QQ： </label>
                                        <span addfield=\"qq\"></span>
                                    </div>
                                     <div class=\"form-group\">
                                     \t<label>关键决策人：</label>
                                        <span addfield=\"main_user\"></span>
                                        <label>主要联系人： </label>
                                        <span addfield=\"is_main\"></span>
                                    </div>
                                </form>
                            </div><!-- /.col -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 317
        $this->loadTemplate("admin/mark.html", "admin/clientManage/contacts.html", 317)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/clientManage/contacts.html", 317)->display($context);
        // line 318
        echo "    </div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script>
    jQuery(function (\$) {
        cs.getNodes([122,125]);
    \tvar page_size = 10;//每页显示的条目数
        var filter = 'khm_contact_book.is_del = 0';//过滤条件
        var aid_2=ykp.getCookie(\"aid_2\");
        var time=ykp.getCookie(\"time\");
        var employees = {};//所有员工
        var customers = {};//所有企业
\t\tvar order ='khm_contact_book.id desc';

        //导出功能
        cs.exportFile({
            url:\"/api/api_contact_book/export\",
            title:\"联系人\"
        });
\t\t
         //通用排序
        cs.general_sort({
            url: '/api/api_contact_book/grid',
            method: 'post',
            data: {
                filter:'',
                limit: page_size,
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
                field:[\"\",\"khm_contact_book.username\",\"khm_contact_book.sex\",\"khm_customer.name\",\"khm_customer.status\",\"khm_contact_book.phone\",
                    \"khm_contact_book.telephone\",\"khm_contact_book.qq\",\"khm_contact_book.main_user\",\"khm_contact_book.is_main\",\"khm_contact_book.last_modify_user\",\"khm_contact_book.last_modify_time\",\"khm_contact_book.create_user\",\"khm_contact_book.create_time\",\"khm_contact_book.num\"
                ]
            }]
        }, function(res, _sort_role) {
            sort_role = _sort_role;
            addList(res);
        });

\t\t\$('#mergeItem').click(function() {
\t\t\tykp.doAjax({
\t\t\t\turl:'/api/api_contact_book/merge_book',
\t\t\t\tmethod:\"get\",
\t\t\t\tdata:{},
\t\t\t\tsuccess:function(res) {
\t\t\t\t\tykp.prompt('合并成功!');
\t\t\t\t\tgetList();
\t\t\t\t}
\t\t\t})
\t\t})


        //获取所有员工
        ykp.doAjax({
            url:'/api/api_employees/f7',
            method:'post',
            async:false,
            data:{
                select:'bmm_employees.id,bmm_employees.name'
            },
            success:function(res){
                var data = res.data;

                \$('.advandced-search').select2({allowClear:true});
                var option = '';

                for(var i in data){
                \tif(data[i]['name']){
                     option+=`<option value=\"\${data[i]['id']}\">\${data[i]['name']}</option>`;
                    employees[data[i]['id']] =data[i]['name'] ;
                }
                }
                \$('.advandced-search').append(option);
            }
        });

        //获取所有企业
        ykp.doAjax({
            url:'/api/api_customer/f7',
            method:'post',
            data:{
                select:'khm_customer.id,khm_customer.name'
            },
            success:function(res){
                var data = res.data;
                for(var i in data){
                    customers[data[i]['id']] =data[i]['name'] ;
                }
            }
        });
\t\ttspage();
        function tspage(){
        //接收首页跳转
        if(time!=\"\"&&time!=undefined){
            var timestamp='';//条件
            var today=new Date().setHours(0,0,0,0)/1000;//今天零点的时间戳
            var day_1=cs.getNowTime(Date.parse(new Date())/1000).substr(-2)-1;//距离本月1号有多少天
            var lastmonthday_1=cs.getNowTime(Date.parse(new Date())/1000);
            var newday=lastmonthday_1.substring(0,4)+'-'+(lastmonthday_1.substring(5,7)-1)+'-01';
            if(lastmonthday_1.substring(5,7)==1){
                newday=(lastmonthday_1.substring(0,4)-1)+'-12-01';
            }
            
            var newdaytime=Date.parse(new Date(newday))/1000;//上个月1号的时间戳
            switch(time){
                case '1':
                timestamp=`khm_contact_book.create_time>\${today}`;
                break;
                case '2':
                timestamp=`khm_contact_book.create_time<\${today} and khm_contact_book.create_time>\${today-86400}`
                break;
                case '3':
                timestamp=`khm_contact_book.create_time>\${today-86400*6}`;
                break;
                case '4':
                timestamp=`khm_contact_book.create_time>\${today-86400*29}`;
                break;
                case '5':
                timestamp=`khm_contact_book.create_time>\${today-86400*day_1}`;
                break;
                case '6':
                timestamp=`khm_contact_book.create_time<\${today-86400*day_1} and khm_contact_book.create_time>\${newdaytime}`;
                break;
            }
            var data=`khm_contact_book.create_user=\${aid_2} and \${timestamp}`
            if (aid_2==''||aid_2==undefined) {
                data=`khm_contact_book.is_del <> 1 and \${timestamp}`
            }
            var datas={
                    limit:page_size,
                    filter:data
                }
                getList_2(datas);
                ykp.setCookie(\"aid\",\"\",(1/24));
                ykp.setCookie(\"time\",\"\",(1/24));
        //公司详情中跳转过来
        }else if (ykp.getCookie('detailsId')&&ykp.getCookie!=('')) {
            var id=ykp.getCookie('detailsId');
            var data={
                limit:page_size,
                filter:`khm_contact_book.id = \${id}`
            }
            getList_2(data);
             
        }else if (ykp.getCookie(\"titleTask\")) {
            //data=`khm_contact_book.is_del <> 1 and khm_contact_book.phone = '' and khm_contact_book.username != ''`;
            data = `(khm_contact_book.phone = '' OR khm_contact_address.address IS NULL)`;
            var data={
                limit:page_size,
                filter:data
            }
            getList_2(data);
             ykp.setCookie(\"titleTask\",'')
        }else{
            //页面初始化
           \t\$('[pts=0]').val('');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
            getList();
        }
    }
        \$('#flush').click(function(){
\t\t\tfilter = 'khm_contact_book.is_del <> 1';//过滤条件
\t\t\t\$('[pts=0]').val('');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetList();
\t\t})

        
        
        //跳转的列表方法
        function getList_2(data){
             ykp.list({
                url:'/api/api_contact_book/grid',
                method:'post',
                data:data,
                pageBar: {id: '#pageBar'},
                loadList:function(res) {
                    if(res.data.items == \"\") {
                        setTimeout(function(){
                            ykp.prompt('暂无数据！');
                        },1000);
                        \$('#dynamic-table_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
                        return false;
                    }else{
                        cs.close();
                        addList(res);
                       
                    }
                }
            })
        }
        

        //切换每页显示的条目数
        changePageNum();
        function changePageNum(){
            \$('#changePageNum').change(function() {
                page_size = \$(this).val();
                getList();
            })
        }
        
        //普通搜索
        function generalSearch(){
        \tvar data = {
\t\t\t\turl:'/api/api_contact_book/grid',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
                    limit:page_size,
                    order: order
                }
\t\t\t};

        \tcs.doSearch('._search',data,'filter',false,function(res,_filter) {
                filter = _filter;
        \t\tif(res.data.items == \"\") {
                    setTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
                    \$('#dynamic-table_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');;
                    return;
                }
                addList(res);
        \t},'khm_contact_book.is_del =0');
        }
        
        //高级搜索
        function advancedSearch(){
            console.log(222);
            var data = {
                url: '/api/api_contact_book/grid',
                methods: 'post',
                data: {
                    limit:page_size,
                    order:order
                }
            }

            cs.hSearch('.search1', data, 'filter', false, function(res,_filter) {
                \$('#topTool input').val('');
                filter = _filter;
                \$('.in').click();
                \$('#heightsearch').removeClass('active');
                \$(\"#heightsearch1\").slideUp();
                if(res.data.items == \"\") {
                     setTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
                    \$('#dynamic-table_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
                    return;
                }
                
                addList(res);
                
            },'khm_contact_book.is_del = 0')
        }

        //高级搜索按钮
        cs.showHeightSearch('#heightsearch', '#heightsearch1');

        //时间插件
        // cs.timeplug();

        //获取联系人列表数据
        function getList() {
            advancedSearch();
            generalSearch();
        \tykp.list({
                url:'/api/api_contact_book/grid',
        \t\tmethod:'post',
        \t\tdata:{
        \t\t\tlimit:page_size,
                    filter:filter,
                    order: order
        \t\t},
        \t\tpageBar: {id: '#pageBar'},
\t\t\t\tloadList:function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function(){
\t                        ykp.prompt('暂无数据');
\t                    },1000);
\t\t\t\t\t\t\$('#dynamic-table_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');;
\t\t\t\t\t\treturn;
\t\t\t\t\t}
                    addList(res);
\t\t\t\t}
        \t})
        }
        
        //将联系人列表数据放入table中
        function addList(res) {
        \tvar data = res.data.items;
        \tvar html = [];
        \tvar sexArr = ['男','女','未知'];
            var hzstatus = ['未合作','合作中','已解决'];
        \tvar datahtml = \"<p align='left'>aaaa123aaaaaa<br/>13213</p>\";
        \t//console.log(data.length);
//      \t'+cs.getRemark(data[i]['Remark'])+'
            var styles = [];
            \$('#dynamic-table th').each(function(i,e){
                styles.push(\$(this).css('display'));
            });

        \tfor(var i in data) {
        \t\thtml.push('<tr data-id=\"'+data[i]['khm_contact_book.id']+'\"  data-user=\"'+data[i]['khm_contact_book.create_user']+'\">',
                            '<td class=\"center\">',
                               '<label class=\"pos-rel\">',
                                    '<a contentAuthority=\"123\"> <span style=\"cursor: pointer\" title=\"详情\" class=\"lbl btOrange _edit\"><i class=\"fa fa-info\"></i></span></a> ',
                                    '<a contentAuthority=\"124\"> <span style=\"cursor: pointer\" title=\"删除\" class=\"lbl  _del btRed\"><i class=\"fa fa-trash-o\"></i></span></a>',
                                '</label>',
                            '</td>',
                            '<td data-num=\"1\" style=\"display:'+ styles[1] +';\">',
                                '<span>'+data[i]['khm_contact_book.username']+'</span>',
                           ' </td>',
                            '<td data-num=\"2\" style=\"display:'+ styles[2] +';\"><span class=\"sex\">' +sexArr[--data[i]['khm_contact_book.sex']]+ '</span></td>',
                            '<td data-num=\"3\" style=\"display:'+ styles[3] +';\" data-cid=\"'+data[i]['khm_contact_book.customer_id']+'\"><a class=\"customerDetail pos-rel\" href=\"javascript:void(0);\">'+data[i]['khm_customer.name']+'</a>',
                            '<label class=\"pos-rel\"> <i class=\"iconBnt fa fa-info-circle\" style=\"color:'+(data[i]['Remark'].length > 0 ? 'red' : \"\")+'\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"'+cs.getRemark(data[i]['Remark'])+'\" ></i></label></td>',
                            '<td data-num=\"4\" style=\"display:'+ styles[4] +';\"><span>'+hzstatus[data[i]['khm_customer.status']]+'</span></td>',
                            '<td data-num=\"5\" style=\"display:'+ styles[5] +';\"><span>'+data[i]['khm_contact_book.phone']+'</span></td>',
                            '<td data-num=\"6\" style=\"display:'+ styles[6] +';\"><span>'+data[i]['khm_contact_book.telephone']+'</span></td>',
                            '<td data-num=\"7\" style=\"display:'+ styles[7] +';\"><span>'+data[i]['khm_contact_book.qq']+'</span></td>',
                            '<td data-num=\"8\" style=\"display:'+ styles[8] +';\"><span>'+ (data[i]['khm_contact_book.main_user'] == 1 ? '是':'否')+'</span></td>',
                            '<td data-num=\"9\" style=\"display:'+ styles[9] +';\" ><span>'+(data[i]['khm_contact_book.is_main'] == 1 ? '是' : '否')+'</span></td>',
                            '<td data-num=\"10\" style=\"display:'+ styles[10] +';\">'+ (employees[data[i]['khm_contact_book.last_modify_user']] || \"\") +'</td>',
                            '<td data-num=\"11\" style=\"display:'+ styles[11] +';\">'+(data[i]['khm_contact_book.last_modify_time'] != 0 ? cs.getNowTime(data[i]['khm_contact_book.last_modify_time'],true) : \"\")+'</td>',
                            '<td data-num=\"12\" style=\"display:'+ styles[12] +';\">'+employees[data[i]['khm_contact_book.create_user']]+'</td>',
                            '<td data-num=\"13\" style=\"display:'+ styles[13] +';\">'+cs.getNowTime(data[i]['khm_contact_book.create_time'],true)+'</td>',
                            '<td data-num=\"14\" style=\"display:'+ styles[14] +';\">'+data[i]['khm_contact_book.num']+'</td>',
                        '</tr>') 
        \t}
        \t\$('#dynamic-table_data').html(html.join(''));
            \$('#num').append('<span>(去重后共：'+ res['data']['distinct'] +'条)</span>');
\t\t\t 
\t\t\tcs.getNodes([123,124]);

            //删除联系人
            deleteContract();
            //编辑联系人
            editContact();
            //客户详情
           \tcustom.get_custom_info();
            //备注
            custom.showReamrk();
            \$(\"[data-rel='tooltip']\").tooltip();
        }

        //删除联系人
        function deleteContract(){
            \$('._del').click(function() {
                var id = \$(this).parents('tr').attr('data-id');
                console.log(id)
                var create_user =  \$(this).parents('tr').attr('data-user');
                var uid = JSON.parse(ykp.getCookie('userinfo')).id;
                if(uid != create_user && ykp.getCookie('nodes').split(',').indexOf(uid) == -1) {
                \tykp.prompt('你不是负责人或者没有权限');
                \treturn false;
                }
                layui.use('layer',function() {
                \tvar layer = layui.layer;
                \tlayer.confirm('确认删除吗？', function(index){
\t\t\t\t         ykp.doAjax({
\t\t                    url:'/api/api_contact_book/del',
\t\t                    method:'post',
\t\t                    data:{
\t\t                        id:id,
\t\t                    },
\t\t                    success:function(res) {
\t\t                    \tykp.prompt('删除成功');
\t\t                    \tlayer.closeAll();
\t\t                        getList();
\t\t                    }
\t\t                })
\t\t\t\t       
\t\t\t\t    });
                })
               
            })
        }

        //编辑联系人
        function editContact(){
            \$('._edit').click(function() {
                var id = \$(this).parents('tr').attr('data-id');
                showMark('#template');
                \$('#showBox .title').html('详情');
                \$('#templateCon [company=\"1\"]').hide();
                \$('#templateCon [company=\"2\"]').show();
                \$('#templateCon [company=\"2\"]').select2({
\t\t\t\t\t\tallowClear: true
\t\t\t\t})
                for(var i in customers){
                    \$('#templateCon [addfield=\"customer_id\"]').append(new Option(customers[i],i));
                }

                addItem();//添加一条联系地址
                getinfofill()
                function getinfofill(cid){
                    cid = cid ? cid : id;
                        ykp.doAjax({
                    url:'/api/api_contact_book/get_address',
                    method:'post',
                    data:{
                        id:cid
                    },
                    success:function(res) {
                        var data = res.data;

                        \$('#templateCon [addfield]').each(function(i,e){
                            /*if(\$(this).attr('addfield') == 'username'){
                                \$(this).attr('disabled','disabled');
                            }*/
                            if(\$(this).attr('addfield') == 'customer_id'){
                                \$(this).val(data['customer_id']).trigger('change').attr('customer_id',data[\$(this).attr('addfield')]);
//                              \$(this).val(customers[data[\$(this).attr('addfield')]]).attr('customer_id',data[\$(this).attr('addfield')]);
                                return true;
                            }
                            \$(this).val(data[\$(this).attr('addfield')]);
                        });

                        //联系地址
                        var address = data['address_list'];
                        var address_html = [];
                        for(var i in address){
                            address_html.push(
                                `<tr data-id=\"\${address[i]['id']}\">
                                    <td><label class=\"decrease\" style=\"font-size:20px;text-align:center;width:10px;cursor:pointer; \">-</label></td>
                                    <td>
                                        <input type=\"text\" addfield=\"address\" value=\"\${address[i]['address']}\" address-id=\"\${address[i]['id']}\" style=\"width: 490px;\">
                                    </td>
                                </tr>`
                            );
                        }
                        \$('#templateCon tbody').html(address_html.join(''));
                        removeItem();

                        \$('#templateCon input[value=\"' + data['khm_contact_book.sex'] + '\"]').attr('checked','checked');

                        edit('/api/api_contact_book/edit',true,id);
                    }
                });

            }


                //添加时已手机号为准 关联其他数据
                \$('#templateCon [addfield=\"phone\"]').blur(function(){
                    var phone = \$(this).val().trim();
                    ykp.doAjax({
                        url:'/api/api_contact_book/info',
                        method:'post',
                        data:{
                            filter:'khm_contact_book.phone = ' + phone
                        },
                        success:function(res){
                            var data = res.data;
                            if(!data['khm_contact_book.id']){
                                return;
                            }
                            getinfofill(data['khm_contact_book.id'])

                        }
                    });
                });
            })
        }
\t\t

        //添加一条联系地址
        function addItem(){
            \$('#templateCon .increase').click(function(){
                \$(this).parents('table').find('tbody').append(
                    `<tr>
                        <td><label class=\"decrease\" style=\"font-size:20px;text-align:center;width:10px;cursor:pointer;\">-</label></td>
                        <td>
                            <input type=\"text\" addfield=\"address\" style=\"width: 490px;\">
                        </td>
                    </tr>`
                );

                removeItem();
            });
        }

        //删除一条联系地址
        function removeItem(){
            \$('#templateCon .decrease').unbind('click').click(function(){
            \tvar id = \$(this).parents('tr').attr('data-id');
            \tconsole.log(id)
            \tvar _this = \$(this);
            \tif(id){
            \t\tykp.doAjax({
            \t\t\turl:\"/api/api_contact_book/del_address\",
            \t\t\tmethod:\"post\",
            \t\t\tdata:{
            \t\t\t\tid:id
            \t\t\t},
            \t\t\tsuccess:function(res){
            \t\t\t\t_this.parents('tr').remove();
            \t\t\t}
            \t\t})
            \t}else{
            \t\t\$(this).parents('tr').remove();
            \t}
                
            });
        }

        //添加联系人功能
        addRecord()
        function addRecord() {
            \$('#addItem').click(function () {
                showMark('#template');          
\t\t\t    \$('#showBox .title').text('添加联系人');

                addItem();//添加一条联系地址
                    
                \$('#templateCon [company=\"2\"]').show();
                \$('#templateCon [company=\"1\"]').hide();

                \$('#templateCon [company=\"2\"]').select2({
\t\t\t\t\t\tallowClear: true
\t\t\t\t})
                for(var i in customers){
                    \$('#templateCon [addfield=\"customer_id\"]').append(new Option(customers[i],i));
                }

                //添加时已手机号为准 关联其他数据
                \$('#templateCon [addfield=\"phone\"]').blur(function(){
                    var phone = \$(this).val().trim();

                    ykp.doAjax({
                        url:'/api/api_contact_book/info',
                        method:'post',
                        data:{
                            filter:'khm_contact_book.phone = ' + phone
                        },
                        success:function(res){
                            var data = res.data;
                            if(data){
                                var field = '';
                                \$('#templateCon [addfield]').not('[addfield=\"customer_id\"],[addfield=\"address\"],[addfield=\"phone\"],:hidden').each(function(){
                                    field = 'khm_contact_book.' + \$(this).attr('addfield');
                                    \$(this).val(data[field]).attr('disabled','disabled');
                                });

                                \$('#templateCon [name=\"sex\"][value='+ data['khm_contact_book.sex'] +']').click();
                                \$('#templateCon [name=\"sex\"]').attr('disabled',true);

                            }
//                          if(!data){
//                              \$('#templateCon [addfield]').not('[addfield=\"customer_id\"],[addfield=\"address\"],[addfield=\"phone\"],:hidden').each(function(){
//                                  \$(this).val('').attr('disabled',false);
//                              });
//
//                              \$('#templateCon [name=\"sex\"]').attr('disabled',false);
//                              \$('#templateCon [name=\"sex\"][value=\"1\"]').click();
//                          }
                        }
                    });
                });

                edit('/api/api_contact_book/add');
            })
        }
\t\t
\t\t//添加 或者 编辑保存
\t\tfunction edit( url,status,id) {
\t\t\t \$('#templateBox .add').unbind('click').click(function() {
\t\t\t\tvar dataArr = {};

                if(status){
                    dataArr['id'] = id;
                }

\t\t\t\tvar Status = false;
                var address = [];
\t\t\t\t\$('#templateBox [addfield]').not(':hidden').each(function() {
                    if(\$(this).attr('addfield') == 'address'){
                        if(status){
                            address.push({id:\$(this).attr('address-id'),addr:\$(this).val().trim()});
                            return true;
                        }
                        address.push(\$(this).val().trim());
                        return true;
                    }
                    dataArr[\$(this).attr('addfield')] = \$(this).val();
\t\t\t\t});

                dataArr['address'] = JSON.stringify(address);
\t\t\t\tdataArr['sex'] = \$('#templateBox').find('input[type=\"radio\"]:checked').val();
              
\t\t\t\tvar result = ykp.getFormData('#templateCon', true);
\t\t\t\tif(!dataArr['phone']){
\t\t\t\t\tykp.prompt('手机号码不能为空！');
\t\t\t\t\treturn false;
\t\t\t\t}/*else if(!dataArr['customer_id']){
\t\t\t\t\tykp.prompt('企业名称不能为空！');
\t\t\t\t\treturn false;
\t\t\t\t}*/
\t\t\t\tif(result.status) {
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: url,
\t\t\t\t\t\tmethod:'post',
\t\t\t\t\t\tdata:dataArr,
\t\t\t\t\t\tsuccess:function(res) {
                            if(res.msg == 'bob is 250'){
                                bootbox.confirm('主要联系人已存在，是否替换？',function(flag){
                                    if(flag){
                                        ykp.doAjax({
                                            url:'/api/api_contact_book/change_is_main',
                                            method:'post',
                                            data:{customer_id:dataArr['customer_id']},
                                            success:function(res){
                                                ykp.doAjax({
                                                    url: url,
                                                    method:'post',
                                                    data:dataArr,
                                                    success:function(res){
                                                        ykp.prompt(status ? '编辑联系人成功' :'添加联系人成功');

                                                        setTimeout(function(){
                                                            cs.close();
                                                            getList();
                                                        },1000);
                                                    }
                                                });
                                            }
                                        });
                                    }
                                });
                                return;
                            }
\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t}
\t\t\t\t\t})
                }
\t\t\t})
\t\t}
\t
        //自定义列表
        cs.custorm_check('#dynamic-table', '#dynamic-table_data', true);

        //全选
        checkAll();
    });

    function checkAll(status) {
        \$(\"tbody input[name='check']\").each(function (i, n) {
            n.checked = status;
        });
    }
</script>";
    }

    public function getTemplateName()
    {
        return "admin/clientManage/contacts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 318,  337 => 317,  19 => 1,);
    }
}
/* <style type="text/css">*/
/*     #templateCon label{*/
/*         width:96px;*/
/*     }*/
/* */
/* </style>*/
/* <div class=" widget-main">*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <!-- <h3 class="header smaller lighter blue">联系人</h3> -->*/
/*                 <div class="row" style="margin-top: 20px;position:relative;" id="topTool">*/
/*                     <!--<h3 class="header smaller lighter blue">送单</h3>-->*/
/*                     <div class="col-sx-4"  style=" float: left;margin-right: 5px;">*/
/*                         <input type="text" pts="0" sear="khm_contact_book.username"  placeholder="姓名"  />*/
/*                     </div>*/
/*                     <div class="col-sx-4"  style=" float: left;margin-right: 5px;">*/
/*                         <input type="text" pts="0" sear="khm_customer.name"  placeholder="企业名称"  />*/
/*                     </div>*/
/*                      <div class="col-sx-4"  style=" float: left;margin-right: 5px;">*/
/*                         <input type="number" pts="0" sear="khm_contact_book.phone"  placeholder="手机" />*/
/*                     </div>*/
/*                      <div class="col-sx-4"  style=" float: left;margin-right: 5px;">*/
/*                         <input type="number" pts="0" sear="khm_contact_book.telephone"  placeholder="电话"  />*/
/*                     </div>*/
/*                      <div class="col-sx-4"  style=" float: left;margin-right: 5px;">*/
/*                         <input type="number" pts="0" sear="khm_contact_book.qq"  placeholder="QQ" />*/
/*                     </div>*/
/*                     <div class="col-sx-4"  style=" float: left;margin-right: 5px;">*/
/*                         <button type="button" title="搜索" class="_search btn btn-info btn-sm">*/
/*                             <i class="fa fa-search"></i>*/
/*                         </button>*/
/*                     </div>*/
/*                     <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                         <button id="heightsearch" title="高级搜索" type="button" class="btn btn-info btn-sm" style="background-color:#00c0ef !important;">*/
/*                             <i class="fa fa-filter"></i>*/
/*                         </button>*/
/*                     </div>*/
/*                     <div class="col-sx-4"  style=" float: left;margin-right: 5px;">*/
/*                          <button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/*                             <i class="fa fa-refresh"></i>*/
/*                         </button>*/
/*                     </div>*/
/*                     <div class="col-sx-4" contentAuthority="122" style=" float: left;margin-right: 5px; ">*/
/*                         <button type="button" title="添加" id="addItem" class="btn addBtn btn-info btn-sm" style="background:#32CD32 !important;border-color: #32CD32!important;">*/
/*                             <i class="fa fa-plus"></i>*/
/*                         </button>*/
/*                     </div>*/
/*                     <div class="col-sx-4" style=" float: left;margin-right: 5px;" contentAuthority="125">*/
/*                         <button type="button" id="mergeItem" title="合并重复联系人" class="btn btn-info btn-sm" style="background-color: #F7B824 !important; border-color:#F7B824 ; ">*/
/*                             <i class="fa fa-plus"></i>*/
/* */
/*                         </button>*/
/*                     </div>*/
/*                     <div class="col-sx-4" contentAuthority="303" style=" float: left; margin-right: 5px;">*/
/*                         <button type="button"  title="导出" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="exportfile moveToClue btn addBtn btn-info btn-sm position-relative">*/
/*                             <i class="fa fa-sign-out"></i>*/
/*                         </button>*/
/*                     </div>*/
/*                     */
/*                     <!--高级搜索-->*/
/*                     <div id="heightsearch1" class="col-sx-12" style="margin-top:30px;position: absolute; background: #fff; z-index: 1041;padding: 20px 10px; display: none;">*/
/*                         <div class="row">*/
/*                             <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                                 <label>姓名</label>*/
/*                                 <select>*/
/*                                     <option> = </option>*/
/*                                 </select>*/
/*                                 <input type="text" gjs=0 sear="khm_contact_book.username" />*/
/*                             </div>*/
/*                             <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                                 <label>性别</label>*/
/*                                 <select>*/
/*                                     <option> = </option>*/
/*                                 </select>*/
/*                                 <select gjs=0 data-type="gj" sear="khm_contact_book.sex" style="width:180px;">*/
/*                                     <option value="">请选择</option>*/
/*                                     <option value="1">男</option>*/
/*                                     <option value="2">女</option>*/
/*                                     <option value="3">未知</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                             <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                                 <label>企业名称</label>*/
/*                                 <select>*/
/*                                     <option> = </option>*/
/*                                 </select>*/
/*                                 <input type="text" gjs=0 sear="khm_customer.name" />*/
/*                             </div>*/
/*                             <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                                 <label>合作状态</label>*/
/*                                 <select>*/
/*                                     <option> = </option>*/
/*                                 </select>*/
/*                                 <select gjs=0 data-type="gj" sear="khm_customer.status" style="width:180px;">*/
/*                                     <option value="">请选择</option>*/
/*                                     <option value="0">未合作</option>*/
/*                                     <option value="1">合作中</option>*/
/*                                     <option value="2">已解决</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                             <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                                 <label>手机</label>*/
/*                                 <select>*/
/*                                     <option> = </option>*/
/*                                 </select>*/
/*                                 <input type="text" gjs=0 sear="khm_contact_book.phone" />*/
/*                             </div>*/
/*                             <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                                 <label>电话</label>*/
/*                                 <select>*/
/*                                     <option> = </option>*/
/*                                 </select>*/
/*                                 <input type="text" gjs=0 sear="khm_contact_book.telephone" />*/
/*                             </div>*/
/*                             <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                                 <label>QQ</label>*/
/*                                 <select>*/
/*                                     <option> = </option>*/
/*                                 </select>*/
/*                                 <input type="text" gjs=0 sear="khm_contact_book.qq" />*/
/*                             </div>*/
/*                             <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                                 <label>关键决策人</label>*/
/*                                 <select>*/
/*                                     <option> = </option>*/
/*                                 </select>*/
/*                                 <select gjs=0 data-type="gj" sear="khm_contact_book.main_user" style="width:180px;">*/
/*                                     <option value="">请选择</option>*/
/*                                     <option value="1">是</option>*/
/*                                     <option value="0">否</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                             <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                                 <label>主要联系人</label>*/
/*                                 <select>*/
/*                                     <option> = </option>*/
/*                                 </select>*/
/*                                 <select gjs=0 data-type="gj" sear="khm_contact_book.is_main" style="width:180px;">*/
/*                                     <option value="">请选择</option>*/
/*                                     <option value="1">是</option>*/
/*                                     <option value="0">否</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                             <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                                 <label>修改人</label>*/
/*                                 <select>*/
/*                                     <option> = </option>*/
/*                                 </select>*/
/*                                 <select style="margin:12px !important;width: 180px" sear="khm_contact_book.last_modify_user" gjs="3" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/*                                     <option value="">请选择</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                             <div class="col-sx-4" style="clear:both;padding-top:10px;text-align:center;">*/
/*                                 <button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/*                                 查询*/
/*                             </button>*/
/*                                 <button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/*                                    重置*/
/*                                 </button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div> */
/*                 </div>*/
/*                 <div class="custom_table">*/
/*                     <table id="dynamic-table">*/
/*                         <thead>*/
/*                         <tr class="thColor">*/
/*                            	<th class="hidden-480 center">操作</th>*/
/*                             <th data-num="1">姓名</th>*/
/*                             <th data-num="2">性别</th>*/
/*                             <th data-num="3" class="hidden-480">企业名称</th>*/
/*                             <th data-num="4" class="hidden-480">合作状态</th>*/
/*                             <th data-num="5" class="hidden-480">手机号码</th>*/
/*                             <th data-num="6" class="hidden-480">固定电话</th>*/
/*                             <th data-num="7" class="hidden-480">QQ</th>*/
/*                             <th data-num="8" class="hidden-480">关键决策人</th>*/
/*                             <th data-num="9" class="hidden-480">主要联系人</th>*/
/*                             <th data-num="10" class="hidden-480">修改人</th>*/
/*                             <th data-num="11" class="hidden-480">修改时间</th>*/
/*                             <th data-num="12" class="hidden-480">创建人</th>*/
/*                             <th data-num="13" class="hidden-480">创建时间</th>*/
/*                             <th data-num="14" class="hidden-480">企业数</th>*/
/*                         </tr>*/
/*                         </thead>*/
/* */
/*                         <tbody id="dynamic-table_data">*/
/* */
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*                 <div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 					<div align="left" style="padding-left: 15px; float: left; width: 20%;" id="num"></div>*/
/* 					<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 					<div id="pageBar" class="pagination"></div>*/
/* 					<div align="right" style="float: right;  width: 10%;">*/
/* 						<select style="width: 100px;" id="changePageNum">*/
/* 							<option value="10">每页10条</option>*/
/* 							<option value="20">每页20条</option>*/
/* 							<option value="50">每页50条</option>*/
/* 							<option value="100">每页100条</option>*/
/* 							<option value="200">每页200条</option>*/
/* 						</select>*/
/* 					</div>*/
/* 				</div>*/
/*             </div>*/
/* */
/*             <div class="row" id="template" style="display:none;">*/
/*                 <div class="col-sm-12">*/
/*                     <div class="widget-box">*/
/*                         <div style="margin-top:15px;">*/
/*                             <label><i class="reqired_label">*</i>手机号码： </label>*/
/*                             <input type="number" addfield="phone">*/
/*                             <label>企业名称：</label>*/
/*                             <input addfield="customer_id"  style="display:none;" company="1">*/
/*                             <select style="width: 180px !important;" addfield="customer_id" style="display:none;" company="2">*/
/*                                 <option value="">请选择</option>*/
/*                             </select>*/
/*                             */
/*                         </div>*/
/*                          <div style="margin-top:15px;">*/
/*                             <label>姓名：</label>*/
/*                             <input type="text" addfield="username">*/
/*                             <label>性别： </label>*/
/*                             <input name="sex" checked="true" value="1" type="radio" style="margin-right:5px;position:relative;top:2px;">男&nbsp;&nbsp;*/
/*                             <input  name="sex" type="radio" value="2" style="margin-right:5px;position:relative;top:2px;">女&nbsp;&nbsp;*/
/*                             <input  name="sex" type="radio" value="3" style="margin-right:5px;position:relative;top:2px;">未知*/
/*                         </div>*/
/*                          <div style="margin-top:15px;">*/
/*                             <label>固定电话：</label>*/
/*                             <input type="number" addfield="telephone">*/
/*                             <label>QQ： </label>*/
/*                             <input type="number" addfield="qq">*/
/*                         </div>*/
/*                          <div style="margin-top:15px;">*/
/*                             <label>主要联系人： </label>*/
/*                             <select style="width:180px;" addfield="is_main">*/
/*                                 <option value=""> ---请选择--- </option>*/
/*                                 <option value="1">是</option>*/
/*                                 <option value="0">否</option>*/
/*                             </select>*/
/*                             <label>关键决策人：</label>*/
/*                             <select style="width:180px;" addfield="main_user">*/
/*                                 <option value=""> ---请选择--- </option>*/
/*                                 <option value="1">是</option>*/
/*                                 <option value="0">否</option>*/
/*                             </select>*/
/*                         </div>*/
/*                         <div style="margin-top:15px;">*/
/*                            <div class="custom_table">*/
/*                                <table>*/
/*                                    <thead>*/
/*                                        <tr>*/
/*                                            <th style="width:10px;"><label class="increase" style="position:relative;cursor:pointer;font-size:20px;text-align:center;width:10px;">+</label></th>*/
/*                                            <th>联系地址</th>*/
/*                                        </tr>*/
/*                                    </thead>*/
/*                                    <tbody>*/
/*                                        */
/*                                    </tbody>*/
/*                                </table>*/
/*                            </div>*/
/*                         </div>*/
/*                        <div style="text-align:center;margin-top:15px;">*/
/*                             <span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/*                             <button class="sure_button add">*/
/*                                 <i class="fa fa-check" aria-hidden="true"></i>*/
/*                                 保存*/
/*                             </button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             */
/*             <div class="row" id="template1" style="display:none;">*/
/*                 <div class="col-sm-12">*/
/*                     <div class="space-12"></div>*/
/* */
/*                     <div class="widget-box">*/
/*                         <div class="widget-header widget-header-small">*/
/*                             <h5 id="editTitile" class="widget-title lighter">联系人信息</h5>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-xs-12">*/
/*                                 <!-- PAGE CONTENT BEGINS -->*/
/*                                 <form class="form-horizontal" role="form">*/
/*                                     <div class="form-group">*/
/*                                         <label>姓名：</label>*/
/*                                         <span addfield="username">12313</span>*/
/*                                         <label>性别： </label>*/
/*                                         <span addfield="sex"></span>*/
/*                                     </div>*/
/*                                      <div class="form-group">*/
/*                                      	<label>企业名称：</label>*/
/*                                         <span addfield="contact_user"></span>*/
/*                                         <label>手机号码： </label>*/
/*                                         <span addfield="phone"></span>*/
/*                                     </div>*/
/*                                      <div class="form-group">*/
/*                                      	<label>电话订花：</label>*/
/*                                         <span addfield="telephone"></span>*/
/*                                         <label>QQ： </label>*/
/*                                         <span addfield="qq"></span>*/
/*                                     </div>*/
/*                                      <div class="form-group">*/
/*                                      	<label>关键决策人：</label>*/
/*                                         <span addfield="main_user"></span>*/
/*                                         <label>主要联系人： </label>*/
/*                                         <span addfield="is_main"></span>*/
/*                                     </div>*/
/*                                 </form>*/
/*                             </div><!-- /.col -->*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% include 'admin/mark.html' %} {% include 'admin/customerDetail.html' %}*/
/*     </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* <script>*/
/*     jQuery(function ($) {*/
/*         cs.getNodes([122,125]);*/
/*     	var page_size = 10;//每页显示的条目数*/
/*         var filter = 'khm_contact_book.is_del = 0';//过滤条件*/
/*         var aid_2=ykp.getCookie("aid_2");*/
/*         var time=ykp.getCookie("time");*/
/*         var employees = {};//所有员工*/
/*         var customers = {};//所有企业*/
/* 		var order ='khm_contact_book.id desc';*/
/* */
/*         //导出功能*/
/*         cs.exportFile({*/
/*             url:"/api/api_contact_book/export",*/
/*             title:"联系人"*/
/*         });*/
/* 		*/
/*          //通用排序*/
/*         cs.general_sort({*/
/*             url: '/api/api_contact_book/grid',*/
/*             method: 'post',*/
/*             data: {*/
/*                 filter:'',*/
/*                 limit: page_size,*/
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
/*                 field:["","khm_contact_book.username","khm_contact_book.sex","khm_customer.name","khm_customer.status","khm_contact_book.phone",*/
/*                     "khm_contact_book.telephone","khm_contact_book.qq","khm_contact_book.main_user","khm_contact_book.is_main","khm_contact_book.last_modify_user","khm_contact_book.last_modify_time","khm_contact_book.create_user","khm_contact_book.create_time","khm_contact_book.num"*/
/*                 ]*/
/*             }]*/
/*         }, function(res, _sort_role) {*/
/*             sort_role = _sort_role;*/
/*             addList(res);*/
/*         });*/
/* */
/* 		$('#mergeItem').click(function() {*/
/* 			ykp.doAjax({*/
/* 				url:'/api/api_contact_book/merge_book',*/
/* 				method:"get",*/
/* 				data:{},*/
/* 				success:function(res) {*/
/* 					ykp.prompt('合并成功!');*/
/* 					getList();*/
/* 				}*/
/* 			})*/
/* 		})*/
/* */
/* */
/*         //获取所有员工*/
/*         ykp.doAjax({*/
/*             url:'/api/api_employees/f7',*/
/*             method:'post',*/
/*             async:false,*/
/*             data:{*/
/*                 select:'bmm_employees.id,bmm_employees.name'*/
/*             },*/
/*             success:function(res){*/
/*                 var data = res.data;*/
/* */
/*                 $('.advandced-search').select2({allowClear:true});*/
/*                 var option = '';*/
/* */
/*                 for(var i in data){*/
/*                 	if(data[i]['name']){*/
/*                      option+=`<option value="${data[i]['id']}">${data[i]['name']}</option>`;*/
/*                     employees[data[i]['id']] =data[i]['name'] ;*/
/*                 }*/
/*                 }*/
/*                 $('.advandced-search').append(option);*/
/*             }*/
/*         });*/
/* */
/*         //获取所有企业*/
/*         ykp.doAjax({*/
/*             url:'/api/api_customer/f7',*/
/*             method:'post',*/
/*             data:{*/
/*                 select:'khm_customer.id,khm_customer.name'*/
/*             },*/
/*             success:function(res){*/
/*                 var data = res.data;*/
/*                 for(var i in data){*/
/*                     customers[data[i]['id']] =data[i]['name'] ;*/
/*                 }*/
/*             }*/
/*         });*/
/* 		tspage();*/
/*         function tspage(){*/
/*         //接收首页跳转*/
/*         if(time!=""&&time!=undefined){*/
/*             var timestamp='';//条件*/
/*             var today=new Date().setHours(0,0,0,0)/1000;//今天零点的时间戳*/
/*             var day_1=cs.getNowTime(Date.parse(new Date())/1000).substr(-2)-1;//距离本月1号有多少天*/
/*             var lastmonthday_1=cs.getNowTime(Date.parse(new Date())/1000);*/
/*             var newday=lastmonthday_1.substring(0,4)+'-'+(lastmonthday_1.substring(5,7)-1)+'-01';*/
/*             if(lastmonthday_1.substring(5,7)==1){*/
/*                 newday=(lastmonthday_1.substring(0,4)-1)+'-12-01';*/
/*             }*/
/*             */
/*             var newdaytime=Date.parse(new Date(newday))/1000;//上个月1号的时间戳*/
/*             switch(time){*/
/*                 case '1':*/
/*                 timestamp=`khm_contact_book.create_time>${today}`;*/
/*                 break;*/
/*                 case '2':*/
/*                 timestamp=`khm_contact_book.create_time<${today} and khm_contact_book.create_time>${today-86400}`*/
/*                 break;*/
/*                 case '3':*/
/*                 timestamp=`khm_contact_book.create_time>${today-86400*6}`;*/
/*                 break;*/
/*                 case '4':*/
/*                 timestamp=`khm_contact_book.create_time>${today-86400*29}`;*/
/*                 break;*/
/*                 case '5':*/
/*                 timestamp=`khm_contact_book.create_time>${today-86400*day_1}`;*/
/*                 break;*/
/*                 case '6':*/
/*                 timestamp=`khm_contact_book.create_time<${today-86400*day_1} and khm_contact_book.create_time>${newdaytime}`;*/
/*                 break;*/
/*             }*/
/*             var data=`khm_contact_book.create_user=${aid_2} and ${timestamp}`*/
/*             if (aid_2==''||aid_2==undefined) {*/
/*                 data=`khm_contact_book.is_del <> 1 and ${timestamp}`*/
/*             }*/
/*             var datas={*/
/*                     limit:page_size,*/
/*                     filter:data*/
/*                 }*/
/*                 getList_2(datas);*/
/*                 ykp.setCookie("aid","",(1/24));*/
/*                 ykp.setCookie("time","",(1/24));*/
/*         //公司详情中跳转过来*/
/*         }else if (ykp.getCookie('detailsId')&&ykp.getCookie!=('')) {*/
/*             var id=ykp.getCookie('detailsId');*/
/*             var data={*/
/*                 limit:page_size,*/
/*                 filter:`khm_contact_book.id = ${id}`*/
/*             }*/
/*             getList_2(data);*/
/*              */
/*         }else if (ykp.getCookie("titleTask")) {*/
/*             //data=`khm_contact_book.is_del <> 1 and khm_contact_book.phone = '' and khm_contact_book.username != ''`;*/
/*             data = `(khm_contact_book.phone = '' OR khm_contact_address.address IS NULL)`;*/
/*             var data={*/
/*                 limit:page_size,*/
/*                 filter:data*/
/*             }*/
/*             getList_2(data);*/
/*              ykp.setCookie("titleTask",'')*/
/*         }else{*/
/*             //页面初始化*/
/*            	$('[pts=0]').val('');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/*             getList();*/
/*         }*/
/*     }*/
/*         $('#flush').click(function(){*/
/* 			filter = 'khm_contact_book.is_del <> 1';//过滤条件*/
/* 			$('[pts=0]').val('');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getList();*/
/* 		})*/
/* */
/*         */
/*         */
/*         //跳转的列表方法*/
/*         function getList_2(data){*/
/*              ykp.list({*/
/*                 url:'/api/api_contact_book/grid',*/
/*                 method:'post',*/
/*                 data:data,*/
/*                 pageBar: {id: '#pageBar'},*/
/*                 loadList:function(res) {*/
/*                     if(res.data.items == "") {*/
/*                         setTimeout(function(){*/
/*                             ykp.prompt('暂无数据！');*/
/*                         },1000);*/
/*                         $('#dynamic-table_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/*                         return false;*/
/*                     }else{*/
/*                         cs.close();*/
/*                         addList(res);*/
/*                        */
/*                     }*/
/*                 }*/
/*             })*/
/*         }*/
/*         */
/* */
/*         //切换每页显示的条目数*/
/*         changePageNum();*/
/*         function changePageNum(){*/
/*             $('#changePageNum').change(function() {*/
/*                 page_size = $(this).val();*/
/*                 getList();*/
/*             })*/
/*         }*/
/*         */
/*         //普通搜索*/
/*         function generalSearch(){*/
/*         	var data = {*/
/* 				url:'/api/api_contact_book/grid',*/
/* 				methods: 'post',*/
/* 				data: {*/
/*                     limit:page_size,*/
/*                     order: order*/
/*                 }*/
/* 			};*/
/* */
/*         	cs.doSearch('._search',data,'filter',false,function(res,_filter) {*/
/*                 filter = _filter;*/
/*         		if(res.data.items == "") {*/
/*                     setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/*                     $('#dynamic-table_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');;*/
/*                     return;*/
/*                 }*/
/*                 addList(res);*/
/*         	},'khm_contact_book.is_del =0');*/
/*         }*/
/*         */
/*         //高级搜索*/
/*         function advancedSearch(){*/
/*             console.log(222);*/
/*             var data = {*/
/*                 url: '/api/api_contact_book/grid',*/
/*                 methods: 'post',*/
/*                 data: {*/
/*                     limit:page_size,*/
/*                     order:order*/
/*                 }*/
/*             }*/
/* */
/*             cs.hSearch('.search1', data, 'filter', false, function(res,_filter) {*/
/*                 $('#topTool input').val('');*/
/*                 filter = _filter;*/
/*                 $('.in').click();*/
/*                 $('#heightsearch').removeClass('active');*/
/*                 $("#heightsearch1").slideUp();*/
/*                 if(res.data.items == "") {*/
/*                      setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/*                     $('#dynamic-table_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/*                     return;*/
/*                 }*/
/*                 */
/*                 addList(res);*/
/*                 */
/*             },'khm_contact_book.is_del = 0')*/
/*         }*/
/* */
/*         //高级搜索按钮*/
/*         cs.showHeightSearch('#heightsearch', '#heightsearch1');*/
/* */
/*         //时间插件*/
/*         // cs.timeplug();*/
/* */
/*         //获取联系人列表数据*/
/*         function getList() {*/
/*             advancedSearch();*/
/*             generalSearch();*/
/*         	ykp.list({*/
/*                 url:'/api/api_contact_book/grid',*/
/*         		method:'post',*/
/*         		data:{*/
/*         			limit:page_size,*/
/*                     filter:filter,*/
/*                     order: order*/
/*         		},*/
/*         		pageBar: {id: '#pageBar'},*/
/* 				loadList:function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function(){*/
/* 	                        ykp.prompt('暂无数据');*/
/* 	                    },1000);*/
/* 						$('#dynamic-table_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');;*/
/* 						return;*/
/* 					}*/
/*                     addList(res);*/
/* 				}*/
/*         	})*/
/*         }*/
/*         */
/*         //将联系人列表数据放入table中*/
/*         function addList(res) {*/
/*         	var data = res.data.items;*/
/*         	var html = [];*/
/*         	var sexArr = ['男','女','未知'];*/
/*             var hzstatus = ['未合作','合作中','已解决'];*/
/*         	var datahtml = "<p align='left'>aaaa123aaaaaa<br/>13213</p>";*/
/*         	//console.log(data.length);*/
/* //      	'+cs.getRemark(data[i]['Remark'])+'*/
/*             var styles = [];*/
/*             $('#dynamic-table th').each(function(i,e){*/
/*                 styles.push($(this).css('display'));*/
/*             });*/
/* */
/*         	for(var i in data) {*/
/*         		html.push('<tr data-id="'+data[i]['khm_contact_book.id']+'"  data-user="'+data[i]['khm_contact_book.create_user']+'">',*/
/*                             '<td class="center">',*/
/*                                '<label class="pos-rel">',*/
/*                                     '<a contentAuthority="123"> <span style="cursor: pointer" title="详情" class="lbl btOrange _edit"><i class="fa fa-info"></i></span></a> ',*/
/*                                     '<a contentAuthority="124"> <span style="cursor: pointer" title="删除" class="lbl  _del btRed"><i class="fa fa-trash-o"></i></span></a>',*/
/*                                 '</label>',*/
/*                             '</td>',*/
/*                             '<td data-num="1" style="display:'+ styles[1] +';">',*/
/*                                 '<span>'+data[i]['khm_contact_book.username']+'</span>',*/
/*                            ' </td>',*/
/*                             '<td data-num="2" style="display:'+ styles[2] +';"><span class="sex">' +sexArr[--data[i]['khm_contact_book.sex']]+ '</span></td>',*/
/*                             '<td data-num="3" style="display:'+ styles[3] +';" data-cid="'+data[i]['khm_contact_book.customer_id']+'"><a class="customerDetail pos-rel" href="javascript:void(0);">'+data[i]['khm_customer.name']+'</a>',*/
/*                             '<label class="pos-rel"> <i class="iconBnt fa fa-info-circle" style="color:'+(data[i]['Remark'].length > 0 ? 'red' : "")+'" data-rel="tooltip" data-placement="right" data-html="true" title="'+cs.getRemark(data[i]['Remark'])+'" ></i></label></td>',*/
/*                             '<td data-num="4" style="display:'+ styles[4] +';"><span>'+hzstatus[data[i]['khm_customer.status']]+'</span></td>',*/
/*                             '<td data-num="5" style="display:'+ styles[5] +';"><span>'+data[i]['khm_contact_book.phone']+'</span></td>',*/
/*                             '<td data-num="6" style="display:'+ styles[6] +';"><span>'+data[i]['khm_contact_book.telephone']+'</span></td>',*/
/*                             '<td data-num="7" style="display:'+ styles[7] +';"><span>'+data[i]['khm_contact_book.qq']+'</span></td>',*/
/*                             '<td data-num="8" style="display:'+ styles[8] +';"><span>'+ (data[i]['khm_contact_book.main_user'] == 1 ? '是':'否')+'</span></td>',*/
/*                             '<td data-num="9" style="display:'+ styles[9] +';" ><span>'+(data[i]['khm_contact_book.is_main'] == 1 ? '是' : '否')+'</span></td>',*/
/*                             '<td data-num="10" style="display:'+ styles[10] +';">'+ (employees[data[i]['khm_contact_book.last_modify_user']] || "") +'</td>',*/
/*                             '<td data-num="11" style="display:'+ styles[11] +';">'+(data[i]['khm_contact_book.last_modify_time'] != 0 ? cs.getNowTime(data[i]['khm_contact_book.last_modify_time'],true) : "")+'</td>',*/
/*                             '<td data-num="12" style="display:'+ styles[12] +';">'+employees[data[i]['khm_contact_book.create_user']]+'</td>',*/
/*                             '<td data-num="13" style="display:'+ styles[13] +';">'+cs.getNowTime(data[i]['khm_contact_book.create_time'],true)+'</td>',*/
/*                             '<td data-num="14" style="display:'+ styles[14] +';">'+data[i]['khm_contact_book.num']+'</td>',*/
/*                         '</tr>') */
/*         	}*/
/*         	$('#dynamic-table_data').html(html.join(''));*/
/*             $('#num').append('<span>(去重后共：'+ res['data']['distinct'] +'条)</span>');*/
/* 			 */
/* 			cs.getNodes([123,124]);*/
/* */
/*             //删除联系人*/
/*             deleteContract();*/
/*             //编辑联系人*/
/*             editContact();*/
/*             //客户详情*/
/*            	custom.get_custom_info();*/
/*             //备注*/
/*             custom.showReamrk();*/
/*             $("[data-rel='tooltip']").tooltip();*/
/*         }*/
/* */
/*         //删除联系人*/
/*         function deleteContract(){*/
/*             $('._del').click(function() {*/
/*                 var id = $(this).parents('tr').attr('data-id');*/
/*                 console.log(id)*/
/*                 var create_user =  $(this).parents('tr').attr('data-user');*/
/*                 var uid = JSON.parse(ykp.getCookie('userinfo')).id;*/
/*                 if(uid != create_user && ykp.getCookie('nodes').split(',').indexOf(uid) == -1) {*/
/*                 	ykp.prompt('你不是负责人或者没有权限');*/
/*                 	return false;*/
/*                 }*/
/*                 layui.use('layer',function() {*/
/*                 	var layer = layui.layer;*/
/*                 	layer.confirm('确认删除吗？', function(index){*/
/* 				         ykp.doAjax({*/
/* 		                    url:'/api/api_contact_book/del',*/
/* 		                    method:'post',*/
/* 		                    data:{*/
/* 		                        id:id,*/
/* 		                    },*/
/* 		                    success:function(res) {*/
/* 		                    	ykp.prompt('删除成功');*/
/* 		                    	layer.closeAll();*/
/* 		                        getList();*/
/* 		                    }*/
/* 		                })*/
/* 				       */
/* 				    });*/
/*                 })*/
/*                */
/*             })*/
/*         }*/
/* */
/*         //编辑联系人*/
/*         function editContact(){*/
/*             $('._edit').click(function() {*/
/*                 var id = $(this).parents('tr').attr('data-id');*/
/*                 showMark('#template');*/
/*                 $('#showBox .title').html('详情');*/
/*                 $('#templateCon [company="1"]').hide();*/
/*                 $('#templateCon [company="2"]').show();*/
/*                 $('#templateCon [company="2"]').select2({*/
/* 						allowClear: true*/
/* 				})*/
/*                 for(var i in customers){*/
/*                     $('#templateCon [addfield="customer_id"]').append(new Option(customers[i],i));*/
/*                 }*/
/* */
/*                 addItem();//添加一条联系地址*/
/*                 getinfofill()*/
/*                 function getinfofill(cid){*/
/*                     cid = cid ? cid : id;*/
/*                         ykp.doAjax({*/
/*                     url:'/api/api_contact_book/get_address',*/
/*                     method:'post',*/
/*                     data:{*/
/*                         id:cid*/
/*                     },*/
/*                     success:function(res) {*/
/*                         var data = res.data;*/
/* */
/*                         $('#templateCon [addfield]').each(function(i,e){*/
/*                             /*if($(this).attr('addfield') == 'username'){*/
/*                                 $(this).attr('disabled','disabled');*/
/*                             }*//* */
/*                             if($(this).attr('addfield') == 'customer_id'){*/
/*                                 $(this).val(data['customer_id']).trigger('change').attr('customer_id',data[$(this).attr('addfield')]);*/
/* //                              $(this).val(customers[data[$(this).attr('addfield')]]).attr('customer_id',data[$(this).attr('addfield')]);*/
/*                                 return true;*/
/*                             }*/
/*                             $(this).val(data[$(this).attr('addfield')]);*/
/*                         });*/
/* */
/*                         //联系地址*/
/*                         var address = data['address_list'];*/
/*                         var address_html = [];*/
/*                         for(var i in address){*/
/*                             address_html.push(*/
/*                                 `<tr data-id="${address[i]['id']}">*/
/*                                     <td><label class="decrease" style="font-size:20px;text-align:center;width:10px;cursor:pointer; ">-</label></td>*/
/*                                     <td>*/
/*                                         <input type="text" addfield="address" value="${address[i]['address']}" address-id="${address[i]['id']}" style="width: 490px;">*/
/*                                     </td>*/
/*                                 </tr>`*/
/*                             );*/
/*                         }*/
/*                         $('#templateCon tbody').html(address_html.join(''));*/
/*                         removeItem();*/
/* */
/*                         $('#templateCon input[value="' + data['khm_contact_book.sex'] + '"]').attr('checked','checked');*/
/* */
/*                         edit('/api/api_contact_book/edit',true,id);*/
/*                     }*/
/*                 });*/
/* */
/*             }*/
/* */
/* */
/*                 //添加时已手机号为准 关联其他数据*/
/*                 $('#templateCon [addfield="phone"]').blur(function(){*/
/*                     var phone = $(this).val().trim();*/
/*                     ykp.doAjax({*/
/*                         url:'/api/api_contact_book/info',*/
/*                         method:'post',*/
/*                         data:{*/
/*                             filter:'khm_contact_book.phone = ' + phone*/
/*                         },*/
/*                         success:function(res){*/
/*                             var data = res.data;*/
/*                             if(!data['khm_contact_book.id']){*/
/*                                 return;*/
/*                             }*/
/*                             getinfofill(data['khm_contact_book.id'])*/
/* */
/*                         }*/
/*                     });*/
/*                 });*/
/*             })*/
/*         }*/
/* 		*/
/* */
/*         //添加一条联系地址*/
/*         function addItem(){*/
/*             $('#templateCon .increase').click(function(){*/
/*                 $(this).parents('table').find('tbody').append(*/
/*                     `<tr>*/
/*                         <td><label class="decrease" style="font-size:20px;text-align:center;width:10px;cursor:pointer;">-</label></td>*/
/*                         <td>*/
/*                             <input type="text" addfield="address" style="width: 490px;">*/
/*                         </td>*/
/*                     </tr>`*/
/*                 );*/
/* */
/*                 removeItem();*/
/*             });*/
/*         }*/
/* */
/*         //删除一条联系地址*/
/*         function removeItem(){*/
/*             $('#templateCon .decrease').unbind('click').click(function(){*/
/*             	var id = $(this).parents('tr').attr('data-id');*/
/*             	console.log(id)*/
/*             	var _this = $(this);*/
/*             	if(id){*/
/*             		ykp.doAjax({*/
/*             			url:"/api/api_contact_book/del_address",*/
/*             			method:"post",*/
/*             			data:{*/
/*             				id:id*/
/*             			},*/
/*             			success:function(res){*/
/*             				_this.parents('tr').remove();*/
/*             			}*/
/*             		})*/
/*             	}else{*/
/*             		$(this).parents('tr').remove();*/
/*             	}*/
/*                 */
/*             });*/
/*         }*/
/* */
/*         //添加联系人功能*/
/*         addRecord()*/
/*         function addRecord() {*/
/*             $('#addItem').click(function () {*/
/*                 showMark('#template');          */
/* 			    $('#showBox .title').text('添加联系人');*/
/* */
/*                 addItem();//添加一条联系地址*/
/*                     */
/*                 $('#templateCon [company="2"]').show();*/
/*                 $('#templateCon [company="1"]').hide();*/
/* */
/*                 $('#templateCon [company="2"]').select2({*/
/* 						allowClear: true*/
/* 				})*/
/*                 for(var i in customers){*/
/*                     $('#templateCon [addfield="customer_id"]').append(new Option(customers[i],i));*/
/*                 }*/
/* */
/*                 //添加时已手机号为准 关联其他数据*/
/*                 $('#templateCon [addfield="phone"]').blur(function(){*/
/*                     var phone = $(this).val().trim();*/
/* */
/*                     ykp.doAjax({*/
/*                         url:'/api/api_contact_book/info',*/
/*                         method:'post',*/
/*                         data:{*/
/*                             filter:'khm_contact_book.phone = ' + phone*/
/*                         },*/
/*                         success:function(res){*/
/*                             var data = res.data;*/
/*                             if(data){*/
/*                                 var field = '';*/
/*                                 $('#templateCon [addfield]').not('[addfield="customer_id"],[addfield="address"],[addfield="phone"],:hidden').each(function(){*/
/*                                     field = 'khm_contact_book.' + $(this).attr('addfield');*/
/*                                     $(this).val(data[field]).attr('disabled','disabled');*/
/*                                 });*/
/* */
/*                                 $('#templateCon [name="sex"][value='+ data['khm_contact_book.sex'] +']').click();*/
/*                                 $('#templateCon [name="sex"]').attr('disabled',true);*/
/* */
/*                             }*/
/* //                          if(!data){*/
/* //                              $('#templateCon [addfield]').not('[addfield="customer_id"],[addfield="address"],[addfield="phone"],:hidden').each(function(){*/
/* //                                  $(this).val('').attr('disabled',false);*/
/* //                              });*/
/* //*/
/* //                              $('#templateCon [name="sex"]').attr('disabled',false);*/
/* //                              $('#templateCon [name="sex"][value="1"]').click();*/
/* //                          }*/
/*                         }*/
/*                     });*/
/*                 });*/
/* */
/*                 edit('/api/api_contact_book/add');*/
/*             })*/
/*         }*/
/* 		*/
/* 		//添加 或者 编辑保存*/
/* 		function edit( url,status,id) {*/
/* 			 $('#templateBox .add').unbind('click').click(function() {*/
/* 				var dataArr = {};*/
/* */
/*                 if(status){*/
/*                     dataArr['id'] = id;*/
/*                 }*/
/* */
/* 				var Status = false;*/
/*                 var address = [];*/
/* 				$('#templateBox [addfield]').not(':hidden').each(function() {*/
/*                     if($(this).attr('addfield') == 'address'){*/
/*                         if(status){*/
/*                             address.push({id:$(this).attr('address-id'),addr:$(this).val().trim()});*/
/*                             return true;*/
/*                         }*/
/*                         address.push($(this).val().trim());*/
/*                         return true;*/
/*                     }*/
/*                     dataArr[$(this).attr('addfield')] = $(this).val();*/
/* 				});*/
/* */
/*                 dataArr['address'] = JSON.stringify(address);*/
/* 				dataArr['sex'] = $('#templateBox').find('input[type="radio"]:checked').val();*/
/*               */
/* 				var result = ykp.getFormData('#templateCon', true);*/
/* 				if(!dataArr['phone']){*/
/* 					ykp.prompt('手机号码不能为空！');*/
/* 					return false;*/
/* 				}/*else if(!dataArr['customer_id']){*/
/* 					ykp.prompt('企业名称不能为空！');*/
/* 					return false;*/
/* 				}*//* */
/* 				if(result.status) {*/
/* 					ykp.doAjax({*/
/* 						url: url,*/
/* 						method:'post',*/
/* 						data:dataArr,*/
/* 						success:function(res) {*/
/*                             if(res.msg == 'bob is 250'){*/
/*                                 bootbox.confirm('主要联系人已存在，是否替换？',function(flag){*/
/*                                     if(flag){*/
/*                                         ykp.doAjax({*/
/*                                             url:'/api/api_contact_book/change_is_main',*/
/*                                             method:'post',*/
/*                                             data:{customer_id:dataArr['customer_id']},*/
/*                                             success:function(res){*/
/*                                                 ykp.doAjax({*/
/*                                                     url: url,*/
/*                                                     method:'post',*/
/*                                                     data:dataArr,*/
/*                                                     success:function(res){*/
/*                                                         ykp.prompt(status ? '编辑联系人成功' :'添加联系人成功');*/
/* */
/*                                                         setTimeout(function(){*/
/*                                                             cs.close();*/
/*                                                             getList();*/
/*                                                         },1000);*/
/*                                                     }*/
/*                                                 });*/
/*                                             }*/
/*                                         });*/
/*                                     }*/
/*                                 });*/
/*                                 return;*/
/*                             }*/
/* 							getList();*/
/* 							cs.close();*/
/* 						}*/
/* 					})*/
/*                 }*/
/* 			})*/
/* 		}*/
/* 	*/
/*         //自定义列表*/
/*         cs.custorm_check('#dynamic-table', '#dynamic-table_data', true);*/
/* */
/*         //全选*/
/*         checkAll();*/
/*     });*/
/* */
/*     function checkAll(status) {*/
/*         $("tbody input[name='check']").each(function (i, n) {*/
/*             n.checked = status;*/
/*         });*/
/*     }*/
/* </script>*/
