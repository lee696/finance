<?php

/* admin/clientManage/periodOfservice.html */
class __TwigTemplate_2a4c5656d8b4743916f652d51a0d8f2d4021d7774fbc3ea29d104f96dda268c8 extends Twig_Template
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
        echo "<style>
\t#tableChange {
\t\tlist-style: none;
\t\tmargin-left: 0;
\t\theight: 42px;
\t\tborder-bottom: 1px #d5e3ef solid;
\t}
\t
\t#tableChange li {
\t\tcursor: pointer;
\t\tpadding: 10px 15px;
\t\tborder-right: 1px #fff solid;
\t\tborder-left: 1px #fff solid;
\t\tborder-top: 1px #fff solid;
\t}
\t
\t#tableChange li.act {
\t\tborder-top-color: #4C8FBD;
\t\tborder-right: 1px solid #C5D0DC;
\t\tborder-bottom: 1px solid #fff;
\t\tborder-left: 1px solid #C5D0DC;
\t}
\t
\t#templateBox .form-horizontal .form-group label {
\t\twidth: 106px;
\t\tpadding-right: 0;
\t}
</style>
<div class=\" widget-main\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<!-- <h3 class=\"<h3 class=\"header smaller lighter  blue\">\">服务期</h3> -->
\t\t\t<ul id=\"tableChange\" class=\"clear\">
\t\t\t\t<li data-id=\"4\" class=\"fl act\">客服</li>
\t\t\t\t<li data-id=\"1\" class=\"fl\">收单</li>
\t\t\t\t<li data-id=\"2\" class=\"fl\">整单</li>
\t\t\t\t<li data-id=\"3\" class=\"fl\">记账</li>
\t\t\t\t<li data-id=\"5\" class=\"fl\">报税</li>
\t\t\t\t<li data-id=\"6\" class=\"fl\">送单</li>
\t\t\t</ul>
\t\t\t<div>
\t\t\t\t<div id=\"topTool\" style=\"padding:10px 0;\">
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t<input type=\"text\" pts=1 sear=\"customer_name\" placeholder=\"企业名称\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t<select style=\"width: 180px\" pts=1 sear=\"staff_name\" class=\"advandced-search select2-hidden-accssible\"  tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<option value=\"\">负责人</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<!--<input type=\"text\" pts=1 sear=\"staff_name\" placeholder=\"负责人\" />-->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t<!--<input type=\"select\" pts=1 sear=\"htm_contract.status\" placeholder=\"审批状态\"/>-->
\t\t\t\t\t\t<select type=\"select\" pts=0 sear=\"jzm_service_info.status\">
\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t<option value=\"0\">未开始</option>
\t\t\t\t\t\t\t<option value=\"1\">待审批</option>
\t\t\t\t\t\t\t<option value=\"2\">已通过</option>
\t\t\t\t\t\t\t<option value=\"3\">未通过</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t<div class=\"input-group\"  style=\"display: inline-flex; width: 205px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\"  data-status=\"rangtime\" pts=0 sear=\"jzm_service_info.refer_time\" name=\"date-range-picker\" placeholder=\"创建时间\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t<div class=\"input-group\"  style=\"display: inline-flex; width: 205px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\"  data-status=\"rangtime\" pts=0 sear=\"jzm_service_info.auth_time\" name=\"date-range-picker\" placeholder=\"审批时间\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t<button type=\"button\" id=\"search\" class=\"btn btn-info btn-sm\">
                             <i class=\"fa fa-search\"></i>
                         </button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t<button id=\"flush\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32  !important;\">
                            <i class=\"fa fa-refresh\"></i>
                        </button>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"clear:both;\"></div>
\t\t\t\t</div>
\t\t\t\t<div id=\"table_cont\" class=\"custom_table\">
\t\t\t\t\t<table id=\"c_service\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t<th data-num=\"1\">企业名称</th>
\t\t\t\t\t\t\t\t<th data-num=\"2\">服务月份</th>
\t\t\t\t\t\t\t\t<th data-num=\"3\">服务内容</th>
\t\t\t\t\t\t\t\t<th data-num=\"5\">负责人</th>
\t\t\t\t\t\t\t\t<th data-num=\"8\">创建人</th>
\t\t\t\t\t\t\t\t<th data-num=\"9\">
\t\t\t\t\t\t\t\t\t<span>创建时间</span>
\t\t\t\t\t\t\t\t\t<span class=\"table-sort\" field=\"jzm_service_info.refer_time\">
\t\t\t\t\t\t\t\t\t\t<i class=\"edge table-sort-asc\" sort=\"asc\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"edge table-sort-desc\" sort=\"desc\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th data-num=\"10\">审批状态</th>
\t\t\t\t\t\t\t\t<th data-num=\"11\">审批人</th>
\t\t\t\t\t\t\t\t<th data-num=\"12\">审批时间</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>

\t\t\t\t\t\t<tbody id=\"c_service_data\">
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t<table id=\"c_receiving\" class=\"hidden\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t<th data-num=\"1\">企业名称</th>
\t\t\t\t\t\t\t\t<th data-num=\"2\">服务月份</th>
\t\t\t\t\t\t\t\t<th data-num=\"3\">服务内容</th>
\t\t\t\t\t\t\t\t<th data-num=\"4\">服务方式</th>
\t\t\t\t\t\t\t\t<th data-num=\"5\">负责人</th>
\t\t\t\t\t\t\t\t<th data-num=\"8\">创建人</th>
\t\t\t\t\t\t\t\t<th data-num=\"9\">创建时间</th>
\t\t\t\t\t\t\t\t<th data-num=\"10\">审批状态</th>
\t\t\t\t\t\t\t\t<th data-num=\"11\">审批人</th>
\t\t\t\t\t\t\t\t<th data-num=\"12\">审批时间</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>

