<?php

/* admin/login/personal_profile.html */
class __TwigTemplate_f4f57dc42b5b9d3ac0fc4129187133d3eb8349cb27a76d769057af68998e6910 extends Twig_Template
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
\t#userInfo tr:nth-child(odd) {
\t\twidth: 110px !important;
\t\ttext-align: right !important;
\t}
\t
\t.firstlabel {
\t\twidth: 110px;
\t\ttext-align: right;
\t\tfloat: left;
\t\tmargin-right: 20px;
\t}
\t
\t.c_items span {
\t\twidth: 120px;
\t\tdisplay: inline-block;
\t\ttext-align: right;
\t}
\t
\t.c_items label {
\t\tmargin-left: 30px;
\t}
</style>
<style type=\"text/css\">
\ttr td {
\t\tpadding: 11px !important;
\t}
\t.c_items{
\t\tpadding:5px;
\t}
\t
\t.widget-main {
\t\tpadding: 12px 18px
\t}
\timg[data]{
\t\tcursor: pointer;
\t}
\t.div_for_two{
\t\tdisplay: inline-block;
    \twidth: 38%;
\t}
</style>

<div class=\"row\">
\t<div class=\"col-xs-12 col-sm-12 widget-container-col ui-sortable\" id=\"widget-container-col-4\" style=\"padding-right: 12px;\">
\t\t<div class=\"widget-box ui-sortable-handle\" id=\"widget-box-4\">
\t\t\t<!-- #section:custom/widget-box.header.options -->

\t\t\t<!--<div class=\"widget-header widget-header-large\" style=\"background: #67809F !important; color: #fff !important;\">
\t\t\t\t<h4 class=\"widget-title\">个人信息</h4>
\t\t\t\t<span contentAuthority=\"242\">
\t\t\t\t\t<div class=\"widget-toolbar\" id=\"edit\" style=\"margin-left: 13px; \">
\t\t\t\t\t\t<a href=\"#\" data-action=\"settings\" style=\"cursor: pointer;color: #fff;\">
\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-pencil bigger-135\"></i>
\t\t\t\t\t\t\t<label style=\"margin:0;\">编辑</label>
\t\t\t\t\t\t</a>

\t\t\t\t\t</div>
\t\t\t\t</span>
\t\t\t\t
\t\t\t</div>-->
\t\t\t<!-- /section:custom/widget-box.header.options -->
\t\t\t<div class=\"widget-body\">
\t\t\t\t<div class=\"widget-main\" id=\"userInfo\">
\t\t\t\t\t<div class=\"c_items\" > 
\t\t\t\t\t\t\t<span class=\"items_tit\">头像：</span>
\t\t\t\t\t\t\t<span id=\"logo\" style=\"position:relative;\">
\t                           <img style=\"width: 100%;height:100%\"  data=\"avatar\"  src=\"\" alt=\"\">
\t                        </span>
\t                        <div class=\"widget-toolbar\" id=\"edit\" style=\"margin-left: 13px; \">
\t\t\t\t\t\t\t\t<a href=\"#\" data-action=\"settings\" style=\"cursor: pointer;color: #000;\">
\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-pencil bigger-135\"></i>
\t\t\t\t\t\t\t\t\t<label style=\"margin:0;\">编辑</label>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"c_items div_for_two\">
\t\t\t\t\t\t<span class=\"items_tit\">姓名：</span>
\t\t\t\t\t\t<label data=\"name\"></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"c_items div_for_two\">
\t\t\t\t\t\t<span class=\"账号\">账号：</span>
\t\t\t\t\t\t<label data=\"username\"></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"c_items div_for_two\">
\t\t\t\t\t\t<span class=\"items_tit\">手机号码：</span>
\t\t\t\t\t\t<label data=\"mobilePhone\"></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"c_items div_for_two\">
\t\t\t\t\t\t<span class=\"items_tit\">密码：</span>
\t\t\t\t\t\t<label><button type=\"button\" id=\"changePwd\" class=\"btn btn-info btn-sm\">修改密码</button></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"c_items div_for_two\">
\t\t\t\t\t\t<span class=\"items_tit\">性别：</span>
\t\t\t\t\t\t<label data=\"sex\"></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"c_items div_for_two\">
\t\t\t\t\t\t<span class=\"items_tit\">生日：</span>
\t\t\t\t\t\t<label data=\"birthday\"></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"c_items div_for_two\">
\t\t\t\t\t\t<span class=\"items_tit\">所属部门：</span>
\t\t\t\t\t\t<label data=\"dep_name\"></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"c_items div_for_two\">
\t\t\t\t\t\t<span class=\"items_tit\">角色：</span>
\t\t\t\t\t\t<label data=\"role_name\"></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"c_items div_for_two\">
\t\t\t\t\t\t<span class=\"items_tit\">部门主管：</span>
\t\t\t\t\t\t<label data=\"director_name\"></label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"c_items div_for_two\">
\t\t\t\t\t\t<span class=\"items_tit\">入职时间：</span>
\t\t\t\t\t\t<label data=\"employedDate\"></label>
\t\t\t\t\t</div>
\t\t\t\t\t<!--<div class=\"c_items\">
\t\t\t\t\t\t<span class=\"items_tit\">管理权限：</span>
\t\t\t\t\t\t<label data=\"employedDate\"></label>
\t\t\t\t\t</div>-->
\t\t\t\t\t<div style=\" padding-left: 58px;margin: 20px;\">
\t\t\t\t\t\t<button type=\"button\" id=\"seeMore\" class=\"btn btn-info btn-sm\">
                                                查看更多
                    \t</button>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"ys\" style=\"display: none;\">
