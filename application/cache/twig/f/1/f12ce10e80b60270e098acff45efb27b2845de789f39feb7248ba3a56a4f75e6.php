<?php

/* admin/platform/opportunity.html */
class __TwigTemplate_5db308d4ea8aff4541323f93b84d3e2287b312e9568da13de5757067bb054f84 extends Twig_Template
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
\t\twidth: 110px;
\t}
\t
\t#templateCon input,
\tinput {
\t\twidth: 180px;
\t}
\t
\t.star-off-png {
\t\tcolor: #FEB902;
\t}
\t#templateBox input{height:30px;width:180px;padding-left:5px;}
\t.select2-container, .select2-container--default, .select2-container--below, .select2-container--focus {
\t\tmargin-right: 5px;
\t}
\t#heightsearch1 .select2-container, #heightsearch1 .select2-container--default,#heightsearch1 .select2-container--below,#heightsearch1 .select2-container--focus {
\t\tmargin-right: 0;
\t}
</style>
<div class=\"widget-main\" style=\"padding-bottom:0;\">
\t<div class=\"row\" id=\"topTool\" style=\"position:relative;\">
\t\t<!-- <h3 class=\"header smaller lighter blue\">商机</h3> -->
\t\t<!--普通搜索-->
\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t<input type=\"text\" pts=0 sear=\"cwm_opportunity.customer_name\" placeholder=\"企业名称\" style=\"width:180px;\"/>
\t\t</div>
\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t<input type=\"text\" pts=0 sear=\"cwm_opportunity.name\" placeholder=\"商机名称\" style=\"width:180px;\" />
\t\t</div>
\t\t<div class=\"col-sx-4\" style=\" float: left\">
\t\t\t<select style=\"width: 180px\" pts=3 class=\"advandced-search select2-hidden-accessible\" sear=\"cwm_opportunity.master_user\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t<option value=\"\">负责人 </option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"col-sx-4\" style=\" float: left\">
\t\t\t<select style=\"width: 180px\"  pts=3 class=\"advandced-search select2-hidden-accessible\" sear=\"cwm_opportunity.create_user\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t<option value=\"\">创建人 </option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"col-sx-4\" style=\" float: left\">
\t\t\t<select style=\"width: 180px\" pts=3  class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" sear=\"cwm_opportunity.last_modify_user\" aria-hidden=\"true\">
\t\t\t\t<option value=\"\"> 最后修改人 </option>
\t\t\t</select>
\t\t</div>
\t\t<!--<div class=\"col-sx-4\" style=\" float: left\">
\t\t\t<select style=\"width: 180px\" pts=3  class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" sear=\"cwm_opportunity.last_master_user\"  aria-hidden=\"true\">
\t\t\t\t<option value=\"\">前负责人 </option>
\t\t\t</select>
\t\t</div>-->
\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t<button type=\"button\" id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
                <i class=\"fa fa-search\"></i>
            </button>
\t\t</div>
\t\t<div class=\"col-sx-4\" style=\" float: left;  margin-right: 5px; \">
\t\t\t<button id=\"heightsearch\" title=\"高级搜索\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
                <i class=\"fa fa-filter\"></i>
            </button>
\t\t</div>
\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t<button id=\"flush\" type=\"button\" title=\"刷新\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
                <i class=\"fa fa-refresh\"></i>
            </button>
\t\t</div>
\t\t<div contentAuthority=\"131\" class=\"col-sx-4\" style=\" float: left;  margin-right: 5px; \">
\t\t\t<button id=\"add\" type=\"button\" title=\"添加\" class=\"btn addBtn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;border-color: #32CD32 !important;\">
                <i class=\"fa fa-plus\"></i>
            </button>
\t\t</div>
        <div class=\"col-sx-4\" contentAuthority=\"300\" style=\" float: left; margin-right: 5px;\">
             <button type=\"button\"  title=\"导出\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"exportfile moveToClue btn addBtn btn-info btn-sm position-relative\">
                 <i class=\"fa fa-sign-out\"></i>
             </button>
        </div>

\t\t<!-- //高级搜索 -->
\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"margin-top:30px;position: absolute; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>企业名称</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"cwm_opportunity.customer_name\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>预计成交日期</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t</select>
\t\t\t\t\t <div class=\"input-group\"  style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\"  data-status=\"rangtime\" gjs=0 sear=\"cwm_opportunity.oppo_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>商机金额</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t<option> ></option>
\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t</select>
\t\t\t\t\t<input type=\"text\" gjs=0 id=\"\" sear=\"cwm_opportunity.price\" data-type=\"gj\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>商机状态</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select gjs=1 style=\"width: 180px\" sear=\"cwm_opportunity.status\" data-type=\"gj\">
\t\t\t\t\t\t<option value=\"\">  请选择  </option>
\t\t\t\t\t\t<option value=\"0\">未成交</option>
\t\t\t\t\t\t<option value=\"1\">已成交</option>
\t\t\t\t\t\t<option value=\"2\">已放弃</option>
\t\t\t\t\t</select>
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>备注</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"cwm_opportunity.remark\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>签单可能性</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select gjs=1 style=\"width: 180px\" sear=\"cwm_opportunity.possibility\" data-type=\"gj\">
\t\t\t\t\t\t<option value=\"\">  请选择 </option>
\t\t\t\t\t\t<option value=\"0\">0%</option>
\t\t\t\t\t\t<option value=\"0.2\">20%</option>
\t\t\t\t\t\t<option value=\"0.4\">40%</option>
\t\t\t\t\t\t<option value=\"0.6\">60%</option>
\t\t\t\t\t\t<option value=\"0.8\">80%</option>
\t\t\t\t\t\t<option value=\"1\">100%</option>
\t\t\t\t\t</select>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>商机来源</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select sear=\"cwm_opportunity.source\" style=\"width: 180px\" gjs=0 data-type=\"gj\">
\t\t\t\t\t\t<option value=\"\">  请选择  </option>
<!-- \t\t\t\t\t\t<option value=\"1\"> 线上 </option>
\t\t\t\t\t\t<option value=\"2\"> 线下 </option> -->
\t\t\t\t\t\t<option value=\"1\">转介绍</option>
\t\t\t\t\t\t<option value=\"2\">电话咨询</option>
\t\t\t\t\t\t<option value=\"3\">线上注册</option>
\t\t\t\t\t\t<option value=\"4\">客户上门</option>
\t\t\t\t\t\t<option value=\"5\">陌生拜访</option>
\t\t\t\t\t\t<option value=\"6\">公司资源</option>
\t\t\t\t\t\t<option value=\"7\">个人资源</option>
\t\t\t\t\t\t<option value=\"8\">广告宣传</option>
\t\t\t\t\t\t<option value=\"9\">电话营销</option>
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>负责人</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" gjs=0 data-type=\"gj\" sear=\"cwm_opportunity.master_user\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\">  请选择 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>创建人</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\" gjs=0 data-type=\"gj\" 
\t\t\t\t\tsear=\"cwm_opportunity.create_user\">
\t\t\t\t\t\t<option value=\"\">  请选择 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>创建时间</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group\"  style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\"  data-status=\"rangtime\" gjs=0 sear=\"cwm_opportunity.create_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>最后修改人</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\" data-type=\"gj\" gjs=0 sear=\"cwm_opportunity.create_user\">
\t\t\t\t\t<option value=\"\">  请选择 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>最后修改时间</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group\"  style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\"  data-status=\"rangtime\" gjs=0 sear=\"cwm_opportunity.last_modify_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style=\"text-align:center;clear:both;padding-top:10px; \">
\t\t\t\t\t<button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
\t\t                        查询
\t\t                    </button>
\t\t\t\t\t<button type=\"button\" id=\"rest\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t                       重置
\t\t\t\t\t\t\t\t                    </button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"row\" style=\"padding:0 20px;\">
\t<div class=\"custom_table\">
\t\t<table id=\"dynamic-table\">
\t\t\t<thead>
\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t<th data-num=\"22\">操作</th>
\t\t\t\t\t<th data-num=\"1\">商机名称</th>
\t\t\t\t\t<th data-num=\"2\">企业名称</th>
\t\t\t\t\t<th data-num=\"4\">预计成交日期</th>
\t\t\t\t\t<th data-num=\"5\" style=\"text-align: right !important;\">商机金额(元)</th>
\t\t\t\t\t<th data-num=\"6\">商机状态</th>
\t\t\t\t\t<th data-num=\"7\">备注</th>
\t\t\t\t\t<th data-num=\"8\">签单可能性</th>
\t\t\t\t\t<th data-num=\"10\">商机来源</th>
\t\t\t\t\t<th data-num=\"14\">负责人</th>
\t\t\t\t\t<th data-num=\"16\">创建人</th>
\t\t\t\t\t<th data-num=\"17\">创建时间</th>
\t\t\t\t\t<th data-num=\"18\">最后修改人</th>
\t\t\t\t\t<th data-num=\"19\">最后修改时间</th>
\t\t\t\t</tr>
\t\t\t</thead>

\t\t\t<tbody id=\"dataList\">

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
</div>
<div id=\"addPage\" style=\"display: none;\">
\t<div style=\"margin-top:15px;\">
\t\t<label><i class='reqired_label'>*</i> 商机名称： </label>
\t\t<span class=\"input-icon\">
                    <input search type=\"text\" data-id=\"name\" id=\"name\" class=\"required\" msg=\"商机名称不能为空\">
                </span>
\t\t<label><i class='reqired_label'>*</i> 企业名称： </label>
\t\t<span class=\"input-icon\">
\t\t\t\t\t<select class=\"required\" msg=\"公司不能为空\" search type=\"text\" data-id=\"customer_id\" id=\"customer_name\" style=\"width: 180px;\">
\t\t\t\t\t\t<option value=\"\">请选择公司</option>
\t\t\t\t\t</select>
                    <!--<input search  class=\"required\" msg=\"公司名称不能为空\" type=\"text\" data-id=\"customer_name\" id=\"customer_name\">-->
                </span>
