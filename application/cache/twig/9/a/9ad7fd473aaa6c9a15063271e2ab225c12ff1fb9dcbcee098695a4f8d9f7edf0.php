<?php

/* admin/customerDetail.html */
class __TwigTemplate_e0d98e44a8148f408bd57865cedae6e8e99face950293f8f5aa254cc17150cfa extends Twig_Template
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
\t#templateCon tbody tr td:before {
\t\tcontent: none !important;
\t}
\t/*编辑客户详情信息  table表样式*/
\t
\t#templateCon table .leader_info td {
\t\tbackground-color: #fff !important;
\t\tborder: none !important;
\t\tborder-top: none;
\t\ttext-align: left; 
\t\theight: 35px;
\t}
\t/*#templateCon .demo1 table{
\t\tborder:none;
\t}
\t#templateCon .demo1 td{
\t\tborder:none;
\t}*/
\t#showBox td {
\t\tborder:  none;
\t\t
\t}
\t.border-table, table.border-table tbody td {
\t\tborder: 1px solid #eee !important;
\t}

\t.border-table thead,table.border-table tbody tr.linesss{
\t\tborder-bottom: 1px solid #eee !important;
\t}

\t.border-table .tr-hover {
\t\tbackground: rgba(43, 125, 188, 0.1) !important;
\t}
\t.tr-hover td[get_money]{
\t\tbackground-color: transparent !important;
\t}
\t.disitems{position: relative;padding-left: 150px;box-sizing: border-box;mix-height: 35px;}
\t.discontbox{padding-left: 10px;}
\t.disitems .tit{
\t\tposition: absolute;
\t\tleft:0;
\t\tbackground: #bdd7ee;
\t\twidth: 150px;
\t\theight: 35px;
\t\tline-height: 35px;
\t\ttext-align: center;
\t}
\t#templateCon .basic_message>tr>td{text-align: left !important;}
\t#templateCon .otherItembox .select2-container--default .select2-selection--single .select2-selection__arrow{right: 7px !important;}
\t#templateCon .otherItembox .select2-container{padding-right: 6px;top:-2px;}
\t#templateCon .otherItembox .select2-container--default .select2-selection--single .select2-selection__rendered{line-height: 35px !important;text-align: center !important;}
\t#templateCon .otherItembox .select2-container--default .select2-selection--single{height: 35px !important;border: 1px #bdd7ee solid !important;}
\t#templateCon .sales_stage .acti{background: #ffc000;}
\t/*#templateCon .selling_groups label:last-of-type{margin-right: 6px !important;}*/
\t#templateCon .custom_table tr th, .custom_table tr td{padding: 0;}
\t#templateCon td{padding: 0;}
\t#templateCon .basic_message td{padding: 0 !important;}
\t#templateCon .datepicker table tr td span{width: 21%;height: 25px;line-height: 25px;}
\t#templateCon .bootstrap-datetimepicker-widget table td span{height: 34px;line-height: 34px;text-align: center;}
\t#templateCon .custom_table tr th, .custom_table tr td{min-width: 32px}
\t#templateCon .custom_table tr th{text-align: center !important;}
\t#templateCon .custom_table{overflow: unset !important;}
\t#templateCon .custom_table .dropdown-menu, #templateCon .custom_table .bootstrap-datetimepicker-widget{z-index: 998 !important}
</style>
<div class=\"set_label\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;background: rgba(0,0,0,0.3);\">
\t<div style=\"width:700px;margin:39px auto;z-index:1060;background:#fff;position:relative;
    box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t<div style=\"padding:15px 10px;text-align:right;border-bottom:1px solid #ddd;\">
\t\t\t<span style=\"float: left;\">设置标签</span>
\t\t\t<a href=\"javascript:;\" class=\"close_label\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t</div>
\t
\t\t<div style=\"padding:0 15px 0 15px;\">
\t\t\t<div class=\"custom_table\" style=\"width:670px;max-height:400px;overflow-y:auto !important;\">
\t\t\t\t<table style=\"width:100%;table-layout:fixed;\">
\t\t\t\t\t<tbody class=\"label_area\">

\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t<button type=\"button\" class=\"btn btn-info btn-sm close_label\">关闭</button>
\t\t\t<button type=\"button\" class=\"btn btn-info btn-sm hold\">保存</button>
\t\t</div>
\t</div>
</div>

<div class=\"set_Sellingperson\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;background: rgba(0,0,0,0.3);\">
\t<div style=\"width:700px;margin:10% auto;z-index:1060;background:#fff;position:relative;
    box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t<div style=\"padding:15px 10px;text-align:right;border-bottom:1px solid #ddd;\">
\t\t\t<span style=\"float: left;\">编辑协作人</span>
\t\t\t<a href=\"javascript:;\" class=\"close_label\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t</div>

\t\t<div style=\"padding:0 15px 0 15px;margin-top: 20px\">
\t\t\t<label>协作人：</label>
\t\t\t<select multiple=\"\" addfield=\"team_id\" class=\"_sellingperson select2 select2-hidden-accessible\" data-placeholder=\"请选择\" style=\"width: 616px;\" tabindex=\"-1\" aria-hidden=\"true\"></select>
\t\t</div>
\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t<button type=\"button\" class=\"btn btn-info btn-sm close_label\">关闭</button>
\t\t\t<button type=\"button\" class=\"btn btn-info btn-sm hold\">保存</button>
\t\t</div>
\t</div>
</div>

<div class=\"edit_popup\" style=\"display:none;\">
\t<div>
\t\t<!--<table style=\"margin-bottom:20px;margin-top:20px;\">
\t\t\t<tr>
\t\t\t\t<td>客户编码</td>
\t\t\t\t<td>
\t\t\t\t\t<input basic disabled style=\"width:153px;\" />
\t\t\t\t</td>
\t\t\t\t<td>客户级别</td>
\t\t\t\t<td>
\t\t\t\t\t<select basic field=\"rank\" style=\"width:153px;\">
\t\t\t\t\t\t<option value=\"\"> - - - 请选择 - - - </option>
\t\t\t\t\t\t<option value=\"1\"> A </option>
\t\t\t\t\t\t<option value=\"2\"> B </option>
\t\t\t\t\t\t<option value=\"3\"> C </option>
\t\t\t\t\t\t<option value=\"4\"> D </option>
\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>客户状态</td>
\t\t\t\t<td>
\t\t\t\t\t<select basic field=\"status\" style=\"width:153px;\">
\t\t\t\t\t\t<option value=\"\"> - - - 请选择 - - - </option>
\t\t\t\t\t\t<option value=\"0\"> 未合作 </option>
\t\t\t\t\t\t<option value=\"1\"> 合作中 </option>
\t\t\t\t\t\t<option value=\"2\"> 已解约 </option>
\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t\t<td>最后跟进人</td>
\t\t\t\t<td>
\t\t\t\t\t<input style=\"width:153px;\" follow disabled/>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>最后跟进时间</td>
\t\t\t\t<td>
\t\t\t\t\t<input style=\"width:153px;\" follow disabled/>
\t\t\t\t</td>
\t\t\t\t<td>所属仓位</td>
\t\t\t\t<td>
\t\t\t\t\t<label position style=\"text-align:left;width:115px;\"></label>
\t\t\t\t\t<button class=\"transfer btn btn-info btn-sm\">转移</button>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t</table>-->
\t<!--\t<table style=\"margin-bottom:20px;margin-top:20px;\">
\t\t\t<tr>
\t\t\t\t<td>客户编码</td>
\t\t\t\t<td>
\t\t\t\t\t<input basic disabled style=\"width:153px;\" />
\t\t\t\t</td>
\t\t\t\t<td>客户级别</td>
\t\t\t\t<td>
\t\t\t\t\t<select basic field=\"rank\" style=\"width:153px;\">
\t\t\t\t\t\t<option value=\"\"> - - - 请选择 - - - </option>
\t\t\t\t\t\t<option value=\"1\"> A </option>
\t\t\t\t\t\t<option value=\"2\"> B </option>
\t\t\t\t\t\t<option value=\"3\"> C </option>
\t\t\t\t\t\t<option value=\"4\"> D </option>
\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>客户状态</td>
\t\t\t\t<td>
\t\t\t\t\t<select basic field=\"status\" style=\"width:153px;\">
\t\t\t\t\t\t<option value=\"\"> - - - 请选择 - - - </option>
\t\t\t\t\t\t<option value=\"0\"> 未合作 </option>
\t\t\t\t\t\t<option value=\"1\"> 合作中 </option>
\t\t\t\t\t\t<option value=\"2\"> 已解约 </option>
\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t\t<td>最后跟进人</td>
\t\t\t\t<td>
\t\t\t\t\t<input style=\"width:153px;\" follow disabled/>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>最后跟进时间</td>
\t\t\t\t<td>
\t\t\t\t\t<input style=\"width:153px;\" follow disabled/>
\t\t\t\t</td>
\t\t\t\t<td>所属仓位</td>
\t\t\t\t<td>
\t\t\t\t\t<label position style=\"text-align:left;width:115px;\"></label>
\t\t\t\t\t<button class=\"transfer btn btn-info btn-sm\">转移</button>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t</table>-->
\t\t<div class=\"transfer_content\" style=\";\">
\t\t\t<p style=\"font-size: 16px;font-weight: bold;margin-bottom:15px;\">请选择转移位置：</p>
\t\t\t<div style=\"margin-top:10px;\">
\t\t\t\t<label style=\"width:97px;\"><i class=\"reqired_label\">*</i>区域名称： </label>
\t\t\t\t<select syllable=\"area\" style=\"width: 180px !important;\">
\t\t\t\t\t<option value=\"\">请选择区域</option>
\t\t\t\t</select>
\t\t\t\t<label style=\"width:70px;\"><i class=\"reqired_label\">*</i>仓位： </label>
\t\t\t\t<select syllable=\"position\" style=\"width: 180px !important;\">
\t\t\t\t\t<option value=\"\">请选择仓位</option>
\t\t\t\t</select>
\t\t\t\t<!-- <label style=\"width:70px\">仓位名称：</label>
\t\t\t\t<select class=\"pos_name\" field=\"pos_id\">
\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t</select> -->
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<table style=\"border:none !important;\">
\t\t\t\t\t<tbody class=\"leader_info\">

\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div style=\"margin-top:10px;\">
\t\t\t\t<label style=\"width:70px;float:left;\"><i class=\"reqired_label\">*</i>转移原因：</label>
\t\t\t\t<textarea syllable_1=\"reason\" style=\"width:calc(100% - 75px);margin-left:5px;padding:5px;\"></textarea>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"popup_button\">
\t\t\t<button class=\"sure_button edit_sure\" style=\"padding:5px;\">保存</button>
\t\t</div>
\t</div>
</div>

<div class=\"popup_detail\" style=\"display:none\">
\t<div data-id=\"\" id=\"custom_id\" style=\"width:1200px;\">
\t\t<div style=\"margin-top:20px;width:100%\">
\t\t\t<div class=\"custom_table\" id=\"custom_table_test\">
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>客户分组</th>
\t\t\t\t\t\t\t<th>跟进人</th>
\t\t\t\t\t\t\t<th>下次跟进时间</th>
\t\t\t\t\t\t\t<th>客户级别</th>
\t\t\t\t\t\t\t<th>合作状态</th>
\t\t\t\t\t\t\t<th>仓位编码</th>
\t\t\t\t\t\t\t<th>客户地图</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody class=\"basic_message\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"noxshide\" style=\"text-align: center;width: 160px\" >
\t\t\t\t\t\t\t\t<select style=\"width: 150px;text-align: center !important;\" class=\"customerGrupe select2-hidden-accessible\" tabindex=\"-1\" id=\"label_cat\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t<option value=\"\">请选择客户分组</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"folman\" style=\"text-align: center !important;;width: 160px\" ></td>
\t\t\t\t\t\t\t<td class=\"noxshide\" style=\"text-align: center;width: 160px\" follow>
\t\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width:130px;\">
\t\t\t\t\t\t\t\t\t<input class=\"date-timepicker22 required _next_time\" style=\"height: 30px; width: 125px;padding-left:5px;\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:25px;height:30px;\">
                   \t\t\t \t\t<i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:7px;\"></i>
                \t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td style=\"text-align: center;width: 160px\" basic>
