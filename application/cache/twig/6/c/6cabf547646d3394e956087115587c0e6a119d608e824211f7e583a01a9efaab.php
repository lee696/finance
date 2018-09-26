<?php

/* admin/home.html */
class __TwigTemplate_29cfa8cff5af0db18d543bb0fdcd133918dff8f6970aa6d9f7126ad116b969d3 extends Twig_Template
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
\tth,
\ttd {
\t\ttext-align: center;
\t\tpadding: 5px;
\t}
\t
\tth {
\t\theight: 40px;
\t\tbackground: #ccecff;
\t}
\t
\ttd {
\t\theight: 36px;
\t}
\t
\t.odd {
\t\tbackground: #e5f6ff;
\t}
\t
\t.even {
\t\tbackground: #fff;
\t}
\t
\t.tab-content {
\t\tpadding: 16px 0;
\t}
\t
\t.helpers .active {
\t\tborder-bottom: 1px solid #fff;
\t\tborder-top: 2px solid #49ade6;
\t}
\t
\t.helpers li {
\t\theight: 30px;
\t\twidth: 86px;
\t\tline-height: 30px;
\t\ttext-align: center;
\t\tborder: 1px solid #f5f5f5;
\t}
\t
\t.main-content-inner {
\t\tbackground: #fff !important;
\t\tbox-shadow: none !important;
\t}
\t
\t.indexContent .current {
\t\tbackground-color: rgba(157, 194, 254, 0.8);
\t}
\t
\t.charts .active {
\t\tcolor: #00a0ff !important;
\t}
\t
\t#right .row {
\t\tmargin: 0px 0 !important;
\t}
\t
\t#right .businessCon {
\t\tdisplay: flex;
\t\ttext-align: center;
\t\tjustify-content: center;
\t\tflex-direction: row;
\t\tjustify-content: space-around;
\t\tmargin-bottom: 0px !important;
\t\tpadding-top: 0px;
\t\tmargin-top: 38px !important;
\t\tmargin-left: -10px;
\t}
\t
\t.circular {
\t\twidth: 80px;
\t\theight: 80px;
\t\tborder-radius: 50%;
\t\tfont-size: 40px;
\t\tline-height: 80px;
\t\tcolor: #fff;
\t\tmargin-bottom: 5px;
\t}
\t
\t.noticeCon li:nth-child(odd) {
\t\tbackground: #e5f6ff;
\t}
\t
\t.main-content-inner {
\t\tbackground: transparent !important;
\t\tpadding-bottom: 0px !important;
\t}
\t
\ta:hover,
\ta.close_label:hover {
\t\tcolor: inherit;
\t}
\t
\t.goals input {
\t\tpadding: 4px;
\t\tmargin-left: 8px;
\t\tborder: none;
\t\twidth: 100px;
\t\theight: 20px;
\t\topacity: 0.4;
\t\tbackground-color: #e5f6ff;
\t}
\t
\t.goals label {
\t\twidth: 48px;
\t\ttext-align: right;
\t\tfont-family: MicrosoftYaHei;
\t\tfont-size: 12px;
\t\tcolor: #666;
\t}
\t
\t.goals {
\t\tposition: absolute;
\t\t/*right:0;*/
\t\t/*left: 0;*/
\t\ttop: 36px;
\t\tpadding: 20px;
\t\tbox-shadow: 0px 2px 8px 0 rgba(0, 0, 0, 0.2);
\t\tbackground: #fff;
\t\twidth: 200px;
\t\tz-index: 2;
\t}
\t
\t._goals label {
\t\twidth: 24px;
\t}
\t
\t._goals {
\t\twidth: 176px;
\t}
\t
\tselect2-container select2-container--default select2-container--open {
\t\tposition: absolute !important;
\t\tleft: 494.438px!important;
\t\ttop: 41px!important;
\t}
\t
\t.businessCon li {
\t\tlist-style: none;
\t\twidth: 165px;
\t\theight: 70px;
\t\tmargin-top: -24px;
\t\t/*  */
\t}
\t
\t.titleMouse {
\t\tcursor: pointer;
\t\tborder: 1px #E6E6E6 solid;
\t\tbox-shadow: 2px 2px 8px 0 rgba(00, 00, 00, 0.1);
\t}
\t
\t.businessCon li>div:first-child {
\t\tline-height: 35px;
\t\tfont-size: 14px;
\t\theight: 40px;
\t\tfont-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
\t}
\t
\t.businessCon li>div:last-child {
\t\tfont-size: 18px;
\t\theight: 30px;
\t\tcolor: #55AA99
\t}

\t/* .select2-container{
\t\tposition: relative !important;
\t\ttop:50px !important;
\t} */
</style>
<div class=\"widget-main\" style=\"overflow:auto;padding:0;\">
\t<div style=\"background:#e6ecf2; margin-top: -20px;\">
\t\t<div style=\"display:none;position:fixed;z-index:1041;width:80%;background: #fff;padding: 20px;    top: 35%; left: 17%;\" class=\"sendList custom_table\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"thColor\" data-id='1'>
\t\t\t\t\t\t<th class=\"hidden-480\">月份</th>
\t\t\t\t\t\t<th>负责人</th>
\t\t\t\t\t\t<th class=\"hidden-480\">任务</th>
\t\t\t\t\t\t<th class=\"hidden-480\">整单</th>
\t\t\t\t\t\t<th class=\"hidden-480\">记账</th>
\t\t\t\t\t\t<th class=\"hidden-480\">客服</th>
\t\t\t\t\t\t<th class=\"hidden-480\">报税</th>
\t\t\t\t\t\t<th class=\"hidden-480\">送单</th>
\t\t\t\t\t\t<th class=\"hidden-480\">收单</th>
\t\t\t\t\t\t<th>公海</th>
\t\t\t\t\t\t<th>联系人</th>
\t\t\t\t\t\t<th class=\"hidden-480\">商机</th>
\t\t\t\t\t\t<th class=\"hidden-480\">拜访客户</th>
\t\t\t\t\t\t<th class=\"hidden-480\">线索</th>
\t\t\t\t\t\t<th class=\"hidden-480\">合同数</th>
\t\t\t\t\t\t<th class=\"hidden-480\">合同金额</th>
\t\t\t\t\t\t<th class=\"hidden-480\">收款</th>

\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"sendListList\">

\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t<div style=\"background:#e6ecf2;\">
\t\t\t<div class=\"row\" style=\"position: relative;\">
\t\t\t\t<div style=\"background: #fff; margin-bottom: 0px; height: 194px; padding-top: 10px; padding-left:0px; box-shadow: 0px 5px 15px 0 rgba(0, 0, 0, 0.1);\" class=\"col-sm-6\">
\t\t\t\t\t<ul class=\"row businessCon\">
\t\t\t\t\t\t<li url='?url=alltask&i=0-2-1&type=1' kind='10'>
\t\t\t\t\t\t\t<div>新增任务</div>
\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li url='?url=alltask&i=0-2-1&type=1' kind='1'>
\t\t\t\t\t\t\t<div>待办任务</div>
\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li url='?url=contracts&i=0-3-0&type=1' kind='2'>
\t\t\t\t\t\t\t<div>续签合同</div>
\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li url='?url=lackOfrecord&i=0-5-0&type=1' kind='3'>
\t\t\t\t\t\t\t<div>欠款合同</div>
\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li url='?url=lackOfrecord&i=0-5-0&type=1' kind='3'>
\t\t\t\t\t\t\t<!--//?url=collectionRecord&i=0-5-1&type=1-->
\t\t\t\t\t\t\t<div>欠款金额</div>
\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"row businessCon\">
\t\t\t\t\t\t<li url='?url=schedule&i=0-2-7&type=1' kind='5'>
\t\t\t\t\t\t\t<div>待办日程</div>
\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li url='?url=schedule&i=0-2-7&type=1' kind='6'>
\t\t\t\t\t\t\t<div>逾期日程</div>
\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li url='?url=contacts&i=0-2-5&type=1' kind='7'>
\t\t\t\t\t\t\t<div>待补资料</div>
\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li url='?url=accountSales&i=0-2-3&type=1' kind='8'>
\t\t\t\t\t\t\t<div>待办线索</div>
\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li url='?url=accountSales&i=0-2-3&type=1' kind='9'>
\t\t\t\t\t\t\t<div>逾期线索</div>
\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6\" style=\"padding-right:0; padding-top: -20px; padding-left: 2px;\">
\t\t\t\t\t<div style=\"width:100%;height:194px;padding:15px 15px;  background:#fff; \">
\t\t\t\t\t\t<div style=\"font-size:16px;height: 52px; line-height: 52px;\">
\t\t\t\t\t\t\t最新公告
\t\t\t\t\t\t\t<a href=\"javascript:;\" title=\"查看更多\" id=\"showMore\" style=\"float:right;font-size:20px;color:#999;margin-bottom: 10px; \"><span class=\"fa fa-bars\"></span</a>
\t\t\t\t\t\t\t<a href=\"javascript:;\" title=\"添加公告\"  id=\"addBtn\" style=\"float:right;font-size:20px;color:#999; margin-right: 20px;\"><span contentAuthority=\"87\" class=\"fa fa-plus\"></span></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div style=\"height:140px;text-align:left;\">
\t\t\t\t\t\t\t<ul style=\"list-style: none; width: 100%;\" class=\"noticeCon\">

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\" style=\"position: relative;\" id=\"bottom\">
\t\t\t\t<!--个人助手 -->
\t\t\t\t<div style=\"padding:10px 20px 20px 20px;background:#fff; height: 100%; border-top:1px solid #e4ebf3; float: left;  width: 50%;\" class=\"\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<ul class=\"helpers _line\" style=\"list-style-type:none; margin-left:0;border-bottom:1px solid #f5f5f5;height:30px;\">
\t\t\t\t\t\t\t<li class=\"active\" style=\"float:left;\">
\t\t\t\t\t\t\t\t<a style=\"text-decoration:none;\" href=\"#saleHelper\">
\t\t\t\t\t\t\t\t\t销售助手
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\" style=\"float:left;\">
\t\t\t\t\t\t\t\t<a style=\"text-decoration:none;\" href=\"#serviceHelper\">
\t\t\t\t\t\t\t\t\t服务助手
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<div style=\"padding-top:10px\" class=\"indexContent\" id=\"personal\">
\t\t\t\t\t\t\t<!-- 个人销售助手 -->
\t\t\t\t\t\t\t<div id=\"saleHelper\">
\t\t\t\t\t\t\t\t<div style=\"font-language-override: 12px;line-height:24px;\">
\t\t\t\t\t\t\t\t\t<select style=\"height:24px;font-size:12px;\" title=\"time\">
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">今日</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"2\">昨日</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"3\" selected=\"selected\">近7日</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"4\">近30日</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"5\">本月</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"6\">上月</option>
\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t<select title=\"employees\" id=\"sale\" style=\"background:#ccecff;margin-left:10px;width:80px;font-size:12px;height:24px;\">
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<!-- jjjjjjjj -->
\t\t\t\t\t\t\t\t\t<select style=\"background:#ccecff;margin-left:10px;width:80px;font-size:12px;height:24px;\" title=\"url\">

\t\t\t\t\t\t\t\t\t\t<option value=\"seaOfclients&i=0-2-2&type=1\" kind=\"8\" kname=\"customer\">公海</option>

\t\t\t\t\t\t\t\t\t\t<option value=\"contacts&i=0-2-5&type=1\" kind=\"9\" kname=\"contact\">客户</option>

\t\t\t\t\t\t\t\t\t\t<option value=\"opportunity&i=0-2-8&type=1\" kind=\"10\" kname=\"business\">商机</option>

\t\t\t\t\t\t\t\t\t\t<option value=\"visit&i=0-2-9&type=1\" kind=\"11\" kname=\"visit\">拜访</option>

\t\t\t\t\t\t\t\t\t\t<option value=\"accountSales&i=0-2-3&type=1\" kind=\"12\" kname=\"sales\">线索</option>

\t\t\t\t\t\t\t\t\t\t<option value=\"contracts&i=0-3-0&type=1\" kind=\"13\" kname=\"contract\">合同</option>

\t\t\t\t\t\t\t\t\t\t<option value=\"contracts&i=0-3-0&type=1\" kind=\"15\" kname=\"contract_money\">合同欠款</option>

\t\t\t\t\t\t\t\t\t\t<option value=\"collectionRecord&i=0-5-1&type=1\" kind=\"14\" kname=\"payment\">收款</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<button style=\"border:none;background:#ccecff;margin-left:10px;width:40px;height:24px;\" class=\"details\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-list-alt\" title=\"查看选中者客户公海的创建信息\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button style=\"background:#ccecff;width:40px;height:24px;border:none;\" title=\"设置个人目标\" contentAuthority=\"88\" class=\"setgoals sale\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-wrench\"></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<div style=\"display:none; float: right; margin-left:10px;position:relative; margin-right: 90px;\">

\t\t\t\t\t\t\t\t\t\t<div class=\"goals\" style=\"\">

\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<label>公海</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input title=\"customer\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<label>客户</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input title=\"contact\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<label>商机</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input title=\"business\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<label>拜访</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input title=\"visit\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<label>线索</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input title=\"sales\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<label>合同</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input title=\"contract\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<label>欠款</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input title=\"contract_money\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<label>收款</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input title=\"payment\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button style=\"background:#ccecff;width:40px;height:24px;border:none;\" class=\"assistant\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-table\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<span style=\"float:right; margin-right:5px;font-size:12px;\">
\t\t\t\t\t\t\t\t\t<label>目标</label>
\t\t\t\t\t\t\t\t\t<span style=\"color: #1577e4;\" class=\"totalgoal\">45</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span style=\"font-size:12px;float:right; margin-left: 5px;\">
\t\t\t\t\t\t\t\t\t<label>已完成</label>
\t\t\t\t\t\t\t\t\t<span style=\"color: #1dd600;\" class=\"f_totalgoal\">20</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span style=\"font-size:12px;float:right; margin-left: 5px;\">
\t\t\t\t\t\t\t\t\t<label>未完成</label>
\t\t\t\t\t\t\t\t\t<span style=\"color: #d60000;\" class=\"no_finish\">25</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<!-- <button style=\"float:right;border:none;background:#ccecff;margin-left:10px;height:24px;width:80px;\">客户</button> -->
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"line_\" id=\"line\" style=\" height:300px\">

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- 个人服务助手 -->
\t\t\t\t\t\t\t<div id=\"serviceHelper\" style=\"display:none;\">
\t\t\t\t\t\t\t\t<div style=\"font-language-override: 12px;line-height:24px;\">
\t\t\t\t\t\t\t\t\t<select style=\"height:24px;font-size:12px;\" title=\"time\">
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">今日</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"2\">昨日</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"3\" selected=\"selected\">近7日</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"4\">近30日</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"5\">本月</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"6\">上月</option>
\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t<select title=\"employees\" id=\"service\" style=\"background:#ccecff;margin-left:10px;width:80px;font-size:12px;height:24px;\">
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<select style=\"background:#ccecff;margin-left:10px;width:80px;font-size:12px;height:24px;\" title=\"url\">
\t\t\t\t\t\t\t\t\t\t<option value=\"alltask&i=0-2-1&type=1\" kind=\"7\" kname=\"task\">任务</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"entire&i=0-1-3&type=1\" kind=\"2\" kname=\"zd\">整单</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"account&i=0-1-4&type=1\" kind=\"3\" kname=\"jz\">记账</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"customer&i=0-1-5&type=1\" kind=\"4\" kname=\"zf\">客服</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"tax&i=0-1-6&type=1\" kind=\"5\" kname=\"bs\">报税</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"single&i=0-1-7&type=1\" kind=\"6\" kname=\"sd\">送单</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"getList&i=0-1-2&type=1\" kind=\"1\" kname=\"shd\">收单</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<button style=\"border:none;background:#ccecff;margin-left:10px;width:40px;height:24px;\" class=\"details\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-list-alt\" title=\"查看选中者客户公海的创建信息\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button style=\"background:#ccecff;width:40px;height:24px;border:none;\" contentAuthority=\"88\" class=\"setgoals ser\">
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-wrench\" title=\"设置个人目标\"></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<div style=\"display:none; float: right; margin-left:10px;position:relative; margin-right: 90px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"service goals _goals\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<label>任务</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input title=\"task\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<label>整单</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input title=\"zd\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<label>记账</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input title=\"jz\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<label>客服</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input title=\"zf\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<label>报税</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input title=\"bs\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div style=\"height:px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>送单</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input title=\"sd\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div style=\"height:px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>收单</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input title=\"shd\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<span style=\"float:right; margin-right:5px;font-size:12px;\">
\t\t\t\t\t\t\t\t\t<label>目标</label>
\t\t\t\t\t\t\t\t\t<span style=\"color: #1577e4;\" class=\"totalgoal\">45</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span style=\"float:right;margin-right:5px;font-size:12px;\">
\t\t\t\t\t\t\t\t\t<label>已完成</label>
\t\t\t\t\t\t\t\t\t<span style=\"color: #1dd600;\" class=\"f_totalgoal\">20</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span style=\"float:right;margin-right:5px;font-size:12px;\">
\t\t\t\t\t\t\t\t\t<label>未完成</label>
\t\t\t\t\t\t\t\t\t<span style=\"color: #d60000;\" class=\"no_finish\">25</span>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<!-- <button style=\"float:right;border:none;background:#ccecff;margin-left:10px;height:24px;width:80px;\">客户</button> -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"line_\" style=\"height:300px; ,''\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- 公司助手 -->
\t\t\t\t<div class=\"\" style=\"height:410px; padding-left: 2px; height: 100%; float: left; width: 50%;\">
\t\t\t\t\t<div style=\"background:#fff; height:410px; height: 100%; padding:10px 20px 20px 20px; border-top:1px solid #e4ebf3;\">
\t\t\t\t\t\t<ul class=\"helpers  _histogram\" style=\"list-style-type:none;margin-left:0;border-bottom:1px solid #f5f5f5;height:30px;\">
\t\t\t\t\t\t\t<li class=\"active\" style=\"float:left;\">
\t\t\t\t\t\t\t\t<a style=\"text-decoration:none;\" href=\"#saleHelper1\">
\t\t\t\t\t\t\t\t\t销售排名\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\" style=\"float:left;\">
\t\t\t\t\t\t\t\t<a style=\"text-decoration:none;\" href=\"#serviceHelper1\">
\t\t\t\t\t\t\t\t\t服务排名
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<div style=\"padding-top:10px\" class=\"indexContent\" id=\"company\">
\t\t\t\t\t\t\t<div id=\"saleHelper1\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<select style=\"height:24px;font-size:12px;\" title=\"time\">
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">今日</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"2\">昨日</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"3\" selected=\"selected\">近7日</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"4\">近30日</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"5\">本月</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"6\">上月</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<select style=\"background:#ccecff;height:24px;width:80px;font-size:12px;margin-left:15px;position:relative;\" title=\"url\">

