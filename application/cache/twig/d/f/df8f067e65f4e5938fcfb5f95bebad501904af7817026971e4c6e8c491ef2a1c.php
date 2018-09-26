<?php

/* admin/manage/staff.html */
class __TwigTemplate_8f5873e41f1da010453eb40782046b8fdcaa721cc4c8635c7f7bd1710c9797aa extends Twig_Template
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
\t.tree-open:last-child {
\t\tborder: none;
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
\t.tree:before {
\t\tcontent: none;
\t}
\t
\tli._item:before {
\t\tdisplay: inline-block;
\t\tcontent: \"\";
\t\tposition: absolute;
\t\ttop: 19px;
\t\tbottom: 18px;
\t\tleft: 6px;
\t\tz-index: 1;
\t\tborder: 1px dotted #67B2DD;
\t\tborder-width: 0 0 0 1px;
\t}
\t
\tli._item {
\t\tposition: relative;
\t}
\t
\t#transfer table {
\t\tborder: none !important;
\t}
\t
\t#transfer th,
\t#transfer td {
\t\theight: 35px !important;
\t\tline-height: 35px !important;
\t\tfont-size: 14px !important;
\t}
\t
\t#department li b {
\t\topacity: 0;
\t}
\t#knowledge li a {
    \t   display: inline-block;
    \twidth: 74px;
    }
\t#department li a:hover > b {
\t\topacity: 1;
\t}
\t#addPart{
\t\tbackground: transparent !important;
\t\tborder: none;
\t\tcolor: #000 !important;
\t}
\t#addPart:hover{
\t\tbackground: #1E9FFF  !important;
\t\tcolor: #fff !important;
\t}
</style>
<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<!-- \t\t<h3 class=\"header smaller lighter blue\">部门员工</h3> -->
\t\t<div class=\"row padding-20\">
\t\t\t<div class=\"col-xs-12\">

\t\t\t\t<div class=\"row\" style=\"margin-top: 20px;\" id=\"topTool\">
\t\t\t\t\t<!--普通搜索-->

\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right:5px;\">
\t\t\t\t\t\t<input type=\"text\" pts=0 sear=\"bmm_employees.name\" placeholder=\"姓名\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right:5px;\">
\t\t\t\t\t\t<input type=\"number\" pts=0 sear=\"bmm_employees.empno\" placeholder=\"工号\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right:5px;\">
\t\t\t\t\t\t<input type=\"number\" pts=0 sear=\"bmm_employees.officePhone\" placeholder=\"办公电话\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right:5px;\">
\t\t\t\t\t\t<input type=\"number\" pts=0 sear=\"bmm_employees.mobilePhone\" placeholder=\"联系电话\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right:5px;\">
\t\t\t\t\t\t<input type=\"text\" pts=0 sear=\"bmm_employees.email\" placeholder=\"Email\" />
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
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;  margin-right: 5px;\" contentAuthority=\"202\">
\t\t\t\t\t\t<button id=\"add\" title=\"添加\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"border-color: #1E9FFF!important;background: #1E9FFF!important;\">
\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
                        </button>
\t\t\t\t\t</div>
\t\t\t\t\t<!--<div class=\"col-sx-4\" style=\" float: left;  margin-right: 5px; \" contentAuthority=\"203\">-->
\t\t\t\t\t\t<!--<button id=\"addPart\" title=\"添加部门\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"border-color: #32CD32!important;background: #32CD32!important;\">-->
\t\t\t\t\t\t\t<!--<i class=\"fa fa-plus\"></i>-->
                        <!--</button>-->
\t\t\t\t\t<!--</div>-->
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-2\" style=\"padding:0;border:1px solid #ddd;\">
\t\t\t\t\t\t<div class=\"widget-box widget-color-green2\" style=\"margin:0;\">
\t\t\t\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t\t\t\t<h4 class=\"widget-title lighter smaller\" style=\"color: cornflowerblue;\">
                                   \t\t\t 部门管理
                                </h4>
\t\t\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: right;  margin-right: 5px; margin-top: 5px;\" contentAuthority=\"203\">
\t\t\t\t\t\t\t\t\t<button id=\"addPart\" title=\"添加部门\" type=\"button\" class=\"btn btn-info btn-sm\" >
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t\t<div class=\"widget-main padding-20\">
\t\t\t\t\t\t\t\t\t<ul style=\"list-style-type:none;\" class=\"tree\" role=\"group\" id=\"department\">

\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t\t<table id=\"dynamic-table\" style=\"margin-bottom:0px;\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr class=\"thColor\">

\t\t\t\t\t\t\t\t\t\t<th class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t序号
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th class=\" center\">操作</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"center thColor name\" data-num=\"1\">姓名</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"center thColor name\">工号</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"center cardNum\" data-num=\"2\">用户名</th>
\t\t\t\t\t\t\t\t\t\t<th class=\" center department\" data-num=\"3\">部门</th>
\t\t\t\t\t\t\t\t\t\t<th class=\" center status\" data-num=\"4\">任职状态</th>
\t\t\t\t\t\t\t\t\t\t<th class=\" center officePhone\" data-num=\"5\">办公电话</th>
\t\t\t\t\t\t\t\t\t\t<th class=\" center phone\" data-num=\"6\">联系电话</th>
\t\t\t\t\t\t\t\t\t\t<th class=\" center Email\" data-num=\"7\">Email</th>
\t\t\t\t\t\t\t\t\t\t<th class=\" center people\" data-num=\"8\">角色</th>

\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t<tbody id=\"dataList\">

\t\t\t\t\t\t\t\t</tbody>

\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" id=\"num\"></div>
\t\t\t\t\t\t\t\t<div id=\"pageBar\" class=\"pagination\"></div>
\t\t\t\t\t\t\t\t<div align=\"right\" style=\"float: right; margin-right: 15px;  width: 10%;\">
\t\t\t\t\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\" id=\"template\" style=\"display:none;\">
\t\t\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<form class=\"item_form\" role=\"form\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 部门： </label>
\t\t\t\t\t\t\t\t\t\t\t<select addfield=\"department\"></select>
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 姓名： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"in_num \" addfield=\"name\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 用户名： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"in_num \" id=\"username\" addfield=\"username\" />
\t\t\t\t\t\t\t\t\t\t\t<select addfield=\"username\" id=\"username1\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 工号： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"in_num \" addfield=\"empno\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"><i class=\"reqired_label\">*</i> 任职状态： </label>
\t\t\t\t\t\t\t\t\t\t\t<select addfield=\"maritalStatus\" needed=\"required\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected=\"selected\">请选择</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">在职</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">离职</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">请假</option>
\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 密码： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" addfield=\"password\" class=\"in_num\" />

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 办公电话： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" class=\"in_num required\" addfield=\"officePhone\" />
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> <i class=\"reqired_label\">*</i>手机号码： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" class=\"in_num \" addfield=\"mobilePhone\" needed=\"required\" msg=\"请输入正确的手机号码\" validate=\"phone\" maxlength=\"11\" />

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> <i class=\"reqired_label\">*</i>角色： </label>
\t\t\t\t\t\t\t\t\t\t\t<!--<input type=\"text\" class=\"in_num required\"  addfield=\"role_id\" />-->
\t\t\t\t\t\t\t\t\t\t\t<select multiple id=\"role_id\" name=\"state\" needed=\"required\" addfield=\"role_id\" 
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"state select2 select2-hidden-accessible\" data-placeholder=\"请选择\" style=\"width: 200px;\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 教育等级： </label>
\t\t\t\t\t\t\t\t\t\t\t<select addfield=\"degreeLevel\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">请选择</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">高中及以下</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">技校</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">专科</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">本科</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">硕士及以上</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\">入职日期： </label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"date-timepicker1 required\" addfield=\"employedDate\" msg=\"入职日期不能为空\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
\t\t\t\t\t\t\t\t                        <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t\t\t\t\t\t\t                    </span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 住所： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"in_num required\" addfield=\"domicile\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 学校： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"in_num required\" addfield=\"school\" />
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 性别： </label>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"sex\" addfield=\"sex\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">请选择</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">男</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">女</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 邮箱： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"in_num\" addfield=\"email\" />
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 紧急联系人： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"in_num required\" addfield=\"emergencyContactName\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 紧急电话： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"in_num required\" addfield=\"emergencyPhone\" />
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 身份证： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"in_num\" addfield=\"identityCode\" maxlength=\"18\" msg=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<!--<label style=\"width: 100px;\"> 当前住所： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" addfield=\"currentAddress\" class=\"in_num required\"  />-->
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 生日： </label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"date-timepicker1\" addfield=\"birthday\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
\t\t\t\t\t\t\t\t                    <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t\t\t\t\t\t\t                </span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 通讯地址： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"in_num \" addfield=\"mail_address\" />
\t\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" id=\"birthday\" class=\"in_num required\" addfield=\"birthday\" /> -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 上级员工： </label>
\t\t\t\t\t\t\t\t\t\t\t<!--<select id=\"up_user\" class=\"advandced-search select2-hidden-accssible\" addfield=\"up_user\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected=\"selected\">请选择</option>
\t\t\t\t\t\t\t\t\t\t\t</select>-->
\t\t\t\t\t\t\t\t\t\t\t <select id=\"up_user\" addfield=\"up_user\" class=\"advandced-searchs select2-hidden-accssible\"  tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t                  <option value=\"\" selected=\"selected\">请选择</option>
\t\t\t\t\t                      </select>
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 婚姻状态： </label>
\t\t\t\t\t\t\t\t\t\t\t<select addfield=\"marriage\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">未婚</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">已婚</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">离婚</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 户籍： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"in_num \" addfield=\"origin\" />

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px; margin-right:5px;\"> 头像： </label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group js_photo\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"imgCon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/resource/adimin/assets/images/avatar.png\" addfield=\"avatar\" data-url=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"del\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\" fa fa-pencil\">
\t\t\t\t\t\t\t\t\t\t                       \t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"upload0\" style=\"opacity: 0;\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px; margin-right:5px;\"> 身份证扫描件： </label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group js_photo\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"imgCon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/resource/adimin/assets/images/avatar.png\" addfield=\"img_card\" data-url=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"del\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\" fa fa-pencil\">
\t\t\t\t\t\t\t\t\t\t                       \t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"upload1\" style=\"opacity: 0;\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;margin-right:5px;\"> 毕业证书扫描件： </label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group js_photo\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"imgCon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/resource/adimin/assets/images/avatar.png\" addfield=\"img_school\" data-url=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"del\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\" fa fa-pencil\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"upload2\" style=\"opacity: 0;\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px; margin-right:5px;\"> 资格证件扫描件： </label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group js_photo\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"imgCon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/resource/adimin/assets/images/avatar.png\" addfield=\"img_qualifications\" data-url=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"del\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\" fa fa-pencil\">
\t\t\t\t\t\t\t\t\t\t                       \t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"upload3\" style=\"opacity: 0;\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;margin-right:5px;\"> 劳动合同扫描件： </label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group js_photo\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"imgCon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/resource/adimin/assets/images/avatar.png\" addfield=\"img_labour\" data-url=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"del\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\" fa fa-pencil\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"upload4\" style=\"opacity: 0;\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;margin-right:5px;\"> 其他证件扫描件： </label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group js_photo\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"imgCon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/resource/adimin/assets/images/avatar.png\" addfield=\"img_other\" data-url=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"del\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\" fa fa-pencil\">
\t\t\t\t\t\t\t\t\t\t                       \t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"upload5\" style=\"opacity: 0;\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

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

\t\t\t\t\t<div class=\"row\" id=\"template3\" style=\"display:none;width:678px;\">
\t\t\t\t\t\t<div class=\"col-sm-12\" id=\"editBox\">
\t\t\t\t\t\t\t<div style=\"font-weight:bold;margin-bottom:10px;\">客户详情</div>
\t\t\t\t\t\t\t<table width=\"100%\" style=\"border:1px solid #ddd;border-collapse:collapse;margin-bottom:15px;\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"4\">基本信息</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr style=\"\">
\t\t\t\t\t\t\t\t\t<td style=\"text-align: right !important\">姓名：</td>
\t\t\t\t\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t\t\t\t\t<span class=\"disData0\"></span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td style=\"text-align: right !important\">工号：</td>
\t\t\t\t\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t\t\t\t\t<span class=\"disData1\"></span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr style=\"\">
\t\t\t\t\t\t\t\t\t<td style=\"text-align: right !important\">部门：</td>
\t\t\t\t\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t\t\t\t\t<span class=\"disData2\"></span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td style=\"text-align: right !important\">任职状态：</td>
\t\t\t\t\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t\t\t\t\t<span class=\"disData3\"></span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr style=\"\">
\t\t\t\t\t\t\t\t\t<td style=\"text-align: right !important\">办公电话：</td>
\t\t\t\t\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t\t\t\t\t<span class=\"disData4\"></span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td style=\"text-align: right !important\">联系电话：</td>
\t\t\t\t\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t\t\t\t\t<span class=\"disData5\"></span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr style=\"\">
\t\t\t\t\t\t\t\t\t<td style=\"text-align: right !important\">Email：</td>
\t\t\t\t\t\t\t\t\t<td style=\"text-align: left !important\" class=\"tdboder\">
\t\t\t\t\t\t\t\t\t\t<span class=\"disData6\"></span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td style=\"text-align: right !important\">角色：</td>
\t\t\t\t\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t\t\t\t\t<span class=\"disData7\"></span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\" id=\"template2\" style=\"display:none;\">
\t\t\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<form class=\"item_form\" role=\"form\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"item1\" style=\"width: 100px;\"> 上级部门： </label>
\t\t\t\t\t\t\t\t\t\t\t<!--<select class=\"item1\" affied=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">请选择部门</option>
\t\t\t\t\t\t\t\t\t\t\t</select>-->
\t\t\t\t\t\t\t\t\t\t\t<!--<select addfield=\"department\"></select>-->
\t\t\t\t\t\t\t\t\t\t\t<select id=\"depart\" class=\"item1\" affied=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">请选择部门</option>
\t\t\t\t\t\t\t\t\t\t\t</select>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 名称： </label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"in_num required\" affied=\"name\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 主管： </label>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"emple\" affied=\"director\">

\t\t\t\t\t\t\t\t\t\t\t</select>
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

\t\t\t\t\t<div class=\"label_popup\" id=\"transfer\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;max-height: 900px;\">
\t\t\t\t\t\t<div style=\"max-width:900px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t\t\t\t        box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">

\t\t\t\t\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t\t\t\t\t<span>员工</span>
\t\t\t\t\t\t\t\t\t<i style=\"padding:0 5px;\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"self\" style=\"font-weight:bold\"></span>
\t\t\t\t\t\t\t\t\t<i style=\"padding:0 5px;\"></i>
\t\t\t\t\t\t\t\t\t<span>负责的客户移交：</span>
\t\t\t\t\t\t\t\t<!--<span style=\"display: inline-block;font-size:14px;\" id=\"yjtitle\"></span>-->
\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"padding: 10px 20px;\">
\t\t\t\t\t\t\t\t<!--<div style=\"margin-top: 10px;\">
\t\t\t\t\t\t\t\t\t<label style=\"width: 60px;\"> 移交原因： </label>
\t\t\t\t\t\t\t\t\t<select id=\"reson\" affied=\"parent\" style=\"width:100px;\">
\t\t\t\t\t\t\t\t\t\t<option value=\"2\">离职</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t\t\t<!--<div style=\"border-bottom:1px solid #ddd;padding:10px 0;\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t\t\t<div style=\"margin-bottom: 10px; margin-top: 10px;max-height:300px;overflow:auto;\">
\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t<tbody class=\"transfer_message\">
\t\t\t\t\t\t\t\t\t\t\t<!-- <tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>客户</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i style=\"padding:0 5px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"customers\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i style=\"padding:0 5px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>移交给</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i style=\"padding:0 5px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr> -->
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"padding:20px;text-align:right;\">
\t\t\t\t\t\t\t\t<button class=\"hold_label btn btn-info btn-sm\">保存</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<!-- <div class=\"label_popup\" id=\"feedBack\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;max-height: 900px;\">
\t\t\t\t\t\t<div style=\"width:900px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t\t\t\t        box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">

\t\t\t\t\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t\t\t\t\t<span style=\"display: inline-block;\">移交信息</span>
\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t\t\t\t\t<label style=\"width: 80px;\"> 移交原因： </label>
\t\t\t\t\t\t\t\t<select id=\"reson\" affied=\"parent\">
\t\t\t\t\t\t\t\t\t<option value=\"\">请选择原因</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\">在职</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">请假</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">辞职</option>
\t\t\t\t\t\t\t\t</select> 
\t\t\t\t\t\t\t\t<div style=\"margin-bottom: 10px; margin-top: 10px;\"  >
\t\t\t\t\t\t\t\t\t\t<label style=\"width: 120px;\"> 合同编号</label>
\t\t\t\t\t\t\t\t\t\t<span style=\"width: 80px; display: inline-block;\"> 合同类型</span>
\t\t\t\t\t\t\t\t\t\t<span style=\"margin-right: 20px; margin-left: 20px;     display: inline-block; width:280px;\"> 流程</span>
\t\t\t\t\t\t\t\t\t\t<label style=\"width: 50px; \"> 移交人 </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"margin-top: 10px;overflow: auto;max-height: 600px\" id=\"task_con\">

