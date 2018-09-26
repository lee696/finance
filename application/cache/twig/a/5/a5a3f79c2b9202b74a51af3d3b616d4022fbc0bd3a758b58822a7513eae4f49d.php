<?php

/* admin/manage/payManage.html */
class __TwigTemplate_c5320524a857f55a5d79053c73b879e589ae14c44ad9bcd3dec57ddd6a52b85c extends Twig_Template
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
\t#add_company label {
\t\twidth: 60px;
\t\ttext-align: right;
\t}
\t
\t.powerContent {
\t\tdisplay: inline-block;
\t\tborder: 1px solid #ddd;
\t\tpadding: 15px;
\t}
\t
\t.functionPower ul {
\t\tlist-style-type: none;
\t\tmargin-left: 0;
\t\theight: 40px;
\t}
\t
\t.functionPower li {
\t\tfloat: left;
\t\tborder: 1px solid #ddd;
\t\tdisplay: inline-block;
\t\twidth: 80px;
\t\theight: 40px;
\t\tpadding: 8px;
\t\tbackground-color: #C5D0DC;
\t\tcolor: #001;
\t}
\t
\t.functionPower .current_function {
\t\tbackground-color: #fff;
\t\tborder-bottom: none;
\t}
\t
\t.powerContent>div {
\t\tmargin-bottom: 20px;
\t}
\t
\t.powerRelative {
\t\tbackground-color: #eee;
\t\tborder-radius: 3px;
\t\theight: 35px;
\t\tline-height: 35px;
\t\tpadding-left: 10px;
\t}
\t
\t.powerContent span {
\t\tmargin-right: 30px;
\t}
\t
\t.powerDetail {
\t\tpadding-left: 30px;
\t\tpadding-top: 5px;
\t\tpadding-bottom: 10px;
\t\tborder: 1px solid #ddd;
\t\tline-height: 30px;
\t}
\t
\t.tab-content {
\t\tpadding: 0;
\t}
\t
\t.tabbable.tabs-left {
\t\tmargin-top: 15px;
\t}
\t
\t.tabs-left>.nav-tabs>li {
\t\twidth: 150px;
\t}
\t
\tem,
\tlabel {
\t\tfont-style: normal;
\t\tfont-weight: normal;
\t}
\t
\t.li_tit {
\t\tpadding-left: 20px;
\t\tbackground-image: url(/resource/adimin/assets/css/images/tree_tit.gif);
\t\tbackground-repeat: no-repeat;
\t\tbackground-position: 6px 13px;
\t}
\t
\t.li_bar {
\t\tbackground-image: url(/resource/adimin/assets/css/images/tree_bg.gif);
\t\tbackground-repeat: repeat-y;
\t\tbackground-position: 5px 0px;
\t}
\t
\t.li_bar .li_bar {
\t\tbackground-position: 25px 0px;
\t}
\t
\t.li_bar_two {
\t\tmargin-left: 0;
\t}
\t
\t.li_tit span {
\t\tdisplay: block;
\t\tclear: both;
\t\tfont-size: 12px;
\t\tcolor: #F60;
\t}
\t
\t.li_tit span label {
\t\tcolor: #333;
\t\tmargin-right: 10px;
\t\tfont-size: 12px;
\t\tdisplay: inline-block;
\t\twidth: 150px;
\t\tline-height: 28px;
\t}
\t
\t.li_tit>p>em {
\t\tposition: relative;
\t\tbottom: 0;
\t}
\t
\tvolist>label {
\t\tposition: relative;
\t\tbottom: 0;
\t}
\t
\tb.power_name {
\t\tposition: relative;
\t\tbottom: 2px;
\t}
\t
\t.layui-form-label {
\t\twidth: 60px;
\t\ttext-align: right;
\t\tpadding: 0;
\t}

\t#templateCon label {
\t\twidth: 114px;
\t\ttext-align: right;
\t}

\t#templateCon input,
\tinput {
\t\twidth: 180px;
\t}
</style>
<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<div id=\"topTool\" style=\"margin-left:0 !important;padding-left:0 !important;margin-top:20px;position:relative\">
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<input type=\"text\" pts=0 sear=\"um_company.username\" placeholder=\"主账号\" autofocus/>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button type=\"button\" id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t<i class=\"fa fa-search\"></i>\t
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button id=\"flush\" type=\"button\" title=\"刷新\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
\t            \t<i class=\"fa fa-refresh\"></i>\t
\t           \t</button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" contentAuthority=\"238\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button type=\"button\" title=\"添加公司\" id=\"add\" class=\"btn btn-info btn-sm\" style=\"border-color: #32CD32 !important;background: #32CD32 !important;\" >
\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div style=\"clear:both;\"></div>
\t\t</div>

\t\t<div style=\"padding:20px 0;\">
\t\t\t<div class=\"custom_table\">
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t\t<th>公司名称</th>
\t\t\t\t\t\t\t<th>主账号</th>
\t\t\t\t\t\t\t<th>数量</th>
\t\t\t\t\t\t\t<th>系统版本</th>
\t\t\t\t\t\t\t<th>费用</th>
\t\t\t\t\t\t\t<th>有效期</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody class=\"pay_company\">

\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>

\t\t<div align=\"center\" style=\"padding:20px 0;\">
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

\t<div id=\"add_company\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t<div style=\"width:542px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t<span style=\"display: inline-block;font-size:16px;\" class=\"title\"></span>
\t\t\t\t<a href=\"javascript:;\" class=\"close_manage\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t</div>
\t\t\t<div style=\"padding: 10px 10px;\">
\t\t\t\t<div style=\"padding: 10px;\">
\t\t\t\t\t<label>公司名称：</label>
\t\t\t\t\t<input type=\"text\" field=\"name\" style=\"height:30px;\" message=\"请输入公司名称\" />
\t\t\t\t\t<label>费用：</label>
\t\t\t\t\t<input type=\"number\" field=\"money\" style=\"height:30px;\" message=\"请输入费用\" />
\t\t\t\t</div>
\t\t\t\t<!-- <div style=\"text-align:center;padding: 10px;\">
\t\t\t\t\t
\t\t\t\t</div> -->
\t\t\t\t<div style=\"padding: 10px;position:relative;\">
\t\t\t\t\t<label style=\"float:left;margin-right:5px;\">有效期：</label>
\t\t\t\t\t<input type=\"text\" class=\"date-timepicker1\" field=\"start_time\" style=\"float:left;\" message=\"请选择开始时间\">
\t\t\t\t\t<span style=\"border:1px solid #ddd;padding:6px;background: #ddd;\">
\t\t\t\t\t\t<i class=\"fa fa-exchange\" style=\"position:relative;left:2px;\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<input type=\"text\" class=\"date-timepicker1\" field=\"end_time\" message=\"请选择结束时间\">
\t\t\t\t\t<!-- <input class=\"test6\" type=\"text\" field=\"start_time,end_time\" style=\"height:30px;position:relative;\"> -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t<button class=\"btn btn-info btn-sm close_manage\">关闭</button>
\t\t\t\t<button class=\"btn btn-info btn-sm hold\">保存</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"_account-manage\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t<span style=\"display: inline-block;font-size:16px;\">账号管理</span>
\t\t\t\t<a href=\"javascript:;\" class=\"close_manage\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t</div>
\t\t\t<div style=\"padding: 10px 10px;max-height:400px;overflow-y:auto;\">
\t\t\t\t<div style=\"text-align:left;padding: 10px;\">
\t\t\t\t\t<label style=\"width:72px;text-align:right;\">主账号：</label>
\t\t\t\t\t<input type=\"text\" field=\"username\" title=\"密码默认为：123456\" />
\t\t\t\t\t<a href=\"javascript:;\" class=\"reset_password\" style=\"text-decoration:underline;font-size:12px;position:relative;top:5px;\">重置密码</a>
\t\t\t\t</div>
\t\t\t\t<div style=\"text-align:left;padding: 10px;\">
\t\t\t\t\t<label style=\"width:72px;text-align:right;\">默认密码：</label>
\t\t\t\t\t<input type=\"text\" value=\"123456\" disabled/>
\t\t\t\t</div>
\t\t\t\t<div style=\"text-align:left;padding: 10px;\">
\t\t\t\t\t<label>子账号数量：</label>
\t\t\t\t\t<input type=\"number\" field=\"num\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"account_message\">

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t<button class=\"btn btn-info btn-sm close_manage\">关闭</button>
\t\t\t\t<button class=\"btn btn-info btn-sm hold\">保存</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"power-manage\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t<div style=\"width:800px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t<span style=\"display: inline-block;font-size:16px;\" class=\"title\"></span>
\t\t\t\t<a href=\"javascript:;\" class=\"close_manage\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t</div>
\t\t\t<div style=\"padding: 10px 10px;max-height:500px;overflow-y:auto;\" class=\"getTemplate\">
\t\t\t\t<select style=\"margin: 12px !important;width: 180px\"  class=\"advandced-search\">

\t\t\t\t</select>
\t\t\t\t<button type=\"button\" id=\"add\" class=\"btn btn-sm delTemplate\">
\t\t\t\t\t删除模板
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div style=\"padding: 10px 10px;max-height:410px;overflow-y:auto;\" class=\"power_detail\">
\t\t\t</div>
\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t<button class='btn btn-info btn-sm checkAll setTemplate'>设为模板</button>
\t\t\t\t<button class='btn btn-info btn-sm checkAll checkAll1'>全选</button>
\t\t\t\t<!--<button class='btn btn-info btn-sm checkAll checkAll2'>反选</button>-->
\t\t\t\t<button class=\"btn btn-info btn-sm hold_power\">保存</button>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"label_popup\" id=\"feedBack\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t        box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t<span style=\"display: inline-block;\">请填写模板名称</span>
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
\t<div id=\"dtlPage1\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t<div style=\"width:780px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t<span style=\"display: inline-block;font-size:16px;\">修改详情</span>
\t\t\t\t<a href=\"javascript:;\" class=\"close_manage\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t</div>
\t\t\t<div class=\"dtlbox\" style=\"padding: 10px 10px;max-height:400px;overflow-y:auto;\">