\t\t\t\t\t\t<div class=\"c_items div_for_two\">
\t\t\t\t\t\t\t<span class=\"items_tit\">婚姻状态：</span>
\t\t\t\t\t\t\t<label data=\"marriage\"></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"c_items div_for_two\">
\t\t\t\t\t\t\t<span class=\"items_tit\">紧急联系人：</span>
\t\t\t\t\t\t\t<label data=\"emergencyContactName\"></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"c_items div_for_two\">
\t\t\t\t\t\t\t<span class=\"items_tit\">紧急联系电话：</span>
\t\t\t\t\t\t\t<label data=\"emergencyPhone\"></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"c_items div_for_two\">
\t\t\t\t\t\t\t<span class=\"items_tit\">户籍：</span>
\t\t\t\t\t\t\t<label data=\"origin\"></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"c_items div_for_two\">
\t\t\t\t\t\t\t<span class=\"items_tit\">身份证号码：</span>
\t\t\t\t\t\t\t<label data=\"identityCode\"></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"c_items div_for_two\">
\t\t\t\t\t\t\t<span class=\"items_tit\">通讯地址：</span>
\t\t\t\t\t\t\t<label data=\"mail_address\"></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- <div class=\"c_items div_for_two\" style=\"margin-top: 10px;\">
\t\t\t\t\t\t\t<span class=\"items_tit\">头像：</span>
\t\t\t\t\t\t\t<span id=\"logo\" style=\"position:relative;\">
\t                           <img style=\"display: none;width: 100%;height: 98px;\"  data=\"avatar\" src=\"\" alt=\"\">
\t                        </span>
\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t<div class=\"c_items div_for_two\" style=\"margin-top: 10px;\">
\t\t\t\t\t\t\t<span class=\"items_tit\">身份证扫描件：</span>
\t\t\t\t\t\t\t<span id=\"logo\" style=\"position:relative;\">
\t                           <img style=\"display: none;width: 100%;height: 98px;\"  data=\"img_card\" src=\"\" alt=\"\">
\t                        </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"c_items div_for_two\" style=\"margin-top: 10px;\">
\t\t\t\t\t\t\t<span class=\"items_tit\">毕业证扫描件：</span>
\t\t\t\t\t\t\t<span id=\"logo\" style=\"position:relative;\">
\t                           <img style=\"display: none;width: 100%;height: 98px;\"   data=\"img_school\"  src=\"\" alt=\"\">
\t                        </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"c_items div_for_two\" style=\"margin-top: 10px;\">
\t\t\t\t\t\t\t<span class=\"items_tit\">资格证扫描件：</span>
\t\t\t\t\t\t\t<span id=\"logo\" style=\"position:relative;\">
\t                           <img style=\"display: none;width: 100%;height: 98px;\"   data=\"img_qualifications\"  src=\"\" alt=\"\">
\t                        </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"c_items div_for_two\" style=\"margin-top: 10px;\">
\t\t\t\t\t\t\t<span class=\"items_tit\">劳动合同扫描件：</span>
\t\t\t\t\t\t\t<span id=\"logo\" style=\"position:relative;\">
\t                           <img style=\"display: none;width: 100%;height: 98px;\"   data=\"img_labour\"  src=\"\" alt=\"\">
\t                        </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"c_items div_for_two\" style=\"margin-top: 10px;\"> 
\t\t\t\t\t\t\t<span class=\"items_tit\">其他证件扫描件：</span>
\t\t\t\t\t\t\t<span id=\"logo\" style=\"position:relative;\">
\t                           <img style=\"display: none;width: 100%;height: 98px;\"  data=\"img_other\"  src=\"\" alt=\"\">
\t                        </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"label_popup\" id=\"label_popup\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t\t\t\t\t    box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t\t<span style=\"display: inline-block;\">修改密码</span>
\t\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t\t<label>原始密码:</label>
\t\t\t\t\t<input type=\"password\" msg=\"请输入正确的原始密码\" validate=\"password\" width=\"200px\" style=\"margin: auto;\" placeholder=\"原始密码\" id=\"labelName\" />
\t\t\t\t\t<!--<hr>-->
\t\t\t\t</div>
\t\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t\t<label>更新密码:</label>
\t\t\t\t\t<input type=\"password\" msg=\"请输入正确的更新密码\" validate=\"password\" width=\"200px\" style=\"margin: auto;\" placeholder=\"更新密码\" id=\"labelName\" />
\t\t\t\t</div>
\t\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t\t<label>重复密码:</label>
\t\t\t\t\t<input type=\"password\" msg=\"请输入正确的重复密码\" validate=\"password\" width=\"200px\" style=\"margin: auto;\" placeholder=\"重复密码\" id=\"labelName\" />
\t\t\t\t</div>
\t\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t\t<button class=\"close_label\">关闭</button>
\t\t\t\t\t<button class=\"hold\">保存</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- 放大图片 -->
\t\t<div id=\"big_pic\" style=\"cursor:pointer;display:none;position: fixed; top: 0px; left:0; background: rgba(0, 0, 0, 0.5);bottom:0;right: 0px; width: 100%; height: 100%; z-index: 1053; text-align: center;\">
\t\t    <div style=\"margin: 10% auto;height: 70%;\">
\t\t        <img style=\"height: 100%\" src=\"\">
\t\t    </div>
\t\t</div>

