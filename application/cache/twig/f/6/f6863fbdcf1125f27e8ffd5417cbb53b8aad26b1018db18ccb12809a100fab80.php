<?php

/* admin/task/entire.html */
class __TwigTemplate_f7fcc193eccb5d40c67258928ea6db27669b09dc31a73fcaefcbb78b45be3d10 extends Twig_Template
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
</style>
<div class=\"widget-main\">

\t<div class=\"row\" style=\"margin-top: 20px;\">
\t\t<!-- <h3 class=\"header smaller lighter blue\">整单</h3> -->

\t\t<!--普通搜索-->
\t\t<!--<div class=\"col-sx-12\" style=\" float: left;\">
\t\t\t<div class=\"form-group col-xs-12;padding-left: 0px; \">
\t\t\t\t<label class=\"control-label  col-sm-3 no-padding-right \" style=\"padding:0;height:30px; line-height:30px;margin:0px !important; \"> 月份 </label>
\t\t\t\t<div class=\"col-sm-4\" style=\"margin-right: 10px;\">
\t\t\t\t\t<select class=\"\" id=\"select\">
\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t<option value=\"1\">1月</option>
\t\t\t\t\t\t<option value=\"2\">2月</option>
\t\t\t\t\t\t<option value=\"3\"> 3月</option>
\t\t\t\t\t\t<option value=\"4\"> 4月</option>
\t\t\t\t\t\t<option value=\"5\">5月</option>
\t\t\t\t\t\t<option value=\"6\">6月</option>
\t\t\t\t\t\t<option value=\"7\"> 7月</option>
\t\t\t\t\t\t<option value=\"8\"> 8月</option>
\t\t\t\t\t\t<option value=\"9\">9月</option>
\t\t\t\t\t\t<option value=\"10\">10月</option>
\t\t\t\t\t\t<option value=\"11\"> 11月</option>
\t\t\t\t\t\t<option value=\"12\"> 12月</option>
\t\t\t\t\t\t<option value=\"12\"> 每月</option>
\t\t\t\t\t\t<option value=\"12\"> 季度</option>
\t\t\t\t\t\t<option value=\"12\"> 半年</option>
\t\t\t\t\t\t<option value=\"12\"> 寄存</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>-->

\t\t<div style=\"margin-top: 50px;  width: 860px; padding: 0px;\" class=\"row col-xs-12\">
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
\t\t\t\t\t\t<div class=\"infobox-content\" style=\"text-align:center;\">
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
\t\t\t\t\t\t\t<!-- <canvas height=\"57\" width=\"57\"></canvas> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"infobox-data\" style=\"margin-left: 20px;margin-top:3px;\">
\t\t\t\t\t\t<div class=\"infobox-content\" id=\"isOk\"> 已完成</div>

\t\t\t\t\t\t<div class=\"infobox-content\" id=\"noOk\">
\t\t\t\t\t\t\t未完成
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"infobox-content\" id=\"noOk\">
\t\t\t\t\t\t\t未完成
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"infobox infobox-blue2\">
\t\t\t\t\t<div class=\"infobox-progress\">
\t\t\t\t\t\t<!-- #section:pages/dashboard.infobox.easypiechart -->
\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"0\" data-size=\"50\" style=\"height: 57px; width: 57px; line-height: 56px;\">
\t\t\t\t\t\t\t<span class=\"percent\" id=\"percent1\"></span>
\t\t\t\t\t\t\t<!-- <canvas height=\"57\" width=\"57\"></canvas> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"infobox-data\" style=\"margin-left: 20px;     margin-top: 3px;\">
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
\t\t\t\t\t\t\t<!-- <canvas height=\"57\" width=\"57\"></canvas> --></div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"infobox-data\" style=\"margin-left: 20px;     margin-top: 3px;\">
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
\t\t\t\t\t\t\t<!-- <canvas height=\"57\" width=\"57\"></canvas> --></div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"infobox-data\" style=\"margin-left: 20px; margin-top: 3px;\">
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
\t\t<div class=\"row col-xs-12\" id=\"topTool\" style=\"padding-left:0;\">
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px; margin-bottom:5px;\">
\t\t\t\t<input type=\"text\" pts=1 sear=\"customer_name\" placeholder=\"企业名称\" autofocus/>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px; margin-bottom:5px;\">
\t\t\t\t<input type=\"text\" pts=0 sear=\"khm_customer.customer_num\" placeholder=\"企业编码\" autofocus/>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<select style=\"width: 180px\" pts=3 sear=\"jzm_service_info.fuze_id\" class=\"advandced-search select2-hidden-accssible\"  tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\">负责人</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px; margin-bottom:5px;\">
\t\t\t\t<button type=\"button\" id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
                        <i class=\" fa fa-search\"></i>
                    </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px; margin-bottom:5px;\">
\t\t\t\t<button id=\"heightsearch\" title=\"高级搜索\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
\t\t\t\t\t\t<i class=\" fa fa-filter\"></i>
\t\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px; margin-bottom:5px;\">
\t\t\t\t<button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32!important;\">
\t                    <i class=\" fa fa-refresh\"></i>
\t                </button>
\t\t\t</div>
\t\t\t<div contentAuthority=\"94\" class=\"col-sx-4\" style=\" float: left;margin-right: 5px; margin-bottom:5px;\">
\t\t\t\t<label type=\"button\" id=\"mergeItem\" title=\"导入\" style=\"background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"btn btn-info btn-sm mergeItem\" for=\"leading-in\">
\t                            <i class=\"fa fa-sign-in\"></i>
\t           \t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" contentAuthority=\"289\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button type=\"button\" id=\"moveToClue\" title=\" 分配负责人\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"moveToClue btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t\t<i class=\"fa fa-hand-o-right\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div contentAuthority=\"94\" class=\"col-sx-4\" style=\" float: left;margin-right: 5px; margin-bottom:5px;\">
\t\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:290px;height: 36px\">
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px;background: #E6E6E6;\" data-kind=\"0\"> 查看全部</a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"1\"> 我负责的</a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"2\"> 我关注的</a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"3\"> 我的下属</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!--<button type=\"button\" class=\"import btn btn-info btn-sm\" style=\"background-color: #fb9a47 !important; border-color: #fb9a47;\">
\t\t\t\t导入
\t\t\t</button>-->

