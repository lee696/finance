<?php

/* admin/task/customer.html */
class __TwigTemplate_6f1da318c71ec38d6cff74da6359cc070c89a79e04cd2d3f03417ca327019ed5 extends Twig_Template
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
\t#templateBox #templateCon tr td {
\t\tbackground: #e6ecf2;
\t}
\t
\t#templateBox #templateCon tr td input {
\t\tbackground: #e6ecf2;
\t}
\t
\t#templateBox #templateCon tr td select {
\t\tbackground: #e6ecf2;
\t\tcursor: pointer;
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
\t#templateCon #month {
\t\tfloat: left;
\t\tmargin-left: 250px;
\t\tfont-size: 14px
\t}
\t
\t#templateCon .creator {
\t\tdisplay: none;
\t}
\t
\t#templateCon .layui-colla-content input {
\t\twidth: 70px;
\t}
\t
\t#templateCon .layui-colla-content select {
\t\tmin-width: 70px;
\t}
\t
\t#templateCon .layui-colla-content label {
\t\twidth: 24px;
\t}
\t
\t#showBox {
\t\t/*width:1100px;*/
\t}
\t
\t#templateCon .bootstrap-datetimepicker-widget.dropdown-menu table {
\t\ttable-layout: fixed !important;
\t}
\t
\t#heightsearch1 label,
\t#height_search1 label {
\t\ttext-align: right;
\t\twidth: 80px;
\t\tfont-weight: normal;
\t}
\t
\t#templateCon .increase,
\t#templateCon .decrease {
\t\ttext-align: left;
\t}
\t
\t.dropdown-menu,
\t.bootstrap-datetimepicker-widget {
\t\tz-index: 1000 !important;
\t}
\t#templateBox {
\t\toverflow: visible !important;
\t}
\t#templateBox .custom_table {
\t\toverflow: visible !important;
\t}
.tooltip{
\tposition: absolute;
\tz-index: 99999!important;
}
</style>
<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<div style=\"margin-top: 0px;\">
\t\t\t<!-- <h3 class=\"header smaller lighter blue\">客服</h3> -->
\t\t\t<!--<div class=\"row\">
\t\t\t\t<div style=\"width:100%;height:40px;\">
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 15px;\">
\t\t\t\t\t\t<label> 月份： </label>
\t\t\t\t\t\t<select id=\"tmonth\">
\t\t\t\t\t\t\t<option value=\"1\">1月</option>
\t\t\t\t\t\t\t<option value=\"2\">2月</option>
\t\t\t\t\t\t\t<option value=\"3\">3月</option>
\t\t\t\t\t\t\t<option value=\"4\">4月</option>
\t\t\t\t\t\t\t<option value=\"5\">5月</option>
\t\t\t\t\t\t\t<option value=\"6\">6月</option>
\t\t\t\t\t\t\t<option value=\"7\">7月</option>
\t\t\t\t\t\t\t<option value=\"8\">8月</option>
\t\t\t\t\t\t\t<option value=\"9\">9月</option>
\t\t\t\t\t\t\t<option value=\"10\">10月</option>
\t\t\t\t\t\t\t<option value=\"11\">11月</option>
\t\t\t\t\t\t\t<option value=\"12\">12月</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 15px;\">
\t\t\t\t\t\t<button type=\"button\"  class=\"tsarch btn btn-info btn-sm\">查询</button>
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

\t\t\t\t\t<div class=\"infobox infobox-blue2\">
\t\t\t\t\t\t<div class=\"infobox-progress\">
\t\t\t\t\t\t\t<!-- #section:pages/dashboard.infobox.easypiechart -->
\t\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"0\" data-size=\"50\" style=\"height: 57px;width: 57px;line-height: 56px;\">
\t\t\t\t\t\t\t\t<span class=\"percent\" id=\"percent\"></span>
\t\t\t\t\t\t\t\t<canvas height=\"57\" width=\"57\"></canvas>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"infobox-data\" style=\"margin:3px 0 0 20px;\">
\t\t\t\t\t\t\t<div class=\"infobox-content\" id=\"isOk\"></div>

\t\t\t\t\t\t\t<div class=\"infobox-content\" id=\"noOk\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"infobox-content\" id=\"noOk\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"infobox infobox-blue2\">
\t\t\t\t\t\t<div class=\"infobox-progress\">
\t\t\t\t\t\t\t<!-- #section:pages/dashboard.infobox.easypiechart -->
\t\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"0\" data-size=\"50\" style=\"height: 57px; width: 57px; line-height: 56px;\">
\t\t\t\t\t\t\t\t<span class=\"percent\" id=\"percent1\"></span>
\t\t\t\t\t\t\t\t<canvas height=\"57\" width=\"57\"></canvas></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"infobox-data\" style=\"margin:3px 0 0 20px;\">
\t\t\t\t\t\t\t<div class=\"infobox-content\" id=\"isOk\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"infobox-content\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"infobox infobox-blue2\">
\t\t\t\t\t\t<div class=\"infobox-progress\">
\t\t\t\t\t\t\t<!-- #section:pages/dashboard.infobox.easypiechart -->
\t\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"0\" data-size=\"50\" style=\"height: 57px; width: 57px; line-height: 56px;\">
\t\t\t\t\t\t\t\t<span class=\"percent\" id=\"percent3\"></span>
\t\t\t\t\t\t\t\t<canvas height=\"57\" width=\"57\"></canvas></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"infobox-data\" style=\"margin:3px 0 0 20px;\">
\t\t\t\t\t\t\t<div class=\"infobox-content\" id=\"isOk\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"infobox-content\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"infobox infobox-blue2\">
\t\t\t\t\t\t<div class=\"infobox-progress\">
\t\t\t\t\t\t\t<!-- #section:pages/dashboard.infobox.easypiechart -->
\t\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"\" data-size=\"50\" style=\"height: 57px; width: 57px; line-height: 56px;\">
\t\t\t\t\t\t\t\t<span class=\"percent\" id=\"percent4\"></span>
\t\t\t\t\t\t\t\t<canvas height=\"57\" width=\"57\"></canvas></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"infobox-data\" style=\"margin:3px 0 0 20px;\">
\t\t\t\t\t\t\t<div class=\"infobox-content\" id=\"isOk\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"infobox-content\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12\" style=\"margin-top: 50px;padding-left:0;padding-right:0; \">

\t\t\t\t<div class=\"kind\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"now\">小规模</li>
\t\t\t\t\t\t<li>一般纳税人</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"tspage\" style=\"border: 0px red solid; width: 480px;height: 30px;display:none;\">
\t\t\t\t\t\t<a id=\"go_\" href=\"javascript:void(0)\">有部分一般纳税人数据,点击前往</a>
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"close_ts\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div id=\"task-tab\" class=\"tab-pane active\">
\t\t\t\t\t\t\t\t<div class=\"row\" style=\"margin-top: 20px;\" id=\"topTool\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" pts=1 sear=\"customer_name\" placeholder=\"企业名称\" autofocus/>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" pts=0 sear=\"khm_customer.customer_num\" placeholder=\"企业编码\" autofocus/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t                     <select style=\"width: 180px\" pts=3 sear=\"jzm_service_info.fuze_id\" class=\"advandced-search select2-hidden-accssible\"  tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t                    <option value=\"\">负责人</option>
\t\t\t\t\t                     </select>
\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"search\" title=\"搜索\" class=\" search btn btn-info btn-sm\">
                                        <i class=\"fa fa-search\"></i> 
                                    </button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<button id=\"heightsearch\" title=\"高级搜索\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
                                        <i class=\"fa fa-filter\"></i>
                                    </button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<button class=\"flush btn btn-info btn-sm\" title=\"刷新\" type=\"button\" style=\" background-color: #32CD32\t !important;\">
\t\t\t\t\t                    <i class=\"fa fa-refresh\"></i>
\t\t\t\t\t                </button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"98\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<label type=\"button\" id=\"mergeItem\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" title=\" 导入\" class=\"btn btn-info btn-sm position-relative mergeItem\" for=\"leading-in\">
\t\t\t                            <i class=\"fa fa-sign-in\"></i>
\t\t\t                       </label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"289\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"分配负责人\" id=\"moveToClue\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"moveToClue btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-hand-o-right\"></i>
\t\t\t\t\t\t                </button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<button id=\"complaint\" contentAuthority=\"101\" title=\"投诉列表\" class=\"btn-warning js_complaint complaint btn btn-sm\" style=\"background: #ffa500;border-color: #ffa500\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bookmark-o\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:290px;height: 36px\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px;
\t\t\t\t\t\t\t\t\t\tbackground: #E6E6E6;\" data-kind=\"0\"> 查看全部</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"1\"> 我负责的</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"2\"> 我关注的</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"3\"> 我的下属</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!--高级搜索-->
\t\t\t\t\t\t\t\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"margin-top:30px;position: absolute; background: #fff; z-index: 1041;padding: 20px 10px; display: none;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>年份</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=5 sear=\"year\" data-year=\"true\"></select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>月份</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=5 sear=\"month\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"01\"> 1月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"02\"> 2月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"03\"> 3月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"04\"> 4月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"05\"> 5月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"06\"> 6月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"07\"> 7月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"08\"> 8月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"09\"> 9月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"10\"> 10月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\"> 11月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"12\"> 12月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>企业名称</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.name\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>客户编码</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.id\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>仓位</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select gjs=3 sear=\"ckm_position_num.pos_id\" class=\"cw\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>服务周期</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select gjs=0 sear=\"htm_contract.payment_cycle\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"> 每月</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\"> 季度 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\"> 半年 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"12\"> 一年 </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>负责人</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select style=\"margin-right: 12px !important;width: 180px\" gjs=\"0\" data-type=\"gj\" sear=\"jzm_service_info.fuze_id\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>收款情况</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select gjs=0 sear=\"jzm_service_info.get_money\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\"> 已收款 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"> 未收款 </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>审批状态</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select gjs=0 sear=\"jzm_service_info.status\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\"> 未开始</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"> 待审批</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\"> 已通过 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\"> 未通过 </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\"clear:both;padding-top:10px;text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t                        查询
\t\t\t\t\t\t                    </button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"rest\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t                       重置
\t\t\t\t\t\t\t                    </button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- 小规模 -->
\t\t\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"custom_table\">

\t\t\t\t\t\t\t\t\t\t\t<table id=\"dynamic-table1\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"center\">
\t\t\t\t\t\t\t\t\t                        <label class=\"pos-rel\">
\t\t\t\t\t\t\t\t\t                        <input type=\"checkbox\" name=\"check\" class=\"ace\" onclick=\"checkAll(this.checked)\"/>
\t\t\t\t\t\t\t\t\t                        <span class=\"lbl\"></span>
\t\t\t\t\t\t\t\t\t                        </label>
\t\t\t\t\t\t\t\t\t                    </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"1\">企业名称</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"2\">任务等级</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"3\">客户编码</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"4\">仓位编码</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"5\">服务周期</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"6\">逾期</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"7\">截止月份</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"8\">负责人</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"9\">基本户</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"10\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"11\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"12\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"13\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"14\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"15\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"16\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"17\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"18\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"19\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"20\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"21\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--<th>操作</th>-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"dataList\">

\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t<div align=\"center\" class=\"paginationCon\">
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"pagination\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"member-tab\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t<div class=\"row\" style=\"margin-top: 20px;\" id=\"topTool\">
\t\t\t\t\t\t\t\t\t<!--普通搜索-->
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" pts=1 sear=\"customer_name\" placeholder=\"企业名称\" autofocus/>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" pts=0 sear=\"khm_customer.customer_num\" placeholder=\"企业编码\" autofocus/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<!--<input type=\"text\" pts=1 sear=\"staff_name\" placeholder=\"负责人\" autofocus/>-->
\t\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" pts=3 sear=\"jzm_service_info.fuze_id\" class=\"advandced-search select2-hidden-accssible\"  tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">负责人</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"search\" class=\"search btn btn-info btn-sm\">
                                        \t<i class=\"fa fa-search\"></i>
                                        </button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<button id=\"height_search\" type=\"button\" class=\" btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
                                            <i class=\"fa fa-filter\"></i>
                                        </button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<button class=\"flush btn btn-info btn-sm\" type=\"button\" style=\"background-color:#32CD32!important;\">
\t\t\t\t\t\t                    <i class=\"fa fa-refresh\"></i>
\t\t\t\t\t\t                </button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"98\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<label type=\"button\" id=\"mergeItem\" title=\" 导入\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"btn btn-info btn-sm position-relative mergeItem\" for=\"leading-in\">
\t\t\t\t                            <i class=\"fa fa-sign-in\"></i>

\t\t\t\t                       </label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"289\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"分配负责人\" id=\"moveToClue\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"moveToClue btn addBtn btn-info btn-sm position-relative\">
                                            <i class=\"fa fa-hand-o-right\"></i>
\t\t\t\t\t\t                </button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<button id=\"js_complaint\" title=\"投诉列表\" contentAuthority=\"101\" class=\"btn-warning js_complaint complaint btn btn-sm\" style=\"background: #ffa500;border-color: #ffa500\">
                                            <i class=\"fa fa-bookmark-o\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:290px;height: 36px\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px;
\t\t\t\t\t\t\t\t\t\t\tbackground: #E6E6E6;\" data-kind=\"0\"> 查看全部</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"1\"> 我负责的</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"2\"> 我关注的</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"3\"> 我的下属</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!--高级搜索-->
\t\t\t\t\t\t\t\t\t<div id=\"height_search1\" class=\"col-sx-12\" style=\"margin-top:30px;position: absolute; background: #fff; z-index: 1041;padding: 20px 10px; display: none;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>年份</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=5 sear=\"year\" data-year=\"true\"></select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>月份</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=5 sear=\"month\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"01\"> 1月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"02\"> 2月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"03\"> 3月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"05\"> 5月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"04\"> 4月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"07\"> 7月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"06\"> 6月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"08\"> 8月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"09\"> 9月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"10\"> 10月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\"> 11月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"12\"> 12月 </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>企业名称</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.name\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>客户编码</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.id\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>仓位</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select gjs=3 sear=\"ckm_position_num.pos_id\" class=\"cw\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>服务周期</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select gjs=0 sear=\"htm_contract.payment_cycle\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"> 每月</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\"> 季度 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\"> 半年 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"12\"> 一年 </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>负责人</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select style=\"margin-right: 12px !important;width: 180px\" gjs=\"0\" data-type=\"gj\" sear=\"jzm_service_info.fuze_id\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>收款情况</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select gjs=0 sear=\"jzm_service_info.get_money\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\"> 已收款 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"> 未收款 </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>审批状态</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select gjs=0 sear=\"jzm_service_info.status\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\"> 未开始</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"> 待审批</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\"> 已通过</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\"> 未通过</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\"clear:both;padding-top:10px;text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t                        查询
\t\t\t\t\t\t                    </button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"rest1\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t                       重置
\t\t\t\t\t\t\t                    </button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- 一般纳税人表格 -->
\t\t\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"custom_table\">

\t\t\t\t\t\t\t\t\t\t\t<table id=\"dynamic-table2\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"center\">
\t\t\t\t\t\t\t\t\t                        <label class=\"pos-rel\">
\t\t\t\t\t\t\t\t\t                        <input type=\"checkbox\" name=\"check\" class=\"ace\" onclick=\"checkAll(this.checked)\"/>
\t\t\t\t\t\t\t\t\t                        <span class=\"lbl\"></span>
\t\t\t\t\t\t\t\t\t                        </label>
\t\t\t\t\t\t\t\t\t                    </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"1\">企业名称</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"2\">任务等级</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"3\">客户编码</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"4\">仓位编码</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"5\">服务周期</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"6\">逾期</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"7\">截止月份</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"8\">负责人</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"9\">基本户</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"10\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"11\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"12\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"13\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"14\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"15\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"16\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"17\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"18\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"19\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"20\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"21\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--<th>操作</th>-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"dataList1\">

\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" id=\"num\"></div>
\t\t\t\t\t\t\t\t<div id=\"pageBar\" class=\"pagination\"></div>
\t\t\t\t\t\t\t\t<div align=\"right\" style=\"float: right;  width: 10%;\">

\t\t\t\t\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.#member-tab -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.widget-main -->
\t\t\t\t</div>
\t\t\t\t<!-- /.widget-body -->
\t\t\t</div>
\t\t</div>
\t\t<!-- /.widget-box -->
\t</div>
\t<!-- /.col -->
</div>

<!-- 工资单 -->

<div id=\"payroll_table\" style=\"display:none\">
\t<div class=\"print_area\">
\t\t<style media=print type=\"text/css\">
\t\t\t.widget-header-small {
\t\t\t\ttext-align: center;
\t\t\t\tborder-bottom: 1px solid #000;
\t\t\t\tpadding-bottom: 5px;
\t\t\t}
\t\t\t
\t\t\t#month {
\t\t\t\tfloat: right;
\t\t\t}
\t\t\t
\t\t\t.title {
\t\t\t\tfont-size: 22px !important;
\t\t\t\tletter-spacing: 15px !important;
\t\t\t}
\t\t\t
\t\t\ttable {
\t\t\t\twidth: 100%;
\t\t\t\tborder: 1px solid #000;
\t\t\t\tborder-collapse: collapse;
\t\t\t}
\t\t\t
\t\t\ttable thead tr {
\t\t\t\theight: 42px;
\t\t\t}
\t\t\t
\t\t\ttd {
\t\t\t\ttext-align: center;
\t\t\t\tborder: 1px solid #000;
\t\t\t\twhite-space: nowrap !important;
\t\t\t\ttext-align: center;
\t\t\t}
\t\t\t
\t\t\ttd {
\t\t\t\theight: 40px;
\t\t\t\twidth: 12.5%;
\t\t\t}
\t\t\t
\t\t\tinput {
\t\t\t\tborder: none;
\t\t\t\ttext-align: center;
\t\t\t}
\t\t\t
\t\t\t.creator {
\t\t\t\tdisplay: table-row;
\t\t\t}
\t\t</style>
\t\t<div style=\"width: 100%;height: 35px; line-height: 35px\">
\t\t\t<div id=\"wage_customer_name\" class=\"no-print\" style=\"float:left;color:bule;font-size: 14px\">
\t\t\t\t企业名称：<span>深圳美睦</span>
\t\t\t</div>
\t\t\t<div id=\"month\" class=\"no-print\">
\t\t\t\t所属月份：
\t\t\t\t<select style=\"margin:0 10px 0 5px;\">
\t\t\t\t\t<!--<option selected=\"selected\">201602</option>-->
\t\t\t\t</select>
\t\t\t</div>

\t\t\t<div class=\"col-sx-4 no-print\" style=\" float: right;margin-top: 1px; margin-right: 15px;\">
\t\t\t\t<button class=\"print btn btn-info btn-sm\">
\t\t            打印
\t\t        </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4 no-print\" style=\" float: right;margin-top: 1px; margin-right: 15px;\">
\t\t\t\t<button class=\"save btn btn-info btn-sm\">
\t\t            保存
\t\t        </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4 no-print\" style=\" float: right;margin-top: 1px; margin-right: 15px;\">
\t\t\t\t<button type=\"button\" id=\"addItem\" style=\"padding-left:21px;outline: none;\" class=\"btn btn-info btn-sm position-relative\">
\t\t            <i class=\"fa fa-plus\"></i>
\t\t            添加
\t\t        </button>
\t\t\t</div>
\t\t</div>

\t\t<table class=\"table table-bordered\">
\t\t\t<thead class=\"print_box\" style=\"display: none;\">
\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t<td class=\"center\" colspan=\"10\" style=\"width: 100px!important;  letter-spacing: 10px;\">工资表</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t<td colspan=\"4\"  style=\"text-align: left;padding-left: 10px;\" class=\"comtomName\"></td>
\t\t\t\t\t<td colspan=\"4\" style=\"text-align: right;padding-right: 10px;\" class=\"year_month\"></td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<thead>
\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t<td class=\"center\">序号</td>
\t\t\t\t\t<td class=\"center\" style=\"width: 100px!important\">姓名</td>
\t\t\t\t\t<td class=\"center\" style=\"width: 100px!important\">基本工资</td>
\t\t\t\t\t<td class=\"center\" style=\"width: 100px!important\">出勤天数</td>
\t\t\t\t\t<td class=\"center\" style=\"width: 100px!important\">日工资</td>
\t\t\t\t\t<td class=\"center\" style=\"width: 100px!important\">社保</td>
\t\t\t\t\t<td class=\"center\" style=\"width: 100px!important\">总金额</td>
\t\t\t\t\t<td class=\"center\" style=\"width: 100px!important\">领款人签章</td>
\t\t\t\t\t<td class=\"center no-print\">操作</td>
\t\t\t\t</tr>
\t\t\t</thead>

\t\t\t<tbody id=\"payrollList\">
\t\t\t\t<!-- 工资单列表 -->
\t\t\t</tbody>
\t\t\t<tfoot id=\"itemsTotal\">
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">合计</td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td class=\"no-print\"></td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"creator\">
\t\t\t\t\t<td></td>
\t\t\t\t\t<td>制表：</td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td>审核：</td>
\t\t\t\t\t<td></td>
\t\t\t\t</tr>
\t\t\t</tfoot>
\t\t</table>
\t\t<p class=\"remark\" style=\"padding:5px 0;color:#888;\">备注：</p>
\t\t<p class=\"remark\" style=\"color:#888;\">
\t\t\t<span style=\"padding:0 30px 0 0;\">日工资 = 基本工资 / 天数（默认为24天）</span>
\t\t\t<span>总金额 = 总工资 - 社保</span>
\t\t</p>
\t</div>
</div>

<!-- 查看投诉列表 -->

<div id=\"complaint_list\" style=\"display:none\">

\t<table class=\"table table-bordered\" id=\"bordered\" style=\"margin-top: 20px;\">
\t\t<thead>
\t\t\t<tr class=\"thColor\">
\t\t\t\t
\t\t\t\t<th class=\"center\">企业名称</th>
\t\t\t\t<th class=\"center\">客户姓名</th>
\t\t\t\t<th class=\"center\">联系电话</th>
\t\t\t\t<th class=\"center\">时间</th>
\t\t\t\t<th class=\"center\">内容</th>
\t\t\t\t<th class=\"center\">备注</th>
\t\t\t\t<th class=\"center\">负责人</th>
\t\t\t\t<th class=\"center\">解决状态</th>
\t\t\t\t<th class=\"center\">解决备注</th>
\t\t\t\t<th class=\"center\">创建人</th>
\t\t\t\t<th class=\"center\">创建时间</th>
\t\t\t\t<th class=\"center\">审批人</th>
\t\t\t\t<th class=\"center\">审批时间</th>
\t\t\t\t<th class=\"center\">审批结果</th>
\t\t\t\t<th class=\"center\">审批回复</th>
\t\t\t\t<th class=\"center\">操作</th>
\t\t\t</tr>
\t\t</thead>

\t\t<tbody id=\"complaint_datalist\">

\t\t</tbody>
\t</table>
\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" class=\"_num\"></div>
\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t<div class=\"pageBar pagination\"></div>
\t\t<!-- <div align=\"right\" style=\"float: right;  width: 10%;\">
\t\t\t<select style=\"width: 100px;\" id=\"selectChoice\">
\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t</select>
\t\t</div> -->
\t</div>
</div>

<!--添加投诉建议界面-->
<div class=\"row\" id=\"complaint_advice_table\" style=\"display:none;\">
\t<div style=\"margin-top:15px;\">
\t\t<label> 企业名称： </label>
\t\t<input class=\"required\" style=\"width:180px;\" title_=\"name\" />
\t\t<label> 客户姓名： </label>
\t\t<select class=\"required\" style=\"width: 180px\" title_=\"customer_name\">
\t\t\t<option value=\"\"> 请选择联系人 </option>
\t\t</select>
\t</div>

\t<div style=\"margin-top:15px;\">
\t\t<label> 联系电话： </label>
\t\t<input class=\"introducer required\" style=\"width:180px;\" title_=\"customer_tel\">
\t\t<label class=\"introducer \">客户类型：</label>
\t\t<select style=\"width:180px;\" class=\"required\" title_=\"type\">
\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t<option value=\"1\">投诉</option>
\t\t\t<option value=\"2\">意见</option>
\t\t</select>
\t</div>

\t<div style=\"margin-top:15px;\">
\t\t<label> 时间：</label>
\t\t<input id=\"date-timepicker1\" style=\"width:180px;\" title_=\"time\" />
\t\t<label> 内容： </label>
\t\t<input title_=\"content\" style=\"width:180px;\" />
\t</div>

\t<div style=\"margin-top:15px;\">
\t\t<label> 负责人:</label>
\t\t<select title_=\"duto\" style=\"width:180px;\">
\t\t\t<option value=\"\"> 请选择 </option>
\t\t</select>
\t\t<label> 解决状态：</label>
\t\t<select style=\"width:180px;\" class=\"required\" title_=\"status\">
\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t<option value=\"0\">未解决</option>
\t\t\t<option value=\"1\">已解决</option>
\t\t\t<option value=\"2\">解决中</option>
\t\t</select>
\t</div>

\t<div style=\"margin-top:15px; \">
\t\t<label style=\"float:left;\"> 备注:</label>
\t\t<textarea title_=\"remark\" style=\"width:calc(100% - 132px);margin-left:5px;resize:none;\" class=\"in_remark\"></textarea>
\t</div>

\t<div style=\"text-align:center;margin-top:15px;\">
\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>

\t\t<button class=\"sure_button addcomplaint\">
                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                        保存
                    </button>
\t</div>
</div>

<!-- <div id=\"template\" style=\"display:none;\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-12\" style=\"margin-top: 50px;\">
\t\t\t<table id=\"dynamic-table\" class=\"table table-striped table-bordered table-hover\" style=\"margin-bottom:0px;\">
\t\t\t\t<thead>   
\t\t\t\t\t\t<th class=\"center\">客户姓名</th>
\t\t\t\t\t\t<th class=\"hidden-480 center \">类型</th>
\t\t\t\t\t\t<th class=\"hidden-480 center\">时间</th>
\t\t\t\t\t\t<th class=\"hidden-480 center\">内容</th>
\t\t\t\t\t\t<th class=\"hidden-480 center\">负责人</th>
\t\t\t\t\t\t<th class=\"hidden-480 center\">创建人</th>
\t\t\t\t\t\t<th class=\"hidden-480 center\">创建时间</th>
\t\t\t\t\t</tr>

\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"form-field-1\" placeholder=\" \" class=\"col-xs-12 col-sm-12\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"form-field-1\" placeholder=\" \" class=\"col-xs-12 col-sm-12\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"form-field-1\" placeholder=\" \" class=\"col-xs-12 col-sm-12\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"form-field-1\" placeholder=\" \" class=\"col-xs-12 col-sm-12\">
\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"form-field-1\" placeholder=\" \" class=\"col-xs-12 col-sm-12\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"form-field-1\" placeholder=\" \" class=\"col-xs-12 col-sm-12\">
\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"form-field-1\" placeholder=\" \" class=\"col-xs-12 col-sm-12\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" id=\"form-field-1\" placeholder=\" \" class=\"col-xs-12 col-sm-12\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"form-field-1\" placeholder=\" \" class=\"col-xs-12 col-sm-12\">
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>

\t\t\t</table>
\t\t\t<div class=\"btn-group pull-right\" style=\"margin-top: 15px;;\">
\t\t\t\t<button class=\"btn btn-info\" id=\"add\">
                        \t保存
                    </button>
\t\t\t</div>
\t\t</div>
\t</div>
</div> -->

<!--销项采集，进项采集-->
<div id=\"addList\" class=\"widget-box transparent\" id=\"recent-box\" style=\"display:none ;\">
\t<div>
\t\t<div style=\"padding:10px;\">
\t\t\t<h3 style=\"font-size:16px;\">销项采集</h3>
\t\t</div>
\t\t<div>
\t\t\t<div class=\"layui-collapse\">
\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t<h2 class=\"layui-colla-title\">增值税专用发票</h2>
\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th><label class=\"increase\" style=\"font-size:20px;cursor:pointer;\">+</label></th>
\t\t\t\t\t\t\t\t\t\t<th>份数</th>
\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t<th>计税方式</th>
\t\t\t\t\t\t\t\t\t\t<th>征税项目</th>
\t\t\t\t\t\t\t\t\t\t<th>是否作废</th>
\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"x1\">
\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t<td><label class=\"decrease\" style=\"font-size:20px;cursor:pointer;\">-</label></td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" field=\"invoice\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" field=\"money\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" field=\"amount_of_tax\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>未作废</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>否</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t<h2 class=\"layui-colla-title\">税控机动车专用发票</h2>
\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th><label class=\"increase\" style=\"font-size:20px;cursor:pointer;\">+</label></th>
\t\t\t\t\t\t\t\t\t\t<th>份数</th>
\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t<th>计税方式</th>
\t\t\t\t\t\t\t\t\t\t<th>征税项目</th>
\t\t\t\t\t\t\t\t\t\t<th>是否作废</th>
\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"x2\">
\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t<td><label class=\"decrease\" style=\"font-size:20px;cursor:pointer;\">-</label></td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" field=\"invoice\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" field=\"money\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" field=\"amount_of_tax\"  />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>未作废</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>否</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t<h2 class=\"layui-colla-title\">普通发票</h2>
\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th><label class=\"increase\" style=\"font-size:20px;cursor:pointer;\">+</label></th>
\t\t\t\t\t\t\t\t\t\t<th>份数</th>
\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t<th>计税方式</th>
\t\t\t\t\t\t\t\t\t\t<th>征税项目</th>
\t\t\t\t\t\t\t\t\t\t<th>是否作废</th>
\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"x3\">
\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t<td><label class=\"decrease\" style=\"font-size:20px;cursor:pointer;\">-</label></td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" field=\"invoice\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" field=\"money\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" field=\"amount_of_tax\"  />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>未作废</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>否</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t<h2 class=\"layui-colla-title\">未开具发票</h2>
\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th><label class=\"increase\" style=\"font-size:20px;cursor:pointer;\">+</label></th>
\t\t\t\t\t\t\t\t\t\t<th>业务类型</th>
\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t<th>计税方式</th>
\t\t\t\t\t\t\t\t\t\t<th>征税项目</th>
\t\t\t\t\t\t\t\t\t\t<th>是否作废</th>
\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t<th>税款所属期</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"x4\">
\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t<td><label class=\"decrease\" style=\"font-size:20px;cursor:pointer;\">-</label></td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"type\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">无票视同销售</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">增值税专用发票</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">增值税普通发票</option>
\t\t\t\t\t\t\t\t\t\t\t\t<!--<option value=\"4\">注册商标</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">注销公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">申请一般纳税人</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">记账报税</option>-->
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" field=\"money\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" field=\"amount_of_tax\"  />
\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>未作废</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>否</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<!--<input type=\"text\" field=\"tax_money_period\" />-->
\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_money_period\" style=\"width:180px\" class=\"tax_money_period\">
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t<h2 class=\"layui-colla-title\">纳税检查调整</h2>
\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th><label class=\"increase\" style=\"font-size:20px;cursor:pointer;\">+</label></th>
\t\t\t\t\t\t\t\t\t\t<th>业务类型</th>
\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t<th>计税方式</th>
\t\t\t\t\t\t\t\t\t\t<th>征税项目</th>
\t\t\t\t\t\t\t\t\t\t<th>是否作废</th>
\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t<th>税款所属期</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"x5\">
\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t<td><label class=\"decrease\" style=\"font-size:20px;cursor:pointer;\">-</label></td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"type\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">无票视同销售</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">增值税专用发票</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">增值税普通发票</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" field=\"money\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" field=\"amount_of_tax\"  />
\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>未作废</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>否</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_money_period\" style=\"width:80px\" class=\"tax_money_period\">
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<!--<input field=\"tax_money_period\" type=\"text\" />-->
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t<h2 class=\"layui-colla-title\">地税开具其他发票及未开票销售额</h2>
\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th><label class=\"increase\" style=\"font-size:20px;cursor:pointer;\">+</label></th>
\t\t\t\t\t\t\t\t\t\t<th>份数</th>
\t\t\t\t\t\t\t\t\t\t<th>业务类型</th>
\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t<th>计税方式</th>
\t\t\t\t\t\t\t\t\t\t<th>征税项目</th>
\t\t\t\t\t\t\t\t\t\t<th>是否作废</th>
\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t<th>税款所属期</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"x6\">
\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t<td><label class=\"decrease\" style=\"font-size:20px;cursor:pointer;\">-</label></td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" field=\"invoice\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"type\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">无票视同销售</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">增值税专用发票</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">增值税普通发票</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input field=\"money\" type=\"number\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input field=\"amount_of_tax\" type=\"number\"  />
\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>未作废</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>否</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<!--//<input field=\"tax_money_period\" type=\"text\" />-->
\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_money_period\" style=\"width:80px\" class=\"tax_money_period\">
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div style=\"display:none;\" class=\"jxcj\">
\t\t<div style=\"padding:10px 0;\">
\t\t\t<h3 style=\"font-size:16px;\">进项采集</h3>
\t\t</div>
\t\t<div>
\t\t\t<div class=\"layui-collapse\">
\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t<h2 class=\"layui-colla-title\">增值税专用发票</h2>
\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t<div class=\"custom_table\" style=\"overflow:visible;\">
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th><label class=\"increase\" style=\"font-size:20px;cursor:pointer;\">+</label></th>
\t\t\t\t\t\t\t\t\t\t<th>份数</th>
\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t<th>是否抵扣</th>
\t\t\t\t\t\t\t\t\t\t<th>申报所属期</th>
\t\t\t\t\t\t\t\t\t\t<th>认证日期</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"j1\">
\t\t\t\t\t\t\t\t\t<tr class=\"model\" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t<td><label class=\"decrease\" style=\"font-size:20px;cursor:pointer;\">-</label></td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input field=\"invoice\" type=\"number\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input field=\"money\" type=\"number\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input field=\"amount_of_tax\" type=\"number\"  />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>否</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"deductible\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<!--//<input field=\"tax_money_period\" type=\"text\" />-->
\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_money_period\" style=\"width:180px\" class=\"tax_money_period\">
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<!--<input field=\"declare_period\" type=\"number\" />-->
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"date-timepicker1\" field=\"auth_time\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
\t\t\t\t\t\t                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t<h2 class=\"layui-colla-title\">税控机动车发票</h2>
\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th><label class=\"increase\" style=\"font-size:20px;cursor:pointer;\">+</label></th>
\t\t\t\t\t\t\t\t\t\t<th>份数</th>
\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t<th>是否抵扣</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"j2\">
\t\t\t\t\t\t\t\t\t<tr class=\"model\"  style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t<td><label class=\"decrease\" style=\"font-size:20px;cursor:pointer;\">-</label></td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input field=\"invoice\" type=\"number\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input field=\"money\" type=\"number\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input field=\"amount_of_tax\" type=\"number\"  />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>否</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select field=\"deductible\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t <div id=\"sendMsg\" customer_id=\"\" style=\"height: 30px;line-height: 40px\">
\t\t<label style=\"margin-left:-40px\" >是否发送短信：</label>
\t\t<input type=\"radio\" value=\"1\" name=\"is_send\" >是
\t\t<input type=\"radio\" value=\"2\" name=\"is_send\" checked=\"true\">否
\t</div>
\t<div style=\"text-align:right;margin-top:15px;\">
\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
\t\t<button class=\"close_get btn btn-info btn-sm\">
\t\t\t\t\t关闭
\t\t\t\t</button>
\t\t<button class=\"sure_button addcomplaint btn btn-info btn-sm\">
                保存
            </button>
\t\t<button class=\"sure_button addcomplaint btn btn-info btn-sm\">
                无数据保存
            </button>
\t</div>
</div>
<!--测试-->
<div class=\"label_popup\" id=\"export\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t\t\t\t            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t<span style=\"display: inline-block;\">导入客服</span>
\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t</div>
\t\t<div style=\"padding: 10px 50px;\">
\t\t\t<input type=\"file\" width=\"200px\" style=\"margin: auto;\" id=\"efile\" />
\t\t\t<!--<hr>-->
\t\t</div>
\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t<button id=\"ghItem\" class=\" btn\">客服模板</button>
\t\t\t<button class=\"btn btn-info  submit\" style=\"padding: 6px; border-radius: 0px;\">保存</button>
\t\t</div>
\t</div>
</div>
";
        // line 1793
        $this->loadTemplate("admin/mark.html", "admin/task/customer.html", 1793)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/task/customer.html", 1793)->display($context);
        // line 1794
        echo "<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/assets/js/jQuery.print.js\"></script>
<script src=\"/resource/adimin/components/_mod/easypiechart/jquery.easypiechart.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<!-- inline scripts related to this page -->
<script type=\"text/javascript\">
\tjQuery.fn.dataTableExt.oSort['string-case-asc'] = function(x, y) {
\t\treturn((x < y) ? -1 : ((x > y) ? 1 : 0));
\t};

\tjQuery.fn.dataTableExt.oSort['string-case-desc'] = function(x, y) {
\t\treturn((x < y) ? 1 : ((x > y) ? -1 : 0));
\t};

