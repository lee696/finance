<?php

/* admin/task/account.html */
class __TwigTemplate_b9c3d0c43df72cf44c7ce0a4c791ef7d7d76a3bffa5d30616fb0510f3be273dc extends Twig_Template
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
\t#templateCon td {
\t\theight: inherit;
\t\tline-height: 27px;
\t\ttext-align: center;
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
\t#templateCon input {
\t\tline-height: normal;
\t\t/*width: 100%;*/
\t}
\t
\t#templateCon .account_alert label {
\t\twidth: 97px;
\t}
\t
\t#heightsearch1 label,
\t#height_search1 label {
\t\ttext-align: right;
\t\twidth: 80px;
\t\tfont-weight: normal;
\t}
\t
\t.glyphicon {
\t\ttop: 0px !important;
\t}
</style>
<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<div style=\"margin-top: 50px;  width: 860px; padding: 0px;\" class=\"row col-xs-12\">
\t\t\t<div class=\"col-xs-12 infobox-container\" style=\"padding: 0px; margin-left: -10px;\">

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
\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"0\" data-size=\"50\" style=\"height: 57px;width: 57px;line-height: 56px;\">

\t\t\t\t\t\t\t<span class=\"percent\" id=\"percent\"></span>
\t\t\t\t\t\t\t<canvas height=\"57\" width=\"57\"></canvas>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"infobox-data\" style=\"margin:3px 0 0 20px;\">
\t\t\t\t\t\t<div class=\"infobox-content\" id=\"isOk\">
\t\t\t\t\t\t\t已完成
\t\t\t\t\t\t</div>

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
\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"0\" data-size=\"50\" style=\"height: 57px; width: 57px; line-height: 56px;\">
\t\t\t\t\t\t\t<span class=\"percent\" id=\"percent2\"></span>
\t\t\t\t\t\t\t<canvas height=\"57\" width=\"57\"></canvas>
\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"0\" data-size=\"50\" style=\"height: 57px; width: 57px; line-height: 56px;\">
\t\t\t\t\t\t\t<span class=\"percent\" id=\"percent2\"></span>
\t\t\t\t\t\t\t<canvas height=\"57\" width=\"57\"></canvas>
\t\t\t\t\t\t</div>
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
\t\t</div>
\t\t<div class=\"row col-sm-12\" style=\"margin-top: 50px;padding-left:0;padding-right:0;\">
\t\t\t<div class=\"kind row\" style=\"z-index: 20;\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"now\">小规模</li>
\t\t\t\t\t<li>一般纳税人</li>
\t\t\t\t</ul>
\t\t\t\t<div id=\"tspage\" style=\"border: 0px red solid; width: 480px;height: 30px;display:none;\">
\t\t\t\t\t<a id=\"go_\" href=\"javascript:void(0)\">有部分一般纳税人数据,点击前往</a>
\t\t\t\t\t<a href=\"javascript:;\" class=\"close_ts\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<!--小规模-->
\t\t\t\t\t\t\t<div id=\"task-tab\" class=\"tab-pane active\">
\t\t\t\t\t\t\t\t<div class=\"row\" id=\"topTool\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" pts=1 sear=\"customer_name\" placeholder=\"企业名称\" autofocus/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" pts=0 sear=\"khm_customer.customer_num\" placeholder=\"企业编码\" autofocus/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t                 \t  <select style=\"width: 180px\" pts=3 sear=\"jzm_service_info.fuze_id\" class=\"advandced-search select2-hidden-accssible\"  tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t                  <option value=\"\">负责人</option>
\t\t\t\t\t                      </select>
\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"搜索\" class=\" search btn btn-info btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\" fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;  margin-right: 5px;position:relative;\">
\t\t\t\t\t\t\t\t\t\t<button id=\"heightsearch\" title=\"高级搜索\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\" fa fa-filter\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn flush btn-info btn-sm\" style=\"background-color: #32CD32!important;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\" fa fa-refresh\"></i>
\t\t\t\t\t\t                </button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\" contentAuthority=\"96\">
\t\t\t\t\t\t\t\t\t\t<label type=\"button\" id=\"mergeItem\" title=\"导入\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"btn btn-info btn-sm position-relative mergeItem\" for=\"leading-in\">
\t\t\t\t                            <i class=\"fa fa-sign-in\"></i>
\t\t\t\t                        </label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"289\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"分配负责人\" id=\"moveToClue\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"moveToClue btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-hand-o-right\"></i>
\t\t\t\t\t\t                </button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:290px;height: 36px\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px;
\t\t\t\t\t\t\t\t\t\t\tbackground: #E6E6E6;\" data-kind=\"0\"> 查看全部</a>
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
\t\t\t\t\t\t\t\t\t\t\t\t<!--<input type=\"text\" gjs=5 sear=\"year\" data-year=\"true\" />-->
\t\t\t\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=5 sear=\"year\" data-year=\"true\"></select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>月份</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=5 sear=\"month\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">  请选择  </option>
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
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float:left;
\t\t\t\t\t\t\t\t\t\t\t\tmargin-bottom:5px;\">
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
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.customer_num\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>仓位</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select gjs=3 sear=\"ckm_position_num.pos_id\" class=\"cw\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>服务周期</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select gjs=0 sear=\"htm_contract.payment_cycle\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">  请选择  </option>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">  请选择  </option>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">  请选择  </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\"> 未开始</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"> 待审批</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\"> 已通过 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\"> 未通过 </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\"clear:both;padding-top:10px;text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t                        查询
\t\t\t\t\t\t\t\t                    </button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"rest\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t\t                       重置
\t\t\t\t\t\t\t\t\t                    </button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t\t\t\t<table id=\"dynamic-table1\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t\t                                <input type=\"checkbox\" class=\"ace\" onclick=\"checkAll(this.checked)\"/>
\t\t\t\t\t\t\t\t                                \t<span class=\"lbl\"></span>
\t\t\t\t\t\t\t\t                                </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t <th>操作</th> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"1\">企业名称</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"19\">任务等级</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"2\">客户编码</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"3\">仓位编码</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"4\">服务周期</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"5\">逾期</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"6\">截止月份</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"7\">负责人</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"8\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"9\" data-month></th>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"dataList\">
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--一般纳税人-->
\t\t\t\t\t\t\t<div id=\"member-tab\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t<div class=\"row\" id=\"topTool\">
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
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"ssearch1\" class=\" search btn btn-info btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\" fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<button id=\"height_serch\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\" fa fa-filter\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<button id=\"flush\" type=\"button\" class=\"btn flush btn-info btn-sm\" style=\"background-color: #32CD32!important;\">
           \t\t\t\t\t\t\t\t \t<i class=\" fa fa-refresh\"></i>
        \t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"96\" style=\" float: left;  margin-right:5px; \">
\t\t\t\t\t\t\t\t\t\t<!--<button id=\"import\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #fb9a47 !important; border-color: #fb9a47;\">
\t\t\t\t\t\t\t\t\t\t\t\t导入
\t\t\t\t\t\t\t\t\t\t\t</button>-->
\t\t\t\t\t\t\t\t\t\t<label type=\"button\" id=\"\" title=\"导入\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"btn btn-info btn-sm position-relative mergeItem\" for=\"leading-in\">
\t\t\t\t                            <i class=\"fa fa-sign-in\"></i>
\t\t\t\t                       </label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"289\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t<button title=\"分配负责人\" type=\"button\" id=\"moveToClue\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"moveToClue btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t\t\t                    <i class=\"fa fa-hand-o-right\"></i>
\t\t\t\t\t\t                </button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;  margin-right: 5px;position:relative;\">
\t\t\t\t\t\t\t\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:290px;height: 36px;\">
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
\t\t\t\t\t\t\t\t\t\t\t\t<!--<input type=\"text\" gjs=5 sear=\"year\" data-year=\"true\" />-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>月份</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=5 sear=\"month\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">  请选择  </option>
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
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float:left;
\t\t\t\t\t\t\t\t\t\t\t\tmargin-bottom:5px;\">
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
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.customer_num\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>仓位</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select gjs=3 sear=\"ckm_position_num.pos_id\" class=\"cw\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>服务周期</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select gjs=0 sear=\"htm_contract.payment_cycle\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">  请选择  </option>
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
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>收款情况</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select gjs=0 sear=\"jzm_service_info.get_money\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">  请选择  </option>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">  请选择  </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\"> 未开始</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"> 待审批</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\"> 已通过</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\"> 未通过</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\"clear:both;padding-top:10px;text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t                        查询
\t\t\t\t\t\t\t\t                    </button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"rest1\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t\t                       重置
\t\t\t\t\t\t\t\t\t                    </button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t\t\t\t<table id=\"dynamic-table2\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t\t                                    <input type=\"checkbox\" class=\"ace\" onclick=\"checkAll(this.checked)\"/>
\t\t\t\t\t\t\t\t                                    <span class=\"lbl\"></span>
\t\t\t\t\t\t\t\t                                    </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t <th>操作</th> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"1\">企业名称</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"19\">任务等级</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"2\">客户编码</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"3\">仓位编码</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"4\">服务周期</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"5\">逾期</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"6\">截止月份</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"7\">负责人</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"8\" data-month></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"month\" data-num=\"9\" data-month></th>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"dataList1\">
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.#member-tab -->
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
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.widget-main -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.widget-body -->
\t\t\t\t</div>
\t\t\t\t<!-- /.widget-box -->
\t\t\t</div>
\t\t\t<!-- /.col -->
\t\t</div>

\t\t<!--账务提示单-->
\t\t<div id=\"tipList\" style=\"display: none\">
\t\t\t<div class=\"account_alert\">
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>客户名称： </label>
\t\t\t\t\t<input type=\"text\" id=\"name\" disabled/>
\t\t\t\t\t<label>负责人： </label>
\t\t\t\t\t<input type=\"text\" id=\"assign\" disabled>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>月份： </label>
\t\t\t\t\t<input type=\"text\" id=\"month\" disabled/>
\t\t\t\t\t<label>截至本年收入： </label>
\t\t\t\t\t<input type=\"number\" field=\"this_year\">
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>连续11个月收入： </label>
\t\t\t\t\t<input type=\"number\" field=\"lx_11_month\" />
\t\t\t\t\t<label>应收账款： </label>
\t\t\t\t\t<input type=\"number\" field=\"receivable\">
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>应付账款： </label>
\t\t\t\t\t<input type=\"number\" field=\"account_payable\" />
\t\t\t\t\t<label>其他应收款： </label>
\t\t\t\t\t<input type=\"number\" field=\"receivable_others\">
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>其他应付款： </label>
\t\t\t\t\t<input type=\"number\" field=\"payable_others\" />
\t\t\t\t\t<label>税负率： </label>
\t\t\t\t\t<input type=\"number\" field=\"tax_bearing_rate\">
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>欠成本发票： </label>
\t\t\t\t\t<input type=\"number\" field=\"lack_costing_invoice\" />
\t\t\t\t\t<label>欠费用发票： </label>
\t\t\t\t\t<input type=\"number\" field=\"lack_expense_invoice\">
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label>本年累计亏损： </label>
\t\t\t\t\t<input type=\"number\" field=\"accumulated_loss\" />
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label style=\"float:left;margin-right:5px;\"> 银行对账单： </label>
\t\t\t\t\t
\t\t\t\t\t<!--<label class=\"\" style=\"position:relative;top:2px;border:1px solid #000;line-height:70px;width:70px;height:70px;cursor: pointer; text-align: center;\">
                        <i class=\"fa fa-plus fa-2x\" aria-hidden=\"true\" style=\"position: relative;top: 5px;\"></i>
                        <input type=\"file\" class=\"uploadImage _decrease\" style=\"position: absolute;opacity: 0;left:-9999px;\">
                    </label>-->
\t\t\t\t</div>
\t\t\t\t<div class=\"\" style=\"padding: 2px; margin-top: 20px;margin-left: 25px;\">
\t\t\t\t\t\t<div id=\"fileBox\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"uploadBox\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"upload1\" style=\"outline: none;background-color: #009688 !important; margin-top: 20px;\" class=\"btn btn-info btn-sm position-relative\">
\t\t\t\t                        上传文件
\t\t\t\t        \t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t<div id=\"sendMsg\" customer_id=\"\" style=\"height: 30px;line-height: 40px\">
\t\t\t\t\t<label>是否发送短信：</label>
\t\t\t\t\t<input type=\"radio\" value=\"1\" name=\"is_send\">是
\t\t\t\t\t<input type=\"radio\" value=\"2\" name=\"is_send\" checked=\"true\">否
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div style=\"text-align:right;margin-top:15px;\">
\t\t\t\t<button class=\"btn btn-info\" id=\"print\">
\t\t\t\t\t打印
\t\t\t\t</button>
\t\t\t\t<button class=\"close_get btn btn-info btn-sm\">
\t\t\t\t\t关闭
\t\t\t\t</button>
\t\t\t\t<button class=\"add_alert btn btn-info\">
                    保存
                </button>
