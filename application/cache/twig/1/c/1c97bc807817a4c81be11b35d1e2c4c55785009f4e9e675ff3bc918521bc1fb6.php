<?php

/* admin/contractManagement/contractBook.html */
class __TwigTemplate_2226af709adfea6ac415f5a715a24db08a297ed3791f34bd3ada01bd50f7a7f8 extends Twig_Template
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
\t\twidth: 80px;
\t}
</style>
<div class=\" widget-main\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<!-- <h3 class=\"header smaller lighter blue\">备份管理</h3> -->
\t\t\t<div class=\"row\" style=\"margin-top: 20px;\" id=\"topTool\">
\t\t\t<div class=\"col-sx-4\" style=\" float: left;\">
\t\t\t\t<select style=\"width: 180px\" pts=3  sear=\"htm_contract_book.user\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t<option value=\"\">负责人  </option>
\t\t\t\t</select>
\t\t\t<!-- <input type=\"text\" pts=0 sear=\"cwm_visit.customer_name\" placeholder=\"企业名称\" class=\"col-xs-10 col-sm-10\" /> -->
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<input type=\"text\" pts=0 sear=\"htm_contract_book.code\" style=\"margin-left: 5px\" placeholder=\"合同号\" style=\"width:180px;\" />
\t\t\t</div>
\t\t\t\t
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button type=\"button\" id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
                    <i class=\"fa fa-search\"></i>
                </button>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button id=\"heightsearch\" title=\"高级搜索\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
                    <i class=\"fa fa-filter\"></i>
                </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" contentAuthority=\"145\" style=\" float: left;  margin-right: 5px; \">
\t\t\t\t<button id=\"addCon\" type=\"button\" title=\"添加\" style=\"background: #32CD32 !important;border-color: #32CD32 !important; ;\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t<i class=\"fa fa-plus\"></i>
                </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button type=\"button\" title=\"刷新\" class=\"btn btn-info btn-sm flush\" style=\"background-color: #32CD32 !important;\">
                    <i class=\"fa fa-refresh\"></i>
                </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"145\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" id=\"batchDel\" style=\"outline: none; background-color: #FF5722 !important; border-color:#FF5722 ;\" title=\"批量删除\" class=\"btn del btn-info btn-sm position-relative;\">
\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
                        </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"289\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button title=\"移交负责人\" type=\"button\" id=\"moveToClue\" style=\"outline: none;background-color: #1E9FFF !important; border-color:#1E9FFF ;\" class=\"moveToClue btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t\t\t<i class=\"fa fa-hand-o-right\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"position: absolute; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;\">
\t\t\t\t\t<div class=\"row\" id=\"SearchCon\">

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<!--<div style=\"font-size:14px;margin-top: 20px\">自动备份(每七天自动进行备份)</div>-->
\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t<table id=\"dynamic-table\" style=\"margin-bottom:0px;\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t                                    <input type=\"checkbox\" class=\"ace\" onclick=\"checkAll(this.checked)\"/>
\t\t                                    <span class=\"lbl\"></span>
\t\t                                    </label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th class=\"hidden-480 center\">操作</th>
\t\t\t\t\t\t\t\t<th class=\"hidden-480 center\" data-num=\"1\">合同类型</th>
\t\t\t\t\t\t\t\t<th class=\"hidden-480 center\" data-num=\"2\">合同号</th>
\t\t\t\t\t\t\t\t<th class=\"hidden-480 center\" data-num=\"3\">创建时间</th>
\t\t\t\t\t\t\t\t<th class=\"hidden-480 center\" data-num=\"4\">负责人</th>
\t\t\t\t\t\t\t\t<th class=\"center thColor\" data-num=\"5\">截止日期</th>
\t\t\t\t\t\t\t\t<th class=\"center thColor\" data-num=\"6\">合同号状态</th>
\t\t\t\t\t\t\t\t<th class=\"center thColor\" data-num=\"7\">状态备注</th>
\t\t\t\t\t\t\t\t<th class=\"center thColor\" data-num=\"8\">操作时间</th>
\t\t\t\t\t\t\t\t<th class=\"center thColor\" data-num=\"9\">订单编码</th>
\t\t\t\t\t\t\t\t<th class=\"hidden-480 center\" data-num=\"10\">关联客户</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody id=\"dataList\">

\t\t\t\t\t\t</tbody>

\t\t\t\t\t</table>

\t\t\t\t</div>
\t\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" id=\"num\"></div>
\t\t\t\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
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

\t\t\t\t<!-- <div class=\"label_popup\" id=\"feedBack\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t\t\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t\t            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t\t\t\t<span style=\"display: inline-block;\">编辑备注</span>
\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t\t\t\t<input type=\"text\" width=\"200px\" style=\"margin: auto;\" id=\"labelName\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t\t\t\t<button class=\"close_label\">关闭</button>
\t\t\t\t\t\t\t<button class=\"hold\">保存</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> -->

\t\t\t\t<div id=\"template\" style=\"display:none;\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<form class=\"item_form\" role=\"form\">
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label> <i class='reqired_label'>*</i>合同类型:</label>
\t\t\t\t\t\t\t\t<!--<input search data-id=\"name\" class=\"required\" msg=\"公司名称不能为空\"/>-->
\t\t\t\t\t\t\t\t<select class=\"required\" msg=\"合同类型不能为空\" style=\"width:180px;\" search type=\"text\" field=\"type\">
\t\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">长期合同</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">一次性合同</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<label> 合同前缀： </label>
\t\t\t\t\t\t\t\t<input type=\"text\" search field=\"prefix\" style=\"width:180px;\" class=\"required\" msg=\"起始编码不能为空\" />
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label> 起始编码： </label>
\t\t\t\t\t\t\t\t<input type=\"text\" search field=\"start\" style=\"width:180px;\" class=\"required\" msg=\"起始编码不能为空\" />
\t\t\t\t\t\t\t\t<label> 截止编码： </label>
\t\t\t\t\t\t\t\t<input type=\"text\" search field=\"end\" style=\"width:180px;\" class=\"required\" msg=\"截止编码不能为空\" />
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form_data\">

\t\t\t\t\t\t\t\t<label> 负责人： </label>
\t\t\t\t\t\t\t\t<select style=\"width: 180px\" field=\"user\" data-placeholder=\"请选择\" class=\"advandced-search2 select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t<label> 截止日期： </label>
\t\t\t\t\t\t\t\t<div class=\"input-group\" style=\"width:180px;display:inline-flex\">
\t\t\t\t\t\t\t\t\t<input class=\"date-timepicker1 required\" style=\"width:150px;height:30px;\" search field=\"end_time\" type=\"text\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"height:30px;width:30px;\">
                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:4px;\"></i>
                        </span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div style=\"text-align:center;margin-top:15px;\">
\t\t\t\t\t\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
\t\t\t\t\t\t\t<button class=\"sure_button addSave\">
                    <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                    保存
                </button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"template1\" style=\"display:none;\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<form class=\"item_form\" role=\"form\">
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label> <i class='reqired_label'>*</i>合同类型:</label>
\t\t\t\t\t\t\t\t<!--<input search data-id=\"name\" class=\"required\" msg=\"公司名称不能为空\"/>-->
\t\t\t\t\t\t\t\t<select class=\"required\" disabled msg=\"合同类型不能为空\" search type=\"text\" title=\"type\">
\t\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">长期合同</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">一次性合同</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<label> 合同号： </label>
\t\t\t\t\t\t\t\t<input type=\"text\" search disabled title=\"code\" class=\"required\" msg=\"起始编码不能为空\" />
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label> 负责人： </label>
\t\t\t\t\t\t\t\t<select style=\"margin-right: 12px !important;width: 180px\" field=\"user\" data-placeholder=\"负责人\" class=\"advandced-search2 select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t<label> 截止日期： </label>
\t\t\t\t\t\t\t\t<div class=\"input-group\" style=\"width:180px;display:inline-flex\">
\t\t\t\t\t\t\t\t\t<input class=\"date-timepicker1 required\" style=\"width:150px;height:30px;\" search field=\"end_time\" type=\"text\" class=\"posttime form-control typeahead scrollable\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"height:30px;width:30px;\">
                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:4px;\"></i>
                        </span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label> 合同号状态 ： </label>
\t\t\t\t\t\t\t\t<select id=\"state\" field=\"void_status\">
\t\t\t\t\t\t\t\t\t<option value=\"0\"> 未使用 </option>
\t\t\t\t\t\t\t\t\t<option value=\"1\"> 已使用 </option>
\t\t\t\t\t\t\t\t\t<option value=\"2\"> 已作废 </option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<label class=\"other\"><i class='reqired_label '>*</i> 状态备注： </label>
\t\t\t\t\t\t\t\t<input type=\"text\" search field=\"void_remark\" class=\"required other\" msg=\"\" />
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!--<div class=\"form_data other\" class=\"z\">
\t\t\t\t\t<label> 操作时间： </label>

\t\t\t\t\t<div class=\"input-group\" style=\"width:180px;display:inline-flex\">
\t\t\t\t\t\t<input  class=\"date-timepicker1 required\" style=\"width:150px;height:30px;\" search field=\"void_time\" type=\"text\" class=\"posttime form-control typeahead scrollable\" />
\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"height:30px;width:30px;\">
                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:4px;\"></i>
                        </span>