\t</div>
\t<div style=\"margin-top:15px;\">
\t\t<label><i class='reqired_label'>*</i>预计成交日期： </label>
\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t<input class=\"date-timepicker1 required\" msg=\"预计成交日期不能为空\" data-id=\"oppo_time\" style=\"height: 30px; width: 150px;\">
\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
\t\t\t\t\t\t<i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t\t\t\t</span>
\t\t</div>
\t\t<label> <i class='reqired_label'>*</i>商机金额： </label>
\t\t<span class=\"input-icon\">
                    <input search type=\"text\"  data-id=\"price\" id=\"monry\" class=\"required\" msg=\"商机金额不能为空\">
                </span>
\t</div>
\t<div style=\"margin-top:15px;\">

\t\t<label> 商机状态： </label>
\t\t<select class=\"required\" data-id=\"status\" msg=\"请选择商机状态\" style=\"width:183px;\">
\t\t\t<option value=\"\">  请选择 </option>
\t\t\t<option selected value=\"0\">未成交</option>
\t\t\t<option value=\"1\">已成交</option>
\t\t\t<option value=\"2\">已挂起</option>
\t\t\t<option value=\"3\">已放弃</option>
\t\t</select>
\t\t<label><i class='reqired_label'>*</i> 备注： </label>
\t\t<span class=\"input-icon\">
                    <input class=\"required\" msg=\"备注不能为空\" search type=\"text\" data-id=\"remark\">
                </span>
\t</div>
\t<div style=\"margin-top:15px;\">
\t\t
\t\t<label> 签单可能性： </label>
\t\t<div class=\"rating inline\" style=\"cursor: pointer;display:inline-block;width:180px;position:relative;top:3px;\">
\t\t</div>
\t\t<label> 商机来源： </label>
\t\t<select style=\"width:180px;\" data-id=\"source\" class=\"required\" msg=\"商机来源不能为空\">
\t\t\t<option value=\"\">请选择 </option>
<!-- \t\t\t<option value=\"1\">线上</option>
\t\t\t<option value=\"2\">线下</option> -->
\t\t\t<option value=\"1\">转介绍</option>
\t\t\t<option value=\"2\">电话咨询</option>
\t\t\t<option value=\"3\">线上注册</option>
\t\t\t<option value=\"4\">客户上门</option>
\t\t\t<option value=\"5\">陌生拜访</option>
\t\t\t<option value=\"6\">公司资源</option>
\t\t\t<option value=\"7\">个人资源</option>
\t\t\t<option value=\"8\">广告宣传</option>
\t\t\t<option value=\"9\">电话营销</option>
\t\t</select>
\t</div>
\t<div style=\"margin-top:15px;\">
\t\t<label> <i class='reqired_label'>*</i>负责人： </label>
\t\t<span class=\"input-icon\">
\t\t\t<select id=\"people\"  class=\"required\" msg=\"负责人不能为空\" search type=\"text\" data-id=\"master_user\" style=\"width:180px;\">
\t\t\t\t<option value=\"\">请选择负责人</option>
\t\t\t</select>
\t\t</span>
\t</div>
\t<div style=\"text-align:center;margin-top:15px;\">
\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
\t\t<button class=\"sure_button add\">
                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                        保存
                    </button>
\t</div>
</div>

<div id=\"dtlPage\" style=\"display: none;\">
\t<div class=\"row\">
\t\t<form class=\"item_form\" role=\"form\">
\t\t\t<div class=\"form_data\">
\t\t\t\t<label>商机名称：</label>
\t\t\t\t<input disabled title=\"1\" />
\t\t\t\t<label>企业名称：</label>
\t\t\t\t<input disabled title=\"2\" />
\t\t\t</div>
\t\t\t<div class=\"form_data\">
\t\t\t\t<label>预计成交日期：</label>
\t\t\t\t<input disabled title=\"4\" />
\t\t\t\t<label> 商机金额（元）： </label>
\t\t\t\t<input disabled title=\"5\" />
\t\t\t</div>
\t\t\t<div class=\"form_data\">
\t\t\t\t<label>商机状态：</label>
\t\t\t\t<input disabled title=\"6\" />
\t\t\t\t<label>备注： </label>
\t\t\t\t<input disabled title=\"7\" />
\t\t\t</div>
\t\t\t<div class=\"form_data\">
\t\t\t\t<label> 签单可能性： </label>
\t\t\t\t<input disabled title=\"8\" />
\t\t\t\t<label> 商机来源： </label>
\t\t\t\t<input disabled title=\"10\" />
\t\t\t</div>
\t\t\t<div class=\"form_data\">
\t\t\t\t<label> 负责人： </label>
\t\t\t\t<input disabled title=\"14\" />
\t\t\t\t<label> 创建人： </label>
\t\t\t\t<input disabled title=\"16\" />
\t\t\t</div>
\t\t\t<div class=\"form_data\">
\t\t\t\t<label> 创建时间： </label>
\t\t\t\t<input disabled title=\"17\" />
\t\t\t\t<label> 最后修改人： </label>
\t\t\t\t<input disabled title=\"18\" />
\t\t\t</div>
\t\t\t<div class=\"form_data\">
\t\t\t\t<label> 最后修改时间： </label>
\t\t\t\t<input disabled title=\"19\" />
\t\t\t</div>
\t\t</form>

\t</div>
</div>

";
        // line 409
        $this->loadTemplate("admin/customerDetail.html", "admin/platform/opportunity.html", 409)->display($context);
        // line 410
        $this->loadTemplate("admin/mark.html", "admin/platform/opportunity.html", 410)->display($context);
        echo " 
