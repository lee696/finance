<?php

/* admin/financialManagement/employeePerformance.html */
class __TwigTemplate_2d049b3da4a071e0ecb81e0dd149c6ebc52ca0fb2f48db8ae8cb3b0950ddb19c extends Twig_Template
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
\t#showBox {
\t\tmin-width: 400px;
\t}
\t
\t#showBox td {
\t\theight: 30px;
\t\tline-height: 30px;
\t}
\t
\t#taxCharge thead tr th {
\t\tborder-width: 1px
\t}
\t
\t#taxCharge thead tr.h_boder th {
\t\tborder-bottom-width: 2px;
\t}
\t
\t#taxCharge thead tr th.ht_boder {
\t\tborder-bottom-width: 2px;
\t}

\t#shortPeriod thead tr th {
\t\tborder-width: 1px
\t}
\t
\t#shortPeriod thead tr.h_boder th {
\t\tborder-bottom-width: 2px;
\t}
\t
\t#shortPeriod thead tr th.ht_boder {
\t\tborder-bottom-width: 2px;
\t}
\t
\t#tableChange {
\t\tlist-style: none;
\t\tmargin-left: 0;
\t\theight: 42px;
\t\tborder-bottom: 1px #d5e3ef solid;
\t}
\t
\t#tableChange li {
\t\tcursor: pointer;
\t\tpadding: 10px 15px;
\t\tborder-right: 1px #fff solid;
\t\tborder-left: 1px #fff solid;
\t\tborder-top: 1px #fff solid;
\t}
\t
\t#tableChange li.act {
\t\tborder-top-color: #4C8FBD;
\t\tborder-right: 1px solid #C5D0DC;
\t\tborder-bottom: 1px solid #fff;
\t\tborder-left: 1px solid #C5D0DC;
\t}
\t
\t#templateBox .statistics_tit {
\t\tlist-style: none;
\t\tmargin-left: 0;
\t\tborder-bottom: 1px #d5e3ef solid;
\t}
\t
\t#templateBox .statistics_tit li {
\t\tfloat: left;
\t\tpadding: 10px 20px;
\t\tcursor: pointer;
\t}
\t
\t#templateBox .statistics_tit li.acti {
\t\tposition: relative;
\t\ttop: 1px;
\t\tborder-top: 1px solid #C5D0DC;
\t\t;
\t\tborder-right: 1px solid #C5D0DC;
\t\tborder-bottom: 1px solid #e6ecf2;
\t\tborder-left: 1px solid #C5D0DC;
\t}
\t
\t#templateBox .form-horizontal .form-group {
\t\tmargin: 0;
\t}
\t
\t#templateBox .form-horizontal .form-group input {
\t\twidth: 100%;
\t\tline-height: normal !important;
\t}
\t
\t#templateBox .form-horizontal .form-group div {
\t\twidth: 114px;
\t}
\t
\t#templateBox .form-horizontal .ite_tit {
\t\tfont-size: 15px;
\t\tfont-weight: bold;
\t}
\t
\t#templateCon label {
\t\twidth: 72px;
\t}
\t
\t#templateCon .fr,
\t#templateCon .fl {
\t\tfloat: left;
\t}
\t
\t#templateCon .fr {
\t\tmargin-left: 15px !important;
\t}
\t
\t#templateCon .col-sm-9 {
\t\tpadding-left: 0;
\t}
\t
\t#templateCon .content label {
\t\twidth: 95px;
\t}
\t
\t#templateCon .content input {
\t\twidth: 114px;
\t}
\t
\t#templateCon .content {
\t\twidth: 426px;
\t}
\t
\t#templateCon .thColor {
\t\tcolor: #000;
\t\tfont-size: xx-small;
\t}
\t
\t.table>thead>tr>th:last-child {
\t\tborder-right-color: inherit;
\t}
\t
\t.check {
\t\tpadding: 2px 6px;
\t\tfont-size: 12px;
\t\tline-height: 1.5;
\t\tborder-radius: 3px;
\t\tborder-color: #46b8da;
\t\ttop: -1px;
\t\tcolor: white;
\t\t/*background-color: #6FB3E0 !important;*/
\t}
\t
\t#templateCon table {
\t\tmin-width: 823px;
\t}


</style>
<div class=\" widget-main\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<!-- <h3 class=\"header smaller lighter  blue\">员工绩效</h3> -->
\t\t\t<ul id=\"tableChange\" class=\"clear\">
\t\t\t\t<li class=\"fl act\">记账报税</li>
\t\t\t\t<li class=\"fl\">短期业务</li>
\t\t\t</ul>
\t\t\t<div class=\"row\" style=\"margin-top: 20px;\" id=\"topTool\">
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<select pts=1 sear=\"month\" class=\"monthList\">
\t\t\t\t\t\t<option value=\"\"> 请选择月份 </option>
\t\t\t\t\t\t<option value=\"01\"> 2017.01 </option>
\t\t\t\t\t\t<option value=\"02\"> 2017.02 </option>
\t\t\t\t\t\t<option value=\"03\"> 2017.03 </option>
\t\t\t\t\t\t<option value=\"04\"> 2017.04 </option>
\t\t\t\t\t\t<option value=\"05\"> 2017.05 </option>
\t\t\t\t\t\t<option value=\"06\"> 2017.06 </option>
\t\t\t\t\t\t<option value=\"07\"> 2017.07 </option>
\t\t\t\t\t\t<option value=\"08\"> 2017.08 </option>
\t\t\t\t\t\t<option value=\"09\"> 2017.09 </option>
\t\t\t\t\t\t<option value=\"10\"> 2017.10 </option>
\t\t\t\t\t\t<option value=\"11\"> 2017.11 </option>
\t\t\t\t\t\t<option value=\"12\"> 2017.12 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<!--<input type=\"text\" pts=1 placeholder=\"员工\" sear=\"name\">-->
\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\"  pts=1  sear=\"name\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" data-type=\"gj\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\"> 员工<br /> </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
                            <i class=\"fa fa-search\"></i>
                        </button>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"custom_table\">
\t\t\t\t<table id=\"taxCharge\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr style=\"height: 50px;\" class=\"thColor\">
\t\t\t\t\t\t\t<th colspan=\"26\" class=\"gs\" style=\"text-align: center !important;\"></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t<th class=\"center ht_boder\" style=\"text-align: center !important;\" colspan=\"2\" rowspan=\"2\">操作</th>
\t\t\t\t\t\t\t<!--<th class=\"center ht_boder\" rowspan=\"2\">提成复核</th>-->
\t\t\t\t\t\t\t<th class=\"center ht_boder \" rowspan=\"2\">员工</th>
\t\t\t\t\t\t\t<th class=\"center\" colspan=\"2\" style=\"text-align: center !important;\">收单</th>
\t\t\t\t\t\t\t<th class=\"center\" colspan=\"2\" style=\"text-align: center !important;\">整单</th>
\t\t\t\t\t\t\t<th class=\"center\" colspan=\"2\" style=\"text-align: center !important;\">记账</th>
\t\t\t\t\t\t\t<th class=\"center\" colspan=\"2\" style=\"text-align: center !important;\">客服</th>
\t\t\t\t\t\t\t<th class=\"center\" colspan=\"2\" style=\"text-align: center !important;\">报税</th>
\t\t\t\t\t\t\t<th class=\"center\" colspan=\"2\" style=\"text-align: center !important;\">送单</th>
\t\t\t\t\t\t\t<th class=\"center ht_boder\" rowspan=\"2\">提成总额</th>

\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"h_boder thColor\">
\t\t\t\t\t\t\t<th class=\"center\">小规模</th>
\t\t\t\t\t\t\t<th class=\"center\">一般纳税人</th>
\t\t\t\t\t\t\t<th class=\"center\">小规模</th>
\t\t\t\t\t\t\t<th class=\"center\">一般纳税人</th>
\t\t\t\t\t\t\t<th class=\"center\">小规模</th>
\t\t\t\t\t\t\t<th class=\"center\">一般纳税人</th>
\t\t\t\t\t\t\t<th class=\"center\">小规模</th>
\t\t\t\t\t\t\t<th class=\"center\">一般纳税人</th>
\t\t\t\t\t\t\t<th class=\"center\">小规模</th>
\t\t\t\t\t\t\t<th class=\"center\">一般纳税人</th>
\t\t\t\t\t\t\t<th class=\"center\">小规模</th>
\t\t\t\t\t\t\t<th class=\"center\">一般纳税人</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr id=\"tcPrice\" >
\t\t\t\t\t\t\t<th style=\"text-align: right !important;\" class=\"center\">
\t\t\t\t\t\t\t\t<div >
\t\t\t\t\t\t\t\t\t<a style=\"display:none;cursor: pointer;color: #fff !important;\"  class=\"priceEdit btBlue\" title=\"编辑单价\"><i class=\"fa fa-pencil-square-o\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th class=\"center\"></th>
\t\t\t\t\t\t\t<th class=\"center\"></th>
\t\t\t\t\t\t\t<th style=\"text-align: right !important;\"><span class=\"sdsval\"></span></th>
\t\t\t\t\t\t\t<th style=\"text-align: right !important;\"><span class=\"sdyval\"></span></th>
\t\t\t\t\t\t\t<th style=\"text-align: right !important;\"><span class=\"zdsval\"></span></th>
\t\t\t\t\t\t\t<th style=\"text-align: right !important;\"><span class=\"zdyval\"></span></th>
\t\t\t\t\t\t\t<th style=\"text-align: right !important;\"><span class=\"cdsval\"></span></th>
\t\t\t\t\t\t\t<th style=\"text-align: right !important;\"><span class=\"cdyval\"></span></th>
\t\t\t\t\t\t\t<th style=\"text-align: right !important;\"><span class=\"kfsval\"></span></th>
\t\t\t\t\t\t\t<th style=\"text-align: right !important;\"><span class=\"kfyval\"></span></th>
\t\t\t\t\t\t\t<th style=\"text-align: right !important;\"><span class=\"bssval\"></span></th>
\t\t\t\t\t\t\t<th style=\"text-align: right !important;\"><span class=\"bsyval\"></span></th>
\t\t\t\t\t\t\t<th style=\"text-align: right !important;\"><span class=\"sodsval\"></span></th>
\t\t\t\t\t\t\t<th style=\"text-align: right !important;\"><span class=\"sodyval\"></span></th>
\t\t\t\t\t\t\t<th style=\"text-align: right !important;\"></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody id=\"dataList\">
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<table id=\"shortPeriod\" style=\"display:none;\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr style=\"height: 50px;\" class=\"thColor\">
\t\t\t\t\t\t\t<th colspan=\"26\" class=\"gs\" style=\"text-align: center !important;\"></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t<th class=\"center\">操作</th>
\t\t\t\t\t\t\t<!--<th class=\"center\">提成复核</th>-->
\t\t\t\t\t\t\t<th class=\"center ht_boder _employee\">员工</th>
\t\t\t\t\t\t\t<th class=\"center\">提成总额</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr id=\"tcPrice1\">
\t\t\t\t\t\t\t<th class=\"center\" >
\t\t\t\t\t\t\t\t<div contentAuthority=\"247\"><a style=\"display:none;cursor: pointer;color:#fff !important;\" class=\"priceEdit1 btBlue\" title=\"编辑单价\"><i class=\"fa fa-pencil-square-o\"></i></a></div>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<!--<th class=\"center\"></th>-->
\t\t\t\t\t\t\t<th class=\"center _percentage\"></th>
\t\t\t\t\t\t\t<th class=\"center\"></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<tbody id=\"dataList1\">
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" class=\"_num\"></div>
\t\t\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t\t\t<div class=\"pageBar pagination\"></div>
\t\t\t\t<div align=\"right\" style=\"float: right;  width: 10%;\">
\t\t\t\t\t<select style=\"width: 100px;\" class=\"changePageNum\">
\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"template\" style=\"display:none;\">
\t\t\t<div class=\"widget-box\">
\t\t\t\t<form class=\"form-horizontal\" role=\"form\">
\t\t\t\t\t<div class=\"ite_tit\"> 收单： </div>
\t\t\t\t\t<div class=\"item-row clear\">
\t\t\t\t\t\t<div class=\"fl form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                    小规模： </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                    <input name=\"edtdata1\" class=\"edit0\" type=\"text\">
                                </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"fr form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                    一般纳税人： </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                    <input name=\"edtdata2\" class=\"edit1\" type=\"text\">
                                </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"ite_tit\"> 整单： </div>
\t\t\t\t\t<div class=\"item-row clear\">
\t\t\t\t\t\t<div class=\"fl form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                    小规模： </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                    <input name=\"edtdata5\" class=\"edit4\" type=\"text\">
                                </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"fr form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                    一般纳税人： </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                    <input name=\"edtdata6\" class=\"edit5\" type=\"text\">
                                </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ite_tit\"> 记账： </div>
\t\t\t\t\t<div class=\"item-row clear\">
\t\t\t\t\t\t<div class=\"fl form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                    小规模： </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                    <input name=\"edtdata7\" class=\"edit6\" type=\"text\">
                                </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"fr form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                    一般纳税人： </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                    <input name=\"edtdata8\" class=\"edit7\" type=\"text\">
                                </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ite_tit\">客服：</div>
\t\t\t\t\t<div class=\"item-row clear\">
\t\t\t\t\t\t<div class=\"fl form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                    小规模： </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                    <input name=\"edtdata9\" class=\"edit8\" type=\"text\">
                                </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"fr form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                    一般纳税人： </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                    <input name=\"edtdata10\" class=\"edit9\" type=\"text\">
                                </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ite_tit\">报税：</div>
\t\t\t\t\t<div class=\"item-row clear\">
\t\t\t\t\t\t<div class=\"fl form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                    小规模： </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                    <input name=\"edtdata11\" class=\"edit10\" type=\"text\">
                                </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"fr form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                    一般纳税人： </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                    <input name=\"edtdata12\" class=\"edit11\" type=\"text\">
                                </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ite_tit\"> 送单： </div>
\t\t\t\t\t<div class=\"item-row clear\">
\t\t\t\t\t\t<div class=\"fl form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                    小规模： </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                    <input name=\"edtdata3\" class=\"edit2\" type=\"text\">
                                </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"fr form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \">
                                    一般纳税人： </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<span class=\"input-icon\">
                                    <input name=\"edtdata4\" class=\"edit3\" type=\"text\">
                                </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<!--保存按钮-->
\t\t\t\t<div style=\"text-align:center;margin-top:15px;\">
\t\t\t\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
\t\t\t\t\t<button class=\"savebt sure_button\">
                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                保存
                            </button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\" id=\"template1\" style=\"display:none;\">

\t\t\t<div class=\"content\">
\t\t\t</div>
\t\t\t<div style=\"text-align:center;margin-top:15px;\">
\t\t\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
\t\t\t\t<button class=\"savebt sure_button\">
                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                        保存
                    </button>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\" id=\"template2\" style=\"display:none;\">
\t\t\t<div class=\"row\">
\t\t\t\t<ul class=\"statistics_tit clear\">
\t\t\t\t\t<li class=\"acti\">收单</li>
\t\t\t\t\t<li>整单</li>
\t\t\t\t\t<li>记账</li>
\t\t\t\t\t<li>客服</li>
\t\t\t\t\t<li>报税</li>
\t\t\t\t\t<li>送单</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"statistics_cont\" style=\"margin-top:20px;\">
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<table class=\"custom_table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t\t<th class=\"center\">公司名称</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">服务月份</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">仓位编码</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">服务方式</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">收单时间</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">员工</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">任务等级</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">结算状态</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">结算</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">结算时间</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"30\">暂无数据</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<!-- <tr>
                                        <td class=\"center\">崔焕周</td>
                                        <td class=\"center\">5月</td>
                                        <td class=\"center\">5565656</td>
                                        <td class=\"center\">未收</td>
                                        <td class=\"center\">快递</td>
                                        <td class=\"center\">17:15</td>
                                        <td class=\"center\">张三</td>
                                        <td class=\"center\"></td>
                                        <td class=\"center\">2017-6-5</td>
                                    </tr> -->
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<div style=\"text-align:center;margin-top:15px;\" contentAuthority=\"275\">
\t\t\t\t\t\t\t<button class=\"sure_button add\">
                                    <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                    保存
                                </button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"hidden\">
