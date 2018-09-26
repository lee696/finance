<?php

/* admin/platform/schedule.html */
class __TwigTemplate_26a69f4c6872b8af547931b8d2211377564c3cb914d9c748449ec6852fa0dd8d extends Twig_Template
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
        echo "<!-- <link rel=\"stylesheet\" href=\"/resource/adimin/assets/css/jquery.searchableSelect.css\" /> -->
<style type=\"text/css\">
\t#templateCon label {
\t\twidth: 90px;
\t}
</style>
<div class=\"widget-main\">
\t<div class=\"row\" id=\"topTool\" style=\"position:relative;\">
\t\t<!--<div class=\"col-sx-4\" style=\" float: left;margin-right:5px;\">
\t\t\t<select pts=\"5\" sear=\"tkm_plan_out.title\" style=\"width:150px;\">
\t\t\t\t<option value=\"\"> 请选择日程主题 </option>
\t\t\t\t<option value=\"1\">处理税务</option>
\t\t\t\t<option value=\"2\">业务签单</option>
\t\t\t\t<option value=\"3\">注册公司</option>
\t\t\t\t<option value=\"4\">变更公司</option>
\t\t\t\t<option value=\"5\">注册商标</option>
\t\t\t\t<option value=\"6\">注销公司</option>
\t\t\t\t<option value=\"7\">外勤配送</option>
\t\t\t\t<option value=\"8\">网站建设</option>
\t\t\t</select>
\t\t</div>-->
\t\t
<div class=\"col-sx-4\" style=\" float: left\">

\t\t\t<select style=\"width: 180px\" pts=2 class=\"advandced-search select2-hidden-accessible\" sear=\"tkm_plan_out.title\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t<option value=\"\">日程主题</option>
\t\t\t</select>

\t\t</div>
\t\t<div class=\"col-sx-4\" style=\" float: left;margin-left: 5px;\">

\t\t\t<select style=\"width: 180px\" pts=2 class=\"advandced-search select2-hidden-accessible\" sear=\"tkm_plan_out.members\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t<option value=\"\">参与人员</option>
\t\t\t</select>

\t\t</div>
\t\t<!-- <div class=\"col-sx-4\" style=\" float: left\">
\t\t\t<select style=\"margin-right: 12px !important;width: 180px\" data-placeholder =\"审核人\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\"></select>
\t\t</div> -->

\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t<input type=\"text\" pts=\"0\" sear=\"tkm_plan_out.remark\" style=\"margin-left: 5px;\" placeholder=\"备注\" />
\t\t</div>

\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t<button type=\"button\" pts=\"0\" sear=\"\" id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
                <i class=\"fa fa-search\"></i>
            </button>

\t\t</div>
\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t<button id=\"heightsearch\" type=\"button\" title=\"高级搜索\" class=\"btn btn-info btn-sm\" style=\"background-color:#00c0ef !important;\">
                <i class=\"fa fa-filter\"></i>
            </button>
\t\t</div>
\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t<button id=\"flush\" type=\"button\" title=\"刷新\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
                <i class=\"fa fa-refresh\"></i>
            </button>
\t\t</div>
\t\t<div contentAuthority=\"129\" class=\"col-sx-4\" style=\" float: left;  margin-right: 5px; \">
\t\t\t<button id=\"add\" type=\"button\" title=\"添加\" style=\"background-color: #32CD32\t !important;border-color: #32CD32 !important;\" class=\"btn addBtn btn-info btn-sm\">
                    <i class=\"fa fa-plus\"></i>
                </button>
\t\t</div>

\t\t<!--高级搜索-->
\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"margin-top:30px;position: absolute; background: #fff; z-index: 1041;padding: 20px 10px; display: none;\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>日程片区</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select> 
\t\t\t\t\t<select gjs=0 sear=\"ckm_position.id\" class=\"cw\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<!--<input type=\"text\" gjs=0 sear=\"ckm_position.name\" />-->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>日程开始时间</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"tkm_plan_out.plan_start_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t</div>
\t\t\t\t\t<!-- <div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
                    <input id=\"date-timepicker1\" class=\"date-timepicker1\" data-type=\"gj\" data-status=\"time\" gjs=\"0\" sear=\"tkm_plan_out.plan_time\" style=\"height: 30px;width: 150px;\">
                    <span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                        <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                    </span>
                    </div>-->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>日程结束时间</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"tkm_plan_out.plan_end_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t</div>
\t\t\t\t\t<!-- <div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
                    <input id=\"date-timepicker1\" class=\"date-timepicker1\" data-type=\"gj\" data-status=\"time\" gjs=\"0\" sear=\"tkm_plan_out.plan_time\" style=\"height: 30px;width: 150px;\">
                    <span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                        <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                    </span>
                    </div>-->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>日程主题</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select gjs=0 data-type=\"gj\" sear=\"tkm_plan_out.title\" style=\"width:180px;\">
\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t<option value=\"1\">处理税务</option>
\t\t\t\t\t\t<option value=\"2\">业务签单</option>
\t\t\t\t\t\t<option value=\"3\">注册公司</option>
\t\t\t\t\t\t<option value=\"4\">变更公司</option>
\t\t\t\t\t\t<option value=\"5\">注册商标</option>
\t\t\t\t\t\t<option value=\"6\">注销公司</option>
\t\t\t\t\t\t<option value=\"7\">外勤配送</option>
\t\t\t\t\t\t<option value=\"8\">网站建设</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>日程备注</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"tkm_plan_out.remark\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>提醒方式</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select gjs=0 data-type=\"gj\" sear=\"tkm_plan_out.remind_type\" style=\"width:180px;\">
\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t<option value=\"1\">事情发生时</option>
\t\t\t\t\t\t<option value=\"2\">5分钟</option>
\t\t\t\t\t\t<option value=\"3\">15分钟</option>
\t\t\t\t\t\t<option value=\"4\">30分钟</option>
\t\t\t\t\t\t<option value=\"5\">1小时</option>
\t\t\t\t\t\t<option value=\"6\">2小时</option>
\t\t\t\t\t\t<option value=\"7\">1天</option>
\t\t\t\t\t\t<option value=\"8\">2天</option>
\t\t\t\t\t\t<option value=\"9\">1周</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>参与人员</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select style=\"margin:12px !important;width: 180px\" sear=\"tkm_plan_out.members\" gjs=\"3\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t<label>完成状态</label>
\t\t\t\t\t<select>
\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t</select>
\t\t\t\t\t<select gjs=0 data-type=\"gj\" sear=\"tkm_plan_out.status\" style=\"width:180px;\">
\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t<option value=\"0\">未完成</option>
\t\t\t\t\t\t<option value=\"1\">已完成</option>
\t\t\t\t\t\t<option value=\"2\">已作废</option>
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sx-4\" style=\"clear:both;padding-top:10px;text-align:center;\">
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

\t<div class=\"row\">
\t\t<div class=\"custom_table\">
\t\t\t<table id=\"dynamic-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t<th data-num=\"1\">日程片区</th>
\t\t\t\t\t\t<th data-num=\"2\">日程开始时间</th>
\t\t\t\t\t\t<th data-num=\"8\">日程结束时间</th>
\t\t\t\t\t\t<th data-num=\"3\">日程主题</th>
\t\t\t\t\t\t<th data-num=\"4\">日程备注</th>
\t\t\t\t\t\t<th data-num=\"5\">提醒方式</th>
\t\t\t\t\t\t<th data-num=\"6\">参与人员</th>
\t\t\t\t\t\t<th data-num=\"7\">完成状态</th>
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
</div>
<div id=\"template\" style=\"display: none\">
\t<div class=\"widget-box\" style=\"height: 500px;\">
\t\t\t<div style=\"margin-top:15px;\" class=\"coordinate area_position\">
\t\t\t\t<!-- style=\"width:180px;\" class=\"required\" msg=\"公司名称不能为空\" -->
\t\t\t\t<label>区域名称： </label>
\t\t\t\t<select syllable=\"area\" style=\"width: 180px !important;\">
\t\t\t\t\t<option value=\"\">请选择区域</option>
\t\t\t\t</select>
\t\t\t\t<label>仓位： </label>
\t\t\t\t<select syllable=\"position\" style=\"width: 180px !important;\">
\t\t\t\t\t<option value=\"\">请选择仓位</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t<div style=\"margin-top:15px;\">
<!-- \t\t\t<label> 日程片区： </label>
\t\t\t<select field=\"pian\" style=\"width:180px;\" class=\"pian required\" msg=\"请选择日程片区\">
\t\t\t\t<option value=\"\"> --- 请选择 ---</option>
\t\t\t\t<option>南山</option>
\t\t\t\t\t\t<option>福田</option>
\t\t\t\t\t\t<option>海珠</option>
\t\t\t\t\t\t<option >111</option>
\t\t\t\t\t\t<option >黄埔</option>
\t\t\t\t\t\t<option >龙岗</option>
\t\t\t\t\t\t<option >龙华</option>
\t\t\t\t\t\t<option >南山</option>
\t\t\t\t\t\t<option >123</option>
\t\t\t\t\t\t<option >在</option>
\t\t\t\t\t\t<option >宝安</option>
\t\t\t</select> -->
\t\t\t<label> 日程主题： </label>
\t\t\t<select field=\"title\" style=\"width:180px;\" class=\"required\" msg=\"请选择日程主题\">
\t\t\t\t<option value=\"\"> --- 请选择 ---</option>
\t\t\t\t<option value=\"1\">处理税务</option>
\t\t\t\t<option value=\"2\">业务签单</option>
\t\t\t\t<option value=\"3\">注册公司</option>
\t\t\t\t<option value=\"4\">变更公司</option>
\t\t\t\t<option value=\"5\">注册商标</option>
\t\t\t\t<option value=\"6\">注销公司</option>
\t\t\t\t<option value=\"7\">外勤配送</option>
\t\t\t\t<option value=\"8\">网站建设</option>
\t\t\t</select>
\t\t\t
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label style=\"margin-left:0px;\"> 开始时间： </label>
\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t<input field=\"plan_start_time\" id=\"date-timepicker1\" class=\"date-timepicker1 form-control required\" style=\"height: 30px; width: 150px;\" msg=\"日程开始时间不能为空\">
\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                        </span>
\t\t\t</div>
\t\t\t<label style=\"margin-left:10px;\"> 结束时间： </label>
\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t<input field=\"plan_end_time\" id=\"date-timepicker1\" class=\"date-timepicker1 form-control required\" style=\"height: 30px; width: 150px;margin-left: 0px\" msg=\"日程结束时间不能为空\">
\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                        </span>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label style=\"margin-left:0px;\"> 提醒方式： </label>
\t\t\t<select field=\"remind_type\" style=\"width:180px;\" class=\"required\" msg=\"请选择提醒方式\">
\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t<option value=\"1\">事情发生时</option>
\t\t\t\t<option value=\"2\">提前5分钟</option>
\t\t\t\t<option value=\"3\">提前15分钟</option>
\t\t\t\t<option value=\"4\">提前30分钟</option>
\t\t\t\t<option value=\"5\">提前1小时</option>
\t\t\t\t<option value=\"6\">提前2小时</option>
\t\t\t\t<option value=\"7\">提前1天</option>
\t\t\t\t<option value=\"8\">提前2天</option>
\t\t\t\t<option value=\"9\">提前1周</option>
\t\t\t</select>
\t\t\t<label style=\"margin-left:0px;\">重复提醒： </label>
\t\t\t<select field=\"remind_way\" style=\"width:180px;\" class=\"required\" msg=\"请选择提醒方式\">
\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t<option value=\"1\">从不</option>
\t\t\t\t<option value=\"2\">每天</option>
\t\t\t\t<option value=\"3\">每周</option>
\t\t\t\t<option value=\"4\">每两周</option>
\t\t\t\t<option value=\"5\">每月</option>
\t\t\t</select>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label style=\"float:left\"> 日程备注： </label>
\t\t\t<textarea field=\"remark\" style=\"width: 440px;resize: none; padding: 5px; margin-left: 4px;\"></textarea>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label style=\"float:left; margin-right: 4px;\"> 参与人员： </label>
\t\t\t<select multiple=\"\" field=\"members\" id=\"state\" name=\"state\" class=\"select2 select2-hidden-accessible\" data-placeholder=\"请选择\" style=\"width:440px; margin-left: 4px !important;\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t</select>
\t\t</div>
\t\t<div style=\"margin-top:15px; display: none;\" class=\"status\">
\t\t\t<label style=\"float:left; margin-right: 4px;\"> 完成状态： </label>
\t\t\t<select style=\"width:180px;\" field=\"status\">
\t\t\t\t<option value=\"0\">未完成</option>
\t\t\t\t<option value=\"1\">已完成</option>
\t\t\t\t<option value=\"2\">已作废</option>
\t\t\t</select>
\t\t</div>
\t\t<div style=\"text-align:center;margin-top:15px;\">
\t\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
\t\t\t<button class=\"sure_button add\">
                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                        保存
                    </button>
