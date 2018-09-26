<?php

/* admin/clientManage/customerService.html */
class __TwigTemplate_8efa16344cb827af33cbbc24c9143a1d7e27a145520c545af4037c0c573f2242 extends Twig_Template
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
\t#showBox td {
\t\tborder-top: 1px solid #ddd;
\t\ttext-align: left;
\t\theight: 47px;
\t}
\t
\t#showBox td input {
\t\theight: 34px;
\t\tpadding: 6px 12px;
\t}
\t
\t#heightsearch1 label {
\t\twidth: 112px;
\t\ttext-align: right;
\t}
\t
\t#heightsearch1 input {}
\t
\t#templateCon label {
\t\ttext-align: right;
\t\twidth: 108px;
\t}
\t
\t#showBox table tbody .tdboder {
\t\tborder-right: 1px #ccc solid;
\t}
\t
\t/*#showBox table tbody td {
\t\tbackground: #e6ecf2;
\t}*/
\t
\t#editBox table tr td,
\t#editBox table {
\t\tborder: none !important;
\t}
\t
\t#editBox table tr td {
\t\theight: 35px;
\t}
\t
\t#templateBox input {
\t\theight: 30px;
\t\twidth: 180px;
\t\tpadding-left: 5px;
\t}
\t
\t.title_bold {
\t\tcolor: #116ed1;
\t\tfont-weight: bold;
\t}
\t
\t.title_bold::after {
\t\twidth: 100%;
\t\tborder-bottom: 1px solid #D7D7D7;
\t\tcontent: '';
\t\tposition: relative;
\t\ttop: 11px;
\t\tleft: 0;
\t\tdisplay: block;
\t}
</style>
                                                         <!--      记账客户-->
<div class=\" widget-main\">
\t<div class=\"row\">
\t\t<div class=\"row col-xs-12\" style=\"margin-top: 20px;padding-left:0;\" id=\"topTool\">
\t\t\t<div style=\"float:left;margin-right:15px;\">
\t\t\t\t<input type=\"text\" pts=0 id=\"\" sear=\"khm_customer.customer_num\" placeholder=\"客户编码\" class=\"kh_code\" />
\t\t\t\t<input type=\"text\" pts=0 id=\"\" sear=\"khm_customer.name\" placeholder=\"企业名称\" class=\"kh_name\" />
\t\t\t\t<button type=\"button\" id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
                    <i class=\"fa fa-search\"></i>
                 </button>
\t\t\t\t<button id=\"heightsearch\" type=\"button\" title=\"高级搜索\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
                    <i class=\"fa fa-filter\"></i>
                </button>

\t\t\t\t<button id=\"flush\" type=\"button\" title=\"刷新\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
                    <i class=\"fa fa-refresh\"></i>
                </button>
\t\t\t\t</div>
\t\t\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"position: absolute; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>客户编码</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.customer_num\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>企业名称</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.name\" />
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
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>法定代表人</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" sear=\"khm_customer.corporation\" gjs=\"0\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
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
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>注册资金</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.capital\" data-type=\"gj\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>成立日期</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"khm_customer.stablish_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>统一社会信用代码</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 id=\"\" sear=\"khm_customer.social_credit_code\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>省市区</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.area\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>详细地址</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.address\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>经营范围</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.range\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>法人身份证号码</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.corporation_card\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>税务类型</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width:180px\" gjs=0 sear=\"khm_customer.tax_type\" data-type=\"gj\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t<option value=\"1\">一般纳税人</option>
\t\t\t\t\t\t\t\t<option value=\"2\">小规模</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>客户级别</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width:180px\" gjs=0 sear=\"khm_customer.rank\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t<option value=\"1\">A</option>
\t\t\t\t\t\t\t\t<option value=\"2\">B</option>
\t\t\t\t\t\t\t\t<option value=\"3\">C</option>
\t\t\t\t\t\t\t\t<option value=\"4\">D</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>客户来源</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width:180px\" gjs=0 sear=\"khm_customer.source\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t<option value=\"转介绍\">转介绍</option>
\t\t\t\t\t\t\t\t<option>电话咨询</option>
\t\t\t\t\t\t\t\t<option>线上注册</option>
\t\t\t\t\t\t\t\t<option>客户上门</option>
\t\t\t\t\t\t\t\t<option>陌生拜访</option>
\t\t\t\t\t\t\t\t<option>公司资源</option>
\t\t\t\t\t\t\t\t<option>个人资源</option>
\t\t\t\t\t\t\t\t<option>广告宣传</option>
\t\t\t\t\t\t\t\t<option>电话营销</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>合作状态</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width:180px\" gjs=0 data-type=\"gj\" sear=\"khm_customer.status\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t<option value=\"1\">合作中</option>
\t\t\t\t\t\t\t\t<option value=\"2\">已失效</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"text-align:center;clear:both;padding-top:10px; \">
\t\t\t\t\t\t\t<button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
\t\t                        查询
\t\t                    </button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"rest\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
\t\t                       重置
\t\t                    </button>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"custom_table\" style=\"padding: 0 0 0 20px\">
\t\t<table id=\"dynamic-table\">
\t\t\t<thead>
\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t<th class=\"hidden-480 center\">操作</th>
\t\t\t\t\t<th data-num=\"1\">客户编码</th>
\t\t\t\t\t<th data-num=\"2\">企业名称</th>
\t\t\t\t\t<th data-num=\"3\" class=\"hidden-480\">客户级别</th>
\t\t\t\t\t<th data-num=\"16\" class=\"hidden-480\">仓位编码</th>
\t\t\t\t\t<th data-num=\"4\" class=\"hidden-480\">来源</th>
\t\t\t\t\t<th data-num=\"6\" class=\"hidden-480\">统一社会信用代码</th>
\t\t\t\t\t<th data-num=\"7\" class=\"hidden-480\">法定代表人</th>
\t\t\t\t\t<th data-num=\"8\" class=\"hidden-480\">法人身份证号码</th>
\t\t\t\t\t<th data-num=\"9\" style=\"text-align: right !important;\" class=\"hidden-480\">注册资金(万)</th>
\t\t\t\t\t<th data-num=\"10\" class=\"hidden-480\">
\t\t\t\t\t\t<span>成立日期</span>
\t\t\t\t\t\t<span class=\"table-sort\" field=\"khm_customer.stablish_time\">
\t\t\t\t\t\t\t<i class=\"edge table-sort-asc\" sort=\"asc\"></i>
\t\t\t\t\t\t\t<i class=\"edge table-sort-desc\" sort=\"desc\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</th>
\t\t\t\t\t<th data-num=\"11\" class=\"hidden-480\">省市区</th>
\t\t\t\t\t<th data-num=\"12\" class=\"hidden-480\">详细地址</th>
\t\t\t\t\t<th data-num=\"13\" class=\"hidden-480\">行业</th>
\t\t\t\t\t<th data-num=\"14\" class=\"hidden-480\">经营范围</th>
\t\t\t\t\t<th data-num=\"15\" class=\"hidden-480\">公司规模</th>
                    <th data-num=\"17\" class=\"hidden-480\">税务类型</th>
\t\t\t\t</tr>
\t\t\t</thead>

\t\t\t<tbody id=\"dynamic-table_data\">

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
\t\t<div class=\"col-sm-12\" id=\"editBox\">
\t\t\t<table width=\"100%\" style=\"border:1px solid #ddd;border-collapse:collapse;margin-bottom:15px;\">
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\" class=\"title_bold\">基本信息</td>
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
\t\t\t\t\t<td style=\"text-align: right !important\">电话号码：</td>
\t\t\t\t\t<td colspan=\"4\" style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData40\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">经营范围：</td>
\t\t\t\t\t<td colspan=\"4\" style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData13\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">

\t\t\t\t\t<td style=\"text-align: right !important\">备注：</td>
\t\t\t\t\t<td colspan=\"4\" style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData15\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\" class=\"title_bold\">税务信息</td>
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
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\" class=\"title_bold\">系统信息</td>
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

\t\t\t\t\t<td style=\"text-align: right !important\">创建人所在部门：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData37\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t</table>
\t\t</div>
\t</div>

