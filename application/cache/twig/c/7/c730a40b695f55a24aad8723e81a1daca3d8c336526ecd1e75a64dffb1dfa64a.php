<?php

/* admin/contractManagement/contracts.html */
class __TwigTemplate_e6ef31db5d80d75e3b63028e9878b9000630f5b1a2b51b75c0eeb24153f1f8dc extends Twig_Template
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
\t#templateBox .statistics_tit {
\t\tmargin-top: 15px;
\t\tlist-style: none;
\t\tmargin-left: 0;
\t\tborder-bottom: 1px #d5e3ef solid;
\t}
\t
\t#templateBox .statistics_tit li.acti {
\t\tposition: relative;
\t\ttop: 1px;
\t\tborder-top: 1px solid #C5D0DC;
\t\tborder-right: 1px solid #C5D0DC;
\t\tborder-bottom: 1px solid #e6ecf2;
\t\tborder-left: 1px solid #C5D0DC;
\t}
\t
\t#templateBox .statistics_tit li {
\t\tfloat: left;
\t\tpadding: 10px 20px;
\t\tcursor: pointer;
\t}
\t
\t#templateCon label {
\t\twidth: 79px;
\t}
\t
\t#templateCon label.btn {
\t\twidth: auto;
\t}
\t
\t#templateCon input {
\t\tpadding: 5px;
\t\twidth: 180px;
\t\theight: 30px;
\t}
\t
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
\t#templateCon span[field] {
\t\tdisplay: inline-block;
\t\tmin-width: 180px;
\t}
\t#templateCon label{
\twidth: 80px !important;
}
\t#templateCon #imgBox  label{
\t\twidth: 70px !important;
\t}
\t#templateCon span[syllable] {
\t\tdisplay: inline-block;
\t\tmin-width: 180px;
\t}
\t/*#templateCon .contract_content thead th{
        height:40px;
        min-width: 40px;
        text-align: center;
        line-height: 40px;
    }

    #templateCon .contract_content tbody td{
        height:40px;
        min-width: 40px;
        text-align: center;
        line-height: 40px;
    }*/
\t
\t#templateCon .contract_content .opration {
\t\tposition: relative;
\t\tfont-size: 22px !important;
\t}
\t
\tselect[sear] {
\t\twidth: 180px;
\t}
\t
\t#templateCon .bootstrap-datetimepicker-widget.dropdown-menu table {
\t\ttable-layout: fixed !important;
\t}
\t
\t#templateBox {
\t\toverflow: visible;
\t}
\t
\t#templateCon tbody tr td,
\t#templateCon thead tr th {
\t\t/*text-align: left !important;*/
\t\tpadding: 5px 10px;
\t\theight: 35px;
\t}
\t.custom_table tr th[data-num='10']{
\t\ttext-align: right !important;
\t}
</style>
<div class=\" widget-main\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\" style=\"position:relative;\">
\t\t\t<!-- <h3 class=\"header smaller lighter  blue\">合同</h3> -->
\t\t\t<div class=\"row\" style=\"margin-top: 20px;\" id=\"topTool\">
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<input type=\"text\" pts=0 id=\"\" sear=\"khm_customer.name\" placeholder=\"企业名称\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<input type=\"text\" pts=0 id=\"\" sear=\"htm_contract.contract_code\" placeholder=\"订单编码\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4 \" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<!--<select style=\"margin: 12px !important;width:180px\" class=\"advandced-search select2-hidden-accessible\" pts=1 sear=\"staff\" tabindex=\"-1\" data-type=\"gj\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\"> 负责人 </option>
\t\t\t\t\t</select>-->
\t\t\t\t\t<!--<input type=\"text\" pts=0 sear=\"market\" placeholder=\"业务员\">-->
\t\t\t\t\t<select marketing-id=\"0\" pts=4 sear=\"marketing_id\" table=\"htm_contract_marketing\" style=\"margin: 12px !important;width: 180px\" class=\"advandced-search select2-hidden-accssible\">
\t\t\t\t\t\t<option value=\"\">业务员</option>
\t\t\t\t\t</select>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
                        <i class=\"fa fa-search\"></i>
                    </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button id=\"heightsearch\" title=\"高级搜索\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
                        <i class=\"fa fa-filter\"></i>
                    </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" title=\"刷新\" class=\"btn btn-info btn-sm flush\" style=\"background-color: #32CD32 !important;\">
                        <i class=\"fa fa-refresh\"></i>
                    </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"135\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" title=\"添加\" id=\"addItem\" style=\"outline: none;background-color: #32CD32 !important;\" class=\"btn btn-info btn-sm position-relative\">
                        <i class=\"fa fa-plus\"></i>
                    </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"136\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" title=\"批量审批\" class=\"btn btn-info btn-sm plSp\" style=\"background-color: #32CD32 !important;\">
\t\t\t\t\t\t<i class=\"fa fa-check-circle-o\"></i>
                    </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"136\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" title=\"批量不续签\" class=\"btn btn-info btn-sm no_enew\" style=\"background-color: #FF5722 !important;border-color:#FF5722 !important; \">
\t\t\t\t\t\t<i class=\"fa fa-spinner\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"304\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\"  title=\"导出\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"exportfile moveToClue btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t\t\t<i class=\"fa fa-sign-out\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:290px;height: 36px\">
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"background: #E6E6E6;line-height:32px\" data-status=\"a\">全部</a>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-status=\"0\">
\t\t\t\t\t\t\t</i> 待审批</a>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-status=\"2\"> 已通过</a>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-status=\"1\"> 未通过</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"margin-top:30px;position: absolute; background: #fff;padding: 15px 0px; display: none;z-index:1042;\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>订单编码</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"htm_contract.contract_code\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>企业名称</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.name\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>合同类型</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select gjs=0 sear=\"htm_contract.contract_type\" data-type=\"gj\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t<option value=\"1\"> 长期合同 </option>
\t\t\t\t\t\t\t\t<option value=\"2\"> 一次性合同 </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>合同编码</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"htm_contract.contract_num\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>服务项目</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select gjs=7 style=\"margin: 12px !important;width: 180px\" sear=\"htm_contract.id\" id=\"product\" class=\"advandced-search select2-hidden-accssible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<!--<input type=\"text\" gjs=7 sear=\"htm_contract.id\">-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>服务定价</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=7 sear=\"pricing\" data-type=\"gj\">
\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>服务总额</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=10 sear=\"htm_contract.discount_total\" data-type=\"gj\" style=\"width: 85px;\">-
\t\t\t\t\t\t\t<input type=\"text\" gjs=11 sear=\"\" data-type=\"gj\" style=\"width: 85px;\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>收款周期</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select gjs=0 sear=\"htm_contract.get_cycle\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t<option value=\"1\">1个月</option>
\t\t\t\t\t\t\t\t<option value=\"3\">3个月</option>
\t\t\t\t\t\t\t\t<option value=\"6\">6个月</option>
\t\t\t\t\t\t\t\t<option value=\"12\">12个月</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>每月费用</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=10 sear=\"htm_task.discount\" data-type=\"gj\" style=\"width: 85px;\">-
\t\t\t\t\t\t\t<input type=\"text\" gjs=11 sear=\"\" data-type=\"gj\" style=\"width: 85px;\">
\t\t\t\t\t\t\t<!--<input type=\"text\" gjs=7 sear=\"discount\" data-type=\"gj\">-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>账本费用</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=10 sear=\"htm_contract.account_book\" data-type=\"gj\" style=\"width: 85px;\">-
\t\t\t\t\t\t\t<input type=\"text\" gjs=11 sear=\"htm_contract.account_book\" data-type=\"gj\" style=\"width: 85px;\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>业务员</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select marketing-id=\"0\" gjs=7 style=\"margin: 12px !important;width: 180px\" class=\"advandced-search select2-hidden-accssible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>签约时间</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"htm_contract.signed_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
                                <input class=\"date-timepicker1\" data-type=\"gj\" data-status = \"time\"  gjs=0 sear=\"htm_contract.signed_time\" class=\"form-control\" style=\"height: 30px; width: 150px;    padding: 5px;\">
                                <span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                                    <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                </span>
                            </div>-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>开始时间</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"start_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
                                <input data-type=\"gj\" data-status = \"time\"  gjs=7 sear=\"start_time\" class=\"form-control\" style=\"height: 30px; width: 150px;    padding: 5px;\">
                                <span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                                    <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                </span>
                            </div>-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>截止时间</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"end_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
                                <input class=\"date-timepicker1\" data-type=\"gj\" data-status=\"time\"  gjs=7 sear=\"end_time\" class=\"form-control\" style=\"height: 30px; width: 150px;height:30px;    padding: 5px;\">
                                <span class=\"input-group-addon\" style=\"width:30px;\">
                                    <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                </span>
                            </div>-->
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
\t\t\t\t\t\t\t<!-- <input type=\"text\" gjs=0> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>备注</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"htm_contract.remark\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>创建人</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=3 sear=\"htm_contract.create_by\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
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
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"htm_contract.create_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
                                <input class=\"date-timepicker1\" data-type=\"gj\" data-status = \"time\"  gjs=0 sear=\"htm_contract.create_time\" class=\"form-control\" style=\"height: 30px; width: 150px;    padding: 5px;\">
                                <span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                                    <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                </span>
                            </div>-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>已收金额</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"htm_contract.get_money\" data-type=\"gj\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>审批人</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=3 sear=\"htm_contract.auth_id1\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
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
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"htm_contract.auth_time1\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- <div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
                                <input class=\"date-timepicker1\" data-type=\"gj\" data-status = \"time\"  gjs=0 sear=\"htm_contract.auth_time1\" class=\"form-control\" style=\"height: 30px; width: 150px;    padding: 5px;\">
                                <span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                                    <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                </span>
                            </div>-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>审批状态</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select gjs=0 sear=\"htm_contract.auth_status1\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t<option value=\"0\">待审批</option>
\t\t\t\t\t\t\t\t<option value=\"1\">未通过</option>
\t\t\t\t\t\t\t\t<option value=\"2\">已通过</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>审批回复</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"htm_contract.auth_remark1\" data-type=\"gj\">
\t\t\t\t\t\t</div>
                   
                   
                   <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>税务类型</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select gjs=0 sear=\"htm_contract.contract_type\" data-type=\"gj\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t<option value=\"1\"> 一般纳税人 </option>
\t\t\t\t\t\t\t\t<option value=\"2\"> 小规模 </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
                   
                   
                   
                   
\t\t\t\t\t\t<div style=\"text-align:center;clear:both;padding-top:10px; \">
\t\t\t\t\t\t\t<button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
                                                                查询
                            </button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"rest\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t重置
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"custom_table\">
\t\t\t\t<table id=\"longTerm\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t<th class=\"center\">
\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
                                <input type=\"checkbox\" class=\"ace\" onclick=\"checkAll(this.checked)\"/>
                                <span class=\"lbl\"></span>
                            </label>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t\t<th data-num=\"1\">审批状态</th>
\t\t\t\t\t\t\t<th data-num=\"2\">订单编码</th>
\t\t\t\t\t\t\t<th data-num=\"3\">企业名称</th>
\t\t\t\t\t\t\t<th data-num=\"4\">税务类型</th>
\t\t\t\t\t\t\t<th data-num=\"5\">合同类型</th>
\t\t\t\t\t\t\t<th data-num=\"6\">合同编码</th>
\t\t\t\t\t\t\t<th data-num=\"7\">服务项目</th>
\t\t\t\t\t\t\t<!--<th data-num=\"7\">服务定价</th>
\t\t\t\t\t\t\t<th data-num=\"8\">合同折扣</th>-->
\t\t\t\t\t\t\t<th data-num=\"8\" style=\"text-align: right !important;\">服务总额</th>
\t\t\t\t\t\t\t<th data-num=\"9\">收款周期</th>
\t\t\t\t\t\t\t<th data-num=\"10\" style=\"text-align: right !important;\">每月费用</th>
\t\t\t\t\t\t\t<th data-num=\"11\" style=\"text-align: right !important;\">账本费用</th>
\t\t\t\t\t\t\t<th data-num=\"12\">业务员</th>
\t\t\t\t\t\t\t<th data-num=\"13\">签约时间</th>
\t\t\t\t\t\t\t<th data-num=\"14\">开始时间</th>
\t\t\t\t\t\t\t<th data-num=\"15\">结束时间</th>
\t\t\t\t\t\t\t<th data-num=\"16\">合同状态</th>
\t\t\t\t\t\t\t<th data-num=\"17\">备注</th>
\t\t\t\t\t\t\t<th data-num=\"18\">创建人</th>
\t\t\t\t\t\t\t<th data-num=\"19\">创建时间</th>
\t\t\t\t\t\t\t<th data-num=\"20\" style=\"text-align: right !important;\">已收金额</th>
\t\t\t\t\t\t\t<th data-num=\"21\" style=\"text-align: right !important;\">待收金额</th>
\t\t\t\t\t\t\t<th data-num=\"22\">审批人</th>
\t\t\t\t\t\t\t<th data-num=\"23\">审批时间</th>
\t\t\t\t\t\t\t<th data-num=\"24\">审批回复</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<tbody id=\"longTerm_data\">
\t\t\t\t\t\t<!-- <tr>
                         <td class=\"center\">
                             <label class=\"pos-rel\">
                                 <input type=\"checkbox\" name=\"check\" class=\"ace\"/>
                                 <span class=\"lbl\"></span>
                             </label>

                         </td>
                         <td data-num=\"1\"><span>国标常务</span></td>
                         <td data-num=\"2\"><span>短期合同</span></td>
                         <td data-num=\"3\"><span>sm009890</span></td>
                         <td data-num=\"4\"><span>注册公司</span></td>
                         <td data-num=\"5\"><span>1000</span></td>
                         <td data-num=\"6\"><span>0</span></td>
                         <td data-num=\"7\"><span>1000</span></td>
                         <td data-num=\"8\"><span>每月</span></td>
                         <td data-num=\"9\"><span>月付</span></td>
                         <td data-num=\"10\"><span>0</span></td>
                         <td data-num=\"11\"><span>0</span></td>
                         <td data-num=\"12\"><span>李驰</span></td>
                         <td data-num=\"13\"><span>李驰</span></td>
                         <td data-num=\"14\"><span>456456</span></td>
                         <td data-num=\"15\"><span>456456</span></td>
                         <td data-num=\"16\"><span>已结束</span></td>
                         <td data-num=\"17\"><span></span></td>
                         <td data-num=\"18\"><span>李辞</span></td>
                         <td data-num=\"19\"><span>2016546456</span></td>
                         <td data-num=\"20\"><span>500</span></td>
                         <td data-num=\"21\"><span>500</span></td>
                         <td>
                             <label class=\"pos-rel\">
                                 <a style=\"cursor: pointer\"  class=\"lbl\">详情&nbsp</a>|
                                 <a style=\"cursor: pointer\"  class=\"lbl\">编辑&nbsp</a>|
                                 <a style=\"cursor: pointer\"  class=\"lbl red\">删除&nbsp</a>
                             </label>
                         </td>
                     </tr>-->
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\" >
\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" id=\"num\"></div>
\t\t\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t\t\t<div id=\"pageBar\" class=\"pagination\"></div>
\t\t\t\t<div  align=\"right\" style=\"float: right;  width: 10%;\">
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

\t\t<!-- 合同编辑 -->
\t\t<div class=\"row\" id=\"template4\" style=\"display:none;\">
\t\t\t<!-- 长期合同 -->
\t\t\t<div class=\"contractType\" style=\"display:none;\">
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label><i class='reqired_label'>*</i>企业名称:</label>
\t\t\t\t\t<select style=\"width:180px;\" class=\"required customer select2\" field=\"customer_id\" msg=\"企业名称不能为空\">
\t\t\t\t\t\t<option value=\"\">  请选择 </option>

\t\t\t\t\t</select>
\t\t\t\t\t<!-- <label>仓位： </label>
                    <select style=\"width:180px;\" class=\"required\" field=\"pos_id\" msg=\"仓位不能为空\">
                        <option value=\"\">  请选择 </option>
                    </select> -->
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>合同编码： </label>
\t\t\t\t\t<select style=\"width: 180px !important;\" name=\"state\" field=\"contract_num\" tabindex=\"-1\" class=\"select2\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t</select>
\t\t\t\t\t<label> 服务周期： </label>
\t\t\t\t\t<select style=\"width:180px;\" class=\"required\" field=\"htm_contract.payment_cycle\" msg=\"请选择维护周期\">
\t\t\t\t\t\t<option value=\"\">  请选择 </option>
\t\t\t\t\t\t<option value=\"1\">每月</option>
\t\t\t\t\t\t<option value=\"3\">季度</option>
\t\t\t\t\t\t<option value=\"6\">半年</option>
\t\t\t\t\t\t<option value=\"12\">一年</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 订单来源： </label>
\t\t\t\t\t<select style=\"width:180px;\" class=\"required\" field=\"htm_contract.is_source\" msg=\"请选择订单来源\">
\t\t\t\t\t\t<option value=\"\">  请选择 </option>
\t\t\t\t\t\t<option value=\"1\">线上</option>
\t\t\t\t\t\t<option value=\"2\">线下</option>
\t\t\t\t\t</select>
\t\t\t\t\t<label> <i class='reqired_label'>*</i>签约时间:</label>
\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<input class=\"date-timepicker1 required\" msg=\"签约时间不能为空\" field=\"htm_contract.signed_time\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                        </span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 税务类型： </label>
\t\t\t\t\t<select style=\"width: 180px;\" field=\"khm_customer.tax_type\" value=\"1\" id=\"tax_type\">
\t\t\t\t\t\t<option value=\"1\">一般纳税人</option>
\t\t\t\t\t\t<option value=\"2\" >小规模</option>
\t\t\t\t\t</select>
\t\t\t\t\t<label class=\"is_tax\" style=\"display: none;\"> 发票认证： </label>
\t\t\t\t\t<select class=\"is_tax\" style=\"width: 180px;display: none;\" field=\"htm_contract.is_tax\"  value=\"1\" id=\"is_tax\">
\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label><i class='reqired_label'>*</i> 业务员： </label>
\t\t\t\t\t<select multiple=\"\" class=\"state \" name=\"state\" class=\"select2 select2-hidden-accessible\" data-placeholder=\"请选择\" style=\"width: 437px;\" tabindex=\"-1\" aria-hidden=\"true\"></select>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label style=\"float:left\">备注：</label>
\t\t\t\t\t<textarea class=\"\" msg=\"\" field=\"htm_contract.remark\" style=\"padding:5px;margin-left:5px;width:437px;risize:none;\"></textarea>
\t\t\t\t</div>
\t\t\t\t<div class=\"long_contract\" style=\"display: none\">
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label>服务产品： </label>
\t\t\t\t\t\t<select style=\"width:180px;\" class=\"required long task\" field=\"product_id\" msg=\"请选择服务产品\">
\t\t\t\t\t\t\t<option value=\"0\">  请选择 </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<label><i class='reqired_label'>*</i>数量： </label>
\t\t\t\t\t\t<input class=\"required task\" type=\"number\" field=\"count\" msg=\"数量不能为空\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label><i class='reqired_label'>*</i>赠送： </label>
\t\t\t\t\t\t<input class=\"required task\" type=\"number\" field=\"count_send\" msg=\"赠送不能为空\" />
\t\t\t\t\t\t<!-- <label><i class='reqired_label'>*</i>标准价： </label>-->
\t\t\t\t\t\t<!-- <input class=\"required task\" type=\"number\" field=\"pricing\" disabled msg=\"标准价不能为空\"/>-->
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label><i class='reqired_label'>*</i>折后价： </label>
\t\t\t\t\t\t<input class=\"required task\" type=\"number\" field=\"discount\" msg=\"折后价不能为空\" />
\t\t\t\t\t\t<label><i class='reqired_label'>*</i>折后总额： </label>
\t\t\t\t\t\t<input class=\"required\" type=\"number\" field=\"discount_total\" disabled msg=\"折后总额不能为空\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label><i class='reqired_label'>*</i>账本费： </label>
\t\t\t\t\t\t<input class=\"required\" type=\"number\" field=\"account_book\" account-book msg=\"账本费不能为空\" />
\t\t\t\t\t\t<!--  <label>收款方式： </label>
                        <select style=\"width:180px;\" class=\"required\" field=\"htm_contract.receivables_way\" msg=\"请选择收款方式\">
                            <option value=\"\">  请选择 </option>
                            <option value=\"2\">支付宝</option>
                            <option value=\"3\">微信</option>
                            <option value=\"1\">现金</option>
                            <option value=\"4\">银行卡</option>
                        </select> -->
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label>合同总额： </label>
\t\t\t\t\t\t<input class=\"required\" disabled type=\"number\" contract-total/>
\t\t\t\t\t\t<label>收款周期： </label>
\t\t\t\t\t\t<select style=\"width:180px;\" class=\"required\" field=\"htm_contract.get_cycle\" msg=\"请选择收款周期\">
\t\t\t\t\t\t\t<option value=\"0\">  请选择 </option>
\t\t\t\t\t\t\t<option value=\"1\">1个月</option>
\t\t\t\t\t\t\t<option value=\"3\">3个月</option>
\t\t\t\t\t\t\t<option value=\"6\">6个月</option>
\t\t\t\t\t\t\t<option value=\"12\">12个月</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label><i class='reqired_label'>*</i>开始时间： </label>
\t\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t<input class=\"required task\" field=\"start_time\" msg=\"合同开始时间只能选择月份1号\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                                <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                            </span>
\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t<input class=\"date-timepicker1 task required\" msg=\"合同开始时间只能选择月份1号\" field=\"start_time\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
\t                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t                        </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<label>结束时间： </label>
\t\t\t\t\t\t<input disabled field=\"end_time\" class=\"end_time task\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- 一次性合同 -->
\t\t\t<div class=\"contractType\" style=\"display:none;\">
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>企业名称:</label>
\t\t\t\t\t<select style=\"width:180px;\" class=\"required customer select2\" field=\"customer_id\" msg=\"企业名称不能为空\">
\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t</select>
\t\t\t\t\t<!-- <label style=\"margin-left:170px\">仓位： </label>
                    <select style=\"width:180px;\" class=\"required\" field=\"pos_id\" msg=\"公司名称不能为空\">
                        <option value=\"\">  请选择 - - -</option>
                    </select> -->
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>合同编码： </label>
\t\t\t\t\t<select style=\"width: 180px !important;\" name=\"state\" field=\"contract_num\" tabindex=\"-1\" class=\"select2\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t</select>
\t\t\t\t\t<!-- <input class=\"required\" field=\"htm_contract.contract_num\" disabled msg=\"合同编码不能为空\"/> -->
\t\t\t\t\t<label style=\"margin-left:170px\"><i class='reqired_label'>*</i>订单总额： </label>
\t\t\t\t\t<input class=\"required\" field=\"discount_total\" msg=\"折后总额不能为空\" />
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 订单来源： </label>
\t\t\t\t\t<select style=\"width:180px;\" class=\"required\" field=\"htm_contract.is_source\" msg=\"请选择订单来源\">
\t\t\t\t\t\t<option value=\"\">  请选择 </option>
\t\t\t\t\t\t<option value=\"1\">线上</option>
\t\t\t\t\t\t<option value=\"2\">线下</option>
\t\t\t\t\t</select>
\t\t\t\t\t<!-- <label>收款方式： </label>
                    <select style=\"width:180px;\" class=\"required\" field=\"htm_contract.receivables_way\" msg=\"请选择收款方式\">
                        <option value=\"\">  请选择 </option>
                        <option value=\"2\">支付宝</option>
                        <option value=\"3\">微信</option>
                        <option value=\"1\">现金</option>
                        <option value=\"4\">银行卡</option>
                    </select> -->
\t\t\t\t\t<label style=\"margin-left:170px\"> <i class='reqired_label'>*</i>签约时间:</label>
\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<input class=\"date-timepicker1 required\" msg=\"签约时间不能为空\" field=\"htm_contract.signed_time\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                        </span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--<div style=\"margin-top:15px;\">

\t\t\t\t\t<label> 发票认证： </label>
\t\t\t\t\t<select style=\"width: 180px;\" field=\"htm_contract.is_tax\">
\t\t\t\t\t\t<option value=\"\">-请选择-</option>
\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t</select>
\t\t\t\t</div>-->
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 业务员： </label>
\t\t\t\t\t<select multiple=\"\" name=\"state\" class=\"state select2 select2-hidden-accessible\" data-placeholder=\"请选择\" style=\"width: 607px;\" tabindex=\"-1\" aria-hidden=\"true\"></select>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label style=\"float:left\"><i class='reqired_label'>*</i>备注：</label>
\t\t\t\t\t<textarea class=\"required\" msg=\"备注不能为空\" field=\"htm_contract.remark\" style=\"padding:5px;margin-left:5px;width:607px;risize:none;\"></textarea>
\t\t\t\t</div>

\t\t\t\t<div class=\"one_contract\" style=\"display: none\">
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<table class=\"contract_content\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t\t\t\t<th>服务产品</th>
\t\t\t\t\t\t\t\t\t<th>服务数量</th>
\t\t\t\t\t\t\t\t\t<!-- <th>标准价</th>-->
\t\t\t\t\t\t\t\t\t<th>服务价格</th>
\t\t\t\t\t\t\t\t\t<!--<th>订单期限</th>-->
\t\t\t\t\t\t\t\t\t<th>开始时间</th>
\t\t\t\t\t\t\t\t\t<th>结束时间</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody class=\"service_detail\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a class=\"increase opration\">+</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td style=\"text-align: left\">
\t\t\t\t\t\t\t\t\t\t<select class=\"short\" syllable=\"product_id\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">请选择</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td style=\"text-align: left\">
\t\t\t\t\t\t\t\t\t\t<input type=\"number\" syllable=\"count\" value=\"1\" style=\"width:60px\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<!--<td>
\t\t\t\t\t\t\t\t\t\t<input type=\"number\" syllable=\"pricing\"  style=\"width:60px\">
\t\t\t\t\t\t\t\t\t</td>-->
\t\t\t\t\t\t\t\t\t<td style=\"text-align: left\">
\t\t\t\t\t\t\t\t\t\t<input type=\"number\" syllable=\"pricing\" style=\"width:60px\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td style=\"text-align: left\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 110px;\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"date-timepicker1 required\" msg=\"开始时间不能为空\" syllable=\"start_time\" style=\"height: 30px; width: 80px;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                                                <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                            </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td style=\"text-align: left\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 110px;\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"date-timepicker1 required\" msg=\"结束时间不能为空\" syllable=\"end_time\" style=\"height: 30px; width: 80px;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                                                <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                            </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;max-width: 511.67px;\">
\t\t\t\t<label style=\"float:left;\">上传文件：</label>
\t\t\t\t<div id=\"fileBox\" style=\"display:inline-block;padding-left:5px;width:calc(100% - 75px);\">
\t\t\t\t\t<label class=\"btn btn-info btn-sm\" style=\"margin-bottom:5px;\">
\t\t\t\t\t\t选择文件
\t\t\t\t\t\t<input type=\"file\" class=\"uploadFile\" style=\"opacity:0;position:absolute;left:-9999px;\">
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div style=\"clear:both;\" class=\"reference\"></div>
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
\t\t<div class=\"row\" id=\"template2\" style=\"display:none;\">
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
\t\t\t\t\t<label> 服务周期： </label>
\t\t\t\t\t<span field=\"htm_contract.payment_cycle\"></span>
\t\t\t\t\t<label> 订单来源： </label>
\t\t\t\t\t<span field=\"htm_contract.is_source\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 签约时间: </label>
\t\t\t\t\t<span field=\"htm_contract.signed_time\"></span>
\t\t\t\t\t<!--<label class=\"typess\"> 发票认证1： </label>
\t\t\t\t\t<span field=\"htm_contract.is_tax\"></span>-->
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label class=\"typess\"> 税务类型\t: </label>
\t\t\t\t\t<span id=\"types\" field=\"khm_customer.tax_type\"></span>
\t\t\t\t
\t\t\t\t\t\t<label class=\"bill\"> 发票认证： </label>
\t\t\t\t\t<span class=\"bill\" field=\"htm_contract.is_tax\"></span>
\t\t
\t\t\t\t\t
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
\t\t\t\t\t\t\t\t<th class=\"center\" style=\"text-align:right !important\">应收金额</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tdead>
\t\t\t\t\t\t\t<tbody id=\"serviceInfo\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>上传文件：</label>
\t\t\t\t\t<div style=\"display:inline-block;padding-left:5px;width:calc(100% - 75px);\" syllable=\"file\">

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- 一次性合同 -->
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
\t\t\t\t\t<label>订单总额： </label>
\t\t\t\t\t<span field=\"htm_contract.discount_total\"></span>
\t\t\t\t\t<label> 订单来源： </label>
\t\t\t\t\t<span field=\"htm_contract.is_source\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<!-- <label>收款方式： </label>
                    <span field=\"htm_contract.receivables_way\"></span> -->
\t\t\t\t\t<label> 签约时间:</label>
\t\t\t\t\t<span field=\"htm_contract.signed_time\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>业务员：</label>
\t\t\t\t\t<span syllable=\"market\"></span>
\t\t\t\t\t<label>备注：</label>
\t\t\t\t\t<span field=\"htm_contract.remark\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">

\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<table class=\"contract_content\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>服务产品</th>
\t\t\t\t\t\t\t\t<th>数量</th>
\t\t\t\t\t\t\t\t<!-- <th>标准价</th>-->
\t\t\t\t\t\t\t\t<th >折后价</th>
\t\t\t\t\t\t\t\t<th>开始时间</th>
\t\t\t\t\t\t\t\t<th>结束时间</th>
\t\t\t\t\t\t\t\t<!--<th>订单期限</th>-->
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>上传文件：</label>
\t\t\t\t\t<div style=\"display:inline-block;padding-left:5px;width:calc(100% - 75px);\" syllable=\"file\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!--添加公海-->
\t\t<div class=\"row\" id=\"template\" style=\"display:none;\">
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> <i class='reqired_label'>*</i>企业名称:</label>
\t\t\t\t<input class=\"required\" addfield=\"name\" msg=\"企业名称不能为空\" />
\t\t\t\t<label> <i class='reqired_label'></i> 法人： </label>
\t\t\t\t<input class=\"\" addfield=\"corporation\" msg=\"法人不能为空\">
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> 注册资本(万)： </label>
\t\t\t\t<input class=\"\" addfield=\"capital\" msg=\"只能是数字\" validate=\"int\" type=\"number\" />
\t\t\t\t<label><i class='reqired_label'></i> 成立日期： </label>
\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t<input class=\"date-timepicker1\" addfield=\"stablish_time\" msg=\"\" style=\"height: 30px; width:inherit;\">
\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;position:absolute;right:0;border-left:1px solid #ddd;\">
\t                                <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t                            </span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> <i class='reqired_label'></i>省市区：</label>
\t\t\t\t<span id=\"city\" title_=\"area\">
\t                <select class=\"prov\"></select>  
\t                <select class=\"city\" disabled=\"disabled\"></select>  
\t                <select class=\"dist\" disabled=\"disabled\"></select>  
\t            </span>
\t\t\t</div>

\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> 公海类型：</label>
\t\t\t\t<span id=\"city\" title_=\"area\">
\t     \t\t\t<select style=\"margin-right: 12px !important;width: 180px\" addfield=\"type\"  class=\"cusType select2-hidden-accessible\" tabindex=\"-1\" sear=\"type\" >
\t\t\t\t\t
\t          \t</select>
\t            </span>
\t\t\t\t<!--<button id=\"addTypeBtn\" class=\"btn\">添加</button>-->
\t\t\t</div>

\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> <i class='reqired_label'></i>地址： </label>
\t\t\t\t<input class=\"\" addfield=\"address\" msg=\"公司地址不能为空\" style=\"width:457px;\" />
\t\t\t</div>

\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> <i class='reqired_label'>*</i>联系人姓名： </label>
\t\t\t\t<input class=\"required\" addfield=\"contacts\" msg=\"联系人姓名不能为空\" />
\t\t\t\t<label> 电话号码： </label>
\t\t\t\t<input class=\"\" addfield=\"tel\" msg=\"\" />
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> 网址： </label>
\t\t\t\t<input class=\"\" addfield=\"url\" msg=\"\" />
\t\t\t\t<label> <i class='reqired_label'></i>手机号码： </label>
\t\t\t\t<input class=\"\" addfield=\"phone\" msg=\"手机号码不能为空\">
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> 传真： </label>
\t\t\t\t<input class=\"\" addfield=\"fax\" msg=\"\" />
\t\t\t\t<label> 邮箱： </label>
\t\t\t\t<input class=\"\" addfield=\"email\" msg=\"\">
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> <i class='reqired_label'></i>客户来源： </label>
\t\t\t\t<select class=\"source\" addfield=\"source\" style=\"width:180px;\" msg=\"\">
\t\t\t\t\t<option value=\"\">  请选择 </option>
\t\t\t\t\t<option value=\"转介绍\">转介绍</option>
\t\t\t\t\t<option value=\"电话咨询\">电话咨询</option>
\t\t\t\t\t<option value=\"线上注册\">线上注册</option>
\t\t\t\t\t<option value=\"客户上门\">客户上门</option>
\t\t\t\t\t<option value=\"陌生拜访\">陌生拜访</option>
\t\t\t\t\t<option value=\"公司资源\">公司资源</option>
\t\t\t\t\t<option value=\"个人资源\">个人资源</option>
\t\t\t\t\t<option value=\"广告宣传\">广告宣传</option>
\t\t\t\t\t<option value=\"电话营销\">电话营销</option>
\t\t\t\t</select>
\t\t\t\t<label class=\"introducer\" style=\"display:none;\"> 介绍人： </label>
\t\t\t\t<input class=\"introducer\" addfield=\"introduce\" msg=\"\" style=\"display:none;\">
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> 所属行业： </label>
\t\t\t\t<select class=\"\" style=\"width:180px;\" addfield=\"industry\" msg=\"\">
\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t<option value=\"1\">批发零售业</option>
\t\t\t\t\t<option value=\"2\">制造业</option>
\t\t\t\t\t<option value=\"3\">租赁和商务服务业</option>
\t\t\t\t\t<option value=\"4\">仓储运输业</option>
\t\t\t\t\t<option value=\"5\">餐饮住宿业</option>
\t\t\t\t\t<option value=\"6\">信息软件业</option>
\t\t\t\t\t<option value=\"7\">金融业</option>
\t\t\t\t\t<option value=\"8\">房地产业</option>
\t\t\t\t\t<option value=\"9\">建筑业</option>
\t\t\t\t\t<option value=\"10\">教育</option>
\t\t\t\t\t<option value=\"11\">文体娱乐业</option>
\t\t\t\t\t<option value=\"12\">卫生和社会工作</option>
\t\t\t\t\t<option value=\"13\">居民服务</option>
\t\t\t\t\t<option value=\"14\">修理业</option>
\t\t\t\t\t<option value=\"15\">农林牧渔业</option>
\t\t\t\t</select>
\t\t\t\t<label> 公司规模： </label>
\t\t\t\t<!--<input class=\"\" addfield=\"scale\" msg=\"\">-->
\t\t\t\t<select style=\"width: 180px\" addfield=\"scale\"   >
\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t<option value=\"10人以下\">10人以下</option>
\t\t\t\t<option value=\"10-50人\">10-50人</option>
\t\t\t\t<option value=\"50-100人\">50-100人</option>
\t\t\t\t<option value=\"100-200人\">100-200人</option>
\t\t\t\t<option value=\"200人以上\">200人以上</option>
\t\t\t</select>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> <i class='reqired_label'></i>税务类型： </label>
\t\t\t\t<select class=\"\" addfield=\"tax_type\"  style=\"width:180px;\" msg=\"请选择税务类型\">
\t\t\t\t\t<option value=\"\">  请选择 </option>
\t\t\t\t\t<option value=\"1\">一般纳税人</option>
\t\t\t\t\t<option value=\"2\">小规模</option>
\t\t\t\t</select>
\t\t\t\t<label> 经营范围： </label>
\t\t\t\t<input class=\"\" addfield=\"range\" msg=\"\">
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label style=\"float:left;\"> 备注： </label>
\t\t\t\t<textarea style=\"width:457px;margin-left:5px;resize:none;padding:5px;\" addfield=\"remark\" class=\"in_remark\"></textarea>
\t\t\t</div>
\t\t\t<div style=\"text-align:center;margin-top:15px;border-top:1px solid #ccc;padding-top: 10px;\">
\t\t\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
\t\t\t\t<button class=\"sure_button add\">
\t                            <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
\t                            保存
\t                        </button>
\t\t\t</div>
\t\t</div>

