<?php

/* admin/manage/accountManage.html */
class __TwigTemplate_a59d8b60195bbec0ac90cb2d35d83853db2e90ee21ba211a93885ea04e141d52 extends Twig_Template
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
\t#templateCon label {
\t\twidth: 70px;
\t\ttext-align: right
\t}
</style>
<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<div>
\t\t\t<!--     <h3 class=\"header smaller lighter blue\">账户管理</h3> -->
\t\t\t<div class=\"row\" style=\"margin-top: 20px;\">
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right:5px;\" contentAuthority=\"223\">
\t\t\t\t\t<button type=\"button\" id=\"add\" title=\"添加\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;border-color: #32CD32 !important;\">
                        <i class=\"fa fa-plus\"></i>
                    </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right:5px;\">
                \t<button id=\"flush\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
\t                   \t<i class=\"fa fa-refresh\"></i>
\t                </button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"custom_table\">
\t\t\t<table id=\"dynamic-table\" style=\"margin-bottom:0px;\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t<th class=\"hidden-480 center\">操作</th>
\t\t\t\t\t\t<th class=\"center\">账户编号</th>
\t\t\t\t\t\t<th class=\"center\">账户名称</th>
\t\t\t\t\t\t<th class=\"center\">账号</th>
\t\t\t\t\t\t<th class=\"center\">账户类型</th>
\t\t\t\t\t\t<th class=\"center\">开户银行</th>
\t\t\t\t\t\t<th class=\"center\">备注</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>

\t\t\t\t<tbody class=\"dataList\">

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
<div class=\"row\" id=\"template1\" style=\"display:none;\">\t
\t<div style=\"margin-top:15px;\">
\t\t<label> 账户名称： </label>
\t\t<input type=\"text\" class=\"edit0 editCon\">
\t\t<label> 账号： </label>
\t\t<input type=\"text\" id=\"form-field-icon-1\" class=\"edit2 editCon\"  validate=\"int\" msg=\"请输入正确的账号名称\">
\t\t
\t</div>
\t<div style=\"margin-top:15px;\">
\t\t<label> 账户类型： </label>
\t\t<select class=\"edit3 editCon\" style=\"width: 180px;\">
\t\t\t<option value=\"\"> --- 请选择 --- </option>
\t\t\t<option value=\"1\"> 现金 </option>
\t\t\t<option value=\"2\"> 支付宝 </option>
\t\t\t<option value=\"3\"> 微信 </option>
\t\t\t<option value=\"4\"> 银行卡 </option>
\t\t</select>
\t\t<label class=\"bank\" style=\"display:none;\"> 开户银行： </label>
\t\t<input type=\"text\" id=\"form-field-icon-1\" style=\"display: none;\" class=\"bank edit1 editCon\"  msg=\"请输入开户银行\">
\t\t<!--<select class=\"bank edit1 editCon\" style=\"width: 180px;display:none;\">
\t\t\t<option value=\"0\"> --- 请选择 --- </option>
\t\t</select>-->
\t</div>
\t<div style=\"margin-top:15px;\">
\t\t<label style=\"float:left;margin-right:4px;\"> 备注： </label>
\t\t<textarea class=\"edit4 editCon\" style=\"resize:none;padding:5px;width: calc(100% - 74px);float:auto;\"></textarea>
\t</div>
\t<div style=\"text-align:center;margin-top:15px;\">
\t\t<button class=\"sure_button add\">
                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                保存
            </button>
\t</div>
</div>
";
        // line 94
        $this->loadTemplate("admin/mark.html", "admin/manage/accountManage.html", 94)->display($context);
        // line 95
        echo "</div>
