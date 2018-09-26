<?php

/* admin/left.html */
class __TwigTemplate_20e9b919fdb779fe7d143b236343f4788cd179071acbbed02e9376e47b540a37 extends Twig_Template
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
        echo "<div id=\"sidebar\" class=\"sidebar responsive ace-save-state\" data-sidebar=\"true\" style=\"float: left;\">

\t<!--<div class=\"logo\" style=\"padding-top: 10px; position: fixed !important;left: 10px; top: 0;\">
\t\t<img src=\"/resource/adimin/images/logo.png\" style=\" width: 350px;\" />
\t</div>-->

\t<div class=\"miniNavCon\" style=\"display: none;\">
\t\t<div class=\"miniNav left\" style=\"display: none;\">
\t\t\t<ul id=\"miniNavList\" style=\"display: none;\">
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-home\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/home\" authority=\"1\" class=\"authority\">首页</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-magnet\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>记账管理</li>
\t\t\t\t\t\t<li data-url=\"/admin/customerService\" authority=\"2\" class=\"authority\">记账客户</li>
\t\t\t\t\t\t<li data-url=\"/admin/periodOfservice\" authority=\"3\" class=\"authority\">服务期</li>
\t\t\t\t\t\t<li data-url=\"/admin/getList\" authority=\"4\" class=\"authority\">收单</li>
\t\t\t\t\t\t<li data-url=\"/admin/entire\" authority=\"5\" class=\"authority\">整单</li>
\t\t\t\t\t\t<li data-url=\"/admin/account\" authority=\"6\" class=\"authority\">记账</li>
\t\t\t\t\t\t<li data-url=\"/admin/customer\" authority=\"7\" class=\"authority\">客服</li>
\t\t\t\t\t\t<li data-url=\"/admin/tax\" authority=\"8\" class=\"authority\">报税</li>
\t\t\t\t\t\t<li data-url=\"/admin/single\" authority=\"9\" class=\"authority\">送单</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-tv\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>销售管理</li>
\t\t\t\t\t\t<li data-url=\"/admin/partner\" authority=\"10\" class=\"authority\">客户</li>
\t\t\t\t\t\t<li data-url=\"/admin/alltask\" authority=\"11\" class=\"authority\">任务</li>
\t\t\t\t\t\t<li data-url=\"/admin/seaOfclients\" authority=\"12\" class=\"authority\">公海</li>
\t\t\t\t\t\t<li data-url=\"/admin/accountSales\" authority=\"13\" class=\"authority\">线索</li>
\t\t\t\t\t\t<li data-url=\"/admin/contactRecord\" authority=\"14\" class=\"authority\">联系记录</li>
\t\t\t\t\t\t<li data-url=\"/admin/contacts\" authority=\"15\" class=\"authority\">联系人</li>
\t\t\t\t\t\t<li data-url=\"/admin/journal\" authority=\"16\" class=\"authority\">日志</li>
\t\t\t\t\t\t<li data-url=\"/admin/schedule\" authority=\"17\" class=\"authority\">日程</li>
\t\t\t\t\t\t<li data-url=\"/admin/opportunity\" authority=\"18\" class=\"authority\">商机</li>
\t\t\t\t\t\t<li data-url=\"/admin/visit\" authority=\"19\" class=\"authority\">拜访</li>
\t\t\t\t\t\t<li data-url=\"/admin/writeoff\" authority=\"20\" class=\"authority\">介绍</li>
\t\t\t\t\t\t<!--<li data-url=\"/admin/pf_audit\">查账</li>-->
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-cart-plus\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>订单管理</li>
\t\t\t\t\t\t<li data-url=\"/admin/contracts\" authority=\"21\" class=\"authority\">订单</li>
\t\t\t\t\t\t<li data-url=\"/admin/contractAuthorization\" authority=\"22\" class=\"authority\">派单</li>
\t\t\t\t\t\t<li data-url=\"/admin/contractBook\" authority=\"23\" class=\"authority\">合同</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-cube\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>仓库管理</li>
\t\t\t\t\t\t<li data-url=\"/admin/depotStorage\" authority=\"24\" class=\"authority\">入库</li>
\t\t\t\t\t\t<li data-url=\"/admin/depotOutGo\" authority=\"25\" class=\"authority\">出库</li>
\t\t\t\t\t\t<li data-url=\"/admin/depotChargeback\" authority=\"26\" class=\"authority\">退单</li>
\t\t\t\t\t\t<li data-url=\"/admin/depotCheck\" authority=\"27\" class=\"authority\">盘点</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-cny\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>财务管理</li>
\t\t\t\t\t\t<li data-url=\"/admin/lackOfrecord\" authority=\"28\" class=\"authority\">欠款</li>
\t\t\t\t\t\t<li data-url=\"/admin/collectionRecord\" authority=\"29\" class=\"authority\">收款</li>
\t\t\t\t\t\t<li data-url=\"/admin/employeePerformance\" authority=\"30\" class=\"authority\">绩效</li>
\t\t\t\t\t\t<li data-url=\"/admin/wages\" authority=\"31\" class=\"authority\">工资</li>
\t\t\t\t\t\t<li data-url=\"/admin/expenditure\" authority=\"32\" class=\"authority\">支出</li>
\t\t\t\t\t\t<li data-url=\"/admin/financeBorrow\" authority=\"33\" class=\"authority\">借贷</li>
\t\t\t\t\t\t<li data-url=\"/admin/pf_billing\" authority=\"34\" class=\"authority\">开票</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-book\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/knowledge\" authority=\"35\" class=\"authority\">知识库</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul id=\"miniNavList\" style=\"display: none;\">
\t\t\t\t<!-- <li class=\"miniLi pow_module sunmenu\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-group\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/auditGetList\" authority=\"36\" class=\"authority\">收单审批</li>
\t\t\t\t\t</ul>
\t\t\t\t</li> -->
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-magnet\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/auditEntireSingle\" authority=\"37\" class=\"authority\">整单审批</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-calculator\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/tally\" authority=\"38\" class=\"authority\">记账审批</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-headphones\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/auditCustomerService\" authority=\"39\" class=\"authority\">客服审批</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-tv\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/auditTax\" authority=\"40\" class=\"authority\">报税审批</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<!-- <li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-cart-plus\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/auditing_single\" authority=\"41\" class=\"authority\">送单审批</li>
\t\t\t\t\t</ul>
\t\t\t\t</li> -->
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-cubes\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/auditPosition\" authority=\"42\" class=\"authority\">仓位审批</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<!-- <li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-bookmark\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>记账审批</li>
\t\t\t\t\t\t<li data-url=\"/admin/auditGetList\">收单审批</li>
\t\t\t\t\t\t<li data-url=\"/admin/auditEntireSingle\">整单审批</li>
\t\t\t\t\t\t<li data-url=\"/admin/tally\">记账审批</li>
\t\t\t\t\t\t<li data-url=\"/admin/auditCustomerService\">客服审批</li>
\t\t\t\t\t\t<li data-url=\"/admin/auditTax\">报税审批</li>
\t\t\t\t\t\t<li data-url=\"/admin/auditing_single\">送单审批</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-university\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>仓库审批</li>
\t\t\t\t\t\t<li data-url=\"/admin/auditPosition\">仓位审批</li>
\t\t\t\t\t</ul>
\t\t\t\t</li> -->
\t\t\t</ul>
\t\t\t<ul id=\"miniNavList\" style=\"display: none;\">
\t\t\t\t<li class=\"miniLi pow_module sunmenu\">
\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-life-buoy\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>记账报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/coustomer\" authority=\"43\" class=\"authority\">客户报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/acquir_table\" authority=\"44\" class=\"authority\">收单报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/entire_table\" authority=\"45\" class=\"authority\">整单报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/accound_table\" authority=\"46\" class=\"authority\">记账报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/customerTable\" authority=\"47\" class=\"authority\">客服报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/tax_table\" authority=\"48\" class=\"authority\">报税报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/single_table\" authority=\"49\" class=\"authority\">送单报表</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"miniLi pow_module sunmenu\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-tv\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>销售报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/task_table\" authority=\"50\" class=\"authority\">任务报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/high_seas_table\" authority=\"51\" class=\"authority\">公海报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/clue_table\" authority=\"52\" class=\"authority\">线索报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/linkman_table\" authority=\"53\" class=\"authority\">联系人报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/linkman_record_table\" authority=\"54\" class=\"authority\">联系记录报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/journal_table\" authority=\"55\" class=\"authority\">日志报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/schedule_table\" authority=\"56\" class=\"authority\">日程报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/business_opportunity_table\" authority=\"57\" class=\"authority\">商机报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/visit_table\" authority=\"58\" class=\"authority\">拜访报表</li>
\t\t\t\t\t\t<!-- <li data-url=\"/admin/audit_table\">查账报表</li> -->
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"miniLi pow_module sunmenu\">
\t\t\t\t\t<a href=\"#\"><i class=\"fa facny\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>财务报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/debt_table\" authority=\"60\" class=\"authority\">欠款报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/gathering_table\" authority=\"61\" class=\"authority\">收款报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/expenditurereport\" authority=\"62\" class=\"authority\">支出报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/performance_table\" authority=\"63\" class=\"authority\">绩效报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/wages_table\" authority=\"64\" class=\"authority\">工资报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/toloan_table\" authority=\"65\" class=\"authority\">借贷报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/surplus_table\" authority=\"66\" class=\"authority\">企业盈余报表</li>
\t\t\t\t\t\t<li data-url=\"/admin/billingreport\" authority=\"67\" class=\"authority\">开票报表</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"miniLi pow_module sunmenu\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-cart-plus\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/contract_table\" authority=\"68\" class=\"authority\">合同报表</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"miniLi pow_module sunmenu\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-cube\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/warehoursereport\" authority=\"69\" class=\"authority\">仓库报表</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul id=\"miniNavList\" style=\"display: none;\">
\t\t\t\t<li class=\"miniLi pow_module sunmenu\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-sitemap\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/staff\" authority=\"70\" class=\"authority\">部门员工</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-key\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/jurisdiction\" authority=\"71\" class=\"authority\">角色权限</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-cube\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/storehouse\" authority=\"72\" class=\"authority\">仓库管理</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa  fa-cubes\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/warehouse\" authority=\"73\" class=\"authority\">仓位管理</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<!--<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-google\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/administration\" authority=\"74\" class=\"authority\">行政区域</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>-->
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-tags\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/label\" authority=\"75\" class=\"authority\">标签管理</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-credit-card\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/accountManage\" authority=\"76\" class=\"authority\">账户管理</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-diamond\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/products\" authority=\"77\" class=\"authority\">产品管理</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-link\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/procedure\" authority=\"78\" class=\"authority\">流程管理</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-random\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/manageOfapproval\" authority=\"79\" class=\"authority\">审批管理</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<!-- <li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"ace-icon glyphicon glyphicon-duplicate\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/manageOflots\">批量管理</li>
\t\t\t\t\t</ul>
\t\t\t\t</li> -->
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-hdd-o \"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/backups\" authority=\"80\" class=\"authority\">备份管理</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-file-archive-o\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/companyInfo\" authority=\"81\" class=\"authority\">企业管理</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-envelope\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/get_msg\" authority=\"82\" class=\"authority\">短信管理</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-dollar\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/payManage\" authority=\"83\" class=\"authority\">付费管理</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<!-- <li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/personal_profile\">个人信息</li>
\t\t\t\t\t</ul>
\t\t\t\t</li> -->
\t\t\t\t<li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-user\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/personal_profile\" authority=\"84\" class=\"authority\">个人资料</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<!-- <li class=\"miniLi pow_module\">
\t\t\t\t\t<a href=\"#\"><i class=\"menu-icon fa fa-user\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-url=\"/admin/singleCustomer\">客户单页</li>
\t\t\t\t\t</ul>
\t\t\t\t</li> -->
\t\t</ul>
\t\t</div>
\t</div>
\t <!--margin-top: 68px;-->
\t<div class=\"sidebarCon\" style=\" height: 100%; overflow: hidden;\">
\t\t<!-- /.sidebar-shortcuts -->
\t\t<div id=\"navBox\" class=\"left\" style=\"width: 190px; \">
\t\t\t<ul class=\"nav nav-list\" id=\"nav-list\" style=\"display: block;\">
\t\t\t\t<li class=\"active menuA authority\" data-url=\"/admin/home\" authority=\"1\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-home\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 首页 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t\t<li class=\"menuB pow_module\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-magnet\"></i>
\t\t\t\t\t\t<span class=\"menu-text\">
                        记账管理
                    </span>

