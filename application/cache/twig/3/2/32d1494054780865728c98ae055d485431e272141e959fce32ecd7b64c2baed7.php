<?php

/* admin/task/tax.html */
class __TwigTemplate_871490fc982b37428610004cef006daceccf81bd6cfb98113afe0d806cdb9948 extends Twig_Template
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
\t.infobox-blue2 {
\t\ttext-align: center;
\t}
\t
\t.infobox>.infobox-data {
\t\tmin-width: 80px;
\t}
\t
\t.import {
\t\tbackground-color: #fb9a47 !important;
\t\tborder-color: #fb9a47;
\t}
\t
\t.iframePage a {
\t\tcolor: #7d7d7d;
\t}
\t
\t#heightsearch1 label,
\t#height_search1 label {
\t\ttext-align: right;
\t\twidth: 80px;
\t\tfont-weight: normal;
\t}
\t
\t#template4Con label {
\t\twidth: 120px;
\t}
\t
\tspan[syllable],
\tspan[field] {
\t\tdisplay: inline-block;
\t\twidth: 110px;
\t}
\t#templateBox{
\t\tpadding-top: 53px;
\t}
\t/*span[field]{
\t\tdisplay: inline-block;
\t\twidth: 300px;
\t}*/
/*\t.close_get{
\t\tposition: absolute;
\t\tright: 15px;
\t\ttop: 0;
\t\t
\t}*/
/*\t.addCustomerLabel{
\t\tposition: absolute;
\t\tright: 300px;
\t\twidth: 32px;
\t\theight: 25px;
\t\tvertical-align: middle;
\t\tmargin-top:13px ;
\t}*/
/*.fa-tags{
\tposition: absolute;
\tmargin-left: 4px;
\ttop: 7px;
}*/
#temHeader{
 z-index: 9999 !important;
\tposition: fixed;
\twidth: 100%;
}
.popup_button{
\tdisplay: inline-block;
}
/*.close_get {
\tposition: absolute;
\tmargin-left: 236px !important;
}*/

</style>

<div class=\"widget-main\">
\t<div class=\"row\" style=\"display:;\">
\t\t<!-- <h3 class=\"header smaller lighter blue\">报税</h3> -->
\t\t<div>
\t\t\t<!--顶部查询列表-->
\t\t\t<div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div style=\"margin-top: 50px;  width:1050px; padding: 0px;\" class=\"row col-xs-12\">
\t\t\t\t\t\t<div class=\"col-xs-12 infobox-container\" style=\"padding: 0px; margin-left: -10px;\">
\t\t\t\t\t\t\t<!-- #section:pages/dashboard.infobox -->
\t\t\t\t\t\t\t<div class=\"infobox infobox-blue2\" style=\"color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;\">
\t\t\t\t\t\t\t\t<div class=\"infobox-data\" style=\"padding: 0px;\">
\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\" style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t\t本季度国税申报
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"infobox infobox-blue2\" style=\"color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;\">
\t\t\t\t\t\t\t\t<div class=\"infobox-data\" style=\"padding: 0px;\">
\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\" style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t\t本月地税申报
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"infobox infobox-blue2\" style=\"color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;\">
\t\t\t\t\t\t\t\t<div class=\"infobox-data\" style=\"padding: 0px;\">
\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\" style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t\t本月发票认证
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"infobox infobox-blue2\" style=\"color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;\">
\t\t\t\t\t\t\t\t<div class=\"infobox-data\" style=\"padding: 0px;\">
\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\" style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t\t本年工商年报
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"infobox infobox-blue2\" style=\"color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;\">
\t\t\t\t\t\t\t\t<div class=\"infobox-data\" style=\"padding: 0px;\">
\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\" style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t\t本年税务年报
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"infobox infobox-blue2 chart1\">
\t\t\t\t\t\t\t\t<div class=\"infobox-progress\">
\t\t\t\t\t\t\t\t\t<!-- #section:pages/dashboard.infobox.easypiechart -->
\t\t\t\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"0\" data-size=\"50\" style=\"height: 57px;width: 57px;line-height: 56px;\">
\t\t\t\t\t\t\t\t\t\t<span class=\"percent\" id=\"percent\">0</span>
\t\t\t\t\t\t\t\t\t\t<canvas height=\"57\" width=\"57\"></canvas>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"infobox-data\" style=\"margin:3px 0 0 20px;\">
\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\" id=\"isOk\"></div>

\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\" id=\"noOk\">

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"infobox infobox-blue2 chart2\">
\t\t\t\t\t\t\t\t<div class=\"infobox-progress\">
\t\t\t\t\t\t\t\t\t<!-- #section:pages/dashboard.infobox.easypiechart -->
\t\t\t\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"0\" data-size=\"50\" style=\"height: 57px; width: 57px; line-height: 56px;\">
\t\t\t\t\t\t\t\t\t\t<span class=\"percent\" id=\"percent1\">0</span>
\t\t\t\t\t\t\t\t\t\t<canvas height=\"57\" width=\"57\"></canvas></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"infobox-data\" style=\"margin:3px 0 0 20px;\">
\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\" id=\"isOk\">

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\">

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"infobox infobox-blue2 chart3\">
\t\t\t\t\t\t\t\t<div class=\"infobox-progress\">
\t\t\t\t\t\t\t\t\t<!-- #section:pages/dashboard.infobox.easypiechart -->
\t\t\t\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"0\" data-size=\"50\" style=\"height: 57px; width: 57px; line-height: 56px;\">
\t\t\t\t\t\t\t\t\t\t<span class=\"percent\" id=\"percent2\">0</span>
\t\t\t\t\t\t\t\t\t\t<canvas height=\"57\" width=\"57\"></canvas></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"infobox-data\" style=\"margin:3px 0 0 20px;\">
\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\" id=\"isOk\">

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\">

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"infobox infobox-blue2 chart4\">
\t\t\t\t\t\t\t\t<div class=\"infobox-progress\">
\t\t\t\t\t\t\t\t\t<!-- #section:pages/dashboard.infobox.easypiechart -->
\t\t\t\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"0\" data-size=\"50\" style=\"height: 57px; width: 57px; line-height: 56px;\">
\t\t\t\t\t\t\t\t\t\t<span class=\"percent\" id=\"percent2\">0</span>
\t\t\t\t\t\t\t\t\t\t<canvas height=\"57\" width=\"57\"></canvas></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"infobox-data\" style=\"margin:3px 0 0 20px;\">
\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\" id=\"isOk\">

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\">

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"infobox infobox-blue2 chart5\">
\t\t\t\t\t\t\t\t<div class=\"infobox-progress\">
\t\t\t\t\t\t\t\t\t<!-- #section:pages/dashboard.infobox.easypiechart -->
\t\t\t\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"0\" data-size=\"50\" style=\"height: 57px; width: 57px; line-height: 56px;\">
\t\t\t\t\t\t\t\t\t\t<span class=\"percent\" id=\"percent2\">0</span>
\t\t\t\t\t\t\t\t\t\t<canvas height=\"57\" width=\"57\"></canvas></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"infobox-data\" style=\"margin:3px 0 0 20px;\">
\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\" id=\"isOk\">

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\">

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"clear:both;\"></div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-12\" style=\"margin-top: 50px;padding-left:0;padding-right:0;\">
\t\t\t\t\t\t<div class=\"kind\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"generaltaxpayer now\">小规模</li>
\t\t\t\t\t\t\t\t<li class=\"small-scale\">一般纳税人</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div id=\"tspage\" style=\"border: 0px red solid; width: 480px;height: 30px;display:none;\">
\t\t\t\t\t\t\t\t<a id=\"go_\" href=\"javascript:void(0)\">有部分一般纳税人数据,点击前往</a>
\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"close_ts\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--小规模-->
\t\t\t\t\t\t<div class=\"_details tab-pane\" id=\"task-tab\">
\t\t\t\t\t\t\t<div class=\"row\" style=\"margin-top:20px;\" id=\"topTool\">
\t\t\t\t\t\t\t\t<!--普通搜索-->
\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" pts=1 sear=\"customer_name\" placeholder=\"企业名称\" autofocus/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t<!--<input type=\"text\" pts=1 sear=\"staff_name\" placeholder=\"申报人\" autofocus/>-->
\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" pts=1 sear=\"staff_name\" class=\"advandced-search select2-hidden-accssible\"  tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">申报人</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"search\" title=\"搜索\" class=\"search btn btn-info btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t<button id=\"heightsearch\" title=\"高级搜索\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-filter\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t<button title=\"刷新\" class=\"flush btn btn-info btn-sm\" type=\"button\" style=\"background-color: #32CD32\t !important;\">
\t\t\t\t\t\t\t                    <i class=\"fa fa-refresh\"></i>
\t\t\t\t\t\t\t                </button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"103\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t<label type=\"button\" id=\"mergeItem\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" title=\"导入\" class=\"btn btn-info btn-sm position-relative mergeItem\" for=\"leading-in\">
\t\t\t\t\t                            <i class=\"fa fa-sign-in\"></i>
\t\t\t\t\t                       </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"289\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"分配申报人\" id=\"moveToClue\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"moveToClue btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-hand-o-right\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:290px;height: 36px\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px;
\t\t\t\t\t\t\t\t\t\t\t\tbackground: #E6E6E6;\" data-kind=\"0\"> 查看全部</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"1\"> 我负责的</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"2\"> 我关注的</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"3\"> 我的下属</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!--高级搜索-->
\t\t\t\t\t\t\t\t<div id=\"heightsearch1\" class=\"col-sx-12 heightsearch1\" style=\"margin-top:30px;position: absolute; background: #fff; z-index: 1041;padding: 20px 10px; display: none;\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t<label>年份</label>
\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=5 sear=\"year\" data-year=\"true\"></select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t<label>报税月份</label>
\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=5 class=\"month\" sear=\"month\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"01\"> 1月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"02\"> 2月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"03\"> 3月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"04\"> 4月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"05\"> 5月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"06\"> 6月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"07\"> 7月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"08\"> 8月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"09\"> 9月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"10\"> 10月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\"> 11月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"12\"> 12月 </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t<label>企业名称</label>
\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.name\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;margin-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t<label>申报人</label>
\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<!--<input type=\"text\" gjs=1 sear=\"staff_name\">-->
\t\t\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=1 sear=\"staff_name\" class=\"advandced-search select2-hidden-accssible\"  tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t<label>国税申报</label>
\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=6 tax=\"true\" sear=\"jzm_tax_details.is_state_tax\" data-type=\"gj\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"> 已申报 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\"> 未申报 </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t<label>地税申报</label>
\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=6 tax=\"true\" sear=\"jzm_tax_details.is_local_tax\" data-type=\"gj\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"> 已申报 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\"> 未申报 </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t<label>工商年报</label>
\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=6 tax=\"true\" sear=\"jzm_tax_details.is_business_tax\" data-type=\"gj\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"> 已申报 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\"> 未申报 </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\"clear:both;padding-top:10px;text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t                        查询
\t\t\t\t\t\t\t\t                    </button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"rest\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t\t                       重置
\t\t\t\t\t\t\t\t\t                    </button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t\t<table id=\"dynamic-table1\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" onclick=\"checkAll(this.checked)\" name=\"check\" class=\"ace\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"1\">企业名称</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"2\">任务等级</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"3\">账号</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"12\">国税密码</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"5\">地税密码</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"6\">发票采集</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"7\">申报月份</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"8\">申报所属期</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"9\">申报人</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"10\">税务申报操作</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"11\">税费数据</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t\t\t<tbody id=\"dataList\">

\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--一般纳税人-->
\t\t\t\t\t\t<div class=\"_details tab-pane\" style=\"display:none;\" id=\"member-tab\">
\t\t\t\t\t\t\t<div class=\"row\" style=\"margin-top: 20px;\" id=\"topTool\">
\t\t\t\t\t\t\t\t<!--普通搜索-->
\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" pts=1 sear=\"customer_name\" placeholder=\"企业名称\" autofocus/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t<!--<input type=\"text\" pts=1 sear=\"staff_name\" placeholder=\"申报人\" autofocus/>-->
\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" pts=1 sear=\"staff_name\" class=\"advandced-search select2-hidden-accssible\"  tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">申报人</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"search\" title=\"搜索\" class=\"search btn btn-info btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t<button id=\"height_search\" type=\"button\" title=\"高级搜索\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-filter\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t<button class=\"flush btn btn-info btn-sm\" title=\"刷新\" type=\"button\" style=\"background-color: #32CD32\t !important;\">
\t\t\t\t\t\t\t                    <i class=\"fa fa-refresh\"></i>
\t\t\t\t\t\t\t                </button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"103\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t<label type=\"button\" id=\"mergeItem\" title=\"导入\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"btn btn-info btn-sm position-relative mergeItem\" for=\"leading-in\">
\t\t\t\t\t                            <i class=\"fa fa-sign-in\"></i>
\t\t\t\t\t                       </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"289\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"moveToClue\" title=\"分配申报人\"style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"moveToClue btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t\t\t                    <i class=\"fa fa-hand-o-right\"></i>
\t\t\t\t\t\t                </button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:290px;height: 36px\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px;
\t\t\t\t\t\t\t\t\t\t\t\tbackground: #E6E6E6;\" data-kind=\"0\"> 查看全部</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"1\"> 我负责的</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"2\"> 我关注的</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"3\"> 我的下属</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!--高级搜索-->
\t\t\t\t\t\t\t\t<div id=\"height_search1\" class=\"col-sx-12 heightsearch1\" style=\"margin-top:30px;position: absolute; background: #fff; z-index: 1041;padding: 20px 10px; display: none;\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t<label>年份</label>
\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=5 sear=\"year\" data-year=\"true\"></select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t<label>报税月份</label>
\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" class=\"month\" gjs=5 sear=\"month\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"01\"> 1月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"02\"> 2月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"03\"> 3月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"04\"> 4月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"05\"> 5月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"06\"> 6月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"07\"> 7月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"08\"> 8月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"09\"> 9月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"10\"> 10月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\"> 11月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"12\"> 12月 </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t<label>企业名称</label>
\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.name\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px; margin-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t<label>申报人</label>
\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<!--<input type=\"text\" gjs=1 sear=\"staff_name\">-->
\t\t\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=1 sear=\"staff_name\" class=\"advandced-search select2-hidden-accssible\"  tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px; margin-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t<label>发票认证</label>
\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" data-type=\"gj\" gjs=6 tax=\"true\" sear=\"jzm_tax_details.is_invoice\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"> 已认证 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\"> 未认证 </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t<label>国税申报</label>
\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=6 tax=\"true\" sear=\"jzm_tax_details.is_state_tax\" data-type=\"gj\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"> 已申报 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\"> 未申报 </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t<label>地税申报</label>
\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=6 tax=\"true\" sear=\"jzm_tax_details.is_local_tax\" data-type=\"gj\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"> 已申报 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\"> 未申报 </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t<label>工商年报</label>
\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=6 tax=\"true\" sear=\"jzm_tax_details.is_business_tax\" data-type=\"gj\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"> 已申报 </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\"> 未申报 </option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\"clear:both;padding-top:10px;text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t                        查询
\t\t\t\t\t\t\t\t                    </button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"rest1\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t\t                       重置
\t\t\t\t\t\t\t\t\t                    </button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t\t<table id=\"dynamic-table2\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t\t\t                        <input type=\"checkbox\" onclick=\"checkAll(this.checked)\" name=\"check\" class=\"ace\"/>
\t\t\t\t\t\t\t\t\t                        <span class=\"lbl\"></span>
\t\t\t\t\t\t\t\t\t                        </label>
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"1\">企业名称</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"2\">任务等级</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"3\">账号</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"12\">国税密码</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"5\">地税密码</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"6\">发票采集</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"7\">申报月份</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"8\">申报所属期</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"9\">申报人</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"10\">税务申报操作</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"11\">税费数据</th>

\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t\t\t<tbody id=\"dataList1\">

\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" id=\"num\"></div>
\t\t\t\t\t\t\t<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>
\t\t\t\t\t\t\t<div id=\"pageBar\" class=\"pagination\"></div>
\t\t\t\t\t\t\t<div align=\"right\" style=\"float: right;  width: 10%;\">
\t\t\t\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div id=\"templateBox4\">
\t\t\t\t<div id=\"template4\" style=\"display:none; \">
\t\t\t\t\t<div class=\"row\" style=\"width: 650px;\" id=\"template4Con\">
\t\t\t\t\t\t<div class=\"popup_button\" style=\"display: flex;justify-content: space-between;\">
\t\t\t\t\t\t\t<!--<button class=\"close_get btn btn-info btn-sm\">
\t\t\t\t\t\t\t关闭
\t\t\t\t\t\t</button>-->
\t\t\t\t\t\t\t<button class=\"sure_button btn btn-info btn-sm save\" id=\"save\">保存</button>
\t\t\t\t\t\t\t<button class=\"sure_button btn btn-info btn-sm save\" id=\"save\">提交</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form class=\"item_form\" role=\"form\" style=\"margin-top: 20px;\">
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label style=\"width: 100px; text-align: left;\">上传文件：</label>
\t\t\t\t\t\t\t\t<div class=\"\" style=\"padding: 2px; margin-left: 70px;\">
\t\t\t\t\t\t\t\t\t<div id=\"fileBox\">

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"uploadBox\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"upload1\" style=\"outline: none;background-color: #009688 !important; \" class=\"btn btn-info btn-sm position-relative\">
\t\t\t\t\t\t                        上传文件
\t\t\t\t\t\t        \t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"sendMsg\" customer_id=\"\" style=\"height: 30px;line-height: 40px; margin-top:50px;\">
\t\t\t\t\t\t\t\t<label style=\"margin-left:-40px\">是否发送短信：</label>
\t\t\t\t\t\t\t\t<input type=\"radio\" value=\"1\" name=\"is_send\">是
\t\t\t\t\t\t\t\t<input type=\"radio\" value=\"2\" name=\"is_send\" checked=\"true\">否
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 style=\"margin: 20px 0px;\">工商年报基础信息</h3>
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label style=\"\">社会信用代码：</label>
\t\t\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"social_credit_code\" value=\"\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t\t\t<label style=\"\">企业名称：</label>
\t\t\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"name\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label style=\"\">法人姓名：</label>
\t\t\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"corporation\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t\t\t<label style=\"\">法人身份证号：</label>
\t\t\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"corporation_card\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--一般纳税人-->
\t\t\t\t\t\t\t<h3 style=\"margin: 20px 0px;\">纳税基础信息</h3>
\t\t\t\t\t\t\t<div id=\"yiban\">
\t\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t\t<label style=\"\">本期销售额：</label>
\t\t\t\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"total\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t\t\t\t<label style=\"\">销项税额：</label>
\t\t\t\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"xTax\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t\t<label style=\"\">进项税额：</label>
\t\t\t\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"jTax\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t\t\t\t<label style=\"\">上期末留底税额：</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" min=\"0\" field=\"上期末留抵税额\" style=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t\t<label style=\"\">增值税应纳税额：</label>
\t\t\t\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"tTax\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t\t\t\t<label style=\"\">本期末留抵税额：</label>
\t\t\t\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"lTax\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t\t<label style=\"\">本年累计税负：</label>
\t\t\t\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"yearTax\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t\t\t\t<label style=\"\">免抵退：</label>
\t\t\t\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"免抵退\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t\t<label style=\"\">进项税额转出：</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"transfer_out\" />
\t\t\t\t\t\t\t\t\t<label style=\"\">本年累计销售额：</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"今年累计销售额\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--小规模-->
\t\t\t\t\t\t\t<div id=\"xiao\">
\t\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t\t<label style=\"\">本期销售额：</label>
\t\t\t\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"total\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t\t\t\t<label style=\"\">本年累计销售额：</label>
\t\t\t\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"今年累计销售额\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t\t<label style=\"width: 130px;\">增值税应纳税额合计  ：</label>
\t\t\t\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"tTax\" style=\"background-color:#E6E6E6 !important;  float: right;margin-right: 37px;\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t\t<label style=\"width: 220px;text-align: left;\">近11个月累积应税服务销售额：</label>
\t\t\t\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" syllable=\"11month,service\" style=\"background-color:#E6E6E6 !important; float: right;margin-right: 37px;\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t\t<label style=\"width: 220px;text-align: left;\">近11个月累积应税货物及劳务销售额：</label>
\t\t\t\t\t\t\t\t\t<input disabled=\"true\" id=\"\" type=\"text\" syllable=\"11month,goods\" style=\"background-color:#E6E6E6 !important; float: right;margin-right: 37px;\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<h3 style=\"margin: 20px 0px;\">地税款明细</h3>
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label style=\"\">税款所属时间：</label>
\t\t\t\t\t\t\t\t<select multiple=\"\" field=\"local_time\" id=\"addtime\" name=\"state\" addfield=\"bs\" class=\"addtime select2 select2-hidden-accessible\" data-placeholder=\"选择报税负责人\" style=\"width: 200px;\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label style=\"\">企业所得税：</label>
\t\t\t\t\t\t\t\t<input type=\"number\" field=\"local_corporate_tax\" placeholder=\"0\" style=\"margin-right: 15px;\" Title1=\"\" />
\t\t\t\t\t\t\t\t<label style=\"\">城建税：</label>
\t\t\t\t\t\t\t\t<input type=\"number\" field=\"construction_tax\" placeholder=\"0\" style=\"margin-right: 15px;\" Title1=\"\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label style=\"\">教育费附加：</label>
\t\t\t\t\t\t\t\t<input type=\"number\" field=\"tuition\" placeholder=\"0\" style=\"margin-right: 15px;\" Title1=\"\" />
\t\t\t\t\t\t\t\t<label style=\"\">地方教育附加：</label>
\t\t\t\t\t\t\t\t<input type=\"number\" field=\"local_tuition\" placeholder=\"0\" style=\"margin-right: 15px;\" Title1=\"\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label style=\"\">个人所得税：</label>
\t\t\t\t\t\t\t\t<input type=\"number\" field=\"individual_tax\" placeholder=\"0\" style=\"margin-right: 15px;\" Title1=\"\" />
\t\t\t\t\t\t\t\t<label style=\"\">印花税：</label>
\t\t\t\t\t\t\t\t<input type=\"number\" field=\"printing\" placeholder=\"0\" style=\"margin-right: 15px;\" Title1=\"\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label style=\"\">堤围费/水利基金：</label>
\t\t\t\t\t\t\t\t<input type=\"number\" field=\"water_fund\" placeholder=\"0\" style=\"margin-right: 15px;\" Title1=\"\" />
\t\t\t\t\t\t\t\t<label style=\"\">其他税费：</label>
\t\t\t\t\t\t\t\t<input type=\"number\" field=\"local_other_tax\" placeholder=\"0\" style=\"margin-right: 15px;\" Title1=\"\" />
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<h3 style=\"margin: 20px 0px;\">国税税款明细</h3>
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label style=\"\">税款所属时间：</label>
\t\t\t\t\t\t\t\t<select style=\"width: 85px;\" id=\"\" name=\"state\" field=\"state_time2\" addfield=\"bs\" class=\"addtime\">
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t<select style=\"width: 85px;\" field=\"state_time1\" id=\"\" name=\"state\" addfield=\"bs\" class=\"addtime \">
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label style=\"\">企业所得税：</label>
\t\t\t\t\t\t\t\t<input type=\"number\" field=\"corporate_tax\" placeholder=\"0\" style=\"margin-right: 15px;\" Title1=\"\" />
\t\t\t\t\t\t\t\t<label style=\"\">增值税：</label>
\t\t\t\t\t\t\t\t<input type=\"number\" field=\"state_appreciation\" placeholder=\"0\" style=\"margin-right: 15px;\" Title1=\"\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label style=\"\">文化事业建设费：</label>
\t\t\t\t\t\t\t\t<input type=\"number\" field=\"culture\" placeholder=\"0\" style=\"margin-right: 15px;\" Title1=\"\" />
\t\t\t\t\t\t\t\t<label style=\"\">消费税：</label>
\t\t\t\t\t\t\t\t<input type=\"number\" field=\"excise_tax\" placeholder=\"0\" style=\"margin-right: 15px;\" Title1=\"\" />

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label style=\"\">其他税费：</label>
\t\t\t\t\t\t\t\t<input type=\"number\" field=\"state_other_tax\" placeholder=\"0\" style=\"margin-right: 15px;\" Title1=\"\" />
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<h3 style=\"margin: 20px 0px;\">企业资产状况信息</h3>
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label style=\"\">所属时间：</label>
\t\t\t\t\t\t\t\t<select style=\"width: 85px;\" field=\"business_time2\" id=\"\" name=\"state\" addfield=\"bs\" class=\"addtime1 \">
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<!--<!
\t\t\t\t\t\t\t\t<select style=\"width: 85px;\" field=\"business_time1\" id=\"\" name=\"state\" addfield=\"bs\" class=\"addtime1 \">
\t\t\t\t\t\t\t\t</select>-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label style=\"\">资产总额（万元）：</label>
\t\t\t\t\t\t\t\t<input type=\"number\" placeholder=\"0\" field=\"total_assets\" style=\"margin-right: 15px;\" Title1=\"\" />
\t\t\t\t\t\t\t\t<label style=\"\">所有者权益合计：</label>
\t\t\t\t\t\t\t\t<input type=\"number\" placeholder=\"0\" field=\"profit_total\" style=\"margin-right: 15px;\" Title1=\"\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label style=\"\">营业总收入（万元）：</label>
\t\t\t\t\t\t\t\t<input type=\"number\" placeholder=\"0\" field=\"operating_income\" style=\"margin-right: 15px;\" Title1=\"\" />
\t\t\t\t\t\t\t\t<label style=\"\">营业中总收入（万元）：</label>
\t\t\t\t\t\t\t\t<input type=\"number\" placeholder=\"0\" field=\"operating_income_total\" style=\"margin-right: 15px;\" Title1=\"\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label style=\"\">利润总额（万元）：</label>
\t\t\t\t\t\t\t\t<input type=\"number\" placeholder=\"0\" field=\"operating_profit\" style=\"margin-right: 15px;\" Title1=\"\" />
\t\t\t\t\t\t\t\t<label style=\"\">负债总额：（万元）</label>
\t\t\t\t\t\t\t\t<input type=\"number\" placeholder=\"0\" field=\"labilities\" style=\"margin-right: 15px;\" Title1=\"\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label style=\"\">净利润（万元）：</label>
\t\t\t\t\t\t\t\t<input type=\"number\" placeholder=\"0\" field=\"net_profit\" style=\"margin-right: 15px;\" Title1=\"\" />
\t\t\t\t\t\t\t\t<label style=\"\">纳税总额：（万元）</label>
\t\t\t\t\t\t\t\t<input type=\"number\" placeholder=\"0\" field=\"tax_total\" style=\"margin-right: 15px;\" Title1=\"\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--<h3 style=\"margin: 20px 0px;\">税务年报信息2</h3>
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label style=\"\">所属时间：</label>
\t\t\t\t\t\t\t\t<select style=\"width: 85px;\" id=\"\" name=\"state\" field=\"taxation_time2\" addfield=\"bs\" class=\"addtime1\">
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<!--<!
\t\t\t\t\t\t\t\t<select style=\"width: 85px;\" field=\"taxation_time1\" id=\"\" name=\"state\" addfield=\"bs\" class=\"addtime1 \">
\t\t\t\t\t\t\t\t</select>-->
\t\t\t\t\t\t\t<!--</div>-->

\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!--销项采集，进项采集-->
\t\t\t<div id=\"invoice_collect\" class=\"widget-box transparent\" id=\"recent-box\" style=\"display:none ;\">
\t\t\t\t<div style=\"width:1000px;\">
\t\t\t\t\t<div style=\"padding:10px 0;\">
\t\t\t\t\t\t<h3 style=\"font-size:16px;\">销项采集</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"layui-collapse\">
\t\t\t\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t\t\t\t<h2 class=\"layui-colla-title\">增值税专用发票</h2>
\t\t\t\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>序号</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>份数</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>计税方式</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>征税项目</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>是否作废</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"x1\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"invoice\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"money\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"amount_of_tax\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">未作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t\t\t\t<h2 class=\"layui-colla-title\">税控机动车专用发票</h2>
\t\t\t\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>序号</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>份数</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>计税方式</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>征税项目</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>是否作废</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"x2\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"invoice\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"money\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"amount_of_tax\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">未作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t\t\t\t<h2 class=\"layui-colla-title\">普通发票</h2>
\t\t\t\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>序号</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>份数</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>计税方式</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>征税项目</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>是否作废</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"x3\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"invoice\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"money\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"amount_of_tax\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">未作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--<div class=\"layui-colla-item\">
\t\t\t\t\t\t\t\t<h2 class=\"layui-colla-title\">未开具发票</h2>
\t\t\t\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>序号</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>业务类型</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>计税方式</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>征税项目</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>是否作废</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税款所属期</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"x4\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"type\">
\t\t\t\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">注册公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">变更公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">股权变更</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">注册商标</option>
\t\t\t\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"5\">注销公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">申请一般纳税人</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">记账报税</option>
\t\t\t\t\t    \t\t\t\t\t\t  </select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"money\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"amount_of_tax\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">未作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"tax_money_period\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t\t\t\t<h2 class=\"layui-colla-title\">未开具发票</h2>
\t\t\t\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>序号</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>业务类型</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>计税方式</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>征税项目</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>是否作废</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税款所属期</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"x4\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"type\">
\t\t\t\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">注册公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">变更公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">股权变更</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">注册商标</option>
\t\t\t\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"5\">注销公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">申请一般纳税人</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">记账报税</option>
\t\t\t\t\t    \t\t\t\t\t\t  </select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"money\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"amount_of_tax\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">未作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"tax_money_period\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t\t\t\t<h2 class=\"layui-colla-title\">纳税检查调整</h2>
\t\t\t\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>序号</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>业务类型</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>计税方式</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>征税项目</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>是否作废</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税款所属期</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"x5\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"type\">
\t\t\t\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">注册公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">变更公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">股权变更</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">注册商标</option>
\t\t\t\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"5\">注销公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">申请一般纳税人</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">记账报税</option>
\t\t\t\t\t    \t\t\t\t\t\t  </select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"money\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"amount_of_tax\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">未作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"tax_money_period\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t\t\t\t<h2 class=\"layui-colla-title\">地税开具其他发票及未开票销售额</h2>
\t\t\t\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>序号</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>份数</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>业务类型</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>计税方式</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>征税项目</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>是否作废</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税款所属期</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"x6\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"invoice\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"type\">
\t\t\t\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">注册公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">变更公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">股权变更</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">注册商标</option>
\t\t\t\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"5\">注销公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">申请一般纳税人</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">记账报税</option>
\t\t\t\t\t    \t\t\t\t\t\t  </select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"money\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"amount_of_tax\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">未作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"tax_money_period\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style=\"display:none;\" class=\"jxcj\">
\t\t\t\t\t<div style=\"padding:10px 0;\">
\t\t\t\t\t\t<h3 style=\"font-size:16px;\">进项采集</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"layui-collapse\" lay-accordion>
\t\t\t\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t\t\t\t<h2 class=\"layui-colla-title\">增值税专用发票</h2>
\t\t\t\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>序号</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>份数</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>是否抵扣</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>申报所属期</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>认证日期</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"j1\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"invoice\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"money\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"amount_of_tax\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"deductible\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"tax_money_period\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"date-timepicker1\" field=\"auth_time\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
\t\t\t\t\t\t\t                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t\t\t\t<h2 class=\"layui-colla-title\">税控机动车发票</h2>
\t\t\t\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>序号</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>份数</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>税额</th>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>是否抵扣</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"j2\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"invoice\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"money\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"amount_of_tax\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"deductible\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- 一般纳税人 -->
\t\t\t<div id=\"template1\" style=\"display:none; \" class=\"template\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<form class=\"item_form\" role=\"form\" style=\"\">
\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t<label style=\"width: 110px;\">企业名称：</label>
\t\t\t\t\t\t\t<input type=\"text\" disabled=\"true\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t\t<label style=\"width: 125px;\">本期销售额：</label>
\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" disabled=\"true\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t<label style=\"width: 110px;\">销项税额：</label>
\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" disabled=\"true\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t\t<label style=\"width: 125px;\">进项税额：</label>
\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" disabled=\"true\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t<label style=\"width: 110px; \">上期末留底税额：</label>
\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" disabled=\"true\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t\t<label style=\"width: 125px; \">增值税应纳税额：</label>
\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" disabled=\"true\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t<label style=\"width: 110px;\">免抵退：</label>
\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" disabled=\"true\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t\t<label style=\"width: 125px;\">本年累计税负：</label>
\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" disabled=\"true\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t<label style=\"width: 110px;\">期末留抵税额：</label>
\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" disabled=\"true\" style=\"margin-right: 15px;background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t\t<label style=\"width: 110px;\">印花税：</label>
\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" Title1=\"printing\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t<label style=\"width: 110px;\">企业所得税：</label>
\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" style=\"margin-right: 15px;\" Title1=\"corporate_tax\" />
\t\t\t\t\t\t\t<label style=\"width: 110px;\">城建税：</label>
\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" style=\"margin-right: 15px;\" Title1=\"construction_tax\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t<label style=\"width: 110px;\">教育附加税：</label>
\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" style=\"margin-right: 15px;\" Title1=\"tuition\">
\t\t\t\t\t\t\t<label style=\"width: 110px; \">地方教育费附加：</label>
\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" style=\"margin-right: 15px;\" Title1=\"local_tuition\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t<label style=\"width: 110px;\">个税：</label>
\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" style=\"margin-right: 15px;\" Title1=\"individual_tax\" />
\t\t\t\t\t\t\t<label style=\"width: 110px;\">文化事业建设税：</label>
\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" style=\"margin-right: 15px;\" Title1=\"culture\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t<label style=\"width: 110px;\">消费税：</label>
\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" style=\"margin-right: 15px;\" Title1=\"excise_tax\">
\t\t\t\t\t\t\t<label style=\"width: 110px;\">堤围费/水利基金：</label>
\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" style=\"margin-right: 15px;\" Title1=\"water_fund\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t<label style=\"width: 110px; \">国税其他税费：</label>
\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" style=\"margin-right: 15px;\" Title1=\"state_other_tax\" />
\t\t\t\t\t\t\t<label style=\"width: 110px; \">地税其他税费：</label>
\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" style=\"margin-right: 15px;\" Title1=\"local_other_tax\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t<label style=\"width: 110px;\">本年累计销售额：</label>
\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" style=\"margin-right: 15px;\" Title1=\"今年累计销售额\" />
\t\t\t\t\t\t\t<label style=\"width: 110px;\">进项税额转出：</label>
\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" style=\"margin-right: 15px;\" Title1=\"transfer_out\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"\" style=\"padding: 2px; margin-left: 70px;\">
\t\t\t\t\t\t\t<div id=\"fileBox\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"uploadBox\">
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"upload1\" style=\"outline: none;background-color: #009688 !important; margin-top: 20px;\" class=\"btn btn-info btn-sm position-relative\">
\t\t\t\t\t\t                        上传文件
\t\t\t\t\t\t        \t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"sendMsg\" customer_id=\"\" style=\"height: 30px;line-height: 40px; margin-top: 100px;\">
\t\t\t\t\t\t\t<label style=\"margin-left:-15px\">是否发送短信：</label>
\t\t\t\t\t\t\t<input type=\"radio\" value=\"1\" name=\"is_send\">是
\t\t\t\t\t\t\t<input type=\"radio\" value=\"2\" name=\"is_send\" checked=\"true\">否
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"popup_button\">
\t\t\t\t\t\t<button class=\"close_get btn btn-info btn-sm\">关闭</button>
\t\t\t\t\t\t<button class=\"sure_button btn btn-info btn-sm save\" id=\"save\">保存</button>
\t\t\t\t\t\t<button class=\"sure_button btn btn-info btn-sm save\" id=\"save\">提交</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"label_popup\" id=\"export\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t\t\t            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t\t\t<span style=\"display: inline-block;\">导入报税</span>
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t\t\t<input type=\"file\" width=\"200px\" style=\"margin: auto;\" id=\"efile\" />
\t\t\t\t\t\t<!--<hr>-->
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t\t\t<button id=\"ghItem\" class=\" btn\">报税模板</button>
\t\t\t\t\t\t<button class=\"btn btn-info  submit\" style=\"padding: 6px; border-radius: 0px;\">保存</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div id=\"small-scale\" style=\"display:none;\">
\t\t\t\t<h3 style=\"margin: 20px 0px;\">工商年报基础信息</h3>
\t\t\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t\t<label style=\"\">社会信用代码：</label>
\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"social_credit_code\" value=\"\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t<label style=\"\">企业名称：</label>
\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"name\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t\t<label style=\"\">法人姓名：</label>
\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"corporation\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t<label style=\"\">法人身份证号：</label>
\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"corporation_card\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t</div>
\t\t\t\t<!--一般纳税人-->
\t\t\t\t<h3 style=\"margin: 20px 0px;\">纳税基础信息</h3>
\t\t\t\t<div id=\"yiban\">

