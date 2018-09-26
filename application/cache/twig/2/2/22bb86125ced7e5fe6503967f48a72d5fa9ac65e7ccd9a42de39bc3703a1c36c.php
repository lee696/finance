<?php

/* admin/auditing/auditCustomerService.html */
class __TwigTemplate_1579e379b20cbbbe91fabb59c289bdeea64b4983baf7a1de9b4ee3223ce59a03 extends Twig_Template
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
\t#templateCon #recent-tab li{
\t\tpadding:12px;
\t}
\t#templateCon #recent-tab .active{
\t\tborder-bottom:1px solid #428bca !important;
\t}
\t.tab-content{
\t\tborder:none;
\t}
</style>
<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<!-- <h3 class=\"header smaller lighter blue\">客服审批</h3> -->
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
                <button id=\"search\" title=\"搜索\"  class=\"btn btn-info btn-sm\">
                    <i class=\"fa fa-search\"></i>
                </button>
            </div>
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32!important;\">
                    <i class=\"fa fa-refresh\"></i>
                </button>
            </div>
            <div class=\"col-sx-4\" contentAuthority=\"194\" style=\" float: left;margin-right: 5px;\">
                <button id=\"plSp\" title=\"批量审批\"  class=\"btn sp btn-info btn-sm\" style=\"background:#32CD32 !important;border-color:#32CD32 !important;\">
