<?php

/* admin/manage/products.html */
class __TwigTemplate_dad7ad939d68af6b8e60439ed63f5e0a88296d99af2632fc877aa126ec8801fe extends Twig_Template
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
\t\ttext-align: right;
\t}
</style>
<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<div>
\t\t\t<!-- \t<h3 class=\"header smaller lighter blue\">产品管理</h3> -->
\t\t\t<div class=\"row\" style=\"margin-top: 20px;\">
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"226\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" title=\"添加\" id=\"add\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;border-color: #32CD32 !important;\">
                        <i class=\"fa fa-plus\"></i>
                    </button>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button id=\"flush\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32   !important;\">
                        <i class=\"fa fa-refresh\"></i>
                    </button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"custom_table\">
\t\t\t<table id=\"dynamic-table\" style=\"margin-bottom:0px;\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t<th class=\"hidden-480 center\">操作</th>
\t\t\t\t\t\t<th class=\"center thColor\">产品编码</th>
\t\t\t\t\t\t<th class=\"center\">产品名称</th>
\t\t\t\t\t\t<th class=\"hidden-480 center\">分类</th>
\t\t\t\t\t\t<!--<th class=\"hidden-480 center \">价格</th>-->
\t\t\t\t\t</tr>
\t\t\t\t</thead>

\t\t\t\t<tbody class=\"dataList\">
\t\t\t\t</tbody>

\t\t\t</table>
\t\t\t
\t\t</div>
\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" id=\"num\"></div>
\t\t\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t\t\t<div id=\"pageBar\" class=\"pagination\"></div>
\t\t\t\t<div align=\"right\" style=\"float: right;  width: 10%;\">
\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t</div>
</div>
<div class=\"label_popup\" id=\"feedBack\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t\t        box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t\t<span style=\"display: inline-block;\">分类名称</span>
\t\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t\t</div>
\t\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t\t<input type=\"text\" width=\"200px\" style=\"margin: auto;\" id=\"typename\" />
\t\t\t\t\t<!--<hr>-->
\t\t\t\t</div>
\t\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t\t<button class=\"close_label\">关闭</button>
\t\t\t\t\t<button class=\"hold\">保存</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
<div class=\"row\" id=\"template1\" style=\"display:none;\">
\t<div style=\"margin-top:15px;\">
\t\t<label> 产品名称： </label>
\t\t<input class=\"name\" type=\"text\" msg=\"产品名称不能为空\" />
\t\t<label> 分类： </label>
\t\t<select class=\"type\" id=\"product\" style=\"width:174px;\" msg=\"请选择产品分类\">
\t\t\t<option>请选择</option>
\t\t\t<option> 记账报税 </option>
\t\t\t<option> 工商服务 </option>
\t\t\t<option> 知识产权 </option>
\t\t\t<option> 财税服务 </option>
\t\t\t<option> 网站建设 </option>
\t\t</select>
\t\t<button id=\"addTypeBtn\" class=\"btn\">添加</button>
\t\t<button id=\"delCusCate\" class=\"btn  btn-sm\" style=\"line-height:normal;height:30px;top:0; background: #FF5722 !important;\">删除</button>
\t</div>
\t<div style=\"margin-top:15px;\">
\t\t<!-- <label> 价格： </label>
            <input type=\"number\" class=\"price\" msg=\"产品价格不能为空\"/>-->
\t\t<label> 流程： </label>
\t\t<select class=\"lc\" style=\"width:174px;\" msg=\"请选择流程\">
\t\t\t<option>请选择</option>
\t\t</select>
\t</div>
\t<div style=\"text-align:center;margin-top:15px;\">
\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>

\t\t<button class=\"sure_button add\">
                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                保存
            </button>
