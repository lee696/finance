<?php

/* admin/depotManagement/depotCheck.html */
class __TwigTemplate_1929189fb0b45118a3a8f8b238df15450fed473601ecac06e735506944dcb0dd extends Twig_Template
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
\t#showBox .form_data label {
\t\twidth: 60px;
\t}
</style>
<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<!-- <h3 class=\"header smaller lighter blue\">盘点</h3> -->
\t\t<div class=\"actions\" id=\"topTool\">
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<input type=\"text\" pts=0 id=\"\" sear=\"ckm_new_inventory.num\" placeholder=\"盘点编码\" class=\"kh_code\" />
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<select style=\"width: 180px\" class=\"advandced-search pt-search select2-hidden-accessible\" tabindex=\"-1\" sear=\"ckm_new_inventory.create_id\" pts=3 aria-hidden=\"true\">
\t\t\t\t\t<option value=\"\">创建人  </option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<select style=\"width: 180px\" class=\"advandced-search pt-search select2-hidden-accessible\" tabindex=\"-1\" pts=3 sear=\"ckm_new_inventory.auth_id\" aria-hidden=\"true\">
\t\t\t\t\t<option value=\"\">审批人  </option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<button type=\"button\" id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
\t                <i class=\"fa fa-search\"></i>
\t            </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button id=\"heightsearch\" type=\"button\" title=\"高级搜索\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
                    <i class=\"fa fa-filter\"></i>
                </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
\t                <i class=\"fa fa-refresh\"></i>
\t            </button>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-sx-4\" contentAuthority=\"157\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<button id=\"add\" title=\"添加\" type=\"button\" class=\"btn btn-info btn-sm\" style=\" background-color: #32CD32 !important;\">
\t\t\t\t\t<i class=\"fa fa-plus\"></i>
               </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" contentAuthority=\"158\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<button title=\"批量审批\" class=\"btn btn-info  sp  btn-sm plSp\" style=\"background-color: #32CD32 !important; border-color: #32CD32;\">
\t\t\t\t\t<i class=\"fa fa-check-circle-o\"></i>
\t            </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:290px;height: 36px\">
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"background: #E6E6E6;line-height:22px\" data-status=\"a\">全部</a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:22px\" data-status=\"0\">
\t\t\t\t\t\t</i> 待审批</a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:22px\" data-status=\"2\"> 已通过</a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:22px\" data-status=\"1\"> 未通过</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"position: absolute;margin-top: 35px; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;\">
\t\t\t\t<div class=\"row\" id=\"SearchCon\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"custom_table\">
\t\t
\t\t<table id=\"dynamic-table\" class=\"dynamic-table\">
\t\t\t<thead>
\t\t\t\t<tr class=\"thColor ths\">
\t\t\t\t\t<th class=\"center\">
\t\t\t\t\t\t<label class=\"pos-rel\">
                                <input type=\"checkbox\" class=\"ace\" onclick=\"cs.checkAll(this.checked)\"/>
                                <span class=\"lbl\"></span>
                        </label>
\t\t\t\t\t</th>
\t\t\t\t\t<th>操作</th>
\t\t\t\t\t<th data-num=\"1\">审批状态</th>
\t\t\t\t\t<th data-num=\"2\">盘点编码</th>
\t\t\t\t\t<th data-num=\"3\">盘点日期</th>
\t\t\t\t\t<th data-num=\"4\">仓库名称</th>
\t\t\t\t\t<th data-num=\"5\">仓位</th>
\t\t\t\t\t<th data-num=\"7\">库存数量</th>
\t\t\t\t\t<th data-num=\"8\">盘点数量</th>
\t\t\t\t\t<th data-num=\"9\">盘点差额</th>
\t\t\t\t\t<th data-num=\"11\">备注</th>
\t\t\t\t\t<th data-num=\"12\">创建人</th>
\t\t\t\t\t<th data-num=\"13\">创建时间</th>
\t\t\t\t\t<th data-num=\"14\">审批人</th>
\t\t\t\t\t<th data-num=\"15\">审批时间</th>
\t\t\t\t\t<th data-num=\"16\">审批回复</th>
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
\t<div class=\"popup_new\" style=\"display:none\">
\t\t<div class=\"row\" >
\t\t\t<form class=\"item_form\" role=\"form\">
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label style=\"margin-left:10px;\"> 区域名称： </label>
\t\t\t\t\t<select addfield=\"qu\" id=\"qy\">

\t\t\t\t\t</select>
\t\t\t\t\t<label> 仓位： </label>
\t\t\t\t\t<select addfield=\"pos_id\" id=\"cw\">

\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label style=\"margin-left:10px;\"> 仓库名称： </label>
\t\t\t\t\t<select addfield=\"type\" id=\"ck\">
\t\t\t\t\t\t<option value=\"1\">凭证仓</option>
\t\t\t\t\t\t<option value=\"2\">票据仓</option>
\t\t\t\t\t\t<option value=\"3\">证件仓</option>
\t\t\t\t\t</select>
\t\t\t\t\t<label> 盘点日期： </label>
\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<input class=\"date-timepicker1 required\" addfield=\"pd_time\" msg=\"盘点时间不能为空\" class=\"form-control\" style=\"height: 30px; width: 150px;padding:5px;\">
\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;padding:7px 10px;height:30px;\">
\t                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t                        </span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\" style=\"margin-bottom: 20px;\">
\t\t\t\t\t<label style=\"float:left;\"> 备注： </label>
\t\t\t\t\t<textarea style=\"margin-left:5px;width:calc(100% - 65px);padding:5px;\" addfield=\"remark\"></textarea>
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\" id=\"bm\">
\t\t\t\t\t<label style=\"margin-left:10px;\"> 仓位编码： </label>
\t\t\t\t\t<select addfield=\"num\" id=\"cw1\" style=\"width: 320px;\">
\t\t\t\t\t</select>
\t\t\t\t\t<!--<label style=\"margin-left:10px;width:80px;\"> 总共：<span class=\"allpd\"></span> 个</label>-->
\t\t\t\t\t<label style=\"margin-left:10px;width:80px;\"><span class=\"donepd\">0</span> /<span class=\"allpd\"></span></label>
\t\t\t\t</div>
\t\t\t\t<div id=\"infoBox\">
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<!--<span>12313</span>-->
\t\t\t\t\t\t<div class=\"custom_table\" style=\"margin-bottom: 10px;\">
\t\t\t\t\t\t\t<table id=\"dynamic-table\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t\t\t<th>仓库物品</th>
\t\t\t\t\t\t\t\t\t\t<th>库存数量</th>
\t\t\t\t\t\t\t\t\t\t<th>盘点数量</th>
\t\t\t\t\t\t\t\t\t\t<th>盘点差额</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"datalist\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-actions clearfix\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div style=\"text-align: center\" class=\"page\">暂无数据</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t

\t\t\t</form>
\t\t\t<div class=\"next_list_box\" style=\"display: none; text-align: center;\">
\t\t\t\t<button class=\"next_list btn btn-info btn-sm\" style=\"\">
                       下一个
                    </button>
\t\t\t</div>
\t\t\t<div class=\"popup_button\">
\t\t\t\t<button class=\"next_btn btn btn-info btn-sm\" style=\"\">
                       下一个
                    </button>
\t\t\t\t<button class=\"sure_button btn btn-info btn-sm\" state=\"1\" id=\"sure_button\" style=\"display:none;\">
                        提交
                    </button>
                    <button class=\"sure_button btn btn-info btn-sm\" state=\"2\" style=\"display:none;\">
                        保存
                    </button>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"label_popup\" id=\"feedBack\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t<span style=\"display: inline-block;\">请填写驳回原因</span>
\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t</div>
\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t<input type=\"text\" width=\"200px\" style=\"margin: auto;\" id=\"labelName\" />
\t\t\t\t<!--<hr>-->
\t\t\t</div>
\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t<button class=\"close_label\">关闭</button>
\t\t\t\t<button class=\"hold\">保存</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 214
        $this->loadTemplate("admin/mark.html", "admin/depotManagement/depotCheck.html", 214)->display($context);
        // line 215
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script type=\"text/javascript\">
\t\$(function() {
\t\tcs.tableheader();
\t\tcs.getNodes([157]);
\t\tif(cs.approve_authority({
\t\t\t\tname: '盘点',
\t\t\t\tnodes: [158]
\t\t\t})) {
\t\t\t\$('[contentAuthority=\"158\"]').show();
\t\t}
\t\tvar order = 'ckm_new_inventory.pd_time desc';
\t\tvar employees = {};
\t\tvar page_size = 10;
\t\tvar filter = '';
\t\tvar allCw = {};
\t\tvar cw_code = {};
\t\tvar cw_code1 = [];
\t\tvar kc_count = 0;
\t\tvar pd_count = 0;
\t\tvar pdce_count = 0;
\t\tvar wp = []; //物品
\t\tvar pageNum = 0;  //详情分页
\t\tvar doneNum = 0;
\t\tvar customDetail = {};
\t\ttspage();
\t\t
\t\tgetCustom();
\t\t
\t\tfunction getCustom(){
\t\t\t
\t\t}

\t\tfunction tspage() {
\t\t\tif(ykp.getCookie('detailsId') && ykp.getCookie('detailsId') != '') {
\t\t\t\tvar id = ykp.getCookie('detailsId');
\t\t\t\tvar data = {
\t\t\t\t\tlimit: page_size,
\t\t\t\t\tfilter: `ckm_new_inventory.customer_id = \${id}`,
\t\t\t\t\torder: 'ckm_new_inventory.pd_time desc'
\t\t\t\t}
\t\t\t\tgetList_2(data);
\t\t\t\tykp.setCookie('detailsId', '', 1 / 24);
\t\t\t} else {
\t\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\t\tykp.setCookie(\"where\", \"\");
\t\t\t\tgetList();
\t\t\t}
\t\t}
\t\t
\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_inventory/inventory',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: \"\",
\t\t\t\tlimit: page_size,
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '.pageBar'
\t\t\t},
\t\t\tcontentId: \"#datalist\", //默认排序
\t\t\tinitOrder: \"\", //初始化sort
\t\t\tdefaultOrder: order,
\t\t\tparams: [{
\t\t\t\tid: \"#dynamic-table\",
\t\t\t\tfield: [\"\",\"\", \"ckm_new_inventory.status\",\"ckm_new_inventory.num\", \"ckm_new_inventory.create_at\", \"ckm_new_inventory.type\", \"ckm_position.name\", \"ckm_new_inventory.kc_num\", \"ckm_new_inventory.pd_num\",
\t\t\t\t\"ckm_new_inventory.pd_kc\",\"ckm_new_inventory.remark\",\"ckm_new_inventory.create_id\", \"ckm_new_inventory.create_at\",\"ckm_new_inventory.auth_id\",\"ckm_new_inventory.auth_time\",\"ckm_new_inventory.auth_remark\"]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});
\t\t
\t\t\$('#showBox').find('.close_get,.sure_button').click(function() {
\t\t\tcw_code = [];
\t\t\tcw_code1 = [];
\t\t\tkc_count = 0;
\t\t\tpd_count = 0;
\t\t\tpdce_count = 0;
\t\t\twp = []; //物品
\t\t\tpageNum = 0;  //详情分页
\t\t})

\t\t//获取所有员工
\t\tykp.doAjax({
\t\t\turl: '/api/api_employees/f7',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tselect: 'bmm_employees.id,bmm_employees.name'
\t\t\t},
\t\t\tsuccess: function(res) {
\t\t\t\tvar data = res.data;
\t\t\t\t\$('.advandced-search').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});
\t\t\t\tfor(var i in data) {
\t\t\t\t\tif(data[i]['name']) {
\t\t\t\t\t\t//employees[data[i]['id']] = data[i]['name'];
\t\t\t\t\t\t\$('.pt-search').append(new Option(data[i]['name'], data[i]['id']));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t});

\t\t\$('#flush').click(function() {
\t\t\t\$('[sear=\"ckm_new_inventory.num\"]').val('');
\t\t\t\$('[sear=\"ckm_new_inventory.create_id\"]').val('').trigger('change');
\t\t\t\$('[sear=\"ckm_new_inventory.auth_id\"]').val('').trigger('change');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tfilter = '';
\t\t\tgetList();
\t\t})

\t\t\$('.myFilter').click(function() {
\t\t\tif(!\$(this).hasClass('clc')) {
\t\t\t\t\$(this).addClass('clc').siblings().removeClass('clc');
\t\t\t}
\t\t\tvar data = {
\t\t\t\t\"limit\": page_size,
\t\t\t\t'page': 1,
\t\t\t\t'order': order
\t\t\t}
\t\t\tvar filter_ = \$(this).attr('data-status');
\t\t\tif(filter_ == 'a') {
\t\t\t\tgetList();
\t\t\t\treturn;
\t\t\t}
\t\t\tfilter = 'ckm_new_inventory.status = '+filter_;
\t\t\tdata['filter'] = 'ckm_new_inventory.status = ' + filter_;
\t\t\tgetList_2(data);

\t\t})

\t\t\$('#filterBtns a').mouseover(function() {
\t\t\t\$(this).addClass('over');
\t\t})
\t\t\$('#filterBtns a').mouseout(function() {
\t\t\t\$(this).removeClass('over');
\t\t})

\t\tfunction getList_2(data) {
\t\t\tsearch();
\t\t\tykp.list({
\t\t\t\turl: '/api/api_inventory/inventory',
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
\t\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t});
\t\t}

\t\t\$('#changePageNum').change(function() {
\t\t\tpage_size = \$(this).val();
\t\t\tykp.setCookie('page_size', page_size);
\t\t\tgetList();
\t\t})

\t\tfunction search() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_inventory/inventory',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: page_size,
\t\t\t\t\torder: 'ckm_new_inventory.pd_time desc'
\t\t\t\t}
\t\t\t}
\t\t\tcs.doSearch('#search', data, 'filter', false, function(res, _filter) {
\t\t\t\tfilter = _filter;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn false;
\t\t\t\t} else {
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t})
\t\t}

\t\tgetSearch();

\t\tfunction getSearch() {

\t\t\tvar list = [{
\t\t\t\t\tname: \"审批状态\",
\t\t\t\t\tsearch: \"ckm_new_inventory.status\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\toption: [{
\t\t\t\t\t\tval: \"0\",
\t\t\t\t\t\ttext: \"待审批\"
\t\t\t\t\t}, {
\t\t\t\t\t\tval: \"1\",
\t\t\t\t\t\ttext: \"未通过\"
\t\t\t\t\t}, {
\t\t\t\t\t\tval: \"2\",
\t\t\t\t\t\ttext: \"已通过\"
\t\t\t\t\t},{
\t\t\t\t\t\tval: \"3\",
\t\t\t\t\t\ttext: \"盘点中\"
\t\t\t\t\t}]
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"盘点编码\",
\t\t\t\t\tsearch: \"ckm_new_inventory.num\",
\t\t\t\t\ttype: \"text\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"盘点日期\",
\t\t\t\t\tsearch: \"ckm_new_inventory.pd_time\",
\t\t\t\t\ttype: \"time\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"仓库名称\t\",
\t\t\t\t\tsearch: \"ckm_new_inventory.type\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\trange: \"true\",
\t\t\t\t\toption: [{
\t\t\t\t\t\tval: \"1\",
\t\t\t\t\t\ttext: \"凭证仓\"
\t\t\t\t\t}, {
\t\t\t\t\t\tval: \"2\",
\t\t\t\t\t\ttext: \"单据仓\"
\t\t\t\t\t}, {
\t\t\t\t\t\tval: \"3\",
\t\t\t\t\t\ttext: \"证件仓\"
\t\t\t\t\t}]
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"仓位\",
\t\t\t\t\tsearch: \"ckm_position.id\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\tclass:\"cw\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"仓库物品\",
\t\t\t\t\tsearch: \"ckm_new_inventory.kc_goods\",
\t\t\t\t\ttype: \"text\",
\t\t\t\t\trange: \"true\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"库存数量\",
\t\t\t\t\tsearch: \"ckm_new_inventory.kc_num\",
\t\t\t\t\ttype: \"text\",
\t\t\t\t\trange: \"true\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"盘点数量\",
\t\t\t\t\tsearch: \"ckm_new_inventory.pd_num\",
\t\t\t\t\ttype: \"text\",
\t\t\t\t\trange: \"true\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"盘点差额\",
\t\t\t\t\tsearch: \"ckm_new_inventory.pd_kc\",
\t\t\t\t\ttype: \"text\",
\t\t\t\t\trange: \"true\"
\t\t\t\t},
//\t\t\t\t{
//\t\t\t\t\tname: \"盘点结果\",
//\t\t\t\t\tsearch: \"ckm_new_inventory.remark\",
//\t\t\t\t\ttype: \"text\"
//\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"备注\",
\t\t\t\t\tsearch: \"ckm_new_inventory.remark\",
\t\t\t\t\ttype: \"text\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"创建人\",
\t\t\t\t\tsearch: \"ckm_new_inventory.create_id\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\turl: \"/api/api_employees/f7\",
\t\t\t\t\tkey: \"people\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"创建时间\",
\t\t\t\t\tsearch: \"ckm_new_inventory.create_at\",
\t\t\t\t\ttype: \"time\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"审批人\",
\t\t\t\t\tsearch: \"ckm_new_inventory.auth_id\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\turl: \"/api/api_employees/f7\",
\t\t\t\t\tkey: \"people\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"审批时间\",
\t\t\t\t\tsearch: \"ckm_new_inventory.auth_time\",
\t\t\t\t\ttype: \"time\"
\t\t\t\t}
\t\t\t];
\t\t\tcs.getAllCw(function(option) {
\t\t\t\t\$('#heightsearch1 .cw').html(option);
\t\t\t\t\$('#heightsearch1 .cw').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t})
\t\t\t})