\t\t\t\t\t</div>
\t\t\t\t</div>-->
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div style=\"text-align:center;margin-top:15px;\">
\t\t\t\t\t\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
\t\t\t\t\t\t\t<button class=\"sure_button editSave\">
                    <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                    保存
                </button>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"templateDtl\" style=\"display:none;\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<form class=\"item_form\" role=\"form\">
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label> <i class='reqired_label'></i>合同类型:</label>
\t\t\t\t\t\t\t\t<!--<input disadz'z title=\"code\" data-id=\"name\" />-->
\t\t\t\t\t\t\t\t<select class=\"required\" disabled  type=\"text\" title=\"type\">
\t\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">长期合同</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">一次性合同</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<label> 合同号： </label>
\t\t\t\t\t\t\t\t<input type=\"text\" search disabled title=\"code\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label> 负责人： </label>
\t\t\t\t\t\t\t\t<input disabled type=\"text\" search title=\"name\" class=\"required other\" msg=\"\" />
\t\t\t\t\t\t\t\t<!--<select disabled style=\"margin-right: 12px !important;width: 180px\" title=\"name\"  class=\"advandced-search2 select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t</select>-->
\t\t\t\t\t\t\t\t<label> 合同号状态 ： </label>
\t\t\t\t\t\t\t\t<select disabled title=\"status\">
\t\t\t\t\t\t\t\t\t<option value=\"0\"> 未使用 </option>
\t\t\t\t\t\t\t\t\t<option value=\"1\"> 已使用 </option>
\t\t\t\t\t\t\t\t\t<option value=\"2\"> 已作废 </option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label> 创建时间： </label>
\t\t\t\t\t\t\t\t<div class=\"input-group\" style=\"width:180px;display:inline-flex\">
\t\t\t\t\t\t\t\t\t<input disabled class=\" required\" style=\"width:150px;height:30px;\" search title=\"create_at\" type=\"text\" class=\"posttime form-control typeahead scrollable\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"height:30px;width:30px;\">
                            \t\t\t<i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:4px;\"></i>
                        \t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<label> 截止日期： </label>
\t\t\t\t\t\t\t\t<div class=\"input-group\" style=\"width:180px;display:inline-flex\">
\t\t\t\t\t\t\t\t\t<input disabled class=\" required\" style=\"width:150px;height:30px;\" search title=\"end_time\" type=\"text\" class=\"posttime form-control typeahead scrollable\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"height:30px;width:30px;\">
                            \t\t\t<i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:4px;\"></i>
                        \t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label> 操作时间： </label>
\t\t\t\t\t\t\t\t<div class=\"input-group\" style=\"width:180px;display:inline-flex\">
\t\t\t\t\t\t\t\t\t<input disabled class=\" required\" style=\"width:150px;height:30px;\" search title=\"void_time\" type=\"text\" class=\"posttime form-control typeahead scrollable\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"height:30px;width:30px;\">
                            \t\t\t<i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:4px;\"></i>
                        \t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<label class=\"other\"> 状态备注： </label>
\t\t\t\t\t\t\t\t<input disabled type=\"text\" search title=\"void_remark\" class=\"required other\" msg=\"\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t\t\t\t<label  class=\"other\"> 订单编码： </label>
\t\t\t\t\t\t\t\t<input disabled type=\"text\" search title=\"contract_code\" class=\"required other\" msg=\"\" />
\t\t\t\t\t\t\t\t<label class=\"other\"> 关联客户： </label>
\t\t\t\t\t\t\t\t<input disabled type=\"text\" search title=\"khm_customer.name\" class=\"required other\" msg=\"\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 304
        $this->loadTemplate("admin/mark.html", "admin/contractManagement/contractBook.html", 304)->display($context);
        // line 305
        echo "</div>