</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script>
\tjQuery(function(\$) {
\t\tcs.getNodes([223]);
\t\tvar order = 'xtm_kh_bank.id desc';
\t\tvar currentId = ''; //当前选中的银行
\t\taddData();
\t\tvar curent = 0;
        var page_size = 10;
        var sort_role = \"\";
        //获取所有银行
\t\tvar bank = {};
\t\tykp.doAjax({
\t\t\turl: '/api/api_bank/get_all_bank',
\t\t\tmethod: 'post',
\t\t\tasync:false,
\t\t\tdata: {},
\t\t\tsuccess: function(res1) {
\t\t\t\tvar data = res1.data;
\t\t\t\tfor(var i in data){
\t\t\t\t\tbank[data[i]['xtm_bank.value']] = data[i]['xtm_bank.name'];
\t\t\t\t}
\t\t\t}
\t\t})
\t\t
\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_bank/index',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter:\"xtm_kh_bank.is_del = 0\",
\t\t\t\tlimit: page_size
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '.pageBar'
\t\t\t},
\t\t\tcontentId:\"#datalist\",  //默认排序
\t\t\tinitOrder:\"xtm_kh_bank.bank_no\",   //初始化sort
\t\t\tdefaultOrder:order,
\t\t\tparams:[{
\t\t\t\tid:\"#dynamic-table\",
\t\t\t\tfield:[\"\",\"\",\"xtm_kh_bank.bank_name\",\"xtm_kh_bank.bank_no\",\"xtm_kh_bank.type\",\"xtm_kh_bank.bank\"]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});

\t\tgetList(1);
\t\tfunction getList(current) {
            ykp.list({
\t\t\t\turl: '/api/api_bank/index',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tfilter: 'xtm_kh_bank.is_del = 0',
\t\t\t\t\tpage: current,
\t\t\t\t\tlimit: page_size,
\t\t\t\t\torder: order
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\t\$('.dataList').html('<tr><td colspan=\"30\" style=\"color:#7d7d7d !important;text-align:center !important;\">暂无数据</td></tr>');
\t\t\t           return false;
\t\t\t\t\t}else {
\t\t\t\t\t\taddList(res,current);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}

\t\t\$('#flush').click(function(){
\t\t\tgetList();
\t\t})

        function addList(res,current){
        \tvar data = res.data.items;
        \tcurent = res.data.curPage;
                var type = ['','现金','支付宝','微信','银行卡'];
                var list = [];
                var num = 0;
                for(var i in data){
                \tnum++;
                    list.push(
                    \t`<tr data-id=\"\${data[i]['xtm_kh_bank.id']}\">
\t\t\t\t\t\t\t<td>
                                <label class=\"pos-rel\">
                                \t<a href=\"#\" class=\"edit btBlue\" contentAuthority=\"224\" title=\"编辑\"><i class=\"fa fa-pencil-square-o\"></i></a>
                                \t<a href=\"#\" class=\"del btRed\" contentAuthority=\"225\" title=\"删除\"><i class=\"fa fa-trash-o\"></i></a>
                                     
                                </label>
                            </td>
                            <td>
                                \${(page_size*(curent-1)) +num}
                            </td>
                            <td>
                                <span>\${data[i]['xtm_kh_bank.bank_name']}</span>
                            </td>
                            <td>
                                <span>\${data[i]['xtm_kh_bank.bank_no']}</span>
                            </td>
                            <td>
                                <span>\${type[data[i]['xtm_kh_bank.type']]}</span>
                            </td>
                            <td>
                                <span>\${data[i]['xtm_kh_bank.bank'] != '0' ? data[i]['xtm_kh_bank.bank'] : ''}</span>
                            </td>
                           <td>
                                <span>\${data[i]['xtm_kh_bank.remark']}</span>
                            </td>
                        </tr>`
\t\t\t\t);
\t\t\t}

\t\t\t\$('.dataList').html(list.join(''));

\t\t\tcs.getNodes([224,225]);
\t//\t\t删除
//\t\t\t\$('.dataList .del').click(function() {
//\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
//\t\t\t\tbootbox.confirm('确认删除该账户？',function(flag){
//\t\t\t\t\tif(flag){
//\t\t\t\t\t\tykp.doAjax({
//\t\t\t\t\t\t\turl: '/api/api_bank/del',
//\t\t\t\t\t\t\tmethod: 'post',
//\t\t\t\t\t\t\tdata: {
//\t\t\t\t\t\t\t\tid: id
//\t\t\t\t\t\t\t},
//\t\t\t\t\t\t\tsuccess: function(res) {
//\t\t\t\t\t\t\t\tykp.prompt('删除成功!');
//\t\t\t\t\t\t\t\tgetList(1);
//\t\t\t\t\t\t\t}
//\t\t\t\t\t\t})
//\t\t\t\t\t}
//\t\t\t\t});
//\t\t\t\t
//\t\t\t})

\t\t\t\$('.dataList .del').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\tlayer.confirm('确认删除该账户？', function(flag) {
\t\t\t\t\t\t\t\tif(flag){
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_bank/del',
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tid: id
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('删除成功!');
\t\t\t\t\t\t\t\tgetList(1);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t});
\t\t\t\t})
\t\t\t})





\t\t\t//编辑
\t\t\t\$('.dataList .edit').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_bank/index',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter: 'xtm_kh_bank.is_del = 0 and xtm_kh_bank.id = ' + id,
\t\t\t\t\t\tpage: 1,
\t\t\t\t\t\tlimit: page_size
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tshowMark('#template1');
\t\t\t\t\t\t\$('#showBox .title').text('编辑账户');

\t\t\t\t\t\t//账户类型切换至银行卡 开户银行显示，否则隐藏
\t\t\t\t\t\tchangeAccountType(res.data.items[0]['xtm_bank.id']);

\t\t\t\t\t\t\$('#templateCon .edit0').val(res.data.items[0]['xtm_kh_bank.bank_name']);
\t\t\t\t\t\t\$('#templateCon .edit2').val(res.data.items[0]['xtm_kh_bank.bank_no']);
\t\t\t\t\t\t\$('#templateCon .edit3').val(res.data.items[0]['xtm_kh_bank.type']);
\t\t\t\t\t\t\$('#templateCon .edit4').val(res.data.items[0]['xtm_kh_bank.remark']);
\t\t\t\t\t\t
\t\t\t\t\t\tif(res.data.items[0]['xtm_kh_bank.type'] == 4) {
\t\t\t\t\t\t\t\$('#templateCon .edit1').val(res.data.items[0]['xtm_kh_bank.bank']);
\t\t\t\t\t\t\t\$('#templateCon .edit1').show();
\t\t\t\t\t\t\t\$('#templateCon .bank').show()
\t\t\t\t\t\t}
\t\t\t\t\t\tcurrentId = res.data.items[0]['xtm_bank.value'];
\t\t\t\t\t\t//form-field-icon-1
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_bank/get_all_bank',
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {},
\t\t\t\t\t\t\tsuccess: function(res1) {
\t\t\t\t\t\t\t\tvar data = res1.data;
\t\t\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\t\t\tif(data[i]['xtm_bank.value'] == currentId) {
\t\t\t\t\t\t\t\t\t\t\$('#templateCon .edit1').append(new Option(data[i]['xtm_bank.name'], data[i]['xtm_bank.value'], true, true));
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\$('#templateCon .edit1').append(new Option(data[i]['xtm_bank.name'], data[i]['xtm_bank.value']));
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\$('#templateCon .add').click(function() {
\t\t\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\t\t\turl: '/api/api_bank/edit',
\t\t\t\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\t\t\tbank_name: \$('#templateCon .edit0').val(),
\t\t\t\t\t\t\t\t\t\t\tbank: \$('#templateCon .edit1').val(),
\t\t\t\t\t\t\t\t\t\t\tbank_no: \$('#templateCon .edit2').val(),
\t\t\t\t\t\t\t\t\t\t\ttype:\$('#templateCon .edit3').val(),
\t\t\t\t\t\t\t\t\t\t\tremark: \$('#templateCon .edit4').val(),
\t\t\t\t\t\t\t\t\t\t\tid: id
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\t\t\tgetList(1);
\t\t\t\t\t\t\t\t\t\t\tykp.prompt('编辑成功!');
\t\t\t\t\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})

\t\t\t\t\t}
\t\t\t\t})
\t\t\t})
\t\t}

