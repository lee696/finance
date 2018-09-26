<?php

/* admin/clientManage/partner.html */
class __TwigTemplate_20c9c965f55dae6f5270e70c0f3742bb2b3b12cabf972bffb8bcd79bb806d999 extends Twig_Template
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
\t.item_form label {
\t\twidth: 112px;
\t}
\t#editBox table tr td,#editBox table{
\t\ttext-align: left;
\t\tborder:none !important;
\t}
\t#editBox table tr td{
\t\theight: 35px;
\t}
\t#templateBox input{height:30px;width:180px;padding-left:5px;}\t
</style>
<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<!-- <h3 class=\"header smaller lighter blue\">合作客户</h3> -->
\t\t<div class=\"actions\" id=\"topTool\">
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<div class=\"search\">
\t\t\t\t\t<i class=\"search-icon\"></i>
\t\t\t\t\t<input type=\"text\" pts=\"0\" sear=\"khm_customer.name\" class=\"search-input\" placeholder=\"企业名称\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<div class=\"search\">
\t\t\t\t\t<i class=\"search-icon\"></i>
\t\t\t\t\t<input type=\"text\" pts=\"0\" sear=\"khm_customer.customer_num\" class=\"search-input\" placeholder=\"客户编码\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button type=\"button\" id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
\t                <i class=\"fa fa-search\"></i>
\t            </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;  margin-right: 5px; \">
\t\t\t\t<button id=\"heightsearch\" title=\"高级搜索\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
                    <i class=\"fa fa-filter\"></i>
                </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
                    <i class=\"fa fa-refresh\"></i>
                </button>
\t\t\t</div>

<!--
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button type=\"button\"  title=\"导出\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"exportfile moveToClue btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t\t<i class=\"fa fa-sign-out\"></i>
\t\t\t\t</button>
\t\t\t</div>-->

\t\t\t<!--高级搜索-->\t
\t\t\t\t\t\t\t
\t\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"position: absolute; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;margin-top: 30px;\">
\t\t\t\t<div class=\"row\">
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
\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.customer_num\" />
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>客户级别</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select style=\"width:180px\" gjs=0 sear=\"khm_customer.rank\">
\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t<option value=\"1\">A</option>
\t\t\t\t\t\t\t<option value=\"2\">B</option>
\t\t\t\t\t\t\t<option value=\"3\">C</option>
\t\t\t\t\t\t\t<option value=\"4\">D</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>来源</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select style=\"width:180px\" gjs=0 sear=\"khm_customer.source\">
\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t<option value=\"转介绍\">转介绍</option>
\t\t\t\t\t\t\t<option value=\"电话咨询\">电话咨询</option>
\t\t\t\t\t\t\t<option value=\"线上注册\">线上注册</option>
\t\t\t\t\t\t\t<option value=\"客户上门\">客户上门</option>
\t\t\t\t\t\t\t<option value=\"陌生拜访\">陌生拜访</option>
\t\t\t\t\t\t\t<option value=\"公司资源\">公司资源</option>
\t\t\t\t\t\t\t<option value=\"个人资源\">个人资源</option>
\t\t\t\t\t\t\t<option value=\"广告宣传\">广告宣传</option>
\t\t\t\t\t\t\t<option value=\"电话营销\">电话营销</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>介绍人</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.introduce\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>统一社会信用代码</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.social_credit_code\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>法定代表人</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" sear=\"khm_customer.corporation\" gjs=\"0\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>法人身份证号码</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.corporation_card\">
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>注册资金</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.register_capital\" data-type=\"gj\">
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>省市区</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.area\">
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>行业</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select gjs=0 sear=\"khm_customer.industry\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t<option value=\"1\">批发零售业</option>
\t\t\t\t\t\t\t\t<option value=\"2\">制造业</option>
\t\t\t\t\t\t\t\t<option value=\"3\">租赁和商务服务业</option>
\t\t\t\t\t\t\t\t<option value=\"4\">仓储运输业</option>
\t\t\t\t\t\t\t\t<option value=\"5\">餐饮住宿业</option>
\t\t\t\t\t\t\t\t<option value=\"6\">信息软件业</option>
\t\t\t\t\t\t\t\t<option value=\"7\">金融业</option>
\t\t\t\t\t\t\t\t<option value=\"8\">房地产业</option>
\t\t\t\t\t\t\t\t<option value=\"9\">建筑业</option>
\t\t\t\t\t\t\t\t<option value=\"10\">教育</option>
\t\t\t\t\t\t\t\t<option value=\"11\">文体娱乐业</option>
\t\t\t\t\t\t\t\t<option value=\"12\">卫生和社会工作</option>
\t\t\t\t\t\t\t\t<option value=\"13\">居民服务</option>
\t\t\t\t\t\t\t\t<option value=\"14\">修理业</option>
\t\t\t\t\t\t\t\t<option value=\"15\">农林牧渔业</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>经营范围</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.range\">
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>公司规模</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<!--<input type=\"text\" gjs=0 sear=\"khm_customer.scale\">-->
\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=0 sear=\"khm_customer.scale\"   >
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t<option value=\"10人以下\">10人以下</option>
\t\t\t\t\t\t\t\t<option value=\"10-50人\">10-50人</option>
\t\t\t\t\t\t\t\t<option value=\"50-100人\">50-100人</option>
\t\t\t\t\t\t\t\t<option value=\"100-200人\">100-200人</option>
\t\t\t\t\t\t\t\t<option value=\"200人以上\">200人以上</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>成立日期</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"khm_customer.stablish_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sx-4\" style=\"clear:both;padding-top:10px;text-align:center;\">
\t\t\t\t\t\t<button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
\t                        查询
\t                    </button>
\t                    <button type=\"button\" id=\"rest\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
\t\t                       重置
\t\t                    </button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"custom_table\">
\t\t<table id=\"dynamic-table\">
\t\t\t<thead>
\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t<th>操作</th>
\t\t\t\t\t<th data-num=\"2\">客户编号</th>
\t\t\t\t\t<th data-num=\"3\">企业名称</th>
\t\t\t\t\t<th data-num=\"4\" >客户级别</th>
\t\t\t\t\t<th data-num=\"5\">来源</th>
\t\t\t\t\t<th data-num=\"6\">介绍人</th>
\t\t\t\t\t<th data-num=\"7\">统一社会信用代码</th>
\t\t\t\t\t<th data-num=\"8\">法定代表人</th>
\t\t\t\t\t<th data-num=\"9\">法人身份证号</th>
\t\t\t\t\t<th data-num=\"10\" style=\"text-align: right !important;\">注册资金(万)</th>
\t\t\t\t\t<th data-num=\"11\">成立日期</th>
\t\t\t\t\t<th data-num=\"12\">省市区</th>
\t\t\t\t\t<th data-num=\"13\">详细地址</th>
\t\t\t\t\t<th data-num=\"14\">行业</th>
\t\t\t\t\t<th data-num=\"15\">经营范围</th>
\t\t\t\t\t<th data-num=\"16\">公司规模</th>
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
\t<div class=\"row\" id=\"template\" style=\"display:none;width:678px;\">
\t\t\t<div class=\"col-sm-12\" id=\"editBox\">\t\t\t\t
\t\t\t\t<table width=\"100%\" style=\"border:1px solid #ddd;border-collapse:collapse;margin-bottom:15px;\">
\t\t\t\t<tr style=\"border-bottom:1px solid #d7d7d7;\">
\t\t\t\t\t<td colspan=\"4\" style=\"color:#116ed1\">基本信息</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">客户编号：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData0\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">客户名称：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData1\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">客户级别：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData2\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">来源：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData3\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">介绍人：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData4\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">统一社会信用代码：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData5\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">法定代表人：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData6\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">法人身份证号：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData7\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">注册资金(万)：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData8\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">成立日期：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData9\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">省市区：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData10\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">详细地址：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData11\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">行业：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData12\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">公司规模：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData14\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">联系人：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData38\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">手机：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData39\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">

