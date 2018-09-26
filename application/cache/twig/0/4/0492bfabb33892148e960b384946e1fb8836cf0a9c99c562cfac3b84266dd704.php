<?php

/* admin/financialManagement/collectionRecord.html */
class __TwigTemplate_e8e8f41d92ff710cda0355885e691c0d1cfcf2628691d1c44b0e970d438ca887 extends Twig_Template
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
\t#templateBox {
\t\tmargin-top: 0;
\t}
\t
\t#templateBox .form-horizontal .form-group {
\t\tmargin-bottom: 5px;
\t}
\t
\t#templateBox .form-horizontal .form-group>div {
\t\twidth: 60%;
\t}
\t
\t#templateBox .form-horizontal .form-group label {
\t\twidth: 140px;
\t}
\t
\t#templateBox .form-horizontal .form-group div span {
\t\tline-height: 30px;
\t\theight: 30px;
\t}
\t
\t#templateBox .form-horizontal .form-group div span input {
\t\tpadding: 0;
\t\twidth: 250px;
\t}
\t
\t#heightsearch1 .row .heiSer {
\t\tmargin-right: 5px;
\t\tmargin-top: 5px;
\t}
\t
\t#templateCon label {
\t\twidth: 72px;
\t}
\t
\t.tdboder {
\t\tborder: none !important;
\t}
\t#templateCon td{
\t\tpadding: 7px !important;
\t}
</style>

<div class=\" widget-main\">

\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<div class=\"row\" style=\"margin-top: 20px;\" id=\"topTool\">
\t\t\t\t<!--<h3 class=\"header smaller lighter blue\">送单</h3>-->
\t\t\t\t<div style=\"margin-top: 15px !important;\">
\t\t\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<input type=\"text\" pts=0 id=\"\" sear=\"cwm_receivables.num\" placeholder=\"收款编号\" class=\"\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<input type=\"text\" pts=0 id=\"\" sear=\"khm_customer.name\" placeholder=\"企业名称\" class=\"\" />
\t\t\t\t</div>
\t\t</div>\t\t
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<input type=\"text\" pts=0 id=\"\" sear=\"cwm_receivables.order_id\" placeholder=\"订单编号\" class=\"\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<select style=\"width: 180px\" pts=3 sear=\"cwm_receivables.receiver\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\">收款人 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<select style=\"width: 180px\" pts=3 sear=\"cwm_receivables.create\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\">创建人 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<select style=\"width: 180px\" pts=3 sear=\"cwm_receivables.confirm\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\">审批人 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
                        <i class=\"fa fa-search\"></i>
                    </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button id=\"heightsearch\" type=\"button\" title=\"高级搜索\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
                        <i class=\"fa fa-filter\"></i>
                    </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn btn-info btn-sm\" style=\" background-color: #32CD32\t !important;\">
\t                    <i class=\"fa fa-refresh\"></i>
\t                </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"281\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button title=\"收款\" class=\"btn btn-info  btn-sm getMoney\" style=\"background-color: #32CD32 !important;background: #32CD32 !important;\">
\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t            </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"281\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button class=\"mergeItem btn btn-info btn-sm\" title=\"导入一次性合同\" type=\"button\" imp=\"0\" style=\"background-color: #1E9FFF !important; border-color:#1E9FFF ;\">
\t\t\t\t\t\t<i class=\"fa fa-sign-in\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"281\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button class=\"mergeItem btn btn-info btn-sm\" title=\"导入长期合同\" type=\"button\" imp=\"1\" style=\"background-color: #1E9FFF !important; border-color:#1E9FFF ;\">
\t\t\t\t\t\t<i class=\"fa fa-sign-in\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"162\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button title=\"批量审批\" class=\"btn btn-info  btn-sm sp plSp\" style=\"background-color: #32CD32 !important; border-color: #32CD32;\">
\t\t\t\t\t\t<i class=\"fa fa-check-circle-o\"></i>
\t\t            </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"307\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\"  title=\"导出\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"exportfile moveToClue btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t\t\t<i class=\"fa fa-sign-out\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:290px;height: 36px\">
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"background: #E6E6E6;line-height:32px\" data-status=\"a\">全部</a>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-status=\"1\">
\t\t\t\t\t\t\t</i> 待审批</a>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-status=\"2\"> 已通过</a>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-status=\"3\"> 未通过</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"margin-top:30px;position: absolute; background: #fff; z-index: 1041;padding: 20px 0px; display: none;\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>收款编码</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"cwm_receivables.num\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>企业名称</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.name\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>订单编号</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"cwm_receivables.order_id\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>审批状态</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width:180px\" gjs=0 data-type=\"gj\" sear=\"cwm_receivables.status\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t<option value=\"1\">待审批</option>
\t\t\t\t\t\t\t\t<option value=\"2\">已通过</option>
\t\t\t\t\t\t\t\t<option value=\"3\">未通过</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>收款金额</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"cwm_receivables.get_money\" data-type=\"gj\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>收款方式</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width:180px\" gjs=0 sear=\"cwm_receivables.get_way\" data-type=\"gj\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t<option value=\"1\">现金</option>
\t\t\t\t\t\t\t\t<option value=\"2\">支付宝</option>
\t\t\t\t\t\t\t\t<option value=\"3\">微信</option>
\t\t\t\t\t\t\t\t<option value=\"4\">银行卡</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<!--<input type=\"text\" gjs=0 sear=\"cwm_receivables.get_way\" data-type=\"gj\">-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>收款账户</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=\"3\" sear=\"cwm_receivables.account\" class=\" bank_name advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<!--<input type=\"text\" gjs=0 sear=\"cwm_receivables.account\">-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>收款人</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=\"3\" sear=\"cwm_receivables.receiver\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>收款日期</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"cwm_receivables.get_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<input id=\"date-timepicker1\" data-type=\"gj\" data-status=\"time\" gjs=0 sear=\"cwm_receivables.get_time\" class=\"date-timepicker1 form-control\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>备注</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"cwm_receivables.remark\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>创建人</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=\"3\" sear=\"cwm_receivables.create\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
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
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"cwm_receivables.create_at\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<input id=\"date-timepicker1\" data-type=\"gj\" data-status=\"time\" gjs=0 sear=\"cwm_receivables.create_at\" class=\"date-timepicker1 form-control\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>审批人</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=\"3\" sear=\"cwm_receivables.confirm\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
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
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"cwm_receivables.confirm_at\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<input id=\"date-timepicker1\" data-type=\"gj\" data-status=\"time\" gjs=0 sear=\"cwm_receivables.confirm_at\" class=\"date-timepicker1 form-control\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"text-align:center;clear:both;padding-top:10px; \">
\t\t\t\t\t\t\t<button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t                        查询
\t\t\t                    </button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"rest\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t\t                       重置
\t\t\t\t\t\t\t\t\t                    </button>
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
                                    <input type=\"checkbox\" class=\"ace\" onclick=\"cs.checkAll(this.checked)\"/>
                                    <span class=\"lbl\"></span>
                                </label>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th class=\"hidden-480 center\">操作</th>
\t\t\t\t\t\t\t<th data-num=\"5\">审批状态</th>
\t\t\t\t\t\t\t<th data-num=\"1\">收款编号</th>
\t\t\t\t\t\t\t<th data-num=\"2\">企业名称</th>
\t\t\t\t\t\t\t<th data-num=\"3\">订单编号</th>
\t\t\t\t\t\t\t<th data-num=\"4\">收款项目</th>

\t\t\t\t\t\t\t<th data-num=\"6\">审批回复</th>
\t\t\t\t\t\t\t<th data-num=\"7\">收款日期</th>
\t\t\t\t\t\t\t<th data-num=\"8\" style=\"text-align: right !important;\">收款总额</th>
\t\t\t\t\t\t\t<th data-num=\"9\">收款方式</th>
\t\t\t\t\t\t\t<!--<th data-num=\"10\">收款账户</th>-->
\t\t\t\t\t\t\t<th data-num=\"11\">收款人</th>
\t\t\t\t\t\t\t<th data-num=\"12\">备注</th>
\t\t\t\t\t\t\t<th data-num=\"13\">创建人</th>
\t\t\t\t\t\t\t<th data-num=\"14\">创建时间</th>
\t\t\t\t\t\t\t<th data-num=\"15\">审批人</th>
\t\t\t\t\t\t\t<th data-num=\"16\">审批时间</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<tbody id=\"dynamic-table_data\">

\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" class=\"_num\"></div>
\t\t\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t\t\t<div id=\"pageBar\" class=\"pageBar pagination\"></div>
\t\t\t\t<div align=\"right\" style=\"float: right;  width: 10%;\">
\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\" id=\"template\" style=\"display:none;\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<div class=\"space-12\"></div>
\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t<div class=\"widget-header widget-header-small\">
\t\t\t\t\t\t<h5 id=\"editTitile\" class=\"widget-title lighter\">添加收款</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t<!-- PAGE CONTENT BEGINS -->
\t\t\t\t\t\t\t<form class=\"form-horizontal\" role=\"form\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            收款编号： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                            <input class=\"edit0\" type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \"> 企业名称： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                            <input class=\"edit1\" type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            订单编号： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                            <input class=\"edit2\" type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            状态： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                            <input class=\"edit3\" type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            收款日期： 
                                        </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                            <input class=\"edit4\" type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            收款金额（元）： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                            <input class=\"edit5\" type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            收款方式： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                            <input class=\"edit6\" type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            收款账户： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                            <input class=\"edit7\" type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            收款人： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                            <input class=\"edit8\" type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            备注： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                            <input class=\"edit9\" type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            创建人： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                            <input class=\"edit10\" type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            创建时间： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                            <input class=\"edit11\" type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            审批人： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                            <input class=\"edit12\" type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            审批时间： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\" input-icon\">
                                            <input class=\"edit13\" type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t<!--保存按钮-->
\t\t\t\t\t\t<div class=\" padding-4 clearfix\">
\t\t\t\t\t\t\t<div class=\"btn-group pull-right\">

\t\t\t\t\t\t\t\t<button class=\"btn btn-info saveBt\">
                                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                        保存
                                    </button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\" id=\"template1\" style=\"display:none;\">

\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<div class=\"space-12\"></div>

\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t<div class=\"widget-header widget-header-small\">
\t\t\t\t\t\t<h5 id=\"editTitile\" class=\"widget-title lighter\">添加收款</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t<!-- PAGE CONTENT BEGINS -->
\t\t\t\t\t\t\t<form class=\"form-horizontal\" role=\"form\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            收款编号： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"edit0 input-icon\">
                                            <input type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \"> 企业名称： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"edit1 input-icon\">
                                            <input type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            订单编号： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"edit2 input-icon\">
                                            <input type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            状态： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"edit3 input-icon\">
                                            <input type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            收款日期： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"edit4 input-icon\">
                                            <input type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            收款金额（元）： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"edit5 input-icon\">
                                            <input type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            收款方式： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"edit6 input-icon\">
                                            <input type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            收款账户： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"edit7 input-icon\">
                                            <input type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            收款人： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"edit8 input-icon\">
                                            <input type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            备注： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"edit9 input-icon\">
                                            <input type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            创建人： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"edit10 input-icon\">
                                            <input type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            创建时间： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"edit11 input-icon\">
                                            <input type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            审批人： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"edit12 input-icon\">
                                            <input type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                            审批时间： </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<span class=\"edit13 input-icon\">
                                            <input type=\"text\">
                                        </span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t<!--保存按钮-->
\t\t\t\t\t\t<div class=\" padding-4 clearfix\">
\t\t\t\t\t\t\t<div class=\"btn-group pull-right\">

\t\t\t\t\t\t\t\t<button class=\"btn btn-info saveBt\">
                                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                        保存
                                    </button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"label_popup\" id=\"feedBack\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
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

\t<div class=\"popup_getMoney\" style=\"display:none\">
\t\t<div class=\"row\">
\t\t\t<form class=\"item_form\" role=\"form\">
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 企业名称： </label>
\t\t\t\t\t<input type=\"text\" field=\"customer_name\" />
\t\t\t\t\t<label> 收费项目： </label>
\t\t\t\t\t<input type=\"text\" field=\"product_name\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 实收： </label>
\t\t\t\t\t<input type=\"number\" field=\"get_money\">
\t\t\t\t\t<label> 时间： </label>
\t\t\t\t\t<div class=\"input-group\" style=\"display:inline-flex;\">
\t\t\t\t\t\t<input class=\"date-timepicker1\" type=\"text\" class=\"form-control\" field=\"get_time\" style=\"width:150px;height:30px;\">
\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width: 30px;height: 30px;\">
                            <i class=\"fa fa-clock-o bigger-110\" style=\"position: relative;top: 2px;right: 2px;\"></i>
                        </span>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 收款方式： </label>
