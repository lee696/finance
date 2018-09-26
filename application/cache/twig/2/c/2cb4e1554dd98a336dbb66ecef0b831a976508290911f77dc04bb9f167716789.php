<?php

/* admin/auditing/auditEntireSingle.html */
class __TwigTemplate_272553921b5c8e8d593ba5684fb20a2c87a8b312bdd76074d63d40923a7bdf6c extends Twig_Template
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
    a{
        position:relative;
    }
    #templateCon td,th{
        text-align: center;
        height:30px;
    }
</style>
<div class=\"widget-main\">
    <div class=\"row\">
        <!-- <h3 class=\"header smaller lighter blue\">整单审批</h3> -->
        <div class=\"actions\" id=\"topTool\">
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <div class=\"search\">
                    <input type=\"text\" class=\"search-input\"  sear=\"spm_approves.approve_code\" maxlength=\"15\" placeholder=\"审批编码\">
                </div>
            </div>
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <div class=\"search\">
                    <input type=\"text\" class=\"search-input\" sear=\"spm_approves.customer_name\" maxlength=\"15\" placeholder=\"企业名称\" autofocus />
                </div>
            </div>
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <div class=\"search\">
                    <input type=\"text\" class=\"search-input\" sear=\"spm_approves.customer_num\" maxlength=\"15\" placeholder=\"企业编码\">
                </div>
            </div>
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <button id=\"search\" title=\"搜索\"  class=\"btn btn-info btn-sm\">
                    <i class=\"fa fa-search\"></i>
                </button>
            </div>
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32!important;\">
                    <i class=\"fa fa-refresh\"></i>
                </button>
            </div>
            <div class=\"col-sx-4\" contentAuthority=\"190\" style=\" float: left;margin-right: 5px;\">
                <button id=\"plSp\" title=\"批量审批\" style=\"background: #32CD32 !important;border-color: #32CD32 !important;\" class=\"btn sp btn-info btn-sm\">
                    <i class=\"fa fa-check-circle-o\"></i>
                </button>
            </div>
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <div id=\"filterBtns\" style=\"display:inline-block;width:290px;\">
                    <a href=\"#\" class=\"\" style=\"background: #E6E6E6;\" data-status=\"all\">全部</a>
                    <a href=\"#\" class=\"\" data-status=\"1\"> 待审批</a>
                    <a href=\"#\" class=\"\" data-status=\"2\"> 已通过</a>
                    <a href=\"#\" class=\"\" data-status=\"3\"> 未通过</a>
                </div>
            </div>
        </div>
        <div class=\"auditing-data custom_table\">
            <table id=\"dynamic-table\">
                <thead>
                    <tr class=\"thColor\">
                        <th class=\"center\">
                            <label class=\"pos-rel\">
                                                <input type=\"checkbox\" class=\"ace\" onclick=\"checkAll(this.checked)\"/>
                                                <span class=\"lbl\"></span>
                                            </label>
                        </th>
                        <th>操作</th>
                        <th data-num=\"9\">企业名称</th>
                        <th data-num=\"10\">企业编码</th>
                        <th data-num=\"11\">服务月份</th>
                        <th data-num=\"13\">负责人</th>
                        <th data-num=\"1\">审批号码</th>
                        <th data-num=\"3\">提交员工</th>
                        <th data-num=\"4\">提交时间</th>
                        <th data-num=\"5\">审批员工</th>
                        <th data-num=\"6\">审批结果</th>
                        <th data-num=\"7\">审批时间</th>
                        <th data-num=\"8\">审批回复</th>
                    </tr>
                </thead>
                <tbody id=\"datalist\">

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

    <div class=\"label_popup\" id=\"feedBack\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
            <div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
                <div style=\"padding:15px;border-bottom:1px solid #ddd;\">
                    <span style=\"display: inline-block;\">请填写驳回原因</span>
                    <a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
                </div>
                <div style=\"padding: 10px 50px;\">
                    <input type=\"text\" width=\"200px\" style=\"margin: auto;\" id=\"labelName\" />
                    <!--<hr>-->
                </div>
                <div style=\"padding:15px;text-align:right;\">
                    <button class=\"close_label\">关闭</button>
                    <button class=\"hold\">保存</button>
                </div>
            </div>
        </div>
        ";
        // line 115
        $this->loadTemplate("admin/customerDetail.html", "admin/auditing/auditEntireSingle.html", 115)->display($context);
        echo " ";
        $this->loadTemplate("admin/mark.html", "admin/auditing/auditEntireSingle.html", 115)->display($context);
        // line 116
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script type=\"text/javascript\">
    \$(function() {
        if(cs.approve_authority({name:'整单',nodes:[190]})){
            \$('[contentAuthority=\"190\"]').show();
        }

    \tvar order ='spm_approves.approve_result asc,spm_approves.id desc';
        var pagesize = 10;
        var employees={};
        clickBtn();
        var filter = \"\";
        //获取所有员工
\t\tykp.doAjax({
\t\t\tasync:false,
\t\t\turl: '/api/api_employees/f7',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: 'bmm_employees.is_del <> 1',
\t\t\t\tselect: 'bmm_employees.id,bmm_employees.name'
\t\t\t},
\t\t\tsuccess: function(res) {
\t            var data = res.data;
\t              \$('.advandced-search').select2({allowClear:true});
\t              for(var i in data){
\t                  employees[data[i]['id']] =data[i]['name'] ;
\t                 \$('.advandced-search').append(new Option(data[i]['name']));   
\t             }
\t\t\t}
\t\t});\t
        //点击顶部  按钮时调用
        function clickBtn() {
            \$('#topTool').on('click', 'a', function(item) {
                if (!\$(this).hasClass('clc')) {
                    \$(this).addClass('clc').siblings().removeClass('clc');
                }
                var status = \$(this).attr('data-status');
                \$(this).addClass('active').siblings().removeClass('active');
                var keyWords = [];
                \$('.search-input').each(function(i,e){
                    if(\$(this).val().trim()){
                        keyWords.push(\$(this).attr('sear') + ' like \\'%' + \$(this).val().trim() + '%\\'');
                    }
                });
                if(\$('#search').attr('searStatsus')) {
                    getList('', status, keyWords); //已搜索点击状态
                } else {
                    getList('', status); //未搜索点击状态
                }
                return false;
            })
        }

\t\t\$('#flush').click(function(){
\t\t\t\$('#topTool input').val('');
\t\t\tfilter = '';
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetList();
\t\t})


        \$('#plSp').click(function() {
            var status = '',
\t\t\t\tn = 0,
\t\t\t\tStatu = false,
\t\t\t\tcoldata = []
\t\t\t\$('#datalist').find('input[type=\"checkbox\"]:checked').each(function(i) {
\t\t\t\tn++;
\t\t\t\tstatus = \$(this).parents('tr').attr('data-status') == 1 ? 2 : 1;
\t\t\t\t
\t\t\t\tif(\$(this).parents('tr').attr('data-status') == 3 || \$(this).parents('tr').attr('data-status') == 2) {
\t\t\t\t\tykp.prompt('审批过的不能批量审批!');
\t\t\t\t\tStatu = false;
\t\t\t\t\treturn false;
\t\t\t\t} else {
\t\t\t\t\tcoldata.push({
\t\t\t\t\t\tid: \$(this).parents('tr').attr('data-id'),
\t\t\t\t\t\tapprove_result: status
\t\t\t\t\t});
\t\t\t\t\tStatu = true;
\t\t\t\t}
\t\t\t})
\t\t\tif(n == 0) {
\t\t\t\tykp.prompt('请选择再审批！');
\t\t\t\treturn false;
\t\t\t} else {
\t\t\t\tif(Statu) {
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: \"/api/api_approves/batch_edit\",
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tdata: JSON.stringify(coldata),
\t\t\t\t\t\t\ttype:'15'
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tykp.prompt('审批成功');
\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t}
\t\t\t}
        })

        doSearch();

        function doSearch() {
            \$('#search').click(function() {
                \$(this).attr('searStatsus', true);
                var n = 0; //选中的数量
                var w = ''; //选中的状态
                \$('#topTool a').each(function() {
                    if(\$(this).hasClass('active')) {
                        n += 1;
                        w = \$(this).attr('data-status');
                    }
                })
                var keyWords = [];
                \$('.search-input').each(function(i,e){
                    if(\$(this).val().trim()){
                        keyWords.push(\$(this).attr('sear') + ' like \\'%' + \$(this).val().trim() + '%\\'');
                    }
                });
                if(keyWords.length <= 0 ){
                    ykp.prompt('请输入至少一个搜索条件');
                    return;
                }
//              filter = _filter;
                if(n == 0) {
                    getList('', '', keyWords);
                } else {
                    if(w != 'all') {
                        getList('', w, keyWords);
                    } else {
                        getList('', '', keyWords);
                    }
                }
            })
        }
        
        \$('#changePageNum').change(function() {
            pagesize = \$(this).val();
            ykp.setCookie('page_size', pagesize);
            if(!cs.getSpStatus('整单')) {
\t\t\t\tykp.prompt('暂时没有开启审批功能');
\t\t\t\treturn false;
\t\t\t}
            var n = 0; //选中的数量
                var w = ''; //选中的状态
                \$('#topTool a').each(function() {
                    if(\$(this).hasClass('active')) {
                        n += 1;
                        w = \$(this).attr('data-status');
                    }
                })
                var keyWords = [];
                \$('.search-input').each(function(i,e){
                    if(\$(this).val().trim()){
                        keyWords.push(\$(this).attr('sear') + ' like \\'%' + \$(this).val().trim() + '%\\'');
                    }
                });
                if(n == 0) {
                    getList('', '', keyWords);
                } else {
                    if(w != 'all') {
                        getList('', w, keyWords);
                    } else {
                        getList('', '', keyWords);
                    }
                }
//          getCustomerList(1);
        })
        \$('#filterBtns a').mouseover(function(){
            \$(this).addClass('over');
        })
        \$('#filterBtns a').mouseout(function(){
            \$(this).removeClass('over');
        })
        getList('','','',1);

        function getList(current, clickstatus, keyWords, isInit) {

            if(isInit){
    \t\t\tykp.setCookie(\"filter\", \"\");
    \t\t\tykp.setCookie(\"where\", \"\");
        \t}
            if(!cs.getSpStatus('整单')) {
                ykp.prompt('暂时没有开启审批功能');
                return false;
            }
            current = current ? current : 1;

            var data = {
                page_size: pagesize,
                current: current,
                type: 15,
                order:order,
                contentId: \"#datalist\", //默认排序
\t\t\t\tinitOrder: \"\", //初始化sort
\t\t\t\tdefaultOrder: order,
\t\t\t\tparams: [{
\t\t\t\t\tid: \"#dynamic-table\",
\t\t\t\t\tfield: [\"\",\"\",\"\", \"\", \"\", \"spm_approves.approve_code\", \"spm_approves.submit_employee_name\", \"spm_approves.submit_time\",
\t\t\t\t\t\t\"spm_approves.approve_result\", \"spm_approves.approve_time\", \"spm_approves.approve_reply\"]
\t\t\t\t}]
            }
            //判断是否有过滤   
            if(clickstatus && !isNaN(clickstatus)) {
                data.approve_result = clickstatus;
            }
            if(keyWords) {
                data.search = keyWords;
            }
            cs.spList(data, function(res,Order,_filter) {
                var data = res.data.items;
                filter = _filter;
                if(Order){
                \torder = Order;
                }
                if(data.length == 0) {
                    setTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"color:#7d7d7d !important;text-align:center !important;\" class=\"page\">暂无数据</div></td></tr>');
                } else {
                    //审批权限为true可以审批,为false不可审批
                    var spApp = cs.approve_authority({name:'整单',nodes:[191]});
                    var cxApp = cs.approve_authority({name:'整单',nodes:[257]});

                    var styles = [];
                    \$('#dynamic-table th').each(function(i,e){
                        styles.push(\$(this).css('display'));
                    });

                    var status = ['','待审批', '已通过', '未通过']; //审核状态
                    var statusColor = ['','#dfba49', '#45b6af', '#f3565d'];

                    var content = '';
                    for(var i in data) {
                        content += `<tr data-id=\"\${data[i]['spm_approves.id']}\" data-status=\"\${data[i]['spm_approves.approve_result']}\">
                                 <td class=\"center\">
                                <label class=\"pos-rel\">
                                    <input type=\"checkbox\" name=\"check\" class=\"ace\"/>
                                    <span class=\"lbl\"></span>
                                </label>
                            </td>
                         <td>
                         <label class=\"pos-rel\">
                        <a href=\"#\" class=\"btOrange sp\" data-status = \"1\" style=\"display: \${cxApp ? (data[i]['spm_approves.approve_result'] == 2 ? 'inline-block' : 'none') : 'none'};color:#fff !important\" contentAuthority=\"257\" title=\"撤销\"><i class=\"fa fa-rotate-left\"></i></a>
                        <a href=\"#\" class=\"btGreen sp\" data-status = \"2\" style=\"display: \${spApp ? (data[i]['spm_approves.approve_result'] == 1 ?'inline-block' : 'none') : 'none'};color:#fff !important\" contentAuthority=\"191\" title=\"通过\"><i class=\"fa fa-check-circle-o\"></i></a>
                        <a href=\"#\" class=\"btRed sp\" data-status = \"3\" style=\"display: \${spApp ? (data[i]['spm_approves.approve_result'] == 1 ?'inline-block' : 'none') : 'none'};color:#fff !important\" contentAuthority=\"191\" title=\"驳回\"><i class=\"fa fa-times-circle\"></i></a>
                   \t\t</label>
                   </td>
                    <td data-num=\"9\" style=\"display:\${styles[2]}\" data-cid=\"\${data[i]['spm_approves.customer_id']}\">
                        <a class=\"customerDetail pos-rel\" href=\"#\">\${data[i].submitted_data['khm_customer.name']}</a>
                        <label class=\"pos-rel\"> 
                            <i class=\"iconBnt fa fa-info-circle\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i>
                         </label>
                    </td>
                    <td data-num=\"10\" style=\"display:\${styles[3]}\">\${data[i].submitted_data['khm_customer.customer_num']}</td>
                    <td data-num=\"11\" style=\"display:\${styles[4]}\">\${data[i].submitted_data['jzm_service_info.time']}</td>
                    <td data-num=\"13\" style=\"display:\${styles[5]}\">\${data[i].submitted_data['jzm_service_info.fuze_id'] != '0' ? employees[data[i].submitted_data['jzm_service_info.fuze_id']] || \"\" : '无'}</td>
                    <td data-num=\"1\" style=\"display:\${styles[6]}\">\${data[i]['spm_approves.approve_code']}</td>
                    <td data-num=\"3\" style=\"display:\${styles[7]}\">\${data[i]['spm_approves.submit_employee_name']}</td>
                    <td data-num=\"4\" style=\"display:\${styles[8]}\">\${cs.getNowTime(data[i]['spm_approves.submit_time'],true)}</td>
                    <td data-num=\"5\" style=\"display:\${styles[9]}\">\${data[i]['approve_employee_name'] ? data[i]['approve_employee_name']['name'] : \"无\"}</td>
                    <td data-num=\"6\" style=\"display:\${styles[10]}\"><label class=\"label\" style=\" background:\${statusColor[data[i]['spm_approves.approve_result']]} \">\${status[data[i]['spm_approves.approve_result']]}</label></td>
                    <td data-num=\"7\" style=\"display:\${styles[11]}\">\${data[i]['spm_approves.approve_time'] != 0 ? cs.getNowTime(data[i]['spm_approves.approve_time'],true) : ''}</td>
                    <td data-num=\"8\" style=\"display:\${styles[12]}\">\${data[i]['spm_approves.approve_reply']}</td>
                </tr>`;
                    }

                    \$('#datalist').html(content);
                    custom.get_custom_info();
\t\t\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\t\t\tcustom.showReamrk();
                    \$(\"#datalist tr\").find('.sp').click(function() {
                        var status = \$(this).attr('data-status');
                        var id = \$(this).parents('tr').attr('data-id');
                        if(status != '0') {
                            changeStatus(status,id);
                        } 
                    })

                }
            },'整单')
            
            function changeStatus(status,id) {
                
                var data = {
                    url:'/api/api_approves/edit_status',
                    methods:'post',
                    data:{
                        id:id,
                        approve_result:status,
                        filter:filter
                    }
                }
                if(status == 3) {
                    \$('#feedBack').show();
                    \$('#feedBack .hold').click(function() {
                        var approve_reply = \$('#feedBack').find('input').val();
                        if(approve_reply == '') {
                            ykp.prompt('不能为空！');
                            return false;
                        }
                        data.data.approve_reply = approve_reply.trim();
                        data.data.approve_reply = approve_reply;
                        setStatus(data);
                        \$('.close_label').parents('.label_popup').fadeOut();
                    })
                    cs.closePop();
                } else if(status == 1){
//                  bootbox.confirm('确认撤销审批？', function(flag){
//                      if(flag){
//                          setStatus(data);
//                      }
//                  })
              \t\tlayui.use('layer', function() {
\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\tlayer.confirm('确认撤销审批？', function(flag) {
\t\t\t\t\t\t\tif(flag) {
\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t})
                 } else {
                    setStatus(data);
                }
                
            }
        }

        //自定义table
        cs.custorm_check('#dynamic-table', '#datalist', true);
        
        function setStatus(data) {
            ykp.doAjax({
                url:data.url,
                methods:data.methods,
                data:data.data,
                success:function(res) {
                    ykp.prompt('审批成功!');
                    getList();
                }
            })
        }

    });

    function checkAll(status) {
        \$(\"tbody input[name='check']\").each(function(i, n) {
            n.checked = status;
        });
    }
</script>";
    }

    public function getTemplateName()
    {
        return "admin/auditing/auditEntireSingle.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 116,  135 => 115,  19 => 1,);
    }
}
/* <style type="text/css">*/
/*     a{*/
/*         position:relative;*/
/*     }*/
/*     #templateCon td,th{*/
/*         text-align: center;*/
/*         height:30px;*/
/*     }*/
/* </style>*/
/* <div class="widget-main">*/
/*     <div class="row">*/
/*         <!-- <h3 class="header smaller lighter blue">整单审批</h3> -->*/
/*         <div class="actions" id="topTool">*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <div class="search">*/
/*                     <input type="text" class="search-input"  sear="spm_approves.approve_code" maxlength="15" placeholder="审批编码">*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <div class="search">*/
/*                     <input type="text" class="search-input" sear="spm_approves.customer_name" maxlength="15" placeholder="企业名称" autofocus />*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <div class="search">*/
/*                     <input type="text" class="search-input" sear="spm_approves.customer_num" maxlength="15" placeholder="企业编码">*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <button id="search" title="搜索"  class="btn btn-info btn-sm">*/
/*                     <i class="fa fa-search"></i>*/
/*                 </button>*/
/*             </div>*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32!important;">*/
/*                     <i class="fa fa-refresh"></i>*/
/*                 </button>*/
/*             </div>*/
/*             <div class="col-sx-4" contentAuthority="190" style=" float: left;margin-right: 5px;">*/
/*                 <button id="plSp" title="批量审批" style="background: #32CD32 !important;border-color: #32CD32 !important;" class="btn sp btn-info btn-sm">*/
/*                     <i class="fa fa-check-circle-o"></i>*/
/*                 </button>*/
/*             </div>*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <div id="filterBtns" style="display:inline-block;width:290px;">*/
/*                     <a href="#" class="" style="background: #E6E6E6;" data-status="all">全部</a>*/
/*                     <a href="#" class="" data-status="1"> 待审批</a>*/
/*                     <a href="#" class="" data-status="2"> 已通过</a>*/
/*                     <a href="#" class="" data-status="3"> 未通过</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="auditing-data custom_table">*/
/*             <table id="dynamic-table">*/
/*                 <thead>*/
/*                     <tr class="thColor">*/
/*                         <th class="center">*/
/*                             <label class="pos-rel">*/
/*                                                 <input type="checkbox" class="ace" onclick="checkAll(this.checked)"/>*/
/*                                                 <span class="lbl"></span>*/
/*                                             </label>*/
/*                         </th>*/
/*                         <th>操作</th>*/
/*                         <th data-num="9">企业名称</th>*/
/*                         <th data-num="10">企业编码</th>*/
/*                         <th data-num="11">服务月份</th>*/
/*                         <th data-num="13">负责人</th>*/
/*                         <th data-num="1">审批号码</th>*/
/*                         <th data-num="3">提交员工</th>*/
/*                         <th data-num="4">提交时间</th>*/
/*                         <th data-num="5">审批员工</th>*/
/*                         <th data-num="6">审批结果</th>*/
/*                         <th data-num="7">审批时间</th>*/
/*                         <th data-num="8">审批回复</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody id="datalist">*/
/* */
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         <div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/*             <div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
/*             <!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/*             <div id="pageBar" class="pagination"></div>*/
/*             <div align="right" style="float: right;  width: 10%;">*/
/*                 <select style="width: 100px;" id="changePageNum">*/
/*                     <option value="10">每页10条</option>*/
/*                     <option value="20">每页20条</option>*/
/*                     <option value="50">每页50条</option>*/
/*                     <option value="100">每页100条</option>*/
/*                     <option value="200">每页200条</option>*/
/*                 </select>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="label_popup" id="feedBack" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/*             <div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/*             box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/*                 <div style="padding:15px;border-bottom:1px solid #ddd;">*/
/*                     <span style="display: inline-block;">请填写驳回原因</span>*/
/*                     <a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/*                 </div>*/
/*                 <div style="padding: 10px 50px;">*/
/*                     <input type="text" width="200px" style="margin: auto;" id="labelName" />*/
/*                     <!--<hr>-->*/
/*                 </div>*/
/*                 <div style="padding:15px;text-align:right;">*/
/*                     <button class="close_label">关闭</button>*/
/*                     <button class="hold">保存</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% include 'admin/customerDetail.html' %} {% include 'admin/mark.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script type="text/javascript">*/
/*     $(function() {*/
/*         if(cs.approve_authority({name:'整单',nodes:[190]})){*/
/*             $('[contentAuthority="190"]').show();*/
/*         }*/
/* */
/*     	var order ='spm_approves.approve_result asc,spm_approves.id desc';*/
/*         var pagesize = 10;*/
/*         var employees={};*/
/*         clickBtn();*/
/*         var filter = "";*/
/*         //获取所有员工*/
/* 		ykp.doAjax({*/
/* 			async:false,*/
/* 			url: '/api/api_employees/f7',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: 'bmm_employees.is_del <> 1',*/
/* 				select: 'bmm_employees.id,bmm_employees.name'*/
/* 			},*/
/* 			success: function(res) {*/
/* 	            var data = res.data;*/
/* 	              $('.advandced-search').select2({allowClear:true});*/
/* 	              for(var i in data){*/
/* 	                  employees[data[i]['id']] =data[i]['name'] ;*/
/* 	                 $('.advandced-search').append(new Option(data[i]['name']));   */
/* 	             }*/
/* 			}*/
/* 		});	*/
/*         //点击顶部  按钮时调用*/
/*         function clickBtn() {*/
/*             $('#topTool').on('click', 'a', function(item) {*/
/*                 if (!$(this).hasClass('clc')) {*/
/*                     $(this).addClass('clc').siblings().removeClass('clc');*/
/*                 }*/
/*                 var status = $(this).attr('data-status');*/
/*                 $(this).addClass('active').siblings().removeClass('active');*/
/*                 var keyWords = [];*/
/*                 $('.search-input').each(function(i,e){*/
/*                     if($(this).val().trim()){*/
/*                         keyWords.push($(this).attr('sear') + ' like \'%' + $(this).val().trim() + '%\'');*/
/*                     }*/
/*                 });*/
/*                 if($('#search').attr('searStatsus')) {*/
/*                     getList('', status, keyWords); //已搜索点击状态*/
/*                 } else {*/
/*                     getList('', status); //未搜索点击状态*/
/*                 }*/
/*                 return false;*/
/*             })*/
/*         }*/
/* */
/* 		$('#flush').click(function(){*/
/* 			$('#topTool input').val('');*/
/* 			filter = '';*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getList();*/
/* 		})*/
/* */
/* */
/*         $('#plSp').click(function() {*/
/*             var status = '',*/
/* 				n = 0,*/
/* 				Statu = false,*/
/* 				coldata = []*/
/* 			$('#datalist').find('input[type="checkbox"]:checked').each(function(i) {*/
/* 				n++;*/
/* 				status = $(this).parents('tr').attr('data-status') == 1 ? 2 : 1;*/
/* 				*/
/* 				if($(this).parents('tr').attr('data-status') == 3 || $(this).parents('tr').attr('data-status') == 2) {*/
/* 					ykp.prompt('审批过的不能批量审批!');*/
/* 					Statu = false;*/
/* 					return false;*/
/* 				} else {*/
/* 					coldata.push({*/
/* 						id: $(this).parents('tr').attr('data-id'),*/
/* 						approve_result: status*/
/* 					});*/
/* 					Statu = true;*/
/* 				}*/
/* 			})*/
/* 			if(n == 0) {*/
/* 				ykp.prompt('请选择再审批！');*/
/* 				return false;*/
/* 			} else {*/
/* 				if(Statu) {*/
/* 					ykp.doAjax({*/
/* 						url: "/api/api_approves/batch_edit",*/
/* 						method: 'post',*/
/* 						data: {*/
/* 							data: JSON.stringify(coldata),*/
/* 							type:'15'*/
/* 						},*/
/* 						success: function(res) {*/
/* 							ykp.prompt('审批成功');*/
/* 							getList();*/
/* 						}*/
/* 					})*/
/* 				}*/
/* 			}*/
/*         })*/
/* */
/*         doSearch();*/
/* */
/*         function doSearch() {*/
/*             $('#search').click(function() {*/
/*                 $(this).attr('searStatsus', true);*/
/*                 var n = 0; //选中的数量*/
/*                 var w = ''; //选中的状态*/
/*                 $('#topTool a').each(function() {*/
/*                     if($(this).hasClass('active')) {*/
/*                         n += 1;*/
/*                         w = $(this).attr('data-status');*/
/*                     }*/
/*                 })*/
/*                 var keyWords = [];*/
/*                 $('.search-input').each(function(i,e){*/
/*                     if($(this).val().trim()){*/
/*                         keyWords.push($(this).attr('sear') + ' like \'%' + $(this).val().trim() + '%\'');*/
/*                     }*/
/*                 });*/
/*                 if(keyWords.length <= 0 ){*/
/*                     ykp.prompt('请输入至少一个搜索条件');*/
/*                     return;*/
/*                 }*/
/* //              filter = _filter;*/
/*                 if(n == 0) {*/
/*                     getList('', '', keyWords);*/
/*                 } else {*/
/*                     if(w != 'all') {*/
/*                         getList('', w, keyWords);*/
/*                     } else {*/
/*                         getList('', '', keyWords);*/
/*                     }*/
/*                 }*/
/*             })*/
/*         }*/
/*         */
/*         $('#changePageNum').change(function() {*/
/*             pagesize = $(this).val();*/
/*             ykp.setCookie('page_size', pagesize);*/
/*             if(!cs.getSpStatus('整单')) {*/
/* 				ykp.prompt('暂时没有开启审批功能');*/
/* 				return false;*/
/* 			}*/
/*             var n = 0; //选中的数量*/
/*                 var w = ''; //选中的状态*/
/*                 $('#topTool a').each(function() {*/
/*                     if($(this).hasClass('active')) {*/
/*                         n += 1;*/
/*                         w = $(this).attr('data-status');*/
/*                     }*/
/*                 })*/
/*                 var keyWords = [];*/
/*                 $('.search-input').each(function(i,e){*/
/*                     if($(this).val().trim()){*/
/*                         keyWords.push($(this).attr('sear') + ' like \'%' + $(this).val().trim() + '%\'');*/
/*                     }*/
/*                 });*/
/*                 if(n == 0) {*/
/*                     getList('', '', keyWords);*/
/*                 } else {*/
/*                     if(w != 'all') {*/
/*                         getList('', w, keyWords);*/
/*                     } else {*/
/*                         getList('', '', keyWords);*/
/*                     }*/
/*                 }*/
/* //          getCustomerList(1);*/
/*         })*/
/*         $('#filterBtns a').mouseover(function(){*/
/*             $(this).addClass('over');*/
/*         })*/
/*         $('#filterBtns a').mouseout(function(){*/
/*             $(this).removeClass('over');*/
/*         })*/
/*         getList('','','',1);*/
/* */
/*         function getList(current, clickstatus, keyWords, isInit) {*/
/* */
/*             if(isInit){*/
/*     			ykp.setCookie("filter", "");*/
/*     			ykp.setCookie("where", "");*/
/*         	}*/
/*             if(!cs.getSpStatus('整单')) {*/
/*                 ykp.prompt('暂时没有开启审批功能');*/
/*                 return false;*/
/*             }*/
/*             current = current ? current : 1;*/
/* */
/*             var data = {*/
/*                 page_size: pagesize,*/
/*                 current: current,*/
/*                 type: 15,*/
/*                 order:order,*/
/*                 contentId: "#datalist", //默认排序*/
/* 				initOrder: "", //初始化sort*/
/* 				defaultOrder: order,*/
/* 				params: [{*/
/* 					id: "#dynamic-table",*/
/* 					field: ["","","", "", "", "spm_approves.approve_code", "spm_approves.submit_employee_name", "spm_approves.submit_time",*/
/* 						"spm_approves.approve_result", "spm_approves.approve_time", "spm_approves.approve_reply"]*/
/* 				}]*/
/*             }*/
/*             //判断是否有过滤   */
/*             if(clickstatus && !isNaN(clickstatus)) {*/
/*                 data.approve_result = clickstatus;*/
/*             }*/
/*             if(keyWords) {*/
/*                 data.search = keyWords;*/
/*             }*/
/*             cs.spList(data, function(res,Order,_filter) {*/
/*                 var data = res.data.items;*/
/*                 filter = _filter;*/
/*                 if(Order){*/
/*                 	order = Order;*/
/*                 }*/
/*                 if(data.length == 0) {*/
/*                     setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 					$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="color:#7d7d7d !important;text-align:center !important;" class="page">暂无数据</div></td></tr>');*/
/*                 } else {*/
/*                     //审批权限为true可以审批,为false不可审批*/
/*                     var spApp = cs.approve_authority({name:'整单',nodes:[191]});*/
/*                     var cxApp = cs.approve_authority({name:'整单',nodes:[257]});*/
/* */
/*                     var styles = [];*/
/*                     $('#dynamic-table th').each(function(i,e){*/
/*                         styles.push($(this).css('display'));*/
/*                     });*/
/* */
/*                     var status = ['','待审批', '已通过', '未通过']; //审核状态*/
/*                     var statusColor = ['','#dfba49', '#45b6af', '#f3565d'];*/
/* */
/*                     var content = '';*/
/*                     for(var i in data) {*/
/*                         content += `<tr data-id="${data[i]['spm_approves.id']}" data-status="${data[i]['spm_approves.approve_result']}">*/
/*                                  <td class="center">*/
/*                                 <label class="pos-rel">*/
/*                                     <input type="checkbox" name="check" class="ace"/>*/
/*                                     <span class="lbl"></span>*/
/*                                 </label>*/
/*                             </td>*/
/*                          <td>*/
/*                          <label class="pos-rel">*/
/*                         <a href="#" class="btOrange sp" data-status = "1" style="display: ${cxApp ? (data[i]['spm_approves.approve_result'] == 2 ? 'inline-block' : 'none') : 'none'};color:#fff !important" contentAuthority="257" title="撤销"><i class="fa fa-rotate-left"></i></a>*/
/*                         <a href="#" class="btGreen sp" data-status = "2" style="display: ${spApp ? (data[i]['spm_approves.approve_result'] == 1 ?'inline-block' : 'none') : 'none'};color:#fff !important" contentAuthority="191" title="通过"><i class="fa fa-check-circle-o"></i></a>*/
/*                         <a href="#" class="btRed sp" data-status = "3" style="display: ${spApp ? (data[i]['spm_approves.approve_result'] == 1 ?'inline-block' : 'none') : 'none'};color:#fff !important" contentAuthority="191" title="驳回"><i class="fa fa-times-circle"></i></a>*/
/*                    		</label>*/
/*                    </td>*/
/*                     <td data-num="9" style="display:${styles[2]}" data-cid="${data[i]['spm_approves.customer_id']}">*/
/*                         <a class="customerDetail pos-rel" href="#">${data[i].submitted_data['khm_customer.name']}</a>*/
/*                         <label class="pos-rel"> */
/*                             <i class="iconBnt fa fa-info-circle" data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>*/
/*                          </label>*/
/*                     </td>*/
/*                     <td data-num="10" style="display:${styles[3]}">${data[i].submitted_data['khm_customer.customer_num']}</td>*/
/*                     <td data-num="11" style="display:${styles[4]}">${data[i].submitted_data['jzm_service_info.time']}</td>*/
/*                     <td data-num="13" style="display:${styles[5]}">${data[i].submitted_data['jzm_service_info.fuze_id'] != '0' ? employees[data[i].submitted_data['jzm_service_info.fuze_id']] || "" : '无'}</td>*/
/*                     <td data-num="1" style="display:${styles[6]}">${data[i]['spm_approves.approve_code']}</td>*/
/*                     <td data-num="3" style="display:${styles[7]}">${data[i]['spm_approves.submit_employee_name']}</td>*/
/*                     <td data-num="4" style="display:${styles[8]}">${cs.getNowTime(data[i]['spm_approves.submit_time'],true)}</td>*/
/*                     <td data-num="5" style="display:${styles[9]}">${data[i]['approve_employee_name'] ? data[i]['approve_employee_name']['name'] : "无"}</td>*/
/*                     <td data-num="6" style="display:${styles[10]}"><label class="label" style=" background:${statusColor[data[i]['spm_approves.approve_result']]} ">${status[data[i]['spm_approves.approve_result']]}</label></td>*/
/*                     <td data-num="7" style="display:${styles[11]}">${data[i]['spm_approves.approve_time'] != 0 ? cs.getNowTime(data[i]['spm_approves.approve_time'],true) : ''}</td>*/
/*                     <td data-num="8" style="display:${styles[12]}">${data[i]['spm_approves.approve_reply']}</td>*/
/*                 </tr>`;*/
/*                     }*/
/* */
/*                     $('#datalist').html(content);*/
/*                     custom.get_custom_info();*/
/* 					$("[data-rel='tooltip']").tooltip();*/
/* 					custom.showReamrk();*/
/*                     $("#datalist tr").find('.sp').click(function() {*/
/*                         var status = $(this).attr('data-status');*/
/*                         var id = $(this).parents('tr').attr('data-id');*/
/*                         if(status != '0') {*/
/*                             changeStatus(status,id);*/
/*                         } */
/*                     })*/
/* */
/*                 }*/
/*             },'整单')*/
/*             */
/*             function changeStatus(status,id) {*/
/*                 */
/*                 var data = {*/
/*                     url:'/api/api_approves/edit_status',*/
/*                     methods:'post',*/
/*                     data:{*/
/*                         id:id,*/
/*                         approve_result:status,*/
/*                         filter:filter*/
/*                     }*/
/*                 }*/
/*                 if(status == 3) {*/
/*                     $('#feedBack').show();*/
/*                     $('#feedBack .hold').click(function() {*/
/*                         var approve_reply = $('#feedBack').find('input').val();*/
/*                         if(approve_reply == '') {*/
/*                             ykp.prompt('不能为空！');*/
/*                             return false;*/
/*                         }*/
/*                         data.data.approve_reply = approve_reply.trim();*/
/*                         data.data.approve_reply = approve_reply;*/
/*                         setStatus(data);*/
/*                         $('.close_label').parents('.label_popup').fadeOut();*/
/*                     })*/
/*                     cs.closePop();*/
/*                 } else if(status == 1){*/
/* //                  bootbox.confirm('确认撤销审批？', function(flag){*/
/* //                      if(flag){*/
/* //                          setStatus(data);*/
/* //                      }*/
/* //                  })*/
/*               		layui.use('layer', function() {*/
/* 						var layer = layui.layer;*/
/* 						layer.confirm('确认撤销审批？', function(flag) {*/
/* 							if(flag) {*/
/* 						layer.closeAll();*/
/* 						setStatus(data);*/
/* 							}*/
/* 						});*/
/* 					})*/
/*                  } else {*/
/*                     setStatus(data);*/
/*                 }*/
/*                 */
/*             }*/
/*         }*/
/* */
/*         //自定义table*/
/*         cs.custorm_check('#dynamic-table', '#datalist', true);*/
/*         */
/*         function setStatus(data) {*/
/*             ykp.doAjax({*/
/*                 url:data.url,*/
/*                 methods:data.methods,*/
/*                 data:data.data,*/
/*                 success:function(res) {*/
/*                     ykp.prompt('审批成功!');*/
/*                     getList();*/
/*                 }*/
/*             })*/
/*         }*/
/* */
/*     });*/
/* */
/*     function checkAll(status) {*/
/*         $("tbody input[name='check']").each(function(i, n) {*/
/*             n.checked = status;*/
/*         });*/
/*     }*/
/* </script>*/
