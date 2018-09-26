<?php

/* admin/manage/label.html */
class __TwigTemplate_8a39a733af03016074b4821e9cff9d9a3f394d39d38bf50ba7ae4d094b9478c2 extends Twig_Template
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
\t#knowledge li b {
\t\topacity: 0;
\t}
\t#knowledge li:hover b{
\t\topacity: 1;
\t}
</style>
<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<!-- \t\t<h3 class=\"header smaller lighter blue\">部门员工</h3> -->
\t\t<div class=\"row padding-20\">
\t\t\t<div class=\"col-xs-12\">

\t\t\t\t<div class=\"row\" style=\"margin-top: 20px;\" id=\"topTool\">
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;  margin-right: 5px; \">
\t\t\t\t\t\t<button id=\"add\" type=\"button\" class=\"btn  addBtn btn-info btn-sm\">
\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
                            \t添加标签
                        </button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;  margin-right: 5px; \">
\t\t\t\t\t\t<button id=\"addGroup\" type=\"button\" class=\"btn  addBtn btn-info btn-sm\">
\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
                           \t 添加分组
                        </button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;  margin-right: 5px; \">
\t\t\t\t\t\t<button id=\"pl\" type=\"button\" class=\"btn   addBtn btn-info btn-sm\">
                           \t 批量删除
                        </button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;  margin-right: 5px; \" id=\"delLabelBox\">
\t\t\t\t\t\t<button id=\"delLabel\" type=\"button\" class=\"btn  addBtn btn-info btn-sm\" style=\"display: none;\">
                           \t 确认
                        </button>
                        <button id=\"scalc\" type=\"button\" class=\"btn  addBtn btn-info btn-sm\" style=\"display: none;\">
                           \t 取消
                        </button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-3\" style=\"border:1px solid #ddd;padding:0;\">
\t\t\t\t\t\t<div class=\"widget-box widget-color-green2\" style=\"margin-top:0;\">
\t\t\t\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t\t\t\t<h4 class=\"widget-title lighter smaller\" style=\"color: cornflowerblue;\">
                                   \t标签分组
                                </h4>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t\t<div class=\"widget-main padding-20\">
\t\t\t\t\t\t\t\t\t<ul style=\"list-style-type:none;\" class=\"tree\" role=\"group\" id=\"knowledge\">

\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"labelBtn\">

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\" id=\"popup\" style=\"display:none;\">
\t\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t\t<table class=\"popup_table\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"_project\">标签名称</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<input id=\"labelName\" type=\"text\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"_project\">分组</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<select id=\"cat_group\" style=\"width:180px;\">

\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"_project\" style=\"padding-top:7px;\">标签颜色</td>
\t\t\t\t\t\t\t\t\t<td style=\"color: #fff;\">
\t\t\t\t\t\t\t\t\t\t<label style=\"background-color:#428bca;padding:5px;margin-right:5px;text-align: center; width: 55px;\">
\t\t\t\t\t\t\t\t<input name=\"color\" style=\"margin-right: 2px;\" checked=\"checked\" type=\"radio\"value=\"#428bca\"/>
\t\t\t\t\t\t\t\t<span style=\"position: relative;bottom: 4px;\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<label style=\"background-color:#45B6AF;padding:5px;margin-right:5px;text-align: center;width: 55px;\">
\t\t\t\t\t\t\t\t<input name=\"color\" style=\"margin-right: 2px;\" type=\"radio\" value=\"#45B6AF\" />
\t\t\t\t\t\t\t\t<span style=\"position: relative;bottom: 4px;\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<label style=\"background-color:#89C4F4;padding:5px;margin-right:5px;text-align: center;width: 55px;\">
\t\t\t\t\t\t\t\t<input name=\"color\" style=\"margin-right: 2px;\" type=\"radio\" value=\"#89C4F4\" />
\t\t\t\t\t\t\t\t<span style=\"position: relative;bottom: 4px;\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<label style=\"background-color:#dfba49;padding:5px;margin-right:5px;text-align: center;width: 55px;\">
\t\t\t\t\t\t\t\t<input name=\"color\" style=\"margin-right: 2px;\" type=\"radio\" value=\"#dfba49\" />
\t\t\t\t\t\t\t\t<span style=\"position: relative;bottom: 4px;\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<label style=\"background-color:#c6c6c6;padding:5px;margin-right:5px;text-align: center;width: 55px;\"><input name=\"color\" style=\"margin-right: 2px;\" type=\"radio\" value=\"#c6c6c6\" name=\"color\"/>
\t\t\t\t\t\t\t\t<span style=\"position: relative;bottom: 4px;\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<div class=\" padding-4 clearfix\">
\t\t\t\t\t\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t\t\t\t\t\t<div class=\"cur\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info hold\" id=\"add\">
                                    保存
                                </button>
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