\t\t\t</div>
\t\t\t<div align=\"center\" style=\"padding:20px;\">
\t\t\t\t<div align=\"left\" style=\"float: left;\" id=\"contnum\"></div>
\t\t\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t\t\t<div  class=\"dlpageBar pagination\"></div>
\t\t\t\t<div align=\"right\" style=\"float: right;\">
\t\t\t\t\t<select style=\"width: 100px;\" class=\"_changePageNum\">
\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t<button class=\"btn btn-info btn-sm close_manage\">关闭</button>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 343
        $this->loadTemplate("admin/mark.html", "admin/manage/payManage.html", 343)->display($context);
        // line 344
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script type=\"text/javascript\">
\t\$(function() {
\t\tcs.getNodes([238]);
\t\tif(ykp.getCookie('nodes').split(',').indexOf(\"83\") == -1) {
\t\t\tlocation.href = '/admin/error';
\t\t}
\t\t
\t\tvar templateNodes = '';// 存放权限模板
\t\t//时间插件
\t\tcs.timeplug();

\t\t//全选
\t\tcheckAll();

\t\tfunction checkAll() {
\t\t\t\$('.checkAll').unbind('click').click(function() {
\t\t\t\tif(\$(this).hasClass('checkAll1')) {
\t\t\t\t\t\$('.power_detail').find('input[type=\"checkbox\"]').prop('checked', true);
\t\t\t\t}
\t\t\t\tif(\$(this).hasClass('checkAll2')) {
\t\t\t\t\t\$('.power_detail').find('input[type=\"checkbox\"]').prop('checked', false);
\t\t\t\t}
\t\t\t\tif(\$(this).hasClass('setTemplate')) {
\t\t\t\t\tvar nodes = [];
\t\t\t\t\t\$('#power-manage').find('input[data-id]:checked,input[dtid]:checked').each(function(i, e) {
\t\t\t\t\t\tif(\$(this).attr('data-id')) {
\t\t\t\t\t\t\tnodes.push(\$(this).attr('data-id'));
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('dtid')) {
\t\t\t\t\t\t\tnodes.push(\$(this).attr('dtid'));
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t//console.log(nodes.join(','));
\t\t\t\t\t//\t\t\t\t\tpostdata['nodes'] = nodes.join(',');

\t\t\t\t\t\$('#feedBack').show();
\t\t\t\t\t\$('#feedBack').find('input').val('');
\t\t\t\t\t\$('#feedBack .hold').unbind('click').click(function() {
\t\t\t\t\t\tvar approve_reply = \$('#feedBack').find('input').val().trim();
\t\t\t\t\t\tif(approve_reply == '') {
\t\t\t\t\t\t\tykp.prompt('不能为空！');
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: \"/api/api_role/add_role_template\",
\t\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tname: approve_reply,
\t\t\t\t\t\t\t\tnodes: nodes.join(',')
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tgetTemplate();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t\t})
\t\t\t\t\tcs.closePop();
\t\t\t\t}

\t\t\t});
\t\t}

\t\t//请求参数
\t\tvar _postdata = {
\t\t\tlimit: 10, //每页显示的条目数
\t\t\tfilter: '', //查询条件
\t\t\torder: 'um_company.id desc'
\t\t};

\t\t//切换每页显示的条目数
\t\tswitchPagesize();

\t\tfunction switchPagesize() {
\t\t\t\$('#changePageNum').change(function() {
\t\t\t\t_postdata.limit = \$(this).val();
\t\t\t\tgetList();
\t\t\t});

\t\t}

\t\t//普通搜索
\t\tgeneralSearch();

\t\tfunction generalSearch() {
\t\t\t\$('#search').unbind('click').click(function() {
\t\t\t\tif(\$('[sear=\"um_company.username\"]').val().trim() == '') {
\t\t\t\t\tykp.prompt('请输入搜索条件');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\t_postdata.filter = 'um_company.username like \\'%' + \$('[sear=\"um_company.username\"]').val() + '%\\'';
\t\t\t\tgetList();
\t\t\t});
\t\t}

\t\t//刷新页面
\t\tflushPage();

\t\tfunction flushPage() {
\t\t\t\$('#flush').unbind('click').click(function() {
\t\t\t\t_postdata = {
\t\t\t\t\tlimit: 10, //每页显示的条目数
\t\t\t\t\tfilter: '', //查询条件
\t\t\t\t\torder: 'um_company.id desc'
\t\t\t\t};

\t\t\t\tgetList();
\t\t\t});
\t\t}

\t\t//获取付费公司信息
\t\tgetList();

\t\tfunction getList() {
\t\t\tvar edit2_statu = cs.getNodes([83], true);
\t\t\tif(edit2_statu) {
\t\t\t\tykp.list({
\t\t\t\t\turl: '/api/api_company/index',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: _postdata,
\t\t\t\t\tpageBar: {
\t\t\t\t\t\tid: '#pageBar'
\t\t\t\t\t},
\t\t\t\t\tloadList: function(res) {

\t\t\t\t\t\tif(res.data.items == '') {
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\t\$('.pay_company').html('<tr><td colspan=\"30\" style=\"color:#7d7d7d !important;text-align:center !important;\">暂无数据</td></tr>');
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}

\t\t//将付费公司信息显示到table中
\t\tfunction addList(res) {
\t\t\tvar data = res.data.items;
\t\t\tvar pay_company_html = [];
\t\t\tfor(var i in data) {
\t\t\t\tpay_company_html.push(
\t\t\t\t\t'<tr class=\"thColor\" um_company-id=\"' + data[i]['um_company.id'] + '\">' +
\t\t\t\t\t'<td>' +
\t\t\t\t\t'<label class=\"pos-rel\">' +
                    '<a> <span style=\"cursor: pointer\" title=\"详情\" class=\"inFo lbl btOrange\"><i class=\"fa fa-info\"></i></span></a>'+
\t\t\t\t\t'<a> <span style=\"cursor: pointer\" class=\"account-manage lbl btGreen\" contentAuthority=\"239\" title=\"账号管理\"><i class=\"fa fa-user\"></i></span></a>' +
\t\t\t\t\t'<a> <span style=\"cursor: pointer\" class=\"power_manage lbl btYellow \" contentAuthority=\"240\" title=\"权限管理\"><i class=\"fa fa-key\"></i></span></a>' +
\t\t\t\t\t'<a> <span style=\"cursor: pointer\" class=\"renewal lbl btBlue\" contentAuthority=\"241\" title=\"续期管理\"><i class=\"fa fa-spinner\"></i></span></a>' +
\t\t\t\t\t'<a href=\"#\" > <span class=\"del lbl btRed\" contentauthority=\"229\" style=\"display: inline-block;\" title=\"删除\"><i class=\"fa fa-times-circle\"></i></sapn></a>' +
\t\t\t\t\t'</label>' +
\t\t\t\t\t'</td>' +
\t\t\t\t\t'<td>' +
\t\t\t\t\tdata[i]['um_company.name'] +
\t\t\t\t\t'</td>' +
\t\t\t\t\t'<td>' +
\t\t\t\t\tdata[i]['um_company.username'] +
\t\t\t\t\t'</td>' +
\t\t\t\t\t'<td>' +
\t\t\t\t\tdata[i]['um_company.num'] +
\t\t\t\t\t'</td>' +
\t\t\t\t\t'<td>' +
\t\t\t\t\tdata[i]['um_company.role_name'] +
\t\t\t\t\t'</td>' +
\t\t\t\t\t'<td>' +
\t\t\t\t\tdata[i]['um_company.money'] +
\t\t\t\t\t'</td>' +
\t\t\t\t\t'<td>' +
\t\t\t\t\t(data[i]['um_company.start_time'] != '0' ? (cs.getNowTime(data[i]['um_company.start_time']) + '~' + cs.getNowTime(data[i]['um_company.end_time'])) : '') +
\t\t\t\t\t'</td>' +
\t\t\t\t\t'</tr>'
\t\t\t\t);
\t\t\t}

\t\t\t\$('.pay_company').html(pay_company_html.join(''));
\t\t\tcs.getNodes([239, 240, 241]);

\t\t\taccountManage();
            detailInf();
\t\t\trenewal(data);
\t\t\tpowerManage_detail();

\t\t\t\$('.del').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('um_company-id');
\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\tlayer.confirm('删除后此公司信息将全部消失，确认删除吗？', function(index) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: \"/api/api_company/del \",
\t\t\t\t\t\t\tmethods: \"post\",
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tid: id
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('删除成功');
\t\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})

\t\t\t\t\t});
\t\t\t\t})
\t\t\t})
\t\t}

\t\t//添加公司
\t\taddCompany();

\t\tfunction addCompany() {
\t\t\t\$('#add').unbind('click').click(function() {
\t\t\t\t\$('#add_company').slideDown();
\t\t\t\t\$('#add_company .title').text('添加公司');

\t\t\t\t\$('#add_company [field]').val('');

\t\t\t\t\$('#add_company').on('click', '.close_manage', function() {
\t\t\t\t\t\$('#add_company').slideUp();
\t\t\t\t});

\t\t\t\t//保存
\t\t\t\t\$('#add_company .hold').unbind('click').click(function() {
\t\t\t\t\tvar postdata = {};

\t\t\t\t\tvar flag = true;
\t\t\t\t\t\$('#add_company [field]').each(function(i, e) {
\t\t\t\t\t\t//判断是否为空
\t\t\t\t\t\tif(!\$(this).val().trim()) {
\t\t\t\t\t\t\tykp.prompt(\$(this).attr('message'));
\t\t\t\t\t\t\tflag = false;
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('field') == 'start_time' || \$(this).attr('field') == 'end_time') {
\t\t\t\t\t\t\t// console.log(\$(this).val().split('~')[0]);
\t\t\t\t\t\t\t// console.log(\$(this).val().split('~')[1]);
\t\t\t\t\t\t\tpostdata[\$(this).attr('field')] = new Date(\$(this).val()) / 1000;
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tpostdata[\$(this).attr('field')] = \$(this).val();
\t\t\t\t\t});

\t\t\t\t\t//如果有空值，则返回
\t\t\t\t\tif(!flag) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\t//如果结束时间小于开始时间，则提示并返回
\t\t\t\t\tif(postdata['end_time'] < postdata['start_time']) {
\t\t\t\t\t\tykp.prompt('结束时间不能小于开始时间');
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_company/add',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: postdata,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\$('#add_company').slideUp();
\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t});
\t\t}

\t\t//获取修改详情
\t\tfunction detailInf() {
            \$('.inFo').click(function() {
                var dlimit=10;
                var cid= \$(this).parents('tr').attr('um_company-id');
                console.log(cid);
                console.log(111);
                \$('#dtlPage1').slideDown();
                console.log(\$('#dtlPage1 .dtlbox ._changePageNum'));
                \$('#dtlPage1 ._changePageNum').unbind(\"change\").change(function() {
                    dlimit = \$(this).val();
                    dtlList();
                });

                dtlList()
                function dtlList() {
                    ykp.list({
                        url: '/api/api_company/get_record',
                        method: 'post',
                        data: {
                            cid: cid,
                            limit: dlimit,
                            page:1
                        },
\t\t\t\t\t\tdatacont:{
                            id:'#contnum'
\t\t\t\t\t\t},
                        pageBar: {
                            id: '.dlpageBar'
                        },
                        loadList: function(res) {
                            var data = res.data.items;
                            console.log(data);
                            if(!data || data.length == 0) {
                                \$('#dtlPage1 .dtlbox').html(
                                    `<div style=\"background-color: #c5e0f1;text-align:center;height: 40px;line-height: 40px;\">
\t\t\t\t\t\t\t\t\t\t暂无数据
\t\t\t\t\t\t\t\t\t</div>`
                                );
                                return;
                            }

                            var html = [];
                            var operations = ['', '新增', '编辑', '删除'];
                            var content = [];
                            for(var i in data) {
                                content = data[i]['content'] ? JSON.parse(data[i]['content']) : \"\";
                                console.log(content);
                                html.push(
                                    `<ul><li>
\t\t\t\t\t\t\t\t\t<td style=\"text-align:left;font-size:14px !important;line-height: 25px;\">
\t\t\t\t\t\t\t\t\t<p style=\"margin-bottom: 10px;\">
\t\t\t\t\t\t\t\t\t\t<span>\${data[i]['create_at']}</span>
\t\t\t\t\t\t\t\t\t\t<span>\${data[i]['name']}</span>
\t\t\t\t\t\t\t\t\t\t<span>\${operations[data[i]['type']]}了</span>
\t\t\t\t\t\t\t\t\t\t<span>\${content ? getContent(data[i]['type'], content).split('-').join('&#13;') : data[i]['details']}</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</li></ul>`
                                );
                            }
                            \$('#dtlPage1 .dtlbox').html(html.join(''));
                        }
                    });
                }



                //关闭账号管理
                \$('#dtlPage1').on('click', '.close_manage', function() {
                    \$('#dtlPage1').slideUp();
                });

            })
        }

        function getContent(type, content) {
            var html = [];
            var sType = {
                1:\"一般纳税人\",
                2:\"小规模\"
            }
            if(type == 1) {
                for(var i in content) {
                    if(content[i]['after']){
                        html.push(content[i]['name']+' : '+content[i]['after'])
                    }

                }
                return html.join('-');
            } else if(type == 2) {
                for(var i in content) {
                    if(content[i]['after']){
                        if(content[i]['name'] == \"税务类型\"){

                            html.push(content[i]['name']+' : '+sType[content[i]['before']]+' 改为 '+  sType[content[i]['after']])
                        }else{
                            html.push(content[i]['name']+' : '+content[i]['before']+' 改为 '+  content[i]['after']);
                        }
                    }
                }
                return html.join('-');
            } else {
                return html.join(\"-\");
            }
        }


        //账号管理
\t\tfunction accountManage() {
\t\t\t\$('.account-manage').unbind('click').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('um_company-id');
\t\t\t\t\$('#_account-manage').slideDown();
\t\t\t\t\$('#_account-manage [field]').val('').prop('disabled', false);

\t\t\t\t//重置密码
\t\t\t\t\$('#_account-manage .reset_password').unbind('click').click(function() {
\t\t\t\t\tbootbox.confirm('确认重置密码？', function(flag) {
\t\t\t\t\t\tif(flag) {
\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\turl: '/api/api_company/edit_pwd',
\t\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\tid: id
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\tykp.prompt('重置密码成功');
\t\t\t\t\t\t\t\t\t\$('#_account-manage').slideUp();
\t\t\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});

\t\t\t\t//保存
\t\t\t\t\$('#_account-manage .hold').unbind('click').click(function() {
\t\t\t\t\tvar postdata = {
\t\t\t\t\t\tid: id
\t\t\t\t\t};

\t\t\t\t\t\$('#_account-manage [field]').each(function(i, e) {
\t\t\t\t\t\tpostdata[\$(this).attr('field')] = \$(this).val();
\t\t\t\t\t});

\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_company/add_role',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: postdata,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\$('#_account-manage').slideUp();
\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});

\t\t\t\t//获取子账号信息
                getChildAccount();
\t\t\t\tfunction getChildAccount() {
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_company/get_name',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tid: id
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\t\tvar child_account = data.list;

\t\t\t\t\t\t\tif(data.top != '') {
\t\t\t\t\t\t\t\t\$('#_account-manage [field=\"username\"]').val(data.top.username).prop('disabled', true);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tvar child_account_html = [];
\t\t\t\t\t\t\tfor(var i in child_account) {
\t\t\t\t\t\t\t\tchild_account_html.push(
\t\t\t\t\t\t\t\t\t'<div style=\"text-align:left;padding: 10px;\">' +
\t\t\t\t\t\t\t\t\t'<label style=\"width:72px;text-align:right;\">子账号：</label>' +
\t\t\t\t\t\t\t\t\t'<span>' + child_account[i]['username'] + '</span>' +
\t\t\t\t\t\t\t\t\t'<a href=\"#\" childId=\"' + child_account[i]['id'] + '\" class=\"btRed _del\"  style=\"margin-left:10px;display:'+ (child_account[i]['mobilePhone'] == \"\" ? 'inline-block' : 'none' )+'; color:#fff !important\" title=\"删除\"><i class=\"fa fa-close\"></i></a>'+
\t\t\t\t\t\t\t\t\t'</div>'
\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\$('#_account-manage .account_message').html(child_account_html.join(''));
                            delChild();
\t\t\t\t\t\t}
\t\t\t\t\t});
                }

                function delChild() {
\t\t\t\t\t\$(\"#_account-manage .account_message ._del\").unbind().click(function () {
\t\t\t\t\t\tvar childId = \$(this).attr(\"childId\");
                        console.log(id,childId);
                        ykp.doAjax({
                            url: '/api/api_company/del_user',
                            method: 'post',
                            data: {
                                id: id,
\t\t\t\t\t\t\t\tuid:childId
                            },
                            success: function(res) {
                                ykp.prompt('删除成功！');
                                getChildAccount();
\t\t\t\t\t\t\t}
                        });
                    })
                }

\t\t\t\t//关闭账号管理
\t\t\t\t\$('#_account-manage').on('click', '.close_manage', function() {
\t\t\t\t\t\$('#_account-manage').slideUp();
\t\t\t\t});
\t\t\t});
\t\t}

\t\t//续期
\t\tfunction renewal(data) {
\t\t\t\$('.renewal').unbind('click').click(function() {
\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\tvar _data = data[index]; //付费公司数据
\t\t\t\t\$('#add_company').slideDown();
\t\t\t\t\$('#add_company .title').text('续期管理');

\t\t\t\t\$('#add_company [field]').val('');

\t\t\t\tvar field = '';
\t\t\t\t\$('#add_company [field]').each(function(i, e) {
\t\t\t\t\tfield = 'um_company.' + \$(this).attr('field');
\t\t\t\t\tif(\$(this).attr('field') == 'start_time' || \$(this).attr('field') == 'end_time') {
\t\t\t\t\t\t\$(this).val(cs.getNowTime(_data[field]));
\t\t\t\t\t\treturn true;
\t\t\t\t\t}

\t\t\t\t\t\$(this).val(_data[field]);
\t\t\t\t});

\t\t\t\t//保存
\t\t\t\t\$('#add_company .hold').unbind('click').click(function() {
\t\t\t\t\tvar postdata = {
\t\t\t\t\t\tid: _data['um_company.id']
\t\t\t\t\t};

\t\t\t\t\tvar flag = true;
\t\t\t\t\t\$('#add_company [field]').each(function(i, e) {
\t\t\t\t\t\t//判断是否为空
\t\t\t\t\t\tif(!\$(this).val().trim()) {
\t\t\t\t\t\t\tykp.prompt(\$(this).attr('message'));
\t\t\t\t\t\t\tflag = false;
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('field') == 'start_time' || \$(this).attr('field') == 'end_time') {
\t\t\t\t\t\t\t// console.log(\$(this).val().split('~')[0]);
\t\t\t\t\t\t\t// console.log(\$(this).val().split('~')[1]);
\t\t\t\t\t\t\tpostdata[\$(this).attr('field')] = new Date(\$(this).val()) / 1000;
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tpostdata[\$(this).attr('field')] = \$(this).val();
\t\t\t\t\t});

\t\t\t\t\t//如果有空值，则返回
\t\t\t\t\tif(!flag) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\t//如果结束时间小于开始时间，则提示并返回
\t\t\t\t\tif(postdata['end_time'] < postdata['start_time']) {
\t\t\t\t\t\tykp.prompt('结束时间不能小于开始时间');
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_company/renewal',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: postdata,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\$('#add_company').slideUp();
\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t})

\t\t\t\t\$('#add_company').on('click', '.close_manage', function() {
\t\t\t\t\t\$('#add_company').slideUp();
\t\t\t\t});
\t\t\t});
\t\t}

\t\t//权限管理 权限详情
\t\tfunction powerManage_detail() {
\t\t\t\$('.power_manage').unbind('click').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('um_company-id'); //付费公司id
\t\t\t\t\$('#power-manage').slideDown();

\t\t\t\t\$('#power-manage .power_detail').html('');

\t\t\t\t\$('#power-manage .title').text('权限管理');

\t\t\t\tpower_save(id);

\t\t\t\tgetTemplate(); //获取所有模板

\t\t\t\t//获取系统所有权限
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_role/get_user_nodes',
\t\t\t\t\tmethod: 'get',
\t\t\t\t\tdata: {},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t//显示所有权限数据
\t\t\t\t\t\taddPowerList(res, id);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t\$('#power-manage').on('click', '.close_manage', function() {
\t\t\t\t\t\$('#power-manage').slideUp();
\t\t\t\t});
\t\t\t});
\t\t}

\t\tfunction getTemplate() {
//\t\t\t\$('.advandced-search').select2({
//\t\t\t\tallowClear: true
//\t\t\t});
\t\t\t\$('.advandced-search').html('<option value=\"\"> --- 请选择 --- </option>');
\t\t\t//获取系统所有权限
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_role/get_role_template',
\t\t\t\tmethod: 'get',
\t\t\t\tdata: {},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\t//显示所有权限数据
\t\t\t\t\tvar data = res.data;
\t\t\t\t\ttemplateNodes = data;
\t\t\t\t\tfor(var i = 0; i < data.length; i++) {
\t\t\t\t\t\t\$('.advandced-search').append(new Option(data[i].name, data[i].id));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t\t
\t\t\t\$('.advandced-search').val(\"\").trigger('change');

\t\t\t\$('.advandced-search').unbind('change').change(function() {
\t\t\t\tvar val = \$('.advandced-search').val();
\t\t\t\tvar index = \$('.advandced-search').find('option:selected').index();
\t\t\t\tif(val) {
\t\t\t\t\t//获取系统所有权限
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_role/get_user_nodes',
\t\t\t\t\t\tmethod: 'get',
\t\t\t\t\t\tdata: {},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t//显示所有权限数据
\t\t\t\t\t\t\taddPowerList(res);
\t\t\t\t\t\t\tif(templateNodes[index-1].nodes != '') {
\t\t\t\t\t\t\t\tvar nodes = templateNodes[index-1].nodes.split(',');
\t\t
\t\t\t\t\t\t\t\tfor(var i in nodes) {
\t\t\t\t\t\t\t\t\t\$('#power-manage').find('input[data-id=\"' + nodes[i] + '\"],input[dtid=\"' + nodes[i] + '\"]').prop('checked', true);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}

\t\t\t})
\t\t}
\t\t//删除模板
\t\t\$('.delTemplate').unbind('click').click(function() {
\t\t\tvar val = \$('.advandced-search').val();
\t\t\tif(!val) {
\t\t\t\tykp.prompt('请选择模板再删除');
\t\t\t\treturn;
\t\t\t}
\t\t\tlayui.use(\"layer\", function() {
\t\t\t\tlayer.confirm('确认删除模板吗？', function(index) {
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: \"/api/api_role/del_role_template?id=\"+val,
\t\t\t\t\t\tmethod: \"get\",
\t\t\t\t\t\tsuccess: function() {
\t\t\t\t\t\t\tykp.prompt('删除模板成功');
\t\t\t\t\t\t\tgetTemplate();
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t});
\t\t\t})

\t\t})

\t\t//权限管理 权限保存
\t\tfunction power_save(id) {
\t\t\t//保存
\t\t\t\$('#power-manage .hold_power').unbind('click').click(function() {
\t\t\t\tvar postdata = {
\t\t\t\t\tid: id
\t\t\t\t};

\t\t\t\tvar nodes = [];
\t\t\t\t\$('#power-manage').find('input[data-id]:checked,input[dtid]:checked').each(function(i, e) {
\t\t\t\t\tif(\$(this).attr('data-id')) {
\t\t\t\t\t\tnodes.push(\$(this).attr('data-id'));
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr('dtid')) {
\t\t\t\t\t\tnodes.push(\$(this).attr('dtid'));
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tpostdata['nodes'] = nodes.join(',');
\t\t\t\tif(\$('.advandced-search').val()){
\t\t\t\t\tpostdata['name'] =\$('.advandced-search').find('option:selected').text();
\t\t\t\t}
\t\t\t\tbootbox.confirm('确认修改权限？', function(flag) {
\t\t\t\t\tif(flag) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_company/edit_nodes',
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: postdata,
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('修改权限成功');
\t\t\t\t\t\t\t\t\$('#power-manage').slideUp();
\t\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t}

\t\t//显示所有权限数据
\t\tfunction addPowerList(res, id) {
\t\t\tvar content = \"\";
\t\t\tvar data = res.data.list;
\t\t\tdata.forEach(function(item) {
\t\t\t\tif(item.id == 83) {
\t\t\t\t\tdelete item;
\t\t\t\t}
\t\t\t})
\t\t\tvar firstChild = \"\"; //父级权限
\t\t\tvar scendChild = \"\"; //子级权限
\t\t\tfor(var i in data) {
\t\t\t\tif(data[i]['name'] == '付费管理') {
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t\t// console.log(data[i]);
\t\t\t\tfirstChild = \"\";
\t\t\t\tscendChild = \"\";
\t\t\t\tif(i != 'other') {
\t\t\t\t\tif(data[i]['child'] != undefined) {
\t\t\t\t\t\tcontent +=
\t\t\t\t\t\t\t`<div class=\"clientPower\">
\t\t\t\t\t\t\t\t<div class=\"powerRelative\">
\t\t\t\t\t\t\t\t\t<label data-id=\"\${data[i]['id']}\">\${i == 'other' ? '其他列表' : data[i]['name']} </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"powerDetail\">
\t\t\t\t\t\t\t\t\t<div class=\"li_bar li_bar_two\"><volist name=\"nodes\" id=\"node\">`;
\t\t\t\t\t\tfor(var j in data[i]['child']) {
\t\t\t\t\t\t\tfirstChild +=
\t\t\t\t\t\t\t\t`<em>
\t\t\t\t\t\t\t\t\t<label class=\"checked\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"nodes\" data-id=\"\${data[i]['child'][j]['id']}\"> 
\t\t\t\t\t\t\t\t\t\t<b class=\"power_name\">\${data[i]['child'][j]['name']}</b>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</em>`;
\t\t\t\t\t\t\tfor(var k in data[i]['child'][j]['child']) {
\t\t\t\t\t\t\t\tscendChild +=
\t\t\t\t\t\t\t\t\t` <label class=\"checked\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"nodes\" data-parent=\"\${data[i]['child'][j]['child'][k].parent}\"  dtId=\"\${data[i]['child'][j]['child'][k].id}\" >
\t\t\t\t\t\t\t\t\t\t<b class=\"power_name\">
\t\t\t\t\t\t\t\t\t\t\t\${data[i]['child'][j]['child'][k].name}
\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t</label>`
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tcontent += '<div grantid=\"12101407980\" dataid=\"3\" class=\"li_tit\"><p><em>' + firstChild + '</em><span><volist  id=\"child_node\">' + scendChild + '</volist></span></p></div>';
\t\t\t\t\t\t\tfirstChild = \"\";
\t\t\t\t\t\t\tscendChild = '';
\t\t\t\t\t\t}
\t\t\t\t\t\tcontent += '</volist></div></div></div>'
\t\t\t\t\t} else {
\t\t\t\t\t\tcontent += `<div class=\"clientPower\">
\t\t\t\t\t\t\t<div class=\"powerRelative\">
\t\t\t\t\t\t\t\t<label data-id=\"\${data[i]['id']}\">\${i == 'other' ? '其他列表' : data[i]['name']}</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"powerDetail\">
\t\t\t\t\t\t\t\t<div style=\"text-align: center; margin-left:-40px\">暂无数据</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>`;
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tcontent +=
\t\t\t\t\t\t`<div class=\"clientPower\" style='margin-top:20px'> 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"powerRelative\">
\t\t\t\t\t\t\t\t\t\t\t\t<label data-id=\"\${data[i]['id']}\">其他列表</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"powerDetail\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"li_bar li_bar_two\"><volist name=\"nodes\" id=\"node\">`;
\t\t\t\t\tfor(var j in data[i]) {
\t\t\t\t\t\tfirstChild =
\t\t\t\t\t\t\t`<em>
\t\t\t\t\t\t\t\t<label class=\"checked\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"nodes\" data-id=\"\${data[i][j]['id']}\">
\t\t\t\t\t\t\t\t    <b class=\"power_name\">\${data[i][j]['name']}</b>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</em>`;
\t\t\t\t\t\tfor(var k in data[i][j]['child']) {
\t\t\t\t\t\t\tscendChild +=
\t\t\t\t\t\t\t\t` <label class=\"checked\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"nodes\" data-parent=\"\${data[i][j]['child'][k].parent}\"  data-id=\"\${data[i][j]['child'][k].id}\" >
\t\t\t\t\t\t\t\t\t<b class=\"power_name\">
\t\t\t\t\t\t\t\t\t\t\${data[i][j]['child'][k].name}
\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t</label>`
\t\t\t\t\t\t}
\t\t\t\t\t\tcontent += '<div grantid=\"12101407980\" dataid=\"3\" class=\"li_tit\"><p><em>' + firstChild + '</em><span><volist  id=\"child_node\">' + scendChild + '</volist></span></p></div>';
\t\t\t\t\t\tfirstChild = \"\";
\t\t\t\t\t\tscendChild = '';
\t\t\t\t\t}
\t\t\t\t\tcontent += '</volist></div></div></div>'
\t\t\t\t}
\t\t\t}

\t\t\t\$('.power_detail').html(content);

\t\t\t//选中父级权限则选中所有子级权限，选中子级权限则选中父级权限
\t\t\tcheckPower();

\t\t\t//获取付费公司所拥有权限
\t\t\tgetOwnerPower(id);

\t\t}

\t\t//获取付费公司所拥有权限
\t\tfunction getOwnerPower(id) {
\t\t\tif(!id) {
\t\t\t\treturn false;
\t\t\t}
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_company/get_nodes',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tid: id
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;

\t\t\t\t\tif(data.nodes != '') {
\t\t\t\t\t\tvar nodes = data.nodes.split(',');

\t\t\t\t\t\tfor(var i in nodes) {
\t\t\t\t\t\t\t\$('#power-manage').find('input[data-id=\"' + nodes[i] + '\"],input[dtid=\"' + nodes[i] + '\"]').prop('checked', true);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//权限选择
\t\tfunction checkPower() {
\t\t\t\$('input[type=\"checkbox\"]').unbind('click').click(function() {
\t\t\t\tif(\$(this).attr('data-parent')) {
\t\t\t\t\tif(\$(this).is(':checked')) {
\t\t\t\t\t\tif(!\$('#node input[data-id=\"' + \$(this).attr('data-parent') + '\"]').is(':checked')) {
\t\t\t\t\t\t\t\$('#node input[data-id=\"' + \$(this).attr('data-parent') + '\"]').prop('checked', true);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif(\$(this).attr('data-id')) {
\t\t\t\t\tif(!\$(this).is(':checked')) {
\t\t\t\t\t\tvar id = \$(this).attr('data-id');
\t\t\t\t\t\t\$('input[data-parent=' + id + ']').prop('checked', this.checked);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}

\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/manage/payManage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 344,  363 => 343,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	#add_company label {*/
/* 		width: 60px;*/
/* 		text-align: right;*/
/* 	}*/
/* 	*/
/* 	.powerContent {*/
/* 		display: inline-block;*/
/* 		border: 1px solid #ddd;*/
/* 		padding: 15px;*/
/* 	}*/
/* 	*/
/* 	.functionPower ul {*/
/* 		list-style-type: none;*/
/* 		margin-left: 0;*/
/* 		height: 40px;*/
/* 	}*/
/* 	*/
/* 	.functionPower li {*/
/* 		float: left;*/
/* 		border: 1px solid #ddd;*/
/* 		display: inline-block;*/
/* 		width: 80px;*/
/* 		height: 40px;*/
/* 		padding: 8px;*/
/* 		background-color: #C5D0DC;*/
/* 		color: #001;*/
/* 	}*/
/* 	*/
/* 	.functionPower .current_function {*/
/* 		background-color: #fff;*/
/* 		border-bottom: none;*/
/* 	}*/
/* 	*/
/* 	.powerContent>div {*/
/* 		margin-bottom: 20px;*/
/* 	}*/
/* 	*/
/* 	.powerRelative {*/
/* 		background-color: #eee;*/
/* 		border-radius: 3px;*/
/* 		height: 35px;*/
/* 		line-height: 35px;*/
/* 		padding-left: 10px;*/
/* 	}*/
/* 	*/
/* 	.powerContent span {*/
/* 		margin-right: 30px;*/
/* 	}*/
/* 	*/
/* 	.powerDetail {*/
/* 		padding-left: 30px;*/
/* 		padding-top: 5px;*/
/* 		padding-bottom: 10px;*/
/* 		border: 1px solid #ddd;*/
/* 		line-height: 30px;*/
/* 	}*/
/* 	*/
/* 	.tab-content {*/
/* 		padding: 0;*/
/* 	}*/
/* 	*/
/* 	.tabbable.tabs-left {*/
/* 		margin-top: 15px;*/
/* 	}*/
/* 	*/
/* 	.tabs-left>.nav-tabs>li {*/
/* 		width: 150px;*/
/* 	}*/
/* 	*/
/* 	em,*/
/* 	label {*/
/* 		font-style: normal;*/
/* 		font-weight: normal;*/
/* 	}*/
/* 	*/
/* 	.li_tit {*/
/* 		padding-left: 20px;*/
/* 		background-image: url(/resource/adimin/assets/css/images/tree_tit.gif);*/
/* 		background-repeat: no-repeat;*/
/* 		background-position: 6px 13px;*/
/* 	}*/
/* 	*/
/* 	.li_bar {*/
/* 		background-image: url(/resource/adimin/assets/css/images/tree_bg.gif);*/
/* 		background-repeat: repeat-y;*/
/* 		background-position: 5px 0px;*/
/* 	}*/
/* 	*/
/* 	.li_bar .li_bar {*/
/* 		background-position: 25px 0px;*/
/* 	}*/
/* 	*/
/* 	.li_bar_two {*/
/* 		margin-left: 0;*/
/* 	}*/
/* 	*/
/* 	.li_tit span {*/
/* 		display: block;*/
/* 		clear: both;*/
/* 		font-size: 12px;*/
/* 		color: #F60;*/
/* 	}*/
/* 	*/
/* 	.li_tit span label {*/
/* 		color: #333;*/
/* 		margin-right: 10px;*/
/* 		font-size: 12px;*/
/* 		display: inline-block;*/
/* 		width: 150px;*/
/* 		line-height: 28px;*/
/* 	}*/
/* 	*/
/* 	.li_tit>p>em {*/
/* 		position: relative;*/
/* 		bottom: 0;*/
/* 	}*/
/* 	*/
/* 	volist>label {*/
/* 		position: relative;*/
/* 		bottom: 0;*/
/* 	}*/
/* 	*/
/* 	b.power_name {*/
/* 		position: relative;*/
/* 		bottom: 2px;*/
/* 	}*/
/* 	*/
/* 	.layui-form-label {*/
/* 		width: 60px;*/
/* 		text-align: right;*/
/* 		padding: 0;*/
/* 	}*/
/* */
/* 	#templateCon label {*/
/* 		width: 114px;*/
/* 		text-align: right;*/
/* 	}*/
/* */
/* 	#templateCon input,*/
/* 	input {*/
/* 		width: 180px;*/
/* 	}*/
/* </style>*/
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<div id="topTool" style="margin-left:0 !important;padding-left:0 !important;margin-top:20px;position:relative">*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<input type="text" pts=0 sear="um_company.username" placeholder="主账号" autofocus/>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<button type="button" id="search" title="搜索" class="btn btn-info btn-sm">*/
/* 					<i class="fa fa-search"></i>	*/
/* 				</button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<button id="flush" type="button" title="刷新" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/* 	            	<i class="fa fa-refresh"></i>	*/
/* 	           	</button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" contentAuthority="238" style=" float: left; margin-right: 5px;">*/
/* 				<button type="button" title="添加公司" id="add" class="btn btn-info btn-sm" style="border-color: #32CD32 !important;background: #32CD32 !important;" >*/
/* 					<i class="fa fa-plus"></i>*/
/* 				</button>*/
/* 			</div>*/
/* 			<div style="clear:both;"></div>*/
/* 		</div>*/
/* */
/* 		<div style="padding:20px 0;">*/
/* 			<div class="custom_table">*/
/* 				<table>*/
/* 					<thead>*/
/* 						<tr class="thColor">*/
/* 							<th>操作</th>*/
/* 							<th>公司名称</th>*/
/* 							<th>主账号</th>*/
/* 							<th>数量</th>*/
/* 							<th>系统版本</th>*/
/* 							<th>费用</th>*/
/* 							<th>有效期</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* 					<tbody class="pay_company">*/
/* */
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div align="center" style="padding:20px 0;">*/
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
/* 	<div id="add_company" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 		<div style="width:542px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/*             box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 			<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 				<span style="display: inline-block;font-size:16px;" class="title"></span>*/
/* 				<a href="javascript:;" class="close_manage" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 			</div>*/
/* 			<div style="padding: 10px 10px;">*/
/* 				<div style="padding: 10px;">*/
/* 					<label>公司名称：</label>*/
/* 					<input type="text" field="name" style="height:30px;" message="请输入公司名称" />*/
/* 					<label>费用：</label>*/
/* 					<input type="number" field="money" style="height:30px;" message="请输入费用" />*/
/* 				</div>*/
/* 				<!-- <div style="text-align:center;padding: 10px;">*/
/* 					*/
/* 				</div> -->*/
/* 				<div style="padding: 10px;position:relative;">*/
/* 					<label style="float:left;margin-right:5px;">有效期：</label>*/
/* 					<input type="text" class="date-timepicker1" field="start_time" style="float:left;" message="请选择开始时间">*/
/* 					<span style="border:1px solid #ddd;padding:6px;background: #ddd;">*/
/* 						<i class="fa fa-exchange" style="position:relative;left:2px;"></i>*/
/* 					</span>*/
/* 					<input type="text" class="date-timepicker1" field="end_time" message="请选择结束时间">*/
/* 					<!-- <input class="test6" type="text" field="start_time,end_time" style="height:30px;position:relative;"> -->*/
/* 				</div>*/
/* 			</div>*/
/* 			<div style="padding:15px;text-align:right;">*/
/* 				<button class="btn btn-info btn-sm close_manage">关闭</button>*/
/* 				<button class="btn btn-info btn-sm hold">保存</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div id="_account-manage" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 		<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/*             box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 			<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 				<span style="display: inline-block;font-size:16px;">账号管理</span>*/
/* 				<a href="javascript:;" class="close_manage" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 			</div>*/
/* 			<div style="padding: 10px 10px;max-height:400px;overflow-y:auto;">*/
/* 				<div style="text-align:left;padding: 10px;">*/
/* 					<label style="width:72px;text-align:right;">主账号：</label>*/
/* 					<input type="text" field="username" title="密码默认为：123456" />*/
/* 					<a href="javascript:;" class="reset_password" style="text-decoration:underline;font-size:12px;position:relative;top:5px;">重置密码</a>*/
/* 				</div>*/
/* 				<div style="text-align:left;padding: 10px;">*/
/* 					<label style="width:72px;text-align:right;">默认密码：</label>*/
/* 					<input type="text" value="123456" disabled/>*/
/* 				</div>*/
/* 				<div style="text-align:left;padding: 10px;">*/
/* 					<label>子账号数量：</label>*/
/* 					<input type="number" field="num" />*/
/* 				</div>*/
/* 				<div class="account_message">*/
/* */
/* 				</div>*/
/* 			</div>*/
/* 			<div style="padding:15px;text-align:right;">*/
/* 				<button class="btn btn-info btn-sm close_manage">关闭</button>*/
/* 				<button class="btn btn-info btn-sm hold">保存</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div id="power-manage" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 		<div style="width:800px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/*             box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 			<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 				<span style="display: inline-block;font-size:16px;" class="title"></span>*/
/* 				<a href="javascript:;" class="close_manage" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 			</div>*/
/* 			<div style="padding: 10px 10px;max-height:500px;overflow-y:auto;" class="getTemplate">*/
/* 				<select style="margin: 12px !important;width: 180px"  class="advandced-search">*/
/* */
/* 				</select>*/
/* 				<button type="button" id="add" class="btn btn-sm delTemplate">*/
/* 					删除模板*/
/* 				</button>*/
/* 			</div>*/
/* 			<div style="padding: 10px 10px;max-height:410px;overflow-y:auto;" class="power_detail">*/
/* 			</div>*/
/* 			<div style="padding:15px;text-align:right;">*/
/* 				<button class='btn btn-info btn-sm checkAll setTemplate'>设为模板</button>*/
/* 				<button class='btn btn-info btn-sm checkAll checkAll1'>全选</button>*/
/* 				<!--<button class='btn btn-info btn-sm checkAll checkAll2'>反选</button>-->*/
/* 				<button class="btn btn-info btn-sm hold_power">保存</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="label_popup" id="feedBack" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 		<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 	        box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 			<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 				<span style="display: inline-block;">请填写模板名称</span>*/
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
/* 	<div id="dtlPage1" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 		<div style="width:780px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/*             box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 			<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 				<span style="display: inline-block;font-size:16px;">修改详情</span>*/
/* 				<a href="javascript:;" class="close_manage" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 			</div>*/
/* 			<div class="dtlbox" style="padding: 10px 10px;max-height:400px;overflow-y:auto;">*/
/* */
/* 			</div>*/
/* 			<div align="center" style="padding:20px;">*/
/* 				<div align="left" style="float: left;" id="contnum"></div>*/
/* 				<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 				<div  class="dlpageBar pagination"></div>*/
/* 				<div align="right" style="float: right;">*/
/* 					<select style="width: 100px;" class="_changePageNum">*/
/* 						<option value="10">每页10条</option>*/
/* 						<option value="20">每页20条</option>*/
/* 						<option value="50">每页50条</option>*/
/* 						<option value="100">每页100条</option>*/
/* 						<option value="200">每页200条</option>*/
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div style="padding:15px;text-align:right;">*/
/* 				<button class="btn btn-info btn-sm close_manage">关闭</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	{% include 'admin/mark.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script type="text/javascript">*/
/* 	$(function() {*/
/* 		cs.getNodes([238]);*/
/* 		if(ykp.getCookie('nodes').split(',').indexOf("83") == -1) {*/
/* 			location.href = '/admin/error';*/
/* 		}*/
/* 		*/
/* 		var templateNodes = '';// 存放权限模板*/
/* 		//时间插件*/
/* 		cs.timeplug();*/
/* */
/* 		//全选*/
/* 		checkAll();*/
/* */
/* 		function checkAll() {*/
/* 			$('.checkAll').unbind('click').click(function() {*/
/* 				if($(this).hasClass('checkAll1')) {*/
/* 					$('.power_detail').find('input[type="checkbox"]').prop('checked', true);*/
/* 				}*/
/* 				if($(this).hasClass('checkAll2')) {*/
/* 					$('.power_detail').find('input[type="checkbox"]').prop('checked', false);*/
/* 				}*/
/* 				if($(this).hasClass('setTemplate')) {*/
/* 					var nodes = [];*/
/* 					$('#power-manage').find('input[data-id]:checked,input[dtid]:checked').each(function(i, e) {*/
/* 						if($(this).attr('data-id')) {*/
/* 							nodes.push($(this).attr('data-id'));*/
/* 						}*/
/* 						if($(this).attr('dtid')) {*/
/* 							nodes.push($(this).attr('dtid'));*/
/* 						}*/
/* 					});*/
/* 					//console.log(nodes.join(','));*/
/* 					//					postdata['nodes'] = nodes.join(',');*/
/* */
/* 					$('#feedBack').show();*/
/* 					$('#feedBack').find('input').val('');*/
/* 					$('#feedBack .hold').unbind('click').click(function() {*/
/* 						var approve_reply = $('#feedBack').find('input').val().trim();*/
/* 						if(approve_reply == '') {*/
/* 							ykp.prompt('不能为空！');*/
/* 							return false;*/
/* 						}*/
/* 						ykp.doAjax({*/
/* 							url: "/api/api_role/add_role_template",*/
/* 							method: "post",*/
/* 							data: {*/
/* 								name: approve_reply,*/
/* 								nodes: nodes.join(',')*/
/* 							},*/
/* 							success: function(res) {*/
/* 								getTemplate();*/
/* 							}*/
/* 						})*/
/* 						$('.close_label').parents('.label_popup').fadeOut();*/
/* 					})*/
/* 					cs.closePop();*/
/* 				}*/
/* */
/* 			});*/
/* 		}*/
/* */
/* 		//请求参数*/
/* 		var _postdata = {*/
/* 			limit: 10, //每页显示的条目数*/
/* 			filter: '', //查询条件*/
/* 			order: 'um_company.id desc'*/
/* 		};*/
/* */
/* 		//切换每页显示的条目数*/
/* 		switchPagesize();*/
/* */
/* 		function switchPagesize() {*/
/* 			$('#changePageNum').change(function() {*/
/* 				_postdata.limit = $(this).val();*/
/* 				getList();*/
/* 			});*/
/* */
/* 		}*/
/* */
/* 		//普通搜索*/
/* 		generalSearch();*/
/* */
/* 		function generalSearch() {*/
/* 			$('#search').unbind('click').click(function() {*/
/* 				if($('[sear="um_company.username"]').val().trim() == '') {*/
/* 					ykp.prompt('请输入搜索条件');*/
/* 					return;*/
/* 				}*/
/* 				_postdata.filter = 'um_company.username like \'%' + $('[sear="um_company.username"]').val() + '%\'';*/
/* 				getList();*/
/* 			});*/
/* 		}*/
/* */
/* 		//刷新页面*/
/* 		flushPage();*/
/* */
/* 		function flushPage() {*/
/* 			$('#flush').unbind('click').click(function() {*/
/* 				_postdata = {*/
/* 					limit: 10, //每页显示的条目数*/
/* 					filter: '', //查询条件*/
/* 					order: 'um_company.id desc'*/
/* 				};*/
/* */
/* 				getList();*/
/* 			});*/
/* 		}*/
/* */
/* 		//获取付费公司信息*/
/* 		getList();*/
/* */
/* 		function getList() {*/
/* 			var edit2_statu = cs.getNodes([83], true);*/
/* 			if(edit2_statu) {*/
/* 				ykp.list({*/
/* 					url: '/api/api_company/index',*/
/* 					method: 'post',*/
/* 					data: _postdata,*/
/* 					pageBar: {*/
/* 						id: '#pageBar'*/
/* 					},*/
/* 					loadList: function(res) {*/
/* */
/* 						if(res.data.items == '') {*/
/* 							setTimeout(function() {*/
/* 								ykp.prompt('暂无数据！');*/
/* 							}, 1000);*/
/* 							$('.pay_company').html('<tr><td colspan="30" style="color:#7d7d7d !important;text-align:center !important;">暂无数据</td></tr>');*/
/* 							return;*/
/* 						}*/
/* 						addList(res);*/
/* 					}*/
/* 				});*/
/* 			}*/
/* 		}*/
/* */
/* 		//将付费公司信息显示到table中*/
/* 		function addList(res) {*/
/* 			var data = res.data.items;*/
/* 			var pay_company_html = [];*/
/* 			for(var i in data) {*/
/* 				pay_company_html.push(*/
/* 					'<tr class="thColor" um_company-id="' + data[i]['um_company.id'] + '">' +*/
/* 					'<td>' +*/
/* 					'<label class="pos-rel">' +*/
/*                     '<a> <span style="cursor: pointer" title="详情" class="inFo lbl btOrange"><i class="fa fa-info"></i></span></a>'+*/
/* 					'<a> <span style="cursor: pointer" class="account-manage lbl btGreen" contentAuthority="239" title="账号管理"><i class="fa fa-user"></i></span></a>' +*/
/* 					'<a> <span style="cursor: pointer" class="power_manage lbl btYellow " contentAuthority="240" title="权限管理"><i class="fa fa-key"></i></span></a>' +*/
/* 					'<a> <span style="cursor: pointer" class="renewal lbl btBlue" contentAuthority="241" title="续期管理"><i class="fa fa-spinner"></i></span></a>' +*/
/* 					'<a href="#" > <span class="del lbl btRed" contentauthority="229" style="display: inline-block;" title="删除"><i class="fa fa-times-circle"></i></sapn></a>' +*/
/* 					'</label>' +*/
/* 					'</td>' +*/
/* 					'<td>' +*/
/* 					data[i]['um_company.name'] +*/
/* 					'</td>' +*/
/* 					'<td>' +*/
/* 					data[i]['um_company.username'] +*/
/* 					'</td>' +*/
/* 					'<td>' +*/
/* 					data[i]['um_company.num'] +*/
/* 					'</td>' +*/
/* 					'<td>' +*/
/* 					data[i]['um_company.role_name'] +*/
/* 					'</td>' +*/
/* 					'<td>' +*/
/* 					data[i]['um_company.money'] +*/
/* 					'</td>' +*/
/* 					'<td>' +*/
/* 					(data[i]['um_company.start_time'] != '0' ? (cs.getNowTime(data[i]['um_company.start_time']) + '~' + cs.getNowTime(data[i]['um_company.end_time'])) : '') +*/
/* 					'</td>' +*/
/* 					'</tr>'*/
/* 				);*/
/* 			}*/
/* */
/* 			$('.pay_company').html(pay_company_html.join(''));*/
/* 			cs.getNodes([239, 240, 241]);*/
/* */
/* 			accountManage();*/
/*             detailInf();*/
/* 			renewal(data);*/
/* 			powerManage_detail();*/
/* */
/* 			$('.del').click(function() {*/
/* 				var id = $(this).parents('tr').attr('um_company-id');*/
/* 				layui.use('layer', function() {*/
/* 					var layer = layui.layer;*/
/* 					layer.confirm('删除后此公司信息将全部消失，确认删除吗？', function(index) {*/
/* 						ykp.doAjax({*/
/* 							url: "/api/api_company/del ",*/
/* 							methods: "post",*/
/* 							data: {*/
/* 								id: id*/
/* 							},*/
/* 							success: function(res) {*/
/* 								ykp.prompt('删除成功');*/
/* 								getList();*/
/* 								layer.closeAll();*/
/* 							}*/
/* 						})*/
/* */
/* 					});*/
/* 				})*/
/* 			})*/
/* 		}*/
/* */
/* 		//添加公司*/
/* 		addCompany();*/
/* */
/* 		function addCompany() {*/
/* 			$('#add').unbind('click').click(function() {*/
/* 				$('#add_company').slideDown();*/
/* 				$('#add_company .title').text('添加公司');*/
/* */
/* 				$('#add_company [field]').val('');*/
/* */
/* 				$('#add_company').on('click', '.close_manage', function() {*/
/* 					$('#add_company').slideUp();*/
/* 				});*/
/* */
/* 				//保存*/
/* 				$('#add_company .hold').unbind('click').click(function() {*/
/* 					var postdata = {};*/
/* */
/* 					var flag = true;*/
/* 					$('#add_company [field]').each(function(i, e) {*/
/* 						//判断是否为空*/
/* 						if(!$(this).val().trim()) {*/
/* 							ykp.prompt($(this).attr('message'));*/
/* 							flag = false;*/
/* 							return false;*/
/* 						}*/
/* 						if($(this).attr('field') == 'start_time' || $(this).attr('field') == 'end_time') {*/
/* 							// console.log($(this).val().split('~')[0]);*/
/* 							// console.log($(this).val().split('~')[1]);*/
/* 							postdata[$(this).attr('field')] = new Date($(this).val()) / 1000;*/
/* 							return true;*/
/* 						}*/
/* 						postdata[$(this).attr('field')] = $(this).val();*/
/* 					});*/
/* */
/* 					//如果有空值，则返回*/
/* 					if(!flag) {*/
/* 						return;*/
/* 					}*/
/* */
/* 					//如果结束时间小于开始时间，则提示并返回*/
/* 					if(postdata['end_time'] < postdata['start_time']) {*/
/* 						ykp.prompt('结束时间不能小于开始时间');*/
/* 						return;*/
/* 					}*/
/* */
/* 					ykp.doAjax({*/
/* 						url: '/api/api_company/add',*/
/* 						method: 'post',*/
/* 						data: postdata,*/
/* 						success: function(res) {*/
/* 							$('#add_company').slideUp();*/
/* 							getList();*/
/* 						}*/
/* 					});*/
/* 				});*/
/* 			});*/
/* 		}*/
/* */
/* 		//获取修改详情*/
/* 		function detailInf() {*/
/*             $('.inFo').click(function() {*/
/*                 var dlimit=10;*/
/*                 var cid= $(this).parents('tr').attr('um_company-id');*/
/*                 console.log(cid);*/
/*                 console.log(111);*/
/*                 $('#dtlPage1').slideDown();*/
/*                 console.log($('#dtlPage1 .dtlbox ._changePageNum'));*/
/*                 $('#dtlPage1 ._changePageNum').unbind("change").change(function() {*/
/*                     dlimit = $(this).val();*/
/*                     dtlList();*/
/*                 });*/
/* */
/*                 dtlList()*/
/*                 function dtlList() {*/
/*                     ykp.list({*/
/*                         url: '/api/api_company/get_record',*/
/*                         method: 'post',*/
/*                         data: {*/
/*                             cid: cid,*/
/*                             limit: dlimit,*/
/*                             page:1*/
/*                         },*/
/* 						datacont:{*/
/*                             id:'#contnum'*/
/* 						},*/
/*                         pageBar: {*/
/*                             id: '.dlpageBar'*/
/*                         },*/
/*                         loadList: function(res) {*/
/*                             var data = res.data.items;*/
/*                             console.log(data);*/
/*                             if(!data || data.length == 0) {*/
/*                                 $('#dtlPage1 .dtlbox').html(*/
/*                                     `<div style="background-color: #c5e0f1;text-align:center;height: 40px;line-height: 40px;">*/
/* 										暂无数据*/
/* 									</div>`*/
/*                                 );*/
/*                                 return;*/
/*                             }*/
/* */
/*                             var html = [];*/
/*                             var operations = ['', '新增', '编辑', '删除'];*/
/*                             var content = [];*/
/*                             for(var i in data) {*/
/*                                 content = data[i]['content'] ? JSON.parse(data[i]['content']) : "";*/
/*                                 console.log(content);*/
/*                                 html.push(*/
/*                                     `<ul><li>*/
/* 									<td style="text-align:left;font-size:14px !important;line-height: 25px;">*/
/* 									<p style="margin-bottom: 10px;">*/
/* 										<span>${data[i]['create_at']}</span>*/
/* 										<span>${data[i]['name']}</span>*/
/* 										<span>${operations[data[i]['type']]}了</span>*/
/* 										<span>${content ? getContent(data[i]['type'], content).split('-').join('&#13;') : data[i]['details']}</span>*/
/* 									</p>*/
/* 									</td>*/
/* 								</li></ul>`*/
/*                                 );*/
/*                             }*/
/*                             $('#dtlPage1 .dtlbox').html(html.join(''));*/
/*                         }*/
/*                     });*/
/*                 }*/
/* */
/* */
/* */
/*                 //关闭账号管理*/
/*                 $('#dtlPage1').on('click', '.close_manage', function() {*/
/*                     $('#dtlPage1').slideUp();*/
/*                 });*/
/* */
/*             })*/
/*         }*/
/* */
/*         function getContent(type, content) {*/
/*             var html = [];*/
/*             var sType = {*/
/*                 1:"一般纳税人",*/
/*                 2:"小规模"*/
/*             }*/
/*             if(type == 1) {*/
/*                 for(var i in content) {*/
/*                     if(content[i]['after']){*/
/*                         html.push(content[i]['name']+' : '+content[i]['after'])*/
/*                     }*/
/* */
/*                 }*/
/*                 return html.join('-');*/
/*             } else if(type == 2) {*/
/*                 for(var i in content) {*/
/*                     if(content[i]['after']){*/
/*                         if(content[i]['name'] == "税务类型"){*/
/* */
/*                             html.push(content[i]['name']+' : '+sType[content[i]['before']]+' 改为 '+  sType[content[i]['after']])*/
/*                         }else{*/
/*                             html.push(content[i]['name']+' : '+content[i]['before']+' 改为 '+  content[i]['after']);*/
/*                         }*/
/*                     }*/
/*                 }*/
/*                 return html.join('-');*/
/*             } else {*/
/*                 return html.join("-");*/
/*             }*/
/*         }*/
/* */
/* */
/*         //账号管理*/
/* 		function accountManage() {*/
/* 			$('.account-manage').unbind('click').click(function() {*/
/* 				var id = $(this).parents('tr').attr('um_company-id');*/
/* 				$('#_account-manage').slideDown();*/
/* 				$('#_account-manage [field]').val('').prop('disabled', false);*/
/* */
/* 				//重置密码*/
/* 				$('#_account-manage .reset_password').unbind('click').click(function() {*/
/* 					bootbox.confirm('确认重置密码？', function(flag) {*/
/* 						if(flag) {*/
/* 							ykp.doAjax({*/
/* 								url: '/api/api_company/edit_pwd',*/
/* 								method: 'post',*/
/* 								data: {*/
/* 									id: id*/
/* 								},*/
/* 								success: function(res) {*/
/* 									ykp.prompt('重置密码成功');*/
/* 									$('#_account-manage').slideUp();*/
/* 									getList();*/
/* 								}*/
/* 							});*/
/* 						}*/
/* 					});*/
/* 				});*/
/* */
/* 				//保存*/
/* 				$('#_account-manage .hold').unbind('click').click(function() {*/
/* 					var postdata = {*/
/* 						id: id*/
/* 					};*/
/* */
/* 					$('#_account-manage [field]').each(function(i, e) {*/
/* 						postdata[$(this).attr('field')] = $(this).val();*/
/* 					});*/
/* */
/* 					ykp.doAjax({*/
/* 						url: '/api/api_company/add_role',*/
/* 						method: 'post',*/
/* 						data: postdata,*/
/* 						success: function(res) {*/
/* 							$('#_account-manage').slideUp();*/
/* 							getList();*/
/* 						}*/
/* 					});*/
/* 				});*/
/* */
/* 				//获取子账号信息*/
/*                 getChildAccount();*/
/* 				function getChildAccount() {*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_company/get_name',*/
/* 						method: 'post',*/
/* 						data: {*/
/* 							id: id*/
/* 						},*/
/* 						success: function(res) {*/
/* 							var data = res.data;*/
/* 							var child_account = data.list;*/
/* */
/* 							if(data.top != '') {*/
/* 								$('#_account-manage [field="username"]').val(data.top.username).prop('disabled', true);*/
/* 							}*/
/* */
/* 							var child_account_html = [];*/
/* 							for(var i in child_account) {*/
/* 								child_account_html.push(*/
/* 									'<div style="text-align:left;padding: 10px;">' +*/
/* 									'<label style="width:72px;text-align:right;">子账号：</label>' +*/
/* 									'<span>' + child_account[i]['username'] + '</span>' +*/
/* 									'<a href="#" childId="' + child_account[i]['id'] + '" class="btRed _del"  style="margin-left:10px;display:'+ (child_account[i]['mobilePhone'] == "" ? 'inline-block' : 'none' )+'; color:#fff !important" title="删除"><i class="fa fa-close"></i></a>'+*/
/* 									'</div>'*/
/* 								);*/
/* 							}*/
/* */
/* 							$('#_account-manage .account_message').html(child_account_html.join(''));*/
/*                             delChild();*/
/* 						}*/
/* 					});*/
/*                 }*/
/* */
/*                 function delChild() {*/
/* 					$("#_account-manage .account_message ._del").unbind().click(function () {*/
/* 						var childId = $(this).attr("childId");*/
/*                         console.log(id,childId);*/
/*                         ykp.doAjax({*/
/*                             url: '/api/api_company/del_user',*/
/*                             method: 'post',*/
/*                             data: {*/
/*                                 id: id,*/
/* 								uid:childId*/
/*                             },*/
/*                             success: function(res) {*/
/*                                 ykp.prompt('删除成功！');*/
/*                                 getChildAccount();*/
/* 							}*/
/*                         });*/
/*                     })*/
/*                 }*/
/* */
/* 				//关闭账号管理*/
/* 				$('#_account-manage').on('click', '.close_manage', function() {*/
/* 					$('#_account-manage').slideUp();*/
/* 				});*/
/* 			});*/
/* 		}*/
/* */
/* 		//续期*/
/* 		function renewal(data) {*/
/* 			$('.renewal').unbind('click').click(function() {*/
/* 				var index = $(this).parents('tr').index();*/
/* 				var _data = data[index]; //付费公司数据*/
/* 				$('#add_company').slideDown();*/
/* 				$('#add_company .title').text('续期管理');*/
/* */
/* 				$('#add_company [field]').val('');*/
/* */
/* 				var field = '';*/
/* 				$('#add_company [field]').each(function(i, e) {*/
/* 					field = 'um_company.' + $(this).attr('field');*/
/* 					if($(this).attr('field') == 'start_time' || $(this).attr('field') == 'end_time') {*/
/* 						$(this).val(cs.getNowTime(_data[field]));*/
/* 						return true;*/
/* 					}*/
/* */
/* 					$(this).val(_data[field]);*/
/* 				});*/
/* */
/* 				//保存*/
/* 				$('#add_company .hold').unbind('click').click(function() {*/
/* 					var postdata = {*/
/* 						id: _data['um_company.id']*/
/* 					};*/
/* */
/* 					var flag = true;*/
/* 					$('#add_company [field]').each(function(i, e) {*/
/* 						//判断是否为空*/
/* 						if(!$(this).val().trim()) {*/
/* 							ykp.prompt($(this).attr('message'));*/
/* 							flag = false;*/
/* 							return false;*/
/* 						}*/
/* 						if($(this).attr('field') == 'start_time' || $(this).attr('field') == 'end_time') {*/
/* 							// console.log($(this).val().split('~')[0]);*/
/* 							// console.log($(this).val().split('~')[1]);*/
/* 							postdata[$(this).attr('field')] = new Date($(this).val()) / 1000;*/
/* 							return true;*/
/* 						}*/
/* 						postdata[$(this).attr('field')] = $(this).val();*/
/* 					});*/
/* */
/* 					//如果有空值，则返回*/
/* 					if(!flag) {*/
/* 						return;*/
/* 					}*/
/* */
/* 					//如果结束时间小于开始时间，则提示并返回*/
/* 					if(postdata['end_time'] < postdata['start_time']) {*/
/* 						ykp.prompt('结束时间不能小于开始时间');*/
/* 						return;*/
/* 					}*/
/* */
/* 					ykp.doAjax({*/
/* 						url: '/api/api_company/renewal',*/
/* 						method: 'post',*/
/* 						data: postdata,*/
/* 						success: function(res) {*/
/* 							$('#add_company').slideUp();*/
/* 							getList();*/
/* 						}*/
/* 					});*/
/* 				})*/
/* */
/* 				$('#add_company').on('click', '.close_manage', function() {*/
/* 					$('#add_company').slideUp();*/
/* 				});*/
/* 			});*/
/* 		}*/
/* */
/* 		//权限管理 权限详情*/
/* 		function powerManage_detail() {*/
/* 			$('.power_manage').unbind('click').click(function() {*/
/* 				var id = $(this).parents('tr').attr('um_company-id'); //付费公司id*/
/* 				$('#power-manage').slideDown();*/
/* */
/* 				$('#power-manage .power_detail').html('');*/
/* */
/* 				$('#power-manage .title').text('权限管理');*/
/* */
/* 				power_save(id);*/
/* */
/* 				getTemplate(); //获取所有模板*/
/* */
/* 				//获取系统所有权限*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_role/get_user_nodes',*/
/* 					method: 'get',*/
/* 					data: {},*/
/* 					success: function(res) {*/
/* 						//显示所有权限数据*/
/* 						addPowerList(res, id);*/
/* 					}*/
/* 				});*/
/* */
/* 				$('#power-manage').on('click', '.close_manage', function() {*/
/* 					$('#power-manage').slideUp();*/
/* 				});*/
/* 			});*/
/* 		}*/
/* */
/* 		function getTemplate() {*/
/* //			$('.advandced-search').select2({*/
/* //				allowClear: true*/
/* //			});*/
/* 			$('.advandced-search').html('<option value=""> --- 请选择 --- </option>');*/
/* 			//获取系统所有权限*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_role/get_role_template',*/
/* 				method: 'get',*/
/* 				data: {},*/
/* 				success: function(res) {*/
/* 					//显示所有权限数据*/
/* 					var data = res.data;*/
/* 					templateNodes = data;*/
/* 					for(var i = 0; i < data.length; i++) {*/
/* 						$('.advandced-search').append(new Option(data[i].name, data[i].id));*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 			*/
/* 			$('.advandced-search').val("").trigger('change');*/
/* */
/* 			$('.advandced-search').unbind('change').change(function() {*/
/* 				var val = $('.advandced-search').val();*/
/* 				var index = $('.advandced-search').find('option:selected').index();*/
/* 				if(val) {*/
/* 					//获取系统所有权限*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_role/get_user_nodes',*/
/* 						method: 'get',*/
/* 						data: {},*/
/* 						success: function(res) {*/
/* 							//显示所有权限数据*/
/* 							addPowerList(res);*/
/* 							if(templateNodes[index-1].nodes != '') {*/
/* 								var nodes = templateNodes[index-1].nodes.split(',');*/
/* 		*/
/* 								for(var i in nodes) {*/
/* 									$('#power-manage').find('input[data-id="' + nodes[i] + '"],input[dtid="' + nodes[i] + '"]').prop('checked', true);*/
/* 								}*/
/* 							}*/
/* 						}*/
/* 					});*/
/* 				}*/
/* */
/* 			})*/
/* 		}*/
/* 		//删除模板*/
/* 		$('.delTemplate').unbind('click').click(function() {*/
/* 			var val = $('.advandced-search').val();*/
/* 			if(!val) {*/
/* 				ykp.prompt('请选择模板再删除');*/
/* 				return;*/
/* 			}*/
/* 			layui.use("layer", function() {*/
/* 				layer.confirm('确认删除模板吗？', function(index) {*/
/* 					ykp.doAjax({*/
/* 						url: "/api/api_role/del_role_template?id="+val,*/
/* 						method: "get",*/
/* 						success: function() {*/
/* 							ykp.prompt('删除模板成功');*/
/* 							getTemplate();*/
/* 						}*/
/* 					})*/
/* 				});*/
/* 			})*/
/* */
/* 		})*/
/* */
/* 		//权限管理 权限保存*/
/* 		function power_save(id) {*/
/* 			//保存*/
/* 			$('#power-manage .hold_power').unbind('click').click(function() {*/
/* 				var postdata = {*/
/* 					id: id*/
/* 				};*/
/* */
/* 				var nodes = [];*/
/* 				$('#power-manage').find('input[data-id]:checked,input[dtid]:checked').each(function(i, e) {*/
/* 					if($(this).attr('data-id')) {*/
/* 						nodes.push($(this).attr('data-id'));*/
/* 					}*/
/* 					if($(this).attr('dtid')) {*/
/* 						nodes.push($(this).attr('dtid'));*/
/* 					}*/
/* 				});*/
/* */
/* 				postdata['nodes'] = nodes.join(',');*/
/* 				if($('.advandced-search').val()){*/
/* 					postdata['name'] =$('.advandced-search').find('option:selected').text();*/
/* 				}*/
/* 				bootbox.confirm('确认修改权限？', function(flag) {*/
/* 					if(flag) {*/
/* 						ykp.doAjax({*/
/* 							url: '/api/api_company/edit_nodes',*/
/* 							method: 'post',*/
/* 							data: postdata,*/
/* 							success: function(res) {*/
/* 								ykp.prompt('修改权限成功');*/
/* 								$('#power-manage').slideUp();*/
/* 								getList();*/
/* 							}*/
/* 						});*/
/* 					}*/
/* 				});*/
/* 			});*/
/* 		}*/
/* */
/* 		//显示所有权限数据*/
/* 		function addPowerList(res, id) {*/
/* 			var content = "";*/
/* 			var data = res.data.list;*/
/* 			data.forEach(function(item) {*/
/* 				if(item.id == 83) {*/
/* 					delete item;*/
/* 				}*/
/* 			})*/
/* 			var firstChild = ""; //父级权限*/
/* 			var scendChild = ""; //子级权限*/
/* 			for(var i in data) {*/
/* 				if(data[i]['name'] == '付费管理') {*/
/* 					continue;*/
/* 				}*/
/* 				// console.log(data[i]);*/
/* 				firstChild = "";*/
/* 				scendChild = "";*/
/* 				if(i != 'other') {*/
/* 					if(data[i]['child'] != undefined) {*/
/* 						content +=*/
/* 							`<div class="clientPower">*/
/* 								<div class="powerRelative">*/
/* 									<label data-id="${data[i]['id']}">${i == 'other' ? '其他列表' : data[i]['name']} </label>*/
/* 								</div>*/
/* 								<div class="powerDetail">*/
/* 									<div class="li_bar li_bar_two"><volist name="nodes" id="node">`;*/
/* 						for(var j in data[i]['child']) {*/
/* 							firstChild +=*/
/* 								`<em>*/
/* 									<label class="checked">*/
/* 										<input type="checkbox" class="nodes" data-id="${data[i]['child'][j]['id']}"> */
/* 										<b class="power_name">${data[i]['child'][j]['name']}</b>*/
/* 									</label>*/
/* 								</em>`;*/
/* 							for(var k in data[i]['child'][j]['child']) {*/
/* 								scendChild +=*/
/* 									` <label class="checked">*/
/* 										<input type="checkbox" class="nodes" data-parent="${data[i]['child'][j]['child'][k].parent}"  dtId="${data[i]['child'][j]['child'][k].id}" >*/
/* 										<b class="power_name">*/
/* 											${data[i]['child'][j]['child'][k].name}*/
/* 										</b>*/
/* 									</label>`*/
/* 							}*/
/* 							content += '<div grantid="12101407980" dataid="3" class="li_tit"><p><em>' + firstChild + '</em><span><volist  id="child_node">' + scendChild + '</volist></span></p></div>';*/
/* 							firstChild = "";*/
/* 							scendChild = '';*/
/* 						}*/
/* 						content += '</volist></div></div></div>'*/
/* 					} else {*/
/* 						content += `<div class="clientPower">*/
/* 							<div class="powerRelative">*/
/* 								<label data-id="${data[i]['id']}">${i == 'other' ? '其他列表' : data[i]['name']}</label>*/
/* 							</div>*/
/* 							<div class="powerDetail">*/
/* 								<div style="text-align: center; margin-left:-40px">暂无数据</div>*/
/* 							</div>*/
/* 						</div>`;*/
/* 					}*/
/* 				} else {*/
/* 					content +=*/
/* 						`<div class="clientPower" style='margin-top:20px'> */
/* 											<div class="powerRelative">*/
/* 												<label data-id="${data[i]['id']}">其他列表</label>*/
/* 											</div>*/
/* 											<div class="powerDetail">*/
/* 												<div class="li_bar li_bar_two"><volist name="nodes" id="node">`;*/
/* 					for(var j in data[i]) {*/
/* 						firstChild =*/
/* 							`<em>*/
/* 								<label class="checked">*/
/* 									<input type="checkbox" class="nodes" data-id="${data[i][j]['id']}">*/
/* 								    <b class="power_name">${data[i][j]['name']}</b>*/
/* 								</label>*/
/* 							</em>`;*/
/* 						for(var k in data[i][j]['child']) {*/
/* 							scendChild +=*/
/* 								` <label class="checked">*/
/* 									<input type="checkbox" class="nodes" data-parent="${data[i][j]['child'][k].parent}"  data-id="${data[i][j]['child'][k].id}" >*/
/* 									<b class="power_name">*/
/* 										${data[i][j]['child'][k].name}*/
/* 									</b>*/
/* 								</label>`*/
/* 						}*/
/* 						content += '<div grantid="12101407980" dataid="3" class="li_tit"><p><em>' + firstChild + '</em><span><volist  id="child_node">' + scendChild + '</volist></span></p></div>';*/
/* 						firstChild = "";*/
/* 						scendChild = '';*/
/* 					}*/
/* 					content += '</volist></div></div></div>'*/
/* 				}*/
/* 			}*/
/* */
/* 			$('.power_detail').html(content);*/
/* */
/* 			//选中父级权限则选中所有子级权限，选中子级权限则选中父级权限*/
/* 			checkPower();*/
/* */
/* 			//获取付费公司所拥有权限*/
/* 			getOwnerPower(id);*/
/* */
/* 		}*/
/* */
/* 		//获取付费公司所拥有权限*/
/* 		function getOwnerPower(id) {*/
/* 			if(!id) {*/
/* 				return false;*/
/* 			}*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_company/get_nodes',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					id: id*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* */
/* 					if(data.nodes != '') {*/
/* 						var nodes = data.nodes.split(',');*/
/* */
/* 						for(var i in nodes) {*/
/* 							$('#power-manage').find('input[data-id="' + nodes[i] + '"],input[dtid="' + nodes[i] + '"]').prop('checked', true);*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//权限选择*/
/* 		function checkPower() {*/
/* 			$('input[type="checkbox"]').unbind('click').click(function() {*/
/* 				if($(this).attr('data-parent')) {*/
/* 					if($(this).is(':checked')) {*/
/* 						if(!$('#node input[data-id="' + $(this).attr('data-parent') + '"]').is(':checked')) {*/
/* 							$('#node input[data-id="' + $(this).attr('data-parent') + '"]').prop('checked', true);*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				if($(this).attr('data-id')) {*/
/* 					if(!$(this).is(':checked')) {*/
/* 						var id = $(this).attr('data-id');*/
/* 						$('input[data-parent=' + id + ']').prop('checked', this.checked);*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 	});*/
/* </script>*/