\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>

\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t<li data-url=\"/admin/customerService\" authority=\"2\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t记账客户
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/periodOfservice\" authority=\"3\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t服务期
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/getList\" authority=\"4\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t收单
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/entire\" authority=\"5\" class=\"authority\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<!--<i class=\"menu-icon fa fa-caret-right\"></i>-->
\t\t\t\t\t\t\t\t整单
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/account\" authority=\"6\" class=\"authority\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<!--<i class=\"menu-icon fa fa-caret-right\"></i>-->
\t\t\t\t\t\t\t\t记账
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/customer\" authority=\"7\" class=\"authority\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<!--<i class=\"menu-icon fa fa-caret-right\"></i>-->
\t\t\t\t\t\t\t\t客服
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li data-url=\"/admin/tax\" authority=\"8\" class=\"authority\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<!--<i class=\"menu-icon fa fa-caret-right\"></i>-->
\t\t\t\t\t\t\t\t报税
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li data-url=\"/admin/single\" authority=\"9\" class=\"authority\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<!--<i class=\"menu-icon fa fa-caret-right\"></i>-->
\t\t\t\t\t\t\t\t送单
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"menuB pow_module\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-tv\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 销售管理 </span>
\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t</a>
\t\t\t\t\t<b class=\"arrow\"></b>