\t\t\t\t\t<i class=\"fa fa-check-circle-o\"></i>
                </button>
            </div>
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <div id=\"filterBtns\" style=\"display:inline-block;width:290px;\">
                    <a href=\"#\" class=\"\" style=\"background: #E6E6E6;\" data-status=\"all\">全部</a>
                    <a href=\"#\" class=\"\" data-status=\"1\"> 待审批</a>
                    <a href=\"#\" class=\"\" data-status=\"2\"> 已通过</a>
                    <a href=\"#\" class=\"\" data-status=\"3\"> 未通过</a>
                </div>
            </div>
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
\t\t\t\t\t\t<th data-num=\"4\">服务月份</th>
\t\t\t\t\t\t<th data-num=\"5\">发票采集</th>
\t\t\t\t\t\t<th data-num=\"6\">负责人</th>
\t\t\t\t\t\t<th data-num=\"7\">审批号码</th>
\t\t\t\t\t\t<th data-num=\"8\">提交员工</th>
\t\t\t\t\t\t<th data-num=\"9\">提交时间</th>
\t\t\t\t\t\t<th data-num=\"10\">审批员工</th>
\t\t\t\t\t\t<th data-num=\"11\">审批结果</th>
\t\t\t\t\t\t<th data-num=\"12\">审批时间</th>
\t\t\t\t\t\t<th data-num=\"13\">审批回复</th>
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
\t
\t<!--销项采集，进项采集-->
\t<div id=\"invoice_collect\" class=\"widget-box transparent\" id=\"recent-box\" style=\"display:none ;\">
\t\t<div style=\"width:1000px;\">
\t\t\t<div style=\"padding:10px 0;\">
\t\t\t\t<h3 style=\"font-size:16px;\">销项采集</h3>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<div class=\"layui-collapse\" >
\t\t\t\t  <div class=\"layui-colla-item\">
\t\t\t\t    <h2 class=\"layui-colla-title\">增值税专用发票</h2>
\t\t\t\t    <div class=\"layui-colla-content\">
\t\t\t\t    \t<div class=\"custom_table\">
\t\t\t\t\t    \t<table>
\t\t\t\t\t    \t\t\t<thead>
\t\t\t\t\t    \t\t\t\t<tr>
\t\t\t\t\t    \t\t\t\t\t<th>序号</th>
\t\t\t\t\t    \t\t\t\t\t<th>份数</th>
\t\t\t\t\t    \t\t\t\t\t<th>金额</th>
\t\t\t\t\t    \t\t\t\t\t<th>税率</th>
\t\t\t\t\t    \t\t\t\t\t<th>税额</th>
\t\t\t\t\t    \t\t\t\t\t<th>计税方式</th>
\t\t\t\t\t    \t\t\t\t\t<th>征税项目</th>
\t\t\t\t\t    \t\t\t\t\t<th>是否作废</th>
\t\t\t\t\t    \t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t\t    \t\t\t</thead>
\t\t\t\t\t    \t\t\t<tbody id=\"x1\">
\t\t\t\t\t    \t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t    \t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"invoice\"/>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<input type=\"text\" field=\"money\"/>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<input type=\"text\" field=\"amount_of_tax\"/>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">未作废</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t\t    \t\t\t</tbody>
\t\t\t\t\t    \t\t\t<tfoot>
\t\t\t\t\t    \t\t\t\t<tr>
\t\t\t\t\t    \t\t\t\t\t<td>总计</td>
\t\t\t\t\t    \t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t    \t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t\t    \t\t\t</tfoot>\t  
\t\t\t\t\t    \t</table>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"layui-colla-item\">
\t\t\t\t    <h2 class=\"layui-colla-title\">税控机动车专用发票</h2>
\t\t\t\t    <div class=\"layui-colla-content\">
\t\t\t\t    \t<div class=\"custom_table\">
\t\t\t\t\t    \t<table>
\t\t\t\t    \t\t\t<thead>
\t\t\t\t    \t\t\t\t<tr>
\t\t\t\t    \t\t\t\t\t<th>序号</th>
\t\t\t\t    \t\t\t\t\t<th>份数</th>
\t\t\t\t    \t\t\t\t\t<th>金额</th>
\t\t\t\t    \t\t\t\t\t<th>税率</th>
\t\t\t\t    \t\t\t\t\t<th>税额</th>
\t\t\t\t    \t\t\t\t\t<th>计税方式</th>
\t\t\t\t    \t\t\t\t\t<th>征税项目</th>
\t\t\t\t    \t\t\t\t\t<th>是否作废</th>
\t\t\t\t    \t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t    \t\t\t</thead>\t
\t\t\t\t    \t\t\t<tbody id=\"x2\">
\t\t\t\t    \t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t    \t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"invoice\"/>
\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t    \t\t\t\t\t\t<input type=\"text\" field=\"money\"/>
\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t    \t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t    \t\t\t\t\t\t<input type=\"text\" field=\"amount_of_tax\"/>
\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t    \t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t    \t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t    \t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">未作废</option>
\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t    \t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t    \t\t\t</tbody> 
\t\t\t\t    \t\t\t<tfoot>
\t\t\t\t    \t\t\t\t<tr>
\t\t\t\t    \t\t\t\t\t<td>总计</td>
\t\t\t\t    \t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t    \t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t    \t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t    \t\t\t</tfoot>
\t\t\t\t\t    \t</table>
\t\t\t\t\t    </div>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"layui-colla-item\">
\t\t\t\t    <h2 class=\"layui-colla-title\">普通发票</h2>
\t\t\t\t    <div class=\"layui-colla-content\">
\t\t\t\t    \t<div class=\"custom_table\">
\t\t\t\t\t    \t<table>
\t\t\t\t    \t\t\t<thead>
\t\t\t\t    \t\t\t\t<tr>
\t\t\t\t    \t\t\t\t\t<th>序号</th>
\t\t\t\t    \t\t\t\t\t<th>份数</th>
\t\t\t\t    \t\t\t\t\t<th>金额</th>
\t\t\t\t    \t\t\t\t\t<th>税率</th>
\t\t\t\t    \t\t\t\t\t<th>税额</th>
\t\t\t\t    \t\t\t\t\t<th>计税方式</th>
\t\t\t\t    \t\t\t\t\t<th>征税项目</th>
\t\t\t\t    \t\t\t\t\t<th>是否作废</th>
\t\t\t\t    \t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t    \t\t\t</thead>
\t\t\t\t    \t\t\t<tbody id=\"x3\">
\t\t\t\t    \t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t    \t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"invoice\"/>
\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t    \t\t\t\t\t\t<input type=\"text\" field=\"money\"/>
\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t    \t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t    \t\t\t\t\t\t<input type=\"text\" field=\"amount_of_tax\"/>
\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t    \t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t    \t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t    \t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">未作废</option>
\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t    \t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t    \t\t\t</tbody>
\t\t\t\t    \t\t\t<tfoot>
\t\t\t\t    \t\t\t\t<tr>
\t\t\t\t    \t\t\t\t\t<td>总计</td>
\t\t\t\t    \t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t    \t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t    \t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t    \t\t\t</tfoot> 
\t\t\t\t\t    \t</table>
\t\t\t\t\t    </div>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"layui-colla-item\">
\t\t\t\t    <h2 class=\"layui-colla-title\">未开具发票</h2>
\t\t\t\t    <div class=\"layui-colla-content\">
\t\t\t\t    \t<div class=\"custom_table\">
\t\t\t\t\t    \t<table>
\t\t\t\t    \t\t\t<thead>
\t\t\t\t    \t\t\t\t<tr>
\t\t\t\t    \t\t\t\t\t<th>序号</th>
\t\t\t\t    \t\t\t\t\t<th>业务类型</th>
\t\t\t\t    \t\t\t\t\t<th>金额</th>
\t\t\t\t    \t\t\t\t\t<th>税率</th>
\t\t\t\t    \t\t\t\t\t<th>税额</th>
\t\t\t\t    \t\t\t\t\t
\t\t\t\t    \t\t\t\t\t<th>计税方式</th>
\t\t\t\t    \t\t\t\t\t<th>征税项目</th>
\t\t\t\t    \t\t\t\t\t<th>是否作废</th>
\t\t\t\t    \t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t    \t\t\t\t\t<th>税款所属期</th>
\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t    \t\t\t</thead>
\t\t\t\t    \t\t\t<tbody id=\"x4\">
\t\t\t\t\t    \t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t    \t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"type\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">注册公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">变更公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">股权变更</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">注册商标</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"5\">注销公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">申请一般纳税人</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">记账报税</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<input type=\"text\" field=\"money\"/>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t
\t\t\t\t\t    \t\t\t\t\t
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<input type=\"text\"  field=\"amount_of_tax\"/>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">未作废</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<input type=\"text\" field=\"tax_money_period\"/>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t\t    \t\t\t</tbody>
\t\t\t\t\t    \t\t\t<tfoot>
\t\t\t\t\t    \t\t\t\t<tr>
\t\t\t\t\t    \t\t\t\t\t<td>总计</td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t    \t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t\t    \t\t\t</tfoot>
\t\t\t\t\t    \t</table>
\t\t\t\t\t    </div>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"layui-colla-item\">
\t\t\t\t    <h2 class=\"layui-colla-title\">纳税检查调整</h2>
\t\t\t\t    <div class=\"layui-colla-content\">
\t\t\t\t    \t<div class=\"custom_table\">
\t\t\t\t\t    \t<table>
\t\t\t\t    \t\t\t<thead>
\t\t\t\t    \t\t\t\t<tr>
\t\t\t\t    \t\t\t\t\t<th>序号</th>
\t\t\t\t    \t\t\t\t\t<th>业务类型</th>
\t\t\t\t    \t\t\t\t\t<th>金额</th>
\t\t\t\t    \t\t\t\t\t
\t\t\t\t    \t\t\t\t\t<th>税率</th>
\t\t\t\t    \t\t\t\t\t<th>税额</th>
\t\t\t\t    \t\t\t\t\t<th>计税方式</th>
\t\t\t\t    \t\t\t\t\t<th>征税项目</th>
\t\t\t\t    \t\t\t\t\t<th>是否作废</th>
\t\t\t\t    \t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t    \t\t\t\t\t<th>税款所属期</th>
\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t    \t\t\t</thead>
\t\t\t\t    \t\t\t<tbody id=\"x5\">
\t\t\t\t\t    \t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t    \t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"type\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">注册公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">变更公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">股权变更</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">注册商标</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"5\">注销公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">申请一般纳税人</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">记账报税</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<input type=\"text\" field=\"money\"/>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<input type=\"text\" field=\"amount_of_tax\"/>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">未作废</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<input field=\"tax_money_period\" type=\"text\"/>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t\t    \t\t\t</tbody>
\t\t\t\t\t    \t\t\t<tfoot>
\t\t\t\t\t    \t\t\t\t<tr>
\t\t\t\t\t    \t\t\t\t\t<td>总计</td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t    \t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t\t    \t\t\t</tfoot>  
\t\t\t\t\t    \t</table>
\t\t\t\t\t    </div>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"layui-colla-item\">
\t\t\t\t    <h2 class=\"layui-colla-title\">地税开具其他发票及未开票销售额</h2>
\t\t\t\t    <div class=\"layui-colla-content\">
\t\t\t\t    \t<div class=\"custom_table\">
\t\t\t\t    \t\t<table>
\t\t\t\t    \t\t\t<thead>
\t\t\t\t    \t\t\t\t<tr>
\t\t\t\t    \t\t\t\t\t<th>序号</th>
\t\t\t\t    \t\t\t\t\t<th>份数</th>
\t\t\t\t    \t\t\t\t\t<th>业务类型</th>
\t\t\t\t    \t\t\t\t\t<th>金额</th>
\t\t\t\t    \t\t\t\t\t<th>税率</th>
\t\t\t\t    \t\t\t\t\t<th>税额</th>
\t\t\t\t    \t\t\t\t\t
\t\t\t\t    \t\t\t\t\t<th>计税方式</th>
\t\t\t\t    \t\t\t\t\t<th>征税项目</th>
\t\t\t\t    \t\t\t\t\t<th>是否作废</th>
\t\t\t\t    \t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t    \t\t\t\t\t<th>税款所属期</th>
\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t    \t\t\t</thead>
\t\t\t\t    \t\t\t<tbody id=\"x6\">
\t\t\t\t\t    \t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t    \t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" field=\"invoice\"/>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"type\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">注册公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">变更公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">股权变更</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">注册商标</option>
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"5\">注销公司</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">申请一般纳税人</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">记账报税</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<input field=\"money\" type=\"text\"/>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select field=\"tax_rate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13%</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17%</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>\t\t\t\t    \t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<input field=\"amount_of_tax\" type=\"text\"/>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"charge_mode\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">一般计税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">简易征税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">免税</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">免抵退</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"tax_project\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">应税货物</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">应税劳务</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">应税服务不动产</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"is_invalid\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">已作废</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">未作废</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<input field=\"tax_money_period\" type=\"text\"/>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t\t    \t\t\t</tbody>
\t\t\t\t\t\t    \t\t\t<tfoot>
\t\t\t\t\t    \t\t\t\t<tr>
\t\t\t\t\t    \t\t\t\t\t<td>总计</td>
\t\t\t\t\t    \t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t    \t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t\t    \t\t\t</tfoot>  
\t\t\t\t\t    \t</table>
\t\t\t\t    \t</div>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div style=\"display:none;\" class=\"jxcj\">
\t\t\t<div style=\"padding:10px 0;\">
\t\t\t\t<h3 style=\"font-size:16px;\">进项采集</h3>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<div class=\"layui-collapse\" lay-accordion>
\t\t\t\t  <div class=\"layui-colla-item\">
\t\t\t\t    <h2 class=\"layui-colla-title\">增值税专用发票</h2>
\t\t\t\t    <div class=\"layui-colla-content\">
\t\t\t\t    \t<div class=\"custom_table\">
\t\t\t\t\t    \t<table>
\t\t\t\t    \t\t\t<thead>
\t\t\t\t    \t\t\t\t<tr>
\t\t\t\t    \t\t\t\t\t<th>序号</th>
\t\t\t\t    \t\t\t\t\t<th>份数</th>
\t\t\t\t    \t\t\t\t\t<th>金额</th>
\t\t\t\t    \t\t\t\t\t<th>税率</th>
\t\t\t\t    \t\t\t\t\t<th>税额</th>
\t\t\t\t    \t\t\t\t\t
\t\t\t\t    \t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t    \t\t\t\t\t<th>是否抵扣</th>
\t\t\t\t    \t\t\t\t\t<th>申报所属期</th>
\t\t\t\t    \t\t\t\t\t<th>认证日期</th>
\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t    \t\t\t</thead>
\t\t\t\t    \t\t\t<tbody id=\"j1\">
\t\t\t\t\t    \t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t    \t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"invoice\" type=\"text\"/>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<input field=\"money\" type=\"text\"/>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t
\t\t\t\t\t    \t\t\t\t\t<td>
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
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<input field=\"amount_of_tax\" type=\"text\"/>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"deductible\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<!--<select field=\"declare_period\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>-->
\t\t\t\t\t    \t\t\t\t\t\t<input field=\"tax_money_period\" type=\"text\"/>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t                        <input class=\"date-timepicker1\"  field=\"auth_time\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t\t                        <span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
\t\t\t\t\t\t\t                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t\t    \t\t\t</tbody>
\t\t\t\t\t    \t\t\t<tfoot>
\t\t\t\t\t    \t\t\t\t<tr>
\t\t\t\t\t    \t\t\t\t\t<td>总计</td>
\t\t\t\t\t    \t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t    \t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t    \t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t\t    \t\t\t</tfoot> \t  
\t\t\t\t\t    \t</table>
\t\t\t\t\t    </div>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"layui-colla-item\">
\t\t\t\t    <h2 class=\"layui-colla-title\">税控机动车发票</h2>
\t\t\t\t    <div class=\"layui-colla-content\">
\t\t\t\t    \t<div class=\"custom_table\">
\t\t\t\t\t    \t<table>
\t\t\t\t    \t\t\t<thead>
\t\t\t\t    \t\t\t\t<tr>
\t\t\t\t    \t\t\t\t\t<th>序号</th>
\t\t\t\t    \t\t\t\t\t<th>份数</th>
\t\t\t\t    \t\t\t\t\t<th>金额</th>\t\t\t\t    \t\t\t\t\t
\t\t\t\t    \t\t\t\t\t<th>税率</th>
\t\t\t\t    \t\t\t\t\t<th>税额</th>
\t\t\t\t    \t\t\t\t\t<th>是否即征即退</th>
\t\t\t\t    \t\t\t\t\t<th>是否抵扣</th>
\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t    \t\t\t</thead>
\t\t\t\t    \t\t\t<tbody id=\"j2\">
\t\t\t\t\t    \t\t\t\t<tr style=\"display:none;\" class=\"model\">
\t\t\t\t\t    \t\t\t\t\t<td class=\"sequence\"></td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<input field=\"invoice\" type=\"text\"/>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<input field=\"money\" type=\"text\"/>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t
\t\t\t\t\t    \t\t\t\t\t<td>
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
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<input field=\"amount_of_tax\" type=\"text\"/>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"whether_tax\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t\t<td>
\t\t\t\t\t    \t\t\t\t\t\t<select field=\"deductible\">
\t\t\t\t\t    \t\t\t\t\t\t\t<option value=\"1\">是</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">否</option>
\t\t\t\t\t    \t\t\t\t\t\t</select>
\t\t\t\t\t    \t\t\t\t\t</td>
\t\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t\t    \t\t\t</tbody>  
\t\t\t\t\t    \t\t\t<tfoot>
\t\t\t\t\t    \t\t\t\t<tr>
\t\t\t\t\t    \t\t\t\t\t<td>总计</td>
\t\t\t\t\t    \t\t\t\t\t<td total=\"invoice\"></td>
\t\t\t\t\t    \t\t\t\t\t<td total=\"money\"></td>
\t\t\t\t\t    \t\t\t\t\t<td total=\"amount_of_tax\"></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t\t<td></td>
\t\t\t\t\t    \t\t\t\t</tr>
\t\t\t\t\t    \t\t\t</tfoot>  \t
\t\t\t\t\t    \t</table>
\t\t\t\t\t    </div>
\t\t\t\t    </div>
\t\t\t\t  </div>
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
</div>
";
        // line 882
        $this->loadTemplate("admin/mark.html", "admin/auditing/auditCustomerService.html", 882)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/auditing/auditCustomerService.html", 882)->display($context);
        // line 883
        echo "<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script type=\"text/javascript\">
