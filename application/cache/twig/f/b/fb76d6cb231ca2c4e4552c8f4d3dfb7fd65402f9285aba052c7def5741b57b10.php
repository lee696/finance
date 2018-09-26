<?php

/* admin/depotManagement/depotOutGo.html */
class __TwigTemplate_6db74e11bb52f906b39850aa353a3ac8c871836fdf71a593a3ef721281f0aae2 extends Twig_Template
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
\t\twidth: 84px;
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
\t
\t.info {
\t\tcolor: #f9f9f9 !important;
\t}
\t
\t#templateCon .bootstrap-datetimepicker-widget.dropdown-menu table {
\t\ttable-layout: fixed !important;
\t}
\t
\t#templateBox {
\t\toverflow: visible !important;
\t}
\t
\t#templateCon .connects-content th,
\t#templateCon .connects-content td {
\t\ttext-align: center;
\t\tpadding: 5px;
\t}
\t
\t#templateCon .connects-content input {
\t\ttext-align: center;
\t\twidth: 88px;
\t}
\t#showBox{
\t\twidth: 589px;
\t\theight: 100%;
\t}
</style>
<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<!-- <h3 class=\"header smaller lighter blue\">出库</h3> -->
\t\t<div class=\"actions\" id=\"topTool\" style=\"position:relative;\">
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<input type=\"text\" pts=\"0\" sear=\"ckm_out_warehouse.num\" placeholder=\"出库单号\">
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<input type=\"text\" pts=\"0\" sear=\"khm_customer.name\" placeholder=\"企业名称\">
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<input type=\"text\" pts=\"0\" sear=\"khm_customer.customer_num\" placeholder=\"客户编码\">
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<select style=\"width: 180px\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" pts=3 sear=\"ckm_out_warehouse.jb_id\" aria-hidden=\"true\">
\t\t\t\t\t<option value=\"\"> 经办人 </option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<select style=\"width: 180px\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" pts=3 sear=\"ckm_out_warehouse.create_id\" aria-hidden=\"true\">
\t\t\t\t\t<option value=\"\"> 创建人 </option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<select style=\"width: 180px\" class=\"advandced-search select2-hidden-accessible\" pts=3 sear=\"ckm_out_warehouse.qr_id\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t<option value=\"\"> 审批人 </option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<button id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<button type=\"button\" id=\"heightsearch\" title=\"高级搜索\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
\t                <i class=\"fa fa-filter\"></i>
\t            </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<button id=\"flush\" type=\"button\" title=\"刷新\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
                    <i class=\"fa fa-refresh\"></i>
                </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" contentAuthority=\"151\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<button class=\"add btn btn-info btn-sm\" title=\"添加\" style=\" background-color: #32CD32 !important;\">
\t                <i class=\"fa fa-plus\"></i>
\t            </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" contentAuthority=\"306\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button type=\"button\"  title=\"导出\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"exportfile moveToClue btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t\t<i class=\"fa fa-sign-out\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" contentAuthority=\"152\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<button title=\"批量审批\" class=\"btn btn-info sp  btn-sm plSp\" style=\"background-color: #32CD32 !important; border-color: #32CD32;\">
\t\t\t\t\t<i class=\"fa fa-check-circle-o\"></i>
\t            </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:290px;height: 36px\">
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"background: #E6E6E6;line-height:22px\" data-status=\"a\">全部</a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:22px\" data-status=\"0\">
\t\t\t\t\t\t</i> 待审批</a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:22px\" data-status=\"2\"> 已通过</a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:22px\" data-status=\"1\"> 未通过</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"top:31px;position: absolute; background: #fff;overflow: auto; padding: 10px 0px; display: none;z-index:1042;\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>审批状态</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select style=\"width:180px\" gjs=0 data-type=\"gj\" sear=\"ckm_out_warehouse.status\">
\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t<option value=\"0\">待审批</option>
\t\t\t\t\t\t\t<option value=\"1\">未通过</option>
\t\t\t\t\t\t\t<option value=\"2\">已通过</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<!--<input type=\"text\" gjs=0 sear=\"ckm_out_warehouse.status\" />-->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>出库单号</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"ckm_out_warehouse.num\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>出库类型</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select style=\"width: 180px\" gjs=0 data-type=\"gj\" sear=\"ckm_out_warehouse.type\">
\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t<option value=\"1\">凭证</option>
\t\t\t\t\t\t\t<option value=\"2\">单据</option>
\t\t\t\t\t\t\t<option value=\"3\">证件</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>仓库名称</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"text\" gjs=0 id=\"\" sear=\"ckm_out_warehouse.type\">
\t\t\t\t\t</div> -->
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>企业名称</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"text\" gjs=0 id=\"\" sear=\"khm_customer.name\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>客户编码</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.customer_num\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>仓位</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select gjs=3 sear=\"ckm_position_num.pos_id\" class=\"cw\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>经办人</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" class=\"advandced-search select2-hidden-accessible\" gjs=0 data-type=\"gj\" sear=\"ckm_out_warehouse.jb_id\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>出库日期</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"ckm_out_warehouse.time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t<input class=\"date-timepicker1\" data-type=\"gj\" data-status=\"time\" gjs=0 sear=\"ckm_out_warehouse.month\" class=\"form-control\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;\">
                                <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                            </span>
\t\t\t\t\t\t</div>-->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>备注</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"text\" gjs=0 id=\"\" sear=\"ckm_out_warehouse.remark\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>出库物品</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"ckm_out_warehouse.goods\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>创建人</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" gjs=0 data-type=\"gj\" sear=\"ckm_out_warehouse.create_id\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>创建时间</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"ckm_out_warehouse.create_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>审批人</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" gjs=0 data-type=\"gj\" sear=\"ckm_out_warehouse.qr_id\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>审批时间</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"ckm_out_warehouse.qr_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t<input class=\"date-timepicker1\" data-type=\"gj\" data-status=\"time\" gjs=0 sear=\"ckm_out_warehouse.qr_time\" class=\"form-control\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;\">
                                <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                            </span>
\t\t\t\t\t\t</div>-->
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"text-align:center;clear:both;padding-top:10px; \">
\t\t\t\t\t\t<button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
                            查询
                        </button>
\t\t\t\t\t\t<button type=\"button\" id=\"rest\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t                       重置
\t\t\t\t\t\t\t\t                    </button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"heightsearch1\" style=\"height: 0; overflow: hidden;\">
\t\t<div class=\"row\" style=\"margin-top:0 !important;\">
\t\t\t<div class=\"col-sx-4\" style=\" float: left\">
\t\t\t\t<div class=\"input-group \" style=\" float: left; width: 200px !important; margin-right: 50px;\">
\t\t\t\t\t<span class=\"input-group-addon\">
                            <i class=\"fa fa-calendar bigger-110\"></i>
                        </span>
\t\t\t\t\t<input class=\"\" type=\"text\" name=\"date-range-picker\" id=\"id-date-range-picker-1\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left\">
\t\t\t\t<input type=\"text\" id=\"form-field-1\" placeholder=\"搜索客户名称或编码\" class=\"col-xs-10 col-sm-10\">
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left\">
\t\t\t\t<input type=\"text\" id=\"form-field-1\" placeholder=\"输入仓位\" class=\"col-xs-10 col-sm-10\">
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left\">
\t\t\t\t<input type=\"text\" id=\"form-field-1\" placeholder=\"负责人\" class=\"col-xs-10 col-sm-10\">
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 15px;\">
\t\t\t\t<button type=\"button\" id=\"search1\" class=\"btn btn-info btn-sm\">
                        查询
                    </button>
\t\t\t\t<button type=\"button\" id=\"rest\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t                       重置
\t\t\t\t\t\t\t\t                    </button>
\t\t\t</div>

\t\t</div>
\t</div>
\t<div class=\"custom_table\" style=\"margin-top:10px\">
\t\t<table id=\"dynamic-table\">
\t\t\t<thead>
\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t<th>
\t\t\t\t\t\t<label class=\"pos-rel\">
                            <input type=\"checkbox\" class=\"ace\" onclick=\"cs.checkAll(this.checked)\">
                            <span class=\"lbl\"></span>
                        </label>
\t\t\t\t\t</th>
\t\t\t\t\t<th>操作</th>
\t\t\t\t\t<th data-num=\"1\">审批状态</th>
\t\t\t\t\t<th data-num=\"2\">出库单号</th>
\t\t\t\t\t<th data-num=\"5\">企业名称</th>
\t\t\t\t\t<th data-num=\"6\">客户编码</th>
\t\t\t\t\t<th data-num=\"17\">仓位编码</th>
\t\t\t\t\t<th data-num=\"7\">经办人</th>
\t\t\t\t\t<th data-num=\"8\">出库日期</th>
\t\t\t\t\t<th data-num=\"10\">出库物品</th>
\t\t\t\t\t<th data-num=\"18\">备注</th>
\t\t\t\t\t<th data-num=\"11\">创建人</th>
\t\t\t\t\t<th data-num=\"12\">创建时间</th>
\t\t\t\t\t<th data-num=\"13\">审批人</th>
\t\t\t\t\t<th data-num=\"14\">审批时间</th>
\t\t\t\t\t<th data-num=\"15\">出库月份</th>
\t\t\t\t\t<th data-num=\"16\">审批回复</th>
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
\t\t<div class=\"row\">
\t\t\t<div class=\"form_data\">
\t\t\t\t<label> 企业名称： </label>
\t\t\t\t<select class=\"in_num required name\" company=\"1\" addfield=\"customer_id\" style=\"width:380px;\" msg=\"请选择企业名称\">
\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t</select>

\t\t\t\t<div class=\"outInfo\" style=\"display: none;\">
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label>联系人员： </label>
\t\t\t\t\t\t<select style=\"display: inline-block; width: 174px;\" class=\"people\"></select>
\t\t\t\t\t\t<label> 联系电话： </label>
\t\t\t\t\t\t<span style=\"display: inline-block; width: 174px;\" class=\"tel\"></span>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label> 联系地址： </label>
\t\t\t\t\t\t<select style=\"display: inline-block; width: 174px;\" class=\"addresses\" id=\"address\"> </select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--<div style=\"padding:0 0 15px 0;\">
\t\t\t
\t\t\t</div>-->
\t\t\t<div id=\"get_way\" style=\"margin-bottom: 5px;margin-top:5px;\">
\t\t\t\t<label> 经办人： </label>
\t\t\t\t<select addfield=\"jb_id\" style=\"width:180px\" msg=\"请选择经办人\">
\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t</select>
\t\t\t\t<label>服务方式：</label>
\t\t\t\t<select title=\"getway\">
\t\t\t\t\t<option value=\"1\">外勤上门</option>
\t\t\t\t\t<option value=\"2\">客户上门</option>
\t\t\t\t\t<option value=\"3\">快递物流</option>
\t\t\t\t</select>
\t\t\t</div>

\t\t\t<div id=\"express\" style=\"display:none;\">
\t\t\t\t<div style=\"margin-bottom: 5px\">
\t\t\t\t\t<label style=\" margin-bottom: 5px;\">快递公司：</label>
\t\t\t\t\t<input title=\"express\" />
\t\t\t\t\t<label>快递单号：</label>
\t\t\t\t\t<input title=\"expressnum\" />
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<label>快递费用：</label>
\t\t\t\t\t<input title=\"cost\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"\" style=\"padding: 2px;padding-left:25px;\">
\t\t\t\t\t<div id=\"fileBox\">

\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"uploadBox\">
\t\t\t\t\t\t<button type=\"button\" id=\"upload1\" style=\"outline: none;background-color: #009688 !important; margin-top: 20px;\" class=\"btn btn-info btn-sm position-relative\">
\t\t\t                        上传文件
\t\t\t        \t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- layui面板模块 -->
\t\t\t<div class=\"layui-collapse\" style=\"margin-top: 10px\">

\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t<h2 class=\"layui-colla-title\">发票单据</h2>
\t\t\t\t\t<div class=\"layui-colla-content connects-content\">
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<table class=\"bill\" style=\"display:;\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th style=\"font-weight: 500;\">操作</th>
\t\t\t\t\t\t\t\t\t\t<th style=\"font-weight: 500;\">票据类别</th>
\t\t\t\t\t\t\t\t\t\t<th style=\"font-weight: 500;\">库存数量</th>
\t\t\t\t\t\t\t\t\t\t<th style=\"font-weight: 500;\">数量(张)</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"ticketBody\">

\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t<h2 class=\"layui-colla-title\">证件资料</h2>
\t\t\t\t\t<div class=\"layui-colla-content connects-content\">
\t\t\t\t\t\t<div style=\"margin-top: 10px;\" class=\"\">
\t\t\t\t\t\t\t<table class=\"certificate\" style=\"display:;\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th style=\"font-weight: 500;\">操作</th>
\t\t\t\t\t\t\t\t\t\t<th style=\"font-weight: 500;\">证件名称</th>
\t\t\t\t\t\t\t\t\t\t<th style=\"font-weight: 500;\">库存数量</th>
\t\t\t\t\t\t\t\t\t\t<th style=\"font-weight: 500;\">数量(个)</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"cardBody\">

\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t<h2 class=\"layui-colla-title\">记账凭证</h2>
\t\t\t\t\t<div class=\"layui-colla-content \">
\t\t\t\t\t\t<div class=\"voucher\">
\t\t\t\t\t\t\t<!--<div class=\"page-header\" style=\"background: #ccecff; padding-left: 6px; height: 35px;\">
\t\t\t\t\t\t\t\t\t<h5 style=\"margin-top: 3px;\">
\t\t\t\t\t\t\t\t\t\t\t凭证交接
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t\t<!--<label style=\"float: left;margin-right: 5px;width:25px;\"></label>-->
\t\t\t\t\t\t\t<select multiple=\"\" id=\"pzList1\" name=\"state\" addfield=\"sd\" class=\"pzList state select2 select2-hidden-accessible\" data-placeholder=\"选择凭证名称\" style=\"width: 200px;\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<!--<div style=\"display: none;width:472px;\" class=\"voucher_div\">
\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"layui-colla-item\" >
\t\t\t\t\t<h2 class=\"layui-colla-title\">送单月份</h2>
\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t<div class=\"service_month\" style=\"    margin-bottom：-30px;\">
\t\t\t\t\t\t\t<!--<div class=\"page-header\" style=\"background: #ccecff; padding-left: 6px; height: 35px;\">
                                <h5 style=\"margin-top: 3px;\">
                                        月份
                                    </h5>
                            </div>-->
\t\t\t\t\t\t\t<select multiple=\"\" id=\"pzListsd\" name=\"state\" addfield=\"sd\" class=\"pzList state select2 select2-hidden-accessible\" data-placeholder=\"选择月份\" style=\"width: 200px;\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div style=\"display: inline-block;width:472px;\" class=\"voucher_div\">
\t\t\t\t\t\t\t\t<!-- <label class=\"voucher_label\">
                                    <input type=\"checkbox\" data-time=\"201711\">
                                    <span class=\"voucher_month\">201711</span>
                                </label>
                                <label class=\"voucher_label\">
                                    <input type=\"checkbox\" data-time=\"201712\">
                                    <span class=\"voucher_month\">201712</span>
                                </label>
                                <label class=\"voucher_label\">
                                    <input type=\"checkbox\" data-time=\"201801\">
                                    <span class=\"voucher_month\">201801</span>
                                </label>
                                <label class=\"voucher_label\">
                                    <input type=\"checkbox\" data-time=\"201802\">
                                    <span class=\"voucher_month\">201802</span>
                                </label> -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- <table>
                                <thead>
                                    <tr>
                                        <th>凭证月份</th>
                                        <th>凭证名称</th>
                                        <th>数量(本)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id=\"month\">
                                        </td>
                                        <td>
                                            <select>

                                            </select>
                                        </td>
                                        <td>
                                            <input type=\"number\"/>
                                        </td>
                                    </tr>
                                </tbody>
                            </table> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"form_data edit_info\" style=\"margin-top:15px;display:none;\">
\t\t\t\t<label> 出库类型： </label>
\t\t\t\t<select class=\"type required\" coldata=\"type\" style=\"width:180px;\" id=\"select\" msg=\"请选择出库类型\">
\t\t\t\t\t<option value=\"\">请选择 </option>
\t\t\t\t\t<option value=\"1\"> 凭证出库 </option>
\t\t\t\t\t<option value=\"2\"> 单据出库 </option>
\t\t\t\t\t<option value=\"3\"> 证件出库 </option>
\t\t\t\t</select>
\t\t\t\t<label> 仓库名称： </label>
\t\t\t\t<input type=\"text\" coldata=\"ck_name\" disabled class=\"in_num required\" msg=\"仓库名称不能为空\" />
\t\t\t</div>
\t\t\t<div class=\"form_data edit_info\" style=\"margin-top:15px;display:none;\">
\t\t\t\t<label> 出库物品： </label>
\t\t\t\t<select class=\"goods required\" coldata=\"goods\" style=\"width:180px;\" msg=\"请选择出库物品\">
\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t</select>
\t\t\t\t<label> 出库数量： </label>
\t\t\t\t<input type=\"number\" class=\"in_num required\" coldata=\"number\" msg=\"出库数量必须大于零\" validate=\"int\" />
\t\t\t</div>

\t\t\t<!--<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t\t<label> 出库月份： </label>
\t\t\t\t\t<select class=\"in_num required\" addfield=\"month\" style=\"width:180px;\" msg=\"请选择出库月份\">
\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t</select>
\t\t\t\t\t<label> 出库日期： </label>
\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<input class=\"date-timepicker1 required\" addfield=\"time\" msg=\"出库日期不能为空\" class=\"form-control\" style=\"padding:5px;height: 30px; width: 150px;\">
\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                        </span>
\t\t\t\t\t</div>

\t\t\t\t\t<label> 出库类型： </label>
\t\t\t\t\t<select class=\"type required\" addfield=\"type\"  style=\"width:180px;\" id=\"select\" msg=\"请选择出库类型\">
\t\t\t\t\t\t<option value=\"\"> - - - 请选择 - - - </option>
\t\t\t\t\t\t<option value=\"1\"> 凭证出库 </option>
\t\t\t\t\t\t<option value=\"2\"> 单据出库 </option>
\t\t\t\t\t\t<option value=\"3\"> 证件出库 </option>
\t\t\t\t\t</select>
\t\t\t\t\t<label> 仓库名称： </label>
\t\t\t\t\t<input type=\"text\" addfield=\"ck_name\" disabled class=\"in_num required\" msg=\"仓库名称不能为空\" /> 
\t\t\t\t</div>-->
\t\t\t<!--<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t\t<label style=\"float:left;\"> 出库备注： </label>
\t\t\t\t\t<textarea style=\"width:calc(100% - 89px);margin-left:5px;padding:5px;\" addfield=\"remark\" class=\"in_remark\"></textarea>
\t\t\t\t</div>-->

