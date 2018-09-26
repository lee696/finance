<?php

/* admin/manage/manageOfapproval.html */
class __TwigTemplate_4bc003d82e179c5ffd19355bbfa9449a4435d5a7d8e41fa18067be062c844334 extends Twig_Template
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
\ttbody tr td:before{
\t\theight: 38px;
\t}
\t.btn-group:first-child {
\t\twidth: 100%;
\t}
\t.cur {
\t\ttext-align: center;
\t}
</style>
<div class=\" widget-main\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<!--                 <h3 class=\"header smaller lighter blue\">审批管理</h3> -->
\t\t\t<div class=\"row\" style=\"margin-top: 20px;\">
\t\t\t\t<!--<h3 class=\"header smaller lighter blue\">送单</h3>-->
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
                    <input type=\"text\" pts=0 sear=\"spm_manage.name\" id=\"form-field-1\" placeholder=\"审批项目\"  />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
                    <button type=\"button\" id=\"search\" class=\"btn btn-info btn-sm\">
                        <i class=\"fa fa-search\"></i>
                    </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
                    <button id=\"flush\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
\t                    <i class=\"fa fa-refresh\"></i>
\t                </button>
\t\t\t\t</div>
\t\t\t\t<!-- <div class=\"col-sx-4\" contentAuthority=\"230\" style=\" float: left; margin-right: 5px;\">
                \t<button type=\"button\" id=\"addItem\" class=\"btn btn-info btn-sm\">
                        <i class=\"fa fa-plus\"></i>
                        添加
                    </button>
\t\t\t\t</div>   -->
\t\t\t</div>
\t\t\t<div class=\"custom_table\">
\t\t\t\t<table id=\"dynamic-table\" style=\"margin-bottom:0px;\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<th class=\"center thColor\">操作</th>
\t\t\t\t\t\t<th class=\"center thColor\">审批项目</th>
\t\t\t\t\t\t<th class=\"center thColor\">是否启用审批</th>
\t\t\t\t\t\t<th class=\"center thColor\">审批人</th>

\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<tbody id=\"dataList\">
\t\t\t\t\t\t

\t\t\t\t\t</tbody>

\t\t\t\t</table>
\t\t\t\t
\t\t\t</div>
\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" id=\"num\"></div>
\t\t\t\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t\t\t\t<div id=\"pageBar\" class=\"pagination\"></div>
\t\t\t\t\t<div align=\"right\" style=\"float: right;  width: 10%;\">
\t\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\" id=\"template1\" style=\"display: none\">\t

\t\t\t<div class=\"row\">
\t\t\t\t<div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label style=\"width:72px;\"> 审批项目： </label>
\t\t\t\t\t\t\t<select id=\"spDemo\">
\t\t\t\t\t\t\t\t<option>收单</option>
\t\t\t\t\t\t\t\t<option>整单</option>
\t\t\t\t\t\t\t\t<option>记账</option>
\t\t\t\t\t\t\t\t<option>客服</option>
\t\t\t\t\t\t\t\t<option>报税</option>
\t\t\t\t\t\t\t\t<option>送单</option>
\t\t\t\t\t\t\t\t<option>仓位</option>
\t\t\t\t\t\t\t\t<option>开票</option>
\t\t\t\t\t\t\t\t<option>订单</option>
\t\t\t\t\t\t\t\t<option>出库</option>
\t\t\t\t\t\t\t\t<option>入库</option>
\t\t\t\t\t\t\t\t<option>退单</option>
\t\t\t\t\t\t\t\t<option>盘点</option>
\t\t\t\t\t\t\t\t<option>支出</option>
\t\t\t\t\t\t\t\t<option>借贷</option>
\t\t\t\t\t\t\t\t<option>投诉</option>
\t\t\t\t\t\t\t\t<option>所有任务</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t\t<label style=\"width:72px;\"> 审批负责人： </label>
\t\t\t\t\t\t\t<select multiple=\"\" id=\"state1\" name=\"state\" addfield=\"zd\" class=\" state select2 select2-hidden-accessible\" data-placeholder=\"选择整单负责人\" style=\"width: 400px;\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\" padding-4 clearfix\" style=\"margin-top:15px;\">
\t\t\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t\t<div class=\"cur\">
\t\t\t\t\t\t<button class=\"btn btn-info\">
                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                保存
                            </button>
                            </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t</div>

