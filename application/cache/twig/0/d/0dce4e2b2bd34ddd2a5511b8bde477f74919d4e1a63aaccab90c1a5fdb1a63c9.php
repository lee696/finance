<?php

/* admin/clientManage/accountSales.html */
class __TwigTemplate_b9d13dc8312d66802677c02ae46e12f0783fa71e2fa386c78ce7fd2f5b7bed35 extends Twig_Template
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
\t#templateCon label {
\t\twidth: 93px;}
\t#templateCon [field] {
\t\tdisplay: inline-block;
\t\tmin-width: 150px;
\t}
\t#heightsearch1 input {
\t\twidth: 180px;
\t}
</style>
<div class=\" widget-main\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<!-- <h3 class=\"header smaller lighter blue\">线索</h3> -->
\t\t\t<div class=\"row\" style=\"margin-top: 20px;\" id=\"topTool\">
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<input type=\"text\" pts=\"0\" sear=\"khm_customer.name\" placeholder=\"企业名称\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" sear=\"khm_customer_clue.user_id\" pts=\"3\" class=\"custom advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\">负责人</option>
\t\t\t\t\t</select>
\t\t\t\t\t<!-- <input type=\"text\" pts=\"1\"   placeholder=\"负责人\"  sear=\"staff\"> -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
                        <i class=\"fa fa-search\"></i>
                    </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button id=\"heightsearch\" title=\"高级搜索\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
\t                    <i class=\"fa fa-filter\"></i>
\t                </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
\t                    <i class=\"fa fa-refresh\"></i>
\t                </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"117\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" id=\"addItem\" title=\"添加\" style=\"background:#32CD32 !important;border-color: #32CD32!important;\" class=\"btn addBtn btn-info btn-sm position-relative\">
                        <i class=\"fa fa-plus\" ></i>
                    </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"299\" style=\" float: left; margin-right: 5px;\">
\t\t             <button type=\"button\"  title=\"导出\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"exportfile moveToClue btn addBtn btn-info btn-sm position-relative\">
\t\t                 <i class=\"fa fa-sign-out\"></i>
\t\t             </button>
\t\t        </div>
\t\t\t\t<div  class=\"col-sx-4\" style=\" float: left;margin-right: 5px; margin-bottom:5px;\">
\t\t\t\t\t<div id=\"filterBtns\" style=\"display:inline-block;width:260px;height: 36px\">
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"width:33.3%;line-height:32px;background: #E6E6E6;\" data-kind=\"0\"> 查看全部</a>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"width:33.3%;line-height:32px\" data-kind=\"1\"> 我负责的</a>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"width:33.3%;line-height:32px\" data-kind=\"3\"> 我的下属</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"margin-top:30px;position: absolute; background: #fff; z-index: 1041; padding: 20px; display: none;\">

\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>企业名称</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.name\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>负责人</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" sear=\"khm_customer_clue.user_id\" gjs=3 class=\"custom advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>分组</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" sear=\"khm_customer_clue.cate_id  \" gjs=3 class=\"cart_id advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>标签</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"margin: 12px !important;width: 180px\" sear=\"khm_customer.label_id\" gjs=2 class=\"label_list advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>来源</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select sear=\"khm_customer.source\" gjs=0 data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t<option value=\"\">  请选择 </option>
\t\t\t\t\t\t\t\t<option value=\"'转介绍'\">转介绍</option>
\t\t\t\t\t\t\t\t<option value=\"'电话咨询'\">电话咨询</option>
\t\t\t\t\t\t\t\t<option value=\"'线上注册'\">线上注册</option>
\t\t\t\t\t\t\t\t<option value=\"'客户上门'\">客户上门</option>
\t\t\t\t\t\t\t\t<option value=\"'陌生拜访'\">陌生拜访</option>
\t\t\t\t\t\t\t\t<option value=\"'公司资源'\">公司资源</option>
\t\t\t\t\t\t\t\t<option value=\"'个人资源'\">个人资源</option>
\t\t\t\t\t\t\t\t<option value=\"'广告宣传'\">广告宣传</option>
\t\t\t\t\t\t\t\t<option value=\"'电话营销' \">电话营销</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t&lt;!&ndash; <input type=\"text\" gjs=0 sear=\"khm_customer.source\"> &ndash;&gt;
\t\t\t\t\t\t</div>-->

\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>销售阶段</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select gjs=0 sear=\"khm_customer_clue.rank\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t\t<option value=\"1\">新入库</option>
\t\t\t\t\t\t\t\t<option value=\"2\">初步沟通</option>
\t\t\t\t\t\t\t\t<option value=\"3\">判断分析</option>
\t\t\t\t\t\t\t\t<option value=\"4\">上门面谈</option>
\t\t\t\t\t\t\t\t<option value=\"5\">合同签订</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">

\t\t\t\t\t\t\t<label>最后跟进时间</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"input-group\"  style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\"  data-status=\"rangtime\" gjs=0 sear=\"last_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>下次跟进时间</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"input-group\"  style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\"  data-status=\"rangtime\" gjs=0 sear=\"khm_customer_clue.next_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\"clear:both;padding-top:10px;text-align:center;\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
\t                        查询
\t                    </button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"rest\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t重置
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"custom_table\">
\t\t\t\t<table id=\"dynamic-table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t<th class=\"hidden-480 center\">操作</th>
\t\t\t\t\t\t\t<th data-num=\"1\">企业名称</th>
\t\t\t\t\t\t\t<th data-num=\"2\">成立日期</th>
\t\t\t\t\t\t\t<th data-num=\"3\">联系人</th>
\t\t\t\t\t\t\t<th data-num=\"4\" class=\"hidden-480\">销售阶段</th>
\t\t\t\t\t\t\t<th data-num=\"5\">客户分组</th>
\t\t\t\t\t\t\t<th data-num=\"6\" class=\"hidden-480\">客户标签</th>
\t\t\t\t\t\t\t<th data-num=\"7\" class=\"hidden-480\">负责人</th>
\t\t\t\t\t\t\t<th data-num=\"8\" class=\"hidden-480\">协作人</th>
\t\t\t\t\t\t\t<th data-num=\"9\" class=\"hidden-480\">跟进次数</th>
\t\t\t\t\t\t\t<th data-num=\"10\" class=\"hidden-480\">最后跟进时间</th>
\t\t\t\t\t\t\t<th data-num=\"11\" class=\"hidden-480\">未跟进天数</th>
\t\t\t\t\t\t\t<th data-num=\"12\" class=\"hidden-480\">下次跟进时间</th>
\t\t\t\t\t\t\t<th data-num=\"13\" class=\"hidden-480\">逾期</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<tbody id=\"dynamic-table_data\">

\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
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
\t\t</div>

\t\t<div class=\"row\" id=\"template1\" style=\"display: none;\">
\t\t\t<div style=\"margin-top:15px\">
\t\t\t\t<label>客户：</label>
\t\t\t\t<span field=\"khm_customer.name\"></span>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px\">
\t\t\t\t<label>客户分组： </label>
\t\t\t\t<span field=\"khm_customer_clue.cate_id\"></span>
\t\t\t\t<label style=\"margin-left:15px;\">客戶标签：</label>
\t\t\t\t<span field=\"label_name\"></span>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;position: relative;padding-left: 99px;\">
\t\t\t\t<label style=\"position: absolute;top:0px;left: 0;\">联系人： </label>
\t\t\t\t<span style=\"width: 446px\" field=\"linkman\"></span>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px\">
\t\t\t\t<label>销售阶段：</label>
\t\t\t\t<span field=\"khm_customer_clue.rank\"></span>
\t\t\t\t<label style=\"margin-left:15px;\">负责人：</label>
\t\t\t\t<span field=\"user_name\"></span>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px;position: relative;padding-left: 99px;\">
\t\t\t\t<label style=\"position: absolute;top:0px;left: 0;\">协作人： </label>
\t\t\t\t<span style=\"width: 446px\" field=\"khm_customer_clue.team_id\"></span>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px\">
\t\t\t\t<label> 成立日期：</label>
\t\t\t\t<span field=\"khm_customer.stablish_time\"></span>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px\">
\t\t\t\t<label> 跟进次数：</label>
\t\t\t\t<span field=\"visit_num\"></span>
\t\t\t\t<label style=\"margin-left:15px;\">最后跟进时间：</label>
\t\t\t\t<span field=\"last_time\"></span>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px\">
\t\t\t\t<label> 未跟进天数：</label>
\t\t\t\t<span field=\"\">暂无字段</span>
\t\t\t\t<label style=\"margin-left:15px;\">下次跟进时间：</label>
\t\t\t\t<span field=\"khm_customer_clue.next_time\"></span>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px\">
\t\t\t\t<label>  逾期：</label>
\t\t\t\t<span field=\"yuqi\"></span>
\t\t\t\t<label style=\"margin-left:15px;\"> 创建人：</label>
\t\t\t\t<span field=\"khm_customer_clue.user_id\"></span>
\t\t\t</div>
\t\t\t<div style=\"margin-top:15px\">
\t\t\t\t<label>创建时间：</label>
\t\t\t\t<span field=\"create_time\"></span>
\t\t\t\t
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\" id=\"template\" style=\"display:none;\">
\t\t\t<div>
\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t<!--<div style=\"margin-top:15px\">
\t\t\t\t\t\t<label>公海类型：</label>
\t\t\t\t\t\t<select addfield=\"customer_type\" class=\"select2-hidden-accessible\" id=\"type\" style=\"width: 180px;\">
\t\t\t\t\t\t\t<option value=\"\">全部类型</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t&lt;!&ndash;<input type=\"text\" addfield=\"customer_id\">&ndash;&gt;
\t\t\t\t\t</div>-->
\t\t\t\t\t<div style=\"margin-top: 15px\">

\t\t\t\t\t\t<label>客户：</label>
\t\t\t\t\t\t<select addfield=\"customer_id\" id=\"people\" style=\"width: 180px;\">
\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<!--<input type=\"text\" addfield=\"customer_id\">-->

\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:15px\">
\t\t\t\t\t\t<label>客户分组： </label>
\t\t\t\t\t\t<select style=\"width: 180px;\" addfield=\"cate_id\" class=\"cusType select2-hidden-accessible\" tabindex=\"-1\" id=\"label_cat\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<option value=\"\">请选择客户分组</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<button id=\"addCusCate\" style=\"line-height:normal;height:30px;top:0;\" class=\"btn btn-info btn-sm\">添加</button>
\t\t\t\t\t\t<button id=\"delCusCate\" class=\"btn  btn-sm\" style=\"line-height:normal;height:30px;top:0; background: #FF5722 !important;\">删除</button>
\t\t\t\t\t</div>
\t\t\t\t\t<!--<div style=\"margin-top:15px\">
\t\t\t\t\t\t<label>标签：</label>
\t\t\t\t\t\t&lt;!&ndash;<input type=\"text\" addfield=\"phone\">&ndash;&gt;
\t\t\t\t\t\t<select addfield=\"label_id\" id=\"label_group\" style=\"width:calc(100% - 65px);\">
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>-->
\t\t\t\t\t<div style=\"margin-top:15px\">

\t\t\t\t\t\t<label>负责人：</label>
\t\t\t\t\t\t<select addfield=\"user_id\" id=\"employees_group\" style=\"width: 180px;\">

\t\t\t\t\t\t</select>
\t\t\t\t\t\t<label>销售阶段：</label>
\t\t\t\t\t\t<select addfield=\"rank\" style=\"width: 180px;\">
\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t\t\t\t<option value=\"1\" selected >新入库</option>
\t\t\t\t\t\t\t<option value=\"2\">初步沟通</option>
\t\t\t\t\t\t\t<option value=\"3\">判断分析</option>
\t\t\t\t\t\t\t<option value=\"4\">上门面谈</option>
\t\t\t\t\t\t\t<option value=\"5\">合同</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<!-- <label style=\"margin-left:15px;\">客户来源：</label>
\t\t\t\t\t\t\t<select type=\"text\" addfield=\"source\" style=\"width: 180px;\">
\t\t\t\t\t\t\t\t<option value=\"\"> 请选择 </option>
                                <option value=\"转介绍\">转介绍</option>
                                <option>电话咨询</option>
                                <option>线上注册</option>
                                <option>客户上门</option>
                                <option>陌生拜访</option>
                                <option>公司资源</option>
                                <option>个人资源</option>
                                <option>广告宣传</option>
                                <option>电话营销</option>
\t\t\t\t\t\t\t</select> -->
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label>下次跟进时间：</label>
\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t<input class=\"date-timepicker1 required\" addfield=\"next_time\" style=\"height: 30px; width: 150px;padding-left:5px;\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
                   \t\t\t <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                \t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t <div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label>协作人：</label>
\t\t\t\t\t\t <select multiple=\"\" addfield=\"team_id\" class=\"teamperson select2 select2-hidden-accessible\" data-placeholder=\"请选择\" style=\"width: 437px;\" tabindex=\"-1\" aria-hidden=\"true\"></select>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"text-align:center;margin-top:15px;\">
\t\t\t\t\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
\t\t\t\t\t\t<button class=\"sure_button add\">
                            <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                            保存
                        </button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"cus_cate\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd; box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t\t<span style=\"display: inline-block;\">添加客户分组</span>
\t\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float:right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t</div>
\t\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t\t<label> 分组名称： </label>
\t\t\t\t\t<input class=\"required\" style=\"height:28px;padding:5px;\" id=\"catename\">
\t\t\t\t\t<!-- <input width=\"200px\" style=\"margin: auto;\" id=\"efile\" /> -->
\t\t\t\t\t<!--<hr>-->
\t\t\t\t</div>
\t\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t\t<button class=\"btn btn-info  submitCate\" style=\"padding: 6px; border-radius: 0px;\">保存</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\" id=\"template2\" style=\"display:none;\">
\t\t\t<div>
\t\t\t\t<div class=\"widget-box\">