\t\t\t\t\t\t\t\t<select style=\"width: 150px;text-align: center !important;\" class=\"customerlevel\">
\t\t\t\t\t\t\t\t\t<option value=\"\">请选择客户级别</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">A</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">B</option>
\t\t\t\t\t\t\t\t\t<option value=\"3\">C</option>
\t\t\t\t\t\t\t\t\t<option value=\"4\">D</option>
\t\t\t\t\t\t\t\t</select></td>
\t\t\t\t\t\t\t<td style=\"text-align: center !important;;width: 160px\" basic></td>
\t\t\t\t\t\t\t<td style=\"text-align: center !important;width: 160px\" position></td>
\t\t\t\t\t\t\t<td style=\"text-align: center !important;\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"js-map\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"otherItembox\">
\t\t\t\t\t<div class=\"disitems\">
\t\t\t\t\t\t<div class=\"tit\">客户标签</div>
\t\t\t\t\t\t<div class=\"customer_label discontbox clear\">
\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"addCustomerLabel fl\" title=\"添加客户标签\" style=\"border:1px #bdd7ee solid;border-radius:0;width: 150px;padding: 0;height: 35px;line-height:35px;text-align: center;margin-bottom: 5px;display: inline-block;\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"disitems\">
\t\t\t\t\t\t<div class=\"tit\">销售阶段</div>
\t\t\t\t\t\t<div class=\"discontbox sales_stage\">
\t\t\t\t\t\t\t<label class=\"\" style=\"cursor:pointer;border:1px #bdd7ee solid;margin-right: 10px;border-radius:0;width: 150px;padding: 0;height: 35px;line-height:35px;text-align: center;margin-bottom: 5px;\">
\t\t\t\t\t\t\t\t新入库
\t\t\t\t\t\t\t</label><label class=\"\" style=\"cursor:pointer;border:1px #bdd7ee solid;margin-right: 10px;border-radius:0;width: 150px;padding: 0;height: 35px;line-height:35px;text-align: center;margin-bottom: 5px;\">
\t\t\t\t\t\t\t\t初步沟通
\t\t\t\t\t\t\t</label><label class=\"\" style=\"cursor:pointer;border:1px #bdd7ee solid;margin-right: 10px;border-radius:0;width: 150px;padding: 0;height: 35px;line-height:35px;text-align: center;margin-bottom: 5px;\">
\t\t\t\t\t\t\t\t判断分析
\t\t\t\t\t\t\t</label><label class=\"\" style=\"cursor:pointer;border:1px #bdd7ee solid;margin-right: 10px;border-radius:0;width: 150px;padding: 0;height: 35px;line-height:35px;text-align: center;margin-bottom: 5px;\">
\t\t\t\t\t\t\t\t上门面谈
\t\t\t\t\t\t\t</label><label class=\"\" style=\"cursor:pointer;border:1px #bdd7ee solid;margin-right: 10px;border-radius:0;width: 150px;padding: 0;height: 35px;line-height:35px;text-align: center;margin-bottom: 5px;\">
\t\t\t\t\t\t\t\t合同
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"disitems\">
\t\t\t\t\t\t<div class=\"tit\">销售团队</div>
\t\t\t\t\t\t<div class=\"discontbox selling_groups clear\">
\t\t\t\t\t\t\t<select style=\"border:1px #bdd7ee solid !important;border-radius:0 !important;width: 156px !important;padding: 0 !important;height: 35px !important;line-height:35px !important;text-align: center;margin-bottom: 5px !important; \" class=\"principal\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<option value=\"\">负责人</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"addSellingperson\" title=\"添加协作人\" style=\"border:1px #bdd7ee solid;border-radius:0;width: 150px;padding: 0;height: 35px;line-height:35px;text-align: center;margin-bottom: 5px;display: inline-block;\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"layui-tab\" lay-filter=\"demo\">
\t\t\t<ul class=\"layui-tab-title\">
\t\t\t\t<li class=\"layui-this\">摘要</li>
\t\t\t\t<li>信息</li>
\t\t\t\t<li>联系人</li>
\t\t\t\t<li>商机</li>
\t\t\t\t<li>拜访</li>
\t\t\t\t<li>服务</li>
\t\t\t\t<li lay-id=\"td\">团队</li>
\t\t\t\t<li>合同</li>
\t\t\t\t<li>收款</li>
\t\t\t\t<li>支出</li>
\t\t\t\t<li>开票</li>
\t\t\t\t<li>物品</li>
\t\t\t\t<li>附件</li>
\t\t\t\t<li>修改记录</li>
\t\t\t</ul>
\t\t\t<div class=\"layui-tab-content\">
\t\t\t\t<!--摘要-->
\t\t\t\t<div class=\"layui-tab-item layui-show\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<!--<div>
\t\t\t\t\t\t\t<p style=\"margin:0 auto;padding-bottom:20px;padding:10px;background-color: #ccecff;text-align:center;font-size:16px;\">待办任务</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"wait_finish_task\" style=\"display:none;\">
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"wait_finish_task\">
\t\t\t\t\t\t\t\t<div style=\"border:1px solid #ddd;text-align:center;height: 40px;line-height: 40px;\">
\t\t\t\t\t\t\t\t\t暂无数据
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>-->
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<div style=\"margin-top:30px;\">
\t\t\t\t\t\t\t<p style=\"margin:0 auto;padding:10px;background-color: #ccecff;text-align:center;font-size:16px;\">新建联系记录</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t\t<textarea id=\"contact_msg\" contact-field=\"contact_msg\" placeholder=\"新建一条联系记录\"  style=\"background-color:#c5e0f1;color:#333;border:none;width:100%;padding:5px;height:65px;resize:none;    margin-top: 5px;\"></textarea>
\t\t\t\t\t\t\t<div style=\"width:100%;\">
\t\t\t\t\t\t\t\t<div style=\"padding: 10px 0\">
\t\t\t\t\t\t\t\t\t<div class=\"contact_type\" style=\"float:left;color: #333; border-top: 1px #ccc solid;border-bottom: 1px #ccc solid;border-left:1px #ccc solid;margin-right: 6%\">
\t\t\t\t\t\t\t\t\t\t<i style=\"display:block;float:left;font-style: normal;padding: 5px 10px;background: #ccecff;\">记录类型</i>
\t\t\t\t\t\t\t\t\t\t<span data-val=\"4\" style=\"cursor:pointer;float:left;display:block;padding: 5px 10px;border-right:1px #ccc solid\">线索</span>
\t\t\t\t\t\t\t\t\t\t<span data-val=\"5\" style=\"cursor:pointer;display:block;float:left;padding: 5px 10px;border-right:1px #ccc solid\">商机</span>
\t\t\t\t\t\t\t\t\t\t<span data-val=\"6\" style=\"cursor:pointer;display:block;float:left;padding: 5px 10px;border-right:1px #ccc solid\">拜访</span>
\t\t\t\t\t\t\t\t\t\t<span data-val=\"3\" style=\"cursor:pointer;display:block;float:left;padding: 5px 10px;border-right:1px #ccc solid\">收款</span>
\t\t\t\t\t\t\t\t\t\t<span data-val=\"1\" style=\"cursor:pointer;display:block;float:left;padding: 5px 10px;border-right:1px #ccc solid\">售后</span>
\t\t\t\t\t\t\t\t\t\t<span data-val=\"2\" style=\"cursor:pointer;display:block;float:left;padding: 5px 10px;border-right:1px #ccc solid\">投诉</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_way\" style=\"float:left;color: #333; border-top: 1px #ccc solid;border-bottom: 1px #ccc solid;border-left:1px #ccc solid;margin-right: 6%\">
\t\t\t\t\t\t\t\t\t\t<i style=\"display:block;font-style: normal;float:left;padding: 5px 10px;background: #ccecff;\">联系方式</i>
\t\t\t\t\t\t\t\t\t\t<span data-val=\"1\" style=\"cursor:pointer;display:block;float:left;padding: 5px 10px;border-right:1px #ccc solid\">电话</span>
\t\t\t\t\t\t\t\t\t\t<span data-val=\"5\" style=\"cursor:pointer;display:block;float:left;padding: 5px 10px;border-right:1px #ccc solid\">上门</span>
\t\t\t\t\t\t\t\t\t\t<span data-val=\"6\" style=\"cursor:pointer;display:block;float:left;padding: 5px 10px;border-right:1px #ccc solid\">短信</span>
\t\t\t\t\t\t\t\t\t\t<span data-val=\"2\" style=\"cursor:pointer;display:block;float:left;padding: 5px 10px;border-right:1px #ccc solid\">微信</span>
\t\t\t\t\t\t\t\t\t\t<span data-val=\"3\" style=\"cursor:pointer;display:block;float:left;padding: 6.5px 10px;border-right:1px #ccc solid\">QQ</span>
\t\t\t\t\t\t\t\t\t\t<span data-val=\"4\" style=\"cursor:pointer;display:block;float:left;padding: 5px 10px;border-right:1px #ccc solid\">邮件</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!--<select style=\"width:180px;\" contact-field=\"contact_type\">
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>售后服务</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"2\">售前服务</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<select style=\"width:59px;margin-top:5px;margin-left: 6px;\" contact-field=\"contact_way\">
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>电话</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"2\">微信</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"3\">QQ</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"4\">邮箱</option>
\t\t\t\t\t\t\t\t\t</select>-->

\t\t\t\t\t\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
                                            <input class=\"date-timepicker1 required\" msg=\"联系时间不能为空\" style=\"height: 30px; width: 150px;padding-left:8px;\" contact-field=\"log_time\">
                                            <span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                                                <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                            </span>
                                        </div>-->