\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t<li data-url=\"/admin/partner\" authority=\"10\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t<!--<i class=\"menu-icon fa fa-caret-right\"></i>-->
\t\t\t\t\t\t\t\t客户
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/alltask\" authority=\"11\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t<!--<i class=\"menu-icon fa fa-caret-right\"></i>-->
\t\t\t\t\t\t\t\t任务
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/seaOfclients\" authority=\"12\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t公海
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/accountSales\" authority=\"13\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t线索
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/contactRecord\" authority=\"14\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t联系记录
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/contacts\" authority=\"15\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t联系人
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/journal\" authority=\"16\" class=\"authority\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t日志
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/schedule\" authority=\"17\" class=\"authority\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t日程
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/opportunity\" authority=\"18\" class=\"authority\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t商机
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/visit\" authority=\"19\" class=\"authority\">
\t\t\t\t\t\t\t<a href=\"/admin/visit\">
\t\t\t\t\t\t\t\t拜访
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/writeoff\" authority=\"20\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t介绍
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!--<li data-url=\"/admin/pf_audit\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t查账
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>-->
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t</li>
            <li class=\"menuB pow_module\">
                <a href=\"#\" class=\"dropdown-toggle\">
                    <i class=\"menu-icon fa fa-cart-plus\"></i>
                    <span class=\"menu-text\"> 订单管理 </span>
\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t</a>
\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t<li data-url=\"/admin/contracts\" authority=\"21\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t订单
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/contractAuthorization\" authority=\"22\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t派单
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/contractBook\" authority=\"23\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t合同
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"menuB pow_module\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-cube\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 仓库管理 </span>

\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>

\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t<li data-url=\"/admin/depotStorage\" authority=\"24\" class=\"authority\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t入库
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/depotOutGo\" authority=\"25\" class=\"authority\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t出库
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/depotChargeback\" authority=\"26\" class=\"authority\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t退单
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/depotCheck\" authority=\"27\" class=\"authority\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t盘点
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"menuB pow_module\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-cny\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 财务管理 </span>

\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t</a>
\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t<li data-url=\"/admin/lackOfrecord\" authority=\"28\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t欠款
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/collectionRecord\" authority=\"29\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t收款
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/employeePerformance\" authority=\"30\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t绩效
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/wages\" authority=\"31\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t工资
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/expenditure\" authority=\"32\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t支出
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/financeBorrow\" authority=\"33\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t借贷
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/pf_billing\" authority=\"34\" class=\"authority\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t开票
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li data-url=\"/admin/knowledge\" authority=\"35\" class=\"authority\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-book\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 知识库 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<!-- /.nav-list -->

\t\t\t<ul class=\"nav nav-list\" id=\"nav-list\" style=\"display: none;\">
\t\t\t\t<!-- <li data-url=\"/admin/auditGetList\" authority=\"36\" class=\"authority\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-bookmark\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 收单审批 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li> -->
\t\t\t\t<li data-url=\"/admin/auditEntireSingle\" authority=\"37\" class=\"authority\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-magnet\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 整单审批 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t\t<li data-url=\"/admin/tally\" authority=\"38\" class=\"authority\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-calculator\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 记账审批 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t\t<li data-url=\"/admin/auditCustomerService\" authority=\"39\" class=\"authority\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-headphones\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 客服审批 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t\t<li data-url=\"/admin/auditTax\" authority=\"40\" class=\"authority\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<i class=\" menu-icon fa fa-tv\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 报税审批 </span>
\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t\t<!-- <li data-url=\"/admin/auditing_single\" authority=\"41\" class=\"authority\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<i class=\" menu-icon fa fa-cart-plus\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 送单审批 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li> -->
\t\t\t\t<li data-url=\"/admin/auditPosition\" authority=\"42\" class=\"authority\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-cubes\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 仓位审批 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>



\t\t\t\t<!-- <li class=\"menuB\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-bookmark\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 记账审批 </span>

\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t</a>
\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t<li data-url=\"/admin/auditGetList\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t收单审批
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/auditEntireSingle\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t整单审批
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/tally\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t记账审批
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/auditCustomerService\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t客服审批
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/auditTax\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t报税审批
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/auditing_single\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t送单审批
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"menuB\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-university\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 仓库审批 </span>

\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t</a>
\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t<li data-url=\"/admin/auditPosition\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t仓位审批
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li> -->
\t\t\t</ul>
\t\t\t<ul class=\"nav nav-list\" id=\"nav-list\" style=\"display: none;\">
\t\t\t\t<li class=\"menuB pow_module\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-life-buoy\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 记账报表 </span>

\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t</a>
\t\t\t\t\t<!--<b class=\"arrow\"></b>-->
\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t<li data-url=\"/admin/coustomer\" authority=\"43\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t客户报表
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/acquir_table\" authority=\"44\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t收单报表
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/entire_table\" authority=\"45\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t整单报表
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/accound_table\" authority=\"46\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t记账报表
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/customerTable\" authority=\"47\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t客服报表
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/tax_table\" authority=\"48\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t报税报表
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/single_table\" authority=\"49\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t送单报表
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"menuB pow_module\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-tv\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 销售报表 </span>

\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t</a>
\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li data-url=\"/admin/task_table\" authority=\"50\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t任务报表
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/high_seas_table\" authority=\"51\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t公海报表
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/clue_table\" authority=\"52\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t线索报表
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/linkman_table\" authority=\"53\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t联系人报表
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/linkman_record_table\" authority=\"54\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t联系记录报表
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/journal_table\" authority=\"55\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t日志报表
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/schedule_table\" authority=\"56\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t日程报表
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/business_opportunity_table\" authority=\"57\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t商机报表
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/visit_table\" authority=\"58\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t拜访报表
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- <li data-url=\"/admin/audit_table\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t查账报表
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li> -->
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"menuB pow_module\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-cny\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 财务报表 </span>

\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t</a>
\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t<li data-url=\"/admin/debt_table\" authority=\"60\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t欠款报表
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/gathering_table\" authority=\"61\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t收款报表
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/expenditurereport\" authority=\"62\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t支出报表
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/performance_table\" authority=\"63\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t绩效报表
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/wages_table\" authority=\"64\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t工资报表
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/toloan_table\" authority=\"65\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t借贷报表
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/surplus_table\" authority=\"66\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t企业盈余报表
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li data-url=\"/admin/billingreport\" authority=\"67\" class=\"authority\">
\t\t\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t\t\t开票报表
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li data-url=\"/admin/contract_table\" authority=\"68\" class=\"authority\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-cart-plus\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 合同报表 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t\t<li data-url=\"/admin/warehoursereport\" authority=\"69\" class=\"authority\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-cube\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 仓库报表 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"nav nav-list\" id=\"nav-list\" style=\"display: none;\">

