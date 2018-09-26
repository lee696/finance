<?php

/* admin/auditing/auditPosition.html */
class __TwigTemplate_e8c1b1e2dc01023312b548c0fa348c7a255597c80803857c4fbeb38948fe877a extends Twig_Template
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
        echo "<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<!-- <h3 class=\"header smaller lighter blue\">仓位审批</h3> -->
\t\t<div class=\"actions\" id=\"topTool\">
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<input type=\"text\" pts=0 sear=\"spm_approves.approve_code\" placeholder=\"审批号\">
            </div>
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<input type=\"text\" pts=0 sear=\"spm_approves.customer_name\" placeholder=\"企业名称\">
            </div>
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<input type=\"text\" pts=0 sear=\"spm_approves.customer_num\" placeholder=\"企业编码\">
            </div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <button id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
                    <i class=\"fa fa-search\"></i>
                </button>
            </div>
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32!important;\">
                    <i class=\"fa fa-refresh\"></i>
                </button>
            </div>
            <div class=\"col-sx-4\" contentAuthority=\"200\" style=\" float: left;margin-right: 5px;\">
                <button id=\"plSp\" title=\"批量审批\" class=\"btn sp btn-info btn-sm\" style=\"background:#32CD32 !important;border-color:#32CD32 !important;\">
\t\t\t\t\t<i class=\"fa fa-check-circle-o\"></i>
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
\t\t</div>
\t\t<div class=\"auditing-data custom_table\">
\t\t\t<table id=\"dynamic-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"thColor\">\t
\t\t\t\t\t\t<th class=\"center\">
\t\t\t\t\t\t\t<label class=\"pos-rel\">
                                <input type=\"checkbox\" class=\"ace\"/>
                                <span class=\"lbl\"></span>
                            </label>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t<th data-num=\"1\">审批号</th>
\t\t\t\t\t\t<th data-num=\"2\">企业名称</th>
\t\t\t\t\t\t<th data-num=\"3\">企业编码</th>
\t\t\t\t\t\t<th data-num=\"4\">原仓位编码</th>
\t\t\t\t\t\t<th data-num=\"5\">新仓位</th>
\t\t\t\t\t\t<th data-num=\"6\">负责人</th>
\t\t\t\t\t\t<th data-num=\"7\">转移时间</th>
\t\t\t\t\t\t<th data-num=\"8\">审批员工</th>
\t\t\t\t\t\t<th data-num=\"9\">审批结果</th>
\t\t\t\t\t\t<th data-num=\"10\">审批时间</th>
\t\t\t\t\t\t<th data-num=\"11\">审批回复</th>
\t\t\t\t\t\t<!-- <th data-num=\"7\">审批时间</th>
\t\t\t\t\t\t<th data-num=\"8\">审批回复</th> -->
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"datalist\">
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" id=\"num\"></div>
\t\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t\t<div id=\"pageBar\" class=\"pagination\"></div>
\t\t\t<div align=\"right\" style=\"float: right;  width: 10%;\">
\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"label_popup\" id=\"feedBack\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t\t    box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t<span style=\"display: inline-block;\">请填写驳回原因</span>
\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t</div>
\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t<input type=\"text\" width=\"200px\" style=\"margin: auto;\" id=\"labelName\" />
\t\t\t\t<!--<hr>-->
\t\t\t</div>
\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t<button class=\"close_label\">关闭</button>
\t\t\t\t<button class=\"hold\">保存</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 101
        $this->loadTemplate("admin/mark.html", "admin/auditing/auditPosition.html", 101)->display($context);
        // line 102
        echo "\t";
        $this->loadTemplate("admin/customerDetail.html", "admin/auditing/auditPosition.html", 102)->display($context);
        // line 103
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script type=\"text/javascript\">
\t\$(function() {
\t\tif(cs.approve_authority({name:'仓位',nodes:[200]})){
            \$('[contentAuthority=\"200\"]').show();
        }

\t\tvar order ='spm_approves.approve_result asc,spm_approves.id desc';
\t\tvar page_size = 10;//默认每页显示的条目数为 10 
\t\tvar approve_result = '';//审批状态
\t\tvar filter = '';//过滤条件

\t\t//自定义table
\t\tcs.custorm_check('#dynamic-table', '#datalist', true);
\t\t
\t\tvar employees={};
\t\t//获取所有员工
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

\t\t//改变每页显示的条目数
\t\tchangePage();
\t\tfunction changePage(){
\t\t\t\$('#changePageNum').change(function() {
\t\t\t\tpage_size = \$(this).val();
\t\t\t\tykp.setCookie('page_size',page_size);
\t\t\t\tgetList();
\t\t\t})
\t\t}

\t\t//查看全部 | 待审批 | 已通过 | 未通过
\t\tclickBtn();
\t\tfunction clickBtn() {
\t\t\t\$('#topTool').on('click', 'a', function(item) {
\t\t\t\tif (!\$(this).hasClass('clc')) {
                    \$(this).addClass('clc').siblings().removeClass('clc');
                }
\t\t\t\tvar status = \$(this).attr('data-status');
\t\t\t\tif(status != 'all'){
\t\t\t\t\tapprove_result = status;
\t\t\t\t}else{
\t\t\t\t\tapprove_result = '';\t
\t\t\t\t}
\t\t\t\tgetList();
\t\t\t})
\t\t}

\t\t\$('#flush').click(function(){
\t\t\t\$('#topTool input').val('');
\t\t\tfilter = '';
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetList();
\t\t})
\t\t\$('#filterBtns a').mouseover(function(){
            \$(this).addClass('over');
        })
        \$('#filterBtns a').mouseout(function(){
            \$(this).removeClass('over');
        })

\t\t//普通搜索
\t\tfunction general_search() {
\t\t\tvar data = {
\t\t\t\turl: '/api/Api_approves/get_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit:page_size,
\t\t\t\t\torder:order
\t\t\t\t}
\t\t\t}
\t\t\tcs.doSearch('#search', data, 'filter', false, function(res,_filter) {
\t\t\t\tfilter = _filter;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t setTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"color:#7d7d7d !important;text-align:center !important;\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn ;
\t\t\t\t} 
\t\t\t\taddList(res);
\t\t\t},'spm_approves.approve_type = 10 ' + (approve_result ? ('and spm_approves.approve_result = ' + approve_result) : ''));
\t\t}

