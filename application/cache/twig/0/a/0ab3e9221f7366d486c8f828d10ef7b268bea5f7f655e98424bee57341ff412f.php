<?php

/* admin/auditing/auditTax.html */
class __TwigTemplate_6a3fe36b3fa1ca7ee8295fdcffacbcb53af79e6194546f9027b9e3914c24f8e5 extends Twig_Template
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
\t#templateCon label {
\t\twidth: 120px;
\t}
\t
\t#templateCon [field],
\t#templateCon [syllable] {
\t\tdisplay: inline-block;
\t\tmin-width: 121px;
\t\tpadding: 5px;
\t}
\t
\t#templateBox {
\t\tpadding-right: 0;
\t}
</style>
<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<!-- <h3 class=\"header smaller lighter blue\">报税审批</h3> -->
\t\t<div class=\"actions\" id=\"topTool\">
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<div class=\"search\">
\t\t\t\t\t<input type=\"text\" class=\"search-input\" sear=\"spm_approves.approve_code\" maxlength=\"15\" placeholder=\"审批编码\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<div class=\"search\">
\t\t\t\t\t<input type=\"text\" class=\"search-input\" sear=\"spm_approves.customer_name\" maxlength=\"15\" placeholder=\"企业名称\" autofocus>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<div class=\"search\">
\t\t\t\t\t<input type=\"text\" class=\"search-input\" sear=\"spm_approves.customer_num\" maxlength=\"15\" placeholder=\"企业编码\">
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<button id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
                    <i class=\"fa fa-search\"></i>
                </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32!important;\">
                    <i class=\"fa fa-refresh\"></i>
                </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" contentAuthority=\"196\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<button id=\"plSp\" title=\"批量审批\" class=\"btn sp btn-info btn-sm\" style=\"border-color: #32CD32 !important;background: #32CD32 !important;\">
\t\t\t\t\t<i class=\"fa fa-check-circle-o\"></i>
                </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:290px;\">
\t\t\t\t\t<a href=\"#\" class=\"\" style=\"background: #E6E6E6;\" data-status=\"all\">全部</a>
\t\t\t\t\t<a href=\"#\" class=\"\" data-status=\"1\"> 待审批</a>
\t\t\t\t\t<a href=\"#\" class=\"\" data-status=\"2\"> 已通过</a>
\t\t\t\t\t<a href=\"#\" class=\"\" data-status=\"3\"> 未通过</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"auditing-data custom_table\">
\t\t\t<table id=\"dynamic-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t<th class=\"center\">
\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t                                            <input type=\"checkbox\" class=\"ace\" onclick=\"checkAll(this.checked)\"/>
\t                                            <span class=\"lbl\"></span>
\t                                        </label>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t<th data-num=\"1\">企业名称</th>
\t\t\t\t\t\t<th data-num=\"2\">企业编码</th>
\t\t\t\t\t\t<th data-num=\"3\">税务类型</th>
\t\t\t\t\t\t<th data-num=\"4\">申报月份</th>
\t\t\t\t\t\t<th data-num=\"5\">税费数据</th>
\t\t\t\t\t\t<th data-num=\"6\">发票采集</th>
\t\t\t\t\t\t<th data-num=\"7\">负责人</th>
\t\t\t\t\t\t<th data-num=\"8\">审批号码</th>
\t\t\t\t\t\t<th data-num=\"9\">提交员工</th>
\t\t\t\t\t\t<th data-num=\"10\">提交时间</th>
\t\t\t\t\t\t<th data-num=\"11\">审批员工</th>
\t\t\t\t\t\t<th data-num=\"12\">审批结果</th>
\t\t\t\t\t\t<th data-num=\"13\">审批时间</th>
\t\t\t\t\t\t<th data-num=\"14\">审批回复</th>

\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"datalist\">

\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" id=\"num\"></div>
\t\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t\t<div id=\"pageBar\" class=\"pagination\"></div>
\t\t\t<div align=\"right\" style=\"float: right;  width: 10%;\">
\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div id=\"small-scale\" style=\"display:none;\">
\t\t<h3 style=\"margin: 20px 0px;\">工商年报基础信息</h3>
\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t<label style=\"\">社会信用代码：</label>
\t\t\t<input disabled=\"true\" type=\"text\" field=\"social_credit_code\" value=\"\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t<label style=\"\">企业名称：</label>
\t\t\t<input disabled=\"true\" type=\"text\" field=\"name\" style=\"background-color:#E6E6E6 !important;\" />
\t\t</div>
\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t<label style=\"\">法人姓名：</label>
\t\t\t<input disabled=\"true\" type=\"text\" field=\"corporation\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t<label style=\"\">法人身份证号：</label>
\t\t\t<input disabled=\"true\" type=\"text\" field=\"corporation_card\" style=\"background-color:#E6E6E6 !important;\" />
\t\t</div>
\t\t<!--一般纳税人-->
\t\t<h3 style=\"margin: 20px 0px;\">纳税基础信息</h3>
\t\t<div id=\"yiban\">

\t\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t<label style=\"\">本期销售额：</label>
\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"total\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t<label style=\"\">销项税额：</label>
\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"xTax\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t</div>
\t\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t<label style=\"\">进项税额：</label>
\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"jTax\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t<label style=\"\">上期末留底税额：</label>
\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"上期末留底税额\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t</div>
\t\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t<label style=\"\">增值税应纳税额：</label>
\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"tTax\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t<label style=\"\">本期末留抵税额：</label>
\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"lTax\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t</div>
\t\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t<label style=\"\">本年累计税负：</label>
\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"yearTax\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t<label style=\"\">免抵退：</label>
\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"免抵退\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t</div>
\t\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t<label style=\"\">进项税额转出：</label>
\t\t\t\t<input type=\"text\" disabled=\"true\" field=\"transfer_out\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t<label style=\"\">本年累计销售额：</label>
\t\t\t\t<input type=\"text\" disabled=\"true\" field=\"今年累计销售额\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t</div>
\t\t</div>
\t\t<!--小规模-->
\t\t<div id=\"xiao\">
\t\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t<label style=\"\">本期销售额：</label>
\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"total\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t\t<label style=\"\">本年累计销售额：</label>
\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"今年累计销售额\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t</div>
\t\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t<label style=\"width: 130px;\">增值税应纳税额合计  ：</label>
\t\t\t\t<input disabled=\"true\" type=\"text\" field=\"tTax\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t</div>
\t\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t<label style=\"width: 220px;\">近11个月累积应税服务销售额：</label>
\t\t\t\t<input disabled=\"true\" type=\"text\" syllable=\"11month,service\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t</div>
\t\t\t<div class=\"form_data\" style=\"margin-top:15px;\">
\t\t\t\t<label style=\"width: 220px;\">近11个月累积应税货物及劳务销售额：</label>
\t\t\t\t<input disabled=\"true\" id=\"\" type=\"text\" syllable=\"11month,goods\" style=\"background-color:#E6E6E6 !important;\" />
\t\t\t</div>
\t\t</div>
\t\t<h3>地税款明细</h3>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 税款所属时间： </label>
\t\t\t<span field=\"local_time\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 企业所得税： </label>
\t\t\t<span field=\"local_corporate_tax\"></span>
\t\t\t<label> 城建税：</label>
\t\t\t<span field=\"construction_tax\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 教育费附加： </label>
\t\t\t<span field=\"tuition\"></span>
\t\t\t<label>地方教育附加： </label>
\t\t\t<span field=\"local_tuition\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 个人所得税：</label>
\t\t\t<span field=\"individual_tax\"></span>
\t\t\t<label> 印花税：</label>
\t\t\t<span field=\"printing\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 堤围费/水利基金：</label>
\t\t\t<span field=\"water_fund\"></span>
\t\t\t<label> 其他税费：</label>
\t\t\t<span field=\"local_other_tax\"></span>
\t\t</div>

\t\t<h3>国税款明细</h3>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 税款所属时间： </label>
\t\t\t<span field=\"state_time\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 企业所得税：</label>
\t\t\t<span field=\"corporate_tax\"></span>
\t\t\t<label> 增值税：</label>
\t\t\t<span field=\"state_appreciation\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 文化事业建设费：</label>
\t\t\t<span field=\"culture\"></span>
\t\t\t<label> 消费税：</label>
\t\t\t<span field=\"excise_tax\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 其他税费：</label>
\t\t\t<span field=\"state_other_tax\"></span>
\t\t</div>
\t\t<h3>企业资产状况信息</h3>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 税款所属时间：</label>
\t\t\t<span field=\"business_time\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 资产总额（万元）：</label>
\t\t\t<span field=\"total_assets\"></span>
\t\t\t<label> 所有者权益合计：</label>
\t\t\t<span field=\"profit_total\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 营业总收入（万元）：</label>
\t\t\t<span field=\"operating_income\"></span>
\t\t\t<label> 营业中总收入（万元）：</label>
\t\t\t<span field=\"operating_income_total\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 利润总额（万元）：</label>
\t\t\t<span field=\"operating_profit\"></span>
\t\t\t<label> 负债总额：（万元）：</label>
\t\t\t<span field=\"labilities\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 净利润（万元）：</label>
\t\t\t<span field=\"net_profit\"></span>
\t\t\t<label> 纳税总额：（万元）：</label>
\t\t\t<span field=\"tax_total\"></span>
\t\t</div>
\t\t<!--<h3>税务年报信息</h3>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 税款所属时间：</label>
\t\t\t<span field=\"taxation_time\"></span>
\t\t</div>-->
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 文件：</label>
\t\t\t<span field=\"files\"></span>
\t\t</div>
\t</div>

\t<div id=\"general-taxpayer\" style=\"display:none;\">
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 企业名称： </label>
\t\t\t<span field=\"name\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label>本期销售额：</label>
\t\t\t<span syllable=\"thisMonth,total\"></span>
\t\t\t<label>销项税额：</label>
\t\t\t<span syllable=\"thisMonth,xTax\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label>进项税额： </label>
\t\t\t<span syllable=\"thisMonth,jTax\"></span>
\t\t\t<label> 上期末留底税额：</label>
\t\t\t<span syllable=\"thisMonth,lTax\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 增值税应纳税额： </label>
\t\t\t<span syllable=\"thisMonth,tTax\"></span>
\t\t\t<label> 本期末留抵税额： </label>
\t\t\t<span syllable=\"thisMonth,lTax\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 本年累计税负： </label>
\t\t\t<span field=\"\"></span>
\t\t\t<label> 免抵退：</label>
\t\t\t<span field=\"\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label>企业所得税： </label>
\t\t\t<span field=\"corporate_tax\"></span>
\t\t\t<label> 印花税：</label>
\t\t\t<span field=\"printing\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 城建税：</label>
\t\t\t<span field=\"construction_tax\"></span>
\t\t\t<label> 教育费附加：</label>
\t\t\t<span field=\"tuition\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 地方教育费附加：</label>
\t\t\t<span field=\"local_tuition\"></span>
\t\t\t<label> 个税：</label>
\t\t\t<span field=\"individual_tax\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 文化事业建设费：</label>
\t\t\t<span field=\"culture\"></span>
\t\t\t<label> 消费税：</label>
\t\t\t<span field=\"excise_tax\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 堤围费/水利基金：</label>
\t\t\t<span field=\"water_fund\"></span>
\t\t\t<label> 国税其他税费：</label>
\t\t\t<span field=\"state_other_tax\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 地税其他税费：</label>
\t\t\t<span field=\"local_other_tax\"></span>
\t\t\t<label> 本年累计销售额：</label>
\t\t\t<span field=\"今年累计销售额\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 进项税额转出：</label>
\t\t\t<span field=\"transfer_out\"></span>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label style=\"float:left;margin-right:5px;\"> 上传文件： </label>
\t\t\t<div style=\"display:inline-block;\" class=\"fileList\"></div>
\t\t</div>
\t</div>
\t<!--销项采集，进项采集-->
\t<div id=\"invoice_collect\" class=\"widget-box transparent\" id=\"recent-box\" style=\"display:none ;\">
\t\t<div style=\"width:1000px;\">
\t\t\t<div style=\"padding:10px 0;\">
\t\t\t\t<h3 style=\"font-size:16px;\">销项采集</h3>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<div class=\"layui-collapse\">
\t\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t\t<h2 class=\"layui-colla-title\">增值税专用发票</h2>
\t\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>序号</th>
\t\t\t\t\t\t\t\t\t\t\t<th>份数</th>
\t\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t\t<th>计税方式</th>
\t\t\t\t\t\t\t\t\t\t\t<th>征税项目</th>
\t\t\t\t\t\t\t\t\t\t\t<th>是否作废</th>
\t\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody id=\"x1\">
\t\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"invoice\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"money\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"amount_of_tax\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">未作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t\t<h2 class=\"layui-colla-title\">税控机动车专用发票</h2>
\t\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>序号</th>
\t\t\t\t\t\t\t\t\t\t\t<th>份数</th>
\t\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t\t<th>计税方式</th>
\t\t\t\t\t\t\t\t\t\t\t<th>征税项目</th>
\t\t\t\t\t\t\t\t\t\t\t<th>是否作废</th>
\t\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody id=\"x2\">
\t\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"invoice\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"money\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"amount_of_tax\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">未作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t\t<h2 class=\"layui-colla-title\">普通发票</h2>
\t\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>序号</th>
\t\t\t\t\t\t\t\t\t\t\t<th>份数</th>
\t\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t\t<th>计税方式</th>
\t\t\t\t\t\t\t\t\t\t\t<th>征税项目</th>
\t\t\t\t\t\t\t\t\t\t\t<th>是否作废</th>
\t\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody id=\"x3\">
\t\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"invoice\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"money\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"amount_of_tax\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">未作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t\t<h2 class=\"layui-colla-title\">未开具发票</h2>
\t\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>序号</th>
\t\t\t\t\t\t\t\t\t\t\t<th>业务类型</th>
\t\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t\t<th>计税方式</th>
\t\t\t\t\t\t\t\t\t\t\t<th>征税项目</th>
\t\t\t\t\t\t\t\t\t\t\t<th>是否作废</th>
\t\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t\t<th>税款所属期</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody id=\"x4\">
\t\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"type\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">注册公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">变更公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">股权变更</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">注册商标</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">注销公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">申请一般纳税人</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">记账报税</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"money\" />
\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"amount_of_tax\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">未作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"tax_money_period\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t\t<h2 class=\"layui-colla-title\">纳税检查调整</h2>
\t\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>序号</th>
\t\t\t\t\t\t\t\t\t\t\t<th>业务类型</th>
\t\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t\t<th>计税方式</th>
\t\t\t\t\t\t\t\t\t\t\t<th>征税项目</th>
\t\t\t\t\t\t\t\t\t\t\t<th>是否作废</th>
\t\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t\t<th>税款所属期</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody id=\"x5\">
\t\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"type\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">注册公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">变更公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">股权变更</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">注册商标</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">注销公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">申请一般纳税人</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">记账报税</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"money\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"amount_of_tax\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">未作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"tax_money_period\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t\t<h2 class=\"layui-colla-title\">地税开具其他发票及未开票销售额</h2>
\t\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>序号</th>
\t\t\t\t\t\t\t\t\t\t\t<th>份数</th>
\t\t\t\t\t\t\t\t\t\t\t<th>业务类型</th>
\t\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t\t<th>计税方式</th>
\t\t\t\t\t\t\t\t\t\t\t<th>征税项目</th>
\t\t\t\t\t\t\t\t\t\t\t<th>是否作废</th>
\t\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t\t<th>税款所属期</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody id=\"x6\">
\t\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"invoice\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"type\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">注册公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">变更公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">股权变更</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">注册商标</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">注销公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">申请一般纳税人</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">记账报税</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"money\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"amount_of_tax\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">未作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"tax_money_period\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div style=\"display:none;\" class=\"jxcj\">
\t\t\t<div style=\"padding:10px 0;\">
\t\t\t\t<h3 style=\"font-size:16px;\">进项采集</h3>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<div class=\"layui-collapse\" lay-accordion>
\t\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t\t<h2 class=\"layui-colla-title\">增值税专用发票</h2>
\t\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>序号</th>
\t\t\t\t\t\t\t\t\t\t\t<th>份数</th>
\t\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t\t<th>是否抵扣</th>
\t\t\t\t\t\t\t\t\t\t\t<th>申报所属期</th>
\t\t\t\t\t\t\t\t\t\t\t<th>认证日期</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody id=\"j1\">
\t\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"invoice\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"money\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"amount_of_tax\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"deductible\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"tax_money_period\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"date-timepicker1\" field=\"auth_time\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
\t\t\t\t\t\t\t                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t\t<h2 class=\"layui-colla-title\">税控机动车发票</h2>
\t\t\t\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>序号</th>
\t\t\t\t\t\t\t\t\t\t\t<th>份数</th>
\t\t\t\t\t\t\t\t\t\t\t<th>金额</th>
\t\t\t\t\t\t\t\t\t\t\t<th>税率</th>
\t\t\t\t\t\t\t\t\t\t\t<th>税额</th>
\t\t\t\t\t\t\t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t\t\t\t\t\t\t<th>是否抵扣</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody id=\"j2\">
\t\t\t\t\t\t\t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"invoice\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"money\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"amount_of_tax\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"deductible\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>总计</td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"label_popup\" id=\"feedBack\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t\t    box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
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
\t";
        // line 1110
        $this->loadTemplate("admin/mark.html", "admin/auditing/auditTax.html", 1110)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/auditing/auditTax.html", 1110)->display($context);
        // line 1111
        echo "</div>

