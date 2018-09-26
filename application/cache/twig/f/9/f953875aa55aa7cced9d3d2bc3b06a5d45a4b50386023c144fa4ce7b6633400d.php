<?php

/* admin/manage/procedure.html */
class __TwigTemplate_dd97c071e1ebc076db56ac62d18bbda47f15ccf931584e520e413317cd9d538e extends Twig_Template
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
\t#showBox {
\t\tmin-width: 0;
\t}
\t
\t#templateCon .status span {
\t\tmargin-left: 10px;
\t\tposition: relative;
\t\ttop: 5px;
\t\tcolor: #337ab7;
\t\tcursor: pointer;
\t}
</style>
<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<div>
\t\t\t<!--     <h3 class=\"header smaller lighter blue\">流程管理</h3> -->
\t\t\t<div class=\"row\" style=\"margin-top: 20px;\">
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"228\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" title=\"添加\" id=\"add\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;border-color: #32CD32 !important;\">
                        <i class=\"fa fa-plus\"></i>
                    </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
                     <button id=\"flush\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
\t                    <i class=\"fa fa-refresh\"></i>
\t                </button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"custom_table\">
\t\t\t\t<table id=\"dynamic-table\" style=\"margin-bottom:0px;\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t<th class=\"hidden-480 center\">操作</th>
\t\t\t\t\t\t\t<th class=\"center thColor\">流程编码</th>
\t\t\t\t\t\t\t<th class=\"center thColor\">流程名称</th>
\t\t\t\t\t\t\t<th class=\"hidden-480 center\">流程分类</th>
\t\t\t\t\t\t\t<th class=\"hidden-480 center \">流程状态</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<tbody class=\"dataList\">
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

\t<div class=\"row\" id=\"template1\" style=\"display:none;\">
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 流程名称： </label>
\t\t\t<input type=\"text\" class=\"lc_name\" />
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 流程分类： </label>
\t\t\t<select class=\"products\" msg=\"请选择分类\">
\t\t\t\t<option value=\"\">--- 请选择 ---  </option>
\t\t\t\t<option value=\"1\">记账报税 </option>
\t\t\t\t<option value=\"2\">工商服务 </option>
\t\t\t\t<option value=\"3\">知识产权 </option>
\t\t\t\t<option value=\"4\">财税服务 </option>
\t\t\t\t<option value=\"5\">网站建设 </option>
\t\t\t</select>
\t\t</div>
\t\t<div style=\"margin-top:15px;position:\">
\t\t\t<label> 流程状态： </label>
\t\t\t<div style=\"display:inline-block;float:right;margin-left:5px;\" class=\"status\">
\t\t\t\t<div>
\t\t\t\t\t<input type=\"text\" msg=\"流程状态不能为空\">
\t\t\t\t\t<span>
                        <i class=\"fa fa-plus-square fa-2x\" aria-hidden=\"true\"></i>
                    </span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div style=\"clear:both;\"></div>
\t\t</div>
\t\t<div style=\"text-align:center;margin-top:15px;\">
\t\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>

\t\t\t<button class=\"sure_button add\">
                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                保存
            </button>
\t\t</div>
\t</div>
\t
\t<div class=\"row\" id=\"template2\" style=\"display:none;\">
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 流程名称： </label>
\t\t\t<input type=\"text\" class=\"lc_name\" />
\t\t</div>
\t\t<div style=\"margin-top:15px;position:\">
\t\t\t<label> 流程状态： </label>
\t\t\t<div style=\"display:inline-block;float:right;margin-left:5px;\" class=\"status\">
\t\t\t\t<div>
\t\t\t\t\t<input type=\"text\" msg=\"流程状态不能为空\">
\t\t\t\t\t<span>
                        <i class=\"fa fa-plus-square fa-2x\" aria-hidden=\"true\"></i>
                    </span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div style=\"clear:both;\"></div>
\t\t</div>
\t\t<div style=\"text-align:center;margin-top:15px;\">
\t\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>

\t\t\t<button class=\"sure_button add\">
                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                保存
            </button>
