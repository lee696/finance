<?php

/* admin/financialManagement/expenditure.html */
class __TwigTemplate_fc91f5afbe526893761e5943066a155de46d63b754c2df30f7a63aa7d693a208 extends Twig_Template
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
        echo "<style>
\t#templateCon label{
\t\twidth:65px;
\t}
\t.btnBlue:hover ,.btnBlue:active,.redBlue:hover ,.redBlue:active,.btnGreen:hover,.btnGreen:active {
\t\tcolor: #fff;
\t}
</style>
<div class=\" widget-main\">
\t<div class=\"row\">
\t\t<!--         <h3 class=\"header smaller lighter blue\">支出</h3> -->
\t\t<div class=\"actions\" id=\"topTool\">
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<input type=\"text\" pts=\"0\" sear=\"cwm_expenditure.order_id\" placeholder=\"支出编号\">
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<input type=\"text\" pts=\"0\" sear=\"cwm_expenditure.object_name\" placeholder=\"支出对象\">
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<input type=\"text\" pts=\"0\" sear=\"cwm_expenditure.contract_num\" placeholder=\"订单编号\">
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<select style=\"width: 180px\" pts=3 sear=\"cwm_expenditure.duty_id\" class=\"advandced-search select2-hidden-accssible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t<option value=\"\">负责人 </option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<select style=\"width: 180px\" pts=3 sear=\"cwm_expenditure.create_id\" class=\"advandced-search select2-hidden-accssible\"  tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t<option value=\"\">创建人 </option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<select style=\"width: 180px\" pts=3 sear=\"cwm_expenditure.auth_id\" class=\"advandced-search select2-hidden-accssible\"  tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t<option value=\"\">审批人 </option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<button id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                        <button id=\"heightsearch\" title=\"高级搜索\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color:#00c0ef !important;\">
                            <i class=\"fa fa-filter\"></i>
                        </button>
             </div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t<button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
                    <i class=\"fa fa-refresh\"></i>
                </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" contentAuthority=\"168\" style=\" float: left;margin-right: 5px;\">
            \t<button title=\"添加\" class=\"add_expenditure btn btn-info btn-sm\" style=\" background-color: #32CD32 !important;\">
\t                <i class=\"fa fa-plus\"></i>
\t            </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" contentAuthority=\"169\" style=\" float: left;margin-right: 5px;\">
            \t<button title=\"批量审批\" class=\"btn btn-info  btn-sm sp plSp\" style=\"background-color: #32CD32 !important; border-color: #32CD32;\">
\t\t\t\t\t<i class=\"fa fa-check-circle-o\"></i>
\t            </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" id=\"expbt\" style=\"display: none; float: left; margin-right: 5px;\">
\t\t\t\t<button type=\"button\"  title=\"导出\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"exportfile moveToClue btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t\t<i class=\"fa fa-sign-out\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
            \t<div id=\"filterBtns\" style=\"display:inline-block;width:290px;height: 36px\">
\t\t            <a href=\"javascript:void(0);\" class=\"myFilter\" style=\"background: #E6E6E6;line-height:22px\" data-status=\"a\">全部</a>
\t\t            <a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:22px\" data-status=\"0\"></i> 待审批</a>
\t\t            <a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:22px\" data-status=\"2\"> 已通过</a>
\t\t            <a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:22px\" data-status=\"1\"> 未通过</a>
\t\t        </div>
\t\t\t</div>
\t\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"position: absolute;margin-top: 65px; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;\">
\t\t\t\t<div class=\"row\" id=\"SearchCon\">
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<!--审批-->
\t\t</div>
\t</div>
\t<div class=\"custom_table\"> 
\t\t
\t\t<table id=\"dynamic-table\">
\t\t\t<thead>
\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t<th class=\"center\">
\t\t\t\t\t\t<label class=\"pos-rel\">
                                <input type=\"checkbox\" class=\"ace\" onclick=\"cs.checkAll(this.checked)\"/>
                                <span class=\"lbl\"></span>
                            </label>
\t\t\t\t\t</th>
\t\t\t\t\t<th>操作</th>
\t\t\t\t\t<th data-num=\"4\">审批状态</th>
\t\t\t\t\t<th data-num=\"1\">支出编号</th>
\t\t\t\t\t<th data-num=\"2\">支出对象</th>
\t\t\t\t\t<!--<th data-num=\"3\">订单编号</th>-->
\t\t\t\t\t
\t\t\t\t\t<th data-num=\"5\">支出日期</th>
\t\t\t\t\t<th data-num=\"6\">支出类别</th>
\t\t\t\t\t<th data-num=\"7\" style=\"text-align: right !important;\">支出金额(元)</th>
\t\t\t\t\t<!--<th data-num=\"8\">支付方式</th>
\t\t\t\t\t<th data-num=\"9\">支付账户</th>-->
\t\t\t\t\t<th data-num=\"0\">支付方式</th>
\t\t\t\t\t<th data-num=\"10\">负责人</th>
\t\t\t\t\t<th data-num=\"11\">备注</th>
\t\t\t\t\t<th data-num=\"12\">创建人</th>
\t\t\t\t\t<th data-num=\"13\">创建时间</th>
\t\t\t\t\t<th data-num=\"14\">审批人</th>
\t\t\t\t\t<th data-num=\"15\">审批时间</th>
\t\t\t\t\t<th data-num=\"16\">审批备注</th>
\t\t\t\t\t<th data-num=\"17\">结算人</th>
\t\t\t\t\t<th data-num=\"18\">结算时间</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody id=\"datalist\">

\t\t\t</tbody>
\t\t</table>
\t</div>
\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t<div align=\"left\" style=\"padd_expenditeruing-left: 15px; float: left; width: 10%;\" id=\"num\"></div>
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
\t<div class=\"label_popup\" id=\"feedBack\" style=\"display:none;position: fixed; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: 1050;\">
\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t    box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t<span style=\"display: inline-block;\">请填写驳回原因</span>
\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t</div>
\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t<input type=\"text\" width=\"200px\" style=\"margin: auto;\" id=\"labelName\">
\t\t\t\t<!--<hr>-->
\t\t\t</div>
\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t<button class=\"close_label\">关闭</button>
\t\t\t\t<button class=\"hold\">保存</button>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"popup_acount\" style=\"display:none\">
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 结算方式：</label>
\t\t\t<select field=\"give_type\" name=\"give_type\" msg=\"请选择支出方式\" style=\"width:180px;\">
\t\t\t\t<option value=\"\">
\t\t\t\t\t请选择结算方式
\t\t\t\t</option>
\t\t\t\t<option value=\"1\">现金</option>
\t\t\t\t<option value=\"2\">支付宝</option>
\t\t\t\t<option value=\"3\">微信</option>
\t\t\t\t<option value=\"4\">银行卡</option>
\t\t\t</select>
\t\t\t<label> 结算账户：</label>
\t\t\t<select field=\"accounts\" class=\"agreement\" style=\"width:180px;\">
\t\t\t\t<option value=\"\">请选择结算账户</option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"popup_button\">
\t\t\t<button class=\"sure_button\">
                    <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                    保存
             </button>
\t\t</div>
\t</div>

\t<div class=\"popup_new\" style=\"display:none\">
\t\t<div class=\"row\">
\t\t\t<form class=\"item_form\" role=\"form\">
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 支出类别： </label>
\t\t\t\t\t<select affied=\"give_way\" validate=\"required\" name=\"give_way\" msg=\"请选择支出类别\">
\t\t\t\t\t\t<option value=\"\">请选择支出类别</option>
\t\t\t\t\t\t<option value=\"1\">退款</option>
\t\t\t\t\t\t<option value=\"2\">费用</option>
\t\t\t\t\t\t<option value=\"3\">报销</option>
\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t
\t\t\t\t\t<label> 负责人： </label>
\t\t\t\t\t<select affied=\"duty_id\" validate=\"required\" name=\"duty_id\" msg=\"请选择负责人\">
\t\t\t\t\t\t<option value=\"\"> 请选择负责人 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 对象类别： </label>
\t\t\t\t\t<select affied=\"object_type\" validate=\"required\" name=\"object_type\" msg=\"请选择对象类别\">
\t\t\t\t\t\t<option value=\"\">请选择 </option>
\t\t\t\t\t\t<option value=\"1\">公司</option>
\t\t\t\t\t\t<option value=\"2\">员工 </option>
\t\t\t\t\t\t<option value=\"3\">部门</option>
\t\t\t\t\t</select>
\t\t\t\t\t<!-- <label> 关联对象： </label>
\t\t\t\t\t<select addifed=\"object\" id=\"object\" >
\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t- - - 请选择
\t\t\t\t\t\t</option>
\t\t\t\t\t</select> -->
\t\t\t\t\t<label> 关联对象： </label>
\t\t\t\t\t<select affied=\"object\" id=\"object\" validate=\"required\" class=\"agreement select2 \" msg=\"请选择关联对象\">
\t\t\t\t\t\t<option value=\"\">  请选择  </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<!--<div class=\"form_data\">
\t\t\t\t\t&lt;!&ndash; <label> 公司名称： </label>
\t\t\t\t\t<select affied=\"customer_id\" class=\"agreement select2 \">
\t\t\t\t\t\t<option value=\"\">  请选择公司  </option>
\t\t\t\t\t</select> &ndash;&gt;
\t\t\t\t\t<label class=\"order\" style=\"display:none;\"> 订单编号： </label>
\t\t\t\t\t<select class=\"order\" style=\"display:none;\" affied=\"contract_num\" name=\"contract_num\" msg=\"请选择订单编号\">
\t\t\t\t\t\t<option value=\"\"> 请选择订单编号 </option>
\t\t\t\t\t</select>
\t\t\t\t\t
\t\t\t\t</div>-->
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 支出日期： </label>
\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t<input class=\"date-timepicker1 required\" affied=\"give_time\" validate=\"required\" name=\"give_time\" msg=\"入库时间不能为空\" class=\"form-control\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t<span class=\"input-group-add_expenditeruon\" style=\"width: 30px;height:30px;background: #ddd;position: relative;\">
\t                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:-7px;top:7px;\"></i>
\t                        </span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<label> 支出金额： </label>
\t\t\t\t\t<input affied=\"give_money\" name=\"give_money\" type=\"number\" validate=\"required\" validate=\"/^(0|[1-9]\\d*)(\\.\\d{1,2})?\$/\" msg=\"请填写正确的金额\"/>

\t\t\t\t</div> 
\t\t\t\t<div class=\"form_data expenditrue_edit\" style=\"display: none;\">
\t\t\t\t\t<label> 结算方式：</label>
\t\t\t\t\t<select name=\"give_type\"   msg=\"请选择结算方式\">
\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t- - - 请选择结算方式
\t\t\t\t\t\t</option>
\t\t\t\t\t\t<option value=\"1\">现金</option>
\t\t\t\t\t\t<option value=\"2\">支付宝</option>
\t\t\t\t\t\t<option value=\"3\">微信</option>
\t\t\t\t\t\t<option value=\"4\">银行卡</option>
\t\t\t\t\t</select>
\t\t\t\t\t<input style=\"display: none\" class=\"payway\" disabled/>
\t\t\t\t\t<label class=\"paynum\"> 结算账户： </label>
\t\t\t\t\t<input class=\"paynum\" affied=\"accounts\" name=\"accounts\" type=\"text\" validate=\"int\" msg=\"请输入正确的账户\"/>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data expenditrue_edit\" style=\"display: none;\">
\t\t\t\t\t<label> 结算人： </label>
\t\t\t\t\t<input affied=\"clearing_name\" name=\"accounts\" type=\"text\" validate=\"int\" msg=\"请输入正确的账户\"/>
\t\t\t\t\t<label> 结算时间：</label>
\t\t\t\t\t<!--<select affied=\"clearin_time\" name=\"clearin_time\" msg=\"请选择结算方式\">-->
\t\t\t\t\t<input affied=\"clearing_time\" name=\"clearing_time\" type=\"text\" validate=\"int\" msg=\"请输入正确的账户\"/>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t

\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label style=\"float:left;\"> 备注： </label>
\t\t\t\t\t<textarea affied=\"remark\" name=\"remark\" msg=\"请填写备注信息\" style=\"padding:5px;width:calc(100% - 70px);margin-left:5px;\"></textarea>
\t\t\t\t</div>
\t\t\t\t<!-- <div style=\"margin-top:15px;\">
\t\t\t\t\t<label style=\"float:left;margin-right:5px;\"> 图片： </label>
                   <label class=\"\" style=\"position:relative;top:2px;border:1px solid #000;line-height:70px;width:70px;height:70px;cursor: pointer; text-align: center;\">
                        <i class=\"fa fa-plus fa-2x\" aria-hidden=\"true\" style=\"position: relative;top: 5px;\"></i>
                        <input type=\"file\" class=\"uploadImg \" style=\"position: absolute;opacity: 0;left:-9999px;\">
                    </label>
