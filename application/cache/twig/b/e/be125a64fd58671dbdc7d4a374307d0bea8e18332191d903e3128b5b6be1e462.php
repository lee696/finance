<?php

/* admin/auditing/getList.html */
class __TwigTemplate_a9f8322f5e02b6e9172ec9c9622a32e369ff5d539f7174e95733340b5fb66650 extends Twig_Template
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
\t#dataList td[get_money] {
\t\tbackground-color: #dddddd;
\t\tbox-shadow: 0px 0px 2px #f5f5f5 !important;
\t}
\t
\t#dataList td[get_money=\"0\"] {
\t\tbackground-color: white;
\t\tbox-shadow: 0px 0px 2px #f5f5f5 !important;
\t}
\t
\t#dataList td[get_money=\"1\"] {
\t\tbackground-color: #00cc22;  
\t\tbox-shadow: 0px 0px 2px #f5f5f5 !important;
\t}
\t
\t#templateCon table {
\t\tmargin-top: 15px;
\t}
\t
\t#right .row {
\t\tmargin: 10px 0 0 0 !important;
\t}
\t
\t#templateCon .connects-content th,
\t#templateCon .connects-content td {
\t\tline-height: normal;
\t\ttext-align: center;
\t\tpadding: 5px;
\t}
\t
\t#templateCon .connects-content input {
\t\t/*line-height: normal;
\t\ttext-align: center;
\t\twidth: 88px;*/
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
\t#templateCon .connects-content a {
\t\ttext-decoration: none;
\t}
\t
\t#heightsearch1 label {
\t\twidth: 80px;
\t\ttext-align: right;
\t}
\t
\t.infobox-blue2 {
\t\ttext-align: center;
\t}
\t
\t.infobox>.infobox-data {
\t\tmin-width: 80px;
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
\t.layui-colla-content {
\t\tpadding: 10px;
\t}
\t/*.modal-backdrop.in{
\t\tz-index: 0;
\t}*/

</style>

<div class=\"widget-main\" style=\"padding-bottom:0;\">
\t<div class=\"row\" style=\"position: relative;margin-left:0 !important;margin-right:0 !important;\">
\t\t<div style=\"margin-top: 50px;  margin-left:0;width: 860px; padding: 0px;\" class=\"row col-xs-12\">
\t\t\t<div class=\"col-xs-12 infobox-container\" style=\"padding: 0px; margin-left: -10px;\">
\t\t\t\t<!-- #section:pages/dashboard.infobox -->
\t\t\t\t<div class=\"infobox infobox-blue2\" style=\"color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;\">
\t\t\t\t\t<div class=\"infobox-data\" style=\"padding: 0px;\">
\t\t\t\t\t\t<div class=\"infobox-content\" style=\"text-align: center;\">
\t\t\t\t\t\t\t本月目标
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"infobox infobox-blue2\" style=\"color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;\">
\t\t\t\t\t<div class=\"infobox-data\" style=\"padding: 0px;\">
\t\t\t\t\t\t<div class=\"infobox-content\" style=\"text-align: center;\">
\t\t\t\t\t\t\t新增任务
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"infobox infobox-blue2\" style=\"color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;\">
\t\t\t\t\t<div class=\"infobox-data\" style=\"padding: 0px;\">
\t\t\t\t\t\t<div class=\"infobox-content\" style=\"text-align: center;\">
\t\t\t\t\t\t\t逾期任务
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"infobox infobox-blue2\" style=\"color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;\">
\t\t\t\t\t<div class=\"infobox-data\" style=\"padding: 0px;\">
\t\t\t\t\t\t<div class=\"infobox-content\" style=\"text-align: center;\">
\t\t\t\t\t\t\t累计任务
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"infobox infobox-blue2\">
\t\t\t\t\t<div class=\"infobox-progress\">
\t\t\t\t\t\t<!-- #section:pages/dashboard.infobox.easypiechart -->
\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"0\" data-size=\"50\" style=\"height: 57px;width: 57px;line-height: 56px;\">
\t\t\t\t\t\t\t<!-- //百分比 -->
\t\t\t\t\t\t\t<span class=\"percent\" id=\"percent\"></span>
\t\t\t\t\t\t\t<canvas height=\"57\" width=\"57\"></canvas>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"infobox-data\" style=\"margin:3px 0 0 20px;\">
\t\t\t\t\t\t<div class=\"infobox-content\" id=\"isOk\"> 已完成</div>

\t\t\t\t\t\t<div class=\"infobox-content\" id=\"noOk\">
\t\t\t\t\t\t\t未完成
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"infobox-content\" id=\"noOk\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"infobox infobox-blue2\">
\t\t\t\t\t<div class=\"infobox-progress\">
\t\t\t\t\t\t<!-- #section:pages/dashboard.infobox.easypiechart -->
\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"0\" data-size=\"50\" style=\"height: 57px; width: 57px; line-height: 56px;\">
\t\t\t\t\t\t\t<span class=\"percent\" id=\"percent1\"></span>
\t\t\t\t\t\t\t<canvas height=\"57\" width=\"57\"></canvas></div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"infobox-data\" style=\"margin:3px 0 0 20px;\">
\t\t\t\t\t\t<div class=\"infobox-content\" id=\"isOk\">
\t\t\t\t\t\t\t已完成
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"infobox-content\">
\t\t\t\t\t\t\t未完成
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"infobox infobox-blue2\">
\t\t\t\t\t<div class=\"infobox-progress\">
\t\t\t\t\t\t<!-- #section:pages/dashboard.infobox.easypiechart -->
\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"0\" data-size=\"50\" style=\"height: 57px; width: 57px; line-height: 56px;\">
\t\t\t\t\t\t\t<span class=\"percent\" id=\"percent2\"></span>
\t\t\t\t\t\t\t<canvas height=\"57\" width=\"57\"></canvas></div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"infobox-data\" style=\"margin:3px 0 0 20px;\">
\t\t\t\t\t\t<div class=\"infobox-content\" id=\"isOk\">
\t\t\t\t\t\t\t已完成
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"infobox-content\">
\t\t\t\t\t\t\t未完成
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"infobox infobox-blue2\">
\t\t\t\t\t<div class=\"infobox-progress\">
\t\t\t\t\t\t<!-- #section:pages/dashboard.infobox.easypiechart -->
\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"0\" data-size=\"50\" style=\"height: 57px; width: 57px; line-height: 56px;\">
\t\t\t\t\t\t\t<span class=\"percent\" id=\"percent2\"></span>
\t\t\t\t\t\t\t<canvas height=\"57\" width=\"57\"></canvas></div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"infobox-data\" style=\"margin:3px 0 0 20px;\">
\t\t\t\t\t\t<div class=\"infobox-content\" id=\"isOk\">
\t\t\t\t\t\t\t已完成
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"infobox-content\">
\t\t\t\t\t\t\t未完成
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div style=\"clear:both;\"></div>
\t\t</div>
\t\t<!--普通搜索-->
\t\t<div id=\"topTool\" class=\"row col-xs-12\" style=\"margin-left:0 !important;padding-left:0 !important;margin-top:20px;position:relative\">
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px; margin-bottom:5px;\">
\t\t\t\t<input type=\"text\" pts=1 sear=\"customer_name\" placeholder=\"企业名称\" autofocus/>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px; margin-bottom:5px;\">
\t\t\t\t<input type=\"text\" pts=0 sear=\"khm_customer.customer_num\" placeholder=\"客户编码\" autofocus/>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<select style=\"width: 180px\" pts=3 sear=\"jzm_service_info.fuze_id\" class=\"advandced-search select2-hidden-accssible\"  tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\">负责人</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px; margin-bottom:5px;\">
\t\t\t\t<button type=\"button\" id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t<i class=\" fa fa-search\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px; margin-bottom:5px;\">
\t\t\t\t<button id=\"heightsearch\" title=\"高级搜索\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
\t\t\t\t\t<i class=\" fa fa-filter\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px; margin-bottom:5px;\">
\t\t\t\t<button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn btn-info btn-sm\" style=\" background-color: #32CD32!important;\">
\t                <i class=\" fa fa-refresh\"></i>
\t            </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" contentAuthority=\"91\" style=\" float: left;margin-right: 5px; margin-bottom:5px;\">
\t\t\t\t<label type=\"button\" id=\"mergeItem\" title=\"导入\" style=\"background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"btn btn-info btn-sm mergeItem\" for=\"leading-in\">
                    <i class=\"fa fa-sign-in\"></i>
            \t</label>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" contentAuthority=\"289\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button type=\"button\" title=\"分配负责人\" id=\"moveToClue\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"moveToClue btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t\t<i class=\"fa fa-hand-o-right\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px; margin-bottom:5px;\">
\t\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:290px;height: 36px\">
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px;
\t\t\t\t\tbackground: #E6E6E6;\" data-kind=\"0\"> 查看全部 </a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"1\"> 我负责的 </a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"2\"> 我关注的 </a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"3\"> 我的下属 </a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!--高级搜索-->
\t\t\t<!-- <div id=\"heightsearch1\" style=\"display: none;position: absolute;background: #f5f5f5;z-index: 2; overflow: auto; padding: 10px 0px;width:1018px;margin: 213px auto 10px -20px\"> -->
\t\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"margin-top:30px;position: absolute; background: #fff; z-index: 1041;padding: 20px 10px; display: none;\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>年份</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select style=\"width: 180px\" gjs=5 sear=\"year\" data-year=\"true\"></select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>月份</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select sear=\"month\" gjs=5 style=\"width:180px;\">
\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t<option value=\"01\">1月</option>
\t\t\t\t\t\t\t<option value=\"02\">2月</option>
\t\t\t\t\t\t\t<option value=\"03\">3月</option>
\t\t\t\t\t\t\t<option value=\"04\">4月</option>
\t\t\t\t\t\t\t<option value=\"05\">5月</option>
\t\t\t\t\t\t\t<option value=\"06\">6月</option>
\t\t\t\t\t\t\t<option value=\"07\">7月</option>
\t\t\t\t\t\t\t<option value=\"08\">8月</option>
\t\t\t\t\t\t\t<option value=\"09\">9月</option>
\t\t\t\t\t\t\t<option value=\"10\">10月</option>
\t\t\t\t\t\t\t<option value=\"11\">11月</option>
\t\t\t\t\t\t\t<option value=\"11\">12月</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>企业名称</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.name\" />
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
\t\t\t\t\t\t<label>税务类型</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select gjs=0 sear=\"khm_customer.tax_type\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t<option value=\"1\"> 一般纳税人 </option>
\t\t\t\t\t\t\t<option value=\"2\"> 小规模 </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>负责人</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select style=\"margin-right: 12px !important;width: 180px\" gjs=0 data-type=\"gj\" sear=\"jzm_service_info.fuze_id\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>收款情况</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select gjs=0 data-type=\"gj\" style=\"width:180px;\" sear=\"jzm_service_info.get_money\">
\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t<option value=\"1\"> 已收款</option>
\t\t\t\t\t\t\t<option value=\"0\"> 未收款</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>审批状态</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select gjs=0 style=\"width:180px;\" data-type=\"gj\" sear=\"jzm_service_info.status\">
\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t<option value=\"0\"> 未开始</option>
\t\t\t\t\t\t\t<option value=\"1\"> 待审批</option>
\t\t\t\t\t\t\t<option value=\"2\"> 已通过</option>
\t\t\t\t\t\t\t<option value=\"3\"> 未通过</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\"clear:both;padding-top:10px;text-align:center;\">
\t\t\t\t\t\t<button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t查询
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button type=\"button\" id=\"rest\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
\t\t                       重置
\t\t                    </button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--<button id=\"import\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #fb9a47 !important;border-color:#fb9a47;\">
\t\t\t\t导入
\t\t\t</button>-->

\t\t</div>

\t</div>
</div>

<div class=\"row\">
\t<div class=\"widget-body\" style=\"padding: 0 20px;\">
\t\t<!-- class=\"widget-main\" -->
\t\t<div>
\t\t\t<div style=\"overflow-x:auto;\" class=\"custom_table\">
\t\t\t\t<table id=\"dynamic-table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t\t                                    <input type=\"checkbox\" class=\"ace\" onclick=\"checkAll(this.checked)\"/>
\t\t\t\t\t\t\t\t                                    <span class=\"lbl\"></span>
\t\t\t\t\t\t\t\t                                    </label>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th data-num=\"1\">企业名称</th>
\t\t\t\t\t\t\t<th data-num=\"20\">
\t\t\t\t\t\t\t\t<span>任务等级</span>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th data-num=\"2\">
\t\t\t\t\t\t\t\t<span>客户编码</span>
\t\t\t\t\t\t\t</th>

\t\t\t\t\t\t\t<th data-num=\"3\">
\t\t\t\t\t\t\t\t<span>仓位编码</span>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th data-num=\"4\">税务类型</th>
\t\t\t\t\t\t\t<th data-num=\"5\">服务周期</th>
\t\t\t\t\t\t\t<th data-num=\"6\">逾期</th>
\t\t\t\t\t\t\t<th data-num=\"7\">截止月份</th>
\t\t\t\t\t\t\t<th data-num=\"8\">负责人</th>
\t\t\t\t\t\t\t<th data-num=\"9\" class=\"month\"></th>
\t\t\t\t\t\t\t<th data-num=\"10\" class=\"month\"></th>
\t\t\t\t\t\t\t<th data-num=\"11\" class=\"month\"></th>
\t\t\t\t\t\t\t<th data-num=\"12\" class=\"month\"></th>
\t\t\t\t\t\t\t<th data-num=\"13\" class=\"month\"></th>
\t\t\t\t\t\t\t<th data-num=\"14\" class=\"month\"></th>
\t\t\t\t\t\t\t<th data-num=\"15\" class=\"month\"></th>
\t\t\t\t\t\t\t<th data-num=\"16\" class=\"month\"></th>
\t\t\t\t\t\t\t<th data-num=\"17\" class=\"month\"></th>
\t\t\t\t\t\t\t<th data-num=\"18\" class=\"month\"></th>
\t\t\t\t\t\t\t<th data-num=\"19\" class=\"month\"></th>
\t\t\t\t\t\t\t<th data-num=\"20\" class=\"month\"></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<tbody id=\"dataList\">

\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" id=\"num\"></div>
\t\t\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t\t\t<div id=\"pageBar\" class=\"pagination\"></div>
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
\t</div>
</div>

<div class=\"getList-popup\" style=\"display:none;\">
\t<div class=\"layui-collapse\" lay-filter=\"test\" style=\"margin: 10px 0;\">
\t\t<div class=\"layui-colla-item\">
\t\t\t<h2 class=\"layui-colla-title\">收单信息</h2>
\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t<div id=\"get_way\" style=\"margin-top: 15px;\">

\t\t\t\t\t<label style=\"width: 50px\">服务方式</label>
\t\t\t\t\t<select title=\"getway\">
\t\t\t\t\t\t<option value=\"1\">外勤上门</option>
\t\t\t\t\t\t<option value=\"2\">客户上门</option>
\t\t\t\t\t\t<option value=\"3\">快递物流</option>
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<div id=\"express\" style=\"display:none\">
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label style=\"width: 50px\">快递公司</label>
\t\t\t\t\t\t<input title=\"express\" />
\t\t\t\t\t\t<label style=\"width: 50px\">快递单号</label>
\t\t\t\t\t\t<input title=\"expressnum\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label style=\"width: 50px\">快递费用</label>
\t\t\t\t\t\t<input title=\"cost\" type=\"number\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"\" style=\"padding: 2px;\">
\t\t\t\t\t\t<div id=\"fileBox\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"uploadBox\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"upload1\" style=\"outline: none;background-color: #009688 !important; margin-top: 20px;\" class=\"btn btn-info btn-sm position-relative\">
\t\t\t                        上传文件
\t\t\t        \t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"sendMsg\" customer_id=\"\" style=\"height: 30px;line-height: 40px\">
\t\t\t\t\t<label style=\"margin-left:-40px\">是否发送短信：</label>
\t\t\t\t\t<input type=\"radio\" value=\"1\" name=\"is_send\">是
\t\t\t\t\t<input type=\"radio\" value=\"2\" name=\"is_send\" checked=\"true\">否
\t\t\t\t</div>

\t\t\t\t<div class=\"service_month\" style=\"padding:15px 0;\">
\t\t\t\t\t<label style=\"float: left;margin-right: 5px;width:25px;\">月份</label>
\t\t\t\t\t<div style=\"display: inline-block;width:472px;\" class=\"voucher_div\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<div class=\"layui-colla-item\">
\t\t\t<h2 class=\"layui-colla-title\">记账凭证</h2>
\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t<div class=\"voucher\">
\t\t\t\t\t<label style=\"float: left;margin-right: 5px;width:25px;\"></label>
\t\t\t\t\t<div style=\"display: inline-block;width:472px;\" class=\"voucher_div\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"layui-colla-item\">
\t\t\t<h2 class=\"layui-colla-title\">发票单据</h2>
\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t<div class=\"connects-content\">
\t\t\t\t\t<table class=\"bill\" style=\"\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t\t\t<th>票据类别</th>
\t\t\t\t\t\t\t\t<th>数量(张)</th>
\t\t\t\t\t\t\t\t<th>金额(元)</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody id=\"ticketBody\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"addTicket\">+</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select class=\"goods\">

\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"count\" value=\"0\" />
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"money\" value=\"0\" />
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<div class=\"layui-colla-item\">
\t\t\t<h2 class=\"layui-colla-title\">证件资料</h2>
\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t<div class=\"connects-content\">
\t\t\t\t\t<table class=\"certificate\" style=\"\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t\t\t<th>证件名称</th>
\t\t\t\t\t\t\t\t<th>数量(个)</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody id=\"cardBody\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"addCard\">+</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select class=\"goods\">

\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"count\" value=\"0\" />
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!--<div style=\"margin-top:20px;margin-bottom:20px;\" class=\"buttons\">
\t\t<button class=\"btn btn-info btn-sm active\">记账凭证</button>
\t\t<button class=\"btn btn-info btn-sm\">发票票据</button>
\t\t<button class=\"btn btn-info btn-sm\">证件资料</button>
\t</div>

\t<div class=\"connects-content\">

\t\t<div>

\t\t</div>
\t\t<div>
\t\t\t
\t\t</div>

\t</div>-->

\t<div class=\"form_data\">
\t\t<label style=\"float:left; width: auto;\"> 备注： </label>
\t\t<textarea style=\"width:calc(100% - 77px);margin-left:5px;padding:5px;\" id=\"remark1\"></textarea>
\t</div>
\t<div style=\"text-align:center;margin-top:15px;\">
\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
\t\t<button class=\"sure_button add btn btn-info btn-sm\">
\t\t\t\t\t保存
\t\t\t\t</button>
\t</div>
</div>
</div>

<div class=\"label_popup\" id=\"export\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd; box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t<span style=\"display: inline-block;\">导入收单</span>
\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t</div>
\t\t<div>
\t\t</div>
\t\t<div style=\"padding: 10px 50px;\">
\t\t\t<input type=\"file\" style=\"margin: auto;\" id=\"efile\" class=\"efile\"/>
\t\t\t<!--<input type=\"file\" width=\"200px\" style=\"margin: auto;\" id=\"efile1\" />-->
\t\t</div>
\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t<button id=\"ghItem\" class=\" btn\">收单模板</button>
\t\t\t<button class=\"btn btn-info  submit\" style=\"padding: 6px; border-radius: 0px;\">保存</button>
\t\t</div>
\t</div>
</div>
";
        // line 611
        $this->loadTemplate("admin/customerDetail.html", "admin/auditing/getList.html", 611)->display($context);
        echo " ";
        $this->loadTemplate("admin/mark.html", "admin/auditing/getList.html", 611)->display($context);
        // line 612
        echo "</div>
<!-- /.widget-main -->
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script>
\tjQuery(function(\$) {
\t\tcs.getNodes([91, 289]);

\t\tvar pagesize = 10;
\t\tvar employees = {};
\t\tvar filter = '';
\t\tvar order = \"\";
\t\tvar param = {
\t\t\taid: ykp.getCookie(\"aid\"),
\t\t\ttime: ykp.getCookie(\"time\")
\t\t}
\t\tvar month2 = \"\";
\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_service/service_list',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: filter,
\t\t\t\tlimit: pagesize,
\t\t\t\ttype: 1
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '#pageBar'
\t\t\t},
\t\t\tinitOrder: 'khm_customer.id',
\t\t\tdefaultOrder: order,
\t\t\tcontentId: \"#dataList\",
\t\t\tparams: [{
\t\t\t\tid: \"#dynamic-table\",
\t\t\t\tfield: [\"\", \"khm_customer.name\",\"maxLv\", \"customer_num\", \"pos_name\", \"khm_customer.tax_type\",
\t\t\t\t\t\"htm_contract.payment_cycle\", \"\",\"maxTime\", \"jzm_service_info.fuze_id\"
\t\t\t\t]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});

\t\tcs.setFuze({
\t\t\tconId: \"#dataList\",
\t\t\ttype: \"1\",
\t\t\turl: \"/api/api_service/transfer_user\",
\t\t\tfun: function() {
\t\t\t\tgetEntireList();
\t\t\t}
\t\t});

\t\tif(param.time != '' && param.time != undefined) {
\t\t\tvar timestamp = ''; //条件
\t\t\tvar today = new Date().setHours(0, 0, 0, 0) / 1000; //今天零点的时间戳
\t\t\tvar day_1 = cs.getNowTime(Date.parse(new Date()) / 1000).substr(-2) - 1; //距离本月1号有多少天
\t\t\tvar lastmonthday_1 = cs.getNowTime(Date.parse(new Date()) / 1000);
\t\t\tvar newday = lastmonthday_1.substring(0, 4) + '-' + (lastmonthday_1.substring(5, 7) - 1) + '-01';
\t\t\tif(lastmonthday_1.substring(5, 7) == 1) {
\t\t\t\tnewday = (lastmonthday_1.substring(0, 4) - 1) + '-12-01';
\t\t\t}
\t\t\tvar newdaytime = Date.parse(new Date(newday)) / 1000; //上个月1号的时间戳
\t\t\tswitch(param.time) {
\t\t\t\tcase '1':
\t\t\t\t\ttimestamp = `jzm_service_info.com_time>\${today}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '2':
\t\t\t\t\ttimestamp = `jzm_service_info.com_time<\${today} and jzm_service_info.com_time>\${today-86400}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '3':
\t\t\t\t\ttimestamp = `jzm_service_info.com_time>\${today-86400*6}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '4':
\t\t\t\t\ttimestamp = `jzm_service_info.com_time>\${today-86400*29}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '5':
\t\t\t\t\ttimestamp = `jzm_service_info.com_time>\${today-86400*day_1}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '6':
\t\t\t\t\ttimestamp = `jzm_service_info.com_time<\${today-86400*day_1} and jzm_service_info.com_time>\${newdaytime}`;
\t\t\t\t\tbreak;
\t\t\t}
\t\t\tvar where = ` \${timestamp}`;
\t\t\tvar data = {
\t\t\t\t\"type\": 1,
\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\"where\": where
\t\t\t}
\t\t\tif(param.aid != '' || param.aid != undefined) {
\t\t\t\tdata['staff_name'] = param.aid;
\t\t\t}
\t\t\tgetEntireList_2(data);
\t\t\tykp.setCookie(\"aid\", \"\", (1 / 24));
\t\t\tykp.setCookie(\"time\", \"\", (1 / 24));
\t\t} else if(ykp.getCookie('detailsId') != undefined && ykp.getCookie('detailsId') != '') {
\t\t\tvar id = ykp.getCookie('detailsId');
\t\t\tvar data = {
\t\t\t\t\"type\": 1,
\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\"where\": 'htm_contract.id=' + id
\t\t\t}
\t\t\tgetEntireList_2(data);
\t\t\tykp.setCookie(\"detailsId\", '', (1 / 24));
\t\t} else {
\t\t\t//获取列表数据
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetEntireList(1);
\t\t}

\t\t\$('#filterBtns a').mouseover(function() {
\t\t\t\$(this).addClass('over');
\t\t})
\t\t\$('#filterBtns a').mouseout(function() {
\t\t\t\$(this).removeClass('over');
\t\t})

\t\t\$('.myFilter').click(function() {
\t\t\tif(!\$(this).hasClass('clc')) {
\t\t\t\t\$(this).addClass('clc').siblings().removeClass('clc');
\t\t\t}
\t\t\tvar user = JSON.parse(ykp.getCookie('userinfo'));
\t\t\tvar data = {
\t\t\t\t\"type\": 1,
\t\t\t\t\"page_size\": pagesize,
\t\t\t\t'page': 1
\t\t\t};
\t\t\tvar filter_ = \$(this).attr('data-kind');
\t\t\tif(filter_ == '0') {
\t\t\t\tgetEntireList(1);
\t\t\t\treturn;
\t\t\t}
\t\t\t//我负责的
\t\t\tif(filter_ == '1') {
\t\t\t\tdata['staff_name'] = user.name;
\t\t\t}
\t\t\t//我关注的
\t\t\tif(filter_ == '2') {
\t\t\t\tdata['relation'] = 'helloworld';
\t\t\t}
\t\t\t//我的下属
\t\t\tif(filter_ == '3') {
\t\t\t\t//data['where'] = 'bmm_employees.up_user = ' + user.id;
\t\t\t\tdata.up_user = user.id;
\t\t\t}
\t\t\tfilter = data['where'];
\t\t\tgetEntireList_2(data);
\t\t})

\t\t/*var data = {
\t\t\t\t\"type\": 1,
\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\"order\":order,
\t\t\t\t\"filter\": 'jzm_service_info.id='+847
\t\t\t}
\t\t\tgetEntireList_2();*/

\t\tfunction getEntireList_2(data) {
            //普通搜索
\t\t\tsearch();
\t\t\t//高级搜索
\t\t\tdohSearch();
\t\t\t//顶部chart
\t\t\tcs.getChart(1, '', data);
            ykp.list({
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: data,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar',
\t\t\t\t},
\t\t\t\tloadList: function(res) {
                    //生成月份表头
\t\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'), res['data']['months']);
                    if(res.data.items == \"\" || res.data == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\" style=\"color:#7d7d7d;text-align:center !important;\">暂无数据</td></tr>');
\t\t\t\t\t\treturn;
\t\t\t\t\t} else {
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}

\t\t\t\t}
\t\t\t});
\t\t}

\t\t//获取物品信息
\t\tfunction getGoods() {
\t\t\tvar goods = {};
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_accountancies/list_goods',
\t\t\t\tmethod: 'post',
\t\t\t\tasync: false,
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;

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
\t\t\t\t}
\t\t\t})
\t\t\treturn goods;
\t\t}

\t\t\$('#flush').click(function() {
\t\t\tfilter = '';
\t\t\tykp.setCookie('where','');
\t\t\t\$('[sear=\"customer_name\"]').val('');
\t\t\t\$('[sear=\"khm_customer.customer_num\"]').val('');
\t\t\t\$('[sear=\"jzm_service_info.fuze_id\"]').val('').trigger('change');
\t\t\tgetEntireList();
\t\t})

\t\t\$(\"#dataList tr td get_money\").mouseover(function() {
\t\t\t\$(this).css(\"background-color\", \"red\");
\t\t});

\t\tcs.getAllCw(function(option) {
\t\t\t\$('#heightsearch1 .cw').html(option);
\t\t\t\$('#heightsearch1 .cw').select2({
\t\t\t\tallowClear: true
\t\t\t})
\t\t})

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
\t\t\t\tfor(var i in data) {
\t\t\t\t\tif(data[i]['name']) {
\t\t\t\t\t\temployees[data[i]['id']] = data[i]['name'];
\t\t\t\t\t\t\$('.advandced-search').append(new Option(data[i]['name'], data[i]['id']));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t\$('.advandced-search').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});
\t\t\t}
\t\t});

\t\t//高级搜索
\t\tcs.showHeightSearch('#heightsearch', '#heightsearch1');

\t\tfunction search() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\t\"type\": 1,\t\t\t\t
\t\t\t\t}
\t\t\t}
\t\t\tcs.doSearch('#search', data, 'where', false, function(res, _filter) {
\t\t\t\tfilter = _filter;
\t\t\t\t//生成月份表头
\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'), res['data']['months']);

\t\t\t\tfilter = _filter;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\" style=\"color:#7d7d7d;text-align:center !important;\">暂无数据</td></tr>');
\t\t\t\t\treturn false;
\t\t\t\t} else {
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t}, '', {
\t\t\t\turl: \"/api/api_service/assistant_list_new \"
\t\t\t})
\t\t}

\t\tfunction dohSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\t\"type\": 1,
\t\t\t\t\torder:order,
\t\t\t\t}
\t\t\t}

\t\t\tcs.hSearch('#search1', data, 'where', false, function(res, _filter, month) {
\t\t\t\tfilter = _filter;
\t\t\t\tmonth2 = month;
\t\t\t\t//生成月份表头
\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'), res['data']['months']);

\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\$(\"#heightsearch\").removeClass('active');
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\" style=\"color:#7d7d7d;text-align:center !important;\">暂时没有记录</td></tr>');
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\taddList(res);\t
\t\t\t\t}
\t\t\t\t
\t\t\t}, '', {
\t\t\t\turl: \"/api/api_service/assistant_list_new \"
\t\t\t})
\t\t}

\t\tvar data = {
\t\t\turl: \"/api/api_service/serviceExport\",
\t\t\ttype: '1',
\t\t\ttitle: '收单模板'
\t\t}
\t\t
\t\tcs.jzexport(data, function(res) {
\t\tsetTimeout(function(){
\t\t\t\t\tykp.prompt(\"上传成功\");
\t\t\t\t\t\t},1000)
\t\t\t
\t\t\tgetEntireList(1);
\t\t\t\$('.label_popup').hide();
\t\t})

\t\t\$('#changePageNum').change(function() {
\t\t\tpagesize = \$(this).val();
\t\t\tykp.setCookie('page_size',pagesize);
\t\t\tgetEntireList(1);
\t\t})

\t\t//生成月份表头：el 所有月份表头，months:开始、结束月份
\t\tfunction generateMonthTh(el, months) {
\t\t    if(!months){
\t\t        return;
\t\t\t}
\t\t\tvar start = {
\t\t\t\tyear: parseInt(months['start'].substring(0, 4)),
\t\t\t\tmonth: parseInt(months['start'].substring(4))
\t\t\t};
\t\t\tvar end = {
\t\t\t\tyear: parseInt(months['end'].substring(0, 4))
\t\t\t};

\t\t\tvar start_month;
\t\t\tel.each(function(i, e) {
\t\t\t\tstart_month = i + start['month'];
\t\t\t\tif(start_month > 12) {
\t\t\t\t\tstart_month = start_month - 12;
\t\t\t\t\t\$(this).text(end['year'] + '' + (start_month < 10 ? '0' + start_month : start_month)).attr('month', end['year'] + '' + (start_month < 10 ? '0' + start_month : start_month));
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\t\$(this).text(start['year'] + '' + (start_month < 10 ? '0' + start_month : start_month)).attr('month', start['year'] + '' + (start_month < 10 ? '0' + start_month : start_month));
\t\t\t});

\t\t\t//自定义列表
            if(\$('#custom').length < 1) {
                console.log(55);
                cs.custorm_check('#dynamic-table', '#dataList', true);
            }

        };

\t\tfunction getEntireList(curPage) {
\t\t\t//普通搜索
\t\t\tsearch();
\t\t\t//高级搜索
\t\t\tdohSearch();
\t\t\t//顶部chart
\t\t\tvar chartData = {
\t\t\t\t\"type\": 1,
\t\t\t\t\"page\": curPage,
\t\t\t\t\"page_size\": pagesize,
\t\t\t\tfilter: filter,
\t\t\t\twhere: filter
\t\t\t\t//\t\t\t\tmonth2:month2
\t\t\t};
\t\t\tif(month2) {
\t\t\t\tchartData.month2 = month2;
\t\t\t}
\t\t\tcs.getChart(1, '', chartData);

\t\t\tykp.list({
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: chartData,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\t//生成月份表头
\t\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'), res['data']['months']);
                    if(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\" style=\"color:#7d7d7d;text-align:center !important;\">暂无数据</td></tr>');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\taddList(res);
\t\t\t\t}
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

\t\tfunction getArrays(month, num) {
\t\t\tvar yue = month % num;
\t\t\tvar datas = [];
\t\t\tif(yue != 0) {
\t\t\t\tfor(var i = 0; i < yue - 1; i++) {
\t\t\t\t\tdatas.push(--month);
\t\t\t\t\tmonth++;
\t\t\t\t}
\t\t\t\tdatas.push(month);
\t\t\t\tfor(var i = yue; i < 3; i++) {
\t\t\t\t\tdatas.push(++month);
\t\t\t\t}
\t\t\t} else {
\t\t\t\tfor(var i = 0; i < 3; i++) {
\t\t\t\t\tdatas.push(month - num + 1);
\t\t\t\t\tnum--;
\t\t\t\t}
\t\t\t}
\t\t\treturn datas;
\t\t}

\t\t//获取所有员工(负责人)
\t\tfunction allemp() {
\t\t\tvar emps;
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_employees/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: 999
\t\t\t\t},
\t\t\t\tasync: false,
\t\t\t\tsuccess: function(res) {
\t\t\t\t\temps = res.data.items;
\t\t\t\t}
\t\t\t})
\t\t\treturn emps;
\t\t}

\t\tfunction getPageList(current) {
\t\t\tgetEntireList(current);
\t\t}

\t\t//选中凭证月份 默认选中 服务月份
\t\tfunction voucherToService() {
\t\t\t\$('#templateCon .voucher input').unbind('click').click(function() {
\t\t\t\t// if(\$(this).prop('checked')){
\t\t\t\t\$('#templateCon .service_month input[data-time=\"' + \$(this).attr('data-time') + '\"]').prop('checked', \$(this).prop('checked'));
\t\t\t\t// }
\t\t\t});
\t\t}

\t\t//获取凭证和服务月份
\t\tfunction getVoucherAndServiceMonth(contract_id) {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_contract/get_month_pz',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tcontract_id: contract_id
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;

\t\t\t\t\t//凭证 服务所有月份
\t\t\t\t\tvar not_month = data['not_month'];

\t\t\t\t\tvar new_month = data['new_pz_month'];
\t\t\t\t\t//已完成服务月份
\t\t\t\t\tvar done_month = data['done_month'];

\t\t\t\t\t//已完成凭证月份
\t\t\t\t\tvar pz_month = data['pz_month'];

\t\t\t\t\t//服务月份html
\t\t\t\t\tvar service_html = [];
\t\t\t\t\t//拼争月份html
\t\t\t\t\tvar pz_html = [];

\t\t\t\t\tvar index; //下标不等于-1;则打钩禁用
\t\t\t\t\tfor(var i in not_month) {
\t\t\t\t\t\tpz_html.push(
\t\t\t\t\t\t\t`<label class=\"voucher_label\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\"  data-time=\"\${not_month[i]}\">
\t\t\t\t\t\t\t\t<span class=\"voucher_month\">\${not_month[i]}</span> 
\t\t\t\t\t\t\t</label>`
\t\t\t\t\t\t);
\t\t\t\t\t\t//\t\t\t\t\t\tindex = \$.inArray(all_month[i],done_month);
\t\t\t\t\t\t//\t\t\t\t\t\t
\t\t\t\t\t\t//
\t\t\t\t\t\t//\t\t\t\t\t\tindex = \$.inArray(all_month[i],pz_month);
\t\t\t\t\t\t//\t\t\t\t\t\tpz_html.push(
\t\t\t\t\t\t//\t\t\t\t\t\t\t`<label class=\"voucher_label\">
\t\t\t\t\t\t//\t\t\t\t\t\t\t\t<input type=\"checkbox\" \${index != -1 ? 'checked' : ''} \${index != -1 ? 'disabled' : ''} data-time=\"\${all_month[i]}\">
\t\t\t\t\t\t//\t\t\t\t\t\t\t\t<span class=\"voucher_month\">\${all_month[i]}</span> 
\t\t\t\t\t\t//\t\t\t\t\t\t\t</label>`
\t\t\t\t\t\t//\t\t\t\t\t\t);
\t\t\t\t\t}

\t\t\t\t\tfor(var i in new_month) {
\t\t\t\t\t\tservice_html.push(
\t\t\t\t\t\t\t`<label class=\"voucher_label\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\"  data-time=\"\${new_month[i]}\">
\t\t\t\t\t\t\t\t<span class=\"voucher_month\">\${new_month[i]}</span> 
\t\t\t\t\t\t\t</label>`
\t\t\t\t\t\t);
\t\t\t\t\t}

\t\t\t\t\t\$('#templateCon .voucher .voucher_div').html(service_html.join(''));
\t\t\t\t\t\$('#templateCon .service_month .voucher_div').html(pz_html.join(''));

\t\t\t\t\t//\t\t\t\t\t\$('#templateCon .voucher_label').mouseover(function() {
\t\t\t\t\t//\t\t\t\t\t\tif(\$(this).find('input').is(':checked')) {
\t\t\t\t\t//\t\t\t\t\t\t\t\$(this).find('input').prop('checked', false);
\t\t\t\t\t//\t\t\t\t\t\t} else {
\t\t\t\t\t//\t\t\t\t\t\t\t\$(this).find('input').prop('checked', true);
\t\t\t\t\t//\t\t\t\t\t\t}
\t\t\t\t\t//\t\t\t\t\t})

\t\t\t\t}
\t\t\t});
\t\t}

\t\t//生成服务月份html
\t\tfunction generateTd(data) {
\t\t\tvar html;

\t\t\tvar month; //月份
\t\t\t//styles : 审批状态对应显示的样式
\t\t\tvar styles = ['', 'fa  fa-circle-o', 'glyphicon glyphicon-ok', 'glyphicon glyphicon-remove'];

\t\t\t\$('#dynamic-table .thColor .month').each(function(i, e) {

\t\t\t\tmonth = \$(this).attr('month');

\t\t\t\tif(!data[month]) {
\t\t\t\t\thtml += '<td get_money style=\"display:' + \$(this).css('display') + ';border:1px solid #eee !important;\" data-num=\"' + \$(this).attr('data-num') + '\"></td>';
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\thtml +=
\t\t\t\t\t`<td class=\"center\" \${data[month]['Status'] ? \"cstatus\" : \"\"}  title=\"\${month}\" get_money=\"\${data[month]['get_money']}\"   contract_id=\"\${data[month]['contract_id']}\" fuze_id=\"\${data[month]['fuze_id']}\" hang_statu=\"\${data[month]['hang_statu']}\" data-id=\"\${data[month]['id']}\" data-status=\"\${data[month]['status']}\" data-num=\"\${\$(this).attr('data-num')}\" style=\"display:\${\$(this).css('display')};border:1px solid #eee !important;\" data-month=\"\${data[month]['time']}\">
\t\t\t\t\t\t<label class=\"pos-rel \${styles[data[month]['status']]}\">
\t\t\t\t\t</label>
\t\t\t\t</td>`;
\t\t\t});
\t\t\treturn html;
\t\t}

\t\t//将数据添加到tbody中
\t\tfunction addList(res) {
\t\t\t//列表数据
\t\t\tvar data = res.data.items;
\t\t\t//tbody下的html内容
\t\t\tvar html = '';
\t\t\t//服务周期
\t\t\tvar payment_cycle = {
\t\t\t\t'1': '每月',
\t\t\t\t'3': '季度',
\t\t\t\t'6': '半年',
\t\t\t\t'12': '一年'
\t\t\t};

\t\t\t//处理服务器返回的每月的服务数据
\t\t\tvar obj = {};
\t\t\tvar _data = {};

\t\t\t//表头显示 隐藏样式
\t\t\tvar styles = [];
\t\t\t\$('#dynamic-table .thColor th').each(function(i, e) {
\t\t\t\tstyles.push(\$(this).css('display'));
\t\t\t});
            console.log(styles);
            ykp.setCookie('page_no', res.data.curPage, (1 / 24));

\t\t\t//负责人id
\t\t\tvar fuze_ids = [];
\t\t\t//负责人名字
\t\t\tvar fuze = [];
\t\t\t//服务周期
\t\t\tvar service_cylce = [];
\t\t\t//服务周期名字
\t\t\tvar cycle = [];
\t\t\t//月份服务数据td
\t\t\tvar td_html;
\t\t\tfor(var i in data) {
\t\t\t\tfor(var j = 0; j < data[i].list.length; j++) {
\t\t\t\t\tobj.status = data[i].list[j]['jzm_service_info.status'];
\t\t\t\t\tobj.get_money = data[i].list[j]['jzm_service_info.get_money'];
\t\t\t\t\tobj.id = data[i].list[j]['jzm_service_info.id'];
\t\t\t\t\tobj.time = data[i].list[j]['jzm_service_info.time'];
\t\t\t\t\tobj.contract_id = data[i]['list'][j]['jzm_service_info.contract_id'];
\t\t\t\t\tobj.fuze_id = data[i]['list'][j]['jzm_service_info.fuze_id'];
\t\t\t\t\tobj.hang_statu = data[i]['list'][j]['htm_contract.status'];
\t\t\t\t\tobj.Status = data[i].list[j]['htm_contract.status'] == 1 || data[i].list[j]['htm_contract.status'] == 2 || data[i].list[j]['htm_contract.status'] == 3 ? false : true; //合同状态
\t\t\t\t\t_data[data[i].list[j]['jzm_service_info.time']] = obj;
\t\t\t\t\tobj = {};
\t\t\t\t}
\t\t\t\t//生成服务月份html
\t\t\t\ttd_html = generateTd(_data);

\t\t\t\tfor(var j = data[i]['list'].length - 1; j >= 0; j--) {
\t\t\t\t\t//负责人id不存在 则将负责人id加入fuze_ids中
\t\t\t\t\tif(\$.inArray(data[i].list[j]['jzm_service_info.fuze_id'], fuze_ids) == -1) {
\t\t\t\t\t\tfuze_ids.push(data[i].list[j]['jzm_service_info.fuze_id']);
\t\t\t\t\t}
\t\t\t\t\t//服务周期不存在 则将服务周期加入service_cylce中
\t\t\t\t\tif(\$.inArray(data[i].list[j]['htm_contract.payment_cycle'], service_cylce) == -1) {
\t\t\t\t\t\tservice_cylce.push(data[i].list[j]['htm_contract.payment_cycle']);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t//根据负责人id 获取负责人姓名并存入fuze中
\t\t\t\tfor(var j = 0; j < 1; j++) {
\t\t\t\t\tfuze.push(employees[fuze_ids[j]]);
\t\t\t\t}

\t\t\t\t//根据service_cylce 将服务周期存入cycle中
\t\t\t\tfor(var j in service_cylce) {
\t\t\t\t\tcycle=payment_cycle[service_cylce[j]];
\t\t\t\t}

\t\t\t\tvar tax_type = data[i].list[0]['khm_customer.tax_type'] == 1 ? '一般纳税人' : '小规模';

\t\t\t\thtml +=
\t\t\t\t\t`<tr cid=\"\${data[i]['customer_id']}\" data-name=\"\${data[i].list[0]['khm_customer.name']}\">
\t\t\t\t\t <td class=\"center\">
                        <label class=\"pos-rel\">
                        <input type=\"checkbox\" name=\"check\" class=\"ace\"/>
                        <span class=\"lbl\"></span>
                        </label>
                    </td>
\t\t\t\t\t<td data-num=\"1\" style=\"display:\${styles[1]}\" data-cid=\"\${data[i]['customer_id']}\">
\t\t\t\t\t\t<div style=\"display:\${data[i]['is_red'] == '0' ? 'none' : 'inline-block'};height:7px;width:17px\">
\t\t\t \t\t\t\t <span class=\"spanTip\" style=\"\"><span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"customerDetail pos-rel\">\${data[i].list[0]['khm_customer.name']}</a>
\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t<i relation=\${data[i]['is_relotion']} class=\"sc fa \${data[i]['is_relotion'] == 0 ? 'fa-heart-o' : 'fa-heart'}\" style=\"color:\${data[i]['is_relotion'] ==1 ? 'red' : ''}\"></i>
\t\t\t \t\t\t\t<i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data[i]['Remark'].length > 0 ? 'red' : ''}\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i>
\t\t \t\t\t\t</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td data-num=\"20\" style=\"display:\${styles[2]}\">
\t\t\t\t\t\t\${parseInt(data[i]['maxLv']).toFixed(2)}
\t\t\t\t\t</td>
\t\t\t\t\t//客户编码
\t\t\t\t\t<td data-num=\"2\" style=\"display:\${styles[3]}\">
\t\t\t\t\t\t\${data[i]['customer_num']}
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t//仓位编码
\t\t\t\t\t<td  data-type=\"\" data-num=\"3\" style=\"display:\${styles[4]}\">
\t\t\t\t\t\t\${data[i].position.pos_name+data[i].position.pos_num}
\t\t\t\t\t</td>
\t\t\t\t\t//纳税人类型
\t\t\t\t\t<td class=\"center\"  data-num=\"4\" style=\"display:\${styles[5]}\">
\t\t\t\t\t\t\${tax_type}
\t\t\t\t\t</td>
\t\t\t\t\t//服务周期
\t\t\t\t\t<td class=\"center\" data-num=\"5\" style=\"display:\${styles[6]}\">\${cycle}</td>
\t\t\t\t\t//逾期
\t\t\t\t\t<td class=\"center\" data-num=\"6\" style=\"display:\${styles[7]}\">\${data[i]['num']}</td>
\t\t\t\t\t//截至月份
\t\t\t\t\t<td class=\"center\" data-num=\"7\" style=\"display:\${styles[8]}\">\${data[i]['maxTime']}</td>
\t\t\t\t\t//负责人
\t\t\t\t\t<td class=\"center\" data-num=\"8\" style=\"display:\${styles[9]}\">\${fuze.join(',') || \"\"}</td>
\t\t\t\t\t\${td_html}
\t\t\t\t</tr>`;

\t\t\t\t//置空数据，以便下一次循环
\t\t\t\t_data = {};
\t\t\t\tfuze_ids = [];
\t\t\t\tfuze = [];
\t\t\t\tcycle = [];
\t\t\t\tservice_cylce = [];
\t\t\t};

\t\t\t\$('#dataList').html(html);
\t\t\tcustom.get_custom_info();
\t\t\tcustom.showReamrk();
\t\t\tcs.sc('收单', function(res) {
\t\t\t\tgetEntireList(1)
\t\t\t});
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();

\t\t\t/* \$('#dataList').find('td[get_money]').each(function() {
\t\t\t \tif(\$(this).attr('get_money') > 0) {
\t\t\t \t\t\$(this).css('background-color', '#00cc22')
\t\t\t \t}
\t\t\t })

\t\t\t \$(\"#dataList td[data-status='0']\").mouseover(function() {
\t\t\t \t\$(this).children('a').css('display', 'inline-block');
\t\t\t })

\t\t\t \$(\"#dataList td[data-status='0']\").mouseout(function() {
\t\t\t \t\$(this).children('a').css('display', 'none');
\t\t\t })*/

\t\t\tvar statu = cs.getNodes([92, 289], true);

\t\t\t//点击月份下td的弹出层 交接清单表
\t\t\t\$('#dataList td[data-month]').click(function() {
\t\t\t\t//当前登录用户id
\t\t\t\tvar uid = ykp.getCookie('uid');

\t\t\t\t//当前用户非负责人时，提示
\t\t\t\tif(\$(this).attr('fuze_id') != uid) {
\t\t\t\t\tykp.prompt(\"非负责人，不可操作\");
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\t//作废未收款不能添加
\t\t\t\tif(\$(this).attr('get_money') == -1 && \$(this).attr('hang_statu') == '4' || \$(this).attr('hang_statu') == '3') {
\t\t\t\t\tykp.prompt('订单已解约，不能编辑');
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t//合同状态非已激活时，提示
\t\t\t\tif(\$(this).attr('hang_statu') != '1') {
\t\t\t\t\tvar contract_status = ['合同未激活', '合同已激活', '合同已挂起', '合同已结束', '合同已作废'];
\t\t\t\t\tykp.prompt(contract_status[\$(this).attr('hang_statu')] || \"不可操作\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t//服务审批状态非未审批、审批失败时，提示
\t\t\t\tif(\$(this).attr('data-status') != '0' && \$(this).attr('data-status') != '3') {
\t\t\t\t\tvar approve_status = {
\t\t\t\t\t\t'1': '审批中，不可操作',
\t\t\t\t\t\t'2': '审批成功，不可操作'
\t\t\t\t\t};
\t\t\t\t\tykp.prompt(approve_status[\$(this).attr('data-status')] || \"不可操作\");
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\t//合同id
\t\t\t\tvar contract_id = \$(this).attr('contract_id');

\t\t\t\t//公司id
\t\t\t\tvar customer_id = \$(this).parents('tr').find('[data-num=\"2\"]').text().trim();
\t\t\t\tvar cid = \$(this).parents('tr').find('[data-num=\"1\"]').attr('data-cid');
\t\t\t\tvar _td = \$(this);

\t\t\t\tvar trIndex = \$(this).parents('tr').find('td').index(\$(this));

\t\t\t\tvar thAry = \$('#dynamic-table thead th')[trIndex].innerHTML;

\t\t\t\t// //保存交接列表时，提交的数据
\t\t\t\t// var datas = {year_month_id:\$(this).attr('data-month')};

\t\t\t\t\$('.getList-popup').find('#month').text(thAry);

\t\t\t\tshowMark('.getList-popup');

\t\t\t\t\$('#templateCon').data('flag', '1');
\t\t\t\t\$('#templateCon').css('width', '502px');
\t\t\t\t\$('#templateCon .close_get').unbind('click').click(function() {
\t\t\t\t\t\$('#templateCon').css('width', 'auto');
\t\t\t\t\t\$('#templateCon').data('flag', '2');
\t\t\t\t\tcs.close();
\t\t\t\t});
\t\t\t\tvar custom_name = \$(this).parent().attr('data-name');
\t\t\t\t\$('#showBox .title').text(custom_name + '(收单交接表)');
\t\t\t\t\$('#templateCon #sendMsg').attr('customer_id', customer_id);

\t\t\t\tlayui.use('element', function(data) {
\t\t\t\t\tvar element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块
\t\t\t\t\telement.init('collapse');
\t\t\t\t});

\t\t\t\t//获取凭证 和 服务月份
\t\t\t\tgetVoucherAndServiceMonth(contract_id);

\t\t\t\t//获取收单方式
\t\t\t\tgetway();

\t\t\t\t//获取物品信息
\t\t\t\tvar goods = getGoods();
\t\t\t\t// var thistd = \$(this);
\t\t\t\t// var ser_id = \$(this).attr('data-id');
\t\t\t\t// var trIndex = \$(this).parents('tr').find('td').index(\$(this));
\t\t\t\t// var thAry = \$('#dynamic-table thead th')[trIndex].innerHTML;
\t\t\t\t// var trindex = \$(this).parents('tr').index();
\t\t\t\t// var year_month = \$(this).attr('data-month')+'';
\t\t\t\t// //当前月完整日期
\t\t\t\t// year_month = year_month.substring(0,4)+'-'+year_month.substring(4)+'-01';
\t\t\t\t// //拿到服务周期，判断是每月、季度、本年、一年
\t\t\t\t// var payment_cycle = \$(this).parent().attr('payment_cycle');
\t\t\t\t// //拿到选中月份
\t\t\t\t// var month = \$(this).attr('data-num')-6;
\t\t\t\t// var month_ids = [];
\t\t\t\t// var start_time = \$(this).parent().attr('start_time');
\t\t\t\t// var end_time = \$(this).parent().attr('end_time');
\t\t\t\t// var harf_time = (end_time-86400*15- start_time)/2;
\t\t\t\t// var start_month=cs.getNowTime(start_time).split('-')[1];//开始月份
\t\t\t\t// var end_month = cs.getNowTime(end_time).split('-')[1];//结束月份
\t\t\t\t// var start_year=cs.getNowTime(start_time).split('-')[0];
\t\t\t\t// var end_year = cs.getNowTime(end_time).split('-')[0];
\t\t\t\t// var datas ={};

\t\t\t\t// if (payment_cycle==3) {
\t\t\t\t// \t//得到季度数组
\t\t\t\t// \tvar data_mon = getArrays(month,3);
\t\t\t\t// \t//serviceid数组
\t\t\t\t// \t\tfor(var i in data_mon){
\t\t\t\t// \t\t\tvar id=\$(thistd).parent().find('[data-num='+(data_mon[i]+6)+']').attr('data-month');
\t\t\t\t// \t\t\tif (id!='') {
\t\t\t\t// \t\t\t\tmonth_ids.push(id);
\t\t\t\t// \t\t\t}
\t\t\t\t// \t\t}
\t\t\t\t// \t\tdatas['year_month_id'] = month_ids.join(',');
\t\t\t\t// \t//半年的
\t\t\t\t// \t} else if (payment_cycle==6) {
\t\t\t\t// \t\t\t//如果是前6个月
\t\t\t\t// \t\tif((Date.parse(new Date(year_month))/1000-start_time) < harf_time){
\t\t\t\t// \t\t\t//如果开始时间小于等于6月
\t\t\t\t// \t\t\tif(cs.getNowTime(start_time).split('-')[1]<=6){
\t\t\t\t// \t\t\t\tfor(var i = 0;i<6;i++){
\t\t\t\t// \t\t\t\t\tvar mon=(parseInt(start_month)+i)<10?'0'+''+(parseInt(start_month)+i):parseInt(start_month)+i;
\t\t\t\t// \t\t\t\t\t\tmonth_ids.push(start_year+''+mon);
\t\t\t\t// \t\t\t\t}
\t\t\t\t// \t\t\t}else{//如果开始时间大于6月
\t\t\t\t// \t\t\t\tvar k=1;
\t\t\t\t// \t\t\t\tfor(var i = 0;i<6;i++) {
\t\t\t\t// \t\t\t\t\tvar mon;
\t\t\t\t// \t\t\t\t\tif (parseInt(start_month)+i<=12) {
\t\t\t\t// \t\t\t\t\t\tmon=(parseInt(start_month)+i)<10?'0'+''+(parseInt(start_month)+i):(parseInt(start_month)+i);
\t\t\t\t// \t\t\t\t\t\tmonth_ids.push(start_year+''+mon);
\t\t\t\t// \t\t\t\t\t} else {
\t\t\t\t// \t\t\t\t\t\tmon=k<10?'0'+''+k:k;
\t\t\t\t// \t\t\t\t\t\tmonth_ids.push((parseInt(start_year)+1)+''+mon);
\t\t\t\t// \t\t\t\t\t\tk++;
\t\t\t\t// \t\t\t\t\t}
\t\t\t\t// \t\t\t\t}
\t\t\t\t// \t\t\t}
\t\t\t\t// \t\t\t//如果是后6个月
\t\t\t\t// \t\t} else {
\t\t\t\t// \t\t\t//如果结束时间大于6月
\t\t\t\t// \t\t\tif(cs.getNowTime(end_time).split('-')[1] >= 6){
\t\t\t\t// \t\t\t\tfor(var i = 0;i<6;i++){
\t\t\t\t// \t\t\t\t\tvar mon=(parseInt(end_month)-i)<10?'0'+''+(parseInt(end_month)-i):parseInt(end_month)-i;
\t\t\t\t// \t\t\t\t\t\tmonth_ids.push(end_year+''+mon);
\t\t\t\t// \t\t\t\t}
\t\t\t\t// \t\t\t}else{//如果结束时间小于6月
\t\t\t\t// \t\t\t\tvar k = 12;
\t\t\t\t// \t\t\t\tfor(var i = 0;i<6;i++){
\t\t\t\t// \t\t\t\t\tvar mon;
\t\t\t\t// \t\t\t\t\tif (parseInt(end_month)-i>=1) {
\t\t\t\t// \t\t\t\t\t\tmon=(parseInt(end_month)-i)<10?'0'+''+(parseInt(end_month)-i):(parseInt(end_month)-i);
\t\t\t\t// \t\t\t\t\t\tmonth_ids.push(end_year+''+mon);
\t\t\t\t// \t\t\t\t\t}else{
\t\t\t\t// \t\t\t\t\t\tmon=k<10?'0'+''+k:k;
\t\t\t\t// \t\t\t\t\t\tmonth_ids.push((parseInt(end_year)+1)+''+mon);
\t\t\t\t// \t\t\t\t\t\tk--;
\t\t\t\t// \t\t\t\t\t}
\t\t\t\t// \t\t\t\t}
\t\t\t\t// \t\t\t}
\t\t\t\t// \t\tmonth_ids = month_ids.reverse();
\t\t\t\t// \t\t}
\t\t\t\t// \t\tdatas['year_month_id'] = month_ids.join(',');
\t\t\t\t// \t//一年的
\t\t\t\t// \t} else if (payment_cycle==12) {
\t\t\t\t// \t\tvar k = 1;
\t\t\t\t// \t\tfor(var i = 0; i <12;i++) {
\t\t\t\t// \t\t\tvar mon;
\t\t\t\t// \t\t\tif (parseInt(start_month)+i<=12) {
\t\t\t\t// \t\t\t\tmon=parseInt(start_month)+i<10?'0'+''+(parseInt(start_month)+i):parseInt(start_month)+i;
\t\t\t\t// \t\t\t\tmonth_ids.push(start_year+''+mon)
\t\t\t\t// \t\t\t}else{
\t\t\t\t// \t\t\t\tmon=k<10?'0'+''+k:k;
\t\t\t\t// \t\t\t\tmonth_ids.push((parseInt(start_year)+1)+''+mon)
\t\t\t\t// \t\t\t\tk++;
\t\t\t\t// \t\t\t}
\t\t\t\t// \t\t}
\t\t\t\t// \t\tdatas['year_month_id'] =month_ids.join(',') ;
\t\t\t\t// \t}

\t\t\t\t//切换交接表
\t\t\t\t\$('#templateCon .buttons button').click(function() {
\t\t\t\t\tvar index = \$(this).index();
\t\t\t\t\tif(index == 0) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).hasClass('active')) {
\t\t\t\t\t\t\$(this).removeClass('active');
\t\t\t\t\t\tvar _class = \$('#templateCon .connects-content>div').eq(index).find('table').attr('class');
\t\t\t\t\t\t\$('#templateCon .connects-content>.' + _class).remove();
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(this).addClass('active');
\t\t\t\t\t\tvar _table = \$('#templateCon .connects-content>div').eq(index).html();
\t\t\t\t\t\t_table = \$(_table).css('display', 'table');
\t\t\t\t\t\t\$('#templateCon .connects-content').append(_table);

\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tshowTicket();
\t\t\t\tshowCard();

\t\t\t\t//删除一行
\t\t\t\tfunction removeT() {
\t\t\t\t\t\$('.remove').click(function() {
\t\t\t\t\t\t\$(this).parents('tr').remove();
\t\t\t\t\t})
\t\t\t\t}

\t\t\t\t//票据交接列表添加一行
\t\t\t\tfunction showTicket() {
\t\t\t\t\t\$('#templateCon .addTicket').unbind('click').click(function() {
\t\t\t\t\t\tvar tr = `<tr>
\t\t\t\t\t\t<td><a href=\"javascript:;\" class=\"remove\">-</a></td><td>
\t\t\t\t\t\t<select class=\"goods\">
\t\t\t\t\t\t\${goods['PJ']}
\t\t\t\t\t\t</select></td><td><input type=\"number\" class=\"count\" value=\"0\"/></td><td><input type=\"number\" class=\"money\" value=\"0\"/></td></tr>`;
\t\t\t\t\t\t\$('#templateCon .connects-content>table>#ticketBody').append(tr);
\t\t\t\t\t\tremoveT();
\t\t\t\t\t})
\t\t\t\t}

\t\t\t\t//证件交接列表添加一行
\t\t\t\tfunction showCard() {
\t\t\t\t\t\$('#templateCon .addCard').unbind('click').click(function() {
\t\t\t\t\t\tvar tr1 = `<tr><td><a href=\"javascript:;\" class=\"remove\">-</a></td><td><select class=\"goods\">\${goods['ZJ']}
\t\t\t\t\t\t</select></td><td><input type=\"number\" class=\"count\" value=\"0\"/></td></tr>`;
\t\t\t\t\t\t\$('#templateCon .connects-content>table>#cardBody').append(tr1);
\t\t\t\t\t\tremoveT();
\t\t\t\t\t})
\t\t\t\t}

\t\t\t\tfunction sendMsg(cid, type,param) {
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_common/send_customer',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tcustomer_id: cid,
\t\t\t\t\t\t\ttype: type,
                            param:param
\t\t\t\t\t\t},
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tykp.prompt('短信发送成功！');
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t}
                \$(\"#temHeader\").width(\$(\"#showBox\").width()-47);
\t\t\t\t//保存
\t\t\t\tvar once = true;
\t\t\t\t\$('#templateCon .sure_button').click(function() {
\t\t\t\t\t//提交数据
\t\t\t\t\tvar postdata = {
\t\t\t\t\t\tcontract_id: contract_id
\t\t\t\t\t};

\t\t\t\t\t//收单方式
\t\t\t\t\tpostdata['data_type'] = \$('#templateCon [title=\"getway\"]').val();

\t\t\t\t\tif(postdata.data_type == 3) {
\t\t\t\t\t\t//快递信息
\t\t\t\t\t\tvar datae = {
\t\t\t\t\t\t\texpress: \$('#templateCon [title=\"express\"]').val().trim(),
\t\t\t\t\t\t\tnum: \$('#templateCon [title=\"expressnum\"]').val().trim(),
\t\t\t\t\t\t\tcost: \$('#templateCon [title=\"cost\"]').val().trim()
\t\t\t\t\t\t}
\t\t\t\t\t\tif(!datae['express'] || !datae['num'] || !datae['cost']) {
\t\t\t\t\t\t\tykp.prompt('请完善快递信息');
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\tpostdata['data'] = JSON.stringify(datae);
\t\t\t\t\t}

\t\t\t\t\t//收单数据集
\t\t\t\t\tvar getList_dataList = [];
\t\t\t\t\tvar pingz = true;
\t\t\t\t\t//凭证数据
\t\t\t\t\t\$('#templateCon .voucher [data-time]').each(function(i, e) {
\t\t\t\t\t\tif(!\$(this).prop('disabled') && \$(this).prop('checked')) {
                            pingz = false;
\t\t\t\t\t\t\tgetList_dataList.push({
\t\t\t\t\t\t\t\tgoods: \$(this).attr('data-time'),
\t\t\t\t\t\t\t\ttype: 1,
\t\t\t\t\t\t\t\tnumber: 1
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t\t//票据数据
\t\t\t\t\tvar piaoju = true;
\t\t\t\t\t\$('#templateCon .connects-content>table #ticketBody tr').each(function(res) {
\t\t\t\t\t    if(\$(this).find('.count').val() > 0){
                            piaoju = false;
\t\t\t\t\t\t}
\t\t\t\t\t\tgetList_dataList.push({
\t\t\t\t\t\t\tgoods: \$(this).find('.goods').val(),
\t\t\t\t\t\t\ttype: 2,
\t\t\t\t\t\t\tnumber: \$(this).find('.count').val()
\t\t\t\t\t\t});
\t\t\t\t\t});

\t\t\t\t\t//证件数据
\t\t\t\t\tvar zhengju = true;
\t\t\t\t\t\$('#templateCon .connects-content>table #cardBody tr').each(function(res) {
                        if(\$(this).find('.count').val() > 0){
                            zhengju = false;
                        }
\t\t\t\t\t\tgetList_dataList.push({
\t\t\t\t\t\t\tgoods: \$(this).find('.goods').val(),
\t\t\t\t\t\t\ttype: 3,
\t\t\t\t\t\t\tnumber: \$(this).find('.count').val()
\t\t\t\t\t\t});
\t\t\t\t\t});

\t\t\t\t\tif(getList_dataList.length <= 0) {
\t\t\t\t\t\tykp.prompt('请选择收单物品');
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\tpostdata['dataList'] = JSON.stringify(getList_dataList);

\t\t\t\t\t//服务月份
\t\t\t\t\tvar service_month = [];
\t\t\t\t\t\$('#templateCon .service_month [data-time]').each(function(i, e) {
\t\t\t\t\t\tif(!\$(this).prop('disabled') && \$(this).prop('checked')) {
\t\t\t\t\t\t\tservice_month.push(\$(this).attr('data-time'));
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tif(service_month.length <= 0) {
\t\t\t\t\t\tykp.prompt('请选择服务月份');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tpostdata['year_month_id'] = service_month.join(',');

\t\t\t\t\tvar is_send = false;
                    if(\$('#templateCon #sendMsg input:checked').val() == 1) {
                        is_send = true;
\t\t\t\t\t}
\t\t\t\t\tif(\$('#templateCon #remark1').val()) {
\t\t\t\t\t\tpostdata.remark = \$('#templateCon #remark1').val();
\t\t\t\t\t}
\t\t\t\t\tvar fileBox = \$('#templateCon #fileBox');
\t\t\t\t\tvar files = [];
\t\t\t\t\tif(fileBox.children().length > 0) {
\t\t\t\t\t\t\$('#templateCon #fileBox').find('a').each(function(i) {
\t\t\t\t\t\t\tfiles.push({
\t\t\t\t\t\t\t\tname: \$(this).text(),
\t\t\t\t\t\t\t\turl: \$(this).attr('href')
\t\t\t\t\t\t\t})
\t\t\t\t\t\t})

\t\t\t\t\t\tpostdata.files = JSON.stringify(files);
\t\t\t\t\t}
\t\t\t\t\tvar customer_id = \$('#templateCon #sendMsg').attr('customer_id');
\t\t\t\t\tpostdata.customer_id = cid;
                    if(pingz && piaoju && zhengju ){
                        getList_dataList.push({
                            goods: \"文件袋\",
                            type: 0,
                            number: 1
                        });
                        postdata['dataList'] = JSON.stringify(getList_dataList);
                    }
//\t\t\t\t\tvar param = {
//\t\t\t\t\t\tname: \$('#templateCon .name').text().trim(),
//\t\t\t\t\t\ttime: \$('#templateCon .name').attr('data-time'),
//\t\t\t\t\t\tuser: fzpeople
//\t\t\t\t\t}
\t\t\t\t\tif(once){
\t\t\t\t\t\tcloseMark();
\t\t\t\t\t\tonce = false;
\t\t\t\t\t\tykp.prompt('数据保存中...');
\t\t\t\t\t\tsetTimeout(function(){once = true},5000);
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_service/add_acquiring_new2',
\t\t\t\t\t\t\tmethods: 'post',
\t\t\t\t\t\t\tdata: postdata,
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tgetEntireList(1);
\t\t\t\t\t\t\t\tif(is_send) {
\t\t\t\t\t\t\t\t\t//sendMsg(cid, 1, param);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\t\t\t\$('#showBox').addClass('ishide');
\t\t\t\t\t\t\t\t//_td.find('label').addClass('fa fa-circle-o').attr('data-status', 1);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t})
\t\t\t});
\t\t}

\t\t//能量条形式控制
\t\t\$('.easy-pie-chart.percentage').each(function() {
\t\t\tvar \$box = \$(this).closest('.infobox');
\t\t\tvar barColor = \$(this).data('color') || (!\$box.hasClass('infobox-dark') ? \$box.css('color') : 'rgba(255,255,255,0.95)');
\t\t\tvar trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
\t\t\t\$(this).easyPieChart({
\t\t\t\tbarColor: barColor,
\t\t\t\ttrackColor: trackColor,
\t\t\t\tscaleColor: false,
\t\t\t\tlineCap: 'butt',
\t\t\t\tlineWidth: 5,
\t\t\t\tanimate: ace.vars['old_ie'] ? false : 1000
\t\t\t});
\t\t});

\t})
\t//导入企业
\t\$('#leading-in').change(function() {
\t\t//console.log(1);
\t\tvar file = this.files[0];
\t\tvar formData = new FormData();
\t\tformData.append('customer', file);
\t\t\$.ajax({
\t\t\turl: ykp.api_url + '/api/api_customer/upload_batch',
\t\t\ttype: 'POST',
\t\t\tcashe: false,
\t\t\tdata: formData,
\t\t\tprocessData: false,
\t\t\tcontentType: false,
\t\t\tdataType: 'json'
\t\t}).success(function(res) {
\t\t\tif(res.code != 200) {
\t\t\t\tykp.prompt(res.msg);
\t\t\t\treturn;
\t\t\t}

\t\t\tgetList();
\t\t});

\t\t// ykp.doAjax({
\t\t//     url:'/api/api_customer/upload_batch',
\t\t//     method:'post',
\t\t//     contentType:'multipart/form-data',
\t\t//     data:formData,
\t\t//     success:function(res){
\t\t//         getList();
\t\t//     }
\t\t// });
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/auditing/getList.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  635 => 612,  631 => 611,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	#dataList td[get_money] {*/
/* 		background-color: #dddddd;*/
/* 		box-shadow: 0px 0px 2px #f5f5f5 !important;*/
/* 	}*/
/* 	*/
/* 	#dataList td[get_money="0"] {*/
/* 		background-color: white;*/
/* 		box-shadow: 0px 0px 2px #f5f5f5 !important;*/
/* 	}*/
/* 	*/
/* 	#dataList td[get_money="1"] {*/
/* 		background-color: #00cc22;  */
/* 		box-shadow: 0px 0px 2px #f5f5f5 !important;*/
/* 	}*/
/* 	*/
/* 	#templateCon table {*/
/* 		margin-top: 15px;*/
/* 	}*/
/* 	*/
/* 	#right .row {*/
/* 		margin: 10px 0 0 0 !important;*/
/* 	}*/
/* 	*/
/* 	#templateCon .connects-content th,*/
/* 	#templateCon .connects-content td {*/
/* 		line-height: normal;*/
/* 		text-align: center;*/
/* 		padding: 5px;*/
/* 	}*/
/* 	*/
/* 	#templateCon .connects-content input {*/
/* 		/*line-height: normal;*/
/* 		text-align: center;*/
/* 		width: 88px;*//* */
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
/* 	#templateCon .connects-content a {*/
/* 		text-decoration: none;*/
/* 	}*/
/* 	*/
/* 	#heightsearch1 label {*/
/* 		width: 80px;*/
/* 		text-align: right;*/
/* 	}*/
/* 	*/
/* 	.infobox-blue2 {*/
/* 		text-align: center;*/
/* 	}*/
/* 	*/
/* 	.infobox>.infobox-data {*/
/* 		min-width: 80px;*/
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
/* 	.layui-colla-content {*/
/* 		padding: 10px;*/
/* 	}*/
/* 	/*.modal-backdrop.in{*/
/* 		z-index: 0;*/
/* 	}*//* */
/* */
/* </style>*/
/* */
/* <div class="widget-main" style="padding-bottom:0;">*/
/* 	<div class="row" style="position: relative;margin-left:0 !important;margin-right:0 !important;">*/
/* 		<div style="margin-top: 50px;  margin-left:0;width: 860px; padding: 0px;" class="row col-xs-12">*/
/* 			<div class="col-xs-12 infobox-container" style="padding: 0px; margin-left: -10px;">*/
/* 				<!-- #section:pages/dashboard.infobox -->*/
/* 				<div class="infobox infobox-blue2" style="color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;">*/
/* 					<div class="infobox-data" style="padding: 0px;">*/
/* 						<div class="infobox-content" style="text-align: center;">*/
/* 							本月目标*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="infobox infobox-blue2" style="color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;">*/
/* 					<div class="infobox-data" style="padding: 0px;">*/
/* 						<div class="infobox-content" style="text-align: center;">*/
/* 							新增任务*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="infobox infobox-blue2" style="color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;">*/
/* 					<div class="infobox-data" style="padding: 0px;">*/
/* 						<div class="infobox-content" style="text-align: center;">*/
/* 							逾期任务*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="infobox infobox-blue2" style="color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;">*/
/* 					<div class="infobox-data" style="padding: 0px;">*/
/* 						<div class="infobox-content" style="text-align: center;">*/
/* 							累计任务*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="infobox infobox-blue2">*/
/* 					<div class="infobox-progress">*/
/* 						<!-- #section:pages/dashboard.infobox.easypiechart -->*/
/* 						<div class="easy-pie-chart percentage" data-percent="0" data-size="50" style="height: 57px;width: 57px;line-height: 56px;">*/
/* 							<!-- //百分比 -->*/
/* 							<span class="percent" id="percent"></span>*/
/* 							<canvas height="57" width="57"></canvas>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="infobox-data" style="margin:3px 0 0 20px;">*/
/* 						<div class="infobox-content" id="isOk"> 已完成</div>*/
/* */
/* 						<div class="infobox-content" id="noOk">*/
/* 							未完成*/
/* 						</div>*/
/* 						<div class="infobox-content" id="noOk">*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="infobox infobox-blue2">*/
/* 					<div class="infobox-progress">*/
/* 						<!-- #section:pages/dashboard.infobox.easypiechart -->*/
/* 						<div class="easy-pie-chart percentage" data-percent="0" data-size="50" style="height: 57px; width: 57px; line-height: 56px;">*/
/* 							<span class="percent" id="percent1"></span>*/
/* 							<canvas height="57" width="57"></canvas></div>*/
/* 					</div>*/
/* */
/* 					<div class="infobox-data" style="margin:3px 0 0 20px;">*/
/* 						<div class="infobox-content" id="isOk">*/
/* 							已完成*/
/* 						</div>*/
/* */
/* 						<div class="infobox-content">*/
/* 							未完成*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="infobox infobox-blue2">*/
/* 					<div class="infobox-progress">*/
/* 						<!-- #section:pages/dashboard.infobox.easypiechart -->*/
/* 						<div class="easy-pie-chart percentage" data-percent="0" data-size="50" style="height: 57px; width: 57px; line-height: 56px;">*/
/* 							<span class="percent" id="percent2"></span>*/
/* 							<canvas height="57" width="57"></canvas></div>*/
/* 					</div>*/
/* */
/* 					<div class="infobox-data" style="margin:3px 0 0 20px;">*/
/* 						<div class="infobox-content" id="isOk">*/
/* 							已完成*/
/* 						</div>*/
/* */
/* 						<div class="infobox-content">*/
/* 							未完成*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="infobox infobox-blue2">*/
/* 					<div class="infobox-progress">*/
/* 						<!-- #section:pages/dashboard.infobox.easypiechart -->*/
/* 						<div class="easy-pie-chart percentage" data-percent="0" data-size="50" style="height: 57px; width: 57px; line-height: 56px;">*/
/* 							<span class="percent" id="percent2"></span>*/
/* 							<canvas height="57" width="57"></canvas></div>*/
/* 					</div>*/
/* */
/* 					<div class="infobox-data" style="margin:3px 0 0 20px;">*/
/* 						<div class="infobox-content" id="isOk">*/
/* 							已完成*/
/* 						</div>*/
/* 						<div class="infobox-content">*/
/* 							未完成*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 			<div style="clear:both;"></div>*/
/* 		</div>*/
/* 		<!--普通搜索-->*/
/* 		<div id="topTool" class="row col-xs-12" style="margin-left:0 !important;padding-left:0 !important;margin-top:20px;position:relative">*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px; margin-bottom:5px;">*/
/* 				<input type="text" pts=1 sear="customer_name" placeholder="企业名称" autofocus/>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px; margin-bottom:5px;">*/
/* 				<input type="text" pts=0 sear="khm_customer.customer_num" placeholder="客户编码" autofocus/>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<select style="width: 180px" pts=3 sear="jzm_service_info.fuze_id" class="advandced-search select2-hidden-accssible"  tabindex="-1" aria-hidden="true">*/
/* 						<option value="">负责人</option>*/
/* 					</select>*/
/* 				</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px; margin-bottom:5px;">*/
/* 				<button type="button" id="search" title="搜索" class="btn btn-info btn-sm">*/
/* 					<i class=" fa fa-search"></i>*/
/* 				</button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px; margin-bottom:5px;">*/
/* 				<button id="heightsearch" title="高级搜索" type="button" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/* 					<i class=" fa fa-filter"></i>*/
/* 				</button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px; margin-bottom:5px;">*/
/* 				<button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style=" background-color: #32CD32!important;">*/
/* 	                <i class=" fa fa-refresh"></i>*/
/* 	            </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" contentAuthority="91" style=" float: left;margin-right: 5px; margin-bottom:5px;">*/
/* 				<label type="button" id="mergeItem" title="导入" style="background-color: #1E9FFF !important; border-color: #1E9FFF;" class="btn btn-info btn-sm mergeItem" for="leading-in">*/
/*                     <i class="fa fa-sign-in"></i>*/
/*             	</label>*/
/* 			</div>*/
/* 			<div class="col-sx-4" contentAuthority="289" style=" float: left; margin-right: 5px;">*/
/* 				<button type="button" title="分配负责人" id="moveToClue" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="moveToClue btn addBtn btn-info btn-sm position-relative">*/
/* 					<i class="fa fa-hand-o-right"></i>*/
/* 				</button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px; margin-bottom:5px;">*/
/* 				<div id="filterBtns" style="display:inline-block;width:290px;height: 36px">*/
/* 					<a href="javascript:void(0);" class="myFilter" style="line-height:32px;*/
/* 					background: #E6E6E6;" data-kind="0"> 查看全部 </a>*/
/* 					<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="1"> 我负责的 </a>*/
/* 					<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="2"> 我关注的 </a>*/
/* 					<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="3"> 我的下属 </a>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<!--高级搜索-->*/
/* 			<!-- <div id="heightsearch1" style="display: none;position: absolute;background: #f5f5f5;z-index: 2; overflow: auto; padding: 10px 0px;width:1018px;margin: 213px auto 10px -20px"> -->*/
/* 			<div id="heightsearch1" class="col-sx-12" style="margin-top:30px;position: absolute; background: #fff; z-index: 1041;padding: 20px 10px; display: none;">*/
/* 				<div class="row">*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>年份</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select style="width: 180px" gjs=5 sear="year" data-year="true"></select>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>月份</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select sear="month" gjs=5 style="width:180px;">*/
/* 							<option value=""> 请选择 </option>*/
/* 							<option value="01">1月</option>*/
/* 							<option value="02">2月</option>*/
/* 							<option value="03">3月</option>*/
/* 							<option value="04">4月</option>*/
/* 							<option value="05">5月</option>*/
/* 							<option value="06">6月</option>*/
/* 							<option value="07">7月</option>*/
/* 							<option value="08">8月</option>*/
/* 							<option value="09">9月</option>*/
/* 							<option value="10">10月</option>*/
/* 							<option value="11">11月</option>*/
/* 							<option value="11">12月</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>企业名称</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<input type="text" gjs=0 sear="khm_customer.name" />*/
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
/* 						<label>税务类型</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select gjs=0 sear="khm_customer.tax_type" data-type="gj" style="width:180px;">*/
/* 							<option value=""> 请选择 </option>*/
/* 							<option value="1"> 一般纳税人 </option>*/
/* 							<option value="2"> 小规模 </option>*/
/* 						</select>*/
/* 					</div>*/
/* */
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>负责人</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select style="margin-right: 12px !important;width: 180px" gjs=0 data-type="gj" sear="jzm_service_info.fuze_id" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 							<option value="">请选择</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>收款情况</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select gjs=0 data-type="gj" style="width:180px;" sear="jzm_service_info.get_money">*/
/* 							<option value=""> 请选择 </option>*/
/* 							<option value="1"> 已收款</option>*/
/* 							<option value="0"> 未收款</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>审批状态</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select gjs=0 style="width:180px;" data-type="gj" sear="jzm_service_info.status">*/
/* 							<option value=""> 请选择 </option>*/
/* 							<option value="0"> 未开始</option>*/
/* 							<option value="1"> 待审批</option>*/
/* 							<option value="2"> 已通过</option>*/
/* 							<option value="3"> 未通过</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style="clear:both;padding-top:10px;text-align:center;">*/
/* 						<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/* 							查询*/
/* 						</button>*/
/* 						<button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 		                       重置*/
/* 		                    </button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!--<button id="import" type="button" class="btn btn-info btn-sm" style="background-color: #fb9a47 !important;border-color:#fb9a47;">*/
/* 				导入*/
/* 			</button>-->*/
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row">*/
/* 	<div class="widget-body" style="padding: 0 20px;">*/
/* 		<!-- class="widget-main" -->*/
/* 		<div>*/
/* 			<div style="overflow-x:auto;" class="custom_table">*/
/* 				<table id="dynamic-table">*/
/* 					<thead>*/
/* 						<tr class="thColor">*/
/* 							<th>*/
/* 								<label class="pos-rel">*/
/* 								                                    <input type="checkbox" class="ace" onclick="checkAll(this.checked)"/>*/
/* 								                                    <span class="lbl"></span>*/
/* 								                                    </label>*/
/* 							</th>*/
/* 							<th data-num="1">企业名称</th>*/
/* 							<th data-num="20">*/
/* 								<span>任务等级</span>*/
/* 							</th>*/
/* 							<th data-num="2">*/
/* 								<span>客户编码</span>*/
/* 							</th>*/
/* */
/* 							<th data-num="3">*/
/* 								<span>仓位编码</span>*/
/* 							</th>*/
/* 							<th data-num="4">税务类型</th>*/
/* 							<th data-num="5">服务周期</th>*/
/* 							<th data-num="6">逾期</th>*/
/* 							<th data-num="7">截止月份</th>*/
/* 							<th data-num="8">负责人</th>*/
/* 							<th data-num="9" class="month"></th>*/
/* 							<th data-num="10" class="month"></th>*/
/* 							<th data-num="11" class="month"></th>*/
/* 							<th data-num="12" class="month"></th>*/
/* 							<th data-num="13" class="month"></th>*/
/* 							<th data-num="14" class="month"></th>*/
/* 							<th data-num="15" class="month"></th>*/
/* 							<th data-num="16" class="month"></th>*/
/* 							<th data-num="17" class="month"></th>*/
/* 							<th data-num="18" class="month"></th>*/
/* 							<th data-num="19" class="month"></th>*/
/* 							<th data-num="20" class="month"></th>*/
/* 						</tr>*/
/* 					</thead>*/
/* */
/* 					<tbody id="dataList">*/
/* */
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/* 			<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 				<div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
/* 				<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 				<div id="pageBar" class="pagination"></div>*/
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
/* 	</div>*/
/* </div>*/
/* */
/* <div class="getList-popup" style="display:none;">*/
/* 	<div class="layui-collapse" lay-filter="test" style="margin: 10px 0;">*/
/* 		<div class="layui-colla-item">*/
/* 			<h2 class="layui-colla-title">收单信息</h2>*/
/* 			<div class="layui-colla-content">*/
/* 				<div id="get_way" style="margin-top: 15px;">*/
/* */
/* 					<label style="width: 50px">服务方式</label>*/
/* 					<select title="getway">*/
/* 						<option value="1">外勤上门</option>*/
/* 						<option value="2">客户上门</option>*/
/* 						<option value="3">快递物流</option>*/
/* 					</select>*/
/* 				</div>*/
/* */
/* 				<div id="express" style="display:none">*/
/* 					<div style="margin-top:15px;">*/
/* 						<label style="width: 50px">快递公司</label>*/
/* 						<input title="express" />*/
/* 						<label style="width: 50px">快递单号</label>*/
/* 						<input title="expressnum" />*/
/* 					</div>*/
/* 					<div style="margin-top:15px;">*/
/* 						<label style="width: 50px">快递费用</label>*/
/* 						<input title="cost" type="number" />*/
/* 					</div>*/
/* 					<div class="" style="padding: 2px;">*/
/* 						<div id="fileBox">*/
/* */
/* 						</div>*/
/* 						<div id="uploadBox">*/
/* 							<button type="button" id="upload1" style="outline: none;background-color: #009688 !important; margin-top: 20px;" class="btn btn-info btn-sm position-relative">*/
/* 			                        上传文件*/
/* 			        	</button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="sendMsg" customer_id="" style="height: 30px;line-height: 40px">*/
/* 					<label style="margin-left:-40px">是否发送短信：</label>*/
/* 					<input type="radio" value="1" name="is_send">是*/
/* 					<input type="radio" value="2" name="is_send" checked="true">否*/
/* 				</div>*/
/* */
/* 				<div class="service_month" style="padding:15px 0;">*/
/* 					<label style="float: left;margin-right: 5px;width:25px;">月份</label>*/
/* 					<div style="display: inline-block;width:472px;" class="voucher_div">*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 		<div class="layui-colla-item">*/
/* 			<h2 class="layui-colla-title">记账凭证</h2>*/
/* 			<div class="layui-colla-content">*/
/* 				<div class="voucher">*/
/* 					<label style="float: left;margin-right: 5px;width:25px;"></label>*/
/* 					<div style="display: inline-block;width:472px;" class="voucher_div">*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="layui-colla-item">*/
/* 			<h2 class="layui-colla-title">发票单据</h2>*/
/* 			<div class="layui-colla-content">*/
/* 				<div class="connects-content">*/
/* 					<table class="bill" style="">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th>操作</th>*/
/* 								<th>票据类别</th>*/
/* 								<th>数量(张)</th>*/
/* 								<th>金额(元)</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody id="ticketBody">*/
/* 							<tr>*/
/* 								<td>*/
/* 									<a href="javascript:;" class="addTicket">+</a>*/
/* 								</td>*/
/* 								<td>*/
/* 									<select class="goods">*/
/* */
/* 									</select>*/
/* 								</td>*/
/* 								<td>*/
/* 									<input type="number" class="count" value="0" />*/
/* 								</td>*/
/* 								<td>*/
/* 									<input type="number" class="money" value="0" />*/
/* 								</td>*/
/* 							</tr>*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 		<div class="layui-colla-item">*/
/* 			<h2 class="layui-colla-title">证件资料</h2>*/
/* 			<div class="layui-colla-content">*/
/* 				<div class="connects-content">*/
/* 					<table class="certificate" style="">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th>操作</th>*/
/* 								<th>证件名称</th>*/
/* 								<th>数量(个)</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody id="cardBody">*/
/* 							<tr>*/
/* 								<td>*/
/* 									<a href="javascript:;" class="addCard">+</a>*/
/* 								</td>*/
/* 								<td>*/
/* 									<select class="goods">*/
/* */
/* 									</select>*/
/* 								</td>*/
/* 								<td>*/
/* 									<input type="number" class="count" value="0" />*/
/* 								</td>*/
/* 							</tr>*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<!--<div style="margin-top:20px;margin-bottom:20px;" class="buttons">*/
/* 		<button class="btn btn-info btn-sm active">记账凭证</button>*/
/* 		<button class="btn btn-info btn-sm">发票票据</button>*/
/* 		<button class="btn btn-info btn-sm">证件资料</button>*/
/* 	</div>*/
/* */
/* 	<div class="connects-content">*/
/* */
/* 		<div>*/
/* */
/* 		</div>*/
/* 		<div>*/
/* 			*/
/* 		</div>*/
/* */
/* 	</div>-->*/
/* */
/* 	<div class="form_data">*/
/* 		<label style="float:left; width: auto;"> 备注： </label>*/
/* 		<textarea style="width:calc(100% - 77px);margin-left:5px;padding:5px;" id="remark1"></textarea>*/
/* 	</div>*/
/* 	<div style="text-align:center;margin-top:15px;">*/
/* 		<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* 		<button class="sure_button add btn btn-info btn-sm">*/
/* 					保存*/
/* 				</button>*/
/* 	</div>*/
/* </div>*/
/* </div>*/
/* */
/* <div class="label_popup" id="export" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 	<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd; box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 		<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 			<span style="display: inline-block;">导入收单</span>*/
/* 			<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 		</div>*/
/* 		<div>*/
/* 		</div>*/
/* 		<div style="padding: 10px 50px;">*/
/* 			<input type="file" style="margin: auto;" id="efile" class="efile"/>*/
/* 			<!--<input type="file" width="200px" style="margin: auto;" id="efile1" />-->*/
/* 		</div>*/
/* 		<div style="padding:15px;text-align:right;">*/
/* 			<button id="ghItem" class=" btn">收单模板</button>*/
/* 			<button class="btn btn-info  submit" style="padding: 6px; border-radius: 0px;">保存</button>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% include 'admin/customerDetail.html' %} {% include 'admin/mark.html' %}*/
/* </div>*/
/* <!-- /.widget-main -->*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* <script>*/
/* 	jQuery(function($) {*/
/* 		cs.getNodes([91, 289]);*/
/* */
/* 		var pagesize = 10;*/
/* 		var employees = {};*/
/* 		var filter = '';*/
/* 		var order = "";*/
/* 		var param = {*/
/* 			aid: ykp.getCookie("aid"),*/
/* 			time: ykp.getCookie("time")*/
/* 		}*/
/* 		var month2 = "";*/
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_service/service_list',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: filter,*/
/* 				limit: pagesize,*/
/* 				type: 1*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '#pageBar'*/
/* 			},*/
/* 			initOrder: 'khm_customer.id',*/
/* 			defaultOrder: order,*/
/* 			contentId: "#dataList",*/
/* 			params: [{*/
/* 				id: "#dynamic-table",*/
/* 				field: ["", "khm_customer.name","maxLv", "customer_num", "pos_name", "khm_customer.tax_type",*/
/* 					"htm_contract.payment_cycle", "","maxTime", "jzm_service_info.fuze_id"*/
/* 				]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* */
/* 		cs.setFuze({*/
/* 			conId: "#dataList",*/
/* 			type: "1",*/
/* 			url: "/api/api_service/transfer_user",*/
/* 			fun: function() {*/
/* 				getEntireList();*/
/* 			}*/
/* 		});*/
/* */
/* 		if(param.time != '' && param.time != undefined) {*/
/* 			var timestamp = ''; //条件*/
/* 			var today = new Date().setHours(0, 0, 0, 0) / 1000; //今天零点的时间戳*/
/* 			var day_1 = cs.getNowTime(Date.parse(new Date()) / 1000).substr(-2) - 1; //距离本月1号有多少天*/
/* 			var lastmonthday_1 = cs.getNowTime(Date.parse(new Date()) / 1000);*/
/* 			var newday = lastmonthday_1.substring(0, 4) + '-' + (lastmonthday_1.substring(5, 7) - 1) + '-01';*/
/* 			if(lastmonthday_1.substring(5, 7) == 1) {*/
/* 				newday = (lastmonthday_1.substring(0, 4) - 1) + '-12-01';*/
/* 			}*/
/* 			var newdaytime = Date.parse(new Date(newday)) / 1000; //上个月1号的时间戳*/
/* 			switch(param.time) {*/
/* 				case '1':*/
/* 					timestamp = `jzm_service_info.com_time>${today}`;*/
/* 					break;*/
/* 				case '2':*/
/* 					timestamp = `jzm_service_info.com_time<${today} and jzm_service_info.com_time>${today-86400}`;*/
/* 					break;*/
/* 				case '3':*/
/* 					timestamp = `jzm_service_info.com_time>${today-86400*6}`;*/
/* 					break;*/
/* 				case '4':*/
/* 					timestamp = `jzm_service_info.com_time>${today-86400*29}`;*/
/* 					break;*/
/* 				case '5':*/
/* 					timestamp = `jzm_service_info.com_time>${today-86400*day_1}`;*/
/* 					break;*/
/* 				case '6':*/
/* 					timestamp = `jzm_service_info.com_time<${today-86400*day_1} and jzm_service_info.com_time>${newdaytime}`;*/
/* 					break;*/
/* 			}*/
/* 			var where = ` ${timestamp}`;*/
/* 			var data = {*/
/* 				"type": 1,*/
/* 				"page_size": pagesize,*/
/* 				"where": where*/
/* 			}*/
/* 			if(param.aid != '' || param.aid != undefined) {*/
/* 				data['staff_name'] = param.aid;*/
/* 			}*/
/* 			getEntireList_2(data);*/
/* 			ykp.setCookie("aid", "", (1 / 24));*/
/* 			ykp.setCookie("time", "", (1 / 24));*/
/* 		} else if(ykp.getCookie('detailsId') != undefined && ykp.getCookie('detailsId') != '') {*/
/* 			var id = ykp.getCookie('detailsId');*/
/* 			var data = {*/
/* 				"type": 1,*/
/* 				"page_size": pagesize,*/
/* 				"where": 'htm_contract.id=' + id*/
/* 			}*/
/* 			getEntireList_2(data);*/
/* 			ykp.setCookie("detailsId", '', (1 / 24));*/
/* 		} else {*/
/* 			//获取列表数据*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getEntireList(1);*/
/* 		}*/
/* */
/* 		$('#filterBtns a').mouseover(function() {*/
/* 			$(this).addClass('over');*/
/* 		})*/
/* 		$('#filterBtns a').mouseout(function() {*/
/* 			$(this).removeClass('over');*/
/* 		})*/
/* */
/* 		$('.myFilter').click(function() {*/
/* 			if(!$(this).hasClass('clc')) {*/
/* 				$(this).addClass('clc').siblings().removeClass('clc');*/
/* 			}*/
/* 			var user = JSON.parse(ykp.getCookie('userinfo'));*/
/* 			var data = {*/
/* 				"type": 1,*/
/* 				"page_size": pagesize,*/
/* 				'page': 1*/
/* 			};*/
/* 			var filter_ = $(this).attr('data-kind');*/
/* 			if(filter_ == '0') {*/
/* 				getEntireList(1);*/
/* 				return;*/
/* 			}*/
/* 			//我负责的*/
/* 			if(filter_ == '1') {*/
/* 				data['staff_name'] = user.name;*/
/* 			}*/
/* 			//我关注的*/
/* 			if(filter_ == '2') {*/
/* 				data['relation'] = 'helloworld';*/
/* 			}*/
/* 			//我的下属*/
/* 			if(filter_ == '3') {*/
/* 				//data['where'] = 'bmm_employees.up_user = ' + user.id;*/
/* 				data.up_user = user.id;*/
/* 			}*/
/* 			filter = data['where'];*/
/* 			getEntireList_2(data);*/
/* 		})*/
/* */
/* 		/*var data = {*/
/* 				"type": 1,*/
/* 				"page_size": pagesize,*/
/* 				"order":order,*/
/* 				"filter": 'jzm_service_info.id='+847*/
/* 			}*/
/* 			getEntireList_2();*//* */
/* */
/* 		function getEntireList_2(data) {*/
/*             //普通搜索*/
/* 			search();*/
/* 			//高级搜索*/
/* 			dohSearch();*/
/* 			//顶部chart*/
/* 			cs.getChart(1, '', data);*/
/*             ykp.list({*/
/* 				url: '/api/api_service/service_list',*/
/* 				methods: 'post',*/
/* 				data: data,*/
/* 				pageBar: {*/
/* 					id: '#pageBar',*/
/* 				},*/
/* 				loadList: function(res) {*/
/*                     //生成月份表头*/
/* 					generateMonthTh($('#dynamic-table .thColor .month'), res['data']['months']);*/
/*                     if(res.data.items == "" || res.data == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt("暂无数据");*/
/* 						}, 1000);*/
/* 						$('#dataList').html('<tr><td colspan="30" style="color:#7d7d7d;text-align:center !important;">暂无数据</td></tr>');*/
/* 						return;*/
/* 					} else {*/
/* 						addList(res);*/
/* 					}*/
/* */
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//获取物品信息*/
/* 		function getGoods() {*/
/* 			var goods = {};*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_accountancies/list_goods',*/
/* 				method: 'post',*/
/* 				async: false,*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
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
/* 				}*/
/* 			})*/
/* 			return goods;*/
/* 		}*/
/* */
/* 		$('#flush').click(function() {*/
/* 			filter = '';*/
/* 			ykp.setCookie('where','');*/
/* 			$('[sear="customer_name"]').val('');*/
/* 			$('[sear="khm_customer.customer_num"]').val('');*/
/* 			$('[sear="jzm_service_info.fuze_id"]').val('').trigger('change');*/
/* 			getEntireList();*/
/* 		})*/
/* */
/* 		$("#dataList tr td get_money").mouseover(function() {*/
/* 			$(this).css("background-color", "red");*/
/* 		});*/
/* */
/* 		cs.getAllCw(function(option) {*/
/* 			$('#heightsearch1 .cw').html(option);*/
/* 			$('#heightsearch1 .cw').select2({*/
/* 				allowClear: true*/
/* 			})*/
/* 		})*/
/* */
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
/* 				for(var i in data) {*/
/* 					if(data[i]['name']) {*/
/* 						employees[data[i]['id']] = data[i]['name'];*/
/* 						$('.advandced-search').append(new Option(data[i]['name'], data[i]['id']));*/
/* 					}*/
/* 				}*/
/* 				$('.advandced-search').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* 			}*/
/* 		});*/
/* */
/* 		//高级搜索*/
/* 		cs.showHeightSearch('#heightsearch', '#heightsearch1');*/
/* */
/* 		function search() {*/
/* 			var data = {*/
/* 				url: '/api/api_service/service_list',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					"page_size": pagesize,*/
/* 					"type": 1,				*/
/* 				}*/
/* 			}*/
/* 			cs.doSearch('#search', data, 'where', false, function(res, _filter) {*/
/* 				filter = _filter;*/
/* 				//生成月份表头*/
/* 				generateMonthTh($('#dynamic-table .thColor .month'), res['data']['months']);*/
/* */
/* 				filter = _filter;*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt("暂无数据");*/
/* 					}, 1000);*/
/* 					$('#dataList').html('<tr><td colspan="30" style="color:#7d7d7d;text-align:center !important;">暂无数据</td></tr>');*/
/* 					return false;*/
/* 				} else {*/
/* 					addList(res);*/
/* 				}*/
/* 			}, '', {*/
/* 				url: "/api/api_service/assistant_list_new "*/
/* 			})*/
/* 		}*/
/* */
/* 		function dohSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_service/service_list',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					"page_size": pagesize,*/
/* 					"type": 1,*/
/* 					order:order,*/
/* 				}*/
/* 			}*/
/* */
/* 			cs.hSearch('#search1', data, 'where', false, function(res, _filter, month) {*/
/* 				filter = _filter;*/
/* 				month2 = month;*/
/* 				//生成月份表头*/
/* 				generateMonthTh($('#dynamic-table .thColor .month'), res['data']['months']);*/
/* */
/* 				$('.in').removeClass('modal-backdrop');*/
/* 				$("#heightsearch1").slideUp();*/
/* 				$("#heightsearch").removeClass('active');*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt("暂无数据");*/
/* 					}, 1000);*/
/* 					$('#dataList').html('<tr><td colspan="30" style="color:#7d7d7d;text-align:center !important;">暂时没有记录</td></tr>');*/
/* 					return false;*/
/* 				}else{*/
/* 				addList(res);	*/
/* 				}*/
/* 				*/
/* 			}, '', {*/
/* 				url: "/api/api_service/assistant_list_new "*/
/* 			})*/
/* 		}*/
/* */
/* 		var data = {*/
/* 			url: "/api/api_service/serviceExport",*/
/* 			type: '1',*/
/* 			title: '收单模板'*/
/* 		}*/
/* 		*/
/* 		cs.jzexport(data, function(res) {*/
/* 		setTimeout(function(){*/
/* 					ykp.prompt("上传成功");*/
/* 						},1000)*/
/* 			*/
/* 			getEntireList(1);*/
/* 			$('.label_popup').hide();*/
/* 		})*/
/* */
/* 		$('#changePageNum').change(function() {*/
/* 			pagesize = $(this).val();*/
/* 			ykp.setCookie('page_size',pagesize);*/
/* 			getEntireList(1);*/
/* 		})*/
/* */
/* 		//生成月份表头：el 所有月份表头，months:开始、结束月份*/
/* 		function generateMonthTh(el, months) {*/
/* 		    if(!months){*/
/* 		        return;*/
/* 			}*/
/* 			var start = {*/
/* 				year: parseInt(months['start'].substring(0, 4)),*/
/* 				month: parseInt(months['start'].substring(4))*/
/* 			};*/
/* 			var end = {*/
/* 				year: parseInt(months['end'].substring(0, 4))*/
/* 			};*/
/* */
/* 			var start_month;*/
/* 			el.each(function(i, e) {*/
/* 				start_month = i + start['month'];*/
/* 				if(start_month > 12) {*/
/* 					start_month = start_month - 12;*/
/* 					$(this).text(end['year'] + '' + (start_month < 10 ? '0' + start_month : start_month)).attr('month', end['year'] + '' + (start_month < 10 ? '0' + start_month : start_month));*/
/* 					return true;*/
/* 				}*/
/* 				$(this).text(start['year'] + '' + (start_month < 10 ? '0' + start_month : start_month)).attr('month', start['year'] + '' + (start_month < 10 ? '0' + start_month : start_month));*/
/* 			});*/
/* */
/* 			//自定义列表*/
/*             if($('#custom').length < 1) {*/
/*                 console.log(55);*/
/*                 cs.custorm_check('#dynamic-table', '#dataList', true);*/
/*             }*/
/* */
/*         };*/
/* */
/* 		function getEntireList(curPage) {*/
/* 			//普通搜索*/
/* 			search();*/
/* 			//高级搜索*/
/* 			dohSearch();*/
/* 			//顶部chart*/
/* 			var chartData = {*/
/* 				"type": 1,*/
/* 				"page": curPage,*/
/* 				"page_size": pagesize,*/
/* 				filter: filter,*/
/* 				where: filter*/
/* 				//				month2:month2*/
/* 			};*/
/* 			if(month2) {*/
/* 				chartData.month2 = month2;*/
/* 			}*/
/* 			cs.getChart(1, '', chartData);*/
/* */
/* 			ykp.list({*/
/* 				url: '/api/api_service/service_list',*/
/* 				method: 'post',*/
/* 				data: chartData,*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					//生成月份表头*/
/* 					generateMonthTh($('#dynamic-table .thColor .month'), res['data']['months']);*/
/*                     if(res.data.items == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt("暂无数据");*/
/* 						}, 1000);*/
/* 						$('#dataList').html('<tr><td colspan="30" style="color:#7d7d7d;text-align:center !important;">暂无数据</td></tr>');*/
/* 						return;*/
/* 					}*/
/* 					addList(res);*/
/* 				}*/
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
/* 		function getArrays(month, num) {*/
/* 			var yue = month % num;*/
/* 			var datas = [];*/
/* 			if(yue != 0) {*/
/* 				for(var i = 0; i < yue - 1; i++) {*/
/* 					datas.push(--month);*/
/* 					month++;*/
/* 				}*/
/* 				datas.push(month);*/
/* 				for(var i = yue; i < 3; i++) {*/
/* 					datas.push(++month);*/
/* 				}*/
/* 			} else {*/
/* 				for(var i = 0; i < 3; i++) {*/
/* 					datas.push(month - num + 1);*/
/* 					num--;*/
/* 				}*/
/* 			}*/
/* 			return datas;*/
/* 		}*/
/* */
/* 		//获取所有员工(负责人)*/
/* 		function allemp() {*/
/* 			var emps;*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_employees/grid',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: 999*/
/* 				},*/
/* 				async: false,*/
/* 				success: function(res) {*/
/* 					emps = res.data.items;*/
/* 				}*/
/* 			})*/
/* 			return emps;*/
/* 		}*/
/* */
/* 		function getPageList(current) {*/
/* 			getEntireList(current);*/
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
/* 		//获取凭证和服务月份*/
/* 		function getVoucherAndServiceMonth(contract_id) {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_contract/get_month_pz',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					contract_id: contract_id*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* */
/* 					//凭证 服务所有月份*/
/* 					var not_month = data['not_month'];*/
/* */
/* 					var new_month = data['new_pz_month'];*/
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
/* 					for(var i in not_month) {*/
/* 						pz_html.push(*/
/* 							`<label class="voucher_label">*/
/* 								<input type="checkbox"  data-time="${not_month[i]}">*/
/* 								<span class="voucher_month">${not_month[i]}</span> */
/* 							</label>`*/
/* 						);*/
/* 						//						index = $.inArray(all_month[i],done_month);*/
/* 						//						*/
/* 						//*/
/* 						//						index = $.inArray(all_month[i],pz_month);*/
/* 						//						pz_html.push(*/
/* 						//							`<label class="voucher_label">*/
/* 						//								<input type="checkbox" ${index != -1 ? 'checked' : ''} ${index != -1 ? 'disabled' : ''} data-time="${all_month[i]}">*/
/* 						//								<span class="voucher_month">${all_month[i]}</span> */
/* 						//							</label>`*/
/* 						//						);*/
/* 					}*/
/* */
/* 					for(var i in new_month) {*/
/* 						service_html.push(*/
/* 							`<label class="voucher_label">*/
/* 								<input type="checkbox"  data-time="${new_month[i]}">*/
/* 								<span class="voucher_month">${new_month[i]}</span> */
/* 							</label>`*/
/* 						);*/
/* 					}*/
/* */
/* 					$('#templateCon .voucher .voucher_div').html(service_html.join(''));*/
/* 					$('#templateCon .service_month .voucher_div').html(pz_html.join(''));*/
/* */
/* 					//					$('#templateCon .voucher_label').mouseover(function() {*/
/* 					//						if($(this).find('input').is(':checked')) {*/
/* 					//							$(this).find('input').prop('checked', false);*/
/* 					//						} else {*/
/* 					//							$(this).find('input').prop('checked', true);*/
/* 					//						}*/
/* 					//					})*/
/* */
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//生成服务月份html*/
/* 		function generateTd(data) {*/
/* 			var html;*/
/* */
/* 			var month; //月份*/
/* 			//styles : 审批状态对应显示的样式*/
/* 			var styles = ['', 'fa  fa-circle-o', 'glyphicon glyphicon-ok', 'glyphicon glyphicon-remove'];*/
/* */
/* 			$('#dynamic-table .thColor .month').each(function(i, e) {*/
/* */
/* 				month = $(this).attr('month');*/
/* */
/* 				if(!data[month]) {*/
/* 					html += '<td get_money style="display:' + $(this).css('display') + ';border:1px solid #eee !important;" data-num="' + $(this).attr('data-num') + '"></td>';*/
/* 					return true;*/
/* 				}*/
/* 				html +=*/
/* 					`<td class="center" ${data[month]['Status'] ? "cstatus" : ""}  title="${month}" get_money="${data[month]['get_money']}"   contract_id="${data[month]['contract_id']}" fuze_id="${data[month]['fuze_id']}" hang_statu="${data[month]['hang_statu']}" data-id="${data[month]['id']}" data-status="${data[month]['status']}" data-num="${$(this).attr('data-num')}" style="display:${$(this).css('display')};border:1px solid #eee !important;" data-month="${data[month]['time']}">*/
/* 						<label class="pos-rel ${styles[data[month]['status']]}">*/
/* 					</label>*/
/* 				</td>`;*/
/* 			});*/
/* 			return html;*/
/* 		}*/
/* */
/* 		//将数据添加到tbody中*/
/* 		function addList(res) {*/
/* 			//列表数据*/
/* 			var data = res.data.items;*/
/* 			//tbody下的html内容*/
/* 			var html = '';*/
/* 			//服务周期*/
/* 			var payment_cycle = {*/
/* 				'1': '每月',*/
/* 				'3': '季度',*/
/* 				'6': '半年',*/
/* 				'12': '一年'*/
/* 			};*/
/* */
/* 			//处理服务器返回的每月的服务数据*/
/* 			var obj = {};*/
/* 			var _data = {};*/
/* */
/* 			//表头显示 隐藏样式*/
/* 			var styles = [];*/
/* 			$('#dynamic-table .thColor th').each(function(i, e) {*/
/* 				styles.push($(this).css('display'));*/
/* 			});*/
/*             console.log(styles);*/
/*             ykp.setCookie('page_no', res.data.curPage, (1 / 24));*/
/* */
/* 			//负责人id*/
/* 			var fuze_ids = [];*/
/* 			//负责人名字*/
/* 			var fuze = [];*/
/* 			//服务周期*/
/* 			var service_cylce = [];*/
/* 			//服务周期名字*/
/* 			var cycle = [];*/
/* 			//月份服务数据td*/
/* 			var td_html;*/
/* 			for(var i in data) {*/
/* 				for(var j = 0; j < data[i].list.length; j++) {*/
/* 					obj.status = data[i].list[j]['jzm_service_info.status'];*/
/* 					obj.get_money = data[i].list[j]['jzm_service_info.get_money'];*/
/* 					obj.id = data[i].list[j]['jzm_service_info.id'];*/
/* 					obj.time = data[i].list[j]['jzm_service_info.time'];*/
/* 					obj.contract_id = data[i]['list'][j]['jzm_service_info.contract_id'];*/
/* 					obj.fuze_id = data[i]['list'][j]['jzm_service_info.fuze_id'];*/
/* 					obj.hang_statu = data[i]['list'][j]['htm_contract.status'];*/
/* 					obj.Status = data[i].list[j]['htm_contract.status'] == 1 || data[i].list[j]['htm_contract.status'] == 2 || data[i].list[j]['htm_contract.status'] == 3 ? false : true; //合同状态*/
/* 					_data[data[i].list[j]['jzm_service_info.time']] = obj;*/
/* 					obj = {};*/
/* 				}*/
/* 				//生成服务月份html*/
/* 				td_html = generateTd(_data);*/
/* */
/* 				for(var j = data[i]['list'].length - 1; j >= 0; j--) {*/
/* 					//负责人id不存在 则将负责人id加入fuze_ids中*/
/* 					if($.inArray(data[i].list[j]['jzm_service_info.fuze_id'], fuze_ids) == -1) {*/
/* 						fuze_ids.push(data[i].list[j]['jzm_service_info.fuze_id']);*/
/* 					}*/
/* 					//服务周期不存在 则将服务周期加入service_cylce中*/
/* 					if($.inArray(data[i].list[j]['htm_contract.payment_cycle'], service_cylce) == -1) {*/
/* 						service_cylce.push(data[i].list[j]['htm_contract.payment_cycle']);*/
/* 					}*/
/* 				}*/
/* */
/* 				//根据负责人id 获取负责人姓名并存入fuze中*/
/* 				for(var j = 0; j < 1; j++) {*/
/* 					fuze.push(employees[fuze_ids[j]]);*/
/* 				}*/
/* */
/* 				//根据service_cylce 将服务周期存入cycle中*/
/* 				for(var j in service_cylce) {*/
/* 					cycle=payment_cycle[service_cylce[j]];*/
/* 				}*/
/* */
/* 				var tax_type = data[i].list[0]['khm_customer.tax_type'] == 1 ? '一般纳税人' : '小规模';*/
/* */
/* 				html +=*/
/* 					`<tr cid="${data[i]['customer_id']}" data-name="${data[i].list[0]['khm_customer.name']}">*/
/* 					 <td class="center">*/
/*                         <label class="pos-rel">*/
/*                         <input type="checkbox" name="check" class="ace"/>*/
/*                         <span class="lbl"></span>*/
/*                         </label>*/
/*                     </td>*/
/* 					<td data-num="1" style="display:${styles[1]}" data-cid="${data[i]['customer_id']}">*/
/* 						<div style="display:${data[i]['is_red'] == '0' ? 'none' : 'inline-block'};height:7px;width:17px">*/
/* 			 				 <span class="spanTip" style=""><span>*/
/* 						</div>*/
/* 						<a href="javascript:void(0);" class="customerDetail pos-rel">${data[i].list[0]['khm_customer.name']}</a>*/
/* 						<label class="pos-rel">*/
/* 							<i relation=${data[i]['is_relotion']} class="sc fa ${data[i]['is_relotion'] == 0 ? 'fa-heart-o' : 'fa-heart'}" style="color:${data[i]['is_relotion'] ==1 ? 'red' : ''}"></i>*/
/* 			 				<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}" data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>*/
/* 		 				</label>*/
/* 					</td>*/
/* 					<td data-num="20" style="display:${styles[2]}">*/
/* 						${parseInt(data[i]['maxLv']).toFixed(2)}*/
/* 					</td>*/
/* 					//客户编码*/
/* 					<td data-num="2" style="display:${styles[3]}">*/
/* 						${data[i]['customer_num']}*/
/* 					</td>*/
/* 					*/
/* 					//仓位编码*/
/* 					<td  data-type="" data-num="3" style="display:${styles[4]}">*/
/* 						${data[i].position.pos_name+data[i].position.pos_num}*/
/* 					</td>*/
/* 					//纳税人类型*/
/* 					<td class="center"  data-num="4" style="display:${styles[5]}">*/
/* 						${tax_type}*/
/* 					</td>*/
/* 					//服务周期*/
/* 					<td class="center" data-num="5" style="display:${styles[6]}">${cycle}</td>*/
/* 					//逾期*/
/* 					<td class="center" data-num="6" style="display:${styles[7]}">${data[i]['num']}</td>*/
/* 					//截至月份*/
/* 					<td class="center" data-num="7" style="display:${styles[8]}">${data[i]['maxTime']}</td>*/
/* 					//负责人*/
/* 					<td class="center" data-num="8" style="display:${styles[9]}">${fuze.join(',') || ""}</td>*/
/* 					${td_html}*/
/* 				</tr>`;*/
/* */
/* 				//置空数据，以便下一次循环*/
/* 				_data = {};*/
/* 				fuze_ids = [];*/
/* 				fuze = [];*/
/* 				cycle = [];*/
/* 				service_cylce = [];*/
/* 			};*/
/* */
/* 			$('#dataList').html(html);*/
/* 			custom.get_custom_info();*/
/* 			custom.showReamrk();*/
/* 			cs.sc('收单', function(res) {*/
/* 				getEntireList(1)*/
/* 			});*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/* */
/* 			/* $('#dataList').find('td[get_money]').each(function() {*/
/* 			 	if($(this).attr('get_money') > 0) {*/
/* 			 		$(this).css('background-color', '#00cc22')*/
/* 			 	}*/
/* 			 })*/
/* */
/* 			 $("#dataList td[data-status='0']").mouseover(function() {*/
/* 			 	$(this).children('a').css('display', 'inline-block');*/
/* 			 })*/
/* */
/* 			 $("#dataList td[data-status='0']").mouseout(function() {*/
/* 			 	$(this).children('a').css('display', 'none');*/
/* 			 })*//* */
/* */
/* 			var statu = cs.getNodes([92, 289], true);*/
/* */
/* 			//点击月份下td的弹出层 交接清单表*/
/* 			$('#dataList td[data-month]').click(function() {*/
/* 				//当前登录用户id*/
/* 				var uid = ykp.getCookie('uid');*/
/* */
/* 				//当前用户非负责人时，提示*/
/* 				if($(this).attr('fuze_id') != uid) {*/
/* 					ykp.prompt("非负责人，不可操作");*/
/* 					return false;*/
/* 				}*/
/* */
/* 				//作废未收款不能添加*/
/* 				if($(this).attr('get_money') == -1 && $(this).attr('hang_statu') == '4' || $(this).attr('hang_statu') == '3') {*/
/* 					ykp.prompt('订单已解约，不能编辑');*/
/* 					return false;*/
/* 				}*/
/* 				//合同状态非已激活时，提示*/
/* 				if($(this).attr('hang_statu') != '1') {*/
/* 					var contract_status = ['合同未激活', '合同已激活', '合同已挂起', '合同已结束', '合同已作废'];*/
/* 					ykp.prompt(contract_status[$(this).attr('hang_statu')] || "不可操作");*/
/* 					return false;*/
/* 				}*/
/* 				//服务审批状态非未审批、审批失败时，提示*/
/* 				if($(this).attr('data-status') != '0' && $(this).attr('data-status') != '3') {*/
/* 					var approve_status = {*/
/* 						'1': '审批中，不可操作',*/
/* 						'2': '审批成功，不可操作'*/
/* 					};*/
/* 					ykp.prompt(approve_status[$(this).attr('data-status')] || "不可操作");*/
/* 					return false;*/
/* 				}*/
/* */
/* 				//合同id*/
/* 				var contract_id = $(this).attr('contract_id');*/
/* */
/* 				//公司id*/
/* 				var customer_id = $(this).parents('tr').find('[data-num="2"]').text().trim();*/
/* 				var cid = $(this).parents('tr').find('[data-num="1"]').attr('data-cid');*/
/* 				var _td = $(this);*/
/* */
/* 				var trIndex = $(this).parents('tr').find('td').index($(this));*/
/* */
/* 				var thAry = $('#dynamic-table thead th')[trIndex].innerHTML;*/
/* */
/* 				// //保存交接列表时，提交的数据*/
/* 				// var datas = {year_month_id:$(this).attr('data-month')};*/
/* */
/* 				$('.getList-popup').find('#month').text(thAry);*/
/* */
/* 				showMark('.getList-popup');*/
/* */
/* 				$('#templateCon').data('flag', '1');*/
/* 				$('#templateCon').css('width', '502px');*/
/* 				$('#templateCon .close_get').unbind('click').click(function() {*/
/* 					$('#templateCon').css('width', 'auto');*/
/* 					$('#templateCon').data('flag', '2');*/
/* 					cs.close();*/
/* 				});*/
/* 				var custom_name = $(this).parent().attr('data-name');*/
/* 				$('#showBox .title').text(custom_name + '(收单交接表)');*/
/* 				$('#templateCon #sendMsg').attr('customer_id', customer_id);*/
/* */
/* 				layui.use('element', function(data) {*/
/* 					var element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块*/
/* 					element.init('collapse');*/
/* 				});*/
/* */
/* 				//获取凭证 和 服务月份*/
/* 				getVoucherAndServiceMonth(contract_id);*/
/* */
/* 				//获取收单方式*/
/* 				getway();*/
/* */
/* 				//获取物品信息*/
/* 				var goods = getGoods();*/
/* 				// var thistd = $(this);*/
/* 				// var ser_id = $(this).attr('data-id');*/
/* 				// var trIndex = $(this).parents('tr').find('td').index($(this));*/
/* 				// var thAry = $('#dynamic-table thead th')[trIndex].innerHTML;*/
/* 				// var trindex = $(this).parents('tr').index();*/
/* 				// var year_month = $(this).attr('data-month')+'';*/
/* 				// //当前月完整日期*/
/* 				// year_month = year_month.substring(0,4)+'-'+year_month.substring(4)+'-01';*/
/* 				// //拿到服务周期，判断是每月、季度、本年、一年*/
/* 				// var payment_cycle = $(this).parent().attr('payment_cycle');*/
/* 				// //拿到选中月份*/
/* 				// var month = $(this).attr('data-num')-6;*/
/* 				// var month_ids = [];*/
/* 				// var start_time = $(this).parent().attr('start_time');*/
/* 				// var end_time = $(this).parent().attr('end_time');*/
/* 				// var harf_time = (end_time-86400*15- start_time)/2;*/
/* 				// var start_month=cs.getNowTime(start_time).split('-')[1];//开始月份*/
/* 				// var end_month = cs.getNowTime(end_time).split('-')[1];//结束月份*/
/* 				// var start_year=cs.getNowTime(start_time).split('-')[0];*/
/* 				// var end_year = cs.getNowTime(end_time).split('-')[0];*/
/* 				// var datas ={};*/
/* */
/* 				// if (payment_cycle==3) {*/
/* 				// 	//得到季度数组*/
/* 				// 	var data_mon = getArrays(month,3);*/
/* 				// 	//serviceid数组*/
/* 				// 		for(var i in data_mon){*/
/* 				// 			var id=$(thistd).parent().find('[data-num='+(data_mon[i]+6)+']').attr('data-month');*/
/* 				// 			if (id!='') {*/
/* 				// 				month_ids.push(id);*/
/* 				// 			}*/
/* 				// 		}*/
/* 				// 		datas['year_month_id'] = month_ids.join(',');*/
/* 				// 	//半年的*/
/* 				// 	} else if (payment_cycle==6) {*/
/* 				// 			//如果是前6个月*/
/* 				// 		if((Date.parse(new Date(year_month))/1000-start_time) < harf_time){*/
/* 				// 			//如果开始时间小于等于6月*/
/* 				// 			if(cs.getNowTime(start_time).split('-')[1]<=6){*/
/* 				// 				for(var i = 0;i<6;i++){*/
/* 				// 					var mon=(parseInt(start_month)+i)<10?'0'+''+(parseInt(start_month)+i):parseInt(start_month)+i;*/
/* 				// 						month_ids.push(start_year+''+mon);*/
/* 				// 				}*/
/* 				// 			}else{//如果开始时间大于6月*/
/* 				// 				var k=1;*/
/* 				// 				for(var i = 0;i<6;i++) {*/
/* 				// 					var mon;*/
/* 				// 					if (parseInt(start_month)+i<=12) {*/
/* 				// 						mon=(parseInt(start_month)+i)<10?'0'+''+(parseInt(start_month)+i):(parseInt(start_month)+i);*/
/* 				// 						month_ids.push(start_year+''+mon);*/
/* 				// 					} else {*/
/* 				// 						mon=k<10?'0'+''+k:k;*/
/* 				// 						month_ids.push((parseInt(start_year)+1)+''+mon);*/
/* 				// 						k++;*/
/* 				// 					}*/
/* 				// 				}*/
/* 				// 			}*/
/* 				// 			//如果是后6个月*/
/* 				// 		} else {*/
/* 				// 			//如果结束时间大于6月*/
/* 				// 			if(cs.getNowTime(end_time).split('-')[1] >= 6){*/
/* 				// 				for(var i = 0;i<6;i++){*/
/* 				// 					var mon=(parseInt(end_month)-i)<10?'0'+''+(parseInt(end_month)-i):parseInt(end_month)-i;*/
/* 				// 						month_ids.push(end_year+''+mon);*/
/* 				// 				}*/
/* 				// 			}else{//如果结束时间小于6月*/
/* 				// 				var k = 12;*/
/* 				// 				for(var i = 0;i<6;i++){*/
/* 				// 					var mon;*/
/* 				// 					if (parseInt(end_month)-i>=1) {*/
/* 				// 						mon=(parseInt(end_month)-i)<10?'0'+''+(parseInt(end_month)-i):(parseInt(end_month)-i);*/
/* 				// 						month_ids.push(end_year+''+mon);*/
/* 				// 					}else{*/
/* 				// 						mon=k<10?'0'+''+k:k;*/
/* 				// 						month_ids.push((parseInt(end_year)+1)+''+mon);*/
/* 				// 						k--;*/
/* 				// 					}*/
/* 				// 				}*/
/* 				// 			}*/
/* 				// 		month_ids = month_ids.reverse();*/
/* 				// 		}*/
/* 				// 		datas['year_month_id'] = month_ids.join(',');*/
/* 				// 	//一年的*/
/* 				// 	} else if (payment_cycle==12) {*/
/* 				// 		var k = 1;*/
/* 				// 		for(var i = 0; i <12;i++) {*/
/* 				// 			var mon;*/
/* 				// 			if (parseInt(start_month)+i<=12) {*/
/* 				// 				mon=parseInt(start_month)+i<10?'0'+''+(parseInt(start_month)+i):parseInt(start_month)+i;*/
/* 				// 				month_ids.push(start_year+''+mon)*/
/* 				// 			}else{*/
/* 				// 				mon=k<10?'0'+''+k:k;*/
/* 				// 				month_ids.push((parseInt(start_year)+1)+''+mon)*/
/* 				// 				k++;*/
/* 				// 			}*/
/* 				// 		}*/
/* 				// 		datas['year_month_id'] =month_ids.join(',') ;*/
/* 				// 	}*/
/* */
/* 				//切换交接表*/
/* 				$('#templateCon .buttons button').click(function() {*/
/* 					var index = $(this).index();*/
/* 					if(index == 0) {*/
/* 						return;*/
/* 					}*/
/* 					if($(this).hasClass('active')) {*/
/* 						$(this).removeClass('active');*/
/* 						var _class = $('#templateCon .connects-content>div').eq(index).find('table').attr('class');*/
/* 						$('#templateCon .connects-content>.' + _class).remove();*/
/* 					} else {*/
/* 						$(this).addClass('active');*/
/* 						var _table = $('#templateCon .connects-content>div').eq(index).html();*/
/* 						_table = $(_table).css('display', 'table');*/
/* 						$('#templateCon .connects-content').append(_table);*/
/* */
/* 					}*/
/* 				});*/
/* */
/* 				showTicket();*/
/* 				showCard();*/
/* */
/* 				//删除一行*/
/* 				function removeT() {*/
/* 					$('.remove').click(function() {*/
/* 						$(this).parents('tr').remove();*/
/* 					})*/
/* 				}*/
/* */
/* 				//票据交接列表添加一行*/
/* 				function showTicket() {*/
/* 					$('#templateCon .addTicket').unbind('click').click(function() {*/
/* 						var tr = `<tr>*/
/* 						<td><a href="javascript:;" class="remove">-</a></td><td>*/
/* 						<select class="goods">*/
/* 						${goods['PJ']}*/
/* 						</select></td><td><input type="number" class="count" value="0"/></td><td><input type="number" class="money" value="0"/></td></tr>`;*/
/* 						$('#templateCon .connects-content>table>#ticketBody').append(tr);*/
/* 						removeT();*/
/* 					})*/
/* 				}*/
/* */
/* 				//证件交接列表添加一行*/
/* 				function showCard() {*/
/* 					$('#templateCon .addCard').unbind('click').click(function() {*/
/* 						var tr1 = `<tr><td><a href="javascript:;" class="remove">-</a></td><td><select class="goods">${goods['ZJ']}*/
/* 						</select></td><td><input type="number" class="count" value="0"/></td></tr>`;*/
/* 						$('#templateCon .connects-content>table>#cardBody').append(tr1);*/
/* 						removeT();*/
/* 					})*/
/* 				}*/
/* */
/* 				function sendMsg(cid, type,param) {*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_common/send_customer',*/
/* 						data: {*/
/* 							customer_id: cid,*/
/* 							type: type,*/
/*                             param:param*/
/* 						},*/
/* 						method: 'post',*/
/* 						success: function(res) {*/
/* 							ykp.prompt('短信发送成功！');*/
/* 						}*/
/* 					})*/
/* 				}*/
/*                 $("#temHeader").width($("#showBox").width()-47);*/
/* 				//保存*/
/* 				var once = true;*/
/* 				$('#templateCon .sure_button').click(function() {*/
/* 					//提交数据*/
/* 					var postdata = {*/
/* 						contract_id: contract_id*/
/* 					};*/
/* */
/* 					//收单方式*/
/* 					postdata['data_type'] = $('#templateCon [title="getway"]').val();*/
/* */
/* 					if(postdata.data_type == 3) {*/
/* 						//快递信息*/
/* 						var datae = {*/
/* 							express: $('#templateCon [title="express"]').val().trim(),*/
/* 							num: $('#templateCon [title="expressnum"]').val().trim(),*/
/* 							cost: $('#templateCon [title="cost"]').val().trim()*/
/* 						}*/
/* 						if(!datae['express'] || !datae['num'] || !datae['cost']) {*/
/* 							ykp.prompt('请完善快递信息');*/
/* 							return;*/
/* 						}*/
/* 						postdata['data'] = JSON.stringify(datae);*/
/* 					}*/
/* */
/* 					//收单数据集*/
/* 					var getList_dataList = [];*/
/* 					var pingz = true;*/
/* 					//凭证数据*/
/* 					$('#templateCon .voucher [data-time]').each(function(i, e) {*/
/* 						if(!$(this).prop('disabled') && $(this).prop('checked')) {*/
/*                             pingz = false;*/
/* 							getList_dataList.push({*/
/* 								goods: $(this).attr('data-time'),*/
/* 								type: 1,*/
/* 								number: 1*/
/* 							});*/
/* 						}*/
/* 					})*/
/* 					//票据数据*/
/* 					var piaoju = true;*/
/* 					$('#templateCon .connects-content>table #ticketBody tr').each(function(res) {*/
/* 					    if($(this).find('.count').val() > 0){*/
/*                             piaoju = false;*/
/* 						}*/
/* 						getList_dataList.push({*/
/* 							goods: $(this).find('.goods').val(),*/
/* 							type: 2,*/
/* 							number: $(this).find('.count').val()*/
/* 						});*/
/* 					});*/
/* */
/* 					//证件数据*/
/* 					var zhengju = true;*/
/* 					$('#templateCon .connects-content>table #cardBody tr').each(function(res) {*/
/*                         if($(this).find('.count').val() > 0){*/
/*                             zhengju = false;*/
/*                         }*/
/* 						getList_dataList.push({*/
/* 							goods: $(this).find('.goods').val(),*/
/* 							type: 3,*/
/* 							number: $(this).find('.count').val()*/
/* 						});*/
/* 					});*/
/* */
/* 					if(getList_dataList.length <= 0) {*/
/* 						ykp.prompt('请选择收单物品');*/
/* 						return;*/
/* 					}*/
/* */
/* 					postdata['dataList'] = JSON.stringify(getList_dataList);*/
/* */
/* 					//服务月份*/
/* 					var service_month = [];*/
/* 					$('#templateCon .service_month [data-time]').each(function(i, e) {*/
/* 						if(!$(this).prop('disabled') && $(this).prop('checked')) {*/
/* 							service_month.push($(this).attr('data-time'));*/
/* 						}*/
/* 					});*/
/* 					if(service_month.length <= 0) {*/
/* 						ykp.prompt('请选择服务月份');*/
/* 						return;*/
/* 					}*/
/* 					postdata['year_month_id'] = service_month.join(',');*/
/* */
/* 					var is_send = false;*/
/*                     if($('#templateCon #sendMsg input:checked').val() == 1) {*/
/*                         is_send = true;*/
/* 					}*/
/* 					if($('#templateCon #remark1').val()) {*/
/* 						postdata.remark = $('#templateCon #remark1').val();*/
/* 					}*/
/* 					var fileBox = $('#templateCon #fileBox');*/
/* 					var files = [];*/
/* 					if(fileBox.children().length > 0) {*/
/* 						$('#templateCon #fileBox').find('a').each(function(i) {*/
/* 							files.push({*/
/* 								name: $(this).text(),*/
/* 								url: $(this).attr('href')*/
/* 							})*/
/* 						})*/
/* */
/* 						postdata.files = JSON.stringify(files);*/
/* 					}*/
/* 					var customer_id = $('#templateCon #sendMsg').attr('customer_id');*/
/* 					postdata.customer_id = cid;*/
/*                     if(pingz && piaoju && zhengju ){*/
/*                         getList_dataList.push({*/
/*                             goods: "文件袋",*/
/*                             type: 0,*/
/*                             number: 1*/
/*                         });*/
/*                         postdata['dataList'] = JSON.stringify(getList_dataList);*/
/*                     }*/
/* //					var param = {*/
/* //						name: $('#templateCon .name').text().trim(),*/
/* //						time: $('#templateCon .name').attr('data-time'),*/
/* //						user: fzpeople*/
/* //					}*/
/* 					if(once){*/
/* 						closeMark();*/
/* 						once = false;*/
/* 						ykp.prompt('数据保存中...');*/
/* 						setTimeout(function(){once = true},5000);*/
/* 						ykp.doAjax({*/
/* 							url: '/api/api_service/add_acquiring_new2',*/
/* 							methods: 'post',*/
/* 							data: postdata,*/
/* 							success: function(res) {*/
/* 								getEntireList(1);*/
/* 								if(is_send) {*/
/* 									//sendMsg(cid, 1, param);*/
/* 								}*/
/* 								$('.in').removeClass('modal-backdrop');*/
/* 								$('#showBox').addClass('ishide');*/
/* 								//_td.find('label').addClass('fa fa-circle-o').attr('data-status', 1);*/
/* 							}*/
/* 						})*/
/* 					}*/
/* 					*/
/* 				})*/
/* 			});*/
/* 		}*/
/* */
/* 		//能量条形式控制*/
/* 		$('.easy-pie-chart.percentage').each(function() {*/
/* 			var $box = $(this).closest('.infobox');*/
/* 			var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');*/
/* 			var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';*/
/* 			$(this).easyPieChart({*/
/* 				barColor: barColor,*/
/* 				trackColor: trackColor,*/
/* 				scaleColor: false,*/
/* 				lineCap: 'butt',*/
/* 				lineWidth: 5,*/
/* 				animate: ace.vars['old_ie'] ? false : 1000*/
/* 			});*/
/* 		});*/
/* */
/* 	})*/
/* 	//导入企业*/
/* 	$('#leading-in').change(function() {*/
/* 		//console.log(1);*/
/* 		var file = this.files[0];*/
/* 		var formData = new FormData();*/
/* 		formData.append('customer', file);*/
/* 		$.ajax({*/
/* 			url: ykp.api_url + '/api/api_customer/upload_batch',*/
/* 			type: 'POST',*/
/* 			cashe: false,*/
/* 			data: formData,*/
/* 			processData: false,*/
/* 			contentType: false,*/
/* 			dataType: 'json'*/
/* 		}).success(function(res) {*/
/* 			if(res.code != 200) {*/
/* 				ykp.prompt(res.msg);*/
/* 				return;*/
/* 			}*/
/* */
/* 			getList();*/
/* 		});*/
/* */
/* 		// ykp.doAjax({*/
/* 		//     url:'/api/api_customer/upload_batch',*/
/* 		//     method:'post',*/
/* 		//     contentType:'multipart/form-data',*/
/* 		//     data:formData,*/
/* 		//     success:function(res){*/
/* 		//         getList();*/
/* 		//     }*/
/* 		// });*/
/* 	});*/
/* </script>*/
