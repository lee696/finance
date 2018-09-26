<?php

/* admin/contractManagement/contractAuthorization.html */
class __TwigTemplate_43f40a4dece8f69bdc368374216573eb8f9bd38bfcbb5c5690d412fd71e87744 extends Twig_Template
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
\t
\t#templateBox .widget-box {
\t\tborder: none;
\t}
\t
\t#templateBox .space-12 {
\t\tmargin: 0;
\t}
\t
\t#heightsearch1 label {
\t\twidth: 68px;
\t}
\t
\t#templateCon label {
\t\twidth: 75px;
\t}
\t
\t#templateCon tbody tr td,
\t#templateCon thead tr th {
\t\ttext-align: left;
\t\tpadding: 5px 16px;
\t\theight: 35px;
\t}
\t#templateCon tbody tr td,
\t#templateCon thead tr th {
\t\ttext-align: center;
\t\tpadding: 0;

\t}
\t#templateCon span[field],
\t#templateCon span[syllable] {
\t\tdisplay: inline-block;
\t\tmin-width: 180px !important;
\t}
\t
\t#templateCon tbody tr td:before {
\t\tcontent: none !important;
\t}
\t
\t#templateCon .leader_info td {
\t\tbackground-color: #fff !important;
\t\tborder: none;
\t}
\t
\t#templateCon table {
\t\tborder: none !important;
\t}
</style>

<div class=\" widget-main\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<!-- <h3 class=\"header smaller lighter  blue\">合同授权</h3> -->
\t\t\t<div class=\"row\" style=\"margin-top: 20px;\" id=\"topTool\">
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<input type=\"text\" pts=0 sear=\"htm_contract.contract_code\" placeholder=\"订单编码\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<input type=\"text\" pts=0 sear=\"khm_customer.name\" placeholder=\"企业名称\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
                        <i class=\"fa fa-search\"></i>
                    </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button id=\"heightsearch\" type=\"button\" title=\"高级搜索\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
                        <i class=\"fa fa-filter\"></i>
                    </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
\t                    <i class=\"fa fa-refresh\"></i>
\t                </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"140\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button class=\"mergeItem btn btn-info btn-sm\" title=\"导入一次性合同\" type=\"button\" imp=\"0\" style=\"background-color: #1E9FFF !important; border-color:#1E9FFF ;\">
\t\t\t\t\t\t<i class=\"fa fa-sign-in\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"141\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button class=\"mergeItem btn btn-info btn-sm\" title=\"导入长期合同\" type=\"button\" imp=\"1\" style=\"background-color: #1E9FFF !important; border-color:#1E9FFF ;\">
\t\t\t\t\t\t<i class=\"fa fa-sign-in\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\" >
\t\t\t\t\t<button title=\"自动续签\" class=\"btn btn-info btn-sm auto_renew\" style=\"background-color: #1E9FFF !important; border-color:#1E9FFF ;\"><i class=\"fa fa-spinner\"></i></button>
\t\t\t\t</div>

\t\t\t\t<!-- <button type=\"button\" id=\"addItem\" style=\"outline: none;background-color: #009688 !important;\" class=\"btn btn-info btn-sm position-relative\">
                        <i class=\"fa fa-plus\"></i>
                        添加
                    </button> -->

\t\t\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"margin-top:30px;position: absolute; background: #fff;padding: 10px 0px; display: none;z-index:1042;\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>合同类型</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select gjs=0 sear=\"htm_contract.contract_type\" style=\"width: 180px;\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t<option value=\"2\">一次性合同</option>
\t\t\t\t\t\t\t\t<option value=\"1\">长期合同</option>
\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>订单编码</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"htm_contract.contract_code\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom: 5px;\">
\t\t\t\t\t\t\t<label>企业名称</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.name\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>修改时间</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"htm_contract.update_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<input id=\"date-timepicker1\" data-type=\"gj\" data-status=\"time\" gjs=0 sear=\"htm_contract.update_time\" class=\"date-timepicker1 form-control\" style=\"height: 30px; width: 150px;    padding: 5px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;\">
                                        <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                    </span>
\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>分配员工</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=7 marketing-id=\"1\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>订单期限</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"htm_contract.end_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<input id=\"date-timepicker1\" data-type=\"gj\" data-status=\"time\" gjs=0 sear=\"htm_contract.end_time\" class=\"date-timepicker1 form-control\" style=\"height: 30px; width: 150px;    padding: 5px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;\">
                                        <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                    </span>
\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>合同状态</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width:180px;\" gjs=0 sear=\"htm_contract.status\" data-type=\"gj\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t<option value=\"0\">未激活</option>
\t\t\t\t\t\t\t\t<option value=\"1\">已激活</option>
\t\t\t\t\t\t\t\t<option value=\"2\">已挂起</option>
\t\t\t\t\t\t\t\t<option value=\"3\">已结束</option>
\t\t\t\t\t\t\t\t<option value=\"4\">已作废</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>挂起天数</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input data-type=\"gj\" gjs=0 sear=\" htm_contract.used_time\" type=\"text\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>备注</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"htm_contract.outh_remark\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div style=\"text-align:center;clear:both;padding-top:10px; \">
\t\t\t\t\t\t\t<button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
                                    查询
                                </button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"rest\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t                       重置
\t\t\t\t\t\t\t\t                    </button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"custom_table\">
\t\t\t\t<table id=\"dynamic-table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t<th class=\"center\">
\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
                                    <input type=\"checkbox\" class=\"ace\" onclick=\"checkAll(this.checked)\"/>
                                    <span class=\"lbl\"></span>
                                </label>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t\t<th data-num=\"1\">合同类型</th>
\t\t\t\t\t\t\t<th data-num=\"2\">订单编码</th>
\t\t\t\t\t\t\t<th data-num=\"3\">企业名称</th>
\t\t\t\t\t\t\t<th data-num=\"4\">分配员工</th>
\t\t\t\t\t\t\t<th data-num=\"5\">订单期限</th>
\t\t\t\t\t\t\t<th data-num=\"6\">合同状态</th>
\t\t\t\t\t\t\t<th data-num=\"10\">挂起天数</th>
\t\t\t\t\t\t\t<th data-num=\"7\">修改人</th>
\t\t\t\t\t\t\t<th data-num=\"8\">修改时间</th>
\t\t\t\t\t\t\t<th data-num=\"9\">作废原因</th>
\t\t\t\t\t\t\t<th data-num=\"10\">备注</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<tbody id=\"dynamic-table_data\">

\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t<div align=\"left\" style=\"padd_expenditeruing-left: 15px; float: left; width: 10%;\" id=\"num\"></div>
\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t<div id=\"pageBar\" class=\"pagination\"></div>
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

\t\t<div class=\"row\" id=\"template\" style=\"display:none;\">
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<!-- style=\"width:180px;\" class=\"required\" msg=\"公司名称不能为空\" -->
\t\t\t\t<label>合同类型： </label>
\t\t\t\t<select style=\"width:180px;\">
\t\t\t\t\t<option value=\"\"> --- 请选择 ---</option>
\t\t\t\t\t<option>长期合同</option>
\t\t\t\t\t<option>一次性合同</option>
\t\t\t\t</select>
\t\t\t\t<label>订单编码： </label>
\t\t\t\t<select style=\"width:180px;\" class=\"required\" msg=\"请选择订单编码\" field=\"id\">
\t\t\t\t\t<option value=\"\"> --- 请选择 --- </option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label>分配员工： </label>
\t\t\t\t<select style=\"width:180px;\" class=\"required\" msg=\"请选择分配员工\" field=\"assign_staff\">
\t\t\t\t\t<option value=\"\"> --- 请选择 ---</option>
\t\t\t\t</select>
\t\t\t\t<label>订单期限： </label>
\t\t\t\t<input disabled>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label>合同状态： </label>
\t\t\t\t<select style=\"width:180px;\" class=\"required\" msg=\"请选择合同状态\" field=\"status\">
\t\t\t\t\t<option value=\"\"> --- 请选择 --- </option>
\t\t\t\t\t<option value=\"0\">未激活</option>
\t\t\t\t\t<option value=\"1\">激活</option>
\t\t\t\t</select>
\t\t\t\t<!-- <label style=\"display:none;\" class=\"hangup\">挂起时间： </label>
\t\t\t\t<input style=\"display:none;\" class=\"hangup\" field=\"hang\"> -->
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label>企业名称： </label>
\t\t\t\t<input disabled class=\"_customer\">
\t\t\t\t<!--<label>使用时间： </label>
\t\t\t\t<input disabled>-->
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label style=\"float:left;\"><i class='reqired_label'>*</i>备注： </label>
\t\t\t\t<textarea field=\"outh_remark\" class=\"required\" msg=\"备注不能为空\" style=\"margin-left:5px;width:calc(100% - 80px);risize:none;\">

                </textarea>
\t\t\t</div>
\t\t\t<div style=\"text-align:center;margin-top:15px;\">
\t\t\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
\t\t\t\t<button class=\"sure_button add\">
                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                        保存
                    </button>
\t\t\t</div>
\t\t</div>

\t\t<!-- 合同详情 -->
\t\t<div class=\"row\" id=\"template3\" style=\"display:none;\">
\t\t\t<!-- 长期合同 -->
\t\t\t<div class=\"contractType\" style=\"display:none;\">
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>企业名称: </label>
\t\t\t\t\t<span field=\"khm_customer.name\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<!-- <label>仓位： </label>
                    <span syllable=\"pos_name\"></span> -->
\t\t\t\t\t<label>合同编码： </label>
\t\t\t\t\t<span field=\"htm_contract.contract_num\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>创建人： </label>
\t\t\t\t\t<span field=\"htm_contract.create_by\"></span>
\t\t\t\t\t<label>创建时间： </label>
\t\t\t\t\t<span field=\"htm_contract.create_time\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 维护周期： </label>
\t\t\t\t\t<span field=\"htm_contract.payment_cycle\"></span>
\t\t\t\t\t<label> 订单来源： </label>
\t\t\t\t\t<span field=\"htm_contract.is_source\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 签约时间: </label>
\t\t\t\t\t<span field=\"htm_contract.signed_time\"></span>
\t\t\t\t\t<label> 发票认证： </label>
\t\t\t\t\t<span field=\"htm_contract.is_tax\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 业务员： </label>
\t\t\t\t\t<span syllable=\"market\"></span>
\t\t\t\t\t<label>备注：</label>
\t\t\t\t\t<span field=\"htm_contract.remark\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>服务产品： </label>
\t\t\t\t\t<span syllable=\"product_id\" class=\"task\"></span>
\t\t\t\t\t<label>服务数量： </label>
\t\t\t\t\t<span syllable=\"count\" class=\"task\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>赠送数量： </label>
\t\t\t\t\t<span syllable=\"count_send\" class=\"task\"></span>
\t\t\t\t\t<!-- <label>标准价： </label>
                    <span syllable=\"pricing\" class=\"task\"></span>-->
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>服务单价： </label>
\t\t\t\t\t<span syllable=\"discount\" class=\"task\"></span>
\t\t\t\t\t<label>服务总额： </label>
\t\t\t\t\t<span field=\"htm_contract.discount_total\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>账本费： </label>
\t\t\t\t\t<span field=\"htm_contract.account_book\"></span>
\t\t\t\t\t<!-- <label>收款方式： </label>
                    <span field=\"htm_contract.receivables_way\"></span> -->
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>订单总额： </label>
\t\t\t\t\t<span contract-total field></span>
\t\t\t\t\t<label>收款周期： </label>
\t\t\t\t\t<span field=\"htm_contract.get_cycle\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>开始时间： </label>
\t\t\t\t\t<span syllable=\"start_time\" class=\"task\"></span>
\t\t\t\t\t<label>结束时间： </label>
\t\t\t\t\t<span syllable=\"end_time\" class=\"task\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>审批人： </label>
\t\t\t\t\t<span field=\"htm_contract.auth_id1\" class=\"task\"></span>
\t\t\t\t\t<label>审批时间： </label>
\t\t\t\t\t<span field=\"htm_contract.auth_time1\" class=\"task\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr style=\"height:30px;\">
\t\t\t\t\t\t\t\t<th class=\"center\">服务产品</th>
\t\t\t\t\t\t\t\t<th class=\"center\">月份</th>
\t\t\t\t\t\t\t\t<th class=\"center\">应收时间</th>
\t\t\t\t\t\t\t\t<th class=\"center\">应收金额</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tdead>
\t\t\t\t\t\t\t<tbody id=\"serviceInfo\">
\t\t\t\t\t\t\t\t<!-- <tr style=\"height:30px;\">
                                <td class=\"center\">记账报税</td>
                                <td class=\"center\">账本费</td>
                                <td class=\"center\">201710</td>
                                <td class=\"center\">100</td>
                            </tr>
                            <tr style=\"height:30px;\">
                                <td class=\"center\">记账报税</td>
                                <td class=\"center\">201710-201711</td>
                                <td class=\"center\">201711</td>
                                <td class=\"center\">100</td>
                            </tr> -->
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<!--<div style=\"margin-top:15px;\">
\t\t\t\t\t<label style=\"float:left\">上传图片：</label>
\t\t\t\t\t<div style=\"display:inline-block;margin-left:5px;\" syllable=\"image\">

\t\t\t\t\t</div>
\t\t\t\t\t<span syllable=\"\"></span>
\t\t\t\t</div>-->
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>上传文件：</label>
\t\t\t\t\t<div style=\"display:inline-block;padding-left:5px;width:calc(100% - 75px);\" syllable=\"file\">

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- 一次性合同 -->
\t\t\t<div class=\"contractType\" style=\"display:none;\">
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>公司名称： </label>
\t\t\t\t\t<span field=\"khm_customer.name\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>仓位： </label>
\t\t\t\t\t<span syllable=\"pos_name\"></span>
\t\t\t\t\t<label>合同编码： </label>
\t\t\t\t\t<span field=\"htm_contract.contract_num\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>折后总额： </label>
\t\t\t\t\t<span field=\"htm_contract.discount_total\"></span>
\t\t\t\t\t<label> 订单来源： </label>
\t\t\t\t\t<span field=\"htm_contract.is_source\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 创建人： </label>
\t\t\t\t\t<span field=\"htm_contract.create_by\"></span>
\t\t\t\t\t<label>创建时间：</label>
\t\t\t\t\t<span field=\"htm_contract.create_time\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<!-- <label>收款方式： </label>
                    <span field=\"htm_contract.receivables_way\"></span> -->
\t\t\t\t\t<label> 签约时间： </label>
\t\t\t\t\t<span field=\"htm_contract.signed_time\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 发票认证： </label>
\t\t\t\t\t<span field=\"htm_contract.is_tax\"></span>
\t\t\t\t\t<label>业务员：</label>
\t\t\t\t\t<span syllable=\"market\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>备注：</label>
\t\t\t\t\t<span field=\"htm_contract.remark\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<table class=\"contract_content\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>服务产品</th>
\t\t\t\t\t\t\t\t<th>数量</th>
\t\t\t\t\t\t\t\t<th>标准价</th>
\t\t\t\t\t\t\t\t<th>折后价</th>
\t\t\t\t\t\t\t\t<th>开始时间</th>
\t\t\t\t\t\t\t\t<th>结束时间</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label style=\"float:left\">上传图片：</label>
\t\t\t\t\t<div style=\"display:inline-block;margin-left:5px;\" syllable=\"image\">
\t\t\t\t\t</div>
\t\t\t\t\t<span syllable=\"\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label style=\"float:left;\">上传文件：</label>
\t\t\t\t\t<div style=\"display:inline-block;padding-left:5px;width:calc(100% - 80px);\" syllable=\"file\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- 合同详情 -->
\t\t<div class=\"row\" id=\"template2\" style=\"display:none;\">
\t\t\t<div style=\"margin-top:15px;\" class=\"coordinate\">
\t\t\t\t<!-- style=\"width:180px;\" class=\"required\" msg=\"公司名称不能为空\" -->
\t\t\t\t<label>合同类型： </label>
\t\t\t\t<span field=\"htm_contract.contract_type\"></span>
\t\t\t\t<label>订单编码： </label>
\t\t\t\t<span field=\"htm_contract.contract_code\"></span>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\" class=\"coordinate\" id=\"not_sure\">
\t\t\t\t<!-- style=\"width:180px;\" class=\"required\" msg=\"公司名称不能为空\" -->
\t\t\t\t<label>区域名称： </label>
\t\t\t\t<span syllable=\"area_name\"></span>
\t\t\t\t<label>仓位： </label>
\t\t\t\t<span syllable=\"pos_name\"></span>
\t\t\t</div>
\t\t\t<!--<div style=\"margin-top:15px;\">-->
\t\t\t\t<!--<label>区域名称2： </label>-->
\t\t\t\t<!--<select>-->
\t\t\t\t  <!--<option> = </option>-->
\t\t\t\t<!--</select>-->

\t\t\t\t<!--<span syllable=\"area\"></span>-->
\t\t\t\t<!--<span class=\"del_type\">-->
\t\t\t\t\t<!--<label>仓位： </label>-->
\t\t\t\t\t<!--<span syllable=\"position\"></span>-->
\t\t\t\t<!--</span>-->

\t\t\t<!--</div>-->
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<table style=\"\">
\t\t\t\t\t<tbody class=\"leader_info\">

\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label>合同状态： </label>
\t\t\t\t<span field=\"htm_contract.status\"></span>
\t\t\t\t<span class=\"del_type\">
\t\t\t\t\t<label>作废原因： </label>
\t\t\t\t\t<span field=\"htm_contract.del_type\"></span>
\t\t\t\t</span>

\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<span class=\"hang\">
\t\t\t\t\t<label>挂起天数： </label>
\t\t\t\t\t<span field=\"htm_contract.hang\"></span>
\t\t\t\t</span>
\t\t\t\t<label>订单期限： </label>
\t\t\t\t<span syllable=\"useful\"></span>
\t\t\t\t<!--<label>使用时间： </label>
\t\t\t\t<span syllable=\"usetime\"></span>-->
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label>企业名称： </label>
\t\t\t\t<span field=\"khm_customer.name\"></span>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label>备注： </label>
\t\t\t\t<span field=\"htm_contract.outh_remark\"></span>
\t\t\t</div>
\t\t</div>

\t\t<!-- 合同编辑 -->
\t\t<div class=\"row\" id=\"template1\" style=\"display:none;\">
\t\t\t<div style=\"margin-top:15px;\" class=\"coordinate\">
\t\t\t\t<!-- style=\"width:180px;\" class=\"required\" msg=\"公司名称不能为空\" -->
\t\t\t\t<label>合同类型： </label>
\t\t\t\t<input disabled field=\"htm_contract.contract_type\" type=\"text\" style=\"background: #f5f5f5; border: none;\">
\t\t\t\t<label>订单编码： </label>
\t\t\t\t<input disabled field=\"htm_contract.contract_code\" type=\"text\" style=\"background: #f5f5f5; border: none;\">
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;display: none;\" class=\"coordinate area_position\">
\t\t\t\t<!-- style=\"width:180px;\" class=\"required\" msg=\"公司名称不能为空\" -->
\t\t\t\t<label>区域名称： </label>
\t\t\t\t<select syllable=\"area\" style=\"width: 180px !important;\">
\t\t\t\t\t<option value=\"\">请选择区域</option>
\t\t\t\t</select>
\t\t\t\t<label>仓位： </label>
\t\t\t\t<select syllable=\"position\" style=\"width: 180px !important;\">
\t\t\t\t\t<option value=\"\">请选择仓位</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<table style=\"max-width: 96%\">
\t\t\t\t\t<tbody class=\"leader_info\">

\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label>合同状态： </label>
\t\t\t\t<select style=\"width:180px;\" class=\"required upload\" msg=\"请选择合同状态\" field=\"htm_contract.status\">
\t\t\t\t\t<option value=\"\"> --- 请选择 --- </option>
\t\t\t\t\t<option value=\"1\">已激活</option>
\t\t\t\t\t<option value=\"2\">已挂起</option>
\t\t\t\t\t<option value=\"3\">已结束</option>
\t\t\t\t\t<option value=\"4\">已作废</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"add_reason_div\" style=\"margin-top:15px; display: none;\">
\t\t\t\t<label>作废原因： </label>
\t\t\t\t<select style=\"width: 180px\" field=\"htm_contract.del_type\" class=\"del_type upload cancel-reason select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t<option value=\"0\">请选择</option>
\t\t\t\t</select>
\t\t\t\t<button class=\"btn btn-info btn-sm addReason\">添加</button>
\t\t\t\t<button class=\"btn btn-info btn-sm delReason\">删除</button>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label>企业名称： </label>
\t\t\t\t<input disabled class=\"_customer\" field=\"khm_customer.name\" type=\"text\" style=\"min-width:180px;background: #f5f5f5; border: none;\">
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label style=\"float:left;\">备注： </label>
\t\t\t\t<textarea field=\"htm_contract.outh_remark\" class=\"required upload\" msg=\"备注不能为空\" style=\"margin-left:5px;width:calc(100% - 80px);risize:none;padding:5px;\"></textarea>
\t\t\t</div>
\t\t\t<div id=\"sendMsg_1\" customer_id=\"\" style=\"height: 30px;line-height: 40px\">
\t\t\t\t<label style=\"margin-left:0px;width: 148px !important\">是否发送账期完成短信：</label>
\t\t\t\t<input type=\"radio\" value=\"1\" name=\"is_send_1\">是
\t\t\t\t<input type=\"radio\" value=\"2\" name=\"is_send_1\" checked=\"true\">否
\t\t\t</div>
\t\t\t<div id=\"sendMsg_2\" customer_id=\"\" style=\"height: 30px;line-height: 40px\">
\t\t\t\t<label style=\"margin-left:0px;width: 148px !important\">是否发送合同续签短信：</label>
\t\t\t\t<input type=\"radio\" value=\"1\" name=\"is_send_2\">是
\t\t\t\t<input type=\"radio\" value=\"2\" name=\"is_send_2\" checked=\"true\">否
\t\t\t</div>
\t\t\t<div id=\"sendMsg_3\" customer_id=\"\" style=\"height: 30px;line-height: 40px\">
\t\t\t\t<label style=\"margin-left:0px;width: 148px !important\">是否发送客户解约短信：</label>
\t\t\t\t<input type=\"radio\" value=\"1\" name=\"is_send_3\">是
\t\t\t\t<input type=\"radio\" value=\"2\" name=\"is_send_3\" checked=\"true\">否
\t\t\t</div>
\t\t\t<div style=\"text-align:center;margin-top:15px;\">
\t\t\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
\t\t\t\t<button class=\"sure_button add\">
                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                        保存
                    </button>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"addReason\" style=\"display:none;position: fixed; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: 1050;\">