<!--</div>
-->
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script>
\tjQuery(function(\$) {
\t\tcs.getNodes([131]);
\t\tcs.dataRang();
\t\tvar page_size = 10;
\t\tvar order = 'cwm_opportunity.id desc';
\t\tvar filter = '';
\t\tvar aid_2 = ykp.getCookie(\"aid_2\");
\t\tvar time = ykp.getCookie(\"time\");
\t\tvar employees = {};

        //导出功能
        cs.exportFile({
            url:\"/api/api_opportunity/export\",
            title:\"商机列表\"
        });
\t\t//获取所有员工
\t\tykp.doAjax({
\t\t\tasync:false,
\t\t\turl: '/api/api_employees/f7',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tselect: 'bmm_employees.id,bmm_employees.name,bmm_department.name as department_name,bmm_department.id as department_id'
\t\t\t},
\t\t\tsuccess: function(res) {
\t\t\t\tvar data = res.data;
\t\t\t\t \$('.advandced-search').css('margin-right','5px').select2({allowClear:true});
\t\t\t\tfor(var i in data){
\t\t\t\t\tif(data[i]['name']) {
\t\t\t\t\temployees[data[i]['id']] = {name:data[i]['name'],department_name:data[i]['department_name'],department_id:data[i]['department_id']};
\t\t\t\t\t \$('.advandced-search').append(new Option(data[i]['name'],data[i]['id']));
\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t});
\t\t
\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_opportunity/grid',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: filter,
\t\t\t\tlimit: page_size,
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '.pageBar'
\t\t\t},
\t\t\tcontentId: \"#datalist\",
\t\t\tdefaultOrder: order,
\t\t\tinitOrder: \"\", //初始化sort
\t\t\tdefaultOrder: order,
\t\t\tparams: [{
\t\t\t\tid: \"#dynamic-table\",
\t\t\t\tfield: [\"\",\"cwm_opportunity.name\", \"cwm_opportunity.customer_id\", \"cwm_opportunity.oppo_time\", \"cwm_opportunity.price\", \"cwm_opportunity.status\", \"cwm_opportunity.remark\",
\t\t\t\t\t\"cwm_opportunity.possibility\",\"cwm_opportunity.source\",\"cwm_opportunity.master_user\",\"cwm_opportunity.create_user_name\",\"cwm_opportunity.create_time\",\"cwm_opportunity.last_modify_user\",\"cwm_opportunity.last_modify_time\"]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});

\t\tykp.doAjax({
\t\t\turl: '/api/api_department/index',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tselect: 'bmm_department.name,bmm_department.id',
\t\t\t\tlimit:999,
\t\t\t\tfilter:'bmm_department.is_del=0'
\t\t\t},
\t\t\tsuccess: function(res) {
\t\t\t\tvar data = res.data.items;
\t\t\t\t \$('.advandced-search2').css('margin-right','5px').select2({allowClear:true});
\t\t\t\tfor(var i in data){
\t\t\t\t\t \$('.advandced-search2').append(new Option(data[i]['name'],data[i]['id']));
\t\t\t\t}
\t\t\t}
\t\t});

\t\tif(time != \"\" && time != undefined) {
\t\t\tvar timestamp = ''; //条件
\t\t\tvar today = (new Date().setHours(0, 0, 0, 0) / 1000) //今天零点的时间戳
\t\t\tvar day_1 = cs.getNowTime(Date.parse(new Date()) / 1000).substr(-2) - 1; //距离本月1号有多少天
\t\t\tvar lastmonthday_1 = cs.getNowTime(Date.parse(new Date()) / 1000);
\t\t\tvar newday = lastmonthday_1.substring(0, 4) + '-' + (lastmonthday_1.substring(5, 7) - 1) + '-01';
\t\t\tif(lastmonthday_1.substring(5, 7) == 1) {
\t\t\t\tnewday = (lastmonthday_1.substring(0, 4) - 1) + '-12-01';
\t\t\t}
\t\t\tvar newdaytime = Date.parse(new Date(newday)) / 1000; //上个月1号的时间戳
\t\t\tswitch(time) {
\t\t\t\tcase '1':
\t\t\t\t\ttimestamp = `cwm_opportunity.create_time>\${today}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '2':
\t\t\t\t\ttimestamp = `cwm_opportunity.create_time<\${today} and cwm_opportunity.create_time>\${today-86400}`
\t\t\t\t\tbreak;
\t\t\t\tcase '3':
\t\t\t\t\ttimestamp = `cwm_opportunity.create_time>\${today-86400*6}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '4':
\t\t\t\t\ttimestamp = `cwm_opportunity.create_time>\${today-86400*29}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '5':
\t\t\t\t\ttimestamp = `cwm_opportunity.create_time>\${today-86400*day_1}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '6':
\t\t\t\t\ttimestamp = `cwm_opportunity.create_time<\${today-86400*day_1} and cwm_opportunity.create_time>\${newdaytime}`;
\t\t\t\t\tbreak;
\t\t\t}
\t\t\tvar data = `cwm_opportunity.create_user=\${aid_2} and \${timestamp}`;
\t\t\tif(aid_2 == '' || aid_2 == undefined) {
\t\t\t\tdata = `\${timestamp}`
\t\t\t}
\t\t\tykp.list({
\t\t\t\turl: '/api/api_opportunity/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: page_size,
\t\t\t\t\tfilter: data
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\t setTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
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
\t\t\t//获取列表数据
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetList();
\t\t}
\t\t//getList();
\t\t
\t\t\$('#flush').click(function(){
\t\t\tfilter = '';\t
\t\t\t\$('[ps=0]').val('');
\t\t\t\$('[sear=\"cwm_opportunity.master_user\"]').val('').trigger('change');
\t\t\t\$('[sear=\"cwm_opportunity.create_user\"]').val('').trigger('change');
\t\t\t\$('[sear=\"cwm_opportunity.last_modify_user\"]').val('').trigger('change');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetList();
\t\t})

\t\t
\t\t//普通搜索
\t\tfunction doSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_opportunity/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: page_size,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}
\t\t\tcs.doSearch('#search', data, 'filter', false, function(res,_filter) {
\t\t\t\tfilter = _filter;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t setTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t} else {
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//高级搜索显示 & 隐藏
\t\t\$('.in').click(function() {
\t\t\tif(\$('#heightsearch').hasClass('active')) {
\t\t\t\t\$('#heightsearch').removeClass('active');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\tcs.timeplug();
\t\t\t}
\t\t});

\t\t\$('#heightsearch').click(function() {
\t\t\tif(\$(this).hasClass('active')) {
\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\$(this).removeClass('active');
\t\t\t\t\$(\"#heightsearch\").css('z-index',0);
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t} else {
\t\t\t\t\$('.in').addClass('modal-backdrop');
\t\t\t\t\$(\"#heightsearch1\").slideDown();
\t\t\t\t\$(\"#heightsearch\").css('z-index',1049);
\t\t\t\t\$(this).attr('class', 'btn btn-info btn-sm active')
\t\t\t\tcs.rest(false, '#heightsearch1');
\t\t\t\tcs.timeplug();
\t\t\t}
\t\t})

\t\t//高级搜索
\t\tfunction advancedSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_opportunity/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: page_size,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}

\t\t\tcs.hSearch('#search1', data, 'filter', false, function(res, filter) {
\t\t\t\tfilter = filter;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\t\$(\"#heightsearch\").removeClass('active');
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\$(\"#heightsearch\").css('z-index',0);
\t\t\t\t\$(\"#heightsearch\").removeClass('active');
\t\t\t\taddList(res);
\t\t\t})
\t\t}

\t\t//切换每页显示的条目数
\t\t\$('#changePageNum').change(function() {
\t\t\tpagesize = \$(this).val();
\t\t\tykp.setCookie('page_size',pagesize);
\t\t\tgetList();
\t\t})

\t\t//切换负责人，所属部门改变
\t\tfunction changeLeader(el1,el2){
\t\t\t\$(el1).change(function(){
\t\t\t\t\$(el2).val(\$(this).find('option:selected').attr('department')).attr('department-id',\$(this).find('option:selected').attr('department-id'));
\t\t\t});
\t\t}

\t\t//添加
\t\t\$('#add').click(function() {
\t\t\tshowMark('#addPage');
\t\t\t\$('#showBox .title').text('添加商机');

\t\t\t\$('#templateCon .edit_show').hide();

\t\t\tcs.get_cus2('#templateBox #customer_name')
\t\t\tcs.getEmple('#templateBox #people',ykp.getCookie('uid'),'#templateCon #department');

\t\t\t//切换负责人，所属部门改变
\t\t\tchangeLeader('#templateCon #people','#templateCon #department');

\t\t\tplugs();

\t\t\t\$('#templateBox .add').click(function() {
\t\t\t\tif(!cs.popValidate()) {
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tvar postData = {};
\t\t\t\t\$('#templateBox').find('[data-id]').not(':hidden').each(function(i, e) {
\t\t\t\t\tif(\$(this).attr('data-id') == 'oppo_time' || \$(this).attr('data-id') == 'get_time' || \$(this).attr('data-id') == 'next_time'){
\t\t\t\t\t\tpostData[\$(this).attr('data-id')] = new Date(\$(this).val()) / 1000;
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr('data-id') == 'master_department'){
\t\t\t\t\t\tpostData[\$(this).attr('data-id')] = \$(this).attr('department-id');
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\tpostData[\$(this).attr('data-id')] = \$(this).val();
\t\t\t\t});
\t\t\t\t
\t\t\t\tpostData['possibility'] = \$('#templateCon [name=\"score\"]').val();
\t\t\t\tpostData['customer_id'] = \$('#templateBox #customer_name').select2('data')[0].id;
\t\t\t\tpostData['customer_name'] = \$('#templateBox #customer_name').select2('data')[0].text;
\t\t\t\t
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_opportunity/add',
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tdata: postData,
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tif(res.code == 200) {
\t\t\t\t\t\t\tykp.prompt('添加成功!');
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})

\t\t\t//时间插件
\t\t\tcs.timeplug();
\t\t})
\t\tfunction getList() {
\t\t\tadvancedSearch();
\t\t\tdoSearch();
\t\t\tykp.list({
\t\t\t\turl: '/api/api_opportunity/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: page_size,
\t\t\t\t\tfilter: filter,
\t\t\t\t\torder: order
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\t setTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
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
\t\t\tvar _data = [];
\t\t\tvar html = '';
\t\t\tvar visterStatus = ['未成交' ,'已成交' ,'已挂起','已放弃'];
\t\t\tvar xin = [];
\t\t\tvar content = '';
\t\t\tvar styles = [];
            var del_mark = cs.getNodes([292], true);
            \$('#dynamic-table th').each(function(i,e){
\t\t\t\tstyles.push(\$(this).css('display'));
\t\t\t});
            for(var i = 0; i < data.length; i++) {
\t\t\t\t// console.log(employees);
\t\t\t\tvar source_name = '';
\t\t\t\tswitch(data[i]['cwm_opportunity.source']){
\t\t\t\t\tcase '1':
\t\t\t\t\t\tsource_name = '转介绍';
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '2':
\t\t\t\t\t\tsource_name = '电话咨询';
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '3':
\t\t\t\t\t\tsource_name = '线上注册';
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '4':
\t\t\t\t\t\tsource_name = '客户上门';
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '5':
\t\t\t\t\t\tsource_name = '陌生拜访';
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '6':
\t\t\t\t\t\tsource_name = '公司资源';
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '7':
\t\t\t\t\t\tsource_name = '个人资源';
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '8':
\t\t\t\t\t\tsource_name = '广告宣传';
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '9':
\t\t\t\t\t\tsource_name = '电话营销';
\t\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\thtml += `<tr data-id=\${data[i]['cwm_opportunity.id']}>
\t\t\t\t\t\t\t\t<td data-num=\"22\">
\t\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t\t\t<a> <span style=\"cursor: pointer\" id=\"\" title=\"详情\" class=\"inFo btOrange\"><i class=\"fa fa-info\"></i></span></a>
                                    <a href=\"#\" class=\"_edit btBlue\" style=\"position:relative; color:#fff !important\" title=\"编辑\" contentAuthority=\"132\"><i class=\"fa fa-pencil-square-o\"></i></a>
                                   \t<a href=\"#\" class=\"del btRed\" style=\"display:\${del_mark ? \"inline-block\" : \"none\"}\" contentAuthority=\"292\" title=\"删除\"><i class=\"fa fa-trash-o\"></i></a>
                                    </label>
                                </td>
                                <td data-num=\"1\" style=\"display:\${styles[1]}\" data-con=\"\${data[i]['cwm_opportunity.cid']}\">
                                    \${data[i]['cwm_opportunity.name']}
                                </td>
                                <td data-num=\"2\" style=\"display:\${styles[2]}\" data-con=\"\${data[i]['cwm_opportunity.customer_id']}\" data-cid=\"\${data[i]['cwm_opportunity.customer_id']}\">
                                    <a class=\"customerDetail pos-rel\" href=\"#\">\${data[i]['cwm_opportunity.customer_name']}</a>
                                    <label class=\"pos-rel\">
\t\t\t\t \t\t\t\t<i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data[i]['Remark'].length > 0 ? 'red' : ''}\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i>
\t\t\t \t\t\t\t </label>
                                </td>
                                <td class=\"center\" data-num=\"4\" style=\"display:\${styles[3]}\" data-con=\"\${data[i]['cwm_opportunity.oppo_time']}\">
                                       \${cs.getNowTime(data[i]['cwm_opportunity.oppo_time'])}
                                </td>
\t\t\t\t\t\t\t\t
                                <td class=\"center\" data-num=\"5\" style=\"display:\${styles[4]};text-align: right !important; \" data-con=\"\${data[i]['cwm_opportunity.price']}\">
                                        \t \${data[i]['cwm_opportunity.price']}
                                     
                                </td>
                                <td class=\"center\" data-num=\"6\" style=\"display:\${styles[5]}\" data-con=\"\${data[i]['cwm_opportunity.status']}\">
                                    \${visterStatus[data[i]['cwm_opportunity.status']]}
                                </td>

                                <td class=\"center\" data-num=\"7\" style=\"display:\${styles[6]}\" data-con=\"\${data[i]['cwm_opportunity.remark']}\">
                                      
                                        \t \${data[i]['cwm_opportunity.remark']}
                                     
                                </td>
                                <td class=\"center\" data-num=\"8\" style=\"display:\${styles[7]}\" data-con=\"\${data[i]['cwm_opportunity.possibility']}\">
                                    \${((data[i]['cwm_opportunity.possibility']/5)*100).toFixed(2)+\"%\"}
                                       
                                </td>
                                <td class=\"center\" data-num=\"10\" style=\"display:\${styles[9]}\" data-con=\"\${source_name}\">
                                       
                                        \t\${source_name}
                                       
                                </td>
                                <td class=\"center\" data-num=\"14\" style=\"display:\${styles[13]}\" data-con=\"\${data[i]['cwm_opportunity.master_user']}\">
                                       
                                        \t\${data[i]['mast_info'] ? data[i]['mast_info']['name'] : ''}
                                        
                                </td>
                                <td class=\"center\" data-num=\"16\" style=\"display:\${styles[17]}\" data-con=\"\${data[i]['cwm_opportunity.create_user_name']}\">

                                        \${employees[data[i]['cwm_opportunity.create_user']] ? employees[data[i]['cwm_opportunity.create_user']]['name'] ? employees[data[i]['cwm_opportunity.create_user']]['name']: '' :''}

                                </td>
                                <td class=\"center\" data-num=\"17\" style=\"display:\${styles[18]}\" data-con=\"\${data[i]['cwm_opportunity.create_time']}\">
                                       
                                        \t\${cs.getNowTime(data[i]['cwm_opportunity.create_time'],true)}
                                       
                                </td>
                                <td class=\"center\" data-num=\"18\" style=\"display:\${styles[19]}\" data-con=\"\${data[i]['cwm_opportunity.last_modify_user']}\">

                                       \${data[i]['cwm_opportunity.last_modify_user']&&data[i]['cwm_opportunity.last_modify_user'] !=0 ? employees[data[i]['cwm_opportunity.last_modify_user']] ? employees[data[i]['cwm_opportunity.last_modify_user']]['name'] : '' :\"\"}
                                       
                                </td>
                                <td class=\"center\" data-num=\"19\" style=\"display:\${styles[20]}\" data-con=\"\${data[i]['cwm_opportunity.last_modify_time']}\">
                                       
                                        \${cs.getNowTime(data[i]['cwm_opportunity.last_modify_time'],true)}
                                </td>
                                
                            </tr>`;

\t\t\t}
\t\t\t\$('#dataList').html(html);
\t\t\t// console.log(\$('#remark').html())
\t\t\tcustom.showReamrk();
\t\t\t\$('[data-rel=tooltip]').tooltip(); //企业名称标签
\t\t\tcs.getNodes([132]);
\t\t\t
\t\t\teditOpportunity(data);
\t\t\tcustom.get_custom_info();
\t\t}



\t\t//编辑商机
\t\tfunction editOpportunity(data) {
\t\t\t\$('._edit').click(function() {
                var parent = \$(this).parents('tr');
                var id = parent.attr('data-id'); //商机id
                var cid = parent.find('td').eq(2).attr('data-cid'); //公司id
\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\tvar _data = data[index];

\t\t\t\tshowMark('#addPage');

\t\t\t\t\$('#showBox .title').text('编辑商机');

\t\t\t\t\$('#templateCon .edit_show').show();

\t\t\t\t// cs.getEmple('#templateCon #people',ykp.getCookie('uid'),'#templateCon #department');
\t\t\t\t//负责人html
\t\t\t\tvar leader_html = [];
\t\t\t\t// console.log(employees);
\t\t\t\tfor(var i in employees){
\t\t\t\t\tleader_html.push('<option value=\"'+ i +'\" department-id=\"'+ employees[i]['department_id'] +'\" department=\"'+ employees[i]['department_name'] +'\">'+ employees[i]['name'] +'</option>');
\t\t\t\t}
\t\t\t\t\$('#templateCon #people').append(leader_html.join(''));
\t\t\t\t//负责人
\t\t\t\tvar master = _data['cwm_opportunity.master_user'] != '0' ? _data['cwm_opportunity.master_user'] : '';
\t\t\t\t\$('#templateCon #people').val(master);
\t\t\t\tif(master){
\t\t\t\t\t\$('#templateCon #department').val(\$('#templateCon #people').find('option:selected').attr('department')).attr('department-id',\$('#templateCon #people').find('option:selected').attr('department-id'));
\t\t\t\t}

\t\t\t\t//客户
\t\t\t\tcs.get_cus2('#templateCon #customer_name',_data['cwm_opportunity.customer_id']);

\t\t\t\t//切换负责人，所属部门改变
\t\t\t\tchangeLeader('#templateCon #people','#templateCon #department');
\t\t\t\t
\t\t\t\t//签单可能性
\t\t\t\tplugs(_data['cwm_opportunity.possibility']);

\t\t\t\t//时间插件
\t\t\t\tcs.timeplug();

\t\t\t\t// console.log(_data);
\t\t\t\t//前负责人，前负责部门
\t\t\t\t\$('#templateCon [data-id=\"last_master_user\"]').val(_data['cwm_opportunity.last_master_user'] != '0'? employees[_data['cwm_opportunity.last_master_user']]['name'] : '').attr('last_master_user',_data['cwm_opportunity.last_master_user'] != '0' ? _data['cwm_opportunity.last_master_user'] : '');
\t\t\t\t\$('#templateCon [data-id=\"last_master_department\"]').val(_data['cwm_opportunity.last_master_user'] != '0' ? employees[_data['cwm_opportunity.last_master_user']]['department_name'] : '').attr('last_master_department',_data['cwm_opportunity.last_master_user'] != '0' ?  employees[_data['cwm_opportunity.last_master_user']]['department_id'] : '');

\t\t\t\t\$('#templateCon [data-id]').not('[data-id=\"last_master_department\"],[data-id=\"last_master_user\"]').each(function(){
\t\t\t\t\tif(\$(this).attr('data-id') == 'oppo_time' || \$(this).attr('data-id') == 'get_time' || \$(this).attr('data-id') == 'next_time' || \$(this).attr('data-id') == 'last_time'){
\t\t\t\t\t\t\$(this).val(_data['cwm_opportunity.' + \$(this).attr('data-id')] != '0' ? cs.getNowTime(_data['cwm_opportunity.' + \$(this).attr('data-id')]) : '');
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr('data-id') == 'master_user' || \$(this).attr('data-id') == 'master_department'){
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\t\$(this).val(_data['cwm_opportunity.' + \$(this).attr('data-id')]);
\t\t\t\t});

\t\t\t\t\$('#templateCon .add').click(function() {
\t\t\t\t\tif(!cs.popValidate()) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tvar postData = {};
\t\t\t\t\tpostData.id = id;
\t\t\t\t\t\$('#templateBox').find('[data-id]').each(function(i, e) {
\t\t\t\t\t\tif(\$(this).attr('data-id') == 'customer_id'){
\t\t\t\t\t\t\tpostData['customer_name'] = \$(this).find('option:selected').text();
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('data-id') == 'last_master_user'){
\t\t\t\t\t\t\tpostData['last_master_user'] = \$(this).attr('last_master_user');
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('data-id') == 'last_master_department'){
\t\t\t\t\t\t\tpostData['last_master_department'] = \$(this).attr('last_master_department');
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('data-id')== 'oppo_time' || \$(this).attr('data-id')== 'get_time' || \$(this).attr('data-id')== 'next_time' || \$(this).attr('data-id')== 'last_time') {
\t\t\t\t\t\t\tpostData[\$(this).attr('data-id')] = new Date(new Date(\$(this).val())) / 1000;
\t\t\t\t\t\t\treturn  true;
\t\t\t\t\t\t}

\t\t\t\t\t\tpostData[\$(this).attr('data-id')] = \$(this).val();
\t\t\t\t\t});


\t\t\t\t\tpostData['possibility'] = \$('#templateCon [name=\"score\"]').val();

\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_opportunity/edit',
\t\t\t\t\t\tmethods: 'post',
\t\t\t\t\t\tdata: postData,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t});
\t\t\t})

            \$('.del').click(function() {
                var id = \$(this).parents('tr').attr('data-id');
                layui.use('layer',function() {
                    layui.layer.confirm('确认删除吗?', function(index){
                        ykp.doAjax({
                            url:'/api/api_opportunity/del',
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
            var dataArr = {};
            \$(this).parents('td').siblings().each(function(i) {
                if(i >= 0 && \$(this).attr(\"data-num\")) {
                    dataArr[\$(this).attr(\"data-num\")]= \$(this).text().trim();
                }
            })
            showMark('#dtlPage');
            \$('#showBox .title').text('商机详情');

            for(let k in dataArr) {
                \$(\"#templateBox\").find(\"input\").each(function () {
\t\t\t\t\tif(\$(this).attr(\"title\") == k){
\t\t\t\t\t    \$(this).val(dataArr[k])
\t\t\t\t\t}
                })
            }


        })
        }

\t\t//自定义列表
\t\tcs.custorm_check('#dynamic-table', '#dataList', false);

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
\t\tcs.timeplug();

\t\tfunction plugs(score) {
\t\t\tykp.loadJs('/resource/adimin/components/raty/lib/jquery.raty.js', function() {
\t\t\t\t\$('#templateCon .rating').raty({
\t\t\t\t\t'cancel': false,
\t\t\t\t\t'half': false,
\t\t\t\t\t'starType': 'i',
\t\t\t\t\t'score':score
\t\t\t\t\t/**,
\t\t\t\t\t
\t\t\t\t\t'click': function() {
\t\t\t\t\t\tsetRatingColors.call(this);
\t\t\t\t\t},
\t\t\t\t\t'mouseover': function() {
\t\t\t\t\t\tsetRatingColors.call(this);
\t\t\t\t\t},
\t\t\t\t\t'mouseout': function() {
\t\t\t\t\t\tsetRatingColors.call(this);
\t\t\t\t\t}*/
\t\t\t\t})
\t\t\t});

\t\t}

\t})
</script>";
    }

    public function getTemplateName()
    {
        return "admin/platform/opportunity.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 410,  429 => 409,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	#templateCon label {*/
/* 		width: 110px;*/
/* 	}*/
/* 	*/
/* 	#templateCon input,*/
/* 	input {*/
/* 		width: 180px;*/
/* 	}*/
/* 	*/
/* 	.star-off-png {*/
/* 		color: #FEB902;*/
/* 	}*/
/* 	#templateBox input{height:30px;width:180px;padding-left:5px;}*/
/* 	.select2-container, .select2-container--default, .select2-container--below, .select2-container--focus {*/
/* 		margin-right: 5px;*/
/* 	}*/
/* 	#heightsearch1 .select2-container, #heightsearch1 .select2-container--default,#heightsearch1 .select2-container--below,#heightsearch1 .select2-container--focus {*/
/* 		margin-right: 0;*/
/* 	}*/
/* </style>*/
/* <div class="widget-main" style="padding-bottom:0;">*/
/* 	<div class="row" id="topTool" style="position:relative;">*/
/* 		<!-- <h3 class="header smaller lighter blue">商机</h3> -->*/
/* 		<!--普通搜索-->*/
/* 		<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 			<input type="text" pts=0 sear="cwm_opportunity.customer_name" placeholder="企业名称" style="width:180px;"/>*/
/* 		</div>*/
/* 		<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 			<input type="text" pts=0 sear="cwm_opportunity.name" placeholder="商机名称" style="width:180px;" />*/
/* 		</div>*/
/* 		<div class="col-sx-4" style=" float: left">*/
/* 			<select style="width: 180px" pts=3 class="advandced-search select2-hidden-accessible" sear="cwm_opportunity.master_user" tabindex="-1" aria-hidden="true">*/
/* 				<option value="">负责人 </option>*/
/* 			</select>*/
/* 		</div>*/
/* 		<div class="col-sx-4" style=" float: left">*/
/* 			<select style="width: 180px"  pts=3 class="advandced-search select2-hidden-accessible" sear="cwm_opportunity.create_user" tabindex="-1" aria-hidden="true">*/
/* 				<option value="">创建人 </option>*/
/* 			</select>*/
/* 		</div>*/
/* 		<div class="col-sx-4" style=" float: left">*/
/* 			<select style="width: 180px" pts=3  class="advandced-search select2-hidden-accessible" tabindex="-1" sear="cwm_opportunity.last_modify_user" aria-hidden="true">*/
/* 				<option value=""> 最后修改人 </option>*/
/* 			</select>*/
/* 		</div>*/
/* 		<!--<div class="col-sx-4" style=" float: left">*/
/* 			<select style="width: 180px" pts=3  class="advandced-search select2-hidden-accessible" tabindex="-1" sear="cwm_opportunity.last_master_user"  aria-hidden="true">*/
/* 				<option value="">前负责人 </option>*/
/* 			</select>*/
/* 		</div>-->*/
/* 		<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 			<button type="button" id="search" title="搜索" class="btn btn-info btn-sm">*/
/*                 <i class="fa fa-search"></i>*/
/*             </button>*/
/* 		</div>*/
/* 		<div class="col-sx-4" style=" float: left;  margin-right: 5px; ">*/
/* 			<button id="heightsearch" title="高级搜索" type="button" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/*                 <i class="fa fa-filter"></i>*/
/*             </button>*/
/* 		</div>*/
/* 		<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 			<button id="flush" type="button" title="刷新" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/*                 <i class="fa fa-refresh"></i>*/
/*             </button>*/
/* 		</div>*/
/* 		<div contentAuthority="131" class="col-sx-4" style=" float: left;  margin-right: 5px; ">*/
/* 			<button id="add" type="button" title="添加" class="btn addBtn btn-info btn-sm" style="background-color: #32CD32	 !important;border-color: #32CD32 !important;">*/
/*                 <i class="fa fa-plus"></i>*/
/*             </button>*/
/* 		</div>*/
/*         <div class="col-sx-4" contentAuthority="300" style=" float: left; margin-right: 5px;">*/
/*              <button type="button"  title="导出" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="exportfile moveToClue btn addBtn btn-info btn-sm position-relative">*/
/*                  <i class="fa fa-sign-out"></i>*/
/*              </button>*/
/*         </div>*/
/* */
/* 		<!-- //高级搜索 -->*/
/* 		<div id="heightsearch1" class="col-sx-12" style="margin-top:30px;position: absolute; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;">*/
/* 			<div class="row">*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>企业名称</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<input type="text" gjs=0 sear="cwm_opportunity.customer_name" />*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>预计成交日期</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 						<option> > </option>*/
/* 						<option> &lt; </option>*/
/* 					</select>*/
/* 					 <div class="input-group"  style="display: inline-flex; width: 180px;">*/
/* 							<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 							<input class="form-control" type="text"  data-status="rangtime" gjs=0 sear="cwm_opportunity.oppo_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 						</div>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>商机金额</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 						<option> ></option>*/
/* 						<option> &lt; </option>*/
/* 					</select>*/
/* 					<input type="text" gjs=0 id="" sear="cwm_opportunity.price" data-type="gj">*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>商机状态</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select gjs=1 style="width: 180px" sear="cwm_opportunity.status" data-type="gj">*/
/* 						<option value="">  请选择  </option>*/
/* 						<option value="0">未成交</option>*/
/* 						<option value="1">已成交</option>*/
/* 						<option value="2">已放弃</option>*/
/* 					</select>*/
/* 				*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>备注</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<input type="text" gjs=0 sear="cwm_opportunity.remark">*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>签单可能性</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 						<option> > </option>*/
/* 						<option> &lt; </option>*/
/* 					</select>*/
/* 					<select gjs=1 style="width: 180px" sear="cwm_opportunity.possibility" data-type="gj">*/
/* 						<option value="">  请选择 </option>*/
/* 						<option value="0">0%</option>*/
/* 						<option value="0.2">20%</option>*/
/* 						<option value="0.4">40%</option>*/
/* 						<option value="0.6">60%</option>*/
/* 						<option value="0.8">80%</option>*/
/* 						<option value="1">100%</option>*/
/* 					</select>*/
/* 					*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>商机来源</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select sear="cwm_opportunity.source" style="width: 180px" gjs=0 data-type="gj">*/
/* 						<option value="">  请选择  </option>*/
/* <!-- 						<option value="1"> 线上 </option>*/
/* 						<option value="2"> 线下 </option> -->*/
/* 						<option value="1">转介绍</option>*/
/* 						<option value="2">电话咨询</option>*/
/* 						<option value="3">线上注册</option>*/
/* 						<option value="4">客户上门</option>*/
/* 						<option value="5">陌生拜访</option>*/
/* 						<option value="6">公司资源</option>*/
/* 						<option value="7">个人资源</option>*/
/* 						<option value="8">广告宣传</option>*/
/* 						<option value="9">电话营销</option>*/
/* 					</select>*/
/* 				</div>*/
/* */
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>负责人</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select style="margin: 12px !important;width: 180px" class="advandced-search select2-hidden-accessible" tabindex="-1" gjs=0 data-type="gj" sear="cwm_opportunity.master_user" aria-hidden="true">*/
/* 						<option value="">  请选择 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>创建人</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select style="margin: 12px !important;width: 180px" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true" gjs=0 data-type="gj" */
/* 					sear="cwm_opportunity.create_user">*/
/* 						<option value="">  请选择 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>创建时间</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 						<option> > </option>*/
/* 						<option> &lt; </option>*/
/* 					</select>*/
/* 					<div class="input-group"  style="display: inline-flex; width: 180px;">*/
/* 							<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 							<input class="form-control" type="text"  data-status="rangtime" gjs=0 sear="cwm_opportunity.create_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 						</div>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>最后修改人</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select style="margin: 12px !important;width: 180px" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true" data-type="gj" gjs=0 sear="cwm_opportunity.create_user">*/
/* 					<option value="">  请选择 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>最后修改时间</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 						<option> > </option>*/
/* 						<option> &lt; </option>*/
/* 					</select>*/
/* 					<div class="input-group"  style="display: inline-flex; width: 180px;">*/
/* 							<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 							<input class="form-control" type="text"  data-status="rangtime" gjs=0 sear="cwm_opportunity.last_modify_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 						</div>*/
/* 				</div>*/
/* 				<div style="text-align:center;clear:both;padding-top:10px; ">*/
/* 					<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/* 		                        查询*/
/* 		                    </button>*/
/* 					<button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 								                       重置*/
/* 								                    </button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row" style="padding:0 20px;">*/
/* 	<div class="custom_table">*/
/* 		<table id="dynamic-table">*/
/* 			<thead>*/
/* 				<tr class="thColor">*/
/* 					<th data-num="22">操作</th>*/
/* 					<th data-num="1">商机名称</th>*/
/* 					<th data-num="2">企业名称</th>*/
/* 					<th data-num="4">预计成交日期</th>*/
/* 					<th data-num="5" style="text-align: right !important;">商机金额(元)</th>*/
/* 					<th data-num="6">商机状态</th>*/
/* 					<th data-num="7">备注</th>*/
/* 					<th data-num="8">签单可能性</th>*/
/* 					<th data-num="10">商机来源</th>*/
/* 					<th data-num="14">负责人</th>*/
/* 					<th data-num="16">创建人</th>*/
/* 					<th data-num="17">创建时间</th>*/
/* 					<th data-num="18">最后修改人</th>*/
/* 					<th data-num="19">最后修改时间</th>*/
/* 				</tr>*/
/* 			</thead>*/
/* */
/* 			<tbody id="dataList">*/
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
/* </div>*/
/* <div id="addPage" style="display: none;">*/
/* 	<div style="margin-top:15px;">*/
/* 		<label><i class='reqired_label'>*</i> 商机名称： </label>*/
/* 		<span class="input-icon">*/
/*                     <input search type="text" data-id="name" id="name" class="required" msg="商机名称不能为空">*/
/*                 </span>*/
/* 		<label><i class='reqired_label'>*</i> 企业名称： </label>*/
/* 		<span class="input-icon">*/
/* 					<select class="required" msg="公司不能为空" search type="text" data-id="customer_id" id="customer_name" style="width: 180px;">*/
/* 						<option value="">请选择公司</option>*/
/* 					</select>*/
/*                     <!--<input search  class="required" msg="公司名称不能为空" type="text" data-id="customer_name" id="customer_name">-->*/
/*                 </span>*/
/* 	</div>*/
/* 	<div style="margin-top:15px;">*/
/* 		<label><i class='reqired_label'>*</i>预计成交日期： </label>*/
/* 		<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 			<input class="date-timepicker1 required" msg="预计成交日期不能为空" data-id="oppo_time" style="height: 30px; width: 150px;">*/
/* 			<span class="input-group-addon" style="width:30px;height:30px;">*/
/* 						<i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 					</span>*/
/* 		</div>*/
/* 		<label> <i class='reqired_label'>*</i>商机金额： </label>*/
/* 		<span class="input-icon">*/
/*                     <input search type="text"  data-id="price" id="monry" class="required" msg="商机金额不能为空">*/
/*                 </span>*/
/* 	</div>*/
/* 	<div style="margin-top:15px;">*/
/* */
/* 		<label> 商机状态： </label>*/
/* 		<select class="required" data-id="status" msg="请选择商机状态" style="width:183px;">*/
/* 			<option value="">  请选择 </option>*/
/* 			<option selected value="0">未成交</option>*/
/* 			<option value="1">已成交</option>*/
/* 			<option value="2">已挂起</option>*/
/* 			<option value="3">已放弃</option>*/
/* 		</select>*/
/* 		<label><i class='reqired_label'>*</i> 备注： </label>*/
/* 		<span class="input-icon">*/
/*                     <input class="required" msg="备注不能为空" search type="text" data-id="remark">*/
/*                 </span>*/
/* 	</div>*/
/* 	<div style="margin-top:15px;">*/
/* 		*/
/* 		<label> 签单可能性： </label>*/
/* 		<div class="rating inline" style="cursor: pointer;display:inline-block;width:180px;position:relative;top:3px;">*/
/* 		</div>*/
/* 		<label> 商机来源： </label>*/
/* 		<select style="width:180px;" data-id="source" class="required" msg="商机来源不能为空">*/
/* 			<option value="">请选择 </option>*/
/* <!-- 			<option value="1">线上</option>*/
/* 			<option value="2">线下</option> -->*/
/* 			<option value="1">转介绍</option>*/
/* 			<option value="2">电话咨询</option>*/
/* 			<option value="3">线上注册</option>*/
/* 			<option value="4">客户上门</option>*/
/* 			<option value="5">陌生拜访</option>*/
/* 			<option value="6">公司资源</option>*/
/* 			<option value="7">个人资源</option>*/
/* 			<option value="8">广告宣传</option>*/
/* 			<option value="9">电话营销</option>*/
/* 		</select>*/
/* 	</div>*/
/* 	<div style="margin-top:15px;">*/
/* 		<label> <i class='reqired_label'>*</i>负责人： </label>*/
/* 		<span class="input-icon">*/
/* 			<select id="people"  class="required" msg="负责人不能为空" search type="text" data-id="master_user" style="width:180px;">*/
/* 				<option value="">请选择负责人</option>*/
/* 			</select>*/
/* 		</span>*/
/* 	</div>*/
/* 	<div style="text-align:center;margin-top:15px;">*/
/* 		<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* 		<button class="sure_button add">*/
/*                         <i class="fa fa-check" aria-hidden="true"></i>*/
/*                         保存*/
/*                     </button>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="dtlPage" style="display: none;">*/
/* 	<div class="row">*/
/* 		<form class="item_form" role="form">*/
/* 			<div class="form_data">*/
/* 				<label>商机名称：</label>*/
/* 				<input disabled title="1" />*/
/* 				<label>企业名称：</label>*/
/* 				<input disabled title="2" />*/
/* 			</div>*/
/* 			<div class="form_data">*/
/* 				<label>预计成交日期：</label>*/
/* 				<input disabled title="4" />*/
/* 				<label> 商机金额（元）： </label>*/
/* 				<input disabled title="5" />*/
/* 			</div>*/
/* 			<div class="form_data">*/
/* 				<label>商机状态：</label>*/
/* 				<input disabled title="6" />*/
/* 				<label>备注： </label>*/
/* 				<input disabled title="7" />*/
/* 			</div>*/
/* 			<div class="form_data">*/
/* 				<label> 签单可能性： </label>*/
/* 				<input disabled title="8" />*/
/* 				<label> 商机来源： </label>*/
/* 				<input disabled title="10" />*/
/* 			</div>*/
/* 			<div class="form_data">*/
/* 				<label> 负责人： </label>*/
/* 				<input disabled title="14" />*/
/* 				<label> 创建人： </label>*/
/* 				<input disabled title="16" />*/
/* 			</div>*/
/* 			<div class="form_data">*/
/* 				<label> 创建时间： </label>*/
/* 				<input disabled title="17" />*/
/* 				<label> 最后修改人： </label>*/
/* 				<input disabled title="18" />*/
/* 			</div>*/
/* 			<div class="form_data">*/
/* 				<label> 最后修改时间： </label>*/
/* 				<input disabled title="19" />*/
/* 			</div>*/
/* 		</form>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* {% include 'admin/customerDetail.html' %}*/
/* {% include 'admin/mark.html' %} */
/* <!--</div>*/
/* -->*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script>*/
/* 	jQuery(function($) {*/
/* 		cs.getNodes([131]);*/
/* 		cs.dataRang();*/
/* 		var page_size = 10;*/
/* 		var order = 'cwm_opportunity.id desc';*/
/* 		var filter = '';*/
/* 		var aid_2 = ykp.getCookie("aid_2");*/
/* 		var time = ykp.getCookie("time");*/
/* 		var employees = {};*/
/* */
/*         //导出功能*/
/*         cs.exportFile({*/
/*             url:"/api/api_opportunity/export",*/
/*             title:"商机列表"*/
/*         });*/
/* 		//获取所有员工*/
/* 		ykp.doAjax({*/
/* 			async:false,*/
/* 			url: '/api/api_employees/f7',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				select: 'bmm_employees.id,bmm_employees.name,bmm_department.name as department_name,bmm_department.id as department_id'*/
/* 			},*/
/* 			success: function(res) {*/
/* 				var data = res.data;*/
/* 				 $('.advandced-search').css('margin-right','5px').select2({allowClear:true});*/
/* 				for(var i in data){*/
/* 					if(data[i]['name']) {*/
/* 					employees[data[i]['id']] = {name:data[i]['name'],department_name:data[i]['department_name'],department_id:data[i]['department_id']};*/
/* 					 $('.advandced-search').append(new Option(data[i]['name'],data[i]['id']));*/
/* 				}*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 		*/
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_opportunity/grid',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: filter,*/
/* 				limit: page_size,*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '.pageBar'*/
/* 			},*/
/* 			contentId: "#datalist",*/
/* 			defaultOrder: order,*/
/* 			initOrder: "", //初始化sort*/
/* 			defaultOrder: order,*/
/* 			params: [{*/
/* 				id: "#dynamic-table",*/
/* 				field: ["","cwm_opportunity.name", "cwm_opportunity.customer_id", "cwm_opportunity.oppo_time", "cwm_opportunity.price", "cwm_opportunity.status", "cwm_opportunity.remark",*/
/* 					"cwm_opportunity.possibility","cwm_opportunity.source","cwm_opportunity.master_user","cwm_opportunity.create_user_name","cwm_opportunity.create_time","cwm_opportunity.last_modify_user","cwm_opportunity.last_modify_time"]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* */
/* 		ykp.doAjax({*/
/* 			url: '/api/api_department/index',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				select: 'bmm_department.name,bmm_department.id',*/
/* 				limit:999,*/
/* 				filter:'bmm_department.is_del=0'*/
/* 			},*/
/* 			success: function(res) {*/
/* 				var data = res.data.items;*/
/* 				 $('.advandced-search2').css('margin-right','5px').select2({allowClear:true});*/
/* 				for(var i in data){*/
/* 					 $('.advandced-search2').append(new Option(data[i]['name'],data[i]['id']));*/
/* 				}*/
/* 			}*/
/* 		});*/
/* */
/* 		if(time != "" && time != undefined) {*/
/* 			var timestamp = ''; //条件*/
/* 			var today = (new Date().setHours(0, 0, 0, 0) / 1000) //今天零点的时间戳*/
/* 			var day_1 = cs.getNowTime(Date.parse(new Date()) / 1000).substr(-2) - 1; //距离本月1号有多少天*/
/* 			var lastmonthday_1 = cs.getNowTime(Date.parse(new Date()) / 1000);*/
/* 			var newday = lastmonthday_1.substring(0, 4) + '-' + (lastmonthday_1.substring(5, 7) - 1) + '-01';*/
/* 			if(lastmonthday_1.substring(5, 7) == 1) {*/
/* 				newday = (lastmonthday_1.substring(0, 4) - 1) + '-12-01';*/
/* 			}*/
/* 			var newdaytime = Date.parse(new Date(newday)) / 1000; //上个月1号的时间戳*/
/* 			switch(time) {*/
/* 				case '1':*/
/* 					timestamp = `cwm_opportunity.create_time>${today}`;*/
/* 					break;*/
/* 				case '2':*/
/* 					timestamp = `cwm_opportunity.create_time<${today} and cwm_opportunity.create_time>${today-86400}`*/
/* 					break;*/
/* 				case '3':*/
/* 					timestamp = `cwm_opportunity.create_time>${today-86400*6}`;*/
/* 					break;*/
/* 				case '4':*/
/* 					timestamp = `cwm_opportunity.create_time>${today-86400*29}`;*/
/* 					break;*/
/* 				case '5':*/
/* 					timestamp = `cwm_opportunity.create_time>${today-86400*day_1}`;*/
/* 					break;*/
/* 				case '6':*/
/* 					timestamp = `cwm_opportunity.create_time<${today-86400*day_1} and cwm_opportunity.create_time>${newdaytime}`;*/
/* 					break;*/
/* 			}*/
/* 			var data = `cwm_opportunity.create_user=${aid_2} and ${timestamp}`;*/
/* 			if(aid_2 == '' || aid_2 == undefined) {*/
/* 				data = `${timestamp}`*/
/* 			}*/
/* 			ykp.list({*/
/* 				url: '/api/api_opportunity/grid',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: page_size,*/
/* 					filter: data*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						 setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
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
/* 			//获取列表数据*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getList();*/
/* 		}*/
/* 		//getList();*/
/* 		*/
/* 		$('#flush').click(function(){*/
/* 			filter = '';	*/
/* 			$('[ps=0]').val('');*/
/* 			$('[sear="cwm_opportunity.master_user"]').val('').trigger('change');*/
/* 			$('[sear="cwm_opportunity.create_user"]').val('').trigger('change');*/
/* 			$('[sear="cwm_opportunity.last_modify_user"]').val('').trigger('change');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getList();*/
/* 		})*/
/* */
/* 		*/
/* 		//普通搜索*/
/* 		function doSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_opportunity/grid',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: page_size,*/
/* 					order: order*/
/* 				}*/
/* 			}*/
/* 			cs.doSearch('#search', data, 'filter', false, function(res,_filter) {*/
/* 				filter = _filter;*/
/* 				if(res.data.items == "") {*/
/* 					 setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 					$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 				} else {*/
/* 					addList(res);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//高级搜索显示 & 隐藏*/
/* 		$('.in').click(function() {*/
/* 			if($('#heightsearch').hasClass('active')) {*/
/* 				$('#heightsearch').removeClass('active');*/
/* 				$("#heightsearch1").slideUp();*/
/* 				cs.timeplug();*/
/* 			}*/
/* 		});*/
/* */
/* 		$('#heightsearch').click(function() {*/
/* 			if($(this).hasClass('active')) {*/
/* 				$('.in').removeClass('modal-backdrop');*/
/* 				$(this).removeClass('active');*/
/* 				$("#heightsearch").css('z-index',0);*/
/* 				$("#heightsearch1").slideUp();*/
/* 			} else {*/
/* 				$('.in').addClass('modal-backdrop');*/
/* 				$("#heightsearch1").slideDown();*/
/* 				$("#heightsearch").css('z-index',1049);*/
/* 				$(this).attr('class', 'btn btn-info btn-sm active')*/
/* 				cs.rest(false, '#heightsearch1');*/
/* 				cs.timeplug();*/
/* 			}*/
/* 		})*/
/* */
/* 		//高级搜索*/
/* 		function advancedSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_opportunity/grid',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: page_size,*/
/* 					order: order*/
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
/* 					$("#heightsearch").removeClass('active');*/
/* 					return false;*/
/* 				}*/
/* */
/* 				$('.in').removeClass('modal-backdrop');*/
/* 				$("#heightsearch1").slideUp();*/
/* 				$("#heightsearch").css('z-index',0);*/
/* 				$("#heightsearch").removeClass('active');*/
/* 				addList(res);*/
/* 			})*/
/* 		}*/
/* */
/* 		//切换每页显示的条目数*/
/* 		$('#changePageNum').change(function() {*/
/* 			pagesize = $(this).val();*/
/* 			ykp.setCookie('page_size',pagesize);*/
/* 			getList();*/
/* 		})*/
/* */
/* 		//切换负责人，所属部门改变*/
/* 		function changeLeader(el1,el2){*/
/* 			$(el1).change(function(){*/
/* 				$(el2).val($(this).find('option:selected').attr('department')).attr('department-id',$(this).find('option:selected').attr('department-id'));*/
/* 			});*/
/* 		}*/
/* */
/* 		//添加*/
/* 		$('#add').click(function() {*/
/* 			showMark('#addPage');*/
/* 			$('#showBox .title').text('添加商机');*/
/* */
/* 			$('#templateCon .edit_show').hide();*/
/* */
/* 			cs.get_cus2('#templateBox #customer_name')*/
/* 			cs.getEmple('#templateBox #people',ykp.getCookie('uid'),'#templateCon #department');*/
/* */
/* 			//切换负责人，所属部门改变*/
/* 			changeLeader('#templateCon #people','#templateCon #department');*/
/* */
/* 			plugs();*/
/* */
/* 			$('#templateBox .add').click(function() {*/
/* 				if(!cs.popValidate()) {*/
/* 					return;*/
/* 				}*/
/* 				var postData = {};*/
/* 				$('#templateBox').find('[data-id]').not(':hidden').each(function(i, e) {*/
/* 					if($(this).attr('data-id') == 'oppo_time' || $(this).attr('data-id') == 'get_time' || $(this).attr('data-id') == 'next_time'){*/
/* 						postData[$(this).attr('data-id')] = new Date($(this).val()) / 1000;*/
/* 						return true;*/
/* 					}*/
/* 					if($(this).attr('data-id') == 'master_department'){*/
/* 						postData[$(this).attr('data-id')] = $(this).attr('department-id');*/
/* 						return true;*/
/* 					}*/
/* 					postData[$(this).attr('data-id')] = $(this).val();*/
/* 				});*/
/* 				*/
/* 				postData['possibility'] = $('#templateCon [name="score"]').val();*/
/* 				postData['customer_id'] = $('#templateBox #customer_name').select2('data')[0].id;*/
/* 				postData['customer_name'] = $('#templateBox #customer_name').select2('data')[0].text;*/
/* 				*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_opportunity/add',*/
/* 					methods: 'post',*/
/* 					data: postData,*/
/* 					success: function(res) {*/
/* 						if(res.code == 200) {*/
/* 							ykp.prompt('添加成功!');*/
/* 							cs.close();*/
/* 							getList();*/
/* 						}*/
/* 					}*/
/* 				})*/
/* 			})*/
/* */
/* 			//时间插件*/
/* 			cs.timeplug();*/
/* 		})*/
/* 		function getList() {*/
/* 			advancedSearch();*/
/* 			doSearch();*/
/* 			ykp.list({*/
/* 				url: '/api/api_opportunity/grid',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: page_size,*/
/* 					filter: filter,*/
/* 					order: order*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						 setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
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
/* 			var _data = [];*/
/* 			var html = '';*/
/* 			var visterStatus = ['未成交' ,'已成交' ,'已挂起','已放弃'];*/
/* 			var xin = [];*/
/* 			var content = '';*/
/* 			var styles = [];*/
/*             var del_mark = cs.getNodes([292], true);*/
/*             $('#dynamic-table th').each(function(i,e){*/
/* 				styles.push($(this).css('display'));*/
/* 			});*/
/*             for(var i = 0; i < data.length; i++) {*/
/* 				// console.log(employees);*/
/* 				var source_name = '';*/
/* 				switch(data[i]['cwm_opportunity.source']){*/
/* 					case '1':*/
/* 						source_name = '转介绍';*/
/* 						break;*/
/* 					case '2':*/
/* 						source_name = '电话咨询';*/
/* 						break;*/
/* 					case '3':*/
/* 						source_name = '线上注册';*/
/* 						break;*/
/* 					case '4':*/
/* 						source_name = '客户上门';*/
/* 						break;*/
/* 					case '5':*/
/* 						source_name = '陌生拜访';*/
/* 						break;*/
/* 					case '6':*/
/* 						source_name = '公司资源';*/
/* 						break;*/
/* 					case '7':*/
/* 						source_name = '个人资源';*/
/* 						break;*/
/* 					case '8':*/
/* 						source_name = '广告宣传';*/
/* 						break;*/
/* 					case '9':*/
/* 						source_name = '电话营销';*/
/* 						break;*/
/* 				}*/
/* 				html += `<tr data-id=${data[i]['cwm_opportunity.id']}>*/
/* 								<td data-num="22">*/
/* 									<label class="pos-rel">*/
/* 									<a> <span style="cursor: pointer" id="" title="详情" class="inFo btOrange"><i class="fa fa-info"></i></span></a>*/
/*                                     <a href="#" class="_edit btBlue" style="position:relative; color:#fff !important" title="编辑" contentAuthority="132"><i class="fa fa-pencil-square-o"></i></a>*/
/*                                    	<a href="#" class="del btRed" style="display:${del_mark ? "inline-block" : "none"}" contentAuthority="292" title="删除"><i class="fa fa-trash-o"></i></a>*/
/*                                     </label>*/
/*                                 </td>*/
/*                                 <td data-num="1" style="display:${styles[1]}" data-con="${data[i]['cwm_opportunity.cid']}">*/
/*                                     ${data[i]['cwm_opportunity.name']}*/
/*                                 </td>*/
/*                                 <td data-num="2" style="display:${styles[2]}" data-con="${data[i]['cwm_opportunity.customer_id']}" data-cid="${data[i]['cwm_opportunity.customer_id']}">*/
/*                                     <a class="customerDetail pos-rel" href="#">${data[i]['cwm_opportunity.customer_name']}</a>*/
/*                                     <label class="pos-rel">*/
/* 				 				<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}" data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>*/
/* 			 				 </label>*/
/*                                 </td>*/
/*                                 <td class="center" data-num="4" style="display:${styles[3]}" data-con="${data[i]['cwm_opportunity.oppo_time']}">*/
/*                                        ${cs.getNowTime(data[i]['cwm_opportunity.oppo_time'])}*/
/*                                 </td>*/
/* 								*/
/*                                 <td class="center" data-num="5" style="display:${styles[4]};text-align: right !important; " data-con="${data[i]['cwm_opportunity.price']}">*/
/*                                         	 ${data[i]['cwm_opportunity.price']}*/
/*                                      */
/*                                 </td>*/
/*                                 <td class="center" data-num="6" style="display:${styles[5]}" data-con="${data[i]['cwm_opportunity.status']}">*/
/*                                     ${visterStatus[data[i]['cwm_opportunity.status']]}*/
/*                                 </td>*/
/* */
/*                                 <td class="center" data-num="7" style="display:${styles[6]}" data-con="${data[i]['cwm_opportunity.remark']}">*/
/*                                       */
/*                                         	 ${data[i]['cwm_opportunity.remark']}*/
/*                                      */
/*                                 </td>*/
/*                                 <td class="center" data-num="8" style="display:${styles[7]}" data-con="${data[i]['cwm_opportunity.possibility']}">*/
/*                                     ${((data[i]['cwm_opportunity.possibility']/5)*100).toFixed(2)+"%"}*/
/*                                        */
/*                                 </td>*/
/*                                 <td class="center" data-num="10" style="display:${styles[9]}" data-con="${source_name}">*/
/*                                        */
/*                                         	${source_name}*/
/*                                        */
/*                                 </td>*/
/*                                 <td class="center" data-num="14" style="display:${styles[13]}" data-con="${data[i]['cwm_opportunity.master_user']}">*/
/*                                        */
/*                                         	${data[i]['mast_info'] ? data[i]['mast_info']['name'] : ''}*/
/*                                         */
/*                                 </td>*/
/*                                 <td class="center" data-num="16" style="display:${styles[17]}" data-con="${data[i]['cwm_opportunity.create_user_name']}">*/
/* */
/*                                         ${employees[data[i]['cwm_opportunity.create_user']] ? employees[data[i]['cwm_opportunity.create_user']]['name'] ? employees[data[i]['cwm_opportunity.create_user']]['name']: '' :''}*/
/* */
/*                                 </td>*/
/*                                 <td class="center" data-num="17" style="display:${styles[18]}" data-con="${data[i]['cwm_opportunity.create_time']}">*/
/*                                        */
/*                                         	${cs.getNowTime(data[i]['cwm_opportunity.create_time'],true)}*/
/*                                        */
/*                                 </td>*/
/*                                 <td class="center" data-num="18" style="display:${styles[19]}" data-con="${data[i]['cwm_opportunity.last_modify_user']}">*/
/* */
/*                                        ${data[i]['cwm_opportunity.last_modify_user']&&data[i]['cwm_opportunity.last_modify_user'] !=0 ? employees[data[i]['cwm_opportunity.last_modify_user']] ? employees[data[i]['cwm_opportunity.last_modify_user']]['name'] : '' :""}*/
/*                                        */
/*                                 </td>*/
/*                                 <td class="center" data-num="19" style="display:${styles[20]}" data-con="${data[i]['cwm_opportunity.last_modify_time']}">*/
/*                                        */
/*                                         ${cs.getNowTime(data[i]['cwm_opportunity.last_modify_time'],true)}*/
/*                                 </td>*/
/*                                 */
/*                             </tr>`;*/
/* */
/* 			}*/
/* 			$('#dataList').html(html);*/
/* 			// console.log($('#remark').html())*/
/* 			custom.showReamrk();*/
/* 			$('[data-rel=tooltip]').tooltip(); //企业名称标签*/
/* 			cs.getNodes([132]);*/
/* 			*/
/* 			editOpportunity(data);*/
/* 			custom.get_custom_info();*/
/* 		}*/
/* */
/* */
/* */
/* 		//编辑商机*/
/* 		function editOpportunity(data) {*/
/* 			$('._edit').click(function() {*/
/*                 var parent = $(this).parents('tr');*/
/*                 var id = parent.attr('data-id'); //商机id*/
/*                 var cid = parent.find('td').eq(2).attr('data-cid'); //公司id*/
/* 				var index = $(this).parents('tr').index();*/
/* 				var _data = data[index];*/
/* */
/* 				showMark('#addPage');*/
/* */
/* 				$('#showBox .title').text('编辑商机');*/
/* */
/* 				$('#templateCon .edit_show').show();*/
/* */
/* 				// cs.getEmple('#templateCon #people',ykp.getCookie('uid'),'#templateCon #department');*/
/* 				//负责人html*/
/* 				var leader_html = [];*/
/* 				// console.log(employees);*/
/* 				for(var i in employees){*/
/* 					leader_html.push('<option value="'+ i +'" department-id="'+ employees[i]['department_id'] +'" department="'+ employees[i]['department_name'] +'">'+ employees[i]['name'] +'</option>');*/
/* 				}*/
/* 				$('#templateCon #people').append(leader_html.join(''));*/
/* 				//负责人*/
/* 				var master = _data['cwm_opportunity.master_user'] != '0' ? _data['cwm_opportunity.master_user'] : '';*/
/* 				$('#templateCon #people').val(master);*/
/* 				if(master){*/
/* 					$('#templateCon #department').val($('#templateCon #people').find('option:selected').attr('department')).attr('department-id',$('#templateCon #people').find('option:selected').attr('department-id'));*/
/* 				}*/
/* */
/* 				//客户*/
/* 				cs.get_cus2('#templateCon #customer_name',_data['cwm_opportunity.customer_id']);*/
/* */
/* 				//切换负责人，所属部门改变*/
/* 				changeLeader('#templateCon #people','#templateCon #department');*/
/* 				*/
/* 				//签单可能性*/
/* 				plugs(_data['cwm_opportunity.possibility']);*/
/* */
/* 				//时间插件*/
/* 				cs.timeplug();*/
/* */
/* 				// console.log(_data);*/
/* 				//前负责人，前负责部门*/
/* 				$('#templateCon [data-id="last_master_user"]').val(_data['cwm_opportunity.last_master_user'] != '0'? employees[_data['cwm_opportunity.last_master_user']]['name'] : '').attr('last_master_user',_data['cwm_opportunity.last_master_user'] != '0' ? _data['cwm_opportunity.last_master_user'] : '');*/
/* 				$('#templateCon [data-id="last_master_department"]').val(_data['cwm_opportunity.last_master_user'] != '0' ? employees[_data['cwm_opportunity.last_master_user']]['department_name'] : '').attr('last_master_department',_data['cwm_opportunity.last_master_user'] != '0' ?  employees[_data['cwm_opportunity.last_master_user']]['department_id'] : '');*/
/* */
/* 				$('#templateCon [data-id]').not('[data-id="last_master_department"],[data-id="last_master_user"]').each(function(){*/
/* 					if($(this).attr('data-id') == 'oppo_time' || $(this).attr('data-id') == 'get_time' || $(this).attr('data-id') == 'next_time' || $(this).attr('data-id') == 'last_time'){*/
/* 						$(this).val(_data['cwm_opportunity.' + $(this).attr('data-id')] != '0' ? cs.getNowTime(_data['cwm_opportunity.' + $(this).attr('data-id')]) : '');*/
/* 						return true;*/
/* 					}*/
/* 					if($(this).attr('data-id') == 'master_user' || $(this).attr('data-id') == 'master_department'){*/
/* 						return true;*/
/* 					}*/
/* 					$(this).val(_data['cwm_opportunity.' + $(this).attr('data-id')]);*/
/* 				});*/
/* */
/* 				$('#templateCon .add').click(function() {*/
/* 					if(!cs.popValidate()) {*/
/* 						return;*/
/* 					}*/
/* 					var postData = {};*/
/* 					postData.id = id;*/
/* 					$('#templateBox').find('[data-id]').each(function(i, e) {*/
/* 						if($(this).attr('data-id') == 'customer_id'){*/
/* 							postData['customer_name'] = $(this).find('option:selected').text();*/
/* 						}*/
/* 						if($(this).attr('data-id') == 'last_master_user'){*/
/* 							postData['last_master_user'] = $(this).attr('last_master_user');*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('data-id') == 'last_master_department'){*/
/* 							postData['last_master_department'] = $(this).attr('last_master_department');*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('data-id')== 'oppo_time' || $(this).attr('data-id')== 'get_time' || $(this).attr('data-id')== 'next_time' || $(this).attr('data-id')== 'last_time') {*/
/* 							postData[$(this).attr('data-id')] = new Date(new Date($(this).val())) / 1000;*/
/* 							return  true;*/
/* 						}*/
/* */
/* 						postData[$(this).attr('data-id')] = $(this).val();*/
/* 					});*/
/* */
/* */
/* 					postData['possibility'] = $('#templateCon [name="score"]').val();*/
/* */
/* 					ykp.doAjax({*/
/* 						url: '/api/api_opportunity/edit',*/
/* 						methods: 'post',*/
/* 						data: postData,*/
/* 						success: function(res) {*/
/* 							cs.close();*/
/* 							getList();*/
/* 						}*/
/* 					})*/
/* 				});*/
/* 			})*/
/* */
/*             $('.del').click(function() {*/
/*                 var id = $(this).parents('tr').attr('data-id');*/
/*                 layui.use('layer',function() {*/
/*                     layui.layer.confirm('确认删除吗?', function(index){*/
/*                         ykp.doAjax({*/
/*                             url:'/api/api_opportunity/del',*/
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
/*         $('.inFo').click(function() {*/
/*             var dataArr = {};*/
/*             $(this).parents('td').siblings().each(function(i) {*/
/*                 if(i >= 0 && $(this).attr("data-num")) {*/
/*                     dataArr[$(this).attr("data-num")]= $(this).text().trim();*/
/*                 }*/
/*             })*/
/*             showMark('#dtlPage');*/
/*             $('#showBox .title').text('商机详情');*/
/* */
/*             for(let k in dataArr) {*/
/*                 $("#templateBox").find("input").each(function () {*/
/* 					if($(this).attr("title") == k){*/
/* 					    $(this).val(dataArr[k])*/
/* 					}*/
/*                 })*/
/*             }*/
/* */
/* */
/*         })*/
/*         }*/
/* */
/* 		//自定义列表*/
/* 		cs.custorm_check('#dynamic-table', '#dataList', false);*/
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
/* 		cs.timeplug();*/
/* */
/* 		function plugs(score) {*/
/* 			ykp.loadJs('/resource/adimin/components/raty/lib/jquery.raty.js', function() {*/
/* 				$('#templateCon .rating').raty({*/
/* 					'cancel': false,*/
/* 					'half': false,*/
/* 					'starType': 'i',*/
/* 					'score':score*/
/* 					/**,*/
/* 					*/
/* 					'click': function() {*/
/* 						setRatingColors.call(this);*/
/* 					},*/
/* 					'mouseover': function() {*/
/* 						setRatingColors.call(this);*/
/* 					},*/
/* 					'mouseout': function() {*/
/* 						setRatingColors.call(this);*/
/* 					}*//* */
/* 				})*/
/* 			});*/
/* */
/* 		}*/
/* */
/* 	})*/
/* </script>*/