\t\t\t\t\t\t<table class=\"custom_table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t\t<th class=\"center\">公司名称</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">服务月份</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">仓位编码</th>

\t\t\t\t\t\t\t\t\t<th class=\"center\">税务类型</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">整单时间</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">员工</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">任务等级</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">结算状态</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">结算</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">结算时间</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"30\">暂无数据</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<!-- tr>
                                    <td class=\"center\">崔焕周</td>
                                    <td class=\"center\">5月</td>
                                    <td class=\"center\">5565656</td>
                                    <td class=\"center\">未收</td>
                                    <td class=\"center\">快递</td>
                                    <td class=\"center\">17:15</td>
                                    <td class=\"center\">张三</td>
                                    <td class=\"center\"></td>
                                    <td class=\"center\">2017-6-5</td>
                                </tr> -->
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<div style=\"text-align:center;margin-top:15px;\" contentAuthority=\"275\">
\t\t\t\t\t\t\t<button class=\"sure_button add\">
                                    <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                    保存
                                </button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"hidden\">
\t\t\t\t\t\t<table class=\"custom_table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t\t<th class=\"center\">公司名称</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">服务月份</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">仓位编码</th>

\t\t\t\t\t\t\t\t\t<th class=\"center\">税务类型</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">做账时间</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">员工</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">任务等级</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">结算状态</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">结算</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">结算时间</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"30\">暂无数据</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<!-- <tr>
                                    <td class=\"center\">崔焕周</td>
                                    <td class=\"center\">5月</td>
                                    <td class=\"center\">5565656</td>
                                    <td class=\"center\">未收</td>
                                    <td class=\"center\">快递</td>
                                    <td class=\"center\">17:15</td>
                                    <td class=\"center\">张三</td>
                                    <td class=\"center\"></td>
                                    <td class=\"center\">2017-6-5</td>
                                </tr> -->
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<div style=\"text-align:center;margin-top:15px;\" contentAuthority=\"275\">
\t\t\t\t\t\t\t<button class=\"sure_button add\">
                                    <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                    保存
                                </button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"hidden\">
\t\t\t\t\t\t<table class=\"custom_table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t\t<th class=\"center\">公司名称</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">服务月份</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">仓位编码</th>

\t\t\t\t\t\t\t\t\t<th class=\"center\">税务类型</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">客服时间</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">员工</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">任务等级</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">结算状态</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">结算</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">结算时间</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"30\">暂无数据</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<!-- <tr>
                                    <td class=\"center\">崔焕周</td>
                                    <td class=\"center\">5月</td>
                                    <td class=\"center\">5565656</td>
                                    <td class=\"center\">未收</td>
                                    <td class=\"center\">快递</td>
                                    <td class=\"center\">17:15</td>
                                    <td class=\"center\">张三</td>
                                    <td class=\"center\"></td>
                                    <td class=\"center\">2017-6-5</td>
                                </tr> -->
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<div style=\"text-align:center;margin-top:15px;\" contentAuthority=\"275\">
\t\t\t\t\t\t\t<button class=\"sure_button add\">
                                    <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                    保存
                                </button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"hidden\">
\t\t\t\t\t\t<table class=\"custom_table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t\t<th class=\"center\">公司名称</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">服务月份</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">仓位编码</th>

\t\t\t\t\t\t\t\t\t<th class=\"center\">税务类型</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">报税时间</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">员工</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">任务等级</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">结算状态</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">结算</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">结算时间</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"30\">暂无数据</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<!-- <tr>
                                        <td class=\"center\">崔焕周</td>
                                        <td class=\"center\">5月</td>
                                        <td class=\"center\">5565656</td>
                                        <td class=\"center\">未收</td>
                                        <td class=\"center\">快递</td>
                                        <td class=\"center\">17:15</td>
                                        <td class=\"center\">张三</td>
                                        <td class=\"center\"></td>
                                        <td class=\"center\">2017-6-5</td>
                                    </tr> -->
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<div style=\"text-align:center;margin-top:15px;\" contentAuthority=\"275\">
\t\t\t\t\t\t\t<button class=\"sure_button add\">
                                    <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                    保存
                                </button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"hidden\">
\t\t\t\t\t\t<table class=\"custom_table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t\t<th class=\"center\">公司名称</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">服务月份</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">仓位编码</th>

\t\t\t\t\t\t\t\t\t<th class=\"center\">服务方式</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">送单时间</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">员工</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">任务等级</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">结算状态</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">结算</th>
\t\t\t\t\t\t\t\t\t<th class=\"center\">结算时间</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"30\">暂无数据</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<!-- <tr>
                                        <td class=\"center\">崔焕周</td>
                                        <td class=\"center\">5月</td>
                                        <td class=\"center\">5565656</td>
                                        <td class=\"center\">未收</td>
                                        <td class=\"center\">快递</td>
                                        <td class=\"center\">17:15</td>
                                        <td class=\"center\">张三</td>
                                        <td class=\"center\"></td>
                                        <td class=\"center\">2017-6-5</td>
                                    </tr> -->
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<div style=\"text-align:center;margin-top:15px;\" contentAuthority=\"275\">
\t\t\t\t\t\t\t<button class=\"sure_button add\">
                                    <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                    保存
                                </button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\" id=\"template3\" style=\"display:none;\">
\t\t\t<div class=\"statistics_cont\" style=\"margin-top:15px;\">
\t\t\t\t<div class=\"\">
\t\t\t\t\t<table class=\"custom_table\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t<th class=\"center\">公司名称</th>
\t\t\t\t\t\t\t\t<th class=\"center\">任务内容</th>
\t\t\t\t\t\t\t\t<th class=\"center\">任务状态</th>
\t\t\t\t\t\t\t\t<th class=\"center\">任务时间</th>
\t\t\t\t\t\t\t\t<th class=\"center\">员工</th>
\t\t\t\t\t\t\t\t<th class=\"center\">任务等级</th>
\t\t\t\t\t\t\t\t<th class=\"center\">结算状态</th>
\t\t\t\t\t\t\t\t<th class=\"center\">结算</th>
\t\t\t\t\t\t\t\t<th class=\"center\">结算时间</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"30\">暂无数据</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<!-- <tr>
                                    <td class=\"center\">崔焕周</td>
                                    <td class=\"center\">5月</td>
                                    <td class=\"center\">5565656</td>
                                    <td class=\"center\">未收</td>
                                    <td class=\"center\">快递</td>
                                    <td class=\"center\">17:15</td>
                                    <td class=\"center\">张三</td>
                                    <td class=\"center\"></td>
                                    <td class=\"center\">2017-6-5</td>
                                </tr> -->
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t<div style=\"text-align:center;margin-top:15px;\" contentAuthority=\"276\">
\t\t\t\t\t\t<button class=\"sure_button add\">
                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                保存
                            </button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>
\t";
        // line 750
        $this->loadTemplate("admin/mark.html", "admin/financialManagement/employeePerformance.html", 750)->display($context);
        // line 751
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script>
\t\$(function() {

        cs.getNodes([164, 247]);
\t\tcs.getYearAndMonth('2015-1-1', '2025-12-31', '.monthList');

\t\tvar order = 'bmm_employees.id desc';
\t\tvar page_size = 10; //每页显示的条目数
\t\tvar employees = {}; //所有员工’
\t\tvar sMonth = \"\";   //默认当月
\t\t//设置普通搜索 月份value
\t\t//      setMonthValue();
\t\t//      function setMonthValue(){
\t\t//          \$('[sear=\"month\"]').find('option').not(':first').each(function(i,e){
\t\t//              \$(this).val(new Date().getFullYear() + \$(this).val());
\t\t//          });
\t\t//      }
\t\tvar count = {
\t\t\t\"收单\":{
\t\t\t\t1:0,
\t\t\t\t2:0
\t\t\t},
\t\t\t\"整单\":{
\t\t\t\t1:0,
\t\t\t\t2:0
\t\t\t},
\t\t\t\"记账\":{
\t\t\t\t1:0,
\t\t\t\t2:0
\t\t\t},
\t\t\t\"客服\":{
\t\t\t\t1:0,
\t\t\t\t2:0
\t\t\t},
\t\t\t\"报税\":{
\t\t\t\t1:0,
\t\t\t\t2:0
\t\t\t},
\t\t\t\"送单\":{
\t\t\t\t1:0,
\t\t\t\t2:0
\t\t\t},
\t\t}

\t\tvar count1 = {};

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
\t\t}

\t\t//切换每页显示的条目数
\t\tfunction changePagesize(type) {
\t\t\t\$('.changePageNum').unbind('change').change(function() {
\t\t\t\tpage_size = \$(this).val();
\t\t\t\tykp.setCookie('page_size',page_size);
\t\t\t\tgetPerformance(type);
\t\t\t})
\t\t}

