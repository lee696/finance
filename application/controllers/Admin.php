<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/Base.php';

class Admin extends Base {

    /**
     * 后台首页
     */
    public function index()
    {
        $this->data['title'] = '首页';
        $this->twig->render('admin/index', $this->data);
    }

    /**
     * 记账页面
     */
    public function account()
    {
        $this->data['title'] = '记账';
        $this->twig->render('admin/task/account', $this->data);
    }

    /**
     * 报税页面
     */
    public function tax()
    {
        $this->data['title'] = '报税';
        $this->twig->render('admin/task/tax', $this->data);
    }
	
	/**
     * 404页面
     */
    public function error()
    {
        $this->data['title'] = '404';
        $this->twig->render('admin/login/404', $this->data);
    }

    /*
     * 客服页面
     */

    public function customer()
    {
        $this->data['title'] = '客服';
        $this->twig->render('admin/task/customer', $this->data);
    }

    /*
     * 整单页面
     */

    public function entire()
    {
        $this->data['title'] = '整单';
        $this->twig->render('admin/task/entire', $this->data);
    }

    /*
     * 送单页面
     */

    public function single()
    {
        $this->data['title'] = '送单';
        $this->twig->render('admin/task/single', $this->data);
    }

    /*
     * 首页
     */

    public function home()
    {
        $this->data['title'] = '首页';
        $this->twig->render('admin/home', $this->data);
    }

    /*
     * 日志页面
     */

    public function journal()
    {
        $this->data['title'] = '日志';
        $this->twig->render('admin/platform/journal', $this->data);
    }

    /*
     * 日志页面
     */

    public function schedule()
    {
        $this->data['title'] = '日程';
        $this->twig->render('admin/platform/schedule', $this->data);
    }

    /*
     * 商机页面
     */

    public function opportunity()
    {
        $this->data['title'] = '商机';
        $this->twig->render('admin/platform/opportunity', $this->data);
    }

    /*
     * 拜访页面
     */

    public function visit()
    {
        $this->data['title'] = '拜访';
        $this->twig->render('admin/platform/visit', $this->data);
    }

    /*
     * 员工管理页面
     */

    public function staff()
    {
        $this->data['title'] = '员工管理';
        $this->twig->render('admin/manage/staff', $this->data);
    }

    /*
     * 仓位管理页面
     */

    public function warehouse()
    {
        $this->data['title'] = '仓位管理';
        $this->twig->render('admin/manage/warehouse', $this->data);
    }

    /*
     * 仓库管理页面
     */

    public function storehouse()
    {
        $this->data['title'] = '仓库管理';
        $this->twig->render('admin/manage/storehouse', $this->data);
    }

    /*
     * 客户管理页面
     * 联系人记录
     *
     */

    public function contactRecord()
    {
        $this->data['title'] = '联系人记录';
        $this->twig->render('admin/clientManage/contactRecord', $this->data);
    }

    /*
     * 客户管理页面
     * 联系人记录
     *
     */

    public function contacts()
    {
        $this->data['title'] = '联系人记录';
        $this->twig->render('admin/clientManage/contacts', $this->data);
    }

    /*
     * 客户管理页面
     * 服务期
     *
     */

    public function periodOfservice()
    {
        $this->data['title'] = '服务期';
        $this->twig->render('admin/clientManage/periodOfservice', $this->data);
    }

    /*
     * 客户管理页面
     * 客户公海
     *
     */

    public function seaOfclients()
    {
        $this->data['title'] = '客户公海';
        $this->twig->render('admin/clientManage/seaOfclients', $this->data);
    }

    /*
     * 财务管理页面
     * 欠费记录
     *
     */

    public function lackOfrecord()
    {
        $this->data['title'] = '欠费记录';
        $this->twig->render('admin/financialManagement/lackOfrecord', $this->data);
    }

    /*
     * 财务管理页面
     * 收款记录
     *
     */

    public function collectionRecord()
    {
        $this->data['title'] = '收款记录';
        $this->twig->render('admin/financialManagement/collectionRecord', $this->data);
    }

    /*
     * 财务管理页面
     * 员工绩效
     *
     */

    public function employeePerformance()
    {
        $this->data['title'] = '员工绩效';
        $this->twig->render('admin/financialManagement/employeePerformance', $this->data);
    }