<div class=\" widget-main\">
\t<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
\t<script>
\t\tjQuery(function(\$) {
\t\t\tcs.getNodes([145,289]);
\t\t\tvar page_size = 10; //每页显示的条目数\t
\t\t\tvar employees = {};
\t\t\tvar order = 'htm_contract_book.create_at desc';
\t\t\tvar filter = 'htm_contract_book.is_del = 0';
\t\t\tvar emps = [];

\t\t\t\$('.flush').click(function() {
\t\t\t\tfilter = '';
\t\t\t\t\$('[sear=\"htm_contract_book.code\"]').val('');
\t\t\t\t\$('[sear=\"htm_contract_book.user\"]').val('').trigger('change');
\t\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\t\tykp.setCookie(\"where\", \"\");
\t\t\t\tgetContractBooks();
\t\t\t});
\t\t\t
\t\t\tcs.setFuze({
\t\t\t\tconId: \"#dataList\",
\t\t\t\turl: \"/api/api_contract_book/transfer_user\",
\t\t\t\tbooks: true,
\t\t\t\tfun: function() {
\t\t\t\t\tgetContractBooks();
\t\t\t\t}
\t\t\t});
\t\t\t
\t\t\t//获取所有员工\t\t\t\t\t\t
\t\t\tykp.doAjax({
\t\t\t\tasync: false,
\t\t\t\turl: '/api/api_employees/f7',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tselect: 'bmm_employees.id,bmm_employees.name'
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tvar option = '';
\t\t\t\t\t\$('.advandced-search').select2({
\t\t\t\t\t\tallowClear: true
\t\t\t\t\t});
\t\t\t\t\temps = data;
\t\t\t\t\t\$('.advandced-search').html('<option value=\"\">请选择  </option>');
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tif(data[i]['name']) {
\t\t\t\t\t\t\temployees[data[i]['id']] = data[i]['name'];
\t\t\t\t\t\t\toption += `<option value=\"\${data[i]['id']}\">\${data[i]['name']}</option>`;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t\$('.advandced-search').append(option);
\t\t\t\t}
\t\t\t});

\t\t\t//通用排序
\t\t\tcs.general_sort({
\t\t\t\turl: '/api/api_contract_book/index',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tfilter: filter,
\t\t\t\t\tlimit: page_size,
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '.pageBar'
\t\t\t\t},
\t\t\t\tcontentId: \"#dataList\", //默认排序
\t\t\t\tinitOrder: \"\", //初始化sort
\t\t\t\tdefaultOrder: order,
\t\t\t\tparams: [{
\t\t\t\t\tid: \"#dynamic-table\",
\t\t\t\t\tfield: [\"\",\"\", \"htm_contract_book.type\", \"htm_contract_book.code\", \"htm_contract_book.create_at\", \"bmm_employees.name\", \"htm_contract_book.end_time\", \"htm_contract_book.status\",
\t\t\t\t\t\t\"htm_contract_book.void_remark\", \"htm_contract_book.void_time\", \"htm_contract_book.contract_code\", \"khm_customer.name\"
\t\t\t\t\t]
\t\t\t\t}]
\t\t\t}, function(res, _sort_role) {
\t\t\t\tsort_role = _sort_role;
\t\t\t\taddList(res);
\t\t\t});

\t\t\taddContractsNum();

\t\t\tfunction addContractsNum() {
\t\t\t\t\$('#addCon').click(function() {
\t\t\t\t\tshowMark('#template');
\t\t\t\t\tcs.timeplug();
\t\t\t\t\taddSave();
\t\t\t\t\t\$('#showBox .title').text('添加合同书');
\t\t\t\t\t\$('#templateCon .advandced-search2').select2({
\t\t\t\t\t\tallowClear: true
\t\t\t\t\t});
\t\t\t\t\tfor(var i in emps) {
\t\t\t\t\t\tif(emps[i]['name']) {
\t\t\t\t\t\t\t\$('#templateCon .advandced-search2').append(new Option(emps[i]['name'], emps[i]['id']));
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}

\t\t\tfunction addSave() {
\t\t\t\t/*var start = '',end = '';
\t\t\t\tvar reg = /^[\\s\\S]*[0-9]{3}\$/;
\t\t\t\t\$('#templateCon [field=\"start\"]').blur(function() {
\t\t\t\t\tstart = \$(this).val();
\t\t\t\t\tif(!reg.test(start)){
\t\t\t\t\t\tykp.prompt('合同编码必须以两位数字结尾！');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t})

\t\t\t\t\$('#templateCon [field=\"end\"]').blur(function() {
\t\t\t\t\tend = \$(this).val();//截止编码
\t\t\t\t\tif (!reg.test(\$(this).val())) {
\t\t\t\t\t\tykp.prompt('合同编码必须是以英文开头数字结尾,长度为2-10！');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tvar start_number = start.match(/[0-9]+/g)[start.match(/[0-9+]/g).length-1];//开始编码数字
\t\t\t\t\tvar start_prefix = start.substring(0,start.lastIndexOf(start_number));//开始编码前缀
\t\t\t\t\tvar end_number = end.match(/[0-9]+/g)[end.match(/[0-9+]/g).length-1];//截止编码数字
\t\t\t\t\tvar end_prefix = end.substring(0,end.lastIndexOf(end_number));//截止编码前缀
\t\t\t\t\tif (start_prefix != end_prefix) {
\t\t\t\t\t\tykp.prompt('合同编码前缀必须相同!');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\tif (parseInt(start_number)>parseInt(end_prefix)) {
\t\t\t\t\t\tykp.prompt('截止编码数不能小于起始编码数！');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t})*/

\t\t\t\t\$('#templateCon .addSave').click(function() {
\t\t\t\t\tvar reg = /^[0-9]{1,3}\$/;
\t\t\t\t\tvar prefix = \$('#templateCon [field=\"prefix\"]').val();
\t\t\t\t\tvar start = \$('#templateCon [field=\"start\"]').val();
\t\t\t\t\tvar end = \$('#templateCon [field=\"end\"]').val();
\t\t\t\t\tvar state = false;
\t\t\t\t\tif(!reg.test(start) || !reg.test(end)) {
\t\t\t\t\t\tykp.prompt('编码必须为1-3位数字!');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tif(parseInt(start) > parseInt(end)) {
\t\t\t\t\t\tykp.prompt('起始编码不能大于截止编码!');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\t//拿到数据库中相同前缀对应大小值
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_contract_book/get_max',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tprefix: prefix
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\t\tif(data['max'] != '') {
\t\t\t\t\t\t\t\tif((parseInt(start) >= parseInt(data['min']) && parseInt(start) <= parseInt(data['max'])) || (parseInt(end) >= parseInt(data['min']) && parseInt(end) <= parseInt(data['max']))) {
\t\t\t\t\t\t\t\t\tykp.prompt(data['min'] + '至' + data['max'] + '之间的编码已被占用！');
\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif(parseInt(start) < parseInt(data['min']) && parseInt(end) > parseInt(data['max'])) {
\t\t\t\t\t\t\t\t\tykp.prompt(data['min'] + '至' + data['max'] + '之间的编码已被占用！');
\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t})

\t\t\t\t\t\$('#templateCon [field=\"nums\"]').val(end - start + 1);

\t\t\t\t\tvar data = {
\t\t\t\t\t\tprefix: prefix,
\t\t\t\t\t\ttype: \$('#templateCon [field=\"type\"]').val(),
\t\t\t\t\t\tuser: \$('#templateCon [field=\"user\"]').val(),
\t\t\t\t\t\tend_time: Date.parse(new Date(\$('#templateCon [field=\"end_time\"]').val().split(' ')[0])) / 1000,
\t\t\t\t\t\tstart: start,
\t\t\t\t\t\tend: end
\t\t\t\t\t}
\t\t\t\t\tvar nowTime = Date.now() / 1000;
                    if(nowTime  > data['end_time']){
                        ykp.prompt('截止时间不能小于今天！');
                        return false;
                    }

\t\t\t\t\t//保存数据
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_contract_book/add',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: data,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tykp.prompt('成功添加' + (end - start + 1) + '条合同！');
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\tgetContractBooks();
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t})
\t\t\t}

\t\t\tgetSearch();

\t\t\tfunction getSearch() {
\t\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\t\tykp.setCookie(\"where\", \"\");
\t\t\t\tvar list = [{
\t\t\t\t\t\tname: \"合同类型\",
\t\t\t\t\t\tsearch: \"htm_contract_book.type\",
\t\t\t\t\t\ttype: \"select\",
\t\t\t\t\t\toption: [{
\t\t\t\t\t\t\tval: \"1\",
\t\t\t\t\t\t\ttext: \"长期合同\"
\t\t\t\t\t\t}, {
\t\t\t\t\t\t\tval: \"2\",
\t\t\t\t\t\t\ttext: \"一次性合同\"
\t\t\t\t\t\t}]
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tname: \"合同号\",
\t\t\t\t\t\tsearch: \"htm_contract_book.code\",
\t\t\t\t\t\ttype: \"text\"
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tname: \"创建时间\",
\t\t\t\t\t\tsearch: \"htm_contract_book.create_at\",
\t\t\t\t\t\ttype: \"time\"
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tname: \"负责人\",
\t\t\t\t\t\tsearch: \"bmm_employees.id\",
\t\t\t\t\t\ttype: \"select\",
\t\t\t\t\t\turl: \"/api/api_employees/f7\",
\t\t\t\t\t\tkey: \"people\"
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tname: \"截止日期\",
\t\t\t\t\t\tsearch: \"htm_contract_book.end_time\",
\t\t\t\t\t\ttype: \"time\"
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tname: \"合同号状态\",
\t\t\t\t\t\tsearch: \"htm_contract_book.status\",
\t\t\t\t\t\ttype: \"select\",
\t\t\t\t\t\toption: [{
\t\t\t\t\t\t\tval: \"0\",
\t\t\t\t\t\t\ttext: \"未使用\"
\t\t\t\t\t\t}, {
\t\t\t\t\t\t\tval: \"1\",
\t\t\t\t\t\t\ttext: \"已使用\"
\t\t\t\t\t\t}, {
\t\t\t\t\t\t\tval: \"2\",
\t\t\t\t\t\t\ttext: \"已作废\"
\t\t\t\t\t\t}]
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tname: \"状态备注\",
\t\t\t\t\t\tsearch: \"htm_contract_book.void_remark\",
\t\t\t\t\t\ttype: \"text\",
\t\t\t\t\t\turl: \"/api/api_employees/f7\",
\t\t\t\t\t\tkey: \"people\"
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tname: \"操作时间\",
\t\t\t\t\t\tsearch: \"htm_contract_book.void_time\",
\t\t\t\t\t\ttype: \"time\"
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tname: \"订单编码\",
\t\t\t\t\t\tsearch: \"htm_contract_book.contract_code\",
\t\t\t\t\t\ttype: \"text\"
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tname: \"关联客户\",
\t\t\t\t\t\tsearch: \"khm_customer.name\",
\t\t\t\t\t\ttype: \"text\"
\t\t\t\t\t},
\t\t\t\t\t//\t\t\t\t{name:\"使用时间\",search:\"htm_contract_book.use_time\",type:\"time\"}
\t\t\t\t];

\t\t\t\tcs.getSearch({
\t\t\t\t\tlist: list,
\t\t\t\t\tel: \"#heightsearch\",
\t\t\t\t\tel1: \"#heightsearch1\"
\t\t\t\t}, dohSearch);

\t\t\t\tfunction dohSearch() {
\t\t\t\t\tvar data = {
\t\t\t\t\t\turl: '/api/api_contract_book/index',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tlimit: page_size,
\t\t\t\t\t\t\torder: 'htm_contract_book.create_at desc'
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tcs.hSearch('.search1', data, 'filter', false, function(res, _filter) {
\t\t\t\t\t\tfilter = _filter;
\t\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\t\t\$(\"#heightsearch\").removeClass('active').css('z-index', '');
\t\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t\taddList(res);
\t\t\t\t\t})
\t\t\t\t}
\t\t\t}

\t\t\tdoSearch();
\t\t\t//普通搜索

\t\t\tfunction doSearch() {
\t\t\t\tvar data = {
\t\t\t\t\turl: '/api/api_contract_book/index',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tpage: 1,
\t\t\t\t\t\torder: order,
\t\t\t\t\t\tlimit: page_size
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tcs.doSearch('#search', data, 'filter', false, function(res, filter) {
\t\t\t\t\tfilter = filter;
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t} else {
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}
\t\t\tfunction edit() {
\t\t\t\t\$('.edit').click(function() {
\t\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\t\tshowMark('#template1');
\t\t\t\t\tcs.timeplug();
\t\t\t\t\t\$('#showBox .title').text('编辑合同书');
\t\t\t\t\t\$('#templateCon .advandced-search2').select2({
\t\t\t\t\t\tallowClear: true
\t\t\t\t\t});
\t\t\t\t\tvar data = {};
\t\t\t\t\tfor(var i in emps) {
\t\t\t\t\t\tif(emps[i]['name']) {
\t\t\t\t\t\t\t\$('#templateCon .advandced-search2').append(new Option(emps[i]['name'], emps[i]['id']));
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_contract_book/get_info',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tid: id
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\t\tvar status = data['htm_contract_book.status'];
\t\t\t\t\t\t\t\$('#templateCon [title=\"type\"]').find('option[value=\"' + data['htm_contract_book.type'] + '\"]').attr('selected', true);
\t\t\t\t\t\t\t\$('#templateCon [title=\"code\"]').val(data['htm_contract_book.code']);
\t\t\t\t\t\t\t\$('#templateCon [field=\"user\"]').find('option[value=\"' + data['htm_contract_book.user'] + '\"]').attr('selected', true);
\t\t\t\t\t\t\t\$('#templateCon [field=\"user\"]').trigger('change');
\t\t\t\t\t\t\t\$('#templateCon [field=\"void_status\"]').find('option[value=\"' + status + '\"]').attr('selected', true);

\t\t\t\t\t\t\tif(status == 2) {
\t\t\t\t\t\t\t\t\$('#templateCon [field=\"void_remark\"]').val(data['htm_contract_book.void_remark']);
\t\t\t\t\t\t\t\t\$('#templateCon [field=\"void_time\"]').val(data['htm_contract_book.void_time']);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\$('#templateCon .other').hide();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\$('#templateCon [field=\"end_time\"]').val(cs.getNowTime(data['htm_contract_book.end_time']))
\t\t\t\t\t\t\t//\$('#templateCon [field=\"void_status\"]').find('option[value=\"' + (status == '0' ? 1 : 0) + '\"]').prop('disabled', 'disabled');

\t\t\t\t\t\t\t\$('#templateCon [field=\"void_status\"]').change(function() {
\t\t\t\t\t\t\t\tif(\$(this).val() != 2) {
\t\t\t\t\t\t\t\t\t\$('#templateCon .other').hide();
\t\t\t\t\t\t\t\t\t//\$('#templateCon .other').remove();
\t\t\t\t\t\t\t\t\t//\t\$('#templateCon [field=\"void_remark\"]').attr('disabled',true);
\t\t\t\t\t\t\t\t\t//\t\$('#templateCon [field=\"void_time\"]').attr('disabled',true);
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\$('#templateCon .other').show();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})

\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t\teditSave(id, data['htm_contract_book.status']);
\t\t\t\t})
\t\t\t}

\t\t\tfunction editSave(id, status) {
\t\t\t\t\$('#templateCon .editSave').click(function() {
\t\t\t\t\tvar data = {};
\t\t\t\t\tvar nDate= Date.now() / 1000;
\t\t\t\t\tdata['id'] = id;
\t\t\t\t\tdata['user'] = \$('#templateCon [field=\"user\"]').val();
\t\t\t\t\tdata['end_time'] = Date.parse(new Date(\$('#templateCon [field=\"end_time\"]').val().split(' ')[0])) / 1000
\t\t\t\t\tdata['status'] = \$('#templateCon [field=\"void_status\"]').val();

\t\t\t\t\t/*if (data['void_status']!=2&&data['void_status']!=status) {
\t\t\t\t\t\t\$('templateCon [field=\"void_status\"]').find('[value=\"'+status+'\"]').attr('selected',true);
\t\t\t\t\t\tykp.prompt('作废状态只能改为已作废或不修改！')
\t\t\t\t\t\treturn;
\t\t\t\t\t}*/

\t\t\t\t\tif(\$(\"#templateBox #state\").val() == 2) {
                        data['void_time'] = Date.now() / 1000;
                        //data['void_time'] = Date.parse(new Date(\$('#templateCon [field=\"void_time\"]').val().split(' ')[0])) / 1000;
\t\t\t\t\t\tdata['void_remark'] = \$('#templateCon [field=\"void_remark\"]').val();
\t\t\t\t\t}
\t\t\t\t   if(nDate  > data['end_time']){
\t\t\t\t\t   ykp.prompt('截止时间不能小于今天！');
\t\t\t\t\t   return false;
\t\t\t\t   }
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_contract_book/edit',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: data,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tykp.prompt('编辑成功！');
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\tgetContractBooks();
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t})
\t\t\t}

\t\t\tfunction showDetail() {
                \$('.contractDetail').click(function() {
                    var id = \$(this).parents('tr').attr('data-id');
                    showMark('#templateDtl');
                    cs.timeplug();
                    \$('#showBox .title').text('合同书详情');
                    \$('#templateCon .advandced-search2').select2({
                        allowClear: true
                    });
                    for(var i in emps) {
                        if(emps[i]['name']) {
                            \$('#templateCon .advandced-search2').append(new Option(emps[i]['name'], emps[i]['id']));
                        }
                    }
                    ykp.doAjax({
                        url: '/api/api_contract_book/get_info',
                        method: 'post',
                        data: {
                            id: id
                        },
                        success: function(res) {
                            var data = res.data;
                            var status = data['htm_contract_book.status'];
                            for(let v in data){
                                \$('#templateCon').find('input,select,textarea').each(function (i,e) {
\t\t\t\t\t\t\t\t\t\tif(\$(this).attr(\"title\") == \"void_time\" ){
\t\t\t\t\t\t\t\t\t\t\tif(v.replace(/htm_contract_book./g,'') == \$(this).attr(\"title\")){
                                                if(data[v] != 0){
                                                    \$(this).val(cs.getNowTime(data[v]))
\t\t\t\t\t\t\t\t\t\t\t\t}else{
                                                    \$(this).val(cs.getNowTime(data['htm_contract_book.use_time']))
                                                }
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}else if(\$(this).attr(\"title\") == \"create_at\" || \$(this).attr(\"title\") == \"end_time\"){
\t\t\t\t\t\t\t\t\t\t\tif(v.replace(/htm_contract_book./g,'') == \$(this).attr(\"title\") ){
\t\t\t\t\t\t\t\t\t\t\t\t\$(this).val(cs.getNowTime(data[v]))
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}else if (\$(this).attr(\"title\") == \"khm_customer.name\" && v==\"khm_customer.name\" ){
\t\t\t\t\t\t\t\t\t\t\t\$(this).val(data[v]);
\t\t\t\t\t\t\t\t\t\t}else if(\$(this).attr(\"title\") == v.replace(/htm_contract_book./g,'')){
\t\t\t\t\t\t\t\t\t\t\t\$(this).val(data[v]).change();
\t\t\t\t\t\t\t\t\t\t}else if(\$(this).attr(\"title\") == v.replace(/bmm_employees./g,'')){
\t\t\t\t\t\t\t\t\t\t\t\$(this).val(data[v]);
\t\t\t\t\t\t\t\t\t\t}
                                })
\t\t\t\t\t\t\t}
                        }
                    })
                });
            }

\t\t\tgetContractBooks();

\t\t\tfunction getContractBooks() {
\t\t\t\tvar content = '';
\t\t\t\tykp.list({
\t\t\t\t\turl: '/api/api_contract_book/index',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tlimit: page_size,
\t\t\t\t\t\tfilter: '',
\t\t\t\t\t\torder: order
\t\t\t\t\t},
\t\t\t\t\tpageBar: {
\t\t\t\t\t\tid: '#pageBar'
\t\t\t\t\t},
\t\t\t\t\tloadList: function(res) {
\t\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}

\t\t\tfunction addList(res) {
\t\t\t\tvar content = '';
\t\t\t\tvar status = ['未使用', '已使用', '已作废'];
\t\t\t\tvar data = res.data.items;
\t\t\t\tvar edit_statu = cs.getNodes([146,289], true);
\t\t\t\tfor(var i in data) {
\t\t\t\t\tcontent += `<tr data-id=\"\${data[i]['htm_contract_book.id']}\" cid=\"\${data[i]['htm_contract_book.id']}\\n\">
\t\t\t\t\t\t\t  <td class=\"center\">
\t\t                        <label class=\"pos-rel\">
\t\t                        <input type=\"checkbox\" name=\"check\" class=\"ace\"/>
\t\t                        <span class=\"lbl\"></span>
\t\t                        </label>
\t\t                    </td>
\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t\t\t<a> <span style=\"cursor: pointer\" title=\"详情\" class=\"lbl contractDetail btOrange\"><i class=\"fa fa-info\"></i></span></a>
                                    <a href=\"#\" contentAuthority=\"146\" style=\"display:\${edit_statu ? 'inline-block' : 'none'}\" title=\"编辑\" class=\"edit\"> <span class=\"lbl btBlue\"><i class=\"fa fa-pencil-square-o\"></i></span></a>
                                    <a href=\"#\" contentAuthority=\"146\" style=\"display:\${edit_statu ? 'inline-block' : 'none'}\" title=\"删除\" class=\"del\"> <span class=\"lbl btRed\"><i class=\"fa fa-trash-o\"></i></span></a>
                                </label>
                            </td>
\t\t\t\t\t\t\t<td class=\"center\" data-num=\"1\">
\t\t\t\t\t\t\t\t\${data[i]['htm_contract_book.type']==1?'长期合同':'一次性合同'}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" data-num=\"2\">
\t\t\t\t\t\t\t\t\${data[i]['htm_contract_book.code']}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" data-num=\"3\">
\t\t\t\t\t\t\t\t\${cs.getNowTime(data[i]['htm_contract_book.create_at'],true)}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" data-num=\"4\">
\t\t\t\t\t\t\t\t\${data[i]['bmm_employees.name']}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" data-num=\"5\">
\t\t\t\t\t\t\t\${cs.getNowTime(data[i]['htm_contract_book.end_time'])}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" data-num=\"6\">
\t\t\t\t\t\t\t\t\${status[data[i]['htm_contract_book.status']]}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" data-num=\"7\">
\t\t\t\t\t\t\t\t\${ data[i]['htm_contract_book.void_remark']}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" data-num=\"8\">
                                 \${cs.getNowTime(data[i]['htm_contract_book.void_time'],true)||cs.getNowTime(data[i]['htm_contract_book.use_time'],true)}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" data-num=\"9\">
\t\t\t\t\t\t\t\${ data[i]['htm_contract_book.contract_code']}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" data-num=\"10\">
\t\t\t\t\t\t\t\t\${data[i]['khm_customer.name']}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>`
\t\t\t\t}

\t\t\t\t\$('#dataList').html(content);
\t\t\t\tedit();
\t\t\t\tshowDetail();
\t\t\t\t\$('.del').click(function() {
\t\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\tlayer.confirm('确认删除吗？', function(index) {
\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\turl: '/api/api_contract_book/del',
\t\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\tid: id,
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\tykp.prompt(\"删除成功！\");
\t\t\t\t\t\t\t\t\tgetContractBooks();
\t\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t})
\t\t\t\t\t\t});
\t\t\t\t\t})

\t\t\t\t})

\t\t\t\tplDel();
\t\t\t}

\t\t\tfunction plDel() {
\t\t\t\t\$('#batchDel').unbind('click').click(function() {
\t\t\t\t\tvar num = 0;
\t\t\t\t\tvar status = '';
\t\t\t\t\tvar coldata = [];
\t\t\t\t\t\$('#dataList').find('input[type=checkbox]').each(function(i) {
\t\t\t\t\t\tif(\$(this).is(':checked')) {
\t\t\t\t\t\t\tnum++;
\t\t\t\t\t\t\tcoldata.push(\$(this).parents('tr').attr('data-id'));
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t\tif(num == 0) {
\t\t\t\t\t\tykp.prompt('请选择再删除');
\t\t\t\t\t} else {
\t\t\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\t\tlayer.confirm('确认删除么？', function(index) {
\t\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\t\turl: '/api/api_contract_book/del',
\t\t\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\t\tid: coldata.join(','),
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\t\tykp.prompt(\"删除成功！\");
\t\t\t\t\t\t\t\t\t\tgetContractBooks();
\t\t\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t});
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}

\t\t\t/*\$('#heightsearch').click(function() {
\t\t\t\tykp.doAjax({
\t\t\t\t\turl:\"/api/api_system/backup_db\",
\t\t\t\t\tmethod:'post',
\t\t\t\t\tmsg:'备份需要一定的时间，请等候！',
\t\t\t\t\tshowBlock:true,
\t\t\t\t\tsuccess:function(res) {
\t\t\t\t\t\tykp.prompt('备份成功！',{startTime:1200,endTime:100});
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tgetbackup();
\t\t\t\t\t\t},2000)
\t\t\t\t\t}
\t\t\t\t})
\t\t\t});
*/
\t\t\t//cs.custorm_check('#dynamic-table', '#dataList', true);

\t\t\tpageinfo();
\t\t\t\$('#changePageNum').change(function() {
\t\t\t\tpage_size = \$(this).val();
\t\t\t\tykp.setCookie('page_size', page_size);
\t\t\t\tgetContractBooks();
\t\t\t})

\t\t\tfunction pageinfo() {
\t\t\t\t\$('#add').click(function() {
\t\t\t\t\tshowMark('#template1');
\t\t\t\t\t\$('#templateCon #cnumber').val('12313133');
\t\t\t\t})
\t\t\t}

\t\t});
\t</script>";
    }

    public function getTemplateName()
    {
        return "admin/contractManagement/contractBook.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 305,  324 => 304,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	#templateCon label {*/
/* 		width: 80px;*/
/* 	}*/
/* </style>*/
/* <div class=" widget-main">*/
/* 	<div class="row">*/
/* 		<div class="col-lg-12">*/
/* 			<!-- <h3 class="header smaller lighter blue">备份管理</h3> -->*/
/* 			<div class="row" style="margin-top: 20px;" id="topTool">*/
/* 			<div class="col-sx-4" style=" float: left;">*/
/* 				<select style="width: 180px" pts=3  sear="htm_contract_book.user" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 				<option value="">负责人  </option>*/
/* 				</select>*/
/* 			<!-- <input type="text" pts=0 sear="cwm_visit.customer_name" placeholder="企业名称" class="col-xs-10 col-sm-10" /> -->*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<input type="text" pts=0 sear="htm_contract_book.code" style="margin-left: 5px" placeholder="合同号" style="width:180px;" />*/
/* 			</div>*/
/* 				*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<button type="button" id="search" title="搜索" class="btn btn-info btn-sm">*/
/*                     <i class="fa fa-search"></i>*/
/*                 </button>*/
/* 				</div>*/
/* */
/* 				<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<button id="heightsearch" title="高级搜索" type="button" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/*                     <i class="fa fa-filter"></i>*/
/*                 </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" contentAuthority="145" style=" float: left;  margin-right: 5px; ">*/
/* 				<button id="addCon" type="button" title="添加" style="background: #32CD32 !important;border-color: #32CD32 !important; ;" class="btn btn-info btn-sm">*/
/* 					<i class="fa fa-plus"></i>*/
/*                 </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<button type="button" title="刷新" class="btn btn-info btn-sm flush" style="background-color: #32CD32 !important;">*/
/*                     <i class="fa fa-refresh"></i>*/
/*                 </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="145" style=" float: left; margin-right: 5px;">*/
/* 					<button type="button" id="batchDel" style="outline: none; background-color: #FF5722 !important; border-color:#FF5722 ;" title="批量删除" class="btn del btn-info btn-sm position-relative;">*/
/* 						<i class="fa fa-trash-o"></i>*/
/*                         </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="289" style=" float: left; margin-right: 5px;">*/
/* 					<button title="移交负责人" type="button" id="moveToClue" style="outline: none;background-color: #1E9FFF !important; border-color:#1E9FFF ;" class="moveToClue btn addBtn btn-info btn-sm position-relative">*/
/* 						<i class="fa fa-hand-o-right"></i>*/
/* 					</button>*/
/* 				</div>*/
/* 				<div id="heightsearch1" class="col-sx-12" style="position: absolute; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;">*/
/* 					<div class="row" id="SearchCon">*/
/* */
/* 					</div>*/
/* */
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<!--<div style="font-size:14px;margin-top: 20px">自动备份(每七天自动进行备份)</div>-->*/
/* 				<div class="custom_table">*/
/* 					<table id="dynamic-table" style="margin-bottom:0px;">*/
/* 						<thead>*/
/* 							<tr class="thColor">*/
/* 								<th>*/
/* 									<label class="pos-rel">*/
/* 		                                    <input type="checkbox" class="ace" onclick="checkAll(this.checked)"/>*/
/* 		                                    <span class="lbl"></span>*/
/* 		                                    </label>*/
/* 								</th>*/
/* 								<th class="hidden-480 center">操作</th>*/
/* 								<th class="hidden-480 center" data-num="1">合同类型</th>*/
/* 								<th class="hidden-480 center" data-num="2">合同号</th>*/
/* 								<th class="hidden-480 center" data-num="3">创建时间</th>*/
/* 								<th class="hidden-480 center" data-num="4">负责人</th>*/
/* 								<th class="center thColor" data-num="5">截止日期</th>*/
/* 								<th class="center thColor" data-num="6">合同号状态</th>*/
/* 								<th class="center thColor" data-num="7">状态备注</th>*/
/* 								<th class="center thColor" data-num="8">操作时间</th>*/
/* 								<th class="center thColor" data-num="9">订单编码</th>*/
/* 								<th class="hidden-480 center" data-num="10">关联客户</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody id="dataList">*/
/* */
/* 						</tbody>*/
/* */
/* 					</table>*/
/* */
/* 				</div>*/
/* 				<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 					<div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
/* 					<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
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
/* */
/* 				<!-- <div class="label_popup" id="feedBack" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 					<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 		            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 						<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 							<span style="display: inline-block;">编辑备注</span>*/
/* 							<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 						</div>*/
/* 						<div style="padding: 10px 50px;">*/
/* 							<input type="text" width="200px" style="margin: auto;" id="labelName" />*/
/* 						</div>*/
/* 						<div style="padding:15px;text-align:right;">*/
/* 							<button class="close_label">关闭</button>*/
/* 							<button class="hold">保存</button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div> -->*/
/* */
/* 				<div id="template" style="display:none;">*/
/* 					<div class="row">*/
/* 						<form class="item_form" role="form">*/
/* 							<div class="form_data">*/
/* 								<label> <i class='reqired_label'>*</i>合同类型:</label>*/
/* 								<!--<input search data-id="name" class="required" msg="公司名称不能为空"/>-->*/
/* 								<select class="required" msg="合同类型不能为空" style="width:180px;" search type="text" field="type">*/
/* 									<option value="">请选择</option>*/
/* 									<option value="1">长期合同</option>*/
/* 									<option value="2">一次性合同</option>*/
/* 								</select>*/
/* 								<label> 合同前缀： </label>*/
/* 								<input type="text" search field="prefix" style="width:180px;" class="required" msg="起始编码不能为空" />*/
/* 							</div>*/
/* */
/* 							<div class="form_data">*/
/* 								<label> 起始编码： </label>*/
/* 								<input type="text" search field="start" style="width:180px;" class="required" msg="起始编码不能为空" />*/
/* 								<label> 截止编码： </label>*/
/* 								<input type="text" search field="end" style="width:180px;" class="required" msg="截止编码不能为空" />*/
/* 							</div>*/
/* */
/* 							<div class="form_data">*/
/* */
/* 								<label> 负责人： </label>*/
/* 								<select style="width: 180px" field="user" data-placeholder="请选择" class="advandced-search2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 									<option value=""> 请选择 </option>*/
/* 								</select>*/
/* */
/* 								<label> 截止日期： </label>*/
/* 								<div class="input-group" style="width:180px;display:inline-flex">*/
/* 									<input class="date-timepicker1 required" style="width:150px;height:30px;" search field="end_time" type="text" class="form-control" />*/
/* 									<span class="input-group-addon" style="height:30px;width:30px;">*/
/*                             <i class="fa fa-clock-o bigger-110" style="position:relative;right:4px;"></i>*/
/*                         </span>*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 						</form>*/
/* 						<div style="text-align:center;margin-top:15px;">*/
/* 							<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* 							<button class="sure_button addSave">*/
/*                     <i class="fa fa-check" aria-hidden="true"></i>*/
/*                     保存*/
/*                 </button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div id="template1" style="display:none;">*/
/* 					<div class="row">*/
/* 						<form class="item_form" role="form">*/
/* 							<div class="form_data">*/
/* 								<label> <i class='reqired_label'>*</i>合同类型:</label>*/
/* 								<!--<input search data-id="name" class="required" msg="公司名称不能为空"/>-->*/
/* 								<select class="required" disabled msg="合同类型不能为空" search type="text" title="type">*/
/* 									<option value="">请选择</option>*/
/* 									<option value="1">长期合同</option>*/
/* 									<option value="2">一次性合同</option>*/
/* 								</select>*/
/* 								<label> 合同号： </label>*/
/* 								<input type="text" search disabled title="code" class="required" msg="起始编码不能为空" />*/
/* 							</div>*/
/* */
/* 							<div class="form_data">*/
/* 								<label> 负责人： </label>*/
/* 								<select style="margin-right: 12px !important;width: 180px" field="user" data-placeholder="负责人" class="advandced-search2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 									<option value=""> 请选择 </option>*/
/* 								</select>*/
/* */
/* 								<label> 截止日期： </label>*/
/* 								<div class="input-group" style="width:180px;display:inline-flex">*/
/* 									<input class="date-timepicker1 required" style="width:150px;height:30px;" search field="end_time" type="text" class="posttime form-control typeahead scrollable" />*/
/* 									<span class="input-group-addon" style="height:30px;width:30px;">*/
/*                             <i class="fa fa-clock-o bigger-110" style="position:relative;right:4px;"></i>*/
/*                         </span>*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 							<div class="form_data">*/
/* 								<label> 合同号状态 ： </label>*/
/* 								<select id="state" field="void_status">*/
/* 									<option value="0"> 未使用 </option>*/
/* 									<option value="1"> 已使用 </option>*/
/* 									<option value="2"> 已作废 </option>*/
/* 								</select>*/
/* 								<label class="other"><i class='reqired_label '>*</i> 状态备注： </label>*/
/* 								<input type="text" search field="void_remark" class="required other" msg="" />*/
/* 							</div>*/
/* */
/* 							<!--<div class="form_data other" class="z">*/
/* 					<label> 操作时间： </label>*/
/* */
/* 					<div class="input-group" style="width:180px;display:inline-flex">*/
/* 						<input  class="date-timepicker1 required" style="width:150px;height:30px;" search field="void_time" type="text" class="posttime form-control typeahead scrollable" />*/
/* 						<span class="input-group-addon" style="height:30px;width:30px;">*/
/*                             <i class="fa fa-clock-o bigger-110" style="position:relative;right:4px;"></i>*/
/*                         </span>*/
/* 					</div>*/
/* 				</div>-->*/
/* 						</form>*/
/* 						<div style="text-align:center;margin-top:15px;">*/
/* 							<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* 							<button class="sure_button editSave">*/
/*                     <i class="fa fa-check" aria-hidden="true"></i>*/
/*                     保存*/
/*                 </button>*/
/* */
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div id="templateDtl" style="display:none;">*/
/* 					<div class="row">*/
/* 						<form class="item_form" role="form">*/
/* 							<div class="form_data">*/
/* 								<label> <i class='reqired_label'></i>合同类型:</label>*/
/* 								<!--<input disadz'z title="code" data-id="name" />-->*/
/* 								<select class="required" disabled  type="text" title="type">*/
/* 									<option value="">请选择</option>*/
/* 									<option value="1">长期合同</option>*/
/* 									<option value="2">一次性合同</option>*/
/* 								</select>*/
/* 								<label> 合同号： </label>*/
/* 								<input type="text" search disabled title="code" />*/
/* 							</div>*/
/* 							<div class="form_data">*/
/* 								<label> 负责人： </label>*/
/* 								<input disabled type="text" search title="name" class="required other" msg="" />*/
/* 								<!--<select disabled style="margin-right: 12px !important;width: 180px" title="name"  class="advandced-search2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 									<option value=""></option>*/
/* 								</select>-->*/
/* 								<label> 合同号状态 ： </label>*/
/* 								<select disabled title="status">*/
/* 									<option value="0"> 未使用 </option>*/
/* 									<option value="1"> 已使用 </option>*/
/* 									<option value="2"> 已作废 </option>*/
/* 								</select>*/
/* 							</div>*/
/* 							<div class="form_data">*/
/* 								<label> 创建时间： </label>*/
/* 								<div class="input-group" style="width:180px;display:inline-flex">*/
/* 									<input disabled class=" required" style="width:150px;height:30px;" search title="create_at" type="text" class="posttime form-control typeahead scrollable" />*/
/* 									<span class="input-group-addon" style="height:30px;width:30px;">*/
/*                             			<i class="fa fa-clock-o bigger-110" style="position:relative;right:4px;"></i>*/
/*                         			</span>*/
/* 								</div>*/
/* 								<label> 截止日期： </label>*/
/* 								<div class="input-group" style="width:180px;display:inline-flex">*/
/* 									<input disabled class=" required" style="width:150px;height:30px;" search title="end_time" type="text" class="posttime form-control typeahead scrollable" />*/
/* 									<span class="input-group-addon" style="height:30px;width:30px;">*/
/*                             			<i class="fa fa-clock-o bigger-110" style="position:relative;right:4px;"></i>*/
/*                         			</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form_data">*/
/* 								<label> 操作时间： </label>*/
/* 								<div class="input-group" style="width:180px;display:inline-flex">*/
/* 									<input disabled class=" required" style="width:150px;height:30px;" search title="void_time" type="text" class="posttime form-control typeahead scrollable" />*/
/* 									<span class="input-group-addon" style="height:30px;width:30px;">*/
/*                             			<i class="fa fa-clock-o bigger-110" style="position:relative;right:4px;"></i>*/
/*                         			</span>*/
/* 								</div>*/
/* 								<label class="other"> 状态备注： </label>*/
/* 								<input disabled type="text" search title="void_remark" class="required other" msg="" />*/
/* 							</div>*/
/* 							<div class="form_data">*/
/* 								<label  class="other"> 订单编码： </label>*/
/* 								<input disabled type="text" search title="contract_code" class="required other" msg="" />*/
/* 								<label class="other"> 关联客户： </label>*/
/* 								<input disabled type="text" search title="khm_customer.name" class="required other" msg="" />*/
/* 							</div>*/
/* 						</form>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	{% include 'admin/mark.html' %}*/
/* </div>*/
/* <div class=" widget-main">*/
/* 	<script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* 	<script>*/
/* 		jQuery(function($) {*/
/* 			cs.getNodes([145,289]);*/
/* 			var page_size = 10; //每页显示的条目数	*/
/* 			var employees = {};*/
/* 			var order = 'htm_contract_book.create_at desc';*/
/* 			var filter = 'htm_contract_book.is_del = 0';*/
/* 			var emps = [];*/
/* */
/* 			$('.flush').click(function() {*/
/* 				filter = '';*/
/* 				$('[sear="htm_contract_book.code"]').val('');*/
/* 				$('[sear="htm_contract_book.user"]').val('').trigger('change');*/
/* 				ykp.setCookie("filter", "");*/
/* 				ykp.setCookie("where", "");*/
/* 				getContractBooks();*/
/* 			});*/
/* 			*/
/* 			cs.setFuze({*/
/* 				conId: "#dataList",*/
/* 				url: "/api/api_contract_book/transfer_user",*/
/* 				books: true,*/
/* 				fun: function() {*/
/* 					getContractBooks();*/
/* 				}*/
/* 			});*/
/* 			*/
/* 			//获取所有员工						*/
/* 			ykp.doAjax({*/
/* 				async: false,*/
/* 				url: '/api/api_employees/f7',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					select: 'bmm_employees.id,bmm_employees.name'*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					var option = '';*/
/* 					$('.advandced-search').select2({*/
/* 						allowClear: true*/
/* 					});*/
/* 					emps = data;*/
/* 					$('.advandced-search').html('<option value="">请选择  </option>');*/
/* 					for(var i in data) {*/
/* 						if(data[i]['name']) {*/
/* 							employees[data[i]['id']] = data[i]['name'];*/
/* 							option += `<option value="${data[i]['id']}">${data[i]['name']}</option>`;*/
/* 						}*/
/* 					}*/
/* 					$('.advandced-search').append(option);*/
/* 				}*/
/* 			});*/
/* */
/* 			//通用排序*/
/* 			cs.general_sort({*/
/* 				url: '/api/api_contract_book/index',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					filter: filter,*/
/* 					limit: page_size,*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '.pageBar'*/
/* 				},*/
/* 				contentId: "#dataList", //默认排序*/
/* 				initOrder: "", //初始化sort*/
/* 				defaultOrder: order,*/
/* 				params: [{*/
/* 					id: "#dynamic-table",*/
/* 					field: ["","", "htm_contract_book.type", "htm_contract_book.code", "htm_contract_book.create_at", "bmm_employees.name", "htm_contract_book.end_time", "htm_contract_book.status",*/
/* 						"htm_contract_book.void_remark", "htm_contract_book.void_time", "htm_contract_book.contract_code", "khm_customer.name"*/
/* 					]*/
/* 				}]*/
/* 			}, function(res, _sort_role) {*/
/* 				sort_role = _sort_role;*/
/* 				addList(res);*/
/* 			});*/
/* */
/* 			addContractsNum();*/
/* */
/* 			function addContractsNum() {*/
/* 				$('#addCon').click(function() {*/
/* 					showMark('#template');*/
/* 					cs.timeplug();*/
/* 					addSave();*/
/* 					$('#showBox .title').text('添加合同书');*/
/* 					$('#templateCon .advandced-search2').select2({*/
/* 						allowClear: true*/
/* 					});*/
/* 					for(var i in emps) {*/
/* 						if(emps[i]['name']) {*/
/* 							$('#templateCon .advandced-search2').append(new Option(emps[i]['name'], emps[i]['id']));*/
/* 						}*/
/* 					}*/
/* 				})*/
/* 			}*/
/* */
/* 			function addSave() {*/
/* 				/*var start = '',end = '';*/
/* 				var reg = /^[\s\S]*[0-9]{3}$/;*/
/* 				$('#templateCon [field="start"]').blur(function() {*/
/* 					start = $(this).val();*/
/* 					if(!reg.test(start)){*/
/* 						ykp.prompt('合同编码必须以两位数字结尾！');*/
/* 						return;*/
/* 					}*/
/* 				})*/
/* */
/* 				$('#templateCon [field="end"]').blur(function() {*/
/* 					end = $(this).val();//截止编码*/
/* 					if (!reg.test($(this).val())) {*/
/* 						ykp.prompt('合同编码必须是以英文开头数字结尾,长度为2-10！');*/
/* 						return;*/
/* 					}*/
/* 					var start_number = start.match(/[0-9]+/g)[start.match(/[0-9+]/g).length-1];//开始编码数字*/
/* 					var start_prefix = start.substring(0,start.lastIndexOf(start_number));//开始编码前缀*/
/* 					var end_number = end.match(/[0-9]+/g)[end.match(/[0-9+]/g).length-1];//截止编码数字*/
/* 					var end_prefix = end.substring(0,end.lastIndexOf(end_number));//截止编码前缀*/
/* 					if (start_prefix != end_prefix) {*/
/* 						ykp.prompt('合同编码前缀必须相同!');*/
/* 						return;*/
/* 					}*/
/* 						*/
/* 					if (parseInt(start_number)>parseInt(end_prefix)) {*/
/* 						ykp.prompt('截止编码数不能小于起始编码数！');*/
/* 						return;*/
/* 					}*/
/* 				})*//* */
/* */
/* 				$('#templateCon .addSave').click(function() {*/
/* 					var reg = /^[0-9]{1,3}$/;*/
/* 					var prefix = $('#templateCon [field="prefix"]').val();*/
/* 					var start = $('#templateCon [field="start"]').val();*/
/* 					var end = $('#templateCon [field="end"]').val();*/
/* 					var state = false;*/
/* 					if(!reg.test(start) || !reg.test(end)) {*/
/* 						ykp.prompt('编码必须为1-3位数字!');*/
/* 						return;*/
/* 					}*/
/* 					if(parseInt(start) > parseInt(end)) {*/
/* 						ykp.prompt('起始编码不能大于截止编码!');*/
/* 						return;*/
/* 					}*/
/* 					//拿到数据库中相同前缀对应大小值*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_contract_book/get_max',*/
/* 						method: 'post',*/
/* 						data: {*/
/* 							prefix: prefix*/
/* 						},*/
/* 						success: function(res) {*/
/* 							var data = res.data;*/
/* 							if(data['max'] != '') {*/
/* 								if((parseInt(start) >= parseInt(data['min']) && parseInt(start) <= parseInt(data['max'])) || (parseInt(end) >= parseInt(data['min']) && parseInt(end) <= parseInt(data['max']))) {*/
/* 									ykp.prompt(data['min'] + '至' + data['max'] + '之间的编码已被占用！');*/
/* 									return;*/
/* 								}*/
/* 								if(parseInt(start) < parseInt(data['min']) && parseInt(end) > parseInt(data['max'])) {*/
/* 									ykp.prompt(data['min'] + '至' + data['max'] + '之间的编码已被占用！');*/
/* 									return;*/
/* 								}*/
/* 							}*/
/* 						}*/
/* 					})*/
/* */
/* 					$('#templateCon [field="nums"]').val(end - start + 1);*/
/* */
/* 					var data = {*/
/* 						prefix: prefix,*/
/* 						type: $('#templateCon [field="type"]').val(),*/
/* 						user: $('#templateCon [field="user"]').val(),*/
/* 						end_time: Date.parse(new Date($('#templateCon [field="end_time"]').val().split(' ')[0])) / 1000,*/
/* 						start: start,*/
/* 						end: end*/
/* 					}*/
/* 					var nowTime = Date.now() / 1000;*/
/*                     if(nowTime  > data['end_time']){*/
/*                         ykp.prompt('截止时间不能小于今天！');*/
/*                         return false;*/
/*                     }*/
/* */
/* 					//保存数据*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_contract_book/add',*/
/* 						method: 'post',*/
/* 						data: data,*/
/* 						success: function(res) {*/
/* 							ykp.prompt('成功添加' + (end - start + 1) + '条合同！');*/
/* 							cs.close();*/
/* 							getContractBooks();*/
/* 						}*/
/* 					})*/
/* 				})*/
/* 			}*/
/* */
/* 			getSearch();*/
/* */
/* 			function getSearch() {*/
/* 				ykp.setCookie("filter", "");*/
/* 				ykp.setCookie("where", "");*/
/* 				var list = [{*/
/* 						name: "合同类型",*/
/* 						search: "htm_contract_book.type",*/
/* 						type: "select",*/
/* 						option: [{*/
/* 							val: "1",*/
/* 							text: "长期合同"*/
/* 						}, {*/
/* 							val: "2",*/
/* 							text: "一次性合同"*/
/* 						}]*/
/* 					},*/
/* 					{*/
/* 						name: "合同号",*/
/* 						search: "htm_contract_book.code",*/
/* 						type: "text"*/
/* 					},*/
/* 					{*/
/* 						name: "创建时间",*/
/* 						search: "htm_contract_book.create_at",*/
/* 						type: "time"*/
/* 					},*/
/* 					{*/
/* 						name: "负责人",*/
/* 						search: "bmm_employees.id",*/
/* 						type: "select",*/
/* 						url: "/api/api_employees/f7",*/
/* 						key: "people"*/
/* 					},*/
/* 					{*/
/* 						name: "截止日期",*/
/* 						search: "htm_contract_book.end_time",*/
/* 						type: "time"*/
/* 					},*/
/* 					{*/
/* 						name: "合同号状态",*/
/* 						search: "htm_contract_book.status",*/
/* 						type: "select",*/
/* 						option: [{*/
/* 							val: "0",*/
/* 							text: "未使用"*/
/* 						}, {*/
/* 							val: "1",*/
/* 							text: "已使用"*/
/* 						}, {*/
/* 							val: "2",*/
/* 							text: "已作废"*/
/* 						}]*/
/* 					},*/
/* 					{*/
/* 						name: "状态备注",*/
/* 						search: "htm_contract_book.void_remark",*/
/* 						type: "text",*/
/* 						url: "/api/api_employees/f7",*/
/* 						key: "people"*/
/* 					},*/
/* 					{*/
/* 						name: "操作时间",*/
/* 						search: "htm_contract_book.void_time",*/
/* 						type: "time"*/
/* 					},*/
/* 					{*/
/* 						name: "订单编码",*/
/* 						search: "htm_contract_book.contract_code",*/
/* 						type: "text"*/
/* 					},*/
/* 					{*/
/* 						name: "关联客户",*/
/* 						search: "khm_customer.name",*/
/* 						type: "text"*/
/* 					},*/
/* 					//				{name:"使用时间",search:"htm_contract_book.use_time",type:"time"}*/
/* 				];*/
/* */
/* 				cs.getSearch({*/
/* 					list: list,*/
/* 					el: "#heightsearch",*/
/* 					el1: "#heightsearch1"*/
/* 				}, dohSearch);*/
/* */
/* 				function dohSearch() {*/
/* 					var data = {*/
/* 						url: '/api/api_contract_book/index',*/
/* 						method: 'post',*/
/* 						data: {*/
/* 							limit: page_size,*/
/* 							order: 'htm_contract_book.create_at desc'*/
/* 						}*/
/* 					}*/
/* 					cs.hSearch('.search1', data, 'filter', false, function(res, _filter) {*/
/* 						filter = _filter;*/
/* 						$('.in').removeClass('modal-backdrop');*/
/* 						$("#heightsearch1").slideUp();*/
/* 						$("#heightsearch").removeClass('active').css('z-index', '');*/
/* 						if(res.data.items == "") {*/
/* 							setTimeout(function() {*/
/* 								ykp.prompt('暂无数据！');*/
/* 							}, 1000);*/
/* 							$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 							return false;*/
/* 						}*/
/* 						addList(res);*/
/* 					})*/
/* 				}*/
/* 			}*/
/* */
/* 			doSearch();*/
/* 			//普通搜索*/
/* */
/* 			function doSearch() {*/
/* 				var data = {*/
/* 					url: '/api/api_contract_book/index',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						page: 1,*/
/* 						order: order,*/
/* 						limit: page_size*/
/* 					}*/
/* 				}*/
/* 				cs.doSearch('#search', data, 'filter', false, function(res, filter) {*/
/* 					filter = filter;*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt('暂无数据！');*/
/* 						}, 1000);*/
/* 						$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					} else {*/
/* 						addList(res);*/
/* 					}*/
/* 				})*/
/* 			}*/
/* 			function edit() {*/
/* 				$('.edit').click(function() {*/
/* 					var id = $(this).parents('tr').attr('data-id');*/
/* 					showMark('#template1');*/
/* 					cs.timeplug();*/
/* 					$('#showBox .title').text('编辑合同书');*/
/* 					$('#templateCon .advandced-search2').select2({*/
/* 						allowClear: true*/
/* 					});*/
/* 					var data = {};*/
/* 					for(var i in emps) {*/
/* 						if(emps[i]['name']) {*/
/* 							$('#templateCon .advandced-search2').append(new Option(emps[i]['name'], emps[i]['id']));*/
/* 						}*/
/* 					}*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_contract_book/get_info',*/
/* 						method: 'post',*/
/* 						data: {*/
/* 							id: id*/
/* 						},*/
/* 						success: function(res) {*/
/* 							var data = res.data;*/
/* 							var status = data['htm_contract_book.status'];*/
/* 							$('#templateCon [title="type"]').find('option[value="' + data['htm_contract_book.type'] + '"]').attr('selected', true);*/
/* 							$('#templateCon [title="code"]').val(data['htm_contract_book.code']);*/
/* 							$('#templateCon [field="user"]').find('option[value="' + data['htm_contract_book.user'] + '"]').attr('selected', true);*/
/* 							$('#templateCon [field="user"]').trigger('change');*/
/* 							$('#templateCon [field="void_status"]').find('option[value="' + status + '"]').attr('selected', true);*/
/* */
/* 							if(status == 2) {*/
/* 								$('#templateCon [field="void_remark"]').val(data['htm_contract_book.void_remark']);*/
/* 								$('#templateCon [field="void_time"]').val(data['htm_contract_book.void_time']);*/
/* 							} else {*/
/* 								$('#templateCon .other').hide();*/
/* 							}*/
/* 							$('#templateCon [field="end_time"]').val(cs.getNowTime(data['htm_contract_book.end_time']))*/
/* 							//$('#templateCon [field="void_status"]').find('option[value="' + (status == '0' ? 1 : 0) + '"]').prop('disabled', 'disabled');*/
/* */
/* 							$('#templateCon [field="void_status"]').change(function() {*/
/* 								if($(this).val() != 2) {*/
/* 									$('#templateCon .other').hide();*/
/* 									//$('#templateCon .other').remove();*/
/* 									//	$('#templateCon [field="void_remark"]').attr('disabled',true);*/
/* 									//	$('#templateCon [field="void_time"]').attr('disabled',true);*/
/* 								} else {*/
/* 									$('#templateCon .other').show();*/
/* 								}*/
/* 							})*/
/* */
/* 						}*/
/* 					})*/
/* 					editSave(id, data['htm_contract_book.status']);*/
/* 				})*/
/* 			}*/
/* */
/* 			function editSave(id, status) {*/
/* 				$('#templateCon .editSave').click(function() {*/
/* 					var data = {};*/
/* 					var nDate= Date.now() / 1000;*/
/* 					data['id'] = id;*/
/* 					data['user'] = $('#templateCon [field="user"]').val();*/
/* 					data['end_time'] = Date.parse(new Date($('#templateCon [field="end_time"]').val().split(' ')[0])) / 1000*/
/* 					data['status'] = $('#templateCon [field="void_status"]').val();*/
/* */
/* 					/*if (data['void_status']!=2&&data['void_status']!=status) {*/
/* 						$('templateCon [field="void_status"]').find('[value="'+status+'"]').attr('selected',true);*/
/* 						ykp.prompt('作废状态只能改为已作废或不修改！')*/
/* 						return;*/
/* 					}*//* */
/* */
/* 					if($("#templateBox #state").val() == 2) {*/
/*                         data['void_time'] = Date.now() / 1000;*/
/*                         //data['void_time'] = Date.parse(new Date($('#templateCon [field="void_time"]').val().split(' ')[0])) / 1000;*/
/* 						data['void_remark'] = $('#templateCon [field="void_remark"]').val();*/
/* 					}*/
/* 				   if(nDate  > data['end_time']){*/
/* 					   ykp.prompt('截止时间不能小于今天！');*/
/* 					   return false;*/
/* 				   }*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_contract_book/edit',*/
/* 						method: 'post',*/
/* 						data: data,*/
/* 						success: function(res) {*/
/* 							ykp.prompt('编辑成功！');*/
/* 							cs.close();*/
/* 							getContractBooks();*/
/* 						}*/
/* 					})*/
/* 				})*/
/* 			}*/
/* */
/* 			function showDetail() {*/
/*                 $('.contractDetail').click(function() {*/
/*                     var id = $(this).parents('tr').attr('data-id');*/
/*                     showMark('#templateDtl');*/
/*                     cs.timeplug();*/
/*                     $('#showBox .title').text('合同书详情');*/
/*                     $('#templateCon .advandced-search2').select2({*/
/*                         allowClear: true*/
/*                     });*/
/*                     for(var i in emps) {*/
/*                         if(emps[i]['name']) {*/
/*                             $('#templateCon .advandced-search2').append(new Option(emps[i]['name'], emps[i]['id']));*/
/*                         }*/
/*                     }*/
/*                     ykp.doAjax({*/
/*                         url: '/api/api_contract_book/get_info',*/
/*                         method: 'post',*/
/*                         data: {*/
/*                             id: id*/
/*                         },*/
/*                         success: function(res) {*/
/*                             var data = res.data;*/
/*                             var status = data['htm_contract_book.status'];*/
/*                             for(let v in data){*/
/*                                 $('#templateCon').find('input,select,textarea').each(function (i,e) {*/
/* 										if($(this).attr("title") == "void_time" ){*/
/* 											if(v.replace(/htm_contract_book./g,'') == $(this).attr("title")){*/
/*                                                 if(data[v] != 0){*/
/*                                                     $(this).val(cs.getNowTime(data[v]))*/
/* 												}else{*/
/*                                                     $(this).val(cs.getNowTime(data['htm_contract_book.use_time']))*/
/*                                                 }*/
/* 											}*/
/* 										}else if($(this).attr("title") == "create_at" || $(this).attr("title") == "end_time"){*/
/* 											if(v.replace(/htm_contract_book./g,'') == $(this).attr("title") ){*/
/* 												$(this).val(cs.getNowTime(data[v]))*/
/* 											}*/
/* 										}else if ($(this).attr("title") == "khm_customer.name" && v=="khm_customer.name" ){*/
/* 											$(this).val(data[v]);*/
/* 										}else if($(this).attr("title") == v.replace(/htm_contract_book./g,'')){*/
/* 											$(this).val(data[v]).change();*/
/* 										}else if($(this).attr("title") == v.replace(/bmm_employees./g,'')){*/
/* 											$(this).val(data[v]);*/
/* 										}*/
/*                                 })*/
/* 							}*/
/*                         }*/
/*                     })*/
/*                 });*/
/*             }*/
/* */
/* 			getContractBooks();*/
/* */
/* 			function getContractBooks() {*/
/* 				var content = '';*/
/* 				ykp.list({*/
/* 					url: '/api/api_contract_book/index',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						limit: page_size,*/
/* 						filter: '',*/
/* 						order: order*/
/* 					},*/
/* 					pageBar: {*/
/* 						id: '#pageBar'*/
/* 					},*/
/* 					loadList: function(res) {*/
/* 						if(res.data.items == "") {*/
/* 							setTimeout(function() {*/
/* 								ykp.prompt('暂无数据！');*/
/* 							}, 1000);*/
/* 							$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 							return false;*/
/* 						}*/
/* 						addList(res);*/
/* 					}*/
/* 				})*/
/* 			}*/
/* */
/* 			function addList(res) {*/
/* 				var content = '';*/
/* 				var status = ['未使用', '已使用', '已作废'];*/
/* 				var data = res.data.items;*/
/* 				var edit_statu = cs.getNodes([146,289], true);*/
/* 				for(var i in data) {*/
/* 					content += `<tr data-id="${data[i]['htm_contract_book.id']}" cid="${data[i]['htm_contract_book.id']}\n">*/
/* 							  <td class="center">*/
/* 		                        <label class="pos-rel">*/
/* 		                        <input type="checkbox" name="check" class="ace"/>*/
/* 		                        <span class="lbl"></span>*/
/* 		                        </label>*/
/* 		                    </td>*/
/* 							<td class="center">*/
/* 								<label class="pos-rel">*/
/* 									<a> <span style="cursor: pointer" title="详情" class="lbl contractDetail btOrange"><i class="fa fa-info"></i></span></a>*/
/*                                     <a href="#" contentAuthority="146" style="display:${edit_statu ? 'inline-block' : 'none'}" title="编辑" class="edit"> <span class="lbl btBlue"><i class="fa fa-pencil-square-o"></i></span></a>*/
/*                                     <a href="#" contentAuthority="146" style="display:${edit_statu ? 'inline-block' : 'none'}" title="删除" class="del"> <span class="lbl btRed"><i class="fa fa-trash-o"></i></span></a>*/
/*                                 </label>*/
/*                             </td>*/
/* 							<td class="center" data-num="1">*/
/* 								${data[i]['htm_contract_book.type']==1?'长期合同':'一次性合同'}*/
/* 							</td>*/
/* 							<td class="center" data-num="2">*/
/* 								${data[i]['htm_contract_book.code']}*/
/* 							</td>*/
/* 							<td class="center" data-num="3">*/
/* 								${cs.getNowTime(data[i]['htm_contract_book.create_at'],true)}*/
/* 							</td>*/
/* 							<td class="center" data-num="4">*/
/* 								${data[i]['bmm_employees.name']}*/
/* 							</td>*/
/* 							<td class="center" data-num="5">*/
/* 							${cs.getNowTime(data[i]['htm_contract_book.end_time'])}*/
/* 							</td>*/
/* 							<td class="center" data-num="6">*/
/* 								${status[data[i]['htm_contract_book.status']]}*/
/* 							</td>*/
/* 							<td class="center" data-num="7">*/
/* 								${ data[i]['htm_contract_book.void_remark']}*/
/* 							</td>*/
/* 							<td class="center" data-num="8">*/
/*                                  ${cs.getNowTime(data[i]['htm_contract_book.void_time'],true)||cs.getNowTime(data[i]['htm_contract_book.use_time'],true)}*/
/* 							</td>*/
/* 							<td class="center" data-num="9">*/
/* 							${ data[i]['htm_contract_book.contract_code']}*/
/* 							</td>*/
/* 							<td class="center" data-num="10">*/
/* 								${data[i]['khm_customer.name']}*/
/* 							</td>*/
/* 							*/
/* 						</tr>`*/
/* 				}*/
/* */
/* 				$('#dataList').html(content);*/
/* 				edit();*/
/* 				showDetail();*/
/* 				$('.del').click(function() {*/
/* 					var id = $(this).parents('tr').attr('data-id');*/
/* 					layui.use('layer', function() {*/
/* 						var layer = layui.layer;*/
/* 						layer.confirm('确认删除吗？', function(index) {*/
/* 							ykp.doAjax({*/
/* 								url: '/api/api_contract_book/del',*/
/* 								method: 'post',*/
/* 								data: {*/
/* 									id: id,*/
/* 								},*/
/* 								success: function(res) {*/
/* 									ykp.prompt("删除成功！");*/
/* 									getContractBooks();*/
/* 									layer.closeAll();*/
/* 								}*/
/* */
/* 							})*/
/* 						});*/
/* 					})*/
/* */
/* 				})*/
/* */
/* 				plDel();*/
/* 			}*/
/* */
/* 			function plDel() {*/
/* 				$('#batchDel').unbind('click').click(function() {*/
/* 					var num = 0;*/
/* 					var status = '';*/
/* 					var coldata = [];*/
/* 					$('#dataList').find('input[type=checkbox]').each(function(i) {*/
/* 						if($(this).is(':checked')) {*/
/* 							num++;*/
/* 							coldata.push($(this).parents('tr').attr('data-id'));*/
/* 						}*/
/* 					})*/
/* 					if(num == 0) {*/
/* 						ykp.prompt('请选择再删除');*/
/* 					} else {*/
/* 						layui.use('layer', function() {*/
/* 							var layer = layui.layer;*/
/* 							layer.confirm('确认删除么？', function(index) {*/
/* 								ykp.doAjax({*/
/* 									url: '/api/api_contract_book/del',*/
/* 									method: 'post',*/
/* 									data: {*/
/* 										id: coldata.join(','),*/
/* 									},*/
/* 									success: function(res) {*/
/* 										ykp.prompt("删除成功！");*/
/* 										getContractBooks();*/
/* 										layer.closeAll();*/
/* 									}*/
/* 								})*/
/* 							});*/
/* 						})*/
/* 					}*/
/* 				})*/
/* 			}*/
/* */
/* 			/*$('#heightsearch').click(function() {*/
/* 				ykp.doAjax({*/
/* 					url:"/api/api_system/backup_db",*/
/* 					method:'post',*/
/* 					msg:'备份需要一定的时间，请等候！',*/
/* 					showBlock:true,*/
/* 					success:function(res) {*/
/* 						ykp.prompt('备份成功！',{startTime:1200,endTime:100});*/
/* 						setTimeout(function() {*/
/* 							getbackup();*/
/* 						},2000)*/
/* 					}*/
/* 				})*/
/* 			});*/
/* *//* */
/* 			//cs.custorm_check('#dynamic-table', '#dataList', true);*/
/* */
/* 			pageinfo();*/
/* 			$('#changePageNum').change(function() {*/
/* 				page_size = $(this).val();*/
/* 				ykp.setCookie('page_size', page_size);*/
/* 				getContractBooks();*/
/* 			})*/
/* */
/* 			function pageinfo() {*/
/* 				$('#add').click(function() {*/
/* 					showMark('#template1');*/
/* 					$('#templateCon #cnumber').val('12313133');*/
/* 				})*/
/* 			}*/
/* */
/* 		});*/
/* 	</script>*/
