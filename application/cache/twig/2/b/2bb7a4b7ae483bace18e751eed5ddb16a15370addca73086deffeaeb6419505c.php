<?php

/* admin/financialManagement/financeBorrow.html */
class __TwigTemplate_ab2ea9cac77e31f28dc2f30f29f881b643fab0b5b29be3223d04d529b577ae56 extends Twig_Template
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
\t\twidth: 65px;
\t}
</style>
<div class=\" widget-main\">
\t<div class=\"row\" style=\"margin-top: 20px;\" id=\"topTool\">
\t\t<!--<h3 class=\"header smaller lighter blue\">送单</h3>-->
\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t<input type=\"text\" pts=0 id=\"\" sear=\"cwm_loan.num\" placeholder=\"借贷编号\" class=\"\" />
\t\t</div>
\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t<input type=\"text\" pts=0 id=\"\" sear=\"cwm_loan.object_name\" placeholder=\"关联对象\" class=\"\" />
\t\t</div>
\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t<button class=\"btn btn-info btn-sm\" title=\"搜索\" id=\"search\">
\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t</button>
\t\t</div>
\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t<button id=\"flush\" type=\"button\" title=\"刷新\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
                <i class=\"fa fa-refresh\"></i>
            </button>
\t\t</div>
\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t<button id=\"heightsearch\" title=\"高级搜索\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
                    <i class=\"fa fa-filter\"></i>
                </button>
\t\t</div>
\t\t<div class=\"col-sx-4\" contentAuthority=\"173\" style=\" float: left;margin-right: 5px;\">
\t\t\t<button title=\"添加\" class=\"btn btn-info btn-sm add\" style=\"background-color: #32CD32 !important;\">
                <i class=\"fa fa-plus\"></i>
            </button>
\t\t</div>
\t\t<div class=\"col-sx-4\" contentAuthority=\"174\" style=\" float: left;margin-right: 5px;\">
\t\t\t<button title=\"批量审批\" class=\"btn btn-info sp  btn-sm plSp\" style=\"background-color: #32CD32 !important; border-color: #32CD32;\">
\t\t\t\t<i class=\"fa fa-check-circle-o\"></i>
            </button>
\t\t</div>
\t\t<div class=\"col-sx-4\" id=\"expbt\" style=\"display: none; float: left; margin-right: 5px;\">
\t\t\t<button type=\"button\"  title=\"导出\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"exportfile moveToClue btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t<i class=\"fa fa-sign-out\"></i>
\t\t\t</button>
\t\t</div>
\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:290px;height: 36px\">
\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"background: #E6E6E6;line-height:32px\" data-status=\"a\">全部</a>
\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-status=\"0\">
\t\t\t\t\t</i> 待审批</a>
\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-status=\"2\"> 已通过</a>
\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-status=\"1\"> 未通过</a>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"position: absolute;  margin-top: 35px; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;\">
\t\t\t<div class=\"row\" id=\"SearchCon\">

\t\t\t</div>

\t\t</div>
\t</div>
\t<div class=\"platform-data custom_table\">
\t\t<table id=\"dynamic-table\">
\t\t\t<thead>
\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t<th class=\"center\">
\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace\" onclick=\"cs.checkAll(this.checked)\"/>
\t\t\t\t\t\t\t<span class=\"lbl\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</th>
\t\t\t\t\t<th>操作</th>
\t\t\t\t\t<th data-num=\"12\">审批状态</th>
\t\t\t\t\t<th data-num=\"1\">借贷编号</th>
\t\t\t\t\t<th data-num=\"2\" class=\"table-cell\">
\t\t\t\t\t\t<span>借贷日期</span>
\t\t\t\t\t</th>
\t\t\t\t\t<th data-num=\"3\" style=\"text-align: right !important;\">金额</th>
\t\t\t\t \t<th data-num=\"0\">支付方式</th>
\t\t\t\t  <th data-num=\"5\">借贷类别</th>\t\t\t\t\t
\t\t\t\t\t<th data-num=\"6\">对象类别</th>
\t\t\t\t\t<th data-num=\"7\">关联对象</th>
\t\t\t\t\t<th data-num=\"9\">备注</th>
\t\t\t\t\t<th data-num=\"10\">创建人</th>
\t\t\t\t\t<th data-num=\"11\">
\t\t\t\t\t\t<span>创建时间</span>
\t\t\t\t\t</th>
\t\t\t\t\t<th data-num=\"13\">审批人</th>
\t\t\t\t\t<th data-num=\"14\">
\t\t\t\t\t\t<span>审批时间</span>
\t\t\t\t\t</th>
\t\t\t\t\t<th data-num=\"15\">
\t\t\t\t\t\t审批回复
\t\t\t\t\t</th>
\t\t\t\t\t<th data-num=\"16\">结算人</th>
\t\t\t\t\t<th data-num=\"17\">结算时间</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody id=\"datalist\">

\t\t\t</tbody>
\t\t</table>
\t</div>
\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" class=\"_num\"></div>
\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t<div class=\"pageBar pagination\"></div>
\t\t<div align=\"right\" style=\"float: right;  width: 10%;\">
\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t</select>
\t\t</div>
\t</div>

\t<div class=\"popup_balance\" style=\"display:none\">
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 结算方式：</label>
\t\t\t<select field=\"get_way\" msg=\"请选择结算方式\" style=\"width:180px;\">
\t\t\t\t<option value=\"\">
\t\t\t\t\t请选择结算方式
\t\t\t\t</option>
\t\t\t\t<option value=\"1\">现金</option>
\t\t\t\t<option value=\"2\">支付宝</option>
\t\t\t\t<option value=\"3\">微信</option>
\t\t\t\t<option value=\"4\">银行卡</option>
\t\t\t</select>

\t\t\t<label> 结算账户：</label>
\t\t\t<select field=\"account\" style=\"width:180px;\">
\t\t\t\t<option value=\"\"> 请选择结算账户 </option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"popup_button\">
\t\t\t<button class=\"sure_button\">
                    <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                    保存
             </button>
\t\t</div>
\t</div>

\t<div class=\"popup_new\" style=\"display:none\">
\t\t<div class=\"row\">
\t\t\t<form class=\"item_form\" role=\"form\">
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 借贷类别：</label>
\t\t\t\t\t<select addifed=\"loan_type\">
\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t<option value=\"1\">借款</option>
\t\t\t\t\t\t<option value=\"4\">还款</option>
\t\t\t\t\t</select>
\t\t\t\t\t<label style=\"\">金额：</label>
\t\t\t\t\t<input type=\"number\" min=\"0\" addifed=\"money\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 对象类别1： </label>
\t\t\t\t\t<select addifed=\"object_type\">
\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t<option value=\"1\">公司</option>
\t\t\t\t\t\t<option value=\"2\">员工 </option>
\t\t\t\t\t\t<option value=\"3\">部门</option>
\t\t\t\t\t</select>
\t\t\t\t\t<label> 关联对象： </label>
\t\t\t\t\t<select addifed=\"object\" id=\"object\">
\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t 请选择
\t\t\t\t\t\t</option>
\t\t\t\t\t</select>

\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label>借贷日期：</label>
\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<input class=\"date-timepicker1 required\" addifed=\"time\" msg=\"入库时间不能为空\" class=\"form-control\" style=\"height: 30px; width: 150px;padding:5px;\">
\t\t\t\t\t\t<span class=\"input-group-add_expenditeruon\" style=\"width: 30px;height:30px;background: #ddd;position: relative;\">
\t                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:-7px;top:7px;\"></i>
\t                        </span>
\t\t\t\t\t</div>
\t\t\t\t\t<label> 未还款项： </label>
\t\t\t\t\t<input type=\"number\" min=\"0\" noh=\"monty\" disabled=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\" id=\"other\" style=\"display: none;\">
\t\t\t\t\t<label> 结算方式： </label>
\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t<!--<input type=\"number\"  min=\"0\" noh=\"monty\" disabled=\"\">-->
\t\t\t\t\t<span addifed='get_way'></span>
\t\t\t\t\t</div>
\t\t\t\t\t<label class=\"account\"> 结算账户： </label>
\t\t\t\t\t<span class=\"account\" addifed='account'></span>
\t\t\t\t\t<!--<input type=\"number\" addifed='account' min=\"0\" noh=\"monty\" disabled=\"\">-->
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\" id=\"other\" style=\"display: none;\">
\t\t\t\t\t<label> 结算人： </label>
\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t<!--<input type=\"number\"  min=\"0\" noh=\"monty\" disabled=\"\">-->
\t\t\t\t\t\t<span addifed='clearing'></span>
\t\t\t\t\t</div>
\t\t\t\t\t<label class=\"account\"> 结算时间： </label>
\t\t\t\t\t<span class=\"account\" addifed='clearing_time'></span>
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label style=\"float:left;\"> 备注： </label>
\t\t\t\t\t<textarea addifed=\"remark\" style=\"padding:5px;width:calc(100% - 70px);margin-left:5px;\"></textarea>
\t\t\t\t</div>
\t\t\t\t<div class=\"\" style=\"margin-top: 15px;\">
\t\t\t\t\t<label style=\"float:left;margin-right:5px;\">图片： </label>
\t\t\t\t\t<div class=\"\" style=\"padding: 2px; margin-top: 20px;margin-left: 70px;\">
\t\t\t\t\t\t<div id=\"fileBox\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"imgBox\">
\t\t\t\t\t\t\t<label style=\"text-align: center;border: 1px solid;width: 70px;position: relative;height: 70px; cursor: pointer; text-align: center;line-height: 70px;font-size: 70px;\">
\t\t\t\t\t\t\t\t<input type=\"file\" class=\"uploadFiles\" style=\"position:absolute;left:-9999px;opacity: 0;\" />
\t\t\t\t\t\t\t\t<span class=\"\" style=\"display: inline-block;position: absolute;top: 0;left: 14px; cursor: pointer; text-align: center;\">+</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--<div id=\"uploadBox\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"upload1\" style=\"outline: none;background-color: #009688 !important; margin-top: 20px;\" class=\"btn btn-info btn-sm position-relative\">
\t\t\t\t                        上传文件
\t\t\t\t        \t</button>
\t\t\t\t\t\t</div>-->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<div class=\"popup_button\">
\t\t\t\t<button class=\"sure_button\" id=\"sure_button\">
                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                        保存
                    </button>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"label_popup\" id=\"feedBack\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
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
</div>
";
        // line 254
        $this->loadTemplate("admin/mark.html", "admin/financialManagement/financeBorrow.html", 254)->display($context);
        $this->loadTemplate("admin/customerDetail.html", "admin/financialManagement/financeBorrow.html", 254)->display($context);
        // line 255
        echo "</div>
<!--<script src=\"/resource/adimin/assets/js/canvasResize.js\"></script>-->
<script src=\"/resource/adimin/assets/js/LocalResizeIMG.js\"></script>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>

