<?php

/* admin/task/single.html */
class __TwigTemplate_750efd1fce8183909c3b7f821d5ba2f810681b8590c601e56fe83b662e71632a extends Twig_Template
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
\t#templateCon table {
\t\tmargin-bottom: 20px;
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
\t
\t#templateCon .connects-content a {
\t\ttext-decoration: none;
\t}
\t
\t#dynamic-table1 tr td {
\t\theight: 40px;
\t\tline-height: 40px;
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
\t.checkbox input {
\t\twidth: 20px !important;
\t}
\t
\t#_dataList td {
\t\twhite-space: nowrap !important;
\t\ttext-align: left !important;
\t\tpadding: 5px 10px !important;
\t\tmin-width: 60px;
\t\t/* border: 1px solid #ddd; */
\t\theight: 35px !important;
\t}
\t
\t.pzmonth span {
\t\tline-height: 24px;
\t}
\t
\t#templateCon label {
\t\twidth: 100px !important;
\t}
\t
\t#templateBox {
\t\tpadding: 0px !important;
\t}
\t#templateBox {
\t\tpadding-top: 50px !important;
\t\toverflow-y: hidden;
\t}
\t
\t.layui-colla-content {
\t\tpadding: 10px;
\t}
\t\t#dataList td[get_money] {
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
</style>

<div class=\"widget-main\">
\t<div id=\"task-tab\" class=\"tab-pane active\">
\t\t<div class=\"row\" style=\"margin-top: 20px;\">
\t\t\t<!-- <h3 class=\"header smaller lighter blue\">送单</h3> -->
\t\t\t<!--普通搜索-->
\t\t\t<!--<div class=\"col-sx-12\" style=\" float: left\">
\t\t\t\t<div class=\"form-group col-xs-12\" style=\"padding-left:0;\">
\t\t\t\t\t<label class=\"control-label  col-sm-3 no-padding-right \" style=\"margin:0px !important; padding-left: 0px;height:30px;line-height:30px;\"> 月份 </label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<select id=\"form-field-select-1\">
\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t<option value=\"1\">1月</option>
\t\t\t\t\t\t\t<option value=\"2\">2月</option>
\t\t\t\t\t\t\t<option value=\"3\"> 3月</option>
\t\t\t\t\t\t\t<option value=\"4\"> 4月</option>
\t\t\t\t\t\t\t<option value=\"5\">5月</option>
\t\t\t\t\t\t\t<option value=\"6\">6月</option>
\t\t\t\t\t\t\t<option value=\"7\"> 7月</option>
\t\t\t\t\t\t\t<option value=\"8\"> 8月</option>
\t\t\t\t\t\t\t<option value=\"9\">9月</option>
\t\t\t\t\t\t\t<option value=\"10\">10月</option>
\t\t\t\t\t\t\t<option value=\"11\"> 11月</option>
\t\t\t\t\t\t\t<option value=\"12\"> 12月</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>-->

\t\t\t<div style=\"margin-top: 50px;  width: 860px; padding: 0px;\" class=\"row col-xs-12\">
\t\t\t\t<div class=\"col-xs-12 infobox-container\" style=\"padding: 0px; margin-left: -10px;\">
\t\t\t\t\t<!-- #section:pages/dashboard.infobox -->
\t\t\t\t\t<div class=\"infobox infobox-blue2\" style=\"color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;\">
\t\t\t\t\t\t<div class=\"infobox-data\" style=\"padding: 0px;\">
\t\t\t\t\t\t\t<div class=\"infobox-content\" style=\"text-align: center;\">
\t\t\t\t\t\t\t\t本月目标
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"infobox infobox-blue2\" style=\"color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;\">
\t\t\t\t\t\t<div class=\"infobox-data\" style=\"padding: 0px;\">
\t\t\t\t\t\t\t<div class=\"infobox-content\" style=\"text-align: center;\">
\t\t\t\t\t\t\t\t新增任务
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"infobox infobox-blue2\" style=\"color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;\">
\t\t\t\t\t\t<div class=\"infobox-data\" style=\"padding: 0px;\">
\t\t\t\t\t\t\t<div class=\"infobox-content\" style=\"text-align: center;\">
\t\t\t\t\t\t\t\t逾期任务
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"infobox infobox-blue2\" style=\"color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;\">
\t\t\t\t\t\t<div class=\"infobox-data\" style=\"padding: 0px;\">
\t\t\t\t\t\t\t<div class=\"infobox-content\" style=\"text-align: center;\">
\t\t\t\t\t\t\t\t累计任务
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"infobox infobox-blue2 chart1\">
\t\t\t\t\t\t<div class=\"infobox-progress\">
\t\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"0\" data-size=\"50\" style=\"height: 57px;width: 57px;line-height: 56px;\">
\t\t\t\t\t\t\t\t<span class=\"percent\" id=\"percent2\"></span>
\t\t\t\t\t\t\t\t<canvas height=\"57\" width=\"57\"></canvas>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"infobox-data\" style=\"margin:3px 0 0 20px;\">
\t\t\t\t\t\t\t<div class=\"infobox-content\" id=\"isOk\">已完成</div>
\t\t\t\t\t\t\t<div class=\"infobox-content\" id=\"noOk\">未完成</div>
\t\t\t\t\t\t\t<div class=\"infobox-content\" id=\"noOk\">未完成</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"infobox infobox-blue2 chart2\">
\t\t\t\t\t\t<div class=\"infobox-progress\">
\t\t\t\t\t\t\t<!-- #section:pages/dashboard.infobox.easypiechart -->
\t\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"0\" data-size=\"50\" style=\"height: 57px; width: 57px; line-height: 56px;\">
\t\t\t\t\t\t\t\t<span class=\"percent\" id=\"percent2\"></span>
\t\t\t\t\t\t\t\t<canvas height=\"57\" width=\"57\"></canvas></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"infobox-data\" style=\"margin:3px 0 0 20px;\">
\t\t\t\t\t\t\t<div class=\"infobox-content\" id=\"isOk\"> 已完成</div>
\t\t\t\t\t\t\t<div class=\"infobox-content\" id=\"noOk\">未完成</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"infobox infobox-blue2 chart3\">
\t\t\t\t\t\t<div class=\"infobox-progress\">
\t\t\t\t\t\t\t<!-- #section:pages/dashboard.infobox.easypiechart -->
\t\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"0\" data-size=\"50\" style=\"height: 57px; width: 57px; line-height: 56px;\">
\t\t\t\t\t\t\t\t<span class=\"percent\" id=\"percent2\"></span>
\t\t\t\t\t\t\t\t<canvas height=\"57\" width=\"57\"></canvas></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"infobox-data\" style=\"margin:3px 0 0 20px;\">
\t\t\t\t\t\t\t<div class=\"infobox-content\" id=\"isOk\"> 已完成</div>
\t\t\t\t\t\t\t<div class=\"infobox-content\" id=\"noOk\">未完成</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"infobox infobox-blue2 chart4\">
\t\t\t\t\t\t<div class=\"infobox-progress\">
\t\t\t\t\t\t\t<!-- #section:pages/dashboard.infobox.easypiechart -->
\t\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"0\" data-size=\"50\" style=\"height: 57px; width: 57px; line-height: 56px;\">
\t\t\t\t\t\t\t\t<span class=\"percent\" id=\"percent2\"></span>
\t\t\t\t\t\t\t\t<canvas height=\"57\" width=\"57\"></canvas></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"infobox-data\" style=\"margin:3px 0 0 20px;\">
\t\t\t\t\t\t\t<div class=\"infobox-content\" id=\"isOk\"> 已完成</div>
\t\t\t\t\t\t\t<div class=\"infobox-content\" id=\"noOk\">未完成</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style=\"clear:both;\"></div>
\t\t\t</div>

\t\t\t<div class=\"row col-xs-12\" id=\"topTool\">
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<input type=\"text\" pts=1 sear=\"customer_name\" placeholder=\"企业名称\" autofocus/>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<input type=\"text\" pts=0 sear=\"khm_customer.customer_num\" placeholder=\"企业编码\" autofocus/>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<!--<input type=\"text\" pts=1 sear=\"staff_name\" placeholder=\"负责人\" autofocus/>-->
\t\t\t\t\t<select style=\"width: 180px\" pts=3 sear=\"jzm_service_info.fuze_id\" class=\"advandced-search select2-hidden-accssible\"  tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\">负责人</option>
\t\t\t\t\t</select>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\" style=\"background-color: ;\">
\t                    <i class=\"fa fa-search\"></i>
\t                </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button id=\"heightsearch\" title=\"高级搜索\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color:#00c0ef !important;\">
\t               \t \t<i class=\"fa fa-filter\"></i>
\t            \t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
\t                    <i class=\"fa fa-refresh\"></i>
\t                </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"105\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<label type=\"button\" id=\"mergeItem\" title=\"导入\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"btn btn-info btn-sm position-relative mergeItem\" for=\"leading-in\">
\t                    <i class=\"fa fa-sign-in\"></i>
\t               </label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"289\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" title=\"分配负责人\" id=\"moveToClue\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"moveToClue btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t\t\t<i class=\"fa fa-hand-o-right\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button id=\"singleList\" style=\"background: #1E9FFF !important;border-color: #1E9FFF;\" title=\"送单列表\" type=\"button\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t\t<i class=\"fa fa-truck\"></i>
\t            \t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:290px;height: 36px\">
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px;
\t\t\t\t\t\tbackground: #E6E6E6;\" data-kind=\"0\"> 查看全部</a>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"1\"> 我负责的</a>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"2\"> 我关注的</a>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"3\"> 我的下属</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!--高级搜索-->
\t\t\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"margin-top:30px;position: absolute; background: #fff; z-index: 1041;padding: 20px 10px; display: none;\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>年份</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=5 sear=\"year\" data-year=\"true\"></select>
\t\t\t\t\t\t\t<!--<input type=\"text\" gjs=5 sear=\"year\" data-year=true/>-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>月份</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=5 sear=\"month\">
\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t<option value=\"01\"> 1月 </option>
\t\t\t\t\t\t\t\t<option value=\"02\"> 2月 </option>
\t\t\t\t\t\t\t\t<option value=\"03\"> 3月 </option>
\t\t\t\t\t\t\t\t<option value=\"04\"> 4月 </option>
\t\t\t\t\t\t\t\t<option value=\"05\"> 5月 </option>
\t\t\t\t\t\t\t\t<option value=\"06\"> 6月 </option>
\t\t\t\t\t\t\t\t<option value=\"07\"> 7月 </option>
\t\t\t\t\t\t\t\t<option value=\"08\"> 8月 </option>
\t\t\t\t\t\t\t\t<option value=\"09\"> 9月 </option>
\t\t\t\t\t\t\t\t<option value=\"10\"> 10月 </option>
\t\t\t\t\t\t\t\t<option value=\"11\"> 11月 </option>
\t\t\t\t\t\t\t\t<option value=\"12\"> 12月 </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>企业名称</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.name\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>客户编码</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.customer_num\" />
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
\t\t\t\t\t\t\t<label>服务周期</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width:180px\" gjs=0 data-type=\"gj\" sear=\"htm_contract.payment_cycle\">
\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t<option value=\"1\">每月</option>
\t\t\t\t\t\t\t\t<option value=\"3\">季度</option>
\t\t\t\t\t\t\t\t<option value=\"6\">半年</option>
\t\t\t\t\t\t\t\t<option value=\"12\">一年</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>负责人</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<!--<select style=\"margin-right: 12px !important;width: 180px\" data-type=\"gj\" gjs=\"1\" sear=\"staff_name\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\"></select>-->
\t\t\t\t\t\t\t<select style=\"margin-right: 12px !important;width: 180px\" gjs=\"0\" data-type=\"gj\" sear=\"jzm_service_info.fuze_id\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>收款情况</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select gjs=0 sear=\"jzm_service_info.get_money\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t<option value=\"1\"> 已收款 </option>
\t\t\t\t\t\t\t\t<option value=\"0\"> 未收款 </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>审批状态</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select gjs=0 sear=\"jzm_service_info.status\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t<option value=\"0\"> 未开始</option>
\t\t\t\t\t\t\t\t<option value=\"1\"> 待审批</option>
\t\t\t\t\t\t\t\t<option value=\"2\"> 已通过</option>
\t\t\t\t\t\t\t\t<option value=\"3\"> 未通过</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\"clear:both;padding-top:10px;text-align:center;\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
\t                        查询
\t                    </button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"rest\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
\t\t                       重置
\t\t                    </button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"widget-body\" style=\"margin-bottom:10px;position:relative\">
\t\t\t<div style=\"display:none;position:absolute;z-index:1041;width:100%;background: #fff;padding: 20px;\" class=\"sendList custom_table\">
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr class=\"thColor\" data-id='1'>
\t\t\t\t\t\t\t<th>企业名称</th>
\t\t\t\t\t\t\t<th>仓位</th>
\t\t\t\t\t\t\t<th class=\"hidden-480\">联系人</th>
\t\t\t\t\t\t\t<th class=\"hidden-480\">联系电话</th>
\t\t\t\t\t\t\t<th class=\"hidden-480\">地址</th>
\t\t\t\t\t\t\t<th class=\"hidden-480\">负责人</th>
\t\t\t\t\t\t\t<th class=\"hidden-480\">服务月份</th>
\t\t\t\t\t\t\t<th class=\"hidden-480\">其他企业</th>
\t\t\t\t\t\t\t<th class=\"hidden-480\">配送状态</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody id=\"_dataList\">

\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" id=\"num1\"></div>
\t\t\t\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t\t\t\t<div id=\"pageBar1\" class=\"pagination\"></div>
\t\t\t\t\t<div align=\"right\" style=\"float: right;  width: 10%;\">
\t\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum1\">
\t\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"custom_table\">
\t\t\t\t<table id=\"dynamic-table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t\t                                    <input type=\"checkbox\" class=\"ace\" onclick=\"checkAll(this.checked)\"/>
\t\t\t\t\t\t\t\t                                    <span class=\"lbl\"></span>
\t\t\t\t\t\t\t\t    </label>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th data-num=\"1\">企业名称</th>
\t\t\t\t\t\t\t<th data-num=\"19\">任务等级</th>
\t\t\t\t\t\t\t<th data-num=\"2\">客户编码</th>
\t\t\t\t\t\t\t<th data-num=\"3\">仓位编码</th>
\t\t\t\t\t\t\t<th data-num=\"4\">服务周期</th>
\t\t\t\t\t\t\t<th data-num=\"5\">逾期</th>
\t\t\t\t\t\t\t<th data-num=\"6\">截止月份</th>
\t\t\t\t\t\t\t<th data-num=\"7\">负责人</th>
\t\t\t\t\t\t\t<th data-num=\"8\" class=\"month\"></th>
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
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<tbody id=\"dataList\">
\t\t\t\t\t\t<!--数据内容显示地址-->
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
<!-- /.widget-main -->
</div>
<!-- /.widget-body -->

<!-- <div class=\"label_popup\" id=\"label_popup\" class=\"col-xs-9\" style=\"position:fixed;top:200px;right:15%;left:15%;z-index:1041;display:none;\">
\t<div style=\"margin:39px auto;z-index:1060;background:#fff;position:relative;  background: #fff; padding: 2px;\">
\t\t<div id=\"subgleList\" style=\"\">
\t\t\t<div class=\"col-xs-12\" style=\"background: #fff; width: 100%; border:1px solid #ddd; padding: 2px;\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<table id=\"dynamic-table1\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr class=\"thColor\" data-id='1'>
\t\t\t\t\t\t\t\t<th>公司名称</th>
\t\t\t\t\t\t\t\t<th>仓位</th>
\t\t\t\t\t\t\t\t<th class=\"hidden-480\">联系人</th>
\t\t\t\t\t\t\t\t<th class=\"hidden-480\">联系电话</th>
\t\t\t\t\t\t\t\t<th class=\"hidden-480\">地址</th>
\t\t\t\t\t\t\t\t<th class=\"hidden-480\">负责人</th>
\t\t\t\t\t\t\t\t<th class=\"hidden-480\">其他代办事项</th>
\t\t\t\t\t\t\t\t<th class=\"hidden-480\">是否配送成功</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody id=\"dataList\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t</div>
\t</div>
</div> -->
<div class=\"no_dynamic-table\" style=\"display: none;\">
\t<div class=\"col-xs-12\">
\t\t<div class=\"row\">
\t\t\t<table id=\"\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t<th>企业名称</th>
\t\t\t\t\t\t<th>服务月份</th>
\t\t\t\t\t\t<th class=\"hidden-480\">负责人</th>
\t\t\t\t\t\t<th class=\"hidden-480\">未配送成功时间</th>
\t\t\t\t\t\t<th class=\"hidden-480\">未成功配送具体原因</th>
\t\t\t\t\t\t<th class=\"hidden-480\">配送次数</th>
\t\t\t\t\t\t<th class=\"hidden-480\">最新状态</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>

\t\t\t\t<tbody>
\t\t\t\t\t<tr data-id=\"1\">
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"#\">深圳税脉网络财务有限公司θ</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t12313
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>张柳清</td>
\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t<label class=\"pos-rel\">
                                    <span class=\"lbl\">是</span>
                                </label>
\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t<label class=\"pos-rel\">
                                    <a href=\"#\" ><span class=\"lbl\">是</span></a>
                            </label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t<label class=\"pos-rel\">
                                   <a href=\"#\" ><span class=\"lbl\">否</span></a>
                            </label>
\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t<label class=\"pos-rel\">
                                    <span class=\"lbl\">未成功</span>
                                </label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
</div>

<div id=\"jieTable\" style=\"display:none;\">
\t<div id=\"template2\" style=\" margin-top: 10px;\">
\t\t<div id=\"template1\" style=\"\">
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label>企业名称： </label>
\t\t\t\t<span style=\" width: 174px; min-width: 174px;\" class=\"name\"></span>
\t\t\t\t<label> 客户仓位： </label>
\t\t\t\t<span style=\"display: inline-block; width: 174px;\" class=\"caddress\"></span>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label>联系人员： </label>
\t\t\t\t<select style=\"display: inline-block; width: 174px;\" class=\"people\"></select>
\t\t\t\t<label> 联系电话： </label>
\t\t\t\t<span style=\"display: inline-block; width: 174px;\" class=\"tel\"></span>
\t\t\t</div>

