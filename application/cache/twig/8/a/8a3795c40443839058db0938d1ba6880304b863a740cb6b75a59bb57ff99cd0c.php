<?php

/* admin/financialManagement/lackOfrecord.html */
class __TwigTemplate_8b714c05a6c3e11d8801ecb5a17b751e32c076dbb89e8e5374a9e521e89c8f84 extends Twig_Template
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
    #templateBox {
        padding-top: 0;
    }
    
    #templateBox .tab_kind .active {
        background: #e1e7ed;
    }

    #templateBox .tab_kind a {
        text-decoration: none;
    }

    #templateBox td {
        border-top: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
    }

    #templateBox .unite-label {
        width: 120px;
        text-align: right;
    }

    #dynamic-table1 td, #dynamic-table1 th {
        border: 1px solid #ddd;
    }

    #dynamic-table1 {
        border-collapse: collapse;
    }
    #height_search1 label,#height_search label{
        width: 88px;
        text-align: right;
        font-weight: normal;
    }
     #height_search1,#height_searc{
        padding:20px 0;
     }
     #heightsearch1 input,#height_search1 input{
        width: 180px;
    }
    #templateCon label{
        width:72px;
    }
    .modal-dialog{
    \tmargin-top:20%;
    \tmargin-left: 46%;
    }
</style>
<div class=\"widget-main\">
    <div class=\"row\">
        <div class=\"kind\">
            <ul>
                <li class=\"_billings now\">记账订单欠款</li>
                <li class=\"_others\">其他订单欠款</li>
            </ul>
            <!-- <div id=\"tspage\" style=\"border: 0px red solid; width: 480px;height: 30px;display:none;\"><a id=\"go_\" href=\"javascript:void(0)\" >有部分其他欠款数据,点击前往</a><a href=\"javascript:;\" class=\"close_ts\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a></div> -->
        </div>
            
        <div class=\"tab-pane\" id=\"tab-pane1\">
            <div class=\"row\" id=\"topTool\" style=\"position:relative;\" >
                <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                    <input type=\"text\" pts=0 sear=\"khm_customer.name\" placeholder=\"企业名称\"/>
                </div>
                <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                    <input type=\"text\" pts=0 sear=\"khm_customer.customer_num\" placeholder=\"客户编码\"/>
                </div>
                 <!-- <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                    <input type=\"text\" pts=0 sear=\"jzm_service_info.time\" placeholder=\"请输入年份\"/>
                </div> -->
                <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                    <button class=\"_search btn btn-info btn-sm\" title=\"搜索\">
                        <i class=\"fa fa-search\"></i>
                    </button>
                </div>
                <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                    <button id=\"heightsearch\"  title=\"高级搜索\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
                        <i class=\"fa fa-filter\"></i>
                    </button>
                </div>
                <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                    <button  type=\"button\" title=\"刷新\" class=\"flush btn btn-info btn-sm\" style=\"background-color: #32CD32 !important;\">
                        <i class=\"fa fa-refresh\"></i>
                    </button>
                </div>
                <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px; margin-bottom:5px;\">
\t\t\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:382px;height: 36px\">
\t\t\t\t\t\t<a href=\"#\" class=\"\" style=\"line-height:32px;
\t\t\t\t\t\tbackground: #E6E6E6;\" data-kind=\"0\"> 发送短信 </a>
\t\t\t\t\t\t<a href=\"#\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"账期完成\"> 帐期完成</a>
\t\t\t\t\t\t<a href=\"#\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"暂停服务通知\"> 暂停服务通知</a>
\t\t\t\t\t\t<a href=\"#\" class=\"myFilter\" style=\"line-height:32px\" data-kind=\"严重欠费通知\"> 严重欠费通知 </a>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div id=\"heightsearch1\" class=\"col-sx-12\" style=\"margin-top:30px;width:100%;position: absolute; background: #fff;padding: 20px 0px; display: none;z-index:1042;\">
                    <div class=\"row\">
                        <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                            <label>年份</label>
                            <select>
                                <option> = </option>
                                <option> > </option>
                                <option> &lt; </option>
                            </select>
                            <select style=\"width: 180px\" gjs=5 sear=\"year\" data-year=\"true\"></select>
                        </div>
                        <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                            <label>月份</label>
                            <select>
                                <option> = </option>
                                <option> > </option>
                                <option> &lt; </option>
                            </select>
                            <select gjs=5 sear=\"month\" style=\"width:180px;\">
                                <option value=\"\"> 请选择 </option>
                                <option value=\"01\">1月</option>
                                <option value=\"02\">2月</option>
                                <option value=\"03\">3月</option>
                                <option value=\"04\">4月</option>
                                <option value=\"05\">5月</option>
                                <option value=\"06\">6月</option>
                                <option value=\"07\">7月</option>
                                <option value=\"08\">8月</option>
                                <option value=\"09\">9月</option>
                                <option value=\"10\">10月</option>
                                <option value=\"11\">11月</option>
                                <option value=\"12\">12月</option>
                            </select>
                        </div>
                        <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                            <label>企业名称</label>
                            <select>
                                <option> = </option>
                            </select>
                            <input type=\"text\" gjs=0 sear=\"khm_customer.name\" />
                        </div>
                        <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                            <label>客户编码</label>
                            <select>
                                <option> = </option>
                            </select>
                            <input type=\"text\" gjs=0 sear=\"khm_customer.customer_num\">
                        </div>
                        <div class=\"col-sx-4\" style=\"float:left; margin-bottom:5px;\">
                            <label>仓位</label>
                            <select>
                                <option> = </option>
                            </select>
                             <select gjs=6 sear=\"jzm_service_info.customer_id\" class=\"cw\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t</select>
                          <!--  <input type=\"text\" gjs=6 sear=\"jzm_service_info.customer_id \">-->
                        </div>
                         <div class=\"col-sx-4\" style=\"float:left; margin-bottom:5px;\">
                            <label>订单状态</label>
                            <select>
                                <option> = </option>
                            </select>
                             <select gjs=0 sear=\"htm_contract.status\"  data-type=\"gj\" style=\"width:180px;\">
                             \t<option value=\"\"> 请选择</option>
                             \t<option value=\"0\"> 未激活</option>
                             \t<option value=\"1\"> 已激活</option>
                             \t<option value=\"2\"> 已挂起</option>
                             \t<option value=\"3\"> 已结束</option>
                             \t<option value=\"4\"> 已作废</option>
\t\t\t\t\t\t\t</select>
                          <!--  <input type=\"text\" gjs=6 sear=\"jzm_service_info.customer_id \">-->
                        </div>
                        <div class=\"col-sx-4\" style=\"float:left; margin-bottom:5px;\">
                            <label>订单号</label>
                            <select>
                                <option> = </option>
                            </select>
                            <input type=\"text\" gjs=0 sear=\"htm_contract.contract_code\" />
                            <!--  <input type=\"text\" gjs=6 sear=\"jzm_service_info.customer_id \">-->
                        </div>
                        <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                            <label>订单期限 </label>
                            <select>
                                <option> = </option>
                                <option> > </option>
                                <option> &lt; </option>
                            </select>
                             <div class=\"input-group\"  style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\"  data-status=\"rangtime\" gjs=0 sear=\"htm_contract.start_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t</div>
                            <!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
                                <input class=\"date-timepicker1\" data-type=\"gj\" data-status=\"time\" gjs=0 sear=\"htm_contract.start_time\" style=\"height: 30px; width: 150px;padding:5px;\">
                                <span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                                        <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                    </span>
                            </div>-->
                        </div>
                        <!--<div class=\"col-sx-4\" style=\"float:left; margin-bottom:5px;\">
                            <label>欠费月份</label>
                            <select>
                                <option> = </option>
                                <option> > </option>
                                <option> &lt; </option>
                            </select>
                            <input type=\"text\" gjs=0 sear=\"jzm_service_info.overdue\" data-type=\"gj\">
                        </div>-->
                        <!--<div class=\"col-sx-4\" style=\"float:left; margin-bottom:5px;\">
                            <label>欠服务费</label>
                            <select>
                                <option> = </option>
                                <option> > </option>
                                <option> &lt; </option>
                            </select>
                            <input type=\"text\" gjs=8>
                        </div>-->
                        <div class=\"col-sx-4\" style=\"float:left; margin-bottom:5px;\">
                            <label>欠账本费</label>
                            <select>
                                <option> = </option>
                                <option> > </option>
                                <option> &lt; </option>
                            </select>
                            <input type=\"text\" gjs=11 sear=\"htm_contract.get_account_book\" data-type=\"gj\">
                        </div>
                        <div class=\"col-sx-4\" style=\"float:left; margin-bottom:5px;\">
                            <label>收款周期</label>
                            <select>
                                <option> = </option>
                            </select>
                            <select style=\"width: 180px;\" data-type=\"gj\" gjs=0 sear=\"htm_contract.get_cycle\">
                                 <option value=\"\">请选择</option>
                                 <option value=\"1\">每月</option>
                                 <option value=\"3\">季度</option>
                                 <option value=\"6\">半年付</option>
                                 <option value=\"12\">年付</option>
                            </select>
                        </div>
                        <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                            <label>收款状态</label>
                            <select>
                                <option> = </option>
                            </select>
                            <select gjs=1 sear=\"is_get_money\" style=\"width:180px;\">
                                <option value=\"\"> 请选择 </option>
                                <option value=\"0\">未完成</option>
                                <option value=\"1\">已放弃</option>
                                <option value=\"2\">已完成</option>
                            </select>
                        </div>
                        <!--<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                            <label>审批状态</label>
                            <select>
                                <option> = </option>
                            </select>
                            <select gjs=0 data-type=\"gj\" sear=\"jzm_service_info.money_status\" style=\"width:180px;\">
                                <option value=\"\"> 请选择 </option>
\t                            <option value=\"0\"> 未开始</option>
\t\t\t\t\t\t\t\t<option value=\"1\"> 待审批</option>
\t\t\t\t\t\t\t\t<option value=\"2\"> 已通过</option>
\t\t\t\t\t\t\t\t<option value=\"3\"> 未通过</option>
                            </select>
                        </div>-->
                        <div class=\"col-sx-4\" style=\"float:left; margin-bottom:5px;\">
                            <label>欠服务费</label>
                            <select>
                                <option> = </option>
                                <option> > </option>
                                <option> &lt; </option>
                            </select>
                            <input type=\"text\" gjs=11 sear=\"yq_money\" data-type=\"gj\">
                        </div>
                        <!-- <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                            <label>激活时间</label>
                            <select>
                                <option> = </option>
                                <option> > </option>
                                <option> &lt; </option>
                            </select>
                            <div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
                                <input id=\"date-timepicker1\" data-type=\"gj\" data-status=\"time\" gjs=0 sear=\"htm_contract.activate_time\" class=\"form-control\" style=\"height: 30px; width: 150pxpadding:5px;;\">
                                <span class=\"input-group-addon\" style=\"width:30px;\">
                                        <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                    </span>
                            </div>
                        </div>  -->
                        <div style=\"text-align:center;clear:both;padding-top:10px; \">
                            <button type=\"button\" id=\"search1\" class=\"_search1 btn btn-info btn-sm\" style=\"width:180px;\">
                                查询
                            </button>
                             <button type=\"button\" id=\"rest\" class=\" rest btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t                       重置
\t\t\t\t\t\t\t\t                    </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"custom_table\">
                <table id=\"dynamic-table1\">
                    <thead>
                    <tr class=\"thColor\">
                    \t<th class=\"center\">
\t\t\t\t\t\t\t<label class=\"pos-rel\">
                               <input type=\"checkbox\" class=\"ace\" onclick=\"cs.checkAll(this.checked)\">
                               <span class=\"lbl\"></span>
                           </label>
\t\t\t\t\t\t</th>
                        <th>操作</th>
                        <th data-num=\"1\">企业名称</th>
                        <th data-num=\"2\">客户编码</th>
                        <th data-num=\"3\">仓位编码</th>
                        <th data-num=\"22\">订单状态</th>
                        <th data-num=\"23\">订单号</th>
                        <th data-num=\"4\">订单期限</th>
                        <th data-num=\"5\">欠费月份</th>
                        <th data-num=\"6\" style=\"text-align: right !important;\">欠服务费</th>
                        <th data-num=\"7\" style=\"text-align: right !important;\">欠账本费</th>
                        <th data-num=\"8\">收款周期</th>
                        <th data-num=\"9\">截止月份</th>
                        <th data-num=\"10\">收款状态</th>
                        <th data-num=\"11\" class=\"month\" data-month></th>
                        <th data-num=\"12\" class=\"month\" data-month></th>
                        <th data-num=\"13\" class=\"month\" data-month></th>
                        <th data-num=\"14\" class=\"month\" data-month></th>
                        <th data-num=\"15\" class=\"month\" data-month></th>
                        <th data-num=\"16\" class=\"month\" data-month></th>
                        <th data-num=\"17\" class=\"month\" data-month></th>
                        <th data-num=\"18\" class=\"month\" data-month></th>
                        <th data-num=\"19\" class=\"month\" data-month></th>
                        <th data-num=\"20\" class=\"month\" data-month></th>
                        <th data-num=\"21\" class=\"month\" data-month></th>
                        <th data-num=\"22\" class=\"month\" data-month></th>
                    </tr>
                    </thead>
                    <tbody id=\"dataList\">
                    </tbody>
                </table>
            </div>
            <div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
                <div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" class=\"_num\"></div>
                <!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
                <div class=\"pageBar pagination\"></div>
                <div align=\"right\" style=\"float: right;  width: 10%;\">
                    <select style=\"width: 100px;\" class=\"changePageNum\">
                        <option value=\"10\">每页10条</option>
                        <option value=\"20\">每页20条</option>
                        <option value=\"50\">每页50条</option>
                        <option value=\"100\">每页100条</option>
                        <option value=\"200\">每页200条</option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class=\"tab-pane\" id=\"tab-pane2\" style=\"display:none;\">
            <div class=\"row\" style=\"position:relative;\" id=\"topTool\">
                <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                    <input type=\"text\" pts=0 sear=\"khm_customer.name\" placeholder=\"企业名称\"/>
                </div>
                <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                    <select style=\"width: 180px\"  pts=\"4\" sear=\"marketing_id\" table=\"htm_contract_marketing\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
                         <option value=\"\">业务员</option>
                     </select>
                </div>
                <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                    <select style=\"width: 180px\" pts=\"4\" sear=\"one_fuze\" table=\"htm_task\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
                       <option value=\"\">负责人</option>
                   </select>
                </div>
                <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                    <button class=\"_search btn btn-info btn-sm\">
                        <i class=\"fa fa-search\"></i>
                    </button>
                </div>
                <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                    <button id=\"height_search\" class=\" btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
                        <i class=\"fa fa-filter\"></i>
                    </button>
                </div>
                <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                    <button type=\"button\" class=\"flush btn btn-info btn-sm\" style=\"background-color: #32CD32 !important;\">
                        <i class=\"fa fa-refresh\"></i>
                    </button>
                </div>
                <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px; margin-bottom:5px;\">
\t\t\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:382px;height: 36px\">
\t\t\t\t\t\t<a href=\"#\" class=\"\" style=\"line-height:32px;
\t\t\t\t\t\tbackground: #E6E6E6;\" data-kind=\"0\"> 发送短信 </a>
\t\t\t\t\t\t<a href=\"#\" class=\"myFilter2\" style=\"line-height:32px\" data-kind=\"账期完成\"> 帐期完成</a>
\t\t\t\t\t\t<a href=\"#\" class=\"myFilter2\" style=\"line-height:32px\" data-kind=\"暂停服务通知\"> 暂停服务通知</a>
\t\t\t\t\t\t<a href=\"#\" class=\"myFilter2\" style=\"line-height:32px\" data-kind=\"严重欠费通知\"> 严重欠费通知 </a>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div id=\"height_search1\" style=\"margin-top:30px;width:100%;position: absolute; background: #fff;display: none;z-index:1042;\">
                    <div class=\"row\">
                        <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                            <label>企业名称</label>
                            <select>
                                <option> = </option>
                            </select>
                            <input type=\"text\" gjs=0 sear=\"khm_customer.name\" />
                        </div>
                        <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                            <label>业务员</label>
                            <select>
                                <option> = </option>
                            </select>
                           <select style=\"width:180px\" gjs=\"1\" sear=\"marketing_id\" table=\"htm_contract_marketing\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
                               <option value=\"\"> 请选择 </option>
                           </select>
                        </div>
                        <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                            <label>负责人</label>
                            <select>
                                <option> = </option>
                            </select>
                           <select style=\"width: 180px\" gjs=\"1\" sear=\"one_fuze\" table=\"htm_task\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
                               <option value=\"\"> 请选择 </option>
                           </select>
                        </div>
                         <div class=\"col-sx-4\" style=\"float:left; margin-bottom:5px;\">
                            <label>订单状态</label>
                            <select>
                                <option> = </option>
                            </select>
                             <select gjs=0 sear=\"htm_contract.status\"  data-type=\"gj\" style=\"width:180px;\">
                             \t<option value=\"\"> 请选择</option>
                             \t<option value=\"0\"> 未激活</option>
                             \t<option value=\"1\"> 已激活</option>
                             \t<option value=\"2\"> 已挂起</option>
                             \t<option value=\"3\"> 已结束</option>
                             \t<option value=\"4\"> 已作废</option>
\t\t\t\t\t\t\t</select>
                          <!--  <input type=\"text\" gjs=6 sear=\"jzm_service_info.customer_id \">-->
                        </div>
                         <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                            <label>订单期限 </label>
                            <select>
                                <option> = </option>
                                <option> > </option>
                                <option> &lt; </option>
                            </select>
                             <div class=\"input-group\"  style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\"  data-status=\"rangtime\" gjs=0 sear=\"htm_contract.start_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t</div>
                            <!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
                                <input class=\"date-timepicker1\" data-type=\"gj\" data-status=\"time\" gjs=0 sear=\"htm_contract.start_time\" class=\"form-control\" style=\"height: 30px; width: 150px;padding:5px;\">
                                <span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                                        <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                    </span>
                            </div>-->
                        </div>
                        <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                            <label> 服务项目 </label>
                            <select>
                                <option> = </option>
                            </select>
                            <select style=\"margin: 12px !important;width: 180px\" class=\"advandced-search3 select2-hidden-accessible\" tabindex=\"-1\" gjs=\"1\" sear=\"product_id\" table=\"htm_task\" aria-hidden=\"true\" data-type=\"gj\" tabindex=\"-1\">
                                <option value=\"\">请选择</option>
                            </select>
                        </div>
                       
                        <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                            <label>收款状态</label>
                            <select>
                                <option> = </option>
                            </select>
                            <select gjs=1 sear=\"is_get_money\" style=\"width:180px;\">
                                <option value=\"\"> 请选择 </option>
                                <option value=\"0\">未完成</option>
                                <option value=\"1\">已放弃</option>
                                <option value=\"2\">已完成</option>
                            </select>
                        </div>
                        <!-- <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                            <label>合同状态</label>
                            <select>
                                <option> = </option>
                            </select>
                            <select gjs=0 sear=\"htm_contract.status\" data-type=\"gj\" style=\"width:180px;\">
                                <option value=\"\"> 请选择 </option>
                                <option value=\"0\">未激活</option>
                                <option value=\"1\">已激活</option>
                                <option value=\"2\">已挂起</option>
                                <option value=\"3\">已结束</option>
                                <option value=\"4\">已作废</option>
                            </select>
                        </div> -->
                        <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                            <label>合同金额</label>
                            <select>
                                <option> = </option>
                                <option> > </option>
                                <option> &lt; </option>
                            </select>
                            <input type=\"text\" gjs=0 sear=\"htm_contract.discount_total\" data-type=\"gj\">
                        </div>
                        <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                            <label>已收款金额</label>
                            <select>
                                <option> = </option>
                                <option> > </option>
                                <option> &lt; </option>
                            </select>
                            <input type=\"text\" gjs=0 sear=\"htm_contract.get_money\" data-type=\"gj\">
                        </div>
                        <div class=\"col-sx-4\" style=\"float:left; margin-bottom:5px;\">
                            <label>欠费金额</label>
                            <select>
                                <option> = </option>
                                <option> > </option>
                                <option> &lt; </option>
                            </select>
                            <input type=\"text\" gjs=8>
                        </div>
                         <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                            <label>订单号</label>
                            <select>
                                <option> = </option>
                            </select>
                            <input type=\"text\" gjs=0 sear=\"htm_contract.contract_code\">
                        </div>
                         
                        <!-- <div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
                            <label>合同时间</label>
                            <select>
                                <option> = </option>
                                <option> > </option>
                                <option> &lt; </option>
                            </select>
                            <div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
                                <input class=\"date-timepicker1\" data-type=\"gj\" data-status=\"time\" gjs=0 sear=\"htm_contract.used_time\" class=\"form-control\" style=\"height: 30px; width: 150px;\">
                                <span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                                        <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                    </span>
                            </div>
                        </div> -->
                        <div style=\"text-align:center;clear:both;padding-top:10px; \">
                            <button type=\"button\" id=\"search1\" class=\"_search1 btn btn-info btn-sm\" style=\"width:180px;\">
                                查询
                            </button>
                             <button type=\"button\" id=\"rest1\" class=\"rest btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t                       重置
\t\t\t\t\t\t\t\t                    </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div></div> -->
            <div class=\"widget-body custom_table\">
                <table width=\"100%\" id=\"dynamic-table2\">
                    <thead>
                    <tr class=\"thColor\">
                       <th class=\"center\">
\t\t\t\t\t\t\t<label class=\"pos-rel\">
                                   <input type=\"checkbox\" class=\"ace\" onclick=\"cs.checkAll(this.checked)\">
                                   <span class=\"lbl\"></span>
                               </label>
