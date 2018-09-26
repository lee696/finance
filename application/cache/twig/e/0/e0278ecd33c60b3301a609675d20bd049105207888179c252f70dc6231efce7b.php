<?php

/* admin/clientManage/seaOfclients.html */
class __TwigTemplate_806ee0fc8636c0390dd608f53e7a7118c7edd76f653dae2ed5f8ad71ef6a65c5 extends Twig_Template
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
\t\ttext-align: right;
\t\twidth: 90px;
\t}
\t
\t#heightsearch1 label {
\t\twidth: 70px;
\t}
\t
\t.widget-header {
\t\tborder-bottom: none;
\t}
\t
\t#templateBox input {
\t\theight: 30px;
\t\twidth: 180px;
\t\tpadding-left: 5px;
\t}
\t
\t#move th,
\t#move td {
\t\theight: 35px;
\t\ttext-align: left;
\t\tpadding: 5px;
\t}
\t
\t#move table {
\t\tborder: none;
\t}
</style>

<div class=\" widget-main\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<!--  <h3 class=\"header smaller lighter blue\">客户公海</h3> -->
\t\t\t<div class=\"row\" style=\"position:relative;margin-top: 20px;\" id=\"topTool\">
\t\t\t\t<!--<h3 class=\"header smaller lighter blue\">送单</h3>-->
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<input type=\"text\" id=\"form-field-1\" placeholder=\"企业名称\" class=\"\" pts=\"0\" sear=\"khm_customer.name\" />
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<input type=\"text\" id=\"form-field-1\" placeholder=\"法人名称\" class=\"\" pts=\"0\" sear=\"khm_customer.corporation\" />
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" id=\"search\" class=\"btn btn-info btn-sm\">
                        <i class=\"fa fa-search\"></i>
                    </button>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" id=\"hsearch\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
                        <i class=\"fa fa-filter\"></i>
                   </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button id=\"flush\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
\t                    <i class=\"fa fa-refresh\"></i>
\t                </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"112\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" id=\"addItem\" title=\"添加\" style=\"outline: none;background:#32CD32 !important;border-color: #32CD32!important;\" class=\"btn addBtn btn-info btn-sm position-relative\">
                            <i class=\"fa fa-plus\"></i>

                        </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"113\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<label type=\"button\" title=\"导入企业\" id=\"mergeItem\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"btn btn-info btn-sm position-relative\" for=\"leading-in\">
                            <i class=\"fa fa-sign-in\"></i>

                        </label>
\t\t\t\t\t<!--<input type=\"file\" id=\"leading-in\" style=\"opacity:0;position:absolute;left:-9999px;\">-->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"298\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" title=\"导出\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"exportfile btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t\t\t<i class=\"fa fa-sign-out\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"114\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" title=\"批量删除\" id=\"batchDel\" style=\"outline: none; background-color: #FF5722 !important; border-color:#FF5722 ;\" class=\"btn del btn-info btn-sm position-relative;\">
\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"112\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" title=\"移入线索\" id=\"moveToClue\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"moveToClue1 btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t\t\t<i class=\"fa fa-arrows-alt\"></i>
\t                </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"112\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\" title=\"分配负责人\" id=\"\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"moveToClue1 btn btn-info btn-sm position-relative\">
\t\t\t\t\t\t<i class=\"fa fa-hand-o-right\"></i>
\t                </button>
\t\t\t\t</div>
\t\t\t\t<!--<div class=\"col-sx-4\" contentAuthority=\"289\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t\t<button type=\"button\" id=\"moveToClue\" style=\"outline: none;\" class=\"moveToClue btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t\t\t\t移交负责人
\t\t\t\t\t\t</button>
\t\t\t\t</div>-->
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;  margin-right: 5px;position:relative;\">
\t\t\t\t\t<div id=\"filterBtns\" style=\"display:block;height: 36px;\">
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px; width: 72px; background: #E6E6E6;\" data-kind=\"0\"> 查看全部</a>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px; width: 72px;\" data-kind=\"1\"> 我负责的</a>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px; width: 72px;\" data-kind=\"3\"> 我的下属</a>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"myFilter\" style=\"line-height:32px; width: 90px;\" data-kind=\"4\"> 未转移客户</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"margin-top:30px;position: absolute; background: #fff;padding: 10px 0px; display: none;z-index:1042;\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>企业名称</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.name\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>信用代码</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.social_credit_code\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>法人</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.corporation\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>注册资本(万)</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.capital\" data-type=\"gj\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>成立日期</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" data-status=\"rangtime\" gjs=0 sear=\"khm_customer.stablish_time\" name=\"date-range-picker\" id=\"id-date-range-picker-1\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t<input id=\"date-timepicker1\" data-type=\"gj\" data-status=\"time\" gjs=0 sear=\"khm_customer.stablish_time\" class=\"date-timepicker1 form-control\" style=\"height: 30px; width: 150px;\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;\">
                                        <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
                                    </span>
\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>地址</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 id=\"\" sear=\"khm_customer.address\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>电话号码</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.tel\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>经营范围</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.range\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>网址</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.url\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>手机号码</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 id=\"\" sear=\"khm_customer.phone\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>传真</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.fax\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>邮箱</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.email\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>客户来源</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width:180px\" gjs=0 sear=\"khm_customer.source\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t<option value=\"转介绍\">转介绍</option>
\t\t\t\t\t\t\t\t<option value=\"电话咨询\">电话咨询</option>
\t\t\t\t\t\t\t\t<option value=\"线上注册\">线上注册</option>
\t\t\t\t\t\t\t\t<option value=\"客户上门\">客户上门</option>
\t\t\t\t\t\t\t\t<option value=\"陌生拜访\">陌生拜访</option>
\t\t\t\t\t\t\t\t<option value=\"公司资源\">公司资源</option>
\t\t\t\t\t\t\t\t<option value=\"个人资源\">个人资源</option>
\t\t\t\t\t\t\t\t<option value=\"广告宣传\">广告宣传</option>
\t\t\t\t\t\t\t\t<option value=\"电话营销\">电话营销</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>所属行业</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select class=\"\" style=\"width:180px;\" gjs=0 sear=\"khm_customer.industry\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t<option value=\"1\">批发零售业</option>
\t\t\t\t\t\t\t\t<option value=\"2\">制造业</option>
\t\t\t\t\t\t\t\t<option value=\"3\">租赁和商务服务业</option>
\t\t\t\t\t\t\t\t<option value=\"4\">仓储运输业</option>
\t\t\t\t\t\t\t\t<option value=\"5\">餐饮住宿业</option>
\t\t\t\t\t\t\t\t<option value=\"6\">信息软件业</option>
\t\t\t\t\t\t\t\t<option value=\"7\">金融业</option>
\t\t\t\t\t\t\t\t<option value=\"8\">房地产业</option>
\t\t\t\t\t\t\t\t<option value=\"9\">建筑业</option>
\t\t\t\t\t\t\t\t<option value=\"10\">教育</option>
\t\t\t\t\t\t\t\t<option value=\"11\">文体娱乐业</option>
\t\t\t\t\t\t\t\t<option value=\"12\">卫生和社会工作</option>
\t\t\t\t\t\t\t\t<option value=\"13\">居民服务</option>
\t\t\t\t\t\t\t\t<option value=\"14\">修理业</option>
\t\t\t\t\t\t\t\t<option value=\"15\">农林牧渔业</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>公司规模</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t\t<option> > </option>
\t\t\t\t\t\t\t\t<option> &lt; </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<!--<input type=\"text\" gjs=0 sear=\"khm_customer.scale\" data-type=\"gj\">-->
\t\t\t\t\t\t\t<select style=\"width: 180px\" gjs=0 sear=\"khm_customer.scale\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t<option value=\"10人以下\">10人以下</option>
\t\t\t\t\t\t\t\t<option value=\"10-50人\">10-50人</option>
\t\t\t\t\t\t\t\t<option value=\"50-100人\">50-100人</option>
\t\t\t\t\t\t\t\t<option value=\"100-200人\">100-200人</option>
\t\t\t\t\t\t\t\t<option value=\"200人以上\">200人以上</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>联系人姓名</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" gjs=0 sear=\"khm_customer.contacts\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>税务类型</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width:180px\" gjs=0 sear=\"khm_customer.tax_type\" data-type=\"gj\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t\t<option value=\"1\">一般纳税人</option>
\t\t\t\t\t\t\t\t<option value=\"2\">小规模</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>公海类型</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width:180px\" id=\"ktype\" class=\"advandced-search\" gjs=0 sear=\"khm_customer.type\" data-type=\"gj\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t\t<label>负责人</label>
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select style=\"width:180px\" id=\"people\" class=\"advandced-search\" gjs=0 sear=\"khm_customer.high_seas\" data-type=\"gj\">
\t\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div style=\"text-align:center;clear:both;padding-top:10px; \">
\t\t\t\t\t\t\t<button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
                                    查询
                                </button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"rest\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
\t\t\t\t\t\t\t\t                       重置
\t\t\t\t\t\t\t\t                    </button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<div style=\"margin-top:10px;\">
\t\t<div class=\"platform-data custom_table\">
\t\t\t<table id=\"dynamic-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<label class=\"pos-rel\">
                                    <input type=\"checkbox\" class=\"ace\" onclick=\"checkAll(this.checked)\"/>
                                    <span class=\"lbl\"></span>
                                    </label>
\t\t\t\t\t\t</th>

\t\t\t\t\t\t<th class=\"hidden-480 center\">操作</th>
\t\t\t\t\t\t<th data-num=\"1\" class=\"hidden-480\">公海类型</th>
\t\t\t\t\t\t<th data-num=\"2\" class=\"hidden-480\">转移状态</th>
\t\t\t\t\t\t<th data-num=\"3\" class=\"hidden-480\">负责人</th>
\t\t\t\t\t\t<th data-num=\"4\">企业名称</th>
\t\t\t\t\t\t<th data-num=\"5\">社会信用代码</th>
\t\t\t\t\t\t<th data-num=\"6\">法人</th>
\t\t\t\t\t\t<th data-num=\"7\" style=\"text-align: right !important;\" class=\"hidden-480\">注册资本(万)</th>
\t\t\t\t\t\t<th data-num=\"8\" class=\"hidden-480\">成立日期</th>
\t\t\t\t\t\t<th data-num=\"9\" class=\"hidden-480\">地址</th>
\t\t\t\t\t\t<th data-num=\"10\" class=\"hidden-480\">电话号码</th>
\t\t\t\t\t\t<th data-num=\"11\" class=\"hidden-480\">经营范围</th>
\t\t\t\t\t\t<th data-num=\"12\" class=\"hidden-480\">网址</th>
\t\t\t\t\t\t<th data-num=\"13\" class=\"hidden-480\">手机号码</th>
\t\t\t\t\t\t<th data-num=\"14\" class=\"hidden-480\">传真</th>
\t\t\t\t\t\t<th data-num=\"15\" class=\"hidden-480\">邮箱</th>
\t\t\t\t\t\t<th data-num=\"16\" class=\"hidden-480\">客户来源</th>
\t\t\t\t\t\t<th data-num=\"17\" class=\"hidden-480\">所属行业</th>
\t\t\t\t\t\t<th data-num=\"18\" class=\"hidden-480\">公司规模</th>
\t\t\t\t\t\t<th data-num=\"19\" class=\"hidden-480\">联系人姓名</th>
\t\t\t\t\t\t<th data-num=\"20\" class=\"hidden-480\">税务类型</th>
\t\t\t\t\t\t<th data-num=\"21\" class=\"hidden-480\">备注</th>

\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"datalist\">

\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" id=\"num\"></div>
\t\t\t<div id=\"pageBar\" class=\"pagination\"></div>
\t\t\t<div align=\"right\" style=\"float: right;  width: 10%;\">
\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t<option value=\"20\">每页20条</option>

\t\t\t\t\t<option value=\"50\">每页50条</option>

\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row\" id=\"template\" style=\"display:none;\">
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> <i class='reqired_label'>*</i>企业名称： </label>
\t\t\t<input class=\"required\" addfield=\"name\" msg=\"企业名称不能为空\" />
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<span id=\"range\">
\t\t\t\t<label> 社会信用代码： </label>
\t\t\t\t<input class=\"\" addfield=\"social_credit_code\" msg=\"\">
\t\t\t</span>
\t\t\t<label>法人： </label>
\t\t\t<input addfield=\"corporation\" msg=\"法人不能为空\">
\t\t</div>

\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 注册资本(万)： </label>
\t\t\t<input class=\"\" addfield=\"capital\" msg=\"只能是数字\" validate=\"int\" type=\"number\" />
\t\t\t<label> 成立日期： </label>
\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t<input class=\"date-timepicker1\" addfield=\"stablish_time\" msg=\"\" style=\"height: 30px; width:inherit;\">
\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;position:absolute;right:0;border-left:1px solid #ddd;\">
\t\t\t\t\t<i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 省市区：</label>
\t\t\t<span id=\"city\" title_=\"area\">
                <select class=\"prov\"></select>  
                <select class=\"city\" disabled=\"disabled\"></select>  
                <select class=\"dist\" disabled=\"disabled\"></select>  
            </span>
\t\t</div>

\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 公海类型：</label>
\t\t\t<span id=\"city\" title_=\"area\">
     \t\t\t<select style=\"margin-right: 12px !important;width: 180px\" addfield=\"type\"  class=\"cusType select2-hidden-accessible\" tabindex=\"-1\" sear=\"type\" >
\t\t\t\t
          \t</select>
            </span>
\t\t\t<button id=\"addTypeBtn\" class=\"btn\">添加</button>
\t\t\t<button id=\"delCusCate\" class=\"btn  btn-sm\" style=\"line-height:normal;height:30px;top:0; background: #FF5722 !important;\">删除</button>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label>地址： </label>
\t\t\t<input addfield=\"address\" msg=\"公司地址不能为空\" style=\"width:457px;\" />
\t\t</div>