\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label>客户：</label>
\t\t\t\t\t\t<span style=\"display: inline-block;\" class=\"customer_name\"></span>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"margin-top:15px\">
\t\t\t\t\t\t<label>客户分组： </label>
\t\t\t\t\t\t<select style=\"width: 180px\" addfield=\"cate_id\" class=\"cusType select2-hidden-accessible\" tabindex=\"-1\" id=\"label_cat\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<option value=\"\">请选择客户分组</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<button id=\"addCusCate\" class=\"btn btn-info btn-sm\" style=\"line-height:normal;height:30px;top:0;\">添加</button>
\t\t\t\t\t\t<button id=\"delCusCate\" class=\"btn  btn-sm\" style=\"line-height:normal;height:30px;top:0; background: #FF5722 !important;\">删除</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:15px\">
\t\t\t\t\t\t<label>标签：</label>
\t\t\t\t\t\t<!--<input type=\"text\" addfield=\"phone\">-->
\t\t\t\t\t\t<select addfield=\"label_id\" id=\"label_group\" style=\"width:calc(100% - 65px);\">
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label>负责人：</label>
\t\t\t\t\t\t<select addfield=\"user_id\" id=\"employees_group\" style=\"width: 180px;\">
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<label>销售阶段：</label>
\t\t\t\t\t\t<select addfield=\"rank\" id=\"rank\" style=\"width: 180px;\">
\t\t\t\t\t\t\t<option value=\"\"> 请选择 - - -</option>
\t\t\t\t\t\t\t<option value=\"1\">新入库</option>
\t\t\t\t\t\t\t<option value=\"2\">初步沟通</option>
\t\t\t\t\t\t\t<option value=\"3\">判断分析</option>
\t\t\t\t\t\t\t<option value=\"4\">上门面谈</option>
\t\t\t\t\t\t\t<option value=\"5\">合同</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- <div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label>客户来源：</label>
\t\t\t\t\t\t<select type=\"text\" addfield=\"source\" style=\"width: 180px\">
\t\t\t\t\t\t\t<option value=\"\">请选择</option>
                            <option value=\"转介绍\">转介绍</option>
                            <option>电话咨询</option>
                            <option>线上注册</option>
                            <option>客户上门</option>
                            <option>陌生拜访</option>
                            <option>公司资源</option>
                            <option>个人资源</option>
                            <option>广告宣传</option>
                            <option>电话营销</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<label style=\"margin-left:15px;display:none;\" class=\"introducer\" >介绍人：</label>
\t\t\t\t\t\t<input type=\"text\" addfield=\"introducer\" class=\"introducer\" style=\"display:none;\">
\t\t\t\t\t</div> -->
\t\t\t\t\t<div style=\"text-align:center;margin-top:15px;\">
\t\t\t\t\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
\t\t\t\t\t\t<button class=\"sure_button add\">
                            <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                            保存
                        </button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"label_popup\" id=\"feedBack\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t\t<span style=\"display: inline-block;\">请选择要删除的分组</span>
\t\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t\t</div>
\t\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t\t<div style=\"margin-top:15px\">
\t\t\t\t\t\t<label>客户分组： </label>
\t\t\t\t\t\t<select style=\"width: 180px\" multiple=\"\" addfield=\"cate_id\" class=\"cusType select2-hidden-accessible\" tabindex=\"-1\" id=\"label_cat\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<option value=\"\">请选择客户分组</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t\t<button class=\"close_label\">关闭</button>
\t\t\t\t\t<button class=\"hold\">保存</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 464
        $this->loadTemplate("admin/mark.html", "admin/clientManage/accountSales.html", 464)->display($context);
        echo " ";
        $this->loadTemplate("admin/customerDetail.html", "admin/clientManage/accountSales.html", 464)->display($context);
        // line 465
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script>
\tjQuery(function(\$) {
\t\tcs.getNodes([117]);
\t\tvar page_size = 10; //分页
\t\tvar employees = {}; //所有员工
        var employees11 = {}; //所有员工
\t\tvar groups = {}; //所有客户分组
\t\tvar labels = {}; //所有标签
\t\tcs.dataRang();
\t\tvar order = 'khm_customer_clue.id desc';
\t\t//获取所有标签
\t\tvar filter = \"\";
\t\tykp.doAjax({
\t\t\tasync: false,
\t\t\turl: '/api/api_label/f7',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: 'cwm_label.is_del = 0'
\t\t\t},
\t\t\tsuccess: function(res) {
\t\t\t\tvar data = res.data;
\t\t\t\tfor(var i in data) {
\t\t\t\t\tlabels[data[i]['cwm_label.id']] = {
\t\t\t\t\t\ttitle: data[i]['cwm_label.title'],
\t\t\t\t\t\tparent: data[i]['cwm_label.cat_id']
\t\t\t\t\t};
\t\t\t\t}
\t\t\t}
\t\t});
        //导出功能
        cs.exportFile({
            url:\"/api/api_customer/export_clue\",
            title:\"线索列表\"
        });

        \$('#filterBtns a').mouseover(function() {
            \$(this).addClass('over');
        })

        \$('#filterBtns a').mouseout(function() {
            \$(this).removeClass('over');
        })

        \$('.myFilter').click(function() {
            if(!\$(this).hasClass('clc')) {
                \$(this).addClass('clc').siblings().removeClass('clc');
            }
            var user = JSON.parse(ykp.getCookie('userinfo'));
            var userId = JSON.parse(ykp.getCookie('uid'));
            var data = {
                \"type\": 2,
                \"page_size\": page_size,
                'page': 1
            };
            var filter_ = \$(this).attr('data-kind');
            if(filter_ == '0') {
                getList(1);
                return;
            }
            //我负责的
            if(filter_ == '1') {
                data['filter'] = \"khm_customer_clue.is_del = 0 and (user_id IN (\"+userId+\") OR FIND_IN_SET(\"+userId+\", team_id))\";
            }
           /* //我关注的
            if(filter_ == '2') {
                data['relation'] = 'helloworld';
            }*/
            //我的下属
            if(filter_ == '3') {
                data.xiashu = true;
                data['filter'] = \"user_id !=\"+userId;
            }
            //filter = data['where'];
            getList_2(data);
        })


        //通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_customer/index_clue',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter:'',
\t\t\t\tlimit: page_size,
\t\t\t\ttype:1
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '#pageBar'
\t\t\t},
\t\t\tinitOrder:'khm_customer.id',
\t\t\tdefaultOrder: order,
\t\t\tcontentId: \"#dataList\",
\t\t\tparams:[{
\t\t\t\tid: \"#dynamic-table\",
\t\t\t\tfield:[\"\",\"khm_customer.name\",\"khm_customer.stablish_time\",\"\",
\t\t\t\t\t\"khm_customer_clue.rank\",\"khm_customer_clue.cate_id\",\"\",\"user_name\",\"\",\"\",\"khm_customer_clue.last_time\",\"\",\"khm_customer_clue.next_time\"
\t\t\t\t]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});
\t\t//获取所有客户标签分组
\t\tgetGroup();
\t\tfunction getGroup(){
\t\t\tykp.doAjax({
\t\t\t\tasync: false,
\t\t\t\turl: '/api/api_customer/clue_type_list',
\t\t\t\tmethod: 'get',
\t\t\t\tdata: {},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tgroups[data[i]['id']] = data[i]['name'];
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//获取所有员工
\t\tykp.doAjax({
\t\t\tasync: false,
\t\t\turl: '/api/api_employees/f7',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: 'bmm_employees.is_del <> 1 and EXISTS(SELECT id FROM khm_customer_clue WHERE user_id = bmm_employees.id)',
\t\t\t\tselect: 'bmm_employees.id,bmm_employees.name'
\t\t\t},
\t\t\tsuccess: function(res) {
\t\t\t\tvar data = res.data;
\t\t\t\t\$('.advandced-search').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});
\t\t\t\tfor(var i in data) {
\t\t\t\t\t if(data[i]['name']) {
\t\t\t\t\temployees[data[i]['id']] = data[i]['name'];
\t\t\t\t\t\$('.custom').append(new Option(data[i]['name'], data[i]['id']));
\t\t\t\t}
\t\t\t\t\t}
\t\t\t}
\t\t});

        ykp.doAjax({
            async: false,
            url: '/api/api_employees/f7',
            method: 'post',
            data: {
                select: 'bmm_employees.id,bmm_employees.name'
            },
            success: function(res) {
                var data = res.data;
                for(var i in data) {
                    if(data[i]['name']) {
                        employees11[data[i]['id']] = data[i]['name'];
                    }
                }
            }
        });
\t\t//获取分组
\t\tykp.doAjax({
\t\t\tasync: false,
\t\t\turl: '/api/api_customer/clue_type_list',
\t\t\tmethod: 'get',
\t\t\tdata: {
\t\t\t\tlimit:999
\t\t\t},
\t\t\tsuccess: function(res) {
\t\t\t\tvar data = res.data;
\t\t\t\t\$('.cart_id').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});
\t\t\t\tfor(var i in data) {
\t\t\t\t\t\$('.cart_id').append(new Option(data[i]['name'], data[i]['id']));
\t\t\t\t}
\t\t\t}
\t\t});
\t\t//获取标签
\t\tykp.doAjax({
\t\t\tasync: false,
\t\t\turl: '/api/api_customer/index_clue_lable',
\t\t\tmethod: 'post',
\t\t\tdata: {},
\t\t\tsuccess: function(res) {
\t\t\t\tvar data = res.data;
\t\t\t\t\$('.label_list').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});
\t\t\t\tfor(var i in data) {
\t\t\t\t\t\$('.label_list').append(new Option(data[i]['title'], data[i]['id']));
\t\t\t\t}
\t\t\t}
\t\t});

\t\tvar aid_2 = ykp.getCookie(\"aid_2\");
\t\tvar time = ykp.getCookie(\"time\");

\t\t//接收首页跳转
\t\tif(time != '' && time != undefined) {
\t\t\tvar timestamp = ''; //条件
\t\t\tvar today = new Date().setHours(0, 0, 0, 0) / 1000; //今天零点的时间戳
\t\t\tvar day_1 = cs.getNowTime(Date.parse(new Date()) / 1000).substr(-2) - 1; //距离本月1号有多少天
\t\t\tvar lastmonthday_1 = cs.getNowTime(Date.parse(new Date()) / 1000);
\t\t\tvar newday = lastmonthday_1.substring(0, 4) + '-' + (lastmonthday_1.substring(5, 7) - 1) + '-01';
\t\t\tif(lastmonthday_1.substring(5, 7) == 1) {
\t\t\t\tnewday = (lastmonthday_1.substring(0, 4) - 1) + '-12-01';
\t\t\t}
\t\t\tvar newdaytime = Date.parse(new Date(newday)) / 1000; //上个月1号的时间戳
\t\t\tswitch(time) {
\t\t\t\tcase '1':
\t\t\t\t\ttimestamp = `khm_customer_clue.create_time>\${today}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '2':
\t\t\t\t\ttimestamp = `khm_customer_clue.create_time<\${today} and khm_customer_clue.create_at>\${today-86400}`
\t\t\t\t\tbreak;
\t\t\t\tcase '3':
\t\t\t\t\ttimestamp = `khm_customer_clue.create_time>\${today-86400*6}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '4':
\t\t\t\t\ttimestamp = `khm_customer_clue.create_time>\${today-86400*29}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '5':
\t\t\t\t\ttimestamp = `khm_customer_clue.create_time>\${today-86400*day_1}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '6':
\t\t\t\t\ttimestamp = `khm_customer_clue.create_time<\${today-86400*day_1} and khm_customer_clue.create_at>\${newdaytime}`;
\t\t\t\t\tbreak;
\t\t\t}
\t\t\tvar filter = `khm_customer_clue.is_del = 0 and khm_customer_clue.user_id=\${aid_2} and \${timestamp}`;
\t\t\tif(aid_2 == '' || aid_2 == undefined) {
\t\t\t\tfilter = `\${timestamp}`
\t\t\t}
\t\t\tykp.list({
\t\t\t\turl: '/api/api_customer/index_clue',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: page_size,
\t\t\t\t\tfilter: filter
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#dynamic-table_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t} else {
                        addList(res);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t\tykp.setCookie(\"aid\", \"\", (1 / 24));
\t\t\tykp.setCookie(\"aid_2\", \"\", (1 / 24));
\t\t\tykp.setCookie(\"time\", \"\", (1 / 24));
\t\t} else {
            var titleTask = ykp.getCookie('titleTask');
            if(titleTask != '' && titleTask != undefined) {
                var today = new Date().setHours(0, 0, 0, 0) / 1000; //今天零点的时间戳
                var curTime = Date.parse(new Date()) / 1000;
                var data = {
                    limit: page_size,
                    filter: `khm_customer_clue.is_del = 0`
                }
                if(titleTask == 8){
                    data.filter += ` and khm_customer_clue.next_time > \${ curTime }`;
\t\t\t\t}else{
                    data.filter += ` and khm_customer_clue.next_time < \${ curTime } and khm_customer_clue.next_time > 0 and
                    not exists(select khm_contact_log.id from khm_contact_log where khm_customer_clue.customer_id = khm_contact_log.customer_id and
                     khm_contact_log.contact_type=4 and khm_contact_log.is_del=0)`;
                }
                getList_2(data);
                ykp.setCookie('titleTask', '');
            } else {
                //页面初始化
                ykp.setCookie(\"filter\", \"\");
                ykp.setCookie(\"where\", \"\");
                getList(1);
            }
\t\t}

\t\t\$('#flush').click(function() {
\t\t\tfilter = '';
\t\t\t\$('[sear=\"customer_name\"]').val('');
\t\t\t\$('[sear=\"khm_customer_clue.user_id\"]').val('').trigger('change');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");

\t\t\tgetList();
\t\t})

\t\t\$('#changePageNum').change(function() {
            page_size = \$(this).val();
\t\t\tykp.setCookie('page_size', page_size);
\t\t\tgetList(1);
\t\t})
\t\tif(!ace.vars['old_ie']) {
\t\t\t\$('.date-timepicker1').datetimepicker({
\t\t\t\t// format: 'YYYY-MM-DD', //use this option to display seconds
\t\t\t\ticons: {
\t\t\t\t\ttime: 'fa fa-clock-o',
\t\t\t\t\tdate: 'fa fa-calendar',
\t\t\t\t\tup: 'fa fa-chevron-up',
\t\t\t\t\tdown: 'fa fa-chevron-down',
\t\t\t\t\tprevious: 'fa fa-chevron-left',
\t\t\t\t\tnext: 'fa fa-chevron-right',
\t\t\t\t\ttoday: 'fa fa-arrows ',
\t\t\t\t\tclear: 'fa fa-trash',
\t\t\t\t\tclose: 'fa fa-times'
\t\t\t\t}
\t\t\t}).next().on(ace.click_event, function() {
\t\t\t\t\$(this).prev().focus();
\t\t\t});
\t\t}

\t\tcs.showHeightSearch('#heightsearch', '#heightsearch1');

\t\tfunction search() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_customer/index_clue',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {

\t\t\t\t}
\t\t\t}

\t\t\tcs.doSearch('#search', data, 'filter', false, function(res,_filter) {
\t\t\t\tfilter = _filter;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#dynamic-table_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn false;
\t\t\t\t} else {
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//获取所有公海类型
\t\tfunction getType() {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_customer_type/f7',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tselect: 'khm_customer_type.id,khm_customer_type.name'
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tvar option = ''; //<option value=\"\">  请选择公海类型  </option><option value=\"0\">  全部类型  </option>
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t//customer_type[data[i]['id']] =data[i]['name'];
\t\t\t\t\t\toption += `<option value=\"\${data[i]['id']}\">\${data[i]['name']}</option>`;
\t\t\t\t\t}
\t\t\t\t\t\$('#templateCon #type').select2({
\t\t\t\t\t\tallowClear: true
\t\t\t\t\t});
\t\t\t\t\t\$('#templateCon #type').html(option);
\t\t\t\t}
\t\t\t})
\t\t}

\t\tfunction getCustomer(type) {
\t\t\t\$('#templateCon [addfield=\"customer_id\"]').find('option').not(':first').remove();
\t\t\tvar people = [];
\t\t\tvar data = {
\t\t\t\ttype: type
\t\t\t};
\t\t\tif(type == 0) {
\t\t\t\tdata = {};
\t\t\t}
\t\t\t//加载客户
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_customer/get_customer',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: data,
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\$('#templateBox #people').select2({
\t\t\t\t\t\tallowClear: true
\t\t\t\t\t})
\t\t\t\t\tpeople.push('<option value=\"\"> 请选择 </option>');
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tpeople.push('<option value=\"' + data[i]['khm_customer.id'] + '\">' + data[i]['khm_customer.name'] + '</option>')
\t\t\t\t\t}
\t\t\t\t\t\$('#templateBox #people').html(people.join(''));
\t\t\t\t}
\t\t\t})
\t\t}

\t\tdohSearch();

\t\tfunction dohSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_customer/index_clue',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: page_size
\t\t\t\t}
\t\t\t}