\t\$(function() {
\t\tif(cs.approve_authority({name:'客服',nodes:[194]})){
            \$('[contentAuthority=\"194\"]').show();
        }
var cid = ykp.getCookie(\"custom_id\");
\t\tvar order = 'spm_approves.approve_result asc,spm_approves.id desc';
\t\tvar pagesize = 10;
\t\tvar employees = {}; //所有员工

\t\t//获取所有员工
\t\tgetEmployees();

\t\tfunction getEmployees() {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_employees/f7',
\t\t\t\tmethod: 'post',
\t\t\t\tasync: false,
\t\t\t\tdata: {
\t\t\t\t\tselect: 'bmm_employees.id,bmm_employees.name'
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\temployees[data[i]['id']] = data[i]['name'];
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//点击顶部  按钮时调用
\t\tclickBtn();

\t\tfunction clickBtn() {
\t\t\t\$('#topTool').on('click', 'a', function(item) {
\t\t\t\tif (!\$(this).hasClass('clc')) {
                    \$(this).addClass('clc').siblings().removeClass('clc');
                }
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

\t\t\$('#flush').click(function(){
\t\t\t\$('#topTool input').val('');
\t\t\tfilter = '';
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetList();
\t\t})
\t\t\$('#filterBtns a').mouseover(function(){
            \$(this).addClass('over');
        })
        \$('#filterBtns a').mouseout(function(){
            \$(this).removeClass('over');
        })

\t\t\$('#plSp').click(function() {
\t\t\tvar status = '',
\t\t\t\tn = 0,
\t\t\t\tStatu = false,
\t\t\t\tcoldata = []
\t\t\t\$('#datalist').find('input[type=\"checkbox\"]:checked').each(function(i) {
\t\t\t\tn++;
\t\t\t\tif(\$(this).parents('tr').attr('data-status') == 3 || \$(this).parents('tr').attr('data-status') == 2) {
\t\t\t\t\tykp.prompt('审批过的不能批量审批!');
\t\t\t\t\tStatu = false;
\t\t\t\t\treturn false;
\t\t\t\t}  else {
\t\t\t\t\tstatus = \$(this).parents('tr').attr('status') == 1 ? 2 : 1;
\t\t\t\t\tcoldata.push({
\t\t\t\t\t\tid: \$(this).parents('tr').attr('data-id'),
\t\t\t\t\t\tapprove_result: status
\t\t\t\t\t});
\t\t\t\t\tStatu = true;
\t\t\t\t}
\t\t\t})
\t\t\tif(n == 0) {
\t\t\t\tykp.prompt('请选择再审批！');
\t\t\t\treturn false;
\t\t\t} else {
\t\t\t\tif(Statu) {
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: \"/api/api_approves/batch_edit\",
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tdata: JSON.stringify(coldata),
\t\t\t\t\t\t\ttype: '6'
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tykp.prompt('审批成功');
\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t}
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
\t\t\tif(!cs.getSpStatus('客服')) {
\t\t\t\tykp.prompt('暂时没有开启审批功能');
\t\t\t\treturn false;
\t\t\t}
\t\t\tpagesize = \$(this).val();
\t\t\tykp.setCookie('page_size',pagesize);
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

\t\tgetList();

\t\tfunction getList(current, clickstatus, keyWords) {
\t\t\tif(!cs.getSpStatus('客服')) {
\t\t\t\tykp.prompt('暂时没有开启审批功能');
\t\t\t\treturn false;
\t\t\t}
\t\t\tcurrent = current ? current : 1;
\t\t\tvar data = {
\t\t\t\tpage_size: pagesize,
\t\t\t\tcurrent: current,
\t\t\t\ttype: 19,
\t\t\t\torder: order,
\t\t\t\tcontentId: \"#datalist\", //默认排序
\t\t\t\tinitOrder: \"\", //初始化sort
\t\t\t\tdefaultOrder: order,
\t\t\t\tparams: [{
\t\t\t\t\tid: \"#dynamic-table\",
\t\t\t\t\tfield: [\"\",\"\",\"spm_approves.customer_id\", \"spm_approves.customer_num\", \"\", \"\",\"\",\"\",\"spm_approves.customer_num\", \"spm_approves.submit_employee_name\", \"spm_approves.submit_time\",
\t\t\t\t\t\t\"\",\"spm_approves.approve_result\", \"spm_approves.approve_time\", \"spm_approves.approve_reply\",\"\"]
\t\t\t\t}]
\t\t\t}
\t\t\t//判断是否有过滤   
//\t\t\tif(clickstatus && !isNaN(clickstatus)) {
//\t\t\t\tdata.approve_result = clickstatus;
//\t\t\t}
//\t\t\tif(keyWords) {
//\t\t\t\tdata.search = keyWords
//\t\t\t}

if(clickstatus && !isNaN(clickstatus)) {
\t\t\t\tdata.approve_result = clickstatus;
\t\t\t}
\t\t\tif(keyWords) {
\t\t\t\tdata.search = keyWords
\t\t\t}
\t\t\tif(cid) {
\t\t\t\tdata.search = 'spm_approves.customer_name  ' + ' like \\'%' + cid + '%\\'';
\t\t\t\tykp.setCookie('page_no', 1);
\t\t\t}

\t\t\t//console.log(data);
\t\t\tcs.spList(data, function(res) {
\t\t\t\t//console.log(res)
\t\t\t\tvar data = res.data.items;
\t//\t\t\tvar _data = [];
\t\t\t\tif(data.length == 0) {
\t\t\t\t\tsetTimeout(function(){
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t},1000);
\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"color:#7d7d7d !important;text-align:center !important;\" class=\"page\">暂无数据</div></td></tr>');

\t\t\t\t} else {
\t\t\t\t\t//审批权限为true可以审批,为false不可审批
                    var spApp = cs.approve_authority({name:'客服',nodes:[195]});
                    var cxApp = cs.approve_authority({name:'客服',nodes:[259]});

                    var styles = [];
                    \$('#dynamic-table th').each(function(i,e){
                        styles.push(\$(this).css('display'));
                    });

\t\t\t\t\tvar status = ['','待审批', '已通过', '未通过']; //审核状态
\t\t\t\t\tvar statusColor = ['','#dfba49', '#45b6af', '#f3565d'];
\t\t\t\t\tvar content = '';
\t\t\t\t\tvar _data = {}; //报税数据
\t\t\t\t\tfor(var i in data) {
\t//\t\t\t\t\t_data.push(data[i]['submitted_data']['list']);
                          _data[i] = data[i]['submitted_data']['list'];
\t\t\t\t\t\tcontent += `<tr data-id=\"\${data[i]['spm_approves.id']}\" status=\"\${data[i]['spm_approves.approve_result']}\">
\t\t\t\t\t\t\t\t <td class=\"center\">
                                <label class=\"pos-rel\">
                                    <input type=\"checkbox\" name=\"check\" class=\"ace\"/>
                                    <span class=\"lbl\"></span>
                                </label>
                            </td>
\t\t\t\t\t\t <td>
\t\t\t\t\t\t<label class=\"pos-rel\">
                        <a href=\"#\" class=\"sp btOrange\" data-status = \"1\" style=\"display: \${cxApp ? (data[i]['spm_approves.approve_result'] == 2 ? 'inline-block' : 'none') : 'none'};color:#fff !important\" contentAuthority=\"259\" title=\"撤销\"><i class=\"fa fa-rotate-left\"></i></a>
                        <a href=\"#\" class=\"sp btGreen\" data-status = \"2\" style=\"display: \${spApp ? (data[i]['spm_approves.approve_result'] == 1 ?'inline-block' : 'none') : 'none'};color:#fff !important\" contentAuthority=\"195\" title=\"通过\"><i class=\"fa fa-check-circle-o\"></i></a>
                    \t<a href=\"#\" class=\"sp btRed\" data-status = \"3\" style=\"display: \${spApp ? (data[i]['spm_approves.approve_result'] == 1 ?'inline-block' : 'none') : 'none'};color:#fff !important\" contentAuthority=\"195\" title=\"驳回\"><i class=\"fa fa-times-circle\"></i></a>
                    \t</label>
                    </td>
                    <td data-num=\"1\" style=\"display:\${styles[2]}\" data-cid=\"\${data[i]['spm_approves.customer_id']}\"> 
                    \t<a class=\"customerDetail pos-rel\" href=\"#\">\${data[i]['spm_approves.customer_name']}</a>
                    \t<label class=\"pos-rel\">
\t\t\t\t \t\t\t\t<i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data[i]['Remark'].length > 0 ? 'red' : ''}\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i>
\t\t\t \t\t\t\t </label>
                    </td>                  
                    <td data-num=\"2\" style=\"display:\${styles[3]}\">\${data[i]['spm_approves.customer_num']}</td>
                    <td data-num=\"3\" style=\"display:\${styles[4]}\">\${data[i]['submitted_data']['service_info']['khm_customer.tax_type'] == 1 ? '一般纳税人' : '小规模'}</td>
                    <td data-num=\"4\" style=\"display:\${styles[5]}\">\${data[i].submitted_data['service_info']['jzm_service_info.time']}</td>
                    <td data-num=\"5\" style=\"display:\${styles[6]}\"><a href=\"javascript:;\" style=\"text-decoration:none;\" service-id=\"\${data[i]['submitted_data']['list'].length > 0 ? data[i]['submitted_data']['list'][0]['service_id'] : \"\"}\" tax_type=\"\${data[i]['submitted_data']['service_info']['khm_customer.tax_type']}\" class=\"collect pos-rel\">查看</a></td>
                    <td data-num=\"6\" style=\"display:\${styles[7]}\">\${data[i].submitted_data['service_info']['jzm_service_info.fuze_id'] != '0' ? employees[data[i].submitted_data['service_info']['jzm_service_info.fuze_id']] || \"\" : ''}</td>
                    <td data-num=\"7\" style=\"display:\${styles[8]}\">\${data[i]['spm_approves.approve_code']}</td>
                    <td data-num=\"8\" style=\"display:\${styles[9]}\"><a href=\"#\">\${data[i]['spm_approves.submit_employee_name']}</a></td>
                    <td data-num=\"9\" style=\"display:\${styles[10]}\">\${cs.getNowTime(data[i]['spm_approves.submit_time'],true)}</td>
                    <td data-num=\"10\" style=\"display:\${styles[11]}\">\${data[i]['approve_employee_name'] ? data[i]['approve_employee_name']['name'] : \"\"}</td>
                    <td data-num=\"11\" style=\"display:\${styles[12]}\"><label class=\"label\" style=\" background:\${statusColor[data[i]['spm_approves.approve_result']]} \">\${status[data[i]['spm_approves.approve_result']]}</label></td>
                    <td data-num=\"12\" style=\"display:\${styles[13]}\">\${data[i]['spm_approves.approve_time'] != '0' ? cs.getNowTime(data[i]['spm_approves.approve_time'],true) : ''}</td>
                    <td data-num=\"13\" style=\"display:\${styles[14]}\">\${data[i]['spm_approves.approve_reply']}</td>
                   
                \t\t</tr>`;
\t\t\t\t\t}

\t\t\t\t\t\$('#datalist').html(content);
\t\t\t\t\t//使用Layui面板
                    console.log(_data);
                    layui.use('element',function(){
\t\t\t\t\t\tvar element = layui.element;
\t\t\t\t\t\tinvoice_detail(_data,element);
\t\t\t\t\t});

\t\t\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\t\t\tcustom.get_custom_info();
\t\t\t\t\tcustom.showReamrk();
\t\t\t\t\t\$(\"#datalist tr\").find('.sp').click(function() {
\t\t\t\t\t\tvar status = \$(this).attr('data-status');
\t\t\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\t\t\tif(status != '0'){
\t\t\t\t\t\t\tchangeStatus(status, id);
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t})
\t\t\t\t}
\t\t\t}, \"客服\");

\t\t\t//发票采集详情
\t\t\tfunction invoice_detail(data,element){
                \$('.collect').click(function(){
\t\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\t\tvar tax_type = \$(this).attr('tax_type');
\t\t\t\t\tvar service_id = \$(this).attr('service-id');

\t\t\t\t\tshowMark('#invoice_collect');
\t\t\t\t\telement.init('collapse');
\t\t\t\t\t\$('#showBox .title').text('发票采集详情');
\t\t\t\t\tif(tax_type == 1){
\t\t\t\t\t\t\$('#templateCon .jxcj').show();
\t\t\t\t\t}

\t\t\t\t\t//获取发票采集数据
\t\t\t\t\tgetInvoiceCollectData(data[index],element);
\t\t\t\t});
\t\t\t}

\t\t\t//获取发票采集数据
\t\t\tfunction getInvoiceCollectData(data,element){

\t\t\t\t//var type = ['注册公司','变更公司','股权变更','注册商标','注销公司','申请一般纳税人','记账报税'];//业务类型
                var type = ['','无票视同销售','增值税专用发票','增值税普通发票'];//业务类型
\t\t\t\tvar tax_way = ['','一般计税','简单征收','免税','免抵退'];//计税方式
\t\t\t\tvar tax_item = ['','应税货物','应税劳务','应税服务不动产'];//征税项目

\t\t\t\tvar _ztype;
\t\t\t\tvar model;
\t\t\t\tvar _model;
\t\t\t\tvar html;
                console.log(data);
                for(var i in data){
                    console.log(data[i]['charge_mode'])
\t\t\t\t\tif(!data[i]['ztype'] || data[i]['ztype'] === '0'){
\t\t\t\t\t\tcontinue;
\t\t\t\t\t}
\t\t\t\t\t_ztype = data[i]['ztype'];
\t\t\t\t\tmodel = \$('#templateCon #' +_ztype).find('.model').html();;
\t\t\t\t\t_model = \$(model);
\t\t\t\t\thtml = \$('<tr></tr>');
\t\t\t\t\tif(!\$('#templateCon #' + _ztype).parents('.layui-colla-content').hasClass('layui-show')){
\t\t\t\t\t\t\$('#templateCon #' + _ztype).parents('.layui-colla-content').addClass('layui-show');
\t\t\t\t\t}
\t\t\t\t\t_model.eq(0).text(\$('#templateCon #' +_ztype).find('tr').length);
\t\t\t\t\t_model.find('[field]').each(function(index,element){
\t\t\t\t\t\tif(\$(this).attr('field') == 'charge_mode'){
\t\t\t\t\t\t\t\$(this).parent().html(data[i]['charge_mode'] != 0 ? tax_way[data[i]['charge_mode']] : '');
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('field') == 'tax_project'){
\t\t\t\t\t\t\t\$(this).parent().html(data[i]['tax_project'] != 0 ? tax_item[data[i]['tax_project']] : '');
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('field') == 'is_invalid'){
\t\t\t\t\t\t\t\$(this).parent().text(data[i]['is_invalid'] != 0 ? '作废' : '未作废');
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('field') == 'whether_tax'){
\t\t\t\t\t\t\t\$(this).parent().text(data[i]['whether_tax'] != 0 ? '是' : '否');
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('field') == 'deductible'){
\t\t\t\t\t\t\t\$(this).parent().text(data[i]['deductible'] != 0 ? '是' : '否');
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('field') == 'auth_time'){
\t\t\t\t\t\t\t\$(this).parent().text(data[i]['auth_time'] != 0 ? cs.getNowTime(data[i]['auth_time']) : '');
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('field') == 'type'){
\t\t\t\t\t\t\t\$(this).parent().text(data[i]['type'] != 0 ? type[data[i]['type']] : '');
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('field') == 'tax_rate'){
\t\t\t\t\t\t\t\$(this).parent().text(data[i]['tax_rate'] + '%');
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('field') == 'tax_money_period'){
\t\t\t\t\t\t\t\$(this).text(data[i]['tax_money_period']);
\t\t\t\t\t\t}

\t\t\t\t\t\t\$(this).parent().text(data[i][\$(this).attr('field')]);
\t\t\t\t\t});

\t\t\t\t\thtml.append(_model);
\t\t\t\t\t\$('#templateCon #' +_ztype).append(html);
\t\t\t\t}

\t\t\t\tvar total = 0;
\t\t\t\t\$('#templateCon [total]').each(function(index,element){
\t\t\t\t\t\$(element).parents('table').find('tbody tr').not('.model').find('td:eq('+ \$(element).index() +')').each(function(i,e){
\t\t\t\t\t\ttotal += \$(e).text().trim() ? parseFloat(\$(e).text().trim()) : 0;
\t\t\t\t\t});
\t\t\t\t\t\$(element).text(total);
\t\t\t\t\ttotal = 0;
\t\t\t\t});

\t\t\t\telement.init('collapse');
\t\t\t}

\t\t\t//发票采集中销项采集  进项采集切换
\t\t\tfunction toggle_collect(){
\t\t\t\t\$('#templateCon #recent-tab li').click(function(){
\t\t\t\t\tif(\$(this).hasClass('active')){
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\t\$(this).addClass('active').siblings().removeClass('active');
\t\t\t\t\t\$('#templateCon .tab-content .tab-pane').eq(\$(this).index()).show().siblings().hide();
\t\t\t\t});
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
\t\t\t\tif(status == 3) {
\t\t\t\t\t\$('#feedBack').show();
\t\t\t\t\t\$('#feedBack .hold').click(function() {
\t\t\t\t\t\tvar approve_reply = \$('#feedBack').find('input').val();
\t\t\t\t\t\tif(approve_reply == '') {
\t\t\t\t\t\t\tykp.prompt('不能为空！');
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\tykp.prompt('驳回成功！');
\t\t\t\t\t\t\tdata.data.approve_reply = approve_reply.trim();
\t\t\t\t\t\t\tdata.data.approve_reply = approve_reply;
\t\t\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t\t\t}\t\t\t\t\t\t
\t\t\t\t\t})
\t\t\t\t\tcs.closePop();
\t\t\t\t} else if(status == 1){
//                  bootbox.confirm('确认撤销审批？', function(flag){
//                      if(flag){
//                          setStatus(data);
//                      }
//                  })
\t\tlayui.use('layer', function() {
\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\tlayer.confirm('确认撤销审批？', function(flag) {
\t\t\t\t\t\t\tif(flag) {
\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t})
                 }else if(status == 2){
                 \tykp.prompt('审批通过！');
                 \tsetStatus(data);
                 } else {
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
\t\t\t//\t\t\tcs.doAjax(data,function(res) {
\t\t\t//\t\t\t
\t\t\t//\t\t\t})
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
        return "admin/auditing/auditCustomerService.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  906 => 883,  902 => 882,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	#templateCon #recent-tab li{*/
/* 		padding:12px;*/
/* 	}*/
/* 	#templateCon #recent-tab .active{*/
/* 		border-bottom:1px solid #428bca !important;*/
/* 	}*/
/* 	.tab-content{*/
/* 		border:none;*/
/* 	}*/
/* </style>*/
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<!-- <h3 class="header smaller lighter blue">客服审批</h3> -->*/
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
/*                 <button id="search" title="搜索"  class="btn btn-info btn-sm">*/
/*                     <i class="fa fa-search"></i>*/
/*                 </button>*/
/*             </div>*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32!important;">*/
/*                     <i class="fa fa-refresh"></i>*/
/*                 </button>*/
/*             </div>*/
/*             <div class="col-sx-4" contentAuthority="194" style=" float: left;margin-right: 5px;">*/
/*                 <button id="plSp" title="批量审批"  class="btn sp btn-info btn-sm" style="background:#32CD32 !important;border-color:#32CD32 !important;">*/
/* 					<i class="fa fa-check-circle-o"></i>*/
/*                 </button>*/
/*             </div>*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <div id="filterBtns" style="display:inline-block;width:290px;">*/
/*                     <a href="#" class="" style="background: #E6E6E6;" data-status="all">全部</a>*/
/*                     <a href="#" class="" data-status="1"> 待审批</a>*/
/*                     <a href="#" class="" data-status="2"> 已通过</a>*/
/*                     <a href="#" class="" data-status="3"> 未通过</a>*/
/*                 </div>*/
/*             </div>*/
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
/* 						<th data-num="4">服务月份</th>*/
/* 						<th data-num="5">发票采集</th>*/
/* 						<th data-num="6">负责人</th>*/
/* 						<th data-num="7">审批号码</th>*/
/* 						<th data-num="8">提交员工</th>*/
/* 						<th data-num="9">提交时间</th>*/
/* 						<th data-num="10">审批员工</th>*/
/* 						<th data-num="11">审批结果</th>*/
/* 						<th data-num="12">审批时间</th>*/
/* 						<th data-num="13">审批回复</th>*/
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
/* 	*/
/* 	<!--销项采集，进项采集-->*/
/* 	<div id="invoice_collect" class="widget-box transparent" id="recent-box" style="display:none ;">*/
/* 		<div style="width:1000px;">*/
/* 			<div style="padding:10px 0;">*/
/* 				<h3 style="font-size:16px;">销项采集</h3>*/
/* 			</div>*/
/* 			<div>*/
/* 				<div class="layui-collapse" >*/
/* 				  <div class="layui-colla-item">*/
/* 				    <h2 class="layui-colla-title">增值税专用发票</h2>*/
/* 				    <div class="layui-colla-content">*/
/* 				    	<div class="custom_table">*/
/* 					    	<table>*/
/* 					    			<thead>*/
/* 					    				<tr>*/
/* 					    					<th>序号</th>*/
/* 					    					<th>份数</th>*/
/* 					    					<th>金额</th>*/
/* 					    					<th>税率</th>*/
/* 					    					<th>税额</th>*/
/* 					    					<th>计税方式</th>*/
/* 					    					<th>征税项目</th>*/
/* 					    					<th>是否作废</th>*/
/* 					    					<th>是否即征即退</th>*/
/* 					    				</tr>*/
/* 					    			</thead>*/
/* 					    			<tbody id="x1">*/
/* 					    				<tr style="display:none;" class="model">*/
/* 					    					<td class="sequence"></td>*/
/* 					    					<td>*/
/* 												<input type="text" field="invoice"/>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<input type="text" field="money"/>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<select field="tax_rate">*/
/* 					    							<option value="0">0</option>*/
/* 					    							<option value="3">3%</option>*/
/* 					    							<option value="4">4%</option>*/
/* 					    							<option value="5">5%</option>*/
/* 					    							<option value="6">6%</option>*/
/* 					    							<option value="11">11%</option>*/
/* 					    							<option value="13">13%</option>*/
/* 					    							<option value="17">17%</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<input type="text" field="amount_of_tax"/>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<select field="charge_mode">*/
/* 					    							<option value="1">一般计税</option>*/
/* 													<option value="2">简易征税</option>*/
/* 													<option value="3">免税</option>*/
/* 													<option value="4">免抵退</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<select field="tax_project">*/
/* 					    							<option value="1">应税货物</option>*/
/* 													<option value="2">应税劳务</option>*/
/* 													<option value="3">应税服务不动产</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<select field="is_invalid">*/
/* 					    							<option value="1">已作废</option>*/
/* 													<option value="0">未作废</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<select field="whether_tax">*/
/* 					    							<option value="1">是</option>*/
/* 													<option value="0">否</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    				</tr>*/
/* 					    			</tbody>*/
/* 					    			<tfoot>*/
/* 					    				<tr>*/
/* 					    					<td>总计</td>*/
/* 					    					<td total="invoice"></td>*/
/* 					    					<td total="money"></td>*/
/* 					    					<td></td>*/
/* 					    					<td total="amount_of_tax"></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    				</tr>*/
/* 					    			</tfoot>	  */
/* 					    	</table>*/
/* 						</div>*/
/* 				    </div>*/
/* 				  </div>*/
/* 				  <div class="layui-colla-item">*/
/* 				    <h2 class="layui-colla-title">税控机动车专用发票</h2>*/
/* 				    <div class="layui-colla-content">*/
/* 				    	<div class="custom_table">*/
/* 					    	<table>*/
/* 				    			<thead>*/
/* 				    				<tr>*/
/* 				    					<th>序号</th>*/
/* 				    					<th>份数</th>*/
/* 				    					<th>金额</th>*/
/* 				    					<th>税率</th>*/
/* 				    					<th>税额</th>*/
/* 				    					<th>计税方式</th>*/
/* 				    					<th>征税项目</th>*/
/* 				    					<th>是否作废</th>*/
/* 				    					<th>是否即征即退</th>*/
/* 				    				</tr>*/
/* 				    			</thead>	*/
/* 				    			<tbody id="x2">*/
/* 				    				<tr style="display:none;" class="model">*/
/* 				    					<td class="sequence"></td>*/
/* 				    					<td>*/
/* 											<input type="text" field="invoice"/>*/
/* 				    					</td>*/
/* 				    					<td>*/
/* 				    						<input type="text" field="money"/>*/
/* 				    					</td>*/
/* 				    					<td>*/
/* 				    						<select field="tax_rate">*/
/* 				    							<option value="0">0</option>*/
/* 				    							<option value="3">3%</option>*/
/* 				    							<option value="4">4%</option>*/
/* 				    							<option value="5">5%</option>*/
/* 				    							<option value="6">6%</option>*/
/* 				    							<option value="11">11%</option>*/
/* 				    							<option value="13">13%</option>*/
/* 				    							<option value="17">17%</option>*/
/* 				    						</select>*/
/* 				    					</td>*/
/* 				    					<td>*/
/* 				    						<input type="text" field="amount_of_tax"/>*/
/* 				    					</td>*/
/* 				    					<td>*/
/* 				    						<select field="charge_mode">*/
/* 				    							<option value="1">一般计税</option>*/
/* 												<option value="2">简易征税</option>*/
/* 												<option value="3">免税</option>*/
/* 												<option value="4">免抵退</option>*/
/* 				    						</select>*/
/* 				    					</td>*/
/* 				    					<td>*/
/* 				    						<select field="tax_project">*/
/* 				    							<option value="1">应税货物</option>*/
/* 												<option value="2">应税劳务</option>*/
/* 												<option value="3">应税服务不动产</option>*/
/* 				    						</select>*/
/* 				    					</td>*/
/* 				    					<td>*/
/* 				    						<select field="is_invalid">*/
/* 				    							<option value="1">已作废</option>*/
/* 												<option value="0">未作废</option>*/
/* 				    						</select>*/
/* 				    					</td>*/
/* 				    					<td>*/
/* 				    						<select field="whether_tax">*/
/* 				    							<option value="1">是</option>*/
/* 												<option value="0">否</option>*/
/* 				    						</select>*/
/* 				    					</td>*/
/* 				    				</tr>*/
/* 				    			</tbody> */
/* 				    			<tfoot>*/
/* 				    				<tr>*/
/* 				    					<td>总计</td>*/
/* 				    					<td total="invoice"></td>*/
/* 				    					<td total="money"></td>*/
/* 				    					<td></td>*/
/* 				    					<td total="amount_of_tax"></td>*/
/* 				    					<td></td>*/
/* 				    					<td></td>*/
/* 				    					<td></td>*/
/* 				    					<td></td>*/
/* 				    				</tr>*/
/* 				    			</tfoot>*/
/* 					    	</table>*/
/* 					    </div>*/
/* 				    </div>*/
/* 				  </div>*/
/* 				  <div class="layui-colla-item">*/
/* 				    <h2 class="layui-colla-title">普通发票</h2>*/
/* 				    <div class="layui-colla-content">*/
/* 				    	<div class="custom_table">*/
/* 					    	<table>*/
/* 				    			<thead>*/
/* 				    				<tr>*/
/* 				    					<th>序号</th>*/
/* 				    					<th>份数</th>*/
/* 				    					<th>金额</th>*/
/* 				    					<th>税率</th>*/
/* 				    					<th>税额</th>*/
/* 				    					<th>计税方式</th>*/
/* 				    					<th>征税项目</th>*/
/* 				    					<th>是否作废</th>*/
/* 				    					<th>是否即征即退</th>*/
/* 				    				</tr>*/
/* 				    			</thead>*/
/* 				    			<tbody id="x3">*/
/* 				    				<tr style="display:none;" class="model">*/
/* 				    					<td class="sequence"></td>*/
/* 				    					<td>*/
/* 											<input type="text" field="invoice"/>*/
/* 				    					</td>*/
/* 				    					<td>*/
/* 				    						<input type="text" field="money"/>*/
/* 				    					</td>*/
/* 				    					<td>*/
/* 				    						<select field="tax_rate">*/
/* 				    							<option value="0">0</option>*/
/* 				    							<option value="3">3%</option>*/
/* 				    							<option value="4">4%</option>*/
/* 				    							<option value="5">5%</option>*/
/* 				    							<option value="6">6%</option>*/
/* 				    							<option value="11">11%</option>*/
/* 				    							<option value="13">13%</option>*/
/* 				    							<option value="17">17%</option>*/
/* 				    						</select>*/
/* 				    					</td>*/
/* 				    					<td>*/
/* 				    						<input type="text" field="amount_of_tax"/>*/
/* 				    					</td>*/
/* 				    					<td>*/
/* 				    						<select field="charge_mode">*/
/* 				    							<option value="1">一般计税</option>*/
/* 												<option value="2">简易征税</option>*/
/* 												<option value="3">免税</option>*/
/* 												<option value="4">免抵退</option>*/
/* 				    						</select>*/
/* 				    					</td>*/
/* 				    					<td>*/
/* 				    						<select field="tax_project">*/
/* 				    							<option value="1">应税货物</option>*/
/* 												<option value="2">应税劳务</option>*/
/* 												<option value="3">应税服务不动产</option>*/
/* 				    						</select>*/
/* 				    					</td>*/
/* 				    					<td>*/
/* 				    						<select field="is_invalid">*/
/* 				    							<option value="1">已作废</option>*/
/* 												<option value="0">未作废</option>*/
/* 				    						</select>*/
/* 				    					</td>*/
/* 				    					<td>*/
/* 				    						<select field="whether_tax">*/
/* 				    							<option value="1">是</option>*/
/* 												<option value="0">否</option>*/
/* 				    						</select>*/
/* 				    					</td>*/
/* 				    				</tr>*/
/* 				    			</tbody>*/
/* 				    			<tfoot>*/
/* 				    				<tr>*/
/* 				    					<td>总计</td>*/
/* 				    					<td total="invoice"></td>*/
/* 				    					<td total="money"></td>*/
/* 				    					<td></td>*/
/* 				    					<td total="amount_of_tax"></td>*/
/* 				    					<td></td>*/
/* 				    					<td></td>*/
/* 				    					<td></td>*/
/* 				    					<td></td>*/
/* 				    				</tr>*/
/* 				    			</tfoot> */
/* 					    	</table>*/
/* 					    </div>*/
/* 				    </div>*/
/* 				  </div>*/
/* 				  <div class="layui-colla-item">*/
/* 				    <h2 class="layui-colla-title">未开具发票</h2>*/
/* 				    <div class="layui-colla-content">*/
/* 				    	<div class="custom_table">*/
/* 					    	<table>*/
/* 				    			<thead>*/
/* 				    				<tr>*/
/* 				    					<th>序号</th>*/
/* 				    					<th>业务类型</th>*/
/* 				    					<th>金额</th>*/
/* 				    					<th>税率</th>*/
/* 				    					<th>税额</th>*/
/* 				    					*/
/* 				    					<th>计税方式</th>*/
/* 				    					<th>征税项目</th>*/
/* 				    					<th>是否作废</th>*/
/* 				    					<th>是否即征即退</th>*/
/* 				    					<th>税款所属期</th>*/
/* 				    				</tr>*/
/* 				    			</thead>*/
/* 				    			<tbody id="x4">*/
/* 					    				<tr style="display:none;" class="model">*/
/* 					    					<td class="sequence"></td>*/
/* 					    					<td>*/
/* 												<select field="type">*/
/* 					    							<option value="1">注册公司</option>*/
/* 													<option value="2">变更公司</option>*/
/* 													<option value="3">股权变更</option>*/
/* 													<option value="4">注册商标</option>*/
/* 					    							<option value="5">注销公司</option>*/
/* 													<option value="6">申请一般纳税人</option>*/
/* 													<option value="7">记账报税</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<input type="text" field="money"/>*/
/* 					    					</td>*/
/* 					    					*/
/* 					    					*/
/* 					    					<td>*/
/* 					    						<select field="tax_rate">*/
/* 					    							<option value="0">0</option>*/
/* 					    							<option value="3">3%</option>*/
/* 					    							<option value="4">4%</option>*/
/* 					    							<option value="5">5%</option>*/
/* 					    							<option value="6">6%</option>*/
/* 					    							<option value="11">11%</option>*/
/* 					    							<option value="13">13%</option>*/
/* 					    							<option value="17">17%</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					*/
/* 					    					<td>*/
/* 					    						<input type="text"  field="amount_of_tax"/>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<select field="charge_mode">*/
/* 					    							<option value="1">一般计税</option>*/
/* 													<option value="2">简易征税</option>*/
/* 													<option value="3">免税</option>*/
/* 													<option value="4">免抵退</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<select field="tax_project">*/
/* 					    							<option value="1">应税货物</option>*/
/* 													<option value="2">应税劳务</option>*/
/* 													<option value="3">应税服务不动产</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<select field="is_invalid">*/
/* 					    							<option value="1">已作废</option>*/
/* 													<option value="0">未作废</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<select field="whether_tax">*/
/* 					    							<option value="1">是</option>*/
/* 													<option value="0">否</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<input type="text" field="tax_money_period"/>*/
/* 					    					</td>*/
/* 					    				</tr>*/
/* 					    			</tbody>*/
/* 					    			<tfoot>*/
/* 					    				<tr>*/
/* 					    					<td>总计</td>*/
/* 					    					<td></td>*/
/* 					    					<td total="money"></td>*/
/* 					    					<td total="amount_of_tax"></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    				</tr>*/
/* 					    			</tfoot>*/
/* 					    	</table>*/
/* 					    </div>*/
/* 				    </div>*/
/* 				  </div>*/
/* 				  <div class="layui-colla-item">*/
/* 				    <h2 class="layui-colla-title">纳税检查调整</h2>*/
/* 				    <div class="layui-colla-content">*/
/* 				    	<div class="custom_table">*/
/* 					    	<table>*/
/* 				    			<thead>*/
/* 				    				<tr>*/
/* 				    					<th>序号</th>*/
/* 				    					<th>业务类型</th>*/
/* 				    					<th>金额</th>*/
/* 				    					*/
/* 				    					<th>税率</th>*/
/* 				    					<th>税额</th>*/
/* 				    					<th>计税方式</th>*/
/* 				    					<th>征税项目</th>*/
/* 				    					<th>是否作废</th>*/
/* 				    					<th>是否即征即退</th>*/
/* 				    					<th>税款所属期</th>*/
/* 				    				</tr>*/
/* 				    			</thead>*/
/* 				    			<tbody id="x5">*/
/* 					    				<tr style="display:none;" class="model">*/
/* 					    					<td class="sequence"></td>*/
/* 					    					<td>*/
/* 												<select field="type">*/
/* 					    							<option value="1">注册公司</option>*/
/* 													<option value="2">变更公司</option>*/
/* 													<option value="3">股权变更</option>*/
/* 													<option value="4">注册商标</option>*/
/* 					    							<option value="5">注销公司</option>*/
/* 													<option value="6">申请一般纳税人</option>*/
/* 													<option value="7">记账报税</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<input type="text" field="money"/>*/
/* 					    					</td>*/
/* 					    					*/
/* 					    					<td>*/
/* 					    						<select field="tax_rate">*/
/* 					    							<option value="0">0</option>*/
/* 					    							<option value="3">3%</option>*/
/* 					    							<option value="4">4%</option>*/
/* 					    							<option value="5">5%</option>*/
/* 					    							<option value="6">6%</option>*/
/* 					    							<option value="11">11%</option>*/
/* 					    							<option value="13">13%</option>*/
/* 					    							<option value="17">17%</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<input type="text" field="amount_of_tax"/>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<select field="charge_mode">*/
/* 					    							<option value="1">一般计税</option>*/
/* 													<option value="2">简易征税</option>*/
/* 													<option value="3">免税</option>*/
/* 													<option value="4">免抵退</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<select field="tax_project">*/
/* 					    							<option value="1">应税货物</option>*/
/* 													<option value="2">应税劳务</option>*/
/* 													<option value="3">应税服务不动产</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<select field="is_invalid">*/
/* 					    							<option value="1">已作废</option>*/
/* 													<option value="0">未作废</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<select field="whether_tax">*/
/* 					    							<option value="1">是</option>*/
/* 													<option value="0">否</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<input field="tax_money_period" type="text"/>*/
/* 					    					</td>*/
/* 					    				</tr>*/
/* 					    			</tbody>*/
/* 					    			<tfoot>*/
/* 					    				<tr>*/
/* 					    					<td>总计</td>*/
/* 					    					<td></td>*/
/* 					    					<td total="money"></td>*/
/* 					    					<td total="amount_of_tax"></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    				</tr>*/
/* 					    			</tfoot>  */
/* 					    	</table>*/
/* 					    </div>*/
/* 				    </div>*/
/* 				  </div>*/
/* 				  <div class="layui-colla-item">*/
/* 				    <h2 class="layui-colla-title">地税开具其他发票及未开票销售额</h2>*/
/* 				    <div class="layui-colla-content">*/
/* 				    	<div class="custom_table">*/
/* 				    		<table>*/
/* 				    			<thead>*/
/* 				    				<tr>*/
/* 				    					<th>序号</th>*/
/* 				    					<th>份数</th>*/
/* 				    					<th>业务类型</th>*/
/* 				    					<th>金额</th>*/
/* 				    					<th>税率</th>*/
/* 				    					<th>税额</th>*/
/* 				    					*/
/* 				    					<th>计税方式</th>*/
/* 				    					<th>征税项目</th>*/
/* 				    					<th>是否作废</th>*/
/* 				    					<th>是否即征即退</th>*/
/* 				    					<th>税款所属期</th>*/
/* 				    				</tr>*/
/* 				    			</thead>*/
/* 				    			<tbody id="x6">*/
/* 					    				<tr style="display:none;" class="model">*/
/* 					    					<td class="sequence"></td>*/
/* 					    					<td>*/
/* 												<input type="text" field="invoice"/>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 												<select field="type">*/
/* 					    							<option value="1">注册公司</option>*/
/* 													<option value="2">变更公司</option>*/
/* 													<option value="3">股权变更</option>*/
/* 													<option value="4">注册商标</option>*/
/* 					    							<option value="5">注销公司</option>*/
/* 													<option value="6">申请一般纳税人</option>*/
/* 													<option value="7">记账报税</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<input field="money" type="text"/>*/
/* 					    					</td>*/
/* 					    					*/
/* 					    					<td>*/
/* 												<select field="tax_rate">*/
/* 													<option value="0">0</option>*/
/* 													<option value="3">3%</option>*/
/* 													<option value="4">4%</option>*/
/* 													<option value="5">5%</option>*/
/* 													<option value="6">6%</option>*/
/* 													<option value="11">11%</option>*/
/* 													<option value="13">13%</option>*/
/* 													<option value="17">17%</option>*/
/* 												</select>				    					*/
/* 											</td>*/
/* 											<td>*/
/* 					    						<input field="amount_of_tax" type="text"/>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<select field="charge_mode">*/
/* 					    							<option value="1">一般计税</option>*/
/* 													<option value="2">简易征税</option>*/
/* 													<option value="3">免税</option>*/
/* 													<option value="4">免抵退</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<select field="tax_project">*/
/* 					    							<option value="1">应税货物</option>*/
/* 													<option value="2">应税劳务</option>*/
/* 													<option value="3">应税服务不动产</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<select field="is_invalid">*/
/* 					    							<option value="1">已作废</option>*/
/* 													<option value="0">未作废</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<select field="whether_tax">*/
/* 					    							<option value="1">是</option>*/
/* 													<option value="0">否</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<input field="tax_money_period" type="text"/>*/
/* 					    					</td>*/
/* 					    				</tr>*/
/* 					    			</tbody>*/
/* 						    			<tfoot>*/
/* 					    				<tr>*/
/* 					    					<td>总计</td>*/
/* 					    					<td total="invoice"></td>*/
/* 					    					<td></td>*/
/* 					    					<td total="money"></td>*/
/* 					    					<td total="amount_of_tax"></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    				</tr>*/
/* 					    			</tfoot>  */
/* 					    	</table>*/
/* 				    	</div>*/
/* 				    </div>*/
/* 				  </div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div style="display:none;" class="jxcj">*/
/* 			<div style="padding:10px 0;">*/
/* 				<h3 style="font-size:16px;">进项采集</h3>*/
/* 			</div>*/
/* 			<div>*/
/* 				<div class="layui-collapse" lay-accordion>*/
/* 				  <div class="layui-colla-item">*/
/* 				    <h2 class="layui-colla-title">增值税专用发票</h2>*/
/* 				    <div class="layui-colla-content">*/
/* 				    	<div class="custom_table">*/
/* 					    	<table>*/
/* 				    			<thead>*/
/* 				    				<tr>*/
/* 				    					<th>序号</th>*/
/* 				    					<th>份数</th>*/
/* 				    					<th>金额</th>*/
/* 				    					<th>税率</th>*/
/* 				    					<th>税额</th>*/
/* 				    					*/
/* 				    					<th>是否即征即退</th>*/
/* 				    					<th>是否抵扣</th>*/
/* 				    					<th>申报所属期</th>*/
/* 				    					<th>认证日期</th>*/
/* 				    				</tr>*/
/* 				    			</thead>*/
/* 				    			<tbody id="j1">*/
/* 					    				<tr style="display:none;" class="model">*/
/* 					    					<td class="sequence"></td>*/
/* 					    					<td>*/
/* 												<input field="invoice" type="text"/>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<input field="money" type="text"/>*/
/* 					    					</td>*/
/* 					    					*/
/* 					    					<td>*/
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
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<input field="amount_of_tax" type="text"/>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<select field="whether_tax">*/
/* 					    							<option value="1">是</option>*/
/* 													<option value="0">否</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<select field="deductible">*/
/* 					    							<option value="1">是</option>*/
/* 													<option value="0">否</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<!--<select field="declare_period">*/
/* 					    							<option value="1">是</option>*/
/* 													<option value="0">否</option>*/
/* 					    						</select>-->*/
/* 					    						<input field="tax_money_period" type="text"/>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 							                        <input class="date-timepicker1"  field="auth_time" style="height: 30px; width: 150px;">*/
/* 							                        <span class="input-group-addon" style="width:30px;height:30px;">*/
/* 							                            <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 							                        </span>*/
/* 							                    </div>*/
/* 					    					</td>*/
/* 					    				</tr>*/
/* 					    			</tbody>*/
/* 					    			<tfoot>*/
/* 					    				<tr>*/
/* 					    					<td>总计</td>*/
/* 					    					<td total="invoice"></td>*/
/* 					    					<td total="money"></td>*/
/* 					    					<td total="amount_of_tax"></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    				</tr>*/
/* 					    			</tfoot> 	  */
/* 					    	</table>*/
/* 					    </div>*/
/* 				    </div>*/
/* 				  </div>*/
/* 				  <div class="layui-colla-item">*/
/* 				    <h2 class="layui-colla-title">税控机动车发票</h2>*/
/* 				    <div class="layui-colla-content">*/
/* 				    	<div class="custom_table">*/
/* 					    	<table>*/
/* 				    			<thead>*/
/* 				    				<tr>*/
/* 				    					<th>序号</th>*/
/* 				    					<th>份数</th>*/
/* 				    					<th>金额</th>				    					*/
/* 				    					<th>税率</th>*/
/* 				    					<th>税额</th>*/
/* 				    					<th>是否即征即退</th>*/
/* 				    					<th>是否抵扣</th>*/
/* 				    				</tr>*/
/* 				    			</thead>*/
/* 				    			<tbody id="j2">*/
/* 					    				<tr style="display:none;" class="model">*/
/* 					    					<td class="sequence"></td>*/
/* 					    					<td>*/
/* 												<input field="invoice" type="text"/>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<input field="money" type="text"/>*/
/* 					    					</td>*/
/* 					    					*/
/* 					    					<td>*/
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
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<input field="amount_of_tax" type="text"/>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<select field="whether_tax">*/
/* 					    							<option value="1">是</option>*/
/* 													<option value="0">否</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    					<td>*/
/* 					    						<select field="deductible">*/
/* 					    							<option value="1">是</option>*/
/* 													<option value="0">否</option>*/
/* 					    						</select>*/
/* 					    					</td>*/
/* 					    				</tr>*/
/* 					    			</tbody>  */
/* 					    			<tfoot>*/
/* 					    				<tr>*/
/* 					    					<td>总计</td>*/
/* 					    					<td total="invoice"></td>*/
/* 					    					<td total="money"></td>*/
/* 					    					<td total="amount_of_tax"></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    					<td></td>*/
/* 					    				</tr>*/
/* 					    			</tfoot>  	*/
/* 					    	</table>*/
/* 					    </div>*/
/* 				    </div>*/
/* 				  </div>*/
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
/* </div>*/
/* {% include 'admin/mark.html' %} {% include 'admin/customerDetail.html' %}*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script type="text/javascript">*/
/* 	$(function() {*/
/* 		if(cs.approve_authority({name:'客服',nodes:[194]})){*/
/*             $('[contentAuthority="194"]').show();*/
/*         }*/
/* var cid = ykp.getCookie("custom_id");*/
/* 		var order = 'spm_approves.approve_result asc,spm_approves.id desc';*/
/* 		var pagesize = 10;*/
/* 		var employees = {}; //所有员工*/
/* */
/* 		//获取所有员工*/
/* 		getEmployees();*/
/* */
/* 		function getEmployees() {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_employees/f7',*/
/* 				method: 'post',*/
/* 				async: false,*/
/* 				data: {*/
/* 					select: 'bmm_employees.id,bmm_employees.name'*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					for(var i in data) {*/
/* 						employees[data[i]['id']] = data[i]['name'];*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//点击顶部  按钮时调用*/
/* 		clickBtn();*/
/* */
/* 		function clickBtn() {*/
/* 			$('#topTool').on('click', 'a', function(item) {*/
/* 				if (!$(this).hasClass('clc')) {*/
/*                     $(this).addClass('clc').siblings().removeClass('clc');*/
/*                 }*/
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
/* 		$('#flush').click(function(){*/
/* 			$('#topTool input').val('');*/
/* 			filter = '';*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getList();*/
/* 		})*/
/* 		$('#filterBtns a').mouseover(function(){*/
/*             $(this).addClass('over');*/
/*         })*/
/*         $('#filterBtns a').mouseout(function(){*/
/*             $(this).removeClass('over');*/
/*         })*/
/* */
/* 		$('#plSp').click(function() {*/
/* 			var status = '',*/
/* 				n = 0,*/
/* 				Statu = false,*/
/* 				coldata = []*/
/* 			$('#datalist').find('input[type="checkbox"]:checked').each(function(i) {*/
/* 				n++;*/
/* 				if($(this).parents('tr').attr('data-status') == 3 || $(this).parents('tr').attr('data-status') == 2) {*/
/* 					ykp.prompt('审批过的不能批量审批!');*/
/* 					Statu = false;*/
/* 					return false;*/
/* 				}  else {*/
/* 					status = $(this).parents('tr').attr('status') == 1 ? 2 : 1;*/
/* 					coldata.push({*/
/* 						id: $(this).parents('tr').attr('data-id'),*/
/* 						approve_result: status*/
/* 					});*/
/* 					Statu = true;*/
/* 				}*/
/* 			})*/
/* 			if(n == 0) {*/
/* 				ykp.prompt('请选择再审批！');*/
/* 				return false;*/
/* 			} else {*/
/* 				if(Statu) {*/
/* 					ykp.doAjax({*/
/* 						url: "/api/api_approves/batch_edit",*/
/* 						method: 'post',*/
/* 						data: {*/
/* 							data: JSON.stringify(coldata),*/
/* 							type: '6'*/
/* 						},*/
/* 						success: function(res) {*/
/* 							ykp.prompt('审批成功');*/
/* 							getList();*/
/* 						}*/
/* 					})*/
/* 				}*/
/* 			}*/
/* 		})*/
/* */
/* 		doSearch();*/
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
/* 			if(!cs.getSpStatus('客服')) {*/
/* 				ykp.prompt('暂时没有开启审批功能');*/
/* 				return false;*/
/* 			}*/
/* 			pagesize = $(this).val();*/
/* 			ykp.setCookie('page_size',pagesize);*/
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
/* 		getList();*/
/* */
/* 		function getList(current, clickstatus, keyWords) {*/
/* 			if(!cs.getSpStatus('客服')) {*/
/* 				ykp.prompt('暂时没有开启审批功能');*/
/* 				return false;*/
/* 			}*/
/* 			current = current ? current : 1;*/
/* 			var data = {*/
/* 				page_size: pagesize,*/
/* 				current: current,*/
/* 				type: 19,*/
/* 				order: order,*/
/* 				contentId: "#datalist", //默认排序*/
/* 				initOrder: "", //初始化sort*/
/* 				defaultOrder: order,*/
/* 				params: [{*/
/* 					id: "#dynamic-table",*/
/* 					field: ["","","spm_approves.customer_id", "spm_approves.customer_num", "", "","","","spm_approves.customer_num", "spm_approves.submit_employee_name", "spm_approves.submit_time",*/
/* 						"","spm_approves.approve_result", "spm_approves.approve_time", "spm_approves.approve_reply",""]*/
/* 				}]*/
/* 			}*/
/* 			//判断是否有过滤   */
/* //			if(clickstatus && !isNaN(clickstatus)) {*/
/* //				data.approve_result = clickstatus;*/
/* //			}*/
/* //			if(keyWords) {*/
/* //				data.search = keyWords*/
/* //			}*/
/* */
/* if(clickstatus && !isNaN(clickstatus)) {*/
/* 				data.approve_result = clickstatus;*/
/* 			}*/
/* 			if(keyWords) {*/
/* 				data.search = keyWords*/
/* 			}*/
/* 			if(cid) {*/
/* 				data.search = 'spm_approves.customer_name  ' + ' like \'%' + cid + '%\'';*/
/* 				ykp.setCookie('page_no', 1);*/
/* 			}*/
/* */
/* 			//console.log(data);*/
/* 			cs.spList(data, function(res) {*/
/* 				//console.log(res)*/
/* 				var data = res.data.items;*/
/* 	//			var _data = [];*/
/* 				if(data.length == 0) {*/
/* 					setTimeout(function(){*/
/* 						ykp.prompt('暂无数据！');*/
/* 					},1000);*/
/* 					$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="color:#7d7d7d !important;text-align:center !important;" class="page">暂无数据</div></td></tr>');*/
/* */
/* 				} else {*/
/* 					//审批权限为true可以审批,为false不可审批*/
/*                     var spApp = cs.approve_authority({name:'客服',nodes:[195]});*/
/*                     var cxApp = cs.approve_authority({name:'客服',nodes:[259]});*/
/* */
/*                     var styles = [];*/
/*                     $('#dynamic-table th').each(function(i,e){*/
/*                         styles.push($(this).css('display'));*/
/*                     });*/
/* */
/* 					var status = ['','待审批', '已通过', '未通过']; //审核状态*/
/* 					var statusColor = ['','#dfba49', '#45b6af', '#f3565d'];*/
/* 					var content = '';*/
/* 					var _data = {}; //报税数据*/
/* 					for(var i in data) {*/
/* 	//					_data.push(data[i]['submitted_data']['list']);*/
/*                           _data[i] = data[i]['submitted_data']['list'];*/
/* 						content += `<tr data-id="${data[i]['spm_approves.id']}" status="${data[i]['spm_approves.approve_result']}">*/
/* 								 <td class="center">*/
/*                                 <label class="pos-rel">*/
/*                                     <input type="checkbox" name="check" class="ace"/>*/
/*                                     <span class="lbl"></span>*/
/*                                 </label>*/
/*                             </td>*/
/* 						 <td>*/
/* 						<label class="pos-rel">*/
/*                         <a href="#" class="sp btOrange" data-status = "1" style="display: ${cxApp ? (data[i]['spm_approves.approve_result'] == 2 ? 'inline-block' : 'none') : 'none'};color:#fff !important" contentAuthority="259" title="撤销"><i class="fa fa-rotate-left"></i></a>*/
/*                         <a href="#" class="sp btGreen" data-status = "2" style="display: ${spApp ? (data[i]['spm_approves.approve_result'] == 1 ?'inline-block' : 'none') : 'none'};color:#fff !important" contentAuthority="195" title="通过"><i class="fa fa-check-circle-o"></i></a>*/
/*                     	<a href="#" class="sp btRed" data-status = "3" style="display: ${spApp ? (data[i]['spm_approves.approve_result'] == 1 ?'inline-block' : 'none') : 'none'};color:#fff !important" contentAuthority="195" title="驳回"><i class="fa fa-times-circle"></i></a>*/
/*                     	</label>*/
/*                     </td>*/
/*                     <td data-num="1" style="display:${styles[2]}" data-cid="${data[i]['spm_approves.customer_id']}"> */
/*                     	<a class="customerDetail pos-rel" href="#">${data[i]['spm_approves.customer_name']}</a>*/
/*                     	<label class="pos-rel">*/
/* 				 				<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}" data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>*/
/* 			 				 </label>*/
/*                     </td>                  */
/*                     <td data-num="2" style="display:${styles[3]}">${data[i]['spm_approves.customer_num']}</td>*/
/*                     <td data-num="3" style="display:${styles[4]}">${data[i]['submitted_data']['service_info']['khm_customer.tax_type'] == 1 ? '一般纳税人' : '小规模'}</td>*/
/*                     <td data-num="4" style="display:${styles[5]}">${data[i].submitted_data['service_info']['jzm_service_info.time']}</td>*/
/*                     <td data-num="5" style="display:${styles[6]}"><a href="javascript:;" style="text-decoration:none;" service-id="${data[i]['submitted_data']['list'].length > 0 ? data[i]['submitted_data']['list'][0]['service_id'] : ""}" tax_type="${data[i]['submitted_data']['service_info']['khm_customer.tax_type']}" class="collect pos-rel">查看</a></td>*/
/*                     <td data-num="6" style="display:${styles[7]}">${data[i].submitted_data['service_info']['jzm_service_info.fuze_id'] != '0' ? employees[data[i].submitted_data['service_info']['jzm_service_info.fuze_id']] || "" : ''}</td>*/
/*                     <td data-num="7" style="display:${styles[8]}">${data[i]['spm_approves.approve_code']}</td>*/
/*                     <td data-num="8" style="display:${styles[9]}"><a href="#">${data[i]['spm_approves.submit_employee_name']}</a></td>*/
/*                     <td data-num="9" style="display:${styles[10]}">${cs.getNowTime(data[i]['spm_approves.submit_time'],true)}</td>*/
/*                     <td data-num="10" style="display:${styles[11]}">${data[i]['approve_employee_name'] ? data[i]['approve_employee_name']['name'] : ""}</td>*/
/*                     <td data-num="11" style="display:${styles[12]}"><label class="label" style=" background:${statusColor[data[i]['spm_approves.approve_result']]} ">${status[data[i]['spm_approves.approve_result']]}</label></td>*/
/*                     <td data-num="12" style="display:${styles[13]}">${data[i]['spm_approves.approve_time'] != '0' ? cs.getNowTime(data[i]['spm_approves.approve_time'],true) : ''}</td>*/
/*                     <td data-num="13" style="display:${styles[14]}">${data[i]['spm_approves.approve_reply']}</td>*/
/*                    */
/*                 		</tr>`;*/
/* 					}*/
/* */
/* 					$('#datalist').html(content);*/
/* 					//使用Layui面板*/
/*                     console.log(_data);*/
/*                     layui.use('element',function(){*/
/* 						var element = layui.element;*/
/* 						invoice_detail(_data,element);*/
/* 					});*/
/* */
/* 					$("[data-rel='tooltip']").tooltip();*/
/* 					custom.get_custom_info();*/
/* 					custom.showReamrk();*/
/* 					$("#datalist tr").find('.sp').click(function() {*/
/* 						var status = $(this).attr('data-status');*/
/* 						var id = $(this).parents('tr').attr('data-id');*/
/* 						if(status != '0'){*/
/* 							changeStatus(status, id);*/
/* 						}*/
/* 						*/
/* 					})*/
/* 				}*/
/* 			}, "客服");*/
/* */
/* 			//发票采集详情*/
/* 			function invoice_detail(data,element){*/
/*                 $('.collect').click(function(){*/
/* 					var index = $(this).parents('tr').index();*/
/* 					var tax_type = $(this).attr('tax_type');*/
/* 					var service_id = $(this).attr('service-id');*/
/* */
/* 					showMark('#invoice_collect');*/
/* 					element.init('collapse');*/
/* 					$('#showBox .title').text('发票采集详情');*/
/* 					if(tax_type == 1){*/
/* 						$('#templateCon .jxcj').show();*/
/* 					}*/
/* */
/* 					//获取发票采集数据*/
/* 					getInvoiceCollectData(data[index],element);*/
/* 				});*/
/* 			}*/
/* */
/* 			//获取发票采集数据*/
/* 			function getInvoiceCollectData(data,element){*/
/* */
/* 				//var type = ['注册公司','变更公司','股权变更','注册商标','注销公司','申请一般纳税人','记账报税'];//业务类型*/
/*                 var type = ['','无票视同销售','增值税专用发票','增值税普通发票'];//业务类型*/
/* 				var tax_way = ['','一般计税','简单征收','免税','免抵退'];//计税方式*/
/* 				var tax_item = ['','应税货物','应税劳务','应税服务不动产'];//征税项目*/
/* */
/* 				var _ztype;*/
/* 				var model;*/
/* 				var _model;*/
/* 				var html;*/
/*                 console.log(data);*/
/*                 for(var i in data){*/
/*                     console.log(data[i]['charge_mode'])*/
/* 					if(!data[i]['ztype'] || data[i]['ztype'] === '0'){*/
/* 						continue;*/
/* 					}*/
/* 					_ztype = data[i]['ztype'];*/
/* 					model = $('#templateCon #' +_ztype).find('.model').html();;*/
/* 					_model = $(model);*/
/* 					html = $('<tr></tr>');*/
/* 					if(!$('#templateCon #' + _ztype).parents('.layui-colla-content').hasClass('layui-show')){*/
/* 						$('#templateCon #' + _ztype).parents('.layui-colla-content').addClass('layui-show');*/
/* 					}*/
/* 					_model.eq(0).text($('#templateCon #' +_ztype).find('tr').length);*/
/* 					_model.find('[field]').each(function(index,element){*/
/* 						if($(this).attr('field') == 'charge_mode'){*/
/* 							$(this).parent().html(data[i]['charge_mode'] != 0 ? tax_way[data[i]['charge_mode']] : '');*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('field') == 'tax_project'){*/
/* 							$(this).parent().html(data[i]['tax_project'] != 0 ? tax_item[data[i]['tax_project']] : '');*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('field') == 'is_invalid'){*/
/* 							$(this).parent().text(data[i]['is_invalid'] != 0 ? '作废' : '未作废');*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('field') == 'whether_tax'){*/
/* 							$(this).parent().text(data[i]['whether_tax'] != 0 ? '是' : '否');*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('field') == 'deductible'){*/
/* 							$(this).parent().text(data[i]['deductible'] != 0 ? '是' : '否');*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('field') == 'auth_time'){*/
/* 							$(this).parent().text(data[i]['auth_time'] != 0 ? cs.getNowTime(data[i]['auth_time']) : '');*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('field') == 'type'){*/
/* 							$(this).parent().text(data[i]['type'] != 0 ? type[data[i]['type']] : '');*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('field') == 'tax_rate'){*/
/* 							$(this).parent().text(data[i]['tax_rate'] + '%');*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('field') == 'tax_money_period'){*/
/* 							$(this).text(data[i]['tax_money_period']);*/
/* 						}*/
/* */
/* 						$(this).parent().text(data[i][$(this).attr('field')]);*/
/* 					});*/
/* */
/* 					html.append(_model);*/
/* 					$('#templateCon #' +_ztype).append(html);*/
/* 				}*/
/* */
/* 				var total = 0;*/
/* 				$('#templateCon [total]').each(function(index,element){*/
/* 					$(element).parents('table').find('tbody tr').not('.model').find('td:eq('+ $(element).index() +')').each(function(i,e){*/
/* 						total += $(e).text().trim() ? parseFloat($(e).text().trim()) : 0;*/
/* 					});*/
/* 					$(element).text(total);*/
/* 					total = 0;*/
/* 				});*/
/* */
/* 				element.init('collapse');*/
/* 			}*/
/* */
/* 			//发票采集中销项采集  进项采集切换*/
/* 			function toggle_collect(){*/
/* 				$('#templateCon #recent-tab li').click(function(){*/
/* 					if($(this).hasClass('active')){*/
/* 						return;*/
/* 					}*/
/* 					$(this).addClass('active').siblings().removeClass('active');*/
/* 					$('#templateCon .tab-content .tab-pane').eq($(this).index()).show().siblings().hide();*/
/* 				});*/
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
/* 				if(status == 3) {*/
/* 					$('#feedBack').show();*/
/* 					$('#feedBack .hold').click(function() {*/
/* 						var approve_reply = $('#feedBack').find('input').val();*/
/* 						if(approve_reply == '') {*/
/* 							ykp.prompt('不能为空！');*/
/* 							return false;*/
/* 						}else{*/
/* 							ykp.prompt('驳回成功！');*/
/* 							data.data.approve_reply = approve_reply.trim();*/
/* 							data.data.approve_reply = approve_reply;*/
/* 							setStatus(data);*/
/* 							$('.close_label').parents('.label_popup').fadeOut();*/
/* 						}						*/
/* 					})*/
/* 					cs.closePop();*/
/* 				} else if(status == 1){*/
/* //                  bootbox.confirm('确认撤销审批？', function(flag){*/
/* //                      if(flag){*/
/* //                          setStatus(data);*/
/* //                      }*/
/* //                  })*/
/* 		layui.use('layer', function() {*/
/* 						var layer = layui.layer;*/
/* 						layer.confirm('确认撤销审批？', function(flag) {*/
/* 							if(flag) {*/
/* 						layer.closeAll();*/
/* 						setStatus(data);*/
/* 							}*/
/* 						});*/
/* 					})*/
/*                  }else if(status == 2){*/
/*                  	ykp.prompt('审批通过！');*/
/*                  	setStatus(data);*/
/*                  } else {*/
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
/* 			//			cs.doAjax(data,function(res) {*/
/* 			//			*/
/* 			//			})*/
/* 		}*/
/* */
/* 	});*/
/* */
/* 	function checkAll(status) {*/
/* 		$("tbody input[name='check']").each(function(i, n) {*/
/* 			n.checked = status;*/
/* 		});*/
/* 	}*/
/* </script>*/