\t<div class=\"row\" id=\"template2\" style=\"display: none\">
\t\t<div class=\"widget-box\">\t\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div>
\t\t\t\t\t\t<label style=\"width:48px;\"> 审批人： </label>
\t\t\t\t\t\t<select multiple=\"\" id=\"state1\" name=\"state\" addfield=\"zd\" class=\" state select2 select2-hidden-accessible\" data-placeholder=\"选择整单负责人\" style=\"width:400px;\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\" padding-4 clearfix\" style=\"margin-top:15px;\">
\t\t\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t\t\t<div class=\"cur\">
\t\t\t\t\t\t<button class=\"btn btn-info\">
\t                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
\t                        保存
\t                    </button>
\t                    </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


";
        // line 141
        $this->loadTemplate("admin/mark.html", "admin/manage/manageOfapproval.html", 141)->display($context);
        // line 142
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script>
\tjQuery(function(\$) {
\t\tcs.getNodes([230]);
\t\tvar page_size = 10;
\t\tgetPageList();
\t\t
\t\tdoSearch();
\t\tfunction doSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_manage/index',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: page_size,
\t\t\t\t\t
\t\t\t\t}
\t\t\t}
\t\t\tcs.doSearch('#search', data, 'filter', false, function(res) {
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn false;
\t\t\t\t} else {
\t\t\t\t\thandleData(res);
\t\t\t\t}
\t\t\t})
\t\t}
\t\t
\t\t\$('#flush').click(function(){
\t\t\tgetPageList();
\t\t})
\t\t
\t\t\$('#changePageNum').change(function() {
            page_size = \$(this).val();
            getPageList();
        })
