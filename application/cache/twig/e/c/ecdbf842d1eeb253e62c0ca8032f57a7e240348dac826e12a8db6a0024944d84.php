<?php

/* admin/platform/visit.html */
class __TwigTemplate_8ae5550fca821b23b642a387e0977ca40121e8b4db64dc545a2df8507c71c523 extends Twig_Template
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
\t\twidth: 114px;
\t\ttext-align: right;
\t}
\t
\t#templateCon input,
\tinput {
\t\twidth: 180px;
\t}
\t
\t#templateBox {
\t\tmin-height: 700px;
\t}
\t
\t.input-group-addon {
\t\twidth: 30px;
\t\theight: 32px;
\t\tposition: relative;
\t\ttop: 0;
\t\tleft: -30px;
\t\tborder-left: 1px solid #ccc !important;
\t}
</style>
<div class=\"widget-main\">
\t<div class=\"row\" id=\"topTool\" style=\"position:relative;\">
\t\t<!-- <h3 class=\"header smaller lighter blue\">拜访</h3> -->
\t\t<!--普通搜索-->
\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right:5px;\">
\t\t\t<input type=\"text\" pts=0 sear=\"cwm_visit.id\" placeholder=\"拜访编号\" style=\"width:180px;\" />
\t\t</div>
\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right:5px;\">
\t\t\t<select style=\"margin-right: 12px !important;width: 180px\" pts=3 sear=\"cwm_visit.customer_id\" id=\"customers\" class=\"advandced-search2 select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t<option value=\"\">企业  </option>
\t\t\t</select>
\t\t\t<!-- <input type=\"text\" pts=0 sear=\"cwm_visit.customer_name\" placeholder=\"企业名称\" class=\"col-xs-10 col-sm-10\" /> -->
\t\t</div>

\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right:5px;\">
\t\t\t<select style=\"margin-right: 12px !important;width: 180px\" pts=3 sear=\"cwm_visit.visit_id\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t<option value=\"\">负责人  </option>
\t\t\t</select>
\t\t</div>

\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right:5px;\">
\t\t\t<select style=\"margin-right: 12px !important;width: 180px\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" pts=3 sear=\"cwm_visit.create_user\" aria-hidden=\"true\">
\t\t\t\t<option value=\"\">创建人  </option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right:5px;\">
\t\t\t<select style=\"margin-right: 12px !important;width: 180px\" sear=\"cwm_visit.update_user\" pts=3 class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t<option value=\"\">最后修改人  </option>
\t\t\t</select>
\t\t</div>

\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t<button type=\"button\" id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
                <i class=\"fa fa-search\"></i>
            </button>
\t\t</div>
\t\t<div class=\"col-sx-4\" style=\" float: left;  margin-right: 5px; \">
\t\t\t<button id=\"heightsearch\" type=\"button\" title=\"高级搜索\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
                <i class=\"fa fa-filter\"></i>
            </button>
\t\t</div>
\t\t<div class=\"col-sx-4\" style=\" float: left;  margin-right: 5px; \">
\t\t\t<button id=\"flush\" type=\"button\" title=\"刷新\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32!important;\">
\t            <i class=\"fa fa-refresh\"></i>
\t        </button>
\t\t</div>
\t\t<div class=\"col-sx-4\" style=\" float: left;  margin-right: 5px; \" contentAuthority=\"133\">
\t\t\t<button id=\"add\" type=\"button\" title=\"添加\" style=\"background-color: #32CD32\t !important;border-color: #32CD32 !important;\" class=\"btn addBtn btn-info btn-sm\">
\t\t\t\t<i class=\"fa fa-plus\"></i>
            </button>
\t\t</div>
\t\t<div class=\"col-sx-4\" contentAuthority=\"301\" style=\" float: left; margin-right: 5px;\">
             <button type=\"button\"  title=\"导出\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"exportfile moveToClue btn addBtn btn-info btn-sm position-relative\">
                 <i class=\"fa fa-sign-out\"></i>
             </button>
        </div>
\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"position: absolute; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px;margin-top:30px; display: none;\">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>拜访编号</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"cwm_visit.id\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\"float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>企业名称</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select style=\"margin-right: 12px !important;width: 180px\" gjs=0 data-type=\"gj\" sear=\"cwm_visit.customer_id\" id=\"customers\" class=\"advandced-search2 select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\">  请选择  </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>拜访主题</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"cwm_visit.theme\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>服务项目</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" class=\"advandced-search3 select2-hidden-accessible\" tabindex=\"-1\" gjs=0 sear=\"cwm_visit.product_id\" aria-hidden=\"true\" data-type=\"gj\" tabindex=\"-1\">
\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t</select>
\t\t\t\t\t<!-- <select style=\"margin-right: 12px!important;width:180px\" data-placeholder=\"创建人\" class=\"advandced-search3 select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\" sear=\"zhm_comprehensive_bill.create_id\" pts=3>
\t<option value=\"\"> </option>
\t</select> -->
\t\t\t\t\t<!-- <input type=\"text\" gjs=0 sear=\"cwm_visit.service_id\"> -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>拜访详情</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<input type=\"text\" gjs=0 id=\"\" sear=\"cwm_visit.desc\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>协访人员</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" gjs=4 data-type=\"gj\" sear=\"cwm_visit.id in (select visit_id from cwm_visit_helper where user_id\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\">  请选择 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>负责人</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" sear=\"cwm_visit.visit_id\" class=\"advandced-search select2-hidden-accessible\" gjs=0 data-type=\"gj\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\">  请选择 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>状态</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select gjs=0 data-type=\"gj\" style=\"width: 180px\" sear=\"cwm_visit.status\">
\t\t\t\t\t\t<option value=\"\">  请选择  </option>
\t\t\t\t\t\t<option value=\"0\">已成交</option>
\t\t\t\t\t\t<option value=\"1\">未成交</option>
\t\t\t\t\t\t<option value=\"2\">已放弃</option>
\t\t\t\t\t\t<option value=\"3\">挂起中</option>
\t\t\t\t\t</select>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>创建人</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\" gjs=0 data-type=\"gj\" sear=\"cwm_visit.create_user\">
\t\t\t\t\t\t<option value=\"\">  请选择 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>创建时间</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<span class=\"input-group-addon\"  style=\"position: absolute; left: 0;\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" style=\"padding-left: 40px !important;\" data-status=\"rangtime\" gjs=0 sear=\"cwm_visit.create_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t</div>
\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<input class=\"date-timepicker1\" data-type=\"gj\" data-status = \"time\"  gjs=0 sear=\"cwm_visit.create_time\" class=\"form-control\" style=\"height: 30px; width: 180px;\">
\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>-->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>最后修改人</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" sear=\"cwm_visit.update_user\" class=\"advandced-search select2-hidden-accessible\" gjs=0 data-type=\"gj\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\">  请选择 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>最后修改时间</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<span class=\"input-group-addon\"  style=\"position: absolute; left: 0;\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input class=\"form-control\" style=\"padding-left: 40px !important;\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"cwm_visit.create_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t</div>
\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<input class=\"date-timepicker1\" data-type=\"gj\" data-status = \"time\"  gjs=0 sear=\"cwm_visit.create_time\" class=\"form-control\" style=\"height: 30px; width: 180px;\">
\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>-->
\t\t\t\t</div>
\t\t\t\t<div style=\"text-align:center;clear:both;padding-top:10px; \">
\t\t\t\t\t<button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
                        查询
                    </button>
\t\t\t\t\t<button type=\"button\" id=\"rest\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t                       重置
\t\t\t\t\t\t\t\t                    </button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"custom_table\">
\t\t\t<table id=\"dynamic-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t<th data-num=\"0\">操作</th>
\t\t\t\t\t\t<th data-num=\"1\">拜访编号</th>
\t\t\t\t\t\t<th data-num=\"2\">企业名称</th>
\t\t\t\t\t\t<th data-num=\"3\">拜访主题</th>
\t\t\t\t\t\t<th data-num=\"4\">服务项目</th>
\t\t\t\t\t\t<th data-num=\"5\">拜访详情</th>
\t\t\t\t\t\t<th data-num=\"6\">负责人</th>
\t\t\t\t\t\t<th data-num=\"7\">状态</th>
\t\t\t\t\t\t<th data-num=\"8\">协访人员</th>
\t\t\t\t\t\t<th data-num=\"9\">创建人</th>
\t\t\t\t\t\t<th data-num=\"10\">创建时间</th>
\t\t\t\t\t\t<th data-num=\"11\">最后修改时间</th>
\t\t\t\t\t\t<th data-num=\"12\">最后修改人</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>

\t\t\t\t<tbody id=\"dataList\">

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

\t<div id=\"addPage\" style=\"display: none;\">
\t\t<div class=\"row\">
\t\t\t<form class=\"item_form\" role=\"form\">
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label><i class='reqired_label'>*</i> 企业名称： </label>
\t\t\t\t\t<!--<input search data-id=\"name\" class=\"required\" msg=\"公司名称不能为空\"/>-->
\t\t\t\t\t<select class=\"required\" msg=\"企业名称不能为空\" search type=\"text\" value=\"0\" data-id=\"customer_id\" id=\"customer_name\">