\t\t\t\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t\t\t<label style=\"\">本期销售额：</label>
\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"total\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t<label style=\"\">销项税额：</label>
\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"xTax\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t\t\t<label style=\"\">进项税额：</label>
\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"jTax\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t<label style=\"\">上期末留底税额：</label>
\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"上期末留底税额\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t\t\t<label style=\"\">增值税应纳税额：</label>
\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"tTax\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t<label style=\"\">本期末留抵税额：</label>
\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" id=\"lTax\" value='888' field=\"lTax\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t\t\t<label style=\"\">本年累计税负：</label>
\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"yearTax\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t<label style=\"\">免抵退：</label>
\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"免抵退\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t\t\t<label style=\"\">进项税额转出：</label>
\t\t\t\t\t\t<input type=\"text\" disabled=\"true\" field=\"transfer_out\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t<label style=\"\">本年累计销售额：</label>
\t\t\t\t\t\t<input type=\"text\" disabled=\"true\" field=\"今年累计销售额\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--小规模-->
\t\t\t\t<div id=\"xiao\">
\t\t\t\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t\t\t<label style=\"\">本期销售额：</label>
\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"total\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t\t<label style=\"\">本年累计销售额：</label>
\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"今年累计销售额\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t\t\t<label style=\"width: 130px;\">增值税应纳税额合计  ：</label>
\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"tTax\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t\t\t<label style=\"width: 220px;\">近11个月累积应税服务销售额：</label>
\t\t\t\t\t\t<input disabled=\"true\" type=\"text\" syllable=\"11month,service\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t\t\t<label style=\"width: 220px;\">近11个月累积应税货物及劳务销售额：</label>
\t\t\t\t\t\t<input disabled=\"true\" id=\"\" type=\"text\" syllable=\"11month,goods\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<h3>地税款明细</h3>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 税款所属时间： </label>
\t\t\t\t\t<span field=\"local_time\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 企业所得税： </label>
\t\t\t\t\t<span field=\"local_corporate_tax\"></span>
\t\t\t\t\t<label> 城建税：</label>
\t\t\t\t\t<span field=\"construction_tax\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 教育费附加： </label>
\t\t\t\t\t<span field=\"tuition\"></span>
\t\t\t\t\t<label>地方教育附加： </label>
\t\t\t\t\t<span field=\"local_tuition\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 个人所得税：</label>
\t\t\t\t\t<span field=\"individual_tax\"></span>
\t\t\t\t\t<label> 印花税：</label>
\t\t\t\t\t<span field=\"printing\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 堤围费/水利基金：</label>
\t\t\t\t\t<span field=\"water_fund\"></span>
\t\t\t\t\t<label> 其他税费：</label>
\t\t\t\t\t<span field=\"local_other_tax\"></span>
\t\t\t\t</div>
\t\t\t\t<h3>国税税款明细</h3>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 税款所属时间：</label>
\t\t\t\t\t<span field=\"state_time\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 企业所得税：</label>
\t\t\t\t\t<span field=\"corporate_tax\"></span>
\t\t\t\t\t<label> 增值税：</label>
\t\t\t\t\t<span field=\"state_appreciation\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 文化事业建设费：</label>
\t\t\t\t\t<span field=\"culture\"></span>
\t\t\t\t\t<label> 消费税：</label>
\t\t\t\t\t<span field=\"excise_tax\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 其他税费：</label>
\t\t\t\t\t<span field=\"state_other_tax\"></span>
\t\t\t\t</div>
\t\t\t\t<h3>企业资产状况信息</h3>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 税款所属时间：</label>
\t\t\t\t\t<span field=\"business_time\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 资产总额（万元）：</label>
\t\t\t\t\t<span field=\"total_assets\"></span>
\t\t\t\t\t<label> 所有者权益合计：</label>
\t\t\t\t\t<span field=\"profit_total\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 营业总收入（万元）：</label>
\t\t\t\t\t<span field=\"operating_income\"></span>
\t\t\t\t\t<label> 营业中总收入（万元）：</label>
\t\t\t\t\t<span field=\"operating_income_total\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 利润总额（万元）：</label>
\t\t\t\t\t<span field=\"operating_profit\"></span>
\t\t\t\t\t<label> 负债总额：（万元）：</label>
\t\t\t\t\t<span field=\"labilities\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 净利润（万元）：</label>
\t\t\t\t\t<span field=\"net_profit\"></span>
\t\t\t\t\t<label> 纳税总额：（万元）：</label>
\t\t\t\t\t<span field=\"tax_total\"></span>
\t\t\t\t</div>
\t\t\t\t<h3 style=\"display: none\">国税税款明细</h3>
\t\t\t\t<div style=\"margin-top:15px;display: none\">
\t\t\t\t\t<label> 税款所属时间：</label>
\t\t\t\t\t<span field=\"state_time\"></span>
\t\t\t\t</div>
\t\t\t\t<!--<h3>税务年报信息1</h3>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 税款所属时间：</label>
\t\t\t\t\t<span field=\"taxation_time\"></span>
\t\t\t\t</div>-->
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 文件：</label>
\t\t\t\t\t<span field=\"files\"></span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div id=\"general-taxpayer\" style=\"display:none;\">
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 企业名称： </label>
\t\t\t\t\t<span style=\"width: 350px;\" field=\"name\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>本期销售额：</label>
\t\t\t\t\t<span syllable=\"thisMonth,total\" class=\"thisMonth\"></span>
\t\t\t\t\t<label>销项税额：</label>
\t\t\t\t\t<span syllable=\"thisMonth,xTax\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>进项税额： </label>
\t\t\t\t\t<span syllable=\"thisMonth,jTax\"></span>
\t\t\t\t\t<label> 上期末留底税额1：</label>
\t\t\t\t\t<span syllable=\"thisMonth,lTax\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 增值税应纳税额： </label>
\t\t\t\t\t<span syllable=\"thisMonth,tTax\"></span>
\t\t\t\t\t<label> 本期末留抵税额： </label>
\t\t\t\t\t<span syllable=\"thisMonth,lTax\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 本年累计税负： </label>
\t\t\t\t\t<span field=\"今年所有月份应纳税额总和\"></span>
\t\t\t\t\t<label> 免抵退：</label>
\t\t\t\t\t<span field=\"免抵退\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>企业所得税： </label>
\t\t\t\t\t<span field=\"corporate_tax\"></span>
\t\t\t\t\t<label> 印花税：</label>
\t\t\t\t\t<span field=\"printing\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 城建税：</label>
\t\t\t\t\t<span field=\"construction_tax\"></span>
\t\t\t\t\t<label> 教育费附加：</label>
\t\t\t\t\t<span field=\"tuition\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 地方教育费附加：</label>
\t\t\t\t\t<span field=\"local_tuition\"></span>
\t\t\t\t\t<label> 个税：</label>
\t\t\t\t\t<span field=\"individual_tax\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 文化事业建设费：</label>
\t\t\t\t\t<span field=\"culture\"></span>
\t\t\t\t\t<label> 消费税：</label>
\t\t\t\t\t<span field=\"excise_tax\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 堤围费/水利基金：</label>
\t\t\t\t\t<span field=\"water_fund\"></span>
\t\t\t\t\t<label> 国税其他税费：</label>
\t\t\t\t\t<span field=\"state_other_tax\"></span>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 地税其他税费：</label>
\t\t\t\t\t<span field=\"local_other_tax\"></span>
\t\t\t\t\t<label> 本年累计销售额：</label>
\t\t\t\t\t<span field=\"今年累计销售额\"></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div style=\"display:none ; height:850px;width:100% ;border:0px red solid\" id=\"iframe\">
\t\t<div style=\"height: 30px;border: 0px red solid\">
\t\t\t<a style=\"display: inline-block;float:left;\"><i id=\"fa-close\" class=\"fa fa-times-circle\"></i></a>
\t\t</div>
\t\t<iframe src=\"\" name=\"goals\" height=\"100%\" width=\"100%\" frameborder=0 scrolling=\"auto\"></iframe>
\t</div>

\t";
        // line 2018
        $this->loadTemplate("admin/mark.html", "admin/task/tax.html", 2018)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/task/tax.html", 2018)->display($context);
        // line 2019
        echo "