\t\t\t\t<li data-url=\"/admin/staff\" authority=\"70\" class=\"authority\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-sitemap\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 部门员工 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t\t<li data-url=\"/admin/jurisdiction\" authority=\"71\" class=\"authority\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-key\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 角色权限 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t\t<li data-url=\"/admin/storehouse\" authority=\"72\" class=\"authority\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-cube\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 仓库管理 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t\t<li data-url=\"/admin/warehouse\" authority=\"73\" class=\"authority\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<i class=\"menu-icon fa  fa-cubes\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 仓位管理 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t\t<!--<li data-url=\"/admin/administration\" authority=\"74\" class=\"authority\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-google\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 行政区域 </span>
\t\t\t\t\t</a>
\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>-->
\t\t\t\t<li data-url=\"/admin/label\" authority=\"75\" class=\"authority\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-tags\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 标签管理 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t\t<li data-url=\"/admin/accountManage\" authority=\"76\" class=\"authority\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-credit-card\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 账户管理 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t\t<li data-url=\"/admin/products\" authority=\"77\" class=\"authority\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-diamond\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 产品管理 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t\t<li data-url=\"/admin/procedure\" authority=\"78\" class=\"authority\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-link\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 流程管理 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t\t<li data-url=\"/admin/manageOfapproval\" authority=\"79\" class=\"authority\">
\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-random\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 审批管理 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t\t<!-- <li data-url=\"/admin/manageOflots\">
\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-tachometer\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 批量管理 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li> -->
\t\t\t\t<li data-url=\"/admin/backups\" authority=\"80\" class=\"authority\">
\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-hdd-o \"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 备份管理 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t\t<li data-url=\"/admin/companyInfo\" authority=\"81\" class=\"authority\">
\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-gg\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 企业信息 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t\t<li data-url=\"/admin/get_msg\" authority=\"82\" class=\"authority\">
\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-envelope\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 短信管理 </span>
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t\t<li data-url=\"/admin/payManage\" authority=\"83\" class=\"authority\">
\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-dollar\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 付费管理 </span>
\t\t\t\t\t</a>
\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t<li data-url=\"/admin/personal_profile\" authority=\"84\" class=\"authority\">
\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-user\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 个人资料 </span>
\t\t\t\t\t</a>
\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t\t<!-- <li data-url=\"/admin/singleCustomer\">
\t\t\t\t\t<a style=\"cursor: pointer\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-user\"></i>
\t\t\t\t\t\t<span class=\"menu-text\"> 客户单页 </span>
\t\t\t\t\t</a>
\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li> -->

\t\t</ul>
\t\t</div>

\t\t<div id=\"nav_mini\">

