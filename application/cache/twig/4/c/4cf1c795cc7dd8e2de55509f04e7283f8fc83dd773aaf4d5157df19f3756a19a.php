<?php

/* admin/manage/storehouse.html */
class __TwigTemplate_8c832521f743be9b8d60f12e22d720a5e40cb1131266f8b68be06d05f827dbc0 extends Twig_Template
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
\t#showBox{
\t\tmin-width: 398.78px;
\t}
\t#templateCon #editList .select2-selection__clear{
\t\tmargin-right: 21px;
\t}
\t#templateBox tbody tr td:before{
\t\tcontent: none;
\t}
\t#store_goods th,#store_goods td{
\t\theight: 35px;
\t\ttext-align: left;
\t\tpadding:5px;
\t}
\t#store_goods table{
\t\tborder:none;
\t}
\t#store_goods td:before{
\t\tcontent: none;
\t}
</style>
<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<div>
\t\t\t<!-- <h3 class=\"header smaller lighter blue\">仓库管理</h3> -->
\t\t\t<div class=\"row\" style=\"margin-top: 20px;\">
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 15px;\" contentAuthority=\"211\">
\t\t\t\t\t<button type=\"button\" title=\"添加\" id=\"add\" class=\"btn btn-info btn-sm\" >
\t\t\t\t\t\t添加
                    </button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"custom_table\">
\t\t\t<table id=\"dynamic-table\" style=\"margin-bottom:0px;\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t<th class=\"center thColor\">仓库名称</th>
\t\t\t\t\t\t<th class=\"center\">仓内物品</th>
\t\t\t\t\t\t<th class=\"center\">盘点人</th>
\t\t\t\t\t\t<th class=\"center\">盘点审批人</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"pageList\">

\t\t\t\t</tbody>
\t\t\t</table>

\t\t</div>
\t</div>
</div>

\t<div class=\"label_popup\" id=\"store_goods\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;max-height: 500px;\">
\t\t<div style=\"max-width:500px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
        box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">

\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t<span style=\"display: inline-block;font-size:14px;\">删除仓库物品</span>
\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t</div>
\t\t\t<div style=\"padding: 10px 20px;\">
\t\t\t\t<div style=\"margin-bottom: 10px; margin-top: 10px;max-height:300px;overflow:auto;\" >
\t\t\t\t\t<table>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t                                    <input type=\"checkbox\" class=\"checkAll\">
\t                                    <span class=\"lbl\"></span>
\t                                </label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t物品名称
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t单位
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody class=\"goods_message\">
\t\t\t\t\t\t\t<!-- <tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span>客户</span>
\t\t\t\t\t\t\t\t\t<i style=\"padding:0 5px;\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"customers\"></span>
\t\t\t\t\t\t\t\t\t<i style=\"padding:0 5px;\"></i>
\t\t\t\t\t\t\t\t\t<span>移交给</span>
\t\t\t\t\t\t\t\t\t<i style=\"padding:0 5px;\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr> -->
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div style=\"padding:20px;text-align:right;\">
\t\t\t\t<button class=\"del_label btn btn-info btn-sm\">删除</button>
\t\t\t\t<!-- <button class=\"hold_label btn btn-info btn-sm\">保存</button> -->
\t\t\t</div>
\t\t</div>
\t</div>