<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script type=\"text/javascript\">
\t\$(function() {
\t\tif(cs.approve_authority({
\t\t\t\tname: '报税',
\t\t\t\tnodes: [196]
\t\t\t})) {
\t\t\t\$('[contentAuthority=\"196\"]').show();
\t\t}
\t\tvar cid = ykp.getCookie(\"custom_id\");
\t\tvar order = 'spm_approves.approve_result asc,spm_approves.id desc';
\t\tvar pagesize = 10;
\t\tvar customers = {};

\t\tykp.doAjax({
\t\t\turl: '/api/api_customer/f7',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tselect: 'khm_customer.id,khm_customer.name',
\t\t\t\tfilter: 'khm_customer.is_del <> 1'
\t\t\t},
\t\t\tsuccess: function(res) {
\t\t\t\tvar data = res.data;
\t\t\t\tfor(var i in data) {
\t\t\t\t\tcustomers[data[i]['id']] = data[i]['name'];
\t\t\t\t}
\t\t\t}
\t\t});

\t\tvar employees = {};
\t\t//获取所有员工
\t\tykp.doAjax({
\t\t\tasync: false,
\t\t\turl: '/api/api_employees/f7',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: 'bmm_employees.is_del <> 1',
\t\t\t\tselect: 'bmm_employees.id,bmm_employees.name'
\t\t\t},
\t\t\tsuccess: function(res) {
\t\t\t\tvar data = res.data;
\t\t\t\t\$('.advandced-search').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});
\t\t\t\tfor(var i in data) {
\t\t\t\t\temployees[data[i]['id']] = data[i]['name'];
\t\t\t\t\t\$('.advandced-search').append(new Option(data[i]['name']));
\t\t\t\t}
\t\t\t}
\t\t});

\t\tclickBtn();
\t\t//点击顶部  按钮时调用
\t\tfunction clickBtn() {
\t\t\t\$('#topTool').on('click', 'a', function(item) {
\t\t\t\tif(!\$(this).hasClass('clc')) {
\t\t\t\t\t\$(this).addClass('clc').siblings().removeClass('clc');
\t\t\t\t}
\t\t\t\tvar status = \$(this).attr('data-status');
\t\t\t\t\$(this).addClass('active').siblings().removeClass('active');
\t\t\t\tvar keyWords = [];
\t\t\t\t\$('.search-input').each(function(i, e) {
\t\t\t\t\tif(\$(this).val().trim()) {
\t\t\t\t\t\tkeyWords.push(\$(this).attr('sear') + ' like \\'%' + \$(this).val().trim() + '%\\'');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tif(\$('#search').attr('searStatsus')) {
\t\t\t\t\tgetList('', status, keyWords); //已搜索点击状态
\t\t\t\t} else {
\t\t\t\t\tgetList('', status); //未搜索点击状态
\t\t\t\t}
\t\t\t\treturn false;
\t\t\t})
\t\t}

\t\t\$('#flush').click(function() {
\t\t\t\$('#topTool input').val('');
\t\t\tfilter = '';
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetList();
\t\t})

\t\t\$('#filterBtns a').mouseover(function() {
\t\t\t\$(this).addClass('over');
\t\t})
\t\t\$('#filterBtns a').mouseout(function() {
\t\t\t\$(this).removeClass('over');
\t\t})

\t\t\$('#plSp').click(function() {
\t\t\tvar idArr = [],
\t\t\t\tn = 0;
\t\t\tStatu = false;
\t\t\tvar status = ''
\t\t\t\$('#datalist').find('input[type=\"checkbox\"]:checked').each(function(i) {
\t\t\t\t//console.log(\$(this).parents('tr').attr('data-id'));
\t\t\t\t//console.log(\$(this).parents('tr').attr('status'));
\t\t\t\tstatus = \$(this).parents('tr').attr('status') == 1 ? 2 : 1;
\t\t\t\tn += 1;
\t\t\t\tif(\$(this).parents('tr').attr('data-status') == 3 || \$(this).parents('tr').attr('data-status') == 2) {
\t\t\t\t\tykp.prompt('审批过的不能批量审批!');
\t\t\t\t\tStatu = false;
\t\t\t\t\treturn false;
\t\t\t\t} else {
\t\t\t\t\tidArr.push({
\t\t\t\t\t\tid: \$(this).parents('tr').attr('data-id'),
\t\t\t\t\t\tapprove_result: status
\t\t\t\t\t});
\t\t\t\t\tStatu = true;
\t\t\t\t}
\t\t\t})
\t\t\tif(n == 0) {
\t\t\t\tykp.prompt('没有选中审批信息！');
\t\t\t\treturn false;
\t\t\t}
\t\t\tif(Statu) {
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_approves/batch_edit',
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tdata: JSON.stringify(idArr),
\t\t\t\t\t\ttype: '18'
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tykp.prompt('审批成功');
\t\t\t\t\t\tgetList();
\t\t\t\t\t}

\t\t\t\t})
\t\t\t}
\t\t})
\t\tdoSearch();

