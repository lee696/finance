<?php

/* admin/auditing/tally.html */
class __TwigTemplate_ada5edd52e071cb086d5e6cff25334affd350197968bb8feffae11058f5b878d extends Twig_Template
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
\t#templateCon label {
\t\twidth: 97px;
\t}
\t
\t#templateCon input {
\t\tborder: none;
\t\tbackground-color: rgba(0, 0, 0, 0);
\t}
</style>
<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<!-- \t\t<h3 class=\"header smaller lighter blue\">记账审批</h3> -->
\t\t<div class=\"actions\" id=\"topTool\">
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<div class=\"search\">
\t\t\t\t\t<input type=\"text\" class=\"search-input\" sear=\"spm_approves.approve_code\" maxlength=\"15\" placeholder=\"审批编码\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<div class=\"search\">
\t\t\t\t\t<input type=\"text\" class=\"search-input\" sear=\"spm_approves.customer_name\" maxlength=\"15\" placeholder=\"企业名称\" autofocus>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<div class=\"search\">
\t\t\t\t\t<input type=\"text\" class=\"search-input\" sear=\"spm_approves.customer_num\" maxlength=\"15\" placeholder=\"企业编码\">
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <button id=\"search\" title=\"搜索\"  class=\"btn btn-info btn-sm\">
                    <i class=\"fa fa-search\"></i>
                </button>
            </div>
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32!important;\">
                    <i class=\"fa fa-refresh\"></i>
                </button>
            </div>
            <div class=\"col-sx-4\" contentAuthority=\"192\" style=\" float: left;margin-right: 5px;\">
                <button id=\"plSp\" title=\"批量审批\" class=\"btn sp btn-info btn-sm\" style=\"border-color: #32CD32 !important;background: #32CD32 !important;\">
\t\t\t\t\t<i class=\"fa fa-check-circle-o\"></i>
                </button>
            </div>
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <div id=\"filterBtns\" style=\"display:inline-block;width:290px;\">
                    <a href=\"javascript:void(0);\" class=\"\" style=\"background: #E6E6E6;\" data-status=\"all\">全部</a>
                    <a href=\"javascript:void(0);\" class=\"\" data-status=\"1\"> 待审批</a>
                    <a href=\"javascript:void(0);\" class=\"\" data-status=\"2\"> 已通过</a>
                    <a href=\"javascript:void(0);\" class=\"\" data-status=\"3\"> 未通过</a>
                </div>
            </div>
\t\t\t
\t\t</div>
\t\t<div class=\"auditing-data custom_table\">
\t\t\t<table id=\"dynamic-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t<th class=\"center\">
\t\t\t\t\t\t\t<label class=\"pos-rel\">
                                <input type=\"checkbox\" class=\"ace\" onclick=\"checkAll(this.checked)\"/>
                                <span class=\"lbl\"></span>
                            </label>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t<th data-num=\"9\">企业名称</th>
\t\t\t\t\t\t<th data-num=\"10\">企业编码</th>
\t\t\t\t\t\t<th data-num=\"11\">服务月份</th>
\t\t\t\t\t\t<th data-num=\"15\">账务提示单</th>
\t\t\t\t\t\t<th data-num=\"13\">负责人</th>
\t\t\t\t\t\t<th data-num=\"1\">审批号码</th>

\t\t\t\t\t\t<th data-num=\"3\">提交员工</th>
\t\t\t\t\t\t<th data-num=\"4\">提交时间</th>
\t\t\t\t\t\t<th data-num=\"5\">审批员工</th>
\t\t\t\t\t\t<th data-num=\"6\">审批结果</th>
\t\t\t\t\t\t<th data-num=\"7\">审批时间</th>
\t\t\t\t\t\t<th data-num=\"8\">审批回复</th>
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