<div class=\"row\" id=\"template1\" style=\"display:none;\">
\t<div class=\"col-sm-12\">
\t\t<div class=\"widget-box\">\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div style=\"margin-bottom: 15px;\">
\t\t\t\t\t<label style=\"width: 70px;\" class=\"\"> 仓位名称： </label>
\t\t\t\t\t<select id=\"selectId\" style=\"width: 180px;\">
\t\t\t\t\t\t<option value=\"1\">凭证仓</option>
\t\t\t\t\t\t<option value=\"2\">票据仓</option>
\t\t\t\t\t\t<option value=\"3\">证件仓</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div id=\"listCon\">
\t\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><label class=\"increase\" style=\"position:relative;cursor:pointer;font-size:20px;text-align:center;width:10px;\">+</label></td>
\t\t\t\t\t\t\t\t\t<td>物品名称</td>
\t\t\t\t\t\t\t\t\t<td>单位</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- <label style=\"width: 70px;\" class=\"\"> 物品名称： </label>
\t\t\t\t\t<input type=\"text\" id=\"\" addfield=\"name\">
\t\t\t\t\t<input type=\"text\" id=\"\" addfield=\"unit\" style=\"width: 80px;\" placeholder=\"单位\"> -->
\t\t\t\t</div>
\t\t\t\t<div id=\"editList\" style=\"display: none;\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label style=\"width:96px;\"> 盘点负责人： </label>
\t\t\t\t\t\t<select multiple=\"\" id=\"state0\" name=\"state\" addfield=\"pd\" class=\"state select2 select2-hidden-accessible\" data-placeholder=\"选择盘点负责人\" style=\"width: 200px;\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label style=\"width:96px;\"> 盘点审批负责人： </label>
\t\t\t\t\t\t<select multiple=\"\" id=\"state1\" name=\"state\" addfield=\"sp\" class=\"state select2 select2-hidden-accessible\" data-placeholder=\"选择盘点审批负责人\" style=\"width: 200px;\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.col -->
\t\t\t\t<!--保存按钮-->
\t\t\t\t<div style=\"margin-top:15px;text-align: center;\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<button class=\"btn btn-info\" id=\"submit\">
                            保存
                        </button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 160
        $this->loadTemplate("admin/mark.html", "admin/manage/storehouse.html", 160)->display($context);
        // line 161
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script type=\"text/javascript\">
\t\$(function() {
\t\tcs.getNodes([211]);
\t\tvar order ='bmm_department.id desc';
\t\tvar page_size = 10;
\t\tvar resData = '';
\t\tvar peopleArr = [];

\t\tgetList(1);

\t\tfunction getList(current) {
\t\t\tykp.doAjax({
\t\t\t\tasync:false,
\t\t\t\turl: \"/api/api_employees/f7\",
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\torder:order
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tpeopleArr = res.data;
\t\t\t\t}
\t\t\t})

\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_accountancies/list_goods',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: page_size
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\t\$('#pageList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"color:#7d7d7d !important;text-align:center !important;\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t})

\t\t}

\t\tfunction checkName(col, data) {
\t\t\tvar arr = [];
\t\t\tcol.split(',').forEach(function(item) {
\t\t\t\tfor(var i in data) {
\t\t\t\t\tif(data[i]['bmm_employees.id'] == item) {
\t\t\t\t\t\tarr.push(data[i]['bmm_employees.name']);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t\t
\t\t\treturn arr.join(',');
\t\t}

\t\t//编辑仓库物品
\t\tfunction edit_goods(data){
\t\t\t\$('.edit_goods').unbind('click').click(function(){
\t\t\t\tvar data_type = \$(this).parents('tr').attr('data-type');
\t\t\t\tvar _data = data[data_type];
\t\t\t\tvar goods_list =  _data['list'];

\t\t\t\t// class=\"checkAll\"
\t\t\t\tvar goods_html = [];
\t\t\t\tfor(var i in goods_list){
\t\t\t\t\tgoods_html.push(
\t\t\t\t\t\t`<tr data-id=\"\${goods_list[i]['ckm_warehouse_goods.id']}\">
\t\t\t\t\t\t\t<td style=\"width:20%;\">
\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
                                    <input type=\"checkbox\">
                                    <span class=\"lbl\"></span>
                                </label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td style=\"width:40%;\">
\t\t\t\t\t\t\t\t\${goods_list[i]['ckm_warehouse_goods.name']}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td style=\"width:40%;\">
\t\t\t\t\t\t\t\t\${goods_list[i]['ckm_warehouse_goods.unit']}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>`
\t\t\t\t\t);
\t\t\t\t}

\t\t\t\t\$('#store_goods .goods_message').html(goods_html.join(''));

\t\t\t\t//全选 反选
\t\t\t\tcheckAll();

\t\t\t\t\$('#store_goods').fadeIn();

\t\t\t\t//保存物品编辑信息
\t\t\t\t// saveGoods();

\t\t\t\t//删除物品
\t\t\t\tdelGoods();

\t\t\t\tcs.closePop();
\t\t\t});
\t\t}

\t\t//全选 反选
\t\tfunction checkAll(){
\t\t\t\$('#store_goods .checkAll').unbind('click').click(function(){
\t\t\t\t\$('#store_goods .goods_message').find('input[type=\"checkbox\"]').prop('checked',\$(this).prop('checked'));
\t\t\t});
\t\t}

\t\t//保存编辑物品信息
\t\tfunction saveGoods(){
\t\t\t\$('#store_goods .hold_label').unbind('click').click(function(){
\t\t\t\tvar postdata = {};
\t\t\t\t\$('#store_goods .goods_message').find('tr').each(function(i,e){

\t\t\t\t});
\t\t\t});
\t\t}

\t\t//删除物品信息
\t\tfunction delGoods(){
\t\t\t\$('#store_goods .del_label').unbind('click').click(function(){
\t\t\t\tvar goods_id = [];
\t\t\t\t\$('#store_goods .goods_message [type=\"checkbox\"]').each(function(i,e){
\t\t\t\t\tif(\$(this).prop('checked')){
\t\t\t\t\t\tgoods_id.push(\$(this).parents('tr').attr('data-id'));
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tif(goods_id.length <= 0){
\t\t\t\t\tykp.prompt('请选择物品！');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\t
\t\t\t\tbootbox.confirm('确认删除？',function(flag){
\t\t\t\t\tif(flag){
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl:'/api/api_accountancies/del_goods',
\t\t\t\t\t\t\tmethod:'post',
\t\t\t\t\t\t\tdata:{
\t\t\t\t\t\t\t\tid:goods_id.join(',')
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess:function(res){
\t\t\t\t\t\t\t\tykp.prompt('物品删除成功');
\t\t\t\t\t\t\t\t\$('#store_goods').fadeOut();
\t\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t
\t\t\t});
\t\t}

\t\t//添加列表
\t\tfunction addList(res) {
\t\t\tresData = res.data;
\t\t\tvar data = res.data;
\t\t\tvar content = [];
\t\t\tvar range_title = [];
\t\t\t//遍历次数
\t\t\tvar times;
\t\t\tif(data.PJ != \"\") {
\t\t\t\tvar pjname = [];
\t\t\t\tpd_data =  data.PJ.list;
\t\t\t\ttimes = Math.ceil(pd_data.length / 20);
\t\t\t\tfor(var i in data.PJ.list) {
\t\t\t\t\tpjname.push(data.PJ.list[i]['ckm_warehouse_goods.name']);
\t\t\t\t}
\t\t\t\tfor(var j = 0 ; j < pjname.join(',').length ;j++){
\t\t\t\t\trange_title.push(pjname.join(',').slice(20*j,(j + 1) * 20));
\t\t\t\t}
\t\t\t\tcontent.push('<tr data-type=\"PJ\" data-id=\"' +  data['PJ']['info']['id'] + '\" data-type1=\"2\">' +
\t\t\t\t\t'<td class=\"center tdColor\"><label class=\"pos-rel\" ><a class=\"edit btBlue\" style=\"color:#fff !important\" title=\"负责人\" contentAuthority=\"212\"><i class=\"fa fa-pencil-square-o\"></i></a> <a class=\"edit_goods btRed\" title=\"删除物品\" style=\"color:#fff !important\"><i class=\"fa fa-trash-o\"></i></a></label></td>' +
\t\t\t\t\t'<td class=\"center tdColor\">票据仓</td>' +
\t\t\t\t\t'<td class=\"center\" title=\"'+ range_title.join('&#13;') +'\"><label style=\"width:100px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;\" >'
\t\t\t\t \t\t\t\t+ pjname.join(',') +
\t\t\t \t\t\t\t'</label></td>' +
\t\t\t\t\t'<td class=\"center\">' + (data.PJ.info != \"\" ? checkName(data.PJ.info.pd, peopleArr) : \"暂无盘点人\")+ '</td>' +
\t\t\t\t\t'<td class=\"center\">' + (data.PJ.info != \"\" ? checkName(data.PJ.info.sp, peopleArr) : \"暂无审批人\")+ '</td>' +
\t\t\t\t\t'</tr>');
\t\t\t}
\t\t\tif(data.PZ != \"\") {
\t\t\t\tvar pzname = [];
\t\t\t\trange_title = [];
\t\t\t\tpd_data =  data.PZ.list;
\t\t\t\ttimes = Math.ceil(pd_data.length / 20);
\t\t\t\tfor(var i in data.PZ.list) {
\t\t\t\t\tpzname.push(data.PZ.list[i]['ckm_warehouse_goods.name']);
\t\t\t\t}
\t\t\t\tfor(var j = 0 ; j < pzname.join(',').length ;j++){
\t\t\t\t\tif(pzname.join(',').slice(20*j,(j + 1) * 20)) {
\t\t\t\t\t\trange_title.push(pzname.join(',').slice(20*j,(j + 1) * 20));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tcontent.push('<tr data-type=\"PZ\" data-id=\"' +  data['PZ']['info']['id'] + '\" data-type1=\"1\">' +
\t\t\t\t\t'<td class=\"center tdColor\"><label class=\"pos-rel\"><a class=\"edit btBlue\"style=\"color:#fff !important\" title=\"负责人\" contentAuthority=\"212\"><i class=\"fa fa-pencil-square-o\"></i></a> <a class=\"edit_goods btRed\" style=\"color:#fff !important\" title=\"删除物品\"><i class=\"fa fa-trash-o\"></i></a></label></td>' +
\t\t\t\t\t'<td class=\"center tdColor\">凭证仓</td>' +
\t\t\t\t\t'<td class=\"center\" title=\"'+ range_title.join('&#13;') +'\"><label style=\"width:100px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;\" >'
\t\t\t\t \t\t\t\t+ pzname.join(',') + 
\t\t\t \t\t\t\t'</label></td></td>' +
\t\t\t\t\t'<td class=\"center\">' + (data.PZ.info != \"\" ? checkName(data.PZ.info.pd, peopleArr) : \"暂无盘点人\") + '</td>' +
\t\t\t\t\t'<td class=\"center\">' + (data.PZ.info != \"\" ? checkName(data.PZ.info.sp, peopleArr)  : \"暂无审批人\")+ '</td>' +
\t\t\t\t\t'</tr>');
\t\t\t}
\t\t\tif(data.ZJ != \"\") {
\t\t\t\tvar zjname = [];
\t\t\t\trange_title = [];
\t\t\t\tpd_data =  data.ZJ.list;
\t\t\t\ttimes = Math.ceil(pd_data.length / 20);
\t\t\t\tfor(var i in data.ZJ.list) {
\t\t\t\t\tzjname.push(data.ZJ.list[i]['ckm_warehouse_goods.name']);
\t\t\t\t}
\t\t\t\tfor(var j = 0 ; j < zjname.join(',').length ;j++){
\t\t\t\t\tif(zjname.join(',').slice(20*j,(j + 1) * 20)) {
\t\t\t\t\t\trange_title.push(zjname.join(',').slice(20*j,(j + 1) * 20));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t
\t\t\t\tcontent.push('<tr data-type=\"ZJ\" data-id=\"' +  data['ZJ']['info']['id'] + '\" data-type1=\"3\">' +
\t\t\t\t\t'<td class=\"center tdColor\"><label class=\"pos-rel\"><a class=\"edit btBlue\" style=\"color:#fff !important\" title=\"负责人\" contentAuthority=\"212\"><i class=\"fa fa-pencil-square-o\"></i></a> <a class=\"edit_goods btRed\" style=\"color:#fff !important\" title=\"删除物品\"><i class=\"fa fa-trash-o\"></i></a></label></td>' +
\t\t\t\t\t'<td class=\"center tdColor\">证件仓</td>' +
\t\t\t\t\t'<td class=\"center\" title=\"'+ range_title.join('&#13;') +'\"><label style=\"width:100px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;\" >'
\t\t\t\t \t\t\t\t+ zjname.join(',') + 
\t\t\t \t\t\t\t'</label></td>' +
\t\t\t\t\t'<td class=\"center\">' + (data.ZJ.info != \"\" ? checkName(data.ZJ.info.pd, peopleArr) : \"暂无盘点人\") + '</td>' +
\t\t\t\t\t'<td class=\"center\">' + (data.ZJ.info != \"\" ? checkName(data.ZJ.info.sp, peopleArr) : \"暂无审批人\") + '</td>' +
\t\t\t\t\t'</tr>');
\t\t\t}

\t\t\t\$('#pageList').html(content.join(''));
\t\t\tcs.getNodes([212]);

\t\t\t//编辑仓库物品
\t\t\tedit_goods(data);

\t\t\t//编辑操作
\t\t\t\$('.edit').click(function() {
\t\t\t\t\$('#template1 #selectId').parent().hide();
\t\t\t\t\$('#template1 #add').hide();
\t\t\t\t\$('#template1 #listCon').hide();
\t\t\t\tvar type = \$(this).parents('tr').attr('data-type');
\t\t\t\tvar type1 = \$(this).parents('tr').attr('data-type1');

\t\t\t\tshowMark('#template1');\t
\t\t\t\t\$('#showBox .title').text('编辑负责人');
\t\t\t\t\$('#templateCon #editList').show();
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_employees/f7',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\tif(data[i]['bmm_employees.name']) {
\t\t\t\t\t\t\t\$('#templateCon .state').append(new Option(data[i]['bmm_employees.name'], data[i]['bmm_employees.id']));
\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\tconsole.log(resData);
\t\t\t\t\t\tif(resData[type].info && resData[type].info['pd'] != \"\" ) {
\t\t\t\t\t\t\t\$(\"#templateCon #state0\").val(resData[type].info['pd'].split(\",\")).trigger('change');
\t\t\t\t\t\t}
\t\t\t\t\t\tif(resData[type].info && resData[type].info['sp'] != '') {
\t\t\t\t\t\t\t\$(\"#templateCon #state1\").val(resData[type].info['sp'].split(\",\")).trigger('change');
\t\t\t\t\t\t}
//\t\t\t\t\t\t\$(\"#templateCon #state0\").val(resData[type].info['pd'].split(\",\")).trigger('change')
//\t\t\t\t\t\t\$(\"#templateCon #state1\").val(resData[type1].info['sp'].split(\",\")).trigger('change')
                        \$(\"#temHeader\").width(\$(\"#showBox\").width()-47);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tselect2();

\t\t\t\t\$('#templateBox #submit').click(function() {
\t\t\t\t\tvar data1 = {};
\t\t\t\t\tvar ids = '';
\t\t\t\t\tvar objs;
\t\t\t\t\tvar status = false;  //绑定状态
\t\t\t\t\t\$('#templateCon .state').each(function(i) {
\t\t\t\t\t\tobjs = \$('#templateCon #state' + i).select2('data');
\t\t\t\t\t\tfor(var j in objs) {
\t\t\t\t\t\t\tids += objs[j].id + ','
\t\t\t\t\t\t}
\t\t\t\t\t\tdata1[\$(this).attr('addfield')] = ids.substr(0, ids.length - 1);
\t\t\t\t\t\tids = '';
\t\t\t\t\t})
\t\t\t\t\t\$('#templateCon .state').each(function(i) {
\t\t\t\t\t\tif(data1[\$(this).attr('addfield')] == \"\") {
\t\t\t\t\t\t\tykp.prompt('负责人不能为空');
\t\t\t\t\t\t\tstatus = false;
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tstatus = true;
\t\t\t\t\t\t}
\t\t\t\t\t})

\t\t\t\t\tif(status) {
\t\t\t\t\t\tdata1.type = type1;
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_accountancies/edit_warehouse',
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: data1,
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('编辑成功!');
\t\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\t\tgetList(1);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}

\t\t\t\t})
\t\t\t})
\t\t}
\t\t
\t\tfunction select2() {
\t\t//参与人员
\t\t\t\$('#templateCon .select2').css('width', '350px').select2({
\t\t\t\tallowClear: true
\t\t\t})
\t\t\t\$('#select2-multiple-style .btn').on('click', function(e) {
\t\t\t\tvar target = \$(this).find('input[type=radio]');
\t\t\t\tvar which = parseInt(target.val());
\t\t\t\tif(which == 2)
\t\t\t\t\t\$('.select2').addClass('tag-input-style');
\t\t\t\telse
\t\t\t\t\t\$('.select2').removeClass('tag-input-style');
\t\t\t});
\t\t}

\t\t//添加一条物品信息
\t\tfunction addItem(){
\t\t\t\$('#templateCon .increase').click(function(){
\t\t\t\t\$(this).parents('table').find('tbody').append(
\t\t\t\t\t`<tr>
\t\t\t\t\t\t<td><label class=\"decrease\" style=\"font-size:20px;text-align:center;width:10px;cursor:pointer;\">-</label></td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" addfield=\"name\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" addfield=\"unit\" style=\"width: 80px;\">
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>`
\t\t\t\t);
\t\t\t\tremoveItem();
\t\t\t});
\t\t}

\t\t//删除一条物品信息
\t\tfunction removeItem(){
\t\t\t\$('#templateCon .decrease').unbind('click').click(function(){
\t\t\t\t\$(this).parents('tr').remove();
\t\t\t});
\t\t}

\t\tpageinfo();
\t\t//页面初始化
\t\tfunction pageinfo() {
\t\t\t//添加物品
\t\t\t\$('#add').click(function() {
\t\t\t\t\$('#template1 #selectId').parent().show();
\t\t\t\t\$('#template1 #listCon').show();
\t\t\t\tshowMark('#template1');
\t\t\t\t\$('#showBox .title').text('添加仓内物品');
\t\t\t\taddItem();
                \$(\"#temHeader\").width(\$(\"#showBox\").width()-47);
\t\t\t\t\$('#templateBox #submit').click(function() {
\t\t\t\t\t\$(this).prop('disabled',true);
\t\t\t\t\tvar status = true;
\t\t\t\t\t\$('#templateBox').find('input').each(function(i,e) {
\t\t\t\t\t\tif(\$(this).val().trim() == \"\") {
\t\t\t\t\t\t\tstatus = false;
\t\t\t\t\t\t\tykp.prompt('输入框不能为空！');
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t})

\t\t\t\t\tif(status) {
\t\t\t\t\t\tvar data = {};
\t\t\t\t\t\tdata['type'] = \$('#templateBox #selectId').val();
\t\t\t\t\t\tdata['name'] = [];
\t\t\t\t\t\tdata['unit'] = [];
\t\t\t\t\t\t\$('#templateBox #listCon').find('[addfield]').each(function() {
\t\t\t\t\t\t\tif(\$(this).val().trim() == ''){
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tdata[\$(this).attr('addfield')].push(\$(this).val());
\t\t\t\t\t\t})

\t\t\t\t\t\tdata['name'] = data['name'].join(',');
\t\t\t\t\t\tdata['unit'] = data['unit'].join(',');

\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: \"/api/api_accountancies/add_goods\",
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: data,
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\$('#templateBox #submit').prop('disabled',true);
\t\t\t\t\t\t\t\tgetList(1);
\t\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\t\tykp.prompt('添加成功');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})
\t\t}
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/manage/storehouse.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 161,  180 => 160,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	#showBox{*/
/* 		min-width: 398.78px;*/
/* 	}*/
/* 	#templateCon #editList .select2-selection__clear{*/
/* 		margin-right: 21px;*/
/* 	}*/
/* 	#templateBox tbody tr td:before{*/
/* 		content: none;*/
/* 	}*/
/* 	#store_goods th,#store_goods td{*/
/* 		height: 35px;*/
/* 		text-align: left;*/
/* 		padding:5px;*/
/* 	}*/
/* 	#store_goods table{*/
/* 		border:none;*/
/* 	}*/
/* 	#store_goods td:before{*/
/* 		content: none;*/
/* 	}*/
/* </style>*/
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<div>*/
/* 			<!-- <h3 class="header smaller lighter blue">仓库管理</h3> -->*/
/* 			<div class="row" style="margin-top: 20px;">*/
/* 				<div class="col-sx-4" style=" float: left; margin-right: 15px;" contentAuthority="211">*/
/* 					<button type="button" title="添加" id="add" class="btn btn-info btn-sm" >*/
/* 						添加*/
/*                     </button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="custom_table">*/
/* 			<table id="dynamic-table" style="margin-bottom:0px;">*/
/* 				<thead>*/
/* 					<tr class="thColor">*/
/* 						<th>操作</th>*/
/* 						<th class="center thColor">仓库名称</th>*/
/* 						<th class="center">仓内物品</th>*/
/* 						<th class="center">盘点人</th>*/
/* 						<th class="center">盘点审批人</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody id="pageList">*/
/* */
/* 				</tbody>*/
/* 			</table>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* 	<div class="label_popup" id="store_goods" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;max-height: 500px;">*/
/* 		<div style="max-width:500px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/*         box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* */
/* 			<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 				<span style="display: inline-block;font-size:14px;">删除仓库物品</span>*/
/* 				<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 			</div>*/
/* 			<div style="padding: 10px 20px;">*/
/* 				<div style="margin-bottom: 10px; margin-top: 10px;max-height:300px;overflow:auto;" >*/
/* 					<table>*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th>*/
/* 									<label class="pos-rel">*/
/* 	                                    <input type="checkbox" class="checkAll">*/
/* 	                                    <span class="lbl"></span>*/
/* 	                                </label>*/
/* 								</th>*/
/* 								<th>*/
/* 									物品名称*/
/* 								<th>*/
/* 									单位*/
/* 								</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody class="goods_message">*/
/* 							<!-- <tr>*/
/* 								<td>*/
/* 									<span>客户</span>*/
/* 									<i style="padding:0 5px;"></i>*/
/* 									<span class="customers"></span>*/
/* 									<i style="padding:0 5px;"></i>*/
/* 									<span>移交给</span>*/
/* 									<i style="padding:0 5px;"></i>*/
/* 									<span class=""></span>*/
/* 								</td>*/
/* 							</tr> -->*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div style="padding:20px;text-align:right;">*/
/* 				<button class="del_label btn btn-info btn-sm">删除</button>*/
/* 				<!-- <button class="hold_label btn btn-info btn-sm">保存</button> -->*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* <div class="row" id="template1" style="display:none;">*/
/* 	<div class="col-sm-12">*/
/* 		<div class="widget-box">			*/
/* 			<div class="row">*/
/* 				<div style="margin-bottom: 15px;">*/
/* 					<label style="width: 70px;" class=""> 仓位名称： </label>*/
/* 					<select id="selectId" style="width: 180px;">*/
/* 						<option value="1">凭证仓</option>*/
/* 						<option value="2">票据仓</option>*/
/* 						<option value="3">证件仓</option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div id="listCon">*/
/* 					<div class="custom_table">*/
/* 						<table>*/
/* 							<thead>*/
/* 								<tr>*/
/* 									<td><label class="increase" style="position:relative;cursor:pointer;font-size:20px;text-align:center;width:10px;">+</label></td>*/
/* 									<td>物品名称</td>*/
/* 									<td>单位</td>*/
/* 								</tr>*/
/* 							</thead>*/
/* 							<tbody>*/
/* 								*/
/* 							</tbody>*/
/* 						</table>*/
/* 					</div>*/
/* 					<!-- <label style="width: 70px;" class=""> 物品名称： </label>*/
/* 					<input type="text" id="" addfield="name">*/
/* 					<input type="text" id="" addfield="unit" style="width: 80px;" placeholder="单位"> -->*/
/* 				</div>*/
/* 				<div id="editList" style="display: none;">*/
/* 					<div class="form-group">*/
/* 						<label style="width:96px;"> 盘点负责人： </label>*/
/* 						<select multiple="" id="state0" name="state" addfield="pd" class="state select2 select2-hidden-accessible" data-placeholder="选择盘点负责人" style="width: 200px;" tabindex="-1" aria-hidden="true">*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label style="width:96px;"> 盘点审批负责人： </label>*/
/* 						<select multiple="" id="state1" name="state" addfield="sp" class="state select2 select2-hidden-accessible" data-placeholder="选择盘点审批负责人" style="width: 200px;" tabindex="-1" aria-hidden="true">*/
/* 						</select>*/
/* 					</div>*/
/* 				</div>*/
/* 				<!-- /.col -->*/
/* 				<!--保存按钮-->*/
/* 				<div style="margin-top:15px;text-align: center;">*/
/* 					<div>*/
/* 						<button class="btn btn-info" id="submit">*/
/*                             保存*/
/*                         </button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% include 'admin/mark.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script type="text/javascript">*/
/* 	$(function() {*/
/* 		cs.getNodes([211]);*/
/* 		var order ='bmm_department.id desc';*/
/* 		var page_size = 10;*/
/* 		var resData = '';*/
/* 		var peopleArr = [];*/
/* */
/* 		getList(1);*/
/* */
/* 		function getList(current) {*/
/* 			ykp.doAjax({*/
/* 				async:false,*/
/* 				url: "/api/api_employees/f7",*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					order:order*/
/* 				},*/
/* 				success: function(res) {*/
/* 					peopleArr = res.data;*/
/* 				}*/
/* 			})*/
/* */
/* 			ykp.doAjax({*/
/* 				url: '/api/api_accountancies/list_goods',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: page_size*/
/* 				},*/
/* 				success: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 						$('#pageList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="color:#7d7d7d !important;text-align:center !important;" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					}*/
/* 					addList(res);*/
/* 				}*/
/* 			})*/
/* */
/* 		}*/
/* */
/* 		function checkName(col, data) {*/
/* 			var arr = [];*/
/* 			col.split(',').forEach(function(item) {*/
/* 				for(var i in data) {*/
/* 					if(data[i]['bmm_employees.id'] == item) {*/
/* 						arr.push(data[i]['bmm_employees.name']);*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 			*/
/* 			return arr.join(',');*/
/* 		}*/
/* */
/* 		//编辑仓库物品*/
/* 		function edit_goods(data){*/
/* 			$('.edit_goods').unbind('click').click(function(){*/
/* 				var data_type = $(this).parents('tr').attr('data-type');*/
/* 				var _data = data[data_type];*/
/* 				var goods_list =  _data['list'];*/
/* */
/* 				// class="checkAll"*/
/* 				var goods_html = [];*/
/* 				for(var i in goods_list){*/
/* 					goods_html.push(*/
/* 						`<tr data-id="${goods_list[i]['ckm_warehouse_goods.id']}">*/
/* 							<td style="width:20%;">*/
/* 								<label class="pos-rel">*/
/*                                     <input type="checkbox">*/
/*                                     <span class="lbl"></span>*/
/*                                 </label>*/
/* 							</td>*/
/* 							<td style="width:40%;">*/
/* 								${goods_list[i]['ckm_warehouse_goods.name']}*/
/* 							</td>*/
/* 							<td style="width:40%;">*/
/* 								${goods_list[i]['ckm_warehouse_goods.unit']}*/
/* 							</td>*/
/* 						</tr>`*/
/* 					);*/
/* 				}*/
/* */
/* 				$('#store_goods .goods_message').html(goods_html.join(''));*/
/* */
/* 				//全选 反选*/
/* 				checkAll();*/
/* */
/* 				$('#store_goods').fadeIn();*/
/* */
/* 				//保存物品编辑信息*/
/* 				// saveGoods();*/
/* */
/* 				//删除物品*/
/* 				delGoods();*/
/* */
/* 				cs.closePop();*/
/* 			});*/
/* 		}*/
/* */
/* 		//全选 反选*/
/* 		function checkAll(){*/
/* 			$('#store_goods .checkAll').unbind('click').click(function(){*/
/* 				$('#store_goods .goods_message').find('input[type="checkbox"]').prop('checked',$(this).prop('checked'));*/
/* 			});*/
/* 		}*/
/* */
/* 		//保存编辑物品信息*/
/* 		function saveGoods(){*/
/* 			$('#store_goods .hold_label').unbind('click').click(function(){*/
/* 				var postdata = {};*/
/* 				$('#store_goods .goods_message').find('tr').each(function(i,e){*/
/* */
/* 				});*/
/* 			});*/
/* 		}*/
/* */
/* 		//删除物品信息*/
/* 		function delGoods(){*/
/* 			$('#store_goods .del_label').unbind('click').click(function(){*/
/* 				var goods_id = [];*/
/* 				$('#store_goods .goods_message [type="checkbox"]').each(function(i,e){*/
/* 					if($(this).prop('checked')){*/
/* 						goods_id.push($(this).parents('tr').attr('data-id'));*/
/* 					}*/
/* 				});*/
/* */
/* 				if(goods_id.length <= 0){*/
/* 					ykp.prompt('请选择物品！');*/
/* 					return;*/
/* 				}*/
/* 				*/
/* 				bootbox.confirm('确认删除？',function(flag){*/
/* 					if(flag){*/
/* 						ykp.doAjax({*/
/* 							url:'/api/api_accountancies/del_goods',*/
/* 							method:'post',*/
/* 							data:{*/
/* 								id:goods_id.join(',')*/
/* 							},*/
/* 							success:function(res){*/
/* 								ykp.prompt('物品删除成功');*/
/* 								$('#store_goods').fadeOut();*/
/* 								getList();*/
/* 							}*/
/* 						});*/
/* 					}*/
/* 				});*/
/* */
/* 				*/
/* 			});*/
/* 		}*/
/* */
/* 		//添加列表*/
/* 		function addList(res) {*/
/* 			resData = res.data;*/
/* 			var data = res.data;*/
/* 			var content = [];*/
/* 			var range_title = [];*/
/* 			//遍历次数*/
/* 			var times;*/
/* 			if(data.PJ != "") {*/
/* 				var pjname = [];*/
/* 				pd_data =  data.PJ.list;*/
/* 				times = Math.ceil(pd_data.length / 20);*/
/* 				for(var i in data.PJ.list) {*/
/* 					pjname.push(data.PJ.list[i]['ckm_warehouse_goods.name']);*/
/* 				}*/
/* 				for(var j = 0 ; j < pjname.join(',').length ;j++){*/
/* 					range_title.push(pjname.join(',').slice(20*j,(j + 1) * 20));*/
/* 				}*/
/* 				content.push('<tr data-type="PJ" data-id="' +  data['PJ']['info']['id'] + '" data-type1="2">' +*/
/* 					'<td class="center tdColor"><label class="pos-rel" ><a class="edit btBlue" style="color:#fff !important" title="负责人" contentAuthority="212"><i class="fa fa-pencil-square-o"></i></a> <a class="edit_goods btRed" title="删除物品" style="color:#fff !important"><i class="fa fa-trash-o"></i></a></label></td>' +*/
/* 					'<td class="center tdColor">票据仓</td>' +*/
/* 					'<td class="center" title="'+ range_title.join('&#13;') +'"><label style="width:100px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;" >'*/
/* 				 				+ pjname.join(',') +*/
/* 			 				'</label></td>' +*/
/* 					'<td class="center">' + (data.PJ.info != "" ? checkName(data.PJ.info.pd, peopleArr) : "暂无盘点人")+ '</td>' +*/
/* 					'<td class="center">' + (data.PJ.info != "" ? checkName(data.PJ.info.sp, peopleArr) : "暂无审批人")+ '</td>' +*/
/* 					'</tr>');*/
/* 			}*/
/* 			if(data.PZ != "") {*/
/* 				var pzname = [];*/
/* 				range_title = [];*/
/* 				pd_data =  data.PZ.list;*/
/* 				times = Math.ceil(pd_data.length / 20);*/
/* 				for(var i in data.PZ.list) {*/
/* 					pzname.push(data.PZ.list[i]['ckm_warehouse_goods.name']);*/
/* 				}*/
/* 				for(var j = 0 ; j < pzname.join(',').length ;j++){*/
/* 					if(pzname.join(',').slice(20*j,(j + 1) * 20)) {*/
/* 						range_title.push(pzname.join(',').slice(20*j,(j + 1) * 20));*/
/* 					}*/
/* 				}*/
/* 				content.push('<tr data-type="PZ" data-id="' +  data['PZ']['info']['id'] + '" data-type1="1">' +*/
/* 					'<td class="center tdColor"><label class="pos-rel"><a class="edit btBlue"style="color:#fff !important" title="负责人" contentAuthority="212"><i class="fa fa-pencil-square-o"></i></a> <a class="edit_goods btRed" style="color:#fff !important" title="删除物品"><i class="fa fa-trash-o"></i></a></label></td>' +*/
/* 					'<td class="center tdColor">凭证仓</td>' +*/
/* 					'<td class="center" title="'+ range_title.join('&#13;') +'"><label style="width:100px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;" >'*/
/* 				 				+ pzname.join(',') + */
/* 			 				'</label></td></td>' +*/
/* 					'<td class="center">' + (data.PZ.info != "" ? checkName(data.PZ.info.pd, peopleArr) : "暂无盘点人") + '</td>' +*/
/* 					'<td class="center">' + (data.PZ.info != "" ? checkName(data.PZ.info.sp, peopleArr)  : "暂无审批人")+ '</td>' +*/
/* 					'</tr>');*/
/* 			}*/
/* 			if(data.ZJ != "") {*/
/* 				var zjname = [];*/
/* 				range_title = [];*/
/* 				pd_data =  data.ZJ.list;*/
/* 				times = Math.ceil(pd_data.length / 20);*/
/* 				for(var i in data.ZJ.list) {*/
/* 					zjname.push(data.ZJ.list[i]['ckm_warehouse_goods.name']);*/
/* 				}*/
/* 				for(var j = 0 ; j < zjname.join(',').length ;j++){*/
/* 					if(zjname.join(',').slice(20*j,(j + 1) * 20)) {*/
/* 						range_title.push(zjname.join(',').slice(20*j,(j + 1) * 20));*/
/* 					}*/
/* 				}*/
/* 				*/
/* 				content.push('<tr data-type="ZJ" data-id="' +  data['ZJ']['info']['id'] + '" data-type1="3">' +*/
/* 					'<td class="center tdColor"><label class="pos-rel"><a class="edit btBlue" style="color:#fff !important" title="负责人" contentAuthority="212"><i class="fa fa-pencil-square-o"></i></a> <a class="edit_goods btRed" style="color:#fff !important" title="删除物品"><i class="fa fa-trash-o"></i></a></label></td>' +*/
/* 					'<td class="center tdColor">证件仓</td>' +*/
/* 					'<td class="center" title="'+ range_title.join('&#13;') +'"><label style="width:100px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;" >'*/
/* 				 				+ zjname.join(',') + */
/* 			 				'</label></td>' +*/
/* 					'<td class="center">' + (data.ZJ.info != "" ? checkName(data.ZJ.info.pd, peopleArr) : "暂无盘点人") + '</td>' +*/
/* 					'<td class="center">' + (data.ZJ.info != "" ? checkName(data.ZJ.info.sp, peopleArr) : "暂无审批人") + '</td>' +*/
/* 					'</tr>');*/
/* 			}*/
/* */
/* 			$('#pageList').html(content.join(''));*/
/* 			cs.getNodes([212]);*/
/* */
/* 			//编辑仓库物品*/
/* 			edit_goods(data);*/
/* */
/* 			//编辑操作*/
/* 			$('.edit').click(function() {*/
/* 				$('#template1 #selectId').parent().hide();*/
/* 				$('#template1 #add').hide();*/
/* 				$('#template1 #listCon').hide();*/
/* 				var type = $(this).parents('tr').attr('data-type');*/
/* 				var type1 = $(this).parents('tr').attr('data-type1');*/
/* */
/* 				showMark('#template1');	*/
/* 				$('#showBox .title').text('编辑负责人');*/
/* 				$('#templateCon #editList').show();*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_employees/f7',*/
/* 					method: 'post',*/
/* 					data: {},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						for(var i in data) {*/
/* 							if(data[i]['bmm_employees.name']) {*/
/* 							$('#templateCon .state').append(new Option(data[i]['bmm_employees.name'], data[i]['bmm_employees.id']));*/
/* 						}*/
/* 						}*/
/* 						console.log(resData);*/
/* 						if(resData[type].info && resData[type].info['pd'] != "" ) {*/
/* 							$("#templateCon #state0").val(resData[type].info['pd'].split(",")).trigger('change');*/
/* 						}*/
/* 						if(resData[type].info && resData[type].info['sp'] != '') {*/
/* 							$("#templateCon #state1").val(resData[type].info['sp'].split(",")).trigger('change');*/
/* 						}*/
/* //						$("#templateCon #state0").val(resData[type].info['pd'].split(",")).trigger('change')*/
/* //						$("#templateCon #state1").val(resData[type1].info['sp'].split(",")).trigger('change')*/
/*                         $("#temHeader").width($("#showBox").width()-47);*/
/* 					}*/
/* 				});*/
/* 				select2();*/
/* */
/* 				$('#templateBox #submit').click(function() {*/
/* 					var data1 = {};*/
/* 					var ids = '';*/
/* 					var objs;*/
/* 					var status = false;  //绑定状态*/
/* 					$('#templateCon .state').each(function(i) {*/
/* 						objs = $('#templateCon #state' + i).select2('data');*/
/* 						for(var j in objs) {*/
/* 							ids += objs[j].id + ','*/
/* 						}*/
/* 						data1[$(this).attr('addfield')] = ids.substr(0, ids.length - 1);*/
/* 						ids = '';*/
/* 					})*/
/* 					$('#templateCon .state').each(function(i) {*/
/* 						if(data1[$(this).attr('addfield')] == "") {*/
/* 							ykp.prompt('负责人不能为空');*/
/* 							status = false;*/
/* 							return false;*/
/* 						} else {*/
/* 							status = true;*/
/* 						}*/
/* 					})*/
/* */
/* 					if(status) {*/
/* 						data1.type = type1;*/
/* 						ykp.doAjax({*/
/* 							url: '/api/api_accountancies/edit_warehouse',*/
/* 							method: 'post',*/
/* 							data: data1,*/
/* 							success: function(res) {*/
/* 								ykp.prompt('编辑成功!');*/
/* 								cs.close();*/
/* 								getList(1);*/
/* 							}*/
/* 						})*/
/* 					}*/
/* */
/* 				})*/
/* 			})*/
/* 		}*/
/* 		*/
/* 		function select2() {*/
/* 		//参与人员*/
/* 			$('#templateCon .select2').css('width', '350px').select2({*/
/* 				allowClear: true*/
/* 			})*/
/* 			$('#select2-multiple-style .btn').on('click', function(e) {*/
/* 				var target = $(this).find('input[type=radio]');*/
/* 				var which = parseInt(target.val());*/
/* 				if(which == 2)*/
/* 					$('.select2').addClass('tag-input-style');*/
/* 				else*/
/* 					$('.select2').removeClass('tag-input-style');*/
/* 			});*/
/* 		}*/
/* */
/* 		//添加一条物品信息*/
/* 		function addItem(){*/
/* 			$('#templateCon .increase').click(function(){*/
/* 				$(this).parents('table').find('tbody').append(*/
/* 					`<tr>*/
/* 						<td><label class="decrease" style="font-size:20px;text-align:center;width:10px;cursor:pointer;">-</label></td>*/
/* 						<td>*/
/* 							<input type="text" addfield="name">*/
/* 						</td>*/
/* 						<td>*/
/* 							<input type="text" addfield="unit" style="width: 80px;">*/
/* 						</td>*/
/* 					</tr>`*/
/* 				);*/
/* 				removeItem();*/
/* 			});*/
/* 		}*/
/* */
/* 		//删除一条物品信息*/
/* 		function removeItem(){*/
/* 			$('#templateCon .decrease').unbind('click').click(function(){*/
/* 				$(this).parents('tr').remove();*/
/* 			});*/
/* 		}*/
/* */
/* 		pageinfo();*/
/* 		//页面初始化*/
/* 		function pageinfo() {*/
/* 			//添加物品*/
/* 			$('#add').click(function() {*/
/* 				$('#template1 #selectId').parent().show();*/
/* 				$('#template1 #listCon').show();*/
/* 				showMark('#template1');*/
/* 				$('#showBox .title').text('添加仓内物品');*/
/* 				addItem();*/
/*                 $("#temHeader").width($("#showBox").width()-47);*/
/* 				$('#templateBox #submit').click(function() {*/
/* 					$(this).prop('disabled',true);*/
/* 					var status = true;*/
/* 					$('#templateBox').find('input').each(function(i,e) {*/
/* 						if($(this).val().trim() == "") {*/
/* 							status = false;*/
/* 							ykp.prompt('输入框不能为空！');*/
/* 							return false;*/
/* 						}*/
/* 					})*/
/* */
/* 					if(status) {*/
/* 						var data = {};*/
/* 						data['type'] = $('#templateBox #selectId').val();*/
/* 						data['name'] = [];*/
/* 						data['unit'] = [];*/
/* 						$('#templateBox #listCon').find('[addfield]').each(function() {*/
/* 							if($(this).val().trim() == ''){*/
/* 								return true;*/
/* 							}*/
/* 							data[$(this).attr('addfield')].push($(this).val());*/
/* 						})*/
/* */
/* 						data['name'] = data['name'].join(',');*/
/* 						data['unit'] = data['unit'].join(',');*/
/* */
/* 						ykp.doAjax({*/
/* 							url: "/api/api_accountancies/add_goods",*/
/* 							method: 'post',*/
/* 							data: data,*/
/* 							success: function(res) {*/
/* 								$('#templateBox #submit').prop('disabled',true);*/
/* 								getList(1);*/
/* 								cs.close();*/
/* 								ykp.prompt('添加成功');*/
/* 							}*/
/* 						})*/
/* 					}*/
/* 				})*/
/* 			})*/
/* 		}*/
/* 	});*/
/* </script>*/