\t\t\t\t\t\t</th>
                        <th>操作</th>
                        <th data-num=\"1\">企业名称</th>
                        <th data-num=\"2\">业务员</th>
                        <th data-num=\"3\">负责人</th>
                        <th data-num=\"4\">服务项目</th>
                        <th data-num=\"11\">订单状态</th>
                        <th data-num=\"5\">合同时间</th>
                        <th data-num=\"6\">收款状态</th>
                        <th data-num=\"7\">合同金额</th>
                        <th data-num=\"8\" style=\"text-align: right !important;\">已收款金额</th>
                        <th data-num=\"9\" style=\"text-align: right !important;\">欠款金额</th>
                        <th data-num=\"10\">订单号</th>
                    </tr>
                    </thead>
                    <tbody id=\"datalist2\">
                        <!-- <tr>
                            <td>
                                <label class=\"pos-rel\">
                                    <a href=\"#\" class=\"_edit\"><i class=\"red2\"></i>编辑</a>
                                    <a href=\"#\" class=\"_gathering\"><i class=\"red2\"></i>收款</a>
                                </label>
                            </td>
                            <td data-num=\"1\">牧牛网络</td>
                            <td data-num=\"2\">于颖</td>
                            <td data-num=\"3\">于颖</td>
                            <td data-num=\"4\">注册商标</td>
                            <td data-num=\"5\">无</td>
                            <td data-num=\"6\">2017/8/14</td>
                            <td data-num=\"7\">执行中</td>
                            <td data-num=\"8\">1000</td>
                            <td data-num=\"9\">500</td>
                            <td data-num=\"10\">500</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
            <div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
                <div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" class=\"_num\"></div>
                <!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
                <div  class=\"pageBar pagination\"></div>
                <div align=\"right\" style=\"float: right;  width: 10%;\">
                    <select style=\"width: 100px;\" class=\"changePageNum\">
                        <option value=\"10\">每页10条</option>
                        <option value=\"20\">每页20条</option>
                        <option value=\"50\">每页50条</option>
                        <option value=\"100\">每页100条</option>
                        <option value=\"200\">每页200条</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class=\"poppup_edit\" style=\"display:none;\">
        <div class=\"widget-header widget-header-small\" style=\"padding-left:0;\">
            <span style=\"font-size:16px;\" class=\"title\">编辑</span>
        </div>
        <div style=\"margin-top:15px;\">
            <label>已收款金额： </label>
            <input field=\"htm_contract.amount_beceived\">
            <label>合同金额： </label>
            <input disabled class=\"unrequired\">
        </div>
        <div style=\"margin-top:15px;\">
            <label>欠款金额： </label>
            <input disabled field=\"htm_contract.outstanding_amount\">
        </div>
        <div style=\"margin-top:15px;\">
            <label style=\"float:left;\">费用说明： </label>
           <textarea style=\"width:calc(100% - 77px);margin-left:5px;resize:none;\" field=\"htm_contract.remark\">
               
           </textarea>
        </div>
        <div style=\"text-align:right;margin-top:15px;\">
                <span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
                <button class=\"sure_button add\">
                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                        保存
                    </button>
            </div>
    </div>

    <div class=\"popup_getMoney\" style=\"display:none\">
        <div class=\"row\">
            <form class=\"item_form\" role=\"form\">
                <div class=\"form_data\">
                    <label> 企业名称： </label>
                    <input type=\"text\" disabled class=\"company_name\"/>
                    <label> 订单： </label>
                    <input type=\"text\" class=\"contract_code\" field=\"contract_id\" disabled/>
                </div>
                <div class=\"form_data\" style=\"\">
                   <label class=\"gathering_month\"> 月份： </label>
                    <input type=\"text\" style=\"width:79px\" disabled class=\"begin gathering_month\">
                    <span class=\"gathering_month\">至</span>
                    <select  style=\"width:79px\" class=\"end gathering_month\"></select>
                     <label> 优惠： </label>
                    <input type=\"text\" field=\"discount_money\" value=\"\" placeholder=\"0\">
\t\t\t\t\t<!-- <label> 时间： </label>
                    <div class=\"input-group\" style=\"display:inline-flex;\">
                        <input id=\"date-timepicker1\" type=\"text\" class=\"form-control\" field=\"get_time\" style=\"width:150px;height:30px;\">
                        <span class=\"input-group-addon\" style=\"width: 30px;height: 30px;\">
                            <i class=\"fa fa-clock-o bigger-110\" style=\"position: relative;top: 2px;right: 2px;\"></i>
                        </span>
                    </div> -->
                </div>
                <div class=\"form_data\">
                    <label> 应收服务费： </label>
                    <input type=\"text\" disabled field=\"cound_money\" value=\"0.00\">
                    <label> 实收服务费： </label>
                    <input type=\"text\" field=\"get_money\" value=\"0.00\" placeholder=\"0.00\">
                </div>
                <div class=\"form_data account_book\" style=\"display: block\">
                    <label> 欠账本费： </label>
                     <input type=\"text\" disabled=\"\" field=\"account_book\" value=\"0.00\" get-way=\"\">
                      <label> 实收账本费： </label>
                     <input type=\"text\"  field=\"get_account_book\" value=\"\" get-way=\"\" placeholder=\"0.00\">
                </div>
               
                <div class=\"form_data\">
                    <label> 收款方式： </label>
                    <select field=\"get_way\">
                        <option value=\"\">请选择</option>
                        <option value=\"1\"> 现金 </option>
                        <option value=\"2\"> 支付宝 </option>
                        <option value=\"3\"> 微信 </option>
                        <option value=\"4\"> 银行卡 </option>
                    </select>
                    <label> 收款账户： </label>
                    <select class=\"receivable_account\" style=\"width:180px;\" field=\"account\">
                        <option value=\"\">
                            请选择
                        </option>
                    </select>
                </div>
                <div class=\"form_data\">
                    <label> 收款人： </label>
                    <select class=\"employee\" field=\"receiver\">
                        <option value=\"\">
                            请选择员工
                        </option>
                    </select>
                     <label> 收款日期： </label>
                    <div class=\"input-group\" style=\"display:inline-flex;\">
                        <input id=\"date-timepicker1\" type=\"text\" class=\"form-control\" field=\"get_time\" style=\"width:150px;height:30px;\">
                        <span class=\"input-group-addon\" style=\"width: 30px;height: 30px;\">
                            <i class=\"fa fa-clock-o bigger-110\" style=\"position: relative;top: 2px;right: 2px;\"></i>
                        </span>
                    </div>
                </div>
                <!--<div class=\"form_data\">
                   
                   
                </div>-->
                
                <div class=\"form_data\">
                    <label style=\"float:left;\"> 收款备注： </label>
                    <textarea style=\"width:calc(100% - 77px);margin-left:5px;padding:5px;\" field=\"remark\"></textarea>
                </div>
                    
                <div class=\"form_data\">
                <label style=\"float:left;margin-right:5px;\"> 凭证上传： </label>
                \t
                       <!--<label class=\"\" style=\"border:1px solid #000;line-height:68px;cursor: pointer; text-align: center;\">
                            <img style=\"width:68px;display:none; height:68px;margin-right:5px;\" src=\"\">
                            <i class=\"fa fa-plus fa-2x\" aria-hidden=\"true\" style=\"position: relative;top: 5px;\"></i>
                            <input type=\"file\" class=\"uploadImage _decrease\" style=\"position: absolute;opacity: 0;left:-9999px;\">
                        </label>-->
\t\t\t\t\t<div class=\"\" style=\"padding: 2px; margin-top: 20px;margin-left: 70px;\">
\t\t\t\t\t\t<div id=\"fileBox\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"uploadBox\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"upload1\" style=\"outline: none;background-color: #009688 !important; margin-top: 20px;\" class=\"btn btn-info btn-sm position-relative\">
\t\t\t\t                        上传文件
\t\t\t\t        \t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                </div>
                
            </form>
            <div id=\"sendMsg_1\" customer_id=\"\" style=\"height: 30px;line-height: 40px; margin-top: 50px;\">
                <label style=\"margin-top:20px;width: 148px\" >是否发送账期完成短信：</label>
                <input type=\"radio\" value=\"1\" name=\"is_send_1\">是
                <input type=\"radio\" value=\"2\" name=\"is_send_1\" checked=\"true\">否
            </div>
            <div id=\"sendMsg_2\" customer_id=\"\" style=\"height: 30px;line-height: 40px\">
                <label style=\"margin-top:20px;width: 148px\">是否发送合同续签短信：</label>
                <input type=\"radio\" value=\"1\" name=\"is_send_2\">是
                <input type=\"radio\" value=\"2\" name=\"is_send_2\" checked=\"true\">否
            </div>
            <div id=\"sendMsg_3\" customer_id=\"\" style=\"height: 30px;line-height: 40px\">
                <label style=\"margin-top:20px;width: 148px\">是否发送客户解约短信：</label>
                <input type=\"radio\" value=\"1\" name=\"is_send_3\">是
                <input type=\"radio\" value=\"2\" name=\"is_send_3\" checked=\"true\">否
            </div>
            <div class=\"popup_button\" style=\"margin-top: 60px\">
                <button class=\"sure_button btn btn-info btn-sm\">
                    保存
                </button>
            </div>
        </div>
    </div>

   <!--  <div class=\"row\" id=\"editbiaodan\" style=\"display:none;width:678px;\">
        <div class=\"col-sm-12\" id=\"editBox\">
            <div style=\"font-weight:bold;margin-bottom:10px;\">编辑客户</div>
            <table width=\"100%\" style=\"border:1px solid #ddd;border-collapse:collapse;margin-bottom:15px;\">
                <tr style=\"\"
                \"\">
                <td>合同</td>
                <td colspan=\"3\">
                    <input style=\"width:100%\">
                </td>
                </tr>
                <tr style=\"\">
                    <td>月份</td>
                    <td>
                        <input style=\"width:100%\">
                    </td>
                    <td>至</td>
                    <td>
                        <input style=\"width:100%\">
                    </td>
                </tr>
                <tr style=\"\">
                    <td>应收</td>
                    <td colspan=\"3\">
                        <input style=\"width:100%\">
                    </td>
                </tr>
                <tr style=\"\">
                    <td>实收</td>
                    <td colspan=\"3\">
                        <input style=\"width:100%\">
                    </td>
                </tr>
                <tr style=\"\">
                    <td>优惠</td>
                    <td colspan=\"3\">
                        <input style=\"width:100%\">
                    </td>
                </tr>
                <tr style=\"\">
                    <td>方式</td>
                    <td colspan=\"3\">
                        <select id=\"cpeople\" style=\"width:100%;\">
                            <option value=\"0\">现金</option>
                            <option value=\"1\">网银</option>
                            <option value=\"2\">支付宝</option>
                            <option value=\"3\">微信</option>
                        </select>
                    </td>
                </tr>
                <tr style=\"\">
                    <td>收款账户</td>
                    <td colspan=\"3\">
                        <input style=\"width:100%\">
                    </td>
                </tr>
                <tr style=\"\">
                    <td>收款人</td>
                    <td>
                        <input style=\"width:100%\">
                    </td>
                    <td>经办人</td>
                    <td>
                        <input style=\"width:100%\">
                    </td>
                </tr>
                <tr style=\"\">
                    <td>时间</td>
                    <td colspan=\"3\">
                        <input style=\"width:100%\">
                    </td>
                </tr>
                <tr style=\"\">
                    <td>备注</td>
                    <td colspan=\"3\">
                        <input style=\"width:100%\">
                    </td>
                </tr>
            </table>
            <div class=\"popup_button\" style=\"margin-bottom:30px;margin-top:0;\">
                <button class=\"sure_button\">
                    <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                    保存
                </button>
            </div>
        </div>
    </div> -->

    ";
        // line 851
        $this->loadTemplate("admin/customerDetail.html", "admin/financialManagement/lackOfrecord.html", 851)->display($context);
        // line 852
        echo "    ";
        $this->loadTemplate("admin/mark.html", "admin/financialManagement/lackOfrecord.html", 852)->display($context);
        // line 853
        echo "</div>

