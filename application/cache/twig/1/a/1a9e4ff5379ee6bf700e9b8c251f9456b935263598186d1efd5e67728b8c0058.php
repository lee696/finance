<?php

/* admin/manage/backups.html */
class __TwigTemplate_4fe9b82a80bae83df637a2865511ac866319752feeb8a8a49c08266a973241af extends Twig_Template
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
        echo "<div class=\" widget-main\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<!-- <h3 class=\"header smaller lighter blue\">备份管理</h3> -->
\t\t\t<div class=\"row\" style=\"margin-top: 20px;\">
\t\t\t\t <button id=\"flush\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
                    <i class=\"fa fa-refresh\"></i>
                </button>
                <span  style=\"float: right;\" >  <!--contentAuthority=\"244\"-->
                \t<button id=\"heightsearch\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"margin-left:10px; background-color: #00c0ef !important;\">
\t                    备份
\t                </button>
                </span>
\t\t\t\t

\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<!--<div style=\"font-size:14px;margin-top: 20px\">自动备份(每七天自动进行备份)</div>-->
\t\t\t\t<div class=\"custom_table\">
\t\t\t\t\t<table id=\"dynamic-table\" style=\"margin-bottom:0px;\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t<th class=\"hidden-480 center\">操作</th>
\t\t\t\t\t\t\t\t<th class=\"hidden-480 center\">文件名称</th>
\t\t\t\t\t\t\t\t<th class=\"hidden-480 center\">文件大小</th>
\t\t\t\t\t\t\t\t<th class=\"hidden-480 center\">创建人</th>
\t\t\t\t\t\t\t\t<th class=\"center thColor\">备份时间</th>
\t\t\t\t\t\t\t\t<th class=\"center thColor\">备注</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody id=\"dataList\">

\t\t\t\t\t\t</tbody>

\t\t\t\t\t</table>
\t\t\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" id=\"num\"></div>
\t\t\t\t\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t\t\t\t\t<div id=\"pageBar\" class=\"pagination\"></div>
\t\t\t\t\t\t<div align=\"right\" style=\"float: right;  width: 10%;\">
\t\t\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"padding-left:10px;color:#777;\">提示说明：<br> 1. 系统每天凌晨3点会自动备份数据库！如无必要，请勿频繁手动操作备份数据库！<br>
\t\t\t\t\t2. 数据库数据的备份还原操作，请由专业人员操作。
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"label_popup\" id=\"feedBack\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t\t\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t\t            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t\t\t\t<span style=\"display: inline-block;\">编辑备注</span>
\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t\t\t\t<input type=\"text\" width=\"200px\" style=\"margin: auto;\" id=\"labelName\" />
\t\t\t\t\t\t\t<!--<hr>-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t\t\t\t<button class=\"close_label\">关闭</button>
\t\t\t\t\t\t\t<button class=\"hold\">保存</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 79
        $this->loadTemplate("admin/mark.html", "admin/manage/backups.html", 79)->display($context);
        // line 80
        echo "</div>