\tjQuery(function(\$) {
\t\tcs.getNodes([98, 289]);
\t\tvar ftype = 2;
\t\tvar curPage = 1;
\t\tvar pagesize = 10;
\t\tvar employees = {};
\t\tvar order = 'jzm_service_info.id desc';
\t\tvar where = '';
\t\tvar month2 = \"\";
\t\tvar param = {
\t\t\taid: ykp.getCookie('aid'),
\t\t\ttime: ykp.getCookie(\"time\"),
\t\t\ttimestamp: '',
\t\t\tflag: false
\t\t};
\t\tvar filter = \"\";
\t\tvar num = 0;
\t\tvar hMonth = [];
\t\thMonth = hMonth = cs.last_year_month();
\t\ttpage();
\t\t//跳转页面接收
\t\tfunction tpage() {
\t\t\tif(param.time != \"\" && param.time != undefined) {
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
\t\t\t\t\t\tparam.timestamp = `jzm_service_info.com_time>\${today}`;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '2':
\t\t\t\t\t\tparam.timestamp = `jzm_service_info.com_time<\${today} and jzm_service_info.com_time>\${today-86400}`
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '3':
\t\t\t\t\t\tparam.timestamp = `jzm_service_info.com_time>\${today-86400*6}`;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '4':
\t\t\t\t\t\tparam.timestamp = `jzm_service_info.com_time>\${today-86400*29}`;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '5':
\t\t\t\t\t\tparam.timestamp = `jzm_service_info.com_time>\${today-86400*day_1}`;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '6':
\t\t\t\t\t\tparam.timestamp = `jzm_service_info.com_time<\${today-86400*day_1} and  jzm_service_info.com_time>\${newdaytime}`;
\t\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tvar data = {
\t\t\t\t\t\"type\": 4,
\t\t\t\t\t\"page\": curPage,
\t\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\t\"where\": `\${param.timestamp}`
\t\t\t\t}
\t\t\t\tif(param.aid != '' || param.aid != undefined) {
\t\t\t\t\tdata['staff_name'] = param.aid;
\t\t\t\t\tparam.flag = true;
\t\t\t\t}
\t\t\t\t//先拿到所有数据
\t\t\t\tgetAccountList_3(data);
\t\t\t\tykp.setCookie(\"aid\", \"\", (1 / 24));
\t\t\t\tykp.setCookie(\"time\", \"\", (1 / 24));
\t\t\t\t//首页上方跳过来
\t\t\t} else if(ykp.getCookie('titleTask') && ykp.getCookie('titleTask') != '') {
\t\t\t\tvar data = {
\t\t\t\t\t\"type\": 4,
\t\t\t\t\t\"page\": curPage,
\t\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\t\"where\": `jzm_service_info.overdue > 0`
\t\t\t\t}
\t\t\t\tif(ykp.getCookie('titleTask') == 8) {
\t\t\t\t\tvar thisMonth = cs.getNowTime(new Date().setHours(0, 0, 0, 0) / 1000).substring(0, 7).replace('-', '');
\t\t\t\t\tdelete(data['where']);
\t\t\t\t\tdata['month2'] = thisMonth;
\t\t\t\t\tdata['month1'] = thisMonth;
\t\t\t\t}
\t\t\t\tgetAccountList_3(data);
\t\t\t\tykp.setCookie(\"titleTask\", \"\", (1 / 24));
\t\t\t\t//详情页跳过来
\t\t\t} else if(ykp.getCookie('detailsId') != undefined && ykp.getCookie('detailsId') != '') {
\t\t\t\tvar id = ykp.getCookie('detailsId');
\t\t\t\tvar data = {
\t\t\t\t\t\"type\": 4,
\t\t\t\t\t\"page\": curPage,
\t\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\t\"where\": 'htm_contract.id=' + id
\t\t\t\t}
\t\t\t\tgetAccountList_4(data);
\t\t\t\tykp.setCookie(\"detailsId\", '', (1 / 24));
\t\t\t} else {
\t\t\t\t//获取列表数据
\t\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\t\tykp.setCookie(\"where\", \"\");
\t\t\t\twhere = filter = '';
\t\t\t\tgetAccountList(1, ftype);
\t\t\t}
\t\t}

\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_service/service_list',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: where,
\t\t\t\tlimit: pagesize,
\t\t\t\ttype: 4
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '#pageBar'
\t\t\t},
\t\t\tcheck: true,
\t\t\tinitOrder: 'khm_customer.id',
\t\t\tdefaultOrder: order,
\t\t\tcontentId: ftype == 2 ? \"#dataList\" : \"#dataList1\",
\t\t\tparams: [{
\t\t\t\tid: ftype == 2 ? \"#dynamic-table1\" : \"#dynamic-table2\",
\t\t\t\tfield: [\"\",\"\", \"khm_customer.name\", \"maxLv\", \"customer_num\", \"pos_name\",
\t\t\t\t\t\"htm_contract.payment_cycle\", \"\", \"\",\"jzm_service_info.fuze_id\"
\t\t\t\t]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res, ftype);
\t\t});
\t\t\$('.flush').click(function() {
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\twhere = filter = '';
\t\t\t\$('[sear=\"customer_name\"]').val('');
\t\t\t\$('[sear=\"khm_customer.customer_num\"]').val('');
\t\t\t\$('[sear=\"jzm_service_info.fuze_id\"]').val('').trigger('change');
\t\t\tgetAccountList(1, ftype);
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
\t\t\tvar type = \$(this).parents('.tab-pane').index() == 0 ? 2 : 1;
\t\t\tvar data = {
\t\t\t\t\"type\": 4,
\t\t\t\t\"page_size\": pagesize,
\t\t\t\t'page': 1,
\t\t\t\t'where': 'khm_customer.tax_type = ' + ftype,
\t\t\t\t'index': ftype
\t\t\t};
\t\t\tvar filter_ = \$(this).attr('data-kind');
\t\t\tif(filter_ == '0') {
\t\t\t\tgetAccountList(1, ftype);
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
\t\t\tgetAccountList_4(data);
\t\t})

\t\tfunction getAccountList_4(data) {
\t\t\tykp.list({
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: data,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\thMonth = cs.last_year_month();
\t\t\t\t\tvar dataList, dataTable, type;
\t\t\t\t\tdataList = data['index'] == 2 ? '#dataList' : '#dataList1';
\t\t\t\t\tdataTable = data['index'] == 2 ? '#dynamic-table1' : '#dynamic-table2';
\t\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'), res['data']['months'], type);
\t\t\t\t\tif(res.data.items == '' || res.data == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\tif(!data['index']) {
\t\t\t\t\t\t\tdataList = '#dataList';
\t\t\t\t\t\t}
\t\t\t\t\t\t\$(dataList).html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\ttype = res.data.items[0].list[0]['khm_customer.tax_type'];
\t\t\t\t\tif(type == 1) {
\t\t\t\t\t\t\$(\"#member-tab\").addClass('active');
\t\t\t\t\t\t\$(\"#task-tab\").removeClass('active');
\t\t\t\t\t\t\$(\".kind li\").eq(1).addClass(\"now\").siblings().removeClass('now');
\t\t\t\t\t}

\t\t\t\t\taddList(res, type);
\t\t\t\t}
\t\t\t})
\t\t}


\t\t//生成月份表头：el 所有月份表头，months:开始、结束月份
\t\tfunction generateMonthTh(el, months, type) {
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
\t\t\tvar El = type == 2 ? '#dynamic-table1' : '#dynamic-table2';
\t\t\tvar start_month;
\t\t\t\$(El + ' .thColor .month').each(function(i, e) {
\t\t\t\tstart_month = i + start['month'];
\t\t\t\tif(start_month > 12) {
\t\t\t\t\tstart_month = start_month - 12;
\t\t\t\t\t\$(this).text(end['year'] + '' + (start_month < 10 ? '0' + start_month : start_month)).attr('month', end['year'] + '' + (start_month < 10 ? '0' + start_month : start_month));
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\t\$(this).text(start['year'] + '' + (start_month < 10 ? '0' + start_month : start_month)).attr('month', start['year'] + '' + (start_month < 10 ? '0' + start_month : start_month));
\t\t\t});

            //自定义列表
\t\t\t//\$('#custom').remove();

            if(type==2){
                if(\$('#task-tab').find('.custom').length < 1){

                    cs.custorm_check(El,'#dataList', true);
                }
\t\t\t}else {
                if(\$('#member-tab').find('.custom').length < 1){
                    cs.custorm_check(El, '#dataList1', true);
                }
\t\t\t}
\t\t};
\t\t//高级搜索
\t\tcs.showHeightSearch('#heightsearch', '#heightsearch1');
\t\tcs.showHeightSearch('#height_search', '#height_search1');

\t\tcs.getAllCw(function(option) {
\t\t\t\$('#heightsearch1 .cw').html(option);
\t\t\t\$('#heightsearch1 .cw').select2({
\t\t\t\tallowClear: true
\t\t\t})
\t\t})
\t\tcs.getAllCw(function(option) {
\t\t\t\$('#height_search1 .cw').html(option);
\t\t\t\$('#height_search1 .cw').select2({
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
\t\t\t\tvar data = res.data;\t\t\t
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

\t\t//拿到查询的所有数据，将一般纳税人和小规模分类
\t\tfunction getAccountList_3(data) {
\t\t\tykp.list({
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: data,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar',
\t\t\t\t\torder: order
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tvar resdata = res.data.items;
\t\t\t\t\tvar num = 0;
\t\t\t\t\thMonth = cs.last_year_month();
\t\t\t\t\t//判断是否有数据
\t\t\t\t\tif(resdata == '') {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\t//判断是否有一般纳税人
\t\t\t\t\tfor(var i in resdata) {
\t\t\t\t\t\tif(resdata[i].list[0]['khm_customer.tax_type'] == 1) {
\t\t\t\t\t\t\tnum++;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t//判断是否有小规模
\t\t\t\t\tif(num < resdata.length) {
\t\t\t\t\t\tif(num > 0) {
\t\t\t\t\t\t\ttzpage();
\t\t\t\t\t\t\t\$(\"#tspage\").show();
\t\t\t\t\t\t}
\t\t\t\t\t\tif(!param.flag) {
\t\t\t\t\t\t\tgetAccountList_2(1, 2, '', param.timestamp);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tgetAccountList_2(1, 2, param.aid, param.timestamp);
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\tif(!param.flag) {
\t\t\t\t\t\t\tgetAccountList_2(1, 1, '', param.timestamp);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tgetAccountList_2(1, 1, param.aid, param.timestamp);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//跳转页面的数据加载
\t\tfunction getAccountList_2(curPage, ctype, aid, timestamp) {
\t\t\t//debugger
\t\t\tvar where = `khm_customer.tax_type=\${ctype}`;
\t\t\tif(timestamp != '') {
\t\t\t\twhere += ` and \${timestamp}`
\t\t\t}
\t\t\tvar data = {
\t\t\t\t\"type\": 4,
\t\t\t\t\"page\": curPage,
\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\"where\": where
\t\t\t}
\t\t\tif(aid != '' || aid != undefined) {
\t\t\t\tdata['staff_name'] = aid;
\t\t\t}
\t\t\tykp.list({
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: data,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(ctype == 1) {
\t\t\t\t\t\t\$(\"#member-tab\").show();
\t\t\t\t\t\t\$(\"#task-tab\").hide();
\t\t\t\t\t\t\$(\".kind li\").eq(1).addClass(\"now\").siblings().removeClass('now');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(\"#member-tab\").hide();
\t\t\t\t\t\t\$(\"#task-tab\").show();
\t\t\t\t\t\t\$(\".kind li\").eq(1).removeClass(\"now\").siblings().addClass('now');
\t\t\t\t\t}
\t\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'), res['data']['months'], ctype);
\t\t\t\t\taddList(res, ctype);
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//跳转页面查询后仍需跳转一般纳税人时的点击
\t\tfunction tzpage() {
\t\t\t\$(\".close_ts\").click(function() {
\t\t\t\t\$(\"#tspage\").css(\"display\", \"none\");
\t\t\t})
\t\t\t\$(\"#go_\").click(function() {
\t\t\t\t\$(\"#tspage\").css(\"display\", \"none\");
\t\t\t\tif(param.flag) {
\t\t\t\t\tgetAccountList_2(1, 1, '', param.timestamp);
\t\t\t\t} else {
\t\t\t\t\tgetAccountList_2(1, 1, param.aid, param.timestamp);
\t\t\t\t}
\t\t\t\t\$(\".kind li\").eq(1).addClass(\"now\").siblings().removeClass(\"now\");
\t\t\t\t\$('#member-tab').addClass('active').siblings().removeClass('active');
\t\t\t})
\t\t}


\t\t//显示一般纳税热 或 小规模
\t\t\$('.kind').on('click', 'li', function() {
\t\t\t\$(this).addClass('now').siblings().removeClass('now');
\t\t\t\$('[sear=\"customer_name\"]').val('');
\t\t\t\$('[sear=\"khm_customer.customer_num\"]').val('');
\t\t\t\$('[sear=\"jzm_service_info.fuze_id\"]').val('').trigger('change');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\twhere = filter = '';
\t\t\tcs.setFuze({
\t\t\t\tcheck:true,
\t\t\t\tconId:[\"#dataList\",\"#dataList1\"],
\t\t\t\ttype:\"4\",
\t\t\t\turl:\"/api/api_service/transfer_user\",
\t\t\t\tfun:function(ftype){
\t\t\t\t\tgetAccountList(1, ftype);
\t\t\t\t}
\t\t\t});
\t\t\tvar index = \$(this).index();
\t\t\tif(index == 0) {
\t\t\t\t\$('#task-tab').addClass('active');
\t\t\t\t\$('#member-tab').removeClass('active');
\t\t\t\tftype = 2;
\t\t\t\tgetAccountList(1, ftype);
\t\t\t} else {
\t\t\t\t\$('#member-tab').addClass('active');
\t\t\t\t\$('#task-tab').removeClass('active');
\t\t\t\t/*if(\$('#member-tab').find('#custom').length <1) {
                    console.log(222);
                    cs.custorm_check('#dynamic-table2', '#dataList1', true);
\t\t\t\t}*/
\t\t\t\tftype = 1;
\t\t\t\tgetAccountList(1, ftype);
\t\t\t}
\t\t\t//通用排序
\t\t\tcs.general_sort({
\t\t\t\turl: '/api/api_service/service_list',
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
\t\t\t\tinitOrder: 'khm_customer.id',
\t\t\t\tdefaultOrder: order,
\t\t\t\tcontentId: ftype == 2 ? \"#dataList\" : \"#dataList1\",
\t\t\t\tparams: [{
\t\t\t\t\tid: ftype == 2 ? \"#dynamic-table1\" : \"#dynamic-table2\",
\t\t\t\t\tfield: [\"\",\"\", \"khm_customer.name\", \"maxLv\", \"customer_num\", \"pos_name\",
\t\t\t\t\t\t\"htm_contract.payment_cycle\", \"\",\"\", \"jzm_service_info.fuze_id\"
\t\t\t\t\t]
\t\t\t\t}]
\t\t\t}, function(res, _sort_role) {
                sort_role = _sort_role;
\t\t\t\taddList(res, ftype);
\t\t\t});
\t\t});

\t\t//导入导出
\t\tvar data = {
\t\t\turl: \"/api/api_service/serviceExport\",
\t\t\ttype: '4',
\t\t\ttitle: '客服模板'
\t\t}

\t\tcs.jzexport(data, function(res) {
\t\t\tsetTimeout(function(){
\t\t\t\t\t\t\t\tykp.prompt(\"上传成功\");
\t\t\t\t\t\t\t},1000)
\t\t\tgetAccountList(1, ftype);
\t\t\t\$('.label_popup').hide();
\t\t})

\t\t//每页数量
\t\t\$('#changePageNum').change(function() {
\t\t\tpagesize = \$(this).val();
\t\t\tykp.setCookie('page_size',pagesize);
\t\t\tgetAccountList(1, ftype);
\t\t});

\t\tfunction getAccountList(curPage, ftype) {
\t\t\thMonth = cs.last_year_month();
\t\t\t\$(\"#tspage\").css(\"display\", \"none\");
\t\t\tvar data = {
\t\t\t\t\"type\": 4,
\t\t\t\t\"page\": curPage,
\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\"where\": filter ? ('khm_customer.tax_type=' + ftype + \" and \" + filter) : 'khm_customer.tax_type=' + ftype,
\t\t\t}

\t\t\tif(month2) {
\t\t\t\tdata.month2 = month2;
\t\t\t}
\t\t\t//顶部chart
\t\t\tcs.getChart(4, '', data);
\t\t\tykp.list({
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: data,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tvar dataTable = ftype == 1 ? '#dataList1' : '#dataList';
\t\t\t\t\thMonth = cs.last_year_month();
\t\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'), res['data']['months'], ftype);
\t\t\t\t\tif(res.data.items == '') {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$(dataTable).html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\taddList(res, ftype);
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//获取所有员工(负责人)
\t\tfunction allemp() {
\t\t\tvar emps;
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_employees/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tpage: 1,
\t\t\t\t\tlimit: 999
\t\t\t\t},
\t\t\t\tasync: false,
\t\t\t\tsuccess: function(res) {
\t\t\t\t\temps = res.data.items;
\t\t\t\t}
\t\t\t});
\t\t\treturn emps;
\t\t}

\t\tfunction Month(month, ftype) {
\t\t\tvar result = \"\";
\t\t\tvar El = ftype == 2 ? '#dynamic-table1' : '#dynamic-table2';
\t\t\t\$(El + ' .thColor .month').each(function(i, e) {
\t\t\t\tif(month == \$(this).text()) {
\t\t\t\t\tresult = i;
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t})
\t\t\treturn result;
\t\t}

\t\tfunction addList(res, ftype) {

\t\t\tvar data = res.data.items;
\t\t\tvar status = []; //该数组存放th display属性值
\t\t\tvar ths = ftype == 2 ? \$('#dynamic-table1 .thColor th') : \$('#dynamic-table2 .thColor th'); //获取所有的th
\t\t\tvar html = '';
\t\t\tvar Class = '';
\t\t\tvar index = ['', 'fa fa-circle-o', 'glyphicon glyphicon-ok', 'glyphicon glyphicon-remove'];
\t\t\tvar timeArr = new Array(12);
\t\t\tvar obj = {};
\t\t\tvar cycle = [];
\t\t\tvar emps = allemp();
\t\t\tvar cycleName = {
\t\t\t\tt1: '每月',
\t\t\t\tt3: '季度',
\t\t\t\tt6: '半年',
\t\t\t\tt12: '一年'
\t\t\t}
\t\t\tfor(var i = 0; i < ths.length; i++) {
\t\t\t\tstatus.push(ths.eq(i).css('display'));
\t\t\t}
            var dataList = '';
\t\t\tdataList = ftype == 2 ? '#dataList' : '#dataList1';
\t\t\tykp.setCookie('page_no', res.data.curPage, (1 / 24));
\t\t\tif(!data) {
\t\t\t\tsetTimeout(function() {
\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t}, 1000);
\t\t\t\t\$(dataList).html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\treturn false;
\t\t\t}
\t\t\t//负责人id
\t\t\tvar fuze_ids = [];
\t\t\t//负责人名字
\t\t\tvar fuze = [];

\t\t\tvar overdue = 0;
\t\t\tfor(var z in data) {
\t\t\t\tdata[z]['fuze_ids'] = [];
\t\t\t\tdata[z]['fuze_ids1'] = [];
\t\t\t}
\t\t\tfor(var i in data) {
\t\t\t\tvar newMark = 'inline-block'
\t\t\t\toverdue = 0;
\t\t\t\tfor(var j = 0; j < data[i].list.length; j++) {
\t\t\t\t\ttime = data[i].list[j] ? Month(data[i].list[j]['jzm_service_info.time'], ftype) : \"\";
\t\t\t\t\t//\t\t\t\t\ttime = cs.GetMounth(data[i].list[j]['jzm_service_info.time']);
\t\t\t\t\tobj.status = data[i].list[j]['jzm_service_info.status'];
\t\t\t\t\tobj.get_money = data[i].list[j]['jzm_service_info.get_money'];
\t\t\t\t\tobj.id = data[i].list[j]['jzm_service_info.id'];
\t\t\t\t\tobj.time = data[i].list[j]['jzm_service_info.time'];
\t\t\t\t\tobj.contract_id = data[i]['list'][j]['jzm_service_info.contract_id'];
\t\t\t\t\tobj.fuze_id = data[i]['list'][j]['jzm_service_info.fuze_id'];
\t\t\t\t\tobj.handStatus = data[i]['list'][j]['htm_contract.status'] || \"\";
\t\t\t\t\tobj.Status = data[i].list[j]['htm_contract.status'] == 1 || data[i].list[j]['htm_contract.status'] == 2 ? false : true; //合同状态
\t\t\t\t\ttimeArr[time] = obj;
\t\t\t\t\tobj = {};
\t\t\t\t}
\t\t\t\tfor(var j = data[i].list.length - 1; j >= 0; j--) {
\t\t\t\t\toverdue += parseInt(data[i].list[j]['jzm_service_info.overdue']);
\t\t\t\t\tif(data[i].list[j]['jzm_service_info.status'] != 0) {
\t\t\t\t\t\tnewMark = 'none';
\t\t\t\t\t}

\t\t\t\t\t//负责人id不存在 则将负责人id加入fuze_ids中
\t\t\t\t\tif(\$.inArray(data[i].list[j]['jzm_service_info.fuze_id'], data[i]['fuze_ids']) == -1) {
\t\t\t\t\t\tdata[i]['fuze_ids'].push(data[i].list[j]['jzm_service_info.fuze_id']);
\t\t\t\t\t\tdata[i]['fuze_ids1'].push(data[i].list[j]['jzm_service_info.fuze_id']);
\t\t\t\t\t}

\t\t\t\t\t//\t\t\t\t\tif(\$.inArray(data[i].list[j]['htm_contract.payment_cycle'], cycle) == -1) {
\t\t\t\t\t//\t\t\t\t\t\tcycle.push(cycleName[\"t\" + data[i].list[j]['htm_contract.payment_cycle']]);
\t\t\t\t\t//\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t//根据负责人id 获取负责人姓名并存入fuze中
\t\t\t\tfor(var j = 0; j < 1; j++) {
\t\t\t\t\tdata[i]['fuze_ids'] = employees[data[i]['fuze_ids'][j]];
\t\t\t\t}

\t\t\t\tfor(var j in emps) {
\t\t\t\t\tif(emps[j]['bmm_employees.id'] == data[i].list[0]['htm_contract.assign_staff_id']) {
\t\t\t\t\t\tvar empname = emps[j]['bmm_employees.name'];
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t//\t\t\t\t<i class=\"iconBnt fa fa-info-circle\" aria-hidden=\"true\"></i>
\t\t\t\t//\t\t\t\t\t\t\t\t\t\t\t<span data-rel=\"tooltip\" title=\"\${data[i].list[0]['khm_customer.remark']}\" data-placement=\"right\" ></span>
\t\t\t\tcycle=(cycleName[\"t\" + data[i].list[0]['htm_contract.payment_cycle']]);
\t\t\t\thtml += `<tr data-id=\"\${data[i].contract_id}\" cid=\"\${data[i].list[0]['khm_customer.id']}\"  payment_cycle=\"\${data[i].list[0]['htm_contract.payment_cycle']}\">
\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"check\" class=\"ace\"/>
\t\t\t\t\t\t\t\t<span class=\"lbl\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" style=\"display:\${status[0]};\">
\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t\t\t <a><span style=\"cursor: pointer;\" id=\"\" contentAuthority=\"99\" title=\"工资单\" class=\"lbl btBlue payroll\"><i class=\"fa fa-ticket\"></i></span></a>
\t\t\t\t\t\t\t\t\t <a><span style=\"cursor: pointer;\" id=\"\" contentAuthority=\"100\" title=\"投诉建议\" class=\"lbl complaint_advice btOrange\"><i class=\"fa fa-bookmark-o\"></i></span></a>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t//企业名称
\t\t\t\t\t\t\t <td data-num=\"1\" style=\"display:\${status[2]};\" data-cid=\"\${data[i].list[0]['khm_customer.id']}\">
\t\t\t\t\t\t\t\t <div style=\"display:\${data[i].is_red == 1 ? \"inline-block\" : \"none\"};height:14px;width:17px\">
\t\t\t\t\t\t\t\t\t<span class=\"spanTip\" style=\"\"><span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"customerDetail pos-rel\">\${data[i].list[0]['khm_customer.name']}</a>
\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t\t\t<i relation=\${data[i]['is_relotion']} class=\"sc fa \${data[i]['is_relotion'] == 0 ? 'fa-heart-o' : 'fa-heart'}\" style=\"color:\${data[i]['is_relotion'] ==1 ? 'red' : ''}\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data[i]['Remark'].length > 0 ? 'red' : ''}\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i>
\t\t\t\t\t\t\t\t </label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-num=\"2\" style=\"display:\${status[3]};\">
\t\t\t\t\t\t\t\t\t\${data[i]['maxLv']}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t//客户编码
\t\t\t\t\t\t\t<td data-num=\"3\" style=\"display:\${status[4]};\">
\t\t\t\t\t\t\t\t\${data[i]['customer_num']}
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t//仓位编码
\t\t\t\t\t\t\t<td data-num=\"4\" style=\"display:\${status[5]};\">
\t\t\t\t\t\t\t\t\${data[i].position.pos_name+\"\"+data[i].position.pos_num}
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t//服务周期
\t\t\t\t\t\t\t<td class=\"center\" data-num=\"5\" style=\"display:\${status[6]}\">\${cycle}</td>

\t\t\t\t\t\t\t//逾期
\t\t\t\t\t\t\t<td data-num=\"6\" style=\"display:\${status[7]};\">
\t\t\t\t\t\t\t\t\${data[i]['num']}
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t//截至日期
\t\t\t\t\t\t\t<td data-num=\"7\" style=\"display:\${status[8]};\">
\t\t\t\t\t\t\t\t\${data[i]['maxTime']}
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t//负责人
\t\t\t\t\t\t\t<td class=\"\" style=\"display:\${status[9]};\" data-num=\"8\">
\t\t\t\t\t\t\t\t\t\${ data[i]['fuze_ids'] || ''}
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t//基本户
\t\t\t\t\t\t\t <td class=\"\" style=\"display:\${status[10]};\" data-num=\"9\">
\t\t\t\t\t\t\t\t\${data[i].list[0]['basic_name']}
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t//以下月份
\t\t\t\t\t\t\t<td style=\"display:\${status[11]};border:1px solid #eee !important;\" \${timeArr[0] ? (timeArr[0]['Status'] ? \"cstatus\" : \"\") : \"\"}   class=\"center\" get_money=\"\${timeArr[0] != undefined ? timeArr[0].get_money : ''}\" fuze_ids=\"\${data[i]['fuze_ids1']}\" fuze_id=\"\${timeArr[0] ? timeArr[0].fuze_id : ''}\"  handStatus=\"\${timeArr[0] ? timeArr[0].handStatus : ''}\" contract_id=\${timeArr[0] ? timeArr[0].contract_id : ''} fuze_id=\${timeArr[0] ? timeArr[0].fuze_id : ''}  handStatus=\"\${timeArr[0] ? timeArr[0].handStatus : ''}\"  data-num=\"10\" data-status=\"\${timeArr[0] != undefined ? timeArr[0].status  : ''}\" data-id=\"\${timeArr[0] != undefined ? timeArr[0].id : ''}\" title=\"\${timeArr[0] != undefined ? timeArr[0].time:''}\" data-month=\"\${timeArr[0] != undefined ? timeArr[0].time:''}\">

\t\t\t\t\t\t\t\t<label class=\"pos-rel \${timeArr[0] != undefined ? index[timeArr[0].status] : ''}\"></label>

\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td style=\"display:\${status[12]};border:1px solid #eee !important;\" \${timeArr[1] ? (timeArr[1]['Status'] ? \"cstatus\" : \"\") :\"\"}  class=\"center\" data-id=\"\${timeArr[1] != undefined ? timeArr[1].id : ''}\" fuze_ids=\${data[i]['fuze_ids1']}  fuze_id=\${timeArr[1] ? timeArr[1].fuze_id : ''}  handStatus=\${timeArr[1] ? timeArr[1].handStatus : ''} contract_id=\${timeArr[1] ? timeArr[1].contract_id : ''} fuze_id=\${timeArr[1] ? timeArr[1].fuze_id : ''}  handStatus=\"\${timeArr[1] ? timeArr[1].handStatus : ''}\" data-num=\"11\" get_money=\"\${timeArr[1] != undefined ? timeArr[1].get_money : ''}\" data-status=\"\${timeArr[1] != undefined ? timeArr[1].status  : ''}\" style=\"width:70px;\" title=\"\${timeArr[1] != undefined ? timeArr[1].time:''}\" data-month=\"\${timeArr[1] != undefined ? timeArr[1].time:''}\">
\t\t\t\t\t\t\t   <label class=\"pos-rel \${timeArr[1] != undefined ? index[timeArr[1].status] : ''}\"></label>

\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t//三月
\t\t\t\t\t\t\t<td style=\"display:\${status[13]};border:1px solid #eee !important;\" \${timeArr[2] ? (timeArr[2]['Status'] ? \"cstatus\" : \"\") : \"\"}  class=\"center\" get_money=\"\${timeArr[2] != undefined ? timeArr[2].get_money : ''}\" fuze_ids=\${data[i]['fuze_ids1']}  fuze_id=\${timeArr[2] ? timeArr[2].fuze_id : ''}  handStatus=\${timeArr[2] ? timeArr[2].handStatus : ''} contract_id=\${timeArr[2] ? timeArr[2].contract_id : ''} fuze_id=\${timeArr[2] ? timeArr[2].fuze_id : ''}  handStatus=\"\"\${timeArr[2] ? timeArr[2].handStatus : ''}\" data-id=\"\${timeArr[2] != undefined ? timeArr[2].id : ''}\" data-status=\"\${timeArr[2] != undefined ? timeArr[2].status  : ''}\" data-num=\"12\" title=\"\${timeArr[2] != undefined ? timeArr[2].time:''}\" data-month=\"\${timeArr[2] != undefined ? timeArr[2].time:''}\">
\t\t\t\t\t\t\t<label class=\"pos-rel \${timeArr[2] != undefined ? index[timeArr[2].status] : ''}\"></label>
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td style=\"display:\${status[14]};border:1px solid #eee !important;\" \${timeArr[3] ? (timeArr[3]['Status'] ? \"cstatus\" : \"\") : \"\"}  class=\"center\" get_money=\"\${timeArr[3] != undefined ? timeArr[3].get_money : ''}\" fuze_ids=\${data[i]['fuze_ids1']}  fuze_id=\${timeArr[3] ? timeArr[3].fuze_id : ''}  handStatus=\${timeArr[3] ? timeArr[3].handStatus : ''} contract_id=\${timeArr[3] ? timeArr[3].contract_id : ''} fuze_id=\${timeArr[3] ? timeArr[3].fuze_id : ''}  handStatus=\"\${timeArr[3] ? timeArr[3].handStatus : ''}\" data-id=\"\${timeArr[3] != undefined ? timeArr[3].id : ''}\" data-status=\"\${timeArr[3] != undefined ? timeArr[3].status  : ''}\"data-num=\"13\" title=\"\${timeArr[3] != undefined ? timeArr[3].time:''}\" data-month=\"\${timeArr[3] != undefined ? timeArr[3].time:''}\">
\t\t\t\t\t\t\t   <label class=\"pos-rel \${timeArr[3] != undefined ? index[timeArr[3].status] : ''}\"></label>

\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t//五月
\t\t\t\t\t\t\t<td style=\"display:\${status[15]};border:1px solid #eee !important;\" \${timeArr[4] ? (timeArr[4]['Status'] ? \"cstatus\" : \"\") : \"\"}  class=\"center\" get_money=\"\${timeArr[4] != undefined ? timeArr[4].get_money : ''}\" fuze_ids=\${data[i]['fuze_ids1']}  fuze_id=\${timeArr[4] ? timeArr[4].fuze_id : ''}  handStatus=\${timeArr[4] ? timeArr[4].handStatus : ''} contract_id=\${timeArr[4] ? timeArr[4].contract_id : ''} fuze_id=\${timeArr[4] ? timeArr[4].fuze_id : ''}  handStatus=\"\${timeArr[4] ? timeArr[4].handStatus : ''}\" data-id=\"\${timeArr[4] != undefined ? timeArr[4].id : ''}\" data-status=\"\${timeArr[4] != undefined ? timeArr[4].status  : ''}\" title=\"\${timeArr[4] != undefined ? timeArr[4].time:''}\" data-num=\"14\" data-month=\"\${timeArr[4] != undefined ? timeArr[4].time:''}\">
\t\t\t\t\t\t\t   <label class=\"pos-rel \${timeArr[4] != undefined ? index[timeArr[4].status] : ''}\"></label>
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td style=\"display:\${status[16]};border:1px solid #eee !important;\" \${timeArr[5] ? (timeArr[5]['Status'] ? \"cstatus\" : \"\") : \"\"}  class=\"center\" get_money=\"\${timeArr[5] != undefined ? timeArr[5].get_money : ''}\" fuze_ids=\${data[i]['fuze_ids1']}  fuze_id=\${timeArr[5] ? timeArr[5].fuze_id : ''}  handStatus=\${timeArr[5] ? timeArr[5].handStatus : ''} contract_id=\${timeArr[5] ? timeArr[5].contract_id : ''} fuze_id=\${timeArr[5] ? timeArr[5].fuze_id : ''}  handStatus=\"\${timeArr[5] ? timeArr[5].handStatus : ''}\" data-id=\"\${timeArr[5] != undefined ? timeArr[5].id : ''}\" data-status=\"\${timeArr[5] != undefined ? timeArr[5].status  : ''}\" data-num=\"15\" title=\"\${timeArr[5] != undefined ? timeArr[5].time:''}\" data-month=\"\${timeArr[5] != undefined ? timeArr[5].time:''}\">
\t\t\t\t\t\t\t   <label class=\"pos-rel \${timeArr[5] != undefined ? index[timeArr[5].status] : ''}\"></label>

\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t//七月
\t\t\t\t\t\t\t<td style=\"display:\${status[17]};border:1px solid #eee !important;\" \${timeArr[6] ? (timeArr[6]['Status'] ? \"cstatus\" : \"\") : \"\"}  data-num=\"16\" get_money=\"\${timeArr[6] != undefined ? timeArr[6].get_money : ''}\" fuze_ids=\${data[i]['fuze_ids1']}  fuze_id=\${timeArr[6] ? timeArr[6].fuze_id : ''}  handStatus=\${timeArr[6] ? timeArr[6].handStatus : ''} contract_id=\${timeArr[6] ? timeArr[6].contract_id : ''} fuze_id=\${timeArr[6] ? timeArr[6].fuze_id : ''}  handStatus=\"\${timeArr[6] ? timeArr[6].handStatus : ''}\" data-status=\"\${timeArr[6] != undefined ? timeArr[6].status  : ''}\" data-id=\"\${timeArr[6] != undefined ? timeArr[6].id : ''}\" class=\"\" title=\"\${timeArr[6] != undefined ? timeArr[6].time:''}\" data-month=\"\${timeArr[6] != undefined ? timeArr[6].time:''}\">
\t\t\t\t\t\t\t\t<label class=\"pos-rel \${timeArr[6] != undefined ? index[timeArr[6].status] : ''}\"></label>
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td style=\"display:\${status[18]};border:1px solid #eee !important;\" \${timeArr[7] ? (timeArr[7]['Status'] ? \"cstatus\" : \"\") : \"\"}  class=\"center\" get_money=\"\${timeArr[7] != undefined ? timeArr[7].get_money : ''}\" fuze_ids=\${data[i]['fuze_ids1']}  fuze_id=\${timeArr[7] ? timeArr[7].fuze_id : ''}  handStatus=\${timeArr[7] ? timeArr[7].handStatus : ''} contract_id=\${timeArr[7] ? timeArr[7].contract_id : ''} fuze_id=\${timeArr[7] ? timeArr[7].fuze_id : ''}  handStatus=\"\${timeArr[7] ? timeArr[7].handStatus : ''}\" data-status=\"\${timeArr[7] != undefined ? timeArr[7].status  : ''}\" data-id=\"\${timeArr[7] != undefined ? timeArr[7].id : ''}\" data-num=\"17\" title=\"\${timeArr[7] != undefined ? timeArr[7].time:''}\" data-month=\"\${timeArr[7] != undefined ? timeArr[7].time:''}\">
\t\t\t\t\t\t\t\t<label class=\"pos-rel \${timeArr[7] != undefined ? index[timeArr[7].status] : ''}\"></label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t//九月
\t\t\t\t\t\t\t<td style=\"display:\${status[19]};border:1px solid #eee !important;\" \${timeArr[8] ? (timeArr[8]['Status'] ? \"cstatus\" : \"\") : \"\"}  class=\"center\" get_money=\"\${timeArr[8] != undefined ? timeArr[8].get_money : ''}\" fuze_ids=\${data[i]['fuze_ids1']}  fuze_id=\${timeArr[8] ? timeArr[8].fuze_id : ''}  handStatus=\${timeArr[8] ? timeArr[8].handStatus : ''} contract_id=\${timeArr[8] ? timeArr[8].contract_id : ''} fuze_id=\${timeArr[8] ? timeArr[8].fuze_id : ''}  handStatus=\"\${timeArr[8] ? timeArr[8].handStatus : ''}\" data-status=\"\${timeArr[8] != undefined ? timeArr[8].status  : ''}\" data-id=\"\${timeArr[8] != undefined ? timeArr[8].id : ''}\" data-num=\"18\" title=\"\${timeArr[8] != undefined ? timeArr[8].time:''}\" data-month=\"\${timeArr[8] != undefined ? timeArr[8].time:''}\">
\t\t\t\t\t\t\t\t<label class=\"pos-rel \${timeArr[8] != undefined ? index[timeArr[8].status] : ''}\"></label>

\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td style=\"display:\${status[20]};border:1px solid #eee !important;\" \${timeArr[9] ? (timeArr[9]['Status'] ? \"cstatus\" : \"\") : \"\"}  class=\"center \" get_money=\"\${timeArr[9] != undefined ? timeArr[9].get_money : ''}\" fuze_ids=\${data[i]['fuze_ids1']}  fuze_id=\${timeArr[9] ? timeArr[9].fuze_id : ''}  handStatus=\${timeArr[9] ? timeArr[9].handStatus : ''} contract_id=\${timeArr[9] ? timeArr[9].contract_id : ''} fuze_id=\"\${timeArr[9] ? timeArr[9].fuze_id : ''}  handStatus=\${timeArr[9] ? timeArr[9].handStatus : ''}\" data-status=\"\${timeArr[9] != undefined ? timeArr[9].status  : ''}\" data-id=\"\${timeArr[9] != undefined ? timeArr[9].id : ''}\" title=\"\${timeArr[9] != undefined ? timeArr[9].time:''}\" data-num=\"19\" data-month=\"\${timeArr[9] != undefined ? timeArr[9].time:''}\">
\t\t\t\t\t\t\t\t<label class=\"pos-rel \${timeArr[9] != undefined ? index[timeArr[9].status] : ''}\"></label>
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t//十一
\t\t\t\t\t\t\t<td style=\"display:\${status[21]};border:1px solid #eee !important;\" \${timeArr[10] ? (timeArr[10]['Status'] ? \"cstatus\" : \"\") : \"\"}  class=\"center\" get_money=\"\${timeArr[10] != undefined ? timeArr[10].get_money : ''}\" fuze_ids=\${data[i]['fuze_ids1']}  fuze_id=\${timeArr[10] ? timeArr[10].fuze_id : ''}  handStatus=\${timeArr[10] ? timeArr[10].handStatus : ''} contract_id=\${timeArr[10] ? timeArr[10].contract_id : ''} fuze_id=\${timeArr[10] ? timeArr[10].fuze_id : ''}  handStatus=\"\${timeArr[10] ? timeArr[10].handStatus : ''}\" data-status=\"\${timeArr[10] != undefined ? timeArr[10].status  : ''}\" data-id=\"\${timeArr[10] != undefined ? timeArr[10].id : ''}\" title=\"\${timeArr[10] != undefined ? timeArr[10].time:''}\" data-num=\"20\" data-month=\"\${timeArr[10] != undefined ? timeArr[10].time:''}\">
\t\t\t\t\t\t\t\t<label class=\"pos-rel \${timeArr[10] != undefined ? index[timeArr[10].status] : ''}\"></label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td style=\"display:\${status[22]};border:1px solid #eee !important;\" \${timeArr[11] ? (timeArr[11]['Status'] ? \"cstatus\" : \"\") : \"\"}  class=\"center\" get_money=\"\${timeArr[11] != undefined ? timeArr[11].get_money : ''}\" fuze_ids=\${data[i]['fuze_ids1']}  fuze_id=\${timeArr[11] ? timeArr[11].fuze_id : ''}  handStatus=\${timeArr[11] ? timeArr[11].handStatus : ''} contract_id=\${timeArr[11] ? timeArr[11].contract_id : ''} fuze_id=\${timeArr[11] ? timeArr[11].fuze_id : ''}  handStatus=\${timeArr[11] ? timeArr[11].handStatus : ''} data-status=\"\${timeArr[11] != undefined ? timeArr[11].status  : ''}\" data-id=\"\${timeArr[11] != undefined ? timeArr[11].id : ''}\" title=\"\${timeArr[11] != undefined ? timeArr[11].time:''}\" data-num=\"21\" data-month=\"\${timeArr[11] != undefined ? timeArr[11].time:''}\">
\t\t\t\t\t\t\t   <label class=\"pos-rel \${timeArr[11] != undefined ? index[timeArr[11].status] : ''}\"></label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>`;

\t\t\t\t//置空数据
\t\t\t\ttimeArr = [];
\t\t\t\tfuze_ids = [];
\t\t\t\tfuze = [];
\t\t\t}

\t\t\t\$(dataList).html(html);

\t\t\tcustom.showReamrk();
\t\t\tcustom.get_custom_info();
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\tcs.getNodes([99, 100, 289]);
\t\t\tvar statu = cs.getNodes([102, 289], true);
\t\t\t\$(dataList).find('td[get_money]').each(function() {
\t\t\t\tif(\$(this).attr('get_money') > 0) {
\t\t\t\t\t\$(this).css('background-color', '#00cc22')
\t\t\t\t}
\t\t\t})

\t\t\tcs.sc('客服', function(res) {
\t\t\t\tvar index = \$('.kind').find('.now').index();
                if(index == 0) {
\t\t\t\t\tftype = 2;
\t\t\t\t\tgetAccountList(0, ftype)
\t\t\t\t} else {
                   /* if(\$('#member-tab').find('#custom').length <= 0) {
\t\t\t\t\t\tcs.custorm_check('#dynamic-table2', 'tbody', true);
\t\t\t\t\t}*/
\t\t\t\t\tftype = 1;
\t\t\t\t\tgetAccountList(0, ftype)
\t\t\t\t}
\t\t\t});

\t\t\t//打开工资单
\t\t\tfunction payrolls() {
\t\t\t\t\$(\".payroll\").click(function() {
\t\t\t\t\tshowMark(\"#payroll_table\");
\t\t\t\t\t\$('#showBox .title').text('工资单');
\t\t\t\t\tvar allMonth = cs.last_year_month('', 23);
\t\t\t\t\tallMonth = allMonth.reverse();
\t\t\t\t\tvar optionList = \"\";
\t\t\t\t\tfor(var i in allMonth) {
\t\t\t\t\t\tif(i == 0) {
\t\t\t\t\t\t\t\$(\"#templateCon .year_month\").text(\"所属月份：\" + allMonth[i].slice(0,4)+\"年\" + allMonth[i].slice(4) + \"月\")
\t\t\t\t\t\t\toptionList += '<option selected=\"ture\">' + allMonth[i] + '</option>';
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\toptionList += '<option>' + allMonth[i] + '</option>';
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t\$('#templateBox #month').find('select').append(optionList);
\t\t\t\t\t\$('#templateBox #month').find('select').trigger('change')

\t\t\t\t\t//将公司名和当前月份加载到表头
\t\t\t\t\tvar copname = \$(this).parents(\"tr\").find(\"td[data-num='1'] a\").text();
\t\t\t\t\tvar kh_id = \$(this).parents(\"tr\").find(\"td[data-num='1']\").attr('data-cid').trim();
\t\t\t\t\tvar select = [\"id\", \"name\", \"basic\", \"day\", \"day_money\", \"social\", \"total\"];
\t\t\t\t\tvar month = \$('#templateBox #month').find('select').val();
\t\t\t\t\t\$(\"#templateCon #wage_customer_name span\").text(copname);
\t\t\t\t\t\$('#templateCon .comtomName').text(\"单位名称：\"+copname);
\t\t\t\t\tvar param = {
\t\t\t\t\t\turl: '/api/api_customer/hk_wages_list',
\t\t\t\t\t\tkh_id: kh_id,
\t\t\t\t\t\t//\t\t\t\t\t\tselect: JSON.stringify(select),
\t\t\t\t\t\tlimit: 999,
\t\t\t\t\t\torder: \"id\",
\t\t\t\t\t\tpage: 1,
\t\t\t\t\t\tmonth: month
\t\t\t\t\t};
\t\t\t\t\t\$(\"#templateCon #month select\").change(function() {
\t\t\t\t\t\tvar month_id = \$(this).val();
\t\t\t\t\t\tparam.month = month_id;
\t\t\t\t\t\tshowPayrolls(param);
\t\t\t\t\t\t\$(\"#templateCon .year_month\").text(\"所属月份：\" + month_id.slice(0,4)+\" 年 \" + month_id.slice(4) + \" 月\");
\t\t\t\t\t});
\t\t\t\t\tshowPayrolls(param);

\t\t\t\t\t//添加一条工资单信息
\t\t\t\t\tfunction addItems() {
\t\t\t\t\t\t\$('#templateCon #addItem').unbind('click').click(function() {
\t\t\t\t\t\t\tnum++;
\t\t\t\t\t\t\t//得到已有数据条数
\t\t\t\t\t\t\tvar count = \$(\"#templateCon #payrollList\").children(\"tr\").length;
\t\t\t\t\t\t\tvar tr = `<tr>
\t\t\t\t\t\t\t\t<td class=\"center\" style=\"line-height:37px;\"><span _title=\"id\">\${num}</sapn></td>
\t\t\t\t\t\t\t\t<td class=\"center\"><input _title=\"name\" style=\"padding:3px;width:90px\"/></td>
\t\t\t\t\t\t\t\t<td class=\"center\"><input type=\"number\" class=\"gz_basic\" style=\"width:90px\" _title=\"basic\"/></td>
\t\t\t\t\t\t\t\t<td class=\"center\"><input type=\"number\" class=\"gz_day\" style=\"width:90px\" _title=\"day\" value=\"24\"/></td>
\t\t\t\t\t\t\t\t<td class=\"center\"><input type=\"number\" class=\"gz_day_money\" style=\"width:90px\" _title=\"day_money\"/></td>
\t\t\t\t\t\t\t\t<td class=\"center\"><input type=\"number\" class=\"gz_social\" style=\"width:90px\" _title=\"social\"/></td>
\t\t\t\t\t\t\t\t<td class=\"center\"><input type=\"number\" class=\"gz_total\" style=\"width:90px\" _title=\"total\"/></td>
\t\t\t\t\t\t\t\t<td class=\"center\"></td>
\t\t\t\t\t\t\t\t<td class=\"center no-print\" style=\"line-height:37px;\"> <a href=\"javascript:void(0)\" style=\"font-weight:bold;\" class=\"removeT\"><i class=\"fa  glyphicon-minus fa-2x\"></i></a></td>
\t\t\t\t\t\t\t</tr>`;
\t\t\t\t\t\t\tif(\$(\"#templateCon #payrollList\").children().length == 0) {
\t\t\t\t\t\t\t\t\$(\"#templateCon #payrollList\").append(tr);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\$(tr).insertBefore(\$(\"#templateCon #payrollList\").children().first());
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t//\t\t\t\t\t\t\t\$(\"#templateCon #payrollList\").(tr);
\t\t\t\t\t\t\titemsTotal();
\t\t\t\t\t\t\tprintPayBill();
\t\t\t\t\t\t\tremoveT();
\t\t\t\t\t\t\tautoCountTotal();

\t\t\t\t\t\t\t\$('#templateCon .gz_day').change(function() {
\t\t\t\t\t\t\t\tif(\$(this).val() > 31) {
\t\t\t\t\t\t\t\t\t\$(this).val(31);
\t\t\t\t\t\t\t\t} else if(\$(this).val() < 0) {
\t\t\t\t\t\t\t\t\t\$(this).val(1);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t\taddItems();
\t\t\t\t\tvar data_id = \$(this).parent(\"tr\").attr(\"data-id\");
\t\t\t\t\tsavewage(kh_id);
\t\t\t\t})
\t\t\t}

\t\t\t//删除一条工资单
\t\t\tfunction removeT() {
\t\t\t\t\$(\"#templateCon .removeT\").unbind('click').click(\"click\", function() {
\t\t\t\t\tvar it = \$(this);
\t\t\t\t\tbootbox.confirm('确定要删除该条数据吗？', function(flag) {
\t\t\t\t\t\tif(flag) {
\t\t\t\t\t\t\tvar emp_id = it.parents(\"tr\").find(\"td\").eq(0).attr('data-id');

\t\t\t\t\t\t\tif(!emp_id) {
\t\t\t\t\t\t\t\tit.parents(\"tr\").remove();
\t\t\t\t\t\t\t\titemsTotal();
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tit.parents(\"tr\").remove();
\t\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\t\turl: '/api/api_customer/hk_wages_del',
\t\t\t\t\t\t\t\t\tmethods: 'post',
\t\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\t\tid: emp_id
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\t\titemsTotal();
\t\t\t\t\t\t\t\t\t\tykp.prompt(\"删除成功\");
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t})
\t\t\t}

\t\t\tfunction showPayrolls(param) {
\t\t\t\t//加载工资单数据
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: param.url, //缺查看客户工资单的接口
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tkh_id: param.kh_id,
\t\t\t\t\t\tselect: param.select,
\t\t\t\t\t\tlimit: param.limit,
\t\t\t\t\t\torder: param.order,
\t\t\t\t\t\tpage: param.page,
\t\t\t\t\t\tmonth: param.month
\t\t\t\t\t},
\t\t\t\t\tshowBlock: true,
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data.items;
\t\t\t\t\t\tvar tr = \"\";
\t\t\t\t\t\tif(data.length == \"\") {
\t\t\t\t\t\t\tykp.prompt(\"暂时没有数据\");
\t\t\t\t\t\t\t\$(\"#templateCon #payrollList\").html(\"<tr><td colspan='30'></td></tr>\");
\t\t\t\t\t\t}
\t\t\t\t\t\t//\${data[i]['khm_wages.id']}
\t\t\t\t\t\tnum = 0;
\t\t\t\t\t\tfor(var i = data.length - 1; i >= 0; i--) {

\t\t\t\t\t\t\tnum++;
\t\t\t\t\t\t\ttr += `<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"center\" style=\"line-height:37px;\" data-id=\"\${data[i]['khm_wages.id']}\"><span _title=\"id\">\${num}</sapn></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><input _title=\"name\" style=\"padding:3px;width:90px\" value=\"\${data[i]['khm_wages.name']}\" /></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><input type=\"number\" class=\"gz_basic\"  style=\"width:90px\" _title=\"basic\" value=\"\${data[i]['khm_wages.basic']}\" /></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><input type=\"number\" class=\"gz_day\" style=\"width:90px\" _title=\"day\" value=\"\${data[i]['khm_wages.day']}\"/></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><input type=\"number\" class=\"gz_day_money\" style=\"width:90px\" _title=\"day_money\" value=\"\${data[i]['khm_wages.day_money']}\"/></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><input type=\"number\" class=\"gz_social\" style=\"width:90px\" _title=\"social\" value=\"\${data[i]['khm_wages.social']}\"/></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><input type=\"number\" class=\"gz_total\" style=\"width:90px\" _title=\"total\" value=\"\${data[i]['khm_wages.total']}\"/></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"center\"></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"center no-print\" style=\"line-height:37px;\"> <a href=\"javascript:void(0)\" style=\"font-weight:bold;\" class=\"removeT\"><i class=\"fa  glyphicon-minus fa-2x\"></i></a></td>
\t\t\t\t\t\t\t\t\t</tr>`;
\t\t\t\t\t\t}
\t\t\t\t\t\t\$(\"#templateCon #payrollList\").html(tr);
\t\t\t\t\t\tautoCountTotal();
\t\t\t\t\t\titemsTotal();
\t\t\t\t\t\tprintPayBill();
\t\t\t\t\t\tremoveT();

\t\t\t\t\t\t\$('#templateCon .gz_day').change(function() {
\t\t\t\t\t\t\tif(\$(this).val() > 31) {
\t\t\t\t\t\t\t\t\$(this).val(31);
\t\t\t\t\t\t\t} else if(\$(this).val() < 0) {
\t\t\t\t\t\t\t\t\$(this).val(1);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}

\t\t\t//自动计算工资，总计
\t\t\tfunction autoCountTotal() {
\t\t\t\t\$('.gz_basic,.gz_day,.gz_day_money,.gz_social').each(function() {
\t\t\t\t\t\$(this).change(function() {
\t\t\t\t\t\tvar parent = \$(this).parent().parent();
\t\t\t\t\t\tvar gz_basic = \$('.gz_basic', parent).val();
\t\t\t\t\t\tvar gz_day = \$('.gz_day', parent).val();
\t\t\t\t\t\tvar gz_social = \$('.gz_social', parent).val();
\t\t\t\t\t\tvar gz_day_money = (gz_basic / gz_day).toFixed(2);
\t\t\t\t\t\tvar gz_total = (gz_basic - gz_social).toFixed(2);
\t\t\t\t\t\t\$('.gz_day_money', parent).val(gz_day_money);
\t\t\t\t\t\t\$('.gz_total', parent).val(gz_total);
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}

\t\t\tpayrolls();

\t\t\t//基本工资，出勤天数，日工资，社保，总金额  总计
\t\t\tfunction itemsTotal() {
\t\t\t\tvar itemsTotal = 0;
\t\t\t\t\$('#templateCon #itemsTotal td').not(':first,:last').each(function(i, e) {
\t\t\t\t\tif(i < 5) {
\t\t\t\t\t\t\$('#templateCon #payrollList tr').find('td:eq(' + (i + 2) + ')').each(function(index, element) {
\t\t\t\t\t\t\titemsTotal = eval(itemsTotal + '+' + (\$(element).find('input').val().trim() ? \$(element).find('input').val().trim() : '0'));
\t\t\t\t\t\t});
\t\t\t\t\t\t\$(e).text(itemsTotal);
\t\t\t\t\t\titemsTotal = 0;
\t\t\t\t\t}
\t\t\t\t});

\t\t\t}

\t\t\t//打开投诉建议
\t\t\tfunction complaint_advice() {
\t\t\t\t\$(\".complaint_advice\").click(function() {
\t\t\t\t\tvar customer_id = \$(this).parents(\"tr\").find(\"td[data-num='1']\").attr('data-cid').trim();
\t\t\t\t\tvar customer_name = \$(this).parents('tr').find('td[data-num=\"1\"] a').text().trim();

\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_service/get_book_list2',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tcustomer_id: customer_id
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\t\tif(data == '') {
\t\t\t\t\t\t\t\tykp.prompt('请先到联系人页面添加联系人！');
\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tshowMark(\"#complaint_advice_table\");
\t\t\t\t\t\t\taddcomplaint();
\t\t\t\t\t\t\tvar emps = allemp();
\t\t\t\t\t\t\tvar option = '';
\t\t\t\t\t\t\tfor(var i in emps) {
\t\t\t\t\t\t\t\tif(emps[i]['bmm_employees.name']) {
\t\t\t\t\t\t\t\t\toption += `<option value=\"\${emps[i]['bmm_employees.id']}\" data-id=\"\${emps[i]['bmm_employees.id']}\">\${emps[i]['bmm_employees.name']}</option>`;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\$(\"#templateCon [title_='duto']\").append(option);
\t\t\t\t\t\t\t\$('#templateCon [title_=\"name\"]').val(customer_name);
\t\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\t\t\$('#templateCon [title_=\"customer_name\"]').append(\$(`<option value=\"\${data[i]['id']}\" selected=\"\${data[i]['is_main']==1?true:false}\">\${data[i]['username']}</option>`));

\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\t\tif(data[i]['id'] == \$('#templateCon [title_=\"customer_name\"]').val()) {
\t\t\t\t\t\t\t\t\t\$('#templateCon [title_=\"customer_tel\"]').val(data[i]['phone']);
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\$('#templateCon [title_=\"customer_name\"]').change(function() {
\t\t\t\t\t\t\t\tvar id = \$(this).val();
\t\t\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\t\t\tif(data[i]['id'] == id) {
\t\t\t\t\t\t\t\t\t\t\$('#templateCon [title_=\"customer_tel\"]').val(data[i]['phone']);
\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})

\t\t\t\t\t\t\t//时间
\t\t\t\t\t\t\tif(!ace.vars['old_ie']) {
\t\t\t\t\t\t\t\t\$('#templateCon #date-timepicker1').datetimepicker({
\t\t\t\t\t\t\t\t\t// format: 'YYYY-MM-DD', //use this option to display seconds
\t\t\t\t\t\t\t\t\ticons: {
\t\t\t\t\t\t\t\t\t\ttime: 'fa fa-clock-o',
\t\t\t\t\t\t\t\t\t\tdate: 'fa fa-calendar',
\t\t\t\t\t\t\t\t\t\tup: 'fa fa-chevron-up',
\t\t\t\t\t\t\t\t\t\tdown: 'fa fa-chevron-down',
\t\t\t\t\t\t\t\t\t\tprevious: 'fa fa-chevron-left',
\t\t\t\t\t\t\t\t\t\tnext: 'fa fa-chevron-right',
\t\t\t\t\t\t\t\t\t\ttoday: 'fa fa-arrows ',
\t\t\t\t\t\t\t\t\t\tclear: 'fa fa-trash',
\t\t\t\t\t\t\t\t\t\tclose: 'fa fa-times'
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}).next().on(ace.click_event, function() {
\t\t\t\t\t\t\t\t\t\$(this).prev().focus();
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t})

\t\t\t\t\t\$('#showBox .title').text('投诉建议');

\t\t\t\t\t//保存投诉建议
\t\t\t\t\tfunction addcomplaint() {
\t\t\t\t\t\t\$(\"#templateCon .addcomplaint\").click(function() {
\t\t\t\t\t\t\tvar data = \$(\"#complaint_advice_table\").find(\"input,select,textarea\");
\t\t\t\t\t\t\tvar titledata = {
\t\t\t\t\t\t\t\tcustomer_id: customer_id
\t\t\t\t\t\t\t};
\t\t\t\t\t\t\tvar values = \$(\"#templateCon [title_]\");
\t\t\t\t\t\t\tfor(var i = 1; i < data.length; i++) {
\t\t\t\t\t\t\t\ttitledata[\$(data[i]).attr(\"title_\")] = \$(values[i]).val();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tvar timestamp = Date.parse(new Date(\$(\"#templateCon [title_='time']\").val()));
\t\t\t\t\t\t\ttitledata[\"time\"] = timestamp / 1000;
\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\turl: '/api/api_service/add_complaint',
\t\t\t\t\t\t\t\tmethods: 'post',
\t\t\t\t\t\t\t\tdata: titledata,
\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\tykp.prompt(\"保存成功!\");
\t\t\t\t\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\t\t\t\t\$('#showBox').addClass('ishide');
\t\t\t\t\t\t\t\t\t\$('.ui-pagination-container').remove();
\t\t\t\t\t\t\t\t\t//\t\t\t\t\t\t\t\t\tvar index = \$('.kind').find('.now').index();
\t\t\t\t\t\t\t\t\tvar index_1 = \$('.kind').find('.now').index();
\t\t\t\t\t\t\t\t\tvar ftype = 1;
\t\t\t\t\t\t\t\t\tif(index_1 == 0) {
\t\t\t\t\t\t\t\t\t\tftype = 2;
\t\t\t\t\t\t\t\t\t\tgetAccountList(1, ftype)
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tgetAccountList(1, ftype);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}

\t\t\tcomplaint_advice();

\t\t\t//启动layui,新增发票采集
\t\t\tif(statu) {
\t\t\t\tlayui.use('element', function() {
\t\t\t\t\tvar element = layui.element;
\t\t\t\t\tnewTicketCollect(dataList, element);
\t\t\t\t});
\t\t\t}

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
\t\t//新增发票采集
\t\tfunction newTicketCollect(dataList, element) {
\t\t\t//点击td事件打开进项采集
\t\t\t\$(dataList + \" td[data-status='0'],\" + dataList + \" td[data-status='3']\").click(function() {
                var it= \$(this);
                var uid = ykp.getCookie('uid');
\t\t\t\tif(\$(this).attr('handStatus') != 1) {
\t\t\t\t\tvar status = ['未激活', '已激活', '已挂起', '已结束', '已作废'];
\t\t\t\t\tykp.prompt(status[\$(this).attr('handStatus')] || \"不可操作\");
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\tif(\$(this).attr('fuze_ids').indexOf(uid) == -1) {
\t\t\t\t\tykp.prompt(\"您不是该公司的负责人\");
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\tif(\$(this).attr('fuze_id').indexOf(uid) == -1) {
\t\t\t\t\tykp.prompt(\"您不是合同的负责人\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t//作废未收款不能添加
\t\t\t\tif(\$(this).attr('get_money') == -1 && \$(this).attr('handStatus') == '4' || \$(this).attr('handStatus') == '3') {
\t\t\t\t\tykp.prompt('订单已解约，不能编辑');
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\tvar customer_id = \$(this).parents('tr').attr(\"cid\");
                var customer_name = \$(this).parents('tr').find(\"[data-num=1] .customerDetail\").text().trim();
                var user = \$(this).parents('tr').find(\"[data-num=8]\").text().trim();
\t\t\t\tvar year_month = \$(this).attr('data-month');
\t\t\t\tvar id = \$(this).attr('data-id'); //service-id
\t\t\t\tshowMark('#addList');
\t\t\t\t//点击已驳回的渲染数据
\t\t\t\tif(\$(this).attr(\"data-status\") == 3){
                    ykp.doAjax({
                        url: '/api/api_service/customer_details_list',
                        data: {
                            service_id: id,
                        },
                        method: 'post',
                        success: function(res) {
                            var _data = res.data.list
                            //使用Layui面板
                            layui.use('element',function(){
                                var element = layui.element;
                                invoice_detail(_data,element);
                            });

                            //发票采集详情
                            function invoice_detail(data,element){
                                    var index = \$(this).parents('tr').index();
                                    var tax_type = \$(this).attr('tax_type');
                                    var service_id = id

                                    //showMark('#invoice_collect');
                                    element.init('collapse');
                                    //\$('#showBox .title').text('发票采集详情');
                                   /* if(tax_type == 1){
                                        \$('#templateCon .jxcj').show();
                                    }*/

                                    //获取发票采集数据
                                    getInvoiceCollectData(data,element);
                            }

                        }
                    })
                }

                //获取发票采集数据
                function getInvoiceCollectData(data,element){

                    var _ztype;
                    var model;
                    var _model;
                    var html;
                    console.log(data);
                    for(var itemvl in data){
                        var _data= data[itemvl]
                        if (!_data || _data === []) {
                            continue;
                        }
                        for(var i in _data){
\t\t\t\t\t\t\t_ztype = _data[i].ztype;
\t\t\t\t\t\t\tmodel = \$('#templateCon #' + _ztype).find('.model').html();
\t\t\t\t\t\t\t_model = \$(model);
\t\t\t\t\t\t\thtml = \$('<tr></tr>');
\t\t\t\t\t\t\tif (!\$('#templateCon #' + _ztype).parents('.layui-colla-content').hasClass('layui-show')) {
\t\t\t\t\t\t\t\t\$('#templateCon #' + _ztype).parents('.layui-colla-content').addClass('layui-show');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t_model.eq(0).text(\$('#templateCon #' + _ztype).find('tr').length);
\t\t\t\t\t\t\t_model.find('[field]').each(function (index, element) {
\t\t\t\t\t\t\t\tif (\$(this).attr('field') == 'charge_mode') {
\t\t\t\t\t\t\t\t\t\$(this).val(_data[i]['charge_mode'] != 0 ? _data[i]['charge_mode'] : 1).change();
\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (\$(this).attr('field') == 'tax_project') {
\t\t\t\t\t\t\t\t\t\$(this).val(_data[i]['tax_project'] != 0 ? _data[i]['tax_project'] : 1).change();
\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (\$(this).attr('field') == 'is_invalid') {
\t\t\t\t\t\t\t\t\t\$(this).parent().text(_data[i]['is_invalid'] != 0 ? '作废' : '未作废');
\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (\$(this).attr('field') == 'whether_tax') {
\t\t\t\t\t\t\t\t\t\$(this).parent().text(_data[i]['whether_tax'] != 0 ? '是' : '否');
\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (\$(this).attr('field') == 'deductible') {
\t\t\t\t\t\t\t\t\t\$(this).parent().text(_data[i]['deductible'] != 0 ? '是' : '否');
\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (\$(this).attr('field') == 'auth_time') {
\t\t\t\t\t\t\t\t    if(_data[i]['auth_time'] != 0){
                                        \$(this).val( cs.getNowTime(_data[i]['auth_time'])).change();
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (\$(this).attr('field') == 'type') {
\t\t\t\t\t\t\t\t\t\$(this).val(_data[i]['type'] != \"\" ? _data[i]['type'] : '').change();
\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (\$(this).attr('field') == 'tax_rate') {
\t\t\t\t\t\t\t\t\t\$(this).val(_data[i]['tax_rate']).change();
\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (\$(this).attr('field') == 'tax_money_period') {
\t\t\t\t\t\t\t\t\t\$(this).val(_data[i]['tax_money_period']);
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\$(this).val(_data[i][\$(this).attr('field')]);
\t\t\t\t\t\t\t});

\t\t\t\t\t\t\thtml.append(_model);
\t\t\t\t\t\t\t\$('#templateCon #' + _ztype).append(html);
                    \t}
                    }

                    var total = 0;
                    \$('#templateCon [total]').each(function(index,element){
                        \$(element).parents('table').find('tbody tr').not('.model').find('td:eq('+ \$(element).index() +')').each(function(i,e){
                            total += \$(e).text().trim() ? parseFloat(\$(e).text().trim()) : 0;
                        });
                        \$(element).text(total);
                        total = 0;
                    });

                    element.init('collapse');
                }


\t\t\t\t\$('#templateCon #sendMsg').attr('customer_id', customer_id);
                \$('#templateCon #sendMsg').attr('user', user);
                \$('#templateCon #sendMsg').attr('year_month', year_month);
                \$('#templateCon #sendMsg').attr('customer_name', customer_name);
\t\t\t\t\$('#templateCon').css('width', '1060px');
\t\t\t\t\$('#templateCon').data('flag', '1');
\t\t\t\t\$('#templateCon .close_get').unbind('click').click(function() {
\t\t\t\t\t\$('#templateCon').css('width', 'auto');
\t\t\t\t\t\$('#templateCon').data('flag', '2');
\t\t\t\t\tcs.close();
\t\t\t\t});

\t\t\t\telement.init('collapse'); //初始化layui

\t\t\t\t\$('#showBox .title').text('发票采集');

\t\t\t\t//是否显示进项采集
\t\t\t\tif(\$('.kind .now').index() == 0) {
\t\t\t\t\t\$('#templateCon .jxcj').hide();
\t\t\t\t} else {
\t\t\t\t\t\$('#templateCon .jxcj').show();
\t\t\t\t}
\t\t\t\tvar getYearAndMonth = cs.getYearAndMonth('2015-1-1', '2025-12-31');
\t\t\t\t//\t\t\t\t\$('#templateBox').find('select[field=tax_money_period]').select2({allowClear:true});
\t\t\t\t//点击 +  添加一条记录
\t\t\t\taddItem();

\t\t\t\t//保存发票采集数据
\t\t\t\tsaveTicketCollectData(id, year_month,it);
                \$(\"#temHeader\").width(\$(\"#showBox\").width()-47);
\t\t\t})
\t\t}

\t\tfunction sendMsg(id, type,param) {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_common/send_customer',
\t\t\t\tdata: {
\t\t\t\t\tcustomer_id: id,
\t\t\t\t\ttype: type,
                    param: JSON.stringify(param)
\t\t\t\t},
\t\t\t\tmethod: 'post',
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tykp.prompt('短信发送成功！');
\t\t\t\t}
\t\t\t})
\t\t}
\t\t//保存发票采集数据
\t\tfunction saveTicketCollectData(id, month_ids,elit) {
\t\t\t\$('#templateCon .sure_button').click(function() {

\t\t\t\tvar postdata = {
\t\t\t\t\t'service_id': id,
\t\t\t\t\t'year_month_id': month_ids
\t\t\t\t};
\t\t\t\tvar index = \$(this).index();

\t\t\t\tvar is_send = false;
\t\t\t\tif(\$('#templateCon #sendMsg input:checked').val() == 1) {
\t\t\t\t\tis_send = true;
\t\t\t\t}
\t\t\t\tvar customer_id = \$('#templateCon #sendMsg').attr('customer_id');
\t\t\t\tvar flag = true;
\t\t\t\tvar _postdata = [];
\t\t\t\t\$('#templateCon tbody tr').not(':hidden').each(function(i, e) {
\t\t\t\t\t//验证格式
\t\t\t\t\tif(!validateFormat(\$(this))) {
\t\t\t\t\t\tykp.prompt('请填写正确格式！');
\t\t\t\t\t\tflag = false;
\t\t\t\t\t\treturn false;
\t\t\t\t\t}

\t\t\t\t\t//获取数据
\t\t\t\t\t_postdata.push(getTrData(\$(this)));
\t\t\t\t});

\t\t\t\tif(!flag) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tpostdata['colData'] = JSON.stringify(_postdata);
\t\t\t\tif(index == 3) {
\t\t\t\t\tpostdata['colData'] = JSON.stringify([]);
\t\t\t\t\tpostdata['type'] = 1;
                    layui.use('layer', function() {
                        var layer = layui.layer;
                        layer.confirm('确定要无数据保存吗？', function() {
                            saveinfor()
\t\t\t\t\t\t\tykp.prompt('保存成功！');
                            layer.closeAll();
                        });
                    })
\t\t\t\t} else {
                    if(_postdata.length == 0) {
\t\t\t\t\t\tykp.prompt('没有数据不能保存！');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
                    saveinfor()
\t\t\t\t}
                function saveinfor(){
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_service/add_customer_details',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: postdata,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\telit.unbind().find(\"label\").addClass('fa fa-circle-o');
\t\t\t\t\t\t\tvar tax_type = \$('.kind .now').index() == 0 ? 2 : 1;
\t\t\t\t\t\t//\tgetAccountList(1, tax_type);
\t\t\t\t\t\t\tif(is_send) {
\t\t\t\t\t\t\t\tvar param = {
\t\t\t\t\t\t\t\t\tname: \$('#templateCon #sendMsg').attr(\"customer_name\"),
\t\t\t\t\t\t\t\t\ttime: \$('#templateCon #sendMsg').attr('dyear_month'),
\t\t\t\t\t\t\t\t\tuser: \$('#templateCon #sendMsg').attr(\"user\")
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tsendMsg(customer_id,'发票采集',param);
\t\t\t\t\t\t\t}
\t//
\t\t\t\t\t\t}
\t\t\t\t\t});
                }
\t\t\t});
\t\t}

\t\t//获取请求数据
\t\tfunction getTrData(el) {
\t\t\tvar postdata = {
\t\t\t\tztype: el.parent().attr('id')
\t\t\t};
\t\t\tel.find('[field]').each(function(i, e) {
\t\t\t\tif(\$(this).attr('field') === 'auth_time') {
\t\t\t\t\tpostdata[\$(this).attr('field')] = new Date(\$(this).val()) / 1000;
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\tpostdata[\$(this).attr('field')] = \$(this).val();
\t\t\t});
\t\t\treturn postdata;
\t\t}

\t\t//验证格式
\t\tfunction validateFormat(el) {
\t\t\tvar flag = true;
\t\t\tel.find('input').each(function(i, e) {
\t\t\t\tif(\$(this).val().trim() === '') {
\t\t\t\t\tflag = false;
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t});
\t\t\treturn flag;
\t\t}

\t\t//统计份额  金额 税额
\t\tfunction countItems() {
\t\t\t//是否作废 切换 统计数据改变 
\t\t\t\$('#templateCon').unbind('change').on('change', '[field=\"is_invalid\"]', function() {
\t\t\t\tvar it = \$(this);
\t\t\t\tvar total = ''; //统计数据
\t\t\t\tvar item = ''; //单条数据
\t\t\t\tif(it.val() == 0) {
\t\t\t\t\tit.parents('table').find('[total]').each(function(i, e) {
\t\t\t\t\t\ttotal = \$(e).text().trim();
\t\t\t\t\t\titem = it.parents('tr').find('[field=' + \$(e).attr('total') + ']').val().trim();

\t\t\t\t\t\tif(\$(e).attr('total') == 'amount_of_tax') {
\t\t\t\t\t\t\t\$(e).text(eval((total ? total : '0') + '+' + (item ? item : '0')).toFixed(2));
\t\t\t\t\t\t\ttotal = '';
\t\t\t\t\t\t\titem = '';
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\t\$(e).text(eval((total ? total : '0') + '+' + (item ? item : '0')));
\t\t\t\t\t\ttotal = '';
\t\t\t\t\t\titem = '';
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\tif(it.val() == 1) {
\t\t\t\t\tit.parents('table').find('[total]').each(function(i, e) {
\t\t\t\t\t\ttotal = \$(e).text().trim();
\t\t\t\t\t\titem = it.parents('tr').find('[field=' + \$(e).attr('total') + ']').val().trim();

\t\t\t\t\t\tif(\$(e).attr('total') == 'amount_of_tax') {
\t\t\t\t\t\t\t\$(e).text(eval((total ? total : '0') + '-' + (item ? item : '0')).toFixed(2));
\t\t\t\t\t\t\ttotal = '';
\t\t\t\t\t\t\titem = '';
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\t\$(e).text(eval((total ? total : '0') + '-' + (item ? item : '0')));
\t\t\t\t\t\ttotal = '';
\t\t\t\t\t\titem = '';
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\t//切换税率，计算税额，再判断是否为未作废状态，是则统计税额数据：税额 = 金额 * 税率
\t\t\t\$('#templateCon [field=\"tax_rate\"]').unbind('change').change(function() {
\t\t\t\t\$(this).parents('tr').find('[field=\"amount_of_tax\"]').val((\$(this).val() * \$(this).parents('tr').find('[field=\"money\"]').val() / 100).toFixed(2));

\t\t\t\tif(\$(this).parents('tr').find('[field=\"is_invalid\"]').val() == 1) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t//税额总额
\t\t\t\tvar total = 0;
\t\t\t\t\$(this).parents('tbody').find('[field=amount_of_tax]').not(':hidden').each(function(i, e) {
\t\t\t\t\ttotal += parseFloat(\$(e).val().trim() ? \$(e).val().trim() : '0');
\t\t\t\t});
\t\t\t\t\$(this).parents('table').find('[total=amount_of_tax]').text(total.toFixed(2));
\t\t\t});

\t\t\t//份额  金额 失去焦点 且 未作废状态  统计数据改变
\t\t\t\$('#templateCon').unbind('blur').on('blur', '[field=\"invoice\"],[field=\"money\"],[field=\"amount_of_tax\"]', function() {
\t\t\t\t//如果是金额输入框失去焦点，先计算税额，再统计数据:税额 = 金额 * 税率
\t\t\t\tif(\$(this).attr('field') == 'money') {
\t\t\t\t\t\$(this).parents('tr').find('[field=\"amount_of_tax\"]').val((\$(this).val() * \$(this).parents('tr').find('[field=\"tax_rate\"]').val() / 100).toFixed(2));
\t\t\t\t}

\t\t\t\tif(\$(this).parents('tr').find('[field=\"is_invalid\"]').val() == 1) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t//份数或金额总额
\t\t\t\tvar total = 0;
\t\t\t\t//税额总额
\t\t\t\tvar total_amount_of_tax = 0;
\t\t\t\t\$(this).parents('tbody').find('[field=' + \$(this).attr('field') + ']').not(':hidden').each(function(i, e) {
\t\t\t\t\ttotal += parseFloat(\$(e).val().trim() ? \$(e).val().trim() : '0');
\t\t\t\t\ttotal_amount_of_tax += parseFloat(\$(e).parents('tr').find('[field=\"amount_of_tax\"]').val().trim() ? \$(e).parents('tr').find('[field=\"amount_of_tax\"]').val().trim() : '0');
\t\t\t\t});
\t\t\t\t\$(this).parents('table').find('[total=' + \$(this).attr('field') + ']').text(total.toFixed(2));
\t\t\t\t\$(this).parents('table').find('[total=amount_of_tax]').text(total_amount_of_tax.toFixed(2));
\t\t\t});
\t\t}

\t\t//点击 +  添加一条记录
\t\tfunction addItem() {
\t\t\t\$('#templateCon .increase').unbind('click').click(function() {
\t\t\t\tif(\$(this).parents('table').find('tbody tr').not(':hidden').length == 5) {
\t\t\t\t\tykp.prompt('最多只能添加5条记录!');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tvar html = \$(this).parents('table').find('tbody tr').eq(0).html();
\t\t\t\t\$(this).parents('table').find('tbody').append('<tr>' + html + '</tr>');

\t\t\t\t//认证日期
\t\t\t\tif(!ace.vars['old_ie']) {
\t\t\t\t\t\$('.date-timepicker1').datetimepicker({
\t\t\t\t\t\tformat: 'YYYY-MM-DD', //use this option to display seconds
\t\t\t\t\t\ticons: {
\t\t\t\t\t\t\ttime: 'fa fa-clock-o',
\t\t\t\t\t\t\tdate: 'fa fa-calendar',
\t\t\t\t\t\t\tup: 'fa fa-chevron-up',
\t\t\t\t\t\t\tdown: 'fa fa-chevron-down',
\t\t\t\t\t\t\tprevious: 'fa fa-chevron-left',
\t\t\t\t\t\t\tnext: 'fa fa-chevron-right',
\t\t\t\t\t\t\ttoday: 'fa fa-arrows ',
\t\t\t\t\t\t\tclear: 'fa fa-trash',
\t\t\t\t\t\t\tclose: 'fa fa-times'
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t}

\t\t\t\t//点击 -  删除一条记录
\t\t\t\tremoveItem();

\t\t\t\t//统计份额  金额 税额
\t\t\t\tcountItems();
\t\t\t});
\t\t}

\t\t//点击 -  删除一条记录
\t\tfunction removeItem() {
\t\t\t\$('#templateCon .decrease').unbind('click').click(function() {
\t\t\t\tvar it = \$(this);

\t\t\t\t//如果为未作废状态的情况的话，需要先将统计数据减去该条数据中对应的数据
\t\t\t\tif(!it.parents('tr').find('[field=\"is_invalid\"]').val() || it.parents('tr').find('[field=\"is_invalid\"]').val() == '0') {
\t\t\t\t\tit.parents('table').find('[total]').each(function(i, e) {
\t\t\t\t\t\ttotal = \$(e).text().trim();
\t\t\t\t\t\titem = it.parents('tr').find('[field=' + \$(e).attr('total') + ']').val().trim();

\t\t\t\t\t\tif(\$(e).attr('total') == 'amount_of_tax') {
\t\t\t\t\t\t\t\$(e).text(eval((total ? total : '0') + '-' + (item ? item : '0')).toFixed(2));
\t\t\t\t\t\t\ttotal = '';
\t\t\t\t\t\t\titem = '';
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}

\t\t\t\t\t\t\$(e).text(eval((total ? total : '0') + '-' + (item ? item : '0')));

\t\t\t\t\t\ttotal = '';
\t\t\t\t\t\titem = '';
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\tit.parents('tr').remove();
\t\t\t});
\t\t}

\t\t//搜索
\t\tsearch();

\t\tfunction search() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\t\"type\": 4,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}

\t\t\tcs.doSearch('.search', data, 'where', true, function(res, _filter) {
\t\t\t\tfilter = _filter;
\t\t\t\tvar dataList, pagination;
\t\t\t\tvar type = \$('.kind').find('.now').index();
\t\t\t\tdata.data.where = type == 0 ? \"khm_customer.tax_type=2\" : \"khm_customer.tax_type=1\";
\t\t\t\tdataList = type == 0 ? '#dataList' : '#dataList1';
\t\t\t\tpagination = type == 0 ? '#pagination1' : '#pagination2';
\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'), res['data']['months'], type);
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$(dataList).html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d clear:none;\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn false;
\t\t\t\t} else {

\t\t\t\t\taddList(res, (type == 0 ? 2 : 1), dataList, pagination);
\t\t\t\t}
\t\t\t}, '', {
\t\t\t\turl: \"/api/api_service/assistant_list_new \"
\t\t\t})
\t\t}

\t\tcs.setFuze({
\t\t\tcheck: true,
\t\t\tconId: [\"#dataList\", \"#dataList1\"],
\t\t\ttype: \"4\",
\t\t\turl: \"/api/api_service/transfer_user\",
\t\t\tfun: function(ftype) {
\t\t\t\tgetAccountList(1, ftype);
\t\t\t}
\t\t});
        doHserch();

\t\tfunction doHserch() {
            var data = {
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\t\"type\": 4,
\t\t\t\t\torder: order,
\t\t\t\t}
\t\t\t}
\t\t\tcs.hSearch('.search1', data, 'where', true, function(res, _filter, month) {
                \$('.in').click();
\t\t\t\tfilter = _filter;
\t\t\t\tmonth2 = month;
\t\t\t\tvar index = \$('.kind').find('.now').index();
\t\t\t\tvar dataList = index == 0 ? '#dataList' : '#dataList1';
\t\t\t\tvar hSearchTable = index == 0 ? '#heightsearch1' : '#height_search1';
\t\t\t\tvar butt = index == 0 ? '#heightsearch' : '#height_search';

\t\t\t\t\$(butt).removeClass('active');
\t\t\t\t\$(hSearchTable).slideUp();
\t\t\t\thMonth = cs.last_year_month();
\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'), res['data']['months'], (index == 0 ? 2 : 1));
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$(dataList).html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center; clear:none;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\taddList(res, (index == 0 ? 2 : 1), dataList);
\t\t\t}, '', {
\t\t\t\turl: \"/api/api_service/assistant_list_new \"
\t\t\t})
\t\t}

\t\t//自定义列表
       /* console.log(222);
        cs.custorm_check('#dynamic-table1', '#dataList', true);*/
\t\t//cs.setPagination('#pagination', 5, 50, 5, getPageList);
\t\t//cs.setPagination('#pagination1', 5, 50, 5, getPageList);

\t\t\$('#dynamic-table1 tbody').on('click', 'td', function(e) {
\t\t\tvar id = \$(this).parent().attr('data-id');
\t\t\t//获取当前行的下标
\t\t\t//console.log(\$(this).attr('data-type'))
\t\t\tvar type = \$(this).attr('data-type');
\t\t\tvar index = \$(this).parent().index();
\t\t\tvar trIndex = \$(this).parents('tr').find('td').index(\$(this));
\t\t\tvar id = \$(this).attr('id');
\t\t\tswitch(type) {
\t\t\t\tcase '0':
\t\t\t\t\tsetPageStatus(trIndex);
\t\t\t\t\tbreak;
\t\t\t\tcase '1':
\t\t\t\t\talert('我点击了逾期名称');
\t\t\t\t\tbreak;
\t\t\t\tcase '2':
\t\t\t\t\tgetCompanyInfo(id)
\t\t\t\t\tbreak;
\t\t\t\tdefault:
\t\t\t\t\tbreak;
\t\t\t}

\t\t\tfunction getCompanyInfo(id) {

\t\t\t}

\t\t\tfunction setPageStatus(trIndex) {
\t\t\t\t//获取点击当前行的列下标
\t\t\t\tvar thAry = \$('#dynamic-table1  thead th').eq(trIndex).text();
\t\t\t\tshowMark('#addList');
\t\t\t}

\t\t\t// 点击逾期
\t\t\tfunction dataTime() {

\t\t\t}
\t\t});

\t\t//打开投诉列表，加载投诉信息
\t\t\$('.js_complaint').click(function() {
\t\t\tshowMark('#complaint_list');
\t\t\t\$('#showBox .title').text('投诉列表');
\t\t\t//加载所有员工
\t\t\tgetAllData();

\t\t\tfunction getAllData(page) {
\t\t\t\tvar page_size = page || \"10\";
\t\t\t\tvar order = 'jzm_complaint.status asc';
\t\t\t\tykp.list({
\t\t\t\t\turl: '/api/api_service/list_complaint',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tpage: 1,
\t\t\t\t\t\tlimit: page_size,
\t\t\t\t\t\torder: order
\t\t\t\t\t},
\t\t\t\t\tpageBar: {
\t\t\t\t\t\tid: '.pageBar'
\t\t\t\t\t},
\t\t\t\t\tloadList: function(res) {
\t\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\t\$(\"#templateBox #complaint_datalist\").html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\trenderTable(res.data);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});
\t\t\t};

\t\t\tfunction renderTable(datas) {
\t\t\t\tvar me = JSON.parse(ykp.getCookie('userinfo'));
\t\t\t\tvar data = datas.items;
\t\t\t\tykp.setCookie('page_no', datas.curPage, (1 / 24));
\t\t\t\t\$(\"#templateBox #complaint_datalist\").html('');
\t\t\t\tfor(var i in data) {

\t\t\t\t\tvar showMsg = data[i]['jzm_complaint.remark'] && data[i]['jzm_complaint.remark'].length > 10 ? data[i]['jzm_complaint.remark'].substring(0, 10) + '...' : data[i]['jzm_complaint.remark'];
\t\t\t\t\tvar showRemark = data[i]['jzm_complaint.auth_remark'] && data[i]['jzm_complaint.auth_remark'].length > 10 ? data[i]['jzm_complaint.auth_remark'].substring(0, 10) + '...' : data[i]['jzm_complaint.auth_remark'];
\t\t\t\t\tvar showContent = data[i]['jzm_complaint.content'] && data[i]['jzm_complaint.content'].length > 10 ? data[i]['jzm_complaint.content'].substring(0, 10) + '...' : data[i]['jzm_complaint.content'];

\t\t\t\t\tvar approveFlag = true; //审批开关
\t\t\t\t\tif(!cs.getNodes([283, 289], true)) {
\t\t\t\t\t\tapproveFlag = false;
\t\t\t\t\t}
\t\t\t\t\t//\t\t\t\t\tapproveFlag = true;
\t\t\t\t\tvar hasAuth = true; //审批权限
\t\t\t\t\tif(!cs.getNodes([117, 289], true)) { //没有权限
\t\t\t\t\t\thasAuth = false;
\t\t\t\t\t}

\t\t\t\t\t//给保存按钮添加是否活跃逻辑\t\t\t\t\t
\t\t\t\t\tvar canClick = true;
\t\t\t\t\tif(me['id'] == data[i].dutoInfo.id) { //是负责人
\t\t\t\t\t\tif(data[i]['jzm_complaint.status'] == 0) { //未解决
\t\t\t\t\t\t\tcanClick = true;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tcanClick = false;
\t\t\t\t\t\t}
\t\t\t\t\t} else { //不是负责人,执行审批操作
\t\t\t\t\t\tif(approveFlag) { //审批开关打开
\t\t\t\t\t\t\tif(data[i]['jzm_complaint.status'] == 0) { //未解决
\t\t\t\t\t\t\t\tcanClick = false;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tif(data[i]['jzm_complaint.auth_status'] == '2') {
\t\t\t\t\t\t\t\t\tcanClick = false;
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tif(hasAuth) { //有权限，可点击
\t\t\t\t\t\t\t\t\t\tcanClick = true;
\t\t\t\t\t\t\t\t\t} else { //没权限，不可点击
\t\t\t\t\t\t\t\t\t\tcanClick = false;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else { //审批开关关闭
\t\t\t\t\t\t\tcanClick = false;
\t\t\t\t\t\t}

\t\t\t\t\t}
\t\t\t\t\tif(data[i]['jzm_complaint.status'] == '1' && data[i]['jzm_complaint.auth_status'] == '2') { //解决且审核通过，按钮不可点击
\t\t\t\t\t\tcanClick = false;
\t\t\t\t\t}

\t\t\t\t\t/*
\t\t\t\t\t审核逻辑：
\t\t\t\t\t1.负责人未完成，不能提交审核；
\t\t\t\t\t2.不能自己审核自己负责的投诉建议；
\t\t\t\t\t3.审核未通过，解决状态自动翻转为未解决。
\t\t\t\t\t*/
\t\t\t\t\t/*负责人提交逻辑：
\t\t\t\t\t1.只能提交操作负责人为本人的投诉建议;
\t\t\t\t\t2.状态未翻转，不能提交；
\t\t\t\t\t3.第一次提交后，审核状态变成提交审核，若第一次审核未通过，后续审核状态在负责人提交时不变。
\t\t\t\t\t*/
\t\t\t\t\t//\t\t\t\t\t\${data[i]['jzm_complaint.status']==0?'disabled':''}
\t\t\t\t\tvar tr = `<tr complaint_id=\"\${data[i]['jzm_complaint.id']}\" duto_id=\"\${data[i].dutoInfo.id}\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td class=\"center\" title=\"\" style=\"line-height:40px\">\${data[i]['khm_customer.name']}</td>
\t\t\t\t\t\t\t<td class=\"center\" title=\"customer_name\" style=\"line-height:40px\">\${data[i]['jzm_complaint.customer_name']}</td>
\t\t\t\t\t\t\t<td class=\"center\" title=\"customer_tel\" style=\"line-height:40px\">\${data[i]['jzm_complaint.customer_tel']}</td>
\t\t\t\t\t\t\t<td class=\"center\" title=\"time\" style=\"line-height:40px\">\${cs.getNowTime(data[i]['jzm_complaint.time'])}</td>
\t\t\t\t\t\t\t<td class=\"center\" title=\"\${data[i]['jzm_complaint.content']}\" style=\"line-height:40px\">\${showContent}</td>
\t\t\t\t\t\t\t<td class=\"center\" title=\"remark\" style=\"line-height:40px\">
\t\t\t\t\t\t\t\t<input maxlength=\"40\" class=\"center js_remark\" title=\"\${data[i]['jzm_complaint.remark']}\" value=\"\${showMsg}\" \${data[i]['jzm_complaint.status']==1||me['id']!=data[i].dutoInfo.id?'disabled':''}  />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center emps\"  title=\"duto\" style=\"line-height:40px\">
\t\t\t\t\t\t\t\t\${data[i].dutoInfo.name}
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td class=\"center\" title=\"status\" style=\"line-height:40px\">
\t\t\t\t\t\t\t\t<select title=\"status\" \${data[i]['jzm_complaint.status']==1||me['id']!=data[i].dutoInfo.id?'disabled':''} >
\t\t\t\t\t\t\t\t\t<option value=\"0\" \${data[i]['jzm_complaint.status']==0?'selected':''} >未解决
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\" \${data[i]['jzm_complaint.status']==1?'selected':''} >已解决
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td class=\"center\" title=\"remark\" style=\"line-height:40px\">
\t\t\t\t\t\t\t\t<input maxlength=\"40\" class=\"center complaint_remark\" title=\"\${data[i]['jzm_complaint.complete_remark']}\" value=\"\${data[i]['jzm_complaint.complete_remark']}\" \${data[i]['jzm_complaint.status']==1||me['id']!=data[i].dutoInfo.id?'disabled':''}  />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" title=\"create_id\" style=\"line-height:40px\">\${data[i].createInfo.name}</td>
\t\t\t\t\t\t\t<td class=\"center\" title=\"create_time\" style=\"line-height:40px\">\${cs.getNowTime(data[i]['jzm_complaint.create_time'])}</td>
\t\t\t\t\t\t\t<td class=\"center\" title=\"auth_id\" style=\"line-height:40px\">\${data[i].authInfo&&data[i].authInfo.name?data[i].authInfo.name:' '}</td>
\t\t\t\t\t\t\t<td class=\"center\" title=\"auth_time\" style=\"line-height:40px\">\${data[i]['jzm_complaint.anth_time']&&data[i]['jzm_complaint.anth_time']>0?cs.getNowTime(data[i]['jzm_complaint.anth_time']):'-'}</td>
\t\t\t\t\t\t\t<td class=\"center\" title=\"auth_status\" style=\"line-height:40px\">
\t\t\t\t\t\t\t <select title=\"auth_status\" \${approveFlag?'':'disabled'} \${data[i]['jzm_complaint.auth_status']==2?' disabled':''}
\t\t\t\t\t\t\t\t \${me['id']==data[i].dutoInfo.id?'disabled':''} \${hasAuth?'':'disabled'}
\t\t\t\t\t\t\t\t>\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<option value=\"0\" \${data[i]['jzm_complaint.auth_status'] == 0?'selected':''} >请选择
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\" \${data[i]['jzm_complaint.auth_status']==1?'selected':''} >未通过
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<option value=\"2\" \${data[i]['jzm_complaint.auth_status']==2?'selected':''} >已通过
\t\t\t\t\t\t\t\t\t</option>

\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" title=\"auth_remark\" style=\"line-height:40px\">
\t\t\t\t\t\t\t\t<input maxlength=\"40\" title=\"\${data[i]['jzm_complaint.auth_remark']||''}\" value=\"\${showRemark}\" \${approveFlag?'':'disabled'}  \${data[i]['jzm_complaint.auth_status']==2?'disabled':''}  \${data[i]['jzm_complaint.status']!=1?'disabled':''} \${me['id']==data[i].dutoInfo.id?'disabled':''}  \${hasAuth?'':'disabled'} class=\"center js_auth_remark\" style=\"width:100px\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" title=\"auth_fix\" style=\"line-height:40px\">
\t\t\t\t\t\t\t\t<button class=\"saveComplaint_list btn btn-info btn-sm\" \${canClick?'':'disabled'} >保存
\t  \t\t\t\t\t\t\t</button>
  \t\t\t\t\t\t\t</td>

\t\t\t\t\t</tr>`;
\t\t\t\t\t//\t\t\t\t\t<option value=\"0\" \${data[i]['jzm_complaint.auth_status']==0?'selected':''} >未开始
\t\t\t\t\t//\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t//\t\t\t\t\t<option value=\"3\" \${data[i]['jzm_complaint.auth_status']==3?'selected':''} >提交审核
\t\t\t\t\t//\t\t\t\t\t\t\t\t\t</option>

\t\t\t\t\t\$(\"#templateBox #complaint_datalist\").append(tr);

\t\t\t\t};

\t\t\t\t//审批开关
\t\t\t\t/*if (!cs.getSpStatus('投诉列表')) {
\t\t\t\t\tykp.prompt('暂时没有开启审批功能');
\t\t\t\t\t\$(\"#templateBox #complaint_datalist\").find('[title=\"auth_status\"],[title=\"auth_remark\"]').children().attr('disabled','disabled');
\t\t\t\t\t\$(\"#templateBox #complaint_datalist\").find('.saveComplaint_list').attr('disabled','disabled');
\t\t\t\t};*/
\t\t\t\t//是否有审批权限
\t\t\t\t/*if (!cs.getNodes([117],true)) {
\t\t\t\t\tconsole.log(cs.getNodes([117],true));
\t\t\t\t\tykp.prompt('你没有审批权限');
\t\t\t\t\t\$(\"#templateBox #complaint_datalist\").find('[title=\"auth_status\"],[title=\"auth_remark\"]').children().attr('disabled','disabled');
\t\t\t\t\t\$(\"#templateBox #complaint_datalist\").find('.saveComplaint_list').attr('disabled','disabled');
\t\t\t\t};*/

\t\t\t\t//加载负责人
\t\t\t\t/*ykp.doAjax({
\t\t\t\t\turl: '/api/api_employees/grid',
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tpage: 1,
\t\t\t\t\t\tlimit: 9999
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data.items;
\t\t\t\t\t\tvar emps = [];
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\tvar emp = {};
\t\t\t\t\t\t\temp[\"id\"] = data[i]['bmm_employees.id'];
\t\t\t\t\t\t\temp[\"name\"] = data[i]['bmm_employees.name'];
\t\t\t\t\t\t\temps.push(emp);
\t\t\t\t\t\t}

\t\t\t\t\t\tvar selects = \$(\"#templateBox #complaint_datalist\").find(\".emps\");
\t\t\t\t\t\tvar option = '';
\t\t\t\t\t\tfor(var i in emps) {
\t\t\t\t\t\t\toption += `<option value=\"\${emps[i][\"id\"]}\">\${emps[i][\"name\"]}</option>`;
\t\t\t\t\t\t}

\t\t\t\t\t\t\$(selects).each(function() {
\t\t\t\t\t\t\t\$(this).find(\"select\").html(option);
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t});*/
\t\t\t\tsaveComplaint();
                \$(\"#temHeader\").width(\$(\"#showBox\").width()-47);
\t\t\t};

\t\t\t//保存投诉信息
\t\t\tfunction saveComplaint() {
\t\t\t\t\$(\"#templateBox .saveComplaint_list\").on(\"click\", function() {
\t\t\t\t\tvar complaints = [];
\t\t\t\t\tvar id = \$(this).parents('tr').attr(\"complaint_id\");
\t\t\t\t\tvar status = \$(this).parent().siblings().find(\"select[title='status']\").val();
\t\t\t\t\tvar auth_status = \$(this).parent().siblings().find(\"select[title='auth_status']\").val();
\t\t\t\t\tvar remark = \$(this).parent().siblings().find(\".js_remark\").val();
\t\t\t\t\tvar complete_remark = \$(this).parent().siblings().find(\".complaint_remark\").val();
\t\t\t\t\tvar auth_remark = \$(this).parent().siblings().find(\".js_auth_remark\").val();
\t\t\t\t\tvar remark_title = \$(this).parent().siblings().find(\".js_remark\").attr('title');
\t\t\t\t\tvar auth_remark_title = \$(this).parent().siblings().find(\".js_auth_remark\").attr('title');
\t\t\t\t\tif(remark && remark.indexOf('...') != -1 && remark_title && remark_title.length > 10) {
\t\t\t\t\t\tremark = remark_title;
\t\t\t\t\t}
\t\t\t\t\tif(auth_remark && auth_remark.indexOf('...') != -1 && auth_remark_title && auth_remark_title.length > 10) {
\t\t\t\t\t\tauth_remark = auth_remark_title;
\t\t\t\t\t}
\t\t\t\t\tif(status == '0') { //负责人提交
\t\t\t\t\t\tykp.prompt(\"请翻转解决状态！\");
\t\t\t\t\t\treturn false;
\t\t\t\t\t}

\t\t\t\t\tvar me = JSON.parse(ykp.getCookie('userinfo'));
\t\t\t\t\tvar duto_id = \$(this).parents('tr').attr(\"duto_id\");
\t\t\t\t\tif(me['id'] != duto_id) { //非本人的操作即为审核人操作
\t\t\t\t\t\tif(auth_status == '0' || auth_status == '3') {
\t\t\t\t\t\t\tykp.prompt(\"请改变审核状态！\");
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t//\t\t\t\t\tif(status == '1') {
\t\t\t\t\t//\t\t\t\t\t\tif(auth_status == '1' || auth_status == '2') {
\t\t\t\t\t//
\t\t\t\t\t//\t\t\t\t\t\t} else {
\t\t\t\t\t//\t\t\t\t\t\t\tauth_status = '3';
\t\t\t\t\t//\t\t\t\t\t\t}
\t\t\t\t\t//\t\t\t\t\t}
\t\t\t\t\t//\t\t\t\t\tconsole.log(auth_status);
\t\t\t\t\t//\t\t\t\t\treturn false;
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_service/antu_complaint',
\t\t\t\t\t\tmethods: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tid: id,
\t\t\t\t\t\t\tstatus: status,
\t\t\t\t\t\t\tremark: remark,
\t\t\t\t\t\t\tauth_status: auth_status,
\t\t\t\t\t\t\tauth_remark: auth_remark,
\t\t\t\t\t\t\tcomplete_remark: complete_remark
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tykp.prompt(\"保存成功！\");
\t\t\t\t\t\t\t\$(\"#templateBox #complaint_datalist\").html('');
\t\t\t\t\t\t\t/*\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\t\t\$('#showBox').addClass('ishide');
\t\t\t\t\t\t\t\$('.ui-pagination-container').remove();*/
\t\t\t\t\t\t\t//getAccountList(1, ftype);
\t\t\t\t\t\t\tgetAllData();
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t})

\t\t\t};

\t\t\t//分页
\t\t\t/*\$('#selectChoice').change(function() {
\t\t\t\tvar page_size = \$(this).val();
\t\t\t\tgetAllData(page_size);
\t\t\t});*/

\t\t})

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

\t//保存工资单
\tfunction savewage(kh_id) {
\t\t\$(\"#templateCon .save\").unbind('click').click(function() {
\t\t\tvar data = [];
\t\t\tvar state = false;
\t\t\t\$(\"#templateCon #payrollList input\").each(function(i) {
\t\t\t\tif(\$(this).val() == \"\") {
\t\t\t\t\tykp.prompt(\"所有选项不能为空\");
\t\t\t\t\t// ykp.prompt(\"\")
\t\t\t\t\tstate = false;
\t\t\t\t\treturn false;
\t\t\t\t} else {
\t\t\t\t\tstate = true;
\t\t\t\t}
\t\t\t})

\t\t\tif(state) {
\t\t\t\tvar trs = \$(\"#templateCon #payrollList\").find(\"tr\");
\t\t\t\ttrs.each(function(i) {
\t\t\t\t\tvar tr = {
\t\t\t\t\t\tkh_id: kh_id
\t\t\t\t\t};
\t\t\t\t\tvar tds = \$(this).children(\"td\")
\t\t\t\t\t//\t\t\t\t\tif(\$(tds[0]).find(\"span\").text().trim() != \"\") {
\t\t\t\t\t//\t\t\t\t\t\ttr[\"id\"] =  \$(tds[0]).find(\"span\").text().trim();
\t\t\t\t\t//\t\t\t\t\t}
\t\t\t\t\tif(\$(tds[0]).attr('data-id')) {
\t\t\t\t\t\ttr[\"id\"] = \$(tds[0]).attr('data-id');
\t\t\t\t\t}
\t\t\t\t\ttr[\"name\"] = \$(tds[1]).find(\"input\").val();
\t\t\t\t\ttr[\"basic\"] = \$(tds[2]).find(\"input\").val();
\t\t\t\t\ttr[\"day\"] = \$(tds[3]).find(\"input\").val();
\t\t\t\t\ttr[\"day_money\"] = \$(tds[4]).find(\"input\").val();
\t\t\t\t\ttr[\"social\"] = \$(tds[5]).find(\"input\").val();
\t\t\t\t\ttr[\"total\"] = \$(tds[6]).find(\"input\").val();
\t\t\t\t\ttr['month'] = \$('#templateBox #month select').val();
\t\t\t\t\tdata.push(tr);
\t\t\t\t})

\t\t\t\t//\t\t\t\tconsole.log(data);
\t\t\t\t//\t\t\t\treturn false;
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_customer/hk_wages_add_edit',
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tcoldata: JSON.stringify(data),
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tykp.prompt(\"保存成功!\");
\t\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\t\$('#showBox').addClass('ishide');
\t\t\t\t\t\t\$('.ui-pagination-container').remove();
\t\t\t\t\t\tvar index = \$('.kind').find('.now').index();
\t\t\t\t\t\tvar ftype = 1;
\t\t\t\t\t\tif(index == 0) {
\t\t\t\t\t\t\tftype = 2;
\t\t\t\t\t\t}
\t\t\t\t\t\tgetAccountList(1, ftype);
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}
\t\t})
\t}

\t//打印
\tfunction printPayBill() {
\t\t\$('#templateCon .print').unbind('click').on('click', function() {
\t\t\tvar print_area = \$(\"#templateCon .print_area\")[0].cloneNode(true);
\t\t\t\$(print_area).find('input').each(function(i, e) {
\t\t\t\t\$(this).parent().text(\$(this).val());
\t\t\t});
\t\t\t\$(\"#templateCon .print_box\").show();
\t\t\t\$(\"#templateCon .nobody\").show();
\t\t\t\$(\"#templateCon .remark\").remove();
\t\t\t\$(\"#templateCon .print_area\").print({
\t\t\t\t//Use Global styles
\t\t\t\tglobalStyles: false,
\t\t\t\t//Add link with attrbute media=print
\t\t\t\tmediaPrint: false,
\t\t\t\t//Custom stylesheet
\t\t\t\tstylesheet: null,
\t\t\t\t//Print in a hidden iframe
\t\t\t\tiframe: true,
\t\t\t\t//Don't print this
\t\t\t\tnoPrintSelector: \".no-print\",
\t\t\t\t//Add this at top
\t\t\t\tprepend: null,
\t\t\t\t//Add this on bottom
\t\t\t\tappend: null,
\t\t\t\t//Log to console when printing is done via a deffered callback
\t\t\t\tdeferred: \$.Deferred().done(function() {
\t\t\t\t\tsavewage(kh_id);
\t\t\t\t\t
\t\t\t\t})
\t\t\t});
\t\t\t\$(\"#templateCon .nobody\").hide();
\t\t\t\$(\"#templateCon .print_box\").hide();
\t\t});

\t\t// \$('#templateCon .print').unbind('click').click(function(){
\t\t// var bdhtml = window.document.body.innerHTML;
\t\t// var sprnstr = \"<!--startprint-->\";
\t\t// var eprnstr = \"<!--endprint-->\";
\t\t// var prnhtml = bdhtml.substr(bdhtml.indexOf(sprnstr) + 17);
\t\t// prnhtml = \$(prnhtml.substring(0, prnhtml.indexOf(eprnstr)));
\t\t// prnhtml.find('#itemsTotal').append(
\t\t// \t`<tr>
\t\t// \t\t<td></td>
\t\t// \t\t<td>制表：</td>
\t\t// \t\t<td></td>
\t\t// \t\t<td></td>
\t\t// \t\t<td></td>
\t\t// \t\t<td></td>
\t\t// \t\t<td>审核：</td>
\t\t// \t\t<td></td>
\t\t// \t\t<td></td>
\t\t// \t</tr>`
\t\t// );

\t\t// prnhtml.find('._print,._save,._addItem').hide();
\t\t// prnhtml.find('tr').find('td:last').hide();
\t\t// prnhtml.find('#payrollList').find('input').each(function(i,e){
\t\t// \t\$(this).parent().text(\$(this).val().trim());
\t\t// });
\t\t// prnhtml.find('.title').html('工&nbsp;&nbsp;&nbsp;&nbsp;资&nbsp;&nbsp;&nbsp;&nbsp;表');

\t\t// var myWindow = window.open();
\t\t// myWindow.document.write(prnhtml.prop('outerHTML'));
\t\t// myWindow.print();
\t\t// });
\t}

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
\t\t\tykp.prompt(\"导入成功\")
\t\t\tif(res.code != 200) {
\t\t\t\tykp.prompt(res.msg);
\t\t\t\treturn;
\t\t\t}
\t\t});

\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/task/customer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1817 => 1794,  1813 => 1793,  19 => 1,);
    }
}
/* <style>*/
/* 	#templateBox #templateCon tr td {*/
/* 		background: #e6ecf2;*/
/* 	}*/
/* 	*/
/* 	#templateBox #templateCon tr td input {*/
/* 		background: #e6ecf2;*/
/* 	}*/
/* 	*/
/* 	#templateBox #templateCon tr td select {*/
/* 		background: #e6ecf2;*/
/* 		cursor: pointer;*/
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
/* 	#templateCon #month {*/
/* 		float: left;*/
/* 		margin-left: 250px;*/
/* 		font-size: 14px*/
/* 	}*/
/* 	*/
/* 	#templateCon .creator {*/
/* 		display: none;*/
/* 	}*/
/* 	*/
/* 	#templateCon .layui-colla-content input {*/
/* 		width: 70px;*/
/* 	}*/
/* 	*/
/* 	#templateCon .layui-colla-content select {*/
/* 		min-width: 70px;*/
/* 	}*/
/* 	*/
/* 	#templateCon .layui-colla-content label {*/
/* 		width: 24px;*/
/* 	}*/
/* 	*/
/* 	#showBox {*/
/* 		/*width:1100px;*//* */
/* 	}*/
/* 	*/
/* 	#templateCon .bootstrap-datetimepicker-widget.dropdown-menu table {*/
/* 		table-layout: fixed !important;*/
/* 	}*/
/* 	*/
/* 	#heightsearch1 label,*/
/* 	#height_search1 label {*/
/* 		text-align: right;*/
/* 		width: 80px;*/
/* 		font-weight: normal;*/
/* 	}*/
/* 	*/
/* 	#templateCon .increase,*/
/* 	#templateCon .decrease {*/
/* 		text-align: left;*/
/* 	}*/
/* 	*/
/* 	.dropdown-menu,*/
/* 	.bootstrap-datetimepicker-widget {*/
/* 		z-index: 1000 !important;*/
/* 	}*/
/* 	#templateBox {*/
/* 		overflow: visible !important;*/
/* 	}*/
/* 	#templateBox .custom_table {*/
/* 		overflow: visible !important;*/
/* 	}*/
/* .tooltip{*/
/* 	position: absolute;*/
/* 	z-index: 99999!important;*/
/* }*/
/* </style>*/
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<div style="margin-top: 0px;">*/
/* 			<!-- <h3 class="header smaller lighter blue">客服</h3> -->*/
/* 			<!--<div class="row">*/
/* 				<div style="width:100%;height:40px;">*/
/* 					<div class="col-sx-4" style=" float: left; margin-right: 15px;">*/
/* 						<label> 月份： </label>*/
/* 						<select id="tmonth">*/
/* 							<option value="1">1月</option>*/
/* 							<option value="2">2月</option>*/
/* 							<option value="3">3月</option>*/
/* 							<option value="4">4月</option>*/
/* 							<option value="5">5月</option>*/
/* 							<option value="6">6月</option>*/
/* 							<option value="7">7月</option>*/
/* 							<option value="8">8月</option>*/
/* 							<option value="9">9月</option>*/
/* 							<option value="10">10月</option>*/
/* 							<option value="11">11月</option>*/
/* 							<option value="12">12月</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-right: 15px;">*/
/* 						<button type="button"  class="tsarch btn btn-info btn-sm">查询</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>-->*/
/* */
/* 			<div style="margin-top: 50px;  width: 860px; padding: 0px;" class="row col-xs-12">*/
/* 				<div class="col-xs-12 infobox-container" style="padding: 0px; margin-left: -10px;">*/
/* */
/* 					<!-- #section:pages/dashboard.infobox -->*/
/* */
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
/* 					<div class="infobox infobox-blue2">*/
/* 						<div class="infobox-progress">*/
/* 							<!-- #section:pages/dashboard.infobox.easypiechart -->*/
/* 							<div class="easy-pie-chart percentage" data-percent="0" data-size="50" style="height: 57px;width: 57px;line-height: 56px;">*/
/* 								<span class="percent" id="percent"></span>*/
/* 								<canvas height="57" width="57"></canvas>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="infobox-data" style="margin:3px 0 0 20px;">*/
/* 							<div class="infobox-content" id="isOk"></div>*/
/* */
/* 							<div class="infobox-content" id="noOk">*/
/* */
/* 							</div>*/
/* 							<div class="infobox-content" id="noOk">*/
/* */
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="infobox infobox-blue2">*/
/* 						<div class="infobox-progress">*/
/* 							<!-- #section:pages/dashboard.infobox.easypiechart -->*/
/* 							<div class="easy-pie-chart percentage" data-percent="0" data-size="50" style="height: 57px; width: 57px; line-height: 56px;">*/
/* 								<span class="percent" id="percent1"></span>*/
/* 								<canvas height="57" width="57"></canvas></div>*/
/* 						</div>*/
/* */
/* 						<div class="infobox-data" style="margin:3px 0 0 20px;">*/
/* 							<div class="infobox-content" id="isOk">*/
/* */
/* 							</div>*/
/* */
/* 							<div class="infobox-content">*/
/* */
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="infobox infobox-blue2">*/
/* 						<div class="infobox-progress">*/
/* 							<!-- #section:pages/dashboard.infobox.easypiechart -->*/
/* 							<div class="easy-pie-chart percentage" data-percent="0" data-size="50" style="height: 57px; width: 57px; line-height: 56px;">*/
/* 								<span class="percent" id="percent3"></span>*/
/* 								<canvas height="57" width="57"></canvas></div>*/
/* 						</div>*/
/* */
/* 						<div class="infobox-data" style="margin:3px 0 0 20px;">*/
/* 							<div class="infobox-content" id="isOk">*/
/* */
/* 							</div>*/
/* */
/* 							<div class="infobox-content">*/
/* */
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="infobox infobox-blue2">*/
/* 						<div class="infobox-progress">*/
/* 							<!-- #section:pages/dashboard.infobox.easypiechart -->*/
/* 							<div class="easy-pie-chart percentage" data-percent="" data-size="50" style="height: 57px; width: 57px; line-height: 56px;">*/
/* 								<span class="percent" id="percent4"></span>*/
/* 								<canvas height="57" width="57"></canvas></div>*/
/* 						</div>*/
/* */
/* 						<div class="infobox-data" style="margin:3px 0 0 20px;">*/
/* 							<div class="infobox-content" id="isOk">*/
/* */
/* 							</div>*/
/* */
/* 							<div class="infobox-content">*/
/* */
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-sm-12" style="margin-top: 50px;padding-left:0;padding-right:0; ">*/
/* */
/* 				<div class="kind">*/
/* 					<ul>*/
/* 						<li class="now">小规模</li>*/
/* 						<li>一般纳税人</li>*/
/* 					</ul>*/
/* 					<div id="tspage" style="border: 0px red solid; width: 480px;height: 30px;display:none;">*/
/* 						<a id="go_" href="javascript:void(0)">有部分一般纳税人数据,点击前往</a>*/
/* 						<a href="javascript:;" class="close_ts" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="widget-body">*/
/* 					<div>*/
/* 						<div class="tab-content">*/
/* 							<div id="task-tab" class="tab-pane active">*/
/* 								<div class="row" style="margin-top: 20px;" id="topTool">*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 										<input type="text" pts=1 sear="customer_name" placeholder="企业名称" autofocus/>*/
/* 									</div>								*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 										<input type="text" pts=0 sear="khm_customer.customer_num" placeholder="企业编码" autofocus/>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					                     <select style="width: 180px" pts=3 sear="jzm_service_info.fuze_id" class="advandced-search select2-hidden-accssible"  tabindex="-1" aria-hidden="true">*/
/* 						                    <option value="">负责人</option>*/
/* 					                     </select>*/
/* 				                    </div>*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 										<button type="button" id="search" title="搜索" class=" search btn btn-info btn-sm">*/
/*                                         <i class="fa fa-search"></i> */
/*                                     </button>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 										<button id="heightsearch" title="高级搜索" type="button" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/*                                         <i class="fa fa-filter"></i>*/
/*                                     </button>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 										<button class="flush btn btn-info btn-sm" title="刷新" type="button" style=" background-color: #32CD32	 !important;">*/
/* 					                    <i class="fa fa-refresh"></i>*/
/* 					                </button>*/
/* 									</div>*/
/* 									<div class="col-sx-4" contentAuthority="98" style=" float: left;margin-right: 5px;">*/
/* 										<label type="button" id="mergeItem" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" title=" 导入" class="btn btn-info btn-sm position-relative mergeItem" for="leading-in">*/
/* 			                            <i class="fa fa-sign-in"></i>*/
/* 			                       </label>*/
/* 									</div>*/
/* 									<div class="col-sx-4" contentAuthority="289" style=" float: left; margin-right: 5px;">*/
/* 										<button type="button" title="分配负责人" id="moveToClue" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="moveToClue btn addBtn btn-info btn-sm position-relative">*/
/* 											<i class="fa fa-hand-o-right"></i>*/
/* 						                </button>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 										<button id="complaint" contentAuthority="101" title="投诉列表" class="btn-warning js_complaint complaint btn btn-sm" style="background: #ffa500;border-color: #ffa500">*/
/* 											<i class="fa fa-bookmark-o"></i>*/
/* 										</button>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 										<div id="filterBtns" style="display:inline-block;width:290px;height: 36px">*/
/* 											<a href="javascript:void(0);" class="myFilter" style="line-height:32px;*/
/* 										background: #E6E6E6;" data-kind="0"> 查看全部</a>*/
/* 											<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="1"> 我负责的</a>*/
/* 											<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="2"> 我关注的</a>*/
/* 											<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="3"> 我的下属</a>*/
/* 										</div>*/
/* 									</div>*/
/* */
/* 									<!--高级搜索-->*/
/* 									<div id="heightsearch1" class="col-sx-12" style="margin-top:30px;position: absolute; background: #fff; z-index: 1041;padding: 20px 10px; display: none;">*/
/* 										<div class="row">*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>年份</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 												</select>*/
/* 												<select style="width: 180px" gjs=5 sear="year" data-year="true"></select>*/
/* 											</div>*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>月份</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 												</select>*/
/* 												<select style="width: 180px" gjs=5 sear="month">*/
/* 													<option value=""> 请选择 </option>*/
/* 													<option value="01"> 1月 </option>*/
/* 													<option value="02"> 2月 </option>*/
/* 													<option value="03"> 3月 </option>*/
/* 													<option value="04"> 4月 </option>*/
/* 													<option value="05"> 5月 </option>*/
/* 													<option value="06"> 6月 </option>*/
/* 													<option value="07"> 7月 </option>*/
/* 													<option value="08"> 8月 </option>*/
/* 													<option value="09"> 9月 </option>*/
/* 													<option value="10"> 10月 </option>*/
/* 													<option value="11"> 11月 </option>*/
/* 													<option value="12"> 12月 </option>*/
/* 												</select>*/
/* 											</div>*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>企业名称</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 												</select>*/
/* 												<input type="text" gjs=0 sear="khm_customer.name" />*/
/* 											</div>*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>客户编码</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 												</select>*/
/* 												<input type="text" gjs=0 sear="khm_customer.id" />*/
/* 											</div>*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>仓位</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 												</select>*/
/* 												<select gjs=3 sear="ckm_position_num.pos_id" class="cw" data-type="gj" style="width:180px;">*/
/* 												</select>*/
/* 											</div>*/
/* */
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>服务周期</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 													<option> > </option>*/
/* 													<option> &lt; </option>*/
/* 												</select>*/
/* 												<select gjs=0 sear="htm_contract.payment_cycle" data-type="gj" style="width:180px;">*/
/* 													<option value=""> 请选择 </option>*/
/* 													<option value="1"> 每月</option>*/
/* 													<option value="3"> 季度 </option>*/
/* 													<option value="6"> 半年 </option>*/
/* 													<option value="12"> 一年 </option>*/
/* 												</select>*/
/* 											</div>*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>负责人</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 												</select>*/
/* 												<select style="margin-right: 12px !important;width: 180px" gjs="0" data-type="gj" sear="jzm_service_info.fuze_id" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 													<option value="">请选择</option>*/
/* 												</select>*/
/* */
/* 											</div>*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>收款情况</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 												</select>*/
/* 												<select gjs=0 sear="jzm_service_info.get_money" data-type="gj" style="width:180px;">*/
/* 													<option value=""> 请选择 </option>*/
/* 													<option value="0"> 已收款 </option>*/
/* 													<option value="1"> 未收款 </option>*/
/* 												</select>*/
/* 											</div>*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>审批状态</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 												</select>*/
/* 												<select gjs=0 sear="jzm_service_info.status" data-type="gj" style="width:180px;">*/
/* 													<option value=""> 请选择 </option>*/
/* 													<option value="0"> 未开始</option>*/
/* 													<option value="1"> 待审批</option>*/
/* 													<option value="2"> 已通过 </option>*/
/* 													<option value="3"> 未通过 </option>*/
/* 												</select>*/
/* 											</div>*/
/* 											<div class="col-sx-4" style="clear:both;padding-top:10px;text-align:center;">*/
/* 												<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/* 						                        查询*/
/* 						                    </button>*/
/* 												<button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 							                       重置*/
/* 							                    </button>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* */
/* 								<!-- 小规模 -->*/
/* 								<div class="widget-body">*/
/* 									<div>*/
/* 										<div class="custom_table">*/
/* */
/* 											<table id="dynamic-table1">*/
/* 												<thead>*/
/* 													<tr class="thColor">*/
/* 														<th class="center">*/
/* 									                        <label class="pos-rel">*/
/* 									                        <input type="checkbox" name="check" class="ace" onclick="checkAll(this.checked)"/>*/
/* 									                        <span class="lbl"></span>*/
/* 									                        </label>*/
/* 									                    </th>*/
/* 														<th>操作</th>*/
/* 														<th data-num="1">企业名称</th>*/
/* 														<th data-num="2">任务等级</th>*/
/* 														<th data-num="3">客户编码</th>*/
/* 														<th data-num="4">仓位编码</th>*/
/* 														<th data-num="5">服务周期</th>*/
/* 														<th data-num="6">逾期</th>*/
/* 														<th data-num="7">截止月份</th>*/
/* 														<th data-num="8">负责人</th>*/
/* 														<th data-num="9">基本户</th>*/
/* 														<th class="month" data-num="10" data-month></th>*/
/* 														<th class="month" data-num="11" data-month></th>*/
/* 														<th class="month" data-num="12" data-month></th>*/
/* 														<th class="month" data-num="13" data-month></th>*/
/* 														<th class="month" data-num="14" data-month></th>*/
/* 														<th class="month" data-num="15" data-month></th>*/
/* 														<th class="month" data-num="16" data-month></th>*/
/* 														<th class="month" data-num="17" data-month></th>*/
/* 														<th class="month" data-num="18" data-month></th>*/
/* 														<th class="month" data-num="19" data-month></th>*/
/* 														<th class="month" data-num="20" data-month></th>*/
/* 														<th class="month" data-num="21" data-month></th>*/
/* 														<!--<th>操作</th>-->*/
/* 													</tr>*/
/* 												</thead>*/
/* */
/* 												<tbody id="dataList">*/
/* */
/* 												</tbody>*/
/* 											</table>*/
/* 											<div align="center" class="paginationCon">*/
/* 												<div id="pagination"></div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div id="member-tab" class="tab-pane">*/
/* 								<div class="row" style="margin-top: 20px;" id="topTool">*/
/* 									<!--普通搜索-->*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 										<input type="text" pts=1 sear="customer_name" placeholder="企业名称" autofocus/>*/
/* 									</div>*/
/* */
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 										<input type="text" pts=0 sear="khm_customer.customer_num" placeholder="企业编码" autofocus/>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 										<!--<input type="text" pts=1 sear="staff_name" placeholder="负责人" autofocus/>-->*/
/* 										<select style="width: 180px" pts=3 sear="jzm_service_info.fuze_id" class="advandced-search select2-hidden-accssible"  tabindex="-1" aria-hidden="true">*/
/* 											<option value="">负责人</option>*/
/* 										</select>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 										<button type="button" id="search" class="search btn btn-info btn-sm">*/
/*                                         	<i class="fa fa-search"></i>*/
/*                                         </button>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 										<button id="height_search" type="button" class=" btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/*                                             <i class="fa fa-filter"></i>*/
/*                                         </button>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 										<button class="flush btn btn-info btn-sm" type="button" style="background-color:#32CD32!important;">*/
/* 						                    <i class="fa fa-refresh"></i>*/
/* 						                </button>*/
/* 									</div>*/
/* 									<div class="col-sx-4" contentAuthority="98" style=" float: left;margin-right: 5px;">*/
/* 										<label type="button" id="mergeItem" title=" 导入" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="btn btn-info btn-sm position-relative mergeItem" for="leading-in">*/
/* 				                            <i class="fa fa-sign-in"></i>*/
/* */
/* 				                       </label>*/
/* 									</div>*/
/* 									<div class="col-sx-4" contentAuthority="289" style=" float: left; margin-right: 5px;">*/
/* 										<button type="button" title="分配负责人" id="moveToClue" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="moveToClue btn addBtn btn-info btn-sm position-relative">*/
/*                                             <i class="fa fa-hand-o-right"></i>*/
/* 						                </button>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 										<button id="js_complaint" title="投诉列表" contentAuthority="101" class="btn-warning js_complaint complaint btn btn-sm" style="background: #ffa500;border-color: #ffa500">*/
/*                                             <i class="fa fa-bookmark-o"></i>*/
/* 										</button>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 										<div id="filterBtns" style="display:inline-block;width:290px;height: 36px">*/
/* 											<a href="javascript:void(0);" class="myFilter" style="line-height:32px;*/
/* 											background: #E6E6E6;" data-kind="0"> 查看全部</a>*/
/* 											<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="1"> 我负责的</a>*/
/* 											<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="2"> 我关注的</a>*/
/* 											<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="3"> 我的下属</a>*/
/* 										</div>*/
/* 									</div>*/
/* */
/* 									<!--高级搜索-->*/
/* 									<div id="height_search1" class="col-sx-12" style="margin-top:30px;position: absolute; background: #fff; z-index: 1041;padding: 20px 10px; display: none;">*/
/* 										<div class="row">*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>年份</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 												</select>*/
/* 												<select style="width: 180px" gjs=5 sear="year" data-year="true"></select>*/
/* 											</div>*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>月份</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 												</select>*/
/* 												<select style="width: 180px" gjs=5 sear="month">*/
/* 													<option value=""> 请选择 </option>*/
/* 													<option value="01"> 1月 </option>*/
/* 													<option value="02"> 2月 </option>*/
/* 													<option value="03"> 3月 </option>*/
/* 													<option value="05"> 5月 </option>*/
/* 													<option value="04"> 4月 </option>*/
/* 													<option value="07"> 7月 </option>*/
/* 													<option value="06"> 6月 </option>*/
/* 													<option value="08"> 8月 </option>*/
/* 													<option value="09"> 9月 </option>*/
/* 													<option value="10"> 10月 </option>*/
/* 													<option value="11"> 11月 </option>*/
/* 													<option value="12"> 12月 </option>*/
/* 												</select>*/
/* 											</div>*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>企业名称</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 												</select>*/
/* 												<input type="text" gjs=0 sear="khm_customer.name" />*/
/* 											</div>*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>客户编码</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 												</select>*/
/* 												<input type="text" gjs=0 sear="khm_customer.id" />*/
/* 											</div>*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>仓位</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 												</select>*/
/* 												<select gjs=3 sear="ckm_position_num.pos_id" class="cw" data-type="gj" style="width:180px;">*/
/* 												</select>*/
/* 											</div>*/
/* */
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>服务周期</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 													<option> > </option>*/
/* 													<option> &lt; </option>*/
/* 												</select>*/
/* 												<select gjs=0 sear="htm_contract.payment_cycle" data-type="gj" style="width:180px;">*/
/* 													<option value=""> 请选择 </option>*/
/* 													<option value="1"> 每月</option>*/
/* 													<option value="3"> 季度 </option>*/
/* 													<option value="6"> 半年 </option>*/
/* 													<option value="12"> 一年 </option>*/
/* 												</select>*/
/* 											</div>*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>负责人</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 												</select>*/
/* 												<select style="margin-right: 12px !important;width: 180px" gjs="0" data-type="gj" sear="jzm_service_info.fuze_id" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 													<option value="">请选择</option>*/
/* 												</select>*/
/* */
/* 											</div>*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>收款情况</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 												</select>*/
/* 												<select gjs=0 sear="jzm_service_info.get_money" data-type="gj" style="width:180px;">*/
/* 													<option value=""> 请选择 </option>*/
/* 													<option value="0"> 已收款 </option>*/
/* 													<option value="1"> 未收款 </option>*/
/* 												</select>*/
/* 											</div>*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>审批状态</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 												</select>*/
/* 												<select gjs=0 sear="jzm_service_info.status" data-type="gj" style="width:180px;">*/
/* 													<option value=""> 请选择 </option>*/
/* 													<option value="0"> 未开始</option>*/
/* 													<option value="1"> 待审批</option>*/
/* 													<option value="2"> 已通过</option>*/
/* 													<option value="3"> 未通过</option>*/
/* 												</select>*/
/* 											</div>*/
/* 											<div class="col-sx-4" style="clear:both;padding-top:10px;text-align:center;">*/
/* 												<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/* 						                        查询*/
/* 						                    </button>*/
/* 												<button type="button" id="rest1" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 							                       重置*/
/* 							                    </button>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* */
/* 								<!-- 一般纳税人表格 -->*/
/* 								<div class="widget-body">*/
/* 									<div>*/
/* 										<div class="custom_table">*/
/* */
/* 											<table id="dynamic-table2">*/
/* 												<thead>*/
/* 													<tr class="thColor">*/
/* 														<th class="center">*/
/* 									                        <label class="pos-rel">*/
/* 									                        <input type="checkbox" name="check" class="ace" onclick="checkAll(this.checked)"/>*/
/* 									                        <span class="lbl"></span>*/
/* 									                        </label>*/
/* 									                    </th>*/
/* 														<th>操作</th>*/
/* 														*/
/* 														<th data-num="1">企业名称</th>*/
/* 														<th data-num="2">任务等级</th>*/
/* 														<th data-num="3">客户编码</th>*/
/* 														<th data-num="4">仓位编码</th>*/
/* 														<th data-num="5">服务周期</th>*/
/* 														<th data-num="6">逾期</th>*/
/* 														<th data-num="7">截止月份</th>*/
/* 														<th data-num="8">负责人</th>*/
/* 														<th data-num="9">基本户</th>*/
/* 														<th class="month" data-num="10" data-month></th>*/
/* 														<th class="month" data-num="11" data-month></th>*/
/* 														<th class="month" data-num="12" data-month></th>*/
/* 														<th class="month" data-num="13" data-month></th>*/
/* 														<th class="month" data-num="14" data-month></th>*/
/* 														<th class="month" data-num="15" data-month></th>*/
/* 														<th class="month" data-num="16" data-month></th>*/
/* 														<th class="month" data-num="17" data-month></th>*/
/* 														<th class="month" data-num="18" data-month></th>*/
/* 														<th class="month" data-num="19" data-month></th>*/
/* 														<th class="month" data-num="20" data-month></th>*/
/* 														<th class="month" data-num="21" data-month></th>*/
/* 														<!--<th>操作</th>-->*/
/* 													</tr>*/
/* 												</thead>*/
/* */
/* 												<tbody id="dataList1">*/
/* */
/* 												</tbody>*/
/* 											</table>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 							<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 								<div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
/* 								<div id="pageBar" class="pagination"></div>*/
/* 								<div align="right" style="float: right;  width: 10%;">*/
/* */
/* 									<select style="width: 100px;" id="changePageNum">*/
/* 										<option value="10">每页10条</option>*/
/* 										<option value="20">每页20条</option>*/
/* 										<option value="50">每页50条</option>*/
/* 										<option value="100">每页100条</option>*/
/* 										<option value="200">每页200条</option>*/
/* 									</select>*/
/* */
/* 								</div>*/
/* 							</div>*/
/* 							<!-- /.#member-tab -->*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- /.widget-main -->*/
/* 				</div>*/
/* 				<!-- /.widget-body -->*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- /.widget-box -->*/
/* 	</div>*/
/* 	<!-- /.col -->*/
/* </div>*/
/* */
/* <!-- 工资单 -->*/
/* */
/* <div id="payroll_table" style="display:none">*/
/* 	<div class="print_area">*/
/* 		<style media=print type="text/css">*/
/* 			.widget-header-small {*/
/* 				text-align: center;*/
/* 				border-bottom: 1px solid #000;*/
/* 				padding-bottom: 5px;*/
/* 			}*/
/* 			*/
/* 			#month {*/
/* 				float: right;*/
/* 			}*/
/* 			*/
/* 			.title {*/
/* 				font-size: 22px !important;*/
/* 				letter-spacing: 15px !important;*/
/* 			}*/
/* 			*/
/* 			table {*/
/* 				width: 100%;*/
/* 				border: 1px solid #000;*/
/* 				border-collapse: collapse;*/
/* 			}*/
/* 			*/
/* 			table thead tr {*/
/* 				height: 42px;*/
/* 			}*/
/* 			*/
/* 			td {*/
/* 				text-align: center;*/
/* 				border: 1px solid #000;*/
/* 				white-space: nowrap !important;*/
/* 				text-align: center;*/
/* 			}*/
/* 			*/
/* 			td {*/
/* 				height: 40px;*/
/* 				width: 12.5%;*/
/* 			}*/
/* 			*/
/* 			input {*/
/* 				border: none;*/
/* 				text-align: center;*/
/* 			}*/
/* 			*/
/* 			.creator {*/
/* 				display: table-row;*/
/* 			}*/
/* 		</style>*/
/* 		<div style="width: 100%;height: 35px; line-height: 35px">*/
/* 			<div id="wage_customer_name" class="no-print" style="float:left;color:bule;font-size: 14px">*/
/* 				企业名称：<span>深圳美睦</span>*/
/* 			</div>*/
/* 			<div id="month" class="no-print">*/
/* 				所属月份：*/
/* 				<select style="margin:0 10px 0 5px;">*/
/* 					<!--<option selected="selected">201602</option>-->*/
/* 				</select>*/
/* 			</div>*/
/* */
/* 			<div class="col-sx-4 no-print" style=" float: right;margin-top: 1px; margin-right: 15px;">*/
/* 				<button class="print btn btn-info btn-sm">*/
/* 		            打印*/
/* 		        </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4 no-print" style=" float: right;margin-top: 1px; margin-right: 15px;">*/
/* 				<button class="save btn btn-info btn-sm">*/
/* 		            保存*/
/* 		        </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4 no-print" style=" float: right;margin-top: 1px; margin-right: 15px;">*/
/* 				<button type="button" id="addItem" style="padding-left:21px;outline: none;" class="btn btn-info btn-sm position-relative">*/
/* 		            <i class="fa fa-plus"></i>*/
/* 		            添加*/
/* 		        </button>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<table class="table table-bordered">*/
/* 			<thead class="print_box" style="display: none;">*/
/* 				<tr class="thColor">*/
/* 					<td class="center" colspan="10" style="width: 100px!important;  letter-spacing: 10px;">工资表</td>*/
/* 				</tr>*/
/* 				<tr class="thColor">*/
/* 					<td colspan="4"  style="text-align: left;padding-left: 10px;" class="comtomName"></td>*/
/* 					<td colspan="4" style="text-align: right;padding-right: 10px;" class="year_month"></td>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<thead>*/
/* 				<tr class="thColor">*/
/* 					<td class="center">序号</td>*/
/* 					<td class="center" style="width: 100px!important">姓名</td>*/
/* 					<td class="center" style="width: 100px!important">基本工资</td>*/
/* 					<td class="center" style="width: 100px!important">出勤天数</td>*/
/* 					<td class="center" style="width: 100px!important">日工资</td>*/
/* 					<td class="center" style="width: 100px!important">社保</td>*/
/* 					<td class="center" style="width: 100px!important">总金额</td>*/
/* 					<td class="center" style="width: 100px!important">领款人签章</td>*/
/* 					<td class="center no-print">操作</td>*/
/* 				</tr>*/
/* 			</thead>*/
/* */
/* 			<tbody id="payrollList">*/
/* 				<!-- 工资单列表 -->*/
/* 			</tbody>*/
/* 			<tfoot id="itemsTotal">*/
/* 				<tr>*/
/* 					<td colspan="2">合计</td>*/
/* 					<td></td>*/
/* 					<td></td>*/
/* 					<td></td>*/
/* 					<td></td>*/
/* 					<td></td>*/
/* 					<td></td>*/
/* 					<td class="no-print"></td>*/
/* 				</tr>*/
/* 				<tr class="creator">*/
/* 					<td></td>*/
/* 					<td>制表：</td>*/
/* 					<td></td>*/
/* 					<td></td>*/
/* 					<td></td>*/
/* 					<td></td>*/
/* 					<td>审核：</td>*/
/* 					<td></td>*/
/* 				</tr>*/
/* 			</tfoot>*/
/* 		</table>*/
/* 		<p class="remark" style="padding:5px 0;color:#888;">备注：</p>*/
/* 		<p class="remark" style="color:#888;">*/
/* 			<span style="padding:0 30px 0 0;">日工资 = 基本工资 / 天数（默认为24天）</span>*/
/* 			<span>总金额 = 总工资 - 社保</span>*/
/* 		</p>*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- 查看投诉列表 -->*/
/* */
/* <div id="complaint_list" style="display:none">*/
/* */
/* 	<table class="table table-bordered" id="bordered" style="margin-top: 20px;">*/
/* 		<thead>*/
/* 			<tr class="thColor">*/
/* 				*/
/* 				<th class="center">企业名称</th>*/
/* 				<th class="center">客户姓名</th>*/
/* 				<th class="center">联系电话</th>*/
/* 				<th class="center">时间</th>*/
/* 				<th class="center">内容</th>*/
/* 				<th class="center">备注</th>*/
/* 				<th class="center">负责人</th>*/
/* 				<th class="center">解决状态</th>*/
/* 				<th class="center">解决备注</th>*/
/* 				<th class="center">创建人</th>*/
/* 				<th class="center">创建时间</th>*/
/* 				<th class="center">审批人</th>*/
/* 				<th class="center">审批时间</th>*/
/* 				<th class="center">审批结果</th>*/
/* 				<th class="center">审批回复</th>*/
/* 				<th class="center">操作</th>*/
/* 			</tr>*/
/* 		</thead>*/
/* */
/* 		<tbody id="complaint_datalist">*/
/* */
/* 		</tbody>*/
/* 	</table>*/
/* 	<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 		<div align="left" style="padding-left: 15px; float: left; width: 10%;" class="_num"></div>*/
/* 		<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 		<div class="pageBar pagination"></div>*/
/* 		<!-- <div align="right" style="float: right;  width: 10%;">*/
/* 			<select style="width: 100px;" id="selectChoice">*/
/* 				<option value="10">每页10条</option>*/
/* 				<option value="20">每页20条</option>*/
/* 				<option value="50">每页50条</option>*/
/* 				<option value="100">每页100条</option>*/
/* 				<option value="200">每页200条</option>*/
/* 			</select>*/
/* 		</div> -->*/
/* 	</div>*/
/* </div>*/
/* */
/* <!--添加投诉建议界面-->*/
/* <div class="row" id="complaint_advice_table" style="display:none;">*/
/* 	<div style="margin-top:15px;">*/
/* 		<label> 企业名称： </label>*/
/* 		<input class="required" style="width:180px;" title_="name" />*/
/* 		<label> 客户姓名： </label>*/
/* 		<select class="required" style="width: 180px" title_="customer_name">*/
/* 			<option value=""> 请选择联系人 </option>*/
/* 		</select>*/
/* 	</div>*/
/* */
/* 	<div style="margin-top:15px;">*/
/* 		<label> 联系电话： </label>*/
/* 		<input class="introducer required" style="width:180px;" title_="customer_tel">*/
/* 		<label class="introducer ">客户类型：</label>*/
/* 		<select style="width:180px;" class="required" title_="type">*/
/* 			<option value=""> 请选择 </option>*/
/* 			<option value="1">投诉</option>*/
/* 			<option value="2">意见</option>*/
/* 		</select>*/
/* 	</div>*/
/* */
/* 	<div style="margin-top:15px;">*/
/* 		<label> 时间：</label>*/
/* 		<input id="date-timepicker1" style="width:180px;" title_="time" />*/
/* 		<label> 内容： </label>*/
/* 		<input title_="content" style="width:180px;" />*/
/* 	</div>*/
/* */
/* 	<div style="margin-top:15px;">*/
/* 		<label> 负责人:</label>*/
/* 		<select title_="duto" style="width:180px;">*/
/* 			<option value=""> 请选择 </option>*/
/* 		</select>*/
/* 		<label> 解决状态：</label>*/
/* 		<select style="width:180px;" class="required" title_="status">*/
/* 			<option value=""> 请选择 </option>*/
/* 			<option value="0">未解决</option>*/
/* 			<option value="1">已解决</option>*/
/* 			<option value="2">解决中</option>*/
/* 		</select>*/
/* 	</div>*/
/* */
/* 	<div style="margin-top:15px; ">*/
/* 		<label style="float:left;"> 备注:</label>*/
/* 		<textarea title_="remark" style="width:calc(100% - 132px);margin-left:5px;resize:none;" class="in_remark"></textarea>*/
/* 	</div>*/
/* */
/* 	<div style="text-align:center;margin-top:15px;">*/
/* 		<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* */
/* 		<button class="sure_button addcomplaint">*/
/*                         <i class="fa fa-check" aria-hidden="true"></i>*/
/*                         保存*/
/*                     </button>*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- <div id="template" style="display:none;">*/
/* 	<div class="row">*/
/* 		<div class="col-sm-12" style="margin-top: 50px;">*/
/* 			<table id="dynamic-table" class="table table-striped table-bordered table-hover" style="margin-bottom:0px;">*/
/* 				<thead>   */
/* 						<th class="center">客户姓名</th>*/
/* 						<th class="hidden-480 center ">类型</th>*/
/* 						<th class="hidden-480 center">时间</th>*/
/* 						<th class="hidden-480 center">内容</th>*/
/* 						<th class="hidden-480 center">负责人</th>*/
/* 						<th class="hidden-480 center">创建人</th>*/
/* 						<th class="hidden-480 center">创建时间</th>*/
/* 					</tr>*/
/* */
/* 				<tbody>*/
/* 					<tr>*/
/* 						<td class="center">*/
/* 							<input type="text" id="form-field-1" placeholder=" " class="col-xs-12 col-sm-12">*/
/* 						</td>*/
/* 						<td class="center">*/
/* 							<input type="text" id="form-field-1" placeholder=" " class="col-xs-12 col-sm-12">*/
/* 						</td>*/
/* 						<td class="center">*/
/* 							<input type="text" id="form-field-1" placeholder=" " class="col-xs-12 col-sm-12">*/
/* 						</td>*/
/* 						<td class="center">*/
/* 							<input type="text" id="form-field-1" placeholder=" " class="col-xs-12 col-sm-12">*/
/* 						</td>*/
/* */
/* 						<td class="center">*/
/* 							<input type="text" id="form-field-1" placeholder=" " class="col-xs-12 col-sm-12">*/
/* 						</td>*/
/* 						<td class="center">*/
/* 							<input type="text" id="form-field-1" placeholder=" " class="col-xs-12 col-sm-12">*/
/* 						</td>*/
/* */
/* 						<td class="center">*/
/* 							<input type="text" id="form-field-1" placeholder=" " class="col-xs-12 col-sm-12">*/
/* 						</td>*/
/* 						<td>*/
/* 							<input type="text" id="form-field-1" placeholder=" " class="col-xs-12 col-sm-12">*/
/* 						</td>*/
/* 						<td class="center">*/
/* 							<input type="text" id="form-field-1" placeholder=" " class="col-xs-12 col-sm-12">*/
/* 						</td>*/
/* 					</tr>*/
/* 				</tbody>*/
/* */
/* 			</table>*/
/* 			<div class="btn-group pull-right" style="margin-top: 15px;;">*/
/* 				<button class="btn btn-info" id="add">*/
/*                         	保存*/
/*                     </button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div> -->*/
/* */
/* <!--销项采集，进项采集-->*/
/* <div id="addList" class="widget-box transparent" id="recent-box" style="display:none ;">*/
/* 	<div>*/
/* 		<div style="padding:10px;">*/
/* 			<h3 style="font-size:16px;">销项采集</h3>*/
/* 		</div>*/
/* 		<div>*/
/* 			<div class="layui-collapse">*/
/* 				<div class="layui-colla-item">*/
/* 					<h2 class="layui-colla-title">增值税专用发票</h2>*/
/* 					<div class="layui-colla-content">*/
/* 						<div class="custom_table">*/
/* 							<table>*/
/* 								<thead>*/
/* 									<tr>*/
/* 										<th><label class="increase" style="font-size:20px;cursor:pointer;">+</label></th>*/
/* 										<th>份数</th>*/
/* 										<th>金额</th>*/
/* 										<th>税率</th>*/
/* 										<th>税额</th>*/
/* 										<th>计税方式</th>*/
/* 										<th>征税项目</th>*/
/* 										<th>是否作废</th>*/
/* 										<th>是否即征即退</th>*/
/* 									</tr>*/
/* 								</thead>*/
/* 								<tbody id="x1">*/
/* 									<tr style="display:none;" class="model">*/
/* 										<td><label class="decrease" style="font-size:20px;cursor:pointer;">-</label></td>*/
/* 										<td>*/
/* 											<input type="number" field="invoice" />*/
/* 										</td>*/
/* 										<td>*/
/* 											<input type="number" field="money" />*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="tax_rate">*/
/* 												<option value="0">0</option>*/
/* 												<option value="3">3%</option>*/
/* 												<option value="4">4%</option>*/
/* 												<option value="5">5%</option>*/
/* 												<option value="6">6%</option>*/
/* 												<option value="11">11%</option>*/
/* 												<option value="13">13%</option>*/
/* 												<option value="17">17%</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<input type="number" field="amount_of_tax" />*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="charge_mode">*/
/* 												<option value="1">一般计税</option>*/
/* 												<option value="2">简易征税</option>*/
/* 												<option value="3">免税</option>*/
/* 												<option value="4">免抵退</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="tax_project">*/
/* 												<option value="1">应税货物</option>*/
/* 												<option value="2">应税劳务</option>*/
/* 												<option value="3">应税服务不动产</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="is_invalid">*/
/* 												<option value="1">已作废</option>*/
/* 												<option value="0" selected>未作废</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="whether_tax">*/
/* 												<option value="1">是</option>*/
/* 												<option value="0" selected>否</option>*/
/* 											</select>*/
/* 										</td>*/
/* 									</tr>*/
/* 								</tbody>*/
/* 								<tfoot>*/
/* 									<tr>*/
/* 										<td>总计</td>*/
/* 										<td total="invoice"></td>*/
/* 										<td total="money"></td>*/
/* 										<td></td>*/
/* 										<td total="amount_of_tax"></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 									</tr>*/
/* 								</tfoot>*/
/* 							</table>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="layui-colla-item">*/
/* 					<h2 class="layui-colla-title">税控机动车专用发票</h2>*/
/* 					<div class="layui-colla-content">*/
/* 						<div class="custom_table">*/
/* 							<table>*/
/* 								<thead>*/
/* 									<tr>*/
/* 										<th><label class="increase" style="font-size:20px;cursor:pointer;">+</label></th>*/
/* 										<th>份数</th>*/
/* 										<th>金额</th>*/
/* 										<th>税率</th>*/
/* 										<th>税额</th>*/
/* 										<th>计税方式</th>*/
/* 										<th>征税项目</th>*/
/* 										<th>是否作废</th>*/
/* 										<th>是否即征即退</th>*/
/* 									</tr>*/
/* 								</thead>*/
/* 								<tbody id="x2">*/
/* 									<tr style="display:none;" class="model">*/
/* 										<td><label class="decrease" style="font-size:20px;cursor:pointer;">-</label></td>*/
/* 										<td>*/
/* 											<input type="number" field="invoice" />*/
/* 										</td>*/
/* 										<td>*/
/* 											<input type="number" field="money" />*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="tax_rate">*/
/* 												<option value="0">0</option>*/
/* 												<option value="3">3%</option>*/
/* 												<option value="4">4%</option>*/
/* 												<option value="5">5%</option>*/
/* 												<option value="6">6%</option>*/
/* 												<option value="11">11%</option>*/
/* 												<option value="13">13%</option>*/
/* 												<option value="17">17%</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<input type="number" field="amount_of_tax"  />*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="charge_mode">*/
/* 												<option value="1">一般计税</option>*/
/* 												<option value="2">简易征税</option>*/
/* 												<option value="3">免税</option>*/
/* 												<option value="4">免抵退</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="tax_project">*/
/* 												<option value="1">应税货物</option>*/
/* 												<option value="2">应税劳务</option>*/
/* 												<option value="3">应税服务不动产</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="is_invalid">*/
/* 												<option value="1">已作废</option>*/
/* 												<option value="0" selected>未作废</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="whether_tax">*/
/* 												<option value="1">是</option>*/
/* 												<option value="0" selected>否</option>*/
/* 											</select>*/
/* 										</td>*/
/* 									</tr>*/
/* 								</tbody>*/
/* 								<tfoot>*/
/* 									<tr>*/
/* 										<td>总计</td>*/
/* 										<td total="invoice"></td>*/
/* 										<td total="money"></td>*/
/* 										<td></td>*/
/* 										<td total="amount_of_tax"></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 									</tr>*/
/* 								</tfoot>*/
/* 							</table>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="layui-colla-item">*/
/* 					<h2 class="layui-colla-title">普通发票</h2>*/
/* 					<div class="layui-colla-content">*/
/* 						<div class="custom_table">*/
/* 							<table>*/
/* 								<thead>*/
/* 									<tr>*/
/* 										<th><label class="increase" style="font-size:20px;cursor:pointer;">+</label></th>*/
/* 										<th>份数</th>*/
/* 										<th>金额</th>*/
/* 										<th>税率</th>*/
/* 										<th>税额</th>*/
/* 										<th>计税方式</th>*/
/* 										<th>征税项目</th>*/
/* 										<th>是否作废</th>*/
/* 										<th>是否即征即退</th>*/
/* 									</tr>*/
/* 								</thead>*/
/* 								<tbody id="x3">*/
/* 									<tr style="display:none;" class="model">*/
/* 										<td><label class="decrease" style="font-size:20px;cursor:pointer;">-</label></td>*/
/* 										<td>*/
/* 											<input type="number" field="invoice" />*/
/* 										</td>*/
/* 										<td>*/
/* 											<input type="number" field="money" />*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="tax_rate">*/
/* 												<option value="0">0</option>*/
/* 												<option value="3">3%</option>*/
/* 												<option value="4">4%</option>*/
/* 												<option value="5">5%</option>*/
/* 												<option value="6">6%</option>*/
/* 												<option value="11">11%</option>*/
/* 												<option value="13">13%</option>*/
/* 												<option value="17">17%</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<input type="number" field="amount_of_tax"  />*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="charge_mode">*/
/* 												<option value="1">一般计税</option>*/
/* 												<option value="2">简易征税</option>*/
/* 												<option value="3">免税</option>*/
/* 												<option value="4">免抵退</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="tax_project">*/
/* 												<option value="1">应税货物</option>*/
/* 												<option value="2">应税劳务</option>*/
/* 												<option value="3">应税服务不动产</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="is_invalid">*/
/* 												<option value="1">已作废</option>*/
/* 												<option value="0" selected>未作废</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="whether_tax">*/
/* 												<option value="1">是</option>*/
/* 												<option value="0" selected>否</option>*/
/* 											</select>*/
/* 										</td>*/
/* 									</tr>*/
/* 								</tbody>*/
/* 								<tfoot>*/
/* 									<tr>*/
/* 										<td>总计</td>*/
/* 										<td total="invoice"></td>*/
/* 										<td total="money"></td>*/
/* 										<td></td>*/
/* 										<td total="amount_of_tax"></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 									</tr>*/
/* 								</tfoot>*/
/* 							</table>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="layui-colla-item">*/
/* 					<h2 class="layui-colla-title">未开具发票</h2>*/
/* 					<div class="layui-colla-content">*/
/* 						<div class="custom_table">*/
/* 							<table>*/
/* 								<thead>*/
/* 									<tr>*/
/* 										<th><label class="increase" style="font-size:20px;cursor:pointer;">+</label></th>*/
/* 										<th>业务类型</th>*/
/* 										<th>金额</th>*/
/* 										<th>税率</th>*/
/* 										<th>税额</th>*/
/* 										<th>计税方式</th>*/
/* 										<th>征税项目</th>*/
/* 										<th>是否作废</th>*/
/* 										<th>是否即征即退</th>*/
/* 										<th>税款所属期</th>*/
/* 									</tr>*/
/* 								</thead>*/
/* 								<tbody id="x4">*/
/* 									<tr style="display:none;" class="model">*/
/* 										<td><label class="decrease" style="font-size:20px;cursor:pointer;">-</label></td>*/
/* 										<td>*/
/* 											<select field="type">*/
/* 												<option value="">请选择</option>*/
/* 												<option value="1" selected="selected">无票视同销售</option>*/
/* 												<option value="2">增值税专用发票</option>*/
/* 												<option value="3">增值税普通发票</option>*/
/* 												<!--<option value="4">注册商标</option>*/
/* 												<option value="5">注销公司</option>*/
/* 												<option value="6">申请一般纳税人</option>*/
/* 												<option value="7">记账报税</option>-->*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<input type="number" field="money" />*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="tax_rate">*/
/* 												<option value="0">0</option>*/
/* 												<option value="3">3%</option>*/
/* 												<option value="4">4%</option>*/
/* 												<option value="5">5%</option>*/
/* 												<option value="6">6%</option>*/
/* 												<option value="11">11%</option>*/
/* 												<option value="13">13%</option>*/
/* 												<option value="17">17%</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<input type="number" field="amount_of_tax"  />*/
/* 										</td>*/
/* */
/* 										<td>*/
/* 											<select field="charge_mode">*/
/* 												<option value="1">一般计税</option>*/
/* 												<option value="2">简易征税</option>*/
/* 												<option value="3">免税</option>*/
/* 												<option value="4">免抵退</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="tax_project">*/
/* 												<option value="1">应税货物</option>*/
/* 												<option value="2">应税劳务</option>*/
/* 												<option value="3">应税服务不动产</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="is_invalid">*/
/* 												<option value="1">已作废</option>*/
/* 												<option value="0" selected>未作废</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="whether_tax">*/
/* 												<option value="1">是</option>*/
/* 												<option value="0" selected>否</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<!--<input type="text" field="tax_money_period" />-->*/
/* 											<select field="tax_money_period" style="width:180px" class="tax_money_period">*/
/* 											</select>*/
/* 										</td>*/
/* 									</tr>*/
/* 								</tbody>*/
/* 								<tfoot>*/
/* 									<tr>*/
/* 										<td>总计</td>*/
/* 										<td></td>*/
/* 										<td total="money"></td>*/
/* 										<td></td>*/
/* 										<td total="amount_of_tax"></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 									</tr>*/
/* 								</tfoot>*/
/* 							</table>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="layui-colla-item">*/
/* 					<h2 class="layui-colla-title">纳税检查调整</h2>*/
/* 					<div class="layui-colla-content">*/
/* 						<div class="custom_table">*/
/* 							<table>*/
/* 								<thead>*/
/* 									<tr>*/
/* 										<th><label class="increase" style="font-size:20px;cursor:pointer;">+</label></th>*/
/* 										<th>业务类型</th>*/
/* 										<th>金额</th>*/
/* 										<th>税率</th>*/
/* 										<th>税额</th>*/
/* 										<th>计税方式</th>*/
/* 										<th>征税项目</th>*/
/* 										<th>是否作废</th>*/
/* 										<th>是否即征即退</th>*/
/* 										<th>税款所属期</th>*/
/* 									</tr>*/
/* 								</thead>*/
/* 								<tbody id="x5">*/
/* 									<tr style="display:none;" class="model">*/
/* 										<td><label class="decrease" style="font-size:20px;cursor:pointer;">-</label></td>*/
/* 										<td>*/
/* 											<select field="type">*/
/* 												<option value="">请选择</option>*/
/* 												<option value="1">无票视同销售</option>*/
/* 												<option value="2">增值税专用发票</option>*/
/* 												<option value="3">增值税普通发票</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<input type="number" field="money" />*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="tax_rate">*/
/* 												<option value="0">0</option>*/
/* 												<option value="3">3%</option>*/
/* 												<option value="4">4%</option>*/
/* 												<option value="5">5%</option>*/
/* 												<option value="6">6%</option>*/
/* 												<option value="11">11%</option>*/
/* 												<option value="13">13%</option>*/
/* 												<option value="17">17%</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<input type="number" field="amount_of_tax"  />*/
/* 										</td>*/
/* */
/* 										<td>*/
/* 											<select field="charge_mode">*/
/* 												<option value="1">一般计税</option>*/
/* 												<option value="2">简易征税</option>*/
/* 												<option value="3">免税</option>*/
/* 												<option value="4">免抵退</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="tax_project">*/
/* 												<option value="1">应税货物</option>*/
/* 												<option value="2">应税劳务</option>*/
/* 												<option value="3">应税服务不动产</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="is_invalid">*/
/* 												<option value="1">已作废</option>*/
/* 												<option value="0" selected>未作废</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="whether_tax">*/
/* 												<option value="1">是</option>*/
/* 												<option value="0" selected>否</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="tax_money_period" style="width:80px" class="tax_money_period">*/
/* 											</select>*/
/* 											<!--<input field="tax_money_period" type="text" />-->*/
/* 										</td>*/
/* 									</tr>*/
/* 								</tbody>*/
/* 								<tfoot>*/
/* 									<tr>*/
/* 										<td>总计</td>*/
/* 										<td></td>*/
/* 										<td total="money"></td>*/
/* 										<td></td>*/
/* 										<td total="amount_of_tax"></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 									</tr>*/
/* 								</tfoot>*/
/* 							</table>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="layui-colla-item">*/
/* 					<h2 class="layui-colla-title">地税开具其他发票及未开票销售额</h2>*/
/* 					<div class="layui-colla-content">*/
/* 						<div class="custom_table">*/
/* 							<table>*/
/* 								<thead>*/
/* 									<tr>*/
/* 										<th><label class="increase" style="font-size:20px;cursor:pointer;">+</label></th>*/
/* 										<th>份数</th>*/
/* 										<th>业务类型</th>*/
/* 										<th>金额</th>*/
/* 										<th>税率</th>*/
/* 										<th>税额</th>*/
/* 										<th>计税方式</th>*/
/* 										<th>征税项目</th>*/
/* 										<th>是否作废</th>*/
/* 										<th>是否即征即退</th>*/
/* 										<th>税款所属期</th>*/
/* 									</tr>*/
/* 								</thead>*/
/* 								<tbody id="x6">*/
/* 									<tr style="display:none;" class="model">*/
/* 										<td><label class="decrease" style="font-size:20px;cursor:pointer;">-</label></td>*/
/* 										<td>*/
/* 											<input type="number" field="invoice" />*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="type">*/
/* 												<option value="">请选择</option>*/
/* 												<option value="1">无票视同销售</option>*/
/* 												<option value="2">增值税专用发票</option>*/
/* 												<option value="3">增值税普通发票</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<input field="money" type="number" />*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="tax_rate">*/
/* 												<option value="0">0</option>*/
/* 												<option value="3">3%</option>*/
/* 												<option value="4">4%</option>*/
/* 												<option value="5">5%</option>*/
/* 												<option value="6">6%</option>*/
/* 												<option value="11">11%</option>*/
/* 												<option value="13">13%</option>*/
/* 												<option value="17">17%</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<input field="amount_of_tax" type="number"  />*/
/* 										</td>*/
/* */
/* 										<td>*/
/* 											<select field="charge_mode">*/
/* 												<option value="1">一般计税</option>*/
/* 												<option value="2">简易征税</option>*/
/* 												<option value="3">免税</option>*/
/* 												<option value="4">免抵退</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="tax_project">*/
/* 												<option value="1">应税货物</option>*/
/* 												<option value="2">应税劳务</option>*/
/* 												<option value="3">应税服务不动产</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="is_invalid">*/
/* 												<option value="1">已作废</option>*/
/* 												<option value="0" selected>未作废</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="whether_tax">*/
/* 												<option value="1">是</option>*/
/* 												<option value="0" selected>否</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<!--//<input field="tax_money_period" type="text" />-->*/
/* 											<select field="tax_money_period" style="width:80px" class="tax_money_period">*/
/* 											</select>*/
/* 										</td>*/
/* 									</tr>*/
/* 								</tbody>*/
/* 								<tfoot>*/
/* 									<tr>*/
/* 										<td>总计</td>*/
/* 										<td total="invoice"></td>*/
/* 										<td></td>*/
/* 										<td total="money"></td>*/
/* 										<td></td>*/
/* 										<td total="amount_of_tax"></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 									</tr>*/
/* 								</tfoot>*/
/* 							</table>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div style="display:none;" class="jxcj">*/
/* 		<div style="padding:10px 0;">*/
/* 			<h3 style="font-size:16px;">进项采集</h3>*/
/* 		</div>*/
/* 		<div>*/
/* 			<div class="layui-collapse">*/
/* 				<div class="layui-colla-item">*/
/* 					<h2 class="layui-colla-title">增值税专用发票</h2>*/
/* 					<div class="layui-colla-content">*/
/* 						<div class="custom_table" style="overflow:visible;">*/
/* 							<table>*/
/* 								<thead>*/
/* 									<tr>*/
/* 										<th><label class="increase" style="font-size:20px;cursor:pointer;">+</label></th>*/
/* 										<th>份数</th>*/
/* 										<th>金额</th>*/
/* 										<th>税率</th>*/
/* 										<th>税额</th>*/
/* 										<th>是否即征即退</th>*/
/* 										<th>是否抵扣</th>*/
/* 										<th>申报所属期</th>*/
/* 										<th>认证日期</th>*/
/* 									</tr>*/
/* 								</thead>*/
/* 								<tbody id="j1">*/
/* 									<tr class="model" style="display:none;">*/
/* 										<td><label class="decrease" style="font-size:20px;cursor:pointer;">-</label></td>*/
/* 										<td>*/
/* 											<input field="invoice" type="number" />*/
/* 										</td>*/
/* 										<td>*/
/* 											<input field="money" type="number" />*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="tax_rate">*/
/* 												<option value="0">0</option>*/
/* 												<option value="3">3%</option>*/
/* 												<option value="4">4%</option>*/
/* 												<option value="5">5%</option>*/
/* 												<option value="6">6%</option>*/
/* 												<option value="11">11%</option>*/
/* 												<option value="13">13%</option>*/
/* 												<option value="17">17%</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<input field="amount_of_tax" type="number"  />*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="whether_tax">*/
/* 												<option value="1">是</option>*/
/* 												<option value="0" selected>否</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="deductible">*/
/* 												<option value="1">是</option>*/
/* 												<option value="0">否</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<!--//<input field="tax_money_period" type="text" />-->*/
/* 											<select field="tax_money_period" style="width:180px" class="tax_money_period">*/
/* 											</select>*/
/* 											<!--<input field="declare_period" type="number" />-->*/
/* 										</td>*/
/* 										<td>*/
/* 											<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 												<input class="date-timepicker1" field="auth_time" style="height: 30px; width: 150px;">*/
/* 												<span class="input-group-addon" style="width:30px;height:30px;">*/
/* 						                            <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 						                        </span>*/
/* 											</div>*/
/* 										</td>*/
/* 									</tr>*/
/* 								</tbody>*/
/* 								<tfoot>*/
/* 									<tr>*/
/* 										<td>总计</td>*/
/* 										<td total="invoice"></td>*/
/* 										<td total="money"></td>*/
/* 										<td></td>*/
/* 										<td total="amount_of_tax"></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 									</tr>*/
/* 								</tfoot>*/
/* 							</table>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="layui-colla-item">*/
/* 					<h2 class="layui-colla-title">税控机动车发票</h2>*/
/* 					<div class="layui-colla-content">*/
/* 						<div class="custom_table">*/
/* 							<table>*/
/* 								<thead>*/
/* 									<tr>*/
/* 										<th><label class="increase" style="font-size:20px;cursor:pointer;">+</label></th>*/
/* 										<th>份数</th>*/
/* 										<th>金额</th>*/
/* 										<th>税率</th>*/
/* 										<th>税额</th>*/
/* 										<th>是否即征即退</th>*/
/* 										<th>是否抵扣</th>*/
/* 									</tr>*/
/* 								</thead>*/
/* 								<tbody id="j2">*/
/* 									<tr class="model"  style="display:none;">*/
/* 										<td><label class="decrease" style="font-size:20px;cursor:pointer;">-</label></td>*/
/* 										<td>*/
/* 											<input field="invoice" type="number" />*/
/* 										</td>*/
/* 										<td>*/
/* 											<input field="money" type="number" />*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="tax_rate">*/
/* 												<option value="0">0</option>*/
/* 												<option value="3">3%</option>*/
/* 												<option value="4">4%</option>*/
/* 												<option value="5">5%</option>*/
/* 												<option value="6">6%</option>*/
/* 												<option value="11">11%</option>*/
/* 												<option value="13">13%</option>*/
/* 												<option value="17">17%</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<input field="amount_of_tax" type="number"  />*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="whether_tax">*/
/* 												<option value="1">是</option>*/
/* 												<option value="0" selected>否</option>*/
/* 											</select>*/
/* 										</td>*/
/* 										<td>*/
/* 											<select field="deductible">*/
/* 												<option value="1">是</option>*/
/* 												<option value="0">否</option>*/
/* 											</select>*/
/* 										</td>*/
/* 									</tr>*/
/* 								</tbody>*/
/* 								<tfoot>*/
/* 									<tr>*/
/* 										<td>总计</td>*/
/* 										<td total="invoice"></td>*/
/* 										<td total="money"></td>*/
/* 										<td></td>*/
/* 										<td total="amount_of_tax"></td>*/
/* 										<td></td>*/
/* 										<td></td>*/
/* 									</tr>*/
/* 								</tfoot>*/
/* 							</table>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	 <div id="sendMsg" customer_id="" style="height: 30px;line-height: 40px">*/
/* 		<label style="margin-left:-40px" >是否发送短信：</label>*/
/* 		<input type="radio" value="1" name="is_send" >是*/
/* 		<input type="radio" value="2" name="is_send" checked="true">否*/
/* 	</div>*/
/* 	<div style="text-align:right;margin-top:15px;">*/
/* 		<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* 		<button class="close_get btn btn-info btn-sm">*/
/* 					关闭*/
/* 				</button>*/
/* 		<button class="sure_button addcomplaint btn btn-info btn-sm">*/
/*                 保存*/
/*             </button>*/
/* 		<button class="sure_button addcomplaint btn btn-info btn-sm">*/
/*                 无数据保存*/
/*             </button>*/
/* 	</div>*/
/* </div>*/
/* <!--测试-->*/
/* <div class="label_popup" id="export" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 	<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 				            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 		<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 			<span style="display: inline-block;">导入客服</span>*/
/* 			<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 		</div>*/
/* 		<div style="padding: 10px 50px;">*/
/* 			<input type="file" width="200px" style="margin: auto;" id="efile" />*/
/* 			<!--<hr>-->*/
/* 		</div>*/
/* 		<div style="padding:15px;text-align:right;">*/
/* 			<button id="ghItem" class=" btn">客服模板</button>*/
/* 			<button class="btn btn-info  submit" style="padding: 6px; border-radius: 0px;">保存</button>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% include 'admin/mark.html' %} {% include 'admin/customerDetail.html' %}*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/assets/js/jQuery.print.js"></script>*/
/* <script src="/resource/adimin/components/_mod/easypiechart/jquery.easypiechart.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* <!-- inline scripts related to this page -->*/
/* <script type="text/javascript">*/
/* 	jQuery.fn.dataTableExt.oSort['string-case-asc'] = function(x, y) {*/
/* 		return((x < y) ? -1 : ((x > y) ? 1 : 0));*/
/* 	};*/
/* */
/* 	jQuery.fn.dataTableExt.oSort['string-case-desc'] = function(x, y) {*/
/* 		return((x < y) ? 1 : ((x > y) ? -1 : 0));*/
/* 	};*/
/* */
/* 	jQuery(function($) {*/
/* 		cs.getNodes([98, 289]);*/
/* 		var ftype = 2;*/
/* 		var curPage = 1;*/
/* 		var pagesize = 10;*/
/* 		var employees = {};*/
/* 		var order = 'jzm_service_info.id desc';*/
/* 		var where = '';*/
/* 		var month2 = "";*/
/* 		var param = {*/
/* 			aid: ykp.getCookie('aid'),*/
/* 			time: ykp.getCookie("time"),*/
/* 			timestamp: '',*/
/* 			flag: false*/
/* 		};*/
/* 		var filter = "";*/
/* 		var num = 0;*/
/* 		var hMonth = [];*/
/* 		hMonth = hMonth = cs.last_year_month();*/
/* 		tpage();*/
/* 		//跳转页面接收*/
/* 		function tpage() {*/
/* 			if(param.time != "" && param.time != undefined) {*/
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
/* 						param.timestamp = `jzm_service_info.com_time>${today}`;*/
/* 						break;*/
/* 					case '2':*/
/* 						param.timestamp = `jzm_service_info.com_time<${today} and jzm_service_info.com_time>${today-86400}`*/
/* 						break;*/
/* 					case '3':*/
/* 						param.timestamp = `jzm_service_info.com_time>${today-86400*6}`;*/
/* 						break;*/
/* 					case '4':*/
/* 						param.timestamp = `jzm_service_info.com_time>${today-86400*29}`;*/
/* 						break;*/
/* 					case '5':*/
/* 						param.timestamp = `jzm_service_info.com_time>${today-86400*day_1}`;*/
/* 						break;*/
/* 					case '6':*/
/* 						param.timestamp = `jzm_service_info.com_time<${today-86400*day_1} and  jzm_service_info.com_time>${newdaytime}`;*/
/* 						break;*/
/* 				}*/
/* 				var data = {*/
/* 					"type": 4,*/
/* 					"page": curPage,*/
/* 					"page_size": pagesize,*/
/* 					"where": `${param.timestamp}`*/
/* 				}*/
/* 				if(param.aid != '' || param.aid != undefined) {*/
/* 					data['staff_name'] = param.aid;*/
/* 					param.flag = true;*/
/* 				}*/
/* 				//先拿到所有数据*/
/* 				getAccountList_3(data);*/
/* 				ykp.setCookie("aid", "", (1 / 24));*/
/* 				ykp.setCookie("time", "", (1 / 24));*/
/* 				//首页上方跳过来*/
/* 			} else if(ykp.getCookie('titleTask') && ykp.getCookie('titleTask') != '') {*/
/* 				var data = {*/
/* 					"type": 4,*/
/* 					"page": curPage,*/
/* 					"page_size": pagesize,*/
/* 					"where": `jzm_service_info.overdue > 0`*/
/* 				}*/
/* 				if(ykp.getCookie('titleTask') == 8) {*/
/* 					var thisMonth = cs.getNowTime(new Date().setHours(0, 0, 0, 0) / 1000).substring(0, 7).replace('-', '');*/
/* 					delete(data['where']);*/
/* 					data['month2'] = thisMonth;*/
/* 					data['month1'] = thisMonth;*/
/* 				}*/
/* 				getAccountList_3(data);*/
/* 				ykp.setCookie("titleTask", "", (1 / 24));*/
/* 				//详情页跳过来*/
/* 			} else if(ykp.getCookie('detailsId') != undefined && ykp.getCookie('detailsId') != '') {*/
/* 				var id = ykp.getCookie('detailsId');*/
/* 				var data = {*/
/* 					"type": 4,*/
/* 					"page": curPage,*/
/* 					"page_size": pagesize,*/
/* 					"where": 'htm_contract.id=' + id*/
/* 				}*/
/* 				getAccountList_4(data);*/
/* 				ykp.setCookie("detailsId", '', (1 / 24));*/
/* 			} else {*/
/* 				//获取列表数据*/
/* 				ykp.setCookie("filter", "");*/
/* 				ykp.setCookie("where", "");*/
/* 				where = filter = '';*/
/* 				getAccountList(1, ftype);*/
/* 			}*/
/* 		}*/
/* */
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_service/service_list',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: where,*/
/* 				limit: pagesize,*/
/* 				type: 4*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '#pageBar'*/
/* 			},*/
/* 			check: true,*/
/* 			initOrder: 'khm_customer.id',*/
/* 			defaultOrder: order,*/
/* 			contentId: ftype == 2 ? "#dataList" : "#dataList1",*/
/* 			params: [{*/
/* 				id: ftype == 2 ? "#dynamic-table1" : "#dynamic-table2",*/
/* 				field: ["","", "khm_customer.name", "maxLv", "customer_num", "pos_name",*/
/* 					"htm_contract.payment_cycle", "", "","jzm_service_info.fuze_id"*/
/* 				]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res, ftype);*/
/* 		});*/
/* 		$('.flush').click(function() {*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			where = filter = '';*/
/* 			$('[sear="customer_name"]').val('');*/
/* 			$('[sear="khm_customer.customer_num"]').val('');*/
/* 			$('[sear="jzm_service_info.fuze_id"]').val('').trigger('change');*/
/* 			getAccountList(1, ftype);*/
/* 		})*/
/* 		$('#filterBtns a').mouseover(function() {*/
/* 			$(this).addClass('over');*/
/* 		})*/
/* 		$('#filterBtns a').mouseout(function() {*/
/* 			$(this).removeClass('over');*/
/* 		})*/
/* 		$('.myFilter').click(function() {*/
/* 			if(!$(this).hasClass('clc')) {*/
/* 				$(this).addClass('clc').siblings().removeClass('clc');*/
/* 			}*/
/* 			var user = JSON.parse(ykp.getCookie('userinfo'));*/
/* 			var type = $(this).parents('.tab-pane').index() == 0 ? 2 : 1;*/
/* 			var data = {*/
/* 				"type": 4,*/
/* 				"page_size": pagesize,*/
/* 				'page': 1,*/
/* 				'where': 'khm_customer.tax_type = ' + ftype,*/
/* 				'index': ftype*/
/* 			};*/
/* 			var filter_ = $(this).attr('data-kind');*/
/* 			if(filter_ == '0') {*/
/* 				getAccountList(1, ftype);*/
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
/* 			getAccountList_4(data);*/
/* 		})*/
/* */
/* 		function getAccountList_4(data) {*/
/* 			ykp.list({*/
/* 				url: '/api/api_service/service_list',*/
/* 				methods: 'post',*/
/* 				data: data,*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					hMonth = cs.last_year_month();*/
/* 					var dataList, dataTable, type;*/
/* 					dataList = data['index'] == 2 ? '#dataList' : '#dataList1';*/
/* 					dataTable = data['index'] == 2 ? '#dynamic-table1' : '#dynamic-table2';*/
/* 					generateMonthTh($('#dynamic-table .thColor .month'), res['data']['months'], type);*/
/* 					if(res.data.items == '' || res.data == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt("暂无数据");*/
/* 						}, 1000);*/
/* 						if(!data['index']) {*/
/* 							dataList = '#dataList';*/
/* 						}*/
/* 						$(dataList).html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return;*/
/* 					}*/
/* 					type = res.data.items[0].list[0]['khm_customer.tax_type'];*/
/* 					if(type == 1) {*/
/* 						$("#member-tab").addClass('active');*/
/* 						$("#task-tab").removeClass('active');*/
/* 						$(".kind li").eq(1).addClass("now").siblings().removeClass('now');*/
/* 					}*/
/* */
/* 					addList(res, type);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* */
/* 		//生成月份表头：el 所有月份表头，months:开始、结束月份*/
/* 		function generateMonthTh(el, months, type) {*/
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
/* 			var El = type == 2 ? '#dynamic-table1' : '#dynamic-table2';*/
/* 			var start_month;*/
/* 			$(El + ' .thColor .month').each(function(i, e) {*/
/* 				start_month = i + start['month'];*/
/* 				if(start_month > 12) {*/
/* 					start_month = start_month - 12;*/
/* 					$(this).text(end['year'] + '' + (start_month < 10 ? '0' + start_month : start_month)).attr('month', end['year'] + '' + (start_month < 10 ? '0' + start_month : start_month));*/
/* 					return true;*/
/* 				}*/
/* 				$(this).text(start['year'] + '' + (start_month < 10 ? '0' + start_month : start_month)).attr('month', start['year'] + '' + (start_month < 10 ? '0' + start_month : start_month));*/
/* 			});*/
/* */
/*             //自定义列表*/
/* 			//$('#custom').remove();*/
/* */
/*             if(type==2){*/
/*                 if($('#task-tab').find('.custom').length < 1){*/
/* */
/*                     cs.custorm_check(El,'#dataList', true);*/
/*                 }*/
/* 			}else {*/
/*                 if($('#member-tab').find('.custom').length < 1){*/
/*                     cs.custorm_check(El, '#dataList1', true);*/
/*                 }*/
/* 			}*/
/* 		};*/
/* 		//高级搜索*/
/* 		cs.showHeightSearch('#heightsearch', '#heightsearch1');*/
/* 		cs.showHeightSearch('#height_search', '#height_search1');*/
/* */
/* 		cs.getAllCw(function(option) {*/
/* 			$('#heightsearch1 .cw').html(option);*/
/* 			$('#heightsearch1 .cw').select2({*/
/* 				allowClear: true*/
/* 			})*/
/* 		})*/
/* 		cs.getAllCw(function(option) {*/
/* 			$('#height_search1 .cw').html(option);*/
/* 			$('#height_search1 .cw').select2({*/
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
/* 				var data = res.data;			*/
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
/* 		//拿到查询的所有数据，将一般纳税人和小规模分类*/
/* 		function getAccountList_3(data) {*/
/* 			ykp.list({*/
/* 				url: '/api/api_service/service_list',*/
/* 				method: 'post',*/
/* 				data: data,*/
/* 				pageBar: {*/
/* 					id: '#pageBar',*/
/* 					order: order*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					var resdata = res.data.items;*/
/* 					var num = 0;*/
/* 					hMonth = cs.last_year_month();*/
/* 					//判断是否有数据*/
/* 					if(resdata == '') {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt("暂无数据");*/
/* 						}, 1000);*/
/* 						$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return;*/
/* 					}*/
/* */
/* 					//判断是否有一般纳税人*/
/* 					for(var i in resdata) {*/
/* 						if(resdata[i].list[0]['khm_customer.tax_type'] == 1) {*/
/* 							num++;*/
/* 						}*/
/* 					}*/
/* */
/* 					//判断是否有小规模*/
/* 					if(num < resdata.length) {*/
/* 						if(num > 0) {*/
/* 							tzpage();*/
/* 							$("#tspage").show();*/
/* 						}*/
/* 						if(!param.flag) {*/
/* 							getAccountList_2(1, 2, '', param.timestamp);*/
/* 						} else {*/
/* 							getAccountList_2(1, 2, param.aid, param.timestamp);*/
/* 						}*/
/* 					} else {*/
/* 						if(!param.flag) {*/
/* 							getAccountList_2(1, 1, '', param.timestamp);*/
/* 						} else {*/
/* 							getAccountList_2(1, 1, param.aid, param.timestamp);*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//跳转页面的数据加载*/
/* 		function getAccountList_2(curPage, ctype, aid, timestamp) {*/
/* 			//debugger*/
/* 			var where = `khm_customer.tax_type=${ctype}`;*/
/* 			if(timestamp != '') {*/
/* 				where += ` and ${timestamp}`*/
/* 			}*/
/* 			var data = {*/
/* 				"type": 4,*/
/* 				"page": curPage,*/
/* 				"page_size": pagesize,*/
/* 				"where": where*/
/* 			}*/
/* 			if(aid != '' || aid != undefined) {*/
/* 				data['staff_name'] = aid;*/
/* 			}*/
/* 			ykp.list({*/
/* 				url: '/api/api_service/service_list',*/
/* 				method: 'post',*/
/* 				data: data,*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(ctype == 1) {*/
/* 						$("#member-tab").show();*/
/* 						$("#task-tab").hide();*/
/* 						$(".kind li").eq(1).addClass("now").siblings().removeClass('now');*/
/* 					} else {*/
/* 						$("#member-tab").hide();*/
/* 						$("#task-tab").show();*/
/* 						$(".kind li").eq(1).removeClass("now").siblings().addClass('now');*/
/* 					}*/
/* 					generateMonthTh($('#dynamic-table .thColor .month'), res['data']['months'], ctype);*/
/* 					addList(res, ctype);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//跳转页面查询后仍需跳转一般纳税人时的点击*/
/* 		function tzpage() {*/
/* 			$(".close_ts").click(function() {*/
/* 				$("#tspage").css("display", "none");*/
/* 			})*/
/* 			$("#go_").click(function() {*/
/* 				$("#tspage").css("display", "none");*/
/* 				if(param.flag) {*/
/* 					getAccountList_2(1, 1, '', param.timestamp);*/
/* 				} else {*/
/* 					getAccountList_2(1, 1, param.aid, param.timestamp);*/
/* 				}*/
/* 				$(".kind li").eq(1).addClass("now").siblings().removeClass("now");*/
/* 				$('#member-tab').addClass('active').siblings().removeClass('active');*/
/* 			})*/
/* 		}*/
/* */
/* */
/* 		//显示一般纳税热 或 小规模*/
/* 		$('.kind').on('click', 'li', function() {*/
/* 			$(this).addClass('now').siblings().removeClass('now');*/
/* 			$('[sear="customer_name"]').val('');*/
/* 			$('[sear="khm_customer.customer_num"]').val('');*/
/* 			$('[sear="jzm_service_info.fuze_id"]').val('').trigger('change');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			where = filter = '';*/
/* 			cs.setFuze({*/
/* 				check:true,*/
/* 				conId:["#dataList","#dataList1"],*/
/* 				type:"4",*/
/* 				url:"/api/api_service/transfer_user",*/
/* 				fun:function(ftype){*/
/* 					getAccountList(1, ftype);*/
/* 				}*/
/* 			});*/
/* 			var index = $(this).index();*/
/* 			if(index == 0) {*/
/* 				$('#task-tab').addClass('active');*/
/* 				$('#member-tab').removeClass('active');*/
/* 				ftype = 2;*/
/* 				getAccountList(1, ftype);*/
/* 			} else {*/
/* 				$('#member-tab').addClass('active');*/
/* 				$('#task-tab').removeClass('active');*/
/* 				/*if($('#member-tab').find('#custom').length <1) {*/
/*                     console.log(222);*/
/*                     cs.custorm_check('#dynamic-table2', '#dataList1', true);*/
/* 				}*//* */
/* 				ftype = 1;*/
/* 				getAccountList(1, ftype);*/
/* 			}*/
/* 			//通用排序*/
/* 			cs.general_sort({*/
/* 				url: '/api/api_service/service_list',*/
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
/* 				initOrder: 'khm_customer.id',*/
/* 				defaultOrder: order,*/
/* 				contentId: ftype == 2 ? "#dataList" : "#dataList1",*/
/* 				params: [{*/
/* 					id: ftype == 2 ? "#dynamic-table1" : "#dynamic-table2",*/
/* 					field: ["","", "khm_customer.name", "maxLv", "customer_num", "pos_name",*/
/* 						"htm_contract.payment_cycle", "","", "jzm_service_info.fuze_id"*/
/* 					]*/
/* 				}]*/
/* 			}, function(res, _sort_role) {*/
/*                 sort_role = _sort_role;*/
/* 				addList(res, ftype);*/
/* 			});*/
/* 		});*/
/* */
/* 		//导入导出*/
/* 		var data = {*/
/* 			url: "/api/api_service/serviceExport",*/
/* 			type: '4',*/
/* 			title: '客服模板'*/
/* 		}*/
/* */
/* 		cs.jzexport(data, function(res) {*/
/* 			setTimeout(function(){*/
/* 								ykp.prompt("上传成功");*/
/* 							},1000)*/
/* 			getAccountList(1, ftype);*/
/* 			$('.label_popup').hide();*/
/* 		})*/
/* */
/* 		//每页数量*/
/* 		$('#changePageNum').change(function() {*/
/* 			pagesize = $(this).val();*/
/* 			ykp.setCookie('page_size',pagesize);*/
/* 			getAccountList(1, ftype);*/
/* 		});*/
/* */
/* 		function getAccountList(curPage, ftype) {*/
/* 			hMonth = cs.last_year_month();*/
/* 			$("#tspage").css("display", "none");*/
/* 			var data = {*/
/* 				"type": 4,*/
/* 				"page": curPage,*/
/* 				"page_size": pagesize,*/
/* 				"where": filter ? ('khm_customer.tax_type=' + ftype + " and " + filter) : 'khm_customer.tax_type=' + ftype,*/
/* 			}*/
/* */
/* 			if(month2) {*/
/* 				data.month2 = month2;*/
/* 			}*/
/* 			//顶部chart*/
/* 			cs.getChart(4, '', data);*/
/* 			ykp.list({*/
/* 				url: '/api/api_service/service_list',*/
/* 				methods: 'post',*/
/* 				data: data,*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					var dataTable = ftype == 1 ? '#dataList1' : '#dataList';*/
/* 					hMonth = cs.last_year_month();*/
/* 					generateMonthTh($('#dynamic-table .thColor .month'), res['data']['months'], ftype);*/
/* 					if(res.data.items == '') {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt("暂无数据");*/
/* 						}, 1000);*/
/* 						$(dataTable).html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return;*/
/* 					}*/
/* */
/* 					addList(res, ftype);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//获取所有员工(负责人)*/
/* 		function allemp() {*/
/* 			var emps;*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_employees/grid',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					page: 1,*/
/* 					limit: 999*/
/* 				},*/
/* 				async: false,*/
/* 				success: function(res) {*/
/* 					emps = res.data.items;*/
/* 				}*/
/* 			});*/
/* 			return emps;*/
/* 		}*/
/* */
/* 		function Month(month, ftype) {*/
/* 			var result = "";*/
/* 			var El = ftype == 2 ? '#dynamic-table1' : '#dynamic-table2';*/
/* 			$(El + ' .thColor .month').each(function(i, e) {*/
/* 				if(month == $(this).text()) {*/
/* 					result = i;*/
/* 					return false;*/
/* 				}*/
/* 			})*/
/* 			return result;*/
/* 		}*/
/* */
/* 		function addList(res, ftype) {*/
/* */
/* 			var data = res.data.items;*/
/* 			var status = []; //该数组存放th display属性值*/
/* 			var ths = ftype == 2 ? $('#dynamic-table1 .thColor th') : $('#dynamic-table2 .thColor th'); //获取所有的th*/
/* 			var html = '';*/
/* 			var Class = '';*/
/* 			var index = ['', 'fa fa-circle-o', 'glyphicon glyphicon-ok', 'glyphicon glyphicon-remove'];*/
/* 			var timeArr = new Array(12);*/
/* 			var obj = {};*/
/* 			var cycle = [];*/
/* 			var emps = allemp();*/
/* 			var cycleName = {*/
/* 				t1: '每月',*/
/* 				t3: '季度',*/
/* 				t6: '半年',*/
/* 				t12: '一年'*/
/* 			}*/
/* 			for(var i = 0; i < ths.length; i++) {*/
/* 				status.push(ths.eq(i).css('display'));*/
/* 			}*/
/*             var dataList = '';*/
/* 			dataList = ftype == 2 ? '#dataList' : '#dataList1';*/
/* 			ykp.setCookie('page_no', res.data.curPage, (1 / 24));*/
/* 			if(!data) {*/
/* 				setTimeout(function() {*/
/* 					ykp.prompt("暂无数据");*/
/* 				}, 1000);*/
/* 				$(dataList).html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 				return false;*/
/* 			}*/
/* 			//负责人id*/
/* 			var fuze_ids = [];*/
/* 			//负责人名字*/
/* 			var fuze = [];*/
/* */
/* 			var overdue = 0;*/
/* 			for(var z in data) {*/
/* 				data[z]['fuze_ids'] = [];*/
/* 				data[z]['fuze_ids1'] = [];*/
/* 			}*/
/* 			for(var i in data) {*/
/* 				var newMark = 'inline-block'*/
/* 				overdue = 0;*/
/* 				for(var j = 0; j < data[i].list.length; j++) {*/
/* 					time = data[i].list[j] ? Month(data[i].list[j]['jzm_service_info.time'], ftype) : "";*/
/* 					//					time = cs.GetMounth(data[i].list[j]['jzm_service_info.time']);*/
/* 					obj.status = data[i].list[j]['jzm_service_info.status'];*/
/* 					obj.get_money = data[i].list[j]['jzm_service_info.get_money'];*/
/* 					obj.id = data[i].list[j]['jzm_service_info.id'];*/
/* 					obj.time = data[i].list[j]['jzm_service_info.time'];*/
/* 					obj.contract_id = data[i]['list'][j]['jzm_service_info.contract_id'];*/
/* 					obj.fuze_id = data[i]['list'][j]['jzm_service_info.fuze_id'];*/
/* 					obj.handStatus = data[i]['list'][j]['htm_contract.status'] || "";*/
/* 					obj.Status = data[i].list[j]['htm_contract.status'] == 1 || data[i].list[j]['htm_contract.status'] == 2 ? false : true; //合同状态*/
/* 					timeArr[time] = obj;*/
/* 					obj = {};*/
/* 				}*/
/* 				for(var j = data[i].list.length - 1; j >= 0; j--) {*/
/* 					overdue += parseInt(data[i].list[j]['jzm_service_info.overdue']);*/
/* 					if(data[i].list[j]['jzm_service_info.status'] != 0) {*/
/* 						newMark = 'none';*/
/* 					}*/
/* */
/* 					//负责人id不存在 则将负责人id加入fuze_ids中*/
/* 					if($.inArray(data[i].list[j]['jzm_service_info.fuze_id'], data[i]['fuze_ids']) == -1) {*/
/* 						data[i]['fuze_ids'].push(data[i].list[j]['jzm_service_info.fuze_id']);*/
/* 						data[i]['fuze_ids1'].push(data[i].list[j]['jzm_service_info.fuze_id']);*/
/* 					}*/
/* */
/* 					//					if($.inArray(data[i].list[j]['htm_contract.payment_cycle'], cycle) == -1) {*/
/* 					//						cycle.push(cycleName["t" + data[i].list[j]['htm_contract.payment_cycle']]);*/
/* 					//					}*/
/* 				}*/
/* 				//根据负责人id 获取负责人姓名并存入fuze中*/
/* 				for(var j = 0; j < 1; j++) {*/
/* 					data[i]['fuze_ids'] = employees[data[i]['fuze_ids'][j]];*/
/* 				}*/
/* */
/* 				for(var j in emps) {*/
/* 					if(emps[j]['bmm_employees.id'] == data[i].list[0]['htm_contract.assign_staff_id']) {*/
/* 						var empname = emps[j]['bmm_employees.name'];*/
/* 					}*/
/* 				}*/
/* 				//				<i class="iconBnt fa fa-info-circle" aria-hidden="true"></i>*/
/* 				//											<span data-rel="tooltip" title="${data[i].list[0]['khm_customer.remark']}" data-placement="right" ></span>*/
/* 				cycle=(cycleName["t" + data[i].list[0]['htm_contract.payment_cycle']]);*/
/* 				html += `<tr data-id="${data[i].contract_id}" cid="${data[i].list[0]['khm_customer.id']}"  payment_cycle="${data[i].list[0]['htm_contract.payment_cycle']}">*/
/* 							<td class="center">*/
/* 								<label class="pos-rel">*/
/* 								<input type="checkbox" name="check" class="ace"/>*/
/* 								<span class="lbl"></span>*/
/* 								</label>*/
/* 							</td>*/
/* 							<td class="center" style="display:${status[0]};">*/
/* 								<label class="pos-rel">*/
/* 									 <a><span style="cursor: pointer;" id="" contentAuthority="99" title="工资单" class="lbl btBlue payroll"><i class="fa fa-ticket"></i></span></a>*/
/* 									 <a><span style="cursor: pointer;" id="" contentAuthority="100" title="投诉建议" class="lbl complaint_advice btOrange"><i class="fa fa-bookmark-o"></i></span></a>*/
/* 								</label>*/
/* 							</td>*/
/* 										*/
/* 							//企业名称*/
/* 							 <td data-num="1" style="display:${status[2]};" data-cid="${data[i].list[0]['khm_customer.id']}">*/
/* 								 <div style="display:${data[i].is_red == 1 ? "inline-block" : "none"};height:14px;width:17px">*/
/* 									<span class="spanTip" style=""><span>*/
/* 								</div>*/
/* 								<a href="#" class="customerDetail pos-rel">${data[i].list[0]['khm_customer.name']}</a>*/
/* 								<label class="pos-rel">*/
/* 									<i relation=${data[i]['is_relotion']} class="sc fa ${data[i]['is_relotion'] == 0 ? 'fa-heart-o' : 'fa-heart'}" style="color:${data[i]['is_relotion'] ==1 ? 'red' : ''}"></i>*/
/* 									<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}" data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>*/
/* 								 </label>*/
/* 							</td>*/
/* 							<td data-num="2" style="display:${status[3]};">*/
/* 									${data[i]['maxLv']}*/
/* 							</td>*/
/* 							//客户编码*/
/* 							<td data-num="3" style="display:${status[4]};">*/
/* 								${data[i]['customer_num']}*/
/* 							</td>*/
/* */
/* 							//仓位编码*/
/* 							<td data-num="4" style="display:${status[5]};">*/
/* 								${data[i].position.pos_name+""+data[i].position.pos_num}*/
/* 							</td>*/
/* */
/* 							//服务周期*/
/* 							<td class="center" data-num="5" style="display:${status[6]}">${cycle}</td>*/
/* */
/* 							//逾期*/
/* 							<td data-num="6" style="display:${status[7]};">*/
/* 								${data[i]['num']}*/
/* 							</td>*/
/* */
/* 							//截至日期*/
/* 							<td data-num="7" style="display:${status[8]};">*/
/* 								${data[i]['maxTime']}*/
/* 							</td>*/
/* */
/* 							//负责人*/
/* 							<td class="" style="display:${status[9]};" data-num="8">*/
/* 									${ data[i]['fuze_ids'] || ''}*/
/* 							</td>*/
/* */
/* 							//基本户*/
/* 							 <td class="" style="display:${status[10]};" data-num="9">*/
/* 								${data[i].list[0]['basic_name']}*/
/* 							</td>*/
/* */
/* 								//以下月份*/
/* 							<td style="display:${status[11]};border:1px solid #eee !important;" ${timeArr[0] ? (timeArr[0]['Status'] ? "cstatus" : "") : ""}   class="center" get_money="${timeArr[0] != undefined ? timeArr[0].get_money : ''}" fuze_ids="${data[i]['fuze_ids1']}" fuze_id="${timeArr[0] ? timeArr[0].fuze_id : ''}"  handStatus="${timeArr[0] ? timeArr[0].handStatus : ''}" contract_id=${timeArr[0] ? timeArr[0].contract_id : ''} fuze_id=${timeArr[0] ? timeArr[0].fuze_id : ''}  handStatus="${timeArr[0] ? timeArr[0].handStatus : ''}"  data-num="10" data-status="${timeArr[0] != undefined ? timeArr[0].status  : ''}" data-id="${timeArr[0] != undefined ? timeArr[0].id : ''}" title="${timeArr[0] != undefined ? timeArr[0].time:''}" data-month="${timeArr[0] != undefined ? timeArr[0].time:''}">*/
/* */
/* 								<label class="pos-rel ${timeArr[0] != undefined ? index[timeArr[0].status] : ''}"></label>*/
/* */
/* 							</td>*/
/* */
/* 							<td style="display:${status[12]};border:1px solid #eee !important;" ${timeArr[1] ? (timeArr[1]['Status'] ? "cstatus" : "") :""}  class="center" data-id="${timeArr[1] != undefined ? timeArr[1].id : ''}" fuze_ids=${data[i]['fuze_ids1']}  fuze_id=${timeArr[1] ? timeArr[1].fuze_id : ''}  handStatus=${timeArr[1] ? timeArr[1].handStatus : ''} contract_id=${timeArr[1] ? timeArr[1].contract_id : ''} fuze_id=${timeArr[1] ? timeArr[1].fuze_id : ''}  handStatus="${timeArr[1] ? timeArr[1].handStatus : ''}" data-num="11" get_money="${timeArr[1] != undefined ? timeArr[1].get_money : ''}" data-status="${timeArr[1] != undefined ? timeArr[1].status  : ''}" style="width:70px;" title="${timeArr[1] != undefined ? timeArr[1].time:''}" data-month="${timeArr[1] != undefined ? timeArr[1].time:''}">*/
/* 							   <label class="pos-rel ${timeArr[1] != undefined ? index[timeArr[1].status] : ''}"></label>*/
/* */
/* 							</td>*/
/* 							//三月*/
/* 							<td style="display:${status[13]};border:1px solid #eee !important;" ${timeArr[2] ? (timeArr[2]['Status'] ? "cstatus" : "") : ""}  class="center" get_money="${timeArr[2] != undefined ? timeArr[2].get_money : ''}" fuze_ids=${data[i]['fuze_ids1']}  fuze_id=${timeArr[2] ? timeArr[2].fuze_id : ''}  handStatus=${timeArr[2] ? timeArr[2].handStatus : ''} contract_id=${timeArr[2] ? timeArr[2].contract_id : ''} fuze_id=${timeArr[2] ? timeArr[2].fuze_id : ''}  handStatus=""${timeArr[2] ? timeArr[2].handStatus : ''}" data-id="${timeArr[2] != undefined ? timeArr[2].id : ''}" data-status="${timeArr[2] != undefined ? timeArr[2].status  : ''}" data-num="12" title="${timeArr[2] != undefined ? timeArr[2].time:''}" data-month="${timeArr[2] != undefined ? timeArr[2].time:''}">*/
/* 							<label class="pos-rel ${timeArr[2] != undefined ? index[timeArr[2].status] : ''}"></label>*/
/* 							</td>*/
/* */
/* 							<td style="display:${status[14]};border:1px solid #eee !important;" ${timeArr[3] ? (timeArr[3]['Status'] ? "cstatus" : "") : ""}  class="center" get_money="${timeArr[3] != undefined ? timeArr[3].get_money : ''}" fuze_ids=${data[i]['fuze_ids1']}  fuze_id=${timeArr[3] ? timeArr[3].fuze_id : ''}  handStatus=${timeArr[3] ? timeArr[3].handStatus : ''} contract_id=${timeArr[3] ? timeArr[3].contract_id : ''} fuze_id=${timeArr[3] ? timeArr[3].fuze_id : ''}  handStatus="${timeArr[3] ? timeArr[3].handStatus : ''}" data-id="${timeArr[3] != undefined ? timeArr[3].id : ''}" data-status="${timeArr[3] != undefined ? timeArr[3].status  : ''}"data-num="13" title="${timeArr[3] != undefined ? timeArr[3].time:''}" data-month="${timeArr[3] != undefined ? timeArr[3].time:''}">*/
/* 							   <label class="pos-rel ${timeArr[3] != undefined ? index[timeArr[3].status] : ''}"></label>*/
/* */
/* 							</td>*/
/* 							//五月*/
/* 							<td style="display:${status[15]};border:1px solid #eee !important;" ${timeArr[4] ? (timeArr[4]['Status'] ? "cstatus" : "") : ""}  class="center" get_money="${timeArr[4] != undefined ? timeArr[4].get_money : ''}" fuze_ids=${data[i]['fuze_ids1']}  fuze_id=${timeArr[4] ? timeArr[4].fuze_id : ''}  handStatus=${timeArr[4] ? timeArr[4].handStatus : ''} contract_id=${timeArr[4] ? timeArr[4].contract_id : ''} fuze_id=${timeArr[4] ? timeArr[4].fuze_id : ''}  handStatus="${timeArr[4] ? timeArr[4].handStatus : ''}" data-id="${timeArr[4] != undefined ? timeArr[4].id : ''}" data-status="${timeArr[4] != undefined ? timeArr[4].status  : ''}" title="${timeArr[4] != undefined ? timeArr[4].time:''}" data-num="14" data-month="${timeArr[4] != undefined ? timeArr[4].time:''}">*/
/* 							   <label class="pos-rel ${timeArr[4] != undefined ? index[timeArr[4].status] : ''}"></label>*/
/* 							</td>*/
/* */
/* 							<td style="display:${status[16]};border:1px solid #eee !important;" ${timeArr[5] ? (timeArr[5]['Status'] ? "cstatus" : "") : ""}  class="center" get_money="${timeArr[5] != undefined ? timeArr[5].get_money : ''}" fuze_ids=${data[i]['fuze_ids1']}  fuze_id=${timeArr[5] ? timeArr[5].fuze_id : ''}  handStatus=${timeArr[5] ? timeArr[5].handStatus : ''} contract_id=${timeArr[5] ? timeArr[5].contract_id : ''} fuze_id=${timeArr[5] ? timeArr[5].fuze_id : ''}  handStatus="${timeArr[5] ? timeArr[5].handStatus : ''}" data-id="${timeArr[5] != undefined ? timeArr[5].id : ''}" data-status="${timeArr[5] != undefined ? timeArr[5].status  : ''}" data-num="15" title="${timeArr[5] != undefined ? timeArr[5].time:''}" data-month="${timeArr[5] != undefined ? timeArr[5].time:''}">*/
/* 							   <label class="pos-rel ${timeArr[5] != undefined ? index[timeArr[5].status] : ''}"></label>*/
/* */
/* 							</td>*/
/* 							//七月*/
/* 							<td style="display:${status[17]};border:1px solid #eee !important;" ${timeArr[6] ? (timeArr[6]['Status'] ? "cstatus" : "") : ""}  data-num="16" get_money="${timeArr[6] != undefined ? timeArr[6].get_money : ''}" fuze_ids=${data[i]['fuze_ids1']}  fuze_id=${timeArr[6] ? timeArr[6].fuze_id : ''}  handStatus=${timeArr[6] ? timeArr[6].handStatus : ''} contract_id=${timeArr[6] ? timeArr[6].contract_id : ''} fuze_id=${timeArr[6] ? timeArr[6].fuze_id : ''}  handStatus="${timeArr[6] ? timeArr[6].handStatus : ''}" data-status="${timeArr[6] != undefined ? timeArr[6].status  : ''}" data-id="${timeArr[6] != undefined ? timeArr[6].id : ''}" class="" title="${timeArr[6] != undefined ? timeArr[6].time:''}" data-month="${timeArr[6] != undefined ? timeArr[6].time:''}">*/
/* 								<label class="pos-rel ${timeArr[6] != undefined ? index[timeArr[6].status] : ''}"></label>*/
/* 							</td>*/
/* */
/* 							<td style="display:${status[18]};border:1px solid #eee !important;" ${timeArr[7] ? (timeArr[7]['Status'] ? "cstatus" : "") : ""}  class="center" get_money="${timeArr[7] != undefined ? timeArr[7].get_money : ''}" fuze_ids=${data[i]['fuze_ids1']}  fuze_id=${timeArr[7] ? timeArr[7].fuze_id : ''}  handStatus=${timeArr[7] ? timeArr[7].handStatus : ''} contract_id=${timeArr[7] ? timeArr[7].contract_id : ''} fuze_id=${timeArr[7] ? timeArr[7].fuze_id : ''}  handStatus="${timeArr[7] ? timeArr[7].handStatus : ''}" data-status="${timeArr[7] != undefined ? timeArr[7].status  : ''}" data-id="${timeArr[7] != undefined ? timeArr[7].id : ''}" data-num="17" title="${timeArr[7] != undefined ? timeArr[7].time:''}" data-month="${timeArr[7] != undefined ? timeArr[7].time:''}">*/
/* 								<label class="pos-rel ${timeArr[7] != undefined ? index[timeArr[7].status] : ''}"></label>*/
/* 							</td>*/
/* 							//九月*/
/* 							<td style="display:${status[19]};border:1px solid #eee !important;" ${timeArr[8] ? (timeArr[8]['Status'] ? "cstatus" : "") : ""}  class="center" get_money="${timeArr[8] != undefined ? timeArr[8].get_money : ''}" fuze_ids=${data[i]['fuze_ids1']}  fuze_id=${timeArr[8] ? timeArr[8].fuze_id : ''}  handStatus=${timeArr[8] ? timeArr[8].handStatus : ''} contract_id=${timeArr[8] ? timeArr[8].contract_id : ''} fuze_id=${timeArr[8] ? timeArr[8].fuze_id : ''}  handStatus="${timeArr[8] ? timeArr[8].handStatus : ''}" data-status="${timeArr[8] != undefined ? timeArr[8].status  : ''}" data-id="${timeArr[8] != undefined ? timeArr[8].id : ''}" data-num="18" title="${timeArr[8] != undefined ? timeArr[8].time:''}" data-month="${timeArr[8] != undefined ? timeArr[8].time:''}">*/
/* 								<label class="pos-rel ${timeArr[8] != undefined ? index[timeArr[8].status] : ''}"></label>*/
/* */
/* 							</td>*/
/* 							<td style="display:${status[20]};border:1px solid #eee !important;" ${timeArr[9] ? (timeArr[9]['Status'] ? "cstatus" : "") : ""}  class="center " get_money="${timeArr[9] != undefined ? timeArr[9].get_money : ''}" fuze_ids=${data[i]['fuze_ids1']}  fuze_id=${timeArr[9] ? timeArr[9].fuze_id : ''}  handStatus=${timeArr[9] ? timeArr[9].handStatus : ''} contract_id=${timeArr[9] ? timeArr[9].contract_id : ''} fuze_id="${timeArr[9] ? timeArr[9].fuze_id : ''}  handStatus=${timeArr[9] ? timeArr[9].handStatus : ''}" data-status="${timeArr[9] != undefined ? timeArr[9].status  : ''}" data-id="${timeArr[9] != undefined ? timeArr[9].id : ''}" title="${timeArr[9] != undefined ? timeArr[9].time:''}" data-num="19" data-month="${timeArr[9] != undefined ? timeArr[9].time:''}">*/
/* 								<label class="pos-rel ${timeArr[9] != undefined ? index[timeArr[9].status] : ''}"></label>*/
/* 							</td>*/
/* */
/* 							//十一*/
/* 							<td style="display:${status[21]};border:1px solid #eee !important;" ${timeArr[10] ? (timeArr[10]['Status'] ? "cstatus" : "") : ""}  class="center" get_money="${timeArr[10] != undefined ? timeArr[10].get_money : ''}" fuze_ids=${data[i]['fuze_ids1']}  fuze_id=${timeArr[10] ? timeArr[10].fuze_id : ''}  handStatus=${timeArr[10] ? timeArr[10].handStatus : ''} contract_id=${timeArr[10] ? timeArr[10].contract_id : ''} fuze_id=${timeArr[10] ? timeArr[10].fuze_id : ''}  handStatus="${timeArr[10] ? timeArr[10].handStatus : ''}" data-status="${timeArr[10] != undefined ? timeArr[10].status  : ''}" data-id="${timeArr[10] != undefined ? timeArr[10].id : ''}" title="${timeArr[10] != undefined ? timeArr[10].time:''}" data-num="20" data-month="${timeArr[10] != undefined ? timeArr[10].time:''}">*/
/* 								<label class="pos-rel ${timeArr[10] != undefined ? index[timeArr[10].status] : ''}"></label>*/
/* 							</td>*/
/* 							<td style="display:${status[22]};border:1px solid #eee !important;" ${timeArr[11] ? (timeArr[11]['Status'] ? "cstatus" : "") : ""}  class="center" get_money="${timeArr[11] != undefined ? timeArr[11].get_money : ''}" fuze_ids=${data[i]['fuze_ids1']}  fuze_id=${timeArr[11] ? timeArr[11].fuze_id : ''}  handStatus=${timeArr[11] ? timeArr[11].handStatus : ''} contract_id=${timeArr[11] ? timeArr[11].contract_id : ''} fuze_id=${timeArr[11] ? timeArr[11].fuze_id : ''}  handStatus=${timeArr[11] ? timeArr[11].handStatus : ''} data-status="${timeArr[11] != undefined ? timeArr[11].status  : ''}" data-id="${timeArr[11] != undefined ? timeArr[11].id : ''}" title="${timeArr[11] != undefined ? timeArr[11].time:''}" data-num="21" data-month="${timeArr[11] != undefined ? timeArr[11].time:''}">*/
/* 							   <label class="pos-rel ${timeArr[11] != undefined ? index[timeArr[11].status] : ''}"></label>*/
/* 							</td>*/
/* 						</tr>`;*/
/* */
/* 				//置空数据*/
/* 				timeArr = [];*/
/* 				fuze_ids = [];*/
/* 				fuze = [];*/
/* 			}*/
/* */
/* 			$(dataList).html(html);*/
/* */
/* 			custom.showReamrk();*/
/* 			custom.get_custom_info();*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/* 			cs.getNodes([99, 100, 289]);*/
/* 			var statu = cs.getNodes([102, 289], true);*/
/* 			$(dataList).find('td[get_money]').each(function() {*/
/* 				if($(this).attr('get_money') > 0) {*/
/* 					$(this).css('background-color', '#00cc22')*/
/* 				}*/
/* 			})*/
/* */
/* 			cs.sc('客服', function(res) {*/
/* 				var index = $('.kind').find('.now').index();*/
/*                 if(index == 0) {*/
/* 					ftype = 2;*/
/* 					getAccountList(0, ftype)*/
/* 				} else {*/
/*                    /* if($('#member-tab').find('#custom').length <= 0) {*/
/* 						cs.custorm_check('#dynamic-table2', 'tbody', true);*/
/* 					}*//* */
/* 					ftype = 1;*/
/* 					getAccountList(0, ftype)*/
/* 				}*/
/* 			});*/
/* */
/* 			//打开工资单*/
/* 			function payrolls() {*/
/* 				$(".payroll").click(function() {*/
/* 					showMark("#payroll_table");*/
/* 					$('#showBox .title').text('工资单');*/
/* 					var allMonth = cs.last_year_month('', 23);*/
/* 					allMonth = allMonth.reverse();*/
/* 					var optionList = "";*/
/* 					for(var i in allMonth) {*/
/* 						if(i == 0) {*/
/* 							$("#templateCon .year_month").text("所属月份：" + allMonth[i].slice(0,4)+"年" + allMonth[i].slice(4) + "月")*/
/* 							optionList += '<option selected="ture">' + allMonth[i] + '</option>';*/
/* 						} else {*/
/* 							optionList += '<option>' + allMonth[i] + '</option>';*/
/* 						}*/
/* 					}*/
/* 					$('#templateBox #month').find('select').append(optionList);*/
/* 					$('#templateBox #month').find('select').trigger('change')*/
/* */
/* 					//将公司名和当前月份加载到表头*/
/* 					var copname = $(this).parents("tr").find("td[data-num='1'] a").text();*/
/* 					var kh_id = $(this).parents("tr").find("td[data-num='1']").attr('data-cid').trim();*/
/* 					var select = ["id", "name", "basic", "day", "day_money", "social", "total"];*/
/* 					var month = $('#templateBox #month').find('select').val();*/
/* 					$("#templateCon #wage_customer_name span").text(copname);*/
/* 					$('#templateCon .comtomName').text("单位名称："+copname);*/
/* 					var param = {*/
/* 						url: '/api/api_customer/hk_wages_list',*/
/* 						kh_id: kh_id,*/
/* 						//						select: JSON.stringify(select),*/
/* 						limit: 999,*/
/* 						order: "id",*/
/* 						page: 1,*/
/* 						month: month*/
/* 					};*/
/* 					$("#templateCon #month select").change(function() {*/
/* 						var month_id = $(this).val();*/
/* 						param.month = month_id;*/
/* 						showPayrolls(param);*/
/* 						$("#templateCon .year_month").text("所属月份：" + month_id.slice(0,4)+" 年 " + month_id.slice(4) + " 月");*/
/* 					});*/
/* 					showPayrolls(param);*/
/* */
/* 					//添加一条工资单信息*/
/* 					function addItems() {*/
/* 						$('#templateCon #addItem').unbind('click').click(function() {*/
/* 							num++;*/
/* 							//得到已有数据条数*/
/* 							var count = $("#templateCon #payrollList").children("tr").length;*/
/* 							var tr = `<tr>*/
/* 								<td class="center" style="line-height:37px;"><span _title="id">${num}</sapn></td>*/
/* 								<td class="center"><input _title="name" style="padding:3px;width:90px"/></td>*/
/* 								<td class="center"><input type="number" class="gz_basic" style="width:90px" _title="basic"/></td>*/
/* 								<td class="center"><input type="number" class="gz_day" style="width:90px" _title="day" value="24"/></td>*/
/* 								<td class="center"><input type="number" class="gz_day_money" style="width:90px" _title="day_money"/></td>*/
/* 								<td class="center"><input type="number" class="gz_social" style="width:90px" _title="social"/></td>*/
/* 								<td class="center"><input type="number" class="gz_total" style="width:90px" _title="total"/></td>*/
/* 								<td class="center"></td>*/
/* 								<td class="center no-print" style="line-height:37px;"> <a href="javascript:void(0)" style="font-weight:bold;" class="removeT"><i class="fa  glyphicon-minus fa-2x"></i></a></td>*/
/* 							</tr>`;*/
/* 							if($("#templateCon #payrollList").children().length == 0) {*/
/* 								$("#templateCon #payrollList").append(tr);*/
/* 							} else {*/
/* 								$(tr).insertBefore($("#templateCon #payrollList").children().first());*/
/* 							}*/
/* */
/* 							//							$("#templateCon #payrollList").(tr);*/
/* 							itemsTotal();*/
/* 							printPayBill();*/
/* 							removeT();*/
/* 							autoCountTotal();*/
/* */
/* 							$('#templateCon .gz_day').change(function() {*/
/* 								if($(this).val() > 31) {*/
/* 									$(this).val(31);*/
/* 								} else if($(this).val() < 0) {*/
/* 									$(this).val(1);*/
/* 								}*/
/* 							})*/
/* 						})*/
/* 					}*/
/* 					addItems();*/
/* 					var data_id = $(this).parent("tr").attr("data-id");*/
/* 					savewage(kh_id);*/
/* 				})*/
/* 			}*/
/* */
/* 			//删除一条工资单*/
/* 			function removeT() {*/
/* 				$("#templateCon .removeT").unbind('click').click("click", function() {*/
/* 					var it = $(this);*/
/* 					bootbox.confirm('确定要删除该条数据吗？', function(flag) {*/
/* 						if(flag) {*/
/* 							var emp_id = it.parents("tr").find("td").eq(0).attr('data-id');*/
/* */
/* 							if(!emp_id) {*/
/* 								it.parents("tr").remove();*/
/* 								itemsTotal();*/
/* 							} else {*/
/* 								it.parents("tr").remove();*/
/* 								ykp.doAjax({*/
/* 									url: '/api/api_customer/hk_wages_del',*/
/* 									methods: 'post',*/
/* 									data: {*/
/* 										id: emp_id*/
/* 									},*/
/* 									success: function(res) {*/
/* 										itemsTotal();*/
/* 										ykp.prompt("删除成功");*/
/* 									}*/
/* 								})*/
/* 							}*/
/* 						}*/
/* 					});*/
/* 				})*/
/* 			}*/
/* */
/* 			function showPayrolls(param) {*/
/* 				//加载工资单数据*/
/* 				ykp.doAjax({*/
/* 					url: param.url, //缺查看客户工资单的接口*/
/* 					methods: 'post',*/
/* 					data: {*/
/* 						kh_id: param.kh_id,*/
/* 						select: param.select,*/
/* 						limit: param.limit,*/
/* 						order: param.order,*/
/* 						page: param.page,*/
/* 						month: param.month*/
/* 					},*/
/* 					showBlock: true,*/
/* 					success: function(res) {*/
/* 						var data = res.data.items;*/
/* 						var tr = "";*/
/* 						if(data.length == "") {*/
/* 							ykp.prompt("暂时没有数据");*/
/* 							$("#templateCon #payrollList").html("<tr><td colspan='30'></td></tr>");*/
/* 						}*/
/* 						//${data[i]['khm_wages.id']}*/
/* 						num = 0;*/
/* 						for(var i = data.length - 1; i >= 0; i--) {*/
/* */
/* 							num++;*/
/* 							tr += `<tr>*/
/* 										<td class="center" style="line-height:37px;" data-id="${data[i]['khm_wages.id']}"><span _title="id">${num}</sapn></td>*/
/* 										<td class="center"><input _title="name" style="padding:3px;width:90px" value="${data[i]['khm_wages.name']}" /></td>*/
/* 										<td class="center"><input type="number" class="gz_basic"  style="width:90px" _title="basic" value="${data[i]['khm_wages.basic']}" /></td>*/
/* 										<td class="center"><input type="number" class="gz_day" style="width:90px" _title="day" value="${data[i]['khm_wages.day']}"/></td>*/
/* 										<td class="center"><input type="number" class="gz_day_money" style="width:90px" _title="day_money" value="${data[i]['khm_wages.day_money']}"/></td>*/
/* 										<td class="center"><input type="number" class="gz_social" style="width:90px" _title="social" value="${data[i]['khm_wages.social']}"/></td>*/
/* 										<td class="center"><input type="number" class="gz_total" style="width:90px" _title="total" value="${data[i]['khm_wages.total']}"/></td>*/
/* 										<td class="center"></td>*/
/* 										<td class="center no-print" style="line-height:37px;"> <a href="javascript:void(0)" style="font-weight:bold;" class="removeT"><i class="fa  glyphicon-minus fa-2x"></i></a></td>*/
/* 									</tr>`;*/
/* 						}*/
/* 						$("#templateCon #payrollList").html(tr);*/
/* 						autoCountTotal();*/
/* 						itemsTotal();*/
/* 						printPayBill();*/
/* 						removeT();*/
/* */
/* 						$('#templateCon .gz_day').change(function() {*/
/* 							if($(this).val() > 31) {*/
/* 								$(this).val(31);*/
/* 							} else if($(this).val() < 0) {*/
/* 								$(this).val(1);*/
/* 							}*/
/* 						})*/
/* 					}*/
/* 				});*/
/* 			}*/
/* */
/* 			//自动计算工资，总计*/
/* 			function autoCountTotal() {*/
/* 				$('.gz_basic,.gz_day,.gz_day_money,.gz_social').each(function() {*/
/* 					$(this).change(function() {*/
/* 						var parent = $(this).parent().parent();*/
/* 						var gz_basic = $('.gz_basic', parent).val();*/
/* 						var gz_day = $('.gz_day', parent).val();*/
/* 						var gz_social = $('.gz_social', parent).val();*/
/* 						var gz_day_money = (gz_basic / gz_day).toFixed(2);*/
/* 						var gz_total = (gz_basic - gz_social).toFixed(2);*/
/* 						$('.gz_day_money', parent).val(gz_day_money);*/
/* 						$('.gz_total', parent).val(gz_total);*/
/* 					});*/
/* 				});*/
/* 			}*/
/* */
/* 			payrolls();*/
/* */
/* 			//基本工资，出勤天数，日工资，社保，总金额  总计*/
/* 			function itemsTotal() {*/
/* 				var itemsTotal = 0;*/
/* 				$('#templateCon #itemsTotal td').not(':first,:last').each(function(i, e) {*/
/* 					if(i < 5) {*/
/* 						$('#templateCon #payrollList tr').find('td:eq(' + (i + 2) + ')').each(function(index, element) {*/
/* 							itemsTotal = eval(itemsTotal + '+' + ($(element).find('input').val().trim() ? $(element).find('input').val().trim() : '0'));*/
/* 						});*/
/* 						$(e).text(itemsTotal);*/
/* 						itemsTotal = 0;*/
/* 					}*/
/* 				});*/
/* */
/* 			}*/
/* */
/* 			//打开投诉建议*/
/* 			function complaint_advice() {*/
/* 				$(".complaint_advice").click(function() {*/
/* 					var customer_id = $(this).parents("tr").find("td[data-num='1']").attr('data-cid').trim();*/
/* 					var customer_name = $(this).parents('tr').find('td[data-num="1"] a').text().trim();*/
/* */
/* 					ykp.doAjax({*/
/* 						url: '/api/api_service/get_book_list2',*/
/* 						data: {*/
/* 							customer_id: customer_id*/
/* 						},*/
/* 						success: function(res) {*/
/* 							var data = res.data;*/
/* 							if(data == '') {*/
/* 								ykp.prompt('请先到联系人页面添加联系人！');*/
/* 								return;*/
/* 							}*/
/* 							showMark("#complaint_advice_table");*/
/* 							addcomplaint();*/
/* 							var emps = allemp();*/
/* 							var option = '';*/
/* 							for(var i in emps) {*/
/* 								if(emps[i]['bmm_employees.name']) {*/
/* 									option += `<option value="${emps[i]['bmm_employees.id']}" data-id="${emps[i]['bmm_employees.id']}">${emps[i]['bmm_employees.name']}</option>`;*/
/* 								}*/
/* 							}*/
/* 							$("#templateCon [title_='duto']").append(option);*/
/* 							$('#templateCon [title_="name"]').val(customer_name);*/
/* 							for(var i in data) {*/
/* 								$('#templateCon [title_="customer_name"]').append($(`<option value="${data[i]['id']}" selected="${data[i]['is_main']==1?true:false}">${data[i]['username']}</option>`));*/
/* */
/* 							}*/
/* 							for(var i in data) {*/
/* 								if(data[i]['id'] == $('#templateCon [title_="customer_name"]').val()) {*/
/* 									$('#templateCon [title_="customer_tel"]').val(data[i]['phone']);*/
/* 									break;*/
/* 								}*/
/* 							}*/
/* */
/* 							$('#templateCon [title_="customer_name"]').change(function() {*/
/* 								var id = $(this).val();*/
/* 								for(var i in data) {*/
/* 									if(data[i]['id'] == id) {*/
/* 										$('#templateCon [title_="customer_tel"]').val(data[i]['phone']);*/
/* 										break;*/
/* 									}*/
/* 								}*/
/* 							})*/
/* */
/* 							//时间*/
/* 							if(!ace.vars['old_ie']) {*/
/* 								$('#templateCon #date-timepicker1').datetimepicker({*/
/* 									// format: 'YYYY-MM-DD', //use this option to display seconds*/
/* 									icons: {*/
/* 										time: 'fa fa-clock-o',*/
/* 										date: 'fa fa-calendar',*/
/* 										up: 'fa fa-chevron-up',*/
/* 										down: 'fa fa-chevron-down',*/
/* 										previous: 'fa fa-chevron-left',*/
/* 										next: 'fa fa-chevron-right',*/
/* 										today: 'fa fa-arrows ',*/
/* 										clear: 'fa fa-trash',*/
/* 										close: 'fa fa-times'*/
/* 									}*/
/* 								}).next().on(ace.click_event, function() {*/
/* 									$(this).prev().focus();*/
/* 								});*/
/* 							}*/
/* 						}*/
/* 					})*/
/* */
/* 					$('#showBox .title').text('投诉建议');*/
/* */
/* 					//保存投诉建议*/
/* 					function addcomplaint() {*/
/* 						$("#templateCon .addcomplaint").click(function() {*/
/* 							var data = $("#complaint_advice_table").find("input,select,textarea");*/
/* 							var titledata = {*/
/* 								customer_id: customer_id*/
/* 							};*/
/* 							var values = $("#templateCon [title_]");*/
/* 							for(var i = 1; i < data.length; i++) {*/
/* 								titledata[$(data[i]).attr("title_")] = $(values[i]).val();*/
/* 							}*/
/* 							var timestamp = Date.parse(new Date($("#templateCon [title_='time']").val()));*/
/* 							titledata["time"] = timestamp / 1000;*/
/* 							ykp.doAjax({*/
/* 								url: '/api/api_service/add_complaint',*/
/* 								methods: 'post',*/
/* 								data: titledata,*/
/* 								success: function(res) {*/
/* 									ykp.prompt("保存成功!");*/
/* 									$('.in').removeClass('modal-backdrop');*/
/* 									$('#showBox').addClass('ishide');*/
/* 									$('.ui-pagination-container').remove();*/
/* 									//									var index = $('.kind').find('.now').index();*/
/* 									var index_1 = $('.kind').find('.now').index();*/
/* 									var ftype = 1;*/
/* 									if(index_1 == 0) {*/
/* 										ftype = 2;*/
/* 										getAccountList(1, ftype)*/
/* 									}*/
/* 									getAccountList(1, ftype);*/
/* 								}*/
/* 							})*/
/* 						})*/
/* 					}*/
/* 				})*/
/* 			}*/
/* */
/* 			complaint_advice();*/
/* */
/* 			//启动layui,新增发票采集*/
/* 			if(statu) {*/
/* 				layui.use('element', function() {*/
/* 					var element = layui.element;*/
/* 					newTicketCollect(dataList, element);*/
/* 				});*/
/* 			}*/
/* */
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
/* 		//新增发票采集*/
/* 		function newTicketCollect(dataList, element) {*/
/* 			//点击td事件打开进项采集*/
/* 			$(dataList + " td[data-status='0']," + dataList + " td[data-status='3']").click(function() {*/
/*                 var it= $(this);*/
/*                 var uid = ykp.getCookie('uid');*/
/* 				if($(this).attr('handStatus') != 1) {*/
/* 					var status = ['未激活', '已激活', '已挂起', '已结束', '已作废'];*/
/* 					ykp.prompt(status[$(this).attr('handStatus')] || "不可操作");*/
/* 					return false;*/
/* 				}*/
/* */
/* 				if($(this).attr('fuze_ids').indexOf(uid) == -1) {*/
/* 					ykp.prompt("您不是该公司的负责人");*/
/* 					return false;*/
/* 				}*/
/* */
/* 				if($(this).attr('fuze_id').indexOf(uid) == -1) {*/
/* 					ykp.prompt("您不是合同的负责人");*/
/* 					return false;*/
/* 				}*/
/* 				//作废未收款不能添加*/
/* 				if($(this).attr('get_money') == -1 && $(this).attr('handStatus') == '4' || $(this).attr('handStatus') == '3') {*/
/* 					ykp.prompt('订单已解约，不能编辑');*/
/* 					return false;*/
/* 				}*/
/* */
/* 				var customer_id = $(this).parents('tr').attr("cid");*/
/*                 var customer_name = $(this).parents('tr').find("[data-num=1] .customerDetail").text().trim();*/
/*                 var user = $(this).parents('tr').find("[data-num=8]").text().trim();*/
/* 				var year_month = $(this).attr('data-month');*/
/* 				var id = $(this).attr('data-id'); //service-id*/
/* 				showMark('#addList');*/
/* 				//点击已驳回的渲染数据*/
/* 				if($(this).attr("data-status") == 3){*/
/*                     ykp.doAjax({*/
/*                         url: '/api/api_service/customer_details_list',*/
/*                         data: {*/
/*                             service_id: id,*/
/*                         },*/
/*                         method: 'post',*/
/*                         success: function(res) {*/
/*                             var _data = res.data.list*/
/*                             //使用Layui面板*/
/*                             layui.use('element',function(){*/
/*                                 var element = layui.element;*/
/*                                 invoice_detail(_data,element);*/
/*                             });*/
/* */
/*                             //发票采集详情*/
/*                             function invoice_detail(data,element){*/
/*                                     var index = $(this).parents('tr').index();*/
/*                                     var tax_type = $(this).attr('tax_type');*/
/*                                     var service_id = id*/
/* */
/*                                     //showMark('#invoice_collect');*/
/*                                     element.init('collapse');*/
/*                                     //$('#showBox .title').text('发票采集详情');*/
/*                                    /* if(tax_type == 1){*/
/*                                         $('#templateCon .jxcj').show();*/
/*                                     }*//* */
/* */
/*                                     //获取发票采集数据*/
/*                                     getInvoiceCollectData(data,element);*/
/*                             }*/
/* */
/*                         }*/
/*                     })*/
/*                 }*/
/* */
/*                 //获取发票采集数据*/
/*                 function getInvoiceCollectData(data,element){*/
/* */
/*                     var _ztype;*/
/*                     var model;*/
/*                     var _model;*/
/*                     var html;*/
/*                     console.log(data);*/
/*                     for(var itemvl in data){*/
/*                         var _data= data[itemvl]*/
/*                         if (!_data || _data === []) {*/
/*                             continue;*/
/*                         }*/
/*                         for(var i in _data){*/
/* 							_ztype = _data[i].ztype;*/
/* 							model = $('#templateCon #' + _ztype).find('.model').html();*/
/* 							_model = $(model);*/
/* 							html = $('<tr></tr>');*/
/* 							if (!$('#templateCon #' + _ztype).parents('.layui-colla-content').hasClass('layui-show')) {*/
/* 								$('#templateCon #' + _ztype).parents('.layui-colla-content').addClass('layui-show');*/
/* 							}*/
/* 							_model.eq(0).text($('#templateCon #' + _ztype).find('tr').length);*/
/* 							_model.find('[field]').each(function (index, element) {*/
/* 								if ($(this).attr('field') == 'charge_mode') {*/
/* 									$(this).val(_data[i]['charge_mode'] != 0 ? _data[i]['charge_mode'] : 1).change();*/
/* 									return true;*/
/* 								}*/
/* 								if ($(this).attr('field') == 'tax_project') {*/
/* 									$(this).val(_data[i]['tax_project'] != 0 ? _data[i]['tax_project'] : 1).change();*/
/* 									return true;*/
/* 								}*/
/* 								if ($(this).attr('field') == 'is_invalid') {*/
/* 									$(this).parent().text(_data[i]['is_invalid'] != 0 ? '作废' : '未作废');*/
/* 									return true;*/
/* 								}*/
/* 								if ($(this).attr('field') == 'whether_tax') {*/
/* 									$(this).parent().text(_data[i]['whether_tax'] != 0 ? '是' : '否');*/
/* 									return true;*/
/* 								}*/
/* 								if ($(this).attr('field') == 'deductible') {*/
/* 									$(this).parent().text(_data[i]['deductible'] != 0 ? '是' : '否');*/
/* 									return true;*/
/* 								}*/
/* 								if ($(this).attr('field') == 'auth_time') {*/
/* 								    if(_data[i]['auth_time'] != 0){*/
/*                                         $(this).val( cs.getNowTime(_data[i]['auth_time'])).change();*/
/* 									}*/
/* */
/* 									return true;*/
/* 								}*/
/* 								if ($(this).attr('field') == 'type') {*/
/* 									$(this).val(_data[i]['type'] != "" ? _data[i]['type'] : '').change();*/
/* 									return true;*/
/* 								}*/
/* 								if ($(this).attr('field') == 'tax_rate') {*/
/* 									$(this).val(_data[i]['tax_rate']).change();*/
/* 									return true;*/
/* 								}*/
/* 								if ($(this).attr('field') == 'tax_money_period') {*/
/* 									$(this).val(_data[i]['tax_money_period']);*/
/* 								}*/
/* */
/* 								$(this).val(_data[i][$(this).attr('field')]);*/
/* 							});*/
/* */
/* 							html.append(_model);*/
/* 							$('#templateCon #' + _ztype).append(html);*/
/*                     	}*/
/*                     }*/
/* */
/*                     var total = 0;*/
/*                     $('#templateCon [total]').each(function(index,element){*/
/*                         $(element).parents('table').find('tbody tr').not('.model').find('td:eq('+ $(element).index() +')').each(function(i,e){*/
/*                             total += $(e).text().trim() ? parseFloat($(e).text().trim()) : 0;*/
/*                         });*/
/*                         $(element).text(total);*/
/*                         total = 0;*/
/*                     });*/
/* */
/*                     element.init('collapse');*/
/*                 }*/
/* */
/* */
/* 				$('#templateCon #sendMsg').attr('customer_id', customer_id);*/
/*                 $('#templateCon #sendMsg').attr('user', user);*/
/*                 $('#templateCon #sendMsg').attr('year_month', year_month);*/
/*                 $('#templateCon #sendMsg').attr('customer_name', customer_name);*/
/* 				$('#templateCon').css('width', '1060px');*/
/* 				$('#templateCon').data('flag', '1');*/
/* 				$('#templateCon .close_get').unbind('click').click(function() {*/
/* 					$('#templateCon').css('width', 'auto');*/
/* 					$('#templateCon').data('flag', '2');*/
/* 					cs.close();*/
/* 				});*/
/* */
/* 				element.init('collapse'); //初始化layui*/
/* */
/* 				$('#showBox .title').text('发票采集');*/
/* */
/* 				//是否显示进项采集*/
/* 				if($('.kind .now').index() == 0) {*/
/* 					$('#templateCon .jxcj').hide();*/
/* 				} else {*/
/* 					$('#templateCon .jxcj').show();*/
/* 				}*/
/* 				var getYearAndMonth = cs.getYearAndMonth('2015-1-1', '2025-12-31');*/
/* 				//				$('#templateBox').find('select[field=tax_money_period]').select2({allowClear:true});*/
/* 				//点击 +  添加一条记录*/
/* 				addItem();*/
/* */
/* 				//保存发票采集数据*/
/* 				saveTicketCollectData(id, year_month,it);*/
/*                 $("#temHeader").width($("#showBox").width()-47);*/
/* 			})*/
/* 		}*/
/* */
/* 		function sendMsg(id, type,param) {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_common/send_customer',*/
/* 				data: {*/
/* 					customer_id: id,*/
/* 					type: type,*/
/*                     param: JSON.stringify(param)*/
/* 				},*/
/* 				method: 'post',*/
/* 				success: function(res) {*/
/* 					ykp.prompt('短信发送成功！');*/
/* 				}*/
/* 			})*/
/* 		}*/
/* 		//保存发票采集数据*/
/* 		function saveTicketCollectData(id, month_ids,elit) {*/
/* 			$('#templateCon .sure_button').click(function() {*/
/* */
/* 				var postdata = {*/
/* 					'service_id': id,*/
/* 					'year_month_id': month_ids*/
/* 				};*/
/* 				var index = $(this).index();*/
/* */
/* 				var is_send = false;*/
/* 				if($('#templateCon #sendMsg input:checked').val() == 1) {*/
/* 					is_send = true;*/
/* 				}*/
/* 				var customer_id = $('#templateCon #sendMsg').attr('customer_id');*/
/* 				var flag = true;*/
/* 				var _postdata = [];*/
/* 				$('#templateCon tbody tr').not(':hidden').each(function(i, e) {*/
/* 					//验证格式*/
/* 					if(!validateFormat($(this))) {*/
/* 						ykp.prompt('请填写正确格式！');*/
/* 						flag = false;*/
/* 						return false;*/
/* 					}*/
/* */
/* 					//获取数据*/
/* 					_postdata.push(getTrData($(this)));*/
/* 				});*/
/* */
/* 				if(!flag) {*/
/* 					return;*/
/* 				}*/
/* */
/* 				postdata['colData'] = JSON.stringify(_postdata);*/
/* 				if(index == 3) {*/
/* 					postdata['colData'] = JSON.stringify([]);*/
/* 					postdata['type'] = 1;*/
/*                     layui.use('layer', function() {*/
/*                         var layer = layui.layer;*/
/*                         layer.confirm('确定要无数据保存吗？', function() {*/
/*                             saveinfor()*/
/* 							ykp.prompt('保存成功！');*/
/*                             layer.closeAll();*/
/*                         });*/
/*                     })*/
/* 				} else {*/
/*                     if(_postdata.length == 0) {*/
/* 						ykp.prompt('没有数据不能保存！');*/
/* 						return;*/
/* 					}*/
/*                     saveinfor()*/
/* 				}*/
/*                 function saveinfor(){*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_service/add_customer_details',*/
/* 						method: 'post',*/
/* 						data: postdata,*/
/* 						success: function(res) {*/
/* 							cs.close();*/
/* 							elit.unbind().find("label").addClass('fa fa-circle-o');*/
/* 							var tax_type = $('.kind .now').index() == 0 ? 2 : 1;*/
/* 						//	getAccountList(1, tax_type);*/
/* 							if(is_send) {*/
/* 								var param = {*/
/* 									name: $('#templateCon #sendMsg').attr("customer_name"),*/
/* 									time: $('#templateCon #sendMsg').attr('dyear_month'),*/
/* 									user: $('#templateCon #sendMsg').attr("user")*/
/* 								}*/
/* 								sendMsg(customer_id,'发票采集',param);*/
/* 							}*/
/* 	//*/
/* 						}*/
/* 					});*/
/*                 }*/
/* 			});*/
/* 		}*/
/* */
/* 		//获取请求数据*/
/* 		function getTrData(el) {*/
/* 			var postdata = {*/
/* 				ztype: el.parent().attr('id')*/
/* 			};*/
/* 			el.find('[field]').each(function(i, e) {*/
/* 				if($(this).attr('field') === 'auth_time') {*/
/* 					postdata[$(this).attr('field')] = new Date($(this).val()) / 1000;*/
/* 					return true;*/
/* 				}*/
/* 				postdata[$(this).attr('field')] = $(this).val();*/
/* 			});*/
/* 			return postdata;*/
/* 		}*/
/* */
/* 		//验证格式*/
/* 		function validateFormat(el) {*/
/* 			var flag = true;*/
/* 			el.find('input').each(function(i, e) {*/
/* 				if($(this).val().trim() === '') {*/
/* 					flag = false;*/
/* 					return false;*/
/* 				}*/
/* 			});*/
/* 			return flag;*/
/* 		}*/
/* */
/* 		//统计份额  金额 税额*/
/* 		function countItems() {*/
/* 			//是否作废 切换 统计数据改变 */
/* 			$('#templateCon').unbind('change').on('change', '[field="is_invalid"]', function() {*/
/* 				var it = $(this);*/
/* 				var total = ''; //统计数据*/
/* 				var item = ''; //单条数据*/
/* 				if(it.val() == 0) {*/
/* 					it.parents('table').find('[total]').each(function(i, e) {*/
/* 						total = $(e).text().trim();*/
/* 						item = it.parents('tr').find('[field=' + $(e).attr('total') + ']').val().trim();*/
/* */
/* 						if($(e).attr('total') == 'amount_of_tax') {*/
/* 							$(e).text(eval((total ? total : '0') + '+' + (item ? item : '0')).toFixed(2));*/
/* 							total = '';*/
/* 							item = '';*/
/* 							return true;*/
/* 						}*/
/* 						$(e).text(eval((total ? total : '0') + '+' + (item ? item : '0')));*/
/* 						total = '';*/
/* 						item = '';*/
/* 					});*/
/* 				}*/
/* 				if(it.val() == 1) {*/
/* 					it.parents('table').find('[total]').each(function(i, e) {*/
/* 						total = $(e).text().trim();*/
/* 						item = it.parents('tr').find('[field=' + $(e).attr('total') + ']').val().trim();*/
/* */
/* 						if($(e).attr('total') == 'amount_of_tax') {*/
/* 							$(e).text(eval((total ? total : '0') + '-' + (item ? item : '0')).toFixed(2));*/
/* 							total = '';*/
/* 							item = '';*/
/* 							return true;*/
/* 						}*/
/* 						$(e).text(eval((total ? total : '0') + '-' + (item ? item : '0')));*/
/* 						total = '';*/
/* 						item = '';*/
/* 					});*/
/* 				}*/
/* 			});*/
/* */
/* 			//切换税率，计算税额，再判断是否为未作废状态，是则统计税额数据：税额 = 金额 * 税率*/
/* 			$('#templateCon [field="tax_rate"]').unbind('change').change(function() {*/
/* 				$(this).parents('tr').find('[field="amount_of_tax"]').val(($(this).val() * $(this).parents('tr').find('[field="money"]').val() / 100).toFixed(2));*/
/* */
/* 				if($(this).parents('tr').find('[field="is_invalid"]').val() == 1) {*/
/* 					return;*/
/* 				}*/
/* */
/* 				//税额总额*/
/* 				var total = 0;*/
/* 				$(this).parents('tbody').find('[field=amount_of_tax]').not(':hidden').each(function(i, e) {*/
/* 					total += parseFloat($(e).val().trim() ? $(e).val().trim() : '0');*/
/* 				});*/
/* 				$(this).parents('table').find('[total=amount_of_tax]').text(total.toFixed(2));*/
/* 			});*/
/* */
/* 			//份额  金额 失去焦点 且 未作废状态  统计数据改变*/
/* 			$('#templateCon').unbind('blur').on('blur', '[field="invoice"],[field="money"],[field="amount_of_tax"]', function() {*/
/* 				//如果是金额输入框失去焦点，先计算税额，再统计数据:税额 = 金额 * 税率*/
/* 				if($(this).attr('field') == 'money') {*/
/* 					$(this).parents('tr').find('[field="amount_of_tax"]').val(($(this).val() * $(this).parents('tr').find('[field="tax_rate"]').val() / 100).toFixed(2));*/
/* 				}*/
/* */
/* 				if($(this).parents('tr').find('[field="is_invalid"]').val() == 1) {*/
/* 					return;*/
/* 				}*/
/* */
/* 				//份数或金额总额*/
/* 				var total = 0;*/
/* 				//税额总额*/
/* 				var total_amount_of_tax = 0;*/
/* 				$(this).parents('tbody').find('[field=' + $(this).attr('field') + ']').not(':hidden').each(function(i, e) {*/
/* 					total += parseFloat($(e).val().trim() ? $(e).val().trim() : '0');*/
/* 					total_amount_of_tax += parseFloat($(e).parents('tr').find('[field="amount_of_tax"]').val().trim() ? $(e).parents('tr').find('[field="amount_of_tax"]').val().trim() : '0');*/
/* 				});*/
/* 				$(this).parents('table').find('[total=' + $(this).attr('field') + ']').text(total.toFixed(2));*/
/* 				$(this).parents('table').find('[total=amount_of_tax]').text(total_amount_of_tax.toFixed(2));*/
/* 			});*/
/* 		}*/
/* */
/* 		//点击 +  添加一条记录*/
/* 		function addItem() {*/
/* 			$('#templateCon .increase').unbind('click').click(function() {*/
/* 				if($(this).parents('table').find('tbody tr').not(':hidden').length == 5) {*/
/* 					ykp.prompt('最多只能添加5条记录!');*/
/* 					return;*/
/* 				}*/
/* 				var html = $(this).parents('table').find('tbody tr').eq(0).html();*/
/* 				$(this).parents('table').find('tbody').append('<tr>' + html + '</tr>');*/
/* */
/* 				//认证日期*/
/* 				if(!ace.vars['old_ie']) {*/
/* 					$('.date-timepicker1').datetimepicker({*/
/* 						format: 'YYYY-MM-DD', //use this option to display seconds*/
/* 						icons: {*/
/* 							time: 'fa fa-clock-o',*/
/* 							date: 'fa fa-calendar',*/
/* 							up: 'fa fa-chevron-up',*/
/* 							down: 'fa fa-chevron-down',*/
/* 							previous: 'fa fa-chevron-left',*/
/* 							next: 'fa fa-chevron-right',*/
/* 							today: 'fa fa-arrows ',*/
/* 							clear: 'fa fa-trash',*/
/* 							close: 'fa fa-times'*/
/* 						}*/
/* 					})*/
/* 				}*/
/* */
/* 				//点击 -  删除一条记录*/
/* 				removeItem();*/
/* */
/* 				//统计份额  金额 税额*/
/* 				countItems();*/
/* 			});*/
/* 		}*/
/* */
/* 		//点击 -  删除一条记录*/
/* 		function removeItem() {*/
/* 			$('#templateCon .decrease').unbind('click').click(function() {*/
/* 				var it = $(this);*/
/* */
/* 				//如果为未作废状态的情况的话，需要先将统计数据减去该条数据中对应的数据*/
/* 				if(!it.parents('tr').find('[field="is_invalid"]').val() || it.parents('tr').find('[field="is_invalid"]').val() == '0') {*/
/* 					it.parents('table').find('[total]').each(function(i, e) {*/
/* 						total = $(e).text().trim();*/
/* 						item = it.parents('tr').find('[field=' + $(e).attr('total') + ']').val().trim();*/
/* */
/* 						if($(e).attr('total') == 'amount_of_tax') {*/
/* 							$(e).text(eval((total ? total : '0') + '-' + (item ? item : '0')).toFixed(2));*/
/* 							total = '';*/
/* 							item = '';*/
/* 							return true;*/
/* 						}*/
/* */
/* 						$(e).text(eval((total ? total : '0') + '-' + (item ? item : '0')));*/
/* */
/* 						total = '';*/
/* 						item = '';*/
/* 					});*/
/* 				}*/
/* 				it.parents('tr').remove();*/
/* 			});*/
/* 		}*/
/* */
/* 		//搜索*/
/* 		search();*/
/* */
/* 		function search() {*/
/* 			var data = {*/
/* 				url: '/api/api_service/service_list',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					"type": 4,*/
/* 					order: order*/
/* 				}*/
/* 			}*/
/* */
/* 			cs.doSearch('.search', data, 'where', true, function(res, _filter) {*/
/* 				filter = _filter;*/
/* 				var dataList, pagination;*/
/* 				var type = $('.kind').find('.now').index();*/
/* 				data.data.where = type == 0 ? "khm_customer.tax_type=2" : "khm_customer.tax_type=1";*/
/* 				dataList = type == 0 ? '#dataList' : '#dataList1';*/
/* 				pagination = type == 0 ? '#pagination1' : '#pagination2';*/
/* 				generateMonthTh($('#dynamic-table .thColor .month'), res['data']['months'], type);*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$(dataList).html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d clear:none;" class="page">暂无数据</div></td></tr>');*/
/* 					return false;*/
/* 				} else {*/
/* */
/* 					addList(res, (type == 0 ? 2 : 1), dataList, pagination);*/
/* 				}*/
/* 			}, '', {*/
/* 				url: "/api/api_service/assistant_list_new "*/
/* 			})*/
/* 		}*/
/* */
/* 		cs.setFuze({*/
/* 			check: true,*/
/* 			conId: ["#dataList", "#dataList1"],*/
/* 			type: "4",*/
/* 			url: "/api/api_service/transfer_user",*/
/* 			fun: function(ftype) {*/
/* 				getAccountList(1, ftype);*/
/* 			}*/
/* 		});*/
/*         doHserch();*/
/* */
/* 		function doHserch() {*/
/*             var data = {*/
/* 				url: '/api/api_service/service_list',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					"type": 4,*/
/* 					order: order,*/
/* 				}*/
/* 			}*/
/* 			cs.hSearch('.search1', data, 'where', true, function(res, _filter, month) {*/
/*                 $('.in').click();*/
/* 				filter = _filter;*/
/* 				month2 = month;*/
/* 				var index = $('.kind').find('.now').index();*/
/* 				var dataList = index == 0 ? '#dataList' : '#dataList1';*/
/* 				var hSearchTable = index == 0 ? '#heightsearch1' : '#height_search1';*/
/* 				var butt = index == 0 ? '#heightsearch' : '#height_search';*/
/* */
/* 				$(butt).removeClass('active');*/
/* 				$(hSearchTable).slideUp();*/
/* 				hMonth = cs.last_year_month();*/
/* 				generateMonthTh($('#dynamic-table .thColor .month'), res['data']['months'], (index == 0 ? 2 : 1));*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$(dataList).html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center; clear:none;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					return false;*/
/* 				}*/
/* */
/* 				addList(res, (index == 0 ? 2 : 1), dataList);*/
/* 			}, '', {*/
/* 				url: "/api/api_service/assistant_list_new "*/
/* 			})*/
/* 		}*/
/* */
/* 		//自定义列表*/
/*        /* console.log(222);*/
/*         cs.custorm_check('#dynamic-table1', '#dataList', true);*//* */
/* 		//cs.setPagination('#pagination', 5, 50, 5, getPageList);*/
/* 		//cs.setPagination('#pagination1', 5, 50, 5, getPageList);*/
/* */
/* 		$('#dynamic-table1 tbody').on('click', 'td', function(e) {*/
/* 			var id = $(this).parent().attr('data-id');*/
/* 			//获取当前行的下标*/
/* 			//console.log($(this).attr('data-type'))*/
/* 			var type = $(this).attr('data-type');*/
/* 			var index = $(this).parent().index();*/
/* 			var trIndex = $(this).parents('tr').find('td').index($(this));*/
/* 			var id = $(this).attr('id');*/
/* 			switch(type) {*/
/* 				case '0':*/
/* 					setPageStatus(trIndex);*/
/* 					break;*/
/* 				case '1':*/
/* 					alert('我点击了逾期名称');*/
/* 					break;*/
/* 				case '2':*/
/* 					getCompanyInfo(id)*/
/* 					break;*/
/* 				default:*/
/* 					break;*/
/* 			}*/
/* */
/* 			function getCompanyInfo(id) {*/
/* */
/* 			}*/
/* */
/* 			function setPageStatus(trIndex) {*/
/* 				//获取点击当前行的列下标*/
/* 				var thAry = $('#dynamic-table1  thead th').eq(trIndex).text();*/
/* 				showMark('#addList');*/
/* 			}*/
/* */
/* 			// 点击逾期*/
/* 			function dataTime() {*/
/* */
/* 			}*/
/* 		});*/
/* */
/* 		//打开投诉列表，加载投诉信息*/
/* 		$('.js_complaint').click(function() {*/
/* 			showMark('#complaint_list');*/
/* 			$('#showBox .title').text('投诉列表');*/
/* 			//加载所有员工*/
/* 			getAllData();*/
/* */
/* 			function getAllData(page) {*/
/* 				var page_size = page || "10";*/
/* 				var order = 'jzm_complaint.status asc';*/
/* 				ykp.list({*/
/* 					url: '/api/api_service/list_complaint',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						page: 1,*/
/* 						limit: page_size,*/
/* 						order: order*/
/* 					},*/
/* 					pageBar: {*/
/* 						id: '.pageBar'*/
/* 					},*/
/* 					loadList: function(res) {*/
/* 						if(res.data.items == "") {*/
/* 							setTimeout(function() {*/
/* 								ykp.prompt('暂无数据！');*/
/* 							}, 1000);*/
/* 							$("#templateBox #complaint_datalist").html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center" class="page">暂无数据</div></td></tr>');*/
/* 						} else {*/
/* 							renderTable(res.data);*/
/* 						}*/
/* 					}*/
/* 				});*/
/* 			};*/
/* */
/* 			function renderTable(datas) {*/
/* 				var me = JSON.parse(ykp.getCookie('userinfo'));*/
/* 				var data = datas.items;*/
/* 				ykp.setCookie('page_no', datas.curPage, (1 / 24));*/
/* 				$("#templateBox #complaint_datalist").html('');*/
/* 				for(var i in data) {*/
/* */
/* 					var showMsg = data[i]['jzm_complaint.remark'] && data[i]['jzm_complaint.remark'].length > 10 ? data[i]['jzm_complaint.remark'].substring(0, 10) + '...' : data[i]['jzm_complaint.remark'];*/
/* 					var showRemark = data[i]['jzm_complaint.auth_remark'] && data[i]['jzm_complaint.auth_remark'].length > 10 ? data[i]['jzm_complaint.auth_remark'].substring(0, 10) + '...' : data[i]['jzm_complaint.auth_remark'];*/
/* 					var showContent = data[i]['jzm_complaint.content'] && data[i]['jzm_complaint.content'].length > 10 ? data[i]['jzm_complaint.content'].substring(0, 10) + '...' : data[i]['jzm_complaint.content'];*/
/* */
/* 					var approveFlag = true; //审批开关*/
/* 					if(!cs.getNodes([283, 289], true)) {*/
/* 						approveFlag = false;*/
/* 					}*/
/* 					//					approveFlag = true;*/
/* 					var hasAuth = true; //审批权限*/
/* 					if(!cs.getNodes([117, 289], true)) { //没有权限*/
/* 						hasAuth = false;*/
/* 					}*/
/* */
/* 					//给保存按钮添加是否活跃逻辑					*/
/* 					var canClick = true;*/
/* 					if(me['id'] == data[i].dutoInfo.id) { //是负责人*/
/* 						if(data[i]['jzm_complaint.status'] == 0) { //未解决*/
/* 							canClick = true;*/
/* 						} else {*/
/* 							canClick = false;*/
/* 						}*/
/* 					} else { //不是负责人,执行审批操作*/
/* 						if(approveFlag) { //审批开关打开*/
/* 							if(data[i]['jzm_complaint.status'] == 0) { //未解决*/
/* 								canClick = false;*/
/* 							} else {*/
/* 								if(data[i]['jzm_complaint.auth_status'] == '2') {*/
/* 									canClick = false;*/
/* 								} else {*/
/* 									if(hasAuth) { //有权限，可点击*/
/* 										canClick = true;*/
/* 									} else { //没权限，不可点击*/
/* 										canClick = false;*/
/* 									}*/
/* 								}*/
/* 							}*/
/* 						} else { //审批开关关闭*/
/* 							canClick = false;*/
/* 						}*/
/* */
/* 					}*/
/* 					if(data[i]['jzm_complaint.status'] == '1' && data[i]['jzm_complaint.auth_status'] == '2') { //解决且审核通过，按钮不可点击*/
/* 						canClick = false;*/
/* 					}*/
/* */
/* 					/**/
/* 					审核逻辑：*/
/* 					1.负责人未完成，不能提交审核；*/
/* 					2.不能自己审核自己负责的投诉建议；*/
/* 					3.审核未通过，解决状态自动翻转为未解决。*/
/* 					*//* */
/* 					/*负责人提交逻辑：*/
/* 					1.只能提交操作负责人为本人的投诉建议;*/
/* 					2.状态未翻转，不能提交；*/
/* 					3.第一次提交后，审核状态变成提交审核，若第一次审核未通过，后续审核状态在负责人提交时不变。*/
/* 					*//* */
/* 					//					${data[i]['jzm_complaint.status']==0?'disabled':''}*/
/* 					var tr = `<tr complaint_id="${data[i]['jzm_complaint.id']}" duto_id="${data[i].dutoInfo.id}">*/
/* 							*/
/* 							<td class="center" title="" style="line-height:40px">${data[i]['khm_customer.name']}</td>*/
/* 							<td class="center" title="customer_name" style="line-height:40px">${data[i]['jzm_complaint.customer_name']}</td>*/
/* 							<td class="center" title="customer_tel" style="line-height:40px">${data[i]['jzm_complaint.customer_tel']}</td>*/
/* 							<td class="center" title="time" style="line-height:40px">${cs.getNowTime(data[i]['jzm_complaint.time'])}</td>*/
/* 							<td class="center" title="${data[i]['jzm_complaint.content']}" style="line-height:40px">${showContent}</td>*/
/* 							<td class="center" title="remark" style="line-height:40px">*/
/* 								<input maxlength="40" class="center js_remark" title="${data[i]['jzm_complaint.remark']}" value="${showMsg}" ${data[i]['jzm_complaint.status']==1||me['id']!=data[i].dutoInfo.id?'disabled':''}  />*/
/* 							</td>*/
/* 							<td class="center emps"  title="duto" style="line-height:40px">*/
/* 								${data[i].dutoInfo.name}*/
/* 							</td>*/
/* */
/* 							<td class="center" title="status" style="line-height:40px">*/
/* 								<select title="status" ${data[i]['jzm_complaint.status']==1||me['id']!=data[i].dutoInfo.id?'disabled':''} >*/
/* 									<option value="0" ${data[i]['jzm_complaint.status']==0?'selected':''} >未解决*/
/* 									</option>*/
/* 									<option value="1" ${data[i]['jzm_complaint.status']==1?'selected':''} >已解决*/
/* 									</option>*/
/* 									*/
/* 								</select>*/
/* 							</td>*/
/* 							*/
/* 							<td class="center" title="remark" style="line-height:40px">*/
/* 								<input maxlength="40" class="center complaint_remark" title="${data[i]['jzm_complaint.complete_remark']}" value="${data[i]['jzm_complaint.complete_remark']}" ${data[i]['jzm_complaint.status']==1||me['id']!=data[i].dutoInfo.id?'disabled':''}  />*/
/* 							</td>*/
/* 							<td class="center" title="create_id" style="line-height:40px">${data[i].createInfo.name}</td>*/
/* 							<td class="center" title="create_time" style="line-height:40px">${cs.getNowTime(data[i]['jzm_complaint.create_time'])}</td>*/
/* 							<td class="center" title="auth_id" style="line-height:40px">${data[i].authInfo&&data[i].authInfo.name?data[i].authInfo.name:' '}</td>*/
/* 							<td class="center" title="auth_time" style="line-height:40px">${data[i]['jzm_complaint.anth_time']&&data[i]['jzm_complaint.anth_time']>0?cs.getNowTime(data[i]['jzm_complaint.anth_time']):'-'}</td>*/
/* 							<td class="center" title="auth_status" style="line-height:40px">*/
/* 							 <select title="auth_status" ${approveFlag?'':'disabled'} ${data[i]['jzm_complaint.auth_status']==2?' disabled':''}*/
/* 								 ${me['id']==data[i].dutoInfo.id?'disabled':''} ${hasAuth?'':'disabled'}*/
/* 								>	*/
/* 									*/
/* 									<option value="0" ${data[i]['jzm_complaint.auth_status'] == 0?'selected':''} >请选择*/
/* 									</option>*/
/* 									<option value="1" ${data[i]['jzm_complaint.auth_status']==1?'selected':''} >未通过*/
/* 									</option>*/
/* 						*/
/* 									<option value="2" ${data[i]['jzm_complaint.auth_status']==2?'selected':''} >已通过*/
/* 									</option>*/
/* */
/* 									*/
/* 									*/
/* 								</select>*/
/* 							</td>*/
/* 							<td class="center" title="auth_remark" style="line-height:40px">*/
/* 								<input maxlength="40" title="${data[i]['jzm_complaint.auth_remark']||''}" value="${showRemark}" ${approveFlag?'':'disabled'}  ${data[i]['jzm_complaint.auth_status']==2?'disabled':''}  ${data[i]['jzm_complaint.status']!=1?'disabled':''} ${me['id']==data[i].dutoInfo.id?'disabled':''}  ${hasAuth?'':'disabled'} class="center js_auth_remark" style="width:100px" />*/
/* 							</td>*/
/* 							<td class="center" title="auth_fix" style="line-height:40px">*/
/* 								<button class="saveComplaint_list btn btn-info btn-sm" ${canClick?'':'disabled'} >保存*/
/* 	  							</button>*/
/*   							</td>*/
/* */
/* 					</tr>`;*/
/* 					//					<option value="0" ${data[i]['jzm_complaint.auth_status']==0?'selected':''} >未开始*/
/* 					//									</option>*/
/* 					//					<option value="3" ${data[i]['jzm_complaint.auth_status']==3?'selected':''} >提交审核*/
/* 					//									</option>*/
/* */
/* 					$("#templateBox #complaint_datalist").append(tr);*/
/* */
/* 				};*/
/* */
/* 				//审批开关*/
/* 				/*if (!cs.getSpStatus('投诉列表')) {*/
/* 					ykp.prompt('暂时没有开启审批功能');*/
/* 					$("#templateBox #complaint_datalist").find('[title="auth_status"],[title="auth_remark"]').children().attr('disabled','disabled');*/
/* 					$("#templateBox #complaint_datalist").find('.saveComplaint_list').attr('disabled','disabled');*/
/* 				};*//* */
/* 				//是否有审批权限*/
/* 				/*if (!cs.getNodes([117],true)) {*/
/* 					console.log(cs.getNodes([117],true));*/
/* 					ykp.prompt('你没有审批权限');*/
/* 					$("#templateBox #complaint_datalist").find('[title="auth_status"],[title="auth_remark"]').children().attr('disabled','disabled');*/
/* 					$("#templateBox #complaint_datalist").find('.saveComplaint_list').attr('disabled','disabled');*/
/* 				};*//* */
/* */
/* 				//加载负责人*/
/* 				/*ykp.doAjax({*/
/* 					url: '/api/api_employees/grid',*/
/* 					methods: 'post',*/
/* 					data: {*/
/* 						page: 1,*/
/* 						limit: 9999*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data.items;*/
/* 						var emps = [];*/
/* 						for(var i in data) {*/
/* 							var emp = {};*/
/* 							emp["id"] = data[i]['bmm_employees.id'];*/
/* 							emp["name"] = data[i]['bmm_employees.name'];*/
/* 							emps.push(emp);*/
/* 						}*/
/* */
/* 						var selects = $("#templateBox #complaint_datalist").find(".emps");*/
/* 						var option = '';*/
/* 						for(var i in emps) {*/
/* 							option += `<option value="${emps[i]["id"]}">${emps[i]["name"]}</option>`;*/
/* 						}*/
/* */
/* 						$(selects).each(function() {*/
/* 							$(this).find("select").html(option);*/
/* 						})*/
/* 					}*/
/* 				});*//* */
/* 				saveComplaint();*/
/*                 $("#temHeader").width($("#showBox").width()-47);*/
/* 			};*/
/* */
/* 			//保存投诉信息*/
/* 			function saveComplaint() {*/
/* 				$("#templateBox .saveComplaint_list").on("click", function() {*/
/* 					var complaints = [];*/
/* 					var id = $(this).parents('tr').attr("complaint_id");*/
/* 					var status = $(this).parent().siblings().find("select[title='status']").val();*/
/* 					var auth_status = $(this).parent().siblings().find("select[title='auth_status']").val();*/
/* 					var remark = $(this).parent().siblings().find(".js_remark").val();*/
/* 					var complete_remark = $(this).parent().siblings().find(".complaint_remark").val();*/
/* 					var auth_remark = $(this).parent().siblings().find(".js_auth_remark").val();*/
/* 					var remark_title = $(this).parent().siblings().find(".js_remark").attr('title');*/
/* 					var auth_remark_title = $(this).parent().siblings().find(".js_auth_remark").attr('title');*/
/* 					if(remark && remark.indexOf('...') != -1 && remark_title && remark_title.length > 10) {*/
/* 						remark = remark_title;*/
/* 					}*/
/* 					if(auth_remark && auth_remark.indexOf('...') != -1 && auth_remark_title && auth_remark_title.length > 10) {*/
/* 						auth_remark = auth_remark_title;*/
/* 					}*/
/* 					if(status == '0') { //负责人提交*/
/* 						ykp.prompt("请翻转解决状态！");*/
/* 						return false;*/
/* 					}*/
/* */
/* 					var me = JSON.parse(ykp.getCookie('userinfo'));*/
/* 					var duto_id = $(this).parents('tr').attr("duto_id");*/
/* 					if(me['id'] != duto_id) { //非本人的操作即为审核人操作*/
/* 						if(auth_status == '0' || auth_status == '3') {*/
/* 							ykp.prompt("请改变审核状态！");*/
/* 							return false;*/
/* 						}*/
/* 					}*/
/* 					//					if(status == '1') {*/
/* 					//						if(auth_status == '1' || auth_status == '2') {*/
/* 					//*/
/* 					//						} else {*/
/* 					//							auth_status = '3';*/
/* 					//						}*/
/* 					//					}*/
/* 					//					console.log(auth_status);*/
/* 					//					return false;*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_service/antu_complaint',*/
/* 						methods: 'post',*/
/* 						data: {*/
/* 							id: id,*/
/* 							status: status,*/
/* 							remark: remark,*/
/* 							auth_status: auth_status,*/
/* 							auth_remark: auth_remark,*/
/* 							complete_remark: complete_remark*/
/* 						},*/
/* 						success: function(res) {*/
/* 							ykp.prompt("保存成功！");*/
/* 							$("#templateBox #complaint_datalist").html('');*/
/* 							/*$('.in').removeClass('modal-backdrop');*/
/* 							$('#showBox').addClass('ishide');*/
/* 							$('.ui-pagination-container').remove();*//* */
/* 							//getAccountList(1, ftype);*/
/* 							getAllData();*/
/* 						}*/
/* 					});*/
/* 				})*/
/* */
/* 			};*/
/* */
/* 			//分页*/
/* 			/*$('#selectChoice').change(function() {*/
/* 				var page_size = $(this).val();*/
/* 				getAllData(page_size);*/
/* 			});*//* */
/* */
/* 		})*/
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
/* */
/* 	//保存工资单*/
/* 	function savewage(kh_id) {*/
/* 		$("#templateCon .save").unbind('click').click(function() {*/
/* 			var data = [];*/
/* 			var state = false;*/
/* 			$("#templateCon #payrollList input").each(function(i) {*/
/* 				if($(this).val() == "") {*/
/* 					ykp.prompt("所有选项不能为空");*/
/* 					// ykp.prompt("")*/
/* 					state = false;*/
/* 					return false;*/
/* 				} else {*/
/* 					state = true;*/
/* 				}*/
/* 			})*/
/* */
/* 			if(state) {*/
/* 				var trs = $("#templateCon #payrollList").find("tr");*/
/* 				trs.each(function(i) {*/
/* 					var tr = {*/
/* 						kh_id: kh_id*/
/* 					};*/
/* 					var tds = $(this).children("td")*/
/* 					//					if($(tds[0]).find("span").text().trim() != "") {*/
/* 					//						tr["id"] =  $(tds[0]).find("span").text().trim();*/
/* 					//					}*/
/* 					if($(tds[0]).attr('data-id')) {*/
/* 						tr["id"] = $(tds[0]).attr('data-id');*/
/* 					}*/
/* 					tr["name"] = $(tds[1]).find("input").val();*/
/* 					tr["basic"] = $(tds[2]).find("input").val();*/
/* 					tr["day"] = $(tds[3]).find("input").val();*/
/* 					tr["day_money"] = $(tds[4]).find("input").val();*/
/* 					tr["social"] = $(tds[5]).find("input").val();*/
/* 					tr["total"] = $(tds[6]).find("input").val();*/
/* 					tr['month'] = $('#templateBox #month select').val();*/
/* 					data.push(tr);*/
/* 				})*/
/* */
/* 				//				console.log(data);*/
/* 				//				return false;*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_customer/hk_wages_add_edit',*/
/* 					methods: 'post',*/
/* 					data: {*/
/* 						coldata: JSON.stringify(data),*/
/* 					},*/
/* 					success: function(res) {*/
/* 						ykp.prompt("保存成功!");*/
/* 						$('.in').removeClass('modal-backdrop');*/
/* 						$('#showBox').addClass('ishide');*/
/* 						$('.ui-pagination-container').remove();*/
/* 						var index = $('.kind').find('.now').index();*/
/* 						var ftype = 1;*/
/* 						if(index == 0) {*/
/* 							ftype = 2;*/
/* 						}*/
/* 						getAccountList(1, ftype);*/
/* 					}*/
/* 				})*/
/* 			}*/
/* 		})*/
/* 	}*/
/* */
/* 	//打印*/
/* 	function printPayBill() {*/
/* 		$('#templateCon .print').unbind('click').on('click', function() {*/
/* 			var print_area = $("#templateCon .print_area")[0].cloneNode(true);*/
/* 			$(print_area).find('input').each(function(i, e) {*/
/* 				$(this).parent().text($(this).val());*/
/* 			});*/
/* 			$("#templateCon .print_box").show();*/
/* 			$("#templateCon .nobody").show();*/
/* 			$("#templateCon .remark").remove();*/
/* 			$("#templateCon .print_area").print({*/
/* 				//Use Global styles*/
/* 				globalStyles: false,*/
/* 				//Add link with attrbute media=print*/
/* 				mediaPrint: false,*/
/* 				//Custom stylesheet*/
/* 				stylesheet: null,*/
/* 				//Print in a hidden iframe*/
/* 				iframe: true,*/
/* 				//Don't print this*/
/* 				noPrintSelector: ".no-print",*/
/* 				//Add this at top*/
/* 				prepend: null,*/
/* 				//Add this on bottom*/
/* 				append: null,*/
/* 				//Log to console when printing is done via a deffered callback*/
/* 				deferred: $.Deferred().done(function() {*/
/* 					savewage(kh_id);*/
/* 					*/
/* 				})*/
/* 			});*/
/* 			$("#templateCon .nobody").hide();*/
/* 			$("#templateCon .print_box").hide();*/
/* 		});*/
/* */
/* 		// $('#templateCon .print').unbind('click').click(function(){*/
/* 		// var bdhtml = window.document.body.innerHTML;*/
/* 		// var sprnstr = "<!--startprint-->";*/
/* 		// var eprnstr = "<!--endprint-->";*/
/* 		// var prnhtml = bdhtml.substr(bdhtml.indexOf(sprnstr) + 17);*/
/* 		// prnhtml = $(prnhtml.substring(0, prnhtml.indexOf(eprnstr)));*/
/* 		// prnhtml.find('#itemsTotal').append(*/
/* 		// 	`<tr>*/
/* 		// 		<td></td>*/
/* 		// 		<td>制表：</td>*/
/* 		// 		<td></td>*/
/* 		// 		<td></td>*/
/* 		// 		<td></td>*/
/* 		// 		<td></td>*/
/* 		// 		<td>审核：</td>*/
/* 		// 		<td></td>*/
/* 		// 		<td></td>*/
/* 		// 	</tr>`*/
/* 		// );*/
/* */
/* 		// prnhtml.find('._print,._save,._addItem').hide();*/
/* 		// prnhtml.find('tr').find('td:last').hide();*/
/* 		// prnhtml.find('#payrollList').find('input').each(function(i,e){*/
/* 		// 	$(this).parent().text($(this).val().trim());*/
/* 		// });*/
/* 		// prnhtml.find('.title').html('工&nbsp;&nbsp;&nbsp;&nbsp;资&nbsp;&nbsp;&nbsp;&nbsp;表');*/
/* */
/* 		// var myWindow = window.open();*/
/* 		// myWindow.document.write(prnhtml.prop('outerHTML'));*/
/* 		// myWindow.print();*/
/* 		// });*/
/* 	}*/
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
/* 			ykp.prompt("导入成功")*/
/* 			if(res.code != 200) {*/
/* 				ykp.prompt(res.msg);*/
/* 				return;*/
/* 			}*/
/* 		});*/
/* */
/* 	});*/
/* </script>*/