\t\t<!-- //添加合同 -->
\t\t<div class=\"row\" id=\"template1\" style=\"display:none;\">
\t\t\t<ul class=\"statistics_tit clear\">
\t\t\t\t<li class=\"acti\">长期合同</li>
\t\t\t\t<li class=\"\">一次性合同</li>
\t\t\t</ul>
\t\t\t<div>
\t\t\t\t<!--长期合同-->
\t\t\t\t<div class=\"contractType\">
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label><i class='reqired_label'>*</i>企业名称： </label>
\t\t\t\t\t\t<select style=\"width: 180px !important;\" name=\"state\" field=\"customer_id\" tabindex=\"-1\" class=\"select2 customer\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<button type=\"button\" id=\"addItem1\" style=\"outline: none;background-color: #009688 !important;\" class=\"btn btn-info btn-sm position-relative\">
                        <i class=\"fa fa-plus\"></i>
                        \t添加
                        </button>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label>合同编码： </label>

\t\t\t\t\t\t<select style=\"width: 180px !important;\" contract_type=\"1\" name=\"state\" field=\"contract_num\" tabindex=\"-1\" class=\"select2\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t</select>

\t\t\t\t\t\t<label> <i class='reqired_label'>*</i>服务周期： </label>
\t\t\t\t\t\t<select style=\"width:180px;\" class=\"required\" field=\"payment_cycle\" msg=\"请选择维护周期\">
\t\t\t\t\t\t\t<option value=\"\">  请选择 </option>
\t\t\t\t\t\t\t<option value=\"1\">每月</option>
\t\t\t\t\t\t\t<option value=\"3\">季度</option>
\t\t\t\t\t\t\t<option value=\"6\">半年</option>
\t\t\t\t\t\t\t<option value=\"12\">一年</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label> 订单来源： </label>
\t\t\t\t\t\t<select style=\"width:180px;\" class=\"\" field=\"is_source\" msg=\"\">
\t\t\t\t\t\t\t<option value=\"2\">线下</option>
\t\t\t\t\t\t\t<!--<option value=\"\">  请选择 </option>-->
\t\t\t\t\t\t\t<option value=\"1\">线上</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<label><i class='reqired_label'>*</i> 签约时间： </label>
\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t<input class=\"date-timepicker1 required\" msg=\"签约时间不能为空\" field=\"signed_time\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                                <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                            </span>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label><i class='reqired_label'>*</i> 税务类型： </label>
\t\t\t\t\t\t<select style=\"width: 180px;\" class=\"required\" msg=\"税务类型不能为空\"
\t\t\t\t\t\tfield=\"tax_type\" value=\"2\" id=\"tax_type\">
\t\t\t\t\t\t\t<option value=\"1\" >一般纳税人</option>
\t\t\t\t\t\t\t<option value=\"2\" selected=true>小规模</option>
\t\t\t\t\t\t</select>

\t\t\t\t\t\t<label class=\"is_tax\" style=\"display: none;\"> 发票认证： </label>
\t\t\t\t\t\t<select style=\"width: 180px;display: none;\" value=\"\"  class=\"is_tax\" msg=\"发票认证不能为空\" 
\t\t\t\t\t\tfield=\"is_tax\" id=\"is_tax\">
\t\t\t\t\t\t\t<option value=\"\" >请选择</option>
\t\t\t\t\t\t\t<option value=\"1\" >是</option>
\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label> <i class='reqired_label'>*</i>业务员： </label>
\t\t\t\t\t\t<select multiple=\"\" name=\"state\" class=\"state select2 select2-hidden-accessible\" data-placeholder=\"请选择\" style=\"width: 437px;\" tabindex=\"-1\" aria-hidden=\"true\"></select>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label style=\"float:left\">备注：</label>
\t\t\t\t\t\t<textarea class=\"\" msg=\"\" field=\"remark\" style=\"padding:5px;margin-left:5px;width:437px;risize:none;\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"display:none;\" class=\"hiddenContent\">
\t\t\t\t\t\t<!--<label><i class='reqired_label'>*</i>服务产品： </label>
\t\t\t\t\t\t\t<select style=\"width:180px;\" class=\"required long\" field=\"product_id\" msg=\"请选择服务产品\">
\t\t\t\t\t\t\t\t<option value=\"\">  请选择 </option>
\t\t\t\t\t\t\t</select>-->
\t\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t\t<label><i class='reqired_label'>*</i>服务产品： </label>
\t\t\t\t\t\t\t<select style=\"width:180px;\" class=\"required long\" field=\"product_id\" msg=\"请选择服务产品\">
\t\t\t\t\t\t\t\t<option value=\"\">  请选择 </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<label><i class='reqired_label'>*</i>收款周期： </label>
\t\t\t\t\t\t\t<select style=\"width:180px;\" class=\"required\" field=\"get_cycle\" msg=\"请选择收款周期\">
\t\t\t\t\t\t\t\t<option value=\"0\">  请选择 </option>
\t\t\t\t\t\t\t\t<option value=\"1\">1个月</option>
\t\t\t\t\t\t\t\t<option value=\"3\">3个月</option>
\t\t\t\t\t\t\t\t<option value=\"6\">6个月</option>
\t\t\t\t\t\t\t\t<option value=\"12\">12个月</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t\t<label>赠送数量： </label>
\t\t\t\t\t\t\t<input class=\"\" field=\"count_send\" value=\"0\" type=\"number\" msg=\"\" />
\t\t\t\t\t\t\t<label><i class='reqired_label'>*</i>服务数量： </label>
\t\t\t\t\t\t\t<input class=\"required\" field=\"count\" type=\"number\" value=\"12\" msg=\"数量不能为空\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!--<label>标准价： </label>
                            <input class=\"required\" field=\"pricing\" type=\"number\" disabled msg=\"标准价不能为空\"/>-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t\t<label><i class='reqired_label'>*</i>服务单价： </label>
\t\t\t\t\t\t\t<input class=\"required\" field=\"discount\" type=\"number\" msg=\"折后价不能为空\" />
\t\t\t\t\t\t\t<label>服务总价： </label>
\t\t\t\t\t\t\t<input class=\"required\" field=\"discount_total\" type=\"number\" disabled msg=\"折后总额不能为空\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t\t<label><i class='reqired_label'>*</i>账本费： </label>
\t\t\t\t\t\t\t<input class=\"required\" field=\"account_book\" account-book type=\"number\" msg=\"账本费不能为空\" />
\t\t\t\t\t\t\t<label>订单总额： </label>
\t\t\t\t\t\t\t<input class=\"required\" disabled type=\"number\" contract-total/>
\t\t\t\t\t\t\t<!-- <label>收款方式： </label>
                            <select style=\"width:180px;\" class=\"required\" field=\"receivables_way\" msg=\"请选择收款方式\">
                                <option value=\"\">  请选择 </option>
                                <option value=\"1\">现金</option>
                                <option value=\"2\">支付宝</option>
                                <option value=\"3\">微信</option>
                                <option value=\"4\">银行卡</option>
                            </select> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t\t<label><i class='reqired_label'>*</i>开始时间： </label>
\t\t\t\t\t\t\t<div class=\"input-group \" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<input class=\"required date-timepicker1\" field=\"start_time\" msg=\"开始时间不能为空\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                                    <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label>结束时间： </label>
\t\t\t\t\t\t\t<input disabled field=\"end_time\" class=\"end_time\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"display:none;\" class=\"hiddenContent\">
\t\t\t\t\t\t<div style=\"margin-top:15px;max-width: 511.67px;\">
\t\t\t\t\t\t\t<label style=\"float:left;\">上传文件：</label>
\t\t\t\t\t\t\t<div id=\"fileBox\" style=\"display:inline-block;padding-left:5px; margin-top:10px;width:calc(100% - 75px); \">
\t\t\t\t\t\t\t\t<label class=\"btn btn-info btn-sm\" style=\"margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t选择文件
\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"uploadFile\" style=\"opacity:0;position:absolute;left:-9999px;\">
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"clear:both;\" class=\"reference\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"margin-top:15px;text-align:center;\">
\t\t\t\t\t\t<button class=\"btn btn-info btn-sm more\" style=\"position:relative;left:35px;\">填写更多...</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- 一次性 -->
\t\t\t\t<div class=\"contractType\" style=\"display:none;\">
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label><i class='reqired_label'>*</i>企业名称： </label>
\t\t\t\t\t\t<select style=\"width:180px;\" class=\"required customer\" field=\"customer_id\" msg=\"企业名称不能为空\">
\t\t\t\t\t\t\t<option value=\"\">  请选择 </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<button type=\"button\" id=\"addItem1\" style=\"outline: none;background-color: #009688 !important;\" class=\"btn btn-info btn-sm position-relative\">
                        <i class=\"fa fa-plus\"></i>
                        \t添加
                    </button>
\t\t\t\t\t\t<!--<label style=\"margin-left:170px;\">仓位： </label>
                        <select style=\"width:180px;\" contract_type=\"2\" class=\"required\" field=\"pos_id\" msg=\"公司名称不能为空\">
                            <option value=\"\">  请选择 </option>
                        </select> -->
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label>合同编码： </label>
\t\t\t\t\t\t<select style=\"width: 180px !important;\" contract_type=\"2\" name=\"state\" field=\"contract_num\" tabindex=\"-1\" class=\"select2\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<label>订单总额： </label>
\t\t\t\t\t\t<input class=\"\" field=\"discount_total\" disabled msg=\"\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label> 订单来源： </label>
\t\t\t\t\t\t<select style=\"width:180px;\" class=\"\" field=\"is_source\" msg=\"\">
\t\t\t\t\t\t\t<option value=\"2\">线下</option>
\t\t\t\t\t\t\t<!--<option value=\"\">  请选择 </option>-->
\t\t\t\t\t\t\t<option value=\"1\">线上</option>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<label> <i class='reqired_label'>*</i>签约时间： </label>
\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t<input class=\"date-timepicker1 required\" msg=\"签约时间不能为空\" field=\"signed_time\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                                <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                            </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- <label>收款方式： </label>
                        <select style=\"width:180px;\" class=\"required\" field=\"receivables_way\" msg=\"请选择收款方式\">
                            <option value=\"\">  请选择 </option>
                            <option value=\"2\">支付宝</option>
                            <option value=\"3\">微信</option>
                            <option value=\"1\">现金</option>
                            <option value=\"4\">银行卡</option>
                        </select> -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- <div style=\"margin-top:15px;\">
                        
                      <label> 发票认证： </label>
                        <select style=\"width: 180px;\" field=\"is_tax\">
                            <option value=\"\">-请选择-</option>
                            <option value=\"1\">是</option>
                            <option  value=\"0\">否</option>
                        </select>
                    </div> -->
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label> <i class='reqired_label'>*</i>业务员： </label>
\t\t\t\t\t\t<select multiple=\"\" name=\"state\" style=\"width: 437px\" class=\"state select2 select2-hidden-accessible\" data-placeholder=\"请选择\" tabindex=\"-1\" aria-hidden=\"true\"></select>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label style=\"float:left\">备注：</label>
\t\t\t\t\t\t<textarea class=\"\" msg=\"\" field=\"remark\" style=\"padding:5px;width: 437px;margin-left:5px;resize: none;\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"display:none;\" class=\"hiddenContent\">
\t\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t\t<table class=\"contract_content\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t\t\t\t\t<th><i class='reqired_label'>*</i>服务产品</th>
\t\t\t\t\t\t\t\t\t\t<th><i class='reqired_label'>*</i>服务数量</th>
\t\t\t\t\t\t\t\t\t\t<!-- <th><i class='reqired_label'>*</i>标准价</th>-->
\t\t\t\t\t\t\t\t\t\t<th><i class='reqired_label'>*</i>服务价格</th>
\t\t\t\t\t\t\t\t\t\t<th><i class='reqired_label'>*</i>开始时间</th>
\t\t\t\t\t\t\t\t\t\t<th><i class='reqired_label'>*</i>结束时间</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"increase opration\">+</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"short\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" syllable=\"count\" value=\"1\" style=\"width:60px\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" syllable=\"pricing\" style=\"width:60px\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 110px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"date-timepicker1 required start_time\" syllable=\"start_time\"  msg=\"开始时间不能为空\" style=\"height: 30px; width: 80px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                                                    <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                                </span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 110px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"date-timepicker1 required end_time\" syllable=\"end_time\"  msg=\"开始时间不能为空\" style=\"height: 30px; width: 80px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                                                    <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                                </span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"display:none;\" class=\"hiddenContent\">
\t\t\t\t\t\t<div style=\"margin-top:15px;max-width: 511.67px;\">
\t\t\t\t\t\t\t<label style=\"float:left;\">上传文件：</label>
\t\t\t\t\t\t\t<div id=\"fileBox\" style=\"display:inline-block;padding-left:5px;margin-top:10px;width:calc(100% - 75px); \">
\t\t\t\t\t\t\t\t<label class=\"btn btn-info btn-sm\" style=\"margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t选择文件
\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"uploadFile\" style=\"opacity:0;position:absolute;left:-9999px;\">
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"clear:both;\" class=\"reference\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"margin-top:15px;text-align:center;\">
\t\t\t\t\t\t<button class=\"btn btn-info btn-sm more\" style=\"position:relative;left:35px;\">填写更多...</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t<div style=\"text-align:center;margin-top:15px;\">
\t\t\t\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
\t\t\t\t\t<button class=\"sure_button add\">
\t\t\t\t\t\t<i class=\"fa fa-check\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t保存
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t</div>
\t</div>
</div>

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

\t<div class=\"label_popup\" id=\"contractsXq\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t<span style=\"display: inline-block;\">请选择合同编码</span>
\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t</div>

\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t<select id=\"contractsNums\" class=\"select2 select2-hidden-accessible\" data-placeholder=\"请选择\" style=\"width: 200px;\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t</select>
\t\t\t\t<!--<hr>-->
\t\t\t</div>
\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t<button class=\"close_label\">关闭</button>
\t\t\t\t<button class=\"hold Con\">保存</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 1497
        $this->loadTemplate("admin/mark.html", "admin/contractManagement/contracts.html", 1497)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/contractManagement/contracts.html", 1497)->display($context);
        // line 1498
        echo "</div>
