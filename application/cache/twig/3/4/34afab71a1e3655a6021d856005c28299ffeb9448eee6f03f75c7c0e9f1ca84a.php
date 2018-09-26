<?php

/* admin/depotManagement/depotStorage.html */
class __TwigTemplate_0f241df9ff8410ac01e784c19cd09412028c5f5099a6ad45597f2baa31f40ce4 extends Twig_Template
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
\t/*编辑*/
\t
\t#templateCon label {
\t\twidth: 60px;
\t\ttext-align: right;
\t}
\t
\t#heightsearch1 label {
\t\twidth: 90px;
\t}
\t
\t#heightsearch1 input[type=\"text\"] {
\t\twidth: 180px;
\t}
\t/*\t#templateCon table {
\t\tmargin-top: 15px;
\t}*/
\t
\t#templateCon .connects-content th,
\t#templateCon .connects-content td {
\t\theight: 35px;
\t\ttext-align: left;
\t\tpadding: 5px 10px;
\t}
\t
\t#ticketBody input,
\t#cardBody input {
\t\twidth: 70px;
\t}
\t
\t#ticketBody select,
\t#cardBody select {
\t\tmin-width: 110px;
\t}
\t
\t.voucher_label {
\t\tposition: relative;
\t\ttop: -2px;
\t\tpadding: 0 10px;
\t\twidth: auto !important;
\t\ttext-align: left !important;
\t}
\t
\t.voucher_month {
\t\tposition: relative;
\t\ttop: -2px;
\t}
\t
\t.storage table {
\t\tborder: none !important;
\t}
\t
\t.storage td {
\t\tborder: none !important;
\t}
\t
\ttd[in_title] {
\t\twidth: 15%;
\t\ttext-align: right !important;
\t}
\t
\ttd[in_content] {
\t\twidth: 35%;
\t\ttext-align: left!important;
\t}
\t
\t.service_month .select2-container,
\t.voucher .select2-container {
\t\tdisplay: block !important;
\t\twidth: 550px !important;
\t}
\t#templateBox tbody tr td{height: 35px}
</style>

<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<!-- <h3 class=\"header smaller lighter blue\">入库</h3> -->
\t\t<div class=\"actions\">
\t\t\t<div id=\"topTool\" style=\"position:relative;\">
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<input type=\"text\" pts=\"0\" sear=\"ckm_in_warehouse.num\" placeholder=\"入库单号\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<input type=\"text\" pts=\"0\" sear=\"khm_customer.name\" placeholder=\"企业名称\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<input type=\"text\" pts=\"0\" sear=\"khm_customer.customer_num\" placeholder=\"客户编码\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<select style=\"width: 180px\" pts=3 class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" sear=\"ckm_in_warehouse.jb_id\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\"> 经办人 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<select style=\"width: 180px\" pts=3 class=\"advandced-search select2-hidden-accessible\" sear=\"ckm_in_warehouse.create_id\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\"> 创建人 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<select style=\"width: 180px\" pts=3 sear=\"ckm_in_warehouse.qr_id\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\"> 审批人 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" title=\"高级搜索\" id=\"heightsearch\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
\t                    <i class=\"fa fa-filter\"></i>
\t                </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
\t                    <i class=\"fa fa-refresh\"></i>
\t                </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"147\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button class=\"add btn btn-info btn-sm\" title=\"添加\" style=\" background-color: #32CD32 !important;\">
\t                    <i class=\"fa fa-plus\"></i>
\t                </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"305\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\"  title=\"导出\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"exportfile moveToClue btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t\t\t<i class=\"fa fa-sign-out\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"148\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button class=\"btn btn-info sp  btn-sm plSp\" title=\"批量审批\" style=\"background-color: #32CD32 !important; border-color: #32CD32;\">
\t\t\t\t\t\t<i class=\"fa fa-check-circle-o\"></i>
\t\t            </button>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:290px;height: 36px\">
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"background: #E6E6E6;line-height:22px\" data-status=\"a\">全部</a>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:22px\" data-status=\"0\">
\t\t\t\t\t\t\t</i> 待审批</a>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:22px\" data-status=\"2\"> 已通过</a>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:22px\" data-status=\"1\"> 未通过</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"top:31px;position: absolute; background: #fff;overflow: auto; padding: 10px 0px; display: none;z-index:1042;\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>审批状态</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width:180px\" gjs=0 data-type=\"gj\" sear=\"ckm_in_warehouse.status\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t<option value=\"0\">待审批</option>
\t\t\t\t\t\t\t\t<option value=\"1\">未通过</option>
\t\t\t\t\t\t\t\t<option value=\"2\">已通过</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<!--<input type=\"text\" gjs=0 sear=\"ckm_in_warehouse.status\" />-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>入库单号</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"ckm_in_warehouse.num\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>入库类型</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=0 data-type=\"gj\" sear=\"ckm_in_warehouse.type\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t<option value=\"1\">凭证</option>
\t\t\t\t\t\t\t\t<option value=\"2\">单据</option>
\t\t\t\t\t\t\t\t<option value=\"3\">证件</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>仓库名称</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 id=\"\" sear=\"ckm_in_warehouse.ck_name\">
\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>企业名称</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 id=\"\" sear=\"khm_customer.name\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>客户编码</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.customer_num\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>仓位</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select gjs=3 sear=\"ckm_position_num.pos_id\" class=\"cw\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>经办人</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" class=\"advandced-search select2-hidden-accessible\" sear=\"ckm_in_warehouse.jb_id\" gjs=0 data-type=\"gj\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>入库日期</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"ckm_in_warehouse.time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<input class=\"date-timepicker1\" data-type=\"gj\" data-status=\"time\" gjs=0 sear=\"ckm_in_warehouse.time\" class=\"form-control\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;\">
                                    <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                </span>
\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>备注</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 id=\"\" sear=\"ckm_in_warehouse.remark\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>入库物品</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"ckm_in_warehouse.goods\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>创建人</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" sear=\"ckm_in_warehouse.create_id\" gjs=0 data-type=\"gj\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>创建时间</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"ckm_in_warehouse.create_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<input class=\"date-timepicker1\" data-type=\"gj\" data-status=\"time\" gjs=0 sear=\"ckm_in_warehouse.create_time\" class=\"form-control\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;\">
                                    <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                </span>
\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>审批人</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" class=\"advandced-search select2-hidden-accessible\" sear=\"ckm_in_warehouse.qr_id\" tabindex=\"-1\" aria-hidden=\"true\" gjs=0 data-type=\"gj\">
\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>审批时间</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"ckm_in_warehouse.qr_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<input class=\"date-timepicker1\" data-type=\"gj\" data-status=\"time\" gjs=0 sear=\"ckm_in_warehouse.qr_time\" class=\"form-control\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;\">
                                    <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                </span>
\t\t\t\t\t\t\t</div>-->
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
\t\t</div>
\t</div>

\t<div class=\"custom_table\" style=\"margin-top:10px;\">
\t\t<table id=\"dynamic-table\">
\t\t\t<thead>
\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t<th class=\"center\">
\t\t\t\t\t\t<label class=\"pos-rel\">
                                <input type=\"checkbox\" class=\"ace\" onclick=\"cs.checkAll(this.checked)\"/>
                                <span class=\"lbl\"></span>
                            </label>
\t\t\t\t\t</th>
\t\t\t\t\t<th> 操作 </th>
\t\t\t\t\t<th data-num=\"1\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span>审批状态</span>
\t\t\t\t\t\t\t<span id=\"table-sort\">
\t\t\t\t\t\t\t\t<i class=\"layui-edge layui-table-sort-asc\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</th>
\t\t\t\t\t<th data-num=\"2\">入库单号</th>
\t\t\t\t\t<th data-num=\"3\">企业名称</th>
\t\t\t\t\t<th data-num=\"4\">客户编码</th>
\t\t\t\t\t<th data-num=\"14\">仓位编码</th>
\t\t\t\t\t<th data-num=\"5\">经办人</th>
\t\t\t\t\t<th data-num=\"6\">入库日期</th>
\t\t\t\t\t<th data-num=\"7\">入库物品</th>
\t\t\t\t\t<th data-num=\"15\">备注</th>
\t\t\t\t\t<th data-num=\"8\">创建人</th>
\t\t\t\t\t<th data-num=\"9\">创建时间</th>
\t\t\t\t\t<th data-num=\"10\">审批人</th>
\t\t\t\t\t<th data-num=\"11\">审批时间</th>
\t\t\t\t\t<th data-num=\"12\">入库月份</th>
\t\t\t\t\t<th data-num=\"13\">审批回复</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody id=\"datalist\">

\t\t\t</tbody>
\t\t</table>
\t</div>

\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" id=\"num\"></div>
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

\t<div class=\"popup_new\" style=\"display:none\">
\t\t<div style=\"padding:10px 0;\">
\t\t\t<label> 企业名称： </label>
\t\t\t<select addfield=\"customer_id\" style=\"width:380px\" msg=\"请选择企业名称\">
\t\t\t\t<option value=\"\">请选择</option>
\t\t\t</select>
\t\t\t
\t\t\t<!--<label> 订单号： </label>
\t\t\t<select addfield=\"contract_code\" style=\"width:180px\" msg=\"请选择订单号\">
\t\t\t\t<option value=\"\">请选择</option>
\t\t\t</select>-->
\t\t</div>
\t
\t\t<div class=\"layui-collapse\" style=\"margin-top: 10px\">
\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t<h2 class=\"layui-colla-title\">月份</h2>
\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t
\t\t\t\t\t\t<!-- 服务方式 -->
\t\t<div id=\"get_way\" style=\"margin-bottom:7px ;\">
\t\t\t<label> 经办人： </label>
\t\t\t<select addfield=\"jb_id\" style=\"width:190px\" msg=\"请选择经办人\">
\t\t\t\t<option value=\"\">请选择</option>
\t\t\t</select>
\t\t\t<label style=\"margin-left: 15px;\">服务方式：</label>
\t\t\t<select title=\"getway\" style=\"width:190px\">
\t\t\t\t<option value=\"1\">外勤上门</option>
\t\t\t\t<option value=\"2\">客户上门</option>
\t\t\t\t<option value=\"3\">快递物流</option>
\t\t\t</select>
\t\t</div>

\t\t<div id=\"express\" style=\"display:none;\">
\t\t\t<div style=\"margin-bottom: 5px\">
\t\t\t\t<label style=\" margin-bottom: 5px;\">快递公司：</label>
\t\t\t\t<input title=\"express\" style=\"width:190px;\"/>
\t\t\t\t<label style=\"margin-left: 14px;\">快递单号：</label>
\t\t\t\t<input title=\"expressnum\" style=\"width:190px;\" />
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<label>快递费用：</label>
\t\t\t\t<input title=\"cost\" style=\"width:190px;\" />
\t\t\t</div>
\t\t\t<div class=\"\" style=\"padding: 2px;\">
\t\t\t\t<div id=\"fileBox\">

\t\t\t\t</div>
\t\t\t\t<div id=\"uploadBox\">
\t\t\t\t\t<button type=\"button\" id=\"upload1\" style=\"outline: none;background-color: #009688 !important; margin-top: 20px;margin-bottom: 8px;\" class=\"btn btn-info btn-sm position-relative;\">
\t\t\t                        上传文件
\t\t\t        \t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t\t\t\t<div class=\"service_month\" style=\"    margin-bottom：-30px;\">
\t\t\t\t\t\t<!--<div class=\"page-header\" style=\"background: #ccecff; padding-left: 6px; height: 35px;\">
\t\t\t\t\t\t\t<h5 style=\"margin-top: 3px;\">
\t\t\t\t\t\t\t\t\t月份
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t<select multiple=\"\" id=\"pzList\" name=\"state\" addfield=\"sd\" class=\"pzList state select2 select2-hidden-accessible\" data-placeholder=\"选择月份\" style=\"width: 200px;\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<div style=\"display: inline-block;width:472px;\" class=\"voucher_div\">
\t\t\t\t\t\t\t<!-- <label class=\"voucher_label\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" data-time=\"201711\">
\t\t\t\t\t\t\t\t<span class=\"voucher_month\">201711</span> 
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"voucher_label\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" data-time=\"201712\">
\t\t\t\t\t\t\t\t<span class=\"voucher_month\">201712</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"voucher_label\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" data-time=\"201801\"> 
\t\t\t\t\t\t\t\t<span class=\"voucher_month\">201801</span> 
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"voucher_label\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" data-time=\"201802\"> 
\t\t\t\t\t\t\t\t<span class=\"voucher_month\">201802</span>
\t\t\t\t\t\t\t</label> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- <table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>凭证月份</th>
\t\t\t\t\t\t\t\t\t<th>凭证名称</th>
\t\t\t\t\t\t\t\t\t<th>数量(本)</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td id=\"month\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<input type=\"number\"/>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table> -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t<h2 class=\"layui-colla-title\">记账凭证</h2>
\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t<div class=\"voucher\">
\t\t\t\t\t\t<!--<div class=\"page-header\" style=\"background: #ccecff; padding-left: 6px; height: 35px;\">
\t\t\t\t\t\t\t<h5 style=\"margin-top: 3px;\">
\t\t\t\t\t\t\t\t凭证交接
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t<label style=\"float: left;margin-right: 5px;width:25px;\"></label>
\t\t\t\t\t\t<select multiple=\"\" id=\"pzList1\" name=\"state\" addfield=\"sd\" class=\"pzList state select2 select2-hidden-accessible\" data-placeholder=\"选择凭证\" style=\"width: 200px;\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<div style=\"display: inline-block;width:472px;\" class=\"voucher_div\">
\t\t\t\t\t\t\t<!-- <label class=\"voucher_label\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" data-time=\"201711\">
\t\t\t\t\t\t\t\t<span class=\"voucher_month\">201711</span> 
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"voucher_label\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" data-time=\"201712\"> 
\t\t\t\t\t\t\t\t<span class=\"voucher_month\">201712</span> 
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"voucher_label\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" data-time=\"201801\"> 
\t\t\t\t\t\t\t\t<span class=\"voucher_month\">201801</span> 
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"voucher_label\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" data-time=\"201802\"> 
\t\t\t\t\t\t\t\t<span class=\"voucher_month\">201802</span> 
\t\t\t\t\t\t\t</label> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- <table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>凭证月份</th>
\t\t\t\t\t\t\t\t\t<th>凭证名称</th>
\t\t\t\t\t\t\t\t\t<th>数量(本)</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td id=\"month\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<input type=\"number\"/>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table> -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t<h2 class=\"layui-colla-title\">发票单据</h2>
\t\t\t\t<div class=\"layui-colla-content connects-content\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<!--<p class=\"page-header\" style=\"background: #ccecff; padding-left: 6px; height: 35px; display:none;\">
\t\t\t\t\t\t票据交接
\t\t\t\t</p>-->
\t\t\t\t\t\t<div id=\"\">
\t\t\t\t\t\t\t<table class=\"bill\" style=\"display:;\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th style=\"font-weight: 500;\">操作</th>
\t\t\t\t\t\t\t\t\t\t<th style=\"font-weight: 500;\">票据类别</th>
\t\t\t\t\t\t\t\t\t\t<th style=\"font-weight: 500;\">数量(张)</th>
\t\t\t\t\t\t\t\t\t\t<th style=\"font-weight: 500;\">金额(元)</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"ticketBody\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"addTicket\">+</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"goods\">

\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"count\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"money\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t<h2 class=\"layui-colla-title\">证件资料</h2>
\t\t\t\t<div class=\"layui-colla-content connects-content\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<!--<p class=\"page-header\" style=\"background: #ccecff; padding-left: 6px; height: 35px; display:none;\">
\t\t\t\t\t\t证件交接
\t\t\t\t</p>-->
\t\t\t\t\t\t<div id=\"\">
\t\t\t\t\t\t\t<table class=\"certificate\" style=\"display:;\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th style=\"font-weight: 500;\">操作</th>
\t\t\t\t\t\t\t\t\t\t<th style=\"font-weight: 500;\">证件名称</th>
\t\t\t\t\t\t\t\t\t\t<th style=\"font-weight: 500;\">数量(个)</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"cardBody\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"addCard\">+</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"goods\">

\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"count\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!--<div style=\"padding:0 0 15px 0;\">
\t\t\t<label> 经办人： </label>
\t\t\t<select addfield=\"jb_id\" style=\"width:180px\" msg=\"请选择经办人\">
\t\t\t\t<option value=\"\">请选择</option>
\t\t\t</select>
\t\t</div>-->
\t\t<!-- <div id=\"get_way\" style=\"margin-top: 15px;\">
\t\t\t<label style=\"width: 50px\">收单方式</label>
\t\t\t<select title=\"getway\">
\t\t\t\t<option value=\"1\">外勤收单</option>
\t\t\t\t<option value=\"2\">客户上门</option>
\t\t\t\t<option value=\"3\">快递</option>
\t\t\t</select>
\t\t</div>
\t
\t\t<div id=\"express\" style=\"display:none\">
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label style=\"width: 50px\">快递公司</label>
\t\t\t\t\t<input title=\"express\"/>
\t\t\t\t\t<label style=\"width: 50px\">快递单号</label>
\t\t\t\t<input title=\"expressnum\"/>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label style=\"width: 50px\">快递费用</label>
\t\t\t\t<input title=\"cost\" type=\"number\"/>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"sendMsg\" customer_id=\"\" style=\"height: 30px;line-height: 40px\">
\t\t\t<label >是否发送短信：</label>
\t\t\t<input type=\"radio\" value=\"1\" name=\"is_send\" checked=\"true\">是
\t\t\t<input type=\"radio\" value=\"2\" name=\"is_send\">否
\t\t</div> -->

\t\t<!-- <div style=\"margin-bottom:15px;\" class=\"buttons\">
\t\t\t<button class=\"btn btn-info btn-sm active\" disabled>凭证交接</button>
\t\t\t<button class=\"btn btn-info btn-sm\" disabled>票据交接</button>
\t\t\t<button class=\"btn btn-info btn-sm\" disabled>证件交接</button>
\t\t</div> -->

\t\t<div class=\"connects-content\">

\t\t</div>
\t\t<div style=\"margin-top:15px; \">
\t\t\t<label style=\"float:left;width:36px;\">备注：</label>
\t\t\t<textarea style=\"margin-left:5px;width:542px;resize:none;padding:5px;\" class=\"rmark\"></textarea>
\t\t</div>
\t\t<div style=\"text-align:center;margin-top:15px;\">
\t\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
\t\t\t<!-- <button class=\"close_get btn btn-info btn-sm\">
\t\t\t\t\t关闭
\t\t\t\t</button> -->
\t\t\t<button class=\"sure_button add btn btn-info btn-sm\">
\t\t\t\t\t保存
\t\t\t\t</button>
\t\t</div>
\t</div>
</div>
<!-- <div class=\"row\">
\t\t\t<form class=\"item_form\" role=\"form\">
\t\t\t\t<div class=\"form_data\">

\t\t\t\t\t<label> 入库类型： </label>
\t\t\t\t\t<select class=\"type required\" addfield=\"type\" id=\"select\" msg=\"请选择入库类型\">
\t\t\t\t\t\t<option value=\"\"> - - - 请选择 - - - </option>
\t\t\t\t\t\t<option value=\"1\"> 凭证入库 </option>
\t\t\t\t\t\t<option value=\"2\"> 单据入库 </option>
\t\t\t\t\t\t<option value=\"3\"> 证件入库 </option>
\t\t\t\t\t</select>
\t\t\t\t\t<label> 仓库名称： </label>
\t\t\t\t\t<input type=\"text\" addfield=\"ck_name\" class=\"in_num required\" msg=\"仓库名称不能为空\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 入库物品： </label>
\t\t\t\t\t<select class=\"goods required\" addfield=\"goods\" msg=\"请选择入库物品\">
\t\t\t\t\t\t<option>请选择 </option>
\t\t\t\t\t\t<option>凭证1</option>
\t\t\t\t\t\t<option>票据1</option>
\t\t\t\t\t\t<option>凭证1</option>
\t\t\t\t\t</select>
\t\t\t\t\t<label> 入库数量： </label>
\t\t\t\t\t<input type=\"text\" class=\"in_num required\" addfield=\"number\" value=\"1\" msg=\"入库数量必须大于零\" validate=\"int\" />