\t\t\t\t\t<select field=\"get_way\">
\t\t\t\t\t\t<option value=\"\">请选择收款方式</option>
\t\t\t\t\t\t<option value=\"1\"> 现金 </option>
\t\t\t\t\t\t<option value=\"2\"> 支付宝 </option>
\t\t\t\t\t\t<option value=\"3\"> 微信 </option>
\t\t\t\t\t\t<option value=\"4\"> 银行卡 </option>
\t\t\t\t\t</select>
\t\t\t\t\t<label> 收款账户： </label>
\t\t\t\t\t<select class=\"receivable_account\" style=\"width:180px;\" field=\"account\">
\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t请选择收款账户
\t\t\t\t\t\t</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<!-- <div class=\"form_data\">
                    <label> 收款账户： </label>
                    <select class=\"receivable_account\" style=\"width:180px;\" field=\"account\">
                        <option value=\"\">
                           请选择收款账户
                        </option>
                    </select>
                    <label> 方式： </label>
                    <input type=\"text\" disabled field=\"get_way\" get-way=\"\">
                    <select field=\"get_way\">
                        <option value=\"\">请选择 </option>
                        <option value=\"1\"> 现金 </option>
                        <option value=\"2\"> 支付宝 </option>
                        <option value=\"3\"> 微信 </option>
                        <option value=\"4\"> 银行卡 </option>
                    </select>
                </div> -->
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 收款人： </label>
\t\t\t\t\t<select class=\"employee\" field=\"receiver\">
\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t请选择员工
\t\t\t\t\t\t</option>
\t\t\t\t\t</select>
\t\t\t\t\t<!--<label> 经办人： </label>
                    <select class=\"employee\" field=\"jb_id\">
                        <option value=\"\">
                             请选择员工 
                        </option>
                    </select>-->
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label style=\"float:left;\"> 收款备注： </label>
\t\t\t\t\t<textarea style=\"width:calc(100% - 77px);margin-left:5px;padding:5px;\" field=\"remark\"></textarea>
\t\t\t\t</div>

\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label style=\"float:left;margin-right:5px;\">凭证上传： </label>
\t\t\t\t\t<div id=\"imgBox\">
\t\t\t\t\t\t<label style=\"text-align: center;border: 1px solid;width: 70px;position: relative;height: 70px; cursor: pointer; text-align: center;line-height: 70px;font-size: 70px;\">
\t\t\t\t\t\t\t<input type=\"file\" class=\"uploadFiles\" style=\"position:absolute;left:-9999px;opacity: 0;\" />
\t\t\t\t\t\t\t<span class=\"\" style=\"display: inline-block;position: absolute;top: 0;left: 14px; cursor: pointer; text-align: center;\">+</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"clear:both;\"></div>

\t\t\t\t</div>
\t\t\t\t<!--   <span>
                    <input type=\"file\" id=\"upload\" style=\"position: absolute;opacity: 0;left:-9999px;\">
                    <label class=\"\" for=\"upload\" style=\"margin-bottom:0;border:1px solid #000;line-height:100px;display: inline-block;width: 100px;height: 100px;cursor: pointer; text-align: center;\">
                        <i class=\"fa fa-plus fa-2x\" aria-hidden=\"true\" style=\"position: relative;top: 5px;\"></i>
                        <img style=\"display: none;width: 100%;height: 98px;\" src=\"\" alt=\"\">
                    </label>
                </span> -->
\t\t\t\t<!-- <div style=\"display:inline-block;padding-left:5px;width:calc(100% - 75px);\">
                    <label>
                        <img style=\"width:68px;height:68px;margin-right:5px;\" src=\"\${res.data.url}\">
                        <input type=\"file\" class=\"uploadImage _decrease\" style=\"position: absolute;opacity: 0;left:-9999px;\">
                    </label>
                </div> -->

\t\t\t</form>
\t\t\t<div class=\"popup_button\" style=\"margin-top: 60px\">
\t\t\t\t<button class=\"sure_button btn btn-info btn-sm\">
                    保存
                </button>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"label_popup\" id=\"export\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t<span style=\"display: inline-block;\">导入收款记录</span>
\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t</div>
\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t<input type=\"file\" width=\"200px\" style=\"margin: auto;\" id=\"efile\" />
\t\t\t\t<!--<hr>-->
\t\t\t</div>
\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t<button id=\"ghItem\" class=\" btn\">收款模板</button>
\t\t\t\t<button class=\"btn btn-info  submit\" style=\"padding: 6px; border-radius: 0px;\">保存</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\" id=\"template2\" style=\"display:none;width:678px;\">
\t\t<div class=\"col-sm-12\" id=\"editBox\">
\t\t\t<table width=\"100%\" style=\"border-collapse:collapse;margin-bottom:15px;\">
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\"></td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">收款编号：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData0\" data-title=\"num\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">企业名称：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData1\" data-title=\"name\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">收款日期：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData4\" data-title=\"get_time\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">收款金额：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData5\" data-title=\"get_money\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">收款方式：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData6\" data-title=\"get_way\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">收款账户：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData7\" data-title=\"account\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">收款人：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData8\" data-title=\"receiver\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">备注：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData9\" data-title=\"remark\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">创建人：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData10\" data-title=\"create\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">创建时间：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData11\" data-title=\"create_at\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">审批人：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData12\" data-title=\"confirm\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">审批时间：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData13\" data-title=\"confirm_at\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">审批状态：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData3\" data-title=\"status\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">收款项目：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData15\" data-title=\"contract_type\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<!--<td style=\"text-align: right !important\">收款项目：</td>
\t\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t\t<span class=\"disData14\" data-title=\"product_name\"></span>
\t\t\t\t\t\t</td>-->
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<div>
\t\t\t\t<p>凭证:</p>
\t\t\t\t<div id=\"\" style=\"margin-left:40px !important; \" class=\"fileList\">

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 899
        $this->loadTemplate("admin/mark.html", "admin/financialManagement/collectionRecord.html", 899)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/financialManagement/collectionRecord.html", 899)->display($context);
        // line 900
        echo "</div>
