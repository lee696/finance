<?php

/* admin/manage/jurisdiction.html */
class __TwigTemplate_bd72ecea51f356e27e0867e4d10029149104e5503f188b7c7a2352d8263c95f0 extends Twig_Template
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
\t.powerContent {
\t\tdisplay: inline-block;
\t\tborder: 1px solid #ddd;
\t\tpadding:10px 15px;
\t}
\t
\t/*.functionPower ul {
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
\t}*/
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
\t\tpadding-left: 30px;
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
\t.clientPower {
\t\tmin-width: 900px;
\t}
\t.li_tit>p>em{
\t    position: relative;
\t    bottom: 0;
\t}
\tvolist>label{
\t\tposition: relative;
\t    bottom: 0;
\t}
\tb.power_name {
\t    position: relative;
\t    bottom: 2px;
\t}
\tinput.nodes{
\t\tmargin-right:5px;
\t}
</style>
<div class=\"widget-main\" style=\"height:100%;\">
\t\t<div class=\"actions\" id=\"topTool\"  contentAuthority=\"209\">
\t\t\t<button id=\"addrole\" class=\"btn btn-info btn-sm\">添加角色</button>
\t\t</div>
\t\t<div class=\"tabbable tabs-left\" style=\"position: relative;height:calc(100% - 61px);;\">
\t\t\t<ul class=\"nav nav-tabs\" id=\"myTab3\">