\t\t\t<!-- <div class=\"connects-content\" style=\"margin-top: 10px;\">
\t\t\t\t
\t\t\t
\t\t\t\t
\t\t\t</div> -->
\t\t</div>
\t\t<div style=\"margin-top:15px; \">
\t\t\t<label style=\"float:left;width:36px;\">备注：</label>
\t\t\t<textarea style=\"margin-left:5px;width:500px;resize:none;padding:5px;\" class=\"rmark\"></textarea>
\t\t</div>
\t\t<!-- <div class=\"service_month\" style=\"padding:0px 0;\">
\t\t\t\t<div class=\"page-header\" style=\"background: #ccecff; padding-left: 6px; 
\t\t\t\theight: 35px;\">
\t\t\t\t\t<h5 style=\"margin-top: 3px;\">
\t\t\t\t\t\t月份
\t\t\t\t\t</h5>
\t\t\t\t</div>
\t\t\t<select multiple=\"\" id=\"pzList\" name=\"state\" addfield=\"sd\" class=\"pzList state select2 select2-hidden-accessible\" data-placeholder=\"选择收单负责人\" style=\"width: 200px;\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t</select>
\t\t\t<div style=\"display: none;width:472px;\" class=\"voucher_div\">
\t\t\t</div>
\t\t\t\t\t</div> -->

\t\t<div class=\"popup_button\">
\t\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>

\t\t\t<button class=\"sure_button\">
                    <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                    保存
                </button>
\t\t</div>
\t</div>
</div>

<div class=\"row\" id=\"template\" style=\"display:none;width:678px;\">
\t<div class=\"col-sm-12\" id=\"editBox\">
\t\t<table width=\"100%\" style=\"border:1px solid #ddd;border-collapse:collapse;margin-bottom:15px;\">
\t\t\t<tr style=\"\">
\t\t\t\t<td style=\"text-align: right !important\">出库类型：</td>
\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t<span class=\"disData0\"></span>
\t\t\t\t</td>
\t\t\t\t<td style=\"text-align: right !important\">仓库：</td>
\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t<span class=\"disData1\"></span>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr style=\"\">
\t\t\t\t<td style=\"text-align: right !important\">出库物品：</td>
\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t<span class=\"disData2\"></span>
\t\t\t\t</td>
\t\t\t\t<td style=\"text-align: right !important\">出库数量：</td>
\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t<span class=\"disData3\"></span>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr style=\"\">
\t\t\t\t<td style=\"text-align: right !important\">出库日期：</td>
\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t<span class=\"disData4\"></span>
\t\t\t\t</td>
\t\t\t\t<td style=\"text-align: right !important\">出库月份：</td>
\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t<span class=\"disData5\"></span>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr style=\"\">
\t\t\t\t<td style=\"text-align: right !important\">出库备注：</td>
\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t<span class=\"disData9\"></span>
\t\t\t\t</td>
\t\t\t\t<td style=\"text-align: right !important\">经办人：</td>
\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t<span class=\"disData8\"></span>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>