\t<!--编辑信息-->
\t<div class=\"row\" id=\"template1\" style=\"display:none;\">
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label><i class='reqired_label'>*</i> 企业名称： </label>
\t\t\t<input class=\"required\" title_=\"name\" />
\t\t\t<label> 客户级别： </label>
\t\t\t<select style=\"width:180px;\"  title_=\"rank\">
\t\t\t\t<option> --- 请选择 ---</option>
\t\t\t\t<option value=\"1\">A</option>
\t\t\t\t<option value=\"2\">B</option>
\t\t\t\t<option value=\"3\">C</option>
\t\t\t\t<option value=\"4\">D</option>
\t\t\t</select>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 来源： </label>
\t\t\t<select style=\"width:180px;\" class=\"source\" title_=\"source\">
\t\t\t\t<option> --- 请选择 ---</option>
\t\t\t\t<option>转介绍</option>
\t\t\t\t<option>电话咨询</option>
\t\t\t\t<option>线上注册</option>
\t\t\t\t<option>客户上门</option>
\t\t\t\t<option>陌生拜访</option>
\t\t\t\t<option>公司资源</option>
\t\t\t\t<option>个人资源</option>
\t\t\t\t<option>广告宣传</option>
\t\t\t\t<option>电话营销</option>
\t\t\t</select>
\t\t\t<span class=\"introducer\">
\t\t\t\t<label class=\"introducer\" style=\"display:none;\"> 介绍人： </label>
\t\t\t\t<select class=\"introducer\" id=\"introducer\" style=\"width:180px;display:none;\" title_=\"introduce\">
\t\t\t\t</select>
\t\t\t</span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 统一社会信用代码： </label>
\t\t\t<input title_=\"social_credit_code\" maxlength=\"18\" />
\t\t\t<label> 法定代表人： </label>
\t\t\t<input title_=\"corporation\" />
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 法人身份证号： </label>
\t\t\t<input title_=\"corporation_card\" validate=\"/\\w*/g\" msg=\"请输入正确的身份号码\" />
\t\t\t<label>注册资金(万)： </label>
\t\t\t<input type=\"number\" title_=\"capital\"  msg=\"请正确填写注册资金\" />
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 行业： </label>
\t\t\t<select style=\"width:180px;\" title_=\"industry\" msg=\"所属行业不能为空\">
\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t<option value=\"1\">批发零售业</option>
\t\t\t\t<option value=\"2\">制造业</option>
\t\t\t\t<option value=\"3\">租赁和商务服务业</option>
\t\t\t\t<option value=\"4\">仓储运输业</option>
\t\t\t\t<option value=\"5\">餐饮住宿业</option>
\t\t\t\t<option value=\"6\">信息软件业</option>
\t\t\t\t<option value=\"7\">金融业</option>
\t\t\t\t<option value=\"8\">房地产业</option>
\t\t\t\t<option value=\"9\">建筑业</option>
\t\t\t\t<option value=\"10\">教育</option>
\t\t\t\t<option value=\"11\">文体娱乐业</option>
\t\t\t\t<option value=\"12\">卫生和社会工作</option>
\t\t\t\t<option value=\"13\">居民服务</option>
\t\t\t\t<option value=\"14\">修理业</option>
\t\t\t\t<option value=\"15\">农林牧渔业</option>
\t\t\t</select>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 省市区：</label>
\t\t\t<span id=\"city\" title_=\"area\">
\t\t\t\t<select class=\"prov\"></select>
\t\t\t\t<select class=\"city\" disabled=\"disabled\"></select>
\t\t\t\t<select class=\"dist\" disabled=\"disabled\"></select>
\t\t\t</span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 详细地址： </label>
\t\t\t<input style=\"width:calc(100% - 113px);\" title_=\"address\" />
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label><i class='reqired_label'>*</i> 联系人：</label>
\t\t\t<input class=\"required\" type=\"text\" style=\"width:180px;\" title_=\"contacts\"/>
\t\t\t<label>手机号码：</label>
\t\t\t<input style=\"width:180px;\" title_=\"phone\"/>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label>电话号码： </label>
\t\t\t<input style=\"width:180px;\" title_=\"tel\"/>
\t\t\t<label> 经营范围： </label>
\t\t\t<input title_=\"range\" />
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 公司规模： </label>
\t\t\t<select style=\"width: 180px;\" title_=\"scale\" >
\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t<option value=\"10人以下\">10人以下</option>
\t\t\t\t<option value=\"10-50人\">10-50人</option>
\t\t\t\t<option value=\"50-100人\">50-100人</option>
\t\t\t\t<option value=\"100-200人\">100-200人</option>
\t\t\t\t<option value=\"200人以上\">200人以上</option>
\t\t\t</select>
\t\t\t<label> 成立日期： </label>
\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t<input  class=\"date-timepicker1\"  title_=\"stablish_time\" data-id=\"oppo_time\" style=\"height: 30px; width:inherit;\">
\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;position:absolute;right:0;border-left:1px solid #ddd;\">
\t\t\t\t\t<i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t<input id=\"date-timepicker1\" class=\"date-timepicker1\" search=\"\" style=\"padding:5px;\" data-id=\"oppo_time\" title_=\"stablish_time\">
\t\t\t\t<span style=\"display: inline-block;height: 28px;background: #ddd;width: 26px;position: relative;top: -6px;right: 31px;\">
\t\t\t\t\t<i class=\"fa fa-clock-o bigger-110\" style=\"    position: relative;left: 7px;top: 6px;\"></i>
\t\t\t\t</span>
\t\t\t</div>-->
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<textarea title_=\"remark\" style=\"width:475px;margin-left:5px;resize:none;padding:5px;\" class=\"in_remark\"></textarea>
\t\t\t<label style=\"float:left;\"> 备注： </label>
\t\t</div>

\t\t<div style=\"text-align:center;margin-top:15px;\">
\t\t\t<span style=\"position:relative;left:65px;font-weight:bold;cursor:pointer;display: inline-block;background: #337ab7;padding: 3px 5px; color:#fff;border-radius: 5px;\" class=\"more\">填写更多</span>
\t\t</div>

\t\t<div style=\"display:none\" class=\"taxMsg\">
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> 税务类型： </label>
\t\t\t\t<select title_=\"tax_type\" style=\"width:180px;\" msg=\"请选择税务类型\">
\t\t\t\t\t<option value=\"0\"> --- 请选择 ---</option>
\t\t\t\t\t<option value=\"1\">一般纳税人</option>
\t\t\t\t\t<option value=\"2\">小规模</option>
\t\t\t\t</select>
\t\t\t\t<label> 有无基本户： </label>
\t\t\t\t<select title_=\"basic\" style=\"width:180px;\" msg=\"请选择有无基本户\">
\t\t\t\t\t<option value=\"0\"> --- 请选择 ---</option>
\t\t\t\t\t<option value=\"1\">有</option>
\t\t\t\t\t<option value=\"2\">无</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> 纳税识别号： </label>
\t\t\t\t<input title_=\"ratepaying_no\" msg=\"纳税识别号不能为空\" maxlength=\"20\" />
\t\t\t\t<label> 国税编码： </label>
\t\t\t\t<input title_=\"state_tax_no\" />
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> <i class='reqired_label'>*</i>国税密码： </label>
\t\t\t\t<input title_=\"state_tax_pass\" msg=\"请输入正确的国税密码\" />
\t\t\t\t<label> 国税CA证书： </label>
\t\t\t\t<input title_=\"gca\" />
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> 地税编码： </label>
\t\t\t\t<input title_=\"local_tax_no\" />
\t\t\t\t<label><i class='reqired_label'>*</i> 地税密码： </label>
\t\t\t\t<input title_=\"local_tax_pass\" msg=\"请输入正确的地税密码\" />
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> 地税CA证书： </label>
\t\t\t\t<input title_=\"dca\" />
\t\t\t\t<!--<label> 工商编码： </label>
\t\t\t\t<input title_=\"industry_no\" />-->
\t\t\t</div>
\t\t\t<!--<div style=\"margin-top:15px;\">
\t\t\t\t<label><i class='reqired_label'>*</i> 工商密码： </label>
\t\t\t\t<input title_=\"industry_pass\"  msg=\"请输入正确的工商密码\"/>
\t\t\t\t<label> 工商CA证书： </label>
\t\t\t\t<input title_=\"ica\" />
\t\t\t</div>-->
\t\t</div>
\t\t<div style=\"text-align:center;margin-top:15px;\">
\t\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>

\t\t\t<button class=\"sure_button add\">
                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                        保存
                    </button>
\t\t</div>
\t</div>
\t";
        // line 742
        $this->loadTemplate("admin/mark.html", "admin/clientManage/customerService.html", 742)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/clientManage/customerService.html", 742)->display($context);
        // line 743
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/assets/js/src/jquery.cityselect.js\"></script>
<!-- <script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script> -->
<script>
\tjQuery(function(\$) {
\t\tcs.dataRang();
\t\tvar pagesize = 10;
\t\tvar order = 'khm_customer.id desc';
\t\tvar filter = '';
\t\tvar employees = {};
\t\tvar employees_2 = {};
\t\tvar page_size = 10;
\t\t//来自详情页面的跳转
\t\tfromDetail();
\t\tcs.getAllCw(function(option) {
\t\t\t\$('#heightsearch1 .cw').html(option);
\t\t\t\$('#heightsearch1 .cw').select2({
\t\t\t\tallowClear: true
\t\t\t})
\t\t})
\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_customer/customer',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: filter,
\t\t\t\tlimit: pagesize,
\t\t\t\ttype: 3
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '#pageBar'
\t\t\t},
\t\t\tinitOrder: 'khm_customer.id',
\t\t\tcontentId: \"#dynamic-table_data\",
\t\t\tdefaultOrder: order,
\t\t\tparams: [{
\t\t\t\tid: \"#dynamic-table\",
\t\t\t\tfield: [\"\", \"khm_customer.id\", \"khm_customer.name\", \"khm_customer.rank\", \"pos_name\", \"khm_customer.source\", \"khm_customer.social_credit_code\",
\t\t\t\t\t\"khm_customer.corporation\", \"khm_customer.corporation_card\", \"khm_customer.capital\", \"khm_customer.stablish_time\", \"khm_customer.area\", \"khm_customer.address\",
\t\t\t\t\t\"khm_customer.industry\", \"khm_customer.range\", \"khm_customer.scale\",\"khm_customer.tax_type\"
\t\t\t\t]
\t\t\t}]
\t\t\t 
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});