\t\t\t\t</div> -->
\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t<label style=\"float:left;margin-right:5px;\"> 图片： </label>
\t\t\t\t\t<div class=\"\" style=\"padding: 2px; margin-top: 20px;margin-left: 70px;\">
\t\t\t\t\t\t<div id=\"fileBox\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"imgBox\">
\t\t\t\t\t\t\t<label class=\"upbx\" style=\"text-align: center;border: 1px solid;width: 70px;position: relative;height: 70px; cursor: pointer; text-align: center;line-height: 70px;font-size: 70px;\">
\t\t\t\t\t\t\t\t<input type=\"file\" class=\"uploadFiles\" style=\"position:absolute;left:-9999px;opacity: 0;\" />
\t\t\t\t\t\t\t\t<span class=\"\" style=\"display: inline-block;position: absolute;top: 0;left: 14px; cursor: pointer; text-align: center;\">+</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--<div id=\"uploadBox\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"upload1\" style=\"outline: none;background-color: #009688 !important; margin-top: 20px;\" class=\"btn btn-info btn-sm position-relative\">
\t\t\t\t                        上传文件
\t\t\t\t        \t</button>
\t\t\t\t\t\t</div>-->
\t\t\t\t\t</div>
                   <!--<label class=\"\" style=\"position:relative;top:2px;border:1px solid #000;line-height:70px;width:70px;height:70px;cursor: pointer; text-align: center;\">
                        <i class=\"fa fa-plus fa-2x\" aria-hidden=\"true\" style=\"position: relative;top: 5px;\"></i>
                        <input type=\"file\" class=\"uploadImage _decrease\" style=\"position: absolute;opacity: 0;left:-9999px;\">
                    </label>-->
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<div class=\"popup_button\">
\t\t\t\t<button class=\"sure_button\">
                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                        保存
                 </button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 310
        $this->loadTemplate("admin/mark.html", "admin/financialManagement/expenditure.html", 310)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/financialManagement/expenditure.html", 310)->display($context);
        // line 311
        echo "</div>
<script src=\"/resource/adimin/assets/js/LocalResizeIMG.js\"></script>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script type=\"text/javascript\">
\t\$(function() {

        //导出功能
        cs.exportFile({
            url:\"/api/api_finance/zc_export\",
            title:\"支出记录\"
        });
\t\tcs.getNodes([168]);
\t\tif(cs.approve_authority({name:'支出',nodes:[169]})){
            \$('[contentAuthority=\"169\"]').show();
        }
\t\tvar order ='cwm_expenditure.id desc';
\t\t//分页
\t\tvar page_size = 10;
\t\tvar employees= {};
\t\tvar accounts = {};
\t\tvar filter ='';

\t\t//所有账户
\t\tykp.doAjax({
\t\t\tasync:false,
\t\t\turl:'/api/api_bank/f7',
\t\t\tmethod:'post',
\t\t\tdata:{
\t\t\t\tselect:'xtm_kh_bank.id,xtm_kh_bank.type,xtm_kh_bank.bank_name'
\t\t\t},
\t\t\tsuccess:function(res){
\t\t\t\tvar data = res.data;
\t\t\t\tfor(var i in data){
\t\t\t\t\taccounts[data[i]['id']] = data[i];
\t\t\t\t}
\t\t\t}
\t\t});
        if(cs.getNodes([308], true)) {
            \$(\"#expbt\").show();
        }
\t\t
\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_finance/expenditure_list',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter:\"\",
\t\t\t\tpage_size: page_size
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '.pageBar'
\t\t\t},
\t\t\tcontentId:\"#datalist\",  //默认排序
\t\t\tinitOrder:\"\",   //初始化sort
\t\t\tdefaultOrder:order,
\t\t\tparams:[{
\t\t\t\tid:\"#dynamic-table\",
\t\t\t\tfield:[\"\",\"\",\"cwm_expenditure.status\",\"cwm_expenditure.order_id\",\"cwm_expenditure.object\",\"cwm_expenditure.give_time\",\"cwm_expenditure.give_way\",\"cwm_expenditure.give_money\",\"\",\"\",\"\",
\t\t\t\t\"cwm_expenditure.create_id\",\"cwm_expenditure.create_at\",\"cwm_expenditure.auth_id\",\"cwm_expenditure.auth_time\",\"cwm_expenditure.auth_remark\",\"cwm_expenditure.clearing\",\"cwm_expenditure.clearing_time\"]
\t\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\tadd_expenditeruList(res);
\t\t});
\t\t\t

\t\t\$('.myFilter').click(function() {
            if (!\$(this).hasClass('clc')) {
                \$(this).addClass('clc').siblings().removeClass('clc');
            }
            var data = {
                \"limit\": page_size,
                'page':1,
                'order':order
            }
        \t\t
            var filter_ =  \$(this).attr('data-status');
            if (filter_ == 'a') {
                getList();
                return;
            }
            filter = 'cwm_expenditure.status = '+filter_;
            data['filter'] = 'cwm_expenditure.status = '+filter_;
            getList_2(1,data);
        })

        \$('#filterBtns a').mouseover(function(){
            \$(this).addClass('over');
        })
        \$('#filterBtns a').mouseout(function(){
            \$(this).removeClass('over');
        })\t

\t\t//获取所有员工
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
                \t if(data[i]['name']) {
                    employees[data[i]['id']] =data[i]['name'] ;
                    \$('.advandced-search').append(new Option(data[i]['name'],data[i]['id']));
                }
                \t}
            }
        });

\t\ttspage();
\t\tfunction tspage(){
\t\t\tif (ykp.getCookie('detailsId')&&ykp.getCookie('detailsId')!='') {
\t\t\t\tvar id = ykp.getCookie('detailsId');
\t\t\t\tvar data = {
\t\t\t\t\tlimit:page_size,
\t\t\t\t\tfilter:`cwm_expenditure.id = \${id}`
\t\t\t\t}
\t\t\t\tgetList_2(1,data);
\t\t\t\tykp.setCookie('detailsId','',1/24);
\t\t\t}else{
\t\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\t\tykp.setCookie(\"where\", \"\");
\t\t\t\tgetList(1);
\t\t\t}
\t\t}

\t\t\$('#flush').click(function(){
\t\t\tfilter = \"\";
\t\t\t\$('[pts=\"0\"]').val('');
\t\t\t\$('[sear=\"cwm_expenditure.duty_id\"]').val('').trigger('change');
\t\t\t\$('[sear=\"cwm_expenditure.create_id\"]').val('').trigger('change');
\t\t\t\$('[sear=\"cwm_expenditure.auth_id\"]').val('').trigger('change');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetList();
\t\t})


\t\tfunction getList_2 (current,data) {
\t\t\tykp.list({
\t\t\t\turl: '/api/api_finance/expenditure_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: data,
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\tadd_expenditeruList(res);
\t\t\t\t}
\t\t\t});
\t\t}