\t\t\t\t\t<td style=\"text-align: right !important\">电话：</td>
\t\t\t\t\t<td colspan=\"4\"  style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData40\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t
\t\t\t\t\t<td style=\"text-align: right !important\">经营范围：</td>
\t\t\t\t\t<td colspan=\"4\"  style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData13\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">备注：</td>
\t\t\t\t\t<td colspan=\"4\"  style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData15\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"border-bottom:1px solid #d7d7d7;\">
\t\t\t\t\t<td colspan=\"4\" style=\"color:#116ed1\">税务信息</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">税务类型：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData16\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">有无基本户：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData17\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">纳税识别号：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData18\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">国税编码：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData19\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">国税密码：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData20\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">国税CA证书：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData21\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">地税编码：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData22\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">地税密码：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData23\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">地税CA证书：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData24\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<!--<td style=\"text-align: right !important\">工商编码：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData25\"></span>
\t\t\t\t\t</td>-->
\t\t\t\t</tr>
\t\t\t\t<!--<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">工商密码：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData26\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">工商CA证书：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData27\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>-->
\t\t\t\t<tr style=\"border-bottom:1px solid #d7d7d7;\">
\t\t\t\t\t<td colspan=\"4\" style=\"color:#116ed1\">系统信息</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">客户状态：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData28\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">最后修改人：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData29\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<!-- <td style=\"text-align: right !important\">转手次数：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData29\"></span>
\t\t\t\t\t</td> -->
\t\t\t\t</tr>
\t\t\t\t<!-- <tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">负责人：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData30\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">负责人所在部门：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData31\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr> -->
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">所属公海：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData32\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">失效原因：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData33\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">失效操作人：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData34\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">失效操作人所在部门：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData35\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">创建人 : </td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData36\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td style=\"text-align: right !important\">创建人所在部门：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData37\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t
\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t<!--编辑信息-->
\t\t<div class=\"row\" id=\"template1\" style=\"display:none;\">
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> 企业名称： </label>
\t\t\t\t<input class=\"required\" title_=\"name\" />
\t\t\t\t<label> 客户级别： </label>
\t\t\t\t<select style=\"width:180px;\" class=\"required\" title_=\"rank\">
\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t<option value=\"1\">A</option>
\t\t\t\t\t<option value=\"2\">B</option>
\t\t\t\t\t<option value=\"3\">C</option>
\t\t\t\t\t<option value=\"4\">D</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> 来源： </label>
\t\t\t\t<select style=\"width:180px;\" class=\"source required\" title_=\"source\">
\t\t\t\t\t<option> 请选择 </option>
\t\t\t\t\t<option>转介绍</option>
\t\t\t\t\t<option>电话咨询</option>
\t\t\t\t\t<option>线上注册</option>
\t\t\t\t\t<option>客户上门</option>
\t\t\t\t\t<option>陌生拜访</option>
\t\t\t\t\t<option>公司资源</option>
\t\t\t\t\t<option>个人资源</option>
\t\t\t\t\t<option>广告宣传</option>
\t\t\t\t\t<option>电话营销</option>
\t\t\t\t</select>
\t\t\t\t<span class=\"introducer\">
\t\t\t\t\t<label class=\"introducer required\" style=\"display:none;\"> 介绍人： </label>
\t\t\t\t<select class=\"introducer\" id=\"introducer\" style=\"width:180px;display:none;\" title_=\"introduce\" >
\t\t\t\t</select>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> 统一社会信用代码： </label>
\t\t\t\t<input title_=\"social_credit_code\" maxlength=\"18\" />
\t\t\t\t<label> 法定代表人： </label>
\t\t\t\t<input title_=\"corporation\" />
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label><i class='reqired_label'>*</i> 法人身份证号： </label>
\t\t\t\t<input title_=\"corporation_card\" msg=\"请输入正确的身份证号码\" validate=\"/\\w/g\" />
\t\t\t\t<label> 行业： </label>
\t\t\t\t<select class=\"\" style=\"width:180px;\" title_=\"industry\" >
\t\t\t\t\t<option value=\"\">---请选择---</option>
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
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t<label><i class='reqired_label'>*</i> 注册资金(万)： </label>
\t\t\t<input type=\"number\" style=\"width:180px;\" title_=\"register_capital\"  msg=\"请输入大于零的注册资金\" validate=\"morezero\"/>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 省市区：</label>
\t\t\t<span id=\"city\" title_=\"area\">
\t\t\t\t\t<select class=\"prov\"></select>
\t\t\t\t\t<select class=\"city\" disabled=\"disabled\"></select>
\t\t\t\t\t<select class=\"dist\" disabled=\"disabled\"></select>
\t\t\t</span>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> 详细地址： </label>
\t\t\t\t<input style=\"width:calc(100% - 135px);margin-left:5px;padding:5px;\" title_=\"address\" />
\t\t\t</select>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label>联系人：</label>
\t\t\t\t<input type=\"text\" style=\"width:180px;\" title_=\"contacts\"/>
\t\t\t\t<label>手机号码：</label>
\t\t\t\t<input style=\"width:180px;\" title_=\"phone\"/>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label>电话号码： </label>
\t\t\t\t<input style=\"width:180px;\" title_=\"tel\"/>
\t\t\t\t<label> 经营范围： </label>
\t\t\t\t<input title_=\"range\" />
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> 公司规模： </label>
\t\t\t\t<select style=\"width: 180px;\" title_=\"scale\" >
\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t<option value=\"10人以下\">10人以下</option>
\t\t\t\t\t<option value=\"10-50人\">10-50人</option>
\t\t\t\t\t<option value=\"50-100人\">50-100人</option>
\t\t\t\t\t<option value=\"100-200人\">100-200人</option>
\t\t\t\t\t<option value=\"200人以上\">200人以上</option>
\t\t\t\t</select>
\t\t\t\t<label> 成立日期： </label>
\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t<input class=\"date-timepicker1\" title_=\"stablish_time\" style=\"height: 30px; width:inherit;\">
\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;position:absolute;right:0;border-left:1px solid #ddd;\">
\t\t\t\t\t<i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t<input id=\"date-timepicker1\" class=\"date-timepicker1\" search=\"\" data-id=\"oppo_time\" title_=\"stablish_time\">
\t\t\t\t\t<span style=\"display: inline-block;height: 28px;background: #ddd;width: 26px;position: relative;top: -6px;right: 31px;\">
\t\t\t\t\t\t\t<i class=\"fa fa-clock-o bigger-110\" style=\"    position: relative;left: 7px;top: 5px;\"></i>
\t\t\t\t\t</span>
\t\t\t\t</div>-->
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label style=\"float:left;\"> 备注： </label>
\t\t\t\t<textarea title_=\"remark\" style=\"width:calc(100% - 131px);margin-left:5px;resize:none;padding:5px;\" class=\"in_remark\"></textarea>
\t\t\t</div>

\t\t\t<div style=\"text-align:center;margin-top:15px;\">
\t\t\t\t<span style=\"position:relative;left:65px;font-weight:bold;cursor:pointer;display: inline-block;background: #337ab7;padding: 3px 5px; color:#fff;border-radius: 5px;\" class=\"more\">填写更多</span>
\t\t\t</div>

\t\t\t<div style=\"display:none\" class=\"taxMsg\">
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 税务类型： </label>
\t\t\t\t\t<select title_=\"tax_type\" class=\"required\" style=\"width:180px;\" msg=\"请选择税务类型\">
\t\t\t\t\t\t<option> 请选择 </option>
\t\t\t\t\t\t<option value=\"1\">一般纳税人</option>
\t\t\t\t\t\t<option value=\"2\">小规模</option>
\t\t\t\t\t</select>
\t\t\t\t\t<label> 有无基本户： </label>
\t\t\t\t\t<select title_=\"basic\" class=\"required\" style=\"width:180px;\" msg=\"请选择有无基本户\">
\t\t\t\t\t\t<option> 请选择 </option>
\t\t\t\t\t\t<option value=\"1\">有</option>
\t\t\t\t\t\t<option value=\"2\">无</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> <i class='reqired_label'>*</i>纳税识别号： </label>
\t\t\t\t\t<input title_=\"ratepaying_no\" class=\"required\" msg=\"纳税识别号不能为空\" maxlength=\"20\" />
\t\t\t\t\t<label> 国税编码： </label>
\t\t\t\t\t<input title_=\"state_tax_no\" />
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label><i class='reqired_label'>*</i> 国税密码： </label>
\t\t\t\t\t<input title_=\"state_tax_pass\" class=\"required\" msg=\"国税密码不能为空\"  />
\t\t\t\t\t<label> 国税CA证书： </label>
\t\t\t\t\t<input title_=\"gca\" />
\t\t\t\t</div>
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 地税编码： </label>
\t\t\t\t\t<input title_=\"local_tax_no\" />
\t\t\t\t\t<label><i class='reqired_label'>*</i> 地税密码： </label>
\t\t\t\t\t<input title_=\"local_tax_pass\" class=\"required\" msg=\"地税密码不能为空\"   />
\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 地税CA证书： </label>
\t\t\t\t\t<input title_=\"dca\" />
\t\t\t\t\t<!--<label> 工商编码： </label>
\t\t\t\t\t<input title_=\"industry_no\" />-->
\t\t\t\t</div>
\t\t\t\t<!--<div style=\"margin-top:15px;\">
\t\t\t\t\t<label><i class='reqired_label'>*</i> 工商密码： </label>
\t\t\t\t\t<input title_=\"industry_pass\"  class=\"required\" msg=\"请输入正确的工商密码\"/>
\t\t\t\t\t<label> 工商CA证书： </label>
\t\t\t\t\t<input title_=\"ica\" />
\t\t\t\t</div>-->
\t\t\t</div>
\t\t\t<div style=\"text-align:center;margin-top:15px;\">
\t\t\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>

\t\t\t\t<button class=\"sure_button add\">
                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                        保存
                    </button>