\t\t</div>
\t</div>
\t";
        // line 129
        $this->loadTemplate("admin/mark.html", "admin/manage/procedure.html", 129)->display($context);
        // line 130
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script>
\tjQuery(function(\$) {
\t\tcs.getNodes([228]);

\t\tvar order ='ckm_process.id desc';
\t\tvar current = 1;
\t\tvar page_size = 10;
\t\taddData();
\t\tvar lType = {
\t\t\t0:\"记账报税\"
\t\t};
\t\tvar sort_role = \"\";
\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_process/index',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter:\"ckm_process.is_del = 0\",
\t\t\t\tlimit: page_size
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '.pageBar'
\t\t\t},
\t\t\tcontentId:\"#datalist\",  //默认排序
\t\t\tinitOrder:\"\",   //初始化sort
\t\t\tdefaultOrder:order,
\t\t\tparams:[{
\t\t\t\tid:\"#dynamic-table\",
\t\t\t\tfield:[\"\",\"\",\"ckm_process.name\",\"ckm_process.type\",\"ckm_process.status\"]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});

\t\t//获取数据
\t\tgetList(1);

\t\tfunction getList(current) {
\t\t\tykp.list({
\t\t\t\turl: '/api/api_process/index',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tfilter: 'ckm_process.is_del = 0',
\t\t\t\t\t\"page\": current,
\t\t\t\t\t\"limit\": page_size,
\t\t\t\t\torder:order
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\t\$('.dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"color:#7d7d7d !important;text-align:center !important;\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddList(res,current);
\t\t\t\t}
\t\t\t});

\t\t\t\$('#flush').unbind('click').click(function(){
\t\t\t\tgetList();
\t\t\t})
\t\t}
\t\t
\t\tfunction addList(res) {
\t\t\t\tvar data = res.data.items;
\t\t\t\tvar list = [];
\t\t\t\tvar types = ['记账报税', '工商服务', '知识产权', '财税服务', '网站建设'];
\t\t\t\tgetType();
\t\t\t\tconsole.log(lType);
\t\t\t\tfor(var i in data) {
\t\t\t\t\tlist.push(
\t\t\t\t\t\t`<tr procedure-id=\"\${data[i]['ckm_process.id']}\">
\t\t\t\t\t\t\t<td>
                                <label class=\"pos-rel\">
                                \t<a href=\"javascript:void(0);\" class=\"editInfo btBlue\" style=\"\" title=\"编辑\"><i class=\"fa fa-pencil-square-o\"></i></a>
                                    <a href=\"javascript:void(0);\" class=\"del btRed\" contentAuthority=\"229\" title=\"删除\"><i class=\"fa fa-trash-o\"></i> </a>
                                </label>
                            </td>
                            <td>
                               \${parseInt(((current-1)*page_size)) + (parseInt(i)+1)}
                            </td>
                            <td>
                                \${data[i]['ckm_process.name']}
                            </td>
                            <td>
                                \${lType[data[i]['ckm_process.type']]}
                            </td>
                            <td>
                                \${JSON.parse(data[i]['ckm_process.status'])}
                            </td>
                           
                        </tr>`
\t\t\t\t\t);
\t\t\t\t}

\t\t\t\t\$('.dataList').html(list.join(''));

\t\t\t\tcs.getNodes([229]);

\t\t\t\t//分页
\t\t\t\tif(\$('.ui-pagination-container').length <= 0) {
\t\t\t\t\tcs.setPagination('#pagination', 5, res.data.totalCount, 10, getPage);
\t\t\t\t}

\t\t\t\tdeleteProcedure();
\t\t\t\t
\t\t\t\tedit(data);
\t\t\t}

\t\t\$('#changePageNum').change(function() {
\t\t\tpagesize = \$(this).val();
\t\t\tgetList(1);
\t\t})

\t\tfunction getPage(current) {
\t\t\tpage = current;
\t\t\tgetList(1);
\t\t}

\t\t//删除
\t\tfunction deleteProcedure() {
\t\t\t
\t\t\t
\t\t\t//删除
\t\t\t\$('#dynamic-table tbody tr').find('.del').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('procedure-id');
\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\tlayer.confirm('确认删除该流程？', function(index) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_process/del',
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tid: id
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess:function(res) {
\t\t\t\t\t\t\t\tykp.prompt('删除成功!');
\t\t\t\t\t\t\t\tgetList(1);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t});
\t\t\t\t})
\t\t\t})
\t\t}
\t\t
\t\tfunction edit(dataArr) {
\t\t\t
\t\t\t\$('.editInfo').click(function() {
\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\tshowMark('#template2');
\t\t\t\tvar data = dataArr[index];
\t\t\t\t\$('#showBox .title').text('编辑');
\t\t\t\t\$('#templateBox .lc_name').val(data['ckm_process.name']);
\t\t\t\t
\t\t\t\tvar content = \"\";
\t\t\t\tvar status = JSON.parse(data['ckm_process.status']);
                console.log(status);
                for(var i = 0; i < status.length; i++) {
\t\t\t\t\tif(i == 0) {
\t\t\t\t\t\tcontent += `<div>
\t\t\t\t\t\t\t<input type=\"text\" msg=\"流程状态不能为空\" value=\"\${status[i]}\">
\t\t\t\t\t\t\t<span>
\t\t                        <i class=\"fa fa-plus-square fa-2x\" aria-hidden=\"true\"></i>
\t\t                    </span>
\t\t\t\t\t\t</div>`;
\t\t\t\t\t}else {
\t\t\t\t\t\tcontent += `<div>
                                    <input type=\"text\" msg=\"流程状态不能为空\" value=\"\${status[i]}\">
                                    <span>
                                        <i class=\"fa fa-minus-square fa-2x\" aria-hidden=\"true\"></i>
                                    </span>
                                </div>`;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t\$('#templateBox .status').html(content);
\t\t\t\tminusOrPlus();
\t\t\t\tvar id = data['ckm_process.id'];
\t\t\t\t\$('#templateCon .add').click(function() {
\t\t\t\t\tif(!cs.popValidate()) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\tvar statuss = [];
\t\t\t\t\t\$('#templateCon .status input').not(':hidden').each(function(i, e) {
\t\t\t\t\t\tstatuss.push(\$(this).val());
\t\t\t\t\t});

\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_process/edit',
\t\t\t\t\t\tmethods: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tid:id,
\t\t\t\t\t\t\tname: \$('#templateCon .lc_name').val(),
\t\t\t\t\t\t\tstatus:JSON.stringify(statuss)
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess:function(res) {
\t\t\t\t\t\t\tykp.prompt('编辑成功!');
\t\t\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\t\t\$('#showBox').addClass('ishide');
\t\t\t\t\t\t\tgetList(1);
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t});
\t\t\t})
\t\t}
\t\t

\t\t//添加
\t\tfunction addData() {
\t\t\t\$('#add').click(function() {
\t\t\t\tshowMark('#template1');
\t\t\t\t\$('#showBox .title').text('添加');
\t\t\t\t//弹出层点击 流程状态 - 或者 +
\t\t\t\tminusOrPlus();
\t\t\t\t
\t\t\t\tgetType();
\t\t\t\t

\t\t\t\t//选择流程分类为 记账报税时，默认展示六条流程状态：收单，整单，记账，报税，客服，送单
\t\t\t\t\$('#templateCon .products').change(function(){
                    console.log(\$(this).val());
                    if(\$(this).val() == 0){
                        \$('#templateCon .status').html(
\t\t\t\t\t\t\t`<div>
                                <input type=\"text\" disabled value=\"收单\" msg=\"流程状态不能为空\">
                                <span>
                                    <i class=\"fa fa-minus-square fa-2x\" aria-hidden=\"true\"></i>
                                </span>
                            </div>
                            <div>
                                <input type=\"text\" disabled value=\"整单\" msg=\"流程状态不能为空\">
                                <span>
                                    <i class=\"fa fa-minus-square fa-2x\" aria-hidden=\"true\"></i>
                                </span>
                            </div>
                            <div>
                                <input type=\"text\" disabled value=\"记账\" msg=\"流程状态不能为空\">
                                <span>
                                    <i class=\"fa fa-minus-square fa-2x\" aria-hidden=\"true\"></i>
                                </span>
                            </div>
                             <div>
                                <input type=\"text\" disabled value=\"客服\" msg=\"流程状态不能为空\">
                                <span>
                                    <i class=\"fa fa-minus-square fa-2x\" aria-hidden=\"true\"></i>
                                </span>
                            </div>
                            <div>
                                <input type=\"text\" disabled value=\"报税\" msg=\"流程状态不能为空\">
                                <span>
                                    <i class=\"fa fa-minus-square fa-2x\" aria-hidden=\"true\"></i>
                                </span>
                            </div>
                            <div>
                                <input type=\"text\" value=\"送单\" msg=\"流程状态不能为空\">
                                <span>
                                    <i class=\"fa fa-minus-square fa-2x\" aria-hidden=\"true\"></i>
                                </span>
                            </div>`
\t\t\t\t\t\t);

\t\t\t\t\t\tminusOrPlus(true);
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).val() != 0){
\t\t\t\t\t\t\$('#templateCon .status').html(
\t\t\t\t\t\t\t`<div>
                                <input type=\"text\" msg=\"流程状态不能为空\">
                                <span>
                                    <i class=\"fa fa-plus-square fa-2x\" aria-hidden=\"true\"></i>
                                </span>
                            </div>`
\t\t\t\t\t\t);

\t\t\t\t\t\tminusOrPlus();
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t\$('#templateCon .add').click(function() {
\t\t\t\t\tif(!cs.popValidate()) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\tvar statuss = [];
\t\t\t\t\t\$('#templateCon .status input').not(':hidden').each(function(i, e) {
\t\t\t\t\t\tstatuss.push(\$(this).val());
\t\t\t\t\t});

\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_process/add',
\t\t\t\t\t\tmethods: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\ttype: \$('#templateCon .products').val(),
\t\t\t\t\t\t\tname: \$('#templateCon .lc_name').val(),
\t\t\t\t\t\t\tstatus:JSON.stringify(statuss)
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess:function(res) {
\t\t\t\t\t\t\tykp.prompt('添加成功!');
\t\t\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\t\t\$('#showBox').addClass('ishide');
\t\t\t\t\t\t\tgetList(1);
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t});
\t\t\t})
\t\t}
\t\t
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
\t\t\t\t\t\tconsole.log(res);
\t\t\t\t\t\tvar data = res.data.items;
\t\t\t\t\t\tvar option = \"<option> --- 请选择 --- </option><option value='0'> 记账报税 </option>\"
\t\t\t\t\t\tfor(var i in data){
\t\t\t\t\t\t\toption += \"<option value=\"+data[i]['ckm_ptype.id']+\">\"+ data[i]['ckm_ptype.name']+\"</option>\";
\t\t\t\t\t\t\tlType[data[i]['ckm_ptype.id']] = data[i]['ckm_ptype.name'];
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\t\$('#templateCon .products').html(option);
\t\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t})
\t\t}
\t\t
\t\tfunction minusOrPlus(flag) {
\t\t\t\t\t\$('#templateCon .status span').unbind('click').click(function() {
\t\t\t\t\t\tif(\$(this).find('i').hasClass('fa-minus-square')) {
\t\t\t\t\t\t\tif(flag){
\t\t\t\t\t\t\t\t\$(this).parent().hide();
\t\t\t\t\t\t\t\tif(\$('#templateCon .status>div').not(':hidden').length == 1){
\t\t\t\t\t\t\t\t\t\$('#templateCon .status>div').not(':hidden').eq(0).find('i').removeClass('fa-minus-square').addClass('fa-plus-square');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tminusOrPlus(flag);
\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\$(this).parent().remove();
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).find('i').hasClass('fa-plus-square')) {
\t\t\t\t\t\t\tif(flag){
\t\t\t\t\t\t\t\t\$('#templateCon .status>div:hidden').eq(0).show();
\t\t\t\t\t\t\t\t\$('#templateCon .status>div:visible').find('i').removeClass('fa-plus-square').addClass('fa-minus-square');
\t\t\t\t\t\t\t\t\$('#templateCon .status>div:visible').eq(0).find('i').removeClass('fa-minus-square').addClass('fa-plus-square');
\t\t\t\t\t\t\t\tif(\$('#templateCon .status>div').not(':hidden').length == 6){
\t\t\t\t\t\t\t\t\t\$('#templateCon .status>div').find('i').removeClass('fa-plus-square').addClass('fa-minus-square');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tminusOrPlus(flag);
\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\$('#templateCon .status').append(
\t\t\t\t\t\t\t\t`<div>
                                    <input type=\"text\" msg=\"流程状态不能为空\">
                                    <span>
                                        <i class=\"fa fa-minus-square fa-2x\" aria-hidden=\"true\"></i>
                                    </span>
                                </div>`
\t\t\t\t\t\t\t);

\t\t\t\t\t\t\tminusOrPlus();
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/manage/procedure.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 130,  149 => 129,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	#showBox {*/
/* 		min-width: 0;*/
/* 	}*/
/* 	*/
/* 	#templateCon .status span {*/
/* 		margin-left: 10px;*/
/* 		position: relative;*/
/* 		top: 5px;*/
/* 		color: #337ab7;*/
/* 		cursor: pointer;*/
/* 	}*/
/* </style>*/
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<div>*/
/* 			<!--     <h3 class="header smaller lighter blue">流程管理</h3> -->*/
/* 			<div class="row" style="margin-top: 20px;">*/
/* 				<div class="col-sx-4" contentAuthority="228" style=" float: left; margin-right: 5px;">*/
/* 					<button type="button" title="添加" id="add" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;border-color: #32CD32 !important;">*/
/*                         <i class="fa fa-plus"></i>*/
/*                     </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/*                      <button id="flush" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/* 	                    <i class="fa fa-refresh"></i>*/
/* 	                </button>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="custom_table">*/
/* 				<table id="dynamic-table" style="margin-bottom:0px;">*/
/* 					<thead>*/
/* 						<tr class="thColor">*/
/* 							<th class="hidden-480 center">操作</th>*/
/* 							<th class="center thColor">流程编码</th>*/
/* 							<th class="center thColor">流程名称</th>*/
/* 							<th class="hidden-480 center">流程分类</th>*/
/* 							<th class="hidden-480 center ">流程状态</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* */
/* 					<tbody class="dataList">*/
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
/* */
/* 	<div class="row" id="template1" style="display:none;">*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 流程名称： </label>*/
/* 			<input type="text" class="lc_name" />*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 流程分类： </label>*/
/* 			<select class="products" msg="请选择分类">*/
/* 				<option value="">--- 请选择 ---  </option>*/
/* 				<option value="1">记账报税 </option>*/
/* 				<option value="2">工商服务 </option>*/
/* 				<option value="3">知识产权 </option>*/
/* 				<option value="4">财税服务 </option>*/
/* 				<option value="5">网站建设 </option>*/
/* 			</select>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;position:">*/
/* 			<label> 流程状态： </label>*/
/* 			<div style="display:inline-block;float:right;margin-left:5px;" class="status">*/
/* 				<div>*/
/* 					<input type="text" msg="流程状态不能为空">*/
/* 					<span>*/
/*                         <i class="fa fa-plus-square fa-2x" aria-hidden="true"></i>*/
/*                     </span>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div style="clear:both;"></div>*/
/* 		</div>*/
/* 		<div style="text-align:center;margin-top:15px;">*/
/* 			<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* */
/* 			<button class="sure_button add">*/
/*                 <i class="fa fa-check" aria-hidden="true"></i>*/
/*                 保存*/
/*             </button>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="row" id="template2" style="display:none;">*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 流程名称： </label>*/
/* 			<input type="text" class="lc_name" />*/
/* 		</div>*/
/* 		<div style="margin-top:15px;position:">*/
/* 			<label> 流程状态： </label>*/
/* 			<div style="display:inline-block;float:right;margin-left:5px;" class="status">*/
/* 				<div>*/
/* 					<input type="text" msg="流程状态不能为空">*/
/* 					<span>*/
/*                         <i class="fa fa-plus-square fa-2x" aria-hidden="true"></i>*/
/*                     </span>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div style="clear:both;"></div>*/
/* 		</div>*/
/* 		<div style="text-align:center;margin-top:15px;">*/
/* 			<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* */
/* 			<button class="sure_button add">*/
/*                 <i class="fa fa-check" aria-hidden="true"></i>*/
/*                 保存*/
/*             </button>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% include 'admin/mark.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script>*/
/* 	jQuery(function($) {*/
/* 		cs.getNodes([228]);*/
/* */
/* 		var order ='ckm_process.id desc';*/
/* 		var current = 1;*/
/* 		var page_size = 10;*/
/* 		addData();*/
/* 		var lType = {*/
/* 			0:"记账报税"*/
/* 		};*/
/* 		var sort_role = "";*/
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_process/index',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter:"ckm_process.is_del = 0",*/
/* 				limit: page_size*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '.pageBar'*/
/* 			},*/
/* 			contentId:"#datalist",  //默认排序*/
/* 			initOrder:"",   //初始化sort*/
/* 			defaultOrder:order,*/
/* 			params:[{*/
/* 				id:"#dynamic-table",*/
/* 				field:["","","ckm_process.name","ckm_process.type","ckm_process.status"]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* */
/* 		//获取数据*/
/* 		getList(1);*/
/* */
/* 		function getList(current) {*/
/* 			ykp.list({*/
/* 				url: '/api/api_process/index',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					filter: 'ckm_process.is_del = 0',*/
/* 					"page": current,*/
/* 					"limit": page_size,*/
/* 					order:order*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 						$('.dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="color:#7d7d7d !important;text-align:center !important;" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					}*/
/* 					addList(res,current);*/
/* 				}*/
/* 			});*/
/* */
/* 			$('#flush').unbind('click').click(function(){*/
/* 				getList();*/
/* 			})*/
/* 		}*/
/* 		*/
/* 		function addList(res) {*/
/* 				var data = res.data.items;*/
/* 				var list = [];*/
/* 				var types = ['记账报税', '工商服务', '知识产权', '财税服务', '网站建设'];*/
/* 				getType();*/
/* 				console.log(lType);*/
/* 				for(var i in data) {*/
/* 					list.push(*/
/* 						`<tr procedure-id="${data[i]['ckm_process.id']}">*/
/* 							<td>*/
/*                                 <label class="pos-rel">*/
/*                                 	<a href="javascript:void(0);" class="editInfo btBlue" style="" title="编辑"><i class="fa fa-pencil-square-o"></i></a>*/
/*                                     <a href="javascript:void(0);" class="del btRed" contentAuthority="229" title="删除"><i class="fa fa-trash-o"></i> </a>*/
/*                                 </label>*/
/*                             </td>*/
/*                             <td>*/
/*                                ${parseInt(((current-1)*page_size)) + (parseInt(i)+1)}*/
/*                             </td>*/
/*                             <td>*/
/*                                 ${data[i]['ckm_process.name']}*/
/*                             </td>*/
/*                             <td>*/
/*                                 ${lType[data[i]['ckm_process.type']]}*/
/*                             </td>*/
/*                             <td>*/
/*                                 ${JSON.parse(data[i]['ckm_process.status'])}*/
/*                             </td>*/
/*                            */
/*                         </tr>`*/
/* 					);*/
/* 				}*/
/* */
/* 				$('.dataList').html(list.join(''));*/
/* */
/* 				cs.getNodes([229]);*/
/* */
/* 				//分页*/
/* 				if($('.ui-pagination-container').length <= 0) {*/
/* 					cs.setPagination('#pagination', 5, res.data.totalCount, 10, getPage);*/
/* 				}*/
/* */
/* 				deleteProcedure();*/
/* 				*/
/* 				edit(data);*/
/* 			}*/
/* */
/* 		$('#changePageNum').change(function() {*/
/* 			pagesize = $(this).val();*/
/* 			getList(1);*/
/* 		})*/
/* */
/* 		function getPage(current) {*/
/* 			page = current;*/
/* 			getList(1);*/
/* 		}*/
/* */
/* 		//删除*/
/* 		function deleteProcedure() {*/
/* 			*/
/* 			*/
/* 			//删除*/
/* 			$('#dynamic-table tbody tr').find('.del').click(function() {*/
/* 				var id = $(this).parents('tr').attr('procedure-id');*/
/* 				layui.use('layer', function() {*/
/* 					var layer = layui.layer;*/
/* 					layer.confirm('确认删除该流程？', function(index) {*/
/* 						ykp.doAjax({*/
/* 							url: '/api/api_process/del',*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								id: id*/
/* 							},*/
/* 							success:function(res) {*/
/* 								ykp.prompt('删除成功!');*/
/* 								getList(1);*/
/* 							}*/
/* 						});*/
/* 						layer.closeAll();*/
/* 					});*/
/* 				})*/
/* 			})*/
/* 		}*/
/* 		*/
/* 		function edit(dataArr) {*/
/* 			*/
/* 			$('.editInfo').click(function() {*/
/* 				var index = $(this).parents('tr').index();*/
/* 				showMark('#template2');*/
/* 				var data = dataArr[index];*/
/* 				$('#showBox .title').text('编辑');*/
/* 				$('#templateBox .lc_name').val(data['ckm_process.name']);*/
/* 				*/
/* 				var content = "";*/
/* 				var status = JSON.parse(data['ckm_process.status']);*/
/*                 console.log(status);*/
/*                 for(var i = 0; i < status.length; i++) {*/
/* 					if(i == 0) {*/
/* 						content += `<div>*/
/* 							<input type="text" msg="流程状态不能为空" value="${status[i]}">*/
/* 							<span>*/
/* 		                        <i class="fa fa-plus-square fa-2x" aria-hidden="true"></i>*/
/* 		                    </span>*/
/* 						</div>`;*/
/* 					}else {*/
/* 						content += `<div>*/
/*                                     <input type="text" msg="流程状态不能为空" value="${status[i]}">*/
/*                                     <span>*/
/*                                         <i class="fa fa-minus-square fa-2x" aria-hidden="true"></i>*/
/*                                     </span>*/
/*                                 </div>`;*/
/* 					}*/
/* 				}*/
/* 				$('#templateBox .status').html(content);*/
/* 				minusOrPlus();*/
/* 				var id = data['ckm_process.id'];*/
/* 				$('#templateCon .add').click(function() {*/
/* 					if(!cs.popValidate()) {*/
/* 						return;*/
/* 					}*/
/* */
/* 					var statuss = [];*/
/* 					$('#templateCon .status input').not(':hidden').each(function(i, e) {*/
/* 						statuss.push($(this).val());*/
/* 					});*/
/* */
/* 					ykp.doAjax({*/
/* 						url: '/api/api_process/edit',*/
/* 						methods: 'post',*/
/* 						data: {*/
/* 							id:id,*/
/* 							name: $('#templateCon .lc_name').val(),*/
/* 							status:JSON.stringify(statuss)*/
/* 						},*/
/* 						success:function(res) {*/
/* 							ykp.prompt('编辑成功!');*/
/* 							$('.in').removeClass('modal-backdrop');*/
/* 							$('#showBox').addClass('ishide');*/
/* 							getList(1);*/
/* 						}*/
/* 					})*/
/* 				});*/
/* 			})*/
/* 		}*/
/* 		*/
/* */
/* 		//添加*/
/* 		function addData() {*/
/* 			$('#add').click(function() {*/
/* 				showMark('#template1');*/
/* 				$('#showBox .title').text('添加');*/
/* 				//弹出层点击 流程状态 - 或者 +*/
/* 				minusOrPlus();*/
/* 				*/
/* 				getType();*/
/* 				*/
/* */
/* 				//选择流程分类为 记账报税时，默认展示六条流程状态：收单，整单，记账，报税，客服，送单*/
/* 				$('#templateCon .products').change(function(){*/
/*                     console.log($(this).val());*/
/*                     if($(this).val() == 0){*/
/*                         $('#templateCon .status').html(*/
/* 							`<div>*/
/*                                 <input type="text" disabled value="收单" msg="流程状态不能为空">*/
/*                                 <span>*/
/*                                     <i class="fa fa-minus-square fa-2x" aria-hidden="true"></i>*/
/*                                 </span>*/
/*                             </div>*/
/*                             <div>*/
/*                                 <input type="text" disabled value="整单" msg="流程状态不能为空">*/
/*                                 <span>*/
/*                                     <i class="fa fa-minus-square fa-2x" aria-hidden="true"></i>*/
/*                                 </span>*/
/*                             </div>*/
/*                             <div>*/
/*                                 <input type="text" disabled value="记账" msg="流程状态不能为空">*/
/*                                 <span>*/
/*                                     <i class="fa fa-minus-square fa-2x" aria-hidden="true"></i>*/
/*                                 </span>*/
/*                             </div>*/
/*                              <div>*/
/*                                 <input type="text" disabled value="客服" msg="流程状态不能为空">*/
/*                                 <span>*/
/*                                     <i class="fa fa-minus-square fa-2x" aria-hidden="true"></i>*/
/*                                 </span>*/
/*                             </div>*/
/*                             <div>*/
/*                                 <input type="text" disabled value="报税" msg="流程状态不能为空">*/
/*                                 <span>*/
/*                                     <i class="fa fa-minus-square fa-2x" aria-hidden="true"></i>*/
/*                                 </span>*/
/*                             </div>*/
/*                             <div>*/
/*                                 <input type="text" value="送单" msg="流程状态不能为空">*/
/*                                 <span>*/
/*                                     <i class="fa fa-minus-square fa-2x" aria-hidden="true"></i>*/
/*                                 </span>*/
/*                             </div>`*/
/* 						);*/
/* */
/* 						minusOrPlus(true);*/
/* 					}*/
/* 					if($(this).val() != 0){*/
/* 						$('#templateCon .status').html(*/
/* 							`<div>*/
/*                                 <input type="text" msg="流程状态不能为空">*/
/*                                 <span>*/
/*                                     <i class="fa fa-plus-square fa-2x" aria-hidden="true"></i>*/
/*                                 </span>*/
/*                             </div>`*/
/* 						);*/
/* */
/* 						minusOrPlus();*/
/* 					}*/
/* 				});*/
/* */
/* 				$('#templateCon .add').click(function() {*/
/* 					if(!cs.popValidate()) {*/
/* 						return;*/
/* 					}*/
/* */
/* 					var statuss = [];*/
/* 					$('#templateCon .status input').not(':hidden').each(function(i, e) {*/
/* 						statuss.push($(this).val());*/
/* 					});*/
/* */
/* 					ykp.doAjax({*/
/* 						url: '/api/api_process/add',*/
/* 						methods: 'post',*/
/* 						data: {*/
/* 							type: $('#templateCon .products').val(),*/
/* 							name: $('#templateCon .lc_name').val(),*/
/* 							status:JSON.stringify(statuss)*/
/* 						},*/
/* 						success:function(res) {*/
/* 							ykp.prompt('添加成功!');*/
/* 							$('.in').removeClass('modal-backdrop');*/
/* 							$('#showBox').addClass('ishide');*/
/* 							getList(1);*/
/* 						}*/
/* 					})*/
/* 				});*/
/* 			})*/
/* 		}*/
/* 		*/
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
/* 						console.log(res);*/
/* 						var data = res.data.items;*/
/* 						var option = "<option> --- 请选择 --- </option><option value='0'> 记账报税 </option>"*/
/* 						for(var i in data){*/
/* 							option += "<option value="+data[i]['ckm_ptype.id']+">"+ data[i]['ckm_ptype.name']+"</option>";*/
/* 							lType[data[i]['ckm_ptype.id']] = data[i]['ckm_ptype.name'];*/
/* 						}*/
/* 						*/
/* 						$('#templateCon .products').html(option);*/
/* 						*/
/* 					}*/
/* 				})*/
/* 		}*/
/* 		*/
/* 		function minusOrPlus(flag) {*/
/* 					$('#templateCon .status span').unbind('click').click(function() {*/
/* 						if($(this).find('i').hasClass('fa-minus-square')) {*/
/* 							if(flag){*/
/* 								$(this).parent().hide();*/
/* 								if($('#templateCon .status>div').not(':hidden').length == 1){*/
/* 									$('#templateCon .status>div').not(':hidden').eq(0).find('i').removeClass('fa-minus-square').addClass('fa-plus-square');*/
/* 								}*/
/* 								minusOrPlus(flag);*/
/* 								return;*/
/* 							}*/
/* */
/* 							$(this).parent().remove();*/
/* 						}*/
/* 						if($(this).find('i').hasClass('fa-plus-square')) {*/
/* 							if(flag){*/
/* 								$('#templateCon .status>div:hidden').eq(0).show();*/
/* 								$('#templateCon .status>div:visible').find('i').removeClass('fa-plus-square').addClass('fa-minus-square');*/
/* 								$('#templateCon .status>div:visible').eq(0).find('i').removeClass('fa-minus-square').addClass('fa-plus-square');*/
/* 								if($('#templateCon .status>div').not(':hidden').length == 6){*/
/* 									$('#templateCon .status>div').find('i').removeClass('fa-plus-square').addClass('fa-minus-square');*/
/* 								}*/
/* 								minusOrPlus(flag);*/
/* 								return;*/
/* 							}*/
/* */
/* 							$('#templateCon .status').append(*/
/* 								`<div>*/
/*                                     <input type="text" msg="流程状态不能为空">*/
/*                                     <span>*/
/*                                         <i class="fa fa-minus-square fa-2x" aria-hidden="true"></i>*/
/*                                     </span>*/
/*                                 </div>`*/
/* 							);*/
/* */
/* 							minusOrPlus();*/
/* 						}*/
/* 					});*/
/* 				}*/
/* 	});*/
/* </script>*/
