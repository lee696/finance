<?php

/* admin/platform/pf_billing.html */
class __TwigTemplate_9a603ce169c0fc174f45d6f3aa41c83776aa2f447ae761bc699f96d49fc833d4 extends Twig_Template
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
        echo "
<style type=\"text/css\">
\t#templateCon label {
\t\twidth: 107px;
\t}
\t
\t#templateCon input {
\t\twidth: 180px;
\t\theight: 30px;
\t}
\t
\t#templateCon #imgBox img {
\t\tcursor: pointer;
\t}
\t#templateCon #imgBox label{
\t\twidth: 70px;
\t}
</style>
<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<!--  <h3 class=\"header smaller lighter blue\">项目开票</h3> -->
\t\t<div class=\"actions\" id=\"topTool\">
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<div class=\"search\">
\t\t\t\t\t<i class=\"search-icon\"></i>
\t\t\t\t\t<input type=\"text\" pts=\"0\" sear=\"zhm_comprehensive_bill.bill_id\" placeholder=\"开票编号\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<div class=\"search\">
\t\t\t\t\t<i class=\"search-icon\"></i>
\t\t\t\t\t<input type=\"text\" pts=\"0\" sear=\"khm_customer.name\" placeholder=\"企业名称\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<div class=\"search\">
\t\t\t\t\t<i class=\"search-icon\"></i>
\t\t\t\t\t<input type=\"text\" pts=\"0\" sear=\"zhm_comprehensive_bill.order_number\" placeholder=\"订单编号\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<div class=\"search\">
\t\t\t\t\t<i class=\"search-icon\"></i>
\t\t\t\t\t<select style=\"margin-right: 12px!important;width:180px\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true
\t\t\t\t\t\" sear=\"zhm_comprehensive_bill.create_id\" pts=3>
\t\t\t\t\t\t<option value=\"\">创建人  </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<div class=\"search\">
\t\t\t\t\t<i class=\"search-icon\"></i>
\t\t\t\t\t<input type=\"text\" pts=\"0\" sear=\"zhm_comprehensive_bill.bill_number\" placeholder=\"发票号码\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<div class=\"search\">
\t\t\t\t\t<i class=\"search-icon\"></i>
\t\t\t\t\t<select style=\"margin-right: 12px !important;width: 180px\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\" sear=\"zhm_comprehensive_bill.auth_id\" pts=3>
\t\t\t\t\t\t<option value=\"\">审批人  </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button type=\"button\" pts=\"0\" id=\"search\" class=\"btn btn-info btn-sm\">
                    <i class=\"fa fa-search\"></i>
                </button>

\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button id=\"flush\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
\t                <i class=\"fa fa-refresh\"></i>
\t            </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button id=\"heightsearch\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
                    <i class=\"fa fa-filter\"></i>
                </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" contentAuthority=\"178\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button id=\"add\" type=\"button\" title=\"添加\" style=\"background-color: #32CD32\t !important;border-color: #32CD32 !important;\" class=\"btn addBtn btn-info btn-sm\">
\t\t\t\t\t<i class=\"fa fa-plus\"></i>
                </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" contentAuthority=\"179\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button title=\"批量审批\" class=\"btn btn-info sp btn-sm plSp\" style=\"background-color: #32CD32 !important; border-color: #32CD32;\">
\t\t\t\t\t<i class=\"fa fa-check-circle-o\"></i>
\t            </button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" contentAuthority=\"310\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t<button type=\"button\"  title=\"导出\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"exportfile moveToClue btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t\t<i class=\"fa fa-sign-out\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"col-sx-4\" style=\" float: left;  margin-right: 5px; \">
\t\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:290px;height: 36px\">
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"background: #E6E6E6;line-height:22px\" data-status=\"a\">全部</a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:22px\" data-status=\"0\">
\t\t\t\t\t\t</i> 待审批</a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:22px\" data-status=\"2\"> 已通过</a>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:22px\" data-status=\"1\"> 未通过</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"position: absolute; margin-top: 65px; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;\">
\t\t\t\t<div class=\"row\" id=\"SearchCon\">

\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"custom_table\">
\t\t<table id=\"dynamic-table\">
\t\t\t<thead>
\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t<th class=\"center\">
\t\t\t\t\t\t<label class=\"pos-rel\">
                                <input type=\"checkbox\" class=\"ace\"  onclick=\"cs.checkAll(this.checked)\"/>
                                <span class=\"lbl\"></span>
                            </label>
\t\t\t\t\t</th>
\t\t\t\t\t<th>操作</th>
\t\t\t\t\t<th data-num=\"4\">审批状态</th>
\t\t\t\t\t<th data-num=\"1\">开票申请号</th>
\t\t\t\t\t<th data-num=\"2\">企业名称</th>
\t\t\t\t\t<th data-num=\"3\">订单编号</th>
\t\t\t\t\t
\t\t\t\t\t<th data-num=\"5\">开票日期</th>
\t\t\t\t\t<th data-num=\"6\" style=\"text-align: right !important;\">开票金额(元)</th>
\t\t\t\t\t<th data-num=\"7\">创建人</th>
\t\t\t\t\t<th data-num=\"8\">创建时间</th>
\t\t\t\t\t<th data-num=\"9\">开票类型</th>
\t\t\t\t\t<th data-num=\"10\">发票号码</th>
\t\t\t\t\t<th data-num=\"11\">抬头类型</th>
\t\t\t\t\t<th data-num=\"12\">开票抬头</th>
\t\t\t\t\t<th data-num=\"13\">社会统一信用码</th>
\t\t\t\t\t<th data-num=\"14\">审批人</th>
\t\t\t\t\t<th data-num=\"15\">审批时间</th>
\t\t\t\t\t<th data-num=\"16\">备注</th>
\t\t\t\t\t<th data-num=\"17\">审批回复</th>
\t\t\t\t\t<th data-num=\"18\">开票人</th>
\t\t\t\t\t<th data-num=\"19\">开票时间</th>
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
\t\t<div class=\"row\" style=\"height: 500px;\">
\t\t\t<form class=\"item_form\" role=\"form\">
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 企业名称： </label>
\t\t\t\t\t<input class=\"name2\" type=\"text\" addfield=\"name\" disabled style=\"width:474px;display:none;\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 订单编号： </label>
\t\t\t\t\t<select addfield='order_number' class=\"orderno order1 required\" message=\"请输入订单编号\" style=\"display:none;\">
\t\t\t\t\t\t<option value=\"\"> 请选择</option>
\t\t\t\t\t</select>
\t\t\t\t\t<input type=\"text\" addfield='order_number' class=\"order2\" disabled style=\"display:none;\">
\t\t\t\t\t<label> 社会统一信用码： </label>
\t\t\t\t\t<input style=\"\" type=\"text\" addfield='social_credit_code' disabled/>
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data disinfo\" style=\"display: none\">
\t\t\t\t\t<label> 已收款： </label>
\t\t\t\t\t<input disabled type=\"number\" title='已收额' />
\t\t\t\t\t<label> 未收款： </label>
\t\t\t\t\t<input disabled type=\"text\" title='未收额' />
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data disinfo\" style=\"display: none\">
\t\t\t\t\t<label> 已开票： </label>
\t\t\t\t\t<input disabled type=\"number\" title='已开票' />
\t\t\t\t\t<label> 未开票： </label>
\t\t\t\t\t<input disabled type=\"text\" title='未开票' />
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 开票日期： </label>
\t\t\t\t\t<div class=\"input-group\" style=\"width:180px;display:inline-flex;\">
\t\t\t\t\t\t<input class=\"date-timepicker1 required\" message=\"请选择开票日期\" style=\"width:150px;\" addfield='bill_date' msg=\"拜访时间不能为空\" search data-id=\"visit_time\" type=\"text\" class=\"posttime form-control typeahead scrollable\" />
\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"height:30px;width:30px;\">
\t                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:4px;\"></i>
\t                        </span>
\t\t\t\t\t</div>
\t\t\t\t\t<label> 开票类型： </label>
\t\t\t\t\t<select addfield=\"bill_type\" class=\"required\" message=\"请选择开票类型\">
\t\t\t\t\t\t<option value=\"\"> 请选择</option>
\t\t\t\t\t\t<option value=\"1\"> 增值税专用发票</option>
\t\t\t\t\t\t<option value=\"2\"> 增值税普通发票 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data special\" style=\"display: none;\">
\t\t\t\t\t<label> 注册地址： </label>
\t\t\t\t\t<input type=\"text\" addfield='address' class=\"required\" message=\"请输入注册地址\" />
\t\t\t\t\t<label> 收款银行： </label>
\t\t\t\t\t<input type=\"text\" addfield='bank' class=\"required\" message=\"请输入收款银行\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data special\" style=\"display: none;\">
\t\t\t\t\t<label> 收款账号： </label>
\t\t\t\t\t<input type=\"text\" addfield='tel' class=\"required\" message=\"请输入收款账号\" />
\t\t\t\t\t<label> 联系方式： </label>
\t\t\t\t\t<input type=\"text\" addfield='accounts' class=\"required\" message=\"请输入联系方式\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label> 开票金额： </label>
\t\t\t\t\t<input type=\"number\" addfield='bill_money' />
\t\t\t\t\t<label> 开票抬头： </label>
\t\t\t\t\t<input type=\"text\" addfield='bill_header' />
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t
\t\t\t\t\t<label> 抬头类型： </label>
\t\t\t\t\t<select addfield=\"bill_header_type\">
\t\t\t\t\t\t<option value=\"0\"> 请选择</option>
\t\t\t\t\t\t<option value=\"1\"> 公司</option>
\t\t\t\t\t\t<option value=\"2\"> 个人 </option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data expenditrue_edit\" style=\"display: none;\">
\t\t\t\t\t<label> 开票人： </label>
\t\t\t\t\t<input affied=\"clearing_name\" name=\"accounts\" type=\"text\" validate=\"int\" msg=\"请输入正确的账户\"/>
\t\t\t\t\t<label> 开票时间：</label>
\t\t\t\t\t<!--<select affied=\"clearin_time\" name=\"clearin_time\" msg=\"请选择结算方式\">-->
\t\t\t\t\t<input affied=\"clearing_time\" name=\"clearing_time\" type=\"text\" validate=\"int\" msg=\"请输入正确的账户\"/>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\">
\t\t\t\t\t<label style=\"float:left;margin-right: 5px;\">备注：</label>
\t\t\t\t\t<textarea style=\"width:474px;padding:5px;\" addfield='remark'></textarea>
\t\t\t\t</div>
\t\t\t\t<div class=\"form_data\" style=\"height: 85px;\">
\t\t\t\t\t<label style=\"float:left;margin-right:5px;\">图片： </label>
\t\t\t\t\t<div class=\"\" style=\"padding: 2px; margin-top: 20px;margin-left: 106px;\">
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
\t\t\t\t\t<!--<div id=\"imgBox\">
\t\t\t\t\t\t<label class=\"increase\" style=\"text-align: center;border: 1px solid;width: 70px;position: relative;height: 70px; cursor: pointer; text-align: center;line-height: 70px;font-size: 70px;\">
\t\t\t\t\t\t\t<input type=\"file\" class=\"uploadFiles\" style=\"position:absolute;left:-9999px;opacity: 0;\" />
\t\t\t\t\t\t\t<span class=\"\" style=\"display: inline-block;position: absolute;top: 0;left: 14px; cursor: pointer; text-align: center;\">+</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"clear:both;\"></div>-->
\t\t\t\t</div>
\t\t\t\t
\t\t\t</form>
\t\t\t<div class=\"popup_button\">
\t\t\t\t<button class=\"sure_button\">
                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                        保存
                    </button>
\t\t\t</div>
\t\t</div>
\t</div>
    <div class=\"popup_new1\" style=\"display:none\">
        <div class=\"row\" style=\"height: 500px;\">
            <form class=\"item_form\" role=\"form\">
                <div class=\"form_data\">
                    <label> 企业名称： </label>
                    <select class=\"name1 agreement required\" tabindex=\"-1\" message=\"请选择公司\" addfield=\"name\" aria-hidden=\"true\" style=\"width:200px;display:none;\">
                        <option value=\"\"> 请选择 </option>
                    </select>
                    <input class=\"name2\" type=\"text\" addfield=\"name\" disabled style=\"width:474px;display:none;\" />
                </div>
                <div class=\"form_data\">
                    <label> 订单编号： </label>
                    <select addfield='order_number' class=\"orderno order1 required\" message=\"请输入订单编号\" style=\"display:none;\">
                        <option value=\"\"> 请选择</option>
                    </select>
                    <input type=\"text\" addfield='order_number' class=\"order2\" disabled style=\"display:none;\">
                    <label> 社会统一信用码： </label>
                    <input style=\"\" type=\"text\" addfield='social_credit_code' disabled/>
                </div>
                <div class=\"form_data disinfo\" style=\"display: none\">
                    <label> 已收款： </label>
                    <input disabled type=\"number\" title='已收额' />
                    <label> 未收款： </label>
                    <input disabled type=\"text\" title='未收额' />
                </div>
                <div class=\"form_data disinfo\" style=\"display: none\">
                    <label> 已开票： </label>
                    <input disabled type=\"number\" title='已开票' />
                    <label> 未开票： </label>
                    <input disabled type=\"text\" title='未开票' />
                </div>
                <div class=\"form_data\">
                    <label> 开票日期： </label>
                    <div class=\"input-group\" style=\"width:180px;display:inline-flex;\">
                        <input class=\"date-timepicker1 required\" message=\"请选择开票日期\" style=\"width:150px;\" addfield='bill_date' msg=\"拜访时间不能为空\" search data-id=\"visit_time\" type=\"text\" class=\"posttime form-control typeahead scrollable\" />
                        <span class=\"input-group-addon\" style=\"height:30px;width:30px;\">
