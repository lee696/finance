<?php

/* admin/depotManagement/depotChargeback.html */
class __TwigTemplate_e4fbcf1a7ff778e1023f70b36d1703a6eafdf1141c17254ef6a4b2d1cfe67fe9 extends Twig_Template
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
\t\twidth: 130px;
\t}
\t
\t#showBox .form_data input,
\t#showBox .form_data textarea,
\t#showBox .form_data select {
\t\twidth: 46%;
\t}
</style>
<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<!-- <h3 class=\"header smaller lighter blue\">退单</h3> -->
\t\t<div class=\"actions\" id=\"topTool\">
\t\t\t<!--<input type=\"text\" pts=\"0\" class=\"\" placeholder=\"审批号\">-->
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t            <input type=\"text\" pts=\"0\" sear=\"khm_customer.name\" class=\"\" placeholder=\"企业名称\">
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t            <select style=\"width: 180px\"  class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" sear=\"ckm_retreat.fuze_id\" pts=3 aria-hidden=\"true\">
\t\t\t\t\t<option value=\"\">负责人</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t            <button id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
\t            \t<i class=\"fa fa-search\"></i>
\t            </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button id=\"heightsearch\" title=\"高级搜索\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
                    <i class=\"fa fa-filter\"></i>
                </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t            <button id=\"flush\" type=\"button\" title=\"刷新\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
\t                <i class=\"fa fa-refresh\"></i>
\t            </button>
\t\t\t</div>
\t\t\t
\t\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"position: absolute;margin-top: 30px; background: #fff; z-index: 1041;padding: 10px 0px; display: none;\">
\t\t\t\t<div class=\"row\" id=\"SearchCon\">
\t\t\t\t
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"custom_table\">
\t\t<table id=\"dynamic-table\">
\t\t\t<thead>
\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t<th>操作</th>
\t\t\t\t\t<th data-num=\"1\">企业名称</th>
\t\t\t\t\t<th data-num=\"2\">服务月份</th>
\t\t\t\t\t<th data-num=\"3\">负责人</th>
\t\t\t\t\t<th data-num=\"4\">退单时间</th>
\t\t\t\t\t<th data-num=\"5\">退单原因</th>
\t\t\t\t\t<th data-num=\"6\">入库状态</th>
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
\t\t<div class=\"row\">
\t\t\t<form class=\"item_form\" role=\"form\">
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 配送状态： </label>
\t\t\t\t\t<select addfied=\"status\">
\t\t\t\t\t\t<option value=\"\">- - - 请选择 - - -</option>
\t\t\t\t\t\t<option value=\"0\">未配送</option>
\t\t\t\t\t\t<option value=\"1\">已成功</option>
\t\t\t\t\t\t<option value=\"2\">未成功</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<!--<div class=\"form_data\">
\t\t\t\t\t<label> 配送次数： </label>
\t\t\t\t\t<input type=\"number\" addfied=\"num\">
\t\t\t\t</div>-->
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 退单时间： </label>
\t                <div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t    <input class=\"date-timepicker1 required\" addfied=\"creata_at\" msg=\"入库时间不能为空\" class=\"form-control\" style=\"padding:5px;height: 30px; width: 180px!important;\">
\t\t\t\t\t    <span class=\"input-group-addon\" style=\"width:30px;padding:7px 10px;height:30px;\">
\t                        <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t                    </span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\" style=\"margin-bottom:5px;\">
\t\t\t\t\t<label style=\"position:relative;top:-15px;\"> 退单原因：</label>
\t\t\t\t\t<textarea addfied=\"reason\" style=\"padding:5px\"></textarea>
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\" style=\"margin-bottom:5px;\">
\t\t\t\t\t<label style=\"position:relative;top:-15px;\"> 备注： </label>
\t\t\t\t\t<textarea addfied=\"remark\" style=\"padding:5px\"></textarea>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<div id=\"sendMsg\" customer_id=\"\" style=\"height: 30px;line-height: 40px;\">
\t\t\t\t<label style=\"margin-left:5px\" >是否发送短信：</label>
\t\t\t\t<input type=\"radio\" value=\"1\" name=\"is_send\" checked=\"true\">是
\t\t\t\t<input type=\"radio\" value=\"2\" name=\"is_send\">否
\t\t\t</div>
\t\t\t<div class=\"popup_button\">
\t\t\t\t<button class=\"sure_button\">
                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                        保存
                    </button>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t
\t<div id=\"jieTable\" style=\"display: none;\">
\t\t<div id=\"template1\" style=\"display: none;\">
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label>公司名称： </label>
\t\t\t\t<span style=\"display: inline-block; width: 174px;\" class=\"name\"></span>
\t\t\t\t<label> 客户仓位： </label>
\t\t\t\t<span style=\"display: inline-block; width: 174px;\" class=\"caddress\"></span>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label>联系人： </label>
\t\t\t\t<span style=\"display: inline-block; width: 174px;\" class=\"people\"></span>
\t\t\t\t<label> 联系电话： </label>
\t\t\t\t<span style=\"display: inline-block; width: 174px;\" class=\"tel\"></span>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label> 地址： </label>
\t\t\t\t<span style=\"display: inline-block; width: 174px;\" class=\"address\"></span>
\t\t\t\t<label> 负责人： </label>
\t\t\t\t<input class=\"required\" title_=\"name\" addTitle=\"fPeople\" class=\"fPeople\" />
\t\t\t</div>