\t\t\t\t\t\t\t\t\t<span style=\"display:inline-block;padding:6px 16px;color:#fff;margin-left:5px;background-color:#4ebefd;cursor:pointer;\" contentAuthority=\"252\" class=\"new_contactRecord\">发送</span>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<div style=\"margin-top:30px;\">
\t\t\t\t\t\t\t<p style=\"margin:0 auto;padding:10px;background-color: #ccecff;text-align:center;font-size:16px;\">最近联系记录</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"recent_contact_record\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t                    <div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" id=\"zynum\"></div>
\t\t                    <!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t                    <div id=\"zypageBar\" class=\"pagination\"></div>
\t\t                    <div align=\"right\" style=\"float: right;  width: 10%;\">
\t\t                        <select style=\"width: 100px;\" id=\"changePageNum\">
\t\t                            <option value=\"10\">每页10条</option>
\t\t                            <option value=\"20\">每页20条</option>
\t\t                            <option value=\"50\">每页50条</option>
\t\t                            <option value=\"100\">每页100条</option>
\t\t                            <option value=\"200\">每页200条</option>
\t\t                        </select>
\t\t                    </div>
\t\t                </div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!--信息-->
\t\t\t\t<div class=\"layui-tab-item\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<table style=\"border:1px solid #ddd;border-collapse:collapse;\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">公司全称</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"name\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">统一社会信用代码</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"social_credit_code\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">客户编码</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"customer_num\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">仓位编码</td>
\t\t\t\t\t\t\t\t\t<td pos-id></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<!--<td class=\"unite-label\">营业执照号</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"license_no\"></td>-->
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">客户来源</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"source\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">法人证件号</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"corporation_card\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">法人姓名</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"corporation\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">注册日期</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"stablish_time\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">添加日期</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"create_at\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">注册资金</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"capital\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">省市区</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"area\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">详细地址</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"address\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">客户级别</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"rank\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">经营范围</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"range\" colspan=\"3\" style=\"white-space:normal !important; width: 100% !important;\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">联系人</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"contacts\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">手机</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"phone\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">公司规模</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"scale\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">行业</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"industry\"></td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">备注</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"remark\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\"></td>
\t\t\t\t\t\t\t\t\t<td  ></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"\">
\t\t\t\t\t\t\t<table style=\"border:1px solid #ddd;border-collapse:collapse;\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">税务类型</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"tax_type\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">有无基本户</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"basic\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">纳税识别号</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"ratepaying_no\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">税务备注</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"remark\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">国税编码</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"state_tax_no\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">国税密码</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"\" >*****</td><!--state_tax_pass-->
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">国税ca证书</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"gca\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">地税编码</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"local_tax_no\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">地税密码</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"\">*****</td>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">地税ca证书</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"dca\" colspan=\"3\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<!--<tr>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">工商编码</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"industry_no\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">工商密码</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"\"></td>  
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">工商ca证书</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"ica\" colspan=\"3\"></td>
\t\t\t\t\t\t\t\t</tr>-->
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"margin-top:20px;\" class=\"ts\">
\t\t\t\t\t\t\t<table style=\"border:1px solid #ddd;border-collapse:collapse;\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\" >客户状态</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"status\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">最后修改人</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"update_by\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">所属公海</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"type\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">失效原因</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"reason\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">失效操作人</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"voiduser\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">失效人所在部门</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"voiddept\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">创建人</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"create_id\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"unite-label\">创建人所在部门</td>
\t\t\t\t\t\t\t\t\t<td data-title=\"create_dep\"></td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!--联系人-->
\t\t\t\t<div class=\"layui-tab-item\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>企业数</th>
\t\t\t\t\t\t\t\t\t\t<th>姓名</th>
\t\t\t\t\t\t\t\t\t\t<th>性别</th>
\t\t\t\t\t\t\t\t\t\t<th>手机</th>
\t\t\t\t\t\t\t\t\t\t<th>电话</th>
\t\t\t\t\t\t\t\t\t\t<th>QQ</th>
\t\t\t\t\t\t\t\t\t\t<th>关键决策人</th>
\t\t\t\t\t\t\t\t\t\t<th>主要联系人</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<!-- <tr>
\t\t\t\t\t\t\t\t\t\t<td>李四</td>
\t\t\t\t\t\t\t\t\t\t\t<td>男</td>
\t\t\t\t\t\t\t\t\t\t\t<td>李四</td>
\t\t\t\t\t\t\t\t\t\t\t<td>18926546552</td>
\t\t\t\t\t\t\t\t\t\t\t<td>0755-86526354</td>
\t\t\t\t\t\t\t\t\t\t\t<td>895564215</td>
\t\t\t\t\t\t\t\t\t\t\t<td>李李</td>
\t\t\t\t\t\t\t\t\t</tr> -->
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left;\" id=\"lxnum\"></div>
\t\t\t\t\t\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t\t\t\t\t\t<div id=\"lxpageBar\" class=\"pagination\"></div>
\t\t\t\t\t\t\t<div align=\"right\" style=\"float: right;\">
\t\t\t\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!--商机-->
\t\t\t\t<div class=\"layui-tab-item\">

\t\t\t\t\t<div style=\"\" class=\"custom_table\">
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th data-num=\"1\">商机名称</th>
\t\t\t\t\t\t\t\t<th data-num=\"2\">企业名称</th>
\t\t\t\t\t\t\t\t<th data-num=\"3\">预计成交日期</th>
\t\t\t\t\t\t\t\t<th data-num=\"4\" style=\"text-align: right !important;\">商机金额(元)</th>
\t\t\t\t\t\t\t\t<th data-num=\"5\">商机状态</th>
\t\t\t\t\t\t\t\t<th data-num=\"6\">备注</th>
\t\t\t\t\t\t\t\t<th data-num=\"7\">签单可能性</th>
\t\t\t\t\t\t\t\t<th data-num=\"8\">商机来源</th>
\t\t\t\t\t\t\t\t<th data-num=\"9\">负责人</th>
\t\t\t\t\t\t\t\t<th data-num=\"10\">创建人</th>
\t\t\t\t\t\t\t\t<th data-num=\"11\">创建时间</th>
\t\t\t\t\t\t\t\t<th data-num=\"12\">最后修改人</th>
\t\t\t\t\t\t\t\t<th data-num=\"13\">最后修改时间</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<!--  <tr>
                                <td>牧牛网络</td>
                                <td>于颖</td>
                                <td>于颖</td>
                                <td>注册商标</td>
                                <td></td>
                                <td>2017/8/14</td>
                                <td>执行中</td>
                                <td>1000</td>
                                <td>1000</td>
                                <td>1000</td>
                                <td>1000</td>
                            </tr> -->
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left;\" id=\"sjnum\"></div>
\t\t\t\t\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t\t\t\t\t<div id=\"sjpageBar\" class=\"pagination\"></div>
\t\t\t\t\t\t<div align=\"right\" style=\"float: right;\">
\t\t\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!--拜访-->
\t\t\t\t<div class=\"layui-tab-item\">

\t\t\t\t\t<div style=\"\" class=\"custom_table\">
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th data-num=\"1\">拜访编号</th>
\t\t\t\t\t\t\t\t<th data-num=\"2\">企业名称</th>
\t\t\t\t\t\t\t\t<th data-num=\"3\">拜访主题</th>
\t\t\t\t\t\t\t\t<th data-num=\"4\">服务项目</th>
\t\t\t\t\t\t\t\t<th data-num=\"5\">拜访详情</th>
\t\t\t\t\t\t\t\t<th data-num=\"7\">负责人</th>
\t\t\t\t\t\t\t\t<th data-num=\"11\">状态</th>
\t\t\t\t\t\t\t\t<th data-num=\"6\">协访人员</th>
\t\t\t\t\t\t\t\t<th data-num=\"12\">创建人</th>
\t\t\t\t\t\t\t\t<th data-num=\"13\">创建时间</th>
\t\t\t\t\t\t\t\t<th data-num=\"14\">最后修改时间</th>
\t\t\t\t\t\t\t\t<th data-num=\"15\">最后修改人</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<!--  <tr>
                                <td>牧牛网络</td>
                                <td>于颖</td>
                                <td>于颖</td>
                                <td>注册商标</td>
                                <td>无</td>
                                <td>2017/8/14</td>
                                <td>执行中</td>
                                <td>1000</td>
                                <td>1000</td>
                                <td>1000</td>
                                <td>1000</td>
                            </tr> -->
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left;\" id=\"bfnum\"></div>
\t\t\t\t\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t\t\t\t\t<div id=\"bfpageBar\" class=\"pagination\"></div>
\t\t\t\t\t\t<div align=\"right\" style=\"float: right;\">
\t\t\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!--服务-->
\t\t\t\t<div class=\"layui-tab-item\">

\t\t\t\t</div>
\t\t\t\t<!--团队-->
\t\t\t\t<div class=\"layui-tab-item\">

\t\t\t\t</div>
\t\t\t\t<!--合同-->
\t\t\t\t<div class=\"layui-tab-item\">