\t\t//普通搜索
\t\tfunction generalSearch(type) {
\t\t\t\$('#search').unbind('click').click(function() {
\t\t\t\tif(!\$('[pts=1]').eq(0).val().trim() && !\$('[pts=1]').eq(1).val().trim()) {
\t\t\t\t\tykp.prompt('搜索条件至少输入一个！');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tsMonth = \$('select[sear=month]').val().replace(/\\./,'')
\t\t\t\tgetPerformance(type);

\t\t\t});
\t\t}

\t\tfunction insert_flg(str,flg,sn){
\t\t    var newstr=\"\";
\t\t    for(var i=0;i<str.length;i+=sn){
\t\t        var tmp=str.substring(i, i+sn);
\t\t        newstr+=tmp+flg;
\t\t    }
\t\t    return newstr;
\t\t}

\t\t//获取员工绩效 默认获取记账报税绩效
\t\tfunction getPerformance(type) {

\t\t\tchangePagesize(type);
\t\t\tgeneralSearch(type);
\t\t\tykp.list({
\t\t\t\turl: '/api/api_finance/achievements_list',
\t\t\t\tmethod: 'POST',
\t\t\t\tdata: {
\t\t\t\t\tstype: type,
\t\t\t\t\tlimit: page_size,
\t\t\t\t\tname: \$('[sear=\"name\"]').val(),
\t\t\t\t\ttime: sMonth ? sMonth :\"\"
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '.pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
                    \$('.monthList').val(res.data.time);
//\t\t\t\t\t console.log(judgeData(type,res));
\t\t\t\t\tif(judgeData(type, res)) {
\t\t\t\t\t\thandlePerformanceData(type, res);
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\t// console.log(1);
\t\t\t\t\tvar ele = '';

\t\t\t\t\tif(type == 1) {
\t\t\t\t\t\tele = '#dataList';
\t\t\t\t\t}
\t\t\t\t\tif(type == 2) {
\t\t\t\t\t\tele = '#dataList1';
\t\t\t\t\t}
\t\t\t\t\t\$(ele).html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//根据type 处理获取到的员工绩效数据
\t\tfunction handlePerformanceData(type, res) {
\t\t\tvar data = res.data.items;

            var html = [];
\t\t\tvar empPer = [];
\t\t\tvar _empPer_money = [0,0,0,0,0,0,0,0,0,0,0,0]; //员工绩效信息
            var total = 0; //绩效总额
\t\t\tcount = {
\t\t\t\t\"收单\":{
\t\t\t\t\t1:0,
\t\t\t\t\t2:0
\t\t\t\t},
\t\t\t\t\"整单\":{
\t\t\t\t\t1:0,
\t\t\t\t\t2:0
\t\t\t\t},
\t\t\t\t\"记账\":{
\t\t\t\t\t1:0,
\t\t\t\t\t2:0
\t\t\t\t},
\t\t\t\t\"客服\":{
\t\t\t\t\t1:0,
\t\t\t\t\t2:0
\t\t\t\t},
\t\t\t\t\"报税\":{
\t\t\t\t\t1:0,
\t\t\t\t\t2:0
\t\t\t\t},
\t\t\t\t\"送单\":{
\t\t\t\t\t1:0,
\t\t\t\t\t2:0
\t\t\t\t},
\t\t\t}
            if(type == 1) {
                var  _jzedit = cs.getNodes([294], true);
                if(_jzedit){
\t\t\t\t\t\$(\"#taxCharge .priceEdit\").show();
\t\t\t\t}
\t\t\t\tfor(var i in data) {
                    empPer = data[i]['list'];
                    count['收单'][2] = 0;
                    count['收单'][1] = 0;
                    count['整单'][2] = 0;
                    count['整单'][1] = 0;
                    count['记账'][2] = 0;
                    count['记账'][1] = 0;
                    count['客服'][2] = 0;
                    count['客服'][1] = 0;
                    count['报税'][2] = 0;
                    count['报税'][1] = 0;
                    count['送单'][2] = 0;
                    count['送单'][1] = 0;
                    for(var k in empPer) {
\t\t\t\t\t\ttotal += parseFloat(empPer[k]['cateInfo']['money']* parseInt(empPer[k]['lv']) * empPer[k]['count']);
\t\t\t\t\t\tif(empPer[k]['cateInfo']['name'] == '收单') {
\t\t\t\t\t\t\tif(empPer[k]['cateInfo']['type'] == 2) {
                                count['收单'][2] += parseInt(empPer[k][\"count\"]);
\t\t\t\t\t\t\t\t_empPer_money[0] = _empPer_money[0] ?(_empPer_money[0] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));

                            } else{
                                count['收单'][1] += parseInt(empPer[k][\"count\"]);
\t\t\t\t\t\t\t\t//_empPer_money[1] = (empPer[k]['cateInfo']['money'] * empPer[k]['lv']);
                                _empPer_money[1] = _empPer_money[1] ?(_empPer_money[1] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));
\t\t\t\t\t\t\t}

\t\t\t\t\t\t}
\t\t\t\t\t\tif(empPer[k]['cateInfo']['name'] == '整单') {
\t\t\t\t\t\t\tif(empPer[k]['cateInfo']['type'] == 2) {
\t\t\t\t\t\t\t\tcount['整单'][2] += parseInt(empPer[k][\"count\"]);
\t\t\t\t\t\t\t\t//_empPer_money[2] = (empPer[k]['cateInfo']['money']  * empPer[k]['lv']);
                                _empPer_money[2] = _empPer_money[2] ?(_empPer_money[2] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));
\t\t\t\t\t\t\t} else{
\t\t\t\t\t\t\t\tcount['整单'][1] += parseInt(empPer[k][\"count\"]);
\t\t\t\t\t\t\t\t//_empPer_money[3] = (empPer[k]['cateInfo']['money']  * empPer[k]['lv']);
                                _empPer_money[3] = _empPer_money[3] ?(_empPer_money[3] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));
\t\t\t\t\t\t\t}

\t\t\t\t\t\t}
\t\t\t\t\t\tif(empPer[k]['cateInfo']['name'] == '记账') {

\t\t\t\t\t\t\tif(empPer[k]['cateInfo']['type'] == 2) {
\t\t\t\t\t\t\t\tcount['记账'][2] += parseInt(empPer[k][\"count\"]);
\t\t\t\t\t\t\t\t//_empPer_money[4] = (empPer[k]['cateInfo']['money']  * empPer[k]['lv']);
                                _empPer_money[4] = _empPer_money[4] ?(_empPer_money[4] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));
\t\t\t\t\t\t\t} else{

\t\t\t\t\t\t\t\tcount['记账'][1] = parseInt(empPer[k][\"count\"]);
\t\t\t\t\t\t\t\t//_empPer_money[5] = (empPer[k]['cateInfo']['money']  * empPer[k]['lv']);
                                _empPer_money[5] = _empPer_money[5] ?(_empPer_money[5] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));
//\t\t\t\t\t\t\t\tconsole.log(_empPer_money[5]);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t}
\t\t\t\t\t\tif(empPer[k]['cateInfo']['name'] == '客服') {
\t\t\t\t\t\t\tif(empPer[k]['cateInfo']['type'] == 2) {
\t\t\t\t\t\t\t\tcount['客服'][2] += parseInt(empPer[k][\"count\"]);
\t\t\t\t\t\t\t\t//_empPer_money[6] = (empPer[k]['cateInfo']['money']  * empPer[k]['lv']);
                                _empPer_money[6] = _empPer_money[6] ?(_empPer_money[6] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));
\t\t\t\t\t\t\t} else{
\t\t\t\t\t\t\t\tcount['客服'][1] += parseInt(empPer[k][\"count\"]);
\t\t\t\t\t\t\t\t//_empPer_money[7] = (empPer[k]['cateInfo']['money']  * empPer[k]['lv']);
                                _empPer_money[7] = _empPer_money[7] ?(_empPer_money[7] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\tif(empPer[k]['cateInfo']['name'] == '报税') {
\t\t\t\t\t\t\tif(empPer[k]['cateInfo']['type'] == 2) {
\t\t\t\t\t\t\t\tcount['报税'][2] += parseInt(empPer[k][\"count\"]);
\t\t\t\t\t\t\t\t//_empPer_money[8] = (empPer[k]['cateInfo']['money']  * empPer[k]['lv']);
                                _empPer_money[8] = _empPer_money[8] ?(_empPer_money[8] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));
\t\t\t\t\t\t\t} else{
\t\t\t\t\t\t\t\tcount['报税'][1] += parseInt(empPer[k][\"count\"]);
\t\t\t\t\t\t\t\t//_empPer_money[9] = (empPer[k]['cateInfo']['money']  * empPer[k]['lv']);
                                _empPer_money[9] = _empPer_money[9] ?(_empPer_money[9] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));
\t\t\t\t\t\t\t}

\t\t\t\t\t\t}
\t\t\t\t\t\tif(empPer[k]['cateInfo']['name'] == '送单') {
\t\t\t\t\t\t\tif(empPer[k]['cateInfo']['type'] == 2) {
\t\t\t\t\t\t\t\tcount['送单'][2] += parseInt(empPer[k][\"count\"]);
\t\t\t\t\t\t\t\t//_empPer_money[10] = (empPer[k]['cateInfo']['money']  * empPer[k]['lv']);
                                _empPer_money[10] = _empPer_money[10] ?(_empPer_money[10] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));
\t\t\t\t\t\t\t} else{
\t\t\t\t\t\t\t\tcount['送单'][1] += parseInt(empPer[k][\"count\"]);
\t\t\t\t\t\t\t\t//_empPer_money[11] = (empPer[k]['cateInfo']['money']  * empPer[k]['lv']);
                                _empPer_money[11] = _empPer_money[11] ?(_empPer_money[11] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));
                            }
\t\t\t\t\t\t}

\t\t\t\t\t}
                    html.push(
\t\t\t\t\t\t`<tr data-id=\"\${data[i]['complete_id']}\" data-time=\"\${res.data.time}\" data-statu=\"\${data[i]['is_sta']['standard_1'] == 0 ? 0 : 1}\">
                            <td style=\"cursor: pointer;color:#fff !important; text-align: right !important;\" class=\"center\" >
                            \t<a class=\"seeMore btBlue pos-rel\" title=\"结算\"><i class=\"fa fa-calculator \"></i></a>
                            </td>
                            <td class=\"center\" style=\"cursor: pointer\" ; standard =\"\${data[i]['is_sta']['standard_1']}\" >
                                \${data[i][\"is_sign\"] != 1 ? ( data[i]['is_sta']['standard_1'] == 0 ? '<span  class=\"pos-rel btGreen check \" contentAuthority=\"165\" title=\"复核\"><i class=\"fa fa-check-circle-o\"></i></span>': '<span class=\"pos-rel btOrange\" contentAuthority=\"165\" title=\"取消复核\"><i class=\"fa fa-rotate-left \"></i></span>' ) :\"\"}
                            </td>
                            <td class=\"center\">\${data[i]['userinfo'] ? data[i]['userinfo']['name'] :''}</td>
                            <td style=\"text-align: right !important;\">\${_empPer_money[0] ? (\" (\" +count['收单'][2] +\") \"+ _empPer_money[0].toFixed(2)  ) : \"0.00\" }</td>
                            <td style=\"text-align: right !important;\">\${_empPer_money[1] ? (\" (\" +count['收单'][1] +\") \"+_empPer_money[1].toFixed(2)   ) : \"0.00\"}</td>
                            <td style=\"text-align: right !important;\">\${_empPer_money[2] ? (\" (\" +count['整单'][2] +\") \"+_empPer_money[2].toFixed(2)  ) : \"0.00\"}</td>
                            <td style=\"text-align: right !important;\">\${_empPer_money[3] ? (\" (\" +count['整单'][1] +\") \"+_empPer_money[3].toFixed(2)  ) : \"0.00\"}</td>
                            <td style=\"text-align: right !important;\">\${_empPer_money[4] ? (\" (\" +count['记账'][2] +\") \"+_empPer_money[4].toFixed(2)  )  : \"0.00\"}</td>
                            <td style=\"text-align: right !important;\">\${_empPer_money[5] ? (\" (\" +count['记账'][1] +\") \"+_empPer_money[5].toFixed(2)  ) : \"0.00\"}</td>
                            <td style=\"text-align: right !important;\">\${_empPer_money[6] ? (\" (\" +count['客服'][2] +\") \"+_empPer_money[6].toFixed(2)  ) : \"0.00\"}</td>
                            <td style=\"text-align: right !important;\">\${_empPer_money[7] ? (\" (\" +count['客服'][1] +\") \"+_empPer_money[7].toFixed(2)  ) : \"0.00\"}</td>
                            <td style=\"text-align: right !important;\">\${_empPer_money[8] ? (\" (\" +count['报税'][2] +\") \"+_empPer_money[8].toFixed(2)  ) : \"0.00\"}</td>
                            <td style=\"text-align: right !important;\">\${_empPer_money[9] ? (\" (\" +count['报税'][1] +\") \"+_empPer_money[9].toFixed(2)  ) : \"0.00\"}</td>
                            <td style=\"text-align: right !important;\">\${_empPer_money[10]? (\" (\" +count['送单'][2] +\") \"+_empPer_money[10].toFixed(2) ) : \"0.00\"}</td>
                            <td style=\"text-align: right !important;\">\${_empPer_money[11]? (\" (\" +count['送单'][1] +\") \"+_empPer_money[11].toFixed(2) ) : \"0.00\"}</td>
                            <td class=\"_total\" style=\"text-align: right !important;\">\${total.toFixed(2)}</td>
                        </tr>`);
\t\t\t\t\t_empPer_money = [];
\t\t\t\t\ttotal = 0;
\t\t\t\t}
\t\t\t\tsMonth = \$('select[sear=month]').val().replace(/\\./,'');
                \$('.gs').html(JSON.parse(ykp.getCookie('userinfo')).company.name +\" \"+ \$('select[sear=month]').val()+\" \"+ \$(\"#tableChange .act\").text()+\"绩效\");
\t\t\t\t\$('#dataList').html(html.join(''));
\t\t\t}
\t\t\tif(type == 2) {
                var  _qtedit = cs.getNodes([295], true);
                if(_qtedit){
                    \$(\"#shortPeriod .priceEdit1\").show();
                }
\t\t\t\t\$('#dataList1').html('');
\t\t\t\t// var data = res.data.items;
\t\t\t\tvar html = [];
\t\t\t\tvar _html = [];
\t\t\t\tvar names = []; //短期业务产品
\t\t\t\t\$('#shortPeriod ._name').each(function(i, e) {
\t\t\t\t\tnames[i] = \$(this).text().trim();
\t\t\t\t});
\t\t\t\tvar empPer = []; //员工绩效信息
\t\t\t\tvar _empPer_money = {}; //员工绩效提成
\t\t\t\tvar total = 0; //绩效总额

\t\t\t\tfor(var i in data) {
\t\t\t\t\tempPer = data[i]['list'];
\t\t\t\t\t_empPer_money[\"注册公司\"] = {
\t\t\t\t\t\tmoney:0,
\t\t\t\t\t\tcount:0,
\t\t\t\t\t};
                    _empPer_money[\"开基本户\"] = {
                        money:0,
                        count:0,
                    };
                    for(var k in empPer) {
                        total += parseFloat(empPer[k]['cateInfo']['money']* parseInt(empPer[k]['lv']) * empPer[k]['count']);
                        if(empPer[k]['cateInfo']['name'] == '注册公司') {
                            _empPer_money[\"注册公司\"].count += parseInt(empPer[k][\"count\"]);
                            _empPer_money[\"注册公司\"].money += (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));
                        }
\t\t\t\t\t\tif(empPer[k]['cateInfo']['name'] == '开基本户') {
                            _empPer_money[\"开基本户\"].count += parseInt(empPer[k][\"count\"]);
                            _empPer_money[\"开基本户\"].money += (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));
                        }
\t\t\t\t\t}
                    for(var z in names) {
\t\t\t\t\t\t_html.push(
\t\t\t\t\t\t\t`<td class=\"center\">
                                \${_empPer_money[names[z]] ?\" (\"+_empPer_money[names[z]]['count']+\")\" + (_empPer_money[names[z]]['money'].toFixed(2)): '0.00'}
                            </td> `
\t\t\t\t\t\t);
\t\t\t\t\t}
\t\t\t\t\thtml.push(
\t\t\t\t\t\t`<tr data-id=\"\${data[i]['complete_id']}\" data-time=\"\${res.data.time}\"  data-statu=\"\${data[i]['is_sta']['standard_2'] == 0 ? 0 : 1}\">
                            <td style=\"cursor: pointer;text-align:right;\"  standard=\"\${data[i]['is_sta']['standard_2']}\" class=\"center\">
                            \t<label class=\"pos-rel\">
                            \t<a style=\"color:#fff !important;\" title=\"结算\" class=\"seeMore btBlue pos-rel\"><i class=\"fa fa-calculator \"></i></a>
                            \t \${data[i][\"is_sign\"] != 1 ? ( data[i]['is_sta']['standard_2'] == 0  ? ('<span style=\"display:'+(data[i][\"is_sign\"] != 1 ? \"\" : \"none\")+'\" class=\"pos-rel check btGreen\" title=\"复核\" contentAuthority=\"248\"><i class=\"fa fa-check-circle-o\"></i></span>'): '<span class=\"pos-rel check btOrange\" title=\"取消复核\" contentAuthority=\"165\"><i class=\"fa fa-rotate-left \"></i></span>') : \"\"}
                            \t</label>
                            \t</td>
                            <td class=\"center name_\" style=\"text-align:left !important;\">\${data[i]['userinfo']['name']}</td>
                            \${_html.join('')}
                            <td class=\"center _total\">\${total.toFixed(2)}</td>
                        </tr>`
\t\t\t\t\t);
\t\t\t\t\tempPer = [];
\t\t\t\t\t_empPer_money = {};
\t\t\t\t\t_html = [];
\t\t\t\t\ttotal = 0;
\t\t\t\t}
\t\t\t\t// \$(html.join('')).children('.name_').after(_html.join(''));
\t\t\t\t\$('#dataList1').html(html.join(''));
                \$('.gs').html(JSON.parse(ykp.getCookie('userinfo')).company.name +\" \"+ \$('select[sear=month]').val()+\" \"+ \$(\"#tableChange .act\").text()+\"绩效\");
                \$(\"#temHeader\").width(\$(\"#showBox\").width()-47);
\t\t\t}
\t\t\tcs.getNodes([165, 248]);
\t\t\tdetails(type);
\t\t\tcheck(type);
\t\t}
\t\t
\t\tfunction getMoney(list){
\t\t\tvar money = 0;
\t\t\tfor(var i in list){
\t\t\t\tmoney += (list[i].money * list[i].count * lv) 
\t\t\t}
\t\t\treturn money;
\t\t}

\t\t//判断是否有返回的数据
\t\tfunction judgeData(type, res) {
\t\t\tif(!res.data || res.data.length <= 0) {

\t\t\t\tsetTimeout(function() {
\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t}, 1000);

\t\t\t\treturn false;
\t\t\t}
\t\t\treturn true;
\t\t}

\t\t//获取提成单价 默认获取记账报税提成单价
\t\tgetPercentage(1);
\t\tfunction getPercentage(type) {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_finance/get_cate',
\t\t\t\tmethod: 'get',
\t\t\t\tdata: {
\t\t\t\t\tstype: type
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
                    handlePercentageData(type, res);
\t\t\t\t\tgetPerformance(type);
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//根据type 处理获取到的提成单价
\t\tfunction handlePercentageData(type, res) {
\t\t\tvar data = res.data;
\t\t\tvar html = [];
\t\t\tvar _html = [];

            if(type == 1) {
\t\t\t\tfor(var i = 0; i < data.length; i++) {
                    if(data[i].name == \"收单\" && data[i].type == 2) {
\t\t\t\t\t\t\$('#tcPrice .sdsval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')
\t\t\t\t\t}
\t\t\t\t\tif(data[i].name == \"收单\" && data[i].type == 1) {
\t\t\t\t\t\t\$('#tcPrice .sdyval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')
\t\t\t\t\t}
\t\t\t\t\tif(data[i].name == \"送单\" && data[i].type == 2) {
\t\t\t\t\t\t\$('#tcPrice .sodsval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')
\t\t\t\t\t}
\t\t\t\t\tif(data[i].name == \"送单\" && data[i].type == 1) {
                        \$('#tcPrice .sodyval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')
\t\t\t\t\t}
\t\t\t\t\tif(data[i].name == \"整单\" && data[i].type == 2) {
\t\t\t\t\t\t\$('#tcPrice .zdsval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')
\t\t\t\t\t}
\t\t\t\t\tif(data[i].name == \"整单\" && data[i].type == 1) {
\t\t\t\t\t\t\$('#tcPrice .zdyval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')
\t\t\t\t\t}
\t\t\t\t\tif(data[i].name == \"记账\" && data[i].type == 2) {
\t\t\t\t\t\t\$('#tcPrice .cdsval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')
\t\t\t\t\t}
\t\t\t\t\tif(data[i].name == \"记账\" && data[i].type == 1) {
\t\t\t\t\t\t\$('#tcPrice .cdyval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')
\t\t\t\t\t}
\t\t\t\t\tif(data[i].name == \"客服\" && data[i].type == 2) {
\t\t\t\t\t\t\$('#tcPrice .kfsval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')
\t\t\t\t\t}
\t\t\t\t\tif(data[i].name == \"客服\" && data[i].type == 1) {
\t\t\t\t\t\t\$('#tcPrice .kfyval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')
\t\t\t\t\t}
\t\t\t\t\tif(data[i].name == \"报税\" && data[i].type == 2) {
\t\t\t\t\t\t\$('#tcPrice .bssval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')
\t\t\t\t\t}
\t\t\t\t\tif(data[i].name == \"报税\" && data[i].type == 1) {
                        \$('#tcPrice .bsyval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\t\$('#shortPeriod ._name').remove();
\t\t\t\t\$('#shortPeriod ._money').remove();
\t\t\t\tfor(var i = 0; i < data.length; i++) {
\t\t\t\t\thtml.push(`
                        <th style=\"text-align: left !important;\" class=\"center _name\">\${data[i]['name']}</th>
                    `);
\t\t\t\t\t_html.push(`
                        <td class=\"center _money\" name=\"\${data[i]['name']}\" pid=\"\${data[i]['id']}\">\${data[i]['money']}</td>
                    `);
                    count1[data[i]['name']] = 0;   //初始化 count1  默认 任务数量
\t\t\t\t}
\t\t\t\t\$('#shortPeriod ._employee').after(html.join(''));
\t\t\t\t\$('#shortPeriod ._percentage').after(_html.join(''));
\t\t\t}

\t\t\teditPercentage(type);
\t\t}

\t\t//编辑提成单价
\t\tfunction editPercentage(type) {
\t\t\t//记账报税
\t\t\t\$('.priceEdit').click(function() {
\t\t\t\tshowMark('#template');
\t\t\t\t\$('#showBox .title').text('编辑提成单价');
\t\t\t\t\$(this).parents('tr').find('th>span').each(function(i, n) {
\t\t\t\t\t\$('#templateCon .edit' + i).val(\$(this).text().trim()).attr('pid', \$(this).attr('pid'));
\t\t\t\t});

\t\t\t\t\$(\"#templateBox .savebt\").click(function() {
\t\t\t\t\tvar postdata = [];
\t\t\t\t\tvar _postdata = [];
\t\t\t\t\t\$('#templateCon input').each(function(i, e) {
\t\t\t\t\t\t_postdata[0] = parseFloat(\$(this).attr('pid'));
\t\t\t\t\t\t_postdata[1] = parseFloat(\$(this).val());
\t\t\t\t\t\tpostdata.push(_postdata);
\t\t\t\t\t\t_postdata = [];
\t\t\t\t\t});
\t\t\t\t\tpostdata = JSON.stringify(postdata);

\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_finance/edit_cate',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tupdate: postdata
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\tgetPercentage(type);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t})
\t\t\t})

\t\t\t//短期业务
\t\t\t\$('.priceEdit1').click(function() {
\t\t\t\tvar html = [];
\t\t\t\tshowMark('#template1');
\t\t\t\t\$('#showBox .title').text('编辑提成单价');
\t\t\t\t\$(this).parents('tr').find('._money').each(function(i, n) {
\t\t\t\t\thtml.push(`
                        <div style=\"margin-top:15px;float:left;\">
                            <label>\${\$(this).attr('name')}： </label>
                            <input pid=\"\${\$(this).attr('pid')}\" value=\"\${\$(this).text().trim()}\">
                        </div>
                    `);
\t\t\t\t});
\t\t\t\thtml.push(`
                    <div style=\"clear:both;\"></div>
                `);
\t\t\t\t\$('#templateCon .content').html(html.join(''));
\t\t\t\t\$(\"#templateBox .savebt\").click(function() {
\t\t\t\t\tvar postdata = [];
\t\t\t\t\tvar _postdata = [];
\t\t\t\t\t\$('#templateCon input').each(function(i, e) {
\t\t\t\t\t\t_postdata[0] = parseFloat(\$(this).attr('pid'));
\t\t\t\t\t\t_postdata[1] = parseFloat(\$(this).val());
\t\t\t\t\t\tpostdata.push(_postdata);
\t\t\t\t\t\t_postdata = [];
\t\t\t\t\t});
\t\t\t\t\tpostdata = JSON.stringify(postdata);

\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_finance/edit_cate',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tupdate: postdata
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\tgetPercentage(type);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t})
\t\t\t})
\t\t}

\t\t//记账报税  短期业务切换
\t\ttablechange();

\t\tfunction tablechange() {
\t\t\t\$('#tableChange li').click(function() {
\t\t\t\tpage_size = 10;
\t\t\t\t\$('.changePageNum').val('10');
\t\t\t\t\$('[pts=1]').each(function(i, e) {
\t\t\t\t\t\$(this).val('');
\t\t\t\t});
\t\t\t\t\$('.pageBar').empty();

\t\t\t\tvar it = \$(this);
\t\t\t\tit.addClass('act').siblings().removeClass('act');
\t\t\t\tvar index = \$(this).index();
\t\t\t\tif(index == 0) {
\t\t\t\t\t\$('#taxCharge').show();
\t\t\t\t\t\$('#shortPeriod').hide();
\t\t\t\t\tgetPercentage(1);
\t\t\t\t}
\t\t\t\tif(index == 1) {
\t\t\t\t\t\$('#taxCharge').hide();
\t\t\t\t\t\$('#shortPeriod').show();
\t\t\t\t\tgetPercentage(2);
\t\t\t\t}
\t\t\t\tcs.getYearAndMonth('2015-1-1', '2025-12-31', '.monthList');
\t\t\t});
\t\t}

\t\t//复核
\t\tfunction check(type) {
\t\t\t\$('.check').click(function() {
\t\t\t\tvar postdata = {};
\t\t\t\tvar standard = \$(this).parent().attr('standard');
\t\t\t\tpostdata['complete_id'] = \$(this).parents('tr').attr('data-id');
\t\t\t\tpostdata['stype'] = type;
\t\t\t\tpostdata['total'] = \$(this).parent().siblings('._total').text().trim();
\t\t\t\tpostdata['month'] = \$(this).parents('tr').attr('data-time').replace(/\\./,'');
\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\tlayer.confirm(standard == 0 ? '确认复核么？' : \"确认取消复核么\", function(index) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: standard == 0 ? '/api/api_finance/ac_status' : \"/api/api_finance/qx_status\",
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: postdata,
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\t\tgetPerformance(type);
\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t})
\t\t\t\t})

\t\t\t});
\t\t}

\t\t//详情
\t\tfunction details(type) {
\t\t\t\$('#taxCharge .seeMore').click(function() {
                var id = \$(this).parents('tr').attr('data-id');
\t\t\t\tvar check_statu = \$(this).parents('tr').attr('data-statu');
\t\t\t\tshowMark('#template2');
\t\t\t\t\$('#showBox .title').text('记账报税业绩统计');

\t\t\t\tif(cs.getNodes([275], true) && check_statu == '0') {
\t\t\t\t\t\$('#templateCon [contentauthority=\"275\"]').show();
\t\t\t\t}

\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_finance/ac_info',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tcomplete_id: id,
\t\t\t\t\t\tmonth: sMonth
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\tvar html = [];
\t\t\t\t\t\tvar tax_type = ['', '一般纳税人', '小规模'];
\t\t\t\t\t\tvar sd_type = ['', '外勤上门', '客户上门', '快递物流'];
                        var lev= [\"\",\"已确认\",\"已重复\",\"已失效\",\"暂不结算\"]
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\tfor(var k in data[i]) {
\t\t\t\t\t\t\t\thtml.push(`
                                    <tr data-id=\"\${data[i][k]['id']}\">
                                        <td class=\"center\">\${data[i][k]['serviceInfo']['name']}</td>
                                        <td class=\"center\">\${data[i][k]['serviceInfo']['time']}</td>
                                        <td class=\"center\">\${data[i][k]['posInfo']['pos_name'] + data[i][k]['posInfo']['pos_num']}</td>
                                        <td class=\"center\">\${i == 1 || i == 6 ? sd_type[data[i][k]['serviceInfo']['data_type']] :  tax_type[data[i][k]['serviceInfo']['tax_type']] }</td>
                                        <td class=\"center\">\${cs.getNowTime(data[i][k]['complete_time'])}</td>
                                        <td class=\"center\">\${employees[id]}</td>
                                        <td class=\"center\"><input style=\"width: 50px\" class=\"lv\" disabled value=\"\${data[i][k]['lv']}\" /></td>
                                        <td class=\"center\">\${data[i][k]['settlement_time'] != '0' ? lev[data[i][k]['set_status']] :\"\"}</td>
                                        <td class=\"center\">
                                            <select class=\"balance\" _default=\"\${data[i][k]['set_status']}\">
                                                <option value=\"1\">已确认</option>
                                                <option value=\"2\">已重复</option>
                                                <option value=\"3\">已失效</option>
                                                <option value=\"4\">暂不结算</option>
                                            </select>
                                        </td>
                                        <td class=\"center\">
                                            \${data[i][k]['set_status'] == 1 ? (data[i][k]['settlement_time'] != '0' ? cs.getNowTime(data[i][k]['settlement_time']) : ''):\"\"}
                                        </td>
                                    </tr>
                                `);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\$('#templateCon .statistics_cont tbody').eq(i - 1).html(html.join(''));
\t\t\t\t\t\t\t\$('#templateCon .statistics_cont tbody').eq(i - 1).find('.balance').each(function(i, e) {
\t\t\t\t\t\t\t\t\$(this).val(\$(this).attr('_default'));
\t\t\t\t\t\t\t});
                            \$(\"#temHeader\").width(\$(\"#showBox\").width()-47);
\t\t\t\t\t\t\thtml = [];
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t//结算 保存
\t\t\t\tbalance(type);

\t\t\t\t//业绩详情table表切换
\t\t\t\tperformanceDet();
\t\t\t})

\t\t\t\$('#shortPeriod .seeMore').click(function() {
                var id = \$(this).parents('tr').attr('data-id');
\t\t\t\tvar check_statu = \$(this).parents('tr').attr('data-statu');
\t\t\t\tshowMark('#template3');
\t\t\t\t\$('#showBox .title').text('服务任务业绩统计');

\t\t\t\tif(cs.getNodes([276], true) && check_statu == '0') {
\t\t\t\t\t\$('#templateCon [contentauthority=\"276\"]').show();
\t\t\t\t}

\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_finance/ac2_info',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tcomplete_id: id,
\t\t\t\t\t\tmonth: \$(\".monthList\").val().replace(/\\./,\"\")
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\tvar html = [];
\t\t\t\t\t\tvar lev= [\"\",\"已确认\",\"已重复\",\"已失效\",\"暂不结算\"]
\t\t\t\t\t\tvar flow = []; //任务状态
                        for(var i in data) {
\t\t\t\t\t\t\tflow = JSON.parse(data[i]['task']['htm_task.flow']);
                            html.push(
\t\t\t\t\t\t\t\t`<tr class=\"thColor\" data-id=\"\${data[i]['id']}\">
                                    <td class=\"center\">\${data[i]['task']['khm_customer.name']}</td>
                                    <td class=\"center\">\${data[i]['product']['name']}</td>
                                    <td class=\"center\">\${flow[data[i]['task']['htm_task.flow_status']]}</td>
                                    <td class=\"center\">\${data[i]['complete_time'] != '0' ? cs.getNowTime(data[i]['complete_time']) : ''}</td>
                                    <td class=\"center\">\${employees[id]}</td>
                                    <td class=\"center\"><input style=\"width: 50px\" class=\"lv\" disabled value=\"\${data[i]['lv']}\" /></td>
                                    <td class=\"center\">\${data[i]['settlement_time'] != '0' ? lev[data[i]['set_status']] :\"\"}</td>
                                    <td class=\"center\">
                                        <select class=\"balance\" _default=\"\${data[i]['set_status']}\">
                                            <option value=\"1\">已确认</option>
                                            <option value=\"2\">已重复</option>
                                            <option value=\"3\">已失效</option>
                                            <option value=\"4\">暂不结算</option>
                                        </select>
                                    </td>
                                    <td class=\"center\">
                                        \${data[i]['set_status'] == 1 ? (data[i]['settlement_time'] != '0' ? cs.getNowTime(data[i]['settlement_time']) : '') : \"\"}
                                    </td>
                                </tr> `
\t\t\t\t\t\t\t);
\t\t\t\t\t\t}

\t\t\t\t\t\t\$('#templateCon tbody').html(html.join(''));
\t\t\t\t\t\t\$('#templateCon .balance').each(function(i, e) {
\t\t\t\t\t\t\t\$(this).val(\$(this).attr('_default'));
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t//结算 保存 
\t\t\t\tbalance(type);
\t\t\t})
\t\t}

\t\t//结算 保存
\t\tfunction balance(type) {
\t\t\t\$('#templateCon .sure_button').unbind('click').click(function() {
\t\t\t\tvar postdata = {};
\t\t\t\tvar coldata = [];
\t\t\t\t//
\t\t\t\t\$('#templateCon .statistics_cont>div[class!=hidden]').find('[data-id]').each(function(i, e) {
\t\t\t\t\tcoldata.push({
\t\t\t\t\t\tid: \$(this).attr('data-id'),
\t\t\t\t\t\tset_status: \$(this).find('.balance').val(),
\t\t\t\t\t\t//lv: \$(this).find('.balance').val();
\t\t\t\t\t});
\t\t\t\t});
\t\t
\t\t\t\tpostdata['coldata'] = JSON.stringify(coldata);
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_finance/set_status',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: postdata,
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tcs.close();
\t\t\t\t\t\tgetPerformance(type);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t}

\t\t//业绩详情table表切换
\t\tfunction performanceDet() {
\t\t\t\$('.statistics_tit li').unbind('click').click(function() {
\t\t\t\tvar index = \$(this).index();
\t\t\t\tvar it = \$(this);
\t\t\t\tit.addClass('acti').siblings().removeClass('acti');
\t\t\t\t\$('#templateBox .statistics_cont>div').eq(index).removeClass('hidden').siblings().addClass('hidden');
                \$(\"#temHeader\").width(\$(\"#showBox\").width()-47);
\t\t\t})
\t\t}
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/financialManagement/employeePerformance.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  772 => 751,  770 => 750,  19 => 1,);
    }
}
/* <style>*/
/* 	#showBox {*/
/* 		min-width: 400px;*/
/* 	}*/
/* 	*/
/* 	#showBox td {*/
/* 		height: 30px;*/
/* 		line-height: 30px;*/
/* 	}*/
/* 	*/
/* 	#taxCharge thead tr th {*/
/* 		border-width: 1px*/
/* 	}*/
/* 	*/
/* 	#taxCharge thead tr.h_boder th {*/
/* 		border-bottom-width: 2px;*/
/* 	}*/
/* 	*/
/* 	#taxCharge thead tr th.ht_boder {*/
/* 		border-bottom-width: 2px;*/
/* 	}*/
/* */
/* 	#shortPeriod thead tr th {*/
/* 		border-width: 1px*/
/* 	}*/
/* 	*/
/* 	#shortPeriod thead tr.h_boder th {*/
/* 		border-bottom-width: 2px;*/
/* 	}*/
/* 	*/
/* 	#shortPeriod thead tr th.ht_boder {*/
/* 		border-bottom-width: 2px;*/
/* 	}*/
/* 	*/
/* 	#tableChange {*/
/* 		list-style: none;*/
/* 		margin-left: 0;*/
/* 		height: 42px;*/
/* 		border-bottom: 1px #d5e3ef solid;*/
/* 	}*/
/* 	*/
/* 	#tableChange li {*/
/* 		cursor: pointer;*/
/* 		padding: 10px 15px;*/
/* 		border-right: 1px #fff solid;*/
/* 		border-left: 1px #fff solid;*/
/* 		border-top: 1px #fff solid;*/
/* 	}*/
/* 	*/
/* 	#tableChange li.act {*/
/* 		border-top-color: #4C8FBD;*/
/* 		border-right: 1px solid #C5D0DC;*/
/* 		border-bottom: 1px solid #fff;*/
/* 		border-left: 1px solid #C5D0DC;*/
/* 	}*/
/* 	*/
/* 	#templateBox .statistics_tit {*/
/* 		list-style: none;*/
/* 		margin-left: 0;*/
/* 		border-bottom: 1px #d5e3ef solid;*/
/* 	}*/
/* 	*/
/* 	#templateBox .statistics_tit li {*/
/* 		float: left;*/
/* 		padding: 10px 20px;*/
/* 		cursor: pointer;*/
/* 	}*/
/* 	*/
/* 	#templateBox .statistics_tit li.acti {*/
/* 		position: relative;*/
/* 		top: 1px;*/
/* 		border-top: 1px solid #C5D0DC;*/
/* 		;*/
/* 		border-right: 1px solid #C5D0DC;*/
/* 		border-bottom: 1px solid #e6ecf2;*/
/* 		border-left: 1px solid #C5D0DC;*/
/* 	}*/
/* 	*/
/* 	#templateBox .form-horizontal .form-group {*/
/* 		margin: 0;*/
/* 	}*/
/* 	*/
/* 	#templateBox .form-horizontal .form-group input {*/
/* 		width: 100%;*/
/* 		line-height: normal !important;*/
/* 	}*/
/* 	*/
/* 	#templateBox .form-horizontal .form-group div {*/
/* 		width: 114px;*/
/* 	}*/
/* 	*/
/* 	#templateBox .form-horizontal .ite_tit {*/
/* 		font-size: 15px;*/
/* 		font-weight: bold;*/
/* 	}*/
/* 	*/
/* 	#templateCon label {*/
/* 		width: 72px;*/
/* 	}*/
/* 	*/
/* 	#templateCon .fr,*/
/* 	#templateCon .fl {*/
/* 		float: left;*/
/* 	}*/
/* 	*/
/* 	#templateCon .fr {*/
/* 		margin-left: 15px !important;*/
/* 	}*/
/* 	*/
/* 	#templateCon .col-sm-9 {*/
/* 		padding-left: 0;*/
/* 	}*/
/* 	*/
/* 	#templateCon .content label {*/
/* 		width: 95px;*/
/* 	}*/
/* 	*/
/* 	#templateCon .content input {*/
/* 		width: 114px;*/
/* 	}*/
/* 	*/
/* 	#templateCon .content {*/
/* 		width: 426px;*/
/* 	}*/
/* 	*/
/* 	#templateCon .thColor {*/
/* 		color: #000;*/
/* 		font-size: xx-small;*/
/* 	}*/
/* 	*/
/* 	.table>thead>tr>th:last-child {*/
/* 		border-right-color: inherit;*/
/* 	}*/
/* 	*/
/* 	.check {*/
/* 		padding: 2px 6px;*/
/* 		font-size: 12px;*/
/* 		line-height: 1.5;*/
/* 		border-radius: 3px;*/
/* 		border-color: #46b8da;*/
/* 		top: -1px;*/
/* 		color: white;*/
/* 		/*background-color: #6FB3E0 !important;*//* */
/* 	}*/
/* 	*/
/* 	#templateCon table {*/
/* 		min-width: 823px;*/
/* 	}*/
/* */
/* */
/* </style>*/
/* <div class=" widget-main">*/
/* 	<div class="row">*/
/* 		<div class="col-lg-12">*/
/* 			<!-- <h3 class="header smaller lighter  blue">员工绩效</h3> -->*/
/* 			<ul id="tableChange" class="clear">*/
/* 				<li class="fl act">记账报税</li>*/
/* 				<li class="fl">短期业务</li>*/
/* 			</ul>*/
/* 			<div class="row" style="margin-top: 20px;" id="topTool">*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<select pts=1 sear="month" class="monthList">*/
/* 						<option value=""> 请选择月份 </option>*/
/* 						<option value="01"> 2017.01 </option>*/
/* 						<option value="02"> 2017.02 </option>*/
/* 						<option value="03"> 2017.03 </option>*/
/* 						<option value="04"> 2017.04 </option>*/
/* 						<option value="05"> 2017.05 </option>*/
/* 						<option value="06"> 2017.06 </option>*/
/* 						<option value="07"> 2017.07 </option>*/
/* 						<option value="08"> 2017.08 </option>*/
/* 						<option value="09"> 2017.09 </option>*/
/* 						<option value="10"> 2017.10 </option>*/
/* 						<option value="11"> 2017.11 </option>*/
/* 						<option value="12"> 2017.12 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<!--<input type="text" pts=1 placeholder="员工" sear="name">-->*/
/* 					<select style="margin: 12px !important;width: 180px"  pts=1  sear="name" class="advandced-search select2-hidden-accessible" tabindex="-1" data-type="gj" aria-hidden="true">*/
/* 						<option value=""> 员工<br /> </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<button type="button" id="search" title="搜索" class="btn btn-info btn-sm">*/
/*                             <i class="fa fa-search"></i>*/
/*                         </button>*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 			<div class="custom_table">*/
/* 				<table id="taxCharge">*/
/* 					<thead>*/
/* 						<tr style="height: 50px;" class="thColor">*/
/* 							<th colspan="26" class="gs" style="text-align: center !important;"></th>*/
/* 						</tr>*/
/* 						<tr class="thColor">*/
/* 							<th class="center ht_boder" style="text-align: center !important;" colspan="2" rowspan="2">操作</th>*/
/* 							<!--<th class="center ht_boder" rowspan="2">提成复核</th>-->*/
/* 							<th class="center ht_boder " rowspan="2">员工</th>*/
/* 							<th class="center" colspan="2" style="text-align: center !important;">收单</th>*/
/* 							<th class="center" colspan="2" style="text-align: center !important;">整单</th>*/
/* 							<th class="center" colspan="2" style="text-align: center !important;">记账</th>*/
/* 							<th class="center" colspan="2" style="text-align: center !important;">客服</th>*/
/* 							<th class="center" colspan="2" style="text-align: center !important;">报税</th>*/
/* 							<th class="center" colspan="2" style="text-align: center !important;">送单</th>*/
/* 							<th class="center ht_boder" rowspan="2">提成总额</th>*/
/* */
/* 						</tr>*/
/* 						<tr class="h_boder thColor">*/
/* 							<th class="center">小规模</th>*/
/* 							<th class="center">一般纳税人</th>*/
/* 							<th class="center">小规模</th>*/
/* 							<th class="center">一般纳税人</th>*/
/* 							<th class="center">小规模</th>*/
/* 							<th class="center">一般纳税人</th>*/
/* 							<th class="center">小规模</th>*/
/* 							<th class="center">一般纳税人</th>*/
/* 							<th class="center">小规模</th>*/
/* 							<th class="center">一般纳税人</th>*/
/* 							<th class="center">小规模</th>*/
/* 							<th class="center">一般纳税人</th>*/
/* 						</tr>*/
/* 						<tr id="tcPrice" >*/
/* 							<th style="text-align: right !important;" class="center">*/
/* 								<div >*/
/* 									<a style="display:none;cursor: pointer;color: #fff !important;"  class="priceEdit btBlue" title="编辑单价"><i class="fa fa-pencil-square-o"></i></a>*/
/* 								</div>*/
/* 							</th>*/
/* 							<th class="center"></th>*/
/* 							<th class="center"></th>*/
/* 							<th style="text-align: right !important;"><span class="sdsval"></span></th>*/
/* 							<th style="text-align: right !important;"><span class="sdyval"></span></th>*/
/* 							<th style="text-align: right !important;"><span class="zdsval"></span></th>*/
/* 							<th style="text-align: right !important;"><span class="zdyval"></span></th>*/
/* 							<th style="text-align: right !important;"><span class="cdsval"></span></th>*/
/* 							<th style="text-align: right !important;"><span class="cdyval"></span></th>*/
/* 							<th style="text-align: right !important;"><span class="kfsval"></span></th>*/
/* 							<th style="text-align: right !important;"><span class="kfyval"></span></th>*/
/* 							<th style="text-align: right !important;"><span class="bssval"></span></th>*/
/* 							<th style="text-align: right !important;"><span class="bsyval"></span></th>*/
/* 							<th style="text-align: right !important;"><span class="sodsval"></span></th>*/
/* 							<th style="text-align: right !important;"><span class="sodyval"></span></th>*/
/* 							<th style="text-align: right !important;"></th>*/
/* 						</tr>*/
/* 					</thead>*/
/* 					<tbody id="dataList">*/
/* 					</tbody>*/
/* 				</table>*/
/* 				<table id="shortPeriod" style="display:none;">*/
/* 					<thead>*/
/* 						<tr style="height: 50px;" class="thColor">*/
/* 							<th colspan="26" class="gs" style="text-align: center !important;"></th>*/
/* 						</tr>*/
/* 						<tr class="thColor">*/
/* 							<th class="center">操作</th>*/
/* 							<!--<th class="center">提成复核</th>-->*/
/* 							<th class="center ht_boder _employee">员工</th>*/
/* 							<th class="center">提成总额</th>*/
/* 						</tr>*/
/* 						<tr id="tcPrice1">*/
/* 							<th class="center" >*/
/* 								<div contentAuthority="247"><a style="display:none;cursor: pointer;color:#fff !important;" class="priceEdit1 btBlue" title="编辑单价"><i class="fa fa-pencil-square-o"></i></a></div>*/
/* 							</th>*/
/* 							<!--<th class="center"></th>-->*/
/* 							<th class="center _percentage"></th>*/
/* 							<th class="center"></th>*/
/* 						</tr>*/
/* 					</thead>*/
/* */
/* 					<tbody id="dataList1">*/
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/* 			<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 				<div align="left" style="padding-left: 15px; float: left; width: 10%;" class="_num"></div>*/
/* 				<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 				<div class="pageBar pagination"></div>*/
/* 				<div align="right" style="float: right;  width: 10%;">*/
/* 					<select style="width: 100px;" class="changePageNum">*/
/* 						<option value="10">每页10条</option>*/
/* 						<option value="20">每页20条</option>*/
/* 						<option value="50">每页50条</option>*/
/* 						<option value="100">每页100条</option>*/
/* 						<option value="200">每页200条</option>*/
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div id="template" style="display:none;">*/
/* 			<div class="widget-box">*/
/* 				<form class="form-horizontal" role="form">*/
/* 					<div class="ite_tit"> 收单： </div>*/
/* 					<div class="item-row clear">*/
/* 						<div class="fl form-group">*/
/* 							<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                     小规模： </label>*/
/* 							<div class="col-sm-9">*/
/* 								<span class="input-icon">*/
/*                                     <input name="edtdata1" class="edit0" type="text">*/
/*                                 </span>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="fr form-group">*/
/* 							<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                     一般纳税人： </label>*/
/* 							<div class="col-sm-9">*/
/* 								<span class="input-icon">*/
/*                                     <input name="edtdata2" class="edit1" type="text">*/
/*                                 </span>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 					<div class="ite_tit"> 整单： </div>*/
/* 					<div class="item-row clear">*/
/* 						<div class="fl form-group">*/
/* 							<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                     小规模： </label>*/
/* 							<div class="col-sm-9">*/
/* 								<span class="input-icon">*/
/*                                     <input name="edtdata5" class="edit4" type="text">*/
/*                                 </span>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="fr form-group">*/
/* 							<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                     一般纳税人： </label>*/
/* 							<div class="col-sm-9">*/
/* 								<span class="input-icon">*/
/*                                     <input name="edtdata6" class="edit5" type="text">*/
/*                                 </span>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="ite_tit"> 记账： </div>*/
/* 					<div class="item-row clear">*/
/* 						<div class="fl form-group">*/
/* 							<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                     小规模： </label>*/
/* 							<div class="col-sm-9">*/
/* 								<span class="input-icon">*/
/*                                     <input name="edtdata7" class="edit6" type="text">*/
/*                                 </span>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="fr form-group">*/
/* 							<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                     一般纳税人： </label>*/
/* 							<div class="col-sm-9">*/
/* 								<span class="input-icon">*/
/*                                     <input name="edtdata8" class="edit7" type="text">*/
/*                                 </span>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="ite_tit">客服：</div>*/
/* 					<div class="item-row clear">*/
/* 						<div class="fl form-group">*/
/* 							<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                     小规模： </label>*/
/* 							<div class="col-sm-9">*/
/* 								<span class="input-icon">*/
/*                                     <input name="edtdata9" class="edit8" type="text">*/
/*                                 </span>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="fr form-group">*/
/* 							<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                     一般纳税人： </label>*/
/* 							<div class="col-sm-9">*/
/* 								<span class="input-icon">*/
/*                                     <input name="edtdata10" class="edit9" type="text">*/
/*                                 </span>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="ite_tit">报税：</div>*/
/* 					<div class="item-row clear">*/
/* 						<div class="fl form-group">*/
/* 							<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                     小规模： </label>*/
/* 							<div class="col-sm-9">*/
/* 								<span class="input-icon">*/
/*                                     <input name="edtdata11" class="edit10" type="text">*/
/*                                 </span>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="fr form-group">*/
/* 							<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                     一般纳税人： </label>*/
/* 							<div class="col-sm-9">*/
/* 								<span class="input-icon">*/
/*                                     <input name="edtdata12" class="edit11" type="text">*/
/*                                 </span>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="ite_tit"> 送单： </div>*/
/* 					<div class="item-row clear">*/
/* 						<div class="fl form-group">*/
/* 							<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                     小规模： </label>*/
/* 							<div class="col-sm-9">*/
/* 								<span class="input-icon">*/
/*                                     <input name="edtdata3" class="edit2" type="text">*/
/*                                 </span>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="fr form-group">*/
/* 							<label class="control-label col-xs-12  col-sm-3 no-padding-left ">*/
/*                                     一般纳税人： </label>*/
/* 							<div class="col-sm-9">*/
/* 								<span class="input-icon">*/
/*                                     <input name="edtdata4" class="edit3" type="text">*/
/*                                 </span>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</form>*/
/* 				<!--保存按钮-->*/
/* 				<div style="text-align:center;margin-top:15px;">*/
/* 					<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* 					<button class="savebt sure_button">*/
/*                                 <i class="fa fa-check" aria-hidden="true"></i>*/
/*                                 保存*/
/*                             </button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="row" id="template1" style="display:none;">*/
/* */
/* 			<div class="content">*/
/* 			</div>*/
/* 			<div style="text-align:center;margin-top:15px;">*/
/* 				<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* 				<button class="savebt sure_button">*/
/*                         <i class="fa fa-check" aria-hidden="true"></i>*/
/*                         保存*/
/*                     </button>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="row" id="template2" style="display:none;">*/
/* 			<div class="row">*/
/* 				<ul class="statistics_tit clear">*/
/* 					<li class="acti">收单</li>*/
/* 					<li>整单</li>*/
/* 					<li>记账</li>*/
/* 					<li>客服</li>*/
/* 					<li>报税</li>*/
/* 					<li>送单</li>*/
/* 				</ul>*/
/* 				<div class="statistics_cont" style="margin-top:20px;">*/
/* 					<div class="">*/
/* 						<table class="custom_table">*/
/* 							<thead>*/
/* 								<tr class="thColor">*/
/* 									<th class="center">公司名称</th>*/
/* 									<th class="center">服务月份</th>*/
/* 									<th class="center">仓位编码</th>*/
/* 									<th class="center">服务方式</th>*/
/* 									<th class="center">收单时间</th>*/
/* 									<th class="center">员工</th>*/
/* 									<th class="center">任务等级</th>*/
/* 									<th class="center">结算状态</th>*/
/* 									<th class="center">结算</th>*/
/* 									<th class="center">结算时间</th>*/
/* 								</tr>*/
/* 							</thead>*/
/* 							<tbody>*/
/* 								<tr>*/
/* 									<td colspan="30">暂无数据</td>*/
/* 								</tr>*/
/* 								<!-- <tr>*/
/*                                         <td class="center">崔焕周</td>*/
/*                                         <td class="center">5月</td>*/
/*                                         <td class="center">5565656</td>*/
/*                                         <td class="center">未收</td>*/
/*                                         <td class="center">快递</td>*/
/*                                         <td class="center">17:15</td>*/
/*                                         <td class="center">张三</td>*/
/*                                         <td class="center"></td>*/
/*                                         <td class="center">2017-6-5</td>*/
/*                                     </tr> -->*/
/* 							</tbody>*/
/* 						</table>*/
/* 						<div style="text-align:center;margin-top:15px;" contentAuthority="275">*/
/* 							<button class="sure_button add">*/
/*                                     <i class="fa fa-check" aria-hidden="true"></i>*/
/*                                     保存*/
/*                                 </button>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="hidden">*/
/* 						<table class="custom_table">*/
/* 							<thead>*/
/* 								<tr class="thColor">*/
/* 									<th class="center">公司名称</th>*/
/* 									<th class="center">服务月份</th>*/
/* 									<th class="center">仓位编码</th>*/
/* */
/* 									<th class="center">税务类型</th>*/
/* 									<th class="center">整单时间</th>*/
/* 									<th class="center">员工</th>*/
/* 									<th class="center">任务等级</th>*/
/* 									<th class="center">结算状态</th>*/
/* 									<th class="center">结算</th>*/
/* 									<th class="center">结算时间</th>*/
/* 								</tr>*/
/* 							</thead>*/
/* 							<tbody>*/
/* 								<tr>*/
/* 									<td colspan="30">暂无数据</td>*/
/* 								</tr>*/
/* 								<!-- tr>*/
/*                                     <td class="center">崔焕周</td>*/
/*                                     <td class="center">5月</td>*/
/*                                     <td class="center">5565656</td>*/
/*                                     <td class="center">未收</td>*/
/*                                     <td class="center">快递</td>*/
/*                                     <td class="center">17:15</td>*/
/*                                     <td class="center">张三</td>*/
/*                                     <td class="center"></td>*/
/*                                     <td class="center">2017-6-5</td>*/
/*                                 </tr> -->*/
/* 							</tbody>*/
/* 						</table>*/
/* 						<div style="text-align:center;margin-top:15px;" contentAuthority="275">*/
/* 							<button class="sure_button add">*/
/*                                     <i class="fa fa-check" aria-hidden="true"></i>*/
/*                                     保存*/
/*                                 </button>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="hidden">*/
/* 						<table class="custom_table">*/
/* 							<thead>*/
/* 								<tr class="thColor">*/
/* 									<th class="center">公司名称</th>*/
/* 									<th class="center">服务月份</th>*/
/* 									<th class="center">仓位编码</th>*/
/* */
/* 									<th class="center">税务类型</th>*/
/* 									<th class="center">做账时间</th>*/
/* 									<th class="center">员工</th>*/
/* 									<th class="center">任务等级</th>*/
/* 									<th class="center">结算状态</th>*/
/* 									<th class="center">结算</th>*/
/* 									<th class="center">结算时间</th>*/
/* 								</tr>*/
/* 							</thead>*/
/* 							<tbody>*/
/* 								<tr>*/
/* 									<td colspan="30">暂无数据</td>*/
/* 								</tr>*/
/* 								<!-- <tr>*/
/*                                     <td class="center">崔焕周</td>*/
/*                                     <td class="center">5月</td>*/
/*                                     <td class="center">5565656</td>*/
/*                                     <td class="center">未收</td>*/
/*                                     <td class="center">快递</td>*/
/*                                     <td class="center">17:15</td>*/
/*                                     <td class="center">张三</td>*/
/*                                     <td class="center"></td>*/
/*                                     <td class="center">2017-6-5</td>*/
/*                                 </tr> -->*/
/* 							</tbody>*/
/* 						</table>*/
/* 						<div style="text-align:center;margin-top:15px;" contentAuthority="275">*/
/* 							<button class="sure_button add">*/
/*                                     <i class="fa fa-check" aria-hidden="true"></i>*/
/*                                     保存*/
/*                                 </button>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="hidden">*/
/* 						<table class="custom_table">*/
/* 							<thead>*/
/* 								<tr class="thColor">*/
/* 									<th class="center">公司名称</th>*/
/* 									<th class="center">服务月份</th>*/
/* 									<th class="center">仓位编码</th>*/
/* */
/* 									<th class="center">税务类型</th>*/
/* 									<th class="center">客服时间</th>*/
/* 									<th class="center">员工</th>*/
/* 									<th class="center">任务等级</th>*/
/* 									<th class="center">结算状态</th>*/
/* 									<th class="center">结算</th>*/
/* 									<th class="center">结算时间</th>*/
/* 								</tr>*/
/* 							</thead>*/
/* 							<tbody>*/
/* 								<tr>*/
/* 									<td colspan="30">暂无数据</td>*/
/* 								</tr>*/
/* 								<!-- <tr>*/
/*                                     <td class="center">崔焕周</td>*/
/*                                     <td class="center">5月</td>*/
/*                                     <td class="center">5565656</td>*/
/*                                     <td class="center">未收</td>*/
/*                                     <td class="center">快递</td>*/
/*                                     <td class="center">17:15</td>*/
/*                                     <td class="center">张三</td>*/
/*                                     <td class="center"></td>*/
/*                                     <td class="center">2017-6-5</td>*/
/*                                 </tr> -->*/
/* 							</tbody>*/
/* 						</table>*/
/* 						<div style="text-align:center;margin-top:15px;" contentAuthority="275">*/
/* 							<button class="sure_button add">*/
/*                                     <i class="fa fa-check" aria-hidden="true"></i>*/
/*                                     保存*/
/*                                 </button>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="hidden">*/
/* 						<table class="custom_table">*/
/* 							<thead>*/
/* 								<tr class="thColor">*/
/* 									<th class="center">公司名称</th>*/
/* 									<th class="center">服务月份</th>*/
/* 									<th class="center">仓位编码</th>*/
/* */
/* 									<th class="center">税务类型</th>*/
/* 									<th class="center">报税时间</th>*/
/* 									<th class="center">员工</th>*/
/* 									<th class="center">任务等级</th>*/
/* 									<th class="center">结算状态</th>*/
/* 									<th class="center">结算</th>*/
/* 									<th class="center">结算时间</th>*/
/* 								</tr>*/
/* 							</thead>*/
/* 							<tbody>*/
/* 								<tr>*/
/* 									<td colspan="30">暂无数据</td>*/
/* 								</tr>*/
/* 								<!-- <tr>*/
/*                                         <td class="center">崔焕周</td>*/
/*                                         <td class="center">5月</td>*/
/*                                         <td class="center">5565656</td>*/
/*                                         <td class="center">未收</td>*/
/*                                         <td class="center">快递</td>*/
/*                                         <td class="center">17:15</td>*/
/*                                         <td class="center">张三</td>*/
/*                                         <td class="center"></td>*/
/*                                         <td class="center">2017-6-5</td>*/
/*                                     </tr> -->*/
/* 							</tbody>*/
/* 						</table>*/
/* 						<div style="text-align:center;margin-top:15px;" contentAuthority="275">*/
/* 							<button class="sure_button add">*/
/*                                     <i class="fa fa-check" aria-hidden="true"></i>*/
/*                                     保存*/
/*                                 </button>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="hidden">*/
/* 						<table class="custom_table">*/
/* 							<thead>*/
/* 								<tr class="thColor">*/
/* 									<th class="center">公司名称</th>*/
/* 									<th class="center">服务月份</th>*/
/* 									<th class="center">仓位编码</th>*/
/* */
/* 									<th class="center">服务方式</th>*/
/* 									<th class="center">送单时间</th>*/
/* 									<th class="center">员工</th>*/
/* 									<th class="center">任务等级</th>*/
/* 									<th class="center">结算状态</th>*/
/* 									<th class="center">结算</th>*/
/* 									<th class="center">结算时间</th>*/
/* 								</tr>*/
/* 							</thead>*/
/* 							<tbody>*/
/* 								<tr>*/
/* 									<td colspan="30">暂无数据</td>*/
/* 								</tr>*/
/* 								<!-- <tr>*/
/*                                         <td class="center">崔焕周</td>*/
/*                                         <td class="center">5月</td>*/
/*                                         <td class="center">5565656</td>*/
/*                                         <td class="center">未收</td>*/
/*                                         <td class="center">快递</td>*/
/*                                         <td class="center">17:15</td>*/
/*                                         <td class="center">张三</td>*/
/*                                         <td class="center"></td>*/
/*                                         <td class="center">2017-6-5</td>*/
/*                                     </tr> -->*/
/* 							</tbody>*/
/* 						</table>*/
/* 						<div style="text-align:center;margin-top:15px;" contentAuthority="275">*/
/* 							<button class="sure_button add">*/
/*                                     <i class="fa fa-check" aria-hidden="true"></i>*/
/*                                     保存*/
/*                                 </button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="row" id="template3" style="display:none;">*/
/* 			<div class="statistics_cont" style="margin-top:15px;">*/
/* 				<div class="">*/
/* 					<table class="custom_table">*/
/* 						<thead>*/
/* 							<tr class="thColor">*/
/* 								<th class="center">公司名称</th>*/
/* 								<th class="center">任务内容</th>*/
/* 								<th class="center">任务状态</th>*/
/* 								<th class="center">任务时间</th>*/
/* 								<th class="center">员工</th>*/
/* 								<th class="center">任务等级</th>*/
/* 								<th class="center">结算状态</th>*/
/* 								<th class="center">结算</th>*/
/* 								<th class="center">结算时间</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody>*/
/* 							<tr>*/
/* 								<td colspan="30">暂无数据</td>*/
/* 							</tr>*/
/* 							<!-- <tr>*/
/*                                     <td class="center">崔焕周</td>*/
/*                                     <td class="center">5月</td>*/
/*                                     <td class="center">5565656</td>*/
/*                                     <td class="center">未收</td>*/
/*                                     <td class="center">快递</td>*/
/*                                     <td class="center">17:15</td>*/
/*                                     <td class="center">张三</td>*/
/*                                     <td class="center"></td>*/
/*                                     <td class="center">2017-6-5</td>*/
/*                                 </tr> -->*/
/* 						</tbody>*/
/* 					</table>*/
/* 					<div style="text-align:center;margin-top:15px;" contentAuthority="276">*/
/* 						<button class="sure_button add">*/
/*                                 <i class="fa fa-check" aria-hidden="true"></i>*/
/*                                 保存*/
/*                             </button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* 	{% include 'admin/mark.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* <script>*/
/* 	$(function() {*/
/* */
/*         cs.getNodes([164, 247]);*/
/* 		cs.getYearAndMonth('2015-1-1', '2025-12-31', '.monthList');*/
/* */
/* 		var order = 'bmm_employees.id desc';*/
/* 		var page_size = 10; //每页显示的条目数*/
/* 		var employees = {}; //所有员工’*/
/* 		var sMonth = "";   //默认当月*/
/* 		//设置普通搜索 月份value*/
/* 		//      setMonthValue();*/
/* 		//      function setMonthValue(){*/
/* 		//          $('[sear="month"]').find('option').not(':first').each(function(i,e){*/
/* 		//              $(this).val(new Date().getFullYear() + $(this).val());*/
/* 		//          });*/
/* 		//      }*/
/* 		var count = {*/
/* 			"收单":{*/
/* 				1:0,*/
/* 				2:0*/
/* 			},*/
/* 			"整单":{*/
/* 				1:0,*/
/* 				2:0*/
/* 			},*/
/* 			"记账":{*/
/* 				1:0,*/
/* 				2:0*/
/* 			},*/
/* 			"客服":{*/
/* 				1:0,*/
/* 				2:0*/
/* 			},*/
/* 			"报税":{*/
/* 				1:0,*/
/* 				2:0*/
/* 			},*/
/* 			"送单":{*/
/* 				1:0,*/
/* 				2:0*/
/* 			},*/
/* 		}*/
/* */
/* 		var count1 = {};*/
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
/* 					$('.advandced-search').select2({*/
/* 						allowClear: true*/
/* 					});*/
/* 					for(var i in data) {*/
/*                         if(data[i]['name']) {*/
/*                             employees[data[i]['id']] = data[i]['name'];*/
/*                             $('.advandced-search').append(new Option(data[i]['name'], data[i]['name']));*/
/*                         }*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//切换每页显示的条目数*/
/* 		function changePagesize(type) {*/
/* 			$('.changePageNum').unbind('change').change(function() {*/
/* 				page_size = $(this).val();*/
/* 				ykp.setCookie('page_size',page_size);*/
/* 				getPerformance(type);*/
/* 			})*/
/* 		}*/
/* */
/* 		//普通搜索*/
/* 		function generalSearch(type) {*/
/* 			$('#search').unbind('click').click(function() {*/
/* 				if(!$('[pts=1]').eq(0).val().trim() && !$('[pts=1]').eq(1).val().trim()) {*/
/* 					ykp.prompt('搜索条件至少输入一个！');*/
/* 					return;*/
/* 				}*/
/* 				sMonth = $('select[sear=month]').val().replace(/\./,'')*/
/* 				getPerformance(type);*/
/* */
/* 			});*/
/* 		}*/
/* */
/* 		function insert_flg(str,flg,sn){*/
/* 		    var newstr="";*/
/* 		    for(var i=0;i<str.length;i+=sn){*/
/* 		        var tmp=str.substring(i, i+sn);*/
/* 		        newstr+=tmp+flg;*/
/* 		    }*/
/* 		    return newstr;*/
/* 		}*/
/* */
/* 		//获取员工绩效 默认获取记账报税绩效*/
/* 		function getPerformance(type) {*/
/* */
/* 			changePagesize(type);*/
/* 			generalSearch(type);*/
/* 			ykp.list({*/
/* 				url: '/api/api_finance/achievements_list',*/
/* 				method: 'POST',*/
/* 				data: {*/
/* 					stype: type,*/
/* 					limit: page_size,*/
/* 					name: $('[sear="name"]').val(),*/
/* 					time: sMonth ? sMonth :""*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '.pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/*                     $('.monthList').val(res.data.time);*/
/* //					 console.log(judgeData(type,res));*/
/* 					if(judgeData(type, res)) {*/
/* 						handlePerformanceData(type, res);*/
/* 						return;*/
/* 					}*/
/* 					// console.log(1);*/
/* 					var ele = '';*/
/* */
/* 					if(type == 1) {*/
/* 						ele = '#dataList';*/
/* 					}*/
/* 					if(type == 2) {*/
/* 						ele = '#dataList1';*/
/* 					}*/
/* 					$(ele).html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//根据type 处理获取到的员工绩效数据*/
/* 		function handlePerformanceData(type, res) {*/
/* 			var data = res.data.items;*/
/* */
/*             var html = [];*/
/* 			var empPer = [];*/
/* 			var _empPer_money = [0,0,0,0,0,0,0,0,0,0,0,0]; //员工绩效信息*/
/*             var total = 0; //绩效总额*/
/* 			count = {*/
/* 				"收单":{*/
/* 					1:0,*/
/* 					2:0*/
/* 				},*/
/* 				"整单":{*/
/* 					1:0,*/
/* 					2:0*/
/* 				},*/
/* 				"记账":{*/
/* 					1:0,*/
/* 					2:0*/
/* 				},*/
/* 				"客服":{*/
/* 					1:0,*/
/* 					2:0*/
/* 				},*/
/* 				"报税":{*/
/* 					1:0,*/
/* 					2:0*/
/* 				},*/
/* 				"送单":{*/
/* 					1:0,*/
/* 					2:0*/
/* 				},*/
/* 			}*/
/*             if(type == 1) {*/
/*                 var  _jzedit = cs.getNodes([294], true);*/
/*                 if(_jzedit){*/
/* 					$("#taxCharge .priceEdit").show();*/
/* 				}*/
/* 				for(var i in data) {*/
/*                     empPer = data[i]['list'];*/
/*                     count['收单'][2] = 0;*/
/*                     count['收单'][1] = 0;*/
/*                     count['整单'][2] = 0;*/
/*                     count['整单'][1] = 0;*/
/*                     count['记账'][2] = 0;*/
/*                     count['记账'][1] = 0;*/
/*                     count['客服'][2] = 0;*/
/*                     count['客服'][1] = 0;*/
/*                     count['报税'][2] = 0;*/
/*                     count['报税'][1] = 0;*/
/*                     count['送单'][2] = 0;*/
/*                     count['送单'][1] = 0;*/
/*                     for(var k in empPer) {*/
/* 						total += parseFloat(empPer[k]['cateInfo']['money']* parseInt(empPer[k]['lv']) * empPer[k]['count']);*/
/* 						if(empPer[k]['cateInfo']['name'] == '收单') {*/
/* 							if(empPer[k]['cateInfo']['type'] == 2) {*/
/*                                 count['收单'][2] += parseInt(empPer[k]["count"]);*/
/* 								_empPer_money[0] = _empPer_money[0] ?(_empPer_money[0] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));*/
/* */
/*                             } else{*/
/*                                 count['收单'][1] += parseInt(empPer[k]["count"]);*/
/* 								//_empPer_money[1] = (empPer[k]['cateInfo']['money'] * empPer[k]['lv']);*/
/*                                 _empPer_money[1] = _empPer_money[1] ?(_empPer_money[1] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));*/
/* 							}*/
/* */
/* 						}*/
/* 						if(empPer[k]['cateInfo']['name'] == '整单') {*/
/* 							if(empPer[k]['cateInfo']['type'] == 2) {*/
/* 								count['整单'][2] += parseInt(empPer[k]["count"]);*/
/* 								//_empPer_money[2] = (empPer[k]['cateInfo']['money']  * empPer[k]['lv']);*/
/*                                 _empPer_money[2] = _empPer_money[2] ?(_empPer_money[2] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));*/
/* 							} else{*/
/* 								count['整单'][1] += parseInt(empPer[k]["count"]);*/
/* 								//_empPer_money[3] = (empPer[k]['cateInfo']['money']  * empPer[k]['lv']);*/
/*                                 _empPer_money[3] = _empPer_money[3] ?(_empPer_money[3] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));*/
/* 							}*/
/* */
/* 						}*/
/* 						if(empPer[k]['cateInfo']['name'] == '记账') {*/
/* */
/* 							if(empPer[k]['cateInfo']['type'] == 2) {*/
/* 								count['记账'][2] += parseInt(empPer[k]["count"]);*/
/* 								//_empPer_money[4] = (empPer[k]['cateInfo']['money']  * empPer[k]['lv']);*/
/*                                 _empPer_money[4] = _empPer_money[4] ?(_empPer_money[4] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));*/
/* 							} else{*/
/* */
/* 								count['记账'][1] = parseInt(empPer[k]["count"]);*/
/* 								//_empPer_money[5] = (empPer[k]['cateInfo']['money']  * empPer[k]['lv']);*/
/*                                 _empPer_money[5] = _empPer_money[5] ?(_empPer_money[5] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));*/
/* //								console.log(_empPer_money[5]);*/
/* 							}*/
/* */
/* 						}*/
/* 						if(empPer[k]['cateInfo']['name'] == '客服') {*/
/* 							if(empPer[k]['cateInfo']['type'] == 2) {*/
/* 								count['客服'][2] += parseInt(empPer[k]["count"]);*/
/* 								//_empPer_money[6] = (empPer[k]['cateInfo']['money']  * empPer[k]['lv']);*/
/*                                 _empPer_money[6] = _empPer_money[6] ?(_empPer_money[6] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));*/
/* 							} else{*/
/* 								count['客服'][1] += parseInt(empPer[k]["count"]);*/
/* 								//_empPer_money[7] = (empPer[k]['cateInfo']['money']  * empPer[k]['lv']);*/
/*                                 _empPer_money[7] = _empPer_money[7] ?(_empPer_money[7] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));*/
/* 							}*/
/* 						}*/
/* 						if(empPer[k]['cateInfo']['name'] == '报税') {*/
/* 							if(empPer[k]['cateInfo']['type'] == 2) {*/
/* 								count['报税'][2] += parseInt(empPer[k]["count"]);*/
/* 								//_empPer_money[8] = (empPer[k]['cateInfo']['money']  * empPer[k]['lv']);*/
/*                                 _empPer_money[8] = _empPer_money[8] ?(_empPer_money[8] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));*/
/* 							} else{*/
/* 								count['报税'][1] += parseInt(empPer[k]["count"]);*/
/* 								//_empPer_money[9] = (empPer[k]['cateInfo']['money']  * empPer[k]['lv']);*/
/*                                 _empPer_money[9] = _empPer_money[9] ?(_empPer_money[9] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));*/
/* 							}*/
/* */
/* 						}*/
/* 						if(empPer[k]['cateInfo']['name'] == '送单') {*/
/* 							if(empPer[k]['cateInfo']['type'] == 2) {*/
/* 								count['送单'][2] += parseInt(empPer[k]["count"]);*/
/* 								//_empPer_money[10] = (empPer[k]['cateInfo']['money']  * empPer[k]['lv']);*/
/*                                 _empPer_money[10] = _empPer_money[10] ?(_empPer_money[10] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));*/
/* 							} else{*/
/* 								count['送单'][1] += parseInt(empPer[k]["count"]);*/
/* 								//_empPer_money[11] = (empPer[k]['cateInfo']['money']  * empPer[k]['lv']);*/
/*                                 _empPer_money[11] = _empPer_money[11] ?(_empPer_money[11] + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']))) : 0 + (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));*/
/*                             }*/
/* 						}*/
/* */
/* 					}*/
/*                     html.push(*/
/* 						`<tr data-id="${data[i]['complete_id']}" data-time="${res.data.time}" data-statu="${data[i]['is_sta']['standard_1'] == 0 ? 0 : 1}">*/
/*                             <td style="cursor: pointer;color:#fff !important; text-align: right !important;" class="center" >*/
/*                             	<a class="seeMore btBlue pos-rel" title="结算"><i class="fa fa-calculator "></i></a>*/
/*                             </td>*/
/*                             <td class="center" style="cursor: pointer" ; standard ="${data[i]['is_sta']['standard_1']}" >*/
/*                                 ${data[i]["is_sign"] != 1 ? ( data[i]['is_sta']['standard_1'] == 0 ? '<span  class="pos-rel btGreen check " contentAuthority="165" title="复核"><i class="fa fa-check-circle-o"></i></span>': '<span class="pos-rel btOrange" contentAuthority="165" title="取消复核"><i class="fa fa-rotate-left "></i></span>' ) :""}*/
/*                             </td>*/
/*                             <td class="center">${data[i]['userinfo'] ? data[i]['userinfo']['name'] :''}</td>*/
/*                             <td style="text-align: right !important;">${_empPer_money[0] ? (" (" +count['收单'][2] +") "+ _empPer_money[0].toFixed(2)  ) : "0.00" }</td>*/
/*                             <td style="text-align: right !important;">${_empPer_money[1] ? (" (" +count['收单'][1] +") "+_empPer_money[1].toFixed(2)   ) : "0.00"}</td>*/
/*                             <td style="text-align: right !important;">${_empPer_money[2] ? (" (" +count['整单'][2] +") "+_empPer_money[2].toFixed(2)  ) : "0.00"}</td>*/
/*                             <td style="text-align: right !important;">${_empPer_money[3] ? (" (" +count['整单'][1] +") "+_empPer_money[3].toFixed(2)  ) : "0.00"}</td>*/
/*                             <td style="text-align: right !important;">${_empPer_money[4] ? (" (" +count['记账'][2] +") "+_empPer_money[4].toFixed(2)  )  : "0.00"}</td>*/
/*                             <td style="text-align: right !important;">${_empPer_money[5] ? (" (" +count['记账'][1] +") "+_empPer_money[5].toFixed(2)  ) : "0.00"}</td>*/
/*                             <td style="text-align: right !important;">${_empPer_money[6] ? (" (" +count['客服'][2] +") "+_empPer_money[6].toFixed(2)  ) : "0.00"}</td>*/
/*                             <td style="text-align: right !important;">${_empPer_money[7] ? (" (" +count['客服'][1] +") "+_empPer_money[7].toFixed(2)  ) : "0.00"}</td>*/
/*                             <td style="text-align: right !important;">${_empPer_money[8] ? (" (" +count['报税'][2] +") "+_empPer_money[8].toFixed(2)  ) : "0.00"}</td>*/
/*                             <td style="text-align: right !important;">${_empPer_money[9] ? (" (" +count['报税'][1] +") "+_empPer_money[9].toFixed(2)  ) : "0.00"}</td>*/
/*                             <td style="text-align: right !important;">${_empPer_money[10]? (" (" +count['送单'][2] +") "+_empPer_money[10].toFixed(2) ) : "0.00"}</td>*/
/*                             <td style="text-align: right !important;">${_empPer_money[11]? (" (" +count['送单'][1] +") "+_empPer_money[11].toFixed(2) ) : "0.00"}</td>*/
/*                             <td class="_total" style="text-align: right !important;">${total.toFixed(2)}</td>*/
/*                         </tr>`);*/
/* 					_empPer_money = [];*/
/* 					total = 0;*/
/* 				}*/
/* 				sMonth = $('select[sear=month]').val().replace(/\./,'');*/
/*                 $('.gs').html(JSON.parse(ykp.getCookie('userinfo')).company.name +" "+ $('select[sear=month]').val()+" "+ $("#tableChange .act").text()+"绩效");*/
/* 				$('#dataList').html(html.join(''));*/
/* 			}*/
/* 			if(type == 2) {*/
/*                 var  _qtedit = cs.getNodes([295], true);*/
/*                 if(_qtedit){*/
/*                     $("#shortPeriod .priceEdit1").show();*/
/*                 }*/
/* 				$('#dataList1').html('');*/
/* 				// var data = res.data.items;*/
/* 				var html = [];*/
/* 				var _html = [];*/
/* 				var names = []; //短期业务产品*/
/* 				$('#shortPeriod ._name').each(function(i, e) {*/
/* 					names[i] = $(this).text().trim();*/
/* 				});*/
/* 				var empPer = []; //员工绩效信息*/
/* 				var _empPer_money = {}; //员工绩效提成*/
/* 				var total = 0; //绩效总额*/
/* */
/* 				for(var i in data) {*/
/* 					empPer = data[i]['list'];*/
/* 					_empPer_money["注册公司"] = {*/
/* 						money:0,*/
/* 						count:0,*/
/* 					};*/
/*                     _empPer_money["开基本户"] = {*/
/*                         money:0,*/
/*                         count:0,*/
/*                     };*/
/*                     for(var k in empPer) {*/
/*                         total += parseFloat(empPer[k]['cateInfo']['money']* parseInt(empPer[k]['lv']) * empPer[k]['count']);*/
/*                         if(empPer[k]['cateInfo']['name'] == '注册公司') {*/
/*                             _empPer_money["注册公司"].count += parseInt(empPer[k]["count"]);*/
/*                             _empPer_money["注册公司"].money += (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));*/
/*                         }*/
/* 						if(empPer[k]['cateInfo']['name'] == '开基本户') {*/
/*                             _empPer_money["开基本户"].count += parseInt(empPer[k]["count"]);*/
/*                             _empPer_money["开基本户"].money += (parseInt(empPer[k]['cateInfo']['money']) * parseInt(empPer[k]['lv']) * parseInt(empPer[k]['count']));*/
/*                         }*/
/* 					}*/
/*                     for(var z in names) {*/
/* 						_html.push(*/
/* 							`<td class="center">*/
/*                                 ${_empPer_money[names[z]] ?" ("+_empPer_money[names[z]]['count']+")" + (_empPer_money[names[z]]['money'].toFixed(2)): '0.00'}*/
/*                             </td> `*/
/* 						);*/
/* 					}*/
/* 					html.push(*/
/* 						`<tr data-id="${data[i]['complete_id']}" data-time="${res.data.time}"  data-statu="${data[i]['is_sta']['standard_2'] == 0 ? 0 : 1}">*/
/*                             <td style="cursor: pointer;text-align:right;"  standard="${data[i]['is_sta']['standard_2']}" class="center">*/
/*                             	<label class="pos-rel">*/
/*                             	<a style="color:#fff !important;" title="结算" class="seeMore btBlue pos-rel"><i class="fa fa-calculator "></i></a>*/
/*                             	 ${data[i]["is_sign"] != 1 ? ( data[i]['is_sta']['standard_2'] == 0  ? ('<span style="display:'+(data[i]["is_sign"] != 1 ? "" : "none")+'" class="pos-rel check btGreen" title="复核" contentAuthority="248"><i class="fa fa-check-circle-o"></i></span>'): '<span class="pos-rel check btOrange" title="取消复核" contentAuthority="165"><i class="fa fa-rotate-left "></i></span>') : ""}*/
/*                             	</label>*/
/*                             	</td>*/
/*                             <td class="center name_" style="text-align:left !important;">${data[i]['userinfo']['name']}</td>*/
/*                             ${_html.join('')}*/
/*                             <td class="center _total">${total.toFixed(2)}</td>*/
/*                         </tr>`*/
/* 					);*/
/* 					empPer = [];*/
/* 					_empPer_money = {};*/
/* 					_html = [];*/
/* 					total = 0;*/
/* 				}*/
/* 				// $(html.join('')).children('.name_').after(_html.join(''));*/
/* 				$('#dataList1').html(html.join(''));*/
/*                 $('.gs').html(JSON.parse(ykp.getCookie('userinfo')).company.name +" "+ $('select[sear=month]').val()+" "+ $("#tableChange .act").text()+"绩效");*/
/*                 $("#temHeader").width($("#showBox").width()-47);*/
/* 			}*/
/* 			cs.getNodes([165, 248]);*/
/* 			details(type);*/
/* 			check(type);*/
/* 		}*/
/* 		*/
/* 		function getMoney(list){*/
/* 			var money = 0;*/
/* 			for(var i in list){*/
/* 				money += (list[i].money * list[i].count * lv) */
/* 			}*/
/* 			return money;*/
/* 		}*/
/* */
/* 		//判断是否有返回的数据*/
/* 		function judgeData(type, res) {*/
/* 			if(!res.data || res.data.length <= 0) {*/
/* */
/* 				setTimeout(function() {*/
/* 					ykp.prompt('暂无数据！');*/
/* 				}, 1000);*/
/* */
/* 				return false;*/
/* 			}*/
/* 			return true;*/
/* 		}*/
/* */
/* 		//获取提成单价 默认获取记账报税提成单价*/
/* 		getPercentage(1);*/
/* 		function getPercentage(type) {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_finance/get_cate',*/
/* 				method: 'get',*/
/* 				data: {*/
/* 					stype: type*/
/* 				},*/
/* 				success: function(res) {*/
/*                     handlePercentageData(type, res);*/
/* 					getPerformance(type);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//根据type 处理获取到的提成单价*/
/* 		function handlePercentageData(type, res) {*/
/* 			var data = res.data;*/
/* 			var html = [];*/
/* 			var _html = [];*/
/* */
/*             if(type == 1) {*/
/* 				for(var i = 0; i < data.length; i++) {*/
/*                     if(data[i].name == "收单" && data[i].type == 2) {*/
/* 						$('#tcPrice .sdsval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')*/
/* 					}*/
/* 					if(data[i].name == "收单" && data[i].type == 1) {*/
/* 						$('#tcPrice .sdyval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')*/
/* 					}*/
/* 					if(data[i].name == "送单" && data[i].type == 2) {*/
/* 						$('#tcPrice .sodsval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')*/
/* 					}*/
/* 					if(data[i].name == "送单" && data[i].type == 1) {*/
/*                         $('#tcPrice .sodyval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')*/
/* 					}*/
/* 					if(data[i].name == "整单" && data[i].type == 2) {*/
/* 						$('#tcPrice .zdsval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')*/
/* 					}*/
/* 					if(data[i].name == "整单" && data[i].type == 1) {*/
/* 						$('#tcPrice .zdyval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')*/
/* 					}*/
/* 					if(data[i].name == "记账" && data[i].type == 2) {*/
/* 						$('#tcPrice .cdsval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')*/
/* 					}*/
/* 					if(data[i].name == "记账" && data[i].type == 1) {*/
/* 						$('#tcPrice .cdyval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')*/
/* 					}*/
/* 					if(data[i].name == "客服" && data[i].type == 2) {*/
/* 						$('#tcPrice .kfsval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')*/
/* 					}*/
/* 					if(data[i].name == "客服" && data[i].type == 1) {*/
/* 						$('#tcPrice .kfyval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')*/
/* 					}*/
/* 					if(data[i].name == "报税" && data[i].type == 2) {*/
/* 						$('#tcPrice .bssval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')*/
/* 					}*/
/* 					if(data[i].name == "报税" && data[i].type == 1) {*/
/*                         $('#tcPrice .bsyval').html(data[i].money ? data[i].money : '').attr('pid', data[i].id ? data[i].id : '')*/
/* 					}*/
/* 				}*/
/* 			} else {*/
/* 				$('#shortPeriod ._name').remove();*/
/* 				$('#shortPeriod ._money').remove();*/
/* 				for(var i = 0; i < data.length; i++) {*/
/* 					html.push(`*/
/*                         <th style="text-align: left !important;" class="center _name">${data[i]['name']}</th>*/
/*                     `);*/
/* 					_html.push(`*/
/*                         <td class="center _money" name="${data[i]['name']}" pid="${data[i]['id']}">${data[i]['money']}</td>*/
/*                     `);*/
/*                     count1[data[i]['name']] = 0;   //初始化 count1  默认 任务数量*/
/* 				}*/
/* 				$('#shortPeriod ._employee').after(html.join(''));*/
/* 				$('#shortPeriod ._percentage').after(_html.join(''));*/
/* 			}*/
/* */
/* 			editPercentage(type);*/
/* 		}*/
/* */
/* 		//编辑提成单价*/
/* 		function editPercentage(type) {*/
/* 			//记账报税*/
/* 			$('.priceEdit').click(function() {*/
/* 				showMark('#template');*/
/* 				$('#showBox .title').text('编辑提成单价');*/
/* 				$(this).parents('tr').find('th>span').each(function(i, n) {*/
/* 					$('#templateCon .edit' + i).val($(this).text().trim()).attr('pid', $(this).attr('pid'));*/
/* 				});*/
/* */
/* 				$("#templateBox .savebt").click(function() {*/
/* 					var postdata = [];*/
/* 					var _postdata = [];*/
/* 					$('#templateCon input').each(function(i, e) {*/
/* 						_postdata[0] = parseFloat($(this).attr('pid'));*/
/* 						_postdata[1] = parseFloat($(this).val());*/
/* 						postdata.push(_postdata);*/
/* 						_postdata = [];*/
/* 					});*/
/* 					postdata = JSON.stringify(postdata);*/
/* */
/* 					ykp.doAjax({*/
/* 						url: '/api/api_finance/edit_cate',*/
/* 						method: 'post',*/
/* 						data: {*/
/* 							update: postdata*/
/* 						},*/
/* 						success: function(res) {*/
/* 							cs.close();*/
/* 							getPercentage(type);*/
/* 						}*/
/* 					});*/
/* 				})*/
/* 			})*/
/* */
/* 			//短期业务*/
/* 			$('.priceEdit1').click(function() {*/
/* 				var html = [];*/
/* 				showMark('#template1');*/
/* 				$('#showBox .title').text('编辑提成单价');*/
/* 				$(this).parents('tr').find('._money').each(function(i, n) {*/
/* 					html.push(`*/
/*                         <div style="margin-top:15px;float:left;">*/
/*                             <label>${$(this).attr('name')}： </label>*/
/*                             <input pid="${$(this).attr('pid')}" value="${$(this).text().trim()}">*/
/*                         </div>*/
/*                     `);*/
/* 				});*/
/* 				html.push(`*/
/*                     <div style="clear:both;"></div>*/
/*                 `);*/
/* 				$('#templateCon .content').html(html.join(''));*/
/* 				$("#templateBox .savebt").click(function() {*/
/* 					var postdata = [];*/
/* 					var _postdata = [];*/
/* 					$('#templateCon input').each(function(i, e) {*/
/* 						_postdata[0] = parseFloat($(this).attr('pid'));*/
/* 						_postdata[1] = parseFloat($(this).val());*/
/* 						postdata.push(_postdata);*/
/* 						_postdata = [];*/
/* 					});*/
/* 					postdata = JSON.stringify(postdata);*/
/* */
/* 					ykp.doAjax({*/
/* 						url: '/api/api_finance/edit_cate',*/
/* 						method: 'post',*/
/* 						data: {*/
/* 							update: postdata*/
/* 						},*/
/* 						success: function(res) {*/
/* 							cs.close();*/
/* 							getPercentage(type);*/
/* 						}*/
/* 					});*/
/* 				})*/
/* 			})*/
/* 		}*/
/* */
/* 		//记账报税  短期业务切换*/
/* 		tablechange();*/
/* */
/* 		function tablechange() {*/
/* 			$('#tableChange li').click(function() {*/
/* 				page_size = 10;*/
/* 				$('.changePageNum').val('10');*/
/* 				$('[pts=1]').each(function(i, e) {*/
/* 					$(this).val('');*/
/* 				});*/
/* 				$('.pageBar').empty();*/
/* */
/* 				var it = $(this);*/
/* 				it.addClass('act').siblings().removeClass('act');*/
/* 				var index = $(this).index();*/
/* 				if(index == 0) {*/
/* 					$('#taxCharge').show();*/
/* 					$('#shortPeriod').hide();*/
/* 					getPercentage(1);*/
/* 				}*/
/* 				if(index == 1) {*/
/* 					$('#taxCharge').hide();*/
/* 					$('#shortPeriod').show();*/
/* 					getPercentage(2);*/
/* 				}*/
/* 				cs.getYearAndMonth('2015-1-1', '2025-12-31', '.monthList');*/
/* 			});*/
/* 		}*/
/* */
/* 		//复核*/
/* 		function check(type) {*/
/* 			$('.check').click(function() {*/
/* 				var postdata = {};*/
/* 				var standard = $(this).parent().attr('standard');*/
/* 				postdata['complete_id'] = $(this).parents('tr').attr('data-id');*/
/* 				postdata['stype'] = type;*/
/* 				postdata['total'] = $(this).parent().siblings('._total').text().trim();*/
/* 				postdata['month'] = $(this).parents('tr').attr('data-time').replace(/\./,'');*/
/* 				layui.use('layer', function() {*/
/* 					var layer = layui.layer;*/
/* 					layer.confirm(standard == 0 ? '确认复核么？' : "确认取消复核么", function(index) {*/
/* 						ykp.doAjax({*/
/* 							url: standard == 0 ? '/api/api_finance/ac_status' : "/api/api_finance/qx_status",*/
/* 							method: 'post',*/
/* 							data: postdata,*/
/* 							success: function(res) {*/
/* 								cs.close();*/
/* 								getPerformance(type);*/
/* 								layer.closeAll();*/
/* 							}*/
/* 						});*/
/* 						layer.closeAll();*/
/* 					})*/
/* 				})*/
/* */
/* 			});*/
/* 		}*/
/* */
/* 		//详情*/
/* 		function details(type) {*/
/* 			$('#taxCharge .seeMore').click(function() {*/
/*                 var id = $(this).parents('tr').attr('data-id');*/
/* 				var check_statu = $(this).parents('tr').attr('data-statu');*/
/* 				showMark('#template2');*/
/* 				$('#showBox .title').text('记账报税业绩统计');*/
/* */
/* 				if(cs.getNodes([275], true) && check_statu == '0') {*/
/* 					$('#templateCon [contentauthority="275"]').show();*/
/* 				}*/
/* */
/* 				ykp.doAjax({*/
/* 					url: '/api/api_finance/ac_info',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						complete_id: id,*/
/* 						month: sMonth*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						var html = [];*/
/* 						var tax_type = ['', '一般纳税人', '小规模'];*/
/* 						var sd_type = ['', '外勤上门', '客户上门', '快递物流'];*/
/*                         var lev= ["","已确认","已重复","已失效","暂不结算"]*/
/* 						for(var i in data) {*/
/* 							for(var k in data[i]) {*/
/* 								html.push(`*/
/*                                     <tr data-id="${data[i][k]['id']}">*/
/*                                         <td class="center">${data[i][k]['serviceInfo']['name']}</td>*/
/*                                         <td class="center">${data[i][k]['serviceInfo']['time']}</td>*/
/*                                         <td class="center">${data[i][k]['posInfo']['pos_name'] + data[i][k]['posInfo']['pos_num']}</td>*/
/*                                         <td class="center">${i == 1 || i == 6 ? sd_type[data[i][k]['serviceInfo']['data_type']] :  tax_type[data[i][k]['serviceInfo']['tax_type']] }</td>*/
/*                                         <td class="center">${cs.getNowTime(data[i][k]['complete_time'])}</td>*/
/*                                         <td class="center">${employees[id]}</td>*/
/*                                         <td class="center"><input style="width: 50px" class="lv" disabled value="${data[i][k]['lv']}" /></td>*/
/*                                         <td class="center">${data[i][k]['settlement_time'] != '0' ? lev[data[i][k]['set_status']] :""}</td>*/
/*                                         <td class="center">*/
/*                                             <select class="balance" _default="${data[i][k]['set_status']}">*/
/*                                                 <option value="1">已确认</option>*/
/*                                                 <option value="2">已重复</option>*/
/*                                                 <option value="3">已失效</option>*/
/*                                                 <option value="4">暂不结算</option>*/
/*                                             </select>*/
/*                                         </td>*/
/*                                         <td class="center">*/
/*                                             ${data[i][k]['set_status'] == 1 ? (data[i][k]['settlement_time'] != '0' ? cs.getNowTime(data[i][k]['settlement_time']) : ''):""}*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 `);*/
/* 							}*/
/* 							$('#templateCon .statistics_cont tbody').eq(i - 1).html(html.join(''));*/
/* 							$('#templateCon .statistics_cont tbody').eq(i - 1).find('.balance').each(function(i, e) {*/
/* 								$(this).val($(this).attr('_default'));*/
/* 							});*/
/*                             $("#temHeader").width($("#showBox").width()-47);*/
/* 							html = [];*/
/* 						}*/
/* 					}*/
/* 				});*/
/* */
/* 				//结算 保存*/
/* 				balance(type);*/
/* */
/* 				//业绩详情table表切换*/
/* 				performanceDet();*/
/* 			})*/
/* */
/* 			$('#shortPeriod .seeMore').click(function() {*/
/*                 var id = $(this).parents('tr').attr('data-id');*/
/* 				var check_statu = $(this).parents('tr').attr('data-statu');*/
/* 				showMark('#template3');*/
/* 				$('#showBox .title').text('服务任务业绩统计');*/
/* */
/* 				if(cs.getNodes([276], true) && check_statu == '0') {*/
/* 					$('#templateCon [contentauthority="276"]').show();*/
/* 				}*/
/* */
/* 				ykp.doAjax({*/
/* 					url: '/api/api_finance/ac2_info',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						complete_id: id,*/
/* 						month: $(".monthList").val().replace(/\./,"")*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						var html = [];*/
/* 						var lev= ["","已确认","已重复","已失效","暂不结算"]*/
/* 						var flow = []; //任务状态*/
/*                         for(var i in data) {*/
/* 							flow = JSON.parse(data[i]['task']['htm_task.flow']);*/
/*                             html.push(*/
/* 								`<tr class="thColor" data-id="${data[i]['id']}">*/
/*                                     <td class="center">${data[i]['task']['khm_customer.name']}</td>*/
/*                                     <td class="center">${data[i]['product']['name']}</td>*/
/*                                     <td class="center">${flow[data[i]['task']['htm_task.flow_status']]}</td>*/
/*                                     <td class="center">${data[i]['complete_time'] != '0' ? cs.getNowTime(data[i]['complete_time']) : ''}</td>*/
/*                                     <td class="center">${employees[id]}</td>*/
/*                                     <td class="center"><input style="width: 50px" class="lv" disabled value="${data[i]['lv']}" /></td>*/
/*                                     <td class="center">${data[i]['settlement_time'] != '0' ? lev[data[i]['set_status']] :""}</td>*/
/*                                     <td class="center">*/
/*                                         <select class="balance" _default="${data[i]['set_status']}">*/
/*                                             <option value="1">已确认</option>*/
/*                                             <option value="2">已重复</option>*/
/*                                             <option value="3">已失效</option>*/
/*                                             <option value="4">暂不结算</option>*/
/*                                         </select>*/
/*                                     </td>*/
/*                                     <td class="center">*/
/*                                         ${data[i]['set_status'] == 1 ? (data[i]['settlement_time'] != '0' ? cs.getNowTime(data[i]['settlement_time']) : '') : ""}*/
/*                                     </td>*/
/*                                 </tr> `*/
/* 							);*/
/* 						}*/
/* */
/* 						$('#templateCon tbody').html(html.join(''));*/
/* 						$('#templateCon .balance').each(function(i, e) {*/
/* 							$(this).val($(this).attr('_default'));*/
/* 						});*/
/* 					}*/
/* 				});*/
/* */
/* 				//结算 保存 */
/* 				balance(type);*/
/* 			})*/
/* 		}*/
/* */
/* 		//结算 保存*/
/* 		function balance(type) {*/
/* 			$('#templateCon .sure_button').unbind('click').click(function() {*/
/* 				var postdata = {};*/
/* 				var coldata = [];*/
/* 				//*/
/* 				$('#templateCon .statistics_cont>div[class!=hidden]').find('[data-id]').each(function(i, e) {*/
/* 					coldata.push({*/
/* 						id: $(this).attr('data-id'),*/
/* 						set_status: $(this).find('.balance').val(),*/
/* 						//lv: $(this).find('.balance').val();*/
/* 					});*/
/* 				});*/
/* 		*/
/* 				postdata['coldata'] = JSON.stringify(coldata);*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_finance/set_status',*/
/* 					method: 'post',*/
/* 					data: postdata,*/
/* 					success: function(res) {*/
/* 						cs.close();*/
/* 						getPerformance(type);*/
/* 					}*/
/* 				});*/
/* 			});*/
/* 		}*/
/* */
/* 		//业绩详情table表切换*/
/* 		function performanceDet() {*/
/* 			$('.statistics_tit li').unbind('click').click(function() {*/
/* 				var index = $(this).index();*/
/* 				var it = $(this);*/
/* 				it.addClass('acti').siblings().removeClass('acti');*/
/* 				$('#templateBox .statistics_cont>div').eq(index).removeClass('hidden').siblings().addClass('hidden');*/
/*                 $("#temHeader").width($("#showBox").width()-47);*/
/* 			})*/
/* 		}*/
/* 	});*/
/* </script>*/
