<?php

/* admin/contractManagement/writeoff.html */
class __TwigTemplate_9da8ef2071a4d116a2d44aa0dbeccdd4e7c436e8db14f4195e2ac32e3412cd71 extends Twig_Template
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
\t.item_form label {
\t\twidth: 112px;
\t}
\t.thColor th span{
\t\tdisplay: inline-block;
\t}\t
\t#dynamic-table{
\t\twidth: 100% !important;
\t}
</style>
<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<div class=\"actions\" id=\"topTool\">
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<input type=\"text\" pts=\"0\" sear=\"khm_customer.introduce\" placeholder=\"介绍人\">
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<input type=\"text\" pts=\"0\" sear=\"khm_customer.name\" placeholder=\"企业名称\">
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<input type=\"text\" pts=\"0\" sear=\"htm_contract.contract_code\" placeholder=\"订单编号\">
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" pts=3 sear=\"htm_contract.create_by\"  aria-hidden=\"true\">
\t\t\t\t\t<option value=\"\">创建人  </option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button id=\"search\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button id=\"heightsearch\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
                    <i class=\"fa fa-filter\"></i>
                </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button id=\"flush\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
                    <i class=\"fa fa-refresh\"></i>
                </button>
\t\t\t</div>
\t\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"position: absolute; background: #fff; z-index: 1041; padding: 10px 0px; display: none;\">
\t\t\t\t<div class=\"row\" id=\"SearchCon\">
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"platform-data custom_table\">
\t\t<table id=\"dynamic-table\">
\t\t\t<thead>
\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t<th data-num=\"1\" width=\"10%\">介绍人</th>
\t\t\t\t\t<!--<th data-num=\"2\">介绍时间</th>-->
\t\t\t\t\t<th data-num=\"3\" width=\"10%\">企业名称</th>
\t\t\t\t\t<th data-num=\"0\" width=\"10%\">服务项目</th>
\t\t\t\t\t<!--<th data-num=\"4\">合作项目</th>-->

\t\t\t\t\t<th data-num=\"5\" width=\"10%\">合作状态</th>
\t\t\t\t\t<th data-num=\"6\" width=\"10%\">订单编码</th>

\t\t\t\t<!--\t<th data-num=\"5\" width=\"100\">合作状态</th>-->
\t\t\t\t\t<th data-num=\"7\" width=\"10%\">客户编码</th>

\t\t\t\t\t<!--<th data-num=\"7\">合作时间</th>-->
\t\t\t<!--\t\t<th data-num=\"8\">介绍数量</th>-->
\t\t\t\t\t<th data-num=\"10\" width=\"10%\">备注</th>
\t\t\t\t\t<th data-num=\"11\" width=\"10%\">创建人</th>
\t\t\t\t\t<th data-num=\"12\" width=\"10%\">创建时间</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody id=\"datalist\">

\t\t\t</tbody>
\t\t</table>
\t</div>

\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" id=\"num\"></div>
\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t<div id=\"pageBar\" class=\"pagination\"></div>
\t\t<div align=\"right\" style=\"float: right;  width: 10%;\">
\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t</select>
\t\t</div>
\t</div>