\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 入库月份： </label>
\t\t\t\t\t<select class=\"in_num required\" addfield=\"month\" msg=\"请选择入库月份\">
\t\t\t\t\t\t<option>  请选择 </option>
\t\t\t\t\t</select>
\t\t\t\t\t<label> 入库日期： </label>
\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<input class=\"date-timepicker1 required\" addfield=\"time\" msg=\"入库日期不能为空\" class=\"form-control\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;\">
                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                        </span>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 公司名称： </label>
\t\t\t\t\t<select class=\"in_num required name\" addfield=\"customer_id\" msg=\"请选择公司名称\">
\t\t\t\t\t\t<option>  请选择 </option>
\t\t\t\t\t</select>
\t\t\t\t\t<label> 经办人： </label>
\t\t\t\t\t<select class=\"in_num required\" addfield=\"jb_id\" msg=\"请选择经办人\">
\t\t\t\t\t\t<option> - - - 请选择 - - - </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label style=\"float:left;\"> 入库备注： </label>
\t\t\t\t\t<textarea style=\"width:calc(100% - 89px);margin-left:5px;padding:5px;\" addfield=\"remark\" class=\"in_remark\"></textarea>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<div class=\"popup_button\">
\t\t\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>

\t\t\t\t<button class=\"sure_button\">
                    <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                    保存
                </button>
\t\t\t</div>
\t\t</div> -->
</div>

<div class=\"row\" id=\"template\" style=\"display:none;width:678px;\">
\t<div class=\"storage\">
\t\t<table class=\"company\" style=\"margin-top: 15px;\">
\t\t\t<tr>
\t\t\t\t<td in_title>企业名称：</td>
\t\t\t\t<td in_content>
\t\t\t\t\t<span field=\"customer_id\"></span>
\t\t\t\t</td>
\t\t\t\t<!--<td in_title>订单号：</td>
\t\t\t\t<td in_content>
\t\t\t\t\t<span field=\"contract_code\"></span>
\t\t\t\t</td>-->
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td in_title>经办人：</td>
\t\t\t\t<td in_content>
\t\t\t\t\t<span field=\"jb_id\"></span>
\t\t\t\t</td>
\t\t\t\t<td in_title>入库月份：</td>
\t\t\t\t<td in_content>
\t\t\t\t\t<span field=\"month\"></span>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td in_title>入库状态：</td>
\t\t\t\t<td in_content>
\t\t\t\t\t<span field=\"status\"></span>
\t\t\t\t</td>
\t\t\t\t<td in_title>入库单号：</td>
\t\t\t\t<td in_content>
\t\t\t\t\t<span field=\"num\"></span>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td in_title>入库日期：</td>
\t\t\t\t<td in_content>
\t\t\t\t\t<span field=\"time\"></span>
\t\t\t\t</td>
\t\t\t\t<td in_title>审批回复：</td>
\t\t\t\t<td in_content>
\t\t\t\t\t<span field=\"qr_remark\"></span>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td in_title>创建人：</td>
\t\t\t\t<td in_content>
\t\t\t\t\t<span field=\"create_id\"></span>
\t\t\t\t</td>
\t\t\t\t<td in_title>创建时间：</td>
\t\t\t\t<td in_content>
\t\t\t\t\t<span field=\"create_time\"></span>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td in_title>审批人：</td>
\t\t\t\t<td in_content>
\t\t\t\t\t<span field=\"qr_id\"></span>
\t\t\t\t</td>
\t\t\t\t<td in_title>审批时间：</td>
\t\t\t\t<td in_content>
\t\t\t\t\t<span field=\"qr_time\"></span>
\t\t\t\t</td>
\t\t\t\t
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td in_title>备注：</td>
\t\t\t\t<td in_content colspan=\"20\" style=\"width: 200px;\">
\t\t\t\t\t<span field=\"remark\" style=\"text-align: center;word-break: break-word;height: 30px;white-space: normal;margin: 6px 0 4px;font-size: 12px;color: #333;\"></span>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t\t<div style=\"padding:0 15px\">
\t\t\t<p style=\"border-bottom:1px solid #ddd;padding:10px 0;\">
\t\t\t\t凭证仓
\t\t\t</p>
\t\t</div>
\t\t<table class=\"pz\">
\t\t\t<tbody></tbody>
\t\t\t<!-- <tr style=\"border-bottom: 1px solid #ddd\">
\t\t\t\t\t<td in_title>凭证仓：</td>
\t\t\t\t\t<td colspan=\"3\"></td>
\t\t\t\t</tr> -->
\t\t</table>
\t\t<div style=\"padding:0 15px\">
\t\t\t<p style=\"border-bottom:1px solid #ddd;padding:10px 0;\">
\t\t\t\t票据仓
\t\t\t</p>
\t\t</div>
\t\t<table class=\"pj\">
\t\t\t<tbody></tbody>
\t\t\t<!-- <tr style=\"border-bottom: 1px solid #ddd\">
\t\t\t\t\t<td in_title>票据仓：</td>
\t\t\t\t\t<td colspan=\"3\"></td>
\t\t\t\t</tr> -->
\t\t</table>
\t\t<div style=\"padding:0 15px\">
\t\t\t<p style=\"border-bottom:1px solid #ddd;padding:10px 0;\">
\t\t\t\t证件仓
\t\t\t</p>
\t\t</div>
\t\t<table class=\"zj\">
\t\t\t<tbody></tbody>
\t\t\t<!-- <tr style=\"border-bottom: 1px solid #ddd\">
\t\t\t\t\t<td in_title>证件仓：</td>
\t\t\t\t\t<td colspan=\"3\"></td>
\t\t\t\t</tr> -->
\t\t</table>
\t</div>
</div>

<div class=\"label_popup\" id=\"feedBack\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
        box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t<span style=\"display: inline-block;\">请填写驳回原因</span>
\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t</div>
\t\t<div style=\"padding: 10px 50px;\">
\t\t\t<input type=\"text\" width=\"200px\" style=\"margin: auto;\" id=\"labelName\" />
\t\t\t<!--<hr>-->
\t\t</div>
\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t<button class=\"close_label\">关闭</button>
\t\t\t<button class=\"hold\">保存</button>
\t\t</div>
\t</div>
</div>

";
        // line 872
        $this->loadTemplate("admin/mark.html", "admin/depotManagement/depotStorage.html", 872)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/depotManagement/depotStorage.html", 872)->display($context);
        // line 873
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>

<!--<script src=\"//res.layui.com/layui/dist/layui.js\" charset=\"utf-8\"></script>-->
<script type=\"text/javascript\">
\t\$(function() {

        //导出功能
        cs.exportFile({
            url:\"/api/api_accountancies/export\",
            type:1,
            title:\"入库记录\"

        });

\t\tif(cs.approve_authority({
\t\t\t\tname: '入库',
\t\t\t\tnodes: [148]
\t\t\t})) {
\t\t\t\$('[contentAuthority=\"148\"]').show();
\t\t}
\t\tcs.getNodes([147]);
\t\tcs.dataRang();
\t\tvar order = 'ckm_in_warehouse.id desc';
\t\tvar pagesize = 10;
\t\tvar filter = '';
\t\tvar customers = {};
\t\tvar employees = {};

\t\ttspage();

\t\tfunction tspage() {
\t\t\tif(ykp.getCookie('detailsId') && ykp.getCookie('detailsId') != '') {
\t\t\t\tvar id = ykp.getCookie('detailsId');
\t\t\t\tvar data = {
\t\t\t\t\ttype: 1,
\t\t\t\t\tlimit: page_size,
\t\t\t\t\tfilter: `ckm_in_warehouse.id = \${id}`
\t\t\t\t}
\t\t\t\tgetList_2(data);
\t\t\t\tykp.setCookie('detailsId', '', 1 / 24);
\t\t\t} else {
\t\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\t\tykp.setCookie(\"where\", \"\");
\t\t\t\tgetList();
\t\t\t}
\t\t}
\t\t
\t\tcs.getAllCw(function(option) {
\t\t\t\t\$('#heightsearch1 .cw').html(option);
\t\t\t\t\$('#heightsearch1 .cw').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t})
\t\t\t})

\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_accountancies/index_new',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: \"\",
\t\t\t\tlimit: pagesize,
\t\t\t\ttype: 1
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '.pageBar'
\t\t\t},
\t\t\tcontentId: \"#datalist\", //默认排序
\t\t\tinitOrder: \"\", //初始化sort
\t\t\tdefaultOrder: order,
\t\t\tparams: [{
\t\t\t\tid: \"#dynamic-table\",
\t\t\t\tfield: [\"\", \"\", \"ckm_in_warehouse.status\", \"ckm_in_warehouse.num\", \"khm_customer.id\", \"khm_customer.customer_num\", \"\",\"\",\"ckm_in_warehouse.time\",\"\",\"ckm_in_warehouse.remark\",\"ckm_in_warehouse.create_id\",\"ckm_in_warehouse.create_time\",
\t\t\t\t\t\"ckm_in_warehouse.qr_id\",\"ckm_in_warehouse.qr_time\",\"ckm_in_warehouse.month\",\"ckm_in_warehouse.qr_remark\"
\t\t\t\t]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tconsole.log(_sort_role);
\t\t\tsort_role = _sort_role;
\t\t\thandleData(res);
\t\t});