\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t<label>其他代办事项： </label>
\t\t\t\t<input class=\"required rmark\" title_=\"name\" />
\t\t\t\t<label> 是否配送成功： </label> 否
\t\t\t\t<input type=\"radio\" name=\"status\" value=\"0\" checked=\"\" title_=\"name\" /> 是
\t\t\t\t<input type=\"radio\" name=\"status\" value=\"1\" title_=\"name\" />
\t\t\t</div>
\t\t\t<!--<div style=\"margin-top:15px;\">
\t\t\t\t\t<label> 客户仓位： </label>
\t\t\t\t\t<input class=\"required kcang\" title_=\"name\" />
\t\t\t\t</div>-->
\t\t</div>
\t<div id=\"template2\">
\t\t<div style=\"margin-top:20px;margin-bottom:20px;\" class=\"buttons\">
\t\t\t<button class=\"btn btn-info btn-sm active\">凭证交接</button>
\t\t\t<button class=\"btn btn-info btn-sm\">票据交接</button>
\t\t\t<button class=\"btn btn-info btn-sm\">证件交接</button>
\t\t</div>
\t\t<div class=\"connects-content\">
\t\t\t<div class=\"voucher\">
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>凭证月份</th>
\t\t\t\t\t\t\t<th>凭证名称</th>
\t\t\t\t\t\t\t<th>数量(本)</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td id=\"month\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input class=\"required\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input class=\"required\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<table class=\"bill\" style=\"display:none;\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t\t<th>票据类别</th>
\t\t\t\t\t\t\t<th>数量(张)</th>
\t\t\t\t\t\t\t<th>金额(元)</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody id=\"ticketBody\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"addTicket\">+</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t<option value=\"2\">收入发票</option>
\t\t\t\t\t\t\t\t\t<option value=\"3\">进项发票</option>
\t\t\t\t\t\t\t\t\t<option value=\"4\">未开票</option>
\t\t\t\t\t\t\t\t\t<option value=\"5\">费用票</option>
\t\t\t\t\t\t\t\t\t<option value=\"6\">房租发票</option>
\t\t\t\t\t\t\t\t\t<option value=\"7\">水电发票</option>
\t\t\t\t\t\t\t\t\t<option value=\"8\">银行对账单</option>
\t\t\t\t\t\t\t\t\t<option value=\"9\">银行回单</option>
\t\t\t\t\t\t\t\t\t<option value=\"10\">海关发票</option>
\t\t\t\t\t\t\t\t\t<option value=\"11\">支票</option>
\t\t\t\t\t\t\t\t\t<option value=\"12\">承兑发票</option>
\t\t\t\t\t\t\t\t\t<option value=\"13\">其他发票</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input class=\"required\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input class=\"required\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<table class=\"certificate\" style=\"display:none;\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>操作</th>
\t\t\t\t\t\t\t<th>证件名称</th>
\t\t\t\t\t\t\t<th>数量(个)</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody id=\"cardBody\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"addCard\">+</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t<option value=\"14\">营业执照正本</option>
\t\t\t\t\t\t\t\t\t<option value=\"15\">营业执照副本</option>
\t\t\t\t\t\t\t\t\t<option value=\"16\">公章</option>
\t\t\t\t\t\t\t\t\t<option value=\"17\">财务章</option>
\t\t\t\t\t\t\t\t\t<option value=\"18\">私章</option>
\t\t\t\t\t\t\t\t\t<option value=\"19\">发票章</option>
\t\t\t\t\t\t\t\t\t<option value=\"20\">开户许可证</option>
\t\t\t\t\t\t\t\t\t<option value=\"21\">机构信用代码证</option>
\t\t\t\t\t\t\t\t\t<option value=\"22\">海关证书</option>
\t\t\t\t\t\t\t\t\t<option value=\"23\">进出口经营许可证</option>
\t\t\t\t\t\t\t\t\t<option value=\"24\">检验检疫备案表</option>
\t\t\t\t\t\t\t\t\t<option value=\"25\">外币账户备案表</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input class=\"required\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t<div style=\"margin-top:15px\">
\t\t\t<label style=\"float:left;width:36px;\">备注：</label>
\t\t\t<textarea style=\"margin-left:5px;width:calc(100% - 41px);resize:none;\"></textarea>
\t\t</div>
\t\t<div style=\"margin-top:15px\">
\t\t\t<label style=\"float:left;margin-bottom:0;padding:2px 0;width:87px;\">是否配送成功：</label>
\t\t\t<input type=\"radio\" name=\"choose\">是
\t\t\t<input type=\"radio\" name=\"choose\" style=\"margin-left:5px;\">否
\t\t</div>
\t</div>
\t<div style=\"text-align:center;margin-top:15px;\">
\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
\t\t<button class=\"sure_button add template1\">
            <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
              \t保存
        </button>
\t</div>
</div>

<!-- 详情 -->
<div class=\"row\" id=\"template\" style=\"display:none;width:678px;\">
\t\t\t\t<table width=\"100%\" style=\"margin-bottom:15px;\">
\t\t\t\t\t<tr style=\"\">
\t\t\t\t\t\t<td style=\"text-align: right !important\">公司名称:</td>
\t\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t\t<span class=\"disData0\"></span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"text-align: right !important\">服务月份:</td>
\t\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t\t<span class=\"disData1\"></span>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr style=\"\">
\t\t\t\t\t\t<td style=\"text-align: right !important\">负责人:</td>
\t\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t\t<span class=\"disData2\"></span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"text-align: right !important\">退单时间:</td>
\t\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t\t<span class=\"disData3\"></span>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr style=\"\">
\t\t\t\t\t\t<td style=\"text-align: right !important\">退单原因：</td>
\t\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t\t<span class=\"disData4\"></span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"text-align: right !important\">入库状态：</td>
\t\t\t\t\t\t<td style=\"text-align: left !important\">
\t\t\t\t\t\t\t<span class=\"disData5\"></span>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t</table>
\t\t</div>