\t\t\tcs.hSearch('#search1', data, 'filter', false, function(res,_filter) {
\t\t\t\tfilter = _filter;
\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\$(\"#heightsearch\").removeClass('active').css('z-index', '0');
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#dynamic-table_data').html('<tr><td colspan=\"9\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\taddList(res);
\t\t\t})
\t\t}

\t\tfunction getList(current) {
            search();
\t\t\tykp.list({
\t\t\t\turl: '/api/api_customer/index_clue',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tpage: current,
\t\t\t\t\tlimit: page_size,
\t\t\t\t\torder: order,
\t\t\t\t\tfilter:filter
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\$('#dynamic-table_data').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t} else {
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
        function getList_2(data) {
            ykp.list({
                url: '/api/api_customer/index_clue',
                method: 'post',
                data: data,
                pageBar: {
                    id: '#pageBar',
                    order: order
                },
                loadList: function(res) {
                    if(res.data.items == \"\") {
                        setTimeout(function() {
                            ykp.prompt('暂无数据！');
                        }, 1000);
                        \$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
                        return false;
                    } else {
                        addList(res);
                    }
                }
            })
        }

\t\tfunction addList(res) {
\t\t\tvar sales = [];
\t\t\tvar data = res.data.items;
\t\t\tvar rank = ['', '新入库', '初步沟通', '判断分析', '上门面谈', '合同签订'];
\t\t\tvar datahtml = \"<p align='left'>aaaa123aaaaaa<br/>13213</p>\";
\t\t\tvar styles = [];

\t\t\t\$('#dynamic-table th').each(function(i, e) {
\t\t\t\tstyles.push(\$(this).css('display'));
\t\t\t});

\t\t\tvar labels = []; //标签
\t\t\tvar labels_name = []; //标签名
\t\t\tvar labelArr = {};
            var _labelArr = [];
            for(var i in data) {
                labels_name = [];
\t\t\t\tlabels = data[i]['label_name'];
                let _emId = data[i]['khm_customer_clue.team_id'].split(',');
                let sname = [];
                if(_emId != \"\"){
                     for(var v=0;v<_emId.length;v++){
                         sname.push(employees11[_emId[v]])

                \t\t}
\t\t\t\t}
\t\t\t\tfor(var k in labels) {
\t\t\t\t\tlabels_name.push(labels[k]['title']);
\t\t\t\t}

\t\t\t\tlabelArr[i] = labels_name;
                /* '<a contentAuthority=\"118\"> <span style=\"cursor: pointer\" id=\"recordEdit\" class=\"editInfo btBlue\" title=\"编辑\"><i class=\"fa fa-pencil-square-o\"></i></span></a>'*/
\t\t\t\tsales.push('<tr data-id=\"' + data[i]['khm_customer_clue.id'] + '\">',
\t\t\t\t\t'<td class=\"center\">',
\t\t\t\t\t'<label class=\"pos-rel\">',
\t\t\t\t\t'<a> <span style=\"cursor: pointer\" id=\"\" class=\"info btOrange\" title=\"详情\"><i class=\"fa fa-info\"></i></span></a> ',
\t\t\t\t\t'<a  class=\"btRed del\" href=\"javascript:;\"  style=\"color:#fff !important;\" title=\"删除\"><i class=\"fa fa-trash\"></i></a>',
\t\t\t\t\t'</label>',
\t\t\t\t\t'</td>',
\t\t\t\t\t'<td data-num=\"1\" style=\"display:' + styles[1] + ';\" data-id=\"' + data[i]['khm_customer.id'] + '\" data-cid=\"' + data[i]['khm_customer.id'] + '\">',
\t\t\t\t\t'<a href=\"#\" class=\"pos-rel customerDetail\">' + data[i]['khm_customer.name']+'</a>',
\t\t\t\t\t'<label class=\"pos-rel\"> <i class=\"iconBnt fa fa-info-circle\" style=\"color:'+(data[i]['Remark'].length > 0 ? 'red' : \"\")+'\" data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"' + cs.getRemark(data[i]['Remark']) + '\" ></i></label></td>',
\t\t\t\t\t'<td data-num=\"2\"  style=\"display:' + styles[2] + ';\" >'+cs.getNowTime(data[i]['khm_customer.stablish_time'],true)+'</td>',
                    '<td data-num=\"3\"  style=\"display:' + styles[3] + ';\" >'+data[i]['linkman']+'</td>',
\t\t\t\t\t'<td data-num=\"4\"  style=\"display:' + styles[4] + ';\" >'+rank[data[i]['khm_customer_clue.rank']] +'</td>',
                    '<td data-num=\"5\"  style=\"display:' + styles[5] + ';\" >' + (data[i]['khm_customer_clue.cate_id'] != '0' ? groups[data[i]['khm_customer_clue.cate_id']] : '') + '</td>',
\t\t\t\t\t'<td data-num=\"6\"  style=\"display:' + styles[6] + ';\" >' + labelArr[i].join(',') + '</td>',
                    '<td data-num=\"7\" style=\"display:' + styles[7] + ';\" >'+ (data[i]['user_name'] ? data[i]['user_name']:\"\") +'</td>',
                    '<td data-num=\"8\" style=\"display:' + styles[8] + ';\" >'+sname.join(\",\")+'</td>',
                    '<td data-num=\"9\" style=\"display:' + styles[9] + ';\" >'+(data[i]['visit_num']>0 ? data[i]['visit_num'] : '')+'</td>',
\t\t\t\t\t'<td data-num=\"10\" style=\"display:' + styles[10] + ';\" >'+ cs.getNowTime(data[i]['last_time'],true) + '</td>',
\t\t\t\t\t'<td data-num=\"11\" style=\"display:' + styles[11] + ';\" >'+(data[i]['last_time']>0 ? Math.floor((Date.now()/1000 - data[i]['last_time'])/86400) : '') +'</td>',
                    '<td data-num=\"12\" style=\"display:' + styles[12] + ';\" >'+cs.getNowTime(data[i]['khm_customer_clue.next_time'],true)+'</td>',
                    '<td data-num=\"13\" style=\"display:' + styles[13] + ';\" >'+(((data[i][\"khm_customer_clue.next_time\"] >= Date.now()/1000) || (data[i][\"khm_customer_clue.next_time\"] == 0)) ? \"否\" : \"是\") +'</td>',
\t\t\t\t\t'</tr>');
\t\t\t\tlabels = [];
\t\t\t\tlabels_name = [];
\t\t\t}
            \$('#dynamic-table_data').html(sales.join(''));
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();
\t\t\tcustom.showReamrk();
\t\t\tcustom.get_custom_info();

\t\t\tcs.getNodes([118]);

\t\t\teditRecord(data);

\t\t\trecordInfo();
\t\t}

\t\t//线索详情
\t\tfunction recordInfo() {
\t\t\t\$('.info').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tshowMark('#template1');
\t\t\t\t\$('#showBox .title').text('详情');
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_customer/index_clue',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter: 'khm_customer_clue.id = ' + id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
                        console.log(res);
                        var data = res.data.items[0];
\t\t\t\t\t\tvar rank = ['', '新入库', '初步沟通', '判断分析', '上门面谈', '合同签订'];

\t\t\t\t\t\tvar _labels = [];
\t\t\t\t\t\tvar _labels_name = [];
\t\t\t\t\t\t\$('#templateCon [field]').each(function(i, e) {
\t\t\t\t\t\t\tif(data['khm_customer.source'] == '转介绍') {
\t\t\t\t\t\t\t\t\$('#templateCon .introduce').show();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'khm_customer_clue.rank') {
\t\t\t\t\t\t\t\t\$(this).text(rank[data[\$(this).attr('field')]]);
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'khm_customer_clue.user_id') {
\t\t\t\t\t\t\t\t\$(this).text(employees[data[\$(this).attr('field')]]);
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'khm_customer_clue.cate_id') {
\t\t\t\t\t\t\t\t\$(this).text(groups[data['khm_customer_clue.cate_id']]);
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'label_name') {
\t\t\t\t\t\t\t\t_labels = data['label_name'];
                                for(var k =0;k<_labels.length;k++) {
                                    _labels_name.push(_labels[k] !=\"\" ? _labels[k].title :'');
\t\t\t\t\t\t\t\t}
                                \$(this).text(_labels_name.join(','));
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
                            if(\$(this).attr('field') == 'khm_customer_clue.team_id') {
\t\t\t\t\t\t\t    var teamstr = data['khm_customer_clue.team_id'].split(',');
\t\t\t\t\t\t\t    var xname = [];
                                teamstr.forEach(function (e,i) {
                                    xname.push(employees11[e]);
                                })
                                \$(this).text(xname);
                                return true;
                            }
                            if(\$(this).attr('field') == 'khm_customer.stablish_time') {
                                \$(this).text(cs.getNowTime(data[\"khm_customer.stablish_time\"],true));
                                return true;
                            }
                            if(\$(this).attr('field') == 'khm_customer_clue.next_time') {
                                \$(this).text(cs.getNowTime(data[\"khm_customer_clue.next_time\"],true));
                                return true;
                            }
                            if(\$(this).attr('field') == 'last_time') {
                                \$(this).text(cs.getNowTime(data[\"last_time\"],true));
                                return true;
                            }
                            if(\$(this).attr('field') == 'create_time') {
                                \$(this).text(cs.getNowTime(data[\"create_time\"],true));
                                return true;
                            }
                            if(\$(this).attr('field') =='yuqi'){
                                \$(this).html(data[\"khm_customer_clue.next_time\"] >= Date.now() / 1000 ? \"否\" : \"是\");
                                return true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\$(this).text(data[\$(this).attr('field')] ? data[\$(this).attr('field')] :\"\");
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});


            \$('.del').click(function() {
                var node = ykp.getCookie('nodes').split(',');
//\t\t\t\tnode.forEach(function(item,index){
//\t\t\t\t\tif(item == 286){
//\t\t\t\t\t}
//\t\t\t\t})
               /* if(node.indexOf(\"286\") == -1){
                    ykp.prompt('你没有权限');
                    return false;
                }*/
                var id = \$(this).parents('tr').attr('data-id');
                var customer_id = \$(this).parents('tr').find(\"[data-num=1]\").attr('data-cid');
                layui.use('layer',function() {
                    layui.layer.confirm('确认放弃线索吗?', function(index){
                        ykp.doAjax({
                            url:'/api/api_customer/del_clue',
                            methods:\"post\",
                            data:{
                                id:id,
                                customer_id:customer_id
                            },
                            success:function(res) {
                                ykp.prompt('删除成功');
                                getList(1);
                                layer.closeAll();
                            }
                        })
                    });
                })
            })

        }

\t\t//编辑功能
\t\tfunction editRecord(data) {
\t\t\t\$('.editInfo').click(function() {
\t\t\t\tvar name = \$(this).parents('tr').find('td').eq(1).text().trim();
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\tvar clue_data = data[index];
\t\t\t\tshowMark('#template2');
\t\t\t\t\$('#showBox .title').text('编辑线索');

\t\t\t\t\$('#templateCon .customer_name').text(name);
\t\t\t\t// getInfo();

\t\t\t\t//添加分组
\t\t\t\taddCate();

\t\t\t\tgetInfo(clue_data);
\t\t\t\tloadCusCate(clue_data['khm_customer_clue.cate_id']);
\t\t\t\tdeleGroup();
\t\t\t\t\$('#templateCon #rank').find('option[value=' + clue_data['khm_customer_clue.rank'] + ']').attr('selected', true);

\t\t\t\t//编辑保存
\t\t\t\t\$('#templateBox .add').click(function() {
\t\t\t\t\tvar postdata = {
\t\t\t\t\t\tid: id,
\t\t\t\t\t\tcustomer_id: clue_data['khm_customer_clue.customer_id']
\t\t\t\t\t};

\t\t\t\t\t\$('#templateBox').find('[addfield]').each(function(i) {
\t\t\t\t\t\tif(\$(this).attr('addfield') != 'label_id') {
\t\t\t\t\t\t\tpostdata[\$(this).attr('addfield')] = \$(this).val();
\t\t\t\t\t\t}
\t\t\t\t\t})

\t\t\t\t\t//标签
\t\t\t\t\tvar data = \$('#templateCon [addfield=\"label_id\"]').select2('data');
\t\t\t\t\tvar _data = [];
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t_data.push(data[i]['id']);
\t\t\t\t\t}
\t\t\t\t\tpostdata['label_id'] = _data.join(',');

\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_customer/add_clue',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: postdata,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tgetList(1);
\t\t\t\t\t\t\tykp.prompt('编辑成功');
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t})
\t\t\t})
\t\t}

\t\t//添加分组
\t\tfunction addCate() {
\t\t\t\$('#templateCon #addCusCate').unbind('click').click(function() {
\t\t\t\t\$('#cus_cate #catename').val('');
\t\t\t\t\$('#cus_cate').fadeIn();

\t\t\t\t//保存分组信息
\t\t\t\t\$('#cus_cate .submitCate').unbind('click').click(function() {
\t\t\t\t\tif(!\$('#cus_cate #catename').val().trim()) {
\t\t\t\t\t\tykp.prompt('分组名称不能为空');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tvar postdata = {
\t\t\t\t\t\tname: \$('#cus_cate #catename').val().trim()
\t\t\t\t\t};

\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_customer/add_clue_type',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: postdata,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\$('#cus_cate').fadeOut();
\t\t\t\t\t\t\tykp.prompt('客户分组添加成功');
\t\t\t\t\t\t\tloadCusCate();
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t});

\t\t\t\t//关闭添加分组
\t\t\t\t\$('#cus_cate .close_label').unbind('click').click(function() {
\t\t\t\t\t\$('#cus_cate').fadeOut();
\t\t\t\t});
\t\t\t});
\t\t}

\t\t//自定义列表
\t\tcs.custorm_check('#dynamic-table', '#dynamic-table_data', true);

\t\t//添加功能
\t\taddRecord();
\t\t
\t\tfunction deleGroup(){
\t\t\t\$('#templateCon #delCusCate').click(function() {
\t\t\t\t\t\$('#feedBack').fadeIn()
\t\t\t\t\t\$('#feedBack #label_cat').select2({
\t\t\t\t\t\tallowClear: true
\t\t\t\t\t});
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_customer/clue_type_list',
\t\t\t\t\t\tmethod: 'get',
\t\t\t\t\t\tdata: {},
\t\t\t\t\t\tsuccess: function(res) {
                            var data = res.data;
\t\t\t\t\t\t\tvar cate_html = [];
\t\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\t\tcate_html.push('<option value=\"' + data[i]['id'] + '\">' + data[i]['name'] + '</option>');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\$('#feedBack #label_cat').append(cate_html.join(''));
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t\$('#feedBack .hold').click(function() {
\t\t\t\t\t\tvar objs = \$('#feedBack #label_cat').select2('data');
\t\t\t\t\t\tvar ids = [];
\t\t\t\t\t\tif(objs[0].id == \"\") {
\t\t\t\t\t\t\tykp.prompt('请选择！');
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t\tfor(var j in objs) {
\t\t\t\t\t\t\tif(objs[j].id) {
\t\t\t\t\t\t\t\tids.push(objs[j].id);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl:\"/api/api_customer/clue_type_del\",
\t\t\t\t\t\t\tmethod:\"post\",
\t\t\t\t\t\t\tdata:{
\t\t\t\t\t\t\t\tid:ids.join(',')
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess:function(res) {
\t\t\t\t\t\t\t\tykp.prompt('删除成功');
\t\t\t\t\t\t\t\tloadCusCate();
\t\t\t\t\t\t\t\t\$('.close_label').parents('.label_popup').fadeOut();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t})
\t\t\t\t\tcs.closePop();
\t\t\t\t})
\t\t}
\t\t
\t\tfunction addRecord() {
\t\t\t\$('#addItem').click(function() {
\t\t\t\t\$('#showBox .title').text('添加线索');
\t\t\t\tshowMark('#template');
\t\t\t\tgetInfo();
\t\t\t\tgetType();
                cs.get_cus1('#templateBox #people');
                timeplug();
                function timeplug() {
                    if(!ace.vars['old_ie']) {
                        \$('#templateCon .date-timepicker1').datetimepicker({
                            // format: 'YYYY-MM-DD HH:mm',//use this option to display seconds
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
                        }).next().on(ace.click_event, function() {
                            \$(this).prev().focus();
                        });
                    }
                }
\t\t\t\t//加载客户分组
\t\t\t\tloadCusCate();
\t\t\t\tdeleGroup();
\t\t\t\t
\t\t\t\t//添加分组
\t\t\t\taddCate();

\t\t\t\t\$('#editTitile').html('添加记录');
\t\t\t\t\$('#templateBox .add').click(function() {
\t\t\t\t\tvar postdata = {};
\t\t\t\t\t\$('#templateBox').find('[addfield]').each(function(i) {
\t\t\t\t\t\tif(\$(this).attr('addfield') != 'label_id') {
\t\t\t\t\t\t    if(\$(this).attr('addfield') == \"next_time\"){
\t\t\t\t\t\t        let time = new Date(\$(this).val());
                                postdata[\$(this).attr('addfield')] = time.getTime(\$(this).val()) / 1000;
                            }else if(\$(this).attr('addfield') == \"team_id\"){
                                var data = \$('#templateCon .teamperson ').select2('data');
                                var salesman = [];
                                if(data.length == 0) {
                                    ykp.prompt('请选择协作人');
                                    return false;
                                } else {
                                    for(var i in data) {
                                        salesman.push(data[i]['id']);
                                    }
                                    postdata[\$(this).attr('addfield')] = salesman.join(',')
                                }
\t\t\t\t\t\t\t}else{
                                postdata[\$(this).attr('addfield')] = \$(this).val();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t})

\t\t\t\t\tvar data = \$('#templateCon [addfield=\"label_id\"]').select2('data');
\t\t\t\t\tvar _data = [];
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t_data.push(data[i]['id']);
\t\t\t\t\t}
\t\t\t\t\tpostdata['label_id'] = _data.join(',');

\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_customer/add_clue',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: postdata,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tgetList(1);
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t})
\t\t\t});


\t\t\t\$('#recordEdit').click(function() {
\t\t\t\tshowMark('#template');
\t\t\t\t\$('#editTitile').html('编辑记录');
\t\t\t});
\t\t}

\t\t//获取客户，客户分组，负责人等信息
\t\tfunction getInfo(data) {
\t\t\tvar khArr = [];
\t\t\tvar bmArr = [];

\t\t\t//加载负责人
\t\t\tvar emp = [];
\t\t\temp.push('<option value=\"\"> 请选择 </option>');
\t\t\tfor(var i in employees11) {
\t\t\t\temp.push('<option value=\"' + i + '\">' + employees11[i] + '</option>');
\t\t\t\t}
\t\t\t\$('#templateCon #employees_group').html(emp.join(''));
\t\t\tif(data) {
\t\t\t\t\$('#templateCon #employees_group').find('option[value=' + data['khm_customer_clue.user_id'] + ']').attr('selected', true)
\t\t\t}

\t\t\t// //加载客户标签分组
\t\t\t// var grp = [];
\t\t\t// grp.push('<option value=\"\"> 请选择 </option>');
\t\t\t// for(var i in groups) {
\t\t\t// \tgrp.push('<option value=\"' + groups[i]['cwm_label_cat.id'] + '\">' + groups[i]['cwm_label_cat.title'] + '</option>');
\t\t\t// }
\t\t\t// \$('#templateCon #label_cat').html(grp.join(''));
\t\t\t// \$('#templateBox #label_group').select2({allowClear:true,multiple:true});
\t\t\t// if(data) {
\t\t\t// \t\$('#templateCon #label_cat').find('option[value=' + data['khm_customer_clue.cate_id'] + ']').attr('selected', true);
\t\t\t// \t// \$('#templateCon #label_cat').trigger('change');
\t\t\t// \tselectLabel(data['khm_customer_clue.cate_id'],data['khm_customer_clue.label_id']);
\t\t\t// }
\t\t\t// // getLabel(); //切换客户标签分组，获取相应标签

\t\t\t\$('#templateCon #type').change(function() {
\t\t\t\tvar type = \$(this).val();
\t\t\t\tgetCustomer(type);
\t\t\t})

            //获取所有员工
            ykp.doAjax({
                async: false,
                url: '/api/api_employees/f7',
                method: 'post',
                data: {
                    //filter: 'bmm_employees.is_del <> 1 and EXISTS(SELECT id FROM khm_customer_clue WHERE user_id = bmm_employees.id)',
                    select: 'bmm_employees.id,bmm_employees.name'
                },
                success: function(res) {
                    var data = res.data;
                    \$('#templateCon .teamperson').select2({
                        allowClear: true
                    });
                    for(var i in data) {
                        if(data[i]['name']) {
                            \$('.teamperson ').append(new Option(data[i]['name'], data[i]['id']));
                        }
                    }
                }
            });

\t\t\t//加载所有标签
\t\t\t\$('#templateCon [addfield=\"label_id\"]').select2({
\t\t\t\tallowClear: true,
\t\t\t\tmultiple: true
\t\t\t});
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_label/f7',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tselect: 'cwm_label.id,cwm_label.title',
\t\t\t\t\tfilter: 'cwm_label.is_del = 0'
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar _data = res.data;
\t\t\t\t\tvar label_html = [];
\t\t\t\t\tfor(var i in _data) {
\t\t\t\t\t\tlabel_html.push('<option value=\"' + _data[i]['cwm_label.id'] + '\">' + _data[i]['cwm_label.title'] + '</option>');
\t\t\t\t\t}
\t\t\t\t\t\$('#templateCon [addfield=\"label_id\"]').html(label_html.join(''));

\t\t\t\t\tif(data) {
\t\t\t\t\t\t\$('#templateCon [addfield=\"label_id\"]').val(data['khm_customer_clue.label_id'].split(',')).trigger('change');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//加载客户分组
\t\tfunction loadCusCate(cate_id) {
\t\t\t\$('#templateCon [addfield=\"cate_id\"]').select2({
                allowClear: true
            });

\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_customer/clue_type_list',
\t\t\t\tmethod: 'get',
\t\t\t\tdata: {},
\t\t\t\tsuccess: function(res) {
                    var data = res.data;
\t\t\t\t\tvar cate_html = [];
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\tcate_html.push('<option value=\"' + data[i]['id'] + '\">' + data[i]['name'] + '</option>');
\t\t\t\t\t}
\t\t\t\t\t\$('#templateCon [addfield=\"cate_id\"]').html('<option value=\"\">请选择客户分组</option>');
\t\t\t\t\t
\t\t\t\t\t\$('#templateCon [addfield=\"cate_id\"]').append(cate_html.join(''));

\t\t\t\t\tif(cate_id) {
\t\t\t\t\t\t\$('#templateCon [addfield=\"cate_id\"]').val(cate_id).trigger('change');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\tgetGroup();
\t\t}

\t\tfunction selectLabel(cate_id, label_id) {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_label/index',
\t\t\t\tmethod: 'get',
\t\t\t\tdata: {
\t\t\t\t\tcat_id: cate_id
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tif(res.data.items.length == 0) {
\t\t\t\t\t\tykp.prompt('没有标签!');
\t\t\t\t\t\t\$('.labelBtn').html('没有标签');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\tvar _labels = [];
\t\t\t\t\tvar data = res.data.items;
\t\t\t\t\t// \$('#templateBox #label_group').select2({allowClear:true,multiple:true});
\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t_labels.push('<option value=\"' + data[i]['cwm_label.id'] + '\">' + data[i]['cwm_label.title'] + '</option>');
\t\t\t\t\t}
\t\t\t\t\t\$('#templateBox #label_group').html(_labels.join(''));
\t\t\t\t\t\$(\"#templateBox #label_group\").val(cate_id.split(',')).trigger('change');
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//获取客户标签分组相应 的所有标签
\t\tfunction getLabel(label_id) {
\t\t\t\$('#templateCon #label_cat').change(function() {
\t\t\t\tvar id = \$(this).val();
\t\t\t\tif(!id) {
\t\t\t\t\t\$('#templateBox #label_group').find('option').not(':first').remove();
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\t//刷新标签
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_label/index',
\t\t\t\t\tmethod: 'get',
\t\t\t\t\tdata: {
\t\t\t\t\t\tcat_id: id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\$('#templateBox #label_group').find('option').not(':first').remove();
\t\t\t\t\t\t// \$('#templateBox #label_group').select2({allowClear:true,multiple:true});
\t\t\t\t\t\tif(res.data.items.length == 0) {
\t\t\t\t\t\t\tykp.prompt('没有标签!');
\t\t\t\t\t\t\t\$('.labelBtn').html('没有标签');
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t\tvar _labels = [];
\t\t\t\t\t\tvar data = res.data.items;
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\t_labels.push('<option value=\"' + data[i]['cwm_label.id'] + '\">' + data[i]['cwm_label.title'] + '</option>');
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#templateBox #label_group').html(_labels.join(''));
\t\t\t\t\t\t\$(\"#templateBox #label_group\").find(\"option[value='\" + label_id + \"']\").attr(\"selected\", true);
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})

\t\t}

\t\t//全选
\t\tcheckAll();
\t});

\tfunction checkAll(status) {
\t\t\$(\"tbody input[name='check']\").each(function(i, n) {
\t\t\tn.checked = status;
\t\t});
\t}
</script>";
    }

    public function getTemplateName()
    {
        return "admin/clientManage/accountSales.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 465,  484 => 464,  19 => 1,);
    }
}
/* <style>*/
/* 	#templateCon label {*/
/* 		width: 93px;}*/
/* 	#templateCon [field] {*/
/* 		display: inline-block;*/
/* 		min-width: 150px;*/
/* 	}*/
/* 	#heightsearch1 input {*/
/* 		width: 180px;*/
/* 	}*/
/* </style>*/
/* <div class=" widget-main">*/
/* 	<div class="row">*/
/* 		<div class="col-lg-12">*/
/* 			<!-- <h3 class="header smaller lighter blue">线索</h3> -->*/
/* 			<div class="row" style="margin-top: 20px;" id="topTool">*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<input type="text" pts="0" sear="khm_customer.name" placeholder="企业名称" />*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<select style="margin: 12px !important;width: 180px" sear="khm_customer_clue.user_id" pts="3" class="custom advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 						<option value="">负责人</option>*/
/* 					</select>*/
/* 					<!-- <input type="text" pts="1"   placeholder="负责人"  sear="staff"> -->*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<button type="button" id="search" title="搜索" class="btn btn-info btn-sm">*/
/*                         <i class="fa fa-search"></i>*/
/*                     </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<button id="heightsearch" title="高级搜索" type="button" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/* 	                    <i class="fa fa-filter"></i>*/
/* 	                </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/* 	                    <i class="fa fa-refresh"></i>*/
/* 	                </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="117" style=" float: left;margin-right: 5px;">*/
/* 					<button type="button" id="addItem" title="添加" style="background:#32CD32 !important;border-color: #32CD32!important;" class="btn addBtn btn-info btn-sm position-relative">*/
/*                         <i class="fa fa-plus" ></i>*/
/*                     </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="299" style=" float: left; margin-right: 5px;">*/
/* 		             <button type="button"  title="导出" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="exportfile moveToClue btn addBtn btn-info btn-sm position-relative">*/
/* 		                 <i class="fa fa-sign-out"></i>*/
/* 		             </button>*/
/* 		        </div>*/
/* 				<div  class="col-sx-4" style=" float: left;margin-right: 5px; margin-bottom:5px;">*/
/* 					<div id="filterBtns" style="display:inline-block;width:260px;height: 36px">*/
/* 						<a href="javascript:void(0);" class="myFilter" style="width:33.3%;line-height:32px;background: #E6E6E6;" data-kind="0"> 查看全部</a>*/
/* 						<a href="javascript:void(0);" class="myFilter" style="width:33.3%;line-height:32px" data-kind="1"> 我负责的</a>*/
/* 						<a href="javascript:void(0);" class="myFilter" style="width:33.3%;line-height:32px" data-kind="3"> 我的下属</a>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="heightsearch1" class="col-sx-12" style="margin-top:30px;position: absolute; background: #fff; z-index: 1041; padding: 20px; display: none;">*/
/* */
/* 					<div class="row">*/
/* */
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>企业名称</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.name" />*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>负责人</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="margin: 12px !important;width: 180px" sear="khm_customer_clue.user_id" gjs=3 class="custom advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 								<option value="">请选择</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>分组</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="margin: 12px !important;width: 180px" sear="khm_customer_clue.cate_id  " gjs=3 class="cart_id advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 								<option value="">请选择</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>标签</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="margin: 12px !important;width: 180px" sear="khm_customer.label_id" gjs=2 class="label_list advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 								<option value="">请选择</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<!--<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>来源</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select sear="khm_customer.source" gjs=0 data-type="gj" style="width:180px;">*/
/* 								<option value="">  请选择 </option>*/
/* 								<option value="'转介绍'">转介绍</option>*/
/* 								<option value="'电话咨询'">电话咨询</option>*/
/* 								<option value="'线上注册'">线上注册</option>*/
/* 								<option value="'客户上门'">客户上门</option>*/
/* 								<option value="'陌生拜访'">陌生拜访</option>*/
/* 								<option value="'公司资源'">公司资源</option>*/
/* 								<option value="'个人资源'">个人资源</option>*/
/* 								<option value="'广告宣传'">广告宣传</option>*/
/* 								<option value="'电话营销' ">电话营销</option>*/
/* 							</select>*/
/* 							&lt;!&ndash; <input type="text" gjs=0 sear="khm_customer.source"> &ndash;&gt;*/
/* 						</div>-->*/
/* */
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>销售阶段</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select gjs=0 sear="khm_customer_clue.rank" data-type="gj" style="width:180px;">*/
/* 								<option value=""> 请选择 </option>*/
/* 								<option value="1">新入库</option>*/
/* 								<option value="2">初步沟通</option>*/
/* 								<option value="3">判断分析</option>*/
/* 								<option value="4">上门面谈</option>*/
/* 								<option value="5">合同签订</option>*/
/* 							</select>*/
/* 						</div>*/
/* */
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* */
/* 							<label>最后跟进时间</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> > </option>*/
/* 								<option> &lt; </option>*/
/* 							</select>*/
/* 							<div class="input-group"  style="display: inline-flex; width: 180px;">*/
/* 							<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 							<input class="form-control" type="text"  data-status="rangtime" gjs=0 sear="last_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 						</div>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>下次跟进时间</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> > </option>*/
/* 								<option> &lt; </option>*/
/* 							</select>*/
/* 							<div class="input-group"  style="display: inline-flex; width: 180px;">*/
/* 							<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 							<input class="form-control" type="text"  data-status="rangtime" gjs=0 sear="khm_customer_clue.next_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 						</div>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style="clear:both;padding-top:10px;text-align:center;">*/
/* 							<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/* 	                        查询*/
/* 	                    </button>*/
/* 							<button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 								重置*/
/* 							</button>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="custom_table">*/
/* 				<table id="dynamic-table">*/
/* 					<thead>*/
/* 						<tr class="thColor">*/
/* 							<th class="hidden-480 center">操作</th>*/
/* 							<th data-num="1">企业名称</th>*/
/* 							<th data-num="2">成立日期</th>*/
/* 							<th data-num="3">联系人</th>*/
/* 							<th data-num="4" class="hidden-480">销售阶段</th>*/
/* 							<th data-num="5">客户分组</th>*/
/* 							<th data-num="6" class="hidden-480">客户标签</th>*/
/* 							<th data-num="7" class="hidden-480">负责人</th>*/
/* 							<th data-num="8" class="hidden-480">协作人</th>*/
/* 							<th data-num="9" class="hidden-480">跟进次数</th>*/
/* 							<th data-num="10" class="hidden-480">最后跟进时间</th>*/
/* 							<th data-num="11" class="hidden-480">未跟进天数</th>*/
/* 							<th data-num="12" class="hidden-480">下次跟进时间</th>*/
/* 							<th data-num="13" class="hidden-480">逾期</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* */
/* 					<tbody id="dynamic-table_data">*/
/* */
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/* 			<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
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
/* 		</div>*/
/* */
/* 		<div class="row" id="template1" style="display: none;">*/
/* 			<div style="margin-top:15px">*/
/* 				<label>客户：</label>*/
/* 				<span field="khm_customer.name"></span>*/
/* 			</div>*/
/* 			<div style="margin-top:15px">*/
/* 				<label>客户分组： </label>*/
/* 				<span field="khm_customer_clue.cate_id"></span>*/
/* 				<label style="margin-left:15px;">客戶标签：</label>*/
/* 				<span field="label_name"></span>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;position: relative;padding-left: 99px;">*/
/* 				<label style="position: absolute;top:0px;left: 0;">联系人： </label>*/
/* 				<span style="width: 446px" field="linkman"></span>*/
/* 			</div>*/
/* 			<div style="margin-top:15px">*/
/* 				<label>销售阶段：</label>*/
/* 				<span field="khm_customer_clue.rank"></span>*/
/* 				<label style="margin-left:15px;">负责人：</label>*/
/* 				<span field="user_name"></span>*/
/* 			</div>*/
/* 			<div style="margin-top:15px;position: relative;padding-left: 99px;">*/
/* 				<label style="position: absolute;top:0px;left: 0;">协作人： </label>*/
/* 				<span style="width: 446px" field="khm_customer_clue.team_id"></span>*/
/* 			</div>*/
/* 			<div style="margin-top:15px">*/
/* 				<label> 成立日期：</label>*/
/* 				<span field="khm_customer.stablish_time"></span>*/
/* 			</div>*/
/* 			<div style="margin-top:15px">*/
/* 				<label> 跟进次数：</label>*/
/* 				<span field="visit_num"></span>*/
/* 				<label style="margin-left:15px;">最后跟进时间：</label>*/
/* 				<span field="last_time"></span>*/
/* 			</div>*/
/* 			<div style="margin-top:15px">*/
/* 				<label> 未跟进天数：</label>*/
/* 				<span field="">暂无字段</span>*/
/* 				<label style="margin-left:15px;">下次跟进时间：</label>*/
/* 				<span field="khm_customer_clue.next_time"></span>*/
/* 			</div>*/
/* 			<div style="margin-top:15px">*/
/* 				<label>  逾期：</label>*/
/* 				<span field="yuqi"></span>*/
/* 				<label style="margin-left:15px;"> 创建人：</label>*/
/* 				<span field="khm_customer_clue.user_id"></span>*/
/* 			</div>*/
/* 			<div style="margin-top:15px">*/
/* 				<label>创建时间：</label>*/
/* 				<span field="create_time"></span>*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="row" id="template" style="display:none;">*/
/* 			<div>*/
/* 				<div class="widget-box">*/
/* 					<!--<div style="margin-top:15px">*/
/* 						<label>公海类型：</label>*/
/* 						<select addfield="customer_type" class="select2-hidden-accessible" id="type" style="width: 180px;">*/
/* 							<option value="">全部类型</option>*/
/* 						</select>*/
/* 						&lt;!&ndash;<input type="text" addfield="customer_id">&ndash;&gt;*/
/* 					</div>-->*/
/* 					<div style="margin-top: 15px">*/
/* */
/* 						<label>客户：</label>*/
/* 						<select addfield="customer_id" id="people" style="width: 180px;">*/
/* 							<option value="">请选择</option>*/
/* 						</select>*/
/* 						<!--<input type="text" addfield="customer_id">-->*/
/* */
/* 					</div>*/
/* 					<div style="margin-top:15px">*/
/* 						<label>客户分组： </label>*/
/* 						<select style="width: 180px;" addfield="cate_id" class="cusType select2-hidden-accessible" tabindex="-1" id="label_cat" aria-hidden="true">*/
/* 							<option value="">请选择客户分组</option>*/
/* 						</select>*/
/* 						<button id="addCusCate" style="line-height:normal;height:30px;top:0;" class="btn btn-info btn-sm">添加</button>*/
/* 						<button id="delCusCate" class="btn  btn-sm" style="line-height:normal;height:30px;top:0; background: #FF5722 !important;">删除</button>*/
/* 					</div>*/
/* 					<!--<div style="margin-top:15px">*/
/* 						<label>标签：</label>*/
/* 						&lt;!&ndash;<input type="text" addfield="phone">&ndash;&gt;*/
/* 						<select addfield="label_id" id="label_group" style="width:calc(100% - 65px);">*/
/* 						</select>*/
/* 					</div>-->*/
/* 					<div style="margin-top:15px">*/
/* */
/* 						<label>负责人：</label>*/
/* 						<select addfield="user_id" id="employees_group" style="width: 180px;">*/
/* */
/* 						</select>*/
/* 						<label>销售阶段：</label>*/
/* 						<select addfield="rank" style="width: 180px;">*/
/* 							<option value=""> 请选择 </option>*/
/* 							<option value="1" selected >新入库</option>*/
/* 							<option value="2">初步沟通</option>*/
/* 							<option value="3">判断分析</option>*/
/* 							<option value="4">上门面谈</option>*/
/* 							<option value="5">合同</option>*/
/* 						</select>*/
/* 						<!-- <label style="margin-left:15px;">客户来源：</label>*/
/* 							<select type="text" addfield="source" style="width: 180px;">*/
/* 								<option value=""> 请选择 </option>*/
/*                                 <option value="转介绍">转介绍</option>*/
/*                                 <option>电话咨询</option>*/
/*                                 <option>线上注册</option>*/
/*                                 <option>客户上门</option>*/
/*                                 <option>陌生拜访</option>*/
/*                                 <option>公司资源</option>*/
/*                                 <option>个人资源</option>*/
/*                                 <option>广告宣传</option>*/
/*                                 <option>电话营销</option>*/
/* 							</select> -->*/
/* 					</div>*/
/* 					<div style="margin-top:15px;">*/
/* 						<label>下次跟进时间：</label>*/
/* 						<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 							<input class="date-timepicker1 required" addfield="next_time" style="height: 30px; width: 150px;padding-left:5px;">*/
/* 							<span class="input-group-addon" style="width:30px;height:30px;">*/
/*                    			 <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                 			</span>*/
/* 						</div>*/
/* 					</div>*/
/* 					 <div style="margin-top:15px;">*/
/* 						<label>协作人：</label>*/
/* 						 <select multiple="" addfield="team_id" class="teamperson select2 select2-hidden-accessible" data-placeholder="请选择" style="width: 437px;" tabindex="-1" aria-hidden="true"></select>*/
/* 					</div>*/
/* 					<div style="text-align:center;margin-top:15px;">*/
/* 						<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* 						<button class="sure_button add">*/
/*                             <i class="fa fa-check" aria-hidden="true"></i>*/
/*                             保存*/
/*                         </button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div id="cus_cate" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 			<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd; box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 				<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 					<span style="display: inline-block;">添加客户分组</span>*/
/* 					<a href="javascript:;" class="close_label" style="float:right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 				</div>*/
/* 				<div>*/
/* 				</div>*/
/* 				<div style="padding: 10px 50px;">*/
/* 					<label> 分组名称： </label>*/
/* 					<input class="required" style="height:28px;padding:5px;" id="catename">*/
/* 					<!-- <input width="200px" style="margin: auto;" id="efile" /> -->*/
/* 					<!--<hr>-->*/
/* 				</div>*/
/* 				<div style="padding:15px;text-align:right;">*/
/* 					<button class="btn btn-info  submitCate" style="padding: 6px; border-radius: 0px;">保存</button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="row" id="template2" style="display:none;">*/
/* 			<div>*/
/* 				<div class="widget-box">*/
/* */
/* 					<div style="margin-top:15px;">*/
/* 						<label>客户：</label>*/
/* 						<span style="display: inline-block;" class="customer_name"></span>*/
/* 					</div>*/
/* */
/* 					<div style="margin-top:15px">*/
/* 						<label>客户分组： </label>*/
/* 						<select style="width: 180px" addfield="cate_id" class="cusType select2-hidden-accessible" tabindex="-1" id="label_cat" aria-hidden="true">*/
/* 							<option value="">请选择客户分组</option>*/
/* 						</select>*/
/* 						<button id="addCusCate" class="btn btn-info btn-sm" style="line-height:normal;height:30px;top:0;">添加</button>*/
/* 						<button id="delCusCate" class="btn  btn-sm" style="line-height:normal;height:30px;top:0; background: #FF5722 !important;">删除</button>*/
/* 					</div>*/
/* 					<div style="margin-top:15px">*/
/* 						<label>标签：</label>*/
/* 						<!--<input type="text" addfield="phone">-->*/
/* 						<select addfield="label_id" id="label_group" style="width:calc(100% - 65px);">*/
/* 						</select>*/
/* 					</div>*/
/* 					<div style="margin-top:15px;">*/
/* 						<label>负责人：</label>*/
/* 						<select addfield="user_id" id="employees_group" style="width: 180px;">*/
/* 						</select>*/
/* 						<label>销售阶段：</label>*/
/* 						<select addfield="rank" id="rank" style="width: 180px;">*/
/* 							<option value=""> 请选择 - - -</option>*/
/* 							<option value="1">新入库</option>*/
/* 							<option value="2">初步沟通</option>*/
/* 							<option value="3">判断分析</option>*/
/* 							<option value="4">上门面谈</option>*/
/* 							<option value="5">合同</option>*/
/* 						</select>*/
/* 					</div>*/
/* */
/* 					<!-- <div style="margin-top:15px;">*/
/* 						<label>客户来源：</label>*/
/* 						<select type="text" addfield="source" style="width: 180px">*/
/* 							<option value="">请选择</option>*/
/*                             <option value="转介绍">转介绍</option>*/
/*                             <option>电话咨询</option>*/
/*                             <option>线上注册</option>*/
/*                             <option>客户上门</option>*/
/*                             <option>陌生拜访</option>*/
/*                             <option>公司资源</option>*/
/*                             <option>个人资源</option>*/
/*                             <option>广告宣传</option>*/
/*                             <option>电话营销</option>*/
/* 						</select>*/
/* 						<label style="margin-left:15px;display:none;" class="introducer" >介绍人：</label>*/
/* 						<input type="text" addfield="introducer" class="introducer" style="display:none;">*/
/* 					</div> -->*/
/* 					<div style="text-align:center;margin-top:15px;">*/
/* 						<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* 						<button class="sure_button add">*/
/*                             <i class="fa fa-check" aria-hidden="true"></i>*/
/*                             保存*/
/*                         </button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="label_popup" id="feedBack" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 			<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 	            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 				<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 					<span style="display: inline-block;">请选择要删除的分组</span>*/
/* 					<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 				</div>*/
/* 				<div style="padding: 10px 50px;">*/
/* 					<div style="margin-top:15px">*/
/* 						<label>客户分组： </label>*/
/* 						<select style="width: 180px" multiple="" addfield="cate_id" class="cusType select2-hidden-accessible" tabindex="-1" id="label_cat" aria-hidden="true">*/
/* 							<option value="">请选择客户分组</option>*/
/* 						</select>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div style="padding:15px;text-align:right;">*/
/* 					<button class="close_label">关闭</button>*/
/* 					<button class="hold">保存</button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% include 'admin/mark.html' %} {% include 'admin/customerDetail.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* <script>*/
/* 	jQuery(function($) {*/
/* 		cs.getNodes([117]);*/
/* 		var page_size = 10; //分页*/
/* 		var employees = {}; //所有员工*/
/*         var employees11 = {}; //所有员工*/
/* 		var groups = {}; //所有客户分组*/
/* 		var labels = {}; //所有标签*/
/* 		cs.dataRang();*/
/* 		var order = 'khm_customer_clue.id desc';*/
/* 		//获取所有标签*/
/* 		var filter = "";*/
/* 		ykp.doAjax({*/
/* 			async: false,*/
/* 			url: '/api/api_label/f7',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: 'cwm_label.is_del = 0'*/
/* 			},*/
/* 			success: function(res) {*/
/* 				var data = res.data;*/
/* 				for(var i in data) {*/
/* 					labels[data[i]['cwm_label.id']] = {*/
/* 						title: data[i]['cwm_label.title'],*/
/* 						parent: data[i]['cwm_label.cat_id']*/
/* 					};*/
/* 				}*/
/* 			}*/
/* 		});*/
/*         //导出功能*/
/*         cs.exportFile({*/
/*             url:"/api/api_customer/export_clue",*/
/*             title:"线索列表"*/
/*         });*/
/* */
/*         $('#filterBtns a').mouseover(function() {*/
/*             $(this).addClass('over');*/
/*         })*/
/* */
/*         $('#filterBtns a').mouseout(function() {*/
/*             $(this).removeClass('over');*/
/*         })*/
/* */
/*         $('.myFilter').click(function() {*/
/*             if(!$(this).hasClass('clc')) {*/
/*                 $(this).addClass('clc').siblings().removeClass('clc');*/
/*             }*/
/*             var user = JSON.parse(ykp.getCookie('userinfo'));*/
/*             var userId = JSON.parse(ykp.getCookie('uid'));*/
/*             var data = {*/
/*                 "type": 2,*/
/*                 "page_size": page_size,*/
/*                 'page': 1*/
/*             };*/
/*             var filter_ = $(this).attr('data-kind');*/
/*             if(filter_ == '0') {*/
/*                 getList(1);*/
/*                 return;*/
/*             }*/
/*             //我负责的*/
/*             if(filter_ == '1') {*/
/*                 data['filter'] = "khm_customer_clue.is_del = 0 and (user_id IN ("+userId+") OR FIND_IN_SET("+userId+", team_id))";*/
/*             }*/
/*            /* //我关注的*/
/*             if(filter_ == '2') {*/
/*                 data['relation'] = 'helloworld';*/
/*             }*//* */
/*             //我的下属*/
/*             if(filter_ == '3') {*/
/*                 data.xiashu = true;*/
/*                 data['filter'] = "user_id !="+userId;*/
/*             }*/
/*             //filter = data['where'];*/
/*             getList_2(data);*/
/*         })*/
/* */
/* */
/*         //通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_customer/index_clue',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter:'',*/
/* 				limit: page_size,*/
/* 				type:1*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '#pageBar'*/
/* 			},*/
/* 			initOrder:'khm_customer.id',*/
/* 			defaultOrder: order,*/
/* 			contentId: "#dataList",*/
/* 			params:[{*/
/* 				id: "#dynamic-table",*/
/* 				field:["","khm_customer.name","khm_customer.stablish_time","",*/
/* 					"khm_customer_clue.rank","khm_customer_clue.cate_id","","user_name","","","khm_customer_clue.last_time","","khm_customer_clue.next_time"*/
/* 				]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* 		//获取所有客户标签分组*/
/* 		getGroup();*/
/* 		function getGroup(){*/
/* 			ykp.doAjax({*/
/* 				async: false,*/
/* 				url: '/api/api_customer/clue_type_list',*/
/* 				method: 'get',*/
/* 				data: {},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					for(var i in data) {*/
/* 						groups[data[i]['id']] = data[i]['name'];*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//获取所有员工*/
/* 		ykp.doAjax({*/
/* 			async: false,*/
/* 			url: '/api/api_employees/f7',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: 'bmm_employees.is_del <> 1 and EXISTS(SELECT id FROM khm_customer_clue WHERE user_id = bmm_employees.id)',*/
/* 				select: 'bmm_employees.id,bmm_employees.name'*/
/* 			},*/
/* 			success: function(res) {*/
/* 				var data = res.data;*/
/* 				$('.advandced-search').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* 				for(var i in data) {*/
/* 					 if(data[i]['name']) {*/
/* 					employees[data[i]['id']] = data[i]['name'];*/
/* 					$('.custom').append(new Option(data[i]['name'], data[i]['id']));*/
/* 				}*/
/* 					}*/
/* 			}*/
/* 		});*/
/* */
/*         ykp.doAjax({*/
/*             async: false,*/
/*             url: '/api/api_employees/f7',*/
/*             method: 'post',*/
/*             data: {*/
/*                 select: 'bmm_employees.id,bmm_employees.name'*/
/*             },*/
/*             success: function(res) {*/
/*                 var data = res.data;*/
/*                 for(var i in data) {*/
/*                     if(data[i]['name']) {*/
/*                         employees11[data[i]['id']] = data[i]['name'];*/
/*                     }*/
/*                 }*/
/*             }*/
/*         });*/
/* 		//获取分组*/
/* 		ykp.doAjax({*/
/* 			async: false,*/
/* 			url: '/api/api_customer/clue_type_list',*/
/* 			method: 'get',*/
/* 			data: {*/
/* 				limit:999*/
/* 			},*/
/* 			success: function(res) {*/
/* 				var data = res.data;*/
/* 				$('.cart_id').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* 				for(var i in data) {*/
/* 					$('.cart_id').append(new Option(data[i]['name'], data[i]['id']));*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 		//获取标签*/
/* 		ykp.doAjax({*/
/* 			async: false,*/
/* 			url: '/api/api_customer/index_clue_lable',*/
/* 			method: 'post',*/
/* 			data: {},*/
/* 			success: function(res) {*/
/* 				var data = res.data;*/
/* 				$('.label_list').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* 				for(var i in data) {*/
/* 					$('.label_list').append(new Option(data[i]['title'], data[i]['id']));*/
/* 				}*/
/* 			}*/
/* 		});*/
/* */
/* 		var aid_2 = ykp.getCookie("aid_2");*/
/* 		var time = ykp.getCookie("time");*/
/* */
/* 		//接收首页跳转*/
/* 		if(time != '' && time != undefined) {*/
/* 			var timestamp = ''; //条件*/
/* 			var today = new Date().setHours(0, 0, 0, 0) / 1000; //今天零点的时间戳*/
/* 			var day_1 = cs.getNowTime(Date.parse(new Date()) / 1000).substr(-2) - 1; //距离本月1号有多少天*/
/* 			var lastmonthday_1 = cs.getNowTime(Date.parse(new Date()) / 1000);*/
/* 			var newday = lastmonthday_1.substring(0, 4) + '-' + (lastmonthday_1.substring(5, 7) - 1) + '-01';*/
/* 			if(lastmonthday_1.substring(5, 7) == 1) {*/
/* 				newday = (lastmonthday_1.substring(0, 4) - 1) + '-12-01';*/
/* 			}*/
/* 			var newdaytime = Date.parse(new Date(newday)) / 1000; //上个月1号的时间戳*/
/* 			switch(time) {*/
/* 				case '1':*/
/* 					timestamp = `khm_customer_clue.create_time>${today}`;*/
/* 					break;*/
/* 				case '2':*/
/* 					timestamp = `khm_customer_clue.create_time<${today} and khm_customer_clue.create_at>${today-86400}`*/
/* 					break;*/
/* 				case '3':*/
/* 					timestamp = `khm_customer_clue.create_time>${today-86400*6}`;*/
/* 					break;*/
/* 				case '4':*/
/* 					timestamp = `khm_customer_clue.create_time>${today-86400*29}`;*/
/* 					break;*/
/* 				case '5':*/
/* 					timestamp = `khm_customer_clue.create_time>${today-86400*day_1}`;*/
/* 					break;*/
/* 				case '6':*/
/* 					timestamp = `khm_customer_clue.create_time<${today-86400*day_1} and khm_customer_clue.create_at>${newdaytime}`;*/
/* 					break;*/
/* 			}*/
/* 			var filter = `khm_customer_clue.is_del = 0 and khm_customer_clue.user_id=${aid_2} and ${timestamp}`;*/
/* 			if(aid_2 == '' || aid_2 == undefined) {*/
/* 				filter = `${timestamp}`*/
/* 			}*/
/* 			ykp.list({*/
/* 				url: '/api/api_customer/index_clue',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: page_size,*/
/* 					filter: filter*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt('暂无数据！');*/
/* 						}, 1000);*/
/* 						$('#dynamic-table_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					} else {*/
/*                         addList(res);*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 			ykp.setCookie("aid", "", (1 / 24));*/
/* 			ykp.setCookie("aid_2", "", (1 / 24));*/
/* 			ykp.setCookie("time", "", (1 / 24));*/
/* 		} else {*/
/*             var titleTask = ykp.getCookie('titleTask');*/
/*             if(titleTask != '' && titleTask != undefined) {*/
/*                 var today = new Date().setHours(0, 0, 0, 0) / 1000; //今天零点的时间戳*/
/*                 var curTime = Date.parse(new Date()) / 1000;*/
/*                 var data = {*/
/*                     limit: page_size,*/
/*                     filter: `khm_customer_clue.is_del = 0`*/
/*                 }*/
/*                 if(titleTask == 8){*/
/*                     data.filter += ` and khm_customer_clue.next_time > ${ curTime }`;*/
/* 				}else{*/
/*                     data.filter += ` and khm_customer_clue.next_time < ${ curTime } and khm_customer_clue.next_time > 0 and*/
/*                     not exists(select khm_contact_log.id from khm_contact_log where khm_customer_clue.customer_id = khm_contact_log.customer_id and*/
/*                      khm_contact_log.contact_type=4 and khm_contact_log.is_del=0)`;*/
/*                 }*/
/*                 getList_2(data);*/
/*                 ykp.setCookie('titleTask', '');*/
/*             } else {*/
/*                 //页面初始化*/
/*                 ykp.setCookie("filter", "");*/
/*                 ykp.setCookie("where", "");*/
/*                 getList(1);*/
/*             }*/
/* 		}*/
/* */
/* 		$('#flush').click(function() {*/
/* 			filter = '';*/
/* 			$('[sear="customer_name"]').val('');*/
/* 			$('[sear="khm_customer_clue.user_id"]').val('').trigger('change');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* */
/* 			getList();*/
/* 		})*/
/* */
/* 		$('#changePageNum').change(function() {*/
/*             page_size = $(this).val();*/
/* 			ykp.setCookie('page_size', page_size);*/
/* 			getList(1);*/
/* 		})*/
/* 		if(!ace.vars['old_ie']) {*/
/* 			$('.date-timepicker1').datetimepicker({*/
/* 				// format: 'YYYY-MM-DD', //use this option to display seconds*/
/* 				icons: {*/
/* 					time: 'fa fa-clock-o',*/
/* 					date: 'fa fa-calendar',*/
/* 					up: 'fa fa-chevron-up',*/
/* 					down: 'fa fa-chevron-down',*/
/* 					previous: 'fa fa-chevron-left',*/
/* 					next: 'fa fa-chevron-right',*/
/* 					today: 'fa fa-arrows ',*/
/* 					clear: 'fa fa-trash',*/
/* 					close: 'fa fa-times'*/
/* 				}*/
/* 			}).next().on(ace.click_event, function() {*/
/* 				$(this).prev().focus();*/
/* 			});*/
/* 		}*/
/* */
/* 		cs.showHeightSearch('#heightsearch', '#heightsearch1');*/
/* */
/* 		function search() {*/
/* 			var data = {*/
/* 				url: '/api/api_customer/index_clue',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* */
/* 				}*/
/* 			}*/
/* */
/* 			cs.doSearch('#search', data, 'filter', false, function(res,_filter) {*/
/* 				filter = _filter;*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$('#dynamic-table_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 					return false;*/
/* 				} else {*/
/* 					addList(res);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//获取所有公海类型*/
/* 		function getType() {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_customer_type/f7',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					select: 'khm_customer_type.id,khm_customer_type.name'*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					var option = ''; //<option value="">  请选择公海类型  </option><option value="0">  全部类型  </option>*/
/* 					for(var i in data) {*/
/* 						//customer_type[data[i]['id']] =data[i]['name'];*/
/* 						option += `<option value="${data[i]['id']}">${data[i]['name']}</option>`;*/
/* 					}*/
/* 					$('#templateCon #type').select2({*/
/* 						allowClear: true*/
/* 					});*/
/* 					$('#templateCon #type').html(option);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		function getCustomer(type) {*/
/* 			$('#templateCon [addfield="customer_id"]').find('option').not(':first').remove();*/
/* 			var people = [];*/
/* 			var data = {*/
/* 				type: type*/
/* 			};*/
/* 			if(type == 0) {*/
/* 				data = {};*/
/* 			}*/
/* 			//加载客户*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_customer/get_customer',*/
/* 				method: 'post',*/
/* 				data: data,*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					$('#templateBox #people').select2({*/
/* 						allowClear: true*/
/* 					})*/
/* 					people.push('<option value=""> 请选择 </option>');*/
/* 					for(var i in data) {*/
/* 						people.push('<option value="' + data[i]['khm_customer.id'] + '">' + data[i]['khm_customer.name'] + '</option>')*/
/* 					}*/
/* 					$('#templateBox #people').html(people.join(''));*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		dohSearch();*/
/* */
/* 		function dohSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_customer/index_clue',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					limit: page_size*/
/* 				}*/
/* 			}*/
/* */
/* 			cs.hSearch('#search1', data, 'filter', false, function(res,_filter) {*/
/* 				filter = _filter;*/
/* 				$('.in').removeClass('modal-backdrop');*/
/* 				$("#heightsearch1").slideUp();*/
/* 				$("#heightsearch").removeClass('active').css('z-index', '0');*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$('#dynamic-table_data').html('<tr><td colspan="9"><div class="table-actions clearfix"></div> <div style="text-align: center" class="page">暂无数据</div></td></tr>');*/
/* 					return false;*/
/* 				}*/
/* 				addList(res);*/
/* 			})*/
/* 		}*/
/* */
/* 		function getList(current) {*/
/*             search();*/
/* 			ykp.list({*/
/* 				url: '/api/api_customer/index_clue',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					page: current,*/
/* 					limit: page_size,*/
/* 					order: order,*/
/* 					filter:filter*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function() {*/
/* 							ykp.prompt('暂无数据！');*/
/* 						}, 1000);*/
/* 						$('#dynamic-table_data').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					} else {*/
/* 						addList(res);*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/*         function getList_2(data) {*/
/*             ykp.list({*/
/*                 url: '/api/api_customer/index_clue',*/
/*                 method: 'post',*/
/*                 data: data,*/
/*                 pageBar: {*/
/*                     id: '#pageBar',*/
/*                     order: order*/
/*                 },*/
/*                 loadList: function(res) {*/
/*                     if(res.data.items == "") {*/
/*                         setTimeout(function() {*/
/*                             ykp.prompt('暂无数据！');*/
/*                         }, 1000);*/
/*                         $('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/*                         return false;*/
/*                     } else {*/
/*                         addList(res);*/
/*                     }*/
/*                 }*/
/*             })*/
/*         }*/
/* */
/* 		function addList(res) {*/
/* 			var sales = [];*/
/* 			var data = res.data.items;*/
/* 			var rank = ['', '新入库', '初步沟通', '判断分析', '上门面谈', '合同签订'];*/
/* 			var datahtml = "<p align='left'>aaaa123aaaaaa<br/>13213</p>";*/
/* 			var styles = [];*/
/* */
/* 			$('#dynamic-table th').each(function(i, e) {*/
/* 				styles.push($(this).css('display'));*/
/* 			});*/
/* */
/* 			var labels = []; //标签*/
/* 			var labels_name = []; //标签名*/
/* 			var labelArr = {};*/
/*             var _labelArr = [];*/
/*             for(var i in data) {*/
/*                 labels_name = [];*/
/* 				labels = data[i]['label_name'];*/
/*                 let _emId = data[i]['khm_customer_clue.team_id'].split(',');*/
/*                 let sname = [];*/
/*                 if(_emId != ""){*/
/*                      for(var v=0;v<_emId.length;v++){*/
/*                          sname.push(employees11[_emId[v]])*/
/* */
/*                 		}*/
/* 				}*/
/* 				for(var k in labels) {*/
/* 					labels_name.push(labels[k]['title']);*/
/* 				}*/
/* */
/* 				labelArr[i] = labels_name;*/
/*                 /* '<a contentAuthority="118"> <span style="cursor: pointer" id="recordEdit" class="editInfo btBlue" title="编辑"><i class="fa fa-pencil-square-o"></i></span></a>'*//* */
/* 				sales.push('<tr data-id="' + data[i]['khm_customer_clue.id'] + '">',*/
/* 					'<td class="center">',*/
/* 					'<label class="pos-rel">',*/
/* 					'<a> <span style="cursor: pointer" id="" class="info btOrange" title="详情"><i class="fa fa-info"></i></span></a> ',*/
/* 					'<a  class="btRed del" href="javascript:;"  style="color:#fff !important;" title="删除"><i class="fa fa-trash"></i></a>',*/
/* 					'</label>',*/
/* 					'</td>',*/
/* 					'<td data-num="1" style="display:' + styles[1] + ';" data-id="' + data[i]['khm_customer.id'] + '" data-cid="' + data[i]['khm_customer.id'] + '">',*/
/* 					'<a href="#" class="pos-rel customerDetail">' + data[i]['khm_customer.name']+'</a>',*/
/* 					'<label class="pos-rel"> <i class="iconBnt fa fa-info-circle" style="color:'+(data[i]['Remark'].length > 0 ? 'red' : "")+'" data-rel="tooltip" data-placement="right" data-html="true" title="' + cs.getRemark(data[i]['Remark']) + '" ></i></label></td>',*/
/* 					'<td data-num="2"  style="display:' + styles[2] + ';" >'+cs.getNowTime(data[i]['khm_customer.stablish_time'],true)+'</td>',*/
/*                     '<td data-num="3"  style="display:' + styles[3] + ';" >'+data[i]['linkman']+'</td>',*/
/* 					'<td data-num="4"  style="display:' + styles[4] + ';" >'+rank[data[i]['khm_customer_clue.rank']] +'</td>',*/
/*                     '<td data-num="5"  style="display:' + styles[5] + ';" >' + (data[i]['khm_customer_clue.cate_id'] != '0' ? groups[data[i]['khm_customer_clue.cate_id']] : '') + '</td>',*/
/* 					'<td data-num="6"  style="display:' + styles[6] + ';" >' + labelArr[i].join(',') + '</td>',*/
/*                     '<td data-num="7" style="display:' + styles[7] + ';" >'+ (data[i]['user_name'] ? data[i]['user_name']:"") +'</td>',*/
/*                     '<td data-num="8" style="display:' + styles[8] + ';" >'+sname.join(",")+'</td>',*/
/*                     '<td data-num="9" style="display:' + styles[9] + ';" >'+(data[i]['visit_num']>0 ? data[i]['visit_num'] : '')+'</td>',*/
/* 					'<td data-num="10" style="display:' + styles[10] + ';" >'+ cs.getNowTime(data[i]['last_time'],true) + '</td>',*/
/* 					'<td data-num="11" style="display:' + styles[11] + ';" >'+(data[i]['last_time']>0 ? Math.floor((Date.now()/1000 - data[i]['last_time'])/86400) : '') +'</td>',*/
/*                     '<td data-num="12" style="display:' + styles[12] + ';" >'+cs.getNowTime(data[i]['khm_customer_clue.next_time'],true)+'</td>',*/
/*                     '<td data-num="13" style="display:' + styles[13] + ';" >'+(((data[i]["khm_customer_clue.next_time"] >= Date.now()/1000) || (data[i]["khm_customer_clue.next_time"] == 0)) ? "否" : "是") +'</td>',*/
/* 					'</tr>');*/
/* 				labels = [];*/
/* 				labels_name = [];*/
/* 			}*/
/*             $('#dynamic-table_data').html(sales.join(''));*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/* 			custom.showReamrk();*/
/* 			custom.get_custom_info();*/
/* */
/* 			cs.getNodes([118]);*/
/* */
/* 			editRecord(data);*/
/* */
/* 			recordInfo();*/
/* 		}*/
/* */
/* 		//线索详情*/
/* 		function recordInfo() {*/
/* 			$('.info').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				showMark('#template1');*/
/* 				$('#showBox .title').text('详情');*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_customer/index_clue',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						filter: 'khm_customer_clue.id = ' + id*/
/* 					},*/
/* 					success: function(res) {*/
/*                         console.log(res);*/
/*                         var data = res.data.items[0];*/
/* 						var rank = ['', '新入库', '初步沟通', '判断分析', '上门面谈', '合同签订'];*/
/* */
/* 						var _labels = [];*/
/* 						var _labels_name = [];*/
/* 						$('#templateCon [field]').each(function(i, e) {*/
/* 							if(data['khm_customer.source'] == '转介绍') {*/
/* 								$('#templateCon .introduce').show();*/
/* 							}*/
/* 							if($(this).attr('field') == 'khm_customer_clue.rank') {*/
/* 								$(this).text(rank[data[$(this).attr('field')]]);*/
/* 								return true;*/
/* 							}*/
/* 							if($(this).attr('field') == 'khm_customer_clue.user_id') {*/
/* 								$(this).text(employees[data[$(this).attr('field')]]);*/
/* 								return true;*/
/* 							}*/
/* 							if($(this).attr('field') == 'khm_customer_clue.cate_id') {*/
/* 								$(this).text(groups[data['khm_customer_clue.cate_id']]);*/
/* 								return true;*/
/* 							}*/
/* 							if($(this).attr('field') == 'label_name') {*/
/* 								_labels = data['label_name'];*/
/*                                 for(var k =0;k<_labels.length;k++) {*/
/*                                     _labels_name.push(_labels[k] !="" ? _labels[k].title :'');*/
/* 								}*/
/*                                 $(this).text(_labels_name.join(','));*/
/* 								return true;*/
/* 							}*/
/*                             if($(this).attr('field') == 'khm_customer_clue.team_id') {*/
/* 							    var teamstr = data['khm_customer_clue.team_id'].split(',');*/
/* 							    var xname = [];*/
/*                                 teamstr.forEach(function (e,i) {*/
/*                                     xname.push(employees11[e]);*/
/*                                 })*/
/*                                 $(this).text(xname);*/
/*                                 return true;*/
/*                             }*/
/*                             if($(this).attr('field') == 'khm_customer.stablish_time') {*/
/*                                 $(this).text(cs.getNowTime(data["khm_customer.stablish_time"],true));*/
/*                                 return true;*/
/*                             }*/
/*                             if($(this).attr('field') == 'khm_customer_clue.next_time') {*/
/*                                 $(this).text(cs.getNowTime(data["khm_customer_clue.next_time"],true));*/
/*                                 return true;*/
/*                             }*/
/*                             if($(this).attr('field') == 'last_time') {*/
/*                                 $(this).text(cs.getNowTime(data["last_time"],true));*/
/*                                 return true;*/
/*                             }*/
/*                             if($(this).attr('field') == 'create_time') {*/
/*                                 $(this).text(cs.getNowTime(data["create_time"],true));*/
/*                                 return true;*/
/*                             }*/
/*                             if($(this).attr('field') =='yuqi'){*/
/*                                 $(this).html(data["khm_customer_clue.next_time"] >= Date.now() / 1000 ? "否" : "是");*/
/*                                 return true;*/
/* 							}*/
/* 							$(this).text(data[$(this).attr('field')] ? data[$(this).attr('field')] :"");*/
/* 						});*/
/* 					}*/
/* 				});*/
/* 			});*/
/* */
/* */
/*             $('.del').click(function() {*/
/*                 var node = ykp.getCookie('nodes').split(',');*/
/* //				node.forEach(function(item,index){*/
/* //					if(item == 286){*/
/* //					}*/
/* //				})*/
/*                /* if(node.indexOf("286") == -1){*/
/*                     ykp.prompt('你没有权限');*/
/*                     return false;*/
/*                 }*//* */
/*                 var id = $(this).parents('tr').attr('data-id');*/
/*                 var customer_id = $(this).parents('tr').find("[data-num=1]").attr('data-cid');*/
/*                 layui.use('layer',function() {*/
/*                     layui.layer.confirm('确认放弃线索吗?', function(index){*/
/*                         ykp.doAjax({*/
/*                             url:'/api/api_customer/del_clue',*/
/*                             methods:"post",*/
/*                             data:{*/
/*                                 id:id,*/
/*                                 customer_id:customer_id*/
/*                             },*/
/*                             success:function(res) {*/
/*                                 ykp.prompt('删除成功');*/
/*                                 getList(1);*/
/*                                 layer.closeAll();*/
/*                             }*/
/*                         })*/
/*                     });*/
/*                 })*/
/*             })*/
/* */
/*         }*/
/* */
/* 		//编辑功能*/
/* 		function editRecord(data) {*/
/* 			$('.editInfo').click(function() {*/
/* 				var name = $(this).parents('tr').find('td').eq(1).text().trim();*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				var index = $(this).parents('tr').index();*/
/* 				var clue_data = data[index];*/
/* 				showMark('#template2');*/
/* 				$('#showBox .title').text('编辑线索');*/
/* */
/* 				$('#templateCon .customer_name').text(name);*/
/* 				// getInfo();*/
/* */
/* 				//添加分组*/
/* 				addCate();*/
/* */
/* 				getInfo(clue_data);*/
/* 				loadCusCate(clue_data['khm_customer_clue.cate_id']);*/
/* 				deleGroup();*/
/* 				$('#templateCon #rank').find('option[value=' + clue_data['khm_customer_clue.rank'] + ']').attr('selected', true);*/
/* */
/* 				//编辑保存*/
/* 				$('#templateBox .add').click(function() {*/
/* 					var postdata = {*/
/* 						id: id,*/
/* 						customer_id: clue_data['khm_customer_clue.customer_id']*/
/* 					};*/
/* */
/* 					$('#templateBox').find('[addfield]').each(function(i) {*/
/* 						if($(this).attr('addfield') != 'label_id') {*/
/* 							postdata[$(this).attr('addfield')] = $(this).val();*/
/* 						}*/
/* 					})*/
/* */
/* 					//标签*/
/* 					var data = $('#templateCon [addfield="label_id"]').select2('data');*/
/* 					var _data = [];*/
/* 					for(var i in data) {*/
/* 						_data.push(data[i]['id']);*/
/* 					}*/
/* 					postdata['label_id'] = _data.join(',');*/
/* */
/* 					ykp.doAjax({*/
/* 						url: '/api/api_customer/add_clue',*/
/* 						method: 'post',*/
/* 						data: postdata,*/
/* 						success: function(res) {*/
/* 							getList(1);*/
/* 							ykp.prompt('编辑成功');*/
/* 							cs.close();*/
/* 						}*/
/* 					})*/
/* 				})*/
/* 			})*/
/* 		}*/
/* */
/* 		//添加分组*/
/* 		function addCate() {*/
/* 			$('#templateCon #addCusCate').unbind('click').click(function() {*/
/* 				$('#cus_cate #catename').val('');*/
/* 				$('#cus_cate').fadeIn();*/
/* */
/* 				//保存分组信息*/
/* 				$('#cus_cate .submitCate').unbind('click').click(function() {*/
/* 					if(!$('#cus_cate #catename').val().trim()) {*/
/* 						ykp.prompt('分组名称不能为空');*/
/* 						return;*/
/* 					}*/
/* 					var postdata = {*/
/* 						name: $('#cus_cate #catename').val().trim()*/
/* 					};*/
/* */
/* 					ykp.doAjax({*/
/* 						url: '/api/api_customer/add_clue_type',*/
/* 						method: 'post',*/
/* 						data: postdata,*/
/* 						success: function(res) {*/
/* 							$('#cus_cate').fadeOut();*/
/* 							ykp.prompt('客户分组添加成功');*/
/* 							loadCusCate();*/
/* 						}*/
/* 					});*/
/* */
/* 				});*/
/* */
/* 				//关闭添加分组*/
/* 				$('#cus_cate .close_label').unbind('click').click(function() {*/
/* 					$('#cus_cate').fadeOut();*/
/* 				});*/
/* 			});*/
/* 		}*/
/* */
/* 		//自定义列表*/
/* 		cs.custorm_check('#dynamic-table', '#dynamic-table_data', true);*/
/* */
/* 		//添加功能*/
/* 		addRecord();*/
/* 		*/
/* 		function deleGroup(){*/
/* 			$('#templateCon #delCusCate').click(function() {*/
/* 					$('#feedBack').fadeIn()*/
/* 					$('#feedBack #label_cat').select2({*/
/* 						allowClear: true*/
/* 					});*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_customer/clue_type_list',*/
/* 						method: 'get',*/
/* 						data: {},*/
/* 						success: function(res) {*/
/*                             var data = res.data;*/
/* 							var cate_html = [];*/
/* 							for(var i in data) {*/
/* 								cate_html.push('<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>');*/
/* 							}*/
/* 							$('#feedBack #label_cat').append(cate_html.join(''));*/
/* 						}*/
/* 					});*/
/* 					*/
/* 					$('#feedBack .hold').click(function() {*/
/* 						var objs = $('#feedBack #label_cat').select2('data');*/
/* 						var ids = [];*/
/* 						if(objs[0].id == "") {*/
/* 							ykp.prompt('请选择！');*/
/* 							return false;*/
/* 						}*/
/* 						for(var j in objs) {*/
/* 							if(objs[j].id) {*/
/* 								ids.push(objs[j].id);*/
/* 							}*/
/* 						}*/
/* 						*/
/* 						ykp.doAjax({*/
/* 							url:"/api/api_customer/clue_type_del",*/
/* 							method:"post",*/
/* 							data:{*/
/* 								id:ids.join(',')*/
/* 							},*/
/* 							success:function(res) {*/
/* 								ykp.prompt('删除成功');*/
/* 								loadCusCate();*/
/* 								$('.close_label').parents('.label_popup').fadeOut();*/
/* 							}*/
/* 						})*/
/* 					})*/
/* 					cs.closePop();*/
/* 				})*/
/* 		}*/
/* 		*/
/* 		function addRecord() {*/
/* 			$('#addItem').click(function() {*/
/* 				$('#showBox .title').text('添加线索');*/
/* 				showMark('#template');*/
/* 				getInfo();*/
/* 				getType();*/
/*                 cs.get_cus1('#templateBox #people');*/
/*                 timeplug();*/
/*                 function timeplug() {*/
/*                     if(!ace.vars['old_ie']) {*/
/*                         $('#templateCon .date-timepicker1').datetimepicker({*/
/*                             // format: 'YYYY-MM-DD HH:mm',//use this option to display seconds*/
/*                             icons: {*/
/*                                 time: 'fa fa-clock-o',*/
/*                                 date: 'fa fa-calendar',*/
/*                                 up: 'fa fa-chevron-up',*/
/*                                 down: 'fa fa-chevron-down',*/
/*                                 previous: 'fa fa-chevron-left',*/
/*                                 next: 'fa fa-chevron-right',*/
/*                                 today: 'fa fa-arrows ',*/
/*                                 clear: 'fa fa-trash',*/
/*                                 close: 'fa fa-times'*/
/*                             }*/
/*                         }).next().on(ace.click_event, function() {*/
/*                             $(this).prev().focus();*/
/*                         });*/
/*                     }*/
/*                 }*/
/* 				//加载客户分组*/
/* 				loadCusCate();*/
/* 				deleGroup();*/
/* 				*/
/* 				//添加分组*/
/* 				addCate();*/
/* */
/* 				$('#editTitile').html('添加记录');*/
/* 				$('#templateBox .add').click(function() {*/
/* 					var postdata = {};*/
/* 					$('#templateBox').find('[addfield]').each(function(i) {*/
/* 						if($(this).attr('addfield') != 'label_id') {*/
/* 						    if($(this).attr('addfield') == "next_time"){*/
/* 						        let time = new Date($(this).val());*/
/*                                 postdata[$(this).attr('addfield')] = time.getTime($(this).val()) / 1000;*/
/*                             }else if($(this).attr('addfield') == "team_id"){*/
/*                                 var data = $('#templateCon .teamperson ').select2('data');*/
/*                                 var salesman = [];*/
/*                                 if(data.length == 0) {*/
/*                                     ykp.prompt('请选择协作人');*/
/*                                     return false;*/
/*                                 } else {*/
/*                                     for(var i in data) {*/
/*                                         salesman.push(data[i]['id']);*/
/*                                     }*/
/*                                     postdata[$(this).attr('addfield')] = salesman.join(',')*/
/*                                 }*/
/* 							}else{*/
/*                                 postdata[$(this).attr('addfield')] = $(this).val();*/
/* 							}*/
/* 						}*/
/* 					})*/
/* */
/* 					var data = $('#templateCon [addfield="label_id"]').select2('data');*/
/* 					var _data = [];*/
/* 					for(var i in data) {*/
/* 						_data.push(data[i]['id']);*/
/* 					}*/
/* 					postdata['label_id'] = _data.join(',');*/
/* */
/* 					ykp.doAjax({*/
/* 						url: '/api/api_customer/add_clue',*/
/* 						method: 'post',*/
/* 						data: postdata,*/
/* 						success: function(res) {*/
/* 							getList(1);*/
/* 							cs.close();*/
/* 						}*/
/* 					})*/
/* 				})*/
/* 			});*/
/* */
/* */
/* 			$('#recordEdit').click(function() {*/
/* 				showMark('#template');*/
/* 				$('#editTitile').html('编辑记录');*/
/* 			});*/
/* 		}*/
/* */
/* 		//获取客户，客户分组，负责人等信息*/
/* 		function getInfo(data) {*/
/* 			var khArr = [];*/
/* 			var bmArr = [];*/
/* */
/* 			//加载负责人*/
/* 			var emp = [];*/
/* 			emp.push('<option value=""> 请选择 </option>');*/
/* 			for(var i in employees11) {*/
/* 				emp.push('<option value="' + i + '">' + employees11[i] + '</option>');*/
/* 				}*/
/* 			$('#templateCon #employees_group').html(emp.join(''));*/
/* 			if(data) {*/
/* 				$('#templateCon #employees_group').find('option[value=' + data['khm_customer_clue.user_id'] + ']').attr('selected', true)*/
/* 			}*/
/* */
/* 			// //加载客户标签分组*/
/* 			// var grp = [];*/
/* 			// grp.push('<option value=""> 请选择 </option>');*/
/* 			// for(var i in groups) {*/
/* 			// 	grp.push('<option value="' + groups[i]['cwm_label_cat.id'] + '">' + groups[i]['cwm_label_cat.title'] + '</option>');*/
/* 			// }*/
/* 			// $('#templateCon #label_cat').html(grp.join(''));*/
/* 			// $('#templateBox #label_group').select2({allowClear:true,multiple:true});*/
/* 			// if(data) {*/
/* 			// 	$('#templateCon #label_cat').find('option[value=' + data['khm_customer_clue.cate_id'] + ']').attr('selected', true);*/
/* 			// 	// $('#templateCon #label_cat').trigger('change');*/
/* 			// 	selectLabel(data['khm_customer_clue.cate_id'],data['khm_customer_clue.label_id']);*/
/* 			// }*/
/* 			// // getLabel(); //切换客户标签分组，获取相应标签*/
/* */
/* 			$('#templateCon #type').change(function() {*/
/* 				var type = $(this).val();*/
/* 				getCustomer(type);*/
/* 			})*/
/* */
/*             //获取所有员工*/
/*             ykp.doAjax({*/
/*                 async: false,*/
/*                 url: '/api/api_employees/f7',*/
/*                 method: 'post',*/
/*                 data: {*/
/*                     //filter: 'bmm_employees.is_del <> 1 and EXISTS(SELECT id FROM khm_customer_clue WHERE user_id = bmm_employees.id)',*/
/*                     select: 'bmm_employees.id,bmm_employees.name'*/
/*                 },*/
/*                 success: function(res) {*/
/*                     var data = res.data;*/
/*                     $('#templateCon .teamperson').select2({*/
/*                         allowClear: true*/
/*                     });*/
/*                     for(var i in data) {*/
/*                         if(data[i]['name']) {*/
/*                             $('.teamperson ').append(new Option(data[i]['name'], data[i]['id']));*/
/*                         }*/
/*                     }*/
/*                 }*/
/*             });*/
/* */
/* 			//加载所有标签*/
/* 			$('#templateCon [addfield="label_id"]').select2({*/
/* 				allowClear: true,*/
/* 				multiple: true*/
/* 			});*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_label/f7',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					select: 'cwm_label.id,cwm_label.title',*/
/* 					filter: 'cwm_label.is_del = 0'*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var _data = res.data;*/
/* 					var label_html = [];*/
/* 					for(var i in _data) {*/
/* 						label_html.push('<option value="' + _data[i]['cwm_label.id'] + '">' + _data[i]['cwm_label.title'] + '</option>');*/
/* 					}*/
/* 					$('#templateCon [addfield="label_id"]').html(label_html.join(''));*/
/* */
/* 					if(data) {*/
/* 						$('#templateCon [addfield="label_id"]').val(data['khm_customer_clue.label_id'].split(',')).trigger('change');*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//加载客户分组*/
/* 		function loadCusCate(cate_id) {*/
/* 			$('#templateCon [addfield="cate_id"]').select2({*/
/*                 allowClear: true*/
/*             });*/
/* */
/* 			ykp.doAjax({*/
/* 				url: '/api/api_customer/clue_type_list',*/
/* 				method: 'get',*/
/* 				data: {},*/
/* 				success: function(res) {*/
/*                     var data = res.data;*/
/* 					var cate_html = [];*/
/* 					for(var i in data) {*/
/* 						cate_html.push('<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>');*/
/* 					}*/
/* 					$('#templateCon [addfield="cate_id"]').html('<option value="">请选择客户分组</option>');*/
/* 					*/
/* 					$('#templateCon [addfield="cate_id"]').append(cate_html.join(''));*/
/* */
/* 					if(cate_id) {*/
/* 						$('#templateCon [addfield="cate_id"]').val(cate_id).trigger('change');*/
/* 					}*/
/* 				}*/
/* 			});*/
/* */
/* 			getGroup();*/
/* 		}*/
/* */
/* 		function selectLabel(cate_id, label_id) {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_label/index',*/
/* 				method: 'get',*/
/* 				data: {*/
/* 					cat_id: cate_id*/
/* 				},*/
/* 				success: function(res) {*/
/* 					if(res.data.items.length == 0) {*/
/* 						ykp.prompt('没有标签!');*/
/* 						$('.labelBtn').html('没有标签');*/
/* 						return false;*/
/* 					}*/
/* 					var _labels = [];*/
/* 					var data = res.data.items;*/
/* 					// $('#templateBox #label_group').select2({allowClear:true,multiple:true});*/
/* 					for(var i in data) {*/
/* 						_labels.push('<option value="' + data[i]['cwm_label.id'] + '">' + data[i]['cwm_label.title'] + '</option>');*/
/* 					}*/
/* 					$('#templateBox #label_group').html(_labels.join(''));*/
/* 					$("#templateBox #label_group").val(cate_id.split(',')).trigger('change');*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//获取客户标签分组相应 的所有标签*/
/* 		function getLabel(label_id) {*/
/* 			$('#templateCon #label_cat').change(function() {*/
/* 				var id = $(this).val();*/
/* 				if(!id) {*/
/* 					$('#templateBox #label_group').find('option').not(':first').remove();*/
/* 					return;*/
/* 				}*/
/* 				//刷新标签*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_label/index',*/
/* 					method: 'get',*/
/* 					data: {*/
/* 						cat_id: id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						$('#templateBox #label_group').find('option').not(':first').remove();*/
/* 						// $('#templateBox #label_group').select2({allowClear:true,multiple:true});*/
/* 						if(res.data.items.length == 0) {*/
/* 							ykp.prompt('没有标签!');*/
/* 							$('.labelBtn').html('没有标签');*/
/* 							return false;*/
/* 						}*/
/* 						var _labels = [];*/
/* 						var data = res.data.items;*/
/* 						for(var i in data) {*/
/* 							_labels.push('<option value="' + data[i]['cwm_label.id'] + '">' + data[i]['cwm_label.title'] + '</option>');*/
/* 						}*/
/* 						$('#templateBox #label_group').html(_labels.join(''));*/
/* 						$("#templateBox #label_group").find("option[value='" + label_id + "']").attr("selected", true);*/
/* 					}*/
/* 				})*/
/* 			})*/
/* */
/* 		}*/
/* */
/* 		//全选*/
/* 		checkAll();*/
/* 	});*/
/* */
/* 	function checkAll(status) {*/
/* 		$("tbody input[name='check']").each(function(i, n) {*/
/* 			n.checked = status;*/
/* 		});*/
/* 	}*/
/* </script>*/