\t\t<div class=\"row\" id=\"template\" style=\"display:none;\">
\t\t\t<div class=\"widget-box\">
\t\t\t\t<!-- <div class=\"widget-header widget-header-small\">
\t\t\t\t\t<h5 id=\"editTitile\" class=\"widget-title lighter\">编辑信息</h5>
\t\t\t\t</div> -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t<form class=\"item_form\" role=\"form\" id=\"\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 姓名： </label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"in_num \" addfield=\"name\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 手机号码： </label>
\t\t\t\t\t\t\t\t<input type=\"tel\" class=\"in_num \" addfield=\"mobilePhone\" msg=\"请输入正确的手机号码\" validate=\"phone\" maxlength=\"11\" />

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 生日： </label>
\t\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t\t<input class=\"date-timepicker1 required\" addfield=\"birthday\" msg=\"生日不能为空\" style=\"padding:5px;height: 30px; width: 150px;\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
\t\t\t\t\t                        <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t\t\t\t                    </span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label style=\"width: 100px;margin-right:5px;\"> 头像： </label>
\t\t\t\t\t\t\t\t<div class=\"input-group js_photo\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<div class=\"imgCon\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/resource/adimin/assets/images/avatar.png\" addfield=\"avatar\" data-url=\"\" />
\t\t\t\t\t\t\t\t\t\t\t<div class=\"del\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\" fa fa-pencil\">
\t\t\t\t\t\t\t                       \t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"upload0\" style=\"opacity: 0;\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 婚姻状态： </label>
\t\t\t\t\t\t\t\t<select id=\"depart\" addfield=\"marriage\">
\t\t\t\t\t\t\t\t\t<option value=\"0\">未婚</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">已婚</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">离婚</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 户籍： </label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"in_num required\" addfield=\"origin\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 紧急联系人： </label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"in_num required\" addfield=\"emergencyContactName\" />
\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 紧急联系人电话： </label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"in_num required\" addfield=\"emergencyPhone\" maxlength=\"11\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 身份证号码： </label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"in_num required\" addfield=\"identityCode\" maxlength=\"18\" />
\t\t\t\t\t\t\t\t<label style=\"width: 100px;\"> 通讯地址： </label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"in_num required\" addfield=\"mail_address\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label style=\"width: 100px;margin-right:5px;\"> 头像： </label>
\t\t\t\t\t\t\t\t<div class=\"input-group js_photo\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<div class=\"imgCon\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/resource/adimin/assets/images/avatar.png\" addfield=\"avatar\" data-url=\"\" />
\t\t\t\t\t\t\t\t\t\t\t<div class=\"del\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\" fa fa-pencil\">
\t\t\t\t\t\t\t                       \t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"upload0\" style=\"opacity: 0;\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<label style=\"width: 100px; margin-right:5px;\"> 身份证扫描件： </label>
\t\t\t\t\t\t\t\t<div class=\"input-group js_photo\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<div class=\"imgCon\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/resource/adimin/assets/images/avatar.png\" addfield=\"img_card\" data-url=\"\" />
\t\t\t\t\t\t\t\t\t\t\t<div class=\"del\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\" fa fa-pencil\">
\t\t\t\t\t\t\t                       \t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"upload1\" style=\"opacity: 0;\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<label style=\"width: 100px;margin-right:5px;\"> 毕业证书扫描件： </label>
\t\t\t\t\t\t\t\t<div class=\"input-group js_photo\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<div class=\"imgCon\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/resource/adimin/assets/images/avatar.png\" addfield=\"img_school\" data-url=\"\" />
\t\t\t\t\t\t\t\t\t\t\t<div class=\"del\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\" fa fa-pencil\">
\t\t\t\t\t\t\t                       \t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"upload2\" style=\"opacity: 0;\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<label style=\"width: 100px;margin-right:5px;\"> 资格证件扫描件： </label>
\t\t\t\t\t\t\t\t<div class=\"input-group js_photo\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<div class=\"imgCon\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/resource/adimin/assets/images/avatar.png\" addfield=\"img_qualifications\" data-url=\"\" />
\t\t\t\t\t\t\t\t\t\t\t<div class=\"del\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\" fa fa-pencil\">
\t\t\t\t\t\t\t                       \t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"upload3\" style=\"opacity: 0;\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label style=\"width: 100px;margin-right:5px;\"> 劳动合同扫描件： </label>
\t\t\t\t\t\t\t\t<div class=\"input-group js_photo\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<div class=\"imgCon\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/resource/adimin/assets/images/avatar.png\" addfield=\"img_labour\" data-url=\"\" />
\t\t\t\t\t\t\t\t\t\t\t<div class=\"del\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\" fa fa-pencil\">
\t\t\t\t\t\t\t                       \t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"upload4\" style=\"opacity: 0;\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<label style=\"width: 100px;margin-right:5px;\"> 其他证件扫描件： </label>
\t\t\t\t\t\t\t\t<div class=\"input-group js_photo\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<div class=\"imgCon\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/resource/adimin/assets/images/avatar.png\" addfield=\"img_other\" data-url=\"\" />
\t\t\t\t\t\t\t\t\t\t\t<div class=\"del\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\" fa fa-pencil\">
\t\t\t\t\t\t\t                       \t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"upload5\" style=\"opacity: 0;\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t<!--保存按钮-->
\t\t\t\t\t<div class=\" padding-4 clearfix\">
\t\t\t\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t\t\t\t<button class=\"btn btn-info\" id=\"add\">
                                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                                保存
                                            </button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t</div>
</div>
</div>
";
        // line 410
        $this->loadTemplate("admin/mark.html", "admin/login/personal_profile.html", 410)->display($context);
        // line 411
        echo "<script src=\"/resource/adimin/assets/js/LocalResizeIMG.js\"></script>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script>