\t\t\t</div>
\t\t\t<div style=\"display:none;\">
\t\t\t\t<div class=\"print_area\">
\t\t\t\t\t<style type=\"text/css\" media=\"print\">
\t\t\t\t\t\ttable {
\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\tborder: 1px solid #000;
\t\t\t\t\t\t\tborder-collapse: collapse;
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\ttr {
\t\t\t\t\t\t\theight: 40px;
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\ttd {
\t\t\t\t\t\t\tpadding: 4px;
\t\t\t\t\t\t\tborder: 1px solid #000;
\t\t\t\t\t\t\twhite-space: nowrap !important;
\t\t\t\t\t\t\ttext-align: left;
\t\t\t\t\t\t}
\t\t\t\t\t</style>
\t\t\t\t\t<div style=\"text-align:center;\">*账务提示单*<span class=\"company\"></span></div>
\t\t\t\t\t<div>为了贵公司 财务制度更加完善、健全，请重视我们就贵公司财税方面做出的提示。</div>
\t\t\t\t\t<div>如有疑问请联系：<span style=\"float:right;\">现将贵公司无法入账的单据退换给您：</span></div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span>会计顾问：</span><span style=\"margin-left:150px;\">电话</span>：
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>序号</td>
\t\t\t\t\t\t\t\t\t<td>名称</td>
\t\t\t\t\t\t\t\t\t<td>数量</td>
\t\t\t\t\t\t\t\t\t<td>原因</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>（<span class=\"remind_time\"></span>）月财税提示：</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t1、请在凭证封面、记账凭证、费用报销单、工资表上签字盖章；
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t2、每月请及时提供银行对账单及相应回单；
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t3、每月请及时提供房租、水电费发票；
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t4、工资名单有变动时请及时告知；
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t5、纳税户请至少每季度提供一次银行对账单及相应回单；
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t6、通过现金结算的收入、成本发票请在发票左上角表明现金；
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t7、通过银行付款的费用发票请在发票左上角标明银行；
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t9、收据不入账；
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"5\" style=\"font-size:18px;font-bold:weight;\">
\t\t\t\t\t\t\t\t\t\t特别提醒
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"5\">
\t\t\t\t\t\t\t\t\t\t1、截止到（<span class=\"remind_time\"></span>）年收入（<span syllable=\"this_year\"></span>）元，连续11个月收入（<span syllable=\"lx_11_month\"></span>）元。<span class=\"remind\">重要提醒：（工厂）50万元/（商贸）80万元/（服务业）500万元收入将被责令为一般纳税人。（小规模提醒）</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"5\">
\t\t\t\t\t\t\t\t\t\t2、应收账款（<span syllable=\"receivable\"></span>），应付账款（<span syllable=\"account_payable\"></span>），其他应收款（<span syllable=\"receivable_others\"></span>），其他应付款（<span syllable=\"payable_others\"></span>）。
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"5\">
\t\t\t\t\t\t\t\t\t\t3、截止到（<span class=\"remind_time\"></span>），贵公司税负率（<span syllable=\"tax_bearing_rate\"></span>%），偏<i style=\"padding:0 10px;\"></i>（商贸1%-1.5%，工厂2%-3%）。
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"5\">
\t\t\t\t\t\t\t\t\t\t4、截止到（<span class=\"remind_time\"></span>），贵公司累计欠成本发票（<span syllable=\"lack_costing_invoice\"></span>）元，欠费用发票（<span syllable=\"lack_expense_invoice\"></span>）元；请于三个月内提供过来入账。
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"5\">
\t\t\t\t\t\t\t\t\t\t5、截止到（<span class=\"remind_time\"></span>），贵公司累计亏损（-<span syllable=\"accumulated_loss\"></span>）元。
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"remind_time\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span>温馨提示：账务提示单看完后，请取出来单独保管。</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t
\t\t
\t\t<div class=\"label_popup\" id=\"export\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t\t<span style=\"display: inline-block;\">导入记账</span>
\t\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t\t</div>
\t\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t\t<input type=\"file\" width=\"200px\" style=\"margin: auto;\" id=\"efile\" />
\t\t\t\t\t<!--<hr>-->
\t\t\t\t</div>
\t\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t\t<button id=\"ghItem\" class=\" btn\">记账模板</button>
\t\t\t\t\t<button class=\"btn btn-info  submit\" style=\"padding: 6px; border-radius: 0px;\">保存</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 867
        $this->loadTemplate("admin/mark.html", "admin/task/account.html", 867)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/task/account.html", 867)->display($context);
        // line 868
        echo "\t</div>
</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/assets/js/jQuery.print.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script>
\tjQuery(function(\$) {
\t\tcs.getNodes([96,289]);

\t\tvar ftype = 2;
\t\tvar curPage = 1;
\t\tvar pagesize = 10;
\t\tvar employees = {};
\t\tvar where = ''
\t\tvar filter = {1: '', 2: ''};
\t\t//var month2 = {1: '', 2: ''};
\t\tvar month1 = '',month2 = '';
\t\tvar order = 'khm_customer.id desc';
\t\tvar param = {
\t\t\taid: ykp.getCookie('aid'),
\t\t\ttime: ykp.getCookie(\"time\"),
\t\t\ttimestamp: '',
\t\t\tflag: false
\t\t};
\t\tvar hMonth = [];
\t\thMonth = cs.last_year_month();
\t\t\$('#filterBtns a').mouseover(function() {
\t\t\t\$(this).addClass('over');
\t\t})
\t\t\$('#filterBtns a').mouseout(function() {
\t\t\t\$(this).removeClass('over');
\t\t})
\t\t
\t\tcs.setFuze({
\t\t\tcheck:true,
\t\t\tconId:[\"#dataList\",\"#dataList1\"],
\t\t\ttype:\"3\",
\t\t\turl:\"/api/api_service/transfer_user\",
\t\t\tfun:function(ftype){

\t\t\t\tgetAccountList(1, ftype);
\t\t\t}
\t\t});
\t\t//条件过滤器
\t\t\$('.myFilter').click(function() {
\t\t\tif(!\$(this).hasClass('clc')) {
\t\t\t\t\$(this).addClass('clc').siblings().removeClass('clc');
\t\t\t}
\t\t\tvar user = JSON.parse(ykp.getCookie('userinfo'));
\t\t\tvar type = \$(this).parents('.tab-pane').index() == 0 ? 2 : 1;
\t\t\tvar data = {
\t\t\t\t\"type\": 3,
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
//\t\t\tfilter = data['where'];
\t\t\tgetAccountList_4(data);
\t\t})

\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_service/service_list',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter:where,
\t\t\t\tlimit: pagesize,
\t\t\t\ttype:3
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '#pageBar'
\t\t\t},
\t\t\tcheck:true,
\t\t\tdefaultOrder: order,
\t\t\tinitOrder:'khm_customer.id',
\t\t\tcontentId: ftype==2?\"#dataList\":\"#dataList1\",
\t\t\tparams:[{
\t\t\t\tid: ftype ==2?\"#dynamic-table1\":\"dynamic-table2\",
\t\t\t\tfield:[\"\",\"\",\"khm_customer.name\",\"maxLv\",\"customer_num\",\"pos_name\",\"\",
\t\t\t\t\t\"htm_contract.payment_cycle\",\"\",\"jzm_service_info.fuze_id\"
\t\t\t\t]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res,ftype);
\t\t});

\t\t//打印账务提示单
\t\tfunction printAccount() {
\t\t\t\$('#templateCon #print').click(function() {
\t\t\t\t//Print ele4 with custom options
\t\t\t\t\$(\"#templateCon .print_area\").print({
\t\t\t\t\t//Use Global styles
\t\t\t\t\tglobalStyles: false,
\t\t\t\t\t//Add link with attrbute media=print
\t\t\t\t\tmediaPrint: false,
\t\t\t\t\t//Custom stylesheet
\t\t\t\t\tstylesheet: null,
\t\t\t\t\t//Print in a hidden iframe
\t\t\t\t\tiframe: true,
\t\t\t\t\t//Don't print this
\t\t\t\t\tnoPrintSelector: \".no-print\",
\t\t\t\t\t//Add this at top
\t\t\t\t\tprepend: null,
\t\t\t\t\t//Add this on bottom
\t\t\t\t\tappend: null,
\t\t\t\t\t//Log to console when printing is done via a deffered callback
\t\t\t\t\tdeferred: \$.Deferred().done(function() {
\t\t\t\t\t})
\t\t\t\t});
\t\t\t});
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
\t\t\t\t 
\t\t\t\tfor(var i in data) {
\t\t\t\t\tif(data[i]['name']) {
\t\t\t\t\t\temployees[data[i]['id']] = data[i]['name'];
\t\t\t\t\t\t\$('.advandced-search').append(new Option(data[i]['name'], data[i]['id']));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t});

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
\t\t\t\tvar where = `\${param.timestamp}`
\t\t\t\tvar data = {
\t\t\t\t\t\"type\": 3,
\t\t\t\t\t\"page\": curPage,
\t\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\t\"where\": where
\t\t\t\t}
\t\t\t\tif(param.aid != undefined && param.aid != '') {
\t\t\t\t\tdata['staff_name'] = param.aid;
\t\t\t\t}
\t\t\t\tgetAccountList_3(data);
\t\t\t\tykp.setCookie(\"aid\", \"\", (1 / 24));
\t\t\t\tykp.setCookie(\"time\", \"\", (1 / 24));
\t\t\t} else if(ykp.getCookie('detailsId') && ykp.getCookie('detailsId') != '') {
\t\t\t\tvar id = ykp.getCookie('detailsId');
\t\t\t\tvar data = {
\t\t\t\t\t\"type\": 3,
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
\t\t\t\tgetAccountList(1, 2);
\t\t\t}
\t\t}

\t\tfunction getAccountList_4(data) {
\t\t\tcs.getChart(3,'',data);
\t\t\tykp.list({
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: data,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\thMonth = cs.last_year_month();
\t\t\t\t\t
\t\t\t\t\tvar dataList, pagination, dataTable, type;
\t\t\t\t\ttype = data['index'];
\t\t\t\t\tdataList = type == 2 ? '#dataList' : '#dataList1';
\t\t\t\t\tdataTable = type == 2 ? '#dynamic-table1' : '#dynamic-table2';
\t\t\t\t\t//生成月份表头
\t\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'),res['data']['months'],type);
\t\t\t\t\tif(res.data.items == '' || res.data == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$(dataList).html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\taddList(res, type);
\t\t\t\t\tif(type == 1) {
\t\t\t\t\t\t\$(\"#member-tab\").addClass('active');
\t\t\t\t\t\t\$(\"#task-tab\").removeClass('active');
\t\t\t\t\t\t\$(\".kind li\").eq(1).addClass(\"now\").siblings().removeClass('now');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}

\t\t\$('.flush').click(function() {
\t\t\tfilter = '';
\t\t\tykp.setCookie('where','');
\t\t\t\$('[sear=\"customer_name\"]').val('');
\t\t\t\$('[sear=\"khm_customer.customer_num\"]').val('');
\t\t\t\$('[sear=\"jzm_service_info.fuze_id\"]').val('').trigger('change');
\t\t\tgetAccountList(1, ftype);
\t\t})

\t\tfunction getAccountList_3(data) {
\t\t\tykp.list({
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: data,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tvar resdata = res.data.items;
\t\t\t\t\tvar num = 0;
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
\t\t\t\t\t\tif(param.flag) {
\t\t\t\t\t\t\tgetAccountList_2(1, 2, '', param.timestamp);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tgetAccountList_2(1, 2, param.aid, param.timestamp);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif(num > 0) {
\t\t\t\t\t\ttzpage();
\t\t\t\t\t\t\$(\"#tspage\").show();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//跳转页面的数据加载
\t\tfunction getAccountList_2(curPage, ctype, aid, timestamp) {
\t\t\tvar where = `khm_customer.tax_type=\${ctype} and \${timestamp}`;
\t\t\tif(param.flag) {
\t\t\t\twhere = `khm_customer.tax_type=\${ctype} and \${timestamp}`;
\t\t\t}
\t\t\tvar data = {
\t\t\t\t\"type\": 3,
\t\t\t\t\"page\": curPage,
\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\"where\": where
\t\t\t}
\t\t\tif(aid && aid != '') {
\t\t\t\tdata['staff_name'] = aid;
\t\t\t}
\t\t\tcs.getChart(3,'',data);
\t\t\tykp.list({
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: data,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\thMonth = cs.last_year_month();
\t\t\t\t\t//生成月份表头
\t\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'),res['data']['months'],type);
\t\t\t\t\tif(res.data.items == '') {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tvar dataList, pagination, dataTable, type;
\t\t\t\t\tvar datas = res.data.items;
\t\t\t\t\ttype = datas[0].list[0]['khm_customer.tax_type'];
\t\t\t\t\tdataList = type == 2 ? '#dataList' : '#dataList1'
\t\t\t\t\tdataTable = type == 2 ? '#dynamic-table1' : '#dynamic-table2';
\t\t\t\t\taddList(res, ctype);
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//跳转页面查询后仍需跳转一般纳税人时
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

\t\t//导入导出
\t\tvar data = {
\t\t\turl: \"/api/api_service/serviceExport\",
\t\t\ttype: '3',
\t\t\ttitle: '记账模板'
\t\t}
\t\tcs.jzexport(data, function(res) {
\t\t\tsetTimeout(function(){
\t\t\t\t\t\t\t\tykp.prompt(\"上传成功\");
\t\t\t\t\t\t\t},1000)\t
\t\t\tgetAccountList(1, 2);
\t\t\t\$('.label_popup').hide();
\t\t})

\t\t//显示一般纳税热 或 小规模
\t\t\$('.kind').on('click', 'li', function() {
\t\t\t\$('#changePageNum').val(10);
\t\t\t// if(\$(this).hasClass('now')) {
\t\t\t// \treturn;
\t\t\t// }
\t\t\t\$(this).addClass('now').siblings().removeClass('now');
\t\t\tvar index = \$(this).index();
\t\t\tif(index == 0) {
\t\t\t\tftype = 2;
\t\t\t\t\$('#task-tab').addClass('active')
\t\t\t\t\$('#member-tab').removeClass('active');
\t\t\t\tgetAccountList(1, 2);
\t\t\t} else {
\t\t\t\tftype = 1;
\t\t\t\t\$('#member-tab').addClass('active').siblings().removeClass('active');
\t\t\t\tgetAccountList(1, 1);
\t\t\t}
\t\t\t//通用排序
\t\t\tcs.general_sort({
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tfilter:where,
\t\t\t\t\tlimit: pagesize,
\t\t\t\t\ttype:3
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tcheck:true,
\t\t\t\tinitOrder:'khm_customer.id',
\t\t\t\tdefaultOrder: order,
\t\t\t\tcontentId: ftype==2?\"#dataList\":\"#dataList1\",
\t\t\t\tparams:[{
\t\t\t\t\tid: ftype ==2?\" #dynamic-table1\":\"#dynamic-table2\",
\t\t\t\t\tfield:[\"\",\"\",\"khm_customer.name\",\"\",\"customer_num\",\"pos_name\",
\t\t\t\t\t\t\"\",\"htm_contract.payment_cycle\",\"jzm_service_info.fuze_id\"
\t\t\t\t\t]
\t\t\t\t}]
\t\t\t}, function(res, _sort_role) {
\t\t\t\tsort_role = _sort_role;
\t\t\t\taddList(res,ftype);
\t\t\t});
\t\t});

\t\tvar dataList, pagination;

\t\t//每页数量
\t\t\$('#changePageNum').change(function() {
\t\t\tpagesize = \$(this).val();
\t\t\tykp.setCookie('page_size',pagesize);
\t\t\t\$('.ui-pagination-container').remove();
\t\t\tgetAccountList(1, ftype);
\t\t});

\t\tfunction getAccountList(curPage, ctype) {
\t\t\thMonth = cs.last_year_month();
\t\t\tvar data = {
\t\t\t\t\"type\": 3,
\t\t\t\t\"page\": curPage,
\t\t\t\t\"page_size\": pagesize,
\t\t\t\t\"where\": filter[ctype] ? (\"khm_customer.tax_type=\" + ctype +\" and \" + filter[ctype]) : \"khm_customer.tax_type=\" + ctype,
\t\t\t\tfilter:filter[ctype]
\t\t\t}
\t\t\tif(month1){
\t\t\t\tdata.month1 = month1;
\t\t\t\tdata.month2 = month2;
\t\t\t}
\t\t\tcs.getChart(3,'',data);
\t\t\tykp.list({
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: data,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\t//生成月份表头
\t\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'),res['data']['months'],ctype);
\t\t\t\t\tvar tableId = (ctype == 2) ? \$('#dataList').parent().attr('id') : \$('#dataList1').parent().attr('id');

\t\t\t\t\tvar tid = \$('#' + tableId).parents('.tab-pane').attr('id');
                    if(res.data.items == '') {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\tif(ctype == 2) {
\t\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\t}
\t\t\t\t\t\tif(ctype == 1) {
\t\t\t\t\t\t\t\$('#dataList1').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\t}
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\taddList(res, ctype);
\t\t\t\t}
\t\t\t});
\t\t}

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
\t\t
\t\t//生成月份表头：el 所有月份表头，months:开始、结束月份
\t\tfunction generateMonthTh(el,months,type){
            if(!months){
                return;
            }
\t\t\tvar start = {year:parseInt(months['start'].substring(0,4)),month:parseInt(months['start'].substring(4))};
\t\t\tvar end = {year:parseInt(months['end'].substring(0,4))};
\t\t\tvar El = type == 2 ? '#dynamic-table1' : '#dynamic-table2';
\t\t\tvar start_month;
\t\t\t\$(El+' .thColor .month').each(function(i,e){
\t\t\t\tstart_month = i + start['month'];
\t\t\t\tif(start_month > 12){
\t\t\t\t\tstart_month = start_month - 12;
\t\t\t\t\t\$(this).text(end['year'] + '' + (start_month  < 10 ? '0' + start_month : start_month )).attr('month',end['year'] + '' + (start_month  < 10 ? '0' + start_month : start_month ));
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\t\$(this).text(start['year'] + '' + (start_month < 10 ? '0' + start_month : start_month)).attr('month',start['year'] + '' + (start_month < 10 ? '0' + start_month : start_month));
\t\t\t});

\t\t\t//自定义列表
            if(type==2){
  //              console.log(\$('#task-tab').find('.custom').length <1)
                if(\$('#task-tab').find('.custom').length <1) {
                    cs.custorm_check('#dynamic-table1', 'tbody', true);
                }
            }else {
                if(\$('#member-tab').find('.custom').length <1) {
                    cs.custorm_check('#dynamic-table2', 'tbody', true);
                }
            }

\t\t};
\t\tfunction Month(month,ftype){
\t\t\tvar result = \"\";
\t\t\tvar El = ftype == 2 ? '#dynamic-table1' : '#dynamic-table2';
\t\t\t\$(El+' .thColor .month').each(function(i,e){
\t\t\t\tif(month == \$(this).text()) {
\t\t\t\t\tresult = i;
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t})
\t\t\treturn result;
\t\t}
\t\tfunction addList(res, ctype) {
\t\t\tvar data = res.data.items;
\t\t\tvar status = []; //该数组存放th display属性值
\t\t\tvar ths = ftype == 2 ? \$('#dynamic-table1 .thColor th') : \$('#dynamic-table2 .thColor th'); //获取所有的th
\t\t\tvar html = '';
\t\t\tvar Class = '';
\t\t\tvar index = ['', 'fa  fa-circle-o', 'glyphicon glyphicon-ok', 'glyphicon glyphicon-remove'];
\t\t\tvar timeArr = new Array(12);
\t\t\tvar obj = {};
\t\t\tvar cycleName = {
\t\t\t\tt1: '每月',
\t\t\t\tt3: '季度',
\t\t\t\tt6: '半年',
\t\t\t\tt12: '一年'
\t\t\t}
\t\t\tvar cycle = [];
\t\t\tvar yq = []; //逾期
\t\t\tvar fzp = []; //负责人
\t\t\tfor(var i = 0; i < ths.length; i++) {
\t\t\t\tstatus.push(ths.eq(i).css('display'));
\t\t\t}
            ykp.setCookie('page_no', res.data.curPage, (1 / 24));
\t\t\tif(!data) {
\t\t\t\tykp.prompt('没有数据');
\t\t\t\treturn false;
\t\t\t}

\t\t\tvar overdue = 0;

\t\t\t//负责人id
\t\t\tvar fuze_ids = [];
\t\t\t//负责人名字
\t\t\tvar fuze = [];

\t\t\t//得到所有员工
\t\t\tvar emps = allemp();
\t\t\tfor(var z in data) {
\t\t\t\tdata[z]['fuze_ids'] = [];
\t\t\t\tdata[z]['fuze_ids1'] = [];
\t\t\t}
\t\t\t
\t\t\tvar timeArr = new Array(12);
\t\t\tfor(var i in data) {
\t\t\t\tvar newMark = 'inline-block';
\t\t\t\toverdue = 0;
\t\t\t\tfor(var j = 0; j < 12; j++) {
\t\t\t\t\ttime = data[i].list[j] ? Month(data[i].list[j]['jzm_service_info.time'],ctype) :\"\"; 
//\t\t\t\t\ttime = data[i].list[j] ? hMonth.indexOf(data[i].list[j]['jzm_service_info.time']) :\"\";
\t\t\t\t\tobj.status = data[i].list[j] ? data[i].list[j]['jzm_service_info.status'] :\"\";
\t\t\t\t\tobj.get_money = data[i].list[j] ? data[i].list[j]['jzm_service_info.get_money']:\"\";
\t\t\t\t\tobj.id = data[i].list[j] ? data[i].list[j]['jzm_service_info.id']:\"\";
\t\t\t\t\tobj.time = data[i].list[j] ? data[i].list[j]['jzm_service_info.time']:\"\";
\t\t\t\t\tobj.contract_id = data[i].list[j] ? data[i]['list'][j]['jzm_service_info.contract_id']:\"\";
\t\t\t\t\tobj.fuze_id = data[i].list[j] ? data[i]['list'][j]['jzm_service_info.fuze_id']:\"\";
\t\t\t\t\tobj.handStatus = data[i].list[j] ? (data[i]['list'][j]['htm_contract.status'] || \"\") :\"\";
\t\t\t\t\tobj.Status = data[i].list[j] ? (data[i].list[j]['htm_contract.status']  == 1 || data[i].list[j]['htm_contract.status']  == 2 ? false : true) : \"\" ; //合同状态
\t\t\t\t\ttimeArr[time] = obj;
\t\t\t\t\tobj = {};
\t\t\t\t}
\t\t\t\tfor(var j = data[i].list.length - 1; j >= 0; j--) {

\t\t\t\t\toverdue += parseInt(data[i].list[j]['jzm_service_info.overdue']);
\t\t\t\t\tif(data[i].list[j]['jzm_service_info.status'] != 0) {
\t\t\t\t\t\tnewMark = 'none';
\t\t\t\t\t}
\t\t\t\t\t//\t\t\t\t\tconsole.log(data[i].list[j]['jzm_service_info.fuze_id'])
\t\t\t\t\t//负责人id不存在 则将负责人id加入fuze_ids中
\t\t\t\t\tif(\$.inArray(data[i].list[j]['jzm_service_info.fuze_id'], data[i]['fuze_ids']) == -1) {
\t\t\t\t\t\tdata[i]['fuze_ids'].push(data[i].list[j]['jzm_service_info.fuze_id']);
\t\t\t\t\t\tdata[i]['fuze_ids1'].push(data[i].list[j]['jzm_service_info.fuze_id']);
\t\t\t\t\t}

//\t\t\t\t\tif(\$.inArray(data[i].list[j]['htm_contract.payment_cycle'], cycle) == -1) {
//\t\t\t\t\t\tcycle.push(cycleName[\"t\" + data[i].list[j]['htm_contract.payment_cycle']]);  
//\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t//\t\t\t\tconsole.log(data[i]['fuze_ids']);
\t\t\t\t//根据负责人id 获取负责人姓名并存入fuze中
\t\t\t\tfor(var j = 0; j < 1; j++) {
\t\t\t\t\tdata[i]['fuze_ids'] = employees[data[i]['fuze_ids'][j]];
\t\t\t\t}
\t\t\t\t//查出员工表
\t\t\t\tfor(var j in emps) {
\t\t\t\t\tif(emps[j]['bmm_employees.id'] == data[i].list[0]['htm_contract.assign_staff_id']) {
\t\t\t\t\t\tvar empname = emps[j]['bmm_employees.name'];
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t\t
\t\t\t\tcycle=cycleName[\"t\" + data[i].list[0]['htm_contract.payment_cycle']];
\t\t\t\thtml +=
\t\t\t\t\t`<tr data-id=\"\${data[i].contract_id}\"  cid=\"\${data[i].list[0]['khm_customer.id']}\"  data-customerid=\"\${data[i].list[0]['khm_customer.name']}\" payment_cycle=\"\${data[i].list[0]['htm_contract.payment_cycle']}\">
\t\t\t\t\t <td class=\"center\">
                        <label class=\"pos-rel\">
                        <input type=\"checkbox\" name=\"check\" class=\"ace\"/>
                        <span class=\"lbl\"></span>
                        </label>
                    </td>
\t\t\t\t\t<td  class=\"center\" >
\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t<a><span data-index = 2 class=\"see  btYellow\" title=\"查看报税数据\" id=\"see\"><i class=\"fa fa-eye\"></i></span></a>
\t\t\t\t\t\t<a><span data-index = 0 class=\"see  btBlue\" title=\"查看纳税数据\" id=\"see\"><i class=\"fa fa-eye\"></i></span></a>
\t\t\t\t\t\t <a><span data-index = 1 class=\"see btGreen\" title=\"查看账务提示单\" id=\"see\"><i class=\"fa fa-eye\"></i></span></a>
\t\t\t\t\t\t</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td data-num=\"1\" style=\"display:\${status[2]};\" data-cid=\"\${data[i].list[0]['khm_customer.id']}\">
\t\t\t\t\t\t<div style=\"display:\${data[i].is_red == 1 ? \"inline-block\" : \"none\"};height:14px;width:26px\">
\t\t\t\t\t\t\t<span class=\"spanTip\" style=\"\"><span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"customerDetail pos-rel\">\${data[i].list[0]['khm_customer.name']}</a>
\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t<i relation=\${data[i]['is_relotion']} class=\"sc fa \${data[i]['is_relotion'] == 0 ? 'fa-heart-o' : 'fa-heart'}\" style=\"color:\${data[i]['is_relotion']==1 ? 'red' : ''}\"></i>
\t\t\t\t\t\t\t<i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data[i]['Remark'].length > 0 ? 'red' : ''}\"  data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i>
\t\t\t\t\t\t</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"center\" style=\"display:\${status[3]};\" data-num=\"19\">
\t\t\t\t\t\t\${ parseInt(data[i]['maxLv']).toFixed(2)}
\t\t\t\t\t</td>
\t\t\t\t\t<td data-num=\"2\" style=\"display:\${status[4]};\">
\t\t\t\t\t\t\${data[i].list[0]['khm_customer.customer_num']}
\t\t\t\t\t</td>

\t\t\t\t\t<td class=\"\" style=\"display:\${status[5]};\" data-num=\"3\">
\t\t\t\t\t\t\${data[i]['position']['pos_name'] + data[i]['position']['pos_num']}
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"center\" style=\"display:\${status[6]};\" data-num=\"4\">
\t\t\t\t\t\t\${cycle}
\t\t\t\t\t</td>

\t\t\t\t\t<td class=\"center\" style=\"display:\${status[7]};\" data-num=\"5\">
\t\t\t\t\t\t\${ data[i]['num']}
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"center\" style=\"display:\${status[8]};\" data-num=\"6\">
\t\t\t\t\t\t\${ data[i]['maxTime']}
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"center\" style=\"display:\${status[9]};\" data-num=\"7\">
\t\t\t\t\t\t\${ data[i]['fuze_ids'] || ''}
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"display:\${status[10]};border:1px solid #eee !important;\" \${timeArr[0] ? (timeArr[0]['Status'] ? \"cstatus\" : \"\") : \"\"} title=\"\${timeArr[0] != undefined ? timeArr[0].time:''}\" class=\"center \" contract_id=\${timeArr[0] ? timeArr[0].contract_id : ''} fuze_ids=\${data[i]['fuze_ids1']}  fuze_id=\${timeArr[0] ? timeArr[0].fuze_id : ''}  handStatus=\${timeArr[0] ? timeArr[0].handStatus : ''} get_money=\"\${timeArr[0] != undefined ? timeArr[0].get_money : ''}\" data-num=\"8\" data-time=\"\${timeArr[0] != undefined ? timeArr[0]['time']  : ''}\" data-id=\"\${timeArr[0] != undefined ? timeArr[0]['id']  : ''}\" data-status=\"\${timeArr[0] != undefined ? timeArr[0].status  : ''}\" data-monry=\"\">
\t\t\t\t\t\t<label class=\"pos-rel \${timeArr[0] != undefined ? index[timeArr[0].status] : ''}\"></label>
\t\t\t\t\t</td>

\t\t\t\t\t<td style=\"display:\${status[11]};border:1px solid #eee !important;\" \${timeArr[1] ? (timeArr[1]['Status'] ? \"cstatus\" : \"\") : \"\"} title=\"\${timeArr[1] != undefined ? timeArr[1].time:''}\" class=\"center \"  contract_id=\${timeArr[1] ? timeArr[1].contract_id : ''} fuze_ids=\${data[i]['fuze_ids1']} fuze_id=\${timeArr[1] ? timeArr[1].fuze_id : ''} handStatus=\${timeArr[1] ? timeArr[1].handStatus : ''}  handStatus=\${timeArr[1] ? timeArr[1].handStatus : ''} data-id=\"\${timeArr[1] != undefined ? timeArr[1].id : ''}\" data-time=\"\${timeArr[1] != undefined ? timeArr[1]['time']  : ''}\" data-num=\"9\" get_money=\"\${timeArr[1] != undefined ? timeArr[1].get_money : ''}\" data-status=\"\${timeArr[1] != undefined ? timeArr[1].status  : ''}\" style=\"width:70px;\">
\t\t\t\t\t\t<label class=\"pos-rel \${timeArr[1] != undefined ? index[timeArr[1].status] : ''}\"></label>
\t\t\t\t\t</td>
\t\t\t\t\t//三月
\t\t\t\t\t<td style=\"display:\${status[12]};border:1px solid #eee !important;\" \${timeArr[2] ? (timeArr[2]['Status'] ? \"cstatus\" : \"\") : \"\"} title=\"\${timeArr[2] != undefined ? timeArr[2].time:''}\" data-time=\"\${timeArr[2] != undefined ? timeArr[2]['time']  : ''}\" contract_id=\${timeArr[2] ? timeArr[2].contract_id : ''} fuze_ids=\${data[i]['fuze_ids1']} fuze_id=\${timeArr[2] ? timeArr[2].fuze_id : ''} handStatus=\${timeArr[2] ? timeArr[2].handStatus : ''}  handStatus=\${timeArr[2] ? timeArr[2].handStatus : ''} class=\"center\" get_money=\"\${timeArr[2] != undefined ? timeArr[2].get_money : ''}\" data-id=\"\${timeArr[2] != undefined ? timeArr[2].id : ''}\" data-status=\"\${timeArr[2] != undefined ? timeArr[2].status  : ''}\" data-num=\"10\">
\t\t\t\t\t\t<label class=\"pos-rel \${timeArr[2] != undefined ? index[timeArr[2].status] : ''}\"></label>
\t\t\t\t\t</td>

\t\t\t\t\t<td style=\"display:\${status[13]};border:1px solid #eee !important;\" \${timeArr[3] ? (timeArr[3]['Status'] ? \"cstatus\" : \"\") : \"\"} title=\"\${timeArr[3] != undefined ? timeArr[3].time:''}\" data-time=\"\${timeArr[3] != undefined ? timeArr[3]['time']  : ''}\"  contract_id=\${timeArr[3] ? timeArr[3].contract_id : ''} fuze_ids=\${data[i]['fuze_ids1']} fuze_id=\${timeArr[3] ? timeArr[3].fuze_id : ''}  handStatus=\${timeArr[3] ? timeArr[3].handStatus : ''}  handStatus=\${timeArr[3] ? timeArr[3].handStatus : ''} class=\"center \" get_money=\"\${timeArr[3] != undefined ? timeArr[3].get_money : ''}\" data-id=\"\${timeArr[3] != undefined ? timeArr[3].id : ''}\" data-status=\"\${timeArr[3] != undefined ? timeArr[3].status  : ''}\" data-num=\"11\">
\t\t\t\t\t\t<label class=\"pos-rel \${timeArr[3] != undefined ? index[timeArr[3].status] : ''}\"></label>
\t\t\t\t\t</td>
\t\t\t\t\t//五月
\t\t\t\t\t<td style=\"display:\${status[14]};border:1px solid #eee !important;\" \${timeArr[4] ? (timeArr[4]['Status'] ? \"cstatus\" : \"\") : \"\"} title=\"\${timeArr[4] != undefined ? timeArr[4].time:''}\" data-time=\"\${timeArr[4] != undefined ? timeArr[4]['time']  : ''}\"  contract_id=\${timeArr[4] ? timeArr[4].contract_id : ''} fuze_ids=\${data[i]['fuze_ids1']}  fuze_id=\${timeArr[4] ? timeArr[4].fuze_id : ''}   handStatus=\${timeArr[4] ? timeArr[4].handStatus : ''} class=\"center \" get_money=\"\${timeArr[4] != undefined ? timeArr[4].get_money : ''}\" data-id=\"\${timeArr[4] != undefined ? timeArr[4].id : ''}\" data-status=\"\${timeArr[4] != undefined ? timeArr[4].status  : ''}\" data-num=\"12\">
\t\t\t\t\t\t<label class=\"pos-rel \${timeArr[4] != undefined ? index[timeArr[4].status] : ''}\"></label>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"display:\${status[15]};border:1px solid #eee !important;\" \${timeArr[5] ? (timeArr[5]['Status'] ? \"cstatus\" : \"\") : \"\"} title=\"\${timeArr[5] != undefined ? timeArr[5].time:''}\" data-time=\"\${timeArr[5] != undefined ? timeArr[5]['time']  : ''}\"  contract_id=\${timeArr[5] ? timeArr[5].contract_id : ''} fuze_ids=\${data[i]['fuze_ids1']}  fuze_id=\${timeArr[5] ? timeArr[5].fuze_id : ''}  handStatus=\${timeArr[5] ? timeArr[5].handStatus : ''} class=\"center \" get_money=\"\${timeArr[5] != undefined ? timeArr[5].get_money : ''}\" data-id=\"\${timeArr[5] != undefined ? timeArr[5].id : ''}\" data-status=\"\${timeArr[5] != undefined ? timeArr[5].status  : ''}\" data-num=\"13\">
\t\t\t\t\t\t<label class=\"pos-rel \${timeArr[5] != undefined ? index[timeArr[5].status] : ''}\"></label>
\t\t\t\t\t</td>
\t\t\t\t\t//七月
\t\t\t\t\t<td style=\"display:\${status[16]};border:1px solid #eee !important;\" \${timeArr[6] ? (timeArr[6]['Status'] ? \"cstatus\" : \"\") : \"\"} title=\"\${timeArr[6] != undefined ? timeArr[6].time:''}\" data-time=\"\${timeArr[6] != undefined ? timeArr[6]['time']  : ''}\"  contract_id=\${timeArr[6] ? timeArr[6].contract_id : ''} fuze_ids=\${data[i]['fuze_ids1']}  fuze_id=\${timeArr[6] ? timeArr[6].fuze_id : ''}  handStatus=\${timeArr[6] ? timeArr[6].handStatus : ''} data-num=\"14\" get_money=\"\${timeArr[6] != undefined ? timeArr[6].get_money : ''}\" data-status=\"\${timeArr[6] != undefined ? timeArr[6].status  : ''}\" data-id=\"\${timeArr[6] != undefined ? timeArr[6].id : ''}\" class=\"\">
\t\t\t\t\t\t<label class=\"pos-rel \${timeArr[6] != undefined ? index[timeArr[6].status] : ''}\"></label>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"display:\${status[17]};border:1px solid #eee !important;\" \${timeArr[7] ? (timeArr[7]['Status'] ? \"cstatus\" : \"\") : \"\"} title=\"\${timeArr[7] != undefined ? timeArr[7].time:''}\" data-time=\"\${timeArr[7] != undefined ? timeArr[7]['time']  : ''}\"  contract_id=\${timeArr[7] ? timeArr[7].contract_id : ''} fuze_ids=\${data[i]['fuze_ids1']}  fuze_id=\${timeArr[7] ? timeArr[7].fuze_id : ''}  handStatus=\${timeArr[7] ? timeArr[7].handStatus : ''} class=\"center\" get_money=\"\${timeArr[7] != undefined ? timeArr[7].get_money : ''}\" data-status=\"\${timeArr[7] != undefined ? timeArr[7].status  : ''}\" data-id=\"\${timeArr[7] != undefined ? timeArr[7].id : ''}\" data-num=\"15\">
\t\t\t\t\t\t<label class=\"pos-rel \${timeArr[7] != undefined ? index[timeArr[7].status] : ''}\"></label>
\t\t\t\t\t</td>
\t\t\t\t\t//九月
\t\t\t\t\t<td style=\"display:\${status[18]};border:1px solid #eee !important;\" \${timeArr[8] ? (timeArr[8]['Status'] ? \"cstatus\" : \"\") : \"\"} title=\"\${timeArr[8] != undefined ? timeArr[8].time:''}\" data-time=\"\${timeArr[8] != undefined ? timeArr[8]['time']  : ''}\"  contract_id=\${timeArr[8] ? timeArr[8].contract_id : ''} fuze_ids=\${data[i]['fuze_ids1']}  fuze_id=\${timeArr[8] ? timeArr[8].fuze_id : ''}  handStatus=\${timeArr[8] ? timeArr[8].handStatus : ''} class=\"center\" get_money=\"\${timeArr[8] != undefined ? timeArr[8].get_money : ''}\" data-status=\"\${timeArr[8] != undefined ? timeArr[8].status  : ''}\" data-id=\"\${timeArr[8] != undefined ? timeArr[8].id : ''}\" data-num=\"16\">
\t\t\t\t\t\t<label class=\"pos-rel \${timeArr[8] != undefined ? index[timeArr[8].status] : ''}\"></label>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"display:\${status[19]};border:1px solid #eee !important;\" \${timeArr[9] ? (timeArr[9]['Status'] ? \"cstatus\" : \"\") : \"\"} title=\"\${timeArr[9] != undefined ? timeArr[9].time:''}\" data-time=\"\${timeArr[9] != undefined ? timeArr[9]['time']  : ''}\" contract_id=\${timeArr[9] ? timeArr[9].contract_id : ''} fuze_ids=\${data[i]['fuze_ids1']}  fuze_id=\${timeArr[9] ? timeArr[9].fuze_id : ''}  handStatus=\${timeArr[9] ? timeArr[9].handStatus : ''} class=\"center \" get_money=\"\${timeArr[9] != undefined ? timeArr[9].get_money : ''}\" data-status=\"\${timeArr[9] != undefined ? timeArr[9].status  : ''}\" data-id=\"\${timeArr[9] != undefined ? timeArr[9].id : ''}\" data-num=\"17\">
\t\t\t\t\t\t<label class=\"pos-rel \${timeArr[9] != undefined ? index[timeArr[9].status] : ''}\"></label>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"display:\${status[20]};border:1px solid #eee !important;\" \${timeArr[10] ? (timeArr[10]['Status'] ? \"cstatus\" : \"\") : \"\"} title=\"\${timeArr[10] != undefined ? timeArr[10].time:''}\" data-time=\"\${timeArr[10] != undefined ? timeArr[10]['time']  : ''}\"  contract_id=\${timeArr[10] ? timeArr[10].contract_id : ''} fuze_ids=\${data[i]['fuze_ids1']}  fuze_id=\${timeArr[10] ? timeArr[10].fuze_id : ''}  handStatus=\${timeArr[10] ? timeArr[10].handStatus : ''} class=\"center\" get_money=\"\${timeArr[10] != undefined ? timeArr[10].get_money : ''}\" data-status=\"\${timeArr[10] != undefined ? timeArr[10].status  : ''}\" data-id=\"\${timeArr[10] != undefined ? timeArr[10].id : ''}\" data-num=\"18\">
\t\t\t\t\t\t<label class=\"pos-rel \${timeArr[10] != undefined ? index[timeArr[10].status] : ''}\"></label>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"display:\${status[21]};border:1px solid #eee !important;\" \${timeArr[11] ? (timeArr[11]['Status'] ? \"cstatus\" : \"\") : \"\"} title=\"\${timeArr[11] != undefined ? timeArr[11].time:''}\" data-time=\"\${timeArr[11] != undefined ? timeArr[11]['time']  : ''}\"  contract_id=\${timeArr[11] ? timeArr[11].contract_id : ''} fuze_ids=\${data[i]['fuze_ids1']}  fuze_id=\${timeArr[11] ? timeArr[11].fuze_id : ''}  handStatus=\${timeArr[11] ? timeArr[11].handStatus : ''} class=\"center\" get_money=\"\${timeArr[11] != undefined ? timeArr[11].get_money : ''}\" data-status=\"\${timeArr[11] != undefined ? timeArr[11].status  : ''}\" data-id=\"\${timeArr[11] != undefined ? timeArr[11].id : ''}\" data-num=\"19\">
\t\t\t\t\t\t<label class=\"pos-rel \${timeArr[11] != undefined ? index[timeArr[11].status] : ''}\"></label>
\t\t\t\t\t</td>
\t\t\t\t</tr>`;

\t\t\t\t//置空数据
\t\t\t\ttimeArr = [];
\t\t\t\tfuze_ids = [];
\t\t\t\tfuze = [];
\t\t\t}
\t\t\tif(ctype == 2) {
\t\t\t\t\$('#dataList').html(html);
\t\t\t\tcustom.get_custom_info();
\t\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\t\t\$('#dataList').find('td[get_money]').each(function() {
\t\t\t\t\tif(\$(this).attr('get_money') > 0) {
\t\t\t\t\t\t\$(this).css('background-color', '#00cc22');
\t\t\t\t\t\t\$(this).css('border','1px solid rgb(238, 238, 238) !important');
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}

\t\t\tif(ctype == 1) {
\t\t\t\t\$('#dataList1').html(html);
\t\t\t\tcustom.get_custom_info();
\t\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\t\t\$('#dataList1').find('td[get_money]').each(function() {
\t\t\t\t\tif(\$(this).attr('get_money') > 0) {
\t\t\t\t\t\t\$(this).css('background-color', '#00cc22')
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}
\t\t\t
\t\t\tcs.sc('记账',function(res) {
\t\t\t\tgetAccountList(1,2);
\t\t\t})
\t\t\tcs.getAllCw(function(option) {
\t\t\t\t\$('#heightsearch1 .cw').html(option);
\t\t\t\t\$('#heightsearch1 .cw').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t})
\t\t\t})
\t\t\tcs.getAllCw(function(option) {
\t\t\t\t\$('#height_search1 .cw').html(option);
\t\t\t\t\$('#height_search1 .cw').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t})
\t\t\t})
//\t\t\t\$('.cs').click(function() {
//\t\t\t\tdebugger
//\t\t\t\tvar customer_id = \$(this).parents('tr').attr('cid');
//\t\t\t\tvar relation = \$(this).attr('relation') == 0 ? 1 : 0;
//\t\t\t\tykp.doAjax({
//\t\t\t\t\turl:\"/api/api_contract/attention\",
//\t\t\t\t\tmethod:\"post\",
//\t\t\t\t\tdata:{
//\t\t\t\t\t\tprocess:\"记账\",
//\t\t\t\t\t\tcustomer_id:customer_id,
//\t\t\t\t\t\trelation:relation
//\t\t\t\t\t},
//\t\t\t\t\tsuccess:function(res) {
//\t\t\t\t\t\t
//\t\t\t\t\t}
//\t\t\t\t})
//\t\t\t})

\t\t\t//显示备注
\t\t\tcustom.showReamrk();

\t\t\t//点击td事件  提交审核
\t\t\tvar dataList = '';

\t\t\tif(ctype == 2) {
\t\t\t\tdataList = '#dataList';
\t\t\t}
\t\t\t
\t\t\t
\t\t\t\$('.see').click(function() {
\t\t\t\tvar id = \$(this).parents(\"tr\").attr(\"data-customerid\");
\t\t\t\tvar index = \$(this).attr('data-index');
\t\t\t\t\tykp.setCookie('custom_id', id, (1 / 24));
\t//\t\t\tvar url = index == 0 ? \"?url=auditTax&i=1-3&type=0\" : \"?url=tally&i=1-1&type=0\";
\t\t\t\tvar url;
\t\t\t  if(url = index == 0){
\t\t\t           url=\"?url=auditTax&i=1-3&type=0\"
\t\t\t  }else if(url = index == 1){
\t\t\t        \turl=\"?url=tally&i=1-1&type=0\"
\t\t\t  }else if(url = index == 2){
                  url=\"?url=auditCustomerService&i=1-2&type=0\"
\t\t\t  }

\t\t\t\tskPage(url);
\t\t\t
\t\t\t})

\t\t\tif(ctype == 1) {
\t\t\t\tdataList = '#dataList1';
\t\t\t}

\t\t\tvar statu = cs.getNodes([97,289], true);
\t\t\t//账务提示单
\t\t\t\$(dataList + \" td[data-status='0'],\" + dataList + \" td[data-status='3']\").click(function() {
\t\t\t    var _td = \$(this);
\t\t\t\tif(!statu) {
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\tvar uid = ykp.getCookie('uid');
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
\t\t\t\t
\t\t\t\t//作废未收款不能添加
\t\t        if(\$(this).attr('get_money') == -1 &&  \$(this).attr('handStatus') == '4' || \$(this).attr('handStatus') == '3') {
\t\t        \tykp.prompt('订单已解约，不能编辑');
\t\t        \treturn false;
\t\t        }

\t\t\t\t//\t\t\t\t//服务审批状态非未审批、审批失败时，提示
\t\t\t\t//\t            if(\$(this).attr('data-status') != '0' && \$(this).attr('data-status') != '3') {
\t\t\t\t//\t                var approve_status = {'1':'审批中，不可操作','2':'审批成功，不可操作'};
\t\t\t\t//\t                ykp.prompt(approve_status[\$(this).attr('data-status')] || \"不可操作\");
\t\t\t\t//\t                return false;
\t\t\t\t//\t            }

\t\t\t\t//输入框失去焦点将数据同步到打印区域
\t\t\t\t\$('#templateCon').on('blur', '[field]', function() {
\t\t\t\t\t\$('#templateCon .print_area').find('[syllable=\"' + \$(this).attr('field') + '\"]').text(\$(this).val().trim());;
\t\t\t\t});

\t\t\t\t// var thistd = \$(this);
\t\t\t\t//var customer_id = \$(this).parents('tr').find('[data-num=\"2\"]').text().trim();
                var customer_id = \$(this).parents('tr').attr(\"cid\");
\t\t\t\tvar ser_id = \$(this).attr('data-id');

\t\t\t\tvar _index = \$('.now').index();

\t\t\t\t//负责人
\t\t\t\tvar people = \$(this).siblings().eq(9).text();
\t\t\t\tvar name = \$(this).siblings().eq(2).children('a').text();

\t\t\t\tshowMark('#tipList');
\t\t\t\t\$('#showBox .title').text('账务提示单');

\t\t\t\t\$('#templateCon').data('flag', '1');
\t\t\t\t\$('#templateCon .close_get').unbind('click').click(function() {
\t\t\t\t\t\$('#templateCon').data('flag', '2');
\t\t\t\t\tcs.close();
\t\t\t\t});

\t\t\t\t\$('#templateCon #sendMsg').attr('customer_id', customer_id);
\t\t\t\tuploadImg();
\t\t\t\tprintAccount();
\t\t\t\t\$('#templateCon #name').val(name);
\t\t\t\t\$('#templateCon #assign').val(people.trim());
\t\t\t\t\$('#templateCon #month').val(\$(this).attr('data-time'));
\t\t\t\t\$('#templateCon .company').val(name.trim());
\t\t\t\t\$('#templateCon .remind_time').text(new Date().getFullYear() + '' + time);

\t\t\t\tykp.doAjax({
                    url: '/api/api_service/get_jz_info',
                    data: {
                        service_id: ser_id,
                    },
                    method: 'post',
                    success: function(res) {
                        data = res.data;
                        \$('#templateCon input[field=this_year]').val(data[\"本年销售额\"]);
                        \$('#templateCon input[field=lx_11_month]').val(data[\"11个月销售额\"]);
                        \$('#templateCon input[field=tax_bearing_rate]').val(data[\"税负率\"]);
                    }
                })


\t\t\t\tif(_index == 1) {
\t\t\t\t\t\$('#templateCon .remind').addClass('no-print');
\t\t\t\t}

\t\t\t\tcs.upload1({
\t\t\t\t\tel: \"#templateBox #upload1\",
\t\t\t\t\tael: \"#templateBox #fileBox\"
\t\t\t\t})
\t\t\t\t\$('#templateCon [field]').each(function(i, e) {
                    \$(this).val(data[0] ? data[0][\$(this).attr('field')]:\"\");
\t\t\t\t});
\t\t\t\t\$('#templateCon [syllable]').each(function(i, e) {
\t\t\t\t\t\$(this).text(data[0] ? data[0][\$(this).attr('syllable')] : \"\");
\t\t\t\t});

\t\t\t\tsaveAccount(_index, ser_id, \$(this).attr('data-time'),_td);
\t\t\t})
\t\t}
\t\t
\t\tfunction skPage(urls) {
\t\t\tvar url_ = urls.split('&')[0].split('=')[1];
\t\t\tvar index = urls.split('&')[1].split('=')[1].split('-')[0];
\t\t\t\$('.sidebar-shortcuts-large').children().eq(index).trigger('click');
\t\t\t\$('#navBox #nav-list').eq(index).find('li[data-url\$=\"' + url_ + '\"]').trigger('click');
\t\t}
\t\t//发送短信
\t\tfunction sendMsg(id, type,param) {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_common/send_customer',
\t\t\t\tdata: {
\t\t\t\t\tcustomer_id: id,
\t\t\t\t\ttype: type,
\t\t\t\t\tparam:JSON.stringify(param)
\t\t\t\t},
\t\t\t\tmethod: 'post',
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tykp.prompt('短信发送成功！');
\t\t\t\t}
\t\t\t})
\t\t}
\t\t//图片上传
\t\tfunction uploadImg() {
\t\t\t\$('#templateCon .uploadImage').unbind('change').change(function() {
\t\t\t\tvar it = \$(this);
\t\t\t\t//console.log(it.hasClass('new_pic'));
\t\t\t\tvar file = this.files[0];
\t\t\t\tif(!file.type || !/\\.(jpg|png|)\$/.test(file.name)) {
\t\t\t\t\tykp.prompt('请上传JPG、PNG格式的图片');
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\tvar fr = new FileReader();
\t\t\t\tvar postdata = {};
\t\t\t\tif(!file) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tfr.readAsDataURL(file);
\t\t\t\tfr.onloadend = function(e) {
\t\t\t\t\tvar base64 = e.target.result;
\t\t\t\t\tpostdata['name'] = file.name;
\t\t\t\t\tpostdata['dir'] = 'log';
\t\t\t\t\tpostdata['base64'] = base64.split(',')[1];
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_common/upload_img',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: postdata,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t//图片有6张就不再添加
\t\t\t\t\t\t\tif(it.parent().siblings().length == 5) {
\t\t\t\t\t\t\t\tit.parent().hide();
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tvar img_input = \$(`
                            <label class=\"\" style=\"margin-bottom:0;margin-right:10px;line-height:70px;display: inline-block;width: 70px;height: 70px;cursor: pointer; text-align: center;\">
                            <img field=\"pics\" style=\"width: 100%;height: 70px;\" src=\"\${res.data.url}\" alt=\"\">
                            <input type=\"file\" class=\"uploadImage new_pic _decrease\" style=\"position: absolute;opacity: 0;left:-9999px;\">
                        \t</label>`);
\t\t\t\t\t\t\timg_input.find('[field=\"pics\"]').attr('url', res.data.url);
\t\t\t\t\t\t\timg_input.find('[field=\"pics\"]').attr('name', file.name);
\t\t\t\t\t\t\tif(it.hasClass('new_pic')) {
\t\t\t\t\t\t\t\tit.parent().find('[field=\"pics\"]').attr('src', res.data.url);
\t\t\t\t\t\t\t\tit.parent().find('[field=\"pics\"]').attr('url', res.data.url);
\t\t\t\t\t\t\t\tit.parent().find('[field=\"pics\"]').attr('name', file.name);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tit.parent().before(img_input);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tuploadImg();
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});
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

\t\t//保存账务提示单
\t\tfunction saveAccount(index, id, year_months,_td) {
\t\t\t\$('#templateCon .add_alert').click(function() {
\t\t\t\tvar me = \$(this);
\t\t\t\tif(me.data('disabled')){
\t\t\t\t\treturn ;
\t\t\t\t}
\t\t\t\tvar postdata = {};
\t\t\t\tpostdata['service_id'] = id;
\t\t\t\tvar is_send = false;
\t\t\t\tif(\$('#templateCon #sendMsg input:checked').val() == 1) {
\t\t\t\t\tis_send = true;
\t\t\t\t}
\t\t\t\tvar customer_id = \$('#templateCon #sendMsg').attr('customer_id')
\t\t\t\tvar vouchers = [];
\t\t\t\t\$('#templateCon [field]').each(function(i, e) {
\t\t\t\t\tif(\$(this).attr('field') == 'pics') {
\t\t\t\t\t\tvouchers.push(\$(this).attr('src'));
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tpostdata[\$(this).attr('field')] = \$(this).val().trim();
\t\t\t\t});
                if(vouchers.length > 0) {
\t\t\t\t\tpostdata['pics'] = JSON.stringify(vouchers);
\t\t\t\t}
\t\t\t\tpostdata['year_month_id'] = year_months;
\t\t\t\tvar fileBox = \$('#templateCon #fileBox');
\t\t\t\tvar files = [];
\t\t\t\tif(fileBox.children().length > 0) {
\t\t\t\t\t\$('#templateCon #fileBox').find('a').each(function(i) {
\t\t\t\t\t\tfiles.push({
\t\t\t\t\t\t\tname: \$(this).text(),
\t\t\t\t\t\t\turl: \$(this).attr('data-url')
\t\t\t\t\t\t})
\t\t\t\t\t})
\t\t\t\t\tpostdata.files = JSON.stringify(files);
\t\t\t\t}
\t\t\t\tvar param = {
\t\t\t\t\tname: \$('#templateCon #name').val().trim(),
\t\t\t\t\ttime: \$('#templateCon #month').val(),
\t\t\t\t}
\t\t\t\t
\t\t\t\tme.data('disabled', 1);
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_service/accounting_add',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: postdata,
\t\t\t\t\tsuccess: function(res) {\t\t
\t\t\t\t\t\tcs.close();
//\t\t\t\t\t\tif(index == 0) {
//\t\t\t\t\t\t\tgetAccountList(1, 2);
//\t\t\t\t\t\t}
//\t\t\t\t\t\t if(index == 1) {
//\t\t\t\t\t\t\tgetAccountList(1, 1);
//\t\t\t\t\t\t}
\t\t\t\t\t\tif(is_send) {
\t\t\t\t\t\t\tsendMsg(customer_id, \"账期完成\", param);
\t\t\t\t\t\t}
                        //\$('.in').removeClass('modal-backdrop');
                        //\$('#showBox').addClass('ishide');
                        _td.find('label').addClass('fa fa-circle-o').attr('data-status', 1);
                        _td.unbind();
                    },
\t\t\t\t\tcomplete: function(){
\t\t\t\t\t\tme.data('disabled', '');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t}

\t\t\$('.kind li').click(function() {
\t\t\tvar page_no = ykp.getCookie('page_no');
\t\t\tvar index = \$(this).index();
\t\t\tindex = index == 0 ? 2 : 1;
\t\t\tvar htmlStatus = true;
\t\t\tykp.setCookie('jz_type', index);
\t\t\tif(index == 0) {
\t\t\t\tvar html = \$('  #dataList').find('tr').length > 0;
\t\t\t\tif(!html) {
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t} else {
\t\t\t\tif(htmlStatus) {
\t\t\t\t\tvar html = \$('#dataList1').find('tr').length > 0;
\t\t\t\t\tif(html) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tcs.setFuze({
\t\t\t\tcheck:true,
\t\t\t\tconId:[\"#dataList\",\"#dataList1\"],
\t\t\t\ttype:\"3\",
\t\t\t\turl:\"/api/api_service/transfer_user\",
\t\t\t\tfun:function(ftype){

\t\t\t\t\tgetAccountList(1, ftype);
\t\t\t\t}
\t\t\t});

\t\t\tgetAccountList(page_no, index);
\t\t})

\t\t//高级搜索按钮
\t\tcs.showHeightSearch('#heightsearch', '#heightsearch1');
\t\tcs.showHeightSearch('#height_serch', '#height_search1');

\t\tfunction getCustomerList(curPage) {
//\t\t\tcs.getChart(3);
\t\t\tykp.list({
\t\t\t\turl: '/api/api_service/customer',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\tpage: curPage,
\t\t\t\t\tpage_size: pagesize,
\t\t\t\t\torder: order
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\thMonth = cs.last_year_month();
\t\t\t\t\t//生成月份表头
\t\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'),res['data']['months']);
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t});
\t\t}

\t\tsearch();

\t\tfunction search() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\t\"type\": 3,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}

\t\t\tcs.doSearch('.search', data, 'where', true, function(res,_filter) {
\t\t\t\t\$(\"#tspage\").hide();
\t\t\t\tvar dataList, pagination;
\t\t\t\tvar type = \$('.kind').find('.now').index() == 0 ? 2 : 1;
\t\t\t\tfilter[type] = _filter;
\t\t\t\tif(type) {
\t\t\t\t\tdata.data.where = type == 2 ? \"khm_customer.tax_type=2\" : \"khm_customer.tax_type=1\";
\t\t\t\t\tdataList = type == 2 ? '#dataList' : '#dataList1';
\t\t\t\t\tpagination = type == 2 ? '#pagination1' : '#pagination2';
\t\t\t\t}
\t\t\t\t//生成月份表头
\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'),res['data']['months'],type);
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$(dataList).html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t} else {
\t\t\t\t\taddList(res, type, dataList);
\t\t\t\t}
\t\t\t},'',{url:\"/api/api_service/assistant_list_new \"})
\t\t}

\t\tdoHserch();
\t\t
\t\tfunction doHserch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_service/service_list',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\t\"type\": 3,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}

\t\t\tcs.hSearch('.search1', data, 'where', true, function(res,_filter,month) {
\t\t\t\t\$(\"#tspage\").hide();
\t\t\t\tvar index = \$('.kind').find('.now').index();
\t\t\t\tvar type = index == 0 ? 2 : 1;
\t\t\t\tfilter[type] = _filter;
\t\t\t\tmonth2[type] = month;
\t\t\t\t\$('.in').click();
\t\t\t\tif(index == 0) {
\t\t\t\t\t\$(\"#heightsearch1\").fadeOut();
\t\t\t\t\t\$(\"#heightsearch\").removeClass('active');
\t\t\t\t}
\t\t\t\tif(index == 1) {
\t\t\t\t\t\$(\"#height_search1\").fadeOut();
\t\t\t\t\t\$(\"#height_serch\").removeClass('active');
\t\t\t\t}
\t\t\t\tvar dataList = index == 0 ? '#dataList' : '#dataList1';

\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$(dataList).html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center; clear:none;\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t}else{
                    //生成月份表头
                    generateMonthTh(\$('#dynamic-table .thColor .month'),res['data']['months'],type);
                    addList(res, type, dataList);

\t\t\t\t}
\t\t\t},'',{url:\"/api/api_service/assistant_list_new \"})
\t\t}

\t\t
\t\t//能量条形式控制
\t\t\$('.easy-pie-chart.percentage').each(function() {
\t\t\tvar \$box = \$(this).closest('.infobox');
\t\t\tvar barColor = \$(this).data('color') || (!\$box.hasClass('infobox-dark') ? \$box.css('color') : 'rgba(255,255,255,0.95)');
\t\t\tvar trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
            \$(this).easyPieChart({
\t\t\t\tbarColor: barColor,
\t\t\t\ttrackColor: trackColor,
\t\t\t\tscaleColor: false,
\t\t\t\tlineCap: 'butt',
\t\t\t\tlineWidth: 5,
\t\t\t\tanimate: ace.vars['old_ie'] ? false : 1000
\t\t\t});
\t\t});

\t\t//查看纳税记录（已取消）
\t\t\$('#dynamic-table tbody td .see').click(function() {
\t\t\t//获取当前行的id
\t\t\t//console.log(\$(this).parents('tr').attr('data-id'));
\t\t})
\t})
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
        return "admin/task/account.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  891 => 868,  887 => 867,  19 => 1,);
    }
}
/* <style>*/
/* 	#templateCon td {*/
/* 		height: inherit;*/
/* 		line-height: 27px;*/
/* 		text-align: center;*/
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
/* 	#templateCon input {*/
/* 		line-height: normal;*/
/* 		/*width: 100%;*//* */
/* 	}*/
/* 	*/
/* 	#templateCon .account_alert label {*/
/* 		width: 97px;*/
/* 	}*/
/* 	*/
/* 	#heightsearch1 label,*/
/* 	#height_search1 label {*/
/* 		text-align: right;*/
/* 		width: 80px;*/
/* 		font-weight: normal;*/
/* 	}*/
/* 	*/
/* 	.glyphicon {*/
/* 		top: 0px !important;*/
/* 	}*/
/* </style>*/
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<div style="margin-top: 50px;  width: 860px; padding: 0px;" class="row col-xs-12">*/
/* 			<div class="col-xs-12 infobox-container" style="padding: 0px; margin-left: -10px;">*/
/* */
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
/* */
/* 				<div class="infobox infobox-blue2" style="color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;">*/
/* 					<div class="infobox-data" style="padding: 0px;">*/
/* 						<div class="infobox-content" style="text-align: center;">*/
/* 							逾期任务*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="infobox infobox-blue2" style="color: #000 !important; height: 36px; font-size: 12px; line-height: 24px !important; text-align: center; line-height: 66px;">*/
/* 					<div class="infobox-data" style="padding: 0px;">*/
/* 						<div class="infobox-content" style="text-align: center;">*/
/* 							累计任务*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="infobox infobox-blue2">*/
/* 					<div class="infobox-progress">*/
/* 						<div class="easy-pie-chart percentage" data-percent="0" data-size="50" style="height: 57px;width: 57px;line-height: 56px;">*/
/* */
/* 							<span class="percent" id="percent"></span>*/
/* 							<canvas height="57" width="57"></canvas>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="infobox-data" style="margin:3px 0 0 20px;">*/
/* 						<div class="infobox-content" id="isOk">*/
/* 							已完成*/
/* 						</div>*/
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
/* 						<div class="easy-pie-chart percentage" data-percent="0" data-size="50" style="height: 57px; width: 57px; line-height: 56px;">*/
/* 							<span class="percent" id="percent2"></span>*/
/* 							<canvas height="57" width="57"></canvas>*/
/* 						</div>*/
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
/* 						<div class="easy-pie-chart percentage" data-percent="0" data-size="50" style="height: 57px; width: 57px; line-height: 56px;">*/
/* 							<span class="percent" id="percent2"></span>*/
/* 							<canvas height="57" width="57"></canvas>*/
/* 						</div>*/
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
/* 			</div>*/
/* 		</div>*/
/* 		<div class="row col-sm-12" style="margin-top: 50px;padding-left:0;padding-right:0;">*/
/* 			<div class="kind row" style="z-index: 20;">*/
/* 				<ul>*/
/* 					<li class="now">小规模</li>*/
/* 					<li>一般纳税人</li>*/
/* 				</ul>*/
/* 				<div id="tspage" style="border: 0px red solid; width: 480px;height: 30px;display:none;">*/
/* 					<a id="go_" href="javascript:void(0)">有部分一般纳税人数据,点击前往</a>*/
/* 					<a href="javascript:;" class="close_ts" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div>*/
/* 				<div class="widget-body">*/
/* 					<div>*/
/* 						<div class="tab-content">*/
/* 							<!--小规模-->*/
/* 							<div id="task-tab" class="tab-pane active">*/
/* 								<div class="row" id="topTool">*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 										<input type="text" pts=1 sear="customer_name" placeholder="企业名称" autofocus/>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 										<input type="text" pts=0 sear="khm_customer.customer_num" placeholder="企业编码" autofocus/>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				                 	  <select style="width: 180px" pts=3 sear="jzm_service_info.fuze_id" class="advandced-search select2-hidden-accssible"  tabindex="-1" aria-hidden="true">*/
/* 						                  <option value="">负责人</option>*/
/* 					                      </select>*/
/* 				                    </div>*/
/* 									<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 										<button type="button"  title="搜索" class=" search btn btn-info btn-sm">*/
/* 											<i class=" fa fa-search"></i>*/
/* 										</button>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left;  margin-right: 5px;position:relative;">*/
/* 										<button id="heightsearch" title="高级搜索" type="button" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/* 											<i class=" fa fa-filter"></i>*/
/* 										</button>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 										<button id="flush" title="刷新" type="button" class="btn flush btn-info btn-sm" style="background-color: #32CD32!important;">*/
/* 											<i class=" fa fa-refresh"></i>*/
/* 						                </button>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;" contentAuthority="96">*/
/* 										<label type="button" id="mergeItem" title="导入" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="btn btn-info btn-sm position-relative mergeItem" for="leading-in">*/
/* 				                            <i class="fa fa-sign-in"></i>*/
/* 				                        </label>*/
/* 									</div>*/
/* 									<div class="col-sx-4" contentAuthority="289" style=" float: left; margin-right: 5px;">*/
/* 										<button type="button" title="分配负责人" id="moveToClue" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="moveToClue btn addBtn btn-info btn-sm position-relative">*/
/* 											<i class="fa fa-hand-o-right"></i>*/
/* 						                </button>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
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
/* 									<div id="heightsearch1" class="col-sx-12" style="margin-top:30px;position: absolute; background: #fff; z-index: 1041;padding: 20px 10px; display: none;">*/
/* 										<div class="row">*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>年份</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 												</select>*/
/* 												<!--<input type="text" gjs=5 sear="year" data-year="true" />-->*/
/* 												<select style="width: 180px" gjs=5 sear="year" data-year="true"></select>*/
/* 											</div>*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>月份</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 													<option> > </option>*/
/* 													<option> &lt; </option>*/
/* 												</select>*/
/* 												<select style="width: 180px" gjs=5 sear="month">*/
/* 													<option value="">  请选择  </option>*/
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
/* 											<div class="col-sx-4" style=" float:left;*/
/* 												margin-bottom:5px;">*/
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
/* 												<input type="text" gjs=0 sear="khm_customer.customer_num" />*/
/* 											</div>*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>仓位</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 												</select>*/
/* 												<select gjs=3 sear="ckm_position_num.pos_id" class="cw" data-type="gj" style="width:180px;">*/
/* 												</select>*/
/* 											</div>*/
/* 											*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>服务周期</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 													<option> > </option>*/
/* 													<option> &lt; </option>*/
/* 												</select>*/
/* 												<select gjs=0 sear="htm_contract.payment_cycle" data-type="gj" style="width:180px;">*/
/* 													<option value="">  请选择  </option>*/
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
/* 											</div>*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>收款情况</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 												</select>*/
/* 												<select gjs=0 sear="jzm_service_info.get_money" data-type="gj" style="width:180px;">*/
/* 													<option value="">  请选择  </option>*/
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
/* 													<option value="">  请选择  </option>*/
/* 													<option value="0"> 未开始</option>*/
/* 													<option value="1"> 待审批</option>*/
/* 													<option value="2"> 已通过 </option>*/
/* 													<option value="3"> 未通过 </option>*/
/* 												</select>*/
/* 											</div>*/
/* 											<div class="col-sx-4" style="clear:both;padding-top:10px;text-align:center;">*/
/* 												<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/* 								                        查询*/
/* 								                    </button>*/
/* 												<button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 									                       重置*/
/* 									                    </button>*/
/* 											</div>*/
/* 										</div>*/
/* */
/* 									</div>*/
/* 								</div>*/
/* */
/* 								<div class="widget-body">*/
/* 									<div class="row">*/
/* 										<div class="custom_table">*/
/* 											<table id="dynamic-table1">*/
/* 												<thead>*/
/* 													<tr class="thColor">*/
/* 														<th>*/
/* 															<label class="pos-rel">*/
/* 								                                <input type="checkbox" class="ace" onclick="checkAll(this.checked)"/>*/
/* 								                                	<span class="lbl"></span>*/
/* 								                                </label>*/
/* 														</th>*/
/* 														 <th>操作</th> */
/* 														<th data-num="1">企业名称</th>*/
/* 														<th data-num="19">任务等级</th>*/
/* 														<th data-num="2">客户编码</th>*/
/* 														<th data-num="3">仓位编码</th>*/
/* 														<th data-num="4">服务周期</th>*/
/* 														<th data-num="5">逾期</th>*/
/* 														<th data-num="6">截止月份</th>*/
/* 														<th data-num="7">负责人</th>*/
/* 														<th class="month" data-num="8" data-month></th>*/
/* 														<th class="month" data-num="9" data-month></th>*/
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
/* 													</tr>*/
/* 												</thead>*/
/* 												<tbody id="dataList">*/
/* 												</tbody>*/
/* 											</table>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* */
/* 							</div>*/
/* 							<!--一般纳税人-->*/
/* 							<div id="member-tab" class="tab-pane">*/
/* 								<div class="row" id="topTool">*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 										<input type="text" pts=1 sear="customer_name" placeholder="企业名称" autofocus/>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 										<input type="text" pts=0 sear="khm_customer.customer_num" placeholder="企业编码" autofocus/>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 										<!--<input type="text" pts=1 sear="staff_name" placeholder="负责人" autofocus/>-->*/
/* 										<select style="width: 180px" pts=3 sear="jzm_service_info.fuze_id" class="advandced-search select2-hidden-accssible"  tabindex="-1" aria-hidden="true">*/
/* 											<option value="">负责人</option>*/
/* 										</select>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 										<button type="button" id="ssearch1" class=" search btn btn-info btn-sm">*/
/* 											<i class=" fa fa-search"></i>*/
/* 										</button>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 										<button id="height_serch" type="button" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/* 											<i class=" fa fa-filter"></i>*/
/* 										</button>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 										<button id="flush" type="button" class="btn flush btn-info btn-sm" style="background-color: #32CD32!important;">*/
/*            								 	<i class=" fa fa-refresh"></i>*/
/*         								</button>*/
/* 									</div>*/
/* 									<div class="col-sx-4" contentAuthority="96" style=" float: left;  margin-right:5px; ">*/
/* 										<!--<button id="import" type="button" class="btn btn-info btn-sm" style="background-color: #fb9a47 !important; border-color: #fb9a47;">*/
/* 												导入*/
/* 											</button>-->*/
/* 										<label type="button" id="" title="导入" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="btn btn-info btn-sm position-relative mergeItem" for="leading-in">*/
/* 				                            <i class="fa fa-sign-in"></i>*/
/* 				                       </label>*/
/* 									</div>*/
/* 									<div class="col-sx-4" contentAuthority="289" style=" float: left; margin-right: 5px;">*/
/* 										<button title="分配负责人" type="button" id="moveToClue" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="moveToClue btn addBtn btn-info btn-sm position-relative">*/
/* 						                    <i class="fa fa-hand-o-right"></i>*/
/* 						                </button>*/
/* 									</div>*/
/* 									<div class="col-sx-4" style=" float: left;  margin-right: 5px;position:relative;">*/
/* 										<div id="filterBtns" style="display:inline-block;width:290px;height: 36px;">*/
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
/* 												<!--<input type="text" gjs=5 sear="year" data-year="true" />-->*/
/* 											</div>*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>月份</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 													<option> > </option>*/
/* 													<option> &lt; </option>*/
/* 												</select>*/
/* 												<select style="width: 180px" gjs=5 sear="month">*/
/* 													<option value="">  请选择  </option>*/
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
/* 											<div class="col-sx-4" style=" float:left;*/
/* 												margin-bottom:5px;">*/
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
/* 												<input type="text" gjs=0 sear="khm_customer.customer_num" />*/
/* 											</div>*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>仓位</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 												</select>*/
/* 												<select gjs=3 sear="ckm_position_num.pos_id" class="cw" data-type="gj" style="width:180px;">*/
/* 												</select>*/
/* 											</div>*/
/* 											*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>服务周期</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 													<option> > </option>*/
/* 													<option> &lt; </option>*/
/* 												</select>*/
/* 												<select gjs=0 sear="htm_contract.payment_cycle" data-type="gj" style="width:180px;">*/
/* 													<option value="">  请选择  </option>*/
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
/* 												*/
/* 											</div>*/
/* 											<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 												<label>收款情况</label>*/
/* 												<select>*/
/* 													<option> = </option>*/
/* 												</select>*/
/* 												<select gjs=0 sear="jzm_service_info.get_money" data-type="gj" style="width:180px;">*/
/* 													<option value="">  请选择  </option>*/
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
/* 													<option value="">  请选择  </option>*/
/* 													<option value="0"> 未开始</option>*/
/* 													<option value="1"> 待审批</option>*/
/* 													<option value="2"> 已通过</option>*/
/* 													<option value="3"> 未通过</option>*/
/* 												</select>*/
/* 											</div>*/
/* 											<div class="col-sx-4" style="clear:both;padding-top:10px;text-align:center;">*/
/* 												<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/* 								                        查询*/
/* 								                    </button>*/
/* 												<button type="button" id="rest1" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 									                       重置*/
/* 									                    </button>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* */
/* 								<div class="widget-body">*/
/* 									<div class="row">*/
/* 										<div class="custom_table">*/
/* 											<table id="dynamic-table2">*/
/* 												<thead>*/
/* 													<tr class="thColor">*/
/* 														<th>*/
/* 															<label class="pos-rel">*/
/* 								                                    <input type="checkbox" class="ace" onclick="checkAll(this.checked)"/>*/
/* 								                                    <span class="lbl"></span>*/
/* 								                                    </label>*/
/* 														</th>*/
/* 														 <th>操作</th> */
/* 														<th data-num="1">企业名称</th>*/
/* 														<th data-num="19">任务等级</th>*/
/* 														<th data-num="2">客户编码</th>*/
/* 														<th data-num="3">仓位编码</th>*/
/* 														<th data-num="4">服务周期</th>*/
/* 														<th data-num="5">逾期</th>*/
/* 														<th data-num="6">截止月份</th>*/
/* 														<th data-num="7">负责人</th>*/
/* 														<th class="month" data-num="8" data-month></th>*/
/* 														<th class="month" data-num="9" data-month></th>*/
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
/* 													</tr>*/
/* 												</thead>*/
/* 												<tbody id="dataList1">*/
/* 												</tbody>*/
/* 											</table>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<!-- /.#member-tab -->*/
/* 							</div>*/
/* 							<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 								<div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
/* 								<div id="pageBar" class="pagination"></div>*/
/* 								<div align="right" style="float: right;  width: 10%;">*/
/* 									<select style="width: 100px;" id="changePageNum">*/
/* 										<option value="10">每页10条</option>*/
/* 										<option value="20">每页20条</option>*/
/* 										<option value="50">每页50条</option>*/
/* 										<option value="100">每页100条</option>*/
/* 										<option value="200">每页200条</option>*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- /.widget-main -->*/
/* 					</div>*/
/* 					<!-- /.widget-body -->*/
/* 				</div>*/
/* 				<!-- /.widget-box -->*/
/* 			</div>*/
/* 			<!-- /.col -->*/
/* 		</div>*/
/* */
/* 		<!--账务提示单-->*/
/* 		<div id="tipList" style="display: none">*/
/* 			<div class="account_alert">*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>客户名称： </label>*/
/* 					<input type="text" id="name" disabled/>*/
/* 					<label>负责人： </label>*/
/* 					<input type="text" id="assign" disabled>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>月份： </label>*/
/* 					<input type="text" id="month" disabled/>*/
/* 					<label>截至本年收入： </label>*/
/* 					<input type="number" field="this_year">*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>连续11个月收入： </label>*/
/* 					<input type="number" field="lx_11_month" />*/
/* 					<label>应收账款： </label>*/
/* 					<input type="number" field="receivable">*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>应付账款： </label>*/
/* 					<input type="number" field="account_payable" />*/
/* 					<label>其他应收款： </label>*/
/* 					<input type="number" field="receivable_others">*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>其他应付款： </label>*/
/* 					<input type="number" field="payable_others" />*/
/* 					<label>税负率： </label>*/
/* 					<input type="number" field="tax_bearing_rate">*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>欠成本发票： </label>*/
/* 					<input type="number" field="lack_costing_invoice" />*/
/* 					<label>欠费用发票： </label>*/
/* 					<input type="number" field="lack_expense_invoice">*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label>本年累计亏损： </label>*/
/* 					<input type="number" field="accumulated_loss" />*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label style="float:left;margin-right:5px;"> 银行对账单： </label>*/
/* 					*/
/* 					<!--<label class="" style="position:relative;top:2px;border:1px solid #000;line-height:70px;width:70px;height:70px;cursor: pointer; text-align: center;">*/
/*                         <i class="fa fa-plus fa-2x" aria-hidden="true" style="position: relative;top: 5px;"></i>*/
/*                         <input type="file" class="uploadImage _decrease" style="position: absolute;opacity: 0;left:-9999px;">*/
/*                     </label>-->*/
/* 				</div>*/
/* 				<div class="" style="padding: 2px; margin-top: 20px;margin-left: 25px;">*/
/* 						<div id="fileBox">*/
/* */
/* 						</div>*/
/* 						<div id="uploadBox">*/
/* 							<button type="button" id="upload1" style="outline: none;background-color: #009688 !important; margin-top: 20px;" class="btn btn-info btn-sm position-relative">*/
/* 				                        上传文件*/
/* 				        	</button>*/
/* 						</div>*/
/* 					</div>*/
/* 				<div id="sendMsg" customer_id="" style="height: 30px;line-height: 40px">*/
/* 					<label>是否发送短信：</label>*/
/* 					<input type="radio" value="1" name="is_send">是*/
/* 					<input type="radio" value="2" name="is_send" checked="true">否*/
/* 				</div>*/
/* 			</div>*/
/* 			<div style="text-align:right;margin-top:15px;">*/
/* 				<button class="btn btn-info" id="print">*/
/* 					打印*/
/* 				</button>*/
/* 				<button class="close_get btn btn-info btn-sm">*/
/* 					关闭*/
/* 				</button>*/
/* 				<button class="add_alert btn btn-info">*/
/*                     保存*/
/*                 </button>*/
/* 			</div>*/
/* 			<div style="display:none;">*/
/* 				<div class="print_area">*/
/* 					<style type="text/css" media="print">*/
/* 						table {*/
/* 							width: 100%;*/
/* 							border: 1px solid #000;*/
/* 							border-collapse: collapse;*/
/* 						}*/
/* 						*/
/* 						tr {*/
/* 							height: 40px;*/
/* 						}*/
/* 						*/
/* 						td {*/
/* 							padding: 4px;*/
/* 							border: 1px solid #000;*/
/* 							white-space: nowrap !important;*/
/* 							text-align: left;*/
/* 						}*/
/* 					</style>*/
/* 					<div style="text-align:center;">*账务提示单*<span class="company"></span></div>*/
/* 					<div>为了贵公司 财务制度更加完善、健全，请重视我们就贵公司财税方面做出的提示。</div>*/
/* 					<div>如有疑问请联系：<span style="float:right;">现将贵公司无法入账的单据退换给您：</span></div>*/
/* 					<div>*/
/* 						<table>*/
/* 							<tbody>*/
/* 								<tr>*/
/* 									<td>*/
/* 										<span>会计顾问：</span><span style="margin-left:150px;">电话</span>：*/
/* 									</td>*/
/* 									<td>序号</td>*/
/* 									<td>名称</td>*/
/* 									<td>数量</td>*/
/* 									<td>原因</td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td>（<span class="remind_time"></span>）月财税提示：</td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td>*/
/* 										1、请在凭证封面、记账凭证、费用报销单、工资表上签字盖章；*/
/* 									</td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td>*/
/* 										2、每月请及时提供银行对账单及相应回单；*/
/* 									</td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td>*/
/* 										3、每月请及时提供房租、水电费发票；*/
/* 									</td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td>*/
/* 										4、工资名单有变动时请及时告知；*/
/* 									</td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td>*/
/* 										5、纳税户请至少每季度提供一次银行对账单及相应回单；*/
/* 									</td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td>*/
/* 										6、通过现金结算的收入、成本发票请在发票左上角表明现金；*/
/* 									</td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td>*/
/* 										7、通过银行付款的费用发票请在发票左上角标明银行；*/
/* 									</td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td>*/
/* 										9、收据不入账；*/
/* 									</td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 									<td></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td colspan="5" style="font-size:18px;font-bold:weight;">*/
/* 										特别提醒*/
/* 									</td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td colspan="5">*/
/* 										1、截止到（<span class="remind_time"></span>）年收入（<span syllable="this_year"></span>）元，连续11个月收入（<span syllable="lx_11_month"></span>）元。<span class="remind">重要提醒：（工厂）50万元/（商贸）80万元/（服务业）500万元收入将被责令为一般纳税人。（小规模提醒）</span>*/
/* 									</td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td colspan="5">*/
/* 										2、应收账款（<span syllable="receivable"></span>），应付账款（<span syllable="account_payable"></span>），其他应收款（<span syllable="receivable_others"></span>），其他应付款（<span syllable="payable_others"></span>）。*/
/* 									</td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td colspan="5">*/
/* 										3、截止到（<span class="remind_time"></span>），贵公司税负率（<span syllable="tax_bearing_rate"></span>%），偏<i style="padding:0 10px;"></i>（商贸1%-1.5%，工厂2%-3%）。*/
/* 									</td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td colspan="5">*/
/* 										4、截止到（<span class="remind_time"></span>），贵公司累计欠成本发票（<span syllable="lack_costing_invoice"></span>）元，欠费用发票（<span syllable="lack_expense_invoice"></span>）元；请于三个月内提供过来入账。*/
/* 									</td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td colspan="5">*/
/* 										5、截止到（<span class="remind_time"></span>），贵公司累计亏损（-<span syllable="accumulated_loss"></span>）元。*/
/* 									</td>*/
/* 								</tr>*/
/* 							</tbody>*/
/* 						</table>*/
/* 						<div>*/
/* 							<span class="remind_time"></span>*/
/* 						</div>*/
/* 						<div>*/
/* 							<span>温馨提示：账务提示单看完后，请取出来单独保管。</span>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 		*/
/* 		*/
/* 		<div class="label_popup" id="export" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 			<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 	            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 				<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 					<span style="display: inline-block;">导入记账</span>*/
/* 					<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 				</div>*/
/* 				<div style="padding: 10px 50px;">*/
/* 					<input type="file" width="200px" style="margin: auto;" id="efile" />*/
/* 					<!--<hr>-->*/
/* 				</div>*/
/* 				<div style="padding:15px;text-align:right;">*/
/* 					<button id="ghItem" class=" btn">记账模板</button>*/
/* 					<button class="btn btn-info  submit" style="padding: 6px; border-radius: 0px;">保存</button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		{% include 'admin/mark.html' %} {% include 'admin/customerDetail.html' %}*/
/* 	</div>*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/assets/js/jQuery.print.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* <script>*/
/* 	jQuery(function($) {*/
/* 		cs.getNodes([96,289]);*/
/* */
/* 		var ftype = 2;*/
/* 		var curPage = 1;*/
/* 		var pagesize = 10;*/
/* 		var employees = {};*/
/* 		var where = ''*/
/* 		var filter = {1: '', 2: ''};*/
/* 		//var month2 = {1: '', 2: ''};*/
/* 		var month1 = '',month2 = '';*/
/* 		var order = 'khm_customer.id desc';*/
/* 		var param = {*/
/* 			aid: ykp.getCookie('aid'),*/
/* 			time: ykp.getCookie("time"),*/
/* 			timestamp: '',*/
/* 			flag: false*/
/* 		};*/
/* 		var hMonth = [];*/
/* 		hMonth = cs.last_year_month();*/
/* 		$('#filterBtns a').mouseover(function() {*/
/* 			$(this).addClass('over');*/
/* 		})*/
/* 		$('#filterBtns a').mouseout(function() {*/
/* 			$(this).removeClass('over');*/
/* 		})*/
/* 		*/
/* 		cs.setFuze({*/
/* 			check:true,*/
/* 			conId:["#dataList","#dataList1"],*/
/* 			type:"3",*/
/* 			url:"/api/api_service/transfer_user",*/
/* 			fun:function(ftype){*/
/* */
/* 				getAccountList(1, ftype);*/
/* 			}*/
/* 		});*/
/* 		//条件过滤器*/
/* 		$('.myFilter').click(function() {*/
/* 			if(!$(this).hasClass('clc')) {*/
/* 				$(this).addClass('clc').siblings().removeClass('clc');*/
/* 			}*/
/* 			var user = JSON.parse(ykp.getCookie('userinfo'));*/
/* 			var type = $(this).parents('.tab-pane').index() == 0 ? 2 : 1;*/
/* 			var data = {*/
/* 				"type": 3,*/
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
/* //			filter = data['where'];*/
/* 			getAccountList_4(data);*/
/* 		})*/
/* */
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_service/service_list',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter:where,*/
/* 				limit: pagesize,*/
/* 				type:3*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '#pageBar'*/
/* 			},*/
/* 			check:true,*/
/* 			defaultOrder: order,*/
/* 			initOrder:'khm_customer.id',*/
/* 			contentId: ftype==2?"#dataList":"#dataList1",*/
/* 			params:[{*/
/* 				id: ftype ==2?"#dynamic-table1":"dynamic-table2",*/
/* 				field:["","","khm_customer.name","maxLv","customer_num","pos_name","",*/
/* 					"htm_contract.payment_cycle","","jzm_service_info.fuze_id"*/
/* 				]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res,ftype);*/
/* 		});*/
/* */
/* 		//打印账务提示单*/
/* 		function printAccount() {*/
/* 			$('#templateCon #print').click(function() {*/
/* 				//Print ele4 with custom options*/
/* 				$("#templateCon .print_area").print({*/
/* 					//Use Global styles*/
/* 					globalStyles: false,*/
/* 					//Add link with attrbute media=print*/
/* 					mediaPrint: false,*/
/* 					//Custom stylesheet*/
/* 					stylesheet: null,*/
/* 					//Print in a hidden iframe*/
/* 					iframe: true,*/
/* 					//Don't print this*/
/* 					noPrintSelector: ".no-print",*/
/* 					//Add this at top*/
/* 					prepend: null,*/
/* 					//Add this on bottom*/
/* 					append: null,*/
/* 					//Log to console when printing is done via a deffered callback*/
/* 					deferred: $.Deferred().done(function() {*/
/* 					})*/
/* 				});*/
/* 			});*/
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
/* 				 */
/* 				for(var i in data) {*/
/* 					if(data[i]['name']) {*/
/* 						employees[data[i]['id']] = data[i]['name'];*/
/* 						$('.advandced-search').append(new Option(data[i]['name'], data[i]['id']));*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		});*/
/* */
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
/* 				var where = `${param.timestamp}`*/
/* 				var data = {*/
/* 					"type": 3,*/
/* 					"page": curPage,*/
/* 					"page_size": pagesize,*/
/* 					"where": where*/
/* 				}*/
/* 				if(param.aid != undefined && param.aid != '') {*/
/* 					data['staff_name'] = param.aid;*/
/* 				}*/
/* 				getAccountList_3(data);*/
/* 				ykp.setCookie("aid", "", (1 / 24));*/
/* 				ykp.setCookie("time", "", (1 / 24));*/
/* 			} else if(ykp.getCookie('detailsId') && ykp.getCookie('detailsId') != '') {*/
/* 				var id = ykp.getCookie('detailsId');*/
/* 				var data = {*/
/* 					"type": 3,*/
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
/* 				getAccountList(1, 2);*/
/* 			}*/
/* 		}*/
/* */
/* 		function getAccountList_4(data) {*/
/* 			cs.getChart(3,'',data);*/
/* 			ykp.list({*/
/* 				url: '/api/api_service/service_list',*/
/* 				methods: 'post',*/
/* 				data: data,*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					hMonth = cs.last_year_month();*/
/* 					*/
/* 					var dataList, pagination, dataTable, type;*/
/* 					type = data['index'];*/
/* 					dataList = type == 2 ? '#dataList' : '#dataList1';*/
/* 					dataTable = type == 2 ? '#dynamic-table1' : '#dynamic-table2';*/
/* 					//生成月份表头*/
/* 					generateMonthTh($('#dynamic-table .thColor .month'),res['data']['months'],type);*/
/* 					if(res.data.items == '' || res.data == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt("暂无数据");*/
/* 						}, 1000);*/
/* 						$(dataList).html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return;*/
/* 					}*/
/* */
/* 					addList(res, type);*/
/* 					if(type == 1) {*/
/* 						$("#member-tab").addClass('active');*/
/* 						$("#task-tab").removeClass('active');*/
/* 						$(".kind li").eq(1).addClass("now").siblings().removeClass('now');*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		$('.flush').click(function() {*/
/* 			filter = '';*/
/* 			ykp.setCookie('where','');*/
/* 			$('[sear="customer_name"]').val('');*/
/* 			$('[sear="khm_customer.customer_num"]').val('');*/
/* 			$('[sear="jzm_service_info.fuze_id"]').val('').trigger('change');*/
/* 			getAccountList(1, ftype);*/
/* 		})*/
/* */
/* 		function getAccountList_3(data) {*/
/* 			ykp.list({*/
/* 				url: '/api/api_service/service_list',*/
/* 				method: 'post',*/
/* 				data: data,*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					var resdata = res.data.items;*/
/* 					var num = 0;*/
/* 					//判断是否有数据*/
/* 					if(resdata == '') {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt("暂无数据");*/
/* 						}, 1000);*/
/* 						$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return;*/
/* 					}*/
/* 					//判断是否有一般纳税人*/
/* 					for(var i in resdata) {*/
/* 						if(resdata[i].list[0]['khm_customer.tax_type'] == 1) {*/
/* 							num++;*/
/* 						}*/
/* 					}*/
/* 					//判断是否有小规模*/
/* 					if(num < resdata.length) {*/
/* 						if(param.flag) {*/
/* 							getAccountList_2(1, 2, '', param.timestamp);*/
/* 						} else {*/
/* 							getAccountList_2(1, 2, param.aid, param.timestamp);*/
/* 						}*/
/* 					}*/
/* 					if(num > 0) {*/
/* 						tzpage();*/
/* 						$("#tspage").show();*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//跳转页面的数据加载*/
/* 		function getAccountList_2(curPage, ctype, aid, timestamp) {*/
/* 			var where = `khm_customer.tax_type=${ctype} and ${timestamp}`;*/
/* 			if(param.flag) {*/
/* 				where = `khm_customer.tax_type=${ctype} and ${timestamp}`;*/
/* 			}*/
/* 			var data = {*/
/* 				"type": 3,*/
/* 				"page": curPage,*/
/* 				"page_size": pagesize,*/
/* 				"where": where*/
/* 			}*/
/* 			if(aid && aid != '') {*/
/* 				data['staff_name'] = aid;*/
/* 			}*/
/* 			cs.getChart(3,'',data);*/
/* 			ykp.list({*/
/* 				url: '/api/api_service/service_list',*/
/* 				method: 'post',*/
/* 				data: data,*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					hMonth = cs.last_year_month();*/
/* 					//生成月份表头*/
/* 					generateMonthTh($('#dynamic-table .thColor .month'),res['data']['months'],type);*/
/* 					if(res.data.items == '') {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt("暂无数据");*/
/* 						}, 1000);*/
/* 						$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return;*/
/* 					}*/
/* 					var dataList, pagination, dataTable, type;*/
/* 					var datas = res.data.items;*/
/* 					type = datas[0].list[0]['khm_customer.tax_type'];*/
/* 					dataList = type == 2 ? '#dataList' : '#dataList1'*/
/* 					dataTable = type == 2 ? '#dynamic-table1' : '#dynamic-table2';*/
/* 					addList(res, ctype);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//跳转页面查询后仍需跳转一般纳税人时*/
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
/* 		//导入导出*/
/* 		var data = {*/
/* 			url: "/api/api_service/serviceExport",*/
/* 			type: '3',*/
/* 			title: '记账模板'*/
/* 		}*/
/* 		cs.jzexport(data, function(res) {*/
/* 			setTimeout(function(){*/
/* 								ykp.prompt("上传成功");*/
/* 							},1000)	*/
/* 			getAccountList(1, 2);*/
/* 			$('.label_popup').hide();*/
/* 		})*/
/* */
/* 		//显示一般纳税热 或 小规模*/
/* 		$('.kind').on('click', 'li', function() {*/
/* 			$('#changePageNum').val(10);*/
/* 			// if($(this).hasClass('now')) {*/
/* 			// 	return;*/
/* 			// }*/
/* 			$(this).addClass('now').siblings().removeClass('now');*/
/* 			var index = $(this).index();*/
/* 			if(index == 0) {*/
/* 				ftype = 2;*/
/* 				$('#task-tab').addClass('active')*/
/* 				$('#member-tab').removeClass('active');*/
/* 				getAccountList(1, 2);*/
/* 			} else {*/
/* 				ftype = 1;*/
/* 				$('#member-tab').addClass('active').siblings().removeClass('active');*/
/* 				getAccountList(1, 1);*/
/* 			}*/
/* 			//通用排序*/
/* 			cs.general_sort({*/
/* 				url: '/api/api_service/service_list',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					filter:where,*/
/* 					limit: pagesize,*/
/* 					type:3*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				check:true,*/
/* 				initOrder:'khm_customer.id',*/
/* 				defaultOrder: order,*/
/* 				contentId: ftype==2?"#dataList":"#dataList1",*/
/* 				params:[{*/
/* 					id: ftype ==2?" #dynamic-table1":"#dynamic-table2",*/
/* 					field:["","","khm_customer.name","","customer_num","pos_name",*/
/* 						"","htm_contract.payment_cycle","jzm_service_info.fuze_id"*/
/* 					]*/
/* 				}]*/
/* 			}, function(res, _sort_role) {*/
/* 				sort_role = _sort_role;*/
/* 				addList(res,ftype);*/
/* 			});*/
/* 		});*/
/* */
/* 		var dataList, pagination;*/
/* */
/* 		//每页数量*/
/* 		$('#changePageNum').change(function() {*/
/* 			pagesize = $(this).val();*/
/* 			ykp.setCookie('page_size',pagesize);*/
/* 			$('.ui-pagination-container').remove();*/
/* 			getAccountList(1, ftype);*/
/* 		});*/
/* */
/* 		function getAccountList(curPage, ctype) {*/
/* 			hMonth = cs.last_year_month();*/
/* 			var data = {*/
/* 				"type": 3,*/
/* 				"page": curPage,*/
/* 				"page_size": pagesize,*/
/* 				"where": filter[ctype] ? ("khm_customer.tax_type=" + ctype +" and " + filter[ctype]) : "khm_customer.tax_type=" + ctype,*/
/* 				filter:filter[ctype]*/
/* 			}*/
/* 			if(month1){*/
/* 				data.month1 = month1;*/
/* 				data.month2 = month2;*/
/* 			}*/
/* 			cs.getChart(3,'',data);*/
/* 			ykp.list({*/
/* 				url: '/api/api_service/service_list',*/
/* 				method: 'post',*/
/* 				data: data,*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					//生成月份表头*/
/* 					generateMonthTh($('#dynamic-table .thColor .month'),res['data']['months'],ctype);*/
/* 					var tableId = (ctype == 2) ? $('#dataList').parent().attr('id') : $('#dataList1').parent().attr('id');*/
/* */
/* 					var tid = $('#' + tableId).parents('.tab-pane').attr('id');*/
/*                     if(res.data.items == '') {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt("暂无数据");*/
/* 						}, 1000);*/
/* 						if(ctype == 2) {*/
/* 							$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						}*/
/* 						if(ctype == 1) {*/
/* 							$('#dataList1').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						}*/
/* 						return;*/
/* 					}*/
/* 					addList(res, ctype);*/
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
/* 		*/
/* 		//生成月份表头：el 所有月份表头，months:开始、结束月份*/
/* 		function generateMonthTh(el,months,type){*/
/*             if(!months){*/
/*                 return;*/
/*             }*/
/* 			var start = {year:parseInt(months['start'].substring(0,4)),month:parseInt(months['start'].substring(4))};*/
/* 			var end = {year:parseInt(months['end'].substring(0,4))};*/
/* 			var El = type == 2 ? '#dynamic-table1' : '#dynamic-table2';*/
/* 			var start_month;*/
/* 			$(El+' .thColor .month').each(function(i,e){*/
/* 				start_month = i + start['month'];*/
/* 				if(start_month > 12){*/
/* 					start_month = start_month - 12;*/
/* 					$(this).text(end['year'] + '' + (start_month  < 10 ? '0' + start_month : start_month )).attr('month',end['year'] + '' + (start_month  < 10 ? '0' + start_month : start_month ));*/
/* 					return true;*/
/* 				}*/
/* 				$(this).text(start['year'] + '' + (start_month < 10 ? '0' + start_month : start_month)).attr('month',start['year'] + '' + (start_month < 10 ? '0' + start_month : start_month));*/
/* 			});*/
/* */
/* 			//自定义列表*/
/*             if(type==2){*/
/*   //              console.log($('#task-tab').find('.custom').length <1)*/
/*                 if($('#task-tab').find('.custom').length <1) {*/
/*                     cs.custorm_check('#dynamic-table1', 'tbody', true);*/
/*                 }*/
/*             }else {*/
/*                 if($('#member-tab').find('.custom').length <1) {*/
/*                     cs.custorm_check('#dynamic-table2', 'tbody', true);*/
/*                 }*/
/*             }*/
/* */
/* 		};*/
/* 		function Month(month,ftype){*/
/* 			var result = "";*/
/* 			var El = ftype == 2 ? '#dynamic-table1' : '#dynamic-table2';*/
/* 			$(El+' .thColor .month').each(function(i,e){*/
/* 				if(month == $(this).text()) {*/
/* 					result = i;*/
/* 					return false;*/
/* 				}*/
/* 			})*/
/* 			return result;*/
/* 		}*/
/* 		function addList(res, ctype) {*/
/* 			var data = res.data.items;*/
/* 			var status = []; //该数组存放th display属性值*/
/* 			var ths = ftype == 2 ? $('#dynamic-table1 .thColor th') : $('#dynamic-table2 .thColor th'); //获取所有的th*/
/* 			var html = '';*/
/* 			var Class = '';*/
/* 			var index = ['', 'fa  fa-circle-o', 'glyphicon glyphicon-ok', 'glyphicon glyphicon-remove'];*/
/* 			var timeArr = new Array(12);*/
/* 			var obj = {};*/
/* 			var cycleName = {*/
/* 				t1: '每月',*/
/* 				t3: '季度',*/
/* 				t6: '半年',*/
/* 				t12: '一年'*/
/* 			}*/
/* 			var cycle = [];*/
/* 			var yq = []; //逾期*/
/* 			var fzp = []; //负责人*/
/* 			for(var i = 0; i < ths.length; i++) {*/
/* 				status.push(ths.eq(i).css('display'));*/
/* 			}*/
/*             ykp.setCookie('page_no', res.data.curPage, (1 / 24));*/
/* 			if(!data) {*/
/* 				ykp.prompt('没有数据');*/
/* 				return false;*/
/* 			}*/
/* */
/* 			var overdue = 0;*/
/* */
/* 			//负责人id*/
/* 			var fuze_ids = [];*/
/* 			//负责人名字*/
/* 			var fuze = [];*/
/* */
/* 			//得到所有员工*/
/* 			var emps = allemp();*/
/* 			for(var z in data) {*/
/* 				data[z]['fuze_ids'] = [];*/
/* 				data[z]['fuze_ids1'] = [];*/
/* 			}*/
/* 			*/
/* 			var timeArr = new Array(12);*/
/* 			for(var i in data) {*/
/* 				var newMark = 'inline-block';*/
/* 				overdue = 0;*/
/* 				for(var j = 0; j < 12; j++) {*/
/* 					time = data[i].list[j] ? Month(data[i].list[j]['jzm_service_info.time'],ctype) :""; */
/* //					time = data[i].list[j] ? hMonth.indexOf(data[i].list[j]['jzm_service_info.time']) :"";*/
/* 					obj.status = data[i].list[j] ? data[i].list[j]['jzm_service_info.status'] :"";*/
/* 					obj.get_money = data[i].list[j] ? data[i].list[j]['jzm_service_info.get_money']:"";*/
/* 					obj.id = data[i].list[j] ? data[i].list[j]['jzm_service_info.id']:"";*/
/* 					obj.time = data[i].list[j] ? data[i].list[j]['jzm_service_info.time']:"";*/
/* 					obj.contract_id = data[i].list[j] ? data[i]['list'][j]['jzm_service_info.contract_id']:"";*/
/* 					obj.fuze_id = data[i].list[j] ? data[i]['list'][j]['jzm_service_info.fuze_id']:"";*/
/* 					obj.handStatus = data[i].list[j] ? (data[i]['list'][j]['htm_contract.status'] || "") :"";*/
/* 					obj.Status = data[i].list[j] ? (data[i].list[j]['htm_contract.status']  == 1 || data[i].list[j]['htm_contract.status']  == 2 ? false : true) : "" ; //合同状态*/
/* 					timeArr[time] = obj;*/
/* 					obj = {};*/
/* 				}*/
/* 				for(var j = data[i].list.length - 1; j >= 0; j--) {*/
/* */
/* 					overdue += parseInt(data[i].list[j]['jzm_service_info.overdue']);*/
/* 					if(data[i].list[j]['jzm_service_info.status'] != 0) {*/
/* 						newMark = 'none';*/
/* 					}*/
/* 					//					console.log(data[i].list[j]['jzm_service_info.fuze_id'])*/
/* 					//负责人id不存在 则将负责人id加入fuze_ids中*/
/* 					if($.inArray(data[i].list[j]['jzm_service_info.fuze_id'], data[i]['fuze_ids']) == -1) {*/
/* 						data[i]['fuze_ids'].push(data[i].list[j]['jzm_service_info.fuze_id']);*/
/* 						data[i]['fuze_ids1'].push(data[i].list[j]['jzm_service_info.fuze_id']);*/
/* 					}*/
/* */
/* //					if($.inArray(data[i].list[j]['htm_contract.payment_cycle'], cycle) == -1) {*/
/* //						cycle.push(cycleName["t" + data[i].list[j]['htm_contract.payment_cycle']]);  */
/* //					}*/
/* 				}*/
/* 				//				console.log(data[i]['fuze_ids']);*/
/* 				//根据负责人id 获取负责人姓名并存入fuze中*/
/* 				for(var j = 0; j < 1; j++) {*/
/* 					data[i]['fuze_ids'] = employees[data[i]['fuze_ids'][j]];*/
/* 				}*/
/* 				//查出员工表*/
/* 				for(var j in emps) {*/
/* 					if(emps[j]['bmm_employees.id'] == data[i].list[0]['htm_contract.assign_staff_id']) {*/
/* 						var empname = emps[j]['bmm_employees.name'];*/
/* 					}*/
/* 				}*/
/* 					*/
/* 				cycle=cycleName["t" + data[i].list[0]['htm_contract.payment_cycle']];*/
/* 				html +=*/
/* 					`<tr data-id="${data[i].contract_id}"  cid="${data[i].list[0]['khm_customer.id']}"  data-customerid="${data[i].list[0]['khm_customer.name']}" payment_cycle="${data[i].list[0]['htm_contract.payment_cycle']}">*/
/* 					 <td class="center">*/
/*                         <label class="pos-rel">*/
/*                         <input type="checkbox" name="check" class="ace"/>*/
/*                         <span class="lbl"></span>*/
/*                         </label>*/
/*                     </td>*/
/* 					<td  class="center" >*/
/* 						<label class="pos-rel">*/
/* 						<a><span data-index = 2 class="see  btYellow" title="查看报税数据" id="see"><i class="fa fa-eye"></i></span></a>*/
/* 						<a><span data-index = 0 class="see  btBlue" title="查看纳税数据" id="see"><i class="fa fa-eye"></i></span></a>*/
/* 						 <a><span data-index = 1 class="see btGreen" title="查看账务提示单" id="see"><i class="fa fa-eye"></i></span></a>*/
/* 						</label>*/
/* 					</td>*/
/* 					<td data-num="1" style="display:${status[2]};" data-cid="${data[i].list[0]['khm_customer.id']}">*/
/* 						<div style="display:${data[i].is_red == 1 ? "inline-block" : "none"};height:14px;width:26px">*/
/* 							<span class="spanTip" style=""><span>*/
/* 						</div>*/
/* 						<a href="javascript:void(0);" class="customerDetail pos-rel">${data[i].list[0]['khm_customer.name']}</a>*/
/* 						<label class="pos-rel">*/
/* 							<i relation=${data[i]['is_relotion']} class="sc fa ${data[i]['is_relotion'] == 0 ? 'fa-heart-o' : 'fa-heart'}" style="color:${data[i]['is_relotion']==1 ? 'red' : ''}"></i>*/
/* 							<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}"  data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>*/
/* 						</label>*/
/* 					</td>*/
/* 					<td class="center" style="display:${status[3]};" data-num="19">*/
/* 						${ parseInt(data[i]['maxLv']).toFixed(2)}*/
/* 					</td>*/
/* 					<td data-num="2" style="display:${status[4]};">*/
/* 						${data[i].list[0]['khm_customer.customer_num']}*/
/* 					</td>*/
/* */
/* 					<td class="" style="display:${status[5]};" data-num="3">*/
/* 						${data[i]['position']['pos_name'] + data[i]['position']['pos_num']}*/
/* 					</td>*/
/* 					<td class="center" style="display:${status[6]};" data-num="4">*/
/* 						${cycle}*/
/* 					</td>*/
/* */
/* 					<td class="center" style="display:${status[7]};" data-num="5">*/
/* 						${ data[i]['num']}*/
/* 					</td>*/
/* 					<td class="center" style="display:${status[8]};" data-num="6">*/
/* 						${ data[i]['maxTime']}*/
/* 					</td>*/
/* 					<td class="center" style="display:${status[9]};" data-num="7">*/
/* 						${ data[i]['fuze_ids'] || ''}*/
/* 					</td>*/
/* 					<td style="display:${status[10]};border:1px solid #eee !important;" ${timeArr[0] ? (timeArr[0]['Status'] ? "cstatus" : "") : ""} title="${timeArr[0] != undefined ? timeArr[0].time:''}" class="center " contract_id=${timeArr[0] ? timeArr[0].contract_id : ''} fuze_ids=${data[i]['fuze_ids1']}  fuze_id=${timeArr[0] ? timeArr[0].fuze_id : ''}  handStatus=${timeArr[0] ? timeArr[0].handStatus : ''} get_money="${timeArr[0] != undefined ? timeArr[0].get_money : ''}" data-num="8" data-time="${timeArr[0] != undefined ? timeArr[0]['time']  : ''}" data-id="${timeArr[0] != undefined ? timeArr[0]['id']  : ''}" data-status="${timeArr[0] != undefined ? timeArr[0].status  : ''}" data-monry="">*/
/* 						<label class="pos-rel ${timeArr[0] != undefined ? index[timeArr[0].status] : ''}"></label>*/
/* 					</td>*/
/* */
/* 					<td style="display:${status[11]};border:1px solid #eee !important;" ${timeArr[1] ? (timeArr[1]['Status'] ? "cstatus" : "") : ""} title="${timeArr[1] != undefined ? timeArr[1].time:''}" class="center "  contract_id=${timeArr[1] ? timeArr[1].contract_id : ''} fuze_ids=${data[i]['fuze_ids1']} fuze_id=${timeArr[1] ? timeArr[1].fuze_id : ''} handStatus=${timeArr[1] ? timeArr[1].handStatus : ''}  handStatus=${timeArr[1] ? timeArr[1].handStatus : ''} data-id="${timeArr[1] != undefined ? timeArr[1].id : ''}" data-time="${timeArr[1] != undefined ? timeArr[1]['time']  : ''}" data-num="9" get_money="${timeArr[1] != undefined ? timeArr[1].get_money : ''}" data-status="${timeArr[1] != undefined ? timeArr[1].status  : ''}" style="width:70px;">*/
/* 						<label class="pos-rel ${timeArr[1] != undefined ? index[timeArr[1].status] : ''}"></label>*/
/* 					</td>*/
/* 					//三月*/
/* 					<td style="display:${status[12]};border:1px solid #eee !important;" ${timeArr[2] ? (timeArr[2]['Status'] ? "cstatus" : "") : ""} title="${timeArr[2] != undefined ? timeArr[2].time:''}" data-time="${timeArr[2] != undefined ? timeArr[2]['time']  : ''}" contract_id=${timeArr[2] ? timeArr[2].contract_id : ''} fuze_ids=${data[i]['fuze_ids1']} fuze_id=${timeArr[2] ? timeArr[2].fuze_id : ''} handStatus=${timeArr[2] ? timeArr[2].handStatus : ''}  handStatus=${timeArr[2] ? timeArr[2].handStatus : ''} class="center" get_money="${timeArr[2] != undefined ? timeArr[2].get_money : ''}" data-id="${timeArr[2] != undefined ? timeArr[2].id : ''}" data-status="${timeArr[2] != undefined ? timeArr[2].status  : ''}" data-num="10">*/
/* 						<label class="pos-rel ${timeArr[2] != undefined ? index[timeArr[2].status] : ''}"></label>*/
/* 					</td>*/
/* */
/* 					<td style="display:${status[13]};border:1px solid #eee !important;" ${timeArr[3] ? (timeArr[3]['Status'] ? "cstatus" : "") : ""} title="${timeArr[3] != undefined ? timeArr[3].time:''}" data-time="${timeArr[3] != undefined ? timeArr[3]['time']  : ''}"  contract_id=${timeArr[3] ? timeArr[3].contract_id : ''} fuze_ids=${data[i]['fuze_ids1']} fuze_id=${timeArr[3] ? timeArr[3].fuze_id : ''}  handStatus=${timeArr[3] ? timeArr[3].handStatus : ''}  handStatus=${timeArr[3] ? timeArr[3].handStatus : ''} class="center " get_money="${timeArr[3] != undefined ? timeArr[3].get_money : ''}" data-id="${timeArr[3] != undefined ? timeArr[3].id : ''}" data-status="${timeArr[3] != undefined ? timeArr[3].status  : ''}" data-num="11">*/
/* 						<label class="pos-rel ${timeArr[3] != undefined ? index[timeArr[3].status] : ''}"></label>*/
/* 					</td>*/
/* 					//五月*/
/* 					<td style="display:${status[14]};border:1px solid #eee !important;" ${timeArr[4] ? (timeArr[4]['Status'] ? "cstatus" : "") : ""} title="${timeArr[4] != undefined ? timeArr[4].time:''}" data-time="${timeArr[4] != undefined ? timeArr[4]['time']  : ''}"  contract_id=${timeArr[4] ? timeArr[4].contract_id : ''} fuze_ids=${data[i]['fuze_ids1']}  fuze_id=${timeArr[4] ? timeArr[4].fuze_id : ''}   handStatus=${timeArr[4] ? timeArr[4].handStatus : ''} class="center " get_money="${timeArr[4] != undefined ? timeArr[4].get_money : ''}" data-id="${timeArr[4] != undefined ? timeArr[4].id : ''}" data-status="${timeArr[4] != undefined ? timeArr[4].status  : ''}" data-num="12">*/
/* 						<label class="pos-rel ${timeArr[4] != undefined ? index[timeArr[4].status] : ''}"></label>*/
/* 					</td>*/
/* 					<td style="display:${status[15]};border:1px solid #eee !important;" ${timeArr[5] ? (timeArr[5]['Status'] ? "cstatus" : "") : ""} title="${timeArr[5] != undefined ? timeArr[5].time:''}" data-time="${timeArr[5] != undefined ? timeArr[5]['time']  : ''}"  contract_id=${timeArr[5] ? timeArr[5].contract_id : ''} fuze_ids=${data[i]['fuze_ids1']}  fuze_id=${timeArr[5] ? timeArr[5].fuze_id : ''}  handStatus=${timeArr[5] ? timeArr[5].handStatus : ''} class="center " get_money="${timeArr[5] != undefined ? timeArr[5].get_money : ''}" data-id="${timeArr[5] != undefined ? timeArr[5].id : ''}" data-status="${timeArr[5] != undefined ? timeArr[5].status  : ''}" data-num="13">*/
/* 						<label class="pos-rel ${timeArr[5] != undefined ? index[timeArr[5].status] : ''}"></label>*/
/* 					</td>*/
/* 					//七月*/
/* 					<td style="display:${status[16]};border:1px solid #eee !important;" ${timeArr[6] ? (timeArr[6]['Status'] ? "cstatus" : "") : ""} title="${timeArr[6] != undefined ? timeArr[6].time:''}" data-time="${timeArr[6] != undefined ? timeArr[6]['time']  : ''}"  contract_id=${timeArr[6] ? timeArr[6].contract_id : ''} fuze_ids=${data[i]['fuze_ids1']}  fuze_id=${timeArr[6] ? timeArr[6].fuze_id : ''}  handStatus=${timeArr[6] ? timeArr[6].handStatus : ''} data-num="14" get_money="${timeArr[6] != undefined ? timeArr[6].get_money : ''}" data-status="${timeArr[6] != undefined ? timeArr[6].status  : ''}" data-id="${timeArr[6] != undefined ? timeArr[6].id : ''}" class="">*/
/* 						<label class="pos-rel ${timeArr[6] != undefined ? index[timeArr[6].status] : ''}"></label>*/
/* 					</td>*/
/* 					<td style="display:${status[17]};border:1px solid #eee !important;" ${timeArr[7] ? (timeArr[7]['Status'] ? "cstatus" : "") : ""} title="${timeArr[7] != undefined ? timeArr[7].time:''}" data-time="${timeArr[7] != undefined ? timeArr[7]['time']  : ''}"  contract_id=${timeArr[7] ? timeArr[7].contract_id : ''} fuze_ids=${data[i]['fuze_ids1']}  fuze_id=${timeArr[7] ? timeArr[7].fuze_id : ''}  handStatus=${timeArr[7] ? timeArr[7].handStatus : ''} class="center" get_money="${timeArr[7] != undefined ? timeArr[7].get_money : ''}" data-status="${timeArr[7] != undefined ? timeArr[7].status  : ''}" data-id="${timeArr[7] != undefined ? timeArr[7].id : ''}" data-num="15">*/
/* 						<label class="pos-rel ${timeArr[7] != undefined ? index[timeArr[7].status] : ''}"></label>*/
/* 					</td>*/
/* 					//九月*/
/* 					<td style="display:${status[18]};border:1px solid #eee !important;" ${timeArr[8] ? (timeArr[8]['Status'] ? "cstatus" : "") : ""} title="${timeArr[8] != undefined ? timeArr[8].time:''}" data-time="${timeArr[8] != undefined ? timeArr[8]['time']  : ''}"  contract_id=${timeArr[8] ? timeArr[8].contract_id : ''} fuze_ids=${data[i]['fuze_ids1']}  fuze_id=${timeArr[8] ? timeArr[8].fuze_id : ''}  handStatus=${timeArr[8] ? timeArr[8].handStatus : ''} class="center" get_money="${timeArr[8] != undefined ? timeArr[8].get_money : ''}" data-status="${timeArr[8] != undefined ? timeArr[8].status  : ''}" data-id="${timeArr[8] != undefined ? timeArr[8].id : ''}" data-num="16">*/
/* 						<label class="pos-rel ${timeArr[8] != undefined ? index[timeArr[8].status] : ''}"></label>*/
/* 					</td>*/
/* 					<td style="display:${status[19]};border:1px solid #eee !important;" ${timeArr[9] ? (timeArr[9]['Status'] ? "cstatus" : "") : ""} title="${timeArr[9] != undefined ? timeArr[9].time:''}" data-time="${timeArr[9] != undefined ? timeArr[9]['time']  : ''}" contract_id=${timeArr[9] ? timeArr[9].contract_id : ''} fuze_ids=${data[i]['fuze_ids1']}  fuze_id=${timeArr[9] ? timeArr[9].fuze_id : ''}  handStatus=${timeArr[9] ? timeArr[9].handStatus : ''} class="center " get_money="${timeArr[9] != undefined ? timeArr[9].get_money : ''}" data-status="${timeArr[9] != undefined ? timeArr[9].status  : ''}" data-id="${timeArr[9] != undefined ? timeArr[9].id : ''}" data-num="17">*/
/* 						<label class="pos-rel ${timeArr[9] != undefined ? index[timeArr[9].status] : ''}"></label>*/
/* 					</td>*/
/* 					<td style="display:${status[20]};border:1px solid #eee !important;" ${timeArr[10] ? (timeArr[10]['Status'] ? "cstatus" : "") : ""} title="${timeArr[10] != undefined ? timeArr[10].time:''}" data-time="${timeArr[10] != undefined ? timeArr[10]['time']  : ''}"  contract_id=${timeArr[10] ? timeArr[10].contract_id : ''} fuze_ids=${data[i]['fuze_ids1']}  fuze_id=${timeArr[10] ? timeArr[10].fuze_id : ''}  handStatus=${timeArr[10] ? timeArr[10].handStatus : ''} class="center" get_money="${timeArr[10] != undefined ? timeArr[10].get_money : ''}" data-status="${timeArr[10] != undefined ? timeArr[10].status  : ''}" data-id="${timeArr[10] != undefined ? timeArr[10].id : ''}" data-num="18">*/
/* 						<label class="pos-rel ${timeArr[10] != undefined ? index[timeArr[10].status] : ''}"></label>*/
/* 					</td>*/
/* 					<td style="display:${status[21]};border:1px solid #eee !important;" ${timeArr[11] ? (timeArr[11]['Status'] ? "cstatus" : "") : ""} title="${timeArr[11] != undefined ? timeArr[11].time:''}" data-time="${timeArr[11] != undefined ? timeArr[11]['time']  : ''}"  contract_id=${timeArr[11] ? timeArr[11].contract_id : ''} fuze_ids=${data[i]['fuze_ids1']}  fuze_id=${timeArr[11] ? timeArr[11].fuze_id : ''}  handStatus=${timeArr[11] ? timeArr[11].handStatus : ''} class="center" get_money="${timeArr[11] != undefined ? timeArr[11].get_money : ''}" data-status="${timeArr[11] != undefined ? timeArr[11].status  : ''}" data-id="${timeArr[11] != undefined ? timeArr[11].id : ''}" data-num="19">*/
/* 						<label class="pos-rel ${timeArr[11] != undefined ? index[timeArr[11].status] : ''}"></label>*/
/* 					</td>*/
/* 				</tr>`;*/
/* */
/* 				//置空数据*/
/* 				timeArr = [];*/
/* 				fuze_ids = [];*/
/* 				fuze = [];*/
/* 			}*/
/* 			if(ctype == 2) {*/
/* 				$('#dataList').html(html);*/
/* 				custom.get_custom_info();*/
/* 				$("[data-rel='tooltip']").tooltip();*/
/* 				$('#dataList').find('td[get_money]').each(function() {*/
/* 					if($(this).attr('get_money') > 0) {*/
/* 						$(this).css('background-color', '#00cc22');*/
/* 						$(this).css('border','1px solid rgb(238, 238, 238) !important');*/
/* 					}*/
/* 				})*/
/* 			}*/
/* */
/* 			if(ctype == 1) {*/
/* 				$('#dataList1').html(html);*/
/* 				custom.get_custom_info();*/
/* 				$("[data-rel='tooltip']").tooltip();*/
/* 				$('#dataList1').find('td[get_money]').each(function() {*/
/* 					if($(this).attr('get_money') > 0) {*/
/* 						$(this).css('background-color', '#00cc22')*/
/* 					}*/
/* 				})*/
/* 			}*/
/* 			*/
/* 			cs.sc('记账',function(res) {*/
/* 				getAccountList(1,2);*/
/* 			})*/
/* 			cs.getAllCw(function(option) {*/
/* 				$('#heightsearch1 .cw').html(option);*/
/* 				$('#heightsearch1 .cw').select2({*/
/* 					allowClear: true*/
/* 				})*/
/* 			})*/
/* 			cs.getAllCw(function(option) {*/
/* 				$('#height_search1 .cw').html(option);*/
/* 				$('#height_search1 .cw').select2({*/
/* 					allowClear: true*/
/* 				})*/
/* 			})*/
/* //			$('.cs').click(function() {*/
/* //				debugger*/
/* //				var customer_id = $(this).parents('tr').attr('cid');*/
/* //				var relation = $(this).attr('relation') == 0 ? 1 : 0;*/
/* //				ykp.doAjax({*/
/* //					url:"/api/api_contract/attention",*/
/* //					method:"post",*/
/* //					data:{*/
/* //						process:"记账",*/
/* //						customer_id:customer_id,*/
/* //						relation:relation*/
/* //					},*/
/* //					success:function(res) {*/
/* //						*/
/* //					}*/
/* //				})*/
/* //			})*/
/* */
/* 			//显示备注*/
/* 			custom.showReamrk();*/
/* */
/* 			//点击td事件  提交审核*/
/* 			var dataList = '';*/
/* */
/* 			if(ctype == 2) {*/
/* 				dataList = '#dataList';*/
/* 			}*/
/* 			*/
/* 			*/
/* 			$('.see').click(function() {*/
/* 				var id = $(this).parents("tr").attr("data-customerid");*/
/* 				var index = $(this).attr('data-index');*/
/* 					ykp.setCookie('custom_id', id, (1 / 24));*/
/* 	//			var url = index == 0 ? "?url=auditTax&i=1-3&type=0" : "?url=tally&i=1-1&type=0";*/
/* 				var url;*/
/* 			  if(url = index == 0){*/
/* 			           url="?url=auditTax&i=1-3&type=0"*/
/* 			  }else if(url = index == 1){*/
/* 			        	url="?url=tally&i=1-1&type=0"*/
/* 			  }else if(url = index == 2){*/
/*                   url="?url=auditCustomerService&i=1-2&type=0"*/
/* 			  }*/
/* */
/* 				skPage(url);*/
/* 			*/
/* 			})*/
/* */
/* 			if(ctype == 1) {*/
/* 				dataList = '#dataList1';*/
/* 			}*/
/* */
/* 			var statu = cs.getNodes([97,289], true);*/
/* 			//账务提示单*/
/* 			$(dataList + " td[data-status='0']," + dataList + " td[data-status='3']").click(function() {*/
/* 			    var _td = $(this);*/
/* 				if(!statu) {*/
/* 					return false;*/
/* 				}*/
/* */
/* 				var uid = ykp.getCookie('uid');*/
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
/* 				*/
/* 				//作废未收款不能添加*/
/* 		        if($(this).attr('get_money') == -1 &&  $(this).attr('handStatus') == '4' || $(this).attr('handStatus') == '3') {*/
/* 		        	ykp.prompt('订单已解约，不能编辑');*/
/* 		        	return false;*/
/* 		        }*/
/* */
/* 				//				//服务审批状态非未审批、审批失败时，提示*/
/* 				//	            if($(this).attr('data-status') != '0' && $(this).attr('data-status') != '3') {*/
/* 				//	                var approve_status = {'1':'审批中，不可操作','2':'审批成功，不可操作'};*/
/* 				//	                ykp.prompt(approve_status[$(this).attr('data-status')] || "不可操作");*/
/* 				//	                return false;*/
/* 				//	            }*/
/* */
/* 				//输入框失去焦点将数据同步到打印区域*/
/* 				$('#templateCon').on('blur', '[field]', function() {*/
/* 					$('#templateCon .print_area').find('[syllable="' + $(this).attr('field') + '"]').text($(this).val().trim());;*/
/* 				});*/
/* */
/* 				// var thistd = $(this);*/
/* 				//var customer_id = $(this).parents('tr').find('[data-num="2"]').text().trim();*/
/*                 var customer_id = $(this).parents('tr').attr("cid");*/
/* 				var ser_id = $(this).attr('data-id');*/
/* */
/* 				var _index = $('.now').index();*/
/* */
/* 				//负责人*/
/* 				var people = $(this).siblings().eq(9).text();*/
/* 				var name = $(this).siblings().eq(2).children('a').text();*/
/* */
/* 				showMark('#tipList');*/
/* 				$('#showBox .title').text('账务提示单');*/
/* */
/* 				$('#templateCon').data('flag', '1');*/
/* 				$('#templateCon .close_get').unbind('click').click(function() {*/
/* 					$('#templateCon').data('flag', '2');*/
/* 					cs.close();*/
/* 				});*/
/* */
/* 				$('#templateCon #sendMsg').attr('customer_id', customer_id);*/
/* 				uploadImg();*/
/* 				printAccount();*/
/* 				$('#templateCon #name').val(name);*/
/* 				$('#templateCon #assign').val(people.trim());*/
/* 				$('#templateCon #month').val($(this).attr('data-time'));*/
/* 				$('#templateCon .company').val(name.trim());*/
/* 				$('#templateCon .remind_time').text(new Date().getFullYear() + '' + time);*/
/* */
/* 				ykp.doAjax({*/
/*                     url: '/api/api_service/get_jz_info',*/
/*                     data: {*/
/*                         service_id: ser_id,*/
/*                     },*/
/*                     method: 'post',*/
/*                     success: function(res) {*/
/*                         data = res.data;*/
/*                         $('#templateCon input[field=this_year]').val(data["本年销售额"]);*/
/*                         $('#templateCon input[field=lx_11_month]').val(data["11个月销售额"]);*/
/*                         $('#templateCon input[field=tax_bearing_rate]').val(data["税负率"]);*/
/*                     }*/
/*                 })*/
/* */
/* */
/* 				if(_index == 1) {*/
/* 					$('#templateCon .remind').addClass('no-print');*/
/* 				}*/
/* */
/* 				cs.upload1({*/
/* 					el: "#templateBox #upload1",*/
/* 					ael: "#templateBox #fileBox"*/
/* 				})*/
/* 				$('#templateCon [field]').each(function(i, e) {*/
/*                     $(this).val(data[0] ? data[0][$(this).attr('field')]:"");*/
/* 				});*/
/* 				$('#templateCon [syllable]').each(function(i, e) {*/
/* 					$(this).text(data[0] ? data[0][$(this).attr('syllable')] : "");*/
/* 				});*/
/* */
/* 				saveAccount(_index, ser_id, $(this).attr('data-time'),_td);*/
/* 			})*/
/* 		}*/
/* 		*/
/* 		function skPage(urls) {*/
/* 			var url_ = urls.split('&')[0].split('=')[1];*/
/* 			var index = urls.split('&')[1].split('=')[1].split('-')[0];*/
/* 			$('.sidebar-shortcuts-large').children().eq(index).trigger('click');*/
/* 			$('#navBox #nav-list').eq(index).find('li[data-url$="' + url_ + '"]').trigger('click');*/
/* 		}*/
/* 		//发送短信*/
/* 		function sendMsg(id, type,param) {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_common/send_customer',*/
/* 				data: {*/
/* 					customer_id: id,*/
/* 					type: type,*/
/* 					param:JSON.stringify(param)*/
/* 				},*/
/* 				method: 'post',*/
/* 				success: function(res) {*/
/* 					ykp.prompt('短信发送成功！');*/
/* 				}*/
/* 			})*/
/* 		}*/
/* 		//图片上传*/
/* 		function uploadImg() {*/
/* 			$('#templateCon .uploadImage').unbind('change').change(function() {*/
/* 				var it = $(this);*/
/* 				//console.log(it.hasClass('new_pic'));*/
/* 				var file = this.files[0];*/
/* 				if(!file.type || !/\.(jpg|png|)$/.test(file.name)) {*/
/* 					ykp.prompt('请上传JPG、PNG格式的图片');*/
/* 					return false;*/
/* 				}*/
/* */
/* 				var fr = new FileReader();*/
/* 				var postdata = {};*/
/* 				if(!file) {*/
/* 					return;*/
/* 				}*/
/* */
/* 				fr.readAsDataURL(file);*/
/* 				fr.onloadend = function(e) {*/
/* 					var base64 = e.target.result;*/
/* 					postdata['name'] = file.name;*/
/* 					postdata['dir'] = 'log';*/
/* 					postdata['base64'] = base64.split(',')[1];*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_common/upload_img',*/
/* 						method: 'post',*/
/* 						data: postdata,*/
/* 						success: function(res) {*/
/* 							//图片有6张就不再添加*/
/* 							if(it.parent().siblings().length == 5) {*/
/* 								it.parent().hide();*/
/* 							}*/
/* */
/* 							var img_input = $(`*/
/*                             <label class="" style="margin-bottom:0;margin-right:10px;line-height:70px;display: inline-block;width: 70px;height: 70px;cursor: pointer; text-align: center;">*/
/*                             <img field="pics" style="width: 100%;height: 70px;" src="${res.data.url}" alt="">*/
/*                             <input type="file" class="uploadImage new_pic _decrease" style="position: absolute;opacity: 0;left:-9999px;">*/
/*                         	</label>`);*/
/* 							img_input.find('[field="pics"]').attr('url', res.data.url);*/
/* 							img_input.find('[field="pics"]').attr('name', file.name);*/
/* 							if(it.hasClass('new_pic')) {*/
/* 								it.parent().find('[field="pics"]').attr('src', res.data.url);*/
/* 								it.parent().find('[field="pics"]').attr('url', res.data.url);*/
/* 								it.parent().find('[field="pics"]').attr('name', file.name);*/
/* 							} else {*/
/* 								it.parent().before(img_input);*/
/* 							}*/
/* 							uploadImg();*/
/* 						}*/
/* 					});*/
/* 				}*/
/* 			});*/
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
/* 		//保存账务提示单*/
/* 		function saveAccount(index, id, year_months,_td) {*/
/* 			$('#templateCon .add_alert').click(function() {*/
/* 				var me = $(this);*/
/* 				if(me.data('disabled')){*/
/* 					return ;*/
/* 				}*/
/* 				var postdata = {};*/
/* 				postdata['service_id'] = id;*/
/* 				var is_send = false;*/
/* 				if($('#templateCon #sendMsg input:checked').val() == 1) {*/
/* 					is_send = true;*/
/* 				}*/
/* 				var customer_id = $('#templateCon #sendMsg').attr('customer_id')*/
/* 				var vouchers = [];*/
/* 				$('#templateCon [field]').each(function(i, e) {*/
/* 					if($(this).attr('field') == 'pics') {*/
/* 						vouchers.push($(this).attr('src'));*/
/* 						return;*/
/* 					}*/
/* 					postdata[$(this).attr('field')] = $(this).val().trim();*/
/* 				});*/
/*                 if(vouchers.length > 0) {*/
/* 					postdata['pics'] = JSON.stringify(vouchers);*/
/* 				}*/
/* 				postdata['year_month_id'] = year_months;*/
/* 				var fileBox = $('#templateCon #fileBox');*/
/* 				var files = [];*/
/* 				if(fileBox.children().length > 0) {*/
/* 					$('#templateCon #fileBox').find('a').each(function(i) {*/
/* 						files.push({*/
/* 							name: $(this).text(),*/
/* 							url: $(this).attr('data-url')*/
/* 						})*/
/* 					})*/
/* 					postdata.files = JSON.stringify(files);*/
/* 				}*/
/* 				var param = {*/
/* 					name: $('#templateCon #name').val().trim(),*/
/* 					time: $('#templateCon #month').val(),*/
/* 				}*/
/* 				*/
/* 				me.data('disabled', 1);*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_service/accounting_add',*/
/* 					method: 'post',*/
/* 					data: postdata,*/
/* 					success: function(res) {		*/
/* 						cs.close();*/
/* //						if(index == 0) {*/
/* //							getAccountList(1, 2);*/
/* //						}*/
/* //						 if(index == 1) {*/
/* //							getAccountList(1, 1);*/
/* //						}*/
/* 						if(is_send) {*/
/* 							sendMsg(customer_id, "账期完成", param);*/
/* 						}*/
/*                         //$('.in').removeClass('modal-backdrop');*/
/*                         //$('#showBox').addClass('ishide');*/
/*                         _td.find('label').addClass('fa fa-circle-o').attr('data-status', 1);*/
/*                         _td.unbind();*/
/*                     },*/
/* 					complete: function(){*/
/* 						me.data('disabled', '');*/
/* 					}*/
/* 				});*/
/* 			});*/
/* 		}*/
/* */
/* 		$('.kind li').click(function() {*/
/* 			var page_no = ykp.getCookie('page_no');*/
/* 			var index = $(this).index();*/
/* 			index = index == 0 ? 2 : 1;*/
/* 			var htmlStatus = true;*/
/* 			ykp.setCookie('jz_type', index);*/
/* 			if(index == 0) {*/
/* 				var html = $('  #dataList').find('tr').length > 0;*/
/* 				if(!html) {*/
/* 					return;*/
/* 				}*/
/* 			} else {*/
/* 				if(htmlStatus) {*/
/* 					var html = $('#dataList1').find('tr').length > 0;*/
/* 					if(html) {*/
/* 						return;*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 			cs.setFuze({*/
/* 				check:true,*/
/* 				conId:["#dataList","#dataList1"],*/
/* 				type:"3",*/
/* 				url:"/api/api_service/transfer_user",*/
/* 				fun:function(ftype){*/
/* */
/* 					getAccountList(1, ftype);*/
/* 				}*/
/* 			});*/
/* */
/* 			getAccountList(page_no, index);*/
/* 		})*/
/* */
/* 		//高级搜索按钮*/
/* 		cs.showHeightSearch('#heightsearch', '#heightsearch1');*/
/* 		cs.showHeightSearch('#height_serch', '#height_search1');*/
/* */
/* 		function getCustomerList(curPage) {*/
/* //			cs.getChart(3);*/
/* 			ykp.list({*/
/* 				url: '/api/api_service/customer',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					page: curPage,*/
/* 					page_size: pagesize,*/
/* 					order: order*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					hMonth = cs.last_year_month();*/
/* 					//生成月份表头*/
/* 					generateMonthTh($('#dynamic-table .thColor .month'),res['data']['months']);*/
/* 					addList(res);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		search();*/
/* */
/* 		function search() {*/
/* 			var data = {*/
/* 				url: '/api/api_service/service_list',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					"type": 3,*/
/* 					order: order*/
/* 				}*/
/* 			}*/
/* */
/* 			cs.doSearch('.search', data, 'where', true, function(res,_filter) {*/
/* 				$("#tspage").hide();*/
/* 				var dataList, pagination;*/
/* 				var type = $('.kind').find('.now').index() == 0 ? 2 : 1;*/
/* 				filter[type] = _filter;*/
/* 				if(type) {*/
/* 					data.data.where = type == 2 ? "khm_customer.tax_type=2" : "khm_customer.tax_type=1";*/
/* 					dataList = type == 2 ? '#dataList' : '#dataList1';*/
/* 					pagination = type == 2 ? '#pagination1' : '#pagination2';*/
/* 				}*/
/* 				//生成月份表头*/
/* 				generateMonthTh($('#dynamic-table .thColor .month'),res['data']['months'],type);*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt("暂无数据");*/
/* 					}, 1000);*/
/* 					$(dataList).html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 				} else {*/
/* 					addList(res, type, dataList);*/
/* 				}*/
/* 			},'',{url:"/api/api_service/assistant_list_new "})*/
/* 		}*/
/* */
/* 		doHserch();*/
/* 		*/
/* 		function doHserch() {*/
/* 			var data = {*/
/* 				url: '/api/api_service/service_list',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					"type": 3,*/
/* 					order: order*/
/* 				}*/
/* 			}*/
/* */
/* 			cs.hSearch('.search1', data, 'where', true, function(res,_filter,month) {*/
/* 				$("#tspage").hide();*/
/* 				var index = $('.kind').find('.now').index();*/
/* 				var type = index == 0 ? 2 : 1;*/
/* 				filter[type] = _filter;*/
/* 				month2[type] = month;*/
/* 				$('.in').click();*/
/* 				if(index == 0) {*/
/* 					$("#heightsearch1").fadeOut();*/
/* 					$("#heightsearch").removeClass('active');*/
/* 				}*/
/* 				if(index == 1) {*/
/* 					$("#height_search1").fadeOut();*/
/* 					$("#height_serch").removeClass('active');*/
/* 				}*/
/* 				var dataList = index == 0 ? '#dataList' : '#dataList1';*/
/* */
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt("暂无数据");*/
/* 					}, 1000);*/
/* 					$(dataList).html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center; clear:none;" class="page">暂无数据</div></td></tr>');*/
/* 				}else{*/
/*                     //生成月份表头*/
/*                     generateMonthTh($('#dynamic-table .thColor .month'),res['data']['months'],type);*/
/*                     addList(res, type, dataList);*/
/* */
/* 				}*/
/* 			},'',{url:"/api/api_service/assistant_list_new "})*/
/* 		}*/
/* */
/* 		*/
/* 		//能量条形式控制*/
/* 		$('.easy-pie-chart.percentage').each(function() {*/
/* 			var $box = $(this).closest('.infobox');*/
/* 			var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');*/
/* 			var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';*/
/*             $(this).easyPieChart({*/
/* 				barColor: barColor,*/
/* 				trackColor: trackColor,*/
/* 				scaleColor: false,*/
/* 				lineCap: 'butt',*/
/* 				lineWidth: 5,*/
/* 				animate: ace.vars['old_ie'] ? false : 1000*/
/* 			});*/
/* 		});*/
/* */
/* 		//查看纳税记录（已取消）*/
/* 		$('#dynamic-table tbody td .see').click(function() {*/
/* 			//获取当前行的id*/
/* 			//console.log($(this).parents('tr').attr('data-id'));*/
/* 		})*/
/* 	})*/
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