\t\t\t</div>
\t\t</div>
\t";
        // line 675
        $this->loadTemplate("admin/mark.html", "admin/clientManage/partner.html", 675)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/clientManage/partner.html", 675)->display($context);
        // line 676
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/assets/js/src/jquery.cityselect.js\"></script>
<script type=\"text/javascript\">
\t\$(function() {
\t\tvar pagesize = 10;
\t\tvar filter = '';
\t\tvar employees = [];
\t\tvar employees_2 = [];
\t\tvar order ='khm_customer.id desc ';
/*
\t\t//导出功能
        cs.exportFile({
            url:\"/api/api_customer/export\",
            title:\"合作客户\"
        });*/


\t\t\$('#changePageNum').change(function() {
\t\t\tpagesize = \$(this).val();
\t\t\tgetList(1);
\t\t})
\t\tdoSearch();\t\t\t
\t\t//来自详情页面的跳转
\t\tfromDetail();
\t\tfunction fromDetail(){
\t\t\tif (ykp.getCookie('data-id')!=undefined&&ykp.getCookie('data-id')!='') {
\t\t\t\tvar id = ykp.getCookie('data-id');
\t\t\t\tvar filter = 'khm_customer.id='+id;
\t\t\t\tgetList(1,filter);
\t\t\t\tykp.setCookie('data-id','');
\t\t\t}else{
\t\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\t\tykp.setCookie(\"where\", \"\");
\t\t\t\tgetList(1);
\t\t\t}
\t\t}
\t\tcs.dataRang();
\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_customer/customer',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter:filter,
\t\t\t\tlimit: pagesize,
\t\t\t\ttype:2
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '#pageBar'
\t\t\t},
\t\t\tinitOrder:'khm_customer.id',
\t\t\tdefaultOrder: order,
\t\t\tcontentId: \"#dataList\",
\t\t\tparams:[{
\t\t\t\tid: \"#dynamic-table\",
\t\t\t\tfield:[\"\",\"khm_customer.id\",\"khm_customer.name\",\"khm_customer.rank\",\"khm_customer.source\",\"khm_customer.introduce\",\"khm_customer.social_credit_code\",\"khm_customer.corporation\",\"khm_customer.corporation_card\",\"khm_customer.register_capital\",\"khm_customer.stablish_time\",\"khm_customer.area\",\"khm_customer.register_address\",
\t\t\t\t\t\"khm_customer.industry\",\"khm_customer.range\",\"khm_customer.scale\",
\t\t\t\t]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});

\t\t //获取所有员工
        ykp.doAjax({
            url:'/api/api_employees/f7',
            method:'post',
            data:{
                select:'bmm_employees.id,bmm_employees.name,bmm_employees.department'
            },
            success:function(res) {
                var data = res.data; 
                for(var i in data) {
                    employees[data[i]['id']] = data[i]['name'];
                    employees_2[data[i]['id']] = data[i]['department'];
                }
            }
        });
\t\tfunction doSearch() {
\t\t\tvar data = {
\t\t\t\t\turl: '/api/api_customer/customer',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\ttype:2,
\t\t\t\t\t\tlimit:pagesize,
\t\t\t\t\t\torder: order
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tcs.doSearch('#search', data, 'filter', false, function(res,_filter) {
\t\t\t\t\tfilter = _filter;
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t} else {
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}
\t\t\t\t})
\t\t}

\t\t//cs.showHeightSearch('#heightsearch','#heightsearch1');

\t\tadvancedSearch();
\t\t//高级搜索
\t\t
\t\tfunction advancedSearch(){
\t\t\tvar data = {
\t\t\t\turl: '/api/api_customer/customer',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\ttype: 2,
\t\t\t\t\tlimit: pagesize,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}\t
\t\t\tcs.hSearch('#search1', data, 'filter', false, function(res, _filter) {
\t\t\t\tfilter = _filter;
\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\$(\"#heightsearch\").removeClass('active').css('z-index', '');
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t} else {
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t})
\t\t}

\t\tcs.showHeightSearch('#heightsearch','#heightsearch1');

\t\t/*\$('.in').click(function() {
\t\t\tif(\$('#heightsearch').hasClass('active')) {
\t\t\t\t\$('#heightsearch').removeClass('active').css('z-index', '');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t}
\t\t});
s

\t\t\$('#heightsearch').click(function() {
\t\t\tif(\$(this).hasClass('active')) {
\t\t\t\t\$(this).removeClass('active');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t} else {
\t\t\t\t\$(\"#heightsearch1\").slideDown();
\t\t\t\t\$(this).attr('class', 'btn btn-info btn-sm active');
\t\t\t\tcs.rest(false, '#heightsearch1');
\t\t\t}
\t\t})
*/

\t\t\$('#flush').click(function(){
\t\t\tfilter = '';
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetList();
\t\t})

\t\t//getList(1);

\t\tfunction getList(curpage,filter) {
\t\t\tif (filter == undefined) {
\t\t\t\tfilter = '';
\t\t\t}
\t\t\tykp.list({
\t\t\t\turl: '/api/api_customer/customer',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\ttype: 2,
\t\t\t\t\tlimit: pagesize,
\t\t\t\t\torder: order,
\t\t\t\t\tfilter:filter
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t});
\t\t}
\t\t
\t\tfunction addList(res) {
\t\t\tvar data = res.data.items;
\t\t\tvar html = \"\";
\t\t\tvar html = '';
\t\t\tvar ths = \$('.thColor th');
\t\t\tvar styles = [];

\t\t\tfor(var i = 0;i < ths.length;i++){
\t\t\t\tstyles.push(ths.eq(i).css('display'));
\t\t\t}
\t\t\tvar rank =''

\t\t\t//经营范围
\t\t\tvar pd_data;
\t\t\t//经营范围title
\t\t\tvar range_title = [];
\t\t\t//遍历次数
\t\t\tvar times;
\t\t\tvar industry = ['','批发零售业','制造业','租赁和商务服务业','仓储运输业','餐饮住宿业','信息软件业','金融业','房地产业','建筑业','教育','文体娱乐业','卫生和社会工作','居民服务','修理业','农林牧渔业'];

\t\t\tfor(var i in data) {
                switch(data[i]['khm_customer.rank']){
\t\t\t\t\tcase '1':
\t\t\t\t\t\trank='A';
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '2':
\t\t\t\t\t\trank='B';
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '3':
\t\t\t\t\t\trank='C';
                        break;
\t\t\t\t\tcase '4':
\t\t\t\t\t\trank='D'
\t\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\t//获取经营范围title
\t\t\t\tpd_data =  data[i]['khm_customer.range'];
\t\t\t\ttimes = Math.ceil(pd_data.length / 20);
\t\t\t\tfor(var j = 0; j < times ; j++) {
\t\t\t\t\trange_title.push(pd_data.slice(20*j,(j + 1) * 20));
\t\t\t\t}
\t\t\t\t
\t\t\t\thtml += `
\t\t\t\t\t<tr data-id=\"\${data[i]['khm_customer.id']}\">
\t\t\t\t\t\t<td  style=\"\">
\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t\t<a> <span style=\"cursor: pointer\" id=\"\" title=\"详情\" class=\"lbl btOrange sdetail\"><i class=\"fa fa-info\"></i></span></a>
                                 <a contentAuthority=\"109\"> <span style=\"cursor: pointer\" title=\"编辑\" id=\"recordEdit\" class=\"recordEdit lbl btBlue\"><i class=\"fa fa-pencil-square-o\"></i></span></a>
                             </label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td data-num=\"2\" style=\"display: \${styles[1]}\">\${data[i]['khm_customer.customer_num']}</td>
\t\t\t\t\t\t<td data-cid=\"\${data[i]['khm_customer.id']}\" data-num=\"3\" style=\"display: \${styles[2]}\"><a href=\"#\" class=\"customerDetail pos-rel\">\${data[i]['khm_customer.name']}</a>
\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t \t\t\t\t<i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data[i]['Remark'].length > 0 ? 'red' : ''}\"  data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i>
\t\t\t \t\t\t\t </label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td data-num=\"4\" style=\"display: \${styles[3]}\">
\t\t\t\t\t\t\t\${rank}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td data-num=\"5\" style=\"display: \${styles[4]}\">\${data[i]['khm_customer.source']}</td>
\t\t\t\t\t\t<td data-num=\"6\" style=\"display: \${styles[5]}\">\${data[i]['khm_customer.introduce']}</td>
\t\t\t\t\t\t<td data-num=\"7\" style=\"display: \${styles[6]}\">\${data[i]['khm_customer.social_credit_code']}</td>
\t\t\t\t\t\t<td data-num=\"8\" style=\"display: \${styles[7]}\">\${data[i]['khm_customer.corporation']}</td>
\t\t\t\t\t\t<td data-num=\"9\" style=\"display: \${styles[8]}\">\${data[i]['khm_customer.corporation_card']}</td>
\t\t\t\t\t\t<td data-num=\"10\" style=\"display: \${styles[9]};text-align: right !important; \">\${data[i]['khm_customer.register_capital']}</td>
\t\t\t\t\t\t<td data-num=\"11\" style=\"display: \${styles[10]}\">\${cs.getNowTime(data[i]['khm_customer.stablish_time'])}</td>
\t\t\t\t\t\t<td data-num=\"12\" style=\"display: \${styles[11]}\">\${data[i]['khm_customer.area']}</td>
\t\t\t\t\t\t<td data-num=\"13\" style=\"display: \${styles[12]}\">\${data[i]['khm_customer.address']}</td>
\t\t\t\t\t\t<td data-num=\"14\" style=\"display: \${styles[13]}\">\${industry[data[i]['khm_customer.industry']] || \"\"}</td>
\t\t\t\t\t\t<td data-num=\"15\" style=\"display: \${styles[14]}\" title=\"\${range_title.join('&#13;')}\">
\t\t\t\t\t\t\t<label style=\"width:100px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;\" >
\t\t\t\t \t\t\t\t\${data[i]['khm_customer.range']}
\t\t\t \t\t\t\t</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td data-num=\"16\" style=\"display: \${styles[15]}\">\${data[i]['khm_customer.scale']}</td>
\t\t\t\t\t</tr>
\t\t\t\t`;

\t\t\t\t//清空数组
\t\t \t\trange_title = [];
\t\t\t}
\t\t\t\$('#datalist').html(html);
\t\t\t
\t\t\tcs.getNodes([109]);
\t\t\t//编辑
\t\t\teditRecord();
\t\t\t\t//详情
\t\t\tdispDetail();
\t\t\tcustom.showReamrk();
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\tcustom.get_custom_info();
\t\t}
\t\t
\t\t//编辑客户
\t\t\tfunction editRecord() {
\t\t\t\t\$('#dynamic-table tbody #recordEdit').click(function() {
\t\t\t\t\tshowMark('#template1');
\t\t\t\t\t\$('#showBox .title').text('编辑客户');
\t\t\t\t\tvar data_id = \$(this).parents('tr').attr('data-id');
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_customer/info',
\t\t\t\t\t\tmethods: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tfilter: 'khm_customer.id = ' + data_id
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess:function(res) {
\t\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\tvar area = data['khm_customer.area'];
\t\t\t\t\t\tif(area) {
\t\t\t\t\t\t\tarea = area.split(',');
\t\t\t\t\t\t\t\$(\"#templateCon #city\").citySelect({
\t\t\t\t\t\t\t\turl: \"/resource/adimin/assets/js/src/city.min.js\",
\t\t\t\t\t\t\t\tprov: area[0], //省份  
\t\t\t\t\t\t\t\tcity: area[1] ? area[1] : '', //城市  
\t\t\t\t\t\t\t\tdist: area[2] ? area[2] : '', //区县  
\t\t\t\t\t\t\t\tnodata: \"none\" //当子集无数据时，隐藏select  
\t\t\t\t\t\t\t});
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(\"#templateCon #city\").citySelect({
\t\t\t\t\t\t\t\turl: \"/resource/adimin/assets/js/src/city.min.js\",
\t\t\t\t\t\t\t\tprov: '北京', //省份 
\t\t\t\t\t\t\t\tcity: '东城区',
\t\t\t\t\t\t\t\tnodata: \"none\" //当子集无数据时，隐藏select  
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
                            console.log(data);
                            for(let v in data) {
                                \$('#templateCon').find('input,select,textarea').each(function (i,e) {
                                    if(\$(this).attr(\"title_\") == \"introduce\" && v.replace(/khm_customer\\./g,'') == \"introduce\"){
                                        let intro = data[v];
                                        let it = \$(this);
\t\t\t\t\t\t\t\t\t\tsetTimeout(function () {
                                            it.val(intro).change();
                                        },1000)

                                    }else if(\$(this).attr(\"title_\") == v.replace(/khm_customer\\./g,'') ){
                                        if(\$(this).attr(\"title_\") ==\"stablish_time\"){
                                            \$(this).val(cs.getNowTime(data[v]))
                                        }else {
                                            \$(this).val(data[v])
\t\t\t\t\t\t\t\t\t\t}
                                    }

                                })
                            }


\t\t\t\t\t\tvar inputOrSelectOrTextarea = \$('#templateCon').find('input,select,textarea');
\t\t\t\t\t\t/*inputOrSelectOrTextarea.eq(0).val(data['khm_customer.name']);
\t\t\t\t\t\tif(data['khm_customer.rank']){
\t\t\t\t\t\t\tinputOrSelectOrTextarea[1][data['khm_customer.rank']].selected = true;
\t\t\t\t\t\t}
\t\t\t\t\t\tinputOrSelectOrTextarea.eq(2).val(data['khm_customer.source']);
\t\t\t\t\t\tinputOrSelectOrTextarea.eq(3).val(data['khm_customer.introduce']);
\t\t\t\t\t\tinputOrSelectOrTextarea.eq(4).val(data['khm_customer.social_credit_code']);
\t\t\t\t\t\tinputOrSelectOrTextarea.eq(5).val(data['khm_customer.corporation']);
\t\t\t\t\t\tinputOrSelectOrTextarea.eq(6).val(data['khm_customer.corporation_card']);
\t\t\t\t\t\tinputOrSelectOrTextarea.eq(7).val(data['khm_customer.register_capital']);
\t\t\t\t\t\tinputOrSelectOrTextarea.eq(8).val(data['khm_customer.address']);
\t\t\t\t\t\tinputOrSelectOrTextarea.eq(9).val(data['khm_customer.industry']);
\t\t\t\t\t\tinputOrSelectOrTextarea.eq(10).val(data['khm_customer.range']);
\t\t\t\t\t\tinputOrSelectOrTextarea.eq(11).val(data['khm_customer.scale']);
\t\t\t\t\t\t//console.log(cs.getNowTime(data['khm_customer.stablish_time']));
\t\t\t\t\t\tinputOrSelectOrTextarea.eq(12).val(cs.getNowTime(data['khm_customer.stablish_time']));
\t\t\t\t\t\tinputOrSelectOrTextarea.eq(16).val(data['khm_customer.remark']);
\t\t\t\t\t\tif(data['khm_customer.tax_type']){
\t\t\t\t\t\t\tinputOrSelectOrTextarea[17][data['khm_customer.tax_type']].selected = true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(data['khm_customer.basic']){
\t\t\t\t\t\t\tinputOrSelectOrTextarea[18][data['khm_customer.basic']].selected = true;
\t\t\t\t\t\t}
\t\t\t\t\t\tinputOrSelectOrTextarea.eq(19).val(data['khm_customer.ratepaying_no']);
\t\t\t\t\t\tinputOrSelectOrTextarea.eq(20).val(data['khm_customer.state_tax_no']);
\t\t\t\t\t\tinputOrSelectOrTextarea.eq(21).val(data['khm_customer.state_tax_pass']);
\t\t\t\t\t\tinputOrSelectOrTextarea.eq(22).val(data['khm_customer.gca']);
\t\t\t\t\t\tinputOrSelectOrTextarea.eq(23).val(data['khm_customer.local_tax_no']);
\t\t\t\t\t\tinputOrSelectOrTextarea.eq(24).val(data['khm_customer.local_tax_pass']);
\t\t\t\t\t\tinputOrSelectOrTextarea.eq(25).val(data['khm_customer.dca']);*/

\t\t\t\t\t\tshowIntroducer();
\t\t\t\t\t\t}
\t\t\t\t\t})


\t\t\t\t\tshowTaxMsg();

\t\t\t\t\t//保存事件
\t\t\t\t\t\$('#templateCon .add').click(function() {
\t\t\t\t\t\tvar postData = {
\t\t\t\t\t\t\tid: data_id
\t\t\t\t\t\t};
\t\t\t\t\t\t\$('#templateCon').find('input,select,textarea').not(':hidden,.prov,.city,.dist').each(function(i, e) {
\t\t\t\t\t\t\tpostData[\$(this).attr('title_')] = \$(this).val();
\t\t\t\t\t\t});
\t\t\t\t\t\tvar prov = \$('#templateCon .prov').val();
\t\t\t\t\t\tvar city = \$('#templateCon .city').val();
\t\t\t\t\t\t//console.log(city ? city : '');
\t\t\t\t\t\tvar dist = \$('#templateCon .dist').val();
\t\t\t\t\t\tpostData.area = (prov ? prov : '') + (city ? ',' + city : '') + (dist ? ',' + dist : '');
\t\t\t\t\t\tpostData.stablish_time = postData.stablish_time ?new Date(postData.stablish_time.replace(/[年月日]/g, '-')) / 1000 :'';
\t\t\t\t\t\tvar result = ykp.getFormData('#templateCon', true);
\t\t\t\t\t\tif(result.status){
\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_customer/edit',
\t\t\t\t\t\t\tmethods: 'post',
\t\t\t\t\t\t\tdata: postData,
\t\t\t\t\t\t\tsuccess:function(res) {
\t\t\t\t\t\t\t\t//关闭弹出层
\t\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\$('.ui-pagination-container').remove();
\t\t\t\t\t\t\t\tgetList(1);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t})

\t\t\t\t\t\$('#showBox #photooptions li').eq(0).siblings().hide();

\t\t\t\t\t//弹出层 客户证件上传
\t\t\t\t\t\$('#showBox #imgChosen').change(function() {
\t\t\t\t\t\tvar file = this.files[0];
\t\t\t\t\t\tvar fr = new FileReader();
\t\t\t\t\t\tfr.readAsDataURL(file);
\t\t\t\t\t\tfr.onloadend = function(e) {
\t\t\t\t\t\t\t\$('#showBox #idphoto').attr('src', e.target.result);
\t\t\t\t\t\t\t\$('#showBox #photooptions li').eq(0).siblings().show();
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\t//弹出层 成立日期
\t\t\t\t\tcs.timeplug()
\t\t\t\t})
\t\t\t}
\t\t\t
\t\t\tvar department = [];
\t\t\t//获取所有部门
\t\t    ykp.doAjax({
\t\t        url:'/api/api_department/f7',
\t\t        method:'post',
\t\t        anysc:false,
\t\t        data:{
\t\t            select:'bmm_department.id,bmm_department.name,bmm_department.cid',
\t\t            limit:999
\t\t        },
\t\t        success:function(res) {
\t\t            var data = res.data;
\t\t            if (data != '') {
\t\t            \tdepartment = data;
\t\t            }
\t\t        }
\t\t    });


\t\t\tfunction dispDetail() {
\t\t\t\t\$('#dynamic-table tbody .sdetail').click(function() {
\t\t\t\t\tshowMark('#template');
\t\t\t\t\t\$('#showBox .title').text('客户详情');
\t\t\t\t\tvar cid = \$(this).parents('tr').attr('data-id');
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_customer/info',
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tasync:false,
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter: 'khm_customer.id = ' + cid
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\tvar srank = [\"\",'A', 'B', 'C', 'D'];
\t\t\t\t\t\tvar status = ['未合作','合作中','已解决'];
\t\t\t\t\t\tvar reason = ['无进行中的合同','合同已解约'];
\t\t\t\t\t\tvar department_c = [];
\t\t\t\t\t\tvar industry = ['','批发零售业','制造业','租赁和商务服务业','仓储运输业','餐饮住宿业','信息软件业','金融业','房地产业','建筑业','教育','文体娱乐业','卫生和社会工作','居民服务','修理业','农林牧渔业'];
\t\t\t\t\t\tvar lastdetail = {};
\t\t\t\t\t\t\tfor(var i in department){
\t\t\t\t\t\t\tif (department[i]['cid']==cid) {
\t\t\t\t\t\t\t\tdepartment_c.push(department[i]);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t        url:'/api/api_customer/get_last',
\t\t\t\t\t        method:'post',
\t\t\t\t\t        async:false,
\t\t\t\t\t        data:{
\t\t\t\t\t        \tcustomer_id:cid,
\t\t\t\t\t            limit:999
\t\t\t\t\t        },
\t\t\t\t\t        success:function(res) {
\t\t\t\t\t        \tlastdetail = res.data;
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData0\").html(data['khm_customer.customer_num']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData1\").html(data['khm_customer.name']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData2\").html(srank[data['khm_customer.rank']]);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData3\").html(data['khm_customer.source']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData4\").html(data['khm_customer.introduce']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData5\").html(data['khm_customer.social_credit_code']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData6\").html(data['khm_customer.corporation']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData7\").html(data['khm_customer.corporation_card']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData8\").html(parseInt(data['khm_customer.register_capital']).toFixed(2));
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData9\").html(cs.getNowTime(data['khm_customer.stablish_time']));
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData10\").html(data['khm_customer.area']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData11\").html(data['khm_customer.address']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData12\").html(industry[data['khm_customer.industry']] || \"\");
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData13\").html(data['khm_customer.range']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData14\").html(data['khm_customer.scale']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData15\").html(data['khm_customer.remark']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData16\").html(data['khm_customer.tax_type'] == 2 ? \"小规模\" :\"一般纳税人\" );
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData17\").html(data['khm_customer.basic'] == 1 ? \"有\" : \"无\");
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData18\").html(data['khm_customer.ratepaying_no']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData19\").html(data['khm_customer.state_tax_no']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData20\").html(data['khm_customer.state_tax_pass']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData21\").html(data['khm_customer.gca']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData22\").html(data['khm_customer.local_tax_no']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData23\").html(data['khm_customer.local_tax_pass']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData24\").html(data['khm_customer.dca']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData25\").html(data['khm_customer.industry_no']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData26\").html(data['khm_customer.industry_pass']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData27\").html(data['khm_customer.ica']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData28\").html(status[data['khm_customer.status']]);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData29\").html(employees[lastdetail.contract['update_by']]);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData32\").html(customer_type[data['khm_customer.type']]);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData33\").html(lastdetail.contract['status']>=3?reason[lastdetail.contract.status-3]:'----');
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData34\").html(lastdetail.contract['userInfo']==''?'----':lastdetail.contract['userInfo'] ?lastdetail.contract['userInfo']['name']:'----');
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData35\").html(lastdetail.contract['userInfo']==''?'----':lastdetail.contract['userInfo']?lastdetail.contract['userInfo']['dep_name']:'----');
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData36\").html(employees[data['khm_customer.create_id']]);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData37\").html(department[parseInt(employees_2[data['khm_customer.create_id']])-1]?department[parseInt(employees_2[data['khm_customer.create_id']])-1]['name']:'----');
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData38\").html(data['khm_customer.contacts']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData39\").html(data['khm_customer.phone']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData40\").html(data['khm_customer.tel']);
                                \$(\"#temHeader\").width(\$(\"#showBox\").width()-47);

\t\t\t\t\t        }
\t\t\t\t\t    });
\t\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t})

\t\t\t}
\t\t\t
\t\t\tvar customer_type = [];
\t\t
\t\t    //获取所有公海类型
\t\t    ykp.doAjax({
\t\t        url:'/api/api_customer_type/f7',
\t\t        method:'post',
\t\t        anysc:false,
\t\t        data:{
\t\t            select:'khm_customer_type.id,khm_customer_type.name'
\t\t        },
\t\t        success:function(res){
\t\t            var data = res.data;
\t\t            customer_type[0] = '无';
\t\t            for(var i in data){
\t\t            \tcustomer_type[parseInt(i)+1] =data[i]['name'];
\t\t            }\t               
\t\t        }
\t\t    });


\t\t\tfunction showTaxMsg() {
\t\t\t\t\$('#templateCon .more').click(function() {
\t\t\t\t\tif(\$(this).hasClass('retract')) {
\t\t\t\t\t\t\$('#templateCon .taxMsg').hide();
\t\t\t\t\t\t\$(this).text('填写更多').removeClass('retract');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\t\$(this).text('取消填写').addClass('retract');
\t\t\t\t\t\$('#templateCon .taxMsg').show();
\t\t\t\t});
\t\t\t}
\t\t\t
\t\t\t//选择弹出层来源中转介绍时，显示介绍人，
\t\t\t//选择其他时，隐藏介绍人
\t\t\tfunction showIntroducer() {
\t\t\t\tvar html = [];
\t\t\t\tif(\$('#templateCon .source option:selected').index() == 1) {
\t\t\t\t\t\$('#templateCon .introducer').show();
\t\t\t\t}
                if(\$('#templateCon .source').val() == '转介绍') {
                    transferto();
                }
\t\t\t\t\$('#templateCon .source').change(function() {
\t\t\t\t\t//console.log(1);
\t\t\t\t\tif(this.selectedIndex == 1) {
                        transferto();
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#templateCon .introducer').hide();
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tfunction transferto() {
                    \$('#templateCon .introducer').show();
                    if(html.length == 0){
                        ykp.doAjax({
                            url:\"/api/api_contact_book/grid\",
                            method:\"post\",
                            data:{
                                select:'distinct(khm_contact_book.username) as \"khm_contact_book.username\"',
                                limit:999
                            },
                            success:function(res){
                                var data = res.data.items;

                                html.push('<option  value=\"\">请选择</option>');
                                for(var i in data){
                                    html.push('<option  value=\"'+data[i]['khm_contact_book.username']+'\">'+data[i]['khm_contact_book.username']+'</option>');
                                }
                                \$('#templateBox #introducer').html(html.join(','));
                                //月份
                                \$('#templateCon #introducer').select2({
                                    allowClear: true
                                });
                            }
                        })
                    }
                }
\t\t\t}

\t\t//自定义table
\t\tcs.custorm_check('#dynamic-table', '#datalist', false);

\t\t//分页
\t\tcs.setPagination('#pagination', 5, 50, 5, getPageList);

\t\tfunction getPageList(current) {
\t\t\t//console.log(current);
\t\t}

\t\t\$('.add').click(function() {
\t\t\tshowMark('.popup_new');
\t\t});
\t\t
\t\tfunction editOrDetail(){
\t\t\t\$('#recordEdit').click(function(){
\t\t\t\tshowMark('.popup_new');
\t\t\t});
\t\t\t\$('.sdetail').click(function(){
\t\t\t\tshowMark('.popup_new');
\t\t\t});
\t\t}
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/clientManage/partner.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  699 => 676,  695 => 675,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	.item_form label {*/
/* 		width: 112px;*/
/* 	}*/
/* 	#editBox table tr td,#editBox table{*/
/* 		text-align: left;*/
/* 		border:none !important;*/
/* 	}*/
/* 	#editBox table tr td{*/
/* 		height: 35px;*/
/* 	}*/
/* 	#templateBox input{height:30px;width:180px;padding-left:5px;}	*/
/* </style>*/
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<!-- <h3 class="header smaller lighter blue">合作客户</h3> -->*/
/* 		<div class="actions" id="topTool">*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<div class="search">*/
/* 					<i class="search-icon"></i>*/
/* 					<input type="text" pts="0" sear="khm_customer.name" class="search-input" placeholder="企业名称">*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<div class="search">*/
/* 					<i class="search-icon"></i>*/
/* 					<input type="text" pts="0" sear="khm_customer.customer_num" class="search-input" placeholder="客户编码">*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<button type="button" id="search" title="搜索" class="btn btn-info btn-sm">*/
/* 	                <i class="fa fa-search"></i>*/
/* 	            </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;  margin-right: 5px; ">*/
/* 				<button id="heightsearch" title="高级搜索" type="button" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/*                     <i class="fa fa-filter"></i>*/
/*                 </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/*                     <i class="fa fa-refresh"></i>*/
/*                 </button>*/
/* 			</div>*/
/* */
/* <!--*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<button type="button"  title="导出" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="exportfile moveToClue btn addBtn btn-info btn-sm position-relative">*/
/* 					<i class="fa fa-sign-out"></i>*/
/* 				</button>*/
/* 			</div>-->*/
/* */
/* 			<!--高级搜索-->	*/
/* 							*/
/* 			<div id="heightsearch1" class="col-sx-12" style="position: absolute; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;margin-top: 30px;">*/
/* 				<div class="row">*/
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
/* 						<input type="text" gjs=0 sear="khm_customer.customer_num" />*/
/* 					</div>*/
/* */
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>客户级别</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select style="width:180px" gjs=0 sear="khm_customer.rank">*/
/* 							<option value=""> 请选择 </option>*/
/* 							<option value="1">A</option>*/
/* 							<option value="2">B</option>*/
/* 							<option value="3">C</option>*/
/* 							<option value="4">D</option>*/
/* 						</select>*/
/* 					</div>*/
/* 						*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>来源</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select style="width:180px" gjs=0 sear="khm_customer.source">*/
/* 							<option value=""> 请选择 </option>*/
/* 							<option value="转介绍">转介绍</option>*/
/* 							<option value="电话咨询">电话咨询</option>*/
/* 							<option value="线上注册">线上注册</option>*/
/* 							<option value="客户上门">客户上门</option>*/
/* 							<option value="陌生拜访">陌生拜访</option>*/
/* 							<option value="公司资源">公司资源</option>*/
/* 							<option value="个人资源">个人资源</option>*/
/* 							<option value="广告宣传">广告宣传</option>*/
/* 							<option value="电话营销">电话营销</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>介绍人</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<input type="text" gjs=0 sear="khm_customer.introduce">*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>统一社会信用代码</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<input type="text" gjs=0 sear="khm_customer.social_credit_code">*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>法定代表人</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" sear="khm_customer.corporation" gjs="0" />*/
/* 						</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>法人身份证号码</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.corporation_card">*/
/* 						</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>注册资金</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> &lt; </option>*/
/* 								<option> > </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.register_capital" data-type="gj">*/
/* 						</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>省市区</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.area">*/
/* 						</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>行业</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select gjs=0 sear="khm_customer.industry" data-type="gj" style="width:180px;">*/
/* 								<option value="">请选择</option>*/
/* 								<option value="1">批发零售业</option>*/
/* 								<option value="2">制造业</option>*/
/* 								<option value="3">租赁和商务服务业</option>*/
/* 								<option value="4">仓储运输业</option>*/
/* 								<option value="5">餐饮住宿业</option>*/
/* 								<option value="6">信息软件业</option>*/
/* 								<option value="7">金融业</option>*/
/* 								<option value="8">房地产业</option>*/
/* 								<option value="9">建筑业</option>*/
/* 								<option value="10">教育</option>*/
/* 								<option value="11">文体娱乐业</option>*/
/* 								<option value="12">卫生和社会工作</option>*/
/* 								<option value="13">居民服务</option>*/
/* 								<option value="14">修理业</option>*/
/* 								<option value="15">农林牧渔业</option>*/
/* 							</select>*/
/* 						</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>经营范围</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.range">*/
/* 						</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>公司规模</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<!--<input type="text" gjs=0 sear="khm_customer.scale">-->*/
/* 							<select style="width: 180px" gjs=0 sear="khm_customer.scale"   >*/
/* 								<option value="">请选择</option>*/
/* 								<option value="10人以下">10人以下</option>*/
/* 								<option value="10-50人">10-50人</option>*/
/* 								<option value="50-100人">50-100人</option>*/
/* 								<option value="100-200人">100-200人</option>*/
/* 								<option value="200人以上">200人以上</option>*/
/* 							</select>*/
/* 						</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>成立日期</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> &lt; </option>*/
/* 								<option> > </option>*/
/* 							</select>*/
/* 							*/
/* 							<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 								<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 								<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="khm_customer.stablish_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* 					*/
/* 					<div class="col-sx-4" style="clear:both;padding-top:10px;text-align:center;">*/
/* 						<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/* 	                        查询*/
/* 	                    </button>*/
/* 	                    <button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 		                       重置*/
/* 		                    </button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="custom_table">*/
/* 		<table id="dynamic-table">*/
/* 			<thead>*/
/* 				<tr class="thColor">*/
/* 					<th>操作</th>*/
/* 					<th data-num="2">客户编号</th>*/
/* 					<th data-num="3">企业名称</th>*/
/* 					<th data-num="4" >客户级别</th>*/
/* 					<th data-num="5">来源</th>*/
/* 					<th data-num="6">介绍人</th>*/
/* 					<th data-num="7">统一社会信用代码</th>*/
/* 					<th data-num="8">法定代表人</th>*/
/* 					<th data-num="9">法人身份证号</th>*/
/* 					<th data-num="10" style="text-align: right !important;">注册资金(万)</th>*/
/* 					<th data-num="11">成立日期</th>*/
/* 					<th data-num="12">省市区</th>*/
/* 					<th data-num="13">详细地址</th>*/
/* 					<th data-num="14">行业</th>*/
/* 					<th data-num="15">经营范围</th>*/
/* 					<th data-num="16">公司规模</th>*/
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
/* 	<div class="row" id="template" style="display:none;width:678px;">*/
/* 			<div class="col-sm-12" id="editBox">				*/
/* 				<table width="100%" style="border:1px solid #ddd;border-collapse:collapse;margin-bottom:15px;">*/
/* 				<tr style="border-bottom:1px solid #d7d7d7;">*/
/* 					<td colspan="4" style="color:#116ed1">基本信息</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">客户编号：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData0"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">客户名称：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData1"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">客户级别：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData2"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">来源：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData3"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">介绍人：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData4"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">统一社会信用代码：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData5"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">法定代表人：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData6"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">法人身份证号：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData7"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">注册资金(万)：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData8"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">成立日期：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData9"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">省市区：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData10"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">详细地址：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData11"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">行业：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData12"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">公司规模：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData14"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">联系人：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData38"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">手机：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData39"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* */
/* 					<td style="text-align: right !important">电话：</td>*/
/* 					<td colspan="4"  style="text-align: left !important">*/
/* 						<span class="disData40"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					*/
/* 					<td style="text-align: right !important">经营范围：</td>*/
/* 					<td colspan="4"  style="text-align: left !important">*/
/* 						<span class="disData13"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">备注：</td>*/
/* 					<td colspan="4"  style="text-align: left !important">*/
/* 						<span class="disData15"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="border-bottom:1px solid #d7d7d7;">*/
/* 					<td colspan="4" style="color:#116ed1">税务信息</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">税务类型：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData16"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">有无基本户：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData17"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">纳税识别号：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData18"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">国税编码：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData19"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">国税密码：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData20"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">国税CA证书：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData21"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">地税编码：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData22"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">地税密码：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData23"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">地税CA证书：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData24"></span>*/
/* 					</td>*/
/* 					<!--<td style="text-align: right !important">工商编码：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData25"></span>*/
/* 					</td>-->*/
/* 				</tr>*/
/* 				<!--<tr style="">*/
/* 					<td style="text-align: right !important">工商密码：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData26"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">工商CA证书：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData27"></span>*/
/* 					</td>*/
/* 				</tr>-->*/
/* 				<tr style="border-bottom:1px solid #d7d7d7;">*/
/* 					<td colspan="4" style="color:#116ed1">系统信息</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">客户状态：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData28"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">最后修改人：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData29"></span>*/
/* 					</td>*/
/* 					<!-- <td style="text-align: right !important">转手次数：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData29"></span>*/
/* 					</td> -->*/
/* 				</tr>*/
/* 				<!-- <tr style="">*/
/* 					<td style="text-align: right !important">负责人：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData30"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">负责人所在部门：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData31"></span>*/
/* 					</td>*/
/* 				</tr> -->*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">所属公海：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData32"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">失效原因：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData33"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">失效操作人：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData34"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">失效操作人所在部门：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData35"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">创建人 : </td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData36"></span>*/
/* 					</td>*/
/* 					*/
/* 					<td style="text-align: right !important">创建人所在部门：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData37"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				*/
/* 			</table>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!--编辑信息-->*/
/* 		<div class="row" id="template1" style="display:none;">*/
/* 			<div style="margin-top:15px;">*/
/* 				<label> 企业名称： </label>*/
/* 				<input class="required" title_="name" />*/
/* 				<label> 客户级别： </label>*/
/* 				<select style="width:180px;" class="required" title_="rank">*/
/* 					<option value=""> 请选择 </option>*/
/* 					<option value="1">A</option>*/
/* 					<option value="2">B</option>*/
/* 					<option value="3">C</option>*/
/* 					<option value="4">D</option>*/
/* 				</select>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label> 来源： </label>*/
/* 				<select style="width:180px;" class="source required" title_="source">*/
/* 					<option> 请选择 </option>*/
/* 					<option>转介绍</option>*/
/* 					<option>电话咨询</option>*/
/* 					<option>线上注册</option>*/
/* 					<option>客户上门</option>*/
/* 					<option>陌生拜访</option>*/
/* 					<option>公司资源</option>*/
/* 					<option>个人资源</option>*/
/* 					<option>广告宣传</option>*/
/* 					<option>电话营销</option>*/
/* 				</select>*/
/* 				<span class="introducer">*/
/* 					<label class="introducer required" style="display:none;"> 介绍人： </label>*/
/* 				<select class="introducer" id="introducer" style="width:180px;display:none;" title_="introduce" >*/
/* 				</select>*/
/* 				</span>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label> 统一社会信用代码： </label>*/
/* 				<input title_="social_credit_code" maxlength="18" />*/
/* 				<label> 法定代表人： </label>*/
/* 				<input title_="corporation" />*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label><i class='reqired_label'>*</i> 法人身份证号： </label>*/
/* 				<input title_="corporation_card" msg="请输入正确的身份证号码" validate="/\w/g" />*/
/* 				<label> 行业： </label>*/
/* 				<select class="" style="width:180px;" title_="industry" >*/
/* 					<option value="">---请选择---</option>*/
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
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 			<label><i class='reqired_label'>*</i> 注册资金(万)： </label>*/
/* 			<input type="number" style="width:180px;" title_="register_capital"  msg="请输入大于零的注册资金" validate="morezero"/>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 			<label> 省市区：</label>*/
/* 			<span id="city" title_="area">*/
/* 					<select class="prov"></select>*/
/* 					<select class="city" disabled="disabled"></select>*/
/* 					<select class="dist" disabled="disabled"></select>*/
/* 			</span>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label> 详细地址： </label>*/
/* 				<input style="width:calc(100% - 135px);margin-left:5px;padding:5px;" title_="address" />*/
/* 			</select>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label>联系人：</label>*/
/* 				<input type="text" style="width:180px;" title_="contacts"/>*/
/* 				<label>手机号码：</label>*/
/* 				<input style="width:180px;" title_="phone"/>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label>电话号码： </label>*/
/* 				<input style="width:180px;" title_="tel"/>*/
/* 				<label> 经营范围： </label>*/
/* 				<input title_="range" />*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label> 公司规模： </label>*/
/* 				<select style="width: 180px;" title_="scale" >*/
/* 					<option value="">请选择</option>*/
/* 					<option value="10人以下">10人以下</option>*/
/* 					<option value="10-50人">10-50人</option>*/
/* 					<option value="50-100人">50-100人</option>*/
/* 					<option value="100-200人">100-200人</option>*/
/* 					<option value="200人以上">200人以上</option>*/
/* 				</select>*/
/* 				<label> 成立日期： </label>*/
/* 				<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 					<input class="date-timepicker1" title_="stablish_time" style="height: 30px; width:inherit;">*/
/* 					<span class="input-group-addon" style="width:30px;height:30px;position:absolute;right:0;border-left:1px solid #ddd;">*/
/* 					<i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 				</span>*/
/* 				</div>*/
/* 				<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 					<input id="date-timepicker1" class="date-timepicker1" search="" data-id="oppo_time" title_="stablish_time">*/
/* 					<span style="display: inline-block;height: 28px;background: #ddd;width: 26px;position: relative;top: -6px;right: 31px;">*/
/* 							<i class="fa fa-clock-o bigger-110" style="    position: relative;left: 7px;top: 5px;"></i>*/
/* 					</span>*/
/* 				</div>-->*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label style="float:left;"> 备注： </label>*/
/* 				<textarea title_="remark" style="width:calc(100% - 131px);margin-left:5px;resize:none;padding:5px;" class="in_remark"></textarea>*/
/* 			</div>*/
/* */
/* 			<div style="text-align:center;margin-top:15px;">*/
/* 				<span style="position:relative;left:65px;font-weight:bold;cursor:pointer;display: inline-block;background: #337ab7;padding: 3px 5px; color:#fff;border-radius: 5px;" class="more">填写更多</span>*/
/* 			</div>*/
/* */
/* 			<div style="display:none" class="taxMsg">*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 税务类型： </label>*/
/* 					<select title_="tax_type" class="required" style="width:180px;" msg="请选择税务类型">*/
/* 						<option> 请选择 </option>*/
/* 						<option value="1">一般纳税人</option>*/
/* 						<option value="2">小规模</option>*/
/* 					</select>*/
/* 					<label> 有无基本户： </label>*/
/* 					<select title_="basic" class="required" style="width:180px;" msg="请选择有无基本户">*/
/* 						<option> 请选择 </option>*/
/* 						<option value="1">有</option>*/
/* 						<option value="2">无</option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> <i class='reqired_label'>*</i>纳税识别号： </label>*/
/* 					<input title_="ratepaying_no" class="required" msg="纳税识别号不能为空" maxlength="20" />*/
/* 					<label> 国税编码： </label>*/
/* 					<input title_="state_tax_no" />*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label><i class='reqired_label'>*</i> 国税密码： </label>*/
/* 					<input title_="state_tax_pass" class="required" msg="国税密码不能为空"  />*/
/* 					<label> 国税CA证书： </label>*/
/* 					<input title_="gca" />*/
/* 				</div>*/
/* 				<div style="margin-top:15px;">*/
/* 					<label> 地税编码： </label>*/
/* 					<input title_="local_tax_no" />*/
/* 					<label><i class='reqired_label'>*</i> 地税密码： </label>*/
/* 					<input title_="local_tax_pass" class="required" msg="地税密码不能为空"   />*/
/* 				</div>*/
/* 					<div style="margin-top:15px;">*/
/* 					<label> 地税CA证书： </label>*/
/* 					<input title_="dca" />*/
/* 					<!--<label> 工商编码： </label>*/
/* 					<input title_="industry_no" />-->*/
/* 				</div>*/
/* 				<!--<div style="margin-top:15px;">*/
/* 					<label><i class='reqired_label'>*</i> 工商密码： </label>*/
/* 					<input title_="industry_pass"  class="required" msg="请输入正确的工商密码"/>*/
/* 					<label> 工商CA证书： </label>*/
/* 					<input title_="ica" />*/
/* 				</div>-->*/
/* 			</div>*/
/* 			<div style="text-align:center;margin-top:15px;">*/
/* 				<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* */
/* 				<button class="sure_button add">*/
/*                         <i class="fa fa-check" aria-hidden="true"></i>*/
/*                         保存*/
/*                     </button>*/
/* 			</div>*/
/* 		</div>*/
/* 	{% include 'admin/mark.html' %} {% include 'admin/customerDetail.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/assets/js/src/jquery.cityselect.js"></script>*/
/* <script type="text/javascript">*/
/* 	$(function() {*/
/* 		var pagesize = 10;*/
/* 		var filter = '';*/
/* 		var employees = [];*/
/* 		var employees_2 = [];*/
/* 		var order ='khm_customer.id desc ';*/
/* /**/
/* 		//导出功能*/
/*         cs.exportFile({*/
/*             url:"/api/api_customer/export",*/
/*             title:"合作客户"*/
/*         });*//* */
/* */
/* */
/* 		$('#changePageNum').change(function() {*/
/* 			pagesize = $(this).val();*/
/* 			getList(1);*/
/* 		})*/
/* 		doSearch();			*/
/* 		//来自详情页面的跳转*/
/* 		fromDetail();*/
/* 		function fromDetail(){*/
/* 			if (ykp.getCookie('data-id')!=undefined&&ykp.getCookie('data-id')!='') {*/
/* 				var id = ykp.getCookie('data-id');*/
/* 				var filter = 'khm_customer.id='+id;*/
/* 				getList(1,filter);*/
/* 				ykp.setCookie('data-id','');*/
/* 			}else{*/
/* 				ykp.setCookie("filter", "");*/
/* 				ykp.setCookie("where", "");*/
/* 				getList(1);*/
/* 			}*/
/* 		}*/
/* 		cs.dataRang();*/
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_customer/customer',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter:filter,*/
/* 				limit: pagesize,*/
/* 				type:2*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '#pageBar'*/
/* 			},*/
/* 			initOrder:'khm_customer.id',*/
/* 			defaultOrder: order,*/
/* 			contentId: "#dataList",*/
/* 			params:[{*/
/* 				id: "#dynamic-table",*/
/* 				field:["","khm_customer.id","khm_customer.name","khm_customer.rank","khm_customer.source","khm_customer.introduce","khm_customer.social_credit_code","khm_customer.corporation","khm_customer.corporation_card","khm_customer.register_capital","khm_customer.stablish_time","khm_customer.area","khm_customer.register_address",*/
/* 					"khm_customer.industry","khm_customer.range","khm_customer.scale",*/
/* 				]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* */
/* 		 //获取所有员工*/
/*         ykp.doAjax({*/
/*             url:'/api/api_employees/f7',*/
/*             method:'post',*/
/*             data:{*/
/*                 select:'bmm_employees.id,bmm_employees.name,bmm_employees.department'*/
/*             },*/
/*             success:function(res) {*/
/*                 var data = res.data; */
/*                 for(var i in data) {*/
/*                     employees[data[i]['id']] = data[i]['name'];*/
/*                     employees_2[data[i]['id']] = data[i]['department'];*/
/*                 }*/
/*             }*/
/*         });*/
/* 		function doSearch() {*/
/* 			var data = {*/
/* 					url: '/api/api_customer/customer',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						type:2,*/
/* 						limit:pagesize,*/
/* 						order: order*/
/* 					}*/
/* 				}*/
/* 				cs.doSearch('#search', data, 'filter', false, function(res,_filter) {*/
/* 					filter = _filter;*/
/* 					if(res.data.items == "") {*/
/* 					setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 						$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					} else {*/
/* 						addList(res);*/
/* 					}*/
/* 				})*/
/* 		}*/
/* */
/* 		//cs.showHeightSearch('#heightsearch','#heightsearch1');*/
/* */
/* 		advancedSearch();*/
/* 		//高级搜索*/
/* 		*/
/* 		function advancedSearch(){*/
/* 			var data = {*/
/* 				url: '/api/api_customer/customer',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					type: 2,*/
/* 					limit: pagesize,*/
/* 					order: order*/
/* 				}*/
/* 			}	*/
/* 			cs.hSearch('#search1', data, 'filter', false, function(res, _filter) {*/
/* 				filter = _filter;*/
/* 				$('.in').removeClass('modal-backdrop');*/
/* 				$("#heightsearch1").slideUp();*/
/* 				$("#heightsearch").removeClass('active').css('z-index', '');*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 					$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 				} else {*/
/* 					addList(res);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		cs.showHeightSearch('#heightsearch','#heightsearch1');*/
/* */
/* 		/*$('.in').click(function() {*/
/* 			if($('#heightsearch').hasClass('active')) {*/
/* 				$('#heightsearch').removeClass('active').css('z-index', '');*/
/* 				$("#heightsearch1").slideUp();*/
/* 			}*/
/* 		});*/
/* s*/
/* */
/* 		$('#heightsearch').click(function() {*/
/* 			if($(this).hasClass('active')) {*/
/* 				$(this).removeClass('active');*/
/* 				$("#heightsearch1").slideUp();*/
/* 			} else {*/
/* 				$("#heightsearch1").slideDown();*/
/* 				$(this).attr('class', 'btn btn-info btn-sm active');*/
/* 				cs.rest(false, '#heightsearch1');*/
/* 			}*/
/* 		})*/
/* *//* */
/* */
/* 		$('#flush').click(function(){*/
/* 			filter = '';*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getList();*/
/* 		})*/
/* */
/* 		//getList(1);*/
/* */
/* 		function getList(curpage,filter) {*/
/* 			if (filter == undefined) {*/
/* 				filter = '';*/
/* 			}*/
/* 			ykp.list({*/
/* 				url: '/api/api_customer/customer',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					type: 2,*/
/* 					limit: pagesize,*/
/* 					order: order,*/
/* 					filter:filter*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 						$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					}*/
/* 					addList(res);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 		*/
/* 		function addList(res) {*/
/* 			var data = res.data.items;*/
/* 			var html = "";*/
/* 			var html = '';*/
/* 			var ths = $('.thColor th');*/
/* 			var styles = [];*/
/* */
/* 			for(var i = 0;i < ths.length;i++){*/
/* 				styles.push(ths.eq(i).css('display'));*/
/* 			}*/
/* 			var rank =''*/
/* */
/* 			//经营范围*/
/* 			var pd_data;*/
/* 			//经营范围title*/
/* 			var range_title = [];*/
/* 			//遍历次数*/
/* 			var times;*/
/* 			var industry = ['','批发零售业','制造业','租赁和商务服务业','仓储运输业','餐饮住宿业','信息软件业','金融业','房地产业','建筑业','教育','文体娱乐业','卫生和社会工作','居民服务','修理业','农林牧渔业'];*/
/* */
/* 			for(var i in data) {*/
/*                 switch(data[i]['khm_customer.rank']){*/
/* 					case '1':*/
/* 						rank='A';*/
/* 						break;*/
/* 					case '2':*/
/* 						rank='B';*/
/* 						break;*/
/* 					case '3':*/
/* 						rank='C';*/
/*                         break;*/
/* 					case '4':*/
/* 						rank='D'*/
/* 						break;*/
/* 				}*/
/* 				//获取经营范围title*/
/* 				pd_data =  data[i]['khm_customer.range'];*/
/* 				times = Math.ceil(pd_data.length / 20);*/
/* 				for(var j = 0; j < times ; j++) {*/
/* 					range_title.push(pd_data.slice(20*j,(j + 1) * 20));*/
/* 				}*/
/* 				*/
/* 				html += `*/
/* 					<tr data-id="${data[i]['khm_customer.id']}">*/
/* 						<td  style="">*/
/* 							<label class="pos-rel">*/
/* 								<a> <span style="cursor: pointer" id="" title="详情" class="lbl btOrange sdetail"><i class="fa fa-info"></i></span></a>*/
/*                                  <a contentAuthority="109"> <span style="cursor: pointer" title="编辑" id="recordEdit" class="recordEdit lbl btBlue"><i class="fa fa-pencil-square-o"></i></span></a>*/
/*                              </label>*/
/* 						</td>*/
/* 						<td data-num="2" style="display: ${styles[1]}">${data[i]['khm_customer.customer_num']}</td>*/
/* 						<td data-cid="${data[i]['khm_customer.id']}" data-num="3" style="display: ${styles[2]}"><a href="#" class="customerDetail pos-rel">${data[i]['khm_customer.name']}</a>*/
/* 							<label class="pos-rel">*/
/* 				 				<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}"  data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>*/
/* 			 				 </label>*/
/* 						</td>*/
/* 						<td data-num="4" style="display: ${styles[3]}">*/
/* 							${rank}*/
/* 						</td>*/
/* 						*/
/* 						<td data-num="5" style="display: ${styles[4]}">${data[i]['khm_customer.source']}</td>*/
/* 						<td data-num="6" style="display: ${styles[5]}">${data[i]['khm_customer.introduce']}</td>*/
/* 						<td data-num="7" style="display: ${styles[6]}">${data[i]['khm_customer.social_credit_code']}</td>*/
/* 						<td data-num="8" style="display: ${styles[7]}">${data[i]['khm_customer.corporation']}</td>*/
/* 						<td data-num="9" style="display: ${styles[8]}">${data[i]['khm_customer.corporation_card']}</td>*/
/* 						<td data-num="10" style="display: ${styles[9]};text-align: right !important; ">${data[i]['khm_customer.register_capital']}</td>*/
/* 						<td data-num="11" style="display: ${styles[10]}">${cs.getNowTime(data[i]['khm_customer.stablish_time'])}</td>*/
/* 						<td data-num="12" style="display: ${styles[11]}">${data[i]['khm_customer.area']}</td>*/
/* 						<td data-num="13" style="display: ${styles[12]}">${data[i]['khm_customer.address']}</td>*/
/* 						<td data-num="14" style="display: ${styles[13]}">${industry[data[i]['khm_customer.industry']] || ""}</td>*/
/* 						<td data-num="15" style="display: ${styles[14]}" title="${range_title.join('&#13;')}">*/
/* 							<label style="width:100px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;" >*/
/* 				 				${data[i]['khm_customer.range']}*/
/* 			 				</label>*/
/* 						</td>*/
/* 						<td data-num="16" style="display: ${styles[15]}">${data[i]['khm_customer.scale']}</td>*/
/* 					</tr>*/
/* 				`;*/
/* */
/* 				//清空数组*/
/* 		 		range_title = [];*/
/* 			}*/
/* 			$('#datalist').html(html);*/
/* 			*/
/* 			cs.getNodes([109]);*/
/* 			//编辑*/
/* 			editRecord();*/
/* 				//详情*/
/* 			dispDetail();*/
/* 			custom.showReamrk();*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/* 			custom.get_custom_info();*/
/* 		}*/
/* 		*/
/* 		//编辑客户*/
/* 			function editRecord() {*/
/* 				$('#dynamic-table tbody #recordEdit').click(function() {*/
/* 					showMark('#template1');*/
/* 					$('#showBox .title').text('编辑客户');*/
/* 					var data_id = $(this).parents('tr').attr('data-id');*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_customer/info',*/
/* 						methods: 'post',*/
/* 						data: {*/
/* 							filter: 'khm_customer.id = ' + data_id*/
/* 						},*/
/* 						success:function(res) {*/
/* 							var data = res.data;*/
/* 						var area = data['khm_customer.area'];*/
/* 						if(area) {*/
/* 							area = area.split(',');*/
/* 							$("#templateCon #city").citySelect({*/
/* 								url: "/resource/adimin/assets/js/src/city.min.js",*/
/* 								prov: area[0], //省份  */
/* 								city: area[1] ? area[1] : '', //城市  */
/* 								dist: area[2] ? area[2] : '', //区县  */
/* 								nodata: "none" //当子集无数据时，隐藏select  */
/* 							});*/
/* 						} else {*/
/* 							$("#templateCon #city").citySelect({*/
/* 								url: "/resource/adimin/assets/js/src/city.min.js",*/
/* 								prov: '北京', //省份 */
/* 								city: '东城区',*/
/* 								nodata: "none" //当子集无数据时，隐藏select  */
/* 							});*/
/* 						}*/
/*                             console.log(data);*/
/*                             for(let v in data) {*/
/*                                 $('#templateCon').find('input,select,textarea').each(function (i,e) {*/
/*                                     if($(this).attr("title_") == "introduce" && v.replace(/khm_customer\./g,'') == "introduce"){*/
/*                                         let intro = data[v];*/
/*                                         let it = $(this);*/
/* 										setTimeout(function () {*/
/*                                             it.val(intro).change();*/
/*                                         },1000)*/
/* */
/*                                     }else if($(this).attr("title_") == v.replace(/khm_customer\./g,'') ){*/
/*                                         if($(this).attr("title_") =="stablish_time"){*/
/*                                             $(this).val(cs.getNowTime(data[v]))*/
/*                                         }else {*/
/*                                             $(this).val(data[v])*/
/* 										}*/
/*                                     }*/
/* */
/*                                 })*/
/*                             }*/
/* */
/* */
/* 						var inputOrSelectOrTextarea = $('#templateCon').find('input,select,textarea');*/
/* 						/*inputOrSelectOrTextarea.eq(0).val(data['khm_customer.name']);*/
/* 						if(data['khm_customer.rank']){*/
/* 							inputOrSelectOrTextarea[1][data['khm_customer.rank']].selected = true;*/
/* 						}*/
/* 						inputOrSelectOrTextarea.eq(2).val(data['khm_customer.source']);*/
/* 						inputOrSelectOrTextarea.eq(3).val(data['khm_customer.introduce']);*/
/* 						inputOrSelectOrTextarea.eq(4).val(data['khm_customer.social_credit_code']);*/
/* 						inputOrSelectOrTextarea.eq(5).val(data['khm_customer.corporation']);*/
/* 						inputOrSelectOrTextarea.eq(6).val(data['khm_customer.corporation_card']);*/
/* 						inputOrSelectOrTextarea.eq(7).val(data['khm_customer.register_capital']);*/
/* 						inputOrSelectOrTextarea.eq(8).val(data['khm_customer.address']);*/
/* 						inputOrSelectOrTextarea.eq(9).val(data['khm_customer.industry']);*/
/* 						inputOrSelectOrTextarea.eq(10).val(data['khm_customer.range']);*/
/* 						inputOrSelectOrTextarea.eq(11).val(data['khm_customer.scale']);*/
/* 						//console.log(cs.getNowTime(data['khm_customer.stablish_time']));*/
/* 						inputOrSelectOrTextarea.eq(12).val(cs.getNowTime(data['khm_customer.stablish_time']));*/
/* 						inputOrSelectOrTextarea.eq(16).val(data['khm_customer.remark']);*/
/* 						if(data['khm_customer.tax_type']){*/
/* 							inputOrSelectOrTextarea[17][data['khm_customer.tax_type']].selected = true;*/
/* 						}*/
/* 						if(data['khm_customer.basic']){*/
/* 							inputOrSelectOrTextarea[18][data['khm_customer.basic']].selected = true;*/
/* 						}*/
/* 						inputOrSelectOrTextarea.eq(19).val(data['khm_customer.ratepaying_no']);*/
/* 						inputOrSelectOrTextarea.eq(20).val(data['khm_customer.state_tax_no']);*/
/* 						inputOrSelectOrTextarea.eq(21).val(data['khm_customer.state_tax_pass']);*/
/* 						inputOrSelectOrTextarea.eq(22).val(data['khm_customer.gca']);*/
/* 						inputOrSelectOrTextarea.eq(23).val(data['khm_customer.local_tax_no']);*/
/* 						inputOrSelectOrTextarea.eq(24).val(data['khm_customer.local_tax_pass']);*/
/* 						inputOrSelectOrTextarea.eq(25).val(data['khm_customer.dca']);*//* */
/* */
/* 						showIntroducer();*/
/* 						}*/
/* 					})*/
/* */
/* */
/* 					showTaxMsg();*/
/* */
/* 					//保存事件*/
/* 					$('#templateCon .add').click(function() {*/
/* 						var postData = {*/
/* 							id: data_id*/
/* 						};*/
/* 						$('#templateCon').find('input,select,textarea').not(':hidden,.prov,.city,.dist').each(function(i, e) {*/
/* 							postData[$(this).attr('title_')] = $(this).val();*/
/* 						});*/
/* 						var prov = $('#templateCon .prov').val();*/
/* 						var city = $('#templateCon .city').val();*/
/* 						//console.log(city ? city : '');*/
/* 						var dist = $('#templateCon .dist').val();*/
/* 						postData.area = (prov ? prov : '') + (city ? ',' + city : '') + (dist ? ',' + dist : '');*/
/* 						postData.stablish_time = postData.stablish_time ?new Date(postData.stablish_time.replace(/[年月日]/g, '-')) / 1000 :'';*/
/* 						var result = ykp.getFormData('#templateCon', true);*/
/* 						if(result.status){*/
/* 							ykp.doAjax({*/
/* 							url: '/api/api_customer/edit',*/
/* 							methods: 'post',*/
/* 							data: postData,*/
/* 							success:function(res) {*/
/* 								//关闭弹出层*/
/* 								cs.close();*/
/* 						*/
/* 								$('.ui-pagination-container').remove();*/
/* 								getList(1);*/
/* 							}*/
/* 						})*/
/* 						}*/
/* 						*/
/* 					})*/
/* */
/* 					$('#showBox #photooptions li').eq(0).siblings().hide();*/
/* */
/* 					//弹出层 客户证件上传*/
/* 					$('#showBox #imgChosen').change(function() {*/
/* 						var file = this.files[0];*/
/* 						var fr = new FileReader();*/
/* 						fr.readAsDataURL(file);*/
/* 						fr.onloadend = function(e) {*/
/* 							$('#showBox #idphoto').attr('src', e.target.result);*/
/* 							$('#showBox #photooptions li').eq(0).siblings().show();*/
/* 						}*/
/* 					});*/
/* */
/* 					//弹出层 成立日期*/
/* 					cs.timeplug()*/
/* 				})*/
/* 			}*/
/* 			*/
/* 			var department = [];*/
/* 			//获取所有部门*/
/* 		    ykp.doAjax({*/
/* 		        url:'/api/api_department/f7',*/
/* 		        method:'post',*/
/* 		        anysc:false,*/
/* 		        data:{*/
/* 		            select:'bmm_department.id,bmm_department.name,bmm_department.cid',*/
/* 		            limit:999*/
/* 		        },*/
/* 		        success:function(res) {*/
/* 		            var data = res.data;*/
/* 		            if (data != '') {*/
/* 		            	department = data;*/
/* 		            }*/
/* 		        }*/
/* 		    });*/
/* */
/* */
/* 			function dispDetail() {*/
/* 				$('#dynamic-table tbody .sdetail').click(function() {*/
/* 					showMark('#template');*/
/* 					$('#showBox .title').text('客户详情');*/
/* 					var cid = $(this).parents('tr').attr('data-id');*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_customer/info',*/
/* 					methods: 'post',*/
/* 					async:false,*/
/* 					data: {*/
/* 						filter: 'khm_customer.id = ' + cid*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						var srank = ["",'A', 'B', 'C', 'D'];*/
/* 						var status = ['未合作','合作中','已解决'];*/
/* 						var reason = ['无进行中的合同','合同已解约'];*/
/* 						var department_c = [];*/
/* 						var industry = ['','批发零售业','制造业','租赁和商务服务业','仓储运输业','餐饮住宿业','信息软件业','金融业','房地产业','建筑业','教育','文体娱乐业','卫生和社会工作','居民服务','修理业','农林牧渔业'];*/
/* 						var lastdetail = {};*/
/* 							for(var i in department){*/
/* 							if (department[i]['cid']==cid) {*/
/* 								department_c.push(department[i]);*/
/* 							}*/
/* 						}*/
/* 						ykp.doAjax({*/
/* 					        url:'/api/api_customer/get_last',*/
/* 					        method:'post',*/
/* 					        async:false,*/
/* 					        data:{*/
/* 					        	customer_id:cid,*/
/* 					            limit:999*/
/* 					        },*/
/* 					        success:function(res) {*/
/* 					        	lastdetail = res.data;*/
/* 								$("#templateBox .disData0").html(data['khm_customer.customer_num']);*/
/* 								$("#templateBox .disData1").html(data['khm_customer.name']);*/
/* 								$("#templateBox .disData2").html(srank[data['khm_customer.rank']]);*/
/* 								$("#templateBox .disData3").html(data['khm_customer.source']);*/
/* 								$("#templateBox .disData4").html(data['khm_customer.introduce']);*/
/* 								$("#templateBox .disData5").html(data['khm_customer.social_credit_code']);*/
/* 								$("#templateBox .disData6").html(data['khm_customer.corporation']);*/
/* 								$("#templateBox .disData7").html(data['khm_customer.corporation_card']);*/
/* 								$("#templateBox .disData8").html(parseInt(data['khm_customer.register_capital']).toFixed(2));*/
/* 								$("#templateBox .disData9").html(cs.getNowTime(data['khm_customer.stablish_time']));*/
/* 								$("#templateBox .disData10").html(data['khm_customer.area']);*/
/* 								$("#templateBox .disData11").html(data['khm_customer.address']);*/
/* 								$("#templateBox .disData12").html(industry[data['khm_customer.industry']] || "");*/
/* 								$("#templateBox .disData13").html(data['khm_customer.range']);*/
/* 								$("#templateBox .disData14").html(data['khm_customer.scale']);*/
/* 								$("#templateBox .disData15").html(data['khm_customer.remark']);*/
/* 								$("#templateBox .disData16").html(data['khm_customer.tax_type'] == 2 ? "小规模" :"一般纳税人" );*/
/* 								$("#templateBox .disData17").html(data['khm_customer.basic'] == 1 ? "有" : "无");*/
/* 								$("#templateBox .disData18").html(data['khm_customer.ratepaying_no']);*/
/* 								$("#templateBox .disData19").html(data['khm_customer.state_tax_no']);*/
/* 								$("#templateBox .disData20").html(data['khm_customer.state_tax_pass']);*/
/* 								$("#templateBox .disData21").html(data['khm_customer.gca']);*/
/* 								$("#templateBox .disData22").html(data['khm_customer.local_tax_no']);*/
/* 								$("#templateBox .disData23").html(data['khm_customer.local_tax_pass']);*/
/* 								$("#templateBox .disData24").html(data['khm_customer.dca']);*/
/* 								$("#templateBox .disData25").html(data['khm_customer.industry_no']);*/
/* 								$("#templateBox .disData26").html(data['khm_customer.industry_pass']);*/
/* 								$("#templateBox .disData27").html(data['khm_customer.ica']);*/
/* 								$("#templateBox .disData28").html(status[data['khm_customer.status']]);*/
/* 								$("#templateBox .disData29").html(employees[lastdetail.contract['update_by']]);*/
/* 								$("#templateBox .disData32").html(customer_type[data['khm_customer.type']]);*/
/* 								$("#templateBox .disData33").html(lastdetail.contract['status']>=3?reason[lastdetail.contract.status-3]:'----');*/
/* 								$("#templateBox .disData34").html(lastdetail.contract['userInfo']==''?'----':lastdetail.contract['userInfo'] ?lastdetail.contract['userInfo']['name']:'----');*/
/* 								$("#templateBox .disData35").html(lastdetail.contract['userInfo']==''?'----':lastdetail.contract['userInfo']?lastdetail.contract['userInfo']['dep_name']:'----');*/
/* 								$("#templateBox .disData36").html(employees[data['khm_customer.create_id']]);*/
/* 								$("#templateBox .disData37").html(department[parseInt(employees_2[data['khm_customer.create_id']])-1]?department[parseInt(employees_2[data['khm_customer.create_id']])-1]['name']:'----');*/
/* 								$("#templateBox .disData38").html(data['khm_customer.contacts']);*/
/* 								$("#templateBox .disData39").html(data['khm_customer.phone']);*/
/* 								$("#templateBox .disData40").html(data['khm_customer.tel']);*/
/*                                 $("#temHeader").width($("#showBox").width()-47);*/
/* */
/* 					        }*/
/* 					    });*/
/* 						*/
/* 					}*/
/* 				})*/
/* 				})*/
/* */
/* 			}*/
/* 			*/
/* 			var customer_type = [];*/
/* 		*/
/* 		    //获取所有公海类型*/
/* 		    ykp.doAjax({*/
/* 		        url:'/api/api_customer_type/f7',*/
/* 		        method:'post',*/
/* 		        anysc:false,*/
/* 		        data:{*/
/* 		            select:'khm_customer_type.id,khm_customer_type.name'*/
/* 		        },*/
/* 		        success:function(res){*/
/* 		            var data = res.data;*/
/* 		            customer_type[0] = '无';*/
/* 		            for(var i in data){*/
/* 		            	customer_type[parseInt(i)+1] =data[i]['name'];*/
/* 		            }	               */
/* 		        }*/
/* 		    });*/
/* */
/* */
/* 			function showTaxMsg() {*/
/* 				$('#templateCon .more').click(function() {*/
/* 					if($(this).hasClass('retract')) {*/
/* 						$('#templateCon .taxMsg').hide();*/
/* 						$(this).text('填写更多').removeClass('retract');*/
/* 						return;*/
/* 					}*/
/* 					$(this).text('取消填写').addClass('retract');*/
/* 					$('#templateCon .taxMsg').show();*/
/* 				});*/
/* 			}*/
/* 			*/
/* 			//选择弹出层来源中转介绍时，显示介绍人，*/
/* 			//选择其他时，隐藏介绍人*/
/* 			function showIntroducer() {*/
/* 				var html = [];*/
/* 				if($('#templateCon .source option:selected').index() == 1) {*/
/* 					$('#templateCon .introducer').show();*/
/* 				}*/
/*                 if($('#templateCon .source').val() == '转介绍') {*/
/*                     transferto();*/
/*                 }*/
/* 				$('#templateCon .source').change(function() {*/
/* 					//console.log(1);*/
/* 					if(this.selectedIndex == 1) {*/
/*                         transferto();*/
/* 					} else {*/
/* 						$('#templateCon .introducer').hide();*/
/* 					}*/
/* 				});*/
/* */
/* 				function transferto() {*/
/*                     $('#templateCon .introducer').show();*/
/*                     if(html.length == 0){*/
/*                         ykp.doAjax({*/
/*                             url:"/api/api_contact_book/grid",*/
/*                             method:"post",*/
/*                             data:{*/
/*                                 select:'distinct(khm_contact_book.username) as "khm_contact_book.username"',*/
/*                                 limit:999*/
/*                             },*/
/*                             success:function(res){*/
/*                                 var data = res.data.items;*/
/* */
/*                                 html.push('<option  value="">请选择</option>');*/
/*                                 for(var i in data){*/
/*                                     html.push('<option  value="'+data[i]['khm_contact_book.username']+'">'+data[i]['khm_contact_book.username']+'</option>');*/
/*                                 }*/
/*                                 $('#templateBox #introducer').html(html.join(','));*/
/*                                 //月份*/
/*                                 $('#templateCon #introducer').select2({*/
/*                                     allowClear: true*/
/*                                 });*/
/*                             }*/
/*                         })*/
/*                     }*/
/*                 }*/
/* 			}*/
/* */
/* 		//自定义table*/
/* 		cs.custorm_check('#dynamic-table', '#datalist', false);*/
/* */
/* 		//分页*/
/* 		cs.setPagination('#pagination', 5, 50, 5, getPageList);*/
/* */
/* 		function getPageList(current) {*/
/* 			//console.log(current);*/
/* 		}*/
/* */
/* 		$('.add').click(function() {*/
/* 			showMark('.popup_new');*/
/* 		});*/
/* 		*/
/* 		function editOrDetail(){*/
/* 			$('#recordEdit').click(function(){*/
/* 				showMark('.popup_new');*/
/* 			});*/
/* 			$('.sdetail').click(function(){*/
/* 				showMark('.popup_new');*/
/* 			});*/
/* 		}*/
/* 	});*/
/* </script>*/