\t";
        // line 96
        $this->loadTemplate("admin/mark.html", "admin/contractManagement/writeoff.html", 96)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/contractManagement/writeoff.html", 96)->display($context);
        // line 97
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script type=\"text/javascript\">
\t\$(function() {

\t});
</script>
<script type=\"text/javascript\">
\t\$(function() {
\t\tvar order ='htm_contract.id desc';
\t\tvar page_size = 10;//每页显示的条目数
\t\tvar where = '';//搜索过滤条件
\t\tvar service_product = {};//所有服务产品
\t\tvar employees = {};//所有员工
\t\tvar filter ='';
\t\t//获取所有服务产品
\t\tykp.doAjax({
            url:'/api/api_product/f7',
            method:'post',
            data:{
                select:'ckm_product.id,ckm_product.name',
                filter:'ckm_product.is_del <> 1'
            },
            success:function(res){
            \tvar data = res.data;
            \tfor(var i in data){
            \t\tservice_product[data[i]['id']] = data[i]['name'];
            \t}
            }
        });
        
        
        //通用排序
\t\t\tcs.general_sort({
\t\t\t\turl: '/api/api_contract/hx_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tfilter: filter,
\t\t\t\t\tpage_size: page_size,
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '.pageBar'
\t\t\t\t},
\t\t\t\tcontentId: \"#datalist\", //默认排序
\t\t\t\tinitOrder: \"\", //初始化sort
\t\t\t\tdefaultOrder: order,
\t\t\t\tparams: [{
\t\t\t\t\tid: \"#dynamic-table\",
\t\t\t\t\tfield: [\"khm_customer.introduce\",\"khm_customer.id\", \"khm_customer.status\",\"htm_contract.contract_code\",\"khm_customer.customer_num\",\"htm_contract.id\",\"htm_contract.introduce_remark\",\"htm_contract.create_by\",\"khm_customer.create_at\"]
\t\t\t\t\t}]
\t\t\t}, function(res, _sort_role) {
\t\t\t\tsort_role = _sort_role;
\t\t\t\taddList(res);
\t\t\t});

\t\t//获取所有员工
        ykp.doAjax({
            url:'/api/api_employees/f7',
            method:'post',
            data:{
                select:'bmm_employees.id,bmm_employees.name'
            },
            success:function(res){
                var data = res.data;
                \$('.advandced-search').select2({allowClear:true});
                for(var i in data){
                \tif(data[i]['name']) {
                    employees[data[i]['id']] =data[i]['name'] ;
                    \$('.advandced-search').append(new Option(data[i]['name'],data[i]['id']));
                }
                }
            }
        });               
\t\t//普通搜索
\t\tfunction generalSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_contract/hx_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata:{
\t\t\t\t\tpage_size: page_size,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}
\t\t\tcs.doSearch('#search', data, 'where', false, function(res,_where) {
\t\t\t\twhere = _where;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\taddList(res);
\t\t\t})
\t\t}
\t\t 
\t\t
\t\tgetSearch();
\t\t
\t\tfunction getSearch() {
\t\t\t\$('[pts=0]').val('');
\t\t\t\$('[sear=\"htm_contract.create_by\"]').val('').trigger('change');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\twhere = filter = '';
\t\t\tvar list = [
\t\t\t\t{name:\"介绍人\",search:\"khm_customer.introduce\",type:\"text\",url:\"/api/api_employees/f7\",key:\"people\"},\t\t\t
\t\t\t\t{name:\"企业名称\",search:\"khm_customer.name\",type:\"text\"},
\t\t\t\t{name:\"合作状态\",search:\"khm_customer.status\",type:\"select\",option:[{val:\"1\",text:\"合作中\"},{val:\"2\",text:\"已失效\"}]},\t\t\t//{val:\"0\",text:\"未合作\"},
\t\t\t\t{name:\"订单编号\",search:\"htm_contract.contract_code\",type:\"text\"},
\t\t\t\t//{name:\"合作时间\",search:\"htm_contract.start\",type:\"time\"},
//\t\t\t\t{name:\"介绍数量\",search:\"total\",type:\"text\",url:\"/api/api_employees/f7\",key:\"people\"},
\t\t\t\t{name:\"备注\",search:\"htm_contract.introduce_remark\",type:\"text\"}, 
\t\t\t\t{name:\"创建人\",search:\" htm_contract.create_by\",type:\"select\",url:\"/api/api_employees/f7\"},
\t\t\t\t{name:\"创建时间\",search:\"khm_customer.create_at\",type:\"time\"}
\t\t\t];
\t\t\t
\t\t\tcs.getSearch({
\t\t\t\tlist:list,
\t\t\t\tel:\"#heightsearch\",
\t\t\t\tel1:\"#heightsearch1\"
\t\t\t},dohSearch);
\t\t\tfunction dohSearch() {
\t\t\t\tvar data = {
\t\t\t\t\turl: '/api/api_contract/hx_list',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tpage_size:page_size,
\t\t\t\t\t\torder:'htm_contract.id desc',
\t\t\t\t\t\tfilter:'where'
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tcs.hSearch('.search1', data, 'where', false, function(res, _filter) {
\t\t\t\t\tfilter = _filter;
\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\t\$(\"#heightsearch\").removeClass('active').css('z-index', '');
\t\t\t\t\tconsole.log(res.data.items )
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function(){
\t                        ykp.prompt('暂无数据！');
\t                    },1000);
\t\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddList(res);
\t\t\t\t})
\t\t\t}\t\t\t\t\t
\t\t}

\t\t//切换每页显示的条目数
\t\tchangePageNum();
\t\tfunction changePageNum(){
\t\t\t\$(\"#changePageNum\").change(function(){
\t\t\t\tpage_size = \$(this).val();
\t\t\t\tykp.setCookie('page_size', page_size);
\t\t\t\tgetList();
\t\t\t})
\t\t}
\t\t
\t\t\$('#flush').click(function(){
\t\t\t\$('[pts=0]').val('');
\t\t\t\$('[sear=\"htm_contract.create_by\"]').val('').trigger('change');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tfilter = '';
\t\t\tgetList();
\t\t})

\t\t
\t\t//获取核销合同列表
\t\tgetList();
\t\tfunction getList() {
\t\t\tgeneralSearch();
\t\t\tykp.list({
\t\t\t\turl: '/api/api_contract/hx_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tpage_size: page_size,
\t\t\t\t\torder: order
\t\t\t\t\t// where: where
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//将核销合同列表数据添加到table中
\t\tfunction addList(res) {
\t\t\tvar data = res.data.items;
\t\t\tvar content = [];

\t\t\tvar task = [];//所有任务
\t\t\tvar task_detail = {};//任务详情
\t\t\tvar status = ['未合作','合作中','已失效'];//合同状态

\t\t\t//td 自定义
\t\t\tvar styles = [];
\t\t\t\$('#dynamic-table .thColor th').each(function(i,e){
\t\t\t\tstyles.push(\$(this).css('display'));
\t\t\t});

\t\t\tfor(var i in data) {
\t\t\t\tconsole.log(data[i])
\t\t\t\ttask = data[i]['task'];
\t\t\t\tfor(var k in task){
\t\t\t\t\tif(i == 0){
\t\t\t\t\t\ttask_detail['start'] = task[k]['start_time'];
\t\t\t\t\t\ttask_detail['end'] = task[k]['end_time'];
\t\t\t\t\t}

\t\t\t\t\tif(i != 0){
\t\t\t\t\t\ttask_detail['start'] = task_detail['start'] > task[k]['start_time'] ? task_detail['start'] : task[k]['start_time'];
\t\t\t\t\t\ttask_detail['end'] = task_detail['end'] > task[k]['end_time'] ? task_detail['end'] : task[k]['end_time'];
\t\t\t\t\t}

\t\t\t\t\ttask_detail['name'] = task_detail['name'] ? task_detail['name'] + task[k]['productName'] + ',' :  task[k]['productName'] + ',';
\t\t\t\t}
\t\t\t\tvar datahtml = \"<p align='left'>aaaa123aaaaaa<br/>13213</p>\";
\t\t\t\tcontent.push('<tr>' +
\t\t\t\t\t'<td style=\"display:' + styles[0]  + '\" data-num=\"1\">' + data[i]['khm_customer.introduce'] + '</td>' +
//\t\t\t\t\t'<td style=\"display:' + styles[1]  + '\" data-num=\"2\">' + cs.getNowTime(data[i]['htm_contract.create_time'],true) + '</td>' +
\t\t\t\t\t'<td data-cid=\"'+data[i]['khm_customer.id']+'\" style=\"display:' + styles[2]  + '\" data-num=\"3\" >' + '<a href=\"#\" class=\"customerDetail pos-rel\">'+data[i]['khm_customer.name']+'</a>',
\t\t\t\t\t'<label class=\"pos-rel\"> <i class=\"iconBnt fa fa-info-circle\" style=\"color:'+(data[i]['Remark'].length > 0 ? 'red' : \"\")+'\"  data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"'+datahtml+'\" ></i></label></td>', +
\t\t\t     \t '<td style=\"display:' + styles[3]  + '\" data-num=\"4\">' + task_detail['name'] + '</td>' +
\t\t\t     \t '<td style=\"display:' + styles[0]  + '\" data-num=\"0\">' + data[i]['productName'] + '</td>' +
\t\t\t\t\t'<td style=\"display:' + styles[4]  + '\" data-num=\"5\">' + status[data[i]['khm_customer.status']] + '</td>' +
\t\t\t\t\t'<td style=\"display:' + styles[5]  + '\" data-num=\"6\">' + data[i]['htm_contract.contract_code'] + '</td>' +
\t\t\t\t\t'<td style=\"display:' + styles[5]  + '\" data-num=\"7\">' + data[i]['khm_customer.customer_num'] + '</td>' +
//\t\t\t\t\t'<td style=\"display:' + styles[6]  + '\" data-num=\"7\">' + (task_detail['start'] != '0' ? cs.getNowTime(task_detail['start']) + '~' + cs.getNowTime(task_detail['end']) : '' ) + '</td>' +
//\t\t\t\t\t'<td style=\"display:' + styles[7]  + '\" data-num=\"8\">' + data[i]['total'] + '</td>' +
\t\t\t\t\t'<td class=\"intro-remark ellipsis\" data-id=\"' + data[i]['htm_contract.id'] + '\" data-num=\"10\">' + data[i]['htm_contract.introduce_remark'] + '</td>' +
\t\t\t\t\t'<td style=\"display:' + styles[10]  + '\" data-num=\"11\">' + employees[data[i]['htm_contract.create_by']] + '</td>' +
\t\t\t\t\t'<td style=\"display:' + styles[11]  + '\" data-num=\"12\">' + (data[i]['khm_customer.create_at'] != '0' ? cs.getNowTime(data[i]['htm_contract.create_time'],true) : '') + '</td>' +
\t\t\t\t\t'</tr>')
\t\t\t\t
\t\t\t}

\t\t\t\$('#datalist').html(content.join(''));
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\tcustom.get_custom_info();
\t\t\tcustom.showReamrk();
\t\t\tchangeIntroduceRemark();
\t\t}

        //修改金额
        function changeIntroduceRemark(){
            \$('#datalist .intro-remark').dblclick(function(){
\t\t\t\tvar me = \$(this);
\t\t\t\tvar val = me.text();
            \tvar textarea = \$('<textarea style=\"width:150px;\" class=\"pos-rel\">' + val + '</textarea>');
            \tme.html(textarea);
\t            textarea.focus();
\t            textarea.bind('blur', function(){
\t\t\t\t\tintroduce_remark = \$(this);
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl:'/api/api_contract/set_introduce_remark',
\t\t\t\t\t\tmethod:'post',
\t\t\t\t\t\tdata:{id: me.data('id'), introduce_remark: textarea.val()},
\t\t\t\t\t\tsuccess:function(res){
\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
            });
        }

\t
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/contractManagement/writeoff.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 97,  116 => 96,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	.item_form label {*/
/* 		width: 112px;*/
/* 	}*/
/* 	.thColor th span{*/
/* 		display: inline-block;*/
/* 	}	*/
/* 	#dynamic-table{*/
/* 		width: 100% !important;*/
/* 	}*/
/* </style>*/
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<div class="actions" id="topTool">*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<input type="text" pts="0" sear="khm_customer.introduce" placeholder="介绍人">*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<input type="text" pts="0" sear="khm_customer.name" placeholder="企业名称">*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<input type="text" pts="0" sear="htm_contract.contract_code" placeholder="订单编号">*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<select style="margin: 12px !important;width: 180px" class="advandced-search select2-hidden-accessible" tabindex="-1" pts=3 sear="htm_contract.create_by"  aria-hidden="true">*/
/* 					<option value="">创建人  </option>*/
/* 				</select>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<button id="search" class="btn btn-info btn-sm">*/
/* 					<i class="fa fa-search"></i>*/
/* 				</button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<button id="heightsearch" type="button" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/*                     <i class="fa fa-filter"></i>*/
/*                 </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<button id="flush" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/*                     <i class="fa fa-refresh"></i>*/
/*                 </button>*/
/* 			</div>*/
/* 			<div id="heightsearch1" class="col-sx-12" style="position: absolute; background: #fff; z-index: 1041; padding: 10px 0px; display: none;">*/
/* 				<div class="row" id="SearchCon">*/
/* 					*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="platform-data custom_table">*/
/* 		<table id="dynamic-table">*/
/* 			<thead>*/
/* 				<tr class="thColor">*/
/* 					<th data-num="1" width="10%">介绍人</th>*/
/* 					<!--<th data-num="2">介绍时间</th>-->*/
/* 					<th data-num="3" width="10%">企业名称</th>*/
/* 					<th data-num="0" width="10%">服务项目</th>*/
/* 					<!--<th data-num="4">合作项目</th>-->*/
/* */
/* 					<th data-num="5" width="10%">合作状态</th>*/
/* 					<th data-num="6" width="10%">订单编码</th>*/
/* */
/* 				<!--	<th data-num="5" width="100">合作状态</th>-->*/
/* 					<th data-num="7" width="10%">客户编码</th>*/
/* */
/* 					<!--<th data-num="7">合作时间</th>-->*/
/* 			<!--		<th data-num="8">介绍数量</th>-->*/
/* 					<th data-num="10" width="10%">备注</th>*/
/* 					<th data-num="11" width="10%">创建人</th>*/
/* 					<th data-num="12" width="10%">创建时间</th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<tbody id="datalist">*/
/* */
/* 			</tbody>*/
/* 		</table>*/
/* 	</div>*/
/* */
/* 	<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 		<div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
/* 		<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 		<div id="pageBar" class="pagination"></div>*/
/* 		<div align="right" style="float: right;  width: 10%;">*/
/* 			<select style="width: 100px;" id="changePageNum">*/
/* 				<option value="10">每页10条</option>*/
/* 				<option value="20">每页20条</option>*/
/* 				<option value="50">每页50条</option>*/
/* 				<option value="100">每页100条</option>*/
/* 				<option value="200">每页200条</option>*/
/* 			</select>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	{% include 'admin/mark.html' %} {% include 'admin/customerDetail.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* <script type="text/javascript">*/
/* 	$(function() {*/
/* */
/* 	});*/
/* </script>*/
/* <script type="text/javascript">*/
/* 	$(function() {*/
/* 		var order ='htm_contract.id desc';*/
/* 		var page_size = 10;//每页显示的条目数*/
/* 		var where = '';//搜索过滤条件*/
/* 		var service_product = {};//所有服务产品*/
/* 		var employees = {};//所有员工*/
/* 		var filter ='';*/
/* 		//获取所有服务产品*/
/* 		ykp.doAjax({*/
/*             url:'/api/api_product/f7',*/
/*             method:'post',*/
/*             data:{*/
/*                 select:'ckm_product.id,ckm_product.name',*/
/*                 filter:'ckm_product.is_del <> 1'*/
/*             },*/
/*             success:function(res){*/
/*             	var data = res.data;*/
/*             	for(var i in data){*/
/*             		service_product[data[i]['id']] = data[i]['name'];*/
/*             	}*/
/*             }*/
/*         });*/
/*         */
/*         */
/*         //通用排序*/
/* 			cs.general_sort({*/
/* 				url: '/api/api_contract/hx_list',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					filter: filter,*/
/* 					page_size: page_size,*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '.pageBar'*/
/* 				},*/
/* 				contentId: "#datalist", //默认排序*/
/* 				initOrder: "", //初始化sort*/
/* 				defaultOrder: order,*/
/* 				params: [{*/
/* 					id: "#dynamic-table",*/
/* 					field: ["khm_customer.introduce","khm_customer.id", "khm_customer.status","htm_contract.contract_code","khm_customer.customer_num","htm_contract.id","htm_contract.introduce_remark","htm_contract.create_by","khm_customer.create_at"]*/
/* 					}]*/
/* 			}, function(res, _sort_role) {*/
/* 				sort_role = _sort_role;*/
/* 				addList(res);*/
/* 			});*/
/* */
/* 		//获取所有员工*/
/*         ykp.doAjax({*/
/*             url:'/api/api_employees/f7',*/
/*             method:'post',*/
/*             data:{*/
/*                 select:'bmm_employees.id,bmm_employees.name'*/
/*             },*/
/*             success:function(res){*/
/*                 var data = res.data;*/
/*                 $('.advandced-search').select2({allowClear:true});*/
/*                 for(var i in data){*/
/*                 	if(data[i]['name']) {*/
/*                     employees[data[i]['id']] =data[i]['name'] ;*/
/*                     $('.advandced-search').append(new Option(data[i]['name'],data[i]['id']));*/
/*                 }*/
/*                 }*/
/*             }*/
/*         });               */
/* 		//普通搜索*/
/* 		function generalSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_contract/hx_list',*/
/* 				method: 'post',*/
/* 				data:{*/
/* 					page_size: page_size,*/
/* 					order: order*/
/* 				}*/
/* 			}*/
/* 			cs.doSearch('#search', data, 'where', false, function(res,_where) {*/
/* 				where = _where;*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 					$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					return false;*/
/* 				}*/
/* */
/* 				addList(res);*/
/* 			})*/
/* 		}*/
/* 		 */
/* 		*/
/* 		getSearch();*/
/* 		*/
/* 		function getSearch() {*/
/* 			$('[pts=0]').val('');*/
/* 			$('[sear="htm_contract.create_by"]').val('').trigger('change');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			where = filter = '';*/
/* 			var list = [*/
/* 				{name:"介绍人",search:"khm_customer.introduce",type:"text",url:"/api/api_employees/f7",key:"people"},			*/
/* 				{name:"企业名称",search:"khm_customer.name",type:"text"},*/
/* 				{name:"合作状态",search:"khm_customer.status",type:"select",option:[{val:"1",text:"合作中"},{val:"2",text:"已失效"}]},			//{val:"0",text:"未合作"},*/
/* 				{name:"订单编号",search:"htm_contract.contract_code",type:"text"},*/
/* 				//{name:"合作时间",search:"htm_contract.start",type:"time"},*/
/* //				{name:"介绍数量",search:"total",type:"text",url:"/api/api_employees/f7",key:"people"},*/
/* 				{name:"备注",search:"htm_contract.introduce_remark",type:"text"}, */
/* 				{name:"创建人",search:" htm_contract.create_by",type:"select",url:"/api/api_employees/f7"},*/
/* 				{name:"创建时间",search:"khm_customer.create_at",type:"time"}*/
/* 			];*/
/* 			*/
/* 			cs.getSearch({*/
/* 				list:list,*/
/* 				el:"#heightsearch",*/
/* 				el1:"#heightsearch1"*/
/* 			},dohSearch);*/
/* 			function dohSearch() {*/
/* 				var data = {*/
/* 					url: '/api/api_contract/hx_list',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						page_size:page_size,*/
/* 						order:'htm_contract.id desc',*/
/* 						filter:'where'*/
/* 					}*/
/* 				}*/
/* 				cs.hSearch('.search1', data, 'where', false, function(res, _filter) {*/
/* 					filter = _filter;*/
/* 					$('.in').removeClass('modal-backdrop');*/
/* 					$("#heightsearch1").slideUp();*/
/* 					$("#heightsearch").removeClass('active').css('z-index', '');*/
/* 					console.log(res.data.items )*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function(){*/
/* 	                        ykp.prompt('暂无数据！');*/
/* 	                    },1000);*/
/* 						$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					}*/
/* 					addList(res);*/
/* 				})*/
/* 			}					*/
/* 		}*/
/* */
/* 		//切换每页显示的条目数*/
/* 		changePageNum();*/
/* 		function changePageNum(){*/
/* 			$("#changePageNum").change(function(){*/
/* 				page_size = $(this).val();*/
/* 				ykp.setCookie('page_size', page_size);*/
/* 				getList();*/
/* 			})*/
/* 		}*/
/* 		*/
/* 		$('#flush').click(function(){*/
/* 			$('[pts=0]').val('');*/
/* 			$('[sear="htm_contract.create_by"]').val('').trigger('change');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			filter = '';*/
/* 			getList();*/
/* 		})*/
/* */
/* 		*/
/* 		//获取核销合同列表*/
/* 		getList();*/
/* 		function getList() {*/
/* 			generalSearch();*/
/* 			ykp.list({*/
/* 				url: '/api/api_contract/hx_list',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					page_size: page_size,*/
/* 					order: order*/
/* 					// where: where*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 						$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					}*/
/* 					addList(res);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//将核销合同列表数据添加到table中*/
/* 		function addList(res) {*/
/* 			var data = res.data.items;*/
/* 			var content = [];*/
/* */
/* 			var task = [];//所有任务*/
/* 			var task_detail = {};//任务详情*/
/* 			var status = ['未合作','合作中','已失效'];//合同状态*/
/* */
/* 			//td 自定义*/
/* 			var styles = [];*/
/* 			$('#dynamic-table .thColor th').each(function(i,e){*/
/* 				styles.push($(this).css('display'));*/
/* 			});*/
/* */
/* 			for(var i in data) {*/
/* 				console.log(data[i])*/
/* 				task = data[i]['task'];*/
/* 				for(var k in task){*/
/* 					if(i == 0){*/
/* 						task_detail['start'] = task[k]['start_time'];*/
/* 						task_detail['end'] = task[k]['end_time'];*/
/* 					}*/
/* */
/* 					if(i != 0){*/
/* 						task_detail['start'] = task_detail['start'] > task[k]['start_time'] ? task_detail['start'] : task[k]['start_time'];*/
/* 						task_detail['end'] = task_detail['end'] > task[k]['end_time'] ? task_detail['end'] : task[k]['end_time'];*/
/* 					}*/
/* */
/* 					task_detail['name'] = task_detail['name'] ? task_detail['name'] + task[k]['productName'] + ',' :  task[k]['productName'] + ',';*/
/* 				}*/
/* 				var datahtml = "<p align='left'>aaaa123aaaaaa<br/>13213</p>";*/
/* 				content.push('<tr>' +*/
/* 					'<td style="display:' + styles[0]  + '" data-num="1">' + data[i]['khm_customer.introduce'] + '</td>' +*/
/* //					'<td style="display:' + styles[1]  + '" data-num="2">' + cs.getNowTime(data[i]['htm_contract.create_time'],true) + '</td>' +*/
/* 					'<td data-cid="'+data[i]['khm_customer.id']+'" style="display:' + styles[2]  + '" data-num="3" >' + '<a href="#" class="customerDetail pos-rel">'+data[i]['khm_customer.name']+'</a>',*/
/* 					'<label class="pos-rel"> <i class="iconBnt fa fa-info-circle" style="color:'+(data[i]['Remark'].length > 0 ? 'red' : "")+'"  data-rel="tooltip" data-placement="right" data-html="true" title="'+datahtml+'" ></i></label></td>', +*/
/* 			     	 '<td style="display:' + styles[3]  + '" data-num="4">' + task_detail['name'] + '</td>' +*/
/* 			     	 '<td style="display:' + styles[0]  + '" data-num="0">' + data[i]['productName'] + '</td>' +*/
/* 					'<td style="display:' + styles[4]  + '" data-num="5">' + status[data[i]['khm_customer.status']] + '</td>' +*/
/* 					'<td style="display:' + styles[5]  + '" data-num="6">' + data[i]['htm_contract.contract_code'] + '</td>' +*/
/* 					'<td style="display:' + styles[5]  + '" data-num="7">' + data[i]['khm_customer.customer_num'] + '</td>' +*/
/* //					'<td style="display:' + styles[6]  + '" data-num="7">' + (task_detail['start'] != '0' ? cs.getNowTime(task_detail['start']) + '~' + cs.getNowTime(task_detail['end']) : '' ) + '</td>' +*/
/* //					'<td style="display:' + styles[7]  + '" data-num="8">' + data[i]['total'] + '</td>' +*/
/* 					'<td class="intro-remark ellipsis" data-id="' + data[i]['htm_contract.id'] + '" data-num="10">' + data[i]['htm_contract.introduce_remark'] + '</td>' +*/
/* 					'<td style="display:' + styles[10]  + '" data-num="11">' + employees[data[i]['htm_contract.create_by']] + '</td>' +*/
/* 					'<td style="display:' + styles[11]  + '" data-num="12">' + (data[i]['khm_customer.create_at'] != '0' ? cs.getNowTime(data[i]['htm_contract.create_time'],true) : '') + '</td>' +*/
/* 					'</tr>')*/
/* 				*/
/* 			}*/
/* */
/* 			$('#datalist').html(content.join(''));*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/* 			custom.get_custom_info();*/
/* 			custom.showReamrk();*/
/* 			changeIntroduceRemark();*/
/* 		}*/
/* */
/*         //修改金额*/
/*         function changeIntroduceRemark(){*/
/*             $('#datalist .intro-remark').dblclick(function(){*/
/* 				var me = $(this);*/
/* 				var val = me.text();*/
/*             	var textarea = $('<textarea style="width:150px;" class="pos-rel">' + val + '</textarea>');*/
/*             	me.html(textarea);*/
/* 	            textarea.focus();*/
/* 	            textarea.bind('blur', function(){*/
/* 					introduce_remark = $(this);*/
/* 					ykp.doAjax({*/
/* 						url:'/api/api_contract/set_introduce_remark',*/
/* 						method:'post',*/
/* 						data:{id: me.data('id'), introduce_remark: textarea.val()},*/
/* 						success:function(res){*/
/* 							getList();*/
/* 						}*/
/* 					});*/
/* 				});*/
/*             });*/
/*         }*/
/* */
/* 	*/
/* 	});*/
/* </script>*/