    /*
     * 合同管理页面
     * 合同
     *
     */

    public function contracts()
    {
        $this->data['title'] = '合同';
        $this->twig->render('admin/contractManagement/contracts', $this->data);
    }

    /*
     * 合同管理页面
     * 合同
     *
     */

    public function contractAuthorization()
    {
        $this->data['title'] = '合同授权';
        $this->twig->render('admin/contractManagement/contractAuthorization', $this->data);
    }

    /*
     * 合同管理页面
     * 合同书
     *
     */

    public function contractBook()
    {
        $this->data['title'] = '合同书';
        $this->twig->render('admin/contractManagement/contractBook', $this->data);
    }

    /*
     * 合同管理核销页面
     *
     */

    public function writeoff()
    {
        $this->data['title'] = '合同核销';
        $this->twig->render('admin/contractManagement/writeoff', $this->data);
    }

    /*
     * 系统配置页面
     * 审批管理
     *
     */

    public function manageOfapproval()
    {
        $this->data['title'] = '审批管理';
        $this->twig->render('admin/manage/manageOfapproval', $this->data);
    }

    /*
     * 系统配置页面
     * 企业信息
     *
     */

    public function companyInfo()
    {
        $this->data['title'] = '企业信息';
        $this->twig->render('admin/manage/companyInfo', $this->data);
    }

    /*
     * 系统配置页面
     * 备份管理
     *
     *
     */

    public function backups()
    {
        $this->data['title'] = '备份管理';
        $this->twig->render('admin/manage/backups', $this->data);
    }

    /*
     * 系统配置页面
     * 批量管理
     *
     */

    public function manageOflots()
    {
        $this->data['title'] = '批量管理';
        $this->twig->render('admin/manage/manageOflots', $this->data);
    }

    /*
     * 权限管理页面
     */

    public function jurisdiction()
    {
        $this->data['title'] = '权限管理';
        $this->twig->render('admin/manage/jurisdiction', $this->data);
    }

    /*
     * 审批记账页面
     */

    public function tally()
    {
        $this->data['title'] = '审批记账';
        $this->twig->render('admin/auditing/tally', $this->data);
    }

    /*
     * 行政区域页面
     */

    /* public function administration()
      {
      $this->data['title'] = '行政区域';
      $this->twig->render('admin/manage/administration', $this->data);
      } */

    /*
     * 标签管理页面
     */

    public function label()
    {
        $this->data['title'] = '标签管理';
        $this->twig->render('admin/manage/label', $this->data);
    }

    /*
     * 审批开票页面
     */

    public function billing()
    {
        $this->data['title'] = '审批开票';
        $this->twig->render('admin/auditing/billing', $this->data);
    }

    /*
     * 审批查账页面
     */

    public function audit()
    {
        $this->data['title'] = '审批查账';
        $this->twig->render('admin/auditing/audit', $this->data);
    }

    /*
     * 审批收款页面
     */

    public function gathering()
    {
        $this->data['title'] = '审批收款';
        $this->twig->render('admin/auditing/gathering', $this->data);
    }

    /*
     * 审批合同页面
     */

    public function contract()
    {
        $this->data['title'] = '审批合同';
        $this->twig->render('admin/auditing/contract', $this->data);
    }

    /*
     * 个人信息页面
     */

    public function personal_profile()
    {
        $this->data['title'] = '个人信息';
        $this->twig->render('admin/login/personal_profile.html', $this->data);
    }

    /*
     * 短信管理页面
     */

    public function get_msg()
    {
        $this->data['title'] = '短信管理';
        $this->twig->render('admin/manage/get_msg.html', $this->data);
    }

    /*
     * 审批任务页面
     */

    public function auditing_task()
    {
        $this->data['title'] = '审批任务';
        $this->twig->render('admin/auditing/auditing_task', $this->data);
    }

    /*
     * 审批客户页面
     */

    public function auditing_customer()
    {
        $this->data['title'] = '审批客户';
        $this->twig->render('admin/auditing/auditing_customer', $this->data);
    }

    /*
     * 审批支出页面
     */

    public function auditing_expenditure()
    {
        $this->data['title'] = '审批支出';
        $this->twig->render('admin/auditing/auditing_expenditure', $this->data);
    }