\t</div>
\t
\t
</div>
";
        // line 111
        $this->loadTemplate("admin/mark.html", "admin/manage/products.html", 111)->display($context);
        // line 112
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script>
\tjQuery(function(\$) {
\t\tcs.getNodes([226]);
\t\tvar order = 'ckm_product.id desc';
\t\tvar data = {};
\t\tvar current = 1;
\t\tvar page_size = 10;
\t\taddData();
\t\tvar lType = {
\t\t\t0:\"记账报税\"
\t\t};
\t\tgetType();
\t\t//获取数据
\t\tgetList(1);

\t\tfunction getList(current) {

\t\t\tykp.list({
\t\t\t\turl: '/api/api_product/index',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tfilter: 'ckm_product.is_del = 0',
\t\t\t\t\tpage: current,
\t\t\t\t\tlimit: page_size,
\t\t\t\t\torder: order
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t}, 1000);

\t\t\t\t\t\t\$('.dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"color:#7d7d7d !important;text-align:center !important;\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddList(res, current);
\t\t\t\t}
\t\t\t});
\t\t}

\t\t\$('#flush').click(function() {
\t\t\tgetList();
\t\t})

\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_product/index',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: \"ckm_product.is_del = 0\",
\t\t\t\tlimit: page_size
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '.pageBar'
\t\t\t},
\t\t\tcontentId: \"#datalist\", //默认排序
\t\t\tinitOrder: \"xtm_kh_bank.bank_no\", //初始化sort
\t\t\tdefaultOrder: order,
\t\t\tparams: [{
\t\t\t\tid: \"#dynamic-table\",
\t\t\t\tfield: [\"\", \"\", \"ckm_product.name\", \"ckm_product.type\"]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});

\t\tfunction addList(res) {
\t\t\tvar data = res.data.items;
\t\t\tvar types = ['记账报税', '工商服务', '知识产权', '财税服务', '网站建设'];
\t\t\tvar list = [];
\t\t\tvar num = data.length;
            var totalCount = parseInt(res.data.totalCount);
            var _current = parseInt(res.data.curPage)-1;
            for(var i in data) {
\t\t\t\tlist.push(
\t\t\t\t\t`<tr product-id=\"\${data[i]['ckm_product.id']}\">
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"del btRed\" contentAuthority=\"227\" title=\"删除\"><i class=\"fa fa-trash-o\"></i></a>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t \${parseInt(totalCount - ((_current) * page_size + parseInt(i)))}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span>\${data[i]['ckm_product.name']}</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span>\${lType[data[i]['ckm_product.type']]}</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>`
\t\t\t\t);
\t\t\t}

\t\t\t\$('.dataList').html(list.join(''));
\t\t\tcs.getNodes([227]);

\t\t\teditOrdelete();
\t\t}
\t\t\$('#changePageNum').change(function() {
\t\t\tpage_size = \$(this).val();
\t\t\tgetPage(1);
\t\t})

\t\tfunction getPage(current) {
\t\t\tpage = current;
\t\t\tgetList(1);
\t\t};

\t\t//编辑或者删除
\t\tfunction editOrdelete() {

\t\t\t//删除
\t\t\t\$('#dynamic-table tbody tr').find('.del').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('product-id');
\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\tlayer.confirm('确认删除该产品？', function(index) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_product/del',
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tid: id
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('删除成功!');
\t\t\t\t\t\t\t\tgetList(1);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t});
\t\t\t\t})
\t\t\t})
\t\t}
\t\t
\t\t//添加
\t\tfunction addData() {
\t\t\t\$('#add').click(function() {
\t\t\t\tshowMark('#template1');
\t\t\t\tgetType();
\t\t\t\t\$('#showBox .title').text('添加');
\t\t\t\taddType();
\t\t\t\t\$('#templateCon .type').change(function() {
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_process/f7',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tselect: 'ckm_process.name,ckm_process.id',
\t\t\t\t\t\t\tfilter: 'ckm_process.is_del <> 1 and ckm_process.type = ' + (\$('#templateCon .type').val())
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\t\t\$('#templateCon .lc').find('option').not(':first').remove();
\t\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\t\t\$('#templateCon .lc').append(new Option(data[i]['name'], data[i]['id']));
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t});

\t\t\t\tvar productsMsg = [];

\t\t\t\t\$('#templateCon .add').unbind('click').click(function() {
\t\t\t\t\tif(!\$('#templateCon .name').val()){
\t\t\t\t\t\tykp.prompt('请选择名称')
\t\t\t\t\t\treturn;
\t\t\t\t\t}else if(!\$('#templateCon .type option:selected').index()) {
\t\t\t\t\t\tykp.prompt('请选择分类')
\t\t\t\t\t\treturn;
\t\t\t\t\t}else if(!\$('#templateCon .lc').val()){
\t\t\t\t\t\tykp.prompt('请选择流程')
\t\t\t\t\t\treturn;
\t\t\t\t\t} ;
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_product/add',
\t\t\t\t\t\tmethods: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tname: \$('#templateCon .name').val(),
\t\t\t\t\t\t\ttype: \$('#templateCon .type ').val(),
\t\t\t\t\t\t\t/*price:\$('#templateCon .price').val(),*/
\t\t\t\t\t\t\tprocess: \$('#templateCon .lc').val()
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tykp.prompt('添加成功!');
\t\t\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\t\t\$('#showBox').addClass('ishide');
\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t});
\t\t\t})
\t\t}
\t\t
\t\t
\t\tfunction addType() {
\t\t\t\$('#templateCon #addTypeBtn').click(function() {
\t\t\t\t\$('#feedBack').show();
\t\t\t\tsaveType();
\t\t\t})
\t\t\t\$('.close_label').click(function() {
\t\t\t\t\$('#typename').val(\"\");
\t\t\t\t\$('#feedBack').hide();
\t\t\t})
\t\t\t
\t\t\t\$('#templateCon #delCusCate').click(function() {
\t\t\t\tvar id = \$('#templateCon').find('#product').val();
\t\t\t\tif(id != \"\" && id != \"0\") {
\t\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\tlayer.confirm('确认删除吗？', function(index) {
\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\turl: \"/api/api_ptype/del\",
\t\t\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\tid: id
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\tlayer.close(index);
\t\t\t\t\t\t\t\t\tgetType();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t});
\t\t\t\t\t})
\t\t\t\t}else if(id == 0){
\t\t\t\t\tykp.prompt('记账报税不能删除');
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\tykp.prompt('请选中分类删除');
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t
\t\t\t})
\t\t}
\t\t
\t\tfunction saveType() {
\t\t\t\$('.hold').unbind().click(function() {
\t\t\t\tvar typename = \$('#typename').val();
\t\t\t\tif(typename.trim() == '') {
\t\t\t\t\tykp.prompt('分类不能为空！');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_ptype/add',
\t\t\t\t\tdata: {
\t\t\t\t\t\tname: typename
\t\t\t\t\t},
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tykp.prompt('添加成功！ ');
\t\t\t\t\t\t\$('#typename').val(\"\");
\t\t\t\t\t\t\$('#feedBack').hide();
\t\t\t\t\t\tgetType();
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})
\t\t}
\t\t
\t\tfunction getType(){
\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_ptype/index',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata:{
\t\t\t\t\t\tlimit:1000,
\t\t\t\t\t\tfilter:\"ckm_ptype.is_del=0\"
\t\t\t\t\t},
\t\t\t\t\tasync:false,
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data.items;
\t\t\t\t\t\tvar option = \"<option>请选择</option><option value='0'> 记账报税 </option>\"
\t\t\t\t\t\tfor(var i in data){
\t\t\t\t\t\t\toption += \"<option value=\"+data[i]['ckm_ptype.id']+\">\"+ data[i]['ckm_ptype.name']+\"</option>\"
\t\t\t\t\t\t\tlType[data[i]['ckm_ptype.id']] = data[i]['ckm_ptype.name'];
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\t\$('#templateCon #product').html(option);
\t\t\t\t\t}
\t\t\t})
\t\t}