\t\t\t</ul>
\t\t\t<div class=\"tab-content\" style=\"height:100%;\">
\t\t\t\t<div id=\"item1\" class=\"tab-pane active\" style=\"height:100%;\">
\t\t\t\t\t<div class=\"powerContent\" style=\"width:100%;\">

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div style=\"position: absolute; width: 100%; height: 100%; top: -1px; left: -5px; background: #fff; display: none; z-index: 999;\" id=\"addRole\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label style=\" margin-right:5px;\" class=\"\"> 角色名称： </label>
\t\t\t\t\t<input type=\"text\" id=\"name\" addfield=\"name\" style=\"margin-right:5px;height:30px;\" value=\"\">
\t\t\t\t\t<button class='btn btn-info btn-sm checkAll checkAll1'>全选</button>
\t\t\t\t\t<button class='btn btn-info btn-sm checkAll checkAll2'>反选</button>
\t\t\t\t</div>
\t\t\t\t<div id=\"_addRole\" style=\"height: calc(100% - 95px);margin-top:20px;overflow:auto;\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"bottomTool\" style=\"text-align: center; border: none; padding: 20px;\">
\t\t\t\t\t<button id=\"submit\" style=\"margin-right: 5px;\" class=\"btn btn-info btn-sm\">保存</button>
\t\t\t\t\t<button id=\"scale\" class=\"btn btn-info btn-sm\">取消</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"label_popup\" id=\"feedBack\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t\t        box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t\t<span style=\"display: inline-block;\">新角色名称</span>
\t\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t\t</div>
\t\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t\t<input type=\"text\" width=\"200px\" style=\"margin: auto;\" id=\"labelName\" />
\t\t\t\t\t<!--<hr>-->
\t\t\t\t</div>
\t\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t\t<button class=\"close_label\">关闭</button>
\t\t\t\t\t<button class=\"hold\">保存</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script type=\"text/javascript\">
\t\$(function() {
\t\tvar nodes = \"\";
\t\tcs.getNodes([209]);
\t\t//获取所有角色
\t\tgetListRol(); 
\t\tfunction getListRol(id) {
\t\t\tykp.doAjax({
\t\t\t\turl: \"/api/api_role/list_role\",
\t\t\t\tmethod: 'get',
\t\t\t\tdata: {},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tnodes = data;
\t\t\t\t\tvar content = \"\";
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tcontent +=
\t\t\t\t\t\t\t`<li data-id=\"\${data[i]['id']}\">
\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"item\${parseInt(i)+1}\" style=\"cursor: pointer;     padding: 0px;\">
\t\t\t\t\t\t\t\t\t<em style=\"width:75%;display: inline-block;padding: 10px 10px 10px 10px;\">\${data[i]['name']}</em>
\t\t\t\t\t\t\t\t\t<span style=\"float: right;cursor: pointer; margin: 9px 0;\" contentAuthority=\"210\" title=\"编辑\"><i class=\"ace-icon fa fa-pencil  align-top\"></i></span>
\t\t\t\t\t\t\t\t\t<span style=\"float: right;cursor: pointer; margin: 9px 0;\" contentAuthority=\"210\" title=\"复制\"><i class=\"ace-icon fa fa-clipboard align-top\"></i></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>`;
\t\t\t\t\t}

\t\t\t\t\t\$('#myTab3').html(content);
\t\t\t\t\tcs.getNodes([210]);

\t\t\t\t\t\$('#item1 .title').text(data[0]['name']);

\t\t\t\t\t//点击em切换角色
\t\t\t\t\tclickGroup();   

\t\t\t\t\t//默认初始化数据
\t\t\t\t\tif(id){
\t\t\t\t\t\t\$('#myTab3').find('li[data-id=\"'+ id +'\"]').addClass('active');
\t\t\t\t\t\t
\t\t\t\t\t}else{
\t\t\t\t\t\t\$('#myTab3').find('li:first').addClass('active');
\t\t\t\t\t} 

\t\t\t\t\t//获取选定角色所拥有权限
\t\t\t\t\tgetRole(0,id);

\t\t\t\t\t//更改角色权限
\t\t\t\t\t\$('.fa-pencil').unbind('click').click(function() {
\t\t\t\t\t\tvar id = \$(this).parents('li').attr('data-id');
\t\t\t\t\t\tvar name = \$(this).parents('span').prev().text();
\t\t\t\t\t\tshowEdit(1,name,id,true);
\t\t\t\t\t})
\t\t\t\t\t
\t\t\t\t\t\$(\".fa-clipboard\").unbind('click').click(function() {
\t\t\t\t\t\tvar index = \$(this).parents('li').index();
\t\t\t\t\t\tconsole.log(index);
\t\t\t\t\t\t\$('#feedBack').show();
\t\t\t\t\t\t\$('#feedBack').find('input').val('');
\t\t\t\t\t\tvar role_id = nodes[index]['nodes'];
\t\t\t\t\t\t\$('#feedBack .hold').unbind('click').click(function() {
\t\t\t\t\t\t\tvar approve_reply = \$('#feedBack').find('input').val().trim();
\t\t\t\t\t\t\tif(approve_reply == '') {
\t\t\t\t\t\t\t\tykp.prompt('不能为空！');
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\turl:\"/api/api_role/role_add_edit\",
\t\t\t\t\t\t\t\tmethod:\"post\",
\t\t\t\t\t\t\t\tdata:{
\t\t\t\t\t\t\t\t\tname:approve_reply,
\t\t\t\t\t\t\t\t\tnodes:role_id
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess:function(res){
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tykp.prompt('添加成功');
\t\t\t\t\t\t\t\t\tgetListRol(); 
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t\t\t})
\t\t\t\t\t\tcs.closePop();
\t\t\t\t\t})
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//获取选定角色所拥有的权限
\t\t//statu为1则编辑 id为角色id
\t\tfunction getRole(statu,id) {
\t\t\tvar id = id ? id : \$('#myTab3').find('.active').attr('data-id');
\t\t\tykp.doAjax({
\t\t\t\turl: \"/api/api_role/list_cate\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\trole: id
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tif(statu == 1){
\t\t\t\t\t\t//编辑角色权限，将角色所拥有权限选定
\t\t\t\t\t\tselectedPower(res);
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tif(statu == 0){
\t\t\t\t\t\t\$('.powerContent').html('');
\t\t\t\t\t}
\t\t\t\t\taddList(res,statu);
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//编辑角色权限，将角色所拥有权限选定
\t\tfunction selectedPower(res){
\t\t\tvar data = res.data.nodes;
\t\t\tvar nodes = data.split(',');
\t\t\tfor(var i in nodes){
\t\t\t\t\$('#_addRole').find('input[data-id=\"'+ nodes[i] +'\"]').prop('checked',true);
\t\t\t\t\$('#_addRole').find('input[dtid=\"'+ nodes[i] +'\"]').prop('checked',true);
\t\t\t}
\t\t}

\t\t//将权限数据展示到内容区域
\t\t//statu为0则展示，为1则编辑，为2则添加
\t\tfunction addList(res,statu) {
\t\t\tvar data = res.data.list;

\t\t\tvar power_html = [];
\t\t\tvar child_powers = [];
\t\t\tvar parent_powers = [];
\t\t\tfor(var i in data) {
\t\t\t\tpower_html.push(
\t\t\t\t\t'<div class=\"clientPower\">'+
\t\t\t\t\t\t'<div class=\"powerRelative\">'+
\t\t\t\t\t\t\t'<label class=\"page_name\">'+ data[i]['name'] +'</label>'+
\t\t\t\t\t\t'</div>'+
\t\t\t\t\t\t'<div class=\"powerDetail\">'+
\t\t\t\t\t\t\t'<div class=\"li_bar li_bar_two\">'
\t\t\t\t);

\t\t\t\tparent_powers = data[i]['child'];

\t\t\t\tfor(var k in parent_powers){
\t\t\t\t\tpower_html.push(
\t\t\t\t\t\t'<volist name=\"nodes\" id=\"node\">'+
\t\t\t\t\t\t\t'<div dataid=\"'+ parent_powers[k]['cate_id'] +'\" class=\"li_tit\">'+
\t\t\t\t\t\t\t\t'<p>'+
\t\t\t\t\t\t\t\t\t'<em>'+
\t\t\t\t\t\t\t\t\t\t'<em>'+
\t\t\t\t\t\t\t\t\t\t\t'<label class=\"checked\">'+
\t\t\t\t\t\t\t\t\t\t\t\t'<input type=\"checkbox\" class=\"nodes\" data-id=\"'+ parent_powers[k]['id'] +'\">'+
\t\t\t\t\t\t\t\t\t\t\t\t'<b class=\"power_name\">'+ parent_powers[k]['name'] +'</b>'+
\t\t\t\t\t\t\t\t\t\t\t'</label>'+
\t\t\t\t\t\t\t\t\t\t'</em>'+
\t\t\t\t\t\t\t\t\t'</em>'+
\t\t\t\t\t\t\t\t\t'<span>'+
\t\t\t\t\t\t\t\t\t\t'<volist id=\"child_node\">'
\t\t\t\t\t);

\t\t\t\t\tif(parent_powers[k]['child']){
\t\t\t\t\t\tchild_powers = data[i]['child'][0]['child'];
\t\t\t\t\t\tfor(var z in child_powers){
\t\t\t\t\t\t\tpower_html.push(
\t\t\t\t\t\t\t\t'<label class=\"checked\">'+
\t\t\t\t\t\t\t\t\t'<input type=\"checkbox\" class=\"nodes\" data-parent=\"'+ child_powers[z]['parent'] +'\" dtid=\"'+ child_powers[z]['id'] +'\">'+
\t\t\t\t\t\t\t\t\t\t'<b class=\"power_name\">'+ child_powers[z]['name'] +'</b>'+
\t\t\t\t\t\t\t\t'</label>'
\t\t\t\t\t\t\t);
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tpower_html.push(
\t\t\t\t\t\t'</volist>'+
\t\t\t\t\t\t\t\t'</span>'+
\t\t\t\t\t\t\t'</p>'+
\t\t\t\t\t\t'</div>'
\t\t\t\t\t);
\t\t\t\t}

\t\t\t\tpower_html.push('</volist></div></div></div>');
\t\t\t}

\t\t\tif(statu == 0){
\t\t\t\t\$('.powerContent').html(power_html.join(''));
\t\t\t\t\$('.powerContent').find('input').prop('checked',true).prop('disabled',true);
\t\t\t}
\t\t\tif(statu == 1){
\t\t\t\t\$('#_addRole').html(power_html.join(''));
\t\t\t\t\$('#_addRole').find('input').show();
\t\t\t\tgetRole(1);
\t\t\t}
\t\t\tif(statu == 2){
\t\t\t\t\$('#_addRole').html(power_html.join(''));
\t\t\t\t\$('#_addRole').find('input').show();
\t\t\t}

\t\t\t//父级权限子级权限互选
\t\t\tcheckedStatus();
\t\t}

\t\t//父级权限子级权限互选
\t\tfunction checkedStatus() {
\t\t\t\$('input[type=\"checkbox\"]').unbind('click').click(function() {
\t\t\t\tif(\$(this).attr('data-parent')) {
\t\t\t\t\tif(\$(this).is(':checked')){
\t\t\t\t\t\tif(!\$('#_addRole #node input[data-id=\"'+ \$(this).attr('data-parent') +'\"]').is(':checked')){
\t\t\t\t\t\t\t\$('#_addRole #node input[data-id=\"'+ \$(this).attr('data-parent') +'\"]').prop('checked',true);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif(\$(this).attr('data-id')) {
\t\t\t\t\tif(!\$(this).is(':checked')){
\t\t\t\t\t\tvar id = \$(this).attr('data-id');
\t\t\t\t\t\t\$('#_addRole input[data-parent=' + id + ']').prop('checked', this.checked);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//添加角色
\t\taddrole();  
\t\tfunction addrole(status,id) {
\t\t\t\$('#addrole').unbind('click').click(function() {
\t\t\t\tshowEdit(2);
\t\t\t})
\t\t}

\t\t//编辑 || 添加
\t\t//statu为1则编辑，为2则添加   copy  复制
\t\tfunction showEdit(statu,name,id,copy) {
\t\t\tconsole.log(id);
\t\t\t\$('#addRole').show();
\t\t\t\$('.tab-content').hide();
\t\t\t\$('#myTab3').hide();
\t\t\t\$('#name').val(name);

\t\t\tget_user_nodes(statu);

\t\t\t\$('#submit').unbind('click').click(function() {
\t\t\t\tvar nodes = [];
\t\t\t\tvar num = 0;
\t\t\t\tvar name = \$('#name').val();
\t\t\t\tif(!name){
\t\t\t\t\tykp.prompt('名称不能为空！');
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t
\t\t\t\t\$('#addRole input[type=\"checkbox\"]').each(function(i) {
\t\t\t\t\tif(\$(this).is(':checked')) {
\t\t\t\t\t\tnodes.push(\$(this).attr('data-id') || \$(this).attr('dtid'));
\t\t\t\t\t\t++num;
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t
\t\t\t\tif(num > 0) {
\t\t\t\t\tvar data = {
\t\t\t\t\t\tname: name,
\t\t\t\t\t\tnodes: nodes.join(',')
\t\t\t\t\t}

\t\t\t\t\t//编辑时
\t\t\t\t\tif(statu == 1 && !copy) {   
\t\t\t\t\t\tdata.id = id;
\t\t\t\t\t}else if(copy && statu != 1){
\t\t\t\t\t\tdata.id = \"\";
\t\t\t\t\t}else if(statu == 1 && copy){
\t\t\t\t\t\tdata.id = id;
\t\t\t\t\t}
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_role/role_add_edit',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: data,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tmsg = statu == 1 ? '编辑成功' : '添加成功';

\t\t\t\t\t\t\tykp.prompt(msg);
\t\t\t\t\t\t\tgetListRol(id);
\t\t\t\t\t\t\t\$('#addRole').hide();
\t\t\t\t\t\t\t\$('.tab-content').show();
\t\t\t\t\t\t\t\$('#myTab3').show();
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t}else {
\t\t\t\t\tykp.prompt('请选择权限再保存');
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t})

\t\t\t\$('#scale').unbind('click').click(function() {
\t\t\t\t\$('#addRole').hide();
\t\t\t\t\$('.tab-content').show();
\t\t\t\t\$('#myTab3').show();
\t\t\t})
\t\t}

\t\t//获取所有权限数据
\t\t//statu为1则编辑，为2则添加
\t\tfunction get_user_nodes(statu) {
\t\t\t\$('#_addRole').html('');
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_role/get_user_nodes',
\t\t\t\tmethod: \"get\",
\t\t\t\tdata: {},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\taddList(res,statu);
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//全选
\t\tcheckAll();
\t\tfunction checkAll(){
\t\t\t\$('.checkAll').unbind('click').click(function(){
\t\t\t\tif(\$(this).hasClass('checkAll1')){
\t\t\t\t\t\$('#_addRole').find('input[type=\"checkbox\"]').prop('checked',true);
\t\t\t\t}
\t\t\t\tif(\$(this).hasClass('checkAll2')){
\t\t\t\t\t\$('#_addRole').find('input[type=\"checkbox\"]').prop('checked',false);
\t\t\t\t}\t
\t\t\t\t
\t\t\t});
\t\t}

\t\t//点击em切换角色
\t\tfunction clickGroup() {
\t\t\t\$('#myTab3 em').unbind('click').click(function() {
\t\t\t\tvar id = \$(this).parents('li').attr('data-id');
\t\t\t\tgetRole(0,id);
\t\t\t})
\t\t}
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/manage/jurisdiction.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	.powerContent {*/
/* 		display: inline-block;*/
/* 		border: 1px solid #ddd;*/
/* 		padding:10px 15px;*/
/* 	}*/
/* 	*/
/* 	/*.functionPower ul {*/
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
/* 	}*//* */
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
/* 		padding-left: 30px;*/
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
/* 	.clientPower {*/
/* 		min-width: 900px;*/
/* 	}*/
/* 	.li_tit>p>em{*/
/* 	    position: relative;*/
/* 	    bottom: 0;*/
/* 	}*/
/* 	volist>label{*/
/* 		position: relative;*/
/* 	    bottom: 0;*/
/* 	}*/
/* 	b.power_name {*/
/* 	    position: relative;*/
/* 	    bottom: 2px;*/
/* 	}*/
/* 	input.nodes{*/
/* 		margin-right:5px;*/
/* 	}*/
/* </style>*/
/* <div class="widget-main" style="height:100%;">*/
/* 		<div class="actions" id="topTool"  contentAuthority="209">*/
/* 			<button id="addrole" class="btn btn-info btn-sm">添加角色</button>*/
/* 		</div>*/
/* 		<div class="tabbable tabs-left" style="position: relative;height:calc(100% - 61px);;">*/
/* 			<ul class="nav nav-tabs" id="myTab3">*/
/* */
/* 			</ul>*/
/* 			<div class="tab-content" style="height:100%;">*/
/* 				<div id="item1" class="tab-pane active" style="height:100%;">*/
/* 					<div class="powerContent" style="width:100%;">*/
/* */
/* 					</div>*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 			<div style="position: absolute; width: 100%; height: 100%; top: -1px; left: -5px; background: #fff; display: none; z-index: 999;" id="addRole">*/
/* 				<div class="form-group">*/
/* 					<label style=" margin-right:5px;" class=""> 角色名称： </label>*/
/* 					<input type="text" id="name" addfield="name" style="margin-right:5px;height:30px;" value="">*/
/* 					<button class='btn btn-info btn-sm checkAll checkAll1'>全选</button>*/
/* 					<button class='btn btn-info btn-sm checkAll checkAll2'>反选</button>*/
/* 				</div>*/
/* 				<div id="_addRole" style="height: calc(100% - 95px);margin-top:20px;overflow:auto;">*/
/* 					*/
/* 				</div>*/
/* 				<div class="bottomTool" style="text-align: center; border: none; padding: 20px;">*/
/* 					<button id="submit" style="margin-right: 5px;" class="btn btn-info btn-sm">保存</button>*/
/* 					<button id="scale" class="btn btn-info btn-sm">取消</button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="label_popup" id="feedBack" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 			<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 		        box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 				<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 					<span style="display: inline-block;">新角色名称</span>*/
/* 					<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 				</div>*/
/* 				<div style="padding: 10px 50px;">*/
/* 					<input type="text" width="200px" style="margin: auto;" id="labelName" />*/
/* 					<!--<hr>-->*/
/* 				</div>*/
/* 				<div style="padding:15px;text-align:right;">*/
/* 					<button class="close_label">关闭</button>*/
/* 					<button class="hold">保存</button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script type="text/javascript">*/
/* 	$(function() {*/
/* 		var nodes = "";*/
/* 		cs.getNodes([209]);*/
/* 		//获取所有角色*/
/* 		getListRol(); */
/* 		function getListRol(id) {*/
/* 			ykp.doAjax({*/
/* 				url: "/api/api_role/list_role",*/
/* 				method: 'get',*/
/* 				data: {},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					nodes = data;*/
/* 					var content = "";*/
/* 					for(var i in data) {*/
/* 						content +=*/
/* 							`<li data-id="${data[i]['id']}">*/
/* 								<a data-toggle="tab" href="item${parseInt(i)+1}" style="cursor: pointer;     padding: 0px;">*/
/* 									<em style="width:75%;display: inline-block;padding: 10px 10px 10px 10px;">${data[i]['name']}</em>*/
/* 									<span style="float: right;cursor: pointer; margin: 9px 0;" contentAuthority="210" title="编辑"><i class="ace-icon fa fa-pencil  align-top"></i></span>*/
/* 									<span style="float: right;cursor: pointer; margin: 9px 0;" contentAuthority="210" title="复制"><i class="ace-icon fa fa-clipboard align-top"></i></span>*/
/* 								</a>*/
/* 							</li>`;*/
/* 					}*/
/* */
/* 					$('#myTab3').html(content);*/
/* 					cs.getNodes([210]);*/
/* */
/* 					$('#item1 .title').text(data[0]['name']);*/
/* */
/* 					//点击em切换角色*/
/* 					clickGroup();   */
/* */
/* 					//默认初始化数据*/
/* 					if(id){*/
/* 						$('#myTab3').find('li[data-id="'+ id +'"]').addClass('active');*/
/* 						*/
/* 					}else{*/
/* 						$('#myTab3').find('li:first').addClass('active');*/
/* 					} */
/* */
/* 					//获取选定角色所拥有权限*/
/* 					getRole(0,id);*/
/* */
/* 					//更改角色权限*/
/* 					$('.fa-pencil').unbind('click').click(function() {*/
/* 						var id = $(this).parents('li').attr('data-id');*/
/* 						var name = $(this).parents('span').prev().text();*/
/* 						showEdit(1,name,id,true);*/
/* 					})*/
/* 					*/
/* 					$(".fa-clipboard").unbind('click').click(function() {*/
/* 						var index = $(this).parents('li').index();*/
/* 						console.log(index);*/
/* 						$('#feedBack').show();*/
/* 						$('#feedBack').find('input').val('');*/
/* 						var role_id = nodes[index]['nodes'];*/
/* 						$('#feedBack .hold').unbind('click').click(function() {*/
/* 							var approve_reply = $('#feedBack').find('input').val().trim();*/
/* 							if(approve_reply == '') {*/
/* 								ykp.prompt('不能为空！');*/
/* 								return false;*/
/* 							}*/
/* 							*/
/* 							ykp.doAjax({*/
/* 								url:"/api/api_role/role_add_edit",*/
/* 								method:"post",*/
/* 								data:{*/
/* 									name:approve_reply,*/
/* 									nodes:role_id*/
/* 								},*/
/* 								success:function(res){*/
/* 									*/
/* 									ykp.prompt('添加成功');*/
/* 									getListRol(); */
/* 								}*/
/* 							})*/
/* 							$('.close_label').parents('.label_popup').fadeOut();*/
/* 						})*/
/* 						cs.closePop();*/
/* 					})*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//获取选定角色所拥有的权限*/
/* 		//statu为1则编辑 id为角色id*/
/* 		function getRole(statu,id) {*/
/* 			var id = id ? id : $('#myTab3').find('.active').attr('data-id');*/
/* 			ykp.doAjax({*/
/* 				url: "/api/api_role/list_cate",*/
/* 				method: "post",*/
/* 				data: {*/
/* 					role: id*/
/* 				},*/
/* 				success: function(res) {*/
/* 					if(statu == 1){*/
/* 						//编辑角色权限，将角色所拥有权限选定*/
/* 						selectedPower(res);*/
/* 						return;*/
/* 					}*/
/* 					if(statu == 0){*/
/* 						$('.powerContent').html('');*/
/* 					}*/
/* 					addList(res,statu);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//编辑角色权限，将角色所拥有权限选定*/
/* 		function selectedPower(res){*/
/* 			var data = res.data.nodes;*/
/* 			var nodes = data.split(',');*/
/* 			for(var i in nodes){*/
/* 				$('#_addRole').find('input[data-id="'+ nodes[i] +'"]').prop('checked',true);*/
/* 				$('#_addRole').find('input[dtid="'+ nodes[i] +'"]').prop('checked',true);*/
/* 			}*/
/* 		}*/
/* */
/* 		//将权限数据展示到内容区域*/
/* 		//statu为0则展示，为1则编辑，为2则添加*/
/* 		function addList(res,statu) {*/
/* 			var data = res.data.list;*/
/* */
/* 			var power_html = [];*/
/* 			var child_powers = [];*/
/* 			var parent_powers = [];*/
/* 			for(var i in data) {*/
/* 				power_html.push(*/
/* 					'<div class="clientPower">'+*/
/* 						'<div class="powerRelative">'+*/
/* 							'<label class="page_name">'+ data[i]['name'] +'</label>'+*/
/* 						'</div>'+*/
/* 						'<div class="powerDetail">'+*/
/* 							'<div class="li_bar li_bar_two">'*/
/* 				);*/
/* */
/* 				parent_powers = data[i]['child'];*/
/* */
/* 				for(var k in parent_powers){*/
/* 					power_html.push(*/
/* 						'<volist name="nodes" id="node">'+*/
/* 							'<div dataid="'+ parent_powers[k]['cate_id'] +'" class="li_tit">'+*/
/* 								'<p>'+*/
/* 									'<em>'+*/
/* 										'<em>'+*/
/* 											'<label class="checked">'+*/
/* 												'<input type="checkbox" class="nodes" data-id="'+ parent_powers[k]['id'] +'">'+*/
/* 												'<b class="power_name">'+ parent_powers[k]['name'] +'</b>'+*/
/* 											'</label>'+*/
/* 										'</em>'+*/
/* 									'</em>'+*/
/* 									'<span>'+*/
/* 										'<volist id="child_node">'*/
/* 					);*/
/* */
/* 					if(parent_powers[k]['child']){*/
/* 						child_powers = data[i]['child'][0]['child'];*/
/* 						for(var z in child_powers){*/
/* 							power_html.push(*/
/* 								'<label class="checked">'+*/
/* 									'<input type="checkbox" class="nodes" data-parent="'+ child_powers[z]['parent'] +'" dtid="'+ child_powers[z]['id'] +'">'+*/
/* 										'<b class="power_name">'+ child_powers[z]['name'] +'</b>'+*/
/* 								'</label>'*/
/* 							);*/
/* 						}*/
/* 					}*/
/* */
/* 					power_html.push(*/
/* 						'</volist>'+*/
/* 								'</span>'+*/
/* 							'</p>'+*/
/* 						'</div>'*/
/* 					);*/
/* 				}*/
/* */
/* 				power_html.push('</volist></div></div></div>');*/
/* 			}*/
/* */
/* 			if(statu == 0){*/
/* 				$('.powerContent').html(power_html.join(''));*/
/* 				$('.powerContent').find('input').prop('checked',true).prop('disabled',true);*/
/* 			}*/
/* 			if(statu == 1){*/
/* 				$('#_addRole').html(power_html.join(''));*/
/* 				$('#_addRole').find('input').show();*/
/* 				getRole(1);*/
/* 			}*/
/* 			if(statu == 2){*/
/* 				$('#_addRole').html(power_html.join(''));*/
/* 				$('#_addRole').find('input').show();*/
/* 			}*/
/* */
/* 			//父级权限子级权限互选*/
/* 			checkedStatus();*/
/* 		}*/
/* */
/* 		//父级权限子级权限互选*/
/* 		function checkedStatus() {*/
/* 			$('input[type="checkbox"]').unbind('click').click(function() {*/
/* 				if($(this).attr('data-parent')) {*/
/* 					if($(this).is(':checked')){*/
/* 						if(!$('#_addRole #node input[data-id="'+ $(this).attr('data-parent') +'"]').is(':checked')){*/
/* 							$('#_addRole #node input[data-id="'+ $(this).attr('data-parent') +'"]').prop('checked',true);*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				if($(this).attr('data-id')) {*/
/* 					if(!$(this).is(':checked')){*/
/* 						var id = $(this).attr('data-id');*/
/* 						$('#_addRole input[data-parent=' + id + ']').prop('checked', this.checked);*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//添加角色*/
/* 		addrole();  */
/* 		function addrole(status,id) {*/
/* 			$('#addrole').unbind('click').click(function() {*/
/* 				showEdit(2);*/
/* 			})*/
/* 		}*/
/* */
/* 		//编辑 || 添加*/
/* 		//statu为1则编辑，为2则添加   copy  复制*/
/* 		function showEdit(statu,name,id,copy) {*/
/* 			console.log(id);*/
/* 			$('#addRole').show();*/
/* 			$('.tab-content').hide();*/
/* 			$('#myTab3').hide();*/
/* 			$('#name').val(name);*/
/* */
/* 			get_user_nodes(statu);*/
/* */
/* 			$('#submit').unbind('click').click(function() {*/
/* 				var nodes = [];*/
/* 				var num = 0;*/
/* 				var name = $('#name').val();*/
/* 				if(!name){*/
/* 					ykp.prompt('名称不能为空！');*/
/* 					return false;*/
/* 				}*/
/* 				*/
/* 				$('#addRole input[type="checkbox"]').each(function(i) {*/
/* 					if($(this).is(':checked')) {*/
/* 						nodes.push($(this).attr('data-id') || $(this).attr('dtid'));*/
/* 						++num;*/
/* 					}*/
/* 				})*/
/* 				*/
/* 				if(num > 0) {*/
/* 					var data = {*/
/* 						name: name,*/
/* 						nodes: nodes.join(',')*/
/* 					}*/
/* */
/* 					//编辑时*/
/* 					if(statu == 1 && !copy) {   */
/* 						data.id = id;*/
/* 					}else if(copy && statu != 1){*/
/* 						data.id = "";*/
/* 					}else if(statu == 1 && copy){*/
/* 						data.id = id;*/
/* 					}*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_role/role_add_edit',*/
/* 						method: 'post',*/
/* 						data: data,*/
/* 						success: function(res) {*/
/* 							msg = statu == 1 ? '编辑成功' : '添加成功';*/
/* */
/* 							ykp.prompt(msg);*/
/* 							getListRol(id);*/
/* 							$('#addRole').hide();*/
/* 							$('.tab-content').show();*/
/* 							$('#myTab3').show();*/
/* 						}*/
/* 					})*/
/* 				}else {*/
/* 					ykp.prompt('请选择权限再保存');*/
/* 					return false;*/
/* 				}*/
/* 			})*/
/* */
/* 			$('#scale').unbind('click').click(function() {*/
/* 				$('#addRole').hide();*/
/* 				$('.tab-content').show();*/
/* 				$('#myTab3').show();*/
/* 			})*/
/* 		}*/
/* */
/* 		//获取所有权限数据*/
/* 		//statu为1则编辑，为2则添加*/
/* 		function get_user_nodes(statu) {*/
/* 			$('#_addRole').html('');*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_role/get_user_nodes',*/
/* 				method: "get",*/
/* 				data: {},*/
/* 				success: function(res) {*/
/* 					addList(res,statu);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//全选*/
/* 		checkAll();*/
/* 		function checkAll(){*/
/* 			$('.checkAll').unbind('click').click(function(){*/
/* 				if($(this).hasClass('checkAll1')){*/
/* 					$('#_addRole').find('input[type="checkbox"]').prop('checked',true);*/
/* 				}*/
/* 				if($(this).hasClass('checkAll2')){*/
/* 					$('#_addRole').find('input[type="checkbox"]').prop('checked',false);*/
/* 				}	*/
/* 				*/
/* 			});*/
/* 		}*/
/* */
/* 		//点击em切换角色*/
/* 		function clickGroup() {*/
/* 			$('#myTab3 em').unbind('click').click(function() {*/
/* 				var id = $(this).parents('li').attr('data-id');*/
/* 				getRole(0,id);*/
/* 			})*/
/* 		}*/
/* 	});*/
/* </script>*/