    /*
     * 审批送单页面
     */

    public function auditing_single()
    {
        $this->data['title'] = '审批送单';
        $this->twig->render('admin/auditing/auditing_single', $this->data);
    }

    /*
     * 工作平台开票页面
     */

    public function pf_billing()
    {
        $this->data['title'] = '开票';
        $this->twig->render('admin/platform/pf_billing', $this->data);
    }

    /*
     * 工作平台查账页面
     */

    public function pf_audit()
    {
        $this->data['title'] = '查账';
        $this->twig->render('admin/platform/pf_audit', $this->data);
    }

    /*
     * 系统配置产品管理页面
     */

    public function products()
    {
        $this->data['title'] = '产品管理';
        $this->twig->render('admin/manage/products', $this->data);
    }

    /*
     * 系统配置流程管理页面
     */

    public function procedure()
    {
        $this->data['title'] = '流程管理';
        $this->twig->render('admin/manage/procedure', $this->data);
    }

    /*
     * 系统配置账户管理页面
     */

    public function accountManage()
    {
        $this->data['title'] = '账户管理';
        $this->twig->render('admin/manage/accountManage', $this->data);
    }

    /*
     * 系统配置税局管理页面
     */

    public function taxStation()
    {
        $this->data['title'] = '税局管理';
        $this->twig->render('admin/manage/taxStation', $this->data);
    }

    /*
     * 财务管理支出页面
     */

    public function expenditure()
    {
        $this->data['title'] = '支出';
        $this->twig->render('admin/financialManagement/expenditure', $this->data);
    }

    /*
     * 财务管理员工工资页面
     */

    public function wages()
    {
        $this->data['title'] = '员工工资';
        $this->twig->render('admin/financialManagement/wages', $this->data);
    }

    /*
     * 客户报表页面
     */

    public function coustomer()
    {
        $this->data['title'] = '客户报表';
        $this->twig->render('admin/statistics/customer_table', $this->data);
    }

    /**
     * 记账报表
     */
    public function accound_table()
    {
        $this->data['title'] = '客户报表';
        $this->twig->render('admin/statistics/accound_table', $this->data);
    }

    /*
     * 员工绩效报表页面
     */

    public function performance_table()
    {
        $this->data['title'] = '员工绩效报表';
        $this->twig->render('admin/statistics/performance_table', $this->data);
    }

    /*
     * 开票报表页面
     */

    public function billingreport()
    {
        $this->data['title'] = '开票报表';
        $this->twig->render('admin/statistics/billing', $this->data);
    }

    /*
     * 商机报表页面
     */

    public function business_opportunity_table()
    {
        $this->data['title'] = '商机报表';
        $this->twig->render('admin/statistics/business_opportunity_table', $this->data);
    }

    /*
     * 仓位报表页面
     */

    public function warehoursereport()
    {
        $this->data['title'] = '仓库报表';
        $this->twig->render('admin/statistics/warehousereport', $this->data);
    }

    /*
     * 退款报表页面
     */

    public function expenditurereport()
    {
        $this->data['title'] = '退款报表';
        $this->twig->render('admin/statistics/refund', $this->data);
    }

    /*
     * 客户公海报表页面
     */

    public function high_seas_table()
    {
        $this->data['title'] = '客户公海报表';
        $this->twig->render('admin/statistics/high_seas_table', $this->data);
    }

    /*
     * 拜访报表页面
     */

    public function visit_table()
    {
        $this->data['title'] = '拜访报表';
        $this->twig->render('admin/statistics/visit_table', $this->data);
    }

    /*
     * 日志报表页面
     */

    public function journal_table()
    {
        $this->data['title'] = '日志报表';
        $this->twig->render('admin/statistics/journal_table', $this->data);
    }

    /*
     *  日程报表页面
     */

    public function schedule_table()
    {
        $this->data['title'] = '日程报表';
        $this->twig->render('admin/statistics/schedule_table', $this->data);
    }

    /*
     *  欠款报表页面
     */

    public function debt_table()
    {
        $this->data['title'] = '欠款报表';
        $this->twig->render('admin/statistics/debt_table', $this->data);
    }

    /*
     *  联系人报表页面
     */

    public function linkman_table()
    {
        $this->data['title'] = '联系人报表';
        $this->twig->render('admin/statistics/linkman_table', $this->data);
    }