\t<div class=\"row\" id=\"template1\" style=\"display:none;width:678px;\">
\t\t<div class=\"storage\">
\t\t\t<table class=\"company\" style=\"margin-top: 15px;\">
\t\t\t\t<tr>
\t\t\t\t\t<td in_title>企业名称：</td>
\t\t\t\t\t<td in_content>
\t\t\t\t\t\t<span field=\"customer_id\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<!--<td in_title>订单号：</td>
\t\t\t\t\t<td in_content>
\t\t\t\t\t\t<span field=\"contract_code\"></span>
\t\t\t\t\t</td>-->
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td in_title>经办人：</td>
\t\t\t\t\t<td in_content>
\t\t\t\t\t\t<span field=\"jb_id\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td in_title>出库月份：</td>
\t\t\t\t\t<td in_content>
\t\t\t\t\t\t<span field=\"month\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td in_title>出库状态：</td>
\t\t\t\t\t<td in_content>
\t\t\t\t\t\t<span field=\"status\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td in_title>出库单号：</td>
\t\t\t\t\t<td in_content>
\t\t\t\t\t\t<span field=\"num\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td in_title>出库日期：</td>
\t\t\t\t\t<td in_content>
\t\t\t\t\t\t<span field=\"time\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td in_title>审批回复：</td>
\t\t\t\t\t<td in_content>
\t\t\t\t\t\t<span field=\"qr_remark\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td in_title>创建人：</td>
\t\t\t\t\t<td in_content>
\t\t\t\t\t\t<span field=\"create_id\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td in_title>创建时间：</td>
\t\t\t\t\t<td in_content>
\t\t\t\t\t\t<span field=\"create_time\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td in_title>审批人：</td>
\t\t\t\t\t<td in_content>
\t\t\t\t\t\t<span field=\"qr_id\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td in_title>审批时间：</td>
\t\t\t\t\t<td in_content>
\t\t\t\t\t\t<span field=\"qr_time\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td in_title>备注：</td>
\t\t\t\t\t<td in_content colspan=\"20\" style=\"width: 200px;\">
\t\t\t\t\t\t<span field=\"remark\" style=\"text-align: center;word-break: break-word;height: 30px;white-space: normal;margin: 6px 0 4px;font-size: 12px;color: #333;\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<div style=\"padding:0 15px\">
\t\t\t\t<p style=\"border-bottom:1px solid #ddd;padding:10px 0;\">
\t\t\t\t\t凭证仓
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<table class=\"pz\">
\t\t\t\t<tbody></tbody>
\t\t\t\t<!-- <tr style=\"border-bottom: 1px solid #ddd\">
\t\t\t\t\t<td in_title>凭证仓：</td>
\t\t\t\t\t<td colspan=\"3\"></td>
\t\t\t\t</tr> -->
\t\t\t</table>
\t\t\t<div style=\"padding:0 15px\">
\t\t\t\t<p style=\"border-bottom:1px solid #ddd;padding:10px 0;\">
\t\t\t\t\t票据仓
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<table class=\"pj\">
\t\t\t\t<tbody></tbody>
\t\t\t\t<!-- <tr style=\"border-bottom: 1px solid #ddd\">
\t\t\t\t\t<td in_title>票据仓：</td>
\t\t\t\t\t<td colspan=\"3\"></td>
\t\t\t\t</tr> -->
\t\t\t</table>
\t\t\t<div style=\"padding:0 15px\">
\t\t\t\t<p style=\"border-bottom:1px solid #ddd;padding:10px 0;\">
\t\t\t\t\t证件仓
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<table class=\"zj\">
\t\t\t\t<tbody></tbody>
\t\t\t\t<!-- <tr style=\"border-bottom: 1px solid #ddd\">
\t\t\t\t\t<td in_title>证件仓：</td>
\t\t\t\t\t<td colspan=\"3\"></td>
\t\t\t\t</tr> -->
\t\t\t</table>
\t\t</div>
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
        // line 795
        $this->loadTemplate("admin/mark.html", "admin/depotManagement/depotOutGo.html", 795)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/depotManagement/depotOutGo.html", 795)->display($context);
        // line 796
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script type=\"text/javascript\">
\t\$(function() {
\t\tcs.getNodes([151]);
\t\tcs.dataRang();
\t\tif(cs.approve_authority({
\t\t\t\tname: '出库',
\t\t\t\tnodes: [152]
\t\t\t})) {
\t\t\t\$('[contentAuthority=\"152\"]').show();
\t\t}

\t\tvar order = 'ckm_out_warehouse.id desc';
\t\tvar pagesize = 10;
\t\tvar filter = '';
\t\tvar customers = [];
\t\tvar employees = [];

\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_accountancies/index_new',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: filter,
\t\t\t\tlimit: pagesize,
\t\t\t\ttype: 2
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '.pageBar'
\t\t\t},
\t\t\tcontentId: \"#datalist\", //默认排序
\t\t\tinitOrder: \"\", //初始化sort
\t\t\tdefaultOrder: order,
\t\t\tparams: [{
\t\t\t\tid: \"#dynamic-table\",
\t\t\t\tfield: [\"\", \"\", \"ckm_out_warehouse.status\", \"ckm_out_warehouse.num\", \"khm_customer.name\", \"khm_customer.customer_num\", \"\", \"\", \"ckm_out_warehouse.time\",
\t\t\t\t\t\"\", \"ckm_out_warehouse.remark\", \"ckm_out_warehouse.create_time\", \"\", \"ckm_out_warehouse.qr_time\", \"ckm_out_warehouse.month\", \"ckm_out_warehouse.qr_remark\"
\t\t\t\t]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\thandleData(res);
\t\t});

\t\ttspage();

\t\tfunction tspage() {
\t\t\tif(ykp.getCookie('detailsId') && ykp.getCookie('detailsId') != '') {

\t\t\t\tvar id = ykp.getCookie('detailsId');
\t\t\t\tvar data = {
\t\t\t\t\ttype: 2,
\t\t\t\t\tlimit: pagesize,
\t\t\t\t\tfilter: `ckm_out_warehouse.id = \${id}`
\t\t\t\t}
\t\t\t\tgetList_2(data);
\t\t\t\tykp.setCookie('detailsId', '', 1 / 24);
\t\t\t} else {
\t\t\t\t//常规刷新
\t\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\t\tykp.setCookie(\"where\", \"\");
\t\t\t\tgetList();
\t\t\t}
\t\t}

        //导出功能
        cs.exportFile({
            url:\"/api/api_accountancies/export\",
            type:2,
            title:\"出库记录\"

        });

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
\t\t\$('.myFilter').click(function() {
\t\t\tif(!\$(this).hasClass('clc')) {
\t\t\t\t\$(this).addClass('clc').siblings().removeClass('clc');
\t\t\t}
\t\t\tvar data = {
\t\t\t\t'type': 2,
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
\t\t\tfilter = 'ckm_out_warehouse.status = ' + filter_;
\t\t\tdata['filter'] = 'ckm_out_warehouse.status = ' + filter_;
\t\t\tgetList_2(data);

\t\t})

\t\tcs.getAllCw(function(option) {
\t\t\t\$('#heightsearch1 .cw').html(option);
\t\t\t\$('#heightsearch1 .cw').select2({
\t\t\t\tallowClear: true
\t\t\t})
\t\t})
\t\t\$('#filterBtns a').mouseover(function() {
\t\t\t\$(this).addClass('over');
\t\t})
\t\t\$('#filterBtns a').mouseout(function() {
\t\t\t\$(this).removeClass('over');
\t\t})

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

\t\t//切换每页显示的条目数
\t\t\$('#changePageNum').change(function() {
\t\t\tpagesize = \$(this).val();
\t\t\tykp.setCookie('page_size',pagesize);
\t\t\tgetList();
\t\t})

\t\t//时间插件
\t\tif(!ace.vars['old_ie']) {
\t\t\t\$('.date-timepicker1').datetimepicker({
\t\t\t\t// format: 'YYYY-MM-DD', //use this option to display seconds
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

\t\tcs.showHeightSearch('#heightsearch', '#heightsearch1')

\t\t//高级搜索显示 &  隐藏
\t\t/*\$('.in').click(function() {
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
\t\t\t\tcs.rest(false,'#heightsearch1');
\t\t\t}
\t\t})*/

\t\t//高级搜索
\t\tfunction advancedSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_accountancies/index_new',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\ttype: 2,
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

\t\tgetCusAndEmps();

\t\tfunction getCusAndEmps() {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_customer/f7',
\t\t\t\tmethod: 'post',
\t\t\t\tasync: false,
\t\t\t\tdata: {
\t\t\t\t\tselect: 'khm_customer.id,khm_customer.name'
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tcustomers[data[i]['id']] = data[i]['name'];
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
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\temployees[data[i]['id']] = data[i]['name'];
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//获取出库列表
\t\t//getList();
\t\tfunction getList() {
\t\t\tgeneralSearch();
\t\t\tadvancedSearch();
\t\t\tykp.list({
\t\t\t\turl: '/api/api_accountancies/index_new',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\ttype: 2,
\t\t\t\t\tfilter: filter,
\t\t\t\t\tlimit: pagesize,
\t\t\t\t\torder: order
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tconsole.log(res.data.items)
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

\t\t//数据处理
\t\tfunction handleData(res) {
\t\t\tvar data = res.data.items;
\t\t\tvar html = [];
\t\t\tvar status = []; //该数组存放th display属性值
\t\t\tvar states = ['待审批', '未通过', '已通过']; //该数组存放状态
\t\t\tvar types = ['凭证', '单据', '证件']; //该数组存放出库类型
\t\t\tvar warehouses = ['凭证仓', '单据仓', '证件仓']; //该数组存放仓库
\t\t\tvar ths = \$('.thColor th'); //获取所有的th
\t\t\tvar times = {}; //存放服务器返回的转换后的时间
\t\t\tfor(var i = 0; i < ths.length; i++) {
\t\t\t\tif(i > 1) {
\t\t\t\t\tstatus.push(ths.eq(i).css('display'));
\t\t\t\t}
\t\t\t}

\t\t\t//审批权限为true可以审批,为false不可审批
\t\t\tvar spApp = cs.approve_authority({
\t\t\t\tname: '出库',
\t\t\t\tnodes: [154]
\t\t\t});
\t\t\tvar cxApp = cs.approve_authority({
\t\t\t\tname: '出库',
\t\t\t\tnodes: [267]
\t\t\t});
\t\t\tvar edit_statu = cs.getNodes([153], true);

\t\t\t//物品数据
\t\t\tvar goodsData = [];
\t\t\t//物品数据html
\t\t\tvar goodsData_html = [];

\t\t\tfor(var i in data) {

\t\t\t\tgoodsData = data[i]['goodsList'];
\t\t\t\tgoodsData_html = [];
\t\t\t\tfor(var k in goodsData) {
\t\t\t\t\tgoodsData_html.push(goodsData[k]['ckm_out_warehouse.goods'] + ':' + goodsData[k]['ckm_out_warehouse.number']);
\t\t\t\t}
\t\t\t\tgoodsData_html.sort();

\t\t\t\thtml.push(`<tr data-id=\"\${data[i]['ckm_out_warehouse.id']}\" data-num =\"\${data[i]['ckm_out_warehouse.num']}\"  data-status=\"\${data[i]['ckm_out_warehouse.status']}\">
\t\t\t\t\t\t\t<td class=\"center\">
                                <label class=\"pos-rel\">
                                    <input type=\"checkbox\" name=\"check\" class=\"ace\"/>
                                    <span class=\"lbl\"></span>
                                </label>
                            </td>

                            <td>
                             <label class=\"pos-rel\">
                             \t
                             \t<a href=\"#\" class=\"info btOrange\" style=\"color:#fff !important\" title=\"详情\"><i class=\"fa fa-info \"></i></a>

                                <a href=\"#\" class=\"sp btOrange\" contentAuthority=\"267\" data-status = \"0\" style=\"display: \${cxApp ? (data[i]['ckm_out_warehouse.status'] == 2 ? 'inline-block' : 'none') : 'none'}; color:#fff !important\" title=\"撤销\"><i class=\"fa fa-rotate-left\"></i></a>

                        \t\t<a href=\"#\" class=\"sp btGreen\" contentAuthority=\"154\" data-status = \"2\" style=\"display: \${spApp ? (data[i]['ckm_out_warehouse.status'] == 0 ?'inline-block' : 'none') : 'none'}; color:#fff !important\" title=\"通过\"><i class=\"fa fa-check-circle-o\"></i></a>

                        \t\t<a href=\"#\" class=\"sp btRed\" contentAuthority=\"154\" data-status = \"1\" style=\"display: \${spApp ? (data[i]['ckm_out_warehouse.status'] == 0 ?'inline-block' : 'none') : 'none'}; color:#fff !important\" title=\"驳回\"><i class=\"fa fa-times-circle\"></i></a>
                             </label>
                            </td>
\t\t\t\t\t\t\t
                            <td data-num=\"1\" style=\"display:\${status[0]};\" class=\"center\">
                                \${states[data[i]['ckm_out_warehouse.status']]}
                            </td>
                            <td data-num=\"2\" style=\"display:\${status[1]};\" class=\"center\">
                                \${data[i]['ckm_out_warehouse.num']}
                            </td>
                            <td class=\"center\" style=\"display:\${status[4]};\" data-num=\"5\" data-cid=\"\${data[i]['khm_customer.id']}\">
                                <a href=\"#\" class=\"customerDetail pos-rel\">\${data[i]['khm_customer.name']}</a>
                                <label class=\"pos-rel\">
\t\t\t\t \t\t\t\t<i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data[i]['Remark'].length > 0 ? 'red' : ''}\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i>
\t\t\t \t\t\t\t </label>
                            </td>
                            <td class=\"center\" style=\"display:\${status[5]};\" data-num=\"6\">
                                \${data[i]['khm_customer.customer_num']}
                            </td>
                             <td class=\"center\" style=\"display:\${status[16]};\" data-num=\"17\">
                                \${data[i]['position']['pos_name']+data[i]['position']['pos_num']}
                            </td>
                            <td class=\"center\" style=\"display:\${status[6]};\" data-num=\"7\">
                                \${data[i]['jb_info']['name'] || \"\"}
                            </td>
                            
                            <td class=\"center\" style=\"display:\${status[7]};\" data-num=\"8\">
                                \${cs.getNowTime(data[i]['ckm_out_warehouse.time'])}
                            </td>
                            <td class=\"center\" style=\"display:\${status[9]};\" data-num=\"10\"  title=\"\${goodsData_html.join('&#13;')}\">
                               <label style=\"font-weight:normal;\" >\${goodsData_html.join('；')}</label>
                            </td>
                            <td class=\"center\" style=\"display:\${status[10]};\" data-num=\"17\">
                                \${data[i]['ckm_out_warehouse.remark']}
                            </td>
                            <td class=\"center\" style=\"display:\${status[10]};\" data-num=\"11\">
                                \${data[i]['create_info'] ? data[i]['create_info']['name'] : ''}
                            </td>
                            <td class=\"center\" style=\"display:\${status[11]};\" data-num=\"12\">
                                \${data[i]['ckm_out_warehouse.create_time'] != '0' ? cs.getNowTime(data[i]['ckm_out_warehouse.create_time'],true) : ''}
                            </td>
                            <td class=\"center\" style=\"display:\${status[12]};\" data-num=\"13\">
                               \${data[i]['qr_info'] ? data[i]['qr_info']['name'] : ''}
                            </td>
                            <td class=\"center\" style=\"display:\${status[13]};\" data-num=\"14\">
                             \${data[i]['ckm_out_warehouse.qr_time'] != '0' ?cs.getNowTime(data[i]['ckm_out_warehouse.qr_time'],true) : ''}
                            </td>
                            <td class=\"center\" style=\"display:\${status[14]};\" data-num=\"15\" title=\"\${data[i]['ckm_out_warehouse.month']}\">
                           
                              <label style=\"width:100px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;\" >  \${data[i]['ckm_out_warehouse.month']}</label>
                            </td>
                            <td class=\"center\" style=\"display:\${status[15]};\" data-num=\"16\">
                                 \${data[i]['ckm_out_warehouse.qr_remark']}
                            </td>
                        </tr>`);

\t\t\t\ttimes = {};
\t\t\t};
\t\t\t\$('#datalist').html(html.join(''));
\t\t\tcustom.showReamrk();
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\tcustom.get_custom_info();

\t\t\t//\t\t\tedit_in(); //编辑
\t\t\t\$(\"#datalist tr\").find('a').click(function() {
\t\t\t\tif(\$(this).index() > 0) {
\t\t\t\t\tvar status = \$(this).attr('data-status');
\t\t\t\t\tvar id = \$(this).parents('tr').attr('data-num');
\t\t\t\t\tchangeStatus(status, id);
\t\t\t\t}
\t\t\t});
\t\t\tplsp(); //批量审批
\t\t\tseeDetails(data);
\t\t\t//详情
\t\t\t//\t\t\t\$('.info').click(function() {
\t\t\t//\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t//\t\t\t\tvar jb_id = \$(this).parents('tr').find('td').eq(8).text(); //经办人
\t\t\t//\t\t\t\t//          \tshowMark('.popup_new');
\t\t\t//\t\t\t\tykp.doAjax({
\t\t\t//\t\t\t\t\turl: '/api/api_accountancies/info_io',
\t\t\t//\t\t\t\t\tmethod: 'post',
\t\t\t//\t\t\t\t\tdata: {
\t\t\t//\t\t\t\t\t\ttype: 2,
\t\t\t//\t\t\t\t\t\tid: id
\t\t\t//\t\t\t\t\t},
\t\t\t//\t\t\t\t\tsuccess: function(res) {
\t\t\t//\t\t\t\t\t\t//                      disData11
\t\t\t//\t\t\t\t\t\tvar data = res.data;
\t\t\t//\t\t\t\t\t\tvar type = ['凭证', '单据', '证件'];
\t\t\t//\t\t\t\t\t\tshowMark('#template');
\t\t\t//\t\t\t\t\t\t\$('#showBox .title').text('出库详情');
\t\t\t//\t\t\t\t\t\t//console.log()
\t\t\t//\t\t\t\t\t\t\$(\"#templateBox .disData0\").html(type[parseInt(data['type']) - 1]);
\t\t\t//\t\t\t\t\t\t\$(\"#templateBox .disData1\").html(type[parseInt(data['type']) - 1] + \"仓\");
\t\t\t//\t\t\t\t\t\t\$(\"#templateBox .disData2\").html(data['goods']);
\t\t\t//\t\t\t\t\t\t\$(\"#templateBox .disData3\").html(data['number']);
\t\t\t//\t\t\t\t\t\t\$(\"#templateBox .disData4\").html(data['time']);
\t\t\t//\t\t\t\t\t\t\$(\"#templateBox .disData5\").html(data['month']);
\t\t\t//\t\t\t\t\t\t\$(\"#templateBox .disData8\").html(jb_id);
\t\t\t//\t\t\t\t\t\t\$(\"#templateBox .disData9\").html(data['remark'] ? data['remark'] : '空');
\t\t\t//\t\t\t\t\t}
\t\t\t//\t\t\t\t});
\t\t\t//\t\t\t})

\t\t\tfunction seeDetails(data) {
\t\t\t\t\$('.info').unbind('click').click(function() {
\t\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\t\tvar _data = data[index];

\t\t\t\t\tshowMark('#template1');
\t\t\t\t\t\$('#showBox .title').text('出库详情');

\t\t\t\t\t//入库基本信息
\t\t\t\t\tvar field;
\t\t\t\t\t\$('#templateCon [field]').each(function(i, e) {
\t\t\t\t\t\tfield = 'ckm_out_warehouse.' + \$(this).attr('field');
\t\t\t\t\t\tif(\$(this).attr('field') == 'jb_id' || \$(this).attr('field') == 'create_id' || \$(this).attr('field') == 'qr_id') {
\t\t\t\t\t\t\t\$(this).text(_data[field] != '0' ? employees[_data[field]] : '');
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('field') == 'time' || \$(this).attr('field') == 'create_time' || \$(this).attr('field') == 'qr_time') {
\t\t\t\t\t\t\tconsole.log(_data[field])
\t\t\t\t\t\t\t\$(this).text(_data[field] ? cs.getNowTime(_data[field],true) : '');
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('field') == 'status') {
\t\t\t\t\t\t\t\$(this).text(_data[field] == '1' ? '未通过' : (_data[field] == '2' ? '已通过' : '待审批\t'));
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('field') == 'customer_id') {
\t\t\t\t\t\t\t\$(this).text(customers[_data[field]]);
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}

\t\t\t\t\t\t\$(this).text(_data[field]);
\t\t\t\t\t});

\t\t\t\t\t//物品数据
\t\t\t\t\tvar goodsData = _data['goodsList'];
\t\t\t\t\tvar pz_html = []; //凭证html
\t\t\t\t\tvar pj_html = []; //票据html
\t\t\t\t\tvar zj_html = []; //证件html

\t\t\t\t\tfor(var i in goodsData) {
\t\t\t\t\t\t//凭证
\t\t\t\t\t\tif(goodsData[i]['ckm_out_warehouse.type'] == '1') {
\t\t\t\t\t\t\tpz_html.push(
\t\t\t\t\t\t\t\t`<tr>
\t\t\t\t\t\t\t\t<td in_title>物品名称：</td>
\t\t\t\t\t\t\t\t<td in_content>
\t\t\t\t\t\t\t\t\t<span>\${goodsData[i]['ckm_out_warehouse.goods']}</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td in_title=\"\">数量</td>
\t\t\t\t\t\t\t\t<td in_content>
\t\t\t\t\t\t\t\t\t<span>\${goodsData[i]['ckm_out_warehouse.number']}</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>`
\t\t\t\t\t\t\t);
\t\t\t\t\t\t}
\t\t\t\t\t\t//票据
\t\t\t\t\t\tif(goodsData[i]['ckm_out_warehouse.type'] == '2') {
\t\t\t\t\t\t\tpj_html.push(
\t\t\t\t\t\t\t\t`<tr>
\t\t\t\t\t\t\t\t<td in_title>物品名称：</td>
\t\t\t\t\t\t\t\t<td in_content>
\t\t\t\t\t\t\t\t\t<span>\${goodsData[i]['ckm_out_warehouse.goods']}</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td in_title=\"\">数量</td>
\t\t\t\t\t\t\t\t<td in_content>
\t\t\t\t\t\t\t\t\t<span>\${goodsData[i]['ckm_out_warehouse.number']}</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>`
\t\t\t\t\t\t\t);
\t\t\t\t\t\t}
\t\t\t\t\t\t//证件
\t\t\t\t\t\tif(goodsData[i]['ckm_out_warehouse.type'] == '3') {
\t\t\t\t\t\t\tzj_html.push(
\t\t\t\t\t\t\t\t`<tr>
\t\t\t\t\t\t\t\t<td in_title>物品名称：</td>
\t\t\t\t\t\t\t\t<td in_content>
\t\t\t\t\t\t\t\t\t<span>\${goodsData[i]['ckm_out_warehouse.goods']}</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td in_title=\"\">数量</td>
\t\t\t\t\t\t\t\t<td in_content>
\t\t\t\t\t\t\t\t\t<span>\${goodsData[i]['ckm_out_warehouse.number']}</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>`
\t\t\t\t\t\t\t);
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t\$('#templateCon .pz tbody').append(pz_html.length > 0 ? pz_html.join('') : '<tr><td colspan=\"30\" style=\"text-align:center !important;\">暂无数据</td></tr>');
\t\t\t\t\t\$('#templateCon .pj tbody').append(pj_html.length > 0 ? pj_html.join('') : '<tr><td colspan=\"30\" style=\"text-align:center !important;\">暂无数据</td></tr>');
\t\t\t\t\t\$('#templateCon .zj tbody').append(zj_html.length > 0 ? zj_html.join('') : '<tr><td colspan=\"30\" style=\"text-align:center !important;\">暂无数据</td></tr>');
\t\t\t\t});
\t\t\t}
\t\t}

\t\tfunction plsp() {
\t\t\t\$('.plSp').click(function() {
\t\t\t\tvar num = 0;
\t\t\t\tvar status = '';
\t\t\t\tvar coldata = [];
\t\t\t\tvar Statu = false;
\t\t\t\t\$('#datalist').find('input[type=checkbox]').each(function(i) {
\t\t\t\t\tif(\$(this).is(':checked')) {
\t\t\t\t\t\tnum++;
\t\t\t\t\t\tstatus = \$(this).parents('tr').attr('data-status') == '0' ? 2 : 0;
\t\t\t\t\t\tif(\$(this).parents('tr').attr('data-status') == 1) {
\t\t\t\t\t\t\tykp.prompt('审批失败状态不能批量审批!');
\t\t\t\t\t\t\tStatu = false;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tcoldata.push({
\t\t\t\t\t\t\t\tnum: \$(this).parents('tr').attr('data-num'),
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
\t\t\t\t\t\t\turl: \"/api/api_accountancies/batch_sh_out_new\",
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tdata: JSON.stringify(coldata),
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

\t\t//编辑出库
\t\tfunction edit_in() {
\t\t\t\$('._edit').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tshowMark('.popup_new');
\t\t\t\t\$('#showBox .title').html('编辑出库');
\t\t\t\t\$('#templateCon .add_info').hide();
\t\t\t\t\$('#templateCon .edit_info').show();
\t\t\t\t\$('#templateCon [company=\"2\"]').show();
\t\t\t\t\$('#templateCon [company=\"1\"]').hide();

\t\t\t\ttimeplug();
\t\t\t\tgetInfo(true);

\t\t\t\t//校验数据
\t\t\t\tvalidateData(true);

\t\t\t\tfor(var i in employees) {
\t\t\t\t\tif(employees[i]) {
\t\t\t\t\t\t\$('#templateCon select[addfield=\"jb_id\"]').append(new Option(employees[i], i));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_accountancies/info_io',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\ttype: 2,
\t\t\t\t\t\tid: id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t//console.log(res.data);
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\tgetGoods(data['customer_id'], data['type'], false, data['goods']);
\t\t\t\t\t\t//添加默认数据
\t\t\t\t\t\t\$('#templateCon').find('[addfield]').each(function(i) {
\t\t\t\t\t\t\tif(\$(this).attr('addfield') == 'customer_id') {
\t\t\t\t\t\t\t\t\$(this).attr('customer_id', data['customer_id']).val(data['customer_name']);
\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\$(this).attr('addfield') == 'time' ? \$(this).val(cs.getNowTime(data[\$(this).attr('addfield')])) : \$(this).val(data[\$(this).attr('addfield')]);
\t\t\t\t\t\t})
\t\t\t\t\t\t\$('#templateCon').find('[coldata]').each(function(i, e) {
\t\t\t\t\t\t\t\$(this).val(data[\$(this).attr('coldata')]);
\t\t\t\t\t\t})
\t\t\t\t\t\t//添加默认物品
\t\t\t\t\t\t\$('#templateCon input[coldata=\"ck_name\"]').val(\$('#templateCon select[coldata=\"type\"]').find('option:selected').text().trim().replace(/出库/, '仓'));

\t\t\t\t\t\tchangeName(true);
\t\t\t\t\t\tsubmit(id);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t}

\t\t//获取相对应的出库物品
\t\tfunction getGoods(id, type, ele, goods) {
\t\t\tykp.doAjax({
\t\t\t\tasync: false,
\t\t\t\turl: '/api/api_accountancies/get_num_info',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\ttype: type,
\t\t\t\t\tcustomer_id: id
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tvar goods_html = ['<option value=\"\">请选择</option>'];
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t    if(data[i]['goods'] != \"文件袋\"){
                            goods_html.push('<option value=\"' + data[i]['goods'] + '\" count=\"' + data[i]['count'] + '\">' + data[i]['goods'] + '</option>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif(ele) {
\t\t\t\t\t\tele.html(goods_html.join(''));
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\t\$('#templateCon [coldata=\"goods\"]').html(goods_html.join(''));

\t\t\t\t\tif(goods) {
\t\t\t\t\t\t\$('#templateCon [coldata=\"goods\"]').val(goods);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t}

\t\t//切换公司 或者 切换出库类型  获取相对应的出库物品
\t\tfunction changeName(statu) {
\t\t\t\$('#templateCon select[coldata=\"type\"]').unbind('change').change(function() {
\t\t\t\tif(statu) {
\t\t\t\t\t\$('#templateCon').find('[coldata=\"goods\"]').find('option').not(':first').remove();
\t\t\t\t\t\$('#templateCon').find('[coldata=\"ck_name\"]').val('');
\t\t\t\t\t\$('#templateCon').find('[coldata=\"number\"]').val('');

\t\t\t\t\tvar id = \$('#templateCon [company=\"2\"]').attr('customer_id');
\t\t\t\t\tvar type = \$(this).val();
\t\t\t\t\tif(type != '') {
\t\t\t\t\t\t\$('#templateCon').find('[coldata=\"ck_name\"]').val(\$(this).find('option:selected').text().trim().replace(/出库/, '仓'));
\t\t\t\t\t\tif(id != '') {
\t\t\t\t\t\t\tgetGoods(id, type);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\t// console.log(\$(this).parents('tr').find('[coldata=\"goods\"]'))
\t\t\t\t\$(this).parents('tr').find('[coldata=\"goods\"]').find('option').not(':first').remove();
\t\t\t\t\$(this).parents('tr').find('[coldata=\"ck_name\"]').val('');
\t\t\t\t\$(this).parents('tr').find('[coldata=\"number\"]').val('');
\t\t\t\tvar id = \$('#templateCon [company=\"1\"]').val();
\t\t\t\tvar type = \$(this).val();
\t\t\t\tif(type != '') {
\t\t\t\t\t\$(this).parents('tr').find('[coldata=\"ck_name\"]').val(\$(this).find('option:selected').text().trim().replace(/出库/, '仓'));
\t\t\t\t\tif(id != '') {
\t\t\t\t\t\tgetGoods(id, type, \$(this).parents('tr').find('[coldata=\"goods\"]'));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//短信发送
\t\tfunction sendMsg(id, type, param) {
\t\t\tykp.doAjax({
\t\t\t\tasync: false,
\t\t\t\turl: '/api/api_common/send_customer',
\t\t\t\tdata: {
\t\t\t\t\tcustomer_id: id,
\t\t\t\t\ttype: type,
\t\t\t\t\tparam: JSON.stringify(param)
\t\t\t\t},
\t\t\t\tmethod: 'post',
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tykp.prompt('短信发送成功！');
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//对点击驳回进行处理
\t\tfunction changeStatus(status, id) {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_accountancies/sh_out_new',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tnum: id,
\t\t\t\t\tstatus: status
\t\t\t\t}
\t\t\t}
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
\t\t\t\t\t\tdata.data.qr_remark = approve_reply;
\t\t\t\t\t// data.data.approve_reply = approve_reply;
\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();\t
\t\t\t\t\t}
\t\t\t\t
\t\t\t\t})
\t\t\t\tcs.closePop();
\t\t\t} else if(status == 0) {
//\t\t\t\tbootbox.confirm('确认撤销审批？', function(flag) {
//\t\t\t\t\t
//\t\t\t\t\tif(flag) {
//\t\t\t\t\t\tsetStatus(data);
//\t\t\t\t\t}
//\t\t\t\t})
                layui.use('layer',function(){
\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\tlayer.confirm('确认撤销审批？',function(flag){
\t\t\t\t\t\t\tif(flag){
                \t\t\tlayer.closeAll();
                \t\t\tsetStatus(data);
                \t\t}
\t\t\t\t\t\t})
\t\t\t\t\t})
\t\t}else if(status == 2){
\t\t\tykp.prompt('审批通过！');
\t\t\tsetStatus(data);
\t\t} else {
\t\t\t\tsetStatus(data);
\t\t\t}
\t\t}

\t\t//对点击审批 || 撤销进行处理
\t\tfunction setStatus(data, statu) {
\t\t\tykp.doAjax({
\t\t\t\turl: data.url,
\t\t\t\tmethod: data.method,
\t\t\t\tdata: data.data,
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tgetList();
//\t\t\t\t\tif(!statu) {
//\t\t\t\t\t\tykp.prompt('审批成功!');
//\t\t\t\t\t\tcs.close();
//\t\t\t\t\t\tgetList();
//\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}

\t\tfunction submit(id) {
\t\t\t\$('#templateCon .sure_button').click(function() {
\t\t\t\tif(!cs.popValidate()) {
\t\t\t\t\treturn;
\t\t\t\t};
\t\t\t\tvar data = {};
\t\t\t\t\$('#templateCon').find('[addfield]').not(':hidden').each(function(i) {
\t\t\t\t\tif(id && \$(this).attr('addfield') == 'customer_id') {
\t\t\t\t\t\tdata[\$(this).attr('addfield')] = \$(this).attr('customer_id');
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\tdata[\$(this).attr('addfield')] = \$(this).attr('addfield') == 'time' ? parseInt(new Date(\$(this).val()) / 1000) : \$(this).val();
\t\t\t\t})

\t\t\t\tif(id) {
\t\t\t\t\t\$('#templateCon').find('[coldata]').not(':hidden').each(function(i) {
\t\t\t\t\t\tdata[\$(this).attr('coldata')] = \$(this).val();
\t\t\t\t\t})
\t\t\t\t}
\t\t\t\t//获取送单方式信息
\t\t\t\tvar datae = {
\t\t\t\t\texpress: \$('#templateCon [title=\"express\"]').val().trim(),
\t\t\t\t\tnum: \$('#templateCon [title=\"expressnum\"]').val().trim(),
\t\t\t\t\tcost: \$('#templateCon [title=\"cost\"]').val().trim()
\t\t\t\t}
\t\t\t\tdata['data_type'] = \$('#templateCon [title=\"getway\"]').val();
\t\t\t\tif(data.data_type == 3) {
\t\t\t\t\tdata['data'] = datae;
\t\t\t\t}
\t\t\t\tif(data.data_type == 3 && (data.data.express == '' || data.data.num == '' ||
\t\t\t\t\t\tdata.data.cost == '')) {
\t\t\t\t\tykp.prompt('快递信息必须填写');
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tif(data.data_type == 3) {
\t\t\t\t\tdata['data'] = JSON.stringify(datae);
\t\t\t\t}

\t\t\t\t//短信参数
\t\t\t\tvar param = {
\t\t\t\t\tname: id ? \$('#templateCon input[addfield=\"customer_id\"]').val() : \$('#templateCon select[addfield=\"customer_id\"] option:selected').text(),
\t\t\t\t\ttime: \$('#templateCon [addfield=\"month\"]').val(),
\t\t\t\t\tuser: \$('#templateCon [addfield=\"jb_id\"] option:selected').text()
\t\t\t\t}
\t\t\t\tvar customer_id = id ? \$('#templateCon input[addfield=\"customer_id\"]').attr('customer_id') : \$('#templateCon select[addfield=\"customer_id\"]').val();
\t\t\t\tvar is_send = false;
\t\t\t\tif(\$('#templateCon #sendMsg input:checked').val() == 1) {
\t\t\t\t\tis_send = true;
\t\t\t\t}
\t\t\t\tvar contract_id = \$('#templateCon [addfield=\"contract_code\"]').val();
\t\t\t\t//\t\t\t\tdata.contract_id = contract_id;
\t\t\t\tdata.jb_id = \$('#templateCon [addfield=\"jb_id\"]').val()

\t\t\t\tvar data_pj = [];
\t\t\t\t//服务月份
\t\t\t\tvar service_month = \$('#templateCon #pzListsd').val();

                //凭证切换

\t\t\t\t//1 凭证  2票据  3证件
\t\t\t\tif(\$('#templateCon #pzList1').val()) {
\t\t\t\t\t\$('#templateCon #pzList1').val().forEach(function(item) {
\t\t\t\t\t\tdata_pj.push({
\t\t\t\t\t\t\tgoods: item.replace(/\\./, ''),
\t\t\t\t\t\t\ttype: 1,
\t\t\t\t\t\t\tnumber: 1
\t\t\t\t\t\t});
\t\t\t\t\t})

\t\t\t\t};

                //票据
\t\t\t\tif(\$('#templateBox .bill tbody').find('tr').length > 0) {

\t\t\t\t\t\$('#templateBox .bill tbody').find('tr').each(function() {
\t\t\t\t\t\tif(\$(this).find('.snum').val().trim() != 0) {
\t\t\t\t\t\t\tdata_pj.push({
\t\t\t\t\t\t\t\t'goods': \$(this).find('td').eq(1).text(),
\t\t\t\t\t\t\t\t'type': \"2\",
\t\t\t\t\t\t\t\t\"number\": \$(this).find('.snum').val().trim()
\t\t\t\t\t\t\t})
\t\t\t\t\t\t}

\t\t\t\t\t})
\t\t\t\t}
\t\t\t\t//证件
\t\t\t\tif(\$('#templateBox .certificate tbody').find('tr').length > 0) {
\t\t\t\t\t\$('#templateBox .certificate tbody').find('tr').each(function() {
\t\t\t\t\t\tif(\$(this).find('.snum').val().trim() != 0) {
\t\t\t\t\t\t\tdata_pj.push({
\t\t\t\t\t\t\t\t'goods': \$(this).find('td').eq(1).text(),
\t\t\t\t\t\t\t\t'type': \"3\",
\t\t\t\t\t\t\t\t\"number\": \$(this).find('.snum').val().trim()
\t\t\t\t\t\t\t})
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t}

\t\t\t\tif(data_pj.length == 0) {
\t\t\t\t\tdata_pj.push({
\t\t\t\t\t\tgoods: \"文件袋\",
\t\t\t\t\t\ttype: 0,
\t\t\t\t\t\tnumber: 1
\t\t\t\t\t});
\t\t\t\t}

                data['dataList'] = JSON.stringify(data_pj);

                data['year_month_id'] = service_month && service_month.length > 0 ? service_month.join(','): \"\";
                if(!id) {
\t\t\t\t\tvar colData = [];
\t\t\t\t\tvar _colData = {};
\t\t\t\t\t\$('#templateCon tbody tr').each(function(i, e) {
\t\t\t\t\t\t\$(e).find('[colData]').not('[colData=\"ck_name\"]').each(function(index, element) {
\t\t\t\t\t\t\t_colData[\$(element).attr('colData')] = \$(element).val();
\t\t\t\t\t\t});
\t\t\t\t\t\tcolData.push(_colData);
\t\t\t\t\t\t_colData = {};
\t\t\t\t\t});
\t\t\t\t\tdata['colData'] = JSON.stringify(colData);
\t\t\t\t}

\t\t\t\tdata.stype = 2;
\t\t\t\tif(id) {
\t\t\t\t\tdata.id = id;
\t\t\t\t}
\t\t\t\tif(\$('#templateCon #pzListsd').val()) {
                    data['contacts'] = \$('#templateBox .people').text();
\t\t\t\t\tdata['tel'] = \$('#templateBox .tel').text();
\t\t\t\t\tdata['address'] = \$('#templateBox #address').val();
                    if(!data['contacts']) {
                        ykp.prompt('请选择联系人');
                        return false;
                    }else if(!data['tel']){
                        ykp.prompt('请选填写联系电话');
                        return false;
\t\t\t\t\t}else if(!data['address']){
                        ykp.prompt('请选择联系地址');
                        return false;
\t\t\t\t\t}
                }

\t\t\t\tdata['remark'] = \$('#templateBox .rmark').val();

\t\t\t\tif(!data[\"jb_id\"]) {
\t\t\t\t\tykp.prompt('请选择经办人')
\t\t\t\t\treturn false;
\t\t\t\t}
                console.log(data);
                \t\turl = id ? '/api/api_accountancies/edit_io' : '/api/api_accountancies/add_io_batch';
                        ykp.doAjax({
                            url: \"/api/api_service/add_send_list_new2\",
                            method: 'post',
                            data: data,
                            success: function(res) {
                                //将审批状态更改为审批中
                                if(id) {
                                    var setdata = {};
                                    var dat = {
                                        'type': 2,
                                        id: id,
                                        status: 0
                                    };
                                    setdata['url'] = '/api/api_accountancies/sh_io';
                                    setdata['method'] = 'post';
                                    setdata['data'] = dat;
                                    setStatus(setdata, true);
                                }

                                //是否发送短信
                                if(is_send) {
                                    sendMsg(customer_id, '准备送单', param);
                                }

                                var msg = id ? '编辑成功' : '添加成功!';
                                ykp.prompt(msg);

                                cs.close();
                                getList();
                            }
                        });
\t\t\t});
\t\t}

\t\t//切换公司获取相应的长期合同订单编号
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

\t\t\t\tcs.getYearAndMonth('2015-1-1', '2025-12-31', '#templateBox #pzList');
                cs.getYearAndMonth('2014-1-1', '2025-12-31', '#templateBox #pzListsd','',true,true);
\t\t\t\tselect2();

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

\t\t\t\t\t\tgetGoods(customer_id);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t\$('#templateCon #pzListsd').change(function() {
\t\t\t\t\tif(\$(this).val()) {
\t\t\t\t\t\t\$('#templateCon .outInfo').show();
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#templateCon .outInfo').hide();
\t\t\t\t\t}
\t\t\t\t})
\t\t\t});
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

\t\tfunction getGoods(customer_id) {
\t\t\tykp.doAjax({
\t\t\t\turl: \"/api/api_accountancies/get_num_info\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tcustomer_id: customer_id
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tvar pj = [],
\t\t\t\t\t\tzj = [],
\t\t\t\t\t\tpz = [];
                    for(var i in data) {
                        if(data[i]['goods'] != \"文件袋\") {
                            if (data[i].type == 2) {
                                pj.push(`<tr><td><a href=\"javascript:;\" class=\"delTicket\">-</a></td><td>\${data[i].goods}</td>
\t\t\t\t\t\t\t<td>\${data[i].count}</td><td><input data-num=\"\${data[i].count}\" value=\"0\" class=\"snum\"/>  </td></tr>`)
                            } else if (data[i].type == 3) {
                                zj.push(`<tr><td><a href=\"javascript:;\" class=\"delTicket\">-</a></td><td>\${data[i].goods}</td>
\t\t\t\t\t\t\t<td>\${data[i].count}</td><td><input data-num=\"\${data[i].count}\" value=\"0\" class=\"snum\"/></td></tr>`)
                            } else {
                                pz.push('<option value=\"' + data[i]['goods'] + '\">' + data[i]['goods'] + '</option>')
                            }
                        }
\t\t\t\t\t}
         \t\t     pz.sort(function(a,b){
              \t\t\treturn b.localeCompare(a)
            \t\t\t });
\t\t\t\t\t\$('#templateBox #ticketBody').html(pj.join(','));
\t\t\t\t\t\$('#templateBox #cardBody').html(zj.join(','));
\t\t\t\t\t\$('#templateBox #pzList1').html(pz);
                    select2();
\t\t\t\t\tchangeList('.delTicket', '.delNum');
\t\t\t\t}
\t\t\t})

\t\t\tykp.doAjax({
\t\t\t\turl: \"/api/api_contact_book/get_address_customer\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tcustomer_id: customer_id
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tvar contacts = '',
\t\t\t\t\t\taddresses = '';
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tfor(var j in data[i].address_list) {
\t\t\t\t\t\t\taddresses += `<option value=\"\${data[i].address_list[j]['address']}\">\${data[i].address_list[j]['address']}</option>`
\t\t\t\t\t\t}
\t\t\t\t\t\tcontacts += `<option value=\"\${data[i]['id']}\" selected=\"\${data[i]['is_main']==1?'selected':''  }\">\${data[i]['username']} </option>`;
\t\t\t\t\t}

\t\t\t\t\t\$('#templateCon  .people').html(contacts);
\t\t\t\t\t\$('#templateCon  #address').html(addresses);
\t\t\t\t\t\$('#templateCon  .tel').text(data[\$('#templateCon  .people').get(0).selectedIndex]['phone']);
\t\t\t\t}
\t\t\t})
\t\t}

\t\t/**
\t\t *   删除本条记录  
\t\t *\t  减少数量 最少为1
\t\t */
\t\tfunction changeList(el, el1) {
\t\t\t//删除本条记录  
\t\t\t\$(el).click(function() {
\t\t\t\t\$(this).parents('tr').remove();
\t\t\t})
\t\t\t//减少数量 最少为1
\t\t\t\$(el1).mousedown(function() {
\t\t\t\t//console.log(1)
\t\t\t\t\$(this).next().text() > 1 ? \$(this).next().text(parseInt(\$(this).next().text()) - 1) : \"\";
\t\t\t})

\t\t\t\$('.snum').change(function() {
\t\t\t\tif(\$(this).val() < 0) {
\t\t\t\t\t\$(this).val(1);
\t\t\t\t} else if(\$(this).val() > parseInt(\$(this).attr('data-num'))) {
\t\t\t\t\t\$(this).val(\$(this).attr('data-num'));
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//切换订单号获取凭证和服务月份以及物品信息
\t\tfunction changeContractCodeGetMonthAndGoods() {
\t\t\t\$('#templateCon [addfield=\"contract_code\"]').change(function() {
\t\t\t\t//清空票据talbe和证件table,按钮删除active class
\t\t\t\t\$('#templateCon .connects-content>table').remove();
\t\t\t\t\$('#templateCon .buttons button').removeClass('active');

\t\t\t\tif(!\$(this).val()) {
\t\t\t\t\t\$('#templateCon .voucher .voucher_div').html('');
\t\t\t\t\t\$('#templateCon .service_month .voucher_div').html('');
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t//获取凭证和服务月份
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_contract/get_month_pz',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tcontract_id: \$(this).val()
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t//将票据交接，证件交接按钮取消禁用
\t\t\t\t\t\t\$('#templateCon .buttons button').not(':first').prop('disabled', false);

\t\t\t\t\t\tvar data = res.data;

\t\t\t\t\t\t//凭证 服务所有月份
\t\t\t\t\t\tvar all_month = data['all_month'];

\t\t\t\t\t\t//已完成服务月份
\t\t\t\t\t\tvar done_month = data['done_month'];

\t\t\t\t\t\t//已完成凭证月份
\t\t\t\t\t\tvar pz_month = data['pz_month'];

\t\t\t\t\t\t//服务月份html
\t\t\t\t\t\tvar service_html = [];
\t\t\t\t\t\t//拼争月份html
\t\t\t\t\t\tvar pz_html = [];

\t\t\t\t\t\tvar index; //下标不等于-1;则打钩禁用
\t\t\t\t\t\tfor(var i = 0; i < all_month.length; i++) {
\t\t\t\t\t\t\tindex = \$.inArray(all_month[i], done_month);
\t\t\t\t\t\t\tif(all_month[i]) {
\t\t\t\t\t\t\t\tservice_html.push(
\t\t\t\t\t\t\t\t\t`<label class=\"voucher_label\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" data-time=\"\${all_month[i]}\">
\t\t\t\t\t\t\t\t\t\t<span class=\"voucher_month\">\${all_month[i]}</span> 
\t\t\t\t\t\t\t\t\t</label>`
\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\tfor(var i in pz_month) {
\t\t\t\t\t\t\tif(all_month[i]) {
\t\t\t\t\t\t\t\tpz_html.push(
\t\t\t\t\t\t\t\t\t`<label class=\"voucher_label\">
\t\t\t\t\t\t                <input type=\"checkbox\"  data-time=\"\${all_month[i]}\">
\t\t\t\t\t\t                <span class=\"voucher_month\">\${all_month[i]}</span> 
\t\t\t\t\t\t              </label>`);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#templateCon .voucher .voucher_div').html(pz_html.join(''));
\t\t\t\t\t\t\$('#templateCon .service_month .voucher_div').html(service_html.join(''));

\t\t\t\t\t\t//选中凭证月份 默认选中 服务月份
\t\t\t\t\t\t// voucherToService();
\t\t\t\t\t}
\t\t\t\t});

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
\t\t\t\t\t\t//\t\t\t\t\t\tchangeJoinTable(goods);
\t\t\t\t\t}
\t\t\t\t})
\t\t\t});
\t\t}

\t\t//获取所有公司信息  和 所有出库月份
\t\tfunction getInfo(statu) {
\t\t\t\$.get(ykp.api_url + '/api/api_common/get_time', function(res) {
\t\t\t\tvar time = cs.getNowTime(res);
\t\t\t\tvar year = time.substring(0, time.indexOf('-'));
\t\t\t\tfor(var i = 1; i < 13; i++) {
\t\t\t\t\tif(i < 10) {
\t\t\t\t\t\ti = '0' + i;
\t\t\t\t\t}
\t\t\t\t\t\$('#templateCon select[addfield=\"month\"]').append(new Option(year + i, year + i));
\t\t\t\t}
\t\t\t});

\t\t\tif(!statu) {

\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_customer/f7',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tasync: false,
\t\t\t\t\tdata: {
\t\t\t\t\t\tselect: 'khm_customer.id,khm_customer.name,khm_customer.customer_num',
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\t\$('.advandced-search').select2({
\t\t\t\t\t\t\tallowClear: true
\t\t\t\t\t\t});

\t\t\t\t\t\tvar customer_html = [];
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\tcustomer_html.push(
\t\t\t\t\t\t\t\t`<option value=\"\${data[i]['id']}\">\${data[i]['customer_num']}(\${data[i]['name']})</option>`
\t\t\t\t\t\t\t);
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#templateCon [addfield=\"customer_id\"]').append(customer_html.join(''));

\t\t\t\t\t\tchangeCompanyGetNum();

\t\t\t\t\t\t\$('#templateCon [addfield=\"customer_id\"]').on(\"change\", function() {
\t\t\t\t\t\t\t\$('#templateCon tbody').html('');
\t\t\t\t\t\t});

\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tykp.doAjax({
\t\t\t\t\tasync: false,
\t\t\t\t\turl: '/api/api_accountancies/get_cus',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\t\$('#templateBox .name').select2({
\t\t\t\t\t\t\tallowClear: true
\t\t\t\t\t\t})

\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}

\t\t//普通搜索
\t\tfunction generalSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_accountancies/index_new',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\ttype: 2,
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

\t\t//自定义table
\t\tcs.custorm_check('#dynamic-table', '#datalist', true);

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

\t\t//校验数据
\t\tfunction validateData(statu) {
\t\t\t\$('#templateCon [coldata=\"number\"]').unbind('blur').blur(function() {
\t\t\t\tif(statu) {
\t\t\t\t\tvar num = \$('#templateCon [coldata=\"goods\"]').find('option:selected').attr('count');
\t\t\t\t\tnum = num ? parseInt(num) : 0;
\t\t\t\t\tvar _num = \$(this).val().trim() ? parseInt(\$(this).val().trim()) : 0;
\t\t\t\t\tif(_num > num) {
\t\t\t\t\t\tykp.prompt('出库数量大于入库数量，请重新输入');
\t\t\t\t\t\t\$(this).val('');
\t\t\t\t\t}
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tvar num = \$(this).parents('tr').find('[coldata=\"goods\"]').find('option:selected').attr('count');
\t\t\t\tnum = num ? parseInt(num) : 0;
\t\t\t\tvar _num = \$(this).val().trim() ? parseInt(\$(this).val().trim()) : 0;
\t\t\t\tif(_num > num) {
\t\t\t\t\tykp.prompt('出库数量大于入库数量，请重新输入');
\t\t\t\t\t\$(this).val('');
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//     <label> 出库物品： </label>
\t\t// <select class=\"goods required\" addfield=\"goods\" msg=\"请选择出库物品\">
\t\t// \t<option value=\"\">  请选择 </option>
\t\t// </select>
\t\t// <label> 出库数量： </label>
\t\t// <input type=\"number\" class=\"in_num required\" addfield=\"number\" msg=\"出库数量必须大于零\" validate=\"int\" />
\t\t// <label> 出库月份： </label>
\t\t// <select class=\"in_num required\" addfield=\"month\" msg=\"请选择出库月份\">
\t\t// \t<option value=\"\">  请选择 </option>
\t\t// </select>
\t\t// <label> 出库日期： </label>
\t\t// <div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t// \t<input class=\"date-timepicker1 required\" addfield=\"time\" msg=\"出库日期不能为空\" class=\"form-control\" style=\"height: 30px; width: 150px;\">
\t\t// \t<span class=\"input-group-addon\" style=\"width:30px;\">
\t\t//                        <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t//                    </span>
\t\t// </div> 

\t\t//添加一条物品信息
\t\tfunction addItem() {
\t\t\t\$('#templateCon .increase').click(function() {
\t\t\t\tif(\$('#templateCon .decrease').length == 5) {
\t\t\t\t\tykp.prompt('一次最多只能添加五件物品！');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\t\$(this).parents('table').find('tbody').append(
\t\t\t\t\t`<tr>
\t\t\t\t\t\t<td><label class=\"decrease\" style=\"font-size:20px;text-align:center;width:10px;cursor:pointer;\">-</label></td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select class=\"type required\" colData=\"type\"  style=\"width:100px;\" id=\"select\" msg=\"请选择出库类型\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t<option value=\"1\"> 凭证出库 </option>
\t\t\t\t\t\t\t\t<option value=\"2\"> 单据出库 </option>
\t\t\t\t\t\t\t\t<option value=\"3\"> 证件出库 </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" colData=\"ck_name\" disabled class=\"in_num required\" style=\"width:70px;\" msg=\"仓库名称不能为空\" /> 
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select class=\"goods required\" style=\"width:120px;\" colData=\"goods\" msg=\"请选择出库物品\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"number\" style=\"width:70px;\" class=\"in_num required\" colData=\"number\" msg=\"出库数量必须大于零\" validate=\"int\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>`
\t\t\t\t);

\t\t\t\ttimeplug();
\t\t\t\tremoveItem();
\t\t\t\tchangeName();
\t\t\t\t//校验数据
\t\t\t\tvalidateData();
\t\t\t});
\t\t}

\t\t//删除一条物品信息
\t\tfunction removeItem() {
\t\t\t\$('#templateCon .decrease').unbind('click').click(function() {
\t\t\t\t\$(this).parents('tr').remove();
\t\t\t});
\t\t}

\t\tfunction getway() {
\t\t\t\$(\"#templateCon #get_way select\").change(function() {
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

\t\t//添加出库
\t\t\$('.add').unbind('click').click(function() {
\t\t\tshowMark('.popup_new');
\t\t\t//加载面板
\t\t\tgetway()

\t\t\t\$('#showBox .title').text('添加出库');
\t\t\t\$('#templateCon .add_info').show();
\t\t\t\$('#templateCon [company=\"1\"]').show();
\t\t\t\$('#templateCon [company=\"3\"]').hide();
\t\t\t\$('#templateCon .edit_info').hide();

\t\t\ttimeplug();

\t\t\tgetInfo();

\t\t\t//添加一条物品信息
\t\t\taddItem();

\t\t\tfor(var i in employees) {
\t\t\t\tif(employees[i]) {
\t\t\t\t\t\$('#templateCon select[addfield=\"jb_id\"]').append(new Option(employees[i], i));
\t\t\t\t}
\t\t\t}
\t\t\tlayui.use('element', function() {
\t\t\t\tvar element = layui.element;
\t\t\t\telement.init('collapse');
\t\t\t});
\t\t\tsubmit();
\t\t});
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/depotManagement/depotOutGo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  819 => 796,  815 => 795,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	#templateCon label {*/
/* 		width: 84px;*/
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
/* 	*/
/* 	.info {*/
/* 		color: #f9f9f9 !important;*/
/* 	}*/
/* 	*/
/* 	#templateCon .bootstrap-datetimepicker-widget.dropdown-menu table {*/
/* 		table-layout: fixed !important;*/
/* 	}*/
/* 	*/
/* 	#templateBox {*/
/* 		overflow: visible !important;*/
/* 	}*/
/* 	*/
/* 	#templateCon .connects-content th,*/
/* 	#templateCon .connects-content td {*/
/* 		text-align: center;*/
/* 		padding: 5px;*/
/* 	}*/
/* 	*/
/* 	#templateCon .connects-content input {*/
/* 		text-align: center;*/
/* 		width: 88px;*/
/* 	}*/
/* 	#showBox{*/
/* 		width: 589px;*/
/* 		height: 100%;*/
/* 	}*/
/* </style>*/
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<!-- <h3 class="header smaller lighter blue">出库</h3> -->*/
/* 		<div class="actions" id="topTool" style="position:relative;">*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<input type="text" pts="0" sear="ckm_out_warehouse.num" placeholder="出库单号">*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<input type="text" pts="0" sear="khm_customer.name" placeholder="企业名称">*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<input type="text" pts="0" sear="khm_customer.customer_num" placeholder="客户编码">*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<select style="width: 180px" class="advandced-search select2-hidden-accessible" tabindex="-1" pts=3 sear="ckm_out_warehouse.jb_id" aria-hidden="true">*/
/* 					<option value=""> 经办人 </option>*/
/* 				</select>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<select style="width: 180px" class="advandced-search select2-hidden-accessible" tabindex="-1" pts=3 sear="ckm_out_warehouse.create_id" aria-hidden="true">*/
/* 					<option value=""> 创建人 </option>*/
/* 				</select>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<select style="width: 180px" class="advandced-search select2-hidden-accessible" pts=3 sear="ckm_out_warehouse.qr_id" tabindex="-1" aria-hidden="true">*/
/* 					<option value=""> 审批人 </option>*/
/* 				</select>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<button id="search" title="搜索" class="btn btn-info btn-sm">*/
/* 					<i class="fa fa-search"></i>*/
/* 				</button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<button type="button" id="heightsearch" title="高级搜索" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/* 	                <i class="fa fa-filter"></i>*/
/* 	            </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<button id="flush" type="button" title="刷新" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/*                     <i class="fa fa-refresh"></i>*/
/*                 </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" contentAuthority="151" style=" float: left;margin-right: 5px;">*/
/* 				<button class="add btn btn-info btn-sm" title="添加" style=" background-color: #32CD32 !important;">*/
/* 	                <i class="fa fa-plus"></i>*/
/* 	            </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" contentAuthority="306" style=" float: left; margin-right: 5px;">*/
/* 				<button type="button"  title="导出" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="exportfile moveToClue btn addBtn btn-info btn-sm position-relative">*/
/* 					<i class="fa fa-sign-out"></i>*/
/* 				</button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" contentAuthority="152" style=" float: left;margin-right: 5px;">*/
/* 				<button title="批量审批" class="btn btn-info sp  btn-sm plSp" style="background-color: #32CD32 !important; border-color: #32CD32;">*/
/* 					<i class="fa fa-check-circle-o"></i>*/
/* 	            </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<div id="filterBtns" style="display:inline-block;width:290px;height: 36px">*/
/* 					<a href="javascript:void(0);" class="myFilter" style="background: #E6E6E6;line-height:22px" data-status="a">全部</a>*/
/* 					<a href="javascript:void(0);" class="myFilter" style="line-height:22px" data-status="0">*/
/* 						</i> 待审批</a>*/
/* 					<a href="javascript:void(0);" class="myFilter" style="line-height:22px" data-status="2"> 已通过</a>*/
/* 					<a href="javascript:void(0);" class="myFilter" style="line-height:22px" data-status="1"> 未通过</a>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div id="heightsearch1" class="col-sx-12" style="top:31px;position: absolute; background: #fff;overflow: auto; padding: 10px 0px; display: none;z-index:1042;">*/
/* 				<div class="row">*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>审批状态</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select style="width:180px" gjs=0 data-type="gj" sear="ckm_out_warehouse.status">*/
/* 							<option value="">请选择</option>*/
/* 							<option value="0">待审批</option>*/
/* 							<option value="1">未通过</option>*/
/* 							<option value="2">已通过</option>*/
/* 						</select>*/
/* 						<!--<input type="text" gjs=0 sear="ckm_out_warehouse.status" />-->*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>出库单号</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<input type="text" gjs=0 sear="ckm_out_warehouse.num" />*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>出库类型</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select style="width: 180px" gjs=0 data-type="gj" sear="ckm_out_warehouse.type">*/
/* 							<option value="">请选择</option>*/
/* 							<option value="1">凭证</option>*/
/* 							<option value="2">单据</option>*/
/* 							<option value="3">证件</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<!-- <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>仓库名称</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<input type="text" gjs=0 id="" sear="ckm_out_warehouse.type">*/
/* 					</div> -->*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>企业名称</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<input type="text" gjs=0 id="" sear="khm_customer.name">*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>客户编码</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<input type="text" gjs=0 sear="khm_customer.customer_num">*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>仓位</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select gjs=3 sear="ckm_position_num.pos_id" class="cw" data-type="gj" style="width:180px;">*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>经办人</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select style="margin: 12px !important;width: 180px" class="advandced-search select2-hidden-accessible" gjs=0 data-type="gj" sear="ckm_out_warehouse.jb_id" tabindex="-1" aria-hidden="true">*/
/* 							<option value=""> 请选择 </option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>出库日期</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 							<option> > </option>*/
/* 							<option> &lt; </option>*/
/* 						</select>*/
/* 						<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 							<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 							<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="ckm_out_warehouse.time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 						</div>*/
/* 						<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 							<input class="date-timepicker1" data-type="gj" data-status="time" gjs=0 sear="ckm_out_warehouse.month" class="form-control" style="height: 30px; width: 150px;">*/
/* 							<span class="input-group-addon" style="width:30px;">*/
/*                                 <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                             </span>*/
/* 						</div>-->*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>备注</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<input type="text" gjs=0 id="" sear="ckm_out_warehouse.remark">*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>出库物品</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<input type="text" gjs=0 sear="ckm_out_warehouse.goods">*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>创建人</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select style="margin: 12px !important;width: 180px" class="advandced-search select2-hidden-accessible" tabindex="-1" gjs=0 data-type="gj" sear="ckm_out_warehouse.create_id" aria-hidden="true">*/
/* 							<option value=""> 请选择 </option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>创建时间</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 							<option> > </option>*/
/* 							<option> &lt; </option>*/
/* 						</select>*/
/* 						<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 							<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 							<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="ckm_out_warehouse.create_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>审批人</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select style="margin: 12px !important;width: 180px" class="advandced-search select2-hidden-accessible" tabindex="-1" gjs=0 data-type="gj" sear="ckm_out_warehouse.qr_id" aria-hidden="true">*/
/* 							<option value=""> 请选择 </option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>审批时间</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 							<option> > </option>*/
/* 							<option> &lt; </option>*/
/* 						</select>*/
/* 						<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 							<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 							<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="ckm_out_warehouse.qr_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 						</div>*/
/* 						<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 							<input class="date-timepicker1" data-type="gj" data-status="time" gjs=0 sear="ckm_out_warehouse.qr_time" class="form-control" style="height: 30px; width: 150px;">*/
/* 							<span class="input-group-addon" style="width:30px;">*/
/*                                 <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                             </span>*/
/* 						</div>-->*/
/* 					</div>*/
/* 					<div style="text-align:center;clear:both;padding-top:10px; ">*/
/* 						<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/*                             查询*/
/*                         </button>*/
/* 						<button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 								                       重置*/
/* 								                    </button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div id="heightsearch1" style="height: 0; overflow: hidden;">*/
/* 		<div class="row" style="margin-top:0 !important;">*/
/* 			<div class="col-sx-4" style=" float: left">*/
/* 				<div class="input-group " style=" float: left; width: 200px !important; margin-right: 50px;">*/
/* 					<span class="input-group-addon">*/
/*                             <i class="fa fa-calendar bigger-110"></i>*/
/*                         </span>*/
/* 					<input class="" type="text" name="date-range-picker" id="id-date-range-picker-1">*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left">*/
/* 				<input type="text" id="form-field-1" placeholder="搜索客户名称或编码" class="col-xs-10 col-sm-10">*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left">*/
/* 				<input type="text" id="form-field-1" placeholder="输入仓位" class="col-xs-10 col-sm-10">*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left">*/
/* 				<input type="text" id="form-field-1" placeholder="负责人" class="col-xs-10 col-sm-10">*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 15px;">*/
/* 				<button type="button" id="search1" class="btn btn-info btn-sm">*/
/*                         查询*/
/*                     </button>*/
/* 				<button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 								                       重置*/
/* 								                    </button>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* 	<div class="custom_table" style="margin-top:10px">*/
/* 		<table id="dynamic-table">*/
/* 			<thead>*/
/* 				<tr class="thColor">*/
/* 					<th>*/
/* 						<label class="pos-rel">*/
/*                             <input type="checkbox" class="ace" onclick="cs.checkAll(this.checked)">*/
/*                             <span class="lbl"></span>*/
/*                         </label>*/
/* 					</th>*/
/* 					<th>操作</th>*/
/* 					<th data-num="1">审批状态</th>*/
/* 					<th data-num="2">出库单号</th>*/
/* 					<th data-num="5">企业名称</th>*/
/* 					<th data-num="6">客户编码</th>*/
/* 					<th data-num="17">仓位编码</th>*/
/* 					<th data-num="7">经办人</th>*/
/* 					<th data-num="8">出库日期</th>*/
/* 					<th data-num="10">出库物品</th>*/
/* 					<th data-num="18">备注</th>*/
/* 					<th data-num="11">创建人</th>*/
/* 					<th data-num="12">创建时间</th>*/
/* 					<th data-num="13">审批人</th>*/
/* 					<th data-num="14">审批时间</th>*/
/* 					<th data-num="15">出库月份</th>*/
/* 					<th data-num="16">审批回复</th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<tbody id="datalist">*/
/* */
/* 			</tbody>*/
/* 		</table>*/
/* 	</div>*/
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
/* 		<div class="row">*/
/* 			<div class="form_data">*/
/* 				<label> 企业名称： </label>*/
/* 				<select class="in_num required name" company="1" addfield="customer_id" style="width:380px;" msg="请选择企业名称">*/
/* 					<option value="">请选择</option>*/
/* 				</select>*/
/* */
/* 				<div class="outInfo" style="display: none;">*/
/* 					<div style="margin-top:15px;">*/
/* 						<label>联系人员： </label>*/
/* 						<select style="display: inline-block; width: 174px;" class="people"></select>*/
/* 						<label> 联系电话： </label>*/
/* 						<span style="display: inline-block; width: 174px;" class="tel"></span>*/
/* 					</div>*/
/* */
/* 					<div style="margin-top:15px;">*/
/* 						<label> 联系地址： </label>*/
/* 						<select style="display: inline-block; width: 174px;" class="addresses" id="address"> </select>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!--<div style="padding:0 0 15px 0;">*/
/* 			*/
/* 			</div>-->*/
/* 			<div id="get_way" style="margin-bottom: 5px;margin-top:5px;">*/
/* 				<label> 经办人： </label>*/
/* 				<select addfield="jb_id" style="width:180px" msg="请选择经办人">*/
/* 					<option value="">请选择</option>*/
/* 				</select>*/
/* 				<label>服务方式：</label>*/
/* 				<select title="getway">*/
/* 					<option value="1">外勤上门</option>*/
/* 					<option value="2">客户上门</option>*/
/* 					<option value="3">快递物流</option>*/
/* 				</select>*/
/* 			</div>*/
/* */
/* 			<div id="express" style="display:none;">*/
/* 				<div style="margin-bottom: 5px">*/
/* 					<label style=" margin-bottom: 5px;">快递公司：</label>*/
/* 					<input title="express" />*/
/* 					<label>快递单号：</label>*/
/* 					<input title="expressnum" />*/
/* 				</div>*/
/* 				<div>*/
/* 					<label>快递费用：</label>*/
/* 					<input title="cost" />*/
/* 				</div>*/
/* 				<div class="" style="padding: 2px;padding-left:25px;">*/
/* 					<div id="fileBox">*/
/* */
/* 					</div>*/
/* 					<div id="uploadBox">*/
/* 						<button type="button" id="upload1" style="outline: none;background-color: #009688 !important; margin-top: 20px;" class="btn btn-info btn-sm position-relative">*/
/* 			                        上传文件*/
/* 			        	</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<!-- layui面板模块 -->*/
/* 			<div class="layui-collapse" style="margin-top: 10px">*/
/* */
/* 				<div class="layui-colla-item">*/
/* 					<h2 class="layui-colla-title">发票单据</h2>*/
/* 					<div class="layui-colla-content connects-content">*/
/* 						<div class="">*/
/* 							<table class="bill" style="display:;">*/
/* 								<thead>*/
/* 									<tr>*/
/* 										<th style="font-weight: 500;">操作</th>*/
/* 										<th style="font-weight: 500;">票据类别</th>*/
/* 										<th style="font-weight: 500;">库存数量</th>*/
/* 										<th style="font-weight: 500;">数量(张)</th>*/
/* 									</tr>*/
/* 								</thead>*/
/* 								<tbody id="ticketBody">*/
/* */
/* 								</tbody>*/
/* 							</table>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="layui-colla-item">*/
/* 					<h2 class="layui-colla-title">证件资料</h2>*/
/* 					<div class="layui-colla-content connects-content">*/
/* 						<div style="margin-top: 10px;" class="">*/
/* 							<table class="certificate" style="display:;">*/
/* 								<thead>*/
/* 									<tr>*/
/* 										<th style="font-weight: 500;">操作</th>*/
/* 										<th style="font-weight: 500;">证件名称</th>*/
/* 										<th style="font-weight: 500;">库存数量</th>*/
/* 										<th style="font-weight: 500;">数量(个)</th>*/
/* 									</tr>*/
/* 								</thead>*/
/* 								<tbody id="cardBody">*/
/* */
/* 								</tbody>*/
/* 							</table>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="layui-colla-item">*/
/* 					<h2 class="layui-colla-title">记账凭证</h2>*/
/* 					<div class="layui-colla-content ">*/
/* 						<div class="voucher">*/
/* 							<!--<div class="page-header" style="background: #ccecff; padding-left: 6px; height: 35px;">*/
/* 									<h5 style="margin-top: 3px;">*/
/* 											凭证交接*/
/* 									</h5>*/
/* 								</div>-->*/
/* 							<!--<label style="float: left;margin-right: 5px;width:25px;"></label>-->*/
/* 							<select multiple="" id="pzList1" name="state" addfield="sd" class="pzList state select2 select2-hidden-accessible" data-placeholder="选择凭证名称" style="width: 200px;" tabindex="-1" aria-hidden="true">*/
/* 							</select>*/
/* 							<!--<div style="display: none;width:472px;" class="voucher_div">*/
/* 							</div>-->*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="layui-colla-item" >*/
/* 					<h2 class="layui-colla-title">送单月份</h2>*/
/* 					<div class="layui-colla-content">*/
/* 						<div class="service_month" style="    margin-bottom：-30px;">*/
/* 							<!--<div class="page-header" style="background: #ccecff; padding-left: 6px; height: 35px;">*/
/*                                 <h5 style="margin-top: 3px;">*/
/*                                         月份*/
/*                                     </h5>*/
/*                             </div>-->*/
/* 							<select multiple="" id="pzListsd" name="state" addfield="sd" class="pzList state select2 select2-hidden-accessible" data-placeholder="选择月份" style="width: 200px;" tabindex="-1" aria-hidden="true">*/
/* 							</select>*/
/* 							<div style="display: inline-block;width:472px;" class="voucher_div">*/
/* 								<!-- <label class="voucher_label">*/
/*                                     <input type="checkbox" data-time="201711">*/
/*                                     <span class="voucher_month">201711</span>*/
/*                                 </label>*/
/*                                 <label class="voucher_label">*/
/*                                     <input type="checkbox" data-time="201712">*/
/*                                     <span class="voucher_month">201712</span>*/
/*                                 </label>*/
/*                                 <label class="voucher_label">*/
/*                                     <input type="checkbox" data-time="201801">*/
/*                                     <span class="voucher_month">201801</span>*/
/*                                 </label>*/
/*                                 <label class="voucher_label">*/
/*                                     <input type="checkbox" data-time="201802">*/
/*                                     <span class="voucher_month">201802</span>*/
/*                                 </label> -->*/
/* 							</div>*/
/* 							<!-- <table>*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th>凭证月份</th>*/
/*                                         <th>凭证名称</th>*/
/*                                         <th>数量(本)</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     <tr>*/
/*                                         <td id="month">*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             <select>*/
/* */
/*                                             </select>*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             <input type="number"/>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 </tbody>*/
/*                             </table> -->*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 			</div>*/
/* */
/* 			<div class="form_data edit_info" style="margin-top:15px;display:none;">*/
/* 				<label> 出库类型： </label>*/
/* 				<select class="type required" coldata="type" style="width:180px;" id="select" msg="请选择出库类型">*/
/* 					<option value="">请选择 </option>*/
/* 					<option value="1"> 凭证出库 </option>*/
/* 					<option value="2"> 单据出库 </option>*/
/* 					<option value="3"> 证件出库 </option>*/
/* 				</select>*/
/* 				<label> 仓库名称： </label>*/
/* 				<input type="text" coldata="ck_name" disabled class="in_num required" msg="仓库名称不能为空" />*/
/* 			</div>*/
/* 			<div class="form_data edit_info" style="margin-top:15px;display:none;">*/
/* 				<label> 出库物品： </label>*/
/* 				<select class="goods required" coldata="goods" style="width:180px;" msg="请选择出库物品">*/
/* 					<option value="">请选择</option>*/
/* 				</select>*/
/* 				<label> 出库数量： </label>*/
/* 				<input type="number" class="in_num required" coldata="number" msg="出库数量必须大于零" validate="int" />*/
/* 			</div>*/
/* */
/* 			<!--<div class="form_data" style="margin-top:15px;">*/
/* 					<label> 出库月份： </label>*/
/* 					<select class="in_num required" addfield="month" style="width:180px;" msg="请选择出库月份">*/
/* 						<option value="">请选择</option>*/
/* 					</select>*/
/* 					<label> 出库日期： </label>*/
/* 					<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<input class="date-timepicker1 required" addfield="time" msg="出库日期不能为空" class="form-control" style="padding:5px;height: 30px; width: 150px;">*/
/* 						<span class="input-group-addon" style="width:30px;height:30px;">*/
/*                             <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                         </span>*/
/* 					</div>*/
/* */
/* 					<label> 出库类型： </label>*/
/* 					<select class="type required" addfield="type"  style="width:180px;" id="select" msg="请选择出库类型">*/
/* 						<option value=""> - - - 请选择 - - - </option>*/
/* 						<option value="1"> 凭证出库 </option>*/
/* 						<option value="2"> 单据出库 </option>*/
/* 						<option value="3"> 证件出库 </option>*/
/* 					</select>*/
/* 					<label> 仓库名称： </label>*/
/* 					<input type="text" addfield="ck_name" disabled class="in_num required" msg="仓库名称不能为空" /> */
/* 				</div>-->*/
/* 			<!--<div class="form_data" style="margin-top:15px;">*/
/* 					<label style="float:left;"> 出库备注： </label>*/
/* 					<textarea style="width:calc(100% - 89px);margin-left:5px;padding:5px;" addfield="remark" class="in_remark"></textarea>*/
/* 				</div>-->*/
/* */
/* 			<!-- <div class="connects-content" style="margin-top: 10px;">*/
/* 				*/
/* 			*/
/* 				*/
/* 			</div> -->*/
/* 		</div>*/
/* 		<div style="margin-top:15px; ">*/
/* 			<label style="float:left;width:36px;">备注：</label>*/
/* 			<textarea style="margin-left:5px;width:500px;resize:none;padding:5px;" class="rmark"></textarea>*/
/* 		</div>*/
/* 		<!-- <div class="service_month" style="padding:0px 0;">*/
/* 				<div class="page-header" style="background: #ccecff; padding-left: 6px; */
/* 				height: 35px;">*/
/* 					<h5 style="margin-top: 3px;">*/
/* 						月份*/
/* 					</h5>*/
/* 				</div>*/
/* 			<select multiple="" id="pzList" name="state" addfield="sd" class="pzList state select2 select2-hidden-accessible" data-placeholder="选择收单负责人" style="width: 200px;" tabindex="-1" aria-hidden="true">*/
/* 			</select>*/
/* 			<div style="display: none;width:472px;" class="voucher_div">*/
/* 			</div>*/
/* 					</div> -->*/
/* */
/* 		<div class="popup_button">*/
/* 			<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* */
/* 			<button class="sure_button">*/
/*                     <i class="fa fa-check" aria-hidden="true"></i>*/
/*                     保存*/
/*                 </button>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row" id="template" style="display:none;width:678px;">*/
/* 	<div class="col-sm-12" id="editBox">*/
/* 		<table width="100%" style="border:1px solid #ddd;border-collapse:collapse;margin-bottom:15px;">*/
/* 			<tr style="">*/
/* 				<td style="text-align: right !important">出库类型：</td>*/
/* 				<td style="text-align: left !important" class="tdboder">*/
/* 					<span class="disData0"></span>*/
/* 				</td>*/
/* 				<td style="text-align: right !important">仓库：</td>*/
/* 				<td style="text-align: left !important">*/
/* 					<span class="disData1"></span>*/
/* 				</td>*/
/* 			</tr>*/
/* 			<tr style="">*/
/* 				<td style="text-align: right !important">出库物品：</td>*/
/* 				<td style="text-align: left !important" class="tdboder">*/
/* 					<span class="disData2"></span>*/
/* 				</td>*/
/* 				<td style="text-align: right !important">出库数量：</td>*/
/* 				<td style="text-align: left !important">*/
/* 					<span class="disData3"></span>*/
/* 				</td>*/
/* 			</tr>*/
/* 			<tr style="">*/
/* 				<td style="text-align: right !important">出库日期：</td>*/
/* 				<td style="text-align: left !important" class="tdboder">*/
/* 					<span class="disData4"></span>*/
/* 				</td>*/
/* 				<td style="text-align: right !important">出库月份：</td>*/
/* 				<td style="text-align: left !important">*/
/* 					<span class="disData5"></span>*/
/* 				</td>*/
/* 			</tr>*/
/* 			<tr style="">*/
/* 				<td style="text-align: right !important">出库备注：</td>*/
/* 				<td style="text-align: left !important">*/
/* 					<span class="disData9"></span>*/
/* 				</td>*/
/* 				<td style="text-align: right !important">经办人：</td>*/
/* 				<td style="text-align: left !important" class="tdboder">*/
/* 					<span class="disData8"></span>*/
/* 				</td>*/
/* 			</tr>*/
/* 		</table>*/
/* 	</div>*/
/* */
/* 	<div class="row" id="template1" style="display:none;width:678px;">*/
/* 		<div class="storage">*/
/* 			<table class="company" style="margin-top: 15px;">*/
/* 				<tr>*/
/* 					<td in_title>企业名称：</td>*/
/* 					<td in_content>*/
/* 						<span field="customer_id"></span>*/
/* 					</td>*/
/* 					<!--<td in_title>订单号：</td>*/
/* 					<td in_content>*/
/* 						<span field="contract_code"></span>*/
/* 					</td>-->*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td in_title>经办人：</td>*/
/* 					<td in_content>*/
/* 						<span field="jb_id"></span>*/
/* 					</td>*/
/* 					<td in_title>出库月份：</td>*/
/* 					<td in_content>*/
/* 						<span field="month"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td in_title>出库状态：</td>*/
/* 					<td in_content>*/
/* 						<span field="status"></span>*/
/* 					</td>*/
/* 					<td in_title>出库单号：</td>*/
/* 					<td in_content>*/
/* 						<span field="num"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td in_title>出库日期：</td>*/
/* 					<td in_content>*/
/* 						<span field="time"></span>*/
/* 					</td>*/
/* 					<td in_title>审批回复：</td>*/
/* 					<td in_content>*/
/* 						<span field="qr_remark"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td in_title>创建人：</td>*/
/* 					<td in_content>*/
/* 						<span field="create_id"></span>*/
/* 					</td>*/
/* 					<td in_title>创建时间：</td>*/
/* 					<td in_content>*/
/* 						<span field="create_time"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td in_title>审批人：</td>*/
/* 					<td in_content>*/
/* 						<span field="qr_id"></span>*/
/* 					</td>*/
/* 					<td in_title>审批时间：</td>*/
/* 					<td in_content>*/
/* 						<span field="qr_time"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td in_title>备注：</td>*/
/* 					<td in_content colspan="20" style="width: 200px;">*/
/* 						<span field="remark" style="text-align: center;word-break: break-word;height: 30px;white-space: normal;margin: 6px 0 4px;font-size: 12px;color: #333;"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>*/
/* 			<div style="padding:0 15px">*/
/* 				<p style="border-bottom:1px solid #ddd;padding:10px 0;">*/
/* 					凭证仓*/
/* 				</p>*/
/* 			</div>*/
/* 			<table class="pz">*/
/* 				<tbody></tbody>*/
/* 				<!-- <tr style="border-bottom: 1px solid #ddd">*/
/* 					<td in_title>凭证仓：</td>*/
/* 					<td colspan="3"></td>*/
/* 				</tr> -->*/
/* 			</table>*/
/* 			<div style="padding:0 15px">*/
/* 				<p style="border-bottom:1px solid #ddd;padding:10px 0;">*/
/* 					票据仓*/
/* 				</p>*/
/* 			</div>*/
/* 			<table class="pj">*/
/* 				<tbody></tbody>*/
/* 				<!-- <tr style="border-bottom: 1px solid #ddd">*/
/* 					<td in_title>票据仓：</td>*/
/* 					<td colspan="3"></td>*/
/* 				</tr> -->*/
/* 			</table>*/
/* 			<div style="padding:0 15px">*/
/* 				<p style="border-bottom:1px solid #ddd;padding:10px 0;">*/
/* 					证件仓*/
/* 				</p>*/
/* 			</div>*/
/* 			<table class="zj">*/
/* 				<tbody></tbody>*/
/* 				<!-- <tr style="border-bottom: 1px solid #ddd">*/
/* 					<td in_title>证件仓：</td>*/
/* 					<td colspan="3"></td>*/
/* 				</tr> -->*/
/* 			</table>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
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
/* <script type="text/javascript">*/
/* 	$(function() {*/
/* 		cs.getNodes([151]);*/
/* 		cs.dataRang();*/
/* 		if(cs.approve_authority({*/
/* 				name: '出库',*/
/* 				nodes: [152]*/
/* 			})) {*/
/* 			$('[contentAuthority="152"]').show();*/
/* 		}*/
/* */
/* 		var order = 'ckm_out_warehouse.id desc';*/
/* 		var pagesize = 10;*/
/* 		var filter = '';*/
/* 		var customers = [];*/
/* 		var employees = [];*/
/* */
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_accountancies/index_new',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: filter,*/
/* 				limit: pagesize,*/
/* 				type: 2*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '.pageBar'*/
/* 			},*/
/* 			contentId: "#datalist", //默认排序*/
/* 			initOrder: "", //初始化sort*/
/* 			defaultOrder: order,*/
/* 			params: [{*/
/* 				id: "#dynamic-table",*/
/* 				field: ["", "", "ckm_out_warehouse.status", "ckm_out_warehouse.num", "khm_customer.name", "khm_customer.customer_num", "", "", "ckm_out_warehouse.time",*/
/* 					"", "ckm_out_warehouse.remark", "ckm_out_warehouse.create_time", "", "ckm_out_warehouse.qr_time", "ckm_out_warehouse.month", "ckm_out_warehouse.qr_remark"*/
/* 				]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			handleData(res);*/
/* 		});*/
/* */
/* 		tspage();*/
/* */
/* 		function tspage() {*/
/* 			if(ykp.getCookie('detailsId') && ykp.getCookie('detailsId') != '') {*/
/* */
/* 				var id = ykp.getCookie('detailsId');*/
/* 				var data = {*/
/* 					type: 2,*/
/* 					limit: pagesize,*/
/* 					filter: `ckm_out_warehouse.id = ${id}`*/
/* 				}*/
/* 				getList_2(data);*/
/* 				ykp.setCookie('detailsId', '', 1 / 24);*/
/* 			} else {*/
/* 				//常规刷新*/
/* 				ykp.setCookie("filter", "");*/
/* 				ykp.setCookie("where", "");*/
/* 				getList();*/
/* 			}*/
/* 		}*/
/* */
/*         //导出功能*/
/*         cs.exportFile({*/
/*             url:"/api/api_accountancies/export",*/
/*             type:2,*/
/*             title:"出库记录"*/
/* */
/*         });*/
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
/* 		$('.myFilter').click(function() {*/
/* 			if(!$(this).hasClass('clc')) {*/
/* 				$(this).addClass('clc').siblings().removeClass('clc');*/
/* 			}*/
/* 			var data = {*/
/* 				'type': 2,*/
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
/* 			filter = 'ckm_out_warehouse.status = ' + filter_;*/
/* 			data['filter'] = 'ckm_out_warehouse.status = ' + filter_;*/
/* 			getList_2(data);*/
/* */
/* 		})*/
/* */
/* 		cs.getAllCw(function(option) {*/
/* 			$('#heightsearch1 .cw').html(option);*/
/* 			$('#heightsearch1 .cw').select2({*/
/* 				allowClear: true*/
/* 			})*/
/* 		})*/
/* 		$('#filterBtns a').mouseover(function() {*/
/* 			$(this).addClass('over');*/
/* 		})*/
/* 		$('#filterBtns a').mouseout(function() {*/
/* 			$(this).removeClass('over');*/
/* 		})*/
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
/* 		//切换每页显示的条目数*/
/* 		$('#changePageNum').change(function() {*/
/* 			pagesize = $(this).val();*/
/* 			ykp.setCookie('page_size',pagesize);*/
/* 			getList();*/
/* 		})*/
/* */
/* 		//时间插件*/
/* 		if(!ace.vars['old_ie']) {*/
/* 			$('.date-timepicker1').datetimepicker({*/
/* 				// format: 'YYYY-MM-DD', //use this option to display seconds*/
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
/* 		cs.showHeightSearch('#heightsearch', '#heightsearch1')*/
/* */
/* 		//高级搜索显示 &  隐藏*/
/* 		/*$('.in').click(function() {*/
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
/* 				cs.rest(false,'#heightsearch1');*/
/* 			}*/
/* 		})*//* */
/* */
/* 		//高级搜索*/
/* 		function advancedSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_accountancies/index_new',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					type: 2,*/
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
/* 		getCusAndEmps();*/
/* */
/* 		function getCusAndEmps() {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_customer/f7',*/
/* 				method: 'post',*/
/* 				async: false,*/
/* 				data: {*/
/* 					select: 'khm_customer.id,khm_customer.name'*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					for(var i in data) {*/
/* 						customers[data[i]['id']] = data[i]['name'];*/
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
/* 					for(var i in data) {*/
/* 						employees[data[i]['id']] = data[i]['name'];*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//获取出库列表*/
/* 		//getList();*/
/* 		function getList() {*/
/* 			generalSearch();*/
/* 			advancedSearch();*/
/* 			ykp.list({*/
/* 				url: '/api/api_accountancies/index_new',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					type: 2,*/
/* 					filter: filter,*/
/* 					limit: pagesize,*/
/* 					order: order*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					console.log(res.data.items)*/
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
/* 		//数据处理*/
/* 		function handleData(res) {*/
/* 			var data = res.data.items;*/
/* 			var html = [];*/
/* 			var status = []; //该数组存放th display属性值*/
/* 			var states = ['待审批', '未通过', '已通过']; //该数组存放状态*/
/* 			var types = ['凭证', '单据', '证件']; //该数组存放出库类型*/
/* 			var warehouses = ['凭证仓', '单据仓', '证件仓']; //该数组存放仓库*/
/* 			var ths = $('.thColor th'); //获取所有的th*/
/* 			var times = {}; //存放服务器返回的转换后的时间*/
/* 			for(var i = 0; i < ths.length; i++) {*/
/* 				if(i > 1) {*/
/* 					status.push(ths.eq(i).css('display'));*/
/* 				}*/
/* 			}*/
/* */
/* 			//审批权限为true可以审批,为false不可审批*/
/* 			var spApp = cs.approve_authority({*/
/* 				name: '出库',*/
/* 				nodes: [154]*/
/* 			});*/
/* 			var cxApp = cs.approve_authority({*/
/* 				name: '出库',*/
/* 				nodes: [267]*/
/* 			});*/
/* 			var edit_statu = cs.getNodes([153], true);*/
/* */
/* 			//物品数据*/
/* 			var goodsData = [];*/
/* 			//物品数据html*/
/* 			var goodsData_html = [];*/
/* */
/* 			for(var i in data) {*/
/* */
/* 				goodsData = data[i]['goodsList'];*/
/* 				goodsData_html = [];*/
/* 				for(var k in goodsData) {*/
/* 					goodsData_html.push(goodsData[k]['ckm_out_warehouse.goods'] + ':' + goodsData[k]['ckm_out_warehouse.number']);*/
/* 				}*/
/* 				goodsData_html.sort();*/
/* */
/* 				html.push(`<tr data-id="${data[i]['ckm_out_warehouse.id']}" data-num ="${data[i]['ckm_out_warehouse.num']}"  data-status="${data[i]['ckm_out_warehouse.status']}">*/
/* 							<td class="center">*/
/*                                 <label class="pos-rel">*/
/*                                     <input type="checkbox" name="check" class="ace"/>*/
/*                                     <span class="lbl"></span>*/
/*                                 </label>*/
/*                             </td>*/
/* */
/*                             <td>*/
/*                              <label class="pos-rel">*/
/*                              	*/
/*                              	<a href="#" class="info btOrange" style="color:#fff !important" title="详情"><i class="fa fa-info "></i></a>*/
/* */
/*                                 <a href="#" class="sp btOrange" contentAuthority="267" data-status = "0" style="display: ${cxApp ? (data[i]['ckm_out_warehouse.status'] == 2 ? 'inline-block' : 'none') : 'none'}; color:#fff !important" title="撤销"><i class="fa fa-rotate-left"></i></a>*/
/* */
/*                         		<a href="#" class="sp btGreen" contentAuthority="154" data-status = "2" style="display: ${spApp ? (data[i]['ckm_out_warehouse.status'] == 0 ?'inline-block' : 'none') : 'none'}; color:#fff !important" title="通过"><i class="fa fa-check-circle-o"></i></a>*/
/* */
/*                         		<a href="#" class="sp btRed" contentAuthority="154" data-status = "1" style="display: ${spApp ? (data[i]['ckm_out_warehouse.status'] == 0 ?'inline-block' : 'none') : 'none'}; color:#fff !important" title="驳回"><i class="fa fa-times-circle"></i></a>*/
/*                              </label>*/
/*                             </td>*/
/* 							*/
/*                             <td data-num="1" style="display:${status[0]};" class="center">*/
/*                                 ${states[data[i]['ckm_out_warehouse.status']]}*/
/*                             </td>*/
/*                             <td data-num="2" style="display:${status[1]};" class="center">*/
/*                                 ${data[i]['ckm_out_warehouse.num']}*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[4]};" data-num="5" data-cid="${data[i]['khm_customer.id']}">*/
/*                                 <a href="#" class="customerDetail pos-rel">${data[i]['khm_customer.name']}</a>*/
/*                                 <label class="pos-rel">*/
/* 				 				<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}" data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>*/
/* 			 				 </label>*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[5]};" data-num="6">*/
/*                                 ${data[i]['khm_customer.customer_num']}*/
/*                             </td>*/
/*                              <td class="center" style="display:${status[16]};" data-num="17">*/
/*                                 ${data[i]['position']['pos_name']+data[i]['position']['pos_num']}*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[6]};" data-num="7">*/
/*                                 ${data[i]['jb_info']['name'] || ""}*/
/*                             </td>*/
/*                             */
/*                             <td class="center" style="display:${status[7]};" data-num="8">*/
/*                                 ${cs.getNowTime(data[i]['ckm_out_warehouse.time'])}*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[9]};" data-num="10"  title="${goodsData_html.join('&#13;')}">*/
/*                                <label style="font-weight:normal;" >${goodsData_html.join('；')}</label>*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[10]};" data-num="17">*/
/*                                 ${data[i]['ckm_out_warehouse.remark']}*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[10]};" data-num="11">*/
/*                                 ${data[i]['create_info'] ? data[i]['create_info']['name'] : ''}*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[11]};" data-num="12">*/
/*                                 ${data[i]['ckm_out_warehouse.create_time'] != '0' ? cs.getNowTime(data[i]['ckm_out_warehouse.create_time'],true) : ''}*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[12]};" data-num="13">*/
/*                                ${data[i]['qr_info'] ? data[i]['qr_info']['name'] : ''}*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[13]};" data-num="14">*/
/*                              ${data[i]['ckm_out_warehouse.qr_time'] != '0' ?cs.getNowTime(data[i]['ckm_out_warehouse.qr_time'],true) : ''}*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[14]};" data-num="15" title="${data[i]['ckm_out_warehouse.month']}">*/
/*                            */
/*                               <label style="width:100px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;" >  ${data[i]['ckm_out_warehouse.month']}</label>*/
/*                             </td>*/
/*                             <td class="center" style="display:${status[15]};" data-num="16">*/
/*                                  ${data[i]['ckm_out_warehouse.qr_remark']}*/
/*                             </td>*/
/*                         </tr>`);*/
/* */
/* 				times = {};*/
/* 			};*/
/* 			$('#datalist').html(html.join(''));*/
/* 			custom.showReamrk();*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/* 			custom.get_custom_info();*/
/* */
/* 			//			edit_in(); //编辑*/
/* 			$("#datalist tr").find('a').click(function() {*/
/* 				if($(this).index() > 0) {*/
/* 					var status = $(this).attr('data-status');*/
/* 					var id = $(this).parents('tr').attr('data-num');*/
/* 					changeStatus(status, id);*/
/* 				}*/
/* 			});*/
/* 			plsp(); //批量审批*/
/* 			seeDetails(data);*/
/* 			//详情*/
/* 			//			$('.info').click(function() {*/
/* 			//				var id = $(this).parents('tr').attr('data-id');*/
/* 			//				var jb_id = $(this).parents('tr').find('td').eq(8).text(); //经办人*/
/* 			//				//          	showMark('.popup_new');*/
/* 			//				ykp.doAjax({*/
/* 			//					url: '/api/api_accountancies/info_io',*/
/* 			//					method: 'post',*/
/* 			//					data: {*/
/* 			//						type: 2,*/
/* 			//						id: id*/
/* 			//					},*/
/* 			//					success: function(res) {*/
/* 			//						//                      disData11*/
/* 			//						var data = res.data;*/
/* 			//						var type = ['凭证', '单据', '证件'];*/
/* 			//						showMark('#template');*/
/* 			//						$('#showBox .title').text('出库详情');*/
/* 			//						//console.log()*/
/* 			//						$("#templateBox .disData0").html(type[parseInt(data['type']) - 1]);*/
/* 			//						$("#templateBox .disData1").html(type[parseInt(data['type']) - 1] + "仓");*/
/* 			//						$("#templateBox .disData2").html(data['goods']);*/
/* 			//						$("#templateBox .disData3").html(data['number']);*/
/* 			//						$("#templateBox .disData4").html(data['time']);*/
/* 			//						$("#templateBox .disData5").html(data['month']);*/
/* 			//						$("#templateBox .disData8").html(jb_id);*/
/* 			//						$("#templateBox .disData9").html(data['remark'] ? data['remark'] : '空');*/
/* 			//					}*/
/* 			//				});*/
/* 			//			})*/
/* */
/* 			function seeDetails(data) {*/
/* 				$('.info').unbind('click').click(function() {*/
/* 					var index = $(this).parents('tr').index();*/
/* 					var _data = data[index];*/
/* */
/* 					showMark('#template1');*/
/* 					$('#showBox .title').text('出库详情');*/
/* */
/* 					//入库基本信息*/
/* 					var field;*/
/* 					$('#templateCon [field]').each(function(i, e) {*/
/* 						field = 'ckm_out_warehouse.' + $(this).attr('field');*/
/* 						if($(this).attr('field') == 'jb_id' || $(this).attr('field') == 'create_id' || $(this).attr('field') == 'qr_id') {*/
/* 							$(this).text(_data[field] != '0' ? employees[_data[field]] : '');*/
/* 							return;*/
/* 						}*/
/* 						if($(this).attr('field') == 'time' || $(this).attr('field') == 'create_time' || $(this).attr('field') == 'qr_time') {*/
/* 							console.log(_data[field])*/
/* 							$(this).text(_data[field] ? cs.getNowTime(_data[field],true) : '');*/
/* 							return;*/
/* 						}*/
/* 						if($(this).attr('field') == 'status') {*/
/* 							$(this).text(_data[field] == '1' ? '未通过' : (_data[field] == '2' ? '已通过' : '待审批	'));*/
/* 							return;*/
/* 						}*/
/* 						if($(this).attr('field') == 'customer_id') {*/
/* 							$(this).text(customers[_data[field]]);*/
/* 							return;*/
/* 						}*/
/* */
/* 						$(this).text(_data[field]);*/
/* 					});*/
/* */
/* 					//物品数据*/
/* 					var goodsData = _data['goodsList'];*/
/* 					var pz_html = []; //凭证html*/
/* 					var pj_html = []; //票据html*/
/* 					var zj_html = []; //证件html*/
/* */
/* 					for(var i in goodsData) {*/
/* 						//凭证*/
/* 						if(goodsData[i]['ckm_out_warehouse.type'] == '1') {*/
/* 							pz_html.push(*/
/* 								`<tr>*/
/* 								<td in_title>物品名称：</td>*/
/* 								<td in_content>*/
/* 									<span>${goodsData[i]['ckm_out_warehouse.goods']}</span>*/
/* 								</td>*/
/* 								<td in_title="">数量</td>*/
/* 								<td in_content>*/
/* 									<span>${goodsData[i]['ckm_out_warehouse.number']}</span>*/
/* 								</td>*/
/* 							</tr>`*/
/* 							);*/
/* 						}*/
/* 						//票据*/
/* 						if(goodsData[i]['ckm_out_warehouse.type'] == '2') {*/
/* 							pj_html.push(*/
/* 								`<tr>*/
/* 								<td in_title>物品名称：</td>*/
/* 								<td in_content>*/
/* 									<span>${goodsData[i]['ckm_out_warehouse.goods']}</span>*/
/* 								</td>*/
/* 								<td in_title="">数量</td>*/
/* 								<td in_content>*/
/* 									<span>${goodsData[i]['ckm_out_warehouse.number']}</span>*/
/* 								</td>*/
/* 							</tr>`*/
/* 							);*/
/* 						}*/
/* 						//证件*/
/* 						if(goodsData[i]['ckm_out_warehouse.type'] == '3') {*/
/* 							zj_html.push(*/
/* 								`<tr>*/
/* 								<td in_title>物品名称：</td>*/
/* 								<td in_content>*/
/* 									<span>${goodsData[i]['ckm_out_warehouse.goods']}</span>*/
/* 								</td>*/
/* 								<td in_title="">数量</td>*/
/* 								<td in_content>*/
/* 									<span>${goodsData[i]['ckm_out_warehouse.number']}</span>*/
/* 								</td>*/
/* 							</tr>`*/
/* 							);*/
/* 						}*/
/* 					}*/
/* */
/* 					$('#templateCon .pz tbody').append(pz_html.length > 0 ? pz_html.join('') : '<tr><td colspan="30" style="text-align:center !important;">暂无数据</td></tr>');*/
/* 					$('#templateCon .pj tbody').append(pj_html.length > 0 ? pj_html.join('') : '<tr><td colspan="30" style="text-align:center !important;">暂无数据</td></tr>');*/
/* 					$('#templateCon .zj tbody').append(zj_html.length > 0 ? zj_html.join('') : '<tr><td colspan="30" style="text-align:center !important;">暂无数据</td></tr>');*/
/* 				});*/
/* 			}*/
/* 		}*/
/* */
/* 		function plsp() {*/
/* 			$('.plSp').click(function() {*/
/* 				var num = 0;*/
/* 				var status = '';*/
/* 				var coldata = [];*/
/* 				var Statu = false;*/
/* 				$('#datalist').find('input[type=checkbox]').each(function(i) {*/
/* 					if($(this).is(':checked')) {*/
/* 						num++;*/
/* 						status = $(this).parents('tr').attr('data-status') == '0' ? 2 : 0;*/
/* 						if($(this).parents('tr').attr('data-status') == 1) {*/
/* 							ykp.prompt('审批失败状态不能批量审批!');*/
/* 							Statu = false;*/
/* 						} else {*/
/* 							coldata.push({*/
/* 								num: $(this).parents('tr').attr('data-num'),*/
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
/* 							url: "/api/api_accountancies/batch_sh_out_new",*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								data: JSON.stringify(coldata),*/
/* 							},*/
/* 							success: function(res) {*/
/* 								ykp.prompt('审批成功');*/
/* 								getList(1);*/
/* 							}*/
/* 						})*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//编辑出库*/
/* 		function edit_in() {*/
/* 			$('._edit').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				showMark('.popup_new');*/
/* 				$('#showBox .title').html('编辑出库');*/
/* 				$('#templateCon .add_info').hide();*/
/* 				$('#templateCon .edit_info').show();*/
/* 				$('#templateCon [company="2"]').show();*/
/* 				$('#templateCon [company="1"]').hide();*/
/* */
/* 				timeplug();*/
/* 				getInfo(true);*/
/* */
/* 				//校验数据*/
/* 				validateData(true);*/
/* */
/* 				for(var i in employees) {*/
/* 					if(employees[i]) {*/
/* 						$('#templateCon select[addfield="jb_id"]').append(new Option(employees[i], i));*/
/* 					}*/
/* 				}*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_accountancies/info_io',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						type: 2,*/
/* 						id: id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						//console.log(res.data);*/
/* 						var data = res.data;*/
/* 						getGoods(data['customer_id'], data['type'], false, data['goods']);*/
/* 						//添加默认数据*/
/* 						$('#templateCon').find('[addfield]').each(function(i) {*/
/* 							if($(this).attr('addfield') == 'customer_id') {*/
/* 								$(this).attr('customer_id', data['customer_id']).val(data['customer_name']);*/
/* 								return;*/
/* 							}*/
/* 							$(this).attr('addfield') == 'time' ? $(this).val(cs.getNowTime(data[$(this).attr('addfield')])) : $(this).val(data[$(this).attr('addfield')]);*/
/* 						})*/
/* 						$('#templateCon').find('[coldata]').each(function(i, e) {*/
/* 							$(this).val(data[$(this).attr('coldata')]);*/
/* 						})*/
/* 						//添加默认物品*/
/* 						$('#templateCon input[coldata="ck_name"]').val($('#templateCon select[coldata="type"]').find('option:selected').text().trim().replace(/出库/, '仓'));*/
/* */
/* 						changeName(true);*/
/* 						submit(id);*/
/* 					}*/
/* 				});*/
/* 			});*/
/* 		}*/
/* */
/* 		//获取相对应的出库物品*/
/* 		function getGoods(id, type, ele, goods) {*/
/* 			ykp.doAjax({*/
/* 				async: false,*/
/* 				url: '/api/api_accountancies/get_num_info',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					type: type,*/
/* 					customer_id: id*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					var goods_html = ['<option value="">请选择</option>'];*/
/* 					for(var i in data) {*/
/* 					    if(data[i]['goods'] != "文件袋"){*/
/*                             goods_html.push('<option value="' + data[i]['goods'] + '" count="' + data[i]['count'] + '">' + data[i]['goods'] + '</option>');*/
/* 						}*/
/* 					}*/
/* 					if(ele) {*/
/* 						ele.html(goods_html.join(''));*/
/* 						return;*/
/* 					}*/
/* */
/* 					$('#templateCon [coldata="goods"]').html(goods_html.join(''));*/
/* */
/* 					if(goods) {*/
/* 						$('#templateCon [coldata="goods"]').val(goods);*/
/* 					}*/
/* 				}*/
/* 			});*/
/* */
/* 		}*/
/* */
/* 		//切换公司 或者 切换出库类型  获取相对应的出库物品*/
/* 		function changeName(statu) {*/
/* 			$('#templateCon select[coldata="type"]').unbind('change').change(function() {*/
/* 				if(statu) {*/
/* 					$('#templateCon').find('[coldata="goods"]').find('option').not(':first').remove();*/
/* 					$('#templateCon').find('[coldata="ck_name"]').val('');*/
/* 					$('#templateCon').find('[coldata="number"]').val('');*/
/* */
/* 					var id = $('#templateCon [company="2"]').attr('customer_id');*/
/* 					var type = $(this).val();*/
/* 					if(type != '') {*/
/* 						$('#templateCon').find('[coldata="ck_name"]').val($(this).find('option:selected').text().trim().replace(/出库/, '仓'));*/
/* 						if(id != '') {*/
/* 							getGoods(id, type);*/
/* 						}*/
/* 					}*/
/* 					return;*/
/* 				}*/
/* 				// console.log($(this).parents('tr').find('[coldata="goods"]'))*/
/* 				$(this).parents('tr').find('[coldata="goods"]').find('option').not(':first').remove();*/
/* 				$(this).parents('tr').find('[coldata="ck_name"]').val('');*/
/* 				$(this).parents('tr').find('[coldata="number"]').val('');*/
/* 				var id = $('#templateCon [company="1"]').val();*/
/* 				var type = $(this).val();*/
/* 				if(type != '') {*/
/* 					$(this).parents('tr').find('[coldata="ck_name"]').val($(this).find('option:selected').text().trim().replace(/出库/, '仓'));*/
/* 					if(id != '') {*/
/* 						getGoods(id, type, $(this).parents('tr').find('[coldata="goods"]'));*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//短信发送*/
/* 		function sendMsg(id, type, param) {*/
/* 			ykp.doAjax({*/
/* 				async: false,*/
/* 				url: '/api/api_common/send_customer',*/
/* 				data: {*/
/* 					customer_id: id,*/
/* 					type: type,*/
/* 					param: JSON.stringify(param)*/
/* 				},*/
/* 				method: 'post',*/
/* 				success: function(res) {*/
/* 					ykp.prompt('短信发送成功！');*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//对点击驳回进行处理*/
/* 		function changeStatus(status, id) {*/
/* 			var data = {*/
/* 				url: '/api/api_accountancies/sh_out_new',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					num: id,*/
/* 					status: status*/
/* 				}*/
/* 			}*/
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
/* 						data.data.qr_remark = approve_reply;*/
/* 					// data.data.approve_reply = approve_reply;*/
/* 					setStatus(data);*/
/* 					$('.close_label').parents('.label_popup').fadeOut();	*/
/* 					}*/
/* 				*/
/* 				})*/
/* 				cs.closePop();*/
/* 			} else if(status == 0) {*/
/* //				bootbox.confirm('确认撤销审批？', function(flag) {*/
/* //					*/
/* //					if(flag) {*/
/* //						setStatus(data);*/
/* //					}*/
/* //				})*/
/*                 layui.use('layer',function(){*/
/* 						var layer = layui.layer;*/
/* 						layer.confirm('确认撤销审批？',function(flag){*/
/* 							if(flag){*/
/*                 			layer.closeAll();*/
/*                 			setStatus(data);*/
/*                 		}*/
/* 						})*/
/* 					})*/
/* 		}else if(status == 2){*/
/* 			ykp.prompt('审批通过！');*/
/* 			setStatus(data);*/
/* 		} else {*/
/* 				setStatus(data);*/
/* 			}*/
/* 		}*/
/* */
/* 		//对点击审批 || 撤销进行处理*/
/* 		function setStatus(data, statu) {*/
/* 			ykp.doAjax({*/
/* 				url: data.url,*/
/* 				method: data.method,*/
/* 				data: data.data,*/
/* 				success: function(res) {*/
/* 					getList();*/
/* //					if(!statu) {*/
/* //						ykp.prompt('审批成功!');*/
/* //						cs.close();*/
/* //						getList();*/
/* //					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		function submit(id) {*/
/* 			$('#templateCon .sure_button').click(function() {*/
/* 				if(!cs.popValidate()) {*/
/* 					return;*/
/* 				};*/
/* 				var data = {};*/
/* 				$('#templateCon').find('[addfield]').not(':hidden').each(function(i) {*/
/* 					if(id && $(this).attr('addfield') == 'customer_id') {*/
/* 						data[$(this).attr('addfield')] = $(this).attr('customer_id');*/
/* 						return true;*/
/* 					}*/
/* 					data[$(this).attr('addfield')] = $(this).attr('addfield') == 'time' ? parseInt(new Date($(this).val()) / 1000) : $(this).val();*/
/* 				})*/
/* */
/* 				if(id) {*/
/* 					$('#templateCon').find('[coldata]').not(':hidden').each(function(i) {*/
/* 						data[$(this).attr('coldata')] = $(this).val();*/
/* 					})*/
/* 				}*/
/* 				//获取送单方式信息*/
/* 				var datae = {*/
/* 					express: $('#templateCon [title="express"]').val().trim(),*/
/* 					num: $('#templateCon [title="expressnum"]').val().trim(),*/
/* 					cost: $('#templateCon [title="cost"]').val().trim()*/
/* 				}*/
/* 				data['data_type'] = $('#templateCon [title="getway"]').val();*/
/* 				if(data.data_type == 3) {*/
/* 					data['data'] = datae;*/
/* 				}*/
/* 				if(data.data_type == 3 && (data.data.express == '' || data.data.num == '' ||*/
/* 						data.data.cost == '')) {*/
/* 					ykp.prompt('快递信息必须填写');*/
/* 					return;*/
/* 				}*/
/* */
/* 				if(data.data_type == 3) {*/
/* 					data['data'] = JSON.stringify(datae);*/
/* 				}*/
/* */
/* 				//短信参数*/
/* 				var param = {*/
/* 					name: id ? $('#templateCon input[addfield="customer_id"]').val() : $('#templateCon select[addfield="customer_id"] option:selected').text(),*/
/* 					time: $('#templateCon [addfield="month"]').val(),*/
/* 					user: $('#templateCon [addfield="jb_id"] option:selected').text()*/
/* 				}*/
/* 				var customer_id = id ? $('#templateCon input[addfield="customer_id"]').attr('customer_id') : $('#templateCon select[addfield="customer_id"]').val();*/
/* 				var is_send = false;*/
/* 				if($('#templateCon #sendMsg input:checked').val() == 1) {*/
/* 					is_send = true;*/
/* 				}*/
/* 				var contract_id = $('#templateCon [addfield="contract_code"]').val();*/
/* 				//				data.contract_id = contract_id;*/
/* 				data.jb_id = $('#templateCon [addfield="jb_id"]').val()*/
/* */
/* 				var data_pj = [];*/
/* 				//服务月份*/
/* 				var service_month = $('#templateCon #pzListsd').val();*/
/* */
/*                 //凭证切换*/
/* */
/* 				//1 凭证  2票据  3证件*/
/* 				if($('#templateCon #pzList1').val()) {*/
/* 					$('#templateCon #pzList1').val().forEach(function(item) {*/
/* 						data_pj.push({*/
/* 							goods: item.replace(/\./, ''),*/
/* 							type: 1,*/
/* 							number: 1*/
/* 						});*/
/* 					})*/
/* */
/* 				};*/
/* */
/*                 //票据*/
/* 				if($('#templateBox .bill tbody').find('tr').length > 0) {*/
/* */
/* 					$('#templateBox .bill tbody').find('tr').each(function() {*/
/* 						if($(this).find('.snum').val().trim() != 0) {*/
/* 							data_pj.push({*/
/* 								'goods': $(this).find('td').eq(1).text(),*/
/* 								'type': "2",*/
/* 								"number": $(this).find('.snum').val().trim()*/
/* 							})*/
/* 						}*/
/* */
/* 					})*/
/* 				}*/
/* 				//证件*/
/* 				if($('#templateBox .certificate tbody').find('tr').length > 0) {*/
/* 					$('#templateBox .certificate tbody').find('tr').each(function() {*/
/* 						if($(this).find('.snum').val().trim() != 0) {*/
/* 							data_pj.push({*/
/* 								'goods': $(this).find('td').eq(1).text(),*/
/* 								'type': "3",*/
/* 								"number": $(this).find('.snum').val().trim()*/
/* 							})*/
/* 						}*/
/* 					})*/
/* 				}*/
/* */
/* 				if(data_pj.length == 0) {*/
/* 					data_pj.push({*/
/* 						goods: "文件袋",*/
/* 						type: 0,*/
/* 						number: 1*/
/* 					});*/
/* 				}*/
/* */
/*                 data['dataList'] = JSON.stringify(data_pj);*/
/* */
/*                 data['year_month_id'] = service_month && service_month.length > 0 ? service_month.join(','): "";*/
/*                 if(!id) {*/
/* 					var colData = [];*/
/* 					var _colData = {};*/
/* 					$('#templateCon tbody tr').each(function(i, e) {*/
/* 						$(e).find('[colData]').not('[colData="ck_name"]').each(function(index, element) {*/
/* 							_colData[$(element).attr('colData')] = $(element).val();*/
/* 						});*/
/* 						colData.push(_colData);*/
/* 						_colData = {};*/
/* 					});*/
/* 					data['colData'] = JSON.stringify(colData);*/
/* 				}*/
/* */
/* 				data.stype = 2;*/
/* 				if(id) {*/
/* 					data.id = id;*/
/* 				}*/
/* 				if($('#templateCon #pzListsd').val()) {*/
/*                     data['contacts'] = $('#templateBox .people').text();*/
/* 					data['tel'] = $('#templateBox .tel').text();*/
/* 					data['address'] = $('#templateBox #address').val();*/
/*                     if(!data['contacts']) {*/
/*                         ykp.prompt('请选择联系人');*/
/*                         return false;*/
/*                     }else if(!data['tel']){*/
/*                         ykp.prompt('请选填写联系电话');*/
/*                         return false;*/
/* 					}else if(!data['address']){*/
/*                         ykp.prompt('请选择联系地址');*/
/*                         return false;*/
/* 					}*/
/*                 }*/
/* */
/* 				data['remark'] = $('#templateBox .rmark').val();*/
/* */
/* 				if(!data["jb_id"]) {*/
/* 					ykp.prompt('请选择经办人')*/
/* 					return false;*/
/* 				}*/
/*                 console.log(data);*/
/*                 		url = id ? '/api/api_accountancies/edit_io' : '/api/api_accountancies/add_io_batch';*/
/*                         ykp.doAjax({*/
/*                             url: "/api/api_service/add_send_list_new2",*/
/*                             method: 'post',*/
/*                             data: data,*/
/*                             success: function(res) {*/
/*                                 //将审批状态更改为审批中*/
/*                                 if(id) {*/
/*                                     var setdata = {};*/
/*                                     var dat = {*/
/*                                         'type': 2,*/
/*                                         id: id,*/
/*                                         status: 0*/
/*                                     };*/
/*                                     setdata['url'] = '/api/api_accountancies/sh_io';*/
/*                                     setdata['method'] = 'post';*/
/*                                     setdata['data'] = dat;*/
/*                                     setStatus(setdata, true);*/
/*                                 }*/
/* */
/*                                 //是否发送短信*/
/*                                 if(is_send) {*/
/*                                     sendMsg(customer_id, '准备送单', param);*/
/*                                 }*/
/* */
/*                                 var msg = id ? '编辑成功' : '添加成功!';*/
/*                                 ykp.prompt(msg);*/
/* */
/*                                 cs.close();*/
/*                                 getList();*/
/*                             }*/
/*                         });*/
/* 			});*/
/* 		}*/
/* */
/* 		//切换公司获取相应的长期合同订单编号*/
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
/* 				cs.getYearAndMonth('2015-1-1', '2025-12-31', '#templateBox #pzList');*/
/*                 cs.getYearAndMonth('2014-1-1', '2025-12-31', '#templateBox #pzListsd','',true,true);*/
/* 				select2();*/
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
/* 						getGoods(customer_id);*/
/* 					}*/
/* 				});*/
/* */
/* 				$('#templateCon #pzListsd').change(function() {*/
/* 					if($(this).val()) {*/
/* 						$('#templateCon .outInfo').show();*/
/* 					} else {*/
/* 						$('#templateCon .outInfo').hide();*/
/* 					}*/
/* 				})*/
/* 			});*/
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
/* 		function getGoods(customer_id) {*/
/* 			ykp.doAjax({*/
/* 				url: "/api/api_accountancies/get_num_info",*/
/* 				method: "post",*/
/* 				data: {*/
/* 					customer_id: customer_id*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					var pj = [],*/
/* 						zj = [],*/
/* 						pz = [];*/
/*                     for(var i in data) {*/
/*                         if(data[i]['goods'] != "文件袋") {*/
/*                             if (data[i].type == 2) {*/
/*                                 pj.push(`<tr><td><a href="javascript:;" class="delTicket">-</a></td><td>${data[i].goods}</td>*/
/* 							<td>${data[i].count}</td><td><input data-num="${data[i].count}" value="0" class="snum"/>  </td></tr>`)*/
/*                             } else if (data[i].type == 3) {*/
/*                                 zj.push(`<tr><td><a href="javascript:;" class="delTicket">-</a></td><td>${data[i].goods}</td>*/
/* 							<td>${data[i].count}</td><td><input data-num="${data[i].count}" value="0" class="snum"/></td></tr>`)*/
/*                             } else {*/
/*                                 pz.push('<option value="' + data[i]['goods'] + '">' + data[i]['goods'] + '</option>')*/
/*                             }*/
/*                         }*/
/* 					}*/
/*          		     pz.sort(function(a,b){*/
/*               			return b.localeCompare(a)*/
/*             			 });*/
/* 					$('#templateBox #ticketBody').html(pj.join(','));*/
/* 					$('#templateBox #cardBody').html(zj.join(','));*/
/* 					$('#templateBox #pzList1').html(pz);*/
/*                     select2();*/
/* 					changeList('.delTicket', '.delNum');*/
/* 				}*/
/* 			})*/
/* */
/* 			ykp.doAjax({*/
/* 				url: "/api/api_contact_book/get_address_customer",*/
/* 				method: "post",*/
/* 				data: {*/
/* 					customer_id: customer_id*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					var contacts = '',*/
/* 						addresses = '';*/
/* 					for(var i in data) {*/
/* 						for(var j in data[i].address_list) {*/
/* 							addresses += `<option value="${data[i].address_list[j]['address']}">${data[i].address_list[j]['address']}</option>`*/
/* 						}*/
/* 						contacts += `<option value="${data[i]['id']}" selected="${data[i]['is_main']==1?'selected':''  }">${data[i]['username']} </option>`;*/
/* 					}*/
/* */
/* 					$('#templateCon  .people').html(contacts);*/
/* 					$('#templateCon  #address').html(addresses);*/
/* 					$('#templateCon  .tel').text(data[$('#templateCon  .people').get(0).selectedIndex]['phone']);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		/***/
/* 		 *   删除本条记录  */
/* 		 *	  减少数量 最少为1*/
/* 		 *//* */
/* 		function changeList(el, el1) {*/
/* 			//删除本条记录  */
/* 			$(el).click(function() {*/
/* 				$(this).parents('tr').remove();*/
/* 			})*/
/* 			//减少数量 最少为1*/
/* 			$(el1).mousedown(function() {*/
/* 				//console.log(1)*/
/* 				$(this).next().text() > 1 ? $(this).next().text(parseInt($(this).next().text()) - 1) : "";*/
/* 			})*/
/* */
/* 			$('.snum').change(function() {*/
/* 				if($(this).val() < 0) {*/
/* 					$(this).val(1);*/
/* 				} else if($(this).val() > parseInt($(this).attr('data-num'))) {*/
/* 					$(this).val($(this).attr('data-num'));*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//切换订单号获取凭证和服务月份以及物品信息*/
/* 		function changeContractCodeGetMonthAndGoods() {*/
/* 			$('#templateCon [addfield="contract_code"]').change(function() {*/
/* 				//清空票据talbe和证件table,按钮删除active class*/
/* 				$('#templateCon .connects-content>table').remove();*/
/* 				$('#templateCon .buttons button').removeClass('active');*/
/* */
/* 				if(!$(this).val()) {*/
/* 					$('#templateCon .voucher .voucher_div').html('');*/
/* 					$('#templateCon .service_month .voucher_div').html('');*/
/* 					return;*/
/* 				}*/
/* */
/* 				//获取凭证和服务月份*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_contract/get_month_pz',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						contract_id: $(this).val()*/
/* 					},*/
/* 					success: function(res) {*/
/* 						//将票据交接，证件交接按钮取消禁用*/
/* 						$('#templateCon .buttons button').not(':first').prop('disabled', false);*/
/* */
/* 						var data = res.data;*/
/* */
/* 						//凭证 服务所有月份*/
/* 						var all_month = data['all_month'];*/
/* */
/* 						//已完成服务月份*/
/* 						var done_month = data['done_month'];*/
/* */
/* 						//已完成凭证月份*/
/* 						var pz_month = data['pz_month'];*/
/* */
/* 						//服务月份html*/
/* 						var service_html = [];*/
/* 						//拼争月份html*/
/* 						var pz_html = [];*/
/* */
/* 						var index; //下标不等于-1;则打钩禁用*/
/* 						for(var i = 0; i < all_month.length; i++) {*/
/* 							index = $.inArray(all_month[i], done_month);*/
/* 							if(all_month[i]) {*/
/* 								service_html.push(*/
/* 									`<label class="voucher_label">*/
/* 										<input type="checkbox" data-time="${all_month[i]}">*/
/* 										<span class="voucher_month">${all_month[i]}</span> */
/* 									</label>`*/
/* 								);*/
/* 							}*/
/* 						}*/
/* */
/* 						for(var i in pz_month) {*/
/* 							if(all_month[i]) {*/
/* 								pz_html.push(*/
/* 									`<label class="voucher_label">*/
/* 						                <input type="checkbox"  data-time="${all_month[i]}">*/
/* 						                <span class="voucher_month">${all_month[i]}</span> */
/* 						              </label>`);*/
/* 							}*/
/* 						}*/
/* 						$('#templateCon .voucher .voucher_div').html(pz_html.join(''));*/
/* 						$('#templateCon .service_month .voucher_div').html(service_html.join(''));*/
/* */
/* 						//选中凭证月份 默认选中 服务月份*/
/* 						// voucherToService();*/
/* 					}*/
/* 				});*/
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
/* 						//						changeJoinTable(goods);*/
/* 					}*/
/* 				})*/
/* 			});*/
/* 		}*/
/* */
/* 		//获取所有公司信息  和 所有出库月份*/
/* 		function getInfo(statu) {*/
/* 			$.get(ykp.api_url + '/api/api_common/get_time', function(res) {*/
/* 				var time = cs.getNowTime(res);*/
/* 				var year = time.substring(0, time.indexOf('-'));*/
/* 				for(var i = 1; i < 13; i++) {*/
/* 					if(i < 10) {*/
/* 						i = '0' + i;*/
/* 					}*/
/* 					$('#templateCon select[addfield="month"]').append(new Option(year + i, year + i));*/
/* 				}*/
/* 			});*/
/* */
/* 			if(!statu) {*/
/* */
/* 				ykp.doAjax({*/
/* 					url: '/api/api_customer/f7',*/
/* 					method: 'post',*/
/* 					async: false,*/
/* 					data: {*/
/* 						select: 'khm_customer.id,khm_customer.name,khm_customer.customer_num',*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						$('.advandced-search').select2({*/
/* 							allowClear: true*/
/* 						});*/
/* */
/* 						var customer_html = [];*/
/* 						for(var i in data) {*/
/* 							customer_html.push(*/
/* 								`<option value="${data[i]['id']}">${data[i]['customer_num']}(${data[i]['name']})</option>`*/
/* 							);*/
/* 						}*/
/* 						$('#templateCon [addfield="customer_id"]').append(customer_html.join(''));*/
/* */
/* 						changeCompanyGetNum();*/
/* */
/* 						$('#templateCon [addfield="customer_id"]').on("change", function() {*/
/* 							$('#templateCon tbody').html('');*/
/* 						});*/
/* */
/* 					}*/
/* 				});*/
/* 				ykp.doAjax({*/
/* 					async: false,*/
/* 					url: '/api/api_accountancies/get_cus',*/
/* 					method: 'post',*/
/* 					data: {},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						$('#templateBox .name').select2({*/
/* 							allowClear: true*/
/* 						})*/
/* */
/* 					}*/
/* 				});*/
/* 			}*/
/* 		}*/
/* */
/* 		//普通搜索*/
/* 		function generalSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_accountancies/index_new',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					type: 2,*/
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
/* 		//自定义table*/
/* 		cs.custorm_check('#dynamic-table', '#datalist', true);*/
/* */
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
/* 		//校验数据*/
/* 		function validateData(statu) {*/
/* 			$('#templateCon [coldata="number"]').unbind('blur').blur(function() {*/
/* 				if(statu) {*/
/* 					var num = $('#templateCon [coldata="goods"]').find('option:selected').attr('count');*/
/* 					num = num ? parseInt(num) : 0;*/
/* 					var _num = $(this).val().trim() ? parseInt($(this).val().trim()) : 0;*/
/* 					if(_num > num) {*/
/* 						ykp.prompt('出库数量大于入库数量，请重新输入');*/
/* 						$(this).val('');*/
/* 					}*/
/* 					return;*/
/* 				}*/
/* 				var num = $(this).parents('tr').find('[coldata="goods"]').find('option:selected').attr('count');*/
/* 				num = num ? parseInt(num) : 0;*/
/* 				var _num = $(this).val().trim() ? parseInt($(this).val().trim()) : 0;*/
/* 				if(_num > num) {*/
/* 					ykp.prompt('出库数量大于入库数量，请重新输入');*/
/* 					$(this).val('');*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//     <label> 出库物品： </label>*/
/* 		// <select class="goods required" addfield="goods" msg="请选择出库物品">*/
/* 		// 	<option value="">  请选择 </option>*/
/* 		// </select>*/
/* 		// <label> 出库数量： </label>*/
/* 		// <input type="number" class="in_num required" addfield="number" msg="出库数量必须大于零" validate="int" />*/
/* 		// <label> 出库月份： </label>*/
/* 		// <select class="in_num required" addfield="month" msg="请选择出库月份">*/
/* 		// 	<option value="">  请选择 </option>*/
/* 		// </select>*/
/* 		// <label> 出库日期： </label>*/
/* 		// <div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 		// 	<input class="date-timepicker1 required" addfield="time" msg="出库日期不能为空" class="form-control" style="height: 30px; width: 150px;">*/
/* 		// 	<span class="input-group-addon" style="width:30px;">*/
/* 		//                        <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 		//                    </span>*/
/* 		// </div> */
/* */
/* 		//添加一条物品信息*/
/* 		function addItem() {*/
/* 			$('#templateCon .increase').click(function() {*/
/* 				if($('#templateCon .decrease').length == 5) {*/
/* 					ykp.prompt('一次最多只能添加五件物品！');*/
/* 					return;*/
/* 				}*/
/* 				$(this).parents('table').find('tbody').append(*/
/* 					`<tr>*/
/* 						<td><label class="decrease" style="font-size:20px;text-align:center;width:10px;cursor:pointer;">-</label></td>*/
/* 						<td>*/
/* 							<select class="type required" colData="type"  style="width:100px;" id="select" msg="请选择出库类型">*/
/* 								<option value="">请选择</option>*/
/* 								<option value="1"> 凭证出库 </option>*/
/* 								<option value="2"> 单据出库 </option>*/
/* 								<option value="3"> 证件出库 </option>*/
/* 							</select>*/
/* 						</td>*/
/* 						<td>*/
/* 							<input type="text" colData="ck_name" disabled class="in_num required" style="width:70px;" msg="仓库名称不能为空" /> */
/* 						</td>*/
/* 						<td>*/
/* 							<select class="goods required" style="width:120px;" colData="goods" msg="请选择出库物品">*/
/* 								<option value="">请选择</option>*/
/* 							</select>*/
/* 						</td>*/
/* 						<td>*/
/* 							<input type="number" style="width:70px;" class="in_num required" colData="number" msg="出库数量必须大于零" validate="int" />*/
/* 						</td>*/
/* 					</tr>`*/
/* 				);*/
/* */
/* 				timeplug();*/
/* 				removeItem();*/
/* 				changeName();*/
/* 				//校验数据*/
/* 				validateData();*/
/* 			});*/
/* 		}*/
/* */
/* 		//删除一条物品信息*/
/* 		function removeItem() {*/
/* 			$('#templateCon .decrease').unbind('click').click(function() {*/
/* 				$(this).parents('tr').remove();*/
/* 			});*/
/* 		}*/
/* */
/* 		function getway() {*/
/* 			$("#templateCon #get_way select").change(function() {*/
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
/* 		//添加出库*/
/* 		$('.add').unbind('click').click(function() {*/
/* 			showMark('.popup_new');*/
/* 			//加载面板*/
/* 			getway()*/
/* */
/* 			$('#showBox .title').text('添加出库');*/
/* 			$('#templateCon .add_info').show();*/
/* 			$('#templateCon [company="1"]').show();*/
/* 			$('#templateCon [company="3"]').hide();*/
/* 			$('#templateCon .edit_info').hide();*/
/* */
/* 			timeplug();*/
/* */
/* 			getInfo();*/
/* */
/* 			//添加一条物品信息*/
/* 			addItem();*/
/* */
/* 			for(var i in employees) {*/
/* 				if(employees[i]) {*/
/* 					$('#templateCon select[addfield="jb_id"]').append(new Option(employees[i], i));*/
/* 				}*/
/* 			}*/
/* 			layui.use('element', function() {*/
/* 				var element = layui.element;*/
/* 				element.init('collapse');*/
/* 			});*/
/* 			submit();*/
/* 		});*/
/* 	});*/
/* </script>*/
