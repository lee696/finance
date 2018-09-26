<?php

/* admin/task/knowledge.html */
class __TwigTemplate_c829f2c44846c7d67840656f5c7927f44ccb50d6898727d7d2e6820966712553 extends Twig_Template
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
\t.tree-open {
\t\tlist-style: none;
\t\tborder-bottom: 1px solid #eee;
\t\tpadding-top: 2px;
\t\tcursor: pointer;
\t}
\t
\t.btn-group:first-child {
\t\twidth: 100%;
\t}
\t
\t.cur {
\t\ttext-align: center;
\t}
\t
\t.tree-open:last-child {
\t\tborder: none;
\t}
\t
\t.tree .tree-item a:hover {
\t\tfont-weight: normal;
\t}
\t
\t.tree .tree-item a:focus {
\t\tcolor: #337ab7;
\t}
\t
\t._item i {
\t\tcursor: pointer;
\t}
\t
\t.tree:before {
\t\tcontent: none;
\t}
\t
\tli._item {
\t\tposition: relative;
\t}
\t
\tli._item:before {
\t\tdisplay: inline-block;
\t\tcontent: \"\";
\t\tposition: absolute;
\t\ttop: 20px;
\t\tbottom: 18px;
\t\tleft: 5px;
\t\tz-index: 1;
\t\tborder: 1px dotted #67B2DD;
\t\tborder-width: 0 0 0 1px;
\t}
\t
\t#knowledge li b {
\t\topacity: 0;
\t}
\t/*#knowledge li a {
    \t   display: inline-block;
    \twidth: 74px;
    }*/
\t
\t#knowledge li > a :hover b {
\t\topacity: 1;
\t}
\t
\t#knowledge>a,
\t#knowledge li a {
\t\tcolor: #000;
\t\tfont-weight: 100;
\t\tcursor: pointer;
\t}
\t
\t#knowledge li>ul li a {
\t\tdisplay: inline-block;
\t\t/*width: 74px;*/
\t}
\t
\t/*#knowledge>a:hover,*/
\t#knowledge li>ul li:hover b {
\t\topacity: 1;
\t}
\t.widget-main{
\t\tpadding: 0px !important;
\t}
#addGroup{
\tbackground: #e6ecf2 !important;
\tborder: none;
}
#addGroup:hover {
\tbackground: #1E9FFF !important;
\tborder: 1px solid #1E9FFF;
}
.btns{
\tcolor: #000;
}
#addGroup:hover .btns{
\tcolor: white;
}
._item {
\tpadding-top: 10px;
}
</style>
<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<!-- \t\t<h3 class=\"header smaller lighter blue\">部门员工</h3> -->
\t\t<div class=\"row padding-20\">
\t\t\t<div class=\"col-xs-12\">

\t\t\t\t<div class=\"row\" style=\"margin-top: 20px;\" id=\"topTool\">
\t\t\t\t\t<!--普通搜索-->

\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t<input type=\"text\" pts=0 sear=\"question\" placeholder=\"问题\" style=\"width:180px;\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t<button type=\"button\" title=\"搜索\" id=\"search\" class=\"btn btn-info btn-sm\">
                            <i class=\"fa fa-search\"></i>
                        </button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t<button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
\t\t                    <i class=\"fa fa-refresh\"></i>
\t\t                </button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;  margin-right: 5px; \">
\t\t\t\t\t\t<button id=\"add\" title=\"添加问题\" type=\"button\" style=\"border-color: #1E9FFF !important;background: #1E9FFF !important;\" class=\"btn  addBtn btn-info btn-sm\">
\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
                        </button>
\t\t\t\t\t</div>
\t\t\t\t\t<!--<div class=\"col-sx-4\" style=\" float: left;  margin-right: 5px; \">-->
\t\t\t\t\t\t<!--<button id=\"addGroup\" title=\"添加分组\" type=\"button\" style=\"border-color: #1E9FFF !important;background: #1E9FFF !important;\" class=\"btn  addBtn btn-info btn-sm\">-->
\t\t\t\t\t\t\t<!--<i class=\"fa fa-plus\"></i>-->
                        <!--</button>-->
\t\t\t\t\t<!--</div>-->
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t\t<button id=\"heightsearch\" title=\"高级搜索\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color:#00c0ef !important;\">
\t                            <i class=\"fa fa-filter\"></i>
\t                        </button>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"position: absolute;margin-top: 65px; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;\">
\t\t\t\t\t\t<div class=\"row\" id=\"SearchCon\">

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-3\" style=\"border:1px solid #ddd;padding:0;width: 16.666%;\">
\t\t\t\t\t\t<div class=\"widget-box widget-color-green2\" style=\"margin-top:0;\">
\t\t\t\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t\t\t\t<h4 class=\"widget-title lighter smaller\" style=\"color: cornflowerblue;\">
                                   \t\t\t 知识库分组
                                </h4>
\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: right;  margin-right: 5px; \">
\t\t\t\t\t\t\t\t\t<button id=\"addGroup\" title=\"添加分组\" type=\"button\" style=\" margin-top: 5px;\" class=\"btn  addBtn btn-info btn-sm\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus btns\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t\t<div class=\"widget-main padding-20\">
\t\t\t\t\t\t\t\t\t<ul style=\"list-style-type:none;\" class=\"tree\" role=\"group\" id=\"knowledge\">

\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-9\" style=\"width: 83.334%;\">
\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t<table id=\"dynamic-table\" style=\"margin-bottom:0px;\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t\t\t<th class=\" center\">操作</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"center thColor name\" data-num=\"1\">问题</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"center thColor name\" data-num=\"2\">答案</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"center thColor name\" data-num=\"3\">解决状态</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"center thColor name\" data-num=\"4\">创建人</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"center thColor name\" data-num=\"5\">创建时间</th>
\t\t\t\t\t\t\t\t\t\t<th class=\" center department\" data-num=\"6\">编辑人</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"center cardNum\" data-num=\"7\">编辑时间</th>

\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"dataList\">

\t\t\t\t\t\t\t\t</tbody>

\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" id=\"num\"></div>
\t\t\t\t\t\t\t<div id=\"pageBar\" class=\"pagination\"></div>
\t\t\t\t\t\t\t<div align=\"right\" style=\"float: right; margin-right: 15px;  width: 10%;\">
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

\t\t\t\t\t<div class=\"row\" id=\"template\" style=\"display:none;\">
\t\t\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<form class=\"item_form\" role=\"form\" id=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 分组： </label>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"reson\" addfield=\"cate_id\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">请选择分组</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 状态： </label>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"status\" addfield=\"status\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">未解决</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">解决中</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">已解决</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 问题： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"in_num required\" value=\"\" addfield=\"question\" />
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 答案： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"in_num required\" value=\"\" addfield=\"answer\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t<!--保存按钮-->
\t\t\t\t\t\t\t\t<div class=\" padding-4 clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cur\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" id=\"add\">
                                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                                保存
                                            </button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\" id=\"template2\" style=\"display:none;\">
\t\t\t\t\t\t<div class=\"widget-box\">

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<form class=\"item_form\" role=\"form\" id=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 上级分组： </label>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"depart\" affied=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">请选择分组</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 分组名称： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"in_num required\" value=\"\" affied=\"name\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t<!--保存按钮-->
\t\t\t\t\t\t\t\t<div class=\" padding-4 clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cur\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" id=\"add\">
                                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                                保存
                                            </button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\" id=\"templateDtl\" style=\"display:none;\">
\t\t\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<form class=\"item_form\" role=\"form\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 问题： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" disabled class=\"in_num required\" value=\"\" addfield=\"question\" />
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 答案： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" disabled class=\"in_num required\" value=\"\" addfield=\"answer\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 解决状态： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" disabled class=\"in_num required\" value=\"\" addfield=\"status\" />
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 创建人： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" disabled class=\"in_num required\" value=\"\" addfield=\"create_id\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 编辑人： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" disabled class=\"in_num required\" value=\"\" addfield=\"update_id\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 创建时间： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" disabled class=\"in_num required\" value=\"\" addfield=\"create_at\" />
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 编辑时间： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" disabled class=\"in_num required\" value=\"\" addfield=\"update_at\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"label_popup\" id=\"label_popup\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t\t\t\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t\t\t\t\t    box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t\t\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t\t\t\t\t<span style=\"display: inline-block;\">编辑分组</span>
\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t\t\t\t\t<input type=\"text\" width=\"200px\" style=\"margin: auto;\" id=\"labelName\" />
\t\t\t\t\t\t\t\t<!--<hr>-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t\t\t\t\t<button class=\"close_label\">关闭</button>
\t\t\t\t\t\t\t\t<button class=\"hold\">保存</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 339
        $this->loadTemplate("admin/mark.html", "admin/task/knowledge.html", 339)->display($context);
        // line 340
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script>
\tjQuery(function(\$) {
\t\tvar pagesize = 10;
\t\tvar cartGroup = [];
\t\tvar employees = {};
\t\tvar sort_role = \"\";
\t\tvar order = \"\";
\t\tvar filter = \"\";
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
\t\t\t\tfor(var i in data) {
\t\t\t\t\temployees[data[i]['id']] = data[i]['name'];
\t\t\t\t}
\t\t\t}
\t\t});