\t\t//处理获取到的列表数据
\t\tfunction addList(res){
\t\t\t//审批权限为true可以审批,为false不可审批
            var spApp = cs.approve_authority({name:'仓位',nodes:[201]});
            var cxApp = cs.approve_authority({name:'仓位',nodes:[262]});

            var styles = [];
            \$('#dynamic-table th').each(function(i,e){
                styles.push(\$(this).css('display'));
            });

\t\t\tvar data = res.data.items;
\t\t\tvar status = ['','待审批', '已通过', '未通过']; //审核状态
\t\t\tvar statusColor = ['','#dfba49', '#45b6af', '#f3565d'];
\t\t\tvar list = [];
\t\t\tfor(var i in data) {
\t\t\t\tlist.push(
\t\t\t\t\t`<tr data-id=\"\${data[i]['spm_approves.id']}\"  data-status=\"\${data[i]['spm_approves.approve_result']}\">
                    \t<td class=\"center\">
                            <label class=\"pos-rel\">
                                <input type=\"checkbox\" name=\"check\" class=\"ace\"/>
                                <span class=\"lbl\"></span>
                            </label>
                        </td>
                        <td>
                        <label class=\"pos-rel \">
\t                       <a href=\"#\" class=\"sp btOrange\" data-status = \"1\" style=\"display: \${cxApp ? (data[i]['spm_approves.approve_result'] == 2 ?'inline-block' : 'none') : 'none'};color:#fff !important\" contentAuthority=\"262\" title=\"撤销\"><i class=\"fa fa-rotate-left\"></i></a>
\t                        <a href=\"#\" class=\"sp btGreen\" data-status = \"2\" style=\"display: \${spApp ? (data[i]['spm_approves.approve_result'] == 1 ?'inline-block' : 'none') : 'none'};color:#fff !important\" contentAuthority=\"201\" title=\"通过\"><i class=\"fa fa-check-circle-o\"></i></a>
\t                        <a href=\"#\" class=\"sp btRed\" data-status = \"3\" style=\"display: \${spApp ? (data[i]['spm_approves.approve_result'] == 1 ?'inline-block' : 'none') : 'none'};color:#fff !important\" contentAuthority=\"201\" title=\"驳回\"><i class=\"fa fa-times-circle\"></i></a>
\t                    \t</label>
\t                    </td>
                        <td data-num=\"1\" style=\"display:\${styles[2]}\">\${data[i]['spm_approves.approve_code']}</td>
                        <td data-num=\"2\" style=\"display:\${styles[3]}\">
                        \t<label class=\"pos-rel\" data-cid=\"\${data[i]['spm_approves.customer_id']}\" style=\"font-weight:500;\">
                        \t\t<a class=\"customerDetail\" style=\"cursor:pointer;color:#337ab7;\">\${data[i]['spm_approves.customer_name']}
                        \t\t<i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data[i]['Remark'].length > 0 ? 'red' : ''}\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"<p align='left'>aaaa123aaaaaa<br/>13213</p>\" ></i>
                        \t</label></a>
                        </td>
                        
                        <td data-num=\"3\" style=\"display:\${styles[4]}\">
                        \t\${data[i]['spm_approves.customer_num']}
                        </td>
                        <td data-num=\"4\" style=\"display:\${styles[5]}\">
                        \t\${data[i]['submitted_data']['old_pos_name'] + data[i]['submitted_data']['old_pos_num']}
                        </td>
                        <td data-num=\"5\" style=\"display:\${styles[6]}\">
\t\t\t\t\t\t\t\${data[i]['submitted_data']['new_pos_name'] }
                        </td>
                        <td data-num=\"6\" style=\"display:\${styles[7]}\">
                        \t\${data[i]['spm_approves.submit_employee_id']  ? (employees[data[i]['spm_approves.submit_employee_id']] || \"\") : ''}
                        </td>
                        
                        <td data-num=\"7\" style=\"display:\${styles[8]}\">
                        \t\${data[i]['spm_approves.submit_time'] !='0' ? cs.getNowTime(data[i]['spm_approves.submit_time'],true) : ''}
                        </td>
                        <td data-num=\"8\" style=\"display:\${styles[9]}\">\${data[i]['approve_employee_name'] ? data[i]['approve_employee_name']['name'] : \"\"}</td>
\t                    <td data-num=\"9\" style=\"display:\${styles[10]}\"><label class=\"label\" style=\" background:\${statusColor[data[i]['spm_approves.approve_result']]} \">\${status[data[i]['spm_approves.approve_result']]}</label></td>
\t                    <td data-num=\"10\" style=\"display:\${styles[11]}\">\${data[i]['spm_approves.approve_time'] != 0 ? cs.getNowTime(data[i]['spm_approves.approve_time'],true) : ''}</td>
\t                    <td data-num=\"11\" style=\"display:\${styles[12]}\">\${data[i]['spm_approves.approve_reply']}</td>
                    </tr>`
\t\t\t\t);
\t\t\t}

\t\t\t\$('#datalist').html(list.join(''));
\t\t\t
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\tcustom.get_custom_info();
\t\t\tcustom.showReamrk();

\t\t\t\$(\"#datalist tr\").find('.sp').click(function() {
\t\t\t\tvar status = \$(this).attr('data-status');
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tif(status != '0'){
\t\t\t\t\tchangeStatus(status, id);
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//批量审批
\t\tbatch_approve();
\t\tfunction batch_approve(){
\t\t\t\$('#plSp').click(function() {
\t\t\t\tvar status = '',
\t\t\t\t\tn = 0,
\t\t\t\t\tStatu = false,
\t\t\t\t\tcoldata = []
\t\t\t\t\$('#datalist').find('input[type=\"checkbox\"]:checked').each(function(i) {
\t\t\t\t\tn++;
\t\t\t\t\tstatus = \$(this).parents('tr').attr('data-status') == 1 ? 2 : 1;

\t\t\t\t\tif(\$(this).parents('tr').attr('data-status') == 3 || \$(this).parents('tr').attr('data-status') == 2) {
\t\t\t\t\t\tykp.prompt('审批过的不能批量审批!');
\t\t\t\t\t\tStatu = false;
\t\t\t\t\t\treturn false;
\t\t\t\t\t}  else {
\t\t\t\t\t\tcoldata.push({
\t\t\t\t\t\t\tid: \$(this).parents('tr').attr('data-id'),
\t\t\t\t\t\t\tapprove_result: status
\t\t\t\t\t\t});
\t\t\t\t\t\tStatu = true;
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\tif(n == 0) {
\t\t\t\t\tykp.prompt('请选择再审批！');
\t\t\t\t\treturn false;
\t\t\t\t} else {
\t\t\t\t\tif(Statu) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: \"/api/api_approves/batch_edit\",
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tdata: JSON.stringify(coldata),
\t\t\t\t\t\t\t\ttype: '10'
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('审批成功');
\t\t\t\t\t\t\t\t\$('input.ace').prop('checked',false);
\t\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//获取列表数据
\t\tgetList(1);
\t\tfunction getList(isInit) {
\t\t\tif(isInit == 1){
\t\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\t\tykp.setCookie(\"where\", \"\");
\t\t\t}
\t\t\tgeneral_search();
\t\t\tif(!cs.getSpStatus('仓位')) {
\t\t\t\tykp.prompt('暂时没有开启审批功能');
\t\t\t\treturn false;
\t\t\t}
\t\t\tvar data = {
\t\t\t\ttype: 10,
\t\t\t\tapprove_result: approve_result,
\t\t\t\tpage_size:page_size,
\t\t\t\tfilter:filter,
\t\t\t\torder:order,
\t\t\t\tcontentId: \"#datalist\", //默认排序
\t\t\t\tinitOrder: \"\", //初始化sort
\t\t\t\tdefaultOrder: order,
\t\t\t\tparams: [{
\t\t\t\t\tid: \"#dynamic-table\",
\t\t\t\t\tfield: [\"\",\"\",\"spm_approves.approve_code\",\"spm_approves.customer_id\", \"spm_approves.customer_num\",
\t\t\t\t\t\"\", \"\",\"spm_approves.submit_employee_name\",\"spm_approves.submit_time\",\"\",\"spm_approves.approve_result\",\"spm_approves.approve_time\",\"spm_approves.approve_reply\"]
\t\t\t\t}]
\t\t\t};
\t\t\tif(!cs.getSpStatus('仓位')) {
\t\t\t\t\tykp.prompt('暂时没有开启审批功能');
\t\t\t\t\treturn false;
\t\t\t}
\t\t\tcs.spList(data, function(res) {
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"color:#7d7d7d !important;text-align:center !important;\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn ;
\t\t\t\t} 
\t\t\t\taddList(res);
\t\t\t\t// auditDetail();
\t\t\t},'仓位');
\t\t\t
\t\t}

\t\t//通过 |  驳回  |  撤销点击操作处理
\t\tfunction changeStatus(status, id) {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_approves/edit_status',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\tid: id,
\t\t\t\t\tapprove_result: status
\t\t\t\t}
\t\t\t}
\t\t\tif(status == 3) {
\t\t\t\t\$('#feedBack').show();
\t\t\t\t\$('#feedBack .hold').click(function() {
\t\t\t\t\tvar approve_reply = \$('#feedBack').find('input').val();
\t\t\t\t\tif(approve_reply == '') {
\t\t\t\t\t\tykp.prompt('不能为空！');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}else {
\t\t\t\t\t\tykp.prompt('驳回成功！');
\t\t\t\t\t\tdata.data.approve_reply = approve_reply.trim();
\t\t\t\t\tdata.data.approve_reply = approve_reply;
\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t})
\t\t\t\tcs.closePop();
\t\t\t} else if(status == 1){
//              bootbox.confirm('确认撤销审批？', function(flag){
//                  if(flag){
//                      setStatus(data);
//                  }
//              })
           \t\tlayui.use('layer', function() {
\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\tlayer.confirm('确认撤销审批？', function(flag) {
\t\t\t\t\t\t\tif(flag) {
\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t})
            }else if(status == 2){
            \tykp.prompt('审批通过！');
            \tsetStatus(data);
            }else{
\t\t\t\tsetStatus(data);
\t\t\t}

\t\t}

\t\t//向服务器发送异步请求
\t\tfunction setStatus(data) {
\t\t\tykp.doAjax({
\t\t\t\turl: data.url,
\t\t\t\tmethods: data.methods,
\t\t\t\tdata: data.data,
\t\t\t\tsuccess: function(res) {
\t//\t\t\t\tykp.prompt('审批成功!');
\t\t\t\t\tgetList();
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//全选 反选
\t\tcheckAll();
\t\tfunction checkAll(){
\t\t\t\$('input.ace').click(function(){
\t\t\t\t\$('input[name=\"check\"]').prop('checked',\$(this)[0].checked);
\t\t\t});
\t\t}
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/auditing/auditPosition.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 103,  123 => 102,  121 => 101,  19 => 1,);
    }
}
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<!-- <h3 class="header smaller lighter blue">仓位审批</h3> -->*/
/* 		<div class="actions" id="topTool">*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<input type="text" pts=0 sear="spm_approves.approve_code" placeholder="审批号">*/
/*             </div>*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<input type="text" pts=0 sear="spm_approves.customer_name" placeholder="企业名称">*/
/*             </div>*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<input type="text" pts=0 sear="spm_approves.customer_num" placeholder="企业编码">*/
/*             </div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <button id="search" title="搜索" class="btn btn-info btn-sm">*/
/*                     <i class="fa fa-search"></i>*/
/*                 </button>*/
/*             </div>*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32!important;">*/
/*                     <i class="fa fa-refresh"></i>*/
/*                 </button>*/
/*             </div>*/
/*             <div class="col-sx-4" contentAuthority="200" style=" float: left;margin-right: 5px;">*/
/*                 <button id="plSp" title="批量审批" class="btn sp btn-info btn-sm" style="background:#32CD32 !important;border-color:#32CD32 !important;">*/
/* 					<i class="fa fa-check-circle-o"></i>*/
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
/* 		</div>*/
/* 		<div class="auditing-data custom_table">*/
/* 			<table id="dynamic-table">*/
/* 				<thead>*/
/* 					<tr class="thColor">	*/
/* 						<th class="center">*/
/* 							<label class="pos-rel">*/
/*                                 <input type="checkbox" class="ace"/>*/
/*                                 <span class="lbl"></span>*/
/*                             </label>*/
/* 						</th>*/
/* 						<th>操作</th>*/
/* 						<th data-num="1">审批号</th>*/
/* 						<th data-num="2">企业名称</th>*/
/* 						<th data-num="3">企业编码</th>*/
/* 						<th data-num="4">原仓位编码</th>*/
/* 						<th data-num="5">新仓位</th>*/
/* 						<th data-num="6">负责人</th>*/
/* 						<th data-num="7">转移时间</th>*/
/* 						<th data-num="8">审批员工</th>*/
/* 						<th data-num="9">审批结果</th>*/
/* 						<th data-num="10">审批时间</th>*/
/* 						<th data-num="11">审批回复</th>*/
/* 						<!-- <th data-num="7">审批时间</th>*/
/* 						<th data-num="8">审批回复</th> -->*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody id="datalist">*/
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 		<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 			<div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
/* 			<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 			<div id="pageBar" class="pagination"></div>*/
/* 			<div align="right" style="float: right;  width: 10%;">*/
/* 				<select style="width: 100px;" id="changePageNum">*/
/* 					<option value="10">每页10条</option>*/
/* 					<option value="20">每页20条</option>*/
/* 					<option value="50">每页50条</option>*/
/* 					<option value="100">每页100条</option>*/
/* 					<option value="200">每页200条</option>*/
/* 				</select>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="label_popup" id="feedBack" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 		<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 		    box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 			<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 				<span style="display: inline-block;">请填写驳回原因</span>*/
/* 				<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 			</div>*/
/* 			<div style="padding: 10px 50px;">*/
/* 				<input type="text" width="200px" style="margin: auto;" id="labelName" />*/
/* 				<!--<hr>-->*/
/* 			</div>*/
/* 			<div style="padding:15px;text-align:right;">*/
/* 				<button class="close_label">关闭</button>*/
/* 				<button class="hold">保存</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% include 'admin/mark.html' %}*/
/* 	{% include 'admin/customerDetail.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script type="text/javascript">*/
/* 	$(function() {*/
/* 		if(cs.approve_authority({name:'仓位',nodes:[200]})){*/
/*             $('[contentAuthority="200"]').show();*/
/*         }*/
/* */
/* 		var order ='spm_approves.approve_result asc,spm_approves.id desc';*/
/* 		var page_size = 10;//默认每页显示的条目数为 10 */
/* 		var approve_result = '';//审批状态*/
/* 		var filter = '';//过滤条件*/
/* */
/* 		//自定义table*/
/* 		cs.custorm_check('#dynamic-table', '#datalist', true);*/
/* 		*/
/* 		var employees={};*/
/* 		//获取所有员工*/
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
/* */
/* 		//改变每页显示的条目数*/
/* 		changePage();*/
/* 		function changePage(){*/
/* 			$('#changePageNum').change(function() {*/
/* 				page_size = $(this).val();*/
/* 				ykp.setCookie('page_size',page_size);*/
/* 				getList();*/
/* 			})*/
/* 		}*/
/* */
/* 		//查看全部 | 待审批 | 已通过 | 未通过*/
/* 		clickBtn();*/
/* 		function clickBtn() {*/
/* 			$('#topTool').on('click', 'a', function(item) {*/
/* 				if (!$(this).hasClass('clc')) {*/
/*                     $(this).addClass('clc').siblings().removeClass('clc');*/
/*                 }*/
/* 				var status = $(this).attr('data-status');*/
/* 				if(status != 'all'){*/
/* 					approve_result = status;*/
/* 				}else{*/
/* 					approve_result = '';	*/
/* 				}*/
/* 				getList();*/
/* 			})*/
/* 		}*/
/* */
/* 		$('#flush').click(function(){*/
/* 			$('#topTool input').val('');*/
/* 			filter = '';*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getList();*/
/* 		})*/
/* 		$('#filterBtns a').mouseover(function(){*/
/*             $(this).addClass('over');*/
/*         })*/
/*         $('#filterBtns a').mouseout(function(){*/
/*             $(this).removeClass('over');*/
/*         })*/
/* */
/* 		//普通搜索*/
/* 		function general_search() {*/
/* 			var data = {*/
/* 				url: '/api/Api_approves/get_list',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit:page_size,*/
/* 					order:order*/
/* 				}*/
/* 			}*/
/* 			cs.doSearch('#search', data, 'filter', false, function(res,_filter) {*/
/* 				filter = _filter;*/
/* 				if(res.data.items == "") {*/
/* 					 setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 					$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="color:#7d7d7d !important;text-align:center !important;" class="page">暂无数据</div></td></tr>');*/
/* 					return ;*/
/* 				} */
/* 				addList(res);*/
/* 			},'spm_approves.approve_type = 10 ' + (approve_result ? ('and spm_approves.approve_result = ' + approve_result) : ''));*/
/* 		}*/
/* */
/* 		//处理获取到的列表数据*/
/* 		function addList(res){*/
/* 			//审批权限为true可以审批,为false不可审批*/
/*             var spApp = cs.approve_authority({name:'仓位',nodes:[201]});*/
/*             var cxApp = cs.approve_authority({name:'仓位',nodes:[262]});*/
/* */
/*             var styles = [];*/
/*             $('#dynamic-table th').each(function(i,e){*/
/*                 styles.push($(this).css('display'));*/
/*             });*/
/* */
/* 			var data = res.data.items;*/
/* 			var status = ['','待审批', '已通过', '未通过']; //审核状态*/
/* 			var statusColor = ['','#dfba49', '#45b6af', '#f3565d'];*/
/* 			var list = [];*/
/* 			for(var i in data) {*/
/* 				list.push(*/
/* 					`<tr data-id="${data[i]['spm_approves.id']}"  data-status="${data[i]['spm_approves.approve_result']}">*/
/*                     	<td class="center">*/
/*                             <label class="pos-rel">*/
/*                                 <input type="checkbox" name="check" class="ace"/>*/
/*                                 <span class="lbl"></span>*/
/*                             </label>*/
/*                         </td>*/
/*                         <td>*/
/*                         <label class="pos-rel ">*/
/* 	                       <a href="#" class="sp btOrange" data-status = "1" style="display: ${cxApp ? (data[i]['spm_approves.approve_result'] == 2 ?'inline-block' : 'none') : 'none'};color:#fff !important" contentAuthority="262" title="撤销"><i class="fa fa-rotate-left"></i></a>*/
/* 	                        <a href="#" class="sp btGreen" data-status = "2" style="display: ${spApp ? (data[i]['spm_approves.approve_result'] == 1 ?'inline-block' : 'none') : 'none'};color:#fff !important" contentAuthority="201" title="通过"><i class="fa fa-check-circle-o"></i></a>*/
/* 	                        <a href="#" class="sp btRed" data-status = "3" style="display: ${spApp ? (data[i]['spm_approves.approve_result'] == 1 ?'inline-block' : 'none') : 'none'};color:#fff !important" contentAuthority="201" title="驳回"><i class="fa fa-times-circle"></i></a>*/
/* 	                    	</label>*/
/* 	                    </td>*/
/*                         <td data-num="1" style="display:${styles[2]}">${data[i]['spm_approves.approve_code']}</td>*/
/*                         <td data-num="2" style="display:${styles[3]}">*/
/*                         	<label class="pos-rel" data-cid="${data[i]['spm_approves.customer_id']}" style="font-weight:500;">*/
/*                         		<a class="customerDetail" style="cursor:pointer;color:#337ab7;">${data[i]['spm_approves.customer_name']}*/
/*                         		<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}" data-rel="tooltip" data-placement="right" data-html="true" title="<p align='left'>aaaa123aaaaaa<br/>13213</p>" ></i>*/
/*                         	</label></a>*/
/*                         </td>*/
/*                         */
/*                         <td data-num="3" style="display:${styles[4]}">*/
/*                         	${data[i]['spm_approves.customer_num']}*/
/*                         </td>*/
/*                         <td data-num="4" style="display:${styles[5]}">*/
/*                         	${data[i]['submitted_data']['old_pos_name'] + data[i]['submitted_data']['old_pos_num']}*/
/*                         </td>*/
/*                         <td data-num="5" style="display:${styles[6]}">*/
/* 							${data[i]['submitted_data']['new_pos_name'] }*/
/*                         </td>*/
/*                         <td data-num="6" style="display:${styles[7]}">*/
/*                         	${data[i]['spm_approves.submit_employee_id']  ? (employees[data[i]['spm_approves.submit_employee_id']] || "") : ''}*/
/*                         </td>*/
/*                         */
/*                         <td data-num="7" style="display:${styles[8]}">*/
/*                         	${data[i]['spm_approves.submit_time'] !='0' ? cs.getNowTime(data[i]['spm_approves.submit_time'],true) : ''}*/
/*                         </td>*/
/*                         <td data-num="8" style="display:${styles[9]}">${data[i]['approve_employee_name'] ? data[i]['approve_employee_name']['name'] : ""}</td>*/
/* 	                    <td data-num="9" style="display:${styles[10]}"><label class="label" style=" background:${statusColor[data[i]['spm_approves.approve_result']]} ">${status[data[i]['spm_approves.approve_result']]}</label></td>*/
/* 	                    <td data-num="10" style="display:${styles[11]}">${data[i]['spm_approves.approve_time'] != 0 ? cs.getNowTime(data[i]['spm_approves.approve_time'],true) : ''}</td>*/
/* 	                    <td data-num="11" style="display:${styles[12]}">${data[i]['spm_approves.approve_reply']}</td>*/
/*                     </tr>`*/
/* 				);*/
/* 			}*/
/* */
/* 			$('#datalist').html(list.join(''));*/
/* 			*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/* 			custom.get_custom_info();*/
/* 			custom.showReamrk();*/
/* */
/* 			$("#datalist tr").find('.sp').click(function() {*/
/* 				var status = $(this).attr('data-status');*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				if(status != '0'){*/
/* 					changeStatus(status, id);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//批量审批*/
/* 		batch_approve();*/
/* 		function batch_approve(){*/
/* 			$('#plSp').click(function() {*/
/* 				var status = '',*/
/* 					n = 0,*/
/* 					Statu = false,*/
/* 					coldata = []*/
/* 				$('#datalist').find('input[type="checkbox"]:checked').each(function(i) {*/
/* 					n++;*/
/* 					status = $(this).parents('tr').attr('data-status') == 1 ? 2 : 1;*/
/* */
/* 					if($(this).parents('tr').attr('data-status') == 3 || $(this).parents('tr').attr('data-status') == 2) {*/
/* 						ykp.prompt('审批过的不能批量审批!');*/
/* 						Statu = false;*/
/* 						return false;*/
/* 					}  else {*/
/* 						coldata.push({*/
/* 							id: $(this).parents('tr').attr('data-id'),*/
/* 							approve_result: status*/
/* 						});*/
/* 						Statu = true;*/
/* 					}*/
/* 				})*/
/* 				if(n == 0) {*/
/* 					ykp.prompt('请选择再审批！');*/
/* 					return false;*/
/* 				} else {*/
/* 					if(Statu) {*/
/* 						ykp.doAjax({*/
/* 							url: "/api/api_approves/batch_edit",*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								data: JSON.stringify(coldata),*/
/* 								type: '10'*/
/* 							},*/
/* 							success: function(res) {*/
/* 								ykp.prompt('审批成功');*/
/* 								$('input.ace').prop('checked',false);*/
/* 								getList();*/
/* 							}*/
/* 						})*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//获取列表数据*/
/* 		getList(1);*/
/* 		function getList(isInit) {*/
/* 			if(isInit == 1){*/
/* 				ykp.setCookie("filter", "");*/
/* 				ykp.setCookie("where", "");*/
/* 			}*/
/* 			general_search();*/
/* 			if(!cs.getSpStatus('仓位')) {*/
/* 				ykp.prompt('暂时没有开启审批功能');*/
/* 				return false;*/
/* 			}*/
/* 			var data = {*/
/* 				type: 10,*/
/* 				approve_result: approve_result,*/
/* 				page_size:page_size,*/
/* 				filter:filter,*/
/* 				order:order,*/
/* 				contentId: "#datalist", //默认排序*/
/* 				initOrder: "", //初始化sort*/
/* 				defaultOrder: order,*/
/* 				params: [{*/
/* 					id: "#dynamic-table",*/
/* 					field: ["","","spm_approves.approve_code","spm_approves.customer_id", "spm_approves.customer_num",*/
/* 					"", "","spm_approves.submit_employee_name","spm_approves.submit_time","","spm_approves.approve_result","spm_approves.approve_time","spm_approves.approve_reply"]*/
/* 				}]*/
/* 			};*/
/* 			if(!cs.getSpStatus('仓位')) {*/
/* 					ykp.prompt('暂时没有开启审批功能');*/
/* 					return false;*/
/* 			}*/
/* 			cs.spList(data, function(res) {*/
/* 				if(res.data.items == "") {*/
/* 					ykp.prompt("暂无数据");*/
/* 					$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="color:#7d7d7d !important;text-align:center !important;" class="page">暂无数据</div></td></tr>');*/
/* 					return ;*/
/* 				} */
/* 				addList(res);*/
/* 				// auditDetail();*/
/* 			},'仓位');*/
/* 			*/
/* 		}*/
/* */
/* 		//通过 |  驳回  |  撤销点击操作处理*/
/* 		function changeStatus(status, id) {*/
/* 			var data = {*/
/* 				url: '/api/api_approves/edit_status',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					id: id,*/
/* 					approve_result: status*/
/* 				}*/
/* 			}*/
/* 			if(status == 3) {*/
/* 				$('#feedBack').show();*/
/* 				$('#feedBack .hold').click(function() {*/
/* 					var approve_reply = $('#feedBack').find('input').val();*/
/* 					if(approve_reply == '') {*/
/* 						ykp.prompt('不能为空！');*/
/* 						return false;*/
/* 					}else {*/
/* 						ykp.prompt('驳回成功！');*/
/* 						data.data.approve_reply = approve_reply.trim();*/
/* 					data.data.approve_reply = approve_reply;*/
/* 					setStatus(data);*/
/* 					$('.close_label').parents('.label_popup').fadeOut();*/
/* 					}*/
/* 					*/
/* 				})*/
/* 				cs.closePop();*/
/* 			} else if(status == 1){*/
/* //              bootbox.confirm('确认撤销审批？', function(flag){*/
/* //                  if(flag){*/
/* //                      setStatus(data);*/
/* //                  }*/
/* //              })*/
/*            		layui.use('layer', function() {*/
/* 						var layer = layui.layer;*/
/* 						layer.confirm('确认撤销审批？', function(flag) {*/
/* 							if(flag) {*/
/* 						layer.closeAll();*/
/* 						setStatus(data);*/
/* 							}*/
/* 						});*/
/* 					})*/
/*             }else if(status == 2){*/
/*             	ykp.prompt('审批通过！');*/
/*             	setStatus(data);*/
/*             }else{*/
/* 				setStatus(data);*/
/* 			}*/
/* */
/* 		}*/
/* */
/* 		//向服务器发送异步请求*/
/* 		function setStatus(data) {*/
/* 			ykp.doAjax({*/
/* 				url: data.url,*/
/* 				methods: data.methods,*/
/* 				data: data.data,*/
/* 				success: function(res) {*/
/* 	//				ykp.prompt('审批成功!');*/
/* 					getList();*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//全选 反选*/
/* 		checkAll();*/
/* 		function checkAll(){*/
/* 			$('input.ace').click(function(){*/
/* 				$('input[name="check"]').prop('checked',$(this)[0].checked);*/
/* 			});*/
/* 		}*/
/* 	});*/
/* </script>*/
