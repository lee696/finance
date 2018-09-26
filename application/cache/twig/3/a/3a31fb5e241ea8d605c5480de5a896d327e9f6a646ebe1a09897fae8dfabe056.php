<?php

/* admin/clientManage/alltask.html */
class __TwigTemplate_3f485846ed250f8afa5a9a3237886200682f1abe1198bf35212a8bff234221a3 extends Twig_Template
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
\t\twidth: 90px;
\t\ttext-align: right;
\t}
\t
\t#showBox table tbody .tdboder {
\t\tborder-right: none !important;
\t}
\t
\t.radioBox {
\t\tdisplay: inline-block;
\t\twidth: 16px;
\t\theight: 16px;
\t\tline-height: 16px;
\t\tfont-weight: bold;
\t\ttext-align: center;
\t\tfont-size: 12px;
\t\tcolor: #fff;
\t\t-moz-border-radius: 50%;
\t\t-webkit-border-radius: 50%;
\t\tborder-radius: 50%;
\t}
\t#templateBox tbody tr td{height: 35px;}
</style>

<div class=\"widget-main\">
\t<div class=\"row\" id=\"topTool\">

\t\t<div class=\"col-sx-4\" style=\" float: left;\">
\t\t\t<input type=\"text\" pts=\"0\" sear=\"khm_customer.name\" placeholder=\"企业名称\" />
\t\t</div>

\t\t<div class=\"col-sx-4\" style=\" float: left;margin-left:5px;\">
\t\t\t<input type=\"text\" pts=\"0\" sear=\"khm_customer.id\" placeholder=\"企业编码\" />
\t\t</div>

\t\t<div class=\"col-sx-4\" style=\" float: left;margin-left:5px;\">
\t\t\t<!--<input type=\"text\" pts=\"0\" placeholder=\"负责人\" sear=\"bmm_employees.name\">-->
\t\t\t<select style=\"margin: 12px !important;width: 180px\" class=\"advandced-search_sf select2-hidden-accessible\" pts=1 sear=\"staff\" tabindex=\"-1\" data-type=\"gj\" aria-hidden=\"true\">
\t\t\t\t<option value=\"\"> 负责人 </option>
\t\t\t</select>
\t\t</div>

\t\t<div class=\"col-sx-4\" style=\" float: left;margin-left:5px;\">
\t\t\t<button type=\"button\" id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
                <i class=\"fa fa-search\"></i>
            </button>
\t\t</div>

\t\t<div class=\"col-sx-4\" style=\" float: left;margin-left:5px;\">
\t\t\t<button id=\"heightsearch\" title=\"高级搜索\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
                <i class=\"fa fa-filter\"></i>
            </button>
\t\t</div>
\t\t<div class=\"col-sx-4\" style=\" float: left;margin-left:5px;\">
\t\t\t<button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
                <i class=\"fa fa-refresh\"></i>
            </button>
\t\t</div>
\t\t<div class=\"col-sx-4\" style=\" float: left;margin-left:5px;\">
\t\t\t<button type=\"button\" id=\"addItem\" title=\"添加\" style=\"background:#32CD32 !important;border-color:#32CD32 !important;\" contentAuthority=\"282\" class=\"btn addBtn btn-info btn-sm\">
                <i class=\"fa fa-plus\"></i>
            </button>
\t\t</div>
\t\t<div class=\"col-sx-4\" contentAuthority=\"289\" style=\" float: left; margin-right: 5px;\">
\t\t\t<button type=\"button\" id=\"moveToClue\" title=\"移交负责人\" style=\"margin-left:5px;outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"moveToClue btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t<i class=\"fa fa-hand-o-right\"></i>
\t\t\t</button>
\t\t</div>
        <div class=\"col-sx-4\" contentAuthority=\"297\" style=\" float: left; margin-right: 5px;\">
            <button type=\"button\"  title=\"导出\" style=\"margin-left:5px;outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"exportfile moveToClue btn addBtn btn-info btn-sm position-relative\">
                <i class=\"fa fa-sign-out\"></i>
            </button>
        </div>
\t\t<div class=\"col-sx-4\" style=\" float: left;margin-left:5px;\">
\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:290px;height: 36px\">
\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px;
\t\t\t\tbackground: #E6E6E6;\" data-kind=\"0\"> 查看全部</a>
\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"1\"> 我负责的</a>
\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"2\"> 我关注的</a>
\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"3\"> 我的下属</a>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-sx-4\" style=\" float: left;margin-left:5px;\">
\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:290px;height: 36px\">
\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"background: #E6E6E6;line-height:32px\" data-status=\"a\">全部</a>

\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-status=\"3\">
\t\t\t\t\t</i> 待审批</a>
\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-status=\"2\"> 已通过</a>
\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px\" data-status=\"1\"> 未通过</a>
\t\t\t</div>

\t\t</div>

\t\t<!--高级搜索-->
\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"margin-top:30px;position:absolute;background:#fff;z-index:1041;overflow: auto; padding: 10px 0px; display: none;\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>企业名称</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.name\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>优先级</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select gjs=0 sear=\"htm_task.urgent\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>服务项目</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select gjs=0 sear=\"htm_task.product_id\" id=\"product\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>任务状态</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select gjs=0 sear=\"htm_task.is_done\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t<option value=\"0\"> 已激活 </option>
\t\t\t\t\t\t<option value=\"-1\"> 未激活 </option>
\t\t\t\t\t\t<option value=\"1\">已完成 </option>
\t\t\t\t\t\t<option value=\"2\"> 作废 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>激活时间</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"htm_task.activate_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sx-4\" style=\"float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>负责人</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" class=\"advandced-search_sf select2-hidden-accessible\" gjs=1 sear=\"staff\" tabindex=\"-1\" data-type=\"gj\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\"float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>协作人</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" class=\"advandced-search select2-hidden-accessible\" gjs=2 sear=\"team_id\" tabindex=\"-1\" data-type=\"gj\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>开始时间</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t</select>

\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"htm_task.start_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t</div>

\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<input id=\"date-timepicker1\" class=\"date-timepicker1\" data-type=\"gj\" data-status = \"time\"  gjs=0 sear=\"htm_task.start_time\" class=\"form-control\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
\t\t\t\t\t\t\t<i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>-->
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>订单期限</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"htm_task.end_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t</div>
\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<input id=\"date-timepicker1\" class=\"date-timepicker1\" data-type=\"gj\" data-status = \"time\"  gjs=0 sear=\"htm_task.end_time\" class=\"form-control\" style=\"height: 30px;width: 150px;\">
\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
\t\t\t\t\t\t\t<i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>-->
\t\t\t\t</div>
\t\t\t\t<!-- <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>现已耗时</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t</select>
\t\t\t\t\t<input type=\"text\"  gjs=0 sear=\"\" data-type=\"gj\">
\t\t\t\t</div> -->
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>完成时间</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"htm_task.done_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t</div>
\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<input id=\"date-timepicker1\" class=\"date-timepicker1\" data-type=\"gj\" data-status = \"time\"  gjs=0 sear=\"htm_task.done_time\" class=\"form-control\" style=\"height: 30px;width: 150px;\">
\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
\t\t\t\t\t\t\t<i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>-->
\t\t\t\t</div>
\t\t\t\t<!--<div class=\"col-sx-4 \" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>任务进度</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"htm_task.flow_status\">
\t\t\t\t</div>-->
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>创建人</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" type='2' class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\" gjs=9 sear=\"htm_contract.create_by\">
\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
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
\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"htm_task.create_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>审批状态</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select gjs=0 sear=\"htm_task.status\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t<option value=\"0\"> 未开始 </option>
\t\t\t\t\t\t<option value=\"1\"> 未通过 </option>
\t\t\t\t\t\t<option value=\"2\"> 已通过 </option>
\t\t\t\t\t\t<option value=\"3\"> 待审批 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>审批人</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select style=\"margin:12px!important;width: 180px\" sear=\"htm_task.auth_id\" data-type=\"gj\" gjs=0 class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>审批时间</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"htm_task.auth_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t</div>
\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<input id=\"date-timepicker1\" class=\"date-timepicker1\" data-type=\"gj\" data-status = \"time\"  gjs=0 sear=\"htm_task.auth_time\" class=\"form-control\" style=\"height: 30px;width: 150px;\">
\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
\t\t\t\t\t\t\t<i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>-->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>审批回复</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"htm_task.auth_remark\" />
\t\t\t\t</div>
\t\t\t\t<div style=\"text-align:center;clear:both;padding-top:10px; \">
\t\t\t\t\t<button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
                        查询
                    </button>
\t\t\t\t\t<button type=\"button\" id=\"rest\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
                       重置
                    </button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"custom_table\">
\t\t<table id=\"dynamic-table\">
\t\t\t<thead>
\t\t\t\t<tr class=\"thColor \">
\t\t\t\t\t<th>
\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace\" onclick=\"checkAll(this.checked)\"/>
\t\t\t\t\t\t\t<span class=\"lbl\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</th>
\t\t\t\t\t<th class=\" center\">操作</th>
\t\t\t\t\t<th class=\" center\" data-num=\"1\">审批状态</th>
\t\t\t\t\t<th class=\" center\" data-num=\"2\">企业名称</th>
\t\t\t\t\t<th class=\" center\" data-num=\"3\">任务等级</th>
\t\t\t\t\t<th class=\" center\" data-num=\"4\">优先级</th>
\t\t\t\t\t<th class=\" center\" data-num=\"5\">服务项目</th>
\t\t\t\t\t<th class=\" center\" data-num=\"6\">任务状态</th>
\t\t\t\t\t<th class=\" center\" data-num=\"7\">激活时间</th>
\t\t\t\t\t<th class=\" center\" data-num=\"8\">任务备注</th>
\t\t\t\t\t<th class=\" center\" data-num=\"9\">负责人</th>
\t\t\t\t\t<th class=\" center\" data-num=\"10\">协作人</th>
\t\t\t\t\t<th class=\" center\" data-num=\"11\">订单期限</th>
\t\t\t\t\t<th class=\" center\" data-num=\"12\">耗时（天）</th>
\t\t\t\t\t<th class=\" center\" data-num=\"13\">完成时间</th>
\t\t\t\t\t<th class=\" center\" data-num=\"14\">创建人</th>
\t\t\t\t\t<th class=\" center\" data-num=\"15\">创建时间</th>
\t\t\t\t\t<th class=\" center\" data-num=\"16\">审批人</th>
\t\t\t\t\t<th class=\" center\" data-num=\"17\">审批时间</th>
\t\t\t\t\t<th class=\" center\" data-num=\"18\">审批回复</th>
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

\t<!--添加编辑-->
\t<div id=\"template\" style=\"display: none;\">
\t\t<div style=\"margin-top:15px;\">
\t\t\t<!--<label> 紧急程度： </label>
\t\t\t<select field=\"urgent\" style=\"width:180px\">
\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t<option value=\"5\">5</option>
\t\t\t</select>-->
\t\t\t<label> 任务流程： </label>
\t\t\t<select field=\"flow_status\" style=\"width:180px\">
\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t</select>
<!-- \t\t\t<label> 完成时间： </label>
\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t<input class=\"date-timepicker1 required\" field=\"complete_time\" class=\"form-control\" style=\"height: 30px; width: 150px;padding-left:5px;\">
\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                    <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                </span>
\t\t\t</div> -->
\t\t</div>
\t\t<div style=\"margin-top:15px;\">

\t\t\t<label> 任务状态： </label>
\t\t\t<select field=\"is_done\" style=\"width:180px\">
\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t<option value=\"0\"> 已激活 </option>
\t\t\t\t<option value=\"1\"> 已完成 </option>
\t\t\t\t<option value=\"2\"> 已作废 </option>
\t\t\t</select>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label style=\"float:left\"> 任务备注： </label>
\t\t\t<textarea style=\"width:calc(100% - 95px);margin-left:5px;resize:none;padding:5px;\" field=\"remark\"></textarea>
\t\t</div>
\t\t<div id=\"sendMsg\" customer_id=\"\" style=\"height: 30px;line-height: 40px\">
\t\t\t<label>是否发送短信：</label>
\t\t\t<input type=\"radio\" value=\"1\" name=\"is_send\">是
\t\t\t<input type=\"radio\" value=\"2\" name=\"is_send\" checked=\"true\">否
\t\t</div>
\t\t<!--<div style=\"margin-top:15px;\">
\t\t\t<label> 参与人： </label>
\t\t\t<select multiple=\"\" id=\"state\" name=\"state\" class=\"select2 select2-hidden-accessible\" data-placeholder=\"请选择\" style=\"width: 414px;\" tabindex=\"-1\" aria-hidden=\"true\"></select>
\t\t</div>-->
\t\t<div style=\"margin-top:15px;text-align:right;\">
\t\t\t<button class=\"sure_button\">
                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                保存
            </button>
\t\t</div>
\t</div>

\t<div id=\"template1\" style=\"display: none;\">
\t\t<div class=\"\" style=\"margin-top:15px;\">
\t\t\t<label> 企业名称： </label>
\t\t\t<select id=\"customer_name\" field=\"customer_id\" style=\"width: 180px;\">
\t\t\t\t<option value=\"\">请选择公司</option>
\t\t\t</select>
\t\t\t<label> 产品： </label>
\t\t\t<select id=\"cp\" field=\"product_id\" style=\"width: 180px;\">
\t\t\t\t<option value=\"\">请选择产品</option>
\t\t\t</select>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 优先级： </label>
\t\t\t<select field=\"urgent\" style=\"width:180px\">
\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t<option value=\"5\">5</option>
\t\t\t</select>
\t\t\t<label> 负责人： </label>
\t\t\t<select id=\"fz\" field=\"one_fuze\" style=\"width: 180px;\">
\t\t\t\t<option value=\"\">请选择负责人</option>
\t\t\t</select>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 开始时间： </label>
\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t<input class=\"date-timepicker1 required\" field=\"start_time\" class=\"form-control\" style=\"height: 30px; width: 150px;padding-left:5px;\">
\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                    <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                </span>
\t\t\t</div>
\t\t\t<label> 结束时间： </label>
\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t<input class=\"date-timepicker1 required\" field=\"end_time\" class=\"form-control\" style=\"height: 30px; width: 150px;padding-left:5px;\">
\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                    <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                </span>
\t\t\t</div>

\t\t</div>

\t\t<div style=\"margin-top:15px;\">
\t\t\t<label style=\"float:left\"> 任务备注： </label>
\t\t\t<textarea style=\"width:calc(100% - 95px);margin-left:5px;resize:none;padding:5px;\" field=\"remark\"></textarea>
\t\t</div>

\t\t<!--<div style=\"margin-top:15px;\">
\t\t\t<label> 参与人： </label>
\t\t\t<select multiple=\"\" id=\"state\" name=\"state\" class=\"select2 select2-hidden-accessible\" data-placeholder=\"请选择\" style=\"width: 414px;\" tabindex=\"-1\" aria-hidden=\"true\"></select>
\t\t</div>-->
\t\t<div style=\"margin-top:15px;text-align:right;\">
\t\t\t<button class=\"sure_button\">
                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                保存
            </button>
\t\t</div>
\t</div>

\t<div class=\"row\" id=\"template3\" style=\"display:none;width:678px;\">
\t\t<div class=\"col-sm-12\" id=\"editBox\">
\t\t\t<table width=\"100%\" style=\"border-collapse:collapse;margin-bottom:15px;\">
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">企业名称：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData0\" field=\"khm_customer.name\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">优先级：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData1 radioBox\" field=\"htm_task.urgent\"></span>
\t\t\t\t\t\t<!--<span class=\"radioBox\" style=\"background:\${color[urgents[data[i]['htm_task.urgent']]]}\">\${urgents[data[i]['htm_task.urgent']]}</span>-->
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">服务项目：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData2\" field=\"productName\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">负责人：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData4\" field=\"username\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">负责部门：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData5\" field=\"department_name\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">开始时间：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData6\" field=\"htm_task.start_time\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">订单期限：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData7\" field=\"start_time1\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">耗时：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData8\" field=\"htime\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">任务进度：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData10\" field=\"htm_task.flow_status\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">任务状态：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData11\" field=\"htm_task.is_done\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">完成时间：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData9\" field=\"htm_task.complete_time\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">创建人：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData11\" field=\"cname\"></span>
\t\t\t\t\t</td>