\t\t\t\t\t</select>
\t\t\t\t\t<label><i class='reqired_label'>*</i> 拜访主题： </label>
\t\t\t\t\t<input type=\"text\" search data-id=\"theme\" class=\"required\" msg=\"拜访主题不能为空\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label><i class='reqired_label'>*</i> 服务项目： </label>
\t\t\t\t\t<select search data-id=\"product_id\" class=\"required\" msg=\"服务项目不能为空\">
\t\t\t\t\t\t<option> 请选择服务项目 </option>
\t\t\t\t\t</select>
\t\t\t\t\t<label> <i class='reqired_label'>*</i>拜访详情： </label>
\t\t\t\t\t<input type=\"text\" search data-id=\"desc\" class=\"required\" msg=\"拜访详情不能为空\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> <i class='reqired_label'>*</i>负责人： </label>
\t\t\t\t\t<!--<input type=\"text\" search data-id=\"visit_id\" class=\"required\" msg=\"负责人不能为空\"/>-->
\t\t\t\t\t<select id=\"people\" class=\"required\" msg=\"负责人不能为空\" search type=\"text\" data-id=\"visit_id\">
\t\t\t\t\t\t<option value=\"\">请选择负责人</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 状态： </label>
\t\t\t\t\t<select data-id=\"status\" id=\"status\" class=\"required\" msg=\"请选择状态\">
\t\t\t\t\t\t<option>  请选择  </option>
\t\t\t\t\t\t<option value=\"0\">已成交</option>
\t\t\t\t\t\t<option value=\"1\">未成交</option>
\t\t\t\t\t\t<option value=\"2\">已放弃</option>
\t\t\t\t\t\t<option value=\"3\">挂起中</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 协访人员： </label>
\t\t\t\t\t<select multiple=\"\" id=\"state\" name=\"state\" class=\"select2 select2-hidden-accessible\" data-placeholder=\"请选择\" style=\"width: 200px;\" tabindex=\"-1\" aria-hidden=\"true\">

\t\t\t\t\t</select>
\t\t\t\t\t<!-- <input type=\"text\" search data-id=\"helper_id\" class=\"required\" msg=\"协访入人员不能为空\"/> -->
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<div style=\"text-align:center;margin-top:15px;\">
\t\t\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
\t\t\t\t<button class=\"sure_button add\">
                    <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                    保存
                </button>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div id=\"dtlPage\" style=\"display: none;\">
\t\t<div class=\"row\">
\t\t\t<form class=\"item_form\" role=\"form\">
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label>企业名称：</label>
\t\t\t\t\t<input disabled title=\"company\" />
\t\t\t\t\t<label>拜访编号：</label>
\t\t\t\t\t<input disabled title=\"numbers\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label>拜访主题：</label>
\t\t\t\t\t<input disabled title=\"theme\" />
\t\t\t\t\t<label> 服务项目： </label>
\t\t\t\t\t<input disabled title=\"serviceItem\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label>拜访详情：</label>
\t\t\t\t\t<input disabled title=\"desc\" />
\t\t\t\t\t<label>负责人： </label>
\t\t\t\t\t<input disabled title=\"visit_id\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 状态： </label>
\t\t\t\t\t<input disabled title=\"status\" />
\t\t\t\t\t<label> 协访人员： </label>
\t\t\t\t\t<input disabled title=\"helper_id\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 创建人： </label>
\t\t\t\t\t<input disabled title=\"createBy\" />
\t\t\t\t\t<label> 最后修改人： </label>
\t\t\t\t\t<input disabled title=\"updateBy\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 创建时间： </label>
\t\t\t\t\t<input disabled title=\"createAt\" />
\t\t\t\t\t<label> 最后修改时间： </label>
\t\t\t\t\t<input disabled title=\"updateAt\" />
\t\t\t\t</div>
\t\t\t</form>

\t\t</div>
\t</div>

\t";
        // line 370
        $this->loadTemplate("admin/customerDetail.html", "admin/platform/visit.html", 370)->display($context);
        echo " ";
        $this->loadTemplate("admin/mark.html", "admin/platform/visit.html", 370)->display($context);
        // line 371
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script>
\tjQuery(function(\$) {
\t\tcs.getNodes([133]);
\t\tcs.dataRang();
\t\tvar pagesize = 10;
\t\tvar order = 'cwm_visit.id desc';
\t\tvar filter = '';
\t\tvar employees = {};
\t\tvar serviceitems = [];
\t\tvar companies = {};
        var companieItem = {};
\t\tvar aid_2 = ykp.getCookie(\"aid_2\");
\t\tvar time = ykp.getCookie(\"time\");

        //导出功能
        cs.exportFile({
            url:\"/api/api_visit/export\",
            title:\"拜访列表\"
        });
\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_visit/grid',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: filter,
\t\t\t\tlimit: pagesize,
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '.pageBar'
\t\t\t},
\t\t\tcontentId: \"#datalist\", //默认排序
\t\t\tinitOrder: \"\", //初始化sort
\t\t\tdefaultOrder: order,
\t\t\tparams: [{
\t\t\t\tid: \"#dynamic-table\",
\t\t\t\tfield: [\"\",\"cwm_visit.id\", \"cwm_visit.customer_id\", \"cwm_visit.theme\", \"cwm_visit.product_id\", \"cwm_visit.desc\", \"cwm_visit.visit_id\",\"cwm_visit.status\",\"\",
\t\t\t\t\t\"cwm_visit.create_user\",\"cwm_visit.create_time\",\"cwm_visit.update_time\",\"cwm_visit.update_user\"]

\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});

\t\t//接收首页跳转
\t\tif(time != \"\" && time != undefined) {
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
\t\t\t\t\ttimestamp = `cwm_visit.create_time>\${today}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '2':
\t\t\t\t\ttimestamp = `cwm_visit.create_time<\${today} and cwm_visit.create_time>\${today-86400}`
\t\t\t\t\tbreak;
\t\t\t\tcase '3':
\t\t\t\t\ttimestamp = `cwm_visit.create_time>\${today-86400*6}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '4':
\t\t\t\t\ttimestamp = `cwm_visit.create_time>\${today-86400*29}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '5':
\t\t\t\t\ttimestamp = `cwm_visit.create_time>\${today-86400*day_1}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '6':
\t\t\t\t\ttimestamp = `cwm_visit.create_time<\${today-86400*day_1} and cwm_visit.create_time>\${newdaytime}`;
\t\t\t\t\tbreak;
\t\t\t}
\t\t\tvar filter = `cwm_visit.create_user=\${aid_2} and \${timestamp}`;
\t\t\tif(aid_2 == '' || aid_2 == undefined) {
\t\t\t\tfilter = `\${timestamp}`;
\t\t\t}

\t\t\tykp.list({
\t\t\t\turl: '/api/api_visit/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: pagesize,
\t\t\t\t\tfilter: filter
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(!res.data.items) {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t} else {
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t\tykp.setCookie(\"aid_2\", \"\", (1 / 24));
\t\t\tykp.setCookie(\"time\", \"\", (1 / 24));
\t\t} else {
\t\t\t//页面初始化
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetList();
\t\t}

\t\t//获取所有服务项目
\t\tykp.doAjax({
\t\t\tasync: false,
\t\t\turl: '/api/api_product/f7',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tselect: 'ckm_product.id,ckm_product.name'
\t\t\t},
\t\t\tsuccess: function(res) {
\t\t\t\tvar data = res.data;
\t\t\t\tfor(var i in data) {
\t\t\t\t\tserviceitems[parseInt(data[i]['id'])] = data[i]['name'];
\t\t\t\t\t\$('.advandced-search3').append(new Option(data[i]['name'], data[i]['id']));
\t\t\t\t}
\t\t\t\t\$('.advandced-search3').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});

\t\t\t}
\t\t});

\t\t\$('#flush').click(function() {
\t\t\tfilter = '';
\t\t\t\$('[sear=\"cwm_visit.id\"]').val('');
\t\t\t\$('[sear=\"cwm_visit.customer_id\"]').val('').trigger('change');
\t\t\t\$('[sear=\"cwm_visit.visit_id\"]').val('').trigger('change');
\t\t\t\$('[sear=\"cwm_visit.create_user\"]').val('').trigger('change');
\t\t\t\$('[sear=\"cwm_visit.update_user\"]').val('').trigger('change');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetList(1);
\t\t});

\t\t//获取所有客户
\t\tykp.doAjax({
\t\t\tasync: false,
\t\t\turl: '/api/api_customer/f7',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tselect: 'khm_customer.id,khm_customer.name'
\t\t\t},
\t\t\tsuccess: function(res) {
\t\t\t\tvar data = res.data;
\t\t\t\tvar option = '';
\t\t\t\tfor(var i in data) {
\t\t\t\t\toption += `<option value=\"\${data[i]['id']}\"> \${data[i]['name']}</option>`;
\t\t\t\t\tcompanies[data[i]['id']] = data[i]['name']
\t\t\t\t}
\t\t\t\t\$('.advandced-search2').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});
\t\t\t\t\$('.advandced-search2').append(option);
                companieItem= option;
\t\t\t\t//getList();
\t\t\t}
\t\t});

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
\t\t\t\t\$('.advandced-search').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});
\t\t\t\tfor(var i in data) {
\t\t\t\t\tif(data[i]['name']) {
\t\t\t\t\t\temployees[data[i]['id']] = data[i]['name'];
\t\t\t\t\t\t\$('.advandced-search').append(new Option(data[i]['name'], data[i]['id']));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t//getList();
\t\t\t}
\t\t});

\t\t//时间插件

\t\tcs.timeplug();

\t\tcs.showHeightSearch('#heightsearch', '#heightsearch1');

\t\t/*//高级搜索显示 & 隐藏
\t\t\$('.in').click(function(){
\t\t\tif(\$('#heightsearch').hasClass('active')){
\t\t\t\t\$('#heightsearch').removeClass('active').css('z-index','');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t}
\t\t});
\t\t\$('#heightsearch').click(function(event) {
\t\t\tif(\$(this).hasClass('active')) {
\t\t\t\t\$(this).css('z-index','');
\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\$(this).removeClass('active');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t} else {
\t\t\t\t\$(this).css('z-index','1042');
\t\t\t\t\$('.in').addClass('modal-backdrop');
\t\t\t\t\$(\"#heightsearch1\").slideDown();
\t\t\t\t\$(this).attr('class', 'btn btn-info btn-sm active')
\t\t\t\tcs.rest(false,'#heightsearch1');
\t\t\t\tcs.timeplug();
\t\t\t}
\t\t})*/