\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_knowledge/question_list',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: \"zsm_question.is_del = 0\",
\t\t\t\tpage_size: pagesize
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '.pageBar'
\t\t\t},
\t\t\tcontentId: \"#datalist\", //默认排序
\t\t\tinitOrder: \"\", //初始化sort
\t\t\tdefaultOrder: \"\",
\t\t\tparams: [{
\t\t\t\tid: \"#dynamic-table\",
\t\t\t\tfield: [\"\", \"zsm_question.question\", \"zsm_question.answer\", \"zsm_question.status\", \"zsm_question.create_id\", \"zsm_question.create_at\", \"zsm_question.update_id\", \"zsm_question.update_at\"]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});

\t\t// 展开 | 关闭部门管理下面的选项
\t\tfunction spread() {
\t\t\t\$('.tree .control').click(function() {
\t\t\t\tif(\$(this).hasClass('_close')) {
\t\t\t\t\t\$(this).removeClass('_close').removeClass('fa-minus-square').addClass('fa-plus-square').next().next().hide();
\t\t\t\t\treturn;
\t\t\t\t} else {
\t\t\t\t\t\$(this).parent().siblings().find('._close').removeClass('_close').removeClass('fa-minus-square').addClass('fa-plus-square').next().next().hide();
\t\t\t\t\t\$(this).addClass('_close').addClass('fa-minus-square').removeClass('fa-plus-square').next().next().show();
\t\t\t\t}

\t\t\t});
\t\t}

\t\tgetKnow();

\t\tfunction getKnow() {
\t\t\tykp.doAjax({
\t\t\t\turl: \"/api/api_knowledge/cate_list\",
\t\t\t\tmethod: \"get\",
\t\t\t\tdata: {
\t\t\t\t\tlimit: 999,
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tif(res.data.item == \"\") {
\t\t\t\t\t\tykp.prompt(\"暂无知识\");
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddKnowGroup(res);
\t\t\t\t}
\t\t\t})
\t\t}

\t\tfunction addKnowGroup(res) {
\t\t\tvar content = \"\";
\t\t\tvar data = res.data;
            var department = [];
\t\t\tcartGroup = [];
\t\t\tfor(var i in data) {
\t\t\t\tconsole.log(data[i])
\t\t\t\tif(data[i]['parent'] == 0) {
\t\t\t\t\tdepartment.push({
\t\t\t\t\t\tname: data[i]['name'],
                        count: data[i]['count'],
\t\t\t\t\t\tid: data[i]['id'],
\t\t\t\t\t\tparent: data[i]['parent'],
\t\t\t\t\t\tchilden: data[i]['_child'] || \"\"
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
            console.log(department);
\t\t\t/*for(var i in department){
                cartGroup.push({
                    id: department[i].id,
                    name: department[i].name
                })
\t\t\t}*/
            var child;
\t\t\tfor(var i in department) {
\t\t\t\tchild = '';
              /*  cartGroup.push({
                    id: department[i].id,
                    name: department[i].name
                })*/
\t\t\t\tif(department[i].childen != \"\" && department[i].childen.length == 0) {
\t\t\t\t\tcontent += `
\t\t\t\t\t\t\t\t<li style=\"padding:4px 0 4px 0\" class=\"_item\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-square control\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<a data-id=\"\${department[i].id}\" class=\"parent\"><span>\${department[i].name}</span></a>
\t\t\t\t\t\t\t\t</li>`;
\t\t\t\t} else {
\t\t\t\t\tfor(var j in department[i].childen) {
\t\t\t\t\t\tchild += `<li data-id=\"\${department[i].childen[j].id}\" data-name='\${department[i].childen[j].name}'  data-parent=\"\${department[i].childen[j].parent}\" style=\"padding:4px 0 4px 20px\" class=\"tree-item\" role=\"treeitem\">
\t\t\t\t\t\t\t\t\t<a data-id=\"\${department[i].childen[j].id}\" data-parent=\"\${department[i].childen[j].parent}\" class=\"childen\" href=\"#\" style=\"text-decoration:none;\"><span class=\"relieves\">\${department[i].childen[j].name}<span></a> 
\t\t\t\t\t\t\t\t\t<span class=\"relieves\">（\${department[i].childen[j].count}）</span>
\t\t\t\t\t\t\t\t\t<b style=\"display:inline-block;float: right;\"><i style=\"color:red\" class=\"ace-icon fa fa-trash-o gdel gdel1\" ></i>&nbsp;<i class=\"ace-icon fa fa-pencil align-top gedit\" ></i></b>
\t\t\t\t\t\t\t\t</li>`;
\t\t\t\t\t\tcartGroup.push({
\t\t\t\t\t\t\tid: department[i].childen[j].id,
\t\t\t\t\t\t\tname: department[i].childen[j].name
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t\tcontent += `
\t\t\t\t\t\t\t<li style=\"padding:4px 0 4px 0\" class=\"_item showchild\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-square control\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<a data-id=\"\${department[i].id}\" data-parent=\"\${department[i].parent}\"><span span class=\"relieves\">\${department[i].name}<span>   <b style=\"display:inline-block;float: right;\"><i style=\"color:red\" length=\"\${department[i].childen.length}\" class=\"ace-icon fa fa-trash-o gdel gdel2\" ></i>&nbsp;<i class=\"ace-icon fa fa-pencil align-top gedit\" ></i></b></a>

\t\t\t\t\t\t\t\t<ul style=\"list-style-type:none;display:none;\">
\t\t\t\t\t\t\t\t\t\${child}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>`;
\t\t\t\t}
\t\t\t}

\t\t\t\$('#knowledge').html(content);

\t\t\tspread();

\t\t\t//删除分组
\t\t\t\$('.gdel').click(function() {
\t\t\t\tif(\$(this).hasClass('gdel1')) {
\t\t\t//\t\tvar id = \$(this).parent().prev().attr('data-id');
\t\t     \tvar id =\$('.childen').attr('data-id')
\t\t\t\t\tconsole.log(id);
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_knowledge/question_list',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tpage_size: 999,
\t\t\t\t\t\t\tcate_id: id,
\t\t\t\t\t\t\tfilter: 'zsm_question.is_del = 0'
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tvar data = res.data.items;
\t\t\t\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\t\t\tlayer.confirm('确认删除分组吗？', function(index) {
\t\t\t\t\t\t\t\t\tif(data.length > 0) {
\t\t\t\t\t\t\t\t\t\tykp.prompt('当前分组中有问题，不能删除！');
\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\t\t\turl: '/api/api_knowledge/cate_del',
\t\t\t\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\t\t\tid: id,
\t\t\t\t\t\t\t\t\t\t\tis_del: 1
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\t\t\tykp.prompt(\"删除成功\");
\t\t\t\t\t\t\t\t\t\t\tlayer.close(index);
\t\t\t\t\t\t\t\t\t\t\tgetKnow();
\t\t\t\t\t\t\t\t\t\t\tshowPage();
\t\t\t\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t})

\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t})

\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\tif(\$(this).hasClass('gdel2')) {
\t\t\t\t\tvar id = \$(this).parents('a').attr('data-id');
\t\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\tlayer.confirm('确认删除分组吗？', function(index) {
\t\t\t\t\t\t\tif(\$(this).attr('length') > 0) {
\t\t\t\t\t\t\t\tykp.prompt('当前分组中有分组，不能删除！');
\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\turl: '/api/api_knowledge/cate_del',
\t\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\tid: id,
\t\t\t\t\t\t\t\t\tis_del: 1
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\tykp.prompt(\"删除成功\");
\t\t\t\t\t\t\t\t\tgetKnow();
\t\t\t\t\t\t\t\t\tshowPage();
\t\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})

\t\t\t\t\t\t});
\t\t\t\t\t})

\t\t\t\t}
\t\t\t})

\t\t\t//编辑分组
\t\t\t\$('.gedit').unbind('click').click(function() {

\t\t\t\t//修改一级分组时
\t\t\t\tif(\$(this).parents('a').attr('data-parent') == 0) {
\t\t\t\t\tvar id = \$(this).parents('a').attr('data-id');
\t\t\t\t\t\$('#label_popup').show();
\t\t\t\t\t\$('#label_popup input').val(\$(this).parents('a').find('span').eq(0).text().trim());

\t\t\t\t\t\$('#label_popup .hold').unbind('click').click(function() {
\t\t\t\t\t\tvar name = \$('#label_popup').find('input').val();
\t\t\t\t\t\tif(name == '') {
\t\t\t\t\t\t\tykp.prompt('名称不能为空！');
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tadd_edit1(id, name);
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t\t})
\t\t\t\t\tcs.closePop();
\t\t\t\t} else {
\t\t\t\t\tvar id = \$(this).parents('li').attr('data-id');
\t\t\t\t\t//修改二级分组时
\t\t\t\t\tshowMark('#template2');
\t\t\t\t\t\$('#templateCon #editTitile').text('编辑分组');
\t\t\t\t\tvar parent = \$(this).parents('li').attr('data-parent');
\t\t\t\t\tgetParentPart(parent);
\t\t\t\t\t\$('#templateCon').find('input').val(\$(this).parents('li').attr('data-name'));

\t\t\t\t\tadd_edit(id)
\t\t\t\t}
\t\t\t})

\t\t\tfunction add_edit1(id, name, parent) {
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: \"/api/api_knowledge/cate_add_edit\",
\t\t\t\t\tdata: {
\t\t\t\t\t\tname: name,
\t\t\t\t\t\tid: id,
\t\t\t\t\t\tparent: parent || 0
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tykp.prompt('编辑成功！');
\t\t\t\t\t\tgetKnow();
\t\t\t\t\t\tshowPage();
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}

\t\t\t//点击二级分类显示数据
\t\t\t\$('.tree-item a,.showchild a').find('.relieves').click(function() {
\t\t\t\tvar cate_id = \$(this).parent().attr('data-id');
\t\t\t\t//console.log(cate_id)
\t\t\t\tshowPage(cate_id);
\t\t\t})
\t\t}

\t\t//添加问题
\t\t\$('#add').click(function() {
\t\t\tshowMark(\"#template\");
\t\t\t\$('#showBox .title').text('添加问题');
\t\t\tvar option = '';
            console.log(cartGroup);
            for(var i in cartGroup) {
\t\t\t\toption += '<option value=\"' + cartGroup[i]['id'] + '\">' + cartGroup[i]['name'] + '</option>'
\t\t\t}

\t\t\t\$('#templateCon select[addfield=cate_id]').html(option);
\t\t\tadd_edit_quer();
\t\t})

\t\tfunction add_edit_quer(id) {
\t\t\t//保存
\t\t\t\$('#showBox #add').click(function() {
\t\t\t\tvar data = {};
\t\t\t\tvar status = false;
\t\t\t\tvar val = ''
\t\t\t\tvar length = \$('#templateCon .item_form').find('input[addfield]').length;
\t\t\t\t\$('#templateCon .item_form').find('[addfield]').each(function(i, element) {
\t\t\t\t\tif(\$(this).val() == \"\" && \$(this).attr('addfield') != 'answer') {
\t\t\t\t\t\tykp.prompt(\$(this).prev().text().replace(/：/, '') + \"不能为空！\");
\t\t\t\t\t\tstatus = false;
\t\t\t\t\t\treturn false;
\t\t\t\t\t} else {
\t\t\t\t\t\t//console.log(\$(this).val())
\t\t\t\t\t\tstatus = true;
\t\t\t\t\t\tdata[\$(this).attr('addfield')] = \$(this).val();
\t\t\t\t\t}

\t\t\t\t});

\t\t\t\tif(id) {
\t\t\t\t\tdata.id = id;
\t\t\t\t}
\t\t\t\tif(status) {
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: \"/api/api_knowledge/question_add_edit\",
\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\tdata: data,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tif(res.code == 200) {
\t\t\t\t\t\t\t\tykp.prompt(\"添加成功！\");
\t\t\t\t\t\t\t\t//关闭弹出层
\t\t\t\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\t\t\t\$('#showBox').addClass('ishide');
\t\t\t\t\t\t\t\tshowPage();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t}

\t\t\t});
\t\t}

\t\t//添加分组
\t\t\$('#addGroup').click(function() {
\t\t\tshowMark('#template2');
\t\t\t\$('#showBox .title').text('添加分组');
\t\t\tgetParentPart();

\t\t\tadd_edit();
\t\t})

\t\t//添加编辑二级分组
\t\tfunction add_edit(id) {
\t\t\t\$('#templateBox #add').unbind('click').click(function() {
\t\t\t\tvar data = {},
\t\t\t\t\tstatus = false;
\t\t\t\t\$('#templateBox').find('input,select').each(function(i) {

\t\t\t\t\tif(i != 0) {
\t\t\t\t\t\tif(\$(this).val() != '') {

\t\t\t\t\t\t\tdata[\$(this).attr('affied')] = \$(this).val();
\t\t\t\t\t\t\tstatus = true;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tykp.prompt('输入框不能为空 ');
\t\t\t\t\t\t\treturn false
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\tif(\$(this).val() != '') {
\t\t\t\t\t\t\tdata[\$(this).attr('affied')] = \$(this).val();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\tif(id) {
\t\t\t\t\tdata.id = id
\t\t\t\t}
\t\t\t\tif(status) {
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: \"/api/api_knowledge/cate_add_edit\",
\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\tdata: data,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tykp.prompt(\"添加成功!\");
\t\t\t\t\t\t\tgetKnow();
\t\t\t\t\t\t\tshowPage();
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//获取上级部门
\t\tfunction getParentPart(parent) {
\t\t\tykp.doAjax({
\t\t\t\turl: \"/api/api_knowledge/cate_list\",
\t\t\t\tmethod: \"get\",
\t\t\t\tdata: {
\t\t\t\t\tlimit: 999,
\t\t\t\t\tfilter: 'zsm_category.is_del = 0 and zsm_category.parent = 0'
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tif(res.data.item == \"\") {
\t\t\t\t\t\tykp.prompt(\"暂无分组\");
\t\t\t\t\t\treturn false;
\t\t\t\t\t} else {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\tvar content = [];
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\tcontent.push('<option value=\"' + data[i]['id'] + '\">' + data[i]['name'] + '</option>');
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#templateBox #depart').append(content.join(''));
\t\t\t\t\t\tif(parent) {
\t\t\t\t\t\t\t\$('#templateCon select option[value=' + parent + ']').attr(\"selected\", true);
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t}
\t\t\t})
\t\t}

\t\tsearch();

\t\tfunction search() {
\t\t\t//搜索
\t\t\t\$('#search').click(function() {
\t\t\t\tif(\$('input[sear=\"question\"]').val() == \"\") {
\t\t\t\t\tykp.prompt(\"搜索条件至少输入一个!\");
\t\t\t\t\treturn false;
\t\t\t\t} else {
\t\t\t\t\tvar data = {
\t\t\t\t\t\tfilter: \"zsm_question.is_del = 0\",
\t\t\t\t\t\tpage_size: pagesize,
\t\t\t\t\t\tquestion: \$('input[sear=\"question\"]').val()
\t\t\t\t\t}
\t\t\t\t\t//获取数据
\t\t\t\t\tykp.list({
\t\t\t\t\t\turl: '/api/api_knowledge/question_list',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: data,
\t\t\t\t\t\tpageBar: {
\t\t\t\t\t\t\tid: '#pageBar'
\t\t\t\t\t\t},
\t\t\t\t\t\tloadList: function(res) {
\t\t\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d !important;\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\taddList(res);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t}
\t\t\t})
\t\t}

\t\tgetSearch();

\t\tfunction getSearch() {
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tvar list = [{
\t\t\t\t\tname: \"问题\",
\t\t\t\t\tsearch: \"zsm_question.question\",
\t\t\t\t\ttype: \"text\",
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"答案\",
\t\t\t\t\tsearch: \"zsm_question.answer\",
\t\t\t\t\ttype: \"text\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"解决状态\",
\t\t\t\t\tsearch: \"zsm_question.status\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\toption: [{
\t\t\t\t\t\tval: \"0\",
\t\t\t\t\t\ttext: \"未解决\"
\t\t\t\t\t}, {
\t\t\t\t\t\tval: \"1\",
\t\t\t\t\t\ttext: \"解决中\"
\t\t\t\t\t}, {
\t\t\t\t\t\tval: \"2\",
\t\t\t\t\t\ttext: \"已解决\"
\t\t\t\t\t}]
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"创建人 \",
\t\t\t\t\tsearch: \"zsm_question.create_id\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\turl: \"/api/api_employees/f7\",
\t\t\t\t\tkey: \"people\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"创建时间\",
\t\t\t\t\tsearch: \"zsm_question.create_at\",
\t\t\t\t\ttype: \"time\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"编辑人\",
\t\t\t\t\tsearch: \"zsm_question.update_id\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\turl: \"/api/api_employees/f7\",
\t\t\t\t\tkey: \"people\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"编辑时间\",
\t\t\t\t\tsearch: \"zsm_question.update_at\",
\t\t\t\t\ttype: \"time\"
\t\t\t\t}
\t\t\t];

\t\t\tcs.getSearch({
\t\t\t\tlist: list,
\t\t\t\tel: \"#heightsearch\",
\t\t\t\tel1: \"#heightsearch1\"
\t\t\t}, dohSearch);

\t\t\tfunction dohSearch() {
\t\t\t\tvar data = {
\t\t\t\t\turl: '/api/api_knowledge/question_list',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tlimit: pagesize,
\t\t\t\t\t\torder: order,
\t\t\t\t\t\tfilter: filter
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tcs.hSearch('.search1', data, 'filter', false, function(res, _filter) {
\t\t\t\t\tfilter = _filter;
\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\t\$(\"#heightsearch\").removeClass('active').css('z-index', '');
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddList(res);
\t\t\t\t})
\t\t\t}
\t\t}

\t\tshowPage();

\t\tfunction showPage(cate_id) {
\t\t\tvar data = {
\t\t\t\tfilter: \"zsm_question.is_del = 0\",
\t\t\t\tpage_size: pagesize
\t\t\t}
\t\t\tif(cate_id) {
\t\t\t\tdata.cate_id = cate_id
\t\t\t}
\t\t\t//获取数据
\t\t\tykp.list({
\t\t\t\turl: '/api/api_knowledge/question_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: data,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tconsole.log(res.data.items)
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tykp.prompt(\"暂无数据\");
\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d !important;\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t} else {
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}

\t\t\t\t}
\t\t\t})

\t\t}

\t\t\$('#flush').click(function() {
\t\t\t\$('[pts=\"0\"]').val('');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tfilter = '';
\t\t\tshowPage();
\t\t})

        //if(\$('#topTool').find('#custom').length <= 0) {
            cs.custorm_check('#dynamic-table', 'tbody', false);
       // }

\t\tfunction addList(res) {
\t\t\tvar html = '';
\t\t\tvar ths = \$('.thColor th');
\t\t\tvar styles = [];
\t\t\tvar data = res.data.items;
\t\t\tvar list = [];
\t\t\tvar status = ['未解决', '解决中', '已解决'];
            for(var i = 0; i < ths.length; i++) {
                styles.push(ths.eq(i).css('display'));
            }
            for(var i in data) {
\t\t\t\tlist.push(
\t\t\t\t\t`<tr data-id=\${data[i]['zsm_question.id']}>
\t                            <td class=\"center \">
\t                                <label class=\"pos-rel\">
\t                                \t<a> <span style=\"cursor: pointer\" id=\"\" title=\"详情\" class=\"inFo btOrange\"><i class=\"fa fa-info\"></i></span></a>
\t                                    <a href=\"#\" id=\"edit\${i}\" class=\"edit btBlue\"  style=\"color:#fff !important\"> <span class=\"lbl\" title=\"编辑\"><i class=\"fa fa-pencil-square-o\"></i></span></a>
\t                                    <a href=\"#\" id=\"del\${i}\" class=\"del btRed\" style=\"color:#fff !important\" title=\"删除\"><i class=\"fa fa-trash-o\"></i></a>
\t                                </label>
\t                            </td>
\t                            <td class=\"center name\" style=\"display:\${styles[1]}\" data-num = \"1\">
\t                                <span class=\"lbl \">\${data[i]['zsm_question.question']}</span>
\t                            </td>
\t                            <td class=\"center cardNum\" style=\"display:\${styles[2]}\" data-num = \"2\">
\t                                <span class=\"lbl  \">\${data[i]['zsm_question.answer']}</span>
\t                            </td>
\t                            <td class=\"center department\" style=\"display:\${styles[3]}\" data-num = \"3\">
\t                                <span class=\"lbl \">\${status[data[i]['zsm_question.status']]}</span>
\t                            </td>
\t                            <td class=\"center department\" style=\"display:\${styles[4]}\" data-num = \"4\">
\t                                <span class=\"lbl \">\${employees[data[i]['zsm_question.create_id']]}</span>
\t                            </td>
\t                              <td class=\"center department\" style=\"display:\${styles[5]}\" data-num = \"5\">
\t                                <span class=\"lbl \">\${cs.getNowTime(data[i]['zsm_question.create_at'],true)}</span>
\t                            </td>
\t                              <td class=\"center department\" style=\"display:\${styles[6]}\" data-num = \"6\">
\t                                <span class=\"lbl \">\${data[i]['zsm_question.update_id'] != '0' ? employees[data[i]['zsm_question.update_id']] : ''}</span>
\t                            </td>
\t                              <td class=\"center department\" style=\"display:\${styles[7]}\" data-num = \"7\">
\t                                <span class=\"lbl \">\${cs.getNowTime(data[i]['zsm_question.update_at'],true)}</span>
\t                            </td>
\t                        </tr>`

\t\t\t\t);
\t\t\t}
\t\t\t//将数据插入tbody中
\t\t\t\$('#dataList').html(list.join(''));

\t\t\t\$('.del').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\tlayer.confirm('确认删除问题吗？', function(index) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_knowledge/question_del',
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tid: id,
\t\t\t\t\t\t\t\tis_del: 1
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt(\"删除成功！\");
\t\t\t\t\t\t\t\tshowPage();
\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t}

\t\t\t\t\t\t})
\t\t\t\t\t});
\t\t\t\t})

\t\t\t})

\t\t\t\$('.edit').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tshowMark(\"#template\");
\t\t\t\t\$('#showBox .title').text('编辑问题');
\t\t\t\tvar option = '';

\t\t\t\tfor(var i in cartGroup) {
\t\t\t\t\toption += '<option value=\"' + cartGroup[i]['id'] + '\">' + cartGroup[i]['name'] + '</option>'
\t\t\t\t}

\t\t\t\t\$('#templateCon select[addfield=cate_id]').html(option);
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_knowledge/question_info',
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tdata: {
\t\t\t\t\t\tid: id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\tfor(var key in data) {
\t\t\t\t\t\t\t\$('#templateBox ').find('input').each(function() {
\t\t\t\t\t\t\t\tif(key.replace(/zsm_category./, '') == \$(this).attr('addfield')) {
\t\t\t\t\t\t\t\t\t\$(this).attr('addfield') = \$(this).val(data[key]);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#templateCon [addfield=\"answer\"]').val(data['zsm_question.answer']);
\t\t\t\t\t\t\$('#templateCon [addfield=\"question\"]').val(data['zsm_question.question']);
\t\t\t\t\t\t\$('#templateCon [addfield=\"status\"]').find('option[value=\"' + data['zsm_question.status'] + '\"]').attr('selected', true);

\t\t\t\t\t\t\$('#templateBox #reson').find('option[value=' + data['zsm_question.cate_id'] + ']').attr(\"selected\", true);
\t\t\t\t\t\t\$('#templateBox #status').find('option[value=' + data['zsm_question.status'] + ']').attr(\"selected\", true);
\t\t\t\t\t\tadd_edit_quer(id);
\t\t\t\t\t}
\t\t\t\t})

\t\t\t})

 

            \$('.inFo').click(function() {
                var id = \$(this).parents('tr').attr('data-id');
                showMark(\"#templateDtl\");
                \$('#showBox .title').text('详情');
                ykp.doAjax({
                    url: '/api/api_knowledge/question_info',
                    method: \"post\",
                    data: {
                        id: id
                    },
                    success: function(res) {
                        var data = res.data;
                        var sStatus=[\"未解决\",\"解决中\",\"已解决\"];
                        for(var key in data) {
                            \$('#templateBox').find('input').each(function() {
                                if(\$(this).attr(\"addfield\") == key.replace(/zsm_question./, '')){
                                    if(\$(this).attr(\"addfield\") == \"create_at\" || \$(this).attr(\"addfield\") == \"update_at\"){
                                        \$(this).val(cs.getNowTime(data[key],true));
                                    }else if(\$(this).attr(\"addfield\") == \"status\"){
                                        \$(this).val(sStatus[data[key]]);
\t\t\t\t\t\t\t\t\t}else if(\$(this).attr(\"addfield\") == \"create_id\" || \$(this).attr(\"addfield\") == \"update_id\"){
\t\t\t\t\t\t\t\t\t\t\$(this).val(employees[data[key]] || '');
\t\t\t\t\t\t\t\t\t}else {
                                        \$(this).val(data[key]);
\t\t\t\t\t\t\t\t\t}
                               \t}

                              /*  console.log(key.replace(/zsm_question./, ''));
                                if(key.replace(/zsm_category./, '') == \$(this).attr('addfield')) {
                                    console.log(key);

                                    //\$(this).val(data[key]);
                                }*/
                            })
                        }
                    }
                })

            })

\t\t}

\t\t\$('#changePageNum').change(function() {
\t\t\tpagesize = \$(this).val();
\t\t\tykp.setCookie('page_size',pagesize);
\t\t\tshowPage();
\t\t})

\t\t//全选
\t\tcheckAll();

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
        return "admin/task/knowledge.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 340,  359 => 339,  19 => 1,);
    }
}
/* <style>*/
/* 	.tree-open {*/
/* 		list-style: none;*/
/* 		border-bottom: 1px solid #eee;*/
/* 		padding-top: 2px;*/
/* 		cursor: pointer;*/
/* 	}*/
/* 	*/
/* 	.btn-group:first-child {*/
/* 		width: 100%;*/
/* 	}*/
/* 	*/
/* 	.cur {*/
/* 		text-align: center;*/
/* 	}*/
/* 	*/
/* 	.tree-open:last-child {*/
/* 		border: none;*/
/* 	}*/
/* 	*/
/* 	.tree .tree-item a:hover {*/
/* 		font-weight: normal;*/
/* 	}*/
/* 	*/
/* 	.tree .tree-item a:focus {*/
/* 		color: #337ab7;*/
/* 	}*/
/* 	*/
/* 	._item i {*/
/* 		cursor: pointer;*/
/* 	}*/
/* 	*/
/* 	.tree:before {*/
/* 		content: none;*/
/* 	}*/
/* 	*/
/* 	li._item {*/
/* 		position: relative;*/
/* 	}*/
/* 	*/
/* 	li._item:before {*/
/* 		display: inline-block;*/
/* 		content: "";*/
/* 		position: absolute;*/
/* 		top: 20px;*/
/* 		bottom: 18px;*/
/* 		left: 5px;*/
/* 		z-index: 1;*/
/* 		border: 1px dotted #67B2DD;*/
/* 		border-width: 0 0 0 1px;*/
/* 	}*/
/* 	*/
/* 	#knowledge li b {*/
/* 		opacity: 0;*/
/* 	}*/
/* 	/*#knowledge li a {*/
/*     	   display: inline-block;*/
/*     	width: 74px;*/
/*     }*//* */
/* 	*/
/* 	#knowledge li > a :hover b {*/
/* 		opacity: 1;*/
/* 	}*/
/* 	*/
/* 	#knowledge>a,*/
/* 	#knowledge li a {*/
/* 		color: #000;*/
/* 		font-weight: 100;*/
/* 		cursor: pointer;*/
/* 	}*/
/* 	*/
/* 	#knowledge li>ul li a {*/
/* 		display: inline-block;*/
/* 		/*width: 74px;*//* */
/* 	}*/
/* 	*/
/* 	/*#knowledge>a:hover,*//* */
/* 	#knowledge li>ul li:hover b {*/
/* 		opacity: 1;*/
/* 	}*/
/* 	.widget-main{*/
/* 		padding: 0px !important;*/
/* 	}*/
/* #addGroup{*/
/* 	background: #e6ecf2 !important;*/
/* 	border: none;*/
/* }*/
/* #addGroup:hover {*/
/* 	background: #1E9FFF !important;*/
/* 	border: 1px solid #1E9FFF;*/
/* }*/
/* .btns{*/
/* 	color: #000;*/
/* }*/
/* #addGroup:hover .btns{*/
/* 	color: white;*/
/* }*/
/* ._item {*/
/* 	padding-top: 10px;*/
/* }*/
/* </style>*/
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<!-- 		<h3 class="header smaller lighter blue">部门员工</h3> -->*/
/* 		<div class="row padding-20">*/
/* 			<div class="col-xs-12">*/
/* */
/* 				<div class="row" style="margin-top: 20px;" id="topTool">*/
/* 					<!--普通搜索-->*/
/* */
/* 					<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 						<input type="text" pts=0 sear="question" placeholder="问题" style="width:180px;" />*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 						<button type="button" title="搜索" id="search" class="btn btn-info btn-sm">*/
/*                             <i class="fa fa-search"></i>*/
/*                         </button>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 						<button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/* 		                    <i class="fa fa-refresh"></i>*/
/* 		                </button>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left;  margin-right: 5px; ">*/
/* 						<button id="add" title="添加问题" type="button" style="border-color: #1E9FFF !important;background: #1E9FFF !important;" class="btn  addBtn btn-info btn-sm">*/
/* 							<i class="fa fa-plus"></i>*/
/*                         </button>*/
/* 					</div>*/
/* 					<!--<div class="col-sx-4" style=" float: left;  margin-right: 5px; ">-->*/
/* 						<!--<button id="addGroup" title="添加分组" type="button" style="border-color: #1E9FFF !important;background: #1E9FFF !important;" class="btn  addBtn btn-info btn-sm">-->*/
/* 							<!--<i class="fa fa-plus"></i>-->*/
/*                         <!--</button>-->*/
/* 					<!--</div>-->*/
/* 					<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 						<button id="heightsearch" title="高级搜索" type="button" class="btn btn-info btn-sm" style="background-color:#00c0ef !important;">*/
/* 	                            <i class="fa fa-filter"></i>*/
/* 	                        </button>*/
/* 					</div>*/
/* 					<div id="heightsearch1" class="col-sx-12" style="position: absolute;margin-top: 65px; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;">*/
/* 						<div class="row" id="SearchCon">*/
/* */
/* 						</div>*/
/* */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="row">*/
/* 					<div class="col-sm-3" style="border:1px solid #ddd;padding:0;width: 16.666%;">*/
/* 						<div class="widget-box widget-color-green2" style="margin-top:0;">*/
/* 							<div class="widget-header">*/
/* 								<h4 class="widget-title lighter smaller" style="color: cornflowerblue;">*/
/*                                    			 知识库分组*/
/*                                 </h4>*/
/* 								<div class="col-sx-4" style=" float: right;  margin-right: 5px; ">*/
/* 									<button id="addGroup" title="添加分组" type="button" style=" margin-top: 5px;" class="btn  addBtn btn-info btn-sm">*/
/* 										<i class="fa fa-plus btns"></i>*/
/* 									</button>*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 							<div class="widget-body">*/
/* 								<div class="widget-main padding-20">*/
/* 									<ul style="list-style-type:none;" class="tree" role="group" id="knowledge">*/
/* */
/* 									</ul>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="col-sm-9" style="width: 83.334%;">*/
/* 						<div class="custom_table">*/
/* 							<table id="dynamic-table" style="margin-bottom:0px;">*/
/* 								<thead>*/
/* 									<tr class="thColor">*/
/* 										<th class=" center">操作</th>*/
/* 										<th class="center thColor name" data-num="1">问题</th>*/
/* 										<th class="center thColor name" data-num="2">答案</th>*/
/* 										<th class="center thColor name" data-num="3">解决状态</th>*/
/* 										<th class="center thColor name" data-num="4">创建人</th>*/
/* 										<th class="center thColor name" data-num="5">创建时间</th>*/
/* 										<th class=" center department" data-num="6">编辑人</th>*/
/* 										<th class="center cardNum" data-num="7">编辑时间</th>*/
/* */
/* 									</tr>*/
/* 								</thead>*/
/* 								<tbody id="dataList">*/
/* */
/* 								</tbody>*/
/* */
/* 							</table>*/
/* */
/* 						</div>*/
/* 						<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 							<div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
/* 							<div id="pageBar" class="pagination"></div>*/
/* 							<div align="right" style="float: right; margin-right: 15px;  width: 10%;">*/
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
/* */
/* 					<div class="row" id="template" style="display:none;">*/
/* 						<div class="widget-box">*/
/* 							<div class="row">*/
/* 								<div class="col-xs-12">*/
/* 									<form class="item_form" role="form" id="">*/
/* 										<div class="form-group">*/
/* 											<label style="width: 100px;"> 分组： </label>*/
/* 											<select id="reson" addfield="cate_id">*/
/* 												<option value="">请选择分组</option>*/
/* 											</select>*/
/* 											<label style="width: 100px;"> 状态： </label>*/
/* 											<select id="status" addfield="status">*/
/* 												<option value="0">未解决</option>*/
/* 												<option value="1">解决中</option>*/
/* 												<option value="2">已解决</option>*/
/* 											</select>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label style="width: 100px;"> 问题： </label>*/
/* 											<input type="text" class="in_num required" value="" addfield="question" />*/
/* 											<label style="width: 100px;"> 答案： </label>*/
/* 											<input type="text" class="in_num required" value="" addfield="answer" />*/
/* 										</div>*/
/* 									</form>*/
/* 								</div>*/
/* 								<!-- /.col -->*/
/* 								<!--保存按钮-->*/
/* 								<div class=" padding-4 clearfix">*/
/* 									<div class="btn-group pull-right">*/
/* 										<div class="cur">*/
/* 											<button class="btn btn-info" id="add">*/
/*                                                 <i class="fa fa-check" aria-hidden="true"></i>*/
/*                                                 保存*/
/*                                             </button>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="row" id="template2" style="display:none;">*/
/* 						<div class="widget-box">*/
/* */
/* 							<div class="row">*/
/* 								<div class="col-xs-12">*/
/* 									<form class="item_form" role="form" id="">*/
/* 										<div class="form-group">*/
/* 											<label style="width: 100px;"> 上级分组： </label>*/
/* 											<select id="depart" affied="parent">*/
/* 												<option value="0">请选择分组</option>*/
/* 											</select>*/
/* 											<label style="width: 100px;"> 分组名称： </label>*/
/* 											<input type="text" class="in_num required" value="" affied="name" />*/
/* 										</div>*/
/* 									</form>*/
/* 								</div>*/
/* 								<!-- /.col -->*/
/* 								<!--保存按钮-->*/
/* 								<div class=" padding-4 clearfix">*/
/* 									<div class="btn-group pull-right">*/
/* 										<div class="cur">*/
/* 											<button class="btn btn-info" id="add">*/
/*                                                 <i class="fa fa-check" aria-hidden="true"></i>*/
/*                                                 保存*/
/*                                             </button>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="row" id="templateDtl" style="display:none;">*/
/* 						<div class="widget-box">*/
/* 							<div class="row">*/
/* 								<div class="col-xs-12">*/
/* 									<form class="item_form" role="form">*/
/* 										<div class="form-group">*/
/* 											<label style="width: 100px;"> 问题： </label>*/
/* 											<input type="text" disabled class="in_num required" value="" addfield="question" />*/
/* 											<label style="width: 100px;"> 答案： </label>*/
/* 											<input type="text" disabled class="in_num required" value="" addfield="answer" />*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label style="width: 100px;"> 解决状态： </label>*/
/* 											<input type="text" disabled class="in_num required" value="" addfield="status" />*/
/* 											<label style="width: 100px;"> 创建人： </label>*/
/* 											<input type="text" disabled class="in_num required" value="" addfield="create_id" />*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label style="width: 100px;"> 编辑人： </label>*/
/* 											<input type="text" disabled class="in_num required" value="" addfield="update_id" />*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label style="width: 100px;"> 创建时间： </label>*/
/* 											<input type="text" disabled class="in_num required" value="" addfield="create_at" />*/
/* 											<label style="width: 100px;"> 编辑时间： </label>*/
/* 											<input type="text" disabled class="in_num required" value="" addfield="update_at" />*/
/* 										</div>*/
/* 									</form>*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="label_popup" id="label_popup" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 						<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 					    box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 							<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 								<span style="display: inline-block;">编辑分组</span>*/
/* 								<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 							</div>*/
/* 							<div style="padding: 10px 50px;">*/
/* 								<input type="text" width="200px" style="margin: auto;" id="labelName" />*/
/* 								<!--<hr>-->*/
/* 							</div>*/
/* 							<div style="padding:15px;text-align:right;">*/
/* 								<button class="close_label">关闭</button>*/
/* 								<button class="hold">保存</button>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% include 'admin/mark.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script>*/
/* 	jQuery(function($) {*/
/* 		var pagesize = 10;*/
/* 		var cartGroup = [];*/
/* 		var employees = {};*/
/* 		var sort_role = "";*/
/* 		var order = "";*/
/* 		var filter = "";*/
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
/* 				for(var i in data) {*/
/* 					employees[data[i]['id']] = data[i]['name'];*/
/* 				}*/
/* 			}*/
/* 		});*/
/* */
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_knowledge/question_list',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: "zsm_question.is_del = 0",*/
/* 				page_size: pagesize*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '.pageBar'*/
/* 			},*/
/* 			contentId: "#datalist", //默认排序*/
/* 			initOrder: "", //初始化sort*/
/* 			defaultOrder: "",*/
/* 			params: [{*/
/* 				id: "#dynamic-table",*/
/* 				field: ["", "zsm_question.question", "zsm_question.answer", "zsm_question.status", "zsm_question.create_id", "zsm_question.create_at", "zsm_question.update_id", "zsm_question.update_at"]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* */
/* 		// 展开 | 关闭部门管理下面的选项*/
/* 		function spread() {*/
/* 			$('.tree .control').click(function() {*/
/* 				if($(this).hasClass('_close')) {*/
/* 					$(this).removeClass('_close').removeClass('fa-minus-square').addClass('fa-plus-square').next().next().hide();*/
/* 					return;*/
/* 				} else {*/
/* 					$(this).parent().siblings().find('._close').removeClass('_close').removeClass('fa-minus-square').addClass('fa-plus-square').next().next().hide();*/
/* 					$(this).addClass('_close').addClass('fa-minus-square').removeClass('fa-plus-square').next().next().show();*/
/* 				}*/
/* */
/* 			});*/
/* 		}*/
/* */
/* 		getKnow();*/
/* */
/* 		function getKnow() {*/
/* 			ykp.doAjax({*/
/* 				url: "/api/api_knowledge/cate_list",*/
/* 				method: "get",*/
/* 				data: {*/
/* 					limit: 999,*/
/* 				},*/
/* 				success: function(res) {*/
/* 					if(res.data.item == "") {*/
/* 						ykp.prompt("暂无知识");*/
/* 						return false;*/
/* 					}*/
/* 					addKnowGroup(res);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		function addKnowGroup(res) {*/
/* 			var content = "";*/
/* 			var data = res.data;*/
/*             var department = [];*/
/* 			cartGroup = [];*/
/* 			for(var i in data) {*/
/* 				console.log(data[i])*/
/* 				if(data[i]['parent'] == 0) {*/
/* 					department.push({*/
/* 						name: data[i]['name'],*/
/*                         count: data[i]['count'],*/
/* 						id: data[i]['id'],*/
/* 						parent: data[i]['parent'],*/
/* 						childen: data[i]['_child'] || ""*/
/* 					});*/
/* 				}*/
/* 			}*/
/*             console.log(department);*/
/* 			/*for(var i in department){*/
/*                 cartGroup.push({*/
/*                     id: department[i].id,*/
/*                     name: department[i].name*/
/*                 })*/
/* 			}*//* */
/*             var child;*/
/* 			for(var i in department) {*/
/* 				child = '';*/
/*               /*  cartGroup.push({*/
/*                     id: department[i].id,*/
/*                     name: department[i].name*/
/*                 })*//* */
/* 				if(department[i].childen != "" && department[i].childen.length == 0) {*/
/* 					content += `*/
/* 								<li style="padding:4px 0 4px 0" class="_item">*/
/* 									<i class="fa fa-plus-square control" aria-hidden="true"></i>*/
/* 									<a data-id="${department[i].id}" class="parent"><span>${department[i].name}</span></a>*/
/* 								</li>`;*/
/* 				} else {*/
/* 					for(var j in department[i].childen) {*/
/* 						child += `<li data-id="${department[i].childen[j].id}" data-name='${department[i].childen[j].name}'  data-parent="${department[i].childen[j].parent}" style="padding:4px 0 4px 20px" class="tree-item" role="treeitem">*/
/* 									<a data-id="${department[i].childen[j].id}" data-parent="${department[i].childen[j].parent}" class="childen" href="#" style="text-decoration:none;"><span class="relieves">${department[i].childen[j].name}<span></a> */
/* 									<span class="relieves">（${department[i].childen[j].count}）</span>*/
/* 									<b style="display:inline-block;float: right;"><i style="color:red" class="ace-icon fa fa-trash-o gdel gdel1" ></i>&nbsp;<i class="ace-icon fa fa-pencil align-top gedit" ></i></b>*/
/* 								</li>`;*/
/* 						cartGroup.push({*/
/* 							id: department[i].childen[j].id,*/
/* 							name: department[i].childen[j].name*/
/* 						})*/
/* 					}*/
/* 					content += `*/
/* 							<li style="padding:4px 0 4px 0" class="_item showchild">*/
/* 								<i class="fa fa-plus-square control" aria-hidden="true"></i>*/
/* 								<a data-id="${department[i].id}" data-parent="${department[i].parent}"><span span class="relieves">${department[i].name}<span>   <b style="display:inline-block;float: right;"><i style="color:red" length="${department[i].childen.length}" class="ace-icon fa fa-trash-o gdel gdel2" ></i>&nbsp;<i class="ace-icon fa fa-pencil align-top gedit" ></i></b></a>*/
/* */
/* 								<ul style="list-style-type:none;display:none;">*/
/* 									${child}*/
/* 								</ul>*/
/* 								*/
/* 							</li>`;*/
/* 				}*/
/* 			}*/
/* */
/* 			$('#knowledge').html(content);*/
/* */
/* 			spread();*/
/* */
/* 			//删除分组*/
/* 			$('.gdel').click(function() {*/
/* 				if($(this).hasClass('gdel1')) {*/
/* 			//		var id = $(this).parent().prev().attr('data-id');*/
/* 		     	var id =$('.childen').attr('data-id')*/
/* 					console.log(id);*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_knowledge/question_list',*/
/* 						method: 'post',*/
/* 						data: {*/
/* 							page_size: 999,*/
/* 							cate_id: id,*/
/* 							filter: 'zsm_question.is_del = 0'*/
/* 						},*/
/* 						success: function(res) {*/
/* 							var data = res.data.items;*/
/* 							layui.use('layer', function() {*/
/* 								var layer = layui.layer;*/
/* 								layer.confirm('确认删除分组吗？', function(index) {*/
/* 									if(data.length > 0) {*/
/* 										ykp.prompt('当前分组中有问题，不能删除！');*/
/* 										return;*/
/* 									}*/
/* 									ykp.doAjax({*/
/* 										url: '/api/api_knowledge/cate_del',*/
/* 										method: 'post',*/
/* 										data: {*/
/* 											id: id,*/
/* 											is_del: 1*/
/* 										},*/
/* 										success: function(res) {*/
/* 											ykp.prompt("删除成功");*/
/* 											layer.close(index);*/
/* 											getKnow();*/
/* 											showPage();*/
/* 											layer.closeAll();*/
/* 										}*/
/* 									})*/
/* */
/* 								});*/
/* 							})*/
/* */
/* 						}*/
/* 					});*/
/* 				}*/
/* */
/* 				if($(this).hasClass('gdel2')) {*/
/* 					var id = $(this).parents('a').attr('data-id');*/
/* 					layui.use('layer', function() {*/
/* 						var layer = layui.layer;*/
/* 						layer.confirm('确认删除分组吗？', function(index) {*/
/* 							if($(this).attr('length') > 0) {*/
/* 								ykp.prompt('当前分组中有分组，不能删除！');*/
/* 								return;*/
/* 							}*/
/* 							ykp.doAjax({*/
/* 								url: '/api/api_knowledge/cate_del',*/
/* 								method: 'post',*/
/* 								data: {*/
/* 									id: id,*/
/* 									is_del: 1*/
/* 								},*/
/* 								success: function(res) {*/
/* 									ykp.prompt("删除成功");*/
/* 									getKnow();*/
/* 									showPage();*/
/* 									layer.closeAll();*/
/* 								}*/
/* 							})*/
/* */
/* 						});*/
/* 					})*/
/* */
/* 				}*/
/* 			})*/
/* */
/* 			//编辑分组*/
/* 			$('.gedit').unbind('click').click(function() {*/
/* */
/* 				//修改一级分组时*/
/* 				if($(this).parents('a').attr('data-parent') == 0) {*/
/* 					var id = $(this).parents('a').attr('data-id');*/
/* 					$('#label_popup').show();*/
/* 					$('#label_popup input').val($(this).parents('a').find('span').eq(0).text().trim());*/
/* */
/* 					$('#label_popup .hold').unbind('click').click(function() {*/
/* 						var name = $('#label_popup').find('input').val();*/
/* 						if(name == '') {*/
/* 							ykp.prompt('名称不能为空！');*/
/* 							return false;*/
/* 						} else {*/
/* 							add_edit1(id, name);*/
/* 						}*/
/* 						$('.close_label').parents('.label_popup').fadeOut();*/
/* 					})*/
/* 					cs.closePop();*/
/* 				} else {*/
/* 					var id = $(this).parents('li').attr('data-id');*/
/* 					//修改二级分组时*/
/* 					showMark('#template2');*/
/* 					$('#templateCon #editTitile').text('编辑分组');*/
/* 					var parent = $(this).parents('li').attr('data-parent');*/
/* 					getParentPart(parent);*/
/* 					$('#templateCon').find('input').val($(this).parents('li').attr('data-name'));*/
/* */
/* 					add_edit(id)*/
/* 				}*/
/* 			})*/
/* */
/* 			function add_edit1(id, name, parent) {*/
/* 				ykp.doAjax({*/
/* 					url: "/api/api_knowledge/cate_add_edit",*/
/* 					data: {*/
/* 						name: name,*/
/* 						id: id,*/
/* 						parent: parent || 0*/
/* 					},*/
/* 					success: function(res) {*/
/* 						ykp.prompt('编辑成功！');*/
/* 						getKnow();*/
/* 						showPage();*/
/* 					}*/
/* 				})*/
/* 			}*/
/* */
/* 			//点击二级分类显示数据*/
/* 			$('.tree-item a,.showchild a').find('.relieves').click(function() {*/
/* 				var cate_id = $(this).parent().attr('data-id');*/
/* 				//console.log(cate_id)*/
/* 				showPage(cate_id);*/
/* 			})*/
/* 		}*/
/* */
/* 		//添加问题*/
/* 		$('#add').click(function() {*/
/* 			showMark("#template");*/
/* 			$('#showBox .title').text('添加问题');*/
/* 			var option = '';*/
/*             console.log(cartGroup);*/
/*             for(var i in cartGroup) {*/
/* 				option += '<option value="' + cartGroup[i]['id'] + '">' + cartGroup[i]['name'] + '</option>'*/
/* 			}*/
/* */
/* 			$('#templateCon select[addfield=cate_id]').html(option);*/
/* 			add_edit_quer();*/
/* 		})*/
/* */
/* 		function add_edit_quer(id) {*/
/* 			//保存*/
/* 			$('#showBox #add').click(function() {*/
/* 				var data = {};*/
/* 				var status = false;*/
/* 				var val = ''*/
/* 				var length = $('#templateCon .item_form').find('input[addfield]').length;*/
/* 				$('#templateCon .item_form').find('[addfield]').each(function(i, element) {*/
/* 					if($(this).val() == "" && $(this).attr('addfield') != 'answer') {*/
/* 						ykp.prompt($(this).prev().text().replace(/：/, '') + "不能为空！");*/
/* 						status = false;*/
/* 						return false;*/
/* 					} else {*/
/* 						//console.log($(this).val())*/
/* 						status = true;*/
/* 						data[$(this).attr('addfield')] = $(this).val();*/
/* 					}*/
/* */
/* 				});*/
/* */
/* 				if(id) {*/
/* 					data.id = id;*/
/* 				}*/
/* 				if(status) {*/
/* 					ykp.doAjax({*/
/* 						url: "/api/api_knowledge/question_add_edit",*/
/* 						method: "post",*/
/* 						data: data,*/
/* 						success: function(res) {*/
/* 							if(res.code == 200) {*/
/* 								ykp.prompt("添加成功！");*/
/* 								//关闭弹出层*/
/* 								$('.in').removeClass('modal-backdrop');*/
/* 								$('#showBox').addClass('ishide');*/
/* 								showPage();*/
/* 							}*/
/* 						}*/
/* 					})*/
/* 				}*/
/* */
/* 			});*/
/* 		}*/
/* */
/* 		//添加分组*/
/* 		$('#addGroup').click(function() {*/
/* 			showMark('#template2');*/
/* 			$('#showBox .title').text('添加分组');*/
/* 			getParentPart();*/
/* */
/* 			add_edit();*/
/* 		})*/
/* */
/* 		//添加编辑二级分组*/
/* 		function add_edit(id) {*/
/* 			$('#templateBox #add').unbind('click').click(function() {*/
/* 				var data = {},*/
/* 					status = false;*/
/* 				$('#templateBox').find('input,select').each(function(i) {*/
/* */
/* 					if(i != 0) {*/
/* 						if($(this).val() != '') {*/
/* */
/* 							data[$(this).attr('affied')] = $(this).val();*/
/* 							status = true;*/
/* 						} else {*/
/* 							ykp.prompt('输入框不能为空 ');*/
/* 							return false*/
/* 						}*/
/* 					} else {*/
/* 						if($(this).val() != '') {*/
/* 							data[$(this).attr('affied')] = $(this).val();*/
/* 						}*/
/* 					}*/
/* 				})*/
/* 				if(id) {*/
/* 					data.id = id*/
/* 				}*/
/* 				if(status) {*/
/* 					ykp.doAjax({*/
/* 						url: "/api/api_knowledge/cate_add_edit",*/
/* 						method: "post",*/
/* 						data: data,*/
/* 						success: function(res) {*/
/* 							ykp.prompt("添加成功!");*/
/* 							getKnow();*/
/* 							showPage();*/
/* 							cs.close();*/
/* 						}*/
/* 					})*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//获取上级部门*/
/* 		function getParentPart(parent) {*/
/* 			ykp.doAjax({*/
/* 				url: "/api/api_knowledge/cate_list",*/
/* 				method: "get",*/
/* 				data: {*/
/* 					limit: 999,*/
/* 					filter: 'zsm_category.is_del = 0 and zsm_category.parent = 0'*/
/* 				},*/
/* 				success: function(res) {*/
/* 					if(res.data.item == "") {*/
/* 						ykp.prompt("暂无分组");*/
/* 						return false;*/
/* 					} else {*/
/* 						var data = res.data;*/
/* 						var content = [];*/
/* 						for(var i in data) {*/
/* 							content.push('<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>');*/
/* 						}*/
/* 						$('#templateBox #depart').append(content.join(''));*/
/* 						if(parent) {*/
/* 							$('#templateCon select option[value=' + parent + ']').attr("selected", true);*/
/* 						}*/
/* 					}*/
/* */
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		search();*/
/* */
/* 		function search() {*/
/* 			//搜索*/
/* 			$('#search').click(function() {*/
/* 				if($('input[sear="question"]').val() == "") {*/
/* 					ykp.prompt("搜索条件至少输入一个!");*/
/* 					return false;*/
/* 				} else {*/
/* 					var data = {*/
/* 						filter: "zsm_question.is_del = 0",*/
/* 						page_size: pagesize,*/
/* 						question: $('input[sear="question"]').val()*/
/* 					}*/
/* 					//获取数据*/
/* 					ykp.list({*/
/* 						url: '/api/api_knowledge/question_list',*/
/* 						method: 'post',*/
/* 						data: data,*/
/* 						pageBar: {*/
/* 							id: '#pageBar'*/
/* 						},*/
/* 						loadList: function(res) {*/
/* 							if(res.data.items == "") {*/
/* 								ykp.prompt("暂无数据");*/
/* 								$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d !important;" class="page">暂无数据</div></td></tr>');*/
/* 							} else {*/
/* 								addList(res);*/
/* 							}*/
/* */
/* 						}*/
/* 					})*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		getSearch();*/
/* */
/* 		function getSearch() {*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			var list = [{*/
/* 					name: "问题",*/
/* 					search: "zsm_question.question",*/
/* 					type: "text",*/
/* 				},*/
/* 				{*/
/* 					name: "答案",*/
/* 					search: "zsm_question.answer",*/
/* 					type: "text"*/
/* 				},*/
/* 				{*/
/* 					name: "解决状态",*/
/* 					search: "zsm_question.status",*/
/* 					type: "select",*/
/* 					option: [{*/
/* 						val: "0",*/
/* 						text: "未解决"*/
/* 					}, {*/
/* 						val: "1",*/
/* 						text: "解决中"*/
/* 					}, {*/
/* 						val: "2",*/
/* 						text: "已解决"*/
/* 					}]*/
/* 				},*/
/* 				{*/
/* 					name: "创建人 ",*/
/* 					search: "zsm_question.create_id",*/
/* 					type: "select",*/
/* 					url: "/api/api_employees/f7",*/
/* 					key: "people"*/
/* 				},*/
/* 				{*/
/* 					name: "创建时间",*/
/* 					search: "zsm_question.create_at",*/
/* 					type: "time"*/
/* 				},*/
/* 				{*/
/* 					name: "编辑人",*/
/* 					search: "zsm_question.update_id",*/
/* 					type: "select",*/
/* 					url: "/api/api_employees/f7",*/
/* 					key: "people"*/
/* 				},*/
/* 				{*/
/* 					name: "编辑时间",*/
/* 					search: "zsm_question.update_at",*/
/* 					type: "time"*/
/* 				}*/
/* 			];*/
/* */
/* 			cs.getSearch({*/
/* 				list: list,*/
/* 				el: "#heightsearch",*/
/* 				el1: "#heightsearch1"*/
/* 			}, dohSearch);*/
/* */
/* 			function dohSearch() {*/
/* 				var data = {*/
/* 					url: '/api/api_knowledge/question_list',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						limit: pagesize,*/
/* 						order: order,*/
/* 						filter: filter*/
/* 					}*/
/* 				}*/
/* 				cs.hSearch('.search1', data, 'filter', false, function(res, _filter) {*/
/* 					filter = _filter;*/
/* 					$('.in').removeClass('modal-backdrop');*/
/* 					$("#heightsearch1").slideUp();*/
/* 					$("#heightsearch").removeClass('active').css('z-index', '');*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt('暂无数据！');*/
/* 						}, 1000);*/
/* 						$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					}*/
/* 					addList(res);*/
/* 				})*/
/* 			}*/
/* 		}*/
/* */
/* 		showPage();*/
/* */
/* 		function showPage(cate_id) {*/
/* 			var data = {*/
/* 				filter: "zsm_question.is_del = 0",*/
/* 				page_size: pagesize*/
/* 			}*/
/* 			if(cate_id) {*/
/* 				data.cate_id = cate_id*/
/* 			}*/
/* 			//获取数据*/
/* 			ykp.list({*/
/* 				url: '/api/api_knowledge/question_list',*/
/* 				method: 'post',*/
/* 				data: data,*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					console.log(res.data.items)*/
/* 					if(res.data.items == "") {*/
/* 						ykp.prompt("暂无数据");*/
/* 						$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d !important;" class="page">暂无数据</div></td></tr>');*/
/* 					} else {*/
/* 						addList(res);*/
/* 					}*/
/* */
/* 				}*/
/* 			})*/
/* */
/* 		}*/
/* */
/* 		$('#flush').click(function() {*/
/* 			$('[pts="0"]').val('');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			filter = '';*/
/* 			showPage();*/
/* 		})*/
/* */
/*         //if($('#topTool').find('#custom').length <= 0) {*/
/*             cs.custorm_check('#dynamic-table', 'tbody', false);*/
/*        // }*/
/* */
/* 		function addList(res) {*/
/* 			var html = '';*/
/* 			var ths = $('.thColor th');*/
/* 			var styles = [];*/
/* 			var data = res.data.items;*/
/* 			var list = [];*/
/* 			var status = ['未解决', '解决中', '已解决'];*/
/*             for(var i = 0; i < ths.length; i++) {*/
/*                 styles.push(ths.eq(i).css('display'));*/
/*             }*/
/*             for(var i in data) {*/
/* 				list.push(*/
/* 					`<tr data-id=${data[i]['zsm_question.id']}>*/
/* 	                            <td class="center ">*/
/* 	                                <label class="pos-rel">*/
/* 	                                	<a> <span style="cursor: pointer" id="" title="详情" class="inFo btOrange"><i class="fa fa-info"></i></span></a>*/
/* 	                                    <a href="#" id="edit${i}" class="edit btBlue"  style="color:#fff !important"> <span class="lbl" title="编辑"><i class="fa fa-pencil-square-o"></i></span></a>*/
/* 	                                    <a href="#" id="del${i}" class="del btRed" style="color:#fff !important" title="删除"><i class="fa fa-trash-o"></i></a>*/
/* 	                                </label>*/
/* 	                            </td>*/
/* 	                            <td class="center name" style="display:${styles[1]}" data-num = "1">*/
/* 	                                <span class="lbl ">${data[i]['zsm_question.question']}</span>*/
/* 	                            </td>*/
/* 	                            <td class="center cardNum" style="display:${styles[2]}" data-num = "2">*/
/* 	                                <span class="lbl  ">${data[i]['zsm_question.answer']}</span>*/
/* 	                            </td>*/
/* 	                            <td class="center department" style="display:${styles[3]}" data-num = "3">*/
/* 	                                <span class="lbl ">${status[data[i]['zsm_question.status']]}</span>*/
/* 	                            </td>*/
/* 	                            <td class="center department" style="display:${styles[4]}" data-num = "4">*/
/* 	                                <span class="lbl ">${employees[data[i]['zsm_question.create_id']]}</span>*/
/* 	                            </td>*/
/* 	                              <td class="center department" style="display:${styles[5]}" data-num = "5">*/
/* 	                                <span class="lbl ">${cs.getNowTime(data[i]['zsm_question.create_at'],true)}</span>*/
/* 	                            </td>*/
/* 	                              <td class="center department" style="display:${styles[6]}" data-num = "6">*/
/* 	                                <span class="lbl ">${data[i]['zsm_question.update_id'] != '0' ? employees[data[i]['zsm_question.update_id']] : ''}</span>*/
/* 	                            </td>*/
/* 	                              <td class="center department" style="display:${styles[7]}" data-num = "7">*/
/* 	                                <span class="lbl ">${cs.getNowTime(data[i]['zsm_question.update_at'],true)}</span>*/
/* 	                            </td>*/
/* 	                        </tr>`*/
/* */
/* 				);*/
/* 			}*/
/* 			//将数据插入tbody中*/
/* 			$('#dataList').html(list.join(''));*/
/* */
/* 			$('.del').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				layui.use('layer', function() {*/
/* 					var layer = layui.layer;*/
/* 					layer.confirm('确认删除问题吗？', function(index) {*/
/* 						ykp.doAjax({*/
/* 							url: '/api/api_knowledge/question_del',*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								id: id,*/
/* 								is_del: 1*/
/* 							},*/
/* 							success: function(res) {*/
/* 								ykp.prompt("删除成功！");*/
/* 								showPage();*/
/* 								layer.closeAll();*/
/* 							}*/
/* */
/* 						})*/
/* 					});*/
/* 				})*/
/* */
/* 			})*/
/* */
/* 			$('.edit').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				showMark("#template");*/
/* 				$('#showBox .title').text('编辑问题');*/
/* 				var option = '';*/
/* */
/* 				for(var i in cartGroup) {*/
/* 					option += '<option value="' + cartGroup[i]['id'] + '">' + cartGroup[i]['name'] + '</option>'*/
/* 				}*/
/* */
/* 				$('#templateCon select[addfield=cate_id]').html(option);*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_knowledge/question_info',*/
/* 					method: "post",*/
/* 					data: {*/
/* 						id: id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						for(var key in data) {*/
/* 							$('#templateBox ').find('input').each(function() {*/
/* 								if(key.replace(/zsm_category./, '') == $(this).attr('addfield')) {*/
/* 									$(this).attr('addfield') = $(this).val(data[key]);*/
/* 								}*/
/* 							})*/
/* 						}*/
/* 						$('#templateCon [addfield="answer"]').val(data['zsm_question.answer']);*/
/* 						$('#templateCon [addfield="question"]').val(data['zsm_question.question']);*/
/* 						$('#templateCon [addfield="status"]').find('option[value="' + data['zsm_question.status'] + '"]').attr('selected', true);*/
/* */
/* 						$('#templateBox #reson').find('option[value=' + data['zsm_question.cate_id'] + ']').attr("selected", true);*/
/* 						$('#templateBox #status').find('option[value=' + data['zsm_question.status'] + ']').attr("selected", true);*/
/* 						add_edit_quer(id);*/
/* 					}*/
/* 				})*/
/* */
/* 			})*/
/* */
/*  */
/* */
/*             $('.inFo').click(function() {*/
/*                 var id = $(this).parents('tr').attr('data-id');*/
/*                 showMark("#templateDtl");*/
/*                 $('#showBox .title').text('详情');*/
/*                 ykp.doAjax({*/
/*                     url: '/api/api_knowledge/question_info',*/
/*                     method: "post",*/
/*                     data: {*/
/*                         id: id*/
/*                     },*/
/*                     success: function(res) {*/
/*                         var data = res.data;*/
/*                         var sStatus=["未解决","解决中","已解决"];*/
/*                         for(var key in data) {*/
/*                             $('#templateBox').find('input').each(function() {*/
/*                                 if($(this).attr("addfield") == key.replace(/zsm_question./, '')){*/
/*                                     if($(this).attr("addfield") == "create_at" || $(this).attr("addfield") == "update_at"){*/
/*                                         $(this).val(cs.getNowTime(data[key],true));*/
/*                                     }else if($(this).attr("addfield") == "status"){*/
/*                                         $(this).val(sStatus[data[key]]);*/
/* 									}else if($(this).attr("addfield") == "create_id" || $(this).attr("addfield") == "update_id"){*/
/* 										$(this).val(employees[data[key]] || '');*/
/* 									}else {*/
/*                                         $(this).val(data[key]);*/
/* 									}*/
/*                                	}*/
/* */
/*                               /*  console.log(key.replace(/zsm_question./, ''));*/
/*                                 if(key.replace(/zsm_category./, '') == $(this).attr('addfield')) {*/
/*                                     console.log(key);*/
/* */
/*                                     //$(this).val(data[key]);*/
/*                                 }*//* */
/*                             })*/
/*                         }*/
/*                     }*/
/*                 })*/
/* */
/*             })*/
/* */
/* 		}*/
/* */
/* 		$('#changePageNum').change(function() {*/
/* 			pagesize = $(this).val();*/
/* 			ykp.setCookie('page_size',pagesize);*/
/* 			showPage();*/
/* 		})*/
/* */
/* 		//全选*/
/* 		checkAll();*/
/* */
/* 	});*/
/* */
/* 	function checkAll(status) {*/
/* 		$("tbody input[name='check']").each(function(i, n) {*/
/* 			n.checked = status;*/
/* 		});*/
/* 	}*/
/* </script>*/