\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> 联系地址： </label>
\t\t\t\t<select style=\"display: inline-block; width: 174px;\" class=\"addresses\" id=\"address\"> </select>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"layui-collapse\" lay-filter=\"test\" style=\"margin: 10px;\">
\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t<h2 class=\"layui-colla-title\">送单信息</h2>
\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t<div id=\"get_way\" style=\"margin-bottom: 10px;\">
\t\t\t\t\t\t<label style=\"width: 50px\">服务方式</label>
\t\t\t\t\t\t<select title=\"getway\" class=\"getway\">
\t\t\t\t\t\t\t<option value=\"1\">外勤上门</option>
\t\t\t\t\t\t\t<option value=\"2\">客户上门</option>
\t\t\t\t\t\t\t<option value=\"3\">快递物流</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"express\" style=\"display:none;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label style=\"width: 50px; margin-bottom: 10px;\">快递公司</label>
\t\t\t\t\t\t\t<input title=\"express\" />
\t\t\t\t\t\t\t<label style=\"width: 50px\">快递单号</label>
\t\t\t\t\t\t\t<input title=\"expressnum\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label style=\"width: 50px\">快递费用</label>
\t\t\t\t\t\t\t<input title=\"cost\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"\" style=\"padding: 2px;padding-left:50px;\">
\t\t\t\t\t\t\t<div id=\"fileBox\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"uploadBox\">
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"upload1\" style=\"outline: none;background-color: #009688 !important; margin-top: 20px;\" class=\"btn btn-info btn-sm position-relative\">
\t\t\t\t\t                        上传文件
\t\t\t\t\t        \t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"sendMsg\" customer_id=\"\" style=\"height: 30px;line-height: 40px\">
\t\t\t\t\t\t<label>发送短信：</label>
\t\t\t\t\t\t<input type=\"radio\" value=\"1\" name=\"is_send\">是
\t\t\t\t\t\t<input type=\"radio\" value=\"2\" name=\"is_send\" checked=\"true\">否
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t<h2 class=\"layui-colla-title\">记账凭证</h2>
\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t<div class=\"checkbox \" style=\"width: 100%;\">
\t\t\t\t\t\t<!--<label style=\"float: left;display: inline-block;width: 65px !important; height: 55px;\">凭证： </label>-->
\t\t\t\t\t\t<div class=\"pzmonth\" style=\"width: 500px;\">

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t<h2 class=\"layui-colla-title\">发票单据</h2>
\t\t\t\t<div class=\"layui-colla-content connects-content\">
\t\t\t\t\t<table class=\"bill\" style=\"display:;\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t\t\t<th>票据类别</th>
\t\t\t\t\t\t\t\t<th>库存数量</th>
\t\t\t\t\t\t\t\t<th>数量(张)</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody id=\"ticketBody\">
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t<h2 class=\"layui-colla-title\">证件资料</h2>
\t\t\t\t<div class=\"layui-colla-content  connects-content\">
\t\t\t\t\t<table class=\"certificate\" style=\"display:;\">

\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t\t\t<th>证件名称</th>
\t\t\t\t\t\t\t\t<th>库存数量</th>
\t\t\t\t\t\t\t\t<th>数量(个)</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>

\t\t\t\t\t\t<tbody id=\"cardBody\">
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div style=\"margin-top:20px;margin-bottom:20px;\" class=\"buttons\">
\t\t\t<!-- <button class=\"btn btn-info btn-sm active\">凭证交接</button>
\t\t\t<button class=\"btn btn-info btn-sm\">票据交接</button>
\t\t\t<button class=\"btn btn-info btn-sm\">证件交接</button> -->
\t\t</div>
\t\t<div class=\"connects-content\" style=\"width: 500px;\">

\t\t\t<div class=\"checkbox \" style=\"float: left; width: 100%; display: none;\">
\t\t\t\t<label style=\"float: left;display: inline-block;width: 90px !important; height: 55px;\">服务月份： </label>
\t\t\t\t<div class=\"allmonth\" style=\"width: 500px;\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div style=\"padding-left: 40px;\">
\t\t\t</div>

\t\t\t<div style=\"padding-left: 40px;\">
\t\t\t</div>
\t\t</div>
\t</div>

\t<div id=\"template1\">
\t\t<div style=\"margin-top:15px; \">
\t\t\t<label style=\"float:left;width:36px;\">备注：</label>
\t\t\t<textarea style=\"margin-left:5px;width:calc(80% - 41px);resize:none;padding:5px;\" class=\"rmark\"></textarea>
\t\t</div>
\t</div>
\t<div style=\"text-align:right;margin-top:15px; text-align: center;\">
\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
\t\t<button class=\"add btn btn-info btn-sm\">
              \t保存
        </button>
\t</div>
</div>
<div class=\"label_popup\" id=\"export\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t\t\t\t            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t<span style=\"display: inline-block;\">导入送单</span>
\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t</div>
\t\t<div style=\"padding: 10px 50px;\">
\t\t\t<input type=\"file\" width=\"200px\" style=\"margin: auto;\" id=\"efile\" />
\t\t\t<!--<hr>-->
\t\t</div>
\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t<button id=\"ghItem\" class=\" btn\">送单模板</button>
\t\t\t<button class=\"btn btn-info  submit\" style=\"padding: 6px; border-radius: 0px;\">保存</button>
\t\t</div>
\t</div>
</div>

<div class=\"label_popup\" id=\"fail\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
        box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t<span style=\"display: inline-block;\">请填写失败原因</span>
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
</div>

";
        // line 741
        $this->loadTemplate("admin/mark.html", "admin/task/single.html", 741)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/task/single.html", 741)->display($context);
        // line 742
        echo "<script src=\"/resource/adimin/components/_mod/easypiechart/jquery.easypiechart.js\"></script>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script>