<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script type=\"text/javascript\">
    \$(function () {
\t\tvar order ='khm_customer.customer_num desc' ;
\t\tvar order1 ='khm_customer.customer_num desc';
        var page_size = 10;// 每页显示的条目数
        var qiektype = 0;
        var where = \"\";;//过滤条件  //htm_contract.status != 4
//      var filter = \"htm_contract.status != 4\";
        cs.dataRang();
        var _url = '';//请求路径
        var employees= [];//所有员工
        var service_product = [];//所有服务产品
\t\tvar money = [];
        var param = {
            aid: ykp.getCookie('aid'),
            time: ykp.getCookie(\"time\"),
            cid: ykp.getCookie(\"contract_id\"),
            timestamp: '',
            flag: false
        };
\t\tvar month2 =\"\";
        //跳转无需查询
        tspage();
        function tspage () {
            ykp.setCookie(\"filter\", \"\");
            ykp.setCookie(\"where\", \"\");
            if (ykp.getCookie('detailsId')&&ykp.getCookie('detailsId')!='') {
                var conid=ykp.getCookie('detailsId');
                var _url=ykp.getCookie('_url');
                var data = {
                    page_size:page_size,
                    where:`htm_contract.id=\${conid} and +\${filter}`,
                    order: order,
                }
                getList_2(_url,data);
                ykp.setCookie('detailsId','');
            }else if(ykp.getCookie('titleTask')&&ykp.getCookie('titleTask')!=''){
                ykp.setCookie('titleTask','');
                getList('/api/api_finance/qklist');
            }else{
                getList('/api/api_finance/qklist');
            }
        }
        
        //通用排序
        fn_sort()
        function fn_sort(){
            cs.general_sort({
                url: qiektype == 0 ? '/api/api_finance/qklist' :'/api/api_finance/qk_other_list',
                method: 'post',
                data: {
                    filter:\"\",
                    page_size: page_size
                },
                pageBar: {
                    id: '.pageBar'
                },
                contentId:qiektype == 0 ? \"#dataList\" : \"#dataList2\",  //默认排序
                initOrder:\"\",   //初始化sort
                defaultOrder:\"\",
                params:[{
                    id:qiektype == 0 ? \"#dynamic-table1\" : \"#dynamic-table2\",
                    field:qiektype == 0?[\"\",\"\",\"khm_customer.id\",\"khm_customer.customer_num\",\"pos_name\",\"htm_contract.status\",\"htm_contract.contract_code\",\"htm_task.start_time\",\"\",\"\",\"\",\"\",\"\",\"htm_contract.is_get_money\"]:[\"\",\"\",\"khm_customer.id\",\"\",\"\",\"\",\"htm_contract.status\",\"start_time\",\"htm_contract.is_get_money\",\"htm_contract.discount_total\",\"htm_contract.get_money\",\"\",\"htm_contract.contract_code\"]
                }]
            }, function(res, _sort_role) {
                sort_role = _sort_role;
                if(qiektype == 0){
                    addJzbsqkList('',res);
                }else {
                    addQtxmqkList('',res);
                }
            });
        }
        
        function getList_2(url,data) {
            _url = url;//给_url赋值 便于在切换每页显示条目数时确定请求路径;
            var index = \$('.kind').find('.now').index();
            var id = '#' + \$('.tab-pane').eq(index).attr('id');
            advancedSearch(url,id);
            generalSearch(url);
            ykp.list({
                url: url,
                method: 'post',
                data: data,
                pageBar: {
                    id: '.pageBar'
                },
                loadList:function(res){
                   if(judgeData(res,url)){
                   \t//生成月份表头
\t\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'),res['data']['months'],2);
                        if(url.indexOf('qklist') != -1){
                            addJzbsqkList(url,res);
                        }
                        if(url.indexOf('qk_other_list') != -1){
                            addQtxmqkList(url,res);
                        }
                    }
                }
            });
        }
        
        //获取所有服务产品
        ykp.doAjax({
            url:'/api/api_product/f7',
            method:'post',
            data:{
                select:'ckm_product.id,ckm_product.name,ckm_product.type,ckm_product.price',
                filter:'ckm_product.is_del <> 1'
            },
            success:function(res){
                service_product = res.data;
                \$('.advandced-search3').select2({allowClear:true});
                 for(var i in service_product){
                    service_product[parseInt(service_product[i]['id'])] =service_product[i]['name'];
                    \$('.advandced-search3').append(new Option(service_product[i]['name'],service_product[i]['id']));
                }
            }
        });
        
        cs.getAllCw1(function(option) {
\t\t\t\$('#heightsearch1 .cw').html(option);
\t\t\t\$('#heightsearch1 .cw').select2({
\t\t\t\tallowClear: true
\t\t\t})
\t\t})
        
        //获取所有员工
        getEmployees();
        function getEmployees(){
            ykp.doAjax({
                url: '/api/api_employees/f7',
                method: 'post',
                async: false,
                data: {
                    select: 'bmm_employees.id,bmm_employees.name'
                },
                success: function(res) {
                    var data = res.data;
                     \$('.advandced-search').select2({allowClear:true});
                    for(var i in data) {
                    \tif(data[i]['name']) {
                        employees[data[i]['id']] = data[i]['name'];
                            \$('.advandced-search').append(new Option(data[i]['name'],data[i]['id']));
                        }
                    }
                }
            });
        }

        //初始化页面数据,默认显示为记账报税欠款记录，默认每页显示10条数据
        
        //切换每页显示的条目数
        changePagesize();
        function changePagesize(){
            \$('.changePageNum').change(function() {
                page_size = \$(this).val();
                ykp.setCookie('page_size', page_size);
                getList(_url);
            })
        }

        cs.showHeightSearch('#heightsearch','#heightsearch1');
        cs.showHeightSearch('#height_search','#height_search1');

       /* //高级搜索弹出 | 隐藏
        advandedSearchShowOrHide();
        function advandedSearchShowOrHide(){
            \$('.in').click(function(){
                var index = \$('.kind .now').index();
                if(\$('._heightsearch').eq(index).hasClass('active')){
                    \$('._heightsearch').eq(index).removeClass('active').css('z-index','');
                    \$(\"._heightsearch1\").eq(index).slideUp();
                }
            });
            \$('._heightsearch').click(function() {
                var index = \$('.kind .now').index();
                if(\$(this).hasClass('active')) {
                    \$('.in').removeClass('modal-backdrop');
                    \$(this).removeClass('active').css('z-index','');
                    \$(\"._heightsearch1\").eq(index).slideUp();
                } else {
                    \$('.in').addClass('modal-backdrop');
                    \$('._heightsearch1').eq(index).slideDown();
                    \$(this).addClass('active').css('z-index','1041');
                    rest('.rest','._heightsearch1');
                }
            })
        }*/

\t\t// function rest(el,element) {
\t\t// \t\$(el).click(function() {
\t\t// \t\t\$('._heightsearch1').find('input[gjs=0],select[gjs=0]').val('');
\t\t// \t})
\t\t// }
        
        //高级搜索,url 请求路径
        function advancedSearch(_url,id){
            console.log(_url);
            var data = {
                url:_url,
                method:'post',
                data:{
                    page_size:page_size,
                    order: order
                }
            }
            var filtration = 'where';
            
            if (_url.indexOf('qklist') == -1) {
                filtration = 'filter';
            }

            cs.hSearch('._search1', data, filtration, 'haha', function(res,_where,month){
                where = _where;
                month2 = month;
                var index = \$('.kind .now').index();
                \$('.in').removeClass('modal-backdrop');
                \$(\"#heightsearch1,#height_search1\").slideUp();
                \$(\"#heightsearch,#height_search\").removeClass('active').css('z-index','');
                //生成月份表头
\t\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'),res['data']['months'],2);
                if(judgeData(res,_url)){
                    if(_url.indexOf('qklist') != -1) {
                        addJzbsqkList(_url,res);
                    }
                    if(_url.indexOf('qk_other_list') != -1) {
                        addQtxmqkList(_url,res);
                    }
                }
            },'','','.pageBar');
        }

\t\t\$('.flush').click(function(){
            var index = \$(this).parents('.tab-pane').index();
            where = '';
\t\t\t\$('[pts=\"0\"]').val('');
\t\t\t\$('[sear=\"khm_customer.customer_num\"]').val('');
\t\t\t\$('[sear=\"marketing_id\"]').val('').trigger('change');
\t\t\t\$('[sear=\"one_fuze\"]').val('').trigger('change');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
            if (index == 1) {
                getList('/api/api_finance/qklist');
            }else{
                getList('/api/api_finance/qk_other_list');
            }
\t\t})


        //普通搜索, url 请求路径
        function generalSearch(_url){
            var data = {
                url:_url,
                method:'post',
                data:{
                    page_size:page_size,
                    order: order
                }
            };
            var filtration = 'where';
            if (_url.indexOf('qklist') == -1) {
                filtration = 'filter';
            }

            cs.doSearch('._search', data, filtration , 'haha', function(res,_where) {
            \t//生成月份表头
\t\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'),res['data']['months'],2);
                where = _where;
                 if(judgeData(res,_url)){
                    if(_url.indexOf('qklist') != -1){
                        addJzbsqkList(_url,res);
                    }
                    if(_url.indexOf('qk_other_list') != -1){
                        addQtxmqkList(_url,res);
                    }
                }
            },'','','','.pageBar');
        }


      /*  //自定义table1
        cs.custorm_check('#dynamic-table1', '#dataList', false);*/

        //记账报税款项 | 其他项目款项   切换
        changeItem();
        function changeItem(){
            \$('.kind').on('click', 'li', function () {
                qiektype = \$(this).index();
                if (\$(this).hasClass('now')) {
                    return;
                }
                fn_sort();
                where = '';
    \t\t\t\$('[pts=\"0\"]').val('');
    \t\t\t\$('[sear=\"khm_customer.customer_num\"]').val('');
    \t\t\t\$('[sear=\"marketing_id\"]').val('').trigger('change');
    \t\t\t\$('[sear=\"one_fuze\"]').val('').trigger('change');
    \t\t\tykp.setCookie(\"filter\", \"\");
    \t\t\tykp.setCookie(\"where\", \"\");
    \t\t\t
                \$(this).addClass('now').siblings().removeClass('now');
                if (\$(this).hasClass('_billings')) {
                    \$('.tab-pane').hide();
                    \$('.tab-pane').eq(0).show();
                    where = '';
                    getList('/api/api_finance/qklist');
                }
                if (\$(this).hasClass('_others')) {
                    \$('.tab-pane').hide();
                    \$('.tab-pane').eq(1).show();
                   /* if(\$('.tab-pane').eq(1).find('#custom').length < 1){
                        //自定义table2
                        cs.custorm_check('#dynamic-table2', '#datalist2', false);
                    }*/
                    where = '';
                    getList('/api/api_finance/qk_other_list');
                }

/*
                //通用排序
\t\t\t\tcs.general_sort({
\t\t\t\t\turl: '/api/api_finance/qk_other_list',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter:\"\",
\t\t\t\t\t\tpage_size: page_size
\t\t\t\t\t},
\t\t\t\t\tpageBar: {
\t\t\t\t\t\tid: '.pageBar'
\t\t\t\t\t},
\t\t\t\t\tcontentId:\"#dataList\",  //默认排序
\t\t\t\t\tinitOrder:\"\",   //初始化sort
\t\t\t\t\tdefaultOrder:\"\",
\t\t\t\t\tparams:[{
\t\t\t\t\t\tid:\"#dynamic-table1\",
\t\t\t\t\t\tfield:[\"\",\"khm_customer.id\",\"\",\"\",\"\",\"htm_contract.status\",\"\",\"htm_contract.is_get_money\",\"htm_contract.discount_total\",\"htm_contract.get_money\",\"htm_contract.total_monry\",\"htm_contract.contract_code\"]
\t\t\t\t\t}]
\t\t\t\t}, function(res, _sort_role) {
\t\t\t\t\tsort_role = _sort_role;
\t\t\t\t\taddQtxmqkList(res);
\t\t\t\t});*/
            });
        }

        //所有日期，时间，时间范围等插件
        time_plug();
        function time_plug(){
            //月份
            \$('#templateCon .select2').css('width','414px').select2({allowClear:true})
            \$('#select2-multiple-style .btn').unbind('click').on('click', function(e){
                var target = \$(this).find('input[type=radio]');
                var which = parseInt(target.val());
                if(which == 2) \$('.select2').addClass('tag-input-style');
                 else \$('.select2').removeClass('tag-input-style');
            });

            //时间范围
            // \$('input[name=date-range-picker],#templateCon input[name=date-range-picker]').daterangepicker({
            //     'applyClass': 'btn-sm btn-success',
            //     'cancelClass': 'btn-sm btn-default',
            //     locale: {
            //         format: 'YYYY-MM-DD',  
            //         daysOfWeek: ['日', '一', '二', '三', '四', '五', '六'],  
            //         monthNames: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
            //         applyLabel: '确认',
            //         cancelLabel: '取消'
            //     }
            // })

            //时间
            if (!ace.vars['old_ie']) {
                \$('.date-timepicker1,#templateCon #date-timepicker1').datetimepicker({
                       format: 'YYYY-MM-DD',//use this option to display seconds
                    icons: {
                        time: 'fa fa-clock-o',
                        date: 'fa fa-calendar',
                        up: 'fa fa-chevron-up',
                        down: 'fa fa-chevron-down',
                        previous: 'fa fa-chevron-left',
                        next: 'fa fa-chevron-right',
                        today: 'fa fa-arrows ',
                        clear: 'fa fa-trash',
                        close: 'fa fa-times'
                    }
                }).next().on(ace.click_event, function () {
                    \$(this).prev().focus();
                });
            }
        }

        //判断是否有返回的数据
        function judgeData(res,url){
            if(res.data.items == \"\") {
                setTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
                var ele = '';
                if(url.indexOf('qklist') != -1){
                    ele = '#dataList';
                }
                if(url.indexOf('qk_other_list') != -1){
                    ele = '#datalist2';
                }
                \$(ele).html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"><div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
                return false;
            }
            return true;
        }
        
        
        //生成月份表头：el 所有月份表头，months:开始、结束月份
\t\tfunction generateMonthTh(el,months,type){
\t\t\tif(\$('.kind').find('.now').index() == 1){
                if(\$('#tab-pane2').find('.custom').length < 1) {
                    cs.custorm_check('#dynamic-table2', '#datalist2', false);
                }
\t\t\t\treturn false;
\t\t\t}
\t\t\tvar start = months ? {year:parseInt(months['start'].substring(0,4)),month:parseInt(months['start'].substring(4))} :\"\";
\t\t\tvar end = {year:parseInt(months['end'].substring(0,4))};
\t\t\tvar El = type == 2 ? '#dynamic-table1' : '#dynamic-table2';
\t\t\tvar start_month;
\t\t\t\$(El+' .thColor .month').each(function(i,e){
\t\t\t\tstart_month = i + start['month'];
\t\t\t\tif(start_month > 12){
\t\t\t\t\tstart_month = start_month - 12;
\t\t\t\t\t\$(this).text(end['year'] + '' + (start_month  < 10 ? '0' + start_month : start_month )).attr('month',end['year'] + '' + (start_month  < 10 ? '0' + start_month : start_month ));
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\t\$(this).text(start['year'] + '' + (start_month < 10 ? '0' + start_month : start_month)).attr('month',start['year'] + '' + (start_month < 10 ? '0' + start_month : start_month));
\t\t\t});

\t\t\t//自定义列表
            if(\$('#tab-pane1').find('.custom').length < 1) {
                cs.custorm_check('#dynamic-table1', '#dataList', false);
            }
\t\t};

        //根据url 获取记账报税 | 其他项目欠款数据
        function getList(url) {
        \tcs.last_year_month();
            _url = url;//给_url赋值 便于在切换每页显示条目数时确定请求路径;
            var index = \$('.kind').find('.now').index();
            var id = '#' + \$('.tab-pane').eq(index).attr('id');
            advancedSearch(url,id);
            generalSearch(url);
            var Order = url == '/api/api_finance/qk_other_list' ? order : order1;
            var data = {
                    page_size:page_size,
                    where:where,
                    order: Order,
               };
            if(month2){
\t\t\t\tdata.month2 = month2;
\t\t\t}
            ykp.list({
                url: url,
                method: 'post',
                data: data,
                pageBar: {
                    id: '.pageBar'
                },
                loadList:function(res){
                \t//生成月份表头
\t\t\t\t\tgenerateMonthTh(\$('#dynamic-table .thColor .month'),res['data']['months'],2);
                   if(judgeData(res,url)){
                        if(url.indexOf('qklist') != -1){
                            addJzbsqkList(url,res);
                        }
                        if(url.indexOf('qk_other_list') != -1){
                            addQtxmqkList(url,res);
                        }
                    }
                }
            });
        }

        //其他项目欠款数据加载到table中
        function addQtxmqkList(url,res){
            var data = res.data.items;
            var salesman_id = [];//业务人员id
            var salesman = [];//业务人员
            var task = [];//任务
            var task_detail = {};//任务详情

            //欠款状态
            var debt_statu = ['未完成','已放弃','已完成'];
\t\t\tvar status = ['未激活','已激活','已挂起','已结束','已作废'];
            var html = [];
            var styles = [];
            \$('#dynamic-table2 th').each(function(i,e){
                styles.push(\$(this).css('display'));
            });
            // var contractStatus = ['未执行','执行中','已挂起','已结束'];//合同状态
            \$('._others').addClass('now').siblings().removeClass('now');
            \$('.tab-pane').hide();
            \$('.tab-pane').eq(1).show();
            
            money = [];
            for(var i in data){
                task_detail['product'] = [];
                task = data[i]['task'];

                salesman_id = data[i]['market'];
                for(var k in salesman_id){
                    salesman.push(salesman_id[k]['info']['name']);
                }

                for(var k in task){
                    if(k == 0){
                        task_detail['start_time'] = task[k]['start_time'];
                        task_detail['end_time'] = task[k]['end_time'];

                        if(task[k]['staff'].length > 0){
                            task_detail['leader'] = task[k]['staff'][k]['user']['name'] ? task[k]['staff'][k]['user']['name'] : '';
                        }
                    }

                    if(k != 0){
                        task_detail['start_time'] = task_detail['start_time'] >= task[k]['start_time'] ? task[k]['start_time'] : task_detail['start_time'];
                        task_detail['end_time'] = task_detail['end_time'] > task[k]['end_time'] ? task_detail['end_time'] : task[k]['end_time'];
                    }
                    task_detail['product'].push(task[k]['productName']);
                }
                money.push({
            \t\t0:data[i]['htm_contract.discount_total'],
            \t\t1:data[i]['htm_contract.get_money']
            \t})

                html.push(`
                    <tr data-id=\"\${data[i]['htm_contract.id']}\" customer-id=\"\${data[i]['htm_contract.customer_id']}\" zbmoney=\"0\" is_get_money=\"\${data[i]['htm_contract.is_get_money']}\"   not_get_money=\"\${eval(data[i]['htm_contract.total_monry'] + '-' + data[i]['htm_contract.get_money'])}\">
                    \t<td class=\"center\"><label class=\"pos-rel\"><input type=\"checkbox\" name=\"check\" class=\"ace\"><span class=\"lbl\"></span></label></td>    
                    \t<td class=\"gathering_statu\">
                            <a contentauthority=\"279\" class=\"pos-rel\" style=\"display:\${ data[i]['htm_contract.is_get_money'] == 0 ? 'inline-block' : 'none' }\"> 
                                <span style=\"cursor: pointer\" class=\"lbl give_up btRed\" title=\"放弃\"><i class=\"fa fa-times-circle\"></i></span>
                            </a>
                            <a contentauthority=\"279\" class=\"pos-rel\"  style=\"display:\${ data[i]['htm_contract.is_get_money'] == 0 ? 'inline-block' : 'none' }\"> 
                                <span style=\"cursor: pointer;background-color: #00c0ef !important;\" class=\"lbl finish btGreen\" title=\"完成\"><i class=\"fa fa-check-circle-o\"></i></span>
                            </a>
                            <a class=\"pos-rel _gathering\" style=\"border:none; display:\${ data[i]['htm_contract.is_get_money'] == 0 ? 'inline-block' : 'none' }\" money_status=\"\${data[i]['htm_contract.money_status']}\" contentAuthority=\"161\"><span class=\"lbl btGreen \" title=\"收款\"><i class=\"fa fa-plus\"></i></span>
                            </a>
                            
                             <a contentauthority=\"279\" style=\"display:\${ data[i]['htm_contract.is_get_money'] != 0 ? 'inline-block' : 'none' }\" class=\"pos-rel\" class=\"pos-rel\" >
                                <span style=\"cursor: pointer\" class=\"lbl no_give_up btOrange\" title=\"撤销\"><i class=\"fa fa-rotate-left\"></i></span>
                            </a>
                        </td>
                       
                        <td data-num=\"1\" style=\"display:\${styles[1]}\" data-cid=\"\${data[i]['khm_customer.id']}\">
                            <a class=\"pos-rel customerDetail\">\${data[i]['khm_customer.name']}</a>
                           <label class=\"pos-rel\">
\t\t\t\t \t\t\t\t<i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data[i]['Remark'].length > 0 ? 'red' : ''}\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i>
\t\t\t \t\t\t\t </label>
                        </td>
                        <td data-num=\"2\" style=\"display:\${styles[2]}\">\${salesman.join(',')}</td>
                        <td data-num=\"3\" style=\"display:\${styles[3]}\">\${task_detail['leader'] }</td>
                        <td data-num=\"4\" style=\"display:\${styles[4]}\">\${task_detail['product'].join(',')}</td>
                        <td data-num=\"11\" style=\"display:\${styles[5]}\">\${status[data[i]['htm_contract.status']]}</td>
                        <td data-num=\"5\" style=\"display:\${styles[6]}\">\${task_detail['start_time'] != '0' ? (cs.getNowTime(task_detail['start_time']) +'~'+ cs.getNowTime(task_detail['end_time'])) : ''} </td>
                        <td data-num=\"6\" style=\"display:\${styles[7]}\">\${debt_statu[data[i]['htm_contract.is_get_money']]}</td>
                        <td data-num=\"7\" style=\"display:\${styles[8]};text-align: right !important; \">\${data[i]['htm_contract.discount_total']}</td>
                        <td data-num=\"8\" style=\"display:\${styles[9]};text-align: right !important; \">\${data[i]['htm_contract.get_money']}</td>
                        <td data-num=\"9\" style=\"display:\${styles[10]};text-align: right !important; \">\${eval(data[i]['htm_contract.total_monry'] + '-' + data[i]['htm_contract.get_money']).toFixed(2)}</td>
                        <td data-num=\"10\" style=\"display:\${styles[11]}\">\${data[i]['htm_contract.contract_code']}</td>
                    </tr>`);
                    salesman_id = [];//业务人员id
                    salesman = [];//业务人员
                    task = [];//任务
                    task_detail = {};//任务详情
            }

            \$('#datalist2').html(html.join(''));
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();

            cs.getNodes([161,279]);

            //改变收款状态
            changeGatheringStatu('/api/api_finance/qk_other_list');

            sk(url,data);
            custom.get_custom_info();
            custom.showReamrk();      
           
        }
                                    
        //打开收款
        function sk(url,data){
            //收款
            \$('._gathering').unbind('click').click(function(){
            \tvar nodes = ykp.getCookie('nodes').split(',');
            \tif(nodes.indexOf(\"161\") == -1) {
\t              \tykp.prompt('你没有权限');
\t              \treturn false;
\t            }
            \tif(\$(this).parents('tr').attr('is_get_money') != 0){
            \t\tykp.prompt('该订单已完成或已放弃');
            \t\treturn false;
            \t}else{
            \t\tif(\$(this).attr('money_status') == '2' && \$(this).attr('data-time')){
\t                    ykp.prompt('该月份已收款');
\t                    return;
\t               }
            \t}
                
                if(\$(this).attr('money_status') == '1'){
                    ykp.prompt('审批中，请等待');
                    return;
                }
                var _index = \$(this).parents('tr').index();
                var _data = data[_index];
                if(\$(this).hasClass('sk')){
                \tvar begin = \$(this).parents('tr').attr('max_month');//收款开始时间
\t                    if(!begin){
\t                    \tykp.prompt('此订单的最大月份已收款');
\t                    \treturn false;
\t                    }
                }
                showMark('.popup_getMoney');
                \$('#showBox .title').text('收款');
                var index = \$('.kind .now').index();
                //长期合同显示账本信息，并将应收账本费添加进账本费中
                if(index == 0){
                    \$('#templateCon .account_book').show();
                    \$('#templateBox').find('input[field=account_book]').val((_data.info['htm_contract.account_book'] - _data.info['htm_contract.get_account_book']).toFixed(2));
                }else {
                \t\$('.account_book').hide();
                }
                \$('#templateCon').data('flag','1');
                \$('#showBox .close_get').unbind('click').click(function(){
                    \$('#templateCon').data('flag','2');
                    cs.close();
                });

                //上传图片
                uploadImg();
                
                cs.upload1({
\t\t\t\t\tel: \"#templateBox #upload1\",
\t\t\t\t\tael: \"#templateBox #fileBox\"
\t\t\t\t})

                // var months = [];
                // \$(this).parents('tr').find('._gathering').not('[money_status=\"1\"],[money_status=\"3\"]').each(function(i){
                //     var month = parseInt(\$(this).attr('data-num'))-6;
                //     if (month<10) {
                //         month = '0'+month;
                //     }
                //     months.push('<option value=\"' + \$(this).attr('data-time') +'\">' + month+'月'+ '</option>');
                // })
                // \$('#templateCon #state').append(months.join(' '));

                //一次性订单隐藏月份，长期订单显示月份

                if(index == 0) {
                \tif(\$(this).hasClass('sk')){
                \t\tvar begin = \$(this).parents('tr').attr('max_month');//收款开始时间
\t                    begin = [parseInt(begin.substring(0,4)),parseInt(begin.substring(4))];
                \t}else{
                \t\tvar begin = \$(this).attr('data-time');//收款开始时间
\t                    
\t                    begin = [parseInt(begin.substring(0,4)),parseInt(begin.substring(4))];
\t                   \$('#templateBox .end').prop('disabled',true);
                \t}
                \t
                   \tvar end = cs.getNowTime(_data['info']['htm_task.end_time']);//合同结束时间
\t\t\t\t\tend = end.substring(0,end.lastIndexOf('-')).split('-');
                    var year_interval = parseInt(end[0]) - begin[0];//  间隔
                  
                    var _months = year_interval * 12 + parseInt(end[1]) - begin[1] + 1;//月份间隔

                    var months_html = [];//截止收款月份html

                    var month = '';//收款开始到合同结束期间的每一个月份
                    for(var i = 0;i < _months;i++){
                        month = (parseInt((begin[1] + i - 1) / 12)) + begin[0] + '' + ((begin[1] + i) % 12 == 0 ? 12 : ((begin[1] + i) % 12 < 10 ? ('0' + (begin[1] + i) % 12) : (begin[1] + i) % 12));
                        months_html.push('<option val=\"'+ month +'\">'+ month +'</option>');
                    }
                    \$('#templateCon .end').html(months_html.join(''));
                    \$('#templateCon [field=\"cound_money\"]').val(_data['info']['htm_task.discount']);
\t\t\t\t\t\$('#templateCon [field=\"account_book\"]').val((_data['info']['htm_contract.account_book']));
                    \$('#templateCon [field=\"get_account_book\"]').val((_data['info']['htm_contract.get_account_book']));
                    var count_send = _data['info']['htm_task.count_send'];//赠送月份

                    \$('#templateCon .gathering_month').show();
                    \$('#templateCon .begin').val(begin[0] + '' + (begin[1] > 9 ? begin[1] : '0' + begin[1]));
                    \$('#templateCon .company_name').val(_data['info']['khm_customer.name']);
                    \$('#templateCon .contract_code').val(_data['info']['htm_contract.contract_code']);
                    \$('#templateCon [field=\"cound_money\"]').val((_data['info']['htm_task.discount'] * (\$('#templateCon .end')[0].selectedIndex + 1)).toFixed(2));
                    \$('#templateCon [field=\"get_money\"]').val((_data['info']['htm_task.discount'] * (\$('#templateCon .end')[0].selectedIndex + 1)).toFixed(2));
                    \$('#templateCon .end').unbind('change').change(function(){
                        \$('#templateCon [field=\"cound_money\"]').val((_data['info']['htm_task.discount'] * (\$(this)[0].selectedIndex + 1)).toFixed(2));
                        \$('#templateCon [field=\"get_money\"]').val((_data['info']['htm_task.discount'] * (\$(this)[0].selectedIndex + 1)).toFixed(2));
                        \$('#templateCon [field=\"account_book\"]').val((_data['info']['htm_contract.account_book']));
                        \$('#templateCon [field=\"get_account_book\"]').val((_data['info']['htm_contract.get_account_book']));
                    });
                    \$('#templateCon [field=\"get_time\"]').val(cs.getNowTime(new Date()/1000));
                }
                if(index == 1){
                    \$('#templateCon .company_name').val(_data['khm_customer.name']);
                    \$('#templateCon .contract_code').val(_data['htm_contract.contract_code']);
                    \$('#templateCon [field=\"cound_money\"]').val(eval(_data['htm_contract.total_monry'] + '-' + _data['htm_contract.get_money']));
                    \$('#templateCon .gathering_month').hide();
                }
                time_plug();

                //切换收款方式 自动切换收款账户
                cs.changePayWayGetAccounts(\$('#templateCon [field=\"get_way\"]'),\$('#templateCon [field=\"account\"]'));

                //收款人  经办人
                for(var i in employees) {
                    if(employees[i]){
                        \$('#templateCon .employee').append(new Option(employees[i],i));
                    }
                }
\t\t\t\t\$('#templateCon [field=\"receiver\"]').val(JSON.parse(ykp.getCookie('userinfo')).id);
                var contract_id,qMoney,cid;

                if (index == 0) {
                    qMoney = data[_index]['yq_money'];
                    contract_id = data[_index]['jzm_service_info.contract_id'];
                    cid = data[_index].info['khm_customer.id'];
                } else {
                    qMoney = eval(data[_index]['htm_contract.total_monry'] + '-' + data[_index]['htm_contract.get_money']);
                    contract_id = data[_index]['htm_contract.id'];
                    cid = data[_index]['khm_customer.id'];
                }
                saveGathering(url,index,contract_id,qMoney,cid);
            });
        }
                            
        //收款 保存
        function saveGathering(url,index,id,qMoney,cid){
            \$('#templateCon .sure_button').click(function() {
                var postData = {};
                var imgdata = [];
                \$('#templateCon [field]').each(function(i,e) {
                    if(\$(this).attr('field') === 'get_time') {
                        postData[\$(this).attr('field')] = new Date(\$(this).val()) / 1000;
                        return true;
                    }
                    if (\$(this).attr('field') === 'voucher') {
                        imgdata.push(\$(this).attr('src'));
                        return true;
                    }
                    postData[\$(this).attr('field')] = \$(this).val();
                });
                var today = new Date(); 
                var param_1 = {
                    name:\$('#templateCon .company_name').val(),
                    date:today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate(),
                    money:\$('#templateCon [field=\"get_money\"]').val()
                }
                var param_2 = {
                    name:\$('#templateCon .company_name').val(),
                    date:today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate(),
                    money:qMoney
                }
                if(index == 0) {
                    param_1['time'] = JSON.parse(get_Month()).join(',');
                }
                var param_3 = {
                    name:\$('#templateCon .company_name').val(),
                    money:qMoney
                }
                var is_send_1 = false,is_send_2 = false,is_send_3 = false;

                if (\$('#templateCon #sendMsg_1 input:checked').val()==1) {
                    is_send_1 = true;
                }
                if (\$('#templateCon #sendMsg_2 input:checked').val()==1) {
                    is_send_2 = true;
                }
                if (\$('#templateCon #sendMsg_3 input:checked').val()==1) {
                    is_send_3 = true;
                }
                postData['voucher'] = imgdata.join(',');
                if(index == 0){
                    postData['get_to_term'] = get_Month();
                }
                postData['contract_id'] = id;
                // console.log(postData);
                // return;
                
                var fileBox = \$('#templateCon #fileBox');
\t\t\t\tvar files = [];
\t\t\t\tif(fileBox.children().length > 0) {
\t\t\t\t\t\$('#templateCon #fileBox').find('a').each(function(i) {
\t\t\t\t\t\tfiles.push({
\t\t\t\t\t\t\tname: \$(this).text(),
\t\t\t\t\t\t\turl: \$(this).attr('href')
\t\t\t\t\t\t})
\t\t\t\t\t})

\t\t\t\t\tpostData.files = JSON.stringify(files);
\t\t\t\t}

                ykp.doAjax({
                    url:'/api/api_finance/receivables_add',
                    method:'post',
                    data:postData,
                    success:function(res){
                        cs.close();
                        if (is_send_1) {
                            sendMsg(cid,'订单收款',param_1);
                        }
                        if (is_send_2) {
                            sendMsg(cid,'暂停服务通知',param_2);
                        }
                        if (is_send_3) {
                            sendMsg(cid,'严重欠费通知',param_3);
                        }
                        getList(url);
                    }
                })
            });
        }

        //发送短信
        function sendMsg(id,type,param){
            ykp.doAjax({
                url:'/api/api_common/send_customer',
                data:{
                    customer_id:id,
                    type:type,
                    param:JSON.stringify(param)
                },
                method:'post',
                success:function(res){
                    ykp.prompt('短信发送成功！');
                }
            })
        }

         //图片上传
        function uploadImg(){
            \$('#templateCon .uploadImage').unbind('change').change(function(){
                var it=\$(this);
                var file = this.files[0];
                if(!file.type || !/\\.(jpg|png|)\$/.test(file.name)){
                    ykp.prompt('请上传JPG、PNG格式的图片');
                    return false;
                }

                var fr = new FileReader();
                var postdata = {};

                if (!file) {
                    return;     
                }
                
                fr.readAsDataURL(file);
                fr.onloadend = function(e){
                    var base64 = e.target.result;
                    postdata['name'] = file.name;
                    postdata['dir'] = 'log';
                    postdata['base64'] = base64.split(',')[1];
                    ykp.doAjax({
                        url:'/api/api_common/upload_img',
                        method:'post',
                        data:postdata,
                        success:function(res){
                            //it.siblings('i').hide();
                            //it.parent().css('border','none');
                            console.log(res)
                             //图片有6张就不再添加
                            if(it.parent().siblings().length == 5){
                                it.parent().hide();
                            }
                            
                            var img_input = \$(`
                            <label class=\"\" style=\"margin-bottom:0;margin-right:10px;line-height:70px;display: inline-block;width: 70px;height: 70px;cursor: pointer; text-align: center;\">
                            <img field=\"voucher\" style=\"width: 100%;height: 70px;\" src=\"\${res.data.url}\" alt=\"\">
                            <input type=\"file\" class=\"uploadImage _decrease\" style=\"position: absolute;opacity: 0;left:-9999px;\">
                        </label>`);
                            img_input.find('[field=\"voucher\"]').attr('url',res.data.url);
                            img_input.find('[field=\"voucher\"]').attr('name',file.name);
                            it.parent().before(img_input);
                        }
                    });
                }
            });
        }


        //获取月份
        function get_Month(){
            var index = \$('#templateCon .end')[0].selectedIndex;
            var _data = [];
            \$('#templateCon .end').find('option').each(function(i,e){
                if(i > index){
                    return false;
                }
                _data.push(\$(this).val());
            });
             // var data = \$('#templateCon #state').select2('data');
             // var _data = [];
             // for(var i in data){
             //    _data.push(new Date().getFullYear() + data[i]['id']);
             // }
             return JSON.stringify(_data);
        }

        //获取所有账户
        function getAccounts(){
            ykp.doAjax({
                url:'/api/api_bank/f7',
                method:'post',
                data:{
                    select:'xtm_kh_bank.id,xtm_kh_bank.type,xtm_kh_bank.bank_name'
                },
                success:function(res){
                    var data = res.data;

                    var account_html = [];
                    for(var i in data){
                        account_html.push('<option value=\"'+ data[i]['id'] +'\" get_way=\"'+ data[i]['type'] +'\">'+ data[i]['bank_name'] +'</option>');
                    }
                    \$('#templateCon [field=\"account\"]').append(account_html.join(''));
                }
            });
        }

\t\t// \$('#flush').click(function(){
\t\t\t\t
\t\t// \tgetList();
\t\t// })


        //获取所有合同
        function getContracts(){
            ykp.doAjax({
                url:'/api/api_contract/f7',
                method:'post',
                data:{
                    select:'htm_contract.id,htm_contract.contract_num,htm_contract.total_monry,htm_contract.get_money'
                },
                success:function(res){
                    var data = res.data;
                    for(var i in data){
                        \$('#templateCon .agreement').append(\$(new Option(data[i]['contract_num'],data[i]['id'])).attr('should-get',eval(data[i]['total_monry'] + '-' + data[i]['get_money'])));
                    }
                }
            });
        }

        

        //动态生成月份td
        function generateTd(obj,styles){
            var td_html = ''; 
            var style = ['', 'fa fa-circle-o', 'glyphicon glyphicon-ok', 'glyphicon glyphicon-remove'];
            \$('#dynamic-table1 .thColor .month').each(function(i,e){
            \tmonth = \$(this).text();
            \t  if(obj[month]){
\t                    td_html += 
\t                     '<td title=\"'+month+'\" data-time=\"'+ obj[month]['time'] +'\" money_status=\"'+ obj[month]['money_status'] + '\" class=\"_gathering\" data-num=\"'+ \$(this).attr('data-num') +'\" style=\"display:'+  \$(this).css('display')+';border:1px solid #eee !important;\" get_money=\"' + obj[month]['get_money'] + '\" data-id=\"' + obj[month].id + '\">' +
\t                        '<label class=\"pos-rel ' + style[obj[month]['money_status']] +'\"> ' + (obj[month]['money_status'] == 2 ?  obj[month]['get_money'] : \"\" )+ '</label>' +
\t                    '</td>' ;
\t               }
\t                if(!obj[month]){
\t                    td_html += '<td data-num=\"'+ \$(this).attr('data-num') +'\" style=\"display:'+ \$(this).css('display') +';border:1px solid #eee !important;\" get_money></td>';
\t                }
            })
            return td_html;
        }

        //放弃收款
        function changeGatheringStatu(url){
            \$('.gathering_statu').unbind('click').on('click','.give_up,.finish,.no_give_up',function(){
                var id = \$(this).parents('tr').attr('data-id');
                var is_get_money;
                var index = \$(this).parents('tr').index();  //获取当前行的下标
                var nodes = ykp.getCookie('nodes').split(',');
                if(\$(this).hasClass('give_up')){
\t              \tif(nodes.indexOf(\"279\") == -1) {
\t              \t\tykp.prompt('你没有权限');
\t              \t\treturn false;
\t              \t}
                    is_get_money = 1;
                }
                if(\$(this).hasClass('no_give_up')){
                \tif(nodes.indexOf(\"279\") == -1) {
\t              \t\tykp.prompt('你没有权限');
\t              \t\treturn false;
\t              \t}
                    is_get_money = 0;
                }
                if(\$(this).hasClass('finish')){
                \tif(nodes.indexOf(\"279\") == -1) {
\t              \t\tykp.prompt('你没有权限');
\t              \t\treturn false;
\t              \t}
                    is_get_money = 2;
                }
                var not_get_money = \$(this).parents('tr').attr('not_get_money');
                var zbmoney = \$(this).parents('tr').attr('zbmoney');
\t\t\t\tvar msg = \"\";
\t\t\t\tif(is_get_money == 1) {
\t\t\t\t\tmsg = '欠款金额'+(parseInt(not_get_money) + parseInt(zbmoney)).toFixed(2)+'元，确认放弃当前对合同的收款？';
\t\t\t\t}else if(is_get_money == 2) {
\t\t\t\t\tmsg = '欠款金额'+(parseInt(not_get_money) + parseInt(zbmoney)).toFixed(2)+'元，确认完成当前对合同的收款？';
\t\t\t\t}else {
\t\t\t\t\tmsg = \"是否撤销放弃操作\";
\t\t\t\t}
                bootbox.confirm(msg,function(flag){
                    if(flag){
                        ykp.doAjax({
                            url:'/api/api_contract/give_up',
                            method:'post',
                            data:{
                                id:id,
                                is_get_money:is_get_money
                            },
                            success:function(res){
                                ykp.prompt('操作成功！');

                                setTimeout(function(){
                                    getList(url);
                                },1000);
                            }
                        });
                    }
                });
            });
            
        }

        //记账报税欠款 数据加载到table中
        function addJzbsqkList(url,res) {
            var data = res.data.items;
            var html = '';
            var Class = '';
            // var timeArr = new Array(12);
            var timeArr = {};
            //月份td 
            var td_html = '';

            //欠款状态
            var debt_statu = ['未完成','已放弃','已完成'];

            var obj = {};
\t\t\tvar status = ['未激活','已激活','已挂起','已结束','已作废'];
            var cycle = {'1':'每月','3':'季度','6':'半年付','12':'年付'};//维护周期
            var styles = [];
            \$('#dynamic-table1 th').each(function(i,e){
                styles.push(\$(this).css('display'));
            });
            ykp.setCookie('page_no', res.data.curPage, (1 / 24));
            for (var i in data) {
                for (var j = 0; j < data[i].list.length; j++) { 
                    time = data[i].list[j]['time'];
                    obj.status = data[i].list[j]['status'];
                    obj.get_money = data[i].list[j]['get_money'];
                    obj.id = data[i].list[j]['id'];
                    obj.money_status = data[i].list[j]['money_status'];
                    obj.time = data[i].list[j]['time'];
                    timeArr[time] = obj;
                    obj = {};
//                  console.log(time);
                }
\t\t\t\t
                td_html = generateTd(timeArr,styles);
                html +=
                    '<tr data-id=\"' + data[i]['jzm_service_info.contract_id'] +'\" customer-id=\"' + data[i]['info']['khm_customer.id'] +'\" zbmoney=\"'+(parseInt(data[i]['info']['htm_contract.account_book']) - parseInt(data[i]['info']['htm_contract.get_account_book'])).toFixed(2)+'\"  max_month=\"' + data[i]['maxMonth'] +'\"   not_get_money=\"'+data[i].yq_money+'\" is_get_money='+data[i]['info']['htm_contract.is_get_money']+'>' +
                    '<td class=\"center\"><label class=\"pos-rel\"><input type=\"checkbox\" name=\"check\" class=\"ace\"><span class=\"lbl\"></span></label></td>'+
                    '<td class=\"gathering_statu\" style=\"display:'+ styles[0] +';\"><label style=\"\">'+  //+( data[i]['info']['htm_contract.is_get_money'] != 0 ? \"none\" : \"inline-block\") +
                        '<a contentauthority=\"279\" style=\"display:'+( data[i]['info']['htm_contract.is_get_money'] == 0 ? \" inline-block\" : \"none\") +'\" class=\"pos-rel\"> <span style=\"cursor: pointer;\"  class=\"lbl give_up btRed\" title=\"放弃\"><i class=\"fa fa-times-circle\"></i></span></a> '+
                        '<a contentauthority=\"279\" style=\"display:'+( data[i]['info']['htm_contract.is_get_money'] != 0 ? \"inline-block\" : \"none\") +'\" class=\"pos-rel\"> <span style=\"cursor: pointer;\"  class=\"lbl no_give_up btOrange\" title=\"撤销\"><i class=\"fa fa-rotate-left\"></i> </span></a> '+
                        '<a contentauthority=\"279\" style=\"display:'+( data[i]['info']['htm_contract.is_get_money'] == 0 ? \"inline-block\" : \"none\") +'\" class=\"pos-rel\"> ' +
                            '<span style=\"cursor: pointer;background-color: #00c0ef !important;\" class=\"lbl finish btGreen\" title=\"完成\"><i class=\"fa fa-check-circle-o\"></i></span>' +
                        '</a>' +
                        '<a contentauthority=\"161\" class=\"pos-rel sk _gathering\"> <span style=\"cursor: pointer;margin-left: 2px; display:'+( data[i]['info']['htm_contract.is_get_money'] == 0 ? \"inline-block\" : \"none\") +'\" class=\"lbl btGreen\" title=\"收款 \"><i class=\"fa fa-plus\"></i></span></a> </label>'+
                    '</td>' +
                    '<td data-num=\"1\" style=\"display:'+ styles[1] +';\" data-cid=\"'+data[i].info['khm_customer.id']+'\"><a href=\"javascript:;\" class=\"pos-rel customerDetail\">' + data[i].info['khm_customer.name']+'</a>' +
                    '<label class=\"pos-rel\"><i class=\"iconBnt fa fa-info-circle\" style=\"color:'+(data[i]['Remark'].length > 0 ? 'red' : \"\")+'\"  data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"'+cs.getRemark(data[i]['Remark'])+'\" ></i></label></td>'+
                    '<td data-num=\"2\" style=\"display:'+ styles[2] +';\">' + data[i].info['khm_customer.customer_num'] + '</td>' +
                    '<td data-num=\"3\" style=\"display:'+ styles[3] +';\">' + (data[i]['position']['pos_name'] || \"\") + (data[i]['position']['pos_num'] || \"\") + '</td>' +
                     '<td data-num=\"22\" style=\"display:'+styles[4]+'\">'+status[data[i]['info']['htm_contract.status']]+'</td>'+
                    '<td data-num=\"23\" style=\"display: '+styles[5] +'\">'+data[i]['info']['htm_contract.contract_code']+'</td>'+
                    '<td data-num=\"4\" style=\"display:'+ styles[6] +';\">' + (data[i].info['htm_task.start_time'] != '0' ? (cs.getNowTime(data[i].info['htm_task.start_time']) +'~'+cs.getNowTime(data[i].info['htm_task.end_time'])) : '') + '</td>' +
                    '<td data-num=\"5\" style=\"display:'+ styles[7] +';\">' + data[i].overdue + '个月</td>' +
                    '<td data-num=\"6\" style=\"display:'+ styles[8] +';text-align: right !important; \">' + parseInt(data[i].yq_money).toFixed(2) + '</td>' +
                    '<td data-num=\"7\" style=\"display:'+ styles[9] +';text-align: right !important; \">' + (parseInt(data[i]['info']['htm_contract.account_book']) - parseInt(data[i]['info']['htm_contract.get_account_book'])).toFixed(2)  + '</td>' +
                    '<td data-num=\"8\" style=\"display:'+ styles[10] +';\">' + cycle[data[i].info['htm_contract.get_cycle']] + '</td>' +
                    '<td data-num=\"9\" style=\"display:'+ styles[11] +';\">' + data[i]['maxTime']+ '</td>' +
                    '<td data-num=\"10\" style=\"display:'+ styles[12] +';\">' + debt_statu[data[i]['info']['htm_contract.is_get_money']]+ '</td>' +
                    td_html +
                    '</tr>';
                timeArr = {};
            }

            \$('#dataList').html(html);
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
            custom.get_custom_info();
            custom.showReamrk();
            cs.getNodes([279,161]);
             //改变收款状态
            changeGatheringStatu('/api/api_finance/qklist');
            if(cs.getNodes([161],true)){
                sk(url,data);
            }
            // \$(\"#dataList td[data-status='0'],td[data-status='3']\").click(function () {
            //     showMark('#editbiaodan');

            // })
        }
\t\t\$('.myFilter').click(function() {
\t\t\tvar type = \$(this).attr('data-kind');
\t\t\tlayui.use('layer', function() {
\t\t\t\tvar layer = layui.layer;
\t\t\t\tlayer.confirm('确认发送短信么？', function(index) {
\t\t\t\t\tvar num = 0;
\t\t\t\t\tvar today = new Date(); 
\t\t\t\t\tvar calData = [];
\t\t\t\t\t
\t\t\t\t\t\$('#dataList').find('input[type=checkbox]').each(function(i) {
\t\t\t\t\t\tif(\$(this).is(':checked')) {
\t\t\t\t\t\t\tnum++;
\t\t\t\t\t\t\t//id += ','+ \$(this).parents('tr').attr('customer-id');
\t\t\t\t\t\t\tcalData.push({
\t\t\t\t\t\t\t\tcustomer_id: \$(this).parents('tr').attr('customer-id'),
\t\t\t\t\t\t\t\tname: \$(this).parents('td').next().next().find('.customerDetail').html(),
\t\t\t\t\t\t\t\tmoney: \$(this).parents('tr').attr('not_get_money'),
\t\t\t\t\t\t\t\tdate: \$(this).parents('td').siblings('[data-num=4]').html(),
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\tif(num == 0) {
\t\t\t\t\t\tykp.prompt('请选择再发送');
\t\t\t\t\t} else {
\t\t\t\t\t\t//console.log(JSON.stringify(calData));return ;
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: \"/api/api_common/send_multi_customer\",
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\ttype: type,
\t\t\t\t\t\t\t\tparam: JSON.stringify(calData),
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('发送成功');
\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t});
\t\t\t})
\t\t});
\t\t\$('.myFilter2').click(function() {
\t\t\tvar type = \$(this).attr('data-kind');
\t\t\t
\t\t\tlayui.use('layer', function() {
\t\t\t\tvar layer = layui.layer;
\t\t\t\tlayer.confirm('确认发送短信么？', function(index) {
\t\t\t\t\tvar num = 0;
\t\t\t\t\tvar today = new Date(); 
\t\t\t\t\tvar calData = [];
\t\t\t\t\t
\t\t\t\t\t\$('#datalist2').find('input[type=checkbox]').each(function(i) {
\t\t\t\t\t\tif(\$(this).is(':checked')) {
\t\t\t\t\t\t\tnum++;
\t\t\t\t\t\t\t//id += ','+ \$(this).parents('tr').attr('customer-id');
\t\t\t\t\t\t\tcalData.push({
\t\t\t\t\t\t\t\tcustomer_id: \$(this).parents('tr').attr('customer-id'),
\t\t\t\t\t\t\t\tname: \$(this).parents('td').next().next().find('.customerDetail').html(),
\t\t\t\t\t\t\t\tmoney: \$(this).parents('tr').attr('not_get_money'),
\t\t\t\t\t\t\t\tdate: \$(this).parents('td').siblings('[data-num=6]').html(),
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\tif(num == 0) {
\t\t\t\t\t\tykp.prompt('请选择再发送');
\t\t\t\t\t} else {
\t\t\t\t\t\t//console.log(JSON.stringify(calData));return ;
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: \"/api/api_common/send_multi_customer\",
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\ttype: type,
\t\t\t\t\t\t\t\tparam: JSON.stringify(calData),
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('发送成功');
\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t});
\t\t\t})
\t\t});
\t\t\$('.plSp').click(function() {
\t\t\t
\t\t})

        //添加 弹出层
        // \$('.add_item').click(function () {
        //     showMark('.popup_add');

        //     time_plug();
        // });
    })
</script>";
    }

    public function getTemplateName()
    {
        return "admin/financialManagement/lackOfrecord.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  876 => 853,  873 => 852,  871 => 851,  19 => 1,);
    }
}
/* <style type="text/css">*/
/*     #templateBox {*/
/*         padding-top: 0;*/
/*     }*/
/*     */
/*     #templateBox .tab_kind .active {*/
/*         background: #e1e7ed;*/
/*     }*/
/* */
/*     #templateBox .tab_kind a {*/
/*         text-decoration: none;*/
/*     }*/
/* */
/*     #templateBox td {*/
/*         border-top: 1px solid #ddd;*/
/*         border-bottom: 1px solid #ddd;*/
/*     }*/
/* */
/*     #templateBox .unite-label {*/
/*         width: 120px;*/
/*         text-align: right;*/
/*     }*/
/* */
/*     #dynamic-table1 td, #dynamic-table1 th {*/
/*         border: 1px solid #ddd;*/
/*     }*/
/* */
/*     #dynamic-table1 {*/
/*         border-collapse: collapse;*/
/*     }*/
/*     #height_search1 label,#height_search label{*/
/*         width: 88px;*/
/*         text-align: right;*/
/*         font-weight: normal;*/
/*     }*/
/*      #height_search1,#height_searc{*/
/*         padding:20px 0;*/
/*      }*/
/*      #heightsearch1 input,#height_search1 input{*/
/*         width: 180px;*/
/*     }*/
/*     #templateCon label{*/
/*         width:72px;*/
/*     }*/
/*     .modal-dialog{*/
/*     	margin-top:20%;*/
/*     	margin-left: 46%;*/
/*     }*/
/* </style>*/
/* <div class="widget-main">*/
/*     <div class="row">*/
/*         <div class="kind">*/
/*             <ul>*/
/*                 <li class="_billings now">记账订单欠款</li>*/
/*                 <li class="_others">其他订单欠款</li>*/
/*             </ul>*/
/*             <!-- <div id="tspage" style="border: 0px red solid; width: 480px;height: 30px;display:none;"><a id="go_" href="javascript:void(0)" >有部分其他欠款数据,点击前往</a><a href="javascript:;" class="close_ts" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a></div> -->*/
/*         </div>*/
/*             */
/*         <div class="tab-pane" id="tab-pane1">*/
/*             <div class="row" id="topTool" style="position:relative;" >*/
/*                 <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                     <input type="text" pts=0 sear="khm_customer.name" placeholder="企业名称"/>*/
/*                 </div>*/
/*                 <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                     <input type="text" pts=0 sear="khm_customer.customer_num" placeholder="客户编码"/>*/
/*                 </div>*/
/*                  <!-- <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                     <input type="text" pts=0 sear="jzm_service_info.time" placeholder="请输入年份"/>*/
/*                 </div> -->*/
/*                 <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                     <button class="_search btn btn-info btn-sm" title="搜索">*/
/*                         <i class="fa fa-search"></i>*/
/*                     </button>*/
/*                 </div>*/
/*                 <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                     <button id="heightsearch"  title="高级搜索" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/*                         <i class="fa fa-filter"></i>*/
/*                     </button>*/
/*                 </div>*/
/*                 <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                     <button  type="button" title="刷新" class="flush btn btn-info btn-sm" style="background-color: #32CD32 !important;">*/
/*                         <i class="fa fa-refresh"></i>*/
/*                     </button>*/
/*                 </div>*/
/*                 <div class="col-sx-4" style=" float: left;margin-right: 5px; margin-bottom:5px;">*/
/* 					<div id="filterBtns" style="display:inline-block;width:382px;height: 36px">*/
/* 						<a href="#" class="" style="line-height:32px;*/
/* 						background: #E6E6E6;" data-kind="0"> 发送短信 </a>*/
/* 						<a href="#" class="myFilter" style="line-height:32px" data-kind="账期完成"> 帐期完成</a>*/
/* 						<a href="#" class="myFilter" style="line-height:32px" data-kind="暂停服务通知"> 暂停服务通知</a>*/
/* 						<a href="#" class="myFilter" style="line-height:32px" data-kind="严重欠费通知"> 严重欠费通知 </a>*/
/* 					</div>*/
/* 				</div>*/
/*                 <div id="heightsearch1" class="col-sx-12" style="margin-top:30px;width:100%;position: absolute; background: #fff;padding: 20px 0px; display: none;z-index:1042;">*/
/*                     <div class="row">*/
/*                         <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                             <label>年份</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                                 <option> > </option>*/
/*                                 <option> &lt; </option>*/
/*                             </select>*/
/*                             <select style="width: 180px" gjs=5 sear="year" data-year="true"></select>*/
/*                         </div>*/
/*                         <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                             <label>月份</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                                 <option> > </option>*/
/*                                 <option> &lt; </option>*/
/*                             </select>*/
/*                             <select gjs=5 sear="month" style="width:180px;">*/
/*                                 <option value=""> 请选择 </option>*/
/*                                 <option value="01">1月</option>*/
/*                                 <option value="02">2月</option>*/
/*                                 <option value="03">3月</option>*/
/*                                 <option value="04">4月</option>*/
/*                                 <option value="05">5月</option>*/
/*                                 <option value="06">6月</option>*/
/*                                 <option value="07">7月</option>*/
/*                                 <option value="08">8月</option>*/
/*                                 <option value="09">9月</option>*/
/*                                 <option value="10">10月</option>*/
/*                                 <option value="11">11月</option>*/
/*                                 <option value="12">12月</option>*/
/*                             </select>*/
/*                         </div>*/
/*                         <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                             <label>企业名称</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                             </select>*/
/*                             <input type="text" gjs=0 sear="khm_customer.name" />*/
/*                         </div>*/
/*                         <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                             <label>客户编码</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                             </select>*/
/*                             <input type="text" gjs=0 sear="khm_customer.customer_num">*/
/*                         </div>*/
/*                         <div class="col-sx-4" style="float:left; margin-bottom:5px;">*/
/*                             <label>仓位</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                             </select>*/
/*                              <select gjs=6 sear="jzm_service_info.customer_id" class="cw" data-type="gj" style="width:180px;">*/
/* 					</select>*/
/*                           <!--  <input type="text" gjs=6 sear="jzm_service_info.customer_id ">-->*/
/*                         </div>*/
/*                          <div class="col-sx-4" style="float:left; margin-bottom:5px;">*/
/*                             <label>订单状态</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                             </select>*/
/*                              <select gjs=0 sear="htm_contract.status"  data-type="gj" style="width:180px;">*/
/*                              	<option value=""> 请选择</option>*/
/*                              	<option value="0"> 未激活</option>*/
/*                              	<option value="1"> 已激活</option>*/
/*                              	<option value="2"> 已挂起</option>*/
/*                              	<option value="3"> 已结束</option>*/
/*                              	<option value="4"> 已作废</option>*/
/* 							</select>*/
/*                           <!--  <input type="text" gjs=6 sear="jzm_service_info.customer_id ">-->*/
/*                         </div>*/
/*                         <div class="col-sx-4" style="float:left; margin-bottom:5px;">*/
/*                             <label>订单号</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                             </select>*/
/*                             <input type="text" gjs=0 sear="htm_contract.contract_code" />*/
/*                             <!--  <input type="text" gjs=6 sear="jzm_service_info.customer_id ">-->*/
/*                         </div>*/
/*                         <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                             <label>订单期限 </label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                                 <option> > </option>*/
/*                                 <option> &lt; </option>*/
/*                             </select>*/
/*                              <div class="input-group"  style="display: inline-flex; width: 180px;">*/
/* 							<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 							<input class="form-control" type="text"  data-status="rangtime" gjs=0 sear="htm_contract.start_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 						</div>*/
/*                             <!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/*                                 <input class="date-timepicker1" data-type="gj" data-status="time" gjs=0 sear="htm_contract.start_time" style="height: 30px; width: 150px;padding:5px;">*/
/*                                 <span class="input-group-addon" style="width:30px;height:30px;">*/
/*                                         <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                     </span>*/
/*                             </div>-->*/
/*                         </div>*/
/*                         <!--<div class="col-sx-4" style="float:left; margin-bottom:5px;">*/
/*                             <label>欠费月份</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                                 <option> > </option>*/
/*                                 <option> &lt; </option>*/
/*                             </select>*/
/*                             <input type="text" gjs=0 sear="jzm_service_info.overdue" data-type="gj">*/
/*                         </div>-->*/
/*                         <!--<div class="col-sx-4" style="float:left; margin-bottom:5px;">*/
/*                             <label>欠服务费</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                                 <option> > </option>*/
/*                                 <option> &lt; </option>*/
/*                             </select>*/
/*                             <input type="text" gjs=8>*/
/*                         </div>-->*/
/*                         <div class="col-sx-4" style="float:left; margin-bottom:5px;">*/
/*                             <label>欠账本费</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                                 <option> > </option>*/
/*                                 <option> &lt; </option>*/
/*                             </select>*/
/*                             <input type="text" gjs=11 sear="htm_contract.get_account_book" data-type="gj">*/
/*                         </div>*/
/*                         <div class="col-sx-4" style="float:left; margin-bottom:5px;">*/
/*                             <label>收款周期</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                             </select>*/
/*                             <select style="width: 180px;" data-type="gj" gjs=0 sear="htm_contract.get_cycle">*/
/*                                  <option value="">请选择</option>*/
/*                                  <option value="1">每月</option>*/
/*                                  <option value="3">季度</option>*/
/*                                  <option value="6">半年付</option>*/
/*                                  <option value="12">年付</option>*/
/*                             </select>*/
/*                         </div>*/
/*                         <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                             <label>收款状态</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                             </select>*/
/*                             <select gjs=1 sear="is_get_money" style="width:180px;">*/
/*                                 <option value=""> 请选择 </option>*/
/*                                 <option value="0">未完成</option>*/
/*                                 <option value="1">已放弃</option>*/
/*                                 <option value="2">已完成</option>*/
/*                             </select>*/
/*                         </div>*/
/*                         <!--<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                             <label>审批状态</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                             </select>*/
/*                             <select gjs=0 data-type="gj" sear="jzm_service_info.money_status" style="width:180px;">*/
/*                                 <option value=""> 请选择 </option>*/
/* 	                            <option value="0"> 未开始</option>*/
/* 								<option value="1"> 待审批</option>*/
/* 								<option value="2"> 已通过</option>*/
/* 								<option value="3"> 未通过</option>*/
/*                             </select>*/
/*                         </div>-->*/
/*                         <div class="col-sx-4" style="float:left; margin-bottom:5px;">*/
/*                             <label>欠服务费</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                                 <option> > </option>*/
/*                                 <option> &lt; </option>*/
/*                             </select>*/
/*                             <input type="text" gjs=11 sear="yq_money" data-type="gj">*/
/*                         </div>*/
/*                         <!-- <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                             <label>激活时间</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                                 <option> > </option>*/
/*                                 <option> &lt; </option>*/
/*                             </select>*/
/*                             <div class="input-group" style="display: inline-flex; width: 180px;">*/
/*                                 <input id="date-timepicker1" data-type="gj" data-status="time" gjs=0 sear="htm_contract.activate_time" class="form-control" style="height: 30px; width: 150pxpadding:5px;;">*/
/*                                 <span class="input-group-addon" style="width:30px;">*/
/*                                         <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                     </span>*/
/*                             </div>*/
/*                         </div>  -->*/
/*                         <div style="text-align:center;clear:both;padding-top:10px; ">*/
/*                             <button type="button" id="search1" class="_search1 btn btn-info btn-sm" style="width:180px;">*/
/*                                 查询*/
/*                             </button>*/
/*                              <button type="button" id="rest" class=" rest btn btn-info btn-sm" style="width:180px;">*/
/* 								                       重置*/
/* 								                    </button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="custom_table">*/
/*                 <table id="dynamic-table1">*/
/*                     <thead>*/
/*                     <tr class="thColor">*/
/*                     	<th class="center">*/
/* 							<label class="pos-rel">*/
/*                                <input type="checkbox" class="ace" onclick="cs.checkAll(this.checked)">*/
/*                                <span class="lbl"></span>*/
/*                            </label>*/
/* 						</th>*/
/*                         <th>操作</th>*/
/*                         <th data-num="1">企业名称</th>*/
/*                         <th data-num="2">客户编码</th>*/
/*                         <th data-num="3">仓位编码</th>*/
/*                         <th data-num="22">订单状态</th>*/
/*                         <th data-num="23">订单号</th>*/
/*                         <th data-num="4">订单期限</th>*/
/*                         <th data-num="5">欠费月份</th>*/
/*                         <th data-num="6" style="text-align: right !important;">欠服务费</th>*/
/*                         <th data-num="7" style="text-align: right !important;">欠账本费</th>*/
/*                         <th data-num="8">收款周期</th>*/
/*                         <th data-num="9">截止月份</th>*/
/*                         <th data-num="10">收款状态</th>*/
/*                         <th data-num="11" class="month" data-month></th>*/
/*                         <th data-num="12" class="month" data-month></th>*/
/*                         <th data-num="13" class="month" data-month></th>*/
/*                         <th data-num="14" class="month" data-month></th>*/
/*                         <th data-num="15" class="month" data-month></th>*/
/*                         <th data-num="16" class="month" data-month></th>*/
/*                         <th data-num="17" class="month" data-month></th>*/
/*                         <th data-num="18" class="month" data-month></th>*/
/*                         <th data-num="19" class="month" data-month></th>*/
/*                         <th data-num="20" class="month" data-month></th>*/
/*                         <th data-num="21" class="month" data-month></th>*/
/*                         <th data-num="22" class="month" data-month></th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody id="dataList">*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*             <div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/*                 <div align="left" style="padding-left: 15px; float: left; width: 10%;" class="_num"></div>*/
/*                 <!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/*                 <div class="pageBar pagination"></div>*/
/*                 <div align="right" style="float: right;  width: 10%;">*/
/*                     <select style="width: 100px;" class="changePageNum">*/
/*                         <option value="10">每页10条</option>*/
/*                         <option value="20">每页20条</option>*/
/*                         <option value="50">每页50条</option>*/
/*                         <option value="100">每页100条</option>*/
/*                         <option value="200">每页200条</option>*/
/*                     </select>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="tab-pane" id="tab-pane2" style="display:none;">*/
/*             <div class="row" style="position:relative;" id="topTool">*/
/*                 <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                     <input type="text" pts=0 sear="khm_customer.name" placeholder="企业名称"/>*/
/*                 </div>*/
/*                 <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                     <select style="width: 180px"  pts="4" sear="marketing_id" table="htm_contract_marketing" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/*                          <option value="">业务员</option>*/
/*                      </select>*/
/*                 </div>*/
/*                 <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                     <select style="width: 180px" pts="4" sear="one_fuze" table="htm_task" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/*                        <option value="">负责人</option>*/
/*                    </select>*/
/*                 </div>*/
/*                 <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                     <button class="_search btn btn-info btn-sm">*/
/*                         <i class="fa fa-search"></i>*/
/*                     </button>*/
/*                 </div>*/
/*                 <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                     <button id="height_search" class=" btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/*                         <i class="fa fa-filter"></i>*/
/*                     </button>*/
/*                 </div>*/
/*                 <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                     <button type="button" class="flush btn btn-info btn-sm" style="background-color: #32CD32 !important;">*/
/*                         <i class="fa fa-refresh"></i>*/
/*                     </button>*/
/*                 </div>*/
/*                 <div class="col-sx-4" style=" float: left;margin-right: 5px; margin-bottom:5px;">*/
/* 					<div id="filterBtns" style="display:inline-block;width:382px;height: 36px">*/
/* 						<a href="#" class="" style="line-height:32px;*/
/* 						background: #E6E6E6;" data-kind="0"> 发送短信 </a>*/
/* 						<a href="#" class="myFilter2" style="line-height:32px" data-kind="账期完成"> 帐期完成</a>*/
/* 						<a href="#" class="myFilter2" style="line-height:32px" data-kind="暂停服务通知"> 暂停服务通知</a>*/
/* 						<a href="#" class="myFilter2" style="line-height:32px" data-kind="严重欠费通知"> 严重欠费通知 </a>*/
/* 					</div>*/
/* 				</div>*/
/*                 <div id="height_search1" style="margin-top:30px;width:100%;position: absolute; background: #fff;display: none;z-index:1042;">*/
/*                     <div class="row">*/
/*                         <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                             <label>企业名称</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                             </select>*/
/*                             <input type="text" gjs=0 sear="khm_customer.name" />*/
/*                         </div>*/
/*                         <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                             <label>业务员</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                             </select>*/
/*                            <select style="width:180px" gjs="1" sear="marketing_id" table="htm_contract_marketing" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/*                                <option value=""> 请选择 </option>*/
/*                            </select>*/
/*                         </div>*/
/*                         <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                             <label>负责人</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                             </select>*/
/*                            <select style="width: 180px" gjs="1" sear="one_fuze" table="htm_task" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/*                                <option value=""> 请选择 </option>*/
/*                            </select>*/
/*                         </div>*/
/*                          <div class="col-sx-4" style="float:left; margin-bottom:5px;">*/
/*                             <label>订单状态</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                             </select>*/
/*                              <select gjs=0 sear="htm_contract.status"  data-type="gj" style="width:180px;">*/
/*                              	<option value=""> 请选择</option>*/
/*                              	<option value="0"> 未激活</option>*/
/*                              	<option value="1"> 已激活</option>*/
/*                              	<option value="2"> 已挂起</option>*/
/*                              	<option value="3"> 已结束</option>*/
/*                              	<option value="4"> 已作废</option>*/
/* 							</select>*/
/*                           <!--  <input type="text" gjs=6 sear="jzm_service_info.customer_id ">-->*/
/*                         </div>*/
/*                          <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                             <label>订单期限 </label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                                 <option> > </option>*/
/*                                 <option> &lt; </option>*/
/*                             </select>*/
/*                              <div class="input-group"  style="display: inline-flex; width: 180px;">*/
/* 							<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 							<input class="form-control" type="text"  data-status="rangtime" gjs=0 sear="htm_contract.start_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 						</div>*/
/*                             <!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/*                                 <input class="date-timepicker1" data-type="gj" data-status="time" gjs=0 sear="htm_contract.start_time" class="form-control" style="height: 30px; width: 150px;padding:5px;">*/
/*                                 <span class="input-group-addon" style="width:30px;height:30px;">*/
/*                                         <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                     </span>*/
/*                             </div>-->*/
/*                         </div>*/
/*                         <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                             <label> 服务项目 </label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                             </select>*/
/*                             <select style="margin: 12px !important;width: 180px" class="advandced-search3 select2-hidden-accessible" tabindex="-1" gjs="1" sear="product_id" table="htm_task" aria-hidden="true" data-type="gj" tabindex="-1">*/
/*                                 <option value="">请选择</option>*/
/*                             </select>*/
/*                         </div>*/
/*                        */
/*                         <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                             <label>收款状态</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                             </select>*/
/*                             <select gjs=1 sear="is_get_money" style="width:180px;">*/
/*                                 <option value=""> 请选择 </option>*/
/*                                 <option value="0">未完成</option>*/
/*                                 <option value="1">已放弃</option>*/
/*                                 <option value="2">已完成</option>*/
/*                             </select>*/
/*                         </div>*/
/*                         <!-- <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                             <label>合同状态</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                             </select>*/
/*                             <select gjs=0 sear="htm_contract.status" data-type="gj" style="width:180px;">*/
/*                                 <option value=""> 请选择 </option>*/
/*                                 <option value="0">未激活</option>*/
/*                                 <option value="1">已激活</option>*/
/*                                 <option value="2">已挂起</option>*/
/*                                 <option value="3">已结束</option>*/
/*                                 <option value="4">已作废</option>*/
/*                             </select>*/
/*                         </div> -->*/
/*                         <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                             <label>合同金额</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                                 <option> > </option>*/
/*                                 <option> &lt; </option>*/
/*                             </select>*/
/*                             <input type="text" gjs=0 sear="htm_contract.discount_total" data-type="gj">*/
/*                         </div>*/
/*                         <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                             <label>已收款金额</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                                 <option> > </option>*/
/*                                 <option> &lt; </option>*/
/*                             </select>*/
/*                             <input type="text" gjs=0 sear="htm_contract.get_money" data-type="gj">*/
/*                         </div>*/
/*                         <div class="col-sx-4" style="float:left; margin-bottom:5px;">*/
/*                             <label>欠费金额</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                                 <option> > </option>*/
/*                                 <option> &lt; </option>*/
/*                             </select>*/
/*                             <input type="text" gjs=8>*/
/*                         </div>*/
/*                          <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                             <label>订单号</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                             </select>*/
/*                             <input type="text" gjs=0 sear="htm_contract.contract_code">*/
/*                         </div>*/
/*                          */
/*                         <!-- <div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/*                             <label>合同时间</label>*/
/*                             <select>*/
/*                                 <option> = </option>*/
/*                                 <option> > </option>*/
/*                                 <option> &lt; </option>*/
/*                             </select>*/
/*                             <div class="input-group" style="display: inline-flex; width: 180px;">*/
/*                                 <input class="date-timepicker1" data-type="gj" data-status="time" gjs=0 sear="htm_contract.used_time" class="form-control" style="height: 30px; width: 150px;">*/
/*                                 <span class="input-group-addon" style="width:30px;height:30px;">*/
/*                                         <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                     </span>*/
/*                             </div>*/
/*                         </div> -->*/
/*                         <div style="text-align:center;clear:both;padding-top:10px; ">*/
/*                             <button type="button" id="search1" class="_search1 btn btn-info btn-sm" style="width:180px;">*/
/*                                 查询*/
/*                             </button>*/
/*                              <button type="button" id="rest1" class="rest btn btn-info btn-sm" style="width:180px;">*/
/* 								                       重置*/
/* 								                    </button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- <div></div> -->*/
/*             <div class="widget-body custom_table">*/
/*                 <table width="100%" id="dynamic-table2">*/
/*                     <thead>*/
/*                     <tr class="thColor">*/
/*                        <th class="center">*/
/* 							<label class="pos-rel">*/
/*                                    <input type="checkbox" class="ace" onclick="cs.checkAll(this.checked)">*/
/*                                    <span class="lbl"></span>*/
/*                                </label>*/
/* 						</th>*/
/*                         <th>操作</th>*/
/*                         <th data-num="1">企业名称</th>*/
/*                         <th data-num="2">业务员</th>*/
/*                         <th data-num="3">负责人</th>*/
/*                         <th data-num="4">服务项目</th>*/
/*                         <th data-num="11">订单状态</th>*/
/*                         <th data-num="5">合同时间</th>*/
/*                         <th data-num="6">收款状态</th>*/
/*                         <th data-num="7">合同金额</th>*/
/*                         <th data-num="8" style="text-align: right !important;">已收款金额</th>*/
/*                         <th data-num="9" style="text-align: right !important;">欠款金额</th>*/
/*                         <th data-num="10">订单号</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody id="datalist2">*/
/*                         <!-- <tr>*/
/*                             <td>*/
/*                                 <label class="pos-rel">*/
/*                                     <a href="#" class="_edit"><i class="red2"></i>编辑</a>*/
/*                                     <a href="#" class="_gathering"><i class="red2"></i>收款</a>*/
/*                                 </label>*/
/*                             </td>*/
/*                             <td data-num="1">牧牛网络</td>*/
/*                             <td data-num="2">于颖</td>*/
/*                             <td data-num="3">于颖</td>*/
/*                             <td data-num="4">注册商标</td>*/
/*                             <td data-num="5">无</td>*/
/*                             <td data-num="6">2017/8/14</td>*/
/*                             <td data-num="7">执行中</td>*/
/*                             <td data-num="8">1000</td>*/
/*                             <td data-num="9">500</td>*/
/*                             <td data-num="10">500</td>*/
/*                         </tr> -->*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*             <div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/*                 <div align="left" style="padding-left: 15px; float: left; width: 10%;" class="_num"></div>*/
/*                 <!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/*                 <div  class="pageBar pagination"></div>*/
/*                 <div align="right" style="float: right;  width: 10%;">*/
/*                     <select style="width: 100px;" class="changePageNum">*/
/*                         <option value="10">每页10条</option>*/
/*                         <option value="20">每页20条</option>*/
/*                         <option value="50">每页50条</option>*/
/*                         <option value="100">每页100条</option>*/
/*                         <option value="200">每页200条</option>*/
/*                     </select>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="poppup_edit" style="display:none;">*/
/*         <div class="widget-header widget-header-small" style="padding-left:0;">*/
/*             <span style="font-size:16px;" class="title">编辑</span>*/
/*         </div>*/
/*         <div style="margin-top:15px;">*/
/*             <label>已收款金额： </label>*/
/*             <input field="htm_contract.amount_beceived">*/
/*             <label>合同金额： </label>*/
/*             <input disabled class="unrequired">*/
/*         </div>*/
/*         <div style="margin-top:15px;">*/
/*             <label>欠款金额： </label>*/
/*             <input disabled field="htm_contract.outstanding_amount">*/
/*         </div>*/
/*         <div style="margin-top:15px;">*/
/*             <label style="float:left;">费用说明： </label>*/
/*            <textarea style="width:calc(100% - 77px);margin-left:5px;resize:none;" field="htm_contract.remark">*/
/*                */
/*            </textarea>*/
/*         </div>*/
/*         <div style="text-align:right;margin-top:15px;">*/
/*                 <span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/*                 <button class="sure_button add">*/
/*                         <i class="fa fa-check" aria-hidden="true"></i>*/
/*                         保存*/
/*                     </button>*/
/*             </div>*/
/*     </div>*/
/* */
/*     <div class="popup_getMoney" style="display:none">*/
/*         <div class="row">*/
/*             <form class="item_form" role="form">*/
/*                 <div class="form_data">*/
/*                     <label> 企业名称： </label>*/
/*                     <input type="text" disabled class="company_name"/>*/
/*                     <label> 订单： </label>*/
/*                     <input type="text" class="contract_code" field="contract_id" disabled/>*/
/*                 </div>*/
/*                 <div class="form_data" style="">*/
/*                    <label class="gathering_month"> 月份： </label>*/
/*                     <input type="text" style="width:79px" disabled class="begin gathering_month">*/
/*                     <span class="gathering_month">至</span>*/
/*                     <select  style="width:79px" class="end gathering_month"></select>*/
/*                      <label> 优惠： </label>*/
/*                     <input type="text" field="discount_money" value="" placeholder="0">*/
/* 					<!-- <label> 时间： </label>*/
/*                     <div class="input-group" style="display:inline-flex;">*/
/*                         <input id="date-timepicker1" type="text" class="form-control" field="get_time" style="width:150px;height:30px;">*/
/*                         <span class="input-group-addon" style="width: 30px;height: 30px;">*/
/*                             <i class="fa fa-clock-o bigger-110" style="position: relative;top: 2px;right: 2px;"></i>*/
/*                         </span>*/
/*                     </div> -->*/
/*                 </div>*/
/*                 <div class="form_data">*/
/*                     <label> 应收服务费： </label>*/
/*                     <input type="text" disabled field="cound_money" value="0.00">*/
/*                     <label> 实收服务费： </label>*/
/*                     <input type="text" field="get_money" value="0.00" placeholder="0.00">*/
/*                 </div>*/
/*                 <div class="form_data account_book" style="display: block">*/
/*                     <label> 欠账本费： </label>*/
/*                      <input type="text" disabled="" field="account_book" value="0.00" get-way="">*/
/*                       <label> 实收账本费： </label>*/
/*                      <input type="text"  field="get_account_book" value="" get-way="" placeholder="0.00">*/
/*                 </div>*/
/*                */
/*                 <div class="form_data">*/
/*                     <label> 收款方式： </label>*/
/*                     <select field="get_way">*/
/*                         <option value="">请选择</option>*/
/*                         <option value="1"> 现金 </option>*/
/*                         <option value="2"> 支付宝 </option>*/
/*                         <option value="3"> 微信 </option>*/
/*                         <option value="4"> 银行卡 </option>*/
/*                     </select>*/
/*                     <label> 收款账户： </label>*/
/*                     <select class="receivable_account" style="width:180px;" field="account">*/
/*                         <option value="">*/
/*                             请选择*/
/*                         </option>*/
/*                     </select>*/
/*                 </div>*/
/*                 <div class="form_data">*/
/*                     <label> 收款人： </label>*/
/*                     <select class="employee" field="receiver">*/
/*                         <option value="">*/
/*                             请选择员工*/
/*                         </option>*/
/*                     </select>*/
/*                      <label> 收款日期： </label>*/
/*                     <div class="input-group" style="display:inline-flex;">*/
/*                         <input id="date-timepicker1" type="text" class="form-control" field="get_time" style="width:150px;height:30px;">*/
/*                         <span class="input-group-addon" style="width: 30px;height: 30px;">*/
/*                             <i class="fa fa-clock-o bigger-110" style="position: relative;top: 2px;right: 2px;"></i>*/
/*                         </span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!--<div class="form_data">*/
/*                    */
/*                    */
/*                 </div>-->*/
/*                 */
/*                 <div class="form_data">*/
/*                     <label style="float:left;"> 收款备注： </label>*/
/*                     <textarea style="width:calc(100% - 77px);margin-left:5px;padding:5px;" field="remark"></textarea>*/
/*                 </div>*/
/*                     */
/*                 <div class="form_data">*/
/*                 <label style="float:left;margin-right:5px;"> 凭证上传： </label>*/
/*                 	*/
/*                        <!--<label class="" style="border:1px solid #000;line-height:68px;cursor: pointer; text-align: center;">*/
/*                             <img style="width:68px;display:none; height:68px;margin-right:5px;" src="">*/
/*                             <i class="fa fa-plus fa-2x" aria-hidden="true" style="position: relative;top: 5px;"></i>*/
/*                             <input type="file" class="uploadImage _decrease" style="position: absolute;opacity: 0;left:-9999px;">*/
/*                         </label>-->*/
/* 					<div class="" style="padding: 2px; margin-top: 20px;margin-left: 70px;">*/
/* 						<div id="fileBox">*/
/* */
/* 						</div>*/
/* 						<div id="uploadBox">*/
/* 							<button type="button" id="upload1" style="outline: none;background-color: #009688 !important; margin-top: 20px;" class="btn btn-info btn-sm position-relative">*/
/* 				                        上传文件*/
/* 				        	</button>*/
/* 						</div>*/
/* 					</div>*/
/*                 </div>*/
/*                 */
/*             </form>*/
/*             <div id="sendMsg_1" customer_id="" style="height: 30px;line-height: 40px; margin-top: 50px;">*/
/*                 <label style="margin-top:20px;width: 148px" >是否发送账期完成短信：</label>*/
/*                 <input type="radio" value="1" name="is_send_1">是*/
/*                 <input type="radio" value="2" name="is_send_1" checked="true">否*/
/*             </div>*/
/*             <div id="sendMsg_2" customer_id="" style="height: 30px;line-height: 40px">*/
/*                 <label style="margin-top:20px;width: 148px">是否发送合同续签短信：</label>*/
/*                 <input type="radio" value="1" name="is_send_2">是*/
/*                 <input type="radio" value="2" name="is_send_2" checked="true">否*/
/*             </div>*/
/*             <div id="sendMsg_3" customer_id="" style="height: 30px;line-height: 40px">*/
/*                 <label style="margin-top:20px;width: 148px">是否发送客户解约短信：</label>*/
/*                 <input type="radio" value="1" name="is_send_3">是*/
/*                 <input type="radio" value="2" name="is_send_3" checked="true">否*/
/*             </div>*/
/*             <div class="popup_button" style="margin-top: 60px">*/
/*                 <button class="sure_button btn btn-info btn-sm">*/
/*                     保存*/
/*                 </button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*    <!--  <div class="row" id="editbiaodan" style="display:none;width:678px;">*/
/*         <div class="col-sm-12" id="editBox">*/
/*             <div style="font-weight:bold;margin-bottom:10px;">编辑客户</div>*/
/*             <table width="100%" style="border:1px solid #ddd;border-collapse:collapse;margin-bottom:15px;">*/
/*                 <tr style=""*/
/*                 "">*/
/*                 <td>合同</td>*/
/*                 <td colspan="3">*/
/*                     <input style="width:100%">*/
/*                 </td>*/
/*                 </tr>*/
/*                 <tr style="">*/
/*                     <td>月份</td>*/
/*                     <td>*/
/*                         <input style="width:100%">*/
/*                     </td>*/
/*                     <td>至</td>*/
/*                     <td>*/
/*                         <input style="width:100%">*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr style="">*/
/*                     <td>应收</td>*/
/*                     <td colspan="3">*/
/*                         <input style="width:100%">*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr style="">*/
/*                     <td>实收</td>*/
/*                     <td colspan="3">*/
/*                         <input style="width:100%">*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr style="">*/
/*                     <td>优惠</td>*/
/*                     <td colspan="3">*/
/*                         <input style="width:100%">*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr style="">*/
/*                     <td>方式</td>*/
/*                     <td colspan="3">*/
/*                         <select id="cpeople" style="width:100%;">*/
/*                             <option value="0">现金</option>*/
/*                             <option value="1">网银</option>*/
/*                             <option value="2">支付宝</option>*/
/*                             <option value="3">微信</option>*/
/*                         </select>*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr style="">*/
/*                     <td>收款账户</td>*/
/*                     <td colspan="3">*/
/*                         <input style="width:100%">*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr style="">*/
/*                     <td>收款人</td>*/
/*                     <td>*/
/*                         <input style="width:100%">*/
/*                     </td>*/
/*                     <td>经办人</td>*/
/*                     <td>*/
/*                         <input style="width:100%">*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr style="">*/
/*                     <td>时间</td>*/
/*                     <td colspan="3">*/
/*                         <input style="width:100%">*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr style="">*/
/*                     <td>备注</td>*/
/*                     <td colspan="3">*/
/*                         <input style="width:100%">*/
/*                     </td>*/
/*                 </tr>*/
/*             </table>*/
/*             <div class="popup_button" style="margin-bottom:30px;margin-top:0;">*/
/*                 <button class="sure_button">*/
/*                     <i class="fa fa-check" aria-hidden="true"></i>*/
/*                     保存*/
/*                 </button>*/
/*             </div>*/
/*         </div>*/
/*     </div> -->*/
/* */
/*     {% include 'admin/customerDetail.html' %}*/
/*     {% include 'admin/mark.html' %}*/
/* </div>*/
/* */
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* <script type="text/javascript">*/
/*     $(function () {*/
/* 		var order ='khm_customer.customer_num desc' ;*/
/* 		var order1 ='khm_customer.customer_num desc';*/
/*         var page_size = 10;// 每页显示的条目数*/
/*         var qiektype = 0;*/
/*         var where = "";;//过滤条件  //htm_contract.status != 4*/
/* //      var filter = "htm_contract.status != 4";*/
/*         cs.dataRang();*/
/*         var _url = '';//请求路径*/
/*         var employees= [];//所有员工*/
/*         var service_product = [];//所有服务产品*/
/* 		var money = [];*/
/*         var param = {*/
/*             aid: ykp.getCookie('aid'),*/
/*             time: ykp.getCookie("time"),*/
/*             cid: ykp.getCookie("contract_id"),*/
/*             timestamp: '',*/
/*             flag: false*/
/*         };*/
/* 		var month2 ="";*/
/*         //跳转无需查询*/
/*         tspage();*/
/*         function tspage () {*/
/*             ykp.setCookie("filter", "");*/
/*             ykp.setCookie("where", "");*/
/*             if (ykp.getCookie('detailsId')&&ykp.getCookie('detailsId')!='') {*/
/*                 var conid=ykp.getCookie('detailsId');*/
/*                 var _url=ykp.getCookie('_url');*/
/*                 var data = {*/
/*                     page_size:page_size,*/
/*                     where:`htm_contract.id=${conid} and +${filter}`,*/
/*                     order: order,*/
/*                 }*/
/*                 getList_2(_url,data);*/
/*                 ykp.setCookie('detailsId','');*/
/*             }else if(ykp.getCookie('titleTask')&&ykp.getCookie('titleTask')!=''){*/
/*                 ykp.setCookie('titleTask','');*/
/*                 getList('/api/api_finance/qklist');*/
/*             }else{*/
/*                 getList('/api/api_finance/qklist');*/
/*             }*/
/*         }*/
/*         */
/*         //通用排序*/
/*         fn_sort()*/
/*         function fn_sort(){*/
/*             cs.general_sort({*/
/*                 url: qiektype == 0 ? '/api/api_finance/qklist' :'/api/api_finance/qk_other_list',*/
/*                 method: 'post',*/
/*                 data: {*/
/*                     filter:"",*/
/*                     page_size: page_size*/
/*                 },*/
/*                 pageBar: {*/
/*                     id: '.pageBar'*/
/*                 },*/
/*                 contentId:qiektype == 0 ? "#dataList" : "#dataList2",  //默认排序*/
/*                 initOrder:"",   //初始化sort*/
/*                 defaultOrder:"",*/
/*                 params:[{*/
/*                     id:qiektype == 0 ? "#dynamic-table1" : "#dynamic-table2",*/
/*                     field:qiektype == 0?["","","khm_customer.id","khm_customer.customer_num","pos_name","htm_contract.status","htm_contract.contract_code","htm_task.start_time","","","","","","htm_contract.is_get_money"]:["","","khm_customer.id","","","","htm_contract.status","start_time","htm_contract.is_get_money","htm_contract.discount_total","htm_contract.get_money","","htm_contract.contract_code"]*/
/*                 }]*/
/*             }, function(res, _sort_role) {*/
/*                 sort_role = _sort_role;*/
/*                 if(qiektype == 0){*/
/*                     addJzbsqkList('',res);*/
/*                 }else {*/
/*                     addQtxmqkList('',res);*/
/*                 }*/
/*             });*/
/*         }*/
/*         */
/*         function getList_2(url,data) {*/
/*             _url = url;//给_url赋值 便于在切换每页显示条目数时确定请求路径;*/
/*             var index = $('.kind').find('.now').index();*/
/*             var id = '#' + $('.tab-pane').eq(index).attr('id');*/
/*             advancedSearch(url,id);*/
/*             generalSearch(url);*/
/*             ykp.list({*/
/*                 url: url,*/
/*                 method: 'post',*/
/*                 data: data,*/
/*                 pageBar: {*/
/*                     id: '.pageBar'*/
/*                 },*/
/*                 loadList:function(res){*/
/*                    if(judgeData(res,url)){*/
/*                    	//生成月份表头*/
/* 					generateMonthTh($('#dynamic-table .thColor .month'),res['data']['months'],2);*/
/*                         if(url.indexOf('qklist') != -1){*/
/*                             addJzbsqkList(url,res);*/
/*                         }*/
/*                         if(url.indexOf('qk_other_list') != -1){*/
/*                             addQtxmqkList(url,res);*/
/*                         }*/
/*                     }*/
/*                 }*/
/*             });*/
/*         }*/
/*         */
/*         //获取所有服务产品*/
/*         ykp.doAjax({*/
/*             url:'/api/api_product/f7',*/
/*             method:'post',*/
/*             data:{*/
/*                 select:'ckm_product.id,ckm_product.name,ckm_product.type,ckm_product.price',*/
/*                 filter:'ckm_product.is_del <> 1'*/
/*             },*/
/*             success:function(res){*/
/*                 service_product = res.data;*/
/*                 $('.advandced-search3').select2({allowClear:true});*/
/*                  for(var i in service_product){*/
/*                     service_product[parseInt(service_product[i]['id'])] =service_product[i]['name'];*/
/*                     $('.advandced-search3').append(new Option(service_product[i]['name'],service_product[i]['id']));*/
/*                 }*/
/*             }*/
/*         });*/
/*         */
/*         cs.getAllCw1(function(option) {*/
/* 			$('#heightsearch1 .cw').html(option);*/
/* 			$('#heightsearch1 .cw').select2({*/
/* 				allowClear: true*/
/* 			})*/
/* 		})*/
/*         */
/*         //获取所有员工*/
/*         getEmployees();*/
/*         function getEmployees(){*/
/*             ykp.doAjax({*/
/*                 url: '/api/api_employees/f7',*/
/*                 method: 'post',*/
/*                 async: false,*/
/*                 data: {*/
/*                     select: 'bmm_employees.id,bmm_employees.name'*/
/*                 },*/
/*                 success: function(res) {*/
/*                     var data = res.data;*/
/*                      $('.advandced-search').select2({allowClear:true});*/
/*                     for(var i in data) {*/
/*                     	if(data[i]['name']) {*/
/*                         employees[data[i]['id']] = data[i]['name'];*/
/*                             $('.advandced-search').append(new Option(data[i]['name'],data[i]['id']));*/
/*                         }*/
/*                     }*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         //初始化页面数据,默认显示为记账报税欠款记录，默认每页显示10条数据*/
/*         */
/*         //切换每页显示的条目数*/
/*         changePagesize();*/
/*         function changePagesize(){*/
/*             $('.changePageNum').change(function() {*/
/*                 page_size = $(this).val();*/
/*                 ykp.setCookie('page_size', page_size);*/
/*                 getList(_url);*/
/*             })*/
/*         }*/
/* */
/*         cs.showHeightSearch('#heightsearch','#heightsearch1');*/
/*         cs.showHeightSearch('#height_search','#height_search1');*/
/* */
/*        /* //高级搜索弹出 | 隐藏*/
/*         advandedSearchShowOrHide();*/
/*         function advandedSearchShowOrHide(){*/
/*             $('.in').click(function(){*/
/*                 var index = $('.kind .now').index();*/
/*                 if($('._heightsearch').eq(index).hasClass('active')){*/
/*                     $('._heightsearch').eq(index).removeClass('active').css('z-index','');*/
/*                     $("._heightsearch1").eq(index).slideUp();*/
/*                 }*/
/*             });*/
/*             $('._heightsearch').click(function() {*/
/*                 var index = $('.kind .now').index();*/
/*                 if($(this).hasClass('active')) {*/
/*                     $('.in').removeClass('modal-backdrop');*/
/*                     $(this).removeClass('active').css('z-index','');*/
/*                     $("._heightsearch1").eq(index).slideUp();*/
/*                 } else {*/
/*                     $('.in').addClass('modal-backdrop');*/
/*                     $('._heightsearch1').eq(index).slideDown();*/
/*                     $(this).addClass('active').css('z-index','1041');*/
/*                     rest('.rest','._heightsearch1');*/
/*                 }*/
/*             })*/
/*         }*//* */
/* */
/* 		// function rest(el,element) {*/
/* 		// 	$(el).click(function() {*/
/* 		// 		$('._heightsearch1').find('input[gjs=0],select[gjs=0]').val('');*/
/* 		// 	})*/
/* 		// }*/
/*         */
/*         //高级搜索,url 请求路径*/
/*         function advancedSearch(_url,id){*/
/*             console.log(_url);*/
/*             var data = {*/
/*                 url:_url,*/
/*                 method:'post',*/
/*                 data:{*/
/*                     page_size:page_size,*/
/*                     order: order*/
/*                 }*/
/*             }*/
/*             var filtration = 'where';*/
/*             */
/*             if (_url.indexOf('qklist') == -1) {*/
/*                 filtration = 'filter';*/
/*             }*/
/* */
/*             cs.hSearch('._search1', data, filtration, 'haha', function(res,_where,month){*/
/*                 where = _where;*/
/*                 month2 = month;*/
/*                 var index = $('.kind .now').index();*/
/*                 $('.in').removeClass('modal-backdrop');*/
/*                 $("#heightsearch1,#height_search1").slideUp();*/
/*                 $("#heightsearch,#height_search").removeClass('active').css('z-index','');*/
/*                 //生成月份表头*/
/* 					generateMonthTh($('#dynamic-table .thColor .month'),res['data']['months'],2);*/
/*                 if(judgeData(res,_url)){*/
/*                     if(_url.indexOf('qklist') != -1) {*/
/*                         addJzbsqkList(_url,res);*/
/*                     }*/
/*                     if(_url.indexOf('qk_other_list') != -1) {*/
/*                         addQtxmqkList(_url,res);*/
/*                     }*/
/*                 }*/
/*             },'','','.pageBar');*/
/*         }*/
/* */
/* 		$('.flush').click(function(){*/
/*             var index = $(this).parents('.tab-pane').index();*/
/*             where = '';*/
/* 			$('[pts="0"]').val('');*/
/* 			$('[sear="khm_customer.customer_num"]').val('');*/
/* 			$('[sear="marketing_id"]').val('').trigger('change');*/
/* 			$('[sear="one_fuze"]').val('').trigger('change');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/*             if (index == 1) {*/
/*                 getList('/api/api_finance/qklist');*/
/*             }else{*/
/*                 getList('/api/api_finance/qk_other_list');*/
/*             }*/
/* 		})*/
/* */
/* */
/*         //普通搜索, url 请求路径*/
/*         function generalSearch(_url){*/
/*             var data = {*/
/*                 url:_url,*/
/*                 method:'post',*/
/*                 data:{*/
/*                     page_size:page_size,*/
/*                     order: order*/
/*                 }*/
/*             };*/
/*             var filtration = 'where';*/
/*             if (_url.indexOf('qklist') == -1) {*/
/*                 filtration = 'filter';*/
/*             }*/
/* */
/*             cs.doSearch('._search', data, filtration , 'haha', function(res,_where) {*/
/*             	//生成月份表头*/
/* 					generateMonthTh($('#dynamic-table .thColor .month'),res['data']['months'],2);*/
/*                 where = _where;*/
/*                  if(judgeData(res,_url)){*/
/*                     if(_url.indexOf('qklist') != -1){*/
/*                         addJzbsqkList(_url,res);*/
/*                     }*/
/*                     if(_url.indexOf('qk_other_list') != -1){*/
/*                         addQtxmqkList(_url,res);*/
/*                     }*/
/*                 }*/
/*             },'','','','.pageBar');*/
/*         }*/
/* */
/* */
/*       /*  //自定义table1*/
/*         cs.custorm_check('#dynamic-table1', '#dataList', false);*//* */
/* */
/*         //记账报税款项 | 其他项目款项   切换*/
/*         changeItem();*/
/*         function changeItem(){*/
/*             $('.kind').on('click', 'li', function () {*/
/*                 qiektype = $(this).index();*/
/*                 if ($(this).hasClass('now')) {*/
/*                     return;*/
/*                 }*/
/*                 fn_sort();*/
/*                 where = '';*/
/*     			$('[pts="0"]').val('');*/
/*     			$('[sear="khm_customer.customer_num"]').val('');*/
/*     			$('[sear="marketing_id"]').val('').trigger('change');*/
/*     			$('[sear="one_fuze"]').val('').trigger('change');*/
/*     			ykp.setCookie("filter", "");*/
/*     			ykp.setCookie("where", "");*/
/*     			*/
/*                 $(this).addClass('now').siblings().removeClass('now');*/
/*                 if ($(this).hasClass('_billings')) {*/
/*                     $('.tab-pane').hide();*/
/*                     $('.tab-pane').eq(0).show();*/
/*                     where = '';*/
/*                     getList('/api/api_finance/qklist');*/
/*                 }*/
/*                 if ($(this).hasClass('_others')) {*/
/*                     $('.tab-pane').hide();*/
/*                     $('.tab-pane').eq(1).show();*/
/*                    /* if($('.tab-pane').eq(1).find('#custom').length < 1){*/
/*                         //自定义table2*/
/*                         cs.custorm_check('#dynamic-table2', '#datalist2', false);*/
/*                     }*//* */
/*                     where = '';*/
/*                     getList('/api/api_finance/qk_other_list');*/
/*                 }*/
/* */
/* /**/
/*                 //通用排序*/
/* 				cs.general_sort({*/
/* 					url: '/api/api_finance/qk_other_list',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						filter:"",*/
/* 						page_size: page_size*/
/* 					},*/
/* 					pageBar: {*/
/* 						id: '.pageBar'*/
/* 					},*/
/* 					contentId:"#dataList",  //默认排序*/
/* 					initOrder:"",   //初始化sort*/
/* 					defaultOrder:"",*/
/* 					params:[{*/
/* 						id:"#dynamic-table1",*/
/* 						field:["","khm_customer.id","","","","htm_contract.status","","htm_contract.is_get_money","htm_contract.discount_total","htm_contract.get_money","htm_contract.total_monry","htm_contract.contract_code"]*/
/* 					}]*/
/* 				}, function(res, _sort_role) {*/
/* 					sort_role = _sort_role;*/
/* 					addQtxmqkList(res);*/
/* 				});*//* */
/*             });*/
/*         }*/
/* */
/*         //所有日期，时间，时间范围等插件*/
/*         time_plug();*/
/*         function time_plug(){*/
/*             //月份*/
/*             $('#templateCon .select2').css('width','414px').select2({allowClear:true})*/
/*             $('#select2-multiple-style .btn').unbind('click').on('click', function(e){*/
/*                 var target = $(this).find('input[type=radio]');*/
/*                 var which = parseInt(target.val());*/
/*                 if(which == 2) $('.select2').addClass('tag-input-style');*/
/*                  else $('.select2').removeClass('tag-input-style');*/
/*             });*/
/* */
/*             //时间范围*/
/*             // $('input[name=date-range-picker],#templateCon input[name=date-range-picker]').daterangepicker({*/
/*             //     'applyClass': 'btn-sm btn-success',*/
/*             //     'cancelClass': 'btn-sm btn-default',*/
/*             //     locale: {*/
/*             //         format: 'YYYY-MM-DD',  */
/*             //         daysOfWeek: ['日', '一', '二', '三', '四', '五', '六'],  */
/*             //         monthNames: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],*/
/*             //         applyLabel: '确认',*/
/*             //         cancelLabel: '取消'*/
/*             //     }*/
/*             // })*/
/* */
/*             //时间*/
/*             if (!ace.vars['old_ie']) {*/
/*                 $('.date-timepicker1,#templateCon #date-timepicker1').datetimepicker({*/
/*                        format: 'YYYY-MM-DD',//use this option to display seconds*/
/*                     icons: {*/
/*                         time: 'fa fa-clock-o',*/
/*                         date: 'fa fa-calendar',*/
/*                         up: 'fa fa-chevron-up',*/
/*                         down: 'fa fa-chevron-down',*/
/*                         previous: 'fa fa-chevron-left',*/
/*                         next: 'fa fa-chevron-right',*/
/*                         today: 'fa fa-arrows ',*/
/*                         clear: 'fa fa-trash',*/
/*                         close: 'fa fa-times'*/
/*                     }*/
/*                 }).next().on(ace.click_event, function () {*/
/*                     $(this).prev().focus();*/
/*                 });*/
/*             }*/
/*         }*/
/* */
/*         //判断是否有返回的数据*/
/*         function judgeData(res,url){*/
/*             if(res.data.items == "") {*/
/*                 setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/*                 var ele = '';*/
/*                 if(url.indexOf('qklist') != -1){*/
/*                     ele = '#dataList';*/
/*                 }*/
/*                 if(url.indexOf('qk_other_list') != -1){*/
/*                     ele = '#datalist2';*/
/*                 }*/
/*                 $(ele).html('<tr><td colspan="30"><div class="table-actions clearfix"><div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/*                 return false;*/
/*             }*/
/*             return true;*/
/*         }*/
/*         */
/*         */
/*         //生成月份表头：el 所有月份表头，months:开始、结束月份*/
/* 		function generateMonthTh(el,months,type){*/
/* 			if($('.kind').find('.now').index() == 1){*/
/*                 if($('#tab-pane2').find('.custom').length < 1) {*/
/*                     cs.custorm_check('#dynamic-table2', '#datalist2', false);*/
/*                 }*/
/* 				return false;*/
/* 			}*/
/* 			var start = months ? {year:parseInt(months['start'].substring(0,4)),month:parseInt(months['start'].substring(4))} :"";*/
/* 			var end = {year:parseInt(months['end'].substring(0,4))};*/
/* 			var El = type == 2 ? '#dynamic-table1' : '#dynamic-table2';*/
/* 			var start_month;*/
/* 			$(El+' .thColor .month').each(function(i,e){*/
/* 				start_month = i + start['month'];*/
/* 				if(start_month > 12){*/
/* 					start_month = start_month - 12;*/
/* 					$(this).text(end['year'] + '' + (start_month  < 10 ? '0' + start_month : start_month )).attr('month',end['year'] + '' + (start_month  < 10 ? '0' + start_month : start_month ));*/
/* 					return true;*/
/* 				}*/
/* 				$(this).text(start['year'] + '' + (start_month < 10 ? '0' + start_month : start_month)).attr('month',start['year'] + '' + (start_month < 10 ? '0' + start_month : start_month));*/
/* 			});*/
/* */
/* 			//自定义列表*/
/*             if($('#tab-pane1').find('.custom').length < 1) {*/
/*                 cs.custorm_check('#dynamic-table1', '#dataList', false);*/
/*             }*/
/* 		};*/
/* */
/*         //根据url 获取记账报税 | 其他项目欠款数据*/
/*         function getList(url) {*/
/*         	cs.last_year_month();*/
/*             _url = url;//给_url赋值 便于在切换每页显示条目数时确定请求路径;*/
/*             var index = $('.kind').find('.now').index();*/
/*             var id = '#' + $('.tab-pane').eq(index).attr('id');*/
/*             advancedSearch(url,id);*/
/*             generalSearch(url);*/
/*             var Order = url == '/api/api_finance/qk_other_list' ? order : order1;*/
/*             var data = {*/
/*                     page_size:page_size,*/
/*                     where:where,*/
/*                     order: Order,*/
/*                };*/
/*             if(month2){*/
/* 				data.month2 = month2;*/
/* 			}*/
/*             ykp.list({*/
/*                 url: url,*/
/*                 method: 'post',*/
/*                 data: data,*/
/*                 pageBar: {*/
/*                     id: '.pageBar'*/
/*                 },*/
/*                 loadList:function(res){*/
/*                 	//生成月份表头*/
/* 					generateMonthTh($('#dynamic-table .thColor .month'),res['data']['months'],2);*/
/*                    if(judgeData(res,url)){*/
/*                         if(url.indexOf('qklist') != -1){*/
/*                             addJzbsqkList(url,res);*/
/*                         }*/
/*                         if(url.indexOf('qk_other_list') != -1){*/
/*                             addQtxmqkList(url,res);*/
/*                         }*/
/*                     }*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         //其他项目欠款数据加载到table中*/
/*         function addQtxmqkList(url,res){*/
/*             var data = res.data.items;*/
/*             var salesman_id = [];//业务人员id*/
/*             var salesman = [];//业务人员*/
/*             var task = [];//任务*/
/*             var task_detail = {};//任务详情*/
/* */
/*             //欠款状态*/
/*             var debt_statu = ['未完成','已放弃','已完成'];*/
/* 			var status = ['未激活','已激活','已挂起','已结束','已作废'];*/
/*             var html = [];*/
/*             var styles = [];*/
/*             $('#dynamic-table2 th').each(function(i,e){*/
/*                 styles.push($(this).css('display'));*/
/*             });*/
/*             // var contractStatus = ['未执行','执行中','已挂起','已结束'];//合同状态*/
/*             $('._others').addClass('now').siblings().removeClass('now');*/
/*             $('.tab-pane').hide();*/
/*             $('.tab-pane').eq(1).show();*/
/*             */
/*             money = [];*/
/*             for(var i in data){*/
/*                 task_detail['product'] = [];*/
/*                 task = data[i]['task'];*/
/* */
/*                 salesman_id = data[i]['market'];*/
/*                 for(var k in salesman_id){*/
/*                     salesman.push(salesman_id[k]['info']['name']);*/
/*                 }*/
/* */
/*                 for(var k in task){*/
/*                     if(k == 0){*/
/*                         task_detail['start_time'] = task[k]['start_time'];*/
/*                         task_detail['end_time'] = task[k]['end_time'];*/
/* */
/*                         if(task[k]['staff'].length > 0){*/
/*                             task_detail['leader'] = task[k]['staff'][k]['user']['name'] ? task[k]['staff'][k]['user']['name'] : '';*/
/*                         }*/
/*                     }*/
/* */
/*                     if(k != 0){*/
/*                         task_detail['start_time'] = task_detail['start_time'] >= task[k]['start_time'] ? task[k]['start_time'] : task_detail['start_time'];*/
/*                         task_detail['end_time'] = task_detail['end_time'] > task[k]['end_time'] ? task_detail['end_time'] : task[k]['end_time'];*/
/*                     }*/
/*                     task_detail['product'].push(task[k]['productName']);*/
/*                 }*/
/*                 money.push({*/
/*             		0:data[i]['htm_contract.discount_total'],*/
/*             		1:data[i]['htm_contract.get_money']*/
/*             	})*/
/* */
/*                 html.push(`*/
/*                     <tr data-id="${data[i]['htm_contract.id']}" customer-id="${data[i]['htm_contract.customer_id']}" zbmoney="0" is_get_money="${data[i]['htm_contract.is_get_money']}"   not_get_money="${eval(data[i]['htm_contract.total_monry'] + '-' + data[i]['htm_contract.get_money'])}">*/
/*                     	<td class="center"><label class="pos-rel"><input type="checkbox" name="check" class="ace"><span class="lbl"></span></label></td>    */
/*                     	<td class="gathering_statu">*/
/*                             <a contentauthority="279" class="pos-rel" style="display:${ data[i]['htm_contract.is_get_money'] == 0 ? 'inline-block' : 'none' }"> */
/*                                 <span style="cursor: pointer" class="lbl give_up btRed" title="放弃"><i class="fa fa-times-circle"></i></span>*/
/*                             </a>*/
/*                             <a contentauthority="279" class="pos-rel"  style="display:${ data[i]['htm_contract.is_get_money'] == 0 ? 'inline-block' : 'none' }"> */
/*                                 <span style="cursor: pointer;background-color: #00c0ef !important;" class="lbl finish btGreen" title="完成"><i class="fa fa-check-circle-o"></i></span>*/
/*                             </a>*/
/*                             <a class="pos-rel _gathering" style="border:none; display:${ data[i]['htm_contract.is_get_money'] == 0 ? 'inline-block' : 'none' }" money_status="${data[i]['htm_contract.money_status']}" contentAuthority="161"><span class="lbl btGreen " title="收款"><i class="fa fa-plus"></i></span>*/
/*                             </a>*/
/*                             */
/*                              <a contentauthority="279" style="display:${ data[i]['htm_contract.is_get_money'] != 0 ? 'inline-block' : 'none' }" class="pos-rel" class="pos-rel" >*/
/*                                 <span style="cursor: pointer" class="lbl no_give_up btOrange" title="撤销"><i class="fa fa-rotate-left"></i></span>*/
/*                             </a>*/
/*                         </td>*/
/*                        */
/*                         <td data-num="1" style="display:${styles[1]}" data-cid="${data[i]['khm_customer.id']}">*/
/*                             <a class="pos-rel customerDetail">${data[i]['khm_customer.name']}</a>*/
/*                            <label class="pos-rel">*/
/* 				 				<i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}" data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i>*/
/* 			 				 </label>*/
/*                         </td>*/
/*                         <td data-num="2" style="display:${styles[2]}">${salesman.join(',')}</td>*/
/*                         <td data-num="3" style="display:${styles[3]}">${task_detail['leader'] }</td>*/
/*                         <td data-num="4" style="display:${styles[4]}">${task_detail['product'].join(',')}</td>*/
/*                         <td data-num="11" style="display:${styles[5]}">${status[data[i]['htm_contract.status']]}</td>*/
/*                         <td data-num="5" style="display:${styles[6]}">${task_detail['start_time'] != '0' ? (cs.getNowTime(task_detail['start_time']) +'~'+ cs.getNowTime(task_detail['end_time'])) : ''} </td>*/
/*                         <td data-num="6" style="display:${styles[7]}">${debt_statu[data[i]['htm_contract.is_get_money']]}</td>*/
/*                         <td data-num="7" style="display:${styles[8]};text-align: right !important; ">${data[i]['htm_contract.discount_total']}</td>*/
/*                         <td data-num="8" style="display:${styles[9]};text-align: right !important; ">${data[i]['htm_contract.get_money']}</td>*/
/*                         <td data-num="9" style="display:${styles[10]};text-align: right !important; ">${eval(data[i]['htm_contract.total_monry'] + '-' + data[i]['htm_contract.get_money']).toFixed(2)}</td>*/
/*                         <td data-num="10" style="display:${styles[11]}">${data[i]['htm_contract.contract_code']}</td>*/
/*                     </tr>`);*/
/*                     salesman_id = [];//业务人员id*/
/*                     salesman = [];//业务人员*/
/*                     task = [];//任务*/
/*                     task_detail = {};//任务详情*/
/*             }*/
/* */
/*             $('#datalist2').html(html.join(''));*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/* */
/*             cs.getNodes([161,279]);*/
/* */
/*             //改变收款状态*/
/*             changeGatheringStatu('/api/api_finance/qk_other_list');*/
/* */
/*             sk(url,data);*/
/*             custom.get_custom_info();*/
/*             custom.showReamrk();      */
/*            */
/*         }*/
/*                                     */
/*         //打开收款*/
/*         function sk(url,data){*/
/*             //收款*/
/*             $('._gathering').unbind('click').click(function(){*/
/*             	var nodes = ykp.getCookie('nodes').split(',');*/
/*             	if(nodes.indexOf("161") == -1) {*/
/* 	              	ykp.prompt('你没有权限');*/
/* 	              	return false;*/
/* 	            }*/
/*             	if($(this).parents('tr').attr('is_get_money') != 0){*/
/*             		ykp.prompt('该订单已完成或已放弃');*/
/*             		return false;*/
/*             	}else{*/
/*             		if($(this).attr('money_status') == '2' && $(this).attr('data-time')){*/
/* 	                    ykp.prompt('该月份已收款');*/
/* 	                    return;*/
/* 	               }*/
/*             	}*/
/*                 */
/*                 if($(this).attr('money_status') == '1'){*/
/*                     ykp.prompt('审批中，请等待');*/
/*                     return;*/
/*                 }*/
/*                 var _index = $(this).parents('tr').index();*/
/*                 var _data = data[_index];*/
/*                 if($(this).hasClass('sk')){*/
/*                 	var begin = $(this).parents('tr').attr('max_month');//收款开始时间*/
/* 	                    if(!begin){*/
/* 	                    	ykp.prompt('此订单的最大月份已收款');*/
/* 	                    	return false;*/
/* 	                    }*/
/*                 }*/
/*                 showMark('.popup_getMoney');*/
/*                 $('#showBox .title').text('收款');*/
/*                 var index = $('.kind .now').index();*/
/*                 //长期合同显示账本信息，并将应收账本费添加进账本费中*/
/*                 if(index == 0){*/
/*                     $('#templateCon .account_book').show();*/
/*                     $('#templateBox').find('input[field=account_book]').val((_data.info['htm_contract.account_book'] - _data.info['htm_contract.get_account_book']).toFixed(2));*/
/*                 }else {*/
/*                 	$('.account_book').hide();*/
/*                 }*/
/*                 $('#templateCon').data('flag','1');*/
/*                 $('#showBox .close_get').unbind('click').click(function(){*/
/*                     $('#templateCon').data('flag','2');*/
/*                     cs.close();*/
/*                 });*/
/* */
/*                 //上传图片*/
/*                 uploadImg();*/
/*                 */
/*                 cs.upload1({*/
/* 					el: "#templateBox #upload1",*/
/* 					ael: "#templateBox #fileBox"*/
/* 				})*/
/* */
/*                 // var months = [];*/
/*                 // $(this).parents('tr').find('._gathering').not('[money_status="1"],[money_status="3"]').each(function(i){*/
/*                 //     var month = parseInt($(this).attr('data-num'))-6;*/
/*                 //     if (month<10) {*/
/*                 //         month = '0'+month;*/
/*                 //     }*/
/*                 //     months.push('<option value="' + $(this).attr('data-time') +'">' + month+'月'+ '</option>');*/
/*                 // })*/
/*                 // $('#templateCon #state').append(months.join(' '));*/
/* */
/*                 //一次性订单隐藏月份，长期订单显示月份*/
/* */
/*                 if(index == 0) {*/
/*                 	if($(this).hasClass('sk')){*/
/*                 		var begin = $(this).parents('tr').attr('max_month');//收款开始时间*/
/* 	                    begin = [parseInt(begin.substring(0,4)),parseInt(begin.substring(4))];*/
/*                 	}else{*/
/*                 		var begin = $(this).attr('data-time');//收款开始时间*/
/* 	                    */
/* 	                    begin = [parseInt(begin.substring(0,4)),parseInt(begin.substring(4))];*/
/* 	                   $('#templateBox .end').prop('disabled',true);*/
/*                 	}*/
/*                 	*/
/*                    	var end = cs.getNowTime(_data['info']['htm_task.end_time']);//合同结束时间*/
/* 					end = end.substring(0,end.lastIndexOf('-')).split('-');*/
/*                     var year_interval = parseInt(end[0]) - begin[0];//  间隔*/
/*                   */
/*                     var _months = year_interval * 12 + parseInt(end[1]) - begin[1] + 1;//月份间隔*/
/* */
/*                     var months_html = [];//截止收款月份html*/
/* */
/*                     var month = '';//收款开始到合同结束期间的每一个月份*/
/*                     for(var i = 0;i < _months;i++){*/
/*                         month = (parseInt((begin[1] + i - 1) / 12)) + begin[0] + '' + ((begin[1] + i) % 12 == 0 ? 12 : ((begin[1] + i) % 12 < 10 ? ('0' + (begin[1] + i) % 12) : (begin[1] + i) % 12));*/
/*                         months_html.push('<option val="'+ month +'">'+ month +'</option>');*/
/*                     }*/
/*                     $('#templateCon .end').html(months_html.join(''));*/
/*                     $('#templateCon [field="cound_money"]').val(_data['info']['htm_task.discount']);*/
/* 					$('#templateCon [field="account_book"]').val((_data['info']['htm_contract.account_book']));*/
/*                     $('#templateCon [field="get_account_book"]').val((_data['info']['htm_contract.get_account_book']));*/
/*                     var count_send = _data['info']['htm_task.count_send'];//赠送月份*/
/* */
/*                     $('#templateCon .gathering_month').show();*/
/*                     $('#templateCon .begin').val(begin[0] + '' + (begin[1] > 9 ? begin[1] : '0' + begin[1]));*/
/*                     $('#templateCon .company_name').val(_data['info']['khm_customer.name']);*/
/*                     $('#templateCon .contract_code').val(_data['info']['htm_contract.contract_code']);*/
/*                     $('#templateCon [field="cound_money"]').val((_data['info']['htm_task.discount'] * ($('#templateCon .end')[0].selectedIndex + 1)).toFixed(2));*/
/*                     $('#templateCon [field="get_money"]').val((_data['info']['htm_task.discount'] * ($('#templateCon .end')[0].selectedIndex + 1)).toFixed(2));*/
/*                     $('#templateCon .end').unbind('change').change(function(){*/
/*                         $('#templateCon [field="cound_money"]').val((_data['info']['htm_task.discount'] * ($(this)[0].selectedIndex + 1)).toFixed(2));*/
/*                         $('#templateCon [field="get_money"]').val((_data['info']['htm_task.discount'] * ($(this)[0].selectedIndex + 1)).toFixed(2));*/
/*                         $('#templateCon [field="account_book"]').val((_data['info']['htm_contract.account_book']));*/
/*                         $('#templateCon [field="get_account_book"]').val((_data['info']['htm_contract.get_account_book']));*/
/*                     });*/
/*                     $('#templateCon [field="get_time"]').val(cs.getNowTime(new Date()/1000));*/
/*                 }*/
/*                 if(index == 1){*/
/*                     $('#templateCon .company_name').val(_data['khm_customer.name']);*/
/*                     $('#templateCon .contract_code').val(_data['htm_contract.contract_code']);*/
/*                     $('#templateCon [field="cound_money"]').val(eval(_data['htm_contract.total_monry'] + '-' + _data['htm_contract.get_money']));*/
/*                     $('#templateCon .gathering_month').hide();*/
/*                 }*/
/*                 time_plug();*/
/* */
/*                 //切换收款方式 自动切换收款账户*/
/*                 cs.changePayWayGetAccounts($('#templateCon [field="get_way"]'),$('#templateCon [field="account"]'));*/
/* */
/*                 //收款人  经办人*/
/*                 for(var i in employees) {*/
/*                     if(employees[i]){*/
/*                         $('#templateCon .employee').append(new Option(employees[i],i));*/
/*                     }*/
/*                 }*/
/* 				$('#templateCon [field="receiver"]').val(JSON.parse(ykp.getCookie('userinfo')).id);*/
/*                 var contract_id,qMoney,cid;*/
/* */
/*                 if (index == 0) {*/
/*                     qMoney = data[_index]['yq_money'];*/
/*                     contract_id = data[_index]['jzm_service_info.contract_id'];*/
/*                     cid = data[_index].info['khm_customer.id'];*/
/*                 } else {*/
/*                     qMoney = eval(data[_index]['htm_contract.total_monry'] + '-' + data[_index]['htm_contract.get_money']);*/
/*                     contract_id = data[_index]['htm_contract.id'];*/
/*                     cid = data[_index]['khm_customer.id'];*/
/*                 }*/
/*                 saveGathering(url,index,contract_id,qMoney,cid);*/
/*             });*/
/*         }*/
/*                             */
/*         //收款 保存*/
/*         function saveGathering(url,index,id,qMoney,cid){*/
/*             $('#templateCon .sure_button').click(function() {*/
/*                 var postData = {};*/
/*                 var imgdata = [];*/
/*                 $('#templateCon [field]').each(function(i,e) {*/
/*                     if($(this).attr('field') === 'get_time') {*/
/*                         postData[$(this).attr('field')] = new Date($(this).val()) / 1000;*/
/*                         return true;*/
/*                     }*/
/*                     if ($(this).attr('field') === 'voucher') {*/
/*                         imgdata.push($(this).attr('src'));*/
/*                         return true;*/
/*                     }*/
/*                     postData[$(this).attr('field')] = $(this).val();*/
/*                 });*/
/*                 var today = new Date(); */
/*                 var param_1 = {*/
/*                     name:$('#templateCon .company_name').val(),*/
/*                     date:today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate(),*/
/*                     money:$('#templateCon [field="get_money"]').val()*/
/*                 }*/
/*                 var param_2 = {*/
/*                     name:$('#templateCon .company_name').val(),*/
/*                     date:today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate(),*/
/*                     money:qMoney*/
/*                 }*/
/*                 if(index == 0) {*/
/*                     param_1['time'] = JSON.parse(get_Month()).join(',');*/
/*                 }*/
/*                 var param_3 = {*/
/*                     name:$('#templateCon .company_name').val(),*/
/*                     money:qMoney*/
/*                 }*/
/*                 var is_send_1 = false,is_send_2 = false,is_send_3 = false;*/
/* */
/*                 if ($('#templateCon #sendMsg_1 input:checked').val()==1) {*/
/*                     is_send_1 = true;*/
/*                 }*/
/*                 if ($('#templateCon #sendMsg_2 input:checked').val()==1) {*/
/*                     is_send_2 = true;*/
/*                 }*/
/*                 if ($('#templateCon #sendMsg_3 input:checked').val()==1) {*/
/*                     is_send_3 = true;*/
/*                 }*/
/*                 postData['voucher'] = imgdata.join(',');*/
/*                 if(index == 0){*/
/*                     postData['get_to_term'] = get_Month();*/
/*                 }*/
/*                 postData['contract_id'] = id;*/
/*                 // console.log(postData);*/
/*                 // return;*/
/*                 */
/*                 var fileBox = $('#templateCon #fileBox');*/
/* 				var files = [];*/
/* 				if(fileBox.children().length > 0) {*/
/* 					$('#templateCon #fileBox').find('a').each(function(i) {*/
/* 						files.push({*/
/* 							name: $(this).text(),*/
/* 							url: $(this).attr('href')*/
/* 						})*/
/* 					})*/
/* */
/* 					postData.files = JSON.stringify(files);*/
/* 				}*/
/* */
/*                 ykp.doAjax({*/
/*                     url:'/api/api_finance/receivables_add',*/
/*                     method:'post',*/
/*                     data:postData,*/
/*                     success:function(res){*/
/*                         cs.close();*/
/*                         if (is_send_1) {*/
/*                             sendMsg(cid,'订单收款',param_1);*/
/*                         }*/
/*                         if (is_send_2) {*/
/*                             sendMsg(cid,'暂停服务通知',param_2);*/
/*                         }*/
/*                         if (is_send_3) {*/
/*                             sendMsg(cid,'严重欠费通知',param_3);*/
/*                         }*/
/*                         getList(url);*/
/*                     }*/
/*                 })*/
/*             });*/
/*         }*/
/* */
/*         //发送短信*/
/*         function sendMsg(id,type,param){*/
/*             ykp.doAjax({*/
/*                 url:'/api/api_common/send_customer',*/
/*                 data:{*/
/*                     customer_id:id,*/
/*                     type:type,*/
/*                     param:JSON.stringify(param)*/
/*                 },*/
/*                 method:'post',*/
/*                 success:function(res){*/
/*                     ykp.prompt('短信发送成功！');*/
/*                 }*/
/*             })*/
/*         }*/
/* */
/*          //图片上传*/
/*         function uploadImg(){*/
/*             $('#templateCon .uploadImage').unbind('change').change(function(){*/
/*                 var it=$(this);*/
/*                 var file = this.files[0];*/
/*                 if(!file.type || !/\.(jpg|png|)$/.test(file.name)){*/
/*                     ykp.prompt('请上传JPG、PNG格式的图片');*/
/*                     return false;*/
/*                 }*/
/* */
/*                 var fr = new FileReader();*/
/*                 var postdata = {};*/
/* */
/*                 if (!file) {*/
/*                     return;     */
/*                 }*/
/*                 */
/*                 fr.readAsDataURL(file);*/
/*                 fr.onloadend = function(e){*/
/*                     var base64 = e.target.result;*/
/*                     postdata['name'] = file.name;*/
/*                     postdata['dir'] = 'log';*/
/*                     postdata['base64'] = base64.split(',')[1];*/
/*                     ykp.doAjax({*/
/*                         url:'/api/api_common/upload_img',*/
/*                         method:'post',*/
/*                         data:postdata,*/
/*                         success:function(res){*/
/*                             //it.siblings('i').hide();*/
/*                             //it.parent().css('border','none');*/
/*                             console.log(res)*/
/*                              //图片有6张就不再添加*/
/*                             if(it.parent().siblings().length == 5){*/
/*                                 it.parent().hide();*/
/*                             }*/
/*                             */
/*                             var img_input = $(`*/
/*                             <label class="" style="margin-bottom:0;margin-right:10px;line-height:70px;display: inline-block;width: 70px;height: 70px;cursor: pointer; text-align: center;">*/
/*                             <img field="voucher" style="width: 100%;height: 70px;" src="${res.data.url}" alt="">*/
/*                             <input type="file" class="uploadImage _decrease" style="position: absolute;opacity: 0;left:-9999px;">*/
/*                         </label>`);*/
/*                             img_input.find('[field="voucher"]').attr('url',res.data.url);*/
/*                             img_input.find('[field="voucher"]').attr('name',file.name);*/
/*                             it.parent().before(img_input);*/
/*                         }*/
/*                     });*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/* */
/*         //获取月份*/
/*         function get_Month(){*/
/*             var index = $('#templateCon .end')[0].selectedIndex;*/
/*             var _data = [];*/
/*             $('#templateCon .end').find('option').each(function(i,e){*/
/*                 if(i > index){*/
/*                     return false;*/
/*                 }*/
/*                 _data.push($(this).val());*/
/*             });*/
/*              // var data = $('#templateCon #state').select2('data');*/
/*              // var _data = [];*/
/*              // for(var i in data){*/
/*              //    _data.push(new Date().getFullYear() + data[i]['id']);*/
/*              // }*/
/*              return JSON.stringify(_data);*/
/*         }*/
/* */
/*         //获取所有账户*/
/*         function getAccounts(){*/
/*             ykp.doAjax({*/
/*                 url:'/api/api_bank/f7',*/
/*                 method:'post',*/
/*                 data:{*/
/*                     select:'xtm_kh_bank.id,xtm_kh_bank.type,xtm_kh_bank.bank_name'*/
/*                 },*/
/*                 success:function(res){*/
/*                     var data = res.data;*/
/* */
/*                     var account_html = [];*/
/*                     for(var i in data){*/
/*                         account_html.push('<option value="'+ data[i]['id'] +'" get_way="'+ data[i]['type'] +'">'+ data[i]['bank_name'] +'</option>');*/
/*                     }*/
/*                     $('#templateCon [field="account"]').append(account_html.join(''));*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/* 		// $('#flush').click(function(){*/
/* 				*/
/* 		// 	getList();*/
/* 		// })*/
/* */
/* */
/*         //获取所有合同*/
/*         function getContracts(){*/
/*             ykp.doAjax({*/
/*                 url:'/api/api_contract/f7',*/
/*                 method:'post',*/
/*                 data:{*/
/*                     select:'htm_contract.id,htm_contract.contract_num,htm_contract.total_monry,htm_contract.get_money'*/
/*                 },*/
/*                 success:function(res){*/
/*                     var data = res.data;*/
/*                     for(var i in data){*/
/*                         $('#templateCon .agreement').append($(new Option(data[i]['contract_num'],data[i]['id'])).attr('should-get',eval(data[i]['total_monry'] + '-' + data[i]['get_money'])));*/
/*                     }*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         */
/* */
/*         //动态生成月份td*/
/*         function generateTd(obj,styles){*/
/*             var td_html = ''; */
/*             var style = ['', 'fa fa-circle-o', 'glyphicon glyphicon-ok', 'glyphicon glyphicon-remove'];*/
/*             $('#dynamic-table1 .thColor .month').each(function(i,e){*/
/*             	month = $(this).text();*/
/*             	  if(obj[month]){*/
/* 	                    td_html += */
/* 	                     '<td title="'+month+'" data-time="'+ obj[month]['time'] +'" money_status="'+ obj[month]['money_status'] + '" class="_gathering" data-num="'+ $(this).attr('data-num') +'" style="display:'+  $(this).css('display')+';border:1px solid #eee !important;" get_money="' + obj[month]['get_money'] + '" data-id="' + obj[month].id + '">' +*/
/* 	                        '<label class="pos-rel ' + style[obj[month]['money_status']] +'"> ' + (obj[month]['money_status'] == 2 ?  obj[month]['get_money'] : "" )+ '</label>' +*/
/* 	                    '</td>' ;*/
/* 	               }*/
/* 	                if(!obj[month]){*/
/* 	                    td_html += '<td data-num="'+ $(this).attr('data-num') +'" style="display:'+ $(this).css('display') +';border:1px solid #eee !important;" get_money></td>';*/
/* 	                }*/
/*             })*/
/*             return td_html;*/
/*         }*/
/* */
/*         //放弃收款*/
/*         function changeGatheringStatu(url){*/
/*             $('.gathering_statu').unbind('click').on('click','.give_up,.finish,.no_give_up',function(){*/
/*                 var id = $(this).parents('tr').attr('data-id');*/
/*                 var is_get_money;*/
/*                 var index = $(this).parents('tr').index();  //获取当前行的下标*/
/*                 var nodes = ykp.getCookie('nodes').split(',');*/
/*                 if($(this).hasClass('give_up')){*/
/* 	              	if(nodes.indexOf("279") == -1) {*/
/* 	              		ykp.prompt('你没有权限');*/
/* 	              		return false;*/
/* 	              	}*/
/*                     is_get_money = 1;*/
/*                 }*/
/*                 if($(this).hasClass('no_give_up')){*/
/*                 	if(nodes.indexOf("279") == -1) {*/
/* 	              		ykp.prompt('你没有权限');*/
/* 	              		return false;*/
/* 	              	}*/
/*                     is_get_money = 0;*/
/*                 }*/
/*                 if($(this).hasClass('finish')){*/
/*                 	if(nodes.indexOf("279") == -1) {*/
/* 	              		ykp.prompt('你没有权限');*/
/* 	              		return false;*/
/* 	              	}*/
/*                     is_get_money = 2;*/
/*                 }*/
/*                 var not_get_money = $(this).parents('tr').attr('not_get_money');*/
/*                 var zbmoney = $(this).parents('tr').attr('zbmoney');*/
/* 				var msg = "";*/
/* 				if(is_get_money == 1) {*/
/* 					msg = '欠款金额'+(parseInt(not_get_money) + parseInt(zbmoney)).toFixed(2)+'元，确认放弃当前对合同的收款？';*/
/* 				}else if(is_get_money == 2) {*/
/* 					msg = '欠款金额'+(parseInt(not_get_money) + parseInt(zbmoney)).toFixed(2)+'元，确认完成当前对合同的收款？';*/
/* 				}else {*/
/* 					msg = "是否撤销放弃操作";*/
/* 				}*/
/*                 bootbox.confirm(msg,function(flag){*/
/*                     if(flag){*/
/*                         ykp.doAjax({*/
/*                             url:'/api/api_contract/give_up',*/
/*                             method:'post',*/
/*                             data:{*/
/*                                 id:id,*/
/*                                 is_get_money:is_get_money*/
/*                             },*/
/*                             success:function(res){*/
/*                                 ykp.prompt('操作成功！');*/
/* */
/*                                 setTimeout(function(){*/
/*                                     getList(url);*/
/*                                 },1000);*/
/*                             }*/
/*                         });*/
/*                     }*/
/*                 });*/
/*             });*/
/*             */
/*         }*/
/* */
/*         //记账报税欠款 数据加载到table中*/
/*         function addJzbsqkList(url,res) {*/
/*             var data = res.data.items;*/
/*             var html = '';*/
/*             var Class = '';*/
/*             // var timeArr = new Array(12);*/
/*             var timeArr = {};*/
/*             //月份td */
/*             var td_html = '';*/
/* */
/*             //欠款状态*/
/*             var debt_statu = ['未完成','已放弃','已完成'];*/
/* */
/*             var obj = {};*/
/* 			var status = ['未激活','已激活','已挂起','已结束','已作废'];*/
/*             var cycle = {'1':'每月','3':'季度','6':'半年付','12':'年付'};//维护周期*/
/*             var styles = [];*/
/*             $('#dynamic-table1 th').each(function(i,e){*/
/*                 styles.push($(this).css('display'));*/
/*             });*/
/*             ykp.setCookie('page_no', res.data.curPage, (1 / 24));*/
/*             for (var i in data) {*/
/*                 for (var j = 0; j < data[i].list.length; j++) { */
/*                     time = data[i].list[j]['time'];*/
/*                     obj.status = data[i].list[j]['status'];*/
/*                     obj.get_money = data[i].list[j]['get_money'];*/
/*                     obj.id = data[i].list[j]['id'];*/
/*                     obj.money_status = data[i].list[j]['money_status'];*/
/*                     obj.time = data[i].list[j]['time'];*/
/*                     timeArr[time] = obj;*/
/*                     obj = {};*/
/* //                  console.log(time);*/
/*                 }*/
/* 				*/
/*                 td_html = generateTd(timeArr,styles);*/
/*                 html +=*/
/*                     '<tr data-id="' + data[i]['jzm_service_info.contract_id'] +'" customer-id="' + data[i]['info']['khm_customer.id'] +'" zbmoney="'+(parseInt(data[i]['info']['htm_contract.account_book']) - parseInt(data[i]['info']['htm_contract.get_account_book'])).toFixed(2)+'"  max_month="' + data[i]['maxMonth'] +'"   not_get_money="'+data[i].yq_money+'" is_get_money='+data[i]['info']['htm_contract.is_get_money']+'>' +*/
/*                     '<td class="center"><label class="pos-rel"><input type="checkbox" name="check" class="ace"><span class="lbl"></span></label></td>'+*/
/*                     '<td class="gathering_statu" style="display:'+ styles[0] +';"><label style="">'+  //+( data[i]['info']['htm_contract.is_get_money'] != 0 ? "none" : "inline-block") +*/
/*                         '<a contentauthority="279" style="display:'+( data[i]['info']['htm_contract.is_get_money'] == 0 ? " inline-block" : "none") +'" class="pos-rel"> <span style="cursor: pointer;"  class="lbl give_up btRed" title="放弃"><i class="fa fa-times-circle"></i></span></a> '+*/
/*                         '<a contentauthority="279" style="display:'+( data[i]['info']['htm_contract.is_get_money'] != 0 ? "inline-block" : "none") +'" class="pos-rel"> <span style="cursor: pointer;"  class="lbl no_give_up btOrange" title="撤销"><i class="fa fa-rotate-left"></i> </span></a> '+*/
/*                         '<a contentauthority="279" style="display:'+( data[i]['info']['htm_contract.is_get_money'] == 0 ? "inline-block" : "none") +'" class="pos-rel"> ' +*/
/*                             '<span style="cursor: pointer;background-color: #00c0ef !important;" class="lbl finish btGreen" title="完成"><i class="fa fa-check-circle-o"></i></span>' +*/
/*                         '</a>' +*/
/*                         '<a contentauthority="161" class="pos-rel sk _gathering"> <span style="cursor: pointer;margin-left: 2px; display:'+( data[i]['info']['htm_contract.is_get_money'] == 0 ? "inline-block" : "none") +'" class="lbl btGreen" title="收款 "><i class="fa fa-plus"></i></span></a> </label>'+*/
/*                     '</td>' +*/
/*                     '<td data-num="1" style="display:'+ styles[1] +';" data-cid="'+data[i].info['khm_customer.id']+'"><a href="javascript:;" class="pos-rel customerDetail">' + data[i].info['khm_customer.name']+'</a>' +*/
/*                     '<label class="pos-rel"><i class="iconBnt fa fa-info-circle" style="color:'+(data[i]['Remark'].length > 0 ? 'red' : "")+'"  data-rel="tooltip" data-placement="right" data-html="true" title="'+cs.getRemark(data[i]['Remark'])+'" ></i></label></td>'+*/
/*                     '<td data-num="2" style="display:'+ styles[2] +';">' + data[i].info['khm_customer.customer_num'] + '</td>' +*/
/*                     '<td data-num="3" style="display:'+ styles[3] +';">' + (data[i]['position']['pos_name'] || "") + (data[i]['position']['pos_num'] || "") + '</td>' +*/
/*                      '<td data-num="22" style="display:'+styles[4]+'">'+status[data[i]['info']['htm_contract.status']]+'</td>'+*/
/*                     '<td data-num="23" style="display: '+styles[5] +'">'+data[i]['info']['htm_contract.contract_code']+'</td>'+*/
/*                     '<td data-num="4" style="display:'+ styles[6] +';">' + (data[i].info['htm_task.start_time'] != '0' ? (cs.getNowTime(data[i].info['htm_task.start_time']) +'~'+cs.getNowTime(data[i].info['htm_task.end_time'])) : '') + '</td>' +*/
/*                     '<td data-num="5" style="display:'+ styles[7] +';">' + data[i].overdue + '个月</td>' +*/
/*                     '<td data-num="6" style="display:'+ styles[8] +';text-align: right !important; ">' + parseInt(data[i].yq_money).toFixed(2) + '</td>' +*/
/*                     '<td data-num="7" style="display:'+ styles[9] +';text-align: right !important; ">' + (parseInt(data[i]['info']['htm_contract.account_book']) - parseInt(data[i]['info']['htm_contract.get_account_book'])).toFixed(2)  + '</td>' +*/
/*                     '<td data-num="8" style="display:'+ styles[10] +';">' + cycle[data[i].info['htm_contract.get_cycle']] + '</td>' +*/
/*                     '<td data-num="9" style="display:'+ styles[11] +';">' + data[i]['maxTime']+ '</td>' +*/
/*                     '<td data-num="10" style="display:'+ styles[12] +';">' + debt_statu[data[i]['info']['htm_contract.is_get_money']]+ '</td>' +*/
/*                     td_html +*/
/*                     '</tr>';*/
/*                 timeArr = {};*/
/*             }*/
/* */
/*             $('#dataList').html(html);*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/*             custom.get_custom_info();*/
/*             custom.showReamrk();*/
/*             cs.getNodes([279,161]);*/
/*              //改变收款状态*/
/*             changeGatheringStatu('/api/api_finance/qklist');*/
/*             if(cs.getNodes([161],true)){*/
/*                 sk(url,data);*/
/*             }*/
/*             // $("#dataList td[data-status='0'],td[data-status='3']").click(function () {*/
/*             //     showMark('#editbiaodan');*/
/* */
/*             // })*/
/*         }*/
/* 		$('.myFilter').click(function() {*/
/* 			var type = $(this).attr('data-kind');*/
/* 			layui.use('layer', function() {*/
/* 				var layer = layui.layer;*/
/* 				layer.confirm('确认发送短信么？', function(index) {*/
/* 					var num = 0;*/
/* 					var today = new Date(); */
/* 					var calData = [];*/
/* 					*/
/* 					$('#dataList').find('input[type=checkbox]').each(function(i) {*/
/* 						if($(this).is(':checked')) {*/
/* 							num++;*/
/* 							//id += ','+ $(this).parents('tr').attr('customer-id');*/
/* 							calData.push({*/
/* 								customer_id: $(this).parents('tr').attr('customer-id'),*/
/* 								name: $(this).parents('td').next().next().find('.customerDetail').html(),*/
/* 								money: $(this).parents('tr').attr('not_get_money'),*/
/* 								date: $(this).parents('td').siblings('[data-num=4]').html(),*/
/* 							});*/
/* 						}*/
/* 					});*/
/* */
/* 					if(num == 0) {*/
/* 						ykp.prompt('请选择再发送');*/
/* 					} else {*/
/* 						//console.log(JSON.stringify(calData));return ;*/
/* 						ykp.doAjax({*/
/* 							url: "/api/api_common/send_multi_customer",*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								type: type,*/
/* 								param: JSON.stringify(calData),*/
/* 							},*/
/* 							success: function(res) {*/
/* 								ykp.prompt('发送成功');*/
/* 								layer.closeAll();*/
/* 							}*/
/* 						})*/
/* 					}*/
/* 				});*/
/* 			})*/
/* 		});*/
/* 		$('.myFilter2').click(function() {*/
/* 			var type = $(this).attr('data-kind');*/
/* 			*/
/* 			layui.use('layer', function() {*/
/* 				var layer = layui.layer;*/
/* 				layer.confirm('确认发送短信么？', function(index) {*/
/* 					var num = 0;*/
/* 					var today = new Date(); */
/* 					var calData = [];*/
/* 					*/
/* 					$('#datalist2').find('input[type=checkbox]').each(function(i) {*/
/* 						if($(this).is(':checked')) {*/
/* 							num++;*/
/* 							//id += ','+ $(this).parents('tr').attr('customer-id');*/
/* 							calData.push({*/
/* 								customer_id: $(this).parents('tr').attr('customer-id'),*/
/* 								name: $(this).parents('td').next().next().find('.customerDetail').html(),*/
/* 								money: $(this).parents('tr').attr('not_get_money'),*/
/* 								date: $(this).parents('td').siblings('[data-num=6]').html(),*/
/* 							});*/
/* 						}*/
/* 					});*/
/* */
/* 					if(num == 0) {*/
/* 						ykp.prompt('请选择再发送');*/
/* 					} else {*/
/* 						//console.log(JSON.stringify(calData));return ;*/
/* 						ykp.doAjax({*/
/* 							url: "/api/api_common/send_multi_customer",*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								type: type,*/
/* 								param: JSON.stringify(calData),*/
/* 							},*/
/* 							success: function(res) {*/
/* 								ykp.prompt('发送成功');*/
/* 								layer.closeAll();*/
/* 							}*/
/* 						})*/
/* 					}*/
/* 				});*/
/* 			})*/
/* 		});*/
/* 		$('.plSp').click(function() {*/
/* 			*/
/* 		})*/
/* */
/*         //添加 弹出层*/
/*         // $('.add_item').click(function () {*/
/*         //     showMark('.popup_add');*/
/* */
/*         //     time_plug();*/
/*         // });*/
/*     })*/
/* </script>*/