    /*
     *  联系人记录报表页面
     */

    public function linkman_record_table()
    {
        $this->data['title'] = '联系人记录报表';
        $this->twig->render('admin/statistics/linkman_record_table', $this->data);
    }

    /*
     *  企业盈余报表页面
     */

    public function surplus_table()
    {
        $this->data['title'] = '企业盈余报表';
        $this->twig->render('admin/statistics/surplus_table', $this->data);
    }

    /*
     *  任务报表页面
     */

    public function task_table()
    {
        $this->data['title'] = '任务报表';
        $this->twig->render('admin/statistics/task_table', $this->data);
    }

    /*
     *  借贷报表页面
     */

    public function toloan_table()
    {
        $this->data['title'] = '借贷报表';
        $this->twig->render('admin/statistics/toloan_table', $this->data);
    }

    /*
     *  客服报表页面
     */

    public function customerTable()
    {
        $this->data['title'] = '客服报表';
        $this->twig->render('admin/statistics/customerTable', $this->data);
    }

    /*
     *  工资报表页面
     */

    public function wages_table()
    {
        $this->data['title'] = '工资报表';
        $this->twig->render('admin/statistics/wages_table', $this->data);
    }

    /*
     *  报税报表页面
     */

    public function tax_table()
    {
        $this->data['title'] = '报税报表';
        $this->twig->render('admin/statistics/tax_table', $this->data);
    }

    /*
     *  收单报表页面
     */

    public function acquir_table()
    {
        $this->data['title'] = '收单报表';
        $this->twig->render('admin/statistics/acquir_table', $this->data);
    }

    /*
     *  整单报表页面
     */

    public function entire_table()
    {
        $this->data['title'] = '整单报表';
        $this->twig->render('admin/statistics/entire_table', $this->data);
    }

    /*
     *  线索报表页面
     */

    public function clue_table()
    {
        $this->data['title'] = '线索报表';
        $this->twig->render('admin/statistics/clue_table', $this->data);
    }

    /*
     *  记账报表页面
     */

    public function account_table()
    {
        $this->data['title'] = '记账报表';
        $this->twig->render('admin/statistics/account_table', $this->data);
    }

    /*
     *  送单报表页面
     */

    public function single_table()
    {
        $this->data['title'] = '送单报表';
        $this->twig->render('admin/statistics/single_table', $this->data);
    }

    /*
     * 其他业务报表页面
     */

    public function other_business_table()
    {
        $this->data['title'] = '其他业务报表';
        $this->twig->render('admin/statistics/other_business_table', $this->data);
    }

    /*
     * 查账报表页面
     */

    public function audit_table()
    {
        $this->data['title'] = '查账报表';
        $this->twig->render('admin/statistics/audit_table', $this->data);
    }

    /*
     * 收款报表页面
     */

    public function gathering_table()
    {
        $this->data['title'] = '收款报表';
        $this->twig->render('admin/statistics/gathering_table', $this->data);
    }

    /*
     * 合同报表页面
     */

    public function contract_table()
    {
        $this->data['title'] = '合同报表';
        $this->twig->render('admin/statistics/contract_table', $this->data);
    }

    /*
     * 客户管理客户销售页面
     */

    public function accountSales()
    {
        $this->data['title'] = '客户销售';
        $this->twig->render('admin/clientManage/accountSales', $this->data);
    }

    /*
     * 客户管理客户服务页面
     */

    public function customerService()
    {
        $this->data['title'] = '客户服务';
        $this->twig->render('admin/clientManage/customerService', $this->data);
    }

    /*
     * 知识库页面
     */

    public function knowledge()
    {
        $this->data['title'] = '客户服务';
        $this->twig->render('admin/task/knowledge', $this->data);
    }

    /*
     * 审批管理仓位页面
     */

    public function auditPosition()
    {
        $this->data['title'] = '审批仓位';
        $this->twig->render('admin/auditing/auditPosition', $this->data);
    }

    /*
     * 审批管理工资页面
     */

    public function auditSalary()
    {
        $this->data['title'] = '审批工资';
        $this->twig->render('admin/auditing/auditSalary', $this->data);
    }

    /*
     * 审批管理绩效页面
     */