\t\tfunction getList_2(data) {
\t\t\tgeneralSearch();
\t\t\tadvancedSearch();
\t\t\tykp.list({
\t\t\t\turl: '/api/api_accountancies/index_new',
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
\t\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t} else {
\t\t\t\t\t\thandleData(res);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}

\t\t\$('.myFilter').click(function() {
\t\t\tif(!\$(this).hasClass('clc')) {
\t\t\t\t\$(this).addClass('clc').siblings().removeClass('clc');
\t\t\t}
\t\t\tvar data = {
\t\t\t\t'type': 1,
\t\t\t\t\"limit\": pagesize,
\t\t\t\t'page': 1,
\t\t\t\t'order': order
\t\t\t}
\t\t\tvar filter_ = \$(this).attr('data-status');
\t\t\tif(filter_ == 'a') {
\t\t\t\tfilter = \"\";
\t\t\t\tgetList();
\t\t\t\treturn;
\t\t\t}
\t\t\tfilter = 'ckm_in_warehouse.status = ' + filter_;
\t\t\tdata['filter'] = 'ckm_in_warehouse.status = ' + filter_;
\t\t\tgetList_2(data);

\t\t})

\t\t\$('#filterBtns a').mouseover(function() {
\t\t\t\$(this).addClass('over');
\t\t})
\t\t\$('#filterBtns a').mouseout(function() {
\t\t\t\$(this).removeClass('over');
\t\t})

\t\tlayuiTab();

\t\tfunction layuiTab() {
\t\t\t//console.log(layui);
\t\t\tlayui.use('element', function() {
\t\t\t\tvar \$ = layui.jquery,
\t\t\t\t\telement = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块
\t\t\t});
\t\t}
\t\t//获取所有客户  与  员工
\t\tgetCusAndEmps();

\t\tfunction getCusAndEmps() {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_customer/f7',
\t\t\t\tmethod: 'post',
\t\t\t\tasync: false,
\t\t\t\tdata: {
\t\t\t\t\tselect: 'khm_customer.id,khm_customer.name,khm_customer.customer_num',
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\$('.advandced-search').select2({
\t\t\t\t\t\tallowClear: true
\t\t\t\t\t});
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tcustomers[data[i]['id']] = {
\t\t\t\t\t\t\tname:data[i]['name'],
\t\t\t\t\t\t\tnum:data[i]['customer_num']
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_employees/f7',
\t\t\t\tmethod: 'post',
\t\t\t\tasync: false,
\t\t\t\tdata: {
\t\t\t\t\tselect: 'bmm_employees.id,bmm_employees.name'
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\$('.advandced-search').select2({
\t\t\t\t\t\tallowClear: true
\t\t\t\t\t});
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tif(data[i]['name']) {
\t\t\t\t\t\t\temployees[data[i]['id']] = data[i]['name'];
\t\t\t\t\t\t\t\$('.advandced-search').append(new Option(data[i]['name'], data[i]['id']));
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//切换每页显示的条目数
\t\t\$('#changePageNum').change(function() {
\t\t\tpagesize = \$(this).val();
\t\t\tykp.setCookie('page_size', pagesize);
\t\t\tgetList();
\t\t})

\t\t//时间插件
\t\tif(!ace.vars['old_ie']) {
\t\t\t\$('.date-timepicker1').datetimepicker({
\t\t\t\t// format: 'YYYY-MM-DD', //use this option to display  seconds
\t\t\t\ticons: {
\t\t\t\t\ttime: 'fa fa-clock-o',
\t\t\t\t\tdate: 'fa fa-calendar',
\t\t\t\t\tup: 'fa fa-chevron-up',
\t\t\t\t\tdown: 'fa fa-chevron-down',
\t\t\t\t\tprevious: 'fa fa-chevron-left',
\t\t\t\t\tnext: 'fa fa-chevron-right',
\t\t\t\t\ttoday: 'fa fa-arrows ',
\t\t\t\t\tclear: 'fa fa-trash',
\t\t\t\t\tclose: 'fa fa-times'
\t\t\t\t}
\t\t\t}).next().on(ace.click_event, function() {
\t\t\t\t\$(this).prev().focus();
\t\t\t});
\t\t}

\t\t//高级搜索显示 &  隐藏
\t\t/*\$('.in').click(function() {
\t\t\tif(\$('#heightsearch').hasClass('active')) {
\t\t\t\t\$('#heightsearch').removeClass('active').css('z-index', '');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t}
\t\t});\t\t\t\t
\t\t
\t\t\$('#heightsearch').click(function() {
\t\t\tif(\$(this).hasClass('active')) {
\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\$(this).removeClass('active').css('z-index', '');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t} else {
\t\t\t\t\$('.in').addClass('modal-backdrop');
\t\t\t\t\$(\"#heightsearch1\").slideDown();
\t\t\t\t\$(this).attr('class', 'btn btn-info btn-sm active').css('z-index', '1041');
\t\t\t\tcs.rest(false,'#heightsearch1');
\t\t\t}
\t\t})*/
\t\tcs.showHeightSearch('#heightsearch', '#heightsearch1')
\t\t//高级搜索
\t\tfunction advancedSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_accountancies/index_new',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\ttype: 1,
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
\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t} else {
\t\t\t\t\thandleData(res);
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//获取入库列表
\t\t//getList();

\t\t\$('#flush').click(function() {
\t\t\tfilter = '';
\t\t\t\$('[pts=\"0\"]').val('');
\t\t\t\$('[sear=\"ckm_in_warehouse.jb_id\"]').val('').trigger('change');
\t\t\t\$('[sear=\"ckm_in_warehouse.create_id\"]').val('').trigger('change');
\t\t\t\$('[sear=\"ckm_in_warehouse.qr_id\"]').val('').trigger('change');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetList();
\t\t})

\t\tfunction getList() {
\t\t\tgeneralSearch();
\t\t\tadvancedSearch();
\t\t\tykp.list({
\t\t\t\turl: '/api/api_accountancies/index_new',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\ttype: 1,
\t\t\t\t\tfilter: filter,
\t\t\t\t\tlimit: pagesize,
\t\t\t\t\torder: order
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t} else {
\t\t\t\t\t\thandleData(res);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}
\t\t//处理数据
\t\tfunction handleData(res) {
\t\t\tvar data = res.data.items;
\t\t\t// return;
\t\t\tvar html = [];

\t\t\tvar status = []; //该数组存放th display属性值
\t\t\t\$('#dynamic-table .thColor th').each(function(i, e) {
\t\t\t\tstatus.push(\$(this).css('display'));
\t\t\t});
            // console.log(status);

\t\t\tvar states = ['待审批', '未通过', '已通过']; //该数组存放状态
\t\t\t// var types = ['凭证', '单据', '证件']; //该数组存放入库类型
\t\t\t// var warehouses = ['凭证仓', '单据仓', '证件仓']; //该数组存放仓库

\t\t\t//审批权限为true可以审批,为false不可审批
\t\t\tvar spApp = cs.approve_authority({
\t\t\t\tname: '入库',
\t\t\t\tnodes: [149]
\t\t\t});
\t\t\tvar cxApp = cs.approve_authority({
\t\t\t\tname: '入库',
\t\t\t\tnodes: [266]
\t\t\t});
\t\t\t// var edit_statu = cs.getNodes([150],true);

\t\t\t//物品数据
\t\t\tvar goodsData = [];
\t\t\t//物品数据html
\t\t\tvar goodsData_html = [];
\t\t\t// console.log(employees);
\t\t\tfor(var i in data) {
\t\t\t\tgoodsData = data[i]['goodsList'];
\t\t\t\tfor(var k in goodsData) {
\t\t\t\t\tgoodsData_html.push(goodsData[k]['ckm_in_warehouse.goods'] + ':' + goodsData[k]['ckm_in_warehouse.number']);
\t\t\t\t}
\t\t\t\tgoodsData_html.sort();

\t\t\t\thtml.push(`<tr data-id=\"\${data[i]['ckm_in_warehouse.num']}\" data-status=\"\${data[i]['ckm_in_warehouse.status']}\">
                            <td class=\"center\">
                                <label class=\"pos-rel\">
                                    <input type=\"checkbox\" name=\"check\" class=\"ace\"/>
                                    <span class=\"lbl\"></span>
                                </label>
                            </td>   
                            <td>
                            <label class=\"pos-rel\">
                             \t<a class=\"btOrange info\" href=\"#\" title=\"详情\" style=\" color:#fff !important\"><i class=\"fa fa-info \"></i></a>
                                <a class=\"btOrange sp\"  href=\"#\" contentAuthority=\"266\" data-status = \"0\" style=\"display: \${cxApp ? (data[i]['ckm_in_warehouse.status'] == 2 ? 'inline-block' : 'none') : 'none'}; color:#fff !important\" title=\"撤销\"><i class=\"fa fa-rotate-left\"></i></a>
                        \t\t<a class=\"btGreen sp\" href=\"#\" contentAuthority=\"149\" data-status = \"2\" style=\"display: \${spApp ? (data[i]['ckm_in_warehouse.status'] == 0 ?'inline-block' : 'none') : 'none'}; color:#fff !important\" title=\"通过\"><i class=\"fa fa-check-circle-o\"></i></a>
                        \t\t<a class=\"btRed sp\" href=\"#\" contentAuthority=\"149\" data-status = \"1\" style=\"display: \${spApp ? (data[i]['ckm_in_warehouse.status'] == 0 ?'inline-block' : 'none') : 'none'}; color:#fff !important\" title=\"驳回\"><i class=\"fa fa-times-circle\"></i></a>
                            </label>
                            
                            </td>
                            <td data-num=\"1\" style=\"display:\${status[2]};\" class=\"center\">
                                \${states[data[i]['ckm_in_warehouse.status']]}
                            </td>
                            <td data-num=\"2\" style=\"display:\${status[3]};\" class=\"center\">
                                \${data[i]['ckm_in_warehouse.num']}
                            </td>
                            <td class=\"center\" style=\"display:\${status[4]};\" data-num=\"3\" data-cid=\"\${data[i]['khm_customer.id']}\">
                                <a href=\"#\" class=\"customerDetail pos-rel\">\${data[i]['khm_customer.name']}</a>
                                <label class=\"pos-rel\">
\t\t\t\t \t\t\t\t<i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data[i]['Remark'].length > 0 ? 'red' : ''}\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i>
\t\t\t \t\t\t\t </label>
                           
                            </td>
                            <td class=\"center\" style=\"display:\${status[5]};\" data-num=\"4\">
                                \${data[i]['khm_customer.customer_num']}
                            </td>
                            <td class=\"center\" style=\"display:\${status[6]};\" data-num=\"14\">
                                \${data[i]['position']['pos_name']+data[i]['position']['pos_num']}
                            </td>
                            <td class=\"center\" style=\"display:\${status[7]};\" data-num=\"5\">
                            \${data[i]['jb_info']['name'] || data[i]['create_info']['name']}                              
                            </td>                          
                            <td class=\"center\" style=\"display:\${status[8]};\" data-num=\"6\">
                                \${cs.getNowTime(data[i]['ckm_in_warehouse.time'])}
                            </td>
                            <td class=\"center\" style=\"display:\${status[9]};\" data-num=\"7\" title=\"\${goodsData_html.join('&#13;')}\">
                            \t<label style=\"text-overflow: ellipsis;font-weight:normal;\" >\${goodsData_html.join('；')}</label>
                            </td>
                            <td class=\"center\" style=\"display:\${status[10]};\" data-num=\"15\">
                                \${data[i]['ckm_in_warehouse.remark']}
                            </td>
                            <td class=\"center\" style=\"display:\${status[11]};\" data-num=\"8\">
                                \${data[i]['ckm_in_warehouse.create_id'] != 0 ? employees[data[i]['ckm_in_warehouse.create_id']] : ''}
                            </td>
                            <td class=\"center\" style=\"display:\${status[12]};\" data-num=\"9\">
                                \${cs.getNowTime(data[i]['ckm_in_warehouse.create_time'],true)}
                            </td>
                            <td class=\"center\" style=\"display:\${status[13]};\" data-num=\"10\">
                                \${data[i]['ckm_in_warehouse.qr_id'] != 0 ? employees[data[i]['ckm_in_warehouse.qr_id']] : ''}
                            </td>
                            <td class=\"center\" style=\"display:\${status[14]};\" data-num=\"11\">
                                \${data[i]['ckm_in_warehouse.qr_time'] != 0? cs.getNowTime(data[i]['ckm_in_warehouse.qr_time'],true) : ''}
                            </td>
                            <td class=\"center\" style=\"display:\${status[15]};\" data-num=\"12\">
                                 \${data[i]['ckm_in_warehouse.month']}
                            </td>
                            <td class=\"center\" style=\"display:\${status[16]};\" data-num=\"13\">
                                \${data[i]['ckm_in_warehouse.qr_remark']}
                            </td>
                        </tr>`);

\t\t\t\t//物品数据
\t\t\t\tgoodsData = [];
\t\t\t\t//物品数据html
\t\t\t\tgoodsData_html = [];
\t\t\t};
\t\t\t\$('#datalist').html(html.join(''));
\t\t\tcustom.showReamrk();
\t\t\tcustom.get_custom_info();
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();

\t\t\tvar spStatus = cs.getSpStatus('入库', true);
\t\t\t//点击 审批 or  驳回 or  撤销
\t\t\t\$(\"#datalist tr\").find('.sp').click(function() {
\t\t\t\tvar status = \$(this).attr('data-status');
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tchangeStatus(status, id);
\t\t\t});

\t\t\t//编辑入库
\t\t\t// edit_in();

\t\t\tplsp(); //批量审批

\t\t\t//查看详情
\t\t\tseeDetails(data);
\t\t}

\t\t//查看详情
\t\tfunction seeDetails(data) {
\t\t\t\$('.info').unbind('click').click(function() {
\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\tvar _data = data[index];

\t\t\t\tshowMark('#template');
\t\t\t\t\$('#showBox .title').text('入库详情');
                \$(\"#temHeader\").width(\$(\"#showBox\").width()-47);

\t\t\t\t//入库基本信息
\t\t\t\tvar field;
\t\t\t\t\$('#templateCon [field]').each(function(i, e) {
\t\t\t\t\tfield = 'ckm_in_warehouse.' + \$(this).attr('field');
\t\t\t\t\tif(\$(this).attr('field') == 'jb_id' || \$(this).attr('field') == 'create_id' || \$(this).attr('field') == 'qr_id') {
\t\t\t\t\t\t\$(this).text(_data[field] != '0' ? employees[_data[field]] : '');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr('field') == 'time' || \$(this).attr('field') == 'create_time' || \$(this).attr('field') == 'qr_time') {
\t\t\t\t\t\t\$(this).text(_data[field] != '0' ? cs.getNowTime(_data[field],true) : '');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr('field') == 'status') {
\t\t\t\t\t\t\$(this).text(_data[field] == '1' ? '未通过' : (_data[field] == '2' ? '已通过' : '待审批\t'));
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr('field') == 'customer_id') {
\t\t\t\t\t\t\$(this).text(customers[_data[field]]['name']);
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\t\$(this).text(_data[field]);
\t\t\t\t});

\t\t\t\t//物品数据
\t\t\t\tvar goodsData = _data['goodsList'];
\t\t\t\tvar pz_html = []; //凭证html
\t\t\t\tvar pj_html = []; //票据html
\t\t\t\tvar zj_html = []; //证件html

\t\t\t\tfor(var i in goodsData) {
\t\t\t\t\t//凭证
\t\t\t\t\tif(goodsData[i]['ckm_in_warehouse.type'] == '1') {
\t\t\t\t\t\tpz_html.push(
\t\t\t\t\t\t\t`<tr>
\t\t\t\t\t\t\t\t<td in_title>物品名称：</td>
\t\t\t\t\t\t\t\t<td in_content>
\t\t\t\t\t\t\t\t\t<span>\${goodsData[i]['ckm_in_warehouse.goods']}</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td in_title=\"\">数量</td>
\t\t\t\t\t\t\t\t<td in_content>
\t\t\t\t\t\t\t\t\t<span>\${goodsData[i]['ckm_in_warehouse.number']}</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>`
\t\t\t\t\t\t);
\t\t\t\t\t}
\t\t\t\t\t//票据
\t\t\t\t\tif(goodsData[i]['ckm_in_warehouse.type'] == '2') {
\t\t\t\t\t\tpj_html.push(
\t\t\t\t\t\t\t`<tr>
\t\t\t\t\t\t\t\t<td in_title>物品名称：</td>
\t\t\t\t\t\t\t\t<td in_content>
\t\t\t\t\t\t\t\t\t<span>\${goodsData[i]['ckm_in_warehouse.goods']}</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td in_title=\"\">数量</td>
\t\t\t\t\t\t\t\t<td in_content>
\t\t\t\t\t\t\t\t\t<span>\${goodsData[i]['ckm_in_warehouse.number']}</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>`
\t\t\t\t\t\t);
\t\t\t\t\t}
\t\t\t\t\t//证件
\t\t\t\t\tif(goodsData[i]['ckm_in_warehouse.type'] == '3') {
\t\t\t\t\t\tzj_html.push(
\t\t\t\t\t\t\t`<tr>
\t\t\t\t\t\t\t\t<td in_title>物品名称：</td>
\t\t\t\t\t\t\t\t<td in_content>
\t\t\t\t\t\t\t\t\t<span>\${goodsData[i]['ckm_in_warehouse.goods']}</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td in_title=\"\">数量</td>
\t\t\t\t\t\t\t\t<td in_content>
\t\t\t\t\t\t\t\t\t<span>\${goodsData[i]['ckm_in_warehouse.number']}</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>`
\t\t\t\t\t\t);
\t\t\t\t\t}
                    \$(\"#temHeader\").width(\$(\"#showBox\").width()-47);
\t\t\t\t}

\t\t\t\t\$('#templateCon .pz tbody').append(pz_html.length > 0 ? pz_html.join('') : '<tr><td colspan=\"30\" style=\"text-align:center !important;\">暂无数据</td></tr>');
\t\t\t\t\$('#templateCon .pj tbody').append(pj_html.length > 0 ? pj_html.join('') : '<tr><td colspan=\"30\" style=\"text-align:center !important;\">暂无数据</td></tr>');
\t\t\t\t\$('#templateCon .zj tbody').append(zj_html.length > 0 ? zj_html.join('') : '<tr><td colspan=\"30\" style=\"text-align:center !important;\">暂无数据</td></tr>');
\t\t\t});

\t\t}

\t\tfunction plsp() {
\t\t\t\$('.plSp').unbind('click').click(function() {
\t\t\t\tvar num = 0;
\t\t\t\tvar status = '';
\t\t\t\tvar coldata = [];
\t\t\t\tvar Statu = false;
\t\t\t\t\$('#datalist').find('input[type=checkbox]').each(function(i) {
\t\t\t\t\tif(\$(this).is(':checked')) {
\t\t\t\t\t\tnum++;
\t\t\t\t\t\tstatus = \$(this).parents('tr').attr('data-status') == '0' ? 2 : 0;
\t\t\t\t\t\tif(\$(this).parents('tr').attr('data-status') != 0) {
\t\t\t\t\t\t\tykp.prompt('审批过的不能批量审批!');
\t\t\t\t\t\t\tStatu = false;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tcoldata.push({
\t\t\t\t\t\t\t\tnum: \$(this).parents('tr').attr('data-id'),
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
\t\t\t\t\t\t\turl: \"/api/api_accountancies/batch_sh_io_new\",
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tdata: JSON.stringify(coldata)
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('审批成功');
\t\t\t\t\t\t\t\tgetList(1);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t}

\t\t\t})
\t\t}

\t\tfunction select2() {
\t\t\t//参与人员
\t\t\t\$('#templateCon .pzList').css('width', '435px').select2({
\t\t\t\tallowClear: true
\t\t\t})
\t\t\t\$('#select2-multiple-style .btn').on('click', function(e) {
\t\t\t\tvar target = \$(this).find('input[type=radio]');
\t\t\t\tvar which = parseInt(target.val());
\t\t\t\tif(which == 2)
\t\t\t\t\t\$('.select2').addClass('tag-input-style');
\t\t\t\telse
\t\t\t\t\t\$('.select2').removeClass('tag-input-style');
\t\t\t});
\t\t}

\t\t//编辑入库
\t\t// function edit_in() {
\t\t// \t\$('.edit').click(function() {
\t\t// \t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t// \t\tshowMark('.popup_new');
\t\t// \t\t\$('#showBox .title').html('编辑入库');

\t\t// \t\ttimeplug();
\t\t// \t\tgetInfo();
\t\t// \t\tfor(var i in employees) {
\t\t// \t\t\tif(employees[i]) {
\t\t// \t\t\t\t\$('#templateCon select[addfield=\"jb_id\"]').append(new Option(employees[i], i));
\t\t// \t\t\t}
\t\t// \t\t}
\t\t// \t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t// \t\tykp.doAjax({
\t\t// \t\t\turl: '/api/api_accountancies/info_io',
\t\t// \t\t\tmethod: 'post',
\t\t// \t\t\tdata: {
\t\t// \t\t\t\ttype: 1,
\t\t// \t\t\t\tid: id
\t\t// \t\t\t},
\t\t// \t\t\tsuccess: function(res) {
\t\t// \t\t\t\t//console.log(res.data);
\t\t// \t\t\t\tvar data = res.data;
\t\t// \t\t\t\t//添加默认数据
\t\t// \t\t\t\t\$('#templateCon .item_form').find('input[addfield],select[addfield],textarea[addfield]').not(':eq(1)').each(function(i) {
\t\t// \t\t\t\t\ti == 4 ? \$(this).val(cs.getNowTime(data[\$(this).attr('addfield')])) : \$(this).val(data[\$(this).attr('addfield')]);
\t\t// \t\t\t\t})
\t\t// \t\t\t\t//添加默认物品
\t\t// \t\t\t\t\$('#templateCon input[addfield=\"ck_name\"]').val(\$('#templateCon select[addfield=\"type\"]').find('option:selected').text().trim().replace(/入库/, '仓'));
\t\t// \t\t\t\tvar result = ykp.getFormData('#templateCon', true);
\t\t// \t\t\t\tif(result.status) {

\t\t// \t\t\t\t\tykp.doAjax({
\t\t// \t\t\t\t\t\turl: '/api/api_accountancies/list_goods',
\t\t// \t\t\t\t\t\tmethod: 'post',
\t\t// \t\t\t\t\t\tdata: {
\t\t// \t\t\t\t\t\t\ttype: \$('#templateCon select[addfield=\"type\"]').val()
\t\t// \t\t\t\t\t\t},
\t\t// \t\t\t\t\t\tsuccess: function(res) {
\t\t// \t\t\t\t\t\t\tvar data = res.data.list;
\t\t// \t\t\t\t\t\t\t\$('#templateCon select[addfield=\"goods\"]').empty().append('<option>  请选择 </option>');
\t\t// \t\t\t\t\t\t\tfor(var i in data) {
\t\t// \t\t\t\t\t\t\t\t\$('#templateCon select[addfield=\"goods\"]').append(new Option(data[i]['ckm_warehouse_goods.name'], data[i]['ckm_warehouse_goods.name']));
\t\t// \t\t\t\t\t\t\t}
\t\t// \t\t\t\t\t\t\tchangeName();
\t\t// \t\t\t\t\t\t\tsubmit(id);
\t\t// \t\t\t\t\t\t}
\t\t// \t\t\t\t\t});
\t\t// \t\t\t\t}
\t\t// \t\t\t}
\t\t// \t\t});
\t\t// \t});
\t\t// }

\t\t//全选 反选
\t\t\$('.thColor .ace').click(function() {
\t\t\t\$('#datalist .ace').prop('checked', this.checked);
\t\t});

\t\t//对点击驳回进行处理
\t\tfunction changeStatus(status, id) {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_accountancies/sh_io_new',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tnum: id,
\t\t\t\t\tstatus: status
\t\t\t\t}
\t\t\t}
console.log(status)
\t\t\tif(status == 1) {
\t\t\t\t\$('#feedBack').show();
\t\t\t\t\$('#feedBack').find('input').val('');
\t\t\t\t\$('#feedBack .hold').unbind('click').click(function() {
\t\t\t\t\tvar approve_reply = \$('#feedBack').find('input').val().trim();
\t\t\t\t\tif(approve_reply == '') {
\t\t\t\t\t\tykp.prompt('不能为空！');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}else{
\t\t\t\t\t\tykp.prompt('驳回成功！');
\t\t\t\t\t\t\tdata.data.qr_remark = approve_reply;
\t\t\t\t\t// data.data.approve_reply = approve_reply;
\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t
\t\t\t\t})
\t\t\t\tcs.closePop();
\t\t\t} else if(status == 0) {
//\t\t\t\tbootbox.confirm('确认撤销审批？', function(flag) {
//\t\t\t\t\tif(flag) {
//\t\t\t\t\t\tsetStatus(data);
//\t\t\t\t\t}
//\t\t\t\t})
                layui.use('layer',function(){
                \tvar layer = layui.layer ;
                \tlayer.confirm('确认撤销审批？' , function(flag){
                \t\tif(flag){
                \t\t\tlayer.closeAll();
                \t\t\tsetStatus(data);
                \t\t}
                \t})
                })
\t\t\t}else if(status == 2){
\t\t\t\tykp.prompt('审批通过！');
\t\t\t\tsetStatus(data);
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
\t\t//\t\t\tykp.prompt('审批成功!');
\t\t\t\t\tgetList();
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//普通搜索
\t\tfunction generalSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_accountancies/index_new',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\ttype: 1,
\t\t\t\t\tlimit: pagesize,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}

\t\t\tcs.doSearch('#search', data, 'filter', false, function(res, _filter) {
\t\t\t\tfilter = _filter;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t} else {
\t\t\t\t\thandleData(res);
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//时间插件
\t\tfunction timeplug() {
\t\t\tif(!ace.vars['old_ie']) {
\t\t\t\t\$('#templateCon .date-timepicker1').datetimepicker({
\t\t\t\t\t// format: 'YYYY-MM-DD', //use this option to display seconds
\t\t\t\t\ticons: {
\t\t\t\t\t\ttime: 'fa fa-clock-o',
\t\t\t\t\t\tdate: 'fa fa-calendar',
\t\t\t\t\t\tup: 'fa fa-chevron-up',
\t\t\t\t\t\tdown: 'fa fa-chevron-down',
\t\t\t\t\t\tprevious: 'fa fa-chevron-left',
\t\t\t\t\t\tnext: 'fa fa-chevron-right',
\t\t\t\t\t\ttoday: 'fa fa-arrows ',
\t\t\t\t\t\tclear: 'fa fa-trash',
\t\t\t\t\t\tclose: 'fa fa-times'
\t\t\t\t\t}
\t\t\t\t}).next().on(ace.click_event, function() {
\t\t\t\t\t\$(this).prev().focus();
\t\t\t\t});
\t\t\t}
\t\t}

\t\t//自定义table
\t\tcs.custorm_check('#dynamic-table', '#datalist', true);

\t\t//删除一行
\t\tfunction removeT() {
\t\t\t\$('.remove').click(function() {
\t\t\t\t\$(this).parents('tr').remove();
\t\t\t})
\t\t}

\t\t//票据交接列表添加一行
\t\tfunction showTicket(goods) {
\t\t\t\$('#templateCon .addTicket').unbind('click').click(function() {
\t\t\t\tvar tr = `<tr>
\t\t\t\t<td><a href=\"javascript:;\" class=\"remove\">-</a></td><td>
\t\t\t\t<select class=\"goods\">
\t\t\t\t\${goods['PJ']}
\t\t\t\t</select></td><td><input type=\"number\" class=\"count\" value=\"\"/></td><td><input class=\"money\" value=\"0\" type=\"number\"/></td></tr>`;
\t\t\t\t\$('#templateCon table>#ticketBody').append(tr);
\t\t\t\tremoveT();
\t\t\t})
\t\t}

\t\t//证件交接列表添加一行
\t\tfunction showCard(goods) {
\t\t\t\$('#templateCon .addCard').unbind('click').click(function() {
\t\t\t\tvar tr1 = `<tr><td><a href=\"javascript:;\" class=\"remove\">-</a></td><td><select class=\"goods\">\${goods['ZJ']}
\t\t\t\t</select></td><td><input type=\"number\" class=\"count\" value=\"\"/></td></tr>`;
\t\t\t\t\$('#templateCon table>#cardBody').append(tr1);
\t\t\t\tremoveT();
\t\t\t})
\t\t}

\t\tfunction getway() {
\t\t\t\$('#templateCon select[title=\"getway\"]').change(function() {
\t\t\t\tvar val = \$(this).val();
\t\t\t\tif(val == 3) {
\t\t\t\t\t\$(\"#templateCon #express\").show();
\t\t\t\t\tcs.upload1({
\t\t\t\t\t\tel: \"#templateBox #upload1\",
\t\t\t\t\t\tael: \"#templateBox #fileBox\"
\t\t\t\t\t})
\t\t\t\t} else {
\t\t\t\t\t\$(\"#templateCon #express\").hide();
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//切换交接表
\t\tfunction changeJoinTable(goods) {
\t\t\t\$('#templateCon .buttons button').unbind('click').click(function() {
\t\t\t\tif(!\$('#templateCon [addfield=\"customer_id\"]').val()) {
\t\t\t\t\tykp.prompt('请选择公司');
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tvar index = \$(this).index();
\t\t\t\tif(index == 0) {
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tif(\$(this).hasClass('active')) {
\t\t\t\t\t\$(this).removeClass('active');
\t\t\t\t\tvar _class = \$('#templateCon .connects-content>div').eq(index).find('table').attr('class');
\t\t\t\t\t\$('#templateCon .connects-content>.' + _class).remove();
\t\t\t\t} else {
\t\t\t\t\t\$(this).addClass('active');
\t\t\t\t\tvar _table = \$('#templateCon .connects-content>div').eq(index).find('div').html();
\t\t\t\t\t_table = \$(_table).css('display', 'table');
\t\t\t\t\t\$('#templateCon .connects-content').append(_table);
\t\t\t\t\t//\t\t\t\t\t\$('#templateCon .connects-content>div').eq(index).find('.page-header').css('display','block');
\t\t\t\t\t//\t\t\t\t\t\$('#templateCon .page-header').css('display','block');
\t\t\t\t\tshowTicket(goods);
\t\t\t\t\tshowCard(goods);
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//切换公司获取相应的长期合同订单编号
\t\t//
\t\tfunction changeCompanyGetNum() {
\t\t\t\$('#templateCon [addfield=\"customer_id\"]').change(function() {
\t\t\t\t//清空订单号下拉选中的数据
\t\t\t\t\$('#templateCon [addfield=\"contract_code\"]').find('option').not(':first').remove();

\t\t\t\t//清空凭证月份 和 服务月份
\t\t\t\t\$('#templateCon .voucher .voucher_div').html('');
\t\t\t\t\$('#templateCon .service_month .voucher_div').html('');

\t\t\t\t//清空票据talbe和证件table,按钮删除active class
\t\t\t\t\$('#templateCon .connects-content>table').remove();
\t\t\t\t\$('#templateCon .buttons button').removeClass('active');

\t\t\t\tif(!\$(this).val()) {
\t\t\t\t\t\$('#templateCon [addfield=\"contract_code\"]').val('').select2();
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t//cs.getYearAndMonth('2014-1-1', '2025-12-31', '#templateBox .pzList','',true);
\t\t\t\tcs.getYearAndMonth('2014-1-1', '2025-12-31', '#templateBox .pzList','',true,true);
\t\t\t\tselect2();
\t\t\t\t\$('#templateCon .buttons button').not(':first').prop('disabled', false);
\t\t\t\t//\t\t\t\tchangeContractCodeGetMonthAndGoods();

\t\t\t\t//获取物品信息
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_accountancies/list_goods',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tasync: false,
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\tvar goods = {};

\t\t\t\t\t\t//票据物品
\t\t\t\t\t\tvar pjgoods = data['PJ']['list'];
\t\t\t\t\t\t//证件物品
\t\t\t\t\t\tvar zjgoods = data['ZJ']['list'];

\t\t\t\t\t\t//票据物品thml
\t\t\t\t\t\tvar pjgoods_html = [];
\t\t\t\t\t\tfor(var i in pjgoods) {
\t\t\t\t\t\t\tpjgoods_html.push('<option value=\"' + pjgoods[i]['ckm_warehouse_goods.name'] + '\">' + pjgoods[i]['ckm_warehouse_goods.name'] + '</option>');
\t\t\t\t\t\t}

\t\t\t\t\t\t//证件物品thml
\t\t\t\t\t\tvar zjgoods_html = [];
\t\t\t\t\t\tfor(var i in zjgoods) {
\t\t\t\t\t\t\tzjgoods_html.push('<option value=\"' + zjgoods[i]['ckm_warehouse_goods.name'] + '\">' + zjgoods[i]['ckm_warehouse_goods.name'] + '</option>');
\t\t\t\t\t\t}

\t\t\t\t\t\tgoods = {
\t\t\t\t\t\t\t'PJ': pjgoods_html,
\t\t\t\t\t\t\t'ZJ': zjgoods_html
\t\t\t\t\t\t};

\t\t\t\t\t\t\$('#templateCon .bill tbody select').html(pjgoods_html.join(''));
\t\t\t\t\t\t\$('#templateCon .certificate tbody select').html(zjgoods_html.join(''));

\t\t\t\t\t\t//切换交接表
\t\t\t\t\t\tchangeJoinTable(goods);
\t\t\t\t\t\tshowTicket(goods);
\t\t\t\t\t\tshowCard(goods);
\t\t\t\t\t}
\t\t\t\t})

\t\t\t\tvar customer_id = \$(this).val();
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_contract/f7',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter: 'htm_contract.contract_type = 1 and htm_contract.customer_id = ' + customer_id,
\t\t\t\t\t\tselect: 'htm_contract.id,htm_contract.contract_code'
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\tvar contract_code_html = [];
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\tcontract_code_html.push(
\t\t\t\t\t\t\t\t`<option value=\"\${data[i]['id']}\">\${data[i]['contract_code']}</option>`
\t\t\t\t\t\t\t);
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#templateCon [addfield=\"contract_code\"]').append(contract_code_html.join('')).val('').select2();

\t\t\t\t\t\t// console.log(\$('#templateCon [addfield=\"contract_code\"]').val());

\t\t\t\t\t\t//切换订单号获取凭证和服务月份以及物品信息

\t\t\t\t\t\t//切换订单号获取
\t\t\t\t\t\t// changeContractCodeGetGoods();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t}

\t\t//切换订单号获取凭证和服务月份以及物品信息
\t\tfunction changeContractCodeGetMonthAndGoods() {
\t\t\t//\t\t\t\$('#templateCon [addfield=\"contract_code\"]').change(function(){
\t\t\t//清空票据talbe和证件table,按钮删除active class
\t\t\t\$('#templateCon .connects-content>table').remove();
\t\t\t\$('#templateCon .buttons button').removeClass('active');

\t\t\tif(!\$(this).val()) {
\t\t\t\t\$('#templateCon .voucher .voucher_div').html('');
\t\t\t\t\$('#templateCon .service_month .voucher_div').html('');
\t\t\t\treturn;
\t\t\t}

\t\t\t//获取凭证和服务月份
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_contract/get_month_pz',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tcontract_id: \$(this).val()
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\t//将票据交接，证件交接按钮取消禁用
\t\t\t\t\t\$('#templateCon .buttons button').not(':first').prop('disabled', false);

\t\t\t\t\tvar data = res.data;

\t\t\t\t\t//凭证 服务所有月份
\t\t\t\t\tvar all_month = data['all_month'];

\t\t\t\t\t//已完成服务月份
\t\t\t\t\tvar done_month = data['done_month'];

\t\t\t\t\t//已完成凭证月份
\t\t\t\t\tvar pz_month = data['pz_month'];

\t\t\t\t\t//服务月份html
\t\t\t\t\tvar service_html = [];
\t\t\t\t\t//拼争月份html
\t\t\t\t\tvar pz_html = [];

\t\t\t\t\tvar index; //下标不等于-1;则打钩禁用
\t\t\t\t\tfor(var i in all_month) {
\t\t\t\t\t\t// if(\$.inArray(all_month[i],done_month) != -1){

\t\t\t\t\t\t// }
\t\t\t\t\t\tindex = \$.inArray(all_month[i], done_month);
\t\t\t\t\t\tservice_html.push(
\t\t\t\t\t\t\t`<label class=\"voucher_label\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" data-time=\"\${all_month[i]}\">
\t\t\t\t\t\t\t\t\t<span class=\"voucher_month\">\${all_month[i]}</span> 
\t\t\t\t\t\t\t\t</label>`
\t\t\t\t\t\t);

\t\t\t\t\t\tindex = \$.inArray(all_month[i], pz_month);
\t\t\t\t\t\tpz_html.push(
\t\t\t\t\t\t\t`<label class=\"voucher_label\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" \${index != -1 ? 'checked' : ''} \${index != -1 ? 'disabled' : ''} data-time=\"\${all_month[i]}\">
\t\t\t\t\t\t\t\t\t<span class=\"voucher_month\">\${all_month[i]}</span> 
\t\t\t\t\t\t\t\t</label>`
\t\t\t\t\t\t);
\t\t\t\t\t}

\t\t\t\t\t\$('#templateCon .voucher .voucher_div').html(pz_html.join(''));
\t\t\t\t\t\$('#templateCon .service_month .voucher_div').html(service_html.join(''));

\t\t\t\t\t//选中凭证月份 默认选中 服务月份
\t\t\t\t\t// voucherToService();
\t\t\t\t}
\t\t\t});

\t\t\t//获取物品信息
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_accountancies/list_goods',
\t\t\t\tmethod: 'post',
\t\t\t\tasync: false,
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tvar goods = {};

\t\t\t\t\t//票据物品
\t\t\t\t\tvar pjgoods = data['PJ']['list'];
\t\t\t\t\t//证件物品
\t\t\t\t\tvar zjgoods = data['ZJ']['list'];

\t\t\t\t\t//票据物品thml
\t\t\t\t\tvar pjgoods_html = [];
\t\t\t\t\tfor(var i in pjgoods) {
\t\t\t\t\t\tpjgoods_html.push('<option value=\"' + pjgoods[i]['ckm_warehouse_goods.name'] + '\">' + pjgoods[i]['ckm_warehouse_goods.name'] + '</option>');
\t\t\t\t\t}

\t\t\t\t\t//证件物品thml
\t\t\t\t\tvar zjgoods_html = [];
\t\t\t\t\tfor(var i in zjgoods) {
\t\t\t\t\t\tzjgoods_html.push('<option value=\"' + zjgoods[i]['ckm_warehouse_goods.name'] + '\">' + zjgoods[i]['ckm_warehouse_goods.name'] + '</option>');
\t\t\t\t\t}

\t\t\t\t\tgoods = {
\t\t\t\t\t\t'PJ': pjgoods_html,
\t\t\t\t\t\t'ZJ': zjgoods_html
\t\t\t\t\t};

\t\t\t\t\t\$('#templateCon .bill tbody select').html(pjgoods_html.join(''));
\t\t\t\t\t\$('#templateCon .certificate tbody select').html(zjgoods_html.join(''));

\t\t\t\t\t//切换交接表
\t\t\t\t\tchangeJoinTable(goods);
\t\t\t\t}
\t\t\t})
\t\t\t//\t\t\t});
\t\t}

\t\t//选中凭证月份 默认选中 服务月份
\t\tfunction voucherToService() {
\t\t\t\$('#templateCon .voucher input').unbind('click').click(function() {
\t\t\t\t// if(\$(this).prop('checked')){
\t\t\t\t\$('#templateCon .service_month input[data-time=\"' + \$(this).attr('data-time') + '\"]').prop('checked', \$(this).prop('checked'));
\t\t\t\t// }
\t\t\t});
\t\t}

\t\t//切换订单号获取物品信息
\t\t// function changeContractCodeGetGoods(){

\t\t// };

\t\t//添加入库
\t\t\$('.add').click(function() {
\t\t\tshowMark('.popup_new');
\t\t\t\$('#showBox .title').text('添加入库');
\t\t\tlayui.use('element', function() {
\t\t\t\tvar element = layui.element;
\t\t\t\telement.init('collapse');
\t\t\t});

\t\t\t//所有员工
\t\t\tvar jb_html = []; //经办人html
\t\t\tfor(var i in employees) {
\t\t\t\tjb_html.push(
\t\t\t\t\t`<option value=\"\${i}\">\${employees[i]}</option>`
\t\t\t\t);
\t\t\t}
\t\t\t\$('#templateCon [addfield=\"jb_id\"]').append(jb_html.join(''));

\t\t\t//所有公司
\t\t\t\$('#templateCon [addfield]').select2({
\t\t\t\tallowClear: true
\t\t\t});
\t\t\tvar customer_html = [];
\t\t\tfor(var i in customers) {
\t\t\t\tcustomer_html.push(
\t\t\t\t\t`<option value=\"\${i}\">\${customers[i]['num']}(\${customers[i]['name']})</option>`
\t\t\t\t);
\t\t\t}
\t\t\t\$('#templateCon [addfield=\"customer_id\"]').append(customer_html.join(''));

\t\t\t//切换公司获取相应的长期合同订单编号
\t\t\tchangeCompanyGetNum();

\t\t\t//保存提交数据
\t\t\tsaveData();

\t\t\t//切换收单方式
\t\t\tgetway();

\t\t\t// timeplug(new Date()); //时间

\t\t\t// getInfo(); //获取默认信息

\t\t\t// changeName(); //改变类型来改变物品

\t\t\t// for(var i in employees) {
\t\t\t// \tif(employees[i]) {
\t\t\t// \t\t\$('#templateCon select[addfield=\"jb_id\"]').append(new Option(employees[i], i));
\t\t\t// \t}
\t\t\t// }

\t\t\t// submit();
\t\t});

\t\t//保存提交数据
\t\tfunction saveData() {
\t\t\t\$('#templateCon .sure_button').unbind('click').click(function() {
\t\t\t\t\$('#templateCon .sure_button').prop('disabled', true);
\t\t\t\t//未选择订单号则提示
\t\t\t\tvar customer_id = \$('#templateCon [addfield=\"customer_id\"]').val();

\t\t\t\t//提交数据
\t\t\t\tvar postdata = {
\t\t\t\t\tcustomer_id: customer_id,
\t\t\t\t\tjb_id: \$('#templateCon [addfield=\"jb_id\"]').val()
\t\t\t\t};

\t\t\t\t//服务月份
\t\t\t\tvar service_month = [];
\t\t\t\tif(\$('#templateCon #pzList').val()){
\t\t\t\t\t\$('#templateCon #pzList').val().forEach(function(item) {
\t\t\t\t\t\tservice_month.push(item.replace(/\\./, ''));
\t\t\t\t\t})
\t\t\t\t\tpostdata['year_month_id'] = service_month.join(',');
\t\t\t\t}
\t\t\t\t

\t\t\t\t

\t\t\t\t//获取送单方式信息
\t\t\t\tvar datae = {
\t\t\t\t\texpress: \$('#templateCon [title=\"express\"]').val().trim(),
\t\t\t\t\tnum: \$('#templateCon [title=\"expressnum\"]').val().trim(),
\t\t\t\t\tcost: \$('#templateCon [title=\"cost\"]').val().trim()
\t\t\t\t}
\t\t\t\tpostdata['data_type'] = \$('#templateCon [title=\"getway\"]').val();
\t\t\t\tif(postdata.data_type == 3) {
\t\t\t\t\tpostdata['data'] = datae;
\t\t\t\t}
\t\t\t\tif(postdata.data_type == 3 && (postdata.data.express == '' || postdata.data.num == '' ||
\t\t\t\t\t\tpostdata.data.cost == '')) {
\t\t\t\t\tykp.prompt('快递信息必须填写');
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tif(postdata.data_type == 3) {
\t\t\t\t\tpostdata['data'] = JSON.stringify(datae);
\t\t\t\t}

\t\t\t\t//收单数据集
\t\t\t\tvar getList_dataList = [];
\t\t\t\t//凭证数据
\t\t\t\tif(\$('#templateCon #pzList1').val()){
\t\t\t\t\t\$('#templateCon #pzList1').val().forEach(function(item) {
\t\t\t\t\t\tgetList_dataList.push({
\t\t\t\t\t\t\tgoods: item.replace(/\\./, ''),
\t\t\t\t\t\t\ttype: 1,
\t\t\t\t\t\t\tnumber: 1
\t\t\t\t\t\t});
\t
\t\t\t\t\t})
\t\t\t\t}
\t\t\t\t

\t\t\t\t//票据数据
\t\t\t\t\$('#templateCon  #ticketBody tr').each(function(res) {
\t\t\t\t\tif(\$(this).find('.count').val() > 0){
\t\t\t\t\t\tgetList_dataList.push({
\t\t\t\t\t\t\tgoods: \$(this).find('.goods').val(),
\t\t\t\t\t\t\ttype: 2,
\t\t\t\t\t\t\tnumber: \$(this).find('.count').val()
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t//证件数据
\t\t\t\t\$('#templateCon  #cardBody tr').each(function(res) {
\t\t\t\t\tif( \$(this).find('.count').val()  > 0){
\t\t\t\t\t\tgetList_dataList.push({
\t\t\t\t\t\t\tgoods: \$(this).find('.goods').val(),
\t\t\t\t\t\t\ttype: 3,
\t\t\t\t\t\t\tnumber: \$(this).find('.count').val()
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t});
//\t\t\t\t//入库物品为空，则取消上传
//\t\t\t\tif(getList_dataList.length <= 0) {
//\t\t\t\t\tykp.prompt('请选择入库物品！');
//\t\t\t\t\treturn;
//\t\t\t\t}
//\t\t\t\t
\t\t\t\tif(getList_dataList.length == 0){
\t\t\t\t\tgetList_dataList.push({
\t\t\t\t\t\tgoods: \"文件袋\",
\t\t\t\t\t\ttype:0,
\t\t\t\t\t\tnumber: 1
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\tif(!postdata[\"jb_id\"]){
\t\t\t\t\tykp.prompt('请选择经办人')
\t\t\t\t\treturn false;
\t\t\t\t}\t
\t\t\t\tpostdata['dataList'] = JSON.stringify(getList_dataList);
\t\t\t\tpostdata['remark'] = \$('#templateBox .rmark').val();
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_service/add_acquiring_new2',
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tdata: postdata,
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\$('#templateCon .sure_button').prop('disabled', false);
\t\t\t\t\t\tgetList();
\t\t\t\t\t}
\t\t\t\t})
\t\t\t});
\t\t}

\t\t// function changeName() {
\t\t// \t\$('#templateCon select[addfield=\"type\"]').change(function() {
\t\t// \t\tvar index = \$(this).val();

\t\t// \t\t\$('#templateCon select[addfield=\"goods\"]').find('option').not(':first').remove();

\t\t// \t\tif(index == 0){
\t\t// \t\t\t\$('#templateCon input[addfield=\"ck_name\"]').val('');
\t\t// \t\t}

\t\t// \t\tif(index != 0) {
\t\t// \t\t\t\$('#templateCon input[addfield=\"ck_name\"]').val(\$(this).find('option:selected').text().trim().replace(/入库/, '仓'));
\t\t// \t\t\tykp.doAjax({
\t\t// \t\t\t\turl: '/api/api_accountancies/list_goods',
\t\t// \t\t\t\tmethod: 'post',
\t\t// \t\t\t\tdata: {
\t\t// \t\t\t\t\ttype: index
\t\t// \t\t\t\t},
\t\t// \t\t\t\tsuccess: function(res) {
\t\t// \t\t\t\t\tvar data = res.data.list;
\t\t// \t\t\t\t\t//console.log(data);
\t\t// \t\t\t\t\t\$('#templateCon select[addfield=\"goods\"]').empty().append('<option>  请选择 </option>');
\t\t// \t\t\t\t\tfor(var i in data) {
\t\t// \t\t\t\t\t\t\$('#templateCon select[addfield=\"goods\"]').append(new Option(data[i]['ckm_warehouse_goods.name'], data[i]['ckm_warehouse_goods.name']));
\t\t// \t\t\t\t\t}
\t\t// \t\t\t\t}
\t\t// \t\t\t});
\t\t// \t\t}
\t\t// \t});
\t\t// }

\t\t// function submit(id) {
\t\t// \t\$('#templateCon .sure_button').click(function() {
\t\t// \t\tif(!cs.popValidate()) {
\t\t// \t\t\treturn;
\t\t// \t\t};
\t\t// \t\tvar data = {};
\t\t// \t\tvar val = '';
\t\t// \t\t\$('#templateCon .item_form').find('input[addfield],select[addfield],textarea[addfield]').not(':eq(1)').each(function(i) {
\t\t// \t\t\tval = i == 4 ? parseInt(new Date(\$(this).val()) / 1000) : \$(this).val();
\t\t// \t\t\tdata[\$(this).attr('addfield')] = val;
\t\t// \t\t})
\t\t// \t\tdata.stype = 1;
\t\t// \t\tif(id) {
\t\t// \t\t\tdata.id = id;
\t\t// \t\t}
\t\t// \t\turl = id ? '/api/api_accountancies/edit_io' : '/api/api_accountancies/add_io';
\t\t// \t\tdata.type = \$('#templateBox #select').val();
\t\t// \t\t//console.log(data);
\t\t// \t\tykp.doAjax({
\t\t// \t\t\turl: url,
\t\t// \t\t\tmethod: 'post',
\t\t// \t\t\tdata: data,
\t\t// \t\t\tsuccess: function(res) {
\t\t// \t\t\t\tvar msg = id ? '编辑成功' : '添加成功!';
\t\t// \t\t\t\tykp.prompt(msg);
\t\t// \t\t\t\tcs.close();
\t\t// \t\t\t\tgetList();
\t\t// \t\t\t}
\t\t// \t\t});
\t\t// \t});
\t\t// }

\t\t// function getInfo() {
\t\t// \t\$.get(ykp.api_url+'/api/api_common/get_time', function(res) {
\t\t// \t\tvar time = cs.getNowTime(res);
\t\t// \t\tvar year = time.substring(0, time.indexOf('-'));
\t\t// \t\tfor(var i = 1; i < 13; i++) {
\t\t// \t\t\tif(i < 10) {
\t\t// \t\t\t\ti = '0' + i;
\t\t// \t\t\t}
\t\t// \t\t\t\$('#templateCon select[addfield=\"month\"]').append(new Option(year + i));
\t\t// \t\t}
\t\t// \t});

\t\t// \tykp.doAjax({
\t\t// \t\turl: '/api/api_accountancies/get_cus',
\t\t// \t\tmethod: 'post',
\t\t// \t\tdata: {},
\t\t// \t\tsuccess: function(res) {
\t\t// \t\t\tvar data = res.data;
\t\t// \t\t\t\$('#templateBox .name').select2({
\t\t// \t\t\t\tallowClear: true
\t\t// \t\t\t})
\t\t// \t\t\tfor(var i in data) {
\t\t// \t\t\t\t\$('#templateCon .name').append(new Option(customers[data[i]['ckm_position_num.customer_id']],
\t\t// \t\t\t\t\tdata[i]['ckm_position_num.customer_id']));
\t\t// \t\t\t}
\t\t// \t\t}
\t\t// \t});
\t\t// }
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/depotManagement/depotStorage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  896 => 873,  892 => 872,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	/*编辑*//* */
/* 	*/
/* 	#templateCon label {*/
/* 		width: 60px;*/
/* 		text-align: right;*/
/* 	}*/
/* 	*/
/* 	#heightsearch1 label {*/
/* 		width: 90px;*/
/* 	}*/
/* 	*/
/* 	#heightsearch1 input[type="text"] {*/
/* 		width: 180px;*/
/* 	}*/
/* 	/*	#templateCon table {*/
/* 		margin-top: 15px;*/
/* 	}*//* */
/* 	*/
/* 	#templateCon .connects-content th,*/
/* 	#templateCon .connects-content td {*/
/* 		height: 35px;*/
/* 		text-align: left;*/
/* 		padding: 5px 10px;*/
/* 	}*/
/* 	*/
/* 	#ticketBody input,*/
/* 	#cardBody input {*/
/* 		width: 70px;*/
/* 	}*/
/* 	*/
/* 	#ticketBody select,*/
/* 	#cardBody select {*/
/* 		min-width: 110px;*/
/* 	}*/
/* 	*/
/* 	.voucher_label {*/
/* 		position: relative;*/
/* 		top: -2px;*/
/* 		padding: 0 10px;*/
/* 		width: auto !important;*/
/* 		text-align: left !important;*/
/* 	}*/
/* 	*/
/* 	.voucher_month {*/
/* 		position: relative;*/
/* 		top: -2px;*/
/* 	}*/
/* 	*/
/* 	.storage table {*/
/* 		border: none !important;*/
/* 	}*/
/* 	*/
/* 	.storage td {*/
/* 		border: none !important;*/
/* 	}*/
/* 	*/
/* 	td[in_title] {*/
/* 		width: 15%;*/
/* 		text-align: right !important;*/
/* 	}*/
/* 	*/
/* 	td[in_content] {*/
/* 		width: 35%;*/
/* 		text-align: left!important;*/
/* 	}*/
/* 	*/
/* 	.service_month .select2-container,*/
/* 	.voucher .select2-container {*/
/* 		display: block !important;*/
/* 		width: 550px !important;*/
/* 	}*/
/* 	#templateBox tbody tr td{height: 35px}*/
/* </style>*/
/* */
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<!-- <h3 class="header smaller lighter blue">入库</h3> -->*/
/* 		<div class="actions">*/
/* 			<div id="topTool" style="position:relative;">*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<input type="text" pts="0" sear="ckm_in_warehouse.num" placeholder="入库单号">*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<input type="text" pts="0" sear="khm_customer.name" placeholder="企业名称">*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<input type="text" pts="0" sear="khm_customer.customer_num" placeholder="客户编码">*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<select style="width: 180px" pts=3 class="advandced-search select2-hidden-accessible" tabindex="-1" sear="ckm_in_warehouse.jb_id" aria-hidden="true">*/
/* 						<option value=""> 经办人 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<select style="width: 180px" pts=3 class="advandced-search select2-hidden-accessible" sear="ckm_in_warehouse.create_id" tabindex="-1" aria-hidden="true">*/
/* 						<option value=""> 创建人 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<select style="width: 180px" pts=3 sear="ckm_in_warehouse.qr_id" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 						<option value=""> 审批人 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<button id="search" title="搜索" class="btn btn-info btn-sm">*/
/* 						<i class="fa fa-search"></i>*/
/* 					</button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<button type="button" title="高级搜索" id="heightsearch" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/* 	                    <i class="fa fa-filter"></i>*/
/* 	                </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/* 	                    <i class="fa fa-refresh"></i>*/
/* 	                </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="147" style=" float: left;margin-right: 5px;">*/
/* 					<button class="add btn btn-info btn-sm" title="添加" style=" background-color: #32CD32 !important;">*/
/* 	                    <i class="fa fa-plus"></i>*/
/* 	                </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="305" style=" float: left; margin-right: 5px;">*/
/* 					<button type="button"  title="导出" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="exportfile moveToClue btn addBtn btn-info btn-sm position-relative">*/
/* 						<i class="fa fa-sign-out"></i>*/
/* 					</button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="148" style=" float: left;margin-right: 5px;">*/
/* 					<button class="btn btn-info sp  btn-sm plSp" title="批量审批" style="background-color: #32CD32 !important; border-color: #32CD32;">*/
/* 						<i class="fa fa-check-circle-o"></i>*/
/* 		            </button>*/
/* 				</div>*/
/* */
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<div id="filterBtns" style="display:inline-block;width:290px;height: 36px">*/
/* 						<a href="javascript:void(0);" class="myFilter" style="background: #E6E6E6;line-height:22px" data-status="a">全部</a>*/
/* 						<a href="javascript:void(0);" class="myFilter" style="line-height:22px" data-status="0">*/
/* 							</i> 待审批</a>*/
/* 						<a href="javascript:void(0);" class="myFilter" style="line-height:22px" data-status="2"> 已通过</a>*/
/* 						<a href="javascript:void(0);" class="myFilter" style="line-height:22px" data-status="1"> 未通过</a>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div id="heightsearch1" class="col-sx-12" style="top:31px;position: absolute; background: #fff;overflow: auto; padding: 10px 0px; display: none;z-index:1042;">*/
/* 					<div class="row">*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>审批状态</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width:180px" gjs=0 data-type="gj" sear="ckm_in_warehouse.status">*/
/* 								<option value="">请选择</option>*/
/* 								<option value="0">待审批</option>*/
/* 								<option value="1">未通过</option>*/
/* 								<option value="2">已通过</option>*/
/* 							</select>*/
/* 							<!--<input type="text" gjs=0 sear="ckm_in_warehouse.status" />-->*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>入库单号</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="ckm_in_warehouse.num" />*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>入库类型</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width: 180px" gjs=0 data-type="gj" sear="ckm_in_warehouse.type">*/
/* 								<option value="">请选择</option>*/
/* 								<option value="1">凭证</option>*/
/* 								<option value="2">单据</option>*/
/* 								<option value="3">证件</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<!-- <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>仓库名称</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 id="" sear="ckm_in_warehouse.ck_name">*/
/* 						</div> -->*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>企业名称</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 id="" sear="khm_customer.name">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>客户编码</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.customer_num">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>仓位</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select gjs=3 sear="ckm_position_num.pos_id" class="cw" data-type="gj" style="width:180px;">*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>经办人</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="margin: 12px !important;width: 180px" class="advandced-search select2-hidden-accessible" sear="ckm_in_warehouse.jb_id" gjs=0 data-type="gj" tabindex="-1" aria-hidden="true">*/
/* 								<option value=""> 请选择 </option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>入库日期</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> > </option>*/
/* 								<option> &lt; </option>*/
/* 							</select>*/
/* 							<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 								<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 								<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="ckm_in_warehouse.time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 							</div>*/
/* 							<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 								<input class="date-timepicker1" data-type="gj" data-status="time" gjs=0 sear="ckm_in_warehouse.time" class="form-control" style="height: 30px; width: 150px;">*/
/* 								<span class="input-group-addon" style="width:30px;">*/
/*                                     <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                 </span>*/
/* 							</div>-->*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>备注</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 id="" sear="ckm_in_warehouse.remark">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>入库物品</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="ckm_in_warehouse.goods">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>创建人</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="margin: 12px !important;width: 180px" sear="ckm_in_warehouse.create_id" gjs=0 data-type="gj" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 								<option value=""> 请选择 </option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>创建时间</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> > </option>*/
/* 								<option> &lt; </option>*/
/* 							</select>*/
/* 							<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 								<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 								<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="ckm_in_warehouse.create_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 							</div>*/
/* 							<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 								<input class="date-timepicker1" data-type="gj" data-status="time" gjs=0 sear="ckm_in_warehouse.create_time" class="form-control" style="height: 30px; width: 150px;">*/
/* 								<span class="input-group-addon" style="width:30px;">*/
/*                                     <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                 </span>*/
/* 							</div>-->*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>审批人</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="margin: 12px !important;width: 180px" class="advandced-search select2-hidden-accessible" sear="ckm_in_warehouse.qr_id" tabindex="-1" aria-hidden="true" gjs=0 data-type="gj">*/
/* 								<option value=""> 请选择 </option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>审批时间</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> > </option>*/
/* 								<option> &lt; </option>*/
/* 							</select>*/
/* 							<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 								<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 								<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="ckm_in_warehouse.qr_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 							</div>*/
/* 							<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 								<input class="date-timepicker1" data-type="gj" data-status="time" gjs=0 sear="ckm_in_warehouse.qr_time" class="form-control" style="height: 30px; width: 150px;">*/
/* 								<span class="input-group-addon" style="width:30px;">*/
/*                                     <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                 </span>*/
/* 							</div>-->*/
/* 						</div>*/
/* 						<div style="text-align:center;clear:both;padding-top:10px; ">*/
/* 							<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/*                                 查询*/
/*                             </button>*/
/* 							<button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 								                       重置*/
/* 								                    </button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="custom_table" style="margin-top:10px;">*/
/* 		<table id="dynamic-table">*/
/* 			<thead>*/
/* 				<tr class="thColor">*/
/* 					<th class="center">*/
/* 						<label class="pos-rel">*/
/*                                 <input type="checkbox" class="ace" onclick="cs.checkAll(this.checked)"/>*/
/*                                 <span class="lbl"></span>*/
/*                             </label>*/
/* 					</th>*/
/* 					<th> 操作 </th>*/
/* 					<th data-num="1">*/
/* 						<div>*/
/* 							<span>审批状态</span>*/
/* 							<span id="table-sort">*/
/* 								<i class="layui-edge layui-table-sort-asc"></i>*/
/* 							</span>*/
/* 						</div>*/
/* 					</th>*/
/* 					<th data-num="2">入库单号</th>*/
/* 					<th data-num="3">企业名称</th>*/
/* 					<th data-num="4">客户编码</th>*/
/* 					<th data-num="14">仓位编码</th>*/
/* 					<th data-num="5">经办人</th>*/
/* 					<th data-num="6">入库日期</th>*/
/* 					<th data-num="7">入库物品</th>*/
/* 					<th data-num="15">备注</th>*/
/* 					<th data-num="8">创建人</th>*/
/* 					<th data-num="9">创建时间</th>*/
/* 					<th data-num="10">审批人</th>*/
/* 					<th data-num="11">审批时间</th>*/
/* 					<th data-num="12">入库月份</th>*/
/* 					<th data-num="13">审批回复</th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<tbody id="datalist">*/
/* */
/* 			</tbody>*/
/* 		</table>*/
/* 	</div>*/
/* */
/* 	<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 		<div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
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
/* 	<div class="popup_new" style="display:none">*/
/* 		<div style="padding:10px 0;">*/
/* 			<label> 企业名称： </label>*/
/* 			<select addfield="customer_id" style="width:380px" msg="请选择企业名称">*/
/* 				<option value="">请选择</option>*/
/* 			</select>*/
/* 			*/
/* 			<!--<label> 订单号： </label>*/
/* 			<select addfield="contract_code" style="width:180px" msg="请选择订单号">*/
/* 				<option value="">请选择</option>*/
/* 			</select>-->*/
/* 		</div>*/
/* 	*/
/* 		<div class="layui-collapse" style="margin-top: 10px">*/
/* 			<div class="layui-colla-item">*/
/* 				<h2 class="layui-colla-title">月份</h2>*/
/* 				<div class="layui-colla-content">*/
/* 					*/
/* 						<!-- 服务方式 -->*/
/* 		<div id="get_way" style="margin-bottom:7px ;">*/
/* 			<label> 经办人： </label>*/
/* 			<select addfield="jb_id" style="width:190px" msg="请选择经办人">*/
/* 				<option value="">请选择</option>*/
/* 			</select>*/
/* 			<label style="margin-left: 15px;">服务方式：</label>*/
/* 			<select title="getway" style="width:190px">*/
/* 				<option value="1">外勤上门</option>*/
/* 				<option value="2">客户上门</option>*/
/* 				<option value="3">快递物流</option>*/
/* 			</select>*/
/* 		</div>*/
/* */
/* 		<div id="express" style="display:none;">*/
/* 			<div style="margin-bottom: 5px">*/
/* 				<label style=" margin-bottom: 5px;">快递公司：</label>*/
/* 				<input title="express" style="width:190px;"/>*/
/* 				<label style="margin-left: 14px;">快递单号：</label>*/
/* 				<input title="expressnum" style="width:190px;" />*/
/* 			</div>*/
/* 			<div>*/
/* 				<label>快递费用：</label>*/
/* 				<input title="cost" style="width:190px;" />*/
/* 			</div>*/
/* 			<div class="" style="padding: 2px;">*/
/* 				<div id="fileBox">*/
/* */
/* 				</div>*/
/* 				<div id="uploadBox">*/
/* 					<button type="button" id="upload1" style="outline: none;background-color: #009688 !important; margin-top: 20px;margin-bottom: 8px;" class="btn btn-info btn-sm position-relative;">*/
/* 			                        上传文件*/
/* 			        	</button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 					<div class="service_month" style="    margin-bottom：-30px;">*/
/* 						<!--<div class="page-header" style="background: #ccecff; padding-left: 6px; height: 35px;">*/
/* 							<h5 style="margin-top: 3px;">*/
/* 									月份*/
/* 								</h5>*/
/* 						</div>-->*/
/* 						<select multiple="" id="pzList" name="state" addfield="sd" class="pzList state select2 select2-hidden-accessible" data-placeholder="选择月份" style="width: 200px;" tabindex="-1" aria-hidden="true">*/
/* 						</select>*/
/* 						<div style="display: inline-block;width:472px;" class="voucher_div">*/
/* 							<!-- <label class="voucher_label">*/
/* 								<input type="checkbox" data-time="201711">*/
/* 								<span class="voucher_month">201711</span> */
/* 							</label>*/
/* 							<label class="voucher_label">*/
/* 								<input type="checkbox" data-time="201712">*/
/* 								<span class="voucher_month">201712</span>*/
/* 							</label>*/
/* 							<label class="voucher_label">*/
/* 								<input type="checkbox" data-time="201801"> */
/* 								<span class="voucher_month">201801</span> */
/* 							</label>*/
/* 							<label class="voucher_label">*/
/* 								<input type="checkbox" data-time="201802"> */
/* 								<span class="voucher_month">201802</span>*/
/* 							</label> -->*/
/* 						</div>*/
/* 						<!-- <table>*/
/* 							<thead>*/
/* 								<tr>*/
/* 									<th>凭证月份</th>*/
/* 									<th>凭证名称</th>*/
/* 									<th>数量(本)</th>*/
/* 								</tr>*/
/* 							</thead>*/
/* 							<tbody>*/
/* 								<tr>*/
/* 									<td id="month">*/
/* 									</td>*/
/* 									<td>*/
/* 										<select>*/
/* 											*/
/* 										</select>*/
/* 									</td>*/
/* 									<td>*/
/* 										<input type="number"/>*/
/* 									</td>*/
/* 								</tr>*/
/* 							</tbody>*/
/* 						</table> -->*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="layui-colla-item">*/
/* 				<h2 class="layui-colla-title">记账凭证</h2>*/
/* 				<div class="layui-colla-content">*/
/* 					<div class="voucher">*/
/* 						<!--<div class="page-header" style="background: #ccecff; padding-left: 6px; height: 35px;">*/
/* 							<h5 style="margin-top: 3px;">*/
/* 								凭证交接*/
/* 							</h5>*/
/* 						</div>-->*/
/* 						<label style="float: left;margin-right: 5px;width:25px;"></label>*/
/* 						<select multiple="" id="pzList1" name="state" addfield="sd" class="pzList state select2 select2-hidden-accessible" data-placeholder="选择凭证" style="width: 200px;" tabindex="-1" aria-hidden="true">*/
/* 						</select>*/
/* 						<div style="display: inline-block;width:472px;" class="voucher_div">*/
/* 							<!-- <label class="voucher_label">*/
/* 								<input type="checkbox" data-time="201711">*/
/* 								<span class="voucher_month">201711</span> */
/* 							</label>*/
/* 							<label class="voucher_label">*/
/* 								<input type="checkbox" data-time="201712"> */
/* 								<span class="voucher_month">201712</span> */
/* 							</label>*/
/* 							<label class="voucher_label">*/
/* 								<input type="checkbox" data-time="201801"> */
/* 								<span class="voucher_month">201801</span> */
/* 							</label>*/
/* 							<label class="voucher_label">*/
/* 								<input type="checkbox" data-time="201802"> */
/* 								<span class="voucher_month">201802</span> */
/* 							</label> -->*/
/* 						</div>*/
/* 						<!-- <table>*/
/* 							<thead>*/
/* 								<tr>*/
/* 									<th>凭证月份</th>*/
/* 									<th>凭证名称</th>*/
/* 									<th>数量(本)</th>*/
/* 								</tr>*/
/* 							</thead>*/
/* 							<tbody>*/
/* 								<tr>*/
/* 									<td id="month">*/
/* 									</td>*/
/* 									<td>*/
/* 										<select>*/
/* 											*/
/* 										</select>*/
/* 									</td>*/
/* 									<td>*/
/* 										<input type="number"/>*/
/* 									</td>*/
/* 								</tr>*/
/* 							</tbody>*/
/* 						</table> -->*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="layui-colla-item">*/
/* 				<h2 class="layui-colla-title">发票单据</h2>*/
/* 				<div class="layui-colla-content connects-content">*/
/* 					<div>*/
/* 						<!--<p class="page-header" style="background: #ccecff; padding-left: 6px; height: 35px; display:none;">*/
/* 						票据交接*/
/* 				</p>-->*/
/* 						<div id="">*/
/* 							<table class="bill" style="display:;">*/
/* 								<thead>*/
/* 									<tr>*/
/* 										<th style="font-weight: 500;">操作</th>*/
/* 										<th style="font-weight: 500;">票据类别</th>*/
/* 										<th style="font-weight: 500;">数量(张)</th>*/
/* 										<th style="font-weight: 500;">金额(元)</th>*/
/* 									</tr>*/
/* 								</thead>*/
/* 								<tbody id="ticketBody">*/
/* 									<tr>*/
/* 										<td>*/
/* 											<a href="javascript:;" class="addTicket">+</a>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select class="goods">*/
/* */
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<input type="number" class="count" value="0" />*/
/* 										</td>*/
/* 										<td>*/
/* 											<input type="number" class="money" value="0" />*/
/* 										</td>*/
/* 									</tr>*/
/* 								</tbody>*/
/* 							</table>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="layui-colla-item">*/
/* 				<h2 class="layui-colla-title">证件资料</h2>*/
/* 				<div class="layui-colla-content connects-content">*/
/* 					<div>*/
/* 						<!--<p class="page-header" style="background: #ccecff; padding-left: 6px; height: 35px; display:none;">*/
/* 						证件交接*/
/* 				</p>-->*/
/* 						<div id="">*/
/* 							<table class="certificate" style="display:;">*/
/* 								<thead>*/
/* 									<tr>*/
/* 										<th style="font-weight: 500;">操作</th>*/
/* 										<th style="font-weight: 500;">证件名称</th>*/
/* 										<th style="font-weight: 500;">数量(个)</th>*/
/* 									</tr>*/
/* 								</thead>*/
/* 								<tbody id="cardBody">*/
/* 									<tr>*/
/* 										<td>*/
/* 											<a href="javascript:;" class="addCard">+</a>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select class="goods">*/
/* */
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<input type="number" class="count" value="0" />*/
/* 										</td>*/
/* 									</tr>*/
/* 								</tbody>*/
/* 							</table>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!--<div style="padding:0 0 15px 0;">*/
/* 			<label> 经办人： </label>*/
/* 			<select addfield="jb_id" style="width:180px" msg="请选择经办人">*/
/* 				<option value="">请选择</option>*/
/* 			</select>*/
/* 		</div>-->*/
/* 		<!-- <div id="get_way" style="margin-top: 15px;">*/
/* 			<label style="width: 50px">收单方式</label>*/
/* 			<select title="getway">*/
/* 				<option value="1">外勤收单</option>*/
/* 				<option value="2">客户上门</option>*/
/* 				<option value="3">快递</option>*/
/* 			</select>*/
/* 		</div>*/
/* 	*/
/* 		<div id="express" style="display:none">*/
/* 			<div style="margin-top:15px;">*/
/* 				<label style="width: 50px">快递公司</label>*/
/* 					<input title="express"/>*/
/* 					<label style="width: 50px">快递单号</label>*/
/* 				<input title="expressnum"/>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label style="width: 50px">快递费用</label>*/
/* 				<input title="cost" type="number"/>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div id="sendMsg" customer_id="" style="height: 30px;line-height: 40px">*/
/* 			<label >是否发送短信：</label>*/
/* 			<input type="radio" value="1" name="is_send" checked="true">是*/
/* 			<input type="radio" value="2" name="is_send">否*/
/* 		</div> -->*/
/* */
/* 		<!-- <div style="margin-bottom:15px;" class="buttons">*/
/* 			<button class="btn btn-info btn-sm active" disabled>凭证交接</button>*/
/* 			<button class="btn btn-info btn-sm" disabled>票据交接</button>*/
/* 			<button class="btn btn-info btn-sm" disabled>证件交接</button>*/
/* 		</div> -->*/
/* */
/* 		<div class="connects-content">*/
/* */
/* 		</div>*/
/* 		<div style="margin-top:15px; ">*/
/* 			<label style="float:left;width:36px;">备注：</label>*/
/* 			<textarea style="margin-left:5px;width:542px;resize:none;padding:5px;" class="rmark"></textarea>*/
/* 		</div>*/
/* 		<div style="text-align:center;margin-top:15px;">*/
/* 			<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* 			<!-- <button class="close_get btn btn-info btn-sm">*/
/* 					关闭*/
/* 				</button> -->*/
/* 			<button class="sure_button add btn btn-info btn-sm">*/
/* 					保存*/
/* 				</button>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <!-- <div class="row">*/
/* 			<form class="item_form" role="form">*/
/* 				<div class="form_data">*/
/* */
/* 					<label> 入库类型： </label>*/
/* 					<select class="type required" addfield="type" id="select" msg="请选择入库类型">*/
/* 						<option value=""> - - - 请选择 - - - </option>*/
/* 						<option value="1"> 凭证入库 </option>*/
/* 						<option value="2"> 单据入库 </option>*/
/* 						<option value="3"> 证件入库 </option>*/
/* 					</select>*/
/* 					<label> 仓库名称： </label>*/
/* 					<input type="text" addfield="ck_name" class="in_num required" msg="仓库名称不能为空" />*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label> 入库物品： </label>*/
/* 					<select class="goods required" addfield="goods" msg="请选择入库物品">*/
/* 						<option>请选择 </option>*/
/* 						<option>凭证1</option>*/
/* 						<option>票据1</option>*/
/* 						<option>凭证1</option>*/
/* 					</select>*/
/* 					<label> 入库数量： </label>*/
/* 					<input type="text" class="in_num required" addfield="number" value="1" msg="入库数量必须大于零" validate="int" />*/
/* */
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label> 入库月份： </label>*/
/* 					<select class="in_num required" addfield="month" msg="请选择入库月份">*/
/* 						<option>  请选择 </option>*/
/* 					</select>*/
/* 					<label> 入库日期： </label>*/
/* 					<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<input class="date-timepicker1 required" addfield="time" msg="入库日期不能为空" class="form-control" style="height: 30px; width: 150px;">*/
/* 						<span class="input-group-addon" style="width:30px;">*/
/*                             <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                         </span>*/
/* 					</div>*/
/* */
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label> 公司名称： </label>*/
/* 					<select class="in_num required name" addfield="customer_id" msg="请选择公司名称">*/
/* 						<option>  请选择 </option>*/
/* 					</select>*/
/* 					<label> 经办人： </label>*/
/* 					<select class="in_num required" addfield="jb_id" msg="请选择经办人">*/
/* 						<option> - - - 请选择 - - - </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label style="float:left;"> 入库备注： </label>*/
/* 					<textarea style="width:calc(100% - 89px);margin-left:5px;padding:5px;" addfield="remark" class="in_remark"></textarea>*/
/* 				</div>*/
/* 			</form>*/
/* 			<div class="popup_button">*/
/* 				<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* */
/* 				<button class="sure_button">*/
/*                     <i class="fa fa-check" aria-hidden="true"></i>*/
/*                     保存*/
/*                 </button>*/
/* 			</div>*/
/* 		</div> -->*/
/* </div>*/
/* */
/* <div class="row" id="template" style="display:none;width:678px;">*/
/* 	<div class="storage">*/
/* 		<table class="company" style="margin-top: 15px;">*/
/* 			<tr>*/
/* 				<td in_title>企业名称：</td>*/
/* 				<td in_content>*/
/* 					<span field="customer_id"></span>*/
/* 				</td>*/
/* 				<!--<td in_title>订单号：</td>*/
/* 				<td in_content>*/
/* 					<span field="contract_code"></span>*/
/* 				</td>-->*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td in_title>经办人：</td>*/
/* 				<td in_content>*/
/* 					<span field="jb_id"></span>*/
/* 				</td>*/
/* 				<td in_title>入库月份：</td>*/
/* 				<td in_content>*/
/* 					<span field="month"></span>*/
/* 				</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td in_title>入库状态：</td>*/
/* 				<td in_content>*/
/* 					<span field="status"></span>*/
/* 				</td>*/
/* 				<td in_title>入库单号：</td>*/
/* 				<td in_content>*/
/* 					<span field="num"></span>*/
/* 				</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td in_title>入库日期：</td>*/
/* 				<td in_content>*/
/* 					<span field="time"></span>*/
/* 				</td>*/
/* 				<td in_title>审批回复：</td>*/
/* 				<td in_content>*/
/* 					<span field="qr_remark"></span>*/
/* 				</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td in_title>创建人：</td>*/
/* 				<td in_content>*/
/* 					<span field="create_id"></span>*/
/* 				</td>*/
/* 				<td in_title>创建时间：</td>*/
/* 				<td in_content>*/
/* 					<span field="create_time"></span>*/
/* 				</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td in_title>审批人：</td>*/
/* 				<td in_content>*/
/* 					<span field="qr_id"></span>*/
/* 				</td>*/
/* 				<td in_title>审批时间：</td>*/
/* 				<td in_content>*/
/* 					<span field="qr_time"></span>*/
/* 				</td>*/
/* 				*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td in_title>备注：</td>*/
/* 				<td in_content colspan="20" style="width: 200px;">*/
/* 					<span field="remark" style="text-align: center;word-break: break-word;height: 30px;white-space: normal;margin: 6px 0 4px;font-size: 12px;color: #333;"></span>*/
/* 				</td>*/
/* 			</tr>*/
/* 		</table>*/
/* 		<div style="padding:0 15px">*/
/* 			<p style="border-bottom:1px solid #ddd;padding:10px 0;">*/
/* 				凭证仓*/
/* 			</p>*/
/* 		</div>*/
/* 		<table class="pz">*/
/* 			<tbody></tbody>*/
/* 			<!-- <tr style="border-bottom: 1px solid #ddd">*/
/* 					<td in_title>凭证仓：</td>*/
/* 					<td colspan="3"></td>*/
/* 				</tr> -->*/
/* 		</table>*/
/* 		<div style="padding:0 15px">*/
/* 			<p style="border-bottom:1px solid #ddd;padding:10px 0;">*/
/* 				票据仓*/
/* 			</p>*/
/* 		</div>*/
/* 		<table class="pj">*/
/* 			<tbody></tbody>*/
/* 			<!-- <tr style="border-bottom: 1px solid #ddd">*/
/* 					<td in_title>票据仓：</td>*/
/* 					<td colspan="3"></td>*/
/* 				</tr> -->*/
/* 		</table>*/
/* 		<div style="padding:0 15px">*/
/* 			<p style="border-bottom:1px solid #ddd;padding:10px 0;">*/
/* 				证件仓*/
/* 			</p>*/
/* 		</div>*/
/* 		<table class="zj">*/
/* 			<tbody></tbody>*/
/* 			<!-- <tr style="border-bottom: 1px solid #ddd">*/
/* 					<td in_title>证件仓：</td>*/
/* 					<td colspan="3"></td>*/
/* 				</tr> -->*/
/* 		</table>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="label_popup" id="feedBack" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 	<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/*         box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 		<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 			<span style="display: inline-block;">请填写驳回原因</span>*/
/* 			<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 		</div>*/
/* 		<div style="padding: 10px 50px;">*/
/* 			<input type="text" width="200px" style="margin: auto;" id="labelName" />*/
/* 			<!--<hr>-->*/
/* 		</div>*/
/* 		<div style="padding:15px;text-align:right;">*/
/* 			<button class="close_label">关闭</button>*/
/* 			<button class="hold">保存</button>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% include 'admin/mark.html' %} {% include 'admin/customerDetail.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* */
/* <!--<script src="//res.layui.com/layui/dist/layui.js" charset="utf-8"></script>-->*/
/* <script type="text/javascript">*/
/* 	$(function() {*/
/* */
/*         //导出功能*/
/*         cs.exportFile({*/
/*             url:"/api/api_accountancies/export",*/
/*             type:1,*/
/*             title:"入库记录"*/
/* */
/*         });*/
/* */
/* 		if(cs.approve_authority({*/
/* 				name: '入库',*/
/* 				nodes: [148]*/
/* 			})) {*/
/* 			$('[contentAuthority="148"]').show();*/
/* 		}*/
/* 		cs.getNodes([147]);*/
/* 		cs.dataRang();*/
/* 		var order = 'ckm_in_warehouse.id desc';*/
/* 		var pagesize = 10;*/
/* 		var filter = '';*/
/* 		var customers = {};*/
/* 		var employees = {};*/
/* */
/* 		tspage();*/
/* */
/* 		function tspage() {*/
/* 			if(ykp.getCookie('detailsId') && ykp.getCookie('detailsId') != '') {*/
/* 				var id = ykp.getCookie('detailsId');*/
/* 				var data = {*/
/* 					type: 1,*/
/* 					limit: page_size,*/
/* 					filter: `ckm_in_warehouse.id = ${id}`*/
/* 				}*/
/* 				getList_2(data);*/
/* 				ykp.setCookie('detailsId', '', 1 / 24);*/
/* 			} else {*/
/* 				ykp.setCookie("filter", "");*/
/* 				ykp.setCookie("where", "");*/
/* 				getList();*/
/* 			}*/
/* 		}*/
/* 		*/
/* 		cs.getAllCw(function(option) {*/
/* 				$('#heightsearch1 .cw').html(option);*/
/* 				$('#heightsearch1 .cw').select2({*/
/* 					allowClear: true*/
/* 				})*/
/* 			})*/
/* */
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_accountancies/index_new',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: "",*/
/* 				limit: pagesize,*/
/* 				type: 1*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '.pageBar'*/
/* 			},*/
/* 			contentId: "#datalist", //默认排序*/
/* 			initOrder: "", //初始化sort*/
/* 			defaultOrder: order,*/
/* 			params: [{*/
/* 				id: "#dynamic-table",*/
/* 				field: ["", "", "ckm_in_warehouse.status", "ckm_in_warehouse.num", "khm_customer.id", "khm_customer.customer_num", "","","ckm_in_warehouse.time","","ckm_in_warehouse.remark","ckm_in_warehouse.create_id","ckm_in_warehouse.create_time",*/
/* 					"ckm_in_warehouse.qr_id","ckm_in_warehouse.qr_time","ckm_in_warehouse.month","ckm_in_warehouse.qr_remark"*/
/* 				]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			console.log(_sort_role);*/
/* 			sort_role = _sort_role;*/
/* 			handleData(res);*/
/* 		});*/
/* */
/* 		function getList_2(data) {*/
/* 			generalSearch();*/
/* 			advancedSearch();*/
/* 			ykp.list({*/
/* 				url: '/api/api_accountancies/index_new',*/
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
/* 						$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					} else {*/
/* 						handleData(res);*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		$('.myFilter').click(function() {*/
/* 			if(!$(this).hasClass('clc')) {*/
/* 				$(this).addClass('clc').siblings().removeClass('clc');*/
/* 			}*/
/* 			var data = {*/
/* 				'type': 1,*/
/* 				"limit": pagesize,*/
/* 				'page': 1,*/
/* 				'order': order*/
/* 			}*/
/* 			var filter_ = $(this).attr('data-status');*/
/* 			if(filter_ == 'a') {*/
/* 				filter = "";*/
/* 				getList();*/
/* 				return;*/
/* 			}*/
/* 			filter = 'ckm_in_warehouse.status = ' + filter_;*/
/* 			data['filter'] = 'ckm_in_warehouse.status = ' + filter_;*/
/* 			getList_2(data);*/
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
/* 		layuiTab();*/
/* */
/* 		function layuiTab() {*/
/* 			//console.log(layui);*/
/* 			layui.use('element', function() {*/
/* 				var $ = layui.jquery,*/
/* 					element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块*/
/* 			});*/
/* 		}*/
/* 		//获取所有客户  与  员工*/
/* 		getCusAndEmps();*/
/* */
/* 		function getCusAndEmps() {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_customer/f7',*/
/* 				method: 'post',*/
/* 				async: false,*/
/* 				data: {*/
/* 					select: 'khm_customer.id,khm_customer.name,khm_customer.customer_num',*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					$('.advandced-search').select2({*/
/* 						allowClear: true*/
/* 					});*/
/* 					for(var i in data) {*/
/* 						customers[data[i]['id']] = {*/
/* 							name:data[i]['name'],*/
/* 							num:data[i]['customer_num']*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 			});*/
/* */
/* 			ykp.doAjax({*/
/* 				url: '/api/api_employees/f7',*/
/* 				method: 'post',*/
/* 				async: false,*/
/* 				data: {*/
/* 					select: 'bmm_employees.id,bmm_employees.name'*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					$('.advandced-search').select2({*/
/* 						allowClear: true*/
/* 					});*/
/* 					for(var i in data) {*/
/* 						if(data[i]['name']) {*/
/* 							employees[data[i]['id']] = data[i]['name'];*/
/* 							$('.advandced-search').append(new Option(data[i]['name'], data[i]['id']));*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//切换每页显示的条目数*/
/* 		$('#changePageNum').change(function() {*/
/* 			pagesize = $(this).val();*/
/* 			ykp.setCookie('page_size', pagesize);*/
/* 			getList();*/
/* 		})*/
/* */
/* 		//时间插件*/
/* 		if(!ace.vars['old_ie']) {*/
/* 			$('.date-timepicker1').datetimepicker({*/
/* 				// format: 'YYYY-MM-DD', //use this option to display  seconds*/
/* 				icons: {*/
/* 					time: 'fa fa-clock-o',*/
/* 					date: 'fa fa-calendar',*/
/* 					up: 'fa fa-chevron-up',*/
/* 					down: 'fa fa-chevron-down',*/
/* 					previous: 'fa fa-chevron-left',*/
/* 					next: 'fa fa-chevron-right',*/
/* 					today: 'fa fa-arrows ',*/
/* 					clear: 'fa fa-trash',*/
/* 					close: 'fa fa-times'*/
/* 				}*/
/* 			}).next().on(ace.click_event, function() {*/
/* 				$(this).prev().focus();*/
/* 			});*/
/* 		}*/
/* */
/* 		//高级搜索显示 &  隐藏*/
/* 		/*$('.in').click(function() {*/
/* 			if($('#heightsearch').hasClass('active')) {*/
/* 				$('#heightsearch').removeClass('active').css('z-index', '');*/
/* 				$("#heightsearch1").slideUp();*/
/* 			}*/
/* 		});				*/
/* 		*/
/* 		$('#heightsearch').click(function() {*/
/* 			if($(this).hasClass('active')) {*/
/* 				$('.in').removeClass('modal-backdrop');*/
/* 				$(this).removeClass('active').css('z-index', '');*/
/* 				$("#heightsearch1").slideUp();*/
/* 			} else {*/
/* 				$('.in').addClass('modal-backdrop');*/
/* 				$("#heightsearch1").slideDown();*/
/* 				$(this).attr('class', 'btn btn-info btn-sm active').css('z-index', '1041');*/
/* 				cs.rest(false,'#heightsearch1');*/
/* 			}*/
/* 		})*//* */
/* 		cs.showHeightSearch('#heightsearch', '#heightsearch1')*/
/* 		//高级搜索*/
/* 		function advancedSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_accountancies/index_new',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					type: 1,*/
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
/* 					$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 				} else {*/
/* 					handleData(res);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//获取入库列表*/
/* 		//getList();*/
/* */
/* 		$('#flush').click(function() {*/
/* 			filter = '';*/
/* 			$('[pts="0"]').val('');*/
/* 			$('[sear="ckm_in_warehouse.jb_id"]').val('').trigger('change');*/
/* 			$('[sear="ckm_in_warehouse.create_id"]').val('').trigger('change');*/
/* 			$('[sear="ckm_in_warehouse.qr_id"]').val('').trigger('change');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getList();*/
/* 		})*/
/* */
/* 		function getList() {*/
/* 			generalSearch();*/
/* 			advancedSearch();*/
/* 			ykp.list({*/
/* 				url: '/api/api_accountancies/index_new',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					type: 1,*/
/* 					filter: filter,*/
/* 					limit: pagesize,*/
/* 					order: order*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt('暂无数据！');*/
/* 						}, 1000);*/
/* 						$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					} else {*/
/* 						handleData(res);*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 		//处理数据*/
/* 		function handleData(res) {*/
/* 			var data = res.data.items;*/
/* 			// return;*/
/* 			var html = [];*/
/* */
/* 			var status = []; //该数组存放th display属性值*/
/* 			$('#dynamic-table .thColor th').each(function(i, e) {*/
/* 				status.push($(this).css('display'));*/
/* 			});*/
/*             // console.log(status);*/
/* */
/* 			var states = ['待审批', '未通过', '已通过']; //该数组存放状态*/
/* 			// var types = ['凭证', '单据', '证件']; //该数组存放入库类型*/
/* 			// var warehouses = ['凭证仓', '单据仓', '证件仓']; //该数组存放仓库*/
/* */
/* 			//审批权限为true可以审批,为false不可审批*/
/* 			var spApp = cs.approve_authority({*/
/* 				name: '入库',*/
/* 				nodes: [149]*/
/* 			});*/
/* 			var cxApp = cs.approve_authority({*/
/* 				name: '入库',*/
/* 				nodes: [266]*/
/* 			});*/
/* 			// var edit_statu = cs.getNodes([150],true);*/
/* */
/* 			//物品数据*/
/* 			var goodsData = [];*/
/* 			//物品数据html*/
/* 			var goodsData_html = [];*/
/* 			// console.log(employees);*/
/* 			for(var i in data) {*/
/* 				goodsData = data[i]['goodsList'];*/
/* 				for(var k in goodsData) {*/
/* 					goodsData_html.push(goodsData[k]['ckm_in_warehouse.goods'] + ':' + goodsData[k]['ckm_in_warehouse.number']);*/
/* 				}*/
/* 				goodsData_html.sort();*/
/* */
/* 				html.push(`<tr data-id="${data[i]['ckm_in_warehouse.num']}" data-status="${data[i]['ckm_in_warehouse.status']}">*/
/*                             <td class="center">*/
/*                                 <label class="pos-rel">*/
/*                                     <input type="checkbox" name="check" class="ace"/>*/
/*                                     <span class="lbl"></span>*/
/*                                 </label>*/
/*                             </td>   */
/*                             <td>*/
/*                             <label class="pos-rel">*/
/*                              	<a class="btOrange info" href="#" title="详情" style=" color:#fff !important"><i class="fa fa-info "></i></a>*/
/*                                 <a class="btOrange sp"  href="#" contentAuthority="266" data-status = "0" style="display: ${cxApp ? (data[i]['ckm_in_warehouse.status'] == 2 ? 'inline-block' : 'none') : 'none'}; color:#fff !important" title="撤销"><i class="fa fa-rotate-left"></i></a>*/
/*                         		<a class="btGreen sp" href="#" contentAuthority="149" data-status = "2" style="display: ${spApp ? (data[i]['ckm_in_warehouse.status'] == 0 ?'inline-block' : 'none') : 'none'}; color:#fff !important" title="通过"><i class="fa fa-check-circle-o"></i></a>*/
/*                         		<a class="btRed sp" href="#" contentAuthority="149" data-status = "1" style="display: ${spApp ? (data[i]['ckm_in_warehouse.status'] == 0 ?'inline-block' : 'none') : 'none'}; color:#fff !important" title="驳回"><i class="fa fa-times-circle"></i></a>*/
/*                             </label>*/
/*                             */
/*                             </td>*/
/*                             <td data-num="1" style="display:${status[2]};" class="center">*/
/*                                 ${states[data[i]['ckm_in_warehouse.status']]}*/
/*                             </td>*/
/*                             <td data-num="2" style="display:${status[3]};" class="center">*/
/*                                 ${data[i]['ckm_in_warehouse.num']}*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[4]};" data-num="3" data-cid="${data[i]['khm_customer.id']}">*/
/*                                 <a href="#" class="customerDetail pos-rel">${data[i]['khm_customer.name']}</a>*/
/*                                 <label class="pos-rel">*/
/* 				 				<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}" data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>*/
/* 			 				 </label>*/
/*                            */
/*                             </td>*/
/*                             <td class="center" style="display:${status[5]};" data-num="4">*/
/*                                 ${data[i]['khm_customer.customer_num']}*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[6]};" data-num="14">*/
/*                                 ${data[i]['position']['pos_name']+data[i]['position']['pos_num']}*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[7]};" data-num="5">*/
/*                             ${data[i]['jb_info']['name'] || data[i]['create_info']['name']}                              */
/*                             </td>                          */
/*                             <td class="center" style="display:${status[8]};" data-num="6">*/
/*                                 ${cs.getNowTime(data[i]['ckm_in_warehouse.time'])}*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[9]};" data-num="7" title="${goodsData_html.join('&#13;')}">*/
/*                             	<label style="text-overflow: ellipsis;font-weight:normal;" >${goodsData_html.join('；')}</label>*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[10]};" data-num="15">*/
/*                                 ${data[i]['ckm_in_warehouse.remark']}*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[11]};" data-num="8">*/
/*                                 ${data[i]['ckm_in_warehouse.create_id'] != 0 ? employees[data[i]['ckm_in_warehouse.create_id']] : ''}*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[12]};" data-num="9">*/
/*                                 ${cs.getNowTime(data[i]['ckm_in_warehouse.create_time'],true)}*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[13]};" data-num="10">*/
/*                                 ${data[i]['ckm_in_warehouse.qr_id'] != 0 ? employees[data[i]['ckm_in_warehouse.qr_id']] : ''}*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[14]};" data-num="11">*/
/*                                 ${data[i]['ckm_in_warehouse.qr_time'] != 0? cs.getNowTime(data[i]['ckm_in_warehouse.qr_time'],true) : ''}*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[15]};" data-num="12">*/
/*                                  ${data[i]['ckm_in_warehouse.month']}*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[16]};" data-num="13">*/
/*                                 ${data[i]['ckm_in_warehouse.qr_remark']}*/
/*                             </td>*/
/*                         </tr>`);*/
/* */
/* 				//物品数据*/
/* 				goodsData = [];*/
/* 				//物品数据html*/
/* 				goodsData_html = [];*/
/* 			};*/
/* 			$('#datalist').html(html.join(''));*/
/* 			custom.showReamrk();*/
/* 			custom.get_custom_info();*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/* */
/* 			var spStatus = cs.getSpStatus('入库', true);*/
/* 			//点击 审批 or  驳回 or  撤销*/
/* 			$("#datalist tr").find('.sp').click(function() {*/
/* 				var status = $(this).attr('data-status');*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				changeStatus(status, id);*/
/* 			});*/
/* */
/* 			//编辑入库*/
/* 			// edit_in();*/
/* */
/* 			plsp(); //批量审批*/
/* */
/* 			//查看详情*/
/* 			seeDetails(data);*/
/* 		}*/
/* */
/* 		//查看详情*/
/* 		function seeDetails(data) {*/
/* 			$('.info').unbind('click').click(function() {*/
/* 				var index = $(this).parents('tr').index();*/
/* 				var _data = data[index];*/
/* */
/* 				showMark('#template');*/
/* 				$('#showBox .title').text('入库详情');*/
/*                 $("#temHeader").width($("#showBox").width()-47);*/
/* */
/* 				//入库基本信息*/
/* 				var field;*/
/* 				$('#templateCon [field]').each(function(i, e) {*/
/* 					field = 'ckm_in_warehouse.' + $(this).attr('field');*/
/* 					if($(this).attr('field') == 'jb_id' || $(this).attr('field') == 'create_id' || $(this).attr('field') == 'qr_id') {*/
/* 						$(this).text(_data[field] != '0' ? employees[_data[field]] : '');*/
/* 						return;*/
/* 					}*/
/* 					if($(this).attr('field') == 'time' || $(this).attr('field') == 'create_time' || $(this).attr('field') == 'qr_time') {*/
/* 						$(this).text(_data[field] != '0' ? cs.getNowTime(_data[field],true) : '');*/
/* 						return;*/
/* 					}*/
/* 					if($(this).attr('field') == 'status') {*/
/* 						$(this).text(_data[field] == '1' ? '未通过' : (_data[field] == '2' ? '已通过' : '待审批	'));*/
/* 						return;*/
/* 					}*/
/* 					if($(this).attr('field') == 'customer_id') {*/
/* 						$(this).text(customers[_data[field]]['name']);*/
/* 						return;*/
/* 					}*/
/* */
/* 					$(this).text(_data[field]);*/
/* 				});*/
/* */
/* 				//物品数据*/
/* 				var goodsData = _data['goodsList'];*/
/* 				var pz_html = []; //凭证html*/
/* 				var pj_html = []; //票据html*/
/* 				var zj_html = []; //证件html*/
/* */
/* 				for(var i in goodsData) {*/
/* 					//凭证*/
/* 					if(goodsData[i]['ckm_in_warehouse.type'] == '1') {*/
/* 						pz_html.push(*/
/* 							`<tr>*/
/* 								<td in_title>物品名称：</td>*/
/* 								<td in_content>*/
/* 									<span>${goodsData[i]['ckm_in_warehouse.goods']}</span>*/
/* 								</td>*/
/* 								<td in_title="">数量</td>*/
/* 								<td in_content>*/
/* 									<span>${goodsData[i]['ckm_in_warehouse.number']}</span>*/
/* 								</td>*/
/* 							</tr>`*/
/* 						);*/
/* 					}*/
/* 					//票据*/
/* 					if(goodsData[i]['ckm_in_warehouse.type'] == '2') {*/
/* 						pj_html.push(*/
/* 							`<tr>*/
/* 								<td in_title>物品名称：</td>*/
/* 								<td in_content>*/
/* 									<span>${goodsData[i]['ckm_in_warehouse.goods']}</span>*/
/* 								</td>*/
/* 								<td in_title="">数量</td>*/
/* 								<td in_content>*/
/* 									<span>${goodsData[i]['ckm_in_warehouse.number']}</span>*/
/* 								</td>*/
/* 							</tr>`*/
/* 						);*/
/* 					}*/
/* 					//证件*/
/* 					if(goodsData[i]['ckm_in_warehouse.type'] == '3') {*/
/* 						zj_html.push(*/
/* 							`<tr>*/
/* 								<td in_title>物品名称：</td>*/
/* 								<td in_content>*/
/* 									<span>${goodsData[i]['ckm_in_warehouse.goods']}</span>*/
/* 								</td>*/
/* 								<td in_title="">数量</td>*/
/* 								<td in_content>*/
/* 									<span>${goodsData[i]['ckm_in_warehouse.number']}</span>*/
/* 								</td>*/
/* 							</tr>`*/
/* 						);*/
/* 					}*/
/*                     $("#temHeader").width($("#showBox").width()-47);*/
/* 				}*/
/* */
/* 				$('#templateCon .pz tbody').append(pz_html.length > 0 ? pz_html.join('') : '<tr><td colspan="30" style="text-align:center !important;">暂无数据</td></tr>');*/
/* 				$('#templateCon .pj tbody').append(pj_html.length > 0 ? pj_html.join('') : '<tr><td colspan="30" style="text-align:center !important;">暂无数据</td></tr>');*/
/* 				$('#templateCon .zj tbody').append(zj_html.length > 0 ? zj_html.join('') : '<tr><td colspan="30" style="text-align:center !important;">暂无数据</td></tr>');*/
/* 			});*/
/* */
/* 		}*/
/* */
/* 		function plsp() {*/
/* 			$('.plSp').unbind('click').click(function() {*/
/* 				var num = 0;*/
/* 				var status = '';*/
/* 				var coldata = [];*/
/* 				var Statu = false;*/
/* 				$('#datalist').find('input[type=checkbox]').each(function(i) {*/
/* 					if($(this).is(':checked')) {*/
/* 						num++;*/
/* 						status = $(this).parents('tr').attr('data-status') == '0' ? 2 : 0;*/
/* 						if($(this).parents('tr').attr('data-status') != 0) {*/
/* 							ykp.prompt('审批过的不能批量审批!');*/
/* 							Statu = false;*/
/* 						} else {*/
/* 							coldata.push({*/
/* 								num: $(this).parents('tr').attr('data-id'),*/
/* 								status: status*/
/* 							});*/
/* 							Statu = true;*/
/* 						}*/
/* */
/* 					}*/
/* 				})*/
/* 				if(num == 0) {*/
/* 					ykp.prompt('请选择再审批');*/
/* 				} else {*/
/* 					if(Statu) {*/
/* 						ykp.doAjax({*/
/* 							url: "/api/api_accountancies/batch_sh_io_new",*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								data: JSON.stringify(coldata)*/
/* 							},*/
/* 							success: function(res) {*/
/* 								ykp.prompt('审批成功');*/
/* 								getList(1);*/
/* 							}*/
/* 						})*/
/* 					}*/
/* 				}*/
/* */
/* 			})*/
/* 		}*/
/* */
/* 		function select2() {*/
/* 			//参与人员*/
/* 			$('#templateCon .pzList').css('width', '435px').select2({*/
/* 				allowClear: true*/
/* 			})*/
/* 			$('#select2-multiple-style .btn').on('click', function(e) {*/
/* 				var target = $(this).find('input[type=radio]');*/
/* 				var which = parseInt(target.val());*/
/* 				if(which == 2)*/
/* 					$('.select2').addClass('tag-input-style');*/
/* 				else*/
/* 					$('.select2').removeClass('tag-input-style');*/
/* 			});*/
/* 		}*/
/* */
/* 		//编辑入库*/
/* 		// function edit_in() {*/
/* 		// 	$('.edit').click(function() {*/
/* 		// 		var id = $(this).parents('tr').attr('data-id');*/
/* 		// 		showMark('.popup_new');*/
/* 		// 		$('#showBox .title').html('编辑入库');*/
/* */
/* 		// 		timeplug();*/
/* 		// 		getInfo();*/
/* 		// 		for(var i in employees) {*/
/* 		// 			if(employees[i]) {*/
/* 		// 				$('#templateCon select[addfield="jb_id"]').append(new Option(employees[i], i));*/
/* 		// 			}*/
/* 		// 		}*/
/* 		// 		var id = $(this).parents('tr').attr('data-id');*/
/* 		// 		ykp.doAjax({*/
/* 		// 			url: '/api/api_accountancies/info_io',*/
/* 		// 			method: 'post',*/
/* 		// 			data: {*/
/* 		// 				type: 1,*/
/* 		// 				id: id*/
/* 		// 			},*/
/* 		// 			success: function(res) {*/
/* 		// 				//console.log(res.data);*/
/* 		// 				var data = res.data;*/
/* 		// 				//添加默认数据*/
/* 		// 				$('#templateCon .item_form').find('input[addfield],select[addfield],textarea[addfield]').not(':eq(1)').each(function(i) {*/
/* 		// 					i == 4 ? $(this).val(cs.getNowTime(data[$(this).attr('addfield')])) : $(this).val(data[$(this).attr('addfield')]);*/
/* 		// 				})*/
/* 		// 				//添加默认物品*/
/* 		// 				$('#templateCon input[addfield="ck_name"]').val($('#templateCon select[addfield="type"]').find('option:selected').text().trim().replace(/入库/, '仓'));*/
/* 		// 				var result = ykp.getFormData('#templateCon', true);*/
/* 		// 				if(result.status) {*/
/* */
/* 		// 					ykp.doAjax({*/
/* 		// 						url: '/api/api_accountancies/list_goods',*/
/* 		// 						method: 'post',*/
/* 		// 						data: {*/
/* 		// 							type: $('#templateCon select[addfield="type"]').val()*/
/* 		// 						},*/
/* 		// 						success: function(res) {*/
/* 		// 							var data = res.data.list;*/
/* 		// 							$('#templateCon select[addfield="goods"]').empty().append('<option>  请选择 </option>');*/
/* 		// 							for(var i in data) {*/
/* 		// 								$('#templateCon select[addfield="goods"]').append(new Option(data[i]['ckm_warehouse_goods.name'], data[i]['ckm_warehouse_goods.name']));*/
/* 		// 							}*/
/* 		// 							changeName();*/
/* 		// 							submit(id);*/
/* 		// 						}*/
/* 		// 					});*/
/* 		// 				}*/
/* 		// 			}*/
/* 		// 		});*/
/* 		// 	});*/
/* 		// }*/
/* */
/* 		//全选 反选*/
/* 		$('.thColor .ace').click(function() {*/
/* 			$('#datalist .ace').prop('checked', this.checked);*/
/* 		});*/
/* */
/* 		//对点击驳回进行处理*/
/* 		function changeStatus(status, id) {*/
/* 			var data = {*/
/* 				url: '/api/api_accountancies/sh_io_new',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					num: id,*/
/* 					status: status*/
/* 				}*/
/* 			}*/
/* console.log(status)*/
/* 			if(status == 1) {*/
/* 				$('#feedBack').show();*/
/* 				$('#feedBack').find('input').val('');*/
/* 				$('#feedBack .hold').unbind('click').click(function() {*/
/* 					var approve_reply = $('#feedBack').find('input').val().trim();*/
/* 					if(approve_reply == '') {*/
/* 						ykp.prompt('不能为空！');*/
/* 						return false;*/
/* 					}else{*/
/* 						ykp.prompt('驳回成功！');*/
/* 							data.data.qr_remark = approve_reply;*/
/* 					// data.data.approve_reply = approve_reply;*/
/* 					setStatus(data);*/
/* 					$('.close_label').parents('.label_popup').fadeOut();					*/
/* 					}*/
/* 				*/
/* 				})*/
/* 				cs.closePop();*/
/* 			} else if(status == 0) {*/
/* //				bootbox.confirm('确认撤销审批？', function(flag) {*/
/* //					if(flag) {*/
/* //						setStatus(data);*/
/* //					}*/
/* //				})*/
/*                 layui.use('layer',function(){*/
/*                 	var layer = layui.layer ;*/
/*                 	layer.confirm('确认撤销审批？' , function(flag){*/
/*                 		if(flag){*/
/*                 			layer.closeAll();*/
/*                 			setStatus(data);*/
/*                 		}*/
/*                 	})*/
/*                 })*/
/* 			}else if(status == 2){*/
/* 				ykp.prompt('审批通过！');*/
/* 				setStatus(data);*/
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
/* 		//			ykp.prompt('审批成功!');*/
/* 					getList();*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//普通搜索*/
/* 		function generalSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_accountancies/index_new',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					type: 1,*/
/* 					limit: pagesize,*/
/* 					order: order*/
/* 				}*/
/* 			}*/
/* */
/* 			cs.doSearch('#search', data, 'filter', false, function(res, _filter) {*/
/* 				filter = _filter;*/
/* 				if(res.data.items == "") {*/
/* 					ykp.prompt("暂无数据");*/
/* 					$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 				} else {*/
/* 					handleData(res);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//时间插件*/
/* 		function timeplug() {*/
/* 			if(!ace.vars['old_ie']) {*/
/* 				$('#templateCon .date-timepicker1').datetimepicker({*/
/* 					// format: 'YYYY-MM-DD', //use this option to display seconds*/
/* 					icons: {*/
/* 						time: 'fa fa-clock-o',*/
/* 						date: 'fa fa-calendar',*/
/* 						up: 'fa fa-chevron-up',*/
/* 						down: 'fa fa-chevron-down',*/
/* 						previous: 'fa fa-chevron-left',*/
/* 						next: 'fa fa-chevron-right',*/
/* 						today: 'fa fa-arrows ',*/
/* 						clear: 'fa fa-trash',*/
/* 						close: 'fa fa-times'*/
/* 					}*/
/* 				}).next().on(ace.click_event, function() {*/
/* 					$(this).prev().focus();*/
/* 				});*/
/* 			}*/
/* 		}*/
/* */
/* 		//自定义table*/
/* 		cs.custorm_check('#dynamic-table', '#datalist', true);*/
/* */
/* 		//删除一行*/
/* 		function removeT() {*/
/* 			$('.remove').click(function() {*/
/* 				$(this).parents('tr').remove();*/
/* 			})*/
/* 		}*/
/* */
/* 		//票据交接列表添加一行*/
/* 		function showTicket(goods) {*/
/* 			$('#templateCon .addTicket').unbind('click').click(function() {*/
/* 				var tr = `<tr>*/
/* 				<td><a href="javascript:;" class="remove">-</a></td><td>*/
/* 				<select class="goods">*/
/* 				${goods['PJ']}*/
/* 				</select></td><td><input type="number" class="count" value=""/></td><td><input class="money" value="0" type="number"/></td></tr>`;*/
/* 				$('#templateCon table>#ticketBody').append(tr);*/
/* 				removeT();*/
/* 			})*/
/* 		}*/
/* */
/* 		//证件交接列表添加一行*/
/* 		function showCard(goods) {*/
/* 			$('#templateCon .addCard').unbind('click').click(function() {*/
/* 				var tr1 = `<tr><td><a href="javascript:;" class="remove">-</a></td><td><select class="goods">${goods['ZJ']}*/
/* 				</select></td><td><input type="number" class="count" value=""/></td></tr>`;*/
/* 				$('#templateCon table>#cardBody').append(tr1);*/
/* 				removeT();*/
/* 			})*/
/* 		}*/
/* */
/* 		function getway() {*/
/* 			$('#templateCon select[title="getway"]').change(function() {*/
/* 				var val = $(this).val();*/
/* 				if(val == 3) {*/
/* 					$("#templateCon #express").show();*/
/* 					cs.upload1({*/
/* 						el: "#templateBox #upload1",*/
/* 						ael: "#templateBox #fileBox"*/
/* 					})*/
/* 				} else {*/
/* 					$("#templateCon #express").hide();*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//切换交接表*/
/* 		function changeJoinTable(goods) {*/
/* 			$('#templateCon .buttons button').unbind('click').click(function() {*/
/* 				if(!$('#templateCon [addfield="customer_id"]').val()) {*/
/* 					ykp.prompt('请选择公司');*/
/* 					return;*/
/* 				}*/
/* */
/* 				var index = $(this).index();*/
/* 				if(index == 0) {*/
/* 					return;*/
/* 				}*/
/* 				if($(this).hasClass('active')) {*/
/* 					$(this).removeClass('active');*/
/* 					var _class = $('#templateCon .connects-content>div').eq(index).find('table').attr('class');*/
/* 					$('#templateCon .connects-content>.' + _class).remove();*/
/* 				} else {*/
/* 					$(this).addClass('active');*/
/* 					var _table = $('#templateCon .connects-content>div').eq(index).find('div').html();*/
/* 					_table = $(_table).css('display', 'table');*/
/* 					$('#templateCon .connects-content').append(_table);*/
/* 					//					$('#templateCon .connects-content>div').eq(index).find('.page-header').css('display','block');*/
/* 					//					$('#templateCon .page-header').css('display','block');*/
/* 					showTicket(goods);*/
/* 					showCard(goods);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//切换公司获取相应的长期合同订单编号*/
/* 		//*/
/* 		function changeCompanyGetNum() {*/
/* 			$('#templateCon [addfield="customer_id"]').change(function() {*/
/* 				//清空订单号下拉选中的数据*/
/* 				$('#templateCon [addfield="contract_code"]').find('option').not(':first').remove();*/
/* */
/* 				//清空凭证月份 和 服务月份*/
/* 				$('#templateCon .voucher .voucher_div').html('');*/
/* 				$('#templateCon .service_month .voucher_div').html('');*/
/* */
/* 				//清空票据talbe和证件table,按钮删除active class*/
/* 				$('#templateCon .connects-content>table').remove();*/
/* 				$('#templateCon .buttons button').removeClass('active');*/
/* */
/* 				if(!$(this).val()) {*/
/* 					$('#templateCon [addfield="contract_code"]').val('').select2();*/
/* 					return;*/
/* 				}*/
/* */
/* 				//cs.getYearAndMonth('2014-1-1', '2025-12-31', '#templateBox .pzList','',true);*/
/* 				cs.getYearAndMonth('2014-1-1', '2025-12-31', '#templateBox .pzList','',true,true);*/
/* 				select2();*/
/* 				$('#templateCon .buttons button').not(':first').prop('disabled', false);*/
/* 				//				changeContractCodeGetMonthAndGoods();*/
/* */
/* 				//获取物品信息*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_accountancies/list_goods',*/
/* 					method: 'post',*/
/* 					async: false,*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						var goods = {};*/
/* */
/* 						//票据物品*/
/* 						var pjgoods = data['PJ']['list'];*/
/* 						//证件物品*/
/* 						var zjgoods = data['ZJ']['list'];*/
/* */
/* 						//票据物品thml*/
/* 						var pjgoods_html = [];*/
/* 						for(var i in pjgoods) {*/
/* 							pjgoods_html.push('<option value="' + pjgoods[i]['ckm_warehouse_goods.name'] + '">' + pjgoods[i]['ckm_warehouse_goods.name'] + '</option>');*/
/* 						}*/
/* */
/* 						//证件物品thml*/
/* 						var zjgoods_html = [];*/
/* 						for(var i in zjgoods) {*/
/* 							zjgoods_html.push('<option value="' + zjgoods[i]['ckm_warehouse_goods.name'] + '">' + zjgoods[i]['ckm_warehouse_goods.name'] + '</option>');*/
/* 						}*/
/* */
/* 						goods = {*/
/* 							'PJ': pjgoods_html,*/
/* 							'ZJ': zjgoods_html*/
/* 						};*/
/* */
/* 						$('#templateCon .bill tbody select').html(pjgoods_html.join(''));*/
/* 						$('#templateCon .certificate tbody select').html(zjgoods_html.join(''));*/
/* */
/* 						//切换交接表*/
/* 						changeJoinTable(goods);*/
/* 						showTicket(goods);*/
/* 						showCard(goods);*/
/* 					}*/
/* 				})*/
/* */
/* 				var customer_id = $(this).val();*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_contract/f7',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						filter: 'htm_contract.contract_type = 1 and htm_contract.customer_id = ' + customer_id,*/
/* 						select: 'htm_contract.id,htm_contract.contract_code'*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						var contract_code_html = [];*/
/* 						for(var i in data) {*/
/* 							contract_code_html.push(*/
/* 								`<option value="${data[i]['id']}">${data[i]['contract_code']}</option>`*/
/* 							);*/
/* 						}*/
/* 						$('#templateCon [addfield="contract_code"]').append(contract_code_html.join('')).val('').select2();*/
/* */
/* 						// console.log($('#templateCon [addfield="contract_code"]').val());*/
/* */
/* 						//切换订单号获取凭证和服务月份以及物品信息*/
/* */
/* 						//切换订单号获取*/
/* 						// changeContractCodeGetGoods();*/
/* 					}*/
/* 				});*/
/* 			});*/
/* 		}*/
/* */
/* 		//切换订单号获取凭证和服务月份以及物品信息*/
/* 		function changeContractCodeGetMonthAndGoods() {*/
/* 			//			$('#templateCon [addfield="contract_code"]').change(function(){*/
/* 			//清空票据talbe和证件table,按钮删除active class*/
/* 			$('#templateCon .connects-content>table').remove();*/
/* 			$('#templateCon .buttons button').removeClass('active');*/
/* */
/* 			if(!$(this).val()) {*/
/* 				$('#templateCon .voucher .voucher_div').html('');*/
/* 				$('#templateCon .service_month .voucher_div').html('');*/
/* 				return;*/
/* 			}*/
/* */
/* 			//获取凭证和服务月份*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_contract/get_month_pz',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					contract_id: $(this).val()*/
/* 				},*/
/* 				success: function(res) {*/
/* 					//将票据交接，证件交接按钮取消禁用*/
/* 					$('#templateCon .buttons button').not(':first').prop('disabled', false);*/
/* */
/* 					var data = res.data;*/
/* */
/* 					//凭证 服务所有月份*/
/* 					var all_month = data['all_month'];*/
/* */
/* 					//已完成服务月份*/
/* 					var done_month = data['done_month'];*/
/* */
/* 					//已完成凭证月份*/
/* 					var pz_month = data['pz_month'];*/
/* */
/* 					//服务月份html*/
/* 					var service_html = [];*/
/* 					//拼争月份html*/
/* 					var pz_html = [];*/
/* */
/* 					var index; //下标不等于-1;则打钩禁用*/
/* 					for(var i in all_month) {*/
/* 						// if($.inArray(all_month[i],done_month) != -1){*/
/* */
/* 						// }*/
/* 						index = $.inArray(all_month[i], done_month);*/
/* 						service_html.push(*/
/* 							`<label class="voucher_label">*/
/* 									<input type="checkbox" data-time="${all_month[i]}">*/
/* 									<span class="voucher_month">${all_month[i]}</span> */
/* 								</label>`*/
/* 						);*/
/* */
/* 						index = $.inArray(all_month[i], pz_month);*/
/* 						pz_html.push(*/
/* 							`<label class="voucher_label">*/
/* 									<input type="checkbox" ${index != -1 ? 'checked' : ''} ${index != -1 ? 'disabled' : ''} data-time="${all_month[i]}">*/
/* 									<span class="voucher_month">${all_month[i]}</span> */
/* 								</label>`*/
/* 						);*/
/* 					}*/
/* */
/* 					$('#templateCon .voucher .voucher_div').html(pz_html.join(''));*/
/* 					$('#templateCon .service_month .voucher_div').html(service_html.join(''));*/
/* */
/* 					//选中凭证月份 默认选中 服务月份*/
/* 					// voucherToService();*/
/* 				}*/
/* 			});*/
/* */
/* 			//获取物品信息*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_accountancies/list_goods',*/
/* 				method: 'post',*/
/* 				async: false,*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					var goods = {};*/
/* */
/* 					//票据物品*/
/* 					var pjgoods = data['PJ']['list'];*/
/* 					//证件物品*/
/* 					var zjgoods = data['ZJ']['list'];*/
/* */
/* 					//票据物品thml*/
/* 					var pjgoods_html = [];*/
/* 					for(var i in pjgoods) {*/
/* 						pjgoods_html.push('<option value="' + pjgoods[i]['ckm_warehouse_goods.name'] + '">' + pjgoods[i]['ckm_warehouse_goods.name'] + '</option>');*/
/* 					}*/
/* */
/* 					//证件物品thml*/
/* 					var zjgoods_html = [];*/
/* 					for(var i in zjgoods) {*/
/* 						zjgoods_html.push('<option value="' + zjgoods[i]['ckm_warehouse_goods.name'] + '">' + zjgoods[i]['ckm_warehouse_goods.name'] + '</option>');*/
/* 					}*/
/* */
/* 					goods = {*/
/* 						'PJ': pjgoods_html,*/
/* 						'ZJ': zjgoods_html*/
/* 					};*/
/* */
/* 					$('#templateCon .bill tbody select').html(pjgoods_html.join(''));*/
/* 					$('#templateCon .certificate tbody select').html(zjgoods_html.join(''));*/
/* */
/* 					//切换交接表*/
/* 					changeJoinTable(goods);*/
/* 				}*/
/* 			})*/
/* 			//			});*/
/* 		}*/
/* */
/* 		//选中凭证月份 默认选中 服务月份*/
/* 		function voucherToService() {*/
/* 			$('#templateCon .voucher input').unbind('click').click(function() {*/
/* 				// if($(this).prop('checked')){*/
/* 				$('#templateCon .service_month input[data-time="' + $(this).attr('data-time') + '"]').prop('checked', $(this).prop('checked'));*/
/* 				// }*/
/* 			});*/
/* 		}*/
/* */
/* 		//切换订单号获取物品信息*/
/* 		// function changeContractCodeGetGoods(){*/
/* */
/* 		// };*/
/* */
/* 		//添加入库*/
/* 		$('.add').click(function() {*/
/* 			showMark('.popup_new');*/
/* 			$('#showBox .title').text('添加入库');*/
/* 			layui.use('element', function() {*/
/* 				var element = layui.element;*/
/* 				element.init('collapse');*/
/* 			});*/
/* */
/* 			//所有员工*/
/* 			var jb_html = []; //经办人html*/
/* 			for(var i in employees) {*/
/* 				jb_html.push(*/
/* 					`<option value="${i}">${employees[i]}</option>`*/
/* 				);*/
/* 			}*/
/* 			$('#templateCon [addfield="jb_id"]').append(jb_html.join(''));*/
/* */
/* 			//所有公司*/
/* 			$('#templateCon [addfield]').select2({*/
/* 				allowClear: true*/
/* 			});*/
/* 			var customer_html = [];*/
/* 			for(var i in customers) {*/
/* 				customer_html.push(*/
/* 					`<option value="${i}">${customers[i]['num']}(${customers[i]['name']})</option>`*/
/* 				);*/
/* 			}*/
/* 			$('#templateCon [addfield="customer_id"]').append(customer_html.join(''));*/
/* */
/* 			//切换公司获取相应的长期合同订单编号*/
/* 			changeCompanyGetNum();*/
/* */
/* 			//保存提交数据*/
/* 			saveData();*/
/* */
/* 			//切换收单方式*/
/* 			getway();*/
/* */
/* 			// timeplug(new Date()); //时间*/
/* */
/* 			// getInfo(); //获取默认信息*/
/* */
/* 			// changeName(); //改变类型来改变物品*/
/* */
/* 			// for(var i in employees) {*/
/* 			// 	if(employees[i]) {*/
/* 			// 		$('#templateCon select[addfield="jb_id"]').append(new Option(employees[i], i));*/
/* 			// 	}*/
/* 			// }*/
/* */
/* 			// submit();*/
/* 		});*/
/* */
/* 		//保存提交数据*/
/* 		function saveData() {*/
/* 			$('#templateCon .sure_button').unbind('click').click(function() {*/
/* 				$('#templateCon .sure_button').prop('disabled', true);*/
/* 				//未选择订单号则提示*/
/* 				var customer_id = $('#templateCon [addfield="customer_id"]').val();*/
/* */
/* 				//提交数据*/
/* 				var postdata = {*/
/* 					customer_id: customer_id,*/
/* 					jb_id: $('#templateCon [addfield="jb_id"]').val()*/
/* 				};*/
/* */
/* 				//服务月份*/
/* 				var service_month = [];*/
/* 				if($('#templateCon #pzList').val()){*/
/* 					$('#templateCon #pzList').val().forEach(function(item) {*/
/* 						service_month.push(item.replace(/\./, ''));*/
/* 					})*/
/* 					postdata['year_month_id'] = service_month.join(',');*/
/* 				}*/
/* 				*/
/* */
/* 				*/
/* */
/* 				//获取送单方式信息*/
/* 				var datae = {*/
/* 					express: $('#templateCon [title="express"]').val().trim(),*/
/* 					num: $('#templateCon [title="expressnum"]').val().trim(),*/
/* 					cost: $('#templateCon [title="cost"]').val().trim()*/
/* 				}*/
/* 				postdata['data_type'] = $('#templateCon [title="getway"]').val();*/
/* 				if(postdata.data_type == 3) {*/
/* 					postdata['data'] = datae;*/
/* 				}*/
/* 				if(postdata.data_type == 3 && (postdata.data.express == '' || postdata.data.num == '' ||*/
/* 						postdata.data.cost == '')) {*/
/* 					ykp.prompt('快递信息必须填写');*/
/* 					return;*/
/* 				}*/
/* */
/* 				if(postdata.data_type == 3) {*/
/* 					postdata['data'] = JSON.stringify(datae);*/
/* 				}*/
/* */
/* 				//收单数据集*/
/* 				var getList_dataList = [];*/
/* 				//凭证数据*/
/* 				if($('#templateCon #pzList1').val()){*/
/* 					$('#templateCon #pzList1').val().forEach(function(item) {*/
/* 						getList_dataList.push({*/
/* 							goods: item.replace(/\./, ''),*/
/* 							type: 1,*/
/* 							number: 1*/
/* 						});*/
/* 	*/
/* 					})*/
/* 				}*/
/* 				*/
/* */
/* 				//票据数据*/
/* 				$('#templateCon  #ticketBody tr').each(function(res) {*/
/* 					if($(this).find('.count').val() > 0){*/
/* 						getList_dataList.push({*/
/* 							goods: $(this).find('.goods').val(),*/
/* 							type: 2,*/
/* 							number: $(this).find('.count').val()*/
/* 						});*/
/* 					}*/
/* 				});*/
/* */
/* 				//证件数据*/
/* 				$('#templateCon  #cardBody tr').each(function(res) {*/
/* 					if( $(this).find('.count').val()  > 0){*/
/* 						getList_dataList.push({*/
/* 							goods: $(this).find('.goods').val(),*/
/* 							type: 3,*/
/* 							number: $(this).find('.count').val()*/
/* 						});*/
/* 					}*/
/* 					*/
/* 				});*/
/* //				//入库物品为空，则取消上传*/
/* //				if(getList_dataList.length <= 0) {*/
/* //					ykp.prompt('请选择入库物品！');*/
/* //					return;*/
/* //				}*/
/* //				*/
/* 				if(getList_dataList.length == 0){*/
/* 					getList_dataList.push({*/
/* 						goods: "文件袋",*/
/* 						type:0,*/
/* 						number: 1*/
/* 					});*/
/* 				}*/
/* 				if(!postdata["jb_id"]){*/
/* 					ykp.prompt('请选择经办人')*/
/* 					return false;*/
/* 				}	*/
/* 				postdata['dataList'] = JSON.stringify(getList_dataList);*/
/* 				postdata['remark'] = $('#templateBox .rmark').val();*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_service/add_acquiring_new2',*/
/* 					methods: 'post',*/
/* 					data: postdata,*/
/* 					success: function(res) {*/
/* 						cs.close();*/
/* 						$('#templateCon .sure_button').prop('disabled', false);*/
/* 						getList();*/
/* 					}*/
/* 				})*/
/* 			});*/
/* 		}*/
/* */
/* 		// function changeName() {*/
/* 		// 	$('#templateCon select[addfield="type"]').change(function() {*/
/* 		// 		var index = $(this).val();*/
/* */
/* 		// 		$('#templateCon select[addfield="goods"]').find('option').not(':first').remove();*/
/* */
/* 		// 		if(index == 0){*/
/* 		// 			$('#templateCon input[addfield="ck_name"]').val('');*/
/* 		// 		}*/
/* */
/* 		// 		if(index != 0) {*/
/* 		// 			$('#templateCon input[addfield="ck_name"]').val($(this).find('option:selected').text().trim().replace(/入库/, '仓'));*/
/* 		// 			ykp.doAjax({*/
/* 		// 				url: '/api/api_accountancies/list_goods',*/
/* 		// 				method: 'post',*/
/* 		// 				data: {*/
/* 		// 					type: index*/
/* 		// 				},*/
/* 		// 				success: function(res) {*/
/* 		// 					var data = res.data.list;*/
/* 		// 					//console.log(data);*/
/* 		// 					$('#templateCon select[addfield="goods"]').empty().append('<option>  请选择 </option>');*/
/* 		// 					for(var i in data) {*/
/* 		// 						$('#templateCon select[addfield="goods"]').append(new Option(data[i]['ckm_warehouse_goods.name'], data[i]['ckm_warehouse_goods.name']));*/
/* 		// 					}*/
/* 		// 				}*/
/* 		// 			});*/
/* 		// 		}*/
/* 		// 	});*/
/* 		// }*/
/* */
/* 		// function submit(id) {*/
/* 		// 	$('#templateCon .sure_button').click(function() {*/
/* 		// 		if(!cs.popValidate()) {*/
/* 		// 			return;*/
/* 		// 		};*/
/* 		// 		var data = {};*/
/* 		// 		var val = '';*/
/* 		// 		$('#templateCon .item_form').find('input[addfield],select[addfield],textarea[addfield]').not(':eq(1)').each(function(i) {*/
/* 		// 			val = i == 4 ? parseInt(new Date($(this).val()) / 1000) : $(this).val();*/
/* 		// 			data[$(this).attr('addfield')] = val;*/
/* 		// 		})*/
/* 		// 		data.stype = 1;*/
/* 		// 		if(id) {*/
/* 		// 			data.id = id;*/
/* 		// 		}*/
/* 		// 		url = id ? '/api/api_accountancies/edit_io' : '/api/api_accountancies/add_io';*/
/* 		// 		data.type = $('#templateBox #select').val();*/
/* 		// 		//console.log(data);*/
/* 		// 		ykp.doAjax({*/
/* 		// 			url: url,*/
/* 		// 			method: 'post',*/
/* 		// 			data: data,*/
/* 		// 			success: function(res) {*/
/* 		// 				var msg = id ? '编辑成功' : '添加成功!';*/
/* 		// 				ykp.prompt(msg);*/
/* 		// 				cs.close();*/
/* 		// 				getList();*/
/* 		// 			}*/
/* 		// 		});*/
/* 		// 	});*/
/* 		// }*/
/* */
/* 		// function getInfo() {*/
/* 		// 	$.get(ykp.api_url+'/api/api_common/get_time', function(res) {*/
/* 		// 		var time = cs.getNowTime(res);*/
/* 		// 		var year = time.substring(0, time.indexOf('-'));*/
/* 		// 		for(var i = 1; i < 13; i++) {*/
/* 		// 			if(i < 10) {*/
/* 		// 				i = '0' + i;*/
/* 		// 			}*/
/* 		// 			$('#templateCon select[addfield="month"]').append(new Option(year + i));*/
/* 		// 		}*/
/* 		// 	});*/
/* */
/* 		// 	ykp.doAjax({*/
/* 		// 		url: '/api/api_accountancies/get_cus',*/
/* 		// 		method: 'post',*/
/* 		// 		data: {},*/
/* 		// 		success: function(res) {*/
/* 		// 			var data = res.data;*/
/* 		// 			$('#templateBox .name').select2({*/
/* 		// 				allowClear: true*/
/* 		// 			})*/
/* 		// 			for(var i in data) {*/
/* 		// 				$('#templateCon .name').append(new Option(customers[data[i]['ckm_position_num.customer_id']],*/
/* 		// 					data[i]['ckm_position_num.customer_id']));*/
/* 		// 			}*/
/* 		// 		}*/
/* 		// 	});*/
/* 		// }*/
/* 	});*/
/* </script>*/