\t\t\t\t\t\t\t\t\t\t<option value=\"seaOfclients&i=0-2-2&type=1\" kind=\"8\">公海</option>

\t\t\t\t\t\t\t\t\t\t<option value=\"contacts&i=0-2-5&type=1\" kind=\"9\">客户</option>

\t\t\t\t\t\t\t\t\t\t<option value=\"opportunity&i=0-2-8&type=1\" kind=\"10\">商机</option>

\t\t\t\t\t\t\t\t\t\t<option value=\"visit&i=0-2-9&type=1\" kind=\"11\">拜访</option>

\t\t\t\t\t\t\t\t\t\t<option value=\"accountSales&i=0-2-3&type=1\" kind=\"12\">线索</option>

\t\t\t\t\t\t\t\t\t\t<option value=\"contracts&i=0-3-0&type=1\" kind=\"13\">合同</option>

\t\t\t\t\t\t\t\t\t\t<option value=\"!contracts&i=0-3-0&type=1\" kind=\"15\">欠款</option>

\t\t\t\t\t\t\t\t\t\t<option value=\"collectionRecord&i=0-5-1&type=1\" kind=\"14\">收款</option>
\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t<button style=\"border:none;background:#ccecff;margin-left:10px;height:24px;width:40px;\" class=\"details\">
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-list-alt\" title=\"查看选中者客户公海的创建信息\"></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"histogram\" style=\"width: 100%;height:300px;\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"serviceHelper1\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<select style=\"height:24px;font-size:12px;\" title=\"time\">
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">今日</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"2\">昨日</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"3\" selected=\"selected\">近7日</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"4\">近30日</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"5\">本月</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"6\">上月</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<select style=\"background:#ccecff;height:24px;width:80px;font-size:12px;margin-left:15px;position:relative;\" title=\"url\">
\t\t\t\t\t\t\t\t\t\t<option value=\"alltask&i=0-2-1&type=1\" kind=\"7\">任务</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"entire&i=0-1-3&type=1\" kind=\"2\">整单</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"account&i=0-1-4&type=1\" kind=\"3\">记账</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"customer&i=0-1-5&type=1\" kind=\"4\">客服</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"tax&i=0-1-6&type=1\" kind=\"5\">报税</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"single&i=0-1-7&type=1\" kind=\"6\">送单</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"getList&i=0-1-2&type=1\" kind=\"1\">收单</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<button style=\"border:none;background:#ccecff;margin-left:10px;height:24px;width:40px;\" class=\"details\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-list-alt\" title=\"查看选中者任务的创建信息\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"histogram\" style=\"width: 100%;height:300px;\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
\t<div class=\"label_popup\" id=\"feedBack\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
        box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t<span style=\"display: inline-block;\">发送公告</span>
\t\t\t\t<a href=\"javascript:;\" class=\"close_label pos-rel\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t</div>
\t\t\t<div style=\"padding: 15px;\">
\t\t\t\t<input type=\"text\" style=\"width:calc(100% - 60.2px);\" style=\"margin: auto;\" id=\"labelName\" />
\t\t\t\t<button class=\"hold\">发送</button>
\t\t\t\t<hr>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"label_popup\" id=\"feedBack1\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;\">
\t\t\t<!--box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);-->
\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t<span style=\"display: inline-block;\">编辑公告</span>
\t\t\t\t<a href=\"javascript:;\" class=\"close_label pos-rel\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t</div>
\t\t\t<div style=\"padding: 15px;\">
\t\t\t\t<input type=\"text\" style=\"width:calc(100% - 60.2px);\" style=\"margin: auto;\" id=\"labelName\" />
\t\t\t\t<button class=\"hold\">保存</button>
\t\t\t\t<hr>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"notice custom_table\" style=\"display:none;position:absolute;z-index:1024;width:70%;height: 300px; background: #fff;float:right;padding: 20px 20px;margin-top:-700px;margin: -700px 70px 0 \">
\t\t<div class=\"col-xs-12\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"widget-header widget-header-small\" style=\"padding-left:0;text-align: center;\">
\t\t\t\t\t<span style=\"font-size:16px;line-height: 45px;text-indent:10em;text-align: center;\" class=\"title\">公告列表</span>
\t\t\t\t</div>
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t<th class=\"hidden-480\">发布时间</th>
\t\t\t\t\t\t\t<th class=\"hidden-480\">发布人</th>
\t\t\t\t\t\t\t<th class=\"hidden-480\">公告内容</th>
\t\t\t\t\t\t\t<th class=\"hidden-480\">操作</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<tbody id=\"_dataList\">
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>

\t

\t<script src=\"/resource/adimin/assets/js/clipboard.min.js\"></script>