\t\t//时间范围
\t\t// \$('input[name=date-range-picker]').daterangepicker({
\t\t// \t'applyClass': 'btn-sm btn-success',
\t\t// \t'cancelClass': 'btn-sm btn-default',
\t\t// \tlocale: {
\t\t// \t\tapplyLabel: '确认',
\t\t// \t\tcancelLabel: '取消',
\t\t// \t}
\t\t// })

\t\t//普通搜索
\t\tfunction doSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_visit/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tpage: 1,
\t\t\t\t\torder: order,
\t\t\t\t\tlimit: pagesize
\t\t\t\t}
\t\t\t}

\t\t\tcs.doSearch('#search', data, 'filter', false, function(res, filter) {
\t\t\t\tfilter = filter;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t} else {
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//高级搜索
\t\tfunction dohSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_visit/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\torder: order,
\t\t\t\t\tlimit: pagesize
\t\t\t\t}
\t\t\t}

\t\t\tcs.hSearch('#search1', data, 'filter', false, function(res, filter) {
\t\t\t\tfilter = filter;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\t\$(\"#heightsearch\").removeClass('active').css('z-index', '');
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\$(\"#heightsearch\").removeClass('active').css('z-index', '');
\t\t\t\taddList(res);
\t\t\t})
\t\t}

\t\t//下拉
\t\t// \$('.select2').css('width', '200px').select2({
\t\t// \tallowClear: true
\t\t// })
\t\t// \$('#select2-multiple-style .btn').on('click', function(e) {
\t\t// \tvar target = \$(this).find('input[type=radio]');
\t\t// \tvar which = parseInt(target.val());
\t\t// \tif(which == 2)
\t\t// \t\t\$('.select2').addClass('tag-input-style');
\t\t// \telse
\t\t// \t\t\$('.select2').removeClass('tag-input-style');
\t\t// });

\t\t//时间插件
\t\tfunction time_plug() {
\t\t\t\$('#templateCon .select2').css('width', '443px').select2({
\t\t\t\tallowClear: true
\t\t\t})
\t\t\t\$('#select2-multiple-style .btn').on('click', function(e) {
\t\t\t\tvar target = \$(this).find('input[type=radio]');
\t\t\t\tvar which = parseInt(target.val());
\t\t\t\tif(which == 2) \$('.select2').addClass('tag-input-style');
\t\t\t\telse \$('.select2').removeClass('tag-input-style');
\t\t\t});

\t\t\tcs.timeplug();
\t\t}

\t\t//添加
\t\t\$('#add').click(function() {
\t\t\tshowMark('#addPage');
\t\t\t\$('#showBox .title').text('添加拜访');
\t\t\t//获取公司列表
            \$('#templateCon #customer_name').html(\"<option value='0'> 请选择 </option>\");
            \$('#templateCon #customer_name').append(companieItem);
\t\t\t//cs.get_cus('#templateCon #customer_name');

\t\t\t//获取员工
\t\t\t// cs.getEmple('#templateCon #people');
\t\t\t//cs.getEmple('#templateCom .select2-search__field')

\t\t\t//填充服务项目
\t\t\tfor(var i in serviceitems) {
\t\t\t\tif(serviceitems[i]) {
\t\t\t\t\t\$('#templateCon select[data-id=\"product_id\"]').append(new Option(serviceitems[i], i));
\t\t\t\t}
\t\t\t}

\t\t\t//填充协访人员
\t\t\tfor(var i in employees) {
\t\t\t\tif(employees[i]) {
\t\t\t\t\t\$('#templateCon #state').append(new Option(employees[i], i));
\t\t\t\t\t\$('#templateCon [data-id=\"visit_id\"]').append(new Option(employees[i], i));
\t\t\t\t}
\t\t\t}

\t\t\ttime_plug();

\t\t\tvar dataArr = {};
\t\t\t\$('#templateCon .add').click(function() {
\t\t\t\tif(!cs.popValidate()) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t\$('#templateCon').find('input,select').each(function(i, e) {
\t\t\t\t    if(\$(this).attr('data-id') == \"status\" ){
                        dataArr[\$(this).attr('data-id')] = \$(this).val();
\t\t\t\t\t}else if(i == 6 || i == 5) {
\t\t\t\t\t\tdataArr[\$(this).attr('data-id')] = new Date(\$(this).val()).getTime() / 1000;
\t\t\t\t\t} else if(i == 7 || i == 8) {
\t\t\t\t\t\tdataArr[\$(this).attr('data-id')] = \$(this).val();
\t\t\t\t\t} else {
\t\t\t\t\t\tdataArr[\$(this).attr('data-id')] = \$(this).val();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tdelete(dataArr[undefined]);
\t\t\t\tvar helper_id = [];

\t\t\t\t\$('#templateCon #state').select2('data').forEach(function(i) {
\t\t\t\t\thelper_id.push(i.id);
\t\t\t\t})
                console.log(helper_id);
                dataArr['helper_id'] = JSON.stringify(helper_id);
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_visit/add',
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tdata: dataArr,
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tif(res.code == 200) {
\t\t\t\t\t\t\tykp.prompt('添加成功!');
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})
\t\t})

\t\t\$('#changePageNum').change(function() {
\t\t\tpagesize = \$(this).val();
\t\t\tykp.setCookie('page_size', pagesize);
\t\t\tgetList();
\t\t});

\t\tcs.custorm_check('#dynamic-table', '#dataList', false);

\t\tfunction getList(current) {
\t\t\tdoSearch();
\t\t\tdohSearch();
\t\t\tcurrent = current ? current : 1;
\t\t\tykp.list({
\t\t\t\turl: '/api/api_visit/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: pagesize,
\t\t\t\t\tfilter: filter,
\t\t\t\t\torder: order
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(!res.data.items) {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t} else {
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//数据处理
\t\tfunction addList(res) {
\t\t\tvar data = res.data.items;
\t\t\tvar html = '';

\t\t\tvar styles = [];
\t\t\t\$('.thColor th').not(':first').each(function(i, e) {
\t\t\t\tstyles.push(\$(this).css('display'));
\t\t\t});

\t\t\t//协访人员
\t\t\tvar assistance;
\t\t\tvar _assistance = [];
\t\t\tvar _assistance1 = [];
            var _assistance3 = [];
            var del_mark = cs.getNodes([293], true);
            var Status = ['已成交', '未成交', '已放弃', '已挂起'];
\t\t\tfor(var i = 0; i < data.length; i++) {
\t\t\t\tassistance = data[i]['helper_list'] ? data[i]['helper_list'] : [];
                _assistance3 = [];
\t\t\t\tfor(var k in assistance) {
\t\t\t\t\t_assistance.push(assistance[k]['name']);
\t\t\t\t\t_assistance1.push(assistance[k]['id']);
                    _assistance3.push(assistance[k]['id']);

\t\t\t\t}


                html += `<tr data-id=\"\${data[i]['cwm_visit.id']}\">
\t\t\t\t\t\t\t<td data-num=\"22\">
\t\t\t\t\t\t\t\t<label class=\"pos-rel \">
\t\t\t\t\t\t\t\t<a> <span style=\"cursor: pointer\" id=\"\" title=\"详情\" class=\"inFo btOrange\"><i class=\"fa fa-info\"></i></span></a>
\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"_edit btBlue\" title=\"编辑\" contentAuthority=\"134\" style=\"color:#fff !important\"><i class=\"fa fa-pencil-square-o\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"del\" style=\"display:\${del_mark ? \"inline-block\" : \"none !important\"}\" contentAuthority=\"293\" ><span class=\"btRed\"><i class=\"fa fa-trash-o\" title=\"删除\"></i></span></a>
\t\t\t\t\t\t\t\t</lable>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-num=\"1\" style=\"display:\${styles[0]}\">
\t\t\t\t\t\t\t\t\${data[i]['cwm_visit.id']}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-num=\"2\" style=\"display:\${styles[1]}\" data-cid=\"\${data[i]['cwm_visit.customer_id']}\">
\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"customerDetail pos-rel\" title=\"#333333\">\${companies[data[i]['cwm_visit.customer_id']]}</a>
\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t \t\t\t\t<i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data[i]['Remark'].length > 0 ? 'red' : ''}\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i>
\t\t\t \t\t\t\t </label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"\" data-num=\"3\" style=\"display:\${styles[2]}\">
\t\t\t\t\t\t\t\t\${data[i]['cwm_visit.theme']}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" data-num=\"4\" style=\"display:\${styles[3]}\" data-product=\"\${data[i]['cwm_visit.product_id']}\">
                                    <span class=\"lbl\">
                                    \t\${serviceitems[data[i]['cwm_visit.product_id']]}
                                    </span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td class=\"center\" data-num=\"5\" style=\"display:\${styles[4]}\">
\t\t\t\t\t\t\t\t
                                    <span class=\"lbl\">\${data[i]['cwm_visit.desc']}</span>
                                </label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" data-num=\"6\" style=\"display:\${styles[5]}\" data-uid=\"\${data[i]['cwm_visit.visit_id']}\">
\t\t\t\t\t\t\t\t
                                    <span class=\"lbl\">\${employees[data[i]['cwm_visit.visit_id']]}</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" data-num=\"7\" style=\"display:\${styles[6]}\" data-status=\"\${data[i]['cwm_visit.status']}\">
\t\t\t\t\t\t\t\t
                                    <span class=\"lbl\">\${Status[data[i]['cwm_visit.status'] ]}</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" data-num=\"8\" data-state=\"\${_assistance3}\" style=\"display:\${styles[7]}\">
\t\t\t\t\t\t\t\t
                                    <span class=\"lbl\">\${_assistance.join(',')}</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" data-num=\"9\" style=\"display:\${styles[8]}\">
\t\t\t\t\t\t\t\t
                                    <span class=\"lbl\">\${employees[data[i]['cwm_visit.create_user']]}</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" data-num=\"10\" style=\"display:\${styles[9]}\">
\t\t\t\t\t\t\t\t
                                    <span class=\"lbl\">\${cs.getNowTime(data[i]['cwm_visit.create_time'],true)}</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" data-num=\"11\" style=\"display:\${styles[10]}\">
\t\t\t\t\t\t\t\t<span class=\"lbl\">\${data[i]['cwm_visit.update_time'] != 0 ? cs.getNowTime(data[i]['cwm_visit.update_time'],true) : ''}</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" data-num=\"12\" style=\"display:\${styles[11]}\">
                                   <span class=\"lbl\">
                                   \t \${data[i]['cwm_visit.update_user'] != 0 ? employees[data[i]['cwm_visit.update_user']] : ''}
                                   </span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>`;

\t\t\t\t_assistance = [];
\t\t\t};

\t\t\t\$('#dataList').html(html);
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\tcs.getNodes([134]);
\t\t\tcustom.get_custom_info();
\t\t\tcustom.showReamrk();

\t\t\t\$('._edit').click(function() {
\t\t\t\tvar dataArr = [];
\t\t\t\t\$(this).parents('td').siblings().each(function(i) {
\t\t\t\t\tif(i < 11 && i > 0) {
\t\t\t\t\t\tif(i == 8) {
\t\t\t\t\t\t\tdataArr.push(\$(this).attr('data-istime'));
\t\t\t\t\t\t} else if(i == 9) {
\t\t\t\t\t\t\tdataArr.push(\$(this).attr('data-status'));
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tdataArr.push(\$(this).text().trim())
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t})
                var parent = \$(this).parents('tr');
\t\t\t\tvar id = parent.attr('data-id');
\t\t\t\tvar cid = parent.find('td').eq(2).attr('data-cid'); //公司id
\t\t\t\tvar product = parent.find('td').eq(4).attr('data-product'); //服务项目
\t\t\t\tvar uid = parent.find('td').eq(6).attr('data-uid'); //负责人
                var status = parent.find('td').eq(7).attr('data-status'); //状态
                var state = parent.find('td').eq(8).attr('data-state'); //协访人员

\t\t\t\tshowMark('#addPage');
\t\t\t\t\$('#showBox .title').text('编辑拜访');
\t\t\t\t//填充服务项目
\t\t\t\tfor(var i in serviceitems) {
\t\t\t\t\tif(serviceitems[i]) {
\t\t\t\t\t\t\$('#templateCon select[data-id=\"product_id\"]').append(new Option(serviceitems[i], i));
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t//填充协访人员
\t\t\t\tfor(var i in employees) {
\t\t\t\t\tif(employees[i]) {
\t\t\t\t\t\t\$('#templateCon #state').append(new Option(employees[i], i));
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t\$('#templateBox').find('input,select').each(function(i) {
\t\t\t\t\tif(i == 5 || i == 6) {
\t\t\t\t\t\t\$(this).val(dataArr[i])
\t\t\t\t\t} else if(i == 6) {
\t\t\t\t\t\t\$(this).find('option[value=\"' + dataArr[i] + '\"]').attr('selected', true);
\t\t\t\t\t} else if(i == 4) {
\t\t\t\t\t\t//获取员工
\t\t\t\t\t\t// cs.getEmple('#templateCon #people',uid);
\t\t\t\t\t\t//填充协访人员
\t\t\t\t\t\tfor(var i in employees) {
\t\t\t\t\t\t\tif(employees[i]) {
\t\t\t\t\t\t\t\t\$('#templateCon #people').append(new Option(employees[i], i));
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\$('#templateCon #people').val(uid);
\t\t\t\t\t\t}
\t\t\t\t\t} else if(i == 0) {
\t\t\t\t\t\t//获取公司列表
                        \$('#templateCon #customer_name').html(\"<option value='0'> 请选择 </option>\");
                        \$('#templateCon #customer_name').append(companieItem);
\t\t\t\t\t\t//cs.get_cus1('#templateCon #customer_name', cid);

\t\t\t\t\t} else if(i == 7) {
\t\t\t\t\t\t\$(this).find('option[value=\"' + dataArr[i] + '\"]').attr('selected', true);
\t\t\t\t\t} else if(i == 9) {
\t\t\t\t\t\t\$(this).val(_assistance1).trigger('change');
\t\t\t\t\t} else if(i == 2) {
\t\t\t\t\t\t\$(this).find('option[value=' + product + ']').attr('selected', true);
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(this).val(dataArr[i]);
\t\t\t\t\t}
\t\t\t\t})
                \$('#templateCon #customer_name').val(cid).change();
                \$('#templateCon #status').val(status).change();
                \$('#templateCon #state').val(state.split(',')).change();

                var dataArr = {};
\t\t\t\tdataArr['id'] = id;
\t\t\t\tvar dataArr = {};
\t\t\t\t\$('#templateCon .add').click(function() {
\t\t\t\t\tif(!cs.popValidate()) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\t\$('#templateCon').find('input,select').each(function(i, e) {
                        if(\$(this).attr('data-id') == \"status\" ){
                            dataArr[\$(this).attr('data-id')] = \$(this).val();
                        }else if(i == 6 || i == 5) {
\t\t\t\t\t\t\tdataArr[\$(this).attr('data-id')] = new Date(\$(this).val()).getTime() / 1000;
\t\t\t\t\t\t} else if(i == 7 || i == 8) {
\t\t\t\t\t\t\tdataArr[\$(this).attr('data-id')] = \$(this).val();
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tdataArr[\$(this).attr('data-id')] = \$(this).val();
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tvar helper_id = [];
\t\t\t\t\t\$('#templateCon #state').select2('data').forEach(function(i) {
\t\t\t\t\t\thelper_id.push(i.id);
\t\t\t\t\t})
\t\t\t\t\tdataArr.id = id;
\t\t\t\t\tdataArr['helper_id'] = JSON.stringify(helper_id);

\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_visit/edit',
\t\t\t\t\t\tmethods: 'post',
\t\t\t\t\t\tdata: dataArr,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tif(res.code == 200) {
\t\t\t\t\t\t\t\tykp.prompt('编辑成功!');
\t\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t})

\t\t\t\t})

\t\t\t\ttime_plug();
\t\t\t})


            \$('.del').click(function() {
                var id = \$(this).parents('tr').attr('data-id');
                layui.use('layer',function() {
                    layui.layer.confirm('确认删除吗?', function(index){
                        ykp.doAjax({
                            url:'/api/api_visit/del',
                            methods:\"post\",
                            data:{
                                id:id
                            },
                            success:function(res) {
                                ykp.prompt('删除成功');
                                getList();
                                layer.closeAll();
                            }
                        })
                    });
                })

            })




            \$('.inFo').click(function() {
                var dataArr = [];
                \$(this).parents('td').siblings().each(function(i) {
                    if(i >= 0) {
\t\t\t\t\t\tdataArr.push(\$(this).text().trim())
                    }
                })
                showMark('#dtlPage');
                \$('#showBox .title').text('拜访详情');
               \$(\"#templateBox\").find(\"input\").each(function () {
\t\t\t\t   switch (\$(this).attr(\"title\")){
\t\t\t\t\t   case \"company\":
\t\t\t\t\t       \$(this).val(dataArr[1]);
\t\t\t\t\t       break;
\t\t\t\t\t   case \"numbers\":
                           \$(this).val(dataArr[0]);
\t\t\t\t\t       break;
\t\t\t\t\t   case \"theme\":
                           \$(this).val(dataArr[2]);
\t\t\t\t\t       break
                       case \"serviceItem\":
                           \$(this).val(dataArr[3]);
                           break;
                       case \"desc\":
                           \$(this).val(dataArr[4]);
                           break;
                       case \"visit_id\":
                           \$(this).val(dataArr[5]);
                           break
                       case \"status\":
                           \$(this).val(dataArr[6]);
                           break;
                       case \"helper_id\":
                           \$(this).val(dataArr[7]);
                           break;
                       case \"createBy\":
                           \$(this).val(dataArr[8]);
                           break
                       case \"updateBy\":
                           \$(this).val(dataArr[11]);
                           break;
                       case \"createAt\":
                           \$(this).val(dataArr[9]);
                           break;
                       case \"updateAt\":
                           \$(this).val(dataArr[10]);
                           break

\t\t\t\t   }
               })

            })
\t\t}
\t})
</script>";
    }

    public function getTemplateName()
    {
        return "admin/platform/visit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 371,  390 => 370,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	#templateCon label {*/
/* 		width: 114px;*/
/* 		text-align: right;*/
/* 	}*/
/* 	*/
/* 	#templateCon input,*/
/* 	input {*/
/* 		width: 180px;*/
/* 	}*/
/* 	*/
/* 	#templateBox {*/
/* 		min-height: 700px;*/
/* 	}*/
/* 	*/
/* 	.input-group-addon {*/
/* 		width: 30px;*/
/* 		height: 32px;*/
/* 		position: relative;*/
/* 		top: 0;*/
/* 		left: -30px;*/
/* 		border-left: 1px solid #ccc !important;*/
/* 	}*/
/* </style>*/
/* <div class="widget-main">*/
/* 	<div class="row" id="topTool" style="position:relative;">*/
/* 		<!-- <h3 class="header smaller lighter blue">拜访</h3> -->*/
/* 		<!--普通搜索-->*/
/* 		<div class="col-sx-4" style=" float: left;margin-right:5px;">*/
/* 			<input type="text" pts=0 sear="cwm_visit.id" placeholder="拜访编号" style="width:180px;" />*/
/* 		</div>*/
/* 		<div class="col-sx-4" style=" float: left;margin-right:5px;">*/
/* 			<select style="margin-right: 12px !important;width: 180px" pts=3 sear="cwm_visit.customer_id" id="customers" class="advandced-search2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 				<option value="">企业  </option>*/
/* 			</select>*/
/* 			<!-- <input type="text" pts=0 sear="cwm_visit.customer_name" placeholder="企业名称" class="col-xs-10 col-sm-10" /> -->*/
/* 		</div>*/
/* */
/* 		<div class="col-sx-4" style=" float: left;margin-right:5px;">*/
/* 			<select style="margin-right: 12px !important;width: 180px" pts=3 sear="cwm_visit.visit_id" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 				<option value="">负责人  </option>*/
/* 			</select>*/
/* 		</div>*/
/* */
/* 		<div class="col-sx-4" style=" float: left;margin-right:5px;">*/
/* 			<select style="margin-right: 12px !important;width: 180px" class="advandced-search select2-hidden-accessible" tabindex="-1" pts=3 sear="cwm_visit.create_user" aria-hidden="true">*/
/* 				<option value="">创建人  </option>*/
/* 			</select>*/
/* 		</div>*/
/* 		<div class="col-sx-4" style=" float: left;margin-right:5px;">*/
/* 			<select style="margin-right: 12px !important;width: 180px" sear="cwm_visit.update_user" pts=3 class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 				<option value="">最后修改人  </option>*/
/* 			</select>*/
/* 		</div>*/
/* */
/* 		<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 			<button type="button" id="search" title="搜索" class="btn btn-info btn-sm">*/
/*                 <i class="fa fa-search"></i>*/
/*             </button>*/
/* 		</div>*/
/* 		<div class="col-sx-4" style=" float: left;  margin-right: 5px; ">*/
/* 			<button id="heightsearch" type="button" title="高级搜索" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/*                 <i class="fa fa-filter"></i>*/
/*             </button>*/
/* 		</div>*/
/* 		<div class="col-sx-4" style=" float: left;  margin-right: 5px; ">*/
/* 			<button id="flush" type="button" title="刷新" class="btn btn-info btn-sm" style="background-color: #32CD32!important;">*/
/* 	            <i class="fa fa-refresh"></i>*/
/* 	        </button>*/
/* 		</div>*/
/* 		<div class="col-sx-4" style=" float: left;  margin-right: 5px; " contentAuthority="133">*/
/* 			<button id="add" type="button" title="添加" style="background-color: #32CD32	 !important;border-color: #32CD32 !important;" class="btn addBtn btn-info btn-sm">*/
/* 				<i class="fa fa-plus"></i>*/
/*             </button>*/
/* 		</div>*/
/* 		<div class="col-sx-4" contentAuthority="301" style=" float: left; margin-right: 5px;">*/
/*              <button type="button"  title="导出" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="exportfile moveToClue btn addBtn btn-info btn-sm position-relative">*/
/*                  <i class="fa fa-sign-out"></i>*/
/*              </button>*/
/*         </div>*/
/* 		<div id="heightsearch1" class="col-sx-12" style="position: absolute; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px;margin-top:30px; display: none;">*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>拜访编号</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<input type="text" gjs=0 sear="cwm_visit.id" />*/
/* 				</div>*/
/* 				<div class="col-sx-4" style="float: left; margin-bottom:5px;">*/
/* 					<label>企业名称</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select style="margin-right: 12px !important;width: 180px" gjs=0 data-type="gj" sear="cwm_visit.customer_id" id="customers" class="advandced-search2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 						<option value="">  请选择  </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>拜访主题</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<input type="text" gjs=0 sear="cwm_visit.theme">*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>服务项目</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select style="margin: 12px !important;width: 180px" class="advandced-search3 select2-hidden-accessible" tabindex="-1" gjs=0 sear="cwm_visit.product_id" aria-hidden="true" data-type="gj" tabindex="-1">*/
/* 						<option value="">请选择</option>*/
/* 					</select>*/
/* 					<!-- <select style="margin-right: 12px!important;width:180px" data-placeholder="创建人" class="advandced-search3 select2-hidden-accessible" tabindex="-1" aria-hidden="true" sear="zhm_comprehensive_bill.create_id" pts=3>*/
/* 	<option value=""> </option>*/
/* 	</select> -->*/
/* 					<!-- <input type="text" gjs=0 sear="cwm_visit.service_id"> -->*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>拜访详情</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<input type="text" gjs=0 id="" sear="cwm_visit.desc">*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>协访人员</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select style="margin: 12px !important;width: 180px" gjs=4 data-type="gj" sear="cwm_visit.id in (select visit_id from cwm_visit_helper where user_id" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 						<option value="">  请选择 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>负责人</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select style="margin: 12px !important;width: 180px" sear="cwm_visit.visit_id" class="advandced-search select2-hidden-accessible" gjs=0 data-type="gj" tabindex="-1" aria-hidden="true">*/
/* 						<option value="">  请选择 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>状态</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select gjs=0 data-type="gj" style="width: 180px" sear="cwm_visit.status">*/
/* 						<option value="">  请选择  </option>*/
/* 						<option value="0">已成交</option>*/
/* 						<option value="1">未成交</option>*/
/* 						<option value="2">已放弃</option>*/
/* 						<option value="3">挂起中</option>*/
/* 					</select>*/
/* */
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>创建人</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select style="margin: 12px !important;width: 180px" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true" gjs=0 data-type="gj" sear="cwm_visit.create_user">*/
/* 						<option value="">  请选择 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>创建时间</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 						<option> &lt; </option>*/
/* 						<option> > </option>*/
/* 					</select>*/
/* 					<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<span class="input-group-addon"  style="position: absolute; left: 0;">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 						<input class="form-control" type="text" style="padding-left: 40px !important;" data-status="rangtime" gjs=0 sear="cwm_visit.create_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 					</div>*/
/* 					<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<input class="date-timepicker1" data-type="gj" data-status = "time"  gjs=0 sear="cwm_visit.create_time" class="form-control" style="height: 30px; width: 180px;">*/
/* 						<span class="input-group-addon">*/
/* 							<i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 						</span>*/
/* 					</div>-->*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>最后修改人</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select style="margin: 12px !important;width: 180px" sear="cwm_visit.update_user" class="advandced-search select2-hidden-accessible" gjs=0 data-type="gj" tabindex="-1" aria-hidden="true">*/
/* 						<option value="">  请选择 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>最后修改时间</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 						<option> &lt; </option>*/
/* 						<option> > </option>*/
/* 					</select>*/
/* 					<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<span class="input-group-addon"  style="position: absolute; left: 0;">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 						<input class="form-control" style="padding-left: 40px !important;" type="text" data-status="rangtime" gjs=0 sear="cwm_visit.create_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 					</div>*/
/* 					<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<input class="date-timepicker1" data-type="gj" data-status = "time"  gjs=0 sear="cwm_visit.create_time" class="form-control" style="height: 30px; width: 180px;">*/
/* 						<span class="input-group-addon">*/
/* 							<i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 						</span>*/
/* 					</div>-->*/
/* 				</div>*/
/* 				<div style="text-align:center;clear:both;padding-top:10px; ">*/
/* 					<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/*                         查询*/
/*                     </button>*/
/* 					<button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 								                       重置*/
/* 								                    </button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row">*/
/* 		<div class="custom_table">*/
/* 			<table id="dynamic-table">*/
/* 				<thead>*/
/* 					<tr class="thColor">*/
/* 						<th data-num="0">操作</th>*/
/* 						<th data-num="1">拜访编号</th>*/
/* 						<th data-num="2">企业名称</th>*/
/* 						<th data-num="3">拜访主题</th>*/
/* 						<th data-num="4">服务项目</th>*/
/* 						<th data-num="5">拜访详情</th>*/
/* 						<th data-num="6">负责人</th>*/
/* 						<th data-num="7">状态</th>*/
/* 						<th data-num="8">协访人员</th>*/
/* 						<th data-num="9">创建人</th>*/
/* 						<th data-num="10">创建时间</th>*/
/* 						<th data-num="11">最后修改时间</th>*/
/* 						<th data-num="12">最后修改人</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* */
/* 				<tbody id="dataList">*/
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
/* 	<div id="addPage" style="display: none;">*/
/* 		<div class="row">*/
/* 			<form class="item_form" role="form">*/
/* 				<div class="form_data">*/
/* 					<label><i class='reqired_label'>*</i> 企业名称： </label>*/
/* 					<!--<input search data-id="name" class="required" msg="公司名称不能为空"/>-->*/
/* 					<select class="required" msg="企业名称不能为空" search type="text" value="0" data-id="customer_id" id="customer_name">*/
/* */
/* 					</select>*/
/* 					<label><i class='reqired_label'>*</i> 拜访主题： </label>*/
/* 					<input type="text" search data-id="theme" class="required" msg="拜访主题不能为空" />*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label><i class='reqired_label'>*</i> 服务项目： </label>*/
/* 					<select search data-id="product_id" class="required" msg="服务项目不能为空">*/
/* 						<option> 请选择服务项目 </option>*/
/* 					</select>*/
/* 					<label> <i class='reqired_label'>*</i>拜访详情： </label>*/
/* 					<input type="text" search data-id="desc" class="required" msg="拜访详情不能为空" />*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label> <i class='reqired_label'>*</i>负责人： </label>*/
/* 					<!--<input type="text" search data-id="visit_id" class="required" msg="负责人不能为空"/>-->*/
/* 					<select id="people" class="required" msg="负责人不能为空" search type="text" data-id="visit_id">*/
/* 						<option value="">请选择负责人</option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label> 状态： </label>*/
/* 					<select data-id="status" id="status" class="required" msg="请选择状态">*/
/* 						<option>  请选择  </option>*/
/* 						<option value="0">已成交</option>*/
/* 						<option value="1">未成交</option>*/
/* 						<option value="2">已放弃</option>*/
/* 						<option value="3">挂起中</option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label> 协访人员： </label>*/
/* 					<select multiple="" id="state" name="state" class="select2 select2-hidden-accessible" data-placeholder="请选择" style="width: 200px;" tabindex="-1" aria-hidden="true">*/
/* */
/* 					</select>*/
/* 					<!-- <input type="text" search data-id="helper_id" class="required" msg="协访入人员不能为空"/> -->*/
/* 				</div>*/
/* 			</form>*/
/* 			<div style="text-align:center;margin-top:15px;">*/
/* 				<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* 				<button class="sure_button add">*/
/*                     <i class="fa fa-check" aria-hidden="true"></i>*/
/*                     保存*/
/*                 </button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div id="dtlPage" style="display: none;">*/
/* 		<div class="row">*/
/* 			<form class="item_form" role="form">*/
/* 				<div class="form_data">*/
/* 					<label>企业名称：</label>*/
/* 					<input disabled title="company" />*/
/* 					<label>拜访编号：</label>*/
/* 					<input disabled title="numbers" />*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label>拜访主题：</label>*/
/* 					<input disabled title="theme" />*/
/* 					<label> 服务项目： </label>*/
/* 					<input disabled title="serviceItem" />*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label>拜访详情：</label>*/
/* 					<input disabled title="desc" />*/
/* 					<label>负责人： </label>*/
/* 					<input disabled title="visit_id" />*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label> 状态： </label>*/
/* 					<input disabled title="status" />*/
/* 					<label> 协访人员： </label>*/
/* 					<input disabled title="helper_id" />*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label> 创建人： </label>*/
/* 					<input disabled title="createBy" />*/
/* 					<label> 最后修改人： </label>*/
/* 					<input disabled title="updateBy" />*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label> 创建时间： </label>*/
/* 					<input disabled title="createAt" />*/
/* 					<label> 最后修改时间： </label>*/
/* 					<input disabled title="updateAt" />*/
/* 				</div>*/
/* 			</form>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* */
/* 	{% include 'admin/customerDetail.html' %} {% include 'admin/mark.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* <script>*/
/* 	jQuery(function($) {*/
/* 		cs.getNodes([133]);*/
/* 		cs.dataRang();*/
/* 		var pagesize = 10;*/
/* 		var order = 'cwm_visit.id desc';*/
/* 		var filter = '';*/
/* 		var employees = {};*/
/* 		var serviceitems = [];*/
/* 		var companies = {};*/
/*         var companieItem = {};*/
/* 		var aid_2 = ykp.getCookie("aid_2");*/
/* 		var time = ykp.getCookie("time");*/
/* */
/*         //导出功能*/
/*         cs.exportFile({*/
/*             url:"/api/api_visit/export",*/
/*             title:"拜访列表"*/
/*         });*/
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_visit/grid',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: filter,*/
/* 				limit: pagesize,*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '.pageBar'*/
/* 			},*/
/* 			contentId: "#datalist", //默认排序*/
/* 			initOrder: "", //初始化sort*/
/* 			defaultOrder: order,*/
/* 			params: [{*/
/* 				id: "#dynamic-table",*/
/* 				field: ["","cwm_visit.id", "cwm_visit.customer_id", "cwm_visit.theme", "cwm_visit.product_id", "cwm_visit.desc", "cwm_visit.visit_id","cwm_visit.status","",*/
/* 					"cwm_visit.create_user","cwm_visit.create_time","cwm_visit.update_time","cwm_visit.update_user"]*/
/* */
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* */
/* 		//接收首页跳转*/
/* 		if(time != "" && time != undefined) {*/
/* 			var timestamp = ''; //条件*/
/* 			var today = new Date().setHours(0, 0, 0, 0) / 1000; //今天零点的时间戳*/
/* 			var day_1 = cs.getNowTime(Date.parse(new Date()) / 1000).substr(-2) - 1; //距离本月1号有多少天*/
/* 			var lastmonthday_1 = cs.getNowTime(Date.parse(new Date()) / 1000);*/
/* 			var newday = lastmonthday_1.substring(0, 4) + '-' + (lastmonthday_1.substring(5, 7) - 1) + '-01';*/
/* 			if(lastmonthday_1.substring(5, 7) == 1) {*/
/* 				newday = (lastmonthday_1.substring(0, 4) - 1) + '-12-01';*/
/* 			}*/
/* 			var newdaytime = Date.parse(new Date(newday)) / 1000; //上个月1号的时间戳*/
/* 			switch(time) {*/
/* 				case '1':*/
/* 					timestamp = `cwm_visit.create_time>${today}`;*/
/* 					break;*/
/* 				case '2':*/
/* 					timestamp = `cwm_visit.create_time<${today} and cwm_visit.create_time>${today-86400}`*/
/* 					break;*/
/* 				case '3':*/
/* 					timestamp = `cwm_visit.create_time>${today-86400*6}`;*/
/* 					break;*/
/* 				case '4':*/
/* 					timestamp = `cwm_visit.create_time>${today-86400*29}`;*/
/* 					break;*/
/* 				case '5':*/
/* 					timestamp = `cwm_visit.create_time>${today-86400*day_1}`;*/
/* 					break;*/
/* 				case '6':*/
/* 					timestamp = `cwm_visit.create_time<${today-86400*day_1} and cwm_visit.create_time>${newdaytime}`;*/
/* 					break;*/
/* 			}*/
/* 			var filter = `cwm_visit.create_user=${aid_2} and ${timestamp}`;*/
/* 			if(aid_2 == '' || aid_2 == undefined) {*/
/* 				filter = `${timestamp}`;*/
/* 			}*/
/* */
/* 			ykp.list({*/
/* 				url: '/api/api_visit/grid',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: pagesize,*/
/* 					filter: filter*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(!res.data.items) {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt('暂无数据！');*/
/* 						}, 1000);*/
/* 						$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					} else {*/
/* 						addList(res);*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 			ykp.setCookie("aid_2", "", (1 / 24));*/
/* 			ykp.setCookie("time", "", (1 / 24));*/
/* 		} else {*/
/* 			//页面初始化*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getList();*/
/* 		}*/
/* */
/* 		//获取所有服务项目*/
/* 		ykp.doAjax({*/
/* 			async: false,*/
/* 			url: '/api/api_product/f7',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				select: 'ckm_product.id,ckm_product.name'*/
/* 			},*/
/* 			success: function(res) {*/
/* 				var data = res.data;*/
/* 				for(var i in data) {*/
/* 					serviceitems[parseInt(data[i]['id'])] = data[i]['name'];*/
/* 					$('.advandced-search3').append(new Option(data[i]['name'], data[i]['id']));*/
/* 				}*/
/* 				$('.advandced-search3').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* */
/* 			}*/
/* 		});*/
/* */
/* 		$('#flush').click(function() {*/
/* 			filter = '';*/
/* 			$('[sear="cwm_visit.id"]').val('');*/
/* 			$('[sear="cwm_visit.customer_id"]').val('').trigger('change');*/
/* 			$('[sear="cwm_visit.visit_id"]').val('').trigger('change');*/
/* 			$('[sear="cwm_visit.create_user"]').val('').trigger('change');*/
/* 			$('[sear="cwm_visit.update_user"]').val('').trigger('change');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getList(1);*/
/* 		});*/
/* */
/* 		//获取所有客户*/
/* 		ykp.doAjax({*/
/* 			async: false,*/
/* 			url: '/api/api_customer/f7',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				select: 'khm_customer.id,khm_customer.name'*/
/* 			},*/
/* 			success: function(res) {*/
/* 				var data = res.data;*/
/* 				var option = '';*/
/* 				for(var i in data) {*/
/* 					option += `<option value="${data[i]['id']}"> ${data[i]['name']}</option>`;*/
/* 					companies[data[i]['id']] = data[i]['name']*/
/* 				}*/
/* 				$('.advandced-search2').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* 				$('.advandced-search2').append(option);*/
/*                 companieItem= option;*/
/* 				//getList();*/
/* 			}*/
/* 		});*/
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
/* 				$('.advandced-search').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* 				for(var i in data) {*/
/* 					if(data[i]['name']) {*/
/* 						employees[data[i]['id']] = data[i]['name'];*/
/* 						$('.advandced-search').append(new Option(data[i]['name'], data[i]['id']));*/
/* 					}*/
/* 				}*/
/* 				//getList();*/
/* 			}*/
/* 		});*/
/* */
/* 		//时间插件*/
/* */
/* 		cs.timeplug();*/
/* */
/* 		cs.showHeightSearch('#heightsearch', '#heightsearch1');*/
/* */
/* 		/*//* /高级搜索显示 & 隐藏*/
/* 		$('.in').click(function(){*/
/* 			if($('#heightsearch').hasClass('active')){*/
/* 				$('#heightsearch').removeClass('active').css('z-index','');*/
/* 				$("#heightsearch1").slideUp();*/
/* 			}*/
/* 		});*/
/* 		$('#heightsearch').click(function(event) {*/
/* 			if($(this).hasClass('active')) {*/
/* 				$(this).css('z-index','');*/
/* 				$('.in').removeClass('modal-backdrop');*/
/* 				$(this).removeClass('active');*/
/* 				$("#heightsearch1").slideUp();*/
/* 			} else {*/
/* 				$(this).css('z-index','1042');*/
/* 				$('.in').addClass('modal-backdrop');*/
/* 				$("#heightsearch1").slideDown();*/
/* 				$(this).attr('class', 'btn btn-info btn-sm active')*/
/* 				cs.rest(false,'#heightsearch1');*/
/* 				cs.timeplug();*/
/* 			}*/
/* 		})*//* */
/* */
/* 		//时间范围*/
/* 		// $('input[name=date-range-picker]').daterangepicker({*/
/* 		// 	'applyClass': 'btn-sm btn-success',*/
/* 		// 	'cancelClass': 'btn-sm btn-default',*/
/* 		// 	locale: {*/
/* 		// 		applyLabel: '确认',*/
/* 		// 		cancelLabel: '取消',*/
/* 		// 	}*/
/* 		// })*/
/* */
/* 		//普通搜索*/
/* 		function doSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_visit/grid',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					page: 1,*/
/* 					order: order,*/
/* 					limit: pagesize*/
/* 				}*/
/* 			}*/
/* */
/* 			cs.doSearch('#search', data, 'filter', false, function(res, filter) {*/
/* 				filter = filter;*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 				} else {*/
/* 					addList(res);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//高级搜索*/
/* 		function dohSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_visit/grid',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					order: order,*/
/* 					limit: pagesize*/
/* 				}*/
/* 			}*/
/* */
/* 			cs.hSearch('#search1', data, 'filter', false, function(res, filter) {*/
/* 				filter = filter;*/
/* 				if(res.data.items == "") {*/
/* 					ykp.prompt("暂无数据");*/
/* 					$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					$('.in').removeClass('modal-backdrop');*/
/* 					$("#heightsearch1").slideUp();*/
/* 					$("#heightsearch").removeClass('active').css('z-index', '');*/
/* 					return false;*/
/* 				}*/
/* 				$('.in').removeClass('modal-backdrop');*/
/* 				$("#heightsearch1").slideUp();*/
/* 				$("#heightsearch").removeClass('active').css('z-index', '');*/
/* 				addList(res);*/
/* 			})*/
/* 		}*/
/* */
/* 		//下拉*/
/* 		// $('.select2').css('width', '200px').select2({*/
/* 		// 	allowClear: true*/
/* 		// })*/
/* 		// $('#select2-multiple-style .btn').on('click', function(e) {*/
/* 		// 	var target = $(this).find('input[type=radio]');*/
/* 		// 	var which = parseInt(target.val());*/
/* 		// 	if(which == 2)*/
/* 		// 		$('.select2').addClass('tag-input-style');*/
/* 		// 	else*/
/* 		// 		$('.select2').removeClass('tag-input-style');*/
/* 		// });*/
/* */
/* 		//时间插件*/
/* 		function time_plug() {*/
/* 			$('#templateCon .select2').css('width', '443px').select2({*/
/* 				allowClear: true*/
/* 			})*/
/* 			$('#select2-multiple-style .btn').on('click', function(e) {*/
/* 				var target = $(this).find('input[type=radio]');*/
/* 				var which = parseInt(target.val());*/
/* 				if(which == 2) $('.select2').addClass('tag-input-style');*/
/* 				else $('.select2').removeClass('tag-input-style');*/
/* 			});*/
/* */
/* 			cs.timeplug();*/
/* 		}*/
/* */
/* 		//添加*/
/* 		$('#add').click(function() {*/
/* 			showMark('#addPage');*/
/* 			$('#showBox .title').text('添加拜访');*/
/* 			//获取公司列表*/
/*             $('#templateCon #customer_name').html("<option value='0'> 请选择 </option>");*/
/*             $('#templateCon #customer_name').append(companieItem);*/
/* 			//cs.get_cus('#templateCon #customer_name');*/
/* */
/* 			//获取员工*/
/* 			// cs.getEmple('#templateCon #people');*/
/* 			//cs.getEmple('#templateCom .select2-search__field')*/
/* */
/* 			//填充服务项目*/
/* 			for(var i in serviceitems) {*/
/* 				if(serviceitems[i]) {*/
/* 					$('#templateCon select[data-id="product_id"]').append(new Option(serviceitems[i], i));*/
/* 				}*/
/* 			}*/
/* */
/* 			//填充协访人员*/
/* 			for(var i in employees) {*/
/* 				if(employees[i]) {*/
/* 					$('#templateCon #state').append(new Option(employees[i], i));*/
/* 					$('#templateCon [data-id="visit_id"]').append(new Option(employees[i], i));*/
/* 				}*/
/* 			}*/
/* */
/* 			time_plug();*/
/* */
/* 			var dataArr = {};*/
/* 			$('#templateCon .add').click(function() {*/
/* 				if(!cs.popValidate()) {*/
/* 					return;*/
/* 				}*/
/* */
/* 				$('#templateCon').find('input,select').each(function(i, e) {*/
/* 				    if($(this).attr('data-id') == "status" ){*/
/*                         dataArr[$(this).attr('data-id')] = $(this).val();*/
/* 					}else if(i == 6 || i == 5) {*/
/* 						dataArr[$(this).attr('data-id')] = new Date($(this).val()).getTime() / 1000;*/
/* 					} else if(i == 7 || i == 8) {*/
/* 						dataArr[$(this).attr('data-id')] = $(this).val();*/
/* 					} else {*/
/* 						dataArr[$(this).attr('data-id')] = $(this).val();*/
/* 					}*/
/* 				});*/
/* 				delete(dataArr[undefined]);*/
/* 				var helper_id = [];*/
/* */
/* 				$('#templateCon #state').select2('data').forEach(function(i) {*/
/* 					helper_id.push(i.id);*/
/* 				})*/
/*                 console.log(helper_id);*/
/*                 dataArr['helper_id'] = JSON.stringify(helper_id);*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_visit/add',*/
/* 					methods: 'post',*/
/* 					data: dataArr,*/
/* 					success: function(res) {*/
/* 						if(res.code == 200) {*/
/* 							ykp.prompt('添加成功!');*/
/* 							cs.close();*/
/* 							getList();*/
/* 						}*/
/* 					}*/
/* 				})*/
/* 			})*/
/* 		})*/
/* */
/* 		$('#changePageNum').change(function() {*/
/* 			pagesize = $(this).val();*/
/* 			ykp.setCookie('page_size', pagesize);*/
/* 			getList();*/
/* 		});*/
/* */
/* 		cs.custorm_check('#dynamic-table', '#dataList', false);*/
/* */
/* 		function getList(current) {*/
/* 			doSearch();*/
/* 			dohSearch();*/
/* 			current = current ? current : 1;*/
/* 			ykp.list({*/
/* 				url: '/api/api_visit/grid',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: pagesize,*/
/* 					filter: filter,*/
/* 					order: order*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(!res.data.items) {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt('暂无数据！');*/
/* 						}, 1000);*/
/* 						$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					} else {*/
/* 						addList(res);*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//数据处理*/
/* 		function addList(res) {*/
/* 			var data = res.data.items;*/
/* 			var html = '';*/
/* */
/* 			var styles = [];*/
/* 			$('.thColor th').not(':first').each(function(i, e) {*/
/* 				styles.push($(this).css('display'));*/
/* 			});*/
/* */
/* 			//协访人员*/
/* 			var assistance;*/
/* 			var _assistance = [];*/
/* 			var _assistance1 = [];*/
/*             var _assistance3 = [];*/
/*             var del_mark = cs.getNodes([293], true);*/
/*             var Status = ['已成交', '未成交', '已放弃', '已挂起'];*/
/* 			for(var i = 0; i < data.length; i++) {*/
/* 				assistance = data[i]['helper_list'] ? data[i]['helper_list'] : [];*/
/*                 _assistance3 = [];*/
/* 				for(var k in assistance) {*/
/* 					_assistance.push(assistance[k]['name']);*/
/* 					_assistance1.push(assistance[k]['id']);*/
/*                     _assistance3.push(assistance[k]['id']);*/
/* */
/* 				}*/
/* */
/* */
/*                 html += `<tr data-id="${data[i]['cwm_visit.id']}">*/
/* 							<td data-num="22">*/
/* 								<label class="pos-rel ">*/
/* 								<a> <span style="cursor: pointer" id="" title="详情" class="inFo btOrange"><i class="fa fa-info"></i></span></a>*/
/* 								<a href="javascript:;" class="_edit btBlue" title="编辑" contentAuthority="134" style="color:#fff !important"><i class="fa fa-pencil-square-o"></i></a>*/
/* 								<a href="javascript:void(0);" class="del" style="display:${del_mark ? "inline-block" : "none !important"}" contentAuthority="293" ><span class="btRed"><i class="fa fa-trash-o" title="删除"></i></span></a>*/
/* 								</lable>*/
/* 							</td>*/
/* 							<td data-num="1" style="display:${styles[0]}">*/
/* 								${data[i]['cwm_visit.id']}*/
/* 							</td>*/
/* 							<td data-num="2" style="display:${styles[1]}" data-cid="${data[i]['cwm_visit.customer_id']}">*/
/* 								<a href="javascript:;" class="customerDetail pos-rel" title="#333333">${companies[data[i]['cwm_visit.customer_id']]}</a>*/
/* 								<label class="pos-rel">*/
/* 				 				<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}" data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>*/
/* 			 				 </label>*/
/* 							</td>*/
/* 							<td class="" data-num="3" style="display:${styles[2]}">*/
/* 								${data[i]['cwm_visit.theme']}*/
/* 							</td>*/
/* 							<td class="center" data-num="4" style="display:${styles[3]}" data-product="${data[i]['cwm_visit.product_id']}">*/
/*                                     <span class="lbl">*/
/*                                     	${serviceitems[data[i]['cwm_visit.product_id']]}*/
/*                                     </span>*/
/* 							</td>*/
/* 							*/
/* 							<td class="center" data-num="5" style="display:${styles[4]}">*/
/* 								*/
/*                                     <span class="lbl">${data[i]['cwm_visit.desc']}</span>*/
/*                                 </label>*/
/* 							</td>*/
/* 							<td class="center" data-num="6" style="display:${styles[5]}" data-uid="${data[i]['cwm_visit.visit_id']}">*/
/* 								*/
/*                                     <span class="lbl">${employees[data[i]['cwm_visit.visit_id']]}</span>*/
/* 							</td>*/
/* 							<td class="center" data-num="7" style="display:${styles[6]}" data-status="${data[i]['cwm_visit.status']}">*/
/* 								*/
/*                                     <span class="lbl">${Status[data[i]['cwm_visit.status'] ]}</span>*/
/* 							</td>*/
/* 							<td class="center" data-num="8" data-state="${_assistance3}" style="display:${styles[7]}">*/
/* 								*/
/*                                     <span class="lbl">${_assistance.join(',')}</span>*/
/* 							</td>*/
/* 							<td class="center" data-num="9" style="display:${styles[8]}">*/
/* 								*/
/*                                     <span class="lbl">${employees[data[i]['cwm_visit.create_user']]}</span>*/
/* 							</td>*/
/* 							<td class="center" data-num="10" style="display:${styles[9]}">*/
/* 								*/
/*                                     <span class="lbl">${cs.getNowTime(data[i]['cwm_visit.create_time'],true)}</span>*/
/* 							</td>*/
/* 							<td class="center" data-num="11" style="display:${styles[10]}">*/
/* 								<span class="lbl">${data[i]['cwm_visit.update_time'] != 0 ? cs.getNowTime(data[i]['cwm_visit.update_time'],true) : ''}</span>*/
/* 							</td>*/
/* 							<td class="center" data-num="12" style="display:${styles[11]}">*/
/*                                    <span class="lbl">*/
/*                                    	 ${data[i]['cwm_visit.update_user'] != 0 ? employees[data[i]['cwm_visit.update_user']] : ''}*/
/*                                    </span>*/
/* 							</td>*/
/* 						</tr>`;*/
/* */
/* 				_assistance = [];*/
/* 			};*/
/* */
/* 			$('#dataList').html(html);*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/* 			cs.getNodes([134]);*/
/* 			custom.get_custom_info();*/
/* 			custom.showReamrk();*/
/* */
/* 			$('._edit').click(function() {*/
/* 				var dataArr = [];*/
/* 				$(this).parents('td').siblings().each(function(i) {*/
/* 					if(i < 11 && i > 0) {*/
/* 						if(i == 8) {*/
/* 							dataArr.push($(this).attr('data-istime'));*/
/* 						} else if(i == 9) {*/
/* 							dataArr.push($(this).attr('data-status'));*/
/* 						} else {*/
/* 							dataArr.push($(this).text().trim())*/
/* 						}*/
/* 					}*/
/* 				})*/
/*                 var parent = $(this).parents('tr');*/
/* 				var id = parent.attr('data-id');*/
/* 				var cid = parent.find('td').eq(2).attr('data-cid'); //公司id*/
/* 				var product = parent.find('td').eq(4).attr('data-product'); //服务项目*/
/* 				var uid = parent.find('td').eq(6).attr('data-uid'); //负责人*/
/*                 var status = parent.find('td').eq(7).attr('data-status'); //状态*/
/*                 var state = parent.find('td').eq(8).attr('data-state'); //协访人员*/
/* */
/* 				showMark('#addPage');*/
/* 				$('#showBox .title').text('编辑拜访');*/
/* 				//填充服务项目*/
/* 				for(var i in serviceitems) {*/
/* 					if(serviceitems[i]) {*/
/* 						$('#templateCon select[data-id="product_id"]').append(new Option(serviceitems[i], i));*/
/* 					}*/
/* 				}*/
/* */
/* 				//填充协访人员*/
/* 				for(var i in employees) {*/
/* 					if(employees[i]) {*/
/* 						$('#templateCon #state').append(new Option(employees[i], i));*/
/* 					}*/
/* 				}*/
/* */
/* 				$('#templateBox').find('input,select').each(function(i) {*/
/* 					if(i == 5 || i == 6) {*/
/* 						$(this).val(dataArr[i])*/
/* 					} else if(i == 6) {*/
/* 						$(this).find('option[value="' + dataArr[i] + '"]').attr('selected', true);*/
/* 					} else if(i == 4) {*/
/* 						//获取员工*/
/* 						// cs.getEmple('#templateCon #people',uid);*/
/* 						//填充协访人员*/
/* 						for(var i in employees) {*/
/* 							if(employees[i]) {*/
/* 								$('#templateCon #people').append(new Option(employees[i], i));*/
/* 							}*/
/* 							$('#templateCon #people').val(uid);*/
/* 						}*/
/* 					} else if(i == 0) {*/
/* 						//获取公司列表*/
/*                         $('#templateCon #customer_name').html("<option value='0'> 请选择 </option>");*/
/*                         $('#templateCon #customer_name').append(companieItem);*/
/* 						//cs.get_cus1('#templateCon #customer_name', cid);*/
/* */
/* 					} else if(i == 7) {*/
/* 						$(this).find('option[value="' + dataArr[i] + '"]').attr('selected', true);*/
/* 					} else if(i == 9) {*/
/* 						$(this).val(_assistance1).trigger('change');*/
/* 					} else if(i == 2) {*/
/* 						$(this).find('option[value=' + product + ']').attr('selected', true);*/
/* 					} else {*/
/* 						$(this).val(dataArr[i]);*/
/* 					}*/
/* 				})*/
/*                 $('#templateCon #customer_name').val(cid).change();*/
/*                 $('#templateCon #status').val(status).change();*/
/*                 $('#templateCon #state').val(state.split(',')).change();*/
/* */
/*                 var dataArr = {};*/
/* 				dataArr['id'] = id;*/
/* 				var dataArr = {};*/
/* 				$('#templateCon .add').click(function() {*/
/* 					if(!cs.popValidate()) {*/
/* 						return;*/
/* 					}*/
/* 					$('#templateCon').find('input,select').each(function(i, e) {*/
/*                         if($(this).attr('data-id') == "status" ){*/
/*                             dataArr[$(this).attr('data-id')] = $(this).val();*/
/*                         }else if(i == 6 || i == 5) {*/
/* 							dataArr[$(this).attr('data-id')] = new Date($(this).val()).getTime() / 1000;*/
/* 						} else if(i == 7 || i == 8) {*/
/* 							dataArr[$(this).attr('data-id')] = $(this).val();*/
/* 						} else {*/
/* 							dataArr[$(this).attr('data-id')] = $(this).val();*/
/* 						}*/
/* 					});*/
/* 					var helper_id = [];*/
/* 					$('#templateCon #state').select2('data').forEach(function(i) {*/
/* 						helper_id.push(i.id);*/
/* 					})*/
/* 					dataArr.id = id;*/
/* 					dataArr['helper_id'] = JSON.stringify(helper_id);*/
/* */
/* 					ykp.doAjax({*/
/* 						url: '/api/api_visit/edit',*/
/* 						methods: 'post',*/
/* 						data: dataArr,*/
/* 						success: function(res) {*/
/* 							if(res.code == 200) {*/
/* 								ykp.prompt('编辑成功!');*/
/* 								cs.close();*/
/* 								getList();*/
/* 							}*/
/* 						}*/
/* 					})*/
/* */
/* 				})*/
/* */
/* 				time_plug();*/
/* 			})*/
/* */
/* */
/*             $('.del').click(function() {*/
/*                 var id = $(this).parents('tr').attr('data-id');*/
/*                 layui.use('layer',function() {*/
/*                     layui.layer.confirm('确认删除吗?', function(index){*/
/*                         ykp.doAjax({*/
/*                             url:'/api/api_visit/del',*/
/*                             methods:"post",*/
/*                             data:{*/
/*                                 id:id*/
/*                             },*/
/*                             success:function(res) {*/
/*                                 ykp.prompt('删除成功');*/
/*                                 getList();*/
/*                                 layer.closeAll();*/
/*                             }*/
/*                         })*/
/*                     });*/
/*                 })*/
/* */
/*             })*/
/* */
/* */
/* */
/* */
/*             $('.inFo').click(function() {*/
/*                 var dataArr = [];*/
/*                 $(this).parents('td').siblings().each(function(i) {*/
/*                     if(i >= 0) {*/
/* 						dataArr.push($(this).text().trim())*/
/*                     }*/
/*                 })*/
/*                 showMark('#dtlPage');*/
/*                 $('#showBox .title').text('拜访详情');*/
/*                $("#templateBox").find("input").each(function () {*/
/* 				   switch ($(this).attr("title")){*/
/* 					   case "company":*/
/* 					       $(this).val(dataArr[1]);*/
/* 					       break;*/
/* 					   case "numbers":*/
/*                            $(this).val(dataArr[0]);*/
/* 					       break;*/
/* 					   case "theme":*/
/*                            $(this).val(dataArr[2]);*/
/* 					       break*/
/*                        case "serviceItem":*/
/*                            $(this).val(dataArr[3]);*/
/*                            break;*/
/*                        case "desc":*/
/*                            $(this).val(dataArr[4]);*/
/*                            break;*/
/*                        case "visit_id":*/
/*                            $(this).val(dataArr[5]);*/
/*                            break*/
/*                        case "status":*/
/*                            $(this).val(dataArr[6]);*/
/*                            break;*/
/*                        case "helper_id":*/
/*                            $(this).val(dataArr[7]);*/
/*                            break;*/
/*                        case "createBy":*/
/*                            $(this).val(dataArr[8]);*/
/*                            break*/
/*                        case "updateBy":*/
/*                            $(this).val(dataArr[11]);*/
/*                            break;*/
/*                        case "createAt":*/
/*                            $(this).val(dataArr[9]);*/
/*                            break;*/
/*                        case "updateAt":*/
/*                            $(this).val(dataArr[10]);*/
/*                            break*/
/* */
/* 				   }*/
/*                })*/
/* */
/*             })*/
/* 		}*/
/* 	})*/
/* </script>*/