\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> <i class='reqired_label'>*</i>联系人姓名： </label>
\t\t\t<input class=\"required\" addfield=\"contacts\" msg=\"联系人姓名不能为空\" />
\t\t\t<label> 电话号码： </label>
\t\t\t<input class=\"\" addfield=\"tel\" msg=\"\" />
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 网址： </label>
\t\t\t<input class=\"\" addfield=\"url\" msg=\"\" />
\t\t\t<label>手机号码： </label>
\t\t\t<input addfield=\"phone\">
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 传真： </label>
\t\t\t<input class=\"\" addfield=\"fax\" msg=\"\" />
\t\t\t<label> 邮箱： </label>
\t\t\t<input class=\"\" addfield=\"email\" msg=\"\">
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label>客户来源： </label>
\t\t\t<select class=\"source\" addfield=\"source\" style=\"width:180px;\" msg=\"\">
\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t<option value=\"转介绍\">转介绍</option>
\t\t\t\t<option value=\"电话咨询\">电话咨询</option>
\t\t\t\t<option value=\"线上注册\">线上注册</option>
\t\t\t\t<option value=\"客户上门\">客户上门</option>
\t\t\t\t<option value=\"陌生拜访\">陌生拜访</option>
\t\t\t\t<option value=\"公司资源\">公司资源</option>
\t\t\t\t<option value=\"个人资源\">个人资源</option>
\t\t\t\t<option value=\"广告宣传\">广告宣传</option>
\t\t\t\t<option value=\"电话营销\">电话营销</option>
\t\t\t</select>
\t\t\t<span class=\"introducer\" style=\"display:none;\">
\t\t\t\t<label class=\"\" > 介绍人： </label>
\t\t\t\t<select class=\"\" addfield=\"introduce\" id=\"introducer\" style=\"width:180px;\" title_=\"introduce\">
\t\t\t</span>
\t\t\t</select>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label> 所属行业： </label>
\t\t\t<select class=\"\" style=\"width:180px;\" addfield=\"industry\" msg=\"\">
\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t<option value=\"1\">批发零售业</option>
\t\t\t\t<option value=\"2\">制造业</option>
\t\t\t\t<option value=\"3\">租赁和商务服务业</option>
\t\t\t\t<option value=\"4\">仓储运输业</option>
\t\t\t\t<option value=\"5\">餐饮住宿业</option>
\t\t\t\t<option value=\"6\">信息软件业</option>
\t\t\t\t<option value=\"7\">金融业</option>
\t\t\t\t<option value=\"8\">房地产业</option>
\t\t\t\t<option value=\"9\">建筑业</option>
\t\t\t\t<option value=\"10\">教育</option>
\t\t\t\t<option value=\"11\">文体娱乐业</option>
\t\t\t\t<option value=\"12\">卫生和社会工作</option>
\t\t\t\t<option value=\"13\">居民服务</option>
\t\t\t\t<option value=\"14\">修理业</option>
\t\t\t\t<option value=\"15\">农林牧渔业</option>
\t\t\t</select>
\t\t\t<label> 公司规模： </label>
\t\t\t<!--<input class=\"\" addfield=\"scale\" msg=\"\">-->
\t\t\t<select style=\"width: 180px\" addfield=\"scale\">
\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t<option value=\"10人以下\">10人以下</option>
\t\t\t\t<option value=\"10-50人\">10-50人</option>
\t\t\t\t<option value=\"50-100人\">50-100人</option>
\t\t\t\t<option value=\"100-200人\">100-200人</option>
\t\t\t\t<option value=\"200人以上\">200人以上</option>
\t\t\t</select>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label>税务类型： </label>
\t\t\t<select addfield=\"tax_type\" style=\"width:180px;\" msg=\"请选择税务类型\">
\t\t\t\t<option value=\"\"> 请选择 </option>
\t\t\t\t<option value=\"1\">一般纳税人</option>
\t\t\t\t<option value=\"2\" selected=\"selected\">小规模</option>
\t\t\t</select>

\t\t</div>
\t\t<div style=\"margin-top:15px;\" id=\"range1\" style=\"display: none;\">
\t\t\t<label style=\"float:left;\"> 经营范围： </label>
\t\t\t<textarea style=\"width:457px;margin-left:5px;resize:none;padding:5px;\" addfield=\"range\" class=\"in_remark\"></textarea>
\t\t</div>
\t\t<div style=\"margin-top:15px;\">
\t\t\t<label style=\"float:left;\"> 备注： </label>
\t\t\t<textarea style=\"width:457px;margin-left:5px;resize:none;padding:5px;\" addfield=\"remark\" class=\"in_remark\"></textarea>
\t\t</div>
\t\t<div style=\"text-align:center;margin-top:15px;border-top:1px solid #ccc;padding-top: 10px;\">
\t\t\t<span class=\"msg\" style=\"margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;\"></span>
\t\t\t<button class=\"sure_button add\">
                            <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                            保存
                        </button>
\t\t</div>
\t</div>

\t<div class=\"label_popup move\" id=\"movexs\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;max-height: 400px;\">
\t\t<div style=\"max-width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
        box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">

\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t<span style=\"display: inline-block;font-size:14px;\">移入线索</span>
\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t</div>
\t\t\t<div style=\"padding: 10px 20px;\">
\t\t\t\t<div style=\"margin-bottom: 10px; margin-top: 10px;max-height:300px;overflow:auto;\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<tbody class=\"move_message\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span>移交给</span>
\t\t\t\t\t\t\t\t\t<i style=\"padding:0 5px;\"></i>
\t\t\t\t\t\t\t\t\t<select class=\"employees select2-hidden-accessible\" style=\"width:200px\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">请选择负责人</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div style=\"padding:20px;text-align:right;\">
\t\t\t\t<button class=\"hold_label btn btn-info btn-sm\">保存</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"label_popup\" id=\"move1\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;max-height: 400px;\">
\t\t<div style=\"max-width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
        box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">

\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t<span style=\"display: inline-block;font-size:14px;\">分配负责人</span>
\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t</div>
\t\t\t<div style=\"padding: 10px 20px;\">
\t\t\t\t<div style=\"margin-bottom: 10px; margin-top: 10px;max-height:300px;overflow:auto;\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<tbody class=\"move_message\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span>分配给</span>
\t\t\t\t\t\t\t\t\t<i style=\"padding:0 5px;\"></i>
\t\t\t\t\t\t\t\t\t<select class=\"employees select2-hidden-accessible\" style=\"width:200px\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">请选择负责人</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div style=\"padding:20px;text-align:right;\">
\t\t\t\t<button class=\"hold_label btn btn-info btn-sm\">保存</button>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"label_popup\" id=\"addtype\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd; box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t<span style=\"display: inline-block;\">添加类型</span>
\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float:right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t</div>
\t\t\t<div>
\t\t\t</div>
\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t<label> 类型名称： </label>
\t\t\t\t<input class=\"required\" style=\"height:28px;padding: auto 2px\" id=\"typename\" msg=\"新增客户类型名称不能为空\">
\t\t\t\t<!-- <input width=\"200px\" style=\"margin: auto;\" id=\"efile\" /> -->
\t\t\t\t<!--<hr>-->
\t\t\t</div>
\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t<button class=\"btn btn-info  submitType\" style=\"padding: 6px; border-radius: 0px;\">保存</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"label_popup\" id=\"export\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t<span style=\"display: inline-block;\">导入企业</span>
\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t</div>
\t\t\t<div id=\"\" style=\"margin-top: 10px; text-align: center;\">
\t\t\t\t<label>公海类型</label>
\t\t\t\t<select class=\"gh\">

\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t<input type=\"file\" width=\"200px\" style=\"margin: auto;\" id=\"efile\" />
\t\t\t\t<!--<hr>-->
\t\t\t</div>
\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t<a href=\"javascript:;\" onclick='location.href=ykp.api_url+\"/resource/excel_templete/customer.xlsx\"'>
\t\t\t\t\t<button id=\"ghItem\" class=\" btn\">公海模板</button></a>
\t\t\t\t<button class=\"btn btn-info  submit\" style=\"padding: 6px; border-radius: 0px;\">保存</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"label_popup\" id=\"feedBack\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t<span style=\"display: inline-block;\">请选择要删除的分组</span>
\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t</div>
\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t<div style=\"margin-top:15px\">
\t\t\t\t\t<label>公海类型： </label>
\t\t\t\t\t<select style=\"width: 180px\" multiple=\"\" addfield=\"cate_id\" class=\"cusType select2-hidden-accessible\" tabindex=\"-1\" id=\"label_cat\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\">请选择公海类型</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t<button class=\"close_label\">关闭</button>
\t\t\t\t<button class=\"hold\">保存</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</div>
";
        // line 652
        $this->loadTemplate("admin/customerDetail.html", "admin/clientManage/seaOfclients.html", 652)->display($context);
        echo " ";
        $this->loadTemplate("admin/mark.html", "admin/clientManage/seaOfclients.html", 652)->display($context);
        // line 653
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/assets/js/src/jquery.cityselect.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script>
\tjQuery(function(\$) {
\t\tcs.getNodes([112, 113, 114, 289]);
\t\tcs.dataRang();
\t\tvar page_size = 10;
\t\tvar order = 'khm_customer.id desc';
\t\tvar filter = '';
\t\tvar employees = {};
\t\tvar customer_type = {};
\t\tvar aid_2 = ykp.getCookie(\"aid_2\");
\t\tvar time = ykp.getCookie(\"time\");

\t\t//导出功能
\t\tcs.exportFile({
\t\t\turl: \"/api/api_customer/export\",
\t\t\ttitle: \"客户公海\"
\t\t});

\t\tcs.setFuze({
\t\t\tconId: \"#datalist\",
\t\t\turl: \"/api/api_customer/transfer_user\",
\t\t\tfun: function() {
\t\t\t\tgetEntireList();
\t\t\t}
\t\t});
\t\t//接收首页跳转
\t\tif(time && time != '') {
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
\t\t\t\t\ttimestamp = `khm_customer.create_at>\${today}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '2':
\t\t\t\t\ttimestamp = `khm_customer.create_at<\${today} and khm_customer.create_at>\${today-86400}`
\t\t\t\t\tbreak;
\t\t\t\tcase '3':
\t\t\t\t\ttimestamp = `khm_customer.create_at>\${today-86400*6}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '4':
\t\t\t\t\ttimestamp = `khm_customer.create_at>\${today-86400*29}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '5':
\t\t\t\t\ttimestamp = `khm_customer.create_at>\${today-86400*day_1}`;
\t\t\t\t\tbreak;
\t\t\t\tcase '6':
\t\t\t\t\ttimestamp = `khm_customer.create_at<\${today-86400*day_1} and khm_customer.create_at>\${newdaytime}`;
\t\t\t\t\tbreak;
\t\t\t}
\t\t\tvar data = `khm_customer.is_del = 0 and khm_customer.create_id=\${aid_2} and \${timestamp}`
\t\t\tif(aid_2 == '' || aid_2 == undefined) {
\t\t\t\tdata = `khm_customer.is_del = 0 and \${timestamp}`
\t\t\t}
\t\t\tykp.list({
\t\t\t\turl: '/api/api_customer/customer',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\ttype: 1,
\t\t\t\t\tlimit: page_size,
\t\t\t\t\tfilter: data,
\t\t\t\t\torder: order
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
\t\t\t\t\t} else {
\t\t\t\t\t\thandleData(res);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t\tykp.setCookie(\"aid_2\", \"\", (1 / 24));
\t\t\tykp.setCookie(\"time\", \"\", (1 / 24));
\t\t} else if(ykp.getCookie('data-id') != undefined && ykp.getCookie('data-id') != '') {
\t\t\tvar id = ykp.getCookie('data-id');
\t\t\tvar filter = 'and khm_customer.id=' + id;
\t\t\tgetList(filter);
\t\t\tykp.setCookie('data-id', '');
\t\t} else {
\t\t\t//页面初始化
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetList();
\t\t}

\t\t\$('#filterBtns a').mouseover(function() {
\t\t\t\$(this).addClass('over');
\t\t})
\t\t\$('#filterBtns a').mouseout(function() {
\t\t\t\$(this).removeClass('over');
\t\t})
\t\t//条件过滤器
\t\t\$('.myFilter').click(function() {
\t\t\tif(!\$(this).hasClass('clc')) {
\t\t\t\t\$(this).addClass('clc').siblings().removeClass('clc');
\t\t\t}
\t\t\tvar user = JSON.parse(ykp.getCookie('userinfo'));

\t\t\tvar data = \"\";
\t\t\tvar filter_ = \$(this).attr('data-kind');
\t\t\tif(filter_ == '0') {
\t\t\t\tgetList();
\t\t\t\treturn;
\t\t\t}
\t\t\t//我负责的
\t\t\tif(filter_ == '1') {
\t\t\t\tdata = \"and  khm_customer.high_seas = \" + user.id;
\t\t\t}

\t\t\t//我的下属
\t\t\tif(filter_ == '3') {
\t\t\t\tdata += 'and khm_customer.high_seas in (select id from bmm_employees where up_user = ' + user.id + ')';
\t\t\t}
\t\t\t//未转移的
\t\t\tif(filter_ == '4') {
\t\t\t\tdata += \"and  khm_customer.transfer_status = \" + 0;
\t\t\t}
\t\t\t//\t\t\tfilter = data['where'];
\t\t\tgetList(data);
\t\t})

\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_customer/customer',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter: 'khm_customer.is_del = 0 ' + filter,
\t\t\t\tlimit: page_size,
\t\t\t\ttype: 1
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '#pageBar'
\t\t\t},
\t\t\tinitOrder: 'khm_customer.id',
\t\t\tdefaultOrder: order,
\t\t\tcontentId: \"#dataList\",
\t\t\tparams: [{
\t\t\t\tid: \"#dynamic-table\",
\t\t\t\tfield: [\"\", \"\", \"khm_customer.type\", \"khm_customer.transfer_status\", \"\",\"khm_customer.name\",\"khm_customer.social_credit_code\", \"khm_customer.corporation\",
\t\t\t\t\t\"khm_customer.capital\", \"khm_customer.stablish_time\", \"khm_customer.address\", \"khm_customer.tel\",
\t\t\t\t\t\"khm_customer.range\", \"khm_customer.url\", \"khm_customer.phone\", \"khm_customer.fax\", \"khm_customer.email\",
\t\t\t\t\t\"khm_customer.source\", \"khm_customer.industry\", \"khm_customer.scale\", \"khm_customer.contacts\", \"khm_customer.tax_type\"
\t\t\t\t]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\thandleData(res);
\t\t});

\t\t\$('#flush').click(function() {
\t\t\tfilter = '';
\t\t\tgetList();
\t\t})

\t\t//导入企业
\t\t\$('#mergeItem').click(function() {
\t\t\tvar file;
\t\t\t\$('#export').show();
\t\t\t\$('#export #efile').after(\$('#export #efile').clone().val(\"\"));
\t\t\t\$('#export #efile').eq(0).remove();
\t\t\t\$('#efile').change(function() {
\t\t\t\tfile = this.files[0];
\t\t\t})
\t\t\tgetType();
\t\t\t\$('.submit').unbind('click').click(function() {
\t\t\t\tvar type = \$(\".gh\").val();
\t\t\t\tif(!type) {
\t\t\t\t\tykp.prompt(\"请选择公海类型\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(file == undefined) {
\t\t\t\t\tykp.prompt(\"请添加数据再上传\");
\t\t\t\t\treturn false;
\t\t\t\t} else {
\t\t\t\t\t\$('.submit').prop('disabled', true);
\t\t\t\t\tvar fd = new FormData();
\t\t\t\t\tfd.append('customer', file);
\t\t\t\t\tfd.append('login_token', ykp.getCookie('login_token'));
\t\t\t\t\tfd.append('type', type);
\t\t\t\t\tvar data = {
\t\t\t\t\t\turl: ykp.api_url + \"/api/api_customer/upload_batch\",
\t\t\t\t\t\tfd: fd
\t\t\t\t\t}
\t\t\t\t\tykp.prompt(\"导入需要时间 请耐心等待...\");
\t\t\t\t\tsetTimeout(cs.cexport(data, function(res) {
\t\t\t\t\t\t\$('.submit').prop('disabled', false);

\t\t\t\t\t\t\$('.label_popup').hide();

\t\t\t\t\t\tif(res.code == 200) {
\t\t\t\t\t\t\tykp.prompt(\"上传成功\");
\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tykp.prompt(res.msg);
\t\t\t\t\t\t}

\t\t\t\t\t}), 3000);
\t\t\t\t\t//\t\t\t\t\tcs.cexport(data, function(res) {
\t\t\t\t\t//\t\t\t\t\t\t\$('.submit').prop('disabled',false);
\t\t\t\t\t//\t\t\t\t\t\t
\t\t\t\t\t//\t\t\t\t\t\t\$('.label_popup').hide();
\t\t\t\t\t//\t\t\t\t\t
\t\t\t\t\t//\t\t\t\t\t\tif(res.code == 200) {
\t\t\t\t\t//\t\t\t\t\t\t\tykp.prompt(\"上传成功\");
\t\t\t\t\t//\t\t\t\t\t\t\tgetList();
\t\t\t\t\t//\t\t\t\t\t\t} else {
\t\t\t\t\t//\t\t\t\t\t\t\tykp.prompt(res.msg);
\t\t\t\t\t//\t\t\t\t\t\t}
\t\t\t\t\t//\t\t\t\t\t\t
\t\t\t\t\t//\t\t\t\t\t})
\t\t\t\t}
\t\t\t})
\t\t\tcs.closePop();
\t\t});

\t\t//切换每页显示的条目数
\t\t\$('#changePageNum').change(function() {
\t\t\tpage_size = \$(this).val();
\t\t\tgetList();
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
\t\t\t\t\t\temployees[data[i]['id']] = data[i]['name'];
\t\t\t\t\t\t\$('#people').append(`<option value=\"\${data[i]['id']}\">\${data[i]['name']}</option>`);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t});

\t\tgetType();
\t\t//获取所有公海类型
\t\tfunction getType(type) {
\t\t\tykp.doAjax({
\t\t\t\tasync: false,
\t\t\t\turl: '/api/api_customer_type/f7',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tselect: 'khm_customer_type.id,khm_customer_type.name'
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\$('#templateCon .cusType').html('');
\t\t\t\t\t//<option value=\"\">  请选择公海类型  </option>
\t\t\t\t\tvar option = ['<option value=\"\">请选择</option>'];
\t\t\t\t\tcustomer_type['0'] = '';
\t\t\t\t\tfor(var i = data.length - 1; i >= 0; i--) {
\t\t\t\t\t\tcustomer_type[data[i]['id']] = data[i]['name'];
\t\t\t\t\t\toption += `<option value=\"\${data[i]['id']}\">\${data[i]['name']}</option>`;
\t\t\t\t\t}

\t\t\t\t\t\$('#heightsearch1 ').find('#ktype').html(option);
\t\t\t\t\t\$('#heightsearch1 ').find('#ktype').select2({
\t\t\t\t\t\tallowClear: true
\t\t\t\t\t});
\t\t\t\t\t\$('#templateCon .cusType').select2({
\t\t\t\t\t\tallowClear: true
\t\t\t\t\t});
\t\t\t\t\t\$('#templateCon .cusType').html(option);
\t\t\t\t\t\$('#templateCon .cusType').val(type).trigger('change');
\t\t\t\t\t\$(' .gh').html(option);
\t\t\t\t\t\$(' .gh').select2({
\t\t\t\t\t\tallowClear: true
\t\t\t\t\t});

\t\t\t\t}
\t\t\t});
\t\t}

\t\tfunction addType() {
\t\t\t\$('#templateCon #addTypeBtn').click(function() {
\t\t\t\t\$('#addtype').show();
\t\t\t\tsaveType();
\t\t\t})
\t\t\t\$('.close_label').click(function() {
\t\t\t\t\$('#addtype').hide();
\t\t\t})
\t\t}

\t\tfunction saveType() {
\t\t\t\$('.submitType').unbind().click(function() {
\t\t\t\tvar typename = \$('#typename').val();
\t\t\t\tif(typename.trim() == '') {
\t\t\t\t\tykp.prompt('添加类型不能为空！');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_customer_type/add',
\t\t\t\t\tdata: {
\t\t\t\t\t\tname: typename
\t\t\t\t\t},
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tykp.prompt('添加成功！ ');
\t\t\t\t\t\t\$('#addtype').hide();
\t\t\t\t\t\tgetType();
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})
\t\t}

\t\t//普通搜索
\t\tfunction generalSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_customer/customer',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\ttype: 1,
\t\t\t\t\tlimit: page_size,
\t\t\t\t\torder: order
\t\t\t\t}
\t\t\t}
\t\t\tcs.doSearch('#search', data, 'filter', false, function(res, _filter) {
\t\t\t\tfilter = _filter;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t} else {
\t\t\t\t\thandleData(res);
\t\t\t\t}
\t\t\t}, 'khm_customer.is_del = 0');
\t\t}
\t\t//高级搜索列表显示与隐藏
\t\t\$('.in').click(function() {
\t\t\tif(\$('#hsearch').hasClass('active')) {
\t\t\t\t\$('#hsearch').removeClass('active').css('z-index', '');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t}
\t\t});

\t\t\$('#hsearch').click(function() {
\t\t\tif(\$(this).hasClass('active')) {
\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\$(this).removeClass('active').css('z-index', '');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t} else {
\t\t\t\t\$('.in').addClass('modal-backdrop');
\t\t\t\t\$(\"#heightsearch1\").slideDown();
\t\t\t\t\$(this).attr('class', 'btn btn-info btn-sm active').css('z-index', '1041');
\t\t\t\tcs.rest(false, '#heightsearch1');
\t\t\t\t// 高级搜索成立日期
\t\t\t\tcs.timeplug();
\t\t\t}
\t\t})

\t\t//cs.showHeightSearch('#search1','#heightsearch1');

\t\t//高级搜索
\t\tfunction advancedSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_customer/customer',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\ttype: 1,
\t\t\t\t\tlimit: page_size,
\t\t\t\t\torder: order,
\t\t\t\t\tfilter: filter,
\t\t\t\t}
\t\t\t}