\t\tgetSearch();\t
\t\tfunction getSearch() {
\t\t\t
\t\t\tvar list = [
\t\t\t\t{name:\"支出编号\",search:\"cwm_expenditure.order_id\",type:\"text\"},
\t\t\t\t{name:\"支出对象\",search:\"cwm_expenditure.object_name\",type:\"text\"},
\t\t\t\t{name:\"订单编号\",search:\"cwm_expenditure.contract_num\",type:\"text\"},
\t\t\t\t{name:\"审批状态\",search:\"cwm_expenditure.status\",type:\"select\",option:[{val:\"0\",text:\"待审批\"},{val:\"2\",text:\"已通过\"},{val:\"1\",text:\"未通过\"}]},
\t\t\t\t{name:\"支出日期\",search:\"cwm_expenditure.give_time\",type:\"time\"},
\t\t\t\t{name:\"支出类别\",search:\"cwm_expenditure.give_way\",type:\"select\",option:[{val:\"1\",text:\"退款\"},{val:\"2\",text:\"费用\"},{val:\"3\",text:\"报销\"}]},
\t\t\t\t{name:\"支出金额(元)\",search:\"cwm_expenditure.give_money\",type:\"text\"},
\t\t\t\t{name:\"支付方式\",search:\"cwm_expenditure.give_type\",type:\"select\",option:[{val:\"1\",text:\"现金\"},{val:\"2\",text:\"支付宝\"},{val:\"3\",text:\"微信\"},{val:\"4\",text:\"银行卡\"}]},
\t\t\t\t{name:\"支付账户\",search:\"cwm_expenditure.accounts\",type:\"text\"},
\t\t\t\t{name:\"负责人\",search:\"cwm_expenditure.duty_id\",type:\"select\",url:\"/api/api_employees/f7\",key:\"people\"},
\t\t\t\t{name:\"备注\",search:\"cwm_expenditure.remark\",type:\"text\"},
\t\t\t\t{name:\"创建人\",search:\"cwm_expenditure.create_id\",type:\"select\",url:\"/api/api_employees/f7\",key:\"people\"},
\t\t\t\t{name:\"创建时间\",search:\"cwm_expenditure.create_at\",type:\"time\"},
\t\t\t\t{name:\"审批人\",search:\"cwm_expenditure.auth_id\",type:\"select\",url:\"/api/api_employees/f7\",key:\"people\"},
\t\t\t\t{name:\"审批时间\",search:\"cwm_expenditure.auth_time\",type:\"time\"},
\t\t\t\t{name:\"结算人\",search:\"cwm_expenditure.clearing\",type:\"select\",url:\"/api/api_employees/f7\",key:\"people\"},
\t\t\t\t{name:\"结算时间\",search:\"cwm_expenditure.clearing_time\",type:\"time\"}
\t\t\t];
\t\t\t
\t\t\t
\t\t\tcs.getSearch({
\t\t\t\tlist:list,
\t\t\t\tel:\"#heightsearch\",
\t\t\t\tel1:\"#heightsearch1\"
\t\t\t},dohSearch);
\t\t\tfunction dohSearch() {
\t\t\t\tvar data = {
\t\t\t\t\turl: '/api/api_finance/expenditure_list',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tlimit:page_size,
\t\t\t\t\t\torder:'cwm_expenditure.id desc',
\t\t\t\t\t\tfilter: filter
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
\t\t\t\t\tadd_expenditeruList(res);
\t\t\t\t})
\t\t\t}\t\t\t\t\t
\t\t}


\t\tsearch();
\t\tfunction search() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_finance/expenditure_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\ttype: 1,
\t\t\t\t\tlimit: page_size,
\t\t\t\t\torder:order
\t\t\t\t}
\t\t\t}
\t\t\t
\t\t\tcs.doSearch('#search', data, 'filter', false, function(res,_filter) {
\t\t\t\tfilter = _filter;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t} else {
\t\t\t\t\tadd_expenditeruList(res);
\t\t\t\t}
\t\t\t});
\t\t}
\t\t
\t\t//getList(1);

\t\tfunction getList(current) {
\t\t\tykp.list({
\t\t\t\turl: '/api/api_finance/expenditure_list',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: page_size,
\t\t\t\t\torder:order,
\t\t\t\t\tfilter:filter
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
\t\t\t\t\t
\t\t\t\t\tadd_expenditeruList(res);
\t\t\t\t}
\t\t\t});
\t\t}
\t\t\$('#changePageNum').change(function() {
\t\t\tpage_size = \$(this).val();
\t\t\tykp.setCookie('page_size',page_size);
\t\t\tgetList(1);
\t\t})

\t\tfunction add_expenditeruList(res) {
\t\t\tvar content = [];
\t\t\tvar data = res.data.items;
\t\t\tvar ths = \$('#dynamic-table .thColor th');
\t\t\tvar styles = [];
\t\t\tvar kinds = ['','退款','费用','报销'];//支出类别
\t\t\tvar ways = ['','现金','支付宝','微信','银行卡'];//支出方式
\t\t\tvar Status = ['待审批','未通过','已通过'];  //审核审批状态
\t\t\tfor(i = 0; i < ths.length; i++) {
\t\t\t\tstyles.push(ths.eq(i).css('display'));
\t\t\t}
\t\t\tfor(var i in data){
\t\t\t\tdata[i]['Remark'] = cs.getRemark(data[i]['Remark']);
\t\t\t}

\t\t\t//审批权限为true可以审批,为false不可审批
\t\t\tvar spApp = cs.approve_authority({name:'支出',nodes:[172]});
\t\t\tvar cxApp = cs.approve_authority({name:'支出',nodes:[272]});
\t\t\tvar edit1_statu = cs.getNodes([170],true);
\t\t\tconsole.log(edit1_statu);
\t\t\tvar edit2_statu = cs.getNodes([171],true);
\t\t\tvar company;
\t\t\tfor(var i in data) {
\t\t\t\t//根据支出对象显示不同的内容
\t\t\t\t// console.log(data[i]['cwm_expenditure.object']);
\t\t\t\tcompany = '<a class=\"customerDetail pos-rel\" href=\"#\">'+data[i]['cwm_expenditure.object_name']+'</a> ' +
\t\t\t\t\t'<label class=\"pos-rel\"> <i class=\"iconBnt fa fa-info-circle\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"'+data[i]['Remark']+'\" ></i></label>';
\t\t\t\tvar others = data[i]['cwm_expenditure.object_name'];
\t\t\t\tvar theType = data[i]['cwm_expenditure.object_type']==1?company:others;
\t\t\t\tcontent.push('<tr data-id=\"' + data[i]['cwm_expenditure.id'] + '\"   data-status=\"' +data[i]['cwm_expenditure.status']+'\">' +
\t\t\t\t\t'<td class=\"center\" style=\"display: ' + styles[0] + ' \">' +
\t\t\t\t\t'<label class=\"pos-rel\">' +
\t\t\t\t\t'<input type=\"checkbox\" name=\"check\" class=\"ace\"/>' +
\t\t\t\t\t'<span class=\"lbl\"></span>' +
\t\t\t\t\t'</label>' +
\t\t\t\t\t'</td>' +
\t\t\t\t\t'<td><label class=\"pos-rel\">' +
\t\t\t\t\t
\t\t\t\t\t'<a class=\"btOrange sdetail\" style=\"margin-right:5px; color:#fff !important\" title=\"详情\"><i class=\"fa fa-info \"></i></a>'+
                    '<a href=\"#\" class=\"edit1\" contentAuthority=\"170\" style=\"display:' + (edit1_statu ? (data[i]['cwm_expenditure.status'] == 1? 'inline-block' : 'none') : 'none') + ';\"> <span class=\"lbl btBlue\" title=\"编辑\" ><i class=\"fa fa-pencil-square-o\"></i></span></a> ' +
                    '<a href=\"#\" class=\"edit2 btBlue\" contentAuthority=\"171\" style=\"display:' + (edit2_statu ? (data[i]['cwm_expenditure.status'] == 2 && data[i]['cwm_expenditure.give_type'] == 0 ? 'inline-block' : 'none') : 'none') + ';\"> <span class=\"lbl \" title=\"结算\"><i class=\"fa fa-calculator\"></i></span></a> ' +
\t\t\t\t\t'<a href=\"#\" class=\"sp btOrange\" contentAuthority=\"272\" data-status = \"0\" style=\"display:' + (cxApp ? (data[i]['cwm_expenditure.status'] == 2 && data[i]['cwm_expenditure.give_type'] == 0 ? 'inline-block' : 'none') : 'none') + ';color:#fff !important\" title=\"撤销\"><i class=\"fa fa-rotate-left\"></i></a> ' +
\t\t\t\t\t'<a href=\"#\" class=\"sp btGreen\" contentAuthority=\"172\" data-status = \"2\" style=\"display:' + (spApp ? (data[i]['cwm_expenditure.status'] == 0  ? 'inline-block' : 'none') : 'none') + ';color:#fff !important\" title=\"通过\"><i class=\"fa fa-check-circle-o\"></i></a> ' +
\t\t\t\t\t'<a href=\"#\" class=\"sp btRed\" contentAuthority=\"172\" data-status = \"1\" style=\"display:' + (spApp ? (data[i]['cwm_expenditure.status'] == 0  ? 'inline-block' : 'none') : 'none') + ';color:#fff !important\" title=\"驳回\"><i class=\"fa fa-times-circle\"></i></a> ' +
\t\t\t\t\t'</td></label>' +
\t\t\t\t\t'<td style=\"display: ' + styles[5] + '\" data-num=\"4\">' + Status[data[i]['cwm_expenditure.status']] + '</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[2] + '\" data-num=\"1\">' + data[i]['cwm_expenditure.order_id'] + '</td>' +
\t\t\t\t\t'<td data-cid='+data[i]['cwm_expenditure.object']+' style=\"display: ' + styles[3] + '\" data-num=\"2\">'+theType+'</td>'+
//\t\t\t\t\t'<td style=\"display: ' + styles[4] + '\" data-num=\"3\">' + data[i]['cwm_expenditure.contract_num'] + '</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[6] + '\" data-num=\"5\">' + cs.getNowTime(data[i]['cwm_expenditure.give_time']) + '</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[7] + '\" data-num=\"6\">' + (data[i]['cwm_expenditure.give_way'] != '0' ? kinds[data[i]['cwm_expenditure.give_way']] : '') + '</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[8] + ';text-align: right !important;\" data-num=\"7\">' + data[i]['cwm_expenditure.give_money'] + '</td>' +
//\t\t\t\t\t'<td style=\"display: ' + styles[9] + '\" data-num=\"8\">' + (data[i]['cwm_expenditure.give_type'] != '' ? ways[data[i]['cwm_expenditure.give_type']] : '') + '</td>' +  
                     '<td style=\"display: ' + styles[0] + '\" data-num=\"0\"><sapn class=\"cedit\">' + (ways[data[i]['cwm_expenditure.give_type']] ? (ways[data[i]['cwm_expenditure.give_type']]) : \"\") + ( data[i]['xtm_kh_bank.bank_name'] != '0' ? (data[i]['xtm_kh_bank.bank_name']? \"，\" +data[i]['xtm_kh_bank.bank_name'] :'') : '') + '</sapn></td>' +
//\t\t\t\t\t'<td style=\"display: ' + styles[10] + '\" data-num=\"9\">' + data[i]['xtm_kh_bank.bank_name']+ '</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[13] + '\" data-num=\"10\">' + (employees[data[i]['cwm_expenditure.duty_id'] ] || employees[data[i]['cwm_expenditure.create_id']] || \"\") + '</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[12] + '\" data-num=\"11\">' + data[i]['cwm_expenditure.remark']+\"<span style='display:\" +(data[i]['cwm_expenditure.contract_num'] ? \"inline-block\" : \"none\") +\"'>，订单编号：\" + data[i]['cwm_expenditure.contract_num'] + '<span></td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[13] + '\" data-num=\"12\">' + employees[data[i]['cwm_expenditure.create_id']] + '</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[14] + '\" data-num=\"13\">' + cs.getNowTime(data[i]['cwm_expenditure.create_at'],true) + '</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[15] + '\" data-num=\"14\">' + (data[i]['cwm_expenditure.auth_id'] != '0' ? employees[data[i]['cwm_expenditure.auth_id']] : '') + '</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[16] + '\" data-num=\"15\">' + (data[i]['cwm_expenditure.auth_time'] != '0' ? cs.getNowTime(data[i]['cwm_expenditure.auth_time'],true) : '')+ '</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[17] + '\" data-num=\"16\">' + data[i]['cwm_expenditure.auth_remark'] + '</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[18] + '\" data-num=\"17\">' + data[i]['clearing_name'] + '</td>' +
\t\t\t\t\t'<td style=\"display: ' + styles[19] + '\" data-num=\"18\">' + (data[i]['cwm_expenditure.clearing_time']  ? cs.getNowTime(data[i]['cwm_expenditure.clearing_time'],true) : \"\") + '</td>' +
\t\t\t\t\t'</tr>')
\t\t\t}
\t\t\t\$('#datalist').html(content.join(''));
\t\t\tcustom.get_custom_info();
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\tcustom.showReamrk();

\t\t\t// var spStatus = cs.getSpStatus('支出',true);
\t\t\t\$(\"#datalist tr\").find('.sp').unbind('click').click(function() {
\t\t\t\tvar status = \$(this).attr('data-status');
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tchangeStatus(status, id);
\t\t\t});
\t\t\t\t
\t\t\t\$('.plSp').click(function() {
\t\t\t\tvar num = 0;
\t\t\t\tvar status = '';
\t\t\t\tvar coldata = [];
\t\t\t\tvar Statu = false;
\t\t\t\t\$('#datalist').find('input[type=checkbox]').each(function(i) {
\t\t\t\t\tif(\$(this).is(':checked')) {
\t\t\t\t\t\tnum++;
\t\t\t\t\t\tstatus = \$(this).parents('tr').attr('data-status') == 1 ? 2 : 1;
\t\t\t\t\t\tif(\$(this).parents('tr').attr('data-status') == 1 || \$(this).parents('tr').attr('data-status') == 2) {
\t\t\t\t\t\t\tykp.prompt('审批过的不能批量审批!');
\t\t\t\t\t\t\tStatu = false;
\t\t\t\t\t\t}else {
\t\t\t\t\t\t\tcoldata.push({id:\$(this).parents('tr').attr('data-id'),status:status});
\t\t\t\t\t\t\tStatu = true;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t
\t\t\t\t\tif(num == 0) {
\t\t\t\t\t\tykp.prompt('请选择再审批');
\t\t\t\t\t}else {
\t\t\t\t\t\tif(Statu){
\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\turl:\"/api/api_finance/all_expenditure_sh\",
\t\t\t\t\t\t\t\tmethod:'post',
\t\t\t\t\t\t\t\tdata:{
\t\t\t\t\t\t\t\t\tcoldata:JSON.stringify(coldata)
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess:function(res) {
\t\t\t\t\t\t\t\t\tykp.prompt('审批成功');
\t\t\t\t\t\t\t\t\tgetList(1);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t})
\t\t\t
\t\t\t
\t\t\t\$('.sdetail').click(function(){

\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');  //id
\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\tshowMark('.popup_new');
\t\t\t\t\$('#showBox .title').text('查看支出信息');
                \$('#templateCon #imgBox .upbx').remove();
                \$('#templateCon select[name=give_type]').hide();
                \$('#templateCon .payway').show();
\t\t\t\tget_cus();
\t\t\t\tcs.timeplug();
\t\t\t\t\t
\t\t\t\tvar _data = data[index];
\t\t\t\t\$('#templateCon .expenditrue_edit').show();
\t\t\t\t\$('#templateCon .sure_button').hide();
\t\t\t\t\$('#templateCon #uploadBox').hide();
\t\t\t\t//查看详情
\t\t\t\t\$('#templateCon [affied]').prop('disabled', true);
\t\t\t\tchangeSelect(_data['cwm_expenditure.object_type'],_data['cwm_expenditure.object']);
\t\t\t\tgetContractList(_data['cwm_expenditure.object']);
\t\t\t\tvar field = '';
\t\t\t\t\$('#templateBox').find('[affied]').each(function(index,element) {
\t\t\t\t\tfield = 'cwm_expenditure.' + \$(this).attr('affied');
\t\t\t\t\tif(\$(this).attr('affied') == 'give_time' || \$(this).attr('affied') == 'clearing_time'){
\t\t\t\t\t\t\$(this).val(cs.getNowTime(_data[field]));
\t\t\t\t\t}else if(\$(this).attr('affied') == 'clearing_name'){
\t\t\t\t\t\t\$(this).val(_data[\"clearing_name\"]);
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(this).val(_data[field]);
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t})
                var ways = ['','现金','支付宝','微信','银行卡'];//支出方式
                \$('#templateCon .payway').val( ways[_data['cwm_expenditure.give_type']] ? (ways[_data['cwm_expenditure.give_type']]) : \"\");

\t\t\t\t//将图片渲染在页面上
\t\t\t\tvar imgs =  _data['cwm_expenditure.img']!=''?_data['cwm_expenditure.img'].split(','):[];
\t\t\t\tvar self = \$('#templateCon #imgBox');
                var imghtml = '';
                if(imgs&&imgs.length>0){
                \tfor(var i in imgs){
                \t\tvar img_input ='<label class=\"\" style=\"margin-bottom:0;margin-right:10px;line-height:70px;display: inline-block;width: 70px;height: 70px;cursor: pointer; text-align: center;\">'+
\t\t\t                '<img class=\"image\" affied=\"pics\" style=\"width: 100%;height: 70px;\" src='+imgs[i]+' alt=\"\">'+
\t\t\t               \t'</label>';
\t\t\t            imghtml +=img_input;
                \t}
                \tself.append(imghtml);
                }
                var arr = [];
                if(data[index]['cwm_expenditure.files']){
                \tJSON.parse(data[index]['cwm_expenditure.files']).forEach(function(item) {
\t                \tarr.push('<p style=\"padding-left: 2px;\"><a data-url=\"'+item.url+'\">'+item.name+'</a></p>')
\t                })
                \t \$('#templateCon #fileBox').html(arr.join(','));
\t               \$('#templateCon #fileBox').find('a').click(function() {
\t\t\t\t\t\tvar name = \$(this).text();
\t\t\t\t\t\tvar url = \$(this).attr('data-url');
\t\t\t\t\t\twindow.open(ykp.api_url+\"/api/api_common/update_file_name?file_url=\"+url+\"&name=\"+name)
\t\t\t\t\t})
                }

              if(\$('#templateCon [affied=\"give_type\"]').val() == 1){
              \t\$('#templateCon .paynum').hide();
              }
               
                
                changeSelect();
                getContractList();
                
               
               cs.upload1({
\t\t\t\t\tel: \"#templateBox #upload1\",
\t\t\t\t\tael: \"#templateBox #fileBox\"
\t\t\t\t})
                uploadsmallimg();
\t\t\t})

\t\t\t//编辑结算信息
\t\t\t\$('.edit2').click(function(){
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');  //id
\t\t\t\tvar postData = {};
\t\t\t\tshowMark('.popup_acount');

\t\t\t\t\$('#showBox .title').text('编辑结算信息');

\t\t\t\t//支出基本信息
\t\t\t\tykp.doAjax({
\t\t\t\t\turl:'/api/api_finance/expenditure_info',
\t\t\t\t\tmethod:'post',
\t\t\t\t\tdata:{
\t\t\t\t\t\tid:id
\t\t\t\t\t},
\t\t\t\t\tsuccess:function(res){
\t\t\t\t\t\tpostData = res.data;
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t//切换收款方式 自动切换收款账户
                cs.changePayWayGetAccounts(\$('#templateCon [field=\"give_type\"]'),\$('#templateCon [field=\"accounts\"]'));
\t\t\t\t\$('#templateCon [field=\"give_type\"]').change(function() {
\t\t\t\t\tif(\$(this).val() == 1) {
\t\t\t\t\t\t\$('#templateCon [field=\"accounts\"]').hide().prev().hide();
\t\t\t\t\t}else {
\t\t\t\t\t\t\$('#templateCon [field=\"accounts\"]').show().prev().show();
\t\t\t\t\t}
\t\t\t\t})
                \$(\"#temHeader\").width(\$(\"#showBox\").width()-47);
\t\t\t\t//所有账户

\t\t\t\t//提交结算账户信息
\t\t\t\t\$('#templateCon .sure_button').click(function(){
\t\t\t\t\tpostData['give_type'] = \$('#templateCon [field=\"give_type\"]').val();
\t\t\t\t\tif(!postData['give_type']) {
\t\t\t\t\t\tykp.prompt('请输入相应数据！');
\t\t\t\t\t\treturn;
\t\t\t\t\t}else if(postData['give_type'] != 1) {
\t\t\t\t\t\tpostData['accounts'] = \$('#templateCon [field=\"accounts\"]').val();
\t\t\t\t\t\tif(!postData['accounts'] || !postData['give_type']){
\t\t\t\t\t\t\tykp.prompt('请输入相应数据！');
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl:'/api/api_finance/expenditure_change',
\t\t\t\t\t\tmethod:'post',
\t\t\t\t\t\tdata:postData,
\t\t\t\t\t\tsuccess:function(res){
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t});

\t\t\t//编辑支出基本信息
\t\t\t\$('.edit1').click(function(res) {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');  //id
\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\tshowMark('.popup_new');
\t\t\t\t\$('#showBox .title').text('编辑支出信息');

\t\t\t\tget_cus();
\t\t\t\tcs.timeplug();
\t\t\t\tvar _data = data[index];
\t\t\t\tchangeSelect(_data['cwm_expenditure.object_type'],_data['cwm_expenditure.object']);
\t\t\t\tgetContractList(_data['cwm_expenditure.object']);
\t\t\t\tvar field = '';
\t\t\t\t\$('#templateBox').find('[affied]').each(function(index,element) {
\t\t\t\t\tfield = 'cwm_expenditure.' + \$(this).attr('affied');
\t\t\t\t\tif(\$(this).attr('affied') == 'give_time'){
\t\t\t\t\t\t\$(this).val(cs.getNowTime(_data[field]));
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\t\$(this).val(_data[field]);
\t\t\t\t})
\t\t\t\t\$('#templateBox').find('[affied=contract_num]').find('option').each(function(){
\t\t\t\t\tif(\$(this).text() == parseInt(_data['cwm_expenditure.contract_num'])) {
\t\t\t\t\t\t\$(this).attr('disabled',true)
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t//将图片渲染在页面上
\t\t\t\tvar imgs =  _data['cwm_expenditure.img']!=''?_data['cwm_expenditure.img'].split(','):[];
\t\t\t\tvar self = \$('#templateCon #imgBox');
                var imghtml = '';
                if(imgs&&imgs.length>0){
                \tfor(var i in imgs){
                \t\tvar img_input ='<label style=\"float:left;margin-right:10px;position: relative;\">'+
\t\t\t                '<i class=\"fa fa-remove pic-close\" style=\"position: absolute;color: #fff;top: 2px;right: 2px;\"></i><img affied=\"pics\" style=\"width: 100%;height: 70px;\" src='+imgs[i]+' alt=\"\">'+
\t\t\t                '</label>';
\t\t\t            imghtml +=img_input;
                \t}
                \tself.prepend(imghtml);
                }
                \$('.fa-remove').unbind().click(function() {
                    \$(this).parent().remove();
                })
                if(self.parent().siblings().length >4 ){
                    self.parent().hide();
                }
                var arr = [];
                if(data[index]['cwm_expenditure.files']){
                \tJSON.parse(data[index]['cwm_expenditure.files']).forEach(function(item) {
\t                \tarr.push('<p style=\"padding-left: 2px;\"><a href=\"'+item.url+'\">'+item.name+'</a><i style=\"color: red; margin-left: 20px;cursor: pointer;\" class=\"ace-icon fa fa-trash-o gdel gdel2\"></i></p>')
\t                })
                \t \$('#templateCon #fileBox').html(arr.join(','));
\t                \$('.gdel2').click(function() {
\t\t\t\t\t\t\$(this).parent().remove();
\t\t\t\t\t})
                }

                changeSelect();
                getContractList();
                
               
               cs.upload1({
\t\t\t\t\tel: \"#templateBox #upload1\",
\t\t\t\t\tael: \"#templateBox #fileBox\"
\t\t\t\t})
\t\t\t\tadd_edit(id);
\t\t\t})
\t\t}

\t\t//对点击驳回进行处理
\t\tfunction changeStatus(status, id) {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_finance/expenditure_statu',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tid: id,
\t\t\t\t\tstatus: status
\t\t\t\t}
\t\t\t}

\t\t\tif(status == 1) {
\t\t\t\t\$('#feedBack').show();
\t\t\t\t\$('#feedBack .hold').unbind('click').click(function() {
\t\t\t\t\tvar approve_reply = \$('#feedBack').find('input').val();
\t\t\t\t\tif(approve_reply == '') {
\t\t\t\t\t\tykp.prompt('不能为空！');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\tdata.data.auth_remark = approve_reply;
\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t})
\t\t\t\tcs.closePop();
\t\t\t} else if(status == 0){
\t\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\tlayer.confirm('确认撤销审批？', function(flag) {
\t\t\t\t\t\t\tif(flag) {
\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t})
//              bootbox.confirm('确认撤销审批？', function(flag){
//                  if(flag){
//                      setStatus(data);
//                  }
//              })
            }else {
\t\t\t\tsetStatus(data);
\t\t\t}
\t\t}

\t\t//对点击审批 || 撤销进行处理
\t\tfunction setStatus(data) {
\t\t\tykp.doAjax({
\t\t\t\turl: data.url,
\t\t\t\tmethod: data.method,
\t\t\t\tdata: data.data,
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tykp.prompt('审批成功!');
\t\t\t\t\tgetList();
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//自定义table
\t\tcs.custorm_check('#dynamic-table', '#datalist', true);

\t\t\$('.add_expenditure').click(function() {
\t\t\tshowMark('.popup_new');
\t\t\t\$('#showBox .title').text('添加支出');

\t\t\tget_cus();
\t\t\tchangeSelect();
            uploadsmallimg()
\t\t\tgetContractList();

\t\t\tcs.timeplug();
\t\t\t cs.upload1({
\t\t\t\t\tel: \"#templateBox #upload1\",
\t\t\t\t\tael: \"#templateBox #fileBox\"
\t\t\t\t})
\t\t\tadd_edit();   //添加操作
\t\t});

\t\tfunction getContractList(id){
\t\t\tif(id){
\t\t\t\tgetDetais(id);
\t\t\t}else{
\t\t\t\t\$('#templateCon [affied=\"object\"]').on(\"change\",function(){
\t\t\t\t\t\$('#templateCon [affied=\"contract_num\"]').find('option').not(':first').remove(); 
\t            \tvar data = \$(this).val();
\t            \tgetDetais(data);
\t\t\t\t}); 
\t\t\t}
\t\t};

\t\tfunction getDetais(id){
\t            ykp.doAjax({
\t            \turl:'/api/api_contract/f7',
\t            \tmethod:'post',
\t            \tasync:false,
\t            \tdata:{
\t            \t\tfilter:'htm_contract.customer_id = ' + id,
\t            \t\tselect:'htm_contract.contract_code'
\t            \t},
\t            \tsuccess:function(res){
\t            \t\tvar data = res.data;
\t            \t\tvar code_html = [];
\t            \t\tfor(var i in data){
\t            \t\t\tcode_html.push('<option value=\"'+ data[i]['contract_code'] +'\">'+ data[i]['contract_code'] +'</option>');
\t            \t\t}
\t            \t\t\$('#templateCon [affied=\"contract_num\"]').append(code_html.join(''));
\t            \t\t
\t            \t}
\t            });
\t         
\t\t};
\t\t
\t\t//保存
\t\tfunction add_edit(id) {
\t\t\t\$('#templateCon .sure_button').click(function() {
\t\t\t\tvar Status = false;
\t\t\t\tvar data = {} ;
\t\t\t\tvar msg = '添加成功';
\t\t\t\tvar url = id ? '/api/api_finance/expenditure_change' : '/api/api_finance/expenditure_add';
\t\t\t\t\$('#templateCon').find('[affied]').not(':hidden').each(function(i) {
\t\t\t\t\tvar value =  \$(this).val();
\t\t\t\t\tif(value == \"\"&&\$(this).attr('validate')=='required') {
\t\t\t\t\t\tykp.prompt(\$(this).attr('msg'));
\t\t\t\t\t\tStatus = false;
\t\t\t\t\t\treturn false;
\t\t\t\t\t} else {
\t\t\t\t\t\tif(\$(this).attr('affied') == 'duty_id') {
\t\t\t\t\t\t\tdata.duty_name = \$(this).find('option:selected').text();
\t\t\t\t\t\t}
\t\t\t\t\t\tif(\$(this).attr('affied') == 'object'){
\t\t\t\t\t\t\tdata.object_name = \$(this).find('option:selected').text();
\t\t\t\t\t\t}
\t\t\t\t\t\tdata[\$(this).attr('affied')] = \$(this).attr('affied') == 'give_time' ? parseInt(new Date(value) /1000) :value;
\t\t\t\t\t\tStatus = true;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t//新增的照片
\t\t\t\tvar imgs = [];
\t\t\t\tdata.img = '';
\t\t\t\tif(\$('#templateCon img')&&\$('#templateCon img').length>0){
\t\t\t\t\t\$('#templateCon img').each(function(){
\t\t\t\t\t\timgs.push(\$(this).attr('src'));
\t\t\t\t\t});

\t\t\t\t\tdata.img = imgs.join(',');
\t\t\t\t}
\t\t\t\t
\t\t\t\tvar fileBox = \$('#templateCon #fileBox');
\t\t\t\tvar files = [];
\t\t\t\tif(fileBox.children().length > 0) {
\t\t\t\t\t\$('#templateCon #fileBox').find('a').each(function(i) {
\t\t\t\t\t\tfiles.push({
\t\t\t\t\t\t\tname: \$(this).text(),
\t\t\t\t\t\t\turl: \$(this).attr('data-url')
\t\t\t\t\t\t})
\t\t\t\t\t})

\t\t\t\t\tdata.files = JSON.stringify(files);
\t\t\t\t}
\t\t\t\t
\t\t\t\tif(Status) {
\t\t\t\t\tif(id) {
\t\t\t\t\t\tdata.id = id;
\t\t\t\t\t\tmsg = '编辑成功';
\t\t\t\t\t}
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl:url,
\t\t\t\t\t\tmethod:'POST',
\t\t\t\t\t\tdata:data,
\t\t\t\t\t\tsuccess:function(res) {
\t\t\t\t\t\t\tykp.prompt(msg);
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\tgetList(1);
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t}
\t\t\t})
\t\t};

\t\t//获取公司   和员工
\t\tfunction get_cus() {

\t\t\tvar employees = [];
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_employees/f7',
\t\t\t\tmethod: 'post',
\t\t\t\tasync: false,
\t\t\t\tdata: {
\t\t\t\t\tselect: 'bmm_employees.id,bmm_employees.name'
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t if(data[i]['name']) {
\t\t\t\t\t\temployees.push('<option value=\"' + data[i]['id'] + '\">' + data[i]['name'] + '</option>');
\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\$('#templateCon select[affied=\"duty_id\"]').append(employees.join(''));
\t\t\t\t}
\t\t\t});
\t\t};
\t\tcloseMark();

\t\t//根据选择的类别关联对象
\t\tfunction changeSelect(val,cusVal) {
\t\t\tif(val) {
\t\t\t\tswitch(val) {
\t\t\t\t\tcase '1':
\t\t\t\t\t\tgetCustom(cusVal);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '2':
\t\t\t\t\t\tgetPeople(cusVal);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '3':
\t\t\t\t\t\tgetParentPart(cusVal);
\t\t\t\t\t\tbreak;
\t\t\t\t\tdefault:
\t\t\t\t\t\t\$('#templateCon #object').html('<option value=\"\"> 请选择 </option>');
\t\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t} else {
\t\t\t\t\$('#templateBox').find('select[affied=\"object_type\"]').change(function() {
\t\t\t\t\tvar value = \$(this).val();
\t\t\t\t\tif(value == 1 && \$('#templateBox').find('select[affied=\"object\"]').val()){
\t\t\t\t\t\t\$('#templateBox .order').show();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$('#templateBox .order').hide();
\t\t\t\t\t}
\t\t\t\t\t//console.log(value);
\t\t\t\t\tswitch(value) {
\t\t\t\t\t\tcase '1':
\t\t\t\t\t\t\tgetCustom();
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tcase '2':
\t\t\t\t\t\t\tgetPeople();
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tcase '3':
\t\t\t\t\t\t\tgetParentPart();
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tdefault:
\t\t\t\t\t\t\t\$('#templateBox #object').find('[affied=\"pics\"]').html('<option value=\"\"> 请选择 </option>');
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}
\t\t\t
\t\t\t\$('#templateBox').find('select[affied=\"object\"]').change(function(){
\t\t\t\tif(\$('#templateBox').find('select[affied=\"object_type\"]').val() == 1 && \$(this).val()){
\t\t\t\t     \$('#templateBox .order').show();
\t\t\t\t}else{
\t\t\t\t\t\$('#templateBox .order').hide();
\t\t\t\t}
\t\t\t})

\t\t};

\t\t//获取上级部门
\t\tfunction getParentPart(val) {
\t\t\tykp.doAjax({
\t\t\t\turl: \"/api/api_department/f7\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tselect:'bmm_department.id,bmm_department.name',
\t\t\t\t\tfilter: 'bmm_department.is_del = 0'
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tvar content = ['<option value=\"\">请选择</option>'];
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tcontent.push('<option value=\"' + data[i]['id'] + '\">' + data[i]['name'] + '</option>');
\t\t\t\t\t}
\t\t\t\t\t\$('#templateBox #object').html(content.join(''));
\t\t\t\t\t\$('#templateBox #object').val(val);
\t\t\t\t}
\t\t\t});
\t\t};

\t\tfunction getPeople(val) {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_employees/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: 999
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar empl = ['<option value=\"\">请选择</option>'];
\t\t\t\t\tvar data = res.data.items;
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t if(data[i]['bmm_employees.name']) {
\t\t\t\t\t\templ.push('<option value=\"' + data[i]['bmm_employees.id'] + '\">' + data[i]['bmm_employees.name'] + '</option>')
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t\t\$('#templateBox #object').html(empl.join(''));
\t\t\t\t\t\$('#templateBox #object').val(val);
\t\t\t\t}
\t\t\t})
\t\t};

\t\tfunction getCustom(val) {
\t\t\tvar people = ['<option value=\"\">请选择</option>'];
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_customer/customer',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\ttype: 3,
\t\t\t\t\tlimit:\"9999\"
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data.items;
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tpeople.push('<option value=\"' + data[i]['khm_customer.id'] + '\">' + data[i]['khm_customer.name'] + '</option>')
\t\t\t\t\t\t}
\t\t\t\t\t\$('#templateBox #object').html(people.join(''));
\t\t\t\t\tif(val){
\t\t\t\t\t\t\$('#templateBox #object').val(val);
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif(\$('#templateBox').find('select[affied=\"object\"]').val()){
\t\t\t\t\t\t\$('#templateBox .order').show();
\t\t\t\t\t}else{
\t\t\t\t\t\t\$('#templateBox .order').hide();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t\t
//\t\t\tif(value == 1 && \$('#templateBox').find('select[affied=\"object\"]').val()){
//\t\t\t\t\$('#templateBox .order').show();
//\t\t\t}else{
//\t\t\t\t\$('#templateBox .order').hide();
//\t\t\t}
\t\t};
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/financialManagement/expenditure.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 311,  330 => 310,  19 => 1,);
    }
}
/* <style>*/
/* 	#templateCon label{*/
/* 		width:65px;*/
/* 	}*/
/* 	.btnBlue:hover ,.btnBlue:active,.redBlue:hover ,.redBlue:active,.btnGreen:hover,.btnGreen:active {*/
/* 		color: #fff;*/
/* 	}*/
/* </style>*/
/* <div class=" widget-main">*/
/* 	<div class="row">*/
/* 		<!--         <h3 class="header smaller lighter blue">支出</h3> -->*/
/* 		<div class="actions" id="topTool">*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<input type="text" pts="0" sear="cwm_expenditure.order_id" placeholder="支出编号">*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<input type="text" pts="0" sear="cwm_expenditure.object_name" placeholder="支出对象">*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<input type="text" pts="0" sear="cwm_expenditure.contract_num" placeholder="订单编号">*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<select style="width: 180px" pts=3 sear="cwm_expenditure.duty_id" class="advandced-search select2-hidden-accssible" tabindex="-1" aria-hidden="true">*/
/* 					<option value="">负责人 </option>*/
/* 				</select>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<select style="width: 180px" pts=3 sear="cwm_expenditure.create_id" class="advandced-search select2-hidden-accssible"  tabindex="-1" aria-hidden="true">*/
/* 					<option value="">创建人 </option>*/
/* 				</select>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<select style="width: 180px" pts=3 sear="cwm_expenditure.auth_id" class="advandced-search select2-hidden-accssible"  tabindex="-1" aria-hidden="true">*/
/* 					<option value="">审批人 </option>*/
/* 				</select>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<button id="search" title="搜索" class="btn btn-info btn-sm">*/
/* 					<i class="fa fa-search"></i>*/
/* 				</button>*/
/* 			</div>*/
/* 			 <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                         <button id="heightsearch" title="高级搜索" type="button" class="btn btn-info btn-sm" style="background-color:#00c0ef !important;">*/
/*                             <i class="fa fa-filter"></i>*/
/*                         </button>*/
/*              </div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 				<button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/*                     <i class="fa fa-refresh"></i>*/
/*                 </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" contentAuthority="168" style=" float: left;margin-right: 5px;">*/
/*             	<button title="添加" class="add_expenditure btn btn-info btn-sm" style=" background-color: #32CD32 !important;">*/
/* 	                <i class="fa fa-plus"></i>*/
/* 	            </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" contentAuthority="169" style=" float: left;margin-right: 5px;">*/
/*             	<button title="批量审批" class="btn btn-info  btn-sm sp plSp" style="background-color: #32CD32 !important; border-color: #32CD32;">*/
/* 					<i class="fa fa-check-circle-o"></i>*/
/* 	            </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" id="expbt" style="display: none; float: left; margin-right: 5px;">*/
/* 				<button type="button"  title="导出" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="exportfile moveToClue btn addBtn btn-info btn-sm position-relative">*/
/* 					<i class="fa fa-sign-out"></i>*/
/* 				</button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*             	<div id="filterBtns" style="display:inline-block;width:290px;height: 36px">*/
/* 		            <a href="javascript:void(0);" class="myFilter" style="background: #E6E6E6;line-height:22px" data-status="a">全部</a>*/
/* 		            <a href="javascript:void(0);" class="myFilter" style="line-height:22px" data-status="0"></i> 待审批</a>*/
/* 		            <a href="javascript:void(0);" class="myFilter" style="line-height:22px" data-status="2"> 已通过</a>*/
/* 		            <a href="javascript:void(0);" class="myFilter" style="line-height:22px" data-status="1"> 未通过</a>*/
/* 		        </div>*/
/* 			</div>*/
/* 			<div id="heightsearch1" class="col-sx-12" style="position: absolute;margin-top: 65px; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;">*/
/* 				<div class="row" id="SearchCon">*/
/* 					*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 			<!--审批-->*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="custom_table"> */
/* 		*/
/* 		<table id="dynamic-table">*/
/* 			<thead>*/
/* 				<tr class="thColor">*/
/* 					<th class="center">*/
/* 						<label class="pos-rel">*/
/*                                 <input type="checkbox" class="ace" onclick="cs.checkAll(this.checked)"/>*/
/*                                 <span class="lbl"></span>*/
/*                             </label>*/
/* 					</th>*/
/* 					<th>操作</th>*/
/* 					<th data-num="4">审批状态</th>*/
/* 					<th data-num="1">支出编号</th>*/
/* 					<th data-num="2">支出对象</th>*/
/* 					<!--<th data-num="3">订单编号</th>-->*/
/* 					*/
/* 					<th data-num="5">支出日期</th>*/
/* 					<th data-num="6">支出类别</th>*/
/* 					<th data-num="7" style="text-align: right !important;">支出金额(元)</th>*/
/* 					<!--<th data-num="8">支付方式</th>*/
/* 					<th data-num="9">支付账户</th>-->*/
/* 					<th data-num="0">支付方式</th>*/
/* 					<th data-num="10">负责人</th>*/
/* 					<th data-num="11">备注</th>*/
/* 					<th data-num="12">创建人</th>*/
/* 					<th data-num="13">创建时间</th>*/
/* 					<th data-num="14">审批人</th>*/
/* 					<th data-num="15">审批时间</th>*/
/* 					<th data-num="16">审批备注</th>*/
/* 					<th data-num="17">结算人</th>*/
/* 					<th data-num="18">结算时间</th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<tbody id="datalist">*/
/* */
/* 			</tbody>*/
/* 		</table>*/
/* 	</div>*/
/* 	<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 		<div align="left" style="padd_expenditeruing-left: 15px; float: left; width: 10%;" id="num"></div>*/
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
/* 	<div class="label_popup" id="feedBack" style="display:none;position: fixed; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: 1050;">*/
/* 		<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 	    box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 			<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 				<span style="display: inline-block;">请填写驳回原因</span>*/
/* 				<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 			</div>*/
/* 			<div style="padding: 10px 50px;">*/
/* 				<input type="text" width="200px" style="margin: auto;" id="labelName">*/
/* 				<!--<hr>-->*/
/* 			</div>*/
/* 			<div style="padding:15px;text-align:right;">*/
/* 				<button class="close_label">关闭</button>*/
/* 				<button class="hold">保存</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="popup_acount" style="display:none">*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 结算方式：</label>*/
/* 			<select field="give_type" name="give_type" msg="请选择支出方式" style="width:180px;">*/
/* 				<option value="">*/
/* 					请选择结算方式*/
/* 				</option>*/
/* 				<option value="1">现金</option>*/
/* 				<option value="2">支付宝</option>*/
/* 				<option value="3">微信</option>*/
/* 				<option value="4">银行卡</option>*/
/* 			</select>*/
/* 			<label> 结算账户：</label>*/
/* 			<select field="accounts" class="agreement" style="width:180px;">*/
/* 				<option value="">请选择结算账户</option>*/
/* 			</select>*/
/* 		</div>*/
/* 		<div class="popup_button">*/
/* 			<button class="sure_button">*/
/*                     <i class="fa fa-check" aria-hidden="true"></i>*/
/*                     保存*/
/*              </button>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="popup_new" style="display:none">*/
/* 		<div class="row">*/
/* 			<form class="item_form" role="form">*/
/* 				<div class="form_data">*/
/* 					<label> 支出类别： </label>*/
/* 					<select affied="give_way" validate="required" name="give_way" msg="请选择支出类别">*/
/* 						<option value="">请选择支出类别</option>*/
/* 						<option value="1">退款</option>*/
/* 						<option value="2">费用</option>*/
/* 						<option value="3">报销</option>*/
/* 					</select>*/
/* 								*/
/* 					<label> 负责人： </label>*/
/* 					<select affied="duty_id" validate="required" name="duty_id" msg="请选择负责人">*/
/* 						<option value=""> 请选择负责人 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label> 对象类别： </label>*/
/* 					<select affied="object_type" validate="required" name="object_type" msg="请选择对象类别">*/
/* 						<option value="">请选择 </option>*/
/* 						<option value="1">公司</option>*/
/* 						<option value="2">员工 </option>*/
/* 						<option value="3">部门</option>*/
/* 					</select>*/
/* 					<!-- <label> 关联对象： </label>*/
/* 					<select addifed="object" id="object" >*/
/* 						<option value="">*/
/* 							- - - 请选择*/
/* 						</option>*/
/* 					</select> -->*/
/* 					<label> 关联对象： </label>*/
/* 					<select affied="object" id="object" validate="required" class="agreement select2 " msg="请选择关联对象">*/
/* 						<option value="">  请选择  </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<!--<div class="form_data">*/
/* 					&lt;!&ndash; <label> 公司名称： </label>*/
/* 					<select affied="customer_id" class="agreement select2 ">*/
/* 						<option value="">  请选择公司  </option>*/
/* 					</select> &ndash;&gt;*/
/* 					<label class="order" style="display:none;"> 订单编号： </label>*/
/* 					<select class="order" style="display:none;" affied="contract_num" name="contract_num" msg="请选择订单编号">*/
/* 						<option value=""> 请选择订单编号 </option>*/
/* 					</select>*/
/* 					*/
/* 				</div>-->*/
/* 				<div class="form_data">*/
/* 					<label> 支出日期： </label>*/
/* 					<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 						<input class="date-timepicker1 required" affied="give_time" validate="required" name="give_time" msg="入库时间不能为空" class="form-control" style="height: 30px; width: 150px;">*/
/* 						<span class="input-group-add_expenditeruon" style="width: 30px;height:30px;background: #ddd;position: relative;">*/
/* 	                            <i class="fa fa-clock-o bigger-110" style="position:relative;right:-7px;top:7px;"></i>*/
/* 	                        </span>*/
/* 					</div>*/
/* 					*/
/* 					<label> 支出金额： </label>*/
/* 					<input affied="give_money" name="give_money" type="number" validate="required" validate="/^(0|[1-9]\d*)(\.\d{1,2})?$/" msg="请填写正确的金额"/>*/
/* */
/* 				</div> */
/* 				<div class="form_data expenditrue_edit" style="display: none;">*/
/* 					<label> 结算方式：</label>*/
/* 					<select name="give_type"   msg="请选择结算方式">*/
/* 						<option value="">*/
/* 							- - - 请选择结算方式*/
/* 						</option>*/
/* 						<option value="1">现金</option>*/
/* 						<option value="2">支付宝</option>*/
/* 						<option value="3">微信</option>*/
/* 						<option value="4">银行卡</option>*/
/* 					</select>*/
/* 					<input style="display: none" class="payway" disabled/>*/
/* 					<label class="paynum"> 结算账户： </label>*/
/* 					<input class="paynum" affied="accounts" name="accounts" type="text" validate="int" msg="请输入正确的账户"/>*/
/* 					*/
/* 				</div>*/
/* 				<div class="form_data expenditrue_edit" style="display: none;">*/
/* 					<label> 结算人： </label>*/
/* 					<input affied="clearing_name" name="accounts" type="text" validate="int" msg="请输入正确的账户"/>*/
/* 					<label> 结算时间：</label>*/
/* 					<!--<select affied="clearin_time" name="clearin_time" msg="请选择结算方式">-->*/
/* 					<input affied="clearing_time" name="clearing_time" type="text" validate="int" msg="请输入正确的账户"/>*/
/* 					</select>*/
/* 				</div>*/
/* 				*/
/* */
/* 				<div class="form_data">*/
/* 					<label style="float:left;"> 备注： </label>*/
/* 					<textarea affied="remark" name="remark" msg="请填写备注信息" style="padding:5px;width:calc(100% - 70px);margin-left:5px;"></textarea>*/
/* 				</div>*/
/* 				<!-- <div style="margin-top:15px;">*/
/* 					<label style="float:left;margin-right:5px;"> 图片： </label>*/
/*                    <label class="" style="position:relative;top:2px;border:1px solid #000;line-height:70px;width:70px;height:70px;cursor: pointer; text-align: center;">*/
/*                         <i class="fa fa-plus fa-2x" aria-hidden="true" style="position: relative;top: 5px;"></i>*/
/*                         <input type="file" class="uploadImg " style="position: absolute;opacity: 0;left:-9999px;">*/
/*                     </label>*/
/* 				</div> -->*/
/* 				<div style="margin-top:15px;">*/
/* 					<label style="float:left;margin-right:5px;"> 图片： </label>*/
/* 					<div class="" style="padding: 2px; margin-top: 20px;margin-left: 70px;">*/
/* 						<div id="fileBox">*/
/* */
/* 						</div>*/
/* 						<div id="imgBox">*/
/* 							<label class="upbx" style="text-align: center;border: 1px solid;width: 70px;position: relative;height: 70px; cursor: pointer; text-align: center;line-height: 70px;font-size: 70px;">*/
/* 								<input type="file" class="uploadFiles" style="position:absolute;left:-9999px;opacity: 0;" />*/
/* 								<span class="" style="display: inline-block;position: absolute;top: 0;left: 14px; cursor: pointer; text-align: center;">+</span>*/
/* 							</label>*/
/* 						</div>*/
/* 						<!--<div id="uploadBox">*/
/* 							<button type="button" id="upload1" style="outline: none;background-color: #009688 !important; margin-top: 20px;" class="btn btn-info btn-sm position-relative">*/
/* 				                        上传文件*/
/* 				        	</button>*/
/* 						</div>-->*/
/* 					</div>*/
/*                    <!--<label class="" style="position:relative;top:2px;border:1px solid #000;line-height:70px;width:70px;height:70px;cursor: pointer; text-align: center;">*/
/*                         <i class="fa fa-plus fa-2x" aria-hidden="true" style="position: relative;top: 5px;"></i>*/
/*                         <input type="file" class="uploadImage _decrease" style="position: absolute;opacity: 0;left:-9999px;">*/
/*                     </label>-->*/
/* 				</div>*/
/* 			</form>*/
/* 			<div class="popup_button">*/
/* 				<button class="sure_button">*/
/*                         <i class="fa fa-check" aria-hidden="true"></i>*/
/*                         保存*/
/*                  </button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% include 'admin/mark.html' %} {% include 'admin/customerDetail.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/LocalResizeIMG.js"></script>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* <script type="text/javascript">*/
/* 	$(function() {*/
/* */
/*         //导出功能*/
/*         cs.exportFile({*/
/*             url:"/api/api_finance/zc_export",*/
/*             title:"支出记录"*/
/*         });*/
/* 		cs.getNodes([168]);*/
/* 		if(cs.approve_authority({name:'支出',nodes:[169]})){*/
/*             $('[contentAuthority="169"]').show();*/
/*         }*/
/* 		var order ='cwm_expenditure.id desc';*/
/* 		//分页*/
/* 		var page_size = 10;*/
/* 		var employees= {};*/
/* 		var accounts = {};*/
/* 		var filter ='';*/
/* */
/* 		//所有账户*/
/* 		ykp.doAjax({*/
/* 			async:false,*/
/* 			url:'/api/api_bank/f7',*/
/* 			method:'post',*/
/* 			data:{*/
/* 				select:'xtm_kh_bank.id,xtm_kh_bank.type,xtm_kh_bank.bank_name'*/
/* 			},*/
/* 			success:function(res){*/
/* 				var data = res.data;*/
/* 				for(var i in data){*/
/* 					accounts[data[i]['id']] = data[i];*/
/* 				}*/
/* 			}*/
/* 		});*/
/*         if(cs.getNodes([308], true)) {*/
/*             $("#expbt").show();*/
/*         }*/
/* 		*/
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_finance/expenditure_list',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter:"",*/
/* 				page_size: page_size*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '.pageBar'*/
/* 			},*/
/* 			contentId:"#datalist",  //默认排序*/
/* 			initOrder:"",   //初始化sort*/
/* 			defaultOrder:order,*/
/* 			params:[{*/
/* 				id:"#dynamic-table",*/
/* 				field:["","","cwm_expenditure.status","cwm_expenditure.order_id","cwm_expenditure.object","cwm_expenditure.give_time","cwm_expenditure.give_way","cwm_expenditure.give_money","","","",*/
/* 				"cwm_expenditure.create_id","cwm_expenditure.create_at","cwm_expenditure.auth_id","cwm_expenditure.auth_time","cwm_expenditure.auth_remark","cwm_expenditure.clearing","cwm_expenditure.clearing_time"]*/
/* 				}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			add_expenditeruList(res);*/
/* 		});*/
/* 			*/
/* */
/* 		$('.myFilter').click(function() {*/
/*             if (!$(this).hasClass('clc')) {*/
/*                 $(this).addClass('clc').siblings().removeClass('clc');*/
/*             }*/
/*             var data = {*/
/*                 "limit": page_size,*/
/*                 'page':1,*/
/*                 'order':order*/
/*             }*/
/*         		*/
/*             var filter_ =  $(this).attr('data-status');*/
/*             if (filter_ == 'a') {*/
/*                 getList();*/
/*                 return;*/
/*             }*/
/*             filter = 'cwm_expenditure.status = '+filter_;*/
/*             data['filter'] = 'cwm_expenditure.status = '+filter_;*/
/*             getList_2(1,data);*/
/*         })*/
/* */
/*         $('#filterBtns a').mouseover(function(){*/
/*             $(this).addClass('over');*/
/*         })*/
/*         $('#filterBtns a').mouseout(function(){*/
/*             $(this).removeClass('over');*/
/*         })	*/
/* */
/* 		//获取所有员工*/
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
/*                 	 if(data[i]['name']) {*/
/*                     employees[data[i]['id']] =data[i]['name'] ;*/
/*                     $('.advandced-search').append(new Option(data[i]['name'],data[i]['id']));*/
/*                 }*/
/*                 	}*/
/*             }*/
/*         });*/
/* */
/* 		tspage();*/
/* 		function tspage(){*/
/* 			if (ykp.getCookie('detailsId')&&ykp.getCookie('detailsId')!='') {*/
/* 				var id = ykp.getCookie('detailsId');*/
/* 				var data = {*/
/* 					limit:page_size,*/
/* 					filter:`cwm_expenditure.id = ${id}`*/
/* 				}*/
/* 				getList_2(1,data);*/
/* 				ykp.setCookie('detailsId','',1/24);*/
/* 			}else{*/
/* 				ykp.setCookie("filter", "");*/
/* 				ykp.setCookie("where", "");*/
/* 				getList(1);*/
/* 			}*/
/* 		}*/
/* */
/* 		$('#flush').click(function(){*/
/* 			filter = "";*/
/* 			$('[pts="0"]').val('');*/
/* 			$('[sear="cwm_expenditure.duty_id"]').val('').trigger('change');*/
/* 			$('[sear="cwm_expenditure.create_id"]').val('').trigger('change');*/
/* 			$('[sear="cwm_expenditure.auth_id"]').val('').trigger('change');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getList();*/
/* 		})*/
/* */
/* */
/* 		function getList_2 (current,data) {*/
/* 			ykp.list({*/
/* 				url: '/api/api_finance/expenditure_list',*/
/* 				method: 'post',*/
/* 				data: data,*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 					setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 						$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					}*/
/* 					add_expenditeruList(res);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		getSearch();	*/
/* 		function getSearch() {*/
/* 			*/
/* 			var list = [*/
/* 				{name:"支出编号",search:"cwm_expenditure.order_id",type:"text"},*/
/* 				{name:"支出对象",search:"cwm_expenditure.object_name",type:"text"},*/
/* 				{name:"订单编号",search:"cwm_expenditure.contract_num",type:"text"},*/
/* 				{name:"审批状态",search:"cwm_expenditure.status",type:"select",option:[{val:"0",text:"待审批"},{val:"2",text:"已通过"},{val:"1",text:"未通过"}]},*/
/* 				{name:"支出日期",search:"cwm_expenditure.give_time",type:"time"},*/
/* 				{name:"支出类别",search:"cwm_expenditure.give_way",type:"select",option:[{val:"1",text:"退款"},{val:"2",text:"费用"},{val:"3",text:"报销"}]},*/
/* 				{name:"支出金额(元)",search:"cwm_expenditure.give_money",type:"text"},*/
/* 				{name:"支付方式",search:"cwm_expenditure.give_type",type:"select",option:[{val:"1",text:"现金"},{val:"2",text:"支付宝"},{val:"3",text:"微信"},{val:"4",text:"银行卡"}]},*/
/* 				{name:"支付账户",search:"cwm_expenditure.accounts",type:"text"},*/
/* 				{name:"负责人",search:"cwm_expenditure.duty_id",type:"select",url:"/api/api_employees/f7",key:"people"},*/
/* 				{name:"备注",search:"cwm_expenditure.remark",type:"text"},*/
/* 				{name:"创建人",search:"cwm_expenditure.create_id",type:"select",url:"/api/api_employees/f7",key:"people"},*/
/* 				{name:"创建时间",search:"cwm_expenditure.create_at",type:"time"},*/
/* 				{name:"审批人",search:"cwm_expenditure.auth_id",type:"select",url:"/api/api_employees/f7",key:"people"},*/
/* 				{name:"审批时间",search:"cwm_expenditure.auth_time",type:"time"},*/
/* 				{name:"结算人",search:"cwm_expenditure.clearing",type:"select",url:"/api/api_employees/f7",key:"people"},*/
/* 				{name:"结算时间",search:"cwm_expenditure.clearing_time",type:"time"}*/
/* 			];*/
/* 			*/
/* 			*/
/* 			cs.getSearch({*/
/* 				list:list,*/
/* 				el:"#heightsearch",*/
/* 				el1:"#heightsearch1"*/
/* 			},dohSearch);*/
/* 			function dohSearch() {*/
/* 				var data = {*/
/* 					url: '/api/api_finance/expenditure_list',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						limit:page_size,*/
/* 						order:'cwm_expenditure.id desc',*/
/* 						filter: filter*/
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
/* 					add_expenditeruList(res);*/
/* 				})*/
/* 			}					*/
/* 		}*/
/* */
/* */
/* 		search();*/
/* 		function search() {*/
/* 			var data = {*/
/* 				url: '/api/api_finance/expenditure_list',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					type: 1,*/
/* 					limit: page_size,*/
/* 					order:order*/
/* 				}*/
/* 			}*/
/* 			*/
/* 			cs.doSearch('#search', data, 'filter', false, function(res,_filter) {*/
/* 				filter = _filter;*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 					$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 				} else {*/
/* 					add_expenditeruList(res);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 		*/
/* 		//getList(1);*/
/* */
/* 		function getList(current) {*/
/* 			ykp.list({*/
/* 				url: '/api/api_finance/expenditure_list',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: page_size,*/
/* 					order:order,*/
/* 					filter:filter*/
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
/* 					*/
/* 					add_expenditeruList(res);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 		$('#changePageNum').change(function() {*/
/* 			page_size = $(this).val();*/
/* 			ykp.setCookie('page_size',page_size);*/
/* 			getList(1);*/
/* 		})*/
/* */
/* 		function add_expenditeruList(res) {*/
/* 			var content = [];*/
/* 			var data = res.data.items;*/
/* 			var ths = $('#dynamic-table .thColor th');*/
/* 			var styles = [];*/
/* 			var kinds = ['','退款','费用','报销'];//支出类别*/
/* 			var ways = ['','现金','支付宝','微信','银行卡'];//支出方式*/
/* 			var Status = ['待审批','未通过','已通过'];  //审核审批状态*/
/* 			for(i = 0; i < ths.length; i++) {*/
/* 				styles.push(ths.eq(i).css('display'));*/
/* 			}*/
/* 			for(var i in data){*/
/* 				data[i]['Remark'] = cs.getRemark(data[i]['Remark']);*/
/* 			}*/
/* */
/* 			//审批权限为true可以审批,为false不可审批*/
/* 			var spApp = cs.approve_authority({name:'支出',nodes:[172]});*/
/* 			var cxApp = cs.approve_authority({name:'支出',nodes:[272]});*/
/* 			var edit1_statu = cs.getNodes([170],true);*/
/* 			console.log(edit1_statu);*/
/* 			var edit2_statu = cs.getNodes([171],true);*/
/* 			var company;*/
/* 			for(var i in data) {*/
/* 				//根据支出对象显示不同的内容*/
/* 				// console.log(data[i]['cwm_expenditure.object']);*/
/* 				company = '<a class="customerDetail pos-rel" href="#">'+data[i]['cwm_expenditure.object_name']+'</a> ' +*/
/* 					'<label class="pos-rel"> <i class="iconBnt fa fa-info-circle" data-rel="tooltip" data-placement="right" data-html="true" title="'+data[i]['Remark']+'" ></i></label>';*/
/* 				var others = data[i]['cwm_expenditure.object_name'];*/
/* 				var theType = data[i]['cwm_expenditure.object_type']==1?company:others;*/
/* 				content.push('<tr data-id="' + data[i]['cwm_expenditure.id'] + '"   data-status="' +data[i]['cwm_expenditure.status']+'">' +*/
/* 					'<td class="center" style="display: ' + styles[0] + ' ">' +*/
/* 					'<label class="pos-rel">' +*/
/* 					'<input type="checkbox" name="check" class="ace"/>' +*/
/* 					'<span class="lbl"></span>' +*/
/* 					'</label>' +*/
/* 					'</td>' +*/
/* 					'<td><label class="pos-rel">' +*/
/* 					*/
/* 					'<a class="btOrange sdetail" style="margin-right:5px; color:#fff !important" title="详情"><i class="fa fa-info "></i></a>'+*/
/*                     '<a href="#" class="edit1" contentAuthority="170" style="display:' + (edit1_statu ? (data[i]['cwm_expenditure.status'] == 1? 'inline-block' : 'none') : 'none') + ';"> <span class="lbl btBlue" title="编辑" ><i class="fa fa-pencil-square-o"></i></span></a> ' +*/
/*                     '<a href="#" class="edit2 btBlue" contentAuthority="171" style="display:' + (edit2_statu ? (data[i]['cwm_expenditure.status'] == 2 && data[i]['cwm_expenditure.give_type'] == 0 ? 'inline-block' : 'none') : 'none') + ';"> <span class="lbl " title="结算"><i class="fa fa-calculator"></i></span></a> ' +*/
/* 					'<a href="#" class="sp btOrange" contentAuthority="272" data-status = "0" style="display:' + (cxApp ? (data[i]['cwm_expenditure.status'] == 2 && data[i]['cwm_expenditure.give_type'] == 0 ? 'inline-block' : 'none') : 'none') + ';color:#fff !important" title="撤销"><i class="fa fa-rotate-left"></i></a> ' +*/
/* 					'<a href="#" class="sp btGreen" contentAuthority="172" data-status = "2" style="display:' + (spApp ? (data[i]['cwm_expenditure.status'] == 0  ? 'inline-block' : 'none') : 'none') + ';color:#fff !important" title="通过"><i class="fa fa-check-circle-o"></i></a> ' +*/
/* 					'<a href="#" class="sp btRed" contentAuthority="172" data-status = "1" style="display:' + (spApp ? (data[i]['cwm_expenditure.status'] == 0  ? 'inline-block' : 'none') : 'none') + ';color:#fff !important" title="驳回"><i class="fa fa-times-circle"></i></a> ' +*/
/* 					'</td></label>' +*/
/* 					'<td style="display: ' + styles[5] + '" data-num="4">' + Status[data[i]['cwm_expenditure.status']] + '</td>' +*/
/* 					'<td style="display: ' + styles[2] + '" data-num="1">' + data[i]['cwm_expenditure.order_id'] + '</td>' +*/
/* 					'<td data-cid='+data[i]['cwm_expenditure.object']+' style="display: ' + styles[3] + '" data-num="2">'+theType+'</td>'+*/
/* //					'<td style="display: ' + styles[4] + '" data-num="3">' + data[i]['cwm_expenditure.contract_num'] + '</td>' +*/
/* 					'<td style="display: ' + styles[6] + '" data-num="5">' + cs.getNowTime(data[i]['cwm_expenditure.give_time']) + '</td>' +*/
/* 					'<td style="display: ' + styles[7] + '" data-num="6">' + (data[i]['cwm_expenditure.give_way'] != '0' ? kinds[data[i]['cwm_expenditure.give_way']] : '') + '</td>' +*/
/* 					'<td style="display: ' + styles[8] + ';text-align: right !important;" data-num="7">' + data[i]['cwm_expenditure.give_money'] + '</td>' +*/
/* //					'<td style="display: ' + styles[9] + '" data-num="8">' + (data[i]['cwm_expenditure.give_type'] != '' ? ways[data[i]['cwm_expenditure.give_type']] : '') + '</td>' +  */
/*                      '<td style="display: ' + styles[0] + '" data-num="0"><sapn class="cedit">' + (ways[data[i]['cwm_expenditure.give_type']] ? (ways[data[i]['cwm_expenditure.give_type']]) : "") + ( data[i]['xtm_kh_bank.bank_name'] != '0' ? (data[i]['xtm_kh_bank.bank_name']? "，" +data[i]['xtm_kh_bank.bank_name'] :'') : '') + '</sapn></td>' +*/
/* //					'<td style="display: ' + styles[10] + '" data-num="9">' + data[i]['xtm_kh_bank.bank_name']+ '</td>' +*/
/* 					'<td style="display: ' + styles[13] + '" data-num="10">' + (employees[data[i]['cwm_expenditure.duty_id'] ] || employees[data[i]['cwm_expenditure.create_id']] || "") + '</td>' +*/
/* 					'<td style="display: ' + styles[12] + '" data-num="11">' + data[i]['cwm_expenditure.remark']+"<span style='display:" +(data[i]['cwm_expenditure.contract_num'] ? "inline-block" : "none") +"'>，订单编号：" + data[i]['cwm_expenditure.contract_num'] + '<span></td>' +*/
/* 					'<td style="display: ' + styles[13] + '" data-num="12">' + employees[data[i]['cwm_expenditure.create_id']] + '</td>' +*/
/* 					'<td style="display: ' + styles[14] + '" data-num="13">' + cs.getNowTime(data[i]['cwm_expenditure.create_at'],true) + '</td>' +*/
/* 					'<td style="display: ' + styles[15] + '" data-num="14">' + (data[i]['cwm_expenditure.auth_id'] != '0' ? employees[data[i]['cwm_expenditure.auth_id']] : '') + '</td>' +*/
/* 					'<td style="display: ' + styles[16] + '" data-num="15">' + (data[i]['cwm_expenditure.auth_time'] != '0' ? cs.getNowTime(data[i]['cwm_expenditure.auth_time'],true) : '')+ '</td>' +*/
/* 					'<td style="display: ' + styles[17] + '" data-num="16">' + data[i]['cwm_expenditure.auth_remark'] + '</td>' +*/
/* 					'<td style="display: ' + styles[18] + '" data-num="17">' + data[i]['clearing_name'] + '</td>' +*/
/* 					'<td style="display: ' + styles[19] + '" data-num="18">' + (data[i]['cwm_expenditure.clearing_time']  ? cs.getNowTime(data[i]['cwm_expenditure.clearing_time'],true) : "") + '</td>' +*/
/* 					'</tr>')*/
/* 			}*/
/* 			$('#datalist').html(content.join(''));*/
/* 			custom.get_custom_info();*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/* 			custom.showReamrk();*/
/* */
/* 			// var spStatus = cs.getSpStatus('支出',true);*/
/* 			$("#datalist tr").find('.sp').unbind('click').click(function() {*/
/* 				var status = $(this).attr('data-status');*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				changeStatus(status, id);*/
/* 			});*/
/* 				*/
/* 			$('.plSp').click(function() {*/
/* 				var num = 0;*/
/* 				var status = '';*/
/* 				var coldata = [];*/
/* 				var Statu = false;*/
/* 				$('#datalist').find('input[type=checkbox]').each(function(i) {*/
/* 					if($(this).is(':checked')) {*/
/* 						num++;*/
/* 						status = $(this).parents('tr').attr('data-status') == 1 ? 2 : 1;*/
/* 						if($(this).parents('tr').attr('data-status') == 1 || $(this).parents('tr').attr('data-status') == 2) {*/
/* 							ykp.prompt('审批过的不能批量审批!');*/
/* 							Statu = false;*/
/* 						}else {*/
/* 							coldata.push({id:$(this).parents('tr').attr('data-id'),status:status});*/
/* 							Statu = true;*/
/* 						}*/
/* 					}*/
/* 				})*/
/* 				*/
/* 					if(num == 0) {*/
/* 						ykp.prompt('请选择再审批');*/
/* 					}else {*/
/* 						if(Statu){*/
/* 							ykp.doAjax({*/
/* 								url:"/api/api_finance/all_expenditure_sh",*/
/* 								method:'post',*/
/* 								data:{*/
/* 									coldata:JSON.stringify(coldata)*/
/* 								},*/
/* 								success:function(res) {*/
/* 									ykp.prompt('审批成功');*/
/* 									getList(1);*/
/* 								}*/
/* 							})*/
/* 						}*/
/* 					}*/
/* 			})*/
/* 			*/
/* 			*/
/* 			$('.sdetail').click(function(){*/
/* */
/* 				var id = $(this).parents('tr').attr('data-id');  //id*/
/* 				var index = $(this).parents('tr').index();*/
/* 				showMark('.popup_new');*/
/* 				$('#showBox .title').text('查看支出信息');*/
/*                 $('#templateCon #imgBox .upbx').remove();*/
/*                 $('#templateCon select[name=give_type]').hide();*/
/*                 $('#templateCon .payway').show();*/
/* 				get_cus();*/
/* 				cs.timeplug();*/
/* 					*/
/* 				var _data = data[index];*/
/* 				$('#templateCon .expenditrue_edit').show();*/
/* 				$('#templateCon .sure_button').hide();*/
/* 				$('#templateCon #uploadBox').hide();*/
/* 				//查看详情*/
/* 				$('#templateCon [affied]').prop('disabled', true);*/
/* 				changeSelect(_data['cwm_expenditure.object_type'],_data['cwm_expenditure.object']);*/
/* 				getContractList(_data['cwm_expenditure.object']);*/
/* 				var field = '';*/
/* 				$('#templateBox').find('[affied]').each(function(index,element) {*/
/* 					field = 'cwm_expenditure.' + $(this).attr('affied');*/
/* 					if($(this).attr('affied') == 'give_time' || $(this).attr('affied') == 'clearing_time'){*/
/* 						$(this).val(cs.getNowTime(_data[field]));*/
/* 					}else if($(this).attr('affied') == 'clearing_name'){*/
/* 						$(this).val(_data["clearing_name"]);*/
/* 					}else{*/
/* 						$(this).val(_data[field]);*/
/* 					}*/
/* 					*/
/* 				})*/
/*                 var ways = ['','现金','支付宝','微信','银行卡'];//支出方式*/
/*                 $('#templateCon .payway').val( ways[_data['cwm_expenditure.give_type']] ? (ways[_data['cwm_expenditure.give_type']]) : "");*/
/* */
/* 				//将图片渲染在页面上*/
/* 				var imgs =  _data['cwm_expenditure.img']!=''?_data['cwm_expenditure.img'].split(','):[];*/
/* 				var self = $('#templateCon #imgBox');*/
/*                 var imghtml = '';*/
/*                 if(imgs&&imgs.length>0){*/
/*                 	for(var i in imgs){*/
/*                 		var img_input ='<label class="" style="margin-bottom:0;margin-right:10px;line-height:70px;display: inline-block;width: 70px;height: 70px;cursor: pointer; text-align: center;">'+*/
/* 			                '<img class="image" affied="pics" style="width: 100%;height: 70px;" src='+imgs[i]+' alt="">'+*/
/* 			               	'</label>';*/
/* 			            imghtml +=img_input;*/
/*                 	}*/
/*                 	self.append(imghtml);*/
/*                 }*/
/*                 var arr = [];*/
/*                 if(data[index]['cwm_expenditure.files']){*/
/*                 	JSON.parse(data[index]['cwm_expenditure.files']).forEach(function(item) {*/
/* 	                	arr.push('<p style="padding-left: 2px;"><a data-url="'+item.url+'">'+item.name+'</a></p>')*/
/* 	                })*/
/*                 	 $('#templateCon #fileBox').html(arr.join(','));*/
/* 	               $('#templateCon #fileBox').find('a').click(function() {*/
/* 						var name = $(this).text();*/
/* 						var url = $(this).attr('data-url');*/
/* 						window.open(ykp.api_url+"/api/api_common/update_file_name?file_url="+url+"&name="+name)*/
/* 					})*/
/*                 }*/
/* */
/*               if($('#templateCon [affied="give_type"]').val() == 1){*/
/*               	$('#templateCon .paynum').hide();*/
/*               }*/
/*                */
/*                 */
/*                 changeSelect();*/
/*                 getContractList();*/
/*                 */
/*                */
/*                cs.upload1({*/
/* 					el: "#templateBox #upload1",*/
/* 					ael: "#templateBox #fileBox"*/
/* 				})*/
/*                 uploadsmallimg();*/
/* 			})*/
/* */
/* 			//编辑结算信息*/
/* 			$('.edit2').click(function(){*/
/* 				var id = $(this).parents('tr').attr('data-id');  //id*/
/* 				var postData = {};*/
/* 				showMark('.popup_acount');*/
/* */
/* 				$('#showBox .title').text('编辑结算信息');*/
/* */
/* 				//支出基本信息*/
/* 				ykp.doAjax({*/
/* 					url:'/api/api_finance/expenditure_info',*/
/* 					method:'post',*/
/* 					data:{*/
/* 						id:id*/
/* 					},*/
/* 					success:function(res){*/
/* 						postData = res.data;*/
/* 					}*/
/* 				});*/
/* */
/* 				//切换收款方式 自动切换收款账户*/
/*                 cs.changePayWayGetAccounts($('#templateCon [field="give_type"]'),$('#templateCon [field="accounts"]'));*/
/* 				$('#templateCon [field="give_type"]').change(function() {*/
/* 					if($(this).val() == 1) {*/
/* 						$('#templateCon [field="accounts"]').hide().prev().hide();*/
/* 					}else {*/
/* 						$('#templateCon [field="accounts"]').show().prev().show();*/
/* 					}*/
/* 				})*/
/*                 $("#temHeader").width($("#showBox").width()-47);*/
/* 				//所有账户*/
/* */
/* 				//提交结算账户信息*/
/* 				$('#templateCon .sure_button').click(function(){*/
/* 					postData['give_type'] = $('#templateCon [field="give_type"]').val();*/
/* 					if(!postData['give_type']) {*/
/* 						ykp.prompt('请输入相应数据！');*/
/* 						return;*/
/* 					}else if(postData['give_type'] != 1) {*/
/* 						postData['accounts'] = $('#templateCon [field="accounts"]').val();*/
/* 						if(!postData['accounts'] || !postData['give_type']){*/
/* 							ykp.prompt('请输入相应数据！');*/
/* 							return;*/
/* 						}*/
/* 					}*/
/* 					*/
/* 					ykp.doAjax({*/
/* 						url:'/api/api_finance/expenditure_change',*/
/* 						method:'post',*/
/* 						data:postData,*/
/* 						success:function(res){*/
/* 							cs.close();*/
/* 							getList();*/
/* 						}*/
/* 					});*/
/* 				});*/
/* 			});*/
/* */
/* 			//编辑支出基本信息*/
/* 			$('.edit1').click(function(res) {*/
/* 				var id = $(this).parents('tr').attr('data-id');  //id*/
/* 				var index = $(this).parents('tr').index();*/
/* 				showMark('.popup_new');*/
/* 				$('#showBox .title').text('编辑支出信息');*/
/* */
/* 				get_cus();*/
/* 				cs.timeplug();*/
/* 				var _data = data[index];*/
/* 				changeSelect(_data['cwm_expenditure.object_type'],_data['cwm_expenditure.object']);*/
/* 				getContractList(_data['cwm_expenditure.object']);*/
/* 				var field = '';*/
/* 				$('#templateBox').find('[affied]').each(function(index,element) {*/
/* 					field = 'cwm_expenditure.' + $(this).attr('affied');*/
/* 					if($(this).attr('affied') == 'give_time'){*/
/* 						$(this).val(cs.getNowTime(_data[field]));*/
/* 						return true;*/
/* 					}*/
/* 					$(this).val(_data[field]);*/
/* 				})*/
/* 				$('#templateBox').find('[affied=contract_num]').find('option').each(function(){*/
/* 					if($(this).text() == parseInt(_data['cwm_expenditure.contract_num'])) {*/
/* 						$(this).attr('disabled',true)*/
/* 					}*/
/* 				})*/
/* 				//将图片渲染在页面上*/
/* 				var imgs =  _data['cwm_expenditure.img']!=''?_data['cwm_expenditure.img'].split(','):[];*/
/* 				var self = $('#templateCon #imgBox');*/
/*                 var imghtml = '';*/
/*                 if(imgs&&imgs.length>0){*/
/*                 	for(var i in imgs){*/
/*                 		var img_input ='<label style="float:left;margin-right:10px;position: relative;">'+*/
/* 			                '<i class="fa fa-remove pic-close" style="position: absolute;color: #fff;top: 2px;right: 2px;"></i><img affied="pics" style="width: 100%;height: 70px;" src='+imgs[i]+' alt="">'+*/
/* 			                '</label>';*/
/* 			            imghtml +=img_input;*/
/*                 	}*/
/*                 	self.prepend(imghtml);*/
/*                 }*/
/*                 $('.fa-remove').unbind().click(function() {*/
/*                     $(this).parent().remove();*/
/*                 })*/
/*                 if(self.parent().siblings().length >4 ){*/
/*                     self.parent().hide();*/
/*                 }*/
/*                 var arr = [];*/
/*                 if(data[index]['cwm_expenditure.files']){*/
/*                 	JSON.parse(data[index]['cwm_expenditure.files']).forEach(function(item) {*/
/* 	                	arr.push('<p style="padding-left: 2px;"><a href="'+item.url+'">'+item.name+'</a><i style="color: red; margin-left: 20px;cursor: pointer;" class="ace-icon fa fa-trash-o gdel gdel2"></i></p>')*/
/* 	                })*/
/*                 	 $('#templateCon #fileBox').html(arr.join(','));*/
/* 	                $('.gdel2').click(function() {*/
/* 						$(this).parent().remove();*/
/* 					})*/
/*                 }*/
/* */
/*                 changeSelect();*/
/*                 getContractList();*/
/*                 */
/*                */
/*                cs.upload1({*/
/* 					el: "#templateBox #upload1",*/
/* 					ael: "#templateBox #fileBox"*/
/* 				})*/
/* 				add_edit(id);*/
/* 			})*/
/* 		}*/
/* */
/* 		//对点击驳回进行处理*/
/* 		function changeStatus(status, id) {*/
/* 			var data = {*/
/* 				url: '/api/api_finance/expenditure_statu',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					id: id,*/
/* 					status: status*/
/* 				}*/
/* 			}*/
/* */
/* 			if(status == 1) {*/
/* 				$('#feedBack').show();*/
/* 				$('#feedBack .hold').unbind('click').click(function() {*/
/* 					var approve_reply = $('#feedBack').find('input').val();*/
/* 					if(approve_reply == '') {*/
/* 						ykp.prompt('不能为空！');*/
/* 						return false;*/
/* 					}*/
/* 					data.data.auth_remark = approve_reply;*/
/* 					setStatus(data);*/
/* 					$('.close_label').parents('.label_popup').fadeOut();*/
/* 				})*/
/* 				cs.closePop();*/
/* 			} else if(status == 0){*/
/* 					layui.use('layer', function() {*/
/* 						var layer = layui.layer;*/
/* 						layer.confirm('确认撤销审批？', function(flag) {*/
/* 							if(flag) {*/
/* 						layer.closeAll();*/
/* 						setStatus(data);*/
/* 							}*/
/* 						});*/
/* 					})*/
/* //              bootbox.confirm('确认撤销审批？', function(flag){*/
/* //                  if(flag){*/
/* //                      setStatus(data);*/
/* //                  }*/
/* //              })*/
/*             }else {*/
/* 				setStatus(data);*/
/* 			}*/
/* 		}*/
/* */
/* 		//对点击审批 || 撤销进行处理*/
/* 		function setStatus(data) {*/
/* 			ykp.doAjax({*/
/* 				url: data.url,*/
/* 				method: data.method,*/
/* 				data: data.data,*/
/* 				success: function(res) {*/
/* 					ykp.prompt('审批成功!');*/
/* 					getList();*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//自定义table*/
/* 		cs.custorm_check('#dynamic-table', '#datalist', true);*/
/* */
/* 		$('.add_expenditure').click(function() {*/
/* 			showMark('.popup_new');*/
/* 			$('#showBox .title').text('添加支出');*/
/* */
/* 			get_cus();*/
/* 			changeSelect();*/
/*             uploadsmallimg()*/
/* 			getContractList();*/
/* */
/* 			cs.timeplug();*/
/* 			 cs.upload1({*/
/* 					el: "#templateBox #upload1",*/
/* 					ael: "#templateBox #fileBox"*/
/* 				})*/
/* 			add_edit();   //添加操作*/
/* 		});*/
/* */
/* 		function getContractList(id){*/
/* 			if(id){*/
/* 				getDetais(id);*/
/* 			}else{*/
/* 				$('#templateCon [affied="object"]').on("change",function(){*/
/* 					$('#templateCon [affied="contract_num"]').find('option').not(':first').remove(); */
/* 	            	var data = $(this).val();*/
/* 	            	getDetais(data);*/
/* 				}); */
/* 			}*/
/* 		};*/
/* */
/* 		function getDetais(id){*/
/* 	            ykp.doAjax({*/
/* 	            	url:'/api/api_contract/f7',*/
/* 	            	method:'post',*/
/* 	            	async:false,*/
/* 	            	data:{*/
/* 	            		filter:'htm_contract.customer_id = ' + id,*/
/* 	            		select:'htm_contract.contract_code'*/
/* 	            	},*/
/* 	            	success:function(res){*/
/* 	            		var data = res.data;*/
/* 	            		var code_html = [];*/
/* 	            		for(var i in data){*/
/* 	            			code_html.push('<option value="'+ data[i]['contract_code'] +'">'+ data[i]['contract_code'] +'</option>');*/
/* 	            		}*/
/* 	            		$('#templateCon [affied="contract_num"]').append(code_html.join(''));*/
/* 	            		*/
/* 	            	}*/
/* 	            });*/
/* 	         */
/* 		};*/
/* 		*/
/* 		//保存*/
/* 		function add_edit(id) {*/
/* 			$('#templateCon .sure_button').click(function() {*/
/* 				var Status = false;*/
/* 				var data = {} ;*/
/* 				var msg = '添加成功';*/
/* 				var url = id ? '/api/api_finance/expenditure_change' : '/api/api_finance/expenditure_add';*/
/* 				$('#templateCon').find('[affied]').not(':hidden').each(function(i) {*/
/* 					var value =  $(this).val();*/
/* 					if(value == ""&&$(this).attr('validate')=='required') {*/
/* 						ykp.prompt($(this).attr('msg'));*/
/* 						Status = false;*/
/* 						return false;*/
/* 					} else {*/
/* 						if($(this).attr('affied') == 'duty_id') {*/
/* 							data.duty_name = $(this).find('option:selected').text();*/
/* 						}*/
/* 						if($(this).attr('affied') == 'object'){*/
/* 							data.object_name = $(this).find('option:selected').text();*/
/* 						}*/
/* 						data[$(this).attr('affied')] = $(this).attr('affied') == 'give_time' ? parseInt(new Date(value) /1000) :value;*/
/* 						Status = true;*/
/* 					}*/
/* 				});*/
/* 				//新增的照片*/
/* 				var imgs = [];*/
/* 				data.img = '';*/
/* 				if($('#templateCon img')&&$('#templateCon img').length>0){*/
/* 					$('#templateCon img').each(function(){*/
/* 						imgs.push($(this).attr('src'));*/
/* 					});*/
/* */
/* 					data.img = imgs.join(',');*/
/* 				}*/
/* 				*/
/* 				var fileBox = $('#templateCon #fileBox');*/
/* 				var files = [];*/
/* 				if(fileBox.children().length > 0) {*/
/* 					$('#templateCon #fileBox').find('a').each(function(i) {*/
/* 						files.push({*/
/* 							name: $(this).text(),*/
/* 							url: $(this).attr('data-url')*/
/* 						})*/
/* 					})*/
/* */
/* 					data.files = JSON.stringify(files);*/
/* 				}*/
/* 				*/
/* 				if(Status) {*/
/* 					if(id) {*/
/* 						data.id = id;*/
/* 						msg = '编辑成功';*/
/* 					}*/
/* 					ykp.doAjax({*/
/* 						url:url,*/
/* 						method:'POST',*/
/* 						data:data,*/
/* 						success:function(res) {*/
/* 							ykp.prompt(msg);*/
/* 							cs.close();*/
/* 							getList(1);*/
/* 						}*/
/* 					})*/
/* 				}*/
/* 			})*/
/* 		};*/
/* */
/* 		//获取公司   和员工*/
/* 		function get_cus() {*/
/* */
/* 			var employees = [];*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_employees/f7',*/
/* 				method: 'post',*/
/* 				async: false,*/
/* 				data: {*/
/* 					select: 'bmm_employees.id,bmm_employees.name'*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					for(var i in data) {*/
/* 						 if(data[i]['name']) {*/
/* 						employees.push('<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>');*/
/* 					}*/
/* 						}*/
/* 					$('#templateCon select[affied="duty_id"]').append(employees.join(''));*/
/* 				}*/
/* 			});*/
/* 		};*/
/* 		closeMark();*/
/* */
/* 		//根据选择的类别关联对象*/
/* 		function changeSelect(val,cusVal) {*/
/* 			if(val) {*/
/* 				switch(val) {*/
/* 					case '1':*/
/* 						getCustom(cusVal);*/
/* 						break;*/
/* 					case '2':*/
/* 						getPeople(cusVal);*/
/* 						break;*/
/* 					case '3':*/
/* 						getParentPart(cusVal);*/
/* 						break;*/
/* 					default:*/
/* 						$('#templateCon #object').html('<option value=""> 请选择 </option>');*/
/* 						break;*/
/* 				}*/
/* 			} else {*/
/* 				$('#templateBox').find('select[affied="object_type"]').change(function() {*/
/* 					var value = $(this).val();*/
/* 					if(value == 1 && $('#templateBox').find('select[affied="object"]').val()){*/
/* 						$('#templateBox .order').show();*/
/* 					}else{*/
/* 						$('#templateBox .order').hide();*/
/* 					}*/
/* 					//console.log(value);*/
/* 					switch(value) {*/
/* 						case '1':*/
/* 							getCustom();*/
/* 							break;*/
/* 						case '2':*/
/* 							getPeople();*/
/* 							break;*/
/* 						case '3':*/
/* 							getParentPart();*/
/* 							break;*/
/* 						default:*/
/* 							$('#templateBox #object').find('[affied="pics"]').html('<option value=""> 请选择 </option>');*/
/* 							break;*/
/* 					}*/
/* 				})*/
/* 			}*/
/* 			*/
/* 			$('#templateBox').find('select[affied="object"]').change(function(){*/
/* 				if($('#templateBox').find('select[affied="object_type"]').val() == 1 && $(this).val()){*/
/* 				     $('#templateBox .order').show();*/
/* 				}else{*/
/* 					$('#templateBox .order').hide();*/
/* 				}*/
/* 			})*/
/* */
/* 		};*/
/* */
/* 		//获取上级部门*/
/* 		function getParentPart(val) {*/
/* 			ykp.doAjax({*/
/* 				url: "/api/api_department/f7",*/
/* 				method: "post",*/
/* 				data: {*/
/* 					select:'bmm_department.id,bmm_department.name',*/
/* 					filter: 'bmm_department.is_del = 0'*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					var content = ['<option value="">请选择</option>'];*/
/* 					for(var i in data) {*/
/* 						content.push('<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>');*/
/* 					}*/
/* 					$('#templateBox #object').html(content.join(''));*/
/* 					$('#templateBox #object').val(val);*/
/* 				}*/
/* 			});*/
/* 		};*/
/* */
/* 		function getPeople(val) {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_employees/grid',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: 999*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var empl = ['<option value="">请选择</option>'];*/
/* 					var data = res.data.items;*/
/* 					for(var i in data) {*/
/* 						 if(data[i]['bmm_employees.name']) {*/
/* 						empl.push('<option value="' + data[i]['bmm_employees.id'] + '">' + data[i]['bmm_employees.name'] + '</option>')*/
/* 					}*/
/* 				}*/
/* 					$('#templateBox #object').html(empl.join(''));*/
/* 					$('#templateBox #object').val(val);*/
/* 				}*/
/* 			})*/
/* 		};*/
/* */
/* 		function getCustom(val) {*/
/* 			var people = ['<option value="">请选择</option>'];*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_customer/customer',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					type: 3,*/
/* 					limit:"9999"*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data.items;*/
/* 					for(var i in data) {*/
/* 						people.push('<option value="' + data[i]['khm_customer.id'] + '">' + data[i]['khm_customer.name'] + '</option>')*/
/* 						}*/
/* 					$('#templateBox #object').html(people.join(''));*/
/* 					if(val){*/
/* 						$('#templateBox #object').val(val);*/
/* 					}*/
/* 					*/
/* 					if($('#templateBox').find('select[affied="object"]').val()){*/
/* 						$('#templateBox .order').show();*/
/* 					}else{*/
/* 						$('#templateBox .order').hide();*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 			*/
/* //			if(value == 1 && $('#templateBox').find('select[affied="object"]').val()){*/
/* //				$('#templateBox .order').show();*/
/* //			}else{*/
/* //				$('#templateBox .order').hide();*/
/* //			}*/
/* 		};*/
/* 	});*/
/* </script>*/