\t\t\t\t</div>
\t\t\t\t<!--收款-->
\t\t\t\t<div class=\"layui-tab-item\">
\t\t\t\t\t
\t\t\t\t\t<div style=\"\" class=\"custom_table\">
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th data-num=\"1\">收款编号</th>
\t\t\t\t\t\t\t\t\t<th data-num=\"2\">企业名称</th>
\t\t\t\t\t\t\t\t\t<th data-num=\"3\">订单编号</th>
\t\t\t\t\t\t\t\t\t<th data-num=\"4\">收款项目</th>
\t\t\t\t\t\t\t\t\t<th data-num=\"5\">状态</th>
\t\t\t\t\t\t\t\t\t<th data-num=\"6\">审批回复</th>
\t\t\t\t\t\t\t\t\t<th data-num=\"7\">收款日期</th>
\t\t\t\t\t\t\t\t\t<th data-num=\"8\">收款总额</th>
\t\t\t\t\t\t\t\t\t<th data-num=\"9\">收款方式</th>
\t\t\t\t\t\t\t\t\t<th data-num=\"10\">收款账户</th>
\t\t\t\t\t\t\t\t\t<th data-num=\"11\">收款人</th>
\t\t\t\t\t\t\t\t\t<th data-num=\"12\">备注</th>
\t\t\t\t\t\t\t\t\t<th data-num=\"13\">创建人</th>
\t\t\t\t\t\t\t\t\t<th data-num=\"14\">创建时间</th>
\t\t\t\t\t\t\t\t\t<th data-num=\"15\">审批人</th>
\t\t\t\t\t\t\t\t\t<th data-num=\"16\">审批时间</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<!--  <tr>
\t\t                            <td>牧牛网络</td>
\t\t                            <td>于颖</td>
\t\t                            <td>于颖</td>
\t\t                            <td>注册商标</td>
\t\t                            <td>无</td>
\t\t                            <td>2017/8/14</td>
\t\t                            <td>执行中</td>
\t\t                            <td>1000</td>
\t\t                            <td>1000</td>
\t\t                            <td>1000</td>
\t\t                            <td>1000</td>
\t\t                        </tr> -->
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left;\" id=\"shouknum\"></div>
\t\t\t\t\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t\t\t\t\t<div id=\"shoukpageBar\" class=\"pagination\"></div>
\t\t\t\t\t\t<div align=\"right\" style=\"float: right;\">
\t\t\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--支出-->
\t\t\t\t<div class=\"layui-tab-item\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<table class=\"custom_table\">
\t\t\t\t\t\t\t<thead class=\"dynamic-table\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>支出编号</th>
\t\t\t\t\t\t\t\t\t<th>订单编号</th>
\t\t\t\t\t\t\t\t\t<th>状态</th>
\t\t\t\t\t\t\t\t\t<th>支出日期</th>
\t\t\t\t\t\t\t\t\t<th>支出金额(元)</th>
\t\t\t\t\t\t\t\t\t<th>支付类别</th>
\t\t\t\t\t\t\t\t\t<th>支付方式</th>
\t\t\t\t\t\t\t\t\t<th>支付账户</th>
\t\t\t\t\t\t\t\t\t<th>负责人</th>
\t\t\t\t\t\t\t\t\t<th>备注</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<!-- <tr>
\t\t\t\t\t\t\t\t\t<td>000</td>
\t\t\t\t\t\t\t\t\t\t<td>李四</td>
\t\t\t\t\t\t\t\t\t\t<td>001</td>
\t\t\t\t\t\t\t\t\t\t<td>好</td>
\t\t\t\t\t\t\t\t\t\t<td>0755-86526354</td>
\t\t\t\t\t\t\t\t\t\t<td>895564215</td>
\t\t\t\t\t\t\t\t\t\t<td>现金</td>
\t\t\t\t\t\t\t\t\t\t<td>45646</td>
\t\t\t\t\t\t\t\t\t\t<td>李李</td>
\t\t\t\t\t\t\t\t\t\t<td>李李</td>
\t\t\t\t\t\t\t\t</tr> -->
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left;\" id=\"zcnum\"></div>
\t\t\t\t\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t\t\t\t\t<div id=\"zcpageBar\" class=\"pagination\"></div>
\t\t\t\t\t\t<div align=\"right\" style=\"float: right;\">
\t\t\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--开票-->
\t\t\t\t<div class=\"layui-tab-item\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<table class=\"custom_table\">
\t\t\t\t\t\t\t<thead class=\"dynamic-table\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>开票申请号</th>
\t\t\t\t\t\t\t\t\t<th>客户名称</th>
\t\t\t\t\t\t\t\t\t<th>订单编号</th>
\t\t\t\t\t\t\t\t\t<th>状态</th>
\t\t\t\t\t\t\t\t\t<th>开票日期</th>
\t\t\t\t\t\t\t\t\t<th>开票金额(元)</th>
\t\t\t\t\t\t\t\t\t<th>开票类型</th>
\t\t\t\t\t\t\t\t\t<th>发票号码</th>
\t\t\t\t\t\t\t\t\t<th>抬头类型</th>
\t\t\t\t\t\t\t\t\t<th>开票抬头</th>
\t\t\t\t\t\t\t\t\t<th>社会统一信用码</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<!-- <tr>
\t\t\t\t\t\t\t\t\t<td>000</td>
\t\t\t\t\t\t\t\t\t<td>李四</td>
\t\t\t\t\t\t\t\t\t<td>001</td>
\t\t\t\t\t\t\t\t\t<td>好</td>
\t\t\t\t\t\t\t\t\t<td>0755-86526354</td>
\t\t\t\t\t\t\t\t\t<td>895564215</td>
\t\t\t\t\t\t\t\t\t<td>现金</td>
\t\t\t\t\t\t\t\t\t<td>45646</td>
\t\t\t\t\t\t\t\t\t<td>李李</td>
\t\t\t\t\t\t\t\t\t<td>李李</td>
\t\t\t\t\t\t\t\t\t<td>李李</td>
\t\t\t\t\t\t\t\t</tr> -->
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left;\" id=\"kpnum\"></div>
\t\t\t\t\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t\t\t\t\t<div id=\"kppageBar\" class=\"pagination\"></div>
\t\t\t\t\t\t<div align=\"right\" style=\"float: right;\">
\t\t\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- 物品 -->
\t\t\t\t<div class=\"layui-tab-item\">
\t\t\t\t\t<div class=\"layui-collapse\" lay-accordion lay-filter=\"demo1\">
\t\t\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t\t\t<h2 class=\"layui-colla-title\">凭证仓</h2>
\t\t\t\t\t\t\t<div class=\"layui-colla-content\" index=\"0\">
\t\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t<!-- <thead>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"thColor ths\">
\t\t\t\t\t\t\t\t\t\t\t\t<th>盘点编码</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>盘点日期</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>仓库名称</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>仓位</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>库存物品</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>库存数量</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>盘点数量</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>盘点差额</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>盘点结果</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>创建人</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>创建时间</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead> -->
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"text-align: center !important;color:#7d7d7d\" colspan=\"30\">暂无数据</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- <div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left;\" class=\"_num\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"pageBar pagination\"></div>
\t\t\t\t\t\t\t\t\t<div align=\"right\" style=\"float: right;\">
\t\t\t\t\t\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t\t\t<h2 class=\"layui-colla-title\">票据仓</h2>
\t\t\t\t\t\t\t<div class=\"layui-colla-content\" index=\"1\">
\t\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t\t<table class=\"dynamic-table\">
\t\t\t\t\t\t\t\t\t\t<!-- <thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th>入库单号</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>入库类型</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>仓库名称</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>经办人</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>入库时间</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>入库物品</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>入库数量</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>创建人</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>创建时间</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead> -->
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"text-align: center !important;color:#7d7d7d\" colspan=\"30\">暂无数据</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<!-- <tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>测试</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>2017-8-2 11:34:28</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>张三</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>测试</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>2017-8-2 11:34:28</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>张三</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>测试</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>2017-8-2 11:34:28</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">编辑</a>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">删除</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr> -->
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- <div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left;\" class=\"_num\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"pageBar pagination\"></div>
\t\t\t\t\t\t\t\t\t<div align=\"right\" style=\"float: right;\">
\t\t\t\t\t\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t\t\t<h2 class=\"layui-colla-title\">证件仓</h2>
\t\t\t\t\t\t\t<div class=\"layui-colla-content\" index=\"2\">
\t\t\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t<!-- <thead>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t\t\t\t\t<th>出库单号</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>出库类型</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>仓库名称</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>经办人</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>出库时间</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>出库物品</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>出库数量</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>创建人</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>创建时间</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead> -->
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"text-align: center !important;color:#7d7d7d\" colspan=\"30\">暂无数据</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- <div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left;\" class=\"_num\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"pageBar pagination\"></div>
\t\t\t\t\t\t\t\t\t<div align=\"right\" style=\"float: right;\">
\t\t\t\t\t\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!--附件-->
\t\t\t\t<div class=\"layui-tab-item\">
\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t<table class=\"dynamic-table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>文档名称</th>
\t\t\t\t\t\t\t\t\t<th>上传时间</th>
\t\t\t\t\t\t\t\t\t<th>上传人</th>
\t\t\t\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<!-- <tr>
\t\t\t\t\t\t\t\t\t<td>测试</td>
\t\t\t\t\t\t\t\t\t<td>2017-8-2 11:34:28</td>
\t\t\t\t\t\t\t\t\t<td>张三</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">下载</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr> -->
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-tab-item\">
\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left;\" id=\"xgjlnum\"></div>
\t\t\t\t\t\t<div id=\"xgjlpageBar\" class=\"pagination\"></div>
\t\t\t\t\t\t<div align=\"right\" style=\"float: right;\">
\t\t\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--<div class=\"layui-tab-item\">内容12</div>-->
\t\t\t</div>
\t\t</div>
\t</div>

</div>

<div class=\"label_popup\" id=\"addremark\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">

</div>

<div id=\"remark\" style=\"display: none;\">
\t<div style=\"padding: 20px;\">
\t\t<div style=\"margin-top:20px;\">
\t\t\t<h3 style=\"display:block;\">
                \t公开备注
                \t <span style=\"float:right;\"><a class=\"add\" href=\"javascript:;\" title=\"返回\" style=\"padding:4px 10px 5px 10px;background:#428bca;color:#fff;\"><i class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></i></a></span>
           </h3>

\t\t\t<hr>
\t\t</div>
\t\t<div class=\"custom_table\" id=\"custom_table_test\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>备注</th>
\t\t\t\t\t\t<th>完成状态</th>
\t\t\t\t\t\t<th>创建人</th>
\t\t\t\t\t\t<th>创建时间</th>
\t\t\t\t\t\t<th>文件</th>
\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"datalist\">

\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>

\t\t<div style=\"margin-top:20px; margin-top: 50px;\">
\t\t\t<h3 style=\"display:block;\">
                \t私人备注
           </h3>
\t\t\t<hr>
\t\t</div>
\t\t<div class=\"custom_table\" id=\"custom_table_test\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>备注</th>
\t\t\t\t\t\t<th>创建时间</th>
\t\t\t\t\t\t<th>完成状态</th>
\t\t\t\t\t\t<th>文件</th>
\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"datalist2\">

\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>

\t\t<div style=\"margin-top:20px; margin-top: 50px;\">
\t\t\t<h3 style=\"display:block;\">
                \t公开已完成备注
             </h3>
\t\t\t<hr>
\t\t</div>
\t\t<div class=\"custom_table\" id=\"custom_table_test\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>备注</th>
\t\t\t\t\t\t<th>完成状态</th>
\t\t\t\t\t\t<th>创建人</th>
\t\t\t\t\t\t<th>创建时间</th>
\t\t\t\t\t\t<th>完成人</th>
\t\t\t\t\t\t<th>完成时间</th>
\t\t\t\t\t\t<th>文件</th>
\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"datalist3\">

\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>

\t\t<div style=\"margin-top:20px; margin-top: 50px;\">
\t\t\t<h3 style=\"display:block;\">
\t        私人已完成备注
\t    </h3>
\t\t\t<hr>
\t\t</div>
\t\t<div class=\"custom_table\" id=\"custom_table_test\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>备注</th>
\t\t\t\t\t\t<th>完成状态</th>
\t\t\t\t\t\t<th>创建人</th>
\t\t\t\t\t\t<th>创建时间</th>
\t\t\t\t\t\t<th>完成人</th>
\t\t\t\t\t\t<th>完成时间</th>
\t\t\t\t\t\t<th>文件</th>
\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"datalist4\">