<script type=\"text/javascript\">
\t\$(function() {

        //导出功能
        cs.exportFile({
            url:\"/api/api_finance/jd_export\",
            title:\"借贷记录\"
        });
        if(cs.getNodes([309], true)) {
            \$(\"#expbt\").show();
        }

\t\tcs.getNodes([173]);
\t\tif(cs.approve_authority({
\t\t\t\tname: '借贷',
\t\t\t\tnodes: [174]
\t\t\t})) {
\t\t\t\$('[contentAuthority=\"174\"]').show();
\t\t}

\t\tvar order = 'cwm_loan.id desc';
\t\tvar page_size = 10; //每页显示的条目数
\t\tvar sort_role = ''; //排序规则
\t\tvar filter = ''; //过滤条件
\t\tvar accounts = {};
\t\tvar employees = {};
\t\t//所有员工
\t\tykp.doAjax({
\t\t\tasync: false,
\t\t\turl: '/api/api_employees/f7',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tselect: 'bmm_employees.id,bmm_employees.name'
\t\t\t},
\t\t\tsuccess: function(res) {
\t\t\t\tvar data = res.data;
\t\t\t\tfor(var i in data) {
\t\t\t\t\temployees[data[i]['id']] = data[i]['name'];
\t\t\t\t}
\t\t\t}
\t\t});
\t\t


\t\t//所有账户
\t\tykp.doAjax({
\t\t\tasync: false,
\t\t\turl: '/api/api_bank/f7',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tselect: 'xtm_kh_bank.id,xtm_kh_bank.type,xtm_kh_bank.bank_name'
\t\t\t},
\t\t\tsuccess: function(res) {
\t\t\t\tvar data = res.data;
\t\t\t\tfor(var i in data) {
\t\t\t\t\taccounts[data[i]['id']] = data[i];
\t\t\t\t}
\t\t\t}
\t\t});

\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_finance/loan_list',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tlimit: page_size,
\t\t\t\tfilter: filter
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '.pageBar'
\t\t\t},
\t\t\tinitOrder: \"\", //初始化sort
\t\t\tdefaultOrder: \"\",
\t\t\tcontentId:\"#datalist\",
\t\t\tparams:[{
\t\t\t\tid:\"#dynamic-table\",
\t\t\t\tfield:[\"\",\"\",\"cwm_loan.status\",\"cwm_loan.num\",\"cwm_loan.time\",\"cwm_loan.money\",\"\",\"cwm_loan.loan_type\",\"cwm_loan.object_type\",\"cwm_loan.object_name\",\"cwm_loan.remark\",\"cwm_loan.create_id\",\"cwm_loan.create_at\",\"cwm_loan.auth_id\",
\t\t\t\t\t\"cwm_loan.auth_time\",\"cwm_loan.auth_remark\",\"cwm_loan.clearing\",\"cwm_loan.clearing_time\"]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});

\t\tdoSearch();
\t\t//搜索
\t\tfunction doSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_finance/loan_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: page_size,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}
\t\t\tcs.doSearch('#search', data, 'filter', false, function(res, _filter) {
\t\t\t\tfilter = _filter;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn false;
\t\t\t\t} else {
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t})
\t\t}

\t\tgetSearch();

\t\tfunction getSearch() {
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tvar list = [{
\t\t\t\t\tname: \"借贷编号\",
\t\t\t\t\tsearch: \"cwm_loan.num\",
\t\t\t\t\ttype: \"text\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"时间 \",
\t\t\t\t\tsearch: \"cwm_loan.time\",
\t\t\t\t\ttype: \"time\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"金额\",
\t\t\t\t\tsearch: \"cwm_loan.money\",
\t\t\t\t\ttype: \"text\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"账户\",
\t\t\t\t\tsearch: \"cwm_loan.account\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\turl: \"/api/api_bank/f7\",
\t\t\t\t\tkey: \"bank\",
\t\t\t\t\tselect:\"xtm_kh_bank.id,xtm_kh_bank.type,xtm_kh_bank.bank_name\",
\t\t\t\t\ttitle:\"bank_name\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"借贷类别\",
\t\t\t\t\tsearch: \"cwm_loan.loan_type\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\toption: [{
\t\t\t\t\t\tval: \"1\",
\t\t\t\t\t\ttext: \"借款\"
\t\t\t\t\t}, {
\t\t\t\t\t\tval: \"4\",
\t\t\t\t\t\ttext: \"还款\"
\t\t\t\t\t}]
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"对象类别\",
\t\t\t\t\tsearch: \"cwm_loan.object_type\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\toption: [{
\t\t\t\t\t\tval: \"1\",
\t\t\t\t\t\ttext: \"公司\"
\t\t\t\t\t}, {
\t\t\t\t\t\tval: \"2\",
\t\t\t\t\t\ttext: \"员工\"
\t\t\t\t\t}, {
\t\t\t\t\t\tval: \"3\",
\t\t\t\t\t\ttext: \"部门\"
\t\t\t\t\t}]
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"关联对象\",
\t\t\t\t\tsearch: \"cwm_loan.object\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\turl: \"/api/api_employees/f7\",
\t\t\t\t\tkey: \"people\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"支付方式\",
\t\t\t\t\tsearch: \"cwm_loan.get_way \",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\toption: [{
\t\t\t\t\t\tval: \"1\",
\t\t\t\t\t\ttext: \"现金\"
\t\t\t\t\t}, {
\t\t\t\t\t\tval: \"2\",
\t\t\t\t\t\ttext: \"支付宝\"
\t\t\t\t\t}, {
\t\t\t\t\t\tval: \"3\",
\t\t\t\t\t\ttext: \"微信\"
\t\t\t\t\t}, {
\t\t\t\t\t\tval: \"4\",
\t\t\t\t\t\ttext: \"银行卡\"
\t\t\t\t\t}]
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"备注\",
\t\t\t\t\tsearch: \"cwm_loan.remark\",
\t\t\t\t\ttype: \"text\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"创建人\",
\t\t\t\t\tsearch: \"cwm_loan.create_id\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\turl: \"/api/api_employees/f7\",
\t\t\t\t\tkey: \"people\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"创建时间\",
\t\t\t\t\tsearch: \"cwm_loan.create_at\",
\t\t\t\t\ttype: \"time\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"审批状态\",
\t\t\t\t\tsearch: \"cwm_loan.status\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\toption: [{
\t\t\t\t\t\tval: \"0\",
\t\t\t\t\t\ttext: \"待审批\"
\t\t\t\t\t}, {
\t\t\t\t\t\tval: \"1\",
\t\t\t\t\t\ttext: \"未通过\"
\t\t\t\t\t}, {
\t\t\t\t\t\tval: \"2\",
\t\t\t\t\t\ttext: \"已通过\"
\t\t\t\t\t}]
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"审批人\",
\t\t\t\t\tsearch: \"cwm_loan.auth_id\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\turl: \"/api/api_employees/f7\",
\t\t\t\t\tkey: \"people\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"审批时间\",
\t\t\t\t\tsearch: \"cwm_loan.auth_time\",
\t\t\t\t\ttype: \"time\",
\t\t\t\t\turl: \"/api/api_employees/f7\",
\t\t\t\t\tkey: \"people\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"结算人\",
\t\t\t\t\tsearch: \"cwm_loan.clearing\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\turl: \"/api/api_employees/f7\",
\t\t\t\t\tkey: \"people\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"结算时间\",
\t\t\t\t\tsearch: \"cwm_loan.clearing_time\",
\t\t\t\t\ttype: \"time\"
\t\t\t\t},
\t\t\t];

\t\t\tcs.getSearch({
\t\t\t\tlist: list,
\t\t\t\tel: \"#heightsearch\",
\t\t\t\tel1: \"#heightsearch1\"
\t\t\t}, dohSearch);