\t\t\t<!--高级搜索-->
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
\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select gjs=5 sear=\"month\" style=\"width:180px;\">
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
\t\t\t\t\t\t\t<option value=\"12\">12月</option>
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
\t\t\t\t\t\t<select gjs=3 sear=\"ckm_position_num.pos_id\" class=\"cw\" tabindex=\"-1\" aria-hidden=\"true\" style=\"width:180px;\">

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
\t\t\t\t\t\t<label>服务周期</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select gjs=0 sear=\"htm_contract.payment_cycle\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t<option value=\"1\"> 每月</option>
\t\t\t\t\t\t\t<option value=\"3\"> 季度 </option>
\t\t\t\t\t\t\t<option value=\"6\"> 半年 </option>
\t\t\t\t\t\t\t<option value=\"12\"> 一年 </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>负责人</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select style=\"margin-right: 12px !important;width: 180px\" gjs=\"0\" data-type=\"gj\" sear=\"jzm_service_info.fuze_id\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>收款情况</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select gjs=0 sear=\"jzm_service_info.get_money\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t<option value=\"1\"> 已收款 </option>
\t\t\t\t\t\t\t<option value=\"0\"> 未收款 </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>审批状态</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select gjs=0 sear=\"jzm_service_info.status\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t<option value=\"0\"> 未开始</option>
\t\t\t\t\t\t\t<option value=\"1\"> 待审批</option>
\t\t\t\t\t\t\t<option value=\"2\"> 已通过</option>
\t\t\t\t\t\t\t<option value=\"3\"> 未通过</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\"clear:both;padding-top:10px;text-align:center;\">
\t\t\t\t\t\t<button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
\t                        查询
\t                    </button>
\t\t\t\t\t\t<button type=\"button\" id=\"rest\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
\t\t                       重置
\t\t                    </button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"widget-body\">
\t\t\t<!-- class=\"widget-main\" -->
\t\t\t<div>
\t\t\t\t<div style=\"overflow-x:auto;\" class=\"custom_table\">
\t\t\t\t\t<table id=\"dynamic-table\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace\" onclick=\"checkAll(this.checked)\"/>
\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\"></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th data-num=\"1\">企业名称</th>
\t\t\t\t\t\t\t\t<th data-num=\"2\">任务等级</th>
\t\t\t\t\t\t\t\t<th data-num=\"3\">客户编码</th>
\t\t\t\t\t\t\t\t<th data-num=\"4\">仓位编码</th>
\t\t\t\t\t\t\t\t<th data-num=\"5\">税务类型</th>
\t\t\t\t\t\t\t\t<th data-num=\"6\">服务周期</th>
\t\t\t\t\t\t\t\t<th data-num=\"7\">逾期</th>
\t\t\t\t\t\t\t\t<th data-num=\"8\">截止月份</th>
\t\t\t\t\t\t\t\t<th data-num=\"9\">负责人</th>
\t\t\t\t\t\t\t\t<th data-num=\"10\" class=\"month\"></th>
\t\t\t\t\t\t\t\t<th data-num=\"11\" class=\"month\"></th>
\t\t\t\t\t\t\t\t<th data-num=\"12\" class=\"month\"></th>
\t\t\t\t\t\t\t\t<th data-num=\"13\" class=\"month\"></th>
\t\t\t\t\t\t\t\t<th data-num=\"14\" class=\"month\"></th>
\t\t\t\t\t\t\t\t<th data-num=\"15\" class=\"month\"></th>
\t\t\t\t\t\t\t\t<th data-num=\"16\" class=\"month\"></th>
\t\t\t\t\t\t\t\t<th data-num=\"17\" class=\"month\"></th>
\t\t\t\t\t\t\t\t<th data-num=\"18\" class=\"month\"></th>
\t\t\t\t\t\t\t\t<th data-num=\"19\" class=\"month\"></th>
\t\t\t\t\t\t\t\t<th data-num=\"20\" class=\"month\"></th>
\t\t\t\t\t\t\t\t<th data-num=\"21\" class=\"month\"></th>
\t\t\t\t\t\t\t\t<!--<th>操作</th>-->
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody id=\"dataList\">
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left;width: 10%;\" id=\"num\"></div>
\t\t\t\t\t<div id=\"pageBar\" class=\"pagination\"></div>
\t\t\t\t\t<div align=\"right\" style=\"float: right;  width: 10%;\">
\t\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"label_popup\" id=\"export\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t<span style=\"display: inline-block;\">导入整单</span>
\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t</div>
\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t<input type=\"file\" width=\"200px\" style=\"margin: auto;\" id=\"efile\" />
\t\t\t\t<!--<hr>-->
\t\t\t</div>
\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t<button id=\"ghItem\" class=\" btn\">整单模板</button>
\t\t\t\t<button class=\"btn btn-info  submit\" style=\"padding: 6px; border-radius: 0px;\">保存</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 422
        $this->loadTemplate("admin/customerDetail.html", "admin/task/entire.html", 422)->display($context);
        echo " ";
        $this->loadTemplate("admin/mark.html", "admin/task/entire.html", 422)->display($context);
        // line 423
        echo "</div>