\t\tfunction doSearch() {
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\t\$('#search').click(function() {
\t\t\t\t\$(this).attr('searStatsus', true);
\t\t\t\tvar n = 0; //选中的数量
\t\t\t\tvar w = ''; //选中的状态
\t\t\t\t\$('#topTool a').each(function() {
\t\t\t\t\tif(\$(this).hasClass('active')) {
\t\t\t\t\t\tn += 1;
\t\t\t\t\t\tw = \$(this).attr('data-status');
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\tvar keyWords = [];
\t\t\t\t\$('.search-input').each(function(i, e) {
\t\t\t\t\tif(\$(this).val().trim()) {
\t\t\t\t\t\tkeyWords.push(\$(this).attr('sear') + ' like \\'%' + \$(this).val().trim() + '%\\'');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tif(keyWords.length <= 0) {
\t\t\t\t\tykp.prompt('请输入至少一个搜索条件');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tif(n == 0) {
\t\t\t\t\tgetList('', '', keyWords);
\t\t\t\t} else {
\t\t\t\t\tif(w != 'all') {
\t\t\t\t\t\tgetList('', w, keyWords);
\t\t\t\t\t} else {
\t\t\t\t\t\tgetList('', '', keyWords);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}

\t\t\$('#changePageNum').change(function() {
\t\t\tpagesize = \$(this).val();
\t\t\tykp.setCookie('page_size',pagesize);
\t\t\tif(!cs.getSpStatus('报税')) {
\t\t\t\tykp.prompt('暂时没有开启审批功能');
\t\t\t\treturn false;
\t\t\t}
\t\t\tvar n = 0; //选中的数量
\t\t\tvar w = ''; //选中的状态
\t\t\t\$('#topTool a').each(function() {
\t\t\t\tif(\$(this).hasClass('active')) {
\t\t\t\t\tn += 1;
\t\t\t\t\tw = \$(this).attr('data-status');
\t\t\t\t}
\t\t\t})
\t\t\tvar keyWords = [];
\t\t\t\$('.search-input').each(function(i, e) {
\t\t\t\tif(\$(this).val().trim()) {
\t\t\t\t\tkeyWords.push(\$(this).attr('sear') + ' like \\'%' + \$(this).val().trim() + '%\\'');
\t\t\t\t}
\t\t\t});
\t\t\tif(n == 0) {
\t\t\t\tgetList('', '', keyWords);
\t\t\t} else {
\t\t\t\tif(w != 'all') {
\t\t\t\t\tgetList('', w, keyWords);
\t\t\t\t} else {
\t\t\t\t\tgetList('', '', keyWords);
\t\t\t\t}
\t\t\t}
\t\t\t//\t\t\tgetCustomerList(1);
\t\t})

\t\t//获取报税审批数据
\t\tgetList();

\t\tfunction getList(current, clickstatus, keyWords) {
\t\t\tif(!cs.getSpStatus('报税')) {
\t\t\t\tykp.prompt('暂时没有开启审批功能');
\t\t\t\treturn false;
\t\t\t}
\t\t\tcurrent = current ? current : 1;
\t\t\tvar data = {
\t\t\t\tpage_size: pagesize,
\t\t\t\tcurrent: current,
\t\t\t\ttype: 18,
\t\t\t\torder: order,
\t\t\t\tcontentId: \"#datalist\", //默认排序
\t\t\t\tinitOrder: \"\", //初始化sort
\t\t\t\tdefaultOrder: order,
\t\t\t\tparams: [{
\t\t\t\t\tid: \"#dynamic-table\",
\t\t\t\t\tfield: [\"\", \"\", \"spm_approves.customer_id\", \"khm_customer.customer_num\", \"\", \"\", \"\", \"\", \"\", \"spm_approves.approve_code\", \"\", \"spm_approves.submit_time\", \"spm_approves.submit_employee_name\",
\t\t\t\t\t\t\"\", \"spm_approves.approve_result\", \"spm_approves.approve_time\", \"spm_approves.approve_reply\"
\t\t\t\t\t]
\t\t\t\t}]
\t\t\t}
\t\t\t//判断是否有过滤   
\t\t\tif(clickstatus && !isNaN(clickstatus)) {
\t\t\t\tdata.approve_result = clickstatus;
\t\t\t}
\t\t\tif(keyWords) {
\t\t\t\tdata.search = keyWords
\t\t\t}
\t\t\tif(cid) {
\t\t\t\tdata.search = 'spm_approves.customer_name  ' + ' like \\'%' + cid + '%\\'';
\t\t\t}

\t\t\tcs.spList(data, function(res) {
\t\t\t\t//console.log(res)
\t\t\t\tvar data = res.data.items;
\t\t\t\tif(data.length == 0) {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"color:#7d7d7d !important;text-align:center !important;\" class=\"page\">暂无数据</div></td></tr>');

\t\t\t\t} else {
\t\t\t\t\t//审批权限为true可以审批,为false不可审批
\t\t\t\t\tvar spApp = cs.approve_authority({
\t\t\t\t\t\tname: '报税',
\t\t\t\t\t\tnodes: [197]
\t\t\t\t\t});
\t\t\t\t\tvar cxApp = cs.approve_authority({
\t\t\t\t\t\tname: '报税',
\t\t\t\t\t\tnodes: [260]
\t\t\t\t\t});

\t\t\t\t\tvar styles = [];
\t\t\t\t\t\$('#dynamic-table th').each(function(i, e) {
\t\t\t\t\t\tstyles.push(\$(this).css('display'));
\t\t\t\t\t});

\t\t\t\t\tvar status = ['', '待审批', '已通过', '未通过']; //审核状态
\t\t\t\t\tvar statusColor = ['', '#dfba49', '#45b6af', '#f3565d'];
\t\t\t\t\tvar content = '';

\t\t\t\t\tvar _data = {}; //报税数据

\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t_data[i] = data[i]['submitted_data']['list'];

\t\t\t\t\t\tcontent += `<tr tax_type=\"\${data[i]['submitted_data']['service_info']['khm_customer.tax_type']}\" data-time=\"\${data[i]['submitted_data']['service_info']['jzm_service_info.time']}\" customer_id=\"\${data[i]['spm_approves.customer_id']}\" data-id=\"\${data[i]['spm_approves.id']}\" service-id=\"\${data[i]['submitted_data']['service_info']['jzm_service_info.id']}\"] status=\"\${data[i]['spm_approves.approve_result']}\">
\t\t\t\t\t\t\t\t <td class=\"center\">
                                <label class=\"pos-rel\">
                                    <input type=\"checkbox\" name=\"check\" class=\"ace\"/>
                                    <span class=\"lbl\"></span>
                                </label>
                            </td>
\t\t\t\t\t\t <td>
\t\t\t\t\t\t <label class=\"pos-rel\">
                        <a href=\"#\" class=\"sp btOrange\" data-status = \"1\" style=\"display: \${cxApp ? (data[i]['spm_approves.approve_result'] == 2 ? 'inline-block' : 'none') : 'none'};color:#fff !important\" contentAuthority=\"260\" title=\"撤销\"><i class=\"fa fa-rotate-left\"></i></a>
                        <a href=\"#\" class=\"sp btGreen\" data-status = \"2\" style=\"display: \${spApp ? (data[i]['spm_approves.approve_result'] == 1 ?'inline-block' : 'none') : 'none'};color:#fff !important\" title=\"通过\"><i class=\"fa fa-check-circle-o\"></i></a>
                    \t <a href=\"#\" class=\"sp btRed\" data-status = \"3\" style=\"display: \${spApp ? (data[i]['spm_approves.approve_result'] == 1 ?'inline-block' : 'none') : 'none'};color:#fff !important\" contentAuthority=\"197\" title=\"驳回\"><i class=\"fa fa-times-circle\"></i></a>
                    \t</labe>
                    </td>

                    <td data-num=\"1\" style=\"display:\${styles[2]}\" data-cid=\"\${data[i]['spm_approves.customer_id']}\">
                    \t
                    \t<a href=\"#\" class=\"customerDetail pos-rel\">\${data[i]['spm_approves.customer_name']}</a>
                    \t<label class=\"pos-rel\">
\t\t\t\t \t\t\t\t<i class=\"iconBnt fa fa-info-circle\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i>
\t\t\t \t\t\t\t </label>
                    </td>
                    
                    <td data-num=\"2\" style=\"display:\${styles[3]}\">\${data[i]['submitted_data']['service_info']['khm_customer.customer_num']}</td>
                    <td data-num=\"3\" style=\"display:\${styles[4]}\">\${data[i]['submitted_data']['service_info']['khm_customer.tax_type'] == 1 ? '一般纳税人' : '小规模'}</td>
                    <td data-num=\"4\" style=\"display:\${styles[5]}\">\${data[i].submitted_data.service_info['jzm_service_info.time']}</td>
                    <td data-num=\"5\" style=\"display:\${styles[6]}\"><a href=\"javascript:;\" style=\"text-decoration:none;\" class=\"taxData pos-rel\" tax_type=\"\${data[i]['submitted_data']['service_info']['khm_customer.tax_type']}\" >查看</a></td>

                    <td data-num=\"6\" style=\"display:\${styles[7]}\"><a href=\"javascript:;\" style=\"text-decoration:none;\" class=\"collect pos-rel\" tax_type=\"\${data[i]['submitted_data']['service_info']['khm_customer.tax_type']}\" >查看</a></td>

                    <td data-num=\"7\" style=\"display:\${styles[8]}\">\${data[i].submitted_data['service_info']['jzm_service_info.fuze_id'] != '0' ? employees[data[i].submitted_data['service_info']['jzm_service_info.fuze_id']]  : '无'}</td>
                  \t<td data-num=\"8\" style=\"display:\${styles[9]}\">\${data[i]['spm_approves.approve_code']}</td>
                    <td data-num=\"9\" style=\"display:\${styles[10]}\"><a href=\"#\">\${data[i]['approve_employee_name'] ? data[i]['approve_employee_name']['name'] : \"\"}</a></td>
                    <td data-num=\"10\" style=\"display:\${styles[11]}\">\${cs.getNowTime(data[i]['spm_approves.submit_time'],true)}</td>
                    <td data-num=\"11\" style=\"display:\${styles[12]}\"><a href=\"#\">\${employees[data[i]['spm_approves.approve_employee_id']] || \"无\"}</a></td>

                    <td data-num=\"12\" style=\"display:\${styles[13]}\"><label class=\"label\" style=\" background:\${statusColor[data[i]['spm_approves.approve_result']]} \">\${status[data[i]['spm_approves.approve_result']]}</label></td>
                    <td data-num=\"13\" style=\"display:\${styles[14]}\">\${data[i]['spm_approves.approve_time'] != 0 ? cs.getNowTime(data[i]['spm_approves.approve_time'],true) : ''}</td>

                    <td data-num=\"14\" style=\"display:\${styles[15]}\">\${data[i]['spm_approves.approve_reply']}</td>
                   
                </tr>`;
\t\t\t\t\t}

\t\t\t\t\t\$('#datalist').html(content);

\t\t\t\t\t//税费数据
\t\t\t\t\ttaxData(_data);

\t\t\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\t\t\tcustom.showReamrk();
\t\t\t\t\tcustom.get_custom_info();
\t\t\t\t\t\$(\"#datalist tr\").find('.sp').click(function() {
\t\t\t\t\t\tvar status = \$(this).attr('data-status');
\t\t\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\t\t\tif(status != '0') {
\t\t\t\t\t\t\tchangeStatus(status, id);
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t}
\t\t\t\tlayui.use('element', function() {
\t\t\t\t\tvar element = layui.element;
\t\t\t\t\tinvoice_detail(_data, element);
\t\t\t\t});
\t\t\t}, '报税')

\t\t\t//使用Layui面板

\t\t\tykp.setCookie(\"custom_id\", \"\", (1 / 24));

\t\t\t//加载报税数据
\t\t\tfunction taxData(data) {
\t\t\t\t\$(\".taxData\").click(function() {
\t\t\t\t\tvar id = \$(this).parents('tr').attr('service-id');
\t\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\t\tvar type = \$(this).attr('tax_type');
\t\t\t\t\t//生成弹税费数据出层
\t\t\t\t\tgeneratePop(type, data[index], id);

\t\t\t\t\tvar customer_name = \$(this).parents('tr').find('[data-num=\"1\"] a').text();

\t\t\t\t\tvar customer_id = \$(this).parents('tr').attr('customer_id').trim();
\t\t\t\t\tvar year_month = \$(this).parents('tr').find('[data-num=\"6\"] a').text();
\t\t\t\t\tvar cus_month = \$(this).parents('tr').attr('data-time'); //服务月份
\t\t\t\t\tvar _type = \$(this).parents('tr').attr('tax_type');
\t\t\t\t\tvar dtime = \"\";
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_service/get_tax_info',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tservice_id: id
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\t\t//\t\t\t\t\t\t\tshowMark(temp);
\t\t\t\t\t\t\tvar temHtml = \$('#templateBox4').html();
\t\t\t\t\t\t\t\$('#templateBox4').children().remove();
\t\t\t\t\t\t\t\$('#templateBox4').html(temHtml);
\t\t\t\t\t\t\tcs.getYearAndMonth('2015-1-1', '2025-12-31', '#templateCon .addtime');
\t\t\t\t\t\t\tcs.getYear('2015', '2025', '#templateCon .addtime1', 'year');
\t\t\t\t\t\t\t\$('#templateCon .select2').css('width', '500px')
\t\t\t\t\t\t\t\$('#templateCon #addtime').select2({});
\t\t\t\t\t\t\t//所属时间
\t\t\t\t\t\t\tvar arr = cus_month.split('');
\t\t\t\t\t\t\tarr.splice(4, 0, '.');

\t\t\t\t\t\t\t\$('#templateCon').find('select[field=local_time]').val(cs.getPreMonth(arr.join(''))).trigger('change');
\t\t\t\t\t\t\tdtime = data['上个季度']['start'];
\t\t\t\t\t\t\t\$('#templateCon').find('select[field=state_time2]').val(data['上个季度']['start']).trigger('change');
\t\t\t\t\t\t\t\$('#templateCon').find('select[field=state_time1]').val(data['上个季度']['end']).trigger('change');
\t\t\t\t\t\t\t\$('#templateCon').find('select[field=business_time2]').val(\"\").trigger('change');
\t\t\t\t\t\t\t\$('#templateCon').find('select[field=business_time1]').val(\"\").trigger('change');

\t\t\t\t\t\t\t\$('#templateCon').find('select[field=taxation_time2]').val(\"\").trigger('change');
\t\t\t\t\t\t\t\$('#templateCon').find('select[field=taxation_time1]').val(\"\").trigger('change');

\t\t\t\t\t\t\t//修改所属时间
\t\t\t\t\t\t\tchangeTime()

\t\t\t\t\t\t\t\$('#showBox .title').text(customer_name + '（' + cus_month + '）税费数据');

\t\t\t\t\t\t\t\$('#templateCon').data('flag', '1');
\t\t\t\t\t\t\t\$('#templateCon .close_get').unbind('click').click(function() {
\t\t\t\t\t\t\t\t\$('#templateCon').data('flag', '2');
\t\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\$('#templateCon .item_form').attr('customer_name', customer_name);
\t\t\t\t\t\t\t\$('#templateCon .item_form').attr('time', year_month);
\t\t\t\t\t\t\t\$('#templateCon form').attr('customer_id', customer_id.trim());
\t\t\t\t\t\t\t//\t\t\t\t\t\t\tget_tax_details(id);
\t\t\t\t\t\t\t//\t\t\t\t\t\t\tsave();
\t\t\t\t\t\t\t\$('#templateCon input').eq(0).val(customer_name);
\t\t\t\t\t\t\tfor(var i in data['customerInfo']) {
\t\t\t\t\t\t\t\t\$('#templateCon input').each(function() {
                                    if(\$(this).attr('field') == i) {
\t\t\t\t\t\t\t\t\t\t\$(this).val(data['customerInfo'][i]);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tfor(var i in data['thisMonth']) {
\t\t\t\t\t\t\t\t\$('#templateCon input').each(function() {
\t\t\t\t\t\t\t\t\tif(\$(this).attr('field') == i) {
\t\t\t\t\t\t\t\t\t\t\$(this).val(data['thisMonth'][i]);
\t\t\t\t\t\t\t\t\t} else if(\$(this).attr('field') == \"免抵退\") {
\t\t\t\t\t\t\t\t\t\t\$(this).val(data[\"免抵退\"]);
\t\t\t\t\t\t\t\t\t}  else if(\$(this).attr('field') == \"上期末留底税额\") {
\t\t\t\t\t\t\t\t\t\t\$(this).val(data['上期末留抵税额']);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t}


\t\t\t\t\t\t\tvar xTax = \$('#templateCon input[field=xTax]'); //销项税额
\t\t\t\t\t\t\tvar jTax = \$('#templateCon input[field=jTax]'); //进项税额
\t\t\t\t\t\t\tvar tTax = \$('#templateCon input[field=tTax]'); //增值税应纳税额
\t\t\t\t\t\t\tvar lTax = \$('#templateCon input[field=lTax]'); //本期末留底税

                           /* var _lTax = \$('#templateCon input[field=今年累计销售额]'); //本年累计销售额
\t\t\t\t\t\t\tif((parseInt(data['thisMonth']['xTax']) - (parseInt(data['thisMonth']['jTax']) + parseInt(data['上期末留抵税额'])) > 0)) {
\t\t\t\t\t\t\t\ttTax.val(Math.abs(parseInt(data['thisMonth']['xTax']) - (parseInt(data['thisMonth']['jTax']) + parseInt(data['上期末留抵税额']))));
                                lTax.val(0)
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tlTax.val(Math.abs(parseInt(data['thisMonth']['xTax']) - (parseInt(data['thisMonth']['jTax']) + parseInt(data['上期末留抵税额']))))
                                tTax.val(0)
\t\t\t\t\t\t\t}*/

                            var _lTax = \$('#templateCon input[field=今年累计销售额]'); //本年累计销售额
                            if((parseInt(xTax.val()) - (parseInt(jTax.val()) + parseInt(data['上期末留抵税额'])) > 0)) {
                                tTax.val(Math.abs(parseInt(xTax.val()) - (parseInt(jTax.val()) + parseInt(data['上期末留抵税额']))));
                                lTax.val(0)
                            } else {
                                lTax.val(Math.abs(parseInt(xTax.val()) - (parseInt(jTax.val()) + parseInt(data['上期末留抵税额']))))
                                tTax.val(0)
                            }

                            _lTax.val(data[\"今年累计销售额\"]);
\t\t\t\t\t\t\tif(data['jzm_tax_details']['state_time']) {
\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=state_time2]').val(data['jzm_tax_details']['state_time'].split(',')[0]).trigger('change');
\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=state_time1]').val(data['jzm_tax_details']['state_time'].split(',')[1]).trigger('change');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(data['jzm_tax_details']['business_time']) {
\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=business_time2]').val(data['jzm_tax_details']['business_time'].split(',')[0]).trigger('change');
\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=business_time1]').val(data['jzm_tax_details']['business_time'].split(',')[1]).trigger('change');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(data['jzm_tax_details']['taxation_time']) {
\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=taxation_time2]').val(data['jzm_tax_details']['taxation_time'].split('')[0]).trigger('change');
\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=taxation_time1]').val(data['jzm_tax_details']['taxation_time'].split('')[1]).trigger('change');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(_type == 1) {
\t\t\t\t\t\t\t\t\$('#templateCon #xiao').remove();

\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\$('#templateCon #yiban').remove();
\t\t\t\t\t\t\t\tfor(var i in data['customerInfo']) {
\t\t\t\t\t\t\t\t\t\$('#templateCon input').each(function() {
\t\t\t\t\t\t\t\t\t\tif(\$(this).attr('field') == i) {
\t\t\t\t\t\t\t\t\t\t\t\$(this).val(data['customerInfo'][i]);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\$('#templateCon [syllable]').each(function(i, e) {
\t\t\t\t\t\t\t\t\tfield = \$(this).attr('syllable').split(',');
\t\t\t\t\t\t\t\t\t\$(this).val(data[field[0]][field[1]]);
\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\tfor(var i in data['thisMonth']) {
\t\t\t\t\t\t\t\t\t\$('#templateCon input').each(function() {

\t\t\t\t\t\t\t\t\t\tif(\$(this).attr('field') == i) {
\t\t\t\t\t\t\t\t\t\t\t\$(this).val(data['thisMonth'][i]);
\t\t\t\t\t\t\t\t\t\t} else if(\$(this).attr('field') == \"免抵退\") {
\t\t\t\t\t\t\t\t\t\t\t\$(this).val(data[\"免抵退\"]);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif(data['jzm_tax_details']['state_time']) {
\t\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=state_time2]').val(data['jzm_tax_details']['state_time'].split(',')[0]).trigger('change');
\t\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=state_time1]').val(data['jzm_tax_details']['state_time'].split(',')[1]).trigger('change');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif(data['jzm_tax_details']['business_time']) {
\t\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=business_time2]').val(data['jzm_tax_details']['business_time'].split(',')[0]).trigger('change');
\t\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=business_time1]').val(data['jzm_tax_details']['business_time'].split(',')[1]).trigger('change');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif(data['jzm_tax_details']['taxation_time']) {
\t\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=taxation_time2]').val(data['jzm_tax_details']['taxation_time'].split(',')[0]).trigger('change');
\t\t\t\t\t\t\t\t\t\$('#templateCon').find('select[field=taxation_time1]').val(data['jzm_tax_details']['taxation_time'].split(',')[1]).trigger('change');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tcs.upload1({
\t\t\t\t\t\t\t\tel: \"#templateBox #upload\",
\t\t\t\t\t\t\t\tael: \"#templateBox #fileBox\"
\t\t\t\t\t\t\t})
\t\t\t\t\t\t}
\t\t\t\t\t})

\t\t\t\t\t//\t\t\t\t\tgetTaxInfo();
\t\t\t\t})
\t\t\t}

\t\t\tfunction changeTime() {
\t\t\t\t\$('#templateCon').find('select[field=state_time2],select[field=business_time2],select[field=taxation_time2]').change(function() {
\t\t\t\t\tvar curval = parseInt(\$(this).val().replace(/\\./, ''));
\t\t\t\t\t\$('#templateCon').find('select[field=' + (\$(this).attr('field').replace(/2/, '1')) + ']').val('').trigger('change');
\t\t\t\t})
\t\t\t}

\t\t\t//发票采集详情
\t\t\tfunction invoice_detail(data, element) {
\t\t\t\t\$('.collect').click(function() {
\t\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\t\tvar tax_type = \$(this).attr('tax_type');
\t\t\t\t\tvar service_id = \$(this).attr('service-id');

\t\t\t\t\tshowMark('#invoice_collect');
\t\t\t\t\telement.init('collapse');
\t\t\t\t\t\$('#showBox .title').text('发票采集详情');
\t\t\t\t\tif(tax_type == 1) {
\t\t\t\t\t\t\$('#templateCon .jxcj').show();
\t\t\t\t\t}

\t\t\t\t\t//获取发票采集数据
\t\t\t\t\tgetInvoiceCollectData(data[index], element);
\t\t\t\t});
\t\t\t}

\t\t\t//获取发票采集数据
\t\t\tfunction getInvoiceCollectData(data, element) {
\t\t\t\tvar type = ['注册公司', '变更公司', '股权变更', '注册商标', '注销公司', '申请一般纳税人', '记账报税']; //业务类型
\t\t\t\tvar tax_way = ['一般计税', '简单征收', '免税', '免抵退']; //计税方式
\t\t\t\tvar tax_item = ['应税货物', '应税劳务', '应税服务不动产']; //征税项目

\t\t\t\tvar _ztype;
\t\t\t\tvar model;
\t\t\t\tvar _model;
\t\t\t\tvar html;

\t\t\t\tfor(var i in data) {
\t\t\t\t\tif(!data[i]['ztype'] || data[i]['ztype'] === '0') {
\t\t\t\t\t\tcontinue;
\t\t\t\t\t}
\t\t\t\t\t_ztype = data[i]['ztype'];
\t\t\t\t\tmodel = \$('#templateCon #' + _ztype).find('.model').html();;
\t\t\t\t\t_model = \$(model);
\t\t\t\t\thtml = \$('<tr></tr>');
\t\t\t\t\tif(!\$('#templateCon #' + _ztype).parents('.layui-colla-content').hasClass('layui-show')) {
\t\t\t\t\t\t\$('#templateCon #' + _ztype).parents('.layui-colla-content').addClass('layui-show');
\t\t\t\t\t}

\t\t\t\t\t_model.eq(0).text(\$('#templateCon #' + _ztype).find('tr').length);
\t\t\t\t\t_model.find('[field]').each(function(index, element) {
\t\t\t\t\t\tif(\$(this).attr('field') == 'charge_mode') {
\t\t\t\t\t\t\t\$(this).parent().text(data[i]['charge_mode'] != 0 ? tax_way[--data[i]['charge_mode']] : '');
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('field') == 'tax_project') {
\t\t\t\t\t\t\t\$(this).parent().text(data[i]['tax_project'] != 0 ? tax_item[--data[i]['tax_project']] : '');
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('field') == 'is_invalid') {
\t\t\t\t\t\t\t\$(this).parent().text(data[i]['is_invalid'] != 0 ? '作废' : '未作废');
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('field') == 'whether_tax') {
\t\t\t\t\t\t\t\$(this).parent().text(data[i]['whether_tax'] != 0 ? '是' : '否');
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('field') == 'deductible') {
\t\t\t\t\t\t\t\$(this).parent().text(data[i]['deductible'] != 0 ? '是' : '否');
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('field') == 'auth_time') {
\t\t\t\t\t\t\t\$(this).parent().text(data[i]['auth_time'] != 0 ? cs.getNowTime(data[i]['auth_time']) : '');
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('field') == 'type') {
\t\t\t\t\t\t\t\$(this).parent().text(data[i]['type'] != 0 ? type[--data[i]['type']] : '');
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('field') == 'tax_rate') {
\t\t\t\t\t\t\t\$(this).parent().text(data[i]['tax_rate'] + '%');
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}

\t\t\t\t\t\t\$(this).parent().text(data[i][\$(this).attr('field')]);
\t\t\t\t\t});

\t\t\t\t\thtml.append(_model);
\t\t\t\t\t\$('#templateCon #' + _ztype).append(html);
\t\t\t\t}

\t\t\t\tvar total = 0;
\t\t\t\t\$('#templateCon [total]').each(function(index, element) {
\t\t\t\t\t\$(element).parents('table').find('tbody tr').not('.model').find('td:eq(' + \$(element).index() + ')').each(function(i, e) {
\t\t\t\t\t\tconsole.log(i)
\t\t\t\t\t\ttotal += \$(e).text().trim() ? parseFloat(\$(e).text().trim()) : 0;
\t\t\t\t\t});
\t\t\t\t\t\$(element).text(total);
\t\t\t\t\ttotal = 0;
\t\t\t\t});

\t\t\t\telement.init('collapse');
\t\t\t}

\t\t\t//税费数据弹出层
\t\t\tfunction generatePop(type, data, id) {
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_service/get_tax_details',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tservice_id: id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\tvar field = '';
\t\t\t\t\t\tshowMark('#small-scale');

\t\t\t\t\t\t\$('#showBox .title').text('税费数据');
\t\t\t\t\t\tvar arr = [];
\t\t\t\t\t\t\$('#templateCon [field]').each(function(index, element) {

\t\t\t\t\t\t\tif(\$(this).attr('field') == \"state_time\" || \$(this).attr('field') == \"business_time\" ||\$(this).attr('field') == \"taxation_time\") {
\t\t\t\t\t\t\t\t\$(this).text(data[\$(this).attr('field')] ? (data[\$(this).attr('field')] != ',' ? data[\$(this).attr('field')].split(',')[0] + \"至\" + data[\$(this).attr('field')].split(',')[1] : \"\") : \"\");
\t\t\t\t\t\t\t}else if(\$(this).attr('field') == \"local_time\"){
                                \$(this).text(data[\$(this).attr('field')] ? (data[\$(this).attr('field')] != ',' && data[\"local_time\"] && data[\"local_time\"] != \"null\"  ? JSON.parse(data[\"local_time\"]).join(' ')  : \"\") : \"\" );
\t\t\t\t\t\t\t} else if(\$(this).attr('field') == \"files\") {
\t\t\t\t\t\t\t\tif(data[\$(this).attr('field')]) {
\t\t\t\t\t\t\t\t\tJSON.parse(data[\$(this).attr('field')]).forEach(function(item) {
\t\t\t\t\t\t\t\t\t\tarr.push('<p style=\"padding-left: 2px;\"><a href=\"' + item.url + '\" data-url=\"' + item.url + '\">' + item.name + '</a></p>')
\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\$(this).html(arr.join(','));
\t\t\t\t\t\t\t\t\t/*\$(this).find('a').click(function() {
\t\t\t\t\t\t\t\t\t\tvar name = \$(this).text();
\t\t\t\t\t\t\t\t\t\tvar url = \$(this).attr('data-url');
\t\t\t\t\t\t\t\t\t\twindow.open(ykp.api_url + \"/api/api_common/update_file_name?file_url=\" + url + \"&name=\" + name)
\t\t\t\t\t\t\t\t\t})*/
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}else if(\$(this).attr('field') == \"state_other_tax\"){
                                \$(this).text(data[\$(this).attr('field')]);

                            }else {
//\t\t\t\t\t\t\t\tconsole.log(\$(this).attr('field'));
\t\t\t\t\t\t\t\t\$(this).text(data[\$(this).attr('field')]);
\t\t\t\t\t\t\t\t\$(this).val(data[\$(this).attr('field')]);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tvar arr = [];
\t\t\t\tif(data['files']) {
\t\t\t\t\tJSON.parse(data['files']).forEach(function(item) {
\t\t\t\t\t\tarr.push('<p style=\"padding-left: 2px;\"><a href=\"' + item.url + '\">' + item.name + '</a></p>')
\t\t\t\t\t})

\t\t\t\t\t\$('#templateCon .fileList').append(arr.join(','));
\t\t\t\t}

\t\t\t}

\t\t\tfunction getTaxInfo(id) {

\t\t\t\t//\t\t\t\t\$(\".taxData\").click(function() {
\t\t\t\t//\t\t\t\t\t
\t\t\t\t//\t\t\t\t\t//生成弹税费数据出层
\t\t\t\t//\t\t\t\t})

\t\t\t}

\t\t\tfunction changeStatus(status, id) {
\t\t\t\tvar data = {
\t\t\t\t\turl: '/api/api_approves/edit_status',
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tid: id,
\t\t\t\t\t\tapprove_result: status
\t\t\t\t\t}
\t\t\t\t}
console.log(status)
\t\t\t\tif(status == 3) {
\t\t\t\t\t\$('#feedBack').show();
\t\t\t\t\t\$('#feedBack .hold').click(function() {
\t\t\t\t\t\tvar approve_reply = \$('#feedBack').find('input').val();
\t\t\t\t\t\tif(approve_reply == '') {
\t\t\t\t\t\t\tykp.prompt('不能为空！');
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}else {
\t\t\t\t\t\t\tykp.prompt('驳回成功！');
\t\t\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\tdata.data.approve_reply = approve_reply.trim();
\t\t\t\t\t\tdata.data.approve_reply = approve_reply;
\t\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t})
\t\t\t\t\tcs.closePop();
\t\t\t\t} else if(status == 1) {
\t\t\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\tlayer.confirm('确认撤销审批？', function(flag) {
\t\t\t\t\t\t\tif(flag) {
\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t})
\t\t\t\t}else if(status == 2){
\t\t\t\t\tykp.prompt('审批通过！');
\t\t\t\t\tsetStatus(data);
\t\t\t\t} else {
\t\t\t\t\tsetStatus(data);
\t\t\t\t}
\t\t\t}
\t\t}

\t\t//自定义table
\t\tcs.custorm_check('#dynamic-table', '#datalist', true);

\t\tfunction setStatus(data) {
\t\t\tykp.doAjax({
\t\t\t\turl: data.url,
\t\t\t\tmethods: data.methods,
\t\t\t\tdata: data.data,
\t\t\t\tsuccess: function(res) {
\t//\t\t\t\tykp.prompt('审批成功!');
\t\t\t\t\tgetList();
\t\t\t\t}
\t\t\t})
\t\t};
\t\$('.close_get ').click(function(){
\t\tgetList()
\t    })
\t  });
    
\tfunction checkAll(status) {
\t\t\$(\"tbody input[name='check']\").each(function(i, n) {
\t\t\tn.checked = status;
\t\t});
\t}

</script>";
    }

    public function getTemplateName()
    {
        return "admin/auditing/auditTax.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1134 => 1111,  1130 => 1110,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	#templateCon label {*/
/* 		width: 120px;*/
/* 	}*/
/* 	*/
/* 	#templateCon [field],*/
/* 	#templateCon [syllable] {*/
/* 		display: inline-block;*/
/* 		min-width: 121px;*/
/* 		padding: 5px;*/
/* 	}*/
/* 	*/
/* 	#templateBox {*/
/* 		padding-right: 0;*/
/* 	}*/
/* </style>*/
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<!-- <h3 class="header smaller lighter blue">报税审批</h3> -->*/
/* 		<div class="actions" id="topTool">*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<div class="search">*/
/* 					<input type="text" class="search-input" sear="spm_approves.approve_code" maxlength="15" placeholder="审批编码">*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<div class="search">*/
/* 					<input type="text" class="search-input" sear="spm_approves.customer_name" maxlength="15" placeholder="企业名称" autofocus>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<div class="search">*/
/* 					<input type="text" class="search-input" sear="spm_approves.customer_num" maxlength="15" placeholder="企业编码">*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<button id="search" title="搜索" class="btn btn-info btn-sm">*/
/*                     <i class="fa fa-search"></i>*/
/*                 </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32!important;">*/
/*                     <i class="fa fa-refresh"></i>*/
/*                 </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" contentAuthority="196" style=" float: left;margin-right: 5px;">*/
/* 				<button id="plSp" title="批量审批" class="btn sp btn-info btn-sm" style="border-color: #32CD32 !important;background: #32CD32 !important;">*/
/* 					<i class="fa fa-check-circle-o"></i>*/
/*                 </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<div id="filterBtns" style="display:inline-block;width:290px;">*/
/* 					<a href="#" class="" style="background: #E6E6E6;" data-status="all">全部</a>*/
/* 					<a href="#" class="" data-status="1"> 待审批</a>*/
/* 					<a href="#" class="" data-status="2"> 已通过</a>*/
/* 					<a href="#" class="" data-status="3"> 未通过</a>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="auditing-data custom_table">*/
/* 			<table id="dynamic-table">*/
/* 				<thead>*/
/* 					<tr class="thColor">*/
/* 						<th class="center">*/
/* 							<label class="pos-rel">*/
/* 	                                            <input type="checkbox" class="ace" onclick="checkAll(this.checked)"/>*/
/* 	                                            <span class="lbl"></span>*/
/* 	                                        </label>*/
/* 						</th>*/
/* 						<th>操作</th>*/
/* 						<th data-num="1">企业名称</th>*/
/* 						<th data-num="2">企业编码</th>*/
/* 						<th data-num="3">税务类型</th>*/
/* 						<th data-num="4">申报月份</th>*/
/* 						<th data-num="5">税费数据</th>*/
/* 						<th data-num="6">发票采集</th>*/
/* 						<th data-num="7">负责人</th>*/
/* 						<th data-num="8">审批号码</th>*/
/* 						<th data-num="9">提交员工</th>*/
/* 						<th data-num="10">提交时间</th>*/
/* 						<th data-num="11">审批员工</th>*/
/* 						<th data-num="12">审批结果</th>*/
/* 						<th data-num="13">审批时间</th>*/
/* 						<th data-num="14">审批回复</th>*/
/* */
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody id="datalist">*/
/* */
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 		<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 			<div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
/* 			<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 			<div id="pageBar" class="pagination"></div>*/
/* 			<div align="right" style="float: right;  width: 10%;">*/
/* 				<select style="width: 100px;" id="changePageNum">*/
/* 					<option value="10">每页10条</option>*/
/* 					<option value="20">每页20条</option>*/
/* 					<option value="50">每页50条</option>*/
/* 					<option value="100">每页100条</option>*/
/* 					<option value="200">每页200条</option>*/
/* 				</select>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div id="small-scale" style="display:none;">*/
/* 		<h3 style="margin: 20px 0px;">工商年报基础信息</h3>*/
/* 		<div class="form_data" style="margin-top:15px;">*/
/* 			<label style="">社会信用代码：</label>*/
/* 			<input disabled="true" type="text" field="social_credit_code" value="" style="background-color:#E6E6E6 !important;" />*/
/* 			<label style="">企业名称：</label>*/
/* 			<input disabled="true" type="text" field="name" style="background-color:#E6E6E6 !important;" />*/
/* 		</div>*/
/* 		<div class="form_data" style="margin-top:15px;">*/
/* 			<label style="">法人姓名：</label>*/
/* 			<input disabled="true" type="text" field="corporation" style="background-color:#E6E6E6 !important;" />*/
/* 			<label style="">法人身份证号：</label>*/
/* 			<input disabled="true" type="text" field="corporation_card" style="background-color:#E6E6E6 !important;" />*/
/* 		</div>*/
/* 		<!--一般纳税人-->*/
/* 		<h3 style="margin: 20px 0px;">纳税基础信息</h3>*/
/* 		<div id="yiban">*/
/* */
/* 			<div class="form_data" style="margin-top:15px;">*/
/* 				<label style="">本期销售额：</label>*/
/* 				<input disabled="true" type="text" field="total" style="background-color:#E6E6E6 !important;" />*/
/* 				<label style="">销项税额：</label>*/
/* 				<input disabled="true" type="text" field="xTax" style="background-color:#E6E6E6 !important;" />*/
/* 			</div>*/
/* 			<div class="form_data" style="margin-top:15px;">*/
/* 				<label style="">进项税额：</label>*/
/* 				<input disabled="true" type="text" field="jTax" style="background-color:#E6E6E6 !important;" />*/
/* 				<label style="">上期末留底税额：</label>*/
/* 				<input disabled="true" type="text" field="上期末留底税额" style="background-color:#E6E6E6 !important;" />*/
/* 			</div>*/
/* 			<div class="form_data" style="margin-top:15px;">*/
/* 				<label style="">增值税应纳税额：</label>*/
/* 				<input disabled="true" type="text" field="tTax" style="background-color:#E6E6E6 !important;" />*/
/* 				<label style="">本期末留抵税额：</label>*/
/* 				<input disabled="true" type="text" field="lTax" style="background-color:#E6E6E6 !important;" />*/
/* 			</div>*/
/* 			<div class="form_data" style="margin-top:15px;">*/
/* 				<label style="">本年累计税负：</label>*/
/* 				<input disabled="true" type="text" field="yearTax" style="background-color:#E6E6E6 !important;" />*/
/* 				<label style="">免抵退：</label>*/
/* 				<input disabled="true" type="text" field="免抵退" style="background-color:#E6E6E6 !important;" />*/
/* 			</div>*/
/* 			<div class="form_data" style="margin-top:15px;">*/
/* 				<label style="">进项税额转出：</label>*/
/* 				<input type="text" disabled="true" field="transfer_out" style="background-color:#E6E6E6 !important;" />*/
/* 				<label style="">本年累计销售额：</label>*/
/* 				<input type="text" disabled="true" field="今年累计销售额" style="background-color:#E6E6E6 !important;" />*/
/* 			</div>*/
/* 		</div>*/
/* 		<!--小规模-->*/
/* 		<div id="xiao">*/
/* 			<div class="form_data" style="margin-top:15px;">*/
/* 				<label style="">本期销售额：</label>*/
/* 				<input disabled="true" type="text" field="total" style="background-color:#E6E6E6 !important;" />*/
/* 				<label style="">本年累计销售额：</label>*/
/* 				<input disabled="true" type="text" field="今年累计销售额" style="background-color:#E6E6E6 !important;" />*/
/* 			</div>*/
/* 			<div class="form_data" style="margin-top:15px;">*/
/* 				<label style="width: 130px;">增值税应纳税额合计  ：</label>*/
/* 				<input disabled="true" type="text" field="tTax" style="background-color:#E6E6E6 !important;" />*/
/* 			</div>*/
/* 			<div class="form_data" style="margin-top:15px;">*/
/* 				<label style="width: 220px;">近11个月累积应税服务销售额：</label>*/
/* 				<input disabled="true" type="text" syllable="11month,service" style="background-color:#E6E6E6 !important;" />*/
/* 			</div>*/
/* 			<div class="form_data" style="margin-top:15px;">*/
/* 				<label style="width: 220px;">近11个月累积应税货物及劳务销售额：</label>*/
/* 				<input disabled="true" id="" type="text" syllable="11month,goods" style="background-color:#E6E6E6 !important;" />*/
/* 			</div>*/
/* 		</div>*/
/* 		<h3>地税款明细</h3>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 税款所属时间： </label>*/
/* 			<span field="local_time"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 企业所得税： </label>*/
/* 			<span field="local_corporate_tax"></span>*/
/* 			<label> 城建税：</label>*/
/* 			<span field="construction_tax"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 教育费附加： </label>*/
/* 			<span field="tuition"></span>*/
/* 			<label>地方教育附加： </label>*/
/* 			<span field="local_tuition"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 个人所得税：</label>*/
/* 			<span field="individual_tax"></span>*/
/* 			<label> 印花税：</label>*/
/* 			<span field="printing"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 堤围费/水利基金：</label>*/
/* 			<span field="water_fund"></span>*/
/* 			<label> 其他税费：</label>*/
/* 			<span field="local_other_tax"></span>*/
/* 		</div>*/
/* */
/* 		<h3>国税款明细</h3>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 税款所属时间： </label>*/
/* 			<span field="state_time"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 企业所得税：</label>*/
/* 			<span field="corporate_tax"></span>*/
/* 			<label> 增值税：</label>*/
/* 			<span field="state_appreciation"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 文化事业建设费：</label>*/
/* 			<span field="culture"></span>*/
/* 			<label> 消费税：</label>*/
/* 			<span field="excise_tax"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 其他税费：</label>*/
/* 			<span field="state_other_tax"></span>*/
/* 		</div>*/
/* 		<h3>企业资产状况信息</h3>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 税款所属时间：</label>*/
/* 			<span field="business_time"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 资产总额（万元）：</label>*/
/* 			<span field="total_assets"></span>*/
/* 			<label> 所有者权益合计：</label>*/
/* 			<span field="profit_total"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 营业总收入（万元）：</label>*/
/* 			<span field="operating_income"></span>*/
/* 			<label> 营业中总收入（万元）：</label>*/
/* 			<span field="operating_income_total"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 利润总额（万元）：</label>*/
/* 			<span field="operating_profit"></span>*/
/* 			<label> 负债总额：（万元）：</label>*/
/* 			<span field="labilities"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 净利润（万元）：</label>*/
/* 			<span field="net_profit"></span>*/
/* 			<label> 纳税总额：（万元）：</label>*/
/* 			<span field="tax_total"></span>*/
/* 		</div>*/
/* 		<!--<h3>税务年报信息</h3>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 税款所属时间：</label>*/
/* 			<span field="taxation_time"></span>*/
/* 		</div>-->*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 文件：</label>*/
/* 			<span field="files"></span>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div id="general-taxpayer" style="display:none;">*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 企业名称： </label>*/
/* 			<span field="name"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label>本期销售额：</label>*/
/* 			<span syllable="thisMonth,total"></span>*/
/* 			<label>销项税额：</label>*/
/* 			<span syllable="thisMonth,xTax"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label>进项税额： </label>*/
/* 			<span syllable="thisMonth,jTax"></span>*/
/* 			<label> 上期末留底税额：</label>*/
/* 			<span syllable="thisMonth,lTax"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 增值税应纳税额： </label>*/
/* 			<span syllable="thisMonth,tTax"></span>*/
/* 			<label> 本期末留抵税额： </label>*/
/* 			<span syllable="thisMonth,lTax"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 本年累计税负： </label>*/
/* 			<span field=""></span>*/
/* 			<label> 免抵退：</label>*/
/* 			<span field=""></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label>企业所得税： </label>*/
/* 			<span field="corporate_tax"></span>*/
/* 			<label> 印花税：</label>*/
/* 			<span field="printing"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 城建税：</label>*/
/* 			<span field="construction_tax"></span>*/
/* 			<label> 教育费附加：</label>*/
/* 			<span field="tuition"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 地方教育费附加：</label>*/
/* 			<span field="local_tuition"></span>*/
/* 			<label> 个税：</label>*/
/* 			<span field="individual_tax"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 文化事业建设费：</label>*/
/* 			<span field="culture"></span>*/
/* 			<label> 消费税：</label>*/
/* 			<span field="excise_tax"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 堤围费/水利基金：</label>*/
/* 			<span field="water_fund"></span>*/
/* 			<label> 国税其他税费：</label>*/
/* 			<span field="state_other_tax"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 地税其他税费：</label>*/
/* 			<span field="local_other_tax"></span>*/
/* 			<label> 本年累计销售额：</label>*/
/* 			<span field="今年累计销售额"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 进项税额转出：</label>*/
/* 			<span field="transfer_out"></span>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label style="float:left;margin-right:5px;"> 上传文件： </label>*/
/* 			<div style="display:inline-block;" class="fileList"></div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!--销项采集，进项采集-->*/
/* 	<div id="invoice_collect" class="widget-box transparent" id="recent-box" style="display:none ;">*/
/* 		<div style="width:1000px;">*/
/* 			<div style="padding:10px 0;">*/
/* 				<h3 style="font-size:16px;">销项采集</h3>*/
/* 			</div>*/
/* 			<div>*/
/* 				<div class="layui-collapse">*/
/* 					<div class="layui-colla-item">*/
/* 						<h2 class="layui-colla-title">增值税专用发票</h2>*/
/* 						<div class="layui-colla-content">*/
/* 							<div class="custom_table">*/
/* 								<table>*/
/* 									<thead>*/
/* 										<tr>*/
/* 											<th>序号</th>*/
/* 											<th>份数</th>*/
/* 											<th>金额</th>*/
/* 											<th>税率</th>*/
/* 											<th>税额</th>*/
/* 											<th>计税方式</th>*/
/* 											<th>征税项目</th>*/
/* 											<th>是否作废</th>*/
/* 											<th>是否即征即退</th>*/
/* 										</tr>*/
/* 									</thead>*/
/* 									<tbody id="x1">*/
/* 										<tr style="display:none;" class="model">*/
/* 											<td class="sequence"></td>*/
/* 											<td>*/
/* 												<input type="text" field="invoice" />*/
/* 											</td>*/
/* 											<td>*/
/* 												<input type="text" field="money" />*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="tax_rate">*/
/* 													<option value="0">0</option>*/
/* 													<option value="3">3%</option>*/
/* 													<option value="4">4%</option>*/
/* 													<option value="5">5%</option>*/
/* 													<option value="6">6%</option>*/
/* 													<option value="11">11%</option>*/
/* 													<option value="13">13%</option>*/
/* 													<option value="17">17%</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<input type="text" field="amount_of_tax" />*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="charge_mode">*/
/* 													<option value="1">一般计税</option>*/
/* 													<option value="2">简易征税</option>*/
/* 													<option value="3">免税</option>*/
/* 													<option value="4">免抵退</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="tax_project">*/
/* 													<option value="1">应税货物</option>*/
/* 													<option value="2">应税劳务</option>*/
/* 													<option value="3">应税服务不动产</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="is_invalid">*/
/* 													<option value="1">已作废</option>*/
/* 													<option value="0">未作废</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="whether_tax">*/
/* 													<option value="1">是</option>*/
/* 													<option value="0">否</option>*/
/* 												</select>*/
/* 											</td>*/
/* 										</tr>*/
/* 									</tbody>*/
/* 									<tfoot>*/
/* 										<tr>*/
/* 											<td>总计</td>*/
/* 											<td total="invoice"></td>*/
/* 											<td total="money"></td>*/
/* 											<td></td>*/
/* 											<td total="amount_of_tax"></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 										</tr>*/
/* 									</tfoot>*/
/* 								</table>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="layui-colla-item">*/
/* 						<h2 class="layui-colla-title">税控机动车专用发票</h2>*/
/* 						<div class="layui-colla-content">*/
/* 							<div class="custom_table">*/
/* 								<table>*/
/* 									<thead>*/
/* 										<tr>*/
/* 											<th>序号</th>*/
/* 											<th>份数</th>*/
/* 											<th>金额</th>*/
/* 											<th>税率</th>*/
/* 											<th>税额</th>*/
/* 											<th>计税方式</th>*/
/* 											<th>征税项目</th>*/
/* 											<th>是否作废</th>*/
/* 											<th>是否即征即退</th>*/
/* 										</tr>*/
/* 									</thead>*/
/* 									<tbody id="x2">*/
/* 										<tr style="display:none;" class="model">*/
/* 											<td class="sequence"></td>*/
/* 											<td>*/
/* 												<input type="text" field="invoice" />*/
/* 											</td>*/
/* 											<td>*/
/* 												<input type="text" field="money" />*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="tax_rate">*/
/* 													<option value="0">0</option>*/
/* 													<option value="3">3%</option>*/
/* 													<option value="4">4%</option>*/
/* 													<option value="5">5%</option>*/
/* 													<option value="6">6%</option>*/
/* 													<option value="11">11%</option>*/
/* 													<option value="13">13%</option>*/
/* 													<option value="17">17%</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<input type="text" field="amount_of_tax" />*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="charge_mode">*/
/* 													<option value="1">一般计税</option>*/
/* 													<option value="2">简易征税</option>*/
/* 													<option value="3">免税</option>*/
/* 													<option value="4">免抵退</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="tax_project">*/
/* 													<option value="1">应税货物</option>*/
/* 													<option value="2">应税劳务</option>*/
/* 													<option value="3">应税服务不动产</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="is_invalid">*/
/* 													<option value="1">已作废</option>*/
/* 													<option value="0">未作废</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="whether_tax">*/
/* 													<option value="1">是</option>*/
/* 													<option value="0">否</option>*/
/* 												</select>*/
/* 											</td>*/
/* 										</tr>*/
/* 									</tbody>*/
/* 									<tfoot>*/
/* 										<tr>*/
/* 											<td>总计</td>*/
/* 											<td total="invoice"></td>*/
/* 											<td total="money"></td>*/
/* 											<td></td>*/
/* 											<td total="amount_of_tax"></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 										</tr>*/
/* 									</tfoot>*/
/* 								</table>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="layui-colla-item">*/
/* 						<h2 class="layui-colla-title">普通发票</h2>*/
/* 						<div class="layui-colla-content">*/
/* 							<div class="custom_table">*/
/* 								<table>*/
/* 									<thead>*/
/* 										<tr>*/
/* 											<th>序号</th>*/
/* 											<th>份数</th>*/
/* 											<th>金额</th>*/
/* 											<th>税率</th>*/
/* 											<th>税额</th>*/
/* 											<th>计税方式</th>*/
/* 											<th>征税项目</th>*/
/* 											<th>是否作废</th>*/
/* 											<th>是否即征即退</th>*/
/* 										</tr>*/
/* 									</thead>*/
/* 									<tbody id="x3">*/
/* 										<tr style="display:none;" class="model">*/
/* 											<td class="sequence"></td>*/
/* 											<td>*/
/* 												<input type="text" field="invoice" />*/
/* 											</td>*/
/* 											<td>*/
/* 												<input type="text" field="money" />*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="tax_rate">*/
/* 													<option value="0">0</option>*/
/* 													<option value="3">3%</option>*/
/* 													<option value="4">4%</option>*/
/* 													<option value="5">5%</option>*/
/* 													<option value="6">6%</option>*/
/* 													<option value="11">11%</option>*/
/* 													<option value="13">13%</option>*/
/* 													<option value="17">17%</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<input type="text" field="amount_of_tax" />*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="charge_mode">*/
/* 													<option value="1">一般计税</option>*/
/* 													<option value="2">简易征税</option>*/
/* 													<option value="3">免税</option>*/
/* 													<option value="4">免抵退</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="tax_project">*/
/* 													<option value="1">应税货物</option>*/
/* 													<option value="2">应税劳务</option>*/
/* 													<option value="3">应税服务不动产</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="is_invalid">*/
/* 													<option value="1">已作废</option>*/
/* 													<option value="0">未作废</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="whether_tax">*/
/* 													<option value="1">是</option>*/
/* 													<option value="0">否</option>*/
/* 												</select>*/
/* 											</td>*/
/* 										</tr>*/
/* 									</tbody>*/
/* 									<tfoot>*/
/* 										<tr>*/
/* 											<td>总计</td>*/
/* 											<td total="invoice"></td>*/
/* 											<td total="money"></td>*/
/* 											<td></td>*/
/* 											<td total="amount_of_tax"></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 										</tr>*/
/* 									</tfoot>*/
/* 								</table>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="layui-colla-item">*/
/* 						<h2 class="layui-colla-title">未开具发票</h2>*/
/* 						<div class="layui-colla-content">*/
/* 							<div class="custom_table">*/
/* 								<table>*/
/* 									<thead>*/
/* 										<tr>*/
/* 											<th>序号</th>*/
/* 											<th>业务类型</th>*/
/* 											<th>金额</th>*/
/* 											<th>税率</th>*/
/* 											<th>税额</th>*/
/* 											<th>计税方式</th>*/
/* 											<th>征税项目</th>*/
/* 											<th>是否作废</th>*/
/* 											<th>是否即征即退</th>*/
/* 											<th>税款所属期</th>*/
/* 										</tr>*/
/* 									</thead>*/
/* 									<tbody id="x4">*/
/* 										<tr style="display:none;" class="model">*/
/* 											<td class="sequence"></td>*/
/* 											<td>*/
/* 												<select field="type">*/
/* 													<option value="1">注册公司</option>*/
/* 													<option value="2">变更公司</option>*/
/* 													<option value="3">股权变更</option>*/
/* 													<option value="4">注册商标</option>*/
/* 													<option value="5">注销公司</option>*/
/* 													<option value="6">申请一般纳税人</option>*/
/* 													<option value="7">记账报税</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<input type="text" field="money" />*/
/* 											</td>*/
/* */
/* 											<td>*/
/* 												<select field="tax_rate">*/
/* 													<option value="0">0</option>*/
/* 													<option value="3">3%</option>*/
/* 													<option value="4">4%</option>*/
/* 													<option value="5">5%</option>*/
/* 													<option value="6">6%</option>*/
/* 													<option value="11">11%</option>*/
/* 													<option value="13">13%</option>*/
/* 													<option value="17">17%</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<input type="text" field="amount_of_tax" />*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="charge_mode">*/
/* 													<option value="1">一般计税</option>*/
/* 													<option value="2">简易征税</option>*/
/* 													<option value="3">免税</option>*/
/* 													<option value="4">免抵退</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="tax_project">*/
/* 													<option value="1">应税货物</option>*/
/* 													<option value="2">应税劳务</option>*/
/* 													<option value="3">应税服务不动产</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="is_invalid">*/
/* 													<option value="1">已作废</option>*/
/* 													<option value="0">未作废</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="whether_tax">*/
/* 													<option value="1">是</option>*/
/* 													<option value="0">否</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<input type="text" field="tax_money_period" />*/
/* 											</td>*/
/* 										</tr>*/
/* 									</tbody>*/
/* 									<tfoot>*/
/* 										<tr>*/
/* 											<td>总计</td>*/
/* 											<td></td>*/
/* 											<td total="money"></td>*/
/* 											<td></td>*/
/* 											<td total="amount_of_tax"></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 										</tr>*/
/* 									</tfoot>*/
/* 								</table>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="layui-colla-item">*/
/* 						<h2 class="layui-colla-title">纳税检查调整</h2>*/
/* 						<div class="layui-colla-content">*/
/* 							<div class="custom_table">*/
/* 								<table>*/
/* 									<thead>*/
/* 										<tr>*/
/* 											<th>序号</th>*/
/* 											<th>业务类型</th>*/
/* 											<th>金额</th>*/
/* 											<th>税率</th>*/
/* 											<th>税额</th>*/
/* 											<th>计税方式</th>*/
/* 											<th>征税项目</th>*/
/* 											<th>是否作废</th>*/
/* 											<th>是否即征即退</th>*/
/* 											<th>税款所属期</th>*/
/* 										</tr>*/
/* 									</thead>*/
/* 									<tbody id="x5">*/
/* 										<tr style="display:none;" class="model">*/
/* 											<td class="sequence"></td>*/
/* 											<td>*/
/* 												<select field="type">*/
/* 													<option value="1">注册公司</option>*/
/* 													<option value="2">变更公司</option>*/
/* 													<option value="3">股权变更</option>*/
/* 													<option value="4">注册商标</option>*/
/* 													<option value="5">注销公司</option>*/
/* 													<option value="6">申请一般纳税人</option>*/
/* 													<option value="7">记账报税</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<input type="text" field="money" />*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="tax_rate">*/
/* 													<option value="0">0</option>*/
/* 													<option value="3">3%</option>*/
/* 													<option value="4">4%</option>*/
/* 													<option value="5">5%</option>*/
/* 													<option value="6">6%</option>*/
/* 													<option value="11">11%</option>*/
/* 													<option value="13">13%</option>*/
/* 													<option value="17">17%</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<input type="text" field="amount_of_tax" />*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="charge_mode">*/
/* 													<option value="1">一般计税</option>*/
/* 													<option value="2">简易征税</option>*/
/* 													<option value="3">免税</option>*/
/* 													<option value="4">免抵退</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="tax_project">*/
/* 													<option value="1">应税货物</option>*/
/* 													<option value="2">应税劳务</option>*/
/* 													<option value="3">应税服务不动产</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="is_invalid">*/
/* 													<option value="1">已作废</option>*/
/* 													<option value="0">未作废</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="whether_tax">*/
/* 													<option value="1">是</option>*/
/* 													<option value="0">否</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<input field="tax_money_period" type="text" />*/
/* 											</td>*/
/* 										</tr>*/
/* 									</tbody>*/
/* 									<tfoot>*/
/* 										<tr>*/
/* 											<td>总计</td>*/
/* 											<td></td>*/
/* 											<td total="money"></td>*/
/* 											<td total="amount_of_tax"></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 										</tr>*/
/* 									</tfoot>*/
/* 								</table>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="layui-colla-item">*/
/* 						<h2 class="layui-colla-title">地税开具其他发票及未开票销售额</h2>*/
/* 						<div class="layui-colla-content">*/
/* 							<div class="custom_table">*/
/* 								<table>*/
/* 									<thead>*/
/* 										<tr>*/
/* 											<th>序号</th>*/
/* 											<th>份数</th>*/
/* 											<th>业务类型</th>*/
/* 											<th>金额</th>*/
/* 											<th>税率</th>*/
/* 											<th>税额</th>*/
/* 											<th>计税方式</th>*/
/* 											<th>征税项目</th>*/
/* 											<th>是否作废</th>*/
/* 											<th>是否即征即退</th>*/
/* 											<th>税款所属期</th>*/
/* 										</tr>*/
/* 									</thead>*/
/* 									<tbody id="x6">*/
/* 										<tr style="display:none;" class="model">*/
/* 											<td class="sequence"></td>*/
/* 											<td>*/
/* 												<input type="text" field="invoice" />*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="type">*/
/* 													<option value="1">注册公司</option>*/
/* 													<option value="2">变更公司</option>*/
/* 													<option value="3">股权变更</option>*/
/* 													<option value="4">注册商标</option>*/
/* 													<option value="5">注销公司</option>*/
/* 													<option value="6">申请一般纳税人</option>*/
/* 													<option value="7">记账报税</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<input field="money" type="text" />*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="tax_rate">*/
/* 													<option value="0">0</option>*/
/* 													<option value="3">3%</option>*/
/* 													<option value="4">4%</option>*/
/* 													<option value="5">5%</option>*/
/* 													<option value="6">6%</option>*/
/* 													<option value="11">11%</option>*/
/* 													<option value="13">13%</option>*/
/* 													<option value="17">17%</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<input field="amount_of_tax" type="text" />*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="charge_mode">*/
/* 													<option value="1">一般计税</option>*/
/* 													<option value="2">简易征税</option>*/
/* 													<option value="3">免税</option>*/
/* 													<option value="4">免抵退</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="tax_project">*/
/* 													<option value="1">应税货物</option>*/
/* 													<option value="2">应税劳务</option>*/
/* 													<option value="3">应税服务不动产</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="is_invalid">*/
/* 													<option value="1">已作废</option>*/
/* 													<option value="0">未作废</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="whether_tax">*/
/* 													<option value="1">是</option>*/
/* 													<option value="0">否</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<input field="tax_money_period" type="text" />*/
/* 											</td>*/
/* 										</tr>*/
/* 									</tbody>*/
/* 									<tfoot>*/
/* 										<tr>*/
/* 											<td>总计</td>*/
/* 											<td total="invoice"></td>*/
/* 											<td></td>*/
/* 											<td total="money"></td>*/
/* 											<td total="amount_of_tax"></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 										</tr>*/
/* 									</tfoot>*/
/* 								</table>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div style="display:none;" class="jxcj">*/
/* 			<div style="padding:10px 0;">*/
/* 				<h3 style="font-size:16px;">进项采集</h3>*/
/* 			</div>*/
/* 			<div>*/
/* 				<div class="layui-collapse" lay-accordion>*/
/* 					<div class="layui-colla-item">*/
/* 						<h2 class="layui-colla-title">增值税专用发票</h2>*/
/* 						<div class="layui-colla-content">*/
/* 							<div class="custom_table">*/
/* 								<table>*/
/* 									<thead>*/
/* 										<tr>*/
/* 											<th>序号</th>*/
/* 											<th>份数</th>*/
/* 											<th>金额</th>*/
/* 											<th>税率</th>*/
/* 											<th>税额</th>*/
/* 											<th>是否即征即退</th>*/
/* 											<th>是否抵扣</th>*/
/* 											<th>申报所属期</th>*/
/* 											<th>认证日期</th>*/
/* 										</tr>*/
/* 									</thead>*/
/* 									<tbody id="j1">*/
/* 										<tr style="display:none;" class="model">*/
/* 											<td class="sequence"></td>*/
/* 											<td>*/
/* 												<input field="invoice" type="text" />*/
/* 											</td>*/
/* 											<td>*/
/* 												<input field="money" type="text" />*/
/* 											</td>*/
/* */
/* 											<td>*/
/* 												<select field="tax_rate">*/
/* 													<option value="0">0</option>*/
/* 													<option value="3">3%</option>*/
/* 													<option value="4">4%</option>*/
/* 													<option value="5">5%</option>*/
/* 													<option value="6">6%</option>*/
/* 													<option value="11">11%</option>*/
/* 													<option value="13">13%</option>*/
/* 													<option value="17">17%</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<input field="amount_of_tax" type="text" />*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="whether_tax">*/
/* 													<option value="1">是</option>*/
/* 													<option value="0">否</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="deductible">*/
/* 													<option value="1">是</option>*/
/* 													<option value="0">否</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<input field="tax_money_period" type="text" />*/
/* 											</td>*/
/* 											<td>*/
/* 												<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 													<input class="date-timepicker1" field="auth_time" style="height: 30px; width: 150px;">*/
/* 													<span class="input-group-addon" style="width:30px;height:30px;">*/
/* 							                            <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 							                        </span>*/
/* 												</div>*/
/* 											</td>*/
/* 										</tr>*/
/* 									</tbody>*/
/* 									<tfoot>*/
/* 										<tr>*/
/* 											<td>总计</td>*/
/* 											<td total="invoice"></td>*/
/* 											<td total="money"></td>*/
/* 											<td></td>*/
/* 											<td total="amount_of_tax"></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 										</tr>*/
/* 									</tfoot>*/
/* 								</table>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="layui-colla-item">*/
/* 						<h2 class="layui-colla-title">税控机动车发票</h2>*/
/* 						<div class="layui-colla-content">*/
/* 							<div class="custom_table">*/
/* 								<table>*/
/* 									<thead>*/
/* 										<tr>*/
/* 											<th>序号</th>*/
/* 											<th>份数</th>*/
/* 											<th>金额</th>*/
/* 											<th>税率</th>*/
/* 											<th>税额</th>*/
/* 											<th>是否即征即退</th>*/
/* 											<th>是否抵扣</th>*/
/* 										</tr>*/
/* 									</thead>*/
/* 									<tbody id="j2">*/
/* 										<tr style="display:none;" class="model">*/
/* 											<td class="sequence"></td>*/
/* 											<td>*/
/* 												<input field="invoice" type="text" />*/
/* 											</td>*/
/* 											<td>*/
/* 												<input field="money" type="text" />*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="tax_rate">*/
/* 													<option value="0">0</option>*/
/* 													<option value="3">3%</option>*/
/* 													<option value="4">4%</option>*/
/* 													<option value="5">5%</option>*/
/* 													<option value="6">6%</option>*/
/* 													<option value="11">11%</option>*/
/* 													<option value="13">13%</option>*/
/* 													<option value="17">17%</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<input field="amount_of_tax" type="text" />*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="whether_tax">*/
/* 													<option value="1">是</option>*/
/* 													<option value="0">否</option>*/
/* 												</select>*/
/* 											</td>*/
/* 											<td>*/
/* 												<select field="deductible">*/
/* 													<option value="1">是</option>*/
/* 													<option value="0">否</option>*/
/* 												</select>*/
/* 											</td>*/
/* 										</tr>*/
/* 									</tbody>*/
/* 									<tfoot>*/
/* 										<tr>*/
/* 											<td>总计</td>*/
/* 											<td total="invoice"></td>*/
/* 											<td total="money"></td>*/
/* 											<td></td>*/
/* 											<td total="amount_of_tax"></td>*/
/* 											<td></td>*/
/* 											<td></td>*/
/* 										</tr>*/
/* 									</tfoot>*/
/* 								</table>*/
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
/* 		    box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
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
/* 	{% include 'admin/mark.html' %} {% include 'admin/customerDetail.html' %}*/
/* </div>*/
/* */
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script type="text/javascript">*/
/* 	$(function() {*/
/* 		if(cs.approve_authority({*/
/* 				name: '报税',*/
/* 				nodes: [196]*/
/* 			})) {*/
/* 			$('[contentAuthority="196"]').show();*/
/* 		}*/
/* 		var cid = ykp.getCookie("custom_id");*/
/* 		var order = 'spm_approves.approve_result asc,spm_approves.id desc';*/
/* 		var pagesize = 10;*/
/* 		var customers = {};*/
/* */
/* 		ykp.doAjax({*/
/* 			url: '/api/api_customer/f7',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				select: 'khm_customer.id,khm_customer.name',*/
/* 				filter: 'khm_customer.is_del <> 1'*/
/* 			},*/
/* 			success: function(res) {*/
/* 				var data = res.data;*/
/* 				for(var i in data) {*/
/* 					customers[data[i]['id']] = data[i]['name'];*/
/* 				}*/
/* 			}*/
/* 		});*/
/* */
/* 		var employees = {};*/
/* 		//获取所有员工*/
/* 		ykp.doAjax({*/
/* 			async: false,*/
/* 			url: '/api/api_employees/f7',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: 'bmm_employees.is_del <> 1',*/
/* 				select: 'bmm_employees.id,bmm_employees.name'*/
/* 			},*/
/* 			success: function(res) {*/
/* 				var data = res.data;*/
/* 				$('.advandced-search').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* 				for(var i in data) {*/
/* 					employees[data[i]['id']] = data[i]['name'];*/
/* 					$('.advandced-search').append(new Option(data[i]['name']));*/
/* 				}*/
/* 			}*/
/* 		});*/
/* */
/* 		clickBtn();*/
/* 		//点击顶部  按钮时调用*/
/* 		function clickBtn() {*/
/* 			$('#topTool').on('click', 'a', function(item) {*/
/* 				if(!$(this).hasClass('clc')) {*/
/* 					$(this).addClass('clc').siblings().removeClass('clc');*/
/* 				}*/
/* 				var status = $(this).attr('data-status');*/
/* 				$(this).addClass('active').siblings().removeClass('active');*/
/* 				var keyWords = [];*/
/* 				$('.search-input').each(function(i, e) {*/
/* 					if($(this).val().trim()) {*/
/* 						keyWords.push($(this).attr('sear') + ' like \'%' + $(this).val().trim() + '%\'');*/
/* 					}*/
/* 				});*/
/* 				if($('#search').attr('searStatsus')) {*/
/* 					getList('', status, keyWords); //已搜索点击状态*/
/* 				} else {*/
/* 					getList('', status); //未搜索点击状态*/
/* 				}*/
/* 				return false;*/
/* 			})*/
/* 		}*/
/* */
/* 		$('#flush').click(function() {*/
/* 			$('#topTool input').val('');*/
/* 			filter = '';*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getList();*/
/* 		})*/
/* */
/* 		$('#filterBtns a').mouseover(function() {*/
/* 			$(this).addClass('over');*/
/* 		})*/
/* 		$('#filterBtns a').mouseout(function() {*/
/* 			$(this).removeClass('over');*/
/* 		})*/
/* */
/* 		$('#plSp').click(function() {*/
/* 			var idArr = [],*/
/* 				n = 0;*/
/* 			Statu = false;*/
/* 			var status = ''*/
/* 			$('#datalist').find('input[type="checkbox"]:checked').each(function(i) {*/
/* 				//console.log($(this).parents('tr').attr('data-id'));*/
/* 				//console.log($(this).parents('tr').attr('status'));*/
/* 				status = $(this).parents('tr').attr('status') == 1 ? 2 : 1;*/
/* 				n += 1;*/
/* 				if($(this).parents('tr').attr('data-status') == 3 || $(this).parents('tr').attr('data-status') == 2) {*/
/* 					ykp.prompt('审批过的不能批量审批!');*/
/* 					Statu = false;*/
/* 					return false;*/
/* 				} else {*/
/* 					idArr.push({*/
/* 						id: $(this).parents('tr').attr('data-id'),*/
/* 						approve_result: status*/
/* 					});*/
/* 					Statu = true;*/
/* 				}*/
/* 			})*/
/* 			if(n == 0) {*/
/* 				ykp.prompt('没有选中审批信息！');*/
/* 				return false;*/
/* 			}*/
/* 			if(Statu) {*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_approves/batch_edit',*/
/* 					methods: 'post',*/
/* 					data: {*/
/* 						data: JSON.stringify(idArr),*/
/* 						type: '18'*/
/* 					},*/
/* 					success: function(res) {*/
/* 						ykp.prompt('审批成功');*/
/* 						getList();*/
/* 					}*/
/* */
/* 				})*/
/* 			}*/
/* 		})*/
/* 		doSearch();*/
/* */
/* 		function doSearch() {*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			$('#search').click(function() {*/
/* 				$(this).attr('searStatsus', true);*/
/* 				var n = 0; //选中的数量*/
/* 				var w = ''; //选中的状态*/
/* 				$('#topTool a').each(function() {*/
/* 					if($(this).hasClass('active')) {*/
/* 						n += 1;*/
/* 						w = $(this).attr('data-status');*/
/* 					}*/
/* 				})*/
/* 				var keyWords = [];*/
/* 				$('.search-input').each(function(i, e) {*/
/* 					if($(this).val().trim()) {*/
/* 						keyWords.push($(this).attr('sear') + ' like \'%' + $(this).val().trim() + '%\'');*/
/* 					}*/
/* 				});*/
/* 				if(keyWords.length <= 0) {*/
/* 					ykp.prompt('请输入至少一个搜索条件');*/
/* 					return;*/
/* 				}*/
/* 				if(n == 0) {*/
/* 					getList('', '', keyWords);*/
/* 				} else {*/
/* 					if(w != 'all') {*/
/* 						getList('', w, keyWords);*/
/* 					} else {*/
/* 						getList('', '', keyWords);*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		$('#changePageNum').change(function() {*/
/* 			pagesize = $(this).val();*/
/* 			ykp.setCookie('page_size',pagesize);*/
/* 			if(!cs.getSpStatus('报税')) {*/
/* 				ykp.prompt('暂时没有开启审批功能');*/
/* 				return false;*/
/* 			}*/
/* 			var n = 0; //选中的数量*/
/* 			var w = ''; //选中的状态*/
/* 			$('#topTool a').each(function() {*/
/* 				if($(this).hasClass('active')) {*/
/* 					n += 1;*/
/* 					w = $(this).attr('data-status');*/
/* 				}*/
/* 			})*/
/* 			var keyWords = [];*/
/* 			$('.search-input').each(function(i, e) {*/
/* 				if($(this).val().trim()) {*/
/* 					keyWords.push($(this).attr('sear') + ' like \'%' + $(this).val().trim() + '%\'');*/
/* 				}*/
/* 			});*/
/* 			if(n == 0) {*/
/* 				getList('', '', keyWords);*/
/* 			} else {*/
/* 				if(w != 'all') {*/
/* 					getList('', w, keyWords);*/
/* 				} else {*/
/* 					getList('', '', keyWords);*/
/* 				}*/
/* 			}*/
/* 			//			getCustomerList(1);*/
/* 		})*/
/* */
/* 		//获取报税审批数据*/
/* 		getList();*/
/* */
/* 		function getList(current, clickstatus, keyWords) {*/
/* 			if(!cs.getSpStatus('报税')) {*/
/* 				ykp.prompt('暂时没有开启审批功能');*/
/* 				return false;*/
/* 			}*/
/* 			current = current ? current : 1;*/
/* 			var data = {*/
/* 				page_size: pagesize,*/
/* 				current: current,*/
/* 				type: 18,*/
/* 				order: order,*/
/* 				contentId: "#datalist", //默认排序*/
/* 				initOrder: "", //初始化sort*/
/* 				defaultOrder: order,*/
/* 				params: [{*/
/* 					id: "#dynamic-table",*/
/* 					field: ["", "", "spm_approves.customer_id", "khm_customer.customer_num", "", "", "", "", "", "spm_approves.approve_code", "", "spm_approves.submit_time", "spm_approves.submit_employee_name",*/
/* 						"", "spm_approves.approve_result", "spm_approves.approve_time", "spm_approves.approve_reply"*/
/* 					]*/
/* 				}]*/
/* 			}*/
/* 			//判断是否有过滤   */
/* 			if(clickstatus && !isNaN(clickstatus)) {*/
/* 				data.approve_result = clickstatus;*/
/* 			}*/
/* 			if(keyWords) {*/
/* 				data.search = keyWords*/
/* 			}*/
/* 			if(cid) {*/
/* 				data.search = 'spm_approves.customer_name  ' + ' like \'%' + cid + '%\'';*/
/* 			}*/
/* */
/* 			cs.spList(data, function(res) {*/
/* 				//console.log(res)*/
/* 				var data = res.data.items;*/
/* 				if(data.length == 0) {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="color:#7d7d7d !important;text-align:center !important;" class="page">暂无数据</div></td></tr>');*/
/* */
/* 				} else {*/
/* 					//审批权限为true可以审批,为false不可审批*/
/* 					var spApp = cs.approve_authority({*/
/* 						name: '报税',*/
/* 						nodes: [197]*/
/* 					});*/
/* 					var cxApp = cs.approve_authority({*/
/* 						name: '报税',*/
/* 						nodes: [260]*/
/* 					});*/
/* */
/* 					var styles = [];*/
/* 					$('#dynamic-table th').each(function(i, e) {*/
/* 						styles.push($(this).css('display'));*/
/* 					});*/
/* */
/* 					var status = ['', '待审批', '已通过', '未通过']; //审核状态*/
/* 					var statusColor = ['', '#dfba49', '#45b6af', '#f3565d'];*/
/* 					var content = '';*/
/* */
/* 					var _data = {}; //报税数据*/
/* */
/* 					for(var i in data) {*/
/* 						_data[i] = data[i]['submitted_data']['list'];*/
/* */
/* 						content += `<tr tax_type="${data[i]['submitted_data']['service_info']['khm_customer.tax_type']}" data-time="${data[i]['submitted_data']['service_info']['jzm_service_info.time']}" customer_id="${data[i]['spm_approves.customer_id']}" data-id="${data[i]['spm_approves.id']}" service-id="${data[i]['submitted_data']['service_info']['jzm_service_info.id']}"] status="${data[i]['spm_approves.approve_result']}">*/
/* 								 <td class="center">*/
/*                                 <label class="pos-rel">*/
/*                                     <input type="checkbox" name="check" class="ace"/>*/
/*                                     <span class="lbl"></span>*/
/*                                 </label>*/
/*                             </td>*/
/* 						 <td>*/
/* 						 <label class="pos-rel">*/
/*                         <a href="#" class="sp btOrange" data-status = "1" style="display: ${cxApp ? (data[i]['spm_approves.approve_result'] == 2 ? 'inline-block' : 'none') : 'none'};color:#fff !important" contentAuthority="260" title="撤销"><i class="fa fa-rotate-left"></i></a>*/
/*                         <a href="#" class="sp btGreen" data-status = "2" style="display: ${spApp ? (data[i]['spm_approves.approve_result'] == 1 ?'inline-block' : 'none') : 'none'};color:#fff !important" title="通过"><i class="fa fa-check-circle-o"></i></a>*/
/*                     	 <a href="#" class="sp btRed" data-status = "3" style="display: ${spApp ? (data[i]['spm_approves.approve_result'] == 1 ?'inline-block' : 'none') : 'none'};color:#fff !important" contentAuthority="197" title="驳回"><i class="fa fa-times-circle"></i></a>*/
/*                     	</labe>*/
/*                     </td>*/
/* */
/*                     <td data-num="1" style="display:${styles[2]}" data-cid="${data[i]['spm_approves.customer_id']}">*/
/*                     	*/
/*                     	<a href="#" class="customerDetail pos-rel">${data[i]['spm_approves.customer_name']}</a>*/
/*                     	<label class="pos-rel">*/
/* 				 				<i class="iconBnt fa fa-info-circle" data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>*/
/* 			 				 </label>*/
/*                     </td>*/
/*                     */
/*                     <td data-num="2" style="display:${styles[3]}">${data[i]['submitted_data']['service_info']['khm_customer.customer_num']}</td>*/
/*                     <td data-num="3" style="display:${styles[4]}">${data[i]['submitted_data']['service_info']['khm_customer.tax_type'] == 1 ? '一般纳税人' : '小规模'}</td>*/
/*                     <td data-num="4" style="display:${styles[5]}">${data[i].submitted_data.service_info['jzm_service_info.time']}</td>*/
/*                     <td data-num="5" style="display:${styles[6]}"><a href="javascript:;" style="text-decoration:none;" class="taxData pos-rel" tax_type="${data[i]['submitted_data']['service_info']['khm_customer.tax_type']}" >查看</a></td>*/
/* */
/*                     <td data-num="6" style="display:${styles[7]}"><a href="javascript:;" style="text-decoration:none;" class="collect pos-rel" tax_type="${data[i]['submitted_data']['service_info']['khm_customer.tax_type']}" >查看</a></td>*/
/* */
/*                     <td data-num="7" style="display:${styles[8]}">${data[i].submitted_data['service_info']['jzm_service_info.fuze_id'] != '0' ? employees[data[i].submitted_data['service_info']['jzm_service_info.fuze_id']]  : '无'}</td>*/
/*                   	<td data-num="8" style="display:${styles[9]}">${data[i]['spm_approves.approve_code']}</td>*/
/*                     <td data-num="9" style="display:${styles[10]}"><a href="#">${data[i]['approve_employee_name'] ? data[i]['approve_employee_name']['name'] : ""}</a></td>*/
/*                     <td data-num="10" style="display:${styles[11]}">${cs.getNowTime(data[i]['spm_approves.submit_time'],true)}</td>*/
/*                     <td data-num="11" style="display:${styles[12]}"><a href="#">${employees[data[i]['spm_approves.approve_employee_id']] || "无"}</a></td>*/
/* */
/*                     <td data-num="12" style="display:${styles[13]}"><label class="label" style=" background:${statusColor[data[i]['spm_approves.approve_result']]} ">${status[data[i]['spm_approves.approve_result']]}</label></td>*/
/*                     <td data-num="13" style="display:${styles[14]}">${data[i]['spm_approves.approve_time'] != 0 ? cs.getNowTime(data[i]['spm_approves.approve_time'],true) : ''}</td>*/
/* */
/*                     <td data-num="14" style="display:${styles[15]}">${data[i]['spm_approves.approve_reply']}</td>*/
/*                    */
/*                 </tr>`;*/
/* 					}*/
/* */
/* 					$('#datalist').html(content);*/
/* */
/* 					//税费数据*/
/* 					taxData(_data);*/
/* */
/* 					$("[data-rel='tooltip']").tooltip();*/
/* 					custom.showReamrk();*/
/* 					custom.get_custom_info();*/
/* 					$("#datalist tr").find('.sp').click(function() {*/
/* 						var status = $(this).attr('data-status');*/
/* 						var id = $(this).parents('tr').attr('data-id');*/
/* 						if(status != '0') {*/
/* 							changeStatus(status, id);*/
/* 						}*/
/* 					})*/
/* 				}*/
/* 				layui.use('element', function() {*/
/* 					var element = layui.element;*/
/* 					invoice_detail(_data, element);*/
/* 				});*/
/* 			}, '报税')*/
/* */
/* 			//使用Layui面板*/
/* */
/* 			ykp.setCookie("custom_id", "", (1 / 24));*/
/* */
/* 			//加载报税数据*/
/* 			function taxData(data) {*/
/* 				$(".taxData").click(function() {*/
/* 					var id = $(this).parents('tr').attr('service-id');*/
/* 					var index = $(this).parents('tr').index();*/
/* 					var type = $(this).attr('tax_type');*/
/* 					//生成弹税费数据出层*/
/* 					generatePop(type, data[index], id);*/
/* */
/* 					var customer_name = $(this).parents('tr').find('[data-num="1"] a').text();*/
/* */
/* 					var customer_id = $(this).parents('tr').attr('customer_id').trim();*/
/* 					var year_month = $(this).parents('tr').find('[data-num="6"] a').text();*/
/* 					var cus_month = $(this).parents('tr').attr('data-time'); //服务月份*/
/* 					var _type = $(this).parents('tr').attr('tax_type');*/
/* 					var dtime = "";*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_service/get_tax_info',*/
/* 						method: 'post',*/
/* 						data: {*/
/* 							service_id: id*/
/* 						},*/
/* 						success: function(res) {*/
/* 							var data = res.data;*/
/* 							//							showMark(temp);*/
/* 							var temHtml = $('#templateBox4').html();*/
/* 							$('#templateBox4').children().remove();*/
/* 							$('#templateBox4').html(temHtml);*/
/* 							cs.getYearAndMonth('2015-1-1', '2025-12-31', '#templateCon .addtime');*/
/* 							cs.getYear('2015', '2025', '#templateCon .addtime1', 'year');*/
/* 							$('#templateCon .select2').css('width', '500px')*/
/* 							$('#templateCon #addtime').select2({});*/
/* 							//所属时间*/
/* 							var arr = cus_month.split('');*/
/* 							arr.splice(4, 0, '.');*/
/* */
/* 							$('#templateCon').find('select[field=local_time]').val(cs.getPreMonth(arr.join(''))).trigger('change');*/
/* 							dtime = data['上个季度']['start'];*/
/* 							$('#templateCon').find('select[field=state_time2]').val(data['上个季度']['start']).trigger('change');*/
/* 							$('#templateCon').find('select[field=state_time1]').val(data['上个季度']['end']).trigger('change');*/
/* 							$('#templateCon').find('select[field=business_time2]').val("").trigger('change');*/
/* 							$('#templateCon').find('select[field=business_time1]').val("").trigger('change');*/
/* */
/* 							$('#templateCon').find('select[field=taxation_time2]').val("").trigger('change');*/
/* 							$('#templateCon').find('select[field=taxation_time1]').val("").trigger('change');*/
/* */
/* 							//修改所属时间*/
/* 							changeTime()*/
/* */
/* 							$('#showBox .title').text(customer_name + '（' + cus_month + '）税费数据');*/
/* */
/* 							$('#templateCon').data('flag', '1');*/
/* 							$('#templateCon .close_get').unbind('click').click(function() {*/
/* 								$('#templateCon').data('flag', '2');*/
/* 								cs.close();*/
/* 							});*/
/* */
/* 							$('#templateCon .item_form').attr('customer_name', customer_name);*/
/* 							$('#templateCon .item_form').attr('time', year_month);*/
/* 							$('#templateCon form').attr('customer_id', customer_id.trim());*/
/* 							//							get_tax_details(id);*/
/* 							//							save();*/
/* 							$('#templateCon input').eq(0).val(customer_name);*/
/* 							for(var i in data['customerInfo']) {*/
/* 								$('#templateCon input').each(function() {*/
/*                                     if($(this).attr('field') == i) {*/
/* 										$(this).val(data['customerInfo'][i]);*/
/* 									}*/
/* 								})*/
/* 							}*/
/* */
/* 							for(var i in data['thisMonth']) {*/
/* 								$('#templateCon input').each(function() {*/
/* 									if($(this).attr('field') == i) {*/
/* 										$(this).val(data['thisMonth'][i]);*/
/* 									} else if($(this).attr('field') == "免抵退") {*/
/* 										$(this).val(data["免抵退"]);*/
/* 									}  else if($(this).attr('field') == "上期末留底税额") {*/
/* 										$(this).val(data['上期末留抵税额']);*/
/* 									}*/
/* 								})*/
/* 							}*/
/* */
/* */
/* 							var xTax = $('#templateCon input[field=xTax]'); //销项税额*/
/* 							var jTax = $('#templateCon input[field=jTax]'); //进项税额*/
/* 							var tTax = $('#templateCon input[field=tTax]'); //增值税应纳税额*/
/* 							var lTax = $('#templateCon input[field=lTax]'); //本期末留底税*/
/* */
/*                            /* var _lTax = $('#templateCon input[field=今年累计销售额]'); //本年累计销售额*/
/* 							if((parseInt(data['thisMonth']['xTax']) - (parseInt(data['thisMonth']['jTax']) + parseInt(data['上期末留抵税额'])) > 0)) {*/
/* 								tTax.val(Math.abs(parseInt(data['thisMonth']['xTax']) - (parseInt(data['thisMonth']['jTax']) + parseInt(data['上期末留抵税额']))));*/
/*                                 lTax.val(0)*/
/* 							} else {*/
/* 								lTax.val(Math.abs(parseInt(data['thisMonth']['xTax']) - (parseInt(data['thisMonth']['jTax']) + parseInt(data['上期末留抵税额']))))*/
/*                                 tTax.val(0)*/
/* 							}*//* */
/* */
/*                             var _lTax = $('#templateCon input[field=今年累计销售额]'); //本年累计销售额*/
/*                             if((parseInt(xTax.val()) - (parseInt(jTax.val()) + parseInt(data['上期末留抵税额'])) > 0)) {*/
/*                                 tTax.val(Math.abs(parseInt(xTax.val()) - (parseInt(jTax.val()) + parseInt(data['上期末留抵税额']))));*/
/*                                 lTax.val(0)*/
/*                             } else {*/
/*                                 lTax.val(Math.abs(parseInt(xTax.val()) - (parseInt(jTax.val()) + parseInt(data['上期末留抵税额']))))*/
/*                                 tTax.val(0)*/
/*                             }*/
/* */
/*                             _lTax.val(data["今年累计销售额"]);*/
/* 							if(data['jzm_tax_details']['state_time']) {*/
/* 								$('#templateCon').find('select[field=state_time2]').val(data['jzm_tax_details']['state_time'].split(',')[0]).trigger('change');*/
/* 								$('#templateCon').find('select[field=state_time1]').val(data['jzm_tax_details']['state_time'].split(',')[1]).trigger('change');*/
/* 							}*/
/* 							if(data['jzm_tax_details']['business_time']) {*/
/* 								$('#templateCon').find('select[field=business_time2]').val(data['jzm_tax_details']['business_time'].split(',')[0]).trigger('change');*/
/* 								$('#templateCon').find('select[field=business_time1]').val(data['jzm_tax_details']['business_time'].split(',')[1]).trigger('change');*/
/* 							}*/
/* 							if(data['jzm_tax_details']['taxation_time']) {*/
/* 								$('#templateCon').find('select[field=taxation_time2]').val(data['jzm_tax_details']['taxation_time'].split('')[0]).trigger('change');*/
/* 								$('#templateCon').find('select[field=taxation_time1]').val(data['jzm_tax_details']['taxation_time'].split('')[1]).trigger('change');*/
/* 							}*/
/* 							if(_type == 1) {*/
/* 								$('#templateCon #xiao').remove();*/
/* */
/* 							} else {*/
/* 								$('#templateCon #yiban').remove();*/
/* 								for(var i in data['customerInfo']) {*/
/* 									$('#templateCon input').each(function() {*/
/* 										if($(this).attr('field') == i) {*/
/* 											$(this).val(data['customerInfo'][i]);*/
/* 										}*/
/* 									})*/
/* 								}*/
/* 								$('#templateCon [syllable]').each(function(i, e) {*/
/* 									field = $(this).attr('syllable').split(',');*/
/* 									$(this).val(data[field[0]][field[1]]);*/
/* 								});*/
/* */
/* 								for(var i in data['thisMonth']) {*/
/* 									$('#templateCon input').each(function() {*/
/* */
/* 										if($(this).attr('field') == i) {*/
/* 											$(this).val(data['thisMonth'][i]);*/
/* 										} else if($(this).attr('field') == "免抵退") {*/
/* 											$(this).val(data["免抵退"]);*/
/* 										}*/
/* 									})*/
/* 								}*/
/* 								if(data['jzm_tax_details']['state_time']) {*/
/* 									$('#templateCon').find('select[field=state_time2]').val(data['jzm_tax_details']['state_time'].split(',')[0]).trigger('change');*/
/* 									$('#templateCon').find('select[field=state_time1]').val(data['jzm_tax_details']['state_time'].split(',')[1]).trigger('change');*/
/* 								}*/
/* 								if(data['jzm_tax_details']['business_time']) {*/
/* 									$('#templateCon').find('select[field=business_time2]').val(data['jzm_tax_details']['business_time'].split(',')[0]).trigger('change');*/
/* 									$('#templateCon').find('select[field=business_time1]').val(data['jzm_tax_details']['business_time'].split(',')[1]).trigger('change');*/
/* 								}*/
/* 								if(data['jzm_tax_details']['taxation_time']) {*/
/* 									$('#templateCon').find('select[field=taxation_time2]').val(data['jzm_tax_details']['taxation_time'].split(',')[0]).trigger('change');*/
/* 									$('#templateCon').find('select[field=taxation_time1]').val(data['jzm_tax_details']['taxation_time'].split(',')[1]).trigger('change');*/
/* 								}*/
/* 							}*/
/* 							cs.upload1({*/
/* 								el: "#templateBox #upload",*/
/* 								ael: "#templateBox #fileBox"*/
/* 							})*/
/* 						}*/
/* 					})*/
/* */
/* 					//					getTaxInfo();*/
/* 				})*/
/* 			}*/
/* */
/* 			function changeTime() {*/
/* 				$('#templateCon').find('select[field=state_time2],select[field=business_time2],select[field=taxation_time2]').change(function() {*/
/* 					var curval = parseInt($(this).val().replace(/\./, ''));*/
/* 					$('#templateCon').find('select[field=' + ($(this).attr('field').replace(/2/, '1')) + ']').val('').trigger('change');*/
/* 				})*/
/* 			}*/
/* */
/* 			//发票采集详情*/
/* 			function invoice_detail(data, element) {*/
/* 				$('.collect').click(function() {*/
/* 					var index = $(this).parents('tr').index();*/
/* 					var tax_type = $(this).attr('tax_type');*/
/* 					var service_id = $(this).attr('service-id');*/
/* */
/* 					showMark('#invoice_collect');*/
/* 					element.init('collapse');*/
/* 					$('#showBox .title').text('发票采集详情');*/
/* 					if(tax_type == 1) {*/
/* 						$('#templateCon .jxcj').show();*/
/* 					}*/
/* */
/* 					//获取发票采集数据*/
/* 					getInvoiceCollectData(data[index], element);*/
/* 				});*/
/* 			}*/
/* */
/* 			//获取发票采集数据*/
/* 			function getInvoiceCollectData(data, element) {*/
/* 				var type = ['注册公司', '变更公司', '股权变更', '注册商标', '注销公司', '申请一般纳税人', '记账报税']; //业务类型*/
/* 				var tax_way = ['一般计税', '简单征收', '免税', '免抵退']; //计税方式*/
/* 				var tax_item = ['应税货物', '应税劳务', '应税服务不动产']; //征税项目*/
/* */
/* 				var _ztype;*/
/* 				var model;*/
/* 				var _model;*/
/* 				var html;*/
/* */
/* 				for(var i in data) {*/
/* 					if(!data[i]['ztype'] || data[i]['ztype'] === '0') {*/
/* 						continue;*/
/* 					}*/
/* 					_ztype = data[i]['ztype'];*/
/* 					model = $('#templateCon #' + _ztype).find('.model').html();;*/
/* 					_model = $(model);*/
/* 					html = $('<tr></tr>');*/
/* 					if(!$('#templateCon #' + _ztype).parents('.layui-colla-content').hasClass('layui-show')) {*/
/* 						$('#templateCon #' + _ztype).parents('.layui-colla-content').addClass('layui-show');*/
/* 					}*/
/* */
/* 					_model.eq(0).text($('#templateCon #' + _ztype).find('tr').length);*/
/* 					_model.find('[field]').each(function(index, element) {*/
/* 						if($(this).attr('field') == 'charge_mode') {*/
/* 							$(this).parent().text(data[i]['charge_mode'] != 0 ? tax_way[--data[i]['charge_mode']] : '');*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('field') == 'tax_project') {*/
/* 							$(this).parent().text(data[i]['tax_project'] != 0 ? tax_item[--data[i]['tax_project']] : '');*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('field') == 'is_invalid') {*/
/* 							$(this).parent().text(data[i]['is_invalid'] != 0 ? '作废' : '未作废');*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('field') == 'whether_tax') {*/
/* 							$(this).parent().text(data[i]['whether_tax'] != 0 ? '是' : '否');*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('field') == 'deductible') {*/
/* 							$(this).parent().text(data[i]['deductible'] != 0 ? '是' : '否');*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('field') == 'auth_time') {*/
/* 							$(this).parent().text(data[i]['auth_time'] != 0 ? cs.getNowTime(data[i]['auth_time']) : '');*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('field') == 'type') {*/
/* 							$(this).parent().text(data[i]['type'] != 0 ? type[--data[i]['type']] : '');*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('field') == 'tax_rate') {*/
/* 							$(this).parent().text(data[i]['tax_rate'] + '%');*/
/* 							return true;*/
/* 						}*/
/* */
/* 						$(this).parent().text(data[i][$(this).attr('field')]);*/
/* 					});*/
/* */
/* 					html.append(_model);*/
/* 					$('#templateCon #' + _ztype).append(html);*/
/* 				}*/
/* */
/* 				var total = 0;*/
/* 				$('#templateCon [total]').each(function(index, element) {*/
/* 					$(element).parents('table').find('tbody tr').not('.model').find('td:eq(' + $(element).index() + ')').each(function(i, e) {*/
/* 						console.log(i)*/
/* 						total += $(e).text().trim() ? parseFloat($(e).text().trim()) : 0;*/
/* 					});*/
/* 					$(element).text(total);*/
/* 					total = 0;*/
/* 				});*/
/* */
/* 				element.init('collapse');*/
/* 			}*/
/* */
/* 			//税费数据弹出层*/
/* 			function generatePop(type, data, id) {*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_service/get_tax_details',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						service_id: id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						var field = '';*/
/* 						showMark('#small-scale');*/
/* */
/* 						$('#showBox .title').text('税费数据');*/
/* 						var arr = [];*/
/* 						$('#templateCon [field]').each(function(index, element) {*/
/* */
/* 							if($(this).attr('field') == "state_time" || $(this).attr('field') == "business_time" ||$(this).attr('field') == "taxation_time") {*/
/* 								$(this).text(data[$(this).attr('field')] ? (data[$(this).attr('field')] != ',' ? data[$(this).attr('field')].split(',')[0] + "至" + data[$(this).attr('field')].split(',')[1] : "") : "");*/
/* 							}else if($(this).attr('field') == "local_time"){*/
/*                                 $(this).text(data[$(this).attr('field')] ? (data[$(this).attr('field')] != ',' && data["local_time"] && data["local_time"] != "null"  ? JSON.parse(data["local_time"]).join(' ')  : "") : "" );*/
/* 							} else if($(this).attr('field') == "files") {*/
/* 								if(data[$(this).attr('field')]) {*/
/* 									JSON.parse(data[$(this).attr('field')]).forEach(function(item) {*/
/* 										arr.push('<p style="padding-left: 2px;"><a href="' + item.url + '" data-url="' + item.url + '">' + item.name + '</a></p>')*/
/* 									})*/
/* 									$(this).html(arr.join(','));*/
/* 									/*$(this).find('a').click(function() {*/
/* 										var name = $(this).text();*/
/* 										var url = $(this).attr('data-url');*/
/* 										window.open(ykp.api_url + "/api/api_common/update_file_name?file_url=" + url + "&name=" + name)*/
/* 									})*//* */
/* 								}*/
/* 							}else if($(this).attr('field') == "state_other_tax"){*/
/*                                 $(this).text(data[$(this).attr('field')]);*/
/* */
/*                             }else {*/
/* //								console.log($(this).attr('field'));*/
/* 								$(this).text(data[$(this).attr('field')]);*/
/* 								$(this).val(data[$(this).attr('field')]);*/
/* 							}*/
/* 						});*/
/* 						*/
/* 					}*/
/* 				});*/
/* */
/* 				var arr = [];*/
/* 				if(data['files']) {*/
/* 					JSON.parse(data['files']).forEach(function(item) {*/
/* 						arr.push('<p style="padding-left: 2px;"><a href="' + item.url + '">' + item.name + '</a></p>')*/
/* 					})*/
/* */
/* 					$('#templateCon .fileList').append(arr.join(','));*/
/* 				}*/
/* */
/* 			}*/
/* */
/* 			function getTaxInfo(id) {*/
/* */
/* 				//				$(".taxData").click(function() {*/
/* 				//					*/
/* 				//					//生成弹税费数据出层*/
/* 				//				})*/
/* */
/* 			}*/
/* */
/* 			function changeStatus(status, id) {*/
/* 				var data = {*/
/* 					url: '/api/api_approves/edit_status',*/
/* 					methods: 'post',*/
/* 					data: {*/
/* 						id: id,*/
/* 						approve_result: status*/
/* 					}*/
/* 				}*/
/* console.log(status)*/
/* 				if(status == 3) {*/
/* 					$('#feedBack').show();*/
/* 					$('#feedBack .hold').click(function() {*/
/* 						var approve_reply = $('#feedBack').find('input').val();*/
/* 						if(approve_reply == '') {*/
/* 							ykp.prompt('不能为空！');*/
/* 							return false;*/
/* 						}else {*/
/* 							ykp.prompt('驳回成功！');*/
/* 							setStatus(data);*/
/* 						data.data.approve_reply = approve_reply.trim();*/
/* 						data.data.approve_reply = approve_reply;*/
/* 						setStatus(data);*/
/* 						$('.close_label').parents('.label_popup').fadeOut();*/
/* 						}*/
/* 						*/
/* 					})*/
/* 					cs.closePop();*/
/* 				} else if(status == 1) {*/
/* 						layui.use('layer', function() {*/
/* 						var layer = layui.layer;*/
/* 						layer.confirm('确认撤销审批？', function(flag) {*/
/* 							if(flag) {*/
/* 						layer.closeAll();*/
/* 						setStatus(data);*/
/* 							}*/
/* 						});*/
/* 					})*/
/* 				}else if(status == 2){*/
/* 					ykp.prompt('审批通过！');*/
/* 					setStatus(data);*/
/* 				} else {*/
/* 					setStatus(data);*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		//自定义table*/
/* 		cs.custorm_check('#dynamic-table', '#datalist', true);*/
/* */
/* 		function setStatus(data) {*/
/* 			ykp.doAjax({*/
/* 				url: data.url,*/
/* 				methods: data.methods,*/
/* 				data: data.data,*/
/* 				success: function(res) {*/
/* 	//				ykp.prompt('审批成功!');*/
/* 					getList();*/
/* 				}*/
/* 			})*/
/* 		};*/
/* 	$('.close_get ').click(function(){*/
/* 		getList()*/
/* 	    })*/
/* 	  });*/
/*     */
/* 	function checkAll(status) {*/
/* 		$("tbody input[name='check']").each(function(i, n) {*/
/* 			n.checked = status;*/
/* 		});*/
/* 	}*/
/* */
/* </script>*/