\t\t</div>
\t</div>
</div>
</div>

<div class=\"label_popup\" id=\"feedBack\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t<span style=\"display: inline-block;\">编辑完成状态</span>
\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t</div>
\t\t<div style=\"text-align:center;padding:20px 0;\">
\t\t\t<select style=\"width:180px;\" field=\"status\">
\t\t\t\t<option value=\"0\">未完成</option>
\t\t\t\t<option value=\"1\">已完成</option>
\t\t\t\t<option value=\"2\">已作废</option>
\t\t\t</select>
\t\t\t<!--<hr>-->
\t\t</div>
\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t<button class=\"close_label\">关闭</button>
\t\t\t<button class=\"hold\">保存</button>
\t\t</div>
\t</div>
</div>

<div id=\"template1\" style=\"display: none;\">
\t<div class=\"col-sm-12\">
\t\t<div class=\"widget-box\">
\t\t\t<div class=\"widget-header widget-header-small\">
\t\t\t\t<h5 class=\"widget-title lighter\">审核日程</h5>
\t\t\t</div>
\t\t\t<table class=\"table baseInfoTable\">
\t\t\t\t<tbody>
\t\t\t\t</tbody>
\t\t\t</table>

\t\t</div>
\t</div>
</div>
";
        // line 383
        $this->loadTemplate("admin/mark.html", "admin/platform/schedule.html", 383)->display($context);
        // line 384
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script>
\tjQuery(function(\$) {
\t\tcs.getNodes([129]);
\t\tcs.dataRang();
\t\tvar rows = 10; //每页显示的条目数
\t\tvar order = 'ckm_position.id desc';
\t\tvar filter = 'tkm_plan_out.is_del = 0'; //过滤条件
\t\tvar employees = {};
\t\t
\t\t
\t\t
\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_plan/index',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: filter,
\t\t\t\tlimit: rows,
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '.pageBar'
\t\t\t},
\t\t\tcontentId: \"#datalist\", //默认排序
\t\t\tinitOrder: \"\", //初始化sort
\t\t\tdefaultOrder: order,
\t\t\tdefaultOrder: order,
\t\t\tparams: [{
\t\t\t\tid: \"#dynamic-table\",
\t\t\t\tfield: [\"\",\"ckm_position.name\", \"tkm_plan_out.plan_start_time\", \"tkm_plan_out.plan_end_time\", \"\", \"tkm_plan_out.remark\", \"tkm_plan_out.remind_type\",
\t\t\t\t\t\"\", \"tkm_plan_out.status\"]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});
\t\t

\t\ttspage();

\t\tfunction tspage() {
\t\t\tvar titleTask = ykp.getCookie('titleTask');
            console.log(titleTask,111);
            if(titleTask != '' && titleTask != undefined) {
\t\t\t\tvar today = new Date().setHours(0, 0, 0, 0) / 1000; //今天零点的时间戳
\t\t\t\tvar curTime = Date.parse(new Date()) / 1000;
\t\t\t\tvar data = {
\t\t\t\t\tlimit: rows,
\t\t\t\t\tfilter: `tkm_plan_out.is_del = 0 and find_in_set(\${ykp.getCookie('uid')},members)` //待添加完成状态
\t\t\t\t}
\t\t\t\tif(titleTask == 6) {
\t\t\t\t\tdata.filter += ` and remind_way = 1 and tkm_plan_out.plan_end_time < \${curTime}`;
\t\t\t\t} 
\t\t\t\tgetList_2(data);
\t\t\t\tykp.setCookie('titleTask', '');
\t\t\t} else {
\t\t\t\t//获取列表数据
\t\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\t\tykp.setCookie(\"where\", \"\");
\t\t\t\tgetList();
\t\t\t}
\t\t}

\t\t\$('#flush').click(function() {
\t\t\tfilter = \"tkm_plan_out.is_del = 0\";
\t\t\t\$('[sear=\"tkm_plan_out.remark\"]').val('');
\t\t\t\$('[sear=\"tkm_plan_out.title\"]').val('').trigger('change');
\t\t\t\$('[sear=\"tkm_plan_out.members\"]').val('').trigger('change');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetList();
\t\t})

\t\tfunction getList_2(data) {
\t\t\tykp.list({
\t\t\t\turl: '/api/api_plan/index',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: data,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar',
\t\t\t\t\torder: order
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
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

\t\t//获取所有员工
\t\tykp.doAjax({
\t\t\turl: '/api/api_employees/f7',
\t\t\tmethod: 'post',
\t\t\tasync: false,
\t\t\tdata: {
\t\t\t\tselect: 'bmm_employees.id,bmm_employees.name'
\t\t\t},
\t\t\tsuccess: function(res) {
\t\t\t\tvar data = res.data;
\t\t\t\tvar option = '';
\t\t\t\t\$('.advandced-search').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});
\t\t\t\tfor(var i in data) {
\t\t\t\t\tif(data[i]['name']) {
\t\t\t\t\t\toption += `<option value=\"\${data[i]['id']}\">\${data[i]['name']}</option>`
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t\$('.advandced-search').append(option)
\t\t\t}
\t\t});

\t\t//普通搜索
\t\tfunction search() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_plan/index',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\ttype: 1,
\t\t\t\t\tlimit: rows
\t\t\t\t}
\t\t\t}

\t\t\tcs.doSearch('#search', data, 'filter', false, function(res,_filter) {
\t\t\t\tfilter = _filter;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t} else {
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t}, 'tkm_plan_out.is_del = 0');
\t\t}

\t\t//高级搜索
\t\tfunction advancedSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_plan/index',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\ttype: 1,
\t\t\t\t\tlimit: rows
\t\t\t\t}
\t\t\t}

\t\t\tcs.hSearch('.search1', data, 'filter', false, function(res, _filter) {
\t\t\t\tfilter = _filter;
\t\t\t\t\$('.in').click();
\t\t\t\t\$('#heightsearch').removeClass('active');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\taddList(res);

\t\t\t}, 'tkm_plan_out.is_del = 0')
\t\t}

\t\t//高级搜索按钮
\t\tcs.showHeightSearch('#heightsearch', '#heightsearch1');

\t\t
\t\t
\t\t//日程时间
\t\t\tfunction timeplug() {
\t\t\t\tif(!ace.vars['old_ie']) {
\t\t\t\t\t\$('#templateCon .date-timepicker1').datetimepicker({
\t\t\t\t\t\t// format: 'YYYY-MM-DD HH:mm',//use this option to display seconds
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
\t\t\t}

\t\t//添加日程
\t\t\$('#add').click(function() {
\t\t\tshowMark('#template');
\t\t\t\$('#showBox .title').text('添加日程');
\t\t\t\$('#templateCon textarea').empty(); //清空备注框
\t\t\tgetPro();
\t\t\t//保存
\t\t\t\$('#templateCon .add').click(function() {
\t\t\t\tif(!cs.popValidate()) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tvar objs = \$('#templateCon #state').select2('data');
\t\t\t\tif(objs.length <= 0) {
\t\t\t\t\tcs.popErrorMsg('请选择参与人员');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tvar strtext = [];
\t\t\t\tfor(var i in objs) {
\t\t\t\t\tstrtext.push(objs[i].id);
\t\t\t\t}

\t\t\t\tvar time = \$('#templateCon input').eq(0).val();
//\t\t\t\ttime = new Date(time) / 1000;
\t\t\t\tvar time1 = \$('#templateCon input').eq(1).val();
\t\t\t\tvar data = {
\t\t\t\t\t'pian': \$('#templateCon select').eq(1).val(),
\t\t\t\t\t'title': \$('#templateCon select').eq(2).val(),
\t\t\t\t\t'remark': \$('#templateCon textarea').val().trim(),
\t\t\t\t\t'members': strtext.join(','),
\t\t\t\t\t'plan_start_time': time,
\t\t\t\t\t'plan_end_time': time1,
\t\t\t\t\t'remind_type': \$('#templateCon select')[2].selectedIndex,
\t\t\t\t};
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_plan/add_plan_out',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: data,
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tcs.close();
\t\t\t\t\t\tgetList();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
 \t\t\t
 \t\t\tvar ele1 = \$('#templateCon [syllable=\"area\"]');
 \t\t\tvar ele2 = \$('#templateCon [syllable=\"postion\"]');
 \t\t\t//var position = 0;
/* \t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_accountancies/get_all_pos',
\t\t\t\tmethod: 'get',
\t\t\t\tdata: {

\t\t\t\t},
\t\t\t\tasync:false,
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\t//区域信息html
\t\t\t\t\tvar area_html = [];
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tarea_html.push('<option value=\"' + i + '\">' + i + '</option>');
\t\t\t\t\t}\t\t\t\t\t
\t\t\t\t\tele1.html(area_html.join('')).select2();
\t\t\t\t\tvar posId = \"\";
\t\t\t\t\t//切换区域，切换仓位
\t\t\t

\t\t\t\t\t//如果存在了仓位信息，就默认选中
\t\t\t\t\t//ele1.val('s').trigger('change');
 \t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tele1.val(i).trigger('change');
\t\t\t\t\t\t//ele2.val('0').trigger('change');
\t\t\t\t\t} 
\t\t\t\t}
\t\t\t}); */
\t\t\t
  \t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_accountancies/get_all_pos',
\t\t\t\tmethod: 'get',
\t\t\t\tdata: {},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t            \tvar option = \"<option value='0'>请选择</option>\";
\t            \tfor(var i in data) {
\t            \t\toption += '<option value=\"' + i + '\">' + i + '</option>';
\t            \t}
\t\t\t\t\t\$('#templateCon [syllable=\"area\"]').html(option).select2();
\t\t\t\t\t//切换区域，切换仓位
\t\t\t\t\t\$('#templateCon [syllable=\"area\"]').change(function() {
\t\t\t\t\t\t//区域
\t\t\t\t\t\tvar area = \$(this).val();
\t\t\t\t\t\t//如果区域不存在，则返回
\t\t\t\t\t\tif(!area) {
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}

\t\t\t\t\t\tvar _data = data[area];
\t\t\t\t\t\t//仓位信息html
\t\t\t\t\t\tvar position_html = [];
\t\t\t\t\t\tvar option_pos = '<option value=\"0\">请选择</option>';
\t\t\t\t\t\tfor(var i in _data) {
\t\t\t\t\t\t\toption_pos += '<option value=\"' + _data[i]['id'] + '\">' + _data[i]['name'] + '</option>';
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#templateCon [syllable=\"position\"]').html(option_pos).select2();
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});
\t\t\t// 获取所有片区
  \t\t\t/* ykp.doAjax({
\t\t\t\turl: '/api/api_accountancies/list_position',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tpage: 1,
\t\t\t\t\tlimit: 999
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data.items;
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t//\$('#templateCon .pian').append(new Option(data[i]['ckm_position.name'], data[i]['ckm_position.id']));
\t\t\t\t\t\t\$('#templateCon [syllable=\"area\"]').append(new Option(data[i]['ckm_position.name'], data[i]['ckm_position.id']));
\t\t\t\t\t}
\t\t\t\t\t\$('#templateCon [syllable=\"area\"]').select2();
\t\t\t\t}
\t\t\t}); */
\t\t\t//时间插件
\t\t\ttimeplug();
\t\t\t//参与人员
\t\t\t\$('#templateCon .select2').select2({
\t\t\t\tallowClear: true
\t\t\t})
\t\t\t//获取所有员工
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_employees/f7',
\t\t\t\tmethod: 'post',
\t\t\t\tasync: false,
\t\t\t\tdata: {},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\t/*\$('.advandced-search').select2({allowClear:true});*/
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tif(data[i]['bmm_employees.name']) {
\t\t\t\t\t\t\t\$('#templateCon #state').append(new Option(data[i]['bmm_employees.name'], data[i]['bmm_employees.id']));
\t\t\t\t\t\t}

\t\t\t\t\t\t/* \$('.advandced-search').append(new Option(data[i]['name']));*/
\t\t\t\t\t}
\t\t\t\t\t\$('#templateCon #state').val([ykp.getCookie('uid')]).trigger('change');
\t\t\t\t}
\t\t\t});

\t\t\t\$('#select2-multiple-style .btn').on('click', function(e) {
\t\t\t\tvar target = \$(this).find('input[type=radio]');
\t\t\t\tvar which = parseInt(target.val());
\t\t\t\tif(which == 2)
\t\t\t\t\t\$('.select2').addClass('tag-input-style');
\t\t\t\telse
\t\t\t\t\t\$('.select2').removeClass('tag-input-style');
\t\t\t});
\t\t})
\t\tgetPro();
\t\t//切换每页显示的条目数
\t\t\$('#changePageNum').change(function() {
\t\t\trows = \$(this).val();
\t\t\tgetList();
\t\t})
\t\t
\t\tfunction getPro() {
\t\t\tykp.doAjax({
\t\t\t\turl:'/api/api_product/index',
\t                method:'post',
\t                data:{
\t                  \tfilter:'ckm_product.is_del = 0',
\t\t\t\t\t\tpage:1,
\t\t\t\t\t\tlimit:999,
\t            },
\t            async:false,
\t            success:function(res) {
\t            \tvar data = res.data.items;
\t            \tvar option = \"<option value=''>请选择</option>\";
\t            \tfor(var i in data) {
\t            \t\toption += \"<option value=\"+data[i]['ckm_product.id']+\">\"+data[i]['ckm_product.name']+\"</option>\"
\t            \t}
\t            \t\$('#templateCon').find('select[field=title]').html(option);
\t            \t\$('select[sear=\"tkm_plan_out.title\"]').html(option);
\t            }
\t\t\t})
\t\t}

\t\tfunction getList() {
\t\t\tsearch();
\t\t\tadvancedSearch();
\t\t\tykp.list({
\t\t\t\turl: '/api/api_plan/index',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: rows,
\t\t\t\t\tfilter: filter,
\t\t\t\t\torder: 'tkm_plan_out.create_time desc'
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
\t\t\t\t\t\treturn false;
\t\t\t\t\t} else {
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//处理数据
\t\tfunction addList(res) {
\t\t\tvar data = res.data.items;
\t\t\tvar html = '';
\t\t\tvar title = []; //日程主题
\t\t\tvar remind_type = []; //提醒方式
\t\t\tvar status = ['未完成', '已完成', '已作废'];
\t\t\tvar productList = {};
\t\t\tykp.doAjax({
\t\t\t\turl:'/api/api_product/index',
\t                method:'post',
\t                data:{
\t                  \tfilter:'ckm_product.is_del = 0',
\t\t\t\t\t\tpage:1,
\t\t\t\t\t\tlimit:999,
\t            },
\t            async:false,
\t            success:function(res) {
\t            \tvar data = res.data.items;
\t            \tfor(var i in data) {
\t            \t\tproductList[data[i]['ckm_product.id']] = data[i]
\t            \t}
\t            }
\t\t\t})
\t\t\tfor(var i in data) {
\t\t\t\tswitch(data[i]['tkm_plan_out.remind_type']) {
\t\t\t\t\tcase '1':
\t\t\t\t\t\tremind_type.push('事情发生时');
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '2':
\t\t\t\t\t\tremind_type.push('5分钟');
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '3':
\t\t\t\t\t\tremind_type.push('15分钟');
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '4':
\t\t\t\t\t\tremind_type.push('30分钟');
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '5':
\t\t\t\t\t\tremind_type.push('1小时');
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '6':
\t\t\t\t\t\tremind_type.push('2小时');
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '7':
\t\t\t\t\t\tremind_type.push('1天');
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '8':
\t\t\t\t\t\tremind_type.push('2天');
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '9':
\t\t\t\t\t\tremind_type.push('1周');
\t\t\t\t\t\tbreak;
\t\t\t\t\tdefault:
\t\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\tvar styles = [];
\t\t\t\$('.thColor th').not(':first').each(function(i, e) {
\t\t\t\tstyles.push(\$(this).css('display'));
\t\t\t});
            var nameList = []; //参与人员
\t\t\tvar date = '';
\t\t\tfor(var i in data) {
\t\t\t\tfor(var k in data[i]['nameList']) {
\t\t\t\t\tnameList.push(data[i]['nameList'][k]['bmm_employees.name'])
\t\t\t\t}

\t\t\t\thtml += `<tr data-id=\"\${data[i]['tkm_plan_out.id']}\">
\t\t\t\t\t\t\t <td>
                            \t<label class=\"pos-rel\">
                            \t\t<a href=\"#\" class=\"_edit btOrange\" title=\"详情\"  style=\"color:#fff !important\"><i class=\"fa fa-info\"></i></a>
                             \t\t<a href=\"#\" class=\"_edit btBlue\" contentAuthority=\"255\" title=\"编辑\" style=\"color:#fff !important\"><i class=\"fa fa-pencil-square-o\"></i></a>
                             \t\t<a href=\"#\" class=\"_remove btRed\" contentAuthority=\"130\" title=\"删除\" style=\"color:#fff !important\"><i class=\"fa fa-trash-o\"></i></a>
                             \t</label>
                             </td>
                            <td style=\"display:\${styles[0]}\" data-num=\"1\">
                                <span>\${data[i]['ckm_position.name']}</span>
                            </td>
                            <td style=\"display:\${styles[1]}\" data-num=\"2\">
                                <span>
                                \t\${data[i]['tkm_plan_out.plan_start_time']}
                                </span>
                            </td>
                             <td style=\"display:\${styles[2]}\" data-num=\"8\">
                                <span>
                                \t\${data[i]['tkm_plan_out.plan_end_time']}
                                </span>
                            </td>
                            <td style=\"display:\${styles[3]}\" class=\"\" data-num=\"3\">
                            \t<span>\${data[i]['ckm_product.name']}</span>
                            </td>
                            <td style=\"display:\${styles[4]}\" class=\"center\" data-num=\"4\">
                                <span>\${data[i]['tkm_plan_out.remark']}</span>
                            </td>

                            <td style=\"display:\${styles[5]}\" class=\"center\" data-num=\"5\">
                                <span>\${remind_type[i]}</span>
                            </td>
                            <td style=\"display:\${styles[6]}\" class=\"center\" data-num=\"6\">
                                <span>\${nameList.join(',')}</span>
                            </td>
                             <td style=\"display:\${styles[7]}\" class=\"center\" data-num=\"7\">
                                <span>\${status[data[i]['tkm_plan_out.status']]}</span>
                            </td>
                        </tr>`;
\t\t\t\tnameList = [];
\t\t\t\tdate = '';
\t\t\t}

\t\t\t\$('#dataList').html(html);
\t\t\tcs.getNodes([130, 255]);
\t\t\t\$('._edit').unbind('click').click(function() {
\t\t\t\tvar index = \$(this).index();
\t\t\t\t
\t\t\t\tshowMark('#template');
\t\t\t\tgetPro();
\t\t\t\tvar listData = data[\$(this).parents('tr').index()];
\t\t\t\t\$('#showBox .title').text(index == 1 ? '编辑日程' : '详情');
\t\t\t\t\$('#templateBox .status').show();
\t\t\t\ttimeplug();
\t\t\t\t//参与人员
\t\t\t\t\$('#templateCon .select2').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t})
\t\t\t\t//获取所有员工
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_employees/f7',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tasync: false,
\t\t\t\t\tdata: {},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\t/*\$('.advandced-search').select2({allowClear:true});*/
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\t\$('#templateCon #state').append(new Option(data[i]['bmm_employees.name'], data[i]['bmm_employees.id']));
\t\t\t\t\t\t\t/* \$('.advandced-search').append(new Option(data[i]['name']));*/
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#templateCon #state').val([ykp.getCookie('uid')]).trigger('change');
\t\t\t\t\t}
\t\t\t\t});
                if(index == 0) {
\t\t\t\t\t\$('#templateBox').find('input,select,textarea').prop('disabled',true);
\t\t\t\t\t\$('#templateBox .add').remove();
\t\t\t\t}
\t\t\t\t// 获取所有片区
/* \t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_accountancies/list_position',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tpage: 1,
\t\t\t\t\t\tlimit: 999
\t\t\t\t\t},
\t\t\t\t\tasync: false,
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data.items;
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\t\$('#templateCon .pian').append(new Option(data[i]['ckm_position.name'], data[i]['ckm_position.id']));
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}); */
\t\t\t\t//获取所有区域，切换区域，切换仓位
\t\t\t\tgetAllAreasAndChangeAreaToChangePositions(\$('#templateCon [syllable=\"area\"]'), \$('#templateCon [syllable=\"position\"]'), listData['ckm_position.id'], listData);
\t\t\t\t//console.log(listData);
\t\t\t\tfor(var i in listData) {
\t\t\t\t\t\$('#templateBox').find('[field]').each(function() {
\t\t\t\t\t\tif(i.replace(/tkm_plan_out./, '') == \$(this).attr('field')) {
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'plan_time') {
\t\t\t\t\t\t\t\t\$(this).val(cs.getNowTime(listData[i]))
\t\t\t\t\t\t\t}else if(\$(this).attr('field') == 'members') {
\t\t\t\t\t\t\t\t\$(this).val(listData[i].split(',')).trigger('change');
\t\t\t\t\t\t\t}else {
\t\t\t\t\t\t\t\t\$(this).val(listData[i])
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t}
\t\t\t\t
\t\t\t\t//保存
\t\t\t\t\$('#templateCon .add').click(function() {
\t\t\t\t\tif(!cs.popValidate()) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\tvar objs = \$('#templateCon #state').select2('data');
\t\t\t\t\tif(objs.length <= 0) {
\t\t\t\t\t\tcs.popErrorMsg('请选择参与人员');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tvar strtext = [];
\t\t\t\t\tfor(var i in objs) {
\t\t\t\t\t\tstrtext.push(objs[i].id);
\t\t\t\t\t}

\t\t\t\t\tvar time = \$('#templateCon input').eq(0).val();
//\t\t\t\t\ttime = new Date(time) / 1000;
\t\t\t\t\tvar time1 = \$('#templateCon input').eq(1).val();
\t\t\t\t\tvar data = {
\t\t\t\t\t\t'id':listData['tkm_plan_out.id'],
\t\t\t\t\t\t'pian': \$('#templateCon select').eq(1).val(),
\t\t\t\t\t\t'title': \$('#templateCon select').eq(2).val(),
\t\t\t\t\t\t'remark': \$('#templateCon textarea').val().trim(),
\t\t\t\t\t\t'members': strtext.join(','),
\t\t\t\t\t\t'plan_start_time': time,
\t\t\t\t\t\t'plan_end_time': time1,
\t\t\t\t\t\t'remind_type': \$('#templateCon select')[2].selectedIndex,
\t\t\t\t\t\t'status' :\$('#templateCon').find('[field=status]').val(),
\t\t\t\t\t\t'remind_way':\$('#templateCon').find('[field=remind_way]').val()
\t\t\t\t\t};
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_plan/add_plan_out',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: data,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\tcs.popErrorMsg('编辑成功');
\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t})
\t\t\t

\t\t\t// \$('[data-rel=tooltip]').tooltip();公司名称图标提示
\t\t\t//\t\t\t\$('._edit').unbind('click').click(function(){
\t\t\t//\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t//\t\t\t\tvar _data = data[index];
\t\t\t//\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t//
\t\t\t//\t\t\t\t\$('#feedBack').show();
\t\t\t//
\t\t\t//\t\t\t\t\$('#feedBack [field]').val(_data['tkm_plan_out.status']);
\t\t\t//
\t\t\t//\t\t\t\t\$('#feedBack').on('click','.close_label,.hold',function(){
\t\t\t//\t\t\t\t\tvar it = \$(this);
\t\t\t//\t\t\t\t\tif(it.hasClass('hold')){
\t\t\t//\t\t\t\t\t\tvar postdata = {
\t\t\t//\t\t\t\t\t\t\tid:id,
\t\t\t//\t\t\t\t\t\t\tstatus:\$('#feedBack [field]').val()
\t\t\t//\t\t\t\t\t\t};
\t\t\t//\t\t\t\t\t\tykp.doAjax({
\t\t\t//\t\t\t\t\t\t\turl:'/api/api_plan/change_plan_status',
\t\t\t//\t\t\t\t\t\t\tmethod:'post',
\t\t\t//\t\t\t\t\t\t\tdata:postdata,
\t\t\t//\t\t\t\t\t\t\tsuccess:function(res){
\t\t\t//\t\t\t\t\t\t\t\tykp.prompt('修改完成状态成功');
\t\t\t//\t\t\t\t\t\t\t\tgetList();
\t\t\t//\t\t\t\t\t\t\t\t\$('#feedBack').hide();
\t\t\t//\t\t\t\t\t\t\t}
\t\t\t//\t\t\t\t\t\t})
\t\t\t//\t\t\t\t\t}
\t\t\t//\t\t\t\t\tif(it.hasClass('close_label')){
\t\t\t//\t\t\t\t\t\t\$('#feedBack').hide();
\t\t\t//\t\t\t\t\t}
\t\t\t//\t\t\t\t});
\t\t\t//\t\t\t});

\t\t\t\$('._remove').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\tlayer.confirm('真的删除行么', function(index) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_plan/del_plan_out',
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tid: id
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('删除成功!');
\t\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t})

\t\t\t\t})
\t\t\t})
\t\t\tdeleteSchedule();
\t\t}

\t\t//删除日程
\t\tfunction deleteSchedule() {

\t\t\t\$('#dataList ._remove').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\tlayer.confirm('确认删除吗？', function(index) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_plan/del_plan_out',
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tid:id
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function() {
\t\t\t\t\t\t\t\tykp.prompt('删除成功');
\t\t\t\t\t\t\t\tlayer.closeAll()
\t\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t})
\t\t\t\t\t
\t\t\t\t});
\t\t\t})
\t\t}
\t\t//获取所有区域，切换区域，切换仓位
\t\t//ele1 区域节点
\t\t//ele2 仓位节点
\t\tfunction getAllAreasAndChangeAreaToChangePositions(ele1, ele2, position, data) {
\t\t\tvar _data = data;
\t\t\tconsole.log(data);
\t\t\t//获取所有区域
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_accountancies/get_all_pos',
\t\t\t\tmethod: 'get',
\t\t\t\tdata: {

\t\t\t\t},
\t\t\t\tasync:false,
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\t//区域信息html
\t\t\t\t\tvar area_html = [];
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tarea_html.push('<option value=\"' + i + '\">' + i + '</option>');
\t\t\t\t\t}\t\t\t\t\t
\t\t\t\t\tele1.html(area_html.join('')).select2();
\t\t\t\t\tvar posId = \"\";
\t\t\t\t\t//切换区域，切换仓位
\t\t\t\t\tele1.change(function() {
\t\t\t\t\t\t//清空仓位信息
\t\t\t\t\t\tele2.html('<option value=\"\">请选择仓位</option>').select2();

\t\t\t\t\t\t//区域
\t\t\t\t\t\tvar area = \$(this).val();

\t\t\t\t\t\t//如果区域不存在，则返回
\t\t\t\t\t\tif(!area) {
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}

\t\t\t\t\t\tvar _data = data[area];
\t\t\t\t\t\t//仓位信息html
\t\t\t\t\t\tvar position_html = [];
\t\t\t\t\t\tfor(var i in _data) {
\t\t\t\t\t\t\tposition_html.push('<option value=\"' + _data[i]['id'] + '\">' + _data[i]['name'] + '</option>');
\t\t\t\t\t\t\tposId = _data[i]['id'];
\t\t\t\t\t\t}
\t\t\t\t\t\tele2.append(position_html.join(''));
\t\t\t\t\t});

\t\t\t\t\t//如果存在了仓位信息，就默认选中
 \t\t\t\t\tif(position) {
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\tfor(var j in data[i]) {
\t\t\t\t\t\t\t\tif(position == data[i][j]['id']) {
\t\t\t\t\t\t\t\t\tele1.val(i).trigger('change');
\t\t\t\t\t\t\t\t\tele2.val(position).trigger('change');
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\t//ele1.val(i).trigger('change');
\t\t\t\t\t\t\t//ele2.val().trigger('change');
\t\t\t\t\t\t}
\t\t\t\t\t} 
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//自定义列表
\t\tcs.custorm_check('#dynamic-table', '#dataList', false);

\t\t//时间范围
\t\t// \$('input[name=date-range-picker]').daterangepicker({
\t\t// \t'applyClass': 'btn-sm btn-success',
\t\t// \t'cancelClass': 'btn-sm btn-default',
\t\t// \tlocale: {
\t\t// \t\tapplyLabel: '确认',
\t\t// \t\tcancelLabel: '取消',
\t\t// \t}
\t\t// })

\t\t//高级搜索
\t\t// \$('#heightsearch').click(function() {
\t\t// \tif(\$(this).hasClass('active')) {
\t\t// \t\t\$(this).removeClass('active');
\t\t// \t\t\$(\"#heightsearch1\").animate({
\t\t// \t\t\theight: \"0px\"
\t\t// \t\t});
\t\t// \t} else {
\t\t// \t\t\$(\"#heightsearch1\").animate({
\t\t// \t\t\theight: \"50px\"
\t\t// \t\t});
\t\t// \t\t\$(this).attr('class', 'btn btn-info btn-sm active')
\t\t// \t}

\t\t// })

\t\t//时间插件
\t\t// if(!ace.vars['old_ie']) {
\t\t// \t\$('#date-timepicker1').datetimepicker({
\t\t// \t\t//format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds
\t\t// \t\ticons: {
\t\t// \t\t\ttime: 'fa fa-clock-o',
\t\t// \t\t\tdate: 'fa fa-calendar',
\t\t// \t\t\tup: 'fa fa-chevron-up',
\t\t// \t\t\tdown: 'fa fa-chevron-down',
\t\t// \t\t\tprevious: 'fa fa-chevron-left',
\t\t// \t\t\tnext: 'fa fa-chevron-right',
\t\t// \t\t\ttoday: 'fa fa-arrows ',
\t\t// \t\t\tclear: 'fa fa-trash',
\t\t// \t\t\tclose: 'fa fa-times'
\t\t// \t\t}
\t\t// \t}).next().on(ace.click_event, function() {
\t\t// \t\t\$(this).prev().focus();
\t\t// \t});
\t\t// }
\t})
</script>";
    }

    public function getTemplateName()
    {
        return "admin/platform/schedule.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 384,  403 => 383,  19 => 1,);
    }
}
/* <!-- <link rel="stylesheet" href="/resource/adimin/assets/css/jquery.searchableSelect.css" /> -->*/
/* <style type="text/css">*/
/* 	#templateCon label {*/
/* 		width: 90px;*/
/* 	}*/
/* </style>*/
/* <div class="widget-main">*/
/* 	<div class="row" id="topTool" style="position:relative;">*/
/* 		<!--<div class="col-sx-4" style=" float: left;margin-right:5px;">*/
/* 			<select pts="5" sear="tkm_plan_out.title" style="width:150px;">*/
/* 				<option value=""> 请选择日程主题 </option>*/
/* 				<option value="1">处理税务</option>*/
/* 				<option value="2">业务签单</option>*/
/* 				<option value="3">注册公司</option>*/
/* 				<option value="4">变更公司</option>*/
/* 				<option value="5">注册商标</option>*/
/* 				<option value="6">注销公司</option>*/
/* 				<option value="7">外勤配送</option>*/
/* 				<option value="8">网站建设</option>*/
/* 			</select>*/
/* 		</div>-->*/
/* 		*/
/* <div class="col-sx-4" style=" float: left">*/
/* */
/* 			<select style="width: 180px" pts=2 class="advandced-search select2-hidden-accessible" sear="tkm_plan_out.title" tabindex="-1" aria-hidden="true">*/
/* 				<option value="">日程主题</option>*/
/* 			</select>*/
/* */
/* 		</div>*/
/* 		<div class="col-sx-4" style=" float: left;margin-left: 5px;">*/
/* */
/* 			<select style="width: 180px" pts=2 class="advandced-search select2-hidden-accessible" sear="tkm_plan_out.members" tabindex="-1" aria-hidden="true">*/
/* 				<option value="">参与人员</option>*/
/* 			</select>*/
/* */
/* 		</div>*/
/* 		<!-- <div class="col-sx-4" style=" float: left">*/
/* 			<select style="margin-right: 12px !important;width: 180px" data-placeholder ="审核人" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select>*/
/* 		</div> -->*/
/* */
/* 		<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 			<input type="text" pts="0" sear="tkm_plan_out.remark" style="margin-left: 5px;" placeholder="备注" />*/
/* 		</div>*/
/* */
/* 		<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 			<button type="button" pts="0" sear="" id="search" title="搜索" class="btn btn-info btn-sm">*/
/*                 <i class="fa fa-search"></i>*/
/*             </button>*/
/* */
/* 		</div>*/
/* 		<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 			<button id="heightsearch" type="button" title="高级搜索" class="btn btn-info btn-sm" style="background-color:#00c0ef !important;">*/
/*                 <i class="fa fa-filter"></i>*/
/*             </button>*/
/* 		</div>*/
/* 		<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 			<button id="flush" type="button" title="刷新" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/*                 <i class="fa fa-refresh"></i>*/
/*             </button>*/
/* 		</div>*/
/* 		<div contentAuthority="129" class="col-sx-4" style=" float: left;  margin-right: 5px; ">*/
/* 			<button id="add" type="button" title="添加" style="background-color: #32CD32	 !important;border-color: #32CD32 !important;" class="btn addBtn btn-info btn-sm">*/
/*                     <i class="fa fa-plus"></i>*/
/*                 </button>*/
/* 		</div>*/
/* */
/* 		<!--高级搜索-->*/
/* 		<div id="heightsearch1" class="col-sx-12" style="margin-top:30px;position: absolute; background: #fff; z-index: 1041;padding: 20px 10px; display: none;">*/
/* 			<div class="row">*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>日程片区</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select> */
/* 					<select gjs=0 sear="ckm_position.id" class="cw" data-type="gj" style="width:180px;">*/
/* 						*/
/* 					</select>*/
/* 					<!--<input type="text" gjs=0 sear="ckm_position.name" />-->*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>日程开始时间</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 						<option> > </option>*/
/* 						<option> &lt; </option>*/
/* 					</select>*/
/* 					<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 						<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="tkm_plan_out.plan_start_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 					</div>*/
/* 					<!-- <div class="input-group" style="display: inline-flex; width: 180px;">*/
/*                     <input id="date-timepicker1" class="date-timepicker1" data-type="gj" data-status="time" gjs="0" sear="tkm_plan_out.plan_time" style="height: 30px;width: 150px;">*/
/*                     <span class="input-group-addon" style="width:30px;height:30px;">*/
/*                         <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                     </span>*/
/*                     </div>-->*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>日程结束时间</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 						<option> > </option>*/
/* 						<option> &lt; </option>*/
/* 					</select>*/
/* 					<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 						<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="tkm_plan_out.plan_end_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 					</div>*/
/* 					<!-- <div class="input-group" style="display: inline-flex; width: 180px;">*/
/*                     <input id="date-timepicker1" class="date-timepicker1" data-type="gj" data-status="time" gjs="0" sear="tkm_plan_out.plan_time" style="height: 30px;width: 150px;">*/
/*                     <span class="input-group-addon" style="width:30px;height:30px;">*/
/*                         <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                     </span>*/
/*                     </div>-->*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>日程主题</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select gjs=0 data-type="gj" sear="tkm_plan_out.title" style="width:180px;">*/
/* 						<option value="">请选择</option>*/
/* 						<option value="1">处理税务</option>*/
/* 						<option value="2">业务签单</option>*/
/* 						<option value="3">注册公司</option>*/
/* 						<option value="4">变更公司</option>*/
/* 						<option value="5">注册商标</option>*/
/* 						<option value="6">注销公司</option>*/
/* 						<option value="7">外勤配送</option>*/
/* 						<option value="8">网站建设</option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>日程备注</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<input type="text" gjs=0 sear="tkm_plan_out.remark" />*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>提醒方式</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select gjs=0 data-type="gj" sear="tkm_plan_out.remind_type" style="width:180px;">*/
/* 						<option value="">请选择</option>*/
/* 						<option value="1">事情发生时</option>*/
/* 						<option value="2">5分钟</option>*/
/* 						<option value="3">15分钟</option>*/
/* 						<option value="4">30分钟</option>*/
/* 						<option value="5">1小时</option>*/
/* 						<option value="6">2小时</option>*/
/* 						<option value="7">1天</option>*/
/* 						<option value="8">2天</option>*/
/* 						<option value="9">1周</option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>参与人员</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select style="margin:12px !important;width: 180px" sear="tkm_plan_out.members" gjs="3" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 						<option value="">请选择</option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 					<label>完成状态</label>*/
/* 					<select>*/
/* 						<option> = </option>*/
/* 					</select>*/
/* 					<select gjs=0 data-type="gj" sear="tkm_plan_out.status" style="width:180px;">*/
/* 						<option value="">请选择</option>*/
/* 						<option value="0">未完成</option>*/
/* 						<option value="1">已完成</option>*/
/* 						<option value="2">已作废</option>*/
/* 					</select>*/
/* 				</div>*/
/* */
/* 				<div class="col-sx-4" style="clear:both;padding-top:10px;text-align:center;">*/
/* 					<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/*                     查询*/
/*                 </button>*/
/* 					<button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/*                        重置*/
/*                     </button>*/
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
/* 						<th>操作</th>*/
/* 						<th data-num="1">日程片区</th>*/
/* 						<th data-num="2">日程开始时间</th>*/
/* 						<th data-num="8">日程结束时间</th>*/
/* 						<th data-num="3">日程主题</th>*/
/* 						<th data-num="4">日程备注</th>*/
/* 						<th data-num="5">提醒方式</th>*/
/* 						<th data-num="6">参与人员</th>*/
/* 						<th data-num="7">完成状态</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* */
/* 				<tbody id="dataList">*/
/* */
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* */
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
/* </div>*/
/* <div id="template" style="display: none">*/
/* 	<div class="widget-box" style="height: 500px;">*/
/* 			<div style="margin-top:15px;" class="coordinate area_position">*/
/* 				<!-- style="width:180px;" class="required" msg="公司名称不能为空" -->*/
/* 				<label>区域名称： </label>*/
/* 				<select syllable="area" style="width: 180px !important;">*/
/* 					<option value="">请选择区域</option>*/
/* 				</select>*/
/* 				<label>仓位： </label>*/
/* 				<select syllable="position" style="width: 180px !important;">*/
/* 					<option value="">请选择仓位</option>*/
/* 				</select>*/
/* 			</div>*/
/* 		<div style="margin-top:15px;">*/
/* <!-- 			<label> 日程片区： </label>*/
/* 			<select field="pian" style="width:180px;" class="pian required" msg="请选择日程片区">*/
/* 				<option value=""> --- 请选择 ---</option>*/
/* 				<option>南山</option>*/
/* 						<option>福田</option>*/
/* 						<option>海珠</option>*/
/* 						<option >111</option>*/
/* 						<option >黄埔</option>*/
/* 						<option >龙岗</option>*/
/* 						<option >龙华</option>*/
/* 						<option >南山</option>*/
/* 						<option >123</option>*/
/* 						<option >在</option>*/
/* 						<option >宝安</option>*/
/* 			</select> -->*/
/* 			<label> 日程主题： </label>*/
/* 			<select field="title" style="width:180px;" class="required" msg="请选择日程主题">*/
/* 				<option value=""> --- 请选择 ---</option>*/
/* 				<option value="1">处理税务</option>*/
/* 				<option value="2">业务签单</option>*/
/* 				<option value="3">注册公司</option>*/
/* 				<option value="4">变更公司</option>*/
/* 				<option value="5">注册商标</option>*/
/* 				<option value="6">注销公司</option>*/
/* 				<option value="7">外勤配送</option>*/
/* 				<option value="8">网站建设</option>*/
/* 			</select>*/
/* 			*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label style="margin-left:0px;"> 开始时间： </label>*/
/* 			<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 				<input field="plan_start_time" id="date-timepicker1" class="date-timepicker1 form-control required" style="height: 30px; width: 150px;" msg="日程开始时间不能为空">*/
/* 				<span class="input-group-addon" style="width:30px;height:30px;">*/
/*                             <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                         </span>*/
/* 			</div>*/
/* 			<label style="margin-left:10px;"> 结束时间： </label>*/
/* 			<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 				<input field="plan_end_time" id="date-timepicker1" class="date-timepicker1 form-control required" style="height: 30px; width: 150px;margin-left: 0px" msg="日程结束时间不能为空">*/
/* 				<span class="input-group-addon" style="width:30px;height:30px;">*/
/*                             <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                         </span>*/
/* 			</div>*/
/* 			*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label style="margin-left:0px;"> 提醒方式： </label>*/
/* 			<select field="remind_type" style="width:180px;" class="required" msg="请选择提醒方式">*/
/* 				<option value="">请选择</option>*/
/* 				<option value="1">事情发生时</option>*/
/* 				<option value="2">提前5分钟</option>*/
/* 				<option value="3">提前15分钟</option>*/
/* 				<option value="4">提前30分钟</option>*/
/* 				<option value="5">提前1小时</option>*/
/* 				<option value="6">提前2小时</option>*/
/* 				<option value="7">提前1天</option>*/
/* 				<option value="8">提前2天</option>*/
/* 				<option value="9">提前1周</option>*/
/* 			</select>*/
/* 			<label style="margin-left:0px;">重复提醒： </label>*/
/* 			<select field="remind_way" style="width:180px;" class="required" msg="请选择提醒方式">*/
/* 				<option value="">请选择</option>*/
/* 				<option value="1">从不</option>*/
/* 				<option value="2">每天</option>*/
/* 				<option value="3">每周</option>*/
/* 				<option value="4">每两周</option>*/
/* 				<option value="5">每月</option>*/
/* 			</select>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label style="float:left"> 日程备注： </label>*/
/* 			<textarea field="remark" style="width: 440px;resize: none; padding: 5px; margin-left: 4px;"></textarea>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label style="float:left; margin-right: 4px;"> 参与人员： </label>*/
/* 			<select multiple="" field="members" id="state" name="state" class="select2 select2-hidden-accessible" data-placeholder="请选择" style="width:440px; margin-left: 4px !important;" tabindex="-1" aria-hidden="true">*/
/* 			</select>*/
/* 		</div>*/
/* 		<div style="margin-top:15px; display: none;" class="status">*/
/* 			<label style="float:left; margin-right: 4px;"> 完成状态： </label>*/
/* 			<select style="width:180px;" field="status">*/
/* 				<option value="0">未完成</option>*/
/* 				<option value="1">已完成</option>*/
/* 				<option value="2">已作废</option>*/
/* 			</select>*/
/* 		</div>*/
/* 		<div style="text-align:center;margin-top:15px;">*/
/* 			<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* 			<button class="sure_button add">*/
/*                         <i class="fa fa-check" aria-hidden="true"></i>*/
/*                         保存*/
/*                     </button>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* </div>*/
/* */
/* <div class="label_popup" id="feedBack" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 	<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 	            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 		<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 			<span style="display: inline-block;">编辑完成状态</span>*/
/* 			<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 		</div>*/
/* 		<div style="text-align:center;padding:20px 0;">*/
/* 			<select style="width:180px;" field="status">*/
/* 				<option value="0">未完成</option>*/
/* 				<option value="1">已完成</option>*/
/* 				<option value="2">已作废</option>*/
/* 			</select>*/
/* 			<!--<hr>-->*/
/* 		</div>*/
/* 		<div style="padding:15px;text-align:right;">*/
/* 			<button class="close_label">关闭</button>*/
/* 			<button class="hold">保存</button>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="template1" style="display: none;">*/
/* 	<div class="col-sm-12">*/
/* 		<div class="widget-box">*/
/* 			<div class="widget-header widget-header-small">*/
/* 				<h5 class="widget-title lighter">审核日程</h5>*/
/* 			</div>*/
/* 			<table class="table baseInfoTable">*/
/* 				<tbody>*/
/* 				</tbody>*/
/* 			</table>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% include 'admin/mark.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script>*/
/* 	jQuery(function($) {*/
/* 		cs.getNodes([129]);*/
/* 		cs.dataRang();*/
/* 		var rows = 10; //每页显示的条目数*/
/* 		var order = 'ckm_position.id desc';*/
/* 		var filter = 'tkm_plan_out.is_del = 0'; //过滤条件*/
/* 		var employees = {};*/
/* 		*/
/* 		*/
/* 		*/
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_plan/index',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: filter,*/
/* 				limit: rows,*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '.pageBar'*/
/* 			},*/
/* 			contentId: "#datalist", //默认排序*/
/* 			initOrder: "", //初始化sort*/
/* 			defaultOrder: order,*/
/* 			defaultOrder: order,*/
/* 			params: [{*/
/* 				id: "#dynamic-table",*/
/* 				field: ["","ckm_position.name", "tkm_plan_out.plan_start_time", "tkm_plan_out.plan_end_time", "", "tkm_plan_out.remark", "tkm_plan_out.remind_type",*/
/* 					"", "tkm_plan_out.status"]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* 		*/
/* */
/* 		tspage();*/
/* */
/* 		function tspage() {*/
/* 			var titleTask = ykp.getCookie('titleTask');*/
/*             console.log(titleTask,111);*/
/*             if(titleTask != '' && titleTask != undefined) {*/
/* 				var today = new Date().setHours(0, 0, 0, 0) / 1000; //今天零点的时间戳*/
/* 				var curTime = Date.parse(new Date()) / 1000;*/
/* 				var data = {*/
/* 					limit: rows,*/
/* 					filter: `tkm_plan_out.is_del = 0 and find_in_set(${ykp.getCookie('uid')},members)` //待添加完成状态*/
/* 				}*/
/* 				if(titleTask == 6) {*/
/* 					data.filter += ` and remind_way = 1 and tkm_plan_out.plan_end_time < ${curTime}`;*/
/* 				} */
/* 				getList_2(data);*/
/* 				ykp.setCookie('titleTask', '');*/
/* 			} else {*/
/* 				//获取列表数据*/
/* 				ykp.setCookie("filter", "");*/
/* 				ykp.setCookie("where", "");*/
/* 				getList();*/
/* 			}*/
/* 		}*/
/* */
/* 		$('#flush').click(function() {*/
/* 			filter = "tkm_plan_out.is_del = 0";*/
/* 			$('[sear="tkm_plan_out.remark"]').val('');*/
/* 			$('[sear="tkm_plan_out.title"]').val('').trigger('change');*/
/* 			$('[sear="tkm_plan_out.members"]').val('').trigger('change');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getList();*/
/* 		})*/
/* */
/* 		function getList_2(data) {*/
/* 			ykp.list({*/
/* 				url: '/api/api_plan/index',*/
/* 				method: 'post',*/
/* 				data: data,*/
/* 				pageBar: {*/
/* 					id: '#pageBar',*/
/* 					order: order*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
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
/* 		//获取所有员工*/
/* 		ykp.doAjax({*/
/* 			url: '/api/api_employees/f7',*/
/* 			method: 'post',*/
/* 			async: false,*/
/* 			data: {*/
/* 				select: 'bmm_employees.id,bmm_employees.name'*/
/* 			},*/
/* 			success: function(res) {*/
/* 				var data = res.data;*/
/* 				var option = '';*/
/* 				$('.advandced-search').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* 				for(var i in data) {*/
/* 					if(data[i]['name']) {*/
/* 						option += `<option value="${data[i]['id']}">${data[i]['name']}</option>`*/
/* 					}*/
/* 				}*/
/* 				$('.advandced-search').append(option)*/
/* 			}*/
/* 		});*/
/* */
/* 		//普通搜索*/
/* 		function search() {*/
/* 			var data = {*/
/* 				url: '/api/api_plan/index',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					type: 1,*/
/* 					limit: rows*/
/* 				}*/
/* 			}*/
/* */
/* 			cs.doSearch('#search', data, 'filter', false, function(res,_filter) {*/
/* 				filter = _filter;*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 				} else {*/
/* 					addList(res);*/
/* 				}*/
/* 			}, 'tkm_plan_out.is_del = 0');*/
/* 		}*/
/* */
/* 		//高级搜索*/
/* 		function advancedSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_plan/index',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					type: 1,*/
/* 					limit: rows*/
/* 				}*/
/* 			}*/
/* */
/* 			cs.hSearch('.search1', data, 'filter', false, function(res, _filter) {*/
/* 				filter = _filter;*/
/* 				$('.in').click();*/
/* 				$('#heightsearch').removeClass('active');*/
/* 				$("#heightsearch1").slideUp();*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					return;*/
/* 				}*/
/* */
/* 				addList(res);*/
/* */
/* 			}, 'tkm_plan_out.is_del = 0')*/
/* 		}*/
/* */
/* 		//高级搜索按钮*/
/* 		cs.showHeightSearch('#heightsearch', '#heightsearch1');*/
/* */
/* 		*/
/* 		*/
/* 		//日程时间*/
/* 			function timeplug() {*/
/* 				if(!ace.vars['old_ie']) {*/
/* 					$('#templateCon .date-timepicker1').datetimepicker({*/
/* 						// format: 'YYYY-MM-DD HH:mm',//use this option to display seconds*/
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
/* 			}*/
/* */
/* 		//添加日程*/
/* 		$('#add').click(function() {*/
/* 			showMark('#template');*/
/* 			$('#showBox .title').text('添加日程');*/
/* 			$('#templateCon textarea').empty(); //清空备注框*/
/* 			getPro();*/
/* 			//保存*/
/* 			$('#templateCon .add').click(function() {*/
/* 				if(!cs.popValidate()) {*/
/* 					return;*/
/* 				}*/
/* */
/* 				var objs = $('#templateCon #state').select2('data');*/
/* 				if(objs.length <= 0) {*/
/* 					cs.popErrorMsg('请选择参与人员');*/
/* 					return;*/
/* 				}*/
/* 				var strtext = [];*/
/* 				for(var i in objs) {*/
/* 					strtext.push(objs[i].id);*/
/* 				}*/
/* */
/* 				var time = $('#templateCon input').eq(0).val();*/
/* //				time = new Date(time) / 1000;*/
/* 				var time1 = $('#templateCon input').eq(1).val();*/
/* 				var data = {*/
/* 					'pian': $('#templateCon select').eq(1).val(),*/
/* 					'title': $('#templateCon select').eq(2).val(),*/
/* 					'remark': $('#templateCon textarea').val().trim(),*/
/* 					'members': strtext.join(','),*/
/* 					'plan_start_time': time,*/
/* 					'plan_end_time': time1,*/
/* 					'remind_type': $('#templateCon select')[2].selectedIndex,*/
/* 				};*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_plan/add_plan_out',*/
/* 					method: 'post',*/
/* 					data: data,*/
/* 					success: function(res) {*/
/* 						cs.close();*/
/* 						getList();*/
/* 					}*/
/* 				});*/
/* 			});*/
/*  			*/
/*  			var ele1 = $('#templateCon [syllable="area"]');*/
/*  			var ele2 = $('#templateCon [syllable="postion"]');*/
/*  			//var position = 0;*/
/* /* 			ykp.doAjax({*/
/* 				url: '/api/api_accountancies/get_all_pos',*/
/* 				method: 'get',*/
/* 				data: {*/
/* */
/* 				},*/
/* 				async:false,*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					//区域信息html*/
/* 					var area_html = [];*/
/* 					for(var i in data) {*/
/* 						area_html.push('<option value="' + i + '">' + i + '</option>');*/
/* 					}					*/
/* 					ele1.html(area_html.join('')).select2();*/
/* 					var posId = "";*/
/* 					//切换区域，切换仓位*/
/* 			*/
/* */
/* 					//如果存在了仓位信息，就默认选中*/
/* 					//ele1.val('s').trigger('change');*/
/*  					for(var i in data) {*/
/* 						ele1.val(i).trigger('change');*/
/* 						//ele2.val('0').trigger('change');*/
/* 					} */
/* 				}*/
/* 			}); *//* */
/* 			*/
/*   			ykp.doAjax({*/
/* 				url: '/api/api_accountancies/get_all_pos',*/
/* 				method: 'get',*/
/* 				data: {},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 	            	var option = "<option value='0'>请选择</option>";*/
/* 	            	for(var i in data) {*/
/* 	            		option += '<option value="' + i + '">' + i + '</option>';*/
/* 	            	}*/
/* 					$('#templateCon [syllable="area"]').html(option).select2();*/
/* 					//切换区域，切换仓位*/
/* 					$('#templateCon [syllable="area"]').change(function() {*/
/* 						//区域*/
/* 						var area = $(this).val();*/
/* 						//如果区域不存在，则返回*/
/* 						if(!area) {*/
/* 							return;*/
/* 						}*/
/* */
/* 						var _data = data[area];*/
/* 						//仓位信息html*/
/* 						var position_html = [];*/
/* 						var option_pos = '<option value="0">请选择</option>';*/
/* 						for(var i in _data) {*/
/* 							option_pos += '<option value="' + _data[i]['id'] + '">' + _data[i]['name'] + '</option>';*/
/* 						}*/
/* 						$('#templateCon [syllable="position"]').html(option_pos).select2();*/
/* 					});*/
/* 				}*/
/* 			});*/
/* 			// 获取所有片区*/
/*   			/* ykp.doAjax({*/
/* 				url: '/api/api_accountancies/list_position',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					page: 1,*/
/* 					limit: 999*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data.items;*/
/* 					for(var i in data) {*/
/* 						//$('#templateCon .pian').append(new Option(data[i]['ckm_position.name'], data[i]['ckm_position.id']));*/
/* 						$('#templateCon [syllable="area"]').append(new Option(data[i]['ckm_position.name'], data[i]['ckm_position.id']));*/
/* 					}*/
/* 					$('#templateCon [syllable="area"]').select2();*/
/* 				}*/
/* 			}); *//* */
/* 			//时间插件*/
/* 			timeplug();*/
/* 			//参与人员*/
/* 			$('#templateCon .select2').select2({*/
/* 				allowClear: true*/
/* 			})*/
/* 			//获取所有员工*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_employees/f7',*/
/* 				method: 'post',*/
/* 				async: false,*/
/* 				data: {},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					/*$('.advandced-search').select2({allowClear:true});*//* */
/* 					for(var i in data) {*/
/* 						if(data[i]['bmm_employees.name']) {*/
/* 							$('#templateCon #state').append(new Option(data[i]['bmm_employees.name'], data[i]['bmm_employees.id']));*/
/* 						}*/
/* */
/* 						/* $('.advandced-search').append(new Option(data[i]['name']));*//* */
/* 					}*/
/* 					$('#templateCon #state').val([ykp.getCookie('uid')]).trigger('change');*/
/* 				}*/
/* 			});*/
/* */
/* 			$('#select2-multiple-style .btn').on('click', function(e) {*/
/* 				var target = $(this).find('input[type=radio]');*/
/* 				var which = parseInt(target.val());*/
/* 				if(which == 2)*/
/* 					$('.select2').addClass('tag-input-style');*/
/* 				else*/
/* 					$('.select2').removeClass('tag-input-style');*/
/* 			});*/
/* 		})*/
/* 		getPro();*/
/* 		//切换每页显示的条目数*/
/* 		$('#changePageNum').change(function() {*/
/* 			rows = $(this).val();*/
/* 			getList();*/
/* 		})*/
/* 		*/
/* 		function getPro() {*/
/* 			ykp.doAjax({*/
/* 				url:'/api/api_product/index',*/
/* 	                method:'post',*/
/* 	                data:{*/
/* 	                  	filter:'ckm_product.is_del = 0',*/
/* 						page:1,*/
/* 						limit:999,*/
/* 	            },*/
/* 	            async:false,*/
/* 	            success:function(res) {*/
/* 	            	var data = res.data.items;*/
/* 	            	var option = "<option value=''>请选择</option>";*/
/* 	            	for(var i in data) {*/
/* 	            		option += "<option value="+data[i]['ckm_product.id']+">"+data[i]['ckm_product.name']+"</option>"*/
/* 	            	}*/
/* 	            	$('#templateCon').find('select[field=title]').html(option);*/
/* 	            	$('select[sear="tkm_plan_out.title"]').html(option);*/
/* 	            }*/
/* 			})*/
/* 		}*/
/* */
/* 		function getList() {*/
/* 			search();*/
/* 			advancedSearch();*/
/* 			ykp.list({*/
/* 				url: '/api/api_plan/index',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: rows,*/
/* 					filter: filter,*/
/* 					order: 'tkm_plan_out.create_time desc'*/
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
/* 						return false;*/
/* 					} else {*/
/* 						addList(res);*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//处理数据*/
/* 		function addList(res) {*/
/* 			var data = res.data.items;*/
/* 			var html = '';*/
/* 			var title = []; //日程主题*/
/* 			var remind_type = []; //提醒方式*/
/* 			var status = ['未完成', '已完成', '已作废'];*/
/* 			var productList = {};*/
/* 			ykp.doAjax({*/
/* 				url:'/api/api_product/index',*/
/* 	                method:'post',*/
/* 	                data:{*/
/* 	                  	filter:'ckm_product.is_del = 0',*/
/* 						page:1,*/
/* 						limit:999,*/
/* 	            },*/
/* 	            async:false,*/
/* 	            success:function(res) {*/
/* 	            	var data = res.data.items;*/
/* 	            	for(var i in data) {*/
/* 	            		productList[data[i]['ckm_product.id']] = data[i]*/
/* 	            	}*/
/* 	            }*/
/* 			})*/
/* 			for(var i in data) {*/
/* 				switch(data[i]['tkm_plan_out.remind_type']) {*/
/* 					case '1':*/
/* 						remind_type.push('事情发生时');*/
/* 						break;*/
/* 					case '2':*/
/* 						remind_type.push('5分钟');*/
/* 						break;*/
/* 					case '3':*/
/* 						remind_type.push('15分钟');*/
/* 						break;*/
/* 					case '4':*/
/* 						remind_type.push('30分钟');*/
/* 						break;*/
/* 					case '5':*/
/* 						remind_type.push('1小时');*/
/* 						break;*/
/* 					case '6':*/
/* 						remind_type.push('2小时');*/
/* 						break;*/
/* 					case '7':*/
/* 						remind_type.push('1天');*/
/* 						break;*/
/* 					case '8':*/
/* 						remind_type.push('2天');*/
/* 						break;*/
/* 					case '9':*/
/* 						remind_type.push('1周');*/
/* 						break;*/
/* 					default:*/
/* 						break;*/
/* 				}*/
/* 			}*/
/* 			var styles = [];*/
/* 			$('.thColor th').not(':first').each(function(i, e) {*/
/* 				styles.push($(this).css('display'));*/
/* 			});*/
/*             var nameList = []; //参与人员*/
/* 			var date = '';*/
/* 			for(var i in data) {*/
/* 				for(var k in data[i]['nameList']) {*/
/* 					nameList.push(data[i]['nameList'][k]['bmm_employees.name'])*/
/* 				}*/
/* */
/* 				html += `<tr data-id="${data[i]['tkm_plan_out.id']}">*/
/* 							 <td>*/
/*                             	<label class="pos-rel">*/
/*                             		<a href="#" class="_edit btOrange" title="详情"  style="color:#fff !important"><i class="fa fa-info"></i></a>*/
/*                              		<a href="#" class="_edit btBlue" contentAuthority="255" title="编辑" style="color:#fff !important"><i class="fa fa-pencil-square-o"></i></a>*/
/*                              		<a href="#" class="_remove btRed" contentAuthority="130" title="删除" style="color:#fff !important"><i class="fa fa-trash-o"></i></a>*/
/*                              	</label>*/
/*                              </td>*/
/*                             <td style="display:${styles[0]}" data-num="1">*/
/*                                 <span>${data[i]['ckm_position.name']}</span>*/
/*                             </td>*/
/*                             <td style="display:${styles[1]}" data-num="2">*/
/*                                 <span>*/
/*                                 	${data[i]['tkm_plan_out.plan_start_time']}*/
/*                                 </span>*/
/*                             </td>*/
/*                              <td style="display:${styles[2]}" data-num="8">*/
/*                                 <span>*/
/*                                 	${data[i]['tkm_plan_out.plan_end_time']}*/
/*                                 </span>*/
/*                             </td>*/
/*                             <td style="display:${styles[3]}" class="" data-num="3">*/
/*                             	<span>${data[i]['ckm_product.name']}</span>*/
/*                             </td>*/
/*                             <td style="display:${styles[4]}" class="center" data-num="4">*/
/*                                 <span>${data[i]['tkm_plan_out.remark']}</span>*/
/*                             </td>*/
/* */
/*                             <td style="display:${styles[5]}" class="center" data-num="5">*/
/*                                 <span>${remind_type[i]}</span>*/
/*                             </td>*/
/*                             <td style="display:${styles[6]}" class="center" data-num="6">*/
/*                                 <span>${nameList.join(',')}</span>*/
/*                             </td>*/
/*                              <td style="display:${styles[7]}" class="center" data-num="7">*/
/*                                 <span>${status[data[i]['tkm_plan_out.status']]}</span>*/
/*                             </td>*/
/*                         </tr>`;*/
/* 				nameList = [];*/
/* 				date = '';*/
/* 			}*/
/* */
/* 			$('#dataList').html(html);*/
/* 			cs.getNodes([130, 255]);*/
/* 			$('._edit').unbind('click').click(function() {*/
/* 				var index = $(this).index();*/
/* 				*/
/* 				showMark('#template');*/
/* 				getPro();*/
/* 				var listData = data[$(this).parents('tr').index()];*/
/* 				$('#showBox .title').text(index == 1 ? '编辑日程' : '详情');*/
/* 				$('#templateBox .status').show();*/
/* 				timeplug();*/
/* 				//参与人员*/
/* 				$('#templateCon .select2').select2({*/
/* 					allowClear: true*/
/* 				})*/
/* 				//获取所有员工*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_employees/f7',*/
/* 					method: 'post',*/
/* 					async: false,*/
/* 					data: {},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						/*$('.advandced-search').select2({allowClear:true});*//* */
/* 						for(var i in data) {*/
/* 							$('#templateCon #state').append(new Option(data[i]['bmm_employees.name'], data[i]['bmm_employees.id']));*/
/* 							/* $('.advandced-search').append(new Option(data[i]['name']));*//* */
/* 						}*/
/* 						$('#templateCon #state').val([ykp.getCookie('uid')]).trigger('change');*/
/* 					}*/
/* 				});*/
/*                 if(index == 0) {*/
/* 					$('#templateBox').find('input,select,textarea').prop('disabled',true);*/
/* 					$('#templateBox .add').remove();*/
/* 				}*/
/* 				// 获取所有片区*/
/* /* 				ykp.doAjax({*/
/* 					url: '/api/api_accountancies/list_position',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						page: 1,*/
/* 						limit: 999*/
/* 					},*/
/* 					async: false,*/
/* 					success: function(res) {*/
/* 						var data = res.data.items;*/
/* 						for(var i in data) {*/
/* 							$('#templateCon .pian').append(new Option(data[i]['ckm_position.name'], data[i]['ckm_position.id']));*/
/* 						}*/
/* 					}*/
/* 				}); *//* */
/* 				//获取所有区域，切换区域，切换仓位*/
/* 				getAllAreasAndChangeAreaToChangePositions($('#templateCon [syllable="area"]'), $('#templateCon [syllable="position"]'), listData['ckm_position.id'], listData);*/
/* 				//console.log(listData);*/
/* 				for(var i in listData) {*/
/* 					$('#templateBox').find('[field]').each(function() {*/
/* 						if(i.replace(/tkm_plan_out./, '') == $(this).attr('field')) {*/
/* 							if($(this).attr('field') == 'plan_time') {*/
/* 								$(this).val(cs.getNowTime(listData[i]))*/
/* 							}else if($(this).attr('field') == 'members') {*/
/* 								$(this).val(listData[i].split(',')).trigger('change');*/
/* 							}else {*/
/* 								$(this).val(listData[i])*/
/* 							}*/
/* 						}*/
/* 					})*/
/* 				}*/
/* 				*/
/* 				//保存*/
/* 				$('#templateCon .add').click(function() {*/
/* 					if(!cs.popValidate()) {*/
/* 						return;*/
/* 					}*/
/* */
/* 					var objs = $('#templateCon #state').select2('data');*/
/* 					if(objs.length <= 0) {*/
/* 						cs.popErrorMsg('请选择参与人员');*/
/* 						return;*/
/* 					}*/
/* 					var strtext = [];*/
/* 					for(var i in objs) {*/
/* 						strtext.push(objs[i].id);*/
/* 					}*/
/* */
/* 					var time = $('#templateCon input').eq(0).val();*/
/* //					time = new Date(time) / 1000;*/
/* 					var time1 = $('#templateCon input').eq(1).val();*/
/* 					var data = {*/
/* 						'id':listData['tkm_plan_out.id'],*/
/* 						'pian': $('#templateCon select').eq(1).val(),*/
/* 						'title': $('#templateCon select').eq(2).val(),*/
/* 						'remark': $('#templateCon textarea').val().trim(),*/
/* 						'members': strtext.join(','),*/
/* 						'plan_start_time': time,*/
/* 						'plan_end_time': time1,*/
/* 						'remind_type': $('#templateCon select')[2].selectedIndex,*/
/* 						'status' :$('#templateCon').find('[field=status]').val(),*/
/* 						'remind_way':$('#templateCon').find('[field=remind_way]').val()*/
/* 					};*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_plan/add_plan_out',*/
/* 						method: 'post',*/
/* 						data: data,*/
/* 						success: function(res) {*/
/* 							cs.close();*/
/* 							cs.popErrorMsg('编辑成功');*/
/* 							getList();*/
/* 						}*/
/* 					});*/
/* 				});*/
/* 			})*/
/* 			*/
/* */
/* 			// $('[data-rel=tooltip]').tooltip();公司名称图标提示*/
/* 			//			$('._edit').unbind('click').click(function(){*/
/* 			//				var index = $(this).parents('tr').index();*/
/* 			//				var _data = data[index];*/
/* 			//				var id = $(this).parents('tr').attr('data-id');*/
/* 			//*/
/* 			//				$('#feedBack').show();*/
/* 			//*/
/* 			//				$('#feedBack [field]').val(_data['tkm_plan_out.status']);*/
/* 			//*/
/* 			//				$('#feedBack').on('click','.close_label,.hold',function(){*/
/* 			//					var it = $(this);*/
/* 			//					if(it.hasClass('hold')){*/
/* 			//						var postdata = {*/
/* 			//							id:id,*/
/* 			//							status:$('#feedBack [field]').val()*/
/* 			//						};*/
/* 			//						ykp.doAjax({*/
/* 			//							url:'/api/api_plan/change_plan_status',*/
/* 			//							method:'post',*/
/* 			//							data:postdata,*/
/* 			//							success:function(res){*/
/* 			//								ykp.prompt('修改完成状态成功');*/
/* 			//								getList();*/
/* 			//								$('#feedBack').hide();*/
/* 			//							}*/
/* 			//						})*/
/* 			//					}*/
/* 			//					if(it.hasClass('close_label')){*/
/* 			//						$('#feedBack').hide();*/
/* 			//					}*/
/* 			//				});*/
/* 			//			});*/
/* */
/* 			$('._remove').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				layui.use('layer', function() {*/
/* 					var layer = layui.layer;*/
/* 					layer.confirm('真的删除行么', function(index) {*/
/* 						ykp.doAjax({*/
/* 							url: '/api/api_plan/del_plan_out',*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								id: id*/
/* 							},*/
/* 							success: function(res) {*/
/* 								ykp.prompt('删除成功!');*/
/* 								getList();*/
/* 								layer.closeAll();*/
/* 							}*/
/* 						})*/
/* 					})*/
/* */
/* 				})*/
/* 			})*/
/* 			deleteSchedule();*/
/* 		}*/
/* */
/* 		//删除日程*/
/* 		function deleteSchedule() {*/
/* */
/* 			$('#dataList ._remove').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				layui.use('layer', function() {*/
/* 					var layer = layui.layer;*/
/* 					layer.confirm('确认删除吗？', function(index) {*/
/* 						ykp.doAjax({*/
/* 							url: '/api/api_plan/del_plan_out',*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								id:id*/
/* 							},*/
/* 							success: function() {*/
/* 								ykp.prompt('删除成功');*/
/* 								layer.closeAll()*/
/* 								getList();*/
/* 							}*/
/* 						});*/
/* 					})*/
/* 					*/
/* 				});*/
/* 			})*/
/* 		}*/
/* 		//获取所有区域，切换区域，切换仓位*/
/* 		//ele1 区域节点*/
/* 		//ele2 仓位节点*/
/* 		function getAllAreasAndChangeAreaToChangePositions(ele1, ele2, position, data) {*/
/* 			var _data = data;*/
/* 			console.log(data);*/
/* 			//获取所有区域*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_accountancies/get_all_pos',*/
/* 				method: 'get',*/
/* 				data: {*/
/* */
/* 				},*/
/* 				async:false,*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					//区域信息html*/
/* 					var area_html = [];*/
/* 					for(var i in data) {*/
/* 						area_html.push('<option value="' + i + '">' + i + '</option>');*/
/* 					}					*/
/* 					ele1.html(area_html.join('')).select2();*/
/* 					var posId = "";*/
/* 					//切换区域，切换仓位*/
/* 					ele1.change(function() {*/
/* 						//清空仓位信息*/
/* 						ele2.html('<option value="">请选择仓位</option>').select2();*/
/* */
/* 						//区域*/
/* 						var area = $(this).val();*/
/* */
/* 						//如果区域不存在，则返回*/
/* 						if(!area) {*/
/* 							return;*/
/* 						}*/
/* */
/* 						var _data = data[area];*/
/* 						//仓位信息html*/
/* 						var position_html = [];*/
/* 						for(var i in _data) {*/
/* 							position_html.push('<option value="' + _data[i]['id'] + '">' + _data[i]['name'] + '</option>');*/
/* 							posId = _data[i]['id'];*/
/* 						}*/
/* 						ele2.append(position_html.join(''));*/
/* 					});*/
/* */
/* 					//如果存在了仓位信息，就默认选中*/
/*  					if(position) {*/
/* 						for(var i in data) {*/
/* 							for(var j in data[i]) {*/
/* 								if(position == data[i][j]['id']) {*/
/* 									ele1.val(i).trigger('change');*/
/* 									ele2.val(position).trigger('change');*/
/* 									break;*/
/* 								}*/
/* 							}*/
/* 						}*/
/* 					} else {*/
/* 						for(var i in data) {*/
/* 							//ele1.val(i).trigger('change');*/
/* 							//ele2.val().trigger('change');*/
/* 						}*/
/* 					} */
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//自定义列表*/
/* 		cs.custorm_check('#dynamic-table', '#dataList', false);*/
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
/* 		//高级搜索*/
/* 		// $('#heightsearch').click(function() {*/
/* 		// 	if($(this).hasClass('active')) {*/
/* 		// 		$(this).removeClass('active');*/
/* 		// 		$("#heightsearch1").animate({*/
/* 		// 			height: "0px"*/
/* 		// 		});*/
/* 		// 	} else {*/
/* 		// 		$("#heightsearch1").animate({*/
/* 		// 			height: "50px"*/
/* 		// 		});*/
/* 		// 		$(this).attr('class', 'btn btn-info btn-sm active')*/
/* 		// 	}*/
/* */
/* 		// })*/
/* */
/* 		//时间插件*/
/* 		// if(!ace.vars['old_ie']) {*/
/* 		// 	$('#date-timepicker1').datetimepicker({*/
/* 		// 		//format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds*/
/* 		// 		icons: {*/
/* 		// 			time: 'fa fa-clock-o',*/
/* 		// 			date: 'fa fa-calendar',*/
/* 		// 			up: 'fa fa-chevron-up',*/
/* 		// 			down: 'fa fa-chevron-down',*/
/* 		// 			previous: 'fa fa-chevron-left',*/
/* 		// 			next: 'fa fa-chevron-right',*/
/* 		// 			today: 'fa fa-arrows ',*/
/* 		// 			clear: 'fa fa-trash',*/
/* 		// 			close: 'fa fa-times'*/
/* 		// 		}*/
/* 		// 	}).next().on(ace.click_event, function() {*/
/* 		// 		$(this).prev().focus();*/
/* 		// 	});*/
/* 		// }*/
/* 	})*/
/* </script>*/