\tjQuery(function() {
\t\tcs.getNodes([242,243]);
\t\tvar userInfo = \"\";//用户信息
\t\tvar defaultImgSrc =\"/resource/adimin/assets/images/avatar.png\";//没有照片用默认的图片
\t\t// var employees = {};//员工信息

\t\t// ykp.doAjax({
\t\t// \tasync:false,
\t\t// \turl: '/api/api_employees/f7',
\t\t// \tmethod: 'post',
\t\t// \tdata: {
\t\t// \t\tselect:'bmm_employees.id,bmm_employees.name'
\t\t// \t},
\t\t// \tsuccess: function(res) {
\t\t// \t\tvar data = res.data;
\t\t// \t\tfor(var i in data){
\t\t// \t\t\temployees[data[i]['id']] =data[i]['name']; 
\t\t// \t\t}
\t\t// \t}
\t\t// })

\t\tcs.getNodes();

\t\t//放大图片
\t\tbigPic();
\t\tfunction bigPic(){
\t\t\t\$('img[data]').unbind('click').click(function(){
\t\t\t\t\$('#big_pic').show().find('img').attr('src',\$(this).attr('src'));

\t\t\t\t\$('#big_pic').unbind('click').click(function(){
\t\t\t\t\t\$(this).hide();
\t\t\t\t});
\t\t\t});
\t\t}

\t\t//获取用户信息
\t\tgetuserInfo();
\t\tfunction getuserInfo() {
\t\t\tvar id = ykp.getCookie(\"uid\");
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_employees/get_info',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tid:id
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\t//console.log(data);
\t\t\t\t\tuserInfo = data;
\t\t\t\t\tvar maritalStatus = ['在职','请假','离职'];//在职状态
\t\t\t\t\tvar sex = ['未知','男','女'];//性别
\t\t\t\t\tvar marriage = ['未婚','已婚','离婚'];//婚姻状态
\t\t\t\t\tvar field = '';
\t\t\t\t\t\$('[data]').each(function(i,e) {
\t\t\t\t\t\tfield = \$(this).attr('data');
\t\t\t\t\t\t//对日期数据做额外处理
\t\t\t\t\t\tif(\$(this).attr('data') == 'employedDate' || \$(this).attr('data') == 'birthday') {
\t\t\t\t\t\t\t\$(this).text(data[field] != '0' ? cs.getNowTime(data[field]) : '');
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\t//对图片数据做额外处理
\t\t\t\t\t\tif(\$(this).attr('data') == 'img_card' || \$(this).attr('data') == 'avatar' || \$(this).attr('data') == 'img_school' || \$(this).attr('data') == 'img_qualifications' || \$(this).attr('data') == 'img_labour' || \$(this).attr('data') == 'img_other') {
\t\t\t\t\t\t\tif(data[field]) {
\t\t\t\t\t\t\t\t\$(this).attr('src', data[field]);
\t\t\t\t\t\t\t\t\$(this).attr('data-url', data[field]);
\t\t\t\t\t\t\t\t\$(this).show();
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\$(this).attr('src', defaultImgSrc);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('data') == 'maritalStatus'){
\t\t\t\t\t\t\t\$(this).text(maritalStatus[data[field]]);
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('data') == 'sex'){
\t\t\t\t\t\t\t\$(this).text(sex[data[field]]);
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('data') == 'marriage'){
\t\t\t\t\t\t\t\$(this).text(marriage[data[field]]);
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('data') == 'bmm_department.name'){
\t\t\t\t\t\t\t\$(this).text([data['bmm_department.name']]);
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('data') == 'role_id'){
\t\t\t\t\t\t\t\$(this).text([data['bmm_department.name']]);
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\t\$(this).text(data[field]);
\t\t\t\t\t})

\t\t\t\t}
\t\t\t})
\t\t}

\t\t\$('#edit').click(function() {
\t\t\t//编辑
\t\t\tshowMark('#template');
\t\t\tcs.timeplug();
\t\t\t\$('#showBox .title').text('编辑个人信息');
\t\t\tvar field = '';
\t\t\t\$('#templateCon [addfield]').each(function(i,e) {
\t\t\t\tfield = \$(this).attr('addfield');
\t\t\t\tif(\$(this).attr('addfield') == 'img_card' || \$(this).attr('addfield') == 'img_school' || \$(this).attr('addfield') == 'img_qualifications' || \$(this).attr('addfield') == 'img_labour' || \$(this).attr('addfield') == 'img_other' || \$(this).attr('addfield') == 'avatar') {
\t\t\t\t\tif(userInfo[field]) {

\t\t\t\t\t\t\$(this).attr('src', userInfo[field]);
\t\t\t\t\t\t\$(this).attr('data-url', userInfo[field]);
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(this).attr('src', defaultImgSrc);
\t\t\t\t\t}
\t\t\t\t\treturn true;
\t\t\t\t}

\t\t\t\t\$(this).attr('addfield') == 'birthday' ? \$(this).val(userInfo[field] != '0' ? cs.getNowTime(userInfo[field]) : '') : \$(this).val( userInfo[field]);
\t\t\t});

\t\t\t\$('#templateBox input[type=file]').each(function(i) {
\t\t\t\t\$('#templateBox .upload' + i).click(function() {
\t\t\t\t\tcs.imgResize('#templateBox .upload' + i, function(res) {
\t\t\t\t\t\t\$('#templateBox').find('.js_photo').eq(i).find('img').attr('src', res.data.url);
\t\t\t\t\t\t\$('#templateBox').find('.js_photo').eq(i).find('img').attr('data-url', res.data.url);
\t\t\t\t\t})
\t\t\t\t})
\t\t\t});

\t\t\t\$('#templateBox #add').click(function() {
\t\t\t\tvar data = {
\t\t\t\t\tid: ykp.getCookie(\"uid\")
\t\t\t\t};
\t\t\t\t\$('#templateBox .item_form').find('input[addfield],select[addfield]').each(function(i, element) {
\t\t\t\t\t\tif(\$(this).val() == \"\") {
\t\t\t\t\t\t\tykp.prompt(\$(this).prev().text() + \"不能为空！\");
\t\t\t\t\t\t\tstatus = false;
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\tif(\$(this).attr('addfield') == 'birthday'){
\t\t\t\t\t\t\tdata[\$(this).attr('addfield')] = new Date(\$(this).val()) / 1000;
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\tdata[\$(this).attr('addfield')] = \$(this).val();
\t\t\t\t});
\t\t\t\t\$('#templateBox').find('img').each(function(i,e) {
\t\t\t\t\tif(\$(this).attr('data-url') != \"\") {
\t\t\t\t\t\tdata[\$(this).attr('addfield')] = \$(this).attr('data-url');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_employees/edit_info',
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tdata: data,
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tykp.prompt('编辑成功');
\t\t\t\t\t\tcs.close();
\t\t\t\t\t\tgetuserInfo();
\t\t\t\t\t}
\t\t\t\t})
\t\t\t});

\t\t})

\t\t\$('#seeMore').click(function() {
\t\t\tif(\$(this).hasClass('see')) {
\t\t\t\t\$(this).text('查看更多').removeClass('see');
\t\t\t\t\$('#ys').hide();
\t\t\t} else {
\t\t\t\t\$('#ys').show();
\t\t\t\t\$(this).addClass('see').text('取消查看');
\t\t\t}

\t\t})

\t\t//修改密码
\t\t\$('#changePwd').unbind('click').click(function() {
\t\t\tvar id = ykp.getCookie(\"uid\");
\t\t\t\$('#label_popup').show();
\t\t\t\$('#label_popup .hold').click(function() {
\t\t\t\tvar result = ykp.getFormData('#label_popup',true);
\t\t\t\tvar yPaw = \$('#label_popup').find('input').eq(0).val();
\t\t\t\tvar nPwd = \$('#label_popup').find('input').eq(1).val();\t
\t\t\t\tvar nPwd1 = \$('#label_popup').find('input').eq(2).val();\t
\t\t\t\tif(result.status) {
\t\t\t\t\tif(nPwd != nPwd1){
\t\t\t\t\t\tykp.prompt('2次新密码不一致');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: \"/api/api_employees/change_pwd\",
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tpassword: yPaw,
\t\t\t\t\t\t\tnewPassword: nPwd,
\t\t\t\t\t\t\tid:id
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tif(res.code == 200) {
\t\t\t\t\t\t\t\tykp.prompt('修改成功');
\t\t\t\t\t\t\t\t\$('#label_popup').find('input').val('');
\t\t\t\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t\t\t\t}else {
\t\t\t\t\t\t\t\tykp.prompt(res.msg);
\t\t\t\t\t\t\t\t\$('#label_popup').find('input').val('');
\t\t\t\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t}
\t\t\t\t
\t\t\t\t
\t\t\t})
\t\t\tcs.closePop();
\t\t})

\t

\t})
</script>";
    }

    public function getTemplateName()
    {
        return "admin/login/personal_profile.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 411,  430 => 410,  19 => 1,);
    }
}
/* <style>*/
/* 	#userInfo tr:nth-child(odd) {*/
/* 		width: 110px !important;*/
/* 		text-align: right !important;*/
/* 	}*/
/* 	*/
/* 	.firstlabel {*/
/* 		width: 110px;*/
/* 		text-align: right;*/
/* 		float: left;*/
/* 		margin-right: 20px;*/
/* 	}*/
/* 	*/
/* 	.c_items span {*/
/* 		width: 120px;*/
/* 		display: inline-block;*/
/* 		text-align: right;*/
/* 	}*/
/* 	*/
/* 	.c_items label {*/
/* 		margin-left: 30px;*/
/* 	}*/
/* </style>*/
/* <style type="text/css">*/
/* 	tr td {*/
/* 		padding: 11px !important;*/
/* 	}*/
/* 	.c_items{*/
/* 		padding:5px;*/
/* 	}*/
/* 	*/
/* 	.widget-main {*/
/* 		padding: 12px 18px*/
/* 	}*/
/* 	img[data]{*/
/* 		cursor: pointer;*/
/* 	}*/
/* 	.div_for_two{*/
/* 		display: inline-block;*/
/*     	width: 38%;*/
/* 	}*/
/* </style>*/
/* */
/* <div class="row">*/
/* 	<div class="col-xs-12 col-sm-12 widget-container-col ui-sortable" id="widget-container-col-4" style="padding-right: 12px;">*/
/* 		<div class="widget-box ui-sortable-handle" id="widget-box-4">*/
/* 			<!-- #section:custom/widget-box.header.options -->*/
/* */
/* 			<!--<div class="widget-header widget-header-large" style="background: #67809F !important; color: #fff !important;">*/
/* 				<h4 class="widget-title">个人信息</h4>*/
/* 				<span contentAuthority="242">*/
/* 					<div class="widget-toolbar" id="edit" style="margin-left: 13px; ">*/
/* 						<a href="#" data-action="settings" style="cursor: pointer;color: #fff;">*/
/* 							<i class="ace-icon fa fa-pencil bigger-135"></i>*/
/* 							<label style="margin:0;">编辑</label>*/
/* 						</a>*/
/* */
/* 					</div>*/
/* 				</span>*/
/* 				*/
/* 			</div>-->*/
/* 			<!-- /section:custom/widget-box.header.options -->*/
/* 			<div class="widget-body">*/
/* 				<div class="widget-main" id="userInfo">*/
/* 					<div class="c_items" > */
/* 							<span class="items_tit">头像：</span>*/
/* 							<span id="logo" style="position:relative;">*/
/* 	                           <img style="width: 100%;height:100%"  data="avatar"  src="" alt="">*/
/* 	                        </span>*/
/* 	                        <div class="widget-toolbar" id="edit" style="margin-left: 13px; ">*/
/* 								<a href="#" data-action="settings" style="cursor: pointer;color: #000;">*/
/* 									<i class="ace-icon fa fa-pencil bigger-135"></i>*/
/* 									<label style="margin:0;">编辑</label>*/
/* 								</a>*/
/* 							</div>*/
/* 						</div>*/
/* 					<div class="c_items div_for_two">*/
/* 						<span class="items_tit">姓名：</span>*/
/* 						<label data="name"></label>*/
/* 					</div>*/
/* 					<div class="c_items div_for_two">*/
/* 						<span class="账号">账号：</span>*/
/* 						<label data="username"></label>*/
/* 					</div>*/
/* 					<div class="c_items div_for_two">*/
/* 						<span class="items_tit">手机号码：</span>*/
/* 						<label data="mobilePhone"></label>*/
/* 					</div>*/
/* 					<div class="c_items div_for_two">*/
/* 						<span class="items_tit">密码：</span>*/
/* 						<label><button type="button" id="changePwd" class="btn btn-info btn-sm">修改密码</button></label>*/
/* 					</div>*/
/* 					<div class="c_items div_for_two">*/
/* 						<span class="items_tit">性别：</span>*/
/* 						<label data="sex"></label>*/
/* 					</div>*/
/* 					<div class="c_items div_for_two">*/
/* 						<span class="items_tit">生日：</span>*/
/* 						<label data="birthday"></label>*/
/* 					</div>*/
/* 					<div class="c_items div_for_two">*/
/* 						<span class="items_tit">所属部门：</span>*/
/* 						<label data="dep_name"></label>*/
/* 					</div>*/
/* 					<div class="c_items div_for_two">*/
/* 						<span class="items_tit">角色：</span>*/
/* 						<label data="role_name"></label>*/
/* 					</div>*/
/* 					<div class="c_items div_for_two">*/
/* 						<span class="items_tit">部门主管：</span>*/
/* 						<label data="director_name"></label>*/
/* 					</div>*/
/* 					<div class="c_items div_for_two">*/
/* 						<span class="items_tit">入职时间：</span>*/
/* 						<label data="employedDate"></label>*/
/* 					</div>*/
/* 					<!--<div class="c_items">*/
/* 						<span class="items_tit">管理权限：</span>*/
/* 						<label data="employedDate"></label>*/
/* 					</div>-->*/
/* 					<div style=" padding-left: 58px;margin: 20px;">*/
/* 						<button type="button" id="seeMore" class="btn btn-info btn-sm">*/
/*                                                 查看更多*/
/*                     	</button>*/
/* 					</div>*/
/* */
/* 					<div id="ys" style="display: none;">*/
/* 						<div class="c_items div_for_two">*/
/* 							<span class="items_tit">婚姻状态：</span>*/
/* 							<label data="marriage"></label>*/
/* 						</div>*/
/* 						<div class="c_items div_for_two">*/
/* 							<span class="items_tit">紧急联系人：</span>*/
/* 							<label data="emergencyContactName"></label>*/
/* 						</div>*/
/* 						<div class="c_items div_for_two">*/
/* 							<span class="items_tit">紧急联系电话：</span>*/
/* 							<label data="emergencyPhone"></label>*/
/* 						</div>*/
/* 						<div class="c_items div_for_two">*/
/* 							<span class="items_tit">户籍：</span>*/
/* 							<label data="origin"></label>*/
/* 						</div>*/
/* 						<div class="c_items div_for_two">*/
/* 							<span class="items_tit">身份证号码：</span>*/
/* 							<label data="identityCode"></label>*/
/* 						</div>*/
/* 						<div class="c_items div_for_two">*/
/* 							<span class="items_tit">通讯地址：</span>*/
/* 							<label data="mail_address"></label>*/
/* 						</div>*/
/* 						<!-- <div class="c_items div_for_two" style="margin-top: 10px;">*/
/* 							<span class="items_tit">头像：</span>*/
/* 							<span id="logo" style="position:relative;">*/
/* 	                           <img style="display: none;width: 100%;height: 98px;"  data="avatar" src="" alt="">*/
/* 	                        </span>*/
/* 						</div> -->*/
/* 						<div class="c_items div_for_two" style="margin-top: 10px;">*/
/* 							<span class="items_tit">身份证扫描件：</span>*/
/* 							<span id="logo" style="position:relative;">*/
/* 	                           <img style="display: none;width: 100%;height: 98px;"  data="img_card" src="" alt="">*/
/* 	                        </span>*/
/* 						</div>*/
/* 						<div class="c_items div_for_two" style="margin-top: 10px;">*/
/* 							<span class="items_tit">毕业证扫描件：</span>*/
/* 							<span id="logo" style="position:relative;">*/
/* 	                           <img style="display: none;width: 100%;height: 98px;"   data="img_school"  src="" alt="">*/
/* 	                        </span>*/
/* 						</div>*/
/* 						<div class="c_items div_for_two" style="margin-top: 10px;">*/
/* 							<span class="items_tit">资格证扫描件：</span>*/
/* 							<span id="logo" style="position:relative;">*/
/* 	                           <img style="display: none;width: 100%;height: 98px;"   data="img_qualifications"  src="" alt="">*/
/* 	                        </span>*/
/* 						</div>*/
/* 						<div class="c_items div_for_two" style="margin-top: 10px;">*/
/* 							<span class="items_tit">劳动合同扫描件：</span>*/
/* 							<span id="logo" style="position:relative;">*/
/* 	                           <img style="display: none;width: 100%;height: 98px;"   data="img_labour"  src="" alt="">*/
/* 	                        </span>*/
/* 						</div>*/
/* 						<div class="c_items div_for_two" style="margin-top: 10px;"> */
/* 							<span class="items_tit">其他证件扫描件：</span>*/
/* 							<span id="logo" style="position:relative;">*/
/* 	                           <img style="display: none;width: 100%;height: 98px;"  data="img_other"  src="" alt="">*/
/* 	                        </span>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="label_popup" id="label_popup" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 			<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 					    box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 				<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 					<span style="display: inline-block;">修改密码</span>*/
/* 					<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 				</div>*/
/* 				*/
/* 				<div style="padding: 10px 50px;">*/
/* 					<label>原始密码:</label>*/
/* 					<input type="password" msg="请输入正确的原始密码" validate="password" width="200px" style="margin: auto;" placeholder="原始密码" id="labelName" />*/
/* 					<!--<hr>-->*/
/* 				</div>*/
/* 				<div style="padding: 10px 50px;">*/
/* 					<label>更新密码:</label>*/
/* 					<input type="password" msg="请输入正确的更新密码" validate="password" width="200px" style="margin: auto;" placeholder="更新密码" id="labelName" />*/
/* 				</div>*/
/* 				<div style="padding: 10px 50px;">*/
/* 					<label>重复密码:</label>*/
/* 					<input type="password" msg="请输入正确的重复密码" validate="password" width="200px" style="margin: auto;" placeholder="重复密码" id="labelName" />*/
/* 				</div>*/
/* 				<div style="padding:15px;text-align:right;">*/
/* 					<button class="close_label">关闭</button>*/
/* 					<button class="hold">保存</button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- 放大图片 -->*/
/* 		<div id="big_pic" style="cursor:pointer;display:none;position: fixed; top: 0px; left:0; background: rgba(0, 0, 0, 0.5);bottom:0;right: 0px; width: 100%; height: 100%; z-index: 1053; text-align: center;">*/
/* 		    <div style="margin: 10% auto;height: 70%;">*/
/* 		        <img style="height: 100%" src="">*/
/* 		    </div>*/
/* 		</div>*/
/* */
/* 		<div class="row" id="template" style="display:none;">*/
/* 			<div class="widget-box">*/
/* 				<!-- <div class="widget-header widget-header-small">*/
/* 					<h5 id="editTitile" class="widget-title lighter">编辑信息</h5>*/
/* 				</div> -->*/
/* 				<div class="row">*/
/* 					<div class="col-xs-12">*/
/* 						<form class="item_form" role="form" id="">*/
/* 							<div class="form-group">*/
/* 								<label style="width: 100px;"> 姓名： </label>*/
/* 								<input type="text" class="in_num " addfield="name" />*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label style="width: 100px;"> 手机号码： </label>*/
/* 								<input type="tel" class="in_num " addfield="mobilePhone" msg="请输入正确的手机号码" validate="phone" maxlength="11" />*/
/* */
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label style="width: 100px;"> 生日： </label>*/
/* 								<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 									<input class="date-timepicker1 required" addfield="birthday" msg="生日不能为空" style="padding:5px;height: 30px; width: 150px;">*/
/* 									<span class="input-group-addon" style="width:30px;height:30px;">*/
/* 					                        <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 					                    </span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* */
/* 								<label style="width: 100px;margin-right:5px;"> 头像： </label>*/
/* 								<div class="input-group js_photo" style="display: inline-flex; width: 180px;">*/
/* 									<label>*/
/* 										<div class="imgCon">*/
/* 											<img src="/resource/adimin/assets/images/avatar.png" addfield="avatar" data-url="" />*/
/* 											<div class="del">*/
/* 												<span class=" fa fa-pencil">*/
/* 							                       			</span>*/
/* 												<input type="file" class="upload0" style="opacity: 0;" />*/
/* 											</div>*/
/* 										</div>*/
/* 									</label>*/
/* 								</div>*/
/* 								*/
/* 							</div>*/
/* */
/* 							<!-- <div class="form-group">*/
/* 								<label style="width: 100px;"> 婚姻状态： </label>*/
/* 								<select id="depart" addfield="marriage">*/
/* 									<option value="0">未婚</option>*/
/* 									<option value="1">已婚</option>*/
/* 									<option value="2">离婚</option>*/
/* 								</select>*/
/* 								<label style="width: 100px;"> 户籍： </label>*/
/* 								<input type="text" class="in_num required" addfield="origin" />*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label style="width: 100px;"> 紧急联系人： </label>*/
/* 								<input type="text" class="in_num required" addfield="emergencyContactName" />*/
/* 								<label style="width: 100px;"> 紧急联系人电话： </label>*/
/* 								<input type="text" class="in_num required" addfield="emergencyPhone" maxlength="11" />*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label style="width: 100px;"> 身份证号码： </label>*/
/* 								<input type="text" class="in_num required" addfield="identityCode" maxlength="18" />*/
/* 								<label style="width: 100px;"> 通讯地址： </label>*/
/* 								<input type="text" class="in_num required" addfield="mail_address" />*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* */
/* 								<label style="width: 100px;margin-right:5px;"> 头像： </label>*/
/* 								<div class="input-group js_photo" style="display: inline-flex; width: 180px;">*/
/* 									<label>*/
/* 										<div class="imgCon">*/
/* 											<img src="/resource/adimin/assets/images/avatar.png" addfield="avatar" data-url="" />*/
/* 											<div class="del">*/
/* 												<span class=" fa fa-pencil">*/
/* 							                       			</span>*/
/* 												<input type="file" class="upload0" style="opacity: 0;" />*/
/* 											</div>*/
/* 										</div>*/
/* 									</label>*/
/* 								</div>*/
/* */
/* 								<label style="width: 100px; margin-right:5px;"> 身份证扫描件： </label>*/
/* 								<div class="input-group js_photo" style="display: inline-flex; width: 180px;">*/
/* 									<label>*/
/* 										<div class="imgCon">*/
/* 											<img src="/resource/adimin/assets/images/avatar.png" addfield="img_card" data-url="" />*/
/* 											<div class="del">*/
/* 												<span class=" fa fa-pencil">*/
/* 							                       			</span>*/
/* 												<input type="file" class="upload1" style="opacity: 0;" />*/
/* 											</div>*/
/* 										</div>*/
/* 									</label>*/
/* 								</div>*/
/* 								*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								*/
/* 								<label style="width: 100px;margin-right:5px;"> 毕业证书扫描件： </label>*/
/* 								<div class="input-group js_photo" style="display: inline-flex; width: 180px;">*/
/* 									<label>*/
/* 										<div class="imgCon">*/
/* 											<img src="/resource/adimin/assets/images/avatar.png" addfield="img_school" data-url="" />*/
/* 											<div class="del">*/
/* 												<span class=" fa fa-pencil">*/
/* 							                       			</span>*/
/* 												<input type="file" class="upload2" style="opacity: 0;" />*/
/* 											</div>*/
/* 										</div>*/
/* 									</label>*/
/* 								</div>*/
/* */
/* 								<label style="width: 100px;margin-right:5px;"> 资格证件扫描件： </label>*/
/* 								<div class="input-group js_photo" style="display: inline-flex; width: 180px;">*/
/* 									<label>*/
/* 										<div class="imgCon">*/
/* 											<img src="/resource/adimin/assets/images/avatar.png" addfield="img_qualifications" data-url="" />*/
/* 											<div class="del">*/
/* 												<span class=" fa fa-pencil">*/
/* 							                       			</span>*/
/* 												<input type="file" class="upload3" style="opacity: 0;" />*/
/* 											</div>*/
/* 										</div>*/
/* 									</label>*/
/* 								</div>*/
/* 								*/
/* 							</div>*/
/* */
/* 							*/
/* 							<div class="form-group">*/
/* */
/* 								<label style="width: 100px;margin-right:5px;"> 劳动合同扫描件： </label>*/
/* 								<div class="input-group js_photo" style="display: inline-flex; width: 180px;">*/
/* 									<label>*/
/* 										<div class="imgCon">*/
/* 											<img src="/resource/adimin/assets/images/avatar.png" addfield="img_labour" data-url="" />*/
/* 											<div class="del">*/
/* 												<span class=" fa fa-pencil">*/
/* 							                       			</span>*/
/* 												<input type="file" class="upload4" style="opacity: 0;" />*/
/* 											</div>*/
/* 										</div>*/
/* 									</label>*/
/* 								</div>*/
/* 								*/
/* 								<label style="width: 100px;margin-right:5px;"> 其他证件扫描件： </label>*/
/* 								<div class="input-group js_photo" style="display: inline-flex; width: 180px;">*/
/* 									<label>*/
/* 										<div class="imgCon">*/
/* 											<img src="/resource/adimin/assets/images/avatar.png" addfield="img_other" data-url="" />*/
/* 											<div class="del">*/
/* 												<span class=" fa fa-pencil">*/
/* 							                       			</span>*/
/* 												<input type="file" class="upload5" style="opacity: 0;" />*/
/* 											</div>*/
/* 										</div>*/
/* 									</label>*/
/* 								</div>*/
/* 									*/
/* 							</div> -->*/
/* 						</form>*/
/* 					</div>*/
/* 					<!-- /.col -->*/
/* 					<!--保存按钮-->*/
/* 					<div class=" padding-4 clearfix">*/
/* 						<div class="btn-group pull-right">*/
/* 							<button class="btn btn-info" id="add">*/
/*                                                 <i class="fa fa-check" aria-hidden="true"></i>*/
/*                                                 保存*/
/*                                             </button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* </div>*/
/* {% include 'admin/mark.html' %}*/
/* <script src="/resource/adimin/assets/js/LocalResizeIMG.js"></script>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* <script>*/
/* 	jQuery(function() {*/
/* 		cs.getNodes([242,243]);*/
/* 		var userInfo = "";//用户信息*/
/* 		var defaultImgSrc ="/resource/adimin/assets/images/avatar.png";//没有照片用默认的图片*/
/* 		// var employees = {};//员工信息*/
/* */
/* 		// ykp.doAjax({*/
/* 		// 	async:false,*/
/* 		// 	url: '/api/api_employees/f7',*/
/* 		// 	method: 'post',*/
/* 		// 	data: {*/
/* 		// 		select:'bmm_employees.id,bmm_employees.name'*/
/* 		// 	},*/
/* 		// 	success: function(res) {*/
/* 		// 		var data = res.data;*/
/* 		// 		for(var i in data){*/
/* 		// 			employees[data[i]['id']] =data[i]['name']; */
/* 		// 		}*/
/* 		// 	}*/
/* 		// })*/
/* */
/* 		cs.getNodes();*/
/* */
/* 		//放大图片*/
/* 		bigPic();*/
/* 		function bigPic(){*/
/* 			$('img[data]').unbind('click').click(function(){*/
/* 				$('#big_pic').show().find('img').attr('src',$(this).attr('src'));*/
/* */
/* 				$('#big_pic').unbind('click').click(function(){*/
/* 					$(this).hide();*/
/* 				});*/
/* 			});*/
/* 		}*/
/* */
/* 		//获取用户信息*/
/* 		getuserInfo();*/
/* 		function getuserInfo() {*/
/* 			var id = ykp.getCookie("uid");*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_employees/get_info',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					id:id*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					//console.log(data);*/
/* 					userInfo = data;*/
/* 					var maritalStatus = ['在职','请假','离职'];//在职状态*/
/* 					var sex = ['未知','男','女'];//性别*/
/* 					var marriage = ['未婚','已婚','离婚'];//婚姻状态*/
/* 					var field = '';*/
/* 					$('[data]').each(function(i,e) {*/
/* 						field = $(this).attr('data');*/
/* 						//对日期数据做额外处理*/
/* 						if($(this).attr('data') == 'employedDate' || $(this).attr('data') == 'birthday') {*/
/* 							$(this).text(data[field] != '0' ? cs.getNowTime(data[field]) : '');*/
/* 							return true;*/
/* 						}*/
/* 						//对图片数据做额外处理*/
/* 						if($(this).attr('data') == 'img_card' || $(this).attr('data') == 'avatar' || $(this).attr('data') == 'img_school' || $(this).attr('data') == 'img_qualifications' || $(this).attr('data') == 'img_labour' || $(this).attr('data') == 'img_other') {*/
/* 							if(data[field]) {*/
/* 								$(this).attr('src', data[field]);*/
/* 								$(this).attr('data-url', data[field]);*/
/* 								$(this).show();*/
/* 							}else{*/
/* 								$(this).attr('src', defaultImgSrc);*/
/* 							}*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('data') == 'maritalStatus'){*/
/* 							$(this).text(maritalStatus[data[field]]);*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('data') == 'sex'){*/
/* 							$(this).text(sex[data[field]]);*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('data') == 'marriage'){*/
/* 							$(this).text(marriage[data[field]]);*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('data') == 'bmm_department.name'){*/
/* 							$(this).text([data['bmm_department.name']]);*/
/* 							return true;*/
/* 						}*/
/* 						if($(this).attr('data') == 'role_id'){*/
/* 							$(this).text([data['bmm_department.name']]);*/
/* 							return true;*/
/* 						}*/
/* 						$(this).text(data[field]);*/
/* 					})*/
/* */
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		$('#edit').click(function() {*/
/* 			//编辑*/
/* 			showMark('#template');*/
/* 			cs.timeplug();*/
/* 			$('#showBox .title').text('编辑个人信息');*/
/* 			var field = '';*/
/* 			$('#templateCon [addfield]').each(function(i,e) {*/
/* 				field = $(this).attr('addfield');*/
/* 				if($(this).attr('addfield') == 'img_card' || $(this).attr('addfield') == 'img_school' || $(this).attr('addfield') == 'img_qualifications' || $(this).attr('addfield') == 'img_labour' || $(this).attr('addfield') == 'img_other' || $(this).attr('addfield') == 'avatar') {*/
/* 					if(userInfo[field]) {*/
/* */
/* 						$(this).attr('src', userInfo[field]);*/
/* 						$(this).attr('data-url', userInfo[field]);*/
/* 					}else{*/
/* 						$(this).attr('src', defaultImgSrc);*/
/* 					}*/
/* 					return true;*/
/* 				}*/
/* */
/* 				$(this).attr('addfield') == 'birthday' ? $(this).val(userInfo[field] != '0' ? cs.getNowTime(userInfo[field]) : '') : $(this).val( userInfo[field]);*/
/* 			});*/
/* */
/* 			$('#templateBox input[type=file]').each(function(i) {*/
/* 				$('#templateBox .upload' + i).click(function() {*/
/* 					cs.imgResize('#templateBox .upload' + i, function(res) {*/
/* 						$('#templateBox').find('.js_photo').eq(i).find('img').attr('src', res.data.url);*/
/* 						$('#templateBox').find('.js_photo').eq(i).find('img').attr('data-url', res.data.url);*/
/* 					})*/
/* 				})*/
/* 			});*/
/* */
/* 			$('#templateBox #add').click(function() {*/
/* 				var data = {*/
/* 					id: ykp.getCookie("uid")*/
/* 				};*/
/* 				$('#templateBox .item_form').find('input[addfield],select[addfield]').each(function(i, element) {*/
/* 						if($(this).val() == "") {*/
/* 							ykp.prompt($(this).prev().text() + "不能为空！");*/
/* 							status = false;*/
/* 							return false;*/
/* 						}*/
/* 						*/
/* 						if($(this).attr('addfield') == 'birthday'){*/
/* 							data[$(this).attr('addfield')] = new Date($(this).val()) / 1000;*/
/* 							return true;*/
/* 						}*/
/* 						*/
/* 						data[$(this).attr('addfield')] = $(this).val();*/
/* 				});*/
/* 				$('#templateBox').find('img').each(function(i,e) {*/
/* 					if($(this).attr('data-url') != "") {*/
/* 						data[$(this).attr('addfield')] = $(this).attr('data-url');*/
/* 					}*/
/* 				});*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_employees/edit_info',*/
/* 					method: "post",*/
/* 					data: data,*/
/* 					success: function(res) {*/
/* 						ykp.prompt('编辑成功');*/
/* 						cs.close();*/
/* 						getuserInfo();*/
/* 					}*/
/* 				})*/
/* 			});*/
/* */
/* 		})*/
/* */
/* 		$('#seeMore').click(function() {*/
/* 			if($(this).hasClass('see')) {*/
/* 				$(this).text('查看更多').removeClass('see');*/
/* 				$('#ys').hide();*/
/* 			} else {*/
/* 				$('#ys').show();*/
/* 				$(this).addClass('see').text('取消查看');*/
/* 			}*/
/* */
/* 		})*/
/* */
/* 		//修改密码*/
/* 		$('#changePwd').unbind('click').click(function() {*/
/* 			var id = ykp.getCookie("uid");*/
/* 			$('#label_popup').show();*/
/* 			$('#label_popup .hold').click(function() {*/
/* 				var result = ykp.getFormData('#label_popup',true);*/
/* 				var yPaw = $('#label_popup').find('input').eq(0).val();*/
/* 				var nPwd = $('#label_popup').find('input').eq(1).val();	*/
/* 				var nPwd1 = $('#label_popup').find('input').eq(2).val();	*/
/* 				if(result.status) {*/
/* 					if(nPwd != nPwd1){*/
/* 						ykp.prompt('2次新密码不一致');*/
/* 						return false;*/
/* 					}*/
/* 					ykp.doAjax({*/
/* 						url: "/api/api_employees/change_pwd",*/
/* 						data: {*/
/* 							password: yPaw,*/
/* 							newPassword: nPwd,*/
/* 							id:id*/
/* 						},*/
/* 						success: function(res) {*/
/* 							if(res.code == 200) {*/
/* 								ykp.prompt('修改成功');*/
/* 								$('#label_popup').find('input').val('');*/
/* 								$('.close_label').parents('.label_popup').fadeOut();*/
/* 							}else {*/
/* 								ykp.prompt(res.msg);*/
/* 								$('#label_popup').find('input').val('');*/
/* 								$('.close_label').parents('.label_popup').fadeOut();*/
/* 							}*/
/* 						}*/
/* 					})*/
/* 				}*/
/* 				*/
/* 				*/
/* 			})*/
/* 			cs.closePop();*/
/* 		})*/
/* */
/* 	*/
/* */
/* 	})*/
/* </script>*/