<!-- /.widget-main -->
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script>
\tjQuery(function(\$) {
\t\tcs.getNodes([94, 289]);
\t\tvar pagesize = 10;
\t\tvar filter = \"\";
\t\tvar employees = {};
\t\tvar order = 'khm_customer.id desc';
\t\tvar aid = ykp.getCookie(\"aid\");
\t\tvar time = ykp.getCookie(\"time\");

\t\tcs.setFuze({
\t\t\tconId: \"#dataList\",
\t\t\ttype: \"2\",
\t\t\turl: \"/api/api_service/transfer_user\",
\t\t\tfun: function() {
\t\t\t\tgetEntireList();
\t\t\t}
\t\t});

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
\t\t\t\t\ttimestamp = `jzm_service_info.com_time>\${today}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '2':
\t\t\t\t\ttimestamp = `jzm_service_info.com_time<\${today} and jzm_service_info.com_time>\${today-86400}`
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
\t\t\t\t\ttimestamp = `jzm_service_info.com_time<\${today-86400*day_1} jzm_service_info.com_time>\${newdaytime}`;
\t\t\t\t\tbreak;
\t\t\t}
\t\t\tvar where = `\${timestamp}`;
\t\t\tvar data = {
\t\t\t\t\"type\": 2,
\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\"where\": where
\t\t\t}
\t\t\tif(aid != '' || aid != undefined) {
\t\t\t\tdata['staff_name'] = aid;
\t\t\t}
\t\t\tgetEntireList_2(data);
\t\t\tykp.setCookie(\"aid\", \"\", (1 / 24));
\t\t\tykp.setCookie(\"time\", \"\", (1 / 24));
\t\t} else if(ykp.getCookie('detailsId') && ykp.getCookie('detailsId') != '') {
\t\t\tvar id = ykp.getCookie('detailsId');
\t\t\tvar data = {
\t\t\t\t\"type\": 2,
\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\"where\": 'htm_contract.id=' + id
\t\t\t}
\t\t\tgetEntireList_2(data);
\t\t\tykp.setCookie(\"detailsId\", '', (1 / 24));
\t\t} else {
\t\t\t//默认页面初始化数据
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetEntireList(1);
\t\t}

\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_service/service_list',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: where,
\t\t\t\tlimit: pagesize,
\t\t\t\ttype: 2
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '#pageBar'
\t\t\t},
\t\t\tinitOrder: 'khm_customer.id',
\t\t\tdefaultOrder: order,
\t\t\tcontentId: \"#dataList\",
\t\t\tparams: [{
\t\t\t\tid: \"#dynamic-table\",
\t\t\t\tfield: [\"\", \"khm_customer.name\", \"maxLv\", \"customer_num\", \"pos_name\", \"khm_customer.tax_type\",
\t\t\t\t\t\"htm_contract.payment_cycle\", \"\",\"\",\"jzm_service_info.fuze_id\"
\t\t\t\t]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});

\t\tfunction getEntireList_2(data) {
\t\t\t//高级搜索
\t\t\tdohSearch();
\t\t\t//普通搜索
\t\t\tsearch();
\t\t\tcs.getChart(2, '', data);
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

\t\t\t\t\tif(res.data.items == \"\" || res.data == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
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

\t\t\$('.myFilter').click(function() {
\t\t\tif(!\$(this).hasClass('clc')) {
\t\t\t\t\$(this).addClass('clc').siblings().removeClass('clc');
\t\t\t}
\t\t\tvar user = JSON.parse(ykp.getCookie('userinfo'));
\t\t\tvar data = {
\t\t\t\t\"type\": 2,
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
\t\t\t\tdata.up_user = user.id;
\t\t\t}
\t\t\tfilter = data['where'];
\t\t\tgetEntireList_2(data);
\t\t})

\t\t/*//自定义列表
\t\tcs.custorm_check('#dynamic-table', '#dataList', true);*/

\t\t//高级搜索
\t\tcs.showHeightSearch('#heightsearch', '#heightsearch1');

\t\t//导入导出
\t\tvar data = {
\t\t\turl: \"/api/api_service/serviceExport\",
\t\t\ttype: '2',
\t\t\ttitle: '整单模板'
\t\t}
\t\tcs.jzexport(data, function(res) {
\t\t\tykp.prompt(\"上传成功\");
\t\t\tgetEntireList(1);
\t\t\t\$('.label_popup').hide();
\t\t})

\t\tfunction search() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\t\"type\": 2,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}
\t\t\tcs.doSearch('#search', data, 'where', false, function(res, _filter) {
\t\t\t\tfilter = _filter;
\t\t\t\t//生成月份表头
\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'), res['data']['months']);
\t\t\t\t//console.log(res);
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn false;
\t\t\t\t} else {
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t}, '', {
\t\t\t\turl: \"/api/api_service/assistant_list_new \"
\t\t\t})
\t\t}

\t\t\$('#flush').click(function() {
\t\t\tfilter = '';
\t\t\tykp.setCookie('where','');
\t\t\t\$('[sear=\"customer_name\"]').val('');
\t\t\t\$('[sear=\"khm_customer.customer_num\"]').val('');
\t\t\t\$('[sear=\"jzm_service_info.fuze_id\"]').val('').trigger('change');
\t\t\tgetEntireList();
\t\t})
\t\tcs.getAllCw(function(option) {
\t\t\t\$('#heightsearch1 .cw').html(option);
\t\t\t\$('#heightsearch1 .cw').select2({
\t\t\t\tallowClear: true
\t\t\t})
\t\t})
\t\tvar month2 = \"\";

\t\tfunction dohSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\t\"type\": 2,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}

\t\t\tcs.hSearch('#search1', data, 'where', false, function(res, _filter, month) {
\t\t\t\tfilter = _filter;
\t\t\t\tmonth2 = month;

\t\t\t\t//生成月份表头
\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'), res['data']['months']);

\t\t\t\t\$('.in').click();
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\$(\"#heightsearch\").removeClass('active');

\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\$(\"#heightsearch\").removeClass('active');
\t\t\t\taddList(res);
\t\t\t}, '', {
\t\t\t\turl: \"/api/api_service/assistant_list_new \"
\t\t\t})
\t\t}

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

\t\t//更该每页的条目数
\t\t\$('#changePageNum').change(function() {
\t\t\tpagesize = \$(this).val();
\t\t\tykp.setCookie('page_size',pagesize);
\t\t\t\$('.ui-pagination-container').remove();
\t\t\tgetEntireList(1);
\t\t})

\t\t//获取所有员工(负责人)
\t\t//console.log(cs.getTime('2017-10-18'));
\t\tfunction allemp() {
\t\t\tvar emps;
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_employees/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tasync: false,
\t\t\t\tdata: {
\t\t\t\t\tpage_size: 1,
\t\t\t\t\tlimit: 999
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\temps = res.data.items;
\t\t\t\t}
\t\t\t})
\t\t\treturn emps;
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
            if(\$('.main-content').find('#custom').length < 1) {
                cs.custorm_check('#dynamic-table', '#dataList', true);
            }
\t\t};

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
\t\t\t\t\t`<td class=\"center\" \${data[month]['Status'] ? \"cstatus\" : \"\"} title=\"\${month}\" get_money=\"\${data[month]['get_money']}\" contract_id=\"\${data[month]['contract_id']}\" fuze_id=\"\${data[month]['fuze_id']}\" hang_statu=\"\${data[month]['hang_statu']}\" data-id=\"\${data[month]['id']}\" data-status=\"\${data[month]['status']}\" data-num=\"\${\$(this).attr('data-num')}\" style=\"display:\${\$(this).css('display')};border:1px solid #eee !important;\" data-month=\"\${data[month]['time']}\">
\t\t\t\t\t<label class=\"pos-rel \${styles[data[month]['status']]}\"></label>
\t\t\t\t\t<a href=\"#\" style=\"display:none;\" class=\"pos-rel finished\">已完成</a>
\t\t\t\t</td>`;
\t\t\t});

\t\t\treturn html;
\t\t}

\t\tfunction getEntireList(curPage) {
\t\t\t//高级搜索
\t\t\tdohSearch();
\t\t\t//普通搜索
\t\t\tsearch();
\t\t\tvar chartData = {
\t\t\t\t\"type\": 2,
\t\t\t\t\"page\": curPage,
\t\t\t\t\"page_size\": pagesize,
\t\t\t\tfilter: filter,
\t\t\t\twhere: filter
\t\t\t};
\t\t\tif(month2) {
\t\t\t\tchartData.month2 = month2;
\t\t\t}
\t\t\tcs.getChart(2, '', chartData);
\t\t\tykp.list({
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: chartData,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\t//生成月份表头
\t\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'), res['data']['months']);

\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//将数据添加到tbody中
\t\tfunction addList(res) {
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

\t\t\t//表头显示 隐藏样式
\t\t\tvar styles = [];
\t\t\t\$('#dynamic-table .thColor th').each(function(i, e) {
\t\t\t\tstyles.push(\$(this).css('display'));
\t\t\t});
            //console.log(styles);
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
\t\t\t//税务类型
\t\t\tvar tax_type;

\t\t\tykp.setCookie('page_no', res.data.curPage, (1 / 24));

\t\t\tfor(var i in data) {
\t\t\t\tfor(var j = 0; j < data[i].list.length; j++) {
\t\t\t\t\tobj.status = data[i].list[j]['jzm_service_info.status'];
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
\t\t\t\t\tcycle=payment_cycle[service_cylce[j]];
\t\t\t\t}

\t\t\t\ttax_type = data[i].list[0]['khm_customer.tax_type'] == 1 ? '一般纳税人' : '小规模';

\t\t\t\thtml +=
\t\t\t\t\t`<tr data-id=\"\${data[i]['customer_id']} \" cid=\"\${data[i]['customer_id']}\">
\t\t\t\t\t\t//客户名称
\t\t\t\t\t\t<td class=\"center\">
\t                        <label class=\"pos-rel\">
\t                        <input type=\"checkbox\" name=\"check\" class=\"ace\"/>
\t                        <span class=\"lbl\"></span>
\t                        </label>
\t                    </td>
                        <td data-num=\"1\" style=\"display:\${styles[1]}\" data-cid=\"\${data[i]['customer_id']}\">
                        <div style=\"display:\${data[i]['is_red'] == '0' ? 'none' : 'inline-block'};height:7px;width:17px\">
 \t\t\t\t \t\t\t<span class=\"spanTip\" style=\"\"></span>
\t\t\t\t\t\t</div>
                            <a href=\"#\" class=\"customerDetail pos-rel\">\${data[i].list[0]['khm_customer.name']}</a>
                            <label class=\"pos-rel\">
                            \t<i relation=\${data[i]['is_relotion']} class=\"sc fa \${data[i]['is_relotion'] == 0 ? 'fa-heart-o' : 'fa-heart'}\" style=\"color:\${data[i]['is_relotion'] ==1 ? 'red' : ''}\"></i>
\t\t\t\t \t\t\t\t<i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data[i]['Remark'].length > 0 ? 'red' : ''}\"  data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i>
\t\t\t \t\t\t\t </label>
\t\t\t \t\t\t\t
                        </td>
                        <td data-num=\"2\" style=\"display:\${styles[2]}\">
\t\t\t\t\t\t\t\${parseInt(data[i]['maxLv']).toFixed(2)}
                        </td>
                        //客户编码
                        <td data-num=\"3\" style=\"display:\${styles[3]}\">
\t\t\t\t\t\t\t\${data[i]['customer_num']}
                        </td>
                        //仓位编码
                        <td  data-type=\"\" data-num=\"4\" style=\"display:\${styles[4]}\">
                        \t\${data[i].position.pos_name+data[i].position.pos_num}
                        </td>

                        //纳税人类型
                        <td class=\"center\"  data-num=\"5\" style=\"display:\${styles[5]}\">
\t\t\t\t\t\t\t\${tax_type}
                        </td>
                        //服务周期
                        <td class=\"center\" data-num=\"6\" style=\"display:\${styles[6]}\">\${cycle}</td>
                        //逾期
                       \t<td class=\"center\" data-num=\"7\" style=\"display:\${styles[7]}\">\${data[i]['num']}</td>
                       \t//截至日期
                       \t<td class=\"center\" data-num=\"8\" style=\"display:\${styles[8]}\">\${data[i]['maxTime']}</td>
                     \t//负责人
\t\t\t\t\t\t<td class=\"center\" data-num=\"9\" style=\"display:\${styles[9]}\">\${fuze.join(',') || \"\"}</td>
\t\t\t\t\t\t\${td_html}
                   \t</tr>`;

\t\t\t\t//置空数据，以便下一次循环
\t\t\t\t_data = {};
\t\t\t\tfuze_ids = [];
\t\t\t\tfuze = [];
\t\t\t\tcycle = [];
\t\t\t\tservice_cylce = [];
\t\t\t};

\t\t\t//数据填入tbody中
\t\t\t\$('#dataList').html(html);
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\t\$('#dataList').find('td[get_money]').each(function() {
\t\t\t\tif(\$(this).attr('get_money') > 0) {
\t\t\t\t\t\$(this).css('background-color', '#00cc22')
\t\t\t\t\t\$(this).css('border', '1px solid #fff !important');
\t\t\t\t}
\t\t\t})

\t\t\tcs.sc('整单', function(res) {
\t\t\t\tgetEntireList(1)
\t\t\t})

\t\t\t//客户详情\t\t\t\t\t
\t\t\tcustom.get_custom_info();
\t\t\tcustom.showReamrk();
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();

\t\t\t\$(\"#dataList td[data-status='0'],#dataList td[data-status='3']\").mouseover(function() {
\t\t\t\t\$(this).children('a').css('display', 'inline-block');
\t\t\t\t\$(this).children('label').removeClass('glyphicon glyphicon-remove');
\t\t\t})
\t\t\t\$(\"#dataList td[data-status='0'],#dataList td[data-status='3']\").mouseout(function() {
\t\t\t\t\$(this).children('a').css('display', 'none');
\t\t\t\tif(\$(this).attr('data-status') == 3) {
\t\t\t\t\t\$(this).children('label').addClass('glyphicon glyphicon-remove');
\t\t\t\t}
\t\t\t});

\t\t\tvar statu = cs.getNodes([95, 289], true);

\t\t\t//未审核 审批失败点击 已完成
\t\t\t\$(\"#dataList .finished\").unbind('click').click(function() {
\t\t\t\tvar it = \$(this).parents('td');
\t\t\t\t//当前登录用户id
\t\t\t\tvar uid = ykp.getCookie('uid');
\t\t\t\t//当前用户非负责人时，提示
\t\t\t\tif(it.attr('fuze_id') != uid) {
\t\t\t\t\tykp.prompt(\"非负责人，不可操作\");
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\t//作废未收款不能添加
\t\t\t\tif(\$(this).attr('get_money') == -1 && \$(this).attr('hang_statu') == '4' || \$(this).attr('hang_statu') == '3') {
\t\t\t\t\tykp.prompt('订单已解约，不能编辑');
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t//合同状态非已激活时，提示
\t\t\t\tif(it.attr('hang_statu') != '1') {
\t\t\t\t\tvar contract_status = ['合同未激活', '合同已激活', '合同已挂起', '合同已结束', '合同已作废'];
\t\t\t\t\tykp.prompt(contract_status[it.attr('hang_statu')] || \"不可操作\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t//服务审批状态非未审批、审批失败时，提示
\t\t\t\tif(it.attr('data-status') != '0' && it.attr('data-status') != '3') {
\t\t\t\t\tvar approve_status = {
\t\t\t\t\t\t'1': '审批中，不可操作',
\t\t\t\t\t\t'2': '审批成功，不可操作'
\t\t\t\t\t};
\t\t\t\t\tykp.prompt(approve_status[it.attr('data-status')] || \"不可操作\");
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\tvar id = it.attr('data-id');
\t\t\t\tvar data = {
\t\t\t\t\tid: id,
\t\t\t\t\tstatus: it.attr('data-status'),
\t\t\t\t\tyear_month_id: it.attr('data-month')
\t\t\t\t}

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
\t\t\t\t// if (payment_cycle==3) {
\t\t\t\t// //得到季度数组
\t\t\t\t// var datas = getArrays(month,3);
\t\t\t\t// //serviceid数组
\t\t\t\t// \tfor(var i in datas){
\t\t\t\t// \t\tvar id=\$(thistd).parent().find('[data-num='+(datas[i]+6)+']').attr('data-month');
\t\t\t\t// \t\tif (id!='') {
\t\t\t\t// \t\t\tmonth_ids.push(id);
\t\t\t\t// \t\t}
\t\t\t\t// \t}
\t\t\t\t// \tdata['year_month_id'] = month_ids.join(',');
\t\t\t\t// //半年的
\t\t\t\t// } else if (payment_cycle==6) {
\t\t\t\t// \t\t//如果是前6个月
\t\t\t\t// \tif((Date.parse(new Date(year_month))/1000-start_time) < harf_time){
\t\t\t\t// \t\t//如果开始时间小于等于6月
\t\t\t\t// \t\tif(cs.getNowTime(start_time).split('-')[1]<=6){
\t\t\t\t// \t\t\tfor(var i = 0;i<6;i++){
\t\t\t\t// \t\t\t\tvar mon=(parseInt(start_month)+i)<10?'0'+''+(parseInt(start_month)+i):parseInt(start_month)+i;
\t\t\t\t// \t\t\t\t\tmonth_ids.push(start_year+''+mon);
\t\t\t\t// \t\t\t}
\t\t\t\t// \t\t}else{//如果开始时间大于6月
\t\t\t\t// \t\t\tvar k=1;
\t\t\t\t// \t\t\tfor(var i = 0;i<6;i++){
\t\t\t\t// \t\t\t\tvar mon;
\t\t\t\t// \t\t\t\tif (parseInt(start_month)+i<=12) {
\t\t\t\t// \t\t\t\t\tmon=(parseInt(start_month)+i)<10?'0'+''+(parseInt(start_month)+i):(parseInt(start_month)+i);
\t\t\t\t// \t\t\t\t\tmonth_ids.push(start_year+''+mon);
\t\t\t\t// \t\t\t\t}else{
\t\t\t\t// \t\t\t\t\tmon=k<10?'0'+''+k:k;
\t\t\t\t// \t\t\t\t\tmonth_ids.push((parseInt(start_year)+1)+''+mon);
\t\t\t\t// \t\t\t\t\tk++;
\t\t\t\t// \t\t\t\t}
\t\t\t\t// \t\t\t}
\t\t\t\t// \t\t}
\t\t\t\t// \t\t//如果是后6个月
\t\t\t\t// \t}else{
\t\t\t\t// \t\t//如果结束时间大于6月
\t\t\t\t// \t\tif(cs.getNowTime(end_time).split('-')[1] >= 6){
\t\t\t\t// \t\t\tfor(var i = 0;i<6;i++){
\t\t\t\t// \t\t\t\tvar mon=(parseInt(end_month)-i)<10?'0'+''+(parseInt(end_month)-i):parseInt(end_month)-i;
\t\t\t\t// \t\t\t\t\tmonth_ids.push(end_year+''+mon);
\t\t\t\t// \t\t\t}
\t\t\t\t// \t\t}else{//如果结束时间小于6月
\t\t\t\t// \t\t\tvar k = 12;
\t\t\t\t// \t\t\tfor(var i = 0;i<6;i++){
\t\t\t\t// \t\t\t\tvar mon;
\t\t\t\t// \t\t\t\tif (parseInt(end_month)-i>=1) {
\t\t\t\t// \t\t\t\t\tmon=(parseInt(end_month)-i)<10?'0'+''+(parseInt(end_month)-i):(parseInt(end_month)-i);
\t\t\t\t// \t\t\t\t\tmonth_ids.push(end_year+''+mon);
\t\t\t\t// \t\t\t\t}else{
\t\t\t\t// \t\t\t\t\tmon=k<10?'0'+''+k:k;
\t\t\t\t// \t\t\t\t\tmonth_ids.push((parseInt(end_year)+1)+''+mon);
\t\t\t\t// \t\t\t\t\tk--;
\t\t\t\t// \t\t\t\t}
\t\t\t\t// \t\t\t}
\t\t\t\t// \t\t}
\t\t\t\t// \tmonth_ids = month_ids.reverse();
\t\t\t\t// \t}
\t\t\t\t// \tdata['year_month_id'] = month_ids.join(',');
\t\t\t\t// //一年的
\t\t\t\t// } else if (payment_cycle==12) {
\t\t\t\t// \tvar k = 1;
\t\t\t\t// \tfor(var i = 0; i <12;i++){
\t\t\t\t// \t\tvar mon;
\t\t\t\t// \t\tif (parseInt(start_month)+i<=12) {
\t\t\t\t// \t\t\tmon=parseInt(start_month)+i<10?'0'+''+(parseInt(start_month)+i):parseInt(start_month)+i;
\t\t\t\t// \t\t\tmonth_ids.push(start_year+''+mon)
\t\t\t\t// \t\t}else{
\t\t\t\t// \t\t\tmon=k<10?'0'+''+k:k;
\t\t\t\t// \t\t\tmonth_ids.push((parseInt(start_year)+1)+''+mon)
\t\t\t\t// \t\t\tk++;
\t\t\t\t// \t\t}
\t\t\t\t// \t}
\t\t\t\t// \tdata['year_month_id'] = month_ids.join(',');
\t\t\t\t// }

\t\t\t\t// console.log(data);
\t\t\t\t// return;
\t\t\t\t// var index = \$(this).index();

\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_service/arrange',
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tdata: data,
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tykp.prompt('提交成功');
                        getEntireList(ykp.getCookie('page_no'));
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

\t\t//获取分页列表当前点击的页数，再从服务器获取数据
\t\tfunction getPageList(current) {
\t\t\tgetEntireList(current);
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
</script>";
    }

    public function getTemplateName()
    {
        return "admin/task/entire.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 423,  442 => 422,  19 => 1,);
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
/* 		background-color: #00cc22;*/
/* 		box-shadow: 0px 0px 2px #f5f5f5 !important;*/
/* 	}*/
/* </style>*/
/* <div class="widget-main">*/
/* */
/* 	<div class="row" style="margin-top: 20px;">*/
/* 		<!-- <h3 class="header smaller lighter blue">整单</h3> -->*/
/* */
/* 		<!--普通搜索-->*/
/* 		<!--<div class="col-sx-12" style=" float: left;">*/
/* 			<div class="form-group col-xs-12;padding-left: 0px; ">*/
/* 				<label class="control-label  col-sm-3 no-padding-right " style="padding:0;height:30px; line-height:30px;margin:0px !important; "> 月份 </label>*/
/* 				<div class="col-sm-4" style="margin-right: 10px;">*/
/* 					<select class="" id="select">*/
/* 						<option value=""></option>*/
/* 						<option value="1">1月</option>*/
/* 						<option value="2">2月</option>*/
/* 						<option value="3"> 3月</option>*/
/* 						<option value="4"> 4月</option>*/
/* 						<option value="5">5月</option>*/
/* 						<option value="6">6月</option>*/
/* 						<option value="7"> 7月</option>*/
/* 						<option value="8"> 8月</option>*/
/* 						<option value="9">9月</option>*/
/* 						<option value="10">10月</option>*/
/* 						<option value="11"> 11月</option>*/
/* 						<option value="12"> 12月</option>*/
/* 						<option value="12"> 每月</option>*/
/* 						<option value="12"> 季度</option>*/
/* 						<option value="12"> 半年</option>*/
/* 						<option value="12"> 寄存</option>*/
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>-->*/
/* */
/* 		<div style="margin-top: 50px;  width: 860px; padding: 0px;" class="row col-xs-12">*/
/* 			<div class="col-xs-12 infobox-container" style="padding: 0px; margin-left: -10px;">*/
/* 				<!-- #section:pages/dashboard.infobox -->*/
/* 				<div class="infobox infobox-blue2" style="color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;">*/
/* 					<div class="infobox-data" style="padding: 0px;">*/
/* 						<div class="infobox-content" style="text-align: center;">*/
/* 							本月目标*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="infobox infobox-blue2" style="color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;">*/
/* 					<div class="infobox-data" style="padding: 0px;">*/
/* 						<div class="infobox-content" style="text-align: center;">*/
/* 							新增任务*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="infobox infobox-blue2" style="color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;">*/
/* 					<div class="infobox-data" style="padding: 0px;">*/
/* 						<div class="infobox-content" style="text-align: center;">*/
/* 							逾期任务*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="infobox infobox-blue2" style="color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;">*/
/* 					<div class="infobox-data" style="padding: 0px;">*/
/* 						<div class="infobox-content" style="text-align:center;">*/
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
/* 							<!-- <canvas height="57" width="57"></canvas> -->*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="infobox-data" style="margin-left: 20px;margin-top:3px;">*/
/* 						<div class="infobox-content" id="isOk"> 已完成</div>*/
/* */
/* 						<div class="infobox-content" id="noOk">*/
/* 							未完成*/
/* 						</div>*/
/* 						<div class="infobox-content" id="noOk">*/
/* 							未完成*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="infobox infobox-blue2">*/
/* 					<div class="infobox-progress">*/
/* 						<!-- #section:pages/dashboard.infobox.easypiechart -->*/
/* 						<div class="easy-pie-chart percentage" data-percent="0" data-size="50" style="height: 57px; width: 57px; line-height: 56px;">*/
/* 							<span class="percent" id="percent1"></span>*/
/* 							<!-- <canvas height="57" width="57"></canvas> -->*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="infobox-data" style="margin-left: 20px;     margin-top: 3px;">*/
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
/* 							<!-- <canvas height="57" width="57"></canvas> --></div>*/
/* 					</div>*/
/* */
/* 					<div class="infobox-data" style="margin-left: 20px;     margin-top: 3px;">*/
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
/* 							<!-- <canvas height="57" width="57"></canvas> --></div>*/
/* 					</div>*/
/* */
/* 					<div class="infobox-data" style="margin-left: 20px; margin-top: 3px;">*/
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
/* 		<div class="row col-xs-12" id="topTool" style="padding-left:0;">*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px; margin-bottom:5px;">*/
/* 				<input type="text" pts=1 sear="customer_name" placeholder="企业名称" autofocus/>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px; margin-bottom:5px;">*/
/* 				<input type="text" pts=0 sear="khm_customer.customer_num" placeholder="企业编码" autofocus/>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<select style="width: 180px" pts=3 sear="jzm_service_info.fuze_id" class="advandced-search select2-hidden-accssible"  tabindex="-1" aria-hidden="true">*/
/* 						<option value="">负责人</option>*/
/* 					</select>*/
/* 				</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px; margin-bottom:5px;">*/
/* 				<button type="button" id="search" title="搜索" class="btn btn-info btn-sm">*/
/*                         <i class=" fa fa-search"></i>*/
/*                     </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px; margin-bottom:5px;">*/
/* 				<button id="heightsearch" title="高级搜索" type="button" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/* 						<i class=" fa fa-filter"></i>*/
/* 					</button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px; margin-bottom:5px;">*/
/* 				<button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32!important;">*/
/* 	                    <i class=" fa fa-refresh"></i>*/
/* 	                </button>*/
/* 			</div>*/
/* 			<div contentAuthority="94" class="col-sx-4" style=" float: left;margin-right: 5px; margin-bottom:5px;">*/
/* 				<label type="button" id="mergeItem" title="导入" style="background-color: #1E9FFF !important; border-color: #1E9FFF;" class="btn btn-info btn-sm mergeItem" for="leading-in">*/
/* 	                            <i class="fa fa-sign-in"></i>*/
/* 	           		</label>*/
/* 			</div>*/
/* 			<div class="col-sx-4" contentAuthority="289" style=" float: left; margin-right: 5px;">*/
/* 				<button type="button" id="moveToClue" title=" 分配负责人" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="moveToClue btn addBtn btn-info btn-sm position-relative">*/
/* 					<i class="fa fa-hand-o-right"></i>*/
/* 				</button>*/
/* 			</div>*/
/* 			<div contentAuthority="94" class="col-sx-4" style=" float: left;margin-right: 5px; margin-bottom:5px;">*/
/* 				<div id="filterBtns" style="display:inline-block;width:290px;height: 36px">*/
/* 					<a href="javascript:void(0);" class="myFilter" style="line-height:32px;background: #E6E6E6;" data-kind="0"> 查看全部</a>*/
/* 					<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="1"> 我负责的</a>*/
/* 					<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="2"> 我关注的</a>*/
/* 					<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="3"> 我的下属</a>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<!--<button type="button" class="import btn btn-info btn-sm" style="background-color: #fb9a47 !important; border-color: #fb9a47;">*/
/* 				导入*/
/* 			</button>-->*/
/* */
/* 			<!--高级搜索-->*/
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
/* 							<option> > </option>*/
/* 							<option> &lt; </option>*/
/* 						</select>*/
/* 						<select gjs=5 sear="month" style="width:180px;">*/
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
/* 							<option value="12">12月</option>*/
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
/* 						<select gjs=3 sear="ckm_position_num.pos_id" class="cw" tabindex="-1" aria-hidden="true" style="width:180px;">*/
/* */
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
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>服务周期</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 							<option> > </option>*/
/* 							<option> &lt; </option>*/
/* 						</select>*/
/* 						<select gjs=0 sear="htm_contract.payment_cycle" data-type="gj" style="width:180px;">*/
/* 							<option value=""> 请选择 </option>*/
/* 							<option value="1"> 每月</option>*/
/* 							<option value="3"> 季度 </option>*/
/* 							<option value="6"> 半年 </option>*/
/* 							<option value="12"> 一年 </option>*/
/* 						</select>*/
/* 					</div>*/
/* */
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>负责人</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select style="margin-right: 12px !important;width: 180px" gjs="0" data-type="gj" sear="jzm_service_info.fuze_id" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 							<option value="">请选择</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>收款情况</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select gjs=0 sear="jzm_service_info.get_money" data-type="gj" style="width:180px;">*/
/* 							<option value=""> 请选择 </option>*/
/* 							<option value="1"> 已收款 </option>*/
/* 							<option value="0"> 未收款 </option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>审批状态</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select gjs=0 sear="jzm_service_info.status" data-type="gj" style="width:180px;">*/
/* 							<option value=""> 请选择 </option>*/
/* 							<option value="0"> 未开始</option>*/
/* 							<option value="1"> 待审批</option>*/
/* 							<option value="2"> 已通过</option>*/
/* 							<option value="3"> 未通过</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style="clear:both;padding-top:10px;text-align:center;">*/
/* 						<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/* 	                        查询*/
/* 	                    </button>*/
/* 						<button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 		                       重置*/
/* 		                    </button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row">*/
/* 		<div class="widget-body">*/
/* 			<!-- class="widget-main" -->*/
/* 			<div>*/
/* 				<div style="overflow-x:auto;" class="custom_table">*/
/* 					<table id="dynamic-table">*/
/* 						<thead>*/
/* 							<tr class="thColor">*/
/* 								<th>*/
/* 									<label class="pos-rel">*/
/* 										<input type="checkbox" class="ace" onclick="checkAll(this.checked)"/>*/
/* 										<span class="lbl"></span>*/
/* 									</label>*/
/* 								</th>*/
/* 								<th data-num="1">企业名称</th>*/
/* 								<th data-num="2">任务等级</th>*/
/* 								<th data-num="3">客户编码</th>*/
/* 								<th data-num="4">仓位编码</th>*/
/* 								<th data-num="5">税务类型</th>*/
/* 								<th data-num="6">服务周期</th>*/
/* 								<th data-num="7">逾期</th>*/
/* 								<th data-num="8">截止月份</th>*/
/* 								<th data-num="9">负责人</th>*/
/* 								<th data-num="10" class="month"></th>*/
/* 								<th data-num="11" class="month"></th>*/
/* 								<th data-num="12" class="month"></th>*/
/* 								<th data-num="13" class="month"></th>*/
/* 								<th data-num="14" class="month"></th>*/
/* 								<th data-num="15" class="month"></th>*/
/* 								<th data-num="16" class="month"></th>*/
/* 								<th data-num="17" class="month"></th>*/
/* 								<th data-num="18" class="month"></th>*/
/* 								<th data-num="19" class="month"></th>*/
/* 								<th data-num="20" class="month"></th>*/
/* 								<th data-num="21" class="month"></th>*/
/* 								<!--<th>操作</th>-->*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody id="dataList">*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 				<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 					<div align="left" style="padding-left: 15px; float: left;width: 10%;" id="num"></div>*/
/* 					<div id="pageBar" class="pagination"></div>*/
/* 					<div align="right" style="float: right;  width: 10%;">*/
/* 						<select style="width: 100px;" id="changePageNum">*/
/* 							<option value="10">每页10条</option>*/
/* 							<option value="20">每页20条</option>*/
/* 							<option value="50">每页50条</option>*/
/* 							<option value="100">每页100条</option>*/
/* 							<option value="200">每页200条</option>*/
/* 						</select>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="label_popup" id="export" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 		<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 	            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 			<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 				<span style="display: inline-block;">导入整单</span>*/
/* 				<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 			</div>*/
/* 			<div style="padding: 10px 50px;">*/
/* 				<input type="file" width="200px" style="margin: auto;" id="efile" />*/
/* 				<!--<hr>-->*/
/* 			</div>*/
/* 			<div style="padding:15px;text-align:right;">*/
/* 				<button id="ghItem" class=" btn">整单模板</button>*/
/* 				<button class="btn btn-info  submit" style="padding: 6px; border-radius: 0px;">保存</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% include 'admin/customerDetail.html' %} {% include 'admin/mark.html' %}*/
/* </div>*/
/* <!-- /.widget-main -->*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* <script>*/
/* 	jQuery(function($) {*/
/* 		cs.getNodes([94, 289]);*/
/* 		var pagesize = 10;*/
/* 		var filter = "";*/
/* 		var employees = {};*/
/* 		var order = 'khm_customer.id desc';*/
/* 		var aid = ykp.getCookie("aid");*/
/* 		var time = ykp.getCookie("time");*/
/* */
/* 		cs.setFuze({*/
/* 			conId: "#dataList",*/
/* 			type: "2",*/
/* 			url: "/api/api_service/transfer_user",*/
/* 			fun: function() {*/
/* 				getEntireList();*/
/* 			}*/
/* 		});*/
/* */
/* 		if(time != '' && time != undefined) {*/
/* 			var timestamp = ''; //条件*/
/* 			var today = new Date().setHours(0, 0, 0, 0) / 1000; //今天零点的时间戳*/
/* 			var day_1 = cs.getNowTime(Date.parse(new Date()) / 1000).substr(-2) - 1; //距离本月1号有多少天*/
/* 			var lastmonthday_1 = cs.getNowTime(Date.parse(new Date()) / 1000);*/
/* 			var newday = lastmonthday_1.substring(0, 4) + '-' + (lastmonthday_1.substring(5, 7) - 1) + '-01';*/
/* 			if(lastmonthday_1.substring(5, 7) == 1) {*/
/* 				newday = (lastmonthday_1.substring(0, 4) - 1) + '-12-01';*/
/* 			}*/
/* */
/* 			var newdaytime = Date.parse(new Date(newday)) / 1000; //上个月1号的时间戳*/
/* 			switch(time) {*/
/* 				case '1':*/
/* 					timestamp = `jzm_service_info.com_time>${today}`;*/
/* 					break;*/
/* 				case '2':*/
/* 					timestamp = `jzm_service_info.com_time<${today} and jzm_service_info.com_time>${today-86400}`*/
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
/* 					timestamp = `jzm_service_info.com_time<${today-86400*day_1} jzm_service_info.com_time>${newdaytime}`;*/
/* 					break;*/
/* 			}*/
/* 			var where = `${timestamp}`;*/
/* 			var data = {*/
/* 				"type": 2,*/
/* 				"page_size": pagesize,*/
/* 				"where": where*/
/* 			}*/
/* 			if(aid != '' || aid != undefined) {*/
/* 				data['staff_name'] = aid;*/
/* 			}*/
/* 			getEntireList_2(data);*/
/* 			ykp.setCookie("aid", "", (1 / 24));*/
/* 			ykp.setCookie("time", "", (1 / 24));*/
/* 		} else if(ykp.getCookie('detailsId') && ykp.getCookie('detailsId') != '') {*/
/* 			var id = ykp.getCookie('detailsId');*/
/* 			var data = {*/
/* 				"type": 2,*/
/* 				"page_size": pagesize,*/
/* 				"where": 'htm_contract.id=' + id*/
/* 			}*/
/* 			getEntireList_2(data);*/
/* 			ykp.setCookie("detailsId", '', (1 / 24));*/
/* 		} else {*/
/* 			//默认页面初始化数据*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getEntireList(1);*/
/* 		}*/
/* */
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_service/service_list',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: where,*/
/* 				limit: pagesize,*/
/* 				type: 2*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '#pageBar'*/
/* 			},*/
/* 			initOrder: 'khm_customer.id',*/
/* 			defaultOrder: order,*/
/* 			contentId: "#dataList",*/
/* 			params: [{*/
/* 				id: "#dynamic-table",*/
/* 				field: ["", "khm_customer.name", "maxLv", "customer_num", "pos_name", "khm_customer.tax_type",*/
/* 					"htm_contract.payment_cycle", "","","jzm_service_info.fuze_id"*/
/* 				]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* */
/* 		function getEntireList_2(data) {*/
/* 			//高级搜索*/
/* 			dohSearch();*/
/* 			//普通搜索*/
/* 			search();*/
/* 			cs.getChart(2, '', data);*/
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
/* */
/* 					if(res.data.items == "" || res.data == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt("暂无数据");*/
/* 						}, 1000);*/
/* 						$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
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
/* */
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
/* 				"type": 2,*/
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
/* 				data.up_user = user.id;*/
/* 			}*/
/* 			filter = data['where'];*/
/* 			getEntireList_2(data);*/
/* 		})*/
/* */
/* 		/*//* /自定义列表*/
/* 		cs.custorm_check('#dynamic-table', '#dataList', true);*//* */
/* */
/* 		//高级搜索*/
/* 		cs.showHeightSearch('#heightsearch', '#heightsearch1');*/
/* */
/* 		//导入导出*/
/* 		var data = {*/
/* 			url: "/api/api_service/serviceExport",*/
/* 			type: '2',*/
/* 			title: '整单模板'*/
/* 		}*/
/* 		cs.jzexport(data, function(res) {*/
/* 			ykp.prompt("上传成功");*/
/* 			getEntireList(1);*/
/* 			$('.label_popup').hide();*/
/* 		})*/
/* */
/* 		function search() {*/
/* 			var data = {*/
/* 				url: '/api/api_service/service_list',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					"page_size": pagesize,*/
/* 					"type": 2,*/
/* 					order: order*/
/* 				}*/
/* 			}*/
/* 			cs.doSearch('#search', data, 'where', false, function(res, _filter) {*/
/* 				filter = _filter;*/
/* 				//生成月份表头*/
/* 				generateMonthTh($('#dynamic-table .thColor .month'), res['data']['months']);*/
/* 				//console.log(res);*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt("暂无数据");*/
/* 					}, 1000);*/
/* 					$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					return false;*/
/* 				} else {*/
/* 					addList(res);*/
/* 				}*/
/* 			}, '', {*/
/* 				url: "/api/api_service/assistant_list_new "*/
/* 			})*/
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
/* 		cs.getAllCw(function(option) {*/
/* 			$('#heightsearch1 .cw').html(option);*/
/* 			$('#heightsearch1 .cw').select2({*/
/* 				allowClear: true*/
/* 			})*/
/* 		})*/
/* 		var month2 = "";*/
/* */
/* 		function dohSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_service/service_list',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					"page_size": pagesize,*/
/* 					"type": 2,*/
/* 					order: order*/
/* 				}*/
/* 			}*/
/* */
/* 			cs.hSearch('#search1', data, 'where', false, function(res, _filter, month) {*/
/* 				filter = _filter;*/
/* 				month2 = month;*/
/* */
/* 				//生成月份表头*/
/* 				generateMonthTh($('#dynamic-table .thColor .month'), res['data']['months']);*/
/* */
/* 				$('.in').click();*/
/* 				$("#heightsearch1").slideUp();*/
/* 				$("#heightsearch").removeClass('active');*/
/* */
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt("暂无数据");*/
/* 					}, 1000);*/
/* 					$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					return false;*/
/* 				}*/
/* 				$("#heightsearch1").slideUp();*/
/* 				$("#heightsearch").removeClass('active');*/
/* 				addList(res);*/
/* 			}, '', {*/
/* 				url: "/api/api_service/assistant_list_new "*/
/* 			})*/
/* 		}*/
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
/* 		//更该每页的条目数*/
/* 		$('#changePageNum').change(function() {*/
/* 			pagesize = $(this).val();*/
/* 			ykp.setCookie('page_size',pagesize);*/
/* 			$('.ui-pagination-container').remove();*/
/* 			getEntireList(1);*/
/* 		})*/
/* */
/* 		//获取所有员工(负责人)*/
/* 		//console.log(cs.getTime('2017-10-18'));*/
/* 		function allemp() {*/
/* 			var emps;*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_employees/grid',*/
/* 				method: 'post',*/
/* 				async: false,*/
/* 				data: {*/
/* 					page_size: 1,*/
/* 					limit: 999*/
/* 				},*/
/* 				success: function(res) {*/
/* 					emps = res.data.items;*/
/* 				}*/
/* 			})*/
/* 			return emps;*/
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
/*             if($('.main-content').find('#custom').length < 1) {*/
/*                 cs.custorm_check('#dynamic-table', '#dataList', true);*/
/*             }*/
/* 		};*/
/* */
/* 		//生成服务月份html*/
/* 		function generateTd(data) {*/
/* 			var html;*/
/* */
/* 			var month; //月份*/
/* */
/* 			//styles : 审批状态对应显示的样式*/
/* 			var styles = ['', 'fa  fa-circle-o', 'glyphicon glyphicon-ok', 'glyphicon glyphicon-remove'];*/
/* */
/* 			$('#dynamic-table .thColor .month').each(function(i, e) {*/
/* 				month = $(this).attr('month');*/
/* 				if(!data[month]) {*/
/* 					html += '<td get_money style="display:' + $(this).css('display') + ';border:1px solid #eee !important;" data-num="' + $(this).attr('data-num') + '"></td>';*/
/* 					return true;*/
/* 				}*/
/* 				html +=*/
/* 					`<td class="center" ${data[month]['Status'] ? "cstatus" : ""} title="${month}" get_money="${data[month]['get_money']}" contract_id="${data[month]['contract_id']}" fuze_id="${data[month]['fuze_id']}" hang_statu="${data[month]['hang_statu']}" data-id="${data[month]['id']}" data-status="${data[month]['status']}" data-num="${$(this).attr('data-num')}" style="display:${$(this).css('display')};border:1px solid #eee !important;" data-month="${data[month]['time']}">*/
/* 					<label class="pos-rel ${styles[data[month]['status']]}"></label>*/
/* 					<a href="#" style="display:none;" class="pos-rel finished">已完成</a>*/
/* 				</td>`;*/
/* 			});*/
/* */
/* 			return html;*/
/* 		}*/
/* */
/* 		function getEntireList(curPage) {*/
/* 			//高级搜索*/
/* 			dohSearch();*/
/* 			//普通搜索*/
/* 			search();*/
/* 			var chartData = {*/
/* 				"type": 2,*/
/* 				"page": curPage,*/
/* 				"page_size": pagesize,*/
/* 				filter: filter,*/
/* 				where: filter*/
/* 			};*/
/* 			if(month2) {*/
/* 				chartData.month2 = month2;*/
/* 			}*/
/* 			cs.getChart(2, '', chartData);*/
/* 			ykp.list({*/
/* 				url: '/api/api_service/service_list',*/
/* 				methods: 'post',*/
/* 				data: chartData,*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					//生成月份表头*/
/* 					generateMonthTh($('#dynamic-table .thColor .month'), res['data']['months']);*/
/* */
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt("暂无数据");*/
/* 						}, 1000);*/
/* 						$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					}*/
/* 					addList(res);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//将数据添加到tbody中*/
/* 		function addList(res) {*/
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
/* 			//表头显示 隐藏样式*/
/* 			var styles = [];*/
/* 			$('#dynamic-table .thColor th').each(function(i, e) {*/
/* 				styles.push($(this).css('display'));*/
/* 			});*/
/*             //console.log(styles);*/
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
/* 			//税务类型*/
/* 			var tax_type;*/
/* */
/* 			ykp.setCookie('page_no', res.data.curPage, (1 / 24));*/
/* */
/* 			for(var i in data) {*/
/* 				for(var j = 0; j < data[i].list.length; j++) {*/
/* 					obj.status = data[i].list[j]['jzm_service_info.status'];*/
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
/* */
/* 				//生成服务月份html*/
/* 				td_html = generateTd(_data);*/
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
/* 					cycle=payment_cycle[service_cylce[j]];*/
/* 				}*/
/* */
/* 				tax_type = data[i].list[0]['khm_customer.tax_type'] == 1 ? '一般纳税人' : '小规模';*/
/* */
/* 				html +=*/
/* 					`<tr data-id="${data[i]['customer_id']} " cid="${data[i]['customer_id']}">*/
/* 						//客户名称*/
/* 						<td class="center">*/
/* 	                        <label class="pos-rel">*/
/* 	                        <input type="checkbox" name="check" class="ace"/>*/
/* 	                        <span class="lbl"></span>*/
/* 	                        </label>*/
/* 	                    </td>*/
/*                         <td data-num="1" style="display:${styles[1]}" data-cid="${data[i]['customer_id']}">*/
/*                         <div style="display:${data[i]['is_red'] == '0' ? 'none' : 'inline-block'};height:7px;width:17px">*/
/*  				 			<span class="spanTip" style=""></span>*/
/* 						</div>*/
/*                             <a href="#" class="customerDetail pos-rel">${data[i].list[0]['khm_customer.name']}</a>*/
/*                             <label class="pos-rel">*/
/*                             	<i relation=${data[i]['is_relotion']} class="sc fa ${data[i]['is_relotion'] == 0 ? 'fa-heart-o' : 'fa-heart'}" style="color:${data[i]['is_relotion'] ==1 ? 'red' : ''}"></i>*/
/* 				 				<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}"  data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>*/
/* 			 				 </label>*/
/* 			 				*/
/*                         </td>*/
/*                         <td data-num="2" style="display:${styles[2]}">*/
/* 							${parseInt(data[i]['maxLv']).toFixed(2)}*/
/*                         </td>*/
/*                         //客户编码*/
/*                         <td data-num="3" style="display:${styles[3]}">*/
/* 							${data[i]['customer_num']}*/
/*                         </td>*/
/*                         //仓位编码*/
/*                         <td  data-type="" data-num="4" style="display:${styles[4]}">*/
/*                         	${data[i].position.pos_name+data[i].position.pos_num}*/
/*                         </td>*/
/* */
/*                         //纳税人类型*/
/*                         <td class="center"  data-num="5" style="display:${styles[5]}">*/
/* 							${tax_type}*/
/*                         </td>*/
/*                         //服务周期*/
/*                         <td class="center" data-num="6" style="display:${styles[6]}">${cycle}</td>*/
/*                         //逾期*/
/*                        	<td class="center" data-num="7" style="display:${styles[7]}">${data[i]['num']}</td>*/
/*                        	//截至日期*/
/*                        	<td class="center" data-num="8" style="display:${styles[8]}">${data[i]['maxTime']}</td>*/
/*                      	//负责人*/
/* 						<td class="center" data-num="9" style="display:${styles[9]}">${fuze.join(',') || ""}</td>*/
/* 						${td_html}*/
/*                    	</tr>`;*/
/* */
/* 				//置空数据，以便下一次循环*/
/* 				_data = {};*/
/* 				fuze_ids = [];*/
/* 				fuze = [];*/
/* 				cycle = [];*/
/* 				service_cylce = [];*/
/* 			};*/
/* */
/* 			//数据填入tbody中*/
/* 			$('#dataList').html(html);*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/* 			$('#dataList').find('td[get_money]').each(function() {*/
/* 				if($(this).attr('get_money') > 0) {*/
/* 					$(this).css('background-color', '#00cc22')*/
/* 					$(this).css('border', '1px solid #fff !important');*/
/* 				}*/
/* 			})*/
/* */
/* 			cs.sc('整单', function(res) {*/
/* 				getEntireList(1)*/
/* 			})*/
/* */
/* 			//客户详情					*/
/* 			custom.get_custom_info();*/
/* 			custom.showReamrk();*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/* */
/* 			$("#dataList td[data-status='0'],#dataList td[data-status='3']").mouseover(function() {*/
/* 				$(this).children('a').css('display', 'inline-block');*/
/* 				$(this).children('label').removeClass('glyphicon glyphicon-remove');*/
/* 			})*/
/* 			$("#dataList td[data-status='0'],#dataList td[data-status='3']").mouseout(function() {*/
/* 				$(this).children('a').css('display', 'none');*/
/* 				if($(this).attr('data-status') == 3) {*/
/* 					$(this).children('label').addClass('glyphicon glyphicon-remove');*/
/* 				}*/
/* 			});*/
/* */
/* 			var statu = cs.getNodes([95, 289], true);*/
/* */
/* 			//未审核 审批失败点击 已完成*/
/* 			$("#dataList .finished").unbind('click').click(function() {*/
/* 				var it = $(this).parents('td');*/
/* 				//当前登录用户id*/
/* 				var uid = ykp.getCookie('uid');*/
/* 				//当前用户非负责人时，提示*/
/* 				if(it.attr('fuze_id') != uid) {*/
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
/* 				if(it.attr('hang_statu') != '1') {*/
/* 					var contract_status = ['合同未激活', '合同已激活', '合同已挂起', '合同已结束', '合同已作废'];*/
/* 					ykp.prompt(contract_status[it.attr('hang_statu')] || "不可操作");*/
/* 					return false;*/
/* 				}*/
/* 				//服务审批状态非未审批、审批失败时，提示*/
/* 				if(it.attr('data-status') != '0' && it.attr('data-status') != '3') {*/
/* 					var approve_status = {*/
/* 						'1': '审批中，不可操作',*/
/* 						'2': '审批成功，不可操作'*/
/* 					};*/
/* 					ykp.prompt(approve_status[it.attr('data-status')] || "不可操作");*/
/* 					return false;*/
/* 				}*/
/* */
/* 				var id = it.attr('data-id');*/
/* 				var data = {*/
/* 					id: id,*/
/* 					status: it.attr('data-status'),*/
/* 					year_month_id: it.attr('data-month')*/
/* 				}*/
/* */
/* 				// var year_month = $(this).attr('data-month')+'';*/
/* */
/* 				// //当前月完整日期*/
/* 				// year_month = year_month.substring(0,4)+'-'+year_month.substring(4)+'-01';*/
/* */
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
/* 				// if (payment_cycle==3) {*/
/* 				// //得到季度数组*/
/* 				// var datas = getArrays(month,3);*/
/* 				// //serviceid数组*/
/* 				// 	for(var i in datas){*/
/* 				// 		var id=$(thistd).parent().find('[data-num='+(datas[i]+6)+']').attr('data-month');*/
/* 				// 		if (id!='') {*/
/* 				// 			month_ids.push(id);*/
/* 				// 		}*/
/* 				// 	}*/
/* 				// 	data['year_month_id'] = month_ids.join(',');*/
/* 				// //半年的*/
/* 				// } else if (payment_cycle==6) {*/
/* 				// 		//如果是前6个月*/
/* 				// 	if((Date.parse(new Date(year_month))/1000-start_time) < harf_time){*/
/* 				// 		//如果开始时间小于等于6月*/
/* 				// 		if(cs.getNowTime(start_time).split('-')[1]<=6){*/
/* 				// 			for(var i = 0;i<6;i++){*/
/* 				// 				var mon=(parseInt(start_month)+i)<10?'0'+''+(parseInt(start_month)+i):parseInt(start_month)+i;*/
/* 				// 					month_ids.push(start_year+''+mon);*/
/* 				// 			}*/
/* 				// 		}else{//如果开始时间大于6月*/
/* 				// 			var k=1;*/
/* 				// 			for(var i = 0;i<6;i++){*/
/* 				// 				var mon;*/
/* 				// 				if (parseInt(start_month)+i<=12) {*/
/* 				// 					mon=(parseInt(start_month)+i)<10?'0'+''+(parseInt(start_month)+i):(parseInt(start_month)+i);*/
/* 				// 					month_ids.push(start_year+''+mon);*/
/* 				// 				}else{*/
/* 				// 					mon=k<10?'0'+''+k:k;*/
/* 				// 					month_ids.push((parseInt(start_year)+1)+''+mon);*/
/* 				// 					k++;*/
/* 				// 				}*/
/* 				// 			}*/
/* 				// 		}*/
/* 				// 		//如果是后6个月*/
/* 				// 	}else{*/
/* 				// 		//如果结束时间大于6月*/
/* 				// 		if(cs.getNowTime(end_time).split('-')[1] >= 6){*/
/* 				// 			for(var i = 0;i<6;i++){*/
/* 				// 				var mon=(parseInt(end_month)-i)<10?'0'+''+(parseInt(end_month)-i):parseInt(end_month)-i;*/
/* 				// 					month_ids.push(end_year+''+mon);*/
/* 				// 			}*/
/* 				// 		}else{//如果结束时间小于6月*/
/* 				// 			var k = 12;*/
/* 				// 			for(var i = 0;i<6;i++){*/
/* 				// 				var mon;*/
/* 				// 				if (parseInt(end_month)-i>=1) {*/
/* 				// 					mon=(parseInt(end_month)-i)<10?'0'+''+(parseInt(end_month)-i):(parseInt(end_month)-i);*/
/* 				// 					month_ids.push(end_year+''+mon);*/
/* 				// 				}else{*/
/* 				// 					mon=k<10?'0'+''+k:k;*/
/* 				// 					month_ids.push((parseInt(end_year)+1)+''+mon);*/
/* 				// 					k--;*/
/* 				// 				}*/
/* 				// 			}*/
/* 				// 		}*/
/* 				// 	month_ids = month_ids.reverse();*/
/* 				// 	}*/
/* 				// 	data['year_month_id'] = month_ids.join(',');*/
/* 				// //一年的*/
/* 				// } else if (payment_cycle==12) {*/
/* 				// 	var k = 1;*/
/* 				// 	for(var i = 0; i <12;i++){*/
/* 				// 		var mon;*/
/* 				// 		if (parseInt(start_month)+i<=12) {*/
/* 				// 			mon=parseInt(start_month)+i<10?'0'+''+(parseInt(start_month)+i):parseInt(start_month)+i;*/
/* 				// 			month_ids.push(start_year+''+mon)*/
/* 				// 		}else{*/
/* 				// 			mon=k<10?'0'+''+k:k;*/
/* 				// 			month_ids.push((parseInt(start_year)+1)+''+mon)*/
/* 				// 			k++;*/
/* 				// 		}*/
/* 				// 	}*/
/* 				// 	data['year_month_id'] = month_ids.join(',');*/
/* 				// }*/
/* */
/* 				// console.log(data);*/
/* 				// return;*/
/* 				// var index = $(this).index();*/
/* */
/* 				ykp.doAjax({*/
/* 					url: '/api/api_service/arrange',*/
/* 					methods: 'post',*/
/* 					data: data,*/
/* 					success: function(res) {*/
/* 						ykp.prompt('提交成功');*/
/*                         getEntireList(ykp.getCookie('page_no'));*/
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
/* 		//获取分页列表当前点击的页数，再从服务器获取数据*/
/* 		function getPageList(current) {*/
/* 			getEntireList(current);*/
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
/* </script>*/