\t\t\tfunction dohSearch() {
\t\t\t\tvar data = {
\t\t\t\t\turl: '/api/api_finance/loan_list',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tlimit: page_size,
\t\t\t\t\t\torder: order
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tcs.hSearch('.search1', data, 'filter', false, function(res, _filter) {
\t\t\t\t\tfilter = _filter;
\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\t\$(\"#heightsearch\").removeClass('active').css('z-index', '');
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddList(res);
\t\t\t\t})
\t\t\t}
\t\t}

\t\t\$('#flush').click(function() {
\t\t\tfilter = '';
\t\t\t\$('[pts=\"0\"]').val('');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tpageList();
\t\t})

\t\t\$('.myFilter').click(function() {
\t\t\tif(!\$(this).hasClass('clc')) {
\t\t\t\t\$(this).addClass('clc').siblings().removeClass('clc');
\t\t\t}
\t\t\tvar data = {
\t\t\t\t\"limit\": page_size,
\t\t\t\t'page': 1,
\t\t\t\t'order': order
\t\t\t}
\t\t\tvar filter_ = \$(this).attr('data-status');
\t\t\tif(filter_ == 'a') {
\t\t\t\tpageList(1);
\t\t\t\treturn;
\t\t\t}
\t\t\tfilter = 'cwm_loan.status = '+filter_;
\t\t\tdata['filter'] = 'cwm_loan.status = ' + filter_;
\t\t\tpageList_2(data);

\t\t})

\t\t\$('#filterBtns a').mouseover(function() {
\t\t\t\$(this).addClass('over');
\t\t})
\t\t\$('#filterBtns a').mouseout(function() {
\t\t\t\$(this).removeClass('over');
\t\t})

\t\tfunction pageList_2(data) {
\t\t\tykp.list({
\t\t\t\turl: '/api/api_finance/loan_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: data,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '.pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t} else {
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}

\t\tpageList(1);

\t\tfunction pageList(current) {
\t\t\tykp.list({
\t\t\t\turl: '/api/api_finance/loan_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tpage: 1,
\t\t\t\t\tlimit: page_size,
\t\t\t\t\torder: order
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '.pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t} else {
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}

\t\t\$('#changePageNum').change(function() {
\t\t\tpage_size = \$(this).val();
\t\t\tykp.setCookie('page_size',page_size);
\t\t\tpageList(1);
\t\t})

\t\tfunction addList(res) {
\t\t\tvar data = res.data.items;
\t\t\tvar html = '';
\t\t\tvar sstatus = ['待审批', '未通过', '已通过'];
\t\t\tvar ths = \$('.thColor th');
\t\t\tvar styles = [];
\t\t\tvar loan_type = ['', '借款', '', '', '还款'];
\t\t\tvar object_type = ['', '公司', '员工', '部门'];
\t\t\tvar get_way = ['', '现金', '支付宝', '微信', '银行卡'];
\t\t\tfor(i = 0; i < ths.length; i++) {
\t\t\t\tstyles.push(ths.eq(i).css('display'));
\t\t\t}

\t\t\t//审批权限为true可以审批,为false不可审批
\t\t\tvar spApp = cs.approve_authority({
\t\t\t\tname: '借贷',
\t\t\t\tnodes: [177]
\t\t\t});

            var cxApp = cs.approve_authority({
\t\t\t\tname: '借贷',
\t\t\t\tnodes: [273]
\t\t\t});

\t\t\tvar edit1_statu = cs.getNodes([175], true);
\t\t\tvar edit2_statu = cs.getNodes([176], true);

\t\t\tvar company_name;
\t\t\tfor(var i in data) {
\t\t\t\tcompany_name = '<a class=\" pos-rel\" data-cid=\"'+data[i]['cwm_loan.cid']+'\" href=\"#\"><span class=\"customerDetail\">' + data[i]['cwm_loan.object_name'] +'</span><label class=\"pos-rel\"> <i style=\"color:' + (data[i]['Remark'] ? (data[i]['Remark'].length > 0 ? 'red' : \"\") : \"\") + '\"  class=\"iconBnt fa fa-info-circle\"  data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"' + cs.getRemark(data[i]['Remark']) + '\" ></i></label>' + '</a> ';

\t\t\t\thtml +=
\t\t\t\t\t'<tr data-id=\"' + data[i]['cwm_loan.id'] + '\"  data-status=\"' + data[i]['cwm_loan.status'] + '\">' +
\t\t\t\t\t'<td class=\"center\" style=\"display: ' + styles[0] + ' \">' +
\t\t\t\t\t'<label class=\"pos-rel\">' +
\t\t\t\t\t'<input type=\"checkbox\" name=\"check\" class=\"ace\"/>' +
\t\t\t\t\t'<span class=\"lbl\"></span>' +
\t\t\t\t\t'</label>' +
\t\t\t\t\t'</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[1] + '\" class=\"center\">' +
\t\t\t\t\t'<label class=\"pos-rel\">' +
                    '<a href=\"#\" class=\"sdetail btOrange\" style=\"color:#fff !important\" title=\"详情\"><i class=\"fa fa-info \"></i></a> ' +
\t\t\t\t\t'<a href=\"#\" class=\"edit1 btBlue\"  style=\"display:' + (edit1_statu ? (data[i]['cwm_loan.status'] == 1 ? 'inline-block' : 'none') : 'none') + '; color:#fff !important\" contentAuthority=\"175\" title=\"编辑\"><i class=\"fa fa-pencil-square-o\"></i></a> ' +
\t\t\t\t\t'<a href=\"#\" class=\"edit2 btBlue\" style=\"display:' + (edit2_statu ? (data[i]['cwm_loan.status'] == 2 && data[i]['cwm_loan.get_way'] == '0' ? 'inline-block' : 'none') : 'none') + ';color:#fff !important\" contentAuthority=\"176\" title=\"结算\"><i class=\"fa fa-calculator\"></i></a> ' +
\t\t\t\t\t'<a href=\"#\" class=\"btOrange sp\" data-status = \"0\" style=\"display:' + (cxApp ? (data[i]['cwm_loan.status'] == 2 && data[i]['cwm_loan.get_way'] == '0' ? 'inline-block' : 'none') : 'none') + ';color:#fff !important\" contentAuthority=\"273\" title=\"撤销\"><i class=\"fa fa-rotate-left\"></i></a> ' +
\t\t\t\t\t'<a href=\"#\" class=\"btGreen sp\" data-status = \"2\" style=\"display:' + (spApp ? (data[i]['cwm_loan.status'] == 0 ? 'inline-block' : 'none') : 'none') + ';color:#fff !important\" contentAuthority=\"177\" title=\"通过\"><i class=\"fa fa-check-circle-o\"></i></a> ' +
\t\t\t\t\t'<a href=\"#\" class=\"btRed sp\" data-status = \"1\" style=\"display:' + (spApp ? (data[i]['cwm_loan.status'] == 0 ? 'inline-block' : 'none') : 'none') + ';color:#fff !important\" title=\"驳回\"><i class=\"fa fa-times-circle\"></i></a> ' +
\t\t\t\t\t\t
\t\t\t\t\t'</label>' +
\t\t\t\t\t'</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[13] + '\" data-num=\"12\"><sapn class=\"cedit\">' + sstatus[data[i]['cwm_loan.status']] + '</sapn></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[2] + '\" data-num=\"1\"><sapn class=\"cedit\">' + data[i]['cwm_loan.num'] + '</sapn></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[3] + ';\" data-num=\"2\"><sapn class=\"cedit\">' + (data[i]['cwm_loan.time'] != '0' ? cs.getNowTime(data[i]['cwm_loan.time']) : '') + '</classsapn></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[5] + ';text-align: right !important;\" data-num=\"3\"><sapn class=\"cedit\">' + data[i]['cwm_loan.money'] + '</sapn></td>' +
//\t\t\t\t\t'<td style=\"display: ' + styles[5] + '\" data-num=\"4\"><sapn class=\"cedit\">' + (data[i]['cwm_loan.account'] != '0' ? (accounts[data[i]['cwm_loan.account']]?accounts[data[i]['cwm_loan.account']]['bank_name'] :'') : '') + '</sapn></td>' +
                    '<td style=\"display: ' + styles[0] + '\" data-num=\"0\"><sapn class=\"cedit\">' + (get_way[data[i]['cwm_loan.get_way']] ? (get_way[data[i]['cwm_loan.get_way']]) : \"\") + ( data[i]['cwm_loan.account'] != '0' ? (accounts[data[i]['cwm_loan.account']]? \"，\" +accounts[data[i]['cwm_loan.account']]['bank_name'] :'') : '') + '</sapn></td>' +
 
\t\t\t\t\t'<td style=\"display: ' + styles[6] + '\" data-num=\"5\"><sapn class=\"cedit\">' + loan_type[data[i]['cwm_loan.loan_type']] + '</sapn></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[7] + '\" data-num=\"6\"><sapn class=\"cedit\">' + object_type[data[i]['cwm_loan.object_type']] + '</sapn></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[8] + '\" data-num=\"7\" data-cid=\"' + data[i]['cwm_loan.cid'] + '\">' + (data[i]['cwm_loan.object_type'] == '1' ? company_name : data[i]['cwm_loan.object_name']) + '</td>' +
//\t\t\t\t\t'<td style=\"display: ' + styles[9] + '\" data-num=\"8\"><sapn class=\"cedit\">' + get_way[data[i]['cwm_loan.get_way']] + '</sapn></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[10] + '\" data-num=\"9\"><sapn class=\"cedit\">' + data[i]['cwm_loan.remark'] + '</sapn></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[11] + '\" data-num=\"10\"><sapn class=\"cedit\">' + employees[data[i]['cwm_loan.create_id']] + '</sapn></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[12] + '\" data-num=\"11\"><sapn class=\"cedit\">' + (data[i]['cwm_loan.create_at'] != '0' ? cs.getNowTime(data[i]['cwm_loan.create_at'],true) : '') + '</sapn></td>' +
\t\t\t\t\t
\t\t\t\t\t'<td style=\"display: ' + styles[14] + '\" data-num=\"13\"><sapn class=\"cedit\">' + (data[i]['cwm_loan.auth_id'] != '0' ? employees[data[i]['cwm_loan.auth_id']] : '') + '</sapn></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[15] + '\" data-num=\"14\"><sapn class=\"cedit\">' + (data[i]['cwm_loan.auth_time'] != '0' ? cs.getNowTime(data[i]['cwm_loan.auth_time'],true) : '') + '</sapn></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[16] + '\" data-num=\"15\"><sapn class=\"cedit\">' + data[i]['cwm_loan.auth_remark'] + '</sapn></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[17] + '\" data-num=\"16\">' + (employees[data[i]['cwm_loan.clearing']] || \"\"  )+ '</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[18] + '\" data-num=\"17\">' + (data[i]['cwm_loan.clearing_time']  ? cs.getNowTime(data[i]['cwm_loan.clearing_time'],true) : \"\") + '</td>' +
\t\t\t\t\t'</tr>';
\t\t\t};
\t\t\t
\t\t\t\$('#datalist').html(html);

\t\t\t//\t\t\t\$('.custom_table table').find('td').mousemove(function() {
\t\t\t//\t\t\t\tvar index = \$(this).index();
\t\t\t////\t\t\t\t\$(this).parents('table').find('tr').children('td').eq(index).trigger(\"mousemove\")
\t\t\t//\t\t\t\tconsole.log(\$(this).parents('table').find('tr').children('td').eq(index).text())
\t\t\t//\t\t\t})

\t\t\t//客户详情
\t\t\tcustom.get_custom_info();
\t\t\t//备注信息
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\tcustom.showReamrk();

\t\t\t// var spStatus = cs.getSpStatus('借贷',true);
\t\t\t//点击 审批 or  驳回 or  撤销
\t\t\t\$(\"#datalist tr .sp\").unbind('click').click(function() {
\t\t\t\tvar status = \$(this).attr('data-status');
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tchangeStatus(status, id);
\t\t\t});

\t\t\t\$('.plSp').click(function() {
\t\t\t\tvar num = 0;
\t\t\t\tvar status = '';
\t\t\t\tvar coldata = [];
\t\t\t\tvar Statu = false;
\t\t\t\t\$('#datalist').find('input[type=checkbox]').each(function(i) {
\t\t\t\t\tif(\$(this).is(':checked')) {
\t\t\t\t\t\tnum++;
\t\t\t\t\t\tstatus = \$(this).parents('tr').attr('data-status') == 1 ? 2 : 1;
\t\t\t\t\t\tif(\$(this).parents('tr').attr('data-status') == 1 || \$(this).parents('tr').attr('data-status') == 2) {
\t\t\t\t\t\t\tykp.prompt('审批过的不能批量审批!');
\t\t\t\t\t\t\tStatu = false;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tcoldata.push({
\t\t\t\t\t\t\t\tid: \$(this).parents('tr').attr('data-id'),
\t\t\t\t\t\t\t\tstatus: status
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tStatu = true;
\t\t\t\t\t\t}

\t\t\t\t\t}
\t\t\t\t})

\t\t\t\tif(num == 0) {
\t\t\t\t\tykp.prompt('请选择再审批');
\t\t\t\t} else {
\t\t\t\t\tif(Statu) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: \"/api/api_finance/all_loan_sh\",
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tcoldata: JSON.stringify(coldata)
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('审批成功');
\t\t\t\t\t\t\t\tpageList(1);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t}

\t\t\t})
\t\t\t//查看借贷基本信息
\t\t\t\$('.sdetail').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tvar index = \$(this).parents('tr').index();

\t\t\t\tshowMark('.popup_new');
\t\t\t\t\$('#templateBox #other').show();
\t\t\t\t\$('#showBox .title').text('查看借贷信息');
\t\t\t\t\$('#templateCon [addifed]').prop('disabled', true);
\t\t\t\t\$('#templateCon .popup_button, #templateCon #upload1').remove();

\t\t\t\tcs.timeplug();
\t\t\t\tvar _data = data[index];
\t\t\t\tvar imgArr = [];
\t\t\t\tvar get_way = {
\t\t\t\t\t1: \"现金\",
\t\t\t\t\t2: \"支付宝\",
\t\t\t\t\t3: \"微信\",
\t\t\t\t\t4: \"银行卡\"
\t\t\t\t}
\t\t\t\tfor(var key in _data) {
\t\t\t\t\t\$('#templateBox ').find('[addifed]').each(function() {
\t\t\t\t\t\tif(key.replace(/cwm_loan./, '') == \$(this).attr('addifed')) {
\t\t\t\t\t\t\t\$(this).attr('addifed') == 'time' ? \$(this).val(cs.getNowTime(_data[key])) : \$(this).val(_data[key]);
\t\t\t\t\t\t\tif(\$(this).attr('addifed') == 'loan_type' || \$(this).attr('addifed') == 'object_type' || \$(this).attr('addifed') == 'get_way') {
\t\t\t\t\t\t\t\t\$(this).find('option[value=' + _data[key] + ']').attr('selected', true);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\tif(key.replace(/cwm_loan./, '') == \$(this).attr('addifed')) {
\t\t\t\t\t\t\tif(\$(this).attr('addifed') == 'get_way') {
\t\t\t\t\t\t\t\t\$(this).text(get_way[_data[key]] ? get_way[_data[key]] : \"暂无\");
\t\t\t\t\t\t\t\tif(_data[key] == 1 || _data[key] == 0) {
\t\t\t\t\t\t\t\t\t\$('#templateBox .account').hide();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}else if(\$(this).attr('addifed') == 'account' && _data['cwm_loan.get_way'] != 0 ) {
\t\t\t\t\t\t\t\tif(_data['cwm_loan.get_way'] != 1){
\t\t\t\t\t\t\t\t\t\$(this).text(accounts[_data[key]]['bank_name'] ? accounts[_data[key]]['bank_name'] : \"暂无\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t
//\t\t\t\t\t\t\t\t(data[i]['cwm_loan.account'] != '0' ? (accounts[data[i]['cwm_loan.account']]?accounts[data[i]['cwm_loan.account']]['bank_name'] :'') : '')
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t})
                    \$('#templateCon #imgBox').find('label').hide();
\t\t\t\t\tif(key == 'cwm_loan.img') {
\t\t\t\t\t\timgArr = _data[key].split(',');

\t\t\t\t\t\tif(imgArr.length >= 5) {
\t\t\t\t\t\t\t\$('#templateCon #imgBox').find('label').remove();
\t\t\t\t\t\t}
\t\t\t\t\t\tfor(var j in imgArr) {
\t\t\t\t\t\t\t\$('#templateBox #imgBox').append('<img class=\"image\" style=\"margin-right:10px;float:left;width:70px;height:70px;\" data-url=\"' + imgArr[j] + '\" src=\"' + imgArr[j] + '\" />');
\t\t\t\t\t\t}

\t\t\t\t\t}
\t\t\t\t}
                uploadsmallimg();
\t\t\t\t\$('#templateBox [addifed=clearing_time]').text(cs.getNowTime(_data['cwm_loan.clearing_time'],true));
\t\t\t\t\$('#templateBox [addifed=clearing]').text(employees[_data['cwm_loan.clearing']]);
\t\t\t\t
\t\t\t\tvar val = \$('#templateCon').find('select[addifed=\"object_type\"]').val();
\t\t\t\tvar arr = [];
\t\t\t\tif(data[index]['cwm_loan.files']) {
\t\t\t\t\tJSON.parse(data[index]['cwm_loan.files']).forEach(function(item) {
\t\t\t\t\t\t
\t\t\t\t\t\tarr.push('<p style=\"padding-left: 2px;\"><a data-url=\"' + item.url + '\">' + item.name + '</a><i style=\"color: red; margin-left: 20px;cursor: pointer;\" class=\"ace-icon fa fa-trash-o gdel gdel2\"></i></p>')
\t\t\t\t\t})
\t\t\t\t\t\$('#templateCon #fileBox').html(arr.join(','));
\t\t\t\t\t\$('#templateCon #fileBox').find('a').click(function() {
\t\t\t\t\t\tvar name = \$(this).text();
\t\t\t\t\t\tvar url = \$(this).attr('data-url');
\t\t\t\t\t\twindow.open(ykp.api_url+\"/api/api_common/update_file_name?file_url=\"+url+\"&name=\"+name)
\t\t\t\t\t})
\t\t\t\t\t\$('.gdel2').click(function() {
\t\t\t\t\t\t\$(this).parent().remove();
\t\t\t\t\t})
\t\t\t\t}

\t\t\t\t//上传图片
                uploadsmallimg()

\t\t\t\tchangeSelect(val);

\t\t\t\tchangeSelect();
\t\t\t\tvar obj = \"\";
\t\t\t\tvar obj_type = \"\";
\t\t\t\tsetTimeout(function() {
\t\t\t\t\tobj = \$('#templateCon select[addifed=\"object\"]').val();
\t\t\t\t\tobj_type = \$('#templateCon select[addifed=\"object_type\"]').val();
\t\t\t\t\tif(obj && obj_type) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: \"/api/api_finance/loan_xxx\",
\t\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tobject_type: obj_type,
\t\t\t\t\t\t\t\tobject: obj
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\$('#templateCon').find('input[noh=\"monty\"]').val(res.data.margin);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#templateCon').find('input[noh=\"monty\"]').val(\"\");
\t\t\t\t\t}
\t\t\t\t}, 500)

\t\t\t\t\$('#templateCon').find('select[addifed=\"object\"]').change(function() {
\t\t\t\t\tobj = \$(this).val();
\t\t\t\t\tobj_type = \$('#templateCon select[addifed=\"object_type\"]').val();
\t\t\t\t\tif(obj && obj_type) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: \"/api/api_finance/loan_xxx\",
\t\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tobject_type: obj_type,
\t\t\t\t\t\t\t\tobject: obj
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\$('#templateCon').find('input[noh=\"monty\"]').val(res.data.margin);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#templateCon').find('input[noh=\"monty\"]').val(\"\");
\t\t\t\t\t}
\t\t\t\t})

\t\t\t\tcs.upload1({
\t\t\t\t\tel: \"#templateBox #upload1\",
\t\t\t\t\tael: \"#templateBox #fileBox\"
\t\t\t\t})

\t\t\t\tadd_edit(id, _data['cwm_loan.account'], _data['cwm_loan.get_way']);
\t\t\t})

\t\t\t//编辑结算信息；
\t\t\tbalance();

\t\t\t//编辑借贷基本信息
\t\t\t\$('.edit1').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\tshowMark('.popup_new');
\t\t\t\t\$('#showBox .title').text('编辑借贷信息');

\t\t\t\tcs.timeplug();

\t\t\t\tvar _data = data[index];
\t\t\t\tvar imgArr = [];
\t\t\t\tfor(var key in _data) {
\t\t\t\t\t\$('#templateBox ').find('[addifed]').each(function() {
\t\t\t\t\t\tif(key.replace(/cwm_loan./, '') == \$(this).attr('addifed')) {
\t\t\t\t\t\t\t\$(this).attr('addifed') == 'time' ? \$(this).val(cs.getNowTime(_data[key])) : \$(this).val(_data[key]);
\t\t\t\t\t\t\tif(\$(this).attr('addifed') == 'loan_type' || \$(this).attr('addifed') == 'object_type' || \$(this).attr('addifed') == 'get_way') {
\t\t\t\t\t\t\t\t\$(this).find('option[value=' + _data[key] + ']').attr('selected', true);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t\tif(key == 'cwm_loan.img') {
\t\t\t\t\t\timgArr = _data[key].split(',');
\t\t\t\t\t\tif(imgArr.length >= 5) {
\t\t\t\t\t\t\t\$('#templateCon #imgBox').find('label').remove();
\t\t\t\t\t\t}
\t\t\t\t\t\tfor(var j in imgArr) {
\t\t\t\t\t\t\t\$('#templateBox #imgBox').append('<img style=\"margin-right:10px;float:left;width:70px;height:70px;\" data-url=\"' + imgArr[j] + '\" src=\"' + imgArr[j] + '\" />');
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t}
\t\t\t\tvar val = \$('#templateCon').find('select[addifed=\"object_type\"]').val();
\t\t\t\tvar arr = [];
\t\t\t\tif(data[index]['cwm_loan.files']) {
\t\t\t\t\tJSON.parse(data[index]['cwm_loan.files']).forEach(function(item) {
\t\t\t\t\t\tarr.push('<p style=\"padding-left: 2px;\"><a href=\"' + item.url + '\">' + item.name + '</a><i style=\"color: red; margin-left: 20px;cursor: pointer;\" class=\"ace-icon fa fa-trash-o gdel gdel2\"></i></p>')
\t\t\t\t\t})
\t\t\t\t\t\$('#templateCon #fileBox').html(arr.join(','));
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\$('#templateCon #fileBox').find('a').click(function() {
\t\t\t\t\t\tvar name = \$(this).text();
\t\t\t\t\t\tvar url = \$(this).attr('data-url');
\t\t\t\t\t\twindow.open(ykp.api_url+\"/api/api_common/update_file_name?file_url=\"+url+\"&name=\"+name)
\t\t\t\t\t})
\t\t\t\t\t\$('.gdel2').click(function() {
\t\t\t\t\t\t\$(this).parent().remove();
\t\t\t\t\t})
\t\t\t\t}

\t\t\t\t//上传图片
                uploadsmallimg()

\t\t\t\tchangeSelect(val);

\t\t\t\tchangeSelect();
\t\t\t\tvar obj = \"\";
\t\t\t\tvar obj_type = \"\";
\t\t\t\tsetTimeout(function() {
\t\t\t\t\tobj = \$('#templateCon select[addifed=\"object\"]').val();
\t\t\t\t\tobj_type = \$('#templateCon select[addifed=\"object_type\"]').val();
\t\t\t\t\tif(obj && obj_type) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: \"/api/api_finance/loan_xxx\",
\t\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tobject_type: obj_type,
\t\t\t\t\t\t\t\tobject: obj
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\$('#templateCon').find('input[noh=\"monty\"]').val(res.data.margin);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#templateCon').find('input[noh=\"monty\"]').val(\"\");
\t\t\t\t\t}
\t\t\t\t}, 500)

\t\t\t\t\$('#templateCon').find('select[addifed=\"object\"]').change(function() {
\t\t\t\t\tobj = \$(this).val();
\t\t\t\t\tobj_type = \$('#templateCon select[addifed=\"object_type\"]').val();
\t\t\t\t\tif(obj && obj_type) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: \"/api/api_finance/loan_xxx\",
\t\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tobject_type: obj_type,
\t\t\t\t\t\t\t\tobject: obj
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\$('#templateCon').find('input[noh=\"monty\"]').val(res.data.margin);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#templateCon').find('input[noh=\"monty\"]').val(\"\");
\t\t\t\t\t}
\t\t\t\t})

\t\t\t\tcs.upload1({
\t\t\t\t\tel: \"#templateBox #upload1\",
\t\t\t\t\tael: \"#templateBox #fileBox\"
\t\t\t\t})

\t\t\t\tadd_edit(id, _data['cwm_loan.account'], _data['cwm_loan.get_way']);
\t\t\t})
\t\t}

\t\t//结算
\t\tfunction balance() {
\t\t\t\$('.edit2').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tvar postData = {
\t\t\t\t\tid: id
\t\t\t\t};
\t\t\t\tshowMark('.popup_balance');
\t\t\t\t\$('#showBox .title').html('编辑结算信息');

\t\t\t\t// var account_html = [];
\t\t\t\t// for(var i in accounts) {
\t\t\t\t// \taccount_html.push('<option value=\"' + accounts[i]['id'] + '\" get_way=\"' + accounts[i]['type'] + '\">' + accounts[i]['bank_name'] + '</option>');
\t\t\t\t// }
\t\t\t\t// \$('#templateCon [field=\"account\"]').append(account_html.join(''));

\t\t\t\t//切换账户切换支出方式
\t\t\t\t// var get_way = ['', '现金', '支付宝', '微信', '银行卡'];
\t\t\t\t// \$('#templateCon [field=\"account\"]').change(function() {
\t\t\t\t// \tif(!\$(this).find('option:selected').attr('get_way') || \$(this).find('option:selected').attr('get_way') == '0') {
\t\t\t\t// \t\t\$('#templateCon [field=\"get_way\"]').val('').attr('get_way', '');
\t\t\t\t// \t\treturn;
\t\t\t\t// \t}

\t\t\t\t// \t\$('#templateCon [field=\"get_way\"]').val(get_way[\$(this).find('option:selected').attr('get_way')]).attr('get_way', \$(this).find('option:selected').attr('get_way'));
\t\t\t\t// });

\t\t\t\t//切换收款方式 自动切换收款账户
\t\t\t\tcs.changePayWayGetAccounts(\$('#templateCon [field=\"get_way\"]'), \$('#templateCon [field=\"account\"]'));
\t\t\t\t\$('#templateCon [field=\"get_way\"]').change(function() {
\t\t\t\t\tif(\$(this).val() == 1) {
\t\t\t\t\t\t\$('#templateCon [field=\"account\"]').hide().prev().hide();
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#templateCon [field=\"account\"]').show().prev().show();
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t//提交结算账户信息
\t\t\t\t\$('#templateCon .sure_button').click(function() {
\t\t\t\t\tpostData['get_way'] = \$('#templateCon [field=\"get_way\"]').val();

\t\t\t\t\tif(!postData['get_way']) {
\t\t\t\t\t\tykp.prompt('请输入相应数据！');
\t\t\t\t\t\treturn;
\t\t\t\t\t} else if(postData['get_way'] != 1) {
\t\t\t\t\t\tpostData['account'] = \$('#templateCon [field=\"account\"]').val();
\t\t\t\t\t\tif(!postData['account'] || !postData['get_way']) {
\t\t\t\t\t\t\tykp.prompt('请输入相应数据！');
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_finance/loan_edit2',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: postData,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\tpageList();
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t});
\t\t}

\t\t//对点击驳回进行处理
\t\tfunction changeStatus(status, id) {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_finance/loan_sh',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tid: id,
\t\t\t\t\tstatus: status
\t\t\t\t}
\t\t\t}

\t\t\tif(status == 1) {
\t\t\t\t\$('#feedBack').show();
\t\t\t\t\$('#feedBack .hold').click(function() {
\t\t\t\t\tvar approve_reply = \$('#feedBack').find('input').val();
\t\t\t\t\tif(approve_reply == '') {
\t\t\t\t\t\tykp.prompt('不能为空！');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\tdata.data.auth_remark = approve_reply.trim();
\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t})
\t\t\t\tcs.closePop();
\t\t\t} else if(status == 0) {
\t\t\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\tlayer.confirm('确认撤销审批？', function(flag) {
\t\t\t\t\t\t\tif(flag) {
\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t})
//\t\t\t\tbootbox.confirm('确认撤销审批？', function(flag) {
//\t\t\t\t\tif(flag) {
//\t\t\t\t\t\tsetStatus(data);
//\t\t\t\t\t}
//\t\t\t\t})
              
\t\t\t} else {
\t\t\t\tsetStatus(data);
\t\t\t}
\t\t}

\t\t//对点击审批 || 撤销进行处理
\t\tfunction setStatus(data) {
\t\t\tykp.doAjax({
\t\t\t\turl: data.url,
\t\t\t\tmethod: data.method,
\t\t\t\tdata: data.data,
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tykp.prompt('审批成功!');
\t\t\t\t\tpageList();
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//自定义table
\t\tcs.custorm_check('#dynamic-table', '#datalist', true);

\t\t\$('.add').click(function() {
\t\t\tshowMark('.popup_new');
\t\t\t\$('#showBox .title').text('添加借贷信息');
\t\t\tcs.timeplug();

\t\t\t//上传图片
            uploadsmallimg()

\t\t\t//切换获取员工  公司 部门
\t\t\tchangeSelect();

\t\t\tcs.upload1({
\t\t\t\tel: \"#templateBox #upload1\",
\t\t\t\tael: \"#templateBox #fileBox\"
\t\t\t})

\t\t\tadd_edit();

\t\t});

\t\t//调用上传图片方法
        //uploadsmallimg()


\t\tfunction changeSelect(val) {
\t\t\tif(val) {
\t\t\t\tswitch(val) {
\t\t\t\t\tcase '1':
\t\t\t\t\t\tgetCustom();
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '2':
\t\t\t\t\t\tgetPeople();
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '3':
\t\t\t\t\t\tgetParentPart();
\t\t\t\t\t\tbreak;
\t\t\t\t\tdefault:
\t\t\t\t\t\t\$('#templateCon #object').html('<option value=\"\"> 请选择 </option>');
\t\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t} else {
\t\t\t\t\$('#contentBox').find('select[addifed=\"object_type\"]').change(function() {
\t\t\t\t\tvar value = \$(this).val();
\t\t\t\t\tswitch(value) {
\t\t\t\t\t\tcase '1':
\t\t\t\t\t\t\tgetCustom();
\t\t\t\t\t\t\t//\$('#contentBox').find('select[addifed=\"object_type\"]').trigger('change');
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tcase '2':
\t\t\t\t\t\t\tgetPeople();
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tcase '3':
\t\t\t\t\t\t\tgetParentPart();
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tdefault:
\t\t\t\t\t\t\t\$('#templateCon #object').html('<option value=\"\"> 请选择 </option>');
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}

\t\t}

\t\tfunction add_edit(id, account, get_way) {
\t\t\tvar obj = \"\";
\t\t\tvar obj_type = \"\";
\t\t\t\$('#templateCon').find('select[addifed=\"object\"],select[addifed=\"object_type\"]').change(function() {
\t\t\t\tif(\$(this).attr('addifed') == \"object\") {
\t\t\t\t\tobj = \$(this).val();
\t\t\t\t} else if(\$(this).attr('addifed') == \"object_type\") {
\t\t\t\t\tobj_type = \$(this).val();
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tvar el = \$('#templateCon').find('select[addifed=\"object\"]');
\t\t\t\t\t\tif(el.val() != \"\") {
\t\t\t\t\t\t\tobj = el.val();
\t\t\t\t\t\t}
\t\t\t\t\t}, 500)
\t\t\t\t}
\t\t\t\tif(obj && obj_type) {
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: \"/api/api_finance/loan_xxx\",
\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tobject_type: obj_type,
\t\t\t\t\t\t\tobject: obj
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\$('#templateCon').find('input[noh=\"monty\"]').val(res.data.margin);
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t} else {
\t\t\t\t\t\$('#templateCon').find('input[noh=\"monty\"]').val(\"\");
\t\t\t\t}
\t\t\t})
\t\t\t\$('#templateBox #sure_button').click(function() {
\t\t\t\tvar status = true;
\t\t\t\tvar data = {};
\t\t\t\t\$('#templateCon').find('[addifed]').each(function(i, e) {
\t\t\t\t\tif(!\$(this).is(':hidden')) {
\t\t\t\t\t\tif(\$(this).val() == \"\" && \$(this).attr('addifed') != 'remark') {
\t\t\t\t\t\t\tykp.prompt('输入框不能为空!');
\t\t\t\t\t\t\tstatus = false;
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tif(\$(this).attr('addifed') == 'object') {
\t\t\t\t\t\t\t\tdata['object_name'] = \$(this).find('option:selected').text();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tdata[\$(this).attr('addifed')] = \$(this).attr('addifed') == 'time' ? parseInt(new Date(\$(this).val()) / 1000) : \$(this).val();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t})

\t\t\t\tif(id) {
\t\t\t\t\tdata.id = id;
\t\t\t\t\tdata.account = account;
\t\t\t\t\tdata.get_way = get_way;
\t\t\t\t}

\t\t\t\tvar imgs = [];
\t\t\t\t\$('#templateCon #imgBox img').each(function() {
\t\t\t\t\timgs.push(\$(this).attr('src'));
\t\t\t\t});

\t\t\t\tdata.img = imgs.join(',');

\t\t\t\tvar fileBox = \$('#templateCon #fileBox');
\t\t\t\tvar files = [];
\t\t\t\tif(fileBox.children().length > 0) {
\t\t\t\t\t\$('#templateCon #fileBox').find('a').each(function(i) {
\t\t\t\t\t\tfiles.push({
\t\t\t\t\t\t\tname: \$(this).text(),
\t\t\t\t\t\t\turl: \$(this).attr('data-url')
\t\t\t\t\t\t})
\t\t\t\t\t})

\t\t\t\t\tdata.files = JSON.stringify(files);
\t\t\t\t}

\t\t\t\tif(status) {
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_finance/loan_add_edit',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: data,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tid ? ykp.prompt('编辑成功!') : ykp.prompt('添加成功!')
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\tpageList();
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//获取上级部门
\t\tfunction getParentPart() {
\t\t\tykp.doAjax({
\t\t\t\turl: \"/api/api_department/f7\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tselect: 'bmm_department.id,bmm_department.name',
\t\t\t\t\tfilter: 'bmm_department.is_del = 0 and bmm_department.parent = 0'
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tvar content = [];
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tcontent.push('<option value=\"' + data[i]['id'] + '\">' + data[i]['name'] + '</option>');
\t\t\t\t\t}
\t\t\t\t\t\$('#templateBox #object').html(content.join(''));\t\t\t\t
\t\t\t\t}
\t\t\t})
\t\t}

\t\tfunction getPeople() {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_employees/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: 999
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar empl = [];
\t\t\t\t\tvar data = res.data.items;
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tif(data[i]['bmm_employees.name']) {
\t\t\t\t\t\t\templ.push('<option value=\"' + data[i]['bmm_employees.id'] + '\">' + data[i]['bmm_employees.name'] + '</option>')
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t\$('#templateBox #object').html(empl.join(''));
\t\t\t\t\t\$('#templateBox #object').trigger('change')
\t\t\t\t}
\t\t\t})
\t\t}

\t\tfunction getCustom() {
\t\t\tvar people = [];
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_customer/customer',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\ttype: 3
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tconsole.log(res);
\t\t\t\t\tvar data = res.data.items;
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tpeople.push('<option value=\"' + data[i]['khm_customer.id'] + '\">' + data[i]['khm_customer.name'] + '</option>')
\t\t\t\t\t}
\t\t\t\t\t\$('#templateBox #object').html(people.join(''));
\t\t\t\t\t\$('#templateBox #object').trigger('change')
\t\t\t\t}
\t\t\t})
\t\t}
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/financialManagement/financeBorrow.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 255,  274 => 254,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	#templateCon label {*/
/* 		width: 65px;*/
/* 	}*/
/* </style>*/
/* <div class=" widget-main">*/
/* 	<div class="row" style="margin-top: 20px;" id="topTool">*/
/* 		<!--<h3 class="header smaller lighter blue">送单</h3>-->*/
/* 		<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 			<input type="text" pts=0 id="" sear="cwm_loan.num" placeholder="借贷编号" class="" />*/
/* 		</div>*/
/* 		<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 			<input type="text" pts=0 id="" sear="cwm_loan.object_name" placeholder="关联对象" class="" />*/
/* 		</div>*/
/* 		<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 			<button class="btn btn-info btn-sm" title="搜索" id="search">*/
/* 				<i class="fa fa-search"></i>*/
/* 			</button>*/
/* 		</div>*/
/* 		<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 			<button id="flush" type="button" title="刷新" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/*                 <i class="fa fa-refresh"></i>*/
/*             </button>*/
/* 		</div>*/
/* 		<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 			<button id="heightsearch" title="高级搜索" type="button" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/*                     <i class="fa fa-filter"></i>*/
/*                 </button>*/
/* 		</div>*/
/* 		<div class="col-sx-4" contentAuthority="173" style=" float: left;margin-right: 5px;">*/
/* 			<button title="添加" class="btn btn-info btn-sm add" style="background-color: #32CD32 !important;">*/
/*                 <i class="fa fa-plus"></i>*/
/*             </button>*/
/* 		</div>*/
/* 		<div class="col-sx-4" contentAuthority="174" style=" float: left;margin-right: 5px;">*/
/* 			<button title="批量审批" class="btn btn-info sp  btn-sm plSp" style="background-color: #32CD32 !important; border-color: #32CD32;">*/
/* 				<i class="fa fa-check-circle-o"></i>*/
/*             </button>*/
/* 		</div>*/
/* 		<div class="col-sx-4" id="expbt" style="display: none; float: left; margin-right: 5px;">*/
/* 			<button type="button"  title="导出" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="exportfile moveToClue btn addBtn btn-info btn-sm position-relative">*/
/* 				<i class="fa fa-sign-out"></i>*/
/* 			</button>*/
/* 		</div>*/
/* 		<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 			<div id="filterBtns" style="display:inline-block;width:290px;height: 36px">*/
/* 				<a href="javascript:void(0);" class="myFilter" style="background: #E6E6E6;line-height:32px" data-status="a">全部</a>*/
/* 				<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-status="0">*/
/* 					</i> 待审批</a>*/
/* 				<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-status="2"> 已通过</a>*/
/* 				<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-status="1"> 未通过</a>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div id="heightsearch1" class="col-sx-12" style="position: absolute;  margin-top: 35px; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;">*/
/* 			<div class="row" id="SearchCon">*/
/* */
/* 			</div>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* 	<div class="platform-data custom_table">*/
/* 		<table id="dynamic-table">*/
/* 			<thead>*/
/* 				<tr class="thColor">*/
/* 					<th class="center">*/
/* 						<label class="pos-rel">*/
/* 							<input type="checkbox" class="ace" onclick="cs.checkAll(this.checked)"/>*/
/* 							<span class="lbl"></span>*/
/* 						</label>*/
/* 					</th>*/
/* 					<th>操作</th>*/
/* 					<th data-num="12">审批状态</th>*/
/* 					<th data-num="1">借贷编号</th>*/
/* 					<th data-num="2" class="table-cell">*/
/* 						<span>借贷日期</span>*/
/* 					</th>*/
/* 					<th data-num="3" style="text-align: right !important;">金额</th>*/
/* 				 	<th data-num="0">支付方式</th>*/
/* 				  <th data-num="5">借贷类别</th>					*/
/* 					<th data-num="6">对象类别</th>*/
/* 					<th data-num="7">关联对象</th>*/
/* 					<th data-num="9">备注</th>*/
/* 					<th data-num="10">创建人</th>*/
/* 					<th data-num="11">*/
/* 						<span>创建时间</span>*/
/* 					</th>*/
/* 					<th data-num="13">审批人</th>*/
/* 					<th data-num="14">*/
/* 						<span>审批时间</span>*/
/* 					</th>*/
/* 					<th data-num="15">*/
/* 						审批回复*/
/* 					</th>*/
/* 					<th data-num="16">结算人</th>*/
/* 					<th data-num="17">结算时间</th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<tbody id="datalist">*/
/* */
/* 			</tbody>*/
/* 		</table>*/
/* 	</div>*/
/* 	<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 		<div align="left" style="padding-left: 15px; float: left; width: 10%;" class="_num"></div>*/
/* 		<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 		<div class="pageBar pagination"></div>*/
/* 		<div align="right" style="float: right;  width: 10%;">*/
/* 			<select style="width: 100px;" id="changePageNum">*/
/* 				<option value="10">每页10条</option>*/
/* 				<option value="20">每页20条</option>*/
/* 				<option value="50">每页50条</option>*/
/* 				<option value="100">每页100条</option>*/
/* 				<option value="200">每页200条</option>*/
/* 			</select>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="popup_balance" style="display:none">*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 结算方式：</label>*/
/* 			<select field="get_way" msg="请选择结算方式" style="width:180px;">*/
/* 				<option value="">*/
/* 					请选择结算方式*/
/* 				</option>*/
/* 				<option value="1">现金</option>*/
/* 				<option value="2">支付宝</option>*/
/* 				<option value="3">微信</option>*/
/* 				<option value="4">银行卡</option>*/
/* 			</select>*/
/* */
/* 			<label> 结算账户：</label>*/
/* 			<select field="account" style="width:180px;">*/
/* 				<option value=""> 请选择结算账户 </option>*/
/* 			</select>*/
/* 		</div>*/
/* 		<div class="popup_button">*/
/* 			<button class="sure_button">*/
/*                     <i class="fa fa-check" aria-hidden="true"></i>*/
/*                     保存*/
/*              </button>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="popup_new" style="display:none">*/
/* 		<div class="row">*/
/* 			<form class="item_form" role="form">*/
/* 				<div class="form_data">*/
/* 					<label> 借贷类别：</label>*/
/* 					<select addifed="loan_type">*/
/* 						<option value=""> 请选择 </option>*/
/* 						<option value="1">借款</option>*/
/* 						<option value="4">还款</option>*/
/* 					</select>*/
/* 					<label style="">金额：</label>*/
/* 					<input type="number" min="0" addifed="money">*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label> 对象类别1： </label>*/
/* 					<select addifed="object_type">*/
/* 						<option value=""> 请选择 </option>*/
/* 						<option value="1">公司</option>*/
/* 						<option value="2">员工 </option>*/
/* 						<option value="3">部门</option>*/
/* 					</select>*/
/* 					<label> 关联对象： </label>*/
/* 					<select addifed="object" id="object">*/
/* 						<option value="">*/
/* 							 请选择*/
/* 						</option>*/
/* 					</select>*/
/* */
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label>借贷日期：</label>*/
/* 					<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<input class="date-timepicker1 required" addifed="time" msg="入库时间不能为空" class="form-control" style="height: 30px; width: 150px;padding:5px;">*/
/* 						<span class="input-group-add_expenditeruon" style="width: 30px;height:30px;background: #ddd;position: relative;">*/
/* 	                            <i class="fa fa-clock-o bigger-110" style="position:relative;right:-7px;top:7px;"></i>*/
/* 	                        </span>*/
/* 					</div>*/
/* 					<label> 未还款项： </label>*/
/* 					<input type="number" min="0" noh="monty" disabled="">*/
/* 				</div>*/
/* 				<div class="form_data" id="other" style="display: none;">*/
/* 					<label> 结算方式： </label>*/
/* 					<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 					<!--<input type="number"  min="0" noh="monty" disabled="">-->*/
/* 					<span addifed='get_way'></span>*/
/* 					</div>*/
/* 					<label class="account"> 结算账户： </label>*/
/* 					<span class="account" addifed='account'></span>*/
/* 					<!--<input type="number" addifed='account' min="0" noh="monty" disabled="">-->*/
/* 				</div>*/
/* 				<div class="form_data" id="other" style="display: none;">*/
/* 					<label> 结算人： </label>*/
/* 					<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 					<!--<input type="number"  min="0" noh="monty" disabled="">-->*/
/* 						<span addifed='clearing'></span>*/
/* 					</div>*/
/* 					<label class="account"> 结算时间： </label>*/
/* 					<span class="account" addifed='clearing_time'></span>*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label style="float:left;"> 备注： </label>*/
/* 					<textarea addifed="remark" style="padding:5px;width:calc(100% - 70px);margin-left:5px;"></textarea>*/
/* 				</div>*/
/* 				<div class="" style="margin-top: 15px;">*/
/* 					<label style="float:left;margin-right:5px;">图片： </label>*/
/* 					<div class="" style="padding: 2px; margin-top: 20px;margin-left: 70px;">*/
/* 						<div id="fileBox">*/
/* */
/* 						</div>*/
/* 						<div id="imgBox">*/
/* 							<label style="text-align: center;border: 1px solid;width: 70px;position: relative;height: 70px; cursor: pointer; text-align: center;line-height: 70px;font-size: 70px;">*/
/* 								<input type="file" class="uploadFiles" style="position:absolute;left:-9999px;opacity: 0;" />*/
/* 								<span class="" style="display: inline-block;position: absolute;top: 0;left: 14px; cursor: pointer; text-align: center;">+</span>*/
/* 							</label>*/
/* 						</div>*/
/* 						<!--<div id="uploadBox">*/
/* 							<button type="button" id="upload1" style="outline: none;background-color: #009688 !important; margin-top: 20px;" class="btn btn-info btn-sm position-relative">*/
/* 				                        上传文件*/
/* 				        	</button>*/
/* 						</div>-->*/
/* 					</div>*/
/* 				</div>*/
/* 			</form>*/
/* 			<div class="popup_button">*/
/* 				<button class="sure_button" id="sure_button">*/
/*                         <i class="fa fa-check" aria-hidden="true"></i>*/
/*                         保存*/
/*                     </button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="label_popup" id="feedBack" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 		<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 	            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
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
/* </div>*/
/* {% include 'admin/mark.html' %}{% include 'admin/customerDetail.html' %}*/
/* </div>*/
/* <!--<script src="/resource/adimin/assets/js/canvasResize.js"></script>-->*/
/* <script src="/resource/adimin/assets/js/LocalResizeIMG.js"></script>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* */
/* <script type="text/javascript">*/
/* 	$(function() {*/
/* */
/*         //导出功能*/
/*         cs.exportFile({*/
/*             url:"/api/api_finance/jd_export",*/
/*             title:"借贷记录"*/
/*         });*/
/*         if(cs.getNodes([309], true)) {*/
/*             $("#expbt").show();*/
/*         }*/
/* */
/* 		cs.getNodes([173]);*/
/* 		if(cs.approve_authority({*/
/* 				name: '借贷',*/
/* 				nodes: [174]*/
/* 			})) {*/
/* 			$('[contentAuthority="174"]').show();*/
/* 		}*/
/* */
/* 		var order = 'cwm_loan.id desc';*/
/* 		var page_size = 10; //每页显示的条目数*/
/* 		var sort_role = ''; //排序规则*/
/* 		var filter = ''; //过滤条件*/
/* 		var accounts = {};*/
/* 		var employees = {};*/
/* 		//所有员工*/
/* 		ykp.doAjax({*/
/* 			async: false,*/
/* 			url: '/api/api_employees/f7',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				select: 'bmm_employees.id,bmm_employees.name'*/
/* 			},*/
/* 			success: function(res) {*/
/* 				var data = res.data;*/
/* 				for(var i in data) {*/
/* 					employees[data[i]['id']] = data[i]['name'];*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 		*/
/* */
/* */
/* 		//所有账户*/
/* 		ykp.doAjax({*/
/* 			async: false,*/
/* 			url: '/api/api_bank/f7',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				select: 'xtm_kh_bank.id,xtm_kh_bank.type,xtm_kh_bank.bank_name'*/
/* 			},*/
/* 			success: function(res) {*/
/* 				var data = res.data;*/
/* 				for(var i in data) {*/
/* 					accounts[data[i]['id']] = data[i];*/
/* 				}*/
/* 			}*/
/* 		});*/
/* */
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_finance/loan_list',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				limit: page_size,*/
/* 				filter: filter*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '.pageBar'*/
/* 			},*/
/* 			initOrder: "", //初始化sort*/
/* 			defaultOrder: "",*/
/* 			contentId:"#datalist",*/
/* 			params:[{*/
/* 				id:"#dynamic-table",*/
/* 				field:["","","cwm_loan.status","cwm_loan.num","cwm_loan.time","cwm_loan.money","","cwm_loan.loan_type","cwm_loan.object_type","cwm_loan.object_name","cwm_loan.remark","cwm_loan.create_id","cwm_loan.create_at","cwm_loan.auth_id",*/
/* 					"cwm_loan.auth_time","cwm_loan.auth_remark","cwm_loan.clearing","cwm_loan.clearing_time"]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* */
/* 		doSearch();*/
/* 		//搜索*/
/* 		function doSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_finance/loan_list',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: page_size,*/
/* 					order: order*/
/* 				}*/
/* 			}*/
/* 			cs.doSearch('#search', data, 'filter', false, function(res, _filter) {*/
/* 				filter = _filter;*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					return false;*/
/* 				} else {*/
/* 					addList(res);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		getSearch();*/
/* */
/* 		function getSearch() {*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			var list = [{*/
/* 					name: "借贷编号",*/
/* 					search: "cwm_loan.num",*/
/* 					type: "text"*/
/* 				},*/
/* 				{*/
/* 					name: "时间 ",*/
/* 					search: "cwm_loan.time",*/
/* 					type: "time"*/
/* 				},*/
/* 				{*/
/* 					name: "金额",*/
/* 					search: "cwm_loan.money",*/
/* 					type: "text"*/
/* 				},*/
/* 				{*/
/* 					name: "账户",*/
/* 					search: "cwm_loan.account",*/
/* 					type: "select",*/
/* 					url: "/api/api_bank/f7",*/
/* 					key: "bank",*/
/* 					select:"xtm_kh_bank.id,xtm_kh_bank.type,xtm_kh_bank.bank_name",*/
/* 					title:"bank_name"*/
/* 				},*/
/* 				{*/
/* 					name: "借贷类别",*/
/* 					search: "cwm_loan.loan_type",*/
/* 					type: "select",*/
/* 					option: [{*/
/* 						val: "1",*/
/* 						text: "借款"*/
/* 					}, {*/
/* 						val: "4",*/
/* 						text: "还款"*/
/* 					}]*/
/* 				},*/
/* 				{*/
/* 					name: "对象类别",*/
/* 					search: "cwm_loan.object_type",*/
/* 					type: "select",*/
/* 					option: [{*/
/* 						val: "1",*/
/* 						text: "公司"*/
/* 					}, {*/
/* 						val: "2",*/
/* 						text: "员工"*/
/* 					}, {*/
/* 						val: "3",*/
/* 						text: "部门"*/
/* 					}]*/
/* 				},*/
/* 				{*/
/* 					name: "关联对象",*/
/* 					search: "cwm_loan.object",*/
/* 					type: "select",*/
/* 					url: "/api/api_employees/f7",*/
/* 					key: "people"*/
/* 				},*/
/* 				{*/
/* 					name: "支付方式",*/
/* 					search: "cwm_loan.get_way ",*/
/* 					type: "select",*/
/* 					option: [{*/
/* 						val: "1",*/
/* 						text: "现金"*/
/* 					}, {*/
/* 						val: "2",*/
/* 						text: "支付宝"*/
/* 					}, {*/
/* 						val: "3",*/
/* 						text: "微信"*/
/* 					}, {*/
/* 						val: "4",*/
/* 						text: "银行卡"*/
/* 					}]*/
/* 				},*/
/* 				{*/
/* 					name: "备注",*/
/* 					search: "cwm_loan.remark",*/
/* 					type: "text"*/
/* 				},*/
/* 				{*/
/* 					name: "创建人",*/
/* 					search: "cwm_loan.create_id",*/
/* 					type: "select",*/
/* 					url: "/api/api_employees/f7",*/
/* 					key: "people"*/
/* 				},*/
/* 				{*/
/* 					name: "创建时间",*/
/* 					search: "cwm_loan.create_at",*/
/* 					type: "time"*/
/* 				},*/
/* 				{*/
/* 					name: "审批状态",*/
/* 					search: "cwm_loan.status",*/
/* 					type: "select",*/
/* 					option: [{*/
/* 						val: "0",*/
/* 						text: "待审批"*/
/* 					}, {*/
/* 						val: "1",*/
/* 						text: "未通过"*/
/* 					}, {*/
/* 						val: "2",*/
/* 						text: "已通过"*/
/* 					}]*/
/* 				},*/
/* 				{*/
/* 					name: "审批人",*/
/* 					search: "cwm_loan.auth_id",*/
/* 					type: "select",*/
/* 					url: "/api/api_employees/f7",*/
/* 					key: "people"*/
/* 				},*/
/* 				{*/
/* 					name: "审批时间",*/
/* 					search: "cwm_loan.auth_time",*/
/* 					type: "time",*/
/* 					url: "/api/api_employees/f7",*/
/* 					key: "people"*/
/* 				},*/
/* 				{*/
/* 					name: "结算人",*/
/* 					search: "cwm_loan.clearing",*/
/* 					type: "select",*/
/* 					url: "/api/api_employees/f7",*/
/* 					key: "people"*/
/* 				},*/
/* 				{*/
/* 					name: "结算时间",*/
/* 					search: "cwm_loan.clearing_time",*/
/* 					type: "time"*/
/* 				},*/
/* 			];*/
/* */
/* 			cs.getSearch({*/
/* 				list: list,*/
/* 				el: "#heightsearch",*/
/* 				el1: "#heightsearch1"*/
/* 			}, dohSearch);*/
/* */
/* 			function dohSearch() {*/
/* 				var data = {*/
/* 					url: '/api/api_finance/loan_list',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						limit: page_size,*/
/* 						order: order*/
/* 					}*/
/* 				}*/
/* 				cs.hSearch('.search1', data, 'filter', false, function(res, _filter) {*/
/* 					filter = _filter;*/
/* 					$('.in').removeClass('modal-backdrop');*/
/* 					$("#heightsearch1").slideUp();*/
/* 					$("#heightsearch").removeClass('active').css('z-index', '');*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt('暂无数据！');*/
/* 						}, 1000);*/
/* 						$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					}*/
/* 					addList(res);*/
/* 				})*/
/* 			}*/
/* 		}*/
/* */
/* 		$('#flush').click(function() {*/
/* 			filter = '';*/
/* 			$('[pts="0"]').val('');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			pageList();*/
/* 		})*/
/* */
/* 		$('.myFilter').click(function() {*/
/* 			if(!$(this).hasClass('clc')) {*/
/* 				$(this).addClass('clc').siblings().removeClass('clc');*/
/* 			}*/
/* 			var data = {*/
/* 				"limit": page_size,*/
/* 				'page': 1,*/
/* 				'order': order*/
/* 			}*/
/* 			var filter_ = $(this).attr('data-status');*/
/* 			if(filter_ == 'a') {*/
/* 				pageList(1);*/
/* 				return;*/
/* 			}*/
/* 			filter = 'cwm_loan.status = '+filter_;*/
/* 			data['filter'] = 'cwm_loan.status = ' + filter_;*/
/* 			pageList_2(data);*/
/* */
/* 		})*/
/* */
/* 		$('#filterBtns a').mouseover(function() {*/
/* 			$(this).addClass('over');*/
/* 		})*/
/* 		$('#filterBtns a').mouseout(function() {*/
/* 			$(this).removeClass('over');*/
/* 		})*/
/* */
/* 		function pageList_2(data) {*/
/* 			ykp.list({*/
/* 				url: '/api/api_finance/loan_list',*/
/* 				method: 'post',*/
/* 				data: data,*/
/* 				pageBar: {*/
/* 					id: '.pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt('暂无数据！');*/
/* 						}, 1000);*/
/* 						$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					} else {*/
/* 						addList(res);*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		pageList(1);*/
/* */
/* 		function pageList(current) {*/
/* 			ykp.list({*/
/* 				url: '/api/api_finance/loan_list',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					page: 1,*/
/* 					limit: page_size,*/
/* 					order: order*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '.pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt('暂无数据！');*/
/* 						}, 1000);*/
/* 						$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					} else {*/
/* 						addList(res);*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		$('#changePageNum').change(function() {*/
/* 			page_size = $(this).val();*/
/* 			ykp.setCookie('page_size',page_size);*/
/* 			pageList(1);*/
/* 		})*/
/* */
/* 		function addList(res) {*/
/* 			var data = res.data.items;*/
/* 			var html = '';*/
/* 			var sstatus = ['待审批', '未通过', '已通过'];*/
/* 			var ths = $('.thColor th');*/
/* 			var styles = [];*/
/* 			var loan_type = ['', '借款', '', '', '还款'];*/
/* 			var object_type = ['', '公司', '员工', '部门'];*/
/* 			var get_way = ['', '现金', '支付宝', '微信', '银行卡'];*/
/* 			for(i = 0; i < ths.length; i++) {*/
/* 				styles.push(ths.eq(i).css('display'));*/
/* 			}*/
/* */
/* 			//审批权限为true可以审批,为false不可审批*/
/* 			var spApp = cs.approve_authority({*/
/* 				name: '借贷',*/
/* 				nodes: [177]*/
/* 			});*/
/* */
/*             var cxApp = cs.approve_authority({*/
/* 				name: '借贷',*/
/* 				nodes: [273]*/
/* 			});*/
/* */
/* 			var edit1_statu = cs.getNodes([175], true);*/
/* 			var edit2_statu = cs.getNodes([176], true);*/
/* */
/* 			var company_name;*/
/* 			for(var i in data) {*/
/* 				company_name = '<a class=" pos-rel" data-cid="'+data[i]['cwm_loan.cid']+'" href="#"><span class="customerDetail">' + data[i]['cwm_loan.object_name'] +'</span><label class="pos-rel"> <i style="color:' + (data[i]['Remark'] ? (data[i]['Remark'].length > 0 ? 'red' : "") : "") + '"  class="iconBnt fa fa-info-circle"  data-rel="tooltip" data-placement="right" data-html="true" title="' + cs.getRemark(data[i]['Remark']) + '" ></i></label>' + '</a> ';*/
/* */
/* 				html +=*/
/* 					'<tr data-id="' + data[i]['cwm_loan.id'] + '"  data-status="' + data[i]['cwm_loan.status'] + '">' +*/
/* 					'<td class="center" style="display: ' + styles[0] + ' ">' +*/
/* 					'<label class="pos-rel">' +*/
/* 					'<input type="checkbox" name="check" class="ace"/>' +*/
/* 					'<span class="lbl"></span>' +*/
/* 					'</label>' +*/
/* 					'</td>' +*/
/* 					'<td style="display: ' + styles[1] + '" class="center">' +*/
/* 					'<label class="pos-rel">' +*/
/*                     '<a href="#" class="sdetail btOrange" style="color:#fff !important" title="详情"><i class="fa fa-info "></i></a> ' +*/
/* 					'<a href="#" class="edit1 btBlue"  style="display:' + (edit1_statu ? (data[i]['cwm_loan.status'] == 1 ? 'inline-block' : 'none') : 'none') + '; color:#fff !important" contentAuthority="175" title="编辑"><i class="fa fa-pencil-square-o"></i></a> ' +*/
/* 					'<a href="#" class="edit2 btBlue" style="display:' + (edit2_statu ? (data[i]['cwm_loan.status'] == 2 && data[i]['cwm_loan.get_way'] == '0' ? 'inline-block' : 'none') : 'none') + ';color:#fff !important" contentAuthority="176" title="结算"><i class="fa fa-calculator"></i></a> ' +*/
/* 					'<a href="#" class="btOrange sp" data-status = "0" style="display:' + (cxApp ? (data[i]['cwm_loan.status'] == 2 && data[i]['cwm_loan.get_way'] == '0' ? 'inline-block' : 'none') : 'none') + ';color:#fff !important" contentAuthority="273" title="撤销"><i class="fa fa-rotate-left"></i></a> ' +*/
/* 					'<a href="#" class="btGreen sp" data-status = "2" style="display:' + (spApp ? (data[i]['cwm_loan.status'] == 0 ? 'inline-block' : 'none') : 'none') + ';color:#fff !important" contentAuthority="177" title="通过"><i class="fa fa-check-circle-o"></i></a> ' +*/
/* 					'<a href="#" class="btRed sp" data-status = "1" style="display:' + (spApp ? (data[i]['cwm_loan.status'] == 0 ? 'inline-block' : 'none') : 'none') + ';color:#fff !important" title="驳回"><i class="fa fa-times-circle"></i></a> ' +*/
/* 						*/
/* 					'</label>' +*/
/* 					'</td>' +*/
/* 					'<td style="display: ' + styles[13] + '" data-num="12"><sapn class="cedit">' + sstatus[data[i]['cwm_loan.status']] + '</sapn></td>' +*/
/* 					'<td style="display: ' + styles[2] + '" data-num="1"><sapn class="cedit">' + data[i]['cwm_loan.num'] + '</sapn></td>' +*/
/* 					'<td style="display: ' + styles[3] + ';" data-num="2"><sapn class="cedit">' + (data[i]['cwm_loan.time'] != '0' ? cs.getNowTime(data[i]['cwm_loan.time']) : '') + '</classsapn></td>' +*/
/* 					'<td style="display: ' + styles[5] + ';text-align: right !important;" data-num="3"><sapn class="cedit">' + data[i]['cwm_loan.money'] + '</sapn></td>' +*/
/* //					'<td style="display: ' + styles[5] + '" data-num="4"><sapn class="cedit">' + (data[i]['cwm_loan.account'] != '0' ? (accounts[data[i]['cwm_loan.account']]?accounts[data[i]['cwm_loan.account']]['bank_name'] :'') : '') + '</sapn></td>' +*/
/*                     '<td style="display: ' + styles[0] + '" data-num="0"><sapn class="cedit">' + (get_way[data[i]['cwm_loan.get_way']] ? (get_way[data[i]['cwm_loan.get_way']]) : "") + ( data[i]['cwm_loan.account'] != '0' ? (accounts[data[i]['cwm_loan.account']]? "，" +accounts[data[i]['cwm_loan.account']]['bank_name'] :'') : '') + '</sapn></td>' +*/
/*  */
/* 					'<td style="display: ' + styles[6] + '" data-num="5"><sapn class="cedit">' + loan_type[data[i]['cwm_loan.loan_type']] + '</sapn></td>' +*/
/* 					'<td style="display: ' + styles[7] + '" data-num="6"><sapn class="cedit">' + object_type[data[i]['cwm_loan.object_type']] + '</sapn></td>' +*/
/* 					'<td style="display: ' + styles[8] + '" data-num="7" data-cid="' + data[i]['cwm_loan.cid'] + '">' + (data[i]['cwm_loan.object_type'] == '1' ? company_name : data[i]['cwm_loan.object_name']) + '</td>' +*/
/* //					'<td style="display: ' + styles[9] + '" data-num="8"><sapn class="cedit">' + get_way[data[i]['cwm_loan.get_way']] + '</sapn></td>' +*/
/* 					'<td style="display: ' + styles[10] + '" data-num="9"><sapn class="cedit">' + data[i]['cwm_loan.remark'] + '</sapn></td>' +*/
/* 					'<td style="display: ' + styles[11] + '" data-num="10"><sapn class="cedit">' + employees[data[i]['cwm_loan.create_id']] + '</sapn></td>' +*/
/* 					'<td style="display: ' + styles[12] + '" data-num="11"><sapn class="cedit">' + (data[i]['cwm_loan.create_at'] != '0' ? cs.getNowTime(data[i]['cwm_loan.create_at'],true) : '') + '</sapn></td>' +*/
/* 					*/
/* 					'<td style="display: ' + styles[14] + '" data-num="13"><sapn class="cedit">' + (data[i]['cwm_loan.auth_id'] != '0' ? employees[data[i]['cwm_loan.auth_id']] : '') + '</sapn></td>' +*/
/* 					'<td style="display: ' + styles[15] + '" data-num="14"><sapn class="cedit">' + (data[i]['cwm_loan.auth_time'] != '0' ? cs.getNowTime(data[i]['cwm_loan.auth_time'],true) : '') + '</sapn></td>' +*/
/* 					'<td style="display: ' + styles[16] + '" data-num="15"><sapn class="cedit">' + data[i]['cwm_loan.auth_remark'] + '</sapn></td>' +*/
/* 					'<td style="display: ' + styles[17] + '" data-num="16">' + (employees[data[i]['cwm_loan.clearing']] || ""  )+ '</td>' +*/
/* 					'<td style="display: ' + styles[18] + '" data-num="17">' + (data[i]['cwm_loan.clearing_time']  ? cs.getNowTime(data[i]['cwm_loan.clearing_time'],true) : "") + '</td>' +*/
/* 					'</tr>';*/
/* 			};*/
/* 			*/
/* 			$('#datalist').html(html);*/
/* */
/* 			//			$('.custom_table table').find('td').mousemove(function() {*/
/* 			//				var index = $(this).index();*/
/* 			////				$(this).parents('table').find('tr').children('td').eq(index).trigger("mousemove")*/
/* 			//				console.log($(this).parents('table').find('tr').children('td').eq(index).text())*/
/* 			//			})*/
/* */
/* 			//客户详情*/
/* 			custom.get_custom_info();*/
/* 			//备注信息*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/* 			custom.showReamrk();*/
/* */
/* 			// var spStatus = cs.getSpStatus('借贷',true);*/
/* 			//点击 审批 or  驳回 or  撤销*/
/* 			$("#datalist tr .sp").unbind('click').click(function() {*/
/* 				var status = $(this).attr('data-status');*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				changeStatus(status, id);*/
/* 			});*/
/* */
/* 			$('.plSp').click(function() {*/
/* 				var num = 0;*/
/* 				var status = '';*/
/* 				var coldata = [];*/
/* 				var Statu = false;*/
/* 				$('#datalist').find('input[type=checkbox]').each(function(i) {*/
/* 					if($(this).is(':checked')) {*/
/* 						num++;*/
/* 						status = $(this).parents('tr').attr('data-status') == 1 ? 2 : 1;*/
/* 						if($(this).parents('tr').attr('data-status') == 1 || $(this).parents('tr').attr('data-status') == 2) {*/
/* 							ykp.prompt('审批过的不能批量审批!');*/
/* 							Statu = false;*/
/* 						} else {*/
/* 							coldata.push({*/
/* 								id: $(this).parents('tr').attr('data-id'),*/
/* 								status: status*/
/* 							});*/
/* 							Statu = true;*/
/* 						}*/
/* */
/* 					}*/
/* 				})*/
/* */
/* 				if(num == 0) {*/
/* 					ykp.prompt('请选择再审批');*/
/* 				} else {*/
/* 					if(Statu) {*/
/* 						ykp.doAjax({*/
/* 							url: "/api/api_finance/all_loan_sh",*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								coldata: JSON.stringify(coldata)*/
/* 							},*/
/* 							success: function(res) {*/
/* 								ykp.prompt('审批成功');*/
/* 								pageList(1);*/
/* 							}*/
/* 						})*/
/* 					}*/
/* 				}*/
/* */
/* 			})*/
/* 			//查看借贷基本信息*/
/* 			$('.sdetail').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				var index = $(this).parents('tr').index();*/
/* */
/* 				showMark('.popup_new');*/
/* 				$('#templateBox #other').show();*/
/* 				$('#showBox .title').text('查看借贷信息');*/
/* 				$('#templateCon [addifed]').prop('disabled', true);*/
/* 				$('#templateCon .popup_button, #templateCon #upload1').remove();*/
/* */
/* 				cs.timeplug();*/
/* 				var _data = data[index];*/
/* 				var imgArr = [];*/
/* 				var get_way = {*/
/* 					1: "现金",*/
/* 					2: "支付宝",*/
/* 					3: "微信",*/
/* 					4: "银行卡"*/
/* 				}*/
/* 				for(var key in _data) {*/
/* 					$('#templateBox ').find('[addifed]').each(function() {*/
/* 						if(key.replace(/cwm_loan./, '') == $(this).attr('addifed')) {*/
/* 							$(this).attr('addifed') == 'time' ? $(this).val(cs.getNowTime(_data[key])) : $(this).val(_data[key]);*/
/* 							if($(this).attr('addifed') == 'loan_type' || $(this).attr('addifed') == 'object_type' || $(this).attr('addifed') == 'get_way') {*/
/* 								$(this).find('option[value=' + _data[key] + ']').attr('selected', true);*/
/* 							}*/
/* 						}*/
/* 						if(key.replace(/cwm_loan./, '') == $(this).attr('addifed')) {*/
/* 							if($(this).attr('addifed') == 'get_way') {*/
/* 								$(this).text(get_way[_data[key]] ? get_way[_data[key]] : "暂无");*/
/* 								if(_data[key] == 1 || _data[key] == 0) {*/
/* 									$('#templateBox .account').hide();*/
/* 								}*/
/* 							}else if($(this).attr('addifed') == 'account' && _data['cwm_loan.get_way'] != 0 ) {*/
/* 								if(_data['cwm_loan.get_way'] != 1){*/
/* 									$(this).text(accounts[_data[key]]['bank_name'] ? accounts[_data[key]]['bank_name'] : "暂无");*/
/* 								}*/
/* 								*/
/* //								(data[i]['cwm_loan.account'] != '0' ? (accounts[data[i]['cwm_loan.account']]?accounts[data[i]['cwm_loan.account']]['bank_name'] :'') : '')*/
/* 							}*/
/* 						}*/
/* 					})*/
/*                     $('#templateCon #imgBox').find('label').hide();*/
/* 					if(key == 'cwm_loan.img') {*/
/* 						imgArr = _data[key].split(',');*/
/* */
/* 						if(imgArr.length >= 5) {*/
/* 							$('#templateCon #imgBox').find('label').remove();*/
/* 						}*/
/* 						for(var j in imgArr) {*/
/* 							$('#templateBox #imgBox').append('<img class="image" style="margin-right:10px;float:left;width:70px;height:70px;" data-url="' + imgArr[j] + '" src="' + imgArr[j] + '" />');*/
/* 						}*/
/* */
/* 					}*/
/* 				}*/
/*                 uploadsmallimg();*/
/* 				$('#templateBox [addifed=clearing_time]').text(cs.getNowTime(_data['cwm_loan.clearing_time'],true));*/
/* 				$('#templateBox [addifed=clearing]').text(employees[_data['cwm_loan.clearing']]);*/
/* 				*/
/* 				var val = $('#templateCon').find('select[addifed="object_type"]').val();*/
/* 				var arr = [];*/
/* 				if(data[index]['cwm_loan.files']) {*/
/* 					JSON.parse(data[index]['cwm_loan.files']).forEach(function(item) {*/
/* 						*/
/* 						arr.push('<p style="padding-left: 2px;"><a data-url="' + item.url + '">' + item.name + '</a><i style="color: red; margin-left: 20px;cursor: pointer;" class="ace-icon fa fa-trash-o gdel gdel2"></i></p>')*/
/* 					})*/
/* 					$('#templateCon #fileBox').html(arr.join(','));*/
/* 					$('#templateCon #fileBox').find('a').click(function() {*/
/* 						var name = $(this).text();*/
/* 						var url = $(this).attr('data-url');*/
/* 						window.open(ykp.api_url+"/api/api_common/update_file_name?file_url="+url+"&name="+name)*/
/* 					})*/
/* 					$('.gdel2').click(function() {*/
/* 						$(this).parent().remove();*/
/* 					})*/
/* 				}*/
/* */
/* 				//上传图片*/
/*                 uploadsmallimg()*/
/* */
/* 				changeSelect(val);*/
/* */
/* 				changeSelect();*/
/* 				var obj = "";*/
/* 				var obj_type = "";*/
/* 				setTimeout(function() {*/
/* 					obj = $('#templateCon select[addifed="object"]').val();*/
/* 					obj_type = $('#templateCon select[addifed="object_type"]').val();*/
/* 					if(obj && obj_type) {*/
/* 						ykp.doAjax({*/
/* 							url: "/api/api_finance/loan_xxx",*/
/* 							method: "post",*/
/* 							data: {*/
/* 								object_type: obj_type,*/
/* 								object: obj*/
/* 							},*/
/* 							success: function(res) {*/
/* 								$('#templateCon').find('input[noh="monty"]').val(res.data.margin);*/
/* 							}*/
/* 						})*/
/* 					} else {*/
/* 						$('#templateCon').find('input[noh="monty"]').val("");*/
/* 					}*/
/* 				}, 500)*/
/* */
/* 				$('#templateCon').find('select[addifed="object"]').change(function() {*/
/* 					obj = $(this).val();*/
/* 					obj_type = $('#templateCon select[addifed="object_type"]').val();*/
/* 					if(obj && obj_type) {*/
/* 						ykp.doAjax({*/
/* 							url: "/api/api_finance/loan_xxx",*/
/* 							method: "post",*/
/* 							data: {*/
/* 								object_type: obj_type,*/
/* 								object: obj*/
/* 							},*/
/* 							success: function(res) {*/
/* 								$('#templateCon').find('input[noh="monty"]').val(res.data.margin);*/
/* 							}*/
/* 						})*/
/* 					} else {*/
/* 						$('#templateCon').find('input[noh="monty"]').val("");*/
/* 					}*/
/* 				})*/
/* */
/* 				cs.upload1({*/
/* 					el: "#templateBox #upload1",*/
/* 					ael: "#templateBox #fileBox"*/
/* 				})*/
/* */
/* 				add_edit(id, _data['cwm_loan.account'], _data['cwm_loan.get_way']);*/
/* 			})*/
/* */
/* 			//编辑结算信息；*/
/* 			balance();*/
/* */
/* 			//编辑借贷基本信息*/
/* 			$('.edit1').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				var index = $(this).parents('tr').index();*/
/* 				showMark('.popup_new');*/
/* 				$('#showBox .title').text('编辑借贷信息');*/
/* */
/* 				cs.timeplug();*/
/* */
/* 				var _data = data[index];*/
/* 				var imgArr = [];*/
/* 				for(var key in _data) {*/
/* 					$('#templateBox ').find('[addifed]').each(function() {*/
/* 						if(key.replace(/cwm_loan./, '') == $(this).attr('addifed')) {*/
/* 							$(this).attr('addifed') == 'time' ? $(this).val(cs.getNowTime(_data[key])) : $(this).val(_data[key]);*/
/* 							if($(this).attr('addifed') == 'loan_type' || $(this).attr('addifed') == 'object_type' || $(this).attr('addifed') == 'get_way') {*/
/* 								$(this).find('option[value=' + _data[key] + ']').attr('selected', true);*/
/* 							}*/
/* 						}*/
/* 					})*/
/* 					if(key == 'cwm_loan.img') {*/
/* 						imgArr = _data[key].split(',');*/
/* 						if(imgArr.length >= 5) {*/
/* 							$('#templateCon #imgBox').find('label').remove();*/
/* 						}*/
/* 						for(var j in imgArr) {*/
/* 							$('#templateBox #imgBox').append('<img style="margin-right:10px;float:left;width:70px;height:70px;" data-url="' + imgArr[j] + '" src="' + imgArr[j] + '" />');*/
/* 						}*/
/* 					}*/
/* */
/* 				}*/
/* 				var val = $('#templateCon').find('select[addifed="object_type"]').val();*/
/* 				var arr = [];*/
/* 				if(data[index]['cwm_loan.files']) {*/
/* 					JSON.parse(data[index]['cwm_loan.files']).forEach(function(item) {*/
/* 						arr.push('<p style="padding-left: 2px;"><a href="' + item.url + '">' + item.name + '</a><i style="color: red; margin-left: 20px;cursor: pointer;" class="ace-icon fa fa-trash-o gdel gdel2"></i></p>')*/
/* 					})*/
/* 					$('#templateCon #fileBox').html(arr.join(','));*/
/* 					*/
/* 					*/
/* 					$('#templateCon #fileBox').find('a').click(function() {*/
/* 						var name = $(this).text();*/
/* 						var url = $(this).attr('data-url');*/
/* 						window.open(ykp.api_url+"/api/api_common/update_file_name?file_url="+url+"&name="+name)*/
/* 					})*/
/* 					$('.gdel2').click(function() {*/
/* 						$(this).parent().remove();*/
/* 					})*/
/* 				}*/
/* */
/* 				//上传图片*/
/*                 uploadsmallimg()*/
/* */
/* 				changeSelect(val);*/
/* */
/* 				changeSelect();*/
/* 				var obj = "";*/
/* 				var obj_type = "";*/
/* 				setTimeout(function() {*/
/* 					obj = $('#templateCon select[addifed="object"]').val();*/
/* 					obj_type = $('#templateCon select[addifed="object_type"]').val();*/
/* 					if(obj && obj_type) {*/
/* 						ykp.doAjax({*/
/* 							url: "/api/api_finance/loan_xxx",*/
/* 							method: "post",*/
/* 							data: {*/
/* 								object_type: obj_type,*/
/* 								object: obj*/
/* 							},*/
/* 							success: function(res) {*/
/* 								$('#templateCon').find('input[noh="monty"]').val(res.data.margin);*/
/* 							}*/
/* 						})*/
/* 					} else {*/
/* 						$('#templateCon').find('input[noh="monty"]').val("");*/
/* 					}*/
/* 				}, 500)*/
/* */
/* 				$('#templateCon').find('select[addifed="object"]').change(function() {*/
/* 					obj = $(this).val();*/
/* 					obj_type = $('#templateCon select[addifed="object_type"]').val();*/
/* 					if(obj && obj_type) {*/
/* 						ykp.doAjax({*/
/* 							url: "/api/api_finance/loan_xxx",*/
/* 							method: "post",*/
/* 							data: {*/
/* 								object_type: obj_type,*/
/* 								object: obj*/
/* 							},*/
/* 							success: function(res) {*/
/* 								$('#templateCon').find('input[noh="monty"]').val(res.data.margin);*/
/* 							}*/
/* 						})*/
/* 					} else {*/
/* 						$('#templateCon').find('input[noh="monty"]').val("");*/
/* 					}*/
/* 				})*/
/* */
/* 				cs.upload1({*/
/* 					el: "#templateBox #upload1",*/
/* 					ael: "#templateBox #fileBox"*/
/* 				})*/
/* */
/* 				add_edit(id, _data['cwm_loan.account'], _data['cwm_loan.get_way']);*/
/* 			})*/
/* 		}*/
/* */
/* 		//结算*/
/* 		function balance() {*/
/* 			$('.edit2').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				var postData = {*/
/* 					id: id*/
/* 				};*/
/* 				showMark('.popup_balance');*/
/* 				$('#showBox .title').html('编辑结算信息');*/
/* */
/* 				// var account_html = [];*/
/* 				// for(var i in accounts) {*/
/* 				// 	account_html.push('<option value="' + accounts[i]['id'] + '" get_way="' + accounts[i]['type'] + '">' + accounts[i]['bank_name'] + '</option>');*/
/* 				// }*/
/* 				// $('#templateCon [field="account"]').append(account_html.join(''));*/
/* */
/* 				//切换账户切换支出方式*/
/* 				// var get_way = ['', '现金', '支付宝', '微信', '银行卡'];*/
/* 				// $('#templateCon [field="account"]').change(function() {*/
/* 				// 	if(!$(this).find('option:selected').attr('get_way') || $(this).find('option:selected').attr('get_way') == '0') {*/
/* 				// 		$('#templateCon [field="get_way"]').val('').attr('get_way', '');*/
/* 				// 		return;*/
/* 				// 	}*/
/* */
/* 				// 	$('#templateCon [field="get_way"]').val(get_way[$(this).find('option:selected').attr('get_way')]).attr('get_way', $(this).find('option:selected').attr('get_way'));*/
/* 				// });*/
/* */
/* 				//切换收款方式 自动切换收款账户*/
/* 				cs.changePayWayGetAccounts($('#templateCon [field="get_way"]'), $('#templateCon [field="account"]'));*/
/* 				$('#templateCon [field="get_way"]').change(function() {*/
/* 					if($(this).val() == 1) {*/
/* 						$('#templateCon [field="account"]').hide().prev().hide();*/
/* 					} else {*/
/* 						$('#templateCon [field="account"]').show().prev().show();*/
/* 					}*/
/* 				})*/
/* 				//提交结算账户信息*/
/* 				$('#templateCon .sure_button').click(function() {*/
/* 					postData['get_way'] = $('#templateCon [field="get_way"]').val();*/
/* */
/* 					if(!postData['get_way']) {*/
/* 						ykp.prompt('请输入相应数据！');*/
/* 						return;*/
/* 					} else if(postData['get_way'] != 1) {*/
/* 						postData['account'] = $('#templateCon [field="account"]').val();*/
/* 						if(!postData['account'] || !postData['get_way']) {*/
/* 							ykp.prompt('请输入相应数据！');*/
/* 							return;*/
/* 						}*/
/* 					}*/
/* */
/* 					ykp.doAjax({*/
/* 						url: '/api/api_finance/loan_edit2',*/
/* 						method: 'post',*/
/* 						data: postData,*/
/* 						success: function(res) {*/
/* 							cs.close();*/
/* 							pageList();*/
/* 						}*/
/* 					});*/
/* 				});*/
/* 			});*/
/* 		}*/
/* */
/* 		//对点击驳回进行处理*/
/* 		function changeStatus(status, id) {*/
/* 			var data = {*/
/* 				url: '/api/api_finance/loan_sh',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					id: id,*/
/* 					status: status*/
/* 				}*/
/* 			}*/
/* */
/* 			if(status == 1) {*/
/* 				$('#feedBack').show();*/
/* 				$('#feedBack .hold').click(function() {*/
/* 					var approve_reply = $('#feedBack').find('input').val();*/
/* 					if(approve_reply == '') {*/
/* 						ykp.prompt('不能为空！');*/
/* 						return false;*/
/* 					}*/
/* 					data.data.auth_remark = approve_reply.trim();*/
/* 					setStatus(data);*/
/* 					$('.close_label').parents('.label_popup').fadeOut();*/
/* 				})*/
/* 				cs.closePop();*/
/* 			} else if(status == 0) {*/
/* 						layui.use('layer', function() {*/
/* 						var layer = layui.layer;*/
/* 						layer.confirm('确认撤销审批？', function(flag) {*/
/* 							if(flag) {*/
/* 						layer.closeAll();*/
/* 						setStatus(data);*/
/* 							}*/
/* 						});*/
/* 					})*/
/* //				bootbox.confirm('确认撤销审批？', function(flag) {*/
/* //					if(flag) {*/
/* //						setStatus(data);*/
/* //					}*/
/* //				})*/
/*               */
/* 			} else {*/
/* 				setStatus(data);*/
/* 			}*/
/* 		}*/
/* */
/* 		//对点击审批 || 撤销进行处理*/
/* 		function setStatus(data) {*/
/* 			ykp.doAjax({*/
/* 				url: data.url,*/
/* 				method: data.method,*/
/* 				data: data.data,*/
/* 				success: function(res) {*/
/* 					ykp.prompt('审批成功!');*/
/* 					pageList();*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//自定义table*/
/* 		cs.custorm_check('#dynamic-table', '#datalist', true);*/
/* */
/* 		$('.add').click(function() {*/
/* 			showMark('.popup_new');*/
/* 			$('#showBox .title').text('添加借贷信息');*/
/* 			cs.timeplug();*/
/* */
/* 			//上传图片*/
/*             uploadsmallimg()*/
/* */
/* 			//切换获取员工  公司 部门*/
/* 			changeSelect();*/
/* */
/* 			cs.upload1({*/
/* 				el: "#templateBox #upload1",*/
/* 				ael: "#templateBox #fileBox"*/
/* 			})*/
/* */
/* 			add_edit();*/
/* */
/* 		});*/
/* */
/* 		//调用上传图片方法*/
/*         //uploadsmallimg()*/
/* */
/* */
/* 		function changeSelect(val) {*/
/* 			if(val) {*/
/* 				switch(val) {*/
/* 					case '1':*/
/* 						getCustom();*/
/* 						break;*/
/* 					case '2':*/
/* 						getPeople();*/
/* 						break;*/
/* 					case '3':*/
/* 						getParentPart();*/
/* 						break;*/
/* 					default:*/
/* 						$('#templateCon #object').html('<option value=""> 请选择 </option>');*/
/* 						break;*/
/* 				}*/
/* 			} else {*/
/* 				$('#contentBox').find('select[addifed="object_type"]').change(function() {*/
/* 					var value = $(this).val();*/
/* 					switch(value) {*/
/* 						case '1':*/
/* 							getCustom();*/
/* 							//$('#contentBox').find('select[addifed="object_type"]').trigger('change');*/
/* 							break;*/
/* 						case '2':*/
/* 							getPeople();*/
/* 							break;*/
/* 						case '3':*/
/* 							getParentPart();*/
/* 							break;*/
/* 						default:*/
/* 							$('#templateCon #object').html('<option value=""> 请选择 </option>');*/
/* 							break;*/
/* 					}*/
/* 				})*/
/* 			}*/
/* */
/* 		}*/
/* */
/* 		function add_edit(id, account, get_way) {*/
/* 			var obj = "";*/
/* 			var obj_type = "";*/
/* 			$('#templateCon').find('select[addifed="object"],select[addifed="object_type"]').change(function() {*/
/* 				if($(this).attr('addifed') == "object") {*/
/* 					obj = $(this).val();*/
/* 				} else if($(this).attr('addifed') == "object_type") {*/
/* 					obj_type = $(this).val();*/
/* 					setTimeout(function() {*/
/* 						var el = $('#templateCon').find('select[addifed="object"]');*/
/* 						if(el.val() != "") {*/
/* 							obj = el.val();*/
/* 						}*/
/* 					}, 500)*/
/* 				}*/
/* 				if(obj && obj_type) {*/
/* 					ykp.doAjax({*/
/* 						url: "/api/api_finance/loan_xxx",*/
/* 						method: "post",*/
/* 						data: {*/
/* 							object_type: obj_type,*/
/* 							object: obj*/
/* 						},*/
/* 						success: function(res) {*/
/* 							$('#templateCon').find('input[noh="monty"]').val(res.data.margin);*/
/* 						}*/
/* 					})*/
/* 				} else {*/
/* 					$('#templateCon').find('input[noh="monty"]').val("");*/
/* 				}*/
/* 			})*/
/* 			$('#templateBox #sure_button').click(function() {*/
/* 				var status = true;*/
/* 				var data = {};*/
/* 				$('#templateCon').find('[addifed]').each(function(i, e) {*/
/* 					if(!$(this).is(':hidden')) {*/
/* 						if($(this).val() == "" && $(this).attr('addifed') != 'remark') {*/
/* 							ykp.prompt('输入框不能为空!');*/
/* 							status = false;*/
/* 							return false;*/
/* 						} else {*/
/* 							if($(this).attr('addifed') == 'object') {*/
/* 								data['object_name'] = $(this).find('option:selected').text();*/
/* 							}*/
/* 							data[$(this).attr('addifed')] = $(this).attr('addifed') == 'time' ? parseInt(new Date($(this).val()) / 1000) : $(this).val();*/
/* 						}*/
/* 					}*/
/* 					*/
/* 				})*/
/* */
/* 				if(id) {*/
/* 					data.id = id;*/
/* 					data.account = account;*/
/* 					data.get_way = get_way;*/
/* 				}*/
/* */
/* 				var imgs = [];*/
/* 				$('#templateCon #imgBox img').each(function() {*/
/* 					imgs.push($(this).attr('src'));*/
/* 				});*/
/* */
/* 				data.img = imgs.join(',');*/
/* */
/* 				var fileBox = $('#templateCon #fileBox');*/
/* 				var files = [];*/
/* 				if(fileBox.children().length > 0) {*/
/* 					$('#templateCon #fileBox').find('a').each(function(i) {*/
/* 						files.push({*/
/* 							name: $(this).text(),*/
/* 							url: $(this).attr('data-url')*/
/* 						})*/
/* 					})*/
/* */
/* 					data.files = JSON.stringify(files);*/
/* 				}*/
/* */
/* 				if(status) {*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_finance/loan_add_edit',*/
/* 						method: 'post',*/
/* 						data: data,*/
/* 						success: function(res) {*/
/* 							id ? ykp.prompt('编辑成功!') : ykp.prompt('添加成功!')*/
/* 							cs.close();*/
/* 							pageList();*/
/* 						}*/
/* 					})*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//获取上级部门*/
/* 		function getParentPart() {*/
/* 			ykp.doAjax({*/
/* 				url: "/api/api_department/f7",*/
/* 				method: "post",*/
/* 				data: {*/
/* 					select: 'bmm_department.id,bmm_department.name',*/
/* 					filter: 'bmm_department.is_del = 0 and bmm_department.parent = 0'*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					var content = [];*/
/* 					for(var i in data) {*/
/* 						content.push('<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>');*/
/* 					}*/
/* 					$('#templateBox #object').html(content.join(''));				*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		function getPeople() {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_employees/grid',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: 999*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var empl = [];*/
/* 					var data = res.data.items;*/
/* 					for(var i in data) {*/
/* 						if(data[i]['bmm_employees.name']) {*/
/* 							empl.push('<option value="' + data[i]['bmm_employees.id'] + '">' + data[i]['bmm_employees.name'] + '</option>')*/
/* 						}*/
/* 					}*/
/* 					$('#templateBox #object').html(empl.join(''));*/
/* 					$('#templateBox #object').trigger('change')*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		function getCustom() {*/
/* 			var people = [];*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_customer/customer',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					type: 3*/
/* 				},*/
/* 				success: function(res) {*/
/* 					console.log(res);*/
/* 					var data = res.data.items;*/
/* 					for(var i in data) {*/
/* 						people.push('<option value="' + data[i]['khm_customer.id'] + '">' + data[i]['khm_customer.name'] + '</option>')*/
/* 					}*/
/* 					$('#templateBox #object').html(people.join(''));*/
/* 					$('#templateBox #object').trigger('change')*/
/* 				}*/
/* 			})*/
/* 		}*/
/* 	});*/
/* </script>*/