\t\t\tcs.getSearch({
\t\t\t\tlist: list,
\t\t\t\tel: \"#heightsearch\",
\t\t\t\tel1: \"#heightsearch1\"
\t\t\t}, dohSearch);
\t\t\t
\t\t\tfunction dohSearch() {
\t\t\t\t
\t\t\t\tvar data = {
\t\t\t\t\turl: '/api/api_inventory/inventory',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tlimit: page_size,
\t\t\t\t\t\torder: 'ckm_new_inventory.pd_time desc',
\t\t\t\t\t\tfilter: 'filter'
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tcs.hSearch('.search1', data, 'filter', false, function(res, _filter) {
\t\t\t\t\tfilter = _filter;
\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\t\$(\"#heightsearch\").removeClass('active').css('z-index', '');
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddList(res);
\t\t\t\t})
\t\t\t}
\t\t}

\t\t//getList()
\t\tfunction getList() {
\t\t\tsearch();
\t\t\tykp.list({
\t\t\t\turl: '/api/api_inventory/inventory',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: page_size,
\t\t\t\t\torder: 'ckm_new_inventory.create_at desc'
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\" style=\"text-align:center !important;color:#7d7d7d;\">暂无数据</td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t});
\t\t}

\t\tfunction addList(res) {
\t\t\tvar content = [];
\t\t\tvar data = res.data.items;
\t\t\tvar Status = ['待审批', '未通过', '已通过','盘点中']; //审核状态
\t\t\tvar Type = ['', '凭证仓', '单据仓', '证件仓']; //仓库名称

\t\t\tvar styles = []; //th  display样式
\t\t\t\$('.custom_table .ths th').not(':first').each(function() {
\t\t\t\tstyles.push(\$(this).css('display'));
\t\t\t});

\t\t\t//审批权限为true可以审批,为false不可审批
\t\t\tvar spApp = cs.approve_authority({
\t\t\t\tname: '盘点',
\t\t\t\tnodes: [160]
\t\t\t});
\t\t\tvar cxApp = cs.approve_authority({
\t\t\t\tname: '盘点',
\t\t\t\tnodes: [270]
\t\t\t});
\t\t\tvar edit_statu = cs.getNodes([159], true);

\t\t\tvar pd_data = []; //盘点数据
\t\t\tvar pd_result = []; //盘点结果
\t\t\t//物品数据html
\t\t\tvar goodsData_html = [];
\t\t\tfor(var i in data) {
\t\t\t\tpd_data = data[i]['list'];
\t\t\t\tfor(var k in pd_data) {
\t\t\t\t\tif(pd_data[k]['pd_kc'] != 0) {
\t\t\t\t\t\tpd_result.push(pd_data[k]['goods'] + '：-' + pd_data[k]['pd_kc']);
\t\t\t\t\t}

\t\t\t\t}

\t\t\t\tfor(var k in pd_data) {
\t\t\t\t\tgoodsData_html.push(pd_data[k]['goods'] + ':' + pd_data[k]['pd_kc']);
\t\t\t\t}

\t\t\t\tcontent.push('<tr data-id=\"' + data[i]['ckm_new_inventory.id'] + '\"  data-status=\"' + data[i]['ckm_new_inventory.status'] + '\">' +
\t\t\t\t\t'<td class=\"center\">' +
\t\t\t\t\t'<label class=\"pos-rel\">' +
\t\t\t\t\t'<input type=\"checkbox\" name=\"check\" class=\"ace\"/>' +
\t\t\t\t\t'<span class=\"lbl\"></span>' +
\t\t\t\t\t'</label>' +
\t\t\t\t\t'</td>' +
\t\t\t\t\t'<td style=\"display:' + styles[0] + '\">' +
                    '<a href=\"#\" class=\"pos-rel btOrange info\" style=\" color:#fff !important\" title=\"详情\"><i class=\"fa fa-info \"></i></a> ' +
\t\t\t\t\t'<label class=\"pos-rel\"><a href=\"#\" class=\"pos-rel btBlue edit\" style=\"display:' + (edit_statu ? (data[i]['ckm_new_inventory.status'] == 1 ||  data[i]['ckm_new_inventory.status'] == 3 ? 'inline-block' : 'none') : 'none') + '; color:#fff !important\" contentAuthority=\"159\" title=\"编辑\"><i class=\"fa fa-pencil-square-o\"></i></a> ' +
\t\t\t\t\t'<a href=\"#\"  class=\"sp pos-rel sp btOrange\" contentAuthority=\"270\" data-status = \"0\" style=\"display:' + (cxApp ? (data[i]['ckm_new_inventory.status'] == 2 ? 'inline-block' : 'none') : 'none') + '; color:#fff !important\" title=\"撤销\"><i class=\"fa fa-rotate-left\"></i></a> ' +
\t\t\t\t\t'<a href=\"#\"  class=\"sp pos-rel sp btGreen\" contentAuthority=\"160\" data-status = \"2\" style=\"display:' + (spApp ? (data[i]['ckm_new_inventory.status'] == 0 ? 'inline-block' : 'none') : 'none') + '; color:#fff !important\" title=\"通过\"><i class=\"fa fa-check-circle-o\"></i></a> ' +
\t\t\t\t\t'<a href=\"#\"  class=\"sp pos-rel sp btRed\" contentAuthority=\"160\" data-status = \"1\" style=\"display:' + (spApp ? (data[i]['ckm_new_inventory.status'] == 0 ? 'inline-block' : 'none') : 'none') + '; color:#fff !important\" title=\"驳回\"><i class=\"fa fa-times-circle\"></i></a>' +
\t\t\t\t\t'<label></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[1] + '\" data-num=\"1\">' + Status[data[i]['ckm_new_inventory.status']] + '</td>' +
\t\t\t\t\t'<td style=\"display:' + styles[2] + '\" data-num=\"2\">' + data[i]['ckm_new_inventory.num'] + '</td>' +
\t\t\t\t\t'<td style=\"display:' + styles[3] + '\" data-num=\"3\">' + cs.getNowTime(data[i]['ckm_new_inventory.create_at']) + '</td>' +
    //                '<td style=\"display:' + styles[3] + '\" data-num=\"3\">' + (data[i]['ckm_new_inventory.create_at'] != '0' ? cs.getNowTime(data[i]['ckm_new_inventory.create_at'],true) : '') + '</td>' +
\t\t\t\t\t'<td style=\"display:' + styles[4] + '\" data-num=\"4\">' + Type[data[i]['ckm_new_inventory.type']] + '</td>' +
\t\t\t\t\t'<td style=\"display:' + styles[5] + '\" data-num=\"5\">' + data[i]['ckm_position.name'] + '</td>' +
//\t\t\t\t\t'<td style=\"display:' + styles[6] + '\" data-num=\"6\">' + data[i]['ckm_new_inventory.pd_goods'] + '</td>' +
\t\t\t\t\t'<td style=\"display:' + styles[7] + '\" data-num=\"7\">' + data[i]['ckm_new_inventory.kc_num'] + '</td>' +
\t\t\t\t\t'<td style=\"display:' + styles[8] + '\" data-num=\"8\">' + data[i]['ckm_new_inventory.pd_num'] + '</td>' +
\t\t\t\t\t'<td style=\"display:' + styles[9] + '\" data-num=\"9\">' + Math.abs(data[i]['ckm_new_inventory.pd_kc']) + '</td>' +
//\t\t\t\t\t'<td style=\"display:' + styles[10] + '\" data-num=\"10\"  title=\"' + goodsData_html.join('&#13;') + '\"><label style=\"width:100px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;\" >' + goodsData_html.join('；') + '</label></td>' +
\t\t\t\t\t'<td style=\"display:' + styles[11] + '\" data-num=\"11\">' + data[i]['ckm_new_inventory.remark'] + '</td>' +
\t\t\t\t\t'<td style=\"display:' + styles[12] + '\" data-num=\"12\">' + (data[i]['createInfo'] ? data[i]['createInfo']['name'] : \"\") + '</td>' +
\t\t\t\t\t'<td style=\"display:' + styles[13] + '\" data-num=\"13\">' + (data[i]['ckm_new_inventory.create_at'] != '0' ? cs.getNowTime(data[i]['ckm_new_inventory.create_at'],true) : '') + '</td>' +
\t\t\t\t\t'<td style=\"display:' + styles[14] + '\" data-num=\"14\">' + (data[i]['authInfo'] ? data[i]['authInfo']['name'] : '') + '</td>' +
\t\t\t\t\t'<td style=\"display:' + styles[15] + '\" data-num=\"15\">' + (data[i]['ckm_new_inventory.auth_time'] != 0 ? cs.getNowTime(data[i]['ckm_new_inventory.auth_time'],true) : \"\") + '</td>' +
\t\t\t\t\t'<td style=\"display:' + styles[16] + '\" data-num=\"16\">' + (data[i]['ckm_new_inventory.auth_remark'] != 0 ? data[i]['ckm_new_inventory.auth_remark'] : \"\") + '</td>' +
\t\t\t\t\t'</tr>');

\t\t\t\t//清空数据
\t\t\t\tpd_data = []; //盘点数据
\t\t\t\tpd_result = []; //盘点结果
\t\t\t}
\t\t\t\$('#datalist').html(content.join(''));

\t\t\t\$(\"#datalist tr\").find('.sp').click(function() {
\t\t\t\tvar status = \$(this).attr('data-status');
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tchangeStatus(status, id);
\t\t\t})

\t\t\t//编辑
\t\t\t\$('.edit').unbind('click').click(function() {
\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\tvar _data = data[index];
\t\t\t\tget_info_edit(_data);
\t\t\t})

\t\t\t\$('.info').unbind('click').click(function() {
\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\tvar _data = data[index];
\t\t\t\tget_info_edit(_data, true);
\t\t\t})

\t\t\tplsp();
\t\t}
\t\t\t
\t\t//详情编辑
\t\tfunction get_info_edit(data, status) {
\t\t\tvar id = data['ckm_new_inventory.id'];
\t\t\tshowMark('.popup_new');
\t\t\t\$('#showBox .title').text('编辑盘点信息');
\t\t\t
\t\t\tif(!status) {
\t\t\t\t\$('#templateCon .sure_button').show();
\t\t\t\t\$('#templateCon #sure_button').hide();
\t\t\t}
\t\t\tif(status) {
\t\t\t\t\$('#templateCon .popup_button').hide();
\t\t\t\t\$('#templateCon #bm').hide();
\t\t\t}
\t\t\t
\t\t\t
\t\t\tdoneNum = 0;
\t\t\tJSON.parse(data['ckm_new_inventory.content']).forEach(function(item) {
\t\t\t\tcw_code[item.customer_id] = {};
\t\t\t\tcw_code[item.customer_id]['content'] = item.goodsList;
\t\t\t\tcw_code[item.customer_id]['name'] = item.name;
\t\t\t\tcw_code[item.customer_id]['is_edit'] = item.is_edit;
\t\t\t\tif(item.is_edit == 1) {
\t\t\t\t\tdoneNum++;
\t\t\t\t}
\t\t\t})
\t\t\t\$('#templateBox .donepd').text(doneNum);
\t\t\t\$('#templateBox').find('input[addfield=pd_time]').val(cs.getNowTime(data['ckm_new_inventory.pd_time']));
\t\t\t\$('#templateBox #ck').find('option[value=' + data['ckm_new_inventory.type'] + ']').attr('selected', true);
\t\t\t\$('#templateBox').find('textarea[addfield=remark]').val(data['ckm_new_inventory.premarkd_time']);
\t\t\tgetCw(data['ckm_new_inventory.pos_id'], data['ckm_new_inventory.qy']);
\t\t\tif(!status) {  //编辑
\t\t\t\t\$('#templateBox #cw').trigger('change');
\t\t\t\t\$('#templateBox #cw').change(function() {
\t\t\t\t\tvar id = data['ckm_new_inventory.pos_id'];
\t\t\t\t\tvar _this = \$(this)
\t\t\t\t\tvar type = \$('#templateBox #ck').val();
\t\t\t\t\tsetTimeout(function(){
\t\t\t\t\t\tvar text = _this.find('option:selected').text();
\t\t\t\t\t\tchangeCw(id, text,cw_code); //切换仓位获取物品
\t\t\t\t\t},100)
\t\t\t\t})
\t\t\t\t\$('#templateBox #cw1').change(function() {
\t\t\t\t\tvar id = \$(this).val();
\t\t\t\t\tvar type = \$('#templateBox #ck').val();
\t\t\t\t\tgetGoods(id, type); //切换仓位获取物品

\t\t\t\t})
\t\t\t\t//计算差额
\t\t\t\tcalculateDifference();
\t\t\t} else { //详情
\t\t\t\tcw_code1 = [];
\t\t\t\t//差额按倒序排序
\t\t\t\tvar content = JSON.parse(data['ckm_new_inventory.content']);

\t\t\t\tfor(i=0;i<content.length-1;i++){
\t\t\t        for(j=0;j<content.length-1-i;j++){
\t\t\t            if(parseInt(content[j].pdce) < parseInt(content[j+1].pdce)){
\t\t\t                var temp=content[j];
\t\t\t                content[j]=content[j+1];
\t\t\t                content[j+1]=temp;
\t\t\t            }
\t\t\t        }
\t\t\t   }
\t\t\t\tcontent.forEach(function(item) {
\t\t\t\t\tcw_code1.push({
\t\t\t\t\t\tcontent: item.goodsList,
\t\t\t\t\t\tname: item.name,
\t\t\t\t\t\tpdce:item.pdce,
\t\t\t\t\t\tcustom_id:item.customer_id,
\t\t\t\t\t})
\t\t\t\t})
\t\t\t\t
\t\t\t\tgetInfoList();
\t\t\t}
\t\t\t\$('#templateCon').find('#qy,#cw,#ck').prop('disabled', true);
\t\t\t//查看详情 全部禁用
\t\t\tif(status) {
\t\t\t\t\$('#showBox .title').text('查看盘点信息');
\t\t\t\t\$('#templateBox').find('[addfield],.checkAmount').attr('disabled', true);
\t\t\t}else{
\t\t\t\taddCheckRecord(data['ckm_new_inventory.id']);
\t\t\t}

\t\t\t//计算差额
//\t\t\tcalculateDifference();

\t\t\tcs.timeplug();
\t\t\t
\t\t\t
\t\t\t
\t\t}
\t\t
\t\tfunction getdonepdNum() {
\t\t\tvar num = 0; 
\t\t\t\$('#templateBox #cw1').find('option').each(function(){
\t\t\t\tif(\$(this).hasClass('ddd')) {
\t\t\t\t\tnum ++;
\t\t\t\t}
\t\t\t})
\t\t\tif((num+1)  == \$(\"#templateBox .allpd\").text()){
\t\t\t\t\$(\"#templateBox #sure_button\").show();
\t\t\t\t\$(\"#templateBox .next_btn\").hide();
\t\t\t}
\t\t\treturn num;
\t\t}

\t\t//盘点详情
\t\tfunction getInfoList() {

\t\t\tvar num = 0;
\t\t\tvar data = cw_code1;
\t\t\t\$('#templateBox #infoBox').children().first().remove();
\t\t\tshowList()
\t\t}

\t\tfunction showList() {
\t\t\tvar content = '';
\t\t\tvar amount = 0;
\t\t\tvar pan_num = 0;
\t\t\tvar infoList = [];
\t\t\tvar  data = cw_code1.slice(pageNum,pageNum+3);
\t\t\tvar customInfo = {};
\t\t\t\$('#templateBox .next_list_box').show();
\t\t\tif(data.length < 3 ){
\t\t\t\t\$('#templateBox .next_list_box').remove();
\t\t\t}
\t\t\t
\t\t\tykp.doAjax({
\t\t\t\turl:\"/api/api_inventory/get_cus\",
\t\t\t\tmethod:\"post\",
\t\t\t\tdata:{
\t\t\t\t\tpos_id:7
\t\t\t\t},
\t\t\t\tasync:false,
\t\t\t\tsuccess:function(res){
\t\t\t\t\tvar _data = res.data;
\t\t\t\t\tfor(var i in _data) {
\t\t\t\t\t\tcustomInfo[_data[i].customer_id] = _data[i].name
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t\tconsole.log(data);
\t\t\tfor(var i = 0; i < data.length; i++ ) {
\t\t\t\tcontent = \"\";
\t\t\t\tamount = 0;
\t\t\t\tpan_num = 0;
                content += `<div class=\"\">
\t\t\t\t\t\t<span>\${(data[i]['name'] ? data[i]['name'] : customInfo[data[i]['custom_id']])?(data[i]['name'] ? data[i]['name'] : customInfo[data[i]['custom_id']]):\"\"}</span>
\t\t\t\t\t\t<div class=\"custom_table\" style=\"margin-bottom: 10px;\">
\t\t\t\t\t\t\t<table id=\"dynamic-table\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t\t\t<th>仓库物品</th>
\t\t\t\t\t\t\t\t\t\t<th>库存数量</th>
\t\t\t\t\t\t\t\t\t\t<th>盘点数量</th>
\t\t\t\t\t\t\t\t\t\t<th>盘点差额</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"datalist\">`;
\t\t\t\tfor(var j in data[i]['content']) {
\t\t\t\t\tamount += parseInt(data[i]['content'][j]['kc_num']);
\t\t\t\t\tpan_num += parseInt(data[i]['content'][j]['pa_num']);
\t\t\t\t\tcontent += ` 
\t\t\t        \t<tr class=\"single\">
\t\t\t        \t\t<td class=\"pd_goods\">\${data[i]['content'][j]['goods']}</td>
\t\t\t\t\t\t    <td class=\"kc_num\">\${data[i]['content'][j]['kc_num']}</td>
\t\t\t\t\t\t    <td><input type=\"text\" value=\"\${data[i]['content'][j]['pa_num']}\" class=\"checkAmount\"/></td>
\t\t\t\t\t\t    <td class=\"chechDifference\">\${data[i]['content'][j]['pd_kc']}</td>
\t\t\t\t\t</tr>`;
\t\t\t\t}
\t\t\t\t
\t\t\t\tif(amount == 0 && pan_num == 0){
//\t\t\t\t\tcontent += `<tr><td colspan=\"4\"> <div style=\"text-align: center\" class=\"page\">暂无数据</div></td></tr>`;
\t\t\t\t\tcontent += `<tr id='zj'>
\t\t\t        <td>总计</td>
\t\t\t        \t<td class=\"kc_num\">0</td>
\t\t\t        \t<td class=\"checkAmount\">0</td>
\t\t\t        \t<td class=\"chechDifference\">0</td>
\t\t\t        <tr>`;
\t\t\t\t}else{
\t\t\t\t\tcontent += `<tr id='zj'>
\t\t\t        <td>总计</td>
\t\t\t        \t<td class=\"kc_num\">\${amount}</td>
\t\t\t        \t<td class=\"checkAmount\">\${pan_num}</td>
\t\t\t        \t<td class=\"chechDifference\">\${Math.abs(pan_num-amount)}</td>
\t\t\t        <tr>`;
\t\t\t\t}
\t\t\t\t
\t\t        
\t\t        content += `</tbody></table></div></div>`;
\t\t        
\t\t        infoList.push(content);
\t\t\t}
\t\t\tpageNum += 3;
\t\t\tnum += 1;
\t\t\t\$('#templateBox #infoBox').append(infoList.join(''));
\t\t\tif(status) {
\t\t\t\t\$('#templateBox').find('input,select,textarea').attr('disabled', true);
\t\t\t\t\$('#templateBox .sure_button').hide();
\t\t\t}
\t\t\t\$('.close_get').click(function() {
\t\t\t\tpageNum = 0;
\t\t\t})
\t\t\tinfoScrool();
\t\t\t
\t\t}
\t\t
\t\t
\t\tfunction infoScrool() {
\t\t\tvar height = \$('#templateBox').height();
\t\t\tvar parHeight = \$('#templateBox').parent().height();
\t\t\tvar status;
\t\t\t\$('#templateBox').unbind('scroll').scroll(function() {
\t\t\t\tif(status) {
\t\t\t\t\tclearInterval(status);
\t\t\t\t}
\t\t\t\tif(\$(this).scrollTop() >  200) {
\t\t\t\t\tstatus = setTimeout(function() {
\t\t\t\t\t\tshowList()
\t\t\t\t\t},300)
\t\t\t\t}
\t\t\t})
\t\t\t
\t\t\t\$('#templateBox .next_list_box').click(function() {
\t\t\t\tshowList()
\t\t\t})
\t\t\t
\t\t}
\t\t

\t\tfunction plsp() {
\t\t\t\$('.plSp').click(function() {
\t\t\t\tvar num = 0;
\t\t\t\tvar status = '';
\t\t\t\tvar coldata = [];
\t\t\t\tvar Statu = false;
\t\t\t\t\$('#datalist').find('input[type=checkbox]').each(function(i) {
\t\t\t\t\tif(\$(this).is(':checked')) {
\t\t\t\t\t\tnum++;
\t\t\t\t\t\tstatus = \$(this).parents('tr').attr('data-status') == '0' ? 2 : 0;
\t\t\t\t\t\tif(\$(this).parents('tr').attr('data-status') != 0) {
\t\t\t\t\t\t\tykp.prompt('审批过的不能批量审批!');
\t\t\t\t\t\t\tStatu = false;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tcoldata.push({
\t\t\t\t\t\t\t\tid: \$(this).parents('tr').attr('data-id'),
\t\t\t\t\t\t\t\tstatus: status
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tStatu = true;
\t\t\t\t\t\t}

\t\t\t\t\t}
\t\t\t\t})
\t\t\t\tif(num == 0) {
\t\t\t\t\tykp.prompt('请选择再审批');
\t\t\t\t} else {
\t\t\t\t\tif(Statu) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: \"/api/api_inventory/batch_sh_inventory\",
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tdata: JSON.stringify(coldata),
\t\t\t\t\t\t\t\ttype: 1
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('审批成功');
\t\t\t\t\t\t\t\tgetList(1);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t}

\t\t\t})
\t\t}

\t\tfunction changeStatus(status, id) {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_inventory/sh_inventory',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\tid: id,
\t\t\t\t\tstatus: status
\t\t\t\t}
\t\t\t}
\t\t\tif(status == 1) {
\t\t\t\t\$('#feedBack').show();
\t\t\t\t\$('#feedBack .hold').click(function() {
\t\t\t\t\tvar approve_reply = \$('#feedBack').find('input').val();
\t\t\t\t\tif(approve_reply == '') {
\t\t\t\t\t\tykp.prompt('不能为空！');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\t//\t\t\t\t\tdata.data.approve_reply = approve_reply.trim();
\t\t\t\t\tdata.data.auth_remark = approve_reply;
\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t})
\t\t\t\tcs.closePop();
\t\t\t} else if(status == 0) {
//\t\t\t\tbootbox.confirm('确认撤销审批？', function(flag) {
//\t\t\t\t\tif(flag) {
//\t\t\t\t\t\tsetStatus(data);
//\t\t\t\t\t}
//\t\t\t\t})
          layui.use('layer',function(){
\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\tlayer.confirm('确认撤销审批？',function(flag){
\t\t\t\t\t\t\tif(flag){
                \t\t\tlayer.closeAll();
                \t\t\tsetStatus(data);
                \t\t}
\t\t\t\t\t\t})
\t\t\t\t\t})
\t\t\t} else {
\t\t\t\tsetStatus(data);
\t\t\t}

\t\t}

\t\tfunction setStatus(data) {
\t\t\tykp.doAjax({
\t\t\t\turl: data.url,
\t\t\t\tmethods: data.methods,
\t\t\t\tdata: data.data,
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tykp.prompt('审批成功!');
\t\t\t\t\tgetList();
\t\t\t\t}
\t\t\t})
\t\t}

\t\tcs.custorm_check('.dynamic-table', '#datalist', true);
\t\t//获取仓位
\t\tfunction getCw(id, qu) {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_inventory/get_all_pos',
\t\t\t\tmethod: 'get',
\t\t\t\tdata: {},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar option = [];
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tallCw = data;
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\toption.push('<option value=\"' + i + '\">' + i + '</option>')
\t\t\t\t\t}
\t\t\t\t\t\$('#templateBox #qy').html(option.join(''));
\t\t\t\t\tif(qu) {
\t\t\t\t\t\t\$('#templateBox #qy').find('option[value=' + qu + ']').attr('selected', true);
\t\t\t\t\t}
\t\t\t\t\tchangeQu();
\t\t\t\t\t\$('#templateBox #qy').trigger('change');
\t\t\t\t\tif(id) {
\t\t\t\t\t\t\$('#templateBox #cw').find('option[value=' + id + ']').attr('selected', true);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//切换区域切换仓位
\t\tfunction changeQu() {
\t\t\t\$('#templateBox #qy').change(function() {
\t\t\t\tvar val = \$(this).val();
\t\t\t\tvar cw = [];
\t\t\t\tfor(var i in allCw[val]) {
\t\t\t\t\tcw.push('<option value=\"' + allCw[val][i]['id'] + '\">' + allCw[val][i]['name'] + '</option>')
\t\t\t\t}
\t\t\t\t\$('#templateBox #cw').html(cw.join(''));
\t\t\t\t\$('#templateBox #cw').trigger('change');
\t\t\t\t//\t\t\t\tchangeCw();
\t\t\t})
\t\t}

\t\t//切换仓位  改变仓库名称
\t\tfunction changeCw(id, text,cw_code) {
\t\t\tconsole.log(text);
\t\t\tykp.doAjax({
\t\t\t\turl: \"/api/api_inventory/get_cus\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tpos_id: id
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tif(res.data == \"\") {
\t\t\t\t\t\tykp.prompt('此仓位没有客户');
\t\t\t\t\t\t\$('#templateBox #cw1').html(\"\");
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\tvar custom = '';
\t\t\t\t\t\$('#templateBox .allpd').text(data.length);
\t\t\t\t\tvar donepdl = \$('#templateBox .donepd').text()
\t\t\t\t\tif((donepdl++) == data.length || donepdl == data.length){
\t\t\t\t\t\t\$('#templateBox #sure_button').show();
\t\t\t\t\t\t\$('#templateBox .next_btn').hide();
\t\t\t\t\t}
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tif(cw_code) {
\t\t\t\t\t\t\tcustom += `<option class=\"\${cw_code[data[i].customer_id] ? (cw_code[data[i].customer_id]['is_edit'] == 1 ?'ddd' : '') : ''}\" style=\"background: \${cw_code[data[i].customer_id] ? (cw_code[data[i].customer_id]['is_edit'] == 1 ?'rgb(221, 221, 221)' : '') : ''}\" data_num=\"\${data[i].pos_num}\" value=\"\${data[i].customer_id}\">\${\"[\"+text+data[i].pos_num+\"] \"+data[i].name}</option>`;
\t\t\t\t\t\t}else {
\t\t\t\t\t\t\tcustom += `<option  data_num=\"\${data[i].pos_num}\" value=\"\${data[i].customer_id}\">\${\"(\"+text+data[i].pos_num+\")\"+data[i].name}</option>`;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t\$('#templateBox #cw1').html(custom);
\t\t\t\t\tvar id = \$('#templateBox #cw1').val();
\t\t\t\t\tgetGoods(id); //切换仓位获取物品
\t\t\t\t\t//下一步切换仓位编码
\t\t\t\t\tnextCw();
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//添加盘点
\t\t\$('#add').click(function() {

\t\t\tshowMark('.popup_new');
\t\t\t\$('#showBox .title').text('添加盘点信息');
\t\t\tgetCw()

\t\t\t\$('#templateCon .sure_button').show();
\t\t\t\$('#templateCon #sure_button').hide();
\t\t\t\$('#templateBox #cw').change(function() {
\t\t\t\tvar id = \$(this).val();
\t\t\t\tvar text = \$(this).find('option:selected').text();
\t\t\t\tvar type = \$('#templateBox #ck').val();
\t\t\t\tchangeCw(id, text); //切换仓位获取物品

\t\t\t})

\t\t\t\$('#templateBox #cw1').change(function() {
\t\t\t\tvar id = \$(this).val();
\t\t\t\tvar type = \$('#templateBox #ck').val();
\t\t\t\tgetGoods(id, type); //切换仓位获取物品

\t\t\t})
\t\t\t\$('#templateBox #ck').change(function() {
\t\t\t\tvar type = \$(this).val();
\t\t\t\tvar id = \$('#templateBox #cw').val();
\t\t\t\tgetGoods(id, type); //切换仓库获取物品
\t\t\t})
\t\t\tcs.timeplug();

\t\t\taddCheckRecord();
\t\t});

\t\t//下一步切换仓位编码
\t\tfunction nextCw() {
\t\t\tdoneNum = 0;
\t\t\t\$('#templateBox .next_btn').unbind('click').click(function() {
\t\t\t\tvar id = \$('#templateBox #cw1').val(); //选中的仓位编码对应的id
\t\t\t\t\$('#templateCon').find('#qy,#cw,#ck').prop('disabled', true);
//\t\t\t\tif(\$('#templateCon .single').length == 0) {
//\t\t\t\t\tykp.prompt('该客户没有物品，请点击下一个');
//\t\t\t\t}
\t\t\t\t
\t\t\t\t
\t\t\t\tgetContent(id);

\t\t\t\t//获取当前option的index   后面为  下一个操作
\t\t\t\tif(parseInt(\$('#templateBox .allpd').text()) - parseInt(\$('#templateBox .donepd').text()) == 0) {
\t\t\t\t\tykp.prompt('添加完成，请保存');
\t\t\t\t\treturn false;
\t\t\t\t}
//\t\t\t\tdoneNum ++;
\t\t\t\tvar el = \$('#templateBox #cw1');
\t\t\t\tvar length = el.find('option').length;
\t\t\t\tvar index = el.find('option:selected').index();
\t\t\t\tif(index + 1 < length) {
\t\t\t\t\tif(!el.find('option:selected').hasClass('ddd')) {
\t\t\t\t\t\tel.find('option:selected').css('background', '#ddd');
\t\t\t\t\t\tel.find('option:selected').addClass('ddd');
\t\t\t\t\t}
\t\t\t\t\tel.find('option').eq(index + 1).attr('selected', true);
\t\t\t\t\tel.trigger('change');
\t\t\t\t} else if(index + 1 == length) {
\t\t\t\t\tykp.prompt('您还有' + (parseInt(\$('#templateBox .allpd').text()) - \$('#templateBox .donepd').text() ) + '个没有添加，请确认后保存');
\t\t\t\t} else {
\t\t\t\t\tel.find('option:selected').css('background', '#ddd');
\t\t\t\t\tel.find('option:selected').addClass('ddd');
\t\t\t\t\tvar index1 = el.find('option').not('.ddd').eq(0).index();
\t\t\t\t\tel.find('option').eq(index1).attr('selected', true);
\t\t\t\t\tel.trigger('change');
\t\t\t\t}
\t\t\t\t\$('#templateBox .donepd').text(getdonepdNum());
\t\t\t\t
\t\t\t})
\t\t}

\t\tfunction getContent(id) {
\t\t\tvar pd_infos = []; //存放 单个公司的所有物品
\t\t\tvar pd_info = {}; //存放单个物品数据
\t\t\t\$('#templateCon .single').each(function() {
\t\t\t\tpd_info = {};
\t\t\t\tpd_info['goods'] = \$(this).children('.pd_goods').text();
\t\t\t\tpd_info['kc_num'] = \$(this).children('.kc_num').text();
\t\t\t\tpd_info['pa_num'] = \$(this).find('.checkAmount').val();
\t\t\t\tpd_info['pd_kc'] = \$(this).children('.chechDifference').text();

\t\t\t\tpd_infos.push(pd_info);

\t\t\t\twp.push(\$(this).children('.pd_goods').text())
\t\t\t});
\t\t\t
\t\t\tcw_code[id] = {};
\t\t\tcw_code[id]['content'] = pd_infos;
\t\t\tcw_code[id]['num'] = \$('#templateBox #cw1').find('option:selected').attr('data_num'); //仓位编码
\t\t\tcw_code[id]['custom_name'] = \$('#templateBox #cw1').find('option:selected').text();
\t\t\tcw_code[id]['pdce'] =  \$('#templateBox #zj').find('.chechDifference').text();  //判断差额
\t\t\tpd_infos = [];

\t\t\tkc_count += \$('#templateBox #zj .kc_num').text() ? parseInt(\$('#templateBox #zj .kc_num').text()) : 0;
\t\t\tpd_count += \$('#templateBox #zj .checkAmount').text() ? parseInt(\$('#templateBox #zj .checkAmount').text()) : 0;
\t\t\tpdce_count += \$('#templateBox #zj .chechDifference').text() ? parseInt(\$('#templateBox #zj .chechDifference').text()) : 0;
\t\t\treturn false;
\t\t}
\t\t
\t\t//点击保存 向服务器发送数据
\t\tfunction addCheckRecord(id) {

\t\t\t\$('#templateCon .sure_button').click(function() {
\t\t\t\tvar Id = \$('#templateBox #cw1').val(); //选中的仓位编码对应的id
\t\t\t\tvar index = \$(this).attr('state');
\t\t\t\tgetContent(Id); //防止最后一条数据没有保存到
\t\t\t\tvar postData = {};
\t\t\t\tvar status = false;

\t\t\t\t\$('#templateCon [addfield]').each(function(i, e) {
\t\t\t\t\tif(\$(this).val() == '' && \$(this).attr('addfield') != 'remark') {
\t\t\t\t\t\tstatus = false;
\t\t\t\t\t\tykp.prompt(\$(this).attr(\"msg\"));
\t\t\t\t\t\treturn false;
\t\t\t\t\t} else {
\t\t\t\t\t\tif(\$(this).attr('addfield') == 'pd_time') {
\t\t\t\t\t\t\tpostData[\$(this).attr('addfield')] = new Date(\$(this).val()) / 1000;
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}

\t\t\t\t\t\tpostData[\$(this).attr('addfield')] = \$(this).val();
\t\t\t\t\t\tstatus = true;
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tvar content = [];
\t\t\t\tfor(var i in cw_code) {
\t\t\t\t\tcontent.push({
\t\t\t\t\t\tcustomer_id: i,
\t\t\t\t\t\tgoodsList: cw_code[i].content,
\t\t\t\t\t\tnum: cw_code[i].num,
\t\t\t\t\t\tname: cw_code[i].custom_name,
\t\t\t\t\t\tis_edit:1,
\t\t\t\t\t\tpdce:cw_code[i].pdce,
\t\t\t\t\t})
\t\t\t\t}
\t\t\t\tvar temp = [];
\t\t\t\tfor(var i=0;i<content.length;i++) {
\t\t\t\t\tfor(var j=0;j<content.length-1-i;j++){
\t\t\t\t\t\tif(content[j].num > content[j+1].num){
\t\t\t\t\t\t\ttemp= content[j];
\t\t\t                content[j]=content[j+1];
\t\t\t                content[j+1]=temp;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tpostData['content'] = JSON.stringify(content);
\t\t\t\tpostData['pd_num'] = pd_count;
\t\t\t\tpostData['kc_num'] = kc_count;
\t\t\t\tpostData['pd_kc'] = pdce_count;
\t\t\t\tpostData['pd_goods'] = JSON.stringify(Array.from(new Set(wp)));
\t\t\t\tvar url = '/api/api_inventory/add_or_edit_inventory';
\t\t\t\tif(id) {
\t\t\t\t\tpostData.id = id;
\t\t\t\t}
\t\t\t\tvar type = \"\";
\t\t\t\tpostData.status = index == 1 ? 0 : 3;
\t\t\t\tif(status) {
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: url,
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: postData,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tvar msg = id ? '编辑成功' : '添加成功';
\t\t\t\t\t\t\tykp.prompt(msg);
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t\tcw_code = {};
\t\t\t\t\t\t\tcw_code = [];
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\t
\t\t\t});
\t\t\t
\t\t\t
\t\t};

\t\t//获取仓位对应仓库中所有物品库存数量
\t\tfunction getGoods(id, type, status) {
\t\t\tif(cw_code[id] && cw_code[id].length != 0) {
\t\t\t\tvar content = '';
\t\t\t\tvar amount = 0;
\t\t\t\tvar pan_num = 0;
\t\t\t\tfor(var i in cw_code[id]['content']) {
\t\t\t\t\tamount += parseInt(cw_code[id]['content'][i]['kc_num']);
\t\t\t\t\tpan_num += parseInt(cw_code[id]['content'][i]['pa_num']);
\t\t\t\t\tcontent += ` 
\t\t        \t\t\t\t<tr class=\"single\">
\t\t        \t\t\t\t\t<td class=\"pd_goods\">\${cw_code[id]['content'][i]['goods']}</td>
\t\t\t\t\t                <td class=\"kc_num\">\${cw_code[id]['content'][i]['kc_num']}</td>
\t\t\t\t\t                <td><input type=\"text\" value=\"\${cw_code[id]['content'][i]['pa_num']}\" class=\"checkAmount\"/></td>
\t\t\t\t\t                <td class=\"chechDifference\">\${cw_code[id]['content'][i]['pd_kc']}</td>
\t\t\t\t\t            </tr>`
\t\t\t\t}
\t\t\t\tif(amount == 0 && pan_num == 0){
\t\t\t\t\tcontent += `<tr><td colspan=\"4\"> <div style=\"text-align: center\" class=\"page\">暂无数据</div></td></tr>`;
\t\t\t\t}else{
\t\t\t\t\tcontent += `<tr id='zj'>
\t\t\t        <td>总计</td>
\t\t\t        \t<td class=\"kc_num\">\${amount}</td>
\t\t\t        \t<td class=\"checkAmount\">\${pan_num}</td>
\t\t\t        \t<td class=\"chechDifference\">\${Math.abs(pan_num-amount)}</td>
\t\t\t        <tr>`;
\t\t\t\t}
//\t\t\t\tcontent += `<tr id='zj'>
//\t\t        \t\t\t\t\t\t\t<td>总计</td>
//\t\t        \t\t\t\t\t\t\t<td class=\"kc_num\">\${amount}</td>
//\t\t        \t\t\t\t\t\t\t<td class=\"checkAmount\">\${pan_num}</td>
//\t\t        \t\t\t\t\t\t\t<td class=\"chechDifference\">\${amount}</td>
//\t\t        \t\t\t\t\t\t<tr>`;
\t\t\t\t\$('#templateBox #datalist').html(content);
\t\t\t\tif(status) {
\t\t\t\t\t\$('#templateBox').find('input,select,textarea').attr('disabled', true);
\t\t\t\t\t\$('#templateBox .sure_button').hide();
\t\t\t\t}
\t\t\t\tcalculateDifference();
\t\t\t} else {
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_accountancies/get_num_info',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tcustomer_id: id,
\t\t\t\t\t\ttype: type
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\tvar content = '';
\t\t\t\t\t\tvar amount = 0;
\t\t\t\t\t\tif(res.msg) {
\t\t\t\t\t\t\t\$('#templateBox #datalist').html('<tr><td colspan=\"4\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center\" class=\"page\">暂无数据</div></td></tr>');
//\t\t\t\t\t\t\tykp.prompt('该客户没有物品，请点击下一个');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\t\tif(data[i].type == \$('#templateBox #ck').val()) {
\t\t\t\t\t\t\t\t\tamount += parseInt(data[i]['count']);
\t\t\t\t\t\t\t\t\tcontent += ` 
\t\t\t        \t\t\t\t<tr class=\"single\">
\t\t\t        \t\t\t\t\t<td class=\"pd_goods\">\${data[i]['goods']}</td>
\t\t\t\t\t\t                <td class=\"kc_num\">\${data[i]['count']}</td>
\t\t\t\t\t\t                <td><input type=\"text\" value=\"\${data[i]['count']}\" class=\"checkAmount\"/></td>
\t\t\t\t\t\t                <td class=\"chechDifference\">0</td>
\t\t\t\t\t\t            </tr>`;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(amount == 0 && pan_num == 0){
\t\t\t\t\t
\t\t\t\t\t\t\t\tcontent += `<div style=\"text-align: center\" class=\"page\">暂无数据</div>`;
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\tcontent += `<tr id='zj'>
\t\t\t\t\t\t        <td>总计</td>
\t\t\t\t\t\t        \t<td class=\"kc_num\">\${amount}</td>
\t\t\t\t\t\t        \t<td class=\"checkAmount\">\${pan_num}</td>
\t\t\t\t\t\t        \t<td class=\"chechDifference\">\${Math.abs(pan_num-amount)}</td>
\t\t\t\t\t\t        <tr>`;
\t\t\t\t\t\t\t}
//\t\t\t\t\t\t\tcontent += `<tr id='zj'>
//\t\t        \t\t\t\t\t\t\t<td>总计</td>
//\t\t        \t\t\t\t\t\t\t<td class=\"kc_num\">\${amount}</td>
//\t\t        \t\t\t\t\t\t\t<td class=\"checkAmount\">0</td>
//\t\t        \t\t\t\t\t\t\t<td class=\"chechDifference\">0</td>
//\t\t        \t\t\t\t\t\t<tr>`;
\t\t\t\t\t\t\t\$('#templateBox #datalist').html(content);
\t\t\t\t\t\t\tif(status) {
\t\t\t\t\t\t\t\t\$('#templateBox').find('input,select,textarea').attr('disabled', true);
\t\t\t\t\t\t\t\t\$('#templateBox .sure_button').hide();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tcalculateDifference();
\t\t\t\t\t\t}

\t\t\t\t\t}
\t\t\t\t})
\t\t\t}

\t\t}

\t\t//计算差额
\t\tfunction calculateDifference() {
\t\t\t\$('#templateCon .checkAmount').unbind('blur').blur(function() {
\t\t\t\t
\t\t\t\tif(\$(this).val().trim() == '') {
\t\t\t\t\t\$(this).val(0);
\t\t\t\t}
\t\t\t\tif(\$(this).val() > \$(this).parent().prev().text()) {
\t\t\t\t\t\$(this).val(\$(this).parent().prev().text());
\t\t\t\t}else if(\$(this).val() < 0){
\t\t\t\t\t\$(this).val(0);
\t\t\t\t}
\t\t\t\tvar checkAmount = \$(this).val().trim();
\t\t\t\tvar storageAmount = parseInt(\$(this).parent().prev().text());

\t\t\t\t//对应物品盘点差额
\t\t\t\t\$(this).parent().next().text(Math.abs(checkAmount - storageAmount));

\t\t\t\t//总计盘点数量  及  盘点差额
\t\t\t\tvar total = 0;
\t\t\t\t\$('#templateCon .single .checkAmount').each(function(i, e) {
\t\t\t\t\ttotal += parseInt(\$(this).val().trim());
\t\t\t\t});
\t\t\t\t\$('#templateCon #zj .checkAmount').text(Math.abs(total));

\t\t\t\ttotal = 0;
\t\t\t\t\$('#templateCon .single .chechDifference').each(function(i, e) {
\t\t\t\t\ttotal += parseInt(\$(this).text().trim());
\t\t\t\t});
\t\t\t\t\$('#templateCon #zj .chechDifference').text(Math.abs(total));
\t\t\t});
\t\t\tvar total = 0;
\t\t\t\t\$('#templateCon .single .checkAmount').each(function(i, e) {
\t\t\t\t\ttotal += parseInt(\$(this).val().trim());
\t\t\t\t});
\t\t\t\t\$('#templateCon #zj .checkAmount').text(Math.abs(total));

\t\t\t\ttotal = 0;
\t\t\t\t\$('#templateCon .single .chechDifference').each(function(i, e) {
\t\t\t\t\ttotal += parseInt(\$(this).text().trim());
\t\t\t\t});
\t\t\t\t\$('#templateCon #zj .chechDifference').text(Math.abs(total));
\t\t}
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/depotManagement/depotCheck.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 215,  234 => 214,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	#showBox .form_data label {*/
/* 		width: 60px;*/
/* 	}*/
/* </style>*/
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<!-- <h3 class="header smaller lighter blue">盘点</h3> -->*/
/* 		<div class="actions" id="topTool">*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<input type="text" pts=0 id="" sear="ckm_new_inventory.num" placeholder="盘点编码" class="kh_code" />*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<select style="width: 180px" class="advandced-search pt-search select2-hidden-accessible" tabindex="-1" sear="ckm_new_inventory.create_id" pts=3 aria-hidden="true">*/
/* 					<option value="">创建人  </option>*/
/* 				</select>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<select style="width: 180px" class="advandced-search pt-search select2-hidden-accessible" tabindex="-1" pts=3 sear="ckm_new_inventory.auth_id" aria-hidden="true">*/
/* 					<option value="">审批人  </option>*/
/* 				</select>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<button type="button" id="search" title="搜索" class="btn btn-info btn-sm">*/
/* 	                <i class="fa fa-search"></i>*/
/* 	            </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<button id="heightsearch" type="button" title="高级搜索" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/*                     <i class="fa fa-filter"></i>*/
/*                 </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/* 	                <i class="fa fa-refresh"></i>*/
/* 	            </button>*/
/* 			</div>*/
/* 			*/
/* 			<div class="col-sx-4" contentAuthority="157" style=" float: left;margin-right: 5px;">*/
/* 				<button id="add" title="添加" type="button" class="btn btn-info btn-sm" style=" background-color: #32CD32 !important;">*/
/* 					<i class="fa fa-plus"></i>*/
/*                </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" contentAuthority="158" style=" float: left;margin-right: 5px;">*/
/* 				<button title="批量审批" class="btn btn-info  sp  btn-sm plSp" style="background-color: #32CD32 !important; border-color: #32CD32;">*/
/* 					<i class="fa fa-check-circle-o"></i>*/
/* 	            </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<div id="filterBtns" style="display:inline-block;width:290px;height: 36px">*/
/* 					<a href="javascript:void(0);" class="myFilter" style="background: #E6E6E6;line-height:22px" data-status="a">全部</a>*/
/* 					<a href="javascript:void(0);" class="myFilter" style="line-height:22px" data-status="0">*/
/* 						</i> 待审批</a>*/
/* 					<a href="javascript:void(0);" class="myFilter" style="line-height:22px" data-status="2"> 已通过</a>*/
/* 					<a href="javascript:void(0);" class="myFilter" style="line-height:22px" data-status="1"> 未通过</a>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div id="heightsearch1" class="col-sx-12" style="position: absolute;margin-top: 35px; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;">*/
/* 				<div class="row" id="SearchCon"></div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="custom_table">*/
/* 		*/
/* 		<table id="dynamic-table" class="dynamic-table">*/
/* 			<thead>*/
/* 				<tr class="thColor ths">*/
/* 					<th class="center">*/
/* 						<label class="pos-rel">*/
/*                                 <input type="checkbox" class="ace" onclick="cs.checkAll(this.checked)"/>*/
/*                                 <span class="lbl"></span>*/
/*                         </label>*/
/* 					</th>*/
/* 					<th>操作</th>*/
/* 					<th data-num="1">审批状态</th>*/
/* 					<th data-num="2">盘点编码</th>*/
/* 					<th data-num="3">盘点日期</th>*/
/* 					<th data-num="4">仓库名称</th>*/
/* 					<th data-num="5">仓位</th>*/
/* 					<th data-num="7">库存数量</th>*/
/* 					<th data-num="8">盘点数量</th>*/
/* 					<th data-num="9">盘点差额</th>*/
/* 					<th data-num="11">备注</th>*/
/* 					<th data-num="12">创建人</th>*/
/* 					<th data-num="13">创建时间</th>*/
/* 					<th data-num="14">审批人</th>*/
/* 					<th data-num="15">审批时间</th>*/
/* 					<th data-num="16">审批回复</th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<tbody id="datalist">*/
/* */
/* 			</tbody>*/
/* 		</table>*/
/* 	</div>*/
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
/* 	<div class="popup_new" style="display:none">*/
/* 		<div class="row" >*/
/* 			<form class="item_form" role="form">*/
/* 				<div class="form_data">*/
/* 					<label style="margin-left:10px;"> 区域名称： </label>*/
/* 					<select addfield="qu" id="qy">*/
/* */
/* 					</select>*/
/* 					<label> 仓位： </label>*/
/* 					<select addfield="pos_id" id="cw">*/
/* */
/* 					</select>*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label style="margin-left:10px;"> 仓库名称： </label>*/
/* 					<select addfield="type" id="ck">*/
/* 						<option value="1">凭证仓</option>*/
/* 						<option value="2">票据仓</option>*/
/* 						<option value="3">证件仓</option>*/
/* 					</select>*/
/* 					<label> 盘点日期： </label>*/
/* 					<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<input class="date-timepicker1 required" addfield="pd_time" msg="盘点时间不能为空" class="form-control" style="height: 30px; width: 150px;padding:5px;">*/
/* 						<span class="input-group-addon" style="width:30px;padding:7px 10px;height:30px;">*/
/* 	                            <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 	                        </span>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form_data" style="margin-bottom: 20px;">*/
/* 					<label style="float:left;"> 备注： </label>*/
/* 					<textarea style="margin-left:5px;width:calc(100% - 65px);padding:5px;" addfield="remark"></textarea>*/
/* 				</div>*/
/* 				<div class="form_data" id="bm">*/
/* 					<label style="margin-left:10px;"> 仓位编码： </label>*/
/* 					<select addfield="num" id="cw1" style="width: 320px;">*/
/* 					</select>*/
/* 					<!--<label style="margin-left:10px;width:80px;"> 总共：<span class="allpd"></span> 个</label>-->*/
/* 					<label style="margin-left:10px;width:80px;"><span class="donepd">0</span> /<span class="allpd"></span></label>*/
/* 				</div>*/
/* 				<div id="infoBox">*/
/* 					<div class="">*/
/* 						<!--<span>12313</span>-->*/
/* 						<div class="custom_table" style="margin-bottom: 10px;">*/
/* 							<table id="dynamic-table">*/
/* 								<thead>*/
/* 									<tr class="thColor">*/
/* 										<th>仓库物品</th>*/
/* 										<th>库存数量</th>*/
/* 										<th>盘点数量</th>*/
/* 										<th>盘点差额</th>*/
/* 									</tr>*/
/* 								</thead>*/
/* 								<tbody id="datalist">*/
/* 									<tr>*/
/* 										<td colspan="4">*/
/* 											<div class="table-actions clearfix"></div>*/
/* 											<div style="text-align: center" class="page">暂无数据</div>*/
/* 										</td>*/
/* 									</tr>*/
/* 								</tbody>*/
/* 							</table>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				*/
/* */
/* 			</form>*/
/* 			<div class="next_list_box" style="display: none; text-align: center;">*/
/* 				<button class="next_list btn btn-info btn-sm" style="">*/
/*                        下一个*/
/*                     </button>*/
/* 			</div>*/
/* 			<div class="popup_button">*/
/* 				<button class="next_btn btn btn-info btn-sm" style="">*/
/*                        下一个*/
/*                     </button>*/
/* 				<button class="sure_button btn btn-info btn-sm" state="1" id="sure_button" style="display:none;">*/
/*                         提交*/
/*                     </button>*/
/*                     <button class="sure_button btn btn-info btn-sm" state="2" style="display:none;">*/
/*                         保存*/
/*                     </button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="label_popup" id="feedBack" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 		<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/*             box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 			<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 				<span style="display: inline-block;">请填写驳回原因</span>*/
/* 				<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 			</div>*/
/* 			<div style="padding: 10px 50px;">*/
/* 				<input type="text" width="200px" style="margin: auto;" id="labelName" />*/
/* 				<!--<hr>-->*/
/* 			</div>*/
/* 			<div style="padding:15px;text-align:right;">*/
/* 				<button class="close_label">关闭</button>*/
/* 				<button class="hold">保存</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% include 'admin/mark.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* <script type="text/javascript">*/
/* 	$(function() {*/
/* 		cs.tableheader();*/
/* 		cs.getNodes([157]);*/
/* 		if(cs.approve_authority({*/
/* 				name: '盘点',*/
/* 				nodes: [158]*/
/* 			})) {*/
/* 			$('[contentAuthority="158"]').show();*/
/* 		}*/
/* 		var order = 'ckm_new_inventory.pd_time desc';*/
/* 		var employees = {};*/
/* 		var page_size = 10;*/
/* 		var filter = '';*/
/* 		var allCw = {};*/
/* 		var cw_code = {};*/
/* 		var cw_code1 = [];*/
/* 		var kc_count = 0;*/
/* 		var pd_count = 0;*/
/* 		var pdce_count = 0;*/
/* 		var wp = []; //物品*/
/* 		var pageNum = 0;  //详情分页*/
/* 		var doneNum = 0;*/
/* 		var customDetail = {};*/
/* 		tspage();*/
/* 		*/
/* 		getCustom();*/
/* 		*/
/* 		function getCustom(){*/
/* 			*/
/* 		}*/
/* */
/* 		function tspage() {*/
/* 			if(ykp.getCookie('detailsId') && ykp.getCookie('detailsId') != '') {*/
/* 				var id = ykp.getCookie('detailsId');*/
/* 				var data = {*/
/* 					limit: page_size,*/
/* 					filter: `ckm_new_inventory.customer_id = ${id}`,*/
/* 					order: 'ckm_new_inventory.pd_time desc'*/
/* 				}*/
/* 				getList_2(data);*/
/* 				ykp.setCookie('detailsId', '', 1 / 24);*/
/* 			} else {*/
/* 				ykp.setCookie("filter", "");*/
/* 				ykp.setCookie("where", "");*/
/* 				getList();*/
/* 			}*/
/* 		}*/
/* 		*/
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_inventory/inventory',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: "",*/
/* 				limit: page_size,*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '.pageBar'*/
/* 			},*/
/* 			contentId: "#datalist", //默认排序*/
/* 			initOrder: "", //初始化sort*/
/* 			defaultOrder: order,*/
/* 			params: [{*/
/* 				id: "#dynamic-table",*/
/* 				field: ["","", "ckm_new_inventory.status","ckm_new_inventory.num", "ckm_new_inventory.create_at", "ckm_new_inventory.type", "ckm_position.name", "ckm_new_inventory.kc_num", "ckm_new_inventory.pd_num",*/
/* 				"ckm_new_inventory.pd_kc","ckm_new_inventory.remark","ckm_new_inventory.create_id", "ckm_new_inventory.create_at","ckm_new_inventory.auth_id","ckm_new_inventory.auth_time","ckm_new_inventory.auth_remark"]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* 		*/
/* 		$('#showBox').find('.close_get,.sure_button').click(function() {*/
/* 			cw_code = [];*/
/* 			cw_code1 = [];*/
/* 			kc_count = 0;*/
/* 			pd_count = 0;*/
/* 			pdce_count = 0;*/
/* 			wp = []; //物品*/
/* 			pageNum = 0;  //详情分页*/
/* 		})*/
/* */
/* 		//获取所有员工*/
/* 		ykp.doAjax({*/
/* 			url: '/api/api_employees/f7',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				select: 'bmm_employees.id,bmm_employees.name'*/
/* 			},*/
/* 			success: function(res) {*/
/* 				var data = res.data;*/
/* 				$('.advandced-search').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* 				for(var i in data) {*/
/* 					if(data[i]['name']) {*/
/* 						//employees[data[i]['id']] = data[i]['name'];*/
/* 						$('.pt-search').append(new Option(data[i]['name'], data[i]['id']));*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		});*/
/* */
/* 		$('#flush').click(function() {*/
/* 			$('[sear="ckm_new_inventory.num"]').val('');*/
/* 			$('[sear="ckm_new_inventory.create_id"]').val('').trigger('change');*/
/* 			$('[sear="ckm_new_inventory.auth_id"]').val('').trigger('change');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			filter = '';*/
/* 			getList();*/
/* 		})*/
/* */
/* 		$('.myFilter').click(function() {*/
/* 			if(!$(this).hasClass('clc')) {*/
/* 				$(this).addClass('clc').siblings().removeClass('clc');*/
/* 			}*/
/* 			var data = {*/
/* 				"limit": page_size,*/
/* 				'page': 1,*/
/* 				'order': order*/
/* 			}*/
/* 			var filter_ = $(this).attr('data-status');*/
/* 			if(filter_ == 'a') {*/
/* 				getList();*/
/* 				return;*/
/* 			}*/
/* 			filter = 'ckm_new_inventory.status = '+filter_;*/
/* 			data['filter'] = 'ckm_new_inventory.status = ' + filter_;*/
/* 			getList_2(data);*/
/* */
/* 		})*/
/* */
/* 		$('#filterBtns a').mouseover(function() {*/
/* 			$(this).addClass('over');*/
/* 		})*/
/* 		$('#filterBtns a').mouseout(function() {*/
/* 			$(this).removeClass('over');*/
/* 		})*/
/* */
/* 		function getList_2(data) {*/
/* 			search();*/
/* 			ykp.list({*/
/* 				url: '/api/api_inventory/inventory',*/
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
/* 						$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					}*/
/* 					addList(res);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		$('#changePageNum').change(function() {*/
/* 			page_size = $(this).val();*/
/* 			ykp.setCookie('page_size', page_size);*/
/* 			getList();*/
/* 		})*/
/* */
/* 		function search() {*/
/* 			var data = {*/
/* 				url: '/api/api_inventory/inventory',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: page_size,*/
/* 					order: 'ckm_new_inventory.pd_time desc'*/
/* 				}*/
/* 			}*/
/* 			cs.doSearch('#search', data, 'filter', false, function(res, _filter) {*/
/* 				filter = _filter;*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					return false;*/
/* 				} else {*/
/* 					addList(res);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		getSearch();*/
/* */
/* 		function getSearch() {*/
/* */
/* 			var list = [{*/
/* 					name: "审批状态",*/
/* 					search: "ckm_new_inventory.status",*/
/* 					type: "select",*/
/* 					option: [{*/
/* 						val: "0",*/
/* 						text: "待审批"*/
/* 					}, {*/
/* 						val: "1",*/
/* 						text: "未通过"*/
/* 					}, {*/
/* 						val: "2",*/
/* 						text: "已通过"*/
/* 					},{*/
/* 						val: "3",*/
/* 						text: "盘点中"*/
/* 					}]*/
/* 				},*/
/* 				{*/
/* 					name: "盘点编码",*/
/* 					search: "ckm_new_inventory.num",*/
/* 					type: "text"*/
/* 				},*/
/* 				{*/
/* 					name: "盘点日期",*/
/* 					search: "ckm_new_inventory.pd_time",*/
/* 					type: "time"*/
/* 				},*/
/* 				{*/
/* 					name: "仓库名称	",*/
/* 					search: "ckm_new_inventory.type",*/
/* 					type: "select",*/
/* 					range: "true",*/
/* 					option: [{*/
/* 						val: "1",*/
/* 						text: "凭证仓"*/
/* 					}, {*/
/* 						val: "2",*/
/* 						text: "单据仓"*/
/* 					}, {*/
/* 						val: "3",*/
/* 						text: "证件仓"*/
/* 					}]*/
/* 				},*/
/* 				{*/
/* 					name: "仓位",*/
/* 					search: "ckm_position.id",*/
/* 					type: "select",*/
/* 					class:"cw"*/
/* 				},*/
/* 				{*/
/* 					name: "仓库物品",*/
/* 					search: "ckm_new_inventory.kc_goods",*/
/* 					type: "text",*/
/* 					range: "true"*/
/* 				},*/
/* 				{*/
/* 					name: "库存数量",*/
/* 					search: "ckm_new_inventory.kc_num",*/
/* 					type: "text",*/
/* 					range: "true"*/
/* 				},*/
/* 				{*/
/* 					name: "盘点数量",*/
/* 					search: "ckm_new_inventory.pd_num",*/
/* 					type: "text",*/
/* 					range: "true"*/
/* 				},*/
/* 				{*/
/* 					name: "盘点差额",*/
/* 					search: "ckm_new_inventory.pd_kc",*/
/* 					type: "text",*/
/* 					range: "true"*/
/* 				},*/
/* //				{*/
/* //					name: "盘点结果",*/
/* //					search: "ckm_new_inventory.remark",*/
/* //					type: "text"*/
/* //				},*/
/* 				{*/
/* 					name: "备注",*/
/* 					search: "ckm_new_inventory.remark",*/
/* 					type: "text"*/
/* 				},*/
/* 				{*/
/* 					name: "创建人",*/
/* 					search: "ckm_new_inventory.create_id",*/
/* 					type: "select",*/
/* 					url: "/api/api_employees/f7",*/
/* 					key: "people"*/
/* 				},*/
/* 				{*/
/* 					name: "创建时间",*/
/* 					search: "ckm_new_inventory.create_at",*/
/* 					type: "time"*/
/* 				},*/
/* 				{*/
/* 					name: "审批人",*/
/* 					search: "ckm_new_inventory.auth_id",*/
/* 					type: "select",*/
/* 					url: "/api/api_employees/f7",*/
/* 					key: "people"*/
/* 				},*/
/* 				{*/
/* 					name: "审批时间",*/
/* 					search: "ckm_new_inventory.auth_time",*/
/* 					type: "time"*/
/* 				}*/
/* 			];*/
/* 			cs.getAllCw(function(option) {*/
/* 				$('#heightsearch1 .cw').html(option);*/
/* 				$('#heightsearch1 .cw').select2({*/
/* 					allowClear: true*/
/* 				})*/
/* 			})*/
/* */
/* 			cs.getSearch({*/
/* 				list: list,*/
/* 				el: "#heightsearch",*/
/* 				el1: "#heightsearch1"*/
/* 			}, dohSearch);*/
/* 			*/
/* 			function dohSearch() {*/
/* 				*/
/* 				var data = {*/
/* 					url: '/api/api_inventory/inventory',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						limit: page_size,*/
/* 						order: 'ckm_new_inventory.pd_time desc',*/
/* 						filter: 'filter'*/
/* 					}*/
/* 				}*/
/* 				cs.hSearch('.search1', data, 'filter', false, function(res, _filter) {*/
/* 					filter = _filter;*/
/* 					$('.in').removeClass('modal-backdrop');*/
/* 					$("#heightsearch1").slideUp();*/
/* 					$("#heightsearch").removeClass('active').css('z-index', '');*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt('暂无数据！');*/
/* 						}, 1000);*/
/* 						$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					}*/
/* 					addList(res);*/
/* 				})*/
/* 			}*/
/* 		}*/
/* */
/* 		//getList()*/
/* 		function getList() {*/
/* 			search();*/
/* 			ykp.list({*/
/* 				url: '/api/api_inventory/inventory',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: page_size,*/
/* 					order: 'ckm_new_inventory.create_at desc'*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt('暂无数据！');*/
/* 						}, 1000);*/
/* 						$('#datalist').html('<tr><td colspan="30" style="text-align:center !important;color:#7d7d7d;">暂无数据</td></tr>');*/
/* 						return false;*/
/* 					}*/
/* 					addList(res);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		function addList(res) {*/
/* 			var content = [];*/
/* 			var data = res.data.items;*/
/* 			var Status = ['待审批', '未通过', '已通过','盘点中']; //审核状态*/
/* 			var Type = ['', '凭证仓', '单据仓', '证件仓']; //仓库名称*/
/* */
/* 			var styles = []; //th  display样式*/
/* 			$('.custom_table .ths th').not(':first').each(function() {*/
/* 				styles.push($(this).css('display'));*/
/* 			});*/
/* */
/* 			//审批权限为true可以审批,为false不可审批*/
/* 			var spApp = cs.approve_authority({*/
/* 				name: '盘点',*/
/* 				nodes: [160]*/
/* 			});*/
/* 			var cxApp = cs.approve_authority({*/
/* 				name: '盘点',*/
/* 				nodes: [270]*/
/* 			});*/
/* 			var edit_statu = cs.getNodes([159], true);*/
/* */
/* 			var pd_data = []; //盘点数据*/
/* 			var pd_result = []; //盘点结果*/
/* 			//物品数据html*/
/* 			var goodsData_html = [];*/
/* 			for(var i in data) {*/
/* 				pd_data = data[i]['list'];*/
/* 				for(var k in pd_data) {*/
/* 					if(pd_data[k]['pd_kc'] != 0) {*/
/* 						pd_result.push(pd_data[k]['goods'] + '：-' + pd_data[k]['pd_kc']);*/
/* 					}*/
/* */
/* 				}*/
/* */
/* 				for(var k in pd_data) {*/
/* 					goodsData_html.push(pd_data[k]['goods'] + ':' + pd_data[k]['pd_kc']);*/
/* 				}*/
/* */
/* 				content.push('<tr data-id="' + data[i]['ckm_new_inventory.id'] + '"  data-status="' + data[i]['ckm_new_inventory.status'] + '">' +*/
/* 					'<td class="center">' +*/
/* 					'<label class="pos-rel">' +*/
/* 					'<input type="checkbox" name="check" class="ace"/>' +*/
/* 					'<span class="lbl"></span>' +*/
/* 					'</label>' +*/
/* 					'</td>' +*/
/* 					'<td style="display:' + styles[0] + '">' +*/
/*                     '<a href="#" class="pos-rel btOrange info" style=" color:#fff !important" title="详情"><i class="fa fa-info "></i></a> ' +*/
/* 					'<label class="pos-rel"><a href="#" class="pos-rel btBlue edit" style="display:' + (edit_statu ? (data[i]['ckm_new_inventory.status'] == 1 ||  data[i]['ckm_new_inventory.status'] == 3 ? 'inline-block' : 'none') : 'none') + '; color:#fff !important" contentAuthority="159" title="编辑"><i class="fa fa-pencil-square-o"></i></a> ' +*/
/* 					'<a href="#"  class="sp pos-rel sp btOrange" contentAuthority="270" data-status = "0" style="display:' + (cxApp ? (data[i]['ckm_new_inventory.status'] == 2 ? 'inline-block' : 'none') : 'none') + '; color:#fff !important" title="撤销"><i class="fa fa-rotate-left"></i></a> ' +*/
/* 					'<a href="#"  class="sp pos-rel sp btGreen" contentAuthority="160" data-status = "2" style="display:' + (spApp ? (data[i]['ckm_new_inventory.status'] == 0 ? 'inline-block' : 'none') : 'none') + '; color:#fff !important" title="通过"><i class="fa fa-check-circle-o"></i></a> ' +*/
/* 					'<a href="#"  class="sp pos-rel sp btRed" contentAuthority="160" data-status = "1" style="display:' + (spApp ? (data[i]['ckm_new_inventory.status'] == 0 ? 'inline-block' : 'none') : 'none') + '; color:#fff !important" title="驳回"><i class="fa fa-times-circle"></i></a>' +*/
/* 					'<label></td>' +*/
/* 					'<td style="display:' + styles[1] + '" data-num="1">' + Status[data[i]['ckm_new_inventory.status']] + '</td>' +*/
/* 					'<td style="display:' + styles[2] + '" data-num="2">' + data[i]['ckm_new_inventory.num'] + '</td>' +*/
/* 					'<td style="display:' + styles[3] + '" data-num="3">' + cs.getNowTime(data[i]['ckm_new_inventory.create_at']) + '</td>' +*/
/*     //                '<td style="display:' + styles[3] + '" data-num="3">' + (data[i]['ckm_new_inventory.create_at'] != '0' ? cs.getNowTime(data[i]['ckm_new_inventory.create_at'],true) : '') + '</td>' +*/
/* 					'<td style="display:' + styles[4] + '" data-num="4">' + Type[data[i]['ckm_new_inventory.type']] + '</td>' +*/
/* 					'<td style="display:' + styles[5] + '" data-num="5">' + data[i]['ckm_position.name'] + '</td>' +*/
/* //					'<td style="display:' + styles[6] + '" data-num="6">' + data[i]['ckm_new_inventory.pd_goods'] + '</td>' +*/
/* 					'<td style="display:' + styles[7] + '" data-num="7">' + data[i]['ckm_new_inventory.kc_num'] + '</td>' +*/
/* 					'<td style="display:' + styles[8] + '" data-num="8">' + data[i]['ckm_new_inventory.pd_num'] + '</td>' +*/
/* 					'<td style="display:' + styles[9] + '" data-num="9">' + Math.abs(data[i]['ckm_new_inventory.pd_kc']) + '</td>' +*/
/* //					'<td style="display:' + styles[10] + '" data-num="10"  title="' + goodsData_html.join('&#13;') + '"><label style="width:100px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;" >' + goodsData_html.join('；') + '</label></td>' +*/
/* 					'<td style="display:' + styles[11] + '" data-num="11">' + data[i]['ckm_new_inventory.remark'] + '</td>' +*/
/* 					'<td style="display:' + styles[12] + '" data-num="12">' + (data[i]['createInfo'] ? data[i]['createInfo']['name'] : "") + '</td>' +*/
/* 					'<td style="display:' + styles[13] + '" data-num="13">' + (data[i]['ckm_new_inventory.create_at'] != '0' ? cs.getNowTime(data[i]['ckm_new_inventory.create_at'],true) : '') + '</td>' +*/
/* 					'<td style="display:' + styles[14] + '" data-num="14">' + (data[i]['authInfo'] ? data[i]['authInfo']['name'] : '') + '</td>' +*/
/* 					'<td style="display:' + styles[15] + '" data-num="15">' + (data[i]['ckm_new_inventory.auth_time'] != 0 ? cs.getNowTime(data[i]['ckm_new_inventory.auth_time'],true) : "") + '</td>' +*/
/* 					'<td style="display:' + styles[16] + '" data-num="16">' + (data[i]['ckm_new_inventory.auth_remark'] != 0 ? data[i]['ckm_new_inventory.auth_remark'] : "") + '</td>' +*/
/* 					'</tr>');*/
/* */
/* 				//清空数据*/
/* 				pd_data = []; //盘点数据*/
/* 				pd_result = []; //盘点结果*/
/* 			}*/
/* 			$('#datalist').html(content.join(''));*/
/* */
/* 			$("#datalist tr").find('.sp').click(function() {*/
/* 				var status = $(this).attr('data-status');*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				changeStatus(status, id);*/
/* 			})*/
/* */
/* 			//编辑*/
/* 			$('.edit').unbind('click').click(function() {*/
/* 				var index = $(this).parents('tr').index();*/
/* 				var _data = data[index];*/
/* 				get_info_edit(_data);*/
/* 			})*/
/* */
/* 			$('.info').unbind('click').click(function() {*/
/* 				var index = $(this).parents('tr').index();*/
/* 				var _data = data[index];*/
/* 				get_info_edit(_data, true);*/
/* 			})*/
/* */
/* 			plsp();*/
/* 		}*/
/* 			*/
/* 		//详情编辑*/
/* 		function get_info_edit(data, status) {*/
/* 			var id = data['ckm_new_inventory.id'];*/
/* 			showMark('.popup_new');*/
/* 			$('#showBox .title').text('编辑盘点信息');*/
/* 			*/
/* 			if(!status) {*/
/* 				$('#templateCon .sure_button').show();*/
/* 				$('#templateCon #sure_button').hide();*/
/* 			}*/
/* 			if(status) {*/
/* 				$('#templateCon .popup_button').hide();*/
/* 				$('#templateCon #bm').hide();*/
/* 			}*/
/* 			*/
/* 			*/
/* 			doneNum = 0;*/
/* 			JSON.parse(data['ckm_new_inventory.content']).forEach(function(item) {*/
/* 				cw_code[item.customer_id] = {};*/
/* 				cw_code[item.customer_id]['content'] = item.goodsList;*/
/* 				cw_code[item.customer_id]['name'] = item.name;*/
/* 				cw_code[item.customer_id]['is_edit'] = item.is_edit;*/
/* 				if(item.is_edit == 1) {*/
/* 					doneNum++;*/
/* 				}*/
/* 			})*/
/* 			$('#templateBox .donepd').text(doneNum);*/
/* 			$('#templateBox').find('input[addfield=pd_time]').val(cs.getNowTime(data['ckm_new_inventory.pd_time']));*/
/* 			$('#templateBox #ck').find('option[value=' + data['ckm_new_inventory.type'] + ']').attr('selected', true);*/
/* 			$('#templateBox').find('textarea[addfield=remark]').val(data['ckm_new_inventory.premarkd_time']);*/
/* 			getCw(data['ckm_new_inventory.pos_id'], data['ckm_new_inventory.qy']);*/
/* 			if(!status) {  //编辑*/
/* 				$('#templateBox #cw').trigger('change');*/
/* 				$('#templateBox #cw').change(function() {*/
/* 					var id = data['ckm_new_inventory.pos_id'];*/
/* 					var _this = $(this)*/
/* 					var type = $('#templateBox #ck').val();*/
/* 					setTimeout(function(){*/
/* 						var text = _this.find('option:selected').text();*/
/* 						changeCw(id, text,cw_code); //切换仓位获取物品*/
/* 					},100)*/
/* 				})*/
/* 				$('#templateBox #cw1').change(function() {*/
/* 					var id = $(this).val();*/
/* 					var type = $('#templateBox #ck').val();*/
/* 					getGoods(id, type); //切换仓位获取物品*/
/* */
/* 				})*/
/* 				//计算差额*/
/* 				calculateDifference();*/
/* 			} else { //详情*/
/* 				cw_code1 = [];*/
/* 				//差额按倒序排序*/
/* 				var content = JSON.parse(data['ckm_new_inventory.content']);*/
/* */
/* 				for(i=0;i<content.length-1;i++){*/
/* 			        for(j=0;j<content.length-1-i;j++){*/
/* 			            if(parseInt(content[j].pdce) < parseInt(content[j+1].pdce)){*/
/* 			                var temp=content[j];*/
/* 			                content[j]=content[j+1];*/
/* 			                content[j+1]=temp;*/
/* 			            }*/
/* 			        }*/
/* 			   }*/
/* 				content.forEach(function(item) {*/
/* 					cw_code1.push({*/
/* 						content: item.goodsList,*/
/* 						name: item.name,*/
/* 						pdce:item.pdce,*/
/* 						custom_id:item.customer_id,*/
/* 					})*/
/* 				})*/
/* 				*/
/* 				getInfoList();*/
/* 			}*/
/* 			$('#templateCon').find('#qy,#cw,#ck').prop('disabled', true);*/
/* 			//查看详情 全部禁用*/
/* 			if(status) {*/
/* 				$('#showBox .title').text('查看盘点信息');*/
/* 				$('#templateBox').find('[addfield],.checkAmount').attr('disabled', true);*/
/* 			}else{*/
/* 				addCheckRecord(data['ckm_new_inventory.id']);*/
/* 			}*/
/* */
/* 			//计算差额*/
/* //			calculateDifference();*/
/* */
/* 			cs.timeplug();*/
/* 			*/
/* 			*/
/* 			*/
/* 		}*/
/* 		*/
/* 		function getdonepdNum() {*/
/* 			var num = 0; */
/* 			$('#templateBox #cw1').find('option').each(function(){*/
/* 				if($(this).hasClass('ddd')) {*/
/* 					num ++;*/
/* 				}*/
/* 			})*/
/* 			if((num+1)  == $("#templateBox .allpd").text()){*/
/* 				$("#templateBox #sure_button").show();*/
/* 				$("#templateBox .next_btn").hide();*/
/* 			}*/
/* 			return num;*/
/* 		}*/
/* */
/* 		//盘点详情*/
/* 		function getInfoList() {*/
/* */
/* 			var num = 0;*/
/* 			var data = cw_code1;*/
/* 			$('#templateBox #infoBox').children().first().remove();*/
/* 			showList()*/
/* 		}*/
/* */
/* 		function showList() {*/
/* 			var content = '';*/
/* 			var amount = 0;*/
/* 			var pan_num = 0;*/
/* 			var infoList = [];*/
/* 			var  data = cw_code1.slice(pageNum,pageNum+3);*/
/* 			var customInfo = {};*/
/* 			$('#templateBox .next_list_box').show();*/
/* 			if(data.length < 3 ){*/
/* 				$('#templateBox .next_list_box').remove();*/
/* 			}*/
/* 			*/
/* 			ykp.doAjax({*/
/* 				url:"/api/api_inventory/get_cus",*/
/* 				method:"post",*/
/* 				data:{*/
/* 					pos_id:7*/
/* 				},*/
/* 				async:false,*/
/* 				success:function(res){*/
/* 					var _data = res.data;*/
/* 					for(var i in _data) {*/
/* 						customInfo[_data[i].customer_id] = _data[i].name*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 			console.log(data);*/
/* 			for(var i = 0; i < data.length; i++ ) {*/
/* 				content = "";*/
/* 				amount = 0;*/
/* 				pan_num = 0;*/
/*                 content += `<div class="">*/
/* 						<span>${(data[i]['name'] ? data[i]['name'] : customInfo[data[i]['custom_id']])?(data[i]['name'] ? data[i]['name'] : customInfo[data[i]['custom_id']]):""}</span>*/
/* 						<div class="custom_table" style="margin-bottom: 10px;">*/
/* 							<table id="dynamic-table">*/
/* 								<thead>*/
/* 									<tr class="thColor">*/
/* 										<th>仓库物品</th>*/
/* 										<th>库存数量</th>*/
/* 										<th>盘点数量</th>*/
/* 										<th>盘点差额</th>*/
/* 									</tr>*/
/* 								</thead>*/
/* 								<tbody id="datalist">`;*/
/* 				for(var j in data[i]['content']) {*/
/* 					amount += parseInt(data[i]['content'][j]['kc_num']);*/
/* 					pan_num += parseInt(data[i]['content'][j]['pa_num']);*/
/* 					content += ` */
/* 			        	<tr class="single">*/
/* 			        		<td class="pd_goods">${data[i]['content'][j]['goods']}</td>*/
/* 						    <td class="kc_num">${data[i]['content'][j]['kc_num']}</td>*/
/* 						    <td><input type="text" value="${data[i]['content'][j]['pa_num']}" class="checkAmount"/></td>*/
/* 						    <td class="chechDifference">${data[i]['content'][j]['pd_kc']}</td>*/
/* 					</tr>`;*/
/* 				}*/
/* 				*/
/* 				if(amount == 0 && pan_num == 0){*/
/* //					content += `<tr><td colspan="4"> <div style="text-align: center" class="page">暂无数据</div></td></tr>`;*/
/* 					content += `<tr id='zj'>*/
/* 			        <td>总计</td>*/
/* 			        	<td class="kc_num">0</td>*/
/* 			        	<td class="checkAmount">0</td>*/
/* 			        	<td class="chechDifference">0</td>*/
/* 			        <tr>`;*/
/* 				}else{*/
/* 					content += `<tr id='zj'>*/
/* 			        <td>总计</td>*/
/* 			        	<td class="kc_num">${amount}</td>*/
/* 			        	<td class="checkAmount">${pan_num}</td>*/
/* 			        	<td class="chechDifference">${Math.abs(pan_num-amount)}</td>*/
/* 			        <tr>`;*/
/* 				}*/
/* 				*/
/* 		        */
/* 		        content += `</tbody></table></div></div>`;*/
/* 		        */
/* 		        infoList.push(content);*/
/* 			}*/
/* 			pageNum += 3;*/
/* 			num += 1;*/
/* 			$('#templateBox #infoBox').append(infoList.join(''));*/
/* 			if(status) {*/
/* 				$('#templateBox').find('input,select,textarea').attr('disabled', true);*/
/* 				$('#templateBox .sure_button').hide();*/
/* 			}*/
/* 			$('.close_get').click(function() {*/
/* 				pageNum = 0;*/
/* 			})*/
/* 			infoScrool();*/
/* 			*/
/* 		}*/
/* 		*/
/* 		*/
/* 		function infoScrool() {*/
/* 			var height = $('#templateBox').height();*/
/* 			var parHeight = $('#templateBox').parent().height();*/
/* 			var status;*/
/* 			$('#templateBox').unbind('scroll').scroll(function() {*/
/* 				if(status) {*/
/* 					clearInterval(status);*/
/* 				}*/
/* 				if($(this).scrollTop() >  200) {*/
/* 					status = setTimeout(function() {*/
/* 						showList()*/
/* 					},300)*/
/* 				}*/
/* 			})*/
/* 			*/
/* 			$('#templateBox .next_list_box').click(function() {*/
/* 				showList()*/
/* 			})*/
/* 			*/
/* 		}*/
/* 		*/
/* */
/* 		function plsp() {*/
/* 			$('.plSp').click(function() {*/
/* 				var num = 0;*/
/* 				var status = '';*/
/* 				var coldata = [];*/
/* 				var Statu = false;*/
/* 				$('#datalist').find('input[type=checkbox]').each(function(i) {*/
/* 					if($(this).is(':checked')) {*/
/* 						num++;*/
/* 						status = $(this).parents('tr').attr('data-status') == '0' ? 2 : 0;*/
/* 						if($(this).parents('tr').attr('data-status') != 0) {*/
/* 							ykp.prompt('审批过的不能批量审批!');*/
/* 							Statu = false;*/
/* 						} else {*/
/* 							coldata.push({*/
/* 								id: $(this).parents('tr').attr('data-id'),*/
/* 								status: status*/
/* 							});*/
/* 							Statu = true;*/
/* 						}*/
/* */
/* 					}*/
/* 				})*/
/* 				if(num == 0) {*/
/* 					ykp.prompt('请选择再审批');*/
/* 				} else {*/
/* 					if(Statu) {*/
/* 						ykp.doAjax({*/
/* 							url: "/api/api_inventory/batch_sh_inventory",*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								data: JSON.stringify(coldata),*/
/* 								type: 1*/
/* 							},*/
/* 							success: function(res) {*/
/* 								ykp.prompt('审批成功');*/
/* 								getList(1);*/
/* 							}*/
/* 						})*/
/* 					}*/
/* 				}*/
/* */
/* 			})*/
/* 		}*/
/* */
/* 		function changeStatus(status, id) {*/
/* 			var data = {*/
/* 				url: '/api/api_inventory/sh_inventory',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					id: id,*/
/* 					status: status*/
/* 				}*/
/* 			}*/
/* 			if(status == 1) {*/
/* 				$('#feedBack').show();*/
/* 				$('#feedBack .hold').click(function() {*/
/* 					var approve_reply = $('#feedBack').find('input').val();*/
/* 					if(approve_reply == '') {*/
/* 						ykp.prompt('不能为空！');*/
/* 						return false;*/
/* 					}*/
/* 					//					data.data.approve_reply = approve_reply.trim();*/
/* 					data.data.auth_remark = approve_reply;*/
/* 					setStatus(data);*/
/* 					$('.close_label').parents('.label_popup').fadeOut();*/
/* 				})*/
/* 				cs.closePop();*/
/* 			} else if(status == 0) {*/
/* //				bootbox.confirm('确认撤销审批？', function(flag) {*/
/* //					if(flag) {*/
/* //						setStatus(data);*/
/* //					}*/
/* //				})*/
/*           layui.use('layer',function(){*/
/* 						var layer = layui.layer;*/
/* 						layer.confirm('确认撤销审批？',function(flag){*/
/* 							if(flag){*/
/*                 			layer.closeAll();*/
/*                 			setStatus(data);*/
/*                 		}*/
/* 						})*/
/* 					})*/
/* 			} else {*/
/* 				setStatus(data);*/
/* 			}*/
/* */
/* 		}*/
/* */
/* 		function setStatus(data) {*/
/* 			ykp.doAjax({*/
/* 				url: data.url,*/
/* 				methods: data.methods,*/
/* 				data: data.data,*/
/* 				success: function(res) {*/
/* 					ykp.prompt('审批成功!');*/
/* 					getList();*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		cs.custorm_check('.dynamic-table', '#datalist', true);*/
/* 		//获取仓位*/
/* 		function getCw(id, qu) {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_inventory/get_all_pos',*/
/* 				method: 'get',*/
/* 				data: {},*/
/* 				success: function(res) {*/
/* 					var option = [];*/
/* 					var data = res.data;*/
/* 					allCw = data;*/
/* 					for(var i in data) {*/
/* 						option.push('<option value="' + i + '">' + i + '</option>')*/
/* 					}*/
/* 					$('#templateBox #qy').html(option.join(''));*/
/* 					if(qu) {*/
/* 						$('#templateBox #qy').find('option[value=' + qu + ']').attr('selected', true);*/
/* 					}*/
/* 					changeQu();*/
/* 					$('#templateBox #qy').trigger('change');*/
/* 					if(id) {*/
/* 						$('#templateBox #cw').find('option[value=' + id + ']').attr('selected', true);*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//切换区域切换仓位*/
/* 		function changeQu() {*/
/* 			$('#templateBox #qy').change(function() {*/
/* 				var val = $(this).val();*/
/* 				var cw = [];*/
/* 				for(var i in allCw[val]) {*/
/* 					cw.push('<option value="' + allCw[val][i]['id'] + '">' + allCw[val][i]['name'] + '</option>')*/
/* 				}*/
/* 				$('#templateBox #cw').html(cw.join(''));*/
/* 				$('#templateBox #cw').trigger('change');*/
/* 				//				changeCw();*/
/* 			})*/
/* 		}*/
/* */
/* 		//切换仓位  改变仓库名称*/
/* 		function changeCw(id, text,cw_code) {*/
/* 			console.log(text);*/
/* 			ykp.doAjax({*/
/* 				url: "/api/api_inventory/get_cus",*/
/* 				method: "post",*/
/* 				data: {*/
/* 					pos_id: id*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					if(res.data == "") {*/
/* 						ykp.prompt('此仓位没有客户');*/
/* 						$('#templateBox #cw1').html("");*/
/* 						return false;*/
/* 					}*/
/* 					var custom = '';*/
/* 					$('#templateBox .allpd').text(data.length);*/
/* 					var donepdl = $('#templateBox .donepd').text()*/
/* 					if((donepdl++) == data.length || donepdl == data.length){*/
/* 						$('#templateBox #sure_button').show();*/
/* 						$('#templateBox .next_btn').hide();*/
/* 					}*/
/* 					for(var i in data) {*/
/* 						if(cw_code) {*/
/* 							custom += `<option class="${cw_code[data[i].customer_id] ? (cw_code[data[i].customer_id]['is_edit'] == 1 ?'ddd' : '') : ''}" style="background: ${cw_code[data[i].customer_id] ? (cw_code[data[i].customer_id]['is_edit'] == 1 ?'rgb(221, 221, 221)' : '') : ''}" data_num="${data[i].pos_num}" value="${data[i].customer_id}">${"["+text+data[i].pos_num+"] "+data[i].name}</option>`;*/
/* 						}else {*/
/* 							custom += `<option  data_num="${data[i].pos_num}" value="${data[i].customer_id}">${"("+text+data[i].pos_num+")"+data[i].name}</option>`;*/
/* 						}*/
/* 					}*/
/* 					$('#templateBox #cw1').html(custom);*/
/* 					var id = $('#templateBox #cw1').val();*/
/* 					getGoods(id); //切换仓位获取物品*/
/* 					//下一步切换仓位编码*/
/* 					nextCw();*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//添加盘点*/
/* 		$('#add').click(function() {*/
/* */
/* 			showMark('.popup_new');*/
/* 			$('#showBox .title').text('添加盘点信息');*/
/* 			getCw()*/
/* */
/* 			$('#templateCon .sure_button').show();*/
/* 			$('#templateCon #sure_button').hide();*/
/* 			$('#templateBox #cw').change(function() {*/
/* 				var id = $(this).val();*/
/* 				var text = $(this).find('option:selected').text();*/
/* 				var type = $('#templateBox #ck').val();*/
/* 				changeCw(id, text); //切换仓位获取物品*/
/* */
/* 			})*/
/* */
/* 			$('#templateBox #cw1').change(function() {*/
/* 				var id = $(this).val();*/
/* 				var type = $('#templateBox #ck').val();*/
/* 				getGoods(id, type); //切换仓位获取物品*/
/* */
/* 			})*/
/* 			$('#templateBox #ck').change(function() {*/
/* 				var type = $(this).val();*/
/* 				var id = $('#templateBox #cw').val();*/
/* 				getGoods(id, type); //切换仓库获取物品*/
/* 			})*/
/* 			cs.timeplug();*/
/* */
/* 			addCheckRecord();*/
/* 		});*/
/* */
/* 		//下一步切换仓位编码*/
/* 		function nextCw() {*/
/* 			doneNum = 0;*/
/* 			$('#templateBox .next_btn').unbind('click').click(function() {*/
/* 				var id = $('#templateBox #cw1').val(); //选中的仓位编码对应的id*/
/* 				$('#templateCon').find('#qy,#cw,#ck').prop('disabled', true);*/
/* //				if($('#templateCon .single').length == 0) {*/
/* //					ykp.prompt('该客户没有物品，请点击下一个');*/
/* //				}*/
/* 				*/
/* 				*/
/* 				getContent(id);*/
/* */
/* 				//获取当前option的index   后面为  下一个操作*/
/* 				if(parseInt($('#templateBox .allpd').text()) - parseInt($('#templateBox .donepd').text()) == 0) {*/
/* 					ykp.prompt('添加完成，请保存');*/
/* 					return false;*/
/* 				}*/
/* //				doneNum ++;*/
/* 				var el = $('#templateBox #cw1');*/
/* 				var length = el.find('option').length;*/
/* 				var index = el.find('option:selected').index();*/
/* 				if(index + 1 < length) {*/
/* 					if(!el.find('option:selected').hasClass('ddd')) {*/
/* 						el.find('option:selected').css('background', '#ddd');*/
/* 						el.find('option:selected').addClass('ddd');*/
/* 					}*/
/* 					el.find('option').eq(index + 1).attr('selected', true);*/
/* 					el.trigger('change');*/
/* 				} else if(index + 1 == length) {*/
/* 					ykp.prompt('您还有' + (parseInt($('#templateBox .allpd').text()) - $('#templateBox .donepd').text() ) + '个没有添加，请确认后保存');*/
/* 				} else {*/
/* 					el.find('option:selected').css('background', '#ddd');*/
/* 					el.find('option:selected').addClass('ddd');*/
/* 					var index1 = el.find('option').not('.ddd').eq(0).index();*/
/* 					el.find('option').eq(index1).attr('selected', true);*/
/* 					el.trigger('change');*/
/* 				}*/
/* 				$('#templateBox .donepd').text(getdonepdNum());*/
/* 				*/
/* 			})*/
/* 		}*/
/* */
/* 		function getContent(id) {*/
/* 			var pd_infos = []; //存放 单个公司的所有物品*/
/* 			var pd_info = {}; //存放单个物品数据*/
/* 			$('#templateCon .single').each(function() {*/
/* 				pd_info = {};*/
/* 				pd_info['goods'] = $(this).children('.pd_goods').text();*/
/* 				pd_info['kc_num'] = $(this).children('.kc_num').text();*/
/* 				pd_info['pa_num'] = $(this).find('.checkAmount').val();*/
/* 				pd_info['pd_kc'] = $(this).children('.chechDifference').text();*/
/* */
/* 				pd_infos.push(pd_info);*/
/* */
/* 				wp.push($(this).children('.pd_goods').text())*/
/* 			});*/
/* 			*/
/* 			cw_code[id] = {};*/
/* 			cw_code[id]['content'] = pd_infos;*/
/* 			cw_code[id]['num'] = $('#templateBox #cw1').find('option:selected').attr('data_num'); //仓位编码*/
/* 			cw_code[id]['custom_name'] = $('#templateBox #cw1').find('option:selected').text();*/
/* 			cw_code[id]['pdce'] =  $('#templateBox #zj').find('.chechDifference').text();  //判断差额*/
/* 			pd_infos = [];*/
/* */
/* 			kc_count += $('#templateBox #zj .kc_num').text() ? parseInt($('#templateBox #zj .kc_num').text()) : 0;*/
/* 			pd_count += $('#templateBox #zj .checkAmount').text() ? parseInt($('#templateBox #zj .checkAmount').text()) : 0;*/
/* 			pdce_count += $('#templateBox #zj .chechDifference').text() ? parseInt($('#templateBox #zj .chechDifference').text()) : 0;*/
/* 			return false;*/
/* 		}*/
/* 		*/
/* 		//点击保存 向服务器发送数据*/
/* 		function addCheckRecord(id) {*/
/* */
/* 			$('#templateCon .sure_button').click(function() {*/
/* 				var Id = $('#templateBox #cw1').val(); //选中的仓位编码对应的id*/
/* 				var index = $(this).attr('state');*/
/* 				getContent(Id); //防止最后一条数据没有保存到*/
/* 				var postData = {};*/
/* 				var status = false;*/
/* */
/* 				$('#templateCon [addfield]').each(function(i, e) {*/
/* 					if($(this).val() == '' && $(this).attr('addfield') != 'remark') {*/
/* 						status = false;*/
/* 						ykp.prompt($(this).attr("msg"));*/
/* 						return false;*/
/* 					} else {*/
/* 						if($(this).attr('addfield') == 'pd_time') {*/
/* 							postData[$(this).attr('addfield')] = new Date($(this).val()) / 1000;*/
/* 							return true;*/
/* 						}*/
/* */
/* 						postData[$(this).attr('addfield')] = $(this).val();*/
/* 						status = true;*/
/* 					}*/
/* 				});*/
/* */
/* 				var content = [];*/
/* 				for(var i in cw_code) {*/
/* 					content.push({*/
/* 						customer_id: i,*/
/* 						goodsList: cw_code[i].content,*/
/* 						num: cw_code[i].num,*/
/* 						name: cw_code[i].custom_name,*/
/* 						is_edit:1,*/
/* 						pdce:cw_code[i].pdce,*/
/* 					})*/
/* 				}*/
/* 				var temp = [];*/
/* 				for(var i=0;i<content.length;i++) {*/
/* 					for(var j=0;j<content.length-1-i;j++){*/
/* 						if(content[j].num > content[j+1].num){*/
/* 							temp= content[j];*/
/* 			                content[j]=content[j+1];*/
/* 			                content[j+1]=temp;*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 				postData['content'] = JSON.stringify(content);*/
/* 				postData['pd_num'] = pd_count;*/
/* 				postData['kc_num'] = kc_count;*/
/* 				postData['pd_kc'] = pdce_count;*/
/* 				postData['pd_goods'] = JSON.stringify(Array.from(new Set(wp)));*/
/* 				var url = '/api/api_inventory/add_or_edit_inventory';*/
/* 				if(id) {*/
/* 					postData.id = id;*/
/* 				}*/
/* 				var type = "";*/
/* 				postData.status = index == 1 ? 0 : 3;*/
/* 				if(status) {*/
/* 					ykp.doAjax({*/
/* 						url: url,*/
/* 						method: 'post',*/
/* 						data: postData,*/
/* 						success: function(res) {*/
/* 							var msg = id ? '编辑成功' : '添加成功';*/
/* 							ykp.prompt(msg);*/
/* 							cs.close();*/
/* 							getList();*/
/* 							cw_code = {};*/
/* 							cw_code = [];*/
/* 						}*/
/* 					});*/
/* 				}*/
/* 				*/
/* 			});*/
/* 			*/
/* 			*/
/* 		};*/
/* */
/* 		//获取仓位对应仓库中所有物品库存数量*/
/* 		function getGoods(id, type, status) {*/
/* 			if(cw_code[id] && cw_code[id].length != 0) {*/
/* 				var content = '';*/
/* 				var amount = 0;*/
/* 				var pan_num = 0;*/
/* 				for(var i in cw_code[id]['content']) {*/
/* 					amount += parseInt(cw_code[id]['content'][i]['kc_num']);*/
/* 					pan_num += parseInt(cw_code[id]['content'][i]['pa_num']);*/
/* 					content += ` */
/* 		        				<tr class="single">*/
/* 		        					<td class="pd_goods">${cw_code[id]['content'][i]['goods']}</td>*/
/* 					                <td class="kc_num">${cw_code[id]['content'][i]['kc_num']}</td>*/
/* 					                <td><input type="text" value="${cw_code[id]['content'][i]['pa_num']}" class="checkAmount"/></td>*/
/* 					                <td class="chechDifference">${cw_code[id]['content'][i]['pd_kc']}</td>*/
/* 					            </tr>`*/
/* 				}*/
/* 				if(amount == 0 && pan_num == 0){*/
/* 					content += `<tr><td colspan="4"> <div style="text-align: center" class="page">暂无数据</div></td></tr>`;*/
/* 				}else{*/
/* 					content += `<tr id='zj'>*/
/* 			        <td>总计</td>*/
/* 			        	<td class="kc_num">${amount}</td>*/
/* 			        	<td class="checkAmount">${pan_num}</td>*/
/* 			        	<td class="chechDifference">${Math.abs(pan_num-amount)}</td>*/
/* 			        <tr>`;*/
/* 				}*/
/* //				content += `<tr id='zj'>*/
/* //		        							<td>总计</td>*/
/* //		        							<td class="kc_num">${amount}</td>*/
/* //		        							<td class="checkAmount">${pan_num}</td>*/
/* //		        							<td class="chechDifference">${amount}</td>*/
/* //		        						<tr>`;*/
/* 				$('#templateBox #datalist').html(content);*/
/* 				if(status) {*/
/* 					$('#templateBox').find('input,select,textarea').attr('disabled', true);*/
/* 					$('#templateBox .sure_button').hide();*/
/* 				}*/
/* 				calculateDifference();*/
/* 			} else {*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_accountancies/get_num_info',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						customer_id: id,*/
/* 						type: type*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						var content = '';*/
/* 						var amount = 0;*/
/* 						if(res.msg) {*/
/* 							$('#templateBox #datalist').html('<tr><td colspan="4"><div class="table-actions clearfix"></div> <div style="text-align: center" class="page">暂无数据</div></td></tr>');*/
/* //							ykp.prompt('该客户没有物品，请点击下一个');*/
/* 						} else {*/
/* 							for(var i in data) {*/
/* 								if(data[i].type == $('#templateBox #ck').val()) {*/
/* 									amount += parseInt(data[i]['count']);*/
/* 									content += ` */
/* 			        				<tr class="single">*/
/* 			        					<td class="pd_goods">${data[i]['goods']}</td>*/
/* 						                <td class="kc_num">${data[i]['count']}</td>*/
/* 						                <td><input type="text" value="${data[i]['count']}" class="checkAmount"/></td>*/
/* 						                <td class="chechDifference">0</td>*/
/* 						            </tr>`;*/
/* 								}*/
/* 								*/
/* 							}*/
/* 							if(amount == 0 && pan_num == 0){*/
/* 					*/
/* 								content += `<div style="text-align: center" class="page">暂无数据</div>`;*/
/* 							}else{*/
/* 								content += `<tr id='zj'>*/
/* 						        <td>总计</td>*/
/* 						        	<td class="kc_num">${amount}</td>*/
/* 						        	<td class="checkAmount">${pan_num}</td>*/
/* 						        	<td class="chechDifference">${Math.abs(pan_num-amount)}</td>*/
/* 						        <tr>`;*/
/* 							}*/
/* //							content += `<tr id='zj'>*/
/* //		        							<td>总计</td>*/
/* //		        							<td class="kc_num">${amount}</td>*/
/* //		        							<td class="checkAmount">0</td>*/
/* //		        							<td class="chechDifference">0</td>*/
/* //		        						<tr>`;*/
/* 							$('#templateBox #datalist').html(content);*/
/* 							if(status) {*/
/* 								$('#templateBox').find('input,select,textarea').attr('disabled', true);*/
/* 								$('#templateBox .sure_button').hide();*/
/* 							}*/
/* 							calculateDifference();*/
/* 						}*/
/* */
/* 					}*/
/* 				})*/
/* 			}*/
/* */
/* 		}*/
/* */
/* 		//计算差额*/
/* 		function calculateDifference() {*/
/* 			$('#templateCon .checkAmount').unbind('blur').blur(function() {*/
/* 				*/
/* 				if($(this).val().trim() == '') {*/
/* 					$(this).val(0);*/
/* 				}*/
/* 				if($(this).val() > $(this).parent().prev().text()) {*/
/* 					$(this).val($(this).parent().prev().text());*/
/* 				}else if($(this).val() < 0){*/
/* 					$(this).val(0);*/
/* 				}*/
/* 				var checkAmount = $(this).val().trim();*/
/* 				var storageAmount = parseInt($(this).parent().prev().text());*/
/* */
/* 				//对应物品盘点差额*/
/* 				$(this).parent().next().text(Math.abs(checkAmount - storageAmount));*/
/* */
/* 				//总计盘点数量  及  盘点差额*/
/* 				var total = 0;*/
/* 				$('#templateCon .single .checkAmount').each(function(i, e) {*/
/* 					total += parseInt($(this).val().trim());*/
/* 				});*/
/* 				$('#templateCon #zj .checkAmount').text(Math.abs(total));*/
/* */
/* 				total = 0;*/
/* 				$('#templateCon .single .chechDifference').each(function(i, e) {*/
/* 					total += parseInt($(this).text().trim());*/
/* 				});*/
/* 				$('#templateCon #zj .chechDifference').text(Math.abs(total));*/
/* 			});*/
/* 			var total = 0;*/
/* 				$('#templateCon .single .checkAmount').each(function(i, e) {*/
/* 					total += parseInt($(this).val().trim());*/
/* 				});*/
/* 				$('#templateCon #zj .checkAmount').text(Math.abs(total));*/
/* */
/* 				total = 0;*/
/* 				$('#templateCon .single .chechDifference').each(function(i, e) {*/
/* 					total += parseInt($(this).text().trim());*/
/* 				});*/
/* 				$('#templateCon #zj .chechDifference').text(Math.abs(total));*/
/* 		}*/
/* 	});*/
/* </script>*/