\t\t\t\t\t\t<tbody id=\"c_receiving_data\">
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t<table id=\"c_clearup\" class=\"hidden\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t<th data-num=\"1\">企业名称</th>
\t\t\t\t\t\t\t\t<th data-num=\"2\">服务月份</th>
\t\t\t\t\t\t\t\t<th data-num=\"3\">服务内容</th>
\t\t\t\t\t\t\t\t<th data-num=\"5\">负责人</th>
\t\t\t\t\t\t\t\t<th data-num=\"8\">创建人</th>
\t\t\t\t\t\t\t\t<th data-num=\"9\">创建时间</th>
\t\t\t\t\t\t\t\t<th data-num=\"10\">审批状态</th>
\t\t\t\t\t\t\t\t<th data-num=\"11\">审批人</th>
\t\t\t\t\t\t\t\t<th data-num=\"12\">审批时间</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t
\t\t\t\t\t\t<tbody id=\"c_clearup_data\">
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t<table id=\"makeAccount\" class=\"hidden\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t<th data-num=\"1\">企业名称</th>
\t\t\t\t\t\t\t\t<th data-num=\"2\">服务月份</th>
\t\t\t\t\t\t\t\t<th data-num=\"3\">服务内容</th>
\t\t\t\t\t\t\t\t<th data-num=\"5\">负责人</th>
\t\t\t\t\t\t\t\t<th data-num=\"8\">创建人</th>
\t\t\t\t\t\t\t\t<th data-num=\"9\">创建时间</th>
\t\t\t\t\t\t\t\t<th data-num=\"10\">审批状态</th>
\t\t\t\t\t\t\t\t<th data-num=\"11\">审批人</th>
\t\t\t\t\t\t\t\t<th data-num=\"12\">审批时间</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody id=\"makeAccount_data\">
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t<table id=\"taxReturns\" class=\"hidden\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t<th data-num=\"1\">企业名称</th>
\t\t\t\t\t\t\t\t<th data-num=\"2\">服务月份</th>
\t\t\t\t\t\t\t\t<th data-num=\"3\">服务内容</th>
\t\t\t\t\t\t\t\t<th data-num=\"5\">负责人</th>
\t\t\t\t\t\t\t\t<th data-num=\"8\">创建人</th>
\t\t\t\t\t\t\t\t<th data-num=\"9\">创建时间</th>
\t\t\t\t\t\t\t\t<th data-num=\"10\">审批状态</th>
\t\t\t\t\t\t\t\t<th data-num=\"11\">审批人</th>
\t\t\t\t\t\t\t\t<th data-num=\"12\">审批时间</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody id=\"taxReturns_data\">
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t<table id=\"sendorder\" class=\"hidden\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t<th data-num=\"1\">企业名称</th>
\t\t\t\t\t\t\t\t<th data-num=\"2\">服务月份</th>
\t\t\t\t\t\t\t\t<th data-num=\"3\">服务内容</th>
\t\t\t\t\t\t\t\t<th data-num=\"4\">服务方式</th>
\t\t\t\t\t\t\t\t<th data-num=\"5\">负责人</th>
\t\t\t\t\t\t\t\t<th data-num=\"8\">创建人</th>
\t\t\t\t\t\t\t\t<th data-num=\"9\">创建时间</th>
\t\t\t\t\t\t\t\t<th data-num=\"10\">审批状态</th>
\t\t\t\t\t\t\t\t<th data-num=\"11\">审批人</th>
\t\t\t\t\t\t\t\t<th data-num=\"12\">审批时间</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody id=\"sendorder_data\">
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" id=\"num\"></div>
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
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 221
        $this->loadTemplate("admin/mark.html", "admin/clientManage/periodOfservice.html", 221)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/clientManage/periodOfservice.html", 221)->display($context);
        // line 222
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script>
\tjQuery(function(\$) {
\t\tvar type = '';
\t\tvar order = 'jzm_service_info.refer_time desc';
\t\tvar employees = {}; //所有员工
\t\tcs.dataRang();
\t\t
\t\tvar table_name = [{table:'c_receiving',body:'c_receiving_data'},{table:'c_clearup',body:'c_clearup_data'},{table:'makeAccount',body:'makeAccount_data'},{table:'c_service',body:'c_service_data'},{table:'taxReturns',body:'taxReturns_data'},{table:'sendorder',body:'sendorder_data'}]

\t\t//默认获取客服数据
\t\tgetDatalist(4, 2);
\t\t//通用排序
 \t\tcs.general_sort({
\t\t\turl: '/api/api_service/index',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter:'',
\t\t\t\tlimit: pagesize,
\t\t\t\ttype:type
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '#pageBar'
\t\t\t},
\t\t\tinitOrder:'khm_customer.id',
\t\t\tdefaultOrder: order,
\t\t\tcontentId:\"#\"+table_name[type-1]['body'],
\t\t\tparams:[{
\t\t\t\tid:\"#\"+table_name[type-1]['table'],
\t\t\t\tfield:(type==1||type==6)?[\"khm_customer.name\",\"jzm_service_info.time\",\"\",
\t\t\t\t\t\"jzm_service_info.data_type\",\"\",\"htm_contract.create_by\",
\t\t\t\t\t\"jzm_service_info.refer_time\",\"jzm_service_info.status\",
\t\t\t\t\t\"jzm_service_info.auth_id\",\"jzm_service_info.auth_time\"]:
\t\t\t\t\t[\"khm_customer.name\",\"jzm_service_info.time\",\"\",\"\",
\t\t\t\t\t\"htm_contract.create_by\",\"jzm_service_info.refer_time\",
\t\t\t\t\t\"jzm_service_info.status\",\"jzm_service_info.auth_id\",\"jzm_service_info.auth_time\"]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});

\t\tykp.doAjax({
\t\t\tasync: false,
\t\t\turl: '/api/api_employees/f7',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tselect: 'bmm_employees.id,bmm_employees.name'
\t\t\t},
\t\t\tsuccess: function(res) {
\t\t\t\tvar data = res.data;
\t\t\t\t\$('.advandced-search').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});
\t\t\t\tfor(var i in data) {
                    if(data[i]['name']) {
                        employees[data[i]['id']] = data[i]['name'];
                        \$('.advandced-search').append(new Option(data[i]['name']));
                    }

\t\t\t\t}
\t\t\t}
\t\t});
\t\t
\t\t
\t\t\$('#flush').click(function() {
\t\t\tvar index = \$('#tableChange .act').index();
\t\t\tif(index == 0) {
\t\t\t\tgetDatalist(4, 1);
\t\t\t}
\t\t\tif(index == 1) {
\t\t\t\tgetDatalist(1, 1);
\t\t\t}
\t\t\tif(index == 2) {
\t\t\t\tgetDatalist(2, 1);
\t\t\t}
\t\t\tif(index == 3) {
\t\t\t\tgetDatalist(3, 1);
\t\t\t}
\t\t\tif(index == 4) {
\t\t\t\tgetDatalist(5, 1);
\t\t\t}
\t\t\tif(index == 5) {
\t\t\t\tgetDatalist(6, 1);
\t\t\t}
\t\t\tykp.setCookie('where','');
\t\t\t\$('[pts=\"1\"]').val('');
\t\t\t\$('[sear=\"staff_name\"]').val('').trigger('change');
\t\t\t\$('[sear=\"jzm_service_info.status\"]').val('').trigger('change');
\t\t\t\$('input[name=date-range-picker]').val('');
\t\t});

\t\t
\t\t//搜索
\t\tfunction doSearch(_type,auto) {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_service/index',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\t'type': _type,
\t\t\t\t\tpage_size: pagesize,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t};
\t\t\tcs.doSearch('#search', data, 'where', false, function(res,_filter) {
\t\t\t\tfilter = _filter;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tvar tbodies = ['#c_receiving_data', '#c_clearup_data', '#makeAccount_data', '#c_service_data', '#taxReturns_data', '#sendorder_data'];
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t}, 1000);
\t\t\t\t\tvar _type = type - 1;
\t\t\t\t\t\$(tbodies[_type]).html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\taddList(res);
\t\t\t});
\t\t}

\t\tfunction addList(res) {
\t\t\tcustom.get_custom_info();
\t\t\tvar data = res.data.items;
\t\t\t
\t\t\tvar html = [];
\t\t\tvar scont = '';
\t\t\tvar stype = '';
\t\t\tvar cstatus = '';
\t\t\tvar status = false;
\t\t\tvar author = '';
\t\t\tvar auth_time = '';
\t\t\tvar Type = {
\t\t\t\t1:\"外勤上门\",
\t\t\t\t2:\"客户上门\",
\t\t\t\t3:\"快递物流\"
\t\t\t}
\t\t\tfor(i = 0; i < data.length; i++) {
\t\t\t\tauthor = data[i]['jzm_service_info.auth_id'] != '0' ? employees[data[i]['jzm_service_info.auth_id']] : '';
\t\t\t\tauth_time = data[i]['jzm_service_info.auth_time'] != '0' ? cs.getNowTime(data[i]['jzm_service_info.auth_time'],true) : '';
\t\t\t\tswitch(parseInt(data[i]['jzm_service_info.type'])) {
\t\t\t\t\tcase 1:
\t\t\t\t\t\tscont = '收单';
\t\t\t\t\t\tstatus = true;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 2:
\t\t\t\t\t\tscont = '整单';
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 3:
\t\t\t\t\t\tscont = '记账';
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 4:
\t\t\t\t\t\tscont = '客服';
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 5:
\t\t\t\t\t\tscont = '报税';
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 6:
\t\t\t\t\t\tscont = '送单';
\t\t\t\t\t\tstatus = true;
\t\t\t\t\t\tbreak;
\t\t\t\t}

\t\t\t\tswitch(parseInt(data[i]['htm_contract.status'])) {
\t\t\t\t\tcase 0:
\t\t\t\t\t\tstype = '未执行';
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 1:
\t\t\t\t\t\tstype = '执行中';
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 2:
\t\t\t\t\t\tstype = '已挂起';
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 3:
\t\t\t\t\t\tstype = '已结束';
\t\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\t
\t\t\t\tswitch(parseInt(data[i]['jzm_service_info.status'])) {
\t\t\t\t\tcase 0:
\t\t\t\t\t\tcstatus = '未开始';
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 1:
\t\t\t\t\t\tcstatus = '待审批';
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 2:
\t\t\t\t\t\tcstatus = '已通过';
\t\t\t\t\t\tif(author == ''){
\t\t\t\t\t\t\tauthor = status ? employees[data[i]['jzm_service_info.refer_id']] : data[i]['bmm_employees.name'];
\t\t\t\t\t\t}
\t\t\t\t\t\tif(auth_time == ''){
\t\t\t\t\t\t\tauth_time = cs.getNowTime(data[i]['jzm_service_info.refer_time'],true);
\t\t\t\t\t\t}
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 3:
\t\t\t\t\t\tif(author == ''){
\t\t\t\t\t\t\tauthor = status ? employees[data[i]['jzm_service_info.refer_id']] : data[i]['bmm_employees.name'];
\t\t\t\t\t\t}
\t\t\t\t\t\tif(auth_time == ''){
\t\t\t\t\t\t\tauth_time = cs.getNowTime(data[i]['jzm_service_info.refer_time'],true);
\t\t\t\t\t\t}
\t\t\t\t\t\tcstatus = '未通过';
\t\t\t\t\t\tbreak;
\t\t\t\t}

\t\t\t\tif(status) {
\t\t\t\t\thtml.push(
\t\t\t\t\t\t'<tr>',
\t\t\t\t\t\t'<td data-num=\"1\" data-cid=\"' + data[i]['khm_customer.id'] + '\"><a href=\"#\" class=\"customerDetail pos-rel\">' + data[i]['khm_customer.name'] + '</a> ',
\t\t\t\t\t\t'<label class=\"pos-rel\"> <i class=\"iconBnt fa fa-info-circle\" style=\"color:'+(data[i]['Remark'].length > 0 ? 'red' : \"\")+'\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"' + cs.getRemark(data[i]['Remark']) + '\" ></i></label></td>',
\t\t\t\t\t\t'<td data-num=\"2\">' + data[i]['jzm_service_info.time'] + '</td>',
\t\t\t\t\t\t'<td data-num=\"3\">' + scont + '</td>',
\t\t\t\t\t\t'<td data-num=\"4\">'+(data[i]['jzm_service_info.data_type'] != 0 ? Type[data[i]['jzm_service_info.data_type']] : \"\")+'</td>',
\t\t\t\t\t\t//'<td data-num=\"5\">' +(data[i].HT_staff_info[0] ? data[i].HT_staff_info[0][\"name\"] :'')+ '</td>',
\t\t\t\t\t\t'<td data-num=\"5\">' + ( employees[data[i]['jzm_service_info.refer_id']] || \"\") + '</td>',
\t\t\t\t\t\t'<td data-num=\"8\">' + ( employees[data[i]['jzm_service_info.refer_id']] || \"\") + '</td>',
\t\t\t\t\t\t'<td data-num=\"9\">' + (data[i]['jzm_service_info.refer_time'] != '0' ? cs.getNowTime(data[i]['jzm_service_info.refer_time'],true) : '') + '</td>',
\t\t\t\t\t\t'<td data-num=\"10\">' + cstatus + '</td>',
\t\t\t\t\t\t'<td data-num=\"11\">' + author + '</td>',
\t\t\t\t\t\t'<td data-num=\"12\">' + auth_time + '</td>',
\t\t\t\t\t\t'</tr>'
\t\t\t\t\t)
\t\t\t\t} else {
                    html.push(
\t\t\t\t\t\t'<tr>',
\t\t\t\t\t\t'<td data-num=\"1\" data-cid=\"' + data[i]['khm_customer.id'] + '\"><a href=\"#\" class=\"customerDetail pos-rel\">' + data[i]['khm_customer.name'] + '</a> ',
\t\t\t\t\t\t'<label class=\"pos-rel\"> <i class=\"iconBnt fa fa-info-circle\" style=\"color:'+(data[i]['Remark'].length > 0 ? 'red' : \"\")+'\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"' + cs.getRemark(data[i]['Remark']) + '\" ></i></label></td>',
\t\t\t\t\t\t'<td data-num=\"2\">' + data[i]['jzm_service_info.time'] + '</td>',
\t\t\t\t\t\t'<td data-num=\"3\">' + scont + '</td>',
\t\t\t\t\t\t//'<td data-num=\"5\">' +(data[i].HT_staff_info != \"\" ? data[i].HT_staff_info[0].name : \"\") + '</td>',
\t\t\t\t\t\t//'<td data-num=\"8\">' +(data[i]['htm_contract.create_by']? employees[data[i]['htm_contract.create_by']]:'') + '</td>',
\t\t\t\t\t\t'<td data-num=\"5\">' +(data[i]['bmm_employees.name']? data[i]['bmm_employees.name']:'') + '</td>',
\t\t\t\t\t\t'<td data-num=\"8\">' +(data[i]['bmm_employees.name']? data[i]['bmm_employees.name']:'') + '</td>',
\t\t\t\t\t\t'<td data-num=\"9\">' + (data[i]['htm_contract.create_time'] != '0' ? cs.getNowTime(data[i]['jzm_service_info.refer_time'],true) : '') + '</td>',
\t\t\t\t\t\t'<td data-num=\"10\">' + cstatus + '</td>',
\t\t\t\t\t\t'<td data-num=\"11\">' + author + '</td>',
\t\t\t\t\t\t'<td data-num=\"12\">' + auth_time + '</td>',
\t\t\t\t\t\t'</tr>'
\t\t\t\t\t)
\t\t\t\t}
\t\t\t}
\t\t\tswitch(type) {
\t\t\t\tcase 4:
\t\t\t\t\t\$('#c_service_data').html(html.join(''));
\t\t\t\t\tcustom.get_custom_info();
\t\t\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\t\t\tcustom.showReamrk();
\t\t\t\t\tbreak;
\t\t\t\tcase 1:
\t\t\t\t\t\$('#c_receiving_data').html(html.join(''));
\t\t\t\t\tcustom.get_custom_info();
\t\t\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\t\t\tcustom.showReamrk();
\t\t\t\t\tbreak;
\t\t\t\tcase 2:
\t\t\t\t\t\$('#c_clearup_data').html(html.join(''));
\t\t\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\t\t\tcustom.showReamrk();
\t\t\t\t\tbreak;
\t\t\t\tcase 3:
\t\t\t\t\t\$('#makeAccount_data').html(html.join(''));
\t\t\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\t\t\tcustom.get_custom_info();
\t\t\t\t\tcustom.showReamrk();
\t\t\t\t\tbreak;
\t\t\t\tcase 5:
\t\t\t\t\t\$('#taxReturns_data').html(html.join(''));
\t\t\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\t\t\tcustom.get_custom_info();
\t\t\t\t\tcustom.showReamrk();
\t\t\t\t\tbreak;
\t\t\t\tcase 6:
\t\t\t\t\t\$('#sendorder_data').html(html.join(''));
\t\t\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\t\t\tcustom.get_custom_info();
\t\t\t\t\tcustom.showReamrk();
\t\t\t\t\tbreak;
\t\t\t}
\t\t}

\t\t//table表切换
\t\t\$('#tableChange li').click(function() {
\t\t\tvar it = \$(this);
\t\t\tit.addClass('act').siblings().removeClass('act');
\t\t\tvar index = \$(this).index();
\t\t\t\$('#table_cont table').eq(index).removeClass('hidden').siblings().addClass('hidden');
\t\t\t
\t\t\tykp.setCookie('where','');
\t\t\t\$('[pts=\"1\"]').val('');
\t\t\t\$('[sear=\"staff_name\"]').val('').trigger('change');
\t\t\t\$('[sear=\"jzm_service_info.status\"]').val('').trigger('change');
\t\t\t\$('input[name=date-range-picker]').val('');
\t\t\t
\t\t\tif(index == 0) {
\t\t\t\tgetDatalist(4, 1);
\t\t\t}
\t\t\tif(index == 1) {
\t\t\t\tgetDatalist(1, 1);
\t\t\t}
\t\t\tif(index == 2) {
\t\t\t\tgetDatalist(2, 1);
\t\t\t}
\t\t\tif(index == 3) {
\t\t\t\tgetDatalist(3, 1);
\t\t\t}
\t\t\tif(index == 4) {
\t\t\t\tgetDatalist(5, 1);
\t\t\t}
\t\t\tif(index == 5) {
\t\t\t\tgetDatalist(6, 1);
\t\t\t}
\t\t\t//通用排序
\t\t\tcs.general_sort({
\t\t\t\turl: '/api/api_service/index',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tfilter:'',
\t\t\t\t\tlimit: pagesize,
\t\t\t\t\ttype:type
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tdefaultOrder: \"\",
\t\t\t\tinitOrder:'khm_customer.id',
\t\t\t\tcontentId:\"#\"+table_name[type-1]['body'],
\t\t\t\tparams:[{
\t\t\t\t\tid:\"#\"+table_name[type-1]['table'],
\t\t\t\t\tfield:(type==1||type==6)?[\"khm_customer.name\",\"jzm_service_info.time\",\"\",
\t\t\t\t\t\t\"jzm_service_info.data_type\",\"\",\"htm_contract.create_by\",
\t\t\t\t\t\t\"jzm_service_info.refer_time\",\"jzm_service_info.status\",
\t\t\t\t\t\t\"jzm_service_info.auth_id\",\"jzm_service_info.auth_time\"]:
\t\t\t\t\t\t[\"khm_customer.name\",\"jzm_service_info.time\",\"\",\"\",
\t\t\t\t\t\t\"htm_contract.create_by\",\"jzm_service_info.refer_time\",
\t\t\t\t\t\t\"jzm_service_info.status\",\"jzm_service_info.auth_id\",\"jzm_service_info.auth_time\"]
\t\t\t\t}]
\t\t\t}, function(res, _sort_role) {
\t\t\t\tsort_role = _sort_role;
\t\t\t\taddList(res);
\t\t\t});
\t\t\t\$('[pts=\"1\"]').val('');
\t\t\t\$('[sear=\"staff_name\"]').val('').trigger('change');
\t\t\t\$('[sear=\"jzm_service_info.status\"]').val('').trigger('change');
\t\t});

\t\tvar pagesize = 10;
\t\t//每页数量
\t\t\$('#changePageNum').change(function() {
\t\t\tpagesize = \$(this).val();
\t\t\tykp.setCookie('page_size',pagesize);
\t\t\tvar idex = \$('#tableChange li.act').index();
\t\t\t\$('.ui-pagination-container').remove();
\t\t\tif(idex == 0) {
\t\t\t\tgetDatalist(4, 1);
\t\t\t}
\t\t\tif(idex == 1) {
\t\t\t\tgetDatalist(1, 1);
\t\t\t}
\t\t\tif(idex == 2) {
\t\t\t\tgetDatalist(2, 1);
\t\t\t}
\t\t\tif(idex == 3) {
\t\t\t\tgetDatalist(3, 1);
\t\t\t}
\t\t\tif(idex == 4) {
\t\t\t\tgetDatalist(5, 1);
\t\t\t}
\t\t\tif(idex == 5) {
\t\t\t\tgetDatalist(6, 1);
\t\t\t}
\t\t});

\t\t//获取列表数据Ajax
\t\tfunction getDatalist(_type, auto) {
\t\t\ttype = _type;
\t\t\tvar where = [];
\t\t\tif(auto == 2){
\t\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\t\tykp.setCookie(\"where\", \"\");
\t\t\t}
\t\t\t/* if(auto > 0){
\t\t\t\tvar num = 0;
\t\t\t\tvar partantId = \"\";

\t\t\t\t\$(partantId + ' [pts=4]').each(function() {
\t\t\t\t\tif(\$(this).val() != \"\") {
\t\t\t\t\t\tif(\$(this).attr('table')) {
\t\t\t\t\t\t\twhere.push('htm_contract.id IN  (SELECT contract_id FROM ' + \$(this).attr('table') + ' WHERE ' + \$(this).attr('sear') + '  =' + \$(this).val() + ')');
\t\t\t\t\t\t\tnum++;
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\twhere.push(\$(this).attr('sear') + ' IN (SELECT customer_id FROM ckm_position_num WHERE pos_name LIKE \\'%' + \$(this).val() + '%\\')');
\t\t\t\t\t\tnum++;
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t\$(partantId + ' [pts=2]').each(function() {
\t\t\t\t\tif(\$(this).select2('data')[0]['id'] != \"\") {
\t\t\t\t\t\twhere.push('FIND_IN_SET(' + \$(this).select2('data')[0]['id'] + ',' + \$(this).attr('sear') + ')');
\t\t\t\t\t\tnum++;
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t\$(partantId + ' [pts=3]').each(function() {
\t\t\t\t\tif(\$(this).select2('data')[0]['id'] != \"\") {
\t\t\t\t\t\twhere.push(\$(this).attr('sear') + ' = ' + \$(this).select2('data')[0]['id']);
\t\t\t\t\t\tnum++;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t\$(partantId + ' [pts=5getNodes]').each(function() {
\t\t\t\t\twhere.push(\$(this).attr('sear') + ' = ' + \$(this).val());
\t\t\t\t\tnum++;
\t\t\t\t});
\t\t\t\t\$(partantId + ' [pts=1]').each(function() {
\t\t\t\t\tif(\$(this).val() != \"\") {

\t\t\t\t\t\tif(\$(this).attr('area') == '0') {
\t\t\t\t\t\t\twhere.push('(ckm_administration.type = 1 AND ckm_administration.province LIKE \\'%' + \$(this).val() + '%\\') OR (ckm_administration.type = 2 AND ckm_administration.city LIKE \\'%' + \$(this).val() + '%\\')');
\t\t\t\t\t\t\tnum++;
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('area') == '1') {
\t\t\t\t\t\t\twhere.push('ckm_position.city LIKE \\'%' + \$(this).val() + '%\\'');
\t\t\t\t\t\t\tnum++;
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('status') == 'time' && gz) {
\t\t\t\t\t\t\t//data['data'][\$(this).attr('sear')] = \$(this).val().replace(/\\./, \"-\");
\t\t\t\t\t\t\totherSear[\$(this).attr('sear')] = \$(this).val().replace(/\\./, \"-\");
\t\t\t\t\t\t\tnum++;
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t} else if(\$(this).attr('status') == 'time') {
\t\t\t\t\t\t\t//data['data'][\$(this).attr('sear')] = \$(this).val().replace(/\\./, \"\");
\t\t\t\t\t\t\totherSear[\$(this).attr('sear')] = \$(this).val().replace(/\\./, \"-\");
\t\t\t\t\t\t\tnum++;
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\t//data['data'][\$(this).attr('sear')] = \$(this).val();
\t\t\t\t\t\t//otherSear[\$(this).attr('sear')] = \$(this).val();
\t\t\t\t\t\tnum++;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t\$(partantId + ' [pts=0]').each(function() {
\t\t\t\t\t//后面修改搜搜条件要用到
\t\t\t\t\t//if(\$(this).attr('okeywords')) {
\t\t\t\t\t//if(\$(this).val() != \"\") {
\t\t\t\t\t//data.data[\$(this).attr('sear')] = \$(this).val();
\t\t\t\t\t//num++;
\t\t\t\t\t//}
\t\t\t\t\t//} else {
\t\t\t\t\tif(\$(this).val() != \"\") {
\t\t\t\t\t\tif(\$(this).attr('data-status') == 'rangtime') {
\t\t\t\t\t\t\tvar time = \$(this).val().split('-');
\t\t\t\t\t\t\twhere.push(\$(this).attr('sear') + ' between ' + new Date(time[0]) / 1000 + ' and ' + new Date(time[1]) / 1000);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\twhere.push(\$(this).attr('sear') + ' like \\'%' + \$(this).val() + '%\\'');
\t\t\t\t\t\t}

\t\t\t\t\t\tnum++;
\t\t\t\t\t}
\t\t\t\t\t//}
\t\t\t\t});

\t\t\t\t//判断输入框是否输入检索关键字    && num == 0
\t\t\t\tif(num == 0){
\t\t\t\t\twhere = '';
\t\t\t\t}else if(num > 0 && where.length > 0 ) {
\t\t\t\t\twhere = where.join(' and ');
\t\t\t\t\tykp.setCookie('where', where);
\t\t\t\t}
\t\t\t} */
\t\t\tdoSearch(type,auto);
\t\t\tvar data = {
 \t\t\t\ttype: type,
\t\t\t\t//\"page_size\": pagesize, 
    \t\t\tlimit:pagesize,
                order: order,
                //'where': where,
\t\t\t};

 \t\t\tykp.list({
\t\t\t\turl: '/api/api_service/index',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: data,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\t\$('#table_cont').not('hidden').find('tbody').html('<tr><td colspan=\"30\" style=\"color:#7d7d7d;text-align:center !important;\">暂无数据</td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t});
\t\t}
\t});
</script>
";
        // line 720
        $this->loadTemplate("admin/customerDetail.html", "admin/clientManage/periodOfservice.html", 720)->display($context);
    }

    public function getTemplateName()
    {
        return "admin/clientManage/periodOfservice.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  745 => 720,  245 => 222,  241 => 221,  19 => 1,);
    }
}
/* <style>*/
/* 	#tableChange {*/
/* 		list-style: none;*/
/* 		margin-left: 0;*/
/* 		height: 42px;*/
/* 		border-bottom: 1px #d5e3ef solid;*/
/* 	}*/
/* 	*/
/* 	#tableChange li {*/
/* 		cursor: pointer;*/
/* 		padding: 10px 15px;*/
/* 		border-right: 1px #fff solid;*/
/* 		border-left: 1px #fff solid;*/
/* 		border-top: 1px #fff solid;*/
/* 	}*/
/* 	*/
/* 	#tableChange li.act {*/
/* 		border-top-color: #4C8FBD;*/
/* 		border-right: 1px solid #C5D0DC;*/
/* 		border-bottom: 1px solid #fff;*/
/* 		border-left: 1px solid #C5D0DC;*/
/* 	}*/
/* 	*/
/* 	#templateBox .form-horizontal .form-group label {*/
/* 		width: 106px;*/
/* 		padding-right: 0;*/
/* 	}*/
/* </style>*/
/* <div class=" widget-main">*/
/* 	<div class="row">*/
/* 		<div class="col-lg-12">*/
/* 			<!-- <h3 class="<h3 class="header smaller lighter  blue">">服务期</h3> -->*/
/* 			<ul id="tableChange" class="clear">*/
/* 				<li data-id="4" class="fl act">客服</li>*/
/* 				<li data-id="1" class="fl">收单</li>*/
/* 				<li data-id="2" class="fl">整单</li>*/
/* 				<li data-id="3" class="fl">记账</li>*/
/* 				<li data-id="5" class="fl">报税</li>*/
/* 				<li data-id="6" class="fl">送单</li>*/
/* 			</ul>*/
/* 			<div>*/
/* 				<div id="topTool" style="padding:10px 0;">*/
/* 					<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 						<input type="text" pts=1 sear="customer_name" placeholder="企业名称" />*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 						<select style="width: 180px" pts=1 sear="staff_name" class="advandced-search select2-hidden-accssible"  tabindex="-1" aria-hidden="true">*/
/* 							<option value="">负责人</option>*/
/* 						</select>*/
/* 						<!--<input type="text" pts=1 sear="staff_name" placeholder="负责人" />-->*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 						<!--<input type="select" pts=1 sear="htm_contract.status" placeholder="审批状态"/>-->*/
/* 						<select type="select" pts=0 sear="jzm_service_info.status">*/
/* 							<option value=""> 请选择 </option>*/
/* 							<option value="0">未开始</option>*/
/* 							<option value="1">待审批</option>*/
/* 							<option value="2">已通过</option>*/
/* 							<option value="3">未通过</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 						<div class="input-group"  style="display: inline-flex; width: 205px;">*/
/* 								<span class="input-group-addon">*/
/* 									<i class="fa fa-calendar bigger-110"></i>*/
/* 								</span>*/
/* 							<input class="form-control" type="text"  data-status="rangtime" pts=0 sear="jzm_service_info.refer_time" name="date-range-picker" placeholder="创建时间" id="id-date-range-picker-1" />*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 						<div class="input-group"  style="display: inline-flex; width: 205px;">*/
/* 								<span class="input-group-addon">*/
/* 									<i class="fa fa-calendar bigger-110"></i>*/
/* 								</span>*/
/* 							<input class="form-control" type="text"  data-status="rangtime" pts=0 sear="jzm_service_info.auth_time" name="date-range-picker" placeholder="审批时间" id="id-date-range-picker-1" />*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 						<button type="button" id="search" class="btn btn-info btn-sm">*/
/*                              <i class="fa fa-search"></i>*/
/*                          </button>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 						<button id="flush" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32  !important;">*/
/*                             <i class="fa fa-refresh"></i>*/
/*                         </button>*/
/* 					</div>*/
/* 					<div style="clear:both;"></div>*/
/* 				</div>*/
/* 				<div id="table_cont" class="custom_table">*/
/* 					<table id="c_service">*/
/* 						<thead>*/
/* 							<tr class="thColor">*/
/* 								<th data-num="1">企业名称</th>*/
/* 								<th data-num="2">服务月份</th>*/
/* 								<th data-num="3">服务内容</th>*/
/* 								<th data-num="5">负责人</th>*/
/* 								<th data-num="8">创建人</th>*/
/* 								<th data-num="9">*/
/* 									<span>创建时间</span>*/
/* 									<span class="table-sort" field="jzm_service_info.refer_time">*/
/* 										<i class="edge table-sort-asc" sort="asc"></i>*/
/* 										<i class="edge table-sort-desc" sort="desc"></i>*/
/* 									</span>*/
/* 								</th>*/
/* 								<th data-num="10">审批状态</th>*/
/* 								<th data-num="11">审批人</th>*/
/* 								<th data-num="12">审批时间</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* */
/* 						<tbody id="c_service_data">*/
/* 						</tbody>*/
/* 					</table>*/
/* 					<table id="c_receiving" class="hidden">*/
/* 						<thead>*/
/* 							<tr class="thColor">*/
/* 								<th data-num="1">企业名称</th>*/
/* 								<th data-num="2">服务月份</th>*/
/* 								<th data-num="3">服务内容</th>*/
/* 								<th data-num="4">服务方式</th>*/
/* 								<th data-num="5">负责人</th>*/
/* 								<th data-num="8">创建人</th>*/
/* 								<th data-num="9">创建时间</th>*/
/* 								<th data-num="10">审批状态</th>*/
/* 								<th data-num="11">审批人</th>*/
/* 								<th data-num="12">审批时间</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* */
/* 						<tbody id="c_receiving_data">*/
/* 						</tbody>*/
/* 					</table>*/
/* 					<table id="c_clearup" class="hidden">*/
/* 						<thead>*/
/* 							<tr class="thColor">*/
/* 								<th data-num="1">企业名称</th>*/
/* 								<th data-num="2">服务月份</th>*/
/* 								<th data-num="3">服务内容</th>*/
/* 								<th data-num="5">负责人</th>*/
/* 								<th data-num="8">创建人</th>*/
/* 								<th data-num="9">创建时间</th>*/
/* 								<th data-num="10">审批状态</th>*/
/* 								<th data-num="11">审批人</th>*/
/* 								<th data-num="12">审批时间</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						*/
/* 						<tbody id="c_clearup_data">*/
/* 						</tbody>*/
/* 					</table>*/
/* 					<table id="makeAccount" class="hidden">*/
/* 						<thead>*/
/* 							<tr class="thColor">*/
/* 								<th data-num="1">企业名称</th>*/
/* 								<th data-num="2">服务月份</th>*/
/* 								<th data-num="3">服务内容</th>*/
/* 								<th data-num="5">负责人</th>*/
/* 								<th data-num="8">创建人</th>*/
/* 								<th data-num="9">创建时间</th>*/
/* 								<th data-num="10">审批状态</th>*/
/* 								<th data-num="11">审批人</th>*/
/* 								<th data-num="12">审批时间</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody id="makeAccount_data">*/
/* 						</tbody>*/
/* 					</table>*/
/* 					<table id="taxReturns" class="hidden">*/
/* 						<thead>*/
/* 							<tr class="thColor">*/
/* 								<th data-num="1">企业名称</th>*/
/* 								<th data-num="2">服务月份</th>*/
/* 								<th data-num="3">服务内容</th>*/
/* 								<th data-num="5">负责人</th>*/
/* 								<th data-num="8">创建人</th>*/
/* 								<th data-num="9">创建时间</th>*/
/* 								<th data-num="10">审批状态</th>*/
/* 								<th data-num="11">审批人</th>*/
/* 								<th data-num="12">审批时间</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody id="taxReturns_data">*/
/* 						</tbody>*/
/* 					</table>*/
/* 					<table id="sendorder" class="hidden">*/
/* 						<thead>*/
/* 							<tr class="thColor">*/
/* 								<th data-num="1">企业名称</th>*/
/* 								<th data-num="2">服务月份</th>*/
/* 								<th data-num="3">服务内容</th>*/
/* 								<th data-num="4">服务方式</th>*/
/* 								<th data-num="5">负责人</th>*/
/* 								<th data-num="8">创建人</th>*/
/* 								<th data-num="9">创建时间</th>*/
/* 								<th data-num="10">审批状态</th>*/
/* 								<th data-num="11">审批人</th>*/
/* 								<th data-num="12">审批时间</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody id="sendorder_data">*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 				<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 					<div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
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
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% include 'admin/mark.html' %} {% include 'admin/customerDetail.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* <script>*/
/* 	jQuery(function($) {*/
/* 		var type = '';*/
/* 		var order = 'jzm_service_info.refer_time desc';*/
/* 		var employees = {}; //所有员工*/
/* 		cs.dataRang();*/
/* 		*/
/* 		var table_name = [{table:'c_receiving',body:'c_receiving_data'},{table:'c_clearup',body:'c_clearup_data'},{table:'makeAccount',body:'makeAccount_data'},{table:'c_service',body:'c_service_data'},{table:'taxReturns',body:'taxReturns_data'},{table:'sendorder',body:'sendorder_data'}]*/
/* */
/* 		//默认获取客服数据*/
/* 		getDatalist(4, 2);*/
/* 		//通用排序*/
/*  		cs.general_sort({*/
/* 			url: '/api/api_service/index',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter:'',*/
/* 				limit: pagesize,*/
/* 				type:type*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '#pageBar'*/
/* 			},*/
/* 			initOrder:'khm_customer.id',*/
/* 			defaultOrder: order,*/
/* 			contentId:"#"+table_name[type-1]['body'],*/
/* 			params:[{*/
/* 				id:"#"+table_name[type-1]['table'],*/
/* 				field:(type==1||type==6)?["khm_customer.name","jzm_service_info.time","",*/
/* 					"jzm_service_info.data_type","","htm_contract.create_by",*/
/* 					"jzm_service_info.refer_time","jzm_service_info.status",*/
/* 					"jzm_service_info.auth_id","jzm_service_info.auth_time"]:*/
/* 					["khm_customer.name","jzm_service_info.time","","",*/
/* 					"htm_contract.create_by","jzm_service_info.refer_time",*/
/* 					"jzm_service_info.status","jzm_service_info.auth_id","jzm_service_info.auth_time"]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* */
/* 		ykp.doAjax({*/
/* 			async: false,*/
/* 			url: '/api/api_employees/f7',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				select: 'bmm_employees.id,bmm_employees.name'*/
/* 			},*/
/* 			success: function(res) {*/
/* 				var data = res.data;*/
/* 				$('.advandced-search').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* 				for(var i in data) {*/
/*                     if(data[i]['name']) {*/
/*                         employees[data[i]['id']] = data[i]['name'];*/
/*                         $('.advandced-search').append(new Option(data[i]['name']));*/
/*                     }*/
/* */
/* 				}*/
/* 			}*/
/* 		});*/
/* 		*/
/* 		*/
/* 		$('#flush').click(function() {*/
/* 			var index = $('#tableChange .act').index();*/
/* 			if(index == 0) {*/
/* 				getDatalist(4, 1);*/
/* 			}*/
/* 			if(index == 1) {*/
/* 				getDatalist(1, 1);*/
/* 			}*/
/* 			if(index == 2) {*/
/* 				getDatalist(2, 1);*/
/* 			}*/
/* 			if(index == 3) {*/
/* 				getDatalist(3, 1);*/
/* 			}*/
/* 			if(index == 4) {*/
/* 				getDatalist(5, 1);*/
/* 			}*/
/* 			if(index == 5) {*/
/* 				getDatalist(6, 1);*/
/* 			}*/
/* 			ykp.setCookie('where','');*/
/* 			$('[pts="1"]').val('');*/
/* 			$('[sear="staff_name"]').val('').trigger('change');*/
/* 			$('[sear="jzm_service_info.status"]').val('').trigger('change');*/
/* 			$('input[name=date-range-picker]').val('');*/
/* 		});*/
/* */
/* 		*/
/* 		//搜索*/
/* 		function doSearch(_type,auto) {*/
/* 			var data = {*/
/* 				url: '/api/api_service/index',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					'type': _type,*/
/* 					page_size: pagesize,*/
/* 					order: order*/
/* 				}*/
/* 			};*/
/* 			cs.doSearch('#search', data, 'where', false, function(res,_filter) {*/
/* 				filter = _filter;*/
/* 				if(res.data.items == "") {*/
/* 					var tbodies = ['#c_receiving_data', '#c_clearup_data', '#makeAccount_data', '#c_service_data', '#taxReturns_data', '#sendorder_data'];*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt("暂无数据");*/
/* 					}, 1000);*/
/* 					var _type = type - 1;*/
/* 					$(tbodies[_type]).html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					return false;*/
/* 				}*/
/* 				addList(res);*/
/* 			});*/
/* 		}*/
/* */
/* 		function addList(res) {*/
/* 			custom.get_custom_info();*/
/* 			var data = res.data.items;*/
/* 			*/
/* 			var html = [];*/
/* 			var scont = '';*/
/* 			var stype = '';*/
/* 			var cstatus = '';*/
/* 			var status = false;*/
/* 			var author = '';*/
/* 			var auth_time = '';*/
/* 			var Type = {*/
/* 				1:"外勤上门",*/
/* 				2:"客户上门",*/
/* 				3:"快递物流"*/
/* 			}*/
/* 			for(i = 0; i < data.length; i++) {*/
/* 				author = data[i]['jzm_service_info.auth_id'] != '0' ? employees[data[i]['jzm_service_info.auth_id']] : '';*/
/* 				auth_time = data[i]['jzm_service_info.auth_time'] != '0' ? cs.getNowTime(data[i]['jzm_service_info.auth_time'],true) : '';*/
/* 				switch(parseInt(data[i]['jzm_service_info.type'])) {*/
/* 					case 1:*/
/* 						scont = '收单';*/
/* 						status = true;*/
/* 						break;*/
/* 					case 2:*/
/* 						scont = '整单';*/
/* 						break;*/
/* 					case 3:*/
/* 						scont = '记账';*/
/* 						break;*/
/* 					case 4:*/
/* 						scont = '客服';*/
/* 						break;*/
/* 					case 5:*/
/* 						scont = '报税';*/
/* 						break;*/
/* 					case 6:*/
/* 						scont = '送单';*/
/* 						status = true;*/
/* 						break;*/
/* 				}*/
/* */
/* 				switch(parseInt(data[i]['htm_contract.status'])) {*/
/* 					case 0:*/
/* 						stype = '未执行';*/
/* 						break;*/
/* 					case 1:*/
/* 						stype = '执行中';*/
/* 						break;*/
/* 					case 2:*/
/* 						stype = '已挂起';*/
/* 						break;*/
/* 					case 3:*/
/* 						stype = '已结束';*/
/* 						break;*/
/* 				}*/
/* 				*/
/* 				switch(parseInt(data[i]['jzm_service_info.status'])) {*/
/* 					case 0:*/
/* 						cstatus = '未开始';*/
/* 						break;*/
/* 					case 1:*/
/* 						cstatus = '待审批';*/
/* 						break;*/
/* 					case 2:*/
/* 						cstatus = '已通过';*/
/* 						if(author == ''){*/
/* 							author = status ? employees[data[i]['jzm_service_info.refer_id']] : data[i]['bmm_employees.name'];*/
/* 						}*/
/* 						if(auth_time == ''){*/
/* 							auth_time = cs.getNowTime(data[i]['jzm_service_info.refer_time'],true);*/
/* 						}*/
/* 						break;*/
/* 					case 3:*/
/* 						if(author == ''){*/
/* 							author = status ? employees[data[i]['jzm_service_info.refer_id']] : data[i]['bmm_employees.name'];*/
/* 						}*/
/* 						if(auth_time == ''){*/
/* 							auth_time = cs.getNowTime(data[i]['jzm_service_info.refer_time'],true);*/
/* 						}*/
/* 						cstatus = '未通过';*/
/* 						break;*/
/* 				}*/
/* */
/* 				if(status) {*/
/* 					html.push(*/
/* 						'<tr>',*/
/* 						'<td data-num="1" data-cid="' + data[i]['khm_customer.id'] + '"><a href="#" class="customerDetail pos-rel">' + data[i]['khm_customer.name'] + '</a> ',*/
/* 						'<label class="pos-rel"> <i class="iconBnt fa fa-info-circle" style="color:'+(data[i]['Remark'].length > 0 ? 'red' : "")+'" data-rel="tooltip" data-placement="right" data-html="true" title="' + cs.getRemark(data[i]['Remark']) + '" ></i></label></td>',*/
/* 						'<td data-num="2">' + data[i]['jzm_service_info.time'] + '</td>',*/
/* 						'<td data-num="3">' + scont + '</td>',*/
/* 						'<td data-num="4">'+(data[i]['jzm_service_info.data_type'] != 0 ? Type[data[i]['jzm_service_info.data_type']] : "")+'</td>',*/
/* 						//'<td data-num="5">' +(data[i].HT_staff_info[0] ? data[i].HT_staff_info[0]["name"] :'')+ '</td>',*/
/* 						'<td data-num="5">' + ( employees[data[i]['jzm_service_info.refer_id']] || "") + '</td>',*/
/* 						'<td data-num="8">' + ( employees[data[i]['jzm_service_info.refer_id']] || "") + '</td>',*/
/* 						'<td data-num="9">' + (data[i]['jzm_service_info.refer_time'] != '0' ? cs.getNowTime(data[i]['jzm_service_info.refer_time'],true) : '') + '</td>',*/
/* 						'<td data-num="10">' + cstatus + '</td>',*/
/* 						'<td data-num="11">' + author + '</td>',*/
/* 						'<td data-num="12">' + auth_time + '</td>',*/
/* 						'</tr>'*/
/* 					)*/
/* 				} else {*/
/*                     html.push(*/
/* 						'<tr>',*/
/* 						'<td data-num="1" data-cid="' + data[i]['khm_customer.id'] + '"><a href="#" class="customerDetail pos-rel">' + data[i]['khm_customer.name'] + '</a> ',*/
/* 						'<label class="pos-rel"> <i class="iconBnt fa fa-info-circle" style="color:'+(data[i]['Remark'].length > 0 ? 'red' : "")+'" data-rel="tooltip" data-placement="right" data-html="true" title="' + cs.getRemark(data[i]['Remark']) + '" ></i></label></td>',*/
/* 						'<td data-num="2">' + data[i]['jzm_service_info.time'] + '</td>',*/
/* 						'<td data-num="3">' + scont + '</td>',*/
/* 						//'<td data-num="5">' +(data[i].HT_staff_info != "" ? data[i].HT_staff_info[0].name : "") + '</td>',*/
/* 						//'<td data-num="8">' +(data[i]['htm_contract.create_by']? employees[data[i]['htm_contract.create_by']]:'') + '</td>',*/
/* 						'<td data-num="5">' +(data[i]['bmm_employees.name']? data[i]['bmm_employees.name']:'') + '</td>',*/
/* 						'<td data-num="8">' +(data[i]['bmm_employees.name']? data[i]['bmm_employees.name']:'') + '</td>',*/
/* 						'<td data-num="9">' + (data[i]['htm_contract.create_time'] != '0' ? cs.getNowTime(data[i]['jzm_service_info.refer_time'],true) : '') + '</td>',*/
/* 						'<td data-num="10">' + cstatus + '</td>',*/
/* 						'<td data-num="11">' + author + '</td>',*/
/* 						'<td data-num="12">' + auth_time + '</td>',*/
/* 						'</tr>'*/
/* 					)*/
/* 				}*/
/* 			}*/
/* 			switch(type) {*/
/* 				case 4:*/
/* 					$('#c_service_data').html(html.join(''));*/
/* 					custom.get_custom_info();*/
/* 					$("[data-rel='tooltip']").tooltip();*/
/* 					custom.showReamrk();*/
/* 					break;*/
/* 				case 1:*/
/* 					$('#c_receiving_data').html(html.join(''));*/
/* 					custom.get_custom_info();*/
/* 					$("[data-rel='tooltip']").tooltip();*/
/* 					custom.showReamrk();*/
/* 					break;*/
/* 				case 2:*/
/* 					$('#c_clearup_data').html(html.join(''));*/
/* 					$("[data-rel='tooltip']").tooltip();*/
/* 					custom.showReamrk();*/
/* 					break;*/
/* 				case 3:*/
/* 					$('#makeAccount_data').html(html.join(''));*/
/* 					$("[data-rel='tooltip']").tooltip();*/
/* 					custom.get_custom_info();*/
/* 					custom.showReamrk();*/
/* 					break;*/
/* 				case 5:*/
/* 					$('#taxReturns_data').html(html.join(''));*/
/* 					$("[data-rel='tooltip']").tooltip();*/
/* 					custom.get_custom_info();*/
/* 					custom.showReamrk();*/
/* 					break;*/
/* 				case 6:*/
/* 					$('#sendorder_data').html(html.join(''));*/
/* 					$("[data-rel='tooltip']").tooltip();*/
/* 					custom.get_custom_info();*/
/* 					custom.showReamrk();*/
/* 					break;*/
/* 			}*/
/* 		}*/
/* */
/* 		//table表切换*/
/* 		$('#tableChange li').click(function() {*/
/* 			var it = $(this);*/
/* 			it.addClass('act').siblings().removeClass('act');*/
/* 			var index = $(this).index();*/
/* 			$('#table_cont table').eq(index).removeClass('hidden').siblings().addClass('hidden');*/
/* 			*/
/* 			ykp.setCookie('where','');*/
/* 			$('[pts="1"]').val('');*/
/* 			$('[sear="staff_name"]').val('').trigger('change');*/
/* 			$('[sear="jzm_service_info.status"]').val('').trigger('change');*/
/* 			$('input[name=date-range-picker]').val('');*/
/* 			*/
/* 			if(index == 0) {*/
/* 				getDatalist(4, 1);*/
/* 			}*/
/* 			if(index == 1) {*/
/* 				getDatalist(1, 1);*/
/* 			}*/
/* 			if(index == 2) {*/
/* 				getDatalist(2, 1);*/
/* 			}*/
/* 			if(index == 3) {*/
/* 				getDatalist(3, 1);*/
/* 			}*/
/* 			if(index == 4) {*/
/* 				getDatalist(5, 1);*/
/* 			}*/
/* 			if(index == 5) {*/
/* 				getDatalist(6, 1);*/
/* 			}*/
/* 			//通用排序*/
/* 			cs.general_sort({*/
/* 				url: '/api/api_service/index',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					filter:'',*/
/* 					limit: pagesize,*/
/* 					type:type*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				defaultOrder: "",*/
/* 				initOrder:'khm_customer.id',*/
/* 				contentId:"#"+table_name[type-1]['body'],*/
/* 				params:[{*/
/* 					id:"#"+table_name[type-1]['table'],*/
/* 					field:(type==1||type==6)?["khm_customer.name","jzm_service_info.time","",*/
/* 						"jzm_service_info.data_type","","htm_contract.create_by",*/
/* 						"jzm_service_info.refer_time","jzm_service_info.status",*/
/* 						"jzm_service_info.auth_id","jzm_service_info.auth_time"]:*/
/* 						["khm_customer.name","jzm_service_info.time","","",*/
/* 						"htm_contract.create_by","jzm_service_info.refer_time",*/
/* 						"jzm_service_info.status","jzm_service_info.auth_id","jzm_service_info.auth_time"]*/
/* 				}]*/
/* 			}, function(res, _sort_role) {*/
/* 				sort_role = _sort_role;*/
/* 				addList(res);*/
/* 			});*/
/* 			$('[pts="1"]').val('');*/
/* 			$('[sear="staff_name"]').val('').trigger('change');*/
/* 			$('[sear="jzm_service_info.status"]').val('').trigger('change');*/
/* 		});*/
/* */
/* 		var pagesize = 10;*/
/* 		//每页数量*/
/* 		$('#changePageNum').change(function() {*/
/* 			pagesize = $(this).val();*/
/* 			ykp.setCookie('page_size',pagesize);*/
/* 			var idex = $('#tableChange li.act').index();*/
/* 			$('.ui-pagination-container').remove();*/
/* 			if(idex == 0) {*/
/* 				getDatalist(4, 1);*/
/* 			}*/
/* 			if(idex == 1) {*/
/* 				getDatalist(1, 1);*/
/* 			}*/
/* 			if(idex == 2) {*/
/* 				getDatalist(2, 1);*/
/* 			}*/
/* 			if(idex == 3) {*/
/* 				getDatalist(3, 1);*/
/* 			}*/
/* 			if(idex == 4) {*/
/* 				getDatalist(5, 1);*/
/* 			}*/
/* 			if(idex == 5) {*/
/* 				getDatalist(6, 1);*/
/* 			}*/
/* 		});*/
/* */
/* 		//获取列表数据Ajax*/
/* 		function getDatalist(_type, auto) {*/
/* 			type = _type;*/
/* 			var where = [];*/
/* 			if(auto == 2){*/
/* 				ykp.setCookie("filter", "");*/
/* 				ykp.setCookie("where", "");*/
/* 			}*/
/* 			/* if(auto > 0){*/
/* 				var num = 0;*/
/* 				var partantId = "";*/
/* */
/* 				$(partantId + ' [pts=4]').each(function() {*/
/* 					if($(this).val() != "") {*/
/* 						if($(this).attr('table')) {*/
/* 							where.push('htm_contract.id IN  (SELECT contract_id FROM ' + $(this).attr('table') + ' WHERE ' + $(this).attr('sear') + '  =' + $(this).val() + ')');*/
/* 							num++;*/
/* 							return true;*/
/* 						}*/
/* 						where.push($(this).attr('sear') + ' IN (SELECT customer_id FROM ckm_position_num WHERE pos_name LIKE \'%' + $(this).val() + '%\')');*/
/* 						num++;*/
/* 					}*/
/* 				});*/
/* */
/* 				$(partantId + ' [pts=2]').each(function() {*/
/* 					if($(this).select2('data')[0]['id'] != "") {*/
/* 						where.push('FIND_IN_SET(' + $(this).select2('data')[0]['id'] + ',' + $(this).attr('sear') + ')');*/
/* 						num++;*/
/* 					}*/
/* 				});*/
/* */
/* 				$(partantId + ' [pts=3]').each(function() {*/
/* 					if($(this).select2('data')[0]['id'] != "") {*/
/* 						where.push($(this).attr('sear') + ' = ' + $(this).select2('data')[0]['id']);*/
/* 						num++;*/
/* 					}*/
/* 				});*/
/* 				$(partantId + ' [pts=5getNodes]').each(function() {*/
/* 					where.push($(this).attr('sear') + ' = ' + $(this).val());*/
/* 					num++;*/
/* 				});*/
/* 				$(partantId + ' [pts=1]').each(function() {*/
/* 					if($(this).val() != "") {*/
/* */
/* 						if($(this).attr('area') == '0') {*/
/* 							where.push('(ckm_administration.type = 1 AND ckm_administration.province LIKE \'%' + $(this).val() + '%\') OR (ckm_administration.type = 2 AND ckm_administration.city LIKE \'%' + $(this).val() + '%\')');*/
/* 							num++;*/
/* 							return;*/
/* 						}*/
/* 						if($(this).attr('area') == '1') {*/
/* 							where.push('ckm_position.city LIKE \'%' + $(this).val() + '%\'');*/
/* 							num++;*/
/* 							return;*/
/* 						}*/
/* 						if($(this).attr('status') == 'time' && gz) {*/
/* 							//data['data'][$(this).attr('sear')] = $(this).val().replace(/\./, "-");*/
/* 							otherSear[$(this).attr('sear')] = $(this).val().replace(/\./, "-");*/
/* 							num++;*/
/* 							return;*/
/* 						} else if($(this).attr('status') == 'time') {*/
/* 							//data['data'][$(this).attr('sear')] = $(this).val().replace(/\./, "");*/
/* 							otherSear[$(this).attr('sear')] = $(this).val().replace(/\./, "-");*/
/* 							num++;*/
/* 							return;*/
/* 						}*/
/* 						//data['data'][$(this).attr('sear')] = $(this).val();*/
/* 						//otherSear[$(this).attr('sear')] = $(this).val();*/
/* 						num++;*/
/* 					}*/
/* 				});*/
/* 				$(partantId + ' [pts=0]').each(function() {*/
/* 					//后面修改搜搜条件要用到*/
/* 					//if($(this).attr('okeywords')) {*/
/* 					//if($(this).val() != "") {*/
/* 					//data.data[$(this).attr('sear')] = $(this).val();*/
/* 					//num++;*/
/* 					//}*/
/* 					//} else {*/
/* 					if($(this).val() != "") {*/
/* 						if($(this).attr('data-status') == 'rangtime') {*/
/* 							var time = $(this).val().split('-');*/
/* 							where.push($(this).attr('sear') + ' between ' + new Date(time[0]) / 1000 + ' and ' + new Date(time[1]) / 1000);*/
/* 						} else {*/
/* 							where.push($(this).attr('sear') + ' like \'%' + $(this).val() + '%\'');*/
/* 						}*/
/* */
/* 						num++;*/
/* 					}*/
/* 					//}*/
/* 				});*/
/* */
/* 				//判断输入框是否输入检索关键字    && num == 0*/
/* 				if(num == 0){*/
/* 					where = '';*/
/* 				}else if(num > 0 && where.length > 0 ) {*/
/* 					where = where.join(' and ');*/
/* 					ykp.setCookie('where', where);*/
/* 				}*/
/* 			} *//* */
/* 			doSearch(type,auto);*/
/* 			var data = {*/
/*  				type: type,*/
/* 				//"page_size": pagesize, */
/*     			limit:pagesize,*/
/*                 order: order,*/
/*                 //'where': where,*/
/* 			};*/
/* */
/*  			ykp.list({*/
/* 				url: '/api/api_service/index',*/
/* 				method: 'post',*/
/* 				data: data,*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						$('#table_cont').not('hidden').find('tbody').html('<tr><td colspan="30" style="color:#7d7d7d;text-align:center !important;">暂无数据</td></tr>');*/
/* 						return false;*/
/* 					}*/
/* 					addList(res);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	});*/
/* </script>*/
/* {% include 'admin/customerDetail.html' %}*/