\t\t\$('#changePageNum').change(function() {
\t\t\tpage_size = \$(this).val();
\t\t\tgetList(1);
\t\t})

\t\t//获取所有银行
\t\tfunction getBanks(){
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_bank/get_all_bank',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tfor(var i in data){
\t\t\t\t\t\t\$('#templateCon .edit1').append(new Option(data[i]['xtm_bank.name'], data[i]['xtm_bank.value']));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t\t
\t\t//账户类型切换至银行卡 开户银行显示，否则隐藏
\t\tfunction changeAccountType(bank_id){
\t\t\tif(bank_id){
\t\t\t\t\$('#templateCon .edit1').val(bank_id);
\t\t\t\t\$('#templateCon .bank').show();
\t\t\t}
\t\t\t\$('#templateCon .edit3').unbind('change').change(function(){
\t\t\t\tif(\$(this).val() == '4'){
\t\t\t\t\t\$('#templateCon .bank').show();
\t\t\t\t\tgetBanks();
\t\t\t\t}
\t\t\t\tif(\$(this).val() != '4'){
\t\t\t\t\t\$('#templateCon .bank').hide();
\t\t\t\t\t\$('#templateCon .edit1').find('option').not(':first').remove();
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//添加
\t\tfunction addData() {
\t\t\t\$('#add').click(function() {
\t\t\t\tshowMark('#template1');
\t\t\t\t\$('#showBox .title').text('添加账户');
\t\t\t\t
\t\t\t\tchangeAccountType();

\t\t\t\t\$('#templateCon .add').click(function() {
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_bank/add',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tbank_name: \$('#templateCon .edit0').val(),
\t\t\t\t\t\t\tbank: \$('#templateCon .edit1').val(),
\t\t\t\t\t\t\tbank_no: \$('#templateCon .edit2').val(),
\t\t\t\t\t\t\ttype: \$('#templateCon .edit3').val(),
\t\t\t\t\t\t\tremark: \$('#templateCon .edit4').val()
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tgetList(1);
\t\t\t\t\t\t\tykp.prompt('添加成功!');
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t})
\t\t\t})
\t\t}

\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/manage/accountManage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 95,  114 => 94,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	#templateCon label {*/
/* 		width: 70px;*/
/* 		text-align: right*/
/* 	}*/
/* </style>*/
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<div>*/
/* 			<!--     <h3 class="header smaller lighter blue">账户管理</h3> -->*/
/* 			<div class="row" style="margin-top: 20px;">*/
/* 				<div class="col-sx-4" style=" float: left; margin-right:5px;" contentAuthority="223">*/
/* 					<button type="button" id="add" title="添加" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;border-color: #32CD32 !important;">*/
/*                         <i class="fa fa-plus"></i>*/
/*                     </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-right:5px;">*/
/*                 	<button id="flush" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/* 	                   	<i class="fa fa-refresh"></i>*/
/* 	                </button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="custom_table">*/
/* 			<table id="dynamic-table" style="margin-bottom:0px;">*/
/* 				<thead>*/
/* 					<tr class="thColor">*/
/* 						<th class="hidden-480 center">操作</th>*/
/* 						<th class="center">账户编号</th>*/
/* 						<th class="center">账户名称</th>*/
/* 						<th class="center">账号</th>*/
/* 						<th class="center">账户类型</th>*/
/* 						<th class="center">开户银行</th>*/
/* 						<th class="center">备注</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* */
/* 				<tbody class="dataList">*/
/* */
/* 				</tbody>*/
/* 			</table>*/
/* */
/* 		</div>*/
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
/* <div class="row" id="template1" style="display:none;">	*/
/* 	<div style="margin-top:15px;">*/
/* 		<label> 账户名称： </label>*/
/* 		<input type="text" class="edit0 editCon">*/
/* 		<label> 账号： </label>*/
/* 		<input type="text" id="form-field-icon-1" class="edit2 editCon"  validate="int" msg="请输入正确的账号名称">*/
/* 		*/
/* 	</div>*/
/* 	<div style="margin-top:15px;">*/
/* 		<label> 账户类型： </label>*/
/* 		<select class="edit3 editCon" style="width: 180px;">*/
/* 			<option value=""> --- 请选择 --- </option>*/
/* 			<option value="1"> 现金 </option>*/
/* 			<option value="2"> 支付宝 </option>*/
/* 			<option value="3"> 微信 </option>*/
/* 			<option value="4"> 银行卡 </option>*/
/* 		</select>*/
/* 		<label class="bank" style="display:none;"> 开户银行： </label>*/
/* 		<input type="text" id="form-field-icon-1" style="display: none;" class="bank edit1 editCon"  msg="请输入开户银行">*/
/* 		<!--<select class="bank edit1 editCon" style="width: 180px;display:none;">*/
/* 			<option value="0"> --- 请选择 --- </option>*/
/* 		</select>-->*/
/* 	</div>*/
/* 	<div style="margin-top:15px;">*/
/* 		<label style="float:left;margin-right:4px;"> 备注： </label>*/
/* 		<textarea class="edit4 editCon" style="resize:none;padding:5px;width: calc(100% - 74px);float:auto;"></textarea>*/
/* 	</div>*/
/* 	<div style="text-align:center;margin-top:15px;">*/
/* 		<button class="sure_button add">*/
/*                 <i class="fa fa-check" aria-hidden="true"></i>*/
/*                 保存*/
/*             </button>*/
/* 	</div>*/
/* </div>*/
/* {% include 'admin/mark.html' %}*/
/* </div>*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script>*/
/* 	jQuery(function($) {*/
/* 		cs.getNodes([223]);*/
/* 		var order = 'xtm_kh_bank.id desc';*/
/* 		var currentId = ''; //当前选中的银行*/
/* 		addData();*/
/* 		var curent = 0;*/
/*         var page_size = 10;*/
/*         var sort_role = "";*/
/*         //获取所有银行*/
/* 		var bank = {};*/
/* 		ykp.doAjax({*/
/* 			url: '/api/api_bank/get_all_bank',*/
/* 			method: 'post',*/
/* 			async:false,*/
/* 			data: {},*/
/* 			success: function(res1) {*/
/* 				var data = res1.data;*/
/* 				for(var i in data){*/
/* 					bank[data[i]['xtm_bank.value']] = data[i]['xtm_bank.name'];*/
/* 				}*/
/* 			}*/
/* 		})*/
/* 		*/
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_bank/index',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter:"xtm_kh_bank.is_del = 0",*/
/* 				limit: page_size*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '.pageBar'*/
/* 			},*/
/* 			contentId:"#datalist",  //默认排序*/
/* 			initOrder:"xtm_kh_bank.bank_no",   //初始化sort*/
/* 			defaultOrder:order,*/
/* 			params:[{*/
/* 				id:"#dynamic-table",*/
/* 				field:["","","xtm_kh_bank.bank_name","xtm_kh_bank.bank_no","xtm_kh_bank.type","xtm_kh_bank.bank"]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* */
/* 		getList(1);*/
/* 		function getList(current) {*/
/*             ykp.list({*/
/* 				url: '/api/api_bank/index',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					filter: 'xtm_kh_bank.is_del = 0',*/
/* 					page: current,*/
/* 					limit: page_size,*/
/* 					order: order*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 						$('.dataList').html('<tr><td colspan="30" style="color:#7d7d7d !important;text-align:center !important;">暂无数据</td></tr>');*/
/* 			           return false;*/
/* 					}else {*/
/* 						addList(res,current);*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		$('#flush').click(function(){*/
/* 			getList();*/
/* 		})*/
/* */
/*         function addList(res,current){*/
/*         	var data = res.data.items;*/
/*         	curent = res.data.curPage;*/
/*                 var type = ['','现金','支付宝','微信','银行卡'];*/
/*                 var list = [];*/
/*                 var num = 0;*/
/*                 for(var i in data){*/
/*                 	num++;*/
/*                     list.push(*/
/*                     	`<tr data-id="${data[i]['xtm_kh_bank.id']}">*/
/* 							<td>*/
/*                                 <label class="pos-rel">*/
/*                                 	<a href="#" class="edit btBlue" contentAuthority="224" title="编辑"><i class="fa fa-pencil-square-o"></i></a>*/
/*                                 	<a href="#" class="del btRed" contentAuthority="225" title="删除"><i class="fa fa-trash-o"></i></a>*/
/*                                      */
/*                                 </label>*/
/*                             </td>*/
/*                             <td>*/
/*                                 ${(page_size*(curent-1)) +num}*/
/*                             </td>*/
/*                             <td>*/
/*                                 <span>${data[i]['xtm_kh_bank.bank_name']}</span>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <span>${data[i]['xtm_kh_bank.bank_no']}</span>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <span>${type[data[i]['xtm_kh_bank.type']]}</span>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <span>${data[i]['xtm_kh_bank.bank'] != '0' ? data[i]['xtm_kh_bank.bank'] : ''}</span>*/
/*                             </td>*/
/*                            <td>*/
/*                                 <span>${data[i]['xtm_kh_bank.remark']}</span>*/
/*                             </td>*/
/*                         </tr>`*/
/* 				);*/
/* 			}*/
/* */
/* 			$('.dataList').html(list.join(''));*/
/* */
/* 			cs.getNodes([224,225]);*/
/* 	//		删除*/
/* //			$('.dataList .del').click(function() {*/
/* //				var id = $(this).parents('tr').attr('data-id');*/
/* //				bootbox.confirm('确认删除该账户？',function(flag){*/
/* //					if(flag){*/
/* //						ykp.doAjax({*/
/* //							url: '/api/api_bank/del',*/
/* //							method: 'post',*/
/* //							data: {*/
/* //								id: id*/
/* //							},*/
/* //							success: function(res) {*/
/* //								ykp.prompt('删除成功!');*/
/* //								getList(1);*/
/* //							}*/
/* //						})*/
/* //					}*/
/* //				});*/
/* //				*/
/* //			})*/
/* */
/* 			$('.dataList .del').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				layui.use('layer', function() {*/
/* 					var layer = layui.layer;*/
/* 					layer.confirm('确认删除该账户？', function(flag) {*/
/* 								if(flag){*/
/* 						ykp.doAjax({*/
/* 							url: '/api/api_bank/del',*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								id: id*/
/* 							},*/
/* 							success: function(res) {*/
/* 								ykp.prompt('删除成功!');*/
/* 								getList(1);*/
/* 							}*/
/* 						})*/
/* 					}*/
/* 						layer.closeAll();*/
/* 					});*/
/* 				})*/
/* 			})*/
/* */
/* */
/* */
/* */
/* */
/* 			//编辑*/
/* 			$('.dataList .edit').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_bank/index',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						filter: 'xtm_kh_bank.is_del = 0 and xtm_kh_bank.id = ' + id,*/
/* 						page: 1,*/
/* 						limit: page_size*/
/* 					},*/
/* 					success: function(res) {*/
/* 						showMark('#template1');*/
/* 						$('#showBox .title').text('编辑账户');*/
/* */
/* 						//账户类型切换至银行卡 开户银行显示，否则隐藏*/
/* 						changeAccountType(res.data.items[0]['xtm_bank.id']);*/
/* */
/* 						$('#templateCon .edit0').val(res.data.items[0]['xtm_kh_bank.bank_name']);*/
/* 						$('#templateCon .edit2').val(res.data.items[0]['xtm_kh_bank.bank_no']);*/
/* 						$('#templateCon .edit3').val(res.data.items[0]['xtm_kh_bank.type']);*/
/* 						$('#templateCon .edit4').val(res.data.items[0]['xtm_kh_bank.remark']);*/
/* 						*/
/* 						if(res.data.items[0]['xtm_kh_bank.type'] == 4) {*/
/* 							$('#templateCon .edit1').val(res.data.items[0]['xtm_kh_bank.bank']);*/
/* 							$('#templateCon .edit1').show();*/
/* 							$('#templateCon .bank').show()*/
/* 						}*/
/* 						currentId = res.data.items[0]['xtm_bank.value'];*/
/* 						//form-field-icon-1*/
/* 						ykp.doAjax({*/
/* 							url: '/api/api_bank/get_all_bank',*/
/* 							method: 'post',*/
/* 							data: {},*/
/* 							success: function(res1) {*/
/* 								var data = res1.data;*/
/* 								for(var i in data) {*/
/* 									if(data[i]['xtm_bank.value'] == currentId) {*/
/* 										$('#templateCon .edit1').append(new Option(data[i]['xtm_bank.name'], data[i]['xtm_bank.value'], true, true));*/
/* 									} else {*/
/* 										$('#templateCon .edit1').append(new Option(data[i]['xtm_bank.name'], data[i]['xtm_bank.value']));*/
/* 									}*/
/* 								}*/
/* */
/* 								$('#templateCon .add').click(function() {*/
/* 									ykp.doAjax({*/
/* 										url: '/api/api_bank/edit',*/
/* 										method: 'post',*/
/* 										data: {*/
/* 											bank_name: $('#templateCon .edit0').val(),*/
/* 											bank: $('#templateCon .edit1').val(),*/
/* 											bank_no: $('#templateCon .edit2').val(),*/
/* 											type:$('#templateCon .edit3').val(),*/
/* 											remark: $('#templateCon .edit4').val(),*/
/* 											id: id*/
/* 										},*/
/* 										success: function(res) {*/
/* 											getList(1);*/
/* 											ykp.prompt('编辑成功!');*/
/* 											cs.close();*/
/* 										}*/
/* 									})*/
/* 								})*/
/* 							}*/
/* 						})*/
/* */
/* 					}*/
/* 				})*/
/* 			})*/
/* 		}*/
/* */
/* 		$('#changePageNum').change(function() {*/
/* 			page_size = $(this).val();*/
/* 			getList(1);*/
/* 		})*/
/* */
/* 		//获取所有银行*/
/* 		function getBanks(){*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_bank/get_all_bank',*/
/* 				method: 'post',*/
/* 				data: {},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					for(var i in data){*/
/* 						$('#templateCon .edit1').append(new Option(data[i]['xtm_bank.name'], data[i]['xtm_bank.value']));*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* 		*/
/* 		//账户类型切换至银行卡 开户银行显示，否则隐藏*/
/* 		function changeAccountType(bank_id){*/
/* 			if(bank_id){*/
/* 				$('#templateCon .edit1').val(bank_id);*/
/* 				$('#templateCon .bank').show();*/
/* 			}*/
/* 			$('#templateCon .edit3').unbind('change').change(function(){*/
/* 				if($(this).val() == '4'){*/
/* 					$('#templateCon .bank').show();*/
/* 					getBanks();*/
/* 				}*/
/* 				if($(this).val() != '4'){*/
/* 					$('#templateCon .bank').hide();*/
/* 					$('#templateCon .edit1').find('option').not(':first').remove();*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//添加*/
/* 		function addData() {*/
/* 			$('#add').click(function() {*/
/* 				showMark('#template1');*/
/* 				$('#showBox .title').text('添加账户');*/
/* 				*/
/* 				changeAccountType();*/
/* */
/* 				$('#templateCon .add').click(function() {*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_bank/add',*/
/* 						method: 'post',*/
/* 						data: {*/
/* 							bank_name: $('#templateCon .edit0').val(),*/
/* 							bank: $('#templateCon .edit1').val(),*/
/* 							bank_no: $('#templateCon .edit2').val(),*/
/* 							type: $('#templateCon .edit3').val(),*/
/* 							remark: $('#templateCon .edit4').val()*/
/* 						},*/
/* 						success: function(res) {*/
/* 							getList(1);*/
/* 							ykp.prompt('添加成功!');*/
/* 							cs.close();*/
/* 						}*/
/* 					})*/
/* 				})*/
/* 			})*/
/* 		}*/
/* */
/* 	});*/
/* </script>*/