\t<div id=\"noteList\" style=\"display:none;\">
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 公司名称： </label>
\t\t\t<input disabled>
\t\t\t<label> 负责人： </label>
\t\t\t<input disabled>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 月份： </label>
\t\t\t<input disabled>
\t\t\t<label> 截至本年收入： </label>
\t\t\t<input disabled>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 连续11个月收入： </label>
\t\t\t<input disabled>
\t\t\t<label> 应收账款： </label>
\t\t\t<input disabled>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 应付账款： </label>
\t\t\t<input disabled>
\t\t\t<label> 其他应收账款： </label>
\t\t\t<input disabled>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 其他应付账款： </label>
\t\t\t<input disabled>
\t\t\t<label> 税负率： </label>
\t\t\t<input disabled>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 欠成本发票： </label>
\t\t\t<input disabled>
\t\t\t<label> 欠费用发票： </label>
\t\t\t<input disabled>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 本年累计亏损： </label>
\t\t\t<input disabled>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label style=\"float:left;margin-right:5px;\"> 银行对账单： </label>
\t\t\t<div style=\"display:inline-block;\"  class=\"fileList\"></div>
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
        // line 167
        $this->loadTemplate("admin/customerDetail.html", "admin/auditing/tally.html", 167)->display($context);
        echo " ";
        $this->loadTemplate("admin/mark.html", "admin/auditing/tally.html", 167)->display($context);
        // line 168
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script type=\"text/javascript\">
\t\$(function() {
\t\tif(cs.approve_authority({name:'记账',nodes:[192]})){
            \$('[contentAuthority=\"192\"]').show();
        }

\t\tvar order = 'spm_approves.approve_result asc,spm_approves.id desc';
\t\tvar pagesize = 10;
\t\tvar cid = ykp.getCookie(\"custom_id\");
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
\t\tclickBtn()
\t\t//点击顶部  按钮时调用
\t\tfunction clickBtn() {
\t\t\t\$('#topTool').on('click', 'a', function(item) {
\t\t\t\tif (!\$(this).hasClass('clc')) {
                    \$(this).addClass('clc').siblings().removeClass('clc');
                }
\t\t\t\tvar status = \$(this).attr('data-status');
\t\t\t\t\$(this).addClass('active').siblings().removeClass('active');
\t\t\t\tvar keyWords = [];
\t\t\t\t\$('.search-input').each(function(i, e) {
\t\t\t\t\tif(\$(this).val().trim()) {
\t\t\t\t\t\tkeyWords.push(\$(this).attr('sear') + ' like \\'%' + \$(this).val().trim() + '%\\'');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tif(\$('#search').attr('searStatsus')) {
\t\t\t\t\tgetList('', status, keyWords); //已搜索点击状态
\t\t\t\t} else {
\t\t\t\t\tgetList('', status); //未搜索点击状态
\t\t\t\t}
\t\t\t\treturn false;
\t\t\t})
\t\t}

\t\t\$('#flush').click(function(){
\t\t\t\$('#topTool input').val('');
\t\t\tfilter = '';
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetList();
\t\t})


\t\t\$('#plSp').click(function() {
\t\t\tvar status = '',
\t\t\t\tn = 0,
\t\t\t\tStatu = false,
\t\t\t\tcoldata = []
\t\t\t\$('#datalist').find('input[type=\"checkbox\"]:checked').each(function(i) {
\t\t\t\tn++;
\t\t\t\tstatus = \$(this).parents('tr').attr('data-status') == 1 ? 2 : 1;

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
\t\t\t\t\t\t\ttype: '6'
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tykp.prompt('审批成功');
\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t}
\t\t\t}
\t\t})

\t\tdoSearch();

\t\tfunction doSearch() {
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\t\$('#search').click(function() {
\t\t\t\t\$(this).attr('searStatsus', true);
\t\t\t\tvar n = 0; //选中的数量
\t\t\t\tvar w = ''; //选中的状态
\t\t\t\t\$('#topTool a').each(function() {
\t\t\t\t\tif(\$(this).hasClass('active')) {
\t\t\t\t\t\tn += 1;
\t\t\t\t\t\tw = \$(this).attr('data-status');
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\tvar keyWords = [];
\t\t\t\t\$('.search-input').each(function(i, e) {
\t\t\t\t\tif(\$(this).val().trim()) {
\t\t\t\t\t\tkeyWords.push(\$(this).attr('sear') + ' like \\'%' + \$(this).val().trim() + '%\\'');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tif(keyWords.length <= 0) {
\t\t\t\t\tykp.prompt('请输入至少一个搜索条件');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tif(n == 0) {
\t\t\t\t\tgetList('', '', keyWords);
\t\t\t\t} else {
\t\t\t\t\tif(w != 'all') {
\t\t\t\t\t\tgetList('', w, keyWords);
\t\t\t\t\t} else {
\t\t\t\t\t\tgetList('', '', keyWords);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}

\t\t\$('#changePageNum').change(function() {
\t\t\tpagesize = \$(this).val();
\t\t\tykp.setCookie('page_size', pagesize);
\t\t\tif(!cs.getSpStatus('记账')) {
\t\t\t\tykp.prompt('暂时没有开启审批功能');
\t\t\t\treturn false;
\t\t\t}
\t\t\tvar n = 0; //选中的数量
\t\t\tvar w = ''; //选中的状态
\t\t\t\$('#topTool a').each(function() {
\t\t\t\tif(\$(this).hasClass('active')) {
\t\t\t\t\tn += 1;
\t\t\t\t\tw = \$(this).attr('data-status');
\t\t\t\t}
\t\t\t})
\t\t\tvar keyWords = [];
\t\t\t\$('.search-input').each(function(i, e) {
\t\t\t\tif(\$(this).val().trim()) {
\t\t\t\t\tkeyWords.push(\$(this).attr('sear') + ' like \\'%' + \$(this).val().trim() + '%\\'');
\t\t\t\t}
\t\t\t});
\t\t\tif(n == 0) {
\t\t\t\tgetList('', '', keyWords);
\t\t\t} else {
\t\t\t\tif(w != 'all') {
\t\t\t\t\tgetList('', w, keyWords);
\t\t\t\t} else {
\t\t\t\t\tgetList('', '', keyWords);
\t\t\t\t}
\t\t\t}
\t\t\t//\t\t\tgetCustomerList(1);
\t\t})

\t\tgetList();
\t\t\$('#filterBtns a').mouseover(function(){
            \$(this).addClass('over');
        })

        \$('#filterBtns a').mouseout(function(){
            \$(this).removeClass('over');
        })


\t\tfunction getList(current, clickstatus, keyWords) {
\t\t\tif(!cs.getSpStatus('记账')) {
\t\t\t\tykp.prompt('暂时没有开启审批功能');
\t\t\t\treturn false;
\t\t\t}
\t\t\tcurrent = current ? current : 1;
//\t\t\tvar data = {
//\t\t\t\tpage_size: pagesize,
//\t\t\t\tcurrent: current,
//\t\t\t\ttype: 6,
//\t\t\t\torder: order
//\t\t\t}
\t\t\tvar data = {
                page_size: pagesize,
\t\t\t\tcurrent: current,
\t\t\t\ttype: 6,
\t\t\t\torder: order,
                contentId: \"#datalist\", //默认排序
\t\t\t\tinitOrder: \"\", //初始化sort
\t\t\t\tdefaultOrder: order,
\t\t\t\tparams: [{
\t\t\t\t\tid: \"#dynamic-table\",
\t\t\t\t\tfield: [\"\",\"\",\"spm_approves.customer_id\", \"\", \"\", \"\",\"\",\"\",\"spm_approves.approve_code\", \"spm_approves.submit_employee_name\", \"spm_approves.submit_time\",
\t\t\t\t\t\t\"\",\"spm_approves.approve_result\", \"spm_approves.approve_time\", \"spm_approves.approve_reply\"]
\t\t\t\t}]
            }
\t\t\t//判断是否有过滤   
\t\t\tif(clickstatus && !isNaN(clickstatus)) {
\t\t\t\tdata.approve_result = clickstatus;
\t\t\t}
\t\t\tif(keyWords) {
\t\t\t\tdata.search = keyWords;
\t\t\t}
\t\t\tif(cid) {
\t\t\t\tdata.search = 'spm_approves.customer_name  '+ ' like \\'%' + cid + '%\\'';
\t\t\t}
\t\t\tcs.spList(data, function(res) {
\t\t\t\t//console.log(res)
\t\t\t\tvar data = res.data.items;
\t\t\t\tif(data.length == 0) {
\t\t\t\t\t setTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"color:#7d7d7d !important;text-align:center !important;\" class=\"page\">暂无数据</div></td></tr>');

\t\t\t\t} else {
\t\t\t\t\t//审批权限为true可以审批,为false不可审批
                    var spApp = cs.approve_authority({name:'记账',nodes:[191]});
                    var cxApp = cs.approve_authority({name:'记账',nodes:[257]});

                    var styles = [];
                    \$('#dynamic-table th').each(function(i,e){
                        styles.push(\$(this).css('display'));
                    });

\t\t\t\t\tvar status = ['','待审批', '已通过', '未通过']; //审核状态
\t\t\t\t\tvar statusColor = ['','#dfba49', '#45b6af', '#f3565d'];
\t\t\t\t\tvar content = '';
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tcontent += `<tr data-id=\"\${data[i]['spm_approves.id']}\" data-status=\"\${data[i]['spm_approves.approve_result']}\">
\t\t\t\t\t\t\t\t <td class=\"center\">
                                <label class=\"pos-rel\">
                                    <input type=\"checkbox\" name=\"check\" class=\"ace\"/>
                                    <span class=\"lbl\"></span>
                                </label>
                            </td>
\t\t\t\t\t\t <td>
                    \t<label class=\"pos-rel\">
                         <a href=\"javascript:void(0);\" class=\"sp btOrange\" data-status = \"1\" style=\"display: \${cxApp ? (data[i]['spm_approves.approve_result'] == 2 ? 'inline-block' : 'none') : 'none'};color:#fff !important\" contentAuthority=\"258\" title=\"撤销\"><i class=\"fa fa-rotate-left\"></i></a>
                        <a href=\"javascript:void(0);\" class=\"sp btGreen\" data-status = \"2\" style=\"display: \${spApp ? (data[i]['spm_approves.approve_result'] == 1 ?'inline-block' : 'none') : 'none'};color:#fff !important\" contentAuthority=\"193\" title=\"通过\"><i class=\"fa fa-check-circle-o\"></i></a>
                        <a href=\"javascript:void(0);\" class=\"sp btRed\" data-status = \"3\" style=\"display: \${spApp ? (data[i]['spm_approves.approve_result'] == 1 ?'inline-block' : 'none') : 'none'};color:#fff !important\" contentAuthority=\"193\" title=\"驳回\"><i class=\"fa fa-times-circle\"></i></a>
                    \t</div>
                    </td>
                    <td data-num=\"9\" style=\"display:\${styles[2]}\" data-cid=\"\${data[i]['spm_approves.customer_id']}\"><a class=\"customerDetail pos-rel\" href=\"javascript:void(0);\">\${data[i].submitted_data['khm_customer.name']}</a>
                    <label class=\"pos-rel\">
\t\t\t\t \t\t\t\t<i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data[i]['Remark'].length > 0 ? 'red' : ''}\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i>
\t\t\t \t\t\t\t </label>
                        </td>
                    <td data-num=\"10\" style=\"display:\${styles[3]}\">\${data[i].submitted_data['khm_customer.customer_num']}</td>
                    <td data-num=\"11\" style=\"display:\${styles[4]}\">\${data[i].submitted_data['jzm_service_info.time']}</td>
                    <td data-num=\"15\" style=\"display:\${styles[5]}\"><a href=\"javascript:;\" style=\"text-decoration:none;\" class=\"noteList pos-rel\" noteList-id=\"\${data[i].submitted_data['jzm_service_info.id']}\">查看</a></td>                    
                    <td data-num=\"13\" style=\"display:\${styles[6]}\">\${data[i].submitted_data['jzm_service_info.fuze_id'] != '0' ? employees[data[i].submitted_data['jzm_service_info.fuze_id']] : ''}</td>
                    <td data-num=\"1\" style=\"display:\${styles[7]}\">\${data[i]['spm_approves.approve_code']}</td>
                    <td data-num=\"3\" style=\"display:\${styles[8]}\">\${data[i]['spm_approves.submit_employee_name']}</td>
                    <td data-num=\"4\" style=\"display:\${styles[9]}\">\${cs.getNowTime(data[i]['spm_approves.submit_time'],true)}</td>
                    <td data-num=\"5\" style=\"display:\${styles[10]}\">\${data[i]['approve_employee_name'] ? data[i]['approve_employee_name']['name'] : \"\"}</td>
                    <td data-num=\"6\" style=\"display:\${styles[11]}\"><label class=\"label\" style=\" background:\${statusColor[data[i]['spm_approves.approve_result']]} \">\${status[data[i]['spm_approves.approve_result']]}</label></td>
                    <td data-num=\"7\" style=\"display:\${styles[12]}\">\${data[i]['spm_approves.approve_time'] != 0 ? cs.getNowTime(data[i]['spm_approves.approve_time'],true) : ''}</td>
                    <td data-num=\"8\" style=\"display:\${styles[13]}\">\${data[i]['spm_approves.approve_reply']}</td>
                </tr>`;
\t\t\t\t\t}

\t\t\t\t\t\$('#datalist').html(content);
\t\t\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\t\t\tcustom.get_custom_info();
\t\t\t\t\tcustom.showReamrk();
\t\t\t\t\t//账务提示单
\t\t\t\t\tnoteList();

\t\t\t\t\t\$(\"#datalist tr\").find('.sp').click(function() {
\t\t\t\t\t\tvar status = \$(this).attr('data-status');
\t\t\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\t\t\tif(status != '0') {
\t\t\t\t\t\t\tchangeStatus(status, id);
\t\t\t\t\t\t}
\t\t\t\t\t})

\t\t\t\t}
\t\t\t}, \"记账\")
\t\t\t
\t\t\tykp.setCookie(\"custom_id\", \"\", (1 / 24));

\t\t\t//查看账务提示单
\t\t\tfunction noteList() {
\t\t\t\t\$('.noteList').click(function() {
\t\t\t\t\tvar month = \$(this).parents('tr').find('td[data-num=\"11\"]').text().trim();
\t\t\t\t\tvar name = \$(this).parents('tr').find('a.customerDetail').text().trim();
\t\t\t\t\tvar head = \$(this).parent().next().html();
\t\t\t\t\tvar id = \$(this).attr('noteList-id');

\t\t\t\t\tshowMark('#noteList');
\t\t\t\t\t\$('#showBox .title').text('账务提示单');

\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_service/accounting_info2',
\t\t\t\t\t\tmethods: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tservice_id: id 
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tvar arr = [];
\t\t\t                if(data['files']){
\t\t\t                \tJSON.parse(data['files']).forEach(function(item) {
\t\t\t\t                \tarr.push('<p style=\"padding-left: 2px;\"><a href=\"'+item.url+'\">'+item.name+'</a></p>')
\t\t\t\t                })
\t\t\t                \t
\t\t\t                \t\$('#templateCon .fileList').append(arr.join(','));
\t\t\t                }
\t\t\t\t\t\t\t
//\t\t\t\t\t\t\tfileList
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
//\t\t\t\t\t\t\t\$('#templateCon [field=\"pics\"]').html(pics_html.join(''));
\t\t\t\t\t\t\t\$('#templateCon input').eq(0).val(name);
\t\t\t\t\t\t\t\$('#templateCon input').eq(1).val(head);
\t\t\t\t\t\t\t\$('#templateCon input').eq(2).val(month);
\t\t\t\t\t\t\t\$('#templateCon input').eq(3).val(data['this_year']);
\t\t\t\t\t\t\t\$('#templateCon input').eq(4).val(data['lx_11_month']);
\t\t\t\t\t\t\t\$('#templateCon input').eq(5).val(data['receivable']);
\t\t\t\t\t\t\t\$('#templateCon input').eq(6).val(data['account_payable']);
\t\t\t\t\t\t\t\$('#templateCon input').eq(7).val(data['receivable_others']);
\t\t\t\t\t\t\t\$('#templateCon input').eq(8).val(data['payable_others']);
\t\t\t\t\t\t\t\$('#templateCon input').eq(9).val(data['tax_bearing_rate']);
\t\t\t\t\t\t\t\$('#templateCon input').eq(10).val(data['lack_costing_invoice']);
\t\t\t\t\t\t\t\$('#templateCon input').eq(11).val(data['lack_expense_invoice']);
\t\t\t\t\t\t\t\$('#templateCon input').eq(12).val(data['accumulated_loss']);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}

\t\t\tfunction changeStatus(status, id) {
\t\t\t\tvar data = {
\t\t\t\t\turl: '/api/api_approves/edit_status',
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tid: id,
\t\t\t\t\t\tapprove_result: status
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tconsole.log(status)
\t\t\t\tif(status == 3) {
\t\t\t\t\t\$('#feedBack').show();
\t\t\t\t\t\$('#feedBack .hold').click(function() {
\t\t\t\t\t\tvar approve_reply = \$('#feedBack').find('input').val();
\t\t\t\t\t\tif(approve_reply == '') {
\t\t\t\t\t\t\tykp.prompt('不能为空！');
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\tykp.prompt('驳回成功！');
\t\t\t\t\t\t\tdata.data.approve_reply = approve_reply.trim();
\t\t\t\t\t\tdata.data.approve_reply = approve_reply;
\t\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t})
\t\t\t\t\tcs.closePop();
\t\t\t\t} else if(status == 1){
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
                 }else if(status == 2){
                 \tykp.prompt('审批通过！');
                 \tsetStatus(data);
                 } else {
\t\t\t\t\tsetStatus(data);
\t\t\t\t}

\t\t\t}
\t\t}

\t\t//自定义table
\t\tcs.custorm_check('#dynamic-table', '#datalist', true);

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
\t\t\t//\t\t\tcs.doAjax(data,function(res) {
\t\t\t//\t\t\t\t
\t\t\t//\t\t\t})
\t\t}

\t});

\tfunction checkAll(status) {
\t\t\$(\"tbody input[name='check']\").each(function(i, n) {
\t\t\tn.checked = status;
\t\t});
\t}
</script>";
    }

    public function getTemplateName()
    {
        return "admin/auditing/tally.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 168,  187 => 167,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	#templateCon label {*/
/* 		width: 97px;*/
/* 	}*/
/* 	*/
/* 	#templateCon input {*/
/* 		border: none;*/
/* 		background-color: rgba(0, 0, 0, 0);*/
/* 	}*/
/* </style>*/
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<!-- 		<h3 class="header smaller lighter blue">记账审批</h3> -->*/
/* 		<div class="actions" id="topTool">*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<div class="search">*/
/* 					<input type="text" class="search-input" sear="spm_approves.approve_code" maxlength="15" placeholder="审批编码">*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<div class="search">*/
/* 					<input type="text" class="search-input" sear="spm_approves.customer_name" maxlength="15" placeholder="企业名称" autofocus>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<div class="search">*/
/* 					<input type="text" class="search-input" sear="spm_approves.customer_num" maxlength="15" placeholder="企业编码">*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <button id="search" title="搜索"  class="btn btn-info btn-sm">*/
/*                     <i class="fa fa-search"></i>*/
/*                 </button>*/
/*             </div>*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32!important;">*/
/*                     <i class="fa fa-refresh"></i>*/
/*                 </button>*/
/*             </div>*/
/*             <div class="col-sx-4" contentAuthority="192" style=" float: left;margin-right: 5px;">*/
/*                 <button id="plSp" title="批量审批" class="btn sp btn-info btn-sm" style="border-color: #32CD32 !important;background: #32CD32 !important;">*/
/* 					<i class="fa fa-check-circle-o"></i>*/
/*                 </button>*/
/*             </div>*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <div id="filterBtns" style="display:inline-block;width:290px;">*/
/*                     <a href="javascript:void(0);" class="" style="background: #E6E6E6;" data-status="all">全部</a>*/
/*                     <a href="javascript:void(0);" class="" data-status="1"> 待审批</a>*/
/*                     <a href="javascript:void(0);" class="" data-status="2"> 已通过</a>*/
/*                     <a href="javascript:void(0);" class="" data-status="3"> 未通过</a>*/
/*                 </div>*/
/*             </div>*/
/* 			*/
/* 		</div>*/
/* 		<div class="auditing-data custom_table">*/
/* 			<table id="dynamic-table">*/
/* 				<thead>*/
/* 					<tr class="thColor">*/
/* 						<th class="center">*/
/* 							<label class="pos-rel">*/
/*                                 <input type="checkbox" class="ace" onclick="checkAll(this.checked)"/>*/
/*                                 <span class="lbl"></span>*/
/*                             </label>*/
/* 						</th>*/
/* 						<th>操作</th>*/
/* 						<th data-num="9">企业名称</th>*/
/* 						<th data-num="10">企业编码</th>*/
/* 						<th data-num="11">服务月份</th>*/
/* 						<th data-num="15">账务提示单</th>*/
/* 						<th data-num="13">负责人</th>*/
/* 						<th data-num="1">审批号码</th>*/
/* */
/* 						<th data-num="3">提交员工</th>*/
/* 						<th data-num="4">提交时间</th>*/
/* 						<th data-num="5">审批员工</th>*/
/* 						<th data-num="6">审批结果</th>*/
/* 						<th data-num="7">审批时间</th>*/
/* 						<th data-num="8">审批回复</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody id="datalist">*/
/* */
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
/* 	<div id="noteList" style="display:none;">*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 公司名称： </label>*/
/* 			<input disabled>*/
/* 			<label> 负责人： </label>*/
/* 			<input disabled>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 月份： </label>*/
/* 			<input disabled>*/
/* 			<label> 截至本年收入： </label>*/
/* 			<input disabled>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 连续11个月收入： </label>*/
/* 			<input disabled>*/
/* 			<label> 应收账款： </label>*/
/* 			<input disabled>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 应付账款： </label>*/
/* 			<input disabled>*/
/* 			<label> 其他应收账款： </label>*/
/* 			<input disabled>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 其他应付账款： </label>*/
/* 			<input disabled>*/
/* 			<label> 税负率： </label>*/
/* 			<input disabled>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 欠成本发票： </label>*/
/* 			<input disabled>*/
/* 			<label> 欠费用发票： </label>*/
/* 			<input disabled>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 本年累计亏损： </label>*/
/* 			<input disabled>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label style="float:left;margin-right:5px;"> 银行对账单： </label>*/
/* 			<div style="display:inline-block;"  class="fileList"></div>*/
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
/* 	{% include 'admin/customerDetail.html' %} {% include 'admin/mark.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script type="text/javascript">*/
/* 	$(function() {*/
/* 		if(cs.approve_authority({name:'记账',nodes:[192]})){*/
/*             $('[contentAuthority="192"]').show();*/
/*         }*/
/* */
/* 		var order = 'spm_approves.approve_result asc,spm_approves.id desc';*/
/* 		var pagesize = 10;*/
/* 		var cid = ykp.getCookie("custom_id");*/
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
/* 		clickBtn()*/
/* 		//点击顶部  按钮时调用*/
/* 		function clickBtn() {*/
/* 			$('#topTool').on('click', 'a', function(item) {*/
/* 				if (!$(this).hasClass('clc')) {*/
/*                     $(this).addClass('clc').siblings().removeClass('clc');*/
/*                 }*/
/* 				var status = $(this).attr('data-status');*/
/* 				$(this).addClass('active').siblings().removeClass('active');*/
/* 				var keyWords = [];*/
/* 				$('.search-input').each(function(i, e) {*/
/* 					if($(this).val().trim()) {*/
/* 						keyWords.push($(this).attr('sear') + ' like \'%' + $(this).val().trim() + '%\'');*/
/* 					}*/
/* 				});*/
/* 				if($('#search').attr('searStatsus')) {*/
/* 					getList('', status, keyWords); //已搜索点击状态*/
/* 				} else {*/
/* 					getList('', status); //未搜索点击状态*/
/* 				}*/
/* 				return false;*/
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
/* */
/* */
/* 		$('#plSp').click(function() {*/
/* 			var status = '',*/
/* 				n = 0,*/
/* 				Statu = false,*/
/* 				coldata = []*/
/* 			$('#datalist').find('input[type="checkbox"]:checked').each(function(i) {*/
/* 				n++;*/
/* 				status = $(this).parents('tr').attr('data-status') == 1 ? 2 : 1;*/
/* */
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
/* 							type: '6'*/
/* 						},*/
/* 						success: function(res) {*/
/* 							ykp.prompt('审批成功');*/
/* 							getList();*/
/* 						}*/
/* 					})*/
/* 				}*/
/* 			}*/
/* 		})*/
/* */
/* 		doSearch();*/
/* */
/* 		function doSearch() {*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			$('#search').click(function() {*/
/* 				$(this).attr('searStatsus', true);*/
/* 				var n = 0; //选中的数量*/
/* 				var w = ''; //选中的状态*/
/* 				$('#topTool a').each(function() {*/
/* 					if($(this).hasClass('active')) {*/
/* 						n += 1;*/
/* 						w = $(this).attr('data-status');*/
/* 					}*/
/* 				})*/
/* 				var keyWords = [];*/
/* 				$('.search-input').each(function(i, e) {*/
/* 					if($(this).val().trim()) {*/
/* 						keyWords.push($(this).attr('sear') + ' like \'%' + $(this).val().trim() + '%\'');*/
/* 					}*/
/* 				});*/
/* 				if(keyWords.length <= 0) {*/
/* 					ykp.prompt('请输入至少一个搜索条件');*/
/* 					return;*/
/* 				}*/
/* 				if(n == 0) {*/
/* 					getList('', '', keyWords);*/
/* 				} else {*/
/* 					if(w != 'all') {*/
/* 						getList('', w, keyWords);*/
/* 					} else {*/
/* 						getList('', '', keyWords);*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		$('#changePageNum').change(function() {*/
/* 			pagesize = $(this).val();*/
/* 			ykp.setCookie('page_size', pagesize);*/
/* 			if(!cs.getSpStatus('记账')) {*/
/* 				ykp.prompt('暂时没有开启审批功能');*/
/* 				return false;*/
/* 			}*/
/* 			var n = 0; //选中的数量*/
/* 			var w = ''; //选中的状态*/
/* 			$('#topTool a').each(function() {*/
/* 				if($(this).hasClass('active')) {*/
/* 					n += 1;*/
/* 					w = $(this).attr('data-status');*/
/* 				}*/
/* 			})*/
/* 			var keyWords = [];*/
/* 			$('.search-input').each(function(i, e) {*/
/* 				if($(this).val().trim()) {*/
/* 					keyWords.push($(this).attr('sear') + ' like \'%' + $(this).val().trim() + '%\'');*/
/* 				}*/
/* 			});*/
/* 			if(n == 0) {*/
/* 				getList('', '', keyWords);*/
/* 			} else {*/
/* 				if(w != 'all') {*/
/* 					getList('', w, keyWords);*/
/* 				} else {*/
/* 					getList('', '', keyWords);*/
/* 				}*/
/* 			}*/
/* 			//			getCustomerList(1);*/
/* 		})*/
/* */
/* 		getList();*/
/* 		$('#filterBtns a').mouseover(function(){*/
/*             $(this).addClass('over');*/
/*         })*/
/* */
/*         $('#filterBtns a').mouseout(function(){*/
/*             $(this).removeClass('over');*/
/*         })*/
/* */
/* */
/* 		function getList(current, clickstatus, keyWords) {*/
/* 			if(!cs.getSpStatus('记账')) {*/
/* 				ykp.prompt('暂时没有开启审批功能');*/
/* 				return false;*/
/* 			}*/
/* 			current = current ? current : 1;*/
/* //			var data = {*/
/* //				page_size: pagesize,*/
/* //				current: current,*/
/* //				type: 6,*/
/* //				order: order*/
/* //			}*/
/* 			var data = {*/
/*                 page_size: pagesize,*/
/* 				current: current,*/
/* 				type: 6,*/
/* 				order: order,*/
/*                 contentId: "#datalist", //默认排序*/
/* 				initOrder: "", //初始化sort*/
/* 				defaultOrder: order,*/
/* 				params: [{*/
/* 					id: "#dynamic-table",*/
/* 					field: ["","","spm_approves.customer_id", "", "", "","","","spm_approves.approve_code", "spm_approves.submit_employee_name", "spm_approves.submit_time",*/
/* 						"","spm_approves.approve_result", "spm_approves.approve_time", "spm_approves.approve_reply"]*/
/* 				}]*/
/*             }*/
/* 			//判断是否有过滤   */
/* 			if(clickstatus && !isNaN(clickstatus)) {*/
/* 				data.approve_result = clickstatus;*/
/* 			}*/
/* 			if(keyWords) {*/
/* 				data.search = keyWords;*/
/* 			}*/
/* 			if(cid) {*/
/* 				data.search = 'spm_approves.customer_name  '+ ' like \'%' + cid + '%\'';*/
/* 			}*/
/* 			cs.spList(data, function(res) {*/
/* 				//console.log(res)*/
/* 				var data = res.data.items;*/
/* 				if(data.length == 0) {*/
/* 					 setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 					$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="color:#7d7d7d !important;text-align:center !important;" class="page">暂无数据</div></td></tr>');*/
/* */
/* 				} else {*/
/* 					//审批权限为true可以审批,为false不可审批*/
/*                     var spApp = cs.approve_authority({name:'记账',nodes:[191]});*/
/*                     var cxApp = cs.approve_authority({name:'记账',nodes:[257]});*/
/* */
/*                     var styles = [];*/
/*                     $('#dynamic-table th').each(function(i,e){*/
/*                         styles.push($(this).css('display'));*/
/*                     });*/
/* */
/* 					var status = ['','待审批', '已通过', '未通过']; //审核状态*/
/* 					var statusColor = ['','#dfba49', '#45b6af', '#f3565d'];*/
/* 					var content = '';*/
/* 					for(var i in data) {*/
/* 						content += `<tr data-id="${data[i]['spm_approves.id']}" data-status="${data[i]['spm_approves.approve_result']}">*/
/* 								 <td class="center">*/
/*                                 <label class="pos-rel">*/
/*                                     <input type="checkbox" name="check" class="ace"/>*/
/*                                     <span class="lbl"></span>*/
/*                                 </label>*/
/*                             </td>*/
/* 						 <td>*/
/*                     	<label class="pos-rel">*/
/*                          <a href="javascript:void(0);" class="sp btOrange" data-status = "1" style="display: ${cxApp ? (data[i]['spm_approves.approve_result'] == 2 ? 'inline-block' : 'none') : 'none'};color:#fff !important" contentAuthority="258" title="撤销"><i class="fa fa-rotate-left"></i></a>*/
/*                         <a href="javascript:void(0);" class="sp btGreen" data-status = "2" style="display: ${spApp ? (data[i]['spm_approves.approve_result'] == 1 ?'inline-block' : 'none') : 'none'};color:#fff !important" contentAuthority="193" title="通过"><i class="fa fa-check-circle-o"></i></a>*/
/*                         <a href="javascript:void(0);" class="sp btRed" data-status = "3" style="display: ${spApp ? (data[i]['spm_approves.approve_result'] == 1 ?'inline-block' : 'none') : 'none'};color:#fff !important" contentAuthority="193" title="驳回"><i class="fa fa-times-circle"></i></a>*/
/*                     	</div>*/
/*                     </td>*/
/*                     <td data-num="9" style="display:${styles[2]}" data-cid="${data[i]['spm_approves.customer_id']}"><a class="customerDetail pos-rel" href="javascript:void(0);">${data[i].submitted_data['khm_customer.name']}</a>*/
/*                     <label class="pos-rel">*/
/* 				 				<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}" data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>*/
/* 			 				 </label>*/
/*                         </td>*/
/*                     <td data-num="10" style="display:${styles[3]}">${data[i].submitted_data['khm_customer.customer_num']}</td>*/
/*                     <td data-num="11" style="display:${styles[4]}">${data[i].submitted_data['jzm_service_info.time']}</td>*/
/*                     <td data-num="15" style="display:${styles[5]}"><a href="javascript:;" style="text-decoration:none;" class="noteList pos-rel" noteList-id="${data[i].submitted_data['jzm_service_info.id']}">查看</a></td>                    */
/*                     <td data-num="13" style="display:${styles[6]}">${data[i].submitted_data['jzm_service_info.fuze_id'] != '0' ? employees[data[i].submitted_data['jzm_service_info.fuze_id']] : ''}</td>*/
/*                     <td data-num="1" style="display:${styles[7]}">${data[i]['spm_approves.approve_code']}</td>*/
/*                     <td data-num="3" style="display:${styles[8]}">${data[i]['spm_approves.submit_employee_name']}</td>*/
/*                     <td data-num="4" style="display:${styles[9]}">${cs.getNowTime(data[i]['spm_approves.submit_time'],true)}</td>*/
/*                     <td data-num="5" style="display:${styles[10]}">${data[i]['approve_employee_name'] ? data[i]['approve_employee_name']['name'] : ""}</td>*/
/*                     <td data-num="6" style="display:${styles[11]}"><label class="label" style=" background:${statusColor[data[i]['spm_approves.approve_result']]} ">${status[data[i]['spm_approves.approve_result']]}</label></td>*/
/*                     <td data-num="7" style="display:${styles[12]}">${data[i]['spm_approves.approve_time'] != 0 ? cs.getNowTime(data[i]['spm_approves.approve_time'],true) : ''}</td>*/
/*                     <td data-num="8" style="display:${styles[13]}">${data[i]['spm_approves.approve_reply']}</td>*/
/*                 </tr>`;*/
/* 					}*/
/* */
/* 					$('#datalist').html(content);*/
/* 					$("[data-rel='tooltip']").tooltip();*/
/* 					custom.get_custom_info();*/
/* 					custom.showReamrk();*/
/* 					//账务提示单*/
/* 					noteList();*/
/* */
/* 					$("#datalist tr").find('.sp').click(function() {*/
/* 						var status = $(this).attr('data-status');*/
/* 						var id = $(this).parents('tr').attr('data-id');*/
/* 						if(status != '0') {*/
/* 							changeStatus(status, id);*/
/* 						}*/
/* 					})*/
/* */
/* 				}*/
/* 			}, "记账")*/
/* 			*/
/* 			ykp.setCookie("custom_id", "", (1 / 24));*/
/* */
/* 			//查看账务提示单*/
/* 			function noteList() {*/
/* 				$('.noteList').click(function() {*/
/* 					var month = $(this).parents('tr').find('td[data-num="11"]').text().trim();*/
/* 					var name = $(this).parents('tr').find('a.customerDetail').text().trim();*/
/* 					var head = $(this).parent().next().html();*/
/* 					var id = $(this).attr('noteList-id');*/
/* */
/* 					showMark('#noteList');*/
/* 					$('#showBox .title').text('账务提示单');*/
/* */
/* 					ykp.doAjax({*/
/* 						url: '/api/api_service/accounting_info2',*/
/* 						methods: 'post',*/
/* 						data: {*/
/* 							service_id: id */
/* 						},*/
/* 						success: function(res) {*/
/* 							var data = res.data;*/
/* 							*/
/* 							var arr = [];*/
/* 			                if(data['files']){*/
/* 			                	JSON.parse(data['files']).forEach(function(item) {*/
/* 				                	arr.push('<p style="padding-left: 2px;"><a href="'+item.url+'">'+item.name+'</a></p>')*/
/* 				                })*/
/* 			                	*/
/* 			                	$('#templateCon .fileList').append(arr.join(','));*/
/* 			                }*/
/* 							*/
/* //							fileList*/
/* 							*/
/* 							*/
/* //							$('#templateCon [field="pics"]').html(pics_html.join(''));*/
/* 							$('#templateCon input').eq(0).val(name);*/
/* 							$('#templateCon input').eq(1).val(head);*/
/* 							$('#templateCon input').eq(2).val(month);*/
/* 							$('#templateCon input').eq(3).val(data['this_year']);*/
/* 							$('#templateCon input').eq(4).val(data['lx_11_month']);*/
/* 							$('#templateCon input').eq(5).val(data['receivable']);*/
/* 							$('#templateCon input').eq(6).val(data['account_payable']);*/
/* 							$('#templateCon input').eq(7).val(data['receivable_others']);*/
/* 							$('#templateCon input').eq(8).val(data['payable_others']);*/
/* 							$('#templateCon input').eq(9).val(data['tax_bearing_rate']);*/
/* 							$('#templateCon input').eq(10).val(data['lack_costing_invoice']);*/
/* 							$('#templateCon input').eq(11).val(data['lack_expense_invoice']);*/
/* 							$('#templateCon input').eq(12).val(data['accumulated_loss']);*/
/* 						}*/
/* 					});*/
/* 				});*/
/* 			}*/
/* */
/* 			function changeStatus(status, id) {*/
/* 				var data = {*/
/* 					url: '/api/api_approves/edit_status',*/
/* 					methods: 'post',*/
/* 					data: {*/
/* 						id: id,*/
/* 						approve_result: status*/
/* 					}*/
/* 				}*/
/* 				console.log(status)*/
/* 				if(status == 3) {*/
/* 					$('#feedBack').show();*/
/* 					$('#feedBack .hold').click(function() {*/
/* 						var approve_reply = $('#feedBack').find('input').val();*/
/* 						if(approve_reply == '') {*/
/* 							ykp.prompt('不能为空！');*/
/* 							return false;*/
/* 						}else{*/
/* 							ykp.prompt('驳回成功！');*/
/* 							data.data.approve_reply = approve_reply.trim();*/
/* 						data.data.approve_reply = approve_reply;*/
/* 						setStatus(data);*/
/* 						$('.close_label').parents('.label_popup').fadeOut();*/
/* 						}*/
/* 						*/
/* 					})*/
/* 					cs.closePop();*/
/* 				} else if(status == 1){*/
/* //                  bootbox.confirm('确认撤销审批？', function(flag){*/
/* //                      if(flag){*/
/* //                          setStatus(data);*/
/* //                      }*/
/* //                  })*/
/*                   		layui.use('layer', function() {*/
/* 						var layer = layui.layer;*/
/* 						layer.confirm('确认撤销审批？', function(flag) {*/
/* 							if(flag) {*/
/* 						layer.closeAll();*/
/* 						setStatus(data);*/
/* 							}*/
/* 						});*/
/* 					})*/
/*                  }else if(status == 2){*/
/*                  	ykp.prompt('审批通过！');*/
/*                  	setStatus(data);*/
/*                  } else {*/
/* 					setStatus(data);*/
/* 				}*/
/* */
/* 			}*/
/* 		}*/
/* */
/* 		//自定义table*/
/* 		cs.custorm_check('#dynamic-table', '#datalist', true);*/
/* */
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
/* 			//			cs.doAjax(data,function(res) {*/
/* 			//				*/
/* 			//			})*/
/* 		}*/
/* */
/* 	});*/
/* */
/* 	function checkAll(status) {*/
/* 		$("tbody input[name='check']").each(function(i, n) {*/
/* 			n.checked = status;*/
/* 		});*/
/* 	}*/
/* </script>*/