\t                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:4px;\"></i>
\t                        </span>
                    </div>
                    <label> 开票类型： </label>
                    <select addfield=\"bill_type\" class=\"required\" message=\"请选择开票类型\">
                        <option value=\"\"> 请选择</option>
                        <option value=\"1\"> 增值税专用发票</option>
                        <option value=\"2\"> 增值税普通发票 </option>
                    </select>
                </div>
                <div class=\"form_data special\" style=\"display: none;\">
                    <label> 注册地址： </label>
                    <input type=\"text\" addfield='address' class=\"required\" message=\"请输入注册地址\" />
                    <label> 收款银行： </label>
                    <input type=\"text\" addfield='bank' class=\"required\" message=\"请输入收款银行\" />
                </div>
                <div class=\"form_data special\" style=\"display: none;\">
                    <label> 收款账号： </label>
                    <input type=\"text\" addfield='tel' class=\"required\" message=\"请输入收款账号\" />
                    <label> 联系方式： </label>
                    <input type=\"text\" addfield='accounts' class=\"required\" message=\"请输入联系方式\" />
                </div>
                <div class=\"form_data\">
                    <label> 开票金额： </label>
                    <input type=\"number\" addfield='bill_money' />
                    <label> 开票抬头： </label>
                    <input type=\"text\" addfield='bill_header' />
                </div>
                <div class=\"form_data\">

                    <label> 抬头类型： </label>
                    <select addfield=\"bill_header_type\">
                        <option value=\"0\"> 请选择</option>
                        <option value=\"1\"> 公司</option>
                        <option value=\"2\"> 个人 </option>
                    </select>
                </div>
                <div class=\"form_data expenditrue_edit\" style=\"display: none;\">
                    <label> 结算人： </label>
                    <input affied=\"clearing_name\" name=\"accounts\" type=\"text\" validate=\"int\" msg=\"请输入正确的账户\"/>
                    <label> 结算时间：</label>
                    <!--<select affied=\"clearin_time\" name=\"clearin_time\" msg=\"请选择结算方式\">-->
                    <input affied=\"clearing_time\" name=\"clearing_time\" type=\"text\" validate=\"int\" msg=\"请输入正确的账户\"/>
                    </select>
                </div>
                <div class=\"form_data\">
                    <label style=\"float:left;margin-right: 5px;\">备注：</label>
                    <textarea style=\"width:474px;padding:5px;\" addfield='remark'></textarea>
                </div>
                <div class=\"form_data\" style=\"height: 85px;\">
                    <label style=\"float:left;margin-right:5px;\">图片： </label>
                    <div class=\"\" style=\"padding: 2px; margin-top: 20px;margin-left: 106px;\">
                        <div id=\"fileBox\">

                        </div>
                        <div id=\"imgBox\">
                            <label class=\"upbx\" style=\"text-align: center;border: 1px solid;width: 70px;position: relative;height: 70px; cursor: pointer; text-align: center;line-height: 70px;font-size: 70px;\">
                                <input type=\"file\" class=\"uploadFiles\" style=\"position:absolute;left:-9999px;opacity: 0;\" />
                                <span class=\"\" style=\"display: inline-block;position: absolute;top: 0;left: 14px; cursor: pointer; text-align: center;\">+</span>
                            </label>
                        </div>
                        <!--<div id=\"uploadBox\">
                            <button type=\"button\" id=\"upload1\" style=\"outline: none;background-color: #009688 !important; margin-top: 20px;\" class=\"btn btn-info btn-sm position-relative\">
                                        上传文件
                            </button>
                        </div>-->
                    </div>
                    <!--<div id=\"imgBox\">
                        <label class=\"increase\" style=\"text-align: center;border: 1px solid;width: 70px;position: relative;height: 70px; cursor: pointer; text-align: center;line-height: 70px;font-size: 70px;\">
                            <input type=\"file\" class=\"uploadFiles\" style=\"position:absolute;left:-9999px;opacity: 0;\" />
                            <span class=\"\" style=\"display: inline-block;position: absolute;top: 0;left: 14px; cursor: pointer; text-align: center;\">+</span>
                        </label>
                    </div>
                    <div style=\"clear:both;\"></div>-->
                </div>

            </form>
            <div class=\"popup_button\">
                <button class=\"sure_button\">
                    <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                    保存
                </button>
            </div>
        </div>
    </div>
\t
\t<div class=\"popup_balance\" style=\"display:none\">
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 发票号码： </label>
\t\t\t<input type=\"text\" addfield='bill_number' id=\"bill_number\" message=\"请输入发票号码\" />
\t\t</div>
\t\t<div class=\"popup_button\">
\t\t\t<button class=\"sure_button\">
                    <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                    保存
             </button>
\t\t</div>
\t</div>
\t
\t<div class=\"label_popup\" id=\"feedBack\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
        box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t<span style=\"display: inline-block;\">请填写审批回复</span>
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
        // line 434
        $this->loadTemplate("admin/mark.html", "admin/platform/pf_billing.html", 434)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/platform/pf_billing.html", 434)->display($context);
        // line 435
        echo "</div>
<script src=\"/resource/adimin/assets/js/LocalResizeIMG.js\"></script>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>

<script type=\"text/javascript\">
\t\$(function() {
\t\tcs.getNodes([178]);
\t\tif(cs.approve_authority({
\t\t\t\tname: '开票',
\t\t\t\tnodes: [179]
\t\t\t})) {
\t\t\t\$('[contentAuthority=\"179\"]').show();
\t\t}

        //导出功能
        cs.exportFile({
            url:\"/api/api_comprehensive_bill/export\",
            title:\"开票记录\"

        });

\t\tvar order = 'zhm_comprehensive_bill.create_time desc';
\t\tvar page_size = 10;
\t\tvar employees = {};
\t\tvar filter = ''; //过滤条件
\t\t//获取所有员工
\t\tykp.doAjax({
\t\t\tasync: false,
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
\t\t\t\t\t\temployees[data[i]['id']] = data[i]['name'];
\t\t\t\t\t\t\$('.advandced-search').append(new Option(data[i]['name'], data[i]['id']));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t});
\t\t
\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_comprehensive_bill/grid',
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
\t\t\tdefaultOrder:\"\",
\t\t\tparams:[{
\t\t\t\tid:\"#dynamic-table\",
\t\t\t\tfield:[\"\",\"\",\"zhm_comprehensive_bill.status\",\"zhm_comprehensive_bill.bill_id\",\"zhm_comprehensive_bill.customer_id\",\"khm_customer.name\",\"zhm_comprehensive_bill.order_number\",\"zhm_comprehensive_bill.bill_date\",\"zhm_comprehensive_bill.create_id\",
\t\t\t\t\"zhm_comprehensive_bill.create_time\",\"zhm_comprehensive_bill.bill_type\",\"zhm_comprehensive_bill.bill_number\",\"zhm_comprehensive_bill.bill_header_type\",\"zhm_comprehensive_bill.bill_header\",\"khm_customer.social_credit_code\",
\t\t\t\t\"zhm_comprehensive_bill.auth_id\",\"zhm_comprehensive_bill.auth_time\",\"zhm_comprehensive_bill.remark\",\"zhm_comprehensive_bill.auth_remark\",\"\",\"zhm_comprehensive_bill.clearing_time\"]

\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});

\t\ttspage();

\t\tfunction tspage() {
\t\t\tif(ykp.getCookie('detailsId') && ykp.getCookie('detailsId') != '') {
\t\t\t\tvar id = ykp.getCookie('detailsId');
\t\t\t\tvar data = {
\t\t\t\t\tpage_size: page_size,
\t\t\t\t\tfilter: `zhm_comprehensive_bill.id = \${id}`
\t\t\t\t}
\t\t\t\tgetList_2(1, data);
\t\t\t}
\t\t}

\t\tgetSearch();

\t\tfunction getSearch() {
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tvar list = [{
\t\t\t\t\tname: \"开票申请号\",
\t\t\t\t\tsearch: \"zhm_comprehensive_bill.bill_id\",
\t\t\t\t\ttype: \"text\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"企业名称\",
\t\t\t\t\tsearch: \"khm_customer.name\",
\t\t\t\t\ttype: \"text\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"订单号\",
\t\t\t\t\tsearch: \"zhm_comprehensive_bill.order_number\",
\t\t\t\t\ttype: \"text\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"审批状态\",
\t\t\t\t\tsearch: \"zhm_comprehensive_bill.status\",
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
\t\t\t\t\t}]
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"开票日期\",
\t\t\t\t\tsearch: \"zhm_comprehensive_bill.bill_date\",
\t\t\t\t\ttype: \"time\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"开票金额\",
\t\t\t\t\tsearch: \"zhm_comprehensive_bill.bill_money\",
\t\t\t\t\ttype: \"text\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"创建人\",
\t\t\t\t\tsearch: \"zhm_comprehensive_bill.create_id\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\turl: \"/api/api_employees/f7\",
\t\t\t\t\tkey: \"people\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"创建时间\",
\t\t\t\t\tsearch: \"zhm_comprehensive_bill.create_time\",
\t\t\t\t\ttype: \"time\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"开票类型\",
\t\t\t\t\tsearch: \"zhm_comprehensive_bill.bill_type\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\toption: [{
\t\t\t\t\t\tval: \"1\",
\t\t\t\t\t\ttext: \"增值税专用发票\"
\t\t\t\t\t}, {
\t\t\t\t\t\tval: \"2\",
\t\t\t\t\t\ttext: \"增值税普通发票 \"
\t\t\t\t\t}]
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"发票号码\",
\t\t\t\t\tsearch: \"zhm_comprehensive_bill.bill_number\",
\t\t\t\t\ttype: \"text\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"抬头类型\",
\t\t\t\t\tsearch: \"zhm_comprehensive_bill.bill_header_type\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\toption: [{
\t\t\t\t\t\tval: \"1\",
\t\t\t\t\t\ttext: \"公司\"
\t\t\t\t\t}, {
\t\t\t\t\t\tval: \"2\",
\t\t\t\t\t\ttext: \"个人\"
\t\t\t\t\t}]
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"开票抬头\",
\t\t\t\t\tsearch: \"zhm_comprehensive_bill.bill_header\",
\t\t\t\t\ttype: \"text\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"社会统一信用码\",
\t\t\t\t\tsearch: \"khm_customer.social_credit_code\",
\t\t\t\t\ttype: \"text\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"审批人\",
\t\t\t\t\tsearch: \"zhm_comprehensive_bill.auth_id\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\turl: \"/api/api_employees/f7\",
\t\t\t\t\tkey: \"people\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"审批时间\",
\t\t\t\t\tsearch: \"zhm_comprehensive_bill.auth_time\",
\t\t\t\t\ttype: \"time\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"开票人\",
\t\t\t\t\tsearch: \"zhm_comprehensive_bill.clearing\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\turl: \"/api/api_employees/f7\",
\t\t\t\t\tkey: \"people\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tname: \"开票时间\",
\t\t\t\t\tsearch: \"zhm_comprehensive_bill.clearing_time\",
\t\t\t\t\ttype: \"time\"
\t\t\t\t}
\t\t\t];

\t\t\tcs.getSearch({
\t\t\t\tlist: list,
\t\t\t\tel: \"#heightsearch\",
\t\t\t\tel1: \"#heightsearch1\"
\t\t\t}, dohSearch);