\t\t\t\t\t<div class=\"label_popup\" id=\"label_popup\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t\t\t\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t\t\t\t\t    box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t\t\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t\t\t\t\t<span id=\"label-cart-name\" style=\"display: inline-block;\">添加分组名称</span>
\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t\t\t\t\t<input type=\"text\" width=\"200px\" style=\"margin: auto;\" id=\"labelName\" />
\t\t\t\t\t\t\t\t<!--<hr>-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t\t\t\t\t<button class=\"close_label\">关闭</button>
\t\t\t\t\t\t\t\t<button class=\"hold\">保存</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!--填写标签分组名称-->
\t\t\t\t\t<div class=\"label_popup\" id=\"edit_label\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t\t\t\t\t<div style=\"width:450px;height:300px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t\t\t\t\t    box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t\t\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t\t\t\t\t<span style=\"display: inline-block;\" class=\"label-title\"> 编辑分组名称</span>
\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div style=\"padding: 10px 19px;\">
\t\t\t\t\t\t\t\t<span class=\"_lable-tit\" style=\"padding-left: 10px;\">分组名称</span><input type=\"text\" width=\"200px\" style=\"margin-left: 64px;\" id=\"labelName\" />
\t\t\t\t\t\t\t\t<!--<hr>-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"_noshowitem\" style=\"margin-top: 10px;\">
\t\t\t\t\t\t\t\t<span style=\"margin-left: 30px;\">分&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;组</span>\t
\t\t\t\t\t\t\t\t<select id=\"cat_groups\" style=\"width:180px;margin-left: 64px;\">
\t\t\t\t\t\t\t</select>\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"margin-top: 20px;\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t      <table class=\"_noshowitem\">
\t\t\t\t\t\t\t<tr>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td class=\"_project\" style=\"padding-top:7px;padding-left: 30px;\">标签颜色</td>
\t\t\t\t\t\t\t\t\t<td style=\"color: #fff;\">
\t\t\t\t\t\t\t\t\t\t<label style=\"background-color:#428bca;padding:5px;margin-right:5px;text-align: center; width: 55px;\">
\t\t\t\t\t\t\t\t<input name=\"color\" style=\"margin-right: 2px;\" checked=\"checked\" type=\"radio\" val=\"#428bca\"/>
\t\t\t\t\t\t\t\t<span style=\"position: relative;bottom: 4px;\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<label style=\"background-color:#45B6AF;padding:5px;margin-right:5px;text-align: center;width: 55px;\">
\t\t\t\t\t\t\t\t<input name=\"color\" style=\"margin-right: 2px;\" type=\"radio\" val=\"#45B6AF\"/>
\t\t\t\t\t\t\t\t<span style=\"position: relative;bottom: 4px;\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<label style=\"background-color:#89C4F4;padding:5px;margin-right:5px;text-align: center;width: 55px;\">
\t\t\t\t\t\t\t\t<input name=\"color\" style=\"margin-right: 2px;\" type=\"radio\" val=\"#89C4F4\" />
\t\t\t\t\t\t\t\t<span style=\"position: relative;bottom: 4px;\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<label style=\"background-color:#dfba49;padding:5px;margin-right:5px;text-align: center;width: 55px;\">
\t\t\t\t\t\t\t\t<input name=\"color\" style=\"margin-right: 2px;\" type=\"radio\" val=\"#dfba49\" />
\t\t\t\t\t\t\t\t<span style=\"position: relative;bottom: 4px;\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<label style=\"background-color:#c6c6c6;padding:5px;margin-right:5px;text-align: center;width: 55px;\"><input  style=\"margin-right: 2px;\" type=\"radio\" val=\"#c6c6c6\" name=\"color\"/>
\t\t\t\t\t\t\t\t<span style=\"position: relative;bottom: 4px;\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t\t
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
        // line 280
        $this->loadTemplate("admin/mark.html", "admin/manage/label.html", 280)->display($context);
        // line 281
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script>
\tjQuery(function(\$) {
\t\tvar pagesize = 10;
\t\tvar cartGroup = [];
\t\tvar employees = {};
\t\tvar clickNum = 0;
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
\t\t\t\turl: \"/api/api_label_cat/index\",
\t\t\t\tmethod: \"get\",
\t\t\t\tdata: {
\t\t\t\t\tlimit: 999,
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tif(res.data.item == \"\") {
\t\t\t\t\t\tykp.prompt(\"暂无标签分组\");
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddKnowGroup(res);
\t\t\t\t}
\t\t\t})
\t\t}
\t\tvar cat_group;

\t\tfunction addKnowGroup(res) {

\t\t\tvar content = \"\";
\t\t\tvar data = res.data.items;
\t\t\tvar department = [];
\t\t\tcartGroup = [];
\t\t\tvar catId = '';
\t\t\tcat_group = '';
\t\t\tfor(var i in data) {
\t\t\t\tif(i == 0) {
\t\t\t\t\tcatId = data[i]['cwm_label_cat.id'];
\t\t\t\t}
\t\t\t\tdepartment.push({
\t\t\t\t\tname: data[i]['cwm_label_cat.title'],
\t\t\t\t\tid: data[i]['cwm_label_cat.id'],
\t\t\t\t\tparent: data[i]['parent'],
\t\t\t\t\tchilden: data[i]['_child'] || \"\"
\t\t\t\t});
\t\t\t\tcat_group += '<option value=\"' + data[i]['cwm_label_cat.id'] + '\">' + data[i]['cwm_label_cat.title'] + '</option>';
\t\t\t}
\t\t\tvar child;
\t\t\tfor(var i in department) {
\t\t\t\tchild = '';

\t\t\t\tfor(var j in department[i].childen) {
\t\t\t\t\tchild += `<li style=\"padding:4px 0 4px 20px; cursor: pointer;\" class=\"tree-item\" role=\"treeitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-id=\"\${department[i].childen[j].id}\" data-parent=\"\${department[i].childen[j].parent}\" class=\"childen\" href=\"#\" style=\"text-decoration:none;\"><span>\${department[i].childen[j].name}<span></a>   <spa>（\${department[i].childen[j].count}条数据）</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"display:inline-block;float: right;\"><i style=\"color:red\" class=\"ace-icon fa fa-trash-o gdel gdel1\" ></i>&nbsp;<i class=\"ace-icon fa fa-pencil align-top gedit\" ></i></b>
\t\t\t\t\t\t\t\t\t\t\t\t</li>`;
\t\t\t\t\tcartGroup.push({
\t\t\t\t\t\tid: department[i].childen[j].id,
\t\t\t\t\t\tname: department[i].childen[j].name
\t\t\t\t\t})
\t\t\t\t}

\t\t\t\tcontent += `
\t\t\t\t\t\t<li style=\"padding:4px 0 4px 0;cursor: pointer;\" class=\"_item\">
\t\t\t\t\t\t\t\t<a data-id=\"\${department[i].id}\" class=\"\${i == 0 ? 'red' : \"\"}\" data-parent=\"\${department[i].parent}\"><span  >\${department[i].name}<span>   <b style=\"display:inline-block;float: right;\"><i style=\"color:red\" length=\"\${department[i].childen.length}\" class=\"ace-icon fa fa-trash-o gdel gdel2\" ></i>&nbsp;<i class=\"ace-icon fa fa-pencil align-top gedit\" ></i></b></a>
\t\t\t\t\t\t\t\t<ul style=\"list-style-type:none;display:none;\">
\t\t\t\t\t\t\t\${child}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>`;

\t\t\t}

\t\t\t\$('#knowledge').html(content);
\t\t\tshowPage(catId);
\t\t\tspread();

\t\t\t//点击二级分类显示数据
\t\t\t\$('._item').click(function() {
\t\t\t\tvar cate_id = \$(this).find('a').attr('data-id');
\t\t\t\tvar index = \$(this).index();
\t\t\t\t\$(this).parent().find('._item').each(function(i) {
\t\t\t\t\tif(i != index) {
\t\t\t\t\t\t\$(this).find('a').removeClass('red');
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t\$(this).find('a').attr('class', \"red\");
\t\t\t\tshowPage(cate_id);
\t\t\t})
\t\t\t//删除分组
\t\t\t\$('.gdel').click(function() {
\t\t\t\tif(\$(this).hasClass('gdel1')) {
\t\t\t\t\tvar id = \$(this).parent().prev().attr('data-id');

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
\t\t\t\t\t\t\t\tlayer.confirm('真的删除行么', function(index) {
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
\t\t\t\t\t\t\t\turl: '/api/api_label_cat/del',
\t\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\tid: id
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
\t\t\t\$('.gedit').click(function() {
\t\t\t\tvar id = \$(this).parents('a').attr('data-id');
\t\t\t\tvar name = \$(this).parents('a').text();
\t\t\t\tvar label_popup = \$('#edit_label');
\t\t\t\t\$('#edit_label .label-title').text('编辑分组');
                \$('#edit_label').find('._noshowitem').hide();
                \$('#edit_label').find('._lable-tit').text('分组名称');
\t\t\t\tlabel_popup.find('input').val(name.trim());
\t\t\t\tlabel_popup.fadeIn();
\t\t\t\t\$('#edit_label .hold').unbind('click').click(function() {
\t\t\t\t\tvar title = \$('#edit_label').find('input').val();
\t\t\t\t\tvar data = {
\t\t\t\t\t\t\tid: id,
\t\t\t\t\t\t\ttitle: title
\t\t\t\t\t};
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_label_cat/edit',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: data,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tif(res.code == 200) {
\t\t\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\t\t\tykp.prompt('编辑成功');
\t\t\t\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t\t\t\t\tgetKnow();
\t\t\t\t\t\t\t\tshowPage();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t})
\t\t\t\tcs.closePop();
\t\t\t\t
\t\t\t})

\t\t\t

\t\t}

\t\tfunction addLabelList(res) {
\t\t\tvar content = '';
\t\t\tfor(var i in res) {
\t\t\t\tcontent += `<button style=\"margin-right:10px;border:1px solid #ddd;border:none;border-radius:3px;height: 35px;line-height: 35px;padding: 0px 5px;background:\${res[i]['cwm_label.color']} ; color:#fff;outline:none;\" cat_id = \${res[i]['cwm_label.cat_id']} data-id= \${res[i]['cwm_label.id']}>\${res[i]['cwm_label.title']}</button>`;
\t\t\t}
\t\t\t\$('.labelBtn').html(content);

\t\t\tclick();

\t\t\tfunction click() {
\t\t\t\t\$('.labelBtn button').unbind('click').click(function() {
                    var dataId = \$(this).attr(\"data-id\");
                    \$('#edit_label .label-title').text('编辑标签');
                    \$('#edit_label').find('._lable-tit').text('标签名称');
                    \$('#edit_label').find('._noshowitem').show();
                     \$('#edit_label #cat_groups').html(cat_group ? cat_group : '<option value=\"\">暂无数据</option>');
                    \$('#edit_label .hold').unbind('click').click(function() {
                     
                        var labelName = \$('#edit_label  #labelName').val();
                        var checkColor = \$(\"#edit_label input[type='radio']:checked\").attr('val')
\t\t\t\t\t\tvar cat_id = \$('#edit_label #cat_groups').val();\t
\t\t\t\t       console.log(labelName,checkColor,cat_id)         
                        if(!labelName) {
                            ykp.prompt('标签名称不能为空！');
                            return false;
                        }
                         ykp.doAjax({
                             url: '/api/api_label/edit',
                             method: 'post',
                             data: {
                                 id: dataId,
                                 title: labelName,
                                 color: checkColor,
                                 cat_id: cat_id
                              
                             },
                             success: function(res) {
                                 if(res.code == \"200\") {
                                     var data = res.data;
                                     ykp.prompt('編輯成功')
                                     \$('.close_label').parents('.label_popup').fadeOut();
                                     getKnow();
                                     showPage();

                                 }
                             }
                         })

                    })

\t\t\t\t\tif(\$('#pl').hasClass('pl')) {
                        if(!\$(this).hasClass('label_active')) {
\t\t\t\t\t\t\t\$(this).addClass('label_active');
\t\t\t\t\t\t\t\$(this).append('<i class=\"fa fa-check-circle\" style=\"color:red;padding-left:5px;\" aria-hidden=\"true\"></i>');
\t\t\t\t\t\t\tclickNum ++;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(this).removeClass('label_active');
\t\t\t\t\t\t\t\$(this).find('.fa.fa-check-circle').remove();
\t\t\t\t\t\t\tclickNum--;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(clickNum == 0) {
\t\t\t\t\t\t\t\$(\"#delLabel\").hide();
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\$(\"#delLabel\").show();
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\tif(!cs.getNodes([249], true)) {
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\tvar title = \$(this).text();
\t\t\t\t\t\t\$('#edit_label').attr('data-id', \$(this).attr('data-id'))
\t\t\t\t\t\t\$('#edit_label').find('input').val(title);
\t\t\t\t\t\t\$('#edit_label').fadeIn();
\t\t\t\t\t\tclosePop();
\t\t\t\t\t}
\t\t\t\t})

\t\t\t\t

\t\t\t}

\t\t\t//删除
\t\t\tbatch();

\t\t\tfunction batch() {
\t\t\t\tvar del = \$('#delLabel');
\t\t\t\t\$('#pl').unbind('click').click(function() {
\t\t\t\t\t
\t\t\t\t\t\$(this).addClass('pl');
\t\t\t\t\tdel.show();
\t\t\t\t\t\$(\"#scalc\").show();
\t\t\t\t\tif(!\$(this).hasClass('pl')) {
\t\t\t\t\t\t\$('.labelBtn').find('button').removeClass('label_active');
\t\t\t\t\t\t\$('.labelBtn').find('.fa.fa-check-circle').remove();\t\t\t\t\t\t
\t\t\t\t\t\tdel.hide();
\t\t\t\t\t}

\t\t\t\t\tdel.unbind('click').click(function() {
\t\t\t\t\t\tvar idArr = [];
\t\t\t\t\t\t\$('.labelBtn').find('.label_active').each(function(i) {
\t\t\t\t\t\t\t//删除
\t\t\t\t\t\t\tidArr.push(\$(this).attr('data-id'))
\t\t\t\t\t\t})
\t\t\t\t\t\tif(idArr.length == 0) {
\t\t\t\t\t\t\tykp.prompt(\"请选择标签删除！\");
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t\tvar data = {
\t\t\t\t\t\t\turl: '/api/api_label/del',
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tid: idArr
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_label/del',
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tid: idArr
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tif(res.code == 200) {
\t\t\t\t\t\t\t\t\tconsole.log(res.data);
\t\t\t\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\t\t\t\tykp.prompt('删除标签成功');
\t\t\t\t\t\t\t\t\tgetKnow();
\t\t\t\t\t\t\t\t\tdel.hide();
\t\t\t\t\t\t\t\t\t\$(\"#scalc\").hide();
\t\t\t\t\t\t\t\t\tshowPage();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t//去除批量删除绑定事件
                                    \$('#pl').removeClass('pl');
                                    del.hide();
                                    \$(\"#scalc\").hide();
                                    \$('.labelBtn button').each(function(){
                                        \$(this).find('.fa.fa-check-circle').remove();
                                    })
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t})
\t\t\t\t\t\$('#scalc').unbind('click').click(function(){
\t\t\t\t\t\t\$('#pl').removeClass('pl');
\t\t\t\t\t\tdel.hide();
\t\t\t\t\t\t\$(\"#scalc\").hide();
\t\t\t\t\t\t\$('.labelBtn button').each(function(){
\t\t\t\t\t\t\t\$(this).find('.fa.fa-check-circle').remove();
\t\t\t\t\t\t})
\t\t\t\t\t})
\t\t\t\t\t
\t\t\t\t})
\t\t\t}

\t\t}

\t\t\$('#add').click(function() {
\t\t\tshowMark('#popup');
\t\t\t\$('#showBox .title').text('添加标签');
\t\t\t\$('#templateCon #cat_group').html(cat_group ? cat_group : '<option value=\"\">暂无数据</option>');
\t\t\t\$('#templateBox .hold').unbind('click').click(function() {
\t\t\t\tvar labelName = \$('#templateBox  #labelName').val();
\t\t\t\t//\t\t\t\tvar useLabel = \$('#templateBox  #useLabel').val();
\t\t\t\t//\t\t\t\tvar labelDes = \$('#templateBox  #labelDes').val();
\t\t\t\tvar checkColor = \$(\"#templateBox input[type='radio']:checked\").val();
\t\t\t\tconsole.log(checkColor)
\t\t\t\tvar cat_id = \$('#templateCon #cat_group').val();\t
\t\t\t\tif(!labelName) {
\t\t\t\t\tykp.prompt('标签名称不能为空！');
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_label/add',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tcat_id: cat_id,
\t\t\t\t\t\ttitle: labelName,
\t\t\t\t\t\tcolor: checkColor
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tif(res.code == \"200\") {
\t\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\t\tykp.prompt('添加成功')
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\tgetKnow();
\t\t\t\t\t\t\tshowPage();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t})

\t\t\t})
\t\t});

\t\t//添加分组
\t\t\$('#addGroup').unbind('click').click(function() {
\t\t\t\$('#label_popup').find('input').val('');
\t\t\t\$('#label_popup').fadeIn();
\t\t\t\$('#label_popup .hold').unbind('click').click(function() {
\t\t\t\t\tvar labelName = \$('#label_popup #labelName').val();
\t\t\t\t\tif(!labelName) {
\t\t\t\t\t\tykp.prompt('标签分组名不能为空！');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_label_cat/add',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\ttitle: labelName
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tykp.prompt('添加分组成功');
\t\t\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t\t\t\tgetKnow();
\t\t\t\t\t\t\tshowPage();
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t})
\t\t\tclosePop();
\t\t})

\t\tfunction closePop() {
\t\t\t\$('.close_label').click(function() {
\t\t\t\t\$(this).parents('.label_popup').fadeOut();
\t\t\t})
\t\t}

\t\t

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

\t\tfunction showPage(cate_id) {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_label/index',
\t\t\t\tmethod: 'get',
\t\t\t\tdata: {
\t\t\t\t\tcat_id: cate_id
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tif(res.data.items.length == 0) {
\t\t\t\t\t\tykp.prompt('暂无数据!');
\t\t\t\t\t\t\$('.labelBtn').html('暂无数据');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}

\t\t\t\t\taddLabelList(res.data.items);
\t\t\t\t}
\t\t\t})

\t\t}

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
        return "admin/manage/label.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 281,  300 => 280,  19 => 1,);
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
/* 	#knowledge li b {*/
/* 		opacity: 0;*/
/* 	}*/
/* 	#knowledge li:hover b{*/
/* 		opacity: 1;*/
/* 	}*/
/* </style>*/
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<!-- 		<h3 class="header smaller lighter blue">部门员工</h3> -->*/
/* 		<div class="row padding-20">*/
/* 			<div class="col-xs-12">*/
/* */
/* 				<div class="row" style="margin-top: 20px;" id="topTool">*/
/* 					<div class="col-sx-4" style=" float: left;  margin-right: 5px; ">*/
/* 						<button id="add" type="button" class="btn  addBtn btn-info btn-sm">*/
/* 							<i class="fa fa-plus"></i>*/
/*                             	添加标签*/
/*                         </button>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left;  margin-right: 5px; ">*/
/* 						<button id="addGroup" type="button" class="btn  addBtn btn-info btn-sm">*/
/* 							<i class="fa fa-plus"></i>*/
/*                            	 添加分组*/
/*                         </button>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left;  margin-right: 5px; ">*/
/* 						<button id="pl" type="button" class="btn   addBtn btn-info btn-sm">*/
/*                            	 批量删除*/
/*                         </button>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left;  margin-right: 5px; " id="delLabelBox">*/
/* 						<button id="delLabel" type="button" class="btn  addBtn btn-info btn-sm" style="display: none;">*/
/*                            	 确认*/
/*                         </button>*/
/*                         <button id="scalc" type="button" class="btn  addBtn btn-info btn-sm" style="display: none;">*/
/*                            	 取消*/
/*                         </button>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="row">*/
/* 					<div class="col-sm-3" style="border:1px solid #ddd;padding:0;">*/
/* 						<div class="widget-box widget-color-green2" style="margin-top:0;">*/
/* 							<div class="widget-header">*/
/* 								<h4 class="widget-title lighter smaller" style="color: cornflowerblue;">*/
/*                                    	标签分组*/
/*                                 </h4>*/
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
/* 					<div class="col-sm-9">*/
/* 						<div class="labelBtn">*/
/* */
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="row" id="popup" style="display:none;">*/
/* 						<div style="margin-top:15px;">*/
/* 							<table class="popup_table">*/
/* 								<tr>*/
/* 									<td class="_project">标签名称</td>*/
/* 									<td>*/
/* 										<input id="labelName" type="text" />*/
/* 									</td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td class="_project">分组</td>*/
/* 									<td>*/
/* 										<select id="cat_group" style="width:180px;">*/
/* */
/* 										</select>*/
/* 									</td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td class="_project" style="padding-top:7px;">标签颜色</td>*/
/* 									<td style="color: #fff;">*/
/* 										<label style="background-color:#428bca;padding:5px;margin-right:5px;text-align: center; width: 55px;">*/
/* 								<input name="color" style="margin-right: 2px;" checked="checked" type="radio"value="#428bca"/>*/
/* 								<span style="position: relative;bottom: 4px;"></span>*/
/* 							</label>*/
/* 										<label style="background-color:#45B6AF;padding:5px;margin-right:5px;text-align: center;width: 55px;">*/
/* 								<input name="color" style="margin-right: 2px;" type="radio" value="#45B6AF" />*/
/* 								<span style="position: relative;bottom: 4px;"></span>*/
/* 							</label>*/
/* 										<label style="background-color:#89C4F4;padding:5px;margin-right:5px;text-align: center;width: 55px;">*/
/* 								<input name="color" style="margin-right: 2px;" type="radio" value="#89C4F4" />*/
/* 								<span style="position: relative;bottom: 4px;"></span>*/
/* 							</label>*/
/* 										<label style="background-color:#dfba49;padding:5px;margin-right:5px;text-align: center;width: 55px;">*/
/* 								<input name="color" style="margin-right: 2px;" type="radio" value="#dfba49" />*/
/* 								<span style="position: relative;bottom: 4px;"></span>*/
/* 							</label>*/
/* 										<label style="background-color:#c6c6c6;padding:5px;margin-right:5px;text-align: center;width: 55px;"><input name="color" style="margin-right: 2px;" type="radio" value="#c6c6c6" name="color"/>*/
/* 								<span style="position: relative;bottom: 4px;"></span>*/
/* 							</label>*/
/* 									</td>*/
/* 								</tr>*/
/* 							</table>*/
/* 							<div class=" padding-4 clearfix">*/
/* 								<div class="btn-group pull-right">*/
/* 									<div class="cur">*/
/* 										<button class="btn btn-info hold" id="add">*/
/*                                     保存*/
/*                                 </button>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
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
/* 					<div class="label_popup" id="label_popup" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 						<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 					    box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 							<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 								<span id="label-cart-name" style="display: inline-block;">添加分组名称</span>*/
/* 								<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 							</div>*/
/* 							<div style="padding: 10px 50px;">*/
/* 								<input type="text" width="200px" style="margin: auto;" id="labelName" />*/
/* 								<!--<hr>-->*/
/* 							</div>*/
/* 					*/
/* 							<div style="padding:15px;text-align:right;">*/
/* 								<button class="close_label">关闭</button>*/
/* 								<button class="hold">保存</button>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<!--填写标签分组名称-->*/
/* 					<div class="label_popup" id="edit_label" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 						<div style="width:450px;height:300px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 					    box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 							<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 								<span style="display: inline-block;" class="label-title"> 编辑分组名称</span>*/
/* 								<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 							</div>*/
/* 																									*/
/* 							<div style="padding: 10px 19px;">*/
/* 								<span class="_lable-tit" style="padding-left: 10px;">分组名称</span><input type="text" width="200px" style="margin-left: 64px;" id="labelName" />*/
/* 								<!--<hr>-->*/
/* 							</div>*/
/* 							<div class="_noshowitem" style="margin-top: 10px;">*/
/* 								<span style="margin-left: 30px;">分&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;组</span>	*/
/* 								<select id="cat_groups" style="width:180px;margin-left: 64px;">*/
/* 							</select>		*/
/* 							</div>*/
/* 							<div style="margin-top: 20px;">									*/
/* 					      <table class="_noshowitem">*/
/* 							<tr>									*/
/* 									<td class="_project" style="padding-top:7px;padding-left: 30px;">标签颜色</td>*/
/* 									<td style="color: #fff;">*/
/* 										<label style="background-color:#428bca;padding:5px;margin-right:5px;text-align: center; width: 55px;">*/
/* 								<input name="color" style="margin-right: 2px;" checked="checked" type="radio" val="#428bca"/>*/
/* 								<span style="position: relative;bottom: 4px;"></span>*/
/* 							</label>*/
/* 										<label style="background-color:#45B6AF;padding:5px;margin-right:5px;text-align: center;width: 55px;">*/
/* 								<input name="color" style="margin-right: 2px;" type="radio" val="#45B6AF"/>*/
/* 								<span style="position: relative;bottom: 4px;"></span>*/
/* 							</label>*/
/* 										<label style="background-color:#89C4F4;padding:5px;margin-right:5px;text-align: center;width: 55px;">*/
/* 								<input name="color" style="margin-right: 2px;" type="radio" val="#89C4F4" />*/
/* 								<span style="position: relative;bottom: 4px;"></span>*/
/* 							</label>*/
/* 										<label style="background-color:#dfba49;padding:5px;margin-right:5px;text-align: center;width: 55px;">*/
/* 								<input name="color" style="margin-right: 2px;" type="radio" val="#dfba49" />*/
/* 								<span style="position: relative;bottom: 4px;"></span>*/
/* 							</label>*/
/* 										<label style="background-color:#c6c6c6;padding:5px;margin-right:5px;text-align: center;width: 55px;"><input  style="margin-right: 2px;" type="radio" val="#c6c6c6" name="color"/>*/
/* 								<span style="position: relative;bottom: 4px;"></span>*/
/* 							</label>*/
/* 									</td>*/
/* 								</tr>*/
/* 							</table>*/
/* 					</div>*/
/* 						*/
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
/* 		var clickNum = 0;*/
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
/* 				url: "/api/api_label_cat/index",*/
/* 				method: "get",*/
/* 				data: {*/
/* 					limit: 999,*/
/* 				},*/
/* 				success: function(res) {*/
/* 					if(res.data.item == "") {*/
/* 						ykp.prompt("暂无标签分组");*/
/* 						return false;*/
/* 					}*/
/* 					addKnowGroup(res);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* 		var cat_group;*/
/* */
/* 		function addKnowGroup(res) {*/
/* */
/* 			var content = "";*/
/* 			var data = res.data.items;*/
/* 			var department = [];*/
/* 			cartGroup = [];*/
/* 			var catId = '';*/
/* 			cat_group = '';*/
/* 			for(var i in data) {*/
/* 				if(i == 0) {*/
/* 					catId = data[i]['cwm_label_cat.id'];*/
/* 				}*/
/* 				department.push({*/
/* 					name: data[i]['cwm_label_cat.title'],*/
/* 					id: data[i]['cwm_label_cat.id'],*/
/* 					parent: data[i]['parent'],*/
/* 					childen: data[i]['_child'] || ""*/
/* 				});*/
/* 				cat_group += '<option value="' + data[i]['cwm_label_cat.id'] + '">' + data[i]['cwm_label_cat.title'] + '</option>';*/
/* 			}*/
/* 			var child;*/
/* 			for(var i in department) {*/
/* 				child = '';*/
/* */
/* 				for(var j in department[i].childen) {*/
/* 					child += `<li style="padding:4px 0 4px 20px; cursor: pointer;" class="tree-item" role="treeitem">*/
/* 													<a data-id="${department[i].childen[j].id}" data-parent="${department[i].childen[j].parent}" class="childen" href="#" style="text-decoration:none;"><span>${department[i].childen[j].name}<span></a>   <spa>（${department[i].childen[j].count}条数据）</span>*/
/* 													<b style="display:inline-block;float: right;"><i style="color:red" class="ace-icon fa fa-trash-o gdel gdel1" ></i>&nbsp;<i class="ace-icon fa fa-pencil align-top gedit" ></i></b>*/
/* 												</li>`;*/
/* 					cartGroup.push({*/
/* 						id: department[i].childen[j].id,*/
/* 						name: department[i].childen[j].name*/
/* 					})*/
/* 				}*/
/* */
/* 				content += `*/
/* 						<li style="padding:4px 0 4px 0;cursor: pointer;" class="_item">*/
/* 								<a data-id="${department[i].id}" class="${i == 0 ? 'red' : ""}" data-parent="${department[i].parent}"><span  >${department[i].name}<span>   <b style="display:inline-block;float: right;"><i style="color:red" length="${department[i].childen.length}" class="ace-icon fa fa-trash-o gdel gdel2" ></i>&nbsp;<i class="ace-icon fa fa-pencil align-top gedit" ></i></b></a>*/
/* 								<ul style="list-style-type:none;display:none;">*/
/* 							${child}*/
/* 						</ul>*/
/* 					</li>`;*/
/* */
/* 			}*/
/* */
/* 			$('#knowledge').html(content);*/
/* 			showPage(catId);*/
/* 			spread();*/
/* */
/* 			//点击二级分类显示数据*/
/* 			$('._item').click(function() {*/
/* 				var cate_id = $(this).find('a').attr('data-id');*/
/* 				var index = $(this).index();*/
/* 				$(this).parent().find('._item').each(function(i) {*/
/* 					if(i != index) {*/
/* 						$(this).find('a').removeClass('red');*/
/* 					}*/
/* 				})*/
/* 				$(this).find('a').attr('class', "red");*/
/* 				showPage(cate_id);*/
/* 			})*/
/* 			//删除分组*/
/* 			$('.gdel').click(function() {*/
/* 				if($(this).hasClass('gdel1')) {*/
/* 					var id = $(this).parent().prev().attr('data-id');*/
/* */
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
/* 								layer.confirm('真的删除行么', function(index) {*/
/* 									if(data.length > 0) {*/
/* 										ykp.prompt('当前分组中有问题，不能删除！');*/
/* 										return;*/
/* 									}*/
/* */
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
/* 								url: '/api/api_label_cat/del',*/
/* 								method: 'post',*/
/* 								data: {*/
/* 									id: id*/
/* 								},*/
/* 								success: function(res) {*/
/* 									ykp.prompt("删除成功");*/
/* 									getKnow();*/
/* 									showPage();*/
/* 									layer.closeAll();*/
/* 								}*/
/* 							})*/
/* 						});*/
/* 					})*/
/* 				}*/
/* 			})*/
/* */
/* 			//编辑分组*/
/* 			$('.gedit').click(function() {*/
/* 				var id = $(this).parents('a').attr('data-id');*/
/* 				var name = $(this).parents('a').text();*/
/* 				var label_popup = $('#edit_label');*/
/* 				$('#edit_label .label-title').text('编辑分组');*/
/*                 $('#edit_label').find('._noshowitem').hide();*/
/*                 $('#edit_label').find('._lable-tit').text('分组名称');*/
/* 				label_popup.find('input').val(name.trim());*/
/* 				label_popup.fadeIn();*/
/* 				$('#edit_label .hold').unbind('click').click(function() {*/
/* 					var title = $('#edit_label').find('input').val();*/
/* 					var data = {*/
/* 							id: id,*/
/* 							title: title*/
/* 					};*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_label_cat/edit',*/
/* 						method: 'post',*/
/* 						data: data,*/
/* 						success: function(res) {*/
/* 							if(res.code == 200) {*/
/* 								var data = res.data;*/
/* 								ykp.prompt('编辑成功');*/
/* 								$('.close_label').parents('.label_popup').fadeOut();*/
/* 								getKnow();*/
/* 								showPage();*/
/* 							}*/
/* 						}*/
/* 					})*/
/* 				})*/
/* 				cs.closePop();*/
/* 				*/
/* 			})*/
/* */
/* 			*/
/* */
/* 		}*/
/* */
/* 		function addLabelList(res) {*/
/* 			var content = '';*/
/* 			for(var i in res) {*/
/* 				content += `<button style="margin-right:10px;border:1px solid #ddd;border:none;border-radius:3px;height: 35px;line-height: 35px;padding: 0px 5px;background:${res[i]['cwm_label.color']} ; color:#fff;outline:none;" cat_id = ${res[i]['cwm_label.cat_id']} data-id= ${res[i]['cwm_label.id']}>${res[i]['cwm_label.title']}</button>`;*/
/* 			}*/
/* 			$('.labelBtn').html(content);*/
/* */
/* 			click();*/
/* */
/* 			function click() {*/
/* 				$('.labelBtn button').unbind('click').click(function() {*/
/*                     var dataId = $(this).attr("data-id");*/
/*                     $('#edit_label .label-title').text('编辑标签');*/
/*                     $('#edit_label').find('._lable-tit').text('标签名称');*/
/*                     $('#edit_label').find('._noshowitem').show();*/
/*                      $('#edit_label #cat_groups').html(cat_group ? cat_group : '<option value="">暂无数据</option>');*/
/*                     $('#edit_label .hold').unbind('click').click(function() {*/
/*                      */
/*                         var labelName = $('#edit_label  #labelName').val();*/
/*                         var checkColor = $("#edit_label input[type='radio']:checked").attr('val')*/
/* 						var cat_id = $('#edit_label #cat_groups').val();	*/
/* 				       console.log(labelName,checkColor,cat_id)         */
/*                         if(!labelName) {*/
/*                             ykp.prompt('标签名称不能为空！');*/
/*                             return false;*/
/*                         }*/
/*                          ykp.doAjax({*/
/*                              url: '/api/api_label/edit',*/
/*                              method: 'post',*/
/*                              data: {*/
/*                                  id: dataId,*/
/*                                  title: labelName,*/
/*                                  color: checkColor,*/
/*                                  cat_id: cat_id*/
/*                               */
/*                              },*/
/*                              success: function(res) {*/
/*                                  if(res.code == "200") {*/
/*                                      var data = res.data;*/
/*                                      ykp.prompt('編輯成功')*/
/*                                      $('.close_label').parents('.label_popup').fadeOut();*/
/*                                      getKnow();*/
/*                                      showPage();*/
/* */
/*                                  }*/
/*                              }*/
/*                          })*/
/* */
/*                     })*/
/* */
/* 					if($('#pl').hasClass('pl')) {*/
/*                         if(!$(this).hasClass('label_active')) {*/
/* 							$(this).addClass('label_active');*/
/* 							$(this).append('<i class="fa fa-check-circle" style="color:red;padding-left:5px;" aria-hidden="true"></i>');*/
/* 							clickNum ++;*/
/* 						} else {*/
/* 							$(this).removeClass('label_active');*/
/* 							$(this).find('.fa.fa-check-circle').remove();*/
/* 							clickNum--;*/
/* 						}*/
/* 						if(clickNum == 0) {*/
/* 							$("#delLabel").hide();*/
/* 						}else{*/
/* 							$("#delLabel").show();*/
/* 						}*/
/* 					} else {*/
/* 						if(!cs.getNodes([249], true)) {*/
/* 							return;*/
/* 						}*/
/* 						var title = $(this).text();*/
/* 						$('#edit_label').attr('data-id', $(this).attr('data-id'))*/
/* 						$('#edit_label').find('input').val(title);*/
/* 						$('#edit_label').fadeIn();*/
/* 						closePop();*/
/* 					}*/
/* 				})*/
/* */
/* 				*/
/* */
/* 			}*/
/* */
/* 			//删除*/
/* 			batch();*/
/* */
/* 			function batch() {*/
/* 				var del = $('#delLabel');*/
/* 				$('#pl').unbind('click').click(function() {*/
/* 					*/
/* 					$(this).addClass('pl');*/
/* 					del.show();*/
/* 					$("#scalc").show();*/
/* 					if(!$(this).hasClass('pl')) {*/
/* 						$('.labelBtn').find('button').removeClass('label_active');*/
/* 						$('.labelBtn').find('.fa.fa-check-circle').remove();						*/
/* 						del.hide();*/
/* 					}*/
/* */
/* 					del.unbind('click').click(function() {*/
/* 						var idArr = [];*/
/* 						$('.labelBtn').find('.label_active').each(function(i) {*/
/* 							//删除*/
/* 							idArr.push($(this).attr('data-id'))*/
/* 						})*/
/* 						if(idArr.length == 0) {*/
/* 							ykp.prompt("请选择标签删除！");*/
/* 							return false;*/
/* 						}*/
/* 						var data = {*/
/* 							url: '/api/api_label/del',*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								id: idArr*/
/* 							}*/
/* 						}*/
/* 						ykp.doAjax({*/
/* 							url: '/api/api_label/del',*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								id: idArr*/
/* 							},*/
/* 							success: function(res) {*/
/* 								if(res.code == 200) {*/
/* 									console.log(res.data);*/
/* 									var data = res.data;*/
/* 									ykp.prompt('删除标签成功');*/
/* 									getKnow();*/
/* 									del.hide();*/
/* 									$("#scalc").hide();*/
/* 									showPage();*/
/* 								}*/
/* 								//去除批量删除绑定事件*/
/*                                     $('#pl').removeClass('pl');*/
/*                                     del.hide();*/
/*                                     $("#scalc").hide();*/
/*                                     $('.labelBtn button').each(function(){*/
/*                                         $(this).find('.fa.fa-check-circle').remove();*/
/*                                     })*/
/* 							}*/
/* 						})*/
/* 					})*/
/* 					$('#scalc').unbind('click').click(function(){*/
/* 						$('#pl').removeClass('pl');*/
/* 						del.hide();*/
/* 						$("#scalc").hide();*/
/* 						$('.labelBtn button').each(function(){*/
/* 							$(this).find('.fa.fa-check-circle').remove();*/
/* 						})*/
/* 					})*/
/* 					*/
/* 				})*/
/* 			}*/
/* */
/* 		}*/
/* */
/* 		$('#add').click(function() {*/
/* 			showMark('#popup');*/
/* 			$('#showBox .title').text('添加标签');*/
/* 			$('#templateCon #cat_group').html(cat_group ? cat_group : '<option value="">暂无数据</option>');*/
/* 			$('#templateBox .hold').unbind('click').click(function() {*/
/* 				var labelName = $('#templateBox  #labelName').val();*/
/* 				//				var useLabel = $('#templateBox  #useLabel').val();*/
/* 				//				var labelDes = $('#templateBox  #labelDes').val();*/
/* 				var checkColor = $("#templateBox input[type='radio']:checked").val();*/
/* 				console.log(checkColor)*/
/* 				var cat_id = $('#templateCon #cat_group').val();	*/
/* 				if(!labelName) {*/
/* 					ykp.prompt('标签名称不能为空！');*/
/* 					return false;*/
/* 				}*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_label/add',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						cat_id: cat_id,*/
/* 						title: labelName,*/
/* 						color: checkColor*/
/* 					},*/
/* 					success: function(res) {*/
/* 						if(res.code == "200") {*/
/* 							var data = res.data;*/
/* 							ykp.prompt('添加成功')*/
/* 							cs.close();*/
/* 							getKnow();*/
/* 							showPage();*/
/* 						}*/
/* 					}*/
/* 				})*/
/* */
/* 			})*/
/* 		});*/
/* */
/* 		//添加分组*/
/* 		$('#addGroup').unbind('click').click(function() {*/
/* 			$('#label_popup').find('input').val('');*/
/* 			$('#label_popup').fadeIn();*/
/* 			$('#label_popup .hold').unbind('click').click(function() {*/
/* 					var labelName = $('#label_popup #labelName').val();*/
/* 					if(!labelName) {*/
/* 						ykp.prompt('标签分组名不能为空！');*/
/* 						return false;*/
/* 					}*/
/* 		*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_label_cat/add',*/
/* 						method: 'post',*/
/* 						data: {*/
/* 							title: labelName*/
/* 						},*/
/* 						success: function(res) {*/
/* 							ykp.prompt('添加分组成功');*/
/* 							$('.close_label').parents('.label_popup').fadeOut();*/
/* 							getKnow();*/
/* 							showPage();*/
/* 						}*/
/* 					});*/
/* 				})*/
/* 			closePop();*/
/* 		})*/
/* */
/* 		function closePop() {*/
/* 			$('.close_label').click(function() {*/
/* 				$(this).parents('.label_popup').fadeOut();*/
/* 			})*/
/* 		}*/
/* */
/* 		*/
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
/* 		function showPage(cate_id) {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_label/index',*/
/* 				method: 'get',*/
/* 				data: {*/
/* 					cat_id: cate_id*/
/* 				},*/
/* 				success: function(res) {*/
/* 					if(res.data.items.length == 0) {*/
/* 						ykp.prompt('暂无数据!');*/
/* 						$('.labelBtn').html('暂无数据');*/
/* 						return false;*/
/* 					}*/
/* */
/* 					addLabelList(res.data.items);*/
/* 				}*/
/* 			})*/
/* */
/* 		}*/
/* */
/* 	});*/
/* */
/* 	function checkAll(status) {*/
/* 		$("tbody input[name='check']").each(function(i, n) {*/
/* 			n.checked = status;*/
/* 		});*/
/* 	}*/
/* </script>*/