\t\tfunction fromDetail() {
\t\t\tif(ykp.getCookie('data-id') != undefined && ykp.getCookie('data-id') != '') {
\t\t\t\tvar id = ykp.getCookie('data-id');
\t\t\t\tvar filter = 'khm_customer.id=' + id;
\t\t\t\tgetCustomerList(filter);
\t\t\t\tykp.setCookie('data-id', '');
\t\t\t} else {
\t\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\t\tykp.setCookie(\"where\", \"\");
\t\t\t\tgetCustomerList();
\t\t\t}
\t\t}
\t\tif(!ace.vars['old_ie']) {
\t\t\t\$('#date-timepicker1').datetimepicker({
\t\t\t\t// format: 'YYYY-MM-DD HH:mm:ss', //use this option to display seconds
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

\t\t//时间范围
\t\tcs.dataRang();

\t\t\$('#changePageNum').change(function() {
\t\t\tpagesize = \$(this).val();
\t\t\tykp.setCookie('page_size',pagesize);
\t\t\tgetCustomerList();
\t\t})

\t\t//时间
\t\tif(!ace.vars['old_ie']) {
\t\t\t\$('#templateBox .date-timepicker1').datetimepicker({
\t\t\t\t// format: 'YYYY-MM-DD HH:mm:ss',//use this option to display seconds
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
\t\tdoSearch();
            //搜索
            function doSearch() {
                var data = {
                    url: '/api/api_customer/customer',
                    method: 'post',
                    data: {
                        type: 3,
                        limit: pagesize,
                        order: order
                    }
\t\t\t}
\t\t\tcs.doSearch('#search', data, 'filter', false, function(res, _filter) {

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

\t\t\$('#flush').click(function() {
\t\t\t\$('#topTool input').val('');
\t\t\tfilter = '';
            ykp.setCookie('filter','')
            getCustomerList();
\t\t})
\t\t/*\$(\"input\",\".enter\").onmousedown(function(){
\t\t\tvar keycode = evt.witch;
\t\t\tif(keycode ==13) {
\t\t\t\t
\t\t\t}
\t\t)}*/

\t\t//获取所有员工
\t\tykp.doAjax({
\t\t\turl: '/api/api_employees/f7',
\t\t\tmethod: 'post',
\t\t\tasync: false,
\t\t\tdata: {
\t\t\t\tselect: 'bmm_employees.id,bmm_employees.name,bmm_employees.department'
\t\t\t},
\t\t\tsuccess: function(res) {
\t\t\t\tvar data = res.data;
\t\t\t\t\$('.advandced-search').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});
\t\t\t\tfor(var i in data) {
\t\t\t\t\temployees[data[i]['id']] = data[i]['name'];
\t\t\t\t\temployees_2[data[i]['id']] = data[i]['department'];
\t\t\t\t\t\$('.advandced-search').append(new Option(data[i]['name']));
\t\t\t\t}
\t\t\t}
\t\t});

\t\t//高级搜索
\t\tcs.showHeightSearch('#heightsearch', '#heightsearch1');

\t\tfunction dohSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_customer/customer',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\ttype: 3,
\t\t\t\t\tlimit: pagesize,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}
\t\t\tcs.hSearch('.search1', data, 'filter', false, function(res, _filter) {
\t\t\t\tfilter = _filter;
\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\$(\"#heightsearch\").removeClass('active').css('z-index', '');
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#dynamic-table_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\taddList(res);
\t\t\t})
\t\t}

\t\t//获取列表数据
\t\t//getCustomerList();

\t\tfunction getCustomerList(_filter) {
 \t\t\tif(_filter != undefined) {
\t\t\t\tfilter = _filter;
\t\t\t}
\t\t\tdoSearch();
\t\t\tdohSearch();
\t\t\tykp.list({
\t\t\t\turl: '/api/api_customer/customer',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\ttype: 3,
\t\t\t\t\tlimit: pagesize,
\t\t\t\t\tfilter: filter,
\t\t\t\t\torder: order
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#dynamic-table_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//通用排序
\t\t/*cs.general_sort({
\t\t\turl: '/api/api_finance/loan_list',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tlimit: page_size,
\t\t\t\tfilter: filter
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '.pageBar'
\t\t\t}
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\tif(res.data.items == \"\") {
\t\t\t\tsetTimeout(function() {
\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t}, 1000);
\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\treturn false;
\t\t\t}

\t\t});*/

\t\tfunction addList(res) {
\t\t\tvar data = res.data;
\t\t\tvar dataArr = ['', 'A', 'B', 'C', 'D']
\t\t\tvar industry = ['', '批发零售业', '制造业', '租赁和商务服务业', '仓储运输业', '餐饮住宿业', '信息软件业', '金融业', '房地产业', '建筑业', '教育', '文体娱乐业', '卫生和社会工作', '居民服务', '修理业', '农林牧渔业'];
\t\t\tykp.setCookie('page_no', data.curPage, (1 / 24));
\t\t\tvar html = '';
\t\t\tvar ths = \$('.thColor th');
\t\t\tvar styles = [];

\t\t\tfor(i = 0; i < ths.length; i++) {
\t\t\t\tstyles.push(ths.eq(i).css('display'));
\t\t\t}
            //console.log(styles);
            /*for(var i in data.items){
                data.items[i]['Remark'] = cs.getRemark(data.items[i]['Remark']);
            }*/

\t\t\t//经营范围
\t\t\tvar pd_data;
\t\t\t//经营范围title
\t\t\tvar range_title = [];
\t\t\t//遍历次数
\t\t\tvar times;

\t\t\tfor(var i = 0; i < data.items.length; i++) {
\t\t\t\t//获取经营范围title
\t\t\t\tpd_data = data.items[i]['khm_customer.range'];
\t\t\t\ttimes = Math.ceil(pd_data.length / 20);
\t\t\t\tfor(var j = 0; j < times; j++) {
\t\t\t\t\trange_title.push(pd_data.slice(20 * j, (j + 1) * 20));
\t\t\t\t}
\t\t\t\thtml += `<tr data-id = \${data.items[i]['khm_customer.id']}>
\t\t\t \t\t\t<td class=\"center\">
\t\t\t \t\t\t<label class=\"pos-rel\">
                                 <a> <span style=\"cursor: pointer\" id=\"\" class=\"lbl sdetail btOrange\" title=\"详情\"><i class=\"fa fa-info\"></i></span></a>
                                 <a id=\"recordEdit\" contentAuthority=\"89\"  ><span style=\"color:#fff !important\" title=\"编辑\" class=\"recordEdit  lbl btBlue\"><i class=\"fa fa-pencil-square-o\"></i></span></a>
                             </label>
\t\t\t \t\t\t</td>
\t\t\t \t\t\t
\t\t\t \t\t\t<td data-num=\"1\" style=\"display: \${styles[1]}\">
\t\t\t \t\t\t\t\${data.items[i]['khm_customer.customer_num']}
\t\t\t \t\t\t</td>
\t\t\t \t\t\t<td data-num=\"2\" style=\"display: \${styles[2]}\" data-cid=\"\${data.items[i]['khm_customer.id']}\">
\t\t\t\t \t\t\t<a href=\"#\" class=\"customerDetail pos-rel\">\${data.items[i]['khm_customer.name']}</a>
\t\t\t\t \t\t\t<label class=\"pos-rel\">
\t\t\t\t \t\t\t\t<i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data.items[i]['Remark'].length > 0 ? 'red' : ''}\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data.items[i]['Remark'])}\" ></i>
\t\t\t \t\t\t\t </label>
\t\t\t \t\t\t</td>
\t\t\t \t\t\t
\t\t\t \t\t\t<td data-num=\"3\" style=\"display: \${styles[3]}\">
\t\t\t \t\t\t\t\${data.items[i]['khm_customer.rank'] ? dataArr[data.items[i]['khm_customer.rank']] : ''}
\t\t\t \t\t\t</td>
\t\t\t \t\t\t <td class=\"center\" style=\"display:\${styles[4]};\" data-num=\"16\">
                                \${data.items[i]['position']['pos_name']+data.items[i]['position']['pos_num']}
                            </td>
\t\t\t \t\t\t<td data-num=\"4\" style=\"display: \${styles[5]}\">
\t\t\t \t\t\t\t\${data.items[i]['khm_customer.source']}
\t\t\t \t\t\t</td>
\t\t\t \t
\t\t\t \t\t\t<td data-num=\"6\" style=\"display: \${styles[6]}\">\${data.items[i]['khm_customer.social_credit_code']}</td>

\t\t\t \t\t\t<td data-num=\"7\" style=\"display: \${styles[7]}\">\${data.items[i]['khm_customer.corporation']}</td>
\t\t\t \t\t\t<td data-num=\"8\" class=\"center\" title=\"\" style=\"display:\${styles[8]};\">
\t\t\t \t\t\t\t\${data.items[i]['khm_customer.corporation_card']}
\t\t\t \t\t\t</td>
\t\t\t \t\t\t
\t\t\t \t\t\t<td data-num=\"9\" style=\"display: \${styles[9]};text-align: right !important;\"> \${data.items[i]['khm_customer.capital'] ? parseInt(data.items[i]['khm_customer.capital']).toFixed(2) : \"0.00\" }</td>
\t\t\t \t\t\t<td data-num=\"10\" style=\"display: \${styles[10]}\">\${cs.getNowTime(data.items[i]['khm_customer.stablish_time'])}</td>
\t\t\t \t\t\t<td data-num=\"11\" style=\"display: \${styles[11]}\">\${data.items[i]['khm_customer.area']}</td>
\t\t\t \t\t\t<td data-num=\"12\" style=\"display: \${styles[12]}\">\${data.items[i]['khm_customer.address']}</td>
\t\t\t \t\t\t<td data-num=\"13\" style=\"display: \${styles[13]}\">\${data.items[i]['khm_customer.industry'] ? industry[data.items[i]['khm_customer.industry']] : ''}</td>
\t\t\t \t\t\t<td data-num=\"14\" style=\"display: \${styles[14]};\" title=\"\${range_title.join('&#13;')}\">
\t\t\t \t\t\t\t<label style=\"width:100px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;\">
\t\t\t\t \t\t\t\t\${data.items[i]['khm_customer.range']}
\t\t\t \t\t\t\t</label>
\t\t\t \t\t\t</td>
\t\t\t \t\t\t<td data-num=\"15\" style=\"display: \${styles[15]}\">\${data.items[i]['khm_customer.scale']}</td>
\t\t\t \t\t\t<td data-num=\"17\" style=\"display: \${styles[16]}\">\${data.items[i]['khm_customer.tax_type'] == 1 ? \"一般纳税人\" : \"小规模\"}</td>
\t\t\t \t\t</tr>`;

\t\t\t\t//清空数组
\t\t\t\trange_title = [];
\t\t\t}
\t\t\t\$('#dynamic-table_data').html(html);
\t\t\tcs.getNodes([89]);
\t\t\teditRecord();
\t\t\t//详情
\t\t\tdispDetail();
\t\t\tcustom.get_custom_info();
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\tcustom.showReamrk();
\t\t}
\t\t//自定义列表
\t\tcs.custorm_check('#dynamic-table', '#dynamic-table_data', true);



\t\t//选择弹出层来源中转介绍时，显示介绍人，
\t\t//选择其他时，隐藏介绍人
\t\tfunction showIntroducer(val) {
\t\t\tif(\$('#templateCon .source option:selected').index() == 1) {
\t\t\t\t\$('#templateCon .introducer').show();
\t\t\t}
\t\t\tvar html = [];
\t\t\t\$('#templateCon .source').change(function() {
\t\t\t\t//console.log(1);
\t\t\t\tif(this.selectedIndex == 1) {
\t\t\t\t\t\$('#templateCon .introducer').show();
\t\t\t\t\tif(html.length == 0) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: \"/api/api_contact_book/get_contact_user\",
\t\t\t\t\t\t\tmethod: \"get\",
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tvar data = res.data;

\t\t\t\t\t\t\t\thtml.push('<option  value=\"\">请选择</option>');
\t\t\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\t\t\thtml.push('<option  value=\"' + data[i]['khm_contact_book.username'] + '\">' + data[i]['khm_contact_book.username'] + '</option>');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\$('#templateBox #introducer').html(html.join(','));
\t\t\t\t\t\t\t\t//月份
\t\t\t\t\t\t\t\t\$('#templateCon #introducer').select2({
\t\t\t\t\t\t\t\t\tallowClear: true
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t\$('#templateCon .introducer').hide();
\t\t\t\t}
\t\t\t});

\t\t\tif(\$('#templateCon .source').val() == '转介绍') {
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: \"/api/api_contact_book/grid\",
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tdata: {
                        select:'distinct(khm_contact_book.username) as \"khm_contact_book.username\"',
\t\t\t\t\t\tlimit: 999
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data.items;

\t\t\t\t\t\thtml.push('<option  value=\"\">请选择</option>');
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\thtml.push('<option  value=\"' + data[i]['khm_contact_book.username'] + '\">' + data[i]['khm_contact_book.username'] + '</option>');
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#templateBox #introducer').html(html.join(','));
\t\t\t\t\t\t//月份
\t\t\t\t\t\t\$('#templateCon #introducer').select2({
\t\t\t\t\t\t\tallowClear: true
\t\t\t\t\t\t});
\t\t\t\t\t\tif(val){
\t\t\t\t\t\t\t\$('#templateCon #introducer').val(val).trigger(\"change\");
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}
\t\t}

\t\t//点击弹出层更多，显示税务信息；如果当前税务信息
\t\t//为显示状态则是收起

\t\tfunction showTaxMsg() {
\t\t\t\$('#templateCon .more').click(function() {
\t\t\t\tif(\$(this).hasClass('retract')) {
\t\t\t\t\t\$('#templateCon .taxMsg').hide();
\t\t\t\t\t\$(this).text('填写更多').removeClass('retract');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\t\$(this).text('取消填写').addClass('retract');
\t\t\t\t\$('#templateCon .taxMsg').show();
\t\t\t});
\t\t}

\t\t//编辑客户
\t\tfunction editRecord() {
\t\t\t\$('#dynamic-table tbody #recordEdit').click(function() {
\t\t\t\tshowMark('#template1');
\t\t\t\t\$('#showBox .title').text('编辑信息');
\t\t\t\t// \$('#showBox .title_operation').html(
\t\t\t\t// \t`<label class=\"btn btn-info btn-sm\">
\t\t\t\t// \t\t\t添加标签
\t\t\t\t// \t</label>`
\t\t\t\t// );

\t\t\t\tvar data_id = \$(this).parents('tr').attr('data-id');
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_customer/info',
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter: 'khm_customer.id = ' + data_id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
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


                        for(let v in data) {

                            \$('#templateCon').find('input,select,textarea').each(function (i,e) {
                                if(\$(this).attr(\"title_\") == v.replace(/khm_customer\\./g,'') ){
                                    if(\$(this).attr(\"title_\") ==\"stablish_time\"){
                                        \$(this).val(cs.getNowTime(data[v]))
                                    }else {
                                        \$(this).val(data[v])
                                    }
                                }
                            })
                        }

\t\t\t\t\t\tshowIntroducer(data['khm_customer.introduce']);
                        //弹出层 成立日期
                        cs.timeplug()
\t\t\t\t\t}
\t\t\t\t})

\t\t\t\tshowTaxMsg();

\t\t\t\t//保存事件
\t\t\t\t\$('#templateCon .add').click(function() {
\t\t\t\t\tvar postData = {
\t\t\t\t\t\tid: data_id
\t\t\t\t\t};
\t\t\t\t\t\$('#templateCon').find('input,select,textarea').not('.prov,.city,.dist').each(function(i, e) {
\t\t\t\t\t\tpostData[\$(this).attr('title_')] = \$(this).val();
\t\t\t\t\t});
\t\t\t\t\tvar prov = \$('#templateCon .prov').val();
\t\t\t\t\tvar city = \$('#templateCon .city').val();
\t\t\t\t\t//console.log(city ? city : '');
\t\t\t\t\tvar dist = \$('#templateCon .dist').val();
\t\t\t\t\tpostData.area = (prov ? prov : '') + (city ? ',' + city : '') + (dist ? ',' + dist : '');
\t\t\t\t\tpostData.stablish_time =postData.stablish_time ? new Date(postData.stablish_time.replace(/[年月日]/g, '/')).getTime() / 1000 :\"\";
\t\t\t\t\tvar result = ykp.getFormData('#templateCon', true);
\t\t\t\t\tif(result.status) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_customer/service_edit',
\t\t\t\t\t\t\tmethods: 'post',
\t\t\t\t\t\t\tdata: postData,
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t//关闭弹出层
                                ykp.prompt('编辑成功');
\t\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\t\t\$('.ui-pagination-container').remove();
\t\t\t\t\t\t\t\tgetCustomerList();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t})

\t\t\t\t\$('#showBox #photooptions li').eq(0).siblings().hide();

\t\t\t\t//弹出层 客户证件上传
\t\t\t\t\$('#showBox #imgChosen').change(function() {
\t\t\t\t\tvar file = this.files[0];
\t\t\t\t\tvar fr = new FileReader();
\t\t\t\t\tfr.readAsDataURL(file);
\t\t\t\t\tfr.onloadend = function(e) {
\t\t\t\t\t\t\$('#showBox #idphoto').attr('src', e.target.result);
\t\t\t\t\t\t\$('#showBox #photooptions li').eq(0).siblings().show();
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t//弹出层 成立日期
\t\t\t\tif(!ace.vars['old_ie']) {
\t\t\t\t\t\$('#templateCon #date-timepicker1').datetimepicker({
\t\t\t\t\t\t// format: 'YYYY-MM-DD HH:mm:ss', //use this option to display seconds
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
\t\t\t\t\t}).next().on(ace.click_event, function() {
\t\t\t\t\t\t\$(this).prev().focus();
\t\t\t\t\t});
\t\t\t\t}
\t\t\t})
\t\t}

\t\tvar department = [];
\t\t//获取所有部门
\t\tykp.doAjax({
\t\t\turl: '/api/api_department/f7',
\t\t\tmethod: 'post',
\t\t\tasy: false,
\t\t\tdata: {
\t\t\t\tselect: 'bmm_department.id,bmm_department.name,bmm_department.cid',
\t\t\t\tlimit: 999
\t\t\t},
\t\t\tsuccess: function(res) {
\t\t\t\tvar data = res.data;
\t\t\t\tif(data != '') {
\t\t\t\t\tdepartment = data;
\t\t\t\t}
\t\t\t}
\t\t});

\t\tfunction dispDetail() {
\t\t\t\$('#dynamic-table tbody .sdetail').click(function() {
\t\t\t\tshowMark('#template');
\t\t\t\t\$('#showBox .title').text('详情');
\t\t\t\tvar cid = \$(this).parents('tr').attr('data-id');
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_customer/info',
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tasync: false,
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter: 'khm_customer.id = ' + cid
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\tvar srank = ['A', 'B', 'C', 'D'];
\t\t\t\t\t\tvar status = ['未合作', '合作中', '已解决'];
\t\t\t\t\t\tvar reason = ['无进行中的合同', '合同已解约'];
\t\t\t\t\t\tvar industry = ['', '批发零售业', '制造业', '租赁和商务服务业', '仓储运输业', '餐饮住宿业', '信息软件业', '金融业', '房地产业', '建筑业', '教育', '文体娱乐业', '卫生和社会工作', '居民服务', '修理业', '农林牧渔业'];
\t\t\t\t\t\tvar department_c = [];
\t\t\t\t\t\tvar lastdetail = {};
\t\t\t\t\t\tfor(var i in department) {
\t\t\t\t\t\t\tif(department[i]['cid'] == cid) {
\t\t\t\t\t\t\t\tdepartment_c.push(department[i]);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_customer/get_last',
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tasync: false,
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tcustomer_id: cid,
\t\t\t\t\t\t\t\tlimit: 999
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tlastdetail = res.data;
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData0\").html(data['khm_customer.customer_num']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData1\").html(data['khm_customer.name']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData2\").html(srank[data['khm_customer.srank'] - 1]);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData3\").html(data['khm_customer.source']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData4\").html(data['khm_customer.introduce']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData5\").html(data['khm_customer.social_credit_code']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData6\").html(data['khm_customer.corporation']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData7\").html(data['khm_customer.corporation_card']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData8\").html(parseInt(data['khm_customer.capital']).toFixed(2));
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData9\").html(cs.getNowTime(data['khm_customer.stablish_time']));
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData10\").html(data['khm_customer.area']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData11\").html(data['khm_customer.address']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData12\").html(industry[data['khm_customer.industry']]);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData13\").html(data['khm_customer.range']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData14\").html(data['khm_customer.scale']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData15\").html(data['khm_customer.remark']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData16\").html(data['khm_customer.tax_type'] == 1 ? \"一般纳税人\" : \"小规模\");
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
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData33\").html(lastdetail.contract['status'] >= 3 ? reason[lastdetail.contract.status - 3] : '----');
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData34\").html(lastdetail.contract['userInfo'] == '' ? '----' : lastdetail.contract['userInfo']['name']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData35\").html(lastdetail.contract['userInfo'] == '' ? '----' : lastdetail.contract['userInfo']['dep_name']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData36\").html(employees[data['khm_customer.create_id']]);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData37\").html(department[parseInt(employees_2[data['khm_customer.create_id']]) - 1] ? department[parseInt(employees_2[data['khm_customer.create_id']]) - 1]['name'] : '----');
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData38\").html(data['khm_customer.contacts']);
\t\t\t\t\t\t\t\t\$(\"#templateBox .disData39\").html(data['khm_customer.phone']);
                                \$(\"#templateBox .disData40\").html(data['khm_customer.tel']);
                                \$(\"#temHeader\").width(\$(\"#showBox\").width()-47);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})
\t\t}
\t\t//全选
\t\tcheckAll();
\t});

\tvar customer_type = [];

\t//获取所有公海类型
\tykp.doAjax({
\t\turl: '/api/api_customer_type/f7',
\t\tmethod: 'post',
\t\tanysc: false,
\t\tdata: {
\t\t\tselect: 'khm_customer_type.id,khm_customer_type.name'
\t\t},
\t\tsuccess: function(res) {
\t\t\tvar data = res.data;
\t\t\tcustomer_type[0] = '';
\t\t\tfor(var i in data) {
\t\t\t\tcustomer_type[parseInt(i) + 1] = data[i]['name'];
\t\t\t}
\t\t}
\t});

\tfunction checkAll(status) {
\t\t\$(\"tbody input[name='check']\").each(function(i, n) {
\t\t\tn.checked = status;
\t\t});
\t}
</script>";
    }

    public function getTemplateName()
    {
        return "admin/clientManage/customerService.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  766 => 743,  762 => 742,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	#showBox td {*/
/* 		border-top: 1px solid #ddd;*/
/* 		text-align: left;*/
/* 		height: 47px;*/
/* 	}*/
/* 	*/
/* 	#showBox td input {*/
/* 		height: 34px;*/
/* 		padding: 6px 12px;*/
/* 	}*/
/* 	*/
/* 	#heightsearch1 label {*/
/* 		width: 112px;*/
/* 		text-align: right;*/
/* 	}*/
/* 	*/
/* 	#heightsearch1 input {}*/
/* 	*/
/* 	#templateCon label {*/
/* 		text-align: right;*/
/* 		width: 108px;*/
/* 	}*/
/* 	*/
/* 	#showBox table tbody .tdboder {*/
/* 		border-right: 1px #ccc solid;*/
/* 	}*/
/* 	*/
/* 	/*#showBox table tbody td {*/
/* 		background: #e6ecf2;*/
/* 	}*//* */
/* 	*/
/* 	#editBox table tr td,*/
/* 	#editBox table {*/
/* 		border: none !important;*/
/* 	}*/
/* 	*/
/* 	#editBox table tr td {*/
/* 		height: 35px;*/
/* 	}*/
/* 	*/
/* 	#templateBox input {*/
/* 		height: 30px;*/
/* 		width: 180px;*/
/* 		padding-left: 5px;*/
/* 	}*/
/* 	*/
/* 	.title_bold {*/
/* 		color: #116ed1;*/
/* 		font-weight: bold;*/
/* 	}*/
/* 	*/
/* 	.title_bold::after {*/
/* 		width: 100%;*/
/* 		border-bottom: 1px solid #D7D7D7;*/
/* 		content: '';*/
/* 		position: relative;*/
/* 		top: 11px;*/
/* 		left: 0;*/
/* 		display: block;*/
/* 	}*/
/* </style>*/
/*                                                          <!--      记账客户-->*/
/* <div class=" widget-main">*/
/* 	<div class="row">*/
/* 		<div class="row col-xs-12" style="margin-top: 20px;padding-left:0;" id="topTool">*/
/* 			<div style="float:left;margin-right:15px;">*/
/* 				<input type="text" pts=0 id="" sear="khm_customer.customer_num" placeholder="客户编码" class="kh_code" />*/
/* 				<input type="text" pts=0 id="" sear="khm_customer.name" placeholder="企业名称" class="kh_name" />*/
/* 				<button type="button" id="search" title="搜索" class="btn btn-info btn-sm">*/
/*                     <i class="fa fa-search"></i>*/
/*                  </button>*/
/* 				<button id="heightsearch" type="button" title="高级搜索" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/*                     <i class="fa fa-filter"></i>*/
/*                 </button>*/
/* */
/* 				<button id="flush" type="button" title="刷新" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/*                     <i class="fa fa-refresh"></i>*/
/*                 </button>*/
/* 				</div>*/
/* 				<div id="heightsearch1" class="col-sx-12" style="position: absolute; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;">*/
/* 					<div class="row">*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>客户编码</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.customer_num" />*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>企业名称</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.name" />*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>仓位</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select gjs=3 sear="ckm_position_num.pos_id" class="cw" data-type="gj" style="width:180px;">*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
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
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>法定代表人</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" sear="khm_customer.corporation" gjs="0" />*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
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
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>注册资金</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> &lt; </option>*/
/* 								<option> > </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.capital" data-type="gj">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>成立日期</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> &lt; </option>*/
/* 								<option> > </option>*/
/* 							</select>*/
/* 							<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 								<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 								<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="khm_customer.stablish_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>统一社会信用代码</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 id="" sear="khm_customer.social_credit_code">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>省市区</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.area">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>详细地址</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.address">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>经营范围</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.range">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>法人身份证号码</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.corporation_card">*/
/* 						</div>*/
/* 						*/
/* 						 <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>税务类型</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width:180px" gjs=0 sear="khm_customer.tax_type" data-type="gj">*/
/* 								<option value="">请选择</option>*/
/* 								<option value="1">一般纳税人</option>*/
/* 								<option value="2">小规模</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						*/
/* 						*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>客户级别</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width:180px" gjs=0 sear="khm_customer.rank">*/
/* 								<option value="">请选择</option>*/
/* 								<option value="1">A</option>*/
/* 								<option value="2">B</option>*/
/* 								<option value="3">C</option>*/
/* 								<option value="4">D</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>客户来源</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width:180px" gjs=0 sear="khm_customer.source">*/
/* 								<option value="">请选择</option>*/
/* 								<option value="转介绍">转介绍</option>*/
/* 								<option>电话咨询</option>*/
/* 								<option>线上注册</option>*/
/* 								<option>客户上门</option>*/
/* 								<option>陌生拜访</option>*/
/* 								<option>公司资源</option>*/
/* 								<option>个人资源</option>*/
/* 								<option>广告宣传</option>*/
/* 								<option>电话营销</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>合作状态</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width:180px" gjs=0 data-type="gj" sear="khm_customer.status">*/
/* 								<option value="">请选择</option>*/
/* 								<option value="1">合作中</option>*/
/* 								<option value="2">已失效</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div style="text-align:center;clear:both;padding-top:10px; ">*/
/* 							<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/* 		                        查询*/
/* 		                    </button>*/
/* 							<button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 		                       重置*/
/* 		                    </button>*/
/* 						</div>*/
/* */
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="custom_table" style="padding: 0 0 0 20px">*/
/* 		<table id="dynamic-table">*/
/* 			<thead>*/
/* 				<tr class="thColor">*/
/* 					<th class="hidden-480 center">操作</th>*/
/* 					<th data-num="1">客户编码</th>*/
/* 					<th data-num="2">企业名称</th>*/
/* 					<th data-num="3" class="hidden-480">客户级别</th>*/
/* 					<th data-num="16" class="hidden-480">仓位编码</th>*/
/* 					<th data-num="4" class="hidden-480">来源</th>*/
/* 					<th data-num="6" class="hidden-480">统一社会信用代码</th>*/
/* 					<th data-num="7" class="hidden-480">法定代表人</th>*/
/* 					<th data-num="8" class="hidden-480">法人身份证号码</th>*/
/* 					<th data-num="9" style="text-align: right !important;" class="hidden-480">注册资金(万)</th>*/
/* 					<th data-num="10" class="hidden-480">*/
/* 						<span>成立日期</span>*/
/* 						<span class="table-sort" field="khm_customer.stablish_time">*/
/* 							<i class="edge table-sort-asc" sort="asc"></i>*/
/* 							<i class="edge table-sort-desc" sort="desc"></i>*/
/* 						</span>*/
/* 					</th>*/
/* 					<th data-num="11" class="hidden-480">省市区</th>*/
/* 					<th data-num="12" class="hidden-480">详细地址</th>*/
/* 					<th data-num="13" class="hidden-480">行业</th>*/
/* 					<th data-num="14" class="hidden-480">经营范围</th>*/
/* 					<th data-num="15" class="hidden-480">公司规模</th>*/
/*                     <th data-num="17" class="hidden-480">税务类型</th>*/
/* 				</tr>*/
/* 			</thead>*/
/* */
/* 			<tbody id="dynamic-table_data">*/
/* */
/* 			</tbody>*/
/* 		</table>*/
/* */
/* 	</div>*/
/* 	<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 		<div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
/* */
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
/* 	<div class="row" id="template" style="display:none;width:678px;">*/
/* 		<div class="col-sm-12" id="editBox">*/
/* 			<table width="100%" style="border:1px solid #ddd;border-collapse:collapse;margin-bottom:15px;">*/
/* 				<tr>*/
/* 					<td colspan="4" class="title_bold">基本信息</td>*/
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
/* 					<td style="text-align: right !important">电话号码：</td>*/
/* 					<td colspan="4" style="text-align: left !important">*/
/* 						<span class="disData40"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">经营范围：</td>*/
/* 					<td colspan="4" style="text-align: left !important">*/
/* 						<span class="disData13"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* */
/* 					<td style="text-align: right !important">备注：</td>*/
/* 					<td colspan="4" style="text-align: left !important">*/
/* 						<span class="disData15"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td colspan="4" class="title_bold">税务信息</td>*/
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
/* 				<tr>*/
/* 					<td colspan="4" class="title_bold">系统信息</td>*/
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
/* */
/* 					<td style="text-align: right !important">创建人所在部门：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData37"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* */
/* 			</table>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<!--编辑信息-->*/
/* 	<div class="row" id="template1" style="display:none;">*/
/* 		<div style="margin-top:15px;">*/
/* 			<label><i class='reqired_label'>*</i> 企业名称： </label>*/
/* 			<input class="required" title_="name" />*/
/* 			<label> 客户级别： </label>*/
/* 			<select style="width:180px;"  title_="rank">*/
/* 				<option> --- 请选择 ---</option>*/
/* 				<option value="1">A</option>*/
/* 				<option value="2">B</option>*/
/* 				<option value="3">C</option>*/
/* 				<option value="4">D</option>*/
/* 			</select>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 来源： </label>*/
/* 			<select style="width:180px;" class="source" title_="source">*/
/* 				<option> --- 请选择 ---</option>*/
/* 				<option>转介绍</option>*/
/* 				<option>电话咨询</option>*/
/* 				<option>线上注册</option>*/
/* 				<option>客户上门</option>*/
/* 				<option>陌生拜访</option>*/
/* 				<option>公司资源</option>*/
/* 				<option>个人资源</option>*/
/* 				<option>广告宣传</option>*/
/* 				<option>电话营销</option>*/
/* 			</select>*/
/* 			<span class="introducer">*/
/* 				<label class="introducer" style="display:none;"> 介绍人： </label>*/
/* 				<select class="introducer" id="introducer" style="width:180px;display:none;" title_="introduce">*/
/* 				</select>*/
/* 			</span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 统一社会信用代码： </label>*/
/* 			<input title_="social_credit_code" maxlength="18" />*/
/* 			<label> 法定代表人： </label>*/
/* 			<input title_="corporation" />*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 法人身份证号： </label>*/
/* 			<input title_="corporation_card" validate="/\w*//* g" msg="请输入正确的身份号码" />*/
/* 			<label>注册资金(万)： </label>*/
/* 			<input type="number" title_="capital"  msg="请正确填写注册资金" />*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 行业： </label>*/
/* 			<select style="width:180px;" title_="industry" msg="所属行业不能为空">*/
/* 				<option value="">请选择</option>*/
/* 				<option value="1">批发零售业</option>*/
/* 				<option value="2">制造业</option>*/
/* 				<option value="3">租赁和商务服务业</option>*/
/* 				<option value="4">仓储运输业</option>*/
/* 				<option value="5">餐饮住宿业</option>*/
/* 				<option value="6">信息软件业</option>*/
/* 				<option value="7">金融业</option>*/
/* 				<option value="8">房地产业</option>*/
/* 				<option value="9">建筑业</option>*/
/* 				<option value="10">教育</option>*/
/* 				<option value="11">文体娱乐业</option>*/
/* 				<option value="12">卫生和社会工作</option>*/
/* 				<option value="13">居民服务</option>*/
/* 				<option value="14">修理业</option>*/
/* 				<option value="15">农林牧渔业</option>*/
/* 			</select>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 省市区：</label>*/
/* 			<span id="city" title_="area">*/
/* 				<select class="prov"></select>*/
/* 				<select class="city" disabled="disabled"></select>*/
/* 				<select class="dist" disabled="disabled"></select>*/
/* 			</span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 详细地址： </label>*/
/* 			<input style="width:calc(100% - 113px);" title_="address" />*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label><i class='reqired_label'>*</i> 联系人：</label>*/
/* 			<input class="required" type="text" style="width:180px;" title_="contacts"/>*/
/* 			<label>手机号码：</label>*/
/* 			<input style="width:180px;" title_="phone"/>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label>电话号码： </label>*/
/* 			<input style="width:180px;" title_="tel"/>*/
/* 			<label> 经营范围： </label>*/
/* 			<input title_="range" />*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 公司规模： </label>*/
/* 			<select style="width: 180px;" title_="scale" >*/
/* 				<option value="">请选择</option>*/
/* 				<option value="10人以下">10人以下</option>*/
/* 				<option value="10-50人">10-50人</option>*/
/* 				<option value="50-100人">50-100人</option>*/
/* 				<option value="100-200人">100-200人</option>*/
/* 				<option value="200人以上">200人以上</option>*/
/* 			</select>*/
/* 			<label> 成立日期： </label>*/
/* 			<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 				<input  class="date-timepicker1"  title_="stablish_time" data-id="oppo_time" style="height: 30px; width:inherit;">*/
/* 				<span class="input-group-addon" style="width:30px;height:30px;position:absolute;right:0;border-left:1px solid #ddd;">*/
/* 					<i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 				</span>*/
/* 			</div>*/
/* 			<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 			<input id="date-timepicker1" class="date-timepicker1" search="" style="padding:5px;" data-id="oppo_time" title_="stablish_time">*/
/* 				<span style="display: inline-block;height: 28px;background: #ddd;width: 26px;position: relative;top: -6px;right: 31px;">*/
/* 					<i class="fa fa-clock-o bigger-110" style="    position: relative;left: 7px;top: 6px;"></i>*/
/* 				</span>*/
/* 			</div>-->*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<textarea title_="remark" style="width:475px;margin-left:5px;resize:none;padding:5px;" class="in_remark"></textarea>*/
/* 			<label style="float:left;"> 备注： </label>*/
/* 		</div>*/
/* */
/* 		<div style="text-align:center;margin-top:15px;">*/
/* 			<span style="position:relative;left:65px;font-weight:bold;cursor:pointer;display: inline-block;background: #337ab7;padding: 3px 5px; color:#fff;border-radius: 5px;" class="more">填写更多</span>*/
/* 		</div>*/
/* */
/* 		<div style="display:none" class="taxMsg">*/
/* 			<div style="margin-top:15px;">*/
/* 				<label> 税务类型： </label>*/
/* 				<select title_="tax_type" style="width:180px;" msg="请选择税务类型">*/
/* 					<option value="0"> --- 请选择 ---</option>*/
/* 					<option value="1">一般纳税人</option>*/
/* 					<option value="2">小规模</option>*/
/* 				</select>*/
/* 				<label> 有无基本户： </label>*/
/* 				<select title_="basic" style="width:180px;" msg="请选择有无基本户">*/
/* 					<option value="0"> --- 请选择 ---</option>*/
/* 					<option value="1">有</option>*/
/* 					<option value="2">无</option>*/
/* 				</select>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label> 纳税识别号： </label>*/
/* 				<input title_="ratepaying_no" msg="纳税识别号不能为空" maxlength="20" />*/
/* 				<label> 国税编码： </label>*/
/* 				<input title_="state_tax_no" />*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label> <i class='reqired_label'>*</i>国税密码： </label>*/
/* 				<input title_="state_tax_pass" msg="请输入正确的国税密码" />*/
/* 				<label> 国税CA证书： </label>*/
/* 				<input title_="gca" />*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label> 地税编码： </label>*/
/* 				<input title_="local_tax_no" />*/
/* 				<label><i class='reqired_label'>*</i> 地税密码： </label>*/
/* 				<input title_="local_tax_pass" msg="请输入正确的地税密码" />*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label> 地税CA证书： </label>*/
/* 				<input title_="dca" />*/
/* 				<!--<label> 工商编码： </label>*/
/* 				<input title_="industry_no" />-->*/
/* 			</div>*/
/* 			<!--<div style="margin-top:15px;">*/
/* 				<label><i class='reqired_label'>*</i> 工商密码： </label>*/
/* 				<input title_="industry_pass"  msg="请输入正确的工商密码"/>*/
/* 				<label> 工商CA证书： </label>*/
/* 				<input title_="ica" />*/
/* 			</div>-->*/
/* 		</div>*/
/* 		<div style="text-align:center;margin-top:15px;">*/
/* 			<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* */
/* 			<button class="sure_button add">*/
/*                         <i class="fa fa-check" aria-hidden="true"></i>*/
/*                         保存*/
/*                     </button>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% include 'admin/mark.html' %} {% include 'admin/customerDetail.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/assets/js/src/jquery.cityselect.js"></script>*/
/* <!-- <script src="/resource/adimin/components/select2/dist/js/select2.js"></script> -->*/
/* <script>*/
/* 	jQuery(function($) {*/
/* 		cs.dataRang();*/
/* 		var pagesize = 10;*/
/* 		var order = 'khm_customer.id desc';*/
/* 		var filter = '';*/
/* 		var employees = {};*/
/* 		var employees_2 = {};*/
/* 		var page_size = 10;*/
/* 		//来自详情页面的跳转*/
/* 		fromDetail();*/
/* 		cs.getAllCw(function(option) {*/
/* 			$('#heightsearch1 .cw').html(option);*/
/* 			$('#heightsearch1 .cw').select2({*/
/* 				allowClear: true*/
/* 			})*/
/* 		})*/
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_customer/customer',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: filter,*/
/* 				limit: pagesize,*/
/* 				type: 3*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '#pageBar'*/
/* 			},*/
/* 			initOrder: 'khm_customer.id',*/
/* 			contentId: "#dynamic-table_data",*/
/* 			defaultOrder: order,*/
/* 			params: [{*/
/* 				id: "#dynamic-table",*/
/* 				field: ["", "khm_customer.id", "khm_customer.name", "khm_customer.rank", "pos_name", "khm_customer.source", "khm_customer.social_credit_code",*/
/* 					"khm_customer.corporation", "khm_customer.corporation_card", "khm_customer.capital", "khm_customer.stablish_time", "khm_customer.area", "khm_customer.address",*/
/* 					"khm_customer.industry", "khm_customer.range", "khm_customer.scale","khm_customer.tax_type"*/
/* 				]*/
/* 			}]*/
/* 			 */
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* */
/* 		function fromDetail() {*/
/* 			if(ykp.getCookie('data-id') != undefined && ykp.getCookie('data-id') != '') {*/
/* 				var id = ykp.getCookie('data-id');*/
/* 				var filter = 'khm_customer.id=' + id;*/
/* 				getCustomerList(filter);*/
/* 				ykp.setCookie('data-id', '');*/
/* 			} else {*/
/* 				ykp.setCookie("filter", "");*/
/* 				ykp.setCookie("where", "");*/
/* 				getCustomerList();*/
/* 			}*/
/* 		}*/
/* 		if(!ace.vars['old_ie']) {*/
/* 			$('#date-timepicker1').datetimepicker({*/
/* 				// format: 'YYYY-MM-DD HH:mm:ss', //use this option to display seconds*/
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
/* 		//时间范围*/
/* 		cs.dataRang();*/
/* */
/* 		$('#changePageNum').change(function() {*/
/* 			pagesize = $(this).val();*/
/* 			ykp.setCookie('page_size',pagesize);*/
/* 			getCustomerList();*/
/* 		})*/
/* */
/* 		//时间*/
/* 		if(!ace.vars['old_ie']) {*/
/* 			$('#templateBox .date-timepicker1').datetimepicker({*/
/* 				// format: 'YYYY-MM-DD HH:mm:ss',//use this option to display seconds*/
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
/* 		doSearch();*/
/*             //搜索*/
/*             function doSearch() {*/
/*                 var data = {*/
/*                     url: '/api/api_customer/customer',*/
/*                     method: 'post',*/
/*                     data: {*/
/*                         type: 3,*/
/*                         limit: pagesize,*/
/*                         order: order*/
/*                     }*/
/* 			}*/
/* 			cs.doSearch('#search', data, 'filter', false, function(res, _filter) {*/
/* */
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
/* 		$('#flush').click(function() {*/
/* 			$('#topTool input').val('');*/
/* 			filter = '';*/
/*             ykp.setCookie('filter','')*/
/*             getCustomerList();*/
/* 		})*/
/* 		/*$("input",".enter").onmousedown(function(){*/
/* 			var keycode = evt.witch;*/
/* 			if(keycode ==13) {*/
/* 				*/
/* 			}*/
/* 		)}*//* */
/* */
/* 		//获取所有员工*/
/* 		ykp.doAjax({*/
/* 			url: '/api/api_employees/f7',*/
/* 			method: 'post',*/
/* 			async: false,*/
/* 			data: {*/
/* 				select: 'bmm_employees.id,bmm_employees.name,bmm_employees.department'*/
/* 			},*/
/* 			success: function(res) {*/
/* 				var data = res.data;*/
/* 				$('.advandced-search').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* 				for(var i in data) {*/
/* 					employees[data[i]['id']] = data[i]['name'];*/
/* 					employees_2[data[i]['id']] = data[i]['department'];*/
/* 					$('.advandced-search').append(new Option(data[i]['name']));*/
/* 				}*/
/* 			}*/
/* 		});*/
/* */
/* 		//高级搜索*/
/* 		cs.showHeightSearch('#heightsearch', '#heightsearch1');*/
/* */
/* 		function dohSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_customer/customer',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					type: 3,*/
/* 					limit: pagesize,*/
/* 					order: order*/
/* 				}*/
/* 			}*/
/* 			cs.hSearch('.search1', data, 'filter', false, function(res, _filter) {*/
/* 				filter = _filter;*/
/* 				$('.in').removeClass('modal-backdrop');*/
/* 				$("#heightsearch1").slideUp();*/
/* 				$("#heightsearch").removeClass('active').css('z-index', '');*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$('#dynamic-table_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					return false;*/
/* 				}*/
/* 				addList(res);*/
/* 			})*/
/* 		}*/
/* */
/* 		//获取列表数据*/
/* 		//getCustomerList();*/
/* */
/* 		function getCustomerList(_filter) {*/
/*  			if(_filter != undefined) {*/
/* 				filter = _filter;*/
/* 			}*/
/* 			doSearch();*/
/* 			dohSearch();*/
/* 			ykp.list({*/
/* 				url: '/api/api_customer/customer',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					type: 3,*/
/* 					limit: pagesize,*/
/* 					filter: filter,*/
/* 					order: order*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt("暂无数据");*/
/* 						}, 1000);*/
/* 						$('#dynamic-table_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					}*/
/* 					addList(res);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//通用排序*/
/* 		/*cs.general_sort({*/
/* 			url: '/api/api_finance/loan_list',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				limit: page_size,*/
/* 				filter: filter*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '.pageBar'*/
/* 			}*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			if(res.data.items == "") {*/
/* 				setTimeout(function() {*/
/* 					ykp.prompt('暂无数据！');*/
/* 				}, 1000);*/
/* 				$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 				return false;*/
/* 			}*/
/* */
/* 		});*//* */
/* */
/* 		function addList(res) {*/
/* 			var data = res.data;*/
/* 			var dataArr = ['', 'A', 'B', 'C', 'D']*/
/* 			var industry = ['', '批发零售业', '制造业', '租赁和商务服务业', '仓储运输业', '餐饮住宿业', '信息软件业', '金融业', '房地产业', '建筑业', '教育', '文体娱乐业', '卫生和社会工作', '居民服务', '修理业', '农林牧渔业'];*/
/* 			ykp.setCookie('page_no', data.curPage, (1 / 24));*/
/* 			var html = '';*/
/* 			var ths = $('.thColor th');*/
/* 			var styles = [];*/
/* */
/* 			for(i = 0; i < ths.length; i++) {*/
/* 				styles.push(ths.eq(i).css('display'));*/
/* 			}*/
/*             //console.log(styles);*/
/*             /*for(var i in data.items){*/
/*                 data.items[i]['Remark'] = cs.getRemark(data.items[i]['Remark']);*/
/*             }*//* */
/* */
/* 			//经营范围*/
/* 			var pd_data;*/
/* 			//经营范围title*/
/* 			var range_title = [];*/
/* 			//遍历次数*/
/* 			var times;*/
/* */
/* 			for(var i = 0; i < data.items.length; i++) {*/
/* 				//获取经营范围title*/
/* 				pd_data = data.items[i]['khm_customer.range'];*/
/* 				times = Math.ceil(pd_data.length / 20);*/
/* 				for(var j = 0; j < times; j++) {*/
/* 					range_title.push(pd_data.slice(20 * j, (j + 1) * 20));*/
/* 				}*/
/* 				html += `<tr data-id = ${data.items[i]['khm_customer.id']}>*/
/* 			 			<td class="center">*/
/* 			 			<label class="pos-rel">*/
/*                                  <a> <span style="cursor: pointer" id="" class="lbl sdetail btOrange" title="详情"><i class="fa fa-info"></i></span></a>*/
/*                                  <a id="recordEdit" contentAuthority="89"  ><span style="color:#fff !important" title="编辑" class="recordEdit  lbl btBlue"><i class="fa fa-pencil-square-o"></i></span></a>*/
/*                              </label>*/
/* 			 			</td>*/
/* 			 			*/
/* 			 			<td data-num="1" style="display: ${styles[1]}">*/
/* 			 				${data.items[i]['khm_customer.customer_num']}*/
/* 			 			</td>*/
/* 			 			<td data-num="2" style="display: ${styles[2]}" data-cid="${data.items[i]['khm_customer.id']}">*/
/* 				 			<a href="#" class="customerDetail pos-rel">${data.items[i]['khm_customer.name']}</a>*/
/* 				 			<label class="pos-rel">*/
/* 				 				<i class="iconBnt fa fa-info-circle" style="color:${data.items[i]['Remark'].length > 0 ? 'red' : ''}" data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data.items[i]['Remark'])}" ></i>*/
/* 			 				 </label>*/
/* 			 			</td>*/
/* 			 			*/
/* 			 			<td data-num="3" style="display: ${styles[3]}">*/
/* 			 				${data.items[i]['khm_customer.rank'] ? dataArr[data.items[i]['khm_customer.rank']] : ''}*/
/* 			 			</td>*/
/* 			 			 <td class="center" style="display:${styles[4]};" data-num="16">*/
/*                                 ${data.items[i]['position']['pos_name']+data.items[i]['position']['pos_num']}*/
/*                             </td>*/
/* 			 			<td data-num="4" style="display: ${styles[5]}">*/
/* 			 				${data.items[i]['khm_customer.source']}*/
/* 			 			</td>*/
/* 			 	*/
/* 			 			<td data-num="6" style="display: ${styles[6]}">${data.items[i]['khm_customer.social_credit_code']}</td>*/
/* */
/* 			 			<td data-num="7" style="display: ${styles[7]}">${data.items[i]['khm_customer.corporation']}</td>*/
/* 			 			<td data-num="8" class="center" title="" style="display:${styles[8]};">*/
/* 			 				${data.items[i]['khm_customer.corporation_card']}*/
/* 			 			</td>*/
/* 			 			*/
/* 			 			<td data-num="9" style="display: ${styles[9]};text-align: right !important;"> ${data.items[i]['khm_customer.capital'] ? parseInt(data.items[i]['khm_customer.capital']).toFixed(2) : "0.00" }</td>*/
/* 			 			<td data-num="10" style="display: ${styles[10]}">${cs.getNowTime(data.items[i]['khm_customer.stablish_time'])}</td>*/
/* 			 			<td data-num="11" style="display: ${styles[11]}">${data.items[i]['khm_customer.area']}</td>*/
/* 			 			<td data-num="12" style="display: ${styles[12]}">${data.items[i]['khm_customer.address']}</td>*/
/* 			 			<td data-num="13" style="display: ${styles[13]}">${data.items[i]['khm_customer.industry'] ? industry[data.items[i]['khm_customer.industry']] : ''}</td>*/
/* 			 			<td data-num="14" style="display: ${styles[14]};" title="${range_title.join('&#13;')}">*/
/* 			 				<label style="width:100px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;">*/
/* 				 				${data.items[i]['khm_customer.range']}*/
/* 			 				</label>*/
/* 			 			</td>*/
/* 			 			<td data-num="15" style="display: ${styles[15]}">${data.items[i]['khm_customer.scale']}</td>*/
/* 			 			<td data-num="17" style="display: ${styles[16]}">${data.items[i]['khm_customer.tax_type'] == 1 ? "一般纳税人" : "小规模"}</td>*/
/* 			 		</tr>`;*/
/* */
/* 				//清空数组*/
/* 				range_title = [];*/
/* 			}*/
/* 			$('#dynamic-table_data').html(html);*/
/* 			cs.getNodes([89]);*/
/* 			editRecord();*/
/* 			//详情*/
/* 			dispDetail();*/
/* 			custom.get_custom_info();*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/* 			custom.showReamrk();*/
/* 		}*/
/* 		//自定义列表*/
/* 		cs.custorm_check('#dynamic-table', '#dynamic-table_data', true);*/
/* */
/* */
/* */
/* 		//选择弹出层来源中转介绍时，显示介绍人，*/
/* 		//选择其他时，隐藏介绍人*/
/* 		function showIntroducer(val) {*/
/* 			if($('#templateCon .source option:selected').index() == 1) {*/
/* 				$('#templateCon .introducer').show();*/
/* 			}*/
/* 			var html = [];*/
/* 			$('#templateCon .source').change(function() {*/
/* 				//console.log(1);*/
/* 				if(this.selectedIndex == 1) {*/
/* 					$('#templateCon .introducer').show();*/
/* 					if(html.length == 0) {*/
/* 						ykp.doAjax({*/
/* 							url: "/api/api_contact_book/get_contact_user",*/
/* 							method: "get",*/
/* 							data: {*/
/* 							},*/
/* 							success: function(res) {*/
/* 								var data = res.data;*/
/* */
/* 								html.push('<option  value="">请选择</option>');*/
/* 								for(var i in data) {*/
/* 									html.push('<option  value="' + data[i]['khm_contact_book.username'] + '">' + data[i]['khm_contact_book.username'] + '</option>');*/
/* 								}*/
/* 								$('#templateBox #introducer').html(html.join(','));*/
/* 								//月份*/
/* 								$('#templateCon #introducer').select2({*/
/* 									allowClear: true*/
/* 								});*/
/* 							}*/
/* 						})*/
/* 					}*/
/* 				} else {*/
/* 					$('#templateCon .introducer').hide();*/
/* 				}*/
/* 			});*/
/* */
/* 			if($('#templateCon .source').val() == '转介绍') {*/
/* 				ykp.doAjax({*/
/* 					url: "/api/api_contact_book/grid",*/
/* 					method: "post",*/
/* 					data: {*/
/*                         select:'distinct(khm_contact_book.username) as "khm_contact_book.username"',*/
/* 						limit: 999*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data.items;*/
/* */
/* 						html.push('<option  value="">请选择</option>');*/
/* 						for(var i in data) {*/
/* 							html.push('<option  value="' + data[i]['khm_contact_book.username'] + '">' + data[i]['khm_contact_book.username'] + '</option>');*/
/* 						}*/
/* 						$('#templateBox #introducer').html(html.join(','));*/
/* 						//月份*/
/* 						$('#templateCon #introducer').select2({*/
/* 							allowClear: true*/
/* 						});*/
/* 						if(val){*/
/* 							$('#templateCon #introducer').val(val).trigger("change");*/
/* 						}*/
/* 					}*/
/* 				})*/
/* 			}*/
/* 		}*/
/* */
/* 		//点击弹出层更多，显示税务信息；如果当前税务信息*/
/* 		//为显示状态则是收起*/
/* */
/* 		function showTaxMsg() {*/
/* 			$('#templateCon .more').click(function() {*/
/* 				if($(this).hasClass('retract')) {*/
/* 					$('#templateCon .taxMsg').hide();*/
/* 					$(this).text('填写更多').removeClass('retract');*/
/* 					return;*/
/* 				}*/
/* 				$(this).text('取消填写').addClass('retract');*/
/* 				$('#templateCon .taxMsg').show();*/
/* 			});*/
/* 		}*/
/* */
/* 		//编辑客户*/
/* 		function editRecord() {*/
/* 			$('#dynamic-table tbody #recordEdit').click(function() {*/
/* 				showMark('#template1');*/
/* 				$('#showBox .title').text('编辑信息');*/
/* 				// $('#showBox .title_operation').html(*/
/* 				// 	`<label class="btn btn-info btn-sm">*/
/* 				// 			添加标签*/
/* 				// 	</label>`*/
/* 				// );*/
/* */
/* 				var data_id = $(this).parents('tr').attr('data-id');*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_customer/info',*/
/* 					methods: 'post',*/
/* 					data: {*/
/* 						filter: 'khm_customer.id = ' + data_id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
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
/* */
/* */
/*                         for(let v in data) {*/
/* */
/*                             $('#templateCon').find('input,select,textarea').each(function (i,e) {*/
/*                                 if($(this).attr("title_") == v.replace(/khm_customer\./g,'') ){*/
/*                                     if($(this).attr("title_") =="stablish_time"){*/
/*                                         $(this).val(cs.getNowTime(data[v]))*/
/*                                     }else {*/
/*                                         $(this).val(data[v])*/
/*                                     }*/
/*                                 }*/
/*                             })*/
/*                         }*/
/* */
/* 						showIntroducer(data['khm_customer.introduce']);*/
/*                         //弹出层 成立日期*/
/*                         cs.timeplug()*/
/* 					}*/
/* 				})*/
/* */
/* 				showTaxMsg();*/
/* */
/* 				//保存事件*/
/* 				$('#templateCon .add').click(function() {*/
/* 					var postData = {*/
/* 						id: data_id*/
/* 					};*/
/* 					$('#templateCon').find('input,select,textarea').not('.prov,.city,.dist').each(function(i, e) {*/
/* 						postData[$(this).attr('title_')] = $(this).val();*/
/* 					});*/
/* 					var prov = $('#templateCon .prov').val();*/
/* 					var city = $('#templateCon .city').val();*/
/* 					//console.log(city ? city : '');*/
/* 					var dist = $('#templateCon .dist').val();*/
/* 					postData.area = (prov ? prov : '') + (city ? ',' + city : '') + (dist ? ',' + dist : '');*/
/* 					postData.stablish_time =postData.stablish_time ? new Date(postData.stablish_time.replace(/[年月日]/g, '/')).getTime() / 1000 :"";*/
/* 					var result = ykp.getFormData('#templateCon', true);*/
/* 					if(result.status) {*/
/* 						ykp.doAjax({*/
/* 							url: '/api/api_customer/service_edit',*/
/* 							methods: 'post',*/
/* 							data: postData,*/
/* 							success: function(res) {*/
/* 								//关闭弹出层*/
/*                                 ykp.prompt('编辑成功');*/
/* 								cs.close();*/
/* 								$('.ui-pagination-container').remove();*/
/* 								getCustomerList();*/
/* 							}*/
/* 						})*/
/* 					}*/
/* 				})*/
/* */
/* 				$('#showBox #photooptions li').eq(0).siblings().hide();*/
/* */
/* 				//弹出层 客户证件上传*/
/* 				$('#showBox #imgChosen').change(function() {*/
/* 					var file = this.files[0];*/
/* 					var fr = new FileReader();*/
/* 					fr.readAsDataURL(file);*/
/* 					fr.onloadend = function(e) {*/
/* 						$('#showBox #idphoto').attr('src', e.target.result);*/
/* 						$('#showBox #photooptions li').eq(0).siblings().show();*/
/* 					}*/
/* 				});*/
/* */
/* 				//弹出层 成立日期*/
/* 				if(!ace.vars['old_ie']) {*/
/* 					$('#templateCon #date-timepicker1').datetimepicker({*/
/* 						// format: 'YYYY-MM-DD HH:mm:ss', //use this option to display seconds*/
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
/* 					}).next().on(ace.click_event, function() {*/
/* 						$(this).prev().focus();*/
/* 					});*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		var department = [];*/
/* 		//获取所有部门*/
/* 		ykp.doAjax({*/
/* 			url: '/api/api_department/f7',*/
/* 			method: 'post',*/
/* 			asy: false,*/
/* 			data: {*/
/* 				select: 'bmm_department.id,bmm_department.name,bmm_department.cid',*/
/* 				limit: 999*/
/* 			},*/
/* 			success: function(res) {*/
/* 				var data = res.data;*/
/* 				if(data != '') {*/
/* 					department = data;*/
/* 				}*/
/* 			}*/
/* 		});*/
/* */
/* 		function dispDetail() {*/
/* 			$('#dynamic-table tbody .sdetail').click(function() {*/
/* 				showMark('#template');*/
/* 				$('#showBox .title').text('详情');*/
/* 				var cid = $(this).parents('tr').attr('data-id');*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_customer/info',*/
/* 					methods: 'post',*/
/* 					async: false,*/
/* 					data: {*/
/* 						filter: 'khm_customer.id = ' + cid*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						var srank = ['A', 'B', 'C', 'D'];*/
/* 						var status = ['未合作', '合作中', '已解决'];*/
/* 						var reason = ['无进行中的合同', '合同已解约'];*/
/* 						var industry = ['', '批发零售业', '制造业', '租赁和商务服务业', '仓储运输业', '餐饮住宿业', '信息软件业', '金融业', '房地产业', '建筑业', '教育', '文体娱乐业', '卫生和社会工作', '居民服务', '修理业', '农林牧渔业'];*/
/* 						var department_c = [];*/
/* 						var lastdetail = {};*/
/* 						for(var i in department) {*/
/* 							if(department[i]['cid'] == cid) {*/
/* 								department_c.push(department[i]);*/
/* 							}*/
/* 						}*/
/* 						ykp.doAjax({*/
/* 							url: '/api/api_customer/get_last',*/
/* 							method: 'post',*/
/* 							async: false,*/
/* 							data: {*/
/* 								customer_id: cid,*/
/* 								limit: 999*/
/* 							},*/
/* 							success: function(res) {*/
/* 								lastdetail = res.data;*/
/* 								$("#templateBox .disData0").html(data['khm_customer.customer_num']);*/
/* 								$("#templateBox .disData1").html(data['khm_customer.name']);*/
/* 								$("#templateBox .disData2").html(srank[data['khm_customer.srank'] - 1]);*/
/* 								$("#templateBox .disData3").html(data['khm_customer.source']);*/
/* 								$("#templateBox .disData4").html(data['khm_customer.introduce']);*/
/* 								$("#templateBox .disData5").html(data['khm_customer.social_credit_code']);*/
/* 								$("#templateBox .disData6").html(data['khm_customer.corporation']);*/
/* 								$("#templateBox .disData7").html(data['khm_customer.corporation_card']);*/
/* 								$("#templateBox .disData8").html(parseInt(data['khm_customer.capital']).toFixed(2));*/
/* 								$("#templateBox .disData9").html(cs.getNowTime(data['khm_customer.stablish_time']));*/
/* 								$("#templateBox .disData10").html(data['khm_customer.area']);*/
/* 								$("#templateBox .disData11").html(data['khm_customer.address']);*/
/* 								$("#templateBox .disData12").html(industry[data['khm_customer.industry']]);*/
/* 								$("#templateBox .disData13").html(data['khm_customer.range']);*/
/* 								$("#templateBox .disData14").html(data['khm_customer.scale']);*/
/* 								$("#templateBox .disData15").html(data['khm_customer.remark']);*/
/* 								$("#templateBox .disData16").html(data['khm_customer.tax_type'] == 1 ? "一般纳税人" : "小规模");*/
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
/* 								$("#templateBox .disData33").html(lastdetail.contract['status'] >= 3 ? reason[lastdetail.contract.status - 3] : '----');*/
/* 								$("#templateBox .disData34").html(lastdetail.contract['userInfo'] == '' ? '----' : lastdetail.contract['userInfo']['name']);*/
/* 								$("#templateBox .disData35").html(lastdetail.contract['userInfo'] == '' ? '----' : lastdetail.contract['userInfo']['dep_name']);*/
/* 								$("#templateBox .disData36").html(employees[data['khm_customer.create_id']]);*/
/* 								$("#templateBox .disData37").html(department[parseInt(employees_2[data['khm_customer.create_id']]) - 1] ? department[parseInt(employees_2[data['khm_customer.create_id']]) - 1]['name'] : '----');*/
/* 								$("#templateBox .disData38").html(data['khm_customer.contacts']);*/
/* 								$("#templateBox .disData39").html(data['khm_customer.phone']);*/
/*                                 $("#templateBox .disData40").html(data['khm_customer.tel']);*/
/*                                 $("#temHeader").width($("#showBox").width()-47);*/
/* 							}*/
/* 						});*/
/* 					}*/
/* 				})*/
/* 			})*/
/* 		}*/
/* 		//全选*/
/* 		checkAll();*/
/* 	});*/
/* */
/* 	var customer_type = [];*/
/* */
/* 	//获取所有公海类型*/
/* 	ykp.doAjax({*/
/* 		url: '/api/api_customer_type/f7',*/
/* 		method: 'post',*/
/* 		anysc: false,*/
/* 		data: {*/
/* 			select: 'khm_customer_type.id,khm_customer_type.name'*/
/* 		},*/
/* 		success: function(res) {*/
/* 			var data = res.data;*/
/* 			customer_type[0] = '';*/
/* 			for(var i in data) {*/
/* 				customer_type[parseInt(i) + 1] = data[i]['name'];*/
/* 			}*/
/* 		}*/
/* 	});*/
/* */
/* 	function checkAll(status) {*/
/* 		$("tbody input[name='check']").each(function(i, n) {*/
/* 			n.checked = status;*/
/* 		});*/
/* 	}*/
/* </script>*/