\t\t\tfunction dohSearch() {
\t\t\t\tvar data = {
\t\t\t\t\turl: '/api/api_comprehensive_bill/grid',
\t\t\t\t\tmethods: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tpage_size: page_size,
\t\t\t\t\t\torder: order
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

\t\t\$('.myFilter').click(function() {
\t\t\tif(!\$(this).hasClass('clc')) {
\t\t\t\t\$(this).addClass('clc').siblings().removeClass('clc');
\t\t\t}

\t\t\tvar data = {
\t\t\t\t\"page_size\": page_size,
\t\t\t\t'page': 1,
\t\t\t\t'order': order
\t\t\t}
\t\t\tvar filter_ = \$(this).attr('data-status');
\t\t\tif(filter_ == 'a') {
\t\t\t\tfilter=\"\";
\t\t\t\tgetList(1);
\t\t\t\treturn;
\t\t\t}
\t\t\tfilter = 'zhm_comprehensive_bill.status = '+filter_;
\t\t\tdata['filter'] = 'zhm_comprehensive_bill.status = ' + filter_;
\t\t\tgetList_2(data);
\t\t})

\t\t\$('#filterBtns a').mouseover(function() {
\t\t\t\$(this).addClass('over');
\t\t})
\t\t\$('#filterBtns a').mouseout(function() {
\t\t\t\$(this).removeClass('over');
\t\t})

\t\tfunction getList_2(data) {
\t\t\tykp.list({
\t\t\t\turl: '/api/api_comprehensive_bill/grid',
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
\t\t\t\t\t} else {
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}

\t\tsearch();

\t\tfunction search() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_comprehensive_bill/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tpage_size: page_size,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}
\t\t\tcs.doSearch('#search', data, 'filter', false, function(res,_filter) {
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

\t\tgetList(1);

\t\t\$('#flush').click(function() {
\t\t\tfilter = \"\";
\t\t\t\$('[pts=\"0\"]').val('');
\t\t\t\$('[sear=\"zhm_comprehensive_bill.create_id\"]').val('').trigger('change');
\t\t\t\$('[sear=\"zhm_comprehensive_bill.auth_id\"]').val('').trigger('change');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetList();
\t\t})

\t\tfunction getList(current) {
\t\t\tykp.list({
\t\t\t\turl: '/api/api_comprehensive_bill/grid',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tpage: current,
\t\t\t\t\tpage_size: page_size,
\t\t\t\t\torder: order,
\t\t\t\t\tfilter: filter,
\t\t\t\t},
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
\t\t\t\t\t} else {
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}

\t\tfunction addList(res) {
\t\t\tvar data = res.data.items;
\t\t\tvar content = '';
\t\t\tvar status = ['待审批', '未通过', '已通过'];
\t\t\t//抬头类型
\t\t\tvar header_type = ['', '公司', '个人'];
\t\t\t//开票类型
\t\t\tvar bill_type = ['', '增值税专用发票', '增值税普通发票'];

\t\t\t//审批权限为true可以审批,为false不可审批
\t\t\tvar spApp = cs.approve_authority({
\t\t\t\tname: '开票',
\t\t\t\tnodes: [181]
\t\t\t});
\t\t\tvar cxApp = cs.approve_authority({
\t\t\t\tname: '开票',
\t\t\t\tnodes: [181]
\t\t\t});
\t\t\tvar edit_statu = cs.getNodes([180], true);
\t\t\tvar balance_statu = cs.getNodes([\"280\"], true);
\t\t\tvar styles = [];
\t\t\t\$('#dynamic-table th').each(function(i, e) {
\t\t\t\tstyles.push(\$(this).css('display'));
\t\t\t});

\t\t\tfor(var i in data) {
\t\t\t\tcontent += `<tr data-id=\"\${data[i]['zhm_comprehensive_bill.id']}\" data-status=\"\${data[i]['zhm_comprehensive_bill.status']}\">
\t\t\t\t\t<td class=\"center\" style=\"display: ' + styles[0] + ' \">
\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t<input type=\"checkbox\" name=\"check\" class=\"ace\"/>
\t\t\t\t\t<span class=\"lbl\"></span>
\t\t\t\t\t</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
                \t\t<label class=\"pos-rel\">
                \t\t<a class=\"btOrange sdetail\" title=\"详情\"><i class=\"fa fa-info\"></i></a>
\t\t\t\t\t\t<a class=\"editInfo btBlue\" style=\"display: \${edit_statu ? (data[i]['zhm_comprehensive_bill.status'] == 1 ? 'inline-block' : 'none') : 'none'};\" contentAuthority=\"180\" title=\"编辑\"><i class=\"fa fa-pencil-square-o\"></i></a>
\t\t\t\t\t\t<a class=\"balance btBlue\" style=\"display: \${balance_statu ? (data[i]['zhm_comprehensive_bill.status'] == 2 && !data[i]['zhm_comprehensive_bill.bill_number'] ? 'inline-block' : 'none') : 'none'};\" contentAuthority=\"280\" title=\"开票\"><i class=\"fa fa-calculator \"></i></a>
\t\t\t\t\t\t<a href=\"#\" class=\"sp btOrange\" data-status = \"0\" style=\"display: \${cxApp ? (data[i]['zhm_comprehensive_bill.status'] == 2 ? 'inline-block' : 'none') : 'none'};color:#fff !important\" contentAuthority=\"181\" title=\"撤销\"><i class=\"fa fa-rotate-left\"></i></a>
                        <a href=\"#\" class=\"sp btGreen\" data-status = \"2\" style=\"display: \${spApp ? (data[i]['zhm_comprehensive_bill.status'] == 0 ?'inline-block' : 'none') : 'none'};color:#fff !important\" contentAuthority=\"181\" title=\"通过\"><i class=\"fa fa-check-circle-o\"></i></a>
                        <a href=\"#\" class=\" sp btRed\" data-status = \"1\" style=\"display: \${spApp ? (data[i]['zhm_comprehensive_bill.status'] == 0 ?'inline-block' : 'none') : 'none'};color:#fff !important\" contentAuthority=\"181\" title=\"驳回\"><i class=\"fa fa-times-circle\"></i></a>
\t\t\t\t\t\t</label>
                \t</td>
\t\t\t\t\t<td data-num = \"4\" style=\"display:\${styles[5]}\">\${status[data[i]['zhm_comprehensive_bill.status']]}</td>
                \t<td data-num = \"1\" style=\"display:\${styles[2]}\">\${data[i]['zhm_comprehensive_bill.bill_id']}</td>
                \t<td data-num = \"2\" style=\"display:\${styles[3]}\" data-cid=\"\${data[i]['zhm_comprehensive_bill.customer_id']}\">
\t\t\t\t\t\t<a href=\"#\" class=\"customerDetail pos-rel\">\${data[i]['khm_customer.name']}</a>
\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t \t\t\t\t<i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data[i]['Remark'].length > 0 ? 'red' : ''}\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i>
\t\t\t \t\t\t\t </label>
\t\t\t\t\t</td>
                \t<td data-num = \"3\" style=\"display:\${styles[4]}\">\${data[i]['zhm_comprehensive_bill.order_number']}</td>
                \t
                \t<td data-num = \"5\" style=\"display:\${styles[6]}\">\${cs.getNowTime(data[i]['zhm_comprehensive_bill.bill_date'])}</td>
                \t<td data-num = \"6\" style=\"display:\${styles[7]};text-align: right !important;
                \t\">\${data[i]['zhm_comprehensive_bill.bill_money']}</td>
                \t<td data-num = \"7\" style=\"display:\${styles[8]}\">\${employees[data[i]['zhm_comprehensive_bill.create_id']]}</td>
                \t<td data-num = \"8\" style=\"display:\${styles[9]}\">\${cs.getNowTime(data[i]['zhm_comprehensive_bill.create_time'],true)}</td>
                \t<td data-num = \"9\" style=\"display:\${styles[10]}\">\${bill_type[data[i]['zhm_comprehensive_bill.bill_type']]}</td>
                \t<td data-num = \"10\" style=\"display:\${styles[11]}\">\${data[i]['zhm_comprehensive_bill.bill_number']}</td>
                \t<td data-num = \"11\" style=\"display:\${styles[12]}\">\${header_type[data[i]['zhm_comprehensive_bill.bill_header_type']]}</td>
                \t<td data-num = \"12\" style=\"display:\${styles[13]}\">\${data[i]['zhm_comprehensive_bill.bill_header']}</td>
                \t<td data-num = \"13\" style=\"display:\${styles[14]}\">\${data[i]['khm_customer.social_credit_code']}</td>
                \t<td data-num = \"14\" style=\"display:\${styles[15]}\">\${data[i]['zhm_comprehensive_bill.auth_id'] !='0' ? employees[data[i]['zhm_comprehensive_bill.auth_id']] : ''}</td>
                \t<td data-num = \"15\" style=\"display:\${styles[16]}\">\${data[i]['zhm_comprehensive_bill.auth_time'] != '0' ? cs.getNowTime(data[i]['zhm_comprehensive_bill.auth_time'],true) : ''}</td>
                \t<td data-num = \"16\" style=\"display:\${styles[17]}\">\${data[i]['zhm_comprehensive_bill.remark']}</td>
                \t<td data-num = \"17\" style=\"display:\${styles[18]}\">\${data[i]['zhm_comprehensive_bill.auth_remark']}</td>
                \t<td data-num = \"18\" style=\"display:\${styles[19]}\">\${data[i]['clearing_info'] ? data[i]['clearing_info']['name'] : \"\" }</td>
                \t<td data-num = \"19\" style=\"display:\${styles[20]}\">\${data[i]['clearing_info'] ? (data[i]['zhm_comprehensive_bill.clearing_time'] != 0 ? cs.getNowTime(data[i]['zhm_comprehensive_bill.clearing_time'],true) : \"\") : \"\" }</td>
                </tr>`;
\t\t\t}

\t\t\t\$('#datalist').html(content);
\t\t\tcustom.get_custom_info();
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\tcustom.showReamrk();

\t\t\t\$('.plSp').click(function() {
\t\t\t\tvar num = 0;
\t\t\t\tvar status = '';
\t\t\t\tvar coldata = [];
\t\t\t\tvar Statu = false;
\t\t\t\t\$('#datalist').find('input[type=checkbox]').each(function(i) {
\t\t\t\t\tif(\$(this).is(':checked')) {
\t\t\t\t\t\tnum++;
\t\t\t\t\t\tstatus = \$(this).parents('tr').attr('data-status') == '0' ? 2 : 0;
\t\t\t\t\t\tif(\$(this).parents('tr').attr('data-status') == 1 || \$(this).parents('tr').attr('data-status') == 2) {
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
\t\t\t\t\t\t\turl: \"/api/api_comprehensive_bill/batch_auth_bill\",
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tdata: JSON.stringify(coldata)
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('审批成功');
\t\t\t\t\t\t\t\tgetList(1);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t}

\t\t\t})
\t\t\tbalance();
\t\t\t//结算
\t\tfunction balance() {
\t\t\t\$('.balance').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_comprehensive_bill/grid',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tpage_size: page_size,
\t\t\t\t\t\tfilter: 'zhm_comprehensive_bill.id=' + id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data.items[0];
\t\t\t\t\t\tvar postData = {
\t\t\t\t\t\t\tid: id,
//\t\t\t\t\t\t\tcustomer_id:data['zhm_comprehensive_bill.cid'],
//\t\t\t\t\t\t\torder_number:data['zhm_comprehensive_bill.order_number'],
//\t\t\t\t\t\t\tbill_date:data['zhm_comprehensive_bill.bill_date'],
\t\t\t\t\t\t};
\t\t\t\t\t\t
\t\t\t\t\t\tshowMark('.popup_balance');
\t\t\t\t\t\t\$('#showBox .title').html('编辑开票信息');
\t\t
\t\t\t\t\t\t//切换收款方式 自动切换收款账户
\t\t                cs.changePayWayGetAccounts(\$('#templateCon [field=\"get_way\"]'),\$('#templateCon [field=\"account\"]'));
\t\t                \$('#templateCon [field=\"get_way\"]').change(function() {
\t\t\t\t\t\t\tif(\$(this).val() == 1) {
\t\t\t\t\t\t\t\t\$('#templateCon [field=\"account\"]').hide().prev().hide();
\t\t\t\t\t\t\t}else {
\t\t\t\t\t\t\t\t\$('#templateCon [field=\"account\"]').show().prev().show();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t\t//提交结算账户信息
\t\t\t\t\t\t\$('#templateCon .sure_button').click(function() {
//\t\t\t\t\t\t\tpostData['get_way'] = \$('#templateCon [field=\"get_way\"]').val();
//\t\t\t\t\t\t\t
//\t\t\t\t\t\t\t
//\t\t\t\t\t\t\tif(!postData['get_way']) {
//\t\t\t\t\t\t\t\tykp.prompt('请输入相应数据！');
//\t\t\t\t\t\t\t\treturn;
//\t\t\t\t\t\t\t}else if(postData['get_way'] != 1) {
//\t\t\t\t\t\t\t\tpostData['account'] = \$('#templateCon [field=\"account\"]').val();
//\t\t\t\t\t\t\t\tif(!postData['account'] || !postData['get_way']){
//\t\t\t\t\t\t\t\t\tykp.prompt('请输入相应数据！');
//\t\t\t\t\t\t\t\t\treturn;
//\t\t\t\t\t\t\t\t}
//\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tpostData['bill_number'] = \$('#templateCon #bill_number').val();
\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\turl: '/api/api_comprehensive_bill/edit_bill',
\t\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\t\tdata: postData,
\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t
//\t\t\t\tconsole.log(postData);
\t\t\t\t
\t\t\t});
\t\t}
\t\t\t
\t\t\t

\t\t\t//详情  编辑   结算
\t\t\t\$('.sdetail,.editInfo').unbind('click').click(function() {
                var it = \$(this);
                showMark('.popup_new');
                if(it.hasClass('sdetail')) {
                    \$('#templateCon #imgBox .upbx' ).remove();
                }else {
                    //getInfo();
\t\t\t\t}

\t\t\t\tvar id = it.parents('tr').attr('data-id');


\t\t\t\t//上传图片
                uploadsmallimg()

\t\t\t\t\$('#templateCon .name1').hide();
\t\t\t\t\$('#templateCon .name2').show();
\t\t\t\t\$('#templateCon .order1').hide();
\t\t\t\t\$('#templateCon .order2').show();

\t\t\t\tcs.timeplug();
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_comprehensive_bill/grid',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tpage_size: page_size,
\t\t\t\t\t\tfilter: 'zhm_comprehensive_bill.id=' + id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data.items[0];

\t\t\t\t\t\t//如果开票类型为专票，则显示注册地址、收款银行、收款账号、联系方式
\t\t\t\t\t\tif(data['zhm_comprehensive_bill.bill_type'] == '1') {
\t\t\t\t\t\t\t\$('#templateCon .special').show();
\t\t\t\t\t\t}
\t\t\t\t\t\tvar get_way = {
\t\t\t\t\t\t\t1:\"现金\",
\t\t\t\t\t\t\t2:\"支付宝\",
\t\t\t\t\t\t\t3:\"微信\",
\t\t\t\t\t\t\t4:\"银行卡\"
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\tfor(var key in data) {
\t\t\t\t\t\t\t\$('#templateBox ').find('[addfield]').not('hidden').each(function() {
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tif(\$(this).attr('addfield') == 'social_credit_code') {
\t\t\t\t\t\t\t\t\t\$(this).val(data['khm_customer.social_credit_code']);
\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif(\$(this).attr('addfield') == 'name') {
\t\t\t\t\t\t\t\t\t\$(this).val(data['khm_customer.name']).attr('customer_id', data['zhm_comprehensive_bill.customer_id']);
\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tif(key.replace(/zhm_comprehensive_bill./, '') == \$(this).attr('addfield')) {
\t\t\t\t\t\t\t\t\t\$(this).attr('addfield') == 'bill_date' ? \$(this).val(cs.getNowTime(data[key])) : \$(this).val(data[key]);
\t\t\t\t\t\t\t\t\tif(\$(this).attr('addfield') == 'name' || \$(this).attr('addfield') == 'bill_type' || \$(this).attr('addfield') == 'bill_header_type') {
\t\t\t\t\t\t\t\t\t\t\$(this).find('option[value=' + data[key] + ']').attr('selected', true);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif(key.replace(/zhm_comprehensive_bill./, '') == \$(this).attr('addfield')) {
\t\t\t\t\t\t\t\t\tif(\$(this).attr('addfield') == 'get_way' || \$(this).attr('addfield') == 'account') {
\t\t\t\t\t\t\t\t\t\t\$(this).text(get_way[data[key]]);
\t\t\t\t\t\t\t\t\t\tif(data[key] == 1) {
\t\t\t\t\t\t\t\t\t\t\t\$('#templateBox .account').hide();
\t\t\t\t\t\t\t\t\t\t}
//\t\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t}

\t\t\t\t\t\tvar arr = [];
\t\t\t\t\t\tif(data['zhm_comprehensive_bill.files']) {
\t\t\t\t\t\t\tJSON.parse(data['zhm_comprehensive_bill.files']).forEach(function(item) {
\t\t\t\t\t\t\t\tarr.push('<p style=\"padding-left: 2px;\"><a href=\"' + item.url + '\">' + item.name + '</a><i style=\"color: red; margin-left: 20px;cursor: pointer;\" class=\"ace-icon fa fa-trash-o gdel gdel2\"></i></p>')
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\$('#templateCon #fileBox').html(arr.join(','));
\t\t\t\t\t\t\t\$('.gdel2').click(function() {
\t\t\t\t\t\t\t\t\$(this).parent().remove();
\t\t\t\t\t\t\t})
\t\t\t\t\t\t}

\t\t\t\t\t\t//处理图片数据
\t\t\t\t\t\tvar imgs = data['zhm_comprehensive_bill.imgs'].split(',');
\t\t\t\t\t\t// console.log(imgs);
\t\t\t\t\t\t//图片超过4张将新增图片的label删除
\t\t\t\t\t\tif(imgs.length > 4) {
\t\t\t\t\t\t\t// console.log(1)
\t\t\t\t\t\t\t\$('#templateCon .upbx').remove();
\t\t\t\t\t\t}
\t\t\t\t\t\tvar img_html = [];
\t\t\t\t\t\tfor(var i in imgs) {
\t\t\t\t\t\t\tif(imgs[i]) {
\t\t\t\t\t\t\t\timg_html.push(
\t\t\t\t\t\t\t\t\t'<label style=\"float:left;margin-right:5px;width:auto;\">' +
\t\t\t\t\t\t\t\t\t'<img class=\"image\" src=\"' + imgs[i] + '\" style=\"height:70px;width:70px;\">' +
\t\t\t\t\t\t\t\t\t'</label>'
\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#templateCon #imgBox').prepend(img_html.join(''));

\t\t\t\t\t\t//查看详情
\t\t\t\t\t\tif(it.hasClass('sdetail')) {
\t\t\t\t\t\t\t\$('#showBox .title').text('详情');
                            \$('#templateCon [addfield]').prop('disabled', true);
\t\t\t\t\t\t\t\$('#templateBox #other').show();
\t\t\t\t\t\t\t\$('#templateCon .gdel2,#templateCon #uploadBox,#templateCon .sure_button').remove();
\t\t\t\t\t\t\t\$('#templateCon .expenditrue_edit').show().find('input').prop('disabled', true);
\t\t\t\t\t\t\t\$('#templateBox [addifed=clearing_time]').text(cs.getNowTime(data['clearing_info']['clearing_time'],true));
\t\t\t\t\t\t\t\$('#templateBox [addifed=clearing]').text(employees[data['clearing_info']['clearing_name']]);
\t\t\t\t\t\t}
\t\t\t\t\t\t//编辑信息
\t\t\t\t\t\tif(it.hasClass('editInfo')) {
\t\t\t\t\t\t\t\$('#showBox .title').text('编辑');
\t\t\t\t\t\t\t\$('#templateCon [addfield=\"bill_number\"]').prop('disabled', true);
\t\t\t\t\t\t\tcs.upload1({
\t\t\t\t\t\t\t\tel: \"#templateBox #upload1\",
\t\t\t\t\t\t\t\tael: \"#templateBox #fileBox\"
\t\t\t\t\t\t\t})

\t\t\t\t\t\t\t//提交数据
\t\t\t\t\t\t\tsubmit(id);
\t\t\t\t\t\t}
\t\t\t\t\t\t//结算
\t\t\t\t\t\tif(it.hasClass('balance')) {
\t\t\t\t\t\t\t\$('#showBox .title').text('开票');
\t\t\t\t\t\t\t\$('#templateCon [addfield],#templateCon .uploadFiles').not('[addfield=\"bill_number\"]').prop('disabled', true);

\t\t\t\t\t\t\t//提交数据
\t\t\t\t\t\t\tsubmit(id);
\t\t\t\t\t\t}
                        uploadsmallimg();
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})

\t\t\t//点击 审批 or  驳回 or  撤销
\t\t\t\$(\"#datalist tr\").find('.sp').unbind('click').click(function() {
\t\t\t\tvar status = \$(this).attr('data-status');
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tchangeStatus(status, id);
\t\t\t});
\t\t}

\t\t\$('#changePageNum').change(function() {
\t\t\tpage_size = \$(this).val();
\t\t\tykp.setCookie('page_size',page_size);
\t\t\tgetList(1);
\t\t})
\t\t//上传图片
        uploadsmallimg()

\t\tfunction changeStatus(status, id) {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_comprehensive_bill/auth_bill',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tid: id,
\t\t\t\t\tstatus: status
\t\t\t\t}
\t\t\t}
\t\t\tif(status == 1) {
\t\t\t\t\$('#feedBack').find('input').val('');
\t\t\t\t\$('#feedBack').show();
\t\t\t\t\$('#feedBack .hold').unbind('click').click(function() {
\t\t\t\t\tvar approve_reply = \$('#feedBack').find('input').val().trim();
\t\t\t\t\tif(approve_reply == '') {
\t\t\t\t\t\tykp.prompt('不能为空！');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\tdata.data.auth_remark = approve_reply;
\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t})
\t\t\t\tcs.closePop();
\t\t\t} else if(status == 0) {
\t\t\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\tlayer.confirm('确认撤销审批？', function(flag) {
\t\t\t\t\t\t\tif(flag) {
\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\tsetStatus(data);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t})
//\t\t\t\tbootbox.confirm('确认撤销审批？', function(flag) {
//\t\t\t\t\tif(flag) {
//\t\t\t\t\t\tsetStatus(data);
//\t\t\t\t\t}
//\t\t\t\t})
\t\t\t} else {
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

\t\t//开票类型选择专票，则显示相应信息，否则隐藏相应信息
\t\tfunction changeBillType() {
\t\t\t\$('#templateCon [addfield=\"bill_type\"]').unbind('change').change(function() {
\t\t\t\tif(\$(this).val() == '1') {
\t\t\t\t\t\$('#templateCon .special').show();
\t\t\t\t} else
\t\t\t\t\t\$('#templateCon .special').hide();
\t\t\t});
\t\t}

\t\t//添加开票
\t\t\$('#add').click(function() {
\t\t\tshowMark('.popup_new1');
\t\t\t\$('#showBox .title').text('添加');
\t\t\t\$('#templateCon [addfield=\"bill_number\"]').prop('disabled', true);

\t\t\t//开票类型选择专票，则显示相应信息，否则隐藏相应信息
\t\t\tchangeBillType();

\t\t\t//上传图片
            uploadsmallimg()

            \$('#templateCon [addfield=\"order_number\"]').unbind('change').change(function() {
                 if(\$(this).val() != '') {
                     var c_id = \$(this).find('option:selected').attr(\"contract_id\");
                       ykp.doAjax({
                           url: '/api/api_comprehensive_bill/get_contract_money',
                           method: 'post',
                           data: {
                               id:c_id
                           },
                           success: function(res) {
                              var data =  res.data;
                               console.log(data);
                               for(var v in  data) {
                                   \$('#templateBox').find('input[title]').each(function (i, e) {
                                       if(\$(this).attr(\"title\") == v){
\t\t\t\t\t\t\t\t\t\t    \$(this).val(data[v])
\t\t\t\t\t\t\t\t\t\t}
                                   })
                               }
                           }
                       })


                     \$('#templateCon .disinfo').show();
                 } else
                     \$('#templateCon .disinfo').hide();
            });

\t\t\t\$('#templateCon .name1').show();
\t\t\t\$('#templateCon .name2').hide();
\t\t\t\$('#templateCon .order1').show();
\t\t\t\$('#templateCon .order2').hide();
\t\t\tcs.timeplug();
\t\t\tgetInfo();
\t\t\tcs.upload1({
\t\t\t\tel: \"#templateBox #upload1\",
\t\t\t\tael: \"#templateBox #fileBox\"
\t\t\t})
\t\t\tsubmit();

\t\t});

\t\tfunction submit(id) {
\t\t\t\$('#templateBox .sure_button').click(function() {
\t\t\t\tvar data = {};

\t\t\t\tvar status = true;
\t\t\t\t\$('#templateBox').find('[addfield]').not(':hidden').each(function(i) {
\t\t\t\t\t//判断是否为空
\t\t\t\t\tif(\$(this).hasClass('required') || \$(this).attr('addfield') == 'bill_number') {
\t\t\t\t\t\tif(\$(this).val() == undefined || \$(this).val().trim() == '') {
\t\t\t\t\t\t\tif(\$(this).attr('addfield') == 'bill_number' && \$(this).prop('disabled')) {
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tykp.prompt(\$(this).attr('message'));
\t\t\t\t\t\t\tstatus = false;
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tif(\$(this).attr('addfield') == 'name' && \$(this).hasClass('name2')) {
\t\t\t\t\t\tdata['customer_id'] = \$(this).attr('customer_id');
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr('addfield') == 'name' && \$(this).hasClass('name1')) {
\t\t\t\t\t\tdata['customer_id'] = \$(this).select2('data')[0].id;
\t\t\t\t\t\tdata['name'] = \$(this).select2('data')[0]['text'];
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t\tdata[\$(this).attr('addfield')] = \$(this).attr('addfield') == 'bill_date' ? parseInt(new Date(\$(this).val()) / 1000) : \$(this).val();
\t\t\t\t})

\t\t\t\t//图片数据
\t\t\t\tvar img_data = [];
\t\t\t\t\$('#templateCon img').each(function(i, e) {
\t\t\t\t\timg_data.push(\$(this).attr('src'));
\t\t\t\t});
\t\t\t\tdata['imgs'] = img_data.join(',');

\t\t\t\tif(id) {
\t\t\t\t\tdata.id = id
\t\t\t\t}
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
\t\t\t\t// console.log(data);
\t\t\t\t// return;

\t\t\t\tif(status) {
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_comprehensive_bill/add_edit_bill',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: data,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tid ? ykp.prompt('编辑成功') : ykp.prompt('添加成功');
\t\t\t\t\t\t\tgetList(1);
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t}

\t\t\t})

\t\t}

\t\t//获取所有公司信息
\t\tfunction getInfo() {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_comprehensive_bill/check_customer',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\ttype: 1
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tvar people = [];
\t\t\t\t\t\$('#templateBox .name1').select2({
\t\t\t\t\t\tallowClear: true
\t\t\t\t\t})
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tpeople.push('<option value=\"' + data[i]['id'] + '\">' + data[i]['name'] + '</option>')
\t\t\t\t\t}
\t\t\t\t\t\$('#templateBox .name1').append(people.join(''));

\t\t\t\t\t//切换公司获取相应的订单编号
\t\t\t\t\tgetCodeNum();
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//切换公司获取相应的订单编号
\t\tfunction getCodeNum() {
\t\t\t\$('#templateCon .name1').on('select2:close', function(e) {
\t\t\t\t\$('#templateCon .order1').find('option').not(':first').remove();
\t\t\t\t\$('#templateCon [addfield=\"social_credit_code\"]').val('');
\t\t\t\tvar id = \$(this).select2('data')[0].id;
\t\t\t\tif(id != '') {
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_contract/f7',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\tfilter: 'htm_contract.is_del <> 1 and  htm_contract.customer_id = ' + id,
\t\t\t\t\t\t\tselect: 'htm_contract.contract_code,khm_customer.social_credit_code,htm_contract.id'
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tvar data = res.data;
                            console.log(data);
                            var order_html = [];
\t\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\t\torder_html.push('<option contract_id=\"' + data[i]['id'] + '\" value=\"' + data[i]['contract_code'] + '\">' + data[i]['contract_code'] + '</option>');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(data.length > 0) {
\t\t\t\t\t\t\t\tif(data[0]['social_credit_code']) {
\t\t\t\t\t\t\t\t\t\$('#templateCon [addfield=\"social_credit_code\"]').val(data[0]['social_credit_code']);
\t\t\t\t\t\t\t\t\t\$('#templateCon [addfield=\"social_credit_code\"]').prop('disabled',true);
\t\t\t\t\t\t\t\t}else {
\t\t\t\t\t\t\t\t\t\$('#templateCon [addfield=\"social_credit_code\"]').prop('disabled',false);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\$('#templateCon .order1').append(order_html.join(''));
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});
\t\t}
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/platform/pf_billing.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 435,  454 => 434,  19 => 1,);
    }
}
/* */
/* <style type="text/css">*/
/* 	#templateCon label {*/
/* 		width: 107px;*/
/* 	}*/
/* 	*/
/* 	#templateCon input {*/
/* 		width: 180px;*/
/* 		height: 30px;*/
/* 	}*/
/* 	*/
/* 	#templateCon #imgBox img {*/
/* 		cursor: pointer;*/
/* 	}*/
/* 	#templateCon #imgBox label{*/
/* 		width: 70px;*/
/* 	}*/
/* </style>*/
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<!--  <h3 class="header smaller lighter blue">项目开票</h3> -->*/
/* 		<div class="actions" id="topTool">*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<div class="search">*/
/* 					<i class="search-icon"></i>*/
/* 					<input type="text" pts="0" sear="zhm_comprehensive_bill.bill_id" placeholder="开票编号">*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<div class="search">*/
/* 					<i class="search-icon"></i>*/
/* 					<input type="text" pts="0" sear="khm_customer.name" placeholder="企业名称">*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<div class="search">*/
/* 					<i class="search-icon"></i>*/
/* 					<input type="text" pts="0" sear="zhm_comprehensive_bill.order_number" placeholder="订单编号">*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<div class="search">*/
/* 					<i class="search-icon"></i>*/
/* 					<select style="margin-right: 12px!important;width:180px" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true*/
/* 					" sear="zhm_comprehensive_bill.create_id" pts=3>*/
/* 						<option value="">创建人  </option>*/
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<div class="search">*/
/* 					<i class="search-icon"></i>*/
/* 					<input type="text" pts="0" sear="zhm_comprehensive_bill.bill_number" placeholder="发票号码">*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<div class="search">*/
/* 					<i class="search-icon"></i>*/
/* 					<select style="margin-right: 12px !important;width: 180px" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true" sear="zhm_comprehensive_bill.auth_id" pts=3>*/
/* 						<option value="">审批人  </option>*/
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<button type="button" pts="0" id="search" class="btn btn-info btn-sm">*/
/*                     <i class="fa fa-search"></i>*/
/*                 </button>*/
/* */
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<button id="flush" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/* 	                <i class="fa fa-refresh"></i>*/
/* 	            </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left; margin-right: 5px;">*/
/* 				<button id="heightsearch" type="button" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/*                     <i class="fa fa-filter"></i>*/
/*                 </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" contentAuthority="178" style=" float: left; margin-right: 5px;">*/
/* 				<button id="add" type="button" title="添加" style="background-color: #32CD32	 !important;border-color: #32CD32 !important;" class="btn addBtn btn-info btn-sm">*/
/* 					<i class="fa fa-plus"></i>*/
/*                 </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" contentAuthority="179" style=" float: left; margin-right: 5px;">*/
/* 				<button title="批量审批" class="btn btn-info sp btn-sm plSp" style="background-color: #32CD32 !important; border-color: #32CD32;">*/
/* 					<i class="fa fa-check-circle-o"></i>*/
/* 	            </button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" contentAuthority="310" style=" float: left; margin-right: 5px;">*/
/* 				<button type="button"  title="导出" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="exportfile moveToClue btn addBtn btn-info btn-sm position-relative">*/
/* 					<i class="fa fa-sign-out"></i>*/
/* 				</button>*/
/* 			</div>*/
/* 			<div class="col-sx-4" style=" float: left;  margin-right: 5px; ">*/
/* 				<div id="filterBtns" style="display:inline-block;width:290px;height: 36px">*/
/* 					<a href="javascript:void(0);" class="myFilter" style="background: #E6E6E6;line-height:22px" data-status="a">全部</a>*/
/* 					<a href="javascript:void(0);" class="myFilter" style="line-height:22px" data-status="0">*/
/* 						</i> 待审批</a>*/
/* 					<a href="javascript:void(0);" class="myFilter" style="line-height:22px" data-status="2"> 已通过</a>*/
/* 					<a href="javascript:void(0);" class="myFilter" style="line-height:22px" data-status="1"> 未通过</a>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div id="heightsearch1" class="col-sx-12" style="position: absolute; margin-top: 65px; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;">*/
/* 				<div class="row" id="SearchCon">*/
/* */
/* 				</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="custom_table">*/
/* 		<table id="dynamic-table">*/
/* 			<thead>*/
/* 				<tr class="thColor">*/
/* 					<th class="center">*/
/* 						<label class="pos-rel">*/
/*                                 <input type="checkbox" class="ace"  onclick="cs.checkAll(this.checked)"/>*/
/*                                 <span class="lbl"></span>*/
/*                             </label>*/
/* 					</th>*/
/* 					<th>操作</th>*/
/* 					<th data-num="4">审批状态</th>*/
/* 					<th data-num="1">开票申请号</th>*/
/* 					<th data-num="2">企业名称</th>*/
/* 					<th data-num="3">订单编号</th>*/
/* 					*/
/* 					<th data-num="5">开票日期</th>*/
/* 					<th data-num="6" style="text-align: right !important;">开票金额(元)</th>*/
/* 					<th data-num="7">创建人</th>*/
/* 					<th data-num="8">创建时间</th>*/
/* 					<th data-num="9">开票类型</th>*/
/* 					<th data-num="10">发票号码</th>*/
/* 					<th data-num="11">抬头类型</th>*/
/* 					<th data-num="12">开票抬头</th>*/
/* 					<th data-num="13">社会统一信用码</th>*/
/* 					<th data-num="14">审批人</th>*/
/* 					<th data-num="15">审批时间</th>*/
/* 					<th data-num="16">备注</th>*/
/* 					<th data-num="17">审批回复</th>*/
/* 					<th data-num="18">开票人</th>*/
/* 					<th data-num="19">开票时间</th>*/
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
/* 		<div class="row" style="height: 500px;">*/
/* 			<form class="item_form" role="form">*/
/* 				<div class="form_data">*/
/* 					<label> 企业名称： </label>*/
/* 					<input class="name2" type="text" addfield="name" disabled style="width:474px;display:none;" />*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label> 订单编号： </label>*/
/* 					<select addfield='order_number' class="orderno order1 required" message="请输入订单编号" style="display:none;">*/
/* 						<option value=""> 请选择</option>*/
/* 					</select>*/
/* 					<input type="text" addfield='order_number' class="order2" disabled style="display:none;">*/
/* 					<label> 社会统一信用码： </label>*/
/* 					<input style="" type="text" addfield='social_credit_code' disabled/>*/
/* 				</div>*/
/* 				<div class="form_data disinfo" style="display: none">*/
/* 					<label> 已收款： </label>*/
/* 					<input disabled type="number" title='已收额' />*/
/* 					<label> 未收款： </label>*/
/* 					<input disabled type="text" title='未收额' />*/
/* 				</div>*/
/* 				<div class="form_data disinfo" style="display: none">*/
/* 					<label> 已开票： </label>*/
/* 					<input disabled type="number" title='已开票' />*/
/* 					<label> 未开票： </label>*/
/* 					<input disabled type="text" title='未开票' />*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label> 开票日期： </label>*/
/* 					<div class="input-group" style="width:180px;display:inline-flex;">*/
/* 						<input class="date-timepicker1 required" message="请选择开票日期" style="width:150px;" addfield='bill_date' msg="拜访时间不能为空" search data-id="visit_time" type="text" class="posttime form-control typeahead scrollable" />*/
/* 						<span class="input-group-addon" style="height:30px;width:30px;">*/
/* 	                            <i class="fa fa-clock-o bigger-110" style="position:relative;right:4px;"></i>*/
/* 	                        </span>*/
/* 					</div>*/
/* 					<label> 开票类型： </label>*/
/* 					<select addfield="bill_type" class="required" message="请选择开票类型">*/
/* 						<option value=""> 请选择</option>*/
/* 						<option value="1"> 增值税专用发票</option>*/
/* 						<option value="2"> 增值税普通发票 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="form_data special" style="display: none;">*/
/* 					<label> 注册地址： </label>*/
/* 					<input type="text" addfield='address' class="required" message="请输入注册地址" />*/
/* 					<label> 收款银行： </label>*/
/* 					<input type="text" addfield='bank' class="required" message="请输入收款银行" />*/
/* 				</div>*/
/* 				<div class="form_data special" style="display: none;">*/
/* 					<label> 收款账号： </label>*/
/* 					<input type="text" addfield='tel' class="required" message="请输入收款账号" />*/
/* 					<label> 联系方式： </label>*/
/* 					<input type="text" addfield='accounts' class="required" message="请输入联系方式" />*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label> 开票金额： </label>*/
/* 					<input type="number" addfield='bill_money' />*/
/* 					<label> 开票抬头： </label>*/
/* 					<input type="text" addfield='bill_header' />*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					*/
/* 					<label> 抬头类型： </label>*/
/* 					<select addfield="bill_header_type">*/
/* 						<option value="0"> 请选择</option>*/
/* 						<option value="1"> 公司</option>*/
/* 						<option value="2"> 个人 </option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="form_data expenditrue_edit" style="display: none;">*/
/* 					<label> 开票人： </label>*/
/* 					<input affied="clearing_name" name="accounts" type="text" validate="int" msg="请输入正确的账户"/>*/
/* 					<label> 开票时间：</label>*/
/* 					<!--<select affied="clearin_time" name="clearin_time" msg="请选择结算方式">-->*/
/* 					<input affied="clearing_time" name="clearing_time" type="text" validate="int" msg="请输入正确的账户"/>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="form_data">*/
/* 					<label style="float:left;margin-right: 5px;">备注：</label>*/
/* 					<textarea style="width:474px;padding:5px;" addfield='remark'></textarea>*/
/* 				</div>*/
/* 				<div class="form_data" style="height: 85px;">*/
/* 					<label style="float:left;margin-right:5px;">图片： </label>*/
/* 					<div class="" style="padding: 2px; margin-top: 20px;margin-left: 106px;">*/
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
/* 					<!--<div id="imgBox">*/
/* 						<label class="increase" style="text-align: center;border: 1px solid;width: 70px;position: relative;height: 70px; cursor: pointer; text-align: center;line-height: 70px;font-size: 70px;">*/
/* 							<input type="file" class="uploadFiles" style="position:absolute;left:-9999px;opacity: 0;" />*/
/* 							<span class="" style="display: inline-block;position: absolute;top: 0;left: 14px; cursor: pointer; text-align: center;">+</span>*/
/* 						</label>*/
/* 					</div>*/
/* 					<div style="clear:both;"></div>-->*/
/* 				</div>*/
/* 				*/
/* 			</form>*/
/* 			<div class="popup_button">*/
/* 				<button class="sure_button">*/
/*                         <i class="fa fa-check" aria-hidden="true"></i>*/
/*                         保存*/
/*                     </button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/*     <div class="popup_new1" style="display:none">*/
/*         <div class="row" style="height: 500px;">*/
/*             <form class="item_form" role="form">*/
/*                 <div class="form_data">*/
/*                     <label> 企业名称： </label>*/
/*                     <select class="name1 agreement required" tabindex="-1" message="请选择公司" addfield="name" aria-hidden="true" style="width:200px;display:none;">*/
/*                         <option value=""> 请选择 </option>*/
/*                     </select>*/
/*                     <input class="name2" type="text" addfield="name" disabled style="width:474px;display:none;" />*/
/*                 </div>*/
/*                 <div class="form_data">*/
/*                     <label> 订单编号： </label>*/
/*                     <select addfield='order_number' class="orderno order1 required" message="请输入订单编号" style="display:none;">*/
/*                         <option value=""> 请选择</option>*/
/*                     </select>*/
/*                     <input type="text" addfield='order_number' class="order2" disabled style="display:none;">*/
/*                     <label> 社会统一信用码： </label>*/
/*                     <input style="" type="text" addfield='social_credit_code' disabled/>*/
/*                 </div>*/
/*                 <div class="form_data disinfo" style="display: none">*/
/*                     <label> 已收款： </label>*/
/*                     <input disabled type="number" title='已收额' />*/
/*                     <label> 未收款： </label>*/
/*                     <input disabled type="text" title='未收额' />*/
/*                 </div>*/
/*                 <div class="form_data disinfo" style="display: none">*/
/*                     <label> 已开票： </label>*/
/*                     <input disabled type="number" title='已开票' />*/
/*                     <label> 未开票： </label>*/
/*                     <input disabled type="text" title='未开票' />*/
/*                 </div>*/
/*                 <div class="form_data">*/
/*                     <label> 开票日期： </label>*/
/*                     <div class="input-group" style="width:180px;display:inline-flex;">*/
/*                         <input class="date-timepicker1 required" message="请选择开票日期" style="width:150px;" addfield='bill_date' msg="拜访时间不能为空" search data-id="visit_time" type="text" class="posttime form-control typeahead scrollable" />*/
/*                         <span class="input-group-addon" style="height:30px;width:30px;">*/
/* 	                            <i class="fa fa-clock-o bigger-110" style="position:relative;right:4px;"></i>*/
/* 	                        </span>*/
/*                     </div>*/
/*                     <label> 开票类型： </label>*/
/*                     <select addfield="bill_type" class="required" message="请选择开票类型">*/
/*                         <option value=""> 请选择</option>*/
/*                         <option value="1"> 增值税专用发票</option>*/
/*                         <option value="2"> 增值税普通发票 </option>*/
/*                     </select>*/
/*                 </div>*/
/*                 <div class="form_data special" style="display: none;">*/
/*                     <label> 注册地址： </label>*/
/*                     <input type="text" addfield='address' class="required" message="请输入注册地址" />*/
/*                     <label> 收款银行： </label>*/
/*                     <input type="text" addfield='bank' class="required" message="请输入收款银行" />*/
/*                 </div>*/
/*                 <div class="form_data special" style="display: none;">*/
/*                     <label> 收款账号： </label>*/
/*                     <input type="text" addfield='tel' class="required" message="请输入收款账号" />*/
/*                     <label> 联系方式： </label>*/
/*                     <input type="text" addfield='accounts' class="required" message="请输入联系方式" />*/
/*                 </div>*/
/*                 <div class="form_data">*/
/*                     <label> 开票金额： </label>*/
/*                     <input type="number" addfield='bill_money' />*/
/*                     <label> 开票抬头： </label>*/
/*                     <input type="text" addfield='bill_header' />*/
/*                 </div>*/
/*                 <div class="form_data">*/
/* */
/*                     <label> 抬头类型： </label>*/
/*                     <select addfield="bill_header_type">*/
/*                         <option value="0"> 请选择</option>*/
/*                         <option value="1"> 公司</option>*/
/*                         <option value="2"> 个人 </option>*/
/*                     </select>*/
/*                 </div>*/
/*                 <div class="form_data expenditrue_edit" style="display: none;">*/
/*                     <label> 结算人： </label>*/
/*                     <input affied="clearing_name" name="accounts" type="text" validate="int" msg="请输入正确的账户"/>*/
/*                     <label> 结算时间：</label>*/
/*                     <!--<select affied="clearin_time" name="clearin_time" msg="请选择结算方式">-->*/
/*                     <input affied="clearing_time" name="clearing_time" type="text" validate="int" msg="请输入正确的账户"/>*/
/*                     </select>*/
/*                 </div>*/
/*                 <div class="form_data">*/
/*                     <label style="float:left;margin-right: 5px;">备注：</label>*/
/*                     <textarea style="width:474px;padding:5px;" addfield='remark'></textarea>*/
/*                 </div>*/
/*                 <div class="form_data" style="height: 85px;">*/
/*                     <label style="float:left;margin-right:5px;">图片： </label>*/
/*                     <div class="" style="padding: 2px; margin-top: 20px;margin-left: 106px;">*/
/*                         <div id="fileBox">*/
/* */
/*                         </div>*/
/*                         <div id="imgBox">*/
/*                             <label class="upbx" style="text-align: center;border: 1px solid;width: 70px;position: relative;height: 70px; cursor: pointer; text-align: center;line-height: 70px;font-size: 70px;">*/
/*                                 <input type="file" class="uploadFiles" style="position:absolute;left:-9999px;opacity: 0;" />*/
/*                                 <span class="" style="display: inline-block;position: absolute;top: 0;left: 14px; cursor: pointer; text-align: center;">+</span>*/
/*                             </label>*/
/*                         </div>*/
/*                         <!--<div id="uploadBox">*/
/*                             <button type="button" id="upload1" style="outline: none;background-color: #009688 !important; margin-top: 20px;" class="btn btn-info btn-sm position-relative">*/
/*                                         上传文件*/
/*                             </button>*/
/*                         </div>-->*/
/*                     </div>*/
/*                     <!--<div id="imgBox">*/
/*                         <label class="increase" style="text-align: center;border: 1px solid;width: 70px;position: relative;height: 70px; cursor: pointer; text-align: center;line-height: 70px;font-size: 70px;">*/
/*                             <input type="file" class="uploadFiles" style="position:absolute;left:-9999px;opacity: 0;" />*/
/*                             <span class="" style="display: inline-block;position: absolute;top: 0;left: 14px; cursor: pointer; text-align: center;">+</span>*/
/*                         </label>*/
/*                     </div>*/
/*                     <div style="clear:both;"></div>-->*/
/*                 </div>*/
/* */
/*             </form>*/
/*             <div class="popup_button">*/
/*                 <button class="sure_button">*/
/*                     <i class="fa fa-check" aria-hidden="true"></i>*/
/*                     保存*/
/*                 </button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* 	*/
/* 	<div class="popup_balance" style="display:none">*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 发票号码： </label>*/
/* 			<input type="text" addfield='bill_number' id="bill_number" message="请输入发票号码" />*/
/* 		</div>*/
/* 		<div class="popup_button">*/
/* 			<button class="sure_button">*/
/*                     <i class="fa fa-check" aria-hidden="true"></i>*/
/*                     保存*/
/*              </button>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="label_popup" id="feedBack" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 		<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/*         box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 			<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 				<span style="display: inline-block;">请填写审批回复</span>*/
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
/* 	{% include 'admin/mark.html' %} {% include 'admin/customerDetail.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/LocalResizeIMG.js"></script>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* */
/* <script type="text/javascript">*/
/* 	$(function() {*/
/* 		cs.getNodes([178]);*/
/* 		if(cs.approve_authority({*/
/* 				name: '开票',*/
/* 				nodes: [179]*/
/* 			})) {*/
/* 			$('[contentAuthority="179"]').show();*/
/* 		}*/
/* */
/*         //导出功能*/
/*         cs.exportFile({*/
/*             url:"/api/api_comprehensive_bill/export",*/
/*             title:"开票记录"*/
/* */
/*         });*/
/* */
/* 		var order = 'zhm_comprehensive_bill.create_time desc';*/
/* 		var page_size = 10;*/
/* 		var employees = {};*/
/* 		var filter = ''; //过滤条件*/
/* 		//获取所有员工*/
/* 		ykp.doAjax({*/
/* 			async: false,*/
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
/* 						employees[data[i]['id']] = data[i]['name'];*/
/* 						$('.advandced-search').append(new Option(data[i]['name'], data[i]['id']));*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 		*/
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_comprehensive_bill/grid',*/
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
/* 			defaultOrder:"",*/
/* 			params:[{*/
/* 				id:"#dynamic-table",*/
/* 				field:["","","zhm_comprehensive_bill.status","zhm_comprehensive_bill.bill_id","zhm_comprehensive_bill.customer_id","khm_customer.name","zhm_comprehensive_bill.order_number","zhm_comprehensive_bill.bill_date","zhm_comprehensive_bill.create_id",*/
/* 				"zhm_comprehensive_bill.create_time","zhm_comprehensive_bill.bill_type","zhm_comprehensive_bill.bill_number","zhm_comprehensive_bill.bill_header_type","zhm_comprehensive_bill.bill_header","khm_customer.social_credit_code",*/
/* 				"zhm_comprehensive_bill.auth_id","zhm_comprehensive_bill.auth_time","zhm_comprehensive_bill.remark","zhm_comprehensive_bill.auth_remark","","zhm_comprehensive_bill.clearing_time"]*/
/* */
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* */
/* 		tspage();*/
/* */
/* 		function tspage() {*/
/* 			if(ykp.getCookie('detailsId') && ykp.getCookie('detailsId') != '') {*/
/* 				var id = ykp.getCookie('detailsId');*/
/* 				var data = {*/
/* 					page_size: page_size,*/
/* 					filter: `zhm_comprehensive_bill.id = ${id}`*/
/* 				}*/
/* 				getList_2(1, data);*/
/* 			}*/
/* 		}*/
/* */
/* 		getSearch();*/
/* */
/* 		function getSearch() {*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			var list = [{*/
/* 					name: "开票申请号",*/
/* 					search: "zhm_comprehensive_bill.bill_id",*/
/* 					type: "text"*/
/* 				},*/
/* 				{*/
/* 					name: "企业名称",*/
/* 					search: "khm_customer.name",*/
/* 					type: "text"*/
/* 				},*/
/* 				{*/
/* 					name: "订单号",*/
/* 					search: "zhm_comprehensive_bill.order_number",*/
/* 					type: "text"*/
/* 				},*/
/* 				{*/
/* 					name: "审批状态",*/
/* 					search: "zhm_comprehensive_bill.status",*/
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
/* 					}]*/
/* 				},*/
/* 				{*/
/* 					name: "开票日期",*/
/* 					search: "zhm_comprehensive_bill.bill_date",*/
/* 					type: "time"*/
/* 				},*/
/* 				{*/
/* 					name: "开票金额",*/
/* 					search: "zhm_comprehensive_bill.bill_money",*/
/* 					type: "text"*/
/* 				},*/
/* 				{*/
/* 					name: "创建人",*/
/* 					search: "zhm_comprehensive_bill.create_id",*/
/* 					type: "select",*/
/* 					url: "/api/api_employees/f7",*/
/* 					key: "people"*/
/* 				},*/
/* 				{*/
/* 					name: "创建时间",*/
/* 					search: "zhm_comprehensive_bill.create_time",*/
/* 					type: "time"*/
/* 				},*/
/* 				{*/
/* 					name: "开票类型",*/
/* 					search: "zhm_comprehensive_bill.bill_type",*/
/* 					type: "select",*/
/* 					option: [{*/
/* 						val: "1",*/
/* 						text: "增值税专用发票"*/
/* 					}, {*/
/* 						val: "2",*/
/* 						text: "增值税普通发票 "*/
/* 					}]*/
/* 				},*/
/* 				{*/
/* 					name: "发票号码",*/
/* 					search: "zhm_comprehensive_bill.bill_number",*/
/* 					type: "text"*/
/* 				},*/
/* 				{*/
/* 					name: "抬头类型",*/
/* 					search: "zhm_comprehensive_bill.bill_header_type",*/
/* 					type: "select",*/
/* 					option: [{*/
/* 						val: "1",*/
/* 						text: "公司"*/
/* 					}, {*/
/* 						val: "2",*/
/* 						text: "个人"*/
/* 					}]*/
/* 				},*/
/* 				{*/
/* 					name: "开票抬头",*/
/* 					search: "zhm_comprehensive_bill.bill_header",*/
/* 					type: "text"*/
/* 				},*/
/* 				{*/
/* 					name: "社会统一信用码",*/
/* 					search: "khm_customer.social_credit_code",*/
/* 					type: "text"*/
/* 				},*/
/* 				{*/
/* 					name: "审批人",*/
/* 					search: "zhm_comprehensive_bill.auth_id",*/
/* 					type: "select",*/
/* 					url: "/api/api_employees/f7",*/
/* 					key: "people"*/
/* 				},*/
/* 				{*/
/* 					name: "审批时间",*/
/* 					search: "zhm_comprehensive_bill.auth_time",*/
/* 					type: "time"*/
/* 				},*/
/* 				{*/
/* 					name: "开票人",*/
/* 					search: "zhm_comprehensive_bill.clearing",*/
/* 					type: "select",*/
/* 					url: "/api/api_employees/f7",*/
/* 					key: "people"*/
/* 				},*/
/* 				{*/
/* 					name: "开票时间",*/
/* 					search: "zhm_comprehensive_bill.clearing_time",*/
/* 					type: "time"*/
/* 				}*/
/* 			];*/
/* */
/* 			cs.getSearch({*/
/* 				list: list,*/
/* 				el: "#heightsearch",*/
/* 				el1: "#heightsearch1"*/
/* 			}, dohSearch);*/
/* */
/* 			function dohSearch() {*/
/* 				var data = {*/
/* 					url: '/api/api_comprehensive_bill/grid',*/
/* 					methods: 'post',*/
/* 					data: {*/
/* 						page_size: page_size,*/
/* 						order: order*/
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
/* 		$('.myFilter').click(function() {*/
/* 			if(!$(this).hasClass('clc')) {*/
/* 				$(this).addClass('clc').siblings().removeClass('clc');*/
/* 			}*/
/* */
/* 			var data = {*/
/* 				"page_size": page_size,*/
/* 				'page': 1,*/
/* 				'order': order*/
/* 			}*/
/* 			var filter_ = $(this).attr('data-status');*/
/* 			if(filter_ == 'a') {*/
/* 				filter="";*/
/* 				getList(1);*/
/* 				return;*/
/* 			}*/
/* 			filter = 'zhm_comprehensive_bill.status = '+filter_;*/
/* 			data['filter'] = 'zhm_comprehensive_bill.status = ' + filter_;*/
/* 			getList_2(data);*/
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
/* 			ykp.list({*/
/* 				url: '/api/api_comprehensive_bill/grid',*/
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
/* 					} else {*/
/* 						addList(res);*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		search();*/
/* */
/* 		function search() {*/
/* 			var data = {*/
/* 				url: '/api/api_comprehensive_bill/grid',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					page_size: page_size,*/
/* 					order: order*/
/* 				}*/
/* 			}*/
/* 			cs.doSearch('#search', data, 'filter', false, function(res,_filter) {*/
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
/* 		getList(1);*/
/* */
/* 		$('#flush').click(function() {*/
/* 			filter = "";*/
/* 			$('[pts="0"]').val('');*/
/* 			$('[sear="zhm_comprehensive_bill.create_id"]').val('').trigger('change');*/
/* 			$('[sear="zhm_comprehensive_bill.auth_id"]').val('').trigger('change');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getList();*/
/* 		})*/
/* */
/* 		function getList(current) {*/
/* 			ykp.list({*/
/* 				url: '/api/api_comprehensive_bill/grid',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					page: current,*/
/* 					page_size: page_size,*/
/* 					order: order,*/
/* 					filter: filter,*/
/* 				},*/
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
/* 					} else {*/
/* 						addList(res);*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		function addList(res) {*/
/* 			var data = res.data.items;*/
/* 			var content = '';*/
/* 			var status = ['待审批', '未通过', '已通过'];*/
/* 			//抬头类型*/
/* 			var header_type = ['', '公司', '个人'];*/
/* 			//开票类型*/
/* 			var bill_type = ['', '增值税专用发票', '增值税普通发票'];*/
/* */
/* 			//审批权限为true可以审批,为false不可审批*/
/* 			var spApp = cs.approve_authority({*/
/* 				name: '开票',*/
/* 				nodes: [181]*/
/* 			});*/
/* 			var cxApp = cs.approve_authority({*/
/* 				name: '开票',*/
/* 				nodes: [181]*/
/* 			});*/
/* 			var edit_statu = cs.getNodes([180], true);*/
/* 			var balance_statu = cs.getNodes(["280"], true);*/
/* 			var styles = [];*/
/* 			$('#dynamic-table th').each(function(i, e) {*/
/* 				styles.push($(this).css('display'));*/
/* 			});*/
/* */
/* 			for(var i in data) {*/
/* 				content += `<tr data-id="${data[i]['zhm_comprehensive_bill.id']}" data-status="${data[i]['zhm_comprehensive_bill.status']}">*/
/* 					<td class="center" style="display: ' + styles[0] + ' ">*/
/* 					<label class="pos-rel">*/
/* 					<input type="checkbox" name="check" class="ace"/>*/
/* 					<span class="lbl"></span>*/
/* 					</label>*/
/* 					</td>*/
/* 					<td>*/
/*                 		<label class="pos-rel">*/
/*                 		<a class="btOrange sdetail" title="详情"><i class="fa fa-info"></i></a>*/
/* 						<a class="editInfo btBlue" style="display: ${edit_statu ? (data[i]['zhm_comprehensive_bill.status'] == 1 ? 'inline-block' : 'none') : 'none'};" contentAuthority="180" title="编辑"><i class="fa fa-pencil-square-o"></i></a>*/
/* 						<a class="balance btBlue" style="display: ${balance_statu ? (data[i]['zhm_comprehensive_bill.status'] == 2 && !data[i]['zhm_comprehensive_bill.bill_number'] ? 'inline-block' : 'none') : 'none'};" contentAuthority="280" title="开票"><i class="fa fa-calculator "></i></a>*/
/* 						<a href="#" class="sp btOrange" data-status = "0" style="display: ${cxApp ? (data[i]['zhm_comprehensive_bill.status'] == 2 ? 'inline-block' : 'none') : 'none'};color:#fff !important" contentAuthority="181" title="撤销"><i class="fa fa-rotate-left"></i></a>*/
/*                         <a href="#" class="sp btGreen" data-status = "2" style="display: ${spApp ? (data[i]['zhm_comprehensive_bill.status'] == 0 ?'inline-block' : 'none') : 'none'};color:#fff !important" contentAuthority="181" title="通过"><i class="fa fa-check-circle-o"></i></a>*/
/*                         <a href="#" class=" sp btRed" data-status = "1" style="display: ${spApp ? (data[i]['zhm_comprehensive_bill.status'] == 0 ?'inline-block' : 'none') : 'none'};color:#fff !important" contentAuthority="181" title="驳回"><i class="fa fa-times-circle"></i></a>*/
/* 						</label>*/
/*                 	</td>*/
/* 					<td data-num = "4" style="display:${styles[5]}">${status[data[i]['zhm_comprehensive_bill.status']]}</td>*/
/*                 	<td data-num = "1" style="display:${styles[2]}">${data[i]['zhm_comprehensive_bill.bill_id']}</td>*/
/*                 	<td data-num = "2" style="display:${styles[3]}" data-cid="${data[i]['zhm_comprehensive_bill.customer_id']}">*/
/* 						<a href="#" class="customerDetail pos-rel">${data[i]['khm_customer.name']}</a>*/
/* 						<label class="pos-rel">*/
/* 				 				<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}" data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>*/
/* 			 				 </label>*/
/* 					</td>*/
/*                 	<td data-num = "3" style="display:${styles[4]}">${data[i]['zhm_comprehensive_bill.order_number']}</td>*/
/*                 	*/
/*                 	<td data-num = "5" style="display:${styles[6]}">${cs.getNowTime(data[i]['zhm_comprehensive_bill.bill_date'])}</td>*/
/*                 	<td data-num = "6" style="display:${styles[7]};text-align: right !important;*/
/*                 	">${data[i]['zhm_comprehensive_bill.bill_money']}</td>*/
/*                 	<td data-num = "7" style="display:${styles[8]}">${employees[data[i]['zhm_comprehensive_bill.create_id']]}</td>*/
/*                 	<td data-num = "8" style="display:${styles[9]}">${cs.getNowTime(data[i]['zhm_comprehensive_bill.create_time'],true)}</td>*/
/*                 	<td data-num = "9" style="display:${styles[10]}">${bill_type[data[i]['zhm_comprehensive_bill.bill_type']]}</td>*/
/*                 	<td data-num = "10" style="display:${styles[11]}">${data[i]['zhm_comprehensive_bill.bill_number']}</td>*/
/*                 	<td data-num = "11" style="display:${styles[12]}">${header_type[data[i]['zhm_comprehensive_bill.bill_header_type']]}</td>*/
/*                 	<td data-num = "12" style="display:${styles[13]}">${data[i]['zhm_comprehensive_bill.bill_header']}</td>*/
/*                 	<td data-num = "13" style="display:${styles[14]}">${data[i]['khm_customer.social_credit_code']}</td>*/
/*                 	<td data-num = "14" style="display:${styles[15]}">${data[i]['zhm_comprehensive_bill.auth_id'] !='0' ? employees[data[i]['zhm_comprehensive_bill.auth_id']] : ''}</td>*/
/*                 	<td data-num = "15" style="display:${styles[16]}">${data[i]['zhm_comprehensive_bill.auth_time'] != '0' ? cs.getNowTime(data[i]['zhm_comprehensive_bill.auth_time'],true) : ''}</td>*/
/*                 	<td data-num = "16" style="display:${styles[17]}">${data[i]['zhm_comprehensive_bill.remark']}</td>*/
/*                 	<td data-num = "17" style="display:${styles[18]}">${data[i]['zhm_comprehensive_bill.auth_remark']}</td>*/
/*                 	<td data-num = "18" style="display:${styles[19]}">${data[i]['clearing_info'] ? data[i]['clearing_info']['name'] : "" }</td>*/
/*                 	<td data-num = "19" style="display:${styles[20]}">${data[i]['clearing_info'] ? (data[i]['zhm_comprehensive_bill.clearing_time'] != 0 ? cs.getNowTime(data[i]['zhm_comprehensive_bill.clearing_time'],true) : "") : "" }</td>*/
/*                 </tr>`;*/
/* 			}*/
/* */
/* 			$('#datalist').html(content);*/
/* 			custom.get_custom_info();*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/* 			custom.showReamrk();*/
/* */
/* 			$('.plSp').click(function() {*/
/* 				var num = 0;*/
/* 				var status = '';*/
/* 				var coldata = [];*/
/* 				var Statu = false;*/
/* 				$('#datalist').find('input[type=checkbox]').each(function(i) {*/
/* 					if($(this).is(':checked')) {*/
/* 						num++;*/
/* 						status = $(this).parents('tr').attr('data-status') == '0' ? 2 : 0;*/
/* 						if($(this).parents('tr').attr('data-status') == 1 || $(this).parents('tr').attr('data-status') == 2) {*/
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
/* 							url: "/api/api_comprehensive_bill/batch_auth_bill",*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								data: JSON.stringify(coldata)*/
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
/* 			balance();*/
/* 			//结算*/
/* 		function balance() {*/
/* 			$('.balance').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_comprehensive_bill/grid',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						page_size: page_size,*/
/* 						filter: 'zhm_comprehensive_bill.id=' + id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data.items[0];*/
/* 						var postData = {*/
/* 							id: id,*/
/* //							customer_id:data['zhm_comprehensive_bill.cid'],*/
/* //							order_number:data['zhm_comprehensive_bill.order_number'],*/
/* //							bill_date:data['zhm_comprehensive_bill.bill_date'],*/
/* 						};*/
/* 						*/
/* 						showMark('.popup_balance');*/
/* 						$('#showBox .title').html('编辑开票信息');*/
/* 		*/
/* 						//切换收款方式 自动切换收款账户*/
/* 		                cs.changePayWayGetAccounts($('#templateCon [field="get_way"]'),$('#templateCon [field="account"]'));*/
/* 		                $('#templateCon [field="get_way"]').change(function() {*/
/* 							if($(this).val() == 1) {*/
/* 								$('#templateCon [field="account"]').hide().prev().hide();*/
/* 							}else {*/
/* 								$('#templateCon [field="account"]').show().prev().show();*/
/* 							}*/
/* 						})*/
/* 						//提交结算账户信息*/
/* 						$('#templateCon .sure_button').click(function() {*/
/* //							postData['get_way'] = $('#templateCon [field="get_way"]').val();*/
/* //							*/
/* //							*/
/* //							if(!postData['get_way']) {*/
/* //								ykp.prompt('请输入相应数据！');*/
/* //								return;*/
/* //							}else if(postData['get_way'] != 1) {*/
/* //								postData['account'] = $('#templateCon [field="account"]').val();*/
/* //								if(!postData['account'] || !postData['get_way']){*/
/* //									ykp.prompt('请输入相应数据！');*/
/* //									return;*/
/* //								}*/
/* //							}*/
/* 							postData['bill_number'] = $('#templateCon #bill_number').val();*/
/* 							ykp.doAjax({*/
/* 								url: '/api/api_comprehensive_bill/edit_bill',*/
/* 								method: 'post',*/
/* 								data: postData,*/
/* 								success: function(res) {*/
/* 									cs.close();*/
/* 									getList();*/
/* 								}*/
/* 							});*/
/* 						});*/
/* 					}*/
/* 				})*/
/* 				*/
/* //				console.log(postData);*/
/* 				*/
/* 			});*/
/* 		}*/
/* 			*/
/* 			*/
/* */
/* 			//详情  编辑   结算*/
/* 			$('.sdetail,.editInfo').unbind('click').click(function() {*/
/*                 var it = $(this);*/
/*                 showMark('.popup_new');*/
/*                 if(it.hasClass('sdetail')) {*/
/*                     $('#templateCon #imgBox .upbx' ).remove();*/
/*                 }else {*/
/*                     //getInfo();*/
/* 				}*/
/* */
/* 				var id = it.parents('tr').attr('data-id');*/
/* */
/* */
/* 				//上传图片*/
/*                 uploadsmallimg()*/
/* */
/* 				$('#templateCon .name1').hide();*/
/* 				$('#templateCon .name2').show();*/
/* 				$('#templateCon .order1').hide();*/
/* 				$('#templateCon .order2').show();*/
/* */
/* 				cs.timeplug();*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_comprehensive_bill/grid',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						page_size: page_size,*/
/* 						filter: 'zhm_comprehensive_bill.id=' + id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data.items[0];*/
/* */
/* 						//如果开票类型为专票，则显示注册地址、收款银行、收款账号、联系方式*/
/* 						if(data['zhm_comprehensive_bill.bill_type'] == '1') {*/
/* 							$('#templateCon .special').show();*/
/* 						}*/
/* 						var get_way = {*/
/* 							1:"现金",*/
/* 							2:"支付宝",*/
/* 							3:"微信",*/
/* 							4:"银行卡"*/
/* 						}*/
/* 						*/
/* 						for(var key in data) {*/
/* 							$('#templateBox ').find('[addfield]').not('hidden').each(function() {*/
/* 								*/
/* 								if($(this).attr('addfield') == 'social_credit_code') {*/
/* 									$(this).val(data['khm_customer.social_credit_code']);*/
/* 									return true;*/
/* 								}*/
/* 								if($(this).attr('addfield') == 'name') {*/
/* 									$(this).val(data['khm_customer.name']).attr('customer_id', data['zhm_comprehensive_bill.customer_id']);*/
/* 									return true;*/
/* 								}*/
/* 								*/
/* 								*/
/* 								if(key.replace(/zhm_comprehensive_bill./, '') == $(this).attr('addfield')) {*/
/* 									$(this).attr('addfield') == 'bill_date' ? $(this).val(cs.getNowTime(data[key])) : $(this).val(data[key]);*/
/* 									if($(this).attr('addfield') == 'name' || $(this).attr('addfield') == 'bill_type' || $(this).attr('addfield') == 'bill_header_type') {*/
/* 										$(this).find('option[value=' + data[key] + ']').attr('selected', true);*/
/* 									}*/
/* 								}*/
/* 								if(key.replace(/zhm_comprehensive_bill./, '') == $(this).attr('addfield')) {*/
/* 									if($(this).attr('addfield') == 'get_way' || $(this).attr('addfield') == 'account') {*/
/* 										$(this).text(get_way[data[key]]);*/
/* 										if(data[key] == 1) {*/
/* 											$('#templateBox .account').hide();*/
/* 										}*/
/* //										return true;*/
/* 									}*/
/* 								}*/
/* 							})*/
/* 						}*/
/* */
/* 						var arr = [];*/
/* 						if(data['zhm_comprehensive_bill.files']) {*/
/* 							JSON.parse(data['zhm_comprehensive_bill.files']).forEach(function(item) {*/
/* 								arr.push('<p style="padding-left: 2px;"><a href="' + item.url + '">' + item.name + '</a><i style="color: red; margin-left: 20px;cursor: pointer;" class="ace-icon fa fa-trash-o gdel gdel2"></i></p>')*/
/* 							})*/
/* 							$('#templateCon #fileBox').html(arr.join(','));*/
/* 							$('.gdel2').click(function() {*/
/* 								$(this).parent().remove();*/
/* 							})*/
/* 						}*/
/* */
/* 						//处理图片数据*/
/* 						var imgs = data['zhm_comprehensive_bill.imgs'].split(',');*/
/* 						// console.log(imgs);*/
/* 						//图片超过4张将新增图片的label删除*/
/* 						if(imgs.length > 4) {*/
/* 							// console.log(1)*/
/* 							$('#templateCon .upbx').remove();*/
/* 						}*/
/* 						var img_html = [];*/
/* 						for(var i in imgs) {*/
/* 							if(imgs[i]) {*/
/* 								img_html.push(*/
/* 									'<label style="float:left;margin-right:5px;width:auto;">' +*/
/* 									'<img class="image" src="' + imgs[i] + '" style="height:70px;width:70px;">' +*/
/* 									'</label>'*/
/* 								);*/
/* 							}*/
/* 						}*/
/* 						$('#templateCon #imgBox').prepend(img_html.join(''));*/
/* */
/* 						//查看详情*/
/* 						if(it.hasClass('sdetail')) {*/
/* 							$('#showBox .title').text('详情');*/
/*                             $('#templateCon [addfield]').prop('disabled', true);*/
/* 							$('#templateBox #other').show();*/
/* 							$('#templateCon .gdel2,#templateCon #uploadBox,#templateCon .sure_button').remove();*/
/* 							$('#templateCon .expenditrue_edit').show().find('input').prop('disabled', true);*/
/* 							$('#templateBox [addifed=clearing_time]').text(cs.getNowTime(data['clearing_info']['clearing_time'],true));*/
/* 							$('#templateBox [addifed=clearing]').text(employees[data['clearing_info']['clearing_name']]);*/
/* 						}*/
/* 						//编辑信息*/
/* 						if(it.hasClass('editInfo')) {*/
/* 							$('#showBox .title').text('编辑');*/
/* 							$('#templateCon [addfield="bill_number"]').prop('disabled', true);*/
/* 							cs.upload1({*/
/* 								el: "#templateBox #upload1",*/
/* 								ael: "#templateBox #fileBox"*/
/* 							})*/
/* */
/* 							//提交数据*/
/* 							submit(id);*/
/* 						}*/
/* 						//结算*/
/* 						if(it.hasClass('balance')) {*/
/* 							$('#showBox .title').text('开票');*/
/* 							$('#templateCon [addfield],#templateCon .uploadFiles').not('[addfield="bill_number"]').prop('disabled', true);*/
/* */
/* 							//提交数据*/
/* 							submit(id);*/
/* 						}*/
/*                         uploadsmallimg();*/
/* 					}*/
/* 				})*/
/* 			})*/
/* */
/* 			//点击 审批 or  驳回 or  撤销*/
/* 			$("#datalist tr").find('.sp').unbind('click').click(function() {*/
/* 				var status = $(this).attr('data-status');*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				changeStatus(status, id);*/
/* 			});*/
/* 		}*/
/* */
/* 		$('#changePageNum').change(function() {*/
/* 			page_size = $(this).val();*/
/* 			ykp.setCookie('page_size',page_size);*/
/* 			getList(1);*/
/* 		})*/
/* 		//上传图片*/
/*         uploadsmallimg()*/
/* */
/* 		function changeStatus(status, id) {*/
/* 			var data = {*/
/* 				url: '/api/api_comprehensive_bill/auth_bill',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					id: id,*/
/* 					status: status*/
/* 				}*/
/* 			}*/
/* 			if(status == 1) {*/
/* 				$('#feedBack').find('input').val('');*/
/* 				$('#feedBack').show();*/
/* 				$('#feedBack .hold').unbind('click').click(function() {*/
/* 					var approve_reply = $('#feedBack').find('input').val().trim();*/
/* 					if(approve_reply == '') {*/
/* 						ykp.prompt('不能为空！');*/
/* 						return false;*/
/* 					}*/
/* 					data.data.auth_remark = approve_reply;*/
/* 					setStatus(data);*/
/* 					$('.close_label').parents('.label_popup').fadeOut();*/
/* 				})*/
/* 				cs.closePop();*/
/* 			} else if(status == 0) {*/
/* 						layui.use('layer', function() {*/
/* 						var layer = layui.layer;*/
/* 						layer.confirm('确认撤销审批？', function(flag) {*/
/* 							if(flag) {*/
/* 						layer.closeAll();*/
/* 						setStatus(data);*/
/* 							}*/
/* 						});*/
/* 					})*/
/* //				bootbox.confirm('确认撤销审批？', function(flag) {*/
/* //					if(flag) {*/
/* //						setStatus(data);*/
/* //					}*/
/* //				})*/
/* 			} else {*/
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
/* 		//自定义table*/
/* 		cs.custorm_check('#dynamic-table', '#datalist', true);*/
/* */
/* 		//开票类型选择专票，则显示相应信息，否则隐藏相应信息*/
/* 		function changeBillType() {*/
/* 			$('#templateCon [addfield="bill_type"]').unbind('change').change(function() {*/
/* 				if($(this).val() == '1') {*/
/* 					$('#templateCon .special').show();*/
/* 				} else*/
/* 					$('#templateCon .special').hide();*/
/* 			});*/
/* 		}*/
/* */
/* 		//添加开票*/
/* 		$('#add').click(function() {*/
/* 			showMark('.popup_new1');*/
/* 			$('#showBox .title').text('添加');*/
/* 			$('#templateCon [addfield="bill_number"]').prop('disabled', true);*/
/* */
/* 			//开票类型选择专票，则显示相应信息，否则隐藏相应信息*/
/* 			changeBillType();*/
/* */
/* 			//上传图片*/
/*             uploadsmallimg()*/
/* */
/*             $('#templateCon [addfield="order_number"]').unbind('change').change(function() {*/
/*                  if($(this).val() != '') {*/
/*                      var c_id = $(this).find('option:selected').attr("contract_id");*/
/*                        ykp.doAjax({*/
/*                            url: '/api/api_comprehensive_bill/get_contract_money',*/
/*                            method: 'post',*/
/*                            data: {*/
/*                                id:c_id*/
/*                            },*/
/*                            success: function(res) {*/
/*                               var data =  res.data;*/
/*                                console.log(data);*/
/*                                for(var v in  data) {*/
/*                                    $('#templateBox').find('input[title]').each(function (i, e) {*/
/*                                        if($(this).attr("title") == v){*/
/* 										    $(this).val(data[v])*/
/* 										}*/
/*                                    })*/
/*                                }*/
/*                            }*/
/*                        })*/
/* */
/* */
/*                      $('#templateCon .disinfo').show();*/
/*                  } else*/
/*                      $('#templateCon .disinfo').hide();*/
/*             });*/
/* */
/* 			$('#templateCon .name1').show();*/
/* 			$('#templateCon .name2').hide();*/
/* 			$('#templateCon .order1').show();*/
/* 			$('#templateCon .order2').hide();*/
/* 			cs.timeplug();*/
/* 			getInfo();*/
/* 			cs.upload1({*/
/* 				el: "#templateBox #upload1",*/
/* 				ael: "#templateBox #fileBox"*/
/* 			})*/
/* 			submit();*/
/* */
/* 		});*/
/* */
/* 		function submit(id) {*/
/* 			$('#templateBox .sure_button').click(function() {*/
/* 				var data = {};*/
/* */
/* 				var status = true;*/
/* 				$('#templateBox').find('[addfield]').not(':hidden').each(function(i) {*/
/* 					//判断是否为空*/
/* 					if($(this).hasClass('required') || $(this).attr('addfield') == 'bill_number') {*/
/* 						if($(this).val() == undefined || $(this).val().trim() == '') {*/
/* 							if($(this).attr('addfield') == 'bill_number' && $(this).prop('disabled')) {*/
/* 								return true;*/
/* 							}*/
/* 							ykp.prompt($(this).attr('message'));*/
/* 							status = false;*/
/* 							return false;*/
/* 						}*/
/* 					}*/
/* */
/* 					if($(this).attr('addfield') == 'name' && $(this).hasClass('name2')) {*/
/* 						data['customer_id'] = $(this).attr('customer_id');*/
/* 					}*/
/* 					if($(this).attr('addfield') == 'name' && $(this).hasClass('name1')) {*/
/* 						data['customer_id'] = $(this).select2('data')[0].id;*/
/* 						data['name'] = $(this).select2('data')[0]['text'];*/
/* 						return true;*/
/* 					}*/
/* 					data[$(this).attr('addfield')] = $(this).attr('addfield') == 'bill_date' ? parseInt(new Date($(this).val()) / 1000) : $(this).val();*/
/* 				})*/
/* */
/* 				//图片数据*/
/* 				var img_data = [];*/
/* 				$('#templateCon img').each(function(i, e) {*/
/* 					img_data.push($(this).attr('src'));*/
/* 				});*/
/* 				data['imgs'] = img_data.join(',');*/
/* */
/* 				if(id) {*/
/* 					data.id = id*/
/* 				}*/
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
/* 				// console.log(data);*/
/* 				// return;*/
/* */
/* 				if(status) {*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_comprehensive_bill/add_edit_bill',*/
/* 						method: 'post',*/
/* 						data: data,*/
/* 						success: function(res) {*/
/* 							id ? ykp.prompt('编辑成功') : ykp.prompt('添加成功');*/
/* 							getList(1);*/
/* 							cs.close();*/
/* 						}*/
/* 					})*/
/* 				}*/
/* */
/* 			})*/
/* */
/* 		}*/
/* */
/* 		//获取所有公司信息*/
/* 		function getInfo() {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_comprehensive_bill/check_customer',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					type: 1*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					var people = [];*/
/* 					$('#templateBox .name1').select2({*/
/* 						allowClear: true*/
/* 					})*/
/* 					for(var i in data) {*/
/* 						people.push('<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>')*/
/* 					}*/
/* 					$('#templateBox .name1').append(people.join(''));*/
/* */
/* 					//切换公司获取相应的订单编号*/
/* 					getCodeNum();*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//切换公司获取相应的订单编号*/
/* 		function getCodeNum() {*/
/* 			$('#templateCon .name1').on('select2:close', function(e) {*/
/* 				$('#templateCon .order1').find('option').not(':first').remove();*/
/* 				$('#templateCon [addfield="social_credit_code"]').val('');*/
/* 				var id = $(this).select2('data')[0].id;*/
/* 				if(id != '') {*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_contract/f7',*/
/* 						method: 'post',*/
/* 						data: {*/
/* 							filter: 'htm_contract.is_del <> 1 and  htm_contract.customer_id = ' + id,*/
/* 							select: 'htm_contract.contract_code,khm_customer.social_credit_code,htm_contract.id'*/
/* 						},*/
/* 						success: function(res) {*/
/* 							var data = res.data;*/
/*                             console.log(data);*/
/*                             var order_html = [];*/
/* 							for(var i in data) {*/
/* 								order_html.push('<option contract_id="' + data[i]['id'] + '" value="' + data[i]['contract_code'] + '">' + data[i]['contract_code'] + '</option>');*/
/* 							}*/
/* 							if(data.length > 0) {*/
/* 								if(data[0]['social_credit_code']) {*/
/* 									$('#templateCon [addfield="social_credit_code"]').val(data[0]['social_credit_code']);*/
/* 									$('#templateCon [addfield="social_credit_code"]').prop('disabled',true);*/
/* 								}else {*/
/* 									$('#templateCon [addfield="social_credit_code"]').prop('disabled',false);*/
/* 								}*/
/* 							}*/
/* */
/* 							$('#templateCon .order1').append(order_html.join(''));*/
/* 						}*/
/* 					});*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	});*/
/* </script>*/