\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/manage/products.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 112,  131 => 111,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	#templateCon label {*/
/* 		width: 70px;*/
/* 		text-align: right;*/
/* 	}*/
/* </style>*/
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<div>*/
/* 			<!-- 	<h3 class="header smaller lighter blue">产品管理</h3> -->*/
/* 			<div class="row" style="margin-top: 20px;">*/
/* 				<div class="col-sx-4" contentAuthority="226" style=" float: left; margin-right: 5px;">*/
/* 					<button type="button" title="添加" id="add" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;border-color: #32CD32 !important;">*/
/*                         <i class="fa fa-plus"></i>*/
/*                     </button>*/
/* 					</button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 					<button id="flush" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32   !important;">*/
/*                         <i class="fa fa-refresh"></i>*/
/*                     </button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="custom_table">*/
/* 			<table id="dynamic-table" style="margin-bottom:0px;">*/
/* 				<thead>*/
/* 					<tr class="thColor">*/
/* 						<th class="hidden-480 center">操作</th>*/
/* 						<th class="center thColor">产品编码</th>*/
/* 						<th class="center">产品名称</th>*/
/* 						<th class="hidden-480 center">分类</th>*/
/* 						<!--<th class="hidden-480 center ">价格</th>-->*/
/* 					</tr>*/
/* 				</thead>*/
/* */
/* 				<tbody class="dataList">*/
/* 				</tbody>*/
/* */
/* 			</table>*/
/* 			*/
/* 		</div>*/
/* 		<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 				<div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
/* 				<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 				<div id="pageBar" class="pagination"></div>*/
/* 				<div align="right" style="float: right;  width: 10%;">*/
/* 					<select style="width: 100px;" id="changePageNum">*/
/* 						<option value="10">每页10条</option>*/
/* 						<option value="20">每页20条</option>*/
/* 						<option value="50">每页50条</option>*/
/* 						<option value="100">每页100条</option>*/
/* 						<option value="200">每页200条</option>*/
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 	</div>*/
/* </div>*/
/* <div class="label_popup" id="feedBack" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 			<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 		        box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 				<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 					<span style="display: inline-block;">分类名称</span>*/
/* 					<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 				</div>*/
/* 				<div style="padding: 10px 50px;">*/
/* 					<input type="text" width="200px" style="margin: auto;" id="typename" />*/
/* 					<!--<hr>-->*/
/* 				</div>*/
/* 				<div style="padding:15px;text-align:right;">*/
/* 					<button class="close_label">关闭</button>*/
/* 					<button class="hold">保存</button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* <div class="row" id="template1" style="display:none;">*/
/* 	<div style="margin-top:15px;">*/
/* 		<label> 产品名称： </label>*/
/* 		<input class="name" type="text" msg="产品名称不能为空" />*/
/* 		<label> 分类： </label>*/
/* 		<select class="type" id="product" style="width:174px;" msg="请选择产品分类">*/
/* 			<option>请选择</option>*/
/* 			<option> 记账报税 </option>*/
/* 			<option> 工商服务 </option>*/
/* 			<option> 知识产权 </option>*/
/* 			<option> 财税服务 </option>*/
/* 			<option> 网站建设 </option>*/
/* 		</select>*/
/* 		<button id="addTypeBtn" class="btn">添加</button>*/
/* 		<button id="delCusCate" class="btn  btn-sm" style="line-height:normal;height:30px;top:0; background: #FF5722 !important;">删除</button>*/
/* 	</div>*/
/* 	<div style="margin-top:15px;">*/
/* 		<!-- <label> 价格： </label>*/
/*             <input type="number" class="price" msg="产品价格不能为空"/>-->*/
/* 		<label> 流程： </label>*/
/* 		<select class="lc" style="width:174px;" msg="请选择流程">*/
/* 			<option>请选择</option>*/
/* 		</select>*/
/* 	</div>*/
/* 	<div style="text-align:center;margin-top:15px;">*/
/* 		<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* */
/* 		<button class="sure_button add">*/
/*                 <i class="fa fa-check" aria-hidden="true"></i>*/
/*                 保存*/
/*             </button>*/
/* 	</div>*/
/* 	*/
/* 	*/
/* </div>*/
/* {% include 'admin/mark.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script>*/
/* 	jQuery(function($) {*/
/* 		cs.getNodes([226]);*/
/* 		var order = 'ckm_product.id desc';*/
/* 		var data = {};*/
/* 		var current = 1;*/
/* 		var page_size = 10;*/
/* 		addData();*/
/* 		var lType = {*/
/* 			0:"记账报税"*/
/* 		};*/
/* 		getType();*/
/* 		//获取数据*/
/* 		getList(1);*/
/* */
/* 		function getList(current) {*/
/* */
/* 			ykp.list({*/
/* 				url: '/api/api_product/index',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					filter: 'ckm_product.is_del = 0',*/
/* 					page: current,*/
/* 					limit: page_size,*/
/* 					order: order*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt('暂无数据！');*/
/* 						}, 1000);*/
/* */
/* 						$('.dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="color:#7d7d7d !important;text-align:center !important;" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					}*/
/* 					addList(res, current);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		$('#flush').click(function() {*/
/* 			getList();*/
/* 		})*/
/* */
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_product/index',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: "ckm_product.is_del = 0",*/
/* 				limit: page_size*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '.pageBar'*/
/* 			},*/
/* 			contentId: "#datalist", //默认排序*/
/* 			initOrder: "xtm_kh_bank.bank_no", //初始化sort*/
/* 			defaultOrder: order,*/
/* 			params: [{*/
/* 				id: "#dynamic-table",*/
/* 				field: ["", "", "ckm_product.name", "ckm_product.type"]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* */
/* 		function addList(res) {*/
/* 			var data = res.data.items;*/
/* 			var types = ['记账报税', '工商服务', '知识产权', '财税服务', '网站建设'];*/
/* 			var list = [];*/
/* 			var num = data.length;*/
/*             var totalCount = parseInt(res.data.totalCount);*/
/*             var _current = parseInt(res.data.curPage)-1;*/
/*             for(var i in data) {*/
/* 				list.push(*/
/* 					`<tr product-id="${data[i]['ckm_product.id']}">*/
/* 						<td>*/
/* 							<label class="pos-rel">*/
/* 								<a href="#" class="del btRed" contentAuthority="227" title="删除"><i class="fa fa-trash-o"></i></a>*/
/* 							</label>*/
/* 						</td>*/
/* 						<td>*/
/* 						 ${parseInt(totalCount - ((_current) * page_size + parseInt(i)))}*/
/* 						</td>*/
/* 						<td>*/
/* 							<span>${data[i]['ckm_product.name']}</span>*/
/* 						</td>*/
/* 						<td>*/
/* 							<span>${lType[data[i]['ckm_product.type']]}</span>*/
/* 						</td>*/
/* 					</tr>`*/
/* 				);*/
/* 			}*/
/* */
/* 			$('.dataList').html(list.join(''));*/
/* 			cs.getNodes([227]);*/
/* */
/* 			editOrdelete();*/
/* 		}*/
/* 		$('#changePageNum').change(function() {*/
/* 			page_size = $(this).val();*/
/* 			getPage(1);*/
/* 		})*/
/* */
/* 		function getPage(current) {*/
/* 			page = current;*/
/* 			getList(1);*/
/* 		};*/
/* */
/* 		//编辑或者删除*/
/* 		function editOrdelete() {*/
/* */
/* 			//删除*/
/* 			$('#dynamic-table tbody tr').find('.del').click(function() {*/
/* 				var id = $(this).parents('tr').attr('product-id');*/
/* 				layui.use('layer', function() {*/
/* 					var layer = layui.layer;*/
/* 					layer.confirm('确认删除该产品？', function(index) {*/
/* 						ykp.doAjax({*/
/* 							url: '/api/api_product/del',*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								id: id*/
/* 							},*/
/* 							success: function(res) {*/
/* 								ykp.prompt('删除成功!');*/
/* 								getList(1);*/
/* 							}*/
/* 						})*/
/* 						layer.closeAll();*/
/* 					});*/
/* 				})*/
/* 			})*/
/* 		}*/
/* 		*/
/* 		//添加*/
/* 		function addData() {*/
/* 			$('#add').click(function() {*/
/* 				showMark('#template1');*/
/* 				getType();*/
/* 				$('#showBox .title').text('添加');*/
/* 				addType();*/
/* 				$('#templateCon .type').change(function() {*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_process/f7',*/
/* 						method: 'post',*/
/* 						data: {*/
/* 							select: 'ckm_process.name,ckm_process.id',*/
/* 							filter: 'ckm_process.is_del <> 1 and ckm_process.type = ' + ($('#templateCon .type').val())*/
/* 						},*/
/* 						success: function(res) {*/
/* 							var data = res.data;*/
/* 							$('#templateCon .lc').find('option').not(':first').remove();*/
/* 							for(var i in data) {*/
/* 								$('#templateCon .lc').append(new Option(data[i]['name'], data[i]['id']));*/
/* 							}*/
/* 						}*/
/* 					})*/
/* 				});*/
/* */
/* 				var productsMsg = [];*/
/* */
/* 				$('#templateCon .add').unbind('click').click(function() {*/
/* 					if(!$('#templateCon .name').val()){*/
/* 						ykp.prompt('请选择名称')*/
/* 						return;*/
/* 					}else if(!$('#templateCon .type option:selected').index()) {*/
/* 						ykp.prompt('请选择分类')*/
/* 						return;*/
/* 					}else if(!$('#templateCon .lc').val()){*/
/* 						ykp.prompt('请选择流程')*/
/* 						return;*/
/* 					} ;*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_product/add',*/
/* 						methods: 'post',*/
/* 						data: {*/
/* 							name: $('#templateCon .name').val(),*/
/* 							type: $('#templateCon .type ').val(),*/
/* 							/*price:$('#templateCon .price').val(),*//* */
/* 							process: $('#templateCon .lc').val()*/
/* 						},*/
/* 						success: function(res) {*/
/* 							ykp.prompt('添加成功!');*/
/* 							$('.in').removeClass('modal-backdrop');*/
/* 							$('#showBox').addClass('ishide');*/
/* 							getList();*/
/* 						}*/
/* 					})*/
/* 				});*/
/* 			})*/
/* 		}*/
/* 		*/
/* 		*/
/* 		function addType() {*/
/* 			$('#templateCon #addTypeBtn').click(function() {*/
/* 				$('#feedBack').show();*/
/* 				saveType();*/
/* 			})*/
/* 			$('.close_label').click(function() {*/
/* 				$('#typename').val("");*/
/* 				$('#feedBack').hide();*/
/* 			})*/
/* 			*/
/* 			$('#templateCon #delCusCate').click(function() {*/
/* 				var id = $('#templateCon').find('#product').val();*/
/* 				if(id != "" && id != "0") {*/
/* 					layui.use('layer', function() {*/
/* 						var layer = layui.layer;*/
/* 						layer.confirm('确认删除吗？', function(index) {*/
/* 							ykp.doAjax({*/
/* 								url: "/api/api_ptype/del",*/
/* 								method: "post",*/
/* 								data: {*/
/* 									id: id*/
/* 								},*/
/* 								success: function(res) {*/
/* 									layer.close(index);*/
/* 									getType();*/
/* 								}*/
/* 							})*/
/* 						});*/
/* 					})*/
/* 				}else if(id == 0){*/
/* 					ykp.prompt('记账报税不能删除');*/
/* 					return false;*/
/* 				}else{*/
/* 					ykp.prompt('请选中分类删除');*/
/* 					return false;*/
/* 				}*/
/* 				*/
/* 			})*/
/* 		}*/
/* 		*/
/* 		function saveType() {*/
/* 			$('.hold').unbind().click(function() {*/
/* 				var typename = $('#typename').val();*/
/* 				if(typename.trim() == '') {*/
/* 					ykp.prompt('分类不能为空！');*/
/* 					return;*/
/* 				}*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_ptype/add',*/
/* 					data: {*/
/* 						name: typename*/
/* 					},*/
/* 					method: 'post',*/
/* 					success: function(res) {*/
/* 						ykp.prompt('添加成功！ ');*/
/* 						$('#typename').val("");*/
/* 						$('#feedBack').hide();*/
/* 						getType();*/
/* 					}*/
/* 				})*/
/* 			})*/
/* 		}*/
/* 		*/
/* 		function getType(){*/
/* 			ykp.doAjax({*/
/* 					url: '/api/api_ptype/index',*/
/* 					method: 'post',*/
/* 					data:{*/
/* 						limit:1000,*/
/* 						filter:"ckm_ptype.is_del=0"*/
/* 					},*/
/* 					async:false,*/
/* 					success: function(res) {*/
/* 						var data = res.data.items;*/
/* 						var option = "<option>请选择</option><option value='0'> 记账报税 </option>"*/
/* 						for(var i in data){*/
/* 							option += "<option value="+data[i]['ckm_ptype.id']+">"+ data[i]['ckm_ptype.name']+"</option>"*/
/* 							lType[data[i]['ckm_ptype.id']] = data[i]['ckm_ptype.name'];*/
/* 						}*/
/* 						*/
/* 						$('#templateCon #product').html(option);*/
/* 					}*/
/* 			})*/
/* 		}*/
/* */
/* 	});*/
/* </script>*/