<script src=\"/resource/adimin/assets/js/LocalResizeIMG.js\"></script>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script>
\tjQuery(function(\$) {

        //导出功能
        cs.exportFile({
            url:\"/api/api_finance/export\",
            title:\"收款记录\"
        });

\t\tcs.getNodes([281]);
\t\tcs.dataRang();
\t\tif(cs.approve_authority({
\t\t\t\tname: '收款',
\t\t\t\tnodes: [162]
\t\t\t})) {
\t\t\t\$('[contentAuthority=\"162\"]').show();
\t\t}

\t\tvar order = 'cwm_receivables.id desc';
\t\tvar filter = '';
\t\tvar page_size = 10;
\t\tvar aid_2 = ykp.getCookie(\"aid_2\");
\t\tvar time = ykp.getCookie(\"time\");
\t\tvar employees = {}; //所有员工
\t\t//获取所有员工
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
\t\t\t\t\tif(data[i]['name']) {
\t\t\t\t\t\temployees[data[i]['id']] = data[i]['name'];
\t\t\t\t\t\t\$('.advandced-search').append(new Option(data[i]['name'], data[i]['id']));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t});

\t\t//获取所有员工
\t\tykp.doAjax({
\t\t\tasync: false,
\t\t\turl: '/api/api_bank/f7',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tselect: 'xtm_kh_bank.bank_name,xtm_kh_bank.id'
\t\t\t},
\t\t\tsuccess: function(res) {
\t\t\t\tvar data = res.data;
\t\t\t\t\$('.advandced-search').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});

\t\t\t\t\$('.bank_name').html(\"\");
\t\t\t\t\$('.bank_name').append(\"<option value=''>请选择</option>\");
\t\t\t\tfor(var i in data) {
\t\t\t\t\tif(data[i]['bank_name']) {
\t\t\t\t\t\t\$('.bank_name').append(new Option(data[i]['bank_name'], data[i]['id']));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t});

\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_finance/receivables_list',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: \"\",
\t\t\t\tlimit: page_size,
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '.pageBar'
\t\t\t},
\t\t\tcontentId: \"#dynamic-table_data\", //默认排序
\t\t\tinitOrder: \"\", //初始化sort
\t\t\tdefaultOrder: order,
\t\t\tparams: [{
\t\t\t\tid: \"#dynamic-table\",
\t\t\t\tfield: [\"\",\"\",\"cwm_receivables.status\",\"cwm_receivables.num\",\"cwm_receivables.customer_id\",\"cwm_receivables.order_id\",\"\",\"cwm_receivables.confirm_remark\",\"cwm_receivables.get_time\",\"\",\"\",\"cwm_receivables.receiver\",\"cwm_receivables.remark\",
\t\t\t\t\t\"cwm_receivables.create\",\"cwm_receivables.create_at\",\"cwm_receivables.confirm\",\"cwm_receivables.confirm_at\"
\t\t\t\t]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});

\t\t//普通搜索
\t\tdoSearch();
\t\t//高级搜索
\t\tdohSearch();
\t\t//接收首页跳转
\t\tif(time != '' && time != undefined) {
\t\t\tvar timestamp = ''; //条件
\t\t\tvar today = new Date().setHours(0, 0, 0, 0) / 1000; //今天零点的时间戳
\t\t\tvar day_1 = cs.getNowTime(Date.parse(new Date()) / 1000).substr(-2) - 1; //距离本月1号有多少天
\t\t\tvar lastmonthday_1 = cs.getNowTime(Date.parse(new Date()) / 1000);
\t\t\tvar newday = lastmonthday_1.substring(0, 4) + '-' + (lastmonthday_1.substring(5, 7) - 1) + '-01';
\t\t\tif(lastmonthday_1.substring(5, 7) == 1) {
\t\t\t\tnewday = (lastmonthday_1.substring(0, 4) - 1) + '-12-01';
\t\t\t}
\t\t\tvar newdaytime = Date.parse(new Date(newday)) / 1000; //上个月1号的时间戳
\t\t\tswitch(time) {
\t\t\t\tcase '1':
\t\t\t\t\ttimestamp = `cwm_receivables.confirm_at>\${today}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '2':
\t\t\t\t\ttimestamp = `cwm_receivables.confirm_at<\${today} and cwm_receivables.confirm_at>\${today-86400}`
\t\t\t\t\tbreak;
\t\t\t\tcase '3':
\t\t\t\t\ttimestamp = `cwm_receivables.confirm_at>\${today-86400*6}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '4':
\t\t\t\t\ttimestamp = `cwm_receivables.confirm_at>\${new Date().setHours(0,0,0,0)/1000-86400*29}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '5':
\t\t\t\t\ttimestamp = `cwm_receivables.confirm_at>\${today-86400*day_1}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '6':
\t\t\t\t\ttimestamp = `cwm_receivables.confirm_at<\${today-86400*day_1} and cwm_receivables.confirm_at>\${newdaytime}`;
\t\t\t\t\tbreak;
\t\t\t}
\t\t\tvar filter = `cwm_receivables.receiver=\${aid_2} and \${timestamp}`;
\t\t\tif(aid_2 == '' || aid_2 == undefined) {
\t\t\t\tfilter = `\${timestamp}`;
\t\t\t}
\t\t\tvar data = {
\t\t\t\tlimit: page_size,
\t\t\t\tfilter: filter
\t\t\t}
\t\t\tgetList_2(data);
\t\t\tykp.setCookie(\"aid_2\", \"\", (1 / 24));
\t\t\tykp.setCookie(\"time\", \"\", (1 / 24));
\t\t} else if(ykp.getCookie('titleTask') && ykp.getCookie('titleTask') != '') {
\t\t\tvar data = {
\t\t\t\tlimit: page_size,
\t\t\t\tfilter: `cwm_receivables.status<>2`
\t\t\t}
\t\t\tgetList_2(data);
\t\t\tykp.setCookie(\"titleTask\", '', (1 / 24));
\t\t} else if(ykp.getCookie('skId')) { //接受从客户详情跳转过来的数据
\t\t\tvar data = {
\t\t\t\tlimit: page_size,
\t\t\t\tfilter: `cwm_receivables.id=\${ykp.getCookie('skId')}`
\t\t\t}
\t\t\tgetList_2(data);
\t\t\tykp.setCookie('skId', \"\");
\t\t} else {
\t\t\t//页面初始化
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetList();
\t\t}

\t\tfunction getList_2(data) {
\t\t\tykp.list({
\t\t\t\turl: '/api/api_finance/receivables_list',
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
\t\t\t\t\t} else {
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}
\t\t
\t\t/*//导入导出
\t\tvar data = {
\t\t\tUrl: \"/resource/excel_templete/finance-long.xls\",
\t\t\turl1:\"/api/api_finance/finance_upload_batch\",
\t\t\ttitle: '收款模板',
\t\t\tkey:\"finance\"
\t\t}
\t\tcs.jzexport(data, function(res) {
\t\t\tykp.prompt(\"上传成功\");
\t\t\tgetList();
\t\t\t\$('.label_popup').hide();
\t\t})*/


\t\t//导入合同
        importContract();

        function importContract() {
            \$('.mergeItem').unbind('click').click(function() {
                var flag = \$(this).attr('imp');

                var file;
                \$('#export').show();

                //点击 × 关闭导入弹出层
                \$('.close_label').unbind('click').click(function() {
                    \$(this).parents('#export').fadeOut();
                    \$('#efile').after(\$('#efile').clone().val(\"\"));
                    \$('#efile').remove();
                })

                //切换文件
                \$('#efile').unbind('change').change(function() {
                    file = this.files[0];
                })

                var mUrl = flag == '0' ? \"/api/api_finance/one_export\" : \"/api/api_finance/long_export\";
                var url = flag == '0' ? ykp.api_url + \"/api/api_finance/one_finance_upload_batch\" : ykp.api_url + \"/api/api_finance/finance_upload_batch\";
                var outTyp = flag == '0' ? \"一次性合同模板\": \"长期合同模板\";
                //导获取合同模板

                \$('#ghItem').unbind('click').click(function() {
                    console.log(111);
                    ykp.doAjax({
\t\t\t\t\t\turl:mUrl,
                        data:{title:outTyp},
\t\t\t\t\t\tmethods:\"post\",
                        success:function(res){
                            window.open(res.data);
                        }
\t\t\t\t\t});
                   /* \$.ajax({
                        url: mUrl,
                        type: \"post\",
                        data: {title:outTyp},
                        success: function(res) {
                            console.log(res)
                            
                            
                            //window.open(res.data);

                        },
                        error: function() {
                            \$('#export').hide();
                            ykp.prompt(\"模板下载出错了...\");
                        }
                    });*/
                })

                //导入合同数据
                \$('.submit').unbind('click').click(function() {
                    if(file == undefined) {
                        ykp.prompt(\"请添加数据再上传\");
                    }

                    var fd = new FormData();
                    fd.append('finance', file);
                    fd.append('login_token', ykp.getCookie('login_token'));
                    \$.ajax({
                        url: url,
                        type: \"post\",
                        dataType: 'json',
                        data: fd,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(res) {
                        \tykp.prompt(\"导入需要时间 请耐心等待\");
                        \tsetTimeout(function(){
                        \tif(res.data) {
                                ykp.prompt(\"上传信息有误\");
                                \$('#efile').after(\$('#efile').clone().val(\"\"));
                                \$('.label_popup').hide();
                                \$('#efile').remove();
                                layui.use('layer',function(){
                                    layui.layer.confirm('问题数据不能导入，是否下载查看', function(index){
                                        window.open(res.data);
                                    });
                                })
                            } else {
                                ykp.prompt(\"上传成功\");
                                \$('#efile').after(\$('#efile').clone().val(\"\"));
                                \$('#efile').remove();
                                \$('#export').hide();
                                getDatalist();
                            }
                        \t},3000)            
                        },
                        error: function() {
                            \$('#export').hide();
                            ykp.prompt(\"上传出错了...\");
                        }
                    });
                })
            });
        }




\t\t//记账报税欠款数据
\t\tfunction getList() {
\t\t\tykp.list({
\t\t\t\turl: '/api/api_finance/receivables_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: page_size,
\t\t\t\t\tfilter: filter,
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
\t\t\t\t\t\t\$('#dynamic-table_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t} else {
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}

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
\t\t\t\tfilter = \"\";
\t\t\t\tgetList();
\t\t\t\treturn;
\t\t\t}
\t\t\tfilter = 'cwm_receivables.status = ' + filter_;
\t\t\tdata['filter'] = 'cwm_receivables.status = ' + filter_;
\t\t\tgetList_2(data);
\t\t})

\t\t\$('#filterBtns a').mouseover(function() {
\t\t\t\$(this).addClass('over');
\t\t})
\t\t\$('#filterBtns a').mouseout(function() {
\t\t\t\$(this).removeClass('over');
\t\t})
\t\t\$('#flush').click(function() {
\t\t\tfilter = '';
\t\t\t\$('[pts=\"0\"]').val('');
\t\t\t\$('[sear=\"cwm_receivables.receiver\"]').val('').trigger('change');
\t\t\t\$('[sear=\"cwm_receivables.create\"]').val('').trigger('change');
\t\t\t\$('[sear=\"cwm_receivables.confirm\"]').val('').trigger('change');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetList();
\t\t})

\t\t\$('#changePageNum').change(function() {
\t\t\tpage_size = \$(this).val();
\t\t\tykp.setCookie('page_size', page_size);
\t\t\tgetList();
\t\t})

\t\t//自定义列表
\t\tcs.custorm_check('#dynamic-table', '#dynamic-table_data', true);

\t\t//搜索
\t\tfunction doSearch() {

\t\t\tvar data = {
\t\t\t\turl: '/api/api_finance/receivables_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}
\t\t\tcs.doSearch('#search', data, 'filter', false, function(res, _filter) {
                console.log(res.data);
                filter = _filter;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#dynamic-table_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn false;
\t\t\t\t} else {
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t})
\t\t}

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
\t\t\t\tcs.timeplug();
\t\t\t}
\t\t})

\t\tfunction dohSearch() {
\t\t\t//高级搜索显示隐藏
\t\t\tvar data = {
\t\t\t\turl: '/api/api_finance/receivables_list',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}
\t\t\tcs.hSearch('#search1', data, 'filter', false, function(res, _filter) {
\t\t\t\tfilter = _filter;
\t\t\t\t//console.log(res)
\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\$(\"#heightsearch\").removeClass('active').css('z-index', '');
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#dynamic-table_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn false;
\t\t\t\t} else {
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t})
\t\t}

\t\tfunction addList(res) {
\t\t\tvar data = res.data.items;
\t\t\tvar html = '';
\t\t\tvar get_way = ['', '现金', '支付宝', '微信', '银行卡'];
\t\t\tvar sstatus = ['', '待审批', '已通过', '未通过'];
\t\t\tvar ths = \$('#dynamic-table .thColor th');
\t\t\tvar styles = [];
\t\t\tfor(i = 0; i < ths.length; i++) {
\t\t\t\tstyles.push(ths.eq(i).css('display'));
\t\t\t}
\t\t\t//审批权限为true可以审批,为false不可审批
\t\t\tvar spApp = cs.approve_authority({
\t\t\t\tname: '收款',
\t\t\t\tnodes: [163]
\t\t\t});
\t\t\tvar cxApp = cs.approve_authority({
\t\t\t\tname: '收款',
\t\t\t\tnodes: [271]
\t\t\t});
\t\t\tvar product_name = {};
\t\t\tvar arr = [];
\t\t\tfor(var i in data) {
\t\t\t\tif(data[i]['product_name']) {
\t\t\t\t\tarr = [];
\t\t\t\t\tdata[i]['product_name'].forEach(function(item) {
\t\t\t\t\t\tarr.push(item.name);
\t\t\t\t\t})
\t\t\t\t\tproduct_name[i] = arr.join(',');
\t\t\t\t} else {
\t\t\t\t\tproduct_name[i] = data[i]['cwm_receivables.product_name'];
\t\t\t\t}
\t\t\t}
\t\t\tvar customer_name;
\t\t\tfor(var i in data) {
\t\t\t\tcustomer_name = '<a class=\"customerDetail pos-rel\" href=\"#\">' + data[i]['khm_customer.name'] + '</a> ' +
\t\t\t\t\t'<label class=\"pos-rel\"> <i class=\"iconBnt fa fa-info-circle\" style=\"color:' + (data[i]['Remark'].length > 0 ? 'red' : \"\") + '\"  data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"' + cs.getRemark(data[i][\"Remark\"]) + '\" ></i></label>';
\t\t\t\thtml +=
\t\t\t\t\t'<tr data-id=\"' + data[i]['cwm_receivables.id'] + '\" data-status=\"' + data[i]['cwm_receivables.status'] + '\">' +
\t\t\t\t\t'<td class=\"center\">' +
\t\t\t\t\t'<label class=\"pos-rel\">' +
\t\t\t\t\t'<input type=\"checkbox\" name=\"check\" class=\"ace\"/>' +
\t\t\t\t\t'<span class=\"lbl\"></span>' +
\t\t\t\t\t'</label>' +
\t\t\t\t\t'</td>' +
\t\t\t\t\t'<td class=\"center\">' +
\t\t\t\t\t'<label class=\"pos-rel\">' +
\t\t\t\t\t'<a href=\"#\" class=\"pageInfo btOrange\" style=\" color:#fff !important\"> <span class=\"lbl info\" title=\"详情\"><i class=\"fa fa-info \"></i></span></a> ' +
\t\t\t\t\t'<a href=\"#\" class=\"sp btOrange\" data-status = \"1\" style=\"display:' + (cxApp ? (data[i]['cwm_receivables.status'] == 2 ? 'inline-block' : 'none') : 'none') + ';color:#fff !important\" contentAuthority=\"271\" title=\"撤销\"><i class=\"fa fa-rotate-left\"></i></a> ' +
\t\t\t\t\t'<a href=\"#\" class=\"sp btGreen\" data-status = \"2\" style=\"display:' + (spApp ? (data[i]['cwm_receivables.status'] == 1 ? 'inline-block' : 'none') : 'none') + ';color:#fff !important\" contentAuthority=\"163\" title=\"通过\"><i class=\"fa fa-check-circle-o\"></i></a> ' +
\t\t\t\t\t'<a href=\"#\" class=\"sp btRed\" data-status = \"3\" style=\"display:' + (spApp ? (data[i]['cwm_receivables.status'] == 1 ? 'inline-block' : 'none') : 'none') + ';color:#fff !important\" contentAuthority=\"163\" title=\"驳回\"><i class=\"fa fa-times-circle\"></i></a> ' +
\t\t\t\t\t'</label>' +
\t\t\t\t\t'</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[6] + '\" data-num=\"5\" data-status=\"' + data[i]['cwm_receivables.status'] + '\"><sapn class=\"cedit\">' + sstatus[data[i]['cwm_receivables.status']] + '</sapn></td>' +

\t\t\t\t\t'<td style=\"display: ' + styles[2] + '\" data-num=\"1\"><sapn class=\"cedit\">' + data[i]['cwm_receivables.num'] + '</span></td>' +
\t\t\t\t\t'<td data-cid=\"' + data[i]['khm_customer.id'] + '\" style=\"display:' + styles[3] + '\" data-num=\"2\"><a class=\"customerDetail pos-rel\" href=\"#\">' + (data[i]['cwm_receivables.customer_id'] != '0' ? customer_name : data[i]['cwm_receivables.customer_name']) + '</a></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[4] + '\" data-num=\"3\"><sapn class=\"cedit\">' + (data[i]['cwm_receivables.order_id'] != '0' ? data[i]['cwm_receivables.order_id'] : '') + '</sapn></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[5] + '\" data-num=\"4\"><sapn class=\"cedit\">' + product_name[i] + '</sapn></td>' +

\t\t\t\t\t'<td style=\"display: ' + styles[7] + '\" data-num=\"6\"><sapn class=\"cedit\">' + data[i]['cwm_receivables.confirm_remark'] + '</sapn></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[8] + '\" data-num=\"7\"><sapn class=\"cedit\">' + (data[i]['cwm_receivables.get_time'] != '0' ? ykp.formatDate(new Date(parseInt(data[i]['cwm_receivables.get_time'] * 1000)), 'Y-M-d') : '') + '</sapn></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[9] + ';text-align: right !important; \" data-num=\"8\"><sapn class=\"cedit\">' + (parseInt(data[i]['cwm_receivables.get_money']) + parseInt(data[i]['cwm_receivables.get_account_book'])).toFixed(2) + '</sapn></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[10] + '\" data-num=\"9\"><sapn class=\"cedit\">' + (get_way[data[i]['cwm_receivables.get_way']] ? (get_way[data[i]['cwm_receivables.get_way']]) : \"\") + (data[i]['xtm_kh_bank.bank_name'] ? (\"，\" + data[i]['xtm_kh_bank.bank_name']) : \"\") + '</sapn></td>' +
\t\t\t\t\t//\t\t\t\t\t'<td style=\"display: ' + styles[11] + '\" data-num=\"10\"><sapn class=\"cedit\">' + data[i]['xtm_kh_bank.bank_name'] + '</sapn></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[12] + '\" data-num=\"11\"><sapn class=\"cedit\">' + (data[i]['cwm_receivables.receiver'] ? employees[data[i]['cwm_receivables.receiver']] : '') + '</sapn></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[13] + '\" data-num=\"12\"><sapn class=\"cedit\">' + data[i]['cwm_receivables.remark'] + '</sapn></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[14] + '\" data-num=\"13\"><sapn class=\"cedit\">' + employees[data[i]['cwm_receivables.create']] + '</sapn></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[15] + '\" data-num=\"14\"><sapn class=\"cedit\">' + (data[i]['cwm_receivables.create_at'] != '0' ? ykp.formatDate(new Date(parseInt(data[i]['cwm_receivables.create_at'] * 1000)), 'Y-M-d H:m:s') : '') + '</sapn></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[16] + '\" data-num=\"15\"><sapn class=\"cedit\">' + (data[i]['cwm_receivables.confirm'] ? employees[data[i]['cwm_receivables.confirm']] : '') + '</sapn></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[17] + '\" data-num=\"16\"><sapn class=\"cedit\">' + (data[i]['cwm_receivables.confirm_at'] != '0' ? ykp.formatDate(new Date(parseInt(data[i]['cwm_receivables.confirm_at'] * 1000)), 'Y-M-d H:m:s') : '') + '</sapn></td>' +
\t\t\t\t\t'</tr>'
\t\t\t};

\t\t\t\$('#dynamic-table_data').html(html);
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\tcustom.get_custom_info();
\t\t\tcustom.showReamrk();

\t\t\t\$('.plSp').click(function() {
\t\t\t\tvar num = 0;
\t\t\t\tvar status = '';
\t\t\t\tvar coldata = [];
\t\t\t\tvar Statu = false;
\t\t\t\t\$('#dynamic-table_data').find('input[type=checkbox]').each(function(i) {
\t\t\t\t\tif(\$(this).is(':checked')) {
\t\t\t\t\t\tnum++;
\t\t\t\t\t\tstatus = \$(this).parents('tr').attr('data-status') == 1 ? 2 : 1;
\t\t\t\t\t\tif(\$(this).parents('tr').attr('data-status') == 3) {
\t\t\t\t\t\t\tykp.prompt('审批失败状态不能批量审批!');
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
\t\t\t\t\t\t\turl: \"/api/api_finance/all_recei_sh\",
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tcoldata: JSON.stringify(coldata)
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('审批成功');
\t\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})

\t\t\t//点击 审批 or  驳回 or  撤销
\t\t\t\$(\"#dynamic-table_data tr\").find('.sp').click(function() {
\t\t\t\tvar status = \$(this).attr('data-status');
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tchangeStatus(status, id);
\t\t\t});

\t\t\t\$('.info').click(function() {
\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\tvar _data = data[index];
\t\t\t\tshowMark('#template2');
\t\t\t\t\$('#showBox .title').text('收款详情');

\t\t\t\tvar status = ['', '待审批', '已通过', '未通过'];
\t\t\t\tvar get_way = ['', '现金', '支付宝', '微信', '银行卡'];
                var arr = [];
\t\t\t\tif(data[index]['cwm_receivables.files']) {
\t\t\t\t\tJSON.parse(data[index]['cwm_receivables.files']).forEach(function(item) {
\t\t\t\t\t\tarr.push('<p style=\"padding-left: 2px;\"><a class=\"\"><img class=\"image\" style=\"width: 70px;height: 70px\" src=\"' + item.url + '\" alt=\"\"></a></p>')
\t\t\t\t\t})

\t\t\t\t\t\$('#templateCon .fileList').append(arr.join(','));
                    uploadsmallimg();
\t\t\t\t\t\$('.gdel2').click(function() {
\t\t\t\t\t\t\$(this).parent().remove();
\t\t\t\t\t})
\t\t\t\t}
\t\t\t\tif(data[index]['cwm_receivables.voucher']) {
\t\t\t\t\tJSON.parse(data[index]['cwm_receivables.voucher']).forEach(function(item) {
\t\t\t\t\t\tarr.push('<img class=\"image\"  src=\"' + item + '\" style=\"height:70px;width:70px;margin-left:5px;\">')
\t\t\t\t\t})
\t\t\t\t\t\$('#templateCon .fileList').append(arr.join(','));
\t\t\t\t}

\t\t\t\tvar field = '';
\t\t\t\t//contract_type
\t\t\t\t\$('#templateBox').find('span[data-title]').each(function() {
\t\t\t\t\tfield = 'cwm_receivables.' + \$(this).attr('data-title');
\t\t\t\t\tif(\$(this).attr('data-title') == 'status') {
\t\t\t\t\t\t\$(this).text(status[_data[field]]);
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr('data-title') == 'account') {
\t\t\t\t\t\t\$(this).text(_data['xtm_kh_bank.bank_name']);
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr('data-title') == 'name') {
\t\t\t\t\t\t\$(this).text(_data['cwm_receivables.customer_id'] != '0' ? _data['khm_customer.name'] : _data['cwm_receivables.customer_name']);
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr('data-title') == 'get_way') {
\t\t\t\t\t\t\$(this).text(get_way[_data[field]]);
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr('data-title') == 'order_id') {
\t\t\t\t\t\t\$(this).text(_data[field] != '0' ? _data[field] : '');
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr('data-title') == 'get_to_term') {
\t\t\t\t\t\t\$(this).text(_data[field] ? JSON.parse(_data[field]).join(',') : '');
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr('data-title') == 'create' || \$(this).attr('data-title') == 'confirm' || \$(this).attr('data-title') == 'receiver') {
\t\t\t\t\t\t\$(this).text(_data[field] != '' ? employees[_data[field]] : '');
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr('data-title') == 'get_time' || \$(this).attr('data-title') == 'create_at' || \$(this).attr('data-title') == 'confirm_at') {
\t\t\t\t\t\t\$(this).text(_data[field] != '0' ? cs.getNowTime(_data[field]) : '');
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr('data-title') == 'contract_type') {
\t\t\t\t\t\t\$(this).text(product_name[index]);
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr('data-title') == 'account_book') {
\t\t\t\t\t\t\$(this).text(_data['cwm_receivables.get_account_book']);
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\t\$(this).text(_data[field]);
\t\t\t\t})
\t\t\t\tif(_data[\"htm_contract.contract_type\"] == 2){
\t\t\t\t\t\$(\"#templateBox .dsnone\").hide();
                }
\t\t\t})
\t\t}

\t\t//获取所有账户
\t\tfunction getAccounts() {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_bank/f7',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tselect: 'xtm_kh_bank.id,xtm_kh_bank.type,xtm_kh_bank.bank_name'
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
                    console.log(data);
\t\t\t\t\tvar account_html = [];
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\taccount_html.push('<option value=\"' + data[i]['id'] + '\" get_way=\"' + data[i]['type'] + '\">' + data[i]['bank_name'] + '</option>');
\t\t\t\t\t}
\t\t\t\t\t\$('#templateCon [field=\"account\"]').append(account_html.join(''));
\t\t\t\t}
\t\t\t});
\t\t}
\t\t//上传图片
        uploadsmallimg();

\t\t//保存提交数据
\t\tfunction saveSubmitData() {
\t\t\t\$('#templateCon .sure_button').unbind('click').click(function() {
\t\t\t\tvar postdata = {};
\t\t\t\t\$('#templateCon [field]').each(function(i, e) {
\t\t\t\t\tif(\$(this).attr('field') == 'get_time') {
\t\t\t\t\t\tpostdata[\$(this).attr('field')] = new Date(\$(this).val()) / 1000;
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr('field') == 'get_way') {
\t\t\t\t\t\tpostdata[\$(this).attr('field')] = \$(this).val();
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\tpostdata[\$(this).attr('field')] = \$(this).val();
\t\t\t\t});

\t\t\t\tvar imgdata = [];
\t\t\t\t\$('#templateCon img').each(function(i, e) {
\t\t\t\t\timgdata.push(\$(this).attr('src'));
\t\t\t\t});
\t\t\t\tpostdata['voucher'] = JSON.stringify(imgdata);

\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_finance/receivables_add_new',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: postdata,
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tykp.prompt('添加收款成功');
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t}

\t\t//收款
\t\tgetMoney();

\t\tfunction getMoney() {
\t\t\t\$('.getMoney').unbind('click').click(function() {
\t\t\t\tshowMark('.popup_getMoney');
\t\t\t\t\$('#showBox .title').text('收款');

\t\t\t\t//时间
\t\t\t\tcs.timeplug();

                //上传图片
                uploadsmallimg();

\t\t\t\t//获取账户
\t\t\t\t// getAccounts();

\t\t\t\t//保存提交数据
\t\t\t\tsaveSubmitData();

\t\t\t\t//切换收款账户 自动切换收款方式
\t\t\t\t// var get_way = ['','现金','支付宝','微信','银行卡'];
\t\t\t\t// \$('#templateCon [field=\"account\"]').unbind('change').change(function(){
\t\t\t\t//     if(!\$(this).find('option:selected').attr('get_way') || \$(this).find('option:selected').attr('get_way') == '0' ){
\t\t\t\t//         \$('#templateCon [field=\"get_way\"]').val('').attr('get_way','');
\t\t\t\t//         return;
\t\t\t\t//     }

\t\t\t\t//     \$('#templateCon [field=\"get_way\"]').val(get_way[\$(this).find('option:selected').attr('get_way')]).attr('get_way',\$(this).find('option:selected').attr('get_way'));
\t\t\t\t// });

\t\t\t\t//切换收款方式 自动切换收款账户
\t\t\t\tcs.changePayWayGetAccounts(\$('#templateCon [field=\"get_way\"]'), \$('#templateCon [field=\"account\"]'));

\t\t\t\t//收款人  经办人
\t\t\t\tfor(var i in employees) {
\t\t\t\t\tif(employees[i]) {
\t\t\t\t\t\t\$('#templateCon .employee').append(new Option(employees[i], i));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//对点击驳回进行处理
\t\tfunction changeStatus(status, id) {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_finance/receivables_sh',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tid: id,
\t\t\t\t\tstatus: status
\t\t\t\t}
\t\t\t}
\t\t\tif(status == 3) {
\t\t\t\t\$('#feedBack').show();
\t\t\t\t\$('#feedBack .hold').click(function() {
\t\t\t\t\tvar approve_reply = \$('#feedBack').find('input').val();
\t\t\t\t\tif(approve_reply == '') {
\t\t\t\t\t\tykp.prompt('不能为空！');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}else{
\t\t\t\t\t\tykp.prompt('驳回成功！');
\t\t\t\t\t\tdata.data.confirm_remark = approve_reply;
\t\t\t\t\t    setStatus(data);
\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t})
\t\t\t\tcs.closePop();
\t\t\t} else if(status == 1) {
//\t\t\t\tbootbox.confirm('确认撤销审批？', function(flag) {
//\t\t\t\t\tif(flag) {
//\t\t\t\t\t\tsetStatus(data);
//\t\t\t\t\t}
//\t\t\t\t})
\t\t\t\tlayui.use('layer',function(){
\t\t\t\t\tvar layer=layui.layer;
\t\t\t\t\tlayer.confirm('确认撤销审批？' , function(flay){
\t\t\t\t\t\tif(flay){
\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t})
\t\t\t\t
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
\t\t\t//\t\tykp.prompt('审批成功!');
\t\t\t\t\tgetList();
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//详情+编辑+删除事件绑定
\t\tfunction operationRecord() {
\t\t\t//添加功能
\t\t\t\$('#addItem').click(function() {
\t\t\t\tshowMark('#template');
\t\t\t\t\$('#editTitile').html('添加记录');
\t\t\t});

\t\t}
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/financialManagement/collectionRecord.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  923 => 900,  919 => 899,  19 => 1,);
    }
}
/* <style>*/
/* 	#templateBox {*/
/* 		margin-top: 0;*/
/* 	}*/
/* 	*/
/* 	#templateBox .form-horizontal .form-group {*/
/* 		margin-bottom: 5px;*/
/* 	}*/
/* 	*/
/* 	#templateBox .form-horizontal .form-group>div {*/
/* 		width: 60%;*/
/* 	}*/
/* 	*/
/* 	#templateBox .form-horizontal .form-group label {*/
/* 		width: 140px;*/
/* 	}*/
/* 	*/
/* 	#templateBox .form-horizontal .form-group div span {*/
/* 		line-height: 30px;*/
/* 		height: 30px;*/
/* 	}*/
/* 	*/
/* 	#templateBox .form-horizontal .form-group div span input {*/
/* 		padding: 0;*/
/* 		width: 250px;*/
/* 	}*/
/* 	*/
/* 	#heightsearch1 .row .heiSer {*/
/* 		margin-right: 5px;*/
/* 		margin-top: 5px;*/
/* 	}*/
/* 	*/
/* 	#templateCon label {*/
/* 		width: 72px;*/
/* 	}*/
/* 	*/
/* 	.tdboder {*/
/* 		border: none !important;*/
/* 	}*/
/* 	#templateCon td{*/
/* 		padding: 7px !important;*/
/* 	}*/
/* </style>*/
/* */
/* <div class=" widget-main">*/
/* */
/* 	<div class="row">*/
/* 		<div class="col-lg-12">*/
/* 			<div class="row" style="margin-top: 20px;" id="topTool">*/
/* 				<!--<h3 class="header smaller lighter blue">送单</h3>-->*/
/* 				<div style="margin-top: 15px !important;">*/
/* 					*/
/* 				*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<input type="text" pts=0 id="" sear="cwm_receivables.num" placeholder="收款编号" class="" />*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<input type="text" pts=0 id="" sear="khm_customer.name" placeholder="企业名称" class="" />*/
/* 				</div>*/
/* 		</div>		*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<input type="text" pts=0 id="" sear="cwm_receivables.order_id" placeholder="订单编号" class="" />*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<select style="width: 180px" pts=3 sear="cwm_receivables.receiver" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 						<option value="">收款人 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<select style="width: 180px" pts=3 sear="cwm_receivables.create" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 						<option value="">创建人 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<select style="width: 180px" pts=3 sear="cwm_receivables.confirm" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 						<option value="">审批人 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<button type="button" id="search" title="搜索" class="btn btn-info btn-sm">*/
/*                         <i class="fa fa-search"></i>*/
/*                     </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<button id="heightsearch" type="button" title="高级搜索" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/*                         <i class="fa fa-filter"></i>*/
/*                     </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style=" background-color: #32CD32	 !important;">*/
/* 	                    <i class="fa fa-refresh"></i>*/
/* 	                </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="281" style=" float: left;margin-right: 5px;">*/
/* 					<button title="收款" class="btn btn-info  btn-sm getMoney" style="background-color: #32CD32 !important;background: #32CD32 !important;">*/
/* 						<i class="fa fa-plus"></i>*/
/* 		            </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="281" style=" float: left; margin-right: 5px;">*/
/* 					<button class="mergeItem btn btn-info btn-sm" title="导入一次性合同" type="button" imp="0" style="background-color: #1E9FFF !important; border-color:#1E9FFF ;">*/
/* 						<i class="fa fa-sign-in"></i>*/
/* 					</button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="281" style=" float: left; margin-right: 5px;">*/
/* 					<button class="mergeItem btn btn-info btn-sm" title="导入长期合同" type="button" imp="1" style="background-color: #1E9FFF !important; border-color:#1E9FFF ;">*/
/* 						<i class="fa fa-sign-in"></i>*/
/* 					</button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="162" style=" float: left;margin-right: 5px;">*/
/* 					<button title="批量审批" class="btn btn-info  btn-sm sp plSp" style="background-color: #32CD32 !important; border-color: #32CD32;">*/
/* 						<i class="fa fa-check-circle-o"></i>*/
/* 		            </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="307" style=" float: left; margin-right: 5px;">*/
/* 					<button type="button"  title="导出" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="exportfile moveToClue btn addBtn btn-info btn-sm position-relative">*/
/* 						<i class="fa fa-sign-out"></i>*/
/* 					</button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<div id="filterBtns" style="display:inline-block;width:290px;height: 36px">*/
/* 						<a href="javascript:void(0);" class="myFilter" style="background: #E6E6E6;line-height:32px" data-status="a">全部</a>*/
/* 						<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-status="1">*/
/* 							</i> 待审批</a>*/
/* 						<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-status="2"> 已通过</a>*/
/* 						<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-status="3"> 未通过</a>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div id="heightsearch1" class="col-sx-12" style="margin-top:30px;position: absolute; background: #fff; z-index: 1041;padding: 20px 0px; display: none;">*/
/* 					<div class="row">*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>收款编码</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="cwm_receivables.num" />*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>企业名称</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.name" />*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>订单编号</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="cwm_receivables.order_id">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>审批状态</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width:180px" gjs=0 data-type="gj" sear="cwm_receivables.status">*/
/* 								<option value="">请选择</option>*/
/* 								<option value="1">待审批</option>*/
/* 								<option value="2">已通过</option>*/
/* 								<option value="3">未通过</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>收款金额</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> &lt; </option>*/
/* 								<option> > </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="cwm_receivables.get_money" data-type="gj">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>收款方式</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width:180px" gjs=0 sear="cwm_receivables.get_way" data-type="gj">*/
/* 								<option value="">请选择</option>*/
/* 								<option value="1">现金</option>*/
/* 								<option value="2">支付宝</option>*/
/* 								<option value="3">微信</option>*/
/* 								<option value="4">银行卡</option>*/
/* 							</select>*/
/* 							<!--<input type="text" gjs=0 sear="cwm_receivables.get_way" data-type="gj">-->*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>收款账户</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width: 180px" gjs="3" sear="cwm_receivables.account" class=" bank_name advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 								<option value=""> 请选择 </option>*/
/* 							</select>*/
/* 							<!--<input type="text" gjs=0 sear="cwm_receivables.account">-->*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>收款人</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width: 180px" gjs="3" sear="cwm_receivables.receiver" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 								<option value=""> 请选择 </option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>收款日期</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> &lt; </option>*/
/* 								<option> > </option>*/
/* 							</select>*/
/* 							<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 								<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 								<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="cwm_receivables.get_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 							</div>*/
/* 							<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 								<input id="date-timepicker1" data-type="gj" data-status="time" gjs=0 sear="cwm_receivables.get_time" class="date-timepicker1 form-control" style="height: 30px; width: 150px;">*/
/* 								<span class="input-group-addon" style="width:30px;height:30px;">*/
/* 										<i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 									</span>*/
/* 							</div>-->*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>备注</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="cwm_receivables.remark">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>创建人</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width: 180px" gjs="3" sear="cwm_receivables.create" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
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
/* 								<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="cwm_receivables.create_at" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 							</div>*/
/* 							<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 								<input id="date-timepicker1" data-type="gj" data-status="time" gjs=0 sear="cwm_receivables.create_at" class="date-timepicker1 form-control" style="height: 30px; width: 150px;">*/
/* 								<span class="input-group-addon" style="width:30px;height:30px;">*/
/* 										<i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 									</span>*/
/* 							</div>-->*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>审批人</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width: 180px" gjs="3" sear="cwm_receivables.confirm" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
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
/* 								<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="cwm_receivables.confirm_at" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 							</div>*/
/* 							<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 								<input id="date-timepicker1" data-type="gj" data-status="time" gjs=0 sear="cwm_receivables.confirm_at" class="date-timepicker1 form-control" style="height: 30px; width: 150px;">*/
/* 								<span class="input-group-addon" style="width:30px;height:30px;">*/
/* 										<i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 									</span>*/
/* 							</div>-->*/
/* 						</div>*/
/* 						<div style="text-align:center;clear:both;padding-top:10px; ">*/
/* 							<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/* 			                        查询*/
/* 			                    </button>*/
/* 							<button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 									                       重置*/
/* 									                    </button>*/
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
/*                                     <input type="checkbox" class="ace" onclick="cs.checkAll(this.checked)"/>*/
/*                                     <span class="lbl"></span>*/
/*                                 </label>*/
/* 							</th>*/
/* 							<th class="hidden-480 center">操作</th>*/
/* 							<th data-num="5">审批状态</th>*/
/* 							<th data-num="1">收款编号</th>*/
/* 							<th data-num="2">企业名称</th>*/
/* 							<th data-num="3">订单编号</th>*/
/* 							<th data-num="4">收款项目</th>*/
/* */
/* 							<th data-num="6">审批回复</th>*/
/* 							<th data-num="7">收款日期</th>*/
/* 							<th data-num="8" style="text-align: right !important;">收款总额</th>*/
/* 							<th data-num="9">收款方式</th>*/
/* 							<!--<th data-num="10">收款账户</th>-->*/
/* 							<th data-num="11">收款人</th>*/
/* 							<th data-num="12">备注</th>*/
/* 							<th data-num="13">创建人</th>*/
/* 							<th data-num="14">创建时间</th>*/
/* 							<th data-num="15">审批人</th>*/
/* 							<th data-num="16">审批时间</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* */
/* 					<tbody id="dynamic-table_data">*/
/* */
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/* 			<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 				<div align="left" style="padding-left: 15px; float: left; width: 10%;" class="_num"></div>*/
/* 				<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 				<div id="pageBar" class="pageBar pagination"></div>*/
/* 				<div align="right" style="float: right;  width: 10%;">*/
/* 					<select style="width: 100px;" id="changePageNum">*/
/* 						<option value="10">每页10条</option>*/
/* 						<option value="20">每页20条</option>*/
/* 						<option value="50">每页50条</option>*/
/* 						<option value="100">每页100条</option>*/
/* 						<option value="200">每页200条</option>*/
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="row" id="template" style="display:none;">*/
/* 			<div class="col-sm-12">*/
/* 				<div class="space-12"></div>*/
/* 				<div class="widget-box">*/
/* 					<div class="widget-header widget-header-small">*/
/* 						<h5 id="editTitile" class="widget-title lighter">添加收款</h5>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<div class="col-xs-12">*/
/* 							<!-- PAGE CONTENT BEGINS -->*/
/* 							<form class="form-horizontal" role="form">*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             收款编号： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="input-icon">*/
/*                                             <input class="edit0" type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left "> 企业名称： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="input-icon">*/
/*                                             <input class="edit1" type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             订单编号： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="input-icon">*/
/*                                             <input class="edit2" type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             状态： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="input-icon">*/
/*                                             <input class="edit3" type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* */
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             收款日期： */
/*                                         </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="input-icon">*/
/*                                             <input class="edit4" type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             收款金额（元）： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="input-icon">*/
/*                                             <input class="edit5" type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             收款方式： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="input-icon">*/
/*                                             <input class="edit6" type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             收款账户： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="input-icon">*/
/*                                             <input class="edit7" type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             收款人： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="input-icon">*/
/*                                             <input class="edit8" type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             备注： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="input-icon">*/
/*                                             <input class="edit9" type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             创建人： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="input-icon">*/
/*                                             <input class="edit10" type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             创建时间： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="input-icon">*/
/*                                             <input class="edit11" type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             审批人： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="input-icon">*/
/*                                             <input class="edit12" type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             审批时间： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class=" input-icon">*/
/*                                             <input class="edit13" type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 							</form>*/
/* 						</div>*/
/* 						<!-- /.col -->*/
/* 						<!--保存按钮-->*/
/* 						<div class=" padding-4 clearfix">*/
/* 							<div class="btn-group pull-right">*/
/* */
/* 								<button class="btn btn-info saveBt">*/
/*                                         <i class="fa fa-check" aria-hidden="true"></i>*/
/*                                         保存*/
/*                                     </button>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="row" id="template1" style="display:none;">*/
/* */
/* 			<div class="col-sm-12">*/
/* 				<div class="space-12"></div>*/
/* */
/* 				<div class="widget-box">*/
/* 					<div class="widget-header widget-header-small">*/
/* 						<h5 id="editTitile" class="widget-title lighter">添加收款</h5>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<div class="col-xs-12">*/
/* 							<!-- PAGE CONTENT BEGINS -->*/
/* 							<form class="form-horizontal" role="form">*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             收款编号： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="edit0 input-icon">*/
/*                                             <input type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left "> 企业名称： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="edit1 input-icon">*/
/*                                             <input type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             订单编号： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="edit2 input-icon">*/
/*                                             <input type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             状态： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="edit3 input-icon">*/
/*                                             <input type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* */
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             收款日期： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="edit4 input-icon">*/
/*                                             <input type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             收款金额（元）： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="edit5 input-icon">*/
/*                                             <input type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             收款方式： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="edit6 input-icon">*/
/*                                             <input type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             收款账户： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="edit7 input-icon">*/
/*                                             <input type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             收款人： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="edit8 input-icon">*/
/*                                             <input type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             备注： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="edit9 input-icon">*/
/*                                             <input type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             创建人： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="edit10 input-icon">*/
/*                                             <input type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             创建时间： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="edit11 input-icon">*/
/*                                             <input type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             审批人： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="edit12 input-icon">*/
/*                                             <input type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                             审批时间： </label>*/
/* 									<div class="col-sm-9">*/
/* 										<span class="edit13 input-icon">*/
/*                                             <input type="text">*/
/*                                         </span>*/
/* 									</div>*/
/* 								</div>*/
/* 							</form>*/
/* 						</div>*/
/* 						<!-- /.col -->*/
/* 						<!--保存按钮-->*/
/* 						<div class=" padding-4 clearfix">*/
/* 							<div class="btn-group pull-right">*/
/* */
/* 								<button class="btn btn-info saveBt">*/
/*                                         <i class="fa fa-check" aria-hidden="true"></i>*/
/*                                         保存*/
/*                                     </button>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="label_popup" id="feedBack" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 		<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/*             box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
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
/* */
/* 	<div class="popup_getMoney" style="display:none">*/
/* 		<div class="row">*/
/* 			<form class="item_form" role="form">*/
/* 				<div class="form_data">*/
/* 					<label> 企业名称： </label>*/
/* 					<input type="text" field="customer_name" />*/
/* 					<label> 收费项目： </label>*/
/* 					<input type="text" field="product_name" />*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label> 实收： </label>*/
/* 					<input type="number" field="get_money">*/
/* 					<label> 时间： </label>*/
/* 					<div class="input-group" style="display:inline-flex;">*/
/* 						<input class="date-timepicker1" type="text" class="form-control" field="get_time" style="width:150px;height:30px;">*/
/* 						<span class="input-group-addon" style="width: 30px;height: 30px;">*/
/*                             <i class="fa fa-clock-o bigger-110" style="position: relative;top: 2px;right: 2px;"></i>*/
/*                         </span>*/
/* 					</div>*/
/* */
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label> 收款方式： </label>*/
/* 					<select field="get_way">*/
/* 						<option value="">请选择收款方式</option>*/
/* 						<option value="1"> 现金 </option>*/
/* 						<option value="2"> 支付宝 </option>*/
/* 						<option value="3"> 微信 </option>*/
/* 						<option value="4"> 银行卡 </option>*/
/* 					</select>*/
/* 					<label> 收款账户： </label>*/
/* 					<select class="receivable_account" style="width:180px;" field="account">*/
/* 						<option value="">*/
/* 							请选择收款账户*/
/* 						</option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<!-- <div class="form_data">*/
/*                     <label> 收款账户： </label>*/
/*                     <select class="receivable_account" style="width:180px;" field="account">*/
/*                         <option value="">*/
/*                            请选择收款账户*/
/*                         </option>*/
/*                     </select>*/
/*                     <label> 方式： </label>*/
/*                     <input type="text" disabled field="get_way" get-way="">*/
/*                     <select field="get_way">*/
/*                         <option value="">请选择 </option>*/
/*                         <option value="1"> 现金 </option>*/
/*                         <option value="2"> 支付宝 </option>*/
/*                         <option value="3"> 微信 </option>*/
/*                         <option value="4"> 银行卡 </option>*/
/*                     </select>*/
/*                 </div> -->*/
/* 				<div class="form_data">*/
/* 					<label> 收款人： </label>*/
/* 					<select class="employee" field="receiver">*/
/* 						<option value="">*/
/* 							请选择员工*/
/* 						</option>*/
/* 					</select>*/
/* 					<!--<label> 经办人： </label>*/
/*                     <select class="employee" field="jb_id">*/
/*                         <option value="">*/
/*                              请选择员工 */
/*                         </option>*/
/*                     </select>-->*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label style="float:left;"> 收款备注： </label>*/
/* 					<textarea style="width:calc(100% - 77px);margin-left:5px;padding:5px;" field="remark"></textarea>*/
/* 				</div>*/
/* */
/* 				<div class="form_data">*/
/* 					<label style="float:left;margin-right:5px;">凭证上传： </label>*/
/* 					<div id="imgBox">*/
/* 						<label style="text-align: center;border: 1px solid;width: 70px;position: relative;height: 70px; cursor: pointer; text-align: center;line-height: 70px;font-size: 70px;">*/
/* 							<input type="file" class="uploadFiles" style="position:absolute;left:-9999px;opacity: 0;" />*/
/* 							<span class="" style="display: inline-block;position: absolute;top: 0;left: 14px; cursor: pointer; text-align: center;">+</span>*/
/* 						</label>*/
/* 					</div>*/
/* 					<div style="clear:both;"></div>*/
/* */
/* 				</div>*/
/* 				<!--   <span>*/
/*                     <input type="file" id="upload" style="position: absolute;opacity: 0;left:-9999px;">*/
/*                     <label class="" for="upload" style="margin-bottom:0;border:1px solid #000;line-height:100px;display: inline-block;width: 100px;height: 100px;cursor: pointer; text-align: center;">*/
/*                         <i class="fa fa-plus fa-2x" aria-hidden="true" style="position: relative;top: 5px;"></i>*/
/*                         <img style="display: none;width: 100%;height: 98px;" src="" alt="">*/
/*                     </label>*/
/*                 </span> -->*/
/* 				<!-- <div style="display:inline-block;padding-left:5px;width:calc(100% - 75px);">*/
/*                     <label>*/
/*                         <img style="width:68px;height:68px;margin-right:5px;" src="${res.data.url}">*/
/*                         <input type="file" class="uploadImage _decrease" style="position: absolute;opacity: 0;left:-9999px;">*/
/*                     </label>*/
/*                 </div> -->*/
/* */
/* 			</form>*/
/* 			<div class="popup_button" style="margin-top: 60px">*/
/* 				<button class="sure_button btn btn-info btn-sm">*/
/*                     保存*/
/*                 </button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="label_popup" id="export" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 		<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 	            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 			<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 				<span style="display: inline-block;">导入收款记录</span>*/
/* 				<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 			</div>*/
/* 			<div style="padding: 10px 50px;">*/
/* 				<input type="file" width="200px" style="margin: auto;" id="efile" />*/
/* 				<!--<hr>-->*/
/* 			</div>*/
/* 			<div style="padding:15px;text-align:right;">*/
/* 				<button id="ghItem" class=" btn">收款模板</button>*/
/* 				<button class="btn btn-info  submit" style="padding: 6px; border-radius: 0px;">保存</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row" id="template2" style="display:none;width:678px;">*/
/* 		<div class="col-sm-12" id="editBox">*/
/* 			<table width="100%" style="border-collapse:collapse;margin-bottom:15px;">*/
/* 				<tr>*/
/* 					<td colspan="4"></td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">收款编号：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData0" data-title="num"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">企业名称：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData1" data-title="name"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">收款日期：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData4" data-title="get_time"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">收款金额：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData5" data-title="get_money"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">收款方式：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData6" data-title="get_way"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">收款账户：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData7" data-title="account"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">收款人：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData8" data-title="receiver"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">备注：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData9" data-title="remark"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">创建人：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData10" data-title="create"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">创建时间：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData11" data-title="create_at"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">审批人：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData12" data-title="confirm"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">审批时间：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData13" data-title="confirm_at"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">审批状态：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData3" data-title="status"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">收款项目：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData15" data-title="contract_type"></span>*/
/* 					</td>*/
/* 					<!--<td style="text-align: right !important">收款项目：</td>*/
/* 						<td style="text-align: left !important">*/
/* 							<span class="disData14" data-title="product_name"></span>*/
/* 						</td>-->*/
/* 				</tr>*/
/* 			</table>*/
/* 			<div>*/
/* 				<p>凭证:</p>*/
/* 				<div id="" style="margin-left:40px !important; " class="fileList">*/
/* */
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% include 'admin/mark.html' %} {% include 'admin/customerDetail.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/LocalResizeIMG.js"></script>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* <script>*/
/* 	jQuery(function($) {*/
/* */
/*         //导出功能*/
/*         cs.exportFile({*/
/*             url:"/api/api_finance/export",*/
/*             title:"收款记录"*/
/*         });*/
/* */
/* 		cs.getNodes([281]);*/
/* 		cs.dataRang();*/
/* 		if(cs.approve_authority({*/
/* 				name: '收款',*/
/* 				nodes: [162]*/
/* 			})) {*/
/* 			$('[contentAuthority="162"]').show();*/
/* 		}*/
/* */
/* 		var order = 'cwm_receivables.id desc';*/
/* 		var filter = '';*/
/* 		var page_size = 10;*/
/* 		var aid_2 = ykp.getCookie("aid_2");*/
/* 		var time = ykp.getCookie("time");*/
/* 		var employees = {}; //所有员工*/
/* 		//获取所有员工*/
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
/* 					if(data[i]['name']) {*/
/* 						employees[data[i]['id']] = data[i]['name'];*/
/* 						$('.advandced-search').append(new Option(data[i]['name'], data[i]['id']));*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		});*/
/* */
/* 		//获取所有员工*/
/* 		ykp.doAjax({*/
/* 			async: false,*/
/* 			url: '/api/api_bank/f7',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				select: 'xtm_kh_bank.bank_name,xtm_kh_bank.id'*/
/* 			},*/
/* 			success: function(res) {*/
/* 				var data = res.data;*/
/* 				$('.advandced-search').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* */
/* 				$('.bank_name').html("");*/
/* 				$('.bank_name').append("<option value=''>请选择</option>");*/
/* 				for(var i in data) {*/
/* 					if(data[i]['bank_name']) {*/
/* 						$('.bank_name').append(new Option(data[i]['bank_name'], data[i]['id']));*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		});*/
/* */
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_finance/receivables_list',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: "",*/
/* 				limit: page_size,*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '.pageBar'*/
/* 			},*/
/* 			contentId: "#dynamic-table_data", //默认排序*/
/* 			initOrder: "", //初始化sort*/
/* 			defaultOrder: order,*/
/* 			params: [{*/
/* 				id: "#dynamic-table",*/
/* 				field: ["","","cwm_receivables.status","cwm_receivables.num","cwm_receivables.customer_id","cwm_receivables.order_id","","cwm_receivables.confirm_remark","cwm_receivables.get_time","","","cwm_receivables.receiver","cwm_receivables.remark",*/
/* 					"cwm_receivables.create","cwm_receivables.create_at","cwm_receivables.confirm","cwm_receivables.confirm_at"*/
/* 				]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* */
/* 		//普通搜索*/
/* 		doSearch();*/
/* 		//高级搜索*/
/* 		dohSearch();*/
/* 		//接收首页跳转*/
/* 		if(time != '' && time != undefined) {*/
/* 			var timestamp = ''; //条件*/
/* 			var today = new Date().setHours(0, 0, 0, 0) / 1000; //今天零点的时间戳*/
/* 			var day_1 = cs.getNowTime(Date.parse(new Date()) / 1000).substr(-2) - 1; //距离本月1号有多少天*/
/* 			var lastmonthday_1 = cs.getNowTime(Date.parse(new Date()) / 1000);*/
/* 			var newday = lastmonthday_1.substring(0, 4) + '-' + (lastmonthday_1.substring(5, 7) - 1) + '-01';*/
/* 			if(lastmonthday_1.substring(5, 7) == 1) {*/
/* 				newday = (lastmonthday_1.substring(0, 4) - 1) + '-12-01';*/
/* 			}*/
/* 			var newdaytime = Date.parse(new Date(newday)) / 1000; //上个月1号的时间戳*/
/* 			switch(time) {*/
/* 				case '1':*/
/* 					timestamp = `cwm_receivables.confirm_at>${today}`;*/
/* 					break;*/
/* 				case '2':*/
/* 					timestamp = `cwm_receivables.confirm_at<${today} and cwm_receivables.confirm_at>${today-86400}`*/
/* 					break;*/
/* 				case '3':*/
/* 					timestamp = `cwm_receivables.confirm_at>${today-86400*6}`;*/
/* 					break;*/
/* 				case '4':*/
/* 					timestamp = `cwm_receivables.confirm_at>${new Date().setHours(0,0,0,0)/1000-86400*29}`;*/
/* 					break;*/
/* 				case '5':*/
/* 					timestamp = `cwm_receivables.confirm_at>${today-86400*day_1}`;*/
/* 					break;*/
/* 				case '6':*/
/* 					timestamp = `cwm_receivables.confirm_at<${today-86400*day_1} and cwm_receivables.confirm_at>${newdaytime}`;*/
/* 					break;*/
/* 			}*/
/* 			var filter = `cwm_receivables.receiver=${aid_2} and ${timestamp}`;*/
/* 			if(aid_2 == '' || aid_2 == undefined) {*/
/* 				filter = `${timestamp}`;*/
/* 			}*/
/* 			var data = {*/
/* 				limit: page_size,*/
/* 				filter: filter*/
/* 			}*/
/* 			getList_2(data);*/
/* 			ykp.setCookie("aid_2", "", (1 / 24));*/
/* 			ykp.setCookie("time", "", (1 / 24));*/
/* 		} else if(ykp.getCookie('titleTask') && ykp.getCookie('titleTask') != '') {*/
/* 			var data = {*/
/* 				limit: page_size,*/
/* 				filter: `cwm_receivables.status<>2`*/
/* 			}*/
/* 			getList_2(data);*/
/* 			ykp.setCookie("titleTask", '', (1 / 24));*/
/* 		} else if(ykp.getCookie('skId')) { //接受从客户详情跳转过来的数据*/
/* 			var data = {*/
/* 				limit: page_size,*/
/* 				filter: `cwm_receivables.id=${ykp.getCookie('skId')}`*/
/* 			}*/
/* 			getList_2(data);*/
/* 			ykp.setCookie('skId', "");*/
/* 		} else {*/
/* 			//页面初始化*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getList();*/
/* 		}*/
/* */
/* 		function getList_2(data) {*/
/* 			ykp.list({*/
/* 				url: '/api/api_finance/receivables_list',*/
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
/* 					} else {*/
/* 						addList(res);*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 		*/
/* 		/*//* /导入导出*/
/* 		var data = {*/
/* 			Url: "/resource/excel_templete/finance-long.xls",*/
/* 			url1:"/api/api_finance/finance_upload_batch",*/
/* 			title: '收款模板',*/
/* 			key:"finance"*/
/* 		}*/
/* 		cs.jzexport(data, function(res) {*/
/* 			ykp.prompt("上传成功");*/
/* 			getList();*/
/* 			$('.label_popup').hide();*/
/* 		})*//* */
/* */
/* */
/* 		//导入合同*/
/*         importContract();*/
/* */
/*         function importContract() {*/
/*             $('.mergeItem').unbind('click').click(function() {*/
/*                 var flag = $(this).attr('imp');*/
/* */
/*                 var file;*/
/*                 $('#export').show();*/
/* */
/*                 //点击 × 关闭导入弹出层*/
/*                 $('.close_label').unbind('click').click(function() {*/
/*                     $(this).parents('#export').fadeOut();*/
/*                     $('#efile').after($('#efile').clone().val(""));*/
/*                     $('#efile').remove();*/
/*                 })*/
/* */
/*                 //切换文件*/
/*                 $('#efile').unbind('change').change(function() {*/
/*                     file = this.files[0];*/
/*                 })*/
/* */
/*                 var mUrl = flag == '0' ? "/api/api_finance/one_export" : "/api/api_finance/long_export";*/
/*                 var url = flag == '0' ? ykp.api_url + "/api/api_finance/one_finance_upload_batch" : ykp.api_url + "/api/api_finance/finance_upload_batch";*/
/*                 var outTyp = flag == '0' ? "一次性合同模板": "长期合同模板";*/
/*                 //导获取合同模板*/
/* */
/*                 $('#ghItem').unbind('click').click(function() {*/
/*                     console.log(111);*/
/*                     ykp.doAjax({*/
/* 						url:mUrl,*/
/*                         data:{title:outTyp},*/
/* 						methods:"post",*/
/*                         success:function(res){*/
/*                             window.open(res.data);*/
/*                         }*/
/* 					});*/
/*                    /* $.ajax({*/
/*                         url: mUrl,*/
/*                         type: "post",*/
/*                         data: {title:outTyp},*/
/*                         success: function(res) {*/
/*                             console.log(res)*/
/*                             */
/*                             */
/*                             //window.open(res.data);*/
/* */
/*                         },*/
/*                         error: function() {*/
/*                             $('#export').hide();*/
/*                             ykp.prompt("模板下载出错了...");*/
/*                         }*/
/*                     });*//* */
/*                 })*/
/* */
/*                 //导入合同数据*/
/*                 $('.submit').unbind('click').click(function() {*/
/*                     if(file == undefined) {*/
/*                         ykp.prompt("请添加数据再上传");*/
/*                     }*/
/* */
/*                     var fd = new FormData();*/
/*                     fd.append('finance', file);*/
/*                     fd.append('login_token', ykp.getCookie('login_token'));*/
/*                     $.ajax({*/
/*                         url: url,*/
/*                         type: "post",*/
/*                         dataType: 'json',*/
/*                         data: fd,*/
/*                         cache: false,*/
/*                         contentType: false,*/
/*                         processData: false,*/
/*                         success: function(res) {*/
/*                         	ykp.prompt("导入需要时间 请耐心等待");*/
/*                         	setTimeout(function(){*/
/*                         	if(res.data) {*/
/*                                 ykp.prompt("上传信息有误");*/
/*                                 $('#efile').after($('#efile').clone().val(""));*/
/*                                 $('.label_popup').hide();*/
/*                                 $('#efile').remove();*/
/*                                 layui.use('layer',function(){*/
/*                                     layui.layer.confirm('问题数据不能导入，是否下载查看', function(index){*/
/*                                         window.open(res.data);*/
/*                                     });*/
/*                                 })*/
/*                             } else {*/
/*                                 ykp.prompt("上传成功");*/
/*                                 $('#efile').after($('#efile').clone().val(""));*/
/*                                 $('#efile').remove();*/
/*                                 $('#export').hide();*/
/*                                 getDatalist();*/
/*                             }*/
/*                         	},3000)            */
/*                         },*/
/*                         error: function() {*/
/*                             $('#export').hide();*/
/*                             ykp.prompt("上传出错了...");*/
/*                         }*/
/*                     });*/
/*                 })*/
/*             });*/
/*         }*/
/* */
/* */
/* */
/* */
/* 		//记账报税欠款数据*/
/* 		function getList() {*/
/* 			ykp.list({*/
/* 				url: '/api/api_finance/receivables_list',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: page_size,*/
/* 					filter: filter,*/
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
/* 						$('#dynamic-table_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					} else {*/
/* 						addList(res);*/
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
/* 				"limit": page_size,*/
/* 				'page': 1,*/
/* 				'order': order*/
/* 			}*/
/* */
/* 			var filter_ = $(this).attr('data-status');*/
/* 			if(filter_ == 'a') {*/
/* 				filter = "";*/
/* 				getList();*/
/* 				return;*/
/* 			}*/
/* 			filter = 'cwm_receivables.status = ' + filter_;*/
/* 			data['filter'] = 'cwm_receivables.status = ' + filter_;*/
/* 			getList_2(data);*/
/* 		})*/
/* */
/* 		$('#filterBtns a').mouseover(function() {*/
/* 			$(this).addClass('over');*/
/* 		})*/
/* 		$('#filterBtns a').mouseout(function() {*/
/* 			$(this).removeClass('over');*/
/* 		})*/
/* 		$('#flush').click(function() {*/
/* 			filter = '';*/
/* 			$('[pts="0"]').val('');*/
/* 			$('[sear="cwm_receivables.receiver"]').val('').trigger('change');*/
/* 			$('[sear="cwm_receivables.create"]').val('').trigger('change');*/
/* 			$('[sear="cwm_receivables.confirm"]').val('').trigger('change');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getList();*/
/* 		})*/
/* */
/* 		$('#changePageNum').change(function() {*/
/* 			page_size = $(this).val();*/
/* 			ykp.setCookie('page_size', page_size);*/
/* 			getList();*/
/* 		})*/
/* */
/* 		//自定义列表*/
/* 		cs.custorm_check('#dynamic-table', '#dynamic-table_data', true);*/
/* */
/* 		//搜索*/
/* 		function doSearch() {*/
/* */
/* 			var data = {*/
/* 				url: '/api/api_finance/receivables_list',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					order: order*/
/* 				}*/
/* 			}*/
/* 			cs.doSearch('#search', data, 'filter', false, function(res, _filter) {*/
/*                 console.log(res.data);*/
/*                 filter = _filter;*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$('#dynamic-table_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					return false;*/
/* 				} else {*/
/* 					addList(res);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
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
/* */
/* 				$(this).attr('class', 'btn btn-info btn-sm active').css('z-index', '1041');*/
/* 				cs.rest(false, '#heightsearch1');*/
/* 				cs.timeplug();*/
/* 			}*/
/* 		})*/
/* */
/* 		function dohSearch() {*/
/* 			//高级搜索显示隐藏*/
/* 			var data = {*/
/* 				url: '/api/api_finance/receivables_list',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					order: order*/
/* 				}*/
/* 			}*/
/* 			cs.hSearch('#search1', data, 'filter', false, function(res, _filter) {*/
/* 				filter = _filter;*/
/* 				//console.log(res)*/
/* 				$('.in').removeClass('modal-backdrop');*/
/* 				$("#heightsearch1").slideUp();*/
/* 				$("#heightsearch").removeClass('active').css('z-index', '');*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$('#dynamic-table_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					return false;*/
/* 				} else {*/
/* 					addList(res);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		function addList(res) {*/
/* 			var data = res.data.items;*/
/* 			var html = '';*/
/* 			var get_way = ['', '现金', '支付宝', '微信', '银行卡'];*/
/* 			var sstatus = ['', '待审批', '已通过', '未通过'];*/
/* 			var ths = $('#dynamic-table .thColor th');*/
/* 			var styles = [];*/
/* 			for(i = 0; i < ths.length; i++) {*/
/* 				styles.push(ths.eq(i).css('display'));*/
/* 			}*/
/* 			//审批权限为true可以审批,为false不可审批*/
/* 			var spApp = cs.approve_authority({*/
/* 				name: '收款',*/
/* 				nodes: [163]*/
/* 			});*/
/* 			var cxApp = cs.approve_authority({*/
/* 				name: '收款',*/
/* 				nodes: [271]*/
/* 			});*/
/* 			var product_name = {};*/
/* 			var arr = [];*/
/* 			for(var i in data) {*/
/* 				if(data[i]['product_name']) {*/
/* 					arr = [];*/
/* 					data[i]['product_name'].forEach(function(item) {*/
/* 						arr.push(item.name);*/
/* 					})*/
/* 					product_name[i] = arr.join(',');*/
/* 				} else {*/
/* 					product_name[i] = data[i]['cwm_receivables.product_name'];*/
/* 				}*/
/* 			}*/
/* 			var customer_name;*/
/* 			for(var i in data) {*/
/* 				customer_name = '<a class="customerDetail pos-rel" href="#">' + data[i]['khm_customer.name'] + '</a> ' +*/
/* 					'<label class="pos-rel"> <i class="iconBnt fa fa-info-circle" style="color:' + (data[i]['Remark'].length > 0 ? 'red' : "") + '"  data-rel="tooltip" data-placement="right" data-html="true" title="' + cs.getRemark(data[i]["Remark"]) + '" ></i></label>';*/
/* 				html +=*/
/* 					'<tr data-id="' + data[i]['cwm_receivables.id'] + '" data-status="' + data[i]['cwm_receivables.status'] + '">' +*/
/* 					'<td class="center">' +*/
/* 					'<label class="pos-rel">' +*/
/* 					'<input type="checkbox" name="check" class="ace"/>' +*/
/* 					'<span class="lbl"></span>' +*/
/* 					'</label>' +*/
/* 					'</td>' +*/
/* 					'<td class="center">' +*/
/* 					'<label class="pos-rel">' +*/
/* 					'<a href="#" class="pageInfo btOrange" style=" color:#fff !important"> <span class="lbl info" title="详情"><i class="fa fa-info "></i></span></a> ' +*/
/* 					'<a href="#" class="sp btOrange" data-status = "1" style="display:' + (cxApp ? (data[i]['cwm_receivables.status'] == 2 ? 'inline-block' : 'none') : 'none') + ';color:#fff !important" contentAuthority="271" title="撤销"><i class="fa fa-rotate-left"></i></a> ' +*/
/* 					'<a href="#" class="sp btGreen" data-status = "2" style="display:' + (spApp ? (data[i]['cwm_receivables.status'] == 1 ? 'inline-block' : 'none') : 'none') + ';color:#fff !important" contentAuthority="163" title="通过"><i class="fa fa-check-circle-o"></i></a> ' +*/
/* 					'<a href="#" class="sp btRed" data-status = "3" style="display:' + (spApp ? (data[i]['cwm_receivables.status'] == 1 ? 'inline-block' : 'none') : 'none') + ';color:#fff !important" contentAuthority="163" title="驳回"><i class="fa fa-times-circle"></i></a> ' +*/
/* 					'</label>' +*/
/* 					'</td>' +*/
/* 					'<td style="display: ' + styles[6] + '" data-num="5" data-status="' + data[i]['cwm_receivables.status'] + '"><sapn class="cedit">' + sstatus[data[i]['cwm_receivables.status']] + '</sapn></td>' +*/
/* */
/* 					'<td style="display: ' + styles[2] + '" data-num="1"><sapn class="cedit">' + data[i]['cwm_receivables.num'] + '</span></td>' +*/
/* 					'<td data-cid="' + data[i]['khm_customer.id'] + '" style="display:' + styles[3] + '" data-num="2"><a class="customerDetail pos-rel" href="#">' + (data[i]['cwm_receivables.customer_id'] != '0' ? customer_name : data[i]['cwm_receivables.customer_name']) + '</a></td>' +*/
/* 					'<td style="display: ' + styles[4] + '" data-num="3"><sapn class="cedit">' + (data[i]['cwm_receivables.order_id'] != '0' ? data[i]['cwm_receivables.order_id'] : '') + '</sapn></td>' +*/
/* 					'<td style="display: ' + styles[5] + '" data-num="4"><sapn class="cedit">' + product_name[i] + '</sapn></td>' +*/
/* */
/* 					'<td style="display: ' + styles[7] + '" data-num="6"><sapn class="cedit">' + data[i]['cwm_receivables.confirm_remark'] + '</sapn></td>' +*/
/* 					'<td style="display: ' + styles[8] + '" data-num="7"><sapn class="cedit">' + (data[i]['cwm_receivables.get_time'] != '0' ? ykp.formatDate(new Date(parseInt(data[i]['cwm_receivables.get_time'] * 1000)), 'Y-M-d') : '') + '</sapn></td>' +*/
/* 					'<td style="display: ' + styles[9] + ';text-align: right !important; " data-num="8"><sapn class="cedit">' + (parseInt(data[i]['cwm_receivables.get_money']) + parseInt(data[i]['cwm_receivables.get_account_book'])).toFixed(2) + '</sapn></td>' +*/
/* 					'<td style="display: ' + styles[10] + '" data-num="9"><sapn class="cedit">' + (get_way[data[i]['cwm_receivables.get_way']] ? (get_way[data[i]['cwm_receivables.get_way']]) : "") + (data[i]['xtm_kh_bank.bank_name'] ? ("，" + data[i]['xtm_kh_bank.bank_name']) : "") + '</sapn></td>' +*/
/* 					//					'<td style="display: ' + styles[11] + '" data-num="10"><sapn class="cedit">' + data[i]['xtm_kh_bank.bank_name'] + '</sapn></td>' +*/
/* 					'<td style="display: ' + styles[12] + '" data-num="11"><sapn class="cedit">' + (data[i]['cwm_receivables.receiver'] ? employees[data[i]['cwm_receivables.receiver']] : '') + '</sapn></td>' +*/
/* 					'<td style="display: ' + styles[13] + '" data-num="12"><sapn class="cedit">' + data[i]['cwm_receivables.remark'] + '</sapn></td>' +*/
/* 					'<td style="display: ' + styles[14] + '" data-num="13"><sapn class="cedit">' + employees[data[i]['cwm_receivables.create']] + '</sapn></td>' +*/
/* 					'<td style="display: ' + styles[15] + '" data-num="14"><sapn class="cedit">' + (data[i]['cwm_receivables.create_at'] != '0' ? ykp.formatDate(new Date(parseInt(data[i]['cwm_receivables.create_at'] * 1000)), 'Y-M-d H:m:s') : '') + '</sapn></td>' +*/
/* 					'<td style="display: ' + styles[16] + '" data-num="15"><sapn class="cedit">' + (data[i]['cwm_receivables.confirm'] ? employees[data[i]['cwm_receivables.confirm']] : '') + '</sapn></td>' +*/
/* 					'<td style="display: ' + styles[17] + '" data-num="16"><sapn class="cedit">' + (data[i]['cwm_receivables.confirm_at'] != '0' ? ykp.formatDate(new Date(parseInt(data[i]['cwm_receivables.confirm_at'] * 1000)), 'Y-M-d H:m:s') : '') + '</sapn></td>' +*/
/* 					'</tr>'*/
/* 			};*/
/* */
/* 			$('#dynamic-table_data').html(html);*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/* 			custom.get_custom_info();*/
/* 			custom.showReamrk();*/
/* */
/* 			$('.plSp').click(function() {*/
/* 				var num = 0;*/
/* 				var status = '';*/
/* 				var coldata = [];*/
/* 				var Statu = false;*/
/* 				$('#dynamic-table_data').find('input[type=checkbox]').each(function(i) {*/
/* 					if($(this).is(':checked')) {*/
/* 						num++;*/
/* 						status = $(this).parents('tr').attr('data-status') == 1 ? 2 : 1;*/
/* 						if($(this).parents('tr').attr('data-status') == 3) {*/
/* 							ykp.prompt('审批失败状态不能批量审批!');*/
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
/* 							url: "/api/api_finance/all_recei_sh",*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								coldata: JSON.stringify(coldata)*/
/* 							},*/
/* 							success: function(res) {*/
/* 								ykp.prompt('审批成功');*/
/* 								getList();*/
/* 							}*/
/* 						})*/
/* 					}*/
/* 				}*/
/* 			})*/
/* */
/* 			//点击 审批 or  驳回 or  撤销*/
/* 			$("#dynamic-table_data tr").find('.sp').click(function() {*/
/* 				var status = $(this).attr('data-status');*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				changeStatus(status, id);*/
/* 			});*/
/* */
/* 			$('.info').click(function() {*/
/* 				var index = $(this).parents('tr').index();*/
/* 				var _data = data[index];*/
/* 				showMark('#template2');*/
/* 				$('#showBox .title').text('收款详情');*/
/* */
/* 				var status = ['', '待审批', '已通过', '未通过'];*/
/* 				var get_way = ['', '现金', '支付宝', '微信', '银行卡'];*/
/*                 var arr = [];*/
/* 				if(data[index]['cwm_receivables.files']) {*/
/* 					JSON.parse(data[index]['cwm_receivables.files']).forEach(function(item) {*/
/* 						arr.push('<p style="padding-left: 2px;"><a class=""><img class="image" style="width: 70px;height: 70px" src="' + item.url + '" alt=""></a></p>')*/
/* 					})*/
/* */
/* 					$('#templateCon .fileList').append(arr.join(','));*/
/*                     uploadsmallimg();*/
/* 					$('.gdel2').click(function() {*/
/* 						$(this).parent().remove();*/
/* 					})*/
/* 				}*/
/* 				if(data[index]['cwm_receivables.voucher']) {*/
/* 					JSON.parse(data[index]['cwm_receivables.voucher']).forEach(function(item) {*/
/* 						arr.push('<img class="image"  src="' + item + '" style="height:70px;width:70px;margin-left:5px;">')*/
/* 					})*/
/* 					$('#templateCon .fileList').append(arr.join(','));*/
/* 				}*/
/* */
/* 				var field = '';*/
/* 				//contract_type*/
/* 				$('#templateBox').find('span[data-title]').each(function() {*/
/* 					field = 'cwm_receivables.' + $(this).attr('data-title');*/
/* 					if($(this).attr('data-title') == 'status') {*/
/* 						$(this).text(status[_data[field]]);*/
/* 						return true;*/
/* 					}*/
/* 					if($(this).attr('data-title') == 'account') {*/
/* 						$(this).text(_data['xtm_kh_bank.bank_name']);*/
/* 						return true;*/
/* 					}*/
/* 					if($(this).attr('data-title') == 'name') {*/
/* 						$(this).text(_data['cwm_receivables.customer_id'] != '0' ? _data['khm_customer.name'] : _data['cwm_receivables.customer_name']);*/
/* 						return true;*/
/* 					}*/
/* 					if($(this).attr('data-title') == 'get_way') {*/
/* 						$(this).text(get_way[_data[field]]);*/
/* 						return true;*/
/* 					}*/
/* 					if($(this).attr('data-title') == 'order_id') {*/
/* 						$(this).text(_data[field] != '0' ? _data[field] : '');*/
/* 						return true;*/
/* 					}*/
/* 					if($(this).attr('data-title') == 'get_to_term') {*/
/* 						$(this).text(_data[field] ? JSON.parse(_data[field]).join(',') : '');*/
/* 						return true;*/
/* 					}*/
/* 					if($(this).attr('data-title') == 'create' || $(this).attr('data-title') == 'confirm' || $(this).attr('data-title') == 'receiver') {*/
/* 						$(this).text(_data[field] != '' ? employees[_data[field]] : '');*/
/* 						return true;*/
/* 					}*/
/* 					if($(this).attr('data-title') == 'get_time' || $(this).attr('data-title') == 'create_at' || $(this).attr('data-title') == 'confirm_at') {*/
/* 						$(this).text(_data[field] != '0' ? cs.getNowTime(_data[field]) : '');*/
/* 						return true;*/
/* 					}*/
/* 					if($(this).attr('data-title') == 'contract_type') {*/
/* 						$(this).text(product_name[index]);*/
/* 						return true;*/
/* 					}*/
/* 					if($(this).attr('data-title') == 'account_book') {*/
/* 						$(this).text(_data['cwm_receivables.get_account_book']);*/
/* 						return true;*/
/* 					}*/
/* 					$(this).text(_data[field]);*/
/* 				})*/
/* 				if(_data["htm_contract.contract_type"] == 2){*/
/* 					$("#templateBox .dsnone").hide();*/
/*                 }*/
/* 			})*/
/* 		}*/
/* */
/* 		//获取所有账户*/
/* 		function getAccounts() {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_bank/f7',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					select: 'xtm_kh_bank.id,xtm_kh_bank.type,xtm_kh_bank.bank_name'*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/*                     console.log(data);*/
/* 					var account_html = [];*/
/* 					for(var i in data) {*/
/* 						account_html.push('<option value="' + data[i]['id'] + '" get_way="' + data[i]['type'] + '">' + data[i]['bank_name'] + '</option>');*/
/* 					}*/
/* 					$('#templateCon [field="account"]').append(account_html.join(''));*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 		//上传图片*/
/*         uploadsmallimg();*/
/* */
/* 		//保存提交数据*/
/* 		function saveSubmitData() {*/
/* 			$('#templateCon .sure_button').unbind('click').click(function() {*/
/* 				var postdata = {};*/
/* 				$('#templateCon [field]').each(function(i, e) {*/
/* 					if($(this).attr('field') == 'get_time') {*/
/* 						postdata[$(this).attr('field')] = new Date($(this).val()) / 1000;*/
/* 						return true;*/
/* 					}*/
/* 					if($(this).attr('field') == 'get_way') {*/
/* 						postdata[$(this).attr('field')] = $(this).val();*/
/* 						return true;*/
/* 					}*/
/* 					postdata[$(this).attr('field')] = $(this).val();*/
/* 				});*/
/* */
/* 				var imgdata = [];*/
/* 				$('#templateCon img').each(function(i, e) {*/
/* 					imgdata.push($(this).attr('src'));*/
/* 				});*/
/* 				postdata['voucher'] = JSON.stringify(imgdata);*/
/* */
/* 				ykp.doAjax({*/
/* 					url: '/api/api_finance/receivables_add_new',*/
/* 					method: 'post',*/
/* 					data: postdata,*/
/* 					success: function(res) {*/
/* 						ykp.prompt('添加收款成功');*/
/* 						setTimeout(function() {*/
/* 							cs.close();*/
/* 							getList();*/
/* 						}, 1000);*/
/* 					}*/
/* 				});*/
/* 			});*/
/* 		}*/
/* */
/* 		//收款*/
/* 		getMoney();*/
/* */
/* 		function getMoney() {*/
/* 			$('.getMoney').unbind('click').click(function() {*/
/* 				showMark('.popup_getMoney');*/
/* 				$('#showBox .title').text('收款');*/
/* */
/* 				//时间*/
/* 				cs.timeplug();*/
/* */
/*                 //上传图片*/
/*                 uploadsmallimg();*/
/* */
/* 				//获取账户*/
/* 				// getAccounts();*/
/* */
/* 				//保存提交数据*/
/* 				saveSubmitData();*/
/* */
/* 				//切换收款账户 自动切换收款方式*/
/* 				// var get_way = ['','现金','支付宝','微信','银行卡'];*/
/* 				// $('#templateCon [field="account"]').unbind('change').change(function(){*/
/* 				//     if(!$(this).find('option:selected').attr('get_way') || $(this).find('option:selected').attr('get_way') == '0' ){*/
/* 				//         $('#templateCon [field="get_way"]').val('').attr('get_way','');*/
/* 				//         return;*/
/* 				//     }*/
/* */
/* 				//     $('#templateCon [field="get_way"]').val(get_way[$(this).find('option:selected').attr('get_way')]).attr('get_way',$(this).find('option:selected').attr('get_way'));*/
/* 				// });*/
/* */
/* 				//切换收款方式 自动切换收款账户*/
/* 				cs.changePayWayGetAccounts($('#templateCon [field="get_way"]'), $('#templateCon [field="account"]'));*/
/* */
/* 				//收款人  经办人*/
/* 				for(var i in employees) {*/
/* 					if(employees[i]) {*/
/* 						$('#templateCon .employee').append(new Option(employees[i], i));*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//对点击驳回进行处理*/
/* 		function changeStatus(status, id) {*/
/* 			var data = {*/
/* 				url: '/api/api_finance/receivables_sh',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					id: id,*/
/* 					status: status*/
/* 				}*/
/* 			}*/
/* 			if(status == 3) {*/
/* 				$('#feedBack').show();*/
/* 				$('#feedBack .hold').click(function() {*/
/* 					var approve_reply = $('#feedBack').find('input').val();*/
/* 					if(approve_reply == '') {*/
/* 						ykp.prompt('不能为空！');*/
/* 						return false;*/
/* 					}else{*/
/* 						ykp.prompt('驳回成功！');*/
/* 						data.data.confirm_remark = approve_reply;*/
/* 					    setStatus(data);*/
/* 					$('.close_label').parents('.label_popup').fadeOut();*/
/* 					}*/
/* 					*/
/* 				})*/
/* 				cs.closePop();*/
/* 			} else if(status == 1) {*/
/* //				bootbox.confirm('确认撤销审批？', function(flag) {*/
/* //					if(flag) {*/
/* //						setStatus(data);*/
/* //					}*/
/* //				})*/
/* 				layui.use('layer',function(){*/
/* 					var layer=layui.layer;*/
/* 					layer.confirm('确认撤销审批？' , function(flay){*/
/* 						if(flay){*/
/* 							layer.closeAll();*/
/* 							setStatus(data);*/
/* 						}*/
/* 					})*/
/* 				})*/
/* 				*/
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
/* 			//		ykp.prompt('审批成功!');*/
/* 					getList();*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//详情+编辑+删除事件绑定*/
/* 		function operationRecord() {*/
/* 			//添加功能*/
/* 			$('#addItem').click(function() {*/
/* 				showMark('#template');*/
/* 				$('#editTitile').html('添加记录');*/
/* 			});*/
/* */
/* 		}*/
/* 	});*/
/* </script>*/