<div class=\" widget-main\">
\t<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
\t<script>
\t\tjQuery(function(\$) {
\t\t\tcs.getNodes([244]);
\t\t\tif(ykp.getCookie('nodes').split(',').indexOf(\"80\") == -1) {
\t\t\t\tlocation.href = '/admin/error';
\t\t\t}
\t\t\tvar page_size = 10; //每页显示的条目数

\t\t\tgetbackup();
\t\t\tfunction getbackup() {
\t\t\t\t
\t\t\t\tvar content = '';
//\t\t\t\tykp.list({
//\t\t\t\t\turl: '/api/api_system/get_backup_db_list',
//\t\t\t\t\tmethod: 'get',
//\t\t\t\t\tdata: {
//\t\t\t\t\t\t\"limit\": page_size,
//\t\t\t\t\t\t\"order\":'sm_db_backup.id desc',
//\t\t\t\t\t},
//\t\t\t\t\tpageBar: {
//\t\t\t\t\t\tid: '#pageBar'
//\t\t\t\t\t},
//\t\t\t\t\tloadList: function(res) {
//\t\t\t\t\t\tif(res.data.items == \"\") {
//\t\t\t\t\t\t\tsetTimeout(function(){
//\t                        ykp.prompt('暂无数据！');
//\t                    },1000);
//\t\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"color:#7d7d7d !important;text-align:center !important;\" class=\"page\">暂无数据</div></td></tr>');
//\t\t\t\t\t\t\treturn false;
//\t\t\t\t\t\t}
//\t\t\t\t\t\taddList(res);
//\t\t\t\t\t}
//\t\t\t\t})
\t\t\t\t
\t\t\t\tykp.doAjax({
\t\t\t\t\turl:\"/api/api_system/get_backup_db_list2\",
\t\t\t\t\tmethod:\"get\",
\t\t\t\t\tdata:{
\t\t\t\t\t\t\"order\":'sm_db_backup.id desc',
\t\t\t\t\t},
\t\t\t\t\tsuccess:function(res) {
\t\t\t\t\t\tif(res.data == \"\") {
\t\t\t\t\t\t\tsetTimeout(function(){
\t                        ykp.prompt('暂无数据！');
\t                    },1000);
\t\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"color:#7d7d7d !important;text-align:center !important;\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t})
\t\t\t}

\t\t\$('#flush').click(function(){
\t\t\tgetbackup();
\t\t})

\t\t\tfunction addList(res) {
\t\t\t\tvar content = '';
\t\t\t\t//console.log(res.data);
\t\t\t\tvar data = res.data;
\t\t\t\t
\t\t\t\tfor(var i in data) {
\t\t\t\t\tcontent += `<tr data-id=\"\${data[i]['sm_db_backup.id']}\">
\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t<label class=\"pos-rel\">
                                    <a href=\"#\" class=\"edit\"> <span class=\"lbl btnBlue\">编辑</span></a>
                                </label>
                            </td>
\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\${data[i]['sm_db_backup.filename']}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\${data[i]['sm_db_backup.filesize']}MB
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\${data[i]['bmm_employees.name']}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\${data[i]['sm_db_backup.create_at']}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\${data[i]['sm_db_backup.remark']}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>`
\t\t\t\t}
\t\t\t\t\$('#dataList').html(content);

\t\t\t\tcs.getNodes([233]);

\t\t\t\t\$('.edit').unbind('click').click(function() {
\t\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\t\tvar bz = \$(this).parents('td').siblings().eq(4).text().trim();
\t\t\t\t\t\$('#feedBack').show();
\t\t\t\t\t\$('#feedBack').find('input').val(bz);
\t\t\t\t\t\$('#feedBack .hold').unbind('click').click(function() {
\t\t\t\t\t\tvar bzCon = \$('#feedBack').find('input').val();
\t\t\t\t\t\tif(bzCon == '') {
\t\t\t\t\t\t\tykp.prompt('不能为空！');
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_system/backup_db_edit',
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tid:id,
\t\t\t\t\t\t\t\tremark: bzCon
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('编辑成功！');
\t\t\t\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t\t\t\t\tgetbackup();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})

\t\t\t\t\t})
\t\t\t\t\tcs.closePop();
\t\t\t\t})
\t\t\t}
\t\t\t
\t\t\t\$('#heightsearch').click(function() {
\t\t\t\tykp.alert('确定要备份数据库？备份过程中会占用大量系统资源，请在空闲时间操作！',[{
\t\t\t\t\tbutton:'取消',\t\t\t\t\t
\t\t\t\t},{
\t\t\t\t\tbutton:'确定',
\t\t\t\t\tcallback:function(){
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl:\"/api/api_system/backup_db\",
\t\t\t\t\t\t\tmethod:'get',
\t\t\t\t\t\t\tmsg:'备份需要一定的时间，请等候！',
\t\t\t\t\t\t\tshowBlock:true,
\t\t\t\t\t\t\tsuccess:function(res) {
\t\t\t\t\t\t\t\tykp.prompt('备份成功！',{startTime:1200,endTime:100});
\t\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\t\tgetbackup();
\t\t\t\t\t\t\t\t},2000)
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}]);\t\t\t\t
\t\t\t});


\t\t\tpageinfo();
\t\t\t\$('#changePageNum').change(function() {
\t\t\t\tpage_size = \$(this).val();
\t\t\t\tgetbackup();
\t\t\t})

\t\t\tfunction pageinfo() {
\t\t\t\t\$('#add').click(function() {
\t\t\t\t\tshowMark('#template1');
\t\t\t\t\t\$('#templateCon #cnumber').val('12313133');

\t\t\t\t})
\t\t\t}
\t\t});
\t</script>";
    }

    public function getTemplateName()
    {
        return "admin/manage/backups.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 80,  99 => 79,  19 => 1,);
    }
}
/* <div class=" widget-main">*/
/* 	<div class="row">*/
/* 		<div class="col-lg-12">*/
/* 			<!-- <h3 class="header smaller lighter blue">备份管理</h3> -->*/
/* 			<div class="row" style="margin-top: 20px;">*/
/* 				 <button id="flush" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/*                     <i class="fa fa-refresh"></i>*/
/*                 </button>*/
/*                 <span  style="float: right;" >  <!--contentAuthority="244"-->*/
/*                 	<button id="heightsearch" type="button" class="btn btn-info btn-sm" style="margin-left:10px; background-color: #00c0ef !important;">*/
/* 	                    备份*/
/* 	                </button>*/
/*                 </span>*/
/* 				*/
/* */
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<!--<div style="font-size:14px;margin-top: 20px">自动备份(每七天自动进行备份)</div>-->*/
/* 				<div class="custom_table">*/
/* 					<table id="dynamic-table" style="margin-bottom:0px;">*/
/* 						<thead>*/
/* 							<tr class="thColor">*/
/* 								<th class="hidden-480 center">操作</th>*/
/* 								<th class="hidden-480 center">文件名称</th>*/
/* 								<th class="hidden-480 center">文件大小</th>*/
/* 								<th class="hidden-480 center">创建人</th>*/
/* 								<th class="center thColor">备份时间</th>*/
/* 								<th class="center thColor">备注</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody id="dataList">*/
/* */
/* 						</tbody>*/
/* */
/* 					</table>*/
/* 					<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 						<div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
/* 						<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 						<div id="pageBar" class="pagination"></div>*/
/* 						<div align="right" style="float: right;  width: 10%;">*/
/* 							<select style="width: 100px;" id="changePageNum">*/
/* 								<option value="10">每页10条</option>*/
/* 								<option value="20">每页20条</option>*/
/* 								<option value="50">每页50条</option>*/
/* 								<option value="100">每页100条</option>*/
/* 								<option value="200">每页200条</option>*/
/* 							</select>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div style="padding-left:10px;color:#777;">提示说明：<br> 1. 系统每天凌晨3点会自动备份数据库！如无必要，请勿频繁手动操作备份数据库！<br>*/
/* 					2. 数据库数据的备份还原操作，请由专业人员操作。*/
/* 					</div>*/
/* 				</div>*/
/* */
/* */
/* 				<div class="label_popup" id="feedBack" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 					<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 		            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 						<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 							<span style="display: inline-block;">编辑备注</span>*/
/* 							<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 						</div>*/
/* 						<div style="padding: 10px 50px;">*/
/* 							<input type="text" width="200px" style="margin: auto;" id="labelName" />*/
/* 							<!--<hr>-->*/
/* 						</div>*/
/* 						<div style="padding:15px;text-align:right;">*/
/* 							<button class="close_label">关闭</button>*/
/* 							<button class="hold">保存</button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	{% include 'admin/mark.html' %}*/
/* </div>*/
/* <div class=" widget-main">*/
/* 	<script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* 	<script>*/
/* 		jQuery(function($) {*/
/* 			cs.getNodes([244]);*/
/* 			if(ykp.getCookie('nodes').split(',').indexOf("80") == -1) {*/
/* 				location.href = '/admin/error';*/
/* 			}*/
/* 			var page_size = 10; //每页显示的条目数*/
/* */
/* 			getbackup();*/
/* 			function getbackup() {*/
/* 				*/
/* 				var content = '';*/
/* //				ykp.list({*/
/* //					url: '/api/api_system/get_backup_db_list',*/
/* //					method: 'get',*/
/* //					data: {*/
/* //						"limit": page_size,*/
/* //						"order":'sm_db_backup.id desc',*/
/* //					},*/
/* //					pageBar: {*/
/* //						id: '#pageBar'*/
/* //					},*/
/* //					loadList: function(res) {*/
/* //						if(res.data.items == "") {*/
/* //							setTimeout(function(){*/
/* //	                        ykp.prompt('暂无数据！');*/
/* //	                    },1000);*/
/* //							$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="color:#7d7d7d !important;text-align:center !important;" class="page">暂无数据</div></td></tr>');*/
/* //							return false;*/
/* //						}*/
/* //						addList(res);*/
/* //					}*/
/* //				})*/
/* 				*/
/* 				ykp.doAjax({*/
/* 					url:"/api/api_system/get_backup_db_list2",*/
/* 					method:"get",*/
/* 					data:{*/
/* 						"order":'sm_db_backup.id desc',*/
/* 					},*/
/* 					success:function(res) {*/
/* 						if(res.data == "") {*/
/* 							setTimeout(function(){*/
/* 	                        ykp.prompt('暂无数据！');*/
/* 	                    },1000);*/
/* 							$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="color:#7d7d7d !important;text-align:center !important;" class="page">暂无数据</div></td></tr>');*/
/* 							return false;*/
/* 						}*/
/* 						addList(res);*/
/* 					}*/
/* 					*/
/* 				})*/
/* 			}*/
/* */
/* 		$('#flush').click(function(){*/
/* 			getbackup();*/
/* 		})*/
/* */
/* 			function addList(res) {*/
/* 				var content = '';*/
/* 				//console.log(res.data);*/
/* 				var data = res.data;*/
/* 				*/
/* 				for(var i in data) {*/
/* 					content += `<tr data-id="${data[i]['sm_db_backup.id']}">*/
/* 							<td class="center">*/
/* 								<label class="pos-rel">*/
/*                                     <a href="#" class="edit"> <span class="lbl btnBlue">编辑</span></a>*/
/*                                 </label>*/
/*                             </td>*/
/* 							<td class="center">*/
/* 								${data[i]['sm_db_backup.filename']}*/
/* 							</td>*/
/* 							<td class="center">*/
/* 								${data[i]['sm_db_backup.filesize']}MB*/
/* 							</td>*/
/* 							<td class="center">*/
/* 								${data[i]['bmm_employees.name']}*/
/* 							</td>*/
/* 							<td class="center">*/
/* 								${data[i]['sm_db_backup.create_at']}*/
/* 							</td>*/
/* 							<td class="center">*/
/* 								${data[i]['sm_db_backup.remark']}*/
/* 							</td>*/
/* 						</tr>`*/
/* 				}*/
/* 				$('#dataList').html(content);*/
/* */
/* 				cs.getNodes([233]);*/
/* */
/* 				$('.edit').unbind('click').click(function() {*/
/* 					var id = $(this).parents('tr').attr('data-id');*/
/* 					var bz = $(this).parents('td').siblings().eq(4).text().trim();*/
/* 					$('#feedBack').show();*/
/* 					$('#feedBack').find('input').val(bz);*/
/* 					$('#feedBack .hold').unbind('click').click(function() {*/
/* 						var bzCon = $('#feedBack').find('input').val();*/
/* 						if(bzCon == '') {*/
/* 							ykp.prompt('不能为空！');*/
/* 							return false;*/
/* 						}*/
/* 						ykp.doAjax({*/
/* 							url: '/api/api_system/backup_db_edit',*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								id:id,*/
/* 								remark: bzCon*/
/* 							},*/
/* 							success: function(res) {*/
/* 								ykp.prompt('编辑成功！');*/
/* 								$('.close_label').parents('.label_popup').fadeOut();*/
/* 								getbackup();*/
/* 							}*/
/* 						})*/
/* */
/* 					})*/
/* 					cs.closePop();*/
/* 				})*/
/* 			}*/
/* 			*/
/* 			$('#heightsearch').click(function() {*/
/* 				ykp.alert('确定要备份数据库？备份过程中会占用大量系统资源，请在空闲时间操作！',[{*/
/* 					button:'取消',					*/
/* 				},{*/
/* 					button:'确定',*/
/* 					callback:function(){*/
/* 						ykp.doAjax({*/
/* 							url:"/api/api_system/backup_db",*/
/* 							method:'get',*/
/* 							msg:'备份需要一定的时间，请等候！',*/
/* 							showBlock:true,*/
/* 							success:function(res) {*/
/* 								ykp.prompt('备份成功！',{startTime:1200,endTime:100});*/
/* 								setTimeout(function() {*/
/* 									getbackup();*/
/* 								},2000)*/
/* 							}*/
/* 						});*/
/* 					}*/
/* 				}]);				*/
/* 			});*/
/* */
/* */
/* 			pageinfo();*/
/* 			$('#changePageNum').change(function() {*/
/* 				page_size = $(this).val();*/
/* 				getbackup();*/
/* 			})*/
/* */
/* 			function pageinfo() {*/
/* 				$('#add').click(function() {*/
/* 					showMark('#template1');*/
/* 					$('#templateCon #cnumber').val('12313133');*/
/* */
/* 				})*/
/* 			}*/
/* 		});*/
/* 	</script>*/