\t<!-- 审批回复 -->
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
\t
\t
\t";
        // line 352
        $this->loadTemplate("admin/mark.html", "admin/depotManagement/depotChargeback.html", 352)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/depotManagement/depotChargeback.html", 352)->display($context);
        // line 353
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script type=\"text/javascript\">
\t\$(function() {
\t\tvar order ='ckm_retreat.id desc';
\t\tvar page_size = 10;
\t\tvar filter ='';
\t\t//获取所有员工
\t\tvar employees = {};
        ykp.doAjax({
        \tasync:false,
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
\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_accountancies/retreat_grid',
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
\t\t\t\tfield: [\"\", \"khm_customer.name\",\"ckm_retreat.month\",  \"ckm_retreat.fuze_id\", \"ckm_retreat.creata_at\", \"ckm_retreat.reason\", \"jzm_send_info.status\",]
\t\t\t\t
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});
\t\t
\t\tsearch();
\t\tfunction search() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_accountancies/retreat_grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: page_size,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}
\t\t\tcs.doSearch('#search', data, 'filter', false, function(res,_filter) {
\t\t\t\tfilter = _filter;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn false;
\t\t\t\t} else {
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t})
\t\t}
\t\t
\t\t\tgetSearch();\t
\t\tfunction getSearch() {
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tvar list = [
\t\t\t\t{name:\"企业名称\",search:\"khm_customer.name\",type:\"text\"},
\t\t\t\t{name:\"服务月份\",search:\"ckm_retreat.month\",type:\"text\"},
\t\t\t\t{name:\"负责人\",search:\"ckm_retreat.fuze_id\",type:\"select\",url:\"/api/api_employees/f7\",key:\"people\"},
\t\t\t\t{name:\"退单时间\",search:\"ckm_retreat.creata_at\",type:\"time\"},
\t\t\t\t{name:\"退单原因\",search:\"ckm_retreat.reason\",type:\"text\"},
\t\t\t\t{name:\"入库状态\",search:\"jzm_send_info.status\",type:\"select\",option:[{val:\"3\",text:\"待入库\"},{val:\"5\",text:\"入库失败\"},{val:\"4\",text:\"入库成功\"}]},
\t\t\t];
\t\t\t
\t\t\tcs.getSearch({
\t\t\t\tlist:list,
\t\t\t\tel:\"#heightsearch\",
\t\t\t\tel1:\"#heightsearch1\"
\t\t\t},dohSearch);
\t\t\tfunction dohSearch() {
\t\t\t\tvar data = {
\t\t\t\t\turl: '/api/api_accountancies/retreat_grid',
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tpage_size: page_size,
\t\t\t\t\t\torder:order,
\t\t\t\t\t\tfilter:'filter'
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tcs.hSearch('.search1', data, 'filter', false, function(res, _filter) {
\t\t\t\t\tfilter = _filter;
\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\t\$(\"#heightsearch\").removeClass('active').css('z-index', '');
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
\t\t
\t \t\$('.myFilter').click(function() {
            if (!\$(this).hasClass('clc')) {
                \$(this).addClass('clc').siblings().removeClass('clc');
            }
            var data = {
                \"limit\": page_size,
                'page':1,
                'order':order
            }
            var filter_ =  \$(this).attr('data-status');
            if (filter_ == 'a') {
                getList(1);
                return;
            }
            data['filter'] = 'ckm_retreat.auth_status = '+filter_;
            getList_2(data);
            
        })

        \$('#filterBtns a').mouseover(function(){
            \$(this).addClass('over');
        })
        \$('#filterBtns a').mouseout(function(){
            \$(this).removeClass('over');
        })

        function getList_2(data) {
\t\t\tykp.list({
\t\t\t\turl: '/api/api_accountancies/retreat_grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: data,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t}else{
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}


\t\t 
\t\t
\t\t\$('#changePageNum').change(function(){
\t\t\tpage_size = \$(this).val();
\t\t\tykp.setCookie('page_size',page_size);
\t\t\tgetList(1);
\t\t})
\t\t
\t\tgetList(1);
\t\t
\t\tfunction getList(current) {
\t\t\tykp.list({
\t\t\t\turl: '/api/api_accountancies/retreat_grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
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
\t\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t}else{
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}
\t\t
\t\t\$('#flush').click(function(){
\t\t\t\$('[sear=\"khm_customer.name\"]').val('');
\t\t\t\$('[sear=\"ckm_retreat.fuze_id\"]').val('').trigger('change');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tfilter = '';
\t\t\tgetList();
\t\t})

\t\t
\t\tfunction addList(res) {
\t\t\tvar data = res.data.items;
\t\t\tvar content = '';
\t\t\tvar html = '';
\t\t\tvar ths = \$('.thColor th');
\t\t\tvar styles = [];
\t\t\tfor(i = 0; i < ths.length; i++) {
\t\t\t\tstyles.push(ths.eq(i).css('display'));
\t\t\t}
\t\t\tvar auth_status = ['待审核', '未通过', '已通过','未开始'];
\t\t\tvar status = ['未配送', '成功', '未成功'];
\t\t\tvar status1 = {'-1':'出库失败', '0':'出库中','1': '待送单','2':'送单成功','3':'待入库','4':'入库成功','5':'入库失败'};
\t\t\t//<a href=\"#\"><span style=\"cursor: pointer\" id=\"\" class=\"info sdetail\">详情&nbsp</span></a>
\t\t\t//<a href=\"#\"> <span style=\"cursor: pointer\" id=\"edit\" class=\"edit\">编辑&nbsp</span></a>
\t\t\tvar tstatus = {
\t\t\t\t3:\"待入库\",
\t\t\t\t4:\"已入库\",
\t\t\t\t5:\"入库失败\",
\t\t\t}
\t\t\t//审批权限为true可以审批,为false不可审批
\t\t\tvar spApp = cs.approve_authority({name:'退单',nodes:[156]});
\t\t\tvar cxApp = cs.approve_authority({name:'退单',nodes:[269]});
\t\t\tvar edit_statu = cs.getNodes([155],true);
\t\t\tfor(var i in data) {

\t\t\t\tcontent += `<tr data-id='\${data[i][\"ckm_retreat.id\"]}'  data-status=\"\${data[i]['ckm_retreat.auth_status']}\">
\t\t\t\t\t\t<td style=\"display: \${styles[0]}\">
\t\t\t\t\t\t<label class=\"pos-rel\">
                    \t\t<a href=\"#\" class=\"pos-rel btOrange info\" title=\"详情\" style=\"color:#fff !important\"><i class=\"fa fa-info \"></i></a>
                        </label>
\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td data-num = \"1\" style=\"display: \${styles[1]}\" data-id=\"\${data[i]['khm_customer.id']}\" data-cid=\"\${data[i]['khm_customer.id']}\">
\t\t\t\t\t\t\t<a class=\"customerDetail pos-rel\" href=\"#\">
\t\t\t\t\t\t\t\t\${data[i]['khm_customer.name']}
\t\t\t \t\t\t\t </a>
\t\t\t \t\t\t\t <label class=\"pos-rel\">
\t\t\t\t \t\t\t\t<i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data[i]['Remark'].length > 0 ? 'red' : ''}\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i>
\t\t\t \t\t\t\t </label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td data-num = \"2\" style=\"display: \${styles[2]}\">
\t\t\t\t\t\t\t\${data[i]['ckm_retreat.month']}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td data-num = \"3\"  style=\"display: \${styles[3]}\">
\t\t\t\t\t\t\t\${employees[data[i]['ckm_retreat.fuze_id']]}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td data-num = \"4\" style=\"display: \${styles[4]}\" >
\t\t\t\t\t\t\t\${data[i]['ckm_retreat.creata_at'] != '0' ? cs.getNowTime(data[i]['ckm_retreat.creata_at'],true) : ''}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td data-num = \"5\" style=\"display: \${styles[5]}\">
\t\t\t\t\t\t\t\${data[i]['ckm_retreat.reason']}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td data-num = \"6\" style=\"display: \${styles[6]}\">
\t\t\t\t\t\t\t\${data[i]['jzm_send_info.status']?status1[data[i]['jzm_send_info.status']]:''}
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>`;
\t\t\t}

\t\t\t\$('#datalist').html(content);
\t\t\tcustom.showReamrk();
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\tcustom.get_custom_info();

\t\t\t\$(\"#datalist tr\").find('.sp').click(function() {
\t\t\t\tvar status = \$(this).attr('data-status');
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tchangeStatus(status, id);
\t\t\t})

\t\t\t//编辑
\t\t\t\$('.edit').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\tvar _data = data[index];

\t\t\t\tconsole.log(_data);
\t\t\t\tshowMark('.popup_new');
\t\t\t\t\$('#showBox .title').text('编辑');

\t\t\t\tvar field = '';
\t\t\t\t\$('#templateCon [addfied]').each(function(i,e){
\t\t\t\t\tfield = 'ckm_retreat.' + \$(this).attr('addfied');
\t\t\t\t\tif(\$(this).attr('addfied') == 'creata_at'){
\t\t\t\t\t\t\$(this).val(cs.getNowTime(_data[field]));
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\t\$(this).val(_data[field]);
\t\t\t\t});

\t\t\t\tcs.timeplug();
\t\t\t\tvar customer_id = \$(this).parents('tr').find('[data-num=\"3\"]').attr('data-id');
\t\t\t\tvar param = {
\t\t\t\t\tname:\$(this).parents('tr').find('[data-num=\"3\"]').attr('data-cid'),
\t\t\t\t\ttime:\$(this).parents('tr').find('[data-num=\"4\"]').text().trim()
\t\t\t\t}
\t\t\t\t\$('#templateBox .sure_button').click(function() {
\t\t\t\t\tvar status = false;
\t\t\t\t\tvar data = {};
\t\t\t\t\tvar is_send = false;
\t\t\t\t\tif (\$('#templateCon #sendMsg input:checked').val()==1) {
\t\t\t\t\t\tis_send = true;
\t\t\t\t\t}
\t\t\t\t\t\$('#templateBox').find('[addfied]').each(function(i) {
\t\t\t\t\t\tif(\$(this).attr('addfied') == 'creata_at' && \$(this).val() == '') {
\t\t\t\t\t\t\tykp.prompt(\"配送时间不能为空！\");
\t\t\t\t\t\t\tstatus = false;
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tif(\$(this).val() != \"\") {
\t\t\t\t\t\t\t\tdata[\$(this).attr('addfied')] = \$(this).attr('addfied') == 'creata_at' ? new Date(\$(this).val()) / 1000 : \$(this).val();
\t\t\t\t\t\t\t\tstatus = true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t\tvar type = \$('#templateCon [addfied=\"status\"]').val() =='1'?'送单成功':'送单失败';
\t\t\t\t\tif (\$('#templateCon [addfied=\"status\"]').val() !='1') {
\t\t\t\t\t\tparam['msg'] = \$('#templateCon [addfied=\"reason\"]').val();
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif(status) {
\t\t\t\t\t\tdata.id = id;
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl:'/api/api_accountancies/edit_retreat',
\t\t\t\t\t\t\tmethod:'post',
\t\t\t\t\t\t\tdata:data,
\t\t\t\t\t\t\tsuccess:function(res) {
\t\t\t\t\t\t\t\tykp.prompt('编辑成功');
\t\t\t\t\t\t\t\tif (is_send) {
\t\t\t\t\t\t\t\t\tsendMsg(customer_id,type,param);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\t\tgetList(1);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})

\t\t\t//详情
\t\t\t\$('.info').click(function() {
\t\t\t\tvar cid = \$(this).parents('tr').attr('data-id');
\t\t\t\tshowMark(\"#template\");
\t\t\t\t\$('#showBox .title').text('退单详情');
\t\t\t\t//var emps=allemp();
\t\t\t\tvar empname;
\t\t\t\tvar status = ['待审核', '未通过', '已通过'];
\t\t\t\tvar status_2 = ['未配送', '配送成功', '配送失败'];
\t\t\t\tvar status1 = {'-1':'出库失败', '0':'出库中','1': '带送单','2':'送单成功','3':'带入库','4':'入库成功','5':'入库失败'};
\t\t\t\tvar tstatus = {
\t\t\t\t\t3:\"待入库\",
\t\t\t\t\t4:\"已入库\",
\t\t\t\t\t5:\"入库失败\",
\t\t\t\t}
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_accountancies/retreat_grid',
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter: 'ckm_retreat.id=' + cid
\t\t\t\t\t},success:function(res){
\t\t\t\t\t\tvar data=res.data.items[0];
\t\t\t\t\t\t\$('#templateCon .disData0').text(data['khm_customer.name']);
\t\t\t\t\t\t\$('#templateCon .disData1').text(data['ckm_retreat.month']);
\t\t\t\t\t\t\$('#templateCon .disData2').text(employees[data['ckm_retreat.fuze_id']]);
\t\t\t\t\t\t\$('#templateCon .disData3').text(cs.getNowTime(data['ckm_retreat.creata_at']));
\t\t\t\t\t\t\$('#templateCon .disData4').text(data['ckm_retreat.reason']);
\t\t\t\t\t\t\$('#templateCon .disData5').text(status1[data['jzm_send_info.status']]);
                        \$(\"#temHeader\").width(\$(\"#showBox\").width()-47);
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})
\t\t}

\t\tfunction sendMsg(id,type,param){
\t\t\tykp.doAjax({
\t\t\t\turl:'/api/api_common/send_customer',
\t\t\t\tdata:{
\t\t\t\t\tcustomer_id:id,
\t\t\t\t\ttype:type,
\t\t\t\t\tparam:JSON.stringify(param)
\t\t\t\t},
\t\t\t\tmethod:'post',
\t\t\t\tsuccess:function(res){
\t\t\t\t\tykp.prompt('短信发送成功！');
\t\t\t\t}
\t\t\t})
\t\t}

\t\tfunction changeStatus(status, id) {
\t\t\t//console.log(status, id)
\t\t\tvar data = {
\t\t\t\turl: '/api/api_accountancies/sh_retreat',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\tid: id,
\t\t\t\t\tauth_status: status
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
\t\t\t\t\tdata.data.approve_reply = approve_reply.trim();
\t\t\t\t\tdata.data.approve_reply = approve_reply;
\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t})
\t\t\t\tcs.closePop();
\t\t\t} else if(status == 0){
                bootbox.confirm('确认撤销审批？', function(flag){
                    if(flag){
                        setStatus(data);
                    }
                })
            }else {
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
\t\t//自定义table
\t\tcs.custorm_check('#dynamic-table', '#datalist', false);


\t\t// \$('.add').click(function() {
\t\t// \tshowMark('.popup_new');
\t\t// });
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/depotManagement/depotChargeback.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 353,  372 => 352,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	#showBox .form_data label {*/
/* 		width: 130px;*/
/* 	}*/
/* 	*/
/* 	#showBox .form_data input,*/
/* 	#showBox .form_data textarea,*/
/* 	#showBox .form_data select {*/
/* 		width: 46%;*/
/* 	}*/
/* </style>*/
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<!-- <h3 class="header smaller lighter blue">退单</h3> -->*/
/* 		<div class="actions" id="topTool">*/
/* 			<!--<input type="text" pts="0" class="" placeholder="审批号">-->*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 	            <input type="text" pts="0" sear="khm_customer.name" class="" placeholder="企业名称">*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 	            <select style="width: 180px"  class="advandced-search select2-hidden-accessible" tabindex="-1" sear="ckm_retreat.fuze_id" pts=3 aria-hidden="true">*/
/* 					<option value="">负责人</option>*/
/* 				</select>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 	            <button id="search" title="搜索" class="btn btn-info btn-sm">*/
/* 	            	<i class="fa fa-search"></i>*/
/* 	            </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<button id="heightsearch" title="高级搜索" type="button" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/*                     <i class="fa fa-filter"></i>*/
/*                 </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 	            <button id="flush" type="button" title="刷新" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/* 	                <i class="fa fa-refresh"></i>*/
/* 	            </button>*/
/* 			</div>*/
/* 			*/
/* 			<div id="heightsearch1" class="col-sx-12" style="position: absolute;margin-top: 30px; background: #fff; z-index: 1041;padding: 10px 0px; display: none;">*/
/* 				<div class="row" id="SearchCon">*/
/* 				*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="custom_table">*/
/* 		<table id="dynamic-table">*/
/* 			<thead>*/
/* 				<tr class="thColor">*/
/* 					<th>操作</th>*/
/* 					<th data-num="1">企业名称</th>*/
/* 					<th data-num="2">服务月份</th>*/
/* 					<th data-num="3">负责人</th>*/
/* 					<th data-num="4">退单时间</th>*/
/* 					<th data-num="5">退单原因</th>*/
/* 					<th data-num="6">入库状态</th>*/
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
/* 		<div class="row">*/
/* 			<form class="item_form" role="form">*/
/* 				<div class="form_data">*/
/* 					<label> 配送状态： </label>*/
/* 					<select addfied="status">*/
/* 						<option value="">- - - 请选择 - - -</option>*/
/* 						<option value="0">未配送</option>*/
/* 						<option value="1">已成功</option>*/
/* 						<option value="2">未成功</option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<!--<div class="form_data">*/
/* 					<label> 配送次数： </label>*/
/* 					<input type="number" addfied="num">*/
/* 				</div>-->*/
/* 				<div class="form_data">*/
/* 					<label> 退单时间： </label>*/
/* 	                <div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 					    <input class="date-timepicker1 required" addfied="creata_at" msg="入库时间不能为空" class="form-control" style="padding:5px;height: 30px; width: 180px!important;">*/
/* 					    <span class="input-group-addon" style="width:30px;padding:7px 10px;height:30px;">*/
/* 	                        <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 	                    </span>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form_data" style="margin-bottom:5px;">*/
/* 					<label style="position:relative;top:-15px;"> 退单原因：</label>*/
/* 					<textarea addfied="reason" style="padding:5px"></textarea>*/
/* 				</div>*/
/* 				<div class="form_data" style="margin-bottom:5px;">*/
/* 					<label style="position:relative;top:-15px;"> 备注： </label>*/
/* 					<textarea addfied="remark" style="padding:5px"></textarea>*/
/* 				</div>*/
/* 			</form>*/
/* 			<div id="sendMsg" customer_id="" style="height: 30px;line-height: 40px;">*/
/* 				<label style="margin-left:5px" >是否发送短信：</label>*/
/* 				<input type="radio" value="1" name="is_send" checked="true">是*/
/* 				<input type="radio" value="2" name="is_send">否*/
/* 			</div>*/
/* 			<div class="popup_button">*/
/* 				<button class="sure_button">*/
/*                         <i class="fa fa-check" aria-hidden="true"></i>*/
/*                         保存*/
/*                     </button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	*/
/* 	<div id="jieTable" style="display: none;">*/
/* 		<div id="template1" style="display: none;">*/
/* 			<div style="margin-top:15px;">*/
/* 				<label>公司名称： </label>*/
/* 				<span style="display: inline-block; width: 174px;" class="name"></span>*/
/* 				<label> 客户仓位： </label>*/
/* 				<span style="display: inline-block; width: 174px;" class="caddress"></span>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label>联系人： </label>*/
/* 				<span style="display: inline-block; width: 174px;" class="people"></span>*/
/* 				<label> 联系电话： </label>*/
/* 				<span style="display: inline-block; width: 174px;" class="tel"></span>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;">*/
/* 				<label> 地址： </label>*/
/* 				<span style="display: inline-block; width: 174px;" class="address"></span>*/
/* 				<label> 负责人： </label>*/
/* 				<input class="required" title_="name" addTitle="fPeople" class="fPeople" />*/
/* 			</div>*/
/* */
/* 			<div style="margin-top:15px;">*/
/* 				<label>其他代办事项： </label>*/
/* 				<input class="required rmark" title_="name" />*/
/* 				<label> 是否配送成功： </label> 否*/
/* 				<input type="radio" name="status" value="0" checked="" title_="name" /> 是*/
/* 				<input type="radio" name="status" value="1" title_="name" />*/
/* 			</div>*/
/* 			<!--<div style="margin-top:15px;">*/
/* 					<label> 客户仓位： </label>*/
/* 					<input class="required kcang" title_="name" />*/
/* 				</div>-->*/
/* 		</div>*/
/* 	<div id="template2">*/
/* 		<div style="margin-top:20px;margin-bottom:20px;" class="buttons">*/
/* 			<button class="btn btn-info btn-sm active">凭证交接</button>*/
/* 			<button class="btn btn-info btn-sm">票据交接</button>*/
/* 			<button class="btn btn-info btn-sm">证件交接</button>*/
/* 		</div>*/
/* 		<div class="connects-content">*/
/* 			<div class="voucher">*/
/* 				<table>*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<th>凭证月份</th>*/
/* 							<th>凭证名称</th>*/
/* 							<th>数量(本)</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* 					<tbody>*/
/* 						<tr>*/
/* 							<td id="month">*/
/* 							</td>*/
/* 							<td>*/
/* 								<input class="required" />*/
/* 							</td>*/
/* 							<td>*/
/* 								<input class="required" />*/
/* 							</td>*/
/* 						</tr>*/
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/* 			<div>*/
/* 				<table class="bill" style="display:none;">*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<th>操作</th>*/
/* 							<th>票据类别</th>*/
/* 							<th>数量(张)</th>*/
/* 							<th>金额(元)</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* 					<tbody id="ticketBody">*/
/* 						<tr>*/
/* 							<td>*/
/* 								<a href="javascript:;" class="addTicket">+</a>*/
/* 							</td>*/
/* 							<td>*/
/* 								<select>*/
/* 									<option value="2">收入发票</option>*/
/* 									<option value="3">进项发票</option>*/
/* 									<option value="4">未开票</option>*/
/* 									<option value="5">费用票</option>*/
/* 									<option value="6">房租发票</option>*/
/* 									<option value="7">水电发票</option>*/
/* 									<option value="8">银行对账单</option>*/
/* 									<option value="9">银行回单</option>*/
/* 									<option value="10">海关发票</option>*/
/* 									<option value="11">支票</option>*/
/* 									<option value="12">承兑发票</option>*/
/* 									<option value="13">其他发票</option>*/
/* 								</select>*/
/* 							</td>*/
/* 							<td>*/
/* 								<input class="required" />*/
/* 							</td>*/
/* 							<td>*/
/* 								<input class="required" />*/
/* 							</td>*/
/* 						</tr>*/
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/* 			<div>*/
/* 				<table class="certificate" style="display:none;">*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<th>操作</th>*/
/* 							<th>证件名称</th>*/
/* 							<th>数量(个)</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* 					<tbody id="cardBody">*/
/* 						<tr>*/
/* 							<td>*/
/* 								<a href="javascript:;" class="addCard">+</a>*/
/* 							</td>*/
/* 							<td>*/
/* 								<select>*/
/* 									<option value="14">营业执照正本</option>*/
/* 									<option value="15">营业执照副本</option>*/
/* 									<option value="16">公章</option>*/
/* 									<option value="17">财务章</option>*/
/* 									<option value="18">私章</option>*/
/* 									<option value="19">发票章</option>*/
/* 									<option value="20">开户许可证</option>*/
/* 									<option value="21">机构信用代码证</option>*/
/* 									<option value="22">海关证书</option>*/
/* 									<option value="23">进出口经营许可证</option>*/
/* 									<option value="24">检验检疫备案表</option>*/
/* 									<option value="25">外币账户备案表</option>*/
/* 								</select>*/
/* 							</td>*/
/* 							<td>*/
/* 								<input class="required" />*/
/* 							</td>*/
/* 						</tr>*/
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div style="margin-top:15px">*/
/* 			<label style="float:left;width:36px;">备注：</label>*/
/* 			<textarea style="margin-left:5px;width:calc(100% - 41px);resize:none;"></textarea>*/
/* 		</div>*/
/* 		<div style="margin-top:15px">*/
/* 			<label style="float:left;margin-bottom:0;padding:2px 0;width:87px;">是否配送成功：</label>*/
/* 			<input type="radio" name="choose">是*/
/* 			<input type="radio" name="choose" style="margin-left:5px;">否*/
/* 		</div>*/
/* 	</div>*/
/* 	<div style="text-align:center;margin-top:15px;">*/
/* 		<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* 		<button class="sure_button add template1">*/
/*             <i class="fa fa-check" aria-hidden="true"></i>*/
/*               	保存*/
/*         </button>*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- 详情 -->*/
/* <div class="row" id="template" style="display:none;width:678px;">*/
/* 				<table width="100%" style="margin-bottom:15px;">*/
/* 					<tr style="">*/
/* 						<td style="text-align: right !important">公司名称:</td>*/
/* 						<td style="text-align: left !important">*/
/* 							<span class="disData0"></span>*/
/* 						</td>*/
/* 						<td style="text-align: right !important">服务月份:</td>*/
/* 						<td style="text-align: left !important">*/
/* 							<span class="disData1"></span>*/
/* 						</td>*/
/* 					</tr>*/
/* 					<tr style="">*/
/* 						<td style="text-align: right !important">负责人:</td>*/
/* 						<td style="text-align: left !important">*/
/* 							<span class="disData2"></span>*/
/* 						</td>*/
/* 						<td style="text-align: right !important">退单时间:</td>*/
/* 						<td style="text-align: left !important">*/
/* 							<span class="disData3"></span>*/
/* 						</td>*/
/* 					</tr>*/
/* 					<tr style="">*/
/* 						<td style="text-align: right !important">退单原因：</td>*/
/* 						<td style="text-align: left !important">*/
/* 							<span class="disData4"></span>*/
/* 						</td>*/
/* 						<td style="text-align: right !important">入库状态：</td>*/
/* 						<td style="text-align: left !important">*/
/* 							<span class="disData5"></span>*/
/* 						</td>*/
/* 					</tr>*/
/* 					*/
/* 				</table>*/
/* 		</div>*/
/* */
/* */
/* */
/* */
/* */
/* 	<!-- 审批回复 -->*/
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
/* 	*/
/* 	*/
/* 	{% include 'admin/mark.html' %} {% include 'admin/customerDetail.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* <script type="text/javascript">*/
/* 	$(function() {*/
/* 		var order ='ckm_retreat.id desc';*/
/* 		var page_size = 10;*/
/* 		var filter ='';*/
/* 		//获取所有员工*/
/* 		var employees = {};*/
/*         ykp.doAjax({*/
/*         	async:false,*/
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
/*         });*/
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_accountancies/retreat_grid',*/
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
/* 				field: ["", "khm_customer.name","ckm_retreat.month",  "ckm_retreat.fuze_id", "ckm_retreat.creata_at", "ckm_retreat.reason", "jzm_send_info.status",]*/
/* 				*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* 		*/
/* 		search();*/
/* 		function search() {*/
/* 			var data = {*/
/* 				url: '/api/api_accountancies/retreat_grid',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: page_size,*/
/* 					order: order*/
/* 				}*/
/* 			}*/
/* 			cs.doSearch('#search', data, 'filter', false, function(res,_filter) {*/
/* 				filter = _filter;*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 					$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					return false;*/
/* 				} else {*/
/* 					addList(res);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* 		*/
/* 			getSearch();	*/
/* 		function getSearch() {*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			var list = [*/
/* 				{name:"企业名称",search:"khm_customer.name",type:"text"},*/
/* 				{name:"服务月份",search:"ckm_retreat.month",type:"text"},*/
/* 				{name:"负责人",search:"ckm_retreat.fuze_id",type:"select",url:"/api/api_employees/f7",key:"people"},*/
/* 				{name:"退单时间",search:"ckm_retreat.creata_at",type:"time"},*/
/* 				{name:"退单原因",search:"ckm_retreat.reason",type:"text"},*/
/* 				{name:"入库状态",search:"jzm_send_info.status",type:"select",option:[{val:"3",text:"待入库"},{val:"5",text:"入库失败"},{val:"4",text:"入库成功"}]},*/
/* 			];*/
/* 			*/
/* 			cs.getSearch({*/
/* 				list:list,*/
/* 				el:"#heightsearch",*/
/* 				el1:"#heightsearch1"*/
/* 			},dohSearch);*/
/* 			function dohSearch() {*/
/* 				var data = {*/
/* 					url: '/api/api_accountancies/retreat_grid',*/
/* 					methods: 'post',*/
/* 					data: {*/
/* 						page_size: page_size,*/
/* 						order:order,*/
/* 						filter:'filter'*/
/* 					}*/
/* 				}*/
/* 				cs.hSearch('.search1', data, 'filter', false, function(res, _filter) {*/
/* 					filter = _filter;*/
/* 					$('.in').removeClass('modal-backdrop');*/
/* 					$("#heightsearch1").slideUp();*/
/* 					$("#heightsearch").removeClass('active').css('z-index', '');*/
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
/* 		*/
/* 	 	$('.myFilter').click(function() {*/
/*             if (!$(this).hasClass('clc')) {*/
/*                 $(this).addClass('clc').siblings().removeClass('clc');*/
/*             }*/
/*             var data = {*/
/*                 "limit": page_size,*/
/*                 'page':1,*/
/*                 'order':order*/
/*             }*/
/*             var filter_ =  $(this).attr('data-status');*/
/*             if (filter_ == 'a') {*/
/*                 getList(1);*/
/*                 return;*/
/*             }*/
/*             data['filter'] = 'ckm_retreat.auth_status = '+filter_;*/
/*             getList_2(data);*/
/*             */
/*         })*/
/* */
/*         $('#filterBtns a').mouseover(function(){*/
/*             $(this).addClass('over');*/
/*         })*/
/*         $('#filterBtns a').mouseout(function(){*/
/*             $(this).removeClass('over');*/
/*         })*/
/* */
/*         function getList_2(data) {*/
/* 			ykp.list({*/
/* 				url: '/api/api_accountancies/retreat_grid',*/
/* 				method: 'post',*/
/* 				data: data,*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 						$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					}else{*/
/* 						addList(res);*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* */
/* 		 */
/* 		*/
/* 		$('#changePageNum').change(function(){*/
/* 			page_size = $(this).val();*/
/* 			ykp.setCookie('page_size',page_size);*/
/* 			getList(1);*/
/* 		})*/
/* 		*/
/* 		getList(1);*/
/* 		*/
/* 		function getList(current) {*/
/* 			ykp.list({*/
/* 				url: '/api/api_accountancies/retreat_grid',*/
/* 				method: 'post',*/
/* 				data: {*/
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
/* 						$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					}else{*/
/* 						addList(res);*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 		*/
/* 		$('#flush').click(function(){*/
/* 			$('[sear="khm_customer.name"]').val('');*/
/* 			$('[sear="ckm_retreat.fuze_id"]').val('').trigger('change');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			filter = '';*/
/* 			getList();*/
/* 		})*/
/* */
/* 		*/
/* 		function addList(res) {*/
/* 			var data = res.data.items;*/
/* 			var content = '';*/
/* 			var html = '';*/
/* 			var ths = $('.thColor th');*/
/* 			var styles = [];*/
/* 			for(i = 0; i < ths.length; i++) {*/
/* 				styles.push(ths.eq(i).css('display'));*/
/* 			}*/
/* 			var auth_status = ['待审核', '未通过', '已通过','未开始'];*/
/* 			var status = ['未配送', '成功', '未成功'];*/
/* 			var status1 = {'-1':'出库失败', '0':'出库中','1': '待送单','2':'送单成功','3':'待入库','4':'入库成功','5':'入库失败'};*/
/* 			//<a href="#"><span style="cursor: pointer" id="" class="info sdetail">详情&nbsp</span></a>*/
/* 			//<a href="#"> <span style="cursor: pointer" id="edit" class="edit">编辑&nbsp</span></a>*/
/* 			var tstatus = {*/
/* 				3:"待入库",*/
/* 				4:"已入库",*/
/* 				5:"入库失败",*/
/* 			}*/
/* 			//审批权限为true可以审批,为false不可审批*/
/* 			var spApp = cs.approve_authority({name:'退单',nodes:[156]});*/
/* 			var cxApp = cs.approve_authority({name:'退单',nodes:[269]});*/
/* 			var edit_statu = cs.getNodes([155],true);*/
/* 			for(var i in data) {*/
/* */
/* 				content += `<tr data-id='${data[i]["ckm_retreat.id"]}'  data-status="${data[i]['ckm_retreat.auth_status']}">*/
/* 						<td style="display: ${styles[0]}">*/
/* 						<label class="pos-rel">*/
/*                     		<a href="#" class="pos-rel btOrange info" title="详情" style="color:#fff !important"><i class="fa fa-info "></i></a>*/
/*                         </label>*/
/* 						</td>*/
/* */
/* 						<td data-num = "1" style="display: ${styles[1]}" data-id="${data[i]['khm_customer.id']}" data-cid="${data[i]['khm_customer.id']}">*/
/* 							<a class="customerDetail pos-rel" href="#">*/
/* 								${data[i]['khm_customer.name']}*/
/* 			 				 </a>*/
/* 			 				 <label class="pos-rel">*/
/* 				 				<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}" data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>*/
/* 			 				 </label>*/
/* 						</td>*/
/* 						<td data-num = "2" style="display: ${styles[2]}">*/
/* 							${data[i]['ckm_retreat.month']}*/
/* 						</td>*/
/* 						<td data-num = "3"  style="display: ${styles[3]}">*/
/* 							${employees[data[i]['ckm_retreat.fuze_id']]}*/
/* 						</td>*/
/* 						<td data-num = "4" style="display: ${styles[4]}" >*/
/* 							${data[i]['ckm_retreat.creata_at'] != '0' ? cs.getNowTime(data[i]['ckm_retreat.creata_at'],true) : ''}*/
/* 						</td>*/
/* 						<td data-num = "5" style="display: ${styles[5]}">*/
/* 							${data[i]['ckm_retreat.reason']}*/
/* 						</td>*/
/* 						<td data-num = "6" style="display: ${styles[6]}">*/
/* 							${data[i]['jzm_send_info.status']?status1[data[i]['jzm_send_info.status']]:''}*/
/* 						</td>*/
/* 					</tr>`;*/
/* 			}*/
/* */
/* 			$('#datalist').html(content);*/
/* 			custom.showReamrk();*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/* 			custom.get_custom_info();*/
/* */
/* 			$("#datalist tr").find('.sp').click(function() {*/
/* 				var status = $(this).attr('data-status');*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				changeStatus(status, id);*/
/* 			})*/
/* */
/* 			//编辑*/
/* 			$('.edit').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				var index = $(this).parents('tr').index();*/
/* 				var _data = data[index];*/
/* */
/* 				console.log(_data);*/
/* 				showMark('.popup_new');*/
/* 				$('#showBox .title').text('编辑');*/
/* */
/* 				var field = '';*/
/* 				$('#templateCon [addfied]').each(function(i,e){*/
/* 					field = 'ckm_retreat.' + $(this).attr('addfied');*/
/* 					if($(this).attr('addfied') == 'creata_at'){*/
/* 						$(this).val(cs.getNowTime(_data[field]));*/
/* 						return true;*/
/* 					}*/
/* 					$(this).val(_data[field]);*/
/* 				});*/
/* */
/* 				cs.timeplug();*/
/* 				var customer_id = $(this).parents('tr').find('[data-num="3"]').attr('data-id');*/
/* 				var param = {*/
/* 					name:$(this).parents('tr').find('[data-num="3"]').attr('data-cid'),*/
/* 					time:$(this).parents('tr').find('[data-num="4"]').text().trim()*/
/* 				}*/
/* 				$('#templateBox .sure_button').click(function() {*/
/* 					var status = false;*/
/* 					var data = {};*/
/* 					var is_send = false;*/
/* 					if ($('#templateCon #sendMsg input:checked').val()==1) {*/
/* 						is_send = true;*/
/* 					}*/
/* 					$('#templateBox').find('[addfied]').each(function(i) {*/
/* 						if($(this).attr('addfied') == 'creata_at' && $(this).val() == '') {*/
/* 							ykp.prompt("配送时间不能为空！");*/
/* 							status = false;*/
/* 							return false;*/
/* 						} else {*/
/* 							if($(this).val() != "") {*/
/* 								data[$(this).attr('addfied')] = $(this).attr('addfied') == 'creata_at' ? new Date($(this).val()) / 1000 : $(this).val();*/
/* 								status = true;*/
/* 							}*/
/* 						}*/
/* 					})*/
/* 					var type = $('#templateCon [addfied="status"]').val() =='1'?'送单成功':'送单失败';*/
/* 					if ($('#templateCon [addfied="status"]').val() !='1') {*/
/* 						param['msg'] = $('#templateCon [addfied="reason"]').val();*/
/* 					}*/
/* 					*/
/* 					if(status) {*/
/* 						data.id = id;*/
/* 						ykp.doAjax({*/
/* 							url:'/api/api_accountancies/edit_retreat',*/
/* 							method:'post',*/
/* 							data:data,*/
/* 							success:function(res) {*/
/* 								ykp.prompt('编辑成功');*/
/* 								if (is_send) {*/
/* 									sendMsg(customer_id,type,param);*/
/* 								}*/
/* 								cs.close();*/
/* 								getList(1);*/
/* 							}*/
/* 						})*/
/* 					}*/
/* 				})*/
/* 			})*/
/* */
/* 			//详情*/
/* 			$('.info').click(function() {*/
/* 				var cid = $(this).parents('tr').attr('data-id');*/
/* 				showMark("#template");*/
/* 				$('#showBox .title').text('退单详情');*/
/* 				//var emps=allemp();*/
/* 				var empname;*/
/* 				var status = ['待审核', '未通过', '已通过'];*/
/* 				var status_2 = ['未配送', '配送成功', '配送失败'];*/
/* 				var status1 = {'-1':'出库失败', '0':'出库中','1': '带送单','2':'送单成功','3':'带入库','4':'入库成功','5':'入库失败'};*/
/* 				var tstatus = {*/
/* 					3:"待入库",*/
/* 					4:"已入库",*/
/* 					5:"入库失败",*/
/* 				}*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_accountancies/retreat_grid',*/
/* 					methods: 'post',*/
/* 					data: {*/
/* 						filter: 'ckm_retreat.id=' + cid*/
/* 					},success:function(res){*/
/* 						var data=res.data.items[0];*/
/* 						$('#templateCon .disData0').text(data['khm_customer.name']);*/
/* 						$('#templateCon .disData1').text(data['ckm_retreat.month']);*/
/* 						$('#templateCon .disData2').text(employees[data['ckm_retreat.fuze_id']]);*/
/* 						$('#templateCon .disData3').text(cs.getNowTime(data['ckm_retreat.creata_at']));*/
/* 						$('#templateCon .disData4').text(data['ckm_retreat.reason']);*/
/* 						$('#templateCon .disData5').text(status1[data['jzm_send_info.status']]);*/
/*                         $("#temHeader").width($("#showBox").width()-47);*/
/* 					}*/
/* 				})*/
/* 			})*/
/* 		}*/
/* */
/* 		function sendMsg(id,type,param){*/
/* 			ykp.doAjax({*/
/* 				url:'/api/api_common/send_customer',*/
/* 				data:{*/
/* 					customer_id:id,*/
/* 					type:type,*/
/* 					param:JSON.stringify(param)*/
/* 				},*/
/* 				method:'post',*/
/* 				success:function(res){*/
/* 					ykp.prompt('短信发送成功！');*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		function changeStatus(status, id) {*/
/* 			//console.log(status, id)*/
/* 			var data = {*/
/* 				url: '/api/api_accountancies/sh_retreat',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					id: id,*/
/* 					auth_status: status*/
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
/* 					data.data.approve_reply = approve_reply.trim();*/
/* 					data.data.approve_reply = approve_reply;*/
/* 					setStatus(data);*/
/* 					$('.close_label').parents('.label_popup').fadeOut();*/
/* 				})*/
/* 				cs.closePop();*/
/* 			} else if(status == 0){*/
/*                 bootbox.confirm('确认撤销审批？', function(flag){*/
/*                     if(flag){*/
/*                         setStatus(data);*/
/*                     }*/
/*                 })*/
/*             }else {*/
/* 				setStatus(data);*/
/* 			}*/
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
/* 		//自定义table*/
/* 		cs.custorm_check('#dynamic-table', '#datalist', false);*/
/* */
/* */
/* 		// $('.add').click(function() {*/
/* 		// 	showMark('.popup_new');*/
/* 		// });*/
/* 	});*/
/* </script>*/