\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
</div>
<script src=\"/resource/adimin/assets/js/src/customer.js\"></script>";
    }

    public function getTemplateName()
    {
        return "admin/customerDetail.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	#templateCon tbody tr td:before {*/
/* 		content: none !important;*/
/* 	}*/
/* 	/*编辑客户详情信息  table表样式*//* */
/* 	*/
/* 	#templateCon table .leader_info td {*/
/* 		background-color: #fff !important;*/
/* 		border: none !important;*/
/* 		border-top: none;*/
/* 		text-align: left; */
/* 		height: 35px;*/
/* 	}*/
/* 	/*#templateCon .demo1 table{*/
/* 		border:none;*/
/* 	}*/
/* 	#templateCon .demo1 td{*/
/* 		border:none;*/
/* 	}*//* */
/* 	#showBox td {*/
/* 		border:  none;*/
/* 		*/
/* 	}*/
/* 	.border-table, table.border-table tbody td {*/
/* 		border: 1px solid #eee !important;*/
/* 	}*/
/* */
/* 	.border-table thead,table.border-table tbody tr.linesss{*/
/* 		border-bottom: 1px solid #eee !important;*/
/* 	}*/
/* */
/* 	.border-table .tr-hover {*/
/* 		background: rgba(43, 125, 188, 0.1) !important;*/
/* 	}*/
/* 	.tr-hover td[get_money]{*/
/* 		background-color: transparent !important;*/
/* 	}*/
/* 	.disitems{position: relative;padding-left: 150px;box-sizing: border-box;mix-height: 35px;}*/
/* 	.discontbox{padding-left: 10px;}*/
/* 	.disitems .tit{*/
/* 		position: absolute;*/
/* 		left:0;*/
/* 		background: #bdd7ee;*/
/* 		width: 150px;*/
/* 		height: 35px;*/
/* 		line-height: 35px;*/
/* 		text-align: center;*/
/* 	}*/
/* 	#templateCon .basic_message>tr>td{text-align: left !important;}*/
/* 	#templateCon .otherItembox .select2-container--default .select2-selection--single .select2-selection__arrow{right: 7px !important;}*/
/* 	#templateCon .otherItembox .select2-container{padding-right: 6px;top:-2px;}*/
/* 	#templateCon .otherItembox .select2-container--default .select2-selection--single .select2-selection__rendered{line-height: 35px !important;text-align: center !important;}*/
/* 	#templateCon .otherItembox .select2-container--default .select2-selection--single{height: 35px !important;border: 1px #bdd7ee solid !important;}*/
/* 	#templateCon .sales_stage .acti{background: #ffc000;}*/
/* 	/*#templateCon .selling_groups label:last-of-type{margin-right: 6px !important;}*//* */
/* 	#templateCon .custom_table tr th, .custom_table tr td{padding: 0;}*/
/* 	#templateCon td{padding: 0;}*/
/* 	#templateCon .basic_message td{padding: 0 !important;}*/
/* 	#templateCon .datepicker table tr td span{width: 21%;height: 25px;line-height: 25px;}*/
/* 	#templateCon .bootstrap-datetimepicker-widget table td span{height: 34px;line-height: 34px;text-align: center;}*/
/* 	#templateCon .custom_table tr th, .custom_table tr td{min-width: 32px}*/
/* 	#templateCon .custom_table tr th{text-align: center !important;}*/
/* 	#templateCon .custom_table{overflow: unset !important;}*/
/* 	#templateCon .custom_table .dropdown-menu, #templateCon .custom_table .bootstrap-datetimepicker-widget{z-index: 998 !important}*/
/* </style>*/
/* <div class="set_label" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;background: rgba(0,0,0,0.3);">*/
/* 	<div style="width:700px;margin:39px auto;z-index:1060;background:#fff;position:relative;*/
/*     box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 		<div style="padding:15px 10px;text-align:right;border-bottom:1px solid #ddd;">*/
/* 			<span style="float: left;">设置标签</span>*/
/* 			<a href="javascript:;" class="close_label"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 		</div>*/
/* 	*/
/* 		<div style="padding:0 15px 0 15px;">*/
/* 			<div class="custom_table" style="width:670px;max-height:400px;overflow-y:auto !important;">*/
/* 				<table style="width:100%;table-layout:fixed;">*/
/* 					<tbody class="label_area">*/
/* */
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div style="padding:15px;text-align:right;">*/
/* 			<button type="button" class="btn btn-info btn-sm close_label">关闭</button>*/
/* 			<button type="button" class="btn btn-info btn-sm hold">保存</button>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="set_Sellingperson" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;background: rgba(0,0,0,0.3);">*/
/* 	<div style="width:700px;margin:10% auto;z-index:1060;background:#fff;position:relative;*/
/*     box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 		<div style="padding:15px 10px;text-align:right;border-bottom:1px solid #ddd;">*/
/* 			<span style="float: left;">编辑协作人</span>*/
/* 			<a href="javascript:;" class="close_label"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 		</div>*/
/* */
/* 		<div style="padding:0 15px 0 15px;margin-top: 20px">*/
/* 			<label>协作人：</label>*/
/* 			<select multiple="" addfield="team_id" class="_sellingperson select2 select2-hidden-accessible" data-placeholder="请选择" style="width: 616px;" tabindex="-1" aria-hidden="true"></select>*/
/* 		</div>*/
/* 		<div style="padding:15px;text-align:right;">*/
/* 			<button type="button" class="btn btn-info btn-sm close_label">关闭</button>*/
/* 			<button type="button" class="btn btn-info btn-sm hold">保存</button>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="edit_popup" style="display:none;">*/
/* 	<div>*/
/* 		<!--<table style="margin-bottom:20px;margin-top:20px;">*/
/* 			<tr>*/
/* 				<td>客户编码</td>*/
/* 				<td>*/
/* 					<input basic disabled style="width:153px;" />*/
/* 				</td>*/
/* 				<td>客户级别</td>*/
/* 				<td>*/
/* 					<select basic field="rank" style="width:153px;">*/
/* 						<option value=""> - - - 请选择 - - - </option>*/
/* 						<option value="1"> A </option>*/
/* 						<option value="2"> B </option>*/
/* 						<option value="3"> C </option>*/
/* 						<option value="4"> D </option>*/
/* 					</select>*/
/* 				</td>*/
/* 			</tr>*/
/* */
/* 			<tr>*/
/* 				<td>客户状态</td>*/
/* 				<td>*/
/* 					<select basic field="status" style="width:153px;">*/
/* 						<option value=""> - - - 请选择 - - - </option>*/
/* 						<option value="0"> 未合作 </option>*/
/* 						<option value="1"> 合作中 </option>*/
/* 						<option value="2"> 已解约 </option>*/
/* 					</select>*/
/* 				</td>*/
/* 				<td>最后跟进人</td>*/
/* 				<td>*/
/* 					<input style="width:153px;" follow disabled/>*/
/* 				</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td>最后跟进时间</td>*/
/* 				<td>*/
/* 					<input style="width:153px;" follow disabled/>*/
/* 				</td>*/
/* 				<td>所属仓位</td>*/
/* 				<td>*/
/* 					<label position style="text-align:left;width:115px;"></label>*/
/* 					<button class="transfer btn btn-info btn-sm">转移</button>*/
/* 				</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 		</table>-->*/
/* 	<!--	<table style="margin-bottom:20px;margin-top:20px;">*/
/* 			<tr>*/
/* 				<td>客户编码</td>*/
/* 				<td>*/
/* 					<input basic disabled style="width:153px;" />*/
/* 				</td>*/
/* 				<td>客户级别</td>*/
/* 				<td>*/
/* 					<select basic field="rank" style="width:153px;">*/
/* 						<option value=""> - - - 请选择 - - - </option>*/
/* 						<option value="1"> A </option>*/
/* 						<option value="2"> B </option>*/
/* 						<option value="3"> C </option>*/
/* 						<option value="4"> D </option>*/
/* 					</select>*/
/* 				</td>*/
/* 			</tr>*/
/* */
/* 			<tr>*/
/* 				<td>客户状态</td>*/
/* 				<td>*/
/* 					<select basic field="status" style="width:153px;">*/
/* 						<option value=""> - - - 请选择 - - - </option>*/
/* 						<option value="0"> 未合作 </option>*/
/* 						<option value="1"> 合作中 </option>*/
/* 						<option value="2"> 已解约 </option>*/
/* 					</select>*/
/* 				</td>*/
/* 				<td>最后跟进人</td>*/
/* 				<td>*/
/* 					<input style="width:153px;" follow disabled/>*/
/* 				</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td>最后跟进时间</td>*/
/* 				<td>*/
/* 					<input style="width:153px;" follow disabled/>*/
/* 				</td>*/
/* 				<td>所属仓位</td>*/
/* 				<td>*/
/* 					<label position style="text-align:left;width:115px;"></label>*/
/* 					<button class="transfer btn btn-info btn-sm">转移</button>*/
/* 				</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 		</table>-->*/
/* 		<div class="transfer_content" style=";">*/
/* 			<p style="font-size: 16px;font-weight: bold;margin-bottom:15px;">请选择转移位置：</p>*/
/* 			<div style="margin-top:10px;">*/
/* 				<label style="width:97px;"><i class="reqired_label">*</i>区域名称： </label>*/
/* 				<select syllable="area" style="width: 180px !important;">*/
/* 					<option value="">请选择区域</option>*/
/* 				</select>*/
/* 				<label style="width:70px;"><i class="reqired_label">*</i>仓位： </label>*/
/* 				<select syllable="position" style="width: 180px !important;">*/
/* 					<option value="">请选择仓位</option>*/
/* 				</select>*/
/* 				<!-- <label style="width:70px">仓位名称：</label>*/
/* 				<select class="pos_name" field="pos_id">*/
/* 					<option value="">请选择</option>*/
/* 				</select> -->*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<table style="border:none !important;">*/
/* 					<tbody class="leader_info">*/
/* */
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/* 			<div style="margin-top:10px;">*/
/* 				<label style="width:70px;float:left;"><i class="reqired_label">*</i>转移原因：</label>*/
/* 				<textarea syllable_1="reason" style="width:calc(100% - 75px);margin-left:5px;padding:5px;"></textarea>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="popup_button">*/
/* 			<button class="sure_button edit_sure" style="padding:5px;">保存</button>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="popup_detail" style="display:none">*/
/* 	<div data-id="" id="custom_id" style="width:1200px;">*/
/* 		<div style="margin-top:20px;width:100%">*/
/* 			<div class="custom_table" id="custom_table_test">*/
/* 				<table>*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<th>客户分组</th>*/
/* 							<th>跟进人</th>*/
/* 							<th>下次跟进时间</th>*/
/* 							<th>客户级别</th>*/
/* 							<th>合作状态</th>*/
/* 							<th>仓位编码</th>*/
/* 							<th>客户地图</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* 					<tbody class="basic_message">*/
/* 						<tr>*/
/* 							<td class="noxshide" style="text-align: center;width: 160px" >*/
/* 								<select style="width: 150px;text-align: center !important;" class="customerGrupe select2-hidden-accessible" tabindex="-1" id="label_cat" aria-hidden="true">*/
/* 									<option value="">请选择客户分组</option>*/
/* 								</select>*/
/* 							</td>*/
/* 							<td class="folman" style="text-align: center !important;;width: 160px" ></td>*/
/* 							<td class="noxshide" style="text-align: center;width: 160px" follow>*/
/* 								<div class="input-group" style="display: inline-flex; width:130px;">*/
/* 									<input class="date-timepicker22 required _next_time" style="height: 30px; width: 125px;padding-left:5px;">*/
/* 									<span class="input-group-addon" style="width:25px;height:30px;">*/
/*                    			 		<i class="fa fa-clock-o bigger-110" style="position:relative;right:7px;"></i>*/
/*                 					</span>*/
/* 								</div>*/
/* 							</td>*/
/* 							<td style="text-align: center;width: 160px" basic>*/
/* 								<select style="width: 150px;text-align: center !important;" class="customerlevel">*/
/* 									<option value="">请选择客户级别</option>*/
/* 									<option value="1">A</option>*/
/* 									<option value="2">B</option>*/
/* 									<option value="3">C</option>*/
/* 									<option value="4">D</option>*/
/* 								</select></td>*/
/* 							<td style="text-align: center !important;;width: 160px" basic></td>*/
/* 							<td style="text-align: center !important;width: 160px" position></td>*/
/* 							<td style="text-align: center !important;">*/
/* 								<a href="#" class="js-map"><i class="fa fa-map-marker" aria-hidden="true"></i></a>*/
/* 							</td>*/
/* 						</tr>*/
/* 					</tbody>*/
/* 				</table>*/
/* 				<div class="otherItembox">*/
/* 					<div class="disitems">*/
/* 						<div class="tit">客户标签</div>*/
/* 						<div class="customer_label discontbox clear">*/
/* 							<a href="javascript:;" class="addCustomerLabel fl" title="添加客户标签" style="border:1px #bdd7ee solid;border-radius:0;width: 150px;padding: 0;height: 35px;line-height:35px;text-align: center;margin-bottom: 5px;display: inline-block;">*/
/* 								<i class="fa fa-plus"></i>*/
/* 							</a>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="disitems">*/
/* 						<div class="tit">销售阶段</div>*/
/* 						<div class="discontbox sales_stage">*/
/* 							<label class="" style="cursor:pointer;border:1px #bdd7ee solid;margin-right: 10px;border-radius:0;width: 150px;padding: 0;height: 35px;line-height:35px;text-align: center;margin-bottom: 5px;">*/
/* 								新入库*/
/* 							</label><label class="" style="cursor:pointer;border:1px #bdd7ee solid;margin-right: 10px;border-radius:0;width: 150px;padding: 0;height: 35px;line-height:35px;text-align: center;margin-bottom: 5px;">*/
/* 								初步沟通*/
/* 							</label><label class="" style="cursor:pointer;border:1px #bdd7ee solid;margin-right: 10px;border-radius:0;width: 150px;padding: 0;height: 35px;line-height:35px;text-align: center;margin-bottom: 5px;">*/
/* 								判断分析*/
/* 							</label><label class="" style="cursor:pointer;border:1px #bdd7ee solid;margin-right: 10px;border-radius:0;width: 150px;padding: 0;height: 35px;line-height:35px;text-align: center;margin-bottom: 5px;">*/
/* 								上门面谈*/
/* 							</label><label class="" style="cursor:pointer;border:1px #bdd7ee solid;margin-right: 10px;border-radius:0;width: 150px;padding: 0;height: 35px;line-height:35px;text-align: center;margin-bottom: 5px;">*/
/* 								合同*/
/* 							</label>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="disitems">*/
/* 						<div class="tit">销售团队</div>*/
/* 						<div class="discontbox selling_groups clear">*/
/* 							<select style="border:1px #bdd7ee solid !important;border-radius:0 !important;width: 156px !important;padding: 0 !important;height: 35px !important;line-height:35px !important;text-align: center;margin-bottom: 5px !important; " class="principal" tabindex="-1" aria-hidden="true">*/
/* 								<option value="">负责人</option>*/
/* 							</select>*/
/* 							</label>*/
/* 							<a href="javascript:;" class="addSellingperson" title="添加协作人" style="border:1px #bdd7ee solid;border-radius:0;width: 150px;padding: 0;height: 35px;line-height:35px;text-align: center;margin-bottom: 5px;display: inline-block;">*/
/* 								<i class="fa fa-plus"></i>*/
/* 							</a>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="layui-tab" lay-filter="demo">*/
/* 			<ul class="layui-tab-title">*/
/* 				<li class="layui-this">摘要</li>*/
/* 				<li>信息</li>*/
/* 				<li>联系人</li>*/
/* 				<li>商机</li>*/
/* 				<li>拜访</li>*/
/* 				<li>服务</li>*/
/* 				<li lay-id="td">团队</li>*/
/* 				<li>合同</li>*/
/* 				<li>收款</li>*/
/* 				<li>支出</li>*/
/* 				<li>开票</li>*/
/* 				<li>物品</li>*/
/* 				<li>附件</li>*/
/* 				<li>修改记录</li>*/
/* 			</ul>*/
/* 			<div class="layui-tab-content">*/
/* 				<!--摘要-->*/
/* 				<div class="layui-tab-item layui-show">*/
/* 					<div>*/
/* 						<!--<div>*/
/* 							<p style="margin:0 auto;padding-bottom:20px;padding:10px;background-color: #ccecff;text-align:center;font-size:16px;">待办任务</p>*/
/* 						</div>*/
/* 						<div>*/
/* 							<div class="wait_finish_task" style="display:none;">*/
/* 								<table>*/
/* 									<tbody>*/
/* 										<tr>*/
/* */
/* 										</tr>*/
/* 									</tbody>*/
/* 								</table>*/
/* 							</div>*/
/* 							<div class="wait_finish_task">*/
/* 								<div style="border:1px solid #ddd;text-align:center;height: 40px;line-height: 40px;">*/
/* 									暂无数据*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>-->*/
/* 					</div>*/
/* 					<div>*/
/* 						<div style="margin-top:30px;">*/
/* 							<p style="margin:0 auto;padding:10px;background-color: #ccecff;text-align:center;font-size:16px;">新建联系记录</p>*/
/* 						</div>*/
/* 						<div style="margin-top:15px;">*/
/* 							<textarea id="contact_msg" contact-field="contact_msg" placeholder="新建一条联系记录"  style="background-color:#c5e0f1;color:#333;border:none;width:100%;padding:5px;height:65px;resize:none;    margin-top: 5px;"></textarea>*/
/* 							<div style="width:100%;">*/
/* 								<div style="padding: 10px 0">*/
/* 									<div class="contact_type" style="float:left;color: #333; border-top: 1px #ccc solid;border-bottom: 1px #ccc solid;border-left:1px #ccc solid;margin-right: 6%">*/
/* 										<i style="display:block;float:left;font-style: normal;padding: 5px 10px;background: #ccecff;">记录类型</i>*/
/* 										<span data-val="4" style="cursor:pointer;float:left;display:block;padding: 5px 10px;border-right:1px #ccc solid">线索</span>*/
/* 										<span data-val="5" style="cursor:pointer;display:block;float:left;padding: 5px 10px;border-right:1px #ccc solid">商机</span>*/
/* 										<span data-val="6" style="cursor:pointer;display:block;float:left;padding: 5px 10px;border-right:1px #ccc solid">拜访</span>*/
/* 										<span data-val="3" style="cursor:pointer;display:block;float:left;padding: 5px 10px;border-right:1px #ccc solid">收款</span>*/
/* 										<span data-val="1" style="cursor:pointer;display:block;float:left;padding: 5px 10px;border-right:1px #ccc solid">售后</span>*/
/* 										<span data-val="2" style="cursor:pointer;display:block;float:left;padding: 5px 10px;border-right:1px #ccc solid">投诉</span>*/
/* 									</div>*/
/* 									<div class="contact_way" style="float:left;color: #333; border-top: 1px #ccc solid;border-bottom: 1px #ccc solid;border-left:1px #ccc solid;margin-right: 6%">*/
/* 										<i style="display:block;font-style: normal;float:left;padding: 5px 10px;background: #ccecff;">联系方式</i>*/
/* 										<span data-val="1" style="cursor:pointer;display:block;float:left;padding: 5px 10px;border-right:1px #ccc solid">电话</span>*/
/* 										<span data-val="5" style="cursor:pointer;display:block;float:left;padding: 5px 10px;border-right:1px #ccc solid">上门</span>*/
/* 										<span data-val="6" style="cursor:pointer;display:block;float:left;padding: 5px 10px;border-right:1px #ccc solid">短信</span>*/
/* 										<span data-val="2" style="cursor:pointer;display:block;float:left;padding: 5px 10px;border-right:1px #ccc solid">微信</span>*/
/* 										<span data-val="3" style="cursor:pointer;display:block;float:left;padding: 6.5px 10px;border-right:1px #ccc solid">QQ</span>*/
/* 										<span data-val="4" style="cursor:pointer;display:block;float:left;padding: 5px 10px;border-right:1px #ccc solid">邮件</span>*/
/* 									</div>*/
/* */
/* 									<!--<select style="width:180px;" contact-field="contact_type">*/
/* 										<option value="1" selected>售后服务</option>*/
/* 										<option value="2">售前服务</option>*/
/* 									</select>*/
/* 									<select style="width:59px;margin-top:5px;margin-left: 6px;" contact-field="contact_way">*/
/* 										<option value="1" selected>电话</option>*/
/* 										<option value="2">微信</option>*/
/* 										<option value="3">QQ</option>*/
/* 										<option value="4">邮箱</option>*/
/* 									</select>-->*/
/* */
/* 										<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/*                                             <input class="date-timepicker1 required" msg="联系时间不能为空" style="height: 30px; width: 150px;padding-left:8px;" contact-field="log_time">*/
/*                                             <span class="input-group-addon" style="width:30px;height:30px;">*/
/*                                                 <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                             </span>*/
/*                                         </div>-->*/
/* 									<span style="display:inline-block;padding:6px 16px;color:#fff;margin-left:5px;background-color:#4ebefd;cursor:pointer;" contentAuthority="252" class="new_contactRecord">发送</span>*/
/* */
/* 								</div>*/
/* */
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div>*/
/* 						<div style="margin-top:30px;">*/
/* 							<p style="margin:0 auto;padding:10px;background-color: #ccecff;text-align:center;font-size:16px;">最近联系记录</p>*/
/* 						</div>*/
/* 						<div class="recent_contact_record">*/
/* */
/* 						</div>*/
/* 						<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 		                    <div align="left" style="padding-left: 15px; float: left; width: 10%;" id="zynum"></div>*/
/* 		                    <!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 		                    <div id="zypageBar" class="pagination"></div>*/
/* 		                    <div align="right" style="float: right;  width: 10%;">*/
/* 		                        <select style="width: 100px;" id="changePageNum">*/
/* 		                            <option value="10">每页10条</option>*/
/* 		                            <option value="20">每页20条</option>*/
/* 		                            <option value="50">每页50条</option>*/
/* 		                            <option value="100">每页100条</option>*/
/* 		                            <option value="200">每页200条</option>*/
/* 		                        </select>*/
/* 		                    </div>*/
/* 		                </div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<!--信息-->*/
/* 				<div class="layui-tab-item">*/
/* 					<div>*/
/* 						<div>*/
/* 							<table style="border:1px solid #ddd;border-collapse:collapse;">*/
/* 								<tr>*/
/* 									<td class="unite-label">公司全称</td>*/
/* 									<td data-title="name"></td>*/
/* 									<td class="unite-label">统一社会信用代码</td>*/
/* 									<td data-title="social_credit_code"></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td class="unite-label">客户编码</td>*/
/* 									<td data-title="customer_num"></td>*/
/* 									<td class="unite-label">仓位编码</td>*/
/* 									<td pos-id></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<!--<td class="unite-label">营业执照号</td>*/
/* 									<td data-title="license_no"></td>-->*/
/* 									<td class="unite-label">客户来源</td>*/
/* 									<td data-title="source"></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td class="unite-label">法人证件号</td>*/
/* 									<td data-title="corporation_card"></td>*/
/* 									<td class="unite-label">法人姓名</td>*/
/* 									<td data-title="corporation"></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td class="unite-label">注册日期</td>*/
/* 									<td data-title="stablish_time"></td>*/
/* 									<td class="unite-label">添加日期</td>*/
/* 									<td data-title="create_at"></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td class="unite-label">注册资金</td>*/
/* 									<td data-title="capital"></td>*/
/* 									<td class="unite-label">省市区</td>*/
/* 									<td data-title="area"></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td class="unite-label">详细地址</td>*/
/* 									<td data-title="address"></td>*/
/* 									<td class="unite-label">客户级别</td>*/
/* 									<td data-title="rank"></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td class="unite-label">经营范围</td>*/
/* 									<td data-title="range" colspan="3" style="white-space:normal !important; width: 100% !important;"></td>*/
/* 								</tr>*/
/* 								*/
/* 								<tr>*/
/* 									<td class="unite-label">联系人</td>*/
/* 									<td data-title="contacts"></td>*/
/* 									<td class="unite-label">手机</td>*/
/* 									<td data-title="phone"></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td class="unite-label">公司规模</td>*/
/* 									<td data-title="scale"></td>*/
/* 									<td class="unite-label">行业</td>*/
/* 									<td data-title="industry"></td>*/
/* 									*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td class="unite-label">备注</td>*/
/* 									<td data-title="remark"></td>*/
/* 									<td class="unite-label"></td>*/
/* 									<td  ></td>*/
/* 								</tr>*/
/* 							</table>*/
/* 						</div>*/
/* 						<div style="">*/
/* 							<table style="border:1px solid #ddd;border-collapse:collapse;">*/
/* 								<tr>*/
/* 									<td class="unite-label">税务类型</td>*/
/* 									<td data-title="tax_type"></td>*/
/* 									<td class="unite-label">有无基本户</td>*/
/* 									<td data-title="basic"></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td class="unite-label">纳税识别号</td>*/
/* 									<td data-title="ratepaying_no"></td>*/
/* 									<td class="unite-label">税务备注</td>*/
/* 									<td data-title="remark"></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td class="unite-label">国税编码</td>*/
/* 									<td data-title="state_tax_no"></td>*/
/* 									<td class="unite-label">国税密码</td>*/
/* 									<td data-title="" >*****</td><!--state_tax_pass-->*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td class="unite-label">国税ca证书</td>*/
/* 									<td data-title="gca"></td>*/
/* 									<td class="unite-label">地税编码</td>*/
/* 									<td data-title="local_tax_no"></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td class="unite-label">地税密码</td>*/
/* 									<td data-title="">*****</td>*/
/* 									<td class="unite-label">地税ca证书</td>*/
/* 									<td data-title="dca" colspan="3"></td>*/
/* 								</tr>*/
/* 								<!--<tr>*/
/* 									<td class="unite-label">工商编码</td>*/
/* 									<td data-title="industry_no"></td>*/
/* 									<td class="unite-label">工商密码</td>*/
/* 									<td data-title=""></td>  */
/* 								</tr>*/
/* 								<tr>*/
/* 									<td class="unite-label">工商ca证书</td>*/
/* 									<td data-title="ica" colspan="3"></td>*/
/* 								</tr>-->*/
/* 							</table>*/
/* 						</div>*/
/* 						<div style="margin-top:20px;" class="ts">*/
/* 							<table style="border:1px solid #ddd;border-collapse:collapse;">*/
/* 								<tr>*/
/* 									<td class="unite-label" >客户状态</td>*/
/* 									<td data-title="status"></td>*/
/* 									<td class="unite-label">最后修改人</td>*/
/* 									<td data-title="update_by"></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td class="unite-label">所属公海</td>*/
/* 									<td data-title="type"></td>*/
/* 									<td class="unite-label">失效原因</td>*/
/* 									<td data-title="reason"></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td class="unite-label">失效操作人</td>*/
/* 									<td data-title="voiduser"></td>*/
/* 									<td class="unite-label">失效人所在部门</td>*/
/* 									<td data-title="voiddept"></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td class="unite-label">创建人</td>*/
/* 									<td data-title="create_id"></td>*/
/* 									<td class="unite-label">创建人所在部门</td>*/
/* 									<td data-title="create_dep"></td>*/
/* 								</tr>*/
/* */
/* 							</table>*/
/* 						</div>*/
/* */
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<!--联系人-->*/
/* 				<div class="layui-tab-item">*/
/* 					<div>*/
/* 						<div class="custom_table">*/
/* 							<table>*/
/* 								<thead>*/
/* 									<tr>*/
/* 										<th>企业数</th>*/
/* 										<th>姓名</th>*/
/* 										<th>性别</th>*/
/* 										<th>手机</th>*/
/* 										<th>电话</th>*/
/* 										<th>QQ</th>*/
/* 										<th>关键决策人</th>*/
/* 										<th>主要联系人</th>*/
/* 									</tr>*/
/* 								</thead>*/
/* 								<tbody>*/
/* 									<!-- <tr>*/
/* 										<td>李四</td>*/
/* 											<td>男</td>*/
/* 											<td>李四</td>*/
/* 											<td>18926546552</td>*/
/* 											<td>0755-86526354</td>*/
/* 											<td>895564215</td>*/
/* 											<td>李李</td>*/
/* 									</tr> -->*/
/* 								</tbody>*/
/* 							</table>*/
/* 						</div>*/
/* 						<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 							<div align="left" style="padding-left: 15px; float: left;" id="lxnum"></div>*/
/* 							<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 							<div id="lxpageBar" class="pagination"></div>*/
/* 							<div align="right" style="float: right;">*/
/* 								<select style="width: 100px;" id="changePageNum">*/
/* 									<option value="10">每页10条</option>*/
/* 									<option value="20">每页20条</option>*/
/* 									<option value="50">每页50条</option>*/
/* 									<option value="100">每页100条</option>*/
/* 									<option value="200">每页200条</option>*/
/* 								</select>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<!--商机-->*/
/* 				<div class="layui-tab-item">*/
/* */
/* 					<div style="" class="custom_table">*/
/* 						<table>*/
/* 							<thead>*/
/* 							<tr>*/
/* 								<th data-num="1">商机名称</th>*/
/* 								<th data-num="2">企业名称</th>*/
/* 								<th data-num="3">预计成交日期</th>*/
/* 								<th data-num="4" style="text-align: right !important;">商机金额(元)</th>*/
/* 								<th data-num="5">商机状态</th>*/
/* 								<th data-num="6">备注</th>*/
/* 								<th data-num="7">签单可能性</th>*/
/* 								<th data-num="8">商机来源</th>*/
/* 								<th data-num="9">负责人</th>*/
/* 								<th data-num="10">创建人</th>*/
/* 								<th data-num="11">创建时间</th>*/
/* 								<th data-num="12">最后修改人</th>*/
/* 								<th data-num="13">最后修改时间</th>*/
/* 							</tr>*/
/* 							</thead>*/
/* 							<tbody>*/
/* 							<!--  <tr>*/
/*                                 <td>牧牛网络</td>*/
/*                                 <td>于颖</td>*/
/*                                 <td>于颖</td>*/
/*                                 <td>注册商标</td>*/
/*                                 <td></td>*/
/*                                 <td>2017/8/14</td>*/
/*                                 <td>执行中</td>*/
/*                                 <td>1000</td>*/
/*                                 <td>1000</td>*/
/*                                 <td>1000</td>*/
/*                                 <td>1000</td>*/
/*                             </tr> -->*/
/* 							</tbody>*/
/* 						</table>*/
/* 					</div>*/
/* 					<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 						<div align="left" style="padding-left: 15px; float: left;" id="sjnum"></div>*/
/* 						<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 						<div id="sjpageBar" class="pagination"></div>*/
/* 						<div align="right" style="float: right;">*/
/* 							<select style="width: 100px;" id="changePageNum">*/
/* 								<option value="10">每页10条</option>*/
/* 								<option value="20">每页20条</option>*/
/* 								<option value="50">每页50条</option>*/
/* 								<option value="100">每页100条</option>*/
/* 								<option value="200">每页200条</option>*/
/* 							</select>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<!--拜访-->*/
/* 				<div class="layui-tab-item">*/
/* */
/* 					<div style="" class="custom_table">*/
/* 						<table>*/
/* 							<thead>*/
/* 							<tr>*/
/* 								<th data-num="1">拜访编号</th>*/
/* 								<th data-num="2">企业名称</th>*/
/* 								<th data-num="3">拜访主题</th>*/
/* 								<th data-num="4">服务项目</th>*/
/* 								<th data-num="5">拜访详情</th>*/
/* 								<th data-num="7">负责人</th>*/
/* 								<th data-num="11">状态</th>*/
/* 								<th data-num="6">协访人员</th>*/
/* 								<th data-num="12">创建人</th>*/
/* 								<th data-num="13">创建时间</th>*/
/* 								<th data-num="14">最后修改时间</th>*/
/* 								<th data-num="15">最后修改人</th>*/
/* 							</tr>*/
/* 							</thead>*/
/* 							<tbody>*/
/* 							<!--  <tr>*/
/*                                 <td>牧牛网络</td>*/
/*                                 <td>于颖</td>*/
/*                                 <td>于颖</td>*/
/*                                 <td>注册商标</td>*/
/*                                 <td>无</td>*/
/*                                 <td>2017/8/14</td>*/
/*                                 <td>执行中</td>*/
/*                                 <td>1000</td>*/
/*                                 <td>1000</td>*/
/*                                 <td>1000</td>*/
/*                                 <td>1000</td>*/
/*                             </tr> -->*/
/* 							</tbody>*/
/* 						</table>*/
/* 					</div>*/
/* 					<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 						<div align="left" style="padding-left: 15px; float: left;" id="bfnum"></div>*/
/* 						<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 						<div id="bfpageBar" class="pagination"></div>*/
/* 						<div align="right" style="float: right;">*/
/* 							<select style="width: 100px;" id="changePageNum">*/
/* 								<option value="10">每页10条</option>*/
/* 								<option value="20">每页20条</option>*/
/* 								<option value="50">每页50条</option>*/
/* 								<option value="100">每页100条</option>*/
/* 								<option value="200">每页200条</option>*/
/* 							</select>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<!--服务-->*/
/* 				<div class="layui-tab-item">*/
/* */
/* 				</div>*/
/* 				<!--团队-->*/
/* 				<div class="layui-tab-item">*/
/* */
/* 				</div>*/
/* 				<!--合同-->*/
/* 				<div class="layui-tab-item">*/
/* */
/* 				</div>*/
/* 				<!--收款-->*/
/* 				<div class="layui-tab-item">*/
/* 					*/
/* 					<div style="" class="custom_table">*/
/* 						<table>*/
/* 							<thead>*/
/* 								<tr>*/
/* 									<th data-num="1">收款编号</th>*/
/* 									<th data-num="2">企业名称</th>*/
/* 									<th data-num="3">订单编号</th>*/
/* 									<th data-num="4">收款项目</th>*/
/* 									<th data-num="5">状态</th>*/
/* 									<th data-num="6">审批回复</th>*/
/* 									<th data-num="7">收款日期</th>*/
/* 									<th data-num="8">收款总额</th>*/
/* 									<th data-num="9">收款方式</th>*/
/* 									<th data-num="10">收款账户</th>*/
/* 									<th data-num="11">收款人</th>*/
/* 									<th data-num="12">备注</th>*/
/* 									<th data-num="13">创建人</th>*/
/* 									<th data-num="14">创建时间</th>*/
/* 									<th data-num="15">审批人</th>*/
/* 									<th data-num="16">审批时间</th>*/
/* 								</tr>*/
/* 							</thead>*/
/* 							<tbody>*/
/* 								<!--  <tr>*/
/* 		                            <td>牧牛网络</td>*/
/* 		                            <td>于颖</td>*/
/* 		                            <td>于颖</td>*/
/* 		                            <td>注册商标</td>*/
/* 		                            <td>无</td>*/
/* 		                            <td>2017/8/14</td>*/
/* 		                            <td>执行中</td>*/
/* 		                            <td>1000</td>*/
/* 		                            <td>1000</td>*/
/* 		                            <td>1000</td>*/
/* 		                            <td>1000</td>*/
/* 		                        </tr> -->*/
/* 							</tbody>*/
/* 						</table>*/
/* 					</div>*/
/* 					<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 						<div align="left" style="padding-left: 15px; float: left;" id="shouknum"></div>*/
/* 						<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 						<div id="shoukpageBar" class="pagination"></div>*/
/* 						<div align="right" style="float: right;">*/
/* 							<select style="width: 100px;" id="changePageNum">*/
/* 								<option value="10">每页10条</option>*/
/* 								<option value="20">每页20条</option>*/
/* 								<option value="50">每页50条</option>*/
/* 								<option value="100">每页100条</option>*/
/* 								<option value="200">每页200条</option>*/
/* 							</select>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<!--支出-->*/
/* 				<div class="layui-tab-item">*/
/* 					<div>*/
/* 						<table class="custom_table">*/
/* 							<thead class="dynamic-table">*/
/* 								<tr>*/
/* 									<th>支出编号</th>*/
/* 									<th>订单编号</th>*/
/* 									<th>状态</th>*/
/* 									<th>支出日期</th>*/
/* 									<th>支出金额(元)</th>*/
/* 									<th>支付类别</th>*/
/* 									<th>支付方式</th>*/
/* 									<th>支付账户</th>*/
/* 									<th>负责人</th>*/
/* 									<th>备注</th>*/
/* 								</tr>*/
/* 							</thead>*/
/* 							<tbody>*/
/* 								<!-- <tr>*/
/* 									<td>000</td>*/
/* 										<td>李四</td>*/
/* 										<td>001</td>*/
/* 										<td>好</td>*/
/* 										<td>0755-86526354</td>*/
/* 										<td>895564215</td>*/
/* 										<td>现金</td>*/
/* 										<td>45646</td>*/
/* 										<td>李李</td>*/
/* 										<td>李李</td>*/
/* 								</tr> -->*/
/* 							</tbody>*/
/* 						</table>*/
/* 					</div>*/
/* 					<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 						<div align="left" style="padding-left: 15px; float: left;" id="zcnum"></div>*/
/* 						<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 						<div id="zcpageBar" class="pagination"></div>*/
/* 						<div align="right" style="float: right;">*/
/* 							<select style="width: 100px;" id="changePageNum">*/
/* 								<option value="10">每页10条</option>*/
/* 								<option value="20">每页20条</option>*/
/* 								<option value="50">每页50条</option>*/
/* 								<option value="100">每页100条</option>*/
/* 								<option value="200">每页200条</option>*/
/* 							</select>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<!--开票-->*/
/* 				<div class="layui-tab-item">*/
/* 					<div>*/
/* 						<table class="custom_table">*/
/* 							<thead class="dynamic-table">*/
/* 								<tr>*/
/* 									<th>开票申请号</th>*/
/* 									<th>客户名称</th>*/
/* 									<th>订单编号</th>*/
/* 									<th>状态</th>*/
/* 									<th>开票日期</th>*/
/* 									<th>开票金额(元)</th>*/
/* 									<th>开票类型</th>*/
/* 									<th>发票号码</th>*/
/* 									<th>抬头类型</th>*/
/* 									<th>开票抬头</th>*/
/* 									<th>社会统一信用码</th>*/
/* 								</tr>*/
/* 							</thead>*/
/* 							<tbody>*/
/* 								<!-- <tr>*/
/* 									<td>000</td>*/
/* 									<td>李四</td>*/
/* 									<td>001</td>*/
/* 									<td>好</td>*/
/* 									<td>0755-86526354</td>*/
/* 									<td>895564215</td>*/
/* 									<td>现金</td>*/
/* 									<td>45646</td>*/
/* 									<td>李李</td>*/
/* 									<td>李李</td>*/
/* 									<td>李李</td>*/
/* 								</tr> -->*/
/* 							</tbody>*/
/* 						</table>*/
/* 					</div>*/
/* 					<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 						<div align="left" style="padding-left: 15px; float: left;" id="kpnum"></div>*/
/* 						<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 						<div id="kppageBar" class="pagination"></div>*/
/* 						<div align="right" style="float: right;">*/
/* 							<select style="width: 100px;" id="changePageNum">*/
/* 								<option value="10">每页10条</option>*/
/* 								<option value="20">每页20条</option>*/
/* 								<option value="50">每页50条</option>*/
/* 								<option value="100">每页100条</option>*/
/* 								<option value="200">每页200条</option>*/
/* 							</select>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<!-- 物品 -->*/
/* 				<div class="layui-tab-item">*/
/* 					<div class="layui-collapse" lay-accordion lay-filter="demo1">*/
/* 						<div class="layui-colla-item">*/
/* 							<h2 class="layui-colla-title">凭证仓</h2>*/
/* 							<div class="layui-colla-content" index="0">*/
/* 								<div class="custom_table">*/
/* 									<table>*/
/* 										<!-- <thead>*/
/* 											<tr class="thColor ths">*/
/* 												<th>盘点编码</th>*/
/* 												<th>盘点日期</th>*/
/* 												<th>仓库名称</th>*/
/* 												<th>仓位</th>*/
/* 												<th>库存物品</th>*/
/* 												<th>库存数量</th>*/
/* 												<th>盘点数量</th>*/
/* 												<th>盘点差额</th>*/
/* 												<th>盘点结果</th>*/
/* 												<th>创建人</th>*/
/* 												<th>创建时间</th>*/
/* 											</tr>*/
/* 										</thead> -->*/
/* 										<tbody>*/
/* 											<tr>*/
/* 												<td style="text-align: center !important;color:#7d7d7d" colspan="30">暂无数据</td>*/
/* 											</tr>*/
/* 										</tbody>*/
/* 									</table>*/
/* 								</div>*/
/* 								<!-- <div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 									<div align="left" style="padding-left: 15px; float: left;" class="_num"></div>*/
/* 									<div class="pageBar pagination"></div>*/
/* 									<div align="right" style="float: right;">*/
/* 										<select style="width: 100px;" id="changePageNum">*/
/* 											<option value="10">每页10条</option>*/
/* 											<option value="20">每页20条</option>*/
/* 											<option value="50">每页50条</option>*/
/* 											<option value="100">每页100条</option>*/
/* 											<option value="200">每页200条</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div> -->*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="layui-colla-item">*/
/* 							<h2 class="layui-colla-title">票据仓</h2>*/
/* 							<div class="layui-colla-content" index="1">*/
/* 								<div class="custom_table">*/
/* 									<table class="dynamic-table">*/
/* 										<!-- <thead>*/
/* 											<tr>*/
/* 												<th>入库单号</th>*/
/* 												<th>入库类型</th>*/
/* 												<th>仓库名称</th>*/
/* 												<th>经办人</th>*/
/* 												<th>入库时间</th>*/
/* 												<th>入库物品</th>*/
/* 												<th>入库数量</th>*/
/* 												<th>创建人</th>*/
/* 												<th>创建时间</th>*/
/* 											</tr>*/
/* 										</thead> -->*/
/* 										<tbody>*/
/* 											<tr>*/
/* 												<td style="text-align: center !important;color:#7d7d7d" colspan="30">暂无数据</td>*/
/* 											</tr>*/
/* 											<!-- <tr>*/
/* 												<td>测试</td>*/
/* 												<td>2017-8-2 11:34:28</td>*/
/* 												<td>张三</td>*/
/* 												<td>测试</td>*/
/* 												<td>2017-8-2 11:34:28</td>*/
/* 												<td>张三</td>*/
/* 												<td>测试</td>*/
/* 												<td>2017-8-2 11:34:28</td>*/
/* 												<td>*/
/* 													<a href="javascript:;">编辑</a>&nbsp;&nbsp;*/
/* 													<a href="javascript:;">删除</a>*/
/* 												</td>*/
/* 											</tr> -->*/
/* 										</tbody>*/
/* 									</table>*/
/* 								</div>*/
/* */
/* 								<!-- <div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 									<div align="left" style="padding-left: 15px; float: left;" class="_num"></div>*/
/* 									<div class="pageBar pagination"></div>*/
/* 									<div align="right" style="float: right;">*/
/* 										<select style="width: 100px;" id="changePageNum">*/
/* 											<option value="10">每页10条</option>*/
/* 											<option value="20">每页20条</option>*/
/* 											<option value="50">每页50条</option>*/
/* 											<option value="100">每页100条</option>*/
/* 											<option value="200">每页200条</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div> -->*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="layui-colla-item">*/
/* 							<h2 class="layui-colla-title">证件仓</h2>*/
/* 							<div class="layui-colla-content" index="2">*/
/* 								<div class="custom_table">*/
/* 									<table>*/
/* 										<!-- <thead>*/
/* 											<tr class="thColor">*/
/* 												<th>出库单号</th>*/
/* 												<th>出库类型</th>*/
/* 												<th>仓库名称</th>*/
/* 												<th>经办人</th>*/
/* 												<th>出库时间</th>*/
/* 												<th>出库物品</th>*/
/* 												<th>出库数量</th>*/
/* 												<th>创建人</th>*/
/* 												<th>创建时间</th>*/
/* 											</tr>*/
/* 										</thead> -->*/
/* 										<tbody>*/
/* 											<tr>*/
/* 												<td style="text-align: center !important;color:#7d7d7d" colspan="30">暂无数据</td>*/
/* 											</tr>*/
/* 										</tbody>*/
/* 									</table>*/
/* 								</div>*/
/* 								<!-- <div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 									<div align="left" style="padding-left: 15px; float: left;" class="_num"></div>*/
/* 									<div class="pageBar pagination"></div>*/
/* 									<div align="right" style="float: right;">*/
/* 										<select style="width: 100px;" id="changePageNum">*/
/* 											<option value="10">每页10条</option>*/
/* 											<option value="20">每页20条</option>*/
/* 											<option value="50">每页50条</option>*/
/* 											<option value="100">每页100条</option>*/
/* 											<option value="200">每页200条</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div> -->*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<!--附件-->*/
/* 				<div class="layui-tab-item">*/
/* 					<div class="custom_table">*/
/* 						<table class="dynamic-table">*/
/* 							<thead>*/
/* 								<tr>*/
/* 									<th>文档名称</th>*/
/* 									<th>上传时间</th>*/
/* 									<th>上传人</th>*/
/* 									<th>操作</th>*/
/* 								</tr>*/
/* 							</thead>*/
/* 							<tbody>*/
/* 								<!-- <tr>*/
/* 									<td>测试</td>*/
/* 									<td>2017-8-2 11:34:28</td>*/
/* 									<td>张三</td>*/
/* 									<td>*/
/* 										<a href="javascript:;">下载</a>*/
/* 									</td>*/
/* 								</tr> -->*/
/* 							</tbody>*/
/* 						</table>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="layui-tab-item">*/
/* 					<div class="custom_table">*/
/* 						<table>*/
/* 							<tbody>*/
/* */
/* 							</tbody>*/
/* 						</table>*/
/* 					</div>*/
/* 					<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 						<div align="left" style="padding-left: 15px; float: left;" id="xgjlnum"></div>*/
/* 						<div id="xgjlpageBar" class="pagination"></div>*/
/* 						<div align="right" style="float: right;">*/
/* 							<select style="width: 100px;" id="changePageNum">*/
/* 								<option value="10">每页10条</option>*/
/* 								<option value="20">每页20条</option>*/
/* 								<option value="50">每页50条</option>*/
/* 								<option value="100">每页100条</option>*/
/* 								<option value="200">每页200条</option>*/
/* 							</select>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<!--<div class="layui-tab-item">内容12</div>-->*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* </div>*/
/* */
/* <div class="label_popup" id="addremark" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* */
/* </div>*/
/* */
/* <div id="remark" style="display: none;">*/
/* 	<div style="padding: 20px;">*/
/* 		<div style="margin-top:20px;">*/
/* 			<h3 style="display:block;">*/
/*                 	公开备注*/
/*                 	 <span style="float:right;"><a class="add" href="javascript:;" title="返回" style="padding:4px 10px 5px 10px;background:#428bca;color:#fff;"><i class="glyphicon glyphicon-plus" aria-hidden="true"></i></a></span>*/
/*            </h3>*/
/* */
/* 			<hr>*/
/* 		</div>*/
/* 		<div class="custom_table" id="custom_table_test">*/
/* 			<table>*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>备注</th>*/
/* 						<th>完成状态</th>*/
/* 						<th>创建人</th>*/
/* 						<th>创建时间</th>*/
/* 						<th>文件</th>*/
/* 						<th>操作</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody id="datalist">*/
/* */
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* */
/* 		<div style="margin-top:20px; margin-top: 50px;">*/
/* 			<h3 style="display:block;">*/
/*                 	私人备注*/
/*            </h3>*/
/* 			<hr>*/
/* 		</div>*/
/* 		<div class="custom_table" id="custom_table_test">*/
/* 			<table>*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>备注</th>*/
/* 						<th>创建时间</th>*/
/* 						<th>完成状态</th>*/
/* 						<th>文件</th>*/
/* 						<th>操作</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody id="datalist2">*/
/* */
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* */
/* 		<div style="margin-top:20px; margin-top: 50px;">*/
/* 			<h3 style="display:block;">*/
/*                 	公开已完成备注*/
/*              </h3>*/
/* 			<hr>*/
/* 		</div>*/
/* 		<div class="custom_table" id="custom_table_test">*/
/* 			<table>*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>备注</th>*/
/* 						<th>完成状态</th>*/
/* 						<th>创建人</th>*/
/* 						<th>创建时间</th>*/
/* 						<th>完成人</th>*/
/* 						<th>完成时间</th>*/
/* 						<th>文件</th>*/
/* 						<th>操作</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody id="datalist3">*/
/* */
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* */
/* 		<div style="margin-top:20px; margin-top: 50px;">*/
/* 			<h3 style="display:block;">*/
/* 	        私人已完成备注*/
/* 	    </h3>*/
/* 			<hr>*/
/* 		</div>*/
/* 		<div class="custom_table" id="custom_table_test">*/
/* 			<table>*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>备注</th>*/
/* 						<th>完成状态</th>*/
/* 						<th>创建人</th>*/
/* 						<th>创建时间</th>*/
/* 						<th>完成人</th>*/
/* 						<th>完成时间</th>*/
/* 						<th>文件</th>*/
/* 						<th>操作</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody id="datalist4">*/
/* */
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/customer.js"></script>*/