\t\t</div>
\t\t<!-- #section:basics/sidebar.layout.minimize -->
\t\t<div class=\"sidebar-toggle sidebar-collapse\" id=\"sidebar-collapse\" style=\"display: none\">
\t\t\t<i id=\"sidebar-toggle-icon\" class=\"ace-icon fa fa-angle-double-left ace-save-state\" data-icon1=\"ace-icon fa fa-angle-double-left\" data-icon2=\"ace-icon fa fa-angle-double-right\"></i>
\t\t</div>
\t\t<!-- /section:basics/sidebar.layout.minimize -->
\t</div>
\t
\t
</div>
<div id=\"goMinibox\" style=\"display:none;\" >
\t\t<span class=\"span_line\"></span>
\t\t<div class=\"goMini\" style=\"color: #eee;line-height: 18px;text-align: center;left: 0;bottom:0;right: 0;background-color: #2A3F54;\">
\t\t\t<i class=\"bar_icon fa fa-angle-double-left\"></i>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "admin/left.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <div id="sidebar" class="sidebar responsive ace-save-state" data-sidebar="true" style="float: left;">*/
/* */
/* 	<!--<div class="logo" style="padding-top: 10px; position: fixed !important;left: 10px; top: 0;">*/
/* 		<img src="/resource/adimin/images/logo.png" style=" width: 350px;" />*/
/* 	</div>-->*/
/* */
/* 	<div class="miniNavCon" style="display: none;">*/
/* 		<div class="miniNav left" style="display: none;">*/
/* 			<ul id="miniNavList" style="display: none;">*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-home"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/home" authority="1" class="authority">首页</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 					*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-magnet"></i></a>*/
/* 					<ul>*/
/* 						<li>记账管理</li>*/
/* 						<li data-url="/admin/customerService" authority="2" class="authority">记账客户</li>*/
/* 						<li data-url="/admin/periodOfservice" authority="3" class="authority">服务期</li>*/
/* 						<li data-url="/admin/getList" authority="4" class="authority">收单</li>*/
/* 						<li data-url="/admin/entire" authority="5" class="authority">整单</li>*/
/* 						<li data-url="/admin/account" authority="6" class="authority">记账</li>*/
/* 						<li data-url="/admin/customer" authority="7" class="authority">客服</li>*/
/* 						<li data-url="/admin/tax" authority="8" class="authority">报税</li>*/
/* 						<li data-url="/admin/single" authority="9" class="authority">送单</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 					*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-tv"></i></a>*/
/* 					<ul>*/
/* 						<li>销售管理</li>*/
/* 						<li data-url="/admin/partner" authority="10" class="authority">客户</li>*/
/* 						<li data-url="/admin/alltask" authority="11" class="authority">任务</li>*/
/* 						<li data-url="/admin/seaOfclients" authority="12" class="authority">公海</li>*/
/* 						<li data-url="/admin/accountSales" authority="13" class="authority">线索</li>*/
/* 						<li data-url="/admin/contactRecord" authority="14" class="authority">联系记录</li>*/
/* 						<li data-url="/admin/contacts" authority="15" class="authority">联系人</li>*/
/* 						<li data-url="/admin/journal" authority="16" class="authority">日志</li>*/
/* 						<li data-url="/admin/schedule" authority="17" class="authority">日程</li>*/
/* 						<li data-url="/admin/opportunity" authority="18" class="authority">商机</li>*/
/* 						<li data-url="/admin/visit" authority="19" class="authority">拜访</li>*/
/* 						<li data-url="/admin/writeoff" authority="20" class="authority">介绍</li>*/
/* 						<!--<li data-url="/admin/pf_audit">查账</li>-->*/
/* 						*/
/* 					</ul>*/
/* 				</li>*/
/* */
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-cart-plus"></i></a>*/
/* 					<ul>*/
/* 						<li>订单管理</li>*/
/* 						<li data-url="/admin/contracts" authority="21" class="authority">订单</li>*/
/* 						<li data-url="/admin/contractAuthorization" authority="22" class="authority">派单</li>*/
/* 						<li data-url="/admin/contractBook" authority="23" class="authority">合同</li>*/
/* 					</ul>*/
/* 				</li>*/
/* */
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-cube"></i></a>*/
/* 					<ul>*/
/* 						<li>仓库管理</li>*/
/* 						<li data-url="/admin/depotStorage" authority="24" class="authority">入库</li>*/
/* 						<li data-url="/admin/depotOutGo" authority="25" class="authority">出库</li>*/
/* 						<li data-url="/admin/depotChargeback" authority="26" class="authority">退单</li>*/
/* 						<li data-url="/admin/depotCheck" authority="27" class="authority">盘点</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 										*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-cny"></i></a>*/
/* 					<ul>*/
/* 						<li>财务管理</li>*/
/* 						<li data-url="/admin/lackOfrecord" authority="28" class="authority">欠款</li>*/
/* 						<li data-url="/admin/collectionRecord" authority="29" class="authority">收款</li>*/
/* 						<li data-url="/admin/employeePerformance" authority="30" class="authority">绩效</li>*/
/* 						<li data-url="/admin/wages" authority="31" class="authority">工资</li>*/
/* 						<li data-url="/admin/expenditure" authority="32" class="authority">支出</li>*/
/* 						<li data-url="/admin/financeBorrow" authority="33" class="authority">借贷</li>*/
/* 						<li data-url="/admin/pf_billing" authority="34" class="authority">开票</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-book"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/knowledge" authority="35" class="authority">知识库</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 			</ul>*/
/* 			<ul id="miniNavList" style="display: none;">*/
/* 				<!-- <li class="miniLi pow_module sunmenu">*/
/* 					<a href="#"><i class="menu-icon fa fa-group"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/auditGetList" authority="36" class="authority">收单审批</li>*/
/* 					</ul>*/
/* 				</li> -->*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-magnet"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/auditEntireSingle" authority="37" class="authority">整单审批</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-calculator"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/tally" authority="38" class="authority">记账审批</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-headphones"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/auditCustomerService" authority="39" class="authority">客服审批</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-tv"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/auditTax" authority="40" class="authority">报税审批</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<!-- <li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-cart-plus"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/auditing_single" authority="41" class="authority">送单审批</li>*/
/* 					</ul>*/
/* 				</li> -->*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-cubes"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/auditPosition" authority="42" class="authority">仓位审批</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<!-- <li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-bookmark"></i></a>*/
/* 					<ul>*/
/* 						<li>记账审批</li>*/
/* 						<li data-url="/admin/auditGetList">收单审批</li>*/
/* 						<li data-url="/admin/auditEntireSingle">整单审批</li>*/
/* 						<li data-url="/admin/tally">记账审批</li>*/
/* 						<li data-url="/admin/auditCustomerService">客服审批</li>*/
/* 						<li data-url="/admin/auditTax">报税审批</li>*/
/* 						<li data-url="/admin/auditing_single">送单审批</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-university"></i></a>*/
/* 					<ul>*/
/* 						<li>仓库审批</li>*/
/* 						<li data-url="/admin/auditPosition">仓位审批</li>*/
/* 					</ul>*/
/* 				</li> -->*/
/* 			</ul>*/
/* 			<ul id="miniNavList" style="display: none;">*/
/* 				<li class="miniLi pow_module sunmenu">*/
/* 					<a href="#"><i class="fa fa-life-buoy"></i></a>*/
/* 					<ul>*/
/* 						<li>记账报表</li>*/
/* 						<li data-url="/admin/coustomer" authority="43" class="authority">客户报表</li>*/
/* 						<li data-url="/admin/acquir_table" authority="44" class="authority">收单报表</li>*/
/* 						<li data-url="/admin/entire_table" authority="45" class="authority">整单报表</li>*/
/* 						<li data-url="/admin/accound_table" authority="46" class="authority">记账报表</li>*/
/* 						<li data-url="/admin/customerTable" authority="47" class="authority">客服报表</li>*/
/* 						<li data-url="/admin/tax_table" authority="48" class="authority">报税报表</li>*/
/* 						<li data-url="/admin/single_table" authority="49" class="authority">送单报表</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="miniLi pow_module sunmenu">*/
/* 					<a href="#"><i class="menu-icon fa fa-tv"></i></a>*/
/* 					<ul>*/
/* 						<li>销售报表</li>*/
/* 						<li data-url="/admin/task_table" authority="50" class="authority">任务报表</li>*/
/* 						<li data-url="/admin/high_seas_table" authority="51" class="authority">公海报表</li>*/
/* 						<li data-url="/admin/clue_table" authority="52" class="authority">线索报表</li>*/
/* 						<li data-url="/admin/linkman_table" authority="53" class="authority">联系人报表</li>*/
/* 						<li data-url="/admin/linkman_record_table" authority="54" class="authority">联系记录报表</li>*/
/* 						<li data-url="/admin/journal_table" authority="55" class="authority">日志报表</li>*/
/* 						<li data-url="/admin/schedule_table" authority="56" class="authority">日程报表</li>*/
/* 						<li data-url="/admin/business_opportunity_table" authority="57" class="authority">商机报表</li>*/
/* 						<li data-url="/admin/visit_table" authority="58" class="authority">拜访报表</li>*/
/* 						<!-- <li data-url="/admin/audit_table">查账报表</li> -->*/
/* 						*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="miniLi pow_module sunmenu">*/
/* 					<a href="#"><i class="fa facny"></i></a>*/
/* 					<ul>*/
/* 						<li>财务报表</li>*/
/* 						<li data-url="/admin/debt_table" authority="60" class="authority">欠款报表</li>*/
/* 						<li data-url="/admin/gathering_table" authority="61" class="authority">收款报表</li>*/
/* 						<li data-url="/admin/expenditurereport" authority="62" class="authority">支出报表</li>*/
/* 						<li data-url="/admin/performance_table" authority="63" class="authority">绩效报表</li>*/
/* 						<li data-url="/admin/wages_table" authority="64" class="authority">工资报表</li>*/
/* 						<li data-url="/admin/toloan_table" authority="65" class="authority">借贷报表</li>*/
/* 						<li data-url="/admin/surplus_table" authority="66" class="authority">企业盈余报表</li>*/
/* 						<li data-url="/admin/billingreport" authority="67" class="authority">开票报表</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="miniLi pow_module sunmenu">*/
/* 					<a href="#"><i class="menu-icon fa fa-cart-plus"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/contract_table" authority="68" class="authority">合同报表</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="miniLi pow_module sunmenu">*/
/* 					<a href="#"><i class="menu-icon fa fa-cube"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/warehoursereport" authority="69" class="authority">仓库报表</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 			</ul>*/
/* 			<ul id="miniNavList" style="display: none;">*/
/* 				<li class="miniLi pow_module sunmenu">*/
/* 					<a href="#"><i class="menu-icon fa fa-sitemap"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/staff" authority="70" class="authority">部门员工</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-key"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/jurisdiction" authority="71" class="authority">角色权限</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-cube"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/storehouse" authority="72" class="authority">仓库管理</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa  fa-cubes"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/warehouse" authority="73" class="authority">仓位管理</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<!--<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-google"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/administration" authority="74" class="authority">行政区域</li>*/
/* 					</ul>*/
/* 				</li>-->*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-tags"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/label" authority="75" class="authority">标签管理</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-credit-card"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/accountManage" authority="76" class="authority">账户管理</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-diamond"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/products" authority="77" class="authority">产品管理</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-link"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/procedure" authority="78" class="authority">流程管理</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-random"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/manageOfapproval" authority="79" class="authority">审批管理</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<!-- <li class="miniLi pow_module">*/
/* 					<a href="#"><i class="ace-icon glyphicon glyphicon-duplicate"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/manageOflots">批量管理</li>*/
/* 					</ul>*/
/* 				</li> -->*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-hdd-o "></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/backups" authority="80" class="authority">备份管理</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-file-archive-o"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/companyInfo" authority="81" class="authority">企业管理</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-envelope"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/get_msg" authority="82" class="authority">短信管理</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-dollar"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/payManage" authority="83" class="authority">付费管理</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<!-- <li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/personal_profile">个人信息</li>*/
/* 					</ul>*/
/* 				</li> -->*/
/* 				<li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-user"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/personal_profile" authority="84" class="authority">个人资料</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<!-- <li class="miniLi pow_module">*/
/* 					<a href="#"><i class="menu-icon fa fa-user"></i></a>*/
/* 					<ul>*/
/* 						<li data-url="/admin/singleCustomer">客户单页</li>*/
/* 					</ul>*/
/* 				</li> -->*/
/* 		</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	 <!--margin-top: 68px;-->*/
/* 	<div class="sidebarCon" style=" height: 100%; overflow: hidden;">*/
/* 		<!-- /.sidebar-shortcuts -->*/
/* 		<div id="navBox" class="left" style="width: 190px; ">*/
/* 			<ul class="nav nav-list" id="nav-list" style="display: block;">*/
/* 				<li class="active menuA authority" data-url="/admin/home" authority="1">*/
/* 					<a href="#">*/
/* 						<i class="menu-icon fa fa-home"></i>*/
/* 						<span class="menu-text"> 首页 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 				<li class="menuB pow_module">*/
/* 					<a href="#" class="dropdown-toggle">*/
/* 						<i class="menu-icon fa fa-magnet"></i>*/
/* 						<span class="menu-text">*/
/*                         记账管理*/
/*                     </span>*/
/* */
/* 						<b class="arrow fa fa-angle-down"></b>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* */
/* 					<ul class="submenu">*/
/* 						<li data-url="/admin/customerService" authority="2" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								记账客户*/
/* 							</a>*/
/* */
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/periodOfservice" authority="3" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								服务期*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/getList" authority="4" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								收单*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/entire" authority="5" class="authority">*/
/* 							<a href="#">*/
/* 								<!--<i class="menu-icon fa fa-caret-right"></i>-->*/
/* 								整单*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/account" authority="6" class="authority">*/
/* 							<a href="#">*/
/* 								<!--<i class="menu-icon fa fa-caret-right"></i>-->*/
/* 								记账*/
/* 							</a>*/
/* */
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/customer" authority="7" class="authority">*/
/* 							<a href="#">*/
/* 								<!--<i class="menu-icon fa fa-caret-right"></i>-->*/
/* 								客服*/
/* 							</a>*/
/* */
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* */
/* 						<li data-url="/admin/tax" authority="8" class="authority">*/
/* 							<a href="#">*/
/* 								<!--<i class="menu-icon fa fa-caret-right"></i>-->*/
/* 								报税*/
/* 							</a>*/
/* */
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* */
/* 						<li data-url="/admin/single" authority="9" class="authority">*/
/* 							<a href="">*/
/* 								<!--<i class="menu-icon fa fa-caret-right"></i>-->*/
/* 								送单*/
/* 							</a>*/
/* */
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* */
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="menuB pow_module">*/
/* 					<a href="#" class="dropdown-toggle">*/
/* 						<i class="menu-icon fa fa-tv"></i>*/
/* 						<span class="menu-text"> 销售管理 </span>*/
/* 						<b class="arrow fa fa-angle-down"></b>*/
/* 					</a>*/
/* 					<b class="arrow"></b>*/
/* */
/* 					<ul class="submenu">*/
/* 						<li data-url="/admin/partner" authority="10" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								<!--<i class="menu-icon fa fa-caret-right"></i>-->*/
/* 								客户*/
/* 							</a>*/
/* */
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/alltask" authority="11" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								<!--<i class="menu-icon fa fa-caret-right"></i>-->*/
/* 								任务*/
/* 							</a>*/
/* */
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/seaOfclients" authority="12" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								公海*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/accountSales" authority="13" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								线索*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/contactRecord" authority="14" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								联系记录*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/contacts" authority="15" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								联系人*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/journal" authority="16" class="authority">*/
/* 							<a href="">*/
/* 								日志*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/schedule" authority="17" class="authority">*/
/* 							<a href="">*/
/* 								日程*/
/* 							</a>*/
/* */
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/opportunity" authority="18" class="authority">*/
/* 							<a href="">*/
/* 								商机*/
/* 							</a>*/
/* */
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/visit" authority="19" class="authority">*/
/* 							<a href="/admin/visit">*/
/* 								拜访*/
/* 							</a>*/
/* */
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/writeoff" authority="20" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								介绍*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<!--<li data-url="/admin/pf_audit">*/
/* 							<a href="#">*/
/* 								查账*/
/* 							</a>*/
/* */
/* 							<b class="arrow"></b>*/
/* 						</li>-->*/
/* 						*/
/* 					</ul>*/
/* 			</li>*/
/*             <li class="menuB pow_module">*/
/*                 <a href="#" class="dropdown-toggle">*/
/*                     <i class="menu-icon fa fa-cart-plus"></i>*/
/*                     <span class="menu-text"> 订单管理 </span>*/
/* 						<b class="arrow fa fa-angle-down"></b>*/
/* 					</a>*/
/* 					<b class="arrow"></b>*/
/* 					<ul class="submenu">*/
/* 						<li data-url="/admin/contracts" authority="21" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								订单*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/contractAuthorization" authority="22" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								派单*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/contractBook" authority="23" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								合同*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="menuB pow_module">*/
/* 					<a href="#" class="dropdown-toggle">*/
/* 						<i class="menu-icon fa fa-cube"></i>*/
/* 						<span class="menu-text"> 仓库管理 </span>*/
/* */
/* 						<b class="arrow fa fa-angle-down"></b>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* */
/* 					<ul class="submenu">*/
/* 						<li data-url="/admin/depotStorage" authority="24" class="authority">*/
/* 							<a href="#">*/
/* 								入库*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/depotOutGo" authority="25" class="authority">*/
/* 							<a href="#">*/
/* 								出库*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/depotChargeback" authority="26" class="authority">*/
/* 							<a href="#">*/
/* 								退单*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/depotCheck" authority="27" class="authority">*/
/* 							<a href="#">*/
/* 								盘点*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="menuB pow_module">*/
/* 					<a href="#" class="dropdown-toggle">*/
/* 						<i class="menu-icon fa fa-cny"></i>*/
/* 						<span class="menu-text"> 财务管理 </span>*/
/* */
/* 						<b class="arrow fa fa-angle-down"></b>*/
/* 					</a>*/
/* 					<b class="arrow"></b>*/
/* 					<ul class="submenu">*/
/* 						<li data-url="/admin/lackOfrecord" authority="28" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								欠款*/
/* 							</a>*/
/* */
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/collectionRecord" authority="29" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								收款*/
/* 							</a>*/
/* */
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/employeePerformance" authority="30" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								绩效*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/wages" authority="31" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								工资*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/expenditure" authority="32" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								支出*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/financeBorrow" authority="33" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								借贷*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/pf_billing" authority="34" class="authority">*/
/* 							<a href="#">*/
/* 								开票*/
/* 							</a>*/
/* */
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li data-url="/admin/knowledge" authority="35" class="authority">*/
/* 					<a href="#">*/
/* 						<i class="menu-icon fa fa-book"></i>*/
/* 						<span class="menu-text"> 知识库 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 			</ul>*/
/* 			<!-- /.nav-list -->*/
/* */
/* 			<ul class="nav nav-list" id="nav-list" style="display: none;">*/
/* 				<!-- <li data-url="/admin/auditGetList" authority="36" class="authority">*/
/* 					<a href="">*/
/* 						<i class="menu-icon fa fa-bookmark"></i>*/
/* 						<span class="menu-text"> 收单审批 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li> -->*/
/* 				<li data-url="/admin/auditEntireSingle" authority="37" class="authority">*/
/* 					<a href="">*/
/* 						<i class="menu-icon fa fa-magnet"></i>*/
/* 						<span class="menu-text"> 整单审批 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 				<li data-url="/admin/tally" authority="38" class="authority">*/
/* 					<a href="">*/
/* 						<i class="menu-icon fa fa-calculator"></i>*/
/* 						<span class="menu-text"> 记账审批 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 				<li data-url="/admin/auditCustomerService" authority="39" class="authority">*/
/* 					<a href="">*/
/* 						<i class="menu-icon fa fa-headphones"></i>*/
/* 						<span class="menu-text"> 客服审批 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 				<li data-url="/admin/auditTax" authority="40" class="authority">*/
/* 					<a href="">*/
/* 						<i class=" menu-icon fa fa-tv"></i>*/
/* 						<span class="menu-text"> 报税审批 </span>*/
/* 					</a>*/
/* 						*/
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 				<!-- <li data-url="/admin/auditing_single" authority="41" class="authority">*/
/* 					<a href="">*/
/* 						<i class=" menu-icon fa fa-cart-plus"></i>*/
/* 						<span class="menu-text"> 送单审批 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li> -->*/
/* 				<li data-url="/admin/auditPosition" authority="42" class="authority">*/
/* 					<a href="">*/
/* 						<i class="menu-icon fa fa-cubes"></i>*/
/* 						<span class="menu-text"> 仓位审批 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* */
/* */
/* */
/* 				<!-- <li class="menuB">*/
/* 					<a href="#" class="dropdown-toggle">*/
/* 						<i class="menu-icon fa fa-bookmark"></i>*/
/* 						<span class="menu-text"> 记账审批 </span>*/
/* */
/* 						<b class="arrow fa fa-angle-down"></b>*/
/* 					</a>*/
/* 					<b class="arrow"></b>*/
/* 					<ul class="submenu">*/
/* 						<li data-url="/admin/auditGetList">*/
/* 							<a style="cursor: pointer">*/
/* 								收单审批*/
/* 							</a>*/
/* */
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/auditEntireSingle">*/
/* 							<a style="cursor: pointer">*/
/* 								整单审批*/
/* 							</a>*/
/* */
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/tally">*/
/* 							<a style="cursor: pointer">*/
/* 								记账审批*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/auditCustomerService">*/
/* 							<a style="cursor: pointer">*/
/* 								客服审批*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/auditTax">*/
/* 							<a style="cursor: pointer">*/
/* 								报税审批*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/auditing_single">*/
/* 							<a style="cursor: pointer">*/
/* 								送单审批*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="menuB">*/
/* 					<a href="#" class="dropdown-toggle">*/
/* 						<i class="menu-icon fa fa-university"></i>*/
/* 						<span class="menu-text"> 仓库审批 </span>*/
/* */
/* 						<b class="arrow fa fa-angle-down"></b>*/
/* 					</a>*/
/* 					<b class="arrow"></b>*/
/* 					<ul class="submenu">*/
/* 						<li data-url="/admin/auditPosition">*/
/* 							<a style="cursor: pointer">*/
/* 								仓位审批*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</li> -->*/
/* 			</ul>*/
/* 			<ul class="nav nav-list" id="nav-list" style="display: none;">*/
/* 				<li class="menuB pow_module">*/
/* 					<a href="#" class="dropdown-toggle">*/
/* 						<i class="menu-icon fa fa-life-buoy"></i>*/
/* 						<span class="menu-text"> 记账报表 </span>*/
/* */
/* 						<b class="arrow fa fa-angle-down"></b>*/
/* 					</a>*/
/* 					<!--<b class="arrow"></b>-->*/
/* 					<ul class="submenu">*/
/* 						<li data-url="/admin/coustomer" authority="43" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								客户报表*/
/* 							</a>*/
/* */
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/acquir_table" authority="44" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								收单报表*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/entire_table" authority="45" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								整单报表*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/accound_table" authority="46" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								记账报表*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/customerTable" authority="47" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								客服报表*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/tax_table" authority="48" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								报税报表*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/single_table" authority="49" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								送单报表*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="menuB pow_module">*/
/* 					<a href="#" class="dropdown-toggle">*/
/* 						<i class="menu-icon fa fa-tv"></i>*/
/* 						<span class="menu-text"> 销售报表 </span>*/
/* */
/* 						<b class="arrow fa fa-angle-down"></b>*/
/* 					</a>*/
/* 					<b class="arrow"></b>*/
/* 					<ul class="submenu">*/
/* 						*/
/* 						<li data-url="/admin/task_table" authority="50" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								任务报表*/
/* 							</a>*/
/* */
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/high_seas_table" authority="51" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								公海报表*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/clue_table" authority="52" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								线索报表*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/linkman_table" authority="53" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								联系人报表*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/linkman_record_table" authority="54" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								联系记录报表*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/journal_table" authority="55" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								日志报表*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/schedule_table" authority="56" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								日程报表*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/business_opportunity_table" authority="57" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								商机报表*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/visit_table" authority="58" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								拜访报表*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<!-- <li data-url="/admin/audit_table">*/
/* 							<a style="cursor: pointer">*/
/* 								查账报表*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li> -->*/
/* 						*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li class="menuB pow_module">*/
/* 					<a href="#" class="dropdown-toggle">*/
/* 						<i class="menu-icon fa fa-cny"></i>*/
/* 						<span class="menu-text"> 财务报表 </span>*/
/* */
/* 						<b class="arrow fa fa-angle-down"></b>*/
/* 					</a>*/
/* 					<b class="arrow"></b>*/
/* 					<ul class="submenu">*/
/* 						<li data-url="/admin/debt_table" authority="60" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								欠款报表*/
/* 							</a>*/
/* */
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/gathering_table" authority="61" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								收款报表*/
/* 							</a>*/
/* */
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/expenditurereport" authority="62" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								支出报表*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/performance_table" authority="63" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								绩效报表*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/wages_table" authority="64" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								工资报表*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/toloan_table" authority="65" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								借贷报表*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/surplus_table" authority="66" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								企业盈余报表*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 						<li data-url="/admin/billingreport" authority="67" class="authority">*/
/* 							<a style="cursor: pointer">*/
/* 								开票报表*/
/* 							</a>*/
/* 							<b class="arrow"></b>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<li data-url="/admin/contract_table" authority="68" class="authority">*/
/* 					<a href="#">*/
/* 						<i class="menu-icon fa fa-cart-plus"></i>*/
/* 						<span class="menu-text"> 合同报表 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 				<li data-url="/admin/warehoursereport" authority="69" class="authority">*/
/* 					<a href="#">*/
/* 						<i class="menu-icon fa fa-cube"></i>*/
/* 						<span class="menu-text"> 仓库报表 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 			</ul>*/
/* 			<ul class="nav nav-list" id="nav-list" style="display: none;">*/
/* */
/* 				<li data-url="/admin/staff" authority="70" class="authority">*/
/* 					<a href="">*/
/* 						<i class="menu-icon fa fa-sitemap"></i>*/
/* 						<span class="menu-text"> 部门员工 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 				<li data-url="/admin/jurisdiction" authority="71" class="authority">*/
/* 					<a href="#">*/
/* 						<i class="menu-icon fa fa-key"></i>*/
/* 						<span class="menu-text"> 角色权限 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 				<li data-url="/admin/storehouse" authority="72" class="authority">*/
/* 					<a href="">*/
/* 						<i class="menu-icon fa fa-cube"></i>*/
/* 						<span class="menu-text"> 仓库管理 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 				<li data-url="/admin/warehouse" authority="73" class="authority">*/
/* 					<a href="">*/
/* 						<i class="menu-icon fa  fa-cubes"></i>*/
/* 						<span class="menu-text"> 仓位管理 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 				<!--<li data-url="/admin/administration" authority="74" class="authority">*/
/* 					<a href="">*/
/* 						<i class="menu-icon fa fa-google"></i>*/
/* 						<span class="menu-text"> 行政区域 </span>*/
/* 					</a>*/
/* 					<b class="arrow"></b>*/
/* 				</li>-->*/
/* 				<li data-url="/admin/label" authority="75" class="authority">*/
/* 					<a href="">*/
/* 						<i class="menu-icon fa fa-tags"></i>*/
/* 						<span class="menu-text"> 标签管理 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 				<li data-url="/admin/accountManage" authority="76" class="authority">*/
/* 					<a href="#">*/
/* 						<i class="menu-icon fa fa-credit-card" aria-hidden="true"></i>*/
/* 						<span class="menu-text"> 账户管理 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 				<li data-url="/admin/products" authority="77" class="authority">*/
/* 					<a href="#">*/
/* 						<i class="menu-icon fa fa-diamond"></i>*/
/* 						<span class="menu-text"> 产品管理 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 				<li data-url="/admin/procedure" authority="78" class="authority">*/
/* 					<a href="#">*/
/* 						<i class="menu-icon fa fa-link"></i>*/
/* 						<span class="menu-text"> 流程管理 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 				<li data-url="/admin/manageOfapproval" authority="79" class="authority">*/
/* 					<a style="cursor: pointer">*/
/* 						<i class="menu-icon fa fa-random"></i>*/
/* 						<span class="menu-text"> 审批管理 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 				<!-- <li data-url="/admin/manageOflots">*/
/* 					<a style="cursor: pointer">*/
/* 						<i class="menu-icon fa fa-tachometer"></i>*/
/* 						<span class="menu-text"> 批量管理 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li> -->*/
/* 				<li data-url="/admin/backups" authority="80" class="authority">*/
/* 					<a style="cursor: pointer">*/
/* 						<i class="menu-icon fa fa-hdd-o "></i>*/
/* 						<span class="menu-text"> 备份管理 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 				<li data-url="/admin/companyInfo" authority="81" class="authority">*/
/* 					<a style="cursor: pointer">*/
/* 						<i class="menu-icon fa fa-gg"></i>*/
/* 						<span class="menu-text"> 企业信息 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 				<li data-url="/admin/get_msg" authority="82" class="authority">*/
/* 					<a style="cursor: pointer">*/
/* 						<i class="menu-icon fa fa-envelope"></i>*/
/* 						<span class="menu-text"> 短信管理 </span>*/
/* 					</a>*/
/* */
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 				<li data-url="/admin/payManage" authority="83" class="authority">*/
/* 					<a style="cursor: pointer">*/
/* 						<i class="menu-icon fa fa-dollar"></i>*/
/* 						<span class="menu-text"> 付费管理 </span>*/
/* 					</a>*/
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 				*/
/* 				<li data-url="/admin/personal_profile" authority="84" class="authority">*/
/* 					<a style="cursor: pointer">*/
/* 						<i class="menu-icon fa fa-user"></i>*/
/* 						<span class="menu-text"> 个人资料 </span>*/
/* 					</a>*/
/* 					<b class="arrow"></b>*/
/* 				</li>*/
/* 				<!-- <li data-url="/admin/singleCustomer">*/
/* 					<a style="cursor: pointer">*/
/* 						<i class="menu-icon fa fa-user"></i>*/
/* 						<span class="menu-text"> 客户单页 </span>*/
/* 					</a>*/
/* 					<b class="arrow"></b>*/
/* 				</li> -->*/
/* */
/* 		</ul>*/
/* 		</div>*/
/* */
/* 		<div id="nav_mini">*/
/* */
/* 		</div>*/
/* 		<!-- #section:basics/sidebar.layout.minimize -->*/
/* 		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse" style="display: none">*/
/* 			<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>*/
/* 		</div>*/
/* 		<!-- /section:basics/sidebar.layout.minimize -->*/
/* 	</div>*/
/* 	*/
/* 	*/
/* </div>*/
/* <div id="goMinibox" style="display:none;" >*/
/* 		<span class="span_line"></span>*/
/* 		<div class="goMini" style="color: #eee;line-height: 18px;text-align: center;left: 0;bottom:0;right: 0;background-color: #2A3F54;">*/
/* 			<i class="bar_icon fa fa-angle-double-left"></i>*/
/* 		</div>*/
/* 	</div>*/
/* */