\t\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd; box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t\t<span style=\"display: inline-block;\">添加作废原因</span>
\t\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float:right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t</div>
\t\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t\t<label> 作废原因： </label>
\t\t\t\t\t<input class=\"required\" style=\"height:28px;padding:5px;\" field=\"name\" msg=\"作废原因不能为空\">
\t\t\t\t\t<!-- <input width=\"200px\" style=\"margin: auto;\" id=\"efile\" /> -->
\t\t\t\t\t<!--<hr>-->
\t\t\t\t</div>
\t\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t\t<button class=\"btn btn-info btn-sm save\">保存</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"export\" style=\"display:none;position: fixed; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: 1050;\">
\t\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t\t            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t\t<span style=\"display: inline-block;\">导入合同</span>
\t\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t</div>
\t\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t\t<input type=\"file\" width=\"200px\" style=\"margin: auto;\" id=\"efile\">
\t\t\t\t\t<!--<hr>-->
\t\t\t\t</div>
\t\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t\t<button id=\"ghItem\" class=\" btn\">合同模板</button>
\t\t\t\t\t<button class=\"btn btn-info  submit\" style=\"padding: 6px; border-radius: 0px;\">保存</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 713
        $this->loadTemplate("admin/mark.html", "admin/contractManagement/contractAuthorization.html", 713)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/contractManagement/contractAuthorization.html", 713)->display($context);
        // line 714
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script>
\tjQuery(function(\$) {
\t\tcs.getNodes([140, 141]);
\t\tcs.dataRang();
\t\tvar order = 'htm_contract.id desc';
\t\tvar pagesize = 10;
\t\tvar filter = 'htm_contract.auth_status1 = 2';
\t\tvar employees = []; //所有员工
\t\tvar shoukstatus=false;
\t\tvar service_product = []; //所有服务产品\t\t\t\t
\t\t
\t\t
\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_contract/grid',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: \"\",
\t\t\t\tlimit: pagesize,
\t\t\t\ttype:2
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '.pageBar'
\t\t\t},
\t\t\tcontentId: \"#datalist\", //默认排序
\t\t\tinitOrder: \"\", //初始化sort
\t\t\tdefaultOrder: order,
\t\t\tparams: [{
\t\t\t\tid: \"#dynamic-table\",
\t\t\t\tfield: [\"\", \"\",\"htm_contract.contract_type\",\"htm_contract.contract_code\", \"khm_customer.name\", \"\", \"\", \"htm_contract.status\",
\t\t\t\t\t\"htm_contract.hang\",\"htm_contract.update_by\",  \"htm_contract.update_time\", \"htm_contract.outh_remark\"]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});
\t\t
\t\t//获取所有员工
\t\tykp.doAjax({
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
\t\t\t\t\tif(data[i]['name']) {
\t\t\t\t\t\temployees[data[i]['id']] = data[i]['name'];
\t\t\t\t\t\t\$('.advandced-search').append(new Option(data[i]['name'], data[i]['id']));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t});

\t\t//获取所有服务产品
\t\tykp.doAjax({
\t\t\turl: '/api/api_product/f7',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tselect: 'ckm_product.id,ckm_product.name,ckm_product.type,ckm_product.price',
\t\t\t\tfilter: 'ckm_product.is_del <> 1'
\t\t\t},
\t\t\tsuccess: function(res) {
\t\t\t\tservice_product = res.data;
\t\t\t}
\t\t});

\t\t\$('#flush').click(function() {
\t\t\tfilter = 'htm_contract.auth_status1 = 2';
\t\t\t\$('[pts=\"0\"]').val('');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetDatalist();
\t\t})

\t\t\$('.auto_renew').click(function() {
\t\t\tgetDatalist(1);
\t\t})

\t\t//导入合同
\t\timportContract();

\t\tfunction importContract() {
\t\t\t\$('.mergeItem').unbind('click').click(function() {
\t\t\t\tvar flag = \$(this).attr('imp');

\t\t\t\tvar file;
\t\t\t\t\$('#export').show();

\t\t\t\t//点击 × 关闭导入弹出层
\t\t\t\t\$('.close_label').unbind('click').click(function() {
\t\t\t\t\t\$(this).parents('#export').fadeOut();
\t\t\t\t\t\$('#efile').after(\$('#efile').clone().val(\"\"));
\t\t\t\t\t\$('#efile').remove();
\t\t\t\t})

\t\t\t\t//切换文件
\t\t\t\t\$('#efile').unbind('change').change(function() {
\t\t\t\t\tfile = this.files[0];
\t\t\t\t})

\t\t\t\tvar mUrl = flag == '0' ? ykp.api_url + \"/resource/excel_templete/contract-one.xlsx\" : ykp.api_url + '/resource/excel_templete/contract-long.xlsx';
\t\t\t\tvar url = flag == '0' ? ykp.api_url + \"/api/api_contract/one_upload_batch\" : ykp.api_url + \"/api/api_contract/long_upload_batch\";
\t\t\t\t//导获取合同模板

\t\t\t\t\$('#ghItem').unbind('click').click(function() {
\t\t\t\t\twindow.open(mUrl);
\t\t\t\t})

\t\t\t\t//导入合同数据
\t\t\t\t\$('.submit').unbind('click').click(function() {
\t\t\t\t\tif(file == undefined) {
\t\t\t\t\t\tykp.prompt(\"请添加数据再上传\");
\t\t\t\t\t}

\t\t\t\t\tvar fd = new FormData();
\t\t\t\t\tfd.append('contract', file);
\t\t\t\t\tfd.append('login_token', ykp.getCookie('login_token'));
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: url,
\t\t\t\t\t\ttype: \"post\",
\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\tdata: fd,
\t\t\t\t\t\tcache: false,
\t\t\t\t\t\tcontentType: false,
\t\t\t\t\t\tprocessData: false,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tykp.prompt(\"导入需要时间 请耐心等待\");
\t\t\t\t\t\t\tsetTimeout(function(){
\t\t\t\t\t\t\t\t\t\tif(res.data) {
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tykp.prompt(\"上传信息有误1\");
\t\t\t\t\t\t\t\t\$('#efile').after(\$('#efile').clone().val(\"\"));
\t\t\t\t\t\t\t\t\$('.label_popup').hide();
\t\t\t\t\t\t\t\t\$('#efile').remove();
\t\t\t\t\t\t\t\tlayui.use('layer',function(){
\t\t\t\t\t\t\t\t\tlayui.layer.confirm('问题数据不能导入，是否下载查看', function(index){
                                        layer.closeAll();
\t\t\t\t\t\t\t\t        window.open(res.data);

\t\t\t\t\t\t\t\t    });
\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tykp.prompt(\"上传成功\");
\t\t\t\t\t\t\t\t\$('#efile').after(\$('#efile').clone().val(\"\"));
\t\t\t\t\t\t\t\t\$('#efile').remove();
\t\t\t\t\t\t\t\t\$('#export').hide();
\t\t\t\t\t\t\t\tgetDatalist();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t},3000)
\t\t\t\t\t

\t\t\t\t\t\t},
\t\t\t\t\t\terror: function() {
\t\t\t\t\t\t\t\$('#export').hide();
\t\t\t\t\t\t\tykp.prompt(\"上传出错了...\");
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t})
\t\t\t});
\t\t}

\t\t//添加合同授权
\t\t// \$('#addItem').click(function() {
\t\t// \tshowMark('#template');
\t\t// \t\$('#templateCon .title').html('添加合同授权');

\t\t// \t\$('#templateCon textarea').empty(); //清空文本域

\t\t// \thangup();

\t\t// \tchangetime();

\t\t// \tchangedata();

\t\t// \tconstractMsg();

\t\t// \temployeeMsg();

\t\t// \tcompanyMsg();

\t\t// \t\$('#templateCon .add').click(function() {
\t\t// \t\tif(!cs.popValidate()) {
\t\t// \t\t\treturn;
\t\t// \t\t}
\t\t// \t\tvar postdata = {};
\t\t// \t\t\$('#templateCon').find('input[field],select[field],textarea[field]').not(':hidden').each(function(i, e) {
\t\t// \t\t\tif(i == 1) {
\t\t// \t\t\t\tpostdata[\$(this).attr('field') + '_id'] = \$(this).val();
\t\t// \t\t\t\tpostdata[\$(this).attr('field') + '_name'] = \$(this).find('option:selected').text().trim();
\t\t// \t\t\t} else {
\t\t// \t\t\t\tpostdata[\$(this).attr('field')] = \$(this).val();
\t\t// \t\t\t}
\t\t// \t\t});
\t\t// \t\tykp.doAjax({
\t\t// \t\t\turl: '/api/api_contract/edit',
\t\t// \t\t\tmethod: 'post',
\t\t// \t\t\tdata: postdata,
\t\t// \t\t\tsuccess: function(res) {
\t\t// \t\t\t\tcs.close();

\t\t// \t\t\t\tgetDatalist();
\t\t// \t\t\t}
\t\t// \t\t});
\t\t// \t});
\t\t// });

\t\t//所有公司 name , id
\t\t// function companyMsg() {
\t\t// \tykp.doAjax({
\t\t// \t\turl: '/api/api_customer/f7',
\t\t// \t\tmethod: 'post',
\t\t// \t\tdata: {
\t\t// \t\t\tselect: 'khm_customer.name,khm_customer.id'
\t\t// \t\t},
\t\t// \t\tsuccess: function(res) {
\t\t// \t\t\tvar data = res.data;
\t\t// \t\t\tfor(var i in data) {
\t\t// \t\t\t\t\$('#templateCon select').eq(4).append(new Option(data[i]['name'], data[i]['id']));
\t\t// \t\t\t}
\t\t// \t\t}
\t\t// \t});
\t\t// }

\t\t//所有员工 name , id
\t\t// function employeeMsg(val) {
\t\t// \tykp.doAjax({
\t\t// \t\turl: '/api/api_employees/f7',
\t\t// \t\tmethod: 'post',
\t\t// \t\tdata: {
\t\t// \t\t\tselect: 'bmm_employees.name,bmm_employees.id'
\t\t// \t\t},
\t\t// \t\tsuccess: function(res) {
\t\t// \t\t\tvar data = res.data;
\t\t// \t\t\tfor(var i in data) {
\t\t// \t\t\t\t\$('#templateCon select[field=\"assign_staff\"]').append(\$(new Option(data[i]['name'], data[i]['id'])).attr('_name', data[i]['name']));
\t\t// \t\t\t}
\t\t// \t\t\tif(val) {
\t\t// \t\t\t\t\$('#templateCon select[field=\"assign_staff\"]').find('option[_name=\"' + val + '\"]').attr('selected', true);
\t\t// \t\t\t}
\t\t// \t\t}
\t\t// \t});
\t\t// }

\t\t//未授权合同 code , starttime , endtime
\t\t// function constractMsg(type) {
\t\t// \t\$('#templateCon select').eq(1).find('option').not(':first').remove();
\t\t// \tykp.doAjax({
\t\t// \t\turl: '/api/api_contract/f7',
\t\t// \t\tmethod: 'post',
\t\t// \t\tdata: {
\t\t// \t\t\tselect: 'htm_contract.id,htm_contract.contract_code,htm_contract.start_time,htm_contract.end_time,khm_customer.name',
\t\t// \t\t\tfilter: 'htm_contract.assign_staff_id = 0 ' + (type ? ('and htm_contract.contract_type = ' + type) : '')
\t\t// \t\t},
\t\t// \t\tsuccess: function(res) {
\t\t// \t\t\tvar data = res.data;
\t\t// \t\t\tvar time = '';
\t\t// \t\t\tfor(var i in data) {
\t\t// \t\t\t\ttime = data[i]['start_time'] + ',' + data[i]['end_time'];
\t\t// \t\t\t\t\$('#templateCon select').eq(1).append(\$(new Option(data[i]['contract_code'], data[i]['id'])).data('time', time).data('name', data[i]['name']));
\t\t// \t\t\t}
\t\t// \t\t}
\t\t// \t});
\t\t// }

\t\t//弹出层 切换合同类型 订单编码中的数据相应改变
\t\t// function changedata() {
\t\t// \t\$('#templateCon select').eq(0).change(function() {
\t\t// \t\tconstractMsg(this.selectedIndex);
\t\t// \t});
\t\t// }

\t\t//弹出层 切换订单编码 订单期限、使用时间、关联客户 change
\t\t// function changetime() {
\t\t// \t\$('#templateCon select').eq(1).change(function() {
\t\t// \t\tif(this.selectedIndex != 0) {
\t\t// \t\t\tvar time = \$(this).find('option:selected').data('time').split(',');
\t\t// \t\t\ttime = cs.getNowTime(time[0]) + ' ~ ' + cs.getNowTime(time[1]);
\t\t// \t\t\t\$('#templateCon input:disabled').not('._customer').val(time);
\t\t// \t\t\t\$('#templateCon ._customer').val(\$(this).find('option:selected').data('name'));
\t\t// \t\t} else {
\t\t// \t\t\t\$('#templateCon input:disabled').val('');
\t\t// \t\t}
\t\t// \t});
\t\t// }

\t\t//弹出层 挂起时间显示 || 隐藏
\t\t// function hangup() {
\t\t// \tif(\$('#templateCon select[field=\"htm_contract.status\"]')[0].selectedIndex == 3) {
\t\t// \t\t\$('#templateCon .hangup').show();
\t\t// \t}
\t\t// \t\$('#templateCon select[field=\"htm_contract.status\"]').change(function() {
\t\t// \t\tif(this.selectedIndex == 3) {
\t\t// \t\t\t\$('#templateCon .hangup').show();
\t\t// \t\t} else {
\t\t// \t\t\t\$('#templateCon .hangup').hide();
\t\t// \t\t}
\t\t// \t});
\t\t// }

\t\t//切换每页显示的条目数
\t\t\$('#changePageNum').change(function() {
\t\t\tpagesize = \$(this).val();
\t\t\tykp.setCookie('page_size',pagesize);
\t\t\tgetDatalist();
\t\t})

\t\t//自定义列表
\t\tcs.custorm_check('#dynamic-table', '#dynamic-table_data', true);

\t\t//高级搜索列表显示与隐藏
\t\t\$('.in').click(function() {
\t\t\tif(\$('#heightsearch').hasClass('active')) {
\t\t\t\t\$('#heightsearch').removeClass('active').css('z-index', '');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t}
\t\t});
\t\t\$('#heightsearch').click(function() {
\t\t\tif(\$(this).hasClass('active')) {
\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\$(this).removeClass('active').css('z-index', '');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t} else {
\t\t\t\t\$('.in').addClass('modal-backdrop');
\t\t\t\t\$(\"#heightsearch1\").slideDown();
\t\t\t\t\$(this).attr('class', 'btn btn-info btn-sm active').css('z-index', '1041');
\t\t\t\tcs.rest(false, '#heightsearch1');
\t\t\t\t// 高级搜索成立日期
\t\t\t\tcs.timeplug();
\t\t\t}
\t\t})

\t\t//高级搜索
\t\tfunction advancedSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_contract/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: pagesize,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}

\t\t\tcs.hSearch('#search1', data, 'filter', false, function(res, _filter) {
\t\t\t\tfilter = _filter;
\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\$(\"#heightsearch\").removeClass('active').css('z-index', '');
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#dynamic-table_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t} else {
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t}, 'htm_contract.auth_status1 = 2')
\t\t}

\t\t//普通搜索
\t\tfunction generalSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_contract/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: pagesize,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}

\t\t\tcs.doSearch('#search', data, 'filter', false, function(res, _filter) {
\t\t\t\tfilter = _filter;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#dynamic-table_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t} else {
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t}, 'htm_contract.auth_status1 = 2');
\t\t}

\t\t//获取合同列表数据
\t\tgetDatalist(0,1);

\t\tfunction getDatalist(status, isInit,_page) {
            _page = _page ? _page :\"\";
\t\t\tif(isInit == 1){
\t\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\t\tykp.setCookie(\"where\", \"\");
\t\t\t}
\t\t\tgeneralSearch();
\t\t\tadvancedSearch();
\t\t\tvar data = {
                page: _page,
\t\t\t\tlimit: pagesize,
\t\t\t\torder: order,
\t\t\t\tfilter: filter
\t\t\t}
\t\t\tif(status) {
\t\t\t\tdata['filter'] = filter + ' and htm_contract.ht_status = 1';
\t\t\t}
\t\t\tykp.list({
\t\t\t\turl: '/api/api_contract/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: data,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#dynamic-table_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//数据处理
\t\tfunction addList(res) {
\t\t\tvar data = res.data.items;
\t\t\t//td 显示 或 隐藏
\t\t\tvar ths = \$('.thColor th');
\t\t\tvar styles = [];

\t\t\t// var nodes = ykp.getCookie('nodes').split(',');
\t\t\t// console.log(\$.inArray(36,nodes));
\t\t\t// console.log(\$.inArray(37,nodes));

\t\t\tfor(i = 0; i < ths.length; i++) {
\t\t\t\tstyles.push(ths.eq(i).css('display'));
\t\t\t}

            var html = [];
\t\t\tvar task_detail = {}; //任务详情
\t\t\tvar cStatus = ['未激活', '已激活', '已挂起', '已结束', '已作废']; //合同状态
\t\t\tvar approve_statu = ['审批中', '审批失败', '审批成功']; //审批状态
\t\t\tvar staff = []; //分配员工
\t\t\tvar staff_detail = []; //分配员工详情
\t\t\tvar usetime = ''; //订单期限
\t\t\t//var utilityTime = '';//使用时间
\t\t\tvar hang = ''; //挂起天数
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\tfor(i = 0; i < data.length; i++) {
\t\t\t\ttask_detail['product'] = [];
\t\t\t\ttask = data[i]['task'];
\t\t\t\tfor(var k in task) {
\t\t\t\t\tif(data[i]['htm_contract.contract_type'] == 1) {
\t\t\t\t\t\tstaff = task[k]['staff'];
\t\t\t\t\t\tfor(var z in staff) {
\t\t\t\t\t\t\tstaff_detail.push(staff[z]['process'] + '：' + (staff[z]['user'] ? staff[z]['user']['name'] : ''));
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tif(data[i]['htm_contract.contract_type'] == 2) {
\t\t\t\t\t\tstaff = task[k]['staff'][0];
\t\t\t\t\t\tif(staff) {
\t\t\t\t\t\t\tstaff_detail.push(task[k]['productName'] + '：' + (staff['user'] ? staff['user']['name'] : ''));
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tif(k == 0) {
\t\t\t\t\t\ttask_detail['start_time'] = task[k]['start_time'];
\t\t\t\t\t\ttask_detail['end_time'] = task[k]['end_time'];
\t\t\t\t\t}
\t\t\t\t\tif(k != 0) {
\t\t\t\t\t\ttask_detail['start_time'] = task_detail['start_time'] >= task[k]['start_time'] ? task[k]['start_time'] : task_detail['start_time'];
\t\t\t\t\t\ttask_detail['end_time'] = task_detail['end_time'] > task[k]['end_time'] ? task_detail['end_time'] : task[k]['end_time'];
\t\t\t\t\t}

\t\t\t\t}
\t\t\t\t/**
\t\t\t\t * 1、订单已作废不显示续签
\t\t\t\t * 2、当前时间在订单结束时间90天以内才可续签
\t\t\t\t * 3、续签过不能续签
\t\t\t\t */
\t\t\t\tvar enterStyle = data[i]['htm_contract.status'] != 3 ? ( (data[i]['htm_contract.end_time']  - new Date()*1000) < 60*60*24*90 ? (data[i]['htm_contract.is_renew'] == 1 ? 'none' : '') : 'none') : \"none\";
\t\t\t\tvar product = data[i]['task'][0]['flow'].replace('[', '').replace(']', '');
\t\t\t\thang = data[i]['htm_contract.hang'] ? (data[i]['htm_contract.hang'] * 24 * 60 * 60) : 0;
\t\t\t\tusetime = data[i]['htm_contract.start_time'] != '0' ? (cs.getNowTime(data[i]['htm_contract.start_time']) + ' ~ ' + cs.getNowTime(data[i]['htm_contract.end_time'])) : '';
\t\t\t\t/*utilityTime = data[i]['htm_contract.start_time'] != '0' ? (cs.getNowTime(eval(data[i]['htm_contract.start_time'] + '+' + hang)) + ' ~ ' + cs.getNowTime(eval(data[i]['htm_contract.end_time'] + '+' + hang))) : '';*/

\t\t\t\tvar edit_statu = cs.getNodes([143], true);

\t\t\t\thtml +=
\t\t\t\t\t'<tr data-id=\"' + data[i]['htm_contract.id'] + '\" data-account_book=\"'+data[i][\"htm_contract.account_book\"]+'\" data-discount_total=\"'+data[i][\"htm_contract.discount_total\"]+'\" data-type=\"' + data[i]['htm_contract.contract_type'] + '\" customer_id=\"' + data[i]['khm_customer.id'] + '\"  start-time=\"' + data[i]['htm_contract.start_time'] + '\" end-time=\"' + data[i]['htm_contract.end_time'] + '\" flow =\"' + product + '\">' +
\t\t\t\t\t'<td style=\"display: ' + styles[0] + '\" class=\"center\">' +
\t\t\t\t\t'<label class=\"pos-rel\">' +
\t\t\t\t\t'<input type=\"checkbox\" name=\"check\" class=\"ace\"/>' +
\t\t\t\t\t'<span class=\"lbl\"></span>' +
\t\t\t\t\t'</label>' +
\t\t\t\t\t'</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[1] + '\">' +
\t\t\t\t\t'<label class=\"pos-rel\">' +
\t\t\t\t\t'<a> <span style=\"cursor: pointer\" title=\"详情\" class=\"btOrange contractDetail\"><i class=\"fa fa-info\"></i></span></a> ' +
\t\t\t\t\t' <a contentAuthority=\"143\" style=\"display:' + (edit_statu ? (data[i]['htm_contract.status'] == '4' ? 'none' : 'inline') : 'none') + ';\"> <span style=\"cursor: pointer;\" title=\"编辑\" class=\"lbl itemadit btBlue\" pos-id=\"' + data[i]['position']['pos_id'] + '\"><i class=\"fa fa-pencil-square-o\"></i></span></a> ' +
//\t\t\t\t\t' <a style=\"display:' + enterStyle + '\"> <span style=\"cursor: pointer;\" class=\"lbl enter  btnBlue\" contentAuthority=\"143\">续签</span></a>' +
\t\t\t\t\t'</label>' +
\t\t\t\t\t'</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[2] + '\" data-num=\"1\">' + (data[i]['htm_contract.contract_type'] == 1 ? '长期合同' : '一次性合同') + '</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[3] + '\" data-num=\"2\"><a href=\"javascript:;\" style=\" color: #337ab7;\" class=\"contract_detail pos-rel\" title=\"合同详情\">' + data[i]['htm_contract.contract_code'] + '</a></td>' +
\t\t\t\t\t'<td data-cid=\"' + data[i]['htm_contract.customer_id'] + '\" style=\"display: ' + styles[4] + '\" data-num=\"3\">' + '<a href=\"#\" class=\"customerDetail pos-rel\">' + data[i]['khm_customer.name'] + '</a>' + '<label class=\"pos-rel\"> <i class=\"iconBnt fa fa-info-circle\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"' + cs.getRemark(data[i]['Remark']) + '\" ></i></label> ' +
\t\t\t\t\t'<td style=\"display: ' + styles[5] + ';white-space: nowrap !important;\" data-num=\"4\" title=\"' + staff_detail.join('，') + '\">' + staff_detail.join('，') + '</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[6] + '\" data-num=\"5\">' + usetime + '</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[7] + '\" status=\"' + (cStatus[data[i]['htm_contract.status']]) + '\" data-num=\"6\">' + (cStatus[data[i]['htm_contract.status']]) + '</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[8] + '\" data-num=\"10\">' + data[i]['htm_contract.hang'] + '</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[9] + '\" data-num=\"7\">' + (employees[data[i]['htm_contract.update_by']] || \"无\") + '</td>' +
\t\t\t\t\t/*'<td style=\"display: ' + styles[9] + '\" data-num=\"7\">' + utilityTime + '</td>' +*/
\t\t\t\t\t'<td style=\"display: ' + styles[10] + '\" data-num=\"8\">' + (data[i]['htm_contract.update_time'] != '0' ? cs.getNowTime(data[i]['htm_contract.update_time'],true) : '') + '</td>' +
\t\t\t\t\t'<label class=\"pos-rel\"><i class=\"iconBnt fa fa-info-circle\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"' + cs.getRemark(data[i]['Remark']) + '\" ></i></label>' +
                    '<td style=\"display: ' + styles[11] + '\" data-num=\"9\">' +(data[i]['htm_contract_type.name'] ? data[i]['htm_contract_type.name'] :\"\") + '</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[12] + '\" data-num=\"10\">' + data[i]['htm_contract.outh_remark'] + '</td>' +
\t\t\t\t\t'</tr>';

\t\t\t\tstaff_id = [];
\t\t\t\tstaff = [];
\t\t\t\ttask_detail = {};
\t\t\t\tstaff_detail = [];
\t\t\t}

\t\t\t\$('#dynamic-table_data').html(html);
\t\t\tcustom.showReamrk();

\t\t\t\$(\"[data-rel='tooltip']\").tooltip();

\t\t\t//编辑 & 作废事件绑定
\t\t\teditOrCancelOrApprove(data);

\t\t\t//合同详情
\t\t\tcontentDetail();

\t\t\tenterXQ(); //续签确认

\t\t\t//派单详情
\t\t\tcontractDetail();

\t\t\tcustom.get_custom_info();

\t\t\t//全选函数
\t\t\tcheckAll();
\t\t}

\t\tfunction enterXQ() {
\t\t\t\$('.enter').click(function() {
\t\t\t\tvar contract_id = \$(this).parents('tr').attr('data-id');
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_contract/change_ht_status',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tcontract_id: contract_id,
\t\t\t\t\t\tht_status: 2
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tykp.prompt('续签合同确认成功！');
\t\t\t\t\t\tgetDatalist();
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})
\t\t}

\t\t//详情
\t\tfunction contractDetail() {
\t\t\t\$('.contractDetail').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tvar type = \$(this).parents('tr').attr('data-type');
\t\t\t\tshowMark('#template2');
\t\t\t\t\$('#showBox .title').text('派单详情');
\t\t\t\tvar delType = {};
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_contract/get_del_type',
\t\t\t\t\tmethod: 'get',
\t\t\t\t\tdata: {},
\t\t\t\t\tasync:false,
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\t\tdelType[data[i]['id']] = data[i]['name']
\t\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_contract/contract_info',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tid: id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\tvar task = data['task'];
\t\t\t\t\t\tvar statu = ['未激活', '已激活', '已挂起', '已结束', '已作废']; //合同状态
\t\t\t\t\t\tvar usetime = ''; //订单期限
\t\t\t\t\t\t//var utilityTime = '';//使用时间
\t\t\t\t\t\tvar task_detail = {}; //任务详情
\t\t\t\t\t\tvar hang = ''; //挂起天数

\t\t\t\t\t\tfor(var k in task) {

\t\t\t\t\t\t\tif(k == 0) {
\t\t\t\t\t\t\t\ttask_detail['start_time'] = task[k]['start_time'];
\t\t\t\t\t\t\t\ttask_detail['end_time'] = task[k]['end_time'];
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif(k != 0) {
\t\t\t\t\t\t\t\ttask_detail['start_time'] = task_detail['start_time'] >= task[k]['start_time'] ? task[k]['start_time'] : task_detail['start_time'];
\t\t\t\t\t\t\t\ttask_detail['end_time'] = task_detail['end_time'] > task[k]['end_time'] ? task_detail['end_time'] : task[k]['end_time'];
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\thang = data['htm_contract.hang'] ? (data['htm_contract.hang'] * 24 * 60 * 60) : 0;
\t\t\t\t\t\tusetime = data['htm_contract.start_time'] != '0' ? (cs.getNowTime(data['htm_contract.start_time']) + ' ~ ' + cs.getNowTime(data['htm_contract.end_time'])) : '';
\t\t\t\t\t\t/!*utilityTime = data['htm_contract.start_time'] != '0' ? (cs.getNowTime(eval(data['htm_contract.start_time'] + '+' + hang)) + ' ~ ' + cs.getNowTime(eval(data['htm_contract.end_time'] + '+' + hang))) : ''\t;*!/
\t\t\t\t\t\t\$('#templateCon [field]').each(function(i, e) {
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'htm_contract.contract_type') {
\t\t\t\t\t\t\t\t\$(this).text(data[\$(this).attr('field')] == '1' ? '长期合同' : '一次性合同');
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'htm_contract.status') {
\t\t\t\t\t\t\t\t\$(this).text(statu[data[\$(this).attr('field')]]);
\t\t\t\t\t\t\t\tif(data[\$(this).attr('field')] == 2){
\t\t\t\t\t\t\t\t\t\$(\"#templateCon .hang\").show();
\t\t\t\t\t\t\t\t\t\$(\"#templateCon .del_type\").hide();
\t\t\t\t\t\t\t\t}else if(data[\$(this).attr('field')] == 4){
\t\t\t\t\t\t\t\t\t\$(\"#templateCon .hang\").hide();
\t\t\t\t\t\t\t\t\t\$(\"#templateCon .del_type\").show();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'htm_contract.del_type') {
\t\t\t\t\t\t\t\t\$(this).text(delType[data[\$(this).attr('field')]]);
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\$(this).text(data[\$(this).attr('field')]);
\t\t\t\t\t\t});

\t\t\t\t\t\t\$('#templateCon [syllable=\"useful\"]').text(usetime);
\t\t\t\t\t\tif(data['htm_contract.contract_type'] == 1){
\t\t\t\t\t\t\t\$('#templateCon [syllable=\"pos_name\"]').text(data['pos_name']);
\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\turl: '/api/api_customer/get_ckm_position_list',
\t\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\t\tasync: false,
\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\tid: data['pos_id']
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\t\$('#templateCon [syllable=\"area_name\"]').text(res.data.city);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}else {
\t\t\t\t\t\t\t\$('#not_sure').remove();
\t\t\t\t\t\t\t\$('#not_sure').hide();
\t\t\t\t\t\t}

\t\t\t\t\t\t//\$('#templateCon [syllable=\"usetime\"]').text(utilityTime);
\t\t\t\t\t\tif(data['htm_contract.contract_type'] == 1) {
\t\t\t\t\t\t\tvar service_info = data['task'][0]['staff'];
\t\t\t\t\t\t\tfor(var i in service_info) {
\t\t\t\t\t\t\t\thtml = \$(
\t\t\t\t\t\t\t\t\t`<tr>
\t\t\t\t\t\t\t\t\t\t<td style=\"width:15%;width:60px;\">
\t\t\t\t\t\t\t\t\t\t\t<label>\${service_info[i]['process']}：</label>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td style=\"width:39%; padding-left: 4px;\"></td>
\t\t\t\t\t\t\t\t\t\t<td style=\"width:10px;\"><label style=\"text-align:left;width:62px;\">任务等级：</label></td>
\t\t\t\t\t\t\t\t\t\t<td>\${service_info[i]['lv']}</td>
\t\t\t\t\t\t\t\t\t</tr>`
\t\t\t\t\t\t\t\t);

\t\t\t\t\t\t\t\tif(service_info[i]['staff_id'] != '0') {
\t\t\t\t\t\t\t\t\thtml.find('td').eq(1).text(employees[service_info[i]['staff_id']]);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif(service_info[i]['staff_id'] == '0') {
\t\t\t\t\t\t\t\t\thtml.find('td').eq(1).text('空');
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\$('#templateCon .leader_info').append(html);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\tif(data['htm_contract.contract_type'] == 2) {
\t\t\t\t\t\t\tvar task = data['task'];
\t\t\t\t\t\t\tfor(var i in task) {
\t\t\t\t\t\t\t\thtml = \$(
\t\t\t\t\t\t\t\t\t`<tr>
\t\t\t\t\t\t\t\t\t\t<td style=\"width:50%;\">\${task[i]['productName']}</td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t</tr>`
\t\t\t\t\t\t\t\t);

\t\t\t\t\t\t\t\tif(task[i]['staff'].length > 0) {
\t\t\t\t\t\t\t\t\tif(task[i]['staff'][0]['staff_id'] != '0') {
\t\t\t\t\t\t\t\t\t\thtml.find('td').eq(1).text(employees[task[i]['staff'][0]['staff_id']]);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tif(task[i]['staff'][0]['staff_id'] == '0') {
\t\t\t\t\t\t\t\t\t\thtml.find('td').eq(1).text('空');
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\$('#templateCon .leader_info').append(html);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t})
\t\t\t});
\t\t}

\t\t//查看合同详情
\t\tfunction contentDetail() {
\t\t\t\$('.contract_detail').unbind('click').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tvar type = \$(this).parents('tr').attr('data-type') - 1;
\t\t\t\tshowMark('#template3');
\t\t\t\t\$('#showBox .title').text('合同详情');

\t\t\t\t\$('#templateCon .contractType').eq(type).show();

\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_contract/contract_info',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tid: id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\taddDetailData(res, type);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t}

\t\t//添加详情数据
\t\tfunction addDetailData(res, type) {
\t\t\tvar data = res.data;
\t\t\tvar market = data['market']; //业务员
\t\t\tvar image = data['HT_image']; //图片
\t\t\tvar file = data['HT_file']; //文件
\t\t\tvar task = data['task']; //服务产品
\t\t\tvar cycle = {
\t\t\t\t'1': '每月',
\t\t\t\t'3': '季度',
\t\t\t\t'6': '半年',
\t\t\t\t'12': '每年'
\t\t\t}; //维护周期
\t\t\tvar salesman_id = []; //业务员员id
\t\t\tvar salesman = []; //业务员
\t\t\t// var payment = ['','现金','支付宝','微信','银行卡'];//收款方式
\t\t\tvar field = '';

\t\t\t\$('#templateCon .contractType').eq(type).find('[field]').each(function(i, e) {
\t\t\t\tif(\$(this).attr('field') == 'htm_contract.signed_time' || \$(this).attr('field') == 'htm_contract.create_time' ||  \$(this).attr('field') == 'htm_contract.auth_time1') {
\t\t\t\t\t\$(this).text(cs.getNowTime(data[\$(this).attr('field')],true));
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\tif(\$(this).attr('field') == 'htm_contract.is_source') {
\t\t\t\t\t\$(this).text(data[\$(this).attr('field')] == '1' ? '线上' : '线下');
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\tif(\$(this).attr('field') == 'htm_contract.create_by') {
\t\t\t\t\t\$(this).text(employees[data[\$(this).attr('field')]]);
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\tif(\$(this).attr('field') == 'htm_contract.is_tax') {
\t\t\t\t\t\$(this).text(data[\$(this).attr('field')] == '0' ? '否' : '是');
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\t// if(\$(this).attr('field') == 'htm_contract.payment_cycle'){
\t\t\t\t//     \$(this).text(cycle[data[\$(this).attr('field')]]);
\t\t\t\t//     return true;
\t\t\t\t// }
\t\t\t\tif(\$(this).attr('field') == 'htm_contract.get_cycle') {
\t\t\t\t\t\$(this).text(data[\$(this).attr('field')] + '个月');
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\tif(\$(this).attr('field') == 'htm_contract.payment_cycle') {
\t\t\t\t\t\$(this).text(cycle[data[\$(this).attr('field')]]);
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\tif(\$(this).attr('field') == 'htm_contract.receivables_way') {
\t\t\t\t\t\$(this).text(payment[data[\$(this).attr('field')]]);
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\t\$(this).text(data[\$(this).attr('field')]);
\t\t\t});

\t\t\t\$('#templateCon [contract-total]').text(eval(data['htm_contract.account_book'] + '+' + data['htm_contract.discount_total']));

\t\t\t//仓位
\t\t\t\$('#templateCon [syllable=\"pos_name\"]').text(data['position']['pos_name']);

\t\t\t//业务员
\t\t\tvar emps = [];
\t\t\tfor(var i in market) {
\t\t\t\temps.push(market[i]['info']['name']);
\t\t\t}
\t\t\t\$('#templateCon [syllable=\"market\"]').text(emps.join(','));

\t\t\t//图片
\t\t\tvar html = [];
\t\t\tfor(var i in image) {
\t\t\t\thtml.push(
\t\t\t\t\t`<img src=\"\${image[i]['url']}\" style=\"width:60px;height:60px;\"/>`
\t\t\t\t);
\t\t\t}
\t\t\t\$('#templateCon [syllable=\"image\"]').html(html.join(''));

\t\t\t//文件
\t\t\thtml = [];
\t\t\tfor(var i in file) {
\t\t\t\thtml.push(
\t\t\t\t\t`<label class=\"btn btn-info btn-sm\" style=\"margin-bottom:5px;width:initial;\">
                        \${file[i]['name']}
                    </label>`
\t\t\t\t);
\t\t\t}
\t\t\t\$('#templateCon [syllable=\"file\"]').html(html.join(''));

\t\t\t//如果是查看长期合同详情，根据服务产品，开始日期，数量，赠送月份，周期，签约时间
\t\t\t//折后价，账本费生成相应table
\t\t\tif(type == 0) {
\t\t\t\tgenerateTable(data['htm_contract.get_cycle'], data['htm_contract.account_book'], task[0], data['htm_contract.signed_time']);
\t\t\t}

\t\t\t//服务产品信息
\t\t\tvar services = {}; //所有服务产品
\t\t\tfor(var i in service_product) {
\t\t\t\tservices[parseInt(service_product[i]['id']) + ''] = service_product[i]['name'];
\t\t\t}
\t\t\t//长期合同
\t\t\tif(type == 0) {
\t\t\t\t\$('#templateCon .task').each(function(i, e) {
\t\t\t\t\tif(\$(this).attr('syllable') == 'start_time' || \$(this).attr('syllable') == 'end_time') {
\t\t\t\t\t\t\$(this).text(cs.getNowTime(task[0][\$(this).attr('syllable')]));
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr('syllable') == 'product_id') {
\t\t\t\t\t\t\$(this).text(services[task[0][\$(this).attr('syllable')]]);
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\t\$(this).text(task[0][\$(this).attr('syllable')]);
\t\t\t\t});
\t\t\t}
\t\t\t// 一次性合同
\t\t\tif(type == 1) {
\t\t\t\thtml = [];
\t\t\t\tfor(var i in task) {
\t\t\t\t\t/*console.log(task[i]);*/
\t\t\t\t\thtml.push(
\t\t\t\t\t\t`<tr>
                            <td>\${task[i]['productName']}</td>
                            <td>\${task[i]['count']}</td>
                            <td>\${task[i]['pricing']}</td>
                            <td>\${task[i]['discount']}</td>
                            <td>\${cs.getNowTime(task[i]['start_time'])}</td>
                            <td>\${cs.getNowTime(task[i]['end_time'])}</td>
                        </tr>`
\t\t\t\t\t);
\t\t\t\t}
\t\t\t\t\$('#templateCon .contract_content tbody').html(html.join(''));
\t\t\t}
\t\t}

\t\t//添加详情table表数据
\t\t//period 周期，account_book 账本费，product 产品信息，signed_time 签约时间
\t\tfunction generateTable(period, account_book, product, signed_time) {
\t\t\t//产品名称
\t\t\t// console.log(product);
\t\t\tvar product_id = product['product_id'];
\t\t\tvar product_name = product['productName'];
\t\t\t// for(var i in service_product){
\t\t\t//     if(parseInt(service_product[i]['id']) == product_id){
\t\t\t//         product_name = service_product[i]['name'];
\t\t\t//         break;
\t\t\t//     }
\t\t\t// }

\t\t\tvar html = [];
\t\t\tvar account_book = parseFloat(account_book);
\t\t\thtml.push(
\t\t\t\t`<tr>
                    <td class=\"center\">\${product_name}(账本费)</td>
                    <td class=\"center\"></td>
                    <td class=\"center\">\${new Date(signed_time * 1000).toLocaleDateString().replace(/\\//g,'-')}</td>
                    <td class=\"center\">\${account_book.toFixed(2)}</td>
                </tr>`
\t\t\t);

\t\t\tvar months = generateMonth(period, product);

\t\t\tfor(var i in months) {
\t\t\t\thtml.push(
\t\t\t\t\t`<tr>
                        <td class=\"center\">\${product_name}</td>
                        <td class=\"center\">\${months[i]['date']}</td>
                        <td class=\"center\">\${months[i]['date'].lastIndexOf('~') == -1 ? months[i]['date'] + '-01' : months[i]['date'].substring(0,months[i]['date'].lastIndexOf('~')) + '-01'}</td>
                        <td class=\"center\">\${(product['discount'] * months[i]['acount']).toFixed(2)}</td>
                    </tr>`
\t\t\t\t);
\t\t\t}

\t\t\tif(product['count_send'] != 0) {
\t\t\t\tvar _product = {};
\t\t\t\tvar last_item = months[months.length - 1]['date'].lastIndexOf('~') == -1 ? months[months.length - 1]['date'] : months[months.length - 1]['date'].substring(months[months.length - 1]['date'].lastIndexOf('~') + 1);

\t\t\t\tvar send_start_time = addMonth(new Date(last_item), 1) / 1000;
\t\t\t\t_product['start_time'] = send_start_time;
\t\t\t\t_product['count'] = product['count_send'];
\t\t\t\tvar _months = generateMonth(period, _product);
\t\t\t\tfor(var i in _months) {
\t\t\t\t\thtml.push(
\t\t\t\t\t\t`<tr>
                            <td class=\"center\">\${product_name}(赠送)</td>
                            <td class=\"center\">\${_months[i]['date']}</td>
                            <td class=\"center\">0000-00-00</td>
                            <td class=\"center\">0.00</td>
                        </tr>`
\t\t\t\t\t);
\t\t\t\t}
\t\t\t}

\t\t\t\$('#templateCon #serviceInfo').html(html.join(''));
\t\t}

\t\t//生成服务产品服务期间的所有以周期和开始时间生成的所有服务月份
\t\tfunction generateMonth(period, product) {
\t\t\tvar start_time = new Date(product['start_time'] * 1000); //开始时间
\t\t\tvar start_month = start_time.getMonth() + 1; //开始月份
\t\t\tvar times; //所需服务次数

\t\t\ttimes = Math.ceil(product['count'] / period);

\t\t\t// var index;//开始月份在周期中的下标
\t\t\t// if(period != 1){
\t\t\t//     index = (start_month > period ? (start_month % period != 0 ? start_month % period : period) : start_month) - 1;

\t\t\t//     if(index == 0){
\t\t\t//         times = Math.ceil(product['count'] / period);
\t\t\t//     }
\t\t\t//     if(index != 0){
\t\t\t//         times = 1 + Math.ceil((product['count'] - period + index) / period);
\t\t\t//     }
\t\t\t// }

\t\t\tvar months = []; //所有服务月份
\t\t\tfor(var i = 0; i < times; i++) {
\t\t\t\tif(i == 0) {
\t\t\t\t\tif(i == (times - 1)) {
\t\t\t\t\t\tmonths.push(formatDate(addMonth(start_time, i * period), addMonth(start_time, product['count'] - 1)));
\t\t\t\t\t} else
\t\t\t\t\t\tmonths.push(formatDate(addMonth(start_time, i * period), addMonth(start_time, (i + 1) * period - 1)));
\t\t\t\t}
\t\t\t\tif(i != (times - 1) && i != 0) {
\t\t\t\t\tmonths.push(formatDate(addMonth(start_time, i * period), addMonth(start_time, (i + 1) * period - 1)));
\t\t\t\t}
\t\t\t\tif(i == (times - 1) && i != 0) {
\t\t\t\t\tmonths.push(formatDate(addMonth(start_time, i * period), addMonth(start_time, product['count'] - 1)));
\t\t\t\t}

\t\t\t\t//     if(period == 1){
\t\t\t\t//         months.push(formatDate(addMonth(start_time,i)));
\t\t\t\t//     }
\t\t\t\t//     if(period != 1){
\t\t\t\t//         if(index == period - 1){

\t\t\t\t//             if(i == 0){
\t\t\t\t//                 months.push(formatDate(start_time));
\t\t\t\t//             }
\t\t\t\t//             if(i != 0 && i != times - 1){
\t\t\t\t//                 months.push(formatDate(addMonth(start_time,i * period - index),addMonth(start_time,(i + 1) * period - index - 1)));
\t\t\t\t//             }
\t\t\t\t//             if(i == times - 1 && i != 0){
\t\t\t\t//                 if(product['count'] - (i * period - index) == 1){
\t\t\t\t//                     months.push(formatDate(addMonth(start_time,i * period - index)));
\t\t\t\t//                 }
\t\t\t\t//                 if(product['count'] - (i * period - index) != 1){
\t\t\t\t//                      months.push(formatDate(addMonth(start_time,i * period - index),addMonth(start_time,i * period - index + (product['count'] - (i * period - index) - 1))));
\t\t\t\t//                 }
\t\t\t\t//             }
\t\t\t\t//         }
\t\t\t\t//         if(index != period - 1){
\t\t\t\t//             if(i == 0){
\t\t\t\t//                 // console.log(period - index - 1);
\t\t\t\t//                 months.push(formatDate(start_time,addMonth(start_time,period - index - 1)));
\t\t\t\t//             }
\t\t\t\t//             if(i != 0 && i != times - 1){
\t\t\t\t//                 months.push(formatDate(addMonth(start_time,i * period - index),addMonth(start_time,(i + 1) * period - index - 1)));
\t\t\t\t//             }
\t\t\t\t//             if(i == times - 1 && i != 0){
\t\t\t\t//                 if(product['count'] - (i * period - index) == 1){
\t\t\t\t//                     months.push(formatDate(addMonth(start_time,i * period - index)));
\t\t\t\t//                 }
\t\t\t\t//                 if(product['count'] - (i * period - index) != 1){
\t\t\t\t//                     months.push(formatDate(addMonth(start_time,i * period - index),addMonth(start_time,i * period - index + (product['count'] - (i * period - index) - 1))));   
\t\t\t\t//                 }
\t\t\t\t//             }
\t\t\t\t//         }
\t\t\t\t//     }
\t\t\t}
\t\t\treturn months;
\t\t}

\t\t//将时间转换为指定格式
\t\tfunction formatDate(date1, date2) {
\t\t\t// console.log( date1.getMonth() + ',' + date2.getMonth());
\t\t\tvar data = {};
\t\t\tvar date = ykp.formatDate(date1, 'YYYY-MM') + '~' + ykp.formatDate(date2, 'YYYY-MM');
\t\t\tdata['date'] = date;
\t\t\tdata['acount'] = date2.getFullYear() > date1.getFullYear() ? date2.getMonth() + 13 - date1.getMonth() : date2.getMonth() - date1.getMonth() + 1;
\t\t\treturn data;
\t\t}

\t\t//日期增加指定月份
\t\tfunction addMonth(date, num) {
\t\t\tnum = parseInt(num);
\t\t\tvar sDate = date;

\t\t\tvar sYear = sDate.getFullYear();
\t\t\tvar sMonth = sDate.getMonth() + 1;
\t\t\tvar sDay = sDate.getDate();
\t\t\tvar sHour = sDate.getHours();
\t\t\tvar sMinute = sDate.getMinutes();
\t\t\tvar sSecond = sDate.getSeconds();

\t\t\tvar eYear = sYear;
\t\t\tvar eMonth = sMonth + num;
\t\t\tvar eDay = sDay;

\t\t\tvar cwfz = false; //存放新公司 上一个合同是否有合同负责人  

\t\t\twhile(eMonth > 12) {
\t\t\t\teYear++;
\t\t\t\teMonth -= 12;
\t\t\t}

\t\t\tvar eDate = new Date(eYear, eMonth - 1, eDay, sHour, sMinute, sSecond);

\t\t\twhile(eDate.getMonth() != eMonth - 1) {
\t\t\t\teDay--;
\t\t\t\teDate = new Date(eYear, eMonth - 1, eDay, sHour, sMinute, sSecond);
\t\t\t}

\t\t\t// console.log(new Date(eDate.getTime()).getMonth());
\t\t\treturn eDate;
\t\t}

\t\t//合同状态切换至已作废,选择作废原因
\t\tfunction cancel_reason(reason) {
\t\t\t\$('#templateCon [field=\"htm_contract.status\"]').unbind('change').change(function() {
\t\t\t\tif(\$(this).val() == '4') {
\t\t\t\t\t\$('.add_reason_div').css({
\t\t\t\t\t\t'display': ''
\t\t\t\t\t});
\t\t\t\t\t\$('#templateCon .cancel-reason').prop('disabled', false);
\t\t\t\t\t\$('#templateCon .addReason').prop(\"disabled\", false);
\t\t\t\t\tdelReason(reason);
\t\t\t\t}
\t\t\t\tif(\$(this).val() != '4') {
\t\t\t\t\t\$('.add_reason_div').css({
\t\t\t\t\t\t'display': 'none'
\t\t\t\t\t});
\t\t\t\t\t\$('#templateCon .cancel-reason').prop('disabled', true);
\t\t\t\t\t\$('#templateCon .addReason').prop(\"disabled\", true);
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//获取所有作废原因
\t\tfunction getReasons(reason) {
\t\t\t\$('#templateCon .cancel-reason').find('option').not(':first').remove();
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_contract/get_del_type',
\t\t\t\tmethod: 'get',
\t\t\t\tdata: {},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tvar reason_html = [];
\t\t\t\t\t\$('#templateCon .cancel-reason').select2({
\t\t\t\t\t\tallowClear: true
\t\t\t\t\t});
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\treason_html.push('<option value=\"' + data[i]['id'] + '\">' + data[i]['name'] + '</option>');
\t\t\t\t\t}
\t\t\t\t\t\$('#templateCon .cancel-reason').append(reason_html.join(''));
\t\t\t\t\t\$('#templateCon .cancel-reason').val(reason).trigger('change');

\t\t\t\t\tif(\$('#templateCon [field=\"htm_contract.status\"]').val() != '4') {
\t\t\t\t\t\t\$('.add_reason_div').css({
\t\t\t\t\t\t\t'display': 'none'
\t\t\t\t\t\t});
\t\t\t\t\t\t\$('#templateCon .cancel-reason').prop(\"disabled\", true);
\t\t\t\t\t\t\$('#templateCon .addReason').prop(\"disabled\", true);
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('.add_reason_div').css({
\t\t\t\t\t\t\t'display': ''
\t\t\t\t\t\t});
\t\t\t\t\t\t\$('#templateCon .cancel-reason').prop(\"disabled\", false);
\t\t\t\t\t\t\$('#templateCon .addReason').prop(\"disabled\", false);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//新增作废原因
\t\tfunction addReason(reason) {
\t\t\t\$('#templateCon .addReason').unbind('click').click(function() {
\t\t\t\t\$('#addReason').show();

\t\t\t\t//保存作废原因
\t\t\t\t\$('#addReason .save').unbind('click').click(function() {
\t\t\t\t\tvar postdata = {
\t\t\t\t\t\tname: \$('#addReason [field=\"name\"]').val().trim()
\t\t\t\t\t};

\t\t\t\t\tif(!postdata.name) {
\t\t\t\t\t\tykp.prompt('请填写作废原因');
\t\t\t\t\t\t\$('#addReason [field=\"name\"]').val('');
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_contract/add_del_type',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: postdata,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tykp.prompt('作废原因添加成功');
\t\t\t\t\t\t\t\$('#addReason [field=\"name\"]').val(\"\");
\t\t\t\t\t\t\t\$('#addReason .close_label').click();
\t\t\t\t\t\t\tgetReasons(reason); //获取所有作废原因
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t});

\t\t\t\t//关闭添加作废原因
\t\t\t\t\$('#addReason .close_label').unbind('click').click(function() {
\t\t\t\t\t\$('#addReason').hide();
\t\t\t\t});
\t\t\t});
\t\t}

\t\t//根据仓位id获取仓位负责人
\t\tfunction getPositionInfo() {
\t\t\tvar positionInfo;
\t\t\tvar positionInfo1;
\t\t\tvar id = \$('#templateCon').find('select[syllable=position]').val();

\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_customer/get_ckm_position_list2',
\t\t\t\tmethod: 'get',
\t\t\t\tasync: false,
\t\t\t\tdata: {
\t\t\t\t\tid: id
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tpositionInfo = res.data;
\t\t\t\t}
\t\t\t});
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_customer/get_ckm_position_list',
\t\t\t\tmethod: 'post',
\t\t\t\tasync: false,
\t\t\t\tdata: {
\t\t\t\t\tid: id
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tpositionInfo1 = res.data;
\t\t\t\t}
\t\t\t})
\t\t\treturn {
\t\t\t\tpositionInfo: positionInfo,
\t\t\t\tpositionInfo1: positionInfo1
\t\t\t}
\t\t}

\t\t//获取所有区域，切换区域，切换仓位
\t\t//ele1 区域节点
\t\t//ele2 仓位节点
\t\tfunction getAllAreasAndChangeAreaToChangePositions(ele1, ele2, position, data) {
\t\t\tvar flow = JSON.parse(data.task[0]['flow']);
\t\t\tvar _data = data;
\t\t\t//获取所有区域
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_accountancies/get_all_pos',
\t\t\t\tmethod: 'get',
\t\t\t\tdata: {

\t\t\t\t},
\t\t\t\tasync:false,
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\t//区域信息html
\t\t\t\t\tvar area_html = [];
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tarea_html.push('<option value=\"' + i + '\">' + i + '</option>');
\t\t\t\t\t}\t\t\t\t\t
\t\t\t\t\tele1.html(area_html.join(''));
\t\t\t\t\tvar posId = \"\";
\t\t\t\t\t//切换区域，切换仓位
\t\t\t\t\tele1.change(function() {
\t\t\t\t\t\t//清空仓位信息
\t\t\t\t\t\tele2.html('<option value=\"\">请选择仓位</option>').select2();

\t\t\t\t\t\t//区域
\t\t\t\t\t\tvar area = \$(this).val();

\t\t\t\t\t\t//如果区域不存在，则返回
\t\t\t\t\t\tif(!area) {
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}

\t\t\t\t\t\tvar _data = data[area];
\t\t\t\t\t\t//仓位信息html
\t\t\t\t\t\tvar position_html = [];
\t\t\t\t\t\tfor(var i in _data) {
\t\t\t\t\t\t\tposition_html.push('<option value=\"' + _data[i]['id'] + '\">' + _data[i]['name'] + '</option>');
\t\t\t\t\t\t\tposId = _data[i]['id'];
\t\t\t\t\t\t}
\t\t\t\t\t\tele2.append(position_html.join(''));
\t\t\t\t\t});

\t\t\t\t\t//如果存在了仓位信息，就默认选中
\t\t\t\t\tif(position) {
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\tfor(var j in data[i]) {
\t\t\t\t\t\t\t\tif(position['pos_id'] == data[i][j]['id']) {
\t\t\t\t\t\t\t\t\tele1.val(i).trigger('change');
\t\t\t\t\t\t\t\t\tele2.val(position['pos_id']).trigger('change');
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\tele1.val(i).trigger('change');
\t\t\t\t\t\t\tele2.val(posId).trigger('change');
\t\t\t\t\t\t\tgetfuzeren(flow,_data['task'][0]['staff']);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t\$('#templateCon').find('select[syllable=position]').change(function() {
\t\t\t\t\t\tvar id = \$(this).val();
\t\t\t\t\t\tvar result = getPositionInfo();
\t\t\t\t\t\tvar positionInfo = result.positionInfo;
\t\t\t\t\t\tvar positionInfo1 = result.positionInfo1;
\t\t\t\t\t\tvar positionLeader = {};

\t\t\t\t\t\tflow.indexOf('报税') != -1 ? (positionInfo['bs'] ? positionLeader['报税'] = positionInfo['bs'] : \"\") : \"\";
\t\t\t\t\t\tflow.indexOf('送单') != -1 ? (positionInfo['sod'] ? positionLeader['送单'] = positionInfo['sod'] : \"\") : \"\";
\t\t\t\t\t\tflow.indexOf('客服') != -1 ? (positionInfo['kf'] ? positionLeader['客服'] = positionInfo['kf'] : \"\") : \"\";
\t\t\t\t\t\tflow.indexOf('收单') != -1 ? (positionInfo['sd'] ? positionLeader['收单'] = positionInfo['sd'] : \"\") : \"\";
\t\t\t\t\t\tflow.indexOf('记账') != -1 ? (positionInfo['zz'] ? positionLeader['记账'] = positionInfo['zz'] : \"\") : \"\";
\t\t\t\t\t\tflow.indexOf('整单') != -1 ? (positionInfo['zd'] ? positionLeader['整单'] = positionInfo['zd'] : \"\") : \"\";
\t\t\t\t\t\tvar positionLeader1 = {};
\t\t\t\t\t\tflow.indexOf('报税') != -1 ? (positionInfo1['bs'] ? positionLeader1['报税'] = positionInfo1['bs'] : \"\") : \"\";
\t\t\t\t\t\tflow.indexOf('送单') != -1 ? (positionInfo1['sod'] ? positionLeader1['送单'] = positionInfo1['sod'] : \"\") : \"\";
\t\t\t\t\t\tflow.indexOf('客服') != -1 ? (positionInfo1['kf'] ? positionLeader1['客服'] = positionInfo1['kf'] : \"\") : \"\";
\t\t\t\t\t\tflow.indexOf('收单') != -1 ? (positionInfo1['sd'] ? positionLeader1['收单'] = positionInfo1['sd'] : \"\") : \"\";
\t\t\t\t\t\tflow.indexOf('记账') != -1 ? (positionInfo1['zz'] ? positionLeader1['记账'] = positionInfo1['zz'] : \"\") : \"\";
\t\t\t\t\t\tflow.indexOf('整单') != -1 ? (positionInfo1['zd'] ? positionLeader1['整单'] = positionInfo1['zd'] : \"\") : \"\";
\t\t\t\t\t\t
\t\t\t\t\t\tgetcwfz(positionLeader, positionLeader1,_data['task'][0]['staff'])
\t\t\t\t\t})
\t\t\t\t}
\t\t\t});
\t\t}

\t\tfunction getfuzeren(flow,_service_info) {
\t\t\tvar id = \$('#templateCon').find('select[syllable=position]');
\t\t\tvar result = getPositionInfo();
\t\t\tvar positionInfo = result.positionInfo;
\t\t\tvar positionInfo1 = result.positionInfo1;
\t\t\tvar positionLeader = {};

\t\t\tflow.indexOf('报税') != -1 ? (positionInfo['bs'] ? positionLeader['报税'] = positionInfo['bs'] : \"\") : \"\";
\t\t\tflow.indexOf('送单') != -1 ? (positionInfo['sod'] ? positionLeader['送单'] = positionInfo['sod'] : \"\") : \"\";
\t\t\tflow.indexOf('客服') != -1 ? (positionInfo['kf'] ? positionLeader['客服'] = positionInfo['kf'] : \"\") : \"\";
\t\t\tflow.indexOf('收单') != -1 ? (positionInfo['sd'] ? positionLeader['收单'] = positionInfo['sd'] : \"\") : \"\";
\t\t\tflow.indexOf('记账') != -1 ? (positionInfo['zz'] ? positionLeader['记账'] = positionInfo['zz'] : \"\") : \"\";
\t\t\tflow.indexOf('整单') != -1 ? (positionInfo['zd'] ? positionLeader['整单'] = positionInfo['zd'] : \"\") : \"\";
\t\t\tvar positionLeader1 = {};
\t\t\tflow.indexOf('报税') != -1 ? (positionInfo1['bs'] ? positionLeader1['报税'] = positionInfo1['bs'] : \"\") : \"\";
\t\t\tflow.indexOf('送单') != -1 ? (positionInfo1['sod'] ? positionLeader1['送单'] = positionInfo1['sod'] : \"\") : \"\";
\t\t\tflow.indexOf('客服') != -1 ? (positionInfo1['kf'] ? positionLeader1['客服'] = positionInfo1['kf'] : \"\") : \"\";
\t\t\tflow.indexOf('收单') != -1 ? (positionInfo1['sd'] ? positionLeader1['收单'] = positionInfo1['sd'] : \"\") : \"\";
\t\t\tflow.indexOf('记账') != -1 ? (positionInfo1['zz'] ? positionLeader1['记账'] = positionInfo1['zz'] : \"\") : \"\";
\t\t\tflow.indexOf('整单') != -1 ? (positionInfo1['zd'] ? positionLeader1['整单'] = positionInfo1['zd'] : \"\") : \"\";
\t\t\t
\t\t\tgetcwfz(positionLeader, positionLeader1,_service_info);
\t\t\t
\t\t}

\t\tfunction delReason(reason) {
\t\t\t\$('#templateCon .delReason').unbind('click').click(function() {
\t\t\t\tvar val = \$('#templateBox .del_type').val();
\t\t\t\tif(val == 0 || val == \"\") {
\t\t\t\t\tykp.prompt('请选择原因再删除');
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\tykp.doAjax({
\t\t\t\t\turl: \"/api/api_contract/add_del_type\",
\t\t\t\t\tdata: {
\t\t\t\t\t\treason_id: val
\t\t\t\t\t},
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tykp.prompt('删除成功');
\t\t\t\t\t\tgetReasons(reason); //获取所有作废原因
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})
\t\t}

\t\t//编辑、作废功能
\t\tfunction editOrCancelOrApprove(data) {
\t\t\t//编辑
\t\t\t\$('#dynamic-table_data .itemadit').click(function() {
\t\t\t    var a_book = parseInt(\$(this).parents('tr').attr('data-account_book'));
\t\t\t\tvar d_total = parseInt(\$(this).parents('tr').attr('data-discount_total'));
\t\t\t\tshoukstatus = !d_total&&!a_book ? true :false;
\t\t\t\tvar pos_id = \$(this).attr('pos-id');
\t\t\t\tif(!pos_id) {
\t\t\t\t\tykp.prompt('请完善仓位信息');
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tvar _data = data[\$(this).parents('tr').index()];
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tvar customer_id = \$(this).parents('tr').attr('customer_id');
\t\t\t\tvar product = \$(this).parents('tr').attr('flow');
\t\t\t\tvar start_time = cs.getNowTime(\$(this).parents('tr').attr('start-time'));
\t\t\t\tvar end_time = cs.getNowTime(\$(this).parents('tr').attr('end-time'));
\t\t\t\tvar type = \$(this).parents('tr').attr('data-type');
\t\t\t\tvar month_s = parseInt(start_time.split('-')[1]) < 10 ? '0' + start_time.split('-')[1] : start_time.split('-')[1]
\t\t\t\tvar day_s = parseInt(start_time.split('-')[2]) < 10 ? '0' + start_time.split('-')[2] : start_time.split('-')[2];
\t\t\t\tvar month_e = parseInt(end_time.split('-')[1]) < 10 ? '0' + end_time.split('-')[1] : end_time.split('-')[1];
\t\t\t\tvar day_e = parseInt(end_time.split('-')[2]) < 10 ? '0' + end_time.split('-')[2] : end_time.split('-')[2];
\t\t\t\tshowMark('#template1');

\t\t\t\t\$('#templateCon [syllable]').css('width', '180px').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});

\t\t\t\tif(type != '1') {
\t\t\t\t\t\$('#templateCon #sendMsg_2').hide();
\t\t\t\t}
\t\t\t\t\$('#showBox .title').text('编辑合同授权');

\t\t\t\tgetReasons(_data['htm_contract.del_type']); //获取所有作废原因
\t\t\t\t//合同状态切换至已作废,选择作废原因
\t\t\t\tcancel_reason(_data['htm_contract.del_type']);

\t\t\t\t//新增作废原因
\t\t\t\taddReason(_data['htm_contract.del_type']);
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//长期合同  显示区域、仓位输入框
\t\t\t\tif(type == '1') {
\t\t\t\t\t\$('#templateCon .area_position').show();

\t\t\t\t\t//获取所有区域，切换区域，切换仓位
\t\t\t\t\tgetAllAreasAndChangeAreaToChangePositions(\$('#templateCon [syllable=\"area\"]'), \$('#templateCon [syllable=\"position\"]'), _data['position'], _data);
\t\t\t\t}
\t\t\t\t
\t\t\t\t//加载合同相关数据
\t\t\t\tloadContract(_data, customer_id);
                \$(\"#temHeader\").width(\$(\"#showBox\").width()-47);
\t\t\t\t// time_plug();

\t\t\t\t// if(data['htm_contract.contract_type'] == '2'){
\t\t\t\t// \tfor(var i in employees){
\t\t\t\t// \t\t\$('#templateCon #state').append(new Option(employees[i],i));
\t\t\t\t// \t}
\t\t\t\t// }

\t\t\t\t//长期合同 获取对应仓位的仓位负责人
\t\t\t\t// if(data['htm_contract.contract_type'] == '1'){
\t\t\t\t// \t//获取仓位负责人
\t\t\t\t// \tgetPositionLeader(pos_id);
\t\t\t\t// }

\t\t\t\t
\t\t\t\tsubmitContract(id, type, customer_id, start_time.split('-')[0] + '-' + month_s + '-' + day_s, end_time.split('-')[0] + '-' + month_e + '-' + day_e);
\t\t\t});

\t\t\tfunction sendMsg(id, type, param) {
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_common/send_customer',
\t\t\t\t\tdata: {
\t\t\t\t\t\tcustomer_id: id,
\t\t\t\t\t\ttype: type,
\t\t\t\t\t\tparam: JSON.stringify(param)
\t\t\t\t\t},
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t// ykp.prompt('短信发送成功！');
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}

\t\t\t//将编辑后的合同数据提交服务器\t\t\t
\t\t\tfunction submitContract(id, type, customer_id, start_time, end_time) {
\t\t\t\t\$('#templateBox .add').unbind('click').click(function() {
\t\t\t\t\tif(\$('#templateCon [field=\"htm_contract.status\"]').val() == null) {
\t\t\t\t\t\tykp.prompt('请重新选择合同状态！');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tvar postdata = {};
\t\t\t\t\tpostdata['id'] = id;
\t\t\t\t\tproduct = [];
\t\t\t\t\t\$('#templateCon .leader_info tr').each(function(i) {
\t\t\t\t\t\tvar \$var = \$(this).find('td').eq(0).text().trim();
\t\t\t\t\t\t//product.push(\$var.substring(0,\$var.length-1));
\t\t\t\t\t\t//product.push((\$(this).find('td').eq(0).text().trim()).substring(0, (\$(this).find('td').eq(0).text().trim()).length - 1)),
\t\t\t\t\t\tproduct.push(\$var);

\t\t\t\t\t})
\t\t\t\t\tvar field = '';
\t\t\t\t\tvar param_1 = {
\t\t\t\t\t\tname: \$('#templateCon ._customer').val(),
\t\t\t\t\t\ttime: start_time.split('-')[0] + '' + start_time.split('-')[1] + '-' + end_time.split('-')[0] + '' + end_time.split('-')[1]
\t\t\t\t\t}
\t\t\t\t\tvar param_2 = {
\t\t\t\t\t\tname: \$('#templateCon ._customer').val(),
\t\t\t\t\t\tproduct: product.join(','),
\t\t\t\t\t\tdate: end_time
\t\t\t\t\t}
\t\t\t\t\tvar today = new Date();
\t\t\t\t\tvar param_3 = {
\t\t\t\t\t\tname: \$('#templateCon ._customer').val(),
\t\t\t\t\t\tdate: today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate()
\t\t\t\t\t}
\t\t\t\t\tvar is_send_1 = false,
\t\t\t\t\t\tis_send_2 = false,
\t\t\t\t\t\tis_send_3 = false;
\t\t\t\t\tif(\$('#templateCon #sendMsg_1 input:checked').val() == 1) {
\t\t\t\t\t\tis_send_1 = true;
\t\t\t\t\t}
\t\t\t\t\tif(type == 1 && \$('#templateCon #sendMsg_2 input:checked').val() == 1) {
\t\t\t\t\t\tis_send_2 = true;
\t\t\t\t\t}
\t\t\t\t\tif(\$('#templateCon #sendMsg_3 input:checked').val() == 1) {
\t\t\t\t\t\tis_send_3 = true;
\t\t\t\t\t}

\t\t\t\t\t\$('#templateCon .upload').each(function(i, e) {
\t\t\t\t\t\tfield = \$(this).attr('field').split('.')[1];
\t\t\t\t\t\tpostdata[field] = \$(this).val();
\t\t\t\t\t});

\t\t\t\t\t//长期合同，提交数据加上仓位id
\t\t\t\t\tif(!\$('#templateCon [syllable=\"position\"]').is(':hidden')) {
\t\t\t\t\t\tpostdata['pos_id'] = \$('#templateCon [syllable=\"position\"]').val();
\t\t\t\t\t\t//如果仓位id 不存在,提示并返回
\t\t\t\t\t\tif(!postdata['pos_id']) {
\t\t\t\t\t\t\tykp.prompt('请选择仓位');
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tvar data = [];
\t\t\t\t\tvar num = 0;
\t\t\t\t\t\$('#templateCon .leader_info tr').each(function(i, e) {
\t\t\t\t\t\t
\t\t\t\t\t\tif(type == 1) {
\t\t\t\t\t\t\tif(\$(this).find('select').val() == 0){
\t\t\t\t\t\t\t\tnum++;
\t\t\t\t\t\t\t\tdata = [];
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\tvar \$var = \$(this).find('td').eq(0).text().trim();
\t\t\t\t\t\t\t\t//console.log(\$var.substring(0,\$var.length-1));
\t\t\t\t\t\t\t\tdata.push({
\t\t\t\t\t\t\t\t\t'task_id': \$(this).attr('task-id'),
\t\t\t\t\t\t\t\t\t'process': \$var.substring(0,\$var.length-1),
\t\t\t\t\t\t\t\t\t//'process': \$(this).find('td').eq(0).text().trim(),
\t\t\t\t\t\t\t\t\t'staff_id': \$(this).find('select').val(),
\t\t\t\t\t\t\t\t\t'lv': \$(this).find('input').val() || 1
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\tif(type == 2) {
\t\t\t\t\t\t\tif(\$(this).find('select').val() == 0){
\t\t\t\t\t\t\t\tnum++;
\t\t\t\t\t\t\t\tdata = [];
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\tdata.push({
\t\t\t\t\t\t\t\t\t'task_id': \$(this).attr('task-id'),
\t\t\t\t\t\t\t\t\t'staff_id': \$(this).find('select').val(),
\t\t\t\t\t\t\t\t\t'lv': \$(this).find('input').val() || 1
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tif(num){
\t\t\t\t\t\tykp.prompt('负责人不能为空');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\tpostdata['assign'] = JSON.stringify(data);
\t\t\t\t\tif(postdata.status == 3){
\t\t\t\t\t\tlayui.use('layer',function(){
\t\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\t\t layer.confirm('确认保存么？', function(index){
\t\t\t\t\t\t\t \taddContract(postdata,id,customer_id,param_1,param_2,param_3,is_send_1,is_send_2,is_send_3);
\t\t\t\t\t\t        layer.close(index);
\t\t\t\t\t\t      });
\t\t\t\t\t\t})
\t\t\t\t\t\t
\t\t\t\t\t}else{
\t\t\t\t\t\taddContract(postdata,id,customer_id,param_1,param_2,param_3,is_send_1,is_send_2,is_send_3);
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}

\t\t\tfunction addContract(postdata,id,customer_id,param_1,param_2,param_3,is_send_1,is_send_2,is_send_3){
\t\t\t\t\tif(shoukstatus){
                        postdata['is_get_money'] = 2;
\t\t\t\t\t}
                ykp.doAjax({
\t\t\t\t\t\turl: '/api/api_contract/auth_edit',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: postdata,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\turl: '/api/api_contract/auth_ht2',
\t\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\tid: id,
\t\t\t\t\t\t\t\t\tauth_status2: 2
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\tykp.prompt('编辑成功');

\t\t\t\t\t\t\t\t\tif(is_send_1) {
\t\t\t\t\t\t\t\t\t\tsendMsg(customer_id, '账期完成', param_1);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tif(is_send_2) {
\t\t\t\t\t\t\t\t\t\tsendMsg(customer_id, '合同续签', param_2);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tif(is_send_3) {
\t\t\t\t\t\t\t\t\t\tsendMsg(customer_id, '客户解约', param_3);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\t\t\tgetDatalist('','',ykp.getCookie('page_no'));
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t}
\t\t\t//加载编辑合同数据
\t\t\tfunction loadContract(data, customer_id) {
\t\t\t\tvar flow = JSON.parse(data.task[0]['flow']);
\t\t\t\tvar html = [];

\t\t\t\t//新公司 无订单编辑过的负责人
\t\t\t\tvar fuzePeople = data.task[0].staff;
\t\t\t\t//合同负责人
\t\t\t\tvar leading_official = '';

\t\t\t\tsetTimeout(function() {
\t\t\t\t\t//所有仓位信息
\t\t\t\t\tif(data['htm_contract.contract_type'] == 1) {
\t\t\t\t\t\tvar result = getPositionInfo();
\t\t\t\t\t\tvar positionInfo = result.positionInfo;
\t\t\t\t\t\t//选中仓位负责人
\t\t\t\t\t\tvar positionInfo1 = result.positionInfo1;
\t\t\t\t\t\t//仓位负责人
\t\t\t\t\t\tvar positionLeader = {};

\t\t\t\t\t\tflow.indexOf('报税') != -1 ? (positionInfo['bs'] ? positionLeader['报税'] = positionInfo['bs'] : \"\") : \"\";
\t\t\t\t\t\tflow.indexOf('送单') != -1 ? (positionInfo['sod'] ? positionLeader['送单'] = positionInfo['sod'] : \"\") : \"\";
\t\t\t\t\t\tflow.indexOf('客服') != -1 ? (positionInfo['kf'] ? positionLeader['客服'] = positionInfo['kf'] : \"\") : \"\";
\t\t\t\t\t\tflow.indexOf('收单') != -1 ? (positionInfo['sd'] ? positionLeader['收单'] = positionInfo['sd'] : \"\") : \"\";
\t\t\t\t\t\tflow.indexOf('记账') != -1 ? (positionInfo['zz'] ? positionLeader['记账'] = positionInfo['zz'] : \"\") : \"\";
\t\t\t\t\t\tflow.indexOf('整单') != -1 ? (positionInfo['zd'] ? positionLeader['整单'] = positionInfo['zd'] : \"\") : \"\";
\t\t\t\t\t\tvar positionLeader1 = {};
\t\t\t\t\t\tflow.indexOf('报税') != -1 ? (positionInfo1['bs'] ? positionLeader1['报税'] = positionInfo1['bs'] : \"\") : \"\";
\t\t\t\t\t\tflow.indexOf('送单') != -1 ? (positionInfo1['sod'] ? positionLeader1['送单'] = positionInfo1['sod'] : \"\") : \"\";
\t\t\t\t\t\tflow.indexOf('客服') != -1 ? (positionInfo1['kf'] ? positionLeader1['客服'] = positionInfo1['kf'] : \"\") : \"\";
\t\t\t\t\t\tflow.indexOf('收单') != -1 ? (positionInfo1['sd'] ? positionLeader1['收单'] = positionInfo1['sd'] : \"\") : \"\";
\t\t\t\t\t\tflow.indexOf('记账') != -1 ? (positionInfo1['zz'] ? positionLeader1['记账'] = positionInfo1['zz'] : \"\") : \"\";
\t\t\t\t\t\tflow.indexOf('整单') != -1 ? (positionInfo1['zd'] ? positionLeader1['整单'] = positionInfo1['zd'] : \"\") : \"\";

\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif(data['htm_contract.contract_type'] == 1) {
\t\t\t\t\t\tvar _service_info = data['task'][0]['staff'];
\t\t\t\t\t\tif(_service_info.length) {
\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\turl: \"/api/api_contract/get_last_contract\",
\t\t\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\tcustomer_id: customer_id
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\tservice_info = res.data;
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t//所有流程
\t\t\t\t\t\t\t\t\tvar task = data.task[0].flow ? JSON.parse(data.task[0].flow) : [];
\t\t\t\t\t\t\t\t\tif(service_info && !Array.isArray(service_info)  ) {
\t\t\t\t\t\t\t\t\t\tfor(var i in service_info) {
\t\t\t\t\t\t\t\t\t\t\tfor(var j = 0; j < task.length; j++){
\t\t\t\t\t\t\t\t\t\t\t\tif(i == task[j]){
\t\t\t\t\t\t\t\t\t\t\t\t\thtml.push(
\t\t\t\t\t\t\t\t\t\t\t\t\t\t`<tr task-id=\"\${data.task[0].id}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:100px;text-align: right;padding-right: 10px;\">\${i}：</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select style=\"width:180px;\" process=\"\${i}\" leader=\"\${positionLeader[i]}\" default=\"\${service_info[i]}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">请选择</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:200px;margin-right:10px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label> 任务等级：</label> <input value=\"\${_service_info[j]['lv']}\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>`
\t\t\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t//当  上一个订单为空时  加载负责cw 的负责人  反之加载 当前客户的负责人
\t\t\t\t\t\t\t\t\t\tvar status = false;
\t\t\t\t\t\t\t\t\t\tif(fuzePeople.length != 0) {
\t\t\t\t\t\t\t\t\t\t\tfor(var i in positionLeader) {
\t\t\t\t\t\t\t\t\t\t\t\tfor(var j in fuzePeople) {
\t\t\t\t\t\t\t\t\t\t\t\t\tif(fuzePeople[j]['process'] == i) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(fuzePeople[j]['staff_id'] != 0) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstatus = true;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t//当所有负责人为不为空时
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(status) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thtml.push(
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t`<tr task-id=\"\${data.task[0].id}\" style=\"height:43px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><label>\${fuzePeople[j]['process']}：</label></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding-left:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select style=\"width:180px;\" process=\"\${fuzePeople[j]['process']}\" leader=\"\${positionLeader[i]}\" default=\"\${fuzePeople[j]['staff_id']}\">
\t\t\t\t\t//\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">请选择</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:200px;margin-right:10px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label> 任务等级： </label> <input value=\"\${_service_info[j]['lv']}\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>`);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\tif(!status) {
\t\t\t\t\t\t\t\t\t\t\t\tgetfuzeren(flow,_service_info);
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\tcwfz = true;
\t\t\t\t\t\t\t\t\t\t\tfor(var i in positionLeader) {
\t\t\t\t\t\t\t\t\t\t\t\tfor(var j in positionLeader1) {
\t\t\t\t\t\t\t\t\t\t\t\t\tif(i == j) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\thtml.push(
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t`<tr task-id=\"\${data.task[0].id}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:100px;\">\${i}：</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select style=\"width:180px;\" process=\"\${j}\" leader=\"\${positionLeader[i]}\" default=\"\${positionLeader1[i].split(',')[0]}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">请选择</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:200px;margin-right:10px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label> 任务等级：</label> <input value=\"\${_service_info[j]['lv']}\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>`
\t\t\t\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\$('#templateCon .leader_info').html(html.join(''));
                                    \$(\"#temHeader\").width(\$(\"#showBox\").width()-47);
\t\t\t\t\t\t\t\t\t\$('#templateCon .leader_info [process]').select2({
\t\t\t\t\t\t\t\t\t\tallowClear: true
\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\tvar leader_html = [];
\t\t\t\t\t\t\t\t\tvar leaders;
\t\t\t\t\t\t\t\t\t\$('#templateCon .leader_info [process]').each(function(i, e) {
\t\t\t\t\t\t\t\t\t\tif(!\$(e).attr('leader')) {
\t\t\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\tleaders = \$(e).attr('leader').split(',');
\t\t\t\t\t\t\t\t\t\tfor(var k in leaders) {
\t\t\t\t\t\t\t\t\t\t\tif(employees[leaders[k]]){
\t\t\t\t\t\t\t\t\t\t\t\tleader_html.push(
\t\t\t\t\t\t\t\t\t\t\t\t\t`<option value=\"\${leaders[k]}\">\${employees[leaders[k]]}</option>`
\t\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\$(e).append(leader_html.join('')).val(\$(e).attr('default')).trigger('change');
\t\t\t\t\t\t\t\t\t\tleaders = '';
\t\t\t\t\t\t\t\t\t\tleader_html = [];
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\thtml = getcwfz(positionLeader,positionLeader1,_service_info);
\t\t\t\t\t\t}

\t\t\t\t\t}
\t\t\t\t\tif(data['htm_contract.contract_type'] == 2) {
\t\t\t\t\t\tvar task = data['task'];
\t\t\t\t\t\tvar _service_info = data['task'][0]['staff'];
\t\t\t\t\t\tfor(var i in task) {
\t\t\t\t\t\t\thtml.push(
\t\t\t\t\t\t\t\t`<tr task-id=\"\${data['task'][i]['id']}\">
\t\t\t\t\t\t\t\t<td style=\"width:100px;text-align: right\">\${task[i]['productName']}：</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select style=\"width:180px;\" default=\"\${task[i]['staff'].length > 0 ? (task[i]['staff'][0]['staff_id'] != '0' ? task[i]['staff'][0]['staff_id'] : '0') : '0'}\">
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">请选择</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td style=\"width:200px;margin-right:10px;\">
\t\t\t\t\t\t\t\t\t<label> 任务等级：</label> <input value=\"\${_service_info[i]['lv']}\" />
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>`
\t\t\t\t\t\t\t);
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#templateCon .leader_info').html(html.join(''));
\t\t\t\t\t\t\$('#templateCon .leader_info [default]').select2({
\t\t\t\t\t\t\tallowClear: true
\t\t\t\t\t\t});

\t\t\t\t\t\tvar leader_html = [];
\t\t\t\t\t\tvar leaders;
\t\t\t\t\t\t\$('#templateCon .leader_info [default]').each(function(i, e) {
\t\t\t\t\t\t\tfor(var k in employees) {
\t\t\t\t\t\t\t\tleader_html.push(
\t\t\t\t\t\t\t\t\t`<option value=\"\${k}\">\${employees[k]}</option>`
\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\$(e).append(leader_html.join('')).val(\$(e).attr('default')).trigger('change');
\t\t\t\t\t\t\tleaders = '';
\t\t\t\t\t\t\tleader_html = [];
\t\t\t\t\t\t});
\t\t\t\t\t}

\t\t\t\t\t\$('#templateCon [field]').not('.cancel-reason').each(function(i, e) {
\t\t\t\t\t\tif(\$(this).attr('field') == 'htm_contract.contract_type') {
\t\t\t\t\t\t\t\$(this).val(data[\$(this).attr('field')] == '1' ? '长期合同' : '一次性合同');
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('field') == 'htm_contract.status' && data[\$(this).attr('field')] == '0') {
\t\t\t\t\t\t\t\$(this).val(1);
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\t\$(this).val(data[\$(this).attr('field')]);
\t\t\t\t\t});
\t\t\t\t}, 200)

\t\t\t}

\t\t\t//时间插件
\t\t\tfunction time_plug() {
\t\t\t\t\$('#templateCon .select2').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});
\t\t\t\t\$('#select2-multiple-style .btn').unbind('click').on('click', function(e) {
\t\t\t\t\tvar target = \$(this).find('input[type=radio]');
\t\t\t\t\tvar which = parseInt(target.val());
\t\t\t\t\tif(which == 2) \$('.select2').addClass('tag-input-style');
\t\t\t\t\telse \$('.select2').removeClass('tag-input-style');
\t\t\t\t});
\t\t\t}

\t\t\t//作废
\t\t\t\$('.cancel').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\t// var is_invalid = \$(this).attr('is_invalid');
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_contract/cancel',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tid: id,
\t\t\t\t\t\tstatus: 4
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tykp.prompt('作废成功');
\t\t\t\t\t\tgetDatalist();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t}

\t\tfunction getcwfz(positionLeader, positionLeader1,_service_info) {
\t\t\tvar html = [];
\t\t\tfor(var i in positionLeader) {
\t\t\t\tfor(var j in positionLeader1) {
\t\t\t\t\tif(i == j) {
\t\t\t\t\t\thtml.push(
\t\t\t\t\t\t\t`<tr task-id=\"\${_service_info[0]['task_id']}\">
\t\t\t\t\t\t\t<td style=\"width:100px;text-align: right\">\${i}：</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select style=\"width:180px;\" process=\"\${j}\" leader=\"\${positionLeader[i]}\" default=\"\${positionLeader1[i].split(',')[0]}\">
\t\t//\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">请选择</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<td style=\"width:200px;margin-right:10px;\">
\t\t\t\t\t\t\t\t<label> 任务等级：</label> <input value=\"\${getLv(_service_info,j)}\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>`
\t\t\t\t\t\t);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t}
\t\t\t
\t\t\tfunction getLv(_service_info,j){
\t\t\t\tvar lv = \"\";
\t\t\t\tfor(var i in _service_info){
\t\t\t\t\tif(_service_info[i]['process'] == j){
\t\t\t\t\t\treturn _service_info[i]['lv'];
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t
\t\t\t\$('#templateCon .leader_info [process]').select2({
\t\t\t\tallowClear: true
\t\t\t});
\t\t\tsetTimeout(function() {
\t\t\t\tvar leaders;
\t\t\t\tvar leader_html = [];
\t\t\t\t\$('#templateCon .leader_info').html(html.join(''));
\t\t\t\t\$('#templateCon .leader_info [process]').each(function(i, e) {
\t\t\t\t\tif(!\$(e).attr('leader')) {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\tleaders = \$(e).attr('leader').split(',');
\t\t\t\t\tfor(var k in leaders) {
\t\t\t\t\t\tif(employees[leaders[k]]){
\t\t\t\t\t\t\tleader_html.push(
\t\t\t\t\t\t\t\t`<option value=\"\${leaders[k]}\">\${employees[leaders[k]]}</option>`
\t\t\t\t\t\t\t);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t\$(e).append(leader_html.join('')).val(\$(e).attr('default')).trigger('change');
\t\t\t\t\tleaders = '';
\t\t\t\t\tleader_html = [];
\t\t\t\t});
\t\t\t},300)
\t\t}

\t});

\t//全选函数
\tfunction checkAll(status) {
\t\t\$(\"tbody input[name='check']\").each(function(i, n) {
\t\t\tn.checked = status;
\t\t});
\t}
</script>";
    }

    public function getTemplateName()
    {
        return "admin/contractManagement/contractAuthorization.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  737 => 714,  733 => 713,  19 => 1,);
    }
}
/* <style>*/
/* 	#tableChange {*/
/* 		list-style: none;*/
/* 		margin-left: 0;*/
/* 		height: 42px;*/
/* 		border-bottom: 1px #d5e3ef solid;*/
/* 	}*/
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
/* 	*/
/* 	#templateBox .widget-box {*/
/* 		border: none;*/
/* 	}*/
/* 	*/
/* 	#templateBox .space-12 {*/
/* 		margin: 0;*/
/* 	}*/
/* 	*/
/* 	#heightsearch1 label {*/
/* 		width: 68px;*/
/* 	}*/
/* 	*/
/* 	#templateCon label {*/
/* 		width: 75px;*/
/* 	}*/
/* 	*/
/* 	#templateCon tbody tr td,*/
/* 	#templateCon thead tr th {*/
/* 		text-align: left;*/
/* 		padding: 5px 16px;*/
/* 		height: 35px;*/
/* 	}*/
/* 	#templateCon tbody tr td,*/
/* 	#templateCon thead tr th {*/
/* 		text-align: center;*/
/* 		padding: 0;*/
/* */
/* 	}*/
/* 	#templateCon span[field],*/
/* 	#templateCon span[syllable] {*/
/* 		display: inline-block;*/
/* 		min-width: 180px !important;*/
/* 	}*/
/* 	*/
/* 	#templateCon tbody tr td:before {*/
/* 		content: none !important;*/
/* 	}*/
/* 	*/
/* 	#templateCon .leader_info td {*/
/* 		background-color: #fff !important;*/
/* 		border: none;*/
/* 	}*/
/* 	*/
/* 	#templateCon table {*/
/* 		border: none !important;*/
/* 	}*/
/* </style>*/
/* */
/* <div class=" widget-main">*/
/* 	<div class="row">*/
/* 		<div class="col-lg-12">*/
/* 			<!-- <h3 class="header smaller lighter  blue">合同授权</h3> -->*/
/* 			<div class="row" style="margin-top: 20px;" id="topTool">*/
/* 				<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 					<input type="text" pts=0 sear="htm_contract.contract_code" placeholder="订单编码" />*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 					<input type="text" pts=0 sear="khm_customer.name" placeholder="企业名称" />*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 					<button type="button" id="search" title="搜索" class="btn btn-info btn-sm">*/
/*                         <i class="fa fa-search"></i>*/
/*                     </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 					<button id="heightsearch" type="button" title="高级搜索" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/*                         <i class="fa fa-filter"></i>*/
/*                     </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 					<button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/* 	                    <i class="fa fa-refresh"></i>*/
/* 	                </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="140" style=" float: left; margin-right: 5px;">*/
/* 					<button class="mergeItem btn btn-info btn-sm" title="导入一次性合同" type="button" imp="0" style="background-color: #1E9FFF !important; border-color:#1E9FFF ;">*/
/* 						<i class="fa fa-sign-in"></i>*/
/* 					</button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="141" style=" float: left; margin-right: 5px;">*/
/* 					<button class="mergeItem btn btn-info btn-sm" title="导入长期合同" type="button" imp="1" style="background-color: #1E9FFF !important; border-color:#1E9FFF ;">*/
/* 						<i class="fa fa-sign-in"></i>*/
/* 					</button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-right: 5px;" >*/
/* 					<button title="自动续签" class="btn btn-info btn-sm auto_renew" style="background-color: #1E9FFF !important; border-color:#1E9FFF ;"><i class="fa fa-spinner"></i></button>*/
/* 				</div>*/
/* */
/* 				<!-- <button type="button" id="addItem" style="outline: none;background-color: #009688 !important;" class="btn btn-info btn-sm position-relative">*/
/*                         <i class="fa fa-plus"></i>*/
/*                         添加*/
/*                     </button> -->*/
/* */
/* 				<div id="heightsearch1" class="col-sx-12" style="margin-top:30px;position: absolute; background: #fff;padding: 10px 0px; display: none;z-index:1042;">*/
/* 					<div class="row">*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>合同类型</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select gjs=0 sear="htm_contract.contract_type" style="width: 180px;">*/
/* 								<option value="">请选择</option>*/
/* 								<option value="2">一次性合同</option>*/
/* 								<option value="1">长期合同</option>*/
/* 							</select>*/
/* */
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>订单编码</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="htm_contract.contract_code">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom: 5px;">*/
/* 							<label>企业名称</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.name">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>修改时间</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> > </option>*/
/* 								<option> &lt; </option>*/
/* 							</select>*/
/* 							<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 								<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 								<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="htm_contract.update_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 							</div>*/
/* 							<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 								<input id="date-timepicker1" data-type="gj" data-status="time" gjs=0 sear="htm_contract.update_time" class="date-timepicker1 form-control" style="height: 30px; width: 150px;    padding: 5px;">*/
/* 								<span class="input-group-addon" style="width:30px;">*/
/*                                         <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                     </span>*/
/* 							</div>-->*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>分配员工</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width: 180px" gjs=7 marketing-id="1" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 								<option value="">请选择</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>订单期限</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> > </option>*/
/* 								<option> &lt; </option>*/
/* 							</select>*/
/* 							<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 								<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 								<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="htm_contract.end_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 							</div>*/
/* 							<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 								<input id="date-timepicker1" data-type="gj" data-status="time" gjs=0 sear="htm_contract.end_time" class="date-timepicker1 form-control" style="height: 30px; width: 150px;    padding: 5px;">*/
/* 								<span class="input-group-addon" style="width:30px;">*/
/*                                         <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                     </span>*/
/* 							</div>-->*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>合同状态</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width:180px;" gjs=0 sear="htm_contract.status" data-type="gj">*/
/* 								<option value="">请选择</option>*/
/* 								<option value="0">未激活</option>*/
/* 								<option value="1">已激活</option>*/
/* 								<option value="2">已挂起</option>*/
/* 								<option value="3">已结束</option>*/
/* 								<option value="4">已作废</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>挂起天数</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> > </option>*/
/* 								<option> &lt; </option>*/
/* 							</select>*/
/* 							<input data-type="gj" gjs=0 sear=" htm_contract.used_time" type="text">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>备注</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="htm_contract.outh_remark">*/
/* 						</div>*/
/* */
/* 						<div style="text-align:center;clear:both;padding-top:10px; ">*/
/* 							<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/*                                     查询*/
/*                                 </button>*/
/* 							<button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 								                       重置*/
/* 								                    </button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="custom_table">*/
/* 				<table id="dynamic-table">*/
/* 					<thead>*/
/* 						<tr class="thColor">*/
/* 							<th class="center">*/
/* 								<label class="pos-rel">*/
/*                                     <input type="checkbox" class="ace" onclick="checkAll(this.checked)"/>*/
/*                                     <span class="lbl"></span>*/
/*                                 </label>*/
/* 							</th>*/
/* 							<th>操作</th>*/
/* 							<th data-num="1">合同类型</th>*/
/* 							<th data-num="2">订单编码</th>*/
/* 							<th data-num="3">企业名称</th>*/
/* 							<th data-num="4">分配员工</th>*/
/* 							<th data-num="5">订单期限</th>*/
/* 							<th data-num="6">合同状态</th>*/
/* 							<th data-num="10">挂起天数</th>*/
/* 							<th data-num="7">修改人</th>*/
/* 							<th data-num="8">修改时间</th>*/
/* 							<th data-num="9">作废原因</th>*/
/* 							<th data-num="10">备注</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* */
/* 					<tbody id="dynamic-table_data">*/
/* */
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/* 			<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 		<div align="left" style="padd_expenditeruing-left: 15px; float: left; width: 10%;" id="num"></div>*/
/* 		<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 		<div id="pageBar" class="pagination"></div>*/
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
/* 		<div class="row" id="template" style="display:none;">*/
/* 			<div style="margin-top:15px;">*/
/* 				<!-- style="width:180px;" class="required" msg="公司名称不能为空" -->*/
/* 				<label>合同类型： </label>*/
/* 				<select style="width:180px;">*/
/* 					<option value=""> --- 请选择 ---</option>*/
/* 					<option>长期合同</option>*/
/* 					<option>一次性合同</option>*/
/* 				</select>*/
/* 				<label>订单编码： </label>*/
/* 				<select style="width:180px;" class="required" msg="请选择订单编码" field="id">*/
/* 					<option value=""> --- 请选择 --- </option>*/
/* 				</select>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label>分配员工： </label>*/
/* 				<select style="width:180px;" class="required" msg="请选择分配员工" field="assign_staff">*/
/* 					<option value=""> --- 请选择 ---</option>*/
/* 				</select>*/
/* 				<label>订单期限： </label>*/
/* 				<input disabled>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label>合同状态： </label>*/
/* 				<select style="width:180px;" class="required" msg="请选择合同状态" field="status">*/
/* 					<option value=""> --- 请选择 --- </option>*/
/* 					<option value="0">未激活</option>*/
/* 					<option value="1">激活</option>*/
/* 				</select>*/
/* 				<!-- <label style="display:none;" class="hangup">挂起时间： </label>*/
/* 				<input style="display:none;" class="hangup" field="hang"> -->*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label>企业名称： </label>*/
/* 				<input disabled class="_customer">*/
/* 				<!--<label>使用时间： </label>*/
/* 				<input disabled>-->*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label style="float:left;"><i class='reqired_label'>*</i>备注： </label>*/
/* 				<textarea field="outh_remark" class="required" msg="备注不能为空" style="margin-left:5px;width:calc(100% - 80px);risize:none;">*/
/* */
/*                 </textarea>*/
/* 			</div>*/
/* 			<div style="text-align:center;margin-top:15px;">*/
/* 				<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* 				<button class="sure_button add">*/
/*                         <i class="fa fa-check" aria-hidden="true"></i>*/
/*                         保存*/
/*                     </button>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- 合同详情 -->*/
/* 		<div class="row" id="template3" style="display:none;">*/
/* 			<!-- 长期合同 -->*/
/* 			<div class="contractType" style="display:none;">*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>企业名称: </label>*/
/* 					<span field="khm_customer.name"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<!-- <label>仓位： </label>*/
/*                     <span syllable="pos_name"></span> -->*/
/* 					<label>合同编码： </label>*/
/* 					<span field="htm_contract.contract_num"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>创建人： </label>*/
/* 					<span field="htm_contract.create_by"></span>*/
/* 					<label>创建时间： </label>*/
/* 					<span field="htm_contract.create_time"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 维护周期： </label>*/
/* 					<span field="htm_contract.payment_cycle"></span>*/
/* 					<label> 订单来源： </label>*/
/* 					<span field="htm_contract.is_source"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 签约时间: </label>*/
/* 					<span field="htm_contract.signed_time"></span>*/
/* 					<label> 发票认证： </label>*/
/* 					<span field="htm_contract.is_tax"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 业务员： </label>*/
/* 					<span syllable="market"></span>*/
/* 					<label>备注：</label>*/
/* 					<span field="htm_contract.remark"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>服务产品： </label>*/
/* 					<span syllable="product_id" class="task"></span>*/
/* 					<label>服务数量： </label>*/
/* 					<span syllable="count" class="task"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>赠送数量： </label>*/
/* 					<span syllable="count_send" class="task"></span>*/
/* 					<!-- <label>标准价： </label>*/
/*                     <span syllable="pricing" class="task"></span>-->*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>服务单价： </label>*/
/* 					<span syllable="discount" class="task"></span>*/
/* 					<label>服务总额： </label>*/
/* 					<span field="htm_contract.discount_total"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>账本费： </label>*/
/* 					<span field="htm_contract.account_book"></span>*/
/* 					<!-- <label>收款方式： </label>*/
/*                     <span field="htm_contract.receivables_way"></span> -->*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>订单总额： </label>*/
/* 					<span contract-total field></span>*/
/* 					<label>收款周期： </label>*/
/* 					<span field="htm_contract.get_cycle"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>开始时间： </label>*/
/* 					<span syllable="start_time" class="task"></span>*/
/* 					<label>结束时间： </label>*/
/* 					<span syllable="end_time" class="task"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>审批人： </label>*/
/* 					<span field="htm_contract.auth_id1" class="task"></span>*/
/* 					<label>审批时间： </label>*/
/* 					<span field="htm_contract.auth_time1" class="task"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<table>*/
/* 						<thead>*/
/* 							<tr style="height:30px;">*/
/* 								<th class="center">服务产品</th>*/
/* 								<th class="center">月份</th>*/
/* 								<th class="center">应收时间</th>*/
/* 								<th class="center">应收金额</th>*/
/* 							</tr>*/
/* 							</tdead>*/
/* 							<tbody id="serviceInfo">*/
/* 								<!-- <tr style="height:30px;">*/
/*                                 <td class="center">记账报税</td>*/
/*                                 <td class="center">账本费</td>*/
/*                                 <td class="center">201710</td>*/
/*                                 <td class="center">100</td>*/
/*                             </tr>*/
/*                             <tr style="height:30px;">*/
/*                                 <td class="center">记账报税</td>*/
/*                                 <td class="center">201710-201711</td>*/
/*                                 <td class="center">201711</td>*/
/*                                 <td class="center">100</td>*/
/*                             </tr> -->*/
/* 							</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 				<!--<div style="margin-top:15px;">*/
/* 					<label style="float:left">上传图片：</label>*/
/* 					<div style="display:inline-block;margin-left:5px;" syllable="image">*/
/* */
/* 					</div>*/
/* 					<span syllable=""></span>*/
/* 				</div>-->*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>上传文件：</label>*/
/* 					<div style="display:inline-block;padding-left:5px;width:calc(100% - 75px);" syllable="file">*/
/* */
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<!-- 一次性合同 -->*/
/* 			<div class="contractType" style="display:none;">*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>公司名称： </label>*/
/* 					<span field="khm_customer.name"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>仓位： </label>*/
/* 					<span syllable="pos_name"></span>*/
/* 					<label>合同编码： </label>*/
/* 					<span field="htm_contract.contract_num"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>折后总额： </label>*/
/* 					<span field="htm_contract.discount_total"></span>*/
/* 					<label> 订单来源： </label>*/
/* 					<span field="htm_contract.is_source"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 创建人： </label>*/
/* 					<span field="htm_contract.create_by"></span>*/
/* 					<label>创建时间：</label>*/
/* 					<span field="htm_contract.create_time"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<!-- <label>收款方式： </label>*/
/*                     <span field="htm_contract.receivables_way"></span> -->*/
/* 					<label> 签约时间： </label>*/
/* 					<span field="htm_contract.signed_time"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 发票认证： </label>*/
/* 					<span field="htm_contract.is_tax"></span>*/
/* 					<label>业务员：</label>*/
/* 					<span syllable="market"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>备注：</label>*/
/* 					<span field="htm_contract.remark"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<table class="contract_content">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th>服务产品</th>*/
/* 								<th>数量</th>*/
/* 								<th>标准价</th>*/
/* 								<th>折后价</th>*/
/* 								<th>开始时间</th>*/
/* 								<th>结束时间</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody>*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label style="float:left">上传图片：</label>*/
/* 					<div style="display:inline-block;margin-left:5px;" syllable="image">*/
/* 					</div>*/
/* 					<span syllable=""></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label style="float:left;">上传文件：</label>*/
/* 					<div style="display:inline-block;padding-left:5px;width:calc(100% - 80px);" syllable="file">*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- 合同详情 -->*/
/* 		<div class="row" id="template2" style="display:none;">*/
/* 			<div style="margin-top:15px;" class="coordinate">*/
/* 				<!-- style="width:180px;" class="required" msg="公司名称不能为空" -->*/
/* 				<label>合同类型： </label>*/
/* 				<span field="htm_contract.contract_type"></span>*/
/* 				<label>订单编码： </label>*/
/* 				<span field="htm_contract.contract_code"></span>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;" class="coordinate" id="not_sure">*/
/* 				<!-- style="width:180px;" class="required" msg="公司名称不能为空" -->*/
/* 				<label>区域名称： </label>*/
/* 				<span syllable="area_name"></span>*/
/* 				<label>仓位： </label>*/
/* 				<span syllable="pos_name"></span>*/
/* 			</div>*/
/* 			<!--<div style="margin-top:15px;">-->*/
/* 				<!--<label>区域名称2： </label>-->*/
/* 				<!--<select>-->*/
/* 				  <!--<option> = </option>-->*/
/* 				<!--</select>-->*/
/* */
/* 				<!--<span syllable="area"></span>-->*/
/* 				<!--<span class="del_type">-->*/
/* 					<!--<label>仓位： </label>-->*/
/* 					<!--<span syllable="position"></span>-->*/
/* 				<!--</span>-->*/
/* */
/* 			<!--</div>-->*/
/* 			<div style="margin-top:15px;">*/
/* 				<table style="">*/
/* 					<tbody class="leader_info">*/
/* */
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/* 			*/
/* 			<div style="margin-top:15px;">*/
/* 				<label>合同状态： </label>*/
/* 				<span field="htm_contract.status"></span>*/
/* 				<span class="del_type">*/
/* 					<label>作废原因： </label>*/
/* 					<span field="htm_contract.del_type"></span>*/
/* 				</span>*/
/* */
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<span class="hang">*/
/* 					<label>挂起天数： </label>*/
/* 					<span field="htm_contract.hang"></span>*/
/* 				</span>*/
/* 				<label>订单期限： </label>*/
/* 				<span syllable="useful"></span>*/
/* 				<!--<label>使用时间： </label>*/
/* 				<span syllable="usetime"></span>-->*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label>企业名称： </label>*/
/* 				<span field="khm_customer.name"></span>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label>备注： </label>*/
/* 				<span field="htm_contract.outh_remark"></span>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- 合同编辑 -->*/
/* 		<div class="row" id="template1" style="display:none;">*/
/* 			<div style="margin-top:15px;" class="coordinate">*/
/* 				<!-- style="width:180px;" class="required" msg="公司名称不能为空" -->*/
/* 				<label>合同类型： </label>*/
/* 				<input disabled field="htm_contract.contract_type" type="text" style="background: #f5f5f5; border: none;">*/
/* 				<label>订单编码： </label>*/
/* 				<input disabled field="htm_contract.contract_code" type="text" style="background: #f5f5f5; border: none;">*/
/* 			</div>*/
/* 			<div style="margin-top:15px;display: none;" class="coordinate area_position">*/
/* 				<!-- style="width:180px;" class="required" msg="公司名称不能为空" -->*/
/* 				<label>区域名称： </label>*/
/* 				<select syllable="area" style="width: 180px !important;">*/
/* 					<option value="">请选择区域</option>*/
/* 				</select>*/
/* 				<label>仓位： </label>*/
/* 				<select syllable="position" style="width: 180px !important;">*/
/* 					<option value="">请选择仓位</option>*/
/* 				</select>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<table style="max-width: 96%">*/
/* 					<tbody class="leader_info">*/
/* */
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label>合同状态： </label>*/
/* 				<select style="width:180px;" class="required upload" msg="请选择合同状态" field="htm_contract.status">*/
/* 					<option value=""> --- 请选择 --- </option>*/
/* 					<option value="1">已激活</option>*/
/* 					<option value="2">已挂起</option>*/
/* 					<option value="3">已结束</option>*/
/* 					<option value="4">已作废</option>*/
/* 				</select>*/
/* 			</div>*/
/* 			<div class="add_reason_div" style="margin-top:15px; display: none;">*/
/* 				<label>作废原因： </label>*/
/* 				<select style="width: 180px" field="htm_contract.del_type" class="del_type upload cancel-reason select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 					<option value="0">请选择</option>*/
/* 				</select>*/
/* 				<button class="btn btn-info btn-sm addReason">添加</button>*/
/* 				<button class="btn btn-info btn-sm delReason">删除</button>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label>企业名称： </label>*/
/* 				<input disabled class="_customer" field="khm_customer.name" type="text" style="min-width:180px;background: #f5f5f5; border: none;">*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label style="float:left;">备注： </label>*/
/* 				<textarea field="htm_contract.outh_remark" class="required upload" msg="备注不能为空" style="margin-left:5px;width:calc(100% - 80px);risize:none;padding:5px;"></textarea>*/
/* 			</div>*/
/* 			<div id="sendMsg_1" customer_id="" style="height: 30px;line-height: 40px">*/
/* 				<label style="margin-left:0px;width: 148px !important">是否发送账期完成短信：</label>*/
/* 				<input type="radio" value="1" name="is_send_1">是*/
/* 				<input type="radio" value="2" name="is_send_1" checked="true">否*/
/* 			</div>*/
/* 			<div id="sendMsg_2" customer_id="" style="height: 30px;line-height: 40px">*/
/* 				<label style="margin-left:0px;width: 148px !important">是否发送合同续签短信：</label>*/
/* 				<input type="radio" value="1" name="is_send_2">是*/
/* 				<input type="radio" value="2" name="is_send_2" checked="true">否*/
/* 			</div>*/
/* 			<div id="sendMsg_3" customer_id="" style="height: 30px;line-height: 40px">*/
/* 				<label style="margin-left:0px;width: 148px !important">是否发送客户解约短信：</label>*/
/* 				<input type="radio" value="1" name="is_send_3">是*/
/* 				<input type="radio" value="2" name="is_send_3" checked="true">否*/
/* 			</div>*/
/* 			<div style="text-align:center;margin-top:15px;">*/
/* 				<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* 				<button class="sure_button add">*/
/*                         <i class="fa fa-check" aria-hidden="true"></i>*/
/*                         保存*/
/*                     </button>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div id="addReason" style="display:none;position: fixed; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: 1050;">*/
/* 			<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd; box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 				<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 					<span style="display: inline-block;">添加作废原因</span>*/
/* 					<a href="javascript:;" class="close_label" style="float:right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 				</div>*/
/* 				<div>*/
/* 				</div>*/
/* 				<div style="padding: 10px 50px;">*/
/* 					<label> 作废原因： </label>*/
/* 					<input class="required" style="height:28px;padding:5px;" field="name" msg="作废原因不能为空">*/
/* 					<!-- <input width="200px" style="margin: auto;" id="efile" /> -->*/
/* 					<!--<hr>-->*/
/* 				</div>*/
/* 				<div style="padding:15px;text-align:right;">*/
/* 					<button class="btn btn-info btn-sm save">保存</button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div id="export" style="display:none;position: fixed; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: 1050;">*/
/* 			<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 		            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 				<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 					<span style="display: inline-block;">导入合同</span>*/
/* 					<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 				</div>*/
/* 				<div>*/
/* 				</div>*/
/* 				<div style="padding: 10px 50px;">*/
/* 					<input type="file" width="200px" style="margin: auto;" id="efile">*/
/* 					<!--<hr>-->*/
/* 				</div>*/
/* 				<div style="padding:15px;text-align:right;">*/
/* 					<button id="ghItem" class=" btn">合同模板</button>*/
/* 					<button class="btn btn-info  submit" style="padding: 6px; border-radius: 0px;">保存</button>*/
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
/* 		cs.getNodes([140, 141]);*/
/* 		cs.dataRang();*/
/* 		var order = 'htm_contract.id desc';*/
/* 		var pagesize = 10;*/
/* 		var filter = 'htm_contract.auth_status1 = 2';*/
/* 		var employees = []; //所有员工*/
/* 		var shoukstatus=false;*/
/* 		var service_product = []; //所有服务产品				*/
/* 		*/
/* 		*/
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_contract/grid',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: "",*/
/* 				limit: pagesize,*/
/* 				type:2*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '.pageBar'*/
/* 			},*/
/* 			contentId: "#datalist", //默认排序*/
/* 			initOrder: "", //初始化sort*/
/* 			defaultOrder: order,*/
/* 			params: [{*/
/* 				id: "#dynamic-table",*/
/* 				field: ["", "","htm_contract.contract_type","htm_contract.contract_code", "khm_customer.name", "", "", "htm_contract.status",*/
/* 					"htm_contract.hang","htm_contract.update_by",  "htm_contract.update_time", "htm_contract.outh_remark"]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* 		*/
/* 		//获取所有员工*/
/* 		ykp.doAjax({*/
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
/* 					if(data[i]['name']) {*/
/* 						employees[data[i]['id']] = data[i]['name'];*/
/* 						$('.advandced-search').append(new Option(data[i]['name'], data[i]['id']));*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		});*/
/* */
/* 		//获取所有服务产品*/
/* 		ykp.doAjax({*/
/* 			url: '/api/api_product/f7',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				select: 'ckm_product.id,ckm_product.name,ckm_product.type,ckm_product.price',*/
/* 				filter: 'ckm_product.is_del <> 1'*/
/* 			},*/
/* 			success: function(res) {*/
/* 				service_product = res.data;*/
/* 			}*/
/* 		});*/
/* */
/* 		$('#flush').click(function() {*/
/* 			filter = 'htm_contract.auth_status1 = 2';*/
/* 			$('[pts="0"]').val('');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getDatalist();*/
/* 		})*/
/* */
/* 		$('.auto_renew').click(function() {*/
/* 			getDatalist(1);*/
/* 		})*/
/* */
/* 		//导入合同*/
/* 		importContract();*/
/* */
/* 		function importContract() {*/
/* 			$('.mergeItem').unbind('click').click(function() {*/
/* 				var flag = $(this).attr('imp');*/
/* */
/* 				var file;*/
/* 				$('#export').show();*/
/* */
/* 				//点击 × 关闭导入弹出层*/
/* 				$('.close_label').unbind('click').click(function() {*/
/* 					$(this).parents('#export').fadeOut();*/
/* 					$('#efile').after($('#efile').clone().val(""));*/
/* 					$('#efile').remove();*/
/* 				})*/
/* */
/* 				//切换文件*/
/* 				$('#efile').unbind('change').change(function() {*/
/* 					file = this.files[0];*/
/* 				})*/
/* */
/* 				var mUrl = flag == '0' ? ykp.api_url + "/resource/excel_templete/contract-one.xlsx" : ykp.api_url + '/resource/excel_templete/contract-long.xlsx';*/
/* 				var url = flag == '0' ? ykp.api_url + "/api/api_contract/one_upload_batch" : ykp.api_url + "/api/api_contract/long_upload_batch";*/
/* 				//导获取合同模板*/
/* */
/* 				$('#ghItem').unbind('click').click(function() {*/
/* 					window.open(mUrl);*/
/* 				})*/
/* */
/* 				//导入合同数据*/
/* 				$('.submit').unbind('click').click(function() {*/
/* 					if(file == undefined) {*/
/* 						ykp.prompt("请添加数据再上传");*/
/* 					}*/
/* */
/* 					var fd = new FormData();*/
/* 					fd.append('contract', file);*/
/* 					fd.append('login_token', ykp.getCookie('login_token'));*/
/* 					$.ajax({*/
/* 						url: url,*/
/* 						type: "post",*/
/* 						dataType: 'json',*/
/* 						data: fd,*/
/* 						cache: false,*/
/* 						contentType: false,*/
/* 						processData: false,*/
/* 						success: function(res) {*/
/* 							ykp.prompt("导入需要时间 请耐心等待");*/
/* 							setTimeout(function(){*/
/* 										if(res.data) {*/
/* 								*/
/* 								ykp.prompt("上传信息有误1");*/
/* 								$('#efile').after($('#efile').clone().val(""));*/
/* 								$('.label_popup').hide();*/
/* 								$('#efile').remove();*/
/* 								layui.use('layer',function(){*/
/* 									layui.layer.confirm('问题数据不能导入，是否下载查看', function(index){*/
/*                                         layer.closeAll();*/
/* 								        window.open(res.data);*/
/* */
/* 								    });*/
/* 								})*/
/* 								*/
/* 								*/
/* 							} else {*/
/* 								ykp.prompt("上传成功");*/
/* 								$('#efile').after($('#efile').clone().val(""));*/
/* 								$('#efile').remove();*/
/* 								$('#export').hide();*/
/* 								getDatalist();*/
/* 							}*/
/* 							},3000)*/
/* 					*/
/* */
/* 						},*/
/* 						error: function() {*/
/* 							$('#export').hide();*/
/* 							ykp.prompt("上传出错了...");*/
/* 						}*/
/* 					});*/
/* 				})*/
/* 			});*/
/* 		}*/
/* */
/* 		//添加合同授权*/
/* 		// $('#addItem').click(function() {*/
/* 		// 	showMark('#template');*/
/* 		// 	$('#templateCon .title').html('添加合同授权');*/
/* */
/* 		// 	$('#templateCon textarea').empty(); //清空文本域*/
/* */
/* 		// 	hangup();*/
/* */
/* 		// 	changetime();*/
/* */
/* 		// 	changedata();*/
/* */
/* 		// 	constractMsg();*/
/* */
/* 		// 	employeeMsg();*/
/* */
/* 		// 	companyMsg();*/
/* */
/* 		// 	$('#templateCon .add').click(function() {*/
/* 		// 		if(!cs.popValidate()) {*/
/* 		// 			return;*/
/* 		// 		}*/
/* 		// 		var postdata = {};*/
/* 		// 		$('#templateCon').find('input[field],select[field],textarea[field]').not(':hidden').each(function(i, e) {*/
/* 		// 			if(i == 1) {*/
/* 		// 				postdata[$(this).attr('field') + '_id'] = $(this).val();*/
/* 		// 				postdata[$(this).attr('field') + '_name'] = $(this).find('option:selected').text().trim();*/
/* 		// 			} else {*/
/* 		// 				postdata[$(this).attr('field')] = $(this).val();*/
/* 		// 			}*/
/* 		// 		});*/
/* 		// 		ykp.doAjax({*/
/* 		// 			url: '/api/api_contract/edit',*/
/* 		// 			method: 'post',*/
/* 		// 			data: postdata,*/
/* 		// 			success: function(res) {*/
/* 		// 				cs.close();*/
/* */
/* 		// 				getDatalist();*/
/* 		// 			}*/
/* 		// 		});*/
/* 		// 	});*/
/* 		// });*/
/* */
/* 		//所有公司 name , id*/
/* 		// function companyMsg() {*/
/* 		// 	ykp.doAjax({*/
/* 		// 		url: '/api/api_customer/f7',*/
/* 		// 		method: 'post',*/
/* 		// 		data: {*/
/* 		// 			select: 'khm_customer.name,khm_customer.id'*/
/* 		// 		},*/
/* 		// 		success: function(res) {*/
/* 		// 			var data = res.data;*/
/* 		// 			for(var i in data) {*/
/* 		// 				$('#templateCon select').eq(4).append(new Option(data[i]['name'], data[i]['id']));*/
/* 		// 			}*/
/* 		// 		}*/
/* 		// 	});*/
/* 		// }*/
/* */
/* 		//所有员工 name , id*/
/* 		// function employeeMsg(val) {*/
/* 		// 	ykp.doAjax({*/
/* 		// 		url: '/api/api_employees/f7',*/
/* 		// 		method: 'post',*/
/* 		// 		data: {*/
/* 		// 			select: 'bmm_employees.name,bmm_employees.id'*/
/* 		// 		},*/
/* 		// 		success: function(res) {*/
/* 		// 			var data = res.data;*/
/* 		// 			for(var i in data) {*/
/* 		// 				$('#templateCon select[field="assign_staff"]').append($(new Option(data[i]['name'], data[i]['id'])).attr('_name', data[i]['name']));*/
/* 		// 			}*/
/* 		// 			if(val) {*/
/* 		// 				$('#templateCon select[field="assign_staff"]').find('option[_name="' + val + '"]').attr('selected', true);*/
/* 		// 			}*/
/* 		// 		}*/
/* 		// 	});*/
/* 		// }*/
/* */
/* 		//未授权合同 code , starttime , endtime*/
/* 		// function constractMsg(type) {*/
/* 		// 	$('#templateCon select').eq(1).find('option').not(':first').remove();*/
/* 		// 	ykp.doAjax({*/
/* 		// 		url: '/api/api_contract/f7',*/
/* 		// 		method: 'post',*/
/* 		// 		data: {*/
/* 		// 			select: 'htm_contract.id,htm_contract.contract_code,htm_contract.start_time,htm_contract.end_time,khm_customer.name',*/
/* 		// 			filter: 'htm_contract.assign_staff_id = 0 ' + (type ? ('and htm_contract.contract_type = ' + type) : '')*/
/* 		// 		},*/
/* 		// 		success: function(res) {*/
/* 		// 			var data = res.data;*/
/* 		// 			var time = '';*/
/* 		// 			for(var i in data) {*/
/* 		// 				time = data[i]['start_time'] + ',' + data[i]['end_time'];*/
/* 		// 				$('#templateCon select').eq(1).append($(new Option(data[i]['contract_code'], data[i]['id'])).data('time', time).data('name', data[i]['name']));*/
/* 		// 			}*/
/* 		// 		}*/
/* 		// 	});*/
/* 		// }*/
/* */
/* 		//弹出层 切换合同类型 订单编码中的数据相应改变*/
/* 		// function changedata() {*/
/* 		// 	$('#templateCon select').eq(0).change(function() {*/
/* 		// 		constractMsg(this.selectedIndex);*/
/* 		// 	});*/
/* 		// }*/
/* */
/* 		//弹出层 切换订单编码 订单期限、使用时间、关联客户 change*/
/* 		// function changetime() {*/
/* 		// 	$('#templateCon select').eq(1).change(function() {*/
/* 		// 		if(this.selectedIndex != 0) {*/
/* 		// 			var time = $(this).find('option:selected').data('time').split(',');*/
/* 		// 			time = cs.getNowTime(time[0]) + ' ~ ' + cs.getNowTime(time[1]);*/
/* 		// 			$('#templateCon input:disabled').not('._customer').val(time);*/
/* 		// 			$('#templateCon ._customer').val($(this).find('option:selected').data('name'));*/
/* 		// 		} else {*/
/* 		// 			$('#templateCon input:disabled').val('');*/
/* 		// 		}*/
/* 		// 	});*/
/* 		// }*/
/* */
/* 		//弹出层 挂起时间显示 || 隐藏*/
/* 		// function hangup() {*/
/* 		// 	if($('#templateCon select[field="htm_contract.status"]')[0].selectedIndex == 3) {*/
/* 		// 		$('#templateCon .hangup').show();*/
/* 		// 	}*/
/* 		// 	$('#templateCon select[field="htm_contract.status"]').change(function() {*/
/* 		// 		if(this.selectedIndex == 3) {*/
/* 		// 			$('#templateCon .hangup').show();*/
/* 		// 		} else {*/
/* 		// 			$('#templateCon .hangup').hide();*/
/* 		// 		}*/
/* 		// 	});*/
/* 		// }*/
/* */
/* 		//切换每页显示的条目数*/
/* 		$('#changePageNum').change(function() {*/
/* 			pagesize = $(this).val();*/
/* 			ykp.setCookie('page_size',pagesize);*/
/* 			getDatalist();*/
/* 		})*/
/* */
/* 		//自定义列表*/
/* 		cs.custorm_check('#dynamic-table', '#dynamic-table_data', true);*/
/* */
/* 		//高级搜索列表显示与隐藏*/
/* 		$('.in').click(function() {*/
/* 			if($('#heightsearch').hasClass('active')) {*/
/* 				$('#heightsearch').removeClass('active').css('z-index', '');*/
/* 				$("#heightsearch1").slideUp();*/
/* 			}*/
/* 		});*/
/* 		$('#heightsearch').click(function() {*/
/* 			if($(this).hasClass('active')) {*/
/* 				$('.in').removeClass('modal-backdrop');*/
/* 				$(this).removeClass('active').css('z-index', '');*/
/* 				$("#heightsearch1").slideUp();*/
/* 			} else {*/
/* 				$('.in').addClass('modal-backdrop');*/
/* 				$("#heightsearch1").slideDown();*/
/* 				$(this).attr('class', 'btn btn-info btn-sm active').css('z-index', '1041');*/
/* 				cs.rest(false, '#heightsearch1');*/
/* 				// 高级搜索成立日期*/
/* 				cs.timeplug();*/
/* 			}*/
/* 		})*/
/* */
/* 		//高级搜索*/
/* 		function advancedSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_contract/grid',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: pagesize,*/
/* 					order: order*/
/* 				}*/
/* 			}*/
/* */
/* 			cs.hSearch('#search1', data, 'filter', false, function(res, _filter) {*/
/* 				filter = _filter;*/
/* 				$('.in').removeClass('modal-backdrop');*/
/* 				$("#heightsearch1").slideUp();*/
/* 				$("#heightsearch").removeClass('active').css('z-index', '');*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$('#dynamic-table_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 				} else {*/
/* 					addList(res);*/
/* 				}*/
/* 			}, 'htm_contract.auth_status1 = 2')*/
/* 		}*/
/* */
/* 		//普通搜索*/
/* 		function generalSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_contract/grid',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: pagesize,*/
/* 					order: order*/
/* 				}*/
/* 			}*/
/* */
/* 			cs.doSearch('#search', data, 'filter', false, function(res, _filter) {*/
/* 				filter = _filter;*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$('#dynamic-table_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 				} else {*/
/* 					addList(res);*/
/* 				}*/
/* 			}, 'htm_contract.auth_status1 = 2');*/
/* 		}*/
/* */
/* 		//获取合同列表数据*/
/* 		getDatalist(0,1);*/
/* */
/* 		function getDatalist(status, isInit,_page) {*/
/*             _page = _page ? _page :"";*/
/* 			if(isInit == 1){*/
/* 				ykp.setCookie("filter", "");*/
/* 				ykp.setCookie("where", "");*/
/* 			}*/
/* 			generalSearch();*/
/* 			advancedSearch();*/
/* 			var data = {*/
/*                 page: _page,*/
/* 				limit: pagesize,*/
/* 				order: order,*/
/* 				filter: filter*/
/* 			}*/
/* 			if(status) {*/
/* 				data['filter'] = filter + ' and htm_contract.ht_status = 1';*/
/* 			}*/
/* 			ykp.list({*/
/* 				url: '/api/api_contract/grid',*/
/* 				method: 'post',*/
/* 				data: data,*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt('暂无数据！');*/
/* 						}, 1000);*/
/* 						$('#dynamic-table_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					}*/
/* 					addList(res);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//数据处理*/
/* 		function addList(res) {*/
/* 			var data = res.data.items;*/
/* 			//td 显示 或 隐藏*/
/* 			var ths = $('.thColor th');*/
/* 			var styles = [];*/
/* */
/* 			// var nodes = ykp.getCookie('nodes').split(',');*/
/* 			// console.log($.inArray(36,nodes));*/
/* 			// console.log($.inArray(37,nodes));*/
/* */
/* 			for(i = 0; i < ths.length; i++) {*/
/* 				styles.push(ths.eq(i).css('display'));*/
/* 			}*/
/* */
/*             var html = [];*/
/* 			var task_detail = {}; //任务详情*/
/* 			var cStatus = ['未激活', '已激活', '已挂起', '已结束', '已作废']; //合同状态*/
/* 			var approve_statu = ['审批中', '审批失败', '审批成功']; //审批状态*/
/* 			var staff = []; //分配员工*/
/* 			var staff_detail = []; //分配员工详情*/
/* 			var usetime = ''; //订单期限*/
/* 			//var utilityTime = '';//使用时间*/
/* 			var hang = ''; //挂起天数*/
/* 			*/
/* 			*/
/* 			*/
/* 			*/
/* 			for(i = 0; i < data.length; i++) {*/
/* 				task_detail['product'] = [];*/
/* 				task = data[i]['task'];*/
/* 				for(var k in task) {*/
/* 					if(data[i]['htm_contract.contract_type'] == 1) {*/
/* 						staff = task[k]['staff'];*/
/* 						for(var z in staff) {*/
/* 							staff_detail.push(staff[z]['process'] + '：' + (staff[z]['user'] ? staff[z]['user']['name'] : ''));*/
/* 						}*/
/* 					}*/
/* */
/* 					if(data[i]['htm_contract.contract_type'] == 2) {*/
/* 						staff = task[k]['staff'][0];*/
/* 						if(staff) {*/
/* 							staff_detail.push(task[k]['productName'] + '：' + (staff['user'] ? staff['user']['name'] : ''));*/
/* 						}*/
/* 					}*/
/* */
/* 					if(k == 0) {*/
/* 						task_detail['start_time'] = task[k]['start_time'];*/
/* 						task_detail['end_time'] = task[k]['end_time'];*/
/* 					}*/
/* 					if(k != 0) {*/
/* 						task_detail['start_time'] = task_detail['start_time'] >= task[k]['start_time'] ? task[k]['start_time'] : task_detail['start_time'];*/
/* 						task_detail['end_time'] = task_detail['end_time'] > task[k]['end_time'] ? task_detail['end_time'] : task[k]['end_time'];*/
/* 					}*/
/* */
/* 				}*/
/* 				/***/
/* 				 * 1、订单已作废不显示续签*/
/* 				 * 2、当前时间在订单结束时间90天以内才可续签*/
/* 				 * 3、续签过不能续签*/
/* 				 *//* */
/* 				var enterStyle = data[i]['htm_contract.status'] != 3 ? ( (data[i]['htm_contract.end_time']  - new Date()*1000) < 60*60*24*90 ? (data[i]['htm_contract.is_renew'] == 1 ? 'none' : '') : 'none') : "none";*/
/* 				var product = data[i]['task'][0]['flow'].replace('[', '').replace(']', '');*/
/* 				hang = data[i]['htm_contract.hang'] ? (data[i]['htm_contract.hang'] * 24 * 60 * 60) : 0;*/
/* 				usetime = data[i]['htm_contract.start_time'] != '0' ? (cs.getNowTime(data[i]['htm_contract.start_time']) + ' ~ ' + cs.getNowTime(data[i]['htm_contract.end_time'])) : '';*/
/* 				/*utilityTime = data[i]['htm_contract.start_time'] != '0' ? (cs.getNowTime(eval(data[i]['htm_contract.start_time'] + '+' + hang)) + ' ~ ' + cs.getNowTime(eval(data[i]['htm_contract.end_time'] + '+' + hang))) : '';*//* */
/* */
/* 				var edit_statu = cs.getNodes([143], true);*/
/* */
/* 				html +=*/
/* 					'<tr data-id="' + data[i]['htm_contract.id'] + '" data-account_book="'+data[i]["htm_contract.account_book"]+'" data-discount_total="'+data[i]["htm_contract.discount_total"]+'" data-type="' + data[i]['htm_contract.contract_type'] + '" customer_id="' + data[i]['khm_customer.id'] + '"  start-time="' + data[i]['htm_contract.start_time'] + '" end-time="' + data[i]['htm_contract.end_time'] + '" flow ="' + product + '">' +*/
/* 					'<td style="display: ' + styles[0] + '" class="center">' +*/
/* 					'<label class="pos-rel">' +*/
/* 					'<input type="checkbox" name="check" class="ace"/>' +*/
/* 					'<span class="lbl"></span>' +*/
/* 					'</label>' +*/
/* 					'</td>' +*/
/* 					'<td style="display: ' + styles[1] + '">' +*/
/* 					'<label class="pos-rel">' +*/
/* 					'<a> <span style="cursor: pointer" title="详情" class="btOrange contractDetail"><i class="fa fa-info"></i></span></a> ' +*/
/* 					' <a contentAuthority="143" style="display:' + (edit_statu ? (data[i]['htm_contract.status'] == '4' ? 'none' : 'inline') : 'none') + ';"> <span style="cursor: pointer;" title="编辑" class="lbl itemadit btBlue" pos-id="' + data[i]['position']['pos_id'] + '"><i class="fa fa-pencil-square-o"></i></span></a> ' +*/
/* //					' <a style="display:' + enterStyle + '"> <span style="cursor: pointer;" class="lbl enter  btnBlue" contentAuthority="143">续签</span></a>' +*/
/* 					'</label>' +*/
/* 					'</td>' +*/
/* 					'<td style="display: ' + styles[2] + '" data-num="1">' + (data[i]['htm_contract.contract_type'] == 1 ? '长期合同' : '一次性合同') + '</td>' +*/
/* 					'<td style="display: ' + styles[3] + '" data-num="2"><a href="javascript:;" style=" color: #337ab7;" class="contract_detail pos-rel" title="合同详情">' + data[i]['htm_contract.contract_code'] + '</a></td>' +*/
/* 					'<td data-cid="' + data[i]['htm_contract.customer_id'] + '" style="display: ' + styles[4] + '" data-num="3">' + '<a href="#" class="customerDetail pos-rel">' + data[i]['khm_customer.name'] + '</a>' + '<label class="pos-rel"> <i class="iconBnt fa fa-info-circle" data-rel="tooltip" data-placement="right" data-html="true" title="' + cs.getRemark(data[i]['Remark']) + '" ></i></label> ' +*/
/* 					'<td style="display: ' + styles[5] + ';white-space: nowrap !important;" data-num="4" title="' + staff_detail.join('，') + '">' + staff_detail.join('，') + '</td>' +*/
/* 					'<td style="display: ' + styles[6] + '" data-num="5">' + usetime + '</td>' +*/
/* 					'<td style="display: ' + styles[7] + '" status="' + (cStatus[data[i]['htm_contract.status']]) + '" data-num="6">' + (cStatus[data[i]['htm_contract.status']]) + '</td>' +*/
/* 					'<td style="display: ' + styles[8] + '" data-num="10">' + data[i]['htm_contract.hang'] + '</td>' +*/
/* 					'<td style="display: ' + styles[9] + '" data-num="7">' + (employees[data[i]['htm_contract.update_by']] || "无") + '</td>' +*/
/* 					/*'<td style="display: ' + styles[9] + '" data-num="7">' + utilityTime + '</td>' +*//* */
/* 					'<td style="display: ' + styles[10] + '" data-num="8">' + (data[i]['htm_contract.update_time'] != '0' ? cs.getNowTime(data[i]['htm_contract.update_time'],true) : '') + '</td>' +*/
/* 					'<label class="pos-rel"><i class="iconBnt fa fa-info-circle" data-rel="tooltip" data-placement="right" data-html="true" title="' + cs.getRemark(data[i]['Remark']) + '" ></i></label>' +*/
/*                     '<td style="display: ' + styles[11] + '" data-num="9">' +(data[i]['htm_contract_type.name'] ? data[i]['htm_contract_type.name'] :"") + '</td>' +*/
/* 					'<td style="display: ' + styles[12] + '" data-num="10">' + data[i]['htm_contract.outh_remark'] + '</td>' +*/
/* 					'</tr>';*/
/* */
/* 				staff_id = [];*/
/* 				staff = [];*/
/* 				task_detail = {};*/
/* 				staff_detail = [];*/
/* 			}*/
/* */
/* 			$('#dynamic-table_data').html(html);*/
/* 			custom.showReamrk();*/
/* */
/* 			$("[data-rel='tooltip']").tooltip();*/
/* */
/* 			//编辑 & 作废事件绑定*/
/* 			editOrCancelOrApprove(data);*/
/* */
/* 			//合同详情*/
/* 			contentDetail();*/
/* */
/* 			enterXQ(); //续签确认*/
/* */
/* 			//派单详情*/
/* 			contractDetail();*/
/* */
/* 			custom.get_custom_info();*/
/* */
/* 			//全选函数*/
/* 			checkAll();*/
/* 		}*/
/* */
/* 		function enterXQ() {*/
/* 			$('.enter').click(function() {*/
/* 				var contract_id = $(this).parents('tr').attr('data-id');*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_contract/change_ht_status',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						contract_id: contract_id,*/
/* 						ht_status: 2*/
/* 					},*/
/* 					success: function(res) {*/
/* 						ykp.prompt('续签合同确认成功！');*/
/* 						getDatalist();*/
/* 					}*/
/* 				})*/
/* 			})*/
/* 		}*/
/* */
/* 		//详情*/
/* 		function contractDetail() {*/
/* 			$('.contractDetail').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				var type = $(this).parents('tr').attr('data-type');*/
/* 				showMark('#template2');*/
/* 				$('#showBox .title').text('派单详情');*/
/* 				var delType = {};*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_contract/get_del_type',*/
/* 					method: 'get',*/
/* 					data: {},*/
/* 					async:false,*/
/* 					success: function(res) {*/
/* 							var data = res.data;*/
/* 							for(var i in data) {*/
/* 								delType[data[i]['id']] = data[i]['name']*/
/* 							}*/
/* 					}*/
/* 				})*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_contract/contract_info',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						id: id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						var task = data['task'];*/
/* 						var statu = ['未激活', '已激活', '已挂起', '已结束', '已作废']; //合同状态*/
/* 						var usetime = ''; //订单期限*/
/* 						//var utilityTime = '';//使用时间*/
/* 						var task_detail = {}; //任务详情*/
/* 						var hang = ''; //挂起天数*/
/* */
/* 						for(var k in task) {*/
/* */
/* 							if(k == 0) {*/
/* 								task_detail['start_time'] = task[k]['start_time'];*/
/* 								task_detail['end_time'] = task[k]['end_time'];*/
/* 							}*/
/* */
/* 							if(k != 0) {*/
/* 								task_detail['start_time'] = task_detail['start_time'] >= task[k]['start_time'] ? task[k]['start_time'] : task_detail['start_time'];*/
/* 								task_detail['end_time'] = task_detail['end_time'] > task[k]['end_time'] ? task_detail['end_time'] : task[k]['end_time'];*/
/* 							}*/
/* 						}*/
/* */
/* 						hang = data['htm_contract.hang'] ? (data['htm_contract.hang'] * 24 * 60 * 60) : 0;*/
/* 						usetime = data['htm_contract.start_time'] != '0' ? (cs.getNowTime(data['htm_contract.start_time']) + ' ~ ' + cs.getNowTime(data['htm_contract.end_time'])) : '';*/
/* 						/!*utilityTime = data['htm_contract.start_time'] != '0' ? (cs.getNowTime(eval(data['htm_contract.start_time'] + '+' + hang)) + ' ~ ' + cs.getNowTime(eval(data['htm_contract.end_time'] + '+' + hang))) : ''	;*!/*/
/* 						$('#templateCon [field]').each(function(i, e) {*/
/* 							if($(this).attr('field') == 'htm_contract.contract_type') {*/
/* 								$(this).text(data[$(this).attr('field')] == '1' ? '长期合同' : '一次性合同');*/
/* 								return true;*/
/* 							}*/
/* 							if($(this).attr('field') == 'htm_contract.status') {*/
/* 								$(this).text(statu[data[$(this).attr('field')]]);*/
/* 								if(data[$(this).attr('field')] == 2){*/
/* 									$("#templateCon .hang").show();*/
/* 									$("#templateCon .del_type").hide();*/
/* 								}else if(data[$(this).attr('field')] == 4){*/
/* 									$("#templateCon .hang").hide();*/
/* 									$("#templateCon .del_type").show();*/
/* 								}*/
/* 								return true;*/
/* 							}*/
/* 							if($(this).attr('field') == 'htm_contract.del_type') {*/
/* 								$(this).text(delType[data[$(this).attr('field')]]);*/
/* 								return true;*/
/* 							}*/
/* 							$(this).text(data[$(this).attr('field')]);*/
/* 						});*/
/* */
/* 						$('#templateCon [syllable="useful"]').text(usetime);*/
/* 						if(data['htm_contract.contract_type'] == 1){*/
/* 							$('#templateCon [syllable="pos_name"]').text(data['pos_name']);*/
/* 							ykp.doAjax({*/
/* 								url: '/api/api_customer/get_ckm_position_list',*/
/* 								method: 'post',*/
/* 								async: false,*/
/* 								data: {*/
/* 									id: data['pos_id']*/
/* 								},*/
/* 								success: function(res) {*/
/* 									$('#templateCon [syllable="area_name"]').text(res.data.city);*/
/* 								}*/
/* 							});*/
/* 						}else {*/
/* 							$('#not_sure').remove();*/
/* 							$('#not_sure').hide();*/
/* 						}*/
/* */
/* 						//$('#templateCon [syllable="usetime"]').text(utilityTime);*/
/* 						if(data['htm_contract.contract_type'] == 1) {*/
/* 							var service_info = data['task'][0]['staff'];*/
/* 							for(var i in service_info) {*/
/* 								html = $(*/
/* 									`<tr>*/
/* 										<td style="width:15%;width:60px;">*/
/* 											<label>${service_info[i]['process']}：</label>*/
/* 										</td>*/
/* 										<td style="width:39%; padding-left: 4px;"></td>*/
/* 										<td style="width:10px;"><label style="text-align:left;width:62px;">任务等级：</label></td>*/
/* 										<td>${service_info[i]['lv']}</td>*/
/* 									</tr>`*/
/* 								);*/
/* */
/* 								if(service_info[i]['staff_id'] != '0') {*/
/* 									html.find('td').eq(1).text(employees[service_info[i]['staff_id']]);*/
/* 								}*/
/* 								if(service_info[i]['staff_id'] == '0') {*/
/* 									html.find('td').eq(1).text('空');*/
/* 								}*/
/* */
/* 								$('#templateCon .leader_info').append(html);*/
/* 							}*/
/* 						}*/
/* */
/* 						if(data['htm_contract.contract_type'] == 2) {*/
/* 							var task = data['task'];*/
/* 							for(var i in task) {*/
/* 								html = $(*/
/* 									`<tr>*/
/* 										<td style="width:50%;">${task[i]['productName']}</td>*/
/* 										<td></td>*/
/* 									</tr>`*/
/* 								);*/
/* */
/* 								if(task[i]['staff'].length > 0) {*/
/* 									if(task[i]['staff'][0]['staff_id'] != '0') {*/
/* 										html.find('td').eq(1).text(employees[task[i]['staff'][0]['staff_id']]);*/
/* 									}*/
/* 									if(task[i]['staff'][0]['staff_id'] == '0') {*/
/* 										html.find('td').eq(1).text('空');*/
/* 									}*/
/* 								}*/
/* 								$('#templateCon .leader_info').append(html);*/
/* 							}*/
/* 						}*/
/* 					}*/
/* 				})*/
/* 			});*/
/* 		}*/
/* */
/* 		//查看合同详情*/
/* 		function contentDetail() {*/
/* 			$('.contract_detail').unbind('click').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				var type = $(this).parents('tr').attr('data-type') - 1;*/
/* 				showMark('#template3');*/
/* 				$('#showBox .title').text('合同详情');*/
/* */
/* 				$('#templateCon .contractType').eq(type).show();*/
/* */
/* 				ykp.doAjax({*/
/* 					url: '/api/api_contract/contract_info',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						id: id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						addDetailData(res, type);*/
/* 					}*/
/* 				});*/
/* 			});*/
/* 		}*/
/* */
/* 		//添加详情数据*/
/* 		function addDetailData(res, type) {*/
/* 			var data = res.data;*/
/* 			var market = data['market']; //业务员*/
/* 			var image = data['HT_image']; //图片*/
/* 			var file = data['HT_file']; //文件*/
/* 			var task = data['task']; //服务产品*/
/* 			var cycle = {*/
/* 				'1': '每月',*/
/* 				'3': '季度',*/
/* 				'6': '半年',*/
/* 				'12': '每年'*/
/* 			}; //维护周期*/
/* 			var salesman_id = []; //业务员员id*/
/* 			var salesman = []; //业务员*/
/* 			// var payment = ['','现金','支付宝','微信','银行卡'];//收款方式*/
/* 			var field = '';*/
/* */
/* 			$('#templateCon .contractType').eq(type).find('[field]').each(function(i, e) {*/
/* 				if($(this).attr('field') == 'htm_contract.signed_time' || $(this).attr('field') == 'htm_contract.create_time' ||  $(this).attr('field') == 'htm_contract.auth_time1') {*/
/* 					$(this).text(cs.getNowTime(data[$(this).attr('field')],true));*/
/* 					return true;*/
/* 				}*/
/* 				if($(this).attr('field') == 'htm_contract.is_source') {*/
/* 					$(this).text(data[$(this).attr('field')] == '1' ? '线上' : '线下');*/
/* 					return true;*/
/* 				}*/
/* 				if($(this).attr('field') == 'htm_contract.create_by') {*/
/* 					$(this).text(employees[data[$(this).attr('field')]]);*/
/* 					return true;*/
/* 				}*/
/* 				if($(this).attr('field') == 'htm_contract.is_tax') {*/
/* 					$(this).text(data[$(this).attr('field')] == '0' ? '否' : '是');*/
/* 					return true;*/
/* 				}*/
/* 				// if($(this).attr('field') == 'htm_contract.payment_cycle'){*/
/* 				//     $(this).text(cycle[data[$(this).attr('field')]]);*/
/* 				//     return true;*/
/* 				// }*/
/* 				if($(this).attr('field') == 'htm_contract.get_cycle') {*/
/* 					$(this).text(data[$(this).attr('field')] + '个月');*/
/* 					return true;*/
/* 				}*/
/* 				if($(this).attr('field') == 'htm_contract.payment_cycle') {*/
/* 					$(this).text(cycle[data[$(this).attr('field')]]);*/
/* 					return true;*/
/* 				}*/
/* 				if($(this).attr('field') == 'htm_contract.receivables_way') {*/
/* 					$(this).text(payment[data[$(this).attr('field')]]);*/
/* 					return true;*/
/* 				}*/
/* 				$(this).text(data[$(this).attr('field')]);*/
/* 			});*/
/* */
/* 			$('#templateCon [contract-total]').text(eval(data['htm_contract.account_book'] + '+' + data['htm_contract.discount_total']));*/
/* */
/* 			//仓位*/
/* 			$('#templateCon [syllable="pos_name"]').text(data['position']['pos_name']);*/
/* */
/* 			//业务员*/
/* 			var emps = [];*/
/* 			for(var i in market) {*/
/* 				emps.push(market[i]['info']['name']);*/
/* 			}*/
/* 			$('#templateCon [syllable="market"]').text(emps.join(','));*/
/* */
/* 			//图片*/
/* 			var html = [];*/
/* 			for(var i in image) {*/
/* 				html.push(*/
/* 					`<img src="${image[i]['url']}" style="width:60px;height:60px;"/>`*/
/* 				);*/
/* 			}*/
/* 			$('#templateCon [syllable="image"]').html(html.join(''));*/
/* */
/* 			//文件*/
/* 			html = [];*/
/* 			for(var i in file) {*/
/* 				html.push(*/
/* 					`<label class="btn btn-info btn-sm" style="margin-bottom:5px;width:initial;">*/
/*                         ${file[i]['name']}*/
/*                     </label>`*/
/* 				);*/
/* 			}*/
/* 			$('#templateCon [syllable="file"]').html(html.join(''));*/
/* */
/* 			//如果是查看长期合同详情，根据服务产品，开始日期，数量，赠送月份，周期，签约时间*/
/* 			//折后价，账本费生成相应table*/
/* 			if(type == 0) {*/
/* 				generateTable(data['htm_contract.get_cycle'], data['htm_contract.account_book'], task[0], data['htm_contract.signed_time']);*/
/* 			}*/
/* */
/* 			//服务产品信息*/
/* 			var services = {}; //所有服务产品*/
/* 			for(var i in service_product) {*/
/* 				services[parseInt(service_product[i]['id']) + ''] = service_product[i]['name'];*/
/* 			}*/
/* 			//长期合同*/
/* 			if(type == 0) {*/
/* 				$('#templateCon .task').each(function(i, e) {*/
/* 					if($(this).attr('syllable') == 'start_time' || $(this).attr('syllable') == 'end_time') {*/
/* 						$(this).text(cs.getNowTime(task[0][$(this).attr('syllable')]));*/
/* 						return true;*/
/* 					}*/
/* 					if($(this).attr('syllable') == 'product_id') {*/
/* 						$(this).text(services[task[0][$(this).attr('syllable')]]);*/
/* 						return true;*/
/* 					}*/
/* 					$(this).text(task[0][$(this).attr('syllable')]);*/
/* 				});*/
/* 			}*/
/* 			// 一次性合同*/
/* 			if(type == 1) {*/
/* 				html = [];*/
/* 				for(var i in task) {*/
/* 					/*console.log(task[i]);*//* */
/* 					html.push(*/
/* 						`<tr>*/
/*                             <td>${task[i]['productName']}</td>*/
/*                             <td>${task[i]['count']}</td>*/
/*                             <td>${task[i]['pricing']}</td>*/
/*                             <td>${task[i]['discount']}</td>*/
/*                             <td>${cs.getNowTime(task[i]['start_time'])}</td>*/
/*                             <td>${cs.getNowTime(task[i]['end_time'])}</td>*/
/*                         </tr>`*/
/* 					);*/
/* 				}*/
/* 				$('#templateCon .contract_content tbody').html(html.join(''));*/
/* 			}*/
/* 		}*/
/* */
/* 		//添加详情table表数据*/
/* 		//period 周期，account_book 账本费，product 产品信息，signed_time 签约时间*/
/* 		function generateTable(period, account_book, product, signed_time) {*/
/* 			//产品名称*/
/* 			// console.log(product);*/
/* 			var product_id = product['product_id'];*/
/* 			var product_name = product['productName'];*/
/* 			// for(var i in service_product){*/
/* 			//     if(parseInt(service_product[i]['id']) == product_id){*/
/* 			//         product_name = service_product[i]['name'];*/
/* 			//         break;*/
/* 			//     }*/
/* 			// }*/
/* */
/* 			var html = [];*/
/* 			var account_book = parseFloat(account_book);*/
/* 			html.push(*/
/* 				`<tr>*/
/*                     <td class="center">${product_name}(账本费)</td>*/
/*                     <td class="center"></td>*/
/*                     <td class="center">${new Date(signed_time * 1000).toLocaleDateString().replace(/\//g,'-')}</td>*/
/*                     <td class="center">${account_book.toFixed(2)}</td>*/
/*                 </tr>`*/
/* 			);*/
/* */
/* 			var months = generateMonth(period, product);*/
/* */
/* 			for(var i in months) {*/
/* 				html.push(*/
/* 					`<tr>*/
/*                         <td class="center">${product_name}</td>*/
/*                         <td class="center">${months[i]['date']}</td>*/
/*                         <td class="center">${months[i]['date'].lastIndexOf('~') == -1 ? months[i]['date'] + '-01' : months[i]['date'].substring(0,months[i]['date'].lastIndexOf('~')) + '-01'}</td>*/
/*                         <td class="center">${(product['discount'] * months[i]['acount']).toFixed(2)}</td>*/
/*                     </tr>`*/
/* 				);*/
/* 			}*/
/* */
/* 			if(product['count_send'] != 0) {*/
/* 				var _product = {};*/
/* 				var last_item = months[months.length - 1]['date'].lastIndexOf('~') == -1 ? months[months.length - 1]['date'] : months[months.length - 1]['date'].substring(months[months.length - 1]['date'].lastIndexOf('~') + 1);*/
/* */
/* 				var send_start_time = addMonth(new Date(last_item), 1) / 1000;*/
/* 				_product['start_time'] = send_start_time;*/
/* 				_product['count'] = product['count_send'];*/
/* 				var _months = generateMonth(period, _product);*/
/* 				for(var i in _months) {*/
/* 					html.push(*/
/* 						`<tr>*/
/*                             <td class="center">${product_name}(赠送)</td>*/
/*                             <td class="center">${_months[i]['date']}</td>*/
/*                             <td class="center">0000-00-00</td>*/
/*                             <td class="center">0.00</td>*/
/*                         </tr>`*/
/* 					);*/
/* 				}*/
/* 			}*/
/* */
/* 			$('#templateCon #serviceInfo').html(html.join(''));*/
/* 		}*/
/* */
/* 		//生成服务产品服务期间的所有以周期和开始时间生成的所有服务月份*/
/* 		function generateMonth(period, product) {*/
/* 			var start_time = new Date(product['start_time'] * 1000); //开始时间*/
/* 			var start_month = start_time.getMonth() + 1; //开始月份*/
/* 			var times; //所需服务次数*/
/* */
/* 			times = Math.ceil(product['count'] / period);*/
/* */
/* 			// var index;//开始月份在周期中的下标*/
/* 			// if(period != 1){*/
/* 			//     index = (start_month > period ? (start_month % period != 0 ? start_month % period : period) : start_month) - 1;*/
/* */
/* 			//     if(index == 0){*/
/* 			//         times = Math.ceil(product['count'] / period);*/
/* 			//     }*/
/* 			//     if(index != 0){*/
/* 			//         times = 1 + Math.ceil((product['count'] - period + index) / period);*/
/* 			//     }*/
/* 			// }*/
/* */
/* 			var months = []; //所有服务月份*/
/* 			for(var i = 0; i < times; i++) {*/
/* 				if(i == 0) {*/
/* 					if(i == (times - 1)) {*/
/* 						months.push(formatDate(addMonth(start_time, i * period), addMonth(start_time, product['count'] - 1)));*/
/* 					} else*/
/* 						months.push(formatDate(addMonth(start_time, i * period), addMonth(start_time, (i + 1) * period - 1)));*/
/* 				}*/
/* 				if(i != (times - 1) && i != 0) {*/
/* 					months.push(formatDate(addMonth(start_time, i * period), addMonth(start_time, (i + 1) * period - 1)));*/
/* 				}*/
/* 				if(i == (times - 1) && i != 0) {*/
/* 					months.push(formatDate(addMonth(start_time, i * period), addMonth(start_time, product['count'] - 1)));*/
/* 				}*/
/* */
/* 				//     if(period == 1){*/
/* 				//         months.push(formatDate(addMonth(start_time,i)));*/
/* 				//     }*/
/* 				//     if(period != 1){*/
/* 				//         if(index == period - 1){*/
/* */
/* 				//             if(i == 0){*/
/* 				//                 months.push(formatDate(start_time));*/
/* 				//             }*/
/* 				//             if(i != 0 && i != times - 1){*/
/* 				//                 months.push(formatDate(addMonth(start_time,i * period - index),addMonth(start_time,(i + 1) * period - index - 1)));*/
/* 				//             }*/
/* 				//             if(i == times - 1 && i != 0){*/
/* 				//                 if(product['count'] - (i * period - index) == 1){*/
/* 				//                     months.push(formatDate(addMonth(start_time,i * period - index)));*/
/* 				//                 }*/
/* 				//                 if(product['count'] - (i * period - index) != 1){*/
/* 				//                      months.push(formatDate(addMonth(start_time,i * period - index),addMonth(start_time,i * period - index + (product['count'] - (i * period - index) - 1))));*/
/* 				//                 }*/
/* 				//             }*/
/* 				//         }*/
/* 				//         if(index != period - 1){*/
/* 				//             if(i == 0){*/
/* 				//                 // console.log(period - index - 1);*/
/* 				//                 months.push(formatDate(start_time,addMonth(start_time,period - index - 1)));*/
/* 				//             }*/
/* 				//             if(i != 0 && i != times - 1){*/
/* 				//                 months.push(formatDate(addMonth(start_time,i * period - index),addMonth(start_time,(i + 1) * period - index - 1)));*/
/* 				//             }*/
/* 				//             if(i == times - 1 && i != 0){*/
/* 				//                 if(product['count'] - (i * period - index) == 1){*/
/* 				//                     months.push(formatDate(addMonth(start_time,i * period - index)));*/
/* 				//                 }*/
/* 				//                 if(product['count'] - (i * period - index) != 1){*/
/* 				//                     months.push(formatDate(addMonth(start_time,i * period - index),addMonth(start_time,i * period - index + (product['count'] - (i * period - index) - 1))));   */
/* 				//                 }*/
/* 				//             }*/
/* 				//         }*/
/* 				//     }*/
/* 			}*/
/* 			return months;*/
/* 		}*/
/* */
/* 		//将时间转换为指定格式*/
/* 		function formatDate(date1, date2) {*/
/* 			// console.log( date1.getMonth() + ',' + date2.getMonth());*/
/* 			var data = {};*/
/* 			var date = ykp.formatDate(date1, 'YYYY-MM') + '~' + ykp.formatDate(date2, 'YYYY-MM');*/
/* 			data['date'] = date;*/
/* 			data['acount'] = date2.getFullYear() > date1.getFullYear() ? date2.getMonth() + 13 - date1.getMonth() : date2.getMonth() - date1.getMonth() + 1;*/
/* 			return data;*/
/* 		}*/
/* */
/* 		//日期增加指定月份*/
/* 		function addMonth(date, num) {*/
/* 			num = parseInt(num);*/
/* 			var sDate = date;*/
/* */
/* 			var sYear = sDate.getFullYear();*/
/* 			var sMonth = sDate.getMonth() + 1;*/
/* 			var sDay = sDate.getDate();*/
/* 			var sHour = sDate.getHours();*/
/* 			var sMinute = sDate.getMinutes();*/
/* 			var sSecond = sDate.getSeconds();*/
/* */
/* 			var eYear = sYear;*/
/* 			var eMonth = sMonth + num;*/
/* 			var eDay = sDay;*/
/* */
/* 			var cwfz = false; //存放新公司 上一个合同是否有合同负责人  */
/* */
/* 			while(eMonth > 12) {*/
/* 				eYear++;*/
/* 				eMonth -= 12;*/
/* 			}*/
/* */
/* 			var eDate = new Date(eYear, eMonth - 1, eDay, sHour, sMinute, sSecond);*/
/* */
/* 			while(eDate.getMonth() != eMonth - 1) {*/
/* 				eDay--;*/
/* 				eDate = new Date(eYear, eMonth - 1, eDay, sHour, sMinute, sSecond);*/
/* 			}*/
/* */
/* 			// console.log(new Date(eDate.getTime()).getMonth());*/
/* 			return eDate;*/
/* 		}*/
/* */
/* 		//合同状态切换至已作废,选择作废原因*/
/* 		function cancel_reason(reason) {*/
/* 			$('#templateCon [field="htm_contract.status"]').unbind('change').change(function() {*/
/* 				if($(this).val() == '4') {*/
/* 					$('.add_reason_div').css({*/
/* 						'display': ''*/
/* 					});*/
/* 					$('#templateCon .cancel-reason').prop('disabled', false);*/
/* 					$('#templateCon .addReason').prop("disabled", false);*/
/* 					delReason(reason);*/
/* 				}*/
/* 				if($(this).val() != '4') {*/
/* 					$('.add_reason_div').css({*/
/* 						'display': 'none'*/
/* 					});*/
/* 					$('#templateCon .cancel-reason').prop('disabled', true);*/
/* 					$('#templateCon .addReason').prop("disabled", true);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//获取所有作废原因*/
/* 		function getReasons(reason) {*/
/* 			$('#templateCon .cancel-reason').find('option').not(':first').remove();*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_contract/get_del_type',*/
/* 				method: 'get',*/
/* 				data: {},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					var reason_html = [];*/
/* 					$('#templateCon .cancel-reason').select2({*/
/* 						allowClear: true*/
/* 					});*/
/* 					for(var i in data) {*/
/* 						reason_html.push('<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>');*/
/* 					}*/
/* 					$('#templateCon .cancel-reason').append(reason_html.join(''));*/
/* 					$('#templateCon .cancel-reason').val(reason).trigger('change');*/
/* */
/* 					if($('#templateCon [field="htm_contract.status"]').val() != '4') {*/
/* 						$('.add_reason_div').css({*/
/* 							'display': 'none'*/
/* 						});*/
/* 						$('#templateCon .cancel-reason').prop("disabled", true);*/
/* 						$('#templateCon .addReason').prop("disabled", true);*/
/* 					} else {*/
/* 						$('.add_reason_div').css({*/
/* 							'display': ''*/
/* 						});*/
/* 						$('#templateCon .cancel-reason').prop("disabled", false);*/
/* 						$('#templateCon .addReason').prop("disabled", false);*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//新增作废原因*/
/* 		function addReason(reason) {*/
/* 			$('#templateCon .addReason').unbind('click').click(function() {*/
/* 				$('#addReason').show();*/
/* */
/* 				//保存作废原因*/
/* 				$('#addReason .save').unbind('click').click(function() {*/
/* 					var postdata = {*/
/* 						name: $('#addReason [field="name"]').val().trim()*/
/* 					};*/
/* */
/* 					if(!postdata.name) {*/
/* 						ykp.prompt('请填写作废原因');*/
/* 						$('#addReason [field="name"]').val('');*/
/* 						return;*/
/* 					}*/
/* */
/* 					ykp.doAjax({*/
/* 						url: '/api/api_contract/add_del_type',*/
/* 						method: 'post',*/
/* 						data: postdata,*/
/* 						success: function(res) {*/
/* 							ykp.prompt('作废原因添加成功');*/
/* 							$('#addReason [field="name"]').val("");*/
/* 							$('#addReason .close_label').click();*/
/* 							getReasons(reason); //获取所有作废原因*/
/* 						}*/
/* 					});*/
/* */
/* 				});*/
/* */
/* 				//关闭添加作废原因*/
/* 				$('#addReason .close_label').unbind('click').click(function() {*/
/* 					$('#addReason').hide();*/
/* 				});*/
/* 			});*/
/* 		}*/
/* */
/* 		//根据仓位id获取仓位负责人*/
/* 		function getPositionInfo() {*/
/* 			var positionInfo;*/
/* 			var positionInfo1;*/
/* 			var id = $('#templateCon').find('select[syllable=position]').val();*/
/* */
/* 			ykp.doAjax({*/
/* 				url: '/api/api_customer/get_ckm_position_list2',*/
/* 				method: 'get',*/
/* 				async: false,*/
/* 				data: {*/
/* 					id: id*/
/* 				},*/
/* 				success: function(res) {*/
/* 					positionInfo = res.data;*/
/* 				}*/
/* 			});*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_customer/get_ckm_position_list',*/
/* 				method: 'post',*/
/* 				async: false,*/
/* 				data: {*/
/* 					id: id*/
/* 				},*/
/* 				success: function(res) {*/
/* 					positionInfo1 = res.data;*/
/* 				}*/
/* 			})*/
/* 			return {*/
/* 				positionInfo: positionInfo,*/
/* 				positionInfo1: positionInfo1*/
/* 			}*/
/* 		}*/
/* */
/* 		//获取所有区域，切换区域，切换仓位*/
/* 		//ele1 区域节点*/
/* 		//ele2 仓位节点*/
/* 		function getAllAreasAndChangeAreaToChangePositions(ele1, ele2, position, data) {*/
/* 			var flow = JSON.parse(data.task[0]['flow']);*/
/* 			var _data = data;*/
/* 			//获取所有区域*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_accountancies/get_all_pos',*/
/* 				method: 'get',*/
/* 				data: {*/
/* */
/* 				},*/
/* 				async:false,*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					//区域信息html*/
/* 					var area_html = [];*/
/* 					for(var i in data) {*/
/* 						area_html.push('<option value="' + i + '">' + i + '</option>');*/
/* 					}					*/
/* 					ele1.html(area_html.join(''));*/
/* 					var posId = "";*/
/* 					//切换区域，切换仓位*/
/* 					ele1.change(function() {*/
/* 						//清空仓位信息*/
/* 						ele2.html('<option value="">请选择仓位</option>').select2();*/
/* */
/* 						//区域*/
/* 						var area = $(this).val();*/
/* */
/* 						//如果区域不存在，则返回*/
/* 						if(!area) {*/
/* 							return;*/
/* 						}*/
/* */
/* 						var _data = data[area];*/
/* 						//仓位信息html*/
/* 						var position_html = [];*/
/* 						for(var i in _data) {*/
/* 							position_html.push('<option value="' + _data[i]['id'] + '">' + _data[i]['name'] + '</option>');*/
/* 							posId = _data[i]['id'];*/
/* 						}*/
/* 						ele2.append(position_html.join(''));*/
/* 					});*/
/* */
/* 					//如果存在了仓位信息，就默认选中*/
/* 					if(position) {*/
/* 						for(var i in data) {*/
/* 							for(var j in data[i]) {*/
/* 								if(position['pos_id'] == data[i][j]['id']) {*/
/* 									ele1.val(i).trigger('change');*/
/* 									ele2.val(position['pos_id']).trigger('change');*/
/* 									break;*/
/* 								}*/
/* 							}*/
/* 						}*/
/* 					} else {*/
/* 						for(var i in data) {*/
/* 							ele1.val(i).trigger('change');*/
/* 							ele2.val(posId).trigger('change');*/
/* 							getfuzeren(flow,_data['task'][0]['staff']);*/
/* 						}*/
/* 					}*/
/* 					*/
/* 					$('#templateCon').find('select[syllable=position]').change(function() {*/
/* 						var id = $(this).val();*/
/* 						var result = getPositionInfo();*/
/* 						var positionInfo = result.positionInfo;*/
/* 						var positionInfo1 = result.positionInfo1;*/
/* 						var positionLeader = {};*/
/* */
/* 						flow.indexOf('报税') != -1 ? (positionInfo['bs'] ? positionLeader['报税'] = positionInfo['bs'] : "") : "";*/
/* 						flow.indexOf('送单') != -1 ? (positionInfo['sod'] ? positionLeader['送单'] = positionInfo['sod'] : "") : "";*/
/* 						flow.indexOf('客服') != -1 ? (positionInfo['kf'] ? positionLeader['客服'] = positionInfo['kf'] : "") : "";*/
/* 						flow.indexOf('收单') != -1 ? (positionInfo['sd'] ? positionLeader['收单'] = positionInfo['sd'] : "") : "";*/
/* 						flow.indexOf('记账') != -1 ? (positionInfo['zz'] ? positionLeader['记账'] = positionInfo['zz'] : "") : "";*/
/* 						flow.indexOf('整单') != -1 ? (positionInfo['zd'] ? positionLeader['整单'] = positionInfo['zd'] : "") : "";*/
/* 						var positionLeader1 = {};*/
/* 						flow.indexOf('报税') != -1 ? (positionInfo1['bs'] ? positionLeader1['报税'] = positionInfo1['bs'] : "") : "";*/
/* 						flow.indexOf('送单') != -1 ? (positionInfo1['sod'] ? positionLeader1['送单'] = positionInfo1['sod'] : "") : "";*/
/* 						flow.indexOf('客服') != -1 ? (positionInfo1['kf'] ? positionLeader1['客服'] = positionInfo1['kf'] : "") : "";*/
/* 						flow.indexOf('收单') != -1 ? (positionInfo1['sd'] ? positionLeader1['收单'] = positionInfo1['sd'] : "") : "";*/
/* 						flow.indexOf('记账') != -1 ? (positionInfo1['zz'] ? positionLeader1['记账'] = positionInfo1['zz'] : "") : "";*/
/* 						flow.indexOf('整单') != -1 ? (positionInfo1['zd'] ? positionLeader1['整单'] = positionInfo1['zd'] : "") : "";*/
/* 						*/
/* 						getcwfz(positionLeader, positionLeader1,_data['task'][0]['staff'])*/
/* 					})*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		function getfuzeren(flow,_service_info) {*/
/* 			var id = $('#templateCon').find('select[syllable=position]');*/
/* 			var result = getPositionInfo();*/
/* 			var positionInfo = result.positionInfo;*/
/* 			var positionInfo1 = result.positionInfo1;*/
/* 			var positionLeader = {};*/
/* */
/* 			flow.indexOf('报税') != -1 ? (positionInfo['bs'] ? positionLeader['报税'] = positionInfo['bs'] : "") : "";*/
/* 			flow.indexOf('送单') != -1 ? (positionInfo['sod'] ? positionLeader['送单'] = positionInfo['sod'] : "") : "";*/
/* 			flow.indexOf('客服') != -1 ? (positionInfo['kf'] ? positionLeader['客服'] = positionInfo['kf'] : "") : "";*/
/* 			flow.indexOf('收单') != -1 ? (positionInfo['sd'] ? positionLeader['收单'] = positionInfo['sd'] : "") : "";*/
/* 			flow.indexOf('记账') != -1 ? (positionInfo['zz'] ? positionLeader['记账'] = positionInfo['zz'] : "") : "";*/
/* 			flow.indexOf('整单') != -1 ? (positionInfo['zd'] ? positionLeader['整单'] = positionInfo['zd'] : "") : "";*/
/* 			var positionLeader1 = {};*/
/* 			flow.indexOf('报税') != -1 ? (positionInfo1['bs'] ? positionLeader1['报税'] = positionInfo1['bs'] : "") : "";*/
/* 			flow.indexOf('送单') != -1 ? (positionInfo1['sod'] ? positionLeader1['送单'] = positionInfo1['sod'] : "") : "";*/
/* 			flow.indexOf('客服') != -1 ? (positionInfo1['kf'] ? positionLeader1['客服'] = positionInfo1['kf'] : "") : "";*/
/* 			flow.indexOf('收单') != -1 ? (positionInfo1['sd'] ? positionLeader1['收单'] = positionInfo1['sd'] : "") : "";*/
/* 			flow.indexOf('记账') != -1 ? (positionInfo1['zz'] ? positionLeader1['记账'] = positionInfo1['zz'] : "") : "";*/
/* 			flow.indexOf('整单') != -1 ? (positionInfo1['zd'] ? positionLeader1['整单'] = positionInfo1['zd'] : "") : "";*/
/* 			*/
/* 			getcwfz(positionLeader, positionLeader1,_service_info);*/
/* 			*/
/* 		}*/
/* */
/* 		function delReason(reason) {*/
/* 			$('#templateCon .delReason').unbind('click').click(function() {*/
/* 				var val = $('#templateBox .del_type').val();*/
/* 				if(val == 0 || val == "") {*/
/* 					ykp.prompt('请选择原因再删除');*/
/* 					return false;*/
/* 				}*/
/* */
/* 				ykp.doAjax({*/
/* 					url: "/api/api_contract/add_del_type",*/
/* 					data: {*/
/* 						reason_id: val*/
/* 					},*/
/* 					method: "post",*/
/* 					success: function(res) {*/
/* 						ykp.prompt('删除成功');*/
/* 						getReasons(reason); //获取所有作废原因*/
/* 					}*/
/* 				})*/
/* 			})*/
/* 		}*/
/* */
/* 		//编辑、作废功能*/
/* 		function editOrCancelOrApprove(data) {*/
/* 			//编辑*/
/* 			$('#dynamic-table_data .itemadit').click(function() {*/
/* 			    var a_book = parseInt($(this).parents('tr').attr('data-account_book'));*/
/* 				var d_total = parseInt($(this).parents('tr').attr('data-discount_total'));*/
/* 				shoukstatus = !d_total&&!a_book ? true :false;*/
/* 				var pos_id = $(this).attr('pos-id');*/
/* 				if(!pos_id) {*/
/* 					ykp.prompt('请完善仓位信息');*/
/* 					return;*/
/* 				}*/
/* */
/* 				var _data = data[$(this).parents('tr').index()];*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				var customer_id = $(this).parents('tr').attr('customer_id');*/
/* 				var product = $(this).parents('tr').attr('flow');*/
/* 				var start_time = cs.getNowTime($(this).parents('tr').attr('start-time'));*/
/* 				var end_time = cs.getNowTime($(this).parents('tr').attr('end-time'));*/
/* 				var type = $(this).parents('tr').attr('data-type');*/
/* 				var month_s = parseInt(start_time.split('-')[1]) < 10 ? '0' + start_time.split('-')[1] : start_time.split('-')[1]*/
/* 				var day_s = parseInt(start_time.split('-')[2]) < 10 ? '0' + start_time.split('-')[2] : start_time.split('-')[2];*/
/* 				var month_e = parseInt(end_time.split('-')[1]) < 10 ? '0' + end_time.split('-')[1] : end_time.split('-')[1];*/
/* 				var day_e = parseInt(end_time.split('-')[2]) < 10 ? '0' + end_time.split('-')[2] : end_time.split('-')[2];*/
/* 				showMark('#template1');*/
/* */
/* 				$('#templateCon [syllable]').css('width', '180px').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* */
/* 				if(type != '1') {*/
/* 					$('#templateCon #sendMsg_2').hide();*/
/* 				}*/
/* 				$('#showBox .title').text('编辑合同授权');*/
/* */
/* 				getReasons(_data['htm_contract.del_type']); //获取所有作废原因*/
/* 				//合同状态切换至已作废,选择作废原因*/
/* 				cancel_reason(_data['htm_contract.del_type']);*/
/* */
/* 				//新增作废原因*/
/* 				addReason(_data['htm_contract.del_type']);*/
/* 				*/
/* 				*/
/* 				*/
/* 				//长期合同  显示区域、仓位输入框*/
/* 				if(type == '1') {*/
/* 					$('#templateCon .area_position').show();*/
/* */
/* 					//获取所有区域，切换区域，切换仓位*/
/* 					getAllAreasAndChangeAreaToChangePositions($('#templateCon [syllable="area"]'), $('#templateCon [syllable="position"]'), _data['position'], _data);*/
/* 				}*/
/* 				*/
/* 				//加载合同相关数据*/
/* 				loadContract(_data, customer_id);*/
/*                 $("#temHeader").width($("#showBox").width()-47);*/
/* 				// time_plug();*/
/* */
/* 				// if(data['htm_contract.contract_type'] == '2'){*/
/* 				// 	for(var i in employees){*/
/* 				// 		$('#templateCon #state').append(new Option(employees[i],i));*/
/* 				// 	}*/
/* 				// }*/
/* */
/* 				//长期合同 获取对应仓位的仓位负责人*/
/* 				// if(data['htm_contract.contract_type'] == '1'){*/
/* 				// 	//获取仓位负责人*/
/* 				// 	getPositionLeader(pos_id);*/
/* 				// }*/
/* */
/* 				*/
/* 				submitContract(id, type, customer_id, start_time.split('-')[0] + '-' + month_s + '-' + day_s, end_time.split('-')[0] + '-' + month_e + '-' + day_e);*/
/* 			});*/
/* */
/* 			function sendMsg(id, type, param) {*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_common/send_customer',*/
/* 					data: {*/
/* 						customer_id: id,*/
/* 						type: type,*/
/* 						param: JSON.stringify(param)*/
/* 					},*/
/* 					method: 'post',*/
/* 					success: function(res) {*/
/* 						// ykp.prompt('短信发送成功！');*/
/* 					}*/
/* 				})*/
/* 			}*/
/* */
/* 			//将编辑后的合同数据提交服务器			*/
/* 			function submitContract(id, type, customer_id, start_time, end_time) {*/
/* 				$('#templateBox .add').unbind('click').click(function() {*/
/* 					if($('#templateCon [field="htm_contract.status"]').val() == null) {*/
/* 						ykp.prompt('请重新选择合同状态！');*/
/* 						return;*/
/* 					}*/
/* 					var postdata = {};*/
/* 					postdata['id'] = id;*/
/* 					product = [];*/
/* 					$('#templateCon .leader_info tr').each(function(i) {*/
/* 						var $var = $(this).find('td').eq(0).text().trim();*/
/* 						//product.push($var.substring(0,$var.length-1));*/
/* 						//product.push(($(this).find('td').eq(0).text().trim()).substring(0, ($(this).find('td').eq(0).text().trim()).length - 1)),*/
/* 						product.push($var);*/
/* */
/* 					})*/
/* 					var field = '';*/
/* 					var param_1 = {*/
/* 						name: $('#templateCon ._customer').val(),*/
/* 						time: start_time.split('-')[0] + '' + start_time.split('-')[1] + '-' + end_time.split('-')[0] + '' + end_time.split('-')[1]*/
/* 					}*/
/* 					var param_2 = {*/
/* 						name: $('#templateCon ._customer').val(),*/
/* 						product: product.join(','),*/
/* 						date: end_time*/
/* 					}*/
/* 					var today = new Date();*/
/* 					var param_3 = {*/
/* 						name: $('#templateCon ._customer').val(),*/
/* 						date: today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate()*/
/* 					}*/
/* 					var is_send_1 = false,*/
/* 						is_send_2 = false,*/
/* 						is_send_3 = false;*/
/* 					if($('#templateCon #sendMsg_1 input:checked').val() == 1) {*/
/* 						is_send_1 = true;*/
/* 					}*/
/* 					if(type == 1 && $('#templateCon #sendMsg_2 input:checked').val() == 1) {*/
/* 						is_send_2 = true;*/
/* 					}*/
/* 					if($('#templateCon #sendMsg_3 input:checked').val() == 1) {*/
/* 						is_send_3 = true;*/
/* 					}*/
/* */
/* 					$('#templateCon .upload').each(function(i, e) {*/
/* 						field = $(this).attr('field').split('.')[1];*/
/* 						postdata[field] = $(this).val();*/
/* 					});*/
/* */
/* 					//长期合同，提交数据加上仓位id*/
/* 					if(!$('#templateCon [syllable="position"]').is(':hidden')) {*/
/* 						postdata['pos_id'] = $('#templateCon [syllable="position"]').val();*/
/* 						//如果仓位id 不存在,提示并返回*/
/* 						if(!postdata['pos_id']) {*/
/* 							ykp.prompt('请选择仓位');*/
/* 							return;*/
/* 						}*/
/* 					}*/
/* */
/* 					var data = [];*/
/* 					var num = 0;*/
/* 					$('#templateCon .leader_info tr').each(function(i, e) {*/
/* 						*/
/* 						if(type == 1) {*/
/* 							if($(this).find('select').val() == 0){*/
/* 								num++;*/
/* 								data = [];*/
/* 								return false;*/
/* 							}else{*/
/* 								var $var = $(this).find('td').eq(0).text().trim();*/
/* 								//console.log($var.substring(0,$var.length-1));*/
/* 								data.push({*/
/* 									'task_id': $(this).attr('task-id'),*/
/* 									'process': $var.substring(0,$var.length-1),*/
/* 									//'process': $(this).find('td').eq(0).text().trim(),*/
/* 									'staff_id': $(this).find('select').val(),*/
/* 									'lv': $(this).find('input').val() || 1*/
/* 								});*/
/* 							}*/
/* 						}*/
/* 						if(type == 2) {*/
/* 							if($(this).find('select').val() == 0){*/
/* 								num++;*/
/* 								data = [];*/
/* 								return false;*/
/* 							}else{*/
/* 								data.push({*/
/* 									'task_id': $(this).attr('task-id'),*/
/* 									'staff_id': $(this).find('select').val(),*/
/* 									'lv': $(this).find('input').val() || 1*/
/* 								});*/
/* 							}*/
/* 						}*/
/* 					});*/
/* 					if(num){*/
/* 						ykp.prompt('负责人不能为空');*/
/* 						return false;*/
/* 					}*/
/* 					postdata['assign'] = JSON.stringify(data);*/
/* 					if(postdata.status == 3){*/
/* 						layui.use('layer',function(){*/
/* 							var layer = layui.layer;*/
/* 							 layer.confirm('确认保存么？', function(index){*/
/* 							 	addContract(postdata,id,customer_id,param_1,param_2,param_3,is_send_1,is_send_2,is_send_3);*/
/* 						        layer.close(index);*/
/* 						      });*/
/* 						})*/
/* 						*/
/* 					}else{*/
/* 						addContract(postdata,id,customer_id,param_1,param_2,param_3,is_send_1,is_send_2,is_send_3);*/
/* 					}*/
/* 				})*/
/* 			}*/
/* */
/* 			function addContract(postdata,id,customer_id,param_1,param_2,param_3,is_send_1,is_send_2,is_send_3){*/
/* 					if(shoukstatus){*/
/*                         postdata['is_get_money'] = 2;*/
/* 					}*/
/*                 ykp.doAjax({*/
/* 						url: '/api/api_contract/auth_edit',*/
/* 						method: 'post',*/
/* 						data: postdata,*/
/* 						success: function(res) {*/
/* 							ykp.doAjax({*/
/* 								url: '/api/api_contract/auth_ht2',*/
/* 								method: 'post',*/
/* 								data: {*/
/* 									id: id,*/
/* 									auth_status2: 2*/
/* 								},*/
/* 								success: function(res) {*/
/* 									ykp.prompt('编辑成功');*/
/* */
/* 									if(is_send_1) {*/
/* 										sendMsg(customer_id, '账期完成', param_1);*/
/* 									}*/
/* 									if(is_send_2) {*/
/* 										sendMsg(customer_id, '合同续签', param_2);*/
/* 									}*/
/* 									if(is_send_3) {*/
/* 										sendMsg(customer_id, '客户解约', param_3);*/
/* 									}*/
/* 									cs.close();*/
/* 									getDatalist('','',ykp.getCookie('page_no'));*/
/* 								}*/
/* 							});*/
/* 						}*/
/* 					});*/
/* 			}*/
/* 			//加载编辑合同数据*/
/* 			function loadContract(data, customer_id) {*/
/* 				var flow = JSON.parse(data.task[0]['flow']);*/
/* 				var html = [];*/
/* */
/* 				//新公司 无订单编辑过的负责人*/
/* 				var fuzePeople = data.task[0].staff;*/
/* 				//合同负责人*/
/* 				var leading_official = '';*/
/* */
/* 				setTimeout(function() {*/
/* 					//所有仓位信息*/
/* 					if(data['htm_contract.contract_type'] == 1) {*/
/* 						var result = getPositionInfo();*/
/* 						var positionInfo = result.positionInfo;*/
/* 						//选中仓位负责人*/
/* 						var positionInfo1 = result.positionInfo1;*/
/* 						//仓位负责人*/
/* 						var positionLeader = {};*/
/* */
/* 						flow.indexOf('报税') != -1 ? (positionInfo['bs'] ? positionLeader['报税'] = positionInfo['bs'] : "") : "";*/
/* 						flow.indexOf('送单') != -1 ? (positionInfo['sod'] ? positionLeader['送单'] = positionInfo['sod'] : "") : "";*/
/* 						flow.indexOf('客服') != -1 ? (positionInfo['kf'] ? positionLeader['客服'] = positionInfo['kf'] : "") : "";*/
/* 						flow.indexOf('收单') != -1 ? (positionInfo['sd'] ? positionLeader['收单'] = positionInfo['sd'] : "") : "";*/
/* 						flow.indexOf('记账') != -1 ? (positionInfo['zz'] ? positionLeader['记账'] = positionInfo['zz'] : "") : "";*/
/* 						flow.indexOf('整单') != -1 ? (positionInfo['zd'] ? positionLeader['整单'] = positionInfo['zd'] : "") : "";*/
/* 						var positionLeader1 = {};*/
/* 						flow.indexOf('报税') != -1 ? (positionInfo1['bs'] ? positionLeader1['报税'] = positionInfo1['bs'] : "") : "";*/
/* 						flow.indexOf('送单') != -1 ? (positionInfo1['sod'] ? positionLeader1['送单'] = positionInfo1['sod'] : "") : "";*/
/* 						flow.indexOf('客服') != -1 ? (positionInfo1['kf'] ? positionLeader1['客服'] = positionInfo1['kf'] : "") : "";*/
/* 						flow.indexOf('收单') != -1 ? (positionInfo1['sd'] ? positionLeader1['收单'] = positionInfo1['sd'] : "") : "";*/
/* 						flow.indexOf('记账') != -1 ? (positionInfo1['zz'] ? positionLeader1['记账'] = positionInfo1['zz'] : "") : "";*/
/* 						flow.indexOf('整单') != -1 ? (positionInfo1['zd'] ? positionLeader1['整单'] = positionInfo1['zd'] : "") : "";*/
/* */
/* 					}*/
/* 					*/
/* 					if(data['htm_contract.contract_type'] == 1) {*/
/* 						var _service_info = data['task'][0]['staff'];*/
/* 						if(_service_info.length) {*/
/* 							ykp.doAjax({*/
/* 								url: "/api/api_contract/get_last_contract",*/
/* 								method: "post",*/
/* 								data: {*/
/* 									customer_id: customer_id*/
/* 								},*/
/* 								success: function(res) {*/
/* 									service_info = res.data;*/
/* 									*/
/* 									//所有流程*/
/* 									var task = data.task[0].flow ? JSON.parse(data.task[0].flow) : [];*/
/* 									if(service_info && !Array.isArray(service_info)  ) {*/
/* 										for(var i in service_info) {*/
/* 											for(var j = 0; j < task.length; j++){*/
/* 												if(i == task[j]){*/
/* 													html.push(*/
/* 														`<tr task-id="${data.task[0].id}">*/
/* 														<td style="width:100px;text-align: right;padding-right: 10px;">${i}：</td>*/
/* 														<td>*/
/* 															<select style="width:180px;" process="${i}" leader="${positionLeader[i]}" default="${service_info[i]}">*/
/* 																<option value="0">请选择</option>*/
/* 															</select>*/
/* 														</td>*/
/* 														<td style="width:200px;margin-right:10px;">*/
/* 															<label> 任务等级：</label> <input value="${_service_info[j]['lv']}" />*/
/* 														</td>*/
/* 													</tr>`*/
/* 													);*/
/* 												}*/
/* 											}*/
/* 											*/
/* 										}*/
/* 									} else {*/
/* 										*/
/* 										//当  上一个订单为空时  加载负责cw 的负责人  反之加载 当前客户的负责人*/
/* 										var status = false;*/
/* 										if(fuzePeople.length != 0) {*/
/* 											for(var i in positionLeader) {*/
/* 												for(var j in fuzePeople) {*/
/* 													if(fuzePeople[j]['process'] == i) {*/
/* 														if(fuzePeople[j]['staff_id'] != 0) {*/
/* 															status = true;*/
/* 														}*/
/* 														//当所有负责人为不为空时*/
/* 														if(status) {*/
/* 															html.push(*/
/* 																`<tr task-id="${data.task[0].id}" style="height:43px;">*/
/* 																	<td><label>${fuzePeople[j]['process']}：</label></td>*/
/* 																	<td style="padding-left:5px;">*/
/* 																		<select style="width:180px;" process="${fuzePeople[j]['process']}" leader="${positionLeader[i]}" default="${fuzePeople[j]['staff_id']}">*/
/* 					//														<option value="0">请选择</option>*/
/* 																		</select>*/
/* 																	</td>*/
/* 																	<td style="width:200px;margin-right:10px;">*/
/* 																		<label> 任务等级： </label> <input value="${_service_info[j]['lv']}" />*/
/* 																	</td>*/
/* 															</tr>`);*/
/* 														}*/
/* 													}*/
/* 												}*/
/* 											}*/
/* 											*/
/* 											*/
/* 											if(!status) {*/
/* 												getfuzeren(flow,_service_info);*/
/* 											}*/
/* 										} else {*/
/* 											*/
/* 											cwfz = true;*/
/* 											for(var i in positionLeader) {*/
/* 												for(var j in positionLeader1) {*/
/* 													if(i == j) {*/
/* 														html.push(*/
/* 															`<tr task-id="${data.task[0].id}">*/
/* 																<td style="width:100px;">${i}：</td>*/
/* 																<select style="width:180px;" process="${j}" leader="${positionLeader[i]}" default="${positionLeader1[i].split(',')[0]}">*/
/* 																	<option value="0">请选择</option>*/
/* 																</select>*/
/* 															</td>*/
/* 															<td style="width:200px;margin-right:10px;">*/
/* 																<label> 任务等级：</label> <input value="${_service_info[j]['lv']}" />*/
/* 															</td>*/
/* 														</tr>`*/
/* 														);*/
/* 													}*/
/* 												}*/
/* */
/* 											}*/
/* 										}*/
/* */
/* 									}*/
/* */
/* 									$('#templateCon .leader_info').html(html.join(''));*/
/*                                     $("#temHeader").width($("#showBox").width()-47);*/
/* 									$('#templateCon .leader_info [process]').select2({*/
/* 										allowClear: true*/
/* 									});*/
/* */
/* 									var leader_html = [];*/
/* 									var leaders;*/
/* 									$('#templateCon .leader_info [process]').each(function(i, e) {*/
/* 										if(!$(e).attr('leader')) {*/
/* 											return true;*/
/* 										}*/
/* 										leaders = $(e).attr('leader').split(',');*/
/* 										for(var k in leaders) {*/
/* 											if(employees[leaders[k]]){*/
/* 												leader_html.push(*/
/* 													`<option value="${leaders[k]}">${employees[leaders[k]]}</option>`*/
/* 												);*/
/* 											}*/
/* 										}*/
/* 										$(e).append(leader_html.join('')).val($(e).attr('default')).trigger('change');*/
/* 										leaders = '';*/
/* 										leader_html = [];*/
/* 									});*/
/* 								}*/
/* 							})*/
/* 						} else {*/
/* 							html = getcwfz(positionLeader,positionLeader1,_service_info);*/
/* 						}*/
/* */
/* 					}*/
/* 					if(data['htm_contract.contract_type'] == 2) {*/
/* 						var task = data['task'];*/
/* 						var _service_info = data['task'][0]['staff'];*/
/* 						for(var i in task) {*/
/* 							html.push(*/
/* 								`<tr task-id="${data['task'][i]['id']}">*/
/* 								<td style="width:100px;text-align: right">${task[i]['productName']}：</td>*/
/* 								<td>*/
/* 									<select style="width:180px;" default="${task[i]['staff'].length > 0 ? (task[i]['staff'][0]['staff_id'] != '0' ? task[i]['staff'][0]['staff_id'] : '0') : '0'}">*/
/* 										<option value="0">请选择</option>*/
/* 									</select>*/
/* 								</td>*/
/* 								<td style="width:200px;margin-right:10px;">*/
/* 									<label> 任务等级：</label> <input value="${_service_info[i]['lv']}" />*/
/* 								</td>*/
/* 							</tr>`*/
/* 							);*/
/* 						}*/
/* 						$('#templateCon .leader_info').html(html.join(''));*/
/* 						$('#templateCon .leader_info [default]').select2({*/
/* 							allowClear: true*/
/* 						});*/
/* */
/* 						var leader_html = [];*/
/* 						var leaders;*/
/* 						$('#templateCon .leader_info [default]').each(function(i, e) {*/
/* 							for(var k in employees) {*/
/* 								leader_html.push(*/
/* 									`<option value="${k}">${employees[k]}</option>`*/
/* 								);*/
/* 							}*/
/* */
/* 							$(e).append(leader_html.join('')).val($(e).attr('default')).trigger('change');*/
/* 							leaders = '';*/
/* 							leader_html = [];*/
/* 						});*/
/* 					}*/
/* */
/* 					$('#templateCon [field]').not('.cancel-reason').each(function(i, e) {*/
/* 						if($(this).attr('field') == 'htm_contract.contract_type') {*/
/* 							$(this).val(data[$(this).attr('field')] == '1' ? '长期合同' : '一次性合同');*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('field') == 'htm_contract.status' && data[$(this).attr('field')] == '0') {*/
/* 							$(this).val(1);*/
/* 							return true;*/
/* 						}*/
/* 						$(this).val(data[$(this).attr('field')]);*/
/* 					});*/
/* 				}, 200)*/
/* */
/* 			}*/
/* */
/* 			//时间插件*/
/* 			function time_plug() {*/
/* 				$('#templateCon .select2').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* 				$('#select2-multiple-style .btn').unbind('click').on('click', function(e) {*/
/* 					var target = $(this).find('input[type=radio]');*/
/* 					var which = parseInt(target.val());*/
/* 					if(which == 2) $('.select2').addClass('tag-input-style');*/
/* 					else $('.select2').removeClass('tag-input-style');*/
/* 				});*/
/* 			}*/
/* */
/* 			//作废*/
/* 			$('.cancel').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				// var is_invalid = $(this).attr('is_invalid');*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_contract/cancel',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						id: id,*/
/* 						status: 4*/
/* 					},*/
/* 					success: function(res) {*/
/* 						ykp.prompt('作废成功');*/
/* 						getDatalist();*/
/* 					}*/
/* 				});*/
/* 			});*/
/* 		}*/
/* */
/* 		function getcwfz(positionLeader, positionLeader1,_service_info) {*/
/* 			var html = [];*/
/* 			for(var i in positionLeader) {*/
/* 				for(var j in positionLeader1) {*/
/* 					if(i == j) {*/
/* 						html.push(*/
/* 							`<tr task-id="${_service_info[0]['task_id']}">*/
/* 							<td style="width:100px;text-align: right">${i}：</td>*/
/* 							<td>*/
/* 							<select style="width:180px;" process="${j}" leader="${positionLeader[i]}" default="${positionLeader1[i].split(',')[0]}">*/
/* 		//														<option value="0">请选择</option>*/
/* 							</select>*/
/* 							<td style="width:200px;margin-right:10px;">*/
/* 								<label> 任务等级：</label> <input value="${getLv(_service_info,j)}" />*/
/* 							</td>*/
/* 							</td>*/
/* 						</tr>`*/
/* 						);*/
/* 					}*/
/* 				}*/
/* */
/* 			}*/
/* 			*/
/* 			function getLv(_service_info,j){*/
/* 				var lv = "";*/
/* 				for(var i in _service_info){*/
/* 					if(_service_info[i]['process'] == j){*/
/* 						return _service_info[i]['lv'];*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 			*/
/* 			$('#templateCon .leader_info [process]').select2({*/
/* 				allowClear: true*/
/* 			});*/
/* 			setTimeout(function() {*/
/* 				var leaders;*/
/* 				var leader_html = [];*/
/* 				$('#templateCon .leader_info').html(html.join(''));*/
/* 				$('#templateCon .leader_info [process]').each(function(i, e) {*/
/* 					if(!$(e).attr('leader')) {*/
/* 						return true;*/
/* 					}*/
/* 					leaders = $(e).attr('leader').split(',');*/
/* 					for(var k in leaders) {*/
/* 						if(employees[leaders[k]]){*/
/* 							leader_html.push(*/
/* 								`<option value="${leaders[k]}">${employees[leaders[k]]}</option>`*/
/* 							);*/
/* 						}*/
/* 					}*/
/* 					$(e).append(leader_html.join('')).val($(e).attr('default')).trigger('change');*/
/* 					leaders = '';*/
/* 					leader_html = [];*/
/* 				});*/
/* 			},300)*/
/* 		}*/
/* */
/* 	});*/
/* */
/* 	//全选函数*/
/* 	function checkAll(status) {*/
/* 		$("tbody input[name='check']").each(function(i, n) {*/
/* 			n.checked = status;*/
/* 		});*/
/* 	}*/
/* </script>*/