\t\t\tcs.hSearch('#search1', data, 'filter', false, function(res, _filter) {
\t\t\t\tfilter = _filter;
\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\$(\"#hsearch\").removeClass('active').css('z-index', '');
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tykp.prompt('暂无数据！');
\t\t\t\t\t}, 1000);
\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t} else {
\t\t\t\t\thandleData(res);
\t\t\t\t}
\t\t\t}, 'khm_customer.is_del = 0')

\t\t}

\t\t//获取列表数据
\t\tfunction getList(filter) {
\t\t\tif(filter == undefined) {
\t\t\t\tfilter = '';
\t\t\t}

\t\t\tvar data = {
\t\t\t\ttype: 1,
\t\t\t\tlimit: page_size,
\t\t\t\tfilter: \"khm_customer.is_del = 0 \" + filter,
\t\t\t\torder: order
\t\t\t};

\t\t\t\$('.ace').prop('checked', false);
\t\t\tgeneralSearch();
\t\t\tadvancedSearch();
\t\t\tykp.list({
\t\t\t\turl: '/api/api_customer/customer',
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
\t\t\t\t\t\t\$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d;\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t} else {
\t\t\t\t\t\thandleData(res);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//处理数据
\t\tfunction handleData(res) {
\t\t\tvar data = res.data.items;
\t\t\tvar html = [];
\t\t\tvar create_time = '';

\t\t\tvar industry = ['', '批发零售业', '制造业', '租赁和商务服务业', '仓储运输业', '餐饮住宿业', '信息软件业', '金融业', '房地产业', '建筑业', '教育', '文体娱乐业', '卫生和社会工作', '居民服务', '修理业', '农林牧渔业'];

\t\t\tvar styles = [];
\t\t\t\$('#dynamic-table .thColor th').each(function(i, e) {
\t\t\t\tstyles.push(\$(this).css('display'));
\t\t\t});

\t\t\t//经营范围
\t\t\tvar pd_data;
\t\t\t//经营范围title
\t\t\tvar range_title = [];
\t\t\t//遍历次数
\t\t\tvar times;

\t\t\tfor(var i in data) {
\t\t\t\t//获取经营范围title
\t\t\t\tpd_data = data[i]['khm_customer.range'];
\t\t\t\ttimes = Math.ceil(pd_data.length / 20);
\t\t\t\tfor(var j = 0; j < times; j++) {
\t\t\t\t\trange_title.push(pd_data.slice(20 * j, (j + 1) * 20));
\t\t\t\t}

\t\t\t\tcreate_time = data[i]['khm_customer.stablish_time'] != 0 ? cs.getNowTime(data[i]['khm_customer.stablish_time']) : \"\";
\t\t\t\thtml.push(
\t\t\t\t\t` <tr class=\"thColor\" customer-id=\"\${data[i]['khm_customer.id']}\" customer-name=\"\${data[i]['khm_customer.name']}\">
                    <td class=\"center\">
                        <label class=\"pos-rel\">
                        <input type=\"checkbox\" name=\"check\" class=\"ace\"/>
                        <span class=\"lbl\"></span>
                        </label>
                    </td>

                    <td class=\"hidden-480 center\">
                                <label class=\"pos-rel\">
                                \t<a href=\"javascript:void(0);\" class=\"editCt infoCt btOrange\" title=\"详情\"><i class=\"fa fa-info\"></i></a>
                                    <a href=\"javascript:void(0);\" class=\"editCt btBlue\" contentAuthority=\"115\" title=\"编辑\"><i class=\"fa fa-pencil-square-o\"></i></span></a>
                                    <a href=\"javascript:void(0);\" class=\"del delCt btRed\" contentAuthority=\"116\" title=\"删除\"><i class=\"fa fa-trash-o\"></i></a>
                                </label>
                            </td>
                            <td style=\"display:\${styles[2]};\" data-num=\"1\" class=\"hidden-480\">\${customer_type[data[i]['khm_customer.type']] || \"\"}</td>
                            <td style=\"display:\${styles[3]};\" data-num=\"2\" class=\"hidden-480\">\${data[i]['khm_customer.transfer_status']==0 ? \"未转移\":\"已转移\"}</td>
                            <td style=\"display:\${styles[4]};\" data-num=\"3\" class=\"hidden-480\">\${data[i]['high_seas_info']['name'] || \"\"}</td>
                            <td style=\"display:\${styles[5]};\" data-cid=\"\${data[i]['khm_customer.id']}\" data-num=\"4\"><a href=\"javascript:;\" class=\"hidden-480 customerDetail pos-rel\">\${data[i]['khm_customer.name']}</a>
                            <label class=\"pos-rel\"><i class=\"iconBnt fa fa-info-circle\" style=\"color:\${data[i]['Remark'].length > 0 ? 'red' : ''}\"  data-rel=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"\${cs.getRemark(data[i]['Remark'])}\" ></i></label></td>
                            <td style=\"display:\${styles[6]};\" data-num=\"5\" class=\"hidden-480\">\${data[i]['khm_customer.social_credit_code']}</td>
                            <td style=\"display:\${styles[7]};\" data-num=\"6\" class=\"hidden-480\">\${data[i]['khm_customer.corporation']}</td>
                            <td style=\"display:\${styles[8]}; text-align: right !important;\" data-num=\"7\" class=\"hidden-480\">\${data[i]['khm_customer.capital'].replace(/^0*/g,\" \")}</td>
                            <td style=\"display:\${styles[9]};\" data-num=\"8\" class=\"hidden-480\">\${create_time}</td>
                            <td style=\"display:\${styles[10]};\" data-num=\"9\" class=\"hidden-480\">\${data[i]['khm_customer.address']}</td>
                            <td style=\"display:\${styles[11]};\" data-num=\"10\" class=\"hidden-480\">\${data[i]['khm_customer.tel']}</td>
                            <td style=\"display:\${styles[12]};\" data-num=\"11\" class=\"hidden-480\" title=\"\${range_title.join('&#13;')}\">
\t\t\t\t\t\t\t\t<label style=\"width:100px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;\" >
\t\t\t\t\t \t\t\t\t\${data[i]['khm_customer.range']}
\t\t\t\t \t\t\t\t</label>
                            </td>
                            <td style=\"display:\${styles[13]};\" data-num=\"12\" class=\"hidden-480\">\${data[i]['khm_customer.url']}</td>
                            <td style=\"display:\${styles[14]};\" data-num=\"13\" class=\"hidden-480\">\${data[i]['khm_customer.phone']}</td>
                            <td style=\"display:\${styles[15]};\" data-num=\"14\" class=\"hidden-480\">\${data[i]['khm_customer.fax']}</td>
                            <td style=\"display:\${styles[16]};\" data-num=\"15\" class=\"hidden-480\">\${data[i]['khm_customer.email']}</td>
                            <td style=\"display:\${styles[17]};\" data-num=\"16\" class=\"hidden-480\">\${data[i]['khm_customer.source']}</td>
                            <td style=\"display:\${styles[18]};\" data-num=\"17\" class=\"hidden-480\">\${data[i]['khm_customer.industry'] ? industry[data[i]['khm_customer.industry']] : ''}</td>
                            <td style=\"display:\${styles[19]};\" data-num=\"18\" class=\"hidden-480\">\${data[i]['khm_customer.scale']}</td>
                            <td style=\"display:\${styles[20]};\" data-num=\"19\" class=\"hidden-480\">\${data[i]['khm_customer.contacts']}</td>
                            <td style=\"display:\${styles[21]};\" data-num=\"20\" class=\"hidden-480\">\${data[i]['khm_customer.tax_type'] == 1 ? '一般纳税人' : '小规模'}</td>
                            <td style=\"display:\${styles[22]};\" data-num=\"21\" class=\"hidden-480\">\${data[i]['khm_customer.remark']}</td>
                    </tr>`
\t\t\t\t);
\t\t\t\t//清空数组
\t\t\t\trange_title = [];
\t\t\t}

\t\t\t\$('#datalist').html(html.join(''));
\t\t\tcustom.get_custom_info();
\t\t\t\$(\"[data-rel='tooltip']\").tooltip();

\t\t\tcustom.showReamrk();
\t\t\tcs.getNodes([115, 116, 289]);
\t\t\teditCustomer(data);
\t\t\tplDel();
\t\t\tdel();
\t\t}

\t\t//移入线索
\t\tmoveToClue();

\t\tfunction moveToClue() {
\t\t\t\$('.moveToClue1').unbind('click').click(function() {
\t\t\t\tvar customer_id = []; //公司id
\t\t\t\tvar index = \$(this).parent().index();
\t\t\t\t\$('#datalist').find('[type=\"checkbox\"]').each(function(i, e) {
\t\t\t\t\tif(\$(this).prop('checked') == true) {
\t\t\t\t\t\tcustomer_id.push(\$(this).parents('tr').attr('customer-id'));
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tif(customer_id.length <= 0) {
\t\t\t\t\tykp.prompt('请先选择公司！');
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t\$('.move_message .employees').select2({
\t\t\t\t\tallowClear: true
\t\t\t\t});

\t\t\t\tvar employees_html = [];
\t\t\t\tfor(var i in employees) {
\t\t\t\t\temployees_html.push('<option value=\"' + i + '\">' + employees[i] + '</option>');
\t\t\t\t}
\t\t\t\t\$('.move_message .employees').html('<option value=\"\">请选择负责人</option>');
\t\t\t\t\$('.move_message .employees').append(employees_html.join(''));
\t\t\t\tif(index == 9) {
\t\t\t\t\t//显示移出层
\t\t\t\t\t\$('#movexs').fadeIn();

\t\t\t\t\t//保存移出信息
\t\t\t\t\t\$('.move .hold_label').unbind('click').click(function() {
\t\t\t\t\t\tvar user_id = \$('.move .employees').val();

\t\t\t\t\t\tif(!user_id) {
\t\t\t\t\t\t\tykp.prompt('请选择负责人');
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\tvar postdata = {
\t\t\t\t\t\t\tcustomers: customer_id.join(','),
\t\t\t\t\t\t\tuser_id: user_id
\t\t\t\t\t\t};
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_customer/customer_add_clue ',
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: postdata,
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('客户移交成功');
\t\t\t\t\t\t\t\t\$('#movexs').fadeOut();
\t\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t} else {
\t\t\t\t\t//显示移出层
\t\t\t\t\t\$('#move1').fadeIn();

\t\t\t\t\t//保存移出信息
\t\t\t\t\t\$('#move1 .hold_label').unbind('click').click(function() {
\t\t\t\t\t\tvar user_id = \$('#move1 .employees').val();

\t\t\t\t\t\tif(!user_id) {
\t\t\t\t\t\t\tykp.prompt('请选择负责人');
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\tvar postdata = {
\t\t\t\t\t\t\tcustomers: customer_id.join(','),
\t\t\t\t\t\t\tuser_id: user_id
\t\t\t\t\t\t};

\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_customer/customer_add_user ',
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: postdata,
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('客户分配成功');
\t\t\t\t\t\t\t\t\$('#move1').fadeOut();
\t\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\t//隐藏移出层
\t\t\t\tcs.closePop();
\t\t\t});
\t\t}

\t\tfunction del() {
\t\t\t\$('.delCt').click(function() {

\t\t\t\tvar id = \$(this).parents('tr').attr('customer-id');
\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\tlayer.confirm('确认删除吗？', function(flag) {
\t\t\t\t\t\tvar _this = \$(this);
\t\t\t\t\t\tif(flag) {
\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\turl: \"/api/api_customer/del\",
\t\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\tid: id
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\t_this.parents('tr').remove();
\t\t\t\t\t\t\t\t\tykp.prompt('删除成功');
\t\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t})

\t\t\t})
\t\t}

\t\tfunction plDel() {
\t\t\t\$('#batchDel').unbind('click').click(function() {
\t\t\t\tvar num = 0;
\t\t\t\tvar status = '';
\t\t\t\tvar coldata = [];
\t\t\t\t\$('#datalist').find('input[type=checkbox]').each(function(i) {
\t\t\t\t\tif(\$(this).is(':checked')) {
\t\t\t\t\t\tnum++;
\t\t\t\t\t\tcoldata.push(\$(this).parents('tr').attr('customer-id'));
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\tif(num == 0) {
\t\t\t\t\tykp.prompt('请选择再删除');
\t\t\t\t} else {
\t\t\t\t\t//\t\t\t\t\tbootbox.confirm('确认删除？', function(flag) {
\t\t\t\t\t//\t\t\t\t\t\tif(flag) {
\t\t\t\t\t//\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t//\t\t\t\t\t\t\t\turl: \"/api/api_customer/batch_del\",
\t\t\t\t\t//\t\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t//\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t//\t\t\t\t\t\t\t\t\tids: coldata.join(',')
\t\t\t\t\t//\t\t\t\t\t\t\t\t},
\t\t\t\t\t//\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t//\t\t\t\t\t\t\t\t\tykp.prompt('删除成功');
\t\t\t\t\t//\t\t\t\t\t\t\t\t\tgetList();
\t\t\t\t\t//\t\t\t\t\t\t\t\t}
\t\t\t\t\t//\t\t\t\t\t\t\t})
\t\t\t\t\t//\t\t\t\t\t\t}
\t\t\t\t\t//\t\t\t\t\t});
\t\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\tlayer.confirm('确认删除吗？', function(flag) {
\t\t\t\t\t\t\tif(flag) {
\t\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\t\turl: \"/api/api_customer/batch_del\",
\t\t\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\t\tids: coldata.join(',')
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\t\tykp.prompt('删除成功');
\t\t\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t})

\t\t\t\t}
\t\t\t})
\t\t}

\t\t//编辑客户
\t\tfunction editCustomer(data) {
\t\t\t\$('.editCt').click(function() {
\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\tvar id = \$(this).parents('tr').attr('customer-id');
\t\t\t\tshowMark('#template');
\t\t\t\tgetType();
\t\t\t\taddType();
\t\t\t\tif(\$(this).hasClass('infoCt')) {
\t\t\t\t\t\$('#showBox .title').text('详情');
\t\t\t\t\t\$('#templateCon .sure_button').remove();
\t\t\t\t\t\$('#templateBox #range1').show();
\t\t\t\t\t\$('#templateBox #addTypeBtn').remove();
\t\t\t\t\t\$('#templateBox #delCusCate').remove();
\t\t\t\t} else {
\t\t\t\t\t\$('#showBox .title').text('编辑');
\t\t\t\t\t\$('#templateCon .title').text('编辑客户');
\t\t\t\t}

\t\t\t\t//成立日期
\t\t\t\tcs.timeplug();
\t\t\t\tvar _data = data[index];
\t\t\t\t//\t\t\t\tconsole.log(_data['khm_customer.area']);
\t\t\t\tgetType(_data['khm_customer.type']);
\t\t\t\t\$(\"#templateCon #city\").citySelect({
\t\t\t\t\turl: \"/resource/adimin/assets/js/src/city.min.js\",
\t\t\t\t\tprov: _data['khm_customer.area'] ? _data['khm_customer.area'].split(',')[0] : '广东', //省份 
\t\t\t\t\tcity: _data['khm_customer.area'] ? _data['khm_customer.area'].split(',')[1] : '深圳', //月份
                    dist:_data['khm_customer.area'] ? _data['khm_customer.area'].split(',')[2] : '' //当子集无数据时，隐藏select
\t\t\t\t});
\t\t\t\tif(\$(this).hasClass('infoCt')) {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\$('#templateBox').find('input,select,textarea').prop('disabled', true);
\t\t\t\t\t}, 200)
\t\t\t\t}
\t\t\t\tvar field = '';
\t\t\t\t\$('#templateBox ').find('[addfield]').each(function(i, e) {
\t\t\t\t\tfield = 'khm_customer.' + \$(this).attr('addfield');
\t\t\t\t\t\$(this).attr('addfield') == 'stablish_time' ? \$(this).val(cs.getNowTime(_data[field])) : \$(this).val(_data[field]);
\t\t\t\t\tif(\$(this).attr('addfield') == 'source') {
\t\t\t\t\t\tif(\$(this).val() == '转介绍') {
\t\t\t\t\t\t\t\$(this).next().show().next().show();
\t\t\t\t\t\t\tvar html = [];
\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\turl: \"/api/api_contact_book/grid\",
\t\t\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\tlimit: 999
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\tvar data = res.data.items;

\t\t\t\t\t\t\t\t\thtml.push('<option  value=\"\">请选择</option>');
\t\t\t\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\t\t\t\thtml.push('<option  value=\"' + data[i]['khm_contact_book.username'] + '\">' + data[i]['khm_contact_book.username'] + '</option>');
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\$('#templateBox #introducer').html(html.join(','));
\t\t\t\t\t\t\t\t\t//月份
\t\t\t\t\t\t\t\t\t\$('#templateCon #introducer').select2({
\t\t\t\t\t\t\t\t\t\tallowClear: true
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\$('#templateCon #introducer').val(_data['khm_customer.introduce']).trigger('change');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t})

\t\t\t\t\$('#templateCon #delCusCate').click(function() {
\t\t\t\t\tvar id = \$('#templateCon').find('select[addfield=type]').val();
\t\t\t\t\tif(id) {
\t\t\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\t\tlayer.confirm('真的删除行么', function(index) {
\t\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\t\turl: \"/api/api_customer_type/del\",
\t\t\t\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\t\tid: id
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t\t\t\tgetType();
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\tlayer.closeAll();

\t\t\t\t\t\t\t});

\t\t\t\t\t\t})
\t\t\t\t\t} else {
\t\t\t\t\t\tykp.prompt('请选中公海类型删除');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}

\t\t\t\t})
\t\t\t\tshowIntroducer();

\t\t\t\t\$('#templateCon .add').click(function() {
\t\t\t\t\tvar prov = \$('#templateBox .prov').val() || '';
\t\t\t\t\tvar city = \$('#templateBox .city').val() || '';
\t\t\t\t\tvar dist = \$('#templateBox .dist').val() || '';
\t\t\t\t\tvar area = prov + \",\" + city
\t\t\t\t\tif(dist != '') {
\t\t\t\t\t\tarea += (\",\" + dist);
\t\t\t\t\t}

                    console.log(area);
                    // if(!cs.popValidate()) {
\t\t\t\t\t// \treturn;
\t\t\t\t\t// }

\t\t\t\t\tvar postdata = {
\t\t\t\t\t\tid: id
\t\t\t\t\t};

\t\t\t\t\t\$('#templateBox ').find('[addfield]').not(':hidden').each(function(i, e) {
\t\t\t\t\t\tif(\$(this).attr('addfield') == 'stablish_time') {
\t\t\t\t\t\t\tpostdata[\$(this).attr('addfield')] = new Date(\$(this).val()) / 1000;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tpostdata[\$(this).attr('addfield')] = \$(this).val() ? \$(this).val() : '';
\t\t\t\t\t\t}

\t\t\t\t\t})

\t\t\t\t\tpostdata['area'] = area;
\t\t\t\t\tconsole.log(postdata);

\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_customer/edit',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: postdata,
\t\t\t\t\t\tsuccess: function() {
\t\t\t\t\t\t\tykp.prompt('编辑成功');
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\tgetList();
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t});
\t\t\t});
\t\t}

\t\t//选择弹出层客户来源中转介绍时，显示介绍人，
\t\t//选择其他时，隐藏介绍人
\t\tfunction showIntroducer() {
\t\t\tvar html = [];
\t\t\t\$('#templateCon .source').change(function() {
\t\t\t\tif(\$(this).find('option:selected').index() == 1) {

\t\t\t\t\t\$('#templateCon .introducer').show();
\t\t\t\t\tif(html.length == 0) {
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: \"/api/api_contact_book/grid\",
\t\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tlimit: 999
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tvar data = res.data.items;

\t\t\t\t\t\t\t\thtml.push('<option  value=\"\">请选择</option>');
\t\t\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\t\t\thtml.push('<option  value=\"' + data[i]['khm_contact_book.username'] + '\">' + data[i]['khm_contact_book.username'] + '</option>');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\$('#templateBox #introducer').html(html.join(','));
\t\t\t\t\t\t\t\t//月份
\t\t\t\t\t\t\t\t\$('#templateCon #introducer').select2({
\t\t\t\t\t\t\t\t\tallowClear: true
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t\$('#templateCon .introducer').hide();
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//添加客户
\t\t\$('#addItem').click(function() {
\t\t\tshowMark('#template');
\t\t\t\$('#showBox .title').text('添加客户');
\t\t\taddType();
\t\t\tgetType();
\t\t\t\$(\"#templateCon #city\").citySelect({
\t\t\t\turl: \"/resource/adimin/assets/js/src/city.min.js\",
\t\t\t\tprov: '广东', //省份 
\t\t\t\tcity: '深圳',
\t\t\t\tnodata: \"none\" //当子集无数据时，隐藏select  
\t\t\t});
\t\t\t\$('#templateCon #delCusCate').click(function() {
\t\t\t\tvar id = \$('#templateCon').find('select[addfield=type]').val();
\t\t\t\tif(id) {
\t\t\t\t\tlayui.use('layer', function() {
\t\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t\tlayer.confirm('真的删除行么', function(index) {
\t\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\t\turl: \"/api/api_customer_type/del\",
\t\t\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\tid: id
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t\tlayer.close(index);
\t\t\t\t\t\t\t\t\tgetType();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})

\t\t\t\t\t\t});
\t\t\t\t\t})
\t\t\t\t} else {
\t\t\t\t\tykp.prompt('请选中公海类型删除');
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t})
\t\t\tshowIntroducer();

\t\t\t//成立日期
\t\t\tcs.timeplug();

\t\t\t\$('#templateCon .add').click(function() {
\t\t\t\tvar prov = \$('#templateBox .prov').val() || '';
\t\t\t\tvar city = \$('#templateBox .city').val() || '';
\t\t\t\tvar dist = \$('#templateBox .dist').val() || '';
\t\t\t\tvar area = prov + \",\" + city;
\t\t\t\tif(dist != '') {
\t\t\t\t\tarea += (\",\" + dist);
\t\t\t\t}
\t\t\t\t//\t\t\t\tif(\$('#templateCon').find('[addfield=\"phone\"]').val().trim().length != 11) {
\t\t\t\t//\t\t\t\t\tykp.prompt('手机号码错误');
\t\t\t\t//\t\t\t\t\t\$('#templateCon').find('[addfield=\"phone\"]').val('');
\t\t\t\t//\t\t\t\t\treturn;
\t\t\t\t//\t\t\t\t}
\t\t\t\tif(!cs.popValidate()) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tvar inputOrSelectOrTextarea = \$('#templateCon').find('input,select,textarea');
\t\t\t\tvar time = inputOrSelectOrTextarea.eq(4).val();
\t\t\t\tvar data = {
\t\t\t\t\tname: \$('#templateCon').find('[addfield=\"name\"]').val(),
\t\t\t\t\tcorporation: \$('#templateCon').find('[addfield=\"corporation\"]').val(),
\t\t\t\t\tcapital: \$('#templateCon').find('[addfield=\"capital\"]').val(),
\t\t\t\t\tstablish_time: cs.getTime(time) || \"\",
\t\t\t\t\taddress: \$('#templateCon').find('[addfield=\"address\"]').val(),
\t\t\t\t\ttel: \$('#templateCon').find('[addfield=\"tel\"]').val(),
\t\t\t\t\trange: \$('#templateCon').find('[addfield=\"range\"]').val(),
\t\t\t\t\turl: \$('#templateCon').find('[addfield=\"url\"]').val(),
\t\t\t\t\tphone: \$('#templateCon').find('[addfield=\"phone\"]').val(),
\t\t\t\t\tfax: \$('#templateCon').find('[addfield=\"fax\"]').val(),
\t\t\t\t\temail: \$('#templateCon').find('[addfield=\"email\"]').val(),
\t\t\t\t\tsource: \$('#templateCon').find('[addfield=\"source\"]').val(),
\t\t\t\t\tintroduce: \$('#templateCon').find('[addfield=\"source\"]').selectedIndex == 0 ? '' : \$('#templateCon').find('[addfield=\"introduce\"]').val(),
\t\t\t\t\tindustry: \$('#templateCon').find('[addfield=\"industry\"]').val(),
\t\t\t\t\tscale: \$('#templateCon').find('[addfield=\"scale\"]').val(),
\t\t\t\t\tcontacts: \$('#templateCon').find('[addfield=\"contacts\"]').val(),
\t\t\t\t\ttype: \$('#templateCon').find('[addfield=\"type\"]').val(),
\t\t\t\t\tremark: \$('#templateCon').find('[addfield=\"remark\"]').val(),
\t\t\t\t\tsocial_credit_code: \$('#templateCon').find('[addfield=\"social_credit_code\"]').val(),
\t\t\t\t\tarea: area,
\t\t\t\t\ttax_type: \$('#templateCon').find('[addfield=\"tax_type\"]').val(),
\t\t\t\t}
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_customer/add',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: data,
\t\t\t\t\tsuccess: function() {
\t\t\t\t\t\tcs.close();
\t\t\t\t\t\tgetList();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t});

\t\t//自定义列表
\t\tcs.custorm_check('#dynamic-table', '#datalist', true);
\t});
\t//全选函数
\tfunction checkAll(status) {
\t\t\$(\"tbody input[name='check']\").each(function(i, n) {
\t\t\tn.checked = status;
\t\t});
\t}
</script>";
    }

    public function getTemplateName()
    {
        return "admin/clientManage/seaOfclients.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  676 => 653,  672 => 652,  19 => 1,);
    }
}
/* <style>*/
/* 	#templateCon label {*/
/* 		text-align: right;*/
/* 		width: 90px;*/
/* 	}*/
/* 	*/
/* 	#heightsearch1 label {*/
/* 		width: 70px;*/
/* 	}*/
/* 	*/
/* 	.widget-header {*/
/* 		border-bottom: none;*/
/* 	}*/
/* 	*/
/* 	#templateBox input {*/
/* 		height: 30px;*/
/* 		width: 180px;*/
/* 		padding-left: 5px;*/
/* 	}*/
/* 	*/
/* 	#move th,*/
/* 	#move td {*/
/* 		height: 35px;*/
/* 		text-align: left;*/
/* 		padding: 5px;*/
/* 	}*/
/* 	*/
/* 	#move table {*/
/* 		border: none;*/
/* 	}*/
/* </style>*/
/* */
/* <div class=" widget-main">*/
/* 	<div class="row">*/
/* 		<div class="col-lg-12">*/
/* 			<!--  <h3 class="header smaller lighter blue">客户公海</h3> -->*/
/* 			<div class="row" style="position:relative;margin-top: 20px;" id="topTool">*/
/* 				<!--<h3 class="header smaller lighter blue">送单</h3>-->*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<input type="text" id="form-field-1" placeholder="企业名称" class="" pts="0" sear="khm_customer.name" />*/
/* 				</div>*/
/* */
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<input type="text" id="form-field-1" placeholder="法人名称" class="" pts="0" sear="khm_customer.corporation" />*/
/* 				</div>*/
/* */
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<button type="button" id="search" class="btn btn-info btn-sm">*/
/*                         <i class="fa fa-search"></i>*/
/*                     </button>*/
/* 				</div>*/
/* */
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<button type="button" id="hsearch" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/*                         <i class="fa fa-filter"></i>*/
/*                    </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<button id="flush" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/* 	                    <i class="fa fa-refresh"></i>*/
/* 	                </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="112" style=" float: left; margin-right: 5px;">*/
/* 					<button type="button" id="addItem" title="添加" style="outline: none;background:#32CD32 !important;border-color: #32CD32!important;" class="btn addBtn btn-info btn-sm position-relative">*/
/*                             <i class="fa fa-plus"></i>*/
/* */
/*                         </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="113" style=" float: left; margin-right: 5px;">*/
/* 					<label type="button" title="导入企业" id="mergeItem" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="btn btn-info btn-sm position-relative" for="leading-in">*/
/*                             <i class="fa fa-sign-in"></i>*/
/* */
/*                         </label>*/
/* 					<!--<input type="file" id="leading-in" style="opacity:0;position:absolute;left:-9999px;">-->*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="298" style=" float: left; margin-right: 5px;">*/
/* 					<button type="button" title="导出" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="exportfile btn addBtn btn-info btn-sm position-relative">*/
/* 						<i class="fa fa-sign-out"></i>*/
/* 					</button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="114" style=" float: left; margin-right: 5px;">*/
/* 					<button type="button" title="批量删除" id="batchDel" style="outline: none; background-color: #FF5722 !important; border-color:#FF5722 ;" class="btn del btn-info btn-sm position-relative;">*/
/* 						<i class="fa fa-trash-o"></i>*/
/* 					</button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="112" style=" float: left; margin-right: 5px;">*/
/* 					<button type="button" title="移入线索" id="moveToClue" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="moveToClue1 btn addBtn btn-info btn-sm position-relative">*/
/* 						<i class="fa fa-arrows-alt"></i>*/
/* 	                </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="112" style=" float: left; margin-right: 5px;">*/
/* 					<button type="button" title="分配负责人" id="" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="moveToClue1 btn btn-info btn-sm position-relative">*/
/* 						<i class="fa fa-hand-o-right"></i>*/
/* 	                </button>*/
/* 				</div>*/
/* 				<!--<div class="col-sx-4" contentAuthority="289" style=" float: left; margin-right: 5px;">*/
/* 						<button type="button" id="moveToClue" style="outline: none;" class="moveToClue btn addBtn btn-info btn-sm position-relative">*/
/* 							移交负责人*/
/* 						</button>*/
/* 				</div>-->*/
/* 				<div class="col-sx-4" style=" float: left;  margin-right: 5px;position:relative;">*/
/* 					<div id="filterBtns" style="display:block;height: 36px;">*/
/* 						<a href="javascript:void(0);" class="myFilter" style="line-height:32px; width: 72px; background: #E6E6E6;" data-kind="0"> 查看全部</a>*/
/* 						<a href="javascript:void(0);" class="myFilter" style="line-height:32px; width: 72px;" data-kind="1"> 我负责的</a>*/
/* 						<a href="javascript:void(0);" class="myFilter" style="line-height:32px; width: 72px;" data-kind="3"> 我的下属</a>*/
/* 						<a href="javascript:void(0);" class="myFilter" style="line-height:32px; width: 90px;" data-kind="4"> 未转移客户</a>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="heightsearch1" class="col-sx-12" style="margin-top:30px;position: absolute; background: #fff;padding: 10px 0px; display: none;z-index:1042;">*/
/* 					<div class="row">*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>企业名称</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.name" />*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>信用代码</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.social_credit_code" />*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>法人</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.corporation" />*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>注册资本(万)</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> > </option>*/
/* 								<option> &lt; </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.capital" data-type="gj">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>成立日期</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> > </option>*/
/* 								<option> &lt; </option>*/
/* 							</select>*/
/* 							<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 								<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 							</span>*/
/* 								<input class="form-control" type="text" data-status="rangtime" gjs=0 sear="khm_customer.stablish_time" name="date-range-picker" id="id-date-range-picker-1" />*/
/* 							</div>*/
/* 							<!--<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 								<input id="date-timepicker1" data-type="gj" data-status="time" gjs=0 sear="khm_customer.stablish_time" class="date-timepicker1 form-control" style="height: 30px; width: 150px;">*/
/* 								<span class="input-group-addon" style="width:30px;">*/
/*                                         <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/*                                     </span>*/
/* 							</div>-->*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>地址</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 id="" sear="khm_customer.address">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>电话号码</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.tel">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>经营范围</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.range">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>网址</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.url">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>手机号码</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 id="" sear="khm_customer.phone">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>传真</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.fax">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>邮箱</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.email">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>客户来源</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width:180px" gjs=0 sear="khm_customer.source">*/
/* 								<option value="">请选择</option>*/
/* 								<option value="转介绍">转介绍</option>*/
/* 								<option value="电话咨询">电话咨询</option>*/
/* 								<option value="线上注册">线上注册</option>*/
/* 								<option value="客户上门">客户上门</option>*/
/* 								<option value="陌生拜访">陌生拜访</option>*/
/* 								<option value="公司资源">公司资源</option>*/
/* 								<option value="个人资源">个人资源</option>*/
/* 								<option value="广告宣传">广告宣传</option>*/
/* 								<option value="电话营销">电话营销</option>*/
/* 							</select>*/
/* 						</div>*/
/* */
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>所属行业</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select class="" style="width:180px;" gjs=0 sear="khm_customer.industry">*/
/* 								<option value="">请选择</option>*/
/* 								<option value="1">批发零售业</option>*/
/* 								<option value="2">制造业</option>*/
/* 								<option value="3">租赁和商务服务业</option>*/
/* 								<option value="4">仓储运输业</option>*/
/* 								<option value="5">餐饮住宿业</option>*/
/* 								<option value="6">信息软件业</option>*/
/* 								<option value="7">金融业</option>*/
/* 								<option value="8">房地产业</option>*/
/* 								<option value="9">建筑业</option>*/
/* 								<option value="10">教育</option>*/
/* 								<option value="11">文体娱乐业</option>*/
/* 								<option value="12">卫生和社会工作</option>*/
/* 								<option value="13">居民服务</option>*/
/* 								<option value="14">修理业</option>*/
/* 								<option value="15">农林牧渔业</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>公司规模</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 								<option> > </option>*/
/* 								<option> &lt; </option>*/
/* 							</select>*/
/* 							<!--<input type="text" gjs=0 sear="khm_customer.scale" data-type="gj">-->*/
/* 							<select style="width: 180px" gjs=0 sear="khm_customer.scale">*/
/* 								<option value="">请选择</option>*/
/* 								<option value="10人以下">10人以下</option>*/
/* 								<option value="10-50人">10-50人</option>*/
/* 								<option value="50-100人">50-100人</option>*/
/* 								<option value="100-200人">100-200人</option>*/
/* 								<option value="200人以上">200人以上</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>联系人姓名</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<input type="text" gjs=0 sear="khm_customer.contacts">*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>税务类型</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width:180px" gjs=0 sear="khm_customer.tax_type" data-type="gj">*/
/* 								<option value="">请选择</option>*/
/* 								<option value="1">一般纳税人</option>*/
/* 								<option value="2">小规模</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>公海类型</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width:180px" id="ktype" class="advandced-search" gjs=0 sear="khm_customer.type" data-type="gj">*/
/* 								<option value="">请选择</option>*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 							<label>负责人</label>*/
/* 							<select>*/
/* 								<option> = </option>*/
/* 							</select>*/
/* 							<select style="width:180px" id="people" class="advandced-search" gjs=0 sear="khm_customer.high_seas" data-type="gj">*/
/* 								<option value="">请选择</option>*/
/* 							</select>*/
/* 						</div>*/
/* */
/* 						<div style="text-align:center;clear:both;padding-top:10px; ">*/
/* 							<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/*                                     查询*/
/*                                 </button>*/
/* 							<button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 								                       重置*/
/* 								                    </button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div style="margin-top:10px;">*/
/* 		<div class="platform-data custom_table">*/
/* 			<table id="dynamic-table">*/
/* 				<thead>*/
/* 					<tr class="thColor">*/
/* 						<th>*/
/* 							<label class="pos-rel">*/
/*                                     <input type="checkbox" class="ace" onclick="checkAll(this.checked)"/>*/
/*                                     <span class="lbl"></span>*/
/*                                     </label>*/
/* 						</th>*/
/* */
/* 						<th class="hidden-480 center">操作</th>*/
/* 						<th data-num="1" class="hidden-480">公海类型</th>*/
/* 						<th data-num="2" class="hidden-480">转移状态</th>*/
/* 						<th data-num="3" class="hidden-480">负责人</th>*/
/* 						<th data-num="4">企业名称</th>*/
/* 						<th data-num="5">社会信用代码</th>*/
/* 						<th data-num="6">法人</th>*/
/* 						<th data-num="7" style="text-align: right !important;" class="hidden-480">注册资本(万)</th>*/
/* 						<th data-num="8" class="hidden-480">成立日期</th>*/
/* 						<th data-num="9" class="hidden-480">地址</th>*/
/* 						<th data-num="10" class="hidden-480">电话号码</th>*/
/* 						<th data-num="11" class="hidden-480">经营范围</th>*/
/* 						<th data-num="12" class="hidden-480">网址</th>*/
/* 						<th data-num="13" class="hidden-480">手机号码</th>*/
/* 						<th data-num="14" class="hidden-480">传真</th>*/
/* 						<th data-num="15" class="hidden-480">邮箱</th>*/
/* 						<th data-num="16" class="hidden-480">客户来源</th>*/
/* 						<th data-num="17" class="hidden-480">所属行业</th>*/
/* 						<th data-num="18" class="hidden-480">公司规模</th>*/
/* 						<th data-num="19" class="hidden-480">联系人姓名</th>*/
/* 						<th data-num="20" class="hidden-480">税务类型</th>*/
/* 						<th data-num="21" class="hidden-480">备注</th>*/
/* */
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody id="datalist">*/
/* */
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 		<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 			<div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
/* 			<div id="pageBar" class="pagination"></div>*/
/* 			<div align="right" style="float: right;  width: 10%;">*/
/* 				<select style="width: 100px;" id="changePageNum">*/
/* 					<option value="10">每页10条</option>*/
/* 					<option value="20">每页20条</option>*/
/* */
/* 					<option value="50">每页50条</option>*/
/* */
/* 					<option value="100">每页100条</option>*/
/* 					<option value="200">每页200条</option>*/
/* 				</select>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row" id="template" style="display:none;">*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> <i class='reqired_label'>*</i>企业名称： </label>*/
/* 			<input class="required" addfield="name" msg="企业名称不能为空" />*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<span id="range">*/
/* 				<label> 社会信用代码： </label>*/
/* 				<input class="" addfield="social_credit_code" msg="">*/
/* 			</span>*/
/* 			<label>法人： </label>*/
/* 			<input addfield="corporation" msg="法人不能为空">*/
/* 		</div>*/
/* */
/* 		<div style="margin-top:15px;">*/
/* 			<label> 注册资本(万)： </label>*/
/* 			<input class="" addfield="capital" msg="只能是数字" validate="int" type="number" />*/
/* 			<label> 成立日期： </label>*/
/* 			<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 				<input class="date-timepicker1" addfield="stablish_time" msg="" style="height: 30px; width:inherit;">*/
/* 				<span class="input-group-addon" style="width:30px;height:30px;position:absolute;right:0;border-left:1px solid #ddd;">*/
/* 					<i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 				</span>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 省市区：</label>*/
/* 			<span id="city" title_="area">*/
/*                 <select class="prov"></select>  */
/*                 <select class="city" disabled="disabled"></select>  */
/*                 <select class="dist" disabled="disabled"></select>  */
/*             </span>*/
/* 		</div>*/
/* */
/* 		<div style="margin-top:15px;">*/
/* 			<label> 公海类型：</label>*/
/* 			<span id="city" title_="area">*/
/*      			<select style="margin-right: 12px !important;width: 180px" addfield="type"  class="cusType select2-hidden-accessible" tabindex="-1" sear="type" >*/
/* 				*/
/*           	</select>*/
/*             </span>*/
/* 			<button id="addTypeBtn" class="btn">添加</button>*/
/* 			<button id="delCusCate" class="btn  btn-sm" style="line-height:normal;height:30px;top:0; background: #FF5722 !important;">删除</button>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label>地址： </label>*/
/* 			<input addfield="address" msg="公司地址不能为空" style="width:457px;" />*/
/* 		</div>*/
/* */
/* 		<div style="margin-top:15px;">*/
/* 			<label> <i class='reqired_label'>*</i>联系人姓名： </label>*/
/* 			<input class="required" addfield="contacts" msg="联系人姓名不能为空" />*/
/* 			<label> 电话号码： </label>*/
/* 			<input class="" addfield="tel" msg="" />*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 网址： </label>*/
/* 			<input class="" addfield="url" msg="" />*/
/* 			<label>手机号码： </label>*/
/* 			<input addfield="phone">*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 传真： </label>*/
/* 			<input class="" addfield="fax" msg="" />*/
/* 			<label> 邮箱： </label>*/
/* 			<input class="" addfield="email" msg="">*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label>客户来源： </label>*/
/* 			<select class="source" addfield="source" style="width:180px;" msg="">*/
/* 				<option value=""> 请选择 </option>*/
/* 				<option value="转介绍">转介绍</option>*/
/* 				<option value="电话咨询">电话咨询</option>*/
/* 				<option value="线上注册">线上注册</option>*/
/* 				<option value="客户上门">客户上门</option>*/
/* 				<option value="陌生拜访">陌生拜访</option>*/
/* 				<option value="公司资源">公司资源</option>*/
/* 				<option value="个人资源">个人资源</option>*/
/* 				<option value="广告宣传">广告宣传</option>*/
/* 				<option value="电话营销">电话营销</option>*/
/* 			</select>*/
/* 			<span class="introducer" style="display:none;">*/
/* 				<label class="" > 介绍人： </label>*/
/* 				<select class="" addfield="introduce" id="introducer" style="width:180px;" title_="introduce">*/
/* 			</span>*/
/* 			</select>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label> 所属行业： </label>*/
/* 			<select class="" style="width:180px;" addfield="industry" msg="">*/
/* 				<option value="">请选择</option>*/
/* 				<option value="1">批发零售业</option>*/
/* 				<option value="2">制造业</option>*/
/* 				<option value="3">租赁和商务服务业</option>*/
/* 				<option value="4">仓储运输业</option>*/
/* 				<option value="5">餐饮住宿业</option>*/
/* 				<option value="6">信息软件业</option>*/
/* 				<option value="7">金融业</option>*/
/* 				<option value="8">房地产业</option>*/
/* 				<option value="9">建筑业</option>*/
/* 				<option value="10">教育</option>*/
/* 				<option value="11">文体娱乐业</option>*/
/* 				<option value="12">卫生和社会工作</option>*/
/* 				<option value="13">居民服务</option>*/
/* 				<option value="14">修理业</option>*/
/* 				<option value="15">农林牧渔业</option>*/
/* 			</select>*/
/* 			<label> 公司规模： </label>*/
/* 			<!--<input class="" addfield="scale" msg="">-->*/
/* 			<select style="width: 180px" addfield="scale">*/
/* 				<option value="">请选择</option>*/
/* 				<option value="10人以下">10人以下</option>*/
/* 				<option value="10-50人">10-50人</option>*/
/* 				<option value="50-100人">50-100人</option>*/
/* 				<option value="100-200人">100-200人</option>*/
/* 				<option value="200人以上">200人以上</option>*/
/* 			</select>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label>税务类型： </label>*/
/* 			<select addfield="tax_type" style="width:180px;" msg="请选择税务类型">*/
/* 				<option value=""> 请选择 </option>*/
/* 				<option value="1">一般纳税人</option>*/
/* 				<option value="2" selected="selected">小规模</option>*/
/* 			</select>*/
/* */
/* 		</div>*/
/* 		<div style="margin-top:15px;" id="range1" style="display: none;">*/
/* 			<label style="float:left;"> 经营范围： </label>*/
/* 			<textarea style="width:457px;margin-left:5px;resize:none;padding:5px;" addfield="range" class="in_remark"></textarea>*/
/* 		</div>*/
/* 		<div style="margin-top:15px;">*/
/* 			<label style="float:left;"> 备注： </label>*/
/* 			<textarea style="width:457px;margin-left:5px;resize:none;padding:5px;" addfield="remark" class="in_remark"></textarea>*/
/* 		</div>*/
/* 		<div style="text-align:center;margin-top:15px;border-top:1px solid #ccc;padding-top: 10px;">*/
/* 			<span class="msg" style="margin-left:calc(50% - 49px);float:left;line-height:34px;display:none;color:red;"></span>*/
/* 			<button class="sure_button add">*/
/*                             <i class="fa fa-check" aria-hidden="true"></i>*/
/*                             保存*/
/*                         </button>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="label_popup move" id="movexs" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;max-height: 400px;">*/
/* 		<div style="max-width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/*         box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* */
/* 			<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 				<span style="display: inline-block;font-size:14px;">移入线索</span>*/
/* 				<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 			</div>*/
/* 			<div style="padding: 10px 20px;">*/
/* 				<div style="margin-bottom: 10px; margin-top: 10px;max-height:300px;overflow:auto;">*/
/* 					<table>*/
/* 						<tbody class="move_message">*/
/* 							<tr>*/
/* 								<td>*/
/* 									<span>移交给</span>*/
/* 									<i style="padding:0 5px;"></i>*/
/* 									<select class="employees select2-hidden-accessible" style="width:200px">*/
/* 										<option value="">请选择负责人</option>*/
/* 									</select>*/
/* 								</td>*/
/* 							</tr>*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div style="padding:20px;text-align:right;">*/
/* 				<button class="hold_label btn btn-info btn-sm">保存</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="label_popup" id="move1" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;max-height: 400px;">*/
/* 		<div style="max-width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/*         box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* */
/* 			<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 				<span style="display: inline-block;font-size:14px;">分配负责人</span>*/
/* 				<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 			</div>*/
/* 			<div style="padding: 10px 20px;">*/
/* 				<div style="margin-bottom: 10px; margin-top: 10px;max-height:300px;overflow:auto;">*/
/* 					<table>*/
/* 						<tbody class="move_message">*/
/* 							<tr>*/
/* 								<td>*/
/* 									<span>分配给</span>*/
/* 									<i style="padding:0 5px;"></i>*/
/* 									<select class="employees select2-hidden-accessible" style="width:200px">*/
/* 										<option value="">请选择负责人</option>*/
/* 									</select>*/
/* 								</td>*/
/* 							</tr>*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div style="padding:20px;text-align:right;">*/
/* 				<button class="hold_label btn btn-info btn-sm">保存</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="label_popup" id="addtype" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 		<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd; box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 			<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 				<span style="display: inline-block;">添加类型</span>*/
/* 				<a href="javascript:;" class="close_label" style="float:right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 			</div>*/
/* 			<div>*/
/* 			</div>*/
/* 			<div style="padding: 10px 50px;">*/
/* 				<label> 类型名称： </label>*/
/* 				<input class="required" style="height:28px;padding: auto 2px" id="typename" msg="新增客户类型名称不能为空">*/
/* 				<!-- <input width="200px" style="margin: auto;" id="efile" /> -->*/
/* 				<!--<hr>-->*/
/* 			</div>*/
/* 			<div style="padding:15px;text-align:right;">*/
/* 				<button class="btn btn-info  submitType" style="padding: 6px; border-radius: 0px;">保存</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="label_popup" id="export" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 		<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 	            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 			<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 				<span style="display: inline-block;">导入企业</span>*/
/* 				<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 			</div>*/
/* 			<div id="" style="margin-top: 10px; text-align: center;">*/
/* 				<label>公海类型</label>*/
/* 				<select class="gh">*/
/* */
/* 				</select>*/
/* 			</div>*/
/* 			<div style="padding: 10px 50px;">*/
/* 				<input type="file" width="200px" style="margin: auto;" id="efile" />*/
/* 				<!--<hr>-->*/
/* 			</div>*/
/* 			<div style="padding:15px;text-align:right;">*/
/* 				<a href="javascript:;" onclick='location.href=ykp.api_url+"/resource/excel_templete/customer.xlsx"'>*/
/* 					<button id="ghItem" class=" btn">公海模板</button></a>*/
/* 				<button class="btn btn-info  submit" style="padding: 6px; border-radius: 0px;">保存</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="label_popup" id="feedBack" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 		<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 	            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 			<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 				<span style="display: inline-block;">请选择要删除的分组</span>*/
/* 				<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 			</div>*/
/* 			<div style="padding: 10px 50px;">*/
/* 				<div style="margin-top:15px">*/
/* 					<label>公海类型： </label>*/
/* 					<select style="width: 180px" multiple="" addfield="cate_id" class="cusType select2-hidden-accessible" tabindex="-1" id="label_cat" aria-hidden="true">*/
/* 						<option value="">请选择公海类型</option>*/
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div style="padding:15px;text-align:right;">*/
/* 				<button class="close_label">关闭</button>*/
/* 				<button class="hold">保存</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* </div>*/
/* {% include 'admin/customerDetail.html' %} {% include 'admin/mark.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/assets/js/src/jquery.cityselect.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* <script>*/
/* 	jQuery(function($) {*/
/* 		cs.getNodes([112, 113, 114, 289]);*/
/* 		cs.dataRang();*/
/* 		var page_size = 10;*/
/* 		var order = 'khm_customer.id desc';*/
/* 		var filter = '';*/
/* 		var employees = {};*/
/* 		var customer_type = {};*/
/* 		var aid_2 = ykp.getCookie("aid_2");*/
/* 		var time = ykp.getCookie("time");*/
/* */
/* 		//导出功能*/
/* 		cs.exportFile({*/
/* 			url: "/api/api_customer/export",*/
/* 			title: "客户公海"*/
/* 		});*/
/* */
/* 		cs.setFuze({*/
/* 			conId: "#datalist",*/
/* 			url: "/api/api_customer/transfer_user",*/
/* 			fun: function() {*/
/* 				getEntireList();*/
/* 			}*/
/* 		});*/
/* 		//接收首页跳转*/
/* 		if(time && time != '') {*/
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
/* 					timestamp = `khm_customer.create_at>${today}`;*/
/* 					break;*/
/* 				case '2':*/
/* 					timestamp = `khm_customer.create_at<${today} and khm_customer.create_at>${today-86400}`*/
/* 					break;*/
/* 				case '3':*/
/* 					timestamp = `khm_customer.create_at>${today-86400*6}`;*/
/* 					break;*/
/* 				case '4':*/
/* 					timestamp = `khm_customer.create_at>${today-86400*29}`;*/
/* 					break;*/
/* 				case '5':*/
/* 					timestamp = `khm_customer.create_at>${today-86400*day_1}`;*/
/* 					break;*/
/* 				case '6':*/
/* 					timestamp = `khm_customer.create_at<${today-86400*day_1} and khm_customer.create_at>${newdaytime}`;*/
/* 					break;*/
/* 			}*/
/* 			var data = `khm_customer.is_del = 0 and khm_customer.create_id=${aid_2} and ${timestamp}`*/
/* 			if(aid_2 == '' || aid_2 == undefined) {*/
/* 				data = `khm_customer.is_del = 0 and ${timestamp}`*/
/* 			}*/
/* 			ykp.list({*/
/* 				url: '/api/api_customer/customer',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					type: 1,*/
/* 					limit: page_size,*/
/* 					filter: data,*/
/* 					order: order*/
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
/* 					} else {*/
/* 						handleData(res);*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 			ykp.setCookie("aid_2", "", (1 / 24));*/
/* 			ykp.setCookie("time", "", (1 / 24));*/
/* 		} else if(ykp.getCookie('data-id') != undefined && ykp.getCookie('data-id') != '') {*/
/* 			var id = ykp.getCookie('data-id');*/
/* 			var filter = 'and khm_customer.id=' + id;*/
/* 			getList(filter);*/
/* 			ykp.setCookie('data-id', '');*/
/* 		} else {*/
/* 			//页面初始化*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getList();*/
/* 		}*/
/* */
/* 		$('#filterBtns a').mouseover(function() {*/
/* 			$(this).addClass('over');*/
/* 		})*/
/* 		$('#filterBtns a').mouseout(function() {*/
/* 			$(this).removeClass('over');*/
/* 		})*/
/* 		//条件过滤器*/
/* 		$('.myFilter').click(function() {*/
/* 			if(!$(this).hasClass('clc')) {*/
/* 				$(this).addClass('clc').siblings().removeClass('clc');*/
/* 			}*/
/* 			var user = JSON.parse(ykp.getCookie('userinfo'));*/
/* */
/* 			var data = "";*/
/* 			var filter_ = $(this).attr('data-kind');*/
/* 			if(filter_ == '0') {*/
/* 				getList();*/
/* 				return;*/
/* 			}*/
/* 			//我负责的*/
/* 			if(filter_ == '1') {*/
/* 				data = "and  khm_customer.high_seas = " + user.id;*/
/* 			}*/
/* */
/* 			//我的下属*/
/* 			if(filter_ == '3') {*/
/* 				data += 'and khm_customer.high_seas in (select id from bmm_employees where up_user = ' + user.id + ')';*/
/* 			}*/
/* 			//未转移的*/
/* 			if(filter_ == '4') {*/
/* 				data += "and  khm_customer.transfer_status = " + 0;*/
/* 			}*/
/* 			//			filter = data['where'];*/
/* 			getList(data);*/
/* 		})*/
/* */
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_customer/customer',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter: 'khm_customer.is_del = 0 ' + filter,*/
/* 				limit: page_size,*/
/* 				type: 1*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '#pageBar'*/
/* 			},*/
/* 			initOrder: 'khm_customer.id',*/
/* 			defaultOrder: order,*/
/* 			contentId: "#dataList",*/
/* 			params: [{*/
/* 				id: "#dynamic-table",*/
/* 				field: ["", "", "khm_customer.type", "khm_customer.transfer_status", "","khm_customer.name","khm_customer.social_credit_code", "khm_customer.corporation",*/
/* 					"khm_customer.capital", "khm_customer.stablish_time", "khm_customer.address", "khm_customer.tel",*/
/* 					"khm_customer.range", "khm_customer.url", "khm_customer.phone", "khm_customer.fax", "khm_customer.email",*/
/* 					"khm_customer.source", "khm_customer.industry", "khm_customer.scale", "khm_customer.contacts", "khm_customer.tax_type"*/
/* 				]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			handleData(res);*/
/* 		});*/
/* */
/* 		$('#flush').click(function() {*/
/* 			filter = '';*/
/* 			getList();*/
/* 		})*/
/* */
/* 		//导入企业*/
/* 		$('#mergeItem').click(function() {*/
/* 			var file;*/
/* 			$('#export').show();*/
/* 			$('#export #efile').after($('#export #efile').clone().val(""));*/
/* 			$('#export #efile').eq(0).remove();*/
/* 			$('#efile').change(function() {*/
/* 				file = this.files[0];*/
/* 			})*/
/* 			getType();*/
/* 			$('.submit').unbind('click').click(function() {*/
/* 				var type = $(".gh").val();*/
/* 				if(!type) {*/
/* 					ykp.prompt("请选择公海类型");*/
/* 					return false;*/
/* 				}*/
/* 				if(file == undefined) {*/
/* 					ykp.prompt("请添加数据再上传");*/
/* 					return false;*/
/* 				} else {*/
/* 					$('.submit').prop('disabled', true);*/
/* 					var fd = new FormData();*/
/* 					fd.append('customer', file);*/
/* 					fd.append('login_token', ykp.getCookie('login_token'));*/
/* 					fd.append('type', type);*/
/* 					var data = {*/
/* 						url: ykp.api_url + "/api/api_customer/upload_batch",*/
/* 						fd: fd*/
/* 					}*/
/* 					ykp.prompt("导入需要时间 请耐心等待...");*/
/* 					setTimeout(cs.cexport(data, function(res) {*/
/* 						$('.submit').prop('disabled', false);*/
/* */
/* 						$('.label_popup').hide();*/
/* */
/* 						if(res.code == 200) {*/
/* 							ykp.prompt("上传成功");*/
/* 							getList();*/
/* 						} else {*/
/* 							ykp.prompt(res.msg);*/
/* 						}*/
/* */
/* 					}), 3000);*/
/* 					//					cs.cexport(data, function(res) {*/
/* 					//						$('.submit').prop('disabled',false);*/
/* 					//						*/
/* 					//						$('.label_popup').hide();*/
/* 					//					*/
/* 					//						if(res.code == 200) {*/
/* 					//							ykp.prompt("上传成功");*/
/* 					//							getList();*/
/* 					//						} else {*/
/* 					//							ykp.prompt(res.msg);*/
/* 					//						}*/
/* 					//						*/
/* 					//					})*/
/* 				}*/
/* 			})*/
/* 			cs.closePop();*/
/* 		});*/
/* */
/* 		//切换每页显示的条目数*/
/* 		$('#changePageNum').change(function() {*/
/* 			page_size = $(this).val();*/
/* 			getList();*/
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
/* 						employees[data[i]['id']] = data[i]['name'];*/
/* 						$('#people').append(`<option value="${data[i]['id']}">${data[i]['name']}</option>`);*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		});*/
/* */
/* 		getType();*/
/* 		//获取所有公海类型*/
/* 		function getType(type) {*/
/* 			ykp.doAjax({*/
/* 				async: false,*/
/* 				url: '/api/api_customer_type/f7',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					select: 'khm_customer_type.id,khm_customer_type.name'*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 					$('#templateCon .cusType').html('');*/
/* 					//<option value="">  请选择公海类型  </option>*/
/* 					var option = ['<option value="">请选择</option>'];*/
/* 					customer_type['0'] = '';*/
/* 					for(var i = data.length - 1; i >= 0; i--) {*/
/* 						customer_type[data[i]['id']] = data[i]['name'];*/
/* 						option += `<option value="${data[i]['id']}">${data[i]['name']}</option>`;*/
/* 					}*/
/* */
/* 					$('#heightsearch1 ').find('#ktype').html(option);*/
/* 					$('#heightsearch1 ').find('#ktype').select2({*/
/* 						allowClear: true*/
/* 					});*/
/* 					$('#templateCon .cusType').select2({*/
/* 						allowClear: true*/
/* 					});*/
/* 					$('#templateCon .cusType').html(option);*/
/* 					$('#templateCon .cusType').val(type).trigger('change');*/
/* 					$(' .gh').html(option);*/
/* 					$(' .gh').select2({*/
/* 						allowClear: true*/
/* 					});*/
/* */
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		function addType() {*/
/* 			$('#templateCon #addTypeBtn').click(function() {*/
/* 				$('#addtype').show();*/
/* 				saveType();*/
/* 			})*/
/* 			$('.close_label').click(function() {*/
/* 				$('#addtype').hide();*/
/* 			})*/
/* 		}*/
/* */
/* 		function saveType() {*/
/* 			$('.submitType').unbind().click(function() {*/
/* 				var typename = $('#typename').val();*/
/* 				if(typename.trim() == '') {*/
/* 					ykp.prompt('添加类型不能为空！');*/
/* 					return;*/
/* 				}*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_customer_type/add',*/
/* 					data: {*/
/* 						name: typename*/
/* 					},*/
/* 					method: 'post',*/
/* 					success: function(res) {*/
/* 						ykp.prompt('添加成功！ ');*/
/* 						$('#addtype').hide();*/
/* 						getType();*/
/* 					}*/
/* 				})*/
/* 			})*/
/* 		}*/
/* */
/* 		//普通搜索*/
/* 		function generalSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_customer/customer',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					type: 1,*/
/* 					limit: page_size,*/
/* 					order: order*/
/* 				}*/
/* 			}*/
/* 			cs.doSearch('#search', data, 'filter', false, function(res, _filter) {*/
/* 				filter = _filter;*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 				} else {*/
/* 					handleData(res);*/
/* 				}*/
/* 			}, 'khm_customer.is_del = 0');*/
/* 		}*/
/* 		//高级搜索列表显示与隐藏*/
/* 		$('.in').click(function() {*/
/* 			if($('#hsearch').hasClass('active')) {*/
/* 				$('#hsearch').removeClass('active').css('z-index', '');*/
/* 				$("#heightsearch1").slideUp();*/
/* 			}*/
/* 		});*/
/* */
/* 		$('#hsearch').click(function() {*/
/* 			if($(this).hasClass('active')) {*/
/* 				$('.in').removeClass('modal-backdrop');*/
/* 				$(this).removeClass('active').css('z-index', '');*/
/* 				$("#heightsearch1").slideUp();*/
/* 			} else {*/
/* 				$('.in').addClass('modal-backdrop');*/
/* 				$("#heightsearch1").slideDown();*/
/* 				$(this).attr('class', 'btn btn-info btn-sm active').css('z-index', '1041');*/
/* 				cs.rest(false, '#heightsearch1');*/
/* 				// 高级搜索成立日期*/
/* 				cs.timeplug();*/
/* 			}*/
/* 		})*/
/* */
/* 		//cs.showHeightSearch('#search1','#heightsearch1');*/
/* */
/* 		//高级搜索*/
/* 		function advancedSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_customer/customer',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					type: 1,*/
/* 					limit: page_size,*/
/* 					order: order,*/
/* 					filter: filter,*/
/* 				}*/
/* 			}*/
/* */
/* 			cs.hSearch('#search1', data, 'filter', false, function(res, _filter) {*/
/* 				filter = _filter;*/
/* 				$('.in').removeClass('modal-backdrop');*/
/* 				$("#heightsearch1").slideUp();*/
/* 				$("#hsearch").removeClass('active').css('z-index', '');*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function() {*/
/* 						ykp.prompt('暂无数据！');*/
/* 					}, 1000);*/
/* 					$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 				} else {*/
/* 					handleData(res);*/
/* 				}*/
/* 			}, 'khm_customer.is_del = 0')*/
/* */
/* 		}*/
/* */
/* 		//获取列表数据*/
/* 		function getList(filter) {*/
/* 			if(filter == undefined) {*/
/* 				filter = '';*/
/* 			}*/
/* */
/* 			var data = {*/
/* 				type: 1,*/
/* 				limit: page_size,*/
/* 				filter: "khm_customer.is_del = 0 " + filter,*/
/* 				order: order*/
/* 			};*/
/* */
/* 			$('.ace').prop('checked', false);*/
/* 			generalSearch();*/
/* 			advancedSearch();*/
/* 			ykp.list({*/
/* 				url: '/api/api_customer/customer',*/
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
/* 						$('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d;" class="page">暂无数据</div></td></tr>');*/
/* 					} else {*/
/* 						handleData(res);*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//处理数据*/
/* 		function handleData(res) {*/
/* 			var data = res.data.items;*/
/* 			var html = [];*/
/* 			var create_time = '';*/
/* */
/* 			var industry = ['', '批发零售业', '制造业', '租赁和商务服务业', '仓储运输业', '餐饮住宿业', '信息软件业', '金融业', '房地产业', '建筑业', '教育', '文体娱乐业', '卫生和社会工作', '居民服务', '修理业', '农林牧渔业'];*/
/* */
/* 			var styles = [];*/
/* 			$('#dynamic-table .thColor th').each(function(i, e) {*/
/* 				styles.push($(this).css('display'));*/
/* 			});*/
/* */
/* 			//经营范围*/
/* 			var pd_data;*/
/* 			//经营范围title*/
/* 			var range_title = [];*/
/* 			//遍历次数*/
/* 			var times;*/
/* */
/* 			for(var i in data) {*/
/* 				//获取经营范围title*/
/* 				pd_data = data[i]['khm_customer.range'];*/
/* 				times = Math.ceil(pd_data.length / 20);*/
/* 				for(var j = 0; j < times; j++) {*/
/* 					range_title.push(pd_data.slice(20 * j, (j + 1) * 20));*/
/* 				}*/
/* */
/* 				create_time = data[i]['khm_customer.stablish_time'] != 0 ? cs.getNowTime(data[i]['khm_customer.stablish_time']) : "";*/
/* 				html.push(*/
/* 					` <tr class="thColor" customer-id="${data[i]['khm_customer.id']}" customer-name="${data[i]['khm_customer.name']}">*/
/*                     <td class="center">*/
/*                         <label class="pos-rel">*/
/*                         <input type="checkbox" name="check" class="ace"/>*/
/*                         <span class="lbl"></span>*/
/*                         </label>*/
/*                     </td>*/
/* */
/*                     <td class="hidden-480 center">*/
/*                                 <label class="pos-rel">*/
/*                                 	<a href="javascript:void(0);" class="editCt infoCt btOrange" title="详情"><i class="fa fa-info"></i></a>*/
/*                                     <a href="javascript:void(0);" class="editCt btBlue" contentAuthority="115" title="编辑"><i class="fa fa-pencil-square-o"></i></span></a>*/
/*                                     <a href="javascript:void(0);" class="del delCt btRed" contentAuthority="116" title="删除"><i class="fa fa-trash-o"></i></a>*/
/*                                 </label>*/
/*                             </td>*/
/*                             <td style="display:${styles[2]};" data-num="1" class="hidden-480">${customer_type[data[i]['khm_customer.type']] || ""}</td>*/
/*                             <td style="display:${styles[3]};" data-num="2" class="hidden-480">${data[i]['khm_customer.transfer_status']==0 ? "未转移":"已转移"}</td>*/
/*                             <td style="display:${styles[4]};" data-num="3" class="hidden-480">${data[i]['high_seas_info']['name'] || ""}</td>*/
/*                             <td style="display:${styles[5]};" data-cid="${data[i]['khm_customer.id']}" data-num="4"><a href="javascript:;" class="hidden-480 customerDetail pos-rel">${data[i]['khm_customer.name']}</a>*/
/*                             <label class="pos-rel"><i class="iconBnt fa fa-info-circle" style="color:${data[i]['Remark'].length > 0 ? 'red' : ''}"  data-rel="tooltip" data-placement="right" data-html="true" title="${cs.getRemark(data[i]['Remark'])}" ></i></label></td>*/
/*                             <td style="display:${styles[6]};" data-num="5" class="hidden-480">${data[i]['khm_customer.social_credit_code']}</td>*/
/*                             <td style="display:${styles[7]};" data-num="6" class="hidden-480">${data[i]['khm_customer.corporation']}</td>*/
/*                             <td style="display:${styles[8]}; text-align: right !important;" data-num="7" class="hidden-480">${data[i]['khm_customer.capital'].replace(/^0*//* g," ")}</td>*/
/*                             <td style="display:${styles[9]};" data-num="8" class="hidden-480">${create_time}</td>*/
/*                             <td style="display:${styles[10]};" data-num="9" class="hidden-480">${data[i]['khm_customer.address']}</td>*/
/*                             <td style="display:${styles[11]};" data-num="10" class="hidden-480">${data[i]['khm_customer.tel']}</td>*/
/*                             <td style="display:${styles[12]};" data-num="11" class="hidden-480" title="${range_title.join('&#13;')}">*/
/* 								<label style="width:100px;overflow: hidden;text-overflow: ellipsis;font-weight:normal;" >*/
/* 					 				${data[i]['khm_customer.range']}*/
/* 				 				</label>*/
/*                             </td>*/
/*                             <td style="display:${styles[13]};" data-num="12" class="hidden-480">${data[i]['khm_customer.url']}</td>*/
/*                             <td style="display:${styles[14]};" data-num="13" class="hidden-480">${data[i]['khm_customer.phone']}</td>*/
/*                             <td style="display:${styles[15]};" data-num="14" class="hidden-480">${data[i]['khm_customer.fax']}</td>*/
/*                             <td style="display:${styles[16]};" data-num="15" class="hidden-480">${data[i]['khm_customer.email']}</td>*/
/*                             <td style="display:${styles[17]};" data-num="16" class="hidden-480">${data[i]['khm_customer.source']}</td>*/
/*                             <td style="display:${styles[18]};" data-num="17" class="hidden-480">${data[i]['khm_customer.industry'] ? industry[data[i]['khm_customer.industry']] : ''}</td>*/
/*                             <td style="display:${styles[19]};" data-num="18" class="hidden-480">${data[i]['khm_customer.scale']}</td>*/
/*                             <td style="display:${styles[20]};" data-num="19" class="hidden-480">${data[i]['khm_customer.contacts']}</td>*/
/*                             <td style="display:${styles[21]};" data-num="20" class="hidden-480">${data[i]['khm_customer.tax_type'] == 1 ? '一般纳税人' : '小规模'}</td>*/
/*                             <td style="display:${styles[22]};" data-num="21" class="hidden-480">${data[i]['khm_customer.remark']}</td>*/
/*                     </tr>`*/
/* 				);*/
/* 				//清空数组*/
/* 				range_title = [];*/
/* 			}*/
/* */
/* 			$('#datalist').html(html.join(''));*/
/* 			custom.get_custom_info();*/
/* 			$("[data-rel='tooltip']").tooltip();*/
/* */
/* 			custom.showReamrk();*/
/* 			cs.getNodes([115, 116, 289]);*/
/* 			editCustomer(data);*/
/* 			plDel();*/
/* 			del();*/
/* 		}*/
/* */
/* 		//移入线索*/
/* 		moveToClue();*/
/* */
/* 		function moveToClue() {*/
/* 			$('.moveToClue1').unbind('click').click(function() {*/
/* 				var customer_id = []; //公司id*/
/* 				var index = $(this).parent().index();*/
/* 				$('#datalist').find('[type="checkbox"]').each(function(i, e) {*/
/* 					if($(this).prop('checked') == true) {*/
/* 						customer_id.push($(this).parents('tr').attr('customer-id'));*/
/* 					}*/
/* 				});*/
/* */
/* 				if(customer_id.length <= 0) {*/
/* 					ykp.prompt('请先选择公司！');*/
/* 					return;*/
/* 				}*/
/* */
/* 				$('.move_message .employees').select2({*/
/* 					allowClear: true*/
/* 				});*/
/* */
/* 				var employees_html = [];*/
/* 				for(var i in employees) {*/
/* 					employees_html.push('<option value="' + i + '">' + employees[i] + '</option>');*/
/* 				}*/
/* 				$('.move_message .employees').html('<option value="">请选择负责人</option>');*/
/* 				$('.move_message .employees').append(employees_html.join(''));*/
/* 				if(index == 9) {*/
/* 					//显示移出层*/
/* 					$('#movexs').fadeIn();*/
/* */
/* 					//保存移出信息*/
/* 					$('.move .hold_label').unbind('click').click(function() {*/
/* 						var user_id = $('.move .employees').val();*/
/* */
/* 						if(!user_id) {*/
/* 							ykp.prompt('请选择负责人');*/
/* 							return;*/
/* 						}*/
/* 						var postdata = {*/
/* 							customers: customer_id.join(','),*/
/* 							user_id: user_id*/
/* 						};*/
/* 						ykp.doAjax({*/
/* 							url: '/api/api_customer/customer_add_clue ',*/
/* 							method: 'post',*/
/* 							data: postdata,*/
/* 							success: function(res) {*/
/* 								ykp.prompt('客户移交成功');*/
/* 								$('#movexs').fadeOut();*/
/* 								getList();*/
/* 							}*/
/* 						});*/
/* 					});*/
/* 				} else {*/
/* 					//显示移出层*/
/* 					$('#move1').fadeIn();*/
/* */
/* 					//保存移出信息*/
/* 					$('#move1 .hold_label').unbind('click').click(function() {*/
/* 						var user_id = $('#move1 .employees').val();*/
/* */
/* 						if(!user_id) {*/
/* 							ykp.prompt('请选择负责人');*/
/* 							return;*/
/* 						}*/
/* 						var postdata = {*/
/* 							customers: customer_id.join(','),*/
/* 							user_id: user_id*/
/* 						};*/
/* */
/* 						ykp.doAjax({*/
/* 							url: '/api/api_customer/customer_add_user ',*/
/* 							method: 'post',*/
/* 							data: postdata,*/
/* 							success: function(res) {*/
/* 								ykp.prompt('客户分配成功');*/
/* 								$('#move1').fadeOut();*/
/* 								getList();*/
/* 							}*/
/* 						});*/
/* 					});*/
/* 				}*/
/* */
/* 				//隐藏移出层*/
/* 				cs.closePop();*/
/* 			});*/
/* 		}*/
/* */
/* 		function del() {*/
/* 			$('.delCt').click(function() {*/
/* */
/* 				var id = $(this).parents('tr').attr('customer-id');*/
/* 				layui.use('layer', function() {*/
/* 					var layer = layui.layer;*/
/* 					layer.confirm('确认删除吗？', function(flag) {*/
/* 						var _this = $(this);*/
/* 						if(flag) {*/
/* 							ykp.doAjax({*/
/* 								url: "/api/api_customer/del",*/
/* 								method: 'post',*/
/* 								data: {*/
/* 									id: id*/
/* 								},*/
/* 								success: function(res) {*/
/* 									_this.parents('tr').remove();*/
/* 									ykp.prompt('删除成功');*/
/* 									layer.closeAll();*/
/* 									getList();*/
/* 								}*/
/* 							})*/
/* 						}*/
/* 					});*/
/* 				})*/
/* */
/* 			})*/
/* 		}*/
/* */
/* 		function plDel() {*/
/* 			$('#batchDel').unbind('click').click(function() {*/
/* 				var num = 0;*/
/* 				var status = '';*/
/* 				var coldata = [];*/
/* 				$('#datalist').find('input[type=checkbox]').each(function(i) {*/
/* 					if($(this).is(':checked')) {*/
/* 						num++;*/
/* 						coldata.push($(this).parents('tr').attr('customer-id'));*/
/* 					}*/
/* 				})*/
/* 				if(num == 0) {*/
/* 					ykp.prompt('请选择再删除');*/
/* 				} else {*/
/* 					//					bootbox.confirm('确认删除？', function(flag) {*/
/* 					//						if(flag) {*/
/* 					//							ykp.doAjax({*/
/* 					//								url: "/api/api_customer/batch_del",*/
/* 					//								method: 'post',*/
/* 					//								data: {*/
/* 					//									ids: coldata.join(',')*/
/* 					//								},*/
/* 					//								success: function(res) {*/
/* 					//									ykp.prompt('删除成功');*/
/* 					//									getList();*/
/* 					//								}*/
/* 					//							})*/
/* 					//						}*/
/* 					//					});*/
/* 					layui.use('layer', function() {*/
/* 						var layer = layui.layer;*/
/* 						layer.confirm('确认删除吗？', function(flag) {*/
/* 							if(flag) {*/
/* 								ykp.doAjax({*/
/* 									url: "/api/api_customer/batch_del",*/
/* 									method: 'post',*/
/* 									data: {*/
/* 										ids: coldata.join(',')*/
/* 									},*/
/* 									success: function(res) {*/
/* 										ykp.prompt('删除成功');*/
/* 										layer.closeAll();*/
/* 										getList();*/
/* 									}*/
/* 								})*/
/* 							}*/
/* 						});*/
/* 					})*/
/* */
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//编辑客户*/
/* 		function editCustomer(data) {*/
/* 			$('.editCt').click(function() {*/
/* 				var index = $(this).parents('tr').index();*/
/* 				var id = $(this).parents('tr').attr('customer-id');*/
/* 				showMark('#template');*/
/* 				getType();*/
/* 				addType();*/
/* 				if($(this).hasClass('infoCt')) {*/
/* 					$('#showBox .title').text('详情');*/
/* 					$('#templateCon .sure_button').remove();*/
/* 					$('#templateBox #range1').show();*/
/* 					$('#templateBox #addTypeBtn').remove();*/
/* 					$('#templateBox #delCusCate').remove();*/
/* 				} else {*/
/* 					$('#showBox .title').text('编辑');*/
/* 					$('#templateCon .title').text('编辑客户');*/
/* 				}*/
/* */
/* 				//成立日期*/
/* 				cs.timeplug();*/
/* 				var _data = data[index];*/
/* 				//				console.log(_data['khm_customer.area']);*/
/* 				getType(_data['khm_customer.type']);*/
/* 				$("#templateCon #city").citySelect({*/
/* 					url: "/resource/adimin/assets/js/src/city.min.js",*/
/* 					prov: _data['khm_customer.area'] ? _data['khm_customer.area'].split(',')[0] : '广东', //省份 */
/* 					city: _data['khm_customer.area'] ? _data['khm_customer.area'].split(',')[1] : '深圳', //月份*/
/*                     dist:_data['khm_customer.area'] ? _data['khm_customer.area'].split(',')[2] : '' //当子集无数据时，隐藏select*/
/* 				});*/
/* 				if($(this).hasClass('infoCt')) {*/
/* 					setTimeout(function() {*/
/* 						$('#templateBox').find('input,select,textarea').prop('disabled', true);*/
/* 					}, 200)*/
/* 				}*/
/* 				var field = '';*/
/* 				$('#templateBox ').find('[addfield]').each(function(i, e) {*/
/* 					field = 'khm_customer.' + $(this).attr('addfield');*/
/* 					$(this).attr('addfield') == 'stablish_time' ? $(this).val(cs.getNowTime(_data[field])) : $(this).val(_data[field]);*/
/* 					if($(this).attr('addfield') == 'source') {*/
/* 						if($(this).val() == '转介绍') {*/
/* 							$(this).next().show().next().show();*/
/* 							var html = [];*/
/* 							ykp.doAjax({*/
/* 								url: "/api/api_contact_book/grid",*/
/* 								method: "post",*/
/* 								data: {*/
/* 									limit: 999*/
/* 								},*/
/* 								success: function(res) {*/
/* 									var data = res.data.items;*/
/* */
/* 									html.push('<option  value="">请选择</option>');*/
/* 									for(var i in data) {*/
/* 										html.push('<option  value="' + data[i]['khm_contact_book.username'] + '">' + data[i]['khm_contact_book.username'] + '</option>');*/
/* 									}*/
/* 									$('#templateBox #introducer').html(html.join(','));*/
/* 									//月份*/
/* 									$('#templateCon #introducer').select2({*/
/* 										allowClear: true*/
/* 									});*/
/* 									$('#templateCon #introducer').val(_data['khm_customer.introduce']).trigger('change');*/
/* 								}*/
/* 							})*/
/* 						}*/
/* 					}*/
/* 				})*/
/* */
/* 				$('#templateCon #delCusCate').click(function() {*/
/* 					var id = $('#templateCon').find('select[addfield=type]').val();*/
/* 					if(id) {*/
/* 						layui.use('layer', function() {*/
/* 							var layer = layui.layer;*/
/* 							layer.confirm('真的删除行么', function(index) {*/
/* 								ykp.doAjax({*/
/* 									url: "/api/api_customer_type/del",*/
/* 									method: "post",*/
/* 									data: {*/
/* 										id: id*/
/* 									},*/
/* 									success: function(res) {*/
/* 										layer.closeAll();*/
/* 										getType();*/
/* 									}*/
/* 								})*/
/* 								layer.closeAll();*/
/* */
/* 							});*/
/* */
/* 						})*/
/* 					} else {*/
/* 						ykp.prompt('请选中公海类型删除');*/
/* 						return false;*/
/* 					}*/
/* */
/* 				})*/
/* 				showIntroducer();*/
/* */
/* 				$('#templateCon .add').click(function() {*/
/* 					var prov = $('#templateBox .prov').val() || '';*/
/* 					var city = $('#templateBox .city').val() || '';*/
/* 					var dist = $('#templateBox .dist').val() || '';*/
/* 					var area = prov + "," + city*/
/* 					if(dist != '') {*/
/* 						area += ("," + dist);*/
/* 					}*/
/* */
/*                     console.log(area);*/
/*                     // if(!cs.popValidate()) {*/
/* 					// 	return;*/
/* 					// }*/
/* */
/* 					var postdata = {*/
/* 						id: id*/
/* 					};*/
/* */
/* 					$('#templateBox ').find('[addfield]').not(':hidden').each(function(i, e) {*/
/* 						if($(this).attr('addfield') == 'stablish_time') {*/
/* 							postdata[$(this).attr('addfield')] = new Date($(this).val()) / 1000;*/
/* 						} else {*/
/* 							postdata[$(this).attr('addfield')] = $(this).val() ? $(this).val() : '';*/
/* 						}*/
/* */
/* 					})*/
/* */
/* 					postdata['area'] = area;*/
/* 					console.log(postdata);*/
/* */
/* 					ykp.doAjax({*/
/* 						url: '/api/api_customer/edit',*/
/* 						method: 'post',*/
/* 						data: postdata,*/
/* 						success: function() {*/
/* 							ykp.prompt('编辑成功');*/
/* 							cs.close();*/
/* 							getList();*/
/* 						}*/
/* 					});*/
/* */
/* 				});*/
/* 			});*/
/* 		}*/
/* */
/* 		//选择弹出层客户来源中转介绍时，显示介绍人，*/
/* 		//选择其他时，隐藏介绍人*/
/* 		function showIntroducer() {*/
/* 			var html = [];*/
/* 			$('#templateCon .source').change(function() {*/
/* 				if($(this).find('option:selected').index() == 1) {*/
/* */
/* 					$('#templateCon .introducer').show();*/
/* 					if(html.length == 0) {*/
/* 						ykp.doAjax({*/
/* 							url: "/api/api_contact_book/grid",*/
/* 							method: "post",*/
/* 							data: {*/
/* 								limit: 999*/
/* 							},*/
/* 							success: function(res) {*/
/* 								var data = res.data.items;*/
/* */
/* 								html.push('<option  value="">请选择</option>');*/
/* 								for(var i in data) {*/
/* 									html.push('<option  value="' + data[i]['khm_contact_book.username'] + '">' + data[i]['khm_contact_book.username'] + '</option>');*/
/* 								}*/
/* 								$('#templateBox #introducer').html(html.join(','));*/
/* 								//月份*/
/* 								$('#templateCon #introducer').select2({*/
/* 									allowClear: true*/
/* 								});*/
/* 							}*/
/* 						})*/
/* 					}*/
/* 				} else {*/
/* 					$('#templateCon .introducer').hide();*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//添加客户*/
/* 		$('#addItem').click(function() {*/
/* 			showMark('#template');*/
/* 			$('#showBox .title').text('添加客户');*/
/* 			addType();*/
/* 			getType();*/
/* 			$("#templateCon #city").citySelect({*/
/* 				url: "/resource/adimin/assets/js/src/city.min.js",*/
/* 				prov: '广东', //省份 */
/* 				city: '深圳',*/
/* 				nodata: "none" //当子集无数据时，隐藏select  */
/* 			});*/
/* 			$('#templateCon #delCusCate').click(function() {*/
/* 				var id = $('#templateCon').find('select[addfield=type]').val();*/
/* 				if(id) {*/
/* 					layui.use('layer', function() {*/
/* 						var layer = layui.layer;*/
/* 						layer.confirm('真的删除行么', function(index) {*/
/* 							ykp.doAjax({*/
/* 								url: "/api/api_customer_type/del",*/
/* 								method: "post",*/
/* 								data: {*/
/* 									id: id*/
/* 								},*/
/* 								success: function(res) {*/
/* 									layer.close(index);*/
/* 									getType();*/
/* 								}*/
/* 							})*/
/* */
/* 						});*/
/* 					})*/
/* 				} else {*/
/* 					ykp.prompt('请选中公海类型删除');*/
/* 					return false;*/
/* 				}*/
/* */
/* 			})*/
/* 			showIntroducer();*/
/* */
/* 			//成立日期*/
/* 			cs.timeplug();*/
/* */
/* 			$('#templateCon .add').click(function() {*/
/* 				var prov = $('#templateBox .prov').val() || '';*/
/* 				var city = $('#templateBox .city').val() || '';*/
/* 				var dist = $('#templateBox .dist').val() || '';*/
/* 				var area = prov + "," + city;*/
/* 				if(dist != '') {*/
/* 					area += ("," + dist);*/
/* 				}*/
/* 				//				if($('#templateCon').find('[addfield="phone"]').val().trim().length != 11) {*/
/* 				//					ykp.prompt('手机号码错误');*/
/* 				//					$('#templateCon').find('[addfield="phone"]').val('');*/
/* 				//					return;*/
/* 				//				}*/
/* 				if(!cs.popValidate()) {*/
/* 					return;*/
/* 				}*/
/* */
/* 				var inputOrSelectOrTextarea = $('#templateCon').find('input,select,textarea');*/
/* 				var time = inputOrSelectOrTextarea.eq(4).val();*/
/* 				var data = {*/
/* 					name: $('#templateCon').find('[addfield="name"]').val(),*/
/* 					corporation: $('#templateCon').find('[addfield="corporation"]').val(),*/
/* 					capital: $('#templateCon').find('[addfield="capital"]').val(),*/
/* 					stablish_time: cs.getTime(time) || "",*/
/* 					address: $('#templateCon').find('[addfield="address"]').val(),*/
/* 					tel: $('#templateCon').find('[addfield="tel"]').val(),*/
/* 					range: $('#templateCon').find('[addfield="range"]').val(),*/
/* 					url: $('#templateCon').find('[addfield="url"]').val(),*/
/* 					phone: $('#templateCon').find('[addfield="phone"]').val(),*/
/* 					fax: $('#templateCon').find('[addfield="fax"]').val(),*/
/* 					email: $('#templateCon').find('[addfield="email"]').val(),*/
/* 					source: $('#templateCon').find('[addfield="source"]').val(),*/
/* 					introduce: $('#templateCon').find('[addfield="source"]').selectedIndex == 0 ? '' : $('#templateCon').find('[addfield="introduce"]').val(),*/
/* 					industry: $('#templateCon').find('[addfield="industry"]').val(),*/
/* 					scale: $('#templateCon').find('[addfield="scale"]').val(),*/
/* 					contacts: $('#templateCon').find('[addfield="contacts"]').val(),*/
/* 					type: $('#templateCon').find('[addfield="type"]').val(),*/
/* 					remark: $('#templateCon').find('[addfield="remark"]').val(),*/
/* 					social_credit_code: $('#templateCon').find('[addfield="social_credit_code"]').val(),*/
/* 					area: area,*/
/* 					tax_type: $('#templateCon').find('[addfield="tax_type"]').val(),*/
/* 				}*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_customer/add',*/
/* 					method: 'post',*/
/* 					data: data,*/
/* 					success: function() {*/
/* 						cs.close();*/
/* 						getList();*/
/* 					}*/
/* 				});*/
/* 			});*/
/* 		});*/
/* */
/* 		//自定义列表*/
/* 		cs.custorm_check('#dynamic-table', '#datalist', true);*/
/* 	});*/
/* 	//全选函数*/
/* 	function checkAll(status) {*/
/* 		$("tbody input[name='check']").each(function(i, n) {*/
/* 			n.checked = status;*/
/* 		});*/
/* 	}*/
/* </script>*/