\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">创建时间：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData12\" field=\"htm_contract.create_time\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">创建部门：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData13\" field=\"cdepartment_name\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">审批状态：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData38\" field=\"htm_task.status\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">审批人：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData39\" field=\"htm_task.auth_id\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"\">
\t\t\t\t\t<td style=\"text-align: right !important\">审批时间：</td>
\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t<span class=\"disData14\" field=\"htm_task.auth_time\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"text-align: right !important\">审批回复：</td>
\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t<span class=\"disData15\" field=\"htm_task.auth_remark\"></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t</table>
\t\t\t<div style=\"width: 430px; margin-bottom: 50px;\">
\t\t\t\t<td style=\"text-align: right !important\">任务备注：</td>
\t\t\t\t<span class=\"disData2\" style=\"word-wrap: break-word;\" field=\"htm_task.remark1\"></span>
\t\t\t</div>
\t\t\t<div style=\"margin-bottom: 10px;\"> 流程备注： </div>
\t\t\t<ul id=\"remark1\"></ul>
\t\t</div>
\t</div>

\t<!-- 审批回复 -->
\t<div class=\"label_popup\" id=\"feedBack\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
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
        // line 633
        $this->loadTemplate("admin/mark.html", "admin/clientManage/alltask.html", 633)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/clientManage/alltask.html", 633)->display($context);
        // line 634
        echo "<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script>