\t\tfunction getPageList() {
\t\t\tykp.list({
\t\t\t\turl: '/api/api_manage/index',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: page_size,
\t\t\t\t\t
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t} else {
\t\t\t\t\t\thandleData(res);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}

\t\tfunction handleData(res) {
\t\t\tvar data = res.data.items;
\t\t\tif (data == '') {
\t\t\t\tsetTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\treturn
\t\t\t}
\t\t\tvar content = '';
\t\t\tvar dataArr = [];
\t\t\tfor(var i in data) {
\t\t\t\tcontent += `<tr data-name=\"\${data[i][0]['spm_manage.name']}\">
\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
                                    <a class=\"edit btBlue\" contentAuthority=\"231\" title=\"编辑\"><i class=\"fa fa-pencil-square-o\"></i></a>
                                </label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\">\${data[i][0]['spm_manage.name']}</td>
\t\t\t\t\t\t\t<td class=\"center\" >
\t\t\t\t\t\t\t<span contentAuthority=\"232\" class=\"pos-rel\">
\t\t\t\t\t\t\t\t<label class=\"pull-center inline\">
                                <input  data-status=\"\${data[i][0]['spm_manage.status']}\"   \${data[i][0]['spm_manage.status']  == 1 ? \"checked\" : \"\"}  type=\"checkbox\" class=\"ace ace-switch ace-switch-5\">
\t                            <span class=\"lbl middle\"></span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t
                        </label>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\${data[i]['user'].join(',')}
\t\t\t\t\t</td>
\t\t\t\t</tr>`
\t\t\t}
\t\t\t\$('#dataList').html(content);

\t\t\tcs.getNodes([231,232]);

//\t\t\t\$('#dataList').find('input[type=checkbox]').each(function() {
//\t\t\t\tif(parseInt(\$(this).attr('data-status')) == 1) {
//\t\t\t\t\t\$(this).prop('checked', true);
//\t\t\t\t}
//\t\t\t})

\t\t\t//改变审批状态
\t\t\t\$('#dataList').find('input[type=checkbox]').unbind('change').change(function() {
\t\t\t\tvar status = \$(this).attr('data-status');
\t\t\t\tvar name = \$(this).parents('tr').attr('data-name');
\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\tstatus = status == 1 ? 0 : 1;
\t\t\t\tvar This = \$(this);
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_manage/changeStatus',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tname: name,
\t\t\t\t\t\tstatus: status
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tif(!res.data) {
\t\t\t\t\t\t\tykp.prompt('编辑成功');
\t\t\t\t\t\t\tgetPageList();
\t\t\t\t\t\t\tvar approve_status = JSON.parse(ykp.getCookie('spList'));
\t\t\t\t\t\t\tapprove_status[name]['status'] = status;
\t\t\t\t\t\t\tykp.setCookie('spList',JSON.stringify(approve_status));
\t\t\t\t\t\t}else {
\t\t\t\t\t\t\tykp.prompt(res.data);
\t\t\t\t\t\t\tgetPageList();
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})
\t\t\t\t
\t\t\t//编辑
\t\t\t\$('.edit').click(function() {
\t\t\t\tvar name = \$(this).parents('tr').attr('data-name');
\t\t\t\tshowMark('#template2');
\t\t\t\t\$('#showBox .title').text('编辑'+ name +'审批');
\t\t\t\tykp.doAjax({
\t\t\t\t\turl:'/api/api_manage/info',
\t\t\t\t\tmethod:'post',
\t\t\t\t\tdata:{
\t\t\t\t\t\tname:name
\t\t\t\t\t},
\t\t\t\t\tsuccess:function(res) {
\t\t\t\t\t\tsetPeople(res.data.join(','),name);
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})
\t\t}
\t\tpageinfo();

\t\tfunction pageinfo() {
\t\t\t\$('#addItem').click(function() {
\t\t\t\tshowMark('#template1');
\t\t\t\t\$('#showBox .title').text('添加审批项');
\t\t\t\tsetPeople();
\t\t\t})

\t\t}

\t\tfunction setPeople(arr,name) {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_employees/f7',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tselect2();
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tif(data[i]['bmm_employees.name']) {
\t\t\t\t\t\t\$('#templateCon .state').append(new Option(data[i]['bmm_employees.name'], data[i]['bmm_employees.id']));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t\tif(arr) {
\t\t\t\t\t\t\$(\"#templateCon #state1\").val(arr.split(\",\")).trigger('change');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\t\$('#templateBox .btn').click(function() {
\t\t\t\tif(!arr){
\t\t\t\t\tname = \$('#templateCon #spDemo').val();
\t\t\t\t}
\t\t\t\tvar peopel = \$('#templateCon .state').select2('data');
\t\t\t\tvar url = \"/api/api_manage/add\";
\t\t\t\tvar msg = '添加成功';
\t\t\t\tvar user = [];
\t\t\t\tfor(var j in peopel) {
\t\t\t\t\tuser.push(peopel[j].id);
\t\t\t\t}
\t\t\t\tif(user.length == 0) {
\t\t\t\t\tykp.prompt('请选择负责人！');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tif(arr) {
\t\t\t\t\turl = \"/api/api_manage/edit\";
\t\t\t\t}

\t\t\t\tvar _user = user.join(',');
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: url,
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tname:name,
\t\t\t\t\t\tuser: _user
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tif(arr) {
\t\t\t\t\t\t\tmsg = '编辑成功';
\t\t\t\t\t\t}else{
\t\t\t\t\t\t}
\t\t\t\t\t\tykp.prompt(msg);

\t\t\t\t\t\tvar spList = JSON.parse(ykp.getCookie('spList'));
\t\t\t\t\t\t// console.log(spList[name]['status']);
\t\t\t\t\t\tspList[name] = {user:_user,status:spList[name] ? spList[name]['status'] : 1};
\t\t\t\t\t\t// console.log(spList[name]);
\t\t\t\t\t\tconsole.log(spList)
\t\t\t\t\t\tykp.setCookie('spList',JSON.stringify(spList));

\t\t\t\t\t\tcs.close();
\t\t\t\t\t\tgetPageList();
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})
\t\t}

\t\tfunction select2() {
\t\t\t//参与人员
\t\t\t\$('#templateCon .select2').select2({
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

\t\tfunction checkAll(status) {
\t\t\t\$(\"tbody input[name='check']\").each(function(i, n) {
\t\t\t\tn.checked = status;
\t\t\t});
\t\t}

\t\tfunction submit() {
\t\t\tvar val = \$('#templateCon #cnumber').val()
\t\t\t//console.log(val)
\t\t}

\t\tfunction add() {
\t\t\tvar val = \$('#templateCon #cnumber1').val()
\t\t\t//console.log(val)
\t\t}

\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/manage/manageOfapproval.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 142,  161 => 141,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	tbody tr td:before{*/
/* 		height: 38px;*/
/* 	}*/
/* 	.btn-group:first-child {*/
/* 		width: 100%;*/
/* 	}*/
/* 	.cur {*/
/* 		text-align: center;*/
/* 	}*/
/* </style>*/
/* <div class=" widget-main">*/
/* 	<div class="row">*/
/* 		<div class="col-lg-12">*/
/* 			<!--                 <h3 class="header smaller lighter blue">审批管理</h3> -->*/
/* 			<div class="row" style="margin-top: 20px;">*/
/* 				<!--<h3 class="header smaller lighter blue">送单</h3>-->*/
/* 				<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/*                     <input type="text" pts=0 sear="spm_manage.name" id="form-field-1" placeholder="审批项目"  />*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/*                     <button type="button" id="search" class="btn btn-info btn-sm">*/
/*                         <i class="fa fa-search"></i>*/
/*                     </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/*                     <button id="flush" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/* 	                    <i class="fa fa-refresh"></i>*/
/* 	                </button>*/
/* 				</div>*/
/* 				<!-- <div class="col-sx-4" contentAuthority="230" style=" float: left; margin-right: 5px;">*/
/*                 	<button type="button" id="addItem" class="btn btn-info btn-sm">*/
/*                         <i class="fa fa-plus"></i>*/
/*                         添加*/
/*                     </button>*/
/* 				</div>   -->*/
/* 			</div>*/
/* 			<div class="custom_table">*/
/* 				<table id="dynamic-table" style="margin-bottom:0px;">*/
/* 					<thead>*/
/* 						<th class="center thColor">操作</th>*/
/* 						<th class="center thColor">审批项目</th>*/
/* 						<th class="center thColor">是否启用审批</th>*/
/* 						<th class="center thColor">审批人</th>*/
/* */
/* 						</tr>*/
/* 					</thead>*/
/* */
/* 					<tbody id="dataList">*/
/* 						*/
/* */
/* 					</tbody>*/
/* */
/* 				</table>*/
/* 				*/
/* 			</div>*/
/* 			<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 					<div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
/* 					<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 					<div id="pageBar" class="pagination"></div>*/
/* 					<div align="right" style="float: right;  width: 10%;">*/
/* 						<select style="width: 100px;" id="changePageNum">*/
/* 							<option value="10">每页10条</option>*/
/* 							<option value="20">每页20条</option>*/
/* 							<option value="50">每页50条</option>*/
/* 							<option value="100">每页100条</option>*/
/* 							<option value="200">每页200条</option>*/
/* 						</select>*/
/* 					</div>*/
/* 				</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row" id="template1" style="display: none">	*/
/* */
/* 			<div class="row">*/
/* 				<div>*/
/* 						<div>*/
/* 							<label style="width:72px;"> 审批项目： </label>*/
/* 							<select id="spDemo">*/
/* 								<option>收单</option>*/
/* 								<option>整单</option>*/
/* 								<option>记账</option>*/
/* 								<option>客服</option>*/
/* 								<option>报税</option>*/
/* 								<option>送单</option>*/
/* 								<option>仓位</option>*/
/* 								<option>开票</option>*/
/* 								<option>订单</option>*/
/* 								<option>出库</option>*/
/* 								<option>入库</option>*/
/* 								<option>退单</option>*/
/* 								<option>盘点</option>*/
/* 								<option>支出</option>*/
/* 								<option>借贷</option>*/
/* 								<option>投诉</option>*/
/* 								<option>所有任务</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div style="margin-top:15px;">*/
/* 							<label style="width:72px;"> 审批负责人： </label>*/
/* 							<select multiple="" id="state1" name="state" addfield="zd" class=" state select2 select2-hidden-accessible" data-placeholder="选择整单负责人" style="width: 400px;" tabindex="-1" aria-hidden="true">*/
/* 							</select>*/
/* 						</div>*/
/* 				</div>*/
/* 				<div class=" padding-4 clearfix" style="margin-top:15px;">*/
/* 					<div class="btn-group pull-right">*/
/* 					<div class="cur">*/
/* 						<button class="btn btn-info">*/
/*                                 <i class="fa fa-check" aria-hidden="true"></i>*/
/*                                 保存*/
/*                             </button>*/
/*                             </div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 	</div>*/
/* */
/* 	<div class="row" id="template2" style="display: none">*/
/* 		<div class="widget-box">				*/
/* 			<div class="row">*/
/* 				<div>*/
/* 						<label style="width:48px;"> 审批人： </label>*/
/* 						<select multiple="" id="state1" name="state" addfield="zd" class=" state select2 select2-hidden-accessible" data-placeholder="选择整单负责人" style="width:400px;" tabindex="-1" aria-hidden="true">*/
/* 						</select>*/
/* 				</div>*/
/* 				<div class=" padding-4 clearfix" style="margin-top:15px;">*/
/* 					<div class="btn-group pull-right">*/
/* 						<div class="cur">*/
/* 						<button class="btn btn-info">*/
/* 	                        <i class="fa fa-check" aria-hidden="true"></i>*/
/* 	                        保存*/
/* 	                    </button>*/
/* 	                    </div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* */
/* {% include 'admin/mark.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script>*/
/* 	jQuery(function($) {*/
/* 		cs.getNodes([230]);*/
/* 		var page_size = 10;*/
/* 		getPageList();*/
/* 		*/
/* 		doSearch();*/
/* 		function doSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_manage/index',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					limit: page_size,*/
/* 					*/
/* 				}*/
/* 			}*/
/* 			cs.doSearch('#search', data, 'filter', false, function(res) {*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 					$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center" class="page">暂无数据</div></td></tr>');*/
/* 					return false;*/
/* 				} else {*/
/* 					handleData(res);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* 		*/
/* 		$('#flush').click(function(){*/
/* 			getPageList();*/
/* 		})*/
/* 		*/
/* 		$('#changePageNum').change(function() {*/
/*             page_size = $(this).val();*/
/*             getPageList();*/
/*         })*/
/* 		function getPageList() {*/
/* 			ykp.list({*/
/* 				url: '/api/api_manage/index',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: page_size,*/
/* 					*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 						$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center" class="page">暂无数据</div></td></tr>');*/
/* 					} else {*/
/* 						handleData(res);*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		function handleData(res) {*/
/* 			var data = res.data.items;*/
/* 			if (data == '') {*/
/* 				setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 				return*/
/* 			}*/
/* 			var content = '';*/
/* 			var dataArr = [];*/
/* 			for(var i in data) {*/
/* 				content += `<tr data-name="${data[i][0]['spm_manage.name']}">*/
/* 							<td class="center">*/
/* 								<label class="pos-rel">*/
/*                                     <a class="edit btBlue" contentAuthority="231" title="编辑"><i class="fa fa-pencil-square-o"></i></a>*/
/*                                 </label>*/
/* 							</td>*/
/* 							<td class="center">${data[i][0]['spm_manage.name']}</td>*/
/* 							<td class="center" >*/
/* 							<span contentAuthority="232" class="pos-rel">*/
/* 								<label class="pull-center inline">*/
/*                                 <input  data-status="${data[i][0]['spm_manage.status']}"   ${data[i][0]['spm_manage.status']  == 1 ? "checked" : ""}  type="checkbox" class="ace ace-switch ace-switch-5">*/
/* 	                            <span class="lbl middle"></span>*/
/* 							</span>*/
/* 								*/
/*                         </label>*/
/* 					</td>*/
/* 					<td class="center">*/
/* 						${data[i]['user'].join(',')}*/
/* 					</td>*/
/* 				</tr>`*/
/* 			}*/
/* 			$('#dataList').html(content);*/
/* */
/* 			cs.getNodes([231,232]);*/
/* */
/* //			$('#dataList').find('input[type=checkbox]').each(function() {*/
/* //				if(parseInt($(this).attr('data-status')) == 1) {*/
/* //					$(this).prop('checked', true);*/
/* //				}*/
/* //			})*/
/* */
/* 			//改变审批状态*/
/* 			$('#dataList').find('input[type=checkbox]').unbind('change').change(function() {*/
/* 				var status = $(this).attr('data-status');*/
/* 				var name = $(this).parents('tr').attr('data-name');*/
/* 				var index = $(this).parents('tr').index();*/
/* 				status = status == 1 ? 0 : 1;*/
/* 				var This = $(this);*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_manage/changeStatus',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						name: name,*/
/* 						status: status*/
/* 					},*/
/* 					success: function(res) {*/
/* 						if(!res.data) {*/
/* 							ykp.prompt('编辑成功');*/
/* 							getPageList();*/
/* 							var approve_status = JSON.parse(ykp.getCookie('spList'));*/
/* 							approve_status[name]['status'] = status;*/
/* 							ykp.setCookie('spList',JSON.stringify(approve_status));*/
/* 						}else {*/
/* 							ykp.prompt(res.data);*/
/* 							getPageList();*/
/* 						}*/
/* 						*/
/* 					}*/
/* 				})*/
/* 			})*/
/* 				*/
/* 			//编辑*/
/* 			$('.edit').click(function() {*/
/* 				var name = $(this).parents('tr').attr('data-name');*/
/* 				showMark('#template2');*/
/* 				$('#showBox .title').text('编辑'+ name +'审批');*/
/* 				ykp.doAjax({*/
/* 					url:'/api/api_manage/info',*/
/* 					method:'post',*/
/* 					data:{*/
/* 						name:name*/
/* 					},*/
/* 					success:function(res) {*/
/* 						setPeople(res.data.join(','),name);*/
/* 					}*/
/* 				})*/
/* 			})*/
/* 		}*/
/* 		pageinfo();*/
/* */
/* 		function pageinfo() {*/
/* 			$('#addItem').click(function() {*/
/* 				showMark('#template1');*/
/* 				$('#showBox .title').text('添加审批项');*/
/* 				setPeople();*/
/* 			})*/
/* */
/* 		}*/
/* */
/* 		function setPeople(arr,name) {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_employees/f7',*/
/* 				method: 'post',*/
/* 				data: {},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					select2();*/
/* 					for(var i in data) {*/
/* 						if(data[i]['bmm_employees.name']) {*/
/* 						$('#templateCon .state').append(new Option(data[i]['bmm_employees.name'], data[i]['bmm_employees.id']));*/
/* 					}*/
/* 				}*/
/* 					if(arr) {*/
/* 						$("#templateCon #state1").val(arr.split(",")).trigger('change');*/
/* 					}*/
/* 				}*/
/* 			});*/
/* */
/* 			$('#templateBox .btn').click(function() {*/
/* 				if(!arr){*/
/* 					name = $('#templateCon #spDemo').val();*/
/* 				}*/
/* 				var peopel = $('#templateCon .state').select2('data');*/
/* 				var url = "/api/api_manage/add";*/
/* 				var msg = '添加成功';*/
/* 				var user = [];*/
/* 				for(var j in peopel) {*/
/* 					user.push(peopel[j].id);*/
/* 				}*/
/* 				if(user.length == 0) {*/
/* 					ykp.prompt('请选择负责人！');*/
/* 					return;*/
/* 				}*/
/* 				if(arr) {*/
/* 					url = "/api/api_manage/edit";*/
/* 				}*/
/* */
/* 				var _user = user.join(',');*/
/* 				ykp.doAjax({*/
/* 					url: url,*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						name:name,*/
/* 						user: _user*/
/* 					},*/
/* 					success: function(res) {*/
/* 						if(arr) {*/
/* 							msg = '编辑成功';*/
/* 						}else{*/
/* 						}*/
/* 						ykp.prompt(msg);*/
/* */
/* 						var spList = JSON.parse(ykp.getCookie('spList'));*/
/* 						// console.log(spList[name]['status']);*/
/* 						spList[name] = {user:_user,status:spList[name] ? spList[name]['status'] : 1};*/
/* 						// console.log(spList[name]);*/
/* 						console.log(spList)*/
/* 						ykp.setCookie('spList',JSON.stringify(spList));*/
/* */
/* 						cs.close();*/
/* 						getPageList();*/
/* 					}*/
/* 				})*/
/* 			})*/
/* 		}*/
/* */
/* 		function select2() {*/
/* 			//参与人员*/
/* 			$('#templateCon .select2').select2({*/
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
/* 		function checkAll(status) {*/
/* 			$("tbody input[name='check']").each(function(i, n) {*/
/* 				n.checked = status;*/
/* 			});*/
/* 		}*/
/* */
/* 		function submit() {*/
/* 			var val = $('#templateCon #cnumber').val()*/
/* 			//console.log(val)*/
/* 		}*/
/* */
/* 		function add() {*/
/* 			var val = $('#templateCon #cnumber1').val()*/
/* 			//console.log(val)*/
/* 		}*/
/* */
/* 	});*/
/* </script>*/