\t<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
\t<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
\t<script>
\t\tjQuery(function(\$) {

\t\t\tcs.getTaxMonth();
\t\t\tcs.getNodes([103, 289]);
\t\t\tvar submitStatuus = false;
\t\t\tvar thisData;
\t\t\tvar curPage = 1;
\t\t\tvar ctype = 2;
\t\t\tvar where = '';
\t\t\tvar order = \"\";
\t\t\tvar month2 = \"\";
\t\t\tvar employees = {};
\t\t\tvar filter = \"\";
\t\t\tvar get_local_time =[];
\t\t\tvar local_time = [];
\t\t\tvar param = {
\t\t\t\taid: ykp.getCookie('aid'),
\t\t\t\ttime: ykp.getCookie(\"time\"),
\t\t\t\tcid: ykp.getCookie(\"contract_id\"),
\t\t\t\ttimestamp: '',
\t\t\t\tflag: false
\t\t\t};
\t\t\tvar last_month = '';
\t\t\tvar squarter='';//上个季度开始
\t\t\tvar xquarter='';//上个季度结束
\t\t\tvar munths='';
\t\t\tvar taxs='';
\t\t\tvar data = {
\t\t\t\turl: \"/api/api_service/serviceExport\",
\t\t\t\ttype: '5',
\t\t\t\ttitle: '报税模板'
\t\t\t}
\t\t\tcs.jzexport(data, function(res) {
\t\t\t\tsetTimeout(function(){
\t\t\t\t\t\t\t\tykp.prompt(\"上传成功\");
\t\t\t\t\t\t\t},1000)
\t\t\t\tgetTaxList(1, ctype);
\t\t\t\t\$('.label_popup').hide();
\t\t\t});

\t\t\t\$('#filterBtns a').mouseover(function() {
\t\t\t\t\$(this).addClass('over');
\t\t\t})
\t\t\t\$('#filterBtns a').mouseout(function() {
\t\t\t\t\$(this).removeClass('over');
\t\t\t})
\t\t\t//条件过滤器
\t\t\t\$('.myFilter').click(function() {
\t\t\t\tif(!\$(this).hasClass('clc')) {
\t\t\t\t\t\$(this).addClass('clc').siblings().removeClass('clc');
\t\t\t\t}
\t\t\t\tvar user = JSON.parse(ykp.getCookie('userinfo'));
\t\t\t\t// \$('.kind').find('li').eq(0).hasClass('now')
\t\t\t\tvar type = \$('.kind').find('li').eq(0).hasClass('now') ? 2 : 1;

\t\t\t\tvar data = {
\t\t\t\t\t\"type\": 5,
\t\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\t'page': 1,
\t\t\t\t\t'where': 'khm_customer.tax_type = ' + type,
\t\t\t\t\t'index': type
\t\t\t\t};
\t\t\t\tvar filter_ = \$(this).attr('data-kind');
\t\t\t\tif(filter_ == '0') {
\t\t\t\t\tgetTaxList(1, type);
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\t//我负责的
\t\t\t\tif(filter_ == '1') {
\t\t\t\t\tdata['staff_name'] = user.name;
\t\t\t\t}
\t\t\t\t//我关注的
\t\t\t\tif(filter_ == '2') {
\t\t\t\t\tdata['relation'] = 'helloworld';
\t\t\t\t}
\t\t\t\t//我的下属
\t\t\t\tif(filter_ == '3') {
\t\t\t\t\tdata.up_user = user.id;
\t\t\t\t}
\t\t\t\tfilter = data['where'];
\t\t\t\tgetTaxList_4(data);
\t\t\t});

\t\t\tcs.setFuze({
\t\t\t\tcheck: true,
\t\t\t\tconId: [\"#dataList\", \"#dataList1\"],
\t\t\t\ttype: \"5\",
\t\t\t\turl: \"/api/api_service/transfer_user\",
\t\t\t\tfun: function(ftype) {
\t\t\t\t\t//console.log(ftype);
\t\t\t\t\tgetTaxList(1, ftype);
\t\t\t\t}
\t\t\t});
\t\t\t//通用排序
\t\t\tcs.general_sort({
\t\t\t\turl: '/api/api_service/get_tax_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tfilter: where,
\t\t\t\t\tlimit: pagesize,
\t\t\t\t\ttype: 4
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tcheck: true,
\t\t\t\tdefaultOrder: order,
\t\t\t\tinitOrder: 'khm_customer.id',
\t\t\t\tcontentId: ctype == 2 ? \"#dataList\" : \"#dataList1\",
\t\t\t\tparams: [{
\t\t\t\t\tid: ctype == 2 ? \"#dynamic-table1\" : \"#dynamic-table2\",
\t\t\t\t\tfield: [\"\",\"khm_customer.name\",\"\", \"khm_customer.ratepaying_no\", \"\", \"\",\"\", 
\t\t\t\t\t\t\"jzm_service_info.time\", \"\", \"jzm_service_info.fuze_id\"
\t\t\t\t\t]
\t\t\t\t}]  
\t\t\t}, function(res, _sort_role) {
\t\t\t\tsort_role = _sort_role;
//\t\t\t\tvar ctype = 2,dataList,dataList,dataTable
//\t\t\t\tsort_role = _sort_role;
//\t\t\t\tdataList = ctype == 2 ? '#dataList' : '#dataList1';
//\t\t\t\tdataTable = ctype == 2 ? '#dynamic-table1' : '#dynamic-table2';
//\t\t\t\taddList(res, ctype, dataList, pagination, dataTable);
                  var type,dataList,dataList,dataTable
\t\t\t\t\tsort_role = _sort_role;
\t\t\t\t\tdataList = ctype == 2 ? '#dataList' : '#dataList1';
\t\t\t\t\tdataTable = ctype == 2 ? '#dynamic-table1' : '#dynamic-table2';
\t\t\t\t\t//console.log(ctype,dataList, pagination, dataTable);
\t\t\t\t\taddList(res, ctype, dataList, pagination, dataTable);
     //          addList(res, ctype);
\t\t\t});

\t\t\ttSearch();

\t\t\tfunction tSearch() {
\t\t\t\t\$('.tsearch').click(function() {
\t\t\t\t\tvar month = \$('#tmonth').val();
\t\t\t\t\tvar data = {
\t\t\t\t\t\turl: \"\",
\t\t\t\t\t\tmethods: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tmonth: month
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tcs.doAjax(data, function(res) {
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\t\$('.chart' + (i + 1) + ' .easy-pie-chart').attr('data-percent', data[i].percent);
\t\t\t\t\t\t\t\$('.chart' + (i + 1) + ' .percent2').text(data[i].num + '%');
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t})
\t\t\t}

\t\t\tvar pagesize = 10;

\t\t\t cs.custorm_check('#dynamic-table1', '#dataList', true);
\t\t\t//显示一般纳税热 或 小规模
\t\t\t\$('.kind').on('click', 'li', function() {
\t\t\t\tif(\$(this).hasClass('now')) {
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\t\$(this).addClass('now').siblings().removeClass('now');
\t\t\t\tif(\$(this).hasClass('generaltaxpayer')) {
\t\t\t\t\tctype = 2;
\t\t\t\t\t\$('._details').hide();
\t\t\t\t\t\$('._details').eq(0).show();
\t\t\t\t}
\t\t\t\tif(\$(this).hasClass('small-scale')) {
\t\t\t\t\tctype = 1;
\t\t\t\t\t\$('._details').hide();
\t\t\t\t\t\$('._details').eq(1).show();
\t\t\t\t\tif(\$('._details').eq(1).find('.custom').length > 0) {
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\t cs.custorm_check('#dynamic-table2', '#dataList1', true);
\t\t\t\t}
\t\t\t\t//通用排序
\t\t\t\tcs.general_sort({
\t\t\t\t\turl: '/api/api_service/get_tax_list',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter: where,
\t\t\t\t\t\tlimit: pagesize,
\t\t\t\t\t\ttype: 5
\t\t\t\t\t},
\t\t\t\t\tpageBar: {
\t\t\t\t\t\tid: '#pageBar'
\t\t\t\t\t},
\t\t\t\t\tcheck: true,
\t\t\t\t\tdefaultOrder: order,
\t\t\t\t\tinitOrder: 'khm_customer.id',
\t\t\t\t\tcontentId: ctype == 2 ? \"#dataList\" : \"#dataList1\",
\t\t\t\t\tparams: [{
\t\t\t\t\t\tid: ctype == 2 ? \"#dynamic-table1\" : \"#dynamic-table2\",
\t\t\t\t\t\tfield: [\"\",\"khm_customer.name\", \"\", \"khm_customer.ratepaying_no\", \"\", \"\", \"\",
\t\t\t\t\t\t\t\"jzm_service_info.time\", \"\", \"jzm_service_info.fuze_id\"
\t\t\t\t\t\t]
\t\t\t\t\t}]
\t\t\t\t}, function(res, _sort_role) {
\t\t\t\t\tvar type,dataList,dataList,dataTable
\t\t\t\t\tsort_role = _sort_role;
\t\t\t\t\tdataList = ctype == 2 ? '#dataList' : '#dataList1';
\t\t\t\t\tdataTable = ctype == 2 ? '#dynamic-table1' : '#dynamic-table2';
\t\t\t\t\t//console.log(ctype,dataList, pagination, dataTable);
\t\t\t\t\taddList(res, ctype, dataList, pagination, dataTable);
\t\t\t\t});
\t\t\t});

\t\t\tgetInfo();

\t\t\tfunction getInfo() {
\t\t\t\t//table选项卡切换
\t\t\t\tchangeTable();
\t\t\t\t//跳转页面接收
\t\t\t\t//从首页过来
\t\t\t\tif(param.time != \"\" && param.time != undefined) {
\t\t\t\t\tvar today = new Date().setHours(0, 0, 0, 0) / 1000; //今天零点的时间戳
\t\t\t\t\tvar day_1 = cs.getNowTime(Date.parse(new Date()) / 1000).substr(-2) - 1; //距离本月1号有多少天
\t\t\t\t\tvar lastmonthday_1 = cs.getNowTime(Date.parse(new Date()) / 1000);
\t\t\t\t\tvar newday = lastmonthday_1.substring(0, 4) + '-' + (lastmonthday_1.substring(5, 7) - 1) + '-01';
\t\t\t\t\tif(lastmonthday_1.substring(5, 7) == 1) {
\t\t\t\t\t\tnewday = (lastmonthday_1.substring(0, 4) - 1) + '-12-01';
\t\t\t\t\t}
\t\t\t\t\tvar newdaytime = Date.parse(new Date(newday)) / 1000; //上个月1号的时间戳
\t\t\t\t\tswitch(param.time) {
\t\t\t\t\t\tcase '1':
\t\t\t\t\t\t\tparam.timestamp = `jzm_service_info.com_time>\${today}`;
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tcase '2':
\t\t\t\t\t\t\tparam.timestamp = `jzm_service_info.com_time<\${today} and jzm_service_info.com_time>\${today-86400}`
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tcase '3':
\t\t\t\t\t\t\tparam.timestamp = `jzm_service_info.com_time>\${today-86400*6}`;
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tcase '4':
\t\t\t\t\t\t\tparam.timestamp = `jzm_service_info.com_time>\${today-86400*29}`;
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tcase '5':
\t\t\t\t\t\t\tparam.timestamp = `jzm_service_info.com_time>\${today-86400*day_1}`;
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tcase '6':
\t\t\t\t\t\t\tparam.timestamp = `jzm_service_info.com_time<\${today-86400*day_1} and  jzm_service_info.com_time>\${newdaytime}`;
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t}

\t\t\t\t\tvar data = {
\t\t\t\t\t\t\"type\": 5,
\t\t\t\t\t\t\"page\": curPage,
\t\t\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\t\t\"where\": `\${param.timestamp}`
\t\t\t\t\t}
\t\t\t\t\tif(param.aid != '' && param.aid != undefined) {
\t\t\t\t\t\tdata['staff_name'] = param.aid;
\t\t\t\t\t\tparam.flag = true;
\t\t\t\t\t}
\t\t\t\t\tgetTaxList_3(data);
\t\t\t\t\tykp.setCookie(\"aid\", \"\", (1 / 24));
\t\t\t\t\tykp.setCookie(\"time\", \"\", (1 / 24));
\t\t\t\t\t//从送单页面过来
\t\t\t\t} else if(param.cid != \"\" && param.cid != undefined) {
\t\t\t\t\tvar data = {
\t\t\t\t\t\t\"type\": 5,
\t\t\t\t\t\t\"page\": 1,
\t\t\t\t\t\t\"page_size\": 10,
\t\t\t\t\t\t\"where\": \"khm_customer.id=\" + param.cid
\t\t\t\t\t}
\t\t\t\t\tgetTaxList_4(data);
\t\t\t\t\tykp.setCookie(\"contract_id\", \"\", (1 / 24));
\t\t\t\t} else if(ykp.getCookie('detailsId') && ykp.getCookie('detailsId').trim() != '') {
\t\t\t\t\tvar id = ykp.getCookie('detailsId');
\t\t\t\t\tvar data = {
\t\t\t\t\t\t\"type\": 5,
\t\t\t\t\t\t\"page\": 1,
\t\t\t\t\t\t\"page_size\": 10,
\t\t\t\t\t\t\"where\": \"htm_contract.id=\" + id
\t\t\t\t\t}
\t\t\t\t\tgetTaxList_4(data);
\t\t\t\t\tykp.setCookie(\"detailsId\", \"\", (1 / 24));
\t\t\t\t} else {
\t\t\t\t\t//获取列表数据
\t\t\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\t\t\tykp.setCookie(\"where\", \"\");
\t\t\t\t\tgetTaxList(1, ctype);
\t\t\t\t}
\t\t\t}

\t\t\t/*\$('#flush').click(function(){
\t\t\t\t\t
\t\t\t\tgetTaxList();
\t\t\t})*/

\t\t\t\$('.flush').click(function() {
\t\t\t\tvar type = \$('.kind').find('.now').index();
\t\t\t\ttype = type == 0 ? 2 : 1;
\t\t\t\tykp.setCookie('where','');
\t\t\t\tmonth2 = \"\";
\t\t\t\t\$('[sear=\"customer_name\"]').val('');
\t\t\t\t\$('[sear=\"jzm_service_info.fuze_id\"]').val('').trigger('change');
\t\t\t\tgetTaxList(1, type);
\t\t\t})

\t\t\t//获取所有员工
\t\t\tykp.doAjax({
\t\t\t\tasync: false,
\t\t\t\turl: '/api/api_employees/f7',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tselect: 'bmm_employees.id,bmm_employees.name'
\t\t\t\t},

\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\t//\$('.advandced-search').append('<option value=\"\">请选择</option>');
\t\t\t\t\t\$('.advandced-search').select2({
\t\t\t\t\t\tallowClear: true
\t\t\t\t\t});

\t\t\t\t\tfor(var i in data) {
                        if(data[i]['name']) {
                            employees[data[i]['id']] = data[i]['name'];
                            \$('.advandced-search').append(new Option(data[i]['name'], data[i]['name']));
                        }
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\tfunction getTaxList_4(data) {
\t\t\t\tykp.list({
\t\t\t\t\turl: '/api/api_service/get_tax_list',
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tdata: data,
\t\t\t\t\tpageBar: {
\t\t\t\t\t\tid: '#pageBar'
\t\t\t\t\t},
\t\t\t\t\tloadList: function(res) {
\t\t\t\t\t\tvar dataList, pagination, dataTable, type;
\t\t\t\t\t\tvar datas = res.data.items;
\t\t\t\t\t\tdataList = data['index'] == 2 ? '#dataList' : '#dataList1';
\t\t\t\t\t\tif(datas == '' || res.data == \"\") {
\t\t\t\t\t\t\tif(!data['index'] ) {
\t\t\t\t\t\t\t\tdataList = '#dataList';
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\t\$(dataList).html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\ttype = datas[0]['khm_customer.tax_type'];
\t\t\t\t\t\tdataList = type == 2 ? '#dataList' : '#dataList1';
\t\t\t\t\t\tdataTable = type == 2 ? '#dynamic-table1' : '#dynamic-table2';
\t\t\t\t\t\tif(type == 1) {
\t\t\t\t\t\t\t\$(\"._details\").eq(1).show();
\t\t\t\t\t\t\t\$(\"._details\").eq(0).hide();
\t\t\t\t\t\t\t\$(\".small-scale\").addClass(\"now\");
\t\t\t\t\t\t\t\$(\".generaltaxpayer\").removeClass(\"now\");
\t\t\t\t\t\t}
\t\t\t\t\t\taddList(res, type, dataList, pagination, dataTable);
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}

\t\t\t//先拿到所有数据
\t\t\tfunction getTaxList_3(data) {
\t\t\t\tykp.list({
\t\t\t\t\turl: '/api/api_service/get_tax_list',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: data,
\t\t\t\t\tpageBar: {
\t\t\t\t\t\tid: '#pageBar'
\t\t\t\t\t},
\t\t\t\t\tloadList: function(res) {
\t\t\t\t\t\tvar resdata = res.data.items;
\t\t\t\t\t\tvar num = 0;
\t\t\t\t\t\t//判断是否有数据
\t\t\t\t\t\tif(resdata == '') {
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\t//判断是否有一般纳税人
\t\t\t\t\t\tfor(var i in resdata) {
\t\t\t\t\t\t    if(resdata[i].list){
                                if(resdata[i].list[0]['khm_customer.tax_type'] == 1) {
                                    num++;
                                }
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t//判断是否有小规模
\t\t\t\t\t\tif(num < resdata.length) {
\t\t\t\t\t\t\tif(num > 0) {
\t\t\t\t\t\t\t\t\$(\"#tspage\").show();
\t\t\t\t\t\t\t\ttzpage();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(param.flag) {
\t\t\t\t\t\t\t\tgetTaxList_2(1, 2, '', param.timestamp);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tgetTaxList_2(1, 2, param.aid, param.timestamp);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tif(param.flag) {
\t\t\t\t\t\t\t\tgetTaxList_2(1, 1, '', param.timestamp);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tgetTaxList_2(1, 1, param.aid, param.timestamp);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t}
\t\t\t\t});
\t\t\t}

\t\t\t//跳转页面的数据加载
\t\t\tfunction getTaxList_2(curPage, type, aid, timestamp) {
\t\t\t\tvar dataList, pagination, dataTable;

\t\t\t\tvar data = {
\t\t\t\t\t\"type\": 5,
\t\t\t\t\t\"page\": curPage,
\t\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\t\"where\": `khm_customer.tax_type=\${type} and \${param.timestamp}`
\t\t\t\t}

\t\t\t\tif(aid != '' && aid != undefined) {
\t\t\t\t\tdata['staff_name'] = aid;
\t\t\t\t}
\t\t\t\tif(!isNaN(type)) {
\t\t\t\t\tdataList = type == 2 ? '#dataList' : '#dataList1';
\t\t\t\t\tdataTable = type == 2 ? '#dynamic-table1' : '#dynamic-table2'
\t\t\t\t}
\t\t\t\tykp.list({
\t\t\t\t\turl: '/api/api_service/get_tax_list',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: data,
\t\t\t\t\tpageBar: {
\t\t\t\t\t\tid: '#pageBar'
\t\t\t\t\t},
\t\t\t\t\tloadList: function(res) {
\t\t\t\t\t\taddList(res, type, dataList, pagination, dataTable);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}

\t\t\t//跳转页面查询后仍需跳转一般纳税人时
\t\t\tfunction tzpage() {
\t\t\t\t\$(\".close_ts\").click(function() {
\t\t\t\t\t\$(\"#tspage\").css(\"display\", \"none\");
\t\t\t\t})

\t\t\t\t\$(\"#go_\").click(function() {
\t\t\t\t\t\$(\"#tspage\").css(\"display\", \"none\");
\t\t\t\t\tif(param.flag) {
\t\t\t\t\t\tgetTaxList_2(1, 1, '', param.timestamp);
\t\t\t\t\t} else {
\t\t\t\t\t\tgetTaxList_2(1, 1, param.aid, param.timestamp);
\t\t\t\t\t}
\t\t\t\t\tgetTaxList_2(1, 1, param.aid, param.timestamp);
\t\t\t\t\t\$(\"._details\").eq(1).show();
\t\t\t\t\t\$(\"._details\").eq(0).hide();
\t\t\t\t\t\$(\".small-scale\").addClass(\"now\");
\t\t\t\t\t\$(\".generaltaxpayer\").removeClass(\"now\");
\t\t\t\t})
\t\t\t}

\t\t\t\$('#changePageNum').change(function() {
\t\t\t\tpagesize = \$(this).val();
\t\t\t\tykp.setCookie('page_size',pagesize);
\t\t\t\t\$('.ui-pagination-container').remove()
\t\t\t\tgetTaxList(1, 2);
\t\t\t})

\t\t\tfunction getTaxList(curPage, type) {
\t\t\t\t\$(\"#tspage\").css(\"display\", \"none\");
\t\t\t\tvar data = {
\t\t\t\t\t\"type\": 5,
\t\t\t\t\t\"page\": curPage,
\t\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\t\"where\": filter
\t\t\t\t}
\t\t\t\tif(month2) {
\t\t\t\t\tdata.month2 = month2;
\t\t\t\t}
\t\t\t\tvar dataList, pagination, dataTable;
\t\t\t\tif(!isNaN(type)) {
\t\t\t\t\tdata.where = type == 2 ? \"khm_customer.tax_type=2\" : \"khm_customer.tax_type=1\";
\t\t\t\t\tdataList = type == 2 ? '#dataList' : '#dataList1';
\t\t\t\t\tdataTable = type == 2 ? '#dynamic-table1' : '#dynamic-table2'
\t\t\t\t}
\t\t\t\tcs.getChart(1, 1, data);
\t\t\t\t///api/api_service/get_tax_list    /api/api_service/service_list
\t\t\t\tykp.list({
\t\t\t\t\turl: '/api/api_service/get_tax_list',
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tdata: data,
\t\t\t\t\tpageBar: {
\t\t\t\t\t\tid: '#pageBar'
\t\t\t\t\t},
\t\t\t\t\tloadList: function(res) {
\t\t\t\t\t\tif(res.data.items == '') {
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\t\$(dataList).html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\taddList(res, type, dataList, pagination, dataTable);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}

\t\t\tfunction changeTable() {
\t\t\t\t\$('.kind li').click(function() {
\t\t\t\t\tvar index = \$(this).index();
\t\t\t\t\tvar type = index == 0 ? 2 : 1
\t\t\t\t\tvar htmlStatus = true;
\t\t\t\t\tykp.setCookie('where','');
\t\t\t\t\t\$('[sear=\"customer_name\"]').val('');
\t\t\t\t\tmonth2 = \"\";
\t\t\t\t\t\$('[sear=\"jzm_service_info.fuze_id\"]').val('').trigger('change');
\t\t\t\t\tcs.setFuze({
\t\t\t\t\t\tcheck: true,
\t\t\t\t\t\tconId: [\"#dataList\", \"#dataList1\"],
\t\t\t\t\t\ttype: \"5\",
\t\t\t\t\t\turl: \"/api/api_service/transfer_user\",
\t\t\t\t\t\tfun: function(ftype) {
\t\t\t\t\t\t\tgetTaxList(1, ftype);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tgetTaxList(1, type);
\t\t\t\t})
\t\t\t}

\t\t\tfunction addList(res, type, dataList, pagination, dataTable) {
\t\t\t\tvar data = res.data.items;
\t\t\t\t
                var timeData = res.data.time
                squarter=timeData['上个季度']['start'];
                xquarter=timeData['上个季度']['end'];
               munths= timeData['上个月']
               taxs= data[0]?data[0]['jzm_service_info.time'].substring(4,6):'';
\t\t\t\t//申报所属期
                var time = {};
                time = \"\";
                var shenbstat ={
                    '地税':0,
                    '国税':0,
                    '工商':0,
\t\t\t\t}
                if(timeData) {
                    if(timeData['上个月']) {
                    \tlast_month = timeData['上个月'];
                        time += (\"<span>地税：\" + timeData['上个月'] + \"; </span>\");
                        shenbstat[\"地税\"]=1;
                    }
                    if(timeData['上个季度']) {
     
//                      time += (\"<span>国税：\" + (type==2 ? timeData['上个季度']['start'] + '至' + timeData['上个季度']['end'] : timeData['上个月'])) + \"; </span>\";
                       
   //                    \t time += (\"<span>国税：\" + (type==2 ? timeData['上个季度']['start'] + '至' + timeData['上个季度']['end'] : timeData['上个月'])) + \"; </span>\";
                       \t if(type==2){
                       \t \tif(taxs=='03'||taxs=='06'||taxs=='09'|taxs=='12'){
                       \t time += (\"<span>国税：\" + (type==2 ? timeData['上个季度']['start'] + '至' + timeData['上个季度']['end'] : timeData['上个月'])) + \"; </span>\";
                                shenbstat[\"国税\"]=1;
                            }
                       \t \t
                       \t }else if(type==1){
                       \t \t time += (\"<span>国税：\" + (type==2 ? timeData['上个季度']['start'] + '至' + timeData['上个季度']['end'] : timeData['上个月'])) + \"; </span>\";
                             shenbstat[\"国税\"]=1;
                       \t }
                    
                     //    time += (\"<span>国税：\" + (type==2 ? timeData['上个季度']['start'] + '至' + timeData['上个季度']['end'] : timeData['上个月'])) + \"; </span>\";
                    }
                    if(timeData['上一年']) {
                    \tif(taxs=='01'||taxs=='02'||taxs=='03'||taxs=='04'||taxs=='05'||taxs=='12'){
                    \t\tyears = timeData['上一年'];
                        time += (\"<span>工商：\" + timeData['上一年'] )+ \"</span>; \";
                            shenbstat[\"工商\"]=1;
                    \t}
                    \t
                    }
//                  if(timeData['上一年']) {
//                      time += (\"<span>税务：\" + timeData['上一年'])+ \"</span>; \";
//                  }
                }


                var _type = type;
                ///console.log(data);
                //console.log(_type,\"aaa\")
\t\t\t\t//console.log(\"1-(\" + _type + \")\")

\t\t\t\t//税费数据
\t\t\t\t//taxData();
\t\t\t\tthisData = data;
\t\t\t\tvar html = '';
\t\t\t\tvar Class = '';
\t\t\t\tvar index = ['', 'fa  fa-circle-o', 'glyphicon glyphicon-ok', 'glyphicon glyphicon-remove'];
\t\t\t\tvar timeArr = new Array(12);
\t\t\t\tvar obj = {};
\t\t\t\tvar cycle = [];
\t\t\t\tvar ths = \$(dataTable + ' .thColor th');
\t\t\t\tvar styles = [];
\t\t\t\tvar s_total=0;
\t\t\t\tfor(i = 0; i < ths.length; i++) {
\t\t\t\t\tstyles.push(ths.eq(i).css('display'));
\t\t\t\t}
                ykp.setCookie('page_no', res.data.curPage, (1 / 24));

\t\t\t\t//负责人id
\t\t\t\tvar fuze_ids = [];
\t\t\t\t//负责人名字
\t\t\t\tvar fuze = [];
\t\t\t\tvar _data = {}; //报税数据
\t\t\t\tvar heightBox = dataList == \"#dataList\" ? \"#heightsearch1\" : \"#height_search1\";
\t\t\t\tvar month = \$(heightBox).find('.month').val(); //当前搜索的月份
\t\t\t\tfor(var i in data) {
\t\t\t\t\tvar newMark = 'inline-block';
\t\t\t\t\t_data[i] = data[i]['customer_details'];
\t\t\t\t\tif(data[i]['jzm_service_info.status'] != 0) {
\t\t\t\t\t\tnewMark = 'none';
\t\t\t\t\t}

\t\t\t\t\t//负责人id不存在 则将负责人id加入fuze_ids中
\t\t\t\t\tif(\$.inArray(data[i]['jzm_service_info.fuze_id'], fuze_ids) == -1) {
\t\t\t\t\t\tfuze_ids.push(data[i]['jzm_service_info.fuze_id']);
\t\t\t\t\t}

\t\t\t\t\t//根据负责人id 获取负责人姓名并存入fuze中
\t\t\t\t\tfor(var j in fuze_ids) {
\t\t\t\t\t\tfuze.push(employees[fuze_ids[j]]);
\t\t\t\t\t}
                    cycle.push(cs.getNowTime(data[i]['htm_contract.start_time']) + '~' + cs.getNowTime(data[i]['htm_contract.end_time']));
\t\t\t\t\thtml += `<tr data-id=\"\${data[i][\"jzm_service_info.id\"]}\" get_money=\"\${data[i][\"htm_contract.get_money\"]}\" status=\"\${data[i][\"htm_contract.status\"]}\" cid=\"\${data[i][\"jzm_service_info.customer_id\"]} \"  customer_id=\"\${data[i][\"jzm_service_info.customer_id\"]} \" data-name=\"\${data[i]['khm_customer.name']}\" data-time=\"\${data[i]['jzm_service_info.time']}\" fz-id=\"\${data[i]['jzm_service_info.fuze_id']}\">
\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t                        <label class=\"pos-rel\">
\t\t\t\t\t                        <input type=\"checkbox\" name=\"check\" class=\"ace\"/>
\t\t\t\t\t                        <span class=\"lbl\"></span>
\t\t\t\t\t                        </label>
\t\t\t\t\t                    </td>
\t\t\t\t\t\t\t\t\t<td data-num=\"1\" style=\"display: \${styles[1]}\" data-cid=\"\${data[i]['khm_customer.id']}\">
\t\t\t\t\t\t\t\t\t\t<div style=\"display:\${data[i]['tax_password']['is_red'] == '0' ? 'none' : 'inline-block'};height:14px;width:17px\">
\t\t\t\t\t\t\t\t \t\t\t<span class=\"spanTip\" style=\"\"><span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"customerDetail pos-rel\">\${data[i]['khm_customer.name']}</a>
\t\t\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t\t\t\t\t<i relation=\${data[i]['is_relotion']} class=\"sc fa \${data[i]['is_relotion'] == 0 ? 'fa-heart-o' : 'fa-heart'}\" style=\"color:\${data[i]['is_relotion'] ==1 ? 'red' : ''}\"></i>
\t\t\t\t\t\t\t\t \t\t\t\t<i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data[i]['Remark'].length > 0 ? 'red' : ''}\"  data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i>
\t\t\t\t\t\t\t \t\t\t\t </label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"center\" style=\"display:\${styles[2]};\" data-num=\"2\">
\t\t\t\t\t\t\t\t\t\t\${ data[i]['maxLv']}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"operation iframePage\" data-num=\"3\" style=\"font-weight:normal;display: \${styles[3]}\">
\t\t\t\t\t\t\t\t\t\t<label class=\"pos-rel\" id=\"pos-rel\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\"  style=\"margin-right:10px\">
\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight:normal\" class=\"accont1\">\${data[i]['tax_password']['ratepaying_no']}</span>
\t\t\t\t\t\t\t\t\t\t\t<input style=\"width:41px;height:18px;opacity: 0;\"value=\"\${data[i]['tax_password']['ratepaying_no']}\"/>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"operation iframePage\" data-num=\"12\" style=\"font-weight:normal;display: \${styles[4]}\">
\t\t\t\t\t\t\t\t\t\t<label class=\"pos-rel\" id=\"pos-rel\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\"  style=\"margin-right:10px\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"accont1\">******</span> <input class=\"pwd\" style=\"width:41px;height:18px;opacity: 0;\" value=\"\${data[i]['tax_password']['state_tax_pass']}\"/>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"operation iframePage\" data-num=\"5\" style=\"font-weight:normal;display: \${styles[5]}\">
\t\t\t\t\t\t\t\t\t<label class=\"pos-rel\" id=\"pos-rel\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\"  style=\"margin-right:10px\">
\t\t\t\t\t\t\t\t\t\t<span class=\"accont1\">******</span> <input class=\"pwd\" style=\"width:41px;height:18px;opacity: 0;\" value=\"\${data[i]['tax_password']['local_tax_pass']}\"/></a>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td data-num=\"6\" style=\"display: \${styles[6]}\"  tax_type=\"\${data[i]['khm_customer.tax_type']}\"><a href=\"javascript:;\" style=\"text-decoration:none;\" class=\"collect pos-rel\">查看</a></td>
\t\t\t\t\t\t\t\t\t<td  data-num=\"7\" style=\"display: \${styles[7]}\">\${data[i]['jzm_service_info.time']}</td>

\t\t\t\t\t\t\t\t\t<td data-num=\"8\" style=\"display: \${styles[8]}\">\${ time ? time : \"\"}</td>

\t\t\t\t\t\t\t\t\t<td data-num=\"9\" style=\"display: \${styles[9]}\">\${fuze.join(',')}</td>
\t\t\t\t\t\t\t\t\t<td data-num=\"10\" class=\"_tax\" style=\"display: \${styles[10]}\" Title1=\"is_state_tax\">
\t\t\t\t\t\t\t\t\t\t<label class=\"pos-rel btns\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"   data-type=\"3\"  data-val=\" \${data[i]['taxInfo']['is_local_tax']}\"  \${data[i]['taxInfo']['is_local_tax'] == 1 ? \"checked\" : \"\"} class=\"ace check_opt\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\" style=\"margin-right:10px; display:\${shenbstat[\"地税\"] ? 'inline-block' : 'none'}\">地税</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<label class=\"pos-rel btns\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"  data-type=\"2\"  data-val=\" \${data[i]['taxInfo']['is_state_tax']}\" \${data[i]['taxInfo']['is_state_tax'] == 1 ? \"checked\" : \"\"}  class=\"ace check_opt\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\" style=\"margin-right:10px; display:\${shenbstat[\"国税\"] ? 'inline-block' : 'none'}\">国税</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<label class=\"pos-rel btns\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"   data-type=\"4\"   data-val=\" \${data[i]['taxInfo']['is_business_tax']}\"    \${data[i]['taxInfo']['is_business_tax'] == 1 ? \"checked\" : \"\"} 
\t\t\t\t\t\t\t\t\t\t\tclass=\"ace check_opt\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\" style=\"margin-right:10px; display:\${shenbstat[\"工商\"] ? 'inline-block' : 'none'}\">工商</span>
\t\t\t\t\t\t\t\t\t\t</label>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label class=\"pos-rel btns\" id=\"is_tax\" is_tax = \"\${data[i]['htm_contract.is_tax']}\" style=\"display: \${dataList == '#dataList' ? 'none' : 'inline-block'}\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" data-type=\"1\"  data-val=\" \${data[i]['taxInfo']['is_invoice']}\"    \${data[i]['taxInfo']['is_invoice'] == 1 ? \"checked\" : \"\"}
\t\t\t\t\t\t\t\t\t\t\tclass=\"ace check_opt\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\">发票</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td data-num=\"11\" style=\"display:\${styles[11]}\" data-status=\"\${data[i][\"jzm_service_info.status\"]}\">
\t\t\t\t\t\t\t\t\t\t<div style=\"text-align: center\" class=\"hidden-sm hidden-xs action-buttons edit\" contentAuthority=\"104\" tax_type=\"\${type}\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"green pos-rel\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\" pos-rel btBlue \" title=\"填写\"><i class=\"ace-icon fa fa-pencil\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>`;
                    //重置数据  以便下次循环
\t\t\t\t\tfuze_ids = [];
\t\t\t\t\tfuze = [];
\t\t\t\t};

\t\t\t\t//如果是小规模，就去掉发票认证
\t\t\t\t\$(dataList).html(html);

\t\t\t\tcs.sc('报税', function(res) {
\t\t\t\t\tvar index = \$('.kind').find('.now').index();
\t\t\t\t\tif(index == 0) {
\t\t\t\t\t\tftype = 2;
\t\t\t\t\t\tgetTaxList(1, ftype);
\t\t\t\t\t} else {
\t\t\t\t\t\tif(\$('#member-tab').find('#custom').length <= 0) {
\t\t\t\t\t\t\tcs.custorm_check('#dynamic-table2', 'tbody', false);
\t\t\t\t\t\t}
\t\t\t\t\t\tftype = 1;
\t\t\t\t\t\tgetTaxList(1, ftype);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t

\t\t\t\t//发票采集详情
\t\t\t\tlayui.use('element', function() {

\t\t\t\t\tvar element = layui.element;
\t\t\t\t\tinvoice_detail(_data, element);
\t\t\t\t});

\t\t\t\tfunction invoice_detail(data, element) {

                    \$('.collect').click(function() {
                        var index = \$(this).parents('tr').index();
\t\t\t\t\t\tvar tax_type = \$(this).parent().attr('tax_type');
\t\t\t\t\t\tvar service_id = \$(this).attr('service-id');

\t\t\t\t\t\tshowMark('#invoice_collect');
\t\t\t\t\t\telement.init('collapse');
\t\t\t\t\t\t\$('#showBox .title').text('发票采集详情');
                        console.log(\$('#showBox .title'));
\t\t\t\t\t\tif(tax_type == 1) {
\t\t\t\t\t\t\t\$('#templateCon .jxcj').show();
\t\t\t\t\t\t}

\t\t\t\t\t\t//获取发票采集数据
\t\t\t\t\t\tgetInvoiceCollectData(data[index], element);
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\t//获取发票采集数据
\t\t\t\tfunction getInvoiceCollectData(data, element) {
\t\t\t\t\t//console.log(data);
\t\t\t//\t\tvar type = ['注册公司', '变更公司', '股权变更', '注册商标', '注销公司', '申请一般纳税人', '记账报税']; //业务类型
\t\t\t\t\tvar tax_way = ['','一般计税', '简单征收', '免税', '免抵退']; //计税方式
\t\t\t\t\tvar tax_item = ['','应税货物', '应税劳务', '应税服务不动产']; //征税项目
                   var type = ['','无票视同销售','增值税专用发票','增值税普通发票'];//业务类型
\t\t\t\t\tvar _ztype;
\t\t\t\t\tvar model;
\t\t\t\t\tvar _model;
\t\t\t\t\tvar html;

\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tif(!data[i]['ztype'] || data[i]['ztype'] === '0') {
\t\t\t\t\t\t\tcontinue;
\t\t\t\t\t\t}
\t\t\t\t\t\t_ztype = data[i]['ztype'];
\t\t\t\t\t\tmodel = \$('#templateCon #' + _ztype).find('.model').html();;
\t\t\t\t\t\t_model = \$(model);
\t\t\t\t\t\thtml = \$('<tr></tr>');
\t\t\t\t\t\tif(!\$('#templateCon #' + _ztype).parents('.layui-colla-content').hasClass('layui-show')) {
\t\t\t\t\t\t\t\$('#templateCon #' + _ztype).parents('.layui-colla-content').addClass('layui-show');
\t\t\t\t\t\t}

\t\t\t\t\t\t_model.eq(0).text(\$('#templateCon #' + _ztype).find('tr').length);
\t\t\t\t\t\t_model.find('[field]').each(function(index, element) {
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'charge_mode') {
\t\t\t\t\t\t\t\t\$(this).parent().text(data[i]['charge_mode'] != 0 ? tax_way[data[i]['charge_mode']] : '');
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'tax_project') {
\t\t\t\t\t\t\t\t\$(this).parent().text(data[i]['tax_project'] != 0 ? tax_item[data[i]['tax_project']] : '');
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'is_invalid') {
\t\t\t\t\t\t\t\t\$(this).parent().text(data[i]['is_invalid'] != 0 ? '作废' : '未作废');
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'whether_tax') {
\t\t\t\t\t\t\t\t\$(this).parent().text(data[i]['whether_tax'] != 0 ? '是' : '否');
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'deductible') {
\t\t\t\t\t\t\t\t\$(this).parent().text(data[i]['deductible'] != 0 ? '是' : '否');
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'auth_time') {
\t\t\t\t\t\t\t\t\$(this).parent().text(data[i]['auth_time'] != 0 ? cs.getNowTime(data[i]['auth_time']) : '');
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'type') {
\t\t\t\t\t\t\t\t\$(this).parent().text(data[i]['type'] != 0 ? type[data[i]['type']] : '');
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'tax_rate') {
\t\t\t\t\t\t\t\t\$(this).parent().text(data[i]['tax_rate'] + '%');
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}if(\$(this).attr('field') == 'charge_modes') {
\t\t\t\t\t\t\t\t\$(this).parent().text(data[i]['charge_modes'] != 0 ? tax_way[data[i]['charge_modes']] : '');
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\$(this).parent().text(data[i][\$(this).attr('field')]);
\t\t\t\t\t\t});

\t\t\t\t\t\thtml.append(_model);
\t\t\t\t\t\t\$('#templateCon #' + _ztype).append(html);
\t\t\t\t\t}

\t\t\t\t\tvar total = 0;
\t\t\t\t\t\$('#templateCon [total]').each(function(index, element) {
\t\t\t\t\t\t\$(element).parents('table').find('tbody tr').not('.model').find('td:eq(' + \$(element).index() + ')').each(function(i, e) {
\t\t\t\t\t\t\t//console.log(i)
\t\t\t\t\t\t\ttotal += \$(e).text().trim() ? parseFloat(\$(e).text().trim()) : 0;
\t\t\t\t\t\t});
\t\t\t\t\t\t\$(element).text(total);
\t\t\t\t\t\ttotal = 0;
\t\t\t\t\t});

\t\t\t\t\telement.init('collapse');
\t\t\t\t}

\t\t\t\t//发票采集详情
\t\t\t\tlayui.use('element', function() {
\t\t\t\t\tvar element = layui.element;
\t\t\t\t\tinvoice_detail(_data, element);
\t\t\t\t});
\t\t\t\tfunction invoice_detail(data, element) {
                    \$('.collect').click(function() {
                        console.log(data,111);
                        var index = \$(this).parents('tr').index();
\t\t\t\t\t\tvar tax_type = \$(this).parent().attr('tax_type');
\t\t\t\t\t\tvar service_id = \$(this).attr('service-id');

\t\t\t\t\t\tshowMark('#invoice_collect');
                        \$('#showBox .title').text('发票采集详情');
                        console.log(\$('#showBox .title'));
\t\t\t\t\t\telement.init('collapse');
\t\t\t\t\t\tif(tax_type == 1) {
\t\t\t\t\t\t\t\$('#templateCon .jxcj').show();
\t\t\t\t\t\t}

\t\t\t\t\t\t//获取发票采集数据
\t\t\t\t\t\tgetInvoiceCollectData(data[index], element);
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\t//获取发票采集数据
\t\t\t\tfunction getInvoiceCollectData(data, element) {
\t\t\t\t\t//console.log(data);
//\t\t\t\t\tvar type = ['注册公司', '变更公司', '股权变更', '注册商标', '注销公司', '申请一般纳税人', '记账报税']; //业务类型
\t\t\t\t\tvar tax_way = ['','一般计税', '简单征收', '免税', '免抵退']; //计税方式
\t\t\t\t\tvar tax_item = ['','应税货物', '应税劳务', '应税服务不动产']; //征税项目
                    var type = ['','无票视同销售','增值税专用发票','增值税普通发票'];//业务类型
\t\t\t\t\tvar _ztype;
\t\t\t\t\tvar model;
\t\t\t\t\tvar _model;
\t\t\t\t\tvar html;

\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tif(!data[i]['ztype'] || data[i]['ztype'] === '0') {
\t\t\t\t\t\t\tcontinue;
\t\t\t\t\t\t}
\t\t\t\t\t\t_ztype = data[i]['ztype'];
\t\t\t\t\t\tmodel = \$('#templateCon #' + _ztype).find('.model').html();;
\t\t\t\t\t\t_model = \$(model);
\t\t\t\t\t\thtml = \$('<tr></tr>');
\t\t\t\t\t\tif(!\$('#templateCon #' + _ztype).parents('.layui-colla-content').hasClass('layui-show')) {
\t\t\t\t\t\t\t\$('#templateCon #' + _ztype).parents('.layui-colla-content').addClass('layui-show');
\t\t\t\t\t\t}

\t\t\t\t\t\t_model.eq(0).text(\$('#templateCon #' + _ztype).find('tr').length);
\t\t\t\t\t\t_model.find('[field]').each(function(index, element) {
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'charge_mode') {
                                \$(this).parent().text(data[i]['charge_mode'] != 0 ? tax_way[data[i]['charge_mode']] : '');
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'tax_project') {
\t\t\t\t\t\t\t\t\$(this).parent().text(data[i]['tax_project'] != 0 ? tax_item[data[i]['tax_project']] : '');
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'is_invalid') {
\t\t\t\t\t\t\t\t\$(this).parent().text(data[i]['is_invalid'] != 0 ? '作废' : '未作废');
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'whether_tax') {
\t\t\t\t\t\t\t\t\$(this).parent().text(data[i]['whether_tax'] != 0 ? '是' : '否');
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'deductible') {
\t\t\t\t\t\t\t\t\$(this).parent().text(data[i]['deductible'] != 0 ? '是' : '否');
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'auth_time') {
\t\t\t\t\t\t\t\t\$(this).parent().text(data[i]['auth_time'] != 0 ? cs.getNowTime(data[i]['auth_time']) : '');
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'type') {
\t\t\t\t\t\t\t\t\$(this).parent().text(data[i]['type'] != 0 ? type[data[i]['type']] : '');
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'tax_rate') {
\t\t\t\t\t\t\t\t\$(this).parent().text(data[i]['tax_rate'] + '%');
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}if(\$(this).attr('field') == 'charge_modes') {
                                \$(this).parent().text(data[i]['charge_modes'] != 0 ? tax_way[data[i]['charge_modes']] : '');
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\$(this).parent().text(data[i][\$(this).attr('field')]);
\t\t\t\t\t\t});

\t\t\t\t\t\thtml.append(_model);
\t\t\t\t\t\t\$('#templateCon #' + _ztype).append(html);
\t\t\t\t\t}

\t\t\t\t\tvar total = 0;
\t\t\t\t\t\$('#templateCon [total]').each(function(index, element) {
\t\t\t\t\t\t\$(element).parents('table').find('tbody tr').not('.model').find('td:eq(' + \$(element).index() + ')').each(function(i, e) {
\t\t\t\t\t\t\t//console.log(i)
\t\t\t\t\t\t\ttotal += \$(e).text().trim() ? parseFloat(\$(e).text().trim()) : 0;
\t\t\t\t\t\t});
\t\t\t\t\t\t\$(element).text(total);
\t\t\t\t\t\ttotal = 0;
\t\t\t\t\t});

\t\t\t\t\telement.init('collapse');
\t\t\t\t}

\t\t\t\t//-复选框选择时弹框确认提示 选中后不能再取消

\t\t\t\tcustom.get_custom_info();
\t\t\t\tcustom.showReamrk();
\t\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\t\t\$('[contentAuthority=\"104\"]').each(function(i, e) {
\t\t\t\t\tif(cs.getNodes([104], true) && \$(this).parent().attr('data-status') == '2') {
\t\t\t\t\t\t\$(this).removeClass('hidden-sm');
\t\t\t\t\t\t\$(this).find('a').html('<span class=\"btGreen\" title=\"查看\"><i class=\"ace-icon fa fa-eye\"></i></span>');
\t\t\t\t\t\t\$(this).show();
\t\t\t\t\t}
\t\t\t\t\tif(cs.getNodes([104], true) && \$(this).parent().attr('data-status') != '2') {
\t\t\t\t\t\t\$(this).show();
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t\$('.accont').click(function() {
\t\t\t\t\tif(\$(this).next().next().val() == \"\") {
\t\t\t\t\t\tykp.prompt('请添加账户密码！');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}

\t\t\t\t\t\$(this).next().select();
\t\t\t\t\tdocument.execCommand(\"Copy\");
\t\t\t\t\tykp.prompt('复制成功')
\t\t\t\t})
\t\t\t\t
\t\t\t\t\$('.accont1').click(function() {
\t\t\t\t\tif(\$(this).next().val() == \"\") {
\t\t\t\t\t\tykp.prompt('请添加密码！');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\t\$(this).next().select();
\t\t\t\t\tdocument.execCommand(\"Copy\");
\t\t\t\t\tykp.prompt('复制成功')
\t\t\t\t})
                            
             
//           \$('#tax .btns').find('input[type=checkbox]').click(function(){
//           \tvar type = \$(this).attr('data-type');
//           \tvar service_id = \$(this).parents('tr').attr('data-id');
//           \tvar val = \$(this).attr('data-val');                 
//           \tvar text = \$(this).next().text();
//           \t\t\tlayui.use('layer', function() {
//\t\t\t\t\t\tvar layer = layui.layer;
//\t\t\t\t\t\tlayer.confirm(val == 1 ? '取消' + text + '认证么？' : '确认认证' + text + '么？', function(index) {
//\t\t\t\t\t\t\tykp.doAjax({
//\t\t\t\t\t\t\t\turl: \"/api/api_service/add_tax_is\",
//\t\t\t\t\t\t\t\tmethod: \"post\",
//\t\t\t\t\t\t\t\tdata: {
//\t\t\t\t\t\t\t\t\tservice_id: service_id,
//\t\t\t\t\t\t\t\t\ttype: type,
//\t\t\t\t\t\t\t\t\tval: val == 1 ? 0 : 1
//\t\t\t\t\t\t\t\t},
//\t\t\t\t\t\t\t\tsuccess: function(res) {
//\t\t\t\t\t\t\t\t\tvar index = \$('.kind').find('.now').index() == 1 ? 1 : 2;
//\t\t\t\t\t\t\t\t\tgetTaxList(1, index);
//\t\t\t\t\t\t\t\t\tlayer.closeAll();
//\t\t\t\t\t\t\t\t}
//\t\t\t\t\t\t\t})
//\t\t\t\t\t\t});
//\t\t\t\t\t})
//           })                     
\t\t\t\t\$('._tax .btns').find('input[type=checkbox]').click(function(){
\t\t\t\t\tvar type = \$(this).attr('data-type');
\t\t\t\t\tvar service_id = \$(this).parents('tr').attr('data-id');
\t\t\t\t\tvar val = \$(this).attr('data-val');
\t\t\t\t\tvar fzid = \$(this).parents('tr').attr('fz-id');
\t\t\t\t\tvar userid = JSON.parse(ykp.getCookie('userinfo'));
//\t\t\t\t\tif(fzid != userid.id) {
//\t\t\t\t\t\tykp.prompt('你不是负责人');
//\t\t\t\t\t\treturn false;
//\t\t\t\t\t}
//\t\t\t\t\tif(\$(this).parents('tr').attr('get_money') == -1 && \$(this).attr('status') == '4') {
//\t\t\t\t\t\tykp.prompt('订单已解约，不能编辑');
//\t\t\t\t\t\treturn false;
//\t\t\t\t\t}
\t\t\t\t\tvar text = \$(this).next().text();
\t\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\tlayer.confirm(val == 1 ? '取消' + text + '认证吗？' : '确认认证' + text + '吗？', function(index) {
\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\turl: \"/api/api_service/add_tax_is\",
\t\t\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\tservice_id: service_id,
\t\t\t\t\t\t\t\t\ttype: type,
\t\t\t\t\t\t\t\t\tval: val == 1 ? 0 : 1
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\tvar index = \$('.kind').find('.now').index() == 1 ? 1 : 2;
\t\t\t\t\t\t\t\t\tgetTaxList(1, index);
\t\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t});
\t\t\t\t\t})
\t\t\t\t\treturn false;
\t\t\t\t});

\t\t\t\tvar td = \$(html).find(\"td[data-num='4']\");
\t\t\t\tif(type == 2) {
\t\t\t\t\t\$(dataList).find(\"td[data-num='4']\").remove();
\t\t\t\t}

\t\t\t\t\$(dataList + ' td').find('#is_tax').each(function() {
\t\t\t\t\tif(\$(this).attr('is_tax') == 0) {
\t\t\t\t\t\t\$(this).remove();
\t\t\t\t\t}
\t\t\t\t})

\t\t\t\t//打开内嵌网站
\t\t\t\t\$(dataList + ' [target=\"goals\"]').click(function() {
\t\t\t\t\tvar href = \$(this).attr(\"data_url\");
\t\t\t\t\tif(!href) {
\t\t\t\t\t\tykp.prompt('未添加相关网站');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\t\$('#iframe').find('iframe').attr('src', href);
\t\t\t\t\t\$('#iframe div a').css(\"cursor\", 'pointer');
\t\t\t\t\t\$('#iframe').show();
\t\t\t\t\t\$('.row').hide();
\t\t\t\t})

\t\t\t\t//关闭网站
\t\t\t\t\$('#iframe div a').click(function() {
\t\t\t\t\t\$('#iframe').hide();
\t\t\t\t\t\$('.row').show();
\t\t\t\t})

\t\t\t\t\$(\"#dataList td[data-status='0']\").mouseover(function() {
\t\t\t\t\t\$(this).children('a').css('display', 'inline-block');
\t\t\t\t})

\t\t\t\t\$(dataList + \" td[data-status='0']\").mouseout(function() {
\t\t\t\t\t\$(this).children('a').css('display', 'none');
\t\t\t\t})

\t\t\t\t\$('._details tbody tr').find('.edit').unbind('click').click(function(e) {
\t\t\t\t\tvar taxstatus = \$(this).parents('td').attr('data-status');
                    var customer_name = \$(this).parents('tr').find('[data-num=\"1\"] a').text();
                    var cus_month = \$(this).parents('tr').attr('data-time'); //服务月份
\t\t\t\t\tvar fzid = \$(this).parents('tr').attr('fz-id');
\t\t\t\t\tvar userid = JSON.parse(ykp.getCookie('userinfo'));
\t\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\t\tif(fzid != userid.id) {
\t\t\t\t\t\tykp.prompt('你不是申报人');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}

\t\t\t\t\t//作废未收款不能添加
\t\t\t\t\tif(\$(this).parents('tr').attr('get_money') == -1 && \$(this).attr('status') == '4' || \$(this).attr('status') == '3') {
\t\t\t\t\t\tykp.prompt('订单已解约，不能编辑');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}

\t\t\t\t\t//ykp.prompt('未添加相关网站');
\t\t\t\t\tif(taxstatus == 1 || submitStatuus) {
\t\t\t\t\t\tykp.prompt('等待审核!');
\t\t\t\t\t\treturn;
\t\t\t\t\t} else if(taxstatus == 2) {
                        \$('#showBox .title').text('详细税费数据');

\t\t\t\t\t\t//执行查看操作
\t\t\t\t\t\t/*ykp.prompt('审核已通过,不可编辑!');
\t\t\t\t\t\treturn;*/

\t\t\t\t\t\tvar target = \$(e.currentTarget);
\t\t\t\t\t\t//\t\t\t\t\t\t\t\t\t\ttaxData(target);
\t\t\t\t\t\tvar type = target.attr('tax_type');
\t\t\t\t\t\tvar name = \$(this).parents('tr').attr('data-name');
                        \$('#showBox .title').text(customer_name + '（' + cus_month + '）税费数据');
\t\t\t\t\t\tget_tax_details1(id, type, name);
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
                    var year_month = \$(this).parents('tr').find('[data-num=\"7\"]').text();
\t\t\t\t\tvar customer_id = \$(this).parents('tr').attr('customer_id').trim();
\t\t\t\t\tvar temp = _type == 2 ? \"#template4\" : \"#template4\"; //template1
\t\t\t\t\tvar dtime = \"\";
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_service/get_tax_info',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tservice_id: id
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
                            var data = res.data;
\t\t\t\t\t\t\tshowMark(temp);
\t\t\t\t\t\t\tvar temHtml = \$('#templateBox4').html();
\t\t\t\t\t\t\t\$('#templateBox4').children().remove();
\t\t\t\t\t\t\t\$('#templateBox4').html(temHtml);
\t\t\t\t\t\t\tcs.getYearAndMonth('2015-1-1', '2025-12-31', '#templateCon .addtime');
\t\t\t\t\t\t\tcs.getYear('2015', '2025', '#templateCon .addtime1', 'year');
\t\t\t\t\t\t\t\$('#templateCon .select2').css('width', '500px')

\t\t\t\t\t\t\tdtime = res.data == \"\" ? \"\" : data['上个季度']['start'];
\t\t\t\t\t\t\t\$('#templateCon').find('select[field=state_time2]').val(squarter).trigger('change');
\t\t\t\t\t\t\t\$('#templateCon').find('select[field=state_time1]').val(xquarter).trigger('change');
\t\t\t\t\t\t\t\$('#templateCon').find('select[field=business_time2]').val(\"\").trigger('change');
\t\t\t\t\t\t\t\$('#templateCon').find('select[field=business_time1]').val(\"\").trigger('change');

\t\t\t\t\t\t\t\$('#templateCon').find('select[field=taxation_time2]').val('').trigger('change');
\t\t\t\t\t\t\t\$('#templateCon').find('select[field=taxation_time1]').val('').trigger('change');

\t\t\t\t\t\t\t//修改所属时间                            
\t\t\t\t\t\t\tchangeTime()
                            \$('#showBox .title').text(customer_name + '（' + cus_month + '）税费数据');
\t\t\t\t\t\t\t\$('#templateCon').data('flag', '1');
\t\t\t\t\t\t\t\$('#templateCon .close_get').unbind('click').click(function() {
\t\t\t\t\t\t\t\t\$('#templateCon').data('flag', '2'); 
\t\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\$('#templateCon .item_form').attr('customer_name', customer_name);
\t\t\t\t\t\t\t\$('#templateCon .item_form').attr('time', year_month);
\t\t\t\t\t\t\t\$('#templateCon form').attr('customer_id', customer_id.trim());
\t\t\t\t\t\t\tget_tax_details(id);
\t\t\t\t\t\t\tsave();
\t\t\t\t\t\t\t\$('#templateCon input[field=\"上期末留抵税额\"]').val(data['上期末留抵税额']);
\t\t\t\t\t\t\t\$('#templateCon input[field=\"免抵退\"]').val(data['免抵退']);
\t\t\t\t\t\t\t\$('#templateCon input').eq(0).val(customer_name);
\t\t\t\t\t\t\tfor(var i in data['customerInfo']) {
\t\t\t\t\t\t\t\t\$('#templateCon input').each(function() {
\t\t\t\t\t\t\t\t\tif(\$(this).attr('field') == i) {
\t\t\t\t\t\t\t\t\t\t\$(this).val(data['customerInfo'][i]);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tfor(var i in data['thisMonth']) {
                                \$('#templateCon input').each(function() {
\t\t\t\t\t\t\t\t    if(\$(this).attr('field') == i){
                                        if(\$(this).attr('field') == \"免抵退\") {
                                            \$(this).val(data[\"免抵退\"]);
                                        } else if(\$(this).attr('field') == \"免抵退\") {
                                            \$(this).val(data[\"免抵退\"]);
                                        }else if(\$(this).attr('field') == \"上期末留抵税额\") {
                                            \$(this).val(data['上期末留抵税额']);
                                        }else {
                                            \$(this).val(data['thisMonth'][i]);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}

                            \tvar xTax = \$('#templateCon input[field=xTax]');  //销项税额
\t\t\t\t\t\t\t\tvar jTax = \$('#templateCon input[field=jTax]');  //进项税额
\t\t\t\t\t\t\t\tvar tTax = \$('#templateCon input[field=tTax]');  //增值税应纳税额
\t\t\t\t\t\t\t\tvar lTax = \$('#templateCon input[field=lTax]');   //本期末留底税
                            \tvar _lastm = \$('#templateCon input[field=上期末留抵税额]');
                           \t\tvar yearTax = \$('#templateCon input[field=今年累计销售额]'); //本年累计销售额
                            \tif(parseFloat(xTax.val())  - ( parseFloat(jTax.val()) + parseFloat(_lastm.val()))  > 0) {
\t\t\t\t\t\t\t\t\ttTax.val((Math.abs(parseFloat(xTax.val()) - ( parseFloat(jTax.val()) + parseFloat(_lastm.val())))).toFixed(2));
                                    lTax.val('0.00');
                            \t}else{
                                    tTax.val('0.00');
                                    lTax.val((Math.abs(parseFloat(xTax.val())  - ( parseFloat(jTax.val()) + parseFloat(_lastm.val()) )) ).toFixed(2));
\t\t\t\t\t\t\t\t}
                           \t\tyearTax.val(data[\"今年累计销售额\"]);
\t\t\t\t\t\t\t//改变上期末留抵税额
\t\t\t\t\t\t\t\$('#templateCon input[field=\"上期末留抵税额\"]').change(function(){
                                var xTax = \$('#templateCon input[field=xTax]');  //销项税额
\t\t\t\t\t\t\t\tvar jTax = \$('#templateCon input[field=jTax]');  //进项税额
\t\t\t\t\t\t\t\tvar tTax = \$('#templateCon input[field=tTax]');  //增值税应纳税额
                                var lTax = \$('#templateCon input[field=lTax]');   //本期末留底税
\t\t\t\t\t\t\t\tvar val = \$(this).val();
\t\t\t\t\t\t\t\t\$(this).val(val < 0 ? Math.abs(val) : val)
\t\t\t\t\t\t\t\t if(xTax.val() - ( jTax.val() + val)  > 0 ) {
\t\t\t\t\t\t\t\t\ttTax.val((Math.abs(xTax.val() - ( jTax.val() + val))).toFixed(2));
                                     lTax.val('0.00');
\t\t\t\t\t\t\t\t}else{
                                     tTax.val('0.00');
\t\t\t\t\t\t\t\t\tlTax.val((Math.abs(xTax.val() - ( jTax.val() + val))).toFixed(2));
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tif(res.data != \"\" && data['jzm_tax_details']['state_time']) {
\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=state_time2]').val(data['jzm_tax_details']['state_time'].split(',')[0]).trigger('change');
\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=state_time1]').val(data['jzm_tax_details']['state_time'].split(',')[1]).trigger('change');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(res.data != \"\" && data['jzm_tax_details']['business_time']) {
\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=business_time2]').val(data['jzm_tax_details']['business_time'].split(',')[0]).trigger('change');
\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=business_time1]').val(data['jzm_tax_details']['business_time'].split(',')[1]).trigger('change');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(res.data != \"\" && data['jzm_tax_details']['taxation_time']) {
\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=taxation_time2]').val(data['jzm_tax_details']['taxation_time'].split(',')[0]).trigger('change');
\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=taxation_time1]').val(data['jzm_tax_details']['taxation_time'].split(',')[1]).trigger('change');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(_type == 1) {
                                //一般纳税人
\t\t\t\t\t\t\t\$('#templateCon #xiao').remove();
\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=state_time2]').val(munths).trigger('change');
\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=state_time1]').val(munths).trigger('change');

\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\$('#templateCon #yiban').remove();
                                for(var i in data['customerInfo']) {
\t\t\t\t\t\t\t\t\t\$('#templateCon input').each(function() {
                                        if(\$(this).attr('field') == i) {
                                            \$(this).val(data['customerInfo'][i]);
                                        }
\t\t\t\t\t\t\t\t\t})                                  
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\$('#templateCon [syllable]').each(function(i, e) {
\t\t\t\t\t\t\t\t\tfield = \$(this).attr('syllable').split(',');
\t\t\t\t\t\t\t\t\t\$(this).val(res.data != \"\" ? data[field[0]][field[1]]:\"\");
\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\tfor(var i in data['thisMonth']) {
\t\t\t\t\t\t\t\t\t\$('#templateCon input').each(function() {
\t\t\t\t\t\t\t\t\t\t\tif(\$(this).attr('field') == i) {
\t\t\t\t\t\t\t\t\t\t\t\t\$(this).val(data['thisMonth'][i]);
\t\t\t\t\t\t\t\t\t\t\t} else if(\$(this).attr('field') == \"免抵退\") {
\t\t\t\t\t\t\t\t\t\t\t\t\$(this).val(data[\"免抵退\"]);
\t\t\t\t\t\t\t\t\t\t\t} else if(\$(this).attr('field') == \"llTax\") {
\t\t\t\t\t\t\t\t\t\t\t\t\$(this).val(data['thisMonth']['lTax']);
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t})

\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif(res.data != \"\" &&  data['jzm_tax_details']['state_time']) {
\t\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=state_time2]').val(data['jzm_tax_details']['state_time'].split(',')[0]).trigger('change');
\t\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=state_time1]').val(data['jzm_tax_details']['state_time'].split(',')[1]).trigger('change');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif(res.data != \"\" && data['jzm_tax_details']['business_time']) {
\t\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=business_time2]').val(data['jzm_tax_details']['business_time'].split(',')[0]).trigger('change');
\t\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=business_time1]').val(data['jzm_tax_details']['business_time'].split(',')[1]).trigger('change');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif(res.data != \"\" && data['jzm_tax_details']['taxation_time']) {
\t\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=taxation_time2]').val(data['jzm_tax_details']['taxation_time'].split(',')[0]).trigger('change');
\t\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=taxation_time1]').val(data['jzm_tax_details']['taxation_time'].split(',')[1]).trigger('change');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tcs.upload1({
\t\t\t\t\t\t\t\tel: \"#templateBox #upload1\",
\t\t\t\t\t\t\t\tael: \"#templateBox #fileBox\"
\t\t\t\t\t\t\t})
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t\tfunction changeTime() {
\t\t\t\t\t\t\$('#templateCon').find('select[field=state_time2],select[field=business_time2],select[field=taxation_time2]').change(function() {
\t\t\t\t\t\t\tvar curval = \$(this).val() ? parseInt(\$(this).val().replace(/\\./, '')) : \"\";
\t\t\t\t\t\t\t\$('#templateCon').find('select[field=' + (\$(this).attr('field').replace(/2/, '1')) + ']').val('').trigger('change');
\t\t\t\t\t\t})
\t\t\t\t\t\t\$('#templateCon').find('select[field=local_time]').change(function(){
                            local_time = \$(this).val();
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t\tvar customer_id = \$(this).parents('tr').attr('customer_id');
\t\t\t\t\tvar data = {};
\t\t\t\t\tdata[\"customer_id\"] = customer_id;
\t\t\t\t\tdata[\"service_id\"] = id;
\t\t\t\t\tvar num = 0;

\t\t\t\t\t\$(this).parents(\"tr\").find(\"[type='checkbox']\").each(function(i) {
\t\t\t\t\t\tif(\$(this).is(\":checked\")) {
\t\t\t\t\t\t\tdata[\$(this).parents(\"td\").attr(\"Title1\")] = 1;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tdata[\$(this).parents(\"td\").attr(\"Title1\")] = 0;
\t\t\t\t\t\t}
\t\t\t\t\t})

\t\t\t\t\tif(type == 2) {
\t\t\t\t\t\tdata[\"is_invoice\"] = 0;
\t\t\t\t\t}

\t\t\t\t\tfunction sendMsg(id, type, param) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_common/send_customer',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tcustomer_id: id,
\t\t\t\t\t\t\t\ttype: type,
\t\t\t\t\t\t\t\tparam: JSON.stringify(param)
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('短信发送成功！');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}

\t\t\t\t\t//编辑框数据渲染
\t\t\t\t\tfunction get_tax_details(id) {
\t\t\t\t\t\tvar service_id = id;
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: \"/api/api_service/get_tax_details\",
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tservice_id: service_id
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\t\t\tconsole.log(data)
                                //编辑里所属时间
                                var arr = cus_month.split('');
                                arr.splice(4, 0, '.');
                                arr = cs.getPreMonth(arr.join(''));
                                get_local_time = data.local_time ? JSON.parse(data.local_time) : arr ;
                                local_time = [arr];
                                s_total = \$('#templateCon input[field=tTax]').val();
                                \$('#templateCon').find('select[field=local_time]').val(last_month).trigger('change');
                                \$('#templateCon #addtime').select2({   
                                    allowClear: true                     
                                });
                                if(!data) {
\t\t\t\t\t\t\t\t\t\$('#templateCon input').each(function() {
\t\t\t\t\t\t\t\t\t\tif(\$(this).attr('title1')) {
\t\t\t\t\t\t\t\t\t\t\t\$(this).val(0);
\t\t\t\t\t\t\t\t\t\t}
                                        if (\$(this).attr('field') == \"construction_tax\") {
                                            \$(this).val((parseFloat(s_total)*0.07).toFixed(2));
                                        } else if (\$(this).attr('field') == \"tuition\") {
                                            \$(this).val((parseFloat(s_total)*0.03).toFixed(2));
                                        } else if (\$(this).attr('field') == \"local_tuition\") {
                                            \$(this).val((parseFloat(s_total)*0.02).toFixed(2));
                                        }
\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tfor(var i in data) {
                                        \$('#templateCon input,select').each(function() {

                                           /* if(\$(this).attr('field') == i) {
                                                if (\$(this).attr('field') == \"construction_tax\") {
                                                    \$(this).val( data[i]==0 || data[i]==\"\" ? 0 :s_total*0.07.toFixed(2));
                                                } else if (\$(this).attr('field') == \"tuition\") {
                                                    \$(this).val(data[i]==0 || data[i]==\"\" ? 0 : s_total*0.03);
                                                } else if (\$(this).attr('field') == \"local_tuition\") {
                                                    \$(this).val(data[i]==0 || data[i]==\"\" ? 0 : s_total*0.02);
                                                } else if(\$(this).attr('field') == \"state_appreciation\" ){
                                                    \$(this).val(data[i]==0 || data[i]==\"\" ? s_total : data[i]);
                                                } else {
                                                    \$(this).val(data[i]);
                                                }
\t\t\t\t\t\t\t\t\t\t\t}*/

                                            if(\$(this).attr('field') == i) {
                                                if (\$(this).attr('field') == \"construction_tax\") {
                                                    console.log(data[i],111);
                                                    \$(this).val( data[i]==0 ? (s_total*0.07).toFixed(2) : data[i]);
                                                } else if (\$(this).attr('field') == \"tuition\") {
                                                    \$(this).val(data[i]==0 ? (s_total*0.03).toFixed(2) : data[i]);
                                                } else if (\$(this).attr('field') == \"local_tuition\") {
                                                    \$(this).val(data[i]==0 ? (s_total*0.02).toFixed(2) : data[i]);
                                                } else if(\$(this).attr('field') == \"state_appreciation\" ){
                                                    \$(this).val(data[i]==0 ? s_total : data[i]);
                                                } else {
                                                    \$(this).val(data[i]);
                                                }
                                            }
\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\$('#templateCon select[field=business_time2]').val(data[\"business_time\"].split(',')[0].substr(0,4));
\t\t\t\t\t\t\t\t\t\$('#templateCon select[field=taxation_time2]').val(data[\"taxation_time\"].split(',')[0].substr(0,4));
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t\tfunction get_tax_details1(id, type, name) {
\t\t\t\t\t\tvar service_id = id;
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: \"/api/api_service/get_tax_details\",
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tservice_id: service_id
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tvar data = res.data;
                                //console.log(data);
                                showMark('#small-scale');
\t\t\t\t\t\t\t\tvar arr = [];
                               \$('#templateCon [field]').each(function(index, element) {
\t\t\t\t\t\t\t\t\tif(\$(this).attr('field') == \"state_time\" || \$(this).attr('field') == \"business_time\") {
\t\t\t\t\t\t\t\t\t\t\$(this).text(data[\$(this).attr('field')] ? (data[\$(this).attr('field')] != ',' ? data[\$(this).attr('field')].split(',')[0] + \"至\" + data[\$(this).attr('field')].split(',')[1] : \"\") : \"空\");
\t\t\t\t\t\t\t\t\t}else if(\$(this).attr('field') == \"local_time\"){
                                        \$(this).text(data[\$(this).attr('field')] ? (data[\$(this).attr('field')] != ',' && data[\$(this).attr('field')] != \"null\" ? JSON.parse(data[\$(this).attr('field')]).join(' ') : \"\") : \"空\");
\t\t\t\t\t\t\t\t\t} else if(\$(this).attr('field') == \"files\") {
\t\t\t\t\t\t\t\t\t\tif(data[\$(this).attr('field')]) {
\t\t\t\t\t\t\t\t\t\t\tJSON.parse(data[\$(this).attr('field')]).forEach(function(item) {
\t\t\t\t\t\t\t\t\t\t\t\tarr.push('<p style=\"padding-left: 2px;\"><a data-url=\"' + item.url + '\">' + item.name + '</a></p>')
\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t\t\$(this).html(arr.join(','));
\t\t\t\t\t\t\t\t\t\t\t\$(this).find('a').click(function() {
\t\t\t\t\t\t\t\t\t\t\t\tvar name = \$(this).text();
\t\t\t\t\t\t\t\t\t\t\t\tvar url = \$(this).attr('data-url');
\t\t\t\t\t\t\t\t\t\t\t\twindow.open(ykp.api_url + \"/api/api_common/update_file_name?file_url=\" + url + \"&name=\" + name)
\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t} else if(\$(this).attr('field') == \"transfer_out\"){
                                        \$(this).val(data[\$(this).attr('field')]);
\t\t\t\t\t\t\t\t\t}else{
                                        \$(this).text(data[\$(this).attr('field')]);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})

\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_service/get_tax_info',
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tservice_id: id
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tvar data = res.data;
                                for(var i in data['customerInfo']) {
\t\t\t\t\t\t\t\t\t\$('#templateCon input').each(function() {
\t\t\t\t\t\t\t\t\t\tif(\$(this).attr('field') == i) {
\t\t\t\t\t\t\t\t\t\t\t\$(this).val(data['customerInfo'][i]);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\tfor(var i in data['thisMonth']) {
\t\t\t\t\t\t\t\t\t\$('#templateCon input').each(function() {
\t\t\t\t\t\t\t\t\t\tif(\$(this).attr('field') == i) {
\t\t\t\t\t\t\t\t\t\t\t\$(this).val(data['thisMonth'][i]);
\t\t\t\t\t\t\t\t\t\t} else if(\$(this).attr('field') == \"免抵退\") {
\t\t\t\t\t\t\t\t\t\t\t\$(this).val(data[\"免抵退\"]);
\t\t\t\t\t\t\t\t\t\t} else if(\$(this).attr('field') == \"llTax\") {
\t\t\t\t\t\t\t\t\t\t\t\$(this).val(data['thisMonth']['lTax']);
\t\t\t\t\t\t\t\t\t\t}else if(\$(this).attr('field') == \"上期末留底税额\") {
\t\t\t\t\t\t\t\t\t\t\t\$(this).val(data['上期末留抵税额']);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\tvar xTax = \$('#templateCon input[field=xTax]');  //销项税额
\t\t\t\t\t\t\t\tvar jTax = \$('#templateCon input[field=jTax]');  //进项税额
\t\t\t\t\t\t\t\tvar tTax = \$('#templateCon input[field=tTax]');  //增值税应纳税额
\t\t\t\t\t\t\t\tvar lTax = \$('#templateCon input[field=lTax]');   //本期末留底税
                                var yearTax = \$('#templateCon input[field=今年累计销售额]'); //本年累计销售额
                                //console.log((parseInt(data['thisMonth']['xTax']) - (parseInt(data['thisMonth']['jTax']) + parseInt(data['上期末留抵税额'])) > 0));
                               /* if((parseInt(data['thisMonth']['xTax'] ) - ( parseInt(data['thisMonth']['jTax']) + parseInt(data['上期末留抵税额']))  > 0) ) {
\t\t\t\t\t\t\t\t\ttTax.val(Math.abs(parseInt(data['thisMonth']['xTax'] )- ( parseInt(data['thisMonth']['jTax']) + parseInt(data['上期末留抵税额']) )));
                                     lTax.val(0)
\t\t\t\t\t\t\t\t }else{
\t\t\t\t\t\t\t\t\tlTax.val(Math.abs(parseInt(data['thisMonth']['xTax'] )- ( parseInt(data['thisMonth']['jTax']) + parseInt(data['上期末留抵税额']) )) )
                                     tTax.val(0)
\t\t\t\t\t\t\t\t }*/
                                if(xTax.val() - ( jTax.val() + data['上期末留抵税额'])  > 0) {
                                    tTax.val((Math.abs(xTax.val() - ( jTax.val() + data['上期末留抵税额'] ))).toFixed(2));
                                    lTax.val('0.00');
                                }else{
                                    console.log(Math.abs(xTax.val()) - (parseInt(jTax.val()) + parseInt(data['上期末留抵税额'])));
                                    lTax.val((Math.abs(xTax.val() - ( jTax.val() + data['上期末留抵税额']))).toFixed(2));
                                    tTax.val('0.00');
                                }


                                yearTax.val(data[\"今年累计销售额\"]);

\t\t\t\t\t\t\t\tif(_type == 2) {
\t\t\t\t\t\t\t\t\t\$('#templateCon #yiban').remove();
                                    \$('#templateCon [syllable]').each(function(i, e) {
                                        field = \$(this).attr('syllable').split(',');
                                        \$(this).val(data[field[0]][field[1]]);
                                    });
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\$('#templateCon #xiao').remove();
\t\t\t\t\t\t\t\t\tfor(var i in data['customerInfo']) {
\t\t\t\t\t\t\t\t\t\t\$('#templateCon input').each(function() {
\t\t\t\t\t\t\t\t\t\t\tif(\$(this).attr('field') == i) {
\t\t\t\t\t\t\t\t\t\t\t\t\$(this).val(data['customerInfo'][i]);
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\$('#templateCon [syllable]').each(function(i, e) {
\t\t\t\t\t\t\t\t\t\tfield = \$(this).attr('syllable').split(',');
                                        \$(this).val(data[field[0]][field[1]]);
\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t/*for(var i in data['lastMonth']) {
                                        \$('#templateCon input').each(function() {
\t\t\t\t\t\t\t\t\t\t\tif(\$(this).attr('field') == i) {
\t\t\t\t\t\t\t\t\t\t\t\t\$(this).val(data['lastMonth'][i]);
\t\t\t\t\t\t\t\t\t\t\t} else if(\$(this).attr('field') == \"免抵退\") {
\t\t\t\t\t\t\t\t\t\t\t\t\$(this).val(data[\"免抵退\"]);
\t\t\t\t\t\t\t\t\t\t\t} else if(\$(this).attr('field') == \"llTax\") {
\t\t\t\t\t\t\t\t\t\t\t\t\$(this).val(data['lastMonth']['lTax']);
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t}*/
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}

\t\t\t\t\tfunction save() {
\t\t\t\t\t\t
\t\t\t\t\t\t\$(\"#templateCon .save\").click(function() {
                            var index = \$(this).index();
\t\t\t\t\t\t\tvar id = \$('#templateCon form').attr('customer_id');
\t\t\t\t\t\t\tvar is_send = false;
\t\t\t\t\t\t\tif(\$('#templateCon #sendMsg input:checked').val() == 1) {
\t\t\t\t\t\t\t\tis_send = true;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tvar customer_id = \$('#templateCon form').attr('customer_id').trim();
\t\t\t\t\t\t\t\$('#templateCon').find(\"input,select\").each(function() {
\t\t\t\t\t\t\t\tif(\$(this).attr(\"field\") != undefined) {
\t\t\t\t\t\t\t\t\tvar sValue = \$(this).val();
\t\t\t\t\t\t\t\t\tdata[\$(this).attr(\"field\")] = \$(this).attr(\"field\") == '' ? 0 : sValue;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\tvar param = {
\t\t\t\t\t\t\t\tname: \$('#templateCon .item_form').attr('customer_name'),
\t\t\t\t\t\t\t\ttime: \$('#templateCon .item_form').attr('time')
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(index == 1) {
\t\t\t\t\t\t\t\tdata['is_approves'] = 1;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tvar fileBox = \$('#templateCon #fileBox');
\t\t\t\t\t\t\tvar files = [];
\t\t\t\t\t\t\tif(fileBox.children().length > 0) {
\t\t\t\t\t\t\t\t\$('#templateCon #fileBox').find('a').each(function(i) {
\t\t\t\t\t\t\t\t\tfiles.push({
\t\t\t\t\t\t\t\t\t\tname: \$(this).text(),
\t\t\t\t\t\t\t\t\t\turl: \$(this).attr('data-url')
\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t})

\t\t\t\t\t\t\t\tdata.files = JSON.stringify(files);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tdata['customer_id'] = id;
                            data['local_time'] = local_time.length > 0 ? JSON.stringify(local_time) : \"\";
\t\t\t\t\t\t\tif(data['state_time2'] != \"\" && data['state_time1'] != \"\" && parseInt(data['state_time2'].replace(/\\./, '')) > parseInt(data['state_time1'].replace(/\\./, ''))) {
\t\t\t\t\t\t\t\tykp.prompt(\"国税结束时间必须大于等于开始时间\");
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t} else if(data['state_time2'] != \"\" && data['state_time1'] == \"\") {
\t\t\t\t\t\t\t\tykp.prompt(\"国税结束时间必须大于等于开始时间\");
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(data['business_time2'] && data['business_time1'] && parseInt(data['business_time2'].replace(/\\./, '')) > parseInt(data['business_time1'].replace(/\\./, ''))) {
\t\t\t\t\t\t\t\tykp.prompt(\"工商结束时间必须大于等于开始时间\");
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t} else if(data['business_time2'] && data['business_time1'] == \"\") {
\t\t\t\t\t\t\t\tykp.prompt(\"工商结束时间必须大于等于开始时间\");
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(data['taxation_time2'] && data['taxation_time1'] && parseInt(data['taxation_time2'].replace(/\\./, '')) > parseInt(data['taxation_time1'].replace(/\\./, ''))) {
\t\t\t\t\t\t\t\tykp.prompt(\"税务结束时间必须大于等于开始时间\");
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t} else if(data['taxation_time2'] && data['taxation_time1'] == \"\") {
\t\t\t\t\t\t\t\tykp.prompt(\"税务结束时间必须大于等于开始时间\");
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tdata['business_time'] = data['business_time2'] ? data['business_time2'] + '.01' + \",\" + data['business_time2'] + '.12' : \"\";
\t\t\t\t\t\t\tdata['state_time'] = data['state_time2'] + \",\" + data['state_time1'];
\t\t\t\t\t\t\tdata['taxation_time'] = data['taxation_time2'] ? data['taxation_time2'] + '.01' + \",\" + data['taxation_time2'] + '.12' : \"\";
                            data['year_month_id'] = year_month;
\t\t\t\t\t\t\tdata['prior_period'] = \$(\"#templateCon input[field='上期末留抵税额']\").val();
\t\t\t\t\t\t\tdata['current_period'] = \$(\"#templateCon input[field='lTax']\").val();
                              ykp.doAjax({
                                  url: '/api/api_service/add_tax_details', //换了接口名
                                  method: 'post',
                                  data: data,
                                  success: function(res) {
                                      if(index ==1){
                                          submitStatuus = true;
\t\t\t\t\t\t\t\t\t  }
                                      ykp.prompt(\"添加成功\");
                                      cs.close();
                                   //   getTaxList(1, _type);
                                      if(is_send) {
                                          sendMsg(customer_id, '报税完成', param);
                                      }
                                  }
                              })
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}

\t\t\thsearch();

\t\t\tfunction hsearch() {
\t\t\t\tvar data = {
\t\t\t\t\turl: '/api/api_service/get_tax_list',
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\t\"type\": 5,
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tcs.hSearch('.search1', data, 'where', true, function(res, _filter, month) {
\t\t\t\t\tfilter = _filter;
\t\t\t\t\tmonth2 = month;
\t\t\t\t\t\$('.in').click();
\t\t\t\t\tvar type = \$('.kind').find('.now').index();
\t\t\t\t\tvar dataList, pagination, dataTable;
\t\t\t\t\tdata.where = type == 0 ? \"khm_customer.tax_type=2\" : \"khm_customer.tax_type=1\";
\t\t\t\t\tdataList = type == 0 ? '#dataList' : '#dataList1';
\t\t\t\t\tdataTable = type == 0 ? '#dynamic-table1' : '#dynamic-table2';
\t\t\t\t\ttype = type == 0 ? 2 : 1;
\t\t\t\t\tvar hstable = type == 2 ? '#heightsearch1' : '#height_search1';
\t\t\t\t\tvar butt = type == 2 ? '#heightsearch' : '#height_search';
\t\t\t\t\t\$(butt).removeClass('active');
\t\t\t\t\t\$(hstable).slideUp();
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$(dataList).html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center; color:#7d7d7d;clear:none;\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddList(res, type, dataList, pagination, dataTable);
\t\t\t\t}, '', {
\t\t\t\t\turl: \"/api/api_service/bs_assistant_list_new\",
\t\t\t\t\ttype: 1
\t\t\t\t})
\t\t\t}

\t\t\tsearch()

\t\t\tfunction search() {
\t\t\t\tvar data = {
\t\t\t\t\turl: '/api/api_service/get_tax_list',
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\t\"type\": 5,
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tcs.doSearch('.search', data, 'where', true, function(res, _filter) {
\t\t\t\t\tfilter = _filter;
\t\t\t\t\tvar type = \$('.kind').find('.now').index();
\t\t\t\t\tvar dataList, pagination, dataTable;
\t\t\t\t\tif(!isNaN(type)) {
\t\t\t\t\t\tdata.where = type == 0 ? \"khm_customer.tax_type=2\" : \"khm_customer.tax_type=1\";
\t\t\t\t\t\tdataList = type == 0 ? '#dataList' : '#dataList1';
\t\t\t\t\t\tdataTable = type == 0 ? '#dynamic-table1' : '#dynamic-table2'
\t\t\t\t\t}
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$(dataList).html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center; color:#7d7d7d;clear:none;\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\ttype = type == 0 ? 2 : 1;
\t\t\t\t\taddList(res, type, dataList, pagination, dataTable);
\t\t\t\t}, '', {
\t\t\t\t\turl: \"/api/api_service/bs_assistant_list_new\",
\t\t\t\t\ttype: 1
\t\t\t\t})
\t\t\t}

\t\t\t//能量条形式控制
\t\t\t\$('.easy-pie-chart.percentage').each(function() {
\t\t\t\tvar \$box = \$(this).closest('.infobox');
\t\t\t\tvar barColor = \$(this).data('color') || (!\$box.hasClass('infobox-dark') ? \$box.css('color') : 'rgba(255,255,255,0.95)');
\t\t\t\tvar trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
\t\t\t\t\$(this).easyPieChart({
\t\t\t\t\tbarColor: barColor,
\t\t\t\t\ttrackColor: trackColor,
\t\t\t\t\tscaleColor: false,
\t\t\t\t\tlineCap: 'butt',
\t\t\t\t\tlineWidth: 5,
\t\t\t\t\tanimate: ace.vars['old_ie'] ? false : 1000
\t\t\t\t});
\t\t\t});

\t\t\t//高级搜索按钮
\t\t\tcs.showHeightSearch('#heightsearch', '#heightsearch1');
\t\t\tcs.showHeightSearch('#height_search', '#height_search1');

\t\t\t\$('[data-rel=tooltip]').tooltip();

\t\t\t//        时间插件
\t\t\tif(!ace.vars['old_ie']) {
\t\t\t\t\$('#date-timepicker1').datetimepicker({
\t\t\t\t\t// format: 'YYYY-MM-DD',//use this option to display seconds
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
\t\t})

\t\t//导入企业
\t\t\$('#leading-in').change(function() {
\t\t\tvar file = this.files[0];
\t\t\tvar formData = new FormData();
\t\t\tformData.append('customer', file);
\t\t\t\$.ajax({
\t\t\t\turl: ykp.api_url + '/api/api_customer/upload_batch',
\t\t\t\ttype: 'POST',
\t\t\t\tcashe: false,
\t\t\t\tdata: formData,
\t\t\t\tprocessData: false,
\t\t\t\tcontentType: false,
\t\t\t\tdataType: 'json'
\t\t\t}).success(function(res) {
\t\t\t\tif(res.code != 200) {
\t\t\t\t\tykp.prompt(res.msg);
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tgetList();
\t\t\t});

\t\t});

\t\t//加载报税数据
\t\tfunction taxData(target) {
\t\t\t/*\$(\".edit\").click(function(){*/
\t\t\tvar id = target.parents('tr').attr('data-id');
\t\t\tvar customer_id = target.parents('tr').attr('customer_id');
\t\t\tvar index = target.parents('tr').index();
\t\t\tvar type = target.attr('tax_type');
\t\t\tgetCustomerInfo(type, id, customer_id);
\t\t\t//生成弹税费数据出层
\t\t\t//generatePop(type,data[index],id);
\t\t\t/*})*/
\t\t};

\t\tfunction getCustomerInfo(type, id, customer_id) {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/Api_approves/get_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tfilter: 'spm_approves.approve_type = 18 and ' + 'customer_id = ' + id
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data.items;
\t\t\t\t\tvar field = '';
\t\t\t\t\tif(!items) {
\t\t\t\t\t\tykp.prompt('没有数据');
\t\t\t\t\t\treturn false;
\t\t\t\t\t} else {
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\tif(data[i]['submitted_data']['service_info']['jzm_service_info.id'] == id) {
\t\t\t\t\t\t\t\tvar _data = data[i]['submitted_data']['tax_info'];
\t\t\t\t\t\t\t\tvar name = data[i]['spm_approves.customer_name'];
\t\t\t\t\t\t\t\tgeneratePop(type, _data, id, name);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t}
\t\t\t});
\t\t};
\t\t//税费数据弹出层
\t\tfunction generatePop(type, data, id, name) {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_service/get_tax_info',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tservice_id: id
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tvar field = '';
\t\t\t\t\t\$('#templateCon [syllable]').each(function(i, e) {
\t\t\t\t\t\tfield = \$(this).attr('syllable').split(',');
\t\t\t\t\t\t\$(this).text(data[field[0]][field[1]]);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\t//\t\t\t\t\t\t\tshowMark('#small-scale');

\t\t\t\$('#showBox .Title1').text('税费数据');

\t\t\t\$('#templateCon [field]').each(function(index, element) {
\t\t\t\tif(\$(this).attr('field') == 'name') {
\t\t\t\t\t\$(this).text(name);
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\t\$(this).text(data[\$(this).attr('field')]);
\t\t\t});
\t\t};

\t</script>";
    }

    public function getTemplateName()
    {
        return "admin/task/tax.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2042 => 2019,  2038 => 2018,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	.infobox-blue2 {*/
/* 		text-align: center;*/
/* 	}*/
/* 	*/
/* 	.infobox>.infobox-data {*/
/* 		min-width: 80px;*/
/* 	}*/
/* 	*/
/* 	.import {*/
/* 		background-color: #fb9a47 !important;*/
/* 		border-color: #fb9a47;*/
/* 	}*/
/* 	*/
/* 	.iframePage a {*/
/* 		color: #7d7d7d;*/
/* 	}*/
/* 	*/
/* 	#heightsearch1 label,*/
/* 	#height_search1 label {*/
/* 		text-align: right;*/
/* 		width: 80px;*/
/* 		font-weight: normal;*/
/* 	}*/
/* 	*/
/* 	#template4Con label {*/
/* 		width: 120px;*/
/* 	}*/
/* 	*/
/* 	span[syllable],*/
/* 	span[field] {*/
/* 		display: inline-block;*/
/* 		width: 110px;*/
/* 	}*/
/* 	#templateBox{*/
/* 		padding-top: 53px;*/
/* 	}*/
/* 	/*span[field]{*/
/* 		display: inline-block;*/
/* 		width: 300px;*/
/* 	}*//* */
/* /*	.close_get{*/
/* 		position: absolute;*/
/* 		right: 15px;*/
/* 		top: 0;*/
/* 		*/
/* 	}*//* */
/* /*	.addCustomerLabel{*/
/* 		position: absolute;*/
/* 		right: 300px;*/
/* 		width: 32px;*/
/* 		height: 25px;*/
/* 		vertical-align: middle;*/
/* 		margin-top:13px ;*/
/* 	}*//* */
/* /*.fa-tags{*/
/* 	position: absolute;*/
/* 	margin-left: 4px;*/
/* 	top: 7px;*/
/* }*//* */
/* #temHeader{*/
/*  z-index: 9999 !important;*/
/* 	position: fixed;*/
/* 	width: 100%;*/
/* }*/
/* .popup_button{*/
/* 	display: inline-block;*/
/* }*/
/* /*.close_get {*/
/* 	position: absolute;*/
/* 	margin-left: 236px !important;*/
/* }*//* */
/* */
/* </style>*/
/* */
/* <div class="widget-main">*/
/* 	<div class="row" style="display:;">*/
/* 		<!-- <h3 class="header smaller lighter blue">报税</h3> -->*/
/* 		<div>*/
/* 			<!--顶部查询列表-->*/
/* 			<div>*/
/* 				<div class="row">*/
/* 					<div style="margin-top: 50px;  width:1050px; padding: 0px;" class="row col-xs-12">*/
/* 						<div class="col-xs-12 infobox-container" style="padding: 0px; margin-left: -10px;">*/
/* 							<!-- #section:pages/dashboard.infobox -->*/
/* 							<div class="infobox infobox-blue2" style="color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;">*/
/* 								<div class="infobox-data" style="padding: 0px;">*/
/* 									<div class="infobox-content" style="text-align: center;">*/
/* 										本季度国税申报*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="infobox infobox-blue2" style="color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;">*/
/* 								<div class="infobox-data" style="padding: 0px;">*/
/* 									<div class="infobox-content" style="text-align: center;">*/
/* 										本月地税申报*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="infobox infobox-blue2" style="color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;">*/
/* 								<div class="infobox-data" style="padding: 0px;">*/
/* 									<div class="infobox-content" style="text-align: center;">*/
/* 										本月发票认证*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="infobox infobox-blue2" style="color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;">*/
/* 								<div class="infobox-data" style="padding: 0px;">*/
/* 									<div class="infobox-content" style="text-align: center;">*/
/* 										本年工商年报*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="infobox infobox-blue2" style="color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;">*/
/* 								<div class="infobox-data" style="padding: 0px;">*/
/* 									<div class="infobox-content" style="text-align: center;">*/
/* 										本年税务年报*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="infobox infobox-blue2 chart1">*/
/* 								<div class="infobox-progress">*/
/* 									<!-- #section:pages/dashboard.infobox.easypiechart -->*/
/* 									<div class="easy-pie-chart percentage" data-percent="0" data-size="50" style="height: 57px;width: 57px;line-height: 56px;">*/
/* 										<span class="percent" id="percent">0</span>*/
/* 										<canvas height="57" width="57"></canvas>*/
/* 									</div>*/
/* 								</div>*/
/* */
/* 								<div class="infobox-data" style="margin:3px 0 0 20px;">*/
/* 									<div class="infobox-content" id="isOk"></div>*/
/* */
/* 									<div class="infobox-content" id="noOk">*/
/* */
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="infobox infobox-blue2 chart2">*/
/* 								<div class="infobox-progress">*/
/* 									<!-- #section:pages/dashboard.infobox.easypiechart -->*/
/* 									<div class="easy-pie-chart percentage" data-percent="0" data-size="50" style="height: 57px; width: 57px; line-height: 56px;">*/
/* 										<span class="percent" id="percent1">0</span>*/
/* 										<canvas height="57" width="57"></canvas></div>*/
/* 								</div>*/
/* */
/* 								<div class="infobox-data" style="margin:3px 0 0 20px;">*/
/* 									<div class="infobox-content" id="isOk">*/
/* */
/* 									</div>*/
/* */
/* 									<div class="infobox-content">*/
/* */
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="infobox infobox-blue2 chart3">*/
/* 								<div class="infobox-progress">*/
/* 									<!-- #section:pages/dashboard.infobox.easypiechart -->*/
/* 									<div class="easy-pie-chart percentage" data-percent="0" data-size="50" style="height: 57px; width: 57px; line-height: 56px;">*/
/* 										<span class="percent" id="percent2">0</span>*/
/* 										<canvas height="57" width="57"></canvas></div>*/
/* 								</div>*/
/* */
/* 								<div class="infobox-data" style="margin:3px 0 0 20px;">*/
/* 									<div class="infobox-content" id="isOk">*/
/* */
/* 									</div>*/
/* */
/* 									<div class="infobox-content">*/
/* */
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="infobox infobox-blue2 chart4">*/
/* 								<div class="infobox-progress">*/
/* 									<!-- #section:pages/dashboard.infobox.easypiechart -->*/
/* 									<div class="easy-pie-chart percentage" data-percent="0" data-size="50" style="height: 57px; width: 57px; line-height: 56px;">*/
/* 										<span class="percent" id="percent2">0</span>*/
/* 										<canvas height="57" width="57"></canvas></div>*/
/* 								</div>*/
/* */
/* 								<div class="infobox-data" style="margin:3px 0 0 20px;">*/
/* 									<div class="infobox-content" id="isOk">*/
/* */
/* 									</div>*/
/* */
/* 									<div class="infobox-content">*/
/* */
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="infobox infobox-blue2 chart5">*/
/* 								<div class="infobox-progress">*/
/* 									<!-- #section:pages/dashboard.infobox.easypiechart -->*/
/* 									<div class="easy-pie-chart percentage" data-percent="0" data-size="50" style="height: 57px; width: 57px; line-height: 56px;">*/
/* 										<span class="percent" id="percent2">0</span>*/
/* 										<canvas height="57" width="57"></canvas></div>*/
/* 								</div>*/
/* */
/* 								<div class="infobox-data" style="margin:3px 0 0 20px;">*/
/* 									<div class="infobox-content" id="isOk">*/
/* */
/* 									</div>*/
/* */
/* 									<div class="infobox-content">*/
/* */
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div style="clear:both;"></div>*/
/* 					</div>*/
/* */
/* 					<div class="col-sm-12" style="margin-top: 50px;padding-left:0;padding-right:0;">*/
/* 						<div class="kind">*/
/* 							<ul>*/
/* 								<li class="generaltaxpayer now">小规模</li>*/
/* 								<li class="small-scale">一般纳税人</li>*/
/* 							</ul>*/
/* 							<div id="tspage" style="border: 0px red solid; width: 480px;height: 30px;display:none;">*/
/* 								<a id="go_" href="javascript:void(0)">有部分一般纳税人数据,点击前往</a>*/
/* 								<a href="javascript:;" class="close_ts" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!--小规模-->*/
/* 						<div class="_details tab-pane" id="task-tab">*/
/* 							<div class="row" style="margin-top:20px;" id="topTool">*/
/* 								<!--普通搜索-->*/
/* 								<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 									<input type="text" pts=1 sear="customer_name" placeholder="企业名称" autofocus/>*/
/* 								</div>*/
/* 								<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 									<!--<input type="text" pts=1 sear="staff_name" placeholder="申报人" autofocus/>-->*/
/* 									<select style="width: 180px" pts=1 sear="staff_name" class="advandced-search select2-hidden-accssible"  tabindex="-1" aria-hidden="true">*/
/* 										<option value="">申报人</option>*/
/* 									</select>*/
/* 								</div>*/
/* 								<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 									<button type="button" id="search" title="搜索" class="search btn btn-info btn-sm">*/
/* 												<i class="fa fa-search"></i>*/
/* 											</button>*/
/* 								</div>*/
/* 								<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 									<button id="heightsearch" title="高级搜索" type="button" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/* 												<i class="fa fa-filter"></i>*/
/* 											</button>*/
/* 								</div>*/
/* 								<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 									<button title="刷新" class="flush btn btn-info btn-sm" type="button" style="background-color: #32CD32	 !important;">*/
/* 							                    <i class="fa fa-refresh"></i>*/
/* 							                </button>*/
/* 								</div>*/
/* 								<div class="col-sx-4" contentAuthority="103" style=" float: left;margin-right: 5px;">*/
/* 									<label type="button" id="mergeItem" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" title="导入" class="btn btn-info btn-sm position-relative mergeItem" for="leading-in">*/
/* 					                            <i class="fa fa-sign-in"></i>*/
/* 					                       </label>*/
/* 								</div>*/
/* 								<div class="col-sx-4" contentAuthority="289" style=" float: left; margin-right: 5px;">*/
/* 									<button type="button" title="分配申报人" id="moveToClue" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="moveToClue btn addBtn btn-info btn-sm position-relative">*/
/* 										<i class="fa fa-hand-o-right"></i>*/
/* 									</button>*/
/* 								</div>*/
/* 								<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 									<div id="filterBtns" style="display:inline-block;width:290px;height: 36px">*/
/* 										<a href="javascript:void(0);" class="myFilter" style="line-height:32px;*/
/* 												background: #E6E6E6;" data-kind="0"> 查看全部</a>*/
/* 										<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="1"> 我负责的</a>*/
/* 										<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="2"> 我关注的</a>*/
/* 										<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="3"> 我的下属</a>*/
/* 									</div>*/
/* 								</div>*/
/* */
/* 								<!--高级搜索-->*/
/* 								<div id="heightsearch1" class="col-sx-12 heightsearch1" style="margin-top:30px;position: absolute; background: #fff; z-index: 1041;padding: 20px 10px; display: none;">*/
/* 									<div class="row">*/
/* 										<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 											<label>年份</label>*/
/* 											<select>*/
/* 												<option> = </option>*/
/* 											</select>*/
/* 											<select style="width: 180px" gjs=5 sear="year" data-year="true"></select>*/
/* 										</div>*/
/* 										<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 											<label>报税月份</label>*/
/* 											<select>*/
/* 												<option> = </option>*/
/* 											</select>*/
/* 											<select style="width: 180px" gjs=5 class="month" sear="month">*/
/* 												<option value=""> 请选择 </option>*/
/* 												<option value="01"> 1月 </option>*/
/* 												<option value="02"> 2月 </option>*/
/* 												<option value="03"> 3月 </option>*/
/* 												<option value="04"> 4月 </option>*/
/* 												<option value="05"> 5月 </option>*/
/* 												<option value="06"> 6月 </option>*/
/* 												<option value="07"> 7月 </option>*/
/* 												<option value="08"> 8月 </option>*/
/* 												<option value="09"> 9月 </option>*/
/* 												<option value="10"> 10月 </option>*/
/* 												<option value="11"> 11月 </option>*/
/* 												<option value="12"> 12月 </option>*/
/* 											</select>*/
/* 										</div>*/
/* 										<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 											<label>企业名称</label>*/
/* 											<select>*/
/* 												<option> = </option>*/
/* 											</select>*/
/* 											<input type="text" gjs=0 sear="khm_customer.name" />*/
/* 										</div>*/
/* 										<div class="col-sx-4" style=" float: left; margin-bottom:5px;margin-right: 20px;">*/
/* 											<label>申报人</label>*/
/* 											<select>*/
/* 												<option> = </option>*/
/* 											</select>*/
/* 											<!--<input type="text" gjs=1 sear="staff_name">-->*/
/* 											<select style="width: 180px" gjs=1 sear="staff_name" class="advandced-search select2-hidden-accssible"  tabindex="-1" aria-hidden="true">*/
/* 												<option value="">请选择</option>*/
/* 											</select>*/
/* 										</div>*/
/* 										<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 											<label>国税申报</label>*/
/* 											<select>*/
/* 												<option> = </option>*/
/* 											</select>*/
/* 											<select style="width: 180px" gjs=6 tax="true" sear="jzm_tax_details.is_state_tax" data-type="gj">*/
/* 												<option value=""> 请选择 </option>*/
/* 												<option value="1"> 已申报 </option>*/
/* 												<option value="0"> 未申报 </option>*/
/* 											</select>*/
/* 										</div>*/
/* 										<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 											<label>地税申报</label>*/
/* 											<select>*/
/* 												<option> = </option>*/
/* 											</select>*/
/* 											<select style="width: 180px" gjs=6 tax="true" sear="jzm_tax_details.is_local_tax" data-type="gj">*/
/* 												<option value=""> 请选择 </option>*/
/* 												<option value="1"> 已申报 </option>*/
/* 												<option value="0"> 未申报 </option>*/
/* 											</select>*/
/* 										</div>*/
/* 										<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 											<label>工商年报</label>*/
/* 											<select>*/
/* 												<option> = </option>*/
/* 											</select>*/
/* 											<select style="width: 180px" gjs=6 tax="true" sear="jzm_tax_details.is_business_tax" data-type="gj">*/
/* 												<option value=""> 请选择 </option>*/
/* 												<option value="1"> 已申报 </option>*/
/* 												<option value="0"> 未申报 </option>*/
/* 											</select>*/
/* 										</div>*/
/* 										<div class="col-sx-4" style="clear:both;padding-top:10px;text-align:center;">*/
/* 											<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/* 								                        查询*/
/* 								                    </button>*/
/* 											<button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 									                       重置*/
/* 									                    </button>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 							<div class="widget-body">*/
/* 								<div class="custom_table">*/
/* 									<table id="dynamic-table1">*/
/* 										<thead>*/
/* 											<tr class="thColor">*/
/* 												<th class="center">*/
/* 													<label class="pos-rel">*/
/* 														<input type="checkbox" onclick="checkAll(this.checked)" name="check" class="ace"/>*/
/* 														<span class="lbl"></span>*/
/* 													</label>*/
/* 												</th>*/
/* 												<th data-num="1">企业名称</th>*/
/* 												<th data-num="2">任务等级</th>*/
/* 												<th data-num="3">账号</th>*/
/* 												<th data-num="12">国税密码</th>*/
/* 												<th data-num="5">地税密码</th>*/
/* 												<th data-num="6">发票采集</th>*/
/* 												<th data-num="7">申报月份</th>*/
/* 												<th data-num="8">申报所属期</th>*/
/* 												<th data-num="9">申报人</th>*/
/* 												<th data-num="10">税务申报操作</th>*/
/* 												<th data-num="11">税费数据</th>*/
/* 											</tr>*/
/* 										</thead>*/
/* */
/* 										<tbody id="dataList">*/
/* */
/* 										</tbody>*/
/* 									</table>*/
/* */
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!--一般纳税人-->*/
/* 						<div class="_details tab-pane" style="display:none;" id="member-tab">*/
/* 							<div class="row" style="margin-top: 20px;" id="topTool">*/
/* 								<!--普通搜索-->*/
/* 								<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 									<input type="text" pts=1 sear="customer_name" placeholder="企业名称" autofocus/>*/
/* 								</div>*/
/* 								<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 									<!--<input type="text" pts=1 sear="staff_name" placeholder="申报人" autofocus/>-->*/
/* 									<select style="width: 180px" pts=1 sear="staff_name" class="advandced-search select2-hidden-accssible"  tabindex="-1" aria-hidden="true">*/
/* 										<option value="">申报人</option>*/
/* 									</select>*/
/* 								</div>*/
/* 								<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 									<button type="button" id="search" title="搜索" class="search btn btn-info btn-sm">*/
/* 												<i class="fa fa-search"></i>*/
/* 											</button>*/
/* 								</div>*/
/* 								<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 									<button id="height_search" type="button" title="高级搜索" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/* 												<i class="fa fa-filter"></i>*/
/* 											</button>*/
/* 								</div>*/
/* 								<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 									<button class="flush btn btn-info btn-sm" title="刷新" type="button" style="background-color: #32CD32	 !important;">*/
/* 							                    <i class="fa fa-refresh"></i>*/
/* 							                </button>*/
/* 								</div>*/
/* 								<div class="col-sx-4" contentAuthority="103" style=" float: left;margin-right: 5px;">*/
/* 									<label type="button" id="mergeItem" title="导入" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="btn btn-info btn-sm position-relative mergeItem" for="leading-in">*/
/* 					                            <i class="fa fa-sign-in"></i>*/
/* 					                       </label>*/
/* 								</div>*/
/* 								<div class="col-sx-4" contentAuthority="289" style=" float: left; margin-right: 5px;">*/
/* 									<button type="button" id="moveToClue" title="分配申报人"style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="moveToClue btn addBtn btn-info btn-sm position-relative">*/
/* 						                    <i class="fa fa-hand-o-right"></i>*/
/* 						                </button>*/
/* 								</div>*/
/* 								<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 									<div id="filterBtns" style="display:inline-block;width:290px;height: 36px">*/
/* 										<a href="javascript:void(0);" class="myFilter" style="line-height:32px;*/
/* 												background: #E6E6E6;" data-kind="0"> 查看全部</a>*/
/* 										<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="1"> 我负责的</a>*/
/* 										<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="2"> 我关注的</a>*/
/* 										<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="3"> 我的下属</a>*/
/* 									</div>*/
/* 								</div>*/
/* */
/* 								<!--高级搜索-->*/
/* 								<div id="height_search1" class="col-sx-12 heightsearch1" style="margin-top:30px;position: absolute; background: #fff; z-index: 1041;padding: 20px 10px; display: none;">*/
/* 									<div class="row">*/
/* 										<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 											<label>年份</label>*/
/* 											<select>*/
/* 												<option> = </option>*/
/* 											</select>*/
/* 											<select style="width: 180px" gjs=5 sear="year" data-year="true"></select>*/
/* 										</div>*/
/* 										<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 											<label>报税月份</label>*/
/* 											<select>*/
/* 												<option> = </option>*/
/* 											</select>*/
/* 											<select style="width: 180px" class="month" gjs=5 sear="month">*/
/* 												<option value=""> 请选择 </option>*/
/* 												<option value="01"> 1月 </option>*/
/* 												<option value="02"> 2月 </option>*/
/* 												<option value="03"> 3月 </option>*/
/* 												<option value="04"> 4月 </option>*/
/* 												<option value="05"> 5月 </option>*/
/* 												<option value="06"> 6月 </option>*/
/* 												<option value="07"> 7月 </option>*/
/* 												<option value="08"> 8月 </option>*/
/* 												<option value="09"> 9月 </option>*/
/* 												<option value="10"> 10月 </option>*/
/* 												<option value="11"> 11月 </option>*/
/* 												<option value="12"> 12月 </option>*/
/* 											</select>*/
/* 										</div>*/
/* 										<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 											<label>企业名称</label>*/
/* 											<select>*/
/* 												<option> = </option>*/
/* 											</select>*/
/* 											<input type="text" gjs=0 sear="khm_customer.name" />*/
/* 										</div>*/
/* 										<div class="col-sx-4" style=" float: left; margin-bottom:5px; margin-right: 20px;">*/
/* 											<label>申报人</label>*/
/* 											<select>*/
/* 												<option> = </option>*/
/* 											</select>*/
/* 											<!--<input type="text" gjs=1 sear="staff_name">-->*/
/* 											<select style="width: 180px" gjs=1 sear="staff_name" class="advandced-search select2-hidden-accssible"  tabindex="-1" aria-hidden="true">*/
/* 												<option value="">请选择</option>*/
/* 											</select>*/
/* 										</div>*/
/* 										<div class="col-sx-4" style=" float: left; margin-bottom:5px; margin-right: 20px;">*/
/* 											<label>发票认证</label>*/
/* 											<select>*/
/* 												<option> = </option>*/
/* 											</select>*/
/* 											<select style="width: 180px" data-type="gj" gjs=6 tax="true" sear="jzm_tax_details.is_invoice">*/
/* 												<option value=""> 请选择 </option>*/
/* 												<option value="1"> 已认证 </option>*/
/* 												<option value="0"> 未认证 </option>*/
/* 											</select>*/
/* 										</div>*/
/* 										<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 											<label>国税申报</label>*/
/* 											<select>*/
/* 												<option> = </option>*/
/* 											</select>*/
/* 											<select style="width: 180px" gjs=6 tax="true" sear="jzm_tax_details.is_state_tax" data-type="gj">*/
/* 												<option value=""> 请选择 </option>*/
/* 												<option value="1"> 已申报 </option>*/
/* 												<option value="0"> 未申报 </option>*/
/* 											</select>*/
/* 										</div>*/
/* 										<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 											<label>地税申报</label>*/
/* 											<select>*/
/* 												<option> = </option>*/
/* 											</select>*/
/* 											<select style="width: 180px" gjs=6 tax="true" sear="jzm_tax_details.is_local_tax" data-type="gj">*/
/* 												<option value=""> 请选择 </option>*/
/* 												<option value="1"> 已申报 </option>*/
/* 												<option value="0"> 未申报 </option>*/
/* 											</select>*/
/* 										</div>*/
/* 										<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 											<label>工商年报</label>*/
/* 											<select>*/
/* 												<option> = </option>*/
/* 											</select>*/
/* 											<select style="width: 180px" gjs=6 tax="true" sear="jzm_tax_details.is_business_tax" data-type="gj">*/
/* 												<option value=""> 请选择 </option>*/
/* 												<option value="1"> 已申报 </option>*/
/* 												<option value="0"> 未申报 </option>*/
/* 											</select>*/
/* 										</div>*/
/* 										<div class="col-sx-4" style="clear:both;padding-top:10px;text-align:center;">*/
/* 											<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/* 								                        查询*/
/* 								                    </button>*/
/* 											<button type="button" id="rest1" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 									                       重置*/
/* 									                    </button>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 							<div class="widget-body">*/
/* 								<div class="custom_table">*/
/* 									<table id="dynamic-table2">*/
/* 										<thead>*/
/* 											<tr class="thColor">*/
/* 												<th class="center">*/
/* 													<label class="pos-rel">*/
/* 									                        <input type="checkbox" onclick="checkAll(this.checked)" name="check" class="ace"/>*/
/* 									                        <span class="lbl"></span>*/
/* 									                        </label>*/
/* 												</th>*/
/* 												<th data-num="1">企业名称</th>*/
/* 												<th data-num="2">任务等级</th>*/
/* 												<th data-num="3">账号</th>*/
/* 												<th data-num="12">国税密码</th>*/
/* 												<th data-num="5">地税密码</th>*/
/* 												<th data-num="6">发票采集</th>*/
/* 												<th data-num="7">申报月份</th>*/
/* 												<th data-num="8">申报所属期</th>*/
/* 												<th data-num="9">申报人</th>*/
/* 												<th data-num="10">税务申报操作</th>*/
/* 												<th data-num="11">税费数据</th>*/
/* */
/* 											</tr>*/
/* 										</thead>*/
/* */
/* 										<tbody id="dataList1">*/
/* */
/* 										</tbody>*/
/* 									</table>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 							<div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
/* 							<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>*/
/* 							<div id="pageBar" class="pagination"></div>*/
/* 							<div align="right" style="float: right;  width: 10%;">*/
/* 								<select style="width: 100px;" id="changePageNum">*/
/* 									<option value="10">每页10条</option>*/
/* 									<option value="20">每页20条</option>*/
/* 									<option value="50">每页50条</option>*/
/* 									<option value="100">每页100条</option>*/
/* 									<option value="200">每页200条</option>*/
/* 								</select>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div id="templateBox4">*/
/* 				<div id="template4" style="display:none; ">*/
/* 					<div class="row" style="width: 650px;" id="template4Con">*/
/* 						<div class="popup_button" style="display: flex;justify-content: space-between;">*/
/* 							<!--<button class="close_get btn btn-info btn-sm">*/
/* 							关闭*/
/* 						</button>-->*/
/* 							<button class="sure_button btn btn-info btn-sm save" id="save">保存</button>*/
/* 							<button class="sure_button btn btn-info btn-sm save" id="save">提交</button>*/
/* 						</div>*/
/* 						<form class="item_form" role="form" style="margin-top: 20px;">*/
/* 							<div class="form_data">*/
/* 								<label style="width: 100px; text-align: left;">上传文件：</label>*/
/* 								<div class="" style="padding: 2px; margin-left: 70px;">*/
/* 									<div id="fileBox">*/
/* */
/* 									</div>*/
/* 									<div id="uploadBox">*/
/* 										<button type="button" id="upload1" style="outline: none;background-color: #009688 !important; " class="btn btn-info btn-sm position-relative">*/
/* 						                        上传文件*/
/* 						        	</button>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div id="sendMsg" customer_id="" style="height: 30px;line-height: 40px; margin-top:50px;">*/
/* 								<label style="margin-left:-40px">是否发送短信：</label>*/
/* 								<input type="radio" value="1" name="is_send">是*/
/* 								<input type="radio" value="2" name="is_send" checked="true">否*/
/* 							</div>*/
/* 							<h3 style="margin: 20px 0px;">工商年报基础信息</h3>*/
/* 							<div class="form_data">*/
/* 								<label style="">社会信用代码：</label>*/
/* 								<input disabled="true" type="text" field="social_credit_code" value="" style="background-color:#E6E6E6 !important;" />*/
/* 								<label style="">企业名称：</label>*/
/* 								<input disabled="true" type="text" field="name" style="background-color:#E6E6E6 !important;" />*/
/* 							</div>*/
/* 							<div class="form_data">*/
/* 								<label style="">法人姓名：</label>*/
/* 								<input disabled="true" type="text" field="corporation" style="background-color:#E6E6E6 !important;" />*/
/* 								<label style="">法人身份证号：</label>*/
/* 								<input disabled="true" type="text" field="corporation_card" style="background-color:#E6E6E6 !important;" />*/
/* 							</div>*/
/* 							<!--一般纳税人-->*/
/* 							<h3 style="margin: 20px 0px;">纳税基础信息</h3>*/
/* 							<div id="yiban">*/
/* 								<div class="form_data">*/
/* 									<label style="">本期销售额：</label>*/
/* 									<input disabled="true" type="text" field="total" style="background-color:#E6E6E6 !important;" />*/
/* 									<label style="">销项税额：</label>*/
/* 									<input disabled="true" type="text" field="xTax" style="background-color:#E6E6E6 !important;" />*/
/* 								</div>*/
/* 								<div class="form_data">*/
/* 									<label style="">进项税额：</label>*/
/* 									<input disabled="true" type="text" field="jTax" style="background-color:#E6E6E6 !important;" />*/
/* 									<label style="">上期末留底税额：</label>*/
/* 									<input type="text" min="0" field="上期末留抵税额" style="" />*/
/* 								</div>*/
/* 								<div class="form_data">*/
/* 									<label style="">增值税应纳税额：</label>*/
/* 									<input disabled="true" type="text" field="tTax" style="background-color:#E6E6E6 !important;" />*/
/* 									<label style="">本期末留抵税额：</label>*/
/* 									<input disabled="true" type="text" field="lTax" style="background-color:#E6E6E6 !important;" />*/
/* 								</div>*/
/* 								<div class="form_data">*/
/* 									<label style="">本年累计税负：</label>*/
/* 									<input disabled="true" type="text" field="yearTax" style="background-color:#E6E6E6 !important;" />*/
/* 									<label style="">免抵退：</label>*/
/* 									<input disabled="true" type="text" field="免抵退" style="background-color:#E6E6E6 !important;" />*/
/* 								</div>*/
/* 								<div class="form_data">*/
/* 									<label style="">进项税额转出：</label>*/
/* 									<input type="text" field="transfer_out" />*/
/* 									<label style="">本年累计销售额：</label>*/
/* 									<input type="text" field="今年累计销售额" />*/
/* 								</div>*/
/* 							</div>*/
/* 							<!--小规模-->*/
/* 							<div id="xiao">*/
/* 								<div class="form_data">*/
/* 									<label style="">本期销售额：</label>*/
/* 									<input disabled="true" type="text" field="total" style="background-color:#E6E6E6 !important;" />*/
/* 									<label style="">本年累计销售额：</label>*/
/* 									<input disabled="true" type="text" field="今年累计销售额" style="background-color:#E6E6E6 !important;" />*/
/* 								</div>*/
/* 								<div class="form_data">*/
/* 									<label style="width: 130px;">增值税应纳税额合计  ：</label>*/
/* 									<input disabled="true" type="text" field="tTax" style="background-color:#E6E6E6 !important;  float: right;margin-right: 37px;" />*/
/* 								</div>*/
/* 								<div class="form_data">*/
/* 									<label style="width: 220px;text-align: left;">近11个月累积应税服务销售额：</label>*/
/* 									<input disabled="true" type="text" syllable="11month,service" style="background-color:#E6E6E6 !important; float: right;margin-right: 37px;" />*/
/* 								</div>*/
/* 								<div class="form_data">*/
/* 									<label style="width: 220px;text-align: left;">近11个月累积应税货物及劳务销售额：</label>*/
/* 									<input disabled="true" id="" type="text" syllable="11month,goods" style="background-color:#E6E6E6 !important; float: right;margin-right: 37px;" />*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 							<h3 style="margin: 20px 0px;">地税款明细</h3>*/
/* 							<div class="form_data">*/
/* 								<label style="">税款所属时间：</label>*/
/* 								<select multiple="" field="local_time" id="addtime" name="state" addfield="bs" class="addtime select2 select2-hidden-accessible" data-placeholder="选择报税负责人" style="width: 200px;" tabindex="-1" aria-hidden="true">*/
/* 								</select>*/
/* 							</div>*/
/* 							<div class="form_data">*/
/* 								<label style="">企业所得税：</label>*/
/* 								<input type="number" field="local_corporate_tax" placeholder="0" style="margin-right: 15px;" Title1="" />*/
/* 								<label style="">城建税：</label>*/
/* 								<input type="number" field="construction_tax" placeholder="0" style="margin-right: 15px;" Title1="" />*/
/* 							</div>*/
/* 							<div class="form_data">*/
/* 								<label style="">教育费附加：</label>*/
/* 								<input type="number" field="tuition" placeholder="0" style="margin-right: 15px;" Title1="" />*/
/* 								<label style="">地方教育附加：</label>*/
/* 								<input type="number" field="local_tuition" placeholder="0" style="margin-right: 15px;" Title1="" />*/
/* 							</div>*/
/* 							<div class="form_data">*/
/* 								<label style="">个人所得税：</label>*/
/* 								<input type="number" field="individual_tax" placeholder="0" style="margin-right: 15px;" Title1="" />*/
/* 								<label style="">印花税：</label>*/
/* 								<input type="number" field="printing" placeholder="0" style="margin-right: 15px;" Title1="" />*/
/* 							</div>*/
/* 							<div class="form_data">*/
/* 								<label style="">堤围费/水利基金：</label>*/
/* 								<input type="number" field="water_fund" placeholder="0" style="margin-right: 15px;" Title1="" />*/
/* 								<label style="">其他税费：</label>*/
/* 								<input type="number" field="local_other_tax" placeholder="0" style="margin-right: 15px;" Title1="" />*/
/* 							</div>*/
/* */
/* 							<h3 style="margin: 20px 0px;">国税税款明细</h3>*/
/* 							<div class="form_data">*/
/* 								<label style="">税款所属时间：</label>*/
/* 								<select style="width: 85px;" id="" name="state" field="state_time2" addfield="bs" class="addtime">*/
/* 								</select>*/
/* 								-*/
/* 								<select style="width: 85px;" field="state_time1" id="" name="state" addfield="bs" class="addtime ">*/
/* 								</select>*/
/* 							</div>*/
/* 						*/
/* 							<div class="form_data">*/
/* 								<label style="">企业所得税：</label>*/
/* 								<input type="number" field="corporate_tax" placeholder="0" style="margin-right: 15px;" Title1="" />*/
/* 								<label style="">增值税：</label>*/
/* 								<input type="number" field="state_appreciation" placeholder="0" style="margin-right: 15px;" Title1="" />*/
/* 							</div>*/
/* 							<div class="form_data">*/
/* 								<label style="">文化事业建设费：</label>*/
/* 								<input type="number" field="culture" placeholder="0" style="margin-right: 15px;" Title1="" />*/
/* 								<label style="">消费税：</label>*/
/* 								<input type="number" field="excise_tax" placeholder="0" style="margin-right: 15px;" Title1="" />*/
/* */
/* 							</div>*/
/* 							<div class="form_data">*/
/* 								<label style="">其他税费：</label>*/
/* 								<input type="number" field="state_other_tax" placeholder="0" style="margin-right: 15px;" Title1="" />*/
/* 							</div>*/
/* */
/* 							<h3 style="margin: 20px 0px;">企业资产状况信息</h3>*/
/* 							<div class="form_data">*/
/* 								<label style="">所属时间：</label>*/
/* 								<select style="width: 85px;" field="business_time2" id="" name="state" addfield="bs" class="addtime1 ">*/
/* 								</select>*/
/* 								<!--<!*/
/* 								<select style="width: 85px;" field="business_time1" id="" name="state" addfield="bs" class="addtime1 ">*/
/* 								</select>-->*/
/* 							</div>*/
/* 							<div class="form_data">*/
/* 								<label style="">资产总额（万元）：</label>*/
/* 								<input type="number" placeholder="0" field="total_assets" style="margin-right: 15px;" Title1="" />*/
/* 								<label style="">所有者权益合计：</label>*/
/* 								<input type="number" placeholder="0" field="profit_total" style="margin-right: 15px;" Title1="" />*/
/* 							</div>*/
/* 							<div class="form_data">*/
/* 								<label style="">营业总收入（万元）：</label>*/
/* 								<input type="number" placeholder="0" field="operating_income" style="margin-right: 15px;" Title1="" />*/
/* 								<label style="">营业中总收入（万元）：</label>*/
/* 								<input type="number" placeholder="0" field="operating_income_total" style="margin-right: 15px;" Title1="" />*/
/* 							</div>*/
/* 							<div class="form_data">*/
/* 								<label style="">利润总额（万元）：</label>*/
/* 								<input type="number" placeholder="0" field="operating_profit" style="margin-right: 15px;" Title1="" />*/
/* 								<label style="">负债总额：（万元）</label>*/
/* 								<input type="number" placeholder="0" field="labilities" style="margin-right: 15px;" Title1="" />*/
/* 							</div>*/
/* 							<div class="form_data">*/
/* 								<label style="">净利润（万元）：</label>*/
/* 								<input type="number" placeholder="0" field="net_profit" style="margin-right: 15px;" Title1="" />*/
/* 								<label style="">纳税总额：（万元）</label>*/
/* 								<input type="number" placeholder="0" field="tax_total" style="margin-right: 15px;" Title1="" />*/
/* 							</div>*/
/* 							<!--<h3 style="margin: 20px 0px;">税务年报信息2</h3>*/
/* 							<div class="form_data">*/
/* 								<label style="">所属时间：</label>*/
/* 								<select style="width: 85px;" id="" name="state" field="taxation_time2" addfield="bs" class="addtime1">*/
/* 								</select>*/
/* 								<!--<!*/
/* 								<select style="width: 85px;" field="taxation_time1" id="" name="state" addfield="bs" class="addtime1 ">*/
/* 								</select>-->*/
/* 							<!--</div>-->*/
/* */
/* 						</form>*/
/* 					</div>*/
/* */
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<!--销项采集，进项采集-->*/
/* 			<div id="invoice_collect" class="widget-box transparent" id="recent-box" style="display:none ;">*/
/* 				<div style="width:1000px;">*/
/* 					<div style="padding:10px 0;">*/
/* 						<h3 style="font-size:16px;">销项采集</h3>*/
/* 					</div>*/
/* 					<div>*/
/* 						<div class="layui-collapse">*/
/* 							<div class="layui-colla-item">*/
/* 								<h2 class="layui-colla-title">增值税专用发票</h2>*/
/* 								<div class="layui-colla-content">*/
/* 									<div class="custom_table">*/
/* 										<table>*/
/* 											<thead>*/
/* 												<tr>*/
/* 													<th>序号</th>*/
/* 													<th>份数</th>*/
/* 													<th>金额</th>*/
/* 													<th>税率</th>*/
/* 													<th>税额</th>*/
/* 													<th>计税方式</th>*/
/* 													<th>征税项目</th>*/
/* 													<th>是否作废</th>*/
/* 													<th>是否即征即退</th>*/
/* 												</tr>*/
/* 											</thead>*/
/* 											<tbody id="x1">*/
/* 												<tr style="display:none;" class="model">*/
/* 													<td class="sequence"></td>*/
/* 													<td>*/
/* 														<input type="text" field="invoice" />*/
/* 													</td>*/
/* 													<td>*/
/* 														<input type="text" field="money" />*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="tax_rate">*/
/* 															<option value="0">0</option>*/
/* 															<option value="3">3%</option>*/
/* 															<option value="4">4%</option>*/
/* 															<option value="5">5%</option>*/
/* 															<option value="6">6%</option>*/
/* 															<option value="11">11%</option>*/
/* 															<option value="13">13%</option>*/
/* 															<option value="17">17%</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<input type="text" field="amount_of_tax" />*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="charge_mode">*/
/* 															<option value="1">一般计税</option>*/
/* 															<option value="2">简易征税</option>*/
/* 															<option value="3">免税</option>*/
/* 															<option value="4">免抵退</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="tax_project">*/
/* 															<option value="1">应税货物</option>*/
/* 															<option value="2">应税劳务</option>*/
/* 															<option value="3">应税服务不动产</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="is_invalid">*/
/* 															<option value="1">已作废</option>*/
/* 															<option value="0">未作废</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="whether_tax">*/
/* 															<option value="1">是</option>*/
/* 															<option value="0">否</option>*/
/* 														</select>*/
/* 													</td>*/
/* 												</tr>*/
/* 											</tbody>*/
/* 											<tfoot>*/
/* 												<tr>*/
/* 													<td>总计</td>*/
/* 													<td total="invoice"></td>*/
/* 													<td total="money"></td>*/
/* 													<td></td>*/
/* 													<td total="amount_of_tax"></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 												</tr>*/
/* 											</tfoot>*/
/* 										</table>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="layui-colla-item">*/
/* 								<h2 class="layui-colla-title">税控机动车专用发票</h2>*/
/* 								<div class="layui-colla-content">*/
/* 									<div class="custom_table">*/
/* 										<table>*/
/* 											<thead>*/
/* 												<tr>*/
/* 													<th>序号</th>*/
/* 													<th>份数</th>*/
/* 													<th>金额</th>*/
/* 													<th>税率</th>*/
/* 													<th>税额</th>*/
/* 													<th>计税方式</th>*/
/* 													<th>征税项目</th>*/
/* 													<th>是否作废</th>*/
/* 													<th>是否即征即退</th>*/
/* 												</tr>*/
/* 											</thead>*/
/* 											<tbody id="x2">*/
/* 												<tr style="display:none;" class="model">*/
/* 													<td class="sequence"></td>*/
/* 													<td>*/
/* 														<input type="text" field="invoice" />*/
/* 													</td>*/
/* 													<td>*/
/* 														<input type="text" field="money" />*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="tax_rate">*/
/* 															<option value="0">0</option>*/
/* 															<option value="3">3%</option>*/
/* 															<option value="4">4%</option>*/
/* 															<option value="5">5%</option>*/
/* 															<option value="6">6%</option>*/
/* 															<option value="11">11%</option>*/
/* 															<option value="13">13%</option>*/
/* 															<option value="17">17%</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<input type="text" field="amount_of_tax" />*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="charge_mode">*/
/* 															<option value="1">一般计税</option>*/
/* 															<option value="2">简易征税</option>*/
/* 															<option value="3">免税</option>*/
/* 															<option value="4">免抵退</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="tax_project">*/
/* 															<option value="1">应税货物</option>*/
/* 															<option value="2">应税劳务</option>*/
/* 															<option value="3">应税服务不动产</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="is_invalid">*/
/* 															<option value="1">已作废</option>*/
/* 															<option value="0">未作废</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="whether_tax">*/
/* 															<option value="1">是</option>*/
/* 															<option value="0">否</option>*/
/* 														</select>*/
/* 													</td>*/
/* 												</tr>*/
/* 											</tbody>*/
/* 											<tfoot>*/
/* 												<tr>*/
/* 													<td>总计</td>*/
/* 													<td total="invoice"></td>*/
/* 													<td total="money"></td>*/
/* 													<td></td>*/
/* 													<td total="amount_of_tax"></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 												</tr>*/
/* 											</tfoot>*/
/* 										</table>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="layui-colla-item">*/
/* 								<h2 class="layui-colla-title">普通发票</h2>*/
/* 								<div class="layui-colla-content">*/
/* 									<div class="custom_table">*/
/* 										<table>*/
/* 											<thead>*/
/* 												<tr>*/
/* 													<th>序号</th>*/
/* 													<th>份数</th>*/
/* 													<th>金额</th>*/
/* 													<th>税率</th>*/
/* 													<th>税额</th>*/
/* 													<th>计税方式</th>*/
/* 													<th>征税项目</th>*/
/* 													<th>是否作废</th>*/
/* 													<th>是否即征即退</th>*/
/* 												</tr>*/
/* 											</thead>*/
/* 											<tbody id="x3">*/
/* 												<tr style="display:none;" class="model">*/
/* 													<td class="sequence"></td>*/
/* 													<td>*/
/* 														<input type="text" field="invoice" />*/
/* 													</td>*/
/* 													<td>*/
/* 														<input type="text" field="money" />*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="tax_rate">*/
/* 															<option value="0">0</option>*/
/* 															<option value="3">3%</option>*/
/* 															<option value="4">4%</option>*/
/* 															<option value="5">5%</option>*/
/* 															<option value="6">6%</option>*/
/* 															<option value="11">11%</option>*/
/* 															<option value="13">13%</option>*/
/* 															<option value="17">17%</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<input type="text" field="amount_of_tax" />*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="charge_mode">*/
/* 															<option value="1">一般计税</option>*/
/* 															<option value="2">简易征税</option>*/
/* 															<option value="3">免税</option>*/
/* 															<option value="4">免抵退</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="tax_project">*/
/* 															<option value="1">应税货物</option>*/
/* 															<option value="2">应税劳务</option>*/
/* 															<option value="3">应税服务不动产</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="is_invalid">*/
/* 															<option value="1">已作废</option>*/
/* 															<option value="0">未作废</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="whether_tax">*/
/* 															<option value="1">是</option>*/
/* 															<option value="0">否</option>*/
/* 														</select>*/
/* 													</td>*/
/* 												</tr>*/
/* 											</tbody>*/
/* 											<tfoot>*/
/* 												<tr>*/
/* 													<td>总计</td>*/
/* 													<td total="invoice"></td>*/
/* 													<td total="money"></td>*/
/* 													<td></td>*/
/* 													<td total="amount_of_tax"></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 												</tr>*/
/* 											</tfoot>*/
/* 										</table>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<!--<div class="layui-colla-item">*/
/* 								<h2 class="layui-colla-title">未开具发票</h2>*/
/* 								<div class="layui-colla-content">*/
/* 									<div class="custom_table">*/
/* 										<table>*/
/* 											<thead>*/
/* 												<tr>*/
/* 													<th>序号</th>*/
/* 													<th>业务类型</th>*/
/* 													<th>金额</th>*/
/* 													<th>税额</th>*/
/* 													<th>税率</th>*/
/* 													<th>计税方式</th>*/
/* 													<th>征税项目</th>*/
/* 													<th>是否作废</th>*/
/* 													<th>是否即征即退</th>*/
/* 													<th>税款所属期</th>*/
/* 												</tr>*/
/* 											</thead>*/
/* 											<tbody id="x4">*/
/* 												<tr style="display:none;" class="model">*/
/* 													<td class="sequence"></td>*/
/* 													<td>*/
/* 													<select field="type">*/
/* 								    							<option value="1">注册公司</option>*/
/* 																<option value="2">变更公司</option>*/
/* 																<option value="3">股权变更</option>*/
/* 																<option value="4">注册商标</option>*/
/* 								    							<option value="5">注销公司</option>*/
/* 																<option value="6">申请一般纳税人</option>*/
/* 																<option value="7">记账报税</option>*/
/* 					    						  </select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<input type="text" field="money" />*/
/* 													</td>*/
/* 													<td>*/
/* 														<input type="text" field="amount_of_tax" />*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="tax_rate">*/
/* 															<option value="0">0</option>*/
/* 															<option value="3">3%</option>*/
/* 															<option value="4">4%</option>*/
/* 															<option value="5">5%</option>*/
/* 															<option value="6">6%</option>*/
/* 															<option value="11">11%</option>*/
/* 															<option value="13">13%</option>*/
/* 															<option value="17">17%</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="charge_mode">*/
/* 															<option value="1">一般计税</option>*/
/* 															<option value="2">简易征税</option>*/
/* 															<option value="3">免税</option>*/
/* 															<option value="4">免抵退</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="tax_project">*/
/* 															<option value="1">应税货物</option>*/
/* 															<option value="2">应税劳务</option>*/
/* 															<option value="3">应税服务不动产</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="is_invalid">*/
/* 															<option value="1">已作废</option>*/
/* 															<option value="0">未作废</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="whether_tax">*/
/* 															<option value="1">是</option>*/
/* 															<option value="0">否</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<input type="text" field="tax_money_period" />*/
/* 													</td>*/
/* 												</tr>*/
/* 											</tbody>*/
/* 											<tfoot>*/
/* 												<tr>*/
/* 													<td>总计</td>*/
/* 													<td></td>*/
/* 													<td total="money"></td>*/
/* 													<td total="amount_of_tax"></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													*/
/* 												</tr>*/
/* 											</tfoot>*/
/* 										</table>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>-->*/
/* 						<div class="layui-colla-item">*/
/* 								<h2 class="layui-colla-title">未开具发票</h2>*/
/* 								<div class="layui-colla-content">*/
/* 									<div class="custom_table">*/
/* 										<table>*/
/* 											<thead>*/
/* 												<tr>*/
/* 													<th>序号</th>*/
/* 													<th>业务类型</th>*/
/* 													<th>金额</th>*/
/* 													<th>税率</th>*/
/* 													<th>税额</th>*/
/* 													*/
/* 													<th>计税方式</th>*/
/* 													<th>征税项目</th>*/
/* 													<th>是否作废</th>*/
/* 													<th>是否即征即退</th>*/
/* 													<th>税款所属期</th>*/
/* 												</tr>*/
/* 											</thead>*/
/* 											<tbody id="x4">*/
/* 												<tr style="display:none;" class="model">*/
/* 													<td class="sequence"></td>*/
/* 													<td>*/
/* 													<select field="type">*/
/* 								    							<option value="1">注册公司</option>*/
/* 																<option value="2">变更公司</option>*/
/* 																<option value="3">股权变更</option>*/
/* 																<option value="4">注册商标</option>*/
/* 								    							<option value="5">注销公司</option>*/
/* 																<option value="6">申请一般纳税人</option>*/
/* 																<option value="7">记账报税</option>*/
/* 					    						  </select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<input type="text" field="money" />*/
/* 													</td>*/
/* 													*/
/* 													<td>*/
/* 														<select field="tax_rate">*/
/* 															<option value="0">0</option>*/
/* 															<option value="3">3%</option>*/
/* 															<option value="4">4%</option>*/
/* 															<option value="5">5%</option>*/
/* 															<option value="6">6%</option>*/
/* 															<option value="11">11%</option>*/
/* 															<option value="13">13%</option>*/
/* 															<option value="17">17%</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<input type="text" field="amount_of_tax" />*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="charge_mode">*/
/* 															<option value="1">一般计税</option>*/
/* 															<option value="2">简易征税</option>*/
/* 															<option value="3">免税</option>*/
/* 															<option value="4">免抵退</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="tax_project">*/
/* 															<option value="1">应税货物</option>*/
/* 															<option value="2">应税劳务</option>*/
/* 															<option value="3">应税服务不动产</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="is_invalid">*/
/* 															<option value="1">已作废</option>*/
/* 															<option value="0">未作废</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="whether_tax">*/
/* 															<option value="1">是</option>*/
/* 															<option value="0">否</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<input field="tax_money_period" type="text" />*/
/* 													</td>*/
/* 												</tr>*/
/* 											</tbody>*/
/* 											<tfoot>*/
/* 												<tr>*/
/* 													<td>总计</td>*/
/* 													<td></td>*/
/* 													<td total="money"></td>*/
/* 													<td total="amount_of_tax"></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 												</tr>*/
/* 											</tfoot>*/
/* 										</table>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="layui-colla-item">*/
/* 								<h2 class="layui-colla-title">纳税检查调整</h2>*/
/* 								<div class="layui-colla-content">*/
/* 									<div class="custom_table">*/
/* 										<table>*/
/* 											<thead>*/
/* 												<tr>*/
/* 													<th>序号</th>*/
/* 													<th>业务类型</th>*/
/* 													<th>金额</th>*/
/* 													*/
/* 													*/
/* 													<th>税率</th>*/
/* 													<th>税额</th>*/
/* 													<th>计税方式</th>*/
/* 													<th>征税项目</th>*/
/* 													<th>是否作废</th>*/
/* 													<th>是否即征即退</th>*/
/* 													<th>税款所属期</th>*/
/* 												</tr>*/
/* 											</thead>*/
/* 											<tbody id="x5">*/
/* 												<tr style="display:none;" class="model">*/
/* 													<td class="sequence"></td>*/
/* 													<td>*/
/* 													<select field="type">*/
/* 								    							<option value="1">注册公司</option>*/
/* 																<option value="2">变更公司</option>*/
/* 																<option value="3">股权变更</option>*/
/* 																<option value="4">注册商标</option>*/
/* 								    							<option value="5">注销公司</option>*/
/* 																<option value="6">申请一般纳税人</option>*/
/* 																<option value="7">记账报税</option>*/
/* 					    						  </select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<input type="text" field="money" />*/
/* 													</td>*/
/* 													*/
/* 													<td>*/
/* 														<select field="tax_rate">*/
/* 															<option value="0">0</option>*/
/* 															<option value="3">3%</option>*/
/* 															<option value="4">4%</option>*/
/* 															<option value="5">5%</option>*/
/* 															<option value="6">6%</option>*/
/* 															<option value="11">11%</option>*/
/* 															<option value="13">13%</option>*/
/* 															<option value="17">17%</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<input type="text" field="amount_of_tax" />*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="charge_mode">*/
/* 															<option value="1">一般计税</option>*/
/* 															<option value="2">简易征税</option>*/
/* 															<option value="3">免税</option>*/
/* 															<option value="4">免抵退</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="tax_project">*/
/* 															<option value="1">应税货物</option>*/
/* 															<option value="2">应税劳务</option>*/
/* 															<option value="3">应税服务不动产</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="is_invalid">*/
/* 															<option value="1">已作废</option>*/
/* 															<option value="0">未作废</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="whether_tax">*/
/* 															<option value="1">是</option>*/
/* 															<option value="0">否</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<input field="tax_money_period" type="text" />*/
/* 													</td>*/
/* 												</tr>*/
/* 											</tbody>*/
/* 											<tfoot>*/
/* 												<tr>*/
/* 													<td>总计</td>*/
/* 													<td></td>*/
/* 													<td total="money"></td>*/
/* 													<td total="amount_of_tax"></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 												</tr>*/
/* 											</tfoot>*/
/* 										</table>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="layui-colla-item">*/
/* 								<h2 class="layui-colla-title">地税开具其他发票及未开票销售额</h2>*/
/* 								<div class="layui-colla-content">*/
/* 									<div class="custom_table">*/
/* 										<table>*/
/* 											<thead>*/
/* 												<tr>*/
/* 													<th>序号</th>*/
/* 													<th>份数</th>*/
/* 													<th>业务类型</th>*/
/* 													<th>金额</th>*/
/* 													*/
/* 													<th>税率</th>*/
/* 													<th>税额</th>*/
/* 													<th>计税方式</th>*/
/* 													<th>征税项目</th>*/
/* 													<th>是否作废</th>*/
/* 													<th>是否即征即退</th>*/
/* 													<th>税款所属期</th>*/
/* 												</tr>*/
/* 											</thead>*/
/* 											<tbody id="x6">*/
/* 												<tr style="display:none;" class="model">*/
/* 													<td class="sequence"></td>*/
/* 													<td>*/
/* 														<input type="text" field="invoice" />*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="type">*/
/* 								    							<option value="1">注册公司</option>*/
/* 																<option value="2">变更公司</option>*/
/* 																<option value="3">股权变更</option>*/
/* 																<option value="4">注册商标</option>*/
/* 								    							<option value="5">注销公司</option>*/
/* 																<option value="6">申请一般纳税人</option>*/
/* 																<option value="7">记账报税</option>*/
/* 					    						  </select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<input field="money" type="text" />*/
/* 													</td>*/
/* 													*/
/* 													<td>*/
/* 														<select field="tax_rate">*/
/* 															<option value="0">0</option>*/
/* 															<option value="3">3%</option>*/
/* 															<option value="4">4%</option>*/
/* 															<option value="5">5%</option>*/
/* 															<option value="6">6%</option>*/
/* 															<option value="11">11%</option>*/
/* 															<option value="13">13%</option>*/
/* 															<option value="17">17%</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<input field="amount_of_tax" type="text" />*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="charge_mode">*/
/* 															<option value="1">一般计税</option>*/
/* 															<option value="2">简易征税</option>*/
/* 															<option value="3">免税</option>*/
/* 															<option value="4">免抵退</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="tax_project">*/
/* 															<option value="1">应税货物</option>*/
/* 															<option value="2">应税劳务</option>*/
/* 															<option value="3">应税服务不动产</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="is_invalid">*/
/* 															<option value="1">已作废</option>*/
/* 															<option value="0">未作废</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="whether_tax">*/
/* 															<option value="1">是</option>*/
/* 															<option value="0">否</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<input field="tax_money_period" type="text" />*/
/* 													</td>*/
/* 												</tr>*/
/* 											</tbody>*/
/* 											<tfoot>*/
/* 												<tr>*/
/* 													<td>总计</td>*/
/* 													<td total="invoice"></td>*/
/* 													<td></td>*/
/* 													<td total="money"></td>*/
/* 													<td total="amount_of_tax"></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 												</tr>*/
/* 											</tfoot>*/
/* 										</table>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div style="display:none;" class="jxcj">*/
/* 					<div style="padding:10px 0;">*/
/* 						<h3 style="font-size:16px;">进项采集</h3>*/
/* 					</div>*/
/* 					<div>*/
/* 						<div class="layui-collapse" lay-accordion>*/
/* 							<div class="layui-colla-item">*/
/* 								<h2 class="layui-colla-title">增值税专用发票</h2>*/
/* 								<div class="layui-colla-content">*/
/* 									<div class="custom_table">*/
/* 										<table>*/
/* 											<thead>*/
/* 												<tr>*/
/* 													<th>序号</th>*/
/* 													<th>份数</th>*/
/* 													<th>金额</th>*/
/* 													<th>税率</th>*/
/* 													<th>税额</th>*/
/* 													<th>是否即征即退</th>*/
/* 													<th>是否抵扣</th>*/
/* 													<th>申报所属期</th>*/
/* 													<th>认证日期</th>*/
/* 												</tr>*/
/* 											</thead>*/
/* 											<tbody id="j1">*/
/* 												<tr style="display:none;" class="model">*/
/* 													<td class="sequence"></td>*/
/* 													<td>*/
/* 														<input field="invoice" type="text" />*/
/* 													</td>*/
/* 													<td>*/
/* 														<input field="money" type="text" />*/
/* 													</td>*/
/* 													*/
/* 													<td>*/
/* 														<select field="tax_rate">*/
/* 															<option value="0">0</option>*/
/* 															<option value="3">3%</option>*/
/* 															<option value="4">4%</option>*/
/* 															<option value="5">5%</option>*/
/* 															<option value="6">6%</option>*/
/* 															<option value="11">11%</option>*/
/* 															<option value="13">13%</option>*/
/* 															<option value="17">17%</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<input field="amount_of_tax" type="text" />*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="whether_tax">*/
/* 															<option value="1">是</option>*/
/* 															<option value="0">否</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="deductible">*/
/* 															<option value="1">是</option>*/
/* 															<option value="0">否</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<input field="tax_money_period" type="text" />*/
/* 													</td>*/
/* 													<td>*/
/* 														<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 															<input class="date-timepicker1" field="auth_time" style="height: 30px; width: 150px;">*/
/* 															<span class="input-group-addon" style="width:30px;height:30px;">*/
/* 							                            <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 							                        </span>*/
/* 														</div>*/
/* 													</td>*/
/* 												</tr>*/
/* 											</tbody>*/
/* 											<tfoot>*/
/* 												<tr>*/
/* 													<td>总计</td>*/
/* 													<td total="invoice"></td>*/
/* 													<td total="money"></td>*/
/* 													<td total="amount_of_tax"></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 												</tr>*/
/* 											</tfoot>*/
/* 										</table>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="layui-colla-item">*/
/* 								<h2 class="layui-colla-title">税控机动车发票</h2>*/
/* 								<div class="layui-colla-content">*/
/* 									<div class="custom_table">*/
/* 										<table>*/
/* 											<thead>*/
/* 												<tr>*/
/* 													<th>序号</th>*/
/* 													<th>份数</th>*/
/* 													<th>金额</th>*/
/* 													<th>税率</th>*/
/* 													<th>税额</th>													*/
/* 													<th>是否即征即退</th>*/
/* 													<th>是否抵扣</th>*/
/* 												</tr>*/
/* 											</thead>*/
/* 											<tbody id="j2">*/
/* 												<tr style="display:none;" class="model">*/
/* 													<td class="sequence"></td>*/
/* 													<td>*/
/* 														<input field="invoice" type="text" />*/
/* 													</td>*/
/* 													<td>*/
/* 														<input field="money" type="text" />*/
/* 													</td>*/
/* 													*/
/* 													<td>*/
/* 														<select field="tax_rate">*/
/* 															<option value="0">0</option>*/
/* 															<option value="3">3%</option>*/
/* 															<option value="4">4%</option>*/
/* 															<option value="5">5%</option>*/
/* 															<option value="6">6%</option>*/
/* 															<option value="11">11%</option>*/
/* 															<option value="13">13%</option>*/
/* 															<option value="17">17%</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<input field="amount_of_tax" type="text" />*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="whether_tax">*/
/* 															<option value="1">是</option>*/
/* 															<option value="0">否</option>*/
/* 														</select>*/
/* 													</td>*/
/* 													<td>*/
/* 														<select field="deductible">*/
/* 															<option value="1">是</option>*/
/* 															<option value="0">否</option>*/
/* 														</select>*/
/* 													</td>*/
/* 												</tr>*/
/* 											</tbody>*/
/* 											<tfoot>*/
/* 												<tr>*/
/* 													<td>总计</td>*/
/* 													<td total="invoice"></td>*/
/* 													<td total="money"></td>*/
/* 													<td total="amount_of_tax"></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 													<td></td>*/
/* 												</tr>*/
/* 											</tfoot>*/
/* 										</table>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<!-- 一般纳税人 -->*/
/* 			<div id="template1" style="display:none; " class="template">*/
/* 				<div class="row">*/
/* 					<form class="item_form" role="form" style="">*/
/* 						<div class="form_data">*/
/* 							<label style="width: 110px;">企业名称：</label>*/
/* 							<input type="text" disabled="true" style="background-color:#E6E6E6 !important;" />*/
/* 							<label style="width: 125px;">本期销售额：</label>*/
/* 							<input type="number" value="0" disabled="true" style="background-color:#E6E6E6 !important;" />*/
/* 						</div>*/
/* 						<div class="form_data">*/
/* 							<label style="width: 110px;">销项税额：</label>*/
/* 							<input type="number" value="0" disabled="true" style="background-color:#E6E6E6 !important;" />*/
/* 							<label style="width: 125px;">进项税额：</label>*/
/* 							<input type="number" value="0" disabled="true" style="background-color:#E6E6E6 !important;" />*/
/* 						</div>*/
/* 						<div class="form_data">*/
/* 							<label style="width: 110px; ">上期末留底税额：</label>*/
/* 							<input type="number" value="0" disabled="true" style="background-color:#E6E6E6 !important;" />*/
/* 							<label style="width: 125px; ">增值税应纳税额：</label>*/
/* 							<input type="number" value="0" disabled="true" style="background-color:#E6E6E6 !important;" />*/
/* 						</div>*/
/* 						<div class="form_data">*/
/* 							<label style="width: 110px;">免抵退：</label>*/
/* 							<input type="number" value="0" disabled="true" style="background-color:#E6E6E6 !important;" />*/
/* 							<label style="width: 125px;">本年累计税负：</label>*/
/* 							<input type="number" value="0" disabled="true" style="background-color:#E6E6E6 !important;" />*/
/* 						</div>*/
/* 						<div class="form_data">*/
/* 							<label style="width: 110px;">期末留抵税额：</label>*/
/* 							<input type="number" value="0" disabled="true" style="margin-right: 15px;background-color:#E6E6E6 !important;" />*/
/* 							<label style="width: 110px;">印花税：</label>*/
/* 							<input type="number" value="0" Title1="printing">*/
/* 						</div>*/
/* 						<div class="form_data">*/
/* 							<label style="width: 110px;">企业所得税：</label>*/
/* 							<input type="number" value="0" style="margin-right: 15px;" Title1="corporate_tax" />*/
/* 							<label style="width: 110px;">城建税：</label>*/
/* 							<input type="number" value="0" style="margin-right: 15px;" Title1="construction_tax" />*/
/* 						</div>*/
/* 						<div class="form_data">*/
/* 							<label style="width: 110px;">教育附加税：</label>*/
/* 							<input type="number" value="0" style="margin-right: 15px;" Title1="tuition">*/
/* 							<label style="width: 110px; ">地方教育费附加：</label>*/
/* 							<input type="number" value="0" style="margin-right: 15px;" Title1="local_tuition" />*/
/* 						</div>*/
/* 						<div class="form_data">*/
/* 							<label style="width: 110px;">个税：</label>*/
/* 							<input type="number" value="0" style="margin-right: 15px;" Title1="individual_tax" />*/
/* 							<label style="width: 110px;">文化事业建设税：</label>*/
/* 							<input type="number" value="0" style="margin-right: 15px;" Title1="culture" />*/
/* 						</div>*/
/* 						<div class="form_data">*/
/* 							<label style="width: 110px;">消费税：</label>*/
/* 							<input type="number" value="0" style="margin-right: 15px;" Title1="excise_tax">*/
/* 							<label style="width: 110px;">堤围费/水利基金：</label>*/
/* 							<input type="number" value="0" style="margin-right: 15px;" Title1="water_fund" />*/
/* 						</div>*/
/* 						<div class="form_data">*/
/* 							<label style="width: 110px; ">国税其他税费：</label>*/
/* 							<input type="number" value="0" style="margin-right: 15px;" Title1="state_other_tax" />*/
/* 							<label style="width: 110px; ">地税其他税费：</label>*/
/* 							<input type="number" value="0" style="margin-right: 15px;" Title1="local_other_tax" />*/
/* 						</div>*/
/* 						<div class="form_data">*/
/* 							<label style="width: 110px;">本年累计销售额：</label>*/
/* 							<input type="number" value="0" style="margin-right: 15px;" Title1="今年累计销售额" />*/
/* 							<label style="width: 110px;">进项税额转出：</label>*/
/* 							<input type="number" value="0" style="margin-right: 15px;" Title1="transfer_out" />*/
/* 						</div>*/
/* 						<div class="" style="padding: 2px; margin-left: 70px;">*/
/* 							<div id="fileBox">*/
/* */
/* 							</div>*/
/* 							<div id="uploadBox">*/
/* 								<button type="button" id="upload1" style="outline: none;background-color: #009688 !important; margin-top: 20px;" class="btn btn-info btn-sm position-relative">*/
/* 						                        上传文件*/
/* 						        	</button>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="sendMsg" customer_id="" style="height: 30px;line-height: 40px; margin-top: 100px;">*/
/* 							<label style="margin-left:-15px">是否发送短信：</label>*/
/* 							<input type="radio" value="1" name="is_send">是*/
/* 							<input type="radio" value="2" name="is_send" checked="true">否*/
/* 						</div>*/
/* 					</form>*/
/* 					<div class="popup_button">*/
/* 						<button class="close_get btn btn-info btn-sm">关闭</button>*/
/* 						<button class="sure_button btn btn-info btn-sm save" id="save">保存</button>*/
/* 						<button class="sure_button btn btn-info btn-sm save" id="save">提交</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="label_popup" id="export" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 				<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 			            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 					<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 						<span style="display: inline-block;">导入报税</span>*/
/* 						<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 					</div>*/
/* 					<div style="padding: 10px 50px;">*/
/* 						<input type="file" width="200px" style="margin: auto;" id="efile" />*/
/* 						<!--<hr>-->*/
/* 					</div>*/
/* 					<div style="padding:15px;text-align:right;">*/
/* 						<button id="ghItem" class=" btn">报税模板</button>*/
/* 						<button class="btn btn-info  submit" style="padding: 6px; border-radius: 0px;">保存</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div id="small-scale" style="display:none;">*/
/* 				<h3 style="margin: 20px 0px;">工商年报基础信息</h3>*/
/* 				<div class="form_data" style="margin-top:15px;">*/
/* 					<label style="">社会信用代码：</label>*/
/* 					<input disabled="true" type="text" field="social_credit_code" value="" style="background-color:#E6E6E6 !important;" />*/
/* 					<label style="">企业名称：</label>*/
/* 					<input disabled="true" type="text" field="name" style="background-color:#E6E6E6 !important;" />*/
/* 				</div>*/
/* 				<div class="form_data" style="margin-top:15px;">*/
/* 					<label style="">法人姓名：</label>*/
/* 					<input disabled="true" type="text" field="corporation" style="background-color:#E6E6E6 !important;" />*/
/* 					<label style="">法人身份证号：</label>*/
/* 					<input disabled="true" type="text" field="corporation_card" style="background-color:#E6E6E6 !important;" />*/
/* 				</div>*/
/* 				<!--一般纳税人-->*/
/* 				<h3 style="margin: 20px 0px;">纳税基础信息</h3>*/
/* 				<div id="yiban">*/
/* */
/* 					<div class="form_data" style="margin-top:15px;">*/
/* 						<label style="">本期销售额：</label>*/
/* 						<input disabled="true" type="text" field="total" style="background-color:#E6E6E6 !important;" />*/
/* 						<label style="">销项税额：</label>*/
/* 						<input disabled="true" type="text" field="xTax" style="background-color:#E6E6E6 !important;" />*/
/* 					</div>*/
/* 					<div class="form_data" style="margin-top:15px;">*/
/* 						<label style="">进项税额：</label>*/
/* 						<input disabled="true" type="text" field="jTax" style="background-color:#E6E6E6 !important;" />*/
/* 						<label style="">上期末留底税额：</label>*/
/* 						<input disabled="true" type="text" field="上期末留底税额" style="background-color:#E6E6E6 !important;" />*/
/* 					</div>*/
/* 					<div class="form_data" style="margin-top:15px;">*/
/* 						<label style="">增值税应纳税额：</label>*/
/* 						<input disabled="true" type="text" field="tTax" style="background-color:#E6E6E6 !important;" />*/
/* 						<label style="">本期末留抵税额：</label>*/
/* 						<input disabled="true" type="text" id="lTax" value='888' field="lTax" style="background-color:#E6E6E6 !important;" />*/
/* 					</div>*/
/* 					<div class="form_data" style="margin-top:15px;">*/
/* 						<label style="">本年累计税负：</label>*/
/* 						<input disabled="true" type="text" field="yearTax" style="background-color:#E6E6E6 !important;" />*/
/* 						<label style="">免抵退：</label>*/
/* 						<input disabled="true" type="text" field="免抵退" style="background-color:#E6E6E6 !important;" />*/
/* 					</div>*/
/* 					<div class="form_data" style="margin-top:15px;">*/
/* 						<label style="">进项税额转出：</label>*/
/* 						<input type="text" disabled="true" field="transfer_out" style="background-color:#E6E6E6 !important;" />*/
/* 						<label style="">本年累计销售额：</label>*/
/* 						<input type="text" disabled="true" field="今年累计销售额" style="background-color:#E6E6E6 !important;" />*/
/* 					</div>*/
/* 				</div>*/
/* 				<!--小规模-->*/
/* 				<div id="xiao">*/
/* 					<div class="form_data" style="margin-top:15px;">*/
/* 						<label style="">本期销售额：</label>*/
/* 						<input disabled="true" type="text" field="total" style="background-color:#E6E6E6 !important;" />*/
/* 						<label style="">本年累计销售额：</label>*/
/* 						<input disabled="true" type="text" field="今年累计销售额" style="background-color:#E6E6E6 !important;" />*/
/* 					</div>*/
/* 					<div class="form_data" style="margin-top:15px;">*/
/* 						<label style="width: 130px;">增值税应纳税额合计  ：</label>*/
/* 						<input disabled="true" type="text" field="tTax" style="background-color:#E6E6E6 !important;" />*/
/* 					</div>*/
/* 					<div class="form_data" style="margin-top:15px;">*/
/* 						<label style="width: 220px;">近11个月累积应税服务销售额：</label>*/
/* 						<input disabled="true" type="text" syllable="11month,service" style="background-color:#E6E6E6 !important;" />*/
/* 					</div>*/
/* 					<div class="form_data" style="margin-top:15px;">*/
/* 						<label style="width: 220px;">近11个月累积应税货物及劳务销售额：</label>*/
/* 						<input disabled="true" id="" type="text" syllable="11month,goods" style="background-color:#E6E6E6 !important;" />*/
/* 					</div>*/
/* 				</div>*/
/* 				<h3>地税款明细</h3>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 税款所属时间： </label>*/
/* 					<span field="local_time"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 企业所得税： </label>*/
/* 					<span field="local_corporate_tax"></span>*/
/* 					<label> 城建税：</label>*/
/* 					<span field="construction_tax"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 教育费附加： </label>*/
/* 					<span field="tuition"></span>*/
/* 					<label>地方教育附加： </label>*/
/* 					<span field="local_tuition"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 个人所得税：</label>*/
/* 					<span field="individual_tax"></span>*/
/* 					<label> 印花税：</label>*/
/* 					<span field="printing"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 堤围费/水利基金：</label>*/
/* 					<span field="water_fund"></span>*/
/* 					<label> 其他税费：</label>*/
/* 					<span field="local_other_tax"></span>*/
/* 				</div>*/
/* 				<h3>国税税款明细</h3>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 税款所属时间：</label>*/
/* 					<span field="state_time"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 企业所得税：</label>*/
/* 					<span field="corporate_tax"></span>*/
/* 					<label> 增值税：</label>*/
/* 					<span field="state_appreciation"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 文化事业建设费：</label>*/
/* 					<span field="culture"></span>*/
/* 					<label> 消费税：</label>*/
/* 					<span field="excise_tax"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 其他税费：</label>*/
/* 					<span field="state_other_tax"></span>*/
/* 				</div>*/
/* 				<h3>企业资产状况信息</h3>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 税款所属时间：</label>*/
/* 					<span field="business_time"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 资产总额（万元）：</label>*/
/* 					<span field="total_assets"></span>*/
/* 					<label> 所有者权益合计：</label>*/
/* 					<span field="profit_total"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 营业总收入（万元）：</label>*/
/* 					<span field="operating_income"></span>*/
/* 					<label> 营业中总收入（万元）：</label>*/
/* 					<span field="operating_income_total"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 利润总额（万元）：</label>*/
/* 					<span field="operating_profit"></span>*/
/* 					<label> 负债总额：（万元）：</label>*/
/* 					<span field="labilities"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 净利润（万元）：</label>*/
/* 					<span field="net_profit"></span>*/
/* 					<label> 纳税总额：（万元）：</label>*/
/* 					<span field="tax_total"></span>*/
/* 				</div>*/
/* 				<h3 style="display: none">国税税款明细</h3>*/
/* 				<div style="margin-top:15px;display: none">*/
/* 					<label> 税款所属时间：</label>*/
/* 					<span field="state_time"></span>*/
/* 				</div>*/
/* 				<!--<h3>税务年报信息1</h3>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 税款所属时间：</label>*/
/* 					<span field="taxation_time"></span>*/
/* 				</div>-->*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 文件：</label>*/
/* 					<span field="files"></span>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div id="general-taxpayer" style="display:none;">*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 企业名称： </label>*/
/* 					<span style="width: 350px;" field="name"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>本期销售额：</label>*/
/* 					<span syllable="thisMonth,total" class="thisMonth"></span>*/
/* 					<label>销项税额：</label>*/
/* 					<span syllable="thisMonth,xTax"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>进项税额： </label>*/
/* 					<span syllable="thisMonth,jTax"></span>*/
/* 					<label> 上期末留底税额1：</label>*/
/* 					<span syllable="thisMonth,lTax"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 增值税应纳税额： </label>*/
/* 					<span syllable="thisMonth,tTax"></span>*/
/* 					<label> 本期末留抵税额： </label>*/
/* 					<span syllable="thisMonth,lTax"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 本年累计税负： </label>*/
/* 					<span field="今年所有月份应纳税额总和"></span>*/
/* 					<label> 免抵退：</label>*/
/* 					<span field="免抵退"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>企业所得税： </label>*/
/* 					<span field="corporate_tax"></span>*/
/* 					<label> 印花税：</label>*/
/* 					<span field="printing"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 城建税：</label>*/
/* 					<span field="construction_tax"></span>*/
/* 					<label> 教育费附加：</label>*/
/* 					<span field="tuition"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 地方教育费附加：</label>*/
/* 					<span field="local_tuition"></span>*/
/* 					<label> 个税：</label>*/
/* 					<span field="individual_tax"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 文化事业建设费：</label>*/
/* 					<span field="culture"></span>*/
/* 					<label> 消费税：</label>*/
/* 					<span field="excise_tax"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 堤围费/水利基金：</label>*/
/* 					<span field="water_fund"></span>*/
/* 					<label> 国税其他税费：</label>*/
/* 					<span field="state_other_tax"></span>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 地税其他税费：</label>*/
/* 					<span field="local_other_tax"></span>*/
/* 					<label> 本年累计销售额：</label>*/
/* 					<span field="今年累计销售额"></span>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div style="display:none ; height:850px;width:100% ;border:0px red solid" id="iframe">*/
/* 		<div style="height: 30px;border: 0px red solid">*/
/* 			<a style="display: inline-block;float:left;"><i id="fa-close" class="fa fa-times-circle"></i></a>*/
/* 		</div>*/
/* 		<iframe src="" name="goals" height="100%" width="100%" frameborder=0 scrolling="auto"></iframe>*/
/* 	</div>*/
/* */
/* 	{% include 'admin/mark.html' %} {% include 'admin/customerDetail.html' %}*/
/* */
/* 	<script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* 	<script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* 	<script>*/
/* 		jQuery(function($) {*/
/* */
/* 			cs.getTaxMonth();*/
/* 			cs.getNodes([103, 289]);*/
/* 			var submitStatuus = false;*/
/* 			var thisData;*/
/* 			var curPage = 1;*/
/* 			var ctype = 2;*/
/* 			var where = '';*/
/* 			var order = "";*/
/* 			var month2 = "";*/
/* 			var employees = {};*/
/* 			var filter = "";*/
/* 			var get_local_time =[];*/
/* 			var local_time = [];*/
/* 			var param = {*/
/* 				aid: ykp.getCookie('aid'),*/
/* 				time: ykp.getCookie("time"),*/
/* 				cid: ykp.getCookie("contract_id"),*/
/* 				timestamp: '',*/
/* 				flag: false*/
/* 			};*/
/* 			var last_month = '';*/
/* 			var squarter='';//上个季度开始*/
/* 			var xquarter='';//上个季度结束*/
/* 			var munths='';*/
/* 			var taxs='';*/
/* 			var data = {*/
/* 				url: "/api/api_service/serviceExport",*/
/* 				type: '5',*/
/* 				title: '报税模板'*/
/* 			}*/
/* 			cs.jzexport(data, function(res) {*/
/* 				setTimeout(function(){*/
/* 								ykp.prompt("上传成功");*/
/* 							},1000)*/
/* 				getTaxList(1, ctype);*/
/* 				$('.label_popup').hide();*/
/* 			});*/
/* */
/* 			$('#filterBtns a').mouseover(function() {*/
/* 				$(this).addClass('over');*/
/* 			})*/
/* 			$('#filterBtns a').mouseout(function() {*/
/* 				$(this).removeClass('over');*/
/* 			})*/
/* 			//条件过滤器*/
/* 			$('.myFilter').click(function() {*/
/* 				if(!$(this).hasClass('clc')) {*/
/* 					$(this).addClass('clc').siblings().removeClass('clc');*/
/* 				}*/
/* 				var user = JSON.parse(ykp.getCookie('userinfo'));*/
/* 				// $('.kind').find('li').eq(0).hasClass('now')*/
/* 				var type = $('.kind').find('li').eq(0).hasClass('now') ? 2 : 1;*/
/* */
/* 				var data = {*/
/* 					"type": 5,*/
/* 					"page_size": pagesize,*/
/* 					'page': 1,*/
/* 					'where': 'khm_customer.tax_type = ' + type,*/
/* 					'index': type*/
/* 				};*/
/* 				var filter_ = $(this).attr('data-kind');*/
/* 				if(filter_ == '0') {*/
/* 					getTaxList(1, type);*/
/* 					return;*/
/* 				}*/
/* 				//我负责的*/
/* 				if(filter_ == '1') {*/
/* 					data['staff_name'] = user.name;*/
/* 				}*/
/* 				//我关注的*/
/* 				if(filter_ == '2') {*/
/* 					data['relation'] = 'helloworld';*/
/* 				}*/
/* 				//我的下属*/
/* 				if(filter_ == '3') {*/
/* 					data.up_user = user.id;*/
/* 				}*/
/* 				filter = data['where'];*/
/* 				getTaxList_4(data);*/
/* 			});*/
/* */
/* 			cs.setFuze({*/
/* 				check: true,*/
/* 				conId: ["#dataList", "#dataList1"],*/
/* 				type: "5",*/
/* 				url: "/api/api_service/transfer_user",*/
/* 				fun: function(ftype) {*/
/* 					//console.log(ftype);*/
/* 					getTaxList(1, ftype);*/
/* 				}*/
/* 			});*/
/* 			//通用排序*/
/* 			cs.general_sort({*/
/* 				url: '/api/api_service/get_tax_list',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					filter: where,*/
/* 					limit: pagesize,*/
/* 					type: 4*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				check: true,*/
/* 				defaultOrder: order,*/
/* 				initOrder: 'khm_customer.id',*/
/* 				contentId: ctype == 2 ? "#dataList" : "#dataList1",*/
/* 				params: [{*/
/* 					id: ctype == 2 ? "#dynamic-table1" : "#dynamic-table2",*/
/* 					field: ["","khm_customer.name","", "khm_customer.ratepaying_no", "", "","", */
/* 						"jzm_service_info.time", "", "jzm_service_info.fuze_id"*/
/* 					]*/
/* 				}]  */
/* 			}, function(res, _sort_role) {*/
/* 				sort_role = _sort_role;*/
/* //				var ctype = 2,dataList,dataList,dataTable*/
/* //				sort_role = _sort_role;*/
/* //				dataList = ctype == 2 ? '#dataList' : '#dataList1';*/
/* //				dataTable = ctype == 2 ? '#dynamic-table1' : '#dynamic-table2';*/
/* //				addList(res, ctype, dataList, pagination, dataTable);*/
/*                   var type,dataList,dataList,dataTable*/
/* 					sort_role = _sort_role;*/
/* 					dataList = ctype == 2 ? '#dataList' : '#dataList1';*/
/* 					dataTable = ctype == 2 ? '#dynamic-table1' : '#dynamic-table2';*/
/* 					//console.log(ctype,dataList, pagination, dataTable);*/
/* 					addList(res, ctype, dataList, pagination, dataTable);*/
/*      //          addList(res, ctype);*/
/* 			});*/
/* */
/* 			tSearch();*/
/* */
/* 			function tSearch() {*/
/* 				$('.tsearch').click(function() {*/
/* 					var month = $('#tmonth').val();*/
/* 					var data = {*/
/* 						url: "",*/
/* 						methods: 'post',*/
/* 						data: {*/
/* 							month: month*/
/* 						}*/
/* 					}*/
/* */
/* 					cs.doAjax(data, function(res) {*/
/* 						for(var i in data) {*/
/* 							$('.chart' + (i + 1) + ' .easy-pie-chart').attr('data-percent', data[i].percent);*/
/* 							$('.chart' + (i + 1) + ' .percent2').text(data[i].num + '%');*/
/* 						}*/
/* 					})*/
/* 				})*/
/* 			}*/
/* */
/* 			var pagesize = 10;*/
/* */
/* 			 cs.custorm_check('#dynamic-table1', '#dataList', true);*/
/* 			//显示一般纳税热 或 小规模*/
/* 			$('.kind').on('click', 'li', function() {*/
/* 				if($(this).hasClass('now')) {*/
/* 					return;*/
/* 				}*/
/* 				$(this).addClass('now').siblings().removeClass('now');*/
/* 				if($(this).hasClass('generaltaxpayer')) {*/
/* 					ctype = 2;*/
/* 					$('._details').hide();*/
/* 					$('._details').eq(0).show();*/
/* 				}*/
/* 				if($(this).hasClass('small-scale')) {*/
/* 					ctype = 1;*/
/* 					$('._details').hide();*/
/* 					$('._details').eq(1).show();*/
/* 					if($('._details').eq(1).find('.custom').length > 0) {*/
/* 						return false;*/
/* 					}*/
/* 					 cs.custorm_check('#dynamic-table2', '#dataList1', true);*/
/* 				}*/
/* 				//通用排序*/
/* 				cs.general_sort({*/
/* 					url: '/api/api_service/get_tax_list',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						filter: where,*/
/* 						limit: pagesize,*/
/* 						type: 5*/
/* 					},*/
/* 					pageBar: {*/
/* 						id: '#pageBar'*/
/* 					},*/
/* 					check: true,*/
/* 					defaultOrder: order,*/
/* 					initOrder: 'khm_customer.id',*/
/* 					contentId: ctype == 2 ? "#dataList" : "#dataList1",*/
/* 					params: [{*/
/* 						id: ctype == 2 ? "#dynamic-table1" : "#dynamic-table2",*/
/* 						field: ["","khm_customer.name", "", "khm_customer.ratepaying_no", "", "", "",*/
/* 							"jzm_service_info.time", "", "jzm_service_info.fuze_id"*/
/* 						]*/
/* 					}]*/
/* 				}, function(res, _sort_role) {*/
/* 					var type,dataList,dataList,dataTable*/
/* 					sort_role = _sort_role;*/
/* 					dataList = ctype == 2 ? '#dataList' : '#dataList1';*/
/* 					dataTable = ctype == 2 ? '#dynamic-table1' : '#dynamic-table2';*/
/* 					//console.log(ctype,dataList, pagination, dataTable);*/
/* 					addList(res, ctype, dataList, pagination, dataTable);*/
/* 				});*/
/* 			});*/
/* */
/* 			getInfo();*/
/* */
/* 			function getInfo() {*/
/* 				//table选项卡切换*/
/* 				changeTable();*/
/* 				//跳转页面接收*/
/* 				//从首页过来*/
/* 				if(param.time != "" && param.time != undefined) {*/
/* 					var today = new Date().setHours(0, 0, 0, 0) / 1000; //今天零点的时间戳*/
/* 					var day_1 = cs.getNowTime(Date.parse(new Date()) / 1000).substr(-2) - 1; //距离本月1号有多少天*/
/* 					var lastmonthday_1 = cs.getNowTime(Date.parse(new Date()) / 1000);*/
/* 					var newday = lastmonthday_1.substring(0, 4) + '-' + (lastmonthday_1.substring(5, 7) - 1) + '-01';*/
/* 					if(lastmonthday_1.substring(5, 7) == 1) {*/
/* 						newday = (lastmonthday_1.substring(0, 4) - 1) + '-12-01';*/
/* 					}*/
/* 					var newdaytime = Date.parse(new Date(newday)) / 1000; //上个月1号的时间戳*/
/* 					switch(param.time) {*/
/* 						case '1':*/
/* 							param.timestamp = `jzm_service_info.com_time>${today}`;*/
/* 							break;*/
/* 						case '2':*/
/* 							param.timestamp = `jzm_service_info.com_time<${today} and jzm_service_info.com_time>${today-86400}`*/
/* 							break;*/
/* 						case '3':*/
/* 							param.timestamp = `jzm_service_info.com_time>${today-86400*6}`;*/
/* 							break;*/
/* 						case '4':*/
/* 							param.timestamp = `jzm_service_info.com_time>${today-86400*29}`;*/
/* 							break;*/
/* 						case '5':*/
/* 							param.timestamp = `jzm_service_info.com_time>${today-86400*day_1}`;*/
/* 							break;*/
/* 						case '6':*/
/* 							param.timestamp = `jzm_service_info.com_time<${today-86400*day_1} and  jzm_service_info.com_time>${newdaytime}`;*/
/* 							break;*/
/* 					}*/
/* */
/* 					var data = {*/
/* 						"type": 5,*/
/* 						"page": curPage,*/
/* 						"page_size": pagesize,*/
/* 						"where": `${param.timestamp}`*/
/* 					}*/
/* 					if(param.aid != '' && param.aid != undefined) {*/
/* 						data['staff_name'] = param.aid;*/
/* 						param.flag = true;*/
/* 					}*/
/* 					getTaxList_3(data);*/
/* 					ykp.setCookie("aid", "", (1 / 24));*/
/* 					ykp.setCookie("time", "", (1 / 24));*/
/* 					//从送单页面过来*/
/* 				} else if(param.cid != "" && param.cid != undefined) {*/
/* 					var data = {*/
/* 						"type": 5,*/
/* 						"page": 1,*/
/* 						"page_size": 10,*/
/* 						"where": "khm_customer.id=" + param.cid*/
/* 					}*/
/* 					getTaxList_4(data);*/
/* 					ykp.setCookie("contract_id", "", (1 / 24));*/
/* 				} else if(ykp.getCookie('detailsId') && ykp.getCookie('detailsId').trim() != '') {*/
/* 					var id = ykp.getCookie('detailsId');*/
/* 					var data = {*/
/* 						"type": 5,*/
/* 						"page": 1,*/
/* 						"page_size": 10,*/
/* 						"where": "htm_contract.id=" + id*/
/* 					}*/
/* 					getTaxList_4(data);*/
/* 					ykp.setCookie("detailsId", "", (1 / 24));*/
/* 				} else {*/
/* 					//获取列表数据*/
/* 					ykp.setCookie("filter", "");*/
/* 					ykp.setCookie("where", "");*/
/* 					getTaxList(1, ctype);*/
/* 				}*/
/* 			}*/
/* */
/* 			/*$('#flush').click(function(){*/
/* 					*/
/* 				getTaxList();*/
/* 			})*//* */
/* */
/* 			$('.flush').click(function() {*/
/* 				var type = $('.kind').find('.now').index();*/
/* 				type = type == 0 ? 2 : 1;*/
/* 				ykp.setCookie('where','');*/
/* 				month2 = "";*/
/* 				$('[sear="customer_name"]').val('');*/
/* 				$('[sear="jzm_service_info.fuze_id"]').val('').trigger('change');*/
/* 				getTaxList(1, type);*/
/* 			})*/
/* */
/* 			//获取所有员工*/
/* 			ykp.doAjax({*/
/* 				async: false,*/
/* 				url: '/api/api_employees/f7',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					select: 'bmm_employees.id,bmm_employees.name'*/
/* 				},*/
/* */
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					//$('.advandced-search').append('<option value="">请选择</option>');*/
/* 					$('.advandced-search').select2({*/
/* 						allowClear: true*/
/* 					});*/
/* */
/* 					for(var i in data) {*/
/*                         if(data[i]['name']) {*/
/*                             employees[data[i]['id']] = data[i]['name'];*/
/*                             $('.advandced-search').append(new Option(data[i]['name'], data[i]['name']));*/
/*                         }*/
/* 					}*/
/* 				}*/
/* 			});*/
/* */
/* 			function getTaxList_4(data) {*/
/* 				ykp.list({*/
/* 					url: '/api/api_service/get_tax_list',*/
/* 					methods: 'post',*/
/* 					data: data,*/
/* 					pageBar: {*/
/* 						id: '#pageBar'*/
/* 					},*/
/* 					loadList: function(res) {*/
/* 						var dataList, pagination, dataTable, type;*/
/* 						var datas = res.data.items;*/
/* 						dataList = data['index'] == 2 ? '#dataList' : '#dataList1';*/
/* 						if(datas == '' || res.data == "") {*/
/* 							if(!data['index'] ) {*/
/* 								dataList = '#dataList';*/
/* 							}*/
/* 							setTimeout(function() {*/
/* 								ykp.prompt("暂无数据");*/
/* 							}, 1000);*/
/* 							$(dataList).html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 							return;*/
/* 						}*/
/* 						type = datas[0]['khm_customer.tax_type'];*/
/* 						dataList = type == 2 ? '#dataList' : '#dataList1';*/
/* 						dataTable = type == 2 ? '#dynamic-table1' : '#dynamic-table2';*/
/* 						if(type == 1) {*/
/* 							$("._details").eq(1).show();*/
/* 							$("._details").eq(0).hide();*/
/* 							$(".small-scale").addClass("now");*/
/* 							$(".generaltaxpayer").removeClass("now");*/
/* 						}*/
/* 						addList(res, type, dataList, pagination, dataTable);*/
/* 					}*/
/* 				})*/
/* 			}*/
/* */
/* 			//先拿到所有数据*/
/* 			function getTaxList_3(data) {*/
/* 				ykp.list({*/
/* 					url: '/api/api_service/get_tax_list',*/
/* 					method: 'post',*/
/* 					data: data,*/
/* 					pageBar: {*/
/* 						id: '#pageBar'*/
/* 					},*/
/* 					loadList: function(res) {*/
/* 						var resdata = res.data.items;*/
/* 						var num = 0;*/
/* 						//判断是否有数据*/
/* 						if(resdata == '') {*/
/* 							setTimeout(function() {*/
/* 								ykp.prompt("暂无数据");*/
/* 							}, 1000);*/
/* 							$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 							return;*/
/* 						}*/
/* 						//判断是否有一般纳税人*/
/* 						for(var i in resdata) {*/
/* 						    if(resdata[i].list){*/
/*                                 if(resdata[i].list[0]['khm_customer.tax_type'] == 1) {*/
/*                                     num++;*/
/*                                 }*/
/* 							}*/
/* 						}*/
/* 						//判断是否有小规模*/
/* 						if(num < resdata.length) {*/
/* 							if(num > 0) {*/
/* 								$("#tspage").show();*/
/* 								tzpage();*/
/* 							}*/
/* 							if(param.flag) {*/
/* 								getTaxList_2(1, 2, '', param.timestamp);*/
/* 							} else {*/
/* 								getTaxList_2(1, 2, param.aid, param.timestamp);*/
/* 							}*/
/* 						} else {*/
/* 							if(param.flag) {*/
/* 								getTaxList_2(1, 1, '', param.timestamp);*/
/* 							} else {*/
/* 								getTaxList_2(1, 1, param.aid, param.timestamp);*/
/* 							}*/
/* 						}*/
/* */
/* 					}*/
/* 				});*/
/* 			}*/
/* */
/* 			//跳转页面的数据加载*/
/* 			function getTaxList_2(curPage, type, aid, timestamp) {*/
/* 				var dataList, pagination, dataTable;*/
/* */
/* 				var data = {*/
/* 					"type": 5,*/
/* 					"page": curPage,*/
/* 					"page_size": pagesize,*/
/* 					"where": `khm_customer.tax_type=${type} and ${param.timestamp}`*/
/* 				}*/
/* */
/* 				if(aid != '' && aid != undefined) {*/
/* 					data['staff_name'] = aid;*/
/* 				}*/
/* 				if(!isNaN(type)) {*/
/* 					dataList = type == 2 ? '#dataList' : '#dataList1';*/
/* 					dataTable = type == 2 ? '#dynamic-table1' : '#dynamic-table2'*/
/* 				}*/
/* 				ykp.list({*/
/* 					url: '/api/api_service/get_tax_list',*/
/* 					method: 'post',*/
/* 					data: data,*/
/* 					pageBar: {*/
/* 						id: '#pageBar'*/
/* 					},*/
/* 					loadList: function(res) {*/
/* 						addList(res, type, dataList, pagination, dataTable);*/
/* 					}*/
/* 				});*/
/* 			}*/
/* */
/* 			//跳转页面查询后仍需跳转一般纳税人时*/
/* 			function tzpage() {*/
/* 				$(".close_ts").click(function() {*/
/* 					$("#tspage").css("display", "none");*/
/* 				})*/
/* */
/* 				$("#go_").click(function() {*/
/* 					$("#tspage").css("display", "none");*/
/* 					if(param.flag) {*/
/* 						getTaxList_2(1, 1, '', param.timestamp);*/
/* 					} else {*/
/* 						getTaxList_2(1, 1, param.aid, param.timestamp);*/
/* 					}*/
/* 					getTaxList_2(1, 1, param.aid, param.timestamp);*/
/* 					$("._details").eq(1).show();*/
/* 					$("._details").eq(0).hide();*/
/* 					$(".small-scale").addClass("now");*/
/* 					$(".generaltaxpayer").removeClass("now");*/
/* 				})*/
/* 			}*/
/* */
/* 			$('#changePageNum').change(function() {*/
/* 				pagesize = $(this).val();*/
/* 				ykp.setCookie('page_size',pagesize);*/
/* 				$('.ui-pagination-container').remove()*/
/* 				getTaxList(1, 2);*/
/* 			})*/
/* */
/* 			function getTaxList(curPage, type) {*/
/* 				$("#tspage").css("display", "none");*/
/* 				var data = {*/
/* 					"type": 5,*/
/* 					"page": curPage,*/
/* 					"page_size": pagesize,*/
/* 					"where": filter*/
/* 				}*/
/* 				if(month2) {*/
/* 					data.month2 = month2;*/
/* 				}*/
/* 				var dataList, pagination, dataTable;*/
/* 				if(!isNaN(type)) {*/
/* 					data.where = type == 2 ? "khm_customer.tax_type=2" : "khm_customer.tax_type=1";*/
/* 					dataList = type == 2 ? '#dataList' : '#dataList1';*/
/* 					dataTable = type == 2 ? '#dynamic-table1' : '#dynamic-table2'*/
/* 				}*/
/* 				cs.getChart(1, 1, data);*/
/* 				///api/api_service/get_tax_list    /api/api_service/service_list*/
/* 				ykp.list({*/
/* 					url: '/api/api_service/get_tax_list',*/
/* 					methods: 'post',*/
/* 					data: data,*/
/* 					pageBar: {*/
/* 						id: '#pageBar'*/
/* 					},*/
/* 					loadList: function(res) {*/
/* 						if(res.data.items == '') {*/
/* 							setTimeout(function() {*/
/* 								ykp.prompt("暂无数据");*/
/* 							}, 1000);*/
/* 							$(dataList).html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 							return;*/
/* 						}*/
/* 						addList(res, type, dataList, pagination, dataTable);*/
/* 					}*/
/* 				});*/
/* 			}*/
/* */
/* 			function changeTable() {*/
/* 				$('.kind li').click(function() {*/
/* 					var index = $(this).index();*/
/* 					var type = index == 0 ? 2 : 1*/
/* 					var htmlStatus = true;*/
/* 					ykp.setCookie('where','');*/
/* 					$('[sear="customer_name"]').val('');*/
/* 					month2 = "";*/
/* 					$('[sear="jzm_service_info.fuze_id"]').val('').trigger('change');*/
/* 					cs.setFuze({*/
/* 						check: true,*/
/* 						conId: ["#dataList", "#dataList1"],*/
/* 						type: "5",*/
/* 						url: "/api/api_service/transfer_user",*/
/* 						fun: function(ftype) {*/
/* 							getTaxList(1, ftype);*/
/* 						}*/
/* 					});*/
/* 					getTaxList(1, type);*/
/* 				})*/
/* 			}*/
/* */
/* 			function addList(res, type, dataList, pagination, dataTable) {*/
/* 				var data = res.data.items;*/
/* 				*/
/*                 var timeData = res.data.time*/
/*                 squarter=timeData['上个季度']['start'];*/
/*                 xquarter=timeData['上个季度']['end'];*/
/*                munths= timeData['上个月']*/
/*                taxs= data[0]?data[0]['jzm_service_info.time'].substring(4,6):'';*/
/* 				//申报所属期*/
/*                 var time = {};*/
/*                 time = "";*/
/*                 var shenbstat ={*/
/*                     '地税':0,*/
/*                     '国税':0,*/
/*                     '工商':0,*/
/* 				}*/
/*                 if(timeData) {*/
/*                     if(timeData['上个月']) {*/
/*                     	last_month = timeData['上个月'];*/
/*                         time += ("<span>地税：" + timeData['上个月'] + "; </span>");*/
/*                         shenbstat["地税"]=1;*/
/*                     }*/
/*                     if(timeData['上个季度']) {*/
/*      */
/* //                      time += ("<span>国税：" + (type==2 ? timeData['上个季度']['start'] + '至' + timeData['上个季度']['end'] : timeData['上个月'])) + "; </span>";*/
/*                        */
/*    //                    	 time += ("<span>国税：" + (type==2 ? timeData['上个季度']['start'] + '至' + timeData['上个季度']['end'] : timeData['上个月'])) + "; </span>";*/
/*                        	 if(type==2){*/
/*                        	 	if(taxs=='03'||taxs=='06'||taxs=='09'|taxs=='12'){*/
/*                        	 time += ("<span>国税：" + (type==2 ? timeData['上个季度']['start'] + '至' + timeData['上个季度']['end'] : timeData['上个月'])) + "; </span>";*/
/*                                 shenbstat["国税"]=1;*/
/*                             }*/
/*                        	 	*/
/*                        	 }else if(type==1){*/
/*                        	 	 time += ("<span>国税：" + (type==2 ? timeData['上个季度']['start'] + '至' + timeData['上个季度']['end'] : timeData['上个月'])) + "; </span>";*/
/*                              shenbstat["国税"]=1;*/
/*                        	 }*/
/*                     */
/*                      //    time += ("<span>国税：" + (type==2 ? timeData['上个季度']['start'] + '至' + timeData['上个季度']['end'] : timeData['上个月'])) + "; </span>";*/
/*                     }*/
/*                     if(timeData['上一年']) {*/
/*                     	if(taxs=='01'||taxs=='02'||taxs=='03'||taxs=='04'||taxs=='05'||taxs=='12'){*/
/*                     		years = timeData['上一年'];*/
/*                         time += ("<span>工商：" + timeData['上一年'] )+ "</span>; ";*/
/*                             shenbstat["工商"]=1;*/
/*                     	}*/
/*                     	*/
/*                     }*/
/* //                  if(timeData['上一年']) {*/
/* //                      time += ("<span>税务：" + timeData['上一年'])+ "</span>; ";*/
/* //                  }*/
/*                 }*/
/* */
/* */
/*                 var _type = type;*/
/*                 ///console.log(data);*/
/*                 //console.log(_type,"aaa")*/
/* 				//console.log("1-(" + _type + ")")*/
/* */
/* 				//税费数据*/
/* 				//taxData();*/
/* 				thisData = data;*/
/* 				var html = '';*/
/* 				var Class = '';*/
/* 				var index = ['', 'fa  fa-circle-o', 'glyphicon glyphicon-ok', 'glyphicon glyphicon-remove'];*/
/* 				var timeArr = new Array(12);*/
/* 				var obj = {};*/
/* 				var cycle = [];*/
/* 				var ths = $(dataTable + ' .thColor th');*/
/* 				var styles = [];*/
/* 				var s_total=0;*/
/* 				for(i = 0; i < ths.length; i++) {*/
/* 					styles.push(ths.eq(i).css('display'));*/
/* 				}*/
/*                 ykp.setCookie('page_no', res.data.curPage, (1 / 24));*/
/* */
/* 				//负责人id*/
/* 				var fuze_ids = [];*/
/* 				//负责人名字*/
/* 				var fuze = [];*/
/* 				var _data = {}; //报税数据*/
/* 				var heightBox = dataList == "#dataList" ? "#heightsearch1" : "#height_search1";*/
/* 				var month = $(heightBox).find('.month').val(); //当前搜索的月份*/
/* 				for(var i in data) {*/
/* 					var newMark = 'inline-block';*/
/* 					_data[i] = data[i]['customer_details'];*/
/* 					if(data[i]['jzm_service_info.status'] != 0) {*/
/* 						newMark = 'none';*/
/* 					}*/
/* */
/* 					//负责人id不存在 则将负责人id加入fuze_ids中*/
/* 					if($.inArray(data[i]['jzm_service_info.fuze_id'], fuze_ids) == -1) {*/
/* 						fuze_ids.push(data[i]['jzm_service_info.fuze_id']);*/
/* 					}*/
/* */
/* 					//根据负责人id 获取负责人姓名并存入fuze中*/
/* 					for(var j in fuze_ids) {*/
/* 						fuze.push(employees[fuze_ids[j]]);*/
/* 					}*/
/*                     cycle.push(cs.getNowTime(data[i]['htm_contract.start_time']) + '~' + cs.getNowTime(data[i]['htm_contract.end_time']));*/
/* 					html += `<tr data-id="${data[i]["jzm_service_info.id"]}" get_money="${data[i]["htm_contract.get_money"]}" status="${data[i]["htm_contract.status"]}" cid="${data[i]["jzm_service_info.customer_id"]} "  customer_id="${data[i]["jzm_service_info.customer_id"]} " data-name="${data[i]['khm_customer.name']}" data-time="${data[i]['jzm_service_info.time']}" fz-id="${data[i]['jzm_service_info.fuze_id']}">*/
/* 									<td class="center">*/
/* 					                        <label class="pos-rel">*/
/* 					                        <input type="checkbox" name="check" class="ace"/>*/
/* 					                        <span class="lbl"></span>*/
/* 					                        </label>*/
/* 					                    </td>*/
/* 									<td data-num="1" style="display: ${styles[1]}" data-cid="${data[i]['khm_customer.id']}">*/
/* 										<div style="display:${data[i]['tax_password']['is_red'] == '0' ? 'none' : 'inline-block'};height:14px;width:17px">*/
/* 								 			<span class="spanTip" style=""><span>*/
/* 										</div>*/
/* 										<a href="#" class="customerDetail pos-rel">${data[i]['khm_customer.name']}</a>*/
/* 										<label class="pos-rel">*/
/* 											<i relation=${data[i]['is_relotion']} class="sc fa ${data[i]['is_relotion'] == 0 ? 'fa-heart-o' : 'fa-heart'}" style="color:${data[i]['is_relotion'] ==1 ? 'red' : ''}"></i>*/
/* 								 				<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}"  data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>*/
/* 							 				 </label>*/
/* 									</td>*/
/* 									<td class="center" style="display:${styles[2]};" data-num="2">*/
/* 										${ data[i]['maxLv']}*/
/* 									</td>*/
/* 									<td class="operation iframePage" data-num="3" style="font-weight:normal;display: ${styles[3]}">*/
/* 										<label class="pos-rel" id="pos-rel">*/
/* 											<a href="javascript:void(0)"  style="margin-right:10px">*/
/* 											<span style="font-weight:normal" class="accont1">${data[i]['tax_password']['ratepaying_no']}</span>*/
/* 											<input style="width:41px;height:18px;opacity: 0;"value="${data[i]['tax_password']['ratepaying_no']}"/>*/
/* 										</label>*/
/* 									</td>*/
/* 									<td class="operation iframePage" data-num="12" style="font-weight:normal;display: ${styles[4]}">*/
/* 										<label class="pos-rel" id="pos-rel">*/
/* 											<a href="javascript:void(0)"  style="margin-right:10px">*/
/* 											<span class="accont1">******</span> <input class="pwd" style="width:41px;height:18px;opacity: 0;" value="${data[i]['tax_password']['state_tax_pass']}"/>*/
/* 										</label>*/
/* 									</td>*/
/* 									<td class="operation iframePage" data-num="5" style="font-weight:normal;display: ${styles[5]}">*/
/* 									<label class="pos-rel" id="pos-rel">*/
/* 										<a href="javascript:void(0)"  style="margin-right:10px">*/
/* 										<span class="accont1">******</span> <input class="pwd" style="width:41px;height:18px;opacity: 0;" value="${data[i]['tax_password']['local_tax_pass']}"/></a>*/
/* 									</label>*/
/* 									</td>*/
/* 									<td data-num="6" style="display: ${styles[6]}"  tax_type="${data[i]['khm_customer.tax_type']}"><a href="javascript:;" style="text-decoration:none;" class="collect pos-rel">查看</a></td>*/
/* 									<td  data-num="7" style="display: ${styles[7]}">${data[i]['jzm_service_info.time']}</td>*/
/* */
/* 									<td data-num="8" style="display: ${styles[8]}">${ time ? time : ""}</td>*/
/* */
/* 									<td data-num="9" style="display: ${styles[9]}">${fuze.join(',')}</td>*/
/* 									<td data-num="10" class="_tax" style="display: ${styles[10]}" Title1="is_state_tax">*/
/* 										<label class="pos-rel btns">*/
/* 											<input type="checkbox"   data-type="3"  data-val=" ${data[i]['taxInfo']['is_local_tax']}"  ${data[i]['taxInfo']['is_local_tax'] == 1 ? "checked" : ""} class="ace check_opt">*/
/* 											<span class="lbl" style="margin-right:10px; display:${shenbstat["地税"] ? 'inline-block' : 'none'}">地税</span>*/
/* 										</label>*/
/* 										<label class="pos-rel btns">*/
/* 											<input type="checkbox"  data-type="2"  data-val=" ${data[i]['taxInfo']['is_state_tax']}" ${data[i]['taxInfo']['is_state_tax'] == 1 ? "checked" : ""}  class="ace check_opt">*/
/* 											<span class="lbl" style="margin-right:10px; display:${shenbstat["国税"] ? 'inline-block' : 'none'}">国税</span>*/
/* 										</label>*/
/* 										<label class="pos-rel btns">*/
/* 											<input type="checkbox"   data-type="4"   data-val=" ${data[i]['taxInfo']['is_business_tax']}"    ${data[i]['taxInfo']['is_business_tax'] == 1 ? "checked" : ""} */
/* 											class="ace check_opt">*/
/* 											<span class="lbl" style="margin-right:10px; display:${shenbstat["工商"] ? 'inline-block' : 'none'}">工商</span>*/
/* 										</label>								*/
/* 										<label class="pos-rel btns" id="is_tax" is_tax = "${data[i]['htm_contract.is_tax']}" style="display: ${dataList == '#dataList' ? 'none' : 'inline-block'}">*/
/* 											<input type="checkbox" data-type="1"  data-val=" ${data[i]['taxInfo']['is_invoice']}"    ${data[i]['taxInfo']['is_invoice'] == 1 ? "checked" : ""}*/
/* 											class="ace check_opt">*/
/* 											<span class="lbl">发票</span>*/
/* 										</label>*/
/* 									</td>*/
/* 									<td data-num="11" style="display:${styles[11]}" data-status="${data[i]["jzm_service_info.status"]}">*/
/* 										<div style="text-align: center" class="hidden-sm hidden-xs action-buttons edit" contentAuthority="104" tax_type="${type}">*/
/* 											<a class="green pos-rel" href="#">*/
/* 												<span class=" pos-rel btBlue " title="填写"><i class="ace-icon fa fa-pencil"></i></span>*/
/* 											</a>*/
/* 										</div>*/
/* 									</td>*/
/* 								</tr>`;*/
/*                     //重置数据  以便下次循环*/
/* 					fuze_ids = [];*/
/* 					fuze = [];*/
/* 				};*/
/* */
/* 				//如果是小规模，就去掉发票认证*/
/* 				$(dataList).html(html);*/
/* */
/* 				cs.sc('报税', function(res) {*/
/* 					var index = $('.kind').find('.now').index();*/
/* 					if(index == 0) {*/
/* 						ftype = 2;*/
/* 						getTaxList(1, ftype);*/
/* 					} else {*/
/* 						if($('#member-tab').find('#custom').length <= 0) {*/
/* 							cs.custorm_check('#dynamic-table2', 'tbody', false);*/
/* 						}*/
/* 						ftype = 1;*/
/* 						getTaxList(1, ftype);*/
/* 					}*/
/* 				});*/
/* 				*/
/* */
/* 				//发票采集详情*/
/* 				layui.use('element', function() {*/
/* */
/* 					var element = layui.element;*/
/* 					invoice_detail(_data, element);*/
/* 				});*/
/* */
/* 				function invoice_detail(data, element) {*/
/* */
/*                     $('.collect').click(function() {*/
/*                         var index = $(this).parents('tr').index();*/
/* 						var tax_type = $(this).parent().attr('tax_type');*/
/* 						var service_id = $(this).attr('service-id');*/
/* */
/* 						showMark('#invoice_collect');*/
/* 						element.init('collapse');*/
/* 						$('#showBox .title').text('发票采集详情');*/
/*                         console.log($('#showBox .title'));*/
/* 						if(tax_type == 1) {*/
/* 							$('#templateCon .jxcj').show();*/
/* 						}*/
/* */
/* 						//获取发票采集数据*/
/* 						getInvoiceCollectData(data[index], element);*/
/* 					});*/
/* 				}*/
/* */
/* 				//获取发票采集数据*/
/* 				function getInvoiceCollectData(data, element) {*/
/* 					//console.log(data);*/
/* 			//		var type = ['注册公司', '变更公司', '股权变更', '注册商标', '注销公司', '申请一般纳税人', '记账报税']; //业务类型*/
/* 					var tax_way = ['','一般计税', '简单征收', '免税', '免抵退']; //计税方式*/
/* 					var tax_item = ['','应税货物', '应税劳务', '应税服务不动产']; //征税项目*/
/*                    var type = ['','无票视同销售','增值税专用发票','增值税普通发票'];//业务类型*/
/* 					var _ztype;*/
/* 					var model;*/
/* 					var _model;*/
/* 					var html;*/
/* */
/* 					for(var i in data) {*/
/* 						if(!data[i]['ztype'] || data[i]['ztype'] === '0') {*/
/* 							continue;*/
/* 						}*/
/* 						_ztype = data[i]['ztype'];*/
/* 						model = $('#templateCon #' + _ztype).find('.model').html();;*/
/* 						_model = $(model);*/
/* 						html = $('<tr></tr>');*/
/* 						if(!$('#templateCon #' + _ztype).parents('.layui-colla-content').hasClass('layui-show')) {*/
/* 							$('#templateCon #' + _ztype).parents('.layui-colla-content').addClass('layui-show');*/
/* 						}*/
/* */
/* 						_model.eq(0).text($('#templateCon #' + _ztype).find('tr').length);*/
/* 						_model.find('[field]').each(function(index, element) {*/
/* 							if($(this).attr('field') == 'charge_mode') {*/
/* 								$(this).parent().text(data[i]['charge_mode'] != 0 ? tax_way[data[i]['charge_mode']] : '');*/
/* 								return true;*/
/* 							}*/
/* 							if($(this).attr('field') == 'tax_project') {*/
/* 								$(this).parent().text(data[i]['tax_project'] != 0 ? tax_item[data[i]['tax_project']] : '');*/
/* 								return true;*/
/* 							}*/
/* 							if($(this).attr('field') == 'is_invalid') {*/
/* 								$(this).parent().text(data[i]['is_invalid'] != 0 ? '作废' : '未作废');*/
/* 								return true;*/
/* 							}*/
/* 							if($(this).attr('field') == 'whether_tax') {*/
/* 								$(this).parent().text(data[i]['whether_tax'] != 0 ? '是' : '否');*/
/* 								return true;*/
/* 							}*/
/* 							if($(this).attr('field') == 'deductible') {*/
/* 								$(this).parent().text(data[i]['deductible'] != 0 ? '是' : '否');*/
/* 								return true;*/
/* 							}*/
/* 							if($(this).attr('field') == 'auth_time') {*/
/* 								$(this).parent().text(data[i]['auth_time'] != 0 ? cs.getNowTime(data[i]['auth_time']) : '');*/
/* 								return true;*/
/* 							}*/
/* 							if($(this).attr('field') == 'type') {*/
/* 								$(this).parent().text(data[i]['type'] != 0 ? type[data[i]['type']] : '');*/
/* 								return true;*/
/* 							}*/
/* 							if($(this).attr('field') == 'tax_rate') {*/
/* 								$(this).parent().text(data[i]['tax_rate'] + '%');*/
/* 								return true;*/
/* 							}if($(this).attr('field') == 'charge_modes') {*/
/* 								$(this).parent().text(data[i]['charge_modes'] != 0 ? tax_way[data[i]['charge_modes']] : '');*/
/* 								return true;*/
/* 							}*/
/* */
/* 							$(this).parent().text(data[i][$(this).attr('field')]);*/
/* 						});*/
/* */
/* 						html.append(_model);*/
/* 						$('#templateCon #' + _ztype).append(html);*/
/* 					}*/
/* */
/* 					var total = 0;*/
/* 					$('#templateCon [total]').each(function(index, element) {*/
/* 						$(element).parents('table').find('tbody tr').not('.model').find('td:eq(' + $(element).index() + ')').each(function(i, e) {*/
/* 							//console.log(i)*/
/* 							total += $(e).text().trim() ? parseFloat($(e).text().trim()) : 0;*/
/* 						});*/
/* 						$(element).text(total);*/
/* 						total = 0;*/
/* 					});*/
/* */
/* 					element.init('collapse');*/
/* 				}*/
/* */
/* 				//发票采集详情*/
/* 				layui.use('element', function() {*/
/* 					var element = layui.element;*/
/* 					invoice_detail(_data, element);*/
/* 				});*/
/* 				function invoice_detail(data, element) {*/
/*                     $('.collect').click(function() {*/
/*                         console.log(data,111);*/
/*                         var index = $(this).parents('tr').index();*/
/* 						var tax_type = $(this).parent().attr('tax_type');*/
/* 						var service_id = $(this).attr('service-id');*/
/* */
/* 						showMark('#invoice_collect');*/
/*                         $('#showBox .title').text('发票采集详情');*/
/*                         console.log($('#showBox .title'));*/
/* 						element.init('collapse');*/
/* 						if(tax_type == 1) {*/
/* 							$('#templateCon .jxcj').show();*/
/* 						}*/
/* */
/* 						//获取发票采集数据*/
/* 						getInvoiceCollectData(data[index], element);*/
/* 					});*/
/* 				}*/
/* */
/* 				//获取发票采集数据*/
/* 				function getInvoiceCollectData(data, element) {*/
/* 					//console.log(data);*/
/* //					var type = ['注册公司', '变更公司', '股权变更', '注册商标', '注销公司', '申请一般纳税人', '记账报税']; //业务类型*/
/* 					var tax_way = ['','一般计税', '简单征收', '免税', '免抵退']; //计税方式*/
/* 					var tax_item = ['','应税货物', '应税劳务', '应税服务不动产']; //征税项目*/
/*                     var type = ['','无票视同销售','增值税专用发票','增值税普通发票'];//业务类型*/
/* 					var _ztype;*/
/* 					var model;*/
/* 					var _model;*/
/* 					var html;*/
/* */
/* 					for(var i in data) {*/
/* 						if(!data[i]['ztype'] || data[i]['ztype'] === '0') {*/
/* 							continue;*/
/* 						}*/
/* 						_ztype = data[i]['ztype'];*/
/* 						model = $('#templateCon #' + _ztype).find('.model').html();;*/
/* 						_model = $(model);*/
/* 						html = $('<tr></tr>');*/
/* 						if(!$('#templateCon #' + _ztype).parents('.layui-colla-content').hasClass('layui-show')) {*/
/* 							$('#templateCon #' + _ztype).parents('.layui-colla-content').addClass('layui-show');*/
/* 						}*/
/* */
/* 						_model.eq(0).text($('#templateCon #' + _ztype).find('tr').length);*/
/* 						_model.find('[field]').each(function(index, element) {*/
/* 							if($(this).attr('field') == 'charge_mode') {*/
/*                                 $(this).parent().text(data[i]['charge_mode'] != 0 ? tax_way[data[i]['charge_mode']] : '');*/
/* 								return true;*/
/* 							}*/
/* 							if($(this).attr('field') == 'tax_project') {*/
/* 								$(this).parent().text(data[i]['tax_project'] != 0 ? tax_item[data[i]['tax_project']] : '');*/
/* 								return true;*/
/* 							}*/
/* 							if($(this).attr('field') == 'is_invalid') {*/
/* 								$(this).parent().text(data[i]['is_invalid'] != 0 ? '作废' : '未作废');*/
/* 								return true;*/
/* 							}*/
/* 							if($(this).attr('field') == 'whether_tax') {*/
/* 								$(this).parent().text(data[i]['whether_tax'] != 0 ? '是' : '否');*/
/* 								return true;*/
/* 							}*/
/* 							if($(this).attr('field') == 'deductible') {*/
/* 								$(this).parent().text(data[i]['deductible'] != 0 ? '是' : '否');*/
/* 								return true;*/
/* 							}*/
/* 							if($(this).attr('field') == 'auth_time') {*/
/* 								$(this).parent().text(data[i]['auth_time'] != 0 ? cs.getNowTime(data[i]['auth_time']) : '');*/
/* 								return true;*/
/* 							}*/
/* 							if($(this).attr('field') == 'type') {*/
/* 								$(this).parent().text(data[i]['type'] != 0 ? type[data[i]['type']] : '');*/
/* 								return true;*/
/* 							}*/
/* 							if($(this).attr('field') == 'tax_rate') {*/
/* 								$(this).parent().text(data[i]['tax_rate'] + '%');*/
/* 								return true;*/
/* 							}if($(this).attr('field') == 'charge_modes') {*/
/*                                 $(this).parent().text(data[i]['charge_modes'] != 0 ? tax_way[data[i]['charge_modes']] : '');*/
/* 								return true;*/
/* 							}*/
/* */
/* 							$(this).parent().text(data[i][$(this).attr('field')]);*/
/* 						});*/
/* */
/* 						html.append(_model);*/
/* 						$('#templateCon #' + _ztype).append(html);*/
/* 					}*/
/* */
/* 					var total = 0;*/
/* 					$('#templateCon [total]').each(function(index, element) {*/
/* 						$(element).parents('table').find('tbody tr').not('.model').find('td:eq(' + $(element).index() + ')').each(function(i, e) {*/
/* 							//console.log(i)*/
/* 							total += $(e).text().trim() ? parseFloat($(e).text().trim()) : 0;*/
/* 						});*/
/* 						$(element).text(total);*/
/* 						total = 0;*/
/* 					});*/
/* */
/* 					element.init('collapse');*/
/* 				}*/
/* */
/* 				//-复选框选择时弹框确认提示 选中后不能再取消*/
/* */
/* 				custom.get_custom_info();*/
/* 				custom.showReamrk();*/
/* 				$("[data-rel='tooltip']").tooltip();*/
/* 				$('[contentAuthority="104"]').each(function(i, e) {*/
/* 					if(cs.getNodes([104], true) && $(this).parent().attr('data-status') == '2') {*/
/* 						$(this).removeClass('hidden-sm');*/
/* 						$(this).find('a').html('<span class="btGreen" title="查看"><i class="ace-icon fa fa-eye"></i></span>');*/
/* 						$(this).show();*/
/* 					}*/
/* 					if(cs.getNodes([104], true) && $(this).parent().attr('data-status') != '2') {*/
/* 						$(this).show();*/
/* 					}*/
/* 				});*/
/* */
/* 				$('.accont').click(function() {*/
/* 					if($(this).next().next().val() == "") {*/
/* 						ykp.prompt('请添加账户密码！');*/
/* 						return false;*/
/* 					}*/
/* */
/* 					$(this).next().select();*/
/* 					document.execCommand("Copy");*/
/* 					ykp.prompt('复制成功')*/
/* 				})*/
/* 				*/
/* 				$('.accont1').click(function() {*/
/* 					if($(this).next().val() == "") {*/
/* 						ykp.prompt('请添加密码！');*/
/* 						return false;*/
/* 					}*/
/* 					$(this).next().select();*/
/* 					document.execCommand("Copy");*/
/* 					ykp.prompt('复制成功')*/
/* 				})*/
/*                             */
/*              */
/* //           $('#tax .btns').find('input[type=checkbox]').click(function(){*/
/* //           	var type = $(this).attr('data-type');*/
/* //           	var service_id = $(this).parents('tr').attr('data-id');*/
/* //           	var val = $(this).attr('data-val');                 */
/* //           	var text = $(this).next().text();*/
/* //           			layui.use('layer', function() {*/
/* //						var layer = layui.layer;*/
/* //						layer.confirm(val == 1 ? '取消' + text + '认证么？' : '确认认证' + text + '么？', function(index) {*/
/* //							ykp.doAjax({*/
/* //								url: "/api/api_service/add_tax_is",*/
/* //								method: "post",*/
/* //								data: {*/
/* //									service_id: service_id,*/
/* //									type: type,*/
/* //									val: val == 1 ? 0 : 1*/
/* //								},*/
/* //								success: function(res) {*/
/* //									var index = $('.kind').find('.now').index() == 1 ? 1 : 2;*/
/* //									getTaxList(1, index);*/
/* //									layer.closeAll();*/
/* //								}*/
/* //							})*/
/* //						});*/
/* //					})*/
/* //           })                     */
/* 				$('._tax .btns').find('input[type=checkbox]').click(function(){*/
/* 					var type = $(this).attr('data-type');*/
/* 					var service_id = $(this).parents('tr').attr('data-id');*/
/* 					var val = $(this).attr('data-val');*/
/* 					var fzid = $(this).parents('tr').attr('fz-id');*/
/* 					var userid = JSON.parse(ykp.getCookie('userinfo'));*/
/* //					if(fzid != userid.id) {*/
/* //						ykp.prompt('你不是负责人');*/
/* //						return false;*/
/* //					}*/
/* //					if($(this).parents('tr').attr('get_money') == -1 && $(this).attr('status') == '4') {*/
/* //						ykp.prompt('订单已解约，不能编辑');*/
/* //						return false;*/
/* //					}*/
/* 					var text = $(this).next().text();*/
/* 					layui.use('layer', function() {*/
/* 						var layer = layui.layer;*/
/* 						layer.confirm(val == 1 ? '取消' + text + '认证吗？' : '确认认证' + text + '吗？', function(index) {*/
/* 							ykp.doAjax({*/
/* 								url: "/api/api_service/add_tax_is",*/
/* 								method: "post",*/
/* 								data: {*/
/* 									service_id: service_id,*/
/* 									type: type,*/
/* 									val: val == 1 ? 0 : 1*/
/* 								},*/
/* 								success: function(res) {*/
/* 									var index = $('.kind').find('.now').index() == 1 ? 1 : 2;*/
/* 									getTaxList(1, index);*/
/* 									layer.closeAll();*/
/* 								}*/
/* 							})*/
/* 						});*/
/* 					})*/
/* 					return false;*/
/* 				});*/
/* */
/* 				var td = $(html).find("td[data-num='4']");*/
/* 				if(type == 2) {*/
/* 					$(dataList).find("td[data-num='4']").remove();*/
/* 				}*/
/* */
/* 				$(dataList + ' td').find('#is_tax').each(function() {*/
/* 					if($(this).attr('is_tax') == 0) {*/
/* 						$(this).remove();*/
/* 					}*/
/* 				})*/
/* */
/* 				//打开内嵌网站*/
/* 				$(dataList + ' [target="goals"]').click(function() {*/
/* 					var href = $(this).attr("data_url");*/
/* 					if(!href) {*/
/* 						ykp.prompt('未添加相关网站');*/
/* 						return;*/
/* 					}*/
/* 					$('#iframe').find('iframe').attr('src', href);*/
/* 					$('#iframe div a').css("cursor", 'pointer');*/
/* 					$('#iframe').show();*/
/* 					$('.row').hide();*/
/* 				})*/
/* */
/* 				//关闭网站*/
/* 				$('#iframe div a').click(function() {*/
/* 					$('#iframe').hide();*/
/* 					$('.row').show();*/
/* 				})*/
/* */
/* 				$("#dataList td[data-status='0']").mouseover(function() {*/
/* 					$(this).children('a').css('display', 'inline-block');*/
/* 				})*/
/* */
/* 				$(dataList + " td[data-status='0']").mouseout(function() {*/
/* 					$(this).children('a').css('display', 'none');*/
/* 				})*/
/* */
/* 				$('._details tbody tr').find('.edit').unbind('click').click(function(e) {*/
/* 					var taxstatus = $(this).parents('td').attr('data-status');*/
/*                     var customer_name = $(this).parents('tr').find('[data-num="1"] a').text();*/
/*                     var cus_month = $(this).parents('tr').attr('data-time'); //服务月份*/
/* 					var fzid = $(this).parents('tr').attr('fz-id');*/
/* 					var userid = JSON.parse(ykp.getCookie('userinfo'));*/
/* 					var id = $(this).parents('tr').attr('data-id');*/
/* 					if(fzid != userid.id) {*/
/* 						ykp.prompt('你不是申报人');*/
/* 						return false;*/
/* 					}*/
/* */
/* 					//作废未收款不能添加*/
/* 					if($(this).parents('tr').attr('get_money') == -1 && $(this).attr('status') == '4' || $(this).attr('status') == '3') {*/
/* 						ykp.prompt('订单已解约，不能编辑');*/
/* 						return false;*/
/* 					}*/
/* */
/* 					//ykp.prompt('未添加相关网站');*/
/* 					if(taxstatus == 1 || submitStatuus) {*/
/* 						ykp.prompt('等待审核!');*/
/* 						return;*/
/* 					} else if(taxstatus == 2) {*/
/*                         $('#showBox .title').text('详细税费数据');*/
/* */
/* 						//执行查看操作*/
/* 						/*ykp.prompt('审核已通过,不可编辑!');*/
/* 						return;*//* */
/* */
/* 						var target = $(e.currentTarget);*/
/* 						//										taxData(target);*/
/* 						var type = target.attr('tax_type');*/
/* 						var name = $(this).parents('tr').attr('data-name');*/
/*                         $('#showBox .title').text(customer_name + '（' + cus_month + '）税费数据');*/
/* 						get_tax_details1(id, type, name);*/
/* 						return false;*/
/* 					}*/
/*                     var year_month = $(this).parents('tr').find('[data-num="7"]').text();*/
/* 					var customer_id = $(this).parents('tr').attr('customer_id').trim();*/
/* 					var temp = _type == 2 ? "#template4" : "#template4"; //template1*/
/* 					var dtime = "";*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_service/get_tax_info',*/
/* 						method: 'post',*/
/* 						data: {*/
/* 							service_id: id*/
/* 						},*/
/* 						success: function(res) {*/
/*                             var data = res.data;*/
/* 							showMark(temp);*/
/* 							var temHtml = $('#templateBox4').html();*/
/* 							$('#templateBox4').children().remove();*/
/* 							$('#templateBox4').html(temHtml);*/
/* 							cs.getYearAndMonth('2015-1-1', '2025-12-31', '#templateCon .addtime');*/
/* 							cs.getYear('2015', '2025', '#templateCon .addtime1', 'year');*/
/* 							$('#templateCon .select2').css('width', '500px')*/
/* */
/* 							dtime = res.data == "" ? "" : data['上个季度']['start'];*/
/* 							$('#templateCon').find('select[field=state_time2]').val(squarter).trigger('change');*/
/* 							$('#templateCon').find('select[field=state_time1]').val(xquarter).trigger('change');*/
/* 							$('#templateCon').find('select[field=business_time2]').val("").trigger('change');*/
/* 							$('#templateCon').find('select[field=business_time1]').val("").trigger('change');*/
/* */
/* 							$('#templateCon').find('select[field=taxation_time2]').val('').trigger('change');*/
/* 							$('#templateCon').find('select[field=taxation_time1]').val('').trigger('change');*/
/* */
/* 							//修改所属时间                            */
/* 							changeTime()*/
/*                             $('#showBox .title').text(customer_name + '（' + cus_month + '）税费数据');*/
/* 							$('#templateCon').data('flag', '1');*/
/* 							$('#templateCon .close_get').unbind('click').click(function() {*/
/* 								$('#templateCon').data('flag', '2'); */
/* 								cs.close();*/
/* 							});*/
/* */
/* 							$('#templateCon .item_form').attr('customer_name', customer_name);*/
/* 							$('#templateCon .item_form').attr('time', year_month);*/
/* 							$('#templateCon form').attr('customer_id', customer_id.trim());*/
/* 							get_tax_details(id);*/
/* 							save();*/
/* 							$('#templateCon input[field="上期末留抵税额"]').val(data['上期末留抵税额']);*/
/* 							$('#templateCon input[field="免抵退"]').val(data['免抵退']);*/
/* 							$('#templateCon input').eq(0).val(customer_name);*/
/* 							for(var i in data['customerInfo']) {*/
/* 								$('#templateCon input').each(function() {*/
/* 									if($(this).attr('field') == i) {*/
/* 										$(this).val(data['customerInfo'][i]);*/
/* 									}*/
/* 								})*/
/* 							}*/
/* */
/* 							for(var i in data['thisMonth']) {*/
/*                                 $('#templateCon input').each(function() {*/
/* 								    if($(this).attr('field') == i){*/
/*                                         if($(this).attr('field') == "免抵退") {*/
/*                                             $(this).val(data["免抵退"]);*/
/*                                         } else if($(this).attr('field') == "免抵退") {*/
/*                                             $(this).val(data["免抵退"]);*/
/*                                         }else if($(this).attr('field') == "上期末留抵税额") {*/
/*                                             $(this).val(data['上期末留抵税额']);*/
/*                                         }else {*/
/*                                             $(this).val(data['thisMonth'][i]);*/
/* 										}*/
/* 									}*/
/* */
/* 								});*/
/* 							}*/
/* */
/*                             	var xTax = $('#templateCon input[field=xTax]');  //销项税额*/
/* 								var jTax = $('#templateCon input[field=jTax]');  //进项税额*/
/* 								var tTax = $('#templateCon input[field=tTax]');  //增值税应纳税额*/
/* 								var lTax = $('#templateCon input[field=lTax]');   //本期末留底税*/
/*                             	var _lastm = $('#templateCon input[field=上期末留抵税额]');*/
/*                            		var yearTax = $('#templateCon input[field=今年累计销售额]'); //本年累计销售额*/
/*                             	if(parseFloat(xTax.val())  - ( parseFloat(jTax.val()) + parseFloat(_lastm.val()))  > 0) {*/
/* 									tTax.val((Math.abs(parseFloat(xTax.val()) - ( parseFloat(jTax.val()) + parseFloat(_lastm.val())))).toFixed(2));*/
/*                                     lTax.val('0.00');*/
/*                             	}else{*/
/*                                     tTax.val('0.00');*/
/*                                     lTax.val((Math.abs(parseFloat(xTax.val())  - ( parseFloat(jTax.val()) + parseFloat(_lastm.val()) )) ).toFixed(2));*/
/* 								}*/
/*                            		yearTax.val(data["今年累计销售额"]);*/
/* 							//改变上期末留抵税额*/
/* 							$('#templateCon input[field="上期末留抵税额"]').change(function(){*/
/*                                 var xTax = $('#templateCon input[field=xTax]');  //销项税额*/
/* 								var jTax = $('#templateCon input[field=jTax]');  //进项税额*/
/* 								var tTax = $('#templateCon input[field=tTax]');  //增值税应纳税额*/
/*                                 var lTax = $('#templateCon input[field=lTax]');   //本期末留底税*/
/* 								var val = $(this).val();*/
/* 								$(this).val(val < 0 ? Math.abs(val) : val)*/
/* 								 if(xTax.val() - ( jTax.val() + val)  > 0 ) {*/
/* 									tTax.val((Math.abs(xTax.val() - ( jTax.val() + val))).toFixed(2));*/
/*                                      lTax.val('0.00');*/
/* 								}else{*/
/*                                      tTax.val('0.00');*/
/* 									lTax.val((Math.abs(xTax.val() - ( jTax.val() + val))).toFixed(2));*/
/* 								}*/
/* 							})*/
/* 							*/
/* 							if(res.data != "" && data['jzm_tax_details']['state_time']) {*/
/* 								$('#templateCon').find('select[field=state_time2]').val(data['jzm_tax_details']['state_time'].split(',')[0]).trigger('change');*/
/* 								$('#templateCon').find('select[field=state_time1]').val(data['jzm_tax_details']['state_time'].split(',')[1]).trigger('change');*/
/* 							}*/
/* 							if(res.data != "" && data['jzm_tax_details']['business_time']) {*/
/* 								$('#templateCon').find('select[field=business_time2]').val(data['jzm_tax_details']['business_time'].split(',')[0]).trigger('change');*/
/* 								$('#templateCon').find('select[field=business_time1]').val(data['jzm_tax_details']['business_time'].split(',')[1]).trigger('change');*/
/* 							}*/
/* 							if(res.data != "" && data['jzm_tax_details']['taxation_time']) {*/
/* 								$('#templateCon').find('select[field=taxation_time2]').val(data['jzm_tax_details']['taxation_time'].split(',')[0]).trigger('change');*/
/* 								$('#templateCon').find('select[field=taxation_time1]').val(data['jzm_tax_details']['taxation_time'].split(',')[1]).trigger('change');*/
/* 							}*/
/* 							if(_type == 1) {*/
/*                                 //一般纳税人*/
/* 							$('#templateCon #xiao').remove();*/
/* 								$('#templateCon').find('select[field=state_time2]').val(munths).trigger('change');*/
/* 								$('#templateCon').find('select[field=state_time1]').val(munths).trigger('change');*/
/* */
/* 							} else {*/
/* 								$('#templateCon #yiban').remove();*/
/*                                 for(var i in data['customerInfo']) {*/
/* 									$('#templateCon input').each(function() {*/
/*                                         if($(this).attr('field') == i) {*/
/*                                             $(this).val(data['customerInfo'][i]);*/
/*                                         }*/
/* 									})                                  */
/* 								}*/
/* 								$('#templateCon [syllable]').each(function(i, e) {*/
/* 									field = $(this).attr('syllable').split(',');*/
/* 									$(this).val(res.data != "" ? data[field[0]][field[1]]:"");*/
/* 								});*/
/* */
/* 								for(var i in data['thisMonth']) {*/
/* 									$('#templateCon input').each(function() {*/
/* 											if($(this).attr('field') == i) {*/
/* 												$(this).val(data['thisMonth'][i]);*/
/* 											} else if($(this).attr('field') == "免抵退") {*/
/* 												$(this).val(data["免抵退"]);*/
/* 											} else if($(this).attr('field') == "llTax") {*/
/* 												$(this).val(data['thisMonth']['lTax']);*/
/* 											}*/
/* 									})*/
/* */
/* 								}*/
/* 								if(res.data != "" &&  data['jzm_tax_details']['state_time']) {*/
/* 									$('#templateCon').find('select[field=state_time2]').val(data['jzm_tax_details']['state_time'].split(',')[0]).trigger('change');*/
/* 									$('#templateCon').find('select[field=state_time1]').val(data['jzm_tax_details']['state_time'].split(',')[1]).trigger('change');*/
/* 								}*/
/* 								if(res.data != "" && data['jzm_tax_details']['business_time']) {*/
/* 									$('#templateCon').find('select[field=business_time2]').val(data['jzm_tax_details']['business_time'].split(',')[0]).trigger('change');*/
/* 									$('#templateCon').find('select[field=business_time1]').val(data['jzm_tax_details']['business_time'].split(',')[1]).trigger('change');*/
/* 								}*/
/* 								if(res.data != "" && data['jzm_tax_details']['taxation_time']) {*/
/* 									$('#templateCon').find('select[field=taxation_time2]').val(data['jzm_tax_details']['taxation_time'].split(',')[0]).trigger('change');*/
/* 									$('#templateCon').find('select[field=taxation_time1]').val(data['jzm_tax_details']['taxation_time'].split(',')[1]).trigger('change');*/
/* 								}*/
/* 							}*/
/* */
/* 							cs.upload1({*/
/* 								el: "#templateBox #upload1",*/
/* 								ael: "#templateBox #fileBox"*/
/* 							})*/
/* 						}*/
/* 					})*/
/* 					function changeTime() {*/
/* 						$('#templateCon').find('select[field=state_time2],select[field=business_time2],select[field=taxation_time2]').change(function() {*/
/* 							var curval = $(this).val() ? parseInt($(this).val().replace(/\./, '')) : "";*/
/* 							$('#templateCon').find('select[field=' + ($(this).attr('field').replace(/2/, '1')) + ']').val('').trigger('change');*/
/* 						})*/
/* 						$('#templateCon').find('select[field=local_time]').change(function(){*/
/*                             local_time = $(this).val();*/
/* 						})*/
/* 					}*/
/* 					var customer_id = $(this).parents('tr').attr('customer_id');*/
/* 					var data = {};*/
/* 					data["customer_id"] = customer_id;*/
/* 					data["service_id"] = id;*/
/* 					var num = 0;*/
/* */
/* 					$(this).parents("tr").find("[type='checkbox']").each(function(i) {*/
/* 						if($(this).is(":checked")) {*/
/* 							data[$(this).parents("td").attr("Title1")] = 1;*/
/* 						} else {*/
/* 							data[$(this).parents("td").attr("Title1")] = 0;*/
/* 						}*/
/* 					})*/
/* */
/* 					if(type == 2) {*/
/* 						data["is_invoice"] = 0;*/
/* 					}*/
/* */
/* 					function sendMsg(id, type, param) {*/
/* 						ykp.doAjax({*/
/* 							url: '/api/api_common/send_customer',*/
/* 							data: {*/
/* 								customer_id: id,*/
/* 								type: type,*/
/* 								param: JSON.stringify(param)*/
/* 							},*/
/* 							method: 'post',*/
/* 							success: function(res) {*/
/* 								ykp.prompt('短信发送成功！');*/
/* 							}*/
/* 						})*/
/* 					}*/
/* */
/* 					//编辑框数据渲染*/
/* 					function get_tax_details(id) {*/
/* 						var service_id = id;*/
/* 						ykp.doAjax({*/
/* 							url: "/api/api_service/get_tax_details",*/
/* 							data: {*/
/* 								service_id: service_id*/
/* 							},*/
/* 							method: "post",*/
/* 							success: function(res) {*/
/* 								*/
/* 								var data = res.data;*/
/* 								console.log(data)*/
/*                                 //编辑里所属时间*/
/*                                 var arr = cus_month.split('');*/
/*                                 arr.splice(4, 0, '.');*/
/*                                 arr = cs.getPreMonth(arr.join(''));*/
/*                                 get_local_time = data.local_time ? JSON.parse(data.local_time) : arr ;*/
/*                                 local_time = [arr];*/
/*                                 s_total = $('#templateCon input[field=tTax]').val();*/
/*                                 $('#templateCon').find('select[field=local_time]').val(last_month).trigger('change');*/
/*                                 $('#templateCon #addtime').select2({   */
/*                                     allowClear: true                     */
/*                                 });*/
/*                                 if(!data) {*/
/* 									$('#templateCon input').each(function() {*/
/* 										if($(this).attr('title1')) {*/
/* 											$(this).val(0);*/
/* 										}*/
/*                                         if ($(this).attr('field') == "construction_tax") {*/
/*                                             $(this).val((parseFloat(s_total)*0.07).toFixed(2));*/
/*                                         } else if ($(this).attr('field') == "tuition") {*/
/*                                             $(this).val((parseFloat(s_total)*0.03).toFixed(2));*/
/*                                         } else if ($(this).attr('field') == "local_tuition") {*/
/*                                             $(this).val((parseFloat(s_total)*0.02).toFixed(2));*/
/*                                         }*/
/* 									})*/
/* 								} else {*/
/* 									for(var i in data) {*/
/*                                         $('#templateCon input,select').each(function() {*/
/* */
/*                                            /* if($(this).attr('field') == i) {*/
/*                                                 if ($(this).attr('field') == "construction_tax") {*/
/*                                                     $(this).val( data[i]==0 || data[i]=="" ? 0 :s_total*0.07.toFixed(2));*/
/*                                                 } else if ($(this).attr('field') == "tuition") {*/
/*                                                     $(this).val(data[i]==0 || data[i]=="" ? 0 : s_total*0.03);*/
/*                                                 } else if ($(this).attr('field') == "local_tuition") {*/
/*                                                     $(this).val(data[i]==0 || data[i]=="" ? 0 : s_total*0.02);*/
/*                                                 } else if($(this).attr('field') == "state_appreciation" ){*/
/*                                                     $(this).val(data[i]==0 || data[i]=="" ? s_total : data[i]);*/
/*                                                 } else {*/
/*                                                     $(this).val(data[i]);*/
/*                                                 }*/
/* 											}*//* */
/* */
/*                                             if($(this).attr('field') == i) {*/
/*                                                 if ($(this).attr('field') == "construction_tax") {*/
/*                                                     console.log(data[i],111);*/
/*                                                     $(this).val( data[i]==0 ? (s_total*0.07).toFixed(2) : data[i]);*/
/*                                                 } else if ($(this).attr('field') == "tuition") {*/
/*                                                     $(this).val(data[i]==0 ? (s_total*0.03).toFixed(2) : data[i]);*/
/*                                                 } else if ($(this).attr('field') == "local_tuition") {*/
/*                                                     $(this).val(data[i]==0 ? (s_total*0.02).toFixed(2) : data[i]);*/
/*                                                 } else if($(this).attr('field') == "state_appreciation" ){*/
/*                                                     $(this).val(data[i]==0 ? s_total : data[i]);*/
/*                                                 } else {*/
/*                                                     $(this).val(data[i]);*/
/*                                                 }*/
/*                                             }*/
/* 										})*/
/* 									}*/
/* 									$('#templateCon select[field=business_time2]').val(data["business_time"].split(',')[0].substr(0,4));*/
/* 									$('#templateCon select[field=taxation_time2]').val(data["taxation_time"].split(',')[0].substr(0,4));*/
/* 								}*/
/* 							}*/
/* 						})*/
/* 					}*/
/* 					function get_tax_details1(id, type, name) {*/
/* 						var service_id = id;*/
/* 						ykp.doAjax({*/
/* 							url: "/api/api_service/get_tax_details",*/
/* 							data: {*/
/* 								service_id: service_id*/
/* 							},*/
/* 							method: "post",*/
/* 							success: function(res) {*/
/* 								var data = res.data;*/
/*                                 //console.log(data);*/
/*                                 showMark('#small-scale');*/
/* 								var arr = [];*/
/*                                $('#templateCon [field]').each(function(index, element) {*/
/* 									if($(this).attr('field') == "state_time" || $(this).attr('field') == "business_time") {*/
/* 										$(this).text(data[$(this).attr('field')] ? (data[$(this).attr('field')] != ',' ? data[$(this).attr('field')].split(',')[0] + "至" + data[$(this).attr('field')].split(',')[1] : "") : "空");*/
/* 									}else if($(this).attr('field') == "local_time"){*/
/*                                         $(this).text(data[$(this).attr('field')] ? (data[$(this).attr('field')] != ',' && data[$(this).attr('field')] != "null" ? JSON.parse(data[$(this).attr('field')]).join(' ') : "") : "空");*/
/* 									} else if($(this).attr('field') == "files") {*/
/* 										if(data[$(this).attr('field')]) {*/
/* 											JSON.parse(data[$(this).attr('field')]).forEach(function(item) {*/
/* 												arr.push('<p style="padding-left: 2px;"><a data-url="' + item.url + '">' + item.name + '</a></p>')*/
/* 											})*/
/* 											$(this).html(arr.join(','));*/
/* 											$(this).find('a').click(function() {*/
/* 												var name = $(this).text();*/
/* 												var url = $(this).attr('data-url');*/
/* 												window.open(ykp.api_url + "/api/api_common/update_file_name?file_url=" + url + "&name=" + name)*/
/* 											})*/
/* 										}*/
/* 									} else if($(this).attr('field') == "transfer_out"){*/
/*                                         $(this).val(data[$(this).attr('field')]);*/
/* 									}else{*/
/*                                         $(this).text(data[$(this).attr('field')]);*/
/* 									}*/
/* 								});*/
/* 							}*/
/* 						})*/
/* */
/* 						ykp.doAjax({*/
/* 							url: '/api/api_service/get_tax_info',*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								service_id: id*/
/* 							},*/
/* 							success: function(res) {*/
/* 								var data = res.data;*/
/*                                 for(var i in data['customerInfo']) {*/
/* 									$('#templateCon input').each(function() {*/
/* 										if($(this).attr('field') == i) {*/
/* 											$(this).val(data['customerInfo'][i]);*/
/* 										}*/
/* 									})*/
/* 								}*/
/* */
/* 								for(var i in data['thisMonth']) {*/
/* 									$('#templateCon input').each(function() {*/
/* 										if($(this).attr('field') == i) {*/
/* 											$(this).val(data['thisMonth'][i]);*/
/* 										} else if($(this).attr('field') == "免抵退") {*/
/* 											$(this).val(data["免抵退"]);*/
/* 										} else if($(this).attr('field') == "llTax") {*/
/* 											$(this).val(data['thisMonth']['lTax']);*/
/* 										}else if($(this).attr('field') == "上期末留底税额") {*/
/* 											$(this).val(data['上期末留抵税额']);*/
/* 										}*/
/* 									})*/
/* 								}*/
/* */
/* 								var xTax = $('#templateCon input[field=xTax]');  //销项税额*/
/* 								var jTax = $('#templateCon input[field=jTax]');  //进项税额*/
/* 								var tTax = $('#templateCon input[field=tTax]');  //增值税应纳税额*/
/* 								var lTax = $('#templateCon input[field=lTax]');   //本期末留底税*/
/*                                 var yearTax = $('#templateCon input[field=今年累计销售额]'); //本年累计销售额*/
/*                                 //console.log((parseInt(data['thisMonth']['xTax']) - (parseInt(data['thisMonth']['jTax']) + parseInt(data['上期末留抵税额'])) > 0));*/
/*                                /* if((parseInt(data['thisMonth']['xTax'] ) - ( parseInt(data['thisMonth']['jTax']) + parseInt(data['上期末留抵税额']))  > 0) ) {*/
/* 									tTax.val(Math.abs(parseInt(data['thisMonth']['xTax'] )- ( parseInt(data['thisMonth']['jTax']) + parseInt(data['上期末留抵税额']) )));*/
/*                                      lTax.val(0)*/
/* 								 }else{*/
/* 									lTax.val(Math.abs(parseInt(data['thisMonth']['xTax'] )- ( parseInt(data['thisMonth']['jTax']) + parseInt(data['上期末留抵税额']) )) )*/
/*                                      tTax.val(0)*/
/* 								 }*//* */
/*                                 if(xTax.val() - ( jTax.val() + data['上期末留抵税额'])  > 0) {*/
/*                                     tTax.val((Math.abs(xTax.val() - ( jTax.val() + data['上期末留抵税额'] ))).toFixed(2));*/
/*                                     lTax.val('0.00');*/
/*                                 }else{*/
/*                                     console.log(Math.abs(xTax.val()) - (parseInt(jTax.val()) + parseInt(data['上期末留抵税额'])));*/
/*                                     lTax.val((Math.abs(xTax.val() - ( jTax.val() + data['上期末留抵税额']))).toFixed(2));*/
/*                                     tTax.val('0.00');*/
/*                                 }*/
/* */
/* */
/*                                 yearTax.val(data["今年累计销售额"]);*/
/* */
/* 								if(_type == 2) {*/
/* 									$('#templateCon #yiban').remove();*/
/*                                     $('#templateCon [syllable]').each(function(i, e) {*/
/*                                         field = $(this).attr('syllable').split(',');*/
/*                                         $(this).val(data[field[0]][field[1]]);*/
/*                                     });*/
/* 								} else {*/
/* 									$('#templateCon #xiao').remove();*/
/* 									for(var i in data['customerInfo']) {*/
/* 										$('#templateCon input').each(function() {*/
/* 											if($(this).attr('field') == i) {*/
/* 												$(this).val(data['customerInfo'][i]);*/
/* 											}*/
/* 										})*/
/* 									}*/
/* 									$('#templateCon [syllable]').each(function(i, e) {*/
/* 										field = $(this).attr('syllable').split(',');*/
/*                                         $(this).val(data[field[0]][field[1]]);*/
/* 									});*/
/* */
/* 									/*for(var i in data['lastMonth']) {*/
/*                                         $('#templateCon input').each(function() {*/
/* 											if($(this).attr('field') == i) {*/
/* 												$(this).val(data['lastMonth'][i]);*/
/* 											} else if($(this).attr('field') == "免抵退") {*/
/* 												$(this).val(data["免抵退"]);*/
/* 											} else if($(this).attr('field') == "llTax") {*/
/* 												$(this).val(data['lastMonth']['lTax']);*/
/* 											}*/
/* 										})*/
/* 									}*//* */
/* 								}*/
/* 							}*/
/* 						});*/
/* 					}*/
/* */
/* 					function save() {*/
/* 						*/
/* 						$("#templateCon .save").click(function() {*/
/*                             var index = $(this).index();*/
/* 							var id = $('#templateCon form').attr('customer_id');*/
/* 							var is_send = false;*/
/* 							if($('#templateCon #sendMsg input:checked').val() == 1) {*/
/* 								is_send = true;*/
/* 							}*/
/* */
/* 							var customer_id = $('#templateCon form').attr('customer_id').trim();*/
/* 							$('#templateCon').find("input,select").each(function() {*/
/* 								if($(this).attr("field") != undefined) {*/
/* 									var sValue = $(this).val();*/
/* 									data[$(this).attr("field")] = $(this).attr("field") == '' ? 0 : sValue;*/
/* 								}*/
/* 							})*/
/* 							var param = {*/
/* 								name: $('#templateCon .item_form').attr('customer_name'),*/
/* 								time: $('#templateCon .item_form').attr('time')*/
/* 							}*/
/* 							if(index == 1) {*/
/* 								data['is_approves'] = 1;*/
/* 							}*/
/* */
/* 							var fileBox = $('#templateCon #fileBox');*/
/* 							var files = [];*/
/* 							if(fileBox.children().length > 0) {*/
/* 								$('#templateCon #fileBox').find('a').each(function(i) {*/
/* 									files.push({*/
/* 										name: $(this).text(),*/
/* 										url: $(this).attr('data-url')*/
/* 									})*/
/* 								})*/
/* */
/* 								data.files = JSON.stringify(files);*/
/* 							}*/
/* 							data['customer_id'] = id;*/
/*                             data['local_time'] = local_time.length > 0 ? JSON.stringify(local_time) : "";*/
/* 							if(data['state_time2'] != "" && data['state_time1'] != "" && parseInt(data['state_time2'].replace(/\./, '')) > parseInt(data['state_time1'].replace(/\./, ''))) {*/
/* 								ykp.prompt("国税结束时间必须大于等于开始时间");*/
/* 								return false;*/
/* 							} else if(data['state_time2'] != "" && data['state_time1'] == "") {*/
/* 								ykp.prompt("国税结束时间必须大于等于开始时间");*/
/* 								return false;*/
/* 							}*/
/* 							if(data['business_time2'] && data['business_time1'] && parseInt(data['business_time2'].replace(/\./, '')) > parseInt(data['business_time1'].replace(/\./, ''))) {*/
/* 								ykp.prompt("工商结束时间必须大于等于开始时间");*/
/* 								return false;*/
/* 							} else if(data['business_time2'] && data['business_time1'] == "") {*/
/* 								ykp.prompt("工商结束时间必须大于等于开始时间");*/
/* 								return false;*/
/* 							}*/
/* 							if(data['taxation_time2'] && data['taxation_time1'] && parseInt(data['taxation_time2'].replace(/\./, '')) > parseInt(data['taxation_time1'].replace(/\./, ''))) {*/
/* 								ykp.prompt("税务结束时间必须大于等于开始时间");*/
/* 								return false;*/
/* 							} else if(data['taxation_time2'] && data['taxation_time1'] == "") {*/
/* 								ykp.prompt("税务结束时间必须大于等于开始时间");*/
/* 								return false;*/
/* 							}*/
/* 							data['business_time'] = data['business_time2'] ? data['business_time2'] + '.01' + "," + data['business_time2'] + '.12' : "";*/
/* 							data['state_time'] = data['state_time2'] + "," + data['state_time1'];*/
/* 							data['taxation_time'] = data['taxation_time2'] ? data['taxation_time2'] + '.01' + "," + data['taxation_time2'] + '.12' : "";*/
/*                             data['year_month_id'] = year_month;*/
/* 							data['prior_period'] = $("#templateCon input[field='上期末留抵税额']").val();*/
/* 							data['current_period'] = $("#templateCon input[field='lTax']").val();*/
/*                               ykp.doAjax({*/
/*                                   url: '/api/api_service/add_tax_details', //换了接口名*/
/*                                   method: 'post',*/
/*                                   data: data,*/
/*                                   success: function(res) {*/
/*                                       if(index ==1){*/
/*                                           submitStatuus = true;*/
/* 									  }*/
/*                                       ykp.prompt("添加成功");*/
/*                                       cs.close();*/
/*                                    //   getTaxList(1, _type);*/
/*                                       if(is_send) {*/
/*                                           sendMsg(customer_id, '报税完成', param);*/
/*                                       }*/
/*                                   }*/
/*                               })*/
/* 						})*/
/* 					}*/
/* 				})*/
/* 			}*/
/* */
/* 			hsearch();*/
/* */
/* 			function hsearch() {*/
/* 				var data = {*/
/* 					url: '/api/api_service/get_tax_list',*/
/* 					methods: 'post',*/
/* 					data: {*/
/* 						"type": 5,*/
/* 					}*/
/* 				}*/
/* */
/* 				cs.hSearch('.search1', data, 'where', true, function(res, _filter, month) {*/
/* 					filter = _filter;*/
/* 					month2 = month;*/
/* 					$('.in').click();*/
/* 					var type = $('.kind').find('.now').index();*/
/* 					var dataList, pagination, dataTable;*/
/* 					data.where = type == 0 ? "khm_customer.tax_type=2" : "khm_customer.tax_type=1";*/
/* 					dataList = type == 0 ? '#dataList' : '#dataList1';*/
/* 					dataTable = type == 0 ? '#dynamic-table1' : '#dynamic-table2';*/
/* 					type = type == 0 ? 2 : 1;*/
/* 					var hstable = type == 2 ? '#heightsearch1' : '#height_search1';*/
/* 					var butt = type == 2 ? '#heightsearch' : '#height_search';*/
/* 					$(butt).removeClass('active');*/
/* 					$(hstable).slideUp();*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt('暂无数据！');*/
/* 						}, 1000);*/
/* 						$(dataList).html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center; color:#7d7d7d;clear:none;" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					}*/
/* 					addList(res, type, dataList, pagination, dataTable);*/
/* 				}, '', {*/
/* 					url: "/api/api_service/bs_assistant_list_new",*/
/* 					type: 1*/
/* 				})*/
/* 			}*/
/* */
/* 			search()*/
/* */
/* 			function search() {*/
/* 				var data = {*/
/* 					url: '/api/api_service/get_tax_list',*/
/* 					methods: 'post',*/
/* 					data: {*/
/* 						"type": 5,*/
/* 					}*/
/* 				}*/
/* */
/* 				cs.doSearch('.search', data, 'where', true, function(res, _filter) {*/
/* 					filter = _filter;*/
/* 					var type = $('.kind').find('.now').index();*/
/* 					var dataList, pagination, dataTable;*/
/* 					if(!isNaN(type)) {*/
/* 						data.where = type == 0 ? "khm_customer.tax_type=2" : "khm_customer.tax_type=1";*/
/* 						dataList = type == 0 ? '#dataList' : '#dataList1';*/
/* 						dataTable = type == 0 ? '#dynamic-table1' : '#dynamic-table2'*/
/* 					}*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt('暂无数据！');*/
/* 						}, 1000);*/
/* 						$(dataList).html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center; color:#7d7d7d;clear:none;" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					}*/
/* 					type = type == 0 ? 2 : 1;*/
/* 					addList(res, type, dataList, pagination, dataTable);*/
/* 				}, '', {*/
/* 					url: "/api/api_service/bs_assistant_list_new",*/
/* 					type: 1*/
/* 				})*/
/* 			}*/
/* */
/* 			//能量条形式控制*/
/* 			$('.easy-pie-chart.percentage').each(function() {*/
/* 				var $box = $(this).closest('.infobox');*/
/* 				var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');*/
/* 				var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';*/
/* 				$(this).easyPieChart({*/
/* 					barColor: barColor,*/
/* 					trackColor: trackColor,*/
/* 					scaleColor: false,*/
/* 					lineCap: 'butt',*/
/* 					lineWidth: 5,*/
/* 					animate: ace.vars['old_ie'] ? false : 1000*/
/* 				});*/
/* 			});*/
/* */
/* 			//高级搜索按钮*/
/* 			cs.showHeightSearch('#heightsearch', '#heightsearch1');*/
/* 			cs.showHeightSearch('#height_search', '#height_search1');*/
/* */
/* 			$('[data-rel=tooltip]').tooltip();*/
/* */
/* 			//        时间插件*/
/* 			if(!ace.vars['old_ie']) {*/
/* 				$('#date-timepicker1').datetimepicker({*/
/* 					// format: 'YYYY-MM-DD',//use this option to display seconds*/
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
/* 		})*/
/* */
/* 		//导入企业*/
/* 		$('#leading-in').change(function() {*/
/* 			var file = this.files[0];*/
/* 			var formData = new FormData();*/
/* 			formData.append('customer', file);*/
/* 			$.ajax({*/
/* 				url: ykp.api_url + '/api/api_customer/upload_batch',*/
/* 				type: 'POST',*/
/* 				cashe: false,*/
/* 				data: formData,*/
/* 				processData: false,*/
/* 				contentType: false,*/
/* 				dataType: 'json'*/
/* 			}).success(function(res) {*/
/* 				if(res.code != 200) {*/
/* 					ykp.prompt(res.msg);*/
/* 					return;*/
/* 				}*/
/* */
/* 				getList();*/
/* 			});*/
/* */
/* 		});*/
/* */
/* 		//加载报税数据*/
/* 		function taxData(target) {*/
/* 			/*$(".edit").click(function(){*//* */
/* 			var id = target.parents('tr').attr('data-id');*/
/* 			var customer_id = target.parents('tr').attr('customer_id');*/
/* 			var index = target.parents('tr').index();*/
/* 			var type = target.attr('tax_type');*/
/* 			getCustomerInfo(type, id, customer_id);*/
/* 			//生成弹税费数据出层*/
/* 			//generatePop(type,data[index],id);*/
/* 			/*})*//* */
/* 		};*/
/* */
/* 		function getCustomerInfo(type, id, customer_id) {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/Api_approves/get_list',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					filter: 'spm_approves.approve_type = 18 and ' + 'customer_id = ' + id*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data.items;*/
/* 					var field = '';*/
/* 					if(!items) {*/
/* 						ykp.prompt('没有数据');*/
/* 						return false;*/
/* 					} else {*/
/* 						for(var i in data) {*/
/* 							if(data[i]['submitted_data']['service_info']['jzm_service_info.id'] == id) {*/
/* 								var _data = data[i]['submitted_data']['tax_info'];*/
/* 								var name = data[i]['spm_approves.customer_name'];*/
/* 								generatePop(type, _data, id, name);*/
/* 							}*/
/* 						}*/
/* 					}*/
/* */
/* 				}*/
/* 			});*/
/* 		};*/
/* 		//税费数据弹出层*/
/* 		function generatePop(type, data, id, name) {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_service/get_tax_info',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					service_id: id*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					var field = '';*/
/* 					$('#templateCon [syllable]').each(function(i, e) {*/
/* 						field = $(this).attr('syllable').split(',');*/
/* 						$(this).text(data[field[0]][field[1]]);*/
/* 					});*/
/* 				}*/
/* 			});*/
/* */
/* 			//							showMark('#small-scale');*/
/* */
/* 			$('#showBox .Title1').text('税费数据');*/
/* */
/* 			$('#templateCon [field]').each(function(index, element) {*/
/* 				if($(this).attr('field') == 'name') {*/
/* 					$(this).text(name);*/
/* 					return true;*/
/* 				}*/
/* 				$(this).text(data[$(this).attr('field')]);*/
/* 			});*/
/* 		};*/
/* */
/* 	</script>*/