\t";
        // line 624
        $this->loadTemplate("admin/mark.html", "admin/home.html", 624)->display($context);
        // line 625
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script type=\"text/javascript\">
\t\$(function() {
\t\t
\t\tvar mbData = {};  //目标date
\t\t//内容区域权限样式设置
\t\tcs.getNodes([87, 88]);
        setHeight();

\t\tfunction setHeight() {
\t\t\tvar dHeight = \$(document.body).height();
\t\t\t\$('#bottom').css('height', dHeight - 174 + 'px');
\t\t\t\$('.line_').parents('.row').height();
\t\t\t\$('.line_').css('height', (\$('.line_').parents('.row').height() - 100) + 'px');
\t\t\t\$('.histogram').css('height', (\$('.line_').parents('.row').height() - 100) + 'px');
\t\t}

\t\t//展开 | 隐藏设置目标选项
\t\tfunction getInfo() {
\t\t\t//加载目标值
\t\t\t\$(this).next().find(\"input\").each(function() {
\t\t\t\t\$(this).val(data[\$(this).attr(\"title\")]);
\t\t\t});
\t\t}
\t\t
\t\t\$('[title=\"url\"]').change(function(){
\t\t\tvar text = \$(this).find('option:selected').text();
\t\t\t\$(this).next().find('span').attr('title',\"查看选中者\"+text+\"的创建信息\")
\t\t})

\t\t\$('.in').click(function() {
\t\t\t\$('.notice').hide();
\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\$('#showMore').removeClass('active').css('z-index', '');
\t\t});

\t\t//查询公告
\t\tnoticeInfo();

\t\tfunction noticeInfo() {
\t\t\tvar emps = allemp();
\t\t\tvar data;
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_notice/list',
\t\t\t\tmethod: 'get',
\t\t\t\tdata: {
\t\t\t\t\tlimit: 3
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tdata = res.data;
\t\t\t\t\tvar li = '';
\t\t\t\t\tif(data.length > 0) {
\t\t\t\t\t\tvar length = data.length < 3 ? data.length : 3;
\t\t\t\t\t\tfor(var i = 0; i < length; i++) {
\t\t\t\t\t\t\tvar ename;
\t\t\t\t\t\t\tfor(var j in emps) {
\t\t\t\t\t\t\t\tif(data[i]['nm_notice.user'] == emps[j]['bmm_employees.id']) {
\t\t\t\t\t\t\t\t\tename = emps[j]['bmm_employees.name'];
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tli += `<li  data-id=\"\${data[i]['nm_notice.id']}\"  title=\"\${data[i]['nm_notice.content']}\" style=\"height: 36px; padding-right:10px; width: 100%; cursor: pointer;overflow: hidden; font-size: 14px; color: #333; line-height: 36px; padding-left: 20px;\"><span style=\"width:250px;float:left; margin-right:50px;\"> \${data[i]['nm_notice.content']}</span> <span style=\"float:right; \">\${cs.getNowTime(data[i]['nm_notice.create_at'])} </span></li>`;
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\tli += `<div style=\"text-align:center;height:100px;line-height:80px\">暂无公告</div>`
\t\t\t\t\t}
\t\t\t\t\t\$('.noticeCon').html(li);

\t\t\t\t\tdelnotice();
\t\t\t\t\teditnotice();
\t\t\t\t}
\t\t\t})
\t\t}

\t\tgetuserasss();

\t\tfunction getuserasss() {
\t\t\t\$('.assistant').click(function() {
\t\t\t\t\$('.sendList').show();
\t\t\t\t\$('.in').addClass('modal-backdrop');
\t\t\t\t\$(this).addClass('active').css('z-index', '1041');
\t\t\t\tvar val = \$('#sale').val();
\t\t\t\tconsole.log(val);
\t\t\t\t//showMark(\"#template4\");
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: \"/api/api_home/get_user_all_assistant\",
\t\t\t\t\tdata: {
\t\t\t\t\t\tuser: val
\t\t\t\t\t},
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar html = \"\";
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\thtml += `<tr }\">
\t\t\t\t\t\t\t<td>\${data[i]['month']}</td>
\t\t\t\t\t\t\t<td>\${data[i]['name']}</td>
\t\t\t\t\t\t\t\t\t\t<td>\${data[i]['task']}</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td>\${data[i]['zd']}</td>
\t\t\t\t\t\t\t\t\t\t<td>\${data[i]['jz']}</td>
\t\t\t\t\t\t\t\t\t\t<td>\${data[i]['zf']}</td>
\t\t\t\t\t\t\t\t\t\t<td>\${data[i]['bs']}</td>
\t\t\t\t\t\t\t\t\t\t<td>\${data[i]['sd']}</td>
\t\t\t\t\t\t\t\t\t\t<td>\${data[i]['shd']}</td>
\t\t\t\t\t\t\t\t\t\t<td>\${data[i]['customer']}</td>
\t\t\t\t\t\t\t\t\t\t<td>\${data[i]['contact']}</td>
\t\t\t\t\t\t\t\t\t\t<td>\${data[i]['business']}</td>
\t\t\t\t\t\t\t\t\t\t<td>\${data[i]['visit']}</td>
\t\t\t\t\t\t\t\t\t\t<td>\${data[i]['sales']}</td>
\t\t\t\t\t\t\t\t\t\t<td>\${data[i]['contract']}</td>
\t\t\t\t\t\t\t\t\t\t<td>\${data[i]['contract_money']}</td>
\t\t\t\t\t\t\t\t\t\t<td>\${data[i]['payment']}</td>
\t\t\t\t\t\t\t</tr>`;
\t\t\t\t\t\t}
\t\t\t\t\t\t\$(\"#sendListList\").html(html);
\t\t\t\t\t\t
\t\t\t\t\t\t\$('.in').unbind('click').click(function() {
\t\t\t\t\t\t\t\$('.sendList').hide();
\t\t\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\t\t\$('#singleList').removeClass('active').css('z-index', '');
\t\t\t
\t\t\t\t\t\t\t\$(this).off('click');
\t\t\t\t\t\t});
\t\t\t\t\t}

\t\t\t\t})
\t\t\t\t
\t\t\t})
\t\t}

\t\tfunction delnotice() {
\t\t\t\$('.delnotice').click(function() {
\t\t\t\tvar id = \$(this).parent().attr('data-id') || \$(this).parents('tr').attr('data-id');
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: \"/api/api_notice/del \",
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tid: id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tnoticeInfo();
\t\t\t\t\t\t//\t\t\t\t\t\tykp.prompt('删除成功');
\t\t\t\t\t\t\$('.notice').hide();
\t\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\t\$(this).removeClass('active').css('z-index', '');
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})

\t\t}

\t\tfunction editnotice() {
\t\t\t\$('.editnotice').click(function() {
\t\t\t\tvar id = \$(this).parent().attr('data-id') || \$(this).parents('tr').attr('data-id');
\t\t\t\t\$('#feedBack1').show();
\t\t\t\t\$('#feedBack1 #labelName').val(\$(this).parent().attr('title') || \$(this).parents('tr').attr('data-content'));
\t\t\t\t\$('#feedBack1 .hold').click(function() {
\t\t\t\t\tvar approve_reply = \$('#feedBack1 #labelName').val().trim();
\t\t\t\t\tif(approve_reply == '') {
\t\t\t\t\t\tykp.prompt('不能为空！');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddnotice(approve_reply, id); //执行添加
\t\t\t\t\t\$(this).unbind('click', arguments.callee);
\t\t\t\t\t\$('#feedBack1').find('input').val(\"\");
\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t})
\t\t\t\t\$('.close_label').click(function() {
\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t})

\t\t\t\tnoticeInfo();
\t\t\t})

\t\t}

\t\t//添加公告
\t\tfunction addnotice(content, id) {
\t\t\tvar data = {
\t\t\t\tcontent: content
\t\t\t}
\t\t\tif(id) {
\t\t\t\tdata.id = id;
\t\t\t}
\t\t\tykp.doAjax({
\t\t\t\turl: id ? '/api/api_notice/edit' : '/api/api_notice/add',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: data,
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tnoticeInfo();
\t\t\t\t\t\$('.notice').hide();
\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\$(this).removeClass('active').css('z-index', '');
\t\t\t\t}
\t\t\t})
\t\t}

\t\ttitleTask();

\t\tfunction titleTask() {
\t\t\t\$('.businessCon li').click(function() {
\t\t\t\tvar nums = \$(this).find('div').eq(1).text();
\t\t\t\tif(!nums || nums.trim() == '0') {
\t\t\t\t\tykp.prompt('您没有需要处理的任务');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tvar _url = \$(this).attr('url');
\t\t\t\tvar kind = \$(this).attr('kind');
\t\t\t\tykp.setCookie('titleTask', kind);
\t\t\t\tskPage(_url);
\t\t\t\t//window.location=_url;
\t\t\t})
\t\t}

\t\tgetLeft(); //获取左上方数据；
\t\tfunction getLeft() {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_home/get_left',
\t\t\t\tmethod: 'post',
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tvar lis = \$('.businessCon li');
                    lis.eq(0).find('div').eq(1).text(data['new_task']);
\t\t\t\t\tlis.eq(1).find('div').eq(1).text(data['not_task']);
\t\t\t\t\tlis.eq(2).find('div').eq(1).text(data['xu_contract']);
\t\t\t\t\tlis.eq(3).find('div').eq(1).text(data['num_contract']);
\t\t\t\t\tlis.eq(4).find('div').eq(1).text(data['money_contract'] ?data['money_contract']:0);
\t\t\t\t\tlis.eq(5).find('div').eq(1).text(data['deal_plan']);
\t\t\t\t\tlis.eq(6).find('div').eq(1).text(data['not_plan']);
\t\t\t\t\tlis.eq(7).find('div').eq(1).text(data['ws_customer']);
\t\t\t\t\tlis.eq(8).find('div').eq(1).text(data['log_customer']);
\t\t\t\t\tlis.eq(9).find('div').eq(1).text(data['not_log']);
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//设置目标
\t\tsetgoals();
\t\tvar left;

\t\tfunction setgoals() {
\t\t\t\$('.setgoals').click(function() {
\t\t\t\tvar id = \$(this).parents('div').find('[title=\"employees\"]').val();
\t\t\t\tvar user = JSON.parse(ykp.getCookie('userinfo'));
\t\t\t\t\$(this).next().toggle();
\t\t\t\tvar inputs = \$(this).next().find(\"input\");
\t\t\t\tvar user_id = id;
                var type = \$(this).hasClass('ser') ? 2 : 1;
\t\t\t\tleft = \$(this).position();
\t\t\t\tvar width = \$('.indexContent').css('width');
\t\t\t\t\$(this).next().css('right', (parseInt(width) - 400) + 'px');
\t\t\t\tleft = left.left;
\t\t\t\tif(\$(this).next().is(':hidden')) {
                   //var mbData.user_id = user_id
\t\t\t\t\tvar mbData = {
\t\t\t\t\t\tuser_id: user_id
\t\t\t\t\t};
\t\t\t\t\tfor(var i = 0; i < inputs.length; i++) {
\t\t\t\t\t\tvar value = \$(inputs[i]).val().trim();
                        if(\$(inputs[i]).attr(\"title\") != 'contract_money') {
\t\t\t\t\t\t\tif(value != '') {
\t\t\t\t\t\t\t\tmbData[\$(inputs[i]).attr(\"title\")] = value;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tif(value != '') {
\t\t\t\t\t\t\t\tif(!isNaN(value) && value > 0) {
\t\t\t\t\t\t\t\t\tmbData[\$(inputs[i]).attr(\"title\")] = value;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
                    //保存目标
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_home/change_assistant',
\t\t\t\t\t\tdata: mbData,
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tykp.prompt('目标编辑成功');
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t\t//保存目标值
\t\t\t\t} else {
\t\t\t\t\t
\t\t\t\t\tleft = \$(this).position('right');
\t\t\t\t\tfindGoalById(user_id, type);
\t\t\t\t}
\t\t\t});
\t\t}
\t\t\$(window).resize(function() {
\t\t\tvar width = \$('.indexContent').css('width');

\t\t\t\$('.setgoals').next().css('right', (parseInt(width) - 400) + 'px');

\t\t})

\t\t//查某人当月所有目标---type：1为销售助手,2为服务助手
\t\tfunction findGoalById(id, type) {
\t\t\tvar inputs = \$('#saleHelper,#serviceHelper').find(\"input\");
\t\t\t//通过id查所有目标并加载
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_home/info_next_assistant',
\t\t\t\tdata: {
\t\t\t\t\tuser_id: id
\t\t\t\t},
\t\t\t\tmethod: 'post',
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tmbData = data;
\t\t\t\t\tif(type == 1) {
\t\t\t\t\t\t\$('[title=\"customer\"]').val(data['customer']);
\t\t\t\t\t\t\$('[title=\"contact\"]').val(data['contact']);
\t\t\t\t\t\t\$('[title=\"business\"]').val(data['business']);
\t\t\t\t\t\t\$('[title=\"visit\"]').val(data['visit']);
\t\t\t\t\t\t\$('[title=\"sales\"]').val(data['sales']);
\t\t\t\t\t\t\$('[title=\"contract\"]').val(data['contract']);
\t\t\t\t\t\t\$('[title=\"contract_money\"]').val(data['contract_money']);
\t\t\t\t\t\t\$('[title=\"payment\"]').val(data['payment']);
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('[title=\"task\"]').val(data['task']);
\t\t\t\t\t\t\$('[title=\"zd\"]').val(data['zd']);
\t\t\t\t\t\t\$('[title=\"jz\"]').val(data['jz']);
\t\t\t\t\t\t\$('[title=\"zf\"]').val(data['zf']);
\t\t\t\t\t\t\$('[title=\"bs\"]').val(data['bs']);
\t\t\t\t\t\t\$('[title=\"sd\"]').val(data['sd']);
\t\t\t\t\t\t\$('[title=\"shd\"]').val(data['shd']);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//得到所有员工
\t\tfunction allemp() {
\t\t\tvar emps;
\t\t\tvar data = {
//\t\t\t\tfilter: 'bmm_employees.up_user = ' + ykp.getCookie('uid') + ' or bmm_employees.id = ' + ykp.getCookie('uid')
\t\t\t}
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_employees/get_up_user',
\t\t\t\tmethod: 'get',
\t\t\t\tdata: data,
\t\t\t\tasync: false,
\t\t\t\tsuccess: function(res) {
\t\t\t\t\temps = res.data;
\t\t\t\t\tvar option = '';
\t\t\t\t\tfor(var i in emps) {
\t\t\t\t\t\toption += `<option value=\"\${emps[i]['id']}\">
\t\t\t\t\t\t\${emps[i]['name']}
                \t\t</option>`;
\t\t\t\t\t}
\t\t\t\t\t\$(\"[title='employees']\").html(option).val(ykp.getCookie('uid'));
\t\t\t\t}
\t\t\t})
\t\t\treturn emps;
\t\t}

\t\t//查看明细表
\t\tgetdetails()

\t\tfunction getdetails() {
\t\t\t\$(\".details\").click(function() {
\t\t\t\t//跳转的页面
\t\t\t\tvar _url = \$(this).parent().find(\"[title='url']\").val();
\t\t\t\t//负责人
\t\t\t\tvar aid = \$(this).parent().find('[title=\"employees\"] option:selected').text().trim();
\t\t\t\tvar aid_2 = \$(this).parent().find('[title=\"employees\"]').val();
\t\t\t\t//时间
\t\t\t\tvar time = \$(this).parent().find('[title=\"time\"]').val();
\t\t\t\tif(_url.indexOf('!') != -1) {
\t\t\t\t\t_url.replace('!', '');
\t\t\t\t}
\t\t\t\tif(aid == undefined) {
\t\t\t\t\taid = '';
\t\t\t\t}
\t\t\t\tif(aid_2 == undefined) {
\t\t\t\t\taid_2 = '';
\t\t\t\t}
\t\t\t\t//ykp.setCookie('_url',_url, (1 / 24));
                ykp.setCookie('aid', aid, (1 / 24));
                ykp.setCookie('aid_2', aid_2, (1 / 24));
                ykp.setCookie('time', time, (1 / 24));
\t\t\t\t//window.location='?url='+_url;
\t\t\t\tsetTimeout(function () {
                    skPage('?url=' + _url);
                })

\t\t\t})
\t\t}
\t\t\$(\".businessCon li\").mouseover(function() {
\t\t\t\$(this).addClass(\"titleMouse\");
\t\t})
\t\t\$(\".businessCon li\").mouseout(function() {
\t\t\t\$(this).removeClass(\"titleMouse\");
\t\t})
\t\t//查看所有公告
\t\tshowMore();

\t\tfunction showMore() {
\t\t\t\$(\"#showMore\").click(function() {
\t\t\t\tif(\$(this).hasClass('active')) {
\t\t\t\t\t\$('.notice').hide();
\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\$(this).removeClass('active').css('z-index', '');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\t\$('.notice').show();
\t\t\t\t\$('.in').addClass('modal-backdrop');
\t\t\t\t\$(this).addClass('active').css('z-index', '1042');
\t\t\t\t\$('.notice').addClass('active').css('z-index', '1042');
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_notice/list',
\t\t\t\t\tmethod: 'get',
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tdata = res.data;
\t\t\t\t\t\tvar emps = allemp();
\t\t\t\t\t\t// console.log(emps);
\t\t\t\t\t\tvar tr = '';
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\ttr += `<tr class=\"thColor\" data-id='\${data[i]['nm_notice.id']}' data-content=\"\${data[i]['nm_notice.content']}\">
\t\t\t\t\t\t\t\t<td class=\"hidden-480\">\${cs.getNowTime(data[i]['nm_notice.create_at'],true)}</td>
\t\t\t\t\t\t\t\t<td class=\"hidden-480\">\${data[i]['bmm_employees.name']}</td>
\t\t\t\t\t\t\t\t<td class=\"hidden-480\" title=\"\${data[i]['nm_notice.content']}\"><label style=\"width:450px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;\">\${data[i]['nm_notice.content']}</label></td>
\t\t\t\t\t\t\t\t<td><label  class=\"pos-rel\"><a style=\"margin-right: 6px;\" title=\"删除\" class=\"delnotice btRed\"><i class=\"fa fa-trash-o\"></i></a><a class=\"editnotice btBlue\" title=\"编辑\" style=\"margin-right: 10px;\" ><i class=\"fa fa-pencil-square-o\"></i></a></label></td>
\t\t\t\t\t\t\t</tr>`;
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#_dataList').html(tr);
\t\t\t\t\t\tdelnotice();
\t\t\t\t\t\teditnotice();
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})
\t\t}

\t\t//公告栏显示隐藏
\t\t\$('#addBtn').click(function() {
\t\t\t\$('#feedBack').show();
\t\t\t\$('#feedBack .hold').click(function() {
\t\t\t\tvar approve_reply = \$('#labelName').val().trim();
\t\t\t\tif(approve_reply == '') {
\t\t\t\t\tykp.prompt('不能为空！');
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\taddnotice(approve_reply); //执行添加
\t\t\t\t\$(this).unbind('click', arguments.callee);
\t\t\t\t\$('#feedBack').find('input').val(\"\");
\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t})
\t\t\t\$('.close_label').click(function() {
\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t})
\t\t})

\t\t//鼠标移动到table相应的th时,饼图切换至相应数据
\t\t\$('.indexContent th').mouseover(function() {
\t\t\tif(\$(this).index() == 0) {
\t\t\t\treturn;
\t\t\t}
\t\t\t\$(this).css('cursor', 'pointer');
\t\t\tif(\$(this).hasClass('current')) {
\t\t\t\treturn;
\t\t\t}
\t\t\t\$('.indexContent .current').removeClass('current');
\t\t\t\$(this).addClass('current');
\t\t\tvar idss = \$('.helpers .active').find('a').attr('href');
\t\t\tgetPieChart(idss + ' .pie');
\t\t});

\t\t//工作助手切换
\t\tliOnChange();

\t\tfunction liOnChange() {
\t\t\t\$('.helpers li').click(function(e) {
\t\t\t\tif(\$(this).hasClass('active')) {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$(this).addClass('active').siblings().removeClass('active');
\t\t\t\tvar idss = \$(this).find('a').attr('href');
\t\t\t\t\$(idss).show().siblings().hide();
\t\t\t\tif(\$(this).index() == 1) {
\t\t\t\t\tvar user2 = \$(idss).find(\"[title='employees']\").val();
\t\t\t\t\tvar kname = \$(idss).find(\"[title='url'] option:selected\").attr('kname');
\t\t\t\t\tvar postData2 = {
\t\t\t\t\t\ttime: \$('#serviceHelper1').find(\"[title='time']\").val(),
\t\t\t\t\t\ttype: \$('#serviceHelper1').find(\"[title='url'] option:selected\").attr('kind')
\t\t\t\t\t}
\t\t\t\t\tif(idss == '#serviceHelper1') {
\t\t\t\t\t\tdoGetChart('/api/api_home/home_total_chart', postData2, kname, \$(idss));
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tpostData2['user'] = user2;
\t\t\t\t\tpostData2['time'] = \$('#serviceHelper').find(\"[title='time']\").val();
\t\t\t\t\tpostData2['type'] = \$('#serviceHelper').find(\"[title='url'] option:selected\").attr('kind')
\t\t\t\t\tdoGetChart('/api/api_home/home_chart', postData2, kname, \$(idss));
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//页面跳转
\t\tfunction skPage(urls) {
\t\t\tvar url_ = urls.split('&')[0].split('=')[1];
\t\t\t\$('#navBox #nav-list li').find('li[data-url=\"/admin/' + url_ + '\"]').click();
\t\t}

\t\t//下拉框改变时请求数据
\t\thelperOnChange();

\t\tfunction helperOnChange() {
\t\t\t\$(\"#serviceHelper select,#saleHelper select,#serviceHelper1 select,#saleHelper1 select\").change(function() {
\t\t\t\tvar parent = \$(this).parent().parent();
\t\t\t\tvar user = \$(parent).find(\"[title='employees']\").val();
\t\t\t\tvar kname = \$(parent).find(\"[title='url'] option:selected\").attr('kname');
\t\t\t\tvar posturl = '';
\t\t\t\tvar postData = {
\t\t\t\t\ttime: \$(parent).find(\"[title='time']\").val(),
\t\t\t\t\ttype: \$(parent).find(\"[title='url'] option:selected\").attr('kind')
\t\t\t\t}
\t\t\t\tif(user) {
\t\t\t\t\tpostData['user'] = user;
\t\t\t\t\tposturl = '/api/api_home/home_chart';
\t\t\t\t} else {
\t\t\t\t\tposturl = '/api/api_home/home_total_chart';
\t\t\t\t}
\t\t\t\tdoGetChart(posturl, postData, kname, parent);
\t\t\t})
\t\t}

\t\tvar user1 = \$('#saleHelper').find(\"[title='employees']\").val();
\t\tvar postData1 = {
\t\t\tuser: user1,
\t\t\ttime: 3,
\t\t\ttype: 8
\t\t}

\t\tvar postData2 = {
\t\t\ttime: 3,
\t\t\ttype: 8
\t\t}

\t\t//默认加载的个人
\t\tdoGetChart('/api/api_home/home_chart', postData1, 'customer', \$('#saleHelper'));
\t\t//默认加载的公司
\t\tdoGetChart('/api/api_home/home_total_chart', postData2, 'customer', \$('#saleHelper1'));

\t\tfunction doGetChart(posturl, postData, kname, selector) {
\t\t\tykp.doAjax({
\t\t\t\turl: posturl,
\t\t\t\tmethod: 'post',
\t\t\t\tdata: postData,
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tif(postData.user) {
\t\t\t\t\t\taddlineChart(res, '#' + selector.attr('id'), kname, postData.time);
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\taddHistogramChart(res, '#' + selector.attr('id'), kname, postData.time);
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//添加
\t\tfunction addlineChart(data, selector, kname, time) {
\t\t\tvar dat = data.data;
            var lastMonth = dat.lastWorkDay[1];
\t\t\tvar lastWeekend = dat.lastWorkDay[2]; //上月非工作日
\t\t\tvar thisMonth = dat.thisWorkDay[1];
\t\t\tvar thisWeekend = dat.thisWorkDay[2]; //上月非工作日
\t\t\tvar allDay = lastMonth;
\t\t\tvar thisDays = dat.chart; //区间内的总日期
\t\t\tvar thisWorkDays = []; //x轴日期数组*
\t\t\tvar finishData = []; //每日完成数组
\t\t\tvar lastTotal = dat.user.last[kname] == undefined ? 0 : dat.user.last[kname]; //该项上月总目标
\t\t\tvar thisTotal = dat.user.this[kname] == undefined ? 0 : dat.user.this[kname]; //该项本月总目标
\t\t\tvar lastp = Math.ceil(lastTotal / (dat.lastWorkDay[0] + dat.lastWorkDay[2].length)); //上月日均目标;
\t\t\tvar thisp = Math.ceil(thisTotal / (dat.thisWorkDay[0] + dat.thisWorkDay[2].length)); //本月日均目标;
\t\t\tvar lastData = [],
\t\t\t\tthisData = [],
\t\t\t\ttotalData = [],
\t\t\t\tnoFinishData = []; //待展示结果数组*
\t\t\tvar lastnum = 0; //上、本月区间工作日
\t\t\t//var date;//周几
\t\t\tfor(var i in lastWeekend) {
\t\t\t\tlastMonth.push(lastWeekend[i]);
\t\t\t}
\t\t\tfor(var i in thisWeekend) {
\t\t\t\tthisMonth.push(thisWeekend[i]);
\t\t\t}

\t\t\t//如果是今天
\t\t\tif(time == 1) {
\t\t\t\tthisWorkDays.push(cs.getNowTime(new Date().setHours(0, 0, 0, 0) / 1000).substring(5, 10));
\t\t\t\ttotalData.push(thisp);
\t\t\t\tfinishData.push(thisDays.num);
\t\t\t\tnoFinishData.push(totalData[0] - finishData[0]);
\t\t\t\t//date = new Date().getDay();
\t\t\t}
\t\t\t//如果是昨天
\t\t\tif(time == 2) {
\t\t\t\tvar today = cs.getNowTime(new Date().setHours(0, 0, 0, 0) / 1000);
\t\t\t\tvar yesterday = cs.getNowTime(new Date().setHours(0, 0, 0, 0) / 1000 - 86400);
\t\t\t\tthisWorkDays.push(yesterday.substring(5, 10))
\t\t\t\tif(today.substring(5, 7) == yesterday.substring(5, 7)) {
\t\t\t\t\ttotalData.push(thisp);
\t\t\t\t} else {
\t\t\t\t\ttotalData.push(lastp);
\t\t\t\t}
\t\t\t\tfinishData.push(thisDays.num);
\t\t\t\tnoFinishData.push(totalData[0] - finishData[0]);
\t\t\t\t//date = new Date(yesterday).getDay();
\t\t\t}

\t\t\t/*if (date=='0'||date=='6') {
\t\t\t\tykp.prompt('所查询日期不是工作日');
\t\t\t\tthisWorkDays = [];
\t\t\t\ttotalData = [];
\t\t\t\tfinishData = [];
\t\t\t\tnoFinishData = [];
\t\t\t}*/

\t\t\tif(time > 2) {
\t\t\t\t//得到展示日期
\t\t\t\tfor(var i in thisDays) {
\t\t\t\t\tthisWorkDays.push(thisDays[i].time.substring(5));
\t\t\t\t}

\t\t\t\tfor(var i in lastMonth) {
\t\t\t\t\tfor(var j in thisDays) {
\t\t\t\t\t\tif(lastMonth[i] == thisDays[j].time) {
\t\t\t\t\t\t\tlastnum++; //上月区间有几天
\t\t\t\t\t\t\t//thisWorkDays.push(thisDays[j].time.substring(5));//区间工作日数组2
\t\t\t\t\t\t\tfinishData.push(parseInt(thisDays[j].num)); //区间完成数数组3
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tfor(var i in thisMonth) {
\t\t\t\t\tallDay.push(thisMonth[i]);
\t\t\t\t}
\t\t\t\t//得到区间工作日
\t\t\t\tfor(var i in thisMonth) {
\t\t\t\t\tfor(var j in thisDays) {
\t\t\t\t\t\tif(thisMonth[i] == thisDays[j].time) {
\t\t\t\t\t\t\t//thisWorkDays.push(thisDays[j].time.substring(5));//区间工作日数组2
\t\t\t\t\t\t\tfinishData.push(parseInt(thisDays[j].num)); //区间完成数数组3
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t//添加上月区间日均目标列表
\t\t\t\tif(lastnum > 0) {
\t\t\t\t\tfor(var i = 0; i < lastnum; i++) {
\t\t\t\t\t\ttotalData.push(lastp);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t//得到总的日均数组
\t\t\t\tfor(var i = 0; i < finishData.length - lastnum; i++) {
\t\t\t\t\ttotalData.push(thisp); //
\t\t\t\t}
\t\t\t\t//得到未完成数组
\t\t\t\tfor(var i in totalData) {
\t\t\t\t\tvar nof = totalData[i] - finishData[i];
\t\t\t\t\tif(nof < 0) {
\t\t\t\t\t\tnof = 0;
\t\t\t\t\t}
\t\t\t\t\tnoFinishData.push(nof); //区间未完成数组
\t\t\t\t}
\t\t\t}
\t\t\tvar tot = 0;
\t\t\tfor(var i in totalData) {
\t\t\t\ttot += totalData[i];
\t\t\t}
\t\t\t\$(selector + ' .no_finish').text(tot - dat.complete >= 0 ? tot - dat.complete : 0);
            console.log(dat.complete);
            \$(selector + ' .f_totalgoal').text(dat.complete);
\t\t\t\$(selector + ' .totalgoal').text(tot);
\t\t\tgetLineChart(selector + ' .line_', thisWorkDays, noFinishData, finishData, totalData);
\t\t\t//console.log(noFinishData);
\t\t\t//console.log(finishData);
\t\t\t//console.log(totalData);

\t\t}

\t\t//判断data是否在arr这个数组中
\t\tfunction inHereArray(arr, data) {
\t\t\tfor(var i = 0; i < arr.length; i++) {
\t\t\t\tif(arr[i] == data) {
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t\treturn false;
\t\t}

\t\t//展示柱状图
\t\tfunction addHistogramChart(data, selector, kname, time) {
\t\t\tvar x_user = [],
\t\t\t\tnum = [];
\t\t\tvar dat = data.data.chart;
\t\t\tvar date;
\t\t\tvar yesterday = cs.getNowTime(new Date().setHours(0, 0, 0, 0) / 1000 - 86400);
\t\t\tif(time == 1 || time == 2) {
\t\t\t\tdate = time == 1 ? new Date().getDay() : new Date(yesterday).getDay();
\t\t\t}
\t\t\tfor(var i in dat) {
\t\t\t\tx_user.push(dat[i]['name']);
\t\t\t\tnum.push(dat[i]['num']);
\t\t\t}
\t\t\tif(date == '0' || date == '6') {
\t\t\t\tykp.prompt('所查询日期不是工作日');
\t\t\t\tgetHistogramChart(selector + ' .histogram', x_user, num);
\t\t\t\treturn;
\t\t\t}
\t\t\tif(x_user.length == 0) {
\t\t\t\tykp.prompt('暂无数据');
\t\t\t\tgetHistogramChart(selector + ' .histogram', x_user, num);
\t\t\t\treturn;
\t\t\t}
\t\t\tgetHistogramChart(selector + ' .histogram', x_user, num);
\t\t}

\t\t//获取折线图
\t\tfunction getLineChart(line, xdata, data_1, data_2, data_3) {
\t\t\tvar line = echarts.init(\$(line)[0]);
\t\t\toption = {
\t\t\t\ttitle: {
\t\t\t\t\ttext: '',
\t\t\t\t\tsubtext: ''
\t\t\t\t},
\t\t\t\ttooltip: {
\t\t\t\t\ttrigger: 'axis'
\t\t\t\t},
\t\t\t\tlegend: {
\t\t\t\t\tdata: []
\t\t\t\t},
\t\t\t\ttoolbox: {
\t\t\t\t\tshow: true
\t\t\t\t},
\t\t\t\txAxis: {
\t\t\t\t\tinterval: 0,
\t\t\t\t\ttype: 'category',
\t\t\t\t\tboundaryGap: false,
\t\t\t\t\tdata: xdata,
\t\t\t\t\taxisLabel: {
\t\t\t\t\t\tinterval: 0,
\t\t\t\t\t\trotate: 45
\t\t\t\t\t},
\t\t\t\t},
\t\t\t\tyAxis: {
\t\t\t\t\ttype: 'value',
\t\t\t\t\taxisLabel: {
\t\t\t\t\t\tformatter: '{value} '
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tgrid: {
\t\t\t\t\tleft: '1%',
\t\t\t\t\tright: '2%',
\t\t\t\t\tbottom: '6%',
\t\t\t\t\ttop: '12%',
\t\t\t\t\tcontainLabel: true
\t\t\t\t},

\t\t\t\tseries: [{
\t\t\t\t\t\tname: '未完成',
\t\t\t\t\t\ttype: 'line',
\t\t\t\t\t\tdata: data_1,
\t\t\t\t\t\tmarkPoint: {
\t\t\t\t\t\t\t/* data: [
\t\t\t\t\t\t\t     {type: 'max', name: '最大值'},
\t\t\t\t\t\t\t     {type: 'min', name: '最小值'}
\t\t\t\t\t\t\t ]*/
\t\t\t\t\t\t},
\t\t\t\t\t\t/*markLine: {
\t\t\t\t\t\t    data: [
\t\t\t\t\t\t        {type: 'average', name: ''}
\t\t\t\t\t\t    ]
\t\t\t\t\t\t}*/
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tname: '已完成',
\t\t\t\t\t\ttype: 'line',
\t\t\t\t\t\tdata: data_2,
\t\t\t\t\t\tmarkPoint: {
\t\t\t\t\t\t\tdata: [{
\t\t\t\t\t\t\t\tname: '周最低',
\t\t\t\t\t\t\t\tvalue: -2,
\t\t\t\t\t\t\t\txAxis: 1,
\t\t\t\t\t\t\t\tyAxis: -1.5
\t\t\t\t\t\t\t}]
\t\t\t\t\t\t},
\t\t\t\t\t\titemStyle: {
\t\t\t\t\t\t\tnormal: {
\t\t\t\t\t\t\t\tcolor: '#33ff99',
\t\t\t\t\t\t\t\tlineStyle: {
\t\t\t\t\t\t\t\t\tcolor: '#33ff99'
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\t/*markLine: {
\t\t\t                data: [
\t\t\t                    {type: 'average', name: ''},
\t\t\t                    [{
\t\t\t                        symbol: 'none',
\t\t\t                        x: '90%',
\t\t\t                        yAxis: 'max'
\t\t\t                    }, {
\t\t\t                        symbol: 'circle',
\t\t\t                        label: {
\t\t\t                            normal: {
\t\t\t                                position: 'start',
\t\t\t                                formatter: '',
\t\t                                 \t
\t\t\t                            },
\t\t\t                        },
\t\t\t                        type: 'max',
\t\t\t                        name: ''
\t\t\t                    }]
\t\t\t                ]
\t\t\t            }*/
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tname: '目标',
\t\t\t\t\t\ttype: 'line',
\t\t\t\t\t\tdata: data_3,
\t\t\t\t\t\tmarkPoint: {
\t\t\t\t\t\t\tdata: [{
\t\t\t\t\t\t\t\tname: '周最低',
\t\t\t\t\t\t\t\tvalue: -2,
\t\t\t\t\t\t\t\txAxis: 1,
\t\t\t\t\t\t\t\tyAxis: -1.5
\t\t\t\t\t\t\t}]
\t\t\t\t\t\t},
\t\t\t\t\t\titemStyle: {
\t\t\t\t\t\t\tnormal: {
\t\t\t\t\t\t\t\tcolor: '#3366ff',
\t\t\t\t\t\t\t\tlineStyle: {
\t\t\t\t\t\t\t\t\tcolor: '#3366ff'
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\t/*markLine: {
\t\t\t\t\t\t    data: [
\t\t\t\t\t\t        {type: 'average', name: ''},
\t\t\t\t\t\t        [{
\t\t\t\t\t\t            symbol: 'none',
\t\t\t\t\t\t            x: '90%',
\t\t\t\t\t\t            yAxis: 'max'
\t\t\t\t\t\t        }, {
\t\t\t\t\t\t            symbol: 'circle',
\t\t\t\t\t\t            label: {
\t\t\t\t\t\t                normal: {
\t\t\t\t\t\t                    position: 'start',
\t\t\t\t\t\t                    formatter: ''
\t\t\t\t\t\t                }
\t\t\t\t\t\t            },
\t\t\t\t\t\t            type: 'max',
\t\t\t\t\t\t            name: ''
\t\t\t\t\t\t        }]
\t\t\t\t\t\t    ]
\t\t\t\t\t\t}*/
\t\t\t\t\t}
\t\t\t\t]
\t\t\t};
\t\t\tline.setOption(option);
\t\t\t/*var option={
\t\t\t\ttooltip: {
\t\t\t\t\ttrigger: 'item',
\t\t\t\t\tformatter: '{a} <br/>{b} : {c}'
\t\t\t\t},
\t\t\t\txAxis: {
\t\t\t\t\ttype: 'category',
\t\t\t\t\tsplitLine: {
\t\t\t\t\t\tshow: false
\t\t\t\t\t},
\t\t\t\t\taxisLabel:{
\t\t\t\t\t\tinterval:0,
\t\t\t\t\t},
\t\t\t\t\tdata: xdata
\t\t\t\t},
\t\t\t\tgrid: {
\t\t\t\t\tleft: '1%',
\t\t\t\t\tright: '2%',
\t\t\t\t\tbottom: '6%',
\t\t\t\t\ttop:'12%',
\t\t\t\t\tcontainLabel: true
\t\t\t\t},
\t\t\t\tyAxis: {
\t\t\t\t\ttype: 'log'
\t\t\t\t},
\t\t\t\tseries: [{
\t\t\t\t\t\tname: '未完成',
\t\t\t\t\t\ttype: 'line',
\t\t\t\t\t\tdata: data_1
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tname: '已完成',
\t\t\t\t\t\ttype: 'line',
\t\t\t\t\t\tdata: data_2
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tname: '目标',
\t\t\t\t\t\ttype: 'line',
\t\t\t\t\t\tdata: data_3
\t\t\t\t\t}
\t\t\t\t]
\t\t\t};
\t\t\tline.setOption(option);*/
\t\t\t\$(window).resize(function() {
\t\t\t\tvar dHeight = \$(document.body).height();
\t\t\t\t\$('#bottom').css('height', dHeight - 174 + 'px');
\t\t\t\t\$('.line_').parents('.row').height();
\t\t\t\t\$('.line_').css('height', (\$('.line_').parents('.row').height() - 100) + 'px');
\t\t\t\t\$('.histogram').css('height', (\$('.line_').parents('.row').height() - 100) + 'px');
\t\t\t\twindow.onresize = line.resize()
\t\t\t})
\t\t\t/* window.onresize = function () {
\t\t\t    myChartContainer();
\t\t\t    line.resize();
\t\t\t};*/
\t\t}

\t\t//getHistogramChart('#saleHelper1 .histogram');
\t\t//获取柱状图
\t\tfunction getHistogramChart(histogram, xdata, ydata) {
\t\t\tif(xdata.length == 0 || ydata.length == 0){
\t\t\t\t\$(histogram).html(\"<div style='text-align: center;height: 100%;line-height: 50;'>暂无数据</div>\");
\t\t\t\treturn false;
\t\t\t}
\t\t\t\t
\t\t\tvar histogram = echarts.init(\$(histogram)[0]);

\t\t\tvar option = {
\t\t\t\ttooltip: {
\t\t\t\t\ttrigger: 'axis',
\t\t\t\t\taxisPointer: { // 坐标轴指示器，坐标轴触发有效
\t\t\t\t\t\ttype: 'shadow' // 默认为直线，可选为：'line' | 'shadow'
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\txAxis: {
\t\t\t\t\tdata: xdata,
\t\t\t\t\taxisLabel: {
\t\t\t\t\t\tinside: true,
\t\t\t\t\t\trotate: 0,
\t\t\t\t\t\ttextStyle: {
\t\t\t\t\t\t\tcolor: '#000'
\t\t\t\t\t\t},
\t\t\t\t\t\tformatter: function(val) {
\t\t\t\t\t\t\treturn val.split(\"\").join(\"\\n\");
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\taxisTick: {
\t\t\t\t\t\tshow: false
\t\t\t\t\t},
\t\t\t\t\taxisLine: {
\t\t\t\t\t\tshow: false
\t\t\t\t\t},
\t\t\t\t\tz: 10
\t\t\t\t},
\t\t\t\tyAxis: [{
\t\t\t\t\ttype: 'value'
\t\t\t\t}],
\t\t\t\tgrid: {
\t\t\t\t\tleft: '1%',
\t\t\t\t\tright: '2%',
\t\t\t\t\tbottom: '2%',
\t\t\t\t\ttop: '5%',
\t\t\t\t\tcontainLabel: true
\t\t\t\t},
\t\t\t\tdataZoom: [{
\t\t\t\t\ttype: 'inside'
\t\t\t\t}],
\t\t\t\tseries: [
\t\t\t\t\t{
\t\t\t\t\t\ttype: 'bar',
\t\t\t\t\t\titemStyle: {
\t\t\t\t\t\t\tnormal: {
\t\t\t\t\t\t\t\tcolor: new echarts.graphic.LinearGradient(
\t\t\t\t\t\t\t\t\t0, 0, 0, 1, [{
\t\t\t\t\t\t\t\t\t\t\toffset: 0,
\t\t\t\t\t\t\t\t\t\t\tcolor: '#83bff6'
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\toffset: 0.5,
\t\t\t\t\t\t\t\t\t\t\tcolor: '#188df0'
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\toffset: 1,
\t\t\t\t\t\t\t\t\t\t\tcolor: '#188df0'
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t]
\t\t\t\t\t\t\t\t)
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\temphasis: {
\t\t\t\t\t\t\t\tcolor: new echarts.graphic.LinearGradient(
\t\t\t\t\t\t\t\t\t0, 0, 0, 1, [{
\t\t\t\t\t\t\t\t\t\t\toffset: 0,
\t\t\t\t\t\t\t\t\t\t\tcolor: '#2378f7'
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\toffset: 0.7,
\t\t\t\t\t\t\t\t\t\t\tcolor: '#2378f7'
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\toffset: 1,
\t\t\t\t\t\t\t\t\t\t\tcolor: '#83bff6'
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t]
\t\t\t\t\t\t\t\t)
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\tdata: ydata
\t\t\t\t\t}
\t\t\t\t]
\t\t\t};
\t\t\thistogram.setOption(option);
\t\t\t\$(window).resize(function() {
\t\t\t\tvar dHeight = \$(document.body).height();
\t\t\t\t\$('#bottom').css('height', dHeight - 174 + 'px');
\t\t\t\t\$('#saleHelper1 .histogram').parents('.row').height();
\t\t\t\t\$('#saleHelper1 .histogram').css('height', (\$('#saleHelper1 .histogram').parents('.row').height() - 100) + 'px');
\t\t\t\t\$('#saleHelper1 .histogram').css('height', (\$('#saleHelper1 .histogram').parents('.row').height() - 100) + 'px');
\t\t\t\twindow.onresize = histogram.resize();
\t\t\t})
\t\t\tvar zoomSize = 6;
\t\t\thistogram.on('click', function(params) {
\t\t\t\t//console.log(xdata[Math.max(params.dataIndex - zoomSize / 2, 0)]);
\t\t\t\thistogram.dispatchAction({
\t\t\t\t\ttype: 'dataZoom',
\t\t\t\t\tstartValue: xdata[Math.max(params.dataIndex - zoomSize / 2, 0)],
\t\t\t\t\tendValue: xdata[Math.min(params.dataIndex + zoomSize / 2, ydata.length - 1)]
\t\t\t\t});
\t\t\t});
\t\t}

\t\t//\t\tgetPieChart('#saleHelper .pie');
\t\t//获取饼图
\t\t/*function getPieChart(pie) {
\t\t\tvar legendData = [];
\t\t\tvar seriesData = [];
\t\t\tvar seriesName = \$('.indexContent .current').text();
\t\t\tvar currentThIndex = \$('.indexContent .current').index();
\t\t\tif(pie.indexOf('#saleHelper') != -1) {
\t\t\t\tlegendData = ['已完成', '目标', '距离目标'];
\t\t\t\tseriesData = [{
\t\t\t\t\t\tvalue: \$('#saleHelper .finished').find('td').eq(currentThIndex).text(),
\t\t\t\t\t\tname: '已完成'
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tvalue: \$('#saleHelper .goal').find('td').eq(currentThIndex).text(),
\t\t\t\t\t\tname: '目标'
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tvalue: \$('#saleHelper .rangeTarget').find('td').eq(currentThIndex).text(),
\t\t\t\t\t\tname: '距离目标'
\t\t\t\t\t}
\t\t\t\t];
\t\t\t}
\t\t\tif(pie.indexOf('#serviceHelper') != -1) {
\t\t\t\tlegendData = ['已完成', '未完成'];
\t\t\t\tseriesData = [{
\t\t\t\t\t\tvalue: \$('#serviceHelper .finished').find('td').eq(currentThIndex).text(),
\t\t\t\t\t\tname: '已完成'
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tvalue: \$('#serviceHelper .unfinished').find('td').eq(currentThIndex).text(),
\t\t\t\t\t\tname: '未完成'
\t\t\t\t\t}
\t\t\t\t];
\t\t\t}
\t\t\tif(pie.indexOf('#financeHelper') != -1) {
\t\t\t\tlegendData = ['团队工资', '自用'];
\t\t\t\tseriesData = [{
\t\t\t\t\tvalue: 15,
\t\t\t\t\tname: '团队工资'
\t\t\t\t}, {
\t\t\t\t\tvalue: 15,
\t\t\t\t\tname: '自用'
\t\t\t\t}];
\t\t\t\tseriesName = '财务支出';
\t\t\t}

\t\t\t//饼图
\t\t\tvar pie = echarts.init(\$(pie)[0]);
\t\t\tvar option = {
\t\t\t\ttooltip: {
\t\t\t\t\ttrigger: 'item',
\t\t\t\t\tformatter: \"{a} <br/>{b} : {c} ({d}%)\"
\t\t\t\t},
\t\t\t\tlegend: {
\t\t\t\t\torient: 'vertical',
\t\t\t\t\tright: 20,
\t\t\t\t\tdata: legendData
\t\t\t\t},
\t\t\t\tseries: [{
\t\t\t\t\tname: seriesName,
\t\t\t\t\ttype: 'pie',
\t\t\t\t\tradius: '90%',
\t\t\t\t\tcenter: ['50%', '50%'],
\t\t\t\t\tdata: seriesData,
\t\t\t\t\titemStyle: {
\t\t\t\t\t\temphasis: {
\t\t\t\t\t\t\tshadowBlur: 10,
\t\t\t\t\t\t\tshadowOffsetX: 0,
\t\t\t\t\t\t\tshadowColor: 'rgba(0, 0, 0, 0.5)'
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}]
\t\t\t};
\t\t\tpie.setOption(option);
\t\t}*/
\t})
</script>";
    }

    public function getTemplateName()
    {
        return "admin/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  646 => 625,  644 => 624,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	th,*/
/* 	td {*/
/* 		text-align: center;*/
/* 		padding: 5px;*/
/* 	}*/
/* 	*/
/* 	th {*/
/* 		height: 40px;*/
/* 		background: #ccecff;*/
/* 	}*/
/* 	*/
/* 	td {*/
/* 		height: 36px;*/
/* 	}*/
/* 	*/
/* 	.odd {*/
/* 		background: #e5f6ff;*/
/* 	}*/
/* 	*/
/* 	.even {*/
/* 		background: #fff;*/
/* 	}*/
/* 	*/
/* 	.tab-content {*/
/* 		padding: 16px 0;*/
/* 	}*/
/* 	*/
/* 	.helpers .active {*/
/* 		border-bottom: 1px solid #fff;*/
/* 		border-top: 2px solid #49ade6;*/
/* 	}*/
/* 	*/
/* 	.helpers li {*/
/* 		height: 30px;*/
/* 		width: 86px;*/
/* 		line-height: 30px;*/
/* 		text-align: center;*/
/* 		border: 1px solid #f5f5f5;*/
/* 	}*/
/* 	*/
/* 	.main-content-inner {*/
/* 		background: #fff !important;*/
/* 		box-shadow: none !important;*/
/* 	}*/
/* 	*/
/* 	.indexContent .current {*/
/* 		background-color: rgba(157, 194, 254, 0.8);*/
/* 	}*/
/* 	*/
/* 	.charts .active {*/
/* 		color: #00a0ff !important;*/
/* 	}*/
/* 	*/
/* 	#right .row {*/
/* 		margin: 0px 0 !important;*/
/* 	}*/
/* 	*/
/* 	#right .businessCon {*/
/* 		display: flex;*/
/* 		text-align: center;*/
/* 		justify-content: center;*/
/* 		flex-direction: row;*/
/* 		justify-content: space-around;*/
/* 		margin-bottom: 0px !important;*/
/* 		padding-top: 0px;*/
/* 		margin-top: 38px !important;*/
/* 		margin-left: -10px;*/
/* 	}*/
/* 	*/
/* 	.circular {*/
/* 		width: 80px;*/
/* 		height: 80px;*/
/* 		border-radius: 50%;*/
/* 		font-size: 40px;*/
/* 		line-height: 80px;*/
/* 		color: #fff;*/
/* 		margin-bottom: 5px;*/
/* 	}*/
/* 	*/
/* 	.noticeCon li:nth-child(odd) {*/
/* 		background: #e5f6ff;*/
/* 	}*/
/* 	*/
/* 	.main-content-inner {*/
/* 		background: transparent !important;*/
/* 		padding-bottom: 0px !important;*/
/* 	}*/
/* 	*/
/* 	a:hover,*/
/* 	a.close_label:hover {*/
/* 		color: inherit;*/
/* 	}*/
/* 	*/
/* 	.goals input {*/
/* 		padding: 4px;*/
/* 		margin-left: 8px;*/
/* 		border: none;*/
/* 		width: 100px;*/
/* 		height: 20px;*/
/* 		opacity: 0.4;*/
/* 		background-color: #e5f6ff;*/
/* 	}*/
/* 	*/
/* 	.goals label {*/
/* 		width: 48px;*/
/* 		text-align: right;*/
/* 		font-family: MicrosoftYaHei;*/
/* 		font-size: 12px;*/
/* 		color: #666;*/
/* 	}*/
/* 	*/
/* 	.goals {*/
/* 		position: absolute;*/
/* 		/*right:0;*//* */
/* 		/*left: 0;*//* */
/* 		top: 36px;*/
/* 		padding: 20px;*/
/* 		box-shadow: 0px 2px 8px 0 rgba(0, 0, 0, 0.2);*/
/* 		background: #fff;*/
/* 		width: 200px;*/
/* 		z-index: 2;*/
/* 	}*/
/* 	*/
/* 	._goals label {*/
/* 		width: 24px;*/
/* 	}*/
/* 	*/
/* 	._goals {*/
/* 		width: 176px;*/
/* 	}*/
/* 	*/
/* 	select2-container select2-container--default select2-container--open {*/
/* 		position: absolute !important;*/
/* 		left: 494.438px!important;*/
/* 		top: 41px!important;*/
/* 	}*/
/* 	*/
/* 	.businessCon li {*/
/* 		list-style: none;*/
/* 		width: 165px;*/
/* 		height: 70px;*/
/* 		margin-top: -24px;*/
/* 		/*  *//* */
/* 	}*/
/* 	*/
/* 	.titleMouse {*/
/* 		cursor: pointer;*/
/* 		border: 1px #E6E6E6 solid;*/
/* 		box-shadow: 2px 2px 8px 0 rgba(00, 00, 00, 0.1);*/
/* 	}*/
/* 	*/
/* 	.businessCon li>div:first-child {*/
/* 		line-height: 35px;*/
/* 		font-size: 14px;*/
/* 		height: 40px;*/
/* 		font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;*/
/* 	}*/
/* 	*/
/* 	.businessCon li>div:last-child {*/
/* 		font-size: 18px;*/
/* 		height: 30px;*/
/* 		color: #55AA99*/
/* 	}*/
/* */
/* 	/* .select2-container{*/
/* 		position: relative !important;*/
/* 		top:50px !important;*/
/* 	} *//* */
/* </style>*/
/* <div class="widget-main" style="overflow:auto;padding:0;">*/
/* 	<div style="background:#e6ecf2; margin-top: -20px;">*/
/* 		<div style="display:none;position:fixed;z-index:1041;width:80%;background: #fff;padding: 20px;    top: 35%; left: 17%;" class="sendList custom_table">*/
/* 			<table>*/
/* 				<thead>*/
/* 					<tr class="thColor" data-id='1'>*/
/* 						<th class="hidden-480">月份</th>*/
/* 						<th>负责人</th>*/
/* 						<th class="hidden-480">任务</th>*/
/* 						<th class="hidden-480">整单</th>*/
/* 						<th class="hidden-480">记账</th>*/
/* 						<th class="hidden-480">客服</th>*/
/* 						<th class="hidden-480">报税</th>*/
/* 						<th class="hidden-480">送单</th>*/
/* 						<th class="hidden-480">收单</th>*/
/* 						<th>公海</th>*/
/* 						<th>联系人</th>*/
/* 						<th class="hidden-480">商机</th>*/
/* 						<th class="hidden-480">拜访客户</th>*/
/* 						<th class="hidden-480">线索</th>*/
/* 						<th class="hidden-480">合同数</th>*/
/* 						<th class="hidden-480">合同金额</th>*/
/* 						<th class="hidden-480">收款</th>*/
/* */
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody id="sendListList">*/
/* */
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 		<div style="background:#e6ecf2;">*/
/* 			<div class="row" style="position: relative;">*/
/* 				<div style="background: #fff; margin-bottom: 0px; height: 194px; padding-top: 10px; padding-left:0px; box-shadow: 0px 5px 15px 0 rgba(0, 0, 0, 0.1);" class="col-sm-6">*/
/* 					<ul class="row businessCon">*/
/* 						<li url='?url=alltask&i=0-2-1&type=1' kind='10'>*/
/* 							<div>新增任务</div>*/
/* 							<div></div>*/
/* 						</li>*/
/* 						<li url='?url=alltask&i=0-2-1&type=1' kind='1'>*/
/* 							<div>待办任务</div>*/
/* 							<div></div>*/
/* 						</li>*/
/* 						<li url='?url=contracts&i=0-3-0&type=1' kind='2'>*/
/* 							<div>续签合同</div>*/
/* 							<div></div>*/
/* 						</li>*/
/* 						<li url='?url=lackOfrecord&i=0-5-0&type=1' kind='3'>*/
/* 							<div>欠款合同</div>*/
/* 							<div></div>*/
/* 						</li>*/
/* 						<li url='?url=lackOfrecord&i=0-5-0&type=1' kind='3'>*/
/* 							<!--//?url=collectionRecord&i=0-5-1&type=1-->*/
/* 							<div>欠款金额</div>*/
/* 							<div></div>*/
/* 						</li>*/
/* 					</ul>*/
/* 					<ul class="row businessCon">*/
/* 						<li url='?url=schedule&i=0-2-7&type=1' kind='5'>*/
/* 							<div>待办日程</div>*/
/* 							<div></div>*/
/* 						</li>*/
/* 						<li url='?url=schedule&i=0-2-7&type=1' kind='6'>*/
/* 							<div>逾期日程</div>*/
/* 							<div></div>*/
/* 						</li>*/
/* 						<li url='?url=contacts&i=0-2-5&type=1' kind='7'>*/
/* 							<div>待补资料</div>*/
/* 							<div></div>*/
/* 						</li>*/
/* 						<li url='?url=accountSales&i=0-2-3&type=1' kind='8'>*/
/* 							<div>待办线索</div>*/
/* 							<div></div>*/
/* 						</li>*/
/* 						<li url='?url=accountSales&i=0-2-3&type=1' kind='9'>*/
/* 							<div>逾期线索</div>*/
/* 							<div></div>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* */
/* 				<div class="col-sm-6" style="padding-right:0; padding-top: -20px; padding-left: 2px;">*/
/* 					<div style="width:100%;height:194px;padding:15px 15px;  background:#fff; ">*/
/* 						<div style="font-size:16px;height: 52px; line-height: 52px;">*/
/* 							最新公告*/
/* 							<a href="javascript:;" title="查看更多" id="showMore" style="float:right;font-size:20px;color:#999;margin-bottom: 10px; "><span class="fa fa-bars"></span</a>*/
/* 							<a href="javascript:;" title="添加公告"  id="addBtn" style="float:right;font-size:20px;color:#999; margin-right: 20px;"><span contentAuthority="87" class="fa fa-plus"></span></a>*/
/* 						</div>*/
/* */
/* 						<div style="height:140px;text-align:left;">*/
/* 							<ul style="list-style: none; width: 100%;" class="noticeCon">*/
/* */
/* 							</ul>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row" style="position: relative;" id="bottom">*/
/* 				<!--个人助手 -->*/
/* 				<div style="padding:10px 20px 20px 20px;background:#fff; height: 100%; border-top:1px solid #e4ebf3; float: left;  width: 50%;" class="">*/
/* 					<div>*/
/* 						<ul class="helpers _line" style="list-style-type:none; margin-left:0;border-bottom:1px solid #f5f5f5;height:30px;">*/
/* 							<li class="active" style="float:left;">*/
/* 								<a style="text-decoration:none;" href="#saleHelper">*/
/* 									销售助手*/
/* 								</a>*/
/* 							</li>*/
/* 							<li class="" style="float:left;">*/
/* 								<a style="text-decoration:none;" href="#serviceHelper">*/
/* 									服务助手*/
/* 								</a>*/
/* 							</li>*/
/* 						</ul>*/
/* */
/* 						<div style="padding-top:10px" class="indexContent" id="personal">*/
/* 							<!-- 个人销售助手 -->*/
/* 							<div id="saleHelper">*/
/* 								<div style="font-language-override: 12px;line-height:24px;">*/
/* 									<select style="height:24px;font-size:12px;" title="time">*/
/* 										<option value="1">今日</option>*/
/* 										<option value="2">昨日</option>*/
/* 										<option value="3" selected="selected">近7日</option>*/
/* 										<option value="4">近30日</option>*/
/* 										<option value="5">本月</option>*/
/* 										<option value="6">上月</option>*/
/* 									</select>*/
/* */
/* 									<select title="employees" id="sale" style="background:#ccecff;margin-left:10px;width:80px;font-size:12px;height:24px;">*/
/* 									</select>*/
/* 									<!-- jjjjjjjj -->*/
/* 									<select style="background:#ccecff;margin-left:10px;width:80px;font-size:12px;height:24px;" title="url">*/
/* */
/* 										<option value="seaOfclients&i=0-2-2&type=1" kind="8" kname="customer">公海</option>*/
/* */
/* 										<option value="contacts&i=0-2-5&type=1" kind="9" kname="contact">客户</option>*/
/* */
/* 										<option value="opportunity&i=0-2-8&type=1" kind="10" kname="business">商机</option>*/
/* */
/* 										<option value="visit&i=0-2-9&type=1" kind="11" kname="visit">拜访</option>*/
/* */
/* 										<option value="accountSales&i=0-2-3&type=1" kind="12" kname="sales">线索</option>*/
/* */
/* 										<option value="contracts&i=0-3-0&type=1" kind="13" kname="contract">合同</option>*/
/* */
/* 										<option value="contracts&i=0-3-0&type=1" kind="15" kname="contract_money">合同欠款</option>*/
/* */
/* 										<option value="collectionRecord&i=0-5-1&type=1" kind="14" kname="payment">收款</option>*/
/* 									</select>*/
/* 									<button style="border:none;background:#ccecff;margin-left:10px;width:40px;height:24px;" class="details">*/
/* 								<span class="glyphicon glyphicon-list-alt" title="查看选中者客户公海的创建信息"></span>*/
/* 								</button>*/
/* 									<button style="background:#ccecff;width:40px;height:24px;border:none;" title="设置个人目标" contentAuthority="88" class="setgoals sale">*/
/* 									<span class="glyphicon glyphicon-wrench"></span>*/
/* 									</button>*/
/* 									<div style="display:none; float: right; margin-left:10px;position:relative; margin-right: 90px;">*/
/* */
/* 										<div class="goals" style="">*/
/* */
/* 											<div>*/
/* 												<label>公海</label>*/
/* 												<input title="customer">*/
/* 											</div>*/
/* */
/* 											<div>*/
/* 												<label>客户</label>*/
/* 												<input title="contact">*/
/* 											</div>*/
/* */
/* 											<div>*/
/* 												<label>商机</label>*/
/* 												<input title="business">*/
/* 											</div>*/
/* */
/* 											<div>*/
/* 												<label>拜访</label>*/
/* 												<input title="visit">*/
/* 											</div>*/
/* */
/* 											<div>*/
/* 												<label>线索</label>*/
/* 												<input title="sales">*/
/* 											</div>*/
/* */
/* 											<div>*/
/* 												<label>合同</label>*/
/* 												<input title="contract">*/
/* 											</div>*/
/* */
/* 											<div>*/
/* 												<label>欠款</label>*/
/* 												<input title="contract_money">*/
/* 											</div>*/
/* */
/* 											<div>*/
/* 												<label>收款</label>*/
/* 												<input title="payment">*/
/* 											</div>*/
/* */
/* 										</div>*/
/* 									</div>*/
/* 									<button style="background:#ccecff;width:40px;height:24px;border:none;" class="assistant">*/
/* 										<i class="fa fa-table" aria-hidden="true"></i>*/
/* 								</button>*/
/* 									<span style="float:right; margin-right:5px;font-size:12px;">*/
/* 									<label>目标</label>*/
/* 									<span style="color: #1577e4;" class="totalgoal">45</span>*/
/* 									</span>*/
/* 									<span style="font-size:12px;float:right; margin-left: 5px;">*/
/* 									<label>已完成</label>*/
/* 									<span style="color: #1dd600;" class="f_totalgoal">20</span>*/
/* 									</span>*/
/* 									<span style="font-size:12px;float:right; margin-left: 5px;">*/
/* 									<label>未完成</label>*/
/* 									<span style="color: #d60000;" class="no_finish">25</span>*/
/* 									</span>*/
/* 									<!-- <button style="float:right;border:none;background:#ccecff;margin-left:10px;height:24px;width:80px;">客户</button> -->*/
/* 								</div>*/
/* */
/* 								<div class="line_" id="line" style=" height:300px">*/
/* */
/* 								</div>*/
/* */
/* 							</div>*/
/* */
/* 							<!-- 个人服务助手 -->*/
/* 							<div id="serviceHelper" style="display:none;">*/
/* 								<div style="font-language-override: 12px;line-height:24px;">*/
/* 									<select style="height:24px;font-size:12px;" title="time">*/
/* 										<option value="1">今日</option>*/
/* 										<option value="2">昨日</option>*/
/* 										<option value="3" selected="selected">近7日</option>*/
/* 										<option value="4">近30日</option>*/
/* 										<option value="5">本月</option>*/
/* 										<option value="6">上月</option>*/
/* 									</select>*/
/* */
/* 									<select title="employees" id="service" style="background:#ccecff;margin-left:10px;width:80px;font-size:12px;height:24px;">*/
/* 									</select>*/
/* 									<select style="background:#ccecff;margin-left:10px;width:80px;font-size:12px;height:24px;" title="url">*/
/* 										<option value="alltask&i=0-2-1&type=1" kind="7" kname="task">任务</option>*/
/* 										<option value="entire&i=0-1-3&type=1" kind="2" kname="zd">整单</option>*/
/* 										<option value="account&i=0-1-4&type=1" kind="3" kname="jz">记账</option>*/
/* 										<option value="customer&i=0-1-5&type=1" kind="4" kname="zf">客服</option>*/
/* 										<option value="tax&i=0-1-6&type=1" kind="5" kname="bs">报税</option>*/
/* 										<option value="single&i=0-1-7&type=1" kind="6" kname="sd">送单</option>*/
/* 										<option value="getList&i=0-1-2&type=1" kind="1" kname="shd">收单</option>*/
/* 									</select>*/
/* 									<button style="border:none;background:#ccecff;margin-left:10px;width:40px;height:24px;" class="details">*/
/* 									<span class="glyphicon glyphicon-list-alt" title="查看选中者客户公海的创建信息"></span>*/
/* 								</button>*/
/* 									<button style="background:#ccecff;width:40px;height:24px;border:none;" contentAuthority="88" class="setgoals ser">*/
/* 										<span class="glyphicon glyphicon-wrench" title="设置个人目标"></span>*/
/* 									</button>*/
/* 									<div style="display:none; float: right; margin-left:10px;position:relative; margin-right: 90px;">*/
/* 										<div class="service goals _goals" style="">*/
/* 											<div>*/
/* 												<label>任务</label>*/
/* 												<input title="task">*/
/* 											</div>*/
/* 											<div>*/
/* 												<label>整单</label>*/
/* 												<input title="zd" />*/
/* 											</div>*/
/* 											<div>*/
/* 												<label>记账</label>*/
/* 												<input title="jz" />*/
/* 											</div>*/
/* 											<div>*/
/* 												<label>客服</label>*/
/* 												<input title="zf" />*/
/* 											</div>*/
/* 											<div>*/
/* 												<label>报税</label>*/
/* 												<input title="bs" />*/
/* 											</div>*/
/* 											<div style="height:px;">*/
/* 												<label>送单</label>*/
/* 												<input title="sd" />*/
/* 											</div>*/
/* 											<div style="height:px;">*/
/* 												<label>收单</label>*/
/* 												<input title="shd">*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* */
/* 									<span style="float:right; margin-right:5px;font-size:12px;">*/
/* 									<label>目标</label>*/
/* 									<span style="color: #1577e4;" class="totalgoal">45</span>*/
/* 									</span>*/
/* 									<span style="float:right;margin-right:5px;font-size:12px;">*/
/* 									<label>已完成</label>*/
/* 									<span style="color: #1dd600;" class="f_totalgoal">20</span>*/
/* 									</span>*/
/* 									<span style="float:right;margin-right:5px;font-size:12px;">*/
/* 									<label>未完成</label>*/
/* 									<span style="color: #d60000;" class="no_finish">25</span>*/
/* 									</span>*/
/* */
/* 									<!-- <button style="float:right;border:none;background:#ccecff;margin-left:10px;height:24px;width:80px;">客户</button> -->*/
/* 								</div>*/
/* 								<div class="line_" style="height:300px; ,''">*/
/* */
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<!-- 公司助手 -->*/
/* 				<div class="" style="height:410px; padding-left: 2px; height: 100%; float: left; width: 50%;">*/
/* 					<div style="background:#fff; height:410px; height: 100%; padding:10px 20px 20px 20px; border-top:1px solid #e4ebf3;">*/
/* 						<ul class="helpers  _histogram" style="list-style-type:none;margin-left:0;border-bottom:1px solid #f5f5f5;height:30px;">*/
/* 							<li class="active" style="float:left;">*/
/* 								<a style="text-decoration:none;" href="#saleHelper1">*/
/* 									销售排名								</a>*/
/* 							</li>*/
/* 							<li class="" style="float:left;">*/
/* 								<a style="text-decoration:none;" href="#serviceHelper1">*/
/* 									服务排名*/
/* 								</a>*/
/* 							</li>*/
/* 						</ul>*/
/* */
/* 						<div style="padding-top:10px" class="indexContent" id="company">*/
/* 							<div id="saleHelper1">*/
/* 								<div>*/
/* 									<select style="height:24px;font-size:12px;" title="time">*/
/* 										<option value="1">今日</option>*/
/* 										<option value="2">昨日</option>*/
/* 										<option value="3" selected="selected">近7日</option>*/
/* 										<option value="4">近30日</option>*/
/* 										<option value="5">本月</option>*/
/* 										<option value="6">上月</option>*/
/* 									</select>*/
/* 									<select style="background:#ccecff;height:24px;width:80px;font-size:12px;margin-left:15px;position:relative;" title="url">*/
/* */
/* 										<option value="seaOfclients&i=0-2-2&type=1" kind="8">公海</option>*/
/* */
/* 										<option value="contacts&i=0-2-5&type=1" kind="9">客户</option>*/
/* */
/* 										<option value="opportunity&i=0-2-8&type=1" kind="10">商机</option>*/
/* */
/* 										<option value="visit&i=0-2-9&type=1" kind="11">拜访</option>*/
/* */
/* 										<option value="accountSales&i=0-2-3&type=1" kind="12">线索</option>*/
/* */
/* 										<option value="contracts&i=0-3-0&type=1" kind="13">合同</option>*/
/* */
/* 										<option value="!contracts&i=0-3-0&type=1" kind="15">欠款</option>*/
/* */
/* 										<option value="collectionRecord&i=0-5-1&type=1" kind="14">收款</option>*/
/* 									</select>*/
/* */
/* 									<button style="border:none;background:#ccecff;margin-left:10px;height:24px;width:40px;" class="details">*/
/* 										<span class="glyphicon glyphicon-list-alt" title="查看选中者客户公海的创建信息"></span>*/
/* 									</button>*/
/* 								</div>*/
/* 								<div class="histogram" style="width: 100%;height:300px;">*/
/* */
/* 								</div>*/
/* 							</div>*/
/* */
/* 							<div id="serviceHelper1" style="display: none;">*/
/* 								<div>*/
/* 									<select style="height:24px;font-size:12px;" title="time">*/
/* 										<option value="1">今日</option>*/
/* 										<option value="2">昨日</option>*/
/* 										<option value="3" selected="selected">近7日</option>*/
/* 										<option value="4">近30日</option>*/
/* 										<option value="5">本月</option>*/
/* 										<option value="6">上月</option>*/
/* 									</select>*/
/* 									<select style="background:#ccecff;height:24px;width:80px;font-size:12px;margin-left:15px;position:relative;" title="url">*/
/* 										<option value="alltask&i=0-2-1&type=1" kind="7">任务</option>*/
/* 										<option value="entire&i=0-1-3&type=1" kind="2">整单</option>*/
/* 										<option value="account&i=0-1-4&type=1" kind="3">记账</option>*/
/* 										<option value="customer&i=0-1-5&type=1" kind="4">客服</option>*/
/* 										<option value="tax&i=0-1-6&type=1" kind="5">报税</option>*/
/* 										<option value="single&i=0-1-7&type=1" kind="6">送单</option>*/
/* 										<option value="getList&i=0-1-2&type=1" kind="1">收单</option>*/
/* 									</select>*/
/* 									<button style="border:none;background:#ccecff;margin-left:10px;height:24px;width:40px;" class="details">*/
/* 									<span class="glyphicon glyphicon-list-alt" title="查看选中者任务的创建信息"></span>*/
/* 								</button>*/
/* 								</div>*/
/* */
/* 								<div class="histogram" style="width: 100%;height:300px;">*/
/* */
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* 	<div class="label_popup" id="feedBack" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 		<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/*         box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 			<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 				<span style="display: inline-block;">发送公告</span>*/
/* 				<a href="javascript:;" class="close_label pos-rel" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 			</div>*/
/* 			<div style="padding: 15px;">*/
/* 				<input type="text" style="width:calc(100% - 60.2px);" style="margin: auto;" id="labelName" />*/
/* 				<button class="hold">发送</button>*/
/* 				<hr>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="label_popup" id="feedBack1" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 		<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;">*/
/* 			<!--box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);-->*/
/* 			<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 				<span style="display: inline-block;">编辑公告</span>*/
/* 				<a href="javascript:;" class="close_label pos-rel" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 			</div>*/
/* 			<div style="padding: 15px;">*/
/* 				<input type="text" style="width:calc(100% - 60.2px);" style="margin: auto;" id="labelName" />*/
/* 				<button class="hold">保存</button>*/
/* 				<hr>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="notice custom_table" style="display:none;position:absolute;z-index:1024;width:70%;height: 300px; background: #fff;float:right;padding: 20px 20px;margin-top:-700px;margin: -700px 70px 0 ">*/
/* 		<div class="col-xs-12">*/
/* 			<div class="row">*/
/* 				<div class="widget-header widget-header-small" style="padding-left:0;text-align: center;">*/
/* 					<span style="font-size:16px;line-height: 45px;text-indent:10em;text-align: center;" class="title">公告列表</span>*/
/* 				</div>*/
/* 				<table>*/
/* 					<thead>*/
/* 						<tr class="thColor">*/
/* 							<th class="hidden-480">发布时间</th>*/
/* 							<th class="hidden-480">发布人</th>*/
/* 							<th class="hidden-480">公告内容</th>*/
/* 							<th class="hidden-480">操作</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* */
/* 					<tbody id="_dataList">*/
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	*/
/* */
/* 	<script src="/resource/adimin/assets/js/clipboard.min.js"></script>*/
/* */
/* 	{% include 'admin/mark.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script type="text/javascript">*/
/* 	$(function() {*/
/* 		*/
/* 		var mbData = {};  //目标date*/
/* 		//内容区域权限样式设置*/
/* 		cs.getNodes([87, 88]);*/
/*         setHeight();*/
/* */
/* 		function setHeight() {*/
/* 			var dHeight = $(document.body).height();*/
/* 			$('#bottom').css('height', dHeight - 174 + 'px');*/
/* 			$('.line_').parents('.row').height();*/
/* 			$('.line_').css('height', ($('.line_').parents('.row').height() - 100) + 'px');*/
/* 			$('.histogram').css('height', ($('.line_').parents('.row').height() - 100) + 'px');*/
/* 		}*/
/* */
/* 		//展开 | 隐藏设置目标选项*/
/* 		function getInfo() {*/
/* 			//加载目标值*/
/* 			$(this).next().find("input").each(function() {*/
/* 				$(this).val(data[$(this).attr("title")]);*/
/* 			});*/
/* 		}*/
/* 		*/
/* 		$('[title="url"]').change(function(){*/
/* 			var text = $(this).find('option:selected').text();*/
/* 			$(this).next().find('span').attr('title',"查看选中者"+text+"的创建信息")*/
/* 		})*/
/* */
/* 		$('.in').click(function() {*/
/* 			$('.notice').hide();*/
/* 			$('.in').removeClass('modal-backdrop');*/
/* 			$('#showMore').removeClass('active').css('z-index', '');*/
/* 		});*/
/* */
/* 		//查询公告*/
/* 		noticeInfo();*/
/* */
/* 		function noticeInfo() {*/
/* 			var emps = allemp();*/
/* 			var data;*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_notice/list',*/
/* 				method: 'get',*/
/* 				data: {*/
/* 					limit: 3*/
/* 				},*/
/* 				success: function(res) {*/
/* 					data = res.data;*/
/* 					var li = '';*/
/* 					if(data.length > 0) {*/
/* 						var length = data.length < 3 ? data.length : 3;*/
/* 						for(var i = 0; i < length; i++) {*/
/* 							var ename;*/
/* 							for(var j in emps) {*/
/* 								if(data[i]['nm_notice.user'] == emps[j]['bmm_employees.id']) {*/
/* 									ename = emps[j]['bmm_employees.name'];*/
/* 								}*/
/* 							}*/
/* 							li += `<li  data-id="${data[i]['nm_notice.id']}"  title="${data[i]['nm_notice.content']}" style="height: 36px; padding-right:10px; width: 100%; cursor: pointer;overflow: hidden; font-size: 14px; color: #333; line-height: 36px; padding-left: 20px;"><span style="width:250px;float:left; margin-right:50px;"> ${data[i]['nm_notice.content']}</span> <span style="float:right; ">${cs.getNowTime(data[i]['nm_notice.create_at'])} </span></li>`;*/
/* 						}*/
/* 					} else {*/
/* 						li += `<div style="text-align:center;height:100px;line-height:80px">暂无公告</div>`*/
/* 					}*/
/* 					$('.noticeCon').html(li);*/
/* */
/* 					delnotice();*/
/* 					editnotice();*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		getuserasss();*/
/* */
/* 		function getuserasss() {*/
/* 			$('.assistant').click(function() {*/
/* 				$('.sendList').show();*/
/* 				$('.in').addClass('modal-backdrop');*/
/* 				$(this).addClass('active').css('z-index', '1041');*/
/* 				var val = $('#sale').val();*/
/* 				console.log(val);*/
/* 				//showMark("#template4");*/
/* 				ykp.doAjax({*/
/* 					url: "/api/api_home/get_user_all_assistant",*/
/* 					data: {*/
/* 						user: val*/
/* 					},*/
/* 					method: "post",*/
/* 					success: function(res) {*/
/* 						var html = "";*/
/* 						var data = res.data;*/
/* 						for(var i in data) {*/
/* 							html += `<tr }">*/
/* 							<td>${data[i]['month']}</td>*/
/* 							<td>${data[i]['name']}</td>*/
/* 										<td>${data[i]['task']}</td>*/
/* 										*/
/* 										<td>${data[i]['zd']}</td>*/
/* 										<td>${data[i]['jz']}</td>*/
/* 										<td>${data[i]['zf']}</td>*/
/* 										<td>${data[i]['bs']}</td>*/
/* 										<td>${data[i]['sd']}</td>*/
/* 										<td>${data[i]['shd']}</td>*/
/* 										<td>${data[i]['customer']}</td>*/
/* 										<td>${data[i]['contact']}</td>*/
/* 										<td>${data[i]['business']}</td>*/
/* 										<td>${data[i]['visit']}</td>*/
/* 										<td>${data[i]['sales']}</td>*/
/* 										<td>${data[i]['contract']}</td>*/
/* 										<td>${data[i]['contract_money']}</td>*/
/* 										<td>${data[i]['payment']}</td>*/
/* 							</tr>`;*/
/* 						}*/
/* 						$("#sendListList").html(html);*/
/* 						*/
/* 						$('.in').unbind('click').click(function() {*/
/* 							$('.sendList').hide();*/
/* 							$('.in').removeClass('modal-backdrop');*/
/* 							$('#singleList').removeClass('active').css('z-index', '');*/
/* 			*/
/* 							$(this).off('click');*/
/* 						});*/
/* 					}*/
/* */
/* 				})*/
/* 				*/
/* 			})*/
/* 		}*/
/* */
/* 		function delnotice() {*/
/* 			$('.delnotice').click(function() {*/
/* 				var id = $(this).parent().attr('data-id') || $(this).parents('tr').attr('data-id');*/
/* 				ykp.doAjax({*/
/* 					url: "/api/api_notice/del ",*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						id: id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						noticeInfo();*/
/* 						//						ykp.prompt('删除成功');*/
/* 						$('.notice').hide();*/
/* 						$('.in').removeClass('modal-backdrop');*/
/* 						$(this).removeClass('active').css('z-index', '');*/
/* 					}*/
/* 				})*/
/* 			})*/
/* */
/* 		}*/
/* */
/* 		function editnotice() {*/
/* 			$('.editnotice').click(function() {*/
/* 				var id = $(this).parent().attr('data-id') || $(this).parents('tr').attr('data-id');*/
/* 				$('#feedBack1').show();*/
/* 				$('#feedBack1 #labelName').val($(this).parent().attr('title') || $(this).parents('tr').attr('data-content'));*/
/* 				$('#feedBack1 .hold').click(function() {*/
/* 					var approve_reply = $('#feedBack1 #labelName').val().trim();*/
/* 					if(approve_reply == '') {*/
/* 						ykp.prompt('不能为空！');*/
/* 						return false;*/
/* 					}*/
/* 					addnotice(approve_reply, id); //执行添加*/
/* 					$(this).unbind('click', arguments.callee);*/
/* 					$('#feedBack1').find('input').val("");*/
/* 					$('.close_label').parents('.label_popup').fadeOut();*/
/* 				})*/
/* 				$('.close_label').click(function() {*/
/* 					$('.close_label').parents('.label_popup').fadeOut();*/
/* 				})*/
/* */
/* 				noticeInfo();*/
/* 			})*/
/* */
/* 		}*/
/* */
/* 		//添加公告*/
/* 		function addnotice(content, id) {*/
/* 			var data = {*/
/* 				content: content*/
/* 			}*/
/* 			if(id) {*/
/* 				data.id = id;*/
/* 			}*/
/* 			ykp.doAjax({*/
/* 				url: id ? '/api/api_notice/edit' : '/api/api_notice/add',*/
/* 				method: 'post',*/
/* 				data: data,*/
/* 				success: function(res) {*/
/* 					noticeInfo();*/
/* 					$('.notice').hide();*/
/* 					$('.in').removeClass('modal-backdrop');*/
/* 					$(this).removeClass('active').css('z-index', '');*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		titleTask();*/
/* */
/* 		function titleTask() {*/
/* 			$('.businessCon li').click(function() {*/
/* 				var nums = $(this).find('div').eq(1).text();*/
/* 				if(!nums || nums.trim() == '0') {*/
/* 					ykp.prompt('您没有需要处理的任务');*/
/* 					return;*/
/* 				}*/
/* 				var _url = $(this).attr('url');*/
/* 				var kind = $(this).attr('kind');*/
/* 				ykp.setCookie('titleTask', kind);*/
/* 				skPage(_url);*/
/* 				//window.location=_url;*/
/* 			})*/
/* 		}*/
/* */
/* 		getLeft(); //获取左上方数据；*/
/* 		function getLeft() {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_home/get_left',*/
/* 				method: 'post',*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					var lis = $('.businessCon li');*/
/*                     lis.eq(0).find('div').eq(1).text(data['new_task']);*/
/* 					lis.eq(1).find('div').eq(1).text(data['not_task']);*/
/* 					lis.eq(2).find('div').eq(1).text(data['xu_contract']);*/
/* 					lis.eq(3).find('div').eq(1).text(data['num_contract']);*/
/* 					lis.eq(4).find('div').eq(1).text(data['money_contract'] ?data['money_contract']:0);*/
/* 					lis.eq(5).find('div').eq(1).text(data['deal_plan']);*/
/* 					lis.eq(6).find('div').eq(1).text(data['not_plan']);*/
/* 					lis.eq(7).find('div').eq(1).text(data['ws_customer']);*/
/* 					lis.eq(8).find('div').eq(1).text(data['log_customer']);*/
/* 					lis.eq(9).find('div').eq(1).text(data['not_log']);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//设置目标*/
/* 		setgoals();*/
/* 		var left;*/
/* */
/* 		function setgoals() {*/
/* 			$('.setgoals').click(function() {*/
/* 				var id = $(this).parents('div').find('[title="employees"]').val();*/
/* 				var user = JSON.parse(ykp.getCookie('userinfo'));*/
/* 				$(this).next().toggle();*/
/* 				var inputs = $(this).next().find("input");*/
/* 				var user_id = id;*/
/*                 var type = $(this).hasClass('ser') ? 2 : 1;*/
/* 				left = $(this).position();*/
/* 				var width = $('.indexContent').css('width');*/
/* 				$(this).next().css('right', (parseInt(width) - 400) + 'px');*/
/* 				left = left.left;*/
/* 				if($(this).next().is(':hidden')) {*/
/*                    //var mbData.user_id = user_id*/
/* 					var mbData = {*/
/* 						user_id: user_id*/
/* 					};*/
/* 					for(var i = 0; i < inputs.length; i++) {*/
/* 						var value = $(inputs[i]).val().trim();*/
/*                         if($(inputs[i]).attr("title") != 'contract_money') {*/
/* 							if(value != '') {*/
/* 								mbData[$(inputs[i]).attr("title")] = value;*/
/* 							}*/
/* 						} else {*/
/* 							if(value != '') {*/
/* 								if(!isNaN(value) && value > 0) {*/
/* 									mbData[$(inputs[i]).attr("title")] = value;*/
/* 								}*/
/* 							}*/
/* 						}*/
/* 					}*/
/*                     //保存目标*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_home/change_assistant',*/
/* 						data: mbData,*/
/* 						method: 'post',*/
/* 						success: function(res) {*/
/* 							ykp.prompt('目标编辑成功');*/
/* 						}*/
/* 					})*/
/* 					//保存目标值*/
/* 				} else {*/
/* 					*/
/* 					left = $(this).position('right');*/
/* 					findGoalById(user_id, type);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 		$(window).resize(function() {*/
/* 			var width = $('.indexContent').css('width');*/
/* */
/* 			$('.setgoals').next().css('right', (parseInt(width) - 400) + 'px');*/
/* */
/* 		})*/
/* */
/* 		//查某人当月所有目标---type：1为销售助手,2为服务助手*/
/* 		function findGoalById(id, type) {*/
/* 			var inputs = $('#saleHelper,#serviceHelper').find("input");*/
/* 			//通过id查所有目标并加载*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_home/info_next_assistant',*/
/* 				data: {*/
/* 					user_id: id*/
/* 				},*/
/* 				method: 'post',*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					mbData = data;*/
/* 					if(type == 1) {*/
/* 						$('[title="customer"]').val(data['customer']);*/
/* 						$('[title="contact"]').val(data['contact']);*/
/* 						$('[title="business"]').val(data['business']);*/
/* 						$('[title="visit"]').val(data['visit']);*/
/* 						$('[title="sales"]').val(data['sales']);*/
/* 						$('[title="contract"]').val(data['contract']);*/
/* 						$('[title="contract_money"]').val(data['contract_money']);*/
/* 						$('[title="payment"]').val(data['payment']);*/
/* 					} else {*/
/* 						$('[title="task"]').val(data['task']);*/
/* 						$('[title="zd"]').val(data['zd']);*/
/* 						$('[title="jz"]').val(data['jz']);*/
/* 						$('[title="zf"]').val(data['zf']);*/
/* 						$('[title="bs"]').val(data['bs']);*/
/* 						$('[title="sd"]').val(data['sd']);*/
/* 						$('[title="shd"]').val(data['shd']);*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//得到所有员工*/
/* 		function allemp() {*/
/* 			var emps;*/
/* 			var data = {*/
/* //				filter: 'bmm_employees.up_user = ' + ykp.getCookie('uid') + ' or bmm_employees.id = ' + ykp.getCookie('uid')*/
/* 			}*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_employees/get_up_user',*/
/* 				method: 'get',*/
/* 				data: data,*/
/* 				async: false,*/
/* 				success: function(res) {*/
/* 					emps = res.data;*/
/* 					var option = '';*/
/* 					for(var i in emps) {*/
/* 						option += `<option value="${emps[i]['id']}">*/
/* 						${emps[i]['name']}*/
/*                 		</option>`;*/
/* 					}*/
/* 					$("[title='employees']").html(option).val(ykp.getCookie('uid'));*/
/* 				}*/
/* 			})*/
/* 			return emps;*/
/* 		}*/
/* */
/* 		//查看明细表*/
/* 		getdetails()*/
/* */
/* 		function getdetails() {*/
/* 			$(".details").click(function() {*/
/* 				//跳转的页面*/
/* 				var _url = $(this).parent().find("[title='url']").val();*/
/* 				//负责人*/
/* 				var aid = $(this).parent().find('[title="employees"] option:selected').text().trim();*/
/* 				var aid_2 = $(this).parent().find('[title="employees"]').val();*/
/* 				//时间*/
/* 				var time = $(this).parent().find('[title="time"]').val();*/
/* 				if(_url.indexOf('!') != -1) {*/
/* 					_url.replace('!', '');*/
/* 				}*/
/* 				if(aid == undefined) {*/
/* 					aid = '';*/
/* 				}*/
/* 				if(aid_2 == undefined) {*/
/* 					aid_2 = '';*/
/* 				}*/
/* 				//ykp.setCookie('_url',_url, (1 / 24));*/
/*                 ykp.setCookie('aid', aid, (1 / 24));*/
/*                 ykp.setCookie('aid_2', aid_2, (1 / 24));*/
/*                 ykp.setCookie('time', time, (1 / 24));*/
/* 				//window.location='?url='+_url;*/
/* 				setTimeout(function () {*/
/*                     skPage('?url=' + _url);*/
/*                 })*/
/* */
/* 			})*/
/* 		}*/
/* 		$(".businessCon li").mouseover(function() {*/
/* 			$(this).addClass("titleMouse");*/
/* 		})*/
/* 		$(".businessCon li").mouseout(function() {*/
/* 			$(this).removeClass("titleMouse");*/
/* 		})*/
/* 		//查看所有公告*/
/* 		showMore();*/
/* */
/* 		function showMore() {*/
/* 			$("#showMore").click(function() {*/
/* 				if($(this).hasClass('active')) {*/
/* 					$('.notice').hide();*/
/* 					$('.in').removeClass('modal-backdrop');*/
/* 					$(this).removeClass('active').css('z-index', '');*/
/* 					return;*/
/* 				}*/
/* 				$('.notice').show();*/
/* 				$('.in').addClass('modal-backdrop');*/
/* 				$(this).addClass('active').css('z-index', '1042');*/
/* 				$('.notice').addClass('active').css('z-index', '1042');*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_notice/list',*/
/* 					method: 'get',*/
/* 					success: function(res) {*/
/* 						data = res.data;*/
/* 						var emps = allemp();*/
/* 						// console.log(emps);*/
/* 						var tr = '';*/
/* 						for(var i in data) {*/
/* 							tr += `<tr class="thColor" data-id='${data[i]['nm_notice.id']}' data-content="${data[i]['nm_notice.content']}">*/
/* 								<td class="hidden-480">${cs.getNowTime(data[i]['nm_notice.create_at'],true)}</td>*/
/* 								<td class="hidden-480">${data[i]['bmm_employees.name']}</td>*/
/* 								<td class="hidden-480" title="${data[i]['nm_notice.content']}"><label style="width:450px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;">${data[i]['nm_notice.content']}</label></td>*/
/* 								<td><label  class="pos-rel"><a style="margin-right: 6px;" title="删除" class="delnotice btRed"><i class="fa fa-trash-o"></i></a><a class="editnotice btBlue" title="编辑" style="margin-right: 10px;" ><i class="fa fa-pencil-square-o"></i></a></label></td>*/
/* 							</tr>`;*/
/* 						}*/
/* 						$('#_dataList').html(tr);*/
/* 						delnotice();*/
/* 						editnotice();*/
/* 					}*/
/* 				})*/
/* 			})*/
/* 		}*/
/* */
/* 		//公告栏显示隐藏*/
/* 		$('#addBtn').click(function() {*/
/* 			$('#feedBack').show();*/
/* 			$('#feedBack .hold').click(function() {*/
/* 				var approve_reply = $('#labelName').val().trim();*/
/* 				if(approve_reply == '') {*/
/* 					ykp.prompt('不能为空！');*/
/* 					return false;*/
/* 				}*/
/* 				addnotice(approve_reply); //执行添加*/
/* 				$(this).unbind('click', arguments.callee);*/
/* 				$('#feedBack').find('input').val("");*/
/* 				$('.close_label').parents('.label_popup').fadeOut();*/
/* 			})*/
/* 			$('.close_label').click(function() {*/
/* 				$('.close_label').parents('.label_popup').fadeOut();*/
/* 			})*/
/* 		})*/
/* */
/* 		//鼠标移动到table相应的th时,饼图切换至相应数据*/
/* 		$('.indexContent th').mouseover(function() {*/
/* 			if($(this).index() == 0) {*/
/* 				return;*/
/* 			}*/
/* 			$(this).css('cursor', 'pointer');*/
/* 			if($(this).hasClass('current')) {*/
/* 				return;*/
/* 			}*/
/* 			$('.indexContent .current').removeClass('current');*/
/* 			$(this).addClass('current');*/
/* 			var idss = $('.helpers .active').find('a').attr('href');*/
/* 			getPieChart(idss + ' .pie');*/
/* 		});*/
/* */
/* 		//工作助手切换*/
/* 		liOnChange();*/
/* */
/* 		function liOnChange() {*/
/* 			$('.helpers li').click(function(e) {*/
/* 				if($(this).hasClass('active')) {*/
/* 					return false;*/
/* 				}*/
/* 				$(this).addClass('active').siblings().removeClass('active');*/
/* 				var idss = $(this).find('a').attr('href');*/
/* 				$(idss).show().siblings().hide();*/
/* 				if($(this).index() == 1) {*/
/* 					var user2 = $(idss).find("[title='employees']").val();*/
/* 					var kname = $(idss).find("[title='url'] option:selected").attr('kname');*/
/* 					var postData2 = {*/
/* 						time: $('#serviceHelper1').find("[title='time']").val(),*/
/* 						type: $('#serviceHelper1').find("[title='url'] option:selected").attr('kind')*/
/* 					}*/
/* 					if(idss == '#serviceHelper1') {*/
/* 						doGetChart('/api/api_home/home_total_chart', postData2, kname, $(idss));*/
/* 						return;*/
/* 					}*/
/* 					postData2['user'] = user2;*/
/* 					postData2['time'] = $('#serviceHelper').find("[title='time']").val();*/
/* 					postData2['type'] = $('#serviceHelper').find("[title='url'] option:selected").attr('kind')*/
/* 					doGetChart('/api/api_home/home_chart', postData2, kname, $(idss));*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//页面跳转*/
/* 		function skPage(urls) {*/
/* 			var url_ = urls.split('&')[0].split('=')[1];*/
/* 			$('#navBox #nav-list li').find('li[data-url="/admin/' + url_ + '"]').click();*/
/* 		}*/
/* */
/* 		//下拉框改变时请求数据*/
/* 		helperOnChange();*/
/* */
/* 		function helperOnChange() {*/
/* 			$("#serviceHelper select,#saleHelper select,#serviceHelper1 select,#saleHelper1 select").change(function() {*/
/* 				var parent = $(this).parent().parent();*/
/* 				var user = $(parent).find("[title='employees']").val();*/
/* 				var kname = $(parent).find("[title='url'] option:selected").attr('kname');*/
/* 				var posturl = '';*/
/* 				var postData = {*/
/* 					time: $(parent).find("[title='time']").val(),*/
/* 					type: $(parent).find("[title='url'] option:selected").attr('kind')*/
/* 				}*/
/* 				if(user) {*/
/* 					postData['user'] = user;*/
/* 					posturl = '/api/api_home/home_chart';*/
/* 				} else {*/
/* 					posturl = '/api/api_home/home_total_chart';*/
/* 				}*/
/* 				doGetChart(posturl, postData, kname, parent);*/
/* 			})*/
/* 		}*/
/* */
/* 		var user1 = $('#saleHelper').find("[title='employees']").val();*/
/* 		var postData1 = {*/
/* 			user: user1,*/
/* 			time: 3,*/
/* 			type: 8*/
/* 		}*/
/* */
/* 		var postData2 = {*/
/* 			time: 3,*/
/* 			type: 8*/
/* 		}*/
/* */
/* 		//默认加载的个人*/
/* 		doGetChart('/api/api_home/home_chart', postData1, 'customer', $('#saleHelper'));*/
/* 		//默认加载的公司*/
/* 		doGetChart('/api/api_home/home_total_chart', postData2, 'customer', $('#saleHelper1'));*/
/* */
/* 		function doGetChart(posturl, postData, kname, selector) {*/
/* 			ykp.doAjax({*/
/* 				url: posturl,*/
/* 				method: 'post',*/
/* 				data: postData,*/
/* 				success: function(res) {*/
/* 					if(postData.user) {*/
/* 						addlineChart(res, '#' + selector.attr('id'), kname, postData.time);*/
/* 						return;*/
/* 					}*/
/* 					addHistogramChart(res, '#' + selector.attr('id'), kname, postData.time);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//添加*/
/* 		function addlineChart(data, selector, kname, time) {*/
/* 			var dat = data.data;*/
/*             var lastMonth = dat.lastWorkDay[1];*/
/* 			var lastWeekend = dat.lastWorkDay[2]; //上月非工作日*/
/* 			var thisMonth = dat.thisWorkDay[1];*/
/* 			var thisWeekend = dat.thisWorkDay[2]; //上月非工作日*/
/* 			var allDay = lastMonth;*/
/* 			var thisDays = dat.chart; //区间内的总日期*/
/* 			var thisWorkDays = []; //x轴日期数组**/
/* 			var finishData = []; //每日完成数组*/
/* 			var lastTotal = dat.user.last[kname] == undefined ? 0 : dat.user.last[kname]; //该项上月总目标*/
/* 			var thisTotal = dat.user.this[kname] == undefined ? 0 : dat.user.this[kname]; //该项本月总目标*/
/* 			var lastp = Math.ceil(lastTotal / (dat.lastWorkDay[0] + dat.lastWorkDay[2].length)); //上月日均目标;*/
/* 			var thisp = Math.ceil(thisTotal / (dat.thisWorkDay[0] + dat.thisWorkDay[2].length)); //本月日均目标;*/
/* 			var lastData = [],*/
/* 				thisData = [],*/
/* 				totalData = [],*/
/* 				noFinishData = []; //待展示结果数组**/
/* 			var lastnum = 0; //上、本月区间工作日*/
/* 			//var date;//周几*/
/* 			for(var i in lastWeekend) {*/
/* 				lastMonth.push(lastWeekend[i]);*/
/* 			}*/
/* 			for(var i in thisWeekend) {*/
/* 				thisMonth.push(thisWeekend[i]);*/
/* 			}*/
/* */
/* 			//如果是今天*/
/* 			if(time == 1) {*/
/* 				thisWorkDays.push(cs.getNowTime(new Date().setHours(0, 0, 0, 0) / 1000).substring(5, 10));*/
/* 				totalData.push(thisp);*/
/* 				finishData.push(thisDays.num);*/
/* 				noFinishData.push(totalData[0] - finishData[0]);*/
/* 				//date = new Date().getDay();*/
/* 			}*/
/* 			//如果是昨天*/
/* 			if(time == 2) {*/
/* 				var today = cs.getNowTime(new Date().setHours(0, 0, 0, 0) / 1000);*/
/* 				var yesterday = cs.getNowTime(new Date().setHours(0, 0, 0, 0) / 1000 - 86400);*/
/* 				thisWorkDays.push(yesterday.substring(5, 10))*/
/* 				if(today.substring(5, 7) == yesterday.substring(5, 7)) {*/
/* 					totalData.push(thisp);*/
/* 				} else {*/
/* 					totalData.push(lastp);*/
/* 				}*/
/* 				finishData.push(thisDays.num);*/
/* 				noFinishData.push(totalData[0] - finishData[0]);*/
/* 				//date = new Date(yesterday).getDay();*/
/* 			}*/
/* */
/* 			/*if (date=='0'||date=='6') {*/
/* 				ykp.prompt('所查询日期不是工作日');*/
/* 				thisWorkDays = [];*/
/* 				totalData = [];*/
/* 				finishData = [];*/
/* 				noFinishData = [];*/
/* 			}*//* */
/* */
/* 			if(time > 2) {*/
/* 				//得到展示日期*/
/* 				for(var i in thisDays) {*/
/* 					thisWorkDays.push(thisDays[i].time.substring(5));*/
/* 				}*/
/* */
/* 				for(var i in lastMonth) {*/
/* 					for(var j in thisDays) {*/
/* 						if(lastMonth[i] == thisDays[j].time) {*/
/* 							lastnum++; //上月区间有几天*/
/* 							//thisWorkDays.push(thisDays[j].time.substring(5));//区间工作日数组2*/
/* 							finishData.push(parseInt(thisDays[j].num)); //区间完成数数组3*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				for(var i in thisMonth) {*/
/* 					allDay.push(thisMonth[i]);*/
/* 				}*/
/* 				//得到区间工作日*/
/* 				for(var i in thisMonth) {*/
/* 					for(var j in thisDays) {*/
/* 						if(thisMonth[i] == thisDays[j].time) {*/
/* 							//thisWorkDays.push(thisDays[j].time.substring(5));//区间工作日数组2*/
/* 							finishData.push(parseInt(thisDays[j].num)); //区间完成数数组3*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				//添加上月区间日均目标列表*/
/* 				if(lastnum > 0) {*/
/* 					for(var i = 0; i < lastnum; i++) {*/
/* 						totalData.push(lastp);*/
/* 					}*/
/* 				}*/
/* 				//得到总的日均数组*/
/* 				for(var i = 0; i < finishData.length - lastnum; i++) {*/
/* 					totalData.push(thisp); //*/
/* 				}*/
/* 				//得到未完成数组*/
/* 				for(var i in totalData) {*/
/* 					var nof = totalData[i] - finishData[i];*/
/* 					if(nof < 0) {*/
/* 						nof = 0;*/
/* 					}*/
/* 					noFinishData.push(nof); //区间未完成数组*/
/* 				}*/
/* 			}*/
/* 			var tot = 0;*/
/* 			for(var i in totalData) {*/
/* 				tot += totalData[i];*/
/* 			}*/
/* 			$(selector + ' .no_finish').text(tot - dat.complete >= 0 ? tot - dat.complete : 0);*/
/*             console.log(dat.complete);*/
/*             $(selector + ' .f_totalgoal').text(dat.complete);*/
/* 			$(selector + ' .totalgoal').text(tot);*/
/* 			getLineChart(selector + ' .line_', thisWorkDays, noFinishData, finishData, totalData);*/
/* 			//console.log(noFinishData);*/
/* 			//console.log(finishData);*/
/* 			//console.log(totalData);*/
/* */
/* 		}*/
/* */
/* 		//判断data是否在arr这个数组中*/
/* 		function inHereArray(arr, data) {*/
/* 			for(var i = 0; i < arr.length; i++) {*/
/* 				if(arr[i] == data) {*/
/* 					return true;*/
/* 				}*/
/* 			}*/
/* 			return false;*/
/* 		}*/
/* */
/* 		//展示柱状图*/
/* 		function addHistogramChart(data, selector, kname, time) {*/
/* 			var x_user = [],*/
/* 				num = [];*/
/* 			var dat = data.data.chart;*/
/* 			var date;*/
/* 			var yesterday = cs.getNowTime(new Date().setHours(0, 0, 0, 0) / 1000 - 86400);*/
/* 			if(time == 1 || time == 2) {*/
/* 				date = time == 1 ? new Date().getDay() : new Date(yesterday).getDay();*/
/* 			}*/
/* 			for(var i in dat) {*/
/* 				x_user.push(dat[i]['name']);*/
/* 				num.push(dat[i]['num']);*/
/* 			}*/
/* 			if(date == '0' || date == '6') {*/
/* 				ykp.prompt('所查询日期不是工作日');*/
/* 				getHistogramChart(selector + ' .histogram', x_user, num);*/
/* 				return;*/
/* 			}*/
/* 			if(x_user.length == 0) {*/
/* 				ykp.prompt('暂无数据');*/
/* 				getHistogramChart(selector + ' .histogram', x_user, num);*/
/* 				return;*/
/* 			}*/
/* 			getHistogramChart(selector + ' .histogram', x_user, num);*/
/* 		}*/
/* */
/* 		//获取折线图*/
/* 		function getLineChart(line, xdata, data_1, data_2, data_3) {*/
/* 			var line = echarts.init($(line)[0]);*/
/* 			option = {*/
/* 				title: {*/
/* 					text: '',*/
/* 					subtext: ''*/
/* 				},*/
/* 				tooltip: {*/
/* 					trigger: 'axis'*/
/* 				},*/
/* 				legend: {*/
/* 					data: []*/
/* 				},*/
/* 				toolbox: {*/
/* 					show: true*/
/* 				},*/
/* 				xAxis: {*/
/* 					interval: 0,*/
/* 					type: 'category',*/
/* 					boundaryGap: false,*/
/* 					data: xdata,*/
/* 					axisLabel: {*/
/* 						interval: 0,*/
/* 						rotate: 45*/
/* 					},*/
/* 				},*/
/* 				yAxis: {*/
/* 					type: 'value',*/
/* 					axisLabel: {*/
/* 						formatter: '{value} '*/
/* 					}*/
/* 				},*/
/* 				grid: {*/
/* 					left: '1%',*/
/* 					right: '2%',*/
/* 					bottom: '6%',*/
/* 					top: '12%',*/
/* 					containLabel: true*/
/* 				},*/
/* */
/* 				series: [{*/
/* 						name: '未完成',*/
/* 						type: 'line',*/
/* 						data: data_1,*/
/* 						markPoint: {*/
/* 							/* data: [*/
/* 							     {type: 'max', name: '最大值'},*/
/* 							     {type: 'min', name: '最小值'}*/
/* 							 ]*//* */
/* 						},*/
/* 						/*markLine: {*/
/* 						    data: [*/
/* 						        {type: 'average', name: ''}*/
/* 						    ]*/
/* 						}*//* */
/* 					},*/
/* 					{*/
/* 						name: '已完成',*/
/* 						type: 'line',*/
/* 						data: data_2,*/
/* 						markPoint: {*/
/* 							data: [{*/
/* 								name: '周最低',*/
/* 								value: -2,*/
/* 								xAxis: 1,*/
/* 								yAxis: -1.5*/
/* 							}]*/
/* 						},*/
/* 						itemStyle: {*/
/* 							normal: {*/
/* 								color: '#33ff99',*/
/* 								lineStyle: {*/
/* 									color: '#33ff99'*/
/* 								}*/
/* 							}*/
/* 						},*/
/* 						/*markLine: {*/
/* 			                data: [*/
/* 			                    {type: 'average', name: ''},*/
/* 			                    [{*/
/* 			                        symbol: 'none',*/
/* 			                        x: '90%',*/
/* 			                        yAxis: 'max'*/
/* 			                    }, {*/
/* 			                        symbol: 'circle',*/
/* 			                        label: {*/
/* 			                            normal: {*/
/* 			                                position: 'start',*/
/* 			                                formatter: '',*/
/* 		                                 	*/
/* 			                            },*/
/* 			                        },*/
/* 			                        type: 'max',*/
/* 			                        name: ''*/
/* 			                    }]*/
/* 			                ]*/
/* 			            }*//* */
/* 					},*/
/* 					{*/
/* 						name: '目标',*/
/* 						type: 'line',*/
/* 						data: data_3,*/
/* 						markPoint: {*/
/* 							data: [{*/
/* 								name: '周最低',*/
/* 								value: -2,*/
/* 								xAxis: 1,*/
/* 								yAxis: -1.5*/
/* 							}]*/
/* 						},*/
/* 						itemStyle: {*/
/* 							normal: {*/
/* 								color: '#3366ff',*/
/* 								lineStyle: {*/
/* 									color: '#3366ff'*/
/* 								}*/
/* 							}*/
/* 						},*/
/* 						/*markLine: {*/
/* 						    data: [*/
/* 						        {type: 'average', name: ''},*/
/* 						        [{*/
/* 						            symbol: 'none',*/
/* 						            x: '90%',*/
/* 						            yAxis: 'max'*/
/* 						        }, {*/
/* 						            symbol: 'circle',*/
/* 						            label: {*/
/* 						                normal: {*/
/* 						                    position: 'start',*/
/* 						                    formatter: ''*/
/* 						                }*/
/* 						            },*/
/* 						            type: 'max',*/
/* 						            name: ''*/
/* 						        }]*/
/* 						    ]*/
/* 						}*//* */
/* 					}*/
/* 				]*/
/* 			};*/
/* 			line.setOption(option);*/
/* 			/*var option={*/
/* 				tooltip: {*/
/* 					trigger: 'item',*/
/* 					formatter: '{a} <br/>{b} : {c}'*/
/* 				},*/
/* 				xAxis: {*/
/* 					type: 'category',*/
/* 					splitLine: {*/
/* 						show: false*/
/* 					},*/
/* 					axisLabel:{*/
/* 						interval:0,*/
/* 					},*/
/* 					data: xdata*/
/* 				},*/
/* 				grid: {*/
/* 					left: '1%',*/
/* 					right: '2%',*/
/* 					bottom: '6%',*/
/* 					top:'12%',*/
/* 					containLabel: true*/
/* 				},*/
/* 				yAxis: {*/
/* 					type: 'log'*/
/* 				},*/
/* 				series: [{*/
/* 						name: '未完成',*/
/* 						type: 'line',*/
/* 						data: data_1*/
/* 					},*/
/* 					{*/
/* 						name: '已完成',*/
/* 						type: 'line',*/
/* 						data: data_2*/
/* 					},*/
/* 					{*/
/* 						name: '目标',*/
/* 						type: 'line',*/
/* 						data: data_3*/
/* 					}*/
/* 				]*/
/* 			};*/
/* 			line.setOption(option);*//* */
/* 			$(window).resize(function() {*/
/* 				var dHeight = $(document.body).height();*/
/* 				$('#bottom').css('height', dHeight - 174 + 'px');*/
/* 				$('.line_').parents('.row').height();*/
/* 				$('.line_').css('height', ($('.line_').parents('.row').height() - 100) + 'px');*/
/* 				$('.histogram').css('height', ($('.line_').parents('.row').height() - 100) + 'px');*/
/* 				window.onresize = line.resize()*/
/* 			})*/
/* 			/* window.onresize = function () {*/
/* 			    myChartContainer();*/
/* 			    line.resize();*/
/* 			};*//* */
/* 		}*/
/* */
/* 		//getHistogramChart('#saleHelper1 .histogram');*/
/* 		//获取柱状图*/
/* 		function getHistogramChart(histogram, xdata, ydata) {*/
/* 			if(xdata.length == 0 || ydata.length == 0){*/
/* 				$(histogram).html("<div style='text-align: center;height: 100%;line-height: 50;'>暂无数据</div>");*/
/* 				return false;*/
/* 			}*/
/* 				*/
/* 			var histogram = echarts.init($(histogram)[0]);*/
/* */
/* 			var option = {*/
/* 				tooltip: {*/
/* 					trigger: 'axis',*/
/* 					axisPointer: { // 坐标轴指示器，坐标轴触发有效*/
/* 						type: 'shadow' // 默认为直线，可选为：'line' | 'shadow'*/
/* 					}*/
/* 				},*/
/* 				xAxis: {*/
/* 					data: xdata,*/
/* 					axisLabel: {*/
/* 						inside: true,*/
/* 						rotate: 0,*/
/* 						textStyle: {*/
/* 							color: '#000'*/
/* 						},*/
/* 						formatter: function(val) {*/
/* 							return val.split("").join("\n");*/
/* 						}*/
/* 					},*/
/* 					axisTick: {*/
/* 						show: false*/
/* 					},*/
/* 					axisLine: {*/
/* 						show: false*/
/* 					},*/
/* 					z: 10*/
/* 				},*/
/* 				yAxis: [{*/
/* 					type: 'value'*/
/* 				}],*/
/* 				grid: {*/
/* 					left: '1%',*/
/* 					right: '2%',*/
/* 					bottom: '2%',*/
/* 					top: '5%',*/
/* 					containLabel: true*/
/* 				},*/
/* 				dataZoom: [{*/
/* 					type: 'inside'*/
/* 				}],*/
/* 				series: [*/
/* 					{*/
/* 						type: 'bar',*/
/* 						itemStyle: {*/
/* 							normal: {*/
/* 								color: new echarts.graphic.LinearGradient(*/
/* 									0, 0, 0, 1, [{*/
/* 											offset: 0,*/
/* 											color: '#83bff6'*/
/* 										},*/
/* 										{*/
/* 											offset: 0.5,*/
/* 											color: '#188df0'*/
/* 										},*/
/* 										{*/
/* 											offset: 1,*/
/* 											color: '#188df0'*/
/* 										}*/
/* 									]*/
/* 								)*/
/* 							},*/
/* 							emphasis: {*/
/* 								color: new echarts.graphic.LinearGradient(*/
/* 									0, 0, 0, 1, [{*/
/* 											offset: 0,*/
/* 											color: '#2378f7'*/
/* 										},*/
/* 										{*/
/* 											offset: 0.7,*/
/* 											color: '#2378f7'*/
/* 										},*/
/* 										{*/
/* 											offset: 1,*/
/* 											color: '#83bff6'*/
/* 										}*/
/* 									]*/
/* 								)*/
/* 							}*/
/* 						},*/
/* 						data: ydata*/
/* 					}*/
/* 				]*/
/* 			};*/
/* 			histogram.setOption(option);*/
/* 			$(window).resize(function() {*/
/* 				var dHeight = $(document.body).height();*/
/* 				$('#bottom').css('height', dHeight - 174 + 'px');*/
/* 				$('#saleHelper1 .histogram').parents('.row').height();*/
/* 				$('#saleHelper1 .histogram').css('height', ($('#saleHelper1 .histogram').parents('.row').height() - 100) + 'px');*/
/* 				$('#saleHelper1 .histogram').css('height', ($('#saleHelper1 .histogram').parents('.row').height() - 100) + 'px');*/
/* 				window.onresize = histogram.resize();*/
/* 			})*/
/* 			var zoomSize = 6;*/
/* 			histogram.on('click', function(params) {*/
/* 				//console.log(xdata[Math.max(params.dataIndex - zoomSize / 2, 0)]);*/
/* 				histogram.dispatchAction({*/
/* 					type: 'dataZoom',*/
/* 					startValue: xdata[Math.max(params.dataIndex - zoomSize / 2, 0)],*/
/* 					endValue: xdata[Math.min(params.dataIndex + zoomSize / 2, ydata.length - 1)]*/
/* 				});*/
/* 			});*/
/* 		}*/
/* */
/* 		//		getPieChart('#saleHelper .pie');*/
/* 		//获取饼图*/
/* 		/*function getPieChart(pie) {*/
/* 			var legendData = [];*/
/* 			var seriesData = [];*/
/* 			var seriesName = $('.indexContent .current').text();*/
/* 			var currentThIndex = $('.indexContent .current').index();*/
/* 			if(pie.indexOf('#saleHelper') != -1) {*/
/* 				legendData = ['已完成', '目标', '距离目标'];*/
/* 				seriesData = [{*/
/* 						value: $('#saleHelper .finished').find('td').eq(currentThIndex).text(),*/
/* 						name: '已完成'*/
/* 					},*/
/* 					{*/
/* 						value: $('#saleHelper .goal').find('td').eq(currentThIndex).text(),*/
/* 						name: '目标'*/
/* 					},*/
/* 					{*/
/* 						value: $('#saleHelper .rangeTarget').find('td').eq(currentThIndex).text(),*/
/* 						name: '距离目标'*/
/* 					}*/
/* 				];*/
/* 			}*/
/* 			if(pie.indexOf('#serviceHelper') != -1) {*/
/* 				legendData = ['已完成', '未完成'];*/
/* 				seriesData = [{*/
/* 						value: $('#serviceHelper .finished').find('td').eq(currentThIndex).text(),*/
/* 						name: '已完成'*/
/* 					},*/
/* 					{*/
/* 						value: $('#serviceHelper .unfinished').find('td').eq(currentThIndex).text(),*/
/* 						name: '未完成'*/
/* 					}*/
/* 				];*/
/* 			}*/
/* 			if(pie.indexOf('#financeHelper') != -1) {*/
/* 				legendData = ['团队工资', '自用'];*/
/* 				seriesData = [{*/
/* 					value: 15,*/
/* 					name: '团队工资'*/
/* 				}, {*/
/* 					value: 15,*/
/* 					name: '自用'*/
/* 				}];*/
/* 				seriesName = '财务支出';*/
/* 			}*/
/* */
/* 			//饼图*/
/* 			var pie = echarts.init($(pie)[0]);*/
/* 			var option = {*/
/* 				tooltip: {*/
/* 					trigger: 'item',*/
/* 					formatter: "{a} <br/>{b} : {c} ({d}%)"*/
/* 				},*/
/* 				legend: {*/
/* 					orient: 'vertical',*/
/* 					right: 20,*/
/* 					data: legendData*/
/* 				},*/
/* 				series: [{*/
/* 					name: seriesName,*/
/* 					type: 'pie',*/
/* 					radius: '90%',*/
/* 					center: ['50%', '50%'],*/
/* 					data: seriesData,*/
/* 					itemStyle: {*/
/* 						emphasis: {*/
/* 							shadowBlur: 10,*/
/* 							shadowOffsetX: 0,*/
/* 							shadowColor: 'rgba(0, 0, 0, 0.5)'*/
/* 						}*/
/* 					}*/
/* 				}]*/
/* 			};*/
/* 			pie.setOption(option);*/
/* 		}*//* */
/* 	})*/
/* </script>*/