\t\t\t\t\t\t<div class=\"layui-collapse\" lay-accordion>
\t\t\t\t\t\t  \t<div class=\"layui-colla-item\">
\t\t\t\t\t\t\t    <h2 class=\"layui-colla-title\">杜甫</h2>
\t\t\t\t\t\t\t    <div class=\"layui-colla-content layui-show\">内容区域</div>
\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t   \t<div class=\"layui-colla-item\">
\t\t\t\t\t\t\t    <h2 class=\"layui-colla-title\">李清照</h2>
\t\t\t\t\t\t\t    <div class=\"layui-colla-content layui-show\">内容区域</div>
\t\t\t\t\t\t \t</div>
\t\t\t\t\t\t\t<div class=\"layui-colla-item\">
\t\t\t\t\t\t\t    <h2 class=\"layui-colla-title\">鲁迅</h2>
\t\t\t\t\t\t\t    <div class=\"layui-colla-content layui-show\">内容区域</div>
\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t\t\t\t\t<button class=\"close_label\">关闭</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div> -->

\t\t\t\t\t<div class=\"label_popup\" id=\"label_popup\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t\t\t\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t\t\t\t\t    box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t\t\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t\t\t\t\t<input type=\"text\" width=\"200px\" style=\"margin: auto;\" id=\"labelName\" />
\t\t\t\t\t\t\t\t<!--<hr>-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t\t\t\t\t<button class=\"close_label\">关闭</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 611
        $this->loadTemplate("admin/mark.html", "admin/manage/staff.html", 611)->display($context);
        // line 612
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/assets/js/LocalResizeIMG.js\"></script>
<script>
\tjQuery(function(\$) {
\t\tcs.getNodes([203]);
\t\tvar userinfo = JSON.parse(ykp.getCookie('userinfo'));
\t\tif(userinfo['cid'] == '1') {
\t\t\tcs.getNodes([202]);
\t\t}
\t\tvar curent = 0;
\t\tvar pagesize = 10;
\t\tvar order = 'bmm_employees.id desc';
\t\tvar sort_role = ''; //排序规则
\t\tvar filter = 'bmm_employees.is_del = 0'; //过滤条件
\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_employees/grid',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: filter,
\t\t\t\tlimit: pagesize
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '.pageBar'
\t\t\t},
\t\t\tcontentId: \"#datalist\", //默认排序
\t\t\tinitOrder: \"\", //初始化sort
\t\t\tdefaultOrder: order,
\t\t\tparams: [{
\t\t\t\tid: \"#dynamic-table\",
\t\t\t\tfield: [\"\",\"\", \"bmm_employees.name\", \"bmm_employees.empno\", \"bmm_employees.username\", \"bmm_department.name\", \"bmm_employees.maritalStatus\", \"bmm_employees.officePhone\", \"bmm_employees.mobilePhone\", \"bmm_employees.email\"]
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
\t\t\$('#addPart').click(function() {
\t\t\tshowMark(\"#template2\");

\t\t\tgetParentPart(); //获取上级部门
\t\t\t\$('#showBox .title').text('添加部门');
\t\t\tgetEmple('#templateBox #emple'); //获取员工
\t\t\tadd_edit_group();
\t\t})
\t\t//添加编辑部门
\t\tadd_edit_group();

\t\tfunction add_edit_group(id) {
\t\t\t\$('#templateBox #add').click(function() {

\t\t\t\tvar data = {},
\t\t\t\t\tstatus = false,
\t\t\t\t\turl = \"/api/api_department/add\";
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
\t\t\t\t\turl = \"/api/api_department/edit\"
\t\t\t\t}
\t\t\t\tif(status) {
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: url,
\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\tdata: data,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tvar msg;
\t\t\t\t\t\t\tmsg = id ? '编辑成功!' : '添加成功!'
\t\t\t\t\t\t\tykp.prompt(msg);
\t\t\t\t\t\t\tgetDepartment();
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t}
\t\t\t})
\t\t}
\t\t//获取员工
\t\tfunction getEmple(el, director, filter) {
\t\t\tykp.doAjax({
\t\t\t\turl: \"/api/api_employees/grid\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tlimit: pagesize,
\t\t\t\t\torder: order,
\t\t\t\t\tfilter: filter
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tif(res.data.item == \"\") {
\t\t\t\t\t\tykp.prompt(\"暂无员工\");
\t\t\t\t\t\treturn false;
\t\t\t\t\t} else {
\t\t\t\t\t\tvar data = res.data.items;
\t\t\t\t\t\tvar content = [];
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\tif(data[i]['bmm_employees.name']) {
\t\t\t\t\t\t\t\tcontent.push('<option value=\"' + data[i]['bmm_employees.id'] + '\">' + data[i]['bmm_employees.name'] + '</option>');
\t\t\t\t\t\t\t}

\t\t\t\t\t\t}
\t\t\t\t\t\t\$(el).append(content.join(''));
\t\t\t\t\t\tif(director) {
\t\t\t\t\t\t\t\$(el + ' option[value=' + director + ']').attr('selected', true);
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t}
\t\t\t})
\t\t}

\t\t//切换每页显示的条目数
\t\t\$('#changePageNum').change(function() {
\t\t\tpagesize = \$(this).val();
\t\t\tykp.setCookie('page_size', pagesize);
\t\t\tshowPage();
\t\t})

\t\t//获取上级部门
\t\tfunction getParentPart(status, parent, emplo) {
\t\t\tykp.doAjax({
\t\t\t\turl: \"/api/api_department/index\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tlimit: 999,
\t\t\t\t\tfilter: emplo ? 'bmm_department.is_del = 0' : 'bmm_department.is_del = 0 and bmm_department.parent = 0'
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar content = [];
\t\t\t\t\tcontent.push('<option value=\"0\">请选择</option>');
\t\t\t\t\tif(res.data.item == \"\") {
\t\t\t\t\t\tykp.prompt(\"暂无部门\");
\t\t\t\t\t\treturn false;
\t\t\t\t\t} else {
\t\t\t\t\t\tvar data = res.data.items;

\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\tcontent.push('<option value=\"' + data[i]['bmm_department.id'] + '\">' + data[i]['bmm_department.name'] + '</option>');
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#templateBox [addfield=\"department\"]').html(content.join('')).select2();
                        \$('#templateBox #depart').html(content.join(''));
 \t\t\t\t\t\tif(status) {
\t\t\t\t\t\t\tif(parent != 0) {
\t\t\t\t\t\t\t\t\$('#templateBox [addfield=\"department\"]').val(parent).trigger('change');
\t\t\t\t\t\t\t\t\$('#templateBox #depart option[value=' + parent + ']').attr('selected', true);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} 
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//添加员工
\t\t\$('#add').click(function() {
\t\t\tshowMark(\"#template\");
\t\t\tgetEmp();
\t\t\t\$('#showBox .title').text('添加员工');
\t\t\tgetParentPart(); //获取上级部门

\t\t\tgetEmp(); //获取员工
\t\t\tcs.timeplug();
\t\t\tget_role();
\t\t\teditInfo();
\t\t\tuploadPhoto();

\t\t});

\t\t//上传照片
\t\tfunction uploadPhoto() {
\t\t\t\$('#templateBox input[type=file]').each(function(i) {
\t\t\t\t\$('#templateBox .upload' + i).click(function() {
\t\t\t\t\tcs.imgResize('#templateBox .upload' + i, function(res) {
\t\t\t\t\t\t\$('#templateBox').find('.js_photo').eq(i).find('img').attr('src', res.data.url);
\t\t\t\t\t\t\$('#templateBox').find('.js_photo').eq(i).find('img').attr('data-url', res.data.url);
\t\t\t\t\t})
\t\t\t\t})
\t\t\t})
\t\t};

\t\t//获取所有员工
\t\tfunction getEmp() {
\t\t\tykp.doAjax({
\t\t\t\tasync: false,
\t\t\t\turl: '/api/api_employees/f7',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tselect: 'bmm_employees.id,bmm_employees.name'
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\t\t\t\t\t\$('#templateCon .advandced-searchs').select2({
\t\t\t\t\t\t\t\t\t\t\tallowClear: true
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\$('#templateCon #up_user').html(\"<option value='' selected='selected'>请选择</option>\");
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tif(data[i]['name']) {
\t\t\t\t\t\t\t\$(' .advandced-searchs').append(\"<option value='\" + data[i].id + \"' >\" + data[i].name + \"</option>\");
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t}
\t\t\t});
\t\t}
\t\t//getEmple();
\t\tfunction get_role(id) {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_role/list_role',
\t\t\t\tmethod: 'get',
\t\t\t\tdata: {},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tvar options = \"\";
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\toptions += '<option value=\"' + data[i]['id'] + '\">' + data[i]['name'] + '</option>'
\t\t\t\t\t}
\t\t\t\t\t\$('#templateBox #role_id').append(options).select2();
\t\t\t\t\t\$('#templateBox #role_id').find('option[value=' + id.split(',') + ']').attr(\"selected\", true);

\t\t\t\t\tif(id) {
\t\t\t\t\t\t\$('#templateBox #role_id').val(id.split(',')).trigger('change');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}

\t\tsearch();

\t\tfunction search() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_employees/grid',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\tpage_size: pagesize,
\t\t\t\t\tlimit: 999,
\t\t\t\t\torder: 'bmm_employees.id desc'
\t\t\t\t}
\t\t\t}
\t\t\tcs.doSearch('#search', data, 'filter', false, function(res, _filter) {
\t\t\t\tfilter = _filter;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn false;
\t\t\t\t} else {
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t})
\t\t}

\t\tshowPage();

\t\tgetDepartment();

\t\tfunction getDepartment() {
\t\t\tykp.doAjax({
\t\t\t\turl: \"/api/api_department/index\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tlimit: 999,
\t\t\t\t\tfilter: 'bmm_department.is_del = 0'
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tif(res.data.item == \"\") {
\t\t\t\t\t\tykp.prompt(\"暂无部门\");
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddDepartment(res);
\t\t\t\t}
\t\t\t})
\t\t}
\t\t//添加遍历部门
\t\tfunction addDepartment(res) {
\t\t\tvar content = \"\";
\t\t\tvar data = res.data.items;
\t\t\tvar department = [];
\t\t\tfor(var i in data) {
\t\t\t\tif(data[i]['bmm_department.parent'] == 0) {
\t\t\t\t\tdepartment.push({
\t\t\t\t\t\tname: data[i]['bmm_department.name'],
\t\t\t\t\t\tid: data[i]['bmm_department.id'],
\t\t\t\t\t\tparent: data[i]['bmm_department.parent'],\t\t\t
\t\t\t\t\t\tchilden: []
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}

\t\t\tfor(var i in data) {
\t\t\t\tfor(var j in department) {
\t\t\t\t\tif(data[i]['bmm_department.parent'] != 0 && data[i]['bmm_department.parent'] == department[j].id) {
\t\t\t\t\t\tdepartment[j].childen.push({
\t\t\t\t\t\t\tname: data[i]['bmm_department.name'],
\t\t\t\t\t\t\tid: data[i]['bmm_department.id'],
\t\t\t\t\t\t\tparent: data[i]['bmm_department.parent'],
\t\t\t\t\t\t\tdirector: data[i]['bmm_department.director']
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tvar childen;
\t\t\tfor(var i in department) {
\t\t\t\tchilden = '';
\t\t\t\tif(department[i].childen.length == 0) {
\t\t\t\t\tcontent += `
\t\t\t\t\t\t\t\t\t\t<li style=\"padding:4px 0 4px 0\" class=\"_item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-square control\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<a data-id=\"\${department[i].id}\" class=\"parent\"><span>\${department[i].name}</span>
\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"float: right;\"  contentAuthority=\"204\">
\t\t\t\t\t\t\t\t\t\t\t\t<i style=\"color:red\" class=\"ace-icon fa fa-trash-o gdel\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"float: right;padding-right:5px;position:relative;top:2px;\"  contentAuthority=\"205\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-pencil align-top gedit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</li>`;
\t\t\t\t} else {
\t\t\t\t\tfor(var j in department[i].childen) {
\t\t\t\t\t\tchilden += `<li style=\"padding:4px 0 4px 20px;background:'red'\" class=\"tree-item\" role=\"treeitem\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"department\" data-id=\"\${department[i].childen[j].id}\" data-director=\"\${department[i].childen[j].director}\" data-parent=\"\${department[i].childen[j].parent}\" class=\"childen\" href=\"#\" style=\"text-decoration:none;\"><span>\${department[i].childen[j].name}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"float: right;\"  contentAuthority=\"204\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i style=\"color:red\" class=\"ace-icon fa fa-trash-o gdel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"float: right;padding-right:5px;position:relative;top:2px;\"  contentAuthority=\"205\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-pencil align-top gedit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>`;
\t\t\t\t\t}

\t\t\t\t\tcontent += `
\t\t\t\t\t\t\t\t\t\t<li style=\"padding:4px 0 4px 0;background:'green'\" class=\"_item showchild\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-square control\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"department\" data-id=\"\${department[i].id}\" data-parent=\"\${department[i].parent}\" data-director=\"\${department[i].director}\">
\t\t\t\t\t\t\t\t\t\t\t<span>\${department[i].name}</span>
\t\t\t\t\t\t\t\t\t\t\t<b style=\"float: right;\"  contentAuthority=\"204\">
\t\t\t\t\t\t\t\t\t\t\t<i style=\"color:red\" class=\"ace-icon fa fa-trash-o gdel\"></i>
\t\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t\t\t<b style=\"float: right;padding-right:5px;position:relative;top:2px;\"  contentAuthority=\"205\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-pencil align-top gedit\"></i>
\t\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul style=\"list-style-type:none;display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\${childen}
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>`;

\t\t\t\t}
\t\t\t}
\t\t\t\$('#department').html(content);

\t\t\tcs.getNodes([204, 205]);

\t\t\tspread();

\t\t\t// \$('.department').click(function() {
\t\t\t// \tvar id = \$(this).attr('data-id');
\t\t\t// \tshowPage(id);
\t\t\t// })

\t\t\t//删除分组
\t\t\t\$('.gdel').click(function() {
\t\t\t\tvar id = \$(this).parents('a').attr('data-id');
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_department/del',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tid: id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tykp.prompt(\"删除成功\");
\t\t\t\t\t\tshowPage();
\t\t\t\t\t\tgetDepartment();
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})

\t\t\t\$('.gedit').click(function() {
\t\t\t\tvar id = \$(this).parents('a').attr('data-id');
\t\t\t\tshowMark('#template2');
\t\t\t\t\$('#templateCon #title').text('编辑分组');
\t\t\t\tvar parent = \$(this).parents('a').attr('data-parent');
\t\t\t\tif(parent == 0) {
\t\t\t\t\t\$('#templateBox .item1').remove();
\t\t\t\t}
\t\t\t\tvar director = \$(this).parents('a').attr('data-director');
\t\t\t\tgetEmple('#templateBox #emple', director); //获取员工
\t\t\t\tgetParentPart(true, parent);
\t\t\t\t\$('#templateCon').find('input').val(\$(this).parents('a').find('span').eq(0).text().trim());
\t\t\t\tadd_edit_group(id);
\t\t\t})

\t\t\t/*\$('.department').click(function() {
\t\t\t\tvar id = \$(this).attr('data-id');
\t\t\t\tshowPage(id); //获取员工
\t\t\t})*/

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
//\t\t\t\$('.tree-item a,.showchild a').find('span').click(function() {
//\t\t\t\tvar cate_id = \$(this).parent().attr('data-id');
//\t\t\t\tconsole.log(cate_id)
//\t\t\t\tshowPage(cate_id);
//\t\t\t})
           //点击显示对应的页面
\t\t   \$('._item span').click(function(){
\t\t   \tvar cate_id = \$(this).parent().attr('data-id');
\t\t   \tshowPage(cate_id);
\t\t   })
\t\t}

\t\t\$('#flush').click(function() {
\t\t\t\$('#topTool input').val('');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tfilter = 'bmm_employees.is_del = 0';
\t\t\tshowPage();
\t\t})

\t\tfunction showPage(filter) {
\t\t\tvar data = {
\t\t\t\tfilter: \"bmm_employees.is_del = 0\"
\t\t\t}
\t\t\tdata.filter = filter ? (data.filter += \" and bmm_employees.department = \" + filter) : data.filter;
\t\t\tdata.order = 'bmm_employees.id desc';
\t\t\tdata.limit = pagesize;
\t\t\t//获取数据
\t\t\tykp.list({
\t\t\t\turl: '/api/api_employees/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: data,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t} else {
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}

\t\tvar employees = {};
\t\tget_employees();

\t\tfunction get_employees() {
\t\t\tykp.doAjax({
\t\t\t\tasync: false,
\t\t\t\turl: '/api/api_employees/f7',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tselect: 'bmm_employees.id,bmm_employees.name',
\t\t\t\t\tfilter: 'bmm_employees.is_del = 0'
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\temployees[data[i]['id']] = data[i]['name']
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//保存移交信息
\t\tfunction save_transfer(user) {
\t\t\t\$('#transfer .hold_label').unbind('click').click(function() {

                var postdata = {
\t\t\t\t\tuser: user,
\t\t\t\t\tmaritalStatus: 2
\t\t\t\t};

                var colData = [];
\t\t\t\tvar flag = false;
                if(\$('.transfer_message .batch').prop('disabled')) {
\t\t\t\t\t\$('.transfer_message .single').each(function(i, e) {
\t\t\t\t\t\tif(\$(this).val()) {
\t\t\t\t\t\t\tcolData.push({
\t\t\t\t\t\t\t\tcustomer_id: \$(this).parents('tr').find('[field=\"customer_id\"]').attr('customer_id'),
\t\t\t\t\t\t\t\ttoUser: \$(this).val()
\t\t\t\t\t\t\t});
                        }
\t\t\t\t\t});

\t\t\t\t}

                if(!\$('.transfer_message .batch').prop('disabled')) {
\t\t\t\t\tif(!\$('.transfer_message .batch').val()) {
                        flag = true;
\t\t\t\t\t}
\t\t\t\t\t\$('.transfer_message ._batch').each(function(i, e) {
\t\t\t\t\t\tif(\$(this).find('[name=\"check\"]').prop('checked')) {
\t\t\t\t\t\t\tcolData.push({
\t\t\t\t\t\t\t\tcustomer_id: \$(this).find('[field=\"customer_id\"]').attr('customer_id'),
\t\t\t\t\t\t\t\ttoUser: \$('.transfer_message .batch').val()
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
                if(flag) {
\t\t\t\t\tykp.prompt('请选择批量移交人！');
\t\t\t\t\treturn;
\t\t\t\t}
                if(colData.length <= 0) {
\t\t\t\t\tykp.prompt('没有移交信息!');
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tpostdata['colData'] = JSON.stringify(colData);

                ykp.doAjax({
                    url: '/api/api_home/set_user_customer',
                    method: 'post',
                    data: postdata,
                    success: function(res) {
                        ykp.prompt('移交信息提交成功');
                        \$('#transfer').fadeOut();
                        showPage();
                    }
                });
\t\t\t});
\t\t}

\t\t//移交客户
\t\tfunction transfer_cus() {
\t\t\t\$('.removeBtn').unbind('click').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\t\$('#transfer').show();

\t\t\t\t//关闭弹窗
\t\t\t\tcs.closePop();

\t\t\t\t//保存移交信息
\t\t\t\tsave_transfer(id);

\t\t\t\t\$('#transfer .self').text(employees[id]);

\t\t\t\tykp.doAjax({
\t\t\t\t\tshowBlock: true,
\t\t\t\t\turl: '/api/api_home/get_user_customer',
\t\t\t\t\tmethod: 'get',
\t\t\t\t\tdata: {
\t\t\t\t\t\tuser: id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;

\t\t\t\t\t\t//员工所负责的客户数据
\t\t\t\t\t\tvar transfer_html = [];

\t\t\t\t\t\t//批量移交
\t\t\t\t\t\ttransfer_html.push(
\t\t\t\t\t\t\t`<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<label class=\"pos-rel\" title=\"全选 反选\">
                                        <input type=\"checkbox\" class=\"ace checkAll\">
                                        <span class=\"lbl\"></span>
                                    </label>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t\t\t<span>批量移交给：</span>
\t\t\t\t\t\t\t\t\t<select class=\"employees select2-hidden-accessible batch\" style=\"width:200px\" disabled>
\t\t\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>`
\t\t\t\t\t\t);

\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\ttransfer_html.push(
\t\t\t\t\t\t\t\t`<tr class=\"_batch\">
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t                                        <input type=\"checkbox\" class=\"ace\" name=\"check\">
\t                                        <span class=\"lbl\"></span>
\t                                    </label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span>客户</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"customers\" field=\"customer_id\" customer_id=\"\${data[i]['id']}\">\${data[i]['name']}</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span>移交给</span>
\t\t\t\t\t\t\t\t\t\t<i style=\"padding:0 5px;\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"transfer_emp\">
\t\t\t\t\t\t\t\t\t\t\t<select class=\"employees select2-hidden-accessible single\" style=\"width:200px\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>`
\t\t\t\t\t\t\t);
\t\t\t\t\t\t}

\t\t\t\t\t\t\$('.transfer_message').html(transfer_html.join(''));

\t\t\t\t\t\t//全选或反选
\t\t\t\t\t\t// checkAll();

\t\t\t\t\t\t//批量移交 或者 单个移交以及全选或反选
\t\t\t\t\t\tbatchOrSingle();

\t\t\t\t\t\t//将员工加载到select中
\t\t\t\t\t\t\$('.transfer_message .employees').select2({
\t\t\t\t\t\t\tallowClear: true
\t\t\t\t\t\t});
\t\t\t\t\t\tvar employees_html = [];
\t\t\t\t\t\tfor(var i in employees) {
\t\t\t\t\t\t\tif(employees[i]) {
\t\t\t\t\t\t\t\temployees_html.push('<option value=\"' + i + '\">' + employees[i] + '</option>');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('.transfer_message .employees').append(employees_html.join(''));
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t}

\t\t//批量移交 或者 单个移交 以及全选或反选
\t\tfunction batchOrSingle() {
\t\t\t\$('.transfer_message input[type=\"checkbox\"]').unbind('click').click(function() {
\t\t\t\t//全选或反选
\t\t\t\tif(\$(this).hasClass('checkAll')) {
\t\t\t\t\t\$('.transfer_message [name=\"check\"]').prop('checked', \$(this).prop('checked'));
\t\t\t\t}

\t\t\t\t//批量移交 或者 单个移交 num > 0 时批量移交，小于0单个移交
\t\t\t\tvar num = 0;
\t\t\t\t\$('.transfer_message [name=\"check\"]').each(function(i, e) {
\t\t\t\t\tif(\$(this).prop('checked')) {
\t\t\t\t\t\tnum++;
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tif(num > 0) {
\t\t\t\t\t\$('.transfer_message .single').prop('disabled', true);
\t\t\t\t\t\$('.transfer_message .batch').prop('disabled', false);

\t\t\t\t} else {
\t\t\t\t\t\$('.transfer_message .single').prop('disabled', false);
\t\t\t\t\t\$('.transfer_message .batch').prop('disabled', true);
\t\t\t\t}
\t\t\t});
\t\t}

\t\t// function checkAll(){
\t\t// \t\$('.transfer_message .checkAll').unbind('click').click(function(){

\t\t// \t});
\t\t// };

\t\tfunction addList(res) {
\t\t\tvar html = '';
\t\t\tvar ths = \$('.thColor th');
\t\t\tvar styles = [];
\t\t\tvar data = res.data.items;
\t\t\tcurent = res.data.curPage;
\t\t\tvar list = [];
\t\t\tvar maritalStatus = ['在职', '请假', '离职'];
\t\t\tvar num = 0;
\t\t\tfor(var i in data) {
\t\t\t\tnum++;
\t\t\t\tlist.push(
\t\t\t\t\t`<tr data-id=\${data[i]['bmm_employees.id']}>
\t                            <td class=\"center\">
\t                                \${(pagesize*(curent-1)) +num}
\t                            </td>
\t                            <td class=\"center \">
\t                                <label class=\"pos-rel\">
\t                                \t<a class=\"btOrange info\" href=\"#\" style=\" color:#fff !important\" title=\"详情\"><i class=\"fa fa-info \"></i></a>
                                  <a href=\"#\" id=\"edit\${i}\" class=\"edit btBlue\" style=\"color:#fff !important\" contentAuthority=\"206\" title=\"编辑\"><i class=\"fa fa-pencil-square-o\"></i></a>
\t                                    <a href=\"#\" id=\"del\${i}\" class=\"del btRed\" style=\"color:#fff !important\" contentAuthority=\"207\" title=\"删除\"><i class=\"fa fa-trash-o\"></i></a>
\t                                    <a href=\"#\" id=\"del\${i}\" class=\"removeBtn btBlue\" style=\"color:#fff !important\" contentAuthority=\"208\" title=\"移交\"><i class=\"fa fa-hand-o-right\"></i></a>
\t                                </label>
\t                            </td>
\t                            <td class=\"center name\" data-num = \"1\">
\t                                <span class=\"lbl \">\${data[i]['bmm_employees.name']}</span>
\t                            </td>
\t                            <td class=\"center cardNum\" data-num = \"2\">
\t                                <span class=\"lbl  \">\${data[i]['bmm_employees.empno']}</span>
\t                            </td>
\t                            <td class=\"center department\">
\t                                <span class=\"lbl \">\${data[i]['bmm_employees.username']}</span>
\t                            </td>
\t                            <td class=\"center department\" data-num = \"3\">
\t                                <span class=\"lbl \">\${data[i]['bmm_department.name']}</span>
\t                            </td>
\t                            <td class=\"center status\" data-num = \"4\" data-status=\"\${data[i]['bmm_employees.maritalStatus']}\">
\t                                <span class=\"lbl \">\${maritalStatus[data[i]['bmm_employees.maritalStatus']]}</span>
\t                            </td>
\t
\t                            <td class=\"center officePhone\" data-num = \"5\">
\t                                <span class=\"lbl \">\${data[i]['bmm_employees.officePhone']}</span>
\t                            </td>
\t                            <td class=\"center phone\" data-num = \"6\">
\t                                <span class=\"lbl \">\${data[i]['bmm_employees.mobilePhone']}</span>
\t                            </td>
\t
\t                            <td class=\"center Email\" data-num = \"7\">
\t                                <span class=\"lbl \">\${data[i]['bmm_employees.email']}</span>
\t                            </td>
\t                            <td class=\"center people\" data-num = \"8\">
\t                                <span class=\"lbl \">\${data[i]['name']}</span>
\t                            </td>
\t                        </tr>`
\t\t\t\t);
\t\t\t}

\t\t\t//将数据插入tbody中
\t\t\t\$('#dataList').html(list.join(''));

\t\t\tcs.getNodes([206, 207, 208]);

\t\t\t//删除
\t\t\t\$('.del').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tif(\$(this).parents('tr').find('[data-num=\"4\"]').attr('data-status') != 2) {
\t\t\t\t\tykp.prompt('未离职员工不能删除！');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\tlayer.confirm('确认删除吗？', function(index) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_employees/del',
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tid: id
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt(\"删除成功！\");
\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t\tshowPage();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t});
\t\t\t\t})
\t\t\t\t
\t\t\t})

\t\t\t//移交客户
\t\t\ttransfer_cus();

\t\t\t// layui.use('element',function() {
\t\t\t// \tvar element = layui.element;
\t\t\t// \t\$('.removeBtn').click(function() {
\t\t\t// \tvar removeBtn = \$(this);
\t\t\t// \tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t// \tykp.doAjax({
\t\t\t// \t\turl:\"/api/api_task/get_user_task\",
\t\t\t// \t\tmethod:'get',
\t\t\t// \t\tdata:{
\t\t\t// \t\t\temploye_id:id
\t\t\t// \t\t},
\t\t\t// \t\tcomplete:function() {
\t\t\t// \t\t\tykp.hideBlock2();\t\t\t\t
\t\t\t// \t\t},
\t\t\t// \t\tsuccess:function(res) {
\t\t\t// \t\t\tvar data = res.data;
\t\t\t// \t\t\tvar type = ['','长期合同','一次性合同'];
\t\t\t// \t\t\tvar html = [];
\t\t\t// \t\t\thtml.push(`<div class=\"layui-collapse\" lay-accordion>`);//引入头
\t\t\t// \t\t\tfor(var i in data){
\t\t\t// \t\t\t\thtml.push(`<div class=\"layui-colla-item\">
\t\t\t// \t\t\t\t\t\t\t\t<h2 class=\"layui-colla-title\">
\t\t\t// \t\t\t\t\t\t\t\t\t<label>合同类型：</label>
\t\t\t// \t\t\t\t\t\t    \t\t<label style=\"width:70px !important;text-align:left;\">\${type[data[i]['htm_contract.contract_type']]}</label>
\t\t\t// \t\t\t\t\t\t    \t<i style=\"padding:0 20px;\"></i>
\t\t\t// \t\t\t\t\t\t    \t<label>合同编号：\${data[i]['htm_contract.contract_code']}</label>
\t\t\t// \t\t\t\t\t\t    \t<i class=\"layui-icon layui-colla-icon\"></i>
\t\t\t// \t\t\t\t\t\t\t\t</h2>
\t\t\t// \t\t\t\t    <div class=\"layui-colla-content custom_table\">
\t\t\t// \t\t\t\t\t\t\t<table style=\"margin-bottom:5px;\">
\t\t\t// \t\t\t\t\t\t\t\t<thead>
\t\t\t// \t\t\t\t\t\t\t\t\t<tr>
\t\t\t// \t\t\t\t\t\t\t\t\t\t<th>序号</th>
\t\t\t// \t\t\t\t\t\t\t\t\t\t<th>流程</th>
\t\t\t// \t\t\t\t\t\t\t\t\t\t<th>负责人</th>
\t\t\t// \t\t\t\t\t\t\t\t\t\t<th>移交人</th>
\t\t\t// \t\t\t\t\t\t\t\t\t\t<th>移交原因</th>
\t\t\t// \t\t\t\t\t\t\t\t\t\t<th>操作</th>
\t\t\t// \t\t\t\t\t\t\t\t\t</tr>
\t\t\t// \t\t\t\t\t\t\t\t</thead>
\t\t\t// \t\t\t\t\t\t\t\t<tbody>`);
\t\t\t// \t\t\t\tvar daf= data[i]['flow_owner'];
\t\t\t// \t\t\t\tvar num=0;
\t\t\t// \t\t\t\tvar conid=data[i]['htm_contract.id'];
\t\t\t// \t\t\t\tvar task_id = data[i]['htm_task.id'];
\t\t\t// \t\t\t\tvar customer_id = data[i]['htm_task.customer_id'];

\t\t\t// \t\t\t\tfor(var j in daf){
\t\t\t// \t\t\t\t\tvar relations=[];//移交人id
\t\t\t// \t\t\t\t\tvar rela=daf[j]['relation_staff_id'];
\t\t\t// \t\t\t\t\tif (rela&&rela.length>0) {
\t\t\t// \t\t\t\t\t\tfor(var z in rela){
\t\t\t// \t\t\t\t\t\t\trelations.push(rela[z]['employee_id']);
\t\t\t// \t\t\t\t\t\t}
\t\t\t// \t\t\t\t\t}
\t\t\t// \t\t\t\t\tvar employee_task = daf[j]['staff_id'] == id ? \"style='background:#eaf2f8 !important'\":'';

\t\t\t// \t\t\t\t\thtml.push(`<tr \${employee_task}>
\t\t\t// \t\t\t\t\t\t\t<th>\${++num}</th>
\t\t\t// \t\t\t\t\t\t\t<th contract_id=\"\${conid}\" task_id=\"\${task_id}\"
\t\t\t// \t\t\t\t\t\t\tcustomer_id=\"\${customer_id}\"
\t\t\t// \t\t\t\t\t\t\t>\${daf[j]['flow_name']}</th>
\t\t\t// \t\t\t\t\t\t\t<th staff_id=\"\${daf[j]['staff_id']}\">\${daf[j]['staff_name']}</th>
\t\t\t// \t\t\t\t\t\t\t<th>
\t\t\t// \t\t\t\t\t\t\t<select id=\"employees\" staff_ids=\"\${relations.join(',')}\" class=\"select2 employees select2-hidden-accessible\" affied=\"parent\"  style=\"width:200px\">
\t\t\t// \t\t\t\t\t\t\t</select></th>
\t\t\t// \t\t\t\t\t\t\t<th>
\t\t\t// \t\t\t\t\t\t\t\t<select class=\"select2 reason\" staff_type=\"\${daf[j]['staff_id_marital_status']}\" affied=\"parent\"  style=\"width:130px\">
\t\t\t// \t\t\t\t\t\t\t\t\t<option value=\"\">请选择移交原因</option>
\t\t\t// \t\t\t\t\t\t\t\t\t<option value=\"0\">在职</option>
\t\t\t// \t\t\t\t\t\t\t\t\t<option value=\"1\">请假</option>
\t\t\t// \t\t\t\t\t\t\t\t\t<option value=\"2\">辞职</option>
\t\t\t// \t\t\t\t\t\t\t\t</select>
\t\t\t// \t\t\t\t\t\t\t</th>

\t\t\t// \t\t\t\t\t\t\t<th>
\t\t\t// \t\t\t\t\t\t\t\t<button class=\"btn btn-info hold\" style=\"margin:5px 0;width:50px;height:30px;line-height:15px;padding-left:11px\">保存</button>
\t\t\t// \t\t\t\t\t\t\t</th>
\t\t\t// \t\t\t\t\t\t</tr>`);
\t\t\t// \t\t\t\t}
\t\t\t// \t\t\t\thtml.push(`</tbody></table></div></div>`);
\t\t\t// \t\t\t}

\t\t\t// \t\t\thtml.push(`</div>`);

\t\t\t// \t\t\t\$('#task_con').html(html.join(' '));\t\t\t\t\t\t
\t\t\t// \t\t\tsaveHold(id,removeBtn);

\t\t\t// \t\t\t\$(\"#feedBack .employees\").select2({
\t\t\t// \t\t\t\tallowClear: true
\t\t\t// \t\t\t})

\t\t\t// \t\t\t\$(\"#feedBack .reason\").select2({
\t\t\t// \t\t\t\tallowClear: true
\t\t\t// \t\t\t})

\t\t\t// \t\t\tvar employees= getEmple_2(id);
\t\t\t// \t\t\t\$('#feedBack .employees').each(function(){
\t\t\t// \t\t\t\tvar option ='';
\t\t\t// \t\t\t\tfor(var i in employees){
\t\t\t// \t\t\t\t\t\toption +=`<option value=\"\${employees[i]['id']}\">\${employees[i]['name']}</option>`;
\t\t\t// \t\t\t\t\t}
\t\t\t// \t\t\t\t\t\$(this).html(option);
\t\t\t// \t\t\t\tif (\$(this).attr('staff_ids').trim()){
\t\t\t// \t\t\t\t\t\$(this).val(\$(this).attr('staff_ids').split(',')).trigger('change');
\t\t\t// \t\t\t\t}
\t\t\t// \t\t\t})
\t\t\t// \t\t\t\$('#feedBack .reason').each(function(){
\t\t\t// \t\t\t\tif (\$(this).attr('staff_type')){
\t\t\t// \t\t\t\t\t\$(this).val(\$(this).attr('staff_type')).trigger('change');
\t\t\t// \t\t\t\t}
\t\t\t// \t\t\t})
\t\t\t// \t\t\t\$('#feedBack').show();
\t\t\t// \t\t\telement.init('collapse');
\t\t\t// \t\t},\t\t\t\t\t
\t\t\t// })
\t\t\t// });

\t\t\t// function saveHold(id,removeBtn){
\t\t\t// \t\$('#feedBack .hold').click(function() {
\t\t\t// \t\tvar data = {};
\t\t\t// \t\tvar This = \$(this).parents('tr');\t\t\t\t\t
\t\t\t// \t\tif(This.find('.employees').select2('data').length<=0){
\t\t\t// \t\t\tykp.prompt('指派人选项框不能为空');
\t\t\t// \t\t\treturn ;
\t\t\t// \t\t}
\t\t\t// \t\tif(This.find('.reason').val()==''){
\t\t\t// \t\t\tykp.prompt('移交原因不能为空');
\t\t\t// \t\t\treturn ;
\t\t\t// \t\t}\t\t\t\t\t
\t\t\t// \t\tvar relation_id= This.find('.employees').select2('data');
\t\t\t// \t\t/*var relations = [];
\t\t\t// \t\tfor(var i in relation_id){
\t\t\t// \t\t\trelations.push(relation_id[i]['id']);
\t\t\t// \t\t}*/
\t\t\t// \t\tdata['relation_id'] = relation_id;
\t\t\t// \t\tdata['task_id'] = This.find('th').eq(1).attr('task_id');
\t\t\t// \t\tdata['flow_name'] = This.find('th').eq(1).text();
\t\t\t// \t\tdata['contract_id'] = This.find('th').eq(1).attr('contract_id');
\t\t\t// \t\tdata['company_id'] = This.find('th').eq(1).attr('customer_id');
\t\t\t// \t\tdata['staff_id'] = This.find('th').eq(2).attr('staff_id');
\t\t\t// \t\tdata['transfer_type'] = \$(this).parents('tr').find('.reason').val();
\t\t\t// \t\tdata['employe_id'] = id;\t\t\t\t\t
\t\t\t// \t\tykp.doAjax({
\t\t\t// \t\t\turl:'/api/api_task/set_relation_user_task',
\t\t\t// \t\t\tmethod:'post',
\t\t\t// \t\t\tdata:data,
\t\t\t// \t\t\tsuccess:function(res) {
\t\t\t// \t\t\t\t//removeBtn.click();
\t\t\t// \t\t\t\tykp.prompt('数据更新成功');
\t\t\t// \t\t\t}
\t\t\t// \t\t})
\t\t\t// \t})\t
\t\t\t// }
\t\t\t// })

\t\t\t//编辑
\t\t\teditOrdelete();
\t\t\t//详情
\t\t\t//dispDetail();
\t\t}
\t\t//var employees = [];
\t\t//获取员工
\t\tfunction getEmple1(el, id) {
\t\t\tvar uid = ykp.getCookie('uid');
\t\t\tvar data = {}
\t\t\tif(id == uid) {
\t\t\t\tdata.employe_id = uid
\t\t\t}
\t\t\tykp.doAjax({
\t\t\t\turl: \"/api/api_task/get_relation_user_task\",
\t\t\t\tmethod: \"get\",
\t\t\t\tdata: data,
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tif(res.data.item == \"\") {
\t\t\t\t\t\tykp.prompt(\"暂无指派人\");
\t\t\t\t\t\treturn false;
\t\t\t\t\t} else {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\tvar content = [];
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\tcontent.push('<option value=\"' + data[i]['id'] + '\">' + data[i]['name'] + '</option>');

\t\t\t\t\t\t}
\t\t\t\t\t\t\$(el).append(content.join(''));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}

\t\tfunction getEmple_2(id) {
\t\t\tvar uid = ykp.getCookie('uid');
\t\t\tvar employees = [];
\t\t\tvar data = {}
\t\t\tif(id == uid) {
\t\t\t\tdata.employe_id = uid
\t\t\t}
\t\t\tykp.doAjax({
\t\t\t\turl: \"/api/api_task/get_relation_user_task\",
\t\t\t\tmethod: \"get\",
\t\t\t\tdata: data,
\t\t\t\tasync: false,
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tif(res.data.item == \"\") {
\t\t\t\t\t\tykp.prompt(\"暂无指派人\");
\t\t\t\t\t\treturn false;
\t\t\t\t\t} else {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\tvar content = [];
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\temployees.push({
\t\t\t\t\t\t\t\tid: data[i]['id'],
\t\t\t\t\t\t\t\tname: data[i]['name']
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t\treturn employees;
\t\t}

\t\t//编辑或者删除
\t\tfunction editOrdelete() {
\t\t\t//编辑
\t\t\tvar defaultImgSrc = \"/resource/adimin/assets/images/avatar.png\"; //没有照片用默认的图片
\t\t\t\$('#dynamic-table tbody tr').find('.edit,.info').click(function() {
                console.log(11);

                var editTr = \$(this).parents('tr');
\t\t\t\tvar id = editTr.attr('data-id');
\t\t\t\tvar renwustat = false;
\t\t\t\tshowMark(\"#template\");

                ykp.doAjax({
                    showBlock: true,
                    url: '/api/api_home/get_user_customer',
                    method: 'get',
                    data: {
                        user: id
                    },
                    success: function(res) {
                        renwustat = res.data ==\"\" ? false :true;
\t\t\t\t\t}
                })

\t\t\t\tgetEmp();
\t\t\t\t//\$('#templateBox').find('input[addfield=\"password\"]').hide().prev().hide();
\t\t\t\t//\$('#templateBox').find('input[addfield=\"username\"]').attr('disabled',true);
\t\t\t\tvar text = \$(this).attr('title');
                \$('#showBox .title').text(text == '详情' ? '详情' : '编辑员工');
\t\t\t\tcs.timeplug();
\t\t\t\t//getParentPart('','',true);
\t\t\t\tuploadPhoto();
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_employees/grid',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter: 'bmm_employees.id = ' + id,
\t\t\t\t\t\tlimit: 10
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data.items[0];
\t\t\t\t\t\tfor(var key in data) {
\t\t\t\t\t\t\t\$('#templateBox ').find('[addfield]').not(':hidden').each(function() {
\t\t\t\t\t\t\t\tif(key.replace(/bmm_employees./, '') == \$(this).attr('addfield')) {
\t\t\t\t\t\t\t\t\tif(\$(this).attr('addfield') == 'img_card' || \$(this).attr('addfield') == 'img_school' || \$(this).attr('addfield') == 'img_qualifications' || \$(this).attr('addfield') == 'img_labour' || \$(this).attr('addfield') == 'img_other' || \$(this).attr('addfield') == 'avatar') {
\t\t\t\t\t\t\t\t\t\t\$(this).attr('src', data[key] ? data[key] : defaultImgSrc);
\t\t\t\t\t\t\t\t\t\t\$(this).attr('data-url', data[key]);
\t\t\t\t\t\t\t\t\t} else if(\$(this).attr('addfield') == 'name') {
\t\t\t\t\t\t\t\t\t\t\$(this).val(data['bmm_employees.name']);
\t\t\t\t\t\t\t\t\t} else if(\$(this).attr('addfield') == 'up_user') {
\t\t\t\t\t\t\t\t\t\t\$(this).val(data['bmm_employees.up_user']).trigger('change');
\t\t\t\t\t\t\t\t\t} else if(\$(this).attr('addfield') == 'maritalStatus') {
\t\t\t\t\t\t\t\t\t\t\$(this).val(data['bmm_employees.maritalStatus']).select2();
\t\t\t\t\t\t\t\t\t\tif(data[key] == 2) {
//\t\t\t\t\t\t\t\t\t\t\t\$('#templateBox [addfield=maritalStatus]').attr('disabled', true);
\t\t\t\t\t\t\t\t\t\t\t\$('#templateBox #username').hide();
\t\t\t\t\t\t\t\t\t\t\t\$('#templateBox #username1').show();
\t\t\t\t\t\t\t\t\t\t\tgetUseEmp();
\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\$('#templateCon [addfield=\"username\"]').prop('disabled', true);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}else if(\$(this).attr('addfield') == 'degreeLevel'){
\t\t\t\t\t\t\t\t\t\t\$(this).val(data['bmm_employees.degreeLevel']).select2();
\t\t\t\t\t\t\t\t\t}else if(\$(this).attr('addfield') == 'marriage'){
\t\t\t\t\t\t\t\t\t\t\$(this).val(data['bmm_employees.marriage']).select2();
\t\t\t\t\t\t\t\t\t}else if(\$(this).attr('addfield') == 'sex'){
\t\t\t\t\t\t\t\t\t\t\$(this).val(data['bmm_employees.sex']).select2();
\t\t\t\t\t\t\t\t\t}
 \t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\t\t\t\$(this).val(\$(this).attr('addfield') == 'employedDate' || \$(this).attr('addfield') == 'birthday' ? (data[key] != '0' ? cs.getNowTime(data[key]) : '') : data[key]);
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t}

\t\t\t\t\t\t\$('#templateBox ').unbind('click').find('img').click(function() {
\t\t\t\t\t\t\tvar src = \$(this).attr('src');
\t\t\t\t\t\t\tif(src == '/resource/adimin/assets/images/avatar.png' || src == \"\") {
\t\t\t\t\t\t\t\tykp.prompt('没有图片');
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\$('#templateCon [addfield=\"username\"]').prop('disabled', true);
\t\t\t\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\t\t\t\tvar lsyer = layui.layer;
\t\t\t\t\t\t\t\tlayer.open({
\t\t\t\t\t\t\t\t\ttype: 1,
\t\t\t\t\t\t\t\t\ttitle: \"图片详情\",
\t\t\t\t\t\t\t\t\tskin: 'layer-pic-box', //加上边框
\t\t\t\t\t\t\t\t\tarea: ['270px', '270px'], //宽高
\t\t\t\t\t\t\t\t\tcontent: '<div style=\"width: 200px;height: 200px;margin: auto; margin-top: 11px;\"><img class=\"\" src=\"' + src + '\"  style=\"display: inline-block;object-fit: cover;width: 200px;height: 200px;\"></div>'
\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\$('#templateCon [addfield=\"username\"]').prop('disabled', false);
\t\t\t\t\t\t})
\t\t\t\t\t\tvar maritalStatus = \$('#templateBox [addfield=maritalStatus]').val();
\t\t\t\t\t\t\$('#templateBox #username1').change(function() {
\t\t\t\t\t\t\t//\t\t\t\t\t\t\talert*()
\t\t\t\t\t\t\t\$('#templateBox [addfield=maritalStatus] ').val(0);
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t\$('#templateBox [addfield=maritalStatus]').change(function(){
\t\t\t\t\t\t\tvar val = \$(this).val();
\t\t\t\t\t\t\t\$('#templateBox #username1').find('option').eq(1).prop(\"selected\",true);
\t\t\t\t\t\t})

\t\t\t\t\t\tgetParentPart(true, data['bmm_department.id'], true);
\t\t\t\t\t\tget_role(data['bmm_employees.role_id']);
\t\t\t\t\t\ttext == '详情' ? \$('#templateBox').find('input,select').prop('disabled', true) : \"\";
\t\t\t\t\t\ttext == '详情' ? \$('#templateBox').find('#add').remove() : \"\";
\t\t\t\t\t\t//提交编辑
\t\t\t\t\t\teditInfo(id, maritalStatus,renwustat);
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})
\t\t}

\t\tfunction getUseEmp() {
\t\t\tykp.doAjax({
\t\t\t\turl: \"/api/api_employees/get_empty_emp\",
\t\t\t\tmethod: \"get\",
\t\t\t\tdata: {},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tvar content = [];
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tcontent.push('<option value=\"' + data[i]['username'] + '\">' + data[i]['username'] + '</option>');
\t\t\t\t\t}
\t\t\t\t\t\$('#templateBox #username1').append(content.join(''));
\t\t\t\t}
\t\t\t})
\t\t}

\t\t/*//详情
\t\tfunction dispDetail() {
\t\t\t\$('#dynamic-table tbody sdetail').click(function() {
\t\t\t\tshowMark('#template3');
\t\t\t\tvar id=\$(this).parents('tr').attr('data-id');
\t\t\t\tvar data ={
\t\t\t\t\turl:'',
\t\t\t\t\tmethod:'post',
\t\t\t\t\tdata:{
\t\t\t\t\t\tfilter: 'id = ' + cid
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_customer/info',
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter: 'id = ' + cid
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;\t\t\t\t\t
\t\t\t\t\t\t\$(\"#templateBox .disData0\").html(data['bmm_employees.name']);
\t\t\t\t\t\t\$(\"#templateBox .disData1\").html(data['bmm_employees.empno']);
\t\t\t\t\t\t\$(\"#templateBox .disData2\").html(srank[data['bmm_employees.department']]);
\t\t\t\t\t\t\$(\"#templateBox .disData3\").html(data['bmm_employees.maritalStatus']);
\t\t\t\t\t\t\$(\"#templateBox .disData4\").html(data['bmm_employees.officePhone']);
\t\t\t\t\t\t\$(\"#templateBox .disData5\").html(data['bmm_employees.mobilePhone']);
\t\t\t\t\t\t\$(\"#templateBox .disData6\").html(data['bmm_employees.email']);
\t\t\t\t\t\t\$(\"#templateBox .disData7\").html(data['bmm_employees.role_id']);\t\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t})\t\t\t\t\t
\t\t\t\t
\t\t\t})
\t\t\t\t
\t\t\t
\t\t}*/

\t\tfunction editInfo(id, maritalStatus,renwustat) {

\t\t\t//保存
\t\t\t\$('#showBox #add').click(function() {
\t\t\t\tvar url = '/api/api_employees/add';
\t\t\t\tvar data = {};
\t\t\t\t// var num = 0;
\t\t\t\tvar val = '';
\t\t\t\tvar status = true;
\t\t\t\tvar condition;
\t\t\t\t//获取照片文件信息
\t\t\t\t\$('#templateCon').find('img').each(function(i, e) {
\t\t\t\t\tif(\$(this).attr('data-url') != \"\") {
\t\t\t\t\t\tdata[\$(this).attr('addfield')] = \$(this).attr('data-url');
\t\t\t\t\t\t//console.log(\$(this).attr('addfield')+'='+\$(this).attr('data-url'));
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t\$('#templateCon .item_form').find('input[addfield],select[addfield]').each(function(i, element) {

\t\t\t\t\tif(!\$(this).val() && \$(this).attr('needed') == 'required' && !\$(this).is(\":hidden\")) {
\t\t\t\t\t\tykp.prompt(\$(this).prev().text().replace(/\\*/, '') + \"不能为空！\");
\t\t\t\t\t\tstatus = false;
\t\t\t\t\t\treturn false;
\t\t\t\t\t}

\t\t\t\t\tif(\$(this).attr('addfield') == 'employedDate') {
\t\t\t\t\t\tdata[\$(this).attr('addfield')] = new Date(\$(this).val()) / 1000;
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr('addfield') == 'birthday') {
\t\t\t\t\t\tdata[\$(this).attr('addfield')] = new Date(\$(this).val()) / 1000;
\t\t\t\t\t\treturn true;
\t\t\t\t\t}

\t\t\t\t\tdata[\$(this).attr('addfield')] = \$(this).val();
\t\t\t\t});
\t\t\t\tif(maritalStatus == 2) {
\t\t\t\t\tdata['username'] = \$('#templateCon').find('select[addfield=username]').val();
\t\t\t\t} else {
\t\t\t\t\tdata['username'] = \$('#templateCon').find('input[addfield=username]').val();
\t\t\t\t}
\t\t\t\tif(data['role_id']) {
\t\t\t\t\tdata['role_id'] = data['role_id'].join(',');
\t\t\t\t}
\t\t\t\tif(status) {
\t\t\t\t\tvar result = ykp.getFormData('#templateCon', true);

\t\t\t\t\tif(result.status) {
\t\t\t\t\t\tif(id) {
\t\t\t\t\t\t\tdata.id = id;
\t\t\t\t\t\t\turl = maritalStatus == 2 ? '/api/api_employees/edit_new/' : '/api/api_employees/edit';
\t\t\t\t\t\t}
                        if (data['maritalStatus'] ==2){
                            if(renwustat){
                                ykp.prompt('该员工还有任务请移交后离职！');
                                return false;
                            }
\t\t\t\t\t\t};
                        ykp.doAjax({
                            url: url,
                            method: \"post\",
                            data: data,
                            success: function(res) {
                                if(res.code == 200) {
                                    ykp.prompt((id ? \"编辑成功\" : \"添加成功！\"));
                                    //关闭弹出层
                                    cs.close();
                                    showPage();
                                }
                            }
                        })
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}

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
        return "admin/manage/staff.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  633 => 612,  631 => 611,  19 => 1,);
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
/* 	.tree-open:last-child {*/
/* 		border: none;*/
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
/* 	.tree:before {*/
/* 		content: none;*/
/* 	}*/
/* 	*/
/* 	li._item:before {*/
/* 		display: inline-block;*/
/* 		content: "";*/
/* 		position: absolute;*/
/* 		top: 19px;*/
/* 		bottom: 18px;*/
/* 		left: 6px;*/
/* 		z-index: 1;*/
/* 		border: 1px dotted #67B2DD;*/
/* 		border-width: 0 0 0 1px;*/
/* 	}*/
/* 	*/
/* 	li._item {*/
/* 		position: relative;*/
/* 	}*/
/* 	*/
/* 	#transfer table {*/
/* 		border: none !important;*/
/* 	}*/
/* 	*/
/* 	#transfer th,*/
/* 	#transfer td {*/
/* 		height: 35px !important;*/
/* 		line-height: 35px !important;*/
/* 		font-size: 14px !important;*/
/* 	}*/
/* 	*/
/* 	#department li b {*/
/* 		opacity: 0;*/
/* 	}*/
/* 	#knowledge li a {*/
/*     	   display: inline-block;*/
/*     	width: 74px;*/
/*     }*/
/* 	#department li a:hover > b {*/
/* 		opacity: 1;*/
/* 	}*/
/* 	#addPart{*/
/* 		background: transparent !important;*/
/* 		border: none;*/
/* 		color: #000 !important;*/
/* 	}*/
/* 	#addPart:hover{*/
/* 		background: #1E9FFF  !important;*/
/* 		color: #fff !important;*/
/* 	}*/
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
/* 					<div class="col-sx-4" style=" float: left;margin-right:5px;">*/
/* 						<input type="text" pts=0 sear="bmm_employees.name" placeholder="姓名">*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left;margin-right:5px;">*/
/* 						<input type="number" pts=0 sear="bmm_employees.empno" placeholder="工号" />*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left;margin-right:5px;">*/
/* 						<input type="number" pts=0 sear="bmm_employees.officePhone" placeholder="办公电话" />*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left;margin-right:5px;">*/
/* 						<input type="number" pts=0 sear="bmm_employees.mobilePhone" placeholder="联系电话" />*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left;margin-right:5px;">*/
/* 						<input type="text" pts=0 sear="bmm_employees.email" placeholder="Email" />*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 						<button type="button" title="搜索" id="search" class="btn btn-info btn-sm">*/
/*                            <i class="fa fa-search"></i>*/
/*                         </button>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 						<button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/* 		                    <i class="fa fa-refresh"></i>*/
/* 		                </button>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left;  margin-right: 5px;" contentAuthority="202">*/
/* 						<button id="add" title="添加" type="button" class="btn btn-info btn-sm" style="border-color: #1E9FFF!important;background: #1E9FFF!important;">*/
/* 							<i class="fa fa-plus"></i>*/
/*                         </button>*/
/* 					</div>*/
/* 					<!--<div class="col-sx-4" style=" float: left;  margin-right: 5px; " contentAuthority="203">-->*/
/* 						<!--<button id="addPart" title="添加部门" type="button" class="btn btn-info btn-sm" style="border-color: #32CD32!important;background: #32CD32!important;">-->*/
/* 							<!--<i class="fa fa-plus"></i>-->*/
/*                         <!--</button>-->*/
/* 					<!--</div>-->*/
/* 				</div>*/
/* */
/* 				<div class="row">*/
/* 					<div class="col-sm-2" style="padding:0;border:1px solid #ddd;">*/
/* 						<div class="widget-box widget-color-green2" style="margin:0;">*/
/* 							<div class="widget-header">*/
/* 								<h4 class="widget-title lighter smaller" style="color: cornflowerblue;">*/
/*                                    			 部门管理*/
/*                                 </h4>*/
/* 								<div class="col-sx-4" style=" float: right;  margin-right: 5px; margin-top: 5px;" contentAuthority="203">*/
/* 									<button id="addPart" title="添加部门" type="button" class="btn btn-info btn-sm" >*/
/* 										<i class="fa fa-plus"></i>*/
/* 									</button>*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 							<div class="widget-body">*/
/* 								<div class="widget-main padding-20">*/
/* 									<ul style="list-style-type:none;" class="tree" role="group" id="department">*/
/* */
/* 									</ul>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="col-sm-10">*/
/* 						<div class="custom_table">*/
/* 							<table id="dynamic-table" style="margin-bottom:0px;">*/
/* 								<thead>*/
/* 									<tr class="thColor">*/
/* */
/* 										<th class="center">*/
/* 											序号*/
/* 										</th>*/
/* 										<th class=" center">操作</th>*/
/* 										<th class="center thColor name" data-num="1">姓名</th>*/
/* 										<th class="center thColor name">工号</th>*/
/* 										<th class="center cardNum" data-num="2">用户名</th>*/
/* 										<th class=" center department" data-num="3">部门</th>*/
/* 										<th class=" center status" data-num="4">任职状态</th>*/
/* 										<th class=" center officePhone" data-num="5">办公电话</th>*/
/* 										<th class=" center phone" data-num="6">联系电话</th>*/
/* 										<th class=" center Email" data-num="7">Email</th>*/
/* 										<th class=" center people" data-num="8">角色</th>*/
/* */
/* 									</tr>*/
/* 								</thead>*/
/* */
/* 								<tbody id="dataList">*/
/* */
/* 								</tbody>*/
/* */
/* 							</table>*/
/* */
/* 							*/
/* 						</div>*/
/* 						<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 								<div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
/* 								<div id="pageBar" class="pagination"></div>*/
/* 								<div align="right" style="float: right; margin-right: 15px;  width: 10%;">*/
/* 									<select style="width: 100px;" id="changePageNum">*/
/* 										<option value="10">每页10条</option>*/
/* 										<option value="20">每页20条</option>*/
/* 										<option value="50">每页50条</option>*/
/* 										<option value="100">每页100条</option>*/
/* 										<option value="200">每页200条</option>*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 					</div>*/
/* */
/* 					<div class="row" id="template" style="display:none;">*/
/* 						<div class="widget-box">*/
/* 							<div class="row">*/
/* 								<div class="col-xs-12">*/
/* 									<form class="item_form" role="form">*/
/* 										<div class="form-group">*/
/* 											<label style="width: 100px;"> 部门： </label>*/
/* 											<select addfield="department"></select>*/
/* 											<label style="width: 100px;"> 姓名： </label>*/
/* 											<input type="text" class="in_num " addfield="name" />*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label style="width: 100px;"> 用户名： </label>*/
/* 											<input type="text" class="in_num " id="username" addfield="username" />*/
/* 											<select addfield="username" id="username1" style="display: none;">*/
/* 												<option value="">请选择</option>*/
/* 											</select>*/
/* 											<label style="width: 100px;"> 工号： </label>*/
/* 											<input type="number" class="in_num " addfield="empno" />*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label style="width: 100px;"><i class="reqired_label">*</i> 任职状态： </label>*/
/* 											<select addfield="maritalStatus" needed="required">*/
/* 												<option value="" selected="selected">请选择</option>*/
/* 												<option value="0">在职</option>*/
/* 												<option value="2">离职</option>*/
/* 												<option value="1">请假</option>*/
/* 											</select>*/
/* */
/* 											<label style="width: 100px;"> 密码： </label>*/
/* 											<input type="password" addfield="password" class="in_num" />*/
/* */
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label style="width: 100px;"> 办公电话： </label>*/
/* 											<input type="tel" class="in_num required" addfield="officePhone" />*/
/* 											<label style="width: 100px;"> <i class="reqired_label">*</i>手机号码： </label>*/
/* 											<input type="tel" class="in_num " addfield="mobilePhone" needed="required" msg="请输入正确的手机号码" validate="phone" maxlength="11" />*/
/* */
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label style="width: 100px;"> <i class="reqired_label">*</i>角色： </label>*/
/* 											<!--<input type="text" class="in_num required"  addfield="role_id" />-->*/
/* 											<select multiple id="role_id" name="state" needed="required" addfield="role_id" */
/* 												class="state select2 select2-hidden-accessible" data-placeholder="请选择" style="width: 200px;" tabindex="-1" aria-hidden="true">*/
/* 											</select>*/
/* 											*/
/* 											<label style="width: 100px;"> 教育等级： </label>*/
/* 											<select addfield="degreeLevel">*/
/* 												<option value="0">请选择</option>*/
/* 												<option value="1">高中及以下</option>*/
/* 												<option value="2">技校</option>*/
/* 												<option value="3">专科</option>*/
/* 												<option value="4">本科</option>*/
/* 												<option value="5">硕士及以上</option>*/
/* 											</select>*/
/* 										</div>*/
/* */
/* 										<div class="form-group">*/
/* 											<label style="width: 100px;">入职日期： </label>*/
/* 											<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 												<input class="date-timepicker1 required" addfield="employedDate" msg="入职日期不能为空" style="height: 30px; width: 150px;">*/
/* 												<span class="input-group-addon" style="width:30px;height:30px;">*/
/* 								                        <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 								                    </span>*/
/* 											</div>*/
/* 											<label style="width: 100px;"> 住所： </label>*/
/* 											<input type="text" class="in_num required" addfield="domicile" />*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label style="width: 100px;"> 学校： </label>*/
/* 											<input type="text" class="in_num required" addfield="school" />*/
/* 											<label style="width: 100px;"> 性别： </label>*/
/* 											<select id="sex" addfield="sex">*/
/* 												<option value="0">请选择</option>*/
/* 												<option value="1">男</option>*/
/* 												<option value="2">女</option>*/
/* 											</select>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label style="width: 100px;"> 邮箱： </label>*/
/* 											<input type="text" class="in_num" addfield="email" />*/
/* 											<label style="width: 100px;"> 紧急联系人： </label>*/
/* 											<input type="text" class="in_num required" addfield="emergencyContactName" />*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label style="width: 100px;"> 紧急电话： </label>*/
/* 											<input type="number" class="in_num required" addfield="emergencyPhone" />*/
/* 											<label style="width: 100px;"> 身份证： </label>*/
/* 											<input type="text" class="in_num" addfield="identityCode" maxlength="18" msg="" />*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<!--<label style="width: 100px;"> 当前住所： </label>*/
/* 											<input type="text" addfield="currentAddress" class="in_num required"  />-->*/
/* 											<label style="width: 100px;"> 生日： </label>*/
/* 											<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 												<input class="date-timepicker1" addfield="birthday" style="height: 30px; width: 150px;">*/
/* 												<span class="input-group-addon" style="width:30px;height:30px;">*/
/* 								                    <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 								                </span>*/
/* 											</div>*/
/* 											<label style="width: 100px;"> 通讯地址： </label>*/
/* 											<input type="text" class="in_num " addfield="mail_address" />*/
/* 											<!-- <input type="text" id="birthday" class="in_num required" addfield="birthday" /> -->*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label style="width: 100px;"> 上级员工： </label>*/
/* 											<!--<select id="up_user" class="advandced-search select2-hidden-accssible" addfield="up_user">*/
/* 												<option value="" selected="selected">请选择</option>*/
/* 											</select>-->*/
/* 											 <select id="up_user" addfield="up_user" class="advandced-searchs select2-hidden-accssible"  tabindex="-1" aria-hidden="true">*/
/* 						                  <option value="" selected="selected">请选择</option>*/
/* 					                      </select>*/
/* 											<label style="width: 100px;"> 婚姻状态： </label>*/
/* 											<select addfield="marriage">*/
/* 												<option value="">请选择</option>*/
/* 												<option value="0">未婚</option>*/
/* 												<option value="1">已婚</option>*/
/* 												<option value="2">离婚</option>*/
/* 											</select>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label style="width: 100px;"> 户籍： </label>*/
/* 											<input type="text" class="in_num " addfield="origin" />*/
/* */
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label style="width: 100px; margin-right:5px;"> 头像： </label>*/
/* 											<div class="input-group js_photo" style="display: inline-flex; width: 180px;">*/
/* 												<div class="imgCon">*/
/* 													<img src="/resource/adimin/assets/images/avatar.png" addfield="avatar" data-url="" />*/
/* 													<div class="del">*/
/* 														<span class=" fa fa-pencil">*/
/* 										                       			</span>*/
/* 														<input type="file" class="upload0" style="opacity: 0;" />*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* */
/* 											<label style="width: 100px; margin-right:5px;"> 身份证扫描件： </label>*/
/* 											<div class="input-group js_photo" style="display: inline-flex; width: 180px;">*/
/* 												<div class="imgCon">*/
/* 													<img src="/resource/adimin/assets/images/avatar.png" addfield="img_card" data-url="" />*/
/* 													<div class="del">*/
/* 														<span class=" fa fa-pencil">*/
/* 										                       			</span>*/
/* 														<input type="file" class="upload1" style="opacity: 0;" />*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* */
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label style="width: 100px;margin-right:5px;"> 毕业证书扫描件： </label>*/
/* 											<div class="input-group js_photo" style="display: inline-flex; width: 180px;">*/
/* 												<div class="imgCon">*/
/* 													<img src="/resource/adimin/assets/images/avatar.png" addfield="img_school" data-url="" />*/
/* 													<div class="del">*/
/* 														<span class=" fa fa-pencil"></span>*/
/* 														<input type="file" class="upload2" style="opacity: 0;" />*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<label style="width: 100px; margin-right:5px;"> 资格证件扫描件： </label>*/
/* 											<div class="input-group js_photo" style="display: inline-flex; width: 180px;">*/
/* 												<div class="imgCon">*/
/* 													<img src="/resource/adimin/assets/images/avatar.png" addfield="img_qualifications" data-url="" />*/
/* 													<div class="del">*/
/* 														<span class=" fa fa-pencil">*/
/* 										                       			</span>*/
/* 														<input type="file" class="upload3" style="opacity: 0;" />*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label style="width: 100px;margin-right:5px;"> 劳动合同扫描件： </label>*/
/* 											<div class="input-group js_photo" style="display: inline-flex; width: 180px;">*/
/* 												<div class="imgCon">*/
/* 													<img src="/resource/adimin/assets/images/avatar.png" addfield="img_labour" data-url="" />*/
/* 													<div class="del">*/
/* 														<span class=" fa fa-pencil"></span>*/
/* 														<input type="file" class="upload4" style="opacity: 0;" />*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<label style="width: 100px;margin-right:5px;"> 其他证件扫描件： </label>*/
/* 											<div class="input-group js_photo" style="display: inline-flex; width: 180px;">*/
/* 												<div class="imgCon">*/
/* 													<img src="/resource/adimin/assets/images/avatar.png" addfield="img_other" data-url="" />*/
/* 													<div class="del">*/
/* 														<span class=" fa fa-pencil">*/
/* 										                       			</span>*/
/* 														<input type="file" class="upload5" style="opacity: 0;" />*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* */
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
/* 					<div class="row" id="template3" style="display:none;width:678px;">*/
/* 						<div class="col-sm-12" id="editBox">*/
/* 							<div style="font-weight:bold;margin-bottom:10px;">客户详情</div>*/
/* 							<table width="100%" style="border:1px solid #ddd;border-collapse:collapse;margin-bottom:15px;">*/
/* 								<tr>*/
/* 									<td colspan="4">基本信息</td>*/
/* 								</tr>*/
/* 								<tr style="">*/
/* 									<td style="text-align: right !important">姓名：</td>*/
/* 									<td style="text-align: left !important" class="tdboder">*/
/* 										<span class="disData0"></span>*/
/* 									</td>*/
/* 									<td style="text-align: right !important">工号：</td>*/
/* 									<td style="text-align: left !important">*/
/* 										<span class="disData1"></span>*/
/* 									</td>*/
/* 								</tr>*/
/* 								<tr style="">*/
/* 									<td style="text-align: right !important">部门：</td>*/
/* 									<td style="text-align: left !important" class="tdboder">*/
/* 										<span class="disData2"></span>*/
/* 									</td>*/
/* 									<td style="text-align: right !important">任职状态：</td>*/
/* 									<td style="text-align: left !important">*/
/* 										<span class="disData3"></span>*/
/* 									</td>*/
/* 								</tr>*/
/* 								<tr style="">*/
/* 									<td style="text-align: right !important">办公电话：</td>*/
/* 									<td style="text-align: left !important" class="tdboder">*/
/* 										<span class="disData4"></span>*/
/* 									</td>*/
/* 									<td style="text-align: right !important">联系电话：</td>*/
/* 									<td style="text-align: left !important">*/
/* 										<span class="disData5"></span>*/
/* 									</td>*/
/* 								</tr>*/
/* 								<tr style="">*/
/* 									<td style="text-align: right !important">Email：</td>*/
/* 									<td style="text-align: left !important" class="tdboder">*/
/* 										<span class="disData6"></span>*/
/* 									</td>*/
/* 									<td style="text-align: right !important">角色：</td>*/
/* 									<td style="text-align: left !important">*/
/* 										<span class="disData7"></span>*/
/* 									</td>*/
/* 								</tr>*/
/* 							</table>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="row" id="template2" style="display:none;">*/
/* 						<div class="widget-box">*/
/* 							<div class="row">*/
/* 								<div class="col-xs-12">*/
/* 									<form class="item_form" role="form">*/
/* 										<div class="form-group ">*/
/* 											<label class="item1" style="width: 100px;"> 上级部门： </label>*/
/* 											<!--<select class="item1" affied="parent">*/
/* 												<option value="">请选择部门</option>*/
/* 											</select>-->*/
/* 											<!--<select addfield="department"></select>-->*/
/* 											<select id="depart" class="item1" affied="parent">*/
/* 												<option value="">请选择部门</option>*/
/* 											</select>						*/
/* 											*/
/* 											<label style="width: 100px;"> 名称： </label>*/
/* 											<input type="text" class="in_num required" affied="name" />*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label style="width: 100px;"> 主管： </label>*/
/* 											<select id="emple" affied="director">*/
/* */
/* 											</select>*/
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
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="label_popup" id="transfer" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;max-height: 900px;">*/
/* 						<div style="max-width:900px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 				        box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* */
/* 							<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 								<span>员工</span>*/
/* 									<i style="padding:0 5px;"></i>*/
/* 									<span class="self" style="font-weight:bold"></span>*/
/* 									<i style="padding:0 5px;"></i>*/
/* 									<span>负责的客户移交：</span>*/
/* 								<!--<span style="display: inline-block;font-size:14px;" id="yjtitle"></span>-->*/
/* 								<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 							</div>*/
/* 							<div style="padding: 10px 20px;">*/
/* 								<!--<div style="margin-top: 10px;">*/
/* 									<label style="width: 60px;"> 移交原因： </label>*/
/* 									<select id="reson" affied="parent" style="width:100px;">*/
/* 										<option value="2">离职</option>*/
/* 									</select>*/
/* 								</div>-->*/
/* 								<!--<div style="border-bottom:1px solid #ddd;padding:10px 0;">*/
/* 									*/
/* 								</div>-->*/
/* 								<div style="margin-bottom: 10px; margin-top: 10px;max-height:300px;overflow:auto;">*/
/* 									<table>*/
/* 										<tbody class="transfer_message">*/
/* 											<!-- <tr>*/
/* 												<td>*/
/* 													<span>客户</span>*/
/* 													<i style="padding:0 5px;"></i>*/
/* 													<span class="customers"></span>*/
/* 													<i style="padding:0 5px;"></i>*/
/* 													<span>移交给</span>*/
/* 													<i style="padding:0 5px;"></i>*/
/* 													<span class=""></span>*/
/* 												</td>*/
/* 											</tr> -->*/
/* 										</tbody>*/
/* 									</table>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div style="padding:20px;text-align:right;">*/
/* 								<button class="hold_label btn btn-info btn-sm">保存</button>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 					</div>*/
/* */
/* 					<!-- <div class="label_popup" id="feedBack" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;max-height: 900px;">*/
/* 						<div style="width:900px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 				        box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* */
/* 							<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 								<span style="display: inline-block;">移交信息</span>*/
/* 								<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 							</div>*/
/* 							<div style="padding: 10px 50px;">*/
/* 								<label style="width: 80px;"> 移交原因： </label>*/
/* 								<select id="reson" affied="parent">*/
/* 									<option value="">请选择原因</option>*/
/* 									<option value="0">在职</option>*/
/* 									<option value="1">请假</option>*/
/* 									<option value="2">辞职</option>*/
/* 								</select> */
/* 								<div style="margin-bottom: 10px; margin-top: 10px;"  >*/
/* 										<label style="width: 120px;"> 合同编号</label>*/
/* 										<span style="width: 80px; display: inline-block;"> 合同类型</span>*/
/* 										<span style="margin-right: 20px; margin-left: 20px;     display: inline-block; width:280px;"> 流程</span>*/
/* 										<label style="width: 50px; "> 移交人 </label>*/
/* 								</div>*/
/* 								<div style="margin-top: 10px;overflow: auto;max-height: 600px" id="task_con">*/
/* */
/* 						<div class="layui-collapse" lay-accordion>*/
/* 						  	<div class="layui-colla-item">*/
/* 							    <h2 class="layui-colla-title">杜甫</h2>*/
/* 							    <div class="layui-colla-content layui-show">内容区域</div>*/
/* 						  	</div>*/
/* 						   	<div class="layui-colla-item">*/
/* 							    <h2 class="layui-colla-title">李清照</h2>*/
/* 							    <div class="layui-colla-content layui-show">内容区域</div>*/
/* 						 	</div>*/
/* 							<div class="layui-colla-item">*/
/* 							    <h2 class="layui-colla-title">鲁迅</h2>*/
/* 							    <div class="layui-colla-content layui-show">内容区域</div>*/
/* 						  	</div>*/
/* 						</div>*/
/* */
/* 								</div>*/
/* 							</div>*/
/* 							<div style="padding:15px;text-align:right;">*/
/* 								<button class="close_label">关闭</button>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 					</div> -->*/
/* */
/* 					<div class="label_popup" id="label_popup" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 						<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 					    box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 							<div style="padding: 10px 50px;">*/
/* 								<input type="text" width="200px" style="margin: auto;" id="labelName" />*/
/* 								<!--<hr>-->*/
/* 							</div>*/
/* 							<div style="padding:15px;text-align:right;">*/
/* 								<button class="close_label">关闭</button>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% include 'admin/mark.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/assets/js/LocalResizeIMG.js"></script>*/
/* <script>*/
/* 	jQuery(function($) {*/
/* 		cs.getNodes([203]);*/
/* 		var userinfo = JSON.parse(ykp.getCookie('userinfo'));*/
/* 		if(userinfo['cid'] == '1') {*/
/* 			cs.getNodes([202]);*/
/* 		}*/
/* 		var curent = 0;*/
/* 		var pagesize = 10;*/
/* 		var order = 'bmm_employees.id desc';*/
/* 		var sort_role = ''; //排序规则*/
/* 		var filter = 'bmm_employees.is_del = 0'; //过滤条件*/
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_employees/grid',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: filter,*/
/* 				limit: pagesize*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '.pageBar'*/
/* 			},*/
/* 			contentId: "#datalist", //默认排序*/
/* 			initOrder: "", //初始化sort*/
/* 			defaultOrder: order,*/
/* 			params: [{*/
/* 				id: "#dynamic-table",*/
/* 				field: ["","", "bmm_employees.name", "bmm_employees.empno", "bmm_employees.username", "bmm_department.name", "bmm_employees.maritalStatus", "bmm_employees.officePhone", "bmm_employees.mobilePhone", "bmm_employees.email"]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* */
/* 		// 展开 | 关闭部门管理下面的选项*/
/* */
/* 		function spread() {*/
/* 			$('.tree .control').click(function() {*/
/* 				if($(this).hasClass('_close')) {*/
/* 					$(this).removeClass('_close').removeClass('fa-minus-square').addClass('fa-plus-square').next().next().hide();*/
/* 					return;*/
/* 				} else {*/
/* 					$(this).parent().siblings().find('._close').removeClass('_close').removeClass('fa-minus-square').addClass('fa-plus-square').next().next().hide();*/
/* 					$(this).addClass('_close').addClass('fa-minus-square').removeClass('fa-plus-square').next().next().show();*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 		$('#addPart').click(function() {*/
/* 			showMark("#template2");*/
/* */
/* 			getParentPart(); //获取上级部门*/
/* 			$('#showBox .title').text('添加部门');*/
/* 			getEmple('#templateBox #emple'); //获取员工*/
/* 			add_edit_group();*/
/* 		})*/
/* 		//添加编辑部门*/
/* 		add_edit_group();*/
/* */
/* 		function add_edit_group(id) {*/
/* 			$('#templateBox #add').click(function() {*/
/* */
/* 				var data = {},*/
/* 					status = false,*/
/* 					url = "/api/api_department/add";*/
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
/* 					url = "/api/api_department/edit"*/
/* 				}*/
/* 				if(status) {*/
/* 					ykp.doAjax({*/
/* 						url: url,*/
/* 						method: "post",*/
/* 						data: data,*/
/* 						success: function(res) {*/
/* 							var msg;*/
/* 							msg = id ? '编辑成功!' : '添加成功!'*/
/* 							ykp.prompt(msg);*/
/* 							getDepartment();*/
/* 							cs.close();*/
/* 						}*/
/* 					})*/
/* 				}*/
/* 			})*/
/* 		}*/
/* 		//获取员工*/
/* 		function getEmple(el, director, filter) {*/
/* 			ykp.doAjax({*/
/* 				url: "/api/api_employees/grid",*/
/* 				method: "post",*/
/* 				data: {*/
/* 					limit: pagesize,*/
/* 					order: order,*/
/* 					filter: filter*/
/* 				},*/
/* 				success: function(res) {*/
/* 					if(res.data.item == "") {*/
/* 						ykp.prompt("暂无员工");*/
/* 						return false;*/
/* 					} else {*/
/* 						var data = res.data.items;*/
/* 						var content = [];*/
/* 						for(var i in data) {*/
/* 							if(data[i]['bmm_employees.name']) {*/
/* 								content.push('<option value="' + data[i]['bmm_employees.id'] + '">' + data[i]['bmm_employees.name'] + '</option>');*/
/* 							}*/
/* */
/* 						}*/
/* 						$(el).append(content.join(''));*/
/* 						if(director) {*/
/* 							$(el + ' option[value=' + director + ']').attr('selected', true);*/
/* 						}*/
/* 					}*/
/* */
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//切换每页显示的条目数*/
/* 		$('#changePageNum').change(function() {*/
/* 			pagesize = $(this).val();*/
/* 			ykp.setCookie('page_size', pagesize);*/
/* 			showPage();*/
/* 		})*/
/* */
/* 		//获取上级部门*/
/* 		function getParentPart(status, parent, emplo) {*/
/* 			ykp.doAjax({*/
/* 				url: "/api/api_department/index",*/
/* 				method: "post",*/
/* 				data: {*/
/* 					limit: 999,*/
/* 					filter: emplo ? 'bmm_department.is_del = 0' : 'bmm_department.is_del = 0 and bmm_department.parent = 0'*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var content = [];*/
/* 					content.push('<option value="0">请选择</option>');*/
/* 					if(res.data.item == "") {*/
/* 						ykp.prompt("暂无部门");*/
/* 						return false;*/
/* 					} else {*/
/* 						var data = res.data.items;*/
/* */
/* 						for(var i in data) {*/
/* 							content.push('<option value="' + data[i]['bmm_department.id'] + '">' + data[i]['bmm_department.name'] + '</option>');*/
/* 						}*/
/* 						$('#templateBox [addfield="department"]').html(content.join('')).select2();*/
/*                         $('#templateBox #depart').html(content.join(''));*/
/*  						if(status) {*/
/* 							if(parent != 0) {*/
/* 								$('#templateBox [addfield="department"]').val(parent).trigger('change');*/
/* 								$('#templateBox #depart option[value=' + parent + ']').attr('selected', true);*/
/* 							}*/
/* 						} */
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//添加员工*/
/* 		$('#add').click(function() {*/
/* 			showMark("#template");*/
/* 			getEmp();*/
/* 			$('#showBox .title').text('添加员工');*/
/* 			getParentPart(); //获取上级部门*/
/* */
/* 			getEmp(); //获取员工*/
/* 			cs.timeplug();*/
/* 			get_role();*/
/* 			editInfo();*/
/* 			uploadPhoto();*/
/* */
/* 		});*/
/* */
/* 		//上传照片*/
/* 		function uploadPhoto() {*/
/* 			$('#templateBox input[type=file]').each(function(i) {*/
/* 				$('#templateBox .upload' + i).click(function() {*/
/* 					cs.imgResize('#templateBox .upload' + i, function(res) {*/
/* 						$('#templateBox').find('.js_photo').eq(i).find('img').attr('src', res.data.url);*/
/* 						$('#templateBox').find('.js_photo').eq(i).find('img').attr('data-url', res.data.url);*/
/* 					})*/
/* 				})*/
/* 			})*/
/* 		};*/
/* */
/* 		//获取所有员工*/
/* 		function getEmp() {*/
/* 			ykp.doAjax({*/
/* 				async: false,*/
/* 				url: '/api/api_employees/f7',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					select: 'bmm_employees.id,bmm_employees.name'*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 										$('#templateCon .advandced-searchs').select2({*/
/* 											allowClear: true*/
/* 										});*/
/* 					$('#templateCon #up_user').html("<option value='' selected='selected'>请选择</option>");*/
/* 					for(var i in data) {*/
/* 						if(data[i]['name']) {*/
/* 							$(' .advandced-searchs').append("<option value='" + data[i].id + "' >" + data[i].name + "</option>");*/
/* 						}*/
/* 					}*/
/* */
/* 				}*/
/* 			});*/
/* 		}*/
/* 		//getEmple();*/
/* 		function get_role(id) {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_role/list_role',*/
/* 				method: 'get',*/
/* 				data: {},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					var options = "";*/
/* 					for(var i in data) {*/
/* 						options += '<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>'*/
/* 					}*/
/* 					$('#templateBox #role_id').append(options).select2();*/
/* 					$('#templateBox #role_id').find('option[value=' + id.split(',') + ']').attr("selected", true);*/
/* */
/* 					if(id) {*/
/* 						$('#templateBox #role_id').val(id.split(',')).trigger('change');*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		search();*/
/* */
/* 		function search() {*/
/* 			var data = {*/
/* 				url: '/api/api_employees/grid',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					page_size: pagesize,*/
/* 					limit: 999,*/
/* 					order: 'bmm_employees.id desc'*/
/* 				}*/
/* 			}*/
/* 			cs.doSearch('#search', data, 'filter', false, function(res, _filter) {*/
/* 				filter = _filter;*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center" class="page">暂无数据</div></td></tr>');*/
/* 					return false;*/
/* 				} else {*/
/* 					addList(res);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		showPage();*/
/* */
/* 		getDepartment();*/
/* */
/* 		function getDepartment() {*/
/* 			ykp.doAjax({*/
/* 				url: "/api/api_department/index",*/
/* 				method: "post",*/
/* 				data: {*/
/* 					limit: 999,*/
/* 					filter: 'bmm_department.is_del = 0'*/
/* 				},*/
/* 				success: function(res) {*/
/* 					if(res.data.item == "") {*/
/* 						ykp.prompt("暂无部门");*/
/* 						return false;*/
/* 					}*/
/* 					addDepartment(res);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* 		//添加遍历部门*/
/* 		function addDepartment(res) {*/
/* 			var content = "";*/
/* 			var data = res.data.items;*/
/* 			var department = [];*/
/* 			for(var i in data) {*/
/* 				if(data[i]['bmm_department.parent'] == 0) {*/
/* 					department.push({*/
/* 						name: data[i]['bmm_department.name'],*/
/* 						id: data[i]['bmm_department.id'],*/
/* 						parent: data[i]['bmm_department.parent'],			*/
/* 						childen: []*/
/* 					});*/
/* 				}*/
/* 			}*/
/* */
/* 			for(var i in data) {*/
/* 				for(var j in department) {*/
/* 					if(data[i]['bmm_department.parent'] != 0 && data[i]['bmm_department.parent'] == department[j].id) {*/
/* 						department[j].childen.push({*/
/* 							name: data[i]['bmm_department.name'],*/
/* 							id: data[i]['bmm_department.id'],*/
/* 							parent: data[i]['bmm_department.parent'],*/
/* 							director: data[i]['bmm_department.director']*/
/* 						})*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 			var childen;*/
/* 			for(var i in department) {*/
/* 				childen = '';*/
/* 				if(department[i].childen.length == 0) {*/
/* 					content += `*/
/* 										<li style="padding:4px 0 4px 0" class="_item">*/
/* 											<i class="fa fa-plus-square control" aria-hidden="true"></i>*/
/* 											<a data-id="${department[i].id}" class="parent"><span>${department[i].name}</span>*/
/* 												<b style="float: right;"  contentAuthority="204">*/
/* 												<i style="color:red" class="ace-icon fa fa-trash-o gdel"></i>*/
/* 												</b>*/
/* 												<b style="float: right;padding-right:5px;position:relative;top:2px;"  contentAuthority="205">*/
/* 												<i class="ace-icon fa fa-pencil align-top gedit"></i>*/
/* 												</b>*/
/* 											</a>											*/
/* 										</li>`;*/
/* 				} else {*/
/* 					for(var j in department[i].childen) {*/
/* 						childen += `<li style="padding:4px 0 4px 20px;background:'red'" class="tree-item" role="treeitem">*/
/* 						*/
/* 													<a class="department" data-id="${department[i].childen[j].id}" data-director="${department[i].childen[j].director}" data-parent="${department[i].childen[j].parent}" class="childen" href="#" style="text-decoration:none;"><span>${department[i].childen[j].name}</span>*/
/* 													<b style="float: right;"  contentAuthority="204">*/
/* 													<i style="color:red" class="ace-icon fa fa-trash-o gdel">*/
/* 													</i>*/
/* 													</b>*/
/* 													<b style="float: right;padding-right:5px;position:relative;top:2px;"  contentAuthority="205">*/
/* 													<i class="ace-icon fa fa-pencil align-top gedit"></i>*/
/* 													</b>*/
/* 													</a>*/
/* 												</li>`;*/
/* 					}*/
/* */
/* 					content += `*/
/* 										<li style="padding:4px 0 4px 0;background:'green'" class="_item showchild">*/
/* 											<i class="fa fa-plus-square control" aria-hidden="true"></i>*/
/* 											<a class="department" data-id="${department[i].id}" data-parent="${department[i].parent}" data-director="${department[i].director}">*/
/* 											<span>${department[i].name}</span>*/
/* 											<b style="float: right;"  contentAuthority="204">*/
/* 											<i style="color:red" class="ace-icon fa fa-trash-o gdel"></i>*/
/* 											</b>*/
/* 											<b style="float: right;padding-right:5px;position:relative;top:2px;"  contentAuthority="205">*/
/* 											<i class="ace-icon fa fa-pencil align-top gedit"></i>*/
/* 											</b>*/
/* 											</a>*/
/* 											<ul style="list-style-type:none;display:none;">*/
/* 												${childen}*/
/* 											</ul>*/
/* 										</li>`;*/
/* */
/* 				}*/
/* 			}*/
/* 			$('#department').html(content);*/
/* */
/* 			cs.getNodes([204, 205]);*/
/* */
/* 			spread();*/
/* */
/* 			// $('.department').click(function() {*/
/* 			// 	var id = $(this).attr('data-id');*/
/* 			// 	showPage(id);*/
/* 			// })*/
/* */
/* 			//删除分组*/
/* 			$('.gdel').click(function() {*/
/* 				var id = $(this).parents('a').attr('data-id');*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_department/del',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						id: id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						ykp.prompt("删除成功");*/
/* 						showPage();*/
/* 						getDepartment();*/
/* 					}*/
/* 				})*/
/* 			})*/
/* */
/* 			$('.gedit').click(function() {*/
/* 				var id = $(this).parents('a').attr('data-id');*/
/* 				showMark('#template2');*/
/* 				$('#templateCon #title').text('编辑分组');*/
/* 				var parent = $(this).parents('a').attr('data-parent');*/
/* 				if(parent == 0) {*/
/* 					$('#templateBox .item1').remove();*/
/* 				}*/
/* 				var director = $(this).parents('a').attr('data-director');*/
/* 				getEmple('#templateBox #emple', director); //获取员工*/
/* 				getParentPart(true, parent);*/
/* 				$('#templateCon').find('input').val($(this).parents('a').find('span').eq(0).text().trim());*/
/* 				add_edit_group(id);*/
/* 			})*/
/* */
/* 			/*$('.department').click(function() {*/
/* 				var id = $(this).attr('data-id');*/
/* 				showPage(id); //获取员工*/
/* 			})*//* */
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
/* //			$('.tree-item a,.showchild a').find('span').click(function() {*/
/* //				var cate_id = $(this).parent().attr('data-id');*/
/* //				console.log(cate_id)*/
/* //				showPage(cate_id);*/
/* //			})*/
/*            //点击显示对应的页面*/
/* 		   $('._item span').click(function(){*/
/* 		   	var cate_id = $(this).parent().attr('data-id');*/
/* 		   	showPage(cate_id);*/
/* 		   })*/
/* 		}*/
/* */
/* 		$('#flush').click(function() {*/
/* 			$('#topTool input').val('');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			filter = 'bmm_employees.is_del = 0';*/
/* 			showPage();*/
/* 		})*/
/* */
/* 		function showPage(filter) {*/
/* 			var data = {*/
/* 				filter: "bmm_employees.is_del = 0"*/
/* 			}*/
/* 			data.filter = filter ? (data.filter += " and bmm_employees.department = " + filter) : data.filter;*/
/* 			data.order = 'bmm_employees.id desc';*/
/* 			data.limit = pagesize;*/
/* 			//获取数据*/
/* 			ykp.list({*/
/* 				url: '/api/api_employees/grid',*/
/* 				method: 'post',*/
/* 				data: data,*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt('暂无数据！');*/
/* 						}, 1000);*/
/* 						$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center" class="page">暂无数据</div></td></tr>');*/
/* 					} else {*/
/* 						addList(res);*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		var employees = {};*/
/* 		get_employees();*/
/* */
/* 		function get_employees() {*/
/* 			ykp.doAjax({*/
/* 				async: false,*/
/* 				url: '/api/api_employees/f7',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					select: 'bmm_employees.id,bmm_employees.name',*/
/* 					filter: 'bmm_employees.is_del = 0'*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					for(var i in data) {*/
/* 						employees[data[i]['id']] = data[i]['name']*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//保存移交信息*/
/* 		function save_transfer(user) {*/
/* 			$('#transfer .hold_label').unbind('click').click(function() {*/
/* */
/*                 var postdata = {*/
/* 					user: user,*/
/* 					maritalStatus: 2*/
/* 				};*/
/* */
/*                 var colData = [];*/
/* 				var flag = false;*/
/*                 if($('.transfer_message .batch').prop('disabled')) {*/
/* 					$('.transfer_message .single').each(function(i, e) {*/
/* 						if($(this).val()) {*/
/* 							colData.push({*/
/* 								customer_id: $(this).parents('tr').find('[field="customer_id"]').attr('customer_id'),*/
/* 								toUser: $(this).val()*/
/* 							});*/
/*                         }*/
/* 					});*/
/* */
/* 				}*/
/* */
/*                 if(!$('.transfer_message .batch').prop('disabled')) {*/
/* 					if(!$('.transfer_message .batch').val()) {*/
/*                         flag = true;*/
/* 					}*/
/* 					$('.transfer_message ._batch').each(function(i, e) {*/
/* 						if($(this).find('[name="check"]').prop('checked')) {*/
/* 							colData.push({*/
/* 								customer_id: $(this).find('[field="customer_id"]').attr('customer_id'),*/
/* 								toUser: $('.transfer_message .batch').val()*/
/* 							});*/
/* 						}*/
/* 					});*/
/* 				}*/
/*                 if(flag) {*/
/* 					ykp.prompt('请选择批量移交人！');*/
/* 					return;*/
/* 				}*/
/*                 if(colData.length <= 0) {*/
/* 					ykp.prompt('没有移交信息!');*/
/* 					return;*/
/* 				}*/
/* */
/* 				postdata['colData'] = JSON.stringify(colData);*/
/* */
/*                 ykp.doAjax({*/
/*                     url: '/api/api_home/set_user_customer',*/
/*                     method: 'post',*/
/*                     data: postdata,*/
/*                     success: function(res) {*/
/*                         ykp.prompt('移交信息提交成功');*/
/*                         $('#transfer').fadeOut();*/
/*                         showPage();*/
/*                     }*/
/*                 });*/
/* 			});*/
/* 		}*/
/* */
/* 		//移交客户*/
/* 		function transfer_cus() {*/
/* 			$('.removeBtn').unbind('click').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				$('#transfer').show();*/
/* */
/* 				//关闭弹窗*/
/* 				cs.closePop();*/
/* */
/* 				//保存移交信息*/
/* 				save_transfer(id);*/
/* */
/* 				$('#transfer .self').text(employees[id]);*/
/* */
/* 				ykp.doAjax({*/
/* 					showBlock: true,*/
/* 					url: '/api/api_home/get_user_customer',*/
/* 					method: 'get',*/
/* 					data: {*/
/* 						user: id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* */
/* 						//员工所负责的客户数据*/
/* 						var transfer_html = [];*/
/* */
/* 						//批量移交*/
/* 						transfer_html.push(*/
/* 							`<tr>*/
/* 								<td>*/
/* 									<label class="pos-rel" title="全选 反选">*/
/*                                         <input type="checkbox" class="ace checkAll">*/
/*                                         <span class="lbl"></span>*/
/*                                     </label>*/
/* 								</td>*/
/* 								<td colspan="3">*/
/* 									<span>批量移交给：</span>*/
/* 									<select class="employees select2-hidden-accessible batch" style="width:200px" disabled>*/
/* 										<option value="">请选择</option>*/
/* 									</select>*/
/* 								</td>*/
/* 							</tr>`*/
/* 						);*/
/* */
/* 						for(var i in data) {*/
/* 							transfer_html.push(*/
/* 								`<tr class="_batch">*/
/* 									<td>*/
/* 										<label class="pos-rel">*/
/* 	                                        <input type="checkbox" class="ace" name="check">*/
/* 	                                        <span class="lbl"></span>*/
/* 	                                    </label>*/
/* 									</td>*/
/* 									<td>*/
/* 										<span>客户</span>*/
/* 									</td>*/
/* 									<td>*/
/* 										<span class="customers" field="customer_id" customer_id="${data[i]['id']}">${data[i]['name']}</span>*/
/* 									</td>*/
/* 									<td>*/
/* 										<span>移交给</span>*/
/* 										<i style="padding:0 5px;"></i>*/
/* 										<span class="transfer_emp">*/
/* 											<select class="employees select2-hidden-accessible single" style="width:200px">*/
/* 												<option value="">请选择</option>*/
/* 											</select>*/
/* 										</span>*/
/* 									</td>*/
/* 								</tr>`*/
/* 							);*/
/* 						}*/
/* */
/* 						$('.transfer_message').html(transfer_html.join(''));*/
/* */
/* 						//全选或反选*/
/* 						// checkAll();*/
/* */
/* 						//批量移交 或者 单个移交以及全选或反选*/
/* 						batchOrSingle();*/
/* */
/* 						//将员工加载到select中*/
/* 						$('.transfer_message .employees').select2({*/
/* 							allowClear: true*/
/* 						});*/
/* 						var employees_html = [];*/
/* 						for(var i in employees) {*/
/* 							if(employees[i]) {*/
/* 								employees_html.push('<option value="' + i + '">' + employees[i] + '</option>');*/
/* 							}*/
/* 						}*/
/* 						$('.transfer_message .employees').append(employees_html.join(''));*/
/* 					}*/
/* 				});*/
/* 			});*/
/* 		}*/
/* */
/* 		//批量移交 或者 单个移交 以及全选或反选*/
/* 		function batchOrSingle() {*/
/* 			$('.transfer_message input[type="checkbox"]').unbind('click').click(function() {*/
/* 				//全选或反选*/
/* 				if($(this).hasClass('checkAll')) {*/
/* 					$('.transfer_message [name="check"]').prop('checked', $(this).prop('checked'));*/
/* 				}*/
/* */
/* 				//批量移交 或者 单个移交 num > 0 时批量移交，小于0单个移交*/
/* 				var num = 0;*/
/* 				$('.transfer_message [name="check"]').each(function(i, e) {*/
/* 					if($(this).prop('checked')) {*/
/* 						num++;*/
/* 					}*/
/* 				});*/
/* */
/* 				if(num > 0) {*/
/* 					$('.transfer_message .single').prop('disabled', true);*/
/* 					$('.transfer_message .batch').prop('disabled', false);*/
/* */
/* 				} else {*/
/* 					$('.transfer_message .single').prop('disabled', false);*/
/* 					$('.transfer_message .batch').prop('disabled', true);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		// function checkAll(){*/
/* 		// 	$('.transfer_message .checkAll').unbind('click').click(function(){*/
/* */
/* 		// 	});*/
/* 		// };*/
/* */
/* 		function addList(res) {*/
/* 			var html = '';*/
/* 			var ths = $('.thColor th');*/
/* 			var styles = [];*/
/* 			var data = res.data.items;*/
/* 			curent = res.data.curPage;*/
/* 			var list = [];*/
/* 			var maritalStatus = ['在职', '请假', '离职'];*/
/* 			var num = 0;*/
/* 			for(var i in data) {*/
/* 				num++;*/
/* 				list.push(*/
/* 					`<tr data-id=${data[i]['bmm_employees.id']}>*/
/* 	                            <td class="center">*/
/* 	                                ${(pagesize*(curent-1)) +num}*/
/* 	                            </td>*/
/* 	                            <td class="center ">*/
/* 	                                <label class="pos-rel">*/
/* 	                                	<a class="btOrange info" href="#" style=" color:#fff !important" title="详情"><i class="fa fa-info "></i></a>*/
/*                                   <a href="#" id="edit${i}" class="edit btBlue" style="color:#fff !important" contentAuthority="206" title="编辑"><i class="fa fa-pencil-square-o"></i></a>*/
/* 	                                    <a href="#" id="del${i}" class="del btRed" style="color:#fff !important" contentAuthority="207" title="删除"><i class="fa fa-trash-o"></i></a>*/
/* 	                                    <a href="#" id="del${i}" class="removeBtn btBlue" style="color:#fff !important" contentAuthority="208" title="移交"><i class="fa fa-hand-o-right"></i></a>*/
/* 	                                </label>*/
/* 	                            </td>*/
/* 	                            <td class="center name" data-num = "1">*/
/* 	                                <span class="lbl ">${data[i]['bmm_employees.name']}</span>*/
/* 	                            </td>*/
/* 	                            <td class="center cardNum" data-num = "2">*/
/* 	                                <span class="lbl  ">${data[i]['bmm_employees.empno']}</span>*/
/* 	                            </td>*/
/* 	                            <td class="center department">*/
/* 	                                <span class="lbl ">${data[i]['bmm_employees.username']}</span>*/
/* 	                            </td>*/
/* 	                            <td class="center department" data-num = "3">*/
/* 	                                <span class="lbl ">${data[i]['bmm_department.name']}</span>*/
/* 	                            </td>*/
/* 	                            <td class="center status" data-num = "4" data-status="${data[i]['bmm_employees.maritalStatus']}">*/
/* 	                                <span class="lbl ">${maritalStatus[data[i]['bmm_employees.maritalStatus']]}</span>*/
/* 	                            </td>*/
/* 	*/
/* 	                            <td class="center officePhone" data-num = "5">*/
/* 	                                <span class="lbl ">${data[i]['bmm_employees.officePhone']}</span>*/
/* 	                            </td>*/
/* 	                            <td class="center phone" data-num = "6">*/
/* 	                                <span class="lbl ">${data[i]['bmm_employees.mobilePhone']}</span>*/
/* 	                            </td>*/
/* 	*/
/* 	                            <td class="center Email" data-num = "7">*/
/* 	                                <span class="lbl ">${data[i]['bmm_employees.email']}</span>*/
/* 	                            </td>*/
/* 	                            <td class="center people" data-num = "8">*/
/* 	                                <span class="lbl ">${data[i]['name']}</span>*/
/* 	                            </td>*/
/* 	                        </tr>`*/
/* 				);*/
/* 			}*/
/* */
/* 			//将数据插入tbody中*/
/* 			$('#dataList').html(list.join(''));*/
/* */
/* 			cs.getNodes([206, 207, 208]);*/
/* */
/* 			//删除*/
/* 			$('.del').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				if($(this).parents('tr').find('[data-num="4"]').attr('data-status') != 2) {*/
/* 					ykp.prompt('未离职员工不能删除！');*/
/* 					return;*/
/* 				}*/
/* 				layui.use('layer', function() {*/
/* 					var layer = layui.layer;*/
/* 					layer.confirm('确认删除吗？', function(index) {*/
/* 						ykp.doAjax({*/
/* 							url: '/api/api_employees/del',*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								id: id*/
/* 							},*/
/* 							success: function(res) {*/
/* 								ykp.prompt("删除成功！");*/
/* 								layer.closeAll();*/
/* 								showPage();*/
/* 							}*/
/* 						})*/
/* 					});*/
/* 				})*/
/* 				*/
/* 			})*/
/* */
/* 			//移交客户*/
/* 			transfer_cus();*/
/* */
/* 			// layui.use('element',function() {*/
/* 			// 	var element = layui.element;*/
/* 			// 	$('.removeBtn').click(function() {*/
/* 			// 	var removeBtn = $(this);*/
/* 			// 	var id = $(this).parents('tr').attr('data-id');*/
/* 			// 	ykp.doAjax({*/
/* 			// 		url:"/api/api_task/get_user_task",*/
/* 			// 		method:'get',*/
/* 			// 		data:{*/
/* 			// 			employe_id:id*/
/* 			// 		},*/
/* 			// 		complete:function() {*/
/* 			// 			ykp.hideBlock2();				*/
/* 			// 		},*/
/* 			// 		success:function(res) {*/
/* 			// 			var data = res.data;*/
/* 			// 			var type = ['','长期合同','一次性合同'];*/
/* 			// 			var html = [];*/
/* 			// 			html.push(`<div class="layui-collapse" lay-accordion>`);//引入头*/
/* 			// 			for(var i in data){*/
/* 			// 				html.push(`<div class="layui-colla-item">*/
/* 			// 								<h2 class="layui-colla-title">*/
/* 			// 									<label>合同类型：</label>*/
/* 			// 						    		<label style="width:70px !important;text-align:left;">${type[data[i]['htm_contract.contract_type']]}</label>*/
/* 			// 						    	<i style="padding:0 20px;"></i>*/
/* 			// 						    	<label>合同编号：${data[i]['htm_contract.contract_code']}</label>*/
/* 			// 						    	<i class="layui-icon layui-colla-icon"></i>*/
/* 			// 								</h2>*/
/* 			// 				    <div class="layui-colla-content custom_table">*/
/* 			// 							<table style="margin-bottom:5px;">*/
/* 			// 								<thead>*/
/* 			// 									<tr>*/
/* 			// 										<th>序号</th>*/
/* 			// 										<th>流程</th>*/
/* 			// 										<th>负责人</th>*/
/* 			// 										<th>移交人</th>*/
/* 			// 										<th>移交原因</th>*/
/* 			// 										<th>操作</th>*/
/* 			// 									</tr>*/
/* 			// 								</thead>*/
/* 			// 								<tbody>`);*/
/* 			// 				var daf= data[i]['flow_owner'];*/
/* 			// 				var num=0;*/
/* 			// 				var conid=data[i]['htm_contract.id'];*/
/* 			// 				var task_id = data[i]['htm_task.id'];*/
/* 			// 				var customer_id = data[i]['htm_task.customer_id'];*/
/* */
/* 			// 				for(var j in daf){*/
/* 			// 					var relations=[];//移交人id*/
/* 			// 					var rela=daf[j]['relation_staff_id'];*/
/* 			// 					if (rela&&rela.length>0) {*/
/* 			// 						for(var z in rela){*/
/* 			// 							relations.push(rela[z]['employee_id']);*/
/* 			// 						}*/
/* 			// 					}*/
/* 			// 					var employee_task = daf[j]['staff_id'] == id ? "style='background:#eaf2f8 !important'":'';*/
/* */
/* 			// 					html.push(`<tr ${employee_task}>*/
/* 			// 							<th>${++num}</th>*/
/* 			// 							<th contract_id="${conid}" task_id="${task_id}"*/
/* 			// 							customer_id="${customer_id}"*/
/* 			// 							>${daf[j]['flow_name']}</th>*/
/* 			// 							<th staff_id="${daf[j]['staff_id']}">${daf[j]['staff_name']}</th>*/
/* 			// 							<th>*/
/* 			// 							<select id="employees" staff_ids="${relations.join(',')}" class="select2 employees select2-hidden-accessible" affied="parent"  style="width:200px">*/
/* 			// 							</select></th>*/
/* 			// 							<th>*/
/* 			// 								<select class="select2 reason" staff_type="${daf[j]['staff_id_marital_status']}" affied="parent"  style="width:130px">*/
/* 			// 									<option value="">请选择移交原因</option>*/
/* 			// 									<option value="0">在职</option>*/
/* 			// 									<option value="1">请假</option>*/
/* 			// 									<option value="2">辞职</option>*/
/* 			// 								</select>*/
/* 			// 							</th>*/
/* */
/* 			// 							<th>*/
/* 			// 								<button class="btn btn-info hold" style="margin:5px 0;width:50px;height:30px;line-height:15px;padding-left:11px">保存</button>*/
/* 			// 							</th>*/
/* 			// 						</tr>`);*/
/* 			// 				}*/
/* 			// 				html.push(`</tbody></table></div></div>`);*/
/* 			// 			}*/
/* */
/* 			// 			html.push(`</div>`);*/
/* */
/* 			// 			$('#task_con').html(html.join(' '));						*/
/* 			// 			saveHold(id,removeBtn);*/
/* */
/* 			// 			$("#feedBack .employees").select2({*/
/* 			// 				allowClear: true*/
/* 			// 			})*/
/* */
/* 			// 			$("#feedBack .reason").select2({*/
/* 			// 				allowClear: true*/
/* 			// 			})*/
/* */
/* 			// 			var employees= getEmple_2(id);*/
/* 			// 			$('#feedBack .employees').each(function(){*/
/* 			// 				var option ='';*/
/* 			// 				for(var i in employees){*/
/* 			// 						option +=`<option value="${employees[i]['id']}">${employees[i]['name']}</option>`;*/
/* 			// 					}*/
/* 			// 					$(this).html(option);*/
/* 			// 				if ($(this).attr('staff_ids').trim()){*/
/* 			// 					$(this).val($(this).attr('staff_ids').split(',')).trigger('change');*/
/* 			// 				}*/
/* 			// 			})*/
/* 			// 			$('#feedBack .reason').each(function(){*/
/* 			// 				if ($(this).attr('staff_type')){*/
/* 			// 					$(this).val($(this).attr('staff_type')).trigger('change');*/
/* 			// 				}*/
/* 			// 			})*/
/* 			// 			$('#feedBack').show();*/
/* 			// 			element.init('collapse');*/
/* 			// 		},					*/
/* 			// })*/
/* 			// });*/
/* */
/* 			// function saveHold(id,removeBtn){*/
/* 			// 	$('#feedBack .hold').click(function() {*/
/* 			// 		var data = {};*/
/* 			// 		var This = $(this).parents('tr');					*/
/* 			// 		if(This.find('.employees').select2('data').length<=0){*/
/* 			// 			ykp.prompt('指派人选项框不能为空');*/
/* 			// 			return ;*/
/* 			// 		}*/
/* 			// 		if(This.find('.reason').val()==''){*/
/* 			// 			ykp.prompt('移交原因不能为空');*/
/* 			// 			return ;*/
/* 			// 		}					*/
/* 			// 		var relation_id= This.find('.employees').select2('data');*/
/* 			// 		/*var relations = [];*/
/* 			// 		for(var i in relation_id){*/
/* 			// 			relations.push(relation_id[i]['id']);*/
/* 			// 		}*//* */
/* 			// 		data['relation_id'] = relation_id;*/
/* 			// 		data['task_id'] = This.find('th').eq(1).attr('task_id');*/
/* 			// 		data['flow_name'] = This.find('th').eq(1).text();*/
/* 			// 		data['contract_id'] = This.find('th').eq(1).attr('contract_id');*/
/* 			// 		data['company_id'] = This.find('th').eq(1).attr('customer_id');*/
/* 			// 		data['staff_id'] = This.find('th').eq(2).attr('staff_id');*/
/* 			// 		data['transfer_type'] = $(this).parents('tr').find('.reason').val();*/
/* 			// 		data['employe_id'] = id;					*/
/* 			// 		ykp.doAjax({*/
/* 			// 			url:'/api/api_task/set_relation_user_task',*/
/* 			// 			method:'post',*/
/* 			// 			data:data,*/
/* 			// 			success:function(res) {*/
/* 			// 				//removeBtn.click();*/
/* 			// 				ykp.prompt('数据更新成功');*/
/* 			// 			}*/
/* 			// 		})*/
/* 			// 	})	*/
/* 			// }*/
/* 			// })*/
/* */
/* 			//编辑*/
/* 			editOrdelete();*/
/* 			//详情*/
/* 			//dispDetail();*/
/* 		}*/
/* 		//var employees = [];*/
/* 		//获取员工*/
/* 		function getEmple1(el, id) {*/
/* 			var uid = ykp.getCookie('uid');*/
/* 			var data = {}*/
/* 			if(id == uid) {*/
/* 				data.employe_id = uid*/
/* 			}*/
/* 			ykp.doAjax({*/
/* 				url: "/api/api_task/get_relation_user_task",*/
/* 				method: "get",*/
/* 				data: data,*/
/* 				success: function(res) {*/
/* 					if(res.data.item == "") {*/
/* 						ykp.prompt("暂无指派人");*/
/* 						return false;*/
/* 					} else {*/
/* 						var data = res.data;*/
/* 						var content = [];*/
/* 						for(var i in data) {*/
/* 							content.push('<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>');*/
/* */
/* 						}*/
/* 						$(el).append(content.join(''));*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		function getEmple_2(id) {*/
/* 			var uid = ykp.getCookie('uid');*/
/* 			var employees = [];*/
/* 			var data = {}*/
/* 			if(id == uid) {*/
/* 				data.employe_id = uid*/
/* 			}*/
/* 			ykp.doAjax({*/
/* 				url: "/api/api_task/get_relation_user_task",*/
/* 				method: "get",*/
/* 				data: data,*/
/* 				async: false,*/
/* 				success: function(res) {*/
/* 					if(res.data.item == "") {*/
/* 						ykp.prompt("暂无指派人");*/
/* 						return false;*/
/* 					} else {*/
/* 						var data = res.data;*/
/* 						var content = [];*/
/* 						for(var i in data) {*/
/* 							employees.push({*/
/* 								id: data[i]['id'],*/
/* 								name: data[i]['name']*/
/* 							});*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 			return employees;*/
/* 		}*/
/* */
/* 		//编辑或者删除*/
/* 		function editOrdelete() {*/
/* 			//编辑*/
/* 			var defaultImgSrc = "/resource/adimin/assets/images/avatar.png"; //没有照片用默认的图片*/
/* 			$('#dynamic-table tbody tr').find('.edit,.info').click(function() {*/
/*                 console.log(11);*/
/* */
/*                 var editTr = $(this).parents('tr');*/
/* 				var id = editTr.attr('data-id');*/
/* 				var renwustat = false;*/
/* 				showMark("#template");*/
/* */
/*                 ykp.doAjax({*/
/*                     showBlock: true,*/
/*                     url: '/api/api_home/get_user_customer',*/
/*                     method: 'get',*/
/*                     data: {*/
/*                         user: id*/
/*                     },*/
/*                     success: function(res) {*/
/*                         renwustat = res.data =="" ? false :true;*/
/* 					}*/
/*                 })*/
/* */
/* 				getEmp();*/
/* 				//$('#templateBox').find('input[addfield="password"]').hide().prev().hide();*/
/* 				//$('#templateBox').find('input[addfield="username"]').attr('disabled',true);*/
/* 				var text = $(this).attr('title');*/
/*                 $('#showBox .title').text(text == '详情' ? '详情' : '编辑员工');*/
/* 				cs.timeplug();*/
/* 				//getParentPart('','',true);*/
/* 				uploadPhoto();*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_employees/grid',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						filter: 'bmm_employees.id = ' + id,*/
/* 						limit: 10*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data.items[0];*/
/* 						for(var key in data) {*/
/* 							$('#templateBox ').find('[addfield]').not(':hidden').each(function() {*/
/* 								if(key.replace(/bmm_employees./, '') == $(this).attr('addfield')) {*/
/* 									if($(this).attr('addfield') == 'img_card' || $(this).attr('addfield') == 'img_school' || $(this).attr('addfield') == 'img_qualifications' || $(this).attr('addfield') == 'img_labour' || $(this).attr('addfield') == 'img_other' || $(this).attr('addfield') == 'avatar') {*/
/* 										$(this).attr('src', data[key] ? data[key] : defaultImgSrc);*/
/* 										$(this).attr('data-url', data[key]);*/
/* 									} else if($(this).attr('addfield') == 'name') {*/
/* 										$(this).val(data['bmm_employees.name']);*/
/* 									} else if($(this).attr('addfield') == 'up_user') {*/
/* 										$(this).val(data['bmm_employees.up_user']).trigger('change');*/
/* 									} else if($(this).attr('addfield') == 'maritalStatus') {*/
/* 										$(this).val(data['bmm_employees.maritalStatus']).select2();*/
/* 										if(data[key] == 2) {*/
/* //											$('#templateBox [addfield=maritalStatus]').attr('disabled', true);*/
/* 											$('#templateBox #username').hide();*/
/* 											$('#templateBox #username1').show();*/
/* 											getUseEmp();*/
/* 										} else {*/
/* 											$('#templateCon [addfield="username"]').prop('disabled', true);*/
/* 										}*/
/* 									}else if($(this).attr('addfield') == 'degreeLevel'){*/
/* 										$(this).val(data['bmm_employees.degreeLevel']).select2();*/
/* 									}else if($(this).attr('addfield') == 'marriage'){*/
/* 										$(this).val(data['bmm_employees.marriage']).select2();*/
/* 									}else if($(this).attr('addfield') == 'sex'){*/
/* 										$(this).val(data['bmm_employees.sex']).select2();*/
/* 									}*/
/*  									*/
/* 									else {*/
/* 										$(this).val($(this).attr('addfield') == 'employedDate' || $(this).attr('addfield') == 'birthday' ? (data[key] != '0' ? cs.getNowTime(data[key]) : '') : data[key]);*/
/* 									}*/
/* */
/* 								}*/
/* 							})*/
/* 						}*/
/* */
/* 						$('#templateBox ').unbind('click').find('img').click(function() {*/
/* 							var src = $(this).attr('src');*/
/* 							if(src == '/resource/adimin/assets/images/avatar.png' || src == "") {*/
/* 								ykp.prompt('没有图片');*/
/* 								return false;*/
/* 							}*/
/* 							$('#templateCon [addfield="username"]').prop('disabled', true);*/
/* 							layui.use('layer', function() {*/
/* 								var lsyer = layui.layer;*/
/* 								layer.open({*/
/* 									type: 1,*/
/* 									title: "图片详情",*/
/* 									skin: 'layer-pic-box', //加上边框*/
/* 									area: ['270px', '270px'], //宽高*/
/* 									content: '<div style="width: 200px;height: 200px;margin: auto; margin-top: 11px;"><img class="" src="' + src + '"  style="display: inline-block;object-fit: cover;width: 200px;height: 200px;"></div>'*/
/* 								})*/
/* 							})*/
/* 							$('#templateCon [addfield="username"]').prop('disabled', false);*/
/* 						})*/
/* 						var maritalStatus = $('#templateBox [addfield=maritalStatus]').val();*/
/* 						$('#templateBox #username1').change(function() {*/
/* 							//							alert*()*/
/* 							$('#templateBox [addfield=maritalStatus] ').val(0);*/
/* 						});*/
/* 						*/
/* 						$('#templateBox [addfield=maritalStatus]').change(function(){*/
/* 							var val = $(this).val();*/
/* 							$('#templateBox #username1').find('option').eq(1).prop("selected",true);*/
/* 						})*/
/* */
/* 						getParentPart(true, data['bmm_department.id'], true);*/
/* 						get_role(data['bmm_employees.role_id']);*/
/* 						text == '详情' ? $('#templateBox').find('input,select').prop('disabled', true) : "";*/
/* 						text == '详情' ? $('#templateBox').find('#add').remove() : "";*/
/* 						//提交编辑*/
/* 						editInfo(id, maritalStatus,renwustat);*/
/* 					}*/
/* 				})*/
/* 			})*/
/* 		}*/
/* */
/* 		function getUseEmp() {*/
/* 			ykp.doAjax({*/
/* 				url: "/api/api_employees/get_empty_emp",*/
/* 				method: "get",*/
/* 				data: {},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					var content = [];*/
/* 					for(var i in data) {*/
/* 						content.push('<option value="' + data[i]['username'] + '">' + data[i]['username'] + '</option>');*/
/* 					}*/
/* 					$('#templateBox #username1').append(content.join(''));*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		/*//* /详情*/
/* 		function dispDetail() {*/
/* 			$('#dynamic-table tbody sdetail').click(function() {*/
/* 				showMark('#template3');*/
/* 				var id=$(this).parents('tr').attr('data-id');*/
/* 				var data ={*/
/* 					url:'',*/
/* 					method:'post',*/
/* 					data:{*/
/* 						filter: 'id = ' + cid*/
/* 					}*/
/* 				}*/
/* 					ykp.doAjax({*/
/* 					url: '/api/api_customer/info',*/
/* 					methods: 'post',*/
/* 					data: {*/
/* 						filter: 'id = ' + cid*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;					*/
/* 						$("#templateBox .disData0").html(data['bmm_employees.name']);*/
/* 						$("#templateBox .disData1").html(data['bmm_employees.empno']);*/
/* 						$("#templateBox .disData2").html(srank[data['bmm_employees.department']]);*/
/* 						$("#templateBox .disData3").html(data['bmm_employees.maritalStatus']);*/
/* 						$("#templateBox .disData4").html(data['bmm_employees.officePhone']);*/
/* 						$("#templateBox .disData5").html(data['bmm_employees.mobilePhone']);*/
/* 						$("#templateBox .disData6").html(data['bmm_employees.email']);*/
/* 						$("#templateBox .disData7").html(data['bmm_employees.role_id']);						*/
/* 					}*/
/* 				})					*/
/* 				*/
/* 			})*/
/* 				*/
/* 			*/
/* 		}*//* */
/* */
/* 		function editInfo(id, maritalStatus,renwustat) {*/
/* */
/* 			//保存*/
/* 			$('#showBox #add').click(function() {*/
/* 				var url = '/api/api_employees/add';*/
/* 				var data = {};*/
/* 				// var num = 0;*/
/* 				var val = '';*/
/* 				var status = true;*/
/* 				var condition;*/
/* 				//获取照片文件信息*/
/* 				$('#templateCon').find('img').each(function(i, e) {*/
/* 					if($(this).attr('data-url') != "") {*/
/* 						data[$(this).attr('addfield')] = $(this).attr('data-url');*/
/* 						//console.log($(this).attr('addfield')+'='+$(this).attr('data-url'));*/
/* 					}*/
/* 				});*/
/* */
/* 				$('#templateCon .item_form').find('input[addfield],select[addfield]').each(function(i, element) {*/
/* */
/* 					if(!$(this).val() && $(this).attr('needed') == 'required' && !$(this).is(":hidden")) {*/
/* 						ykp.prompt($(this).prev().text().replace(/\*//* , '') + "不能为空！");*/
/* 						status = false;*/
/* 						return false;*/
/* 					}*/
/* */
/* 					if($(this).attr('addfield') == 'employedDate') {*/
/* 						data[$(this).attr('addfield')] = new Date($(this).val()) / 1000;*/
/* 						return true;*/
/* 					}*/
/* 					if($(this).attr('addfield') == 'birthday') {*/
/* 						data[$(this).attr('addfield')] = new Date($(this).val()) / 1000;*/
/* 						return true;*/
/* 					}*/
/* */
/* 					data[$(this).attr('addfield')] = $(this).val();*/
/* 				});*/
/* 				if(maritalStatus == 2) {*/
/* 					data['username'] = $('#templateCon').find('select[addfield=username]').val();*/
/* 				} else {*/
/* 					data['username'] = $('#templateCon').find('input[addfield=username]').val();*/
/* 				}*/
/* 				if(data['role_id']) {*/
/* 					data['role_id'] = data['role_id'].join(',');*/
/* 				}*/
/* 				if(status) {*/
/* 					var result = ykp.getFormData('#templateCon', true);*/
/* */
/* 					if(result.status) {*/
/* 						if(id) {*/
/* 							data.id = id;*/
/* 							url = maritalStatus == 2 ? '/api/api_employees/edit_new/' : '/api/api_employees/edit';*/
/* 						}*/
/*                         if (data['maritalStatus'] ==2){*/
/*                             if(renwustat){*/
/*                                 ykp.prompt('该员工还有任务请移交后离职！');*/
/*                                 return false;*/
/*                             }*/
/* 						};*/
/*                         ykp.doAjax({*/
/*                             url: url,*/
/*                             method: "post",*/
/*                             data: data,*/
/*                             success: function(res) {*/
/*                                 if(res.code == 200) {*/
/*                                     ykp.prompt((id ? "编辑成功" : "添加成功！"));*/
/*                                     //关闭弹出层*/
/*                                     cs.close();*/
/*                                     showPage();*/
/*                                 }*/
/*                             }*/
/*                         })*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
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