<script src=\"/resource/adimin/assets/js/LocalResizeIMG.js\"></script>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script src=\"/resource/adimin/assets/js/src/jquery.cityselect.js\"></script>
<script>
\tjQuery(function(\$) {
        //导出功能
        cs.exportFile({
            url:\"/api/api_contract/contract_export\",
            title:\"订单记录\"

        });
\t\tif(cs.approve_authority({
\t\t\t\tname: '合同',
\t\t\t\tnodes: [136]
\t\t\t})) {
\t\t\t\$('[contentAuthority=\"136\"]').show();
\t\t}
\t\tcs.getNodes([135]);
\t\tcs.dataRang();
\t\tvar order = 'htm_contract.id desc';
\t\tvar pagesize = 10; //每页显示的条目数
\t\tvar market = ''; //搜索过滤条件  业务员
\t\tvar filter = ''; //过滤条件
\t\tvar employees = {}; //所有员工
\t\tvar service_product = []; //所有服务产品
\t\tvar time = ykp.getCookie(\"time\");
\t\t\t
\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_contract/grid',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: \"\",
\t\t\t\tlimit: pagesize,
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '.pageBar'
\t\t\t},
\t\t\tcontentId: \"#longTerm_data\", //默认排序
\t\t\tinitOrder: \"\", //初始化sort
\t\t\tdefaultOrder: order,
\t\t\tparams: [{
\t\t\t\tid: \"#longTerm\",
\t\t\t\tfield: [\"\",\"\", \"htm_contract.auth_status1\",\"htm_contract.contract_code\", \"khm_customer.id\",\"khm_customer.tax_type\", \"htm_contract.contract_type\", \"htm_contract.contract_num\", \"\", \"htm_contract.discount_total\",
\t\t\t\t\"htm_contract.get_cycle\",\"\",\"htm_contract.account_book\", \"\",\"htm_contract.signed_time\",\"htm_contract.start_time\",\"htm_contract.end_time\",\"htm_contract.status\",\"htm_contract.remark\",\"htm_contract.create_by\",
\t\t\t\t\t\"htm_contract.create_time\",\"htm_contract.get_money\",\"htm_contract.total_monry\", \"htm_contract.auth_id1\",\"htm_contract.auth_time1\",\"htm_contract.auth_remark1\"]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});
\t\t
\t\t
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
\t\t\t\t\ttimestamp = `htm_contract.signed_time>\${today}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '2':
\t\t\t\t\ttimestamp = `htm_contract.signed_time<\${today} and htm_contract.signed_time>\${today-86400}`
\t\t\t\t\tbreak;
\t\t\t\tcase '3':
\t\t\t\t\ttimestamp = `htm_contract.signed_time>\${today-86400*6} and <\${today}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '4':
\t\t\t\t\ttimestamp = `htm_contract.signed_time>\${today-86400*29}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '5':
\t\t\t\t\ttimestamp = `htm_contract.signed_time>\${today-86400*day_1}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '6':
\t\t\t\t\ttimestamp = `htm_contract.signed_time<\${today-86400*day_1} and htm_contract.signed_time>\${newdaytime}`;
\t\t\t\t\tbreak;
\t\t\t}
\t\t\tvar filter = `htm_contract.is_del = 0 and \${timestamp}`;
            var aid_2 = ykp.getCookie(\"aid_2\");
\t\t\tif(aid_2 != '' || aid_2 != undefined) {
\t\t\t\tfilter = `htm_contract.is_del = 0 and \${timestamp} and htm_contract.create_by = \${aid_2}`;
\t\t\t}
\t\t\tvar data = {
\t\t\t\t\"limit\": pagesize,
\t\t\t\t\"filter\": filter
\t\t\t}
\t\t\tgetDatalist_2(data);
\t\t\tykp.setCookie(\"aid\", \"\", (1 / 24));
\t\t\tykp.setCookie(\"time\", \"\", (1 / 24));
\t\t} else if(ykp.getCookie('titleTask') && ykp.getCookie('titleTask') != '') {
\t\t\tvar today = new Date().setHours(0, 0, 0, 0) / 1000;
\t\t\tvar uid = JSON.parse(ykp.getCookie('userinfo')).id;
\t\t\tvar data = {
\t\t\t\t\"limit\": pagesize,
\t\t\t\t//\"filter\": `htm_contract.status in (1,3) and htm_contract.end_time < \${today+86400} and htm_contract.end_time > \${today-86400*90} and htm_contract.contract_code in (select contract_code from htm_contract_book where user = \${uid} and contract_code != 0)`
\t\t\t\t\"filter\": `htm_contract.status !=4 and htm_contract.end_time > \${today} and htm_contract.end_time < \${today+86400*90} and htm_contract.contract_type = 1 and htm_contract.is_renew = 0`
\t\t\t}
\t\t\tgetDatalist_2(data);
\t\t\tykp.setCookie(\"titleTask\", '', (1 / 24));
\t\t} else {
\t\t\t//页面初始化
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetDatalist();
\t\t}

\t\t\$('.myFilter').click(function() {
\t\t\tif(!\$(this).hasClass('clc')) {
\t\t\t\t\$(this).addClass('clc').siblings().removeClass('clc');
\t\t\t}
\t\t\tvar data = {
\t\t\t\t\"limit\": pagesize,
\t\t\t\t'page': 1,
\t\t\t\t'filter': '',
\t\t\t\t'order': order
\t\t\t};
\t\t\tvar filter_ = \$(this).attr('data-status');
\t\t\tif(filter_ == 'a') {
\t\t\t\tfilter = \"\";
\t\t\t\tgetDatalist();
\t\t\t\treturn;
\t\t\t}
\t\t\tfilter = 'htm_contract.auth_status1 = '+filter_;
\t\t\tdata['filter'] = 'htm_contract.auth_status1 = ' + filter_;
\t\t\tgetDatalist_2(data);

\t\t})

\t\tfunction getDatalist_2(data) {
\t\t\tykp.list({
\t\t\t\turl: '/api/api_contract/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: data,
\t\t\t\torder: order,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#longTerm_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t});
\t\t}

\t\t\$('#filterBtns a').mouseover(function() {
\t\t\t\$(this).addClass('over');
\t\t})
\t\t\$('#filterBtns a').mouseout(function() {
\t\t\t\$(this).removeClass('over');
\t\t})

\t\t

\t\t\$('.flush').click(function() {
\t\t\tfilter = '';
\t\t\tmarket= \"\";
\t\t\t\$('[pts=\"0\"]').val('');
\t\t\t\$('[sear=\"marketing_id\"]').val('').trigger('change');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetDatalist();
\t\t})

\t\t//获取所有员工
\t\tykp.doAjax({
\t\t\tasync: false,
\t\t\turl: '/api/api_employees/f7',
\t\t\tmethod: 'post',
\t\t\tasync:true,
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
\t\t
\t\t
\t\t//获取所有服务产品
\t\tykp.doAjax({
\t\t\tasync: false,
\t\t\turl: '/api/api_product/f7',
\t\t\tmethod: 'post',
\t\t\tasync:true,
\t\t\tdata: {
\t\t\t\tselect: 'ckm_product.id,ckm_product.name,ckm_product.type,ckm_product.price',
\t\t\t\tfilter: 'ckm_product.is_del <> 1',
\t\t\t},
\t\t\tsuccess: function(res) {
\t\t\t\tservice_product = res.data;
                var data = res.data;
\t\t\t\t\$('.advandced-search').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});
\t\t\t\t\$('#product').html(\"\");
\t\t\t\t\$('#product').append('<option value=\"\">请选择</option>');
\t\t\t\tfor(var i in data) {
\t\t\t\t\tif(data[i]['name']) {
\t\t\t\t\t\t\$('#product').append(new Option(data[i]['name'],data[i]['name']));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t});

\t\t//自定义列表
\t\tcs.custorm_check('#longTerm', '#longTerm_data', true);

\t\t//切换每页显示的条目数
\t\t\$('#changePageNum').change(function() {
\t\t\tpagesize = \$(this).val();
\t\t\tykp.setCookie('page_size',pagesize);
\t\t\tgetDatalist();
\t\t})

\t\t//普通搜索
\t\tfunction generalSearch() {
\t\t\t
            var data = {
                url: '/api/api_contract/grid',
                method: 'post',
                data: {
                    limit: pagesize,
/*                     market: market,
                    filter: _filter,
                    order: order */
                }
            };
/*             cs.doSearch('#search', data, 'filter', false, function(res, _filter) {
                filter = _filter;
                if(res.data.items == \"\") {
                    ykp.prompt('未搜索到数据');
                    \$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
                    return;
                }
                addList(res);
            }, filter); */
            
            cs.doSearch('#search', data, 'filter', false, function(res, _filter) {
\t\t\t\tfilter = _filter;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#longTerm_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d;\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t} else {
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t});
\t\t\t/*\$('#search').click(function() {
\t\t\t\tvar _filter = [];
\t\t\t\t\$('[pts=\"0\"]').each(function(i, e) {
\t\t\t\t\tif(\$(this).val().trim()) {
\t\t\t\t\t\tif(\$(this).attr('sear') == 'market') {
\t\t\t\t\t\t\tmarket = \$(this).val().trim();
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\t_filter.push(\$(this).attr('sear') + ' like \\'%' + \$(this).val().trim() + '%\\'');
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tif(!market && _filter.length == 0) {
\t\t\t\t\tykp.prompt('搜索条件至少输入一个！');
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t_filter = _filter.join(' and ');
\t\t\t\tif(\$('#pageBar li ').length > 0) {
\t\t\t\t\t\$('#pageBar').children().remove();
\t\t\t\t}
\t\t\t\tykp.list({
\t\t\t\t\turl: '/api/api_contract/grid',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tlimit: pagesize,
\t\t\t\t\t\tmarket: market,
\t\t\t\t\t\tfilter: _filter,
\t\t\t\t\t\torder: order
\t\t\t\t\t},
\t\t\t\t\tpageBar: {
\t\t\t\t\t\tid: '#pageBar'
\t\t\t\t\t},
\t\t\t\t\tloadList: function(res) {
\t\t\t\t\t\tfilter = _filter;
\t\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\t\$('#longTerm_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});*/
\t\t}

\t\t//高级搜索列表显示与隐藏
\t\tcs.showHeightSearch('#heightsearch', '#heightsearch1');

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
\t\t\t\t\t\$('#longTerm_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d;\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t} else {
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//获取合同列表数据
\t\tfunction getDatalist() {
\t\t\tgeneralSearch();
\t\t\tadvancedSearch();
\t\t\tykp.list({
\t\t\t\turl: '/api/api_contract/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: pagesize,
\t\t\t\t\tfilter: filter,
\t\t\t\t\torder: 'htm_contract.id desc',
\t\t\t\t\tmarket: market
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#longTerm_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//数据处理
\t\tfunction addList(res) {
\t\t\t
\t\t\tvar data = res.data.items;
            var html = [];
\t\t\tvar approve_statu = ['待审批', '未通过', '已通过']; //审批状态
\t\t\tvar cStatus = ['未激活', '已激活', '已挂起', '已结束', '已作废']; //合同状态
\t\t\tvar cycle = {
\t\t\t\t'1': '1个月',
\t\t\t\t'3': '3个月',
\t\t\t\t'6': '6个月',
\t\t\t\t'12': '12个月'
\t\t\t}; //维护周期
\t\t\tvar salesman_id = []; //业务人员id
\t\t\tvar salesman = []; //业务人员
\t\t\tvar task = []; //任务
\t\t\tvar task_detail = {}; //任务详情

\t\t\t//审批权限为true可以审批,为false不可审批
\t\t\tvar spApp = cs.approve_authority({
\t\t\t\tname: '合同',
\t\t\t\tnodes: [138]
\t\t\t});
\t\t\tvar cxApp = cs.approve_authority({
\t\t\t\tname: '合同',
\t\t\t\tnodes: [265]
\t\t\t});
\t\t\tvar continue_mark = cs.getNodes([139], true);
\t\t\tvar edit_statu = cs.getNodes([137], true);
            var del_statu = cs.getNodes([286], true);

            //td 展示 || 隐藏
\t\t\tvar styles = [];
\t\t\tvar today = new Date().setHours(0, 0, 0, 0) / 1000;
\t\t\t\$('#longTerm .thColor th').not(':first').each(function(i, e) {
\t\t\t\tstyles.push(\$(this).css('display'));
\t\t\t});
            for(i = 0; i < data.length; i++) {
\t\t\t\ttask_detail['product'] = [];
\t\t\t\ttask = data[i]['task'];
\t\t\t\tsalesman_id = data[i]['market'];
\t\t\t\tfor(var k in salesman_id) {
\t\t\t\t\tsalesman.push(salesman_id[k]['info']['name']);
\t\t\t\t}

\t\t\t\tfor(var k in task) {
\t\t\t\t\tif(k == 0) {
\t\t\t\t\t\ttask_detail['start_time'] = task[k]['start_time'];
\t\t\t\t\t\ttask_detail['end_time'] = task[k]['end_time'];
\t\t\t\t\t}

\t\t\t\t\tif(k != 0) {
\t\t\t\t\t\ttask_detail['start_time'] = task_detail['start_time'] >= task[k]['start_time'] ? task[k]['start_time'] : task_detail['start_time'];
\t\t\t\t\t\ttask_detail['end_time'] = task_detail['end_time'] > task[k]['end_time'] ? task_detail['end_time'] : task[k]['end_time'];
\t\t\t\t\t}

\t\t\t\t\tif(data[i]['htm_contract.contract_type'] == 1) {
\t\t\t\t\t\ttask_detail['pricing'] = task[k]['pricing'];
\t\t\t\t\t\ttask_detail['discount'] = task[k]['discount'];
\t\t\t\t\t\ttask_detail['count'] = task[k]['count'];
\t\t\t\t\t\ttask_detail['count_send'] = task[k]['count_send'];
\t\t\t\t\t}

\t\t\t\t\tif(data[i]['htm_contract.contract_type'] == 2) {
\t\t\t\t\t\ttask_detail['pricing'] = '';
\t\t\t\t\t\ttask_detail['discount'] = '';
\t\t\t\t\t\ttask_detail['count'] = '';
\t\t\t\t\t\ttask_detail['count_send'] = '';
\t\t\t\t\t}

\t\t\t\t\ttask_detail['product'].push(task[k]['productName']);
\t\t\t\t}
\t\t\t\t
                //console.log((data[i]['htm_contract.end_time'] - 86400 / 7776000) ,(today - 86400));
                //console.log((data[i]['htm_contract.end_time'] - 86400 / 7776000) <= (today - 86400));
                //console.log((continue_mark ? (data[i]['htm_contract.is_renew']  != 2 && data[i]['htm_contract.end_time'] >= (today - 86400 * 90) && data[i]['htm_contract.end_time'] <= (today + 86400) && data[i]['htm_contract.contract_type'] == 1 && data[i]['htm_contract.is_renew']  == 0 &&  data[i]['htm_contract.status'] !=4 ? 'inline-block' : 'none') : 'none'));
                html +=
\t\t\t\t\t'<tr data-id=\"' + data[i]['htm_contract.id'] + '\" data-type=\"' + data[i]['htm_contract.contract_type'] + '\" data-isrenew=\"' + data[i]['htm_contract.is_renew'] + '\" data-status=\"' + data[i]['htm_contract.auth_status1'] + '\">' +
\t\t\t\t\t'<td class=\"center\">' +
\t\t\t\t\t'<label class=\"pos-rel\">' +
\t\t\t\t\t'<input type=\"checkbox\" name=\"check\" class=\"ace\"/>' +
\t\t\t\t\t'<span class=\"lbl\"></span>' +
\t\t\t\t\t'</label>' +
\t\t\t\t\t'</td>' +
\t\t\t\t\t'<td>' +
\t\t\t\t\t'<label class=\"pos-rel\">' +
                    ' <a class=\"btOrange contractDetail\"href=\"javascript:;\" style=\"color:#fff !important\" title=\"详情\"><i class=\"fa fa-info\"></i></a>' +
                    ' <a spstatu=\"' + data[i]['htm_contract.auth_status2'] + '\" class=\"btBlue editContract\" href=\"javascript:;\" contentAuthority=\"137\" style=\"color:#fff !important;display:' + (edit_statu ? 'inline-block' : 'none') + ';\" title=\"编辑\"><i class=\" fa fa-pencil \"></i></a>' +
\t\t\t\t\t' <a  class=\"btRed del\" href=\"javascript:;\"  style=\"display:' + (del_statu ? 'inline-block': 'none') + '; color:#fff !important;\" title=\"删除\"><i class=\"fa fa-trash\"></i></a>' +
\t\t\t\t\t' <a href=\"javascript:;\" data-status = \"0\" style=\"display:' + (cxApp ? (data[i]['htm_contract.auth_status1'] == 2 && data[i]['htm_contract.status'] == 0 ? 'inline-block' : 'none') : 'none') + ';color:#fff !important\" class=\"sp btOrange\"  contentAuthority=\"265\" title=\"撤销\"><i class=\"fa fa-rotate-left\"></i></a>' +
\t\t\t\t\t' <a href=\"javascript:;\" data-status = \"2\" style=\"display:' + (spApp ? (data[i]['htm_contract.auth_status1'] == 0 ? 'inline-block' : 'none') : 'none') + ';color:#fff !important\" class=\" sp btGreen\" title=\"通过\" contentAuthority=\"138\"><i class=\"fa fa-check-circle\"></i></a>' +
\t\t\t\t\t' <a href=\"javascript:;\" data-status = \"1\" style=\"display:' + (spApp ? (data[i]['htm_contract.auth_status1'] == 0 ? 'inline-block' : 'none') : 'none') + ';color:#fff !important\" class=\" sp btRed\" title=\"驳回\" contentAuthority=\"138\" ><i class=\"fa fa-times-circle\"></i></a>' +
\t\t\t\t\t' <a href=\"javascript:;\" data-status = \"0\" style=\"display:' + (continue_mark ? (data[i]['htm_contract.is_renew']  == 0 && (data[i]['htm_contract.end_time'] - 7776000) <= today && today <= data[i]['htm_contract.end_time'] && data[i]['htm_contract.contract_type'] == 1 && data[i]['htm_contract.is_renew']  == 0 &&  data[i]['htm_contract.status'] !=4 &&  data[i]['htm_contract.status'] !=0 ? 'inline-block' : 'none') : 'none') + ';color:#fff !important\" class=\"btBlue xq\" contentAuthority=\"139\" title=\"续签\"><i class=\"fa  fa-spinner\"></i></a>' +
\t\t\t\t\t'</label>' +
\t\t\t\t\t'</td>' +
\t\t\t\t\t'<td style=\"display:' + styles[1] + ';\" data-num=\"1\"><span>' + approve_statu[data[i]['htm_contract.auth_status1']] + '</span></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[2] + ';\" data-num=\"2\"><span>' + data[i]['htm_contract.contract_code'] + '</span></td>' +
\t\t\t\t\t'<td data-cid=\"' + data[i]['khm_customer.id'] + '\" style=\"display:' + styles[3] + ';\" data-num=\"3\" ><a href=\"#\" class=\"customerDetail pos-rel\" data-custId=\"' + data[i]['khm_customer.id'] + '\">' + data[i]['khm_customer.name'] + '</a>' + '<label class=\"pos-rel\"><i class=\"iconBnt fa fa-info-circle\" style=\"color:'+(data[i]['Remark'].length > 0 ? 'red' : \"\")+'\"  data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"' + cs.getRemark(data[i]['Remark']) + '\" ></i></label></td>' +
\t\t\t\t  \t'<td style=\"display:' + styles[4] + ';\" data-num=\"4\"><span>' + (data[i]['khm_customer.tax_type'] == 1 ? '一般纳税人' : '小规模') + '</span></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[5] + ';\" data-num=\"5\"><span>' + (data[i]['htm_contract.contract_type'] == 1 ? '长期合同' : '一次性合同') + '</span></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[6] + ';\" data-num=\"6\"><span>' + data[i]['htm_contract.contract_num'] + '</span></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[7] + ';\" data-num=\"7\"><span>' + task_detail['product'].join(',') + '</span></td>' +
\t\t\t\t\t/*'<td style=\"display:' + styles[6] + ';\" data-num=\"7\"><span>' + task_detail['pricing'] + '</span></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[7] + ';\" data-num=\"8\"><span>' + (data[i]['htm_contract.contract_type'] == 1 ? eval(task_detail['pricing'] + '-' + task_detail['discount']) : '') + '</span></td>' +*/
\t\t\t\t\t'<td style=\"display:' + styles[8] + ';text-align: right !important; \" data-num=\"8\"><span>' + data[i]['htm_contract.discount_total'] + '</span></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[9] + ';text-align: right !important; \" data-num=\"9\"><span>' + (data[i]['htm_contract.contract_type'] == 1 ? cycle[data[i]['htm_contract.get_cycle']] : '') + '</span></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[10] + ';text-align: right !important; \" data-num=\"10\"><span>' + task_detail['discount'] + '</span></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[11] + ';text-align: right !important;\" data-num=\"11\"><span>' + (data[i]['htm_contract.contract_type'] == 1 ? data[i]['htm_contract.account_book'] : '') + '</span></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[12] + ';\" data-num=\"12\"><span data-market_id=\"' + salesman_id + '\">' + salesman.join(',') + '</span></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[13] + ';\" data-num=\"13\"><span>' + (data[i]['htm_contract.signed_time'] != '0' ? cs.getNowTime(data[i]['htm_contract.signed_time']) : '') + '</span></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[14] + ';\" data-num=\"14\"><span>' + (data[i]['htm_contract.start_time'] != 0 ? cs.getNowTime(data[i]['htm_contract.start_time']) : '') + '</span></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[15] + ';\" data-num=\"15\"><span>' + (data[i]['htm_contract.end_time'] != 0 ? cs.getNowTime(data[i]['htm_contract.end_time']) : '') + '</span></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[16] + ';\"data-num=\"16\"><span>' + cStatus[data[i]['htm_contract.status']] + '</span></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[17] + ';\" data-num=\"17\"><span>' + data[i]['htm_contract.remark'] + '</span></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[18] + ';\" data-num=\"18\"><span>' + employees[data[i]['htm_contract.create_by']] + '</span></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[19] + ';text-align: right !important; \" data-num=\"19\"><span>' + (data[i]['htm_contract.create_time'] != '0' ? cs.getNowTime(data[i]['htm_contract.create_time'],true) : '') + '</span></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[20] + ';text-align: right !important; \" data-num=\"20\"><span>' + ( parseInt(data[i]['htm_contract.get_money']) + parseInt(data[i]['htm_contract.get_account_book'])).toFixed(2) + '</span></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[21] + ';text-align: right !important;\" data-num=\"21\"><span>' + eval(data[i]['htm_contract.total_monry'] + '-' + (parseInt(data[i]['htm_contract.get_money']) + parseInt(data[i]['htm_contract.get_account_book'])) ).toFixed(2) + '</span></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[22] + ';\" data-num=\"22\"><span>' + (data[i]['htm_contract.auth_id1'] != '0' ? employees[data[i]['htm_contract.auth_id1']] : '') + '</span></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[23] + ';\" data-num=\"23\"><span>' + (data[i]['htm_contract.auth_time1'] != '0' ? cs.getNowTime(data[i]['htm_contract.auth_time1'],true) : '') + '</span></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[24] + ';\" data-num=\"24\"><span>' + data[i]['htm_contract.auth_remark1'] + '</span></td>' +
\t\t\t\t\t'</tr>';
\t\t\t\tsalesman_id = [];
\t\t\t\tsalesman = [];
\t\t\t\ttasks = [];
\t\t\t\ttask_detail = {};
\t\t\t}

\t\t\t\$('#longTerm_data').html(html);
\t\t\tcustom.showReamrk();

\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\t//点击 审批 or  驳回 or  撤销

\t\t\t\$(\"#longTerm_data tr\").find('.sp').click(function() {
\t\t\t\tvar status = \$(this).attr('data-status');
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tchangeStatus(status, id);
\t\t\t});
\t\t\t
\t\t\t
\t\t\t\$('.del').click(function() {
\t\t\t\tvar node = ykp.getCookie('nodes').split(',');
//\t\t\t\tnode.forEach(function(item,index){
//\t\t\t\t\tif(item == 286){
//\t\t\t\t\t}
//\t\t\t\t})
\t\t\t\tif(node.indexOf(\"286\") == -1){
\t\t\t\t\tykp.prompt('你没有权限');
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tlayui.use('layer',function() {
\t\t\t\t\tlayui.layer.confirm('确认删除吗?', function(index){
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl:'/api/api_contract/del_contract',
\t\t\t\t\t\t\tmethods:\"post\",
\t\t\t\t\t\t\tdata:{
\t\t\t\t\t\t\t\tid:id
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess:function(res) {
\t\t\t\t\t\t\t\tykp.prompt('删除成功');
\t\t\t\t\t\t\t\tgetDatalist();
\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t      });
\t\t\t\t})
\t\t\t})

\t\t\t//一键续签
\t\t\t\$(\"#longTerm_data tr\").find('.xq').unbind('click').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\t\$('#contractsXq').show();
\t\t\t\t\$('#contractsXq').attr('contract_id', id);
\t\t\t\tvar data = getContractBooks(1);

                if(data == '') {
\t\t\t\t\t\$('#contractsNums').append(`<option value=\"\"> 暂无可用的合同号 </option>`);
//\t\t\t\t\treturn;
\t\t\t\t}else{
\t\t\t\t\t\$('#contractsNums').html(`<option value=\"\">请选择</option>`);
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\$('#contractsNums').append(`<option value=\"\${data[i]['code']}\">\${data[i]['code']}</option>`);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t
\t\t\t\t\$('#contractsNums').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t})
\t\t\t});

\t\t\t\$('.Con').unbind('click').click(function(res) {
\t\t\t\tvar id = \$('#contractsXq').attr('contract_id');
\t\t\t\tvar nums = \$('#contractsNums').val();
//              if(nums == ''){
//                  ykp.prompt('请选择合同编码！');
//\t\t\t\t    return;
//\t\t\t\t}
\t\t\t\txqCon(id,nums);
\t\t\t})

\t\t\t\$('.close_label').click(function() {
\t\t\t\t\$('#contractsXq #contractsNums').val('').trigger('change');
\t\t\t\t\$('#contractsXq').fadeOut();
\t\t\t})

\t\t\t//详情+编辑事件绑定
\t\t\toperationRecord();
\t\t\tcustom.get_custom_info();
\t\t}



        function xqCon(id, nums) {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_contract/renew_contract',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tcontract_id: id,
\t\t\t\t\tcontract_num: nums
\t\t\t\t},
\t\t\t\t
\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\$('#contractsXq').fadeOut();
\t\t\t\t\tykp.prompt('合同续签成功！');
\t\t\t\t\tgetDatalist();
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//批量审批
\t\tplsp();

\t\tfunction plsp() {
\t\t\t\$('.plSp').click(function() {
\t\t\t\tvar num = 0;
\t\t\t\tvar status = '';
\t\t\t\tvar coldata = [];
\t\t\t\tvar Statu = false;
\t\t\t\t\$('#longTerm_data').find('input[type=checkbox]').each(function(i) {
\t\t\t\t\tif(\$(this).is(':checked')) {
\t\t\t\t\t\tnum++;
\t\t\t\t\t\tstatus = \$(this).parents('tr').attr('data-status') == '0' ? 2 : 0;
\t\t\t\t\t\tif(\$(this).parents('tr').attr('data-status') != 0) {
\t\t\t\t\t\t\tykp.prompt('审批过的不能批量审批!');
\t\t\t\t\t\t\tStatu = false;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tcoldata.push({
\t\t\t\t\t\t\t\tid: \$(this).parents('tr').attr('data-id'),
\t\t\t\t\t\t\t\tauth_status1: status
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
\t\t\t\t\t\t\turl: \"/api/api_contract/batch_auth_ht1\",
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tdata: JSON.stringify(coldata)
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('审批成功');
\t\t\t\t\t\t\t\tgetDatalist();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}


        //批量不续签
        noRenew ();

        function noRenew() {
            \$('.no_enew').click(function() {
                var num = 0;
                var coldata = [];
                var Statu = false;
                \$('#longTerm_data').find('input[type=checkbox]').each(function(i) {
                    if(\$(this).is(':checked')) {
                        num++;
                        if(\$(this).parents('tr').find(\".xq\").css(\"display\") == \"none\") {
                            ykp.prompt('只能选择待续签的项目!');
                            Statu = false;
                        } else {
                            coldata.push(
                                \$(this).parents('tr').attr('data-id')
\t\t\t\t\t\t\t\t)
                            \tStatu = true;
                        }
                    }
                })
                if(num == 0) {
                    ykp.prompt('请选择要设置不续签的项目');
                } else {
                     if(Statu) {
                         ykp.doAjax({
                             url: \"/api/api_contract/del_renew\",
                             method: 'post',
                             data: {
                                 id: coldata.join(',')
                             },
                             success: function(res) {
                                 ykp.prompt('不续签设置成功!');
                                 getDatalist();
                             }
                         })
                     }
                }
            })
        }

\t\t//对点击驳回进行处理
\t\tfunction changeStatus(status, id) {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_contract/auth_ht1',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tid: id,
\t\t\t\t\tauth_status1: status
\t\t\t\t}
\t\t\t}
\t\t\tif(status == 1) {
\t\t\t\t\$('#feedBack').show();
\t\t\t\t\$('#feedBack .hold').unbind('click').click(function() {
\t\t\t\t\tvar approve_reply = \$('#feedBack').find('input').val();
                    if(approve_reply == '') {
\t\t\t\t\t\tykp.prompt('不能为空！');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\tdata.data.auth_remark1 = approve_reply.trim();
\t\t\t\t\tsetStatus(data, status);
\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t})
\t\t\t\tcs.closePop();
\t\t\t} else if(status == 0) {
//\t\t\t\tbootbox.confirm('确认撤销审批？', function(flag) {
//\t\t\t\t\tif(flag) {
//\t\t\t\t\t\tsetStatus(data, status);
//\t\t\t\t\t}
//\t\t\t\t})
             \tlayui.use('layer', function() {
\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\tlayer.confirm('确认撤销审批？', function(flag) {
\t\t\t\t\t\t\tif(flag) {
\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t})
\t\t\t} else {
\t\t\t\tsetStatus(data, status);
\t\t\t}
\t\t}

\t\t//发送审批信息到服务器
\t\tfunction setStatus(data, status) {
\t\t\tykp.doAjax({
\t\t\t\turl: data.url,
\t\t\t\tmethod: data.method,
\t\t\t\tdata: data.data,
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tif(status == 1) {
\t\t\t\t\t\tykp.prompt('驳回成功!');
\t\t\t\t\t} else if(status == 0) {
\t\t\t\t\t\tykp.prompt('撤销成功!');
\t\t\t\t\t} else {
\t\t\t\t\t\tykp.prompt('审批成功!');
\t\t\t\t\t}
\t\t\t\t\tgetDatalist();
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//填写更多
\t\tfunction writeMore() {
\t\t\t\$('#templateCon .more').click(function() {
                console.log(11);
                var num = 0;
                console.log(\$(this).parent().siblings('div:hidden').length);
                if(\$(this).parent().siblings('div:hidden').length == 1) {
\t\t\t\t\t\$(this).parent().hide();
\t\t\t\t}
\t\t\t\tif(\$(this).parent().siblings('div:hidden').length > 0) {
\t\t\t\t\t\$(this).parent().siblings('div:hidden').eq(0).show();
\t\t\t\t\tif(num == 1) {
\t\t\t\t\t\tcs.upload1({
\t\t\t\t\t\t\tel: \"#templateBox #upload\",
\t\t\t\t\t\t\tael: \"#templateBox #fileBox\",
\t\t\t\t\t\t\ttab: true
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t\tnum++;

\t\t\t\t}
                \$(\"#temHeader\").width(\$(\"#showBox\").width()-47);
\t\t\t});
\t\t}

\t\t//弹出层部分选项填充信息
\t\tfunction fillInfo(id) {
\t\t\t//业务员
\t\t\tfor(var i in employees) {
\t\t\t\tif(employees[i]) {
\t\t\t\t\t\$('#templateCon .state').append(new Option(employees[i], i));
\t\t\t\t}
\t\t\t}
\t\t\t
\t\t\t//企业名称
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_customer/f7',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tselect: 'khm_customer.name,khm_customer.id,khm_customer.area,khm_customer.tax_type'
\t\t\t\t},
\t\t\t\tasync:false,
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\$('#templateCon [field=\"customer_id\"]').append(\$(new Option(data[i]['name'], data[i]['id'])).attr('area', data[i]['area']));
\t\t\t\t\t\tcustom[data[i]['id']] = data[i]['tax_type'];
\t\t\t\t\t}
\t\t\t\t\tif(id){
\t\t\t\t\t\tif(custom[id] == 2){
\t\t\t\t\t\t\t\$('#templateCon .is_tax').hide();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\t//服务产品
\t\t\tfor(var i in service_product) {
\t\t\t\tif(service_product[i]['type'] == 0) {
\t\t\t\t\t\$('#templateCon .long').append(\$(new Option(service_product[i]['name'], parseInt(service_product[i]['id']))).data('price', parseInt(service_product[i]['price'])));
\t\t\t\t}
\t\t\t\tif(service_product[i]['type'] != 0) {
\t\t\t\t\t\$('#templateCon .short').append(\$(new Option(service_product[i]['name'], parseInt(service_product[i]['id']))).data('price', parseInt(service_product[i]['price'])));
\t\t\t\t}
\t\t\t}
\t\t\t
\t\t\t
\t\t\t\$('#templateCon .customer').trigger('change').select2({
\t\t\t\tallowClear: true
\t\t\t});
\t\t\t//选择公司展示对应仓位
\t\t\t// \$('#templateCon select[field=\"customer_id\"]').change(function(){

\t\t\t// });
\t\t}

\t\t//切换服务产品，标准价改变
\t\tfunction changePrice() {
\t\t\t//长期合同切换产品，数量变为1，赠送为空，折后价为空,折后总额为空，账本费为空，合同总额为空
\t\t\t\$('#templateCon .long').unbind('change').change(function() {
\t\t\t\t//\$(this).find('option:checked').data('price') 产品相应的标准价
\t\t\t\t\$(this).parents('.contractType').find('[field=\"pricing\"]').val(\$(this).find('option:checked').data('price'));
\t\t\t\t\$(this).parents('.contractType').find('[field=\"count\"]').val('12');
\t\t\t\t\$(this).parents('.contractType').find('[field=\"count_send\"]').val('');
\t\t\t\t\$(this).parents('.contractType').find('[field=\"discount\"]').val('');
\t\t\t\t\$(this).parents('.contractType').find('[field=\"discount_total\"]').val('');
\t\t\t\t\$(this).parents('.contractType').find('[field=\"account_book\"]').val('');
\t\t\t\t\$(this).parents('.contractType').find('[contract-total]').val('');
\t\t\t})
\t\t\t//一次性合同切换产品，数量变为1，折后价为空,折后总额减去切换前的数量乘以折后价
\t\t\t\$('#templateCon .short').unbind('change').change(function() {
\t\t\t\t//\$(this).find('option:checked').data('price') 产品相应的标准价
\t\t\t\t\$(this).parents('tr').find('[syllable=\"pricing\"]').val(\$(this).find('option:checked').data('price'));

\t\t\t\t//折后总额
\t\t\t\tvar discount_total = \$(this).parents('.contractType').find('[field=\"discount_total\"]').val();
\t\t\t\t//切换前的数量乘以折后价  product:乘积
\t\t\t\tvar product = \$(this).parents('tr').find('[syllable=\"count\"]').val() * \$(this).parents('tr').find('[syllable=\"discount\"]').val();
\t\t\t\t//折后总额减去切换前的数量乘以折后价
\t\t\t\t\$(this).parents('.contractType').find('[field=\"discount_total\"]').val(eval(discount_total + '-' + product) || \"\");
\t\t\t\t//数量变为1
\t\t\t\t\$(this).parents('tr').find('[syllable=\"count\"]').val(1);
\t\t\t\t//折后价为空
\t\t\t\t\$(this).parents('tr').find('[syllable=\"discount\"]').val('');

\t\t\t})
\t\t}

\t\t//计算折后总额
\t\tfunction calculateTotal() {
\t\t\t//计算长期合同的折后总额
\t\t\t\$('#templateCon .contractType').eq(0).unbind('blur').on('blur', '[field=\"count\"],[field=\"discount\"],[account-book]', function() {
\t\t\t\tvar it = \$(this);
\t\t\t\tvar num = it.parents('.contractType').find('[field=\"count\"]').val();
\t\t\t\tvar discount = it.parents('.contractType').find('[field=\"discount\"]').val();

\t\t\t\tvar account_book = \$('#templateCon input[account-book]').val().trim() ? parseInt(\$('#templateCon input[account-book]').val()) : 0;
\t\t\t\tit.parents('.contractType').find('input[field=\"discount_total\"]').val(num * discount);
\t\t\t\tit.parents('.contractType').find('input[contract-total]').val((num * discount + account_book));
\t\t\t});

\t\t\t//计算一次性合同的折后总额
\t\t\t//数量或者折后价失去焦点动态计算
\t\t\t\$('#templateCon .contract_content').unbind('blur').on('blur', '[syllable=\"count\"],[syllable=\"pricing\"]', function() {
                console.log(11);
                //折后总价
\t\t\t\tvar discount_total = 0;
\t\t\t\t//将每一个tr中的数量与折后价的乘积相加
\t\t\t\t\$('#templateCon .contract_content tbody tr').each(function(i, e) {
\t\t\t\t\tdiscount_total += \$(this).find('[syllable=\"count\"]').val() * \$(this).find('[syllable=\"pricing\"]').val();
\t\t\t\t});

\t\t\t\t//将计算后的折后总价填入输入框
\t\t\t\t\$(this).parents('.contractType').find('[field=\"discount_total\"]').val(discount_total);
\t\t\t});
\t\t}

\t\t//结束时间
\t\tfunction endtime(index) {
\t\t\tif(index == 0) {
\t\t\t\t\$('#templateCon [field=\"count\"],#templateCon [field=\"count_send\"],#templateCon [field=\"start_time\"]').unbind('blur').blur(function() {
\t\t\t\t\tvar it = \$(this);
\t\t\t\t\tvar num = \$('#templateCon [field=\"count\"]').val();
\t\t\t\t\tvar send_num = \$('#templateCon [field=\"count_send\"]').val() ? \$('#templateCon [field=\"count_send\"]').val() : '0';
\t\t\t\t\tvar start_time = \$('#templateCon [field=\"start_time\"]').val();
\t\t\t\t\tif(start_time && num) {
\t\t\t\t\t\tvar date = new Date(start_time);
\t\t\t\t\t\tvar number = eval(num + '+' + send_num);
\t\t\t\t\t\tdate = addMonth(date, number);
\t\t\t\t\t\tvar edate = new Date(date.getTime() - 24 * 60 * 60 * 1000);
\t\t\t\t\t\tit.parents('.contractType').find('[field=\"end_time\"]').val(edate.toLocaleDateString().replace(/\\//g, '-'));
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}

\t\t//添加 | 编辑合同验证
\t\tfunction validate() {
\t\t\tvar flag = true;
\t\t\tif((parseInt(\$('#templateCon [field=\"count\"]').val()) + parseInt(\$('#templateCon [field=\"count_send\"]').val())) < parseInt(\$('#templateCon [field=\"payment_cycle\"]').val())) {
\t\t\t\tykp.prompt('数量不能小于维护周期');
\t\t\t\tflag = false;
\t\t\t}
\t\t\tif((parseInt(\$('#templateCon [field=\"count\"]').val()) + parseInt(\$('#templateCon [field=\"count_send\"]').val())) < parseInt(\$('#templateCon [field=\"htm_contract.payment_cycle\"]').val())) {
\t\t\t\tykp.prompt('数量不能小于维护周期');
\t\t\t\tflag = false;
\t\t\t}

\t\t\tvar start_time;
\t\t\tvar end_time;
\t\t\t\$('#templateCon .contract_content tbody tr').each(function(i, e) {
\t\t\t\tstart_time = new Date(\$(this).find('[syllable=\"start_time\"]').val()).getTime();
\t\t\t\tend_time = new Date(\$(this).find('[syllable=\"end_time\"]').val()).getTime();
\t\t\t\tif(start_time > end_time) {
\t\t\t\t\tykp.prompt('开始时间不能大于结束时间！');
\t\t\t\t\tflag = false;
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t});

\t\t\treturn flag;
\t\t}

\t\t//获取合同书
\t\tfunction getContractBooks(type, contract_num) {
\t\t\t
\t\t\tvar data = ykp.doAjax({
\t\t\t\turl: '/api/api_contract_book/f8',
\t\t\t\tmethod: 'post',
\t\t\t\tasync: false,
\t\t\t\tdata: {
\t\t\t\t\ttype: type
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tdata = res.data;

\t\t\t\t\tvar contract = \$('#templateCon [field=\"contract_num\"]').eq(type - 1);

\t\t\t\t\tif(data.length == 0) {
\t\t\t\t\t\tcontract.html('<option value=\"\">暂无可用的合同号</option>');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tvar contractBook_html = [];
\t\t\t\t\tif(contract_num) {
\t\t\t\t\t\tcontractBook_html.push('<option value=\"' + contract_num + '\">' + contract_num + '</option>');
\t\t\t\t\t}
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tcontractBook_html.push('<option value=\"' + data[i]['code'] + '\">' + data[i]['code'] + '</option>');
\t\t\t\t\t}
\t\t\t\t\tcontract.append(contractBook_html.join(''));

\t\t\t\t\tcontract.select2({
\t\t\t\t\t\t\tallowClear: true
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\tif(contract_num) {
\t\t\t\t\t\tcontract.val(contract_num).trigger('change');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t}
\t\t\t})
\t\t\treturn data.data;
\t\t}

\t\t//-同一公司的长期合同 仓位默认沿用之前的 
\t\tfunction defaultPosition() {
\t\t\t\$('#templateCon [field=\"customer_id\"]').eq(0).unbind('change').change(function() {
\t\t\t\tvar it = \$(this);
\t\t\t\tvar customer_id = \$(this).val();
\t\t\t\tvar pos_id = '';
\t\t\t\tif(customer_id) {
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\tasync: false,
\t\t\t\t\t\turl: '/api/api_customer/get_customer_pos',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tcustomer_id: customer_id
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tif(res.data.pos) {
\t\t\t\t\t\t\t\tpos_id = res.data.pos.pos_id;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\tvar area = \$(this).find('option:selected').attr('area');

\t\t\t\tit.parents('.contractType').find('select[field=\"pos_id\"]').find('option').not(':first').remove();

\t\t\t\tif(!area) {
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tarea = area.split(',');
\t\t\t\tykp.doAjax({
\t\t\t\t\tasync: false,
\t\t\t\t\turl: '/api/api_accountancies/get_position',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\ttype: 2,
\t\t\t\t\t\tname: area[1]
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\tif(data.length > 0) {
\t\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\t\tit.parents('.contractType').find('select[field=\"pos_id\"]').append(new Option(data[i]['name'], data[i]['id']));
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(pos_id) {
\t\t\t\t\t\t\t\tit.parents('.contractType').find('select[field=\"pos_id\"]').val(pos_id);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\tif(data.length == 0) {
\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\tasync: false,
\t\t\t\t\t\t\t\turl: '/api/api_accountancies/get_position',
\t\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\ttype: 1,
\t\t\t\t\t\t\t\t\tname: area[0]
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\tif(data.length > 0) {
\t\t\t\t\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\t\t\t\t\tit.parents('.contractType').find('select[field=\"pos_id\"]').append(new Option(data[i]['name'], data[i]['id']));
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\tif(pos_id) {
\t\t\t\t\t\t\t\t\t\t\tit.parents('.contractType').find('select[field=\"pos_id\"]').val(pos_id);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tif(data.length == 0) {
\t\t\t\t\t\t\t\t\t\tykp.prompt('请添加仓位信息');
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t}
\t\tvar customer_type = {};

\t\tfunction addType() {
\t\t\t\$('#templateCon #addTypeBtn').click(function() {
\t\t\t\t\$('#addtype').show();
\t\t\t\tsaveType();
\t\t\t})
\t\t\t\$('.close_label').click(function() {
\t\t\t\t\$('#addtype').hide();
\t\t\t})
\t\t}

\t\tfunction saveType() {
\t\t\t\$('.submitType').unbind().click(function() {
\t\t\t\tvar typename = \$('#typename').val();
\t\t\t\tif(typename.trim() == '') {
\t\t\t\t\tykp.prompt('添加类型不能为空！');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_customer_type/add',
\t\t\t\t\tdata: {
\t\t\t\t\t\tname: typename
\t\t\t\t\t},
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tykp.prompt('添加成功！ ');
\t\t\t\t\t\t\$('#addtype').hide();
\t\t\t\t\t\tgetType();
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})
\t\t}

\t\tgetType();
\t\t//获取所有公海类型
\t\tfunction getType(type) {
\t\t\tykp.doAjax({
\t\t\t\tasync: false,
\t\t\t\turl: '/api/api_customer_type/f7',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tselect: 'khm_customer_type.id,khm_customer_type.name'
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\$('#templateCon .cusType').html('');
\t\t\t\t\tvar option = '<option value=\"\">  请选择公海类型  </option>';
\t\t\t\t\tcustomer_type['0'] = '无';
\t\t\t\t\tfor(var i = data.length - 1; i >= 0; i--) {
\t\t\t\t\t\tcustomer_type[data[i]['id']] = data[i]['name'];
\t\t\t\t\t\toption += `<option value=\"\${data[i]['id']}\">\${data[i]['name']}</option>`;
\t\t\t\t\t}
\t\t\t\t\t\$('#heightsearch1 ').find('#ktype').append(option);
\t\t\t\t\t\$('#heightsearch1 ').find('#ktype').select2({
\t\t\t\t\t\tallowClear: true
\t\t\t\t\t});
\t\t\t\t\t\$('#templateCon .cusType').select2({
\t\t\t\t\t\tallowClear: true
\t\t\t\t\t});
\t\t\t\t\t\$('#templateCon .cusType').html(option);
\t\t\t\t\t\$('#templateCon .cusType').val(type).trigger('change');
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//选择弹出层客户来源中转介绍时，显示介绍人，
\t\t//选择其他时，隐藏介绍人
\t\tfunction showIntroducer() {
\t\t\t\$('#templateCon .source').change(function() {
\t\t\t\tif(\$(this).find('option:selected').index() == 1) {
\t\t\t\t\t\$('#templateCon .introducer').show();
\t\t\t\t} else {
\t\t\t\t\t\$('#templateCon .introducer').hide();
\t\t\t\t}
\t\t\t});
\t\t}

\t\tfunction addCustom() {
\t\t\t//添加客户
\t\t\t\$('#templateCon #addItem1').click(function() {
\t\t\t\tshowMark('#template');
\t\t\t\t\$('#showBox .title').text('添加客户');
\t\t\t\taddType();
\t\t\t\tgetType();
\t\t\t\t\$(\"#templateCon #city\").citySelect({
\t\t\t\t\turl: \"/resource/adimin/assets/js/src/city.min.js\",
\t\t\t\t\tprov: '广东', //省份 
\t\t\t\t\tcity: '深圳',
\t\t\t\t\tnodata: \"none\" //当子集无数据时，隐藏select  
\t\t\t\t});
\t\t\t\tshowIntroducer();

\t\t\t\t//成立日期
\t\t\t\tcs.timeplug();

\t\t\t\t\$('#templateCon .add').click(function() {
\t\t\t\t\tvar prov = \$('#templateBox .prov').val() || '';
\t\t\t\t\tvar city = \$('#templateBox .city').val() || '';
\t\t\t\t\tvar dist = \$('#templateBox .dist').val() || '';
\t\t\t\t\tvar area = prov + \",\" + city;
\t\t\t\t\tif(dist != '') {
\t\t\t\t\t\tarea += (\",\" + dist);
\t\t\t\t\t}
\t\t\t\t\t/*if(\$('#templateCon').find('[addfield=\"phone\"]').val().trim().length != 11) {
\t\t\t\t\t\tykp.prompt('手机号码错误');
\t\t\t\t\t\t\$('#templateCon').find('[addfield=\"phone\"]').val('');
\t\t\t\t\t\treturn;
\t\t\t\t\t}*/
\t\t\t\t\tif(!cs.popValidate()) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\tvar inputOrSelectOrTextarea = \$('#templateCon').find('input,select,textarea');
\t\t\t\t\tvar time = inputOrSelectOrTextarea.eq(3).val().replace(/年|月|日/g, '-');
\t\t\t\t\tvar data = {
\t\t\t\t\t\tname: \$('#templateCon').find('[addfield=\"name\"]').val(),
\t\t\t\t\t\tcorporation: \$('#templateCon').find('[addfield=\"corporation\"]').val(),
\t\t\t\t\t\tcapital: \$('#templateCon').find('[addfield=\"capital\"]').val(),
\t\t\t\t\t\tstablish_time: time ? new Date(time) / 1000 :'',
\t\t\t\t\t\taddress: \$('#templateCon').find('[addfield=\"address\"]').val(),
\t\t\t\t\t\ttel: \$('#templateCon').find('[addfield=\"tel\"]').val(),
\t\t\t\t\t\trange: \$('#templateCon').find('[addfield=\"range\"]').val(),
\t\t\t\t\t\turl: \$('#templateCon').find('[addfield=\"url\"]').val(),
\t\t\t\t\t\tphone: \$('#templateCon').find('[addfield=\"phone\"]').val(),
\t\t\t\t\t\tfax: \$('#templateCon').find('[addfield=\"fax\"]').val(),
\t\t\t\t\t\temail: \$('#templateCon').find('[addfield=\"email\"]').val(),
\t\t\t\t\t\tsource: \$('#templateCon').find('[addfield=\"source\"]').val(),
\t\t\t\t\t\tintroduce: \$('#templateCon').find('[addfield=\"source\"]').selectedIndex == 0 ? '' : \$('#templateCon').find('[addfield=\"introduce\"]').val(),
\t\t\t\t\t\tindustry: \$('#templateCon').find('[addfield=\"industry\"]').val(),
\t\t\t\t\t\tscale: \$('#templateCon').find('[addfield=\"scale\"]').val(),
\t\t\t\t\t\tcontacts: \$('#templateCon').find('[addfield=\"contacts\"]').val(),
\t\t\t\t\t\ttype: \$('#templateCon').find('[addfield=\"type\"]').val(),
\t\t\t\t\t\tremark: \$('#templateCon').find('[addfield=\"remark\"]').val(),
\t\t\t\t\t\tarea: area
\t\t\t\t\t}
\t\t\t\t\tvar parent = \$(this).parents('#showBox');
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_customer/add',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: data,
\t\t\t\t\t\tsuccess: function() {
\t\t\t\t\t\t\t//\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\tparent.addClass('ishide');
\t\t\t\t\t\t\t\$('#addItem').trigger('click');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t});
\t\t}

\t\t//税务类型对发票认证的改变
\t\tfunction taxchange(){
\t\t\t\$('#templateCon #tax_type').change(function(){
\t\t\t\tif (\$(this).val()=='1') {
\t\t\t\t\t\$('#templateCon #is_tax').show().prev().show();
\t\t\t\t}else{
\t\t\t\t\t\$('#templateCon #is_tax').hide().prev().hide();
\t\t\t\t}
\t\t\t})
\t\t}




\t\t//添加事件绑定
\t\taddRecord();

\t\tfunction addRecord() {
\t\t\t\$('#addItem').click(function() {
\t\t\t\tshowMark('#template1');
\t\t\t\taddCustom();
\t\t\t\t\$('#showBox .title').text('添加合同');
\t\t\t\t\$('#templateCon .state').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#templateCon .customer').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});
\t\t\t\t//-同一公司的长期合同 仓位默认沿用之前的
\t\t\t\t// var pos_id = defaultPosition();

\t\t\t\t//发票认证的变化
\t\t\t\ttaxchange();

\t\t\t\t//点击 + 添加一行记录
\t\t\t\toprationService();

\t\t\t\t//时间插件
\t\t\t\tcs.timeplug();

\t\t\t\t//填写等多
\t\t\t\twriteMore();

\t\t\t\t//填充信息
\t\t\t\tfillInfo();

\t\t\t\t//切换服务产品，标准价改变
\t\t\t\tchangePrice();

\t\t\t\t//计算折后总额
\t\t\t\tcalculateTotal();

\t\t\t\t//计算结束时间
\t\t\t\tendtime(0);

\t\t\t\t//合同类型切换
\t\t\t\tcontractTypeChange();

                //上传图片
                uploadImg();

                //上传文件
                uploadFile();


\t\t\t\t//获取可用的合同号
\t\t\t\tgetContractBooks(1);
\t\t\t\tgetContractBooks(2);

\t\t\t\t\$('#templateCon .add').click(function() {
                    // if(\$('#templateCon .contractType').eq(0).css('display') != 'none'){
\t\t\t\t\tif(!validate()) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\t// }
\t\t\t\t\tvar postdata = {};
\t\t\t\t\tvar index = \$('#templateCon .acti').index();
\t\t\t\t\tvar url = index == 0 ? '/api/api_contract/contract_long_add' : '/api/api_contract/contract_one_add';

\t\t\t\t\t\$('#templateCon .contractType').eq(index).find('[field]').each(function() {
\t\t\t\t\t\tif(\$(this).attr('field') == 'start_time' || \$(this).attr('field') == 'signed_time' || \$(this).attr('field') == 'end_time') {
\t\t\t\t\t\t\tpostdata[\$(this).attr('field')] = new Date(\$(this).val()) / 1000;
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}

\t\t\t\t\t\tif(\$(this).attr('field') == 'is_tax'&&!\$(this).is(':hidden')){
\t\t\t\t\t\t\tpostdata[\$(this).attr('field')] = \$(this).val();
\t\t\t\t\t\t}

\t\t\t\t\t\tpostdata[\$(this).attr('field')] = \$(this).val();
\t\t\t\t\t});

\t\t\t\t\t//业务员
\t\t\t\t\tvar data = \$('#templateCon .contractType').eq(index).find('.state').select2('data');
\t\t\t\t\tvar salesman = [];
\t\t\t\t\tif(data.length == 0) {
\t\t\t\t\t\tykp.prompt('请选择业务员');
\t\t\t\t\t\treturn false;
\t\t\t\t\t} else {
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\tsalesman.push(data[i]['id']);
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tpostdata['market'] = JSON.stringify(salesman);

                    //图片和文件
                    var images = [];
                    var files = [];
                    \$('#templateCon .contractType').eq(index).find('._decrease.uploadImage').each(function(i, e) {
                        images.push(\$(this).data('img'));
                    });
                    \$('#templateCon .contractType').eq(index).find('._decrease.uploadFile').each(function(i, e) {
                        files.push(\$(this).data('file'));
                    });

\t\t\t\t\tpostdata['image'] = images.join(',');
\t\t\t\t\tpostdata['files'] = JSON.stringify(files);
                    //return false;
\t\t\t\t\tvar status = false;
\t\t\t\t\t//服务信息
\t\t\t\t\tif(index == 1) {
\t\t\t\t\t\t
\t\t\t\t\t\tvar service_info = [];
\t\t\t\t\t\t\$('#templateCon .contract_content tbody tr').each(function(i, e) {
\t\t\t\t\t\t\tif((new Date(\$(this).find('[syllable=\"start_time\"]').val()) / 1000) > (new Date(\$(this).find('[syllable=\"end_time\"]').val()) / 1000)) {
\t\t\t\t\t\t\t\tykp.prompt('结束时间应大于开始时间');
\t\t\t\t\t\t\t\tstatus = false;
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}else {
\t\t\t\t\t\t\t\tservice_info.push({
\t\t\t\t\t\t\t\t\t'customer_id': postdata['customer_id'],
\t\t\t\t\t\t\t\t\t'product_id': \$(this).find('.short').val(),
\t\t\t\t\t\t\t\t\t'start_time': new Date(\$(this).find('[syllable=\"start_time\"]').val()) / 1000,
\t\t\t\t\t\t\t\t\t'end_time': new Date(\$(this).find('[syllable=\"end_time\"]').val()) / 1000,
\t\t\t\t\t\t\t\t\t'pricing': \$(this).find('[syllable=\"pricing\"]').val(),
\t\t\t\t\t\t\t\t\t'count': \$(this).find('[syllable=\"count\"]').val(),
\t\t\t\t\t\t\t\t\t'discount': \$(this).find('[syllable=\"discount\"]').val()
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\tstatus = true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t
\t\t\t\t\t\t});
\t\t\t\t\t\tpostdata['task_json'] = JSON.stringify(service_info);
\t\t\t\t\t}else {
\t\t\t\t\t\tstatus = true;
\t\t\t\t\t}
\t\t\t\t\tif(postdata['customer_id'] == \"\"){
\t\t\t\t\t\tykp.prompt('请选择企业！');
\t\t\t\t\t\treturn;
\t\t\t\t\t}else if(!postdata['signed_time']){
\t\t\t\t\t\tykp.prompt('请选择签约时间！');
\t\t\t\t\t\treturn;
\t\t\t\t\t}else if(postdata['payment_cycle'] == \"\"){
\t\t\t\t\t\tykp.prompt('请选择维护时间！');
\t\t\t\t\t\treturn;
\t\t\t\t\t}else if(postdata['get_cycle'] == \"\"){
\t\t\t\t\t\tykp.prompt('请选择收款周期！');
\t\t\t\t\t\treturn;
\t\t\t\t\t}else if(postdata['discount'] == \"\"){
\t\t\t\t\t\tykp.prompt('服务单价！');
\t\t\t\t\t\treturn;
\t\t\t\t\t}else if(postdata['account_book'] == \"\"){
\t\t\t\t\t\tykp.prompt('账本费！');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tif(status) {
\t\t\t\t\t\tif(index == 0) {
\t\t\t\t\t\t\tif(new Date(postdata['start_time'] * 1000).getDate() != 1) {
\t\t\t\t\t\t\t\tykp.prompt('开始时间请选择每月1号！');
\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t
\t\t\t\t\t\tvar fileBox = \$('#templateCon .contractType').eq(index).find(\"#fileBox\");
\t\t\t\t\t\tvar files = [];
\t\t\t\t\t\tif(fileBox.children().length > 0) {
\t\t\t\t\t\t\t\$('#templateCon .contractType').eq(index).find(\"#fileBox\").find('a').each(function(i) {
\t\t\t\t\t\t\t\tfiles.push({
\t\t\t\t\t\t\t\t\tname: \$(this).text(),
\t\t\t\t\t\t\t\t\turl: \$(this).attr('data-url')
\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t})
                            postdata.files = JSON.stringify(files);
                        }
                        ykp.doAjax({
                            url: url,
                            method: 'post',
                            data: postdata,
                            success: function(res) {
                                cs.close();
                                getDatalist();
                            }
                        });
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})
\t\t}

        //上传图片
        function uploadImg() {
            \$('#templateCon .uploadImage').unbind('change').change(function() {
                var it = \$(this);
                var file = it[0].files[0];
                var postdata = {};
                var fr = new FileReader();

                if(!file) {
                    return;
                }

                if(!/image\\/\\w+/.test(file.type)) {
                    ykp.prompt(\"请确保文件为图像类型\");
                    return;
                }

                if(file.size > cs.file_length) {
                    ykp.prompt('图片大小不能超过5M');
                    return;
                }

                fr.readAsDataURL(file);
                fr.onloadend = function(e) {
                    var imgdata = e.target.result;
                    postdata['base64'] = imgdata.substring(imgdata.indexOf(',') + 1);
                    postdata['dir'] = 'bob';
                    postdata['name'] = file.name;

                    ykp.doAjax({
                        url: '/api/api_common/upload_img',
                        method: 'post',
                        data: postdata,
                        success: function(res) {
                            if(it.hasClass('_decrease')) {
                                it.prev().attr('src', res.data.url);
                                it.data('img', {
                                    'url': res.data.url,
                                    'name': file.name
                                });
                                return;
                            }

                            //图片有6张就不再添加
                            if(it.parent().siblings().length == 5) {
                                it.parent().hide();
                            }

                            var img_input = \$(`<label>
                                                <img style=\"width:68px;height:68px;margin-right:5px;\" src=\"\${res.data.url}\">
                                                <input type=\"file\" class=\"uploadImage _decrease\" style=\"position: absolute;opacity: 0;left:-9999px;\">
                                            </label>`);

                            img_input.find('._decrease').data('img', {
                                'url': res.data.url,
                                'name': file.name
                            });
                            it.parent().before(img_input);
                            uploadImg();
                        }
                    });
                }
            });
        }

        //上传文件
        function uploadFile() {
            \$('#templateCon .uploadFile').unbind('change').change(function() {
                var it = \$(this);
                var file = this.files[0];
                if(!file) {
                    return;
                }
                if(file.size > cs.file_length) {
                    ykp.prompt('文件大小不能超过5M');
                    return;
                }
                var postfix = file.name.substring(file.name.lastIndexOf('.') + 1);
                //\t\t\t\tif(postfix != 'pdf' && postfix != 'rar' && postfix != 'zip') {
                //\t\t\t\t\tykp.prompt('文件格式不正确');
                //\t\t\t\t\treturn;
                //\t\t\t\t}
                var fd = new FormData();
                fd.append('file', file);
                fd.append('dir', 'files');
                \$.ajax({
                    url: ykp.api_url + \"/api/api_common/upload_file\",
                    type: \"post\",
                    dataType: 'json',
                    data: fd,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(res) {
                        if(it.hasClass('_decrease')) {
                            it.prev().text(file.name);
                            it.data('file', {
                                'url': res.data,
                                'name': file.name
                            });
                            return;
                        }

                        //文件有6份，就不再添加
                        if(it.parent().siblings().length == 5) {
                            it.parent().hide();
                        }

                        //<input type=\"file\" class=\"uploadFile _decrease\" style=\"opacity:0;position:absolute;left:-9999px;\">
                        //\t\t\t\t\t\tvar file_input = \$(`<label class=\"btn btn-info btn-sm\" style=\"margin-right:5px;margin-bottom:5px;\">
                        //                                              <span>\${file.name}</span>
                        //                                          </label>`);
                        var file_input = \$('<p style=\"padding-left: 2px;\"><a data-url=\"' + res.data + '\"    target= _blank >' + file.name + '</a><i style=\"color: red; margin-left: 20px;cursor: pointer;\" class=\"ace-icon fa fa-trash-o gdel gdel2\"></i></p>');
                        file_input.find('._decrease').data('file', {
                            'url': res.data,
                            'name': file.name
                        });
                        it.parent().before(file_input);

                        \$(\"#templateBox #fileBox\").find('a').click(function() {
                            var name = \$(this).text();
                            var url = \$(this).attr('data-url');
                            window.open(ykp.api_url+\"/api/api_common/update_file_name?file_url=\"+url+\"&name=\"+name)
                        })
                        //删除文件
                        \$('.gdel2').click(function() {
                            \$(this).parent().remove();
                        })
                        uploadFile();
                    },
                    error: function() {
                        ykp.prompt(\"上传出错了...\");
                    }
                });
            });
        }

        //详情+编辑事件绑定
\t\tfunction operationRecord() {
\t\t\t//查看详情
\t\t\t\$('.contractDetail').unbind('click').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tvar type = \$(this).parents('tr').attr('data-type') - 1;
\t\t\t\tshowMark('#template2');
\t\t\t\t\$('#showBox .title').text('订单详情');

\t\t\t\t\$('#templateCon .contractType').eq(type).show();
                \$(\"#temHeader\").width(\$(\"#showBox\").width()-47);

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
\t\t\t})

\t\t\t//编辑
\t\t\t\$('.editContract').unbind('click').click(function() {
              
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tvar type = \$(this).parents('tr').attr('data-type') - 1; //type 为1一次性合同，type为0长期合同
\t\t\t\t// console.log(type);
\t\t\t\tvar url = type == 0 ? '/api/api_contract/contract_long_edit' : '/api/api_contract/contract_one_edit';
\t\t\t\tshowMark('#template4');
\t\t\t\t\$('#showBox .title').text('合同编辑');
\t\t\t\t\$('#templateCon .contractType').eq(type).show();
\t\t\t\ttaxchange();//发票认证变化

\t\t\t\t\$('#templateCon .state').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#templateCon .customer').prop('disabled',true);
\t\t\t\tif(\$(this).attr('spstatu') != '2') {
\t\t\t\t\t\$('#templateCon .long_contract').show();
\t\t\t\t\t\$('#templateCon .one_contract').show();
\t\t\t\t\tsetTimeout(function(){
\t\t\t\t\t\tcs.timeplug();
\t\t\t\t\t},1000)
\t\t\t\t}
                \$(\"#temHeader\").width(\$(\"#showBox\").width()-47);
\t\t\t\tfillInfo(id);
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_contract/contract_info',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tid: id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {

\t\t\t\t\t\ttype == 0 ? getContractBooks(1, res.data['htm_contract.contract_num']) : getContractBooks(2, res.data['htm_contract.contract_num']);
\t\t\t\t\t\t\t
\t\t\t\t\t\taddEditDetailData(res, type);
\t\t\t\t\t\t\$('#templateCon .add').click(function() {
\t\t\t\t\t\t\t// if(\$('#templateCon .contractType').eq(0).css('display') != 'none'){
\t\t\t\t\t\t\tif(!validate()) {
\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t// }
\t\t\t\t\t\t\tvar postdata = {};
\t\t\t\t\t\t\tvar field = '';

\t\t\t\t\t\t\t\$('#templateCon .contractType').eq(type).find('[field]').each(function() {
\t\t\t\t\t\t\t\tfield = \$(this).attr('field').replace(/htm_contract./, '' );
\t\t\t\t\t\t\t\tif(field == 'start_time' || field == 'signed_time' || field == 'end_time') {
\t\t\t\t\t\t\t\t\tpostdata[field] = new Date(\$(this).val()) / 1000;
\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif(field == 'market_id') {
\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\tif(\$(this).attr('field') == 'is_tax'&&!\$(this).is(':hidden')){
\t\t\t\t\t\t\t\t\tpostdata[\$(this).attr('field')] = \$(this).val();
\t\t\t\t\t\t\t\t}
                                if(field == 'khm_customer.tax_type'){
                                    postdata[\"tax_type\"] = \$(this).val();
                                }
\t\t\t\t\t\t\t\tpostdata[field] = \$(this).val();
\t\t\t\t\t\t\t});
                            // console.log(\$('#templateCon .contractType').eq(type).find('[field=\"contract_num\"]').val());
\t\t\t\t\t\t\t// return;

\t\t\t\t\t\t\t//服务信息
\t\t\t\t\t\t\tif(type == 1) {
\t\t\t\t\t\t\t\tvar service_info = [];

\t\t\t\t\t\t\t\t\$('#templateCon .contract_content tbody tr').each(function(i, e) {
\t\t\t\t\t\t\t\t\tservice_info.push({
\t\t\t\t\t\t\t\t\t\t'customer_id': postdata['customer_id'],
\t\t\t\t\t\t\t\t\t\t'product_id': \$(this).find('.short').val(),
\t\t\t\t\t\t\t\t\t\t'start_time': new Date(\$(this).find('[syllable=\"start_time\"]').val()) / 1000,
\t\t\t\t\t\t\t\t\t\t'end_time': new Date(\$(this).find('[syllable=\"end_time\"]').val()) / 1000,
\t\t\t\t\t\t\t\t\t\t'pricing': \$(this).find('[syllable=\"pricing\"]').val(),
\t\t\t\t\t\t\t\t\t\t'count': \$(this).find('[syllable=\"count\"]').val(),
\t\t\t\t\t\t\t\t\t\t'discount': \$(this).find('[syllable=\"discount\"]').val()
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\tpostdata['task_json'] = JSON.stringify(service_info);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif(type == 0) {
\t\t\t\t\t\t\t\tif(new Date(postdata['start_time'] * 1000).getDate() != 1) {
\t\t\t\t\t\t\t\t\tykp.prompt('开始时间请选择每月1号！');
\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t//业务员
\t\t\t\t\t\t\tvar data = \$('#templateCon .contractType').eq(type).find('.state').select2('data');
\t\t\t\t\t\t\tvar salesman = [];
\t\t\t\t\t\t\tif(data.length == 0) {
\t\t\t\t\t\t\t\tykp.prompt('请选择业务员');
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\t\t\tsalesman.push(data[i]['id']);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tpostdata['market'] = JSON.stringify(salesman);
\t\t\t\t\t\t\tpostdata['id'] = id;
                            //图片和文件
                            var images = [];
                            var files = [];
                            \$('#templateCon').find('._decrease.uploadImage').each(function(i, e) {
                                images.push(\$(this).data('img'));
                            });
                            \$('#templateCon').find('._decrease.uploadFile').each(function(i, e) {
                                files.push(\$(this).data('file'));
                            });
                            var fileBox = \$('#templateCon #fileBox');
                            var files = [];
                            if(fileBox.children().length > 0) {
                                \$('#templateCon #fileBox').find('a').each(function(i) {
                                    files.push({
                                        name: \$(this).text(),
                                        url: \$(this).attr('data-url')
                                    })
                                })

                                postdata.files = JSON.stringify(files);
                            }else {
                            }

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t//\t\t\t\t\t\t\tpostdata['image'] = JSON.stringify(images);
\t\t\t\t\t\t\t//\t\t\t\t\t\t\tpostdata['file'] = JSON.stringify(files);
\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\turl: url,
\t\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\t\tdata: postdata,
\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\t\t\tgetDatalist();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t});
\t\t\t})
\t\t}

\t\t//添加合同编辑详情数据
\t\tfunction addEditDetailData(res, type) {
\t\t\tvar data = res.data;
\t\t\tvar task = data['task']; //服务产品信息
\t\t\tvar image = data['HT_image']; //图片信息
\t\t\tvar file = [];
\t\t\tif (data['htm_contract.files']) {
\t\t\t\tfile = JSON.parse(data['htm_contract.files']);//文件信息
\t\t\t}

\t\t\t//一次性合同
\t\t\tif(type == 1) {
\t\t\t\tvar html = '';
\t\t\t\tfor(var i in task) {
\t\t\t\t\t//第一条数据做额外处理
\t\t\t\t\tif(i == 0) {
\t\t\t\t\t\t\$('#templateCon .service_detail').find('[syllable]').each(function(index, e) {
                           if(\$(this).attr('syllable') == 'start_time' || \$(this).attr('syllable') == 'end_time') {
\t\t\t\t\t\t\t\t\$(this).val(cs.getNowTime(task[i][\$(this).attr('syllable')]));
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\$(this).val(task[i][\$(this).attr('syllable')]);
\t\t\t\t\t\t});
\t\t\t\t\t}

\t\t\t\t\t//两者区别主要在于可操作方式不同
\t\t\t\t\tif(i != 0) {
\t\t\t\t\t\thtml = \$(`<tr>
                                <td> <a class=\"decrease opration\" >-</a> </td>
                                <td> 
                                    <select class=\"short\" syllable=\"product_id\">
                                        <option>请选择</option>
                                    </select> 
                                </td>
                                <td> 
                                    <input type=\"number\" syllable=\"count\" value=\"1\" style=\"width:60px\">
                                 </td>
                                <td> 
                                   <input type=\"number\" syllable=\"pricing\" style=\"width:60px\">
                              </td>
                                <td> 
                                    <input type=\"number\" syllable=\"discount\" style=\"width:60px\">
                                </td>
                                <td>
                                    <div class=\"input-group\" style=\"display: inline-flex; width: 110px;\">
                                        <input class=\"date-timepicker1 required\" msg=\"开始时间不能为空\" syllable=\"start_time\" style=\"height: 30px; width: 80px;\">
                                        <span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class=\"input-group\" style=\"display: inline-flex; width: 110px;\">
                                        <input class=\"date-timepicker1 required\" msg=\"截止时间不能为空\" syllable=\"end_time\" style=\"height: 30px; width: 80px;\">
                                        <span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                        </span>
                                    </div>
                                </td>
                            </tr>`);

\t\t\t\t\t\t//服务产品
\t\t\t\t\t\tfor(var k in service_product) {
\t\t\t\t\t\t\tif(service_product[k]['type'] != 1) {
\t\t\t\t\t\t\t\thtml.find('.short').append(\$(new Option(service_product[k]['name'], parseInt(service_product[k]['id']))).data('price', parseInt(service_product[i]['price'])));
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t//选中服务产品及将数量，标准价，折后价，开始日期，结束日期填入输入框  
\t\t\t\t\t\thtml.find('[syllable]').each(function(index, ele) {
\t\t\t\t\t\t\tif(\$(this).attr('syllable') == 'start_time' || \$(this).attr('syllable') == 'end_time') {
\t\t\t\t\t\t\t\t\$(this).val(cs.getNowTime(task[i][\$(this).attr('syllable')]));
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\$(this).val(task[i][\$(this).attr('syllable')]);
\t\t\t\t\t\t});

\t\t\t\t\t\t//将新增行追加进tbody中
\t\t\t\t\t\t\$('#templateCon .service_detail').append(html);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t//长期合同
\t\t\tif(type == 0) {
\t\t\t\t//编辑长期合同中填入与服务产品相关的数据
\t\t\t\t\$('#templateCon .task').each(function(i, e) {
\t\t\t\t\tif(\$(this).attr('field') == 'start_time' || \$(this).attr('field') == 'end_time') {
\t\t\t\t\t\t\$(this).val(cs.getNowTime(task[0][\$(this).attr('field')]));
\t\t\t\t\t\treturn true;
\t\t\t\t\t}

\t\t\t\t\t\$(this).val(task[0][\$(this).attr('field')]);
\t\t\t\t});
\t\t\t}

\t\t\t//长期合同 与 一次性合同 相同字段数据填充
\t\t\t\$('#templateCon [field]').not('.task').each(function(i, e) {
\t\t\t\tif(\$(this).attr('field') == 'customer_id') {
\t\t\t\t\t\$(this).val(data['khm_customer.id']).trigger('change');
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\tif(\$(this).attr('field') == 'contract_num') {
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\tif(\$(this).attr('field') == 'account_book') {
\t\t\t\t\t\$(this).val(data['htm_contract.account_book']);
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\tif(\$(this).attr('field') == 'discount_total') {
\t\t\t\t\t\$(this).val(data['htm_contract.discount_total']);
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\tif(\$(this).attr('field') == 'htm_contract.signed_time') {
\t\t\t\t\t\$(this).val(cs.getNowTime(data[\$(this).attr('field')]));
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\t\$(this).val(data[\$(this).attr('field')]);
\t\t\t});

\t\t\t\$('#templateCon [contract-total]').val(eval(data['htm_contract.account_book'] + '+' + data['htm_contract.discount_total']).toFixed(2));

            //图片
            if(image.length > 5) {
                \$('#templateCon .uploadImage').parent().hide();
            }
            var _html = '';
            for(var i in image) {
                _html = \$(`<label>
                            <img style=\"width:68px;height:68px;margin-right:5px;\" src=\"\${image[i]['url']}\">
                            <input type=\"file\" class=\"uploadImage _decrease\" style=\"position: absolute;opacity: 0;left:-9999px;\">
                        </label>`);

                _html.find('._decrease').data('img', {
                    'id': image[i]['id'],
                    'url': image[i]['url'],
                    'name': image[i]['name']
                });
                \$('#templateCon .uploadImage').parent().before(_html);
            }

            _html = [];
            //文件
            if(file.length > 5) {
                \$('#templateCon .uploadFile').parent().hide();
            }
            //文件
            html = [];
            for(var i in file) {
                html.push('<p style=\"padding-left: 2px;cursor: pointer\"><a data-url=\"'+file[i]['url']+'\">'+file[i]['name']+'</a><i style=\"color: red; margin-left: 20px;cursor: pointer;\" class=\"ace-icon fa fa-trash-o gdel gdel2\"></i></p>');
            }
//\t\t\t\$('#templateCon #fileBox').html(html.join(''));
            \$('#templateCon .uploadFile').parent().before(html);
            \$('#templateCon #fileBox').find('a').click(function() {
                var name = \$(this).text();
                var url = \$(this).attr('data-url');
                window.open(ykp.api_url+\"/api/api_common/update_file_name?file_url=\"+url+\"&name=\"+name)
            })





\t\t\t\$('.gdel2').click(function() {
\t\t\t\tvar parent =  \$(this).parent();
\t\t\t\tlayui.use('layer',function() {
\t\t\t\t\tlayui.layer.confirm('确认删除此订单？', function(index){
\t\t\t\t        parent.remove();
\t\t\t\t        layui.layer.closeAll();
\t\t\t\t    });
\t\t\t\t})
\t\t\t})
            uploadFile();
            uploadImg();
\t\t\t//业务员
\t\t\tvar emps = [];
\t\t\tfor(var i in data['market']) {
\t\t\t\temps.push(data['market'][i]['employees_id']);
\t\t\t}
\t\t\t\$('#templateCon .state').eq(type).val(emps).trigger('change');

\t\t\t//时间插件
\t\t\tcs.timeplug();
\t\t\t//计算折后总额
\t\t\tcalculateTotal();
\t\t\t//计算结束时间
\t\t\tendtime(0);
\t\t\t//切换产品，改变相应数据
\t\t\tchangePrice();
\t\t\t//添加一次性合同中，点击 '+' 新增一行，点击 '-' 删掉当前行
\t\t\toprationService();
\t\t}

\t\t//添加详情table表数据
\t\t//period 周期，account_book 账本费，product 产品信息，signed_time 签约时间
\t\tfunction generateTable(period, account_book, product, signed_time) {
\t\t\t//产品名称
\t\t\t
\t\t\tvar product_id = product['product_id'];
\t\t\tvar product_name = product['productName'];
\t\t\t// for(var i in service_product){
\t\t\t//     if(parseInt(service_product[i]['id']) == product_id){
\t\t\t//         product_name = service_product[i]['name'];
\t\t\t//         break;
\t\t\t//     }
\t\t\t// }

\t\t\tvar html = [];
\t\t\t//\${cs.getNowTime(signed_time).substring(0,cs.getNowTime(signed_time).lastIndexOf('-'))}
\t\t\thtml.push(
\t\t\t\t`<tr>
                    <td class=\"center\">\${product_name}(账本费)</td>
                    <td class=\"center\"></td>
                    <td class=\"center\">\${cs.getNowTime(signed_time)}</td>
                    <td class=\"center\" style=\"text-align:right !important\">\${account_book}</td>
                </tr>`
\t\t\t);

\t\t\tvar months = generateMonth(period, product);
\t\t\tvar lastTime = \"\";
\t\t\tfor(var i in months) {
\t\t\t\tif(i == months.length -1){
\t\t\t\t\tlastTime = months[i]['date'].lastIndexOf('~') == -1 ? months[i]['date'] + '-01' : months[i]['date'].substring(0,months[i]['date'].lastIndexOf('~')) + '-01';
\t\t\t\t}
\t\t\t\thtml.push(
\t\t\t\t\t`<tr>
                        <td class=\"center\">\${product_name}</td>
                        <td class=\"center\">\${months[i]['date']}</td>
                        <td class=\"center\">\${months[i]['date'].lastIndexOf('~') == -1 ? months[i]['date'] + '-01' : months[i]['date'].substring(0,months[i]['date'].lastIndexOf('~')) + '-01'}</td>
                        <td class=\"center\" style=\"text-align:right !important\">\${(product['discount'] * months[i]['acount']).toFixed(2)}</td>
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
                            <td class=\"center\">\${product_name+'（赠送）'}</td>
                            <td class=\"center\">\${_months[i]['date']}</td>
                            <td class=\"center\">\${lastTime}</td>
                            <td class=\"center\" style=\"text-align:right !important\">0.00</td>
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
\t\t\tvar months = []; //所有服务月份
\t\t\tfor(var i = 0; i < times; i++) {
\t\t\t\tif(i == 0) {
\t\t\t\t\tif(i == (times - 1)) {
\t\t\t\t\t\tmonths.push(formatDate(addMonth(start_time, i * period), addMonth(start_time, product['count'] - 1)));
\t\t\t\t\t} else{
\t\t\t\t\t\tmonths.push(formatDate(addMonth(start_time, i * period), addMonth(start_time, (i + 1) * period - 1)));
\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t}
\t\t\t\tif(i != (times - 1) && i != 0) {
\t\t\t\t\tmonths.push(formatDate(addMonth(start_time, i * period), addMonth(start_time, (i + 1) * period - 1)));
\t\t\t\t}
\t\t\t\tif(i == (times - 1) && i != 0) {
\t\t\t\t\tmonths.push(formatDate(addMonth(start_time, i * period), addMonth(start_time, product['count'] - 1)));
\t\t\t\t}
\t\t\t}
\t\t\treturn months;
\t\t}

\t\t//将时间转换为指定格式
\t\tfunction formatDate(date1, date2) {
\t\t\tvar data = {};
\t\t\tvar date = ykp.formatDate(date1, 'YYYY-MM') + '~' + ykp.formatDate(date2, 'YYYY-MM');
\t\t\tdata['date'] = date;
\t\t\tdata['acount'] = date2.getFullYear() > date1.getFullYear() ? date2.getMonth() + 13 - date1.getMonth() : date2.getMonth() - date1.getMonth() + 1;
\t\t\t
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

\t\t//添加详情数据
\t\tfunction addDetailData(res, type) {
\t\t\tvar data = res.data;
\t\t\tvar market = data['market']; //业务员
\t\t\tvar image = data['HT_image']; //图片
\t\t\tvar file = data['htm_contract.files'] ? JSON.parse(data['htm_contract.files']) : []; //文件
\t\t\tvar task = data['task']; //服务产品
\t\t\tvar cycle = {
\t\t\t\t'1': '每月',
\t\t\t\t'3': '季度',
\t\t\t\t'6': '半年',
\t\t\t\t'12': '一年'
\t\t\t}; //维护周期
\t\t\tvar cycle1 = {
\t\t\t\t'1': '1个月',
\t\t\t\t'3': '3个月',
\t\t\t\t'6': '6个月',
\t\t\t\t'12': '12个月'
\t\t\t}; //收款周期
\t\t\tvar cycle2 = {
\t\t\t\t'1': '一般纳税人',
\t\t\t\t'2': '小规模',
\t\t\t\t
\t\t\t}; 
\t\t\tvar salesman_id = []; //业务员员id
\t\t\tvar salesman = []; //业务员
\t\t\t// var payment = ['','现金','支付宝','微信','银行卡'];//收款方式
\t\t\tvar field = '';

\t\t\t\$('#templateCon .contractType').eq(type).find('[field]').each(function(i, e) {
\t\t\t\tif(\$(this).attr('field') == 'htm_contract.signed_time' || \$(this).attr('field') == 'htm_contract.auth_time1' || \$(this).attr('field') == 'htm_contract.create_time') {
\t\t\t\t\t\$(this).text(data[\$(this).attr('field')] != '0' ? cs.getNowTime(data[\$(this).attr('field')]) : '');
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\tif(\$(this).attr('field') == 'htm_contract.auth_id1') {
\t\t\t\t\t\$(this).text(data[\$(this).attr('field')] != '0' ? employees[data[\$(this).attr('field')]] : '');
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\tif(\$(this).attr('field') == 'htm_contract.is_source') {
\t\t\t\t\t\$(this).text(data[\$(this).attr('field')] == '1' ? '线上' : '线下');
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\tif(\$(this).attr('field') == 'htm_contract.is_tax') {
\t\t\t\t\t\$(this).text(data[\$(this).attr('field')] == '0' ? '否' : '是');
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
\t\t\t\tif(\$(this).attr('field') == 'htm_contract.get_cycle') {
\t\t\t\t\t\$(this).text(cycle1[data[\$(this).attr('field')]]);
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\tif(\$(this).attr('field') == 'htm_contract.create_by') {
\t\t\t\t\t\$(this).text(data['market'][0].info.name);
\t\t\t\t\treturn true;
\t\t\t\t}if(\$(this).attr('field') == 'khm_customer.tax_type') {\t\t\t\t\t
\t\t\t\t\t\$(this).text(cycle2[data[\$(this).attr('field')]]);
\t\t\t\t\tif(data[\$(this).attr('field')]==2){
\t\t\t\t\t\t\$('.bill').hide();
\t\t\t\t\t\t\$('.bill').html('');
\t\t\t\t\t}else{
\t\t\t\t\t\t\$('.bill').show();
\t\t\t\t\t}
\t\t\t\t\tdata[\$(this).attr('field')];
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\t\$(this).text(data[\$(this).attr('field')]);
\t\t\t\t
\t\t\t});
\t\t\t\$('#templateCon [contract-total]').text((parseInt(data['htm_contract.account_book']) + parseInt(data['htm_contract.discount_total'])).toFixed(2));

\t\t\t//仓位
\t\t\t\$('#templateCon [syllable=\"pos_name\"]').text(data['position']['pos_name']);

\t\t\t//业务员
\t\t\tvar emps = [];
\t\t\tfor(var i in market) {
\t\t\t\temps.push(market[i]['info']['name']);
\t\t\t}
\t\t\t\$('#templateCon [syllable=\"market\"]').text(emps.join(','));

            //图片
            var html = [];
            for(var i in image) {
                html.push(
                    `<img src=\"\${image[i]['url']}\" style=\"width:60px;height:60px;\"/>`
                );
            }
            \$('#templateCon [syllable=\"image\"]').html(html.join(''));

            //文件
            html = [];
            for(var i in file) {
                html.push('<p style=\"padding-left: 2px; cursor: pointer\"><a data-url=\"'+file[i]['url']+'\">'+file[i]['name']+'</a></p>');
            }
            \$('#templateCon [syllable=\"file\"]').html(html.join(''));
            \$('#templateCon [syllable=\"file\"]').find('a').click(function() {
                var name = \$(this).text();
                var url = \$(this).attr('data-url');
                window.open(ykp.api_url+\"/api/api_common/update_file_name?file_url=\"+url+\"&name=\"+name)
            })
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
\t\t\t\t\t\t\$(this).text(task[0]['productName']);
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\t\$(this).text(task[0][\$(this).attr('syllable')]);
\t\t\t\t});
\t\t\t}
\t\t\t// 一次性合同
\t\t\tif(type == 1) {
\t\t\t\thtml = [];
\t\t\t\tfor(var i in task) {
\t\t\t\t\thtml.push(
\t\t\t\t\t\t`<tr>
                            <td style=\"text-align: left\">\${task[i]['productName']}</td>
                            <td style=\"text-align: left\">\${task[i]['count']}</td>
                            <td style=\"text-align: left\">\${task[i]['pricing']}</td>
                            <td style=\"text-align: left\">\${cs.getNowTime(task[i]['start_time'])}</td>
                            <td style=\"text-align: left\">\${cs.getNowTime(task[i]['end_time'])}</td>
                            
                        </tr>`
                        //<td>\${cs.getNowTime(task[i]['start_time'])}</td> <td>\${cs.getNowTime(task[i]['end_time'])}</td>
\t\t\t\t\t);
\t\t\t\t}
\t\t\t\t\$('#templateCon .contract_content tbody').html(html.join(''));
\t\t\t}
\t\t}

\t\t//添加一次性合同中，点击 '+' 新增一行，点击 '-' 删掉当前行
\t\tfunction oprationService() {
\t\t\t\$('#templateCon .opration').unbind('click').click(function() {
\t\t\t\tvar html = '';
\t\t\t\tif(\$(this).hasClass('increase')) {
\t\t\t\t\tif(\$('#templateCon .contract_content tbody tr').length >= 5) {
\t\t\t\t\t\tykp.prompt('最多只能添加五条记录！');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\thtml =
\t\t\t\t\t\t`<tr>
                            <td> <a class=\"decrease opration\" >-</a> </td>
                            <td style=\"text-align: left\">
                                <select field=\"service_items\" class=\"short\">
                                    <option>请选择</option>
                                </select> 
                            </td>

                            <td style=\"text-align: left\">
                                <input type=\"number\" syllable=\"count\" value=\"1\" style=\"width:60px\">
                            </td>
                            <td style=\"text-align: left\">
                                <input type=\"number\" syllable=\"pricing\" style=\"width:60px\">
                            </td>
                            <td style=\"text-align: left\">
                                <div class=\"input-group\" style=\"display: inline-flex; width: 110px;\">
                                    <input class=\"date-timepicker1 required start_time\" syllable=\"start_time\" style=\"height: 30px; width: 80px;\">
                                    <span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                                        <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                    </span>
                                </div>
                            </td>
                            <td style=\"text-align: left\">
                                <div class=\"input-group\" style=\"display: inline-flex; width: 110px;\">
                                    <input class=\"date-timepicker1 required end_time\" syllable=\"end_time\" style=\"height: 30px; width: 80px;\">
                                    <span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                                        <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                    </span>
                                </div>
                            </td>
                        </tr>`;

\t\t\t\t\thtml = \$(html);

\t\t\t\t\t//服务产品
\t\t\t\t\tfor(var i in service_product) {
\t\t\t\t\t\tif(service_product[i]['type'] != 1) {
\t\t\t\t\t\t\thtml.find('.short').append(\$(new Option(service_product[i]['name'], parseInt(service_product[i]['id']))).data('price', parseInt(service_product[i]['price'])));
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t\$('#templateCon .contract_content tbody').append(html);
\t\t\t\t\tcs.timeplug();

\t\t\t\t\tchangePrice();

\t\t\t\t\t//添加一次性合同中，点击 '+' 新增一行，点击 '-' 删掉当前行
\t\t\t\t\toprationService();
\t\t\t\t}
\t\t\t\tif(\$(this).hasClass('decrease')) {
\t\t\t\t\t\$(this).parents('tr').remove();
\t\t\t\t}
\t\t\t});

\t\t}
\t\t

\t\t//时间插件
\t\tcs.timeplug();

\t\tfunction time_plug(type) {
\t\t\tif(!ace.vars['old_ie']) {
\t\t\t\t\$('#templateCon .date-timepicker1,.date-timepicker1').datetimepicker({
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
\t\t\tif(!ace.vars['old_ie']) {
\t\t\t\t\$('#templateCon [field=\"start_time\"],#templateCon [sear=\"start_time\"]').datetimepicker({
\t\t\t\t\tformat: 'YYYY-MM-DD', //use this option to display seconds
\t\t\t\t\tdefaultDate: new Date().setDate(1),
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

\t\t\tvar companys = \$('#templateCon .state').select2({
\t\t\t\tallowClear: true
\t\t\t});
\t\t\tcompanys.css('left', '5px');
\t\t\t\$('#templateCon select[field=\"customer_id\"]').css('width', '180px').select2({
\t\t\t\tallowClear: true
\t\t\t});
\t\t\t// \$('#select2-multiple-style .btn').unbind('click').on('click', function(e){
\t\t\t//     var target = \$(this).find('input[type=radio]');
\t\t\t//     var which = parseInt(target.val());
\t\t\t//     if(which == 2) \$('.select2').addClass('tag-input-style');
\t\t\t//      else \$('.select2').removeClass('tag-input-style');
\t\t\t// });
\t\t}

\t\t//合同类型切换
\t\tfunction contractTypeChange() {
\t\t\t\$('#templateCon .statistics_tit li').click(function() {
\t\t\t\tvar index = \$(this).index();
\t\t\t\tvar it = \$(this);
\t\t\t\tit.addClass('acti').siblings().removeClass('acti');
\t\t\t\t\$('#templateBox .contractType').eq(index).show().siblings().hide();
             /*   if(index == 0){
                    \$('#templateBox .contractType').eq(0).find(\".imgBox_1\").html(`
\t\t\t\t\t\t<label style=\"float:left;\">上传文件：</label>
\t\t\t\t\t\t\t<div id=\"imgBox\">
\t\t\t\t\t\t\t\t<label class=\"upbx\" style=\"text-align: center;border: 1px solid;width: 70px;position: relative;height: 70px; cursor: pointer; text-align: center;line-height: 70px;font-size: 70px;\">
\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"uploadFiles\" style=\"position:absolute;left:-9999px;opacity: 0;\" />
\t\t\t\t\t\t\t\t\t<span class=\"\" style=\"display: inline-block;position: absolute;top: 0;left: 14px; cursor: pointer; text-align: center;\">+</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>`);
                    uploadsmallimg()
                    \$('#templateBox .contractType').eq(1).find(\".imgBox_2\").html('')
                }else {
                    \$('#templateBox .contractType').eq(1).find(\".imgBox_2\").html(`
\t\t\t\t\t\t<label style=\"float:left;\">上传文件：</label>
\t\t\t\t\t\t\t<div id=\"imgBox\">
\t\t\t\t\t\t\t\t<label class=\"upbx\" style=\"text-align: center;border: 1px solid;width: 70px;position: relative;height: 70px; cursor: pointer; text-align: center;line-height: 70px;font-size: 70px;\">
\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"uploadFiles\" style=\"position:absolute;left:-9999px;opacity: 0;\" />
\t\t\t\t\t\t\t\t\t<span class=\"\" style=\"display: inline-block;position: absolute;top: 0;left: 14px; cursor: pointer; text-align: center;\">+</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>`);
                    uploadsmallimg()
                    \$('#templateBox .contractType').eq(0).find(\".imgBox_1\").html('')
\t\t\t\t}*/
\t\t\t\tcalculateTotal();
\t\t\t\tendtime(index);
\t\t\t\t\$('#templateCon .customer').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});
\t\t\t})
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
        return "admin/contractManagement/contracts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1521 => 1498,  1517 => 1497,  19 => 1,);
    }
}
/* <style>*/
/* 	#templateBox .statistics_tit {*/
/* 		margin-top: 15px;*/
/* 		list-style: none;*/
/* 		margin-left: 0;*/
/* 		border-bottom: 1px #d5e3ef solid;*/
/* 	}*/
/* 	*/
/* 	#templateBox .statistics_tit li.acti {*/
/* 		position: relative;*/
/* 		top: 1px;*/
/* 		border-top: 1px solid #C5D0DC;*/
/* 		border-right: 1px solid #C5D0DC;*/
/* 		border-bottom: 1px solid #e6ecf2;*/
/* 		border-left: 1px solid #C5D0DC;*/
/* 	}*/
/* 	*/
/* 	#templateBox .statistics_tit li {*/
/* 		float: left;*/
/* 		padding: 10px 20px;*/
/* 		cursor: pointer;*/
/* 	}*/
/* 	*/
/* 	#templateCon label {*/
/* 		width: 79px;*/
/* 	}*/
/* 	*/
/* 	#templateCon label.btn {*/
/* 		width: auto;*/
/* 	}*/
/* 	*/
/* 	#templateCon input {*/
/* 		padding: 5px;*/
/* 		width: 180px;*/
/* 		height: 30px;*/
/* 	}*/
/* 	*/
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
/* 	#templateCon span[field] {*/
/* 		display: inline-block;*/
/* 		min-width: 180px;*/
/* 	}*/
/* 	#templateCon label{*/
/* 	width: 80px !important;*/
/* }*/
/* 	#templateCon #imgBox  label{*/
/* 		width: 70px !important;*/
/* 	}*/
/* 	#templateCon span[syllable] {*/
/* 		display: inline-block;*/
/* 		min-width: 180px;*/
/* 	}*/
/* 	/*#templateCon .contract_content thead th{*/
/*         height:40px;*/
/*         min-width: 40px;*/
/*         text-align: center;*/
/*         line-height: 40px;*/
/*     }*/
/* */
/*     #templateCon .contract_content tbody td{*/
/*         height:40px;*/
/*         min-width: 40px;*/
/*         text-align: center;*/
/*         line-height: 40px;*/
/*     }*//* */
/* 	*/
/* 	#templateCon .contract_content .opration {*/
/* 		position: relative;*/
/* 		font-size: 22px !important;*/
/* 	}*/
/* 	*/
/* 	select[sear] {*/
/* 		width: 180px;*/
/* 	}*/
/* 	*/
/* 	#templateCon .bootstrap-datetimepicker-widget.dropdown-menu table {*/
/* 		table-layout: fixed !important;*/
/* 	}*/
/* 	*/
/* 	#templateBox {*/
/* 		overflow: visible;*/
/* 	}*/
/* 	*/
/* 	#templateCon tbody tr td,*/
/* 	#templateCon thead tr th {*/
/* 		/*text-align: left !important;*//* */
/* 		padding: 5px 10px;*/
/* 		height: 35px;*/
/* 	}*/
/* 	.custom_table tr th[data-num='10']{*/
/* 		text-align: right !important;*/
/* 	}*/
/* </style>*/
/* <div class=" widget-main">*/
/* 	<div class="row">*/
/* 		<div class="col-lg-12" style="position:relative;">*/
/* 			<!-- <h3 class="header smaller lighter  blue">合同</h3> -->*/
/* 			<div class="row" style="margin-top: 20px;" id="topTool">*/
/* 				<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 					<input type="text" pts=0 id="" sear="khm_customer.name" placeholder="企业名称" />*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 					<input type="text" pts=0 id="" sear="htm_contract.contract_code" placeholder="订单编码" />*/
/* 				</div>*/
/* 				<div class="col-sx-4 " style=" float: left; margin-right: 5px;">*/
/* 					<!--<select style="margin: 12px !important;width:180px" class="advandced-search select2-hidden-accessible" pts=1 sear="staff" tabindex="-1" data-type="gj" aria-hidden="true">*/
/* 						<option value=""> 负责人 </option>*/
/* 					</select>-->*/
/* 					<!--<input type="text" pts=0 sear="market" placeholder="业务员">-->*/
/* 					<select marketing-id="0" pts=4 sear="marketing_id" table="htm_contract_marketing" style="margin: 12px !important;width: 180px" class="advandced-search select2-hidden-accssible">*/
/* 						<option value="">业务员</option>*/
/* 					</select>*/
/* */
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 					<button type="button" id="search" title="搜索" class="btn btn-info btn-sm">*/
/*                         <i class="fa fa-search"></i>*/
/*                     </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 					<button id="heightsearch" title="高级搜索" type="button" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/*                         <i class="fa fa-filter"></i>*/
/*                     </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 					<button type="button" title="刷新" class="btn btn-info btn-sm flush" style="background-color: #32CD32 !important;">*/
/*                         <i class="fa fa-refresh"></i>*/
/*                     </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="135" style=" float: left; margin-right: 5px;">*/
/* 					<button type="button" title="添加" id="addItem" style="outline: none;background-color: #32CD32 !important;" class="btn btn-info btn-sm position-relative">*/
/*                         <i class="fa fa-plus"></i>*/
/*                     </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="136" style=" float: left; margin-right: 5px;">*/
/* 					<button type="button" title="批量审批" class="btn btn-info btn-sm plSp" style="background-color: #32CD32 !important;">*/
/* 						<i class="fa fa-check-circle-o"></i>*/
/*                     </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="136" style=" float: left; margin-right: 5px;">*/
/* 					<button type="button" title="批量不续签" class="btn btn-info btn-sm no_enew" style="background-color: #FF5722 !important;border-color:#FF5722 !important; ">*/
/* 						<i class="fa fa-spinner"></i>*/
/* 					</button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="304" style=" float: left; margin-right: 5px;">*/
/* 					<button type="button"  title="导出" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="exportfile moveToClue btn addBtn btn-info btn-sm position-relative">*/
/* 						<i class="fa fa-sign-out"></i>*/
/* 					</button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 					<div id="filterBtns" style="display:inline-block;width:290px;height: 36px">*/
/* 						<a href="javascript:void(0);" class="myFilter" style="background: #E6E6E6;line-height:32px" data-status="a">全部</a>*/
/* 						<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-status="0">*/
/* 							</i> 待审批</a>*/
/* 						<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-status="2"> 已通过</a>*/
/* 						<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-status="1"> 未通过</a>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div id="heightsearch1" class="col-sx-12" style="margin-top:30px;position: absolute; background: #fff;padding: 15px 0px; display: none;z-index:1042;">*/
/* 					<div class="row">*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>订单编码</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="htm_contract.contract_code" />*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>企业名称</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.name" />*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>合同类型</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select gjs=0 sear="htm_contract.contract_type" data-type="gj">*/
/* 								<option value="">请选择</option>*/
/* 								<option value="1"> 长期合同 </option>*/
/* 								<option value="2"> 一次性合同 </option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>合同编码</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="htm_contract.contract_num">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>服务项目</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select gjs=7 style="margin: 12px !important;width: 180px" sear="htm_contract.id" id="product" class="advandced-search select2-hidden-accssible" tabindex="-1" aria-hidden="true">*/
/* 								<option value="">请选择</option>*/
/* 							</select>*/
/* 							<!--<input type="text" gjs=7 sear="htm_contract.id">-->*/
/* 						</div>*/
/* 						<!--<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>服务定价</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> > </option>*/
/* 								<option> &lt; </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=7 sear="pricing" data-type="gj">*/
/* 						</div>-->*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>服务总额</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> > </option>*/
/* 								<option> &lt; </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=10 sear="htm_contract.discount_total" data-type="gj" style="width: 85px;">-*/
/* 							<input type="text" gjs=11 sear="" data-type="gj" style="width: 85px;">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>收款周期</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> > </option>*/
/* 								<option> &lt; </option>*/
/* 							</select>*/
/* 							<select gjs=0 sear="htm_contract.get_cycle" data-type="gj" style="width:180px;">*/
/* 								<option value="">请选择</option>*/
/* 								<option value="1">1个月</option>*/
/* 								<option value="3">3个月</option>*/
/* 								<option value="6">6个月</option>*/
/* 								<option value="12">12个月</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>每月费用</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> > </option>*/
/* 								<option> &lt; </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=10 sear="htm_task.discount" data-type="gj" style="width: 85px;">-*/
/* 							<input type="text" gjs=11 sear="" data-type="gj" style="width: 85px;">*/
/* 							<!--<input type="text" gjs=7 sear="discount" data-type="gj">-->*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>账本费用</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> > </option>*/
/* 								<option> &lt; </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=10 sear="htm_contract.account_book" data-type="gj" style="width: 85px;">-*/
/* 							<input type="text" gjs=11 sear="htm_contract.account_book" data-type="gj" style="width: 85px;">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>业务员</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select marketing-id="0" gjs=7 style="margin: 12px !important;width: 180px" class="advandced-search select2-hidden-accssible" tabindex="-1" aria-hidden="true">*/
/* 								<option value="">请选择</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>签约时间</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> > </option>*/
/* 								<option> &lt; </option>*/
/* 							</select>*/
/* 							<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 								<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 								<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="htm_contract.signed_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 							</div>*/
/* 							<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/*                                 <input class="date-timepicker1" data-type="gj" data-status = "time"  gjs=0 sear="htm_contract.signed_time" class="form-control" style="height: 30px; width: 150px;    padding: 5px;">*/
/*                                 <span class="input-group-addon" style="width:30px;height:30px;">*/
/*                                     <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                 </span>*/
/*                             </div>-->*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>开始时间</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> > </option>*/
/* 								<option> &lt; </option>*/
/* 							</select>*/
/* 							<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 								<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 								<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="start_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 							</div>*/
/* 							<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/*                                 <input data-type="gj" data-status = "time"  gjs=7 sear="start_time" class="form-control" style="height: 30px; width: 150px;    padding: 5px;">*/
/*                                 <span class="input-group-addon" style="width:30px;height:30px;">*/
/*                                     <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                 </span>*/
/*                             </div>-->*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>截止时间</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> > </option>*/
/* 								<option> &lt; </option>*/
/* 							</select>*/
/* 							<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 								<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 								<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="end_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 							</div>*/
/* 							<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/*                                 <input class="date-timepicker1" data-type="gj" data-status="time"  gjs=7 sear="end_time" class="form-control" style="height: 30px; width: 150px;height:30px;    padding: 5px;">*/
/*                                 <span class="input-group-addon" style="width:30px;">*/
/*                                     <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                 </span>*/
/*                             </div>-->*/
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
/* 							<!-- <input type="text" gjs=0> -->*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>备注</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="htm_contract.remark">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>创建人</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width: 180px" gjs=3 sear="htm_contract.create_by" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 								<option value="">请选择</option>*/
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
/* 								<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="htm_contract.create_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 							</div>*/
/* 							<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/*                                 <input class="date-timepicker1" data-type="gj" data-status = "time"  gjs=0 sear="htm_contract.create_time" class="form-control" style="height: 30px; width: 150px;    padding: 5px;">*/
/*                                 <span class="input-group-addon" style="width:30px;height:30px;">*/
/*                                     <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                 </span>*/
/*                             </div>-->*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>已收金额</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> > </option>*/
/* 								<option> &lt; </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="htm_contract.get_money" data-type="gj">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>审批人</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width: 180px" gjs=3 sear="htm_contract.auth_id1" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 								<option value="">请选择</option>*/
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
/* 								<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="htm_contract.auth_time1" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 							</div>*/
/* 							<!-- <div class="input-group" style="display: inline-flex; width: 180px;">*/
/*                                 <input class="date-timepicker1" data-type="gj" data-status = "time"  gjs=0 sear="htm_contract.auth_time1" class="form-control" style="height: 30px; width: 150px;    padding: 5px;">*/
/*                                 <span class="input-group-addon" style="width:30px;height:30px;">*/
/*                                     <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                 </span>*/
/*                             </div>-->*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>审批状态</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select gjs=0 sear="htm_contract.auth_status1">*/
/* 								<option value="">请选择</option>*/
/* 								<option value="0">待审批</option>*/
/* 								<option value="1">未通过</option>*/
/* 								<option value="2">已通过</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>审批回复</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="htm_contract.auth_remark1" data-type="gj">*/
/* 						</div>*/
/*                    */
/*                    */
/*                    <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>税务类型</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select gjs=0 sear="htm_contract.contract_type" data-type="gj">*/
/* 								<option value="">请选择</option>*/
/* 								<option value="1"> 一般纳税人 </option>*/
/* 								<option value="2"> 小规模 </option>*/
/* 							</select>*/
/* 						</div>*/
/*                    */
/*                    */
/*                    */
/*                    */
/* 						<div style="text-align:center;clear:both;padding-top:10px; ">*/
/* 							<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/*                                                                 查询*/
/*                             </button>*/
/* 							<button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 								重置*/
/* 							</button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 			<div class="custom_table">*/
/* 				<table id="longTerm">*/
/* 					<thead>*/
/* 						<tr class="thColor">*/
/* 							<th class="center">*/
/* 								<label class="pos-rel">*/
/*                                 <input type="checkbox" class="ace" onclick="checkAll(this.checked)"/>*/
/*                                 <span class="lbl"></span>*/
/*                             </label>*/
/* 							</th>*/
/* 							<th>操作</th>*/
/* 							<th data-num="1">审批状态</th>*/
/* 							<th data-num="2">订单编码</th>*/
/* 							<th data-num="3">企业名称</th>*/
/* 							<th data-num="4">税务类型</th>*/
/* 							<th data-num="5">合同类型</th>*/
/* 							<th data-num="6">合同编码</th>*/
/* 							<th data-num="7">服务项目</th>*/
/* 							<!--<th data-num="7">服务定价</th>*/
/* 							<th data-num="8">合同折扣</th>-->*/
/* 							<th data-num="8" style="text-align: right !important;">服务总额</th>*/
/* 							<th data-num="9">收款周期</th>*/
/* 							<th data-num="10" style="text-align: right !important;">每月费用</th>*/
/* 							<th data-num="11" style="text-align: right !important;">账本费用</th>*/
/* 							<th data-num="12">业务员</th>*/
/* 							<th data-num="13">签约时间</th>*/
/* 							<th data-num="14">开始时间</th>*/
/* 							<th data-num="15">结束时间</th>*/
/* 							<th data-num="16">合同状态</th>*/
/* 							<th data-num="17">备注</th>*/
/* 							<th data-num="18">创建人</th>*/
/* 							<th data-num="19">创建时间</th>*/
/* 							<th data-num="20" style="text-align: right !important;">已收金额</th>*/
/* 							<th data-num="21" style="text-align: right !important;">待收金额</th>*/
/* 							<th data-num="22">审批人</th>*/
/* 							<th data-num="23">审批时间</th>*/
/* 							<th data-num="24">审批回复</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* */
/* 					<tbody id="longTerm_data">*/
/* 						<!-- <tr>*/
/*                          <td class="center">*/
/*                              <label class="pos-rel">*/
/*                                  <input type="checkbox" name="check" class="ace"/>*/
/*                                  <span class="lbl"></span>*/
/*                              </label>*/
/* */
/*                          </td>*/
/*                          <td data-num="1"><span>国标常务</span></td>*/
/*                          <td data-num="2"><span>短期合同</span></td>*/
/*                          <td data-num="3"><span>sm009890</span></td>*/
/*                          <td data-num="4"><span>注册公司</span></td>*/
/*                          <td data-num="5"><span>1000</span></td>*/
/*                          <td data-num="6"><span>0</span></td>*/
/*                          <td data-num="7"><span>1000</span></td>*/
/*                          <td data-num="8"><span>每月</span></td>*/
/*                          <td data-num="9"><span>月付</span></td>*/
/*                          <td data-num="10"><span>0</span></td>*/
/*                          <td data-num="11"><span>0</span></td>*/
/*                          <td data-num="12"><span>李驰</span></td>*/
/*                          <td data-num="13"><span>李驰</span></td>*/
/*                          <td data-num="14"><span>456456</span></td>*/
/*                          <td data-num="15"><span>456456</span></td>*/
/*                          <td data-num="16"><span>已结束</span></td>*/
/*                          <td data-num="17"><span></span></td>*/
/*                          <td data-num="18"><span>李辞</span></td>*/
/*                          <td data-num="19"><span>2016546456</span></td>*/
/*                          <td data-num="20"><span>500</span></td>*/
/*                          <td data-num="21"><span>500</span></td>*/
/*                          <td>*/
/*                              <label class="pos-rel">*/
/*                                  <a style="cursor: pointer"  class="lbl">详情&nbsp</a>|*/
/*                                  <a style="cursor: pointer"  class="lbl">编辑&nbsp</a>|*/
/*                                  <a style="cursor: pointer"  class="lbl red">删除&nbsp</a>*/
/*                              </label>*/
/*                          </td>*/
/*                      </tr>-->*/
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/* 			<div align="center" style="margin-top: 20px; margin-bottom: 20px;" >*/
/* 				<div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
/* 				<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 				<div id="pageBar" class="pagination"></div>*/
/* 				<div  align="right" style="float: right;  width: 10%;">*/
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
/* 		<!-- 合同编辑 -->*/
/* 		<div class="row" id="template4" style="display:none;">*/
/* 			<!-- 长期合同 -->*/
/* 			<div class="contractType" style="display:none;">*/
/* 				<div style="margin-top:15px;">*/
/* 					<label><i class='reqired_label'>*</i>企业名称:</label>*/
/* 					<select style="width:180px;" class="required customer select2" field="customer_id" msg="企业名称不能为空">*/
/* 						<option value="">  请选择 </option>*/
/* */
/* 					</select>*/
/* 					<!-- <label>仓位： </label>*/
/*                     <select style="width:180px;" class="required" field="pos_id" msg="仓位不能为空">*/
/*                         <option value="">  请选择 </option>*/
/*                     </select> -->*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>合同编码： </label>*/
/* 					<select style="width: 180px !important;" name="state" field="contract_num" tabindex="-1" class="select2" aria-hidden="true">*/
/* 						<option value="">请选择</option>*/
/* 					</select>*/
/* 					<label> 服务周期： </label>*/
/* 					<select style="width:180px;" class="required" field="htm_contract.payment_cycle" msg="请选择维护周期">*/
/* 						<option value="">  请选择 </option>*/
/* 						<option value="1">每月</option>*/
/* 						<option value="3">季度</option>*/
/* 						<option value="6">半年</option>*/
/* 						<option value="12">一年</option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 订单来源： </label>*/
/* 					<select style="width:180px;" class="required" field="htm_contract.is_source" msg="请选择订单来源">*/
/* 						<option value="">  请选择 </option>*/
/* 						<option value="1">线上</option>*/
/* 						<option value="2">线下</option>*/
/* 					</select>*/
/* 					<label> <i class='reqired_label'>*</i>签约时间:</label>*/
/* 					<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<input class="date-timepicker1 required" msg="签约时间不能为空" field="htm_contract.signed_time" style="height: 30px; width: 150px;">*/
/* 						<span class="input-group-addon" style="width:30px;height:30px;">*/
/*                             <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                         </span>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 税务类型： </label>*/
/* 					<select style="width: 180px;" field="khm_customer.tax_type" value="1" id="tax_type">*/
/* 						<option value="1">一般纳税人</option>*/
/* 						<option value="2" >小规模</option>*/
/* 					</select>*/
/* 					<label class="is_tax" style="display: none;"> 发票认证： </label>*/
/* 					<select class="is_tax" style="width: 180px;display: none;" field="htm_contract.is_tax"  value="1" id="is_tax">*/
/* 						<option value="1">是</option>*/
/* 						<option value="0">否</option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label><i class='reqired_label'>*</i> 业务员： </label>*/
/* 					<select multiple="" class="state " name="state" class="select2 select2-hidden-accessible" data-placeholder="请选择" style="width: 437px;" tabindex="-1" aria-hidden="true"></select>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label style="float:left">备注：</label>*/
/* 					<textarea class="" msg="" field="htm_contract.remark" style="padding:5px;margin-left:5px;width:437px;risize:none;"></textarea>*/
/* 				</div>*/
/* 				<div class="long_contract" style="display: none">*/
/* 					<div style="margin-top:15px;">*/
/* 						<label>服务产品： </label>*/
/* 						<select style="width:180px;" class="required long task" field="product_id" msg="请选择服务产品">*/
/* 							<option value="0">  请选择 </option>*/
/* 						</select>*/
/* 						<label><i class='reqired_label'>*</i>数量： </label>*/
/* 						<input class="required task" type="number" field="count" msg="数量不能为空" />*/
/* 					</div>*/
/* 					<div style="margin-top:15px;">*/
/* 						<label><i class='reqired_label'>*</i>赠送： </label>*/
/* 						<input class="required task" type="number" field="count_send" msg="赠送不能为空" />*/
/* 						<!-- <label><i class='reqired_label'>*</i>标准价： </label>-->*/
/* 						<!-- <input class="required task" type="number" field="pricing" disabled msg="标准价不能为空"/>-->*/
/* 					</div>*/
/* 					<div style="margin-top:15px;">*/
/* 						<label><i class='reqired_label'>*</i>折后价： </label>*/
/* 						<input class="required task" type="number" field="discount" msg="折后价不能为空" />*/
/* 						<label><i class='reqired_label'>*</i>折后总额： </label>*/
/* 						<input class="required" type="number" field="discount_total" disabled msg="折后总额不能为空" />*/
/* 					</div>*/
/* 					<div style="margin-top:15px;">*/
/* 						<label><i class='reqired_label'>*</i>账本费： </label>*/
/* 						<input class="required" type="number" field="account_book" account-book msg="账本费不能为空" />*/
/* 						<!--  <label>收款方式： </label>*/
/*                         <select style="width:180px;" class="required" field="htm_contract.receivables_way" msg="请选择收款方式">*/
/*                             <option value="">  请选择 </option>*/
/*                             <option value="2">支付宝</option>*/
/*                             <option value="3">微信</option>*/
/*                             <option value="1">现金</option>*/
/*                             <option value="4">银行卡</option>*/
/*                         </select> -->*/
/* 					</div>*/
/* 					<div style="margin-top:15px;">*/
/* 						<label>合同总额： </label>*/
/* 						<input class="required" disabled type="number" contract-total/>*/
/* 						<label>收款周期： </label>*/
/* 						<select style="width:180px;" class="required" field="htm_contract.get_cycle" msg="请选择收款周期">*/
/* 							<option value="0">  请选择 </option>*/
/* 							<option value="1">1个月</option>*/
/* 							<option value="3">3个月</option>*/
/* 							<option value="6">6个月</option>*/
/* 							<option value="12">12个月</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div style="margin-top:15px;">*/
/* 						<label><i class='reqired_label'>*</i>开始时间： </label>*/
/* 						<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 							<input class="required task" field="start_time" msg="合同开始时间只能选择月份1号" style="height: 30px; width: 150px;">*/
/* 							<span class="input-group-addon" style="width:30px;height:30px;">*/
/*                                 <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                             </span>*/
/* 						</div>-->*/
/* 						<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 							<input class="date-timepicker1 task required" msg="合同开始时间只能选择月份1号" field="start_time" style="height: 30px; width: 150px;">*/
/* 							<span class="input-group-addon" style="width:30px;height:30px;">*/
/* 	                            <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 	                        </span>*/
/* 						</div>*/
/* 						<label>结束时间： </label>*/
/* 						<input disabled field="end_time" class="end_time task">*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<!-- 一次性合同 -->*/
/* 			<div class="contractType" style="display:none;">*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>企业名称:</label>*/
/* 					<select style="width:180px;" class="required customer select2" field="customer_id" msg="企业名称不能为空">*/
/* 						<option value="">请选择</option>*/
/* 					</select>*/
/* 					<!-- <label style="margin-left:170px">仓位： </label>*/
/*                     <select style="width:180px;" class="required" field="pos_id" msg="公司名称不能为空">*/
/*                         <option value="">  请选择 - - -</option>*/
/*                     </select> -->*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>合同编码： </label>*/
/* 					<select style="width: 180px !important;" name="state" field="contract_num" tabindex="-1" class="select2" aria-hidden="true">*/
/* 						<option value="">请选择</option>*/
/* 					</select>*/
/* 					<!-- <input class="required" field="htm_contract.contract_num" disabled msg="合同编码不能为空"/> -->*/
/* 					<label style="margin-left:170px"><i class='reqired_label'>*</i>订单总额： </label>*/
/* 					<input class="required" field="discount_total" msg="折后总额不能为空" />*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 订单来源： </label>*/
/* 					<select style="width:180px;" class="required" field="htm_contract.is_source" msg="请选择订单来源">*/
/* 						<option value="">  请选择 </option>*/
/* 						<option value="1">线上</option>*/
/* 						<option value="2">线下</option>*/
/* 					</select>*/
/* 					<!-- <label>收款方式： </label>*/
/*                     <select style="width:180px;" class="required" field="htm_contract.receivables_way" msg="请选择收款方式">*/
/*                         <option value="">  请选择 </option>*/
/*                         <option value="2">支付宝</option>*/
/*                         <option value="3">微信</option>*/
/*                         <option value="1">现金</option>*/
/*                         <option value="4">银行卡</option>*/
/*                     </select> -->*/
/* 					<label style="margin-left:170px"> <i class='reqired_label'>*</i>签约时间:</label>*/
/* 					<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<input class="date-timepicker1 required" msg="签约时间不能为空" field="htm_contract.signed_time" style="height: 30px; width: 150px;">*/
/* 						<span class="input-group-addon" style="width:30px;height:30px;">*/
/*                             <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                         </span>*/
/* 					</div>*/
/* 				</div>*/
/* 				<!--<div style="margin-top:15px;">*/
/* */
/* 					<label> 发票认证： </label>*/
/* 					<select style="width: 180px;" field="htm_contract.is_tax">*/
/* 						<option value="">-请选择-</option>*/
/* 						<option value="1">是</option>*/
/* 						<option value="0">否</option>*/
/* 					</select>*/
/* 				</div>-->*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 业务员： </label>*/
/* 					<select multiple="" name="state" class="state select2 select2-hidden-accessible" data-placeholder="请选择" style="width: 607px;" tabindex="-1" aria-hidden="true"></select>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label style="float:left"><i class='reqired_label'>*</i>备注：</label>*/
/* 					<textarea class="required" msg="备注不能为空" field="htm_contract.remark" style="padding:5px;margin-left:5px;width:607px;risize:none;"></textarea>*/
/* 				</div>*/
/* */
/* 				<div class="one_contract" style="display: none">*/
/* 					<div style="margin-top:15px;">*/
/* 						<table class="contract_content">*/
/* 							<thead>*/
/* 								<tr>*/
/* 									<th>操作</th>*/
/* 									<th>服务产品</th>*/
/* 									<th>服务数量</th>*/
/* 									<!-- <th>标准价</th>-->*/
/* 									<th>服务价格</th>*/
/* 									<!--<th>订单期限</th>-->*/
/* 									<th>开始时间</th>*/
/* 									<th>结束时间</th>*/
/* 								</tr>*/
/* 							</thead>*/
/* 							<tbody class="service_detail">*/
/* 								<tr>*/
/* 									<td>*/
/* 										<a class="increase opration">+</a>*/
/* 									</td>*/
/* 									<td style="text-align: left">*/
/* 										<select class="short" syllable="product_id">*/
/* 											<option value="0">请选择</option>*/
/* 										</select>*/
/* 									</td>*/
/* 									<td style="text-align: left">*/
/* 										<input type="number" syllable="count" value="1" style="width:60px">*/
/* 									</td>*/
/* 									<!--<td>*/
/* 										<input type="number" syllable="pricing"  style="width:60px">*/
/* 									</td>-->*/
/* 									<td style="text-align: left">*/
/* 										<input type="number" syllable="pricing" style="width:60px">*/
/* 									</td>*/
/* 									<td style="text-align: left">*/
/* 										<div class="input-group" style="display: inline-flex; width: 110px;">*/
/* 											<input class="date-timepicker1 required" msg="开始时间不能为空" syllable="start_time" style="height: 30px; width: 80px;">*/
/* 											<span class="input-group-addon" style="width:30px;height:30px;">*/
/*                                                 <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                             </span>*/
/* 										</div>*/
/* 									</td>*/
/* 									<td style="text-align: left">*/
/* 										<div class="input-group" style="display: inline-flex; width: 110px;">*/
/* 											<input class="date-timepicker1 required" msg="结束时间不能为空" syllable="end_time" style="height: 30px; width: 80px;">*/
/* 											<span class="input-group-addon" style="width:30px;height:30px;">*/
/*                                                 <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                             </span>*/
/* 										</div>*/
/* 									</td>*/
/* 								</tr>*/
/* 							</tbody>*/
/* 						</table>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;max-width: 511.67px;">*/
/* 				<label style="float:left;">上传文件：</label>*/
/* 				<div id="fileBox" style="display:inline-block;padding-left:5px;width:calc(100% - 75px);">*/
/* 					<label class="btn btn-info btn-sm" style="margin-bottom:5px;">*/
/* 						选择文件*/
/* 						<input type="file" class="uploadFile" style="opacity:0;position:absolute;left:-9999px;">*/
/* 					</label>*/
/* 				</div>*/
/* 				<div style="clear:both;" class="reference"></div>*/
/* 			</div>*/
/* 			<div style="text-align:center;margin-top:15px;">*/
/* 				<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* 				<button class="sure_button add">*/
/*                     <i class="fa fa-check" aria-hidden="true"></i>*/
/*                     保存*/
/*                 </button>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- 合同详情 -->*/
/* 		<div class="row" id="template2" style="display:none;">*/
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
/* 					<label> 服务周期： </label>*/
/* 					<span field="htm_contract.payment_cycle"></span>*/
/* 					<label> 订单来源： </label>*/
/* 					<span field="htm_contract.is_source"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 签约时间: </label>*/
/* 					<span field="htm_contract.signed_time"></span>*/
/* 					<!--<label class="typess"> 发票认证1： </label>*/
/* 					<span field="htm_contract.is_tax"></span>-->*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label class="typess"> 税务类型	: </label>*/
/* 					<span id="types" field="khm_customer.tax_type"></span>*/
/* 				*/
/* 						<label class="bill"> 发票认证： </label>*/
/* 					<span class="bill" field="htm_contract.is_tax"></span>*/
/* 		*/
/* 					*/
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
/* 								<th class="center" style="text-align:right !important">应收金额</th>*/
/* 							</tr>*/
/* 							</tdead>*/
/* 							<tbody id="serviceInfo">*/
/* 								*/
/* 							</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* */
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
/* 					<label>订单总额： </label>*/
/* 					<span field="htm_contract.discount_total"></span>*/
/* 					<label> 订单来源： </label>*/
/* 					<span field="htm_contract.is_source"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<!-- <label>收款方式： </label>*/
/*                     <span field="htm_contract.receivables_way"></span> -->*/
/* 					<label> 签约时间:</label>*/
/* 					<span field="htm_contract.signed_time"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>业务员：</label>*/
/* 					<span syllable="market"></span>*/
/* 					<label>备注：</label>*/
/* 					<span field="htm_contract.remark"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* */
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<table class="contract_content">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th>服务产品</th>*/
/* 								<th>数量</th>*/
/* 								<!-- <th>标准价</th>-->*/
/* 								<th >折后价</th>*/
/* 								<th>开始时间</th>*/
/* 								<th>结束时间</th>*/
/* 								<!--<th>订单期限</th>-->*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody>*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>上传文件：</label>*/
/* 					<div style="display:inline-block;padding-left:5px;width:calc(100% - 75px);" syllable="file">*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!--添加公海-->*/
/* 		<div class="row" id="template" style="display:none;">*/
/* 			<div style="margin-top:15px;">*/
/* 				<label> <i class='reqired_label'>*</i>企业名称:</label>*/
/* 				<input class="required" addfield="name" msg="企业名称不能为空" />*/
/* 				<label> <i class='reqired_label'></i> 法人： </label>*/
/* 				<input class="" addfield="corporation" msg="法人不能为空">*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label> 注册资本(万)： </label>*/
/* 				<input class="" addfield="capital" msg="只能是数字" validate="int" type="number" />*/
/* 				<label><i class='reqired_label'></i> 成立日期： </label>*/
/* 				<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 					<input class="date-timepicker1" addfield="stablish_time" msg="" style="height: 30px; width:inherit;">*/
/* 					<span class="input-group-addon" style="width:30px;height:30px;position:absolute;right:0;border-left:1px solid #ddd;">*/
/* 	                                <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 	                            </span>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label> <i class='reqired_label'></i>省市区：</label>*/
/* 				<span id="city" title_="area">*/
/* 	                <select class="prov"></select>  */
/* 	                <select class="city" disabled="disabled"></select>  */
/* 	                <select class="dist" disabled="disabled"></select>  */
/* 	            </span>*/
/* 			</div>*/
/* */
/* 			<div style="margin-top:15px;">*/
/* 				<label> 公海类型：</label>*/
/* 				<span id="city" title_="area">*/
/* 	     			<select style="margin-right: 12px !important;width: 180px" addfield="type"  class="cusType select2-hidden-accessible" tabindex="-1" sear="type" >*/
/* 					*/
/* 	          	</select>*/
/* 	            </span>*/
/* 				<!--<button id="addTypeBtn" class="btn">添加</button>-->*/
/* 			</div>*/
/* */
/* 			<div style="margin-top:15px;">*/
/* 				<label> <i class='reqired_label'></i>地址： </label>*/
/* 				<input class="" addfield="address" msg="公司地址不能为空" style="width:457px;" />*/
/* 			</div>*/
/* */
/* 			<div style="margin-top:15px;">*/
/* 				<label> <i class='reqired_label'>*</i>联系人姓名： </label>*/
/* 				<input class="required" addfield="contacts" msg="联系人姓名不能为空" />*/
/* 				<label> 电话号码： </label>*/
/* 				<input class="" addfield="tel" msg="" />*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label> 网址： </label>*/
/* 				<input class="" addfield="url" msg="" />*/
/* 				<label> <i class='reqired_label'></i>手机号码： </label>*/
/* 				<input class="" addfield="phone" msg="手机号码不能为空">*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label> 传真： </label>*/
/* 				<input class="" addfield="fax" msg="" />*/
/* 				<label> 邮箱： </label>*/
/* 				<input class="" addfield="email" msg="">*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label> <i class='reqired_label'></i>客户来源： </label>*/
/* 				<select class="source" addfield="source" style="width:180px;" msg="">*/
/* 					<option value="">  请选择 </option>*/
/* 					<option value="转介绍">转介绍</option>*/
/* 					<option value="电话咨询">电话咨询</option>*/
/* 					<option value="线上注册">线上注册</option>*/
/* 					<option value="客户上门">客户上门</option>*/
/* 					<option value="陌生拜访">陌生拜访</option>*/
/* 					<option value="公司资源">公司资源</option>*/
/* 					<option value="个人资源">个人资源</option>*/
/* 					<option value="广告宣传">广告宣传</option>*/
/* 					<option value="电话营销">电话营销</option>*/
/* 				</select>*/
/* 				<label class="introducer" style="display:none;"> 介绍人： </label>*/
/* 				<input class="introducer" addfield="introduce" msg="" style="display:none;">*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label> 所属行业： </label>*/
/* 				<select class="" style="width:180px;" addfield="industry" msg="">*/
/* 					<option value="">请选择</option>*/
/* 					<option value="1">批发零售业</option>*/
/* 					<option value="2">制造业</option>*/
/* 					<option value="3">租赁和商务服务业</option>*/
/* 					<option value="4">仓储运输业</option>*/
/* 					<option value="5">餐饮住宿业</option>*/
/* 					<option value="6">信息软件业</option>*/
/* 					<option value="7">金融业</option>*/
/* 					<option value="8">房地产业</option>*/
/* 					<option value="9">建筑业</option>*/
/* 					<option value="10">教育</option>*/
/* 					<option value="11">文体娱乐业</option>*/
/* 					<option value="12">卫生和社会工作</option>*/
/* 					<option value="13">居民服务</option>*/
/* 					<option value="14">修理业</option>*/
/* 					<option value="15">农林牧渔业</option>*/
/* 				</select>*/
/* 				<label> 公司规模： </label>*/
/* 				<!--<input class="" addfield="scale" msg="">-->*/
/* 				<select style="width: 180px" addfield="scale"   >*/
/* 				<option value="">请选择</option>*/
/* 				<option value="10人以下">10人以下</option>*/
/* 				<option value="10-50人">10-50人</option>*/
/* 				<option value="50-100人">50-100人</option>*/
/* 				<option value="100-200人">100-200人</option>*/
/* 				<option value="200人以上">200人以上</option>*/
/* 			</select>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label> <i class='reqired_label'></i>税务类型： </label>*/
/* 				<select class="" addfield="tax_type"  style="width:180px;" msg="请选择税务类型">*/
/* 					<option value="">  请选择 </option>*/
/* 					<option value="1">一般纳税人</option>*/
/* 					<option value="2">小规模</option>*/
/* 				</select>*/
/* 				<label> 经营范围： </label>*/
/* 				<input class="" addfield="range" msg="">*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label style="float:left;"> 备注： </label>*/
/* 				<textarea style="width:457px;margin-left:5px;resize:none;padding:5px;" addfield="remark" class="in_remark"></textarea>*/
/* 			</div>*/
/* 			<div style="text-align:center;margin-top:15px;border-top:1px solid #ccc;padding-top: 10px;">*/
/* 				<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* 				<button class="sure_button add">*/
/* 	                            <i class="fa fa-check" aria-hidden="true"></i>*/
/* 	                            保存*/
/* 	                        </button>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- //添加合同 -->*/
/* 		<div class="row" id="template1" style="display:none;">*/
/* 			<ul class="statistics_tit clear">*/
/* 				<li class="acti">长期合同</li>*/
/* 				<li class="">一次性合同</li>*/
/* 			</ul>*/
/* 			<div>*/
/* 				<!--长期合同-->*/
/* 				<div class="contractType">*/
/* 					<div style="margin-top:15px;">*/
/* 						<label><i class='reqired_label'>*</i>企业名称： </label>*/
/* 						<select style="width: 180px !important;" name="state" field="customer_id" tabindex="-1" class="select2 customer" aria-hidden="true">*/
/* 							<option value="">请选择</option>*/
/* 						</select>*/
/* 						<button type="button" id="addItem1" style="outline: none;background-color: #009688 !important;" class="btn btn-info btn-sm position-relative">*/
/*                         <i class="fa fa-plus"></i>*/
/*                         	添加*/
/*                         </button>*/
/* 					</div>*/
/* 					<div style="margin-top:15px;">*/
/* 						<label>合同编码： </label>*/
/* */
/* 						<select style="width: 180px !important;" contract_type="1" name="state" field="contract_num" tabindex="-1" class="select2" aria-hidden="true">*/
/* 							<option value="">请选择</option>*/
/* 						</select>*/
/* */
/* 						<label> <i class='reqired_label'>*</i>服务周期： </label>*/
/* 						<select style="width:180px;" class="required" field="payment_cycle" msg="请选择维护周期">*/
/* 							<option value="">  请选择 </option>*/
/* 							<option value="1">每月</option>*/
/* 							<option value="3">季度</option>*/
/* 							<option value="6">半年</option>*/
/* 							<option value="12">一年</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div style="margin-top:15px;">*/
/* 						<label> 订单来源： </label>*/
/* 						<select style="width:180px;" class="" field="is_source" msg="">*/
/* 							<option value="2">线下</option>*/
/* 							<!--<option value="">  请选择 </option>-->*/
/* 							<option value="1">线上</option>*/
/* 						</select>*/
/* 						<label><i class='reqired_label'>*</i> 签约时间： </label>*/
/* 						<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 							<input class="date-timepicker1 required" msg="签约时间不能为空" field="signed_time" style="height: 30px; width: 150px;">*/
/* 							<span class="input-group-addon" style="width:30px;height:30px;">*/
/*                                 <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                             </span>*/
/* 						</div>*/
/* */
/* 					</div>*/
/* */
/* 					<div style="margin-top:15px;">*/
/* 						<label><i class='reqired_label'>*</i> 税务类型： </label>*/
/* 						<select style="width: 180px;" class="required" msg="税务类型不能为空"*/
/* 						field="tax_type" value="2" id="tax_type">*/
/* 							<option value="1" >一般纳税人</option>*/
/* 							<option value="2" selected=true>小规模</option>*/
/* 						</select>*/
/* */
/* 						<label class="is_tax" style="display: none;"> 发票认证： </label>*/
/* 						<select style="width: 180px;display: none;" value=""  class="is_tax" msg="发票认证不能为空" */
/* 						field="is_tax" id="is_tax">*/
/* 							<option value="" >请选择</option>*/
/* 							<option value="1" >是</option>*/
/* 							<option value="0">否</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div style="margin-top:15px;">*/
/* 						<label> <i class='reqired_label'>*</i>业务员： </label>*/
/* 						<select multiple="" name="state" class="state select2 select2-hidden-accessible" data-placeholder="请选择" style="width: 437px;" tabindex="-1" aria-hidden="true"></select>*/
/* 					</div>*/
/* 					<div style="margin-top:15px;">*/
/* 						<label style="float:left">备注：</label>*/
/* 						<textarea class="" msg="" field="remark" style="padding:5px;margin-left:5px;width:437px;risize:none;"></textarea>*/
/* 					</div>*/
/* 					<div style="display:none;" class="hiddenContent">*/
/* 						<!--<label><i class='reqired_label'>*</i>服务产品： </label>*/
/* 							<select style="width:180px;" class="required long" field="product_id" msg="请选择服务产品">*/
/* 								<option value="">  请选择 </option>*/
/* 							</select>-->*/
/* 						<div style="margin-top:15px;">*/
/* 							<label><i class='reqired_label'>*</i>服务产品： </label>*/
/* 							<select style="width:180px;" class="required long" field="product_id" msg="请选择服务产品">*/
/* 								<option value="">  请选择 </option>*/
/* 							</select>*/
/* 							<label><i class='reqired_label'>*</i>收款周期： </label>*/
/* 							<select style="width:180px;" class="required" field="get_cycle" msg="请选择收款周期">*/
/* 								<option value="0">  请选择 </option>*/
/* 								<option value="1">1个月</option>*/
/* 								<option value="3">3个月</option>*/
/* 								<option value="6">6个月</option>*/
/* 								<option value="12">12个月</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div style="margin-top:15px;">*/
/* 							<label>赠送数量： </label>*/
/* 							<input class="" field="count_send" value="0" type="number" msg="" />*/
/* 							<label><i class='reqired_label'>*</i>服务数量： </label>*/
/* 							<input class="required" field="count" type="number" value="12" msg="数量不能为空" />*/
/* 						</div>*/
/* 						<div style="margin-top:15px;">*/
/* 							*/
/* 							<!--<label>标准价： </label>*/
/*                             <input class="required" field="pricing" type="number" disabled msg="标准价不能为空"/>-->*/
/* 						</div>*/
/* 						<div style="margin-top:15px;">*/
/* 							<label><i class='reqired_label'>*</i>服务单价： </label>*/
/* 							<input class="required" field="discount" type="number" msg="折后价不能为空" />*/
/* 							<label>服务总价： </label>*/
/* 							<input class="required" field="discount_total" type="number" disabled msg="折后总额不能为空" />*/
/* 						</div>*/
/* 						<div style="margin-top:15px;">*/
/* 							<label><i class='reqired_label'>*</i>账本费： </label>*/
/* 							<input class="required" field="account_book" account-book type="number" msg="账本费不能为空" />*/
/* 							<label>订单总额： </label>*/
/* 							<input class="required" disabled type="number" contract-total/>*/
/* 							<!-- <label>收款方式： </label>*/
/*                             <select style="width:180px;" class="required" field="receivables_way" msg="请选择收款方式">*/
/*                                 <option value="">  请选择 </option>*/
/*                                 <option value="1">现金</option>*/
/*                                 <option value="2">支付宝</option>*/
/*                                 <option value="3">微信</option>*/
/*                                 <option value="4">银行卡</option>*/
/*                             </select> -->*/
/* 						</div>*/
/* 						*/
/* 						<div style="margin-top:15px;">*/
/* 							<label><i class='reqired_label'>*</i>开始时间： </label>*/
/* 							<div class="input-group " style="display: inline-flex; width: 180px;">*/
/* 								<input class="required date-timepicker1" field="start_time" msg="开始时间不能为空" style="height: 30px; width: 150px;">*/
/* 								<span class="input-group-addon" style="width:30px;height:30px;">*/
/*                                     <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                 </span>*/
/* 							</div>*/
/* 							<label>结束时间： </label>*/
/* 							<input disabled field="end_time" class="end_time">*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div style="display:none;" class="hiddenContent">*/
/* 						<div style="margin-top:15px;max-width: 511.67px;">*/
/* 							<label style="float:left;">上传文件：</label>*/
/* 							<div id="fileBox" style="display:inline-block;padding-left:5px; margin-top:10px;width:calc(100% - 75px); ">*/
/* 								<label class="btn btn-info btn-sm" style="margin-bottom:5px;">*/
/* 									选择文件*/
/* 									<input type="file" class="uploadFile" style="opacity:0;position:absolute;left:-9999px;">*/
/* 								</label>*/
/* 							</div>*/
/* 							<div style="clear:both;" class="reference"></div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div style="margin-top:15px;text-align:center;">*/
/* 						<button class="btn btn-info btn-sm more" style="position:relative;left:35px;">填写更多...</button>*/
/* 					</div>*/
/* 				</div>*/
/* 				<!-- 一次性 -->*/
/* 				<div class="contractType" style="display:none;">*/
/* 					<div style="margin-top:15px;">*/
/* 						<label><i class='reqired_label'>*</i>企业名称： </label>*/
/* 						<select style="width:180px;" class="required customer" field="customer_id" msg="企业名称不能为空">*/
/* 							<option value="">  请选择 </option>*/
/* 						</select>*/
/* 						<button type="button" id="addItem1" style="outline: none;background-color: #009688 !important;" class="btn btn-info btn-sm position-relative">*/
/*                         <i class="fa fa-plus"></i>*/
/*                         	添加*/
/*                     </button>*/
/* 						<!--<label style="margin-left:170px;">仓位： </label>*/
/*                         <select style="width:180px;" contract_type="2" class="required" field="pos_id" msg="公司名称不能为空">*/
/*                             <option value="">  请选择 </option>*/
/*                         </select> -->*/
/* 					</div>*/
/* 					<div style="margin-top:15px;">*/
/* 						<label>合同编码： </label>*/
/* 						<select style="width: 180px !important;" contract_type="2" name="state" field="contract_num" tabindex="-1" class="select2" aria-hidden="true">*/
/* 							<option value="">请选择</option>*/
/* 						</select>*/
/* 						<label>订单总额： </label>*/
/* 						<input class="" field="discount_total" disabled msg="" />*/
/* 					</div>*/
/* 					<div style="margin-top:15px;">*/
/* 						<label> 订单来源： </label>*/
/* 						<select style="width:180px;" class="" field="is_source" msg="">*/
/* 							<option value="2">线下</option>*/
/* 							<!--<option value="">  请选择 </option>-->*/
/* 							<option value="1">线上</option>*/
/* 							*/
/* 						</select>*/
/* 						<label> <i class='reqired_label'>*</i>签约时间： </label>*/
/* 						<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 							<input class="date-timepicker1 required" msg="签约时间不能为空" field="signed_time" style="height: 30px; width: 150px;">*/
/* 							<span class="input-group-addon" style="width:30px;height:30px;">*/
/*                                 <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                             </span>*/
/* 						</div>*/
/* 						<!-- <label>收款方式： </label>*/
/*                         <select style="width:180px;" class="required" field="receivables_way" msg="请选择收款方式">*/
/*                             <option value="">  请选择 </option>*/
/*                             <option value="2">支付宝</option>*/
/*                             <option value="3">微信</option>*/
/*                             <option value="1">现金</option>*/
/*                             <option value="4">银行卡</option>*/
/*                         </select> -->*/
/* 					</div>*/
/* 					<!-- <div style="margin-top:15px;">*/
/*                         */
/*                       <label> 发票认证： </label>*/
/*                         <select style="width: 180px;" field="is_tax">*/
/*                             <option value="">-请选择-</option>*/
/*                             <option value="1">是</option>*/
/*                             <option  value="0">否</option>*/
/*                         </select>*/
/*                     </div> -->*/
/* 					<div style="margin-top:15px;">*/
/* 						<label> <i class='reqired_label'>*</i>业务员： </label>*/
/* 						<select multiple="" name="state" style="width: 437px" class="state select2 select2-hidden-accessible" data-placeholder="请选择" tabindex="-1" aria-hidden="true"></select>*/
/* 					</div>*/
/* 					<div style="margin-top:15px;">*/
/* 						<label style="float:left">备注：</label>*/
/* 						<textarea class="" msg="" field="remark" style="padding:5px;width: 437px;margin-left:5px;resize: none;"></textarea>*/
/* 					</div>*/
/* 					<div style="display:none;" class="hiddenContent">*/
/* 						<div style="margin-top:15px;">*/
/* 							<table class="contract_content">*/
/* 								<thead>*/
/* 									<tr>*/
/* 										<th>操作</th>*/
/* 										<th><i class='reqired_label'>*</i>服务产品</th>*/
/* 										<th><i class='reqired_label'>*</i>服务数量</th>*/
/* 										<!-- <th><i class='reqired_label'>*</i>标准价</th>-->*/
/* 										<th><i class='reqired_label'>*</i>服务价格</th>*/
/* 										<th><i class='reqired_label'>*</i>开始时间</th>*/
/* 										<th><i class='reqired_label'>*</i>结束时间</th>*/
/* 									</tr>*/
/* 								</thead>*/
/* 								<tbody>*/
/* 									<tr>*/
/* 										<td>*/
/* 											<a class="increase opration">+</a>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select class="short">*/
/* 												<option value="">请选择</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<input type="number" syllable="count" value="1" style="width:60px">*/
/* 										</td>*/
/* 										<td>*/
/* 											<input type="number" syllable="pricing" style="width:60px">*/
/* 										</td>*/
/* 										<td>*/
/* 											<div class="input-group" style="display: inline-flex; width: 110px;">*/
/* 												<input class="date-timepicker1 required start_time" syllable="start_time"  msg="开始时间不能为空" style="height: 30px; width: 80px;">*/
/* 												<span class="input-group-addon" style="width:30px;height:30px;">*/
/*                                                     <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                                 </span>*/
/* 											</div>*/
/* 										</td>*/
/* 										<td>*/
/* 											<div class="input-group" style="display: inline-flex; width: 110px;">*/
/* 												<input class="date-timepicker1 required end_time" syllable="end_time"  msg="开始时间不能为空" style="height: 30px; width: 80px;">*/
/* 												<span class="input-group-addon" style="width:30px;height:30px;">*/
/*                                                     <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                                 </span>*/
/* 											</div>*/
/* 										</td>*/
/* 									</tr>*/
/* 								</tbody>*/
/* 							</table>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div style="display:none;" class="hiddenContent">*/
/* 						<div style="margin-top:15px;max-width: 511.67px;">*/
/* 							<label style="float:left;">上传文件：</label>*/
/* 							<div id="fileBox" style="display:inline-block;padding-left:5px;margin-top:10px;width:calc(100% - 75px); ">*/
/* 								<label class="btn btn-info btn-sm" style="margin-bottom:5px;">*/
/* 									选择文件*/
/* 									<input type="file" class="uploadFile" style="opacity:0;position:absolute;left:-9999px;">*/
/* 								</label>*/
/* 							</div>*/
/* 							<div style="clear:both;" class="reference"></div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div style="margin-top:15px;text-align:center;">*/
/* 						<button class="btn btn-info btn-sm more" style="position:relative;left:35px;">填写更多...</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 				<div style="text-align:center;margin-top:15px;">*/
/* 					<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* 					<button class="sure_button add">*/
/* 						<i class="fa fa-check" aria-hidden="true"></i>*/
/* 						保存*/
/* 					</button>*/
/* 				</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* 	<div class="label_popup" id="feedBack" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 		<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/*         box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
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
/* 	<div class="label_popup" id="contractsXq" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 		<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 			<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 				<span style="display: inline-block;">请选择合同编码</span>*/
/* 				<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 			</div>*/
/* */
/* 			<div style="padding: 10px 50px;">*/
/* 				<select id="contractsNums" class="select2 select2-hidden-accessible" data-placeholder="请选择" style="width: 200px;" tabindex="-1" aria-hidden="true">*/
/* 				</select>*/
/* 				<!--<hr>-->*/
/* 			</div>*/
/* 			<div style="padding:15px;text-align:right;">*/
/* 				<button class="close_label">关闭</button>*/
/* 				<button class="hold Con">保存</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% include 'admin/mark.html' %} {% include 'admin/customerDetail.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/LocalResizeIMG.js"></script>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* <script src="/resource/adimin/assets/js/src/jquery.cityselect.js"></script>*/
/* <script>*/
/* 	jQuery(function($) {*/
/*         //导出功能*/
/*         cs.exportFile({*/
/*             url:"/api/api_contract/contract_export",*/
/*             title:"订单记录"*/
/* */
/*         });*/
/* 		if(cs.approve_authority({*/
/* 				name: '合同',*/
/* 				nodes: [136]*/
/* 			})) {*/
/* 			$('[contentAuthority="136"]').show();*/
/* 		}*/
/* 		cs.getNodes([135]);*/
/* 		cs.dataRang();*/
/* 		var order = 'htm_contract.id desc';*/
/* 		var pagesize = 10; //每页显示的条目数*/
/* 		var market = ''; //搜索过滤条件  业务员*/
/* 		var filter = ''; //过滤条件*/
/* 		var employees = {}; //所有员工*/
/* 		var service_product = []; //所有服务产品*/
/* 		var time = ykp.getCookie("time");*/
/* 			*/
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_contract/grid',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: "",*/
/* 				limit: pagesize,*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '.pageBar'*/
/* 			},*/
/* 			contentId: "#longTerm_data", //默认排序*/
/* 			initOrder: "", //初始化sort*/
/* 			defaultOrder: order,*/
/* 			params: [{*/
/* 				id: "#longTerm",*/
/* 				field: ["","", "htm_contract.auth_status1","htm_contract.contract_code", "khm_customer.id","khm_customer.tax_type", "htm_contract.contract_type", "htm_contract.contract_num", "", "htm_contract.discount_total",*/
/* 				"htm_contract.get_cycle","","htm_contract.account_book", "","htm_contract.signed_time","htm_contract.start_time","htm_contract.end_time","htm_contract.status","htm_contract.remark","htm_contract.create_by",*/
/* 					"htm_contract.create_time","htm_contract.get_money","htm_contract.total_monry", "htm_contract.auth_id1","htm_contract.auth_time1","htm_contract.auth_remark1"]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* 		*/
/* 		*/
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
/* 					timestamp = `htm_contract.signed_time>${today}`;*/
/* 					break;*/
/* 				case '2':*/
/* 					timestamp = `htm_contract.signed_time<${today} and htm_contract.signed_time>${today-86400}`*/
/* 					break;*/
/* 				case '3':*/
/* 					timestamp = `htm_contract.signed_time>${today-86400*6} and <${today}`;*/
/* 					break;*/
/* 				case '4':*/
/* 					timestamp = `htm_contract.signed_time>${today-86400*29}`;*/
/* 					break;*/
/* 				case '5':*/
/* 					timestamp = `htm_contract.signed_time>${today-86400*day_1}`;*/
/* 					break;*/
/* 				case '6':*/
/* 					timestamp = `htm_contract.signed_time<${today-86400*day_1} and htm_contract.signed_time>${newdaytime}`;*/
/* 					break;*/
/* 			}*/
/* 			var filter = `htm_contract.is_del = 0 and ${timestamp}`;*/
/*             var aid_2 = ykp.getCookie("aid_2");*/
/* 			if(aid_2 != '' || aid_2 != undefined) {*/
/* 				filter = `htm_contract.is_del = 0 and ${timestamp} and htm_contract.create_by = ${aid_2}`;*/
/* 			}*/
/* 			var data = {*/
/* 				"limit": pagesize,*/
/* 				"filter": filter*/
/* 			}*/
/* 			getDatalist_2(data);*/
/* 			ykp.setCookie("aid", "", (1 / 24));*/
/* 			ykp.setCookie("time", "", (1 / 24));*/
/* 		} else if(ykp.getCookie('titleTask') && ykp.getCookie('titleTask') != '') {*/
/* 			var today = new Date().setHours(0, 0, 0, 0) / 1000;*/
/* 			var uid = JSON.parse(ykp.getCookie('userinfo')).id;*/
/* 			var data = {*/
/* 				"limit": pagesize,*/
/* 				//"filter": `htm_contract.status in (1,3) and htm_contract.end_time < ${today+86400} and htm_contract.end_time > ${today-86400*90} and htm_contract.contract_code in (select contract_code from htm_contract_book where user = ${uid} and contract_code != 0)`*/
/* 				"filter": `htm_contract.status !=4 and htm_contract.end_time > ${today} and htm_contract.end_time < ${today+86400*90} and htm_contract.contract_type = 1 and htm_contract.is_renew = 0`*/
/* 			}*/
/* 			getDatalist_2(data);*/
/* 			ykp.setCookie("titleTask", '', (1 / 24));*/
/* 		} else {*/
/* 			//页面初始化*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getDatalist();*/
/* 		}*/
/* */
/* 		$('.myFilter').click(function() {*/
/* 			if(!$(this).hasClass('clc')) {*/
/* 				$(this).addClass('clc').siblings().removeClass('clc');*/
/* 			}*/
/* 			var data = {*/
/* 				"limit": pagesize,*/
/* 				'page': 1,*/
/* 				'filter': '',*/
/* 				'order': order*/
/* 			};*/
/* 			var filter_ = $(this).attr('data-status');*/
/* 			if(filter_ == 'a') {*/
/* 				filter = "";*/
/* 				getDatalist();*/
/* 				return;*/
/* 			}*/
/* 			filter = 'htm_contract.auth_status1 = '+filter_;*/
/* 			data['filter'] = 'htm_contract.auth_status1 = ' + filter_;*/
/* 			getDatalist_2(data);*/
/* */
/* 		})*/
/* */
/* 		function getDatalist_2(data) {*/
/* 			ykp.list({*/
/* 				url: '/api/api_contract/grid',*/
/* 				method: 'post',*/
/* 				data: data,*/
/* 				order: order,*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt('暂无数据！');*/
/* 						}, 1000);*/
/* 						$('#longTerm_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					}*/
/* 					addList(res);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		$('#filterBtns a').mouseover(function() {*/
/* 			$(this).addClass('over');*/
/* 		})*/
/* 		$('#filterBtns a').mouseout(function() {*/
/* 			$(this).removeClass('over');*/
/* 		})*/
/* */
/* 		*/
/* */
/* 		$('.flush').click(function() {*/
/* 			filter = '';*/
/* 			market= "";*/
/* 			$('[pts="0"]').val('');*/
/* 			$('[sear="marketing_id"]').val('').trigger('change');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getDatalist();*/
/* 		})*/
/* */
/* 		//获取所有员工*/
/* 		ykp.doAjax({*/
/* 			async: false,*/
/* 			url: '/api/api_employees/f7',*/
/* 			method: 'post',*/
/* 			async:true,*/
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
/* 		*/
/* 		*/
/* 		//获取所有服务产品*/
/* 		ykp.doAjax({*/
/* 			async: false,*/
/* 			url: '/api/api_product/f7',*/
/* 			method: 'post',*/
/* 			async:true,*/
/* 			data: {*/
/* 				select: 'ckm_product.id,ckm_product.name,ckm_product.type,ckm_product.price',*/
/* 				filter: 'ckm_product.is_del <> 1',*/
/* 			},*/
/* 			success: function(res) {*/
/* 				service_product = res.data;*/
/*                 var data = res.data;*/
/* 				$('.advandced-search').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* 				$('#product').html("");*/
/* 				$('#product').append('<option value="">请选择</option>');*/
/* 				for(var i in data) {*/
/* 					if(data[i]['name']) {*/
/* 						$('#product').append(new Option(data[i]['name'],data[i]['name']));*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		});*/
/* */
/* 		//自定义列表*/
/* 		cs.custorm_check('#longTerm', '#longTerm_data', true);*/
/* */
/* 		//切换每页显示的条目数*/
/* 		$('#changePageNum').change(function() {*/
/* 			pagesize = $(this).val();*/
/* 			ykp.setCookie('page_size',pagesize);*/
/* 			getDatalist();*/
/* 		})*/
/* */
/* 		//普通搜索*/
/* 		function generalSearch() {*/
/* 			*/
/*             var data = {*/
/*                 url: '/api/api_contract/grid',*/
/*                 method: 'post',*/
/*                 data: {*/
/*                     limit: pagesize,*/
/* /*                     market: market,*/
/*                     filter: _filter,*/
/*                     order: order *//* */
/*                 }*/
/*             };*/
/* /*             cs.doSearch('#search', data, 'filter', false, function(res, _filter) {*/
/*                 filter = _filter;*/
/*                 if(res.data.items == "") {*/
/*                     ykp.prompt('未搜索到数据');*/
/*                     $('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/*                     return;*/
/*                 }*/
/*                 addList(res);*/
/*             }, filter); *//* */
/*             */
/*             cs.doSearch('#search', data, 'filter', false, function(res, _filter) {*/
/* 				filter = _filter;*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$('#longTerm_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d;" class="page">暂无数据</div></td></tr>');*/
/* 				} else {*/
/* 					addList(res);*/
/* 				}*/
/* 			});*/
/* 			/*$('#search').click(function() {*/
/* 				var _filter = [];*/
/* 				$('[pts="0"]').each(function(i, e) {*/
/* 					if($(this).val().trim()) {*/
/* 						if($(this).attr('sear') == 'market') {*/
/* 							market = $(this).val().trim();*/
/* 							return true;*/
/* 						}*/
/* 						_filter.push($(this).attr('sear') + ' like \'%' + $(this).val().trim() + '%\'');*/
/* 					}*/
/* 				});*/
/* */
/* 				if(!market && _filter.length == 0) {*/
/* 					ykp.prompt('搜索条件至少输入一个！');*/
/* 					return;*/
/* 				}*/
/* */
/* 				_filter = _filter.join(' and ');*/
/* 				if($('#pageBar li ').length > 0) {*/
/* 					$('#pageBar').children().remove();*/
/* 				}*/
/* 				ykp.list({*/
/* 					url: '/api/api_contract/grid',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						limit: pagesize,*/
/* 						market: market,*/
/* 						filter: _filter,*/
/* 						order: order*/
/* 					},*/
/* 					pageBar: {*/
/* 						id: '#pageBar'*/
/* 					},*/
/* 					loadList: function(res) {*/
/* 						filter = _filter;*/
/* 						if(res.data.items == "") {*/
/* 							setTimeout(function() {*/
/* 								ykp.prompt('暂无数据！');*/
/* 							}, 1000);*/
/* 							$('#longTerm_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 							return;*/
/* 						}*/
/* 						addList(res);*/
/* 					}*/
/* 				});*/
/* 			});*//* */
/* 		}*/
/* */
/* 		//高级搜索列表显示与隐藏*/
/* 		cs.showHeightSearch('#heightsearch', '#heightsearch1');*/
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
/* 					$('#longTerm_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d;" class="page">暂无数据</div></td></tr>');*/
/* 				} else {*/
/* 					addList(res);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//获取合同列表数据*/
/* 		function getDatalist() {*/
/* 			generalSearch();*/
/* 			advancedSearch();*/
/* 			ykp.list({*/
/* 				url: '/api/api_contract/grid',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: pagesize,*/
/* 					filter: filter,*/
/* 					order: 'htm_contract.id desc',*/
/* 					market: market*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt('暂无数据！');*/
/* 						}, 1000);*/
/* 						$('#longTerm_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return;*/
/* 					}*/
/* 					addList(res);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//数据处理*/
/* 		function addList(res) {*/
/* 			*/
/* 			var data = res.data.items;*/
/*             var html = [];*/
/* 			var approve_statu = ['待审批', '未通过', '已通过']; //审批状态*/
/* 			var cStatus = ['未激活', '已激活', '已挂起', '已结束', '已作废']; //合同状态*/
/* 			var cycle = {*/
/* 				'1': '1个月',*/
/* 				'3': '3个月',*/
/* 				'6': '6个月',*/
/* 				'12': '12个月'*/
/* 			}; //维护周期*/
/* 			var salesman_id = []; //业务人员id*/
/* 			var salesman = []; //业务人员*/
/* 			var task = []; //任务*/
/* 			var task_detail = {}; //任务详情*/
/* */
/* 			//审批权限为true可以审批,为false不可审批*/
/* 			var spApp = cs.approve_authority({*/
/* 				name: '合同',*/
/* 				nodes: [138]*/
/* 			});*/
/* 			var cxApp = cs.approve_authority({*/
/* 				name: '合同',*/
/* 				nodes: [265]*/
/* 			});*/
/* 			var continue_mark = cs.getNodes([139], true);*/
/* 			var edit_statu = cs.getNodes([137], true);*/
/*             var del_statu = cs.getNodes([286], true);*/
/* */
/*             //td 展示 || 隐藏*/
/* 			var styles = [];*/
/* 			var today = new Date().setHours(0, 0, 0, 0) / 1000;*/
/* 			$('#longTerm .thColor th').not(':first').each(function(i, e) {*/
/* 				styles.push($(this).css('display'));*/
/* 			});*/
/*             for(i = 0; i < data.length; i++) {*/
/* 				task_detail['product'] = [];*/
/* 				task = data[i]['task'];*/
/* 				salesman_id = data[i]['market'];*/
/* 				for(var k in salesman_id) {*/
/* 					salesman.push(salesman_id[k]['info']['name']);*/
/* 				}*/
/* */
/* 				for(var k in task) {*/
/* 					if(k == 0) {*/
/* 						task_detail['start_time'] = task[k]['start_time'];*/
/* 						task_detail['end_time'] = task[k]['end_time'];*/
/* 					}*/
/* */
/* 					if(k != 0) {*/
/* 						task_detail['start_time'] = task_detail['start_time'] >= task[k]['start_time'] ? task[k]['start_time'] : task_detail['start_time'];*/
/* 						task_detail['end_time'] = task_detail['end_time'] > task[k]['end_time'] ? task_detail['end_time'] : task[k]['end_time'];*/
/* 					}*/
/* */
/* 					if(data[i]['htm_contract.contract_type'] == 1) {*/
/* 						task_detail['pricing'] = task[k]['pricing'];*/
/* 						task_detail['discount'] = task[k]['discount'];*/
/* 						task_detail['count'] = task[k]['count'];*/
/* 						task_detail['count_send'] = task[k]['count_send'];*/
/* 					}*/
/* */
/* 					if(data[i]['htm_contract.contract_type'] == 2) {*/
/* 						task_detail['pricing'] = '';*/
/* 						task_detail['discount'] = '';*/
/* 						task_detail['count'] = '';*/
/* 						task_detail['count_send'] = '';*/
/* 					}*/
/* */
/* 					task_detail['product'].push(task[k]['productName']);*/
/* 				}*/
/* 				*/
/*                 //console.log((data[i]['htm_contract.end_time'] - 86400 / 7776000) ,(today - 86400));*/
/*                 //console.log((data[i]['htm_contract.end_time'] - 86400 / 7776000) <= (today - 86400));*/
/*                 //console.log((continue_mark ? (data[i]['htm_contract.is_renew']  != 2 && data[i]['htm_contract.end_time'] >= (today - 86400 * 90) && data[i]['htm_contract.end_time'] <= (today + 86400) && data[i]['htm_contract.contract_type'] == 1 && data[i]['htm_contract.is_renew']  == 0 &&  data[i]['htm_contract.status'] !=4 ? 'inline-block' : 'none') : 'none'));*/
/*                 html +=*/
/* 					'<tr data-id="' + data[i]['htm_contract.id'] + '" data-type="' + data[i]['htm_contract.contract_type'] + '" data-isrenew="' + data[i]['htm_contract.is_renew'] + '" data-status="' + data[i]['htm_contract.auth_status1'] + '">' +*/
/* 					'<td class="center">' +*/
/* 					'<label class="pos-rel">' +*/
/* 					'<input type="checkbox" name="check" class="ace"/>' +*/
/* 					'<span class="lbl"></span>' +*/
/* 					'</label>' +*/
/* 					'</td>' +*/
/* 					'<td>' +*/
/* 					'<label class="pos-rel">' +*/
/*                     ' <a class="btOrange contractDetail"href="javascript:;" style="color:#fff !important" title="详情"><i class="fa fa-info"></i></a>' +*/
/*                     ' <a spstatu="' + data[i]['htm_contract.auth_status2'] + '" class="btBlue editContract" href="javascript:;" contentAuthority="137" style="color:#fff !important;display:' + (edit_statu ? 'inline-block' : 'none') + ';" title="编辑"><i class=" fa fa-pencil "></i></a>' +*/
/* 					' <a  class="btRed del" href="javascript:;"  style="display:' + (del_statu ? 'inline-block': 'none') + '; color:#fff !important;" title="删除"><i class="fa fa-trash"></i></a>' +*/
/* 					' <a href="javascript:;" data-status = "0" style="display:' + (cxApp ? (data[i]['htm_contract.auth_status1'] == 2 && data[i]['htm_contract.status'] == 0 ? 'inline-block' : 'none') : 'none') + ';color:#fff !important" class="sp btOrange"  contentAuthority="265" title="撤销"><i class="fa fa-rotate-left"></i></a>' +*/
/* 					' <a href="javascript:;" data-status = "2" style="display:' + (spApp ? (data[i]['htm_contract.auth_status1'] == 0 ? 'inline-block' : 'none') : 'none') + ';color:#fff !important" class=" sp btGreen" title="通过" contentAuthority="138"><i class="fa fa-check-circle"></i></a>' +*/
/* 					' <a href="javascript:;" data-status = "1" style="display:' + (spApp ? (data[i]['htm_contract.auth_status1'] == 0 ? 'inline-block' : 'none') : 'none') + ';color:#fff !important" class=" sp btRed" title="驳回" contentAuthority="138" ><i class="fa fa-times-circle"></i></a>' +*/
/* 					' <a href="javascript:;" data-status = "0" style="display:' + (continue_mark ? (data[i]['htm_contract.is_renew']  == 0 && (data[i]['htm_contract.end_time'] - 7776000) <= today && today <= data[i]['htm_contract.end_time'] && data[i]['htm_contract.contract_type'] == 1 && data[i]['htm_contract.is_renew']  == 0 &&  data[i]['htm_contract.status'] !=4 &&  data[i]['htm_contract.status'] !=0 ? 'inline-block' : 'none') : 'none') + ';color:#fff !important" class="btBlue xq" contentAuthority="139" title="续签"><i class="fa  fa-spinner"></i></a>' +*/
/* 					'</label>' +*/
/* 					'</td>' +*/
/* 					'<td style="display:' + styles[1] + ';" data-num="1"><span>' + approve_statu[data[i]['htm_contract.auth_status1']] + '</span></td>' +*/
/* 					'<td style="display:' + styles[2] + ';" data-num="2"><span>' + data[i]['htm_contract.contract_code'] + '</span></td>' +*/
/* 					'<td data-cid="' + data[i]['khm_customer.id'] + '" style="display:' + styles[3] + ';" data-num="3" ><a href="#" class="customerDetail pos-rel" data-custId="' + data[i]['khm_customer.id'] + '">' + data[i]['khm_customer.name'] + '</a>' + '<label class="pos-rel"><i class="iconBnt fa fa-info-circle" style="color:'+(data[i]['Remark'].length > 0 ? 'red' : "")+'"  data-rel="tooltip" data-placement="right" data-html="true" title="' + cs.getRemark(data[i]['Remark']) + '" ></i></label></td>' +*/
/* 				  	'<td style="display:' + styles[4] + ';" data-num="4"><span>' + (data[i]['khm_customer.tax_type'] == 1 ? '一般纳税人' : '小规模') + '</span></td>' +*/
/* 					'<td style="display:' + styles[5] + ';" data-num="5"><span>' + (data[i]['htm_contract.contract_type'] == 1 ? '长期合同' : '一次性合同') + '</span></td>' +*/
/* 					'<td style="display:' + styles[6] + ';" data-num="6"><span>' + data[i]['htm_contract.contract_num'] + '</span></td>' +*/
/* 					'<td style="display:' + styles[7] + ';" data-num="7"><span>' + task_detail['product'].join(',') + '</span></td>' +*/
/* 					/*'<td style="display:' + styles[6] + ';" data-num="7"><span>' + task_detail['pricing'] + '</span></td>' +*/
/* 					'<td style="display:' + styles[7] + ';" data-num="8"><span>' + (data[i]['htm_contract.contract_type'] == 1 ? eval(task_detail['pricing'] + '-' + task_detail['discount']) : '') + '</span></td>' +*//* */
/* 					'<td style="display:' + styles[8] + ';text-align: right !important; " data-num="8"><span>' + data[i]['htm_contract.discount_total'] + '</span></td>' +*/
/* 					'<td style="display:' + styles[9] + ';text-align: right !important; " data-num="9"><span>' + (data[i]['htm_contract.contract_type'] == 1 ? cycle[data[i]['htm_contract.get_cycle']] : '') + '</span></td>' +*/
/* 					'<td style="display:' + styles[10] + ';text-align: right !important; " data-num="10"><span>' + task_detail['discount'] + '</span></td>' +*/
/* 					'<td style="display:' + styles[11] + ';text-align: right !important;" data-num="11"><span>' + (data[i]['htm_contract.contract_type'] == 1 ? data[i]['htm_contract.account_book'] : '') + '</span></td>' +*/
/* 					'<td style="display:' + styles[12] + ';" data-num="12"><span data-market_id="' + salesman_id + '">' + salesman.join(',') + '</span></td>' +*/
/* 					'<td style="display:' + styles[13] + ';" data-num="13"><span>' + (data[i]['htm_contract.signed_time'] != '0' ? cs.getNowTime(data[i]['htm_contract.signed_time']) : '') + '</span></td>' +*/
/* 					'<td style="display:' + styles[14] + ';" data-num="14"><span>' + (data[i]['htm_contract.start_time'] != 0 ? cs.getNowTime(data[i]['htm_contract.start_time']) : '') + '</span></td>' +*/
/* 					'<td style="display:' + styles[15] + ';" data-num="15"><span>' + (data[i]['htm_contract.end_time'] != 0 ? cs.getNowTime(data[i]['htm_contract.end_time']) : '') + '</span></td>' +*/
/* 					'<td style="display:' + styles[16] + ';"data-num="16"><span>' + cStatus[data[i]['htm_contract.status']] + '</span></td>' +*/
/* 					'<td style="display:' + styles[17] + ';" data-num="17"><span>' + data[i]['htm_contract.remark'] + '</span></td>' +*/
/* 					'<td style="display:' + styles[18] + ';" data-num="18"><span>' + employees[data[i]['htm_contract.create_by']] + '</span></td>' +*/
/* 					'<td style="display:' + styles[19] + ';text-align: right !important; " data-num="19"><span>' + (data[i]['htm_contract.create_time'] != '0' ? cs.getNowTime(data[i]['htm_contract.create_time'],true) : '') + '</span></td>' +*/
/* 					'<td style="display:' + styles[20] + ';text-align: right !important; " data-num="20"><span>' + ( parseInt(data[i]['htm_contract.get_money']) + parseInt(data[i]['htm_contract.get_account_book'])).toFixed(2) + '</span></td>' +*/
/* 					'<td style="display:' + styles[21] + ';text-align: right !important;" data-num="21"><span>' + eval(data[i]['htm_contract.total_monry'] + '-' + (parseInt(data[i]['htm_contract.get_money']) + parseInt(data[i]['htm_contract.get_account_book'])) ).toFixed(2) + '</span></td>' +*/
/* 					'<td style="display:' + styles[22] + ';" data-num="22"><span>' + (data[i]['htm_contract.auth_id1'] != '0' ? employees[data[i]['htm_contract.auth_id1']] : '') + '</span></td>' +*/
/* 					'<td style="display:' + styles[23] + ';" data-num="23"><span>' + (data[i]['htm_contract.auth_time1'] != '0' ? cs.getNowTime(data[i]['htm_contract.auth_time1'],true) : '') + '</span></td>' +*/
/* 					'<td style="display:' + styles[24] + ';" data-num="24"><span>' + data[i]['htm_contract.auth_remark1'] + '</span></td>' +*/
/* 					'</tr>';*/
/* 				salesman_id = [];*/
/* 				salesman = [];*/
/* 				tasks = [];*/
/* 				task_detail = {};*/
/* 			}*/
/* */
/* 			$('#longTerm_data').html(html);*/
/* 			custom.showReamrk();*/
/* */
/* 			$("[data-rel='tooltip']").tooltip();*/
/* 			//点击 审批 or  驳回 or  撤销*/
/* */
/* 			$("#longTerm_data tr").find('.sp').click(function() {*/
/* 				var status = $(this).attr('data-status');*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				changeStatus(status, id);*/
/* 			});*/
/* 			*/
/* 			*/
/* 			$('.del').click(function() {*/
/* 				var node = ykp.getCookie('nodes').split(',');*/
/* //				node.forEach(function(item,index){*/
/* //					if(item == 286){*/
/* //					}*/
/* //				})*/
/* 				if(node.indexOf("286") == -1){*/
/* 					ykp.prompt('你没有权限');*/
/* 					return false;*/
/* 				}*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				layui.use('layer',function() {*/
/* 					layui.layer.confirm('确认删除吗?', function(index){*/
/* 						ykp.doAjax({*/
/* 							url:'/api/api_contract/del_contract',*/
/* 							methods:"post",*/
/* 							data:{*/
/* 								id:id*/
/* 							},*/
/* 							success:function(res) {*/
/* 								ykp.prompt('删除成功');*/
/* 								getDatalist();*/
/* 								layer.closeAll();*/
/* 							}*/
/* 						})*/
/* 				      });*/
/* 				})*/
/* 			})*/
/* */
/* 			//一键续签*/
/* 			$("#longTerm_data tr").find('.xq').unbind('click').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				$('#contractsXq').show();*/
/* 				$('#contractsXq').attr('contract_id', id);*/
/* 				var data = getContractBooks(1);*/
/* */
/*                 if(data == '') {*/
/* 					$('#contractsNums').append(`<option value=""> 暂无可用的合同号 </option>`);*/
/* //					return;*/
/* 				}else{*/
/* 					$('#contractsNums').html(`<option value="">请选择</option>`);*/
/* 					for(var i in data) {*/
/* 						$('#contractsNums').append(`<option value="${data[i]['code']}">${data[i]['code']}</option>`);*/
/* 					}*/
/* 				}*/
/* 				*/
/* 				$('#contractsNums').select2({*/
/* 					allowClear: true*/
/* 				})*/
/* 			});*/
/* */
/* 			$('.Con').unbind('click').click(function(res) {*/
/* 				var id = $('#contractsXq').attr('contract_id');*/
/* 				var nums = $('#contractsNums').val();*/
/* //              if(nums == ''){*/
/* //                  ykp.prompt('请选择合同编码！');*/
/* //				    return;*/
/* //				}*/
/* 				xqCon(id,nums);*/
/* 			})*/
/* */
/* 			$('.close_label').click(function() {*/
/* 				$('#contractsXq #contractsNums').val('').trigger('change');*/
/* 				$('#contractsXq').fadeOut();*/
/* 			})*/
/* */
/* 			//详情+编辑事件绑定*/
/* 			operationRecord();*/
/* 			custom.get_custom_info();*/
/* 		}*/
/* */
/* */
/* */
/*         function xqCon(id, nums) {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_contract/renew_contract',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					contract_id: id,*/
/* 					contract_num: nums*/
/* 				},*/
/* 				*/
/* 				success: function(res) {*/
/* 					$('#contractsXq').fadeOut();*/
/* 					ykp.prompt('合同续签成功！');*/
/* 					getDatalist();*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//批量审批*/
/* 		plsp();*/
/* */
/* 		function plsp() {*/
/* 			$('.plSp').click(function() {*/
/* 				var num = 0;*/
/* 				var status = '';*/
/* 				var coldata = [];*/
/* 				var Statu = false;*/
/* 				$('#longTerm_data').find('input[type=checkbox]').each(function(i) {*/
/* 					if($(this).is(':checked')) {*/
/* 						num++;*/
/* 						status = $(this).parents('tr').attr('data-status') == '0' ? 2 : 0;*/
/* 						if($(this).parents('tr').attr('data-status') != 0) {*/
/* 							ykp.prompt('审批过的不能批量审批!');*/
/* 							Statu = false;*/
/* 						} else {*/
/* 							coldata.push({*/
/* 								id: $(this).parents('tr').attr('data-id'),*/
/* 								auth_status1: status*/
/* 							});*/
/* 							Statu = true;*/
/* 						}*/
/* 					}*/
/* 				})*/
/* 				if(num == 0) {*/
/* 					ykp.prompt('请选择再审批');*/
/* 				} else {*/
/* 					if(Statu) {*/
/* 						ykp.doAjax({*/
/* 							url: "/api/api_contract/batch_auth_ht1",*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								data: JSON.stringify(coldata)*/
/* 							},*/
/* 							success: function(res) {*/
/* 								ykp.prompt('审批成功');*/
/* 								getDatalist();*/
/* 							}*/
/* 						})*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* */
/*         //批量不续签*/
/*         noRenew ();*/
/* */
/*         function noRenew() {*/
/*             $('.no_enew').click(function() {*/
/*                 var num = 0;*/
/*                 var coldata = [];*/
/*                 var Statu = false;*/
/*                 $('#longTerm_data').find('input[type=checkbox]').each(function(i) {*/
/*                     if($(this).is(':checked')) {*/
/*                         num++;*/
/*                         if($(this).parents('tr').find(".xq").css("display") == "none") {*/
/*                             ykp.prompt('只能选择待续签的项目!');*/
/*                             Statu = false;*/
/*                         } else {*/
/*                             coldata.push(*/
/*                                 $(this).parents('tr').attr('data-id')*/
/* 								)*/
/*                             	Statu = true;*/
/*                         }*/
/*                     }*/
/*                 })*/
/*                 if(num == 0) {*/
/*                     ykp.prompt('请选择要设置不续签的项目');*/
/*                 } else {*/
/*                      if(Statu) {*/
/*                          ykp.doAjax({*/
/*                              url: "/api/api_contract/del_renew",*/
/*                              method: 'post',*/
/*                              data: {*/
/*                                  id: coldata.join(',')*/
/*                              },*/
/*                              success: function(res) {*/
/*                                  ykp.prompt('不续签设置成功!');*/
/*                                  getDatalist();*/
/*                              }*/
/*                          })*/
/*                      }*/
/*                 }*/
/*             })*/
/*         }*/
/* */
/* 		//对点击驳回进行处理*/
/* 		function changeStatus(status, id) {*/
/* 			var data = {*/
/* 				url: '/api/api_contract/auth_ht1',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					id: id,*/
/* 					auth_status1: status*/
/* 				}*/
/* 			}*/
/* 			if(status == 1) {*/
/* 				$('#feedBack').show();*/
/* 				$('#feedBack .hold').unbind('click').click(function() {*/
/* 					var approve_reply = $('#feedBack').find('input').val();*/
/*                     if(approve_reply == '') {*/
/* 						ykp.prompt('不能为空！');*/
/* 						return false;*/
/* 					}*/
/* 					data.data.auth_remark1 = approve_reply.trim();*/
/* 					setStatus(data, status);*/
/* 					$('.close_label').parents('.label_popup').fadeOut();*/
/* 				})*/
/* 				cs.closePop();*/
/* 			} else if(status == 0) {*/
/* //				bootbox.confirm('确认撤销审批？', function(flag) {*/
/* //					if(flag) {*/
/* //						setStatus(data, status);*/
/* //					}*/
/* //				})*/
/*              	layui.use('layer', function() {*/
/* 						var layer = layui.layer;*/
/* 						layer.confirm('确认撤销审批？', function(flag) {*/
/* 							if(flag) {*/
/* 						layer.closeAll();*/
/* 						setStatus(data);*/
/* 							}*/
/* 						});*/
/* 					})*/
/* 			} else {*/
/* 				setStatus(data, status);*/
/* 			}*/
/* 		}*/
/* */
/* 		//发送审批信息到服务器*/
/* 		function setStatus(data, status) {*/
/* 			ykp.doAjax({*/
/* 				url: data.url,*/
/* 				method: data.method,*/
/* 				data: data.data,*/
/* 				success: function(res) {*/
/* 					if(status == 1) {*/
/* 						ykp.prompt('驳回成功!');*/
/* 					} else if(status == 0) {*/
/* 						ykp.prompt('撤销成功!');*/
/* 					} else {*/
/* 						ykp.prompt('审批成功!');*/
/* 					}*/
/* 					getDatalist();*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//填写更多*/
/* 		function writeMore() {*/
/* 			$('#templateCon .more').click(function() {*/
/*                 console.log(11);*/
/*                 var num = 0;*/
/*                 console.log($(this).parent().siblings('div:hidden').length);*/
/*                 if($(this).parent().siblings('div:hidden').length == 1) {*/
/* 					$(this).parent().hide();*/
/* 				}*/
/* 				if($(this).parent().siblings('div:hidden').length > 0) {*/
/* 					$(this).parent().siblings('div:hidden').eq(0).show();*/
/* 					if(num == 1) {*/
/* 						cs.upload1({*/
/* 							el: "#templateBox #upload",*/
/* 							ael: "#templateBox #fileBox",*/
/* 							tab: true*/
/* 						})*/
/* 					}*/
/* 					num++;*/
/* */
/* 				}*/
/*                 $("#temHeader").width($("#showBox").width()-47);*/
/* 			});*/
/* 		}*/
/* */
/* 		//弹出层部分选项填充信息*/
/* 		function fillInfo(id) {*/
/* 			//业务员*/
/* 			for(var i in employees) {*/
/* 				if(employees[i]) {*/
/* 					$('#templateCon .state').append(new Option(employees[i], i));*/
/* 				}*/
/* 			}*/
/* 			*/
/* 			//企业名称*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_customer/f7',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					select: 'khm_customer.name,khm_customer.id,khm_customer.area,khm_customer.tax_type'*/
/* 				},*/
/* 				async:false,*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					for(var i in data) {*/
/* 						$('#templateCon [field="customer_id"]').append($(new Option(data[i]['name'], data[i]['id'])).attr('area', data[i]['area']));*/
/* 						custom[data[i]['id']] = data[i]['tax_type'];*/
/* 					}*/
/* 					if(id){*/
/* 						if(custom[id] == 2){*/
/* 							$('#templateCon .is_tax').hide();*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 			});*/
/* */
/* 			//服务产品*/
/* 			for(var i in service_product) {*/
/* 				if(service_product[i]['type'] == 0) {*/
/* 					$('#templateCon .long').append($(new Option(service_product[i]['name'], parseInt(service_product[i]['id']))).data('price', parseInt(service_product[i]['price'])));*/
/* 				}*/
/* 				if(service_product[i]['type'] != 0) {*/
/* 					$('#templateCon .short').append($(new Option(service_product[i]['name'], parseInt(service_product[i]['id']))).data('price', parseInt(service_product[i]['price'])));*/
/* 				}*/
/* 			}*/
/* 			*/
/* 			*/
/* 			$('#templateCon .customer').trigger('change').select2({*/
/* 				allowClear: true*/
/* 			});*/
/* 			//选择公司展示对应仓位*/
/* 			// $('#templateCon select[field="customer_id"]').change(function(){*/
/* */
/* 			// });*/
/* 		}*/
/* */
/* 		//切换服务产品，标准价改变*/
/* 		function changePrice() {*/
/* 			//长期合同切换产品，数量变为1，赠送为空，折后价为空,折后总额为空，账本费为空，合同总额为空*/
/* 			$('#templateCon .long').unbind('change').change(function() {*/
/* 				//$(this).find('option:checked').data('price') 产品相应的标准价*/
/* 				$(this).parents('.contractType').find('[field="pricing"]').val($(this).find('option:checked').data('price'));*/
/* 				$(this).parents('.contractType').find('[field="count"]').val('12');*/
/* 				$(this).parents('.contractType').find('[field="count_send"]').val('');*/
/* 				$(this).parents('.contractType').find('[field="discount"]').val('');*/
/* 				$(this).parents('.contractType').find('[field="discount_total"]').val('');*/
/* 				$(this).parents('.contractType').find('[field="account_book"]').val('');*/
/* 				$(this).parents('.contractType').find('[contract-total]').val('');*/
/* 			})*/
/* 			//一次性合同切换产品，数量变为1，折后价为空,折后总额减去切换前的数量乘以折后价*/
/* 			$('#templateCon .short').unbind('change').change(function() {*/
/* 				//$(this).find('option:checked').data('price') 产品相应的标准价*/
/* 				$(this).parents('tr').find('[syllable="pricing"]').val($(this).find('option:checked').data('price'));*/
/* */
/* 				//折后总额*/
/* 				var discount_total = $(this).parents('.contractType').find('[field="discount_total"]').val();*/
/* 				//切换前的数量乘以折后价  product:乘积*/
/* 				var product = $(this).parents('tr').find('[syllable="count"]').val() * $(this).parents('tr').find('[syllable="discount"]').val();*/
/* 				//折后总额减去切换前的数量乘以折后价*/
/* 				$(this).parents('.contractType').find('[field="discount_total"]').val(eval(discount_total + '-' + product) || "");*/
/* 				//数量变为1*/
/* 				$(this).parents('tr').find('[syllable="count"]').val(1);*/
/* 				//折后价为空*/
/* 				$(this).parents('tr').find('[syllable="discount"]').val('');*/
/* */
/* 			})*/
/* 		}*/
/* */
/* 		//计算折后总额*/
/* 		function calculateTotal() {*/
/* 			//计算长期合同的折后总额*/
/* 			$('#templateCon .contractType').eq(0).unbind('blur').on('blur', '[field="count"],[field="discount"],[account-book]', function() {*/
/* 				var it = $(this);*/
/* 				var num = it.parents('.contractType').find('[field="count"]').val();*/
/* 				var discount = it.parents('.contractType').find('[field="discount"]').val();*/
/* */
/* 				var account_book = $('#templateCon input[account-book]').val().trim() ? parseInt($('#templateCon input[account-book]').val()) : 0;*/
/* 				it.parents('.contractType').find('input[field="discount_total"]').val(num * discount);*/
/* 				it.parents('.contractType').find('input[contract-total]').val((num * discount + account_book));*/
/* 			});*/
/* */
/* 			//计算一次性合同的折后总额*/
/* 			//数量或者折后价失去焦点动态计算*/
/* 			$('#templateCon .contract_content').unbind('blur').on('blur', '[syllable="count"],[syllable="pricing"]', function() {*/
/*                 console.log(11);*/
/*                 //折后总价*/
/* 				var discount_total = 0;*/
/* 				//将每一个tr中的数量与折后价的乘积相加*/
/* 				$('#templateCon .contract_content tbody tr').each(function(i, e) {*/
/* 					discount_total += $(this).find('[syllable="count"]').val() * $(this).find('[syllable="pricing"]').val();*/
/* 				});*/
/* */
/* 				//将计算后的折后总价填入输入框*/
/* 				$(this).parents('.contractType').find('[field="discount_total"]').val(discount_total);*/
/* 			});*/
/* 		}*/
/* */
/* 		//结束时间*/
/* 		function endtime(index) {*/
/* 			if(index == 0) {*/
/* 				$('#templateCon [field="count"],#templateCon [field="count_send"],#templateCon [field="start_time"]').unbind('blur').blur(function() {*/
/* 					var it = $(this);*/
/* 					var num = $('#templateCon [field="count"]').val();*/
/* 					var send_num = $('#templateCon [field="count_send"]').val() ? $('#templateCon [field="count_send"]').val() : '0';*/
/* 					var start_time = $('#templateCon [field="start_time"]').val();*/
/* 					if(start_time && num) {*/
/* 						var date = new Date(start_time);*/
/* 						var number = eval(num + '+' + send_num);*/
/* 						date = addMonth(date, number);*/
/* 						var edate = new Date(date.getTime() - 24 * 60 * 60 * 1000);*/
/* 						it.parents('.contractType').find('[field="end_time"]').val(edate.toLocaleDateString().replace(/\//g, '-'));*/
/* 					}*/
/* 				});*/
/* 			}*/
/* 		}*/
/* */
/* 		//添加 | 编辑合同验证*/
/* 		function validate() {*/
/* 			var flag = true;*/
/* 			if((parseInt($('#templateCon [field="count"]').val()) + parseInt($('#templateCon [field="count_send"]').val())) < parseInt($('#templateCon [field="payment_cycle"]').val())) {*/
/* 				ykp.prompt('数量不能小于维护周期');*/
/* 				flag = false;*/
/* 			}*/
/* 			if((parseInt($('#templateCon [field="count"]').val()) + parseInt($('#templateCon [field="count_send"]').val())) < parseInt($('#templateCon [field="htm_contract.payment_cycle"]').val())) {*/
/* 				ykp.prompt('数量不能小于维护周期');*/
/* 				flag = false;*/
/* 			}*/
/* */
/* 			var start_time;*/
/* 			var end_time;*/
/* 			$('#templateCon .contract_content tbody tr').each(function(i, e) {*/
/* 				start_time = new Date($(this).find('[syllable="start_time"]').val()).getTime();*/
/* 				end_time = new Date($(this).find('[syllable="end_time"]').val()).getTime();*/
/* 				if(start_time > end_time) {*/
/* 					ykp.prompt('开始时间不能大于结束时间！');*/
/* 					flag = false;*/
/* 					return false;*/
/* 				}*/
/* 			});*/
/* */
/* 			return flag;*/
/* 		}*/
/* */
/* 		//获取合同书*/
/* 		function getContractBooks(type, contract_num) {*/
/* 			*/
/* 			var data = ykp.doAjax({*/
/* 				url: '/api/api_contract_book/f8',*/
/* 				method: 'post',*/
/* 				async: false,*/
/* 				data: {*/
/* 					type: type*/
/* 				},*/
/* 				success: function(res) {*/
/* 					data = res.data;*/
/* */
/* 					var contract = $('#templateCon [field="contract_num"]').eq(type - 1);*/
/* */
/* 					if(data.length == 0) {*/
/* 						contract.html('<option value="">暂无可用的合同号</option>');*/
/* 						return;*/
/* 					}*/
/* 					var contractBook_html = [];*/
/* 					if(contract_num) {*/
/* 						contractBook_html.push('<option value="' + contract_num + '">' + contract_num + '</option>');*/
/* 					}*/
/* 					for(var i in data) {*/
/* 						contractBook_html.push('<option value="' + data[i]['code'] + '">' + data[i]['code'] + '</option>');*/
/* 					}*/
/* 					contract.append(contractBook_html.join(''));*/
/* */
/* 					contract.select2({*/
/* 							allowClear: true*/
/* 					});*/
/* 					*/
/* 					if(contract_num) {*/
/* 						contract.val(contract_num).trigger('change');*/
/* 					}*/
/* 					*/
/* 				}*/
/* 			})*/
/* 			return data.data;*/
/* 		}*/
/* */
/* 		//-同一公司的长期合同 仓位默认沿用之前的 */
/* 		function defaultPosition() {*/
/* 			$('#templateCon [field="customer_id"]').eq(0).unbind('change').change(function() {*/
/* 				var it = $(this);*/
/* 				var customer_id = $(this).val();*/
/* 				var pos_id = '';*/
/* 				if(customer_id) {*/
/* 					ykp.doAjax({*/
/* 						async: false,*/
/* 						url: '/api/api_customer/get_customer_pos',*/
/* 						method: 'post',*/
/* 						data: {*/
/* 							customer_id: customer_id*/
/* 						},*/
/* 						success: function(res) {*/
/* 							if(res.data.pos) {*/
/* 								pos_id = res.data.pos.pos_id;*/
/* 							}*/
/* 						}*/
/* 					});*/
/* 				}*/
/* */
/* 				var area = $(this).find('option:selected').attr('area');*/
/* */
/* 				it.parents('.contractType').find('select[field="pos_id"]').find('option').not(':first').remove();*/
/* */
/* 				if(!area) {*/
/* 					return;*/
/* 				}*/
/* 				area = area.split(',');*/
/* 				ykp.doAjax({*/
/* 					async: false,*/
/* 					url: '/api/api_accountancies/get_position',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						type: 2,*/
/* 						name: area[1]*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						if(data.length > 0) {*/
/* 							for(var i in data) {*/
/* 								it.parents('.contractType').find('select[field="pos_id"]').append(new Option(data[i]['name'], data[i]['id']));*/
/* 							}*/
/* 							if(pos_id) {*/
/* 								it.parents('.contractType').find('select[field="pos_id"]').val(pos_id);*/
/* 							}*/
/* 						}*/
/* */
/* 						if(data.length == 0) {*/
/* 							ykp.doAjax({*/
/* 								async: false,*/
/* 								url: '/api/api_accountancies/get_position',*/
/* 								method: 'post',*/
/* 								data: {*/
/* 									type: 1,*/
/* 									name: area[0]*/
/* 								},*/
/* 								success: function(res) {*/
/* 									if(data.length > 0) {*/
/* 										for(var i in data) {*/
/* 											it.parents('.contractType').find('select[field="pos_id"]').append(new Option(data[i]['name'], data[i]['id']));*/
/* 										}*/
/* 										if(pos_id) {*/
/* 											it.parents('.contractType').find('select[field="pos_id"]').val(pos_id);*/
/* 										}*/
/* 									}*/
/* 									if(data.length == 0) {*/
/* 										ykp.prompt('请添加仓位信息');*/
/* 									}*/
/* 								}*/
/* 							});*/
/* 						}*/
/* 					}*/
/* 				});*/
/* 			});*/
/* 		}*/
/* 		var customer_type = {};*/
/* */
/* 		function addType() {*/
/* 			$('#templateCon #addTypeBtn').click(function() {*/
/* 				$('#addtype').show();*/
/* 				saveType();*/
/* 			})*/
/* 			$('.close_label').click(function() {*/
/* 				$('#addtype').hide();*/
/* 			})*/
/* 		}*/
/* */
/* 		function saveType() {*/
/* 			$('.submitType').unbind().click(function() {*/
/* 				var typename = $('#typename').val();*/
/* 				if(typename.trim() == '') {*/
/* 					ykp.prompt('添加类型不能为空！');*/
/* 					return;*/
/* 				}*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_customer_type/add',*/
/* 					data: {*/
/* 						name: typename*/
/* 					},*/
/* 					method: 'post',*/
/* 					success: function(res) {*/
/* 						ykp.prompt('添加成功！ ');*/
/* 						$('#addtype').hide();*/
/* 						getType();*/
/* 					}*/
/* 				})*/
/* 			})*/
/* 		}*/
/* */
/* 		getType();*/
/* 		//获取所有公海类型*/
/* 		function getType(type) {*/
/* 			ykp.doAjax({*/
/* 				async: false,*/
/* 				url: '/api/api_customer_type/f7',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					select: 'khm_customer_type.id,khm_customer_type.name'*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					$('#templateCon .cusType').html('');*/
/* 					var option = '<option value="">  请选择公海类型  </option>';*/
/* 					customer_type['0'] = '无';*/
/* 					for(var i = data.length - 1; i >= 0; i--) {*/
/* 						customer_type[data[i]['id']] = data[i]['name'];*/
/* 						option += `<option value="${data[i]['id']}">${data[i]['name']}</option>`;*/
/* 					}*/
/* 					$('#heightsearch1 ').find('#ktype').append(option);*/
/* 					$('#heightsearch1 ').find('#ktype').select2({*/
/* 						allowClear: true*/
/* 					});*/
/* 					$('#templateCon .cusType').select2({*/
/* 						allowClear: true*/
/* 					});*/
/* 					$('#templateCon .cusType').html(option);*/
/* 					$('#templateCon .cusType').val(type).trigger('change');*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//选择弹出层客户来源中转介绍时，显示介绍人，*/
/* 		//选择其他时，隐藏介绍人*/
/* 		function showIntroducer() {*/
/* 			$('#templateCon .source').change(function() {*/
/* 				if($(this).find('option:selected').index() == 1) {*/
/* 					$('#templateCon .introducer').show();*/
/* 				} else {*/
/* 					$('#templateCon .introducer').hide();*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		function addCustom() {*/
/* 			//添加客户*/
/* 			$('#templateCon #addItem1').click(function() {*/
/* 				showMark('#template');*/
/* 				$('#showBox .title').text('添加客户');*/
/* 				addType();*/
/* 				getType();*/
/* 				$("#templateCon #city").citySelect({*/
/* 					url: "/resource/adimin/assets/js/src/city.min.js",*/
/* 					prov: '广东', //省份 */
/* 					city: '深圳',*/
/* 					nodata: "none" //当子集无数据时，隐藏select  */
/* 				});*/
/* 				showIntroducer();*/
/* */
/* 				//成立日期*/
/* 				cs.timeplug();*/
/* */
/* 				$('#templateCon .add').click(function() {*/
/* 					var prov = $('#templateBox .prov').val() || '';*/
/* 					var city = $('#templateBox .city').val() || '';*/
/* 					var dist = $('#templateBox .dist').val() || '';*/
/* 					var area = prov + "," + city;*/
/* 					if(dist != '') {*/
/* 						area += ("," + dist);*/
/* 					}*/
/* 					/*if($('#templateCon').find('[addfield="phone"]').val().trim().length != 11) {*/
/* 						ykp.prompt('手机号码错误');*/
/* 						$('#templateCon').find('[addfield="phone"]').val('');*/
/* 						return;*/
/* 					}*//* */
/* 					if(!cs.popValidate()) {*/
/* 						return;*/
/* 					}*/
/* */
/* 					var inputOrSelectOrTextarea = $('#templateCon').find('input,select,textarea');*/
/* 					var time = inputOrSelectOrTextarea.eq(3).val().replace(/年|月|日/g, '-');*/
/* 					var data = {*/
/* 						name: $('#templateCon').find('[addfield="name"]').val(),*/
/* 						corporation: $('#templateCon').find('[addfield="corporation"]').val(),*/
/* 						capital: $('#templateCon').find('[addfield="capital"]').val(),*/
/* 						stablish_time: time ? new Date(time) / 1000 :'',*/
/* 						address: $('#templateCon').find('[addfield="address"]').val(),*/
/* 						tel: $('#templateCon').find('[addfield="tel"]').val(),*/
/* 						range: $('#templateCon').find('[addfield="range"]').val(),*/
/* 						url: $('#templateCon').find('[addfield="url"]').val(),*/
/* 						phone: $('#templateCon').find('[addfield="phone"]').val(),*/
/* 						fax: $('#templateCon').find('[addfield="fax"]').val(),*/
/* 						email: $('#templateCon').find('[addfield="email"]').val(),*/
/* 						source: $('#templateCon').find('[addfield="source"]').val(),*/
/* 						introduce: $('#templateCon').find('[addfield="source"]').selectedIndex == 0 ? '' : $('#templateCon').find('[addfield="introduce"]').val(),*/
/* 						industry: $('#templateCon').find('[addfield="industry"]').val(),*/
/* 						scale: $('#templateCon').find('[addfield="scale"]').val(),*/
/* 						contacts: $('#templateCon').find('[addfield="contacts"]').val(),*/
/* 						type: $('#templateCon').find('[addfield="type"]').val(),*/
/* 						remark: $('#templateCon').find('[addfield="remark"]').val(),*/
/* 						area: area*/
/* 					}*/
/* 					var parent = $(this).parents('#showBox');*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_customer/add',*/
/* 						method: 'post',*/
/* 						data: data,*/
/* 						success: function() {*/
/* 							//						cs.close();*/
/* 							parent.addClass('ishide');*/
/* 							$('#addItem').trigger('click');*/
/* 						}*/
/* 					});*/
/* 				});*/
/* 			});*/
/* 		}*/
/* */
/* 		//税务类型对发票认证的改变*/
/* 		function taxchange(){*/
/* 			$('#templateCon #tax_type').change(function(){*/
/* 				if ($(this).val()=='1') {*/
/* 					$('#templateCon #is_tax').show().prev().show();*/
/* 				}else{*/
/* 					$('#templateCon #is_tax').hide().prev().hide();*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* */
/* */
/* */
/* 		//添加事件绑定*/
/* 		addRecord();*/
/* */
/* 		function addRecord() {*/
/* 			$('#addItem').click(function() {*/
/* 				showMark('#template1');*/
/* 				addCustom();*/
/* 				$('#showBox .title').text('添加合同');*/
/* 				$('#templateCon .state').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* 				*/
/* 				$('#templateCon .customer').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* 				//-同一公司的长期合同 仓位默认沿用之前的*/
/* 				// var pos_id = defaultPosition();*/
/* */
/* 				//发票认证的变化*/
/* 				taxchange();*/
/* */
/* 				//点击 + 添加一行记录*/
/* 				oprationService();*/
/* */
/* 				//时间插件*/
/* 				cs.timeplug();*/
/* */
/* 				//填写等多*/
/* 				writeMore();*/
/* */
/* 				//填充信息*/
/* 				fillInfo();*/
/* */
/* 				//切换服务产品，标准价改变*/
/* 				changePrice();*/
/* */
/* 				//计算折后总额*/
/* 				calculateTotal();*/
/* */
/* 				//计算结束时间*/
/* 				endtime(0);*/
/* */
/* 				//合同类型切换*/
/* 				contractTypeChange();*/
/* */
/*                 //上传图片*/
/*                 uploadImg();*/
/* */
/*                 //上传文件*/
/*                 uploadFile();*/
/* */
/* */
/* 				//获取可用的合同号*/
/* 				getContractBooks(1);*/
/* 				getContractBooks(2);*/
/* */
/* 				$('#templateCon .add').click(function() {*/
/*                     // if($('#templateCon .contractType').eq(0).css('display') != 'none'){*/
/* 					if(!validate()) {*/
/* 						return;*/
/* 					}*/
/* 					// }*/
/* 					var postdata = {};*/
/* 					var index = $('#templateCon .acti').index();*/
/* 					var url = index == 0 ? '/api/api_contract/contract_long_add' : '/api/api_contract/contract_one_add';*/
/* */
/* 					$('#templateCon .contractType').eq(index).find('[field]').each(function() {*/
/* 						if($(this).attr('field') == 'start_time' || $(this).attr('field') == 'signed_time' || $(this).attr('field') == 'end_time') {*/
/* 							postdata[$(this).attr('field')] = new Date($(this).val()) / 1000;*/
/* 							return true;*/
/* 						}*/
/* */
/* 						if($(this).attr('field') == 'is_tax'&&!$(this).is(':hidden')){*/
/* 							postdata[$(this).attr('field')] = $(this).val();*/
/* 						}*/
/* */
/* 						postdata[$(this).attr('field')] = $(this).val();*/
/* 					});*/
/* */
/* 					//业务员*/
/* 					var data = $('#templateCon .contractType').eq(index).find('.state').select2('data');*/
/* 					var salesman = [];*/
/* 					if(data.length == 0) {*/
/* 						ykp.prompt('请选择业务员');*/
/* 						return false;*/
/* 					} else {*/
/* 						for(var i in data) {*/
/* 							salesman.push(data[i]['id']);*/
/* 						}*/
/* 					}*/
/* */
/* 					postdata['market'] = JSON.stringify(salesman);*/
/* */
/*                     //图片和文件*/
/*                     var images = [];*/
/*                     var files = [];*/
/*                     $('#templateCon .contractType').eq(index).find('._decrease.uploadImage').each(function(i, e) {*/
/*                         images.push($(this).data('img'));*/
/*                     });*/
/*                     $('#templateCon .contractType').eq(index).find('._decrease.uploadFile').each(function(i, e) {*/
/*                         files.push($(this).data('file'));*/
/*                     });*/
/* */
/* 					postdata['image'] = images.join(',');*/
/* 					postdata['files'] = JSON.stringify(files);*/
/*                     //return false;*/
/* 					var status = false;*/
/* 					//服务信息*/
/* 					if(index == 1) {*/
/* 						*/
/* 						var service_info = [];*/
/* 						$('#templateCon .contract_content tbody tr').each(function(i, e) {*/
/* 							if((new Date($(this).find('[syllable="start_time"]').val()) / 1000) > (new Date($(this).find('[syllable="end_time"]').val()) / 1000)) {*/
/* 								ykp.prompt('结束时间应大于开始时间');*/
/* 								status = false;*/
/* 								return false;*/
/* 							}else {*/
/* 								service_info.push({*/
/* 									'customer_id': postdata['customer_id'],*/
/* 									'product_id': $(this).find('.short').val(),*/
/* 									'start_time': new Date($(this).find('[syllable="start_time"]').val()) / 1000,*/
/* 									'end_time': new Date($(this).find('[syllable="end_time"]').val()) / 1000,*/
/* 									'pricing': $(this).find('[syllable="pricing"]').val(),*/
/* 									'count': $(this).find('[syllable="count"]').val(),*/
/* 									'discount': $(this).find('[syllable="discount"]').val()*/
/* 								});*/
/* 								status = true;*/
/* 							}*/
/* 							*/
/* 						});*/
/* 						postdata['task_json'] = JSON.stringify(service_info);*/
/* 					}else {*/
/* 						status = true;*/
/* 					}*/
/* 					if(postdata['customer_id'] == ""){*/
/* 						ykp.prompt('请选择企业！');*/
/* 						return;*/
/* 					}else if(!postdata['signed_time']){*/
/* 						ykp.prompt('请选择签约时间！');*/
/* 						return;*/
/* 					}else if(postdata['payment_cycle'] == ""){*/
/* 						ykp.prompt('请选择维护时间！');*/
/* 						return;*/
/* 					}else if(postdata['get_cycle'] == ""){*/
/* 						ykp.prompt('请选择收款周期！');*/
/* 						return;*/
/* 					}else if(postdata['discount'] == ""){*/
/* 						ykp.prompt('服务单价！');*/
/* 						return;*/
/* 					}else if(postdata['account_book'] == ""){*/
/* 						ykp.prompt('账本费！');*/
/* 						return;*/
/* 					}*/
/* 					if(status) {*/
/* 						if(index == 0) {*/
/* 							if(new Date(postdata['start_time'] * 1000).getDate() != 1) {*/
/* 								ykp.prompt('开始时间请选择每月1号！');*/
/* 								return;*/
/* 							}*/
/* 						}*/
/* 	*/
/* 						var fileBox = $('#templateCon .contractType').eq(index).find("#fileBox");*/
/* 						var files = [];*/
/* 						if(fileBox.children().length > 0) {*/
/* 							$('#templateCon .contractType').eq(index).find("#fileBox").find('a').each(function(i) {*/
/* 								files.push({*/
/* 									name: $(this).text(),*/
/* 									url: $(this).attr('data-url')*/
/* 								})*/
/* 							})*/
/*                             postdata.files = JSON.stringify(files);*/
/*                         }*/
/*                         ykp.doAjax({*/
/*                             url: url,*/
/*                             method: 'post',*/
/*                             data: postdata,*/
/*                             success: function(res) {*/
/*                                 cs.close();*/
/*                                 getDatalist();*/
/*                             }*/
/*                         });*/
/* 					}*/
/* 				})*/
/* 			})*/
/* 		}*/
/* */
/*         //上传图片*/
/*         function uploadImg() {*/
/*             $('#templateCon .uploadImage').unbind('change').change(function() {*/
/*                 var it = $(this);*/
/*                 var file = it[0].files[0];*/
/*                 var postdata = {};*/
/*                 var fr = new FileReader();*/
/* */
/*                 if(!file) {*/
/*                     return;*/
/*                 }*/
/* */
/*                 if(!/image\/\w+/.test(file.type)) {*/
/*                     ykp.prompt("请确保文件为图像类型");*/
/*                     return;*/
/*                 }*/
/* */
/*                 if(file.size > cs.file_length) {*/
/*                     ykp.prompt('图片大小不能超过5M');*/
/*                     return;*/
/*                 }*/
/* */
/*                 fr.readAsDataURL(file);*/
/*                 fr.onloadend = function(e) {*/
/*                     var imgdata = e.target.result;*/
/*                     postdata['base64'] = imgdata.substring(imgdata.indexOf(',') + 1);*/
/*                     postdata['dir'] = 'bob';*/
/*                     postdata['name'] = file.name;*/
/* */
/*                     ykp.doAjax({*/
/*                         url: '/api/api_common/upload_img',*/
/*                         method: 'post',*/
/*                         data: postdata,*/
/*                         success: function(res) {*/
/*                             if(it.hasClass('_decrease')) {*/
/*                                 it.prev().attr('src', res.data.url);*/
/*                                 it.data('img', {*/
/*                                     'url': res.data.url,*/
/*                                     'name': file.name*/
/*                                 });*/
/*                                 return;*/
/*                             }*/
/* */
/*                             //图片有6张就不再添加*/
/*                             if(it.parent().siblings().length == 5) {*/
/*                                 it.parent().hide();*/
/*                             }*/
/* */
/*                             var img_input = $(`<label>*/
/*                                                 <img style="width:68px;height:68px;margin-right:5px;" src="${res.data.url}">*/
/*                                                 <input type="file" class="uploadImage _decrease" style="position: absolute;opacity: 0;left:-9999px;">*/
/*                                             </label>`);*/
/* */
/*                             img_input.find('._decrease').data('img', {*/
/*                                 'url': res.data.url,*/
/*                                 'name': file.name*/
/*                             });*/
/*                             it.parent().before(img_input);*/
/*                             uploadImg();*/
/*                         }*/
/*                     });*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         //上传文件*/
/*         function uploadFile() {*/
/*             $('#templateCon .uploadFile').unbind('change').change(function() {*/
/*                 var it = $(this);*/
/*                 var file = this.files[0];*/
/*                 if(!file) {*/
/*                     return;*/
/*                 }*/
/*                 if(file.size > cs.file_length) {*/
/*                     ykp.prompt('文件大小不能超过5M');*/
/*                     return;*/
/*                 }*/
/*                 var postfix = file.name.substring(file.name.lastIndexOf('.') + 1);*/
/*                 //				if(postfix != 'pdf' && postfix != 'rar' && postfix != 'zip') {*/
/*                 //					ykp.prompt('文件格式不正确');*/
/*                 //					return;*/
/*                 //				}*/
/*                 var fd = new FormData();*/
/*                 fd.append('file', file);*/
/*                 fd.append('dir', 'files');*/
/*                 $.ajax({*/
/*                     url: ykp.api_url + "/api/api_common/upload_file",*/
/*                     type: "post",*/
/*                     dataType: 'json',*/
/*                     data: fd,*/
/*                     cache: false,*/
/*                     contentType: false,*/
/*                     processData: false,*/
/*                     success: function(res) {*/
/*                         if(it.hasClass('_decrease')) {*/
/*                             it.prev().text(file.name);*/
/*                             it.data('file', {*/
/*                                 'url': res.data,*/
/*                                 'name': file.name*/
/*                             });*/
/*                             return;*/
/*                         }*/
/* */
/*                         //文件有6份，就不再添加*/
/*                         if(it.parent().siblings().length == 5) {*/
/*                             it.parent().hide();*/
/*                         }*/
/* */
/*                         //<input type="file" class="uploadFile _decrease" style="opacity:0;position:absolute;left:-9999px;">*/
/*                         //						var file_input = $(`<label class="btn btn-info btn-sm" style="margin-right:5px;margin-bottom:5px;">*/
/*                         //                                              <span>${file.name}</span>*/
/*                         //                                          </label>`);*/
/*                         var file_input = $('<p style="padding-left: 2px;"><a data-url="' + res.data + '"    target= _blank >' + file.name + '</a><i style="color: red; margin-left: 20px;cursor: pointer;" class="ace-icon fa fa-trash-o gdel gdel2"></i></p>');*/
/*                         file_input.find('._decrease').data('file', {*/
/*                             'url': res.data,*/
/*                             'name': file.name*/
/*                         });*/
/*                         it.parent().before(file_input);*/
/* */
/*                         $("#templateBox #fileBox").find('a').click(function() {*/
/*                             var name = $(this).text();*/
/*                             var url = $(this).attr('data-url');*/
/*                             window.open(ykp.api_url+"/api/api_common/update_file_name?file_url="+url+"&name="+name)*/
/*                         })*/
/*                         //删除文件*/
/*                         $('.gdel2').click(function() {*/
/*                             $(this).parent().remove();*/
/*                         })*/
/*                         uploadFile();*/
/*                     },*/
/*                     error: function() {*/
/*                         ykp.prompt("上传出错了...");*/
/*                     }*/
/*                 });*/
/*             });*/
/*         }*/
/* */
/*         //详情+编辑事件绑定*/
/* 		function operationRecord() {*/
/* 			//查看详情*/
/* 			$('.contractDetail').unbind('click').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				var type = $(this).parents('tr').attr('data-type') - 1;*/
/* 				showMark('#template2');*/
/* 				$('#showBox .title').text('订单详情');*/
/* */
/* 				$('#templateCon .contractType').eq(type).show();*/
/*                 $("#temHeader").width($("#showBox").width()-47);*/
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
/* 			})*/
/* */
/* 			//编辑*/
/* 			$('.editContract').unbind('click').click(function() {*/
/*               */
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				var type = $(this).parents('tr').attr('data-type') - 1; //type 为1一次性合同，type为0长期合同*/
/* 				// console.log(type);*/
/* 				var url = type == 0 ? '/api/api_contract/contract_long_edit' : '/api/api_contract/contract_one_edit';*/
/* 				showMark('#template4');*/
/* 				$('#showBox .title').text('合同编辑');*/
/* 				$('#templateCon .contractType').eq(type).show();*/
/* 				taxchange();//发票认证变化*/
/* */
/* 				$('#templateCon .state').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* 				*/
/* 				$('#templateCon .customer').prop('disabled',true);*/
/* 				if($(this).attr('spstatu') != '2') {*/
/* 					$('#templateCon .long_contract').show();*/
/* 					$('#templateCon .one_contract').show();*/
/* 					setTimeout(function(){*/
/* 						cs.timeplug();*/
/* 					},1000)*/
/* 				}*/
/*                 $("#temHeader").width($("#showBox").width()-47);*/
/* 				fillInfo(id);*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_contract/contract_info',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						id: id*/
/* 					},*/
/* 					success: function(res) {*/
/* */
/* 						type == 0 ? getContractBooks(1, res.data['htm_contract.contract_num']) : getContractBooks(2, res.data['htm_contract.contract_num']);*/
/* 							*/
/* 						addEditDetailData(res, type);*/
/* 						$('#templateCon .add').click(function() {*/
/* 							// if($('#templateCon .contractType').eq(0).css('display') != 'none'){*/
/* 							if(!validate()) {*/
/* 								return;*/
/* 							}*/
/* 							// }*/
/* 							var postdata = {};*/
/* 							var field = '';*/
/* */
/* 							$('#templateCon .contractType').eq(type).find('[field]').each(function() {*/
/* 								field = $(this).attr('field').replace(/htm_contract./, '' );*/
/* 								if(field == 'start_time' || field == 'signed_time' || field == 'end_time') {*/
/* 									postdata[field] = new Date($(this).val()) / 1000;*/
/* 									return true;*/
/* 								}*/
/* 								if(field == 'market_id') {*/
/* 									return true;*/
/* 								}*/
/* */
/* 								if($(this).attr('field') == 'is_tax'&&!$(this).is(':hidden')){*/
/* 									postdata[$(this).attr('field')] = $(this).val();*/
/* 								}*/
/*                                 if(field == 'khm_customer.tax_type'){*/
/*                                     postdata["tax_type"] = $(this).val();*/
/*                                 }*/
/* 								postdata[field] = $(this).val();*/
/* 							});*/
/*                             // console.log($('#templateCon .contractType').eq(type).find('[field="contract_num"]').val());*/
/* 							// return;*/
/* */
/* 							//服务信息*/
/* 							if(type == 1) {*/
/* 								var service_info = [];*/
/* */
/* 								$('#templateCon .contract_content tbody tr').each(function(i, e) {*/
/* 									service_info.push({*/
/* 										'customer_id': postdata['customer_id'],*/
/* 										'product_id': $(this).find('.short').val(),*/
/* 										'start_time': new Date($(this).find('[syllable="start_time"]').val()) / 1000,*/
/* 										'end_time': new Date($(this).find('[syllable="end_time"]').val()) / 1000,*/
/* 										'pricing': $(this).find('[syllable="pricing"]').val(),*/
/* 										'count': $(this).find('[syllable="count"]').val(),*/
/* 										'discount': $(this).find('[syllable="discount"]').val()*/
/* 									});*/
/* 								});*/
/* 								postdata['task_json'] = JSON.stringify(service_info);*/
/* 							}*/
/* */
/* 							if(type == 0) {*/
/* 								if(new Date(postdata['start_time'] * 1000).getDate() != 1) {*/
/* 									ykp.prompt('开始时间请选择每月1号！');*/
/* 									return;*/
/* 								}*/
/* 							}*/
/* */
/* 							//业务员*/
/* 							var data = $('#templateCon .contractType').eq(type).find('.state').select2('data');*/
/* 							var salesman = [];*/
/* 							if(data.length == 0) {*/
/* 								ykp.prompt('请选择业务员');*/
/* 								return false;*/
/* 							} else {*/
/* 								for(var i in data) {*/
/* 									salesman.push(data[i]['id']);*/
/* 								}*/
/* 							}*/
/* 							postdata['market'] = JSON.stringify(salesman);*/
/* 							postdata['id'] = id;*/
/*                             //图片和文件*/
/*                             var images = [];*/
/*                             var files = [];*/
/*                             $('#templateCon').find('._decrease.uploadImage').each(function(i, e) {*/
/*                                 images.push($(this).data('img'));*/
/*                             });*/
/*                             $('#templateCon').find('._decrease.uploadFile').each(function(i, e) {*/
/*                                 files.push($(this).data('file'));*/
/*                             });*/
/*                             var fileBox = $('#templateCon #fileBox');*/
/*                             var files = [];*/
/*                             if(fileBox.children().length > 0) {*/
/*                                 $('#templateCon #fileBox').find('a').each(function(i) {*/
/*                                     files.push({*/
/*                                         name: $(this).text(),*/
/*                                         url: $(this).attr('data-url')*/
/*                                     })*/
/*                                 })*/
/* */
/*                                 postdata.files = JSON.stringify(files);*/
/*                             }else {*/
/*                             }*/
/* */
/* 							*/
/* 							//							postdata['image'] = JSON.stringify(images);*/
/* 							//							postdata['file'] = JSON.stringify(files);*/
/* 							ykp.doAjax({*/
/* 								url: url,*/
/* 								method: 'post',*/
/* 								data: postdata,*/
/* 								success: function(res) {*/
/* 									cs.close();*/
/* 									getDatalist();*/
/* 								}*/
/* 							});*/
/* 						})*/
/* 					}*/
/* 				});*/
/* 			})*/
/* 		}*/
/* */
/* 		//添加合同编辑详情数据*/
/* 		function addEditDetailData(res, type) {*/
/* 			var data = res.data;*/
/* 			var task = data['task']; //服务产品信息*/
/* 			var image = data['HT_image']; //图片信息*/
/* 			var file = [];*/
/* 			if (data['htm_contract.files']) {*/
/* 				file = JSON.parse(data['htm_contract.files']);//文件信息*/
/* 			}*/
/* */
/* 			//一次性合同*/
/* 			if(type == 1) {*/
/* 				var html = '';*/
/* 				for(var i in task) {*/
/* 					//第一条数据做额外处理*/
/* 					if(i == 0) {*/
/* 						$('#templateCon .service_detail').find('[syllable]').each(function(index, e) {*/
/*                            if($(this).attr('syllable') == 'start_time' || $(this).attr('syllable') == 'end_time') {*/
/* 								$(this).val(cs.getNowTime(task[i][$(this).attr('syllable')]));*/
/* 								return true;*/
/* 							}*/
/* 							$(this).val(task[i][$(this).attr('syllable')]);*/
/* 						});*/
/* 					}*/
/* */
/* 					//两者区别主要在于可操作方式不同*/
/* 					if(i != 0) {*/
/* 						html = $(`<tr>*/
/*                                 <td> <a class="decrease opration" >-</a> </td>*/
/*                                 <td> */
/*                                     <select class="short" syllable="product_id">*/
/*                                         <option>请选择</option>*/
/*                                     </select> */
/*                                 </td>*/
/*                                 <td> */
/*                                     <input type="number" syllable="count" value="1" style="width:60px">*/
/*                                  </td>*/
/*                                 <td> */
/*                                    <input type="number" syllable="pricing" style="width:60px">*/
/*                               </td>*/
/*                                 <td> */
/*                                     <input type="number" syllable="discount" style="width:60px">*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <div class="input-group" style="display: inline-flex; width: 110px;">*/
/*                                         <input class="date-timepicker1 required" msg="开始时间不能为空" syllable="start_time" style="height: 30px; width: 80px;">*/
/*                                         <span class="input-group-addon" style="width:30px;height:30px;">*/
/*                                             <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                         </span>*/
/*                                     </div>*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <div class="input-group" style="display: inline-flex; width: 110px;">*/
/*                                         <input class="date-timepicker1 required" msg="截止时间不能为空" syllable="end_time" style="height: 30px; width: 80px;">*/
/*                                         <span class="input-group-addon" style="width:30px;height:30px;">*/
/*                                             <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                         </span>*/
/*                                     </div>*/
/*                                 </td>*/
/*                             </tr>`);*/
/* */
/* 						//服务产品*/
/* 						for(var k in service_product) {*/
/* 							if(service_product[k]['type'] != 1) {*/
/* 								html.find('.short').append($(new Option(service_product[k]['name'], parseInt(service_product[k]['id']))).data('price', parseInt(service_product[i]['price'])));*/
/* 							}*/
/* 						}*/
/* */
/* 						//选中服务产品及将数量，标准价，折后价，开始日期，结束日期填入输入框  */
/* 						html.find('[syllable]').each(function(index, ele) {*/
/* 							if($(this).attr('syllable') == 'start_time' || $(this).attr('syllable') == 'end_time') {*/
/* 								$(this).val(cs.getNowTime(task[i][$(this).attr('syllable')]));*/
/* 								return true;*/
/* 							}*/
/* 							$(this).val(task[i][$(this).attr('syllable')]);*/
/* 						});*/
/* */
/* 						//将新增行追加进tbody中*/
/* 						$('#templateCon .service_detail').append(html);*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			//长期合同*/
/* 			if(type == 0) {*/
/* 				//编辑长期合同中填入与服务产品相关的数据*/
/* 				$('#templateCon .task').each(function(i, e) {*/
/* 					if($(this).attr('field') == 'start_time' || $(this).attr('field') == 'end_time') {*/
/* 						$(this).val(cs.getNowTime(task[0][$(this).attr('field')]));*/
/* 						return true;*/
/* 					}*/
/* */
/* 					$(this).val(task[0][$(this).attr('field')]);*/
/* 				});*/
/* 			}*/
/* */
/* 			//长期合同 与 一次性合同 相同字段数据填充*/
/* 			$('#templateCon [field]').not('.task').each(function(i, e) {*/
/* 				if($(this).attr('field') == 'customer_id') {*/
/* 					$(this).val(data['khm_customer.id']).trigger('change');*/
/* 					return true;*/
/* 				}*/
/* 				if($(this).attr('field') == 'contract_num') {*/
/* 					return true;*/
/* 				}*/
/* 				if($(this).attr('field') == 'account_book') {*/
/* 					$(this).val(data['htm_contract.account_book']);*/
/* 					return true;*/
/* 				}*/
/* 				if($(this).attr('field') == 'discount_total') {*/
/* 					$(this).val(data['htm_contract.discount_total']);*/
/* 					return true;*/
/* 				}*/
/* 				if($(this).attr('field') == 'htm_contract.signed_time') {*/
/* 					$(this).val(cs.getNowTime(data[$(this).attr('field')]));*/
/* 					return;*/
/* 				}*/
/* 				$(this).val(data[$(this).attr('field')]);*/
/* 			});*/
/* */
/* 			$('#templateCon [contract-total]').val(eval(data['htm_contract.account_book'] + '+' + data['htm_contract.discount_total']).toFixed(2));*/
/* */
/*             //图片*/
/*             if(image.length > 5) {*/
/*                 $('#templateCon .uploadImage').parent().hide();*/
/*             }*/
/*             var _html = '';*/
/*             for(var i in image) {*/
/*                 _html = $(`<label>*/
/*                             <img style="width:68px;height:68px;margin-right:5px;" src="${image[i]['url']}">*/
/*                             <input type="file" class="uploadImage _decrease" style="position: absolute;opacity: 0;left:-9999px;">*/
/*                         </label>`);*/
/* */
/*                 _html.find('._decrease').data('img', {*/
/*                     'id': image[i]['id'],*/
/*                     'url': image[i]['url'],*/
/*                     'name': image[i]['name']*/
/*                 });*/
/*                 $('#templateCon .uploadImage').parent().before(_html);*/
/*             }*/
/* */
/*             _html = [];*/
/*             //文件*/
/*             if(file.length > 5) {*/
/*                 $('#templateCon .uploadFile').parent().hide();*/
/*             }*/
/*             //文件*/
/*             html = [];*/
/*             for(var i in file) {*/
/*                 html.push('<p style="padding-left: 2px;cursor: pointer"><a data-url="'+file[i]['url']+'">'+file[i]['name']+'</a><i style="color: red; margin-left: 20px;cursor: pointer;" class="ace-icon fa fa-trash-o gdel gdel2"></i></p>');*/
/*             }*/
/* //			$('#templateCon #fileBox').html(html.join(''));*/
/*             $('#templateCon .uploadFile').parent().before(html);*/
/*             $('#templateCon #fileBox').find('a').click(function() {*/
/*                 var name = $(this).text();*/
/*                 var url = $(this).attr('data-url');*/
/*                 window.open(ykp.api_url+"/api/api_common/update_file_name?file_url="+url+"&name="+name)*/
/*             })*/
/* */
/* */
/* */
/* */
/* */
/* 			$('.gdel2').click(function() {*/
/* 				var parent =  $(this).parent();*/
/* 				layui.use('layer',function() {*/
/* 					layui.layer.confirm('确认删除此订单？', function(index){*/
/* 				        parent.remove();*/
/* 				        layui.layer.closeAll();*/
/* 				    });*/
/* 				})*/
/* 			})*/
/*             uploadFile();*/
/*             uploadImg();*/
/* 			//业务员*/
/* 			var emps = [];*/
/* 			for(var i in data['market']) {*/
/* 				emps.push(data['market'][i]['employees_id']);*/
/* 			}*/
/* 			$('#templateCon .state').eq(type).val(emps).trigger('change');*/
/* */
/* 			//时间插件*/
/* 			cs.timeplug();*/
/* 			//计算折后总额*/
/* 			calculateTotal();*/
/* 			//计算结束时间*/
/* 			endtime(0);*/
/* 			//切换产品，改变相应数据*/
/* 			changePrice();*/
/* 			//添加一次性合同中，点击 '+' 新增一行，点击 '-' 删掉当前行*/
/* 			oprationService();*/
/* 		}*/
/* */
/* 		//添加详情table表数据*/
/* 		//period 周期，account_book 账本费，product 产品信息，signed_time 签约时间*/
/* 		function generateTable(period, account_book, product, signed_time) {*/
/* 			//产品名称*/
/* 			*/
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
/* 			//${cs.getNowTime(signed_time).substring(0,cs.getNowTime(signed_time).lastIndexOf('-'))}*/
/* 			html.push(*/
/* 				`<tr>*/
/*                     <td class="center">${product_name}(账本费)</td>*/
/*                     <td class="center"></td>*/
/*                     <td class="center">${cs.getNowTime(signed_time)}</td>*/
/*                     <td class="center" style="text-align:right !important">${account_book}</td>*/
/*                 </tr>`*/
/* 			);*/
/* */
/* 			var months = generateMonth(period, product);*/
/* 			var lastTime = "";*/
/* 			for(var i in months) {*/
/* 				if(i == months.length -1){*/
/* 					lastTime = months[i]['date'].lastIndexOf('~') == -1 ? months[i]['date'] + '-01' : months[i]['date'].substring(0,months[i]['date'].lastIndexOf('~')) + '-01';*/
/* 				}*/
/* 				html.push(*/
/* 					`<tr>*/
/*                         <td class="center">${product_name}</td>*/
/*                         <td class="center">${months[i]['date']}</td>*/
/*                         <td class="center">${months[i]['date'].lastIndexOf('~') == -1 ? months[i]['date'] + '-01' : months[i]['date'].substring(0,months[i]['date'].lastIndexOf('~')) + '-01'}</td>*/
/*                         <td class="center" style="text-align:right !important">${(product['discount'] * months[i]['acount']).toFixed(2)}</td>*/
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
/*                             <td class="center">${product_name+'（赠送）'}</td>*/
/*                             <td class="center">${_months[i]['date']}</td>*/
/*                             <td class="center">${lastTime}</td>*/
/*                             <td class="center" style="text-align:right !important">0.00</td>*/
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
/* 			var months = []; //所有服务月份*/
/* 			for(var i = 0; i < times; i++) {*/
/* 				if(i == 0) {*/
/* 					if(i == (times - 1)) {*/
/* 						months.push(formatDate(addMonth(start_time, i * period), addMonth(start_time, product['count'] - 1)));*/
/* 					} else{*/
/* 						months.push(formatDate(addMonth(start_time, i * period), addMonth(start_time, (i + 1) * period - 1)));*/
/* 					}*/
/* 						*/
/* 				}*/
/* 				if(i != (times - 1) && i != 0) {*/
/* 					months.push(formatDate(addMonth(start_time, i * period), addMonth(start_time, (i + 1) * period - 1)));*/
/* 				}*/
/* 				if(i == (times - 1) && i != 0) {*/
/* 					months.push(formatDate(addMonth(start_time, i * period), addMonth(start_time, product['count'] - 1)));*/
/* 				}*/
/* 			}*/
/* 			return months;*/
/* 		}*/
/* */
/* 		//将时间转换为指定格式*/
/* 		function formatDate(date1, date2) {*/
/* 			var data = {};*/
/* 			var date = ykp.formatDate(date1, 'YYYY-MM') + '~' + ykp.formatDate(date2, 'YYYY-MM');*/
/* 			data['date'] = date;*/
/* 			data['acount'] = date2.getFullYear() > date1.getFullYear() ? date2.getMonth() + 13 - date1.getMonth() : date2.getMonth() - date1.getMonth() + 1;*/
/* 			*/
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
/* 		//添加详情数据*/
/* 		function addDetailData(res, type) {*/
/* 			var data = res.data;*/
/* 			var market = data['market']; //业务员*/
/* 			var image = data['HT_image']; //图片*/
/* 			var file = data['htm_contract.files'] ? JSON.parse(data['htm_contract.files']) : []; //文件*/
/* 			var task = data['task']; //服务产品*/
/* 			var cycle = {*/
/* 				'1': '每月',*/
/* 				'3': '季度',*/
/* 				'6': '半年',*/
/* 				'12': '一年'*/
/* 			}; //维护周期*/
/* 			var cycle1 = {*/
/* 				'1': '1个月',*/
/* 				'3': '3个月',*/
/* 				'6': '6个月',*/
/* 				'12': '12个月'*/
/* 			}; //收款周期*/
/* 			var cycle2 = {*/
/* 				'1': '一般纳税人',*/
/* 				'2': '小规模',*/
/* 				*/
/* 			}; */
/* 			var salesman_id = []; //业务员员id*/
/* 			var salesman = []; //业务员*/
/* 			// var payment = ['','现金','支付宝','微信','银行卡'];//收款方式*/
/* 			var field = '';*/
/* */
/* 			$('#templateCon .contractType').eq(type).find('[field]').each(function(i, e) {*/
/* 				if($(this).attr('field') == 'htm_contract.signed_time' || $(this).attr('field') == 'htm_contract.auth_time1' || $(this).attr('field') == 'htm_contract.create_time') {*/
/* 					$(this).text(data[$(this).attr('field')] != '0' ? cs.getNowTime(data[$(this).attr('field')]) : '');*/
/* 					return true;*/
/* 				}*/
/* 				if($(this).attr('field') == 'htm_contract.auth_id1') {*/
/* 					$(this).text(data[$(this).attr('field')] != '0' ? employees[data[$(this).attr('field')]] : '');*/
/* 					return true;*/
/* 				}*/
/* 				if($(this).attr('field') == 'htm_contract.is_source') {*/
/* 					$(this).text(data[$(this).attr('field')] == '1' ? '线上' : '线下');*/
/* 					return true;*/
/* 				}*/
/* 				if($(this).attr('field') == 'htm_contract.is_tax') {*/
/* 					$(this).text(data[$(this).attr('field')] == '0' ? '否' : '是');*/
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
/* 				if($(this).attr('field') == 'htm_contract.get_cycle') {*/
/* 					$(this).text(cycle1[data[$(this).attr('field')]]);*/
/* 					return true;*/
/* 				}*/
/* 				if($(this).attr('field') == 'htm_contract.create_by') {*/
/* 					$(this).text(data['market'][0].info.name);*/
/* 					return true;*/
/* 				}if($(this).attr('field') == 'khm_customer.tax_type') {					*/
/* 					$(this).text(cycle2[data[$(this).attr('field')]]);*/
/* 					if(data[$(this).attr('field')]==2){*/
/* 						$('.bill').hide();*/
/* 						$('.bill').html('');*/
/* 					}else{*/
/* 						$('.bill').show();*/
/* 					}*/
/* 					data[$(this).attr('field')];*/
/* 					return true;*/
/* 				}*/
/* 				$(this).text(data[$(this).attr('field')]);*/
/* 				*/
/* 			});*/
/* 			$('#templateCon [contract-total]').text((parseInt(data['htm_contract.account_book']) + parseInt(data['htm_contract.discount_total'])).toFixed(2));*/
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
/*             //图片*/
/*             var html = [];*/
/*             for(var i in image) {*/
/*                 html.push(*/
/*                     `<img src="${image[i]['url']}" style="width:60px;height:60px;"/>`*/
/*                 );*/
/*             }*/
/*             $('#templateCon [syllable="image"]').html(html.join(''));*/
/* */
/*             //文件*/
/*             html = [];*/
/*             for(var i in file) {*/
/*                 html.push('<p style="padding-left: 2px; cursor: pointer"><a data-url="'+file[i]['url']+'">'+file[i]['name']+'</a></p>');*/
/*             }*/
/*             $('#templateCon [syllable="file"]').html(html.join(''));*/
/*             $('#templateCon [syllable="file"]').find('a').click(function() {*/
/*                 var name = $(this).text();*/
/*                 var url = $(this).attr('data-url');*/
/*                 window.open(ykp.api_url+"/api/api_common/update_file_name?file_url="+url+"&name="+name)*/
/*             })*/
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
/* 						$(this).text(task[0]['productName']);*/
/* 						return true;*/
/* 					}*/
/* 					$(this).text(task[0][$(this).attr('syllable')]);*/
/* 				});*/
/* 			}*/
/* 			// 一次性合同*/
/* 			if(type == 1) {*/
/* 				html = [];*/
/* 				for(var i in task) {*/
/* 					html.push(*/
/* 						`<tr>*/
/*                             <td style="text-align: left">${task[i]['productName']}</td>*/
/*                             <td style="text-align: left">${task[i]['count']}</td>*/
/*                             <td style="text-align: left">${task[i]['pricing']}</td>*/
/*                             <td style="text-align: left">${cs.getNowTime(task[i]['start_time'])}</td>*/
/*                             <td style="text-align: left">${cs.getNowTime(task[i]['end_time'])}</td>*/
/*                             */
/*                         </tr>`*/
/*                         //<td>${cs.getNowTime(task[i]['start_time'])}</td> <td>${cs.getNowTime(task[i]['end_time'])}</td>*/
/* 					);*/
/* 				}*/
/* 				$('#templateCon .contract_content tbody').html(html.join(''));*/
/* 			}*/
/* 		}*/
/* */
/* 		//添加一次性合同中，点击 '+' 新增一行，点击 '-' 删掉当前行*/
/* 		function oprationService() {*/
/* 			$('#templateCon .opration').unbind('click').click(function() {*/
/* 				var html = '';*/
/* 				if($(this).hasClass('increase')) {*/
/* 					if($('#templateCon .contract_content tbody tr').length >= 5) {*/
/* 						ykp.prompt('最多只能添加五条记录！');*/
/* 						return;*/
/* 					}*/
/* 					html =*/
/* 						`<tr>*/
/*                             <td> <a class="decrease opration" >-</a> </td>*/
/*                             <td style="text-align: left">*/
/*                                 <select field="service_items" class="short">*/
/*                                     <option>请选择</option>*/
/*                                 </select> */
/*                             </td>*/
/* */
/*                             <td style="text-align: left">*/
/*                                 <input type="number" syllable="count" value="1" style="width:60px">*/
/*                             </td>*/
/*                             <td style="text-align: left">*/
/*                                 <input type="number" syllable="pricing" style="width:60px">*/
/*                             </td>*/
/*                             <td style="text-align: left">*/
/*                                 <div class="input-group" style="display: inline-flex; width: 110px;">*/
/*                                     <input class="date-timepicker1 required start_time" syllable="start_time" style="height: 30px; width: 80px;">*/
/*                                     <span class="input-group-addon" style="width:30px;height:30px;">*/
/*                                         <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                     </span>*/
/*                                 </div>*/
/*                             </td>*/
/*                             <td style="text-align: left">*/
/*                                 <div class="input-group" style="display: inline-flex; width: 110px;">*/
/*                                     <input class="date-timepicker1 required end_time" syllable="end_time" style="height: 30px; width: 80px;">*/
/*                                     <span class="input-group-addon" style="width:30px;height:30px;">*/
/*                                         <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                     </span>*/
/*                                 </div>*/
/*                             </td>*/
/*                         </tr>`;*/
/* */
/* 					html = $(html);*/
/* */
/* 					//服务产品*/
/* 					for(var i in service_product) {*/
/* 						if(service_product[i]['type'] != 1) {*/
/* 							html.find('.short').append($(new Option(service_product[i]['name'], parseInt(service_product[i]['id']))).data('price', parseInt(service_product[i]['price'])));*/
/* 						}*/
/* 					}*/
/* */
/* 					$('#templateCon .contract_content tbody').append(html);*/
/* 					cs.timeplug();*/
/* */
/* 					changePrice();*/
/* */
/* 					//添加一次性合同中，点击 '+' 新增一行，点击 '-' 删掉当前行*/
/* 					oprationService();*/
/* 				}*/
/* 				if($(this).hasClass('decrease')) {*/
/* 					$(this).parents('tr').remove();*/
/* 				}*/
/* 			});*/
/* */
/* 		}*/
/* 		*/
/* */
/* 		//时间插件*/
/* 		cs.timeplug();*/
/* */
/* 		function time_plug(type) {*/
/* 			if(!ace.vars['old_ie']) {*/
/* 				$('#templateCon .date-timepicker1,.date-timepicker1').datetimepicker({*/
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
/* 			if(!ace.vars['old_ie']) {*/
/* 				$('#templateCon [field="start_time"],#templateCon [sear="start_time"]').datetimepicker({*/
/* 					format: 'YYYY-MM-DD', //use this option to display seconds*/
/* 					defaultDate: new Date().setDate(1),*/
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
/* */
/* 			var companys = $('#templateCon .state').select2({*/
/* 				allowClear: true*/
/* 			});*/
/* 			companys.css('left', '5px');*/
/* 			$('#templateCon select[field="customer_id"]').css('width', '180px').select2({*/
/* 				allowClear: true*/
/* 			});*/
/* 			// $('#select2-multiple-style .btn').unbind('click').on('click', function(e){*/
/* 			//     var target = $(this).find('input[type=radio]');*/
/* 			//     var which = parseInt(target.val());*/
/* 			//     if(which == 2) $('.select2').addClass('tag-input-style');*/
/* 			//      else $('.select2').removeClass('tag-input-style');*/
/* 			// });*/
/* 		}*/
/* */
/* 		//合同类型切换*/
/* 		function contractTypeChange() {*/
/* 			$('#templateCon .statistics_tit li').click(function() {*/
/* 				var index = $(this).index();*/
/* 				var it = $(this);*/
/* 				it.addClass('acti').siblings().removeClass('acti');*/
/* 				$('#templateBox .contractType').eq(index).show().siblings().hide();*/
/*              /*   if(index == 0){*/
/*                     $('#templateBox .contractType').eq(0).find(".imgBox_1").html(`*/
/* 						<label style="float:left;">上传文件：</label>*/
/* 							<div id="imgBox">*/
/* 								<label class="upbx" style="text-align: center;border: 1px solid;width: 70px;position: relative;height: 70px; cursor: pointer; text-align: center;line-height: 70px;font-size: 70px;">*/
/* 									<input type="file" class="uploadFiles" style="position:absolute;left:-9999px;opacity: 0;" />*/
/* 									<span class="" style="display: inline-block;position: absolute;top: 0;left: 14px; cursor: pointer; text-align: center;">+</span>*/
/* 								</label>*/
/* 						</div>`);*/
/*                     uploadsmallimg()*/
/*                     $('#templateBox .contractType').eq(1).find(".imgBox_2").html('')*/
/*                 }else {*/
/*                     $('#templateBox .contractType').eq(1).find(".imgBox_2").html(`*/
/* 						<label style="float:left;">上传文件：</label>*/
/* 							<div id="imgBox">*/
/* 								<label class="upbx" style="text-align: center;border: 1px solid;width: 70px;position: relative;height: 70px; cursor: pointer; text-align: center;line-height: 70px;font-size: 70px;">*/
/* 									<input type="file" class="uploadFiles" style="position:absolute;left:-9999px;opacity: 0;" />*/
/* 									<span class="" style="display: inline-block;position: absolute;top: 0;left: 14px; cursor: pointer; text-align: center;">+</span>*/
/* 								</label>*/
/* 						</div>`);*/
/*                     uploadsmallimg()*/
/*                     $('#templateBox .contractType').eq(0).find(".imgBox_1").html('')*/
/* 				}*//* */
/* 				calculateTotal();*/
/* 				endtime(index);*/
/* 				$('#templateCon .customer').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* 			})*/
/* 		}*/
/* 	});*/
/* */
/* 	//全选函数*/
/* 	function checkAll(status) {*/
/* 		$("tbody input[name='check']").each(function(i, n) {*/
/* 			n.checked = status;*/
/* 		});*/
/* 	}*/
/* </script>*/