\tjQuery(function(\$) {
\t\tvar order = 'htm_task.id desc';
\t\tvar page_size = 10; //默认每页显示的条目数为 10 
\t\tvar filter = '(((htm_contract.status = 1 or htm_contract.status = 3 )and htm_contract.auth_status1 = 2 and htm_contract.auth_status2 = 2) or htm_task.contract_id = 0)'; //搜索条件  初始为空
\t\tvar employees = []; //所有员工
\t\tvar products = []; //所有产品
\t\tvar aid = ykp.getCookie(\"aid\");
\t\tvar time = ykp.getCookie(\"time\");
\t\tcs.dataRang();
\t\tpagets();
\t\t\$('#filterBtns a').mouseover(function() {
\t\t\t\$(this).addClass('over');
\t\t})
\t\t\$('#filterBtns a').mouseout(function() {
\t\t\t\$(this).removeClass('over');
\t\t})
\t\tcs.setFuze({
\t\t\tconId: \"#dataList\",
\t\t\turl: \"/api/api_task/transfer_user\",
\t\t\ttask: true,
\t\t\tfun: function() {
\t\t\t\tgetList();
\t\t\t}
\t\t});


\t\tcs.exportFile({
\t\t\turl:\"/api/api_task/export\",
\t\t\ttitle:\"所有任务\"
\t\t})
\t\t//添加
\t\taddItem();
\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_task/get_task',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: filter,
\t\t\t\tlimit: page_size
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '#pageBar'
\t\t\t},
\t\t\tinitOrder: 'khm_customer.id',
\t\t\tdefaultOrder: order,
\t\t\tcontentId: \"#dataList\",
\t\t\tparams: [{
\t\t\t\tid: \"#dynamic-table\",
\t\t\t\tfield: [\"\",\"\", \"htm_task.status\", \"khm_customer.name\", \"\", \"htm_task.urgent\",
\t\t\t\t\t\"productName\", \"htm_task.is_done\", \"htm_task.activate_time\", \"htm_task.remark1\", \"\", \"htm_task.team_id\", \"htm_task.end_time\",
\t\t\t\t\t\"\", \"htm_task.complete_time\", \"HT_create_info.name\",\"htm_contract.create_time\",\"htm_task.auth_id\",\"htm_task.auth_time\",\"htm_task.auth_remark\"
\t\t\t\t]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});

\t\tykp.doAjax({
\t\t\turl: \"/api/api_product/index\",
\t\t\tdata: {
\t\t\t\tlimit: 1000
\t\t\t},
\t\t\tmethod: \"post\",
\t\t\tsuccess: function(res) {
\t\t\t\tvar data = res.data.items;
\t\t\t\tvar item = [];
\t\t\t\tfor(var i in data) {
\t\t\t\t\titem.push(`<option value='\${data[i][\"ckm_product.id\"]}'>\${data[i][\"ckm_product.name\"]}</option>`);
\t\t\t\t}
\t\t\t\t\$('#product').append(item.join(''));
\t\t\t}
\t\t})

\t\tfunction addItem() {
\t\t\t\$('#addItem').click(function() {
\t\t\t\tshowMark('#template1');
                \$('#showBox .title').text('添加');
\t\t\t\tcs.get_cus2('#templateBox #customer_name');
\t\t\t\tcs.get_cp('#templateBox #cp');
\t\t\t\tcs.getElem2('#templateBox #fz');
\t\t\t\tcs.timeplug();
\t\t\t\t\$('#templateBox .sure_button').click(function() {
\t\t\t\t\tvar postdata = {};
\t\t\t\t\tvar status = false;
\t\t\t\t\t\$('#templateCon [field]').each(function(i, e) {
\t\t\t\t\t\tif(\$(this).attr('field') == 'start_time' || \$(this).attr('field') == 'end_time') {
\t\t\t\t\t\t\tpostdata[\$(this).attr('field')] = new Date(\$(this).val()) / 1000;
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).val() == \"\" && \$(this).attr('field') != 'remark') {
\t\t\t\t\t\t\tykp.prompt('不能为空');
\t\t\t\t\t\t\tstatus = false;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tpostdata[\$(this).attr('field')] = \$(this).val();
\t\t\t\t\t\t\tstatus = true;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tif(postdata['start_time'] > postdata['end_time']) {
\t\t\t\t\t\tykp.prompt('结束时间应大于开始时间');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\tvar val = \$('#templateCon [field=\"product_id\"]').val();
\t\t\t\t\tif(val) {
\t\t\t\t\t\tpostdata['remark1'] = \$('#templateCon [field=\"remark\"]').val();
\t\t\t\t\t}
\t\t\t\t\tif(status) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_task/add_task',
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: postdata,
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('添加成功');
\t\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t});
\t\t\t})
\t\t}

\t\tfunction edititem(data) {
\t\t\t\$('.edit1').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\tvar Data = data[index];
\t\t\t\tshowMark('#template1');
                \$('#showBox .title').text('编辑信息');
\t\t\t\tcs.get_cus2('#templateBox #customer_name');
\t\t\t\tcs.get_cp('#templateBox #cp');
\t\t\t\tcs.getElem2('#templateBox #fz');
\t\t\t\tcs.timeplug();
                for(var i in Data) {
\t\t\t\t\t\$('#templateBox').find('input,select,textarea').each(function() {
                        if(\$(this).attr('field') == i.replace(/htm_task./, '')) {
\t\t\t\t\t\t\tif(i.replace(/htm_task./, '') == 'start_time' || i.replace(/htm_task./, '') == 'end_time') {
\t\t\t\t\t\t\t\t\$(this).val(cs.getNowTime(Data[i].replace(/htm_task./, '')));
\t\t\t\t\t\t\t} else if(i.replace(/htm_task./, '') == 'customer_id') {
\t\t\t\t\t\t\t\t\$(this).val(Data[i].replace(/htm_task./, '')).trigger('change');
\t\t\t\t\t\t\t} else if(i.replace(/htm_task./, '') == 'product_id') {
                                let dataVal = Data[i].replace(/htm_task./, '');
                                let it = \$(this);
                                setTimeout(function () {
                                    it.val(dataVal).trigger('change');
                                },300)
                                //\$(this).val(Data[i].replace(/htm_task./, '')).trigger('change');
\t\t\t\t\t\t\t} else if(i.replace(/htm_task./, '') == 'remark') {
                                \$(this).val(Data[\"htm_task.remark1\"]);
\t\t\t\t\t\t\t} else if(i.replace(/htm_task./, '') == \"one_fuze\"){
\t\t\t\t\t\t\t\tlet dataVal = Data[i].replace(/htm_task./, '');
\t\t\t\t\t\t\t\tlet it = \$(this);
\t\t\t\t\t\t\t   setTimeout(function () {
\t\t\t\t\t\t\t\t\tit.val(dataVal).trigger('change');
\t\t\t\t\t\t\t\t},300)

\t\t\t\t\t\t\t}else {
\t\t\t\t\t\t\t\t\$(this).val(Data[i].replace(/htm_task./, ''));
\t\t\t\t\t\t\t}

\t\t\t\t\t\t}
                    })
\t\t\t\t}

\t\t\t\t\$('#templateBox .sure_button').click(function() {
\t\t\t\t\tvar postdata = {};
\t\t\t\t\tvar status = false;
\t\t\t\t\t\$('#templateCon [field]').each(function(i, e) {
\t\t\t\t\t\tif(\$(this).attr('field') == 'start_time' || \$(this).attr('field') == 'end_time') {
\t\t\t\t\t\t\tpostdata[\$(this).attr('field')] = new Date(\$(this).val()) / 1000;
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).val() == \"\" && \$(this).attr('field') != 'remark') {
\t\t\t\t\t\t\tykp.prompt('不能为空');
\t\t\t\t\t\t\tstatus = false;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tpostdata[\$(this).attr('field')] = \$(this).val();
\t\t\t\t\t\t\tstatus = true;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tvar val = \$('#templateCon [field=\"product_id\"]').val();
\t\t\t\t\tif(val) {
\t\t\t\t\t\tpostdata['remark1'] = \$('#templateCon [field=\"remark\"]').val();
\t\t\t\t\t}
\t\t\t\t\tpostdata['id'] = id;
\t\t\t\t\tif(status) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_task/edit_new_task',
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: postdata,
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('编辑成功');
\t\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})
\t\t}

\t\t\$('.myFilter').click(function() {
\t\t\tif(!\$(this).hasClass('clc')) {
\t\t\t\t\$(this).addClass('clc').siblings().removeClass('clc');
\t\t\t}
\t\t\tvar user = JSON.parse(ykp.getCookie('userinfo'));
\t\t\tvar data = {
\t\t\t\t\"type\": 1,
\t\t\t\t\"limit\": page_size,
\t\t\t\t'page': 1,
\t\t\t\t'filter': filter,
\t\t\t\t'order': order
\t\t\t};
\t\t\tvar filter_ = \$(this).attr('data-kind');
\t\t\tif(filter_ == '0') {
\t\t\t\tgetList();
\t\t\t\treturn;
\t\t\t}
\t\t\t//我负责的
\t\t\tif(filter_ == '1') {
\t\t\t\tdata['staff'] = user.name;
\t\t\t}
\t\t\t//我关注的
\t\t\tif(filter_ == '2') {
\t\t\t\tdata['relation'] = 'helloworld';;
\t\t\t}
\t\t\t//我的下属
\t\t\tif(filter_ == '3') {
\t\t\t\tdata.up_user = user.id;
\t\t\t}
\t\t\tfilter = data['filter'];
\t\t\tif(\$(this).attr('data-kind') == undefined) {
\t\t\t\tfilter_ = \$(this).attr('data-status');
\t\t\t\tif(filter_ == 'a') {
\t\t\t\t\tgetList();
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tdata['filter'] += ' and htm_task.status = ' + filter_;

\t\t\t}
\t\t\tgetList_2(data);

\t\t})

\t\tfunction pagets() {
\t\t\tif(time && time != '') {
                var timestamp = ''; //条件
\t\t\t\tvar today = new Date().setHours(0, 0, 0, 0) / 1000; //今天零点的时间戳
\t\t\t\tvar day_1 = cs.getNowTime(Date.parse(new Date()) / 1000).substr(-2) - 1; //距离本月1号有多少天
\t\t\t\tvar lastmonthday_1 = cs.getNowTime(Date.parse(new Date()) / 1000);
\t\t\t\tvar newday = lastmonthday_1.substring(0, 4) + '-' + (lastmonthday_1.substring(5, 7) - 1) + '-01';
\t\t\t\tif(lastmonthday_1.substring(5, 7) == 1) {
\t\t\t\t\tnewday = (lastmonthday_1.substring(0, 4) - 1) + '-12-01';
\t\t\t\t}
\t\t\t\tvar newdaytime = Date.parse(new Date(newday)) / 1000; //上个月1号的时间戳
\t\t\t\tswitch(time) {
\t\t\t\t\tcase '1':
\t\t\t\t\t\ttimestamp = `htm_task.done_time>\${today}`;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '2':
\t\t\t\t\t\ttimestamp = `htm_task.done_time<\${today} and htm_task.create_time>\${today-86400}`
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '3':
\t\t\t\t\t\ttimestamp = `htm_task.done_time>\${today-86400*6}`;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '4':
\t\t\t\t\t\ttimestamp = `htm_task.done_time>\${today-86400*29}`;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '5':
\t\t\t\t\t\ttimestamp = `htm_task.done_time>\${today-86400*day_1}`;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '6':
\t\t\t\t\t\ttimestamp = `htm_task.done_time<\${today-86400*day_1} and htm_task.create_time>\${newdaytime}`;
\t\t\t\t\t\tbreak;
\t\t\t\t}
                var aid_2 = ykp.getCookie(\"aid_2\");
\t\t\t\tvar filter = `htm_task.is_del = 0 and htm_task.one_fuze=\${aid_2} and \${timestamp}`;
                if(aid_2 == '' || aid_2 == undefined) {
                    filter = `\${timestamp}`
                }
\t\t\t\tvar data = {
\t\t\t\t\tlimit: page_size,
\t\t\t\t\tfilter: filter,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t\tgetList_2(data);
\t\t\t\tykp.setCookie(\"aid\", \"\", (1 / 24));
\t\t\t\tykp.setCookie(\"time\", \"\", (1 / 24));
\t\t\t} else if(ykp.getCookie('titleTask') && ykp.getCookie('titleTask') != '') {
\t\t\t\tvar kind = ykp.getCookie('titleTask');
\t\t\t\tvar data = {
\t\t\t\t\tlimit: page_size,
\t\t\t\t\t//filter: `htm_task.status <> 2`,
\t\t\t\t\tfilter: '( `htm_contract`.`contract_type` = 2 OR `htm_task`.`contract_id` = 0 ) AND `htm_task`.`is_done` = 0 AND ((( htm_contract.STATUS = 1 OR htm_contract.STATUS = 3 ) AND htm_contract.auth_status1 = 2 AND `htm_contract`.`auth_status2` = 2 ) OR `htm_task`.`contract_id` = 0 )',
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t\tif(kind == '10') {
\t\t\t\t\tdata.filter = `htm_task.status = 0`
\t\t\t\t}
\t\t\t\tykp.setCookie(\"titleTask\", '', (1 / 24));
\t\t\t\tgetList_2(data);
\t\t\t} else {
\t\t\t\t//获取列表数据
\t\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\t\tykp.setCookie(\"where\", \"\");
\t\t\t\tgetList();
\t\t\t}
\t\t}

\t\t\$('#flush').click(function() {
\t\t\tfilter = '(((htm_contract.status = 1 or htm_contract.status = 3 )and htm_contract.auth_status1 = 2 and htm_contract.auth_status2 = 2) or htm_task.contract_id = 0)'; //搜索条件  初始为空\t
\t\t\tgetList();
\t\t})

\t\tfunction getList_2(data) {
\t\t\tykp.list({
\t\t\t\turl: '/api/api_task/get_task',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: data,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t\t//order: order
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t});
\t\t}

\t\tykp.doAjax({
\t\t\turl: '/api/api_department/index',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tselect: 'bmm_department.name,bmm_department.id',
\t\t\t\tlimit: 999,
\t\t\t\tfilter: 'bmm_department.is_del=0'
\t\t\t},
\t\t\tsuccess: function(res) {
\t\t\t\tvar data = res.data.items;
\t\t\t\t\$('.advandced-search2').css('margin-right', '5px').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});
\t\t\t\tfor(var i in data) {
\t\t\t\t\t\$('.advandced-search2').append(new Option(data[i]['name'], data[i]['id']));
\t\t\t\t}
\t\t\t}
\t\t});

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
                    \$('.advandced-search').select2({
\t\t\t\t\t\tallowClear: true
\t\t\t\t\t});
\t\t\t\t\t\$('.advandced-search_sf').select2({
\t\t\t\t\t\tallowClear: true
\t\t\t\t\t});
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tif(data[i]['name']) {
\t\t\t\t\t\t\temployees[data[i]['id']] = data[i]['name'];
\t\t\t\t\t\t\t\$('.advandced-search').append(new Option(data[i]['name'], data[i]['id']));
\t\t\t\t\t\t\t\$('.advandced-search_sf').append(new Option(data[i]['name']));
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//获取所有产品
\t\tgetProducts();

\t\tfunction getProducts() {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_product/f7',
\t\t\t\tmethod: 'post',
\t\t\t\tasync: false,
\t\t\t\tdata: {
\t\t\t\t\tselect: 'ckm_product.id,ckm_product.name'
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tproducts[parseInt(data[i]['id'])] = data[i]['name'];
\t\t\t\t\t\t\$('select[sear=\"htm_contract.service_items\"]').append(new Option(data[i]['name'], parseInt(data[i]['id'])));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}
\t\ttime_plug();
\t\t//时间插件
\t\tcs.timeplug();

\t\tfunction time_plug() {
\t\t\tif(!ace.vars['old_ie']) {
\t\t\t\t\$('#templateCon .date-timepicker1,.date-timepicker1').datetimepicker({
\t\t\t\t\t// format: 'YYYY-MM-DD', //use this option to display seconds
\t\t\t\t\ticons: {
\t\t\t\t\t\ttime: 'fa fa-clock-o',
\t\t\t\t\t\tdate: 'fa fa-calendar',
\t\t\t\t\t\tup: 'fa fa-chevron-up',
\t\t\t\t\t\tdown: 'fa fa-chevron-down',
\t\t\t\t\t\tprevious: 'fa fa-chevron-left',
\t\t\t\t\t\tnext: 'fa fa-chevron-right',
\t\t\t\t\t\ttoday: 'fa fa-arrows ',
\t\t\t\t\t\tclear: 'fa fa-trash',
\t\t\t\t\t\tclose: 'fa fa-times'
\t\t\t\t\t}
\t\t\t\t}).next().on(ace.click_event, function() {
\t\t\t\t\t\$(this).prev().focus();
\t\t\t\t});
\t\t\t}

\t\t\t//月份
\t\t\t\$('#templateCon .select2').css('width', '414px').select2({
\t\t\t\tallowClear: true
\t\t\t});
\t\t\t\$('#select2-multiple-style .btn').unbind('click').on('click', function(e) {
\t\t\t\tvar target = \$(this).find('input[type=radio]');
\t\t\t\tvar which = parseInt(target.val());
\t\t\t\tif(which == 2) \$('.select2').addClass('tag-input-style');
\t\t\t\telse \$('.select2').removeClass('tag-input-style');
\t\t\t});
\t\t}

\t\t//普通搜索
\t\tfunction general_search() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_task/get_task',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: page_size
\t\t\t\t\t//order: order
\t\t\t\t}
\t\t\t}

\t\t\tcs.doSearch('#search', data, 'filter', false, function(res, _filter) {
\t\t\t\tfilter = _filter;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\taddList(res);
\t\t\t}, filter)
\t\t}

\t\t//自定义table
\t\tcs.custorm_check('#dynamic-table', '#dataList', true);

\t\t//高级搜索
\t\tfunction advanced_Search() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_task/get_task',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: page_size,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}

\t\t\tcs.hSearch('#search1', data, 'filter', false, function(res, _filter) {
\t\t\t\tfilter = _filter;
\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\$(\"#heightsearch\").removeClass('active').css('z-index', '');
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\taddList(res);
\t\t\t}, filter);
\t\t}

\t\tcs.showHeightSearch('#heightsearch', '#heightsearch1');

\t\t//改变每页显示的条目数
\t\tchangePage();

\t\tfunction changePage() {
\t\t\t\$('#changePageNum').change(function() {
\t\t\t\tpage_size = \$(this).val();
\t\t\t\tgetList();
\t\t\t})
\t\t}
\t\tadvanced_Search();
\t\tgeneral_search();
\t\t//获取列表数据
\t\tfunction getList() {

\t\t\tykp.list({
\t\t\t\turl: '/api/api_task/get_task',
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
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t});
\t\t}

\t\tfunction getSortTime(data) {
\t\t\tfor(var i = 0; i < data.length; i++) {
\t\t\t\tfor(var j = 0; j < data.length - 1 - i; j++) {
\t\t\t\t\tif(data[i]['end_time'] > data[j + 1]['end_time']) {
\t\t\t\t\t\tvar t = data[i];
\t\t\t\t\t\tdata[j] = data[j + 1];
\t\t\t\t\t\tdata[j + 1] = t;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\treturn data;
\t\t}

\t\tfunction addList(res) {
\t\t\tvar data = res.data.items;
\t\t\tvar html = '';
\t\t\tvar urgents = ['', '1', '2', '3', '4', '5']; //优先级
\t\t\tvar approve_status = ['未开始', '未通过', '已通过', '待审批']; //任务审批状态
\t\t\tvar task_status = []; //任务状态

\t\t\tvar styles = [];
\t\t\t\$('#dynamic-table th').each(function(i, e) {
\t\t\t\tstyles.push(\$(this).css('display'));
\t\t\t});
            //console.log(styles);
            var remarkList = {};
\t\t\tvar remarkList1 = [];
\t\t\tvar remarkListStr = [];
\t\t\tvar num = \"\";
\t\t\tvar range_title = [];
\t\t\t//审批权限为true可以审批,为false不可审批
\t\t\tvar spApp = cs.approve_authority({
\t\t\t\tname: '所有任务',
\t\t\t\tnodes: [111]
\t\t\t});
\t\t\tvar getMoneyList = {};

\t\t\tvar color = ['', 'red', 'orange', 'green', 'blue', 'purple']
\t\t\tfor(var i in data) {
\t\t\t\tif(data[i]['htm_task.flow']) {
\t\t\t\t\tfor(var j in JSON.parse(data[i]['htm_task.flow'])) {
\t\t\t\t\t\tif(data[i]['htm_task.remark'].indexOf('[') != -1) {
\t\t\t\t\t\t\tremarkList[JSON.parse(data[i]['htm_task.flow'])[j]] = JSON.parse(data[i]['htm_task.remark'])[j] || \"\";
\t\t\t\t\t\t\tremarkListStr.push(JSON.parse(data[i]['htm_task.flow'])[j] + \"：\" + (JSON.parse(data[i]['htm_task.remark'])[j] || \"\"));
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tremarkListStr.push(JSON.parse(data[i]['htm_task.flow'])[j] + \"：\" + \"\");
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tnum = Math.ceil(remarkListStr.join(',').length / 20);
\t\t\t\tfor(var k = 0; k < num; k++) {
\t\t\t\t\trange_title.push(remarkListStr.join().slice(20 * k, (k + 1) * 20));
\t\t\t\t}

\t\t\t\tgetMoneyList[i] = {};
\t\t\t\tgetMoneyList[i]['total_monry'] = data[i]['htm_contract.total_monry'];
\t\t\t\tgetMoneyList[i]['taskList'] = getSortTime(data[i]['taskList']);
\t\t\t\tremarkList1[i] = range_title;
\t\t\t\tremarkListStr = [];
\t\t\t\tvar is_done = {
\t\t\t\t\t\"-1\": \"未激活\",
\t\t\t\t\t0: \"已激活\",
\t\t\t\t\t1: \"已完成\",
\t\t\t\t\t2: \"已作废\"
\t\t\t\t}

\t\t\t\t//range_title.join(',')   //\${remarkList1[i].join('&#13;')}
                //<a   team_id=\"\${data[i]['htm_task.team_id']}\" data-fuze=\"\${data[i]['htm_task.one_fuze']}\" data-status=\"\${data[i]['htm_task.status']}\" style=\"color:#fff !important; display: \${(data[i]['htm_task.status'] == 1||data[i]['htm_contract.id'] == \"\") ? 'inline-block' : 'none'};\" title=\"编辑\" href=\"javascript:void(0);\" class=\"btBlue edit1\"><i class=\"fa fa-pencil-square-o\"></i></a>
\t\t\t\ttask_status = data[i]['htm_task.flow'] ? JSON.parse(data[i]['htm_task.flow']) : '';
\t\t\t\thtml += `<tr data-id = \"\${data[i]['htm_task.id']}\" data-fuze=\"\${data[i]['htm_task.one_fuze']}\" data-xz=\"\${data[i]['htm_task.one_fuze']}\" cid=\"\${data[i]['htm_task.id']}\" customer_id=\"\${data[i]['htm_task.id']}\">
\t\t\t\t\t\t\t<td class=\"center\">
\t\t                        <label class=\"pos-rel\">
\t\t                        <input type=\"checkbox\" name=\"check\" class=\"ace\"/>
\t\t                        <span class=\"lbl\"></span>
\t\t                        </label>
\t\t                    </td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t\t\t<a style=\"color:#fff !important\" contentAuthority=\"110\" href=\"javascript:void(0);\" title=\"详情\" class=\"btOrange info\"><i class=\"fa fa-info\"></i></a>
\t\t\t\t\t\t\t\t\t<a   team_id=\"\${data[i]['htm_task.team_id']}\" data-fuze=\"\${data[i]['htm_task.one_fuze']}\" data-status=\"\${data[i]['htm_task.status']}\" style=\"color:#fff !important; display:\${(data[i]['htm_task.status'] == 1||data[i]['htm_task.status'] == 0) ? 'inline-block' : 'none'}\" title=\"编辑\" href=\"javascript:void(0);\" class=\"btBlue edit1\"><i class=\"fa fa-pencil-square-o\"></i></a>
\t\t\t\t\t\t\t\t\t<a  contentAuthority=\"110\" team_id=\"\${data[i]['htm_task.team_id']}\" data-fuze=\"\${data[i]['htm_task.one_fuze']}\" data-status=\"\${data[i]['htm_task.status']}\" style=\"display: \${(data[i]['htm_task.status'] == 1||data[i]['htm_task.status'] == 0) ? 'inline-block' : 'none'};color:#fff !important\"  href=\"javascript:void(0);\" title=\"反馈\" class=\"btGreen edit\"><i class=\"fa fa-commenting-o\"></i></a>
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"sp btOrange\" data-status = \"3\" style=\"display:\${spApp ? ((data[i]['htm_task.status'] == 2 && data[i]['htm_task.is_done'] == 1)  ? 'inline-block' : 'none') : 'none'}; color:#fff !important\" title=\"撤销\"><i class=\"fa fa-rotate-left\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"sp btGreen\" data-status = \"2\" style=\"display:\${spApp ? (data[i]['htm_task.status'] == 3 && data[i]['htm_task.is_done'] == 1 ? 'inline-block' : 'none') : 'none'}; color:#fff !important\" title=\"通过\"><i class=\"fa fa-check-circle-o\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"sp btRed\" data-status = \"1\" style=\"display:\${spApp ? (data[i]['htm_task.status'] == 3 && data[i]['htm_task.is_done'] == 1 ? 'inline-block' : 'none') : 'none'}; color:#fff !important\" title=\"驳回\"><i class=\"fa fa-times-circle\"></i></a>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-num=\"1\" style=\"display:\${styles[2]}\">
\t\t\t\t\t\t\t\t\${approve_status[data[i]['htm_task.status']]}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-num=\"2\" style=\"display:\${styles[3]}\" data-cid=\"\${data[i]['khm_customer.id']}\">
\t\t\t\t\t\t\t\t<div style=\"display:inline-block;height:14px;width:17px\">
\t\t\t\t\t\t \t\t\t<span class=\"spanTip\" style=\"display:\${data[i]['htm_task.complete_time'] == \"\" ?'inline-block':'none'}\"><span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"pos-rel customerDetail\">\${data[i]['khm_customer.name']}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t\t<i relation=\${data[i]['is_relotion']} class=\"sc fa \${data[i]['is_relotion'] == 0 ? 'fa-heart-o' : 'fa-heart'}\" style=\"color:\${data[i]['is_relotion'] ==1 ? 'red' : ''}\"></i>
\t\t\t\t \t\t\t\t<i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data[i]['Remark'].length > 0 ? 'red' : ''}\"  data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i>
\t\t\t \t\t\t\t </label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"\" style=\"display:\${styles[4]}\" data-num=\"3\">\${data[i]['lv']}</td>
\t\t\t\t\t\t\t<td class=\"\" style=\"display:\${styles[5]}\" data-num=\"4\"><span class=\"radioBox\" style=\"background:\${color[urgents[data[i]['htm_task.urgent']]]}\">\${urgents[data[i]['htm_task.urgent']]}</span></td>
\t\t\t\t\t\t\t<td class=\"\" style=\"display:\${styles[6]}\" data-num=\"5\">\${data[i]['productName']}</td>
\t\t\t\t\t\t\t<td class=\"\" style=\"display:\${styles[7]}\" data-num=\"6\">\${is_done[data[i]['htm_task.is_done']]}</td>
\t\t\t\t\t\t\t<td class=\"\" style=\"display:\${styles[8]}\" data-num=\"7\">\${data[i]['htm_task.activate_time'] != 0 ? cs.getNowTime(data[i]['htm_task.activate_time'],true):\"\"}</td>
\t\t\t\t\t\t\t<td class=\"center\" style=\"display:\${styles[9]}\" data-num=\"8\" >
\t\t                            <label style=\"width:100px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;\">\${data[i]['htm_task.remark1']}</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" style=\"display:\${styles[10]}\" data-num=\"9\">
\t\t                            <span class=\"lbl\">\${data[i].staff.length > 0 ? (data[i].staff[0].user ? data[i].staff[0].user.name : '') : ''}</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" style=\"display:\${styles[11]}\" data-num=\"10\">
\t\t                            <span class=\"lbl\">\${data[i]['htm_task.team_id'].length > 0 ? getElemploess(data[i]['htm_task.team_id'])  : ''}</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" style=\"display:\${styles[12]}\" data-num=\"11\">
\t\t                            <span class=\"lbl\">\${cs.getNowTime(data[i]['htm_task.start_time'])+\"~\"+cs.getNowTime(data[i]['htm_task.end_time'])}</span>
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td class=\"center\" style=\"display:\${styles[13]}\" data-num=\"12\">
\t\t                          \${data[i]['htm_task.complete_time'] > '0' ? (data[i]['htm_task.start_time']>0?(Math.ceil(parseInt(parseInt(new Date().getTime()/1000)-data[i]['htm_task.complete_time'])/86400)):0) : (data[i]['htm_task.start_time']>0?(Math.ceil(parseInt(parseInt(new Date().getTime()/1000)-data[i]['htm_task.start_time'])/86400)):0)}
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td class=\"center\" style=\"display:\${styles[14]}\" data-num=\"13\">
\t                            \${data[i]['htm_task.complete_time'] != '0' ? cs.getNowTime(data[i]['htm_task.complete_time'],true) : ''}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" style=\"display:\${styles[15]}\" data-num=\"14\">
\t\t                            <span class=\"lbl\">\${data[i].HT_create_info.name}</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\" style=\"display:\${styles[16]}\" data-num=\"15\">
\t\t                            <span class=\"lbl\">\${cs.getNowTime(data[i]['htm_contract.create_time'],true)}</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td data-num=\"16\" style=\"display:\${styles[17]}\">
\t\t\t\t\t\t\t\t\${data[i]['htm_task.auth_id'] != '0' ? employees[data[i]['htm_task.auth_id']] : ''}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-num=\"17\" style=\"display:\${styles[18]}\">
\t\t\t\t\t\t\t\t\${ data[i]['htm_task.auth_time'] != '0' ? cs.getNowTime(data[i]['htm_task.auth_time'],true) : ''}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-num=\"18\" style=\"display:\${styles[19]}\">
\t\t\t\t\t\t\t\t\${ data[i]['htm_task.auth_time'] != '0' ? data[i]['htm_task.auth_remark'] : ''}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>`;
\t\t\t\trange_title = [];
\t\t\t}

\t\t\t\$('#dataList').html(html);
\t\t\tvar spStatus = cs.getSpStatus('所有任务', true);
\t\t\tcustom.showReamrk();
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\tcs.getNodes([110, 282, 289]);
\t\t\tapprove();
\t\t\tcustom.get_custom_info();
\t\t\tedit(data, getMoneyList); //参数编辑所用

\t\t\tedititem(data); //编辑添加信息
\t\t\tinfo(data);

\t\t\t\$('.sc').click(function() {
\t\t\t\tvar task_id = \$(this).parents('tr').attr('data-id');
\t\t\t\tvar relation = \$(this).attr('relation') == 0 ? 1 : 0;
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: \"/api/api_task/attention\",
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tdata: {
\t\t\t\t\t\ttask_id: task_id,
\t\t\t\t\t\trelation: relation
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tgetList()
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})
\t\t}

\t\tfunction getElemploess(arr) {
\t\t\tvar res = [];
\t\t\tif(arr) {
\t\t\t\tarr.split(',').forEach(function(item) {
\t\t\t\t\tres.push(employees[item])
\t\t\t\t})
\t\t\t\treturn res.join(',');
\t\t\t}
\t\t}

\t\tfunction info(Data) {
\t\t\t\$('.info').click(function() {
\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\tvar data = Data[index];
                console.log(data);
                var approve_status = ['未开始', '未通过', '已通过', '待审批']; //任务审批状态
                var is_done = {\"-1\": \"未激活\",0: \"已激活\",1: \"已完成\",2: \"已作废\"}
\t\t\t\tvar urgent = ['', '1', '2', '3', '4', '5'];
\t\t\t\tvar color = ['', 'red', 'orange', 'green', 'blue', 'purple']
\t\t\t\tshowMark('#template3');
                \$('#showBox .title').text('详细信息');
\t\t\t\t\$('#templateCon [field]').each(function(i, e) {
\t\t\t\t\t\$(this).text(data[\$(this).attr('field')]);
\t\t\t\t\tif(\$(this).attr('field') == 'username') {
\t\t\t\t\t\t\$(this).text(data.staff.length > 0 ? data.staff[0].user.name : '');
\t\t\t\t\t} else if(\$(this).attr('field') == 'department_name') {
\t\t\t\t\t\t\$(this).text(data.staff.length > 0 ? data.staff[0].user.department_name : '');
\t\t\t\t\t} else if(\$(this).attr('field') == 'start_time1') {
\t\t\t\t\t\t\$(this).text(cs.getNowTime(data['htm_task.start_time']) + \" ~ \" + cs.getNowTime(data['htm_task.end_time']));
\t\t\t\t\t} else if(\$(this).attr('field') == \"htime\") {
\t\t\t\t\t\t\$(this).text((Math.ceil(parseInt(parseInt(new Date().getTime() / 1000) - data['htm_task.start_time']) / 86400)) >= 0 ? (Math.ceil(parseInt(parseInt(new Date().getTime() / 1000) - data['htm_task.start_time']) / 86400)) + \"天\" : 0)
\t\t\t\t\t} else if(\$(this).attr('field') == \"htm_contract.create_time\" || \$(this).attr('field') == \"htm_task.start_time\" || \$(this).attr('field') == \"htm_task.complete_time\" || \$(this).attr('field') == \"htm_task.auth_time\") {
\t\t\t\t\t\tdata[\$(this).attr('field')] != 0 ? \$(this).text(cs.getNowTime(data[\$(this).attr('field')],true)) : \$(this).text(\"\");
\t\t\t\t\t} else if(\$(this).attr('field') == \"htm_task.flow_status\") {
\t\t\t\t\t\t\$(this).text(data['htm_task.is_done'] == \"-1\" ? \"\":JSON.parse(data['htm_task.flow'])[data[\$(this).attr('field')]]);
\t\t\t\t\t} else if(\$(this).attr('field') == \"cname\") {
\t\t\t\t\t\t\$(this).text(data.HT_create_info.name || \"\");
\t\t\t\t\t} else if(\$(this).attr('field') == \"cdepartment_name\") {
\t\t\t\t\t\t\$(this).text(data.HT_create_info.department_name || \"\");
\t\t\t\t\t} else if(\$(this).attr('field') == \"htm_task.status\") {
\t\t\t\t\t\t\$(this).text(approve_status[data['htm_task.status']]);
\t\t\t\t\t} else if(\$(this).attr('field') == \"htm_task.auth_id\") {
\t\t\t\t\t\t\$(this).text(employees[data['htm_task.auth_id']] || \"\");
\t\t\t\t\t} else if(\$(this).attr('field') == \"htm_task.auth_id\") {
\t\t\t\t\t\t\$(this).text(employees[data['htm_task.auth_id']] || \"\");
\t\t\t\t\t} else if(\$(this).attr('field') == \"htm_task.auth_id\") {
\t\t\t\t\t\t\$(this).text(data['htm_task.auth_remark'] || \"\");
\t\t\t\t\t} else if(\$(this).attr('field') == \"htm_task.urgent\") {
\t\t\t\t\t\t\$(this).text(urgent[data['htm_task.urgent']] || \"\");
\t\t\t\t\t\t\$(this).css('background', color[urgent[data['htm_task.urgent']]])
\t\t\t\t\t}else if(\$(this).attr('field') == \"htm_task.is_done\") {
                        \$(this).text(is_done[data['htm_task.is_done']] || \"\");
                    }
\t\t\t\t});
                \$(\"#temHeader\").width(\$(\"#showBox\").width()-47);
\t\t\t\tvar list = [];
\t\t\t\tif(data['htm_task.remark'] == \"\") {
\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t\$('#templateCon #remark1').html('<div style=\"border:1px solid #ddd;text-align:center;height: 40px;line-height: 40px;\">暂无数据</div>');
\t\t\t\t\treturn;
\t\t\t\t} else {
\t\t\t\t\tcontent = [];
\t\t\t\t\tvar data = JSON.parse(data['htm_task.remark']);
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tcontent.push(
\t\t\t\t\t\t\t`<div style=\" padding:14px 0 14px 0;\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div style=\"    border-bottom: 1px solid #eee; padding: 5px;margin-bottom: 10px;color: #333;\">\${data[i]['flow']}</div>
\t\t\t\t\t\t\t\t\t\t<div style=\"width:40px; border-radius:40px;height: 40px; float:left;   text-align: center;line-height: 40px;color: #fff; display:\${data[i]['avatar'] ? \"none\" : \"block\"}; background:\${data[i]['avatar'] ? \"none\" : \"#4ebefd\"};\">\${data[i]['name']}</div>
\t\t\t\t\t\t\t\t\t\t<img style=\"width:\${data[i]['avatar'] ? \"40\" : \"0\"}px; border-radius:40px; display:\${data[i]['avatar'] ? \"inline-block\" : \"none\"}; \" src=\"\${data[i]['avatar'] }\">
\t\t\t\t\t\t\t\t\t\t<span style=\" margin-left: 10px;\" class=\"contact_person\">\${data[i]['name']}</span>
\t\t\t\t\t\t\t\t\t\t<span style=\"float:right;position:relative;top:8px;\">
\t\t\t\t\t\t\t\t\t\t\t\${data[i]['time'] != 0 ? data[i]['time'] : ''}
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div style=\"margin-top:10px;padding-left:45px;padding-bottom:10px;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"float:left;position:relative;top:4px;\">
\t\t\t\t\t\t\t\t\t\t\t\${data[i]['content']}
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>`
\t\t\t\t\t\t);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t\$('#templateBox #remark1').html(content);
\t\t\t})

\t\t}

\t\t// \$('[data-rel=tooltip]').tooltip();

\t\t//审批
\t\tfunction approve() {
\t\t\t\$(\"#dataList tr\").find('.sp').click(function() {
\t\t\t\t//\t\t\t\tif(\$(this).index() > 1) {
\t\t\t\tvar status = \$(this).attr('data-status');
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tchangeStatus(status, id);
\t\t\t\t//\t\t\t\t}
\t\t\t});
\t\t}

\t\t//对点击驳回 | 审批 | 撤销进行处理
\t\tfunction changeStatus(status, id) {
\t\t\tconsole.log(status)
\t\t\tvar data = {
\t\t\t\turl: '/api/api_task/sh_task',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tid: id,
\t\t\t\t\tstatus: status
\t\t\t\t}
\t\t\t}

\t\t\tif(status == 1) {
\t\t\t\t\$('#feedBack').show();
\t\t\t\t\$('#feedBack .hold').unbind('click').click(function() {
\t\t\t\t\tvar approve_reply = \$('#feedBack').find('input').val();
\t\t\t\t\tif(approve_reply == '') {
\t\t\t\t\t\tykp.prompt('驳回备注不能为空！');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}else{
\t\t\t\t\t\tykp.prompt('驳回成功！');
\t\t\t\t\t\tdata.data.auth_remark = approve_reply;
\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t})
//\t\t\t\tcs.closePop();
//\t\t\t\tif(status == 0) {
//\t\t\t\t\tbootbox.confirm('确认撤销审批？', function(flag) {
//\t\t\t\t\t\tif(flag) {
//\t\t\t\t\t\t\tsetStatus(data);
//\t\t\t\t\t\t}
//\t\t\t\t\t})
//\t\t\t\t}
\t\t\t}else if(status == 2){
\t\t\t\tykp.prompt('审批通过！');
\t\t\t\tsetStatus(data);
\t\t\t}else if(status == 3){
\t\t\t\t   \tlayui.use('layer', function() {
\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\tlayer.confirm('确认撤销审批？', function(flag) {
\t\t\t\t\t\t\tif(flag) {
\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t})
\t\t\t}
\t\t\telse {
\t\t\t\tsetStatus(data);
\t\t\t}
\t\t}

\t\t//发送任务审批状态
\t\tfunction setStatus(data) {
\t\t\tykp.doAjax({
\t\t\t\turl: data.url,
\t\t\t\tmethod: data.method,
\t\t\t\tdata: data.data,
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tgetList();
\t\t\t\t}
\t\t\t})
\t\t}
\t\t//发送短信
\t\tfunction sendMsg(id, type) {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_common/send_customer',
\t\t\t\tdata: {
\t\t\t\t\tcustomer_id: id,
\t\t\t\t\ttype: type
\t\t\t\t},
\t\t\t\tmethod: 'post',
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tykp.prompt('短信发送成功！');
\t\t\t\t}
\t\t\t})
\t\t}
\t\t//编辑
\t\tfunction edit(data, getMoneyList) {
\t\t\t\$('.edit').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\tvar Data = data[index];
\t\t\t\tvar status = \$(this).attr('data-status');
\t\t\t\tif(status == 3) {
\t\t\t\t\tykp.prompt('待审批状态不能编辑');
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\tvar userid = JSON.parse(ykp.getCookie('userinfo')).id;
\t\t\t\tvar fz = \$(this).attr('data-fuze');
\t\t\t\tif(userid != fz && \$(this).attr('team_id').split(',').indexOf(userid) == -1) {
\t\t\t\t\tykp.prompt('你不是负责人或协作人');
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(Data['htm_contract.status'] == 4) {
\t\t\t\t\tykp.prompt('订单已解约，不能编辑');
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(Data['htm_contract.is_done'] == 2) {
\t\t\t\t\tykp.prompt('订单已作废，不能编辑');
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tshowMark('#template');
\t\t\t\t\$('#showBox .title').text('编辑信息');
\t\t\t\t//\t\t\t\ttime_plug();
\t\t\t\tcs.timeplug();
\t\t\t\tvar customer_id = \$(this).parents('tr').attr('customer_id');
\t\t\t\t\$('#templateCon #sendMsg').attr('customer_id', customer_id);
\t\t\t\tvar remark; //存放备注数组对象
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_task/info',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter: 'htm_task.id = ' + id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\tvar task_status = data['htm_task.flow'] ? JSON.parse(data['htm_task.flow']) : '';
\t\t\t\t\t\tfor(var i in task_status) {
\t\t\t\t\t\t\t\$('#templateCon [field=\"flow_status\"]').append(new Option(task_status[i], i));
\t\t\t\t\t\t}
\t\t\t\t\t\tremark = new Array(task_status.length);
\t\t\t\t\t\t\$('#templateCon [field=\"urgent\"]').val(data['htm_task.urgent']);

\t\t\t\t\t\t\$('#templateCon [field=\"flow_status\"]').val(data['htm_task.flow_status']);
\t\t\t\t\t\t\$('#templateCon [field=\"complete_time\"]').val(data['htm_task.complete_time'] != '0' ? cs.getNowTime(data['htm_task.complete_time'],true) : '');
\t\t\t\t\t\t\$('#templateCon [field=\"remark\"]').val('');
\t\t\t\t\t\t\$('#templateCon [field=\"urgent\"]').val(data['htm_task.urgent']);
\t\t\t\t\t\tif(Data['htm_task.is_done'] == -1) {
\t\t\t\t\t\t\t\$('#templateCon [field=\"is_done\"]').val(0);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$('#templateCon [field=\"is_done\"]').val(data['htm_task.is_done']);
\t\t\t\t\t\t}

\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t\$('#templateCon [field=\"flow_status\"]').change(function() {
\t\t\t\t\tvar val = \$(this).val();
\t\t\t\t\t\$('#templateCon [field=\"remark\"]').val(remark[val] || \"\");
\t\t\t\t});

\t\t\t\t\$('#templateCon .sure_button').click(function() {
\t\t\t\t\tvar postdata = {};
\t\t\t\t\tpostdata['id'] = id;
\t\t\t\t\tvar status = false;
\t\t\t\t\tvar is_send = false;
\t\t\t\t\tif(\$('#templateCon #sendMsg input:checked').val() == 1) {
\t\t\t\t\t\tis_send = true;
\t\t\t\t\t}
\t\t\t\t\tvar customer_id = \$('#templateCon #sendMsg').attr('customer_id');
\t\t\t\t\t\$('#templateCon [field]').each(function(i, e) {
\t\t\t\t\t\tif(\$(this).attr('field') == 'complete_time') {
\t\t\t\t\t\t\tpostdata[\$(this).attr('field')] = new Date(\$(this).val()) / 1000;
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).val() == \"\" && \$(this).attr('field') != 'remark') {
\t\t\t\t\t\t\tykp.prompt('不能为空');
\t\t\t\t\t\t\tstatus = false;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tpostdata[\$(this).attr('field')] = \$(this).val();
\t\t\t\t\t\t\tstatus = true;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tvar val = \$('#templateCon [field=\"flow_status\"]').val();
\t\t\t\t\t//\t\t\t\t\tif(val) {
\t\t\t\t\t//\t\t\t\t\t\tremark[val] = \$('#templateCon [field=\"remark\"]').val();
\t\t\t\t\t//\t\t\t\t\t}
\t\t\t\t\tpostdata['remark'] = \$('#templateCon [field=\"remark\"]').val();
\t\t\t\t\tif(status) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_task/edit_task',
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: postdata,
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('编辑成功');
\t\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t\t\t/*if (is_send) {
\t\t\t\t\t\t\t\t\tsendMsg(customer_id,7);
\t\t\t\t\t\t\t\t}*/
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}

\t\t\t\t})
\t\t\t})
\t\t}
\t})
</script>";
    }

    public function getTemplateName()
    {
        return "admin/clientManage/alltask.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  657 => 634,  653 => 633,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	#templateCon label {*/
/* 		width: 90px;*/
/* 		text-align: right;*/
/* 	}*/
/* 	*/
/* 	#showBox table tbody .tdboder {*/
/* 		border-right: none !important;*/
/* 	}*/
/* 	*/
/* 	.radioBox {*/
/* 		display: inline-block;*/
/* 		width: 16px;*/
/* 		height: 16px;*/
/* 		line-height: 16px;*/
/* 		font-weight: bold;*/
/* 		text-align: center;*/
/* 		font-size: 12px;*/
/* 		color: #fff;*/
/* 		-moz-border-radius: 50%;*/
/* 		-webkit-border-radius: 50%;*/
/* 		border-radius: 50%;*/
/* 	}*/
/* 	#templateBox tbody tr td{height: 35px;}*/
/* </style>*/
/* */
/* <div class="widget-main">*/
/* 	<div class="row" id="topTool">*/
/* */
/* 		<div class="col-sx-4" style=" float: left;">*/
/* 			<input type="text" pts="0" sear="khm_customer.name" placeholder="企业名称" />*/
/* 		</div>*/
/* */
/* 		<div class="col-sx-4" style=" float: left;margin-left:5px;">*/
/* 			<input type="text" pts="0" sear="khm_customer.id" placeholder="企业编码" />*/
/* 		</div>*/
/* */
/* 		<div class="col-sx-4" style=" float: left;margin-left:5px;">*/
/* 			<!--<input type="text" pts="0" placeholder="负责人" sear="bmm_employees.name">-->*/
/* 			<select style="margin: 12px !important;width: 180px" class="advandced-search_sf select2-hidden-accessible" pts=1 sear="staff" tabindex="-1" data-type="gj" aria-hidden="true">*/
/* 				<option value=""> 负责人 </option>*/
/* 			</select>*/
/* 		</div>*/
/* */
/* 		<div class="col-sx-4" style=" float: left;margin-left:5px;">*/
/* 			<button type="button" id="search" title="搜索" class="btn btn-info btn-sm">*/
/*                 <i class="fa fa-search"></i>*/
/*             </button>*/
/* 		</div>*/
/* */
/* 		<div class="col-sx-4" style=" float: left;margin-left:5px;">*/
/* 			<button id="heightsearch" title="高级搜索" type="button" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/*                 <i class="fa fa-filter"></i>*/
/*             </button>*/
/* 		</div>*/
/* 		<div class="col-sx-4" style=" float: left;margin-left:5px;">*/
/* 			<button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/*                 <i class="fa fa-refresh"></i>*/
/*             </button>*/
/* 		</div>*/
/* 		<div class="col-sx-4" style=" float: left;margin-left:5px;">*/
/* 			<button type="button" id="addItem" title="添加" style="background:#32CD32 !important;border-color:#32CD32 !important;" contentAuthority="282" class="btn addBtn btn-info btn-sm">*/
/*                 <i class="fa fa-plus"></i>*/
/*             </button>*/
/* 		</div>*/
/* 		<div class="col-sx-4" contentAuthority="289" style=" float: left; margin-right: 5px;">*/
/* 			<button type="button" id="moveToClue" title="移交负责人" style="margin-left:5px;outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="moveToClue btn addBtn btn-info btn-sm position-relative">*/
/* 				<i class="fa fa-hand-o-right"></i>*/
/* 			</button>*/
/* 		</div>*/
/*         <div class="col-sx-4" contentAuthority="297" style=" float: left; margin-right: 5px;">*/
/*             <button type="button"  title="导出" style="margin-left:5px;outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="exportfile moveToClue btn addBtn btn-info btn-sm position-relative">*/
/*                 <i class="fa fa-sign-out"></i>*/
/*             </button>*/
/*         </div>*/
/* 		<div class="col-sx-4" style=" float: left;margin-left:5px;">*/
/* 			<div id="filterBtns" style="display:inline-block;width:290px;height: 36px">*/
/* 				<a href="javascript:void(0);" class="myFilter" style="line-height:32px;*/
/* 				background: #E6E6E6;" data-kind="0"> 查看全部</a>*/
/* 				<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="1"> 我负责的</a>*/
/* 				<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="2"> 我关注的</a>*/
/* 				<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-kind="3"> 我的下属</a>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="col-sx-4" style=" float: left;margin-left:5px;">*/
/* 			<div id="filterBtns" style="display:inline-block;width:290px;height: 36px">*/
/* 				<a href="javascript:void(0);" class="myFilter" style="background: #E6E6E6;line-height:32px" data-status="a">全部</a>*/
/* */
/* 				<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-status="3">*/
/* 					</i> 待审批</a>*/
/* 				<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-status="2"> 已通过</a>*/
/* 				<a href="javascript:void(0);" class="myFilter" style="line-height:32px" data-status="1"> 未通过</a>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* */
/* 		<!--高级搜索-->*/
/* 		<div id="heightsearch1" class="col-sx-12" style="margin-top:30px;position:absolute;background:#fff;z-index:1041;overflow: auto; padding: 10px 0px; display: none;">*/
/* 			<div class="row">*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>企业名称</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<input type="text" gjs=0 sear="khm_customer.name" />*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>优先级</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select gjs=0 sear="htm_task.urgent" data-type="gj" style="width:180px;">*/
/* 						<option value=""> 请选择 </option>*/
/* 						<option value="1">1</option>*/
/* 						<option value="2">2</option>*/
/* 						<option value="3">3</option>*/
/* 						<option value="4">4</option>*/
/* 						<option value="5">5</option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>服务项目</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select gjs=0 sear="htm_task.product_id" id="product" data-type="gj" style="width:180px;">*/
/* 						<option value=""> 请选择 </option>*/
/* 					</select>*/
/* 				</div>*/
/* */
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>任务状态</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select gjs=0 sear="htm_task.is_done" data-type="gj" style="width:180px;">*/
/* 						<option value=""> 请选择 </option>*/
/* 						<option value="0"> 已激活 </option>*/
/* 						<option value="-1"> 未激活 </option>*/
/* 						<option value="1">已完成 </option>*/
/* 						<option value="2"> 作废 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>激活时间</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 						<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="htm_task.activate_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="col-sx-4" style="float: left; margin-bottom:5px;">*/
/* 					<label>负责人</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select style="margin: 12px !important;width: 180px" class="advandced-search_sf select2-hidden-accessible" gjs=1 sear="staff" tabindex="-1" data-type="gj" aria-hidden="true">*/
/* 						<option value=""> 请选择 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style="float: left; margin-bottom:5px;">*/
/* 					<label>协作人</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select style="margin: 12px !important;width: 180px" class="advandced-search select2-hidden-accessible" gjs=2 sear="team_id" tabindex="-1" data-type="gj" aria-hidden="true">*/
/* 						<option value=""> 请选择 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>开始时间</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 						<option> &lt; </option>*/
/* 						<option> > </option>*/
/* 					</select>*/
/* */
/* 					<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 						<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="htm_task.start_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 					</div>*/
/* */
/* 					<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<input id="date-timepicker1" class="date-timepicker1" data-type="gj" data-status = "time"  gjs=0 sear="htm_task.start_time" class="form-control" style="height: 30px; width: 150px;">*/
/* 						<span class="input-group-addon" style="width:30px;height:30px;">*/
/* 							<i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 						</span>*/
/* 					</div>-->*/
/* 				</div>*/
/* */
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>订单期限</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 						<option> &lt; </option>*/
/* 						<option> > </option>*/
/* 					</select>*/
/* 					<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 						<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="htm_task.end_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 					</div>*/
/* 					<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<input id="date-timepicker1" class="date-timepicker1" data-type="gj" data-status = "time"  gjs=0 sear="htm_task.end_time" class="form-control" style="height: 30px;width: 150px;">*/
/* 						<span class="input-group-addon" style="width:30px;height:30px;">*/
/* 							<i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 						</span>*/
/* 					</div>-->*/
/* 				</div>*/
/* 				<!-- <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>现已耗时</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 						<option> &lt; </option>*/
/* 						<option> > </option>*/
/* 					</select>*/
/* 					<input type="text"  gjs=0 sear="" data-type="gj">*/
/* 				</div> -->*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>完成时间</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 						<option> &lt; </option>*/
/* 						<option> > </option>*/
/* 					</select>*/
/* 					<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 						<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="htm_task.done_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 					</div>*/
/* 					<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<input id="date-timepicker1" class="date-timepicker1" data-type="gj" data-status = "time"  gjs=0 sear="htm_task.done_time" class="form-control" style="height: 30px;width: 150px;">*/
/* 						<span class="input-group-addon" style="width:30px;height:30px;">*/
/* 							<i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 						</span>*/
/* 					</div>-->*/
/* 				</div>*/
/* 				<!--<div class="col-sx-4 " style=" float: left; margin-bottom:5px;">*/
/* 					<label>任务进度</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<input type="text" gjs=0 sear="htm_task.flow_status">*/
/* 				</div>-->*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>创建人</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select style="margin: 12px !important;width: 180px" type='2' class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true" gjs=9 sear="htm_contract.create_by">*/
/* 						<option value=""> 请选择 </option>*/
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
/* 						<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 						<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="htm_task.create_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>审批状态</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select gjs=0 sear="htm_task.status" data-type="gj" style="width:180px;">*/
/* 						<option value=""> 请选择 </option>*/
/* 						<option value="0"> 未开始 </option>*/
/* 						<option value="1"> 未通过 </option>*/
/* 						<option value="2"> 已通过 </option>*/
/* 						<option value="3"> 待审批 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>审批人</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select style="margin:12px!important;width: 180px" sear="htm_task.auth_id" data-type="gj" gjs=0 class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 						<option value=""> 请选择 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>审批时间</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 						<option> &lt; </option>*/
/* 						<option> > </option>*/
/* 					</select>*/
/* 					<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 						<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="htm_task.auth_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 					</div>*/
/* 					<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<input id="date-timepicker1" class="date-timepicker1" data-type="gj" data-status = "time"  gjs=0 sear="htm_task.auth_time" class="form-control" style="height: 30px;width: 150px;">*/
/* 						<span class="input-group-addon" style="width:30px;height:30px;">*/
/* 							<i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 						</span>*/
/* 					</div>-->*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>审批回复</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<input type="text" gjs=0 sear="htm_task.auth_remark" />*/
/* 				</div>*/
/* 				<div style="text-align:center;clear:both;padding-top:10px; ">*/
/* 					<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/*                         查询*/
/*                     </button>*/
/* 					<button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/*                        重置*/
/*                     </button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="custom_table">*/
/* 		<table id="dynamic-table">*/
/* 			<thead>*/
/* 				<tr class="thColor ">*/
/* 					<th>*/
/* 						<label class="pos-rel">*/
/* 							<input type="checkbox" class="ace" onclick="checkAll(this.checked)"/>*/
/* 							<span class="lbl"></span>*/
/* 						</label>*/
/* 					</th>*/
/* 					<th class=" center">操作</th>*/
/* 					<th class=" center" data-num="1">审批状态</th>*/
/* 					<th class=" center" data-num="2">企业名称</th>*/
/* 					<th class=" center" data-num="3">任务等级</th>*/
/* 					<th class=" center" data-num="4">优先级</th>*/
/* 					<th class=" center" data-num="5">服务项目</th>*/
/* 					<th class=" center" data-num="6">任务状态</th>*/
/* 					<th class=" center" data-num="7">激活时间</th>*/
/* 					<th class=" center" data-num="8">任务备注</th>*/
/* 					<th class=" center" data-num="9">负责人</th>*/
/* 					<th class=" center" data-num="10">协作人</th>*/
/* 					<th class=" center" data-num="11">订单期限</th>*/
/* 					<th class=" center" data-num="12">耗时（天）</th>*/
/* 					<th class=" center" data-num="13">完成时间</th>*/
/* 					<th class=" center" data-num="14">创建人</th>*/
/* 					<th class=" center" data-num="15">创建时间</th>*/
/* 					<th class=" center" data-num="16">审批人</th>*/
/* 					<th class=" center" data-num="17">审批时间</th>*/
/* 					<th class=" center" data-num="18">审批回复</th>*/
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
/* */
/* 	<!--添加编辑-->*/
/* 	<div id="template" style="display: none;">*/
/* 		<div style="margin-top:15px;">*/
/* 			<!--<label> 紧急程度： </label>*/
/* 			<select field="urgent" style="width:180px">*/
/* 				<option value=""> 请选择 </option>*/
/* 				<option value="1">1</option>*/
/* 				<option value="2">2</option>*/
/* 				<option value="3">3</option>*/
/* 				<option value="4">4</option>*/
/* 				<option value="5">5</option>*/
/* 			</select>-->*/
/* 			<label> 任务流程： </label>*/
/* 			<select field="flow_status" style="width:180px">*/
/* 				<option value=""> 请选择 </option>*/
/* 			</select>*/
/* <!-- 			<label> 完成时间： </label>*/
/* 			<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 				<input class="date-timepicker1 required" field="complete_time" class="form-control" style="height: 30px; width: 150px;padding-left:5px;">*/
/* 				<span class="input-group-addon" style="width:30px;height:30px;">*/
/*                     <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                 </span>*/
/* 			</div> -->*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* */
/* 			<label> 任务状态： </label>*/
/* 			<select field="is_done" style="width:180px">*/
/* 				<option value=""> 请选择 </option>*/
/* 				<option value="0"> 已激活 </option>*/
/* 				<option value="1"> 已完成 </option>*/
/* 				<option value="2"> 已作废 </option>*/
/* 			</select>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label style="float:left"> 任务备注： </label>*/
/* 			<textarea style="width:calc(100% - 95px);margin-left:5px;resize:none;padding:5px;" field="remark"></textarea>*/
/* 		</div>*/
/* 		<div id="sendMsg" customer_id="" style="height: 30px;line-height: 40px">*/
/* 			<label>是否发送短信：</label>*/
/* 			<input type="radio" value="1" name="is_send">是*/
/* 			<input type="radio" value="2" name="is_send" checked="true">否*/
/* 		</div>*/
/* 		<!--<div style="margin-top:15px;">*/
/* 			<label> 参与人： </label>*/
/* 			<select multiple="" id="state" name="state" class="select2 select2-hidden-accessible" data-placeholder="请选择" style="width: 414px;" tabindex="-1" aria-hidden="true"></select>*/
/* 		</div>-->*/
/* 		<div style="margin-top:15px;text-align:right;">*/
/* 			<button class="sure_button">*/
/*                 <i class="fa fa-check" aria-hidden="true"></i>*/
/*                 保存*/
/*             </button>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div id="template1" style="display: none;">*/
/* 		<div class="" style="margin-top:15px;">*/
/* 			<label> 企业名称： </label>*/
/* 			<select id="customer_name" field="customer_id" style="width: 180px;">*/
/* 				<option value="">请选择公司</option>*/
/* 			</select>*/
/* 			<label> 产品： </label>*/
/* 			<select id="cp" field="product_id" style="width: 180px;">*/
/* 				<option value="">请选择产品</option>*/
/* 			</select>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 优先级： </label>*/
/* 			<select field="urgent" style="width:180px">*/
/* 				<option value=""> 请选择 </option>*/
/* 				<option value="1">1</option>*/
/* 				<option value="2">2</option>*/
/* 				<option value="3">3</option>*/
/* 				<option value="4">4</option>*/
/* 				<option value="5">5</option>*/
/* 			</select>*/
/* 			<label> 负责人： </label>*/
/* 			<select id="fz" field="one_fuze" style="width: 180px;">*/
/* 				<option value="">请选择负责人</option>*/
/* 			</select>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 开始时间： </label>*/
/* 			<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 				<input class="date-timepicker1 required" field="start_time" class="form-control" style="height: 30px; width: 150px;padding-left:5px;">*/
/* 				<span class="input-group-addon" style="width:30px;height:30px;">*/
/*                     <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                 </span>*/
/* 			</div>*/
/* 			<label> 结束时间： </label>*/
/* 			<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 				<input class="date-timepicker1 required" field="end_time" class="form-control" style="height: 30px; width: 150px;padding-left:5px;">*/
/* 				<span class="input-group-addon" style="width:30px;height:30px;">*/
/*                     <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                 </span>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* */
/* 		<div style="margin-top:15px;">*/
/* 			<label style="float:left"> 任务备注： </label>*/
/* 			<textarea style="width:calc(100% - 95px);margin-left:5px;resize:none;padding:5px;" field="remark"></textarea>*/
/* 		</div>*/
/* */
/* 		<!--<div style="margin-top:15px;">*/
/* 			<label> 参与人： </label>*/
/* 			<select multiple="" id="state" name="state" class="select2 select2-hidden-accessible" data-placeholder="请选择" style="width: 414px;" tabindex="-1" aria-hidden="true"></select>*/
/* 		</div>-->*/
/* 		<div style="margin-top:15px;text-align:right;">*/
/* 			<button class="sure_button">*/
/*                 <i class="fa fa-check" aria-hidden="true"></i>*/
/*                 保存*/
/*             </button>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row" id="template3" style="display:none;width:678px;">*/
/* 		<div class="col-sm-12" id="editBox">*/
/* 			<table width="100%" style="border-collapse:collapse;margin-bottom:15px;">*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">企业名称：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData0" field="khm_customer.name"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">优先级：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData1 radioBox" field="htm_task.urgent"></span>*/
/* 						<!--<span class="radioBox" style="background:${color[urgents[data[i]['htm_task.urgent']]]}">${urgents[data[i]['htm_task.urgent']]}</span>-->*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">服务项目：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData2" field="productName"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">负责人：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData4" field="username"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">负责部门：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData5" field="department_name"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">开始时间：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData6" field="htm_task.start_time"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">订单期限：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData7" field="start_time1"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">耗时：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData8" field="htime"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">任务进度：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData10" field="htm_task.flow_status"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">任务状态：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData11" field="htm_task.is_done"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">完成时间：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData9" field="htm_task.complete_time"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">创建人：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData11" field="cname"></span>*/
/* 					</td>*/
/* */
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">创建时间：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData12" field="htm_contract.create_time"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">创建部门：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData13" field="cdepartment_name"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">审批状态：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData38" field="htm_task.status"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">审批人：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData39" field="htm_task.auth_id"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr style="">*/
/* 					<td style="text-align: right !important">审批时间：</td>*/
/* 					<td style="text-align: left !important" class="tdboder">*/
/* 						<span class="disData14" field="htm_task.auth_time"></span>*/
/* 					</td>*/
/* 					<td style="text-align: right !important">审批回复：</td>*/
/* 					<td style="text-align: left !important">*/
/* 						<span class="disData15" field="htm_task.auth_remark"></span>*/
/* 					</td>*/
/* 				</tr>*/
/* */
/* 			</table>*/
/* 			<div style="width: 430px; margin-bottom: 50px;">*/
/* 				<td style="text-align: right !important">任务备注：</td>*/
/* 				<span class="disData2" style="word-wrap: break-word;" field="htm_task.remark1"></span>*/
/* 			</div>*/
/* 			<div style="margin-bottom: 10px;"> 流程备注： </div>*/
/* 			<ul id="remark1"></ul>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<!-- 审批回复 -->*/
/* 	<div class="label_popup" id="feedBack" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 		<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 	            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
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
/* */
/* {% include 'admin/mark.html' %} {% include 'admin/customerDetail.html' %}*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* <script>*/
/* 	jQuery(function($) {*/
/* 		var order = 'htm_task.id desc';*/
/* 		var page_size = 10; //默认每页显示的条目数为 10 */
/* 		var filter = '(((htm_contract.status = 1 or htm_contract.status = 3 )and htm_contract.auth_status1 = 2 and htm_contract.auth_status2 = 2) or htm_task.contract_id = 0)'; //搜索条件  初始为空*/
/* 		var employees = []; //所有员工*/
/* 		var products = []; //所有产品*/
/* 		var aid = ykp.getCookie("aid");*/
/* 		var time = ykp.getCookie("time");*/
/* 		cs.dataRang();*/
/* 		pagets();*/
/* 		$('#filterBtns a').mouseover(function() {*/
/* 			$(this).addClass('over');*/
/* 		})*/
/* 		$('#filterBtns a').mouseout(function() {*/
/* 			$(this).removeClass('over');*/
/* 		})*/
/* 		cs.setFuze({*/
/* 			conId: "#dataList",*/
/* 			url: "/api/api_task/transfer_user",*/
/* 			task: true,*/
/* 			fun: function() {*/
/* 				getList();*/
/* 			}*/
/* 		});*/
/* */
/* */
/* 		cs.exportFile({*/
/* 			url:"/api/api_task/export",*/
/* 			title:"所有任务"*/
/* 		})*/
/* 		//添加*/
/* 		addItem();*/
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_task/get_task',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: filter,*/
/* 				limit: page_size*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '#pageBar'*/
/* 			},*/
/* 			initOrder: 'khm_customer.id',*/
/* 			defaultOrder: order,*/
/* 			contentId: "#dataList",*/
/* 			params: [{*/
/* 				id: "#dynamic-table",*/
/* 				field: ["","", "htm_task.status", "khm_customer.name", "", "htm_task.urgent",*/
/* 					"productName", "htm_task.is_done", "htm_task.activate_time", "htm_task.remark1", "", "htm_task.team_id", "htm_task.end_time",*/
/* 					"", "htm_task.complete_time", "HT_create_info.name","htm_contract.create_time","htm_task.auth_id","htm_task.auth_time","htm_task.auth_remark"*/
/* 				]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* */
/* 		ykp.doAjax({*/
/* 			url: "/api/api_product/index",*/
/* 			data: {*/
/* 				limit: 1000*/
/* 			},*/
/* 			method: "post",*/
/* 			success: function(res) {*/
/* 				var data = res.data.items;*/
/* 				var item = [];*/
/* 				for(var i in data) {*/
/* 					item.push(`<option value='${data[i]["ckm_product.id"]}'>${data[i]["ckm_product.name"]}</option>`);*/
/* 				}*/
/* 				$('#product').append(item.join(''));*/
/* 			}*/
/* 		})*/
/* */
/* 		function addItem() {*/
/* 			$('#addItem').click(function() {*/
/* 				showMark('#template1');*/
/*                 $('#showBox .title').text('添加');*/
/* 				cs.get_cus2('#templateBox #customer_name');*/
/* 				cs.get_cp('#templateBox #cp');*/
/* 				cs.getElem2('#templateBox #fz');*/
/* 				cs.timeplug();*/
/* 				$('#templateBox .sure_button').click(function() {*/
/* 					var postdata = {};*/
/* 					var status = false;*/
/* 					$('#templateCon [field]').each(function(i, e) {*/
/* 						if($(this).attr('field') == 'start_time' || $(this).attr('field') == 'end_time') {*/
/* 							postdata[$(this).attr('field')] = new Date($(this).val()) / 1000;*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).val() == "" && $(this).attr('field') != 'remark') {*/
/* 							ykp.prompt('不能为空');*/
/* 							status = false;*/
/* 						} else {*/
/* 							postdata[$(this).attr('field')] = $(this).val();*/
/* 							status = true;*/
/* 						}*/
/* 					});*/
/* 					if(postdata['start_time'] > postdata['end_time']) {*/
/* 						ykp.prompt('结束时间应大于开始时间');*/
/* 						return false;*/
/* 					}*/
/* 					var val = $('#templateCon [field="product_id"]').val();*/
/* 					if(val) {*/
/* 						postdata['remark1'] = $('#templateCon [field="remark"]').val();*/
/* 					}*/
/* 					if(status) {*/
/* 						ykp.doAjax({*/
/* 							url: '/api/api_task/add_task',*/
/* 							method: 'post',*/
/* 							data: postdata,*/
/* 							success: function(res) {*/
/* 								ykp.prompt('添加成功');*/
/* 								cs.close();*/
/* 								getList();*/
/* 							}*/
/* 						});*/
/* 					}*/
/* 				});*/
/* 			})*/
/* 		}*/
/* */
/* 		function edititem(data) {*/
/* 			$('.edit1').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				var index = $(this).parents('tr').index();*/
/* 				var Data = data[index];*/
/* 				showMark('#template1');*/
/*                 $('#showBox .title').text('编辑信息');*/
/* 				cs.get_cus2('#templateBox #customer_name');*/
/* 				cs.get_cp('#templateBox #cp');*/
/* 				cs.getElem2('#templateBox #fz');*/
/* 				cs.timeplug();*/
/*                 for(var i in Data) {*/
/* 					$('#templateBox').find('input,select,textarea').each(function() {*/
/*                         if($(this).attr('field') == i.replace(/htm_task./, '')) {*/
/* 							if(i.replace(/htm_task./, '') == 'start_time' || i.replace(/htm_task./, '') == 'end_time') {*/
/* 								$(this).val(cs.getNowTime(Data[i].replace(/htm_task./, '')));*/
/* 							} else if(i.replace(/htm_task./, '') == 'customer_id') {*/
/* 								$(this).val(Data[i].replace(/htm_task./, '')).trigger('change');*/
/* 							} else if(i.replace(/htm_task./, '') == 'product_id') {*/
/*                                 let dataVal = Data[i].replace(/htm_task./, '');*/
/*                                 let it = $(this);*/
/*                                 setTimeout(function () {*/
/*                                     it.val(dataVal).trigger('change');*/
/*                                 },300)*/
/*                                 //$(this).val(Data[i].replace(/htm_task./, '')).trigger('change');*/
/* 							} else if(i.replace(/htm_task./, '') == 'remark') {*/
/*                                 $(this).val(Data["htm_task.remark1"]);*/
/* 							} else if(i.replace(/htm_task./, '') == "one_fuze"){*/
/* 								let dataVal = Data[i].replace(/htm_task./, '');*/
/* 								let it = $(this);*/
/* 							   setTimeout(function () {*/
/* 									it.val(dataVal).trigger('change');*/
/* 								},300)*/
/* */
/* 							}else {*/
/* 								$(this).val(Data[i].replace(/htm_task./, ''));*/
/* 							}*/
/* */
/* 						}*/
/*                     })*/
/* 				}*/
/* */
/* 				$('#templateBox .sure_button').click(function() {*/
/* 					var postdata = {};*/
/* 					var status = false;*/
/* 					$('#templateCon [field]').each(function(i, e) {*/
/* 						if($(this).attr('field') == 'start_time' || $(this).attr('field') == 'end_time') {*/
/* 							postdata[$(this).attr('field')] = new Date($(this).val()) / 1000;*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).val() == "" && $(this).attr('field') != 'remark') {*/
/* 							ykp.prompt('不能为空');*/
/* 							status = false;*/
/* 						} else {*/
/* 							postdata[$(this).attr('field')] = $(this).val();*/
/* 							status = true;*/
/* 						}*/
/* 					});*/
/* 					var val = $('#templateCon [field="product_id"]').val();*/
/* 					if(val) {*/
/* 						postdata['remark1'] = $('#templateCon [field="remark"]').val();*/
/* 					}*/
/* 					postdata['id'] = id;*/
/* 					if(status) {*/
/* 						ykp.doAjax({*/
/* 							url: '/api/api_task/edit_new_task',*/
/* 							method: 'post',*/
/* 							data: postdata,*/
/* 							success: function(res) {*/
/* 								ykp.prompt('编辑成功');*/
/* 								cs.close();*/
/* 								getList();*/
/* 							}*/
/* 						});*/
/* 					}*/
/* 				})*/
/* 			})*/
/* 		}*/
/* */
/* 		$('.myFilter').click(function() {*/
/* 			if(!$(this).hasClass('clc')) {*/
/* 				$(this).addClass('clc').siblings().removeClass('clc');*/
/* 			}*/
/* 			var user = JSON.parse(ykp.getCookie('userinfo'));*/
/* 			var data = {*/
/* 				"type": 1,*/
/* 				"limit": page_size,*/
/* 				'page': 1,*/
/* 				'filter': filter,*/
/* 				'order': order*/
/* 			};*/
/* 			var filter_ = $(this).attr('data-kind');*/
/* 			if(filter_ == '0') {*/
/* 				getList();*/
/* 				return;*/
/* 			}*/
/* 			//我负责的*/
/* 			if(filter_ == '1') {*/
/* 				data['staff'] = user.name;*/
/* 			}*/
/* 			//我关注的*/
/* 			if(filter_ == '2') {*/
/* 				data['relation'] = 'helloworld';;*/
/* 			}*/
/* 			//我的下属*/
/* 			if(filter_ == '3') {*/
/* 				data.up_user = user.id;*/
/* 			}*/
/* 			filter = data['filter'];*/
/* 			if($(this).attr('data-kind') == undefined) {*/
/* 				filter_ = $(this).attr('data-status');*/
/* 				if(filter_ == 'a') {*/
/* 					getList();*/
/* 					return;*/
/* 				}*/
/* 				data['filter'] += ' and htm_task.status = ' + filter_;*/
/* */
/* 			}*/
/* 			getList_2(data);*/
/* */
/* 		})*/
/* */
/* 		function pagets() {*/
/* 			if(time && time != '') {*/
/*                 var timestamp = ''; //条件*/
/* 				var today = new Date().setHours(0, 0, 0, 0) / 1000; //今天零点的时间戳*/
/* 				var day_1 = cs.getNowTime(Date.parse(new Date()) / 1000).substr(-2) - 1; //距离本月1号有多少天*/
/* 				var lastmonthday_1 = cs.getNowTime(Date.parse(new Date()) / 1000);*/
/* 				var newday = lastmonthday_1.substring(0, 4) + '-' + (lastmonthday_1.substring(5, 7) - 1) + '-01';*/
/* 				if(lastmonthday_1.substring(5, 7) == 1) {*/
/* 					newday = (lastmonthday_1.substring(0, 4) - 1) + '-12-01';*/
/* 				}*/
/* 				var newdaytime = Date.parse(new Date(newday)) / 1000; //上个月1号的时间戳*/
/* 				switch(time) {*/
/* 					case '1':*/
/* 						timestamp = `htm_task.done_time>${today}`;*/
/* 						break;*/
/* 					case '2':*/
/* 						timestamp = `htm_task.done_time<${today} and htm_task.create_time>${today-86400}`*/
/* 						break;*/
/* 					case '3':*/
/* 						timestamp = `htm_task.done_time>${today-86400*6}`;*/
/* 						break;*/
/* 					case '4':*/
/* 						timestamp = `htm_task.done_time>${today-86400*29}`;*/
/* 						break;*/
/* 					case '5':*/
/* 						timestamp = `htm_task.done_time>${today-86400*day_1}`;*/
/* 						break;*/
/* 					case '6':*/
/* 						timestamp = `htm_task.done_time<${today-86400*day_1} and htm_task.create_time>${newdaytime}`;*/
/* 						break;*/
/* 				}*/
/*                 var aid_2 = ykp.getCookie("aid_2");*/
/* 				var filter = `htm_task.is_del = 0 and htm_task.one_fuze=${aid_2} and ${timestamp}`;*/
/*                 if(aid_2 == '' || aid_2 == undefined) {*/
/*                     filter = `${timestamp}`*/
/*                 }*/
/* 				var data = {*/
/* 					limit: page_size,*/
/* 					filter: filter,*/
/* 					order: order*/
/* 				}*/
/* 				getList_2(data);*/
/* 				ykp.setCookie("aid", "", (1 / 24));*/
/* 				ykp.setCookie("time", "", (1 / 24));*/
/* 			} else if(ykp.getCookie('titleTask') && ykp.getCookie('titleTask') != '') {*/
/* 				var kind = ykp.getCookie('titleTask');*/
/* 				var data = {*/
/* 					limit: page_size,*/
/* 					//filter: `htm_task.status <> 2`,*/
/* 					filter: '( `htm_contract`.`contract_type` = 2 OR `htm_task`.`contract_id` = 0 ) AND `htm_task`.`is_done` = 0 AND ((( htm_contract.STATUS = 1 OR htm_contract.STATUS = 3 ) AND htm_contract.auth_status1 = 2 AND `htm_contract`.`auth_status2` = 2 ) OR `htm_task`.`contract_id` = 0 )',*/
/* 					order: order*/
/* 				}*/
/* 				if(kind == '10') {*/
/* 					data.filter = `htm_task.status = 0`*/
/* 				}*/
/* 				ykp.setCookie("titleTask", '', (1 / 24));*/
/* 				getList_2(data);*/
/* 			} else {*/
/* 				//获取列表数据*/
/* 				ykp.setCookie("filter", "");*/
/* 				ykp.setCookie("where", "");*/
/* 				getList();*/
/* 			}*/
/* 		}*/
/* */
/* 		$('#flush').click(function() {*/
/* 			filter = '(((htm_contract.status = 1 or htm_contract.status = 3 )and htm_contract.auth_status1 = 2 and htm_contract.auth_status2 = 2) or htm_task.contract_id = 0)'; //搜索条件  初始为空	*/
/* 			getList();*/
/* 		})*/
/* */
/* 		function getList_2(data) {*/
/* 			ykp.list({*/
/* 				url: '/api/api_task/get_task',*/
/* 				method: 'post',*/
/* 				data: data,*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 					//order: order*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt('暂无数据！');*/
/* 						}, 1000);*/
/* 						$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return;*/
/* 					}*/
/* 					addList(res);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		ykp.doAjax({*/
/* 			url: '/api/api_department/index',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				select: 'bmm_department.name,bmm_department.id',*/
/* 				limit: 999,*/
/* 				filter: 'bmm_department.is_del=0'*/
/* 			},*/
/* 			success: function(res) {*/
/* 				var data = res.data.items;*/
/* 				$('.advandced-search2').css('margin-right', '5px').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* 				for(var i in data) {*/
/* 					$('.advandced-search2').append(new Option(data[i]['name'], data[i]['id']));*/
/* 				}*/
/* 			}*/
/* 		});*/
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
/*                     $('.advandced-search').select2({*/
/* 						allowClear: true*/
/* 					});*/
/* 					$('.advandced-search_sf').select2({*/
/* 						allowClear: true*/
/* 					});*/
/* 					for(var i in data) {*/
/* 						if(data[i]['name']) {*/
/* 							employees[data[i]['id']] = data[i]['name'];*/
/* 							$('.advandced-search').append(new Option(data[i]['name'], data[i]['id']));*/
/* 							$('.advandced-search_sf').append(new Option(data[i]['name']));*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//获取所有产品*/
/* 		getProducts();*/
/* */
/* 		function getProducts() {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_product/f7',*/
/* 				method: 'post',*/
/* 				async: false,*/
/* 				data: {*/
/* 					select: 'ckm_product.id,ckm_product.name'*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					for(var i in data) {*/
/* 						products[parseInt(data[i]['id'])] = data[i]['name'];*/
/* 						$('select[sear="htm_contract.service_items"]').append(new Option(data[i]['name'], parseInt(data[i]['id'])));*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 		time_plug();*/
/* 		//时间插件*/
/* 		cs.timeplug();*/
/* */
/* 		function time_plug() {*/
/* 			if(!ace.vars['old_ie']) {*/
/* 				$('#templateCon .date-timepicker1,.date-timepicker1').datetimepicker({*/
/* 					// format: 'YYYY-MM-DD', //use this option to display seconds*/
/* 					icons: {*/
/* 						time: 'fa fa-clock-o',*/
/* 						date: 'fa fa-calendar',*/
/* 						up: 'fa fa-chevron-up',*/
/* 						down: 'fa fa-chevron-down',*/
/* 						previous: 'fa fa-chevron-left',*/
/* 						next: 'fa fa-chevron-right',*/
/* 						today: 'fa fa-arrows ',*/
/* 						clear: 'fa fa-trash',*/
/* 						close: 'fa fa-times'*/
/* 					}*/
/* 				}).next().on(ace.click_event, function() {*/
/* 					$(this).prev().focus();*/
/* 				});*/
/* 			}*/
/* */
/* 			//月份*/
/* 			$('#templateCon .select2').css('width', '414px').select2({*/
/* 				allowClear: true*/
/* 			});*/
/* 			$('#select2-multiple-style .btn').unbind('click').on('click', function(e) {*/
/* 				var target = $(this).find('input[type=radio]');*/
/* 				var which = parseInt(target.val());*/
/* 				if(which == 2) $('.select2').addClass('tag-input-style');*/
/* 				else $('.select2').removeClass('tag-input-style');*/
/* 			});*/
/* 		}*/
/* */
/* 		//普通搜索*/
/* 		function general_search() {*/
/* 			var data = {*/
/* 				url: '/api/api_task/get_task',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: page_size*/
/* 					//order: order*/
/* 				}*/
/* 			}*/
/* */
/* 			cs.doSearch('#search', data, 'filter', false, function(res, _filter) {*/
/* 				filter = _filter;*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					return;*/
/* 				}*/
/* 				addList(res);*/
/* 			}, filter)*/
/* 		}*/
/* */
/* 		//自定义table*/
/* 		cs.custorm_check('#dynamic-table', '#dataList', true);*/
/* */
/* 		//高级搜索*/
/* 		function advanced_Search() {*/
/* 			var data = {*/
/* 				url: '/api/api_task/get_task',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: page_size,*/
/* 					order: order*/
/* 				}*/
/* 			}*/
/* */
/* 			cs.hSearch('#search1', data, 'filter', false, function(res, _filter) {*/
/* 				filter = _filter;*/
/* 				$('.in').removeClass('modal-backdrop');*/
/* 				$("#heightsearch1").slideUp();*/
/* 				$("#heightsearch").removeClass('active').css('z-index', '');*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					return;*/
/* 				}*/
/* 				addList(res);*/
/* 			}, filter);*/
/* 		}*/
/* */
/* 		cs.showHeightSearch('#heightsearch', '#heightsearch1');*/
/* */
/* 		//改变每页显示的条目数*/
/* 		changePage();*/
/* */
/* 		function changePage() {*/
/* 			$('#changePageNum').change(function() {*/
/* 				page_size = $(this).val();*/
/* 				getList();*/
/* 			})*/
/* 		}*/
/* 		advanced_Search();*/
/* 		general_search();*/
/* 		//获取列表数据*/
/* 		function getList() {*/
/* */
/* 			ykp.list({*/
/* 				url: '/api/api_task/get_task',*/
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
/* 						setTimeout(function() {*/
/* 							ykp.prompt('暂无数据！');*/
/* 						}, 1000);*/
/* 						$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return;*/
/* 					}*/
/* 					addList(res);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		function getSortTime(data) {*/
/* 			for(var i = 0; i < data.length; i++) {*/
/* 				for(var j = 0; j < data.length - 1 - i; j++) {*/
/* 					if(data[i]['end_time'] > data[j + 1]['end_time']) {*/
/* 						var t = data[i];*/
/* 						data[j] = data[j + 1];*/
/* 						data[j + 1] = t;*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 			return data;*/
/* 		}*/
/* */
/* 		function addList(res) {*/
/* 			var data = res.data.items;*/
/* 			var html = '';*/
/* 			var urgents = ['', '1', '2', '3', '4', '5']; //优先级*/
/* 			var approve_status = ['未开始', '未通过', '已通过', '待审批']; //任务审批状态*/
/* 			var task_status = []; //任务状态*/
/* */
/* 			var styles = [];*/
/* 			$('#dynamic-table th').each(function(i, e) {*/
/* 				styles.push($(this).css('display'));*/
/* 			});*/
/*             //console.log(styles);*/
/*             var remarkList = {};*/
/* 			var remarkList1 = [];*/
/* 			var remarkListStr = [];*/
/* 			var num = "";*/
/* 			var range_title = [];*/
/* 			//审批权限为true可以审批,为false不可审批*/
/* 			var spApp = cs.approve_authority({*/
/* 				name: '所有任务',*/
/* 				nodes: [111]*/
/* 			});*/
/* 			var getMoneyList = {};*/
/* */
/* 			var color = ['', 'red', 'orange', 'green', 'blue', 'purple']*/
/* 			for(var i in data) {*/
/* 				if(data[i]['htm_task.flow']) {*/
/* 					for(var j in JSON.parse(data[i]['htm_task.flow'])) {*/
/* 						if(data[i]['htm_task.remark'].indexOf('[') != -1) {*/
/* 							remarkList[JSON.parse(data[i]['htm_task.flow'])[j]] = JSON.parse(data[i]['htm_task.remark'])[j] || "";*/
/* 							remarkListStr.push(JSON.parse(data[i]['htm_task.flow'])[j] + "：" + (JSON.parse(data[i]['htm_task.remark'])[j] || ""));*/
/* 						} else {*/
/* 							remarkListStr.push(JSON.parse(data[i]['htm_task.flow'])[j] + "：" + "");*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				num = Math.ceil(remarkListStr.join(',').length / 20);*/
/* 				for(var k = 0; k < num; k++) {*/
/* 					range_title.push(remarkListStr.join().slice(20 * k, (k + 1) * 20));*/
/* 				}*/
/* */
/* 				getMoneyList[i] = {};*/
/* 				getMoneyList[i]['total_monry'] = data[i]['htm_contract.total_monry'];*/
/* 				getMoneyList[i]['taskList'] = getSortTime(data[i]['taskList']);*/
/* 				remarkList1[i] = range_title;*/
/* 				remarkListStr = [];*/
/* 				var is_done = {*/
/* 					"-1": "未激活",*/
/* 					0: "已激活",*/
/* 					1: "已完成",*/
/* 					2: "已作废"*/
/* 				}*/
/* */
/* 				//range_title.join(',')   //${remarkList1[i].join('&#13;')}*/
/*                 //<a   team_id="${data[i]['htm_task.team_id']}" data-fuze="${data[i]['htm_task.one_fuze']}" data-status="${data[i]['htm_task.status']}" style="color:#fff !important; display: ${(data[i]['htm_task.status'] == 1||data[i]['htm_contract.id'] == "") ? 'inline-block' : 'none'};" title="编辑" href="javascript:void(0);" class="btBlue edit1"><i class="fa fa-pencil-square-o"></i></a>*/
/* 				task_status = data[i]['htm_task.flow'] ? JSON.parse(data[i]['htm_task.flow']) : '';*/
/* 				html += `<tr data-id = "${data[i]['htm_task.id']}" data-fuze="${data[i]['htm_task.one_fuze']}" data-xz="${data[i]['htm_task.one_fuze']}" cid="${data[i]['htm_task.id']}" customer_id="${data[i]['htm_task.id']}">*/
/* 							<td class="center">*/
/* 		                        <label class="pos-rel">*/
/* 		                        <input type="checkbox" name="check" class="ace"/>*/
/* 		                        <span class="lbl"></span>*/
/* 		                        </label>*/
/* 		                    </td>*/
/* 							<td>*/
/* 								<label class="pos-rel">*/
/* 									<a style="color:#fff !important" contentAuthority="110" href="javascript:void(0);" title="详情" class="btOrange info"><i class="fa fa-info"></i></a>*/
/* 									<a   team_id="${data[i]['htm_task.team_id']}" data-fuze="${data[i]['htm_task.one_fuze']}" data-status="${data[i]['htm_task.status']}" style="color:#fff !important; display:${(data[i]['htm_task.status'] == 1||data[i]['htm_task.status'] == 0) ? 'inline-block' : 'none'}" title="编辑" href="javascript:void(0);" class="btBlue edit1"><i class="fa fa-pencil-square-o"></i></a>*/
/* 									<a  contentAuthority="110" team_id="${data[i]['htm_task.team_id']}" data-fuze="${data[i]['htm_task.one_fuze']}" data-status="${data[i]['htm_task.status']}" style="display: ${(data[i]['htm_task.status'] == 1||data[i]['htm_task.status'] == 0) ? 'inline-block' : 'none'};color:#fff !important"  href="javascript:void(0);" title="反馈" class="btGreen edit"><i class="fa fa-commenting-o"></i></a>*/
/* 									<span>*/
/* 										<a href="javascript:void(0);" class="sp btOrange" data-status = "3" style="display:${spApp ? ((data[i]['htm_task.status'] == 2 && data[i]['htm_task.is_done'] == 1)  ? 'inline-block' : 'none') : 'none'}; color:#fff !important" title="撤销"><i class="fa fa-rotate-left"></i></a>*/
/* 										<a href="javascript:void(0);" class="sp btGreen" data-status = "2" style="display:${spApp ? (data[i]['htm_task.status'] == 3 && data[i]['htm_task.is_done'] == 1 ? 'inline-block' : 'none') : 'none'}; color:#fff !important" title="通过"><i class="fa fa-check-circle-o"></i></a>*/
/* 										<a href="javascript:void(0);" class="sp btRed" data-status = "1" style="display:${spApp ? (data[i]['htm_task.status'] == 3 && data[i]['htm_task.is_done'] == 1 ? 'inline-block' : 'none') : 'none'}; color:#fff !important" title="驳回"><i class="fa fa-times-circle"></i></a>*/
/* 									</span>*/
/* 								</label>*/
/* 							</td>*/
/* 							<td data-num="1" style="display:${styles[2]}">*/
/* 								${approve_status[data[i]['htm_task.status']]}*/
/* 							</td>*/
/* 							<td data-num="2" style="display:${styles[3]}" data-cid="${data[i]['khm_customer.id']}">*/
/* 								<div style="display:inline-block;height:14px;width:17px">*/
/* 						 			<span class="spanTip" style="display:${data[i]['htm_task.complete_time'] == "" ?'inline-block':'none'}"><span>*/
/* 								</div>*/
/* 								<a class="pos-rel customerDetail">${data[i]['khm_customer.name']}*/
/* 								</a>*/
/* 								<label class="pos-rel">*/
/* 								<i relation=${data[i]['is_relotion']} class="sc fa ${data[i]['is_relotion'] == 0 ? 'fa-heart-o' : 'fa-heart'}" style="color:${data[i]['is_relotion'] ==1 ? 'red' : ''}"></i>*/
/* 				 				<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}"  data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>*/
/* 			 				 </label>*/
/* 							</td>*/
/* 							<td class="" style="display:${styles[4]}" data-num="3">${data[i]['lv']}</td>*/
/* 							<td class="" style="display:${styles[5]}" data-num="4"><span class="radioBox" style="background:${color[urgents[data[i]['htm_task.urgent']]]}">${urgents[data[i]['htm_task.urgent']]}</span></td>*/
/* 							<td class="" style="display:${styles[6]}" data-num="5">${data[i]['productName']}</td>*/
/* 							<td class="" style="display:${styles[7]}" data-num="6">${is_done[data[i]['htm_task.is_done']]}</td>*/
/* 							<td class="" style="display:${styles[8]}" data-num="7">${data[i]['htm_task.activate_time'] != 0 ? cs.getNowTime(data[i]['htm_task.activate_time'],true):""}</td>*/
/* 							<td class="center" style="display:${styles[9]}" data-num="8" >*/
/* 		                            <label style="width:100px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;">${data[i]['htm_task.remark1']}</label>*/
/* 							</td>*/
/* 							<td class="center" style="display:${styles[10]}" data-num="9">*/
/* 		                            <span class="lbl">${data[i].staff.length > 0 ? (data[i].staff[0].user ? data[i].staff[0].user.name : '') : ''}</span>*/
/* 							</td>*/
/* 							<td class="center" style="display:${styles[11]}" data-num="10">*/
/* 		                            <span class="lbl">${data[i]['htm_task.team_id'].length > 0 ? getElemploess(data[i]['htm_task.team_id'])  : ''}</span>*/
/* 							</td>*/
/* 							<td class="center" style="display:${styles[12]}" data-num="11">*/
/* 		                            <span class="lbl">${cs.getNowTime(data[i]['htm_task.start_time'])+"~"+cs.getNowTime(data[i]['htm_task.end_time'])}</span>*/
/* 							</td>*/
/* */
/* 							<td class="center" style="display:${styles[13]}" data-num="12">*/
/* 		                          ${data[i]['htm_task.complete_time'] > '0' ? (data[i]['htm_task.start_time']>0?(Math.ceil(parseInt(parseInt(new Date().getTime()/1000)-data[i]['htm_task.complete_time'])/86400)):0) : (data[i]['htm_task.start_time']>0?(Math.ceil(parseInt(parseInt(new Date().getTime()/1000)-data[i]['htm_task.start_time'])/86400)):0)}*/
/* 							</td>*/
/* */
/* 							<td class="center" style="display:${styles[14]}" data-num="13">*/
/* 	                            ${data[i]['htm_task.complete_time'] != '0' ? cs.getNowTime(data[i]['htm_task.complete_time'],true) : ''}*/
/* 							</td>*/
/* 							<td class="center" style="display:${styles[15]}" data-num="14">*/
/* 		                            <span class="lbl">${data[i].HT_create_info.name}</span>*/
/* 							</td>*/
/* 							<td class="center" style="display:${styles[16]}" data-num="15">*/
/* 		                            <span class="lbl">${cs.getNowTime(data[i]['htm_contract.create_time'],true)}</span>*/
/* 							</td>*/
/* 							*/
/* 							<td data-num="16" style="display:${styles[17]}">*/
/* 								${data[i]['htm_task.auth_id'] != '0' ? employees[data[i]['htm_task.auth_id']] : ''}*/
/* 							</td>*/
/* 							<td data-num="17" style="display:${styles[18]}">*/
/* 								${ data[i]['htm_task.auth_time'] != '0' ? cs.getNowTime(data[i]['htm_task.auth_time'],true) : ''}*/
/* 							</td>*/
/* 							<td data-num="18" style="display:${styles[19]}">*/
/* 								${ data[i]['htm_task.auth_time'] != '0' ? data[i]['htm_task.auth_remark'] : ''}*/
/* 							</td>*/
/* 						</tr>`;*/
/* 				range_title = [];*/
/* 			}*/
/* */
/* 			$('#dataList').html(html);*/
/* 			var spStatus = cs.getSpStatus('所有任务', true);*/
/* 			custom.showReamrk();*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/* 			cs.getNodes([110, 282, 289]);*/
/* 			approve();*/
/* 			custom.get_custom_info();*/
/* 			edit(data, getMoneyList); //参数编辑所用*/
/* */
/* 			edititem(data); //编辑添加信息*/
/* 			info(data);*/
/* */
/* 			$('.sc').click(function() {*/
/* 				var task_id = $(this).parents('tr').attr('data-id');*/
/* 				var relation = $(this).attr('relation') == 0 ? 1 : 0;*/
/* 				ykp.doAjax({*/
/* 					url: "/api/api_task/attention",*/
/* 					method: "post",*/
/* 					data: {*/
/* 						task_id: task_id,*/
/* 						relation: relation*/
/* 					},*/
/* 					success: function(res) {*/
/* 						getList()*/
/* 					}*/
/* 				})*/
/* 			})*/
/* 		}*/
/* */
/* 		function getElemploess(arr) {*/
/* 			var res = [];*/
/* 			if(arr) {*/
/* 				arr.split(',').forEach(function(item) {*/
/* 					res.push(employees[item])*/
/* 				})*/
/* 				return res.join(',');*/
/* 			}*/
/* 		}*/
/* */
/* 		function info(Data) {*/
/* 			$('.info').click(function() {*/
/* 				var index = $(this).parents('tr').index();*/
/* 				var data = Data[index];*/
/*                 console.log(data);*/
/*                 var approve_status = ['未开始', '未通过', '已通过', '待审批']; //任务审批状态*/
/*                 var is_done = {"-1": "未激活",0: "已激活",1: "已完成",2: "已作废"}*/
/* 				var urgent = ['', '1', '2', '3', '4', '5'];*/
/* 				var color = ['', 'red', 'orange', 'green', 'blue', 'purple']*/
/* 				showMark('#template3');*/
/*                 $('#showBox .title').text('详细信息');*/
/* 				$('#templateCon [field]').each(function(i, e) {*/
/* 					$(this).text(data[$(this).attr('field')]);*/
/* 					if($(this).attr('field') == 'username') {*/
/* 						$(this).text(data.staff.length > 0 ? data.staff[0].user.name : '');*/
/* 					} else if($(this).attr('field') == 'department_name') {*/
/* 						$(this).text(data.staff.length > 0 ? data.staff[0].user.department_name : '');*/
/* 					} else if($(this).attr('field') == 'start_time1') {*/
/* 						$(this).text(cs.getNowTime(data['htm_task.start_time']) + " ~ " + cs.getNowTime(data['htm_task.end_time']));*/
/* 					} else if($(this).attr('field') == "htime") {*/
/* 						$(this).text((Math.ceil(parseInt(parseInt(new Date().getTime() / 1000) - data['htm_task.start_time']) / 86400)) >= 0 ? (Math.ceil(parseInt(parseInt(new Date().getTime() / 1000) - data['htm_task.start_time']) / 86400)) + "天" : 0)*/
/* 					} else if($(this).attr('field') == "htm_contract.create_time" || $(this).attr('field') == "htm_task.start_time" || $(this).attr('field') == "htm_task.complete_time" || $(this).attr('field') == "htm_task.auth_time") {*/
/* 						data[$(this).attr('field')] != 0 ? $(this).text(cs.getNowTime(data[$(this).attr('field')],true)) : $(this).text("");*/
/* 					} else if($(this).attr('field') == "htm_task.flow_status") {*/
/* 						$(this).text(data['htm_task.is_done'] == "-1" ? "":JSON.parse(data['htm_task.flow'])[data[$(this).attr('field')]]);*/
/* 					} else if($(this).attr('field') == "cname") {*/
/* 						$(this).text(data.HT_create_info.name || "");*/
/* 					} else if($(this).attr('field') == "cdepartment_name") {*/
/* 						$(this).text(data.HT_create_info.department_name || "");*/
/* 					} else if($(this).attr('field') == "htm_task.status") {*/
/* 						$(this).text(approve_status[data['htm_task.status']]);*/
/* 					} else if($(this).attr('field') == "htm_task.auth_id") {*/
/* 						$(this).text(employees[data['htm_task.auth_id']] || "");*/
/* 					} else if($(this).attr('field') == "htm_task.auth_id") {*/
/* 						$(this).text(employees[data['htm_task.auth_id']] || "");*/
/* 					} else if($(this).attr('field') == "htm_task.auth_id") {*/
/* 						$(this).text(data['htm_task.auth_remark'] || "");*/
/* 					} else if($(this).attr('field') == "htm_task.urgent") {*/
/* 						$(this).text(urgent[data['htm_task.urgent']] || "");*/
/* 						$(this).css('background', color[urgent[data['htm_task.urgent']]])*/
/* 					}else if($(this).attr('field') == "htm_task.is_done") {*/
/*                         $(this).text(is_done[data['htm_task.is_done']] || "");*/
/*                     }*/
/* 				});*/
/*                 $("#temHeader").width($("#showBox").width()-47);*/
/* 				var list = [];*/
/* 				if(data['htm_task.remark'] == "") {*/
/* 					ykp.prompt("暂无数据");*/
/* 					$('#templateCon #remark1').html('<div style="border:1px solid #ddd;text-align:center;height: 40px;line-height: 40px;">暂无数据</div>');*/
/* 					return;*/
/* 				} else {*/
/* 					content = [];*/
/* 					var data = JSON.parse(data['htm_task.remark']);*/
/* 					for(var i in data) {*/
/* 						content.push(*/
/* 							`<div style=" padding:14px 0 14px 0;">*/
/* 									<div>*/
/* 										<div style="    border-bottom: 1px solid #eee; padding: 5px;margin-bottom: 10px;color: #333;">${data[i]['flow']}</div>*/
/* 										<div style="width:40px; border-radius:40px;height: 40px; float:left;   text-align: center;line-height: 40px;color: #fff; display:${data[i]['avatar'] ? "none" : "block"}; background:${data[i]['avatar'] ? "none" : "#4ebefd"};">${data[i]['name']}</div>*/
/* 										<img style="width:${data[i]['avatar'] ? "40" : "0"}px; border-radius:40px; display:${data[i]['avatar'] ? "inline-block" : "none"}; " src="${data[i]['avatar'] }">*/
/* 										<span style=" margin-left: 10px;" class="contact_person">${data[i]['name']}</span>*/
/* 										<span style="float:right;position:relative;top:8px;">*/
/* 											${data[i]['time'] != 0 ? data[i]['time'] : ''}*/
/* 										</span>*/
/* 									</div>*/
/* 									<div style="margin-top:10px;padding-left:45px;padding-bottom:10px;">*/
/* 										<span style="float:left;position:relative;top:4px;">*/
/* 											${data[i]['content']}*/
/* 										</span>*/
/* 										*/
/* 									</div>*/
/* 								</div>`*/
/* 						);*/
/* 					}*/
/* 				}*/
/* 				$('#templateBox #remark1').html(content);*/
/* 			})*/
/* */
/* 		}*/
/* */
/* 		// $('[data-rel=tooltip]').tooltip();*/
/* */
/* 		//审批*/
/* 		function approve() {*/
/* 			$("#dataList tr").find('.sp').click(function() {*/
/* 				//				if($(this).index() > 1) {*/
/* 				var status = $(this).attr('data-status');*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				changeStatus(status, id);*/
/* 				//				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//对点击驳回 | 审批 | 撤销进行处理*/
/* 		function changeStatus(status, id) {*/
/* 			console.log(status)*/
/* 			var data = {*/
/* 				url: '/api/api_task/sh_task',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					id: id,*/
/* 					status: status*/
/* 				}*/
/* 			}*/
/* */
/* 			if(status == 1) {*/
/* 				$('#feedBack').show();*/
/* 				$('#feedBack .hold').unbind('click').click(function() {*/
/* 					var approve_reply = $('#feedBack').find('input').val();*/
/* 					if(approve_reply == '') {*/
/* 						ykp.prompt('驳回备注不能为空！');*/
/* 						return false;*/
/* 					}else{*/
/* 						ykp.prompt('驳回成功！');*/
/* 						data.data.auth_remark = approve_reply;*/
/* 					setStatus(data);*/
/* 					$('.close_label').parents('.label_popup').fadeOut();*/
/* 					}*/
/* 					*/
/* 				})*/
/* //				cs.closePop();*/
/* //				if(status == 0) {*/
/* //					bootbox.confirm('确认撤销审批？', function(flag) {*/
/* //						if(flag) {*/
/* //							setStatus(data);*/
/* //						}*/
/* //					})*/
/* //				}*/
/* 			}else if(status == 2){*/
/* 				ykp.prompt('审批通过！');*/
/* 				setStatus(data);*/
/* 			}else if(status == 3){*/
/* 				   	layui.use('layer', function() {*/
/* 						var layer = layui.layer;*/
/* 						layer.confirm('确认撤销审批？', function(flag) {*/
/* 							if(flag) {*/
/* 						layer.closeAll();*/
/* 						setStatus(data);*/
/* 							}*/
/* 						});*/
/* 					})*/
/* 			}*/
/* 			else {*/
/* 				setStatus(data);*/
/* 			}*/
/* 		}*/
/* */
/* 		//发送任务审批状态*/
/* 		function setStatus(data) {*/
/* 			ykp.doAjax({*/
/* 				url: data.url,*/
/* 				method: data.method,*/
/* 				data: data.data,*/
/* 				success: function(res) {*/
/* 					getList();*/
/* 				}*/
/* 			})*/
/* 		}*/
/* 		//发送短信*/
/* 		function sendMsg(id, type) {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_common/send_customer',*/
/* 				data: {*/
/* 					customer_id: id,*/
/* 					type: type*/
/* 				},*/
/* 				method: 'post',*/
/* 				success: function(res) {*/
/* 					ykp.prompt('短信发送成功！');*/
/* 				}*/
/* 			})*/
/* 		}*/
/* 		//编辑*/
/* 		function edit(data, getMoneyList) {*/
/* 			$('.edit').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				var index = $(this).parents('tr').index();*/
/* 				var Data = data[index];*/
/* 				var status = $(this).attr('data-status');*/
/* 				if(status == 3) {*/
/* 					ykp.prompt('待审批状态不能编辑');*/
/* 					return false;*/
/* 				}*/
/* */
/* 				var userid = JSON.parse(ykp.getCookie('userinfo')).id;*/
/* 				var fz = $(this).attr('data-fuze');*/
/* 				if(userid != fz && $(this).attr('team_id').split(',').indexOf(userid) == -1) {*/
/* 					ykp.prompt('你不是负责人或协作人');*/
/* 					return false;*/
/* 				}*/
/* 				if(Data['htm_contract.status'] == 4) {*/
/* 					ykp.prompt('订单已解约，不能编辑');*/
/* 					return false;*/
/* 				}*/
/* 				if(Data['htm_contract.is_done'] == 2) {*/
/* 					ykp.prompt('订单已作废，不能编辑');*/
/* 					return false;*/
/* 				}*/
/* 				showMark('#template');*/
/* 				$('#showBox .title').text('编辑信息');*/
/* 				//				time_plug();*/
/* 				cs.timeplug();*/
/* 				var customer_id = $(this).parents('tr').attr('customer_id');*/
/* 				$('#templateCon #sendMsg').attr('customer_id', customer_id);*/
/* 				var remark; //存放备注数组对象*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_task/info',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						filter: 'htm_task.id = ' + id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						var task_status = data['htm_task.flow'] ? JSON.parse(data['htm_task.flow']) : '';*/
/* 						for(var i in task_status) {*/
/* 							$('#templateCon [field="flow_status"]').append(new Option(task_status[i], i));*/
/* 						}*/
/* 						remark = new Array(task_status.length);*/
/* 						$('#templateCon [field="urgent"]').val(data['htm_task.urgent']);*/
/* */
/* 						$('#templateCon [field="flow_status"]').val(data['htm_task.flow_status']);*/
/* 						$('#templateCon [field="complete_time"]').val(data['htm_task.complete_time'] != '0' ? cs.getNowTime(data['htm_task.complete_time'],true) : '');*/
/* 						$('#templateCon [field="remark"]').val('');*/
/* 						$('#templateCon [field="urgent"]').val(data['htm_task.urgent']);*/
/* 						if(Data['htm_task.is_done'] == -1) {*/
/* 							$('#templateCon [field="is_done"]').val(0);*/
/* 						} else {*/
/* 							$('#templateCon [field="is_done"]').val(data['htm_task.is_done']);*/
/* 						}*/
/* */
/* 					}*/
/* 				});*/
/* */
/* 				$('#templateCon [field="flow_status"]').change(function() {*/
/* 					var val = $(this).val();*/
/* 					$('#templateCon [field="remark"]').val(remark[val] || "");*/
/* 				});*/
/* */
/* 				$('#templateCon .sure_button').click(function() {*/
/* 					var postdata = {};*/
/* 					postdata['id'] = id;*/
/* 					var status = false;*/
/* 					var is_send = false;*/
/* 					if($('#templateCon #sendMsg input:checked').val() == 1) {*/
/* 						is_send = true;*/
/* 					}*/
/* 					var customer_id = $('#templateCon #sendMsg').attr('customer_id');*/
/* 					$('#templateCon [field]').each(function(i, e) {*/
/* 						if($(this).attr('field') == 'complete_time') {*/
/* 							postdata[$(this).attr('field')] = new Date($(this).val()) / 1000;*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).val() == "" && $(this).attr('field') != 'remark') {*/
/* 							ykp.prompt('不能为空');*/
/* 							status = false;*/
/* 						} else {*/
/* 							postdata[$(this).attr('field')] = $(this).val();*/
/* 							status = true;*/
/* 						}*/
/* 					});*/
/* 					var val = $('#templateCon [field="flow_status"]').val();*/
/* 					//					if(val) {*/
/* 					//						remark[val] = $('#templateCon [field="remark"]').val();*/
/* 					//					}*/
/* 					postdata['remark'] = $('#templateCon [field="remark"]').val();*/
/* 					if(status) {*/
/* 						ykp.doAjax({*/
/* 							url: '/api/api_task/edit_task',*/
/* 							method: 'post',*/
/* 							data: postdata,*/
/* 							success: function(res) {*/
/* 								ykp.prompt('编辑成功');*/
/* 								cs.close();*/
/* 								getList();*/
/* 								/*if (is_send) {*/
/* 									sendMsg(customer_id,7);*/
/* 								}*//* */
/* 							}*/
/* 						});*/
/* 					}*/
/* */
/* 				})*/
/* 			})*/
/* 		}*/
/* 	})*/
/* </script>*/