\tjQuery(function(\$) {
\t\tcs.getNodes([105, 289]);

\t\tvar order = 'khm_customer.id desc';
\t\tvar employees = {};
\t\tvar curPage = 1;
\t\tvar filter = '';
\t\tvar month2 = \"\";
\t\tvar param = {
\t\t\taid: ykp.getCookie(\"aid\"),
\t\t\ttime: ykp.getCookie(\"time\")
\t\t}
\t\tvar pagesize = 10;
\t\tvar pagesize1 = 10;
\t\ttspage();
\t\tvar other = {};

\t\tfunction tspage() {
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tif(param.time != '' && param.time != undefined) {
\t\t\t\tvar timestamp = ''; //条件
\t\t\t\tvar today = new Date().setHours(0, 0, 0, 0) / 1000; //今天零点的时间戳
\t\t\t\tvar day_1 = cs.getNowTime(Date.parse(new Date()) / 1000).substr(-2) - 1; //距离本月1号有多少天
\t\t\t\tvar lastmonthday_1 = cs.getNowTime(Date.parse(new Date()) / 1000);
\t\t\t\tvar newday = lastmonthday_1.substring(0, 4) + '-' + (lastmonthday_1.substring(5, 7) - 1) + '-01';
\t\t\t\tif(lastmonthday_1.substring(5, 7) == 1) {
\t\t\t\t\tnewday = (lastmonthday_1.substring(0, 4) - 1) + '-12-01';
\t\t\t\t}
\t\t\t\tvar newdaytime = Date.parse(new Date(newday)) / 1000; //上个月1号的时间戳
\t\t\t\tswitch(param.time) {
\t\t\t\t\tcase '1':
\t\t\t\t\t\ttimestamp = `jzm_service_info.com_time > \${today}`;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '2':
\t\t\t\t\t\ttimestamp = `jzm_service_info.com_time < \${today} and jzm_service_info.com_time>\${today-86400}`
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '3':
\t\t\t\t\t\ttimestamp = `jzm_service_info.com_time > \${today-86400*6}`;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '4':
\t\t\t\t\t\ttimestamp = `jzm_service_info.com_time > \${today-86400*29}`;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '5':
\t\t\t\t\t\ttimestamp = `jzm_service_info.com_time > \${today-86400*day_1}`;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '6':
\t\t\t\t\t\ttimestamp = `jzm_service_info.com_time < \${today-86400*day_1} jzm_service_info.com_time>\${newdaytime}`;
\t\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tvar where = `\${timestamp}`;
\t\t\t\tvar data = {
\t\t\t\t\t\"type\": 6,
\t\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\t\"where\": where
\t\t\t\t}
\t\t\t\tif(param.aid != '' || param.aid != undefined) {
\t\t\t\t\tdata['staff_name'] = param.aid;
\t\t\t\t}
\t\t\t\tgetPageList_2(data);
\t\t\t\tykp.setCookie(\"aid\", \"\", (1 / 24));
\t\t\t\tykp.setCookie(\"time\", \"\", (1 / 24));
\t\t\t} else if(ykp.getCookie('detailsId') && ykp.getCookie('detailsId') != '') {
\t\t\t\tvar id = ykp.getCookie('detailsId');
\t\t\t\tvar data = {
\t\t\t\t\t\"type\": 6,
\t\t\t\t\t\"page\": curPage,
\t\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\t\"where\": 'htm_contract.id=' + id
\t\t\t\t}

\t\t\t\tgetPageList_2(data);
\t\t\t\tykp.setCookie(\"detailsId\", '', (1 / 24));

\t\t\t} else {
\t\t\t\t//获取列表数据
\t\t\t\tgetPageList(1);
\t\t\t}
\t\t}

\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_service/service_list',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: filter,
\t\t\t\tlimit: pagesize,
\t\t\t\ttype: 6
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '#pageBar'
\t\t\t},
\t\t\tinitOrder: 'khm_customer.id',
\t\t\tdefaultOrder: order,
\t\t\tcontentId: \"#dataList\",
\t\t\tparams: [{
\t\t\t\tid: \"#dynamic-table\",
\t\t\t\tfield: [\"\", \"khm_customer.name\", \"maxLv\", \"customer_num\", \"pos_name\", \"htm_contract.payment_cycle\",
\t\t\t\t\t\"\", \"\", \"jzm_service_info.fuze_id\"
\t\t\t\t]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});

\t\t\$('#flush').click(function() {
\t\t\tykp.setCookie('where','');
            filter = '';
\t\t\t\$('[sear=\"customer_name\"]').val('');
\t\t\t\$('[sear=\"khm_customer.customer_num\"]').val('');
\t\t\t\$('[sear=\"jzm_service_info.fuze_id\"]').val('').trigger('change');
\t\t\tgetPageList();
\t\t})
\t\tcs.getAllCw(function(option) {
            \$('#heightsearch1 .cw').html(option);
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

\t\t\$('.myFilter').click(function() {
\t\t\tif(!\$(this).hasClass('clc')) {
\t\t\t\t\$(this).addClass('clc').siblings().removeClass('clc');
\t\t\t}
\t\t\tvar user = JSON.parse(ykp.getCookie('userinfo'));
\t\t\tvar data = {
\t\t\t\t\"type\": 6,
\t\t\t\t\"page_size\": pagesize,
\t\t\t\t'page': curPage

\t\t\t};
\t\t\tvar filter_ = \$(this).attr('data-kind');
\t\t\tif(filter_ == '0') {
\t\t\t\tgetPageList(1);
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
\t\t\t\tdata.up_user = user.id;
\t\t\t}
\t\t\tfilter = data['where'];
\t\t\tgetPageList_2(data);
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
\t\t\t\t//\$('.advandced-search').append('<option value=\"\">请选择</option>');
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

\t\tfunction getPageList_2(data) {
\t\t\t//高级搜索
\t\t\tdohSearch();
\t\t\t//普通搜索
\t\t\tsearch();
\t\t\tykp.list({
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: data,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\t//生成月份表头
\t\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'), res['data']['months']);
\t\t\t\t\tif(res.data.items == '' || res.data == \"\") {
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

\t\t//页面跳转
\t\tfunction skPage(urls) {
\t\t\tvar url_ = urls.split('&')[0].split('=')[1];
\t\t\t\$('#navBox #nav-list li').find('li[data-url\$=\"' + url_ + '\"]').click();
\t\t}

\t\tvar emps = allemp();

\t\tfunction sendList() {
\t\t\t//加载送单列表
\t\t\tykp.list({
\t\t\t\turl: '/api/api_service/get_send_list',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: pagesize1,
\t\t\t\t\tpage: 1
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar1'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tvar data = res.data.items;
\t\t\t\t\tvar html = '';
\t\t\t\t\tvar status = {
\t\t\t\t\t\t\"-1\": \"出库失败\",
\t\t\t\t\t\t\"0\": \"出库中\",
\t\t\t\t\t\t\"1\": \"待送单\",
\t\t\t\t\t\t\"2\": \"送单成功\",
\t\t\t\t\t\t\"3\": \"待入库\",
\t\t\t\t\t\t\"4\": \"送单失败\",
\t\t\t\t\t\t\"5\": \"入库失败\"
\t\t\t\t\t}
\t\t\t\t\tvar content = [];
\t\t\t\t\tfor(var j in data) {
\t\t\t\t\t\tswitch(data[j]['jzm_send_info.status']) {
\t\t\t\t\t\t\tcase \"-1\":
\t\t\t\t\t\t\t\tcontent.push('出库失败');
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase \"0\":
\t\t\t\t\t\t\t\tcontent.push('出库中');
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase \"1\":
\t\t\t\t\t\t\t\tcontent.push('<label class=\"pos-rel\"><a><span class=\"suc btGreen\" title=\"成功\" id=\"see\"><i class=\"fa fa-check-circle-o\"></i></span></a><a style=\"margin-left:10px\"><span class=\"fail btRed\" title=\"失败\" id=\"see\"><i class=\"fa fa-close\"></i></span></a></label>');
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase \"2\":
\t\t\t\t\t\t\t\tcontent.push('送单成功');
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase \"3\":
\t\t\t\t\t\t\t\tcontent.push('待入库');
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase \"4\":
\t\t\t\t\t\t\t\tcontent.push('送单失败');
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase \"5\":
\t\t\t\t\t\t\t\tcontent.push('入库失败');
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\thtml += `<tr data-id=\"\${data[i]['jzm_send_info.id']}\"  data-cid=\"\${data[i]['jzm_send_info.customer_id']}\">
\t\t\t\t\t\t\t\t<td data-cid=\"\${data[i]['jzm_send_info.customer_id']}\">
\t\t\t\t\t\t\t\t\t\${data[i]['khm_customer.name']}
\t\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t \t\t\t\t<i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data[i]['Remark'].length > 0 ? 'red' : ''}\"  data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i>
\t\t\t\t\t \t\t\t\t </label>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>\${data[i]['ckm_position_num.pos_name']+data[i]['ckm_position_num.pos_num']}</td>
\t\t\t\t\t\t\t\t<td>\${data[i]['jzm_send_info.contacts']}</td>
\t\t\t\t\t\t\t\t<td>\${data[i]['jzm_send_info.tel']}</td>
\t\t\t\t\t\t\t\t<td>\${data[i]['jzm_send_info.address']}</td>
\t\t\t\t\t\t\t\t<td>\${data[i]['bmm_employees.name']}</td>
\t\t\t\t\t\t\t\t<td>\${data[i]['jzm_send_info.month']}</td>
\t\t\t\t\t\t\t\t<td>\${data[i]['num']}</td>
\t\t\t\t\t\t\t\t<td>\${content[i]}</td>
\t\t\t\t\t\t\t\t\t</tr>`;
\t\t\t\t\t}
\t\t\t\t\t\$(\"#_dataList\").html(html);
\t\t\t\t\tcustom.showReamrk();
\t\t\t\t\t\$('#num1').html(\"共\" + res.data.totalCount + \"条数据\");
\t\t\t\t\t//执行成功操作
\t\t\t\t\t\$('.suc').click(function() {
\t\t\t\t\t\tvar sid = \$(this).parents('tr').attr('data-id');
\t\t\t\t\t\tvar cid = \$(this).parents('tr').attr('data-cid');
\t\t                var param = {
\t\t\t                    time: (\$(this).parents('tr').find('td').eq(6).html()).substring(0,20),
\t\t\t                    name: (\$(this).parents('tr').find('td').eq(0).text()).replace(/\\s/ig,''),
\t\t\t                };
\t\t\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\t\tlayer.confirm(\"确认送单成功吗\", function(index) {
 \t\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\t\turl: \"/api/api_service/send_status_new\",
\t\t\t\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\t\tid: sid,
\t\t\t\t\t\t\t\t\t\tstatus: 2
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\t\tykp.prompt('送单成功');
\t\t\t\t\t\t                sendMsg(cid,'送单成功',param);
\t\t\t\t\t\t\t\t\t\tsendList();
\t\t\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}); 
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t        //发送短信
\t\t\t        function sendMsg(id,type,param){
\t\t\t            ykp.doAjax({
\t\t\t                url:'/api/api_common/send_customer',
\t\t\t                data:{
\t\t\t                    customer_id:id,
\t\t\t                    type:type,
\t\t\t                    param:JSON.stringify(param)
\t\t\t                },
\t\t\t                method:'post',
\t\t\t                success:function(res){
\t\t\t                    ykp.prompt('短信发送成功！');
\t\t\t                }
\t\t\t            });
\t\t\t        }

\t\t\t\t\t//执行失败操作
\t\t\t\t\t\$('.fail').click(function() {
\t\t\t\t\t\tvar sid = \$(this).parents('tr').attr('data-id');
\t\t\t\t\t\tvar cid = \$(this).parents('tr').attr('data-cid');
\t\t\t\t\t\tvar param = {
\t\t\t                    time: (\$(this).parents('tr').find('td').eq(6).html()).substring(0,20),
\t\t\t                    name: (\$(this).parents('tr').find('td').eq(0).text()).replace(/\\s/ig,''),
\t\t\t            \t};
\t\t\t\t\t\t\$('#fail').fadeIn();
\t\t\t\t\t\t\$('#fail').find('input').val('');
\t\t\t\t\t\t\$('#fail .hold').unbind('click').click(function() {
\t\t\t\t\t\t\tvar approve_reply = \$('#fail').find('input').val().trim();
\t\t\t\t\t\t\tif(approve_reply == '') {
\t\t\t\t\t\t\t\tykp.prompt('不能为空！');
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\turl: \"/api/api_service/send_status_new\",
\t\t\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\tid: sid,
\t\t\t\t\t\t\t\t\tstatus: 3,
\t\t\t\t\t\t\t\t\treason: approve_reply
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\tparam.msg = (approve_reply.replace(/\\s/ig,'')).substring(0,20);
\t\t\t\t\t\t\t\t\tsendMsg(cid,'送单失败',param);
\t\t\t\t\t\t\t\t\tsendList();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t\t\t})
\t\t\t\t\t\tcs.closePop();
\t\t\t\t\t})

\t\t\t\t}
\t\t\t})
\t\t}

\t\t//同步改变联系人电话
\t\tfunction getContactTel() {
\t\t\t\$('#templateCon .people').change(function() {
\t\t\t\tvar id = \$(this).val();
\t\t\t\tfor(var i in data) {
\t\t\t\t\tif(id == data[i]['']) {
\t\t\t\t\t\t\$('#templateCon .tel').text('  ');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//展示送单列表
\t\t\$('#singleList').unbind('click').click(function() {
\t\t\tif(\$(this).hasClass('active')) {
\t\t\t\t\$('.sendList').hide();
\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\$(this).removeClass('active').css('z-index', '');
\t\t\t\treturn;
\t\t\t}
\t\t\t\$('.sendList').show();
\t\t\tsendList();

\t\t\t\$('.in').addClass('modal-backdrop');
\t\t\t\$(this).addClass('active').css('z-index', '1041');

\t\t\t\$('.in').unbind('click').click(function() {
\t\t\t\t\$('.sendList').hide();
\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\$('#singleList').removeClass('active').css('z-index', '');

\t\t\t\t\$(this).off('click');
\t\t\t});
\t\t})

\t\t//导入导出
\t\tvar data = {
\t\t\turl: \"/api/api_service/serviceExport\",
\t\t\ttype: '6',
\t\t\ttitle: '送单模板'
\t\t}
\t\t\tcs.jzexport(data, function(res) {
\t\t\t
\t\t\tsetTimeout(function(){
\t\t\tykp.prompt(\"上传成功\");
\t\t\t},1000)
\t\t\t
\t\t\tgetEntireList(1);
\t\t\t\$('.label_popup').hide();
\t\t})

\t\t
\t\tvar resData = ''; //回调返回的数据
\t\ttSearch()
\t\t\$('#changePageNum').change(function() {
\t\t\tpagesize = \$(this).val();
\t\t\tykp.setCookie('page_size',pagesize);
\t\t\tgetPageList(1);
\t\t})
\t\t\$('#changePageNum1').change(function() {
\t\t\tpagesize1 = \$(this).val();
\t\t\tsendList();
\t\t})
\t\t//获取所有员工(负责人)
\t\tfunction allemp() {
\t\t\tvar emps;
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_employees/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tasync: false,
\t\t\t\tdata: {
\t\t\t\t\tpage: 1,
\t\t\t\t\tlimit: 999
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\temps = res.data.items;
\t\t\t\t}
\t\t\t})
\t\t\treturn emps;
\t\t}

\t\tfunction tSearch() {
\t\t\t\$('.tsarch').click(function() {
\t\t\t\tvar month = \$('#tmonth').val();
\t\t\t\tvar data = {
\t\t\t\t\turl: \"\",
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tmonth: month,
\t\t\t\t\t\torder: order
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tfor(var i = 0; i < 3; i++) {
\t\t\t\t\tconsole.log('.chart' + (i + 1) + ' .easy-pie-chart')
\t\t\t\t\t\$('.chart' + (i + 1) + ' .easy-pie-chart').attr('data-percent', 45 + i);
\t\t\t\t\t\$('.chart' + (i + 1) + ' #percent2').html(45 + i + '%');
\t\t\t\t\t//\t\t\t\t\t\t\t\teasyChary();
\t\t\t\t}

\t\t\t\treturn false;
\t\t\t\tcs.doAjax(data, function(res) {
\t\t\t\t\tfor(var i = 0; i < 3; i++) {
\t\t\t\t\t\tconsole.log('.chart' + (i + 1) + ' .easy-pie-chart')
\t\t\t\t\t\t\$('.chart' + (i + 1) + ' .easy-pie-chart').attr('data-percent', 45 + i);
\t\t\t\t\t\t\$('.chart' + (i + 1) + ' .percent2').text(45 + i + '%');
\t\t\t\t\t\teasyChary();
\t\t\t\t\t}
\t\t\t\t})
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

\t\t//生成月份表头：el 所有月份表头，months:开始、结束月份
\t\tfunction generateMonthTh(el, months) {
            if(!months){
                return;
            }
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
\t\t\tif(\$(\".widget-main\").find(\"#custom\").length < 1){
                cs.custorm_check('#dynamic-table', '#dataList', true);
\t\t\t}

\t\t};

\t\tcs.setFuze({
\t\t\tconId: \"#dataList\",
\t\t\ttype: \"6\",
\t\t\turl: \"/api/api_service/transfer_user\",
\t\t\tfun: function() {
\t\t\t\tgetPageList();
\t\t\t}
\t\t});

\t\t//加载数据
\t\tfunction getPageList(curPage) {
\t\t\t//高级搜索
\t\t\tdohSearch();
\t\t\t//普通搜索
\t\t\tsearch();
\t\t\tvar data = {
\t\t\t\t\"type\": 6,
\t\t\t\t\"page\": curPage,
\t\t\t\t\"page_size\": pagesize,
\t\t\t\torder: order,
\t\t\t\tfilter: filter,
\t\t\t\twhere: filter
\t\t\t}
\t\t\tfor(var i in other) {
\t\t\t\tdata[i] = other[i]
\t\t\t}
\t\t\tif(month2) {
\t\t\t\tdata.month2 = month2;
\t\t\t}
\t\t\tykp.list({
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: data,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar',
\t\t\t\t\twhere:filter
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\t//生成月份表头
\t\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'), res['data']['months']);

\t\t\t\t\tif(res.data.items == '') {

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

\t\t//生成服务月份html
\t\tfunction generateTd(data) {
\t\t\tvar html;

\t\t\tvar month; //月份
\t\t\t//\t\t\tvar status = ['','','出库中','待送单','送单成功','待入库','送单失败','入库失败'];
\t\t\tvar status = {
\t\t\t\t\"-1\": \"出库失败\",
\t\t\t\t0: \"出库中\",
\t\t\t\t1: \"待送单\",
\t\t\t\t2: \"送单成功\",
\t\t\t\t3: \"待入库\",
\t\t\t\t4: \"送单失败\",
\t\t\t\t5: \"入库失败\"
\t\t\t}

\t\t\t//styles : 审批状态对应显示的样式
\t\t\tvar styles = ['', 'fa  fa-circle-o', 'glyphicon glyphicon-ok', 'glyphicon glyphicon-remove'];
\t\t\t\$('#dynamic-table .thColor .month').each(function(i, e) {
\t\t\t\tmonth = \$(this).attr('month');

\t\t\t\tif(!data[month]) {
\t\t\t\t\thtml += '<td get_money style=\"display:' + \$(this).css('display') + ';border:1px solid #eee !important;\" data-num=\"' + \$(this).attr('data-num') + '\"></td>';
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\thtml +=
\t\t\t\t\t`<td class=\"center\" \${data[month]['Status'] ? \"cstatus\" : \"\"} title=\"\${month +\"\"+ (data[month]['send_status'] != 0 ? (\",\"+status[data[month]['send_status']]) :\"\")}\" get_money=\"\${data[month]['get_money']}\" contract_id=\"\${data[month]['contract_id']}\" fuze_id=\"\${data[month]['fuze_id']}\" hang_statu=\"\${data[month]['hang_statu']}\" data-id=\"\${data[month]['id']}\" data-status=\"\${data[month]['status']}\" data-num=\"\${\$(this).attr('data-num')}\" style=\"display:\${\$(this).css('display')};;border:1px solid #eee !important;\" data-month=\"\${data[month]['time']}\">
\t\t\t\t\t<label class=\"pos-rel \${styles[data[month]['status']]}\"></label>
\t\t\t\t</td>`;
\t\t\t});

\t\t\treturn html;
\t\t}

\t\tfunction addList(res) {
\t\t\t// cs.last_year_month();
\t\t\t//列表数据
\t\t\tvar data = res.data.items;
\t\t\t//tbody下的html内容
\t\t\tvar html = '';

\t\t\t//处理服务器返回的每月的服务数据
\t\t\tvar _data = {};
\t\t\tvar obj = {};

\t\t\t//服务周期
\t\t\tvar payment_cycle = {
\t\t\t\t'1': '每月',
\t\t\t\t'3': '季度',
\t\t\t\t'6': '半年',
\t\t\t\t'12': '一年'
\t\t\t};

\t\t\tykp.setCookie('page_no', res.data.curPage, (1 / 24));

\t\t\t//表头显示 隐藏样式
\t\t\tvar styles = [];
\t\t\t\$('#dynamic-table .thColor th').each(function(i, e) {
\t\t\t\tstyles.push(\$(this).css('display'));
\t\t\t});
            //负责人id
\t\t\tvar fuze_ids = [];
\t\t\t//负责人名字
\t\t\tvar fuze = [];
\t\t\t//维护周期
\t\t\tvar service_cylce = [];
\t\t\t//维护周期名字
\t\t\tvar cycle = [];
\t\t\t//月份服务数据td  html
\t\t\tvar td_html;

\t\t\tfor(var i in data) {

\t\t\t\tfor(var j = 0; j < data[i].list.length; j++) {
\t\t\t\t\tobj.status = data[i].list[j]['jzm_service_info.status'];
\t\t\t\t\tobj.send_status = data[i].list[j]['jzm_send_info.status'];
\t\t\t\t\tobj.get_money = data[i].list[j]['jzm_service_info.get_money'];
\t\t\t\t\tobj.id = data[i].list[j]['jzm_service_info.id'];
\t\t\t\t\tobj.time = data[i].list[j]['jzm_service_info.time'];
\t\t\t\t\tobj.contract_id = data[i]['list'][j]['jzm_service_info.contract_id'];
\t\t\t\t\tobj.fuze_id = data[i]['list'][j]['jzm_service_info.fuze_id'];
\t\t\t\t\tobj.hang_statu = data[i]['list'][j]['htm_contract.status'];
\t\t\t\t\tobj.Status = data[i].list[j]['htm_contract.status'] == 1 || data[i].list[j]['htm_contract.status'] == 2 ? false : true; //合同状态
\t\t\t\t\t_data[data[i].list[j]['jzm_service_info.time']] = obj;
\t\t\t\t\tobj = {};
\t\t\t\t}
\t\t\t\t//生成服务月份html
\t\t\t\ttd_html = generateTd(_data);

\t\t\t\tfor(var j in emps) {
\t\t\t\t\tif(emps[j]['bmm_employees.id'] == data[i].list[0]['htm_contract.assign_staff_id']) {
\t\t\t\t\t\tvar empname = emps[j]['bmm_employees.name'];
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tfor(var j = data[i]['list'].length - 1; j >= 0; j--) {
\t\t\t\t\t//负责人id不存在 则将负责人id加入fuze_ids中
\t\t\t\t\tif(\$.inArray(data[i].list[j]['jzm_service_info.fuze_id'], fuze_ids) == -1) {
\t\t\t\t\t\tfuze_ids.push(data[i].list[j]['jzm_service_info.fuze_id']);
\t\t\t\t\t}
\t\t\t\t\t//维护周期不存在 则将维护周期加入service_cylce中
\t\t\t\t\tif(\$.inArray(data[i].list[j]['htm_contract.payment_cycle'], service_cylce) == -1) {
\t\t\t\t\t\tservice_cylce.push(data[i].list[j]['htm_contract.payment_cycle']);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t//根据负责人id 获取负责人姓名并存入fuze中
\t\t\t\tfor(var j = 0; j < 1; j++) {
\t\t\t\t\tfuze.push(employees[fuze_ids[j]]);
\t\t\t\t}

\t\t\t\t//根据service_cylce 将维护周期存入cycle中
\t\t\t\tfor(var j in service_cylce) {
\t\t\t\t\tcycle.push(payment_cycle[service_cylce[j]]);
\t\t\t\t}

\t\t\t\thtml +=
\t\t\t\t\t`<tr data-id=\"\${data[i]['customer_id']}\" cid=\"\${data[i]['customer_id']}\" data-fuz=\"\${fuze.join(',')}\">
\t\t\t\t\t\t\t<td class=\"center\">
\t\t                        <label class=\"pos-rel\">
\t\t                        <input type=\"checkbox\" name=\"check\" class=\"ace\"/>
\t\t                        <span class=\"lbl\"></span>
\t\t                        </label>
\t\t                    </td>
                            <td data-num=\"1\" style=\"display: \${styles[1]}\" data-cid=\"\${data[i]['customer_id']}\">
                            <div style=\"display:\${data[i]['is_red'] == '0' ? 'none' : 'inline-block'};height:14px;width:17px\">
\t\t\t\t\t \t\t\t<span class=\"spanTip\" style=\"\"><span>
\t\t\t\t\t\t\t</div>
                            <a href=\"#\" class=\"customerDetail pos-rel\">\${data[i].list[0]['khm_customer.name']}</a>
                            <label class=\"pos-rel\">
                            \t<i relation=\${data[i]['is_relotion']} class=\"sc fa \${data[i]['is_relotion'] == 0 ? 'fa-heart-o' : 'fa-heart'}\" style=\"color:\${data[i]['is_relotion']==1 ? 'red' : ''}\"></i>
\t\t\t\t \t\t\t\t<i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data[i]['Remark'].length > 0 ? 'red' : ''}\"  data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i>
\t\t\t \t\t\t\t </label>
                            </td>
                            <td data-num=\"19\" style=\"display: \${styles[2]}\">
\t\t\t\t\t\t\t\t\${parseInt(data[i]['maxLv']).toFixed(2)}
                            </td>
                            <td data-num=\"2\" style=\"display: \${styles[3]}\">
\t\t\t\t\t\t\t\t\${data[i]['customer_num']}
                            </td>
                            <td data-num=\"3\" style=\"display: \${styles[4]}\">
                            \t\${data[i]['position']['pos_name']+ data[i].position.pos_num}
                            </td>
                             <td class=\"center\"  data-num=\"4\" style=\"display: \${styles[5]}\">
                                \${cycle[0]}
                            </td>
                            <td class=\"center\"  data-num=\"5\" style=\"display: \${styles[6]}\">
                               \${data[i]['num']}
                            </td>
\t\t\t\t\t\t\t<td class=\"center\"  data-num=\"6\" style=\"display: \${styles[7]}\">
\t\t\t\t\t\t\t   \${data[i]['maxTime']}
\t\t\t\t\t\t\t</td>

                            <td class=\"center\"  data-num=\"7\" style=\"display: \${styles[8]}\">
                               \${fuze.join(',') || ''}
                            </td>    
                            \${td_html}       
                        </tr>`;

\t\t\t\t//置空数据 以便一次循环                                                  
\t\t\t\t_data = {};
\t\t\t\tfuze_ids = [];
\t\t\t\tfuze = [];
\t\t\t\tcycle = [];
\t\t\t\tservice_cylce = [];
\t\t\t};

\t\t\t\$('#dataList').html(html);
\t\t\tcs.sc('送单', function(res) {
\t\t\t\tgetPageList(1);
\t\t\t})

\t\t\tcustom.get_custom_info();
\t\t\tcustom.showReamrk();
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\tvar statu = cs.getNodes([108, 289], true);
\t\t\t\$('#dataList').find('td[get_money]').each(function() {
\t\t\t\tif(\$(this).attr('get_money') > 0) {
\t\t\t\t\t\$(this).css('background-color', '#00cc22')
\t\t\t\t}
\t\t\t})

\t\t\t\$('[data-rel=tooltip]').tooltip();

\t\t\t\$('.see').click(function() {
\t\t\t\tvar id = \$(this).parents(\"tr\").attr(\"data-id\");
\t\t\t\tykp.setCookie('contract_id', id, (1 / 24));
\t\t\t\tskPage(\"?url=tax&i=0-1-6&type=1\");
\t\t\t\t//window.location = \"?url=tax&i=0-1-6&type=1\";
\t\t\t})

\t\t\t\$(\"#dataList td[data-status='0']\").mouseover(function() {
\t\t\t\t\$(this).children('a').css('display', 'inline-block');
\t\t\t})

\t\t\t//未审核状态点击
\t\t\t\$(\"#dataList td[data-month]\").click(function() {
\t\t\t\t//当前登录用户id
\t\t\t\tvar uid = ykp.getCookie('uid');
\t\t\t\tvar fzpeople = \$(this).parents('tr').attr('data-fuz').split(',')[0]
\t\t\t\t//合同状态非已激活时，提示
\t\t\t\tif(\$(this).attr('hang_statu') != '1') {
\t\t\t\t\tvar contract_status = ['合同未激活', '合同已激活', '合同已挂起', '合同已结束', '合同已作废'];
\t\t\t\t\tykp.prompt(contract_status[\$(this).attr('hang_statu')] || \"不可操作\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t//作废未收款不能添加
\t\t\t\tif(\$(this).attr('get_money') == -1 && \$(this).attr('hand-status') == '4' || \$(this).attr('hand-status') == '3') {
\t\t\t\t\tykp.prompt('订单已解约，不能编辑');
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
\t\t\t\t//当前用户非负责人时，提示
\t\t\t\tif(\$(this).attr('fuze_id') != uid) {
\t\t\t\t\tykp.prompt(\"非负责人，不可操作\");
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\tvar customer_id = \$(this).parents('tr').attr('data-id');
\t\t\t\tvar company_name = \$(this).parent().find('[data-num=\"1\"]').text();
\t\t\t\tvar cang = \$(this).parent().find('[data-num=\"3\"]').text();
\t\t\t\t\$('#template1 .name').text(company_name);
\t\t\t\t\$('#template1 .caddress').text(cang);

\t\t\t\t// var thistd = \$(this);

\t\t\t\tvar ser_id = \$(this).attr('data-id');
\t\t\t\tvar contract_id = \$(this).attr('contract_id');
\t\t\t\tvar trIndex = \$(this).parents('tr').find('td').index(\$(this));
\t\t\t\tvar thAry = \$('#dynamic-table thead th')[trIndex].innerHTML;

\t\t\t\tvar trindex = \$(this).parents('tr').index();
\t\t\t\tvar timemonth = \$(this).attr('data-month');
\t\t\t\tvar showStatus = false;
\t\t\t\tvar datas = {
\t\t\t\t\tyear_month_id: timemonth
\t\t\t\t};
\t\t\t\tykp.doAjax({ //标记
\t\t\t\t\turl: '/api/api_service/get_acquiring_list',
\t\t\t\t\tasync: false,
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tservice_id: ser_id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tif(res.code == 200) { //标记
\t\t\t\t\t\t\tvar dat = res.data;
\t\t\t\t\t\t\tif(dat.contact_list.length <= 0) {
\t\t\t\t\t\t\t\tykp.prompt('请先添加联系人');
\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\turl: \"/api/api_contract/get_month_pz\",
\t\t\t\t\t\t\t\tasync: false,
\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\tcontract_id: contract_id,
\t\t\t\t\t\t\t\t\ttype: \"6\",

\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\t\t\t\t//凭证 服务所有月份
\t\t\t\t\t\t\t\t\tvar all_month = data['all_month'];

\t\t\t\t\t\t\t\t\t//已完成服务月份
\t\t\t\t\t\t\t\t\tvar done_month = data['done_month'];

\t\t\t\t\t\t\t\t\t//已完成凭证月份
\t\t\t\t\t\t\t\t\tvar pz_month = data['pz_month'];

\t\t\t\t\t\t\t\t\t//服务月份html
\t\t\t\t\t\t\t\t\tvar service_html = [];
\t\t\t\t\t\t\t\t\t//拼争月份html
\t\t\t\t\t\t\t\t\tvar pz_html = [];

\t\t\t\t\t\t\t\t\tvar index; //下标不等于-1;则打钩禁用

\t\t\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\t\t\turl: \"/api/api_accountancies/get_num_info\",
\t\t\t\t\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\t\t\t\t\tasync: false,
\t\t\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\t\t\tcustomer_id: customer_id
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\t\t\tif(res.code == \"400\") {
\t\t\t\t\t\t\t\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\t\t\t\t\t\t\t\$('#showBox').addClass('ishide');
\t\t\t\t\t\t\t\t\t\t\t\tshowStatus = false;
\t\t\t\t\t\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\t\t\t\t\tvar pzData = res.data;
\t\t\t\t\t\t\t\t\t\t\t\tif(showStatus) {
\t\t\t\t\t\t\t\t\t\t\t\t\tshowMark('#jieTable');
\t\t\t\t\t\t\t\t\t\t\t\t\tlayui.use('element', function(data) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块
\t\t\t\t\t\t\t\t\t\t\t\t\t\telement.init('collapse');
\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\tshowMark('#jieTable');
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#showBox .title').text('交接清单');
\t\t\t\t\t\t\t\t\t\t\t\t\tlayui.use('element', function(data) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块
\t\t\t\t\t\t\t\t\t\t\t\t\t\telement.init('collapse');
\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\tgetway();
\t\t\t\t\t\t\t\t\t\t\t\t\tfor(var i in all_month) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tindex = \$.inArray(all_month[i], done_month);
\t\t\t\t\t\t\t\t\t\t\t\t\t\tservice_html.push(
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t`<label class=\"voucher_label\">
\t\t\t\t\t\t\t\t\t\t                <input type=\"checkbox\" \${index != -1 ? \"checked disabled\" :\"\"}  data-time=\"\${all_month[i]}\">
\t\t\t\t\t\t\t\t\t\t                <span class=\"voucher_month\">\${all_month[i]}</span> 
\t\t\t\t\t\t\t\t\t\t              </label>`
\t\t\t\t\t\t\t\t\t\t\t\t\t\t);

\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\tfor(var i in pzData) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(pzData[i].type == 1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpz_html.push(
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t`<label class=\"voucher_label\">
\t\t\t\t\t\t\t\t\t\t\t                <input type=\"checkbox\"  data-time=\"\${pzData[i]['goods']}\">
\t\t\t\t\t\t\t\t\t\t\t                <span class=\"voucher_month\">\${pzData[i]['goods']}</span> 
\t\t\t\t\t\t\t\t\t\t\t              </label>`);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon .allmonth ').html(service_html.join(''));
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon .pzmonth').html(pz_html.join(''));

\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon .name').attr('data-time', timemonth);
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon #sendMsg').attr('customer_id', customer_id);

\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon').data('flag', '1');
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon .close_get').unbind('click').click(function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon').data('flag', '2');
\t\t\t\t\t\t\t\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\t\tgetContactTel();

\t\t\t\t\t\t\t\t\t\t\t\t\t//加载联系人信息
\t\t\t\t\t\t\t\t\t\t\t\t\t//\$('#templateCon #template1 .name').text(dat.contact_list[0]['customer_id']);
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon #template1 .name').attr('val', dat.contact_list[0]['customer_id']);
\t\t\t\t\t\t\t\t\t\t\t\t\tvar contacts = '',
\t\t\t\t\t\t\t\t\t\t\t\t\t\taddresses = '';
\t\t\t\t\t\t\t\t\t\t\t\t\tfor(var i in dat.contact_list) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor(var j in dat.contact_list[i].address_list) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\taddresses += `<option value=\"\${dat.contact_list[i].address_list[j]['address']}\">\${dat.contact_list[i].address_list[j]['address']}</option>`
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\tcontacts += `<option value=\"\${dat.contact_list[i]['id']}\" selected=\"\${dat.contact_list[i]['is_main']==1?'selected':''  }\">\${dat.contact_list[i]['username']} </option>`;
\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon #template1 .people').html(contacts);
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon #template1 #address').html(addresses);
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon #template1 .tel').text(dat.contact_list[\$('#templateCon #template1 .people').get(0).selectedIndex]['phone']);

\t\t\t\t\t\t\t\t\t\t\t\t\t//切换人改变联系电话
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon #template1 .people').change(function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar index = \$(this).get(0).selectedIndex;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon #template1 .tel').text(dat.contact_list[index]['phone']);
\t\t\t\t\t\t\t\t\t\t\t\t\t})

\t\t\t\t\t\t\t\t\t\t\t\t\tfor(var i in dat.out_list) { //标记
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar li_1 = '';
\t\t\t\t\t\t\t\t\t\t\t\t\t\t//type1
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(dat.out_list[i]['type'] == 1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tli_1 += ` <tr ck_id=\${dat['out_list'][i]['id']}>
\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"javascript:;\" class=\"remove\">-</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td id=\"month\">
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>\${dat['out_list'][i]['goods']}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>\${dat['out_list'][i]['number']}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>`

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon .voucher tbody').html(li_1);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(dat.out_list[i]['type'] == 2) { //标记
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(\$('#templateCon .connects-content>.bill').length <= 0) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon .buttons button').eq(1).click();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t//if(++index == 1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon .bill tbody').empty().append(
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t`<tr ck_id=\${dat['out_list'][i]['id']}><td><a href=\"javascript:;\" class=\"remove\">-</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\${dat['out_list'][i]['goods']}
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>\${dat['out_list'][i]['number']}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>`
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(dat.out_list[i]['type'] == 3) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(\$('#templateCon .connects-content>.certificate').length <= 0) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon .buttons button').eq(2).click();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t//if(++index_ == 1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon .certificate tbody').empty().append(
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t`<tr><td ck_id=\${dat['out_list'][i]['id']}>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"remove\">-</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span>\${dat['out_list'][i]['goods']}</span></td>

\t\t\t\t\t\t\t\t\t\t\t<td><span>\${dat['out_list'][i]['number']}</span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>`
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t} //标记\t
\t\t\t\t\t\t\t\t\t\t\t\t\t} //标记
\t\t\t\t\t\t\t\t\t\t\t\t\tremoveT();

\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon .voucher').find('#month').text(thAry);

\t\t\t\t\t\t\t\t\t\t\t\t\t//删除一行
\t\t\t\t\t\t\t\t\t\t\t\t\tfunction removeT() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.remove').click(function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(this).parents('tr').remove();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t//保存
\t\t\t\t\t\t\t\t\t\t\t\t\t//获取票据的所有数据；
\t\t\t\t\t\t\t\t\t\t\t\t\tvar once = true;
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateBox .add').click(function() {
                                                        delete datas.year_month_id;
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar _button = \$(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(!cs.popValidate()) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tykp.prompt('输入框不能为空!');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar data_pj = [];
\t\t\t\t\t\t\t\t\t\t\t\t\t\t//服务月份
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar service_month = [];
\t\t\t\t\t\t\t\t\t\t\t\t\t\t//凭证数据
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon .pzmonth [data-time]').each(function(i, e) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(!\$(this).prop('disabled') && \$(this).prop('checked')) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata_pj.push({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tgoods: \$(this).attr('data-time'),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype: 1,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnumber: 1
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tservice_month.push(\$(this).attr('data-time'));
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t})

\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(\$('#templateBox .voucher tbody').find('tr').length > 0) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateBox .voucher tbody').find('tr').each(function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata_pj.push({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'name': \$(this).find('td').eq(0).text().trim(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'cate': 1,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'num': \$(this).find('td').eq(1).text().trim(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'money': '',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'ck_id': \$(this).attr('ck_id')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(\$('#templateBox .bill tbody').find('tr').length > 0) {

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateBox .bill tbody').find('tr').each(function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata_pj.push({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'goods': \$(this).find('td').eq(1).text().trim(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'type': \"2\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"number\": \$(this).find('input').eq(0).val()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(\$('#templateBox .certificate tbody').find('tr').length > 0) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateBox .certificate tbody').find('tr').each(function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata_pj.push({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'goods': \$(this).find('td').eq(1).text().trim(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'type': \"3\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"number\": \$(this).find('input').eq(0).val()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t//获取送单方式信息
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar datae = {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\texpress: \$('#templateCon [title=\"express\"]').val().trim(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnum: \$('#templateCon [title=\"expressnum\"]').val().trim(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcost: \$('#templateCon [title=\"cost\"]').val().trim()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t//\t\t\t\t\t\t\t\tdatas['service_id'] = ser_id;
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdatas['dataList'] = JSON.stringify(data_pj);
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdatas['data_type'] = \$('#templateCon [title=\"getway\"]').val();
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(datas.data_type == 3) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdatas['data'] = datae;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(datas.data_type == 3 && (datas.data.express == '' || datas.data.num == '' || datas.data.cost == '')) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tykp.prompt('快递信息必须填写');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(datas.data_type == 3) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdatas['data'] = JSON.stringify(datae);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon .allmonth [data-time]').each(function(i, e) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(!\$(this).prop('disabled') && \$(this).prop('checked')) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tservice_month.push(\$(this).attr('data-time'));
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar time = service_month ? service_month.join(',') : \"\";
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(time) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdatas['year_month_id'] = time;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tykp.prompt('请添加凭证，若无凭证请入库凭证！');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar is_send = false;
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(\$('#templateCon #sendMsg input:checked').val() == 1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tis_send = true;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar customer_id = \$('#templateCon #sendMsg').attr('customer_id');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t//\t\t\t\t\t\t\t\tdatas['service_id'] = ser_id;

\t\t\t\t\t\t\t\t\t\t\t\t\t\tdatas['contract_id'] = contract_id;
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdatas['contacts'] = \$('#templateBox .people').text();
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdatas['tel'] = \$('#templateBox .tel').text();
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdatas['remark'] = \$('#templateBox .rmark').val();
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdatas['address'] = \$('#templateBox #address').val();
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdatas['is_send'] = \$('#templateBox [name=\"status\"]:checked').val();
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar param = {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname: \$('#templateCon .name').text().trim(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttime: \$('#templateCon .name').attr('data-time'),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tuser: fzpeople
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

                                                        var fileBox = \$('#templateCon #fileBox');
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar files = [];
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(fileBox.children().length > 0) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon #fileBox').find('a').each(function(i) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfiles.push({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname: \$(this).text(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\turl: \$(this).attr('href')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t})

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdatas.files = JSON.stringify(files);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
                                                        if(once){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonce = false;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tykp.prompt('数据保存中...');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsetTimeout(function(){once = true},5000);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\turl: '/api/api_service/add_send_list_new',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmethods: 'post',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata: datas,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcs.close();

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(is_send) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsendMsg(customer_id, '准备送单', param);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tgetPageList(1);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t\t\t\t\t};

\t\t\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\tshowStatus = true;
\t\t\t\t\t\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\t\t\t\t\t\tvar pj = [],
\t\t\t\t\t\t\t\t\t\t\t\tzj = [];
\t\t\t\t\t\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\t\t\t\t\t\tif(data[i].type == 2) {
\t\t\t\t\t\t\t\t\t\t\t\t\tpj.push(`<tr><td><a href=\"javascript:;\" class=\"delTicket\" style=\"    font-size: 24px !important;\">-</a></td><td>\${data[i].goods}</td>
\t\t\t\t\t\t\t<td>\${data[i].count}</td><td><input data-num=\"\${data[i].count}\" value=\"0\" class=\"snum\"/>  </td></tr>`)
\t\t\t\t\t\t\t\t\t\t\t\t} else if(data[i].type == 3) {
\t\t\t\t\t\t\t\t\t\t\t\t\t//\t\t\t\t\t\t\t\t\t\t\t\t\tzj.push(`<tr><td><a href=\"javascript:;\" class=\"delTicket\">-</a></td><td>\${data[i].goods}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t//\t\t\t\t\t\t\t\t<td><a href=\"javascript:;\" class=\"delNum\" style=\"margin-right: 20px;\">-</a><span>\${data[i].count}</span></td></tr>`)
\t\t\t\t\t\t\t\t\t\t\t\t\tzj.push(`<tr><td><a href=\"javascript:;\" class=\"delTicket\" style=\"    font-size: 24px !important;\">-</a></td><td>\${data[i].goods}</td>
\t\t\t\t\t\t\t<td>\${data[i].count}</td><td><input data-num=\"\${data[i].count}\" value=\"0\" class=\"snum\"/></td></tr>`)
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\$('#templateBox #ticketBody').html(pj.join(','));
\t\t\t\t\t\t\t\t\t\t\t\$('#templateBox #cardBody').html(zj.join(','));
\t\t\t\t\t\t\t\t\t\t\tchangeList('.delTicket', '.delNum');
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t///api/api_accountancies/get_num_info

\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})

\t\t\t\t\t\t\t/**
\t\t\t\t\t\t\t *   删除本条记录  
\t\t\t\t\t\t\t *\t  减少数量 最少为1
\t\t\t\t\t\t\t */
\t\t\t\t\t\t\tfunction changeList(el, el1) {
\t\t\t\t\t\t\t\t//删除本条记录  
\t\t\t\t\t\t\t\t\$(el).click(function() {
\t\t\t\t\t\t\t\t\t\$(this).parents('tr').remove();
\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t//减少数量 最少为1
\t\t\t\t\t\t\t\t\$(el1).click(function() {
\t\t\t\t\t\t\t\t\t\$(this).next().text() > 1 ? \$(this).next().text(parseInt(\$(this).next().text()) - 1) : \"\";
\t\t\t\t\t\t\t\t})

\t\t\t\t\t\t\t\t\$('.snum').change(function() {
\t\t\t\t\t\t\t\t\tif(\$(this).val() < 0) {
\t\t\t\t\t\t\t\t\t\t\$(this).val(1);
\t\t\t\t\t\t\t\t\t} else if(\$(this).val() > parseInt(\$(this).attr('data-num'))) {
\t\t\t\t\t\t\t\t\t\t\$(this).val(\$(this).attr('data-num'));
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tfunction voucherToService() {
\t\t\t\t\t\t\t\t\$('#templateCon .pzmonth input').unbind('click').click(function() {
\t\t\t\t\t\t\t\t\t// if(\$(this).prop('checked')){
\t\t\t\t\t\t\t\t\t\$('#templateCon .allmonth input[data-time=\"' + \$(this).attr('data-time') + '\"]').prop('checked', \$(this).prop('checked'));
\t\t\t\t\t\t\t\t\t// }
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}

\t\t\t\t\t\t} //标记 

\t\t\t\t\t} //标记

\t\t\t\t}) //标记
\t\t\t}) //标记
\t\t\t\$(\"#dataList td[data-status='0']\").mouseout(function() {
\t\t\t\t\$(this).children('a').css('display', 'none');
\t\t\t})

\t\t} //标记
\t\t/*//自定义列表
\t\tcs.custorm_check('#dynamic-table', '#dataList', true);*/

\t\t//发送短信
\t\tfunction sendMsg(id, type, param) {
\t\t\tykp.doAjax({
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

\t\t//查询
\t\tfunction search() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\t\"type\": 6,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}
\t\t\tcs.doSearch('#search', data, 'where', false, function(res, _filter,_other) {
\t\t\t\tfilter = _filter;
\t\t\t\tother = _other;
\t\t\t\t//生成月份表头
\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'), res['data']['months']);

\t\t\t\tif(res.data.items == '') {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
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

\t\t//高级查询
\t\tfunction dohSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\t\"type\": 6,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}

\t\t\tcs.hSearch('.search1', data, 'where', false, function(res, _filter, month) {
\t\t\t\tfilter = _filter;
\t\t\t\tmonth2 = month;
\t\t\t\t//生成月份表头
\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'), res['data']['months']);

\t\t\t\t\$('.in').click();
\t\t\t\t\$('#heightsearch1').removeClass('active');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\tif(res.data.items == '') {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
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

\t\t//高级搜索按钮
\t\tcs.showHeightSearch('#heightsearch', '#heightsearch1');

\t\t//\t\t顶部chart
\t\tcs.getChart(6);
\t\t//\t\t能量条形式控制
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

\t}) //标记

\t//导入企业
\t\$('#leading-in').change(function() {
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

\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/task/single.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  765 => 742,  761 => 741,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	#templateCon table {*/
/* 		margin-bottom: 20px;*/
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
/* 	*/
/* 	#templateCon .connects-content a {*/
/* 		text-decoration: none;*/
/* 	}*/
/* 	*/
/* 	#dynamic-table1 tr td {*/
/* 		height: 40px;*/
/* 		line-height: 40px;*/
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
/* 	.checkbox input {*/
/* 		width: 20px !important;*/
/* 	}*/
/* 	*/
/* 	#_dataList td {*/
/* 		white-space: nowrap !important;*/
/* 		text-align: left !important;*/
/* 		padding: 5px 10px !important;*/
/* 		min-width: 60px;*/
/* 		/* border: 1px solid #ddd; *//* */
/* 		height: 35px !important;*/
/* 	}*/
/* 	*/
/* 	.pzmonth span {*/
/* 		line-height: 24px;*/
/* 	}*/
/* 	*/
/* 	#templateCon label {*/
/* 		width: 100px !important;*/
/* 	}*/
/* 	*/
/* 	#templateBox {*/
/* 		padding: 0px !important;*/
/* 	}*/
/* 	#templateBox {*/
/* 		padding-top: 50px !important;*/
/* 		overflow-y: hidden;*/
/* 	}*/
/* 	*/
/* 	.layui-colla-content {*/
/* 		padding: 10px;*/
/* 	}*/
/* 		#dataList td[get_money] {*/
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
/* 		background-color: #00cc22;*/
/* 		box-shadow: 0px 0px 2px #f5f5f5 !important;*/
/* 	}*/
/* </style>*/
/* */
/* <div class="widget-main">*/
/* 	<div id="task-tab" class="tab-pane active">*/
/* 		<div class="row" style="margin-top: 20px;">*/
/* 			<!-- <h3 class="header smaller lighter blue">送单</h3> -->*/
/* 			<!--普通搜索-->*/
/* 			<!--<div class="col-sx-12" style=" float: left">*/
/* 				<div class="form-group col-xs-12" style="padding-left:0;">*/
/* 					<label class="control-label  col-sm-3 no-padding-right " style="margin:0px !important; padding-left: 0px;height:30px;line-height:30px;"> 月份 </label>*/
/* 					<div class="col-sm-9">*/
/* 						<select id="form-field-select-1">*/
/* 							<option value=""></option>*/
/* 							<option value="1">1月</option>*/
/* 							<option value="2">2月</option>*/
/* 							<option value="3"> 3月</option>*/
/* 							<option value="4"> 4月</option>*/
/* 							<option value="5">5月</option>*/
/* 							<option value="6">6月</option>*/
/* 							<option value="7"> 7月</option>*/
/* 							<option value="8"> 8月</option>*/
/* 							<option value="9">9月</option>*/
/* 							<option value="10">10月</option>*/
/* 							<option value="11"> 11月</option>*/
/* 							<option value="12"> 12月</option>*/
/* 						</select>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>-->*/
/* */
/* 			<div style="margin-top: 50px;  width: 860px; padding: 0px;" class="row col-xs-12">*/
/* 				<div class="col-xs-12 infobox-container" style="padding: 0px; margin-left: -10px;">*/
/* 					<!-- #section:pages/dashboard.infobox -->*/
/* 					<div class="infobox infobox-blue2" style="color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;">*/
/* 						<div class="infobox-data" style="padding: 0px;">*/
/* 							<div class="infobox-content" style="text-align: center;">*/
/* 								本月目标*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="infobox infobox-blue2" style="color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;">*/
/* 						<div class="infobox-data" style="padding: 0px;">*/
/* 							<div class="infobox-content" style="text-align: center;">*/
/* 								新增任务*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="infobox infobox-blue2" style="color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;">*/
/* 						<div class="infobox-data" style="padding: 0px;">*/
/* 							<div class="infobox-content" style="text-align: center;">*/
/* 								逾期任务*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="infobox infobox-blue2" style="color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;">*/
/* 						<div class="infobox-data" style="padding: 0px;">*/
/* 							<div class="infobox-content" style="text-align: center;">*/
/* 								累计任务*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="infobox infobox-blue2 chart1">*/
/* 						<div class="infobox-progress">*/
/* 							<div class="easy-pie-chart percentage" data-percent="0" data-size="50" style="height: 57px;width: 57px;line-height: 56px;">*/
/* 								<span class="percent" id="percent2"></span>*/
/* 								<canvas height="57" width="57"></canvas>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="infobox-data" style="margin:3px 0 0 20px;">*/
/* 							<div class="infobox-content" id="isOk">已完成</div>*/
/* 							<div class="infobox-content" id="noOk">未完成</div>*/
/* 							<div class="infobox-content" id="noOk">未完成</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="infobox infobox-blue2 chart2">*/
/* 						<div class="infobox-progress">*/
/* 							<!-- #section:pages/dashboard.infobox.easypiechart -->*/
/* 							<div class="easy-pie-chart percentage" data-percent="0" data-size="50" style="height: 57px; width: 57px; line-height: 56px;">*/
/* 								<span class="percent" id="percent2"></span>*/
/* 								<canvas height="57" width="57"></canvas></div>*/
/* 						</div>*/
/* */
/* 						<div class="infobox-data" style="margin:3px 0 0 20px;">*/
/* 							<div class="infobox-content" id="isOk"> 已完成</div>*/
/* 							<div class="infobox-content" id="noOk">未完成</div>*/
/* */
/* 						</div>*/
/* */
/* 					</div>*/
/* 					<div class="infobox infobox-blue2 chart3">*/
/* 						<div class="infobox-progress">*/
/* 							<!-- #section:pages/dashboard.infobox.easypiechart -->*/
/* 							<div class="easy-pie-chart percentage" data-percent="0" data-size="50" style="height: 57px; width: 57px; line-height: 56px;">*/
/* 								<span class="percent" id="percent2"></span>*/
/* 								<canvas height="57" width="57"></canvas></div>*/
/* 						</div>*/
/* */
/* 						<div class="infobox-data" style="margin:3px 0 0 20px;">*/
/* 							<div class="infobox-content" id="isOk"> 已完成</div>*/
/* 							<div class="infobox-content" id="noOk">未完成</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="infobox infobox-blue2 chart4">*/
/* 						<div class="infobox-progress">*/
/* 							<!-- #section:pages/dashboard.infobox.easypiechart -->*/
/* 							<div class="easy-pie-chart percentage" data-percent="0" data-size="50" style="height: 57px; width: 57px; line-height: 56px;">*/
/* 								<span class="percent" id="percent2"></span>*/
/* 								<canvas height="57" width="57"></canvas></div>*/
/* 						</div>*/
/* */
/* 						<div class="infobox-data" style="margin:3px 0 0 20px;">*/
/* 							<div class="infobox-content" id="isOk"> 已完成</div>*/
/* 							<div class="infobox-content" id="noOk">未完成</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div style="clear:both;"></div>*/
/* 			</div>*/
/* */
/* 			<div class="row col-xs-12" id="topTool">*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<input type="text" pts=1 sear="customer_name" placeholder="企业名称" autofocus/>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<input type="text" pts=0 sear="khm_customer.customer_num" placeholder="企业编码" autofocus/>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<!--<input type="text" pts=1 sear="staff_name" placeholder="负责人" autofocus/>-->*/
/* 					<select style="width: 180px" pts=3 sear="jzm_service_info.fuze_id" class="advandced-search select2-hidden-accssible"  tabindex="-1" aria-hidden="true">*/
/* 						<option value="">负责人</option>*/
/* 					</select>*/
/* */
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<button type="button" id="search" title="搜索" class="btn btn-info btn-sm" style="background-color: ;">*/
/* 	                    <i class="fa fa-search"></i>*/
/* 	                </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<button id="heightsearch" title="高级搜索" type="button" class="btn btn-info btn-sm" style="background-color:#00c0ef !important;">*/
/* 	               	 	<i class="fa fa-filter"></i>*/
/* 	            	</button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/* 	                    <i class="fa fa-refresh"></i>*/
/* 	                </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="105" style=" float: left;margin-right: 5px;">*/
/* 					<label type="button" id="mergeItem" title="导入" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="btn btn-info btn-sm position-relative mergeItem" for="leading-in">*/
/* 	                    <i class="fa fa-sign-in"></i>*/
/* 	               </label>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="289" style=" float: left; margin-right: 5px;">*/
/* 					<button type="button" title="分配负责人" id="moveToClue" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="moveToClue btn addBtn btn-info btn-sm position-relative">*/
/* 						<i class="fa fa-hand-o-right"></i>*/
/* 					</button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<button id="singleList" style="background: #1E9FFF !important;border-color: #1E9FFF;" title="送单列表" type="button" class="btn btn-info btn-sm">*/
/* 						<i class="fa fa-truck"></i>*/
/* 	            	</button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<div id="filterBtns" style="display:inline-block;width:290px;height: 36px">*/
/* 						<a href="javascript:void(0);" class="myFilter" style="line-height:32px;*/
/* 						background: #E6E6E6;" data-kind="0"> 查看全部</a>*/
/* 						<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="1"> 我负责的</a>*/
/* 						<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="2"> 我关注的</a>*/
/* 						<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="3"> 我的下属</a>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<!--高级搜索-->*/
/* 				<div id="heightsearch1" class="col-sx-12" style="margin-top:30px;position: absolute; background: #fff; z-index: 1041;padding: 20px 10px; display: none;">*/
/* 					<div class="row">*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>年份</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width: 180px" gjs=5 sear="year" data-year="true"></select>*/
/* 							<!--<input type="text" gjs=5 sear="year" data-year=true/>-->*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>月份</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width: 180px" gjs=5 sear="month">*/
/* 								<option value=""> 请选择 </option>*/
/* 								<option value="01"> 1月 </option>*/
/* 								<option value="02"> 2月 </option>*/
/* 								<option value="03"> 3月 </option>*/
/* 								<option value="04"> 4月 </option>*/
/* 								<option value="05"> 5月 </option>*/
/* 								<option value="06"> 6月 </option>*/
/* 								<option value="07"> 7月 </option>*/
/* 								<option value="08"> 8月 </option>*/
/* 								<option value="09"> 9月 </option>*/
/* 								<option value="10"> 10月 </option>*/
/* 								<option value="11"> 11月 </option>*/
/* 								<option value="12"> 12月 </option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>企业名称</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.name" />*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>客户编码</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.customer_num" />*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>仓位</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select gjs=3 sear="ckm_position_num.pos_id" class="cw" data-type="gj" style="width:180px;">*/
/* 							</select>*/
/* 						</div>*/
/* */
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>服务周期</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> &lt; </option>*/
/* 								<option> > </option>*/
/* 							</select>*/
/* 							<select style="width:180px" gjs=0 data-type="gj" sear="htm_contract.payment_cycle">*/
/* 								<option value=""> 请选择 </option>*/
/* 								<option value="1">每月</option>*/
/* 								<option value="3">季度</option>*/
/* 								<option value="6">半年</option>*/
/* 								<option value="12">一年</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>负责人</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<!--<select style="margin-right: 12px !important;width: 180px" data-type="gj" gjs="1" sear="staff_name" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select>-->*/
/* 							<select style="margin-right: 12px !important;width: 180px" gjs="0" data-type="gj" sear="jzm_service_info.fuze_id" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 								<option value="">请选择</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>收款情况</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select gjs=0 sear="jzm_service_info.get_money" data-type="gj" style="width:180px;">*/
/* 								<option value=""> 请选择 </option>*/
/* 								<option value="1"> 已收款 </option>*/
/* 								<option value="0"> 未收款 </option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>审批状态</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select gjs=0 sear="jzm_service_info.status" data-type="gj" style="width:180px;">*/
/* 								<option value=""> 请选择 </option>*/
/* 								<option value="0"> 未开始</option>*/
/* 								<option value="1"> 待审批</option>*/
/* 								<option value="2"> 已通过</option>*/
/* 								<option value="3"> 未通过</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style="clear:both;padding-top:10px;text-align:center;">*/
/* 							<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/* 	                        查询*/
/* 	                    </button>*/
/* 							<button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 		                       重置*/
/* 		                    </button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="widget-body" style="margin-bottom:10px;position:relative">*/
/* 			<div style="display:none;position:absolute;z-index:1041;width:100%;background: #fff;padding: 20px;" class="sendList custom_table">*/
/* 				<table>*/
/* 					<thead>*/
/* 						<tr class="thColor" data-id='1'>*/
/* 							<th>企业名称</th>*/
/* 							<th>仓位</th>*/
/* 							<th class="hidden-480">联系人</th>*/
/* 							<th class="hidden-480">联系电话</th>*/
/* 							<th class="hidden-480">地址</th>*/
/* 							<th class="hidden-480">负责人</th>*/
/* 							<th class="hidden-480">服务月份</th>*/
/* 							<th class="hidden-480">其他企业</th>*/
/* 							<th class="hidden-480">配送状态</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* 					<tbody id="_dataList">*/
/* */
/* 					</tbody>*/
/* 				</table>*/
/* */
/* 				<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 					<div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num1"></div>*/
/* 					<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 					<div id="pageBar1" class="pagination"></div>*/
/* 					<div align="right" style="float: right;  width: 10%;">*/
/* 						<select style="width: 100px;" id="changePageNum1">*/
/* 							<option value="10">每页10条</option>*/
/* 							<option value="20">每页20条</option>*/
/* 							<option value="50">每页50条</option>*/
/* 							<option value="100">每页100条</option>*/
/* 							<option value="200">每页200条</option>*/
/* 						</select>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="custom_table">*/
/* 				<table id="dynamic-table">*/
/* 					<thead>*/
/* 						<tr class="thColor">*/
/* 							<th>*/
/* 								<label class="pos-rel">*/
/* 								                                    <input type="checkbox" class="ace" onclick="checkAll(this.checked)"/>*/
/* 								                                    <span class="lbl"></span>*/
/* 								    </label>*/
/* 							</th>*/
/* 							<th data-num="1">企业名称</th>*/
/* 							<th data-num="19">任务等级</th>*/
/* 							<th data-num="2">客户编码</th>*/
/* 							<th data-num="3">仓位编码</th>*/
/* 							<th data-num="4">服务周期</th>*/
/* 							<th data-num="5">逾期</th>*/
/* 							<th data-num="6">截止月份</th>*/
/* 							<th data-num="7">负责人</th>*/
/* 							<th data-num="8" class="month"></th>*/
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
/* 						</tr>*/
/* 					</thead>*/
/* */
/* 					<tbody id="dataList">*/
/* 						<!--数据内容显示地址-->*/
/* 					</tbody>*/
/* 				</table>*/
/* */
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
/* <!-- /.widget-main -->*/
/* </div>*/
/* <!-- /.widget-body -->*/
/* */
/* <!-- <div class="label_popup" id="label_popup" class="col-xs-9" style="position:fixed;top:200px;right:15%;left:15%;z-index:1041;display:none;">*/
/* 	<div style="margin:39px auto;z-index:1060;background:#fff;position:relative;  background: #fff; padding: 2px;">*/
/* 		<div id="subgleList" style="">*/
/* 			<div class="col-xs-12" style="background: #fff; width: 100%; border:1px solid #ddd; padding: 2px;">*/
/* 				<div class="row">*/
/* 					<table id="dynamic-table1" class="table table-striped table-bordered table-hover">*/
/* 						<thead>*/
/* 							<tr class="thColor" data-id='1'>*/
/* 								<th>公司名称</th>*/
/* 								<th>仓位</th>*/
/* 								<th class="hidden-480">联系人</th>*/
/* 								<th class="hidden-480">联系电话</th>*/
/* 								<th class="hidden-480">地址</th>*/
/* 								<th class="hidden-480">负责人</th>*/
/* 								<th class="hidden-480">其他代办事项</th>*/
/* 								<th class="hidden-480">是否配送成功</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody id="dataList">*/
/* 							<tr>*/
/* 								<td>1</td>*/
/* 								<td>2</td>*/
/* 								<td>3</td>*/
/* 								<td>4</td>*/
/* 								<td>5</td>*/
/* 								<td>6</td>*/
/* 								<td>7</td>*/
/* 								<td>8</td>*/
/* 							</tr>*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div> -->*/
/* <div class="no_dynamic-table" style="display: none;">*/
/* 	<div class="col-xs-12">*/
/* 		<div class="row">*/
/* 			<table id="" class="table table-striped table-bordered table-hover">*/
/* 				<thead>*/
/* 					<tr class="thColor">*/
/* 						<th>企业名称</th>*/
/* 						<th>服务月份</th>*/
/* 						<th class="hidden-480">负责人</th>*/
/* 						<th class="hidden-480">未配送成功时间</th>*/
/* 						<th class="hidden-480">未成功配送具体原因</th>*/
/* 						<th class="hidden-480">配送次数</th>*/
/* 						<th class="hidden-480">最新状态</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* */
/* 				<tbody>*/
/* 					<tr data-id="1">*/
/* 						<td>*/
/* 							<a href="#">深圳税脉网络财务有限公司θ</a>*/
/* 						</td>*/
/* 						<td>*/
/* 							12313*/
/* 						</td>*/
/* 						<td>张柳清</td>*/
/* 						<td class="center">*/
/* 							<label class="pos-rel">*/
/*                                     <span class="lbl">是</span>*/
/*                                 </label>*/
/* 						</td>*/
/* */
/* 						<td class="center">*/
/* 							<label class="pos-rel">*/
/*                                     <a href="#" ><span class="lbl">是</span></a>*/
/*                             </label>*/
/* 						</td>*/
/* 						<td class="center">*/
/* 							<label class="pos-rel">*/
/*                                    <a href="#" ><span class="lbl">否</span></a>*/
/*                             </label>*/
/* 						</td>*/
/* */
/* 						<td class="center">*/
/* 							<label class="pos-rel">*/
/*                                     <span class="lbl">未成功</span>*/
/*                                 </label>*/
/* 						</td>*/
/* 					</tr>*/
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="jieTable" style="display:none;">*/
/* 	<div id="template2" style=" margin-top: 10px;">*/
/* 		<div id="template1" style="">*/
/* 			<div style="margin-top:15px;">*/
/* 				<label>企业名称： </label>*/
/* 				<span style=" width: 174px; min-width: 174px;" class="name"></span>*/
/* 				<label> 客户仓位： </label>*/
/* 				<span style="display: inline-block; width: 174px;" class="caddress"></span>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label>联系人员： </label>*/
/* 				<select style="display: inline-block; width: 174px;" class="people"></select>*/
/* 				<label> 联系电话： </label>*/
/* 				<span style="display: inline-block; width: 174px;" class="tel"></span>*/
/* 			</div>*/
/* */
/* 			<div style="margin-top:15px;">*/
/* 				<label> 联系地址： </label>*/
/* 				<select style="display: inline-block; width: 174px;" class="addresses" id="address"> </select>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* 		<div class="layui-collapse" lay-filter="test" style="margin: 10px;">*/
/* 			<div class="layui-colla-item">*/
/* 				<h2 class="layui-colla-title">送单信息</h2>*/
/* 				<div class="layui-colla-content">*/
/* 					<div id="get_way" style="margin-bottom: 10px;">*/
/* 						<label style="width: 50px">服务方式</label>*/
/* 						<select title="getway" class="getway">*/
/* 							<option value="1">外勤上门</option>*/
/* 							<option value="2">客户上门</option>*/
/* 							<option value="3">快递物流</option>*/
/* 						</select>*/
/* 					</div>*/
/* */
/* 					<div id="express" style="display:none;">*/
/* 						<div>*/
/* 							<label style="width: 50px; margin-bottom: 10px;">快递公司</label>*/
/* 							<input title="express" />*/
/* 							<label style="width: 50px">快递单号</label>*/
/* 							<input title="expressnum" />*/
/* 						</div>*/
/* 						<div>*/
/* 							<label style="width: 50px">快递费用</label>*/
/* 							<input title="cost" />*/
/* 						</div>*/
/* 						<div class="" style="padding: 2px;padding-left:50px;">*/
/* 							<div id="fileBox">*/
/* */
/* 							</div>*/
/* 							<div id="uploadBox">*/
/* 								<button type="button" id="upload1" style="outline: none;background-color: #009688 !important; margin-top: 20px;" class="btn btn-info btn-sm position-relative">*/
/* 					                        上传文件*/
/* 					        	</button>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div id="sendMsg" customer_id="" style="height: 30px;line-height: 40px">*/
/* 						<label>发送短信：</label>*/
/* 						<input type="radio" value="1" name="is_send">是*/
/* 						<input type="radio" value="2" name="is_send" checked="true">否*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="layui-colla-item">*/
/* 				<h2 class="layui-colla-title">记账凭证</h2>*/
/* 				<div class="layui-colla-content">*/
/* 					<div class="checkbox " style="width: 100%;">*/
/* 						<!--<label style="float: left;display: inline-block;width: 65px !important; height: 55px;">凭证： </label>-->*/
/* 						<div class="pzmonth" style="width: 500px;">*/
/* */
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="layui-colla-item">*/
/* 				<h2 class="layui-colla-title">发票单据</h2>*/
/* 				<div class="layui-colla-content connects-content">*/
/* 					<table class="bill" style="display:;">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th>操作</th>*/
/* 								<th>票据类别</th>*/
/* 								<th>库存数量</th>*/
/* 								<th>数量(张)</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody id="ticketBody">*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="layui-colla-item">*/
/* 				<h2 class="layui-colla-title">证件资料</h2>*/
/* 				<div class="layui-colla-content  connects-content">*/
/* 					<table class="certificate" style="display:;">*/
/* */
/* 						<thead>*/
/* 							<tr>*/
/* 								<th>操作</th>*/
/* 								<th>证件名称</th>*/
/* 								<th>库存数量</th>*/
/* 								<th>数量(个)</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* */
/* 						<tbody id="cardBody">*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div style="margin-top:20px;margin-bottom:20px;" class="buttons">*/
/* 			<!-- <button class="btn btn-info btn-sm active">凭证交接</button>*/
/* 			<button class="btn btn-info btn-sm">票据交接</button>*/
/* 			<button class="btn btn-info btn-sm">证件交接</button> -->*/
/* 		</div>*/
/* 		<div class="connects-content" style="width: 500px;">*/
/* */
/* 			<div class="checkbox " style="float: left; width: 100%; display: none;">*/
/* 				<label style="float: left;display: inline-block;width: 90px !important; height: 55px;">服务月份： </label>*/
/* 				<div class="allmonth" style="width: 500px;">*/
/* 				</div>*/
/* 			</div>*/
/* 			<div style="padding-left: 40px;">*/
/* 			</div>*/
/* */
/* 			<div style="padding-left: 40px;">*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div id="template1">*/
/* 		<div style="margin-top:15px; ">*/
/* 			<label style="float:left;width:36px;">备注：</label>*/
/* 			<textarea style="margin-left:5px;width:calc(80% - 41px);resize:none;padding:5px;" class="rmark"></textarea>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div style="text-align:right;margin-top:15px; text-align: center;">*/
/* 		<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* 		<button class="add btn btn-info btn-sm">*/
/*               	保存*/
/*         </button>*/
/* 	</div>*/
/* </div>*/
/* <div class="label_popup" id="export" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 	<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 				            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 		<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 			<span style="display: inline-block;">导入送单</span>*/
/* 			<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 		</div>*/
/* 		<div style="padding: 10px 50px;">*/
/* 			<input type="file" width="200px" style="margin: auto;" id="efile" />*/
/* 			<!--<hr>-->*/
/* 		</div>*/
/* 		<div style="padding:15px;text-align:right;">*/
/* 			<button id="ghItem" class=" btn">送单模板</button>*/
/* 			<button class="btn btn-info  submit" style="padding: 6px; border-radius: 0px;">保存</button>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="label_popup" id="fail" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 	<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/*         box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 		<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 			<span style="display: inline-block;">请填写失败原因</span>*/
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
/* </div>*/
/* */
/* {% include 'admin/mark.html' %} {% include 'admin/customerDetail.html' %}*/
/* <script src="/resource/adimin/components/_mod/easypiechart/jquery.easypiechart.js"></script>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* <script>*/
/* 	jQuery(function($) {*/
/* 		cs.getNodes([105, 289]);*/
/* */
/* 		var order = 'khm_customer.id desc';*/
/* 		var employees = {};*/
/* 		var curPage = 1;*/
/* 		var filter = '';*/
/* 		var month2 = "";*/
/* 		var param = {*/
/* 			aid: ykp.getCookie("aid"),*/
/* 			time: ykp.getCookie("time")*/
/* 		}*/
/* 		var pagesize = 10;*/
/* 		var pagesize1 = 10;*/
/* 		tspage();*/
/* 		var other = {};*/
/* */
/* 		function tspage() {*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			if(param.time != '' && param.time != undefined) {*/
/* 				var timestamp = ''; //条件*/
/* 				var today = new Date().setHours(0, 0, 0, 0) / 1000; //今天零点的时间戳*/
/* 				var day_1 = cs.getNowTime(Date.parse(new Date()) / 1000).substr(-2) - 1; //距离本月1号有多少天*/
/* 				var lastmonthday_1 = cs.getNowTime(Date.parse(new Date()) / 1000);*/
/* 				var newday = lastmonthday_1.substring(0, 4) + '-' + (lastmonthday_1.substring(5, 7) - 1) + '-01';*/
/* 				if(lastmonthday_1.substring(5, 7) == 1) {*/
/* 					newday = (lastmonthday_1.substring(0, 4) - 1) + '-12-01';*/
/* 				}*/
/* 				var newdaytime = Date.parse(new Date(newday)) / 1000; //上个月1号的时间戳*/
/* 				switch(param.time) {*/
/* 					case '1':*/
/* 						timestamp = `jzm_service_info.com_time > ${today}`;*/
/* 						break;*/
/* 					case '2':*/
/* 						timestamp = `jzm_service_info.com_time < ${today} and jzm_service_info.com_time>${today-86400}`*/
/* 						break;*/
/* 					case '3':*/
/* 						timestamp = `jzm_service_info.com_time > ${today-86400*6}`;*/
/* 						break;*/
/* 					case '4':*/
/* 						timestamp = `jzm_service_info.com_time > ${today-86400*29}`;*/
/* 						break;*/
/* 					case '5':*/
/* 						timestamp = `jzm_service_info.com_time > ${today-86400*day_1}`;*/
/* 						break;*/
/* 					case '6':*/
/* 						timestamp = `jzm_service_info.com_time < ${today-86400*day_1} jzm_service_info.com_time>${newdaytime}`;*/
/* 						break;*/
/* 				}*/
/* 				var where = `${timestamp}`;*/
/* 				var data = {*/
/* 					"type": 6,*/
/* 					"page_size": pagesize,*/
/* 					"where": where*/
/* 				}*/
/* 				if(param.aid != '' || param.aid != undefined) {*/
/* 					data['staff_name'] = param.aid;*/
/* 				}*/
/* 				getPageList_2(data);*/
/* 				ykp.setCookie("aid", "", (1 / 24));*/
/* 				ykp.setCookie("time", "", (1 / 24));*/
/* 			} else if(ykp.getCookie('detailsId') && ykp.getCookie('detailsId') != '') {*/
/* 				var id = ykp.getCookie('detailsId');*/
/* 				var data = {*/
/* 					"type": 6,*/
/* 					"page": curPage,*/
/* 					"page_size": pagesize,*/
/* 					"where": 'htm_contract.id=' + id*/
/* 				}*/
/* */
/* 				getPageList_2(data);*/
/* 				ykp.setCookie("detailsId", '', (1 / 24));*/
/* */
/* 			} else {*/
/* 				//获取列表数据*/
/* 				getPageList(1);*/
/* 			}*/
/* 		}*/
/* */
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_service/service_list',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: filter,*/
/* 				limit: pagesize,*/
/* 				type: 6*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '#pageBar'*/
/* 			},*/
/* 			initOrder: 'khm_customer.id',*/
/* 			defaultOrder: order,*/
/* 			contentId: "#dataList",*/
/* 			params: [{*/
/* 				id: "#dynamic-table",*/
/* 				field: ["", "khm_customer.name", "maxLv", "customer_num", "pos_name", "htm_contract.payment_cycle",*/
/* 					"", "", "jzm_service_info.fuze_id"*/
/* 				]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* */
/* 		$('#flush').click(function() {*/
/* 			ykp.setCookie('where','');*/
/*             filter = '';*/
/* 			$('[sear="customer_name"]').val('');*/
/* 			$('[sear="khm_customer.customer_num"]').val('');*/
/* 			$('[sear="jzm_service_info.fuze_id"]').val('').trigger('change');*/
/* 			getPageList();*/
/* 		})*/
/* 		cs.getAllCw(function(option) {*/
/*             $('#heightsearch1 .cw').html(option);*/
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
/* 		$('.myFilter').click(function() {*/
/* 			if(!$(this).hasClass('clc')) {*/
/* 				$(this).addClass('clc').siblings().removeClass('clc');*/
/* 			}*/
/* 			var user = JSON.parse(ykp.getCookie('userinfo'));*/
/* 			var data = {*/
/* 				"type": 6,*/
/* 				"page_size": pagesize,*/
/* 				'page': curPage*/
/* */
/* 			};*/
/* 			var filter_ = $(this).attr('data-kind');*/
/* 			if(filter_ == '0') {*/
/* 				getPageList(1);*/
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
/* 				data.up_user = user.id;*/
/* 			}*/
/* 			filter = data['where'];*/
/* 			getPageList_2(data);*/
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
/* 				//$('.advandced-search').append('<option value="">请选择</option>');*/
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
/* 		function getPageList_2(data) {*/
/* 			//高级搜索*/
/* 			dohSearch();*/
/* 			//普通搜索*/
/* 			search();*/
/* 			ykp.list({*/
/* 				url: '/api/api_service/service_list',*/
/* 				methods: 'post',*/
/* 				data: data,*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					//生成月份表头*/
/* 					generateMonthTh($('#dynamic-table .thColor .month'), res['data']['months']);*/
/* 					if(res.data.items == '' || res.data == "") {*/
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
/* 		//页面跳转*/
/* 		function skPage(urls) {*/
/* 			var url_ = urls.split('&')[0].split('=')[1];*/
/* 			$('#navBox #nav-list li').find('li[data-url$="' + url_ + '"]').click();*/
/* 		}*/
/* */
/* 		var emps = allemp();*/
/* */
/* 		function sendList() {*/
/* 			//加载送单列表*/
/* 			ykp.list({*/
/* 				url: '/api/api_service/get_send_list',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					limit: pagesize1,*/
/* 					page: 1*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar1'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					var data = res.data.items;*/
/* 					var html = '';*/
/* 					var status = {*/
/* 						"-1": "出库失败",*/
/* 						"0": "出库中",*/
/* 						"1": "待送单",*/
/* 						"2": "送单成功",*/
/* 						"3": "待入库",*/
/* 						"4": "送单失败",*/
/* 						"5": "入库失败"*/
/* 					}*/
/* 					var content = [];*/
/* 					for(var j in data) {*/
/* 						switch(data[j]['jzm_send_info.status']) {*/
/* 							case "-1":*/
/* 								content.push('出库失败');*/
/* 								break;*/
/* 							case "0":*/
/* 								content.push('出库中');*/
/* 								break;*/
/* 							case "1":*/
/* 								content.push('<label class="pos-rel"><a><span class="suc btGreen" title="成功" id="see"><i class="fa fa-check-circle-o"></i></span></a><a style="margin-left:10px"><span class="fail btRed" title="失败" id="see"><i class="fa fa-close"></i></span></a></label>');*/
/* 								break;*/
/* 							case "2":*/
/* 								content.push('送单成功');*/
/* 								break;*/
/* 							case "3":*/
/* 								content.push('待入库');*/
/* 								break;*/
/* 							case "4":*/
/* 								content.push('送单失败');*/
/* 								break;*/
/* 							case "5":*/
/* 								content.push('入库失败');*/
/* 								break;*/
/* 						}*/
/* 					}*/
/* 					for(var i in data) {*/
/* 						html += `<tr data-id="${data[i]['jzm_send_info.id']}"  data-cid="${data[i]['jzm_send_info.customer_id']}">*/
/* 								<td data-cid="${data[i]['jzm_send_info.customer_id']}">*/
/* 									${data[i]['khm_customer.name']}*/
/* 									<label class="pos-rel">*/
/* 						 				<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}"  data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>*/
/* 					 				 </label>*/
/* 								</td>*/
/* 								<td>${data[i]['ckm_position_num.pos_name']+data[i]['ckm_position_num.pos_num']}</td>*/
/* 								<td>${data[i]['jzm_send_info.contacts']}</td>*/
/* 								<td>${data[i]['jzm_send_info.tel']}</td>*/
/* 								<td>${data[i]['jzm_send_info.address']}</td>*/
/* 								<td>${data[i]['bmm_employees.name']}</td>*/
/* 								<td>${data[i]['jzm_send_info.month']}</td>*/
/* 								<td>${data[i]['num']}</td>*/
/* 								<td>${content[i]}</td>*/
/* 									</tr>`;*/
/* 					}*/
/* 					$("#_dataList").html(html);*/
/* 					custom.showReamrk();*/
/* 					$('#num1').html("共" + res.data.totalCount + "条数据");*/
/* 					//执行成功操作*/
/* 					$('.suc').click(function() {*/
/* 						var sid = $(this).parents('tr').attr('data-id');*/
/* 						var cid = $(this).parents('tr').attr('data-cid');*/
/* 		                var param = {*/
/* 			                    time: ($(this).parents('tr').find('td').eq(6).html()).substring(0,20),*/
/* 			                    name: ($(this).parents('tr').find('td').eq(0).text()).replace(/\s/ig,''),*/
/* 			                };*/
/* 						layui.use('layer', function() {*/
/* 							var layer = layui.layer;*/
/* 							layer.confirm("确认送单成功吗", function(index) {*/
/*  								ykp.doAjax({*/
/* 									url: "/api/api_service/send_status_new",*/
/* 									method: "post",*/
/* 									data: {*/
/* 										id: sid,*/
/* 										status: 2*/
/* 									},*/
/* 									success: function(res) {*/
/* 										ykp.prompt('送单成功');*/
/* 						                sendMsg(cid,'送单成功',param);*/
/* 										sendList();*/
/* 										layer.closeAll();*/
/* 									}*/
/* 								});*/
/* 							}); */
/* 						});*/
/* 					});*/
/* 			        //发送短信*/
/* 			        function sendMsg(id,type,param){*/
/* 			            ykp.doAjax({*/
/* 			                url:'/api/api_common/send_customer',*/
/* 			                data:{*/
/* 			                    customer_id:id,*/
/* 			                    type:type,*/
/* 			                    param:JSON.stringify(param)*/
/* 			                },*/
/* 			                method:'post',*/
/* 			                success:function(res){*/
/* 			                    ykp.prompt('短信发送成功！');*/
/* 			                }*/
/* 			            });*/
/* 			        }*/
/* */
/* 					//执行失败操作*/
/* 					$('.fail').click(function() {*/
/* 						var sid = $(this).parents('tr').attr('data-id');*/
/* 						var cid = $(this).parents('tr').attr('data-cid');*/
/* 						var param = {*/
/* 			                    time: ($(this).parents('tr').find('td').eq(6).html()).substring(0,20),*/
/* 			                    name: ($(this).parents('tr').find('td').eq(0).text()).replace(/\s/ig,''),*/
/* 			            	};*/
/* 						$('#fail').fadeIn();*/
/* 						$('#fail').find('input').val('');*/
/* 						$('#fail .hold').unbind('click').click(function() {*/
/* 							var approve_reply = $('#fail').find('input').val().trim();*/
/* 							if(approve_reply == '') {*/
/* 								ykp.prompt('不能为空！');*/
/* 								return false;*/
/* 							}*/
/* 							ykp.doAjax({*/
/* 								url: "/api/api_service/send_status_new",*/
/* 								method: "post",*/
/* 								data: {*/
/* 									id: sid,*/
/* 									status: 3,*/
/* 									reason: approve_reply*/
/* 								},*/
/* 								success: function(res) {*/
/* 									param.msg = (approve_reply.replace(/\s/ig,'')).substring(0,20);*/
/* 									sendMsg(cid,'送单失败',param);*/
/* 									sendList();*/
/* 								}*/
/* 							});*/
/* 							$('.close_label').parents('.label_popup').fadeOut();*/
/* 						})*/
/* 						cs.closePop();*/
/* 					})*/
/* */
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//同步改变联系人电话*/
/* 		function getContactTel() {*/
/* 			$('#templateCon .people').change(function() {*/
/* 				var id = $(this).val();*/
/* 				for(var i in data) {*/
/* 					if(id == data[i]['']) {*/
/* 						$('#templateCon .tel').text('  ');*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//展示送单列表*/
/* 		$('#singleList').unbind('click').click(function() {*/
/* 			if($(this).hasClass('active')) {*/
/* 				$('.sendList').hide();*/
/* 				$('.in').removeClass('modal-backdrop');*/
/* 				$(this).removeClass('active').css('z-index', '');*/
/* 				return;*/
/* 			}*/
/* 			$('.sendList').show();*/
/* 			sendList();*/
/* */
/* 			$('.in').addClass('modal-backdrop');*/
/* 			$(this).addClass('active').css('z-index', '1041');*/
/* */
/* 			$('.in').unbind('click').click(function() {*/
/* 				$('.sendList').hide();*/
/* 				$('.in').removeClass('modal-backdrop');*/
/* 				$('#singleList').removeClass('active').css('z-index', '');*/
/* */
/* 				$(this).off('click');*/
/* 			});*/
/* 		})*/
/* */
/* 		//导入导出*/
/* 		var data = {*/
/* 			url: "/api/api_service/serviceExport",*/
/* 			type: '6',*/
/* 			title: '送单模板'*/
/* 		}*/
/* 			cs.jzexport(data, function(res) {*/
/* 			*/
/* 			setTimeout(function(){*/
/* 			ykp.prompt("上传成功");*/
/* 			},1000)*/
/* 			*/
/* 			getEntireList(1);*/
/* 			$('.label_popup').hide();*/
/* 		})*/
/* */
/* 		*/
/* 		var resData = ''; //回调返回的数据*/
/* 		tSearch()*/
/* 		$('#changePageNum').change(function() {*/
/* 			pagesize = $(this).val();*/
/* 			ykp.setCookie('page_size',pagesize);*/
/* 			getPageList(1);*/
/* 		})*/
/* 		$('#changePageNum1').change(function() {*/
/* 			pagesize1 = $(this).val();*/
/* 			sendList();*/
/* 		})*/
/* 		//获取所有员工(负责人)*/
/* 		function allemp() {*/
/* 			var emps;*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_employees/grid',*/
/* 				method: 'post',*/
/* 				async: false,*/
/* 				data: {*/
/* 					page: 1,*/
/* 					limit: 999*/
/* 				},*/
/* 				success: function(res) {*/
/* 					emps = res.data.items;*/
/* 				}*/
/* 			})*/
/* 			return emps;*/
/* 		}*/
/* */
/* 		function tSearch() {*/
/* 			$('.tsarch').click(function() {*/
/* 				var month = $('#tmonth').val();*/
/* 				var data = {*/
/* 					url: "",*/
/* 					methods: 'post',*/
/* 					data: {*/
/* 						month: month,*/
/* 						order: order*/
/* 					}*/
/* 				}*/
/* */
/* 				for(var i = 0; i < 3; i++) {*/
/* 					console.log('.chart' + (i + 1) + ' .easy-pie-chart')*/
/* 					$('.chart' + (i + 1) + ' .easy-pie-chart').attr('data-percent', 45 + i);*/
/* 					$('.chart' + (i + 1) + ' #percent2').html(45 + i + '%');*/
/* 					//								easyChary();*/
/* 				}*/
/* */
/* 				return false;*/
/* 				cs.doAjax(data, function(res) {*/
/* 					for(var i = 0; i < 3; i++) {*/
/* 						console.log('.chart' + (i + 1) + ' .easy-pie-chart')*/
/* 						$('.chart' + (i + 1) + ' .easy-pie-chart').attr('data-percent', 45 + i);*/
/* 						$('.chart' + (i + 1) + ' .percent2').text(45 + i + '%');*/
/* 						easyChary();*/
/* 					}*/
/* 				})*/
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
/* 		//生成月份表头：el 所有月份表头，months:开始、结束月份*/
/* 		function generateMonthTh(el, months) {*/
/*             if(!months){*/
/*                 return;*/
/*             }*/
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
/* 			if($(".widget-main").find("#custom").length < 1){*/
/*                 cs.custorm_check('#dynamic-table', '#dataList', true);*/
/* 			}*/
/* */
/* 		};*/
/* */
/* 		cs.setFuze({*/
/* 			conId: "#dataList",*/
/* 			type: "6",*/
/* 			url: "/api/api_service/transfer_user",*/
/* 			fun: function() {*/
/* 				getPageList();*/
/* 			}*/
/* 		});*/
/* */
/* 		//加载数据*/
/* 		function getPageList(curPage) {*/
/* 			//高级搜索*/
/* 			dohSearch();*/
/* 			//普通搜索*/
/* 			search();*/
/* 			var data = {*/
/* 				"type": 6,*/
/* 				"page": curPage,*/
/* 				"page_size": pagesize,*/
/* 				order: order,*/
/* 				filter: filter,*/
/* 				where: filter*/
/* 			}*/
/* 			for(var i in other) {*/
/* 				data[i] = other[i]*/
/* 			}*/
/* 			if(month2) {*/
/* 				data.month2 = month2;*/
/* 			}*/
/* 			ykp.list({*/
/* 				url: '/api/api_service/service_list',*/
/* 				methods: 'post',*/
/* 				data: data,*/
/* 				pageBar: {*/
/* 					id: '#pageBar',*/
/* 					where:filter*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					//生成月份表头*/
/* 					generateMonthTh($('#dynamic-table .thColor .month'), res['data']['months']);*/
/* */
/* 					if(res.data.items == '') {*/
/* */
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
/* 		//生成服务月份html*/
/* 		function generateTd(data) {*/
/* 			var html;*/
/* */
/* 			var month; //月份*/
/* 			//			var status = ['','','出库中','待送单','送单成功','待入库','送单失败','入库失败'];*/
/* 			var status = {*/
/* 				"-1": "出库失败",*/
/* 				0: "出库中",*/
/* 				1: "待送单",*/
/* 				2: "送单成功",*/
/* 				3: "待入库",*/
/* 				4: "送单失败",*/
/* 				5: "入库失败"*/
/* 			}*/
/* */
/* 			//styles : 审批状态对应显示的样式*/
/* 			var styles = ['', 'fa  fa-circle-o', 'glyphicon glyphicon-ok', 'glyphicon glyphicon-remove'];*/
/* 			$('#dynamic-table .thColor .month').each(function(i, e) {*/
/* 				month = $(this).attr('month');*/
/* */
/* 				if(!data[month]) {*/
/* 					html += '<td get_money style="display:' + $(this).css('display') + ';border:1px solid #eee !important;" data-num="' + $(this).attr('data-num') + '"></td>';*/
/* 					return true;*/
/* 				}*/
/* 				html +=*/
/* 					`<td class="center" ${data[month]['Status'] ? "cstatus" : ""} title="${month +""+ (data[month]['send_status'] != 0 ? (","+status[data[month]['send_status']]) :"")}" get_money="${data[month]['get_money']}" contract_id="${data[month]['contract_id']}" fuze_id="${data[month]['fuze_id']}" hang_statu="${data[month]['hang_statu']}" data-id="${data[month]['id']}" data-status="${data[month]['status']}" data-num="${$(this).attr('data-num')}" style="display:${$(this).css('display')};;border:1px solid #eee !important;" data-month="${data[month]['time']}">*/
/* 					<label class="pos-rel ${styles[data[month]['status']]}"></label>*/
/* 				</td>`;*/
/* 			});*/
/* */
/* 			return html;*/
/* 		}*/
/* */
/* 		function addList(res) {*/
/* 			// cs.last_year_month();*/
/* 			//列表数据*/
/* 			var data = res.data.items;*/
/* 			//tbody下的html内容*/
/* 			var html = '';*/
/* */
/* 			//处理服务器返回的每月的服务数据*/
/* 			var _data = {};*/
/* 			var obj = {};*/
/* */
/* 			//服务周期*/
/* 			var payment_cycle = {*/
/* 				'1': '每月',*/
/* 				'3': '季度',*/
/* 				'6': '半年',*/
/* 				'12': '一年'*/
/* 			};*/
/* */
/* 			ykp.setCookie('page_no', res.data.curPage, (1 / 24));*/
/* */
/* 			//表头显示 隐藏样式*/
/* 			var styles = [];*/
/* 			$('#dynamic-table .thColor th').each(function(i, e) {*/
/* 				styles.push($(this).css('display'));*/
/* 			});*/
/*             //负责人id*/
/* 			var fuze_ids = [];*/
/* 			//负责人名字*/
/* 			var fuze = [];*/
/* 			//维护周期*/
/* 			var service_cylce = [];*/
/* 			//维护周期名字*/
/* 			var cycle = [];*/
/* 			//月份服务数据td  html*/
/* 			var td_html;*/
/* */
/* 			for(var i in data) {*/
/* */
/* 				for(var j = 0; j < data[i].list.length; j++) {*/
/* 					obj.status = data[i].list[j]['jzm_service_info.status'];*/
/* 					obj.send_status = data[i].list[j]['jzm_send_info.status'];*/
/* 					obj.get_money = data[i].list[j]['jzm_service_info.get_money'];*/
/* 					obj.id = data[i].list[j]['jzm_service_info.id'];*/
/* 					obj.time = data[i].list[j]['jzm_service_info.time'];*/
/* 					obj.contract_id = data[i]['list'][j]['jzm_service_info.contract_id'];*/
/* 					obj.fuze_id = data[i]['list'][j]['jzm_service_info.fuze_id'];*/
/* 					obj.hang_statu = data[i]['list'][j]['htm_contract.status'];*/
/* 					obj.Status = data[i].list[j]['htm_contract.status'] == 1 || data[i].list[j]['htm_contract.status'] == 2 ? false : true; //合同状态*/
/* 					_data[data[i].list[j]['jzm_service_info.time']] = obj;*/
/* 					obj = {};*/
/* 				}*/
/* 				//生成服务月份html*/
/* 				td_html = generateTd(_data);*/
/* */
/* 				for(var j in emps) {*/
/* 					if(emps[j]['bmm_employees.id'] == data[i].list[0]['htm_contract.assign_staff_id']) {*/
/* 						var empname = emps[j]['bmm_employees.name'];*/
/* 					}*/
/* 				}*/
/* */
/* 				for(var j = data[i]['list'].length - 1; j >= 0; j--) {*/
/* 					//负责人id不存在 则将负责人id加入fuze_ids中*/
/* 					if($.inArray(data[i].list[j]['jzm_service_info.fuze_id'], fuze_ids) == -1) {*/
/* 						fuze_ids.push(data[i].list[j]['jzm_service_info.fuze_id']);*/
/* 					}*/
/* 					//维护周期不存在 则将维护周期加入service_cylce中*/
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
/* 				//根据service_cylce 将维护周期存入cycle中*/
/* 				for(var j in service_cylce) {*/
/* 					cycle.push(payment_cycle[service_cylce[j]]);*/
/* 				}*/
/* */
/* 				html +=*/
/* 					`<tr data-id="${data[i]['customer_id']}" cid="${data[i]['customer_id']}" data-fuz="${fuze.join(',')}">*/
/* 							<td class="center">*/
/* 		                        <label class="pos-rel">*/
/* 		                        <input type="checkbox" name="check" class="ace"/>*/
/* 		                        <span class="lbl"></span>*/
/* 		                        </label>*/
/* 		                    </td>*/
/*                             <td data-num="1" style="display: ${styles[1]}" data-cid="${data[i]['customer_id']}">*/
/*                             <div style="display:${data[i]['is_red'] == '0' ? 'none' : 'inline-block'};height:14px;width:17px">*/
/* 					 			<span class="spanTip" style=""><span>*/
/* 							</div>*/
/*                             <a href="#" class="customerDetail pos-rel">${data[i].list[0]['khm_customer.name']}</a>*/
/*                             <label class="pos-rel">*/
/*                             	<i relation=${data[i]['is_relotion']} class="sc fa ${data[i]['is_relotion'] == 0 ? 'fa-heart-o' : 'fa-heart'}" style="color:${data[i]['is_relotion']==1 ? 'red' : ''}"></i>*/
/* 				 				<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}"  data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>*/
/* 			 				 </label>*/
/*                             </td>*/
/*                             <td data-num="19" style="display: ${styles[2]}">*/
/* 								${parseInt(data[i]['maxLv']).toFixed(2)}*/
/*                             </td>*/
/*                             <td data-num="2" style="display: ${styles[3]}">*/
/* 								${data[i]['customer_num']}*/
/*                             </td>*/
/*                             <td data-num="3" style="display: ${styles[4]}">*/
/*                             	${data[i]['position']['pos_name']+ data[i].position.pos_num}*/
/*                             </td>*/
/*                              <td class="center"  data-num="4" style="display: ${styles[5]}">*/
/*                                 ${cycle[0]}*/
/*                             </td>*/
/*                             <td class="center"  data-num="5" style="display: ${styles[6]}">*/
/*                                ${data[i]['num']}*/
/*                             </td>*/
/* 							<td class="center"  data-num="6" style="display: ${styles[7]}">*/
/* 							   ${data[i]['maxTime']}*/
/* 							</td>*/
/* */
/*                             <td class="center"  data-num="7" style="display: ${styles[8]}">*/
/*                                ${fuze.join(',') || ''}*/
/*                             </td>    */
/*                             ${td_html}       */
/*                         </tr>`;*/
/* */
/* 				//置空数据 以便一次循环                                                  */
/* 				_data = {};*/
/* 				fuze_ids = [];*/
/* 				fuze = [];*/
/* 				cycle = [];*/
/* 				service_cylce = [];*/
/* 			};*/
/* */
/* 			$('#dataList').html(html);*/
/* 			cs.sc('送单', function(res) {*/
/* 				getPageList(1);*/
/* 			})*/
/* */
/* 			custom.get_custom_info();*/
/* 			custom.showReamrk();*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/* 			var statu = cs.getNodes([108, 289], true);*/
/* 			$('#dataList').find('td[get_money]').each(function() {*/
/* 				if($(this).attr('get_money') > 0) {*/
/* 					$(this).css('background-color', '#00cc22')*/
/* 				}*/
/* 			})*/
/* */
/* 			$('[data-rel=tooltip]').tooltip();*/
/* */
/* 			$('.see').click(function() {*/
/* 				var id = $(this).parents("tr").attr("data-id");*/
/* 				ykp.setCookie('contract_id', id, (1 / 24));*/
/* 				skPage("?url=tax&i=0-1-6&type=1");*/
/* 				//window.location = "?url=tax&i=0-1-6&type=1";*/
/* 			})*/
/* */
/* 			$("#dataList td[data-status='0']").mouseover(function() {*/
/* 				$(this).children('a').css('display', 'inline-block');*/
/* 			})*/
/* */
/* 			//未审核状态点击*/
/* 			$("#dataList td[data-month]").click(function() {*/
/* 				//当前登录用户id*/
/* 				var uid = ykp.getCookie('uid');*/
/* 				var fzpeople = $(this).parents('tr').attr('data-fuz').split(',')[0]*/
/* 				//合同状态非已激活时，提示*/
/* 				if($(this).attr('hang_statu') != '1') {*/
/* 					var contract_status = ['合同未激活', '合同已激活', '合同已挂起', '合同已结束', '合同已作废'];*/
/* 					ykp.prompt(contract_status[$(this).attr('hang_statu')] || "不可操作");*/
/* 					return false;*/
/* 				}*/
/* 				//作废未收款不能添加*/
/* 				if($(this).attr('get_money') == -1 && $(this).attr('hand-status') == '4' || $(this).attr('hand-status') == '3') {*/
/* 					ykp.prompt('订单已解约，不能编辑');*/
/* 					return false;*/
/* 				}*/
/* */
/* 				//服务审批状态非未审批、审批失败时，提示*/
/* 				if($(this).attr('data-status') != '0' && $(this).attr('data-status') != '3') {*/
/* 					var approve_status = {*/
/* 						'1': '审批中，不可操作',*/
/* 						'2': '审批成功，不可操作'*/
/* 					};*/
/* 					ykp.prompt(approve_status[$(this).attr('data-status')] || "不可操作");*/
/* 					return false;*/
/* 				}*/
/* 				//当前用户非负责人时，提示*/
/* 				if($(this).attr('fuze_id') != uid) {*/
/* 					ykp.prompt("非负责人，不可操作");*/
/* 					return false;*/
/* 				}*/
/* */
/* 				var customer_id = $(this).parents('tr').attr('data-id');*/
/* 				var company_name = $(this).parent().find('[data-num="1"]').text();*/
/* 				var cang = $(this).parent().find('[data-num="3"]').text();*/
/* 				$('#template1 .name').text(company_name);*/
/* 				$('#template1 .caddress').text(cang);*/
/* */
/* 				// var thistd = $(this);*/
/* */
/* 				var ser_id = $(this).attr('data-id');*/
/* 				var contract_id = $(this).attr('contract_id');*/
/* 				var trIndex = $(this).parents('tr').find('td').index($(this));*/
/* 				var thAry = $('#dynamic-table thead th')[trIndex].innerHTML;*/
/* */
/* 				var trindex = $(this).parents('tr').index();*/
/* 				var timemonth = $(this).attr('data-month');*/
/* 				var showStatus = false;*/
/* 				var datas = {*/
/* 					year_month_id: timemonth*/
/* 				};*/
/* 				ykp.doAjax({ //标记*/
/* 					url: '/api/api_service/get_acquiring_list',*/
/* 					async: false,*/
/* 					methods: 'post',*/
/* 					data: {*/
/* 						service_id: ser_id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						if(res.code == 200) { //标记*/
/* 							var dat = res.data;*/
/* 							if(dat.contact_list.length <= 0) {*/
/* 								ykp.prompt('请先添加联系人');*/
/* 								return;*/
/* 							}*/
/* 							ykp.doAjax({*/
/* 								url: "/api/api_contract/get_month_pz",*/
/* 								async: false,*/
/* 								data: {*/
/* 									contract_id: contract_id,*/
/* 									type: "6",*/
/* */
/* 								},*/
/* 								method: "post",*/
/* 								success: function(res) {*/
/* 									var data = res.data;*/
/* 									//凭证 服务所有月份*/
/* 									var all_month = data['all_month'];*/
/* */
/* 									//已完成服务月份*/
/* 									var done_month = data['done_month'];*/
/* */
/* 									//已完成凭证月份*/
/* 									var pz_month = data['pz_month'];*/
/* */
/* 									//服务月份html*/
/* 									var service_html = [];*/
/* 									//拼争月份html*/
/* 									var pz_html = [];*/
/* */
/* 									var index; //下标不等于-1;则打钩禁用*/
/* */
/* 									ykp.doAjax({*/
/* 										url: "/api/api_accountancies/get_num_info",*/
/* 										method: "post",*/
/* 										async: false,*/
/* 										data: {*/
/* 											customer_id: customer_id*/
/* 										},*/
/* 										success: function(res) {*/
/* 											if(res.code == "400") {*/
/* 												$('.in').removeClass('modal-backdrop');*/
/* 												$('#showBox').addClass('ishide');*/
/* 												showStatus = false;*/
/* 											} else {*/
/* */
/* 												var pzData = res.data;*/
/* 												if(showStatus) {*/
/* 													showMark('#jieTable');*/
/* 													layui.use('element', function(data) {*/
/* 														var element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块*/
/* 														element.init('collapse');*/
/* 													});*/
/* 												} else {*/
/* 													showMark('#jieTable');*/
/* 													$('#showBox .title').text('交接清单');*/
/* 													layui.use('element', function(data) {*/
/* 														var element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块*/
/* 														element.init('collapse');*/
/* 													});*/
/* 													getway();*/
/* 													for(var i in all_month) {*/
/* 														index = $.inArray(all_month[i], done_month);*/
/* 														service_html.push(*/
/* 															`<label class="voucher_label">*/
/* 										                <input type="checkbox" ${index != -1 ? "checked disabled" :""}  data-time="${all_month[i]}">*/
/* 										                <span class="voucher_month">${all_month[i]}</span> */
/* 										              </label>`*/
/* 														);*/
/* */
/* 													}*/
/* 													for(var i in pzData) {*/
/* 														if(pzData[i].type == 1) {*/
/* 															pz_html.push(*/
/* 																`<label class="voucher_label">*/
/* 											                <input type="checkbox"  data-time="${pzData[i]['goods']}">*/
/* 											                <span class="voucher_month">${pzData[i]['goods']}</span> */
/* 											              </label>`);*/
/* 														}*/
/* 													}*/
/* 													$('#templateCon .allmonth ').html(service_html.join(''));*/
/* 													$('#templateCon .pzmonth').html(pz_html.join(''));*/
/* */
/* 													$('#templateCon .name').attr('data-time', timemonth);*/
/* 													$('#templateCon #sendMsg').attr('customer_id', customer_id);*/
/* */
/* 													$('#templateCon').data('flag', '1');*/
/* 													$('#templateCon .close_get').unbind('click').click(function() {*/
/* 														$('#templateCon').data('flag', '2');*/
/* 														cs.close();*/
/* 													});*/
/* */
/* 													getContactTel();*/
/* */
/* 													//加载联系人信息*/
/* 													//$('#templateCon #template1 .name').text(dat.contact_list[0]['customer_id']);*/
/* 													$('#templateCon #template1 .name').attr('val', dat.contact_list[0]['customer_id']);*/
/* 													var contacts = '',*/
/* 														addresses = '';*/
/* 													for(var i in dat.contact_list) {*/
/* 														for(var j in dat.contact_list[i].address_list) {*/
/* 															addresses += `<option value="${dat.contact_list[i].address_list[j]['address']}">${dat.contact_list[i].address_list[j]['address']}</option>`*/
/* 														}*/
/* 														contacts += `<option value="${dat.contact_list[i]['id']}" selected="${dat.contact_list[i]['is_main']==1?'selected':''  }">${dat.contact_list[i]['username']} </option>`;*/
/* 													}*/
/* */
/* 													$('#templateCon #template1 .people').html(contacts);*/
/* 													$('#templateCon #template1 #address').html(addresses);*/
/* 													$('#templateCon #template1 .tel').text(dat.contact_list[$('#templateCon #template1 .people').get(0).selectedIndex]['phone']);*/
/* */
/* 													//切换人改变联系电话*/
/* 													$('#templateCon #template1 .people').change(function() {*/
/* 														var index = $(this).get(0).selectedIndex;*/
/* 														$('#templateCon #template1 .tel').text(dat.contact_list[index]['phone']);*/
/* 													})*/
/* */
/* 													for(var i in dat.out_list) { //标记*/
/* 														var li_1 = '';*/
/* 														//type1*/
/* 														if(dat.out_list[i]['type'] == 1) {*/
/* 															li_1 += ` <tr ck_id=${dat['out_list'][i]['id']}>*/
/* 												<td><a href="javascript:;" class="remove">-</a></td>*/
/* 												<td id="month">*/
/* 												</td>*/
/* 												<td>*/
/* 													<span>${dat['out_list'][i]['goods']}</span>*/
/* 												</td>*/
/* 												<td>*/
/* 													<span>${dat['out_list'][i]['number']}</span>*/
/* 												</td>*/
/* 											</tr>`*/
/* */
/* 															$('#templateCon .voucher tbody').html(li_1);*/
/* 														}*/
/* */
/* 														if(dat.out_list[i]['type'] == 2) { //标记*/
/* 															if($('#templateCon .connects-content>.bill').length <= 0) {*/
/* 																$('#templateCon .buttons button').eq(1).click();*/
/* 															}*/
/* 															//if(++index == 1) {*/
/* 															$('#templateCon .bill tbody').empty().append(*/
/* 																`<tr ck_id=${dat['out_list'][i]['id']}><td><a href="javascript:;" class="remove">-</a>*/
/* 											</td>*/
/* 												<td>*/
/* 													<span>*/
/* 														${dat['out_list'][i]['goods']}*/
/* 													</span>*/
/* 												</td>*/
/* 											<td>*/
/* 													<span>${dat['out_list'][i]['number']}</span>*/
/* 													</td>*/
/* 													</tr>`*/
/* 															);*/
/* 														}*/
/* 														if(dat.out_list[i]['type'] == 3) {*/
/* 															if($('#templateCon .connects-content>.certificate').length <= 0) {*/
/* 																$('#templateCon .buttons button').eq(2).click();*/
/* 															}*/
/* 															//if(++index_ == 1) {*/
/* 															$('#templateCon .certificate tbody').empty().append(*/
/* 																`<tr><td ck_id=${dat['out_list'][i]['id']}>*/
/* 										<a href="javascript:;" class="remove">-</a></td>*/
/* 											<td>*/
/* 											<span>${dat['out_list'][i]['goods']}</span></td>*/
/* */
/* 											<td><span>${dat['out_list'][i]['number']}</span>*/
/* 											</td>*/
/* 											</tr>`*/
/* 															);*/
/* 														} //标记	*/
/* 													} //标记*/
/* 													removeT();*/
/* */
/* 													$('#templateCon .voucher').find('#month').text(thAry);*/
/* */
/* 													//删除一行*/
/* 													function removeT() {*/
/* 														$('.remove').click(function() {*/
/* 															$(this).parents('tr').remove();*/
/* 														})*/
/* 													}*/
/* */
/* 													//保存*/
/* 													//获取票据的所有数据；*/
/* 													var once = true;*/
/* 													$('#templateBox .add').click(function() {*/
/*                                                         delete datas.year_month_id;*/
/* 														var _button = $(this);*/
/* 														if(!cs.popValidate()) {*/
/* 															ykp.prompt('输入框不能为空!');*/
/* 															return;*/
/* 														}*/
/* 														var data_pj = [];*/
/* 														//服务月份*/
/* 														var service_month = [];*/
/* 														//凭证数据*/
/* 														$('#templateCon .pzmonth [data-time]').each(function(i, e) {*/
/* 															if(!$(this).prop('disabled') && $(this).prop('checked')) {*/
/* 																data_pj.push({*/
/* 																	goods: $(this).attr('data-time'),*/
/* 																	type: 1,*/
/* 																	number: 1*/
/* 																});*/
/* */
/* 																service_month.push($(this).attr('data-time'));*/
/* 															}*/
/* 														})*/
/* */
/* 														if($('#templateBox .voucher tbody').find('tr').length > 0) {*/
/* 															$('#templateBox .voucher tbody').find('tr').each(function() {*/
/* 																data_pj.push({*/
/* 																	'name': $(this).find('td').eq(0).text().trim(),*/
/* 																	'cate': 1,*/
/* 																	'num': $(this).find('td').eq(1).text().trim(),*/
/* 																	'money': '',*/
/* 																	'ck_id': $(this).attr('ck_id')*/
/* 																})*/
/* 															})*/
/* 														}*/
/* */
/* 														if($('#templateBox .bill tbody').find('tr').length > 0) {*/
/* */
/* 															$('#templateBox .bill tbody').find('tr').each(function() {*/
/* 																data_pj.push({*/
/* 																	'goods': $(this).find('td').eq(1).text().trim(),*/
/* 																	'type': "2",*/
/* 																	"number": $(this).find('input').eq(0).val()*/
/* 																})*/
/* 															})*/
/* 														}*/
/* */
/* 														if($('#templateBox .certificate tbody').find('tr').length > 0) {*/
/* 															$('#templateBox .certificate tbody').find('tr').each(function() {*/
/* 																data_pj.push({*/
/* 																	'goods': $(this).find('td').eq(1).text().trim(),*/
/* 																	'type': "3",*/
/* 																	"number": $(this).find('input').eq(0).val()*/
/* 																})*/
/* 															})*/
/* 														}*/
/* */
/* 														//获取送单方式信息*/
/* 														var datae = {*/
/* 															express: $('#templateCon [title="express"]').val().trim(),*/
/* 															num: $('#templateCon [title="expressnum"]').val().trim(),*/
/* 															cost: $('#templateCon [title="cost"]').val().trim()*/
/* 														}*/
/* 														//								datas['service_id'] = ser_id;*/
/* 														datas['dataList'] = JSON.stringify(data_pj);*/
/* 														datas['data_type'] = $('#templateCon [title="getway"]').val();*/
/* 														if(datas.data_type == 3) {*/
/* 															datas['data'] = datae;*/
/* 														}*/
/* 														if(datas.data_type == 3 && (datas.data.express == '' || datas.data.num == '' || datas.data.cost == '')) {*/
/* 															ykp.prompt('快递信息必须填写');*/
/* 															return;*/
/* 														}*/
/* */
/* 														if(datas.data_type == 3) {*/
/* 															datas['data'] = JSON.stringify(datae);*/
/* 														}*/
/* */
/* 														$('#templateCon .allmonth [data-time]').each(function(i, e) {*/
/* 															if(!$(this).prop('disabled') && $(this).prop('checked')) {*/
/* 																service_month.push($(this).attr('data-time'));*/
/* 															}*/
/* 														});*/
/* 														var time = service_month ? service_month.join(',') : "";*/
/* 														if(time) {*/
/* 															datas['year_month_id'] = time;*/
/* 														} else {*/
/* 															ykp.prompt('请添加凭证，若无凭证请入库凭证！');*/
/* 															return false;*/
/* 														}*/
/* 														var is_send = false;*/
/* 														if($('#templateCon #sendMsg input:checked').val() == 1) {*/
/* 															is_send = true;*/
/* 														}*/
/* 														var customer_id = $('#templateCon #sendMsg').attr('customer_id');*/
/* 														//								datas['service_id'] = ser_id;*/
/* */
/* 														datas['contract_id'] = contract_id;*/
/* 														datas['contacts'] = $('#templateBox .people').text();*/
/* 														datas['tel'] = $('#templateBox .tel').text();*/
/* 														datas['remark'] = $('#templateBox .rmark').val();*/
/* 														datas['address'] = $('#templateBox #address').val();*/
/* 														datas['is_send'] = $('#templateBox [name="status"]:checked').val();*/
/* 														var param = {*/
/* 															name: $('#templateCon .name').text().trim(),*/
/* 															time: $('#templateCon .name').attr('data-time'),*/
/* 															user: fzpeople*/
/* 														}*/
/* */
/*                                                         var fileBox = $('#templateCon #fileBox');*/
/* 														var files = [];*/
/* 														if(fileBox.children().length > 0) {*/
/* 															$('#templateCon #fileBox').find('a').each(function(i) {*/
/* 																files.push({*/
/* 																	name: $(this).text(),*/
/* 																	url: $(this).attr('href')*/
/* 																})*/
/* 															})*/
/* */
/* 															datas.files = JSON.stringify(files);*/
/* 														}*/
/*                                                         if(once){*/
/* 															once = false;*/
/* 															ykp.prompt('数据保存中...');*/
/* 															setTimeout(function(){once = true},5000);*/
/* 															ykp.doAjax({*/
/* 																url: '/api/api_service/add_send_list_new',*/
/* 																methods: 'post',*/
/* 																data: datas,*/
/* 																success: function(res) {*/
/* 																	cs.close();*/
/* */
/* 																	if(is_send) {*/
/* 																		sendMsg(customer_id, '准备送单', param);*/
/* 																	}*/
/* */
/* 																	getPageList(1);*/
/* 																}*/
/* 															})*/
/* 														};*/
/* */
/* 													})*/
/* 												}*/
/* 											}*/
/* 											showStatus = true;*/
/* 											var data = res.data;*/
/* 											var pj = [],*/
/* 												zj = [];*/
/* 											for(var i in data) {*/
/* 												if(data[i].type == 2) {*/
/* 													pj.push(`<tr><td><a href="javascript:;" class="delTicket" style="    font-size: 24px !important;">-</a></td><td>${data[i].goods}</td>*/
/* 							<td>${data[i].count}</td><td><input data-num="${data[i].count}" value="0" class="snum"/>  </td></tr>`)*/
/* 												} else if(data[i].type == 3) {*/
/* 													//													zj.push(`<tr><td><a href="javascript:;" class="delTicket">-</a></td><td>${data[i].goods}</td>*/
/* 													//								<td><a href="javascript:;" class="delNum" style="margin-right: 20px;">-</a><span>${data[i].count}</span></td></tr>`)*/
/* 													zj.push(`<tr><td><a href="javascript:;" class="delTicket" style="    font-size: 24px !important;">-</a></td><td>${data[i].goods}</td>*/
/* 							<td>${data[i].count}</td><td><input data-num="${data[i].count}" value="0" class="snum"/></td></tr>`)*/
/* 												}*/
/* 											}*/
/* 											$('#templateBox #ticketBody').html(pj.join(','));*/
/* 											$('#templateBox #cardBody').html(zj.join(','));*/
/* 											changeList('.delTicket', '.delNum');*/
/* 										}*/
/* 									})*/
/* 									///api/api_accountancies/get_num_info*/
/* */
/* 								}*/
/* 							})*/
/* */
/* 							/***/
/* 							 *   删除本条记录  */
/* 							 *	  减少数量 最少为1*/
/* 							 *//* */
/* 							function changeList(el, el1) {*/
/* 								//删除本条记录  */
/* 								$(el).click(function() {*/
/* 									$(this).parents('tr').remove();*/
/* 								})*/
/* 								//减少数量 最少为1*/
/* 								$(el1).click(function() {*/
/* 									$(this).next().text() > 1 ? $(this).next().text(parseInt($(this).next().text()) - 1) : "";*/
/* 								})*/
/* */
/* 								$('.snum').change(function() {*/
/* 									if($(this).val() < 0) {*/
/* 										$(this).val(1);*/
/* 									} else if($(this).val() > parseInt($(this).attr('data-num'))) {*/
/* 										$(this).val($(this).attr('data-num'));*/
/* 									}*/
/* 								})*/
/* 							}*/
/* */
/* 							function voucherToService() {*/
/* 								$('#templateCon .pzmonth input').unbind('click').click(function() {*/
/* 									// if($(this).prop('checked')){*/
/* 									$('#templateCon .allmonth input[data-time="' + $(this).attr('data-time') + '"]').prop('checked', $(this).prop('checked'));*/
/* 									// }*/
/* 								});*/
/* 							}*/
/* */
/* 						} //标记 */
/* */
/* 					} //标记*/
/* */
/* 				}) //标记*/
/* 			}) //标记*/
/* 			$("#dataList td[data-status='0']").mouseout(function() {*/
/* 				$(this).children('a').css('display', 'none');*/
/* 			})*/
/* */
/* 		} //标记*/
/* 		/*//* /自定义列表*/
/* 		cs.custorm_check('#dynamic-table', '#dataList', true);*//* */
/* */
/* 		//发送短信*/
/* 		function sendMsg(id, type, param) {*/
/* 			ykp.doAjax({*/
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
/* 		//查询*/
/* 		function search() {*/
/* 			var data = {*/
/* 				url: '/api/api_service/service_list',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					"type": 6,*/
/* 					order: order*/
/* 				}*/
/* 			}*/
/* 			cs.doSearch('#search', data, 'where', false, function(res, _filter,_other) {*/
/* 				filter = _filter;*/
/* 				other = _other;*/
/* 				//生成月份表头*/
/* 				generateMonthTh($('#dynamic-table .thColor .month'), res['data']['months']);*/
/* */
/* 				if(res.data.items == '') {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$('#dataList').html('<tr><td colspan="30" style="color:#7d7d7d;text-align:center !important;">暂无数据</td></tr>');*/
/* 					return false;*/
/* */
/* 				} else {*/
/* 					addList(res);*/
/* 				}*/
/* 			}, '', {*/
/* 				url: "/api/api_service/assistant_list_new "*/
/* 			})*/
/* 		}*/
/* */
/* 		//高级查询*/
/* 		function dohSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_service/service_list',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					"type": 6,*/
/* 					order: order*/
/* 				}*/
/* 			}*/
/* */
/* 			cs.hSearch('.search1', data, 'where', false, function(res, _filter, month) {*/
/* 				filter = _filter;*/
/* 				month2 = month;*/
/* 				//生成月份表头*/
/* 				generateMonthTh($('#dynamic-table .thColor .month'), res['data']['months']);*/
/* */
/* 				$('.in').click();*/
/* 				$('#heightsearch1').removeClass('active');*/
/* 				$("#heightsearch1").slideUp();*/
/* 				if(res.data.items == '') {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
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
/* 		//高级搜索按钮*/
/* 		cs.showHeightSearch('#heightsearch', '#heightsearch1');*/
/* */
/* 		//		顶部chart*/
/* 		cs.getChart(6);*/
/* 		//		能量条形式控制*/
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
/* 	}) //标记*/
/* */
/* 	//导入企业*/
/* 	$('#leading-in').change(function() {*/
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
/* 	});*/
/* </script>*/