    public function auditPerformance()
    {
        $this->data['title'] = '审批绩效';
        $this->twig->render('admin/auditing/auditPerformance', $this->data);
    }

    /*
     * 审批管理退单页面
     */

    public function auditChargeback()
    {
        $this->data['title'] = '审批退单';
        $this->twig->render('admin/auditing/auditChargeback', $this->data);
    }

    /*
     * 审批管理出库页面
     */

    public function auditOutGo()
    {
        $this->data['title'] = '审批出库';
        $this->twig->render('admin/auditing/auditOutGo', $this->data);
    }

    /*
     * 审批管理入库页面
     */

    public function auditStorage()
    {
        $this->data['title'] = '审批入库';
        $this->twig->render('admin/auditing/auditStorage', $this->data);
    }

    /*
     * 审批管理借贷页面
     */

    public function auditBorrow()
    {
        $this->data['title'] = '审批借贷';
        $this->twig->render('admin/auditing/auditBorrow', $this->data);
    }

    /*
     * 审批管理报税页面
     */

    public function auditTax()
    {
        $this->data['title'] = '审批报税';
        $this->twig->render('admin/auditing/auditTax', $this->data);
    }

    /*
     * 审批管理客服页面
     */

    public function auditCustomerService()
    {
        $this->data['title'] = '审批客服';
        $this->twig->render('admin/auditing/auditCustomerService', $this->data);
    }

    /*
     * 审批管理整单页面
     */

    public function auditEntireSingle()
    {
        $this->data['title'] = '审批整单';
        $this->twig->render('admin/auditing/auditEntireSingle', $this->data);
    }

    /*
     * 审批管理收单页面
     */

    public function auditGetList()
    {
        $this->data['title'] = '审批收单';
        $this->twig->render('admin/auditing/auditGetList', $this->data);
    }

    /*
     * 财务管理借贷页面
     */

    public function financeBorrow()
    {
        $this->data['title'] = '借贷';
        $this->twig->render('admin/financialManagement/financeBorrow', $this->data);
    }

    /*
     * 仓库管理入库页面
     */

    public function depotStorage()
    {
        $this->data['title'] = '入库';
        $this->twig->render('admin/depotManagement/depotStorage', $this->data);
    }

    /*
     * 仓库管理出库页面
     */

    public function depotOutGo()
    {
        $this->data['title'] = '出库';
        $this->twig->render('admin/depotManagement/depotOutGo', $this->data);
    }

    /*
     * 仓库管理退单页面
     */

    public function depotChargeback()
    {
        $this->data['title'] = '退单';
        $this->twig->render('admin/depotManagement/depotChargeback', $this->data);
    }

    /*
     * 仓库管理盘点页面
     */

    public function depotCheck()
    {
        $this->data['title'] = '盘点';
        $this->twig->render('admin/depotManagement/depotCheck', $this->data);
    }

    /*
     * 综合管理合作客户页面
     */

    public function partner()
    {
        $this->data['title'] = '合作客户';
        $this->twig->render('admin/clientManage/partner', $this->data);
    }

    /*
     * 综合管理所有任务页面
     */

    public function alltask()
    {
        $this->data['title'] = '所有任务';
        $this->twig->render('admin/clientManage/alltask', $this->data);
    }

    /*
     * 记账管理收单页面
     */

    public function getList()
    {
        $this->data['title'] = '收单';
        $this->twig->render('admin/auditing/getList', $this->data);
    }

    /**
     * 退出
     */
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/login'); //跳转到登录页面           
    }

    /**
     * 系统设置 付费管理
     */
    public function payManage()
    {
        $this->data['title'] = '付费管理';
        $this->twig->render('admin/manage/payManage', $this->data);
    }

    /**
     * 客户详情单页
     */
    public function customer_detail()
    {
        $this->data['title'] = '客户详情';
        $this->twig->render('admin/login/customer_detail', $this->data);
    }

    /**
     * 系统设置 付费管理
     */
    public function singleCustomer()
    {
        $this->data['title'] = '付费管理';
        $this->twig->render('admin/singleCustomer', $this->data);
    }

    /**
     * 客户地图展示页
     */
    public function go_map()
    {
        $this->data['title'] = '客户地图展示';
        $this->twig->render('admin/map', $this->data);
    }

}
