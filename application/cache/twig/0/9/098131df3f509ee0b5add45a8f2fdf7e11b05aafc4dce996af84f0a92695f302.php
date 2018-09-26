<?php

/* admin/footer.html */
class __TwigTemplate_3d0d93cac301a83a9ec26af09b455aa42ed7263d3e959085e1134451afe996f9 extends Twig_Template
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
        echo "<script src=\"/resource/adimin/components/jquery.1x/dist/jquery.js\"></script>
<script src=\"/resource/adimin/components/moment/moment.js\"></script>
<!--时间范围-->
<script src=\"/resource/adimin/components/bootstrap-daterangepicker/daterangepicker.js\"></script>

<script src=\"/resource/adimin/components/_mod/bootstrap-multiselect/bootstrap-multiselect.js\">
</script>
<script src=\"/resource/adimin/components/_mod/fuelux/tree.js\"></script>

<script src=\"/resource/adimin/components/bootstrap/dist/js/bootstrap.js\"></script>
<script src=\"/resource/adimin/assets/js/ykp.js\"></script>
<script src=\"/resource/adimin/assets/js/echarts.min.js\"></script>
<!-- page specific plugin scripts -->
<script src=\"/resource/adimin/components/datatables/media/js/jquery.dataTables.js\"></script>
<script src=\"/resource/adimin/components/_mod/datatables/jquery.dataTables.bootstrap.js\"></script>

<script src=\"/resource/adimin/components/datatables.net-select/js/dataTables.select.js\"></script>
<script src=\"/resource/adimin/components/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js\"></script>

<script src=\"/resource/adimin/assets/js/src/elements.treeview.js\"></script>
<script src=\"/resource/adimin/assets/js/jquery.pagination.min.js\"></script>
<script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>
<script src=\"/resource/adimin/assets/js/clipboard.min.js\"></script>
<script src=\"/resource/adimin/assets/js/src/bootbox.js\"></script>
<style type=\"text/css\">

.select2-container--open .select2-dropdown--below{
    left: 0;
    top: 96px;
}

.user-info{
\tmax-width: 221px !important;
}

.showTheInfo{\t
    white-space: normal !important;;
}

.select2 .select2-container .select2-container--default .select2-container--above .select2-container--focus{
\twidth: 120px!important
}
.dropdown-menu{min-width:124px;}

#msgList a{background: transparent;}

</style>

<!-- inline scripts related to this page -->
<script type=\"text/javascript\">
\tjQuery(function(\$) {
\t    //获取公司名称 和 公司logo
\t\tgetCompanyInfo();
\t\tfunction getCompanyInfo(){
            var userinfo = JSON.parse(ykp.getCookie('userinfo'));
\t\t\tvar company_info = userinfo['company'] || [];\t\t\t
\t\t\tif(company_info['logo']){
\t\t\t\t\$('#company_logo #logo').attr('src',company_info['logo']);
\t\t\t}
\t\t\tif(company_info['name']){
\t\t\t\t\$('#company_logo #company').text(company_info['name']);
\t\t\t}
\t\t}
\t\t
\t\tvar ws = new WebSocket(\"wss://echo.websocket.org\");



 \t\tgetSchedule();
\t\tfunction getSchedule(){
\t\t    var is_schedule = ykp.getCookie('schedule')
            var _ntime = Date.now();
\t\t   /* if(!is_schedule){
                ykp.setCookie('schedule',_ntime);
                showSchedule()
                return false;
            }else if((is_schedule - 43200000) > is_schedule ){
                ykp.setCookie('schedule',_ntime);
                showSchedule();
                return false;
            }*/
            showSchedule();
           function showSchedule() {
               ykp.doAjax({
                   url:\"/api/api_plan/get_none_plan\",
                   method:\"get\",
                   data:{},
                   success:function(res){
                       var data = res.data;
                       var id  = \"\";
                       for(var i = 0; i < data.length; i++) {
                           console.log(data[i]['zhenghe']);
                           if(data[i]['zhenghe']==\"日程\"){
                               (function(i){
                                   setTimeout(function(){

                                       \$('.main-content').append(`<div id=\"scheduleBox\${i}\" class=\"scheduleBox\">
                                <div style=\"line-height: 30px;color:#fff;padding: 0px 15px;font-size:14px;box-shadow: 0 2px 3px #9d9d9d;background:#484848;border-radius:5px;\">
                                    <p style=\"width:100%;margin: 0 auto;\">
                                        <p> \${cs.getNowTime(data[i].plan_start_time,true) + \" 至 \" + cs.getNowTime(data[i].plan_end_time,true)}</p>
                                        <p> \${data[i].name + \" 有 \" + data[i].title_name + \"的日程任务\"}</p>
                                        <p> \${\"备注为 \" +data[i].remark+\" ，请知悉！\"}</p>
                                    </p>
                                </div>
                            </div>`);
                                   },(i)*5000);
                                   setTimeout(function(){
                                       ykp.doAjax({
                                           url:\"/api/api_plan/is_read_plan\",
                                           method:\"post\",
                                           data:{
                                               id:data[i].id
                                           },
                                           success:function(){
                                               \$('#scheduleBox'+i).remove();
                                           }
                                       })
                                       \$('#scheduleBox'+i).remove();
                                   },(i+1)*5001)
                               })(i)
                           }else {
                               (function(i){
                                   setTimeout(function(){
                                       \$('.main-content').append(`<div id=\"scheduleBox\${i}\" class=\"scheduleBox\">
                                <div style=\"line-height: 30px;color:#fff;padding: 0px 15px;font-size:14px;box-shadow: 0 2px 3px #9d9d9d;background:#484848;border-radius:5px;\">
                                    <p style=\"width:100%;margin: 0 auto;\">
                                        <p> \${cs.getNowTime(data[i].next_time,true)+\",\"+data[i].name+\"有待跟进线索\"}</p>
                                        <p> \${\"团队人员为：\"+data[i].user_name+\",\"+data[i].team_name}</p>
                                    </p>
                                </div>
                            </div>`);
                                   },(i)*5000);
                                   setTimeout(function(){
                                       ykp.doAjax({
                                           url:\"/api/api_plan/is_read_clue\",
                                           method:\"post\",
                                           data:{
                                               id:data[i].id
                                           },
                                           success:function(){
                                               \$('#scheduleBox'+i).remove();
                                           }
                                       })
                                       \$('#scheduleBox'+i).remove();
                                   },(i+1)*5001)
                               })(i)
                           }
                       }

                   }
               })
           }
\t\t}
\t\t
\t\tykp.setCookie(\"filter\",\"\");
\t\tykp.setCookie(\"order\",\"\");

\t\t//刷新页面,两种处理
\t\t//第一，清缓存，回首页
\t\tykp.clearLocalStorage();
//\t\thistory.pushState(null, '', '/admin/');
\t\t//第二,依原网页照搬

//\t\tisLogin();
\t\t//重定向  未登录直接跳转到登录页面
\t\tfunction isLogin() {
\t\t\tvar NikeName = ykp.getCookie('uid');
\t\t\tif(!NikeName) {
\t\t\t\tykp.showOk({
\t\t\t\t\ttext: '您还没有登录'
\t\t\t\t})
\t\t\t\tvar getUrl = getUrlParam('url');
\t\t\t\tvar dataIndex = getUrlParam('i');
\t\t\t\tvar dataLi = getUrlParam('type');
\t\t\t\t//window.location = '/login/?url=' + getUrl + '&i=' + dataIndex + '&type=' + dataLi
                window.location = '/login'
\t\t\t}
\t\t}

\t\tfunction getUrlParam(name) {
\t\t\tvar reg = new RegExp(\"(^|&)\" + name + \"=([^&]*)(&|\$)\"); //构造一个含有目标参数的正则表达式对象
\t\t\tvar r = window.location.search.substr(1).match(reg); //匹配目标参数
\t\t\tif(r != null)
\t\t\t\treturn unescape(r[2]);
\t\t\treturn null; //返回参数值
\t\t}
\t\t
\t\t//获取公司名 和 公司logo
\t    // getCompanyInfo();
\t    // function getCompanyInfo(){
\t    // \tconsole.log(ykp.getCookie('uid'));
\t    //     ykp.doAjax({
\t    //         url:'/api/api_customer/info',
\t    //         method:'post',
\t    //         data:{
\t    //             filter:'khm_customer = ' + ykp.getCookie('cid')
\t    //         },
\t    //         success:function(res){

\t    //         }
\t    //     });
\t    // }

\t\t//任务、通知、消息切换
\t\t\$('#chooseNav li').click(function(){
\t\t\tif(\$(this).hasClass('active')){
\t\t\t\treturn;
\t\t\t}
\t\t\t\$(this).addClass('active').siblings().removeClass('active');
\t\t\tvar index = \$(this).index();
\t\t\tvar left = \$(this).position().left;
\t\t\t\$('.line').css('left', left + 'px');
\t\t\t\$('#mesConBox>div').eq(index).css('display', 'block').siblings().css('display', 'none');
\t\t})



\t\t\$(\"#sidebar-shortcuts-large .btn\").click(function() {
\t\t\tvar i = \$(this).index();
\t\t\t\$(this).attr('id', 'btn').siblings(i).attr('id', '');
\t\t\tvar left = \$(this).position().left;
\t\t\tvar navList = \$(\"#navBox .nav-list\");
\t\t\tnavList.eq(i).css('display', 'block').siblings(i).css('display', 'none');
\t\t\t\$('.bottonLine').css('left', left);
\t\t\tsetCurrentLeftHeight();
\t\t})

\t\t//获取审批开启关闭状态
\t\tgetPageList();
\t\tfunction getPageList() {
\t\t\tykp.doAjax({
\t\t\t\turl: '/api/api_manage/index',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: 999, 
\t\t\t\t},
\t\t\t\tsuccess:function(res) {
\t\t\t\t\tvar spList = [];
\t\t\t\t\tvar data = res.data.items;
\t\t\t\t\tvar obj = {};
\t\t\t\t\tfor(var i in data){
\t\t\t\t\t\tobj[data[i][0]['spm_manage.name']] = {status:data[i][0]['spm_manage.status'],user:data[i][0]['spm_manage.user']};
\t\t\t\t\t}
\t\t\t\t\tykp.setCookie('spList',JSON.stringify(obj));
\t\t\t\t}
\t\t\t})
\t\t}

\t\t//得到所有员工
\t\tfunction allemp(){
\t\t\tvar emps;
\t\t\tykp.doAjax({
\t\t\t\turl:'/api/api_employees/f7',
                method:'post',
                data:{},
                async:false,
            \tsuccess:function(res){
                \temps=res.data;
\t            }
\t        })
\t        return emps;
\t\t}

\t\t\tgetEmple(\"#contacts\");
\t\t\tfunction getEmple(el){
\t\t\t\tvar emps = allemp();
\t\t\t\t\$(el).select2({
\t\t\t\t\tallowClear: true
\t\t\t\t})

\t\t\t    var option='';
\t        \tfor(var i in emps){
\t        \t\tif(emps[i]['bmm_employees.name']){
\t        \t\t\toption+=`<option value=\"\${emps[i]['bmm_employees.id']}\">
\t\t\t\t\t\t\t\t\${emps[i]['bmm_employees.name']}
\t        \t\t\t\t</option>`;
\t        \t\t}
\t        \t\t
\t        \t}
\t        \t\$(el).append(option);
\t        \t// \$(el).val(ykp.getCookie('uid')).trigger('change');
\t\t\t}
\t\t\tvar rightPage = [{
\t\t\t\tpage:1,
\t\t\t\tstatus:false   //true  无更多数据下同
\t\t\t},{
\t\t\t\tpage:1,
\t\t\t\tstatus:false
\t\t\t},{
\t\t\t\tpage:1,
\t\t\t\tstatus:false
\t\t\t}]

\t\t\tallTask()
\t\t\t//获取所有任务
\t\t\tfunction allTask(){
\t\t\t\tvar index = \$('#chooseNav').find('.active').index();
\t\t\t\tykp.doAjax({
\t\t\t\t\turl:'/api/api_home/get_my_task',
\t\t\t\t\tmethod:'get',
\t\t\t\t\tanync:false,
\t\t\t\t\tdata:{
\t\t\t\t\t\tlimit:10,
\t\t\t\t\t\tpage:rightPage[index].page
\t\t\t\t\t},   //根据下标去page参数
\t\t\t\t\tsuccess:function(res){
\t\t\t\t\t\tvar totalNum = 0;
\t\t\t\t\t\tvar long_money = res.data.long_money;
\t\t\t\t\t\tvar one_money = res.data.one_money;
\t\t\t\t\t\tvar service_done = res.data.service_done;
\t\t\t\t\t\tvar service_sp = res.data.service_sp;
\t\t\t\t\t\tvar status = ['未开始','待审核','通过','未通过'];
\t\t\t\t\t\tvar li='';
\t\t\t\t\t\tvar service_name=['收单','整单','记账','客服','报税','送单'];
\t\t\t\t\t\tvar service_spname=['记账审批','送单审批','','','仓位审批','','','退单审批','','整单审批','','','报税审批','客服审批','收单审批','投诉审批'];
\t\t\t\t\t\t//加载服务任务
//\t\t\t\t\t\tfor(var i in service_done){
//\t\t\t\t\t\t\ttotalNum++;
//\t\t\t\t\t\t\tli+=`<li data-clipboard-text='\${service_done[i]['name']}' type=\"ts\${service_done[i]['type']}\" >
//\t\t\t\t\t\t\t\t\t<div class=\"mesTitle\" style=\"margin-top:-20px;color:#00ffff;top:8px \"> \${service_done[i]['name']} </div>
//\t\t\t\t\t\t\t\t\t<label class=\"mesTitle\" style=\"top:12px\">\${service_name[service_done[i]['type']-1]}</label>\t\t\t\t\t\t\t\t\t
//\t\t\t\t\t\t\t\t\t<label class=\"mesStatus\" style=\"top:12px\">\${status[service_done[i]['status']]}</label>
//\t\t\t\t\t\t\t\t </li> `
//\t\t\t\t\t\t}

\t\t\t\t\t\t//加载审批任务
\t\t\t\t\t\tfor(var i in service_sp){
\t\t\t\t\t\t\ttotalNum++;
\t\t\t\t\t\t\tli+=`<li data-clipboard-text='\${service_sp[i]['customer_name']}' type=\"sp\${service_sp[i]['approve_type']}\">
\t\t\t\t\t\t\t\t\t<div class=\"mesTitle\" style=\"color:#00ffff \"> \${service_sp[i]['customer_name']} </div>
\t\t\t\t\t\t\t\t\t<label class=\"mesTitle\" style=\"margin-top:9px\">\${service_spname[service_sp[i]['approve_type']-6]}</label>
\t\t\t\t\t\t\t\t\t<label class=\"mesStatus\" style=\"top:37px\">\${status[service_sp[i]['approve_result']]}</label>
\t\t\t\t\t\t\t\t </li>`
\t\t\t\t\t\t}

\t\t\t\t\t\t//加载一次性欠款
\t\t\t\t\t\tfor(var i in one_money){
\t\t\t\t\t\t\ttotalNum++;
\t\t\t\t\t\t\tli+=`<li data-clipboard-text='\${one_money[i]['name']}' type=\"qk\" >
\t\t\t\t\t\t\t\t\t<div class=\"mesTitle\" style=\"color:#00ffff \">\${one_money[i]['name']} </div>
\t\t\t\t\t\t\t\t\t<label class=\"mesTitle\" style=\"margin-top:9px\">一次性欠款</label>
\t\t\t\t\t\t\t\t\t<label class=\"mesStatus\" style=\"top:37px\">待收款</label>
\t\t\t\t\t\t\t\t </li>`
\t\t\t\t\t\t}

\t\t\t\t\t\t//加载长期欠款
\t\t\t\t\t\tfor(var i in long_money){
\t\t\t\t\t\t\ttotalNum++;
\t\t\t\t\t\t\tli+=`<li data-clipboard-text='\${long_money[i]['name']}' type=\"qk\" >
\t\t\t\t\t\t\t\t\t<div class=\"mesTitle\" style=\"color:#00ffff \">\${long_money[i]['name']} </div>
\t\t\t\t\t\t\t\t\t<label class=\"mesTitle\" style=\"margin-top:9px\">长期欠款</label>
\t\t\t\t\t\t\t\t\t<label class=\"mesStatus\" style=\"top:37px\">待收款</label>
\t\t\t\t\t\t\t\t </li>`
\t\t\t\t\t\t}
\t\t\t\t\t\t\$(\"#taskList\").append(li);
\t\t\t\t\t\trightPage[index].page += 1;
\t\t\t\t\t\t\$('.rw').html(res.data.total);
\t\t\t\t\t\tvar numbers = \$('#mesConBox').find('li').length;
\t\t\t\t\t\tif (numbers>99) {
\t\t\t\t\t\t\tnumbers = \"99+\";
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('.badge').text(numbers);
\t\t\t\t\t\ttzPageOnTaskAndInfo();
\t\t\t\t\t\tinfoScrool(index);
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}
\t\t\t
\t\t\t/*  滚动条*/
\t\t\tfunction infoScrool(params) {
\t\t\t\tvar status;
\t\t\t\t\$('#mesConBox').find('.nav-list').eq(params).unbind('scroll').scroll(function() {
\t\t\t\t\tvar navList = \$(this)
\t\t\t\t\tvar height = \$(this).height();
\t\t\t\t\tvar contentH  = \$(this).get(0).scrollHeight;
\t\t\t\t\tvar scrollTop = \$(this).scrollTop();//滚动高度
//\t\t\t\t\tconsole.log(height+\",\"+contentH+\",\");
//\t\t\t\t\tparams.status
\t\t\t\t\tif(status) {
\t\t\t\t\t\tclearInterval(status);
\t\t\t\t\t}
\t\t\t\t\tif(contentH - height - scrollTop <= 50) {
\t\t\t\t\t\tstatus = setTimeout(function() {
\t\t\t\t\t\t\tallTask();
\t\t\t\t\t\t},300)
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t
\t\t\t\t
\t\t\t}

\t\t\tvar customers = {};
\t\t\tykp.doAjax({
\t\t\t\turl:'/api/api_customer/f7',
\t\t\t\tmethod:'post',
\t\t\t\tasync:false,
\t\t\t\tdata:{
\t\t\t\t\tselect:'khm_customer.id,khm_customer.name'
\t\t\t\t},
\t\t\t\tsuccess:function(res){
\t\t\t\t\tvar data = res.data;
\t\t\t\t\tfor(var i in data){
\t\t\t\t\t\tcustomers[data[i]['id']]=data[i]['name'];
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})


\t\t\t//跳转页面，sp代表记账报税审批页面，ts代表记账报税页面，qk为欠款页面
\t\t\tvar type_url={
\t\t\t\tsp6:'?url=tally&i=1-1&type=1',
\t\t\t\tsp7:'?url=auditing_single&i=1-0&type=1',
\t\t\t\tsp10:'?url=auditPosition&i=1-4&type=1',
\t\t\t\tsp13:'?url=depotChargeback&i=0-4-2&type=1',
\t\t\t\tsp15:'?url=auditEntireSingle&i=1-0&type=1',
\t\t\t\tsp18:'?url=auditTax&i=1-3&type=1',
\t\t\t\tsp19:'?url=auditCustomerService&i=1-2&type=1',
\t\t\t\tsp20:'?url=auditGetList&i=1-0-0&type=1',
\t\t\t\tsp21:'?url=customer&i=0-1-5&type=1',
\t\t\t\tts1:'?url=getList&i=0-1-2&type=1',
\t\t\t\tts2:'?url=entire&i=0-1-3&type=1',
\t\t\t\tts3:'?url=account&i=0-1-4&type=1',
\t\t\t\tts4:'?url=customer&i=0-1-5&type=1',
\t\t\t\tts5:'?url=tax&i=0-1-6&type=1',
\t\t\t\tts6:'?url=single&i=0-1-7&type=1',
\t\t\t\tqk:'?url=lackOfrecord&i=0-5-0&type=1',
\t\t\t\tkp:'?url=pf_billing&i=0-2-10&type=1',
\t\t\t\tbook:'?url=contacts&i=0-2-5&type=1',
\t\t\t\tht:'?url=contracts&i=0-3-0&type=1',
\t\t\t\tzc:'?url=expenditure&i=0-5-4&type=1',
\t\t\t\tck:'?url=depotOutGo&i=0-4-1&type=1',
\t\t\t\trk:'?url=depotStorage&i=0-4-0&type=1',
\t\t\t\tpd:'?url=depotCheck&i=0-4-3&type=1',
\t\t\t\tjd:'?url=financeBorrow&i=0-5-5&type=1',
\t\t\t\tlxjl:'?url=contactRecord&i=0-2-4&type=1',
\t\t\t\topp:'?url=opportunity&i=0-2-8&type=1',
\t\t\t\tplan:'?url=journal&i=0-2-6&type=1',
\t\t\t\ttd:'?url=depotChargeback&i=0-4-2&type=1',
\t\t\t\tvisit:'?url=visit&i=0-2-9&type=1',
\t\t\t\twage:'?url=wages&i=0-5-3&type=1',
\t\t\t\tschedule:'?url=schedule&i=0-2-7&type=1'
\t\t\t}

\t\t\t
\t\t\t//var num = \$('#mesConBox').length();
\t\t\t//alert(num)
\t\t\t//加载通知
\t\t\tfunction addInfoList(res){
\t\t\t\tvar data=res.data;
\t\t\t\tvar datas = {
\t\t\t\t\tbill_list:data.bill_list,//开票
\t\t\t\t\tbook_list:data.book_list,//联系人
\t\t\t\t\tcontract_list:data.contract_list,//合同
\t\t\t\t\texpenditure_list:data.expenditure_list,//支出
\t\t\t\t\tin_list:data.in_list,//入库
\t\t\t\t\tinventory_list:data.inventory_list,//出库
\t\t\t\t\tloan_list:data.loan_list,//借贷
\t\t\t\t\tlog_list:data.log_list,//联系记录
\t\t\t\t\topportunity_list:data.opportunity_list,//商机
\t\t\t\t\tout_list:data.out_list,//出库
\t\t\t\t\tplan_out_list:data.plan_out_list,//日程
\t\t\t\t\tplan_list:data.plan_list,//日志
\t\t\t\t\tretreat_list:data.retreat_list,//退单
\t\t\t\t\tvisit_list:data.visit_list,//拜访
\t\t\t\t\twages_list:data.wages_list//工资
\t\t\t\t}

\t\t\t\tvar totalNum = 0;
\t\t\t\tvar li = '';
\t\t\t\tvar status_1 = ['待审核','不通过'];
\t\t\t\tvar status_3 = ['未成交','已成交','挂起中'];
\t\t\t\tvar status_2 = ['待审核','未通过','已审核'];
\t\t\t\t//开票通知,完成
\t\t\t\tfor (var i in datas.bill_list) {
\t\t\t\t\ttotalNum++;
\t\t\t\t\tli+=`<li data-clipboard-text='\${customers[datas.bill_list[i]['customer_id']]}' type=\"kp\">
\t\t\t\t\t\t\t<div class=\"mesTitle\" style=\"color:#00ffff\"> \${customers[datas.bill_list[i]['customer_id']]} </div>
\t\t\t\t\t\t\t<label class=\"mesTitle\" style=\"margin-top:6px\">开票单号：\${datas.bill_list[i]['bill_id']}</label>
\t\t\t\t\t\t\t<label class=\"mesStatus\" style=\"top:35px\">待审批</label>
\t\t\t\t\t\t</li>`
\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t//联系人通知
\t\t\t\tfor (var i in datas.book_list) {
\t\t\t\t\ttotalNum++;
\t\t\t\t\tli+=`<li data-clipboard-text='\${datas.book_list[i]['name']}' type=\"book\">
\t\t\t\t\t\t\t<div class=\"mesTitle\" style=\"color:#00ffff \"> \${datas.book_list[i]['name']} </div>
\t\t\t\t\t\t\t<label class=\"mesTitle\"style=\"margin-top:6px\">待添加联系人</label>
\t\t\t\t\t\t\t<label class=\"mesStatus\" style=\"top:35px\"></label>
\t\t\t\t\t\t</li>`
\t\t\t\t}

\t\t\t\t//合同通知，完成
\t\t\t\tfor (var i in datas.contract_list) {
\t\t\t\t\tif (datas.contract_list[i]['auth_status1']!=2) {
\t\t\t\t\t\ttotalNum++;
\t\t\t\t\tli+=`<li data-clipboard-text='\${datas.contract_list[i]['customer_name']}' type=\"ht\">
\t\t\t\t\t\t\t<div class=\"mesTitle\" style=\"color:#00ffff\">\${datas.contract_list[i]['customer_name']}</div>
\t\t\t\t\t\t\t<label class=\"mesTitle\" style=\"margin-top:6px\">合同订单号：\${datas.contract_list[i]['contract_code']}</label>
\t\t\t\t\t\t\t<label class=\"mesStatus\" style=\"top:35px\">\${status_1[datas.contract_list[i]['auth_status1']]}</label>
\t\t\t\t\t\t</li>`
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t//支出
\t\t\t\tfor (var i in datas.expenditure_list) {
\t\t\t\t\tif (datas.expenditure_list[i]['status']!=1) {
\t\t\t\t\t\ttotalNum++;
\t\t\t\t\tli+=`<li data-clipboard-text='\${customers[datas.expenditure_list[i]['customer_id']]}' type=\"zc\">
\t\t\t\t\t\t\t<div class=\"mesTitle\" style=\"color:#00ffff\">\${customers[datas.expenditure_list[i]['customer_id']]}</div>
\t\t\t\t\t\t\t<label class=\"mesTitle\" style=\"margin-top:6px\">合同订单号：\${datas.expenditure_list[i]['contract_code']}</label>
\t\t\t\t\t\t\t<label class=\"mesStatus\" style=\"top:35px\">\${status_2[datas.expenditure_list[i]['status']]}</label>
\t\t\t\t\t\t</li>`
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t//入库通知，完成
\t\t\t\tfor (var i in datas.in_list) {
\t\t\t\t\tif (datas.in_list[i]['status']!=2) {
\t\t\t\t\t\ttotalNum++;
\t\t\t\t\tli+=`<li data-clipboard-text='\${datas.in_list[i]['customer_name']}' type=\"rk\">
\t\t\t\t\t\t\t<div class=\"mesTitle\" style=\"color:#00ffff\">\${datas.in_list[i]['customer_name']}</div>
\t\t\t\t\t\t\t<label class=\"mesTitle\" style=\"margin-top:6px\">入库单号：\${datas.in_list[i]['num']}</label>
\t\t\t\t\t\t\t<label class=\"mesStatus\" style=\"top:35px\">\${status_1[datas.in_list[i]['status']]}</label>
\t\t\t\t\t\t</li>`
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t//盘点
\t\t\t\tfor(var i in datas.inventory_list){
\t\t\t\t\tif (datas.inventory_list[i]['status']!=2) {
\t\t\t\t\t\ttotalNum++;
\t\t\t\t\t\tli+=`<li data-clipboard-text='\${customers[datas.inventory_list[i]['customer_id']]}' type=\"pd\">
\t\t\t\t\t\t\t\t<div class=\"mesTitle\" style=\"color:#00ffff\">\${customers[datas.inventory_list[i]['customer_id']]}</div>
\t\t\t\t\t\t\t\t<label class=\"mesTitle\" style=\"margin-top:6px\">盘点编号：\${datas.inventory_list[i]['num']}</label>
\t\t\t\t\t\t\t\t<label class=\"mesStatus\" style=\"top:35px\">\${status_2[datas.inventory_list[i]['status']]}</label>
\t\t\t\t\t\t\t</li>`
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t//借贷通知
\t\t\t\tfor (var i in datas.loan_list) {
\t\t\t\t\ttotalNum++;
\t\t\t\t\tli+=`<li data-clipboard-text='\${customers[datas.loan_list[i]['cid']]}' type=\"jd\">
\t\t\t\t\t\t\t<div class=\"mesTitle\" style=\"color:#00ffff\">\${customers[datas.loan_list[i]['cid']]}</div>
\t\t\t\t\t\t\t<label class=\"mesTitle\" style=\"margin-top:6px\">借款：\${datas.loan_list[i]['num']}</label>
\t\t\t\t\t\t\t<label class=\"mesStatus\" style=\"top:35px\">\${status_1[datas.loan_list[i]['status']]}</label>
\t\t\t\t\t\t</li>`
\t\t\t\t}

\t\t\t\t//联系记录通知，完成
\t\t\t\tfor (var i in datas.log_list) {
\t\t\t\t\ttotalNum++;
\t\t\t\t\tli+=`<li data-clipboard-text='\${customers[datas.log_list[i]['customer_id']]}' type=\"lxjl\">
\t\t\t\t\t\t\t<div class=\"mesTitle\" style=\"color:#00ffff\">\${datas.log_list[i]['customer_name']}</div>
\t\t\t\t\t\t\t<label class=\"mesTitle\" style=\"margin-top:6px;text-overflow:ellipsis;text-align:left;width:200px\">联系内容：\${datas.log_list[i]['contact_msg']}</label>
\t\t\t\t\t\t\t<label class=\"mesStatus\" style=\"top:35px\">\${cs.getNowTime(datas.log_list[i]['log_time'])}</label>
\t\t\t\t\t\t</li>`
\t\t\t\t}

\t\t\t\t//商机通知,完成
\t\t\t\tfor (var i in datas.opportunity_list) {
\t\t\t\t\tif (datas.opportunity_list[i]['status']==0) {
\t\t\t\t\t\ttotalNum++;
\t\t\t\t\tli+=`<li data-clipboard-text='\${datas.opportunity_list[i]['customer_name']}' type=\"opp\">
\t\t\t\t\t\t\t<div class=\"mesTitle\" style=\"color:#00ffff\">\${datas.opportunity_list[i]['customer_name']}</div>
\t\t\t\t\t\t\t<label class=\"mesTitle\" style=\"margin-top:6px\">商机名称：\${datas.opportunity_list[i]['name']}</label>
\t\t\t\t\t\t\t<label class=\"mesStatus\" style=\"top:35px\">\${status_3[datas.opportunity_list[i]['status']]}</label>
\t\t\t\t\t\t</li>`
\t\t\t\t\t}
\t\t\t\t}\t

\t\t\t\t//出库，完成
\t\t\t\tfor (var i in datas.out_list) {
\t\t\t\t\tif (datas.out_list[i]!=2) {
\t\t\t\t\t\ttotalNum++;
\t\t\t\t\tli+=`<li data-clipboard-text='\${datas.out_list[i]['customer_name']}' type=\"ck\">
\t\t\t\t\t\t\t<div class=\"mesTitle\" style=\"color:#00ffff\">\${datas.out_list[i]['customer_name']}</div>
\t\t\t\t\t\t\t<label class=\"mesTitle\" style=\"margin-top:6px\">出库单号：\${datas.out_list[i]['num']}</label>
\t\t\t\t\t\t\t<label class=\"mesStatus\" style=\"top:35px\">\${status_1[datas.out_list[i]['status']]}</label>
\t\t\t\t\t\t</li>`
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t//日程，完成
\t\t\t\tvar themes = ['','处理税务','业务签单','注册公司','变更公司','注册商标','注销公司','外勤配送','网站建设'];
\t\t\t\tfor (var i in datas.plan_out_list) {
\t\t\t\t\ttotalNum++;
\t\t\t\t\tli+=`<li type=\"schedule\" >
\t\t\t\t\t\t\t<div class=\"mesTitle\" style=\"color:#00ffff\">\${themes[datas.plan_out_list[i]['tkm_plan_out.title']]}</div>
\t\t\t\t\t\t\t<label class=\"mesTitle\" style=\"margin-top:6px\">\${datas.plan_out_list[i]['ckm_position.name']}：\${cs.getNowTime(datas.plan_out_list[i]['tkm_plan_out.plan_time'])}</label>
\t\t\t\t\t\t\t<label class=\"mesStatus\" style=\"top:35px\">未完成</label>
\t\t\t\t\t\t</li>`;
\t\t\t\t}

\t\t\t\t//日志，完成
\t\t\t\tvar title = ['处理税务','业务签单','注册公司','变更公司','注册商标','注销公司','外勤配送','网站建设'];
\t\t\t\tfor (var i in datas.plan_list) {
\t\t\t\t\tif (datas.plan_list[i]['type']==1) {
\t\t\t\t\t\ttotalNum++;
\t\t\t\t\tli+=`<li type=\"plan\">
\t\t\t\t\t\t\t<label class=\"mesTitle\" >日志提醒：</label>
\t\t\t\t\t\t\t<label class=\"mesStatus\">今天的日志还未填写，不要忘记哦</label>
\t\t\t\t\t\t</li>`
\t\t\t\t\t}
\t\t\t\t\tif (datas.plan_list[i]['type']==2 && new Date().getDay() == 4) {
\t\t\t\t\t\t
\t\t\t\t\t\ttotalNum++;
\t\t\t\t\tli+=`<li type=\"plan\">
\t\t\t\t\t\t\t<label class=\"mesTitle\" >日志提醒：</label>
\t\t\t\t\t\t\t<label class=\"mesStatus\">本周的日志还未填写，不要忘记哦</label>
\t\t\t\t\t\t</li>`
\t\t\t\t\t}
\t\t\t\t\tif (datas.plan_list[i]['type']==3 && new Date().getDate() > 27) {
\t\t\t\t\t\ttotalNum++;
\t\t\t\t\tli+=`<li type=\"plan\">
\t\t\t\t\t\t\t<label class=\"mesTitle\" >日志提醒：</label>
\t\t\t\t\t\t\t<label class=\"mesStatus\">本月的日志还未填写，不要忘记哦</label>
\t\t\t\t\t\t</li>`
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t//退单
\t\t\t\tfor(var i in datas.retreat_list){
\t\t\t\t\tif (datas.retreat_list[i]['auth_status']!=2) {
\t\t\t\t\t\ttotalNum++;
\t\t\t\t\t\tli+=`<li data-clipboard-text='\${datas.retreat_list[i]['customer_name']}' type=\"td\">
\t\t\t\t\t\t\t<div class=\"mesTitle\" style=\"top:8px;color:#00ffff\">\${datas.retreat_list[i]['customer_name']}</div>
\t\t\t\t\t\t\t<label class=\"mesTitle\" style=\"top:12px\">退单</label>
\t\t\t\t\t\t\t<label class=\"mesStatus\" style=\"top:12px\">\${status_1[datas.retreat_list[i]['auth_status']]}</label>
\t\t\t\t\t\t</li>`
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t//拜访，完成
\t\t\t\tfor(var i in datas.visit_list){
\t\t\t\t\tif (datas.visit_list[i]['status']==0||datas.visit_list[i]['status']==2) {
\t\t\t\t\t\ttotalNum++;
\t\t\t\t\t\tli+=`<li data-clipboard-text='\${datas.visit_list[i]['customer_name']}' type=\"visit\">
\t\t\t\t\t\t\t<div class=\"mesTitle\" style=\"top:8px;color:#00ffff\">\${datas.visit_list[i]['customer_name']}</div>
\t\t\t\t\t\t\t<label class=\"mesTitle\" style=\"top:12px\">拜访主题：\${datas.visit_list[i]['theme']}</label>
\t\t\t\t\t\t\t<label class=\"mesStatus\" style=\"top:12px\">\${status_3[datas.visit_list[i]['status']]}</label>
\t\t\t\t\t\t</li>`
\t\t\t\t\t}
\t\t\t\t}\t

\t\t\t\t//工资通知，完成\t\t
\t\t\t\tfor(var i in datas.wages_list){

\t\t\t\t\tif (datas.wages_list[i]['is_sign']==0) {
\t\t\t\t\t\ttotalNum++;
\t\t\t\t\t\tli+=`<li data-clipboard-text='\${datas.wages_list[i].userInfo['name']}' type=\"wage\">
\t\t\t\t\t\t\t<div class=\"mesTitle\" style=\"top:8px;color:#00ffff\">\${datas.wages_list[i].userInfo['name']}</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<label class=\"mesTitle\" style=\"top:12px\">\${(datas.wages_list[i].month +\"工资表\")}</label>
\t\t\t\t\t\t\t<label class=\"mesStatus\" style=\"top:12px\">未复核</label>
\t\t\t\t\t\t</li>`
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t\$('#infoList').html(li);
\t\t\t\t\$('.tz').html(\$('#infoList').find('li').length);
\t\t\t\t//var nowNum = parseInt(\$('.badge').text().trim());
\t\t\t\t//console.log(\$('.badge').text().trim());
\t\t\t\t//console.log(totalNum+nowNum)
\t\t\t\tvar numbers = \$('#mesConBox').find('li').length;
\t\t\t\tif (numbers>99) {
\t\t\t\t\tnumbers = \"99+\";
\t\t\t\t}
\t\t\t\t\$('.badge').text(numbers);
\t\t\t\ttzPageOnTaskAndInfo();
\t\t\t}

\t\t//任务和通知点击跳转
\t\tfunction tzPageOnTaskAndInfo(){
\t\t\t\$('#taskList li,#infoList li').unbind('click').click(function(){
\t\t\t\tvar type=\$(this).attr('type');
\t\t\t\tif (type!='plan' && type != 'schedule') {
\t\t\t\t\tykp.prompt('已将公司名称复制到剪贴板！');
\t\t\t\t}
\t\t\t\tif (type=='wage') {
\t\t\t\t\tykp.prompt('已将员工姓名复制到剪贴板！');
\t\t\t\t}
\t\t\t\tskPage(type_url[type]);
\t\t\t})
\t\t}

\t\tgetAllInfo();
\t\t//显示所有通知
\t\tfunction getAllInfo(){
\t\t\tykp.doAjax({
\t\t\t\turl:'/api/api_home/get_my_tz',
\t\t\t\tmethod:'get',
\t\t\t\tanync:false,
\t\t\t\tsuccess:function(res){
\t\t\t\t\taddInfoList(res);
\t\t\t\t\t
\t\t\t\t}
\t\t\t})
\t\t}

\t\tcopys();//点击将公司名称复制到剪切板
\t\tfunction copys() {
\t\t\t//设置任务列表的点击事件
\t\t\tvar task = new Clipboard('#taskList li');
\t\t    task.on('success', function(e) {

\t\t        // console.log(e);
\t\t    });
\t\t    task.on('error', function(e) {
\t\t        // console.log(e);
\t\t    });
\t\t    //设置通知列表的点击事件
\t\t    var info = new Clipboard('#infoList li');
\t\t    info.on('success', function(e) {
\t\t        // console.log(e);
\t\t    });
\t\t    info.on('error', function(e) {
\t\t        // console.log(e);
\t\t    });
\t\t}

\t\t//顶部搜索框显示  隐藏
\t\t\$('.nav-user-search').click(function(){
\t\t\tif(\$(this).hasClass('rightnow')){
\t\t\t\t\$(this).removeClass('rightnow').next().hide();
\t\t\t\treturn;
\t\t\t}
\t\t\t\$(this).addClass('rightnow').next().show();
\t\t});
\t\t//打开弹框
\t\t\$('#open').click(function() {
            if(\$('#messageCon').css('right')=='-320px'){
               getAllInfo();
               allTask();
               getMessageList();
               \$('#messageCon').css('right', '0px')
            }else {
                \$('#messageCon').css('right', '-320px')
            }

\t\t})

\t\t\t
\t\tgetUserinfo();\t\t//获取用户信息
\t\tgetMessageList();   //获取消息列表
\t\tsetLeftMinHeight();  //设置侧边栏minHeight
\t\tsetCurrentLeftHeight();

\t\t//判断是否登录，获取用户信息
\t\tfunction getUserinfo() {
\t\t\tif(!ykp.getCookie('uid')) {
\t\t\t\t\$('#noLogin').css('display', 'block');
\t\t\t\t\$('#loginIn').css('display', 'none');
\t\t\t} else {
\t\t\t\t\$('#noLogin').css('display', 'none');
\t\t\t\t\$('#loginIn').css('display', 'block');
\t\t\t\t\$('#NickName').text(JSON.parse(ykp.getCookie('userinfo')).name);
\t\t\t\tvar avatar= JSON.parse(ykp.getCookie('userinfo')).avatar || '/resource/adimin/assets/images/avatar.png';

\t\t\t\t\$('#showprofile').attr('src', avatar);
\t\t\t}
\t\t}

\t\t//设置当前侧边栏height
\t\tfunction setCurrentLeftHeight(){
\t\t\tvar dHeight = \$(document.body).height();
\t\t\tvar uHeight = \$('#sidebar .left>ul:visible').height();
\t\t\tvar wHeight = \$(window).height();
\t\t\tif(dHeight >= uHeight){
\t\t\t\t\$('#sidebar .left>ul:visible').parent().css('height',dHeight+ 'px');
\t\t\t} else {
\t\t\t\t\$('#sidebar .left>ul:visible').parent().css('height',uHeight+ 'px');
\t\t\t}
//\t\t\t\$('.goMini').css('top',((wHeight/2)-158)+'px');
\t\t\t\$('.goMini').css('bottom','0px');
//\t\t\t\$('.goMini').css('top',(uHeight / 2 - 50) + 'px');
\t\t}

\t\tfunction setLeftMinHeight() {
\t\t\tvar height = \$(window).height();
\t\t\t//console.log(height);
\t\t\t\$('#contentBox').css('height',(height-91) + 'px');
\t\t\t\$('.left').css('min-height',(height - 90) + 'px');
\t\t\t\$(\"#goMinibox\").css(\"top\",(height-30)+ 'px').show();
\t\t\t\$(window).resize(function(){
\t\t\t\theight = \$(window).height();
\t\t\t\t//console.log(height);
//\t\t\t\t\$('.custom_table').css('height',(height-350) + 'px')
\t\t\t\t\$('#contentBox').css('height',(height-91) + 'px');
\t\t\t\t\$('.left').css('min-height',(height - 90) + 'px');
\t\t\t\t\$(\"#goMinibox\").css(\"top\",(height-30)+ 'px');
\t\t\t\t
\t\t\t});
\t\t}

\t\t//阅读消息
\t\tfunction readMsg(){
\t\t\t\$(\"#msgList li\").click(function(){
\t\t\t\t
\t\t\t\t\$(\"#contacts\").val(\$(this).find('img').attr('data-id')).trigger('change')
\t\t\tvar dat=\$(this).find('.msgcon').text();
\t\t\tcopys(dat);
\t\t\tif (\$(this).attr(\"isread\")==1){
\t\t\t\t\$(this).find(\".user-info\").addClass(\"showTheInfo\");
\t\t\t\treturn;
\t\t\t}
\t\t\t\$(this).find(\".user-info\").addClass(\"showTheInfo\");
\t\t\t\$(this).find(\".readmark\").css(\"background\",'');
\t\t\tvar id = \$(this).attr(\"data-id\");
\t\t\tykp.doAjax({
\t\t\t\turl:'/api/api_msg/read_msg',
\t\t\t\tdata:{id:id},
\t\t\t\tmethod:'post',
\t\t\t\tsuccess:function(res){

\t\t\t\t}
\t\t\t\t})
\t\t\t})
\t\t}

\t\tsendMsg();
\t\t//发消息
\t\tfunction sendMsg(){
\t\t\t\$(\".send\").click(function(){
\t\t\t\tvar emp_id=\$(\"#contacts\").val();
\t\t\t\tvar msg=\$(\"#msg\").val();
\t\t\t\t\$(\"#msg\").val('');
\t\t\t\tykp.doAjax({
\t\t\t\t\turl:'/api/api_msg/add',
\t\t\t\t\tdata:{to_user:emp_id,content:msg},
\t\t\t\t\tmethod:'post',
\t\t\t\t\tsuccess:function(res){
\t\t\t\t\t\tykp.prompt('发送成功！');
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})
\t\t}

\t\t\t//getNoRead();
\t\t//获取未读消息数
\t\tfunction getNoRead(){
\t\t\tykp.doAjax({
\t\t\t\turl:'/api/api_msg/get_not_read',
\t\t\t\tmethod:'get',
\t\t\t\tsuccess:function(res){
\t\t\t\t\tvar totalNum =res.data.length;
\t\t\t\t\t//\$('.badge').text(parseInt(\$('.badge').text())+totalNum);
\t\t\t\t\t/*if (num>99) {
\t\t\t\t\t\ttotalNum='99+';
\t\t\t\t\t\treturn;
\t\t\t\t\t}*/
\t\t\t\t}
\t\t\t})
\t\t}\t

\t\t//图片路径错误处理
\t\tfunction imgErrorHandle(){
\t\t\t\$('#msgList img').unbind('error').error(function(){
\t\t\t\t\$(this).attr('src','/resource/adimin/assets/images/avatar.png');
\t\t\t});
\t\t}

\t\t//获取消息列表
\t\tfunction getMessageList(){
\t\t\tvar msgHtml = \"\";
\t\t\tykp.doAjax({
\t\t\t\turl:'/api/api_msg/get_list',
\t\t\t\tmethod:'get',
\t\t\t\tsuccess:function(res){
\t\t\t\t\tvar data=res.data.list;
                    var _data =res.data;
                    for(var i in data) {
\t\t\t\t\t\tmsgHtml += ` <li style=\"padding-right:10px;\" data-id=\"\${data[i].id}\" isread=\"\${data[i].is_read}\" class=\"light-blue dropdown-modal nav ace-nav\">
\t\t                <a data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\" style=\"margin-top: 15px;\">
\t\t                    <img data-id=\"\${data[i].fromInfo.id}\" class=\"nav-user-photo \" style=\"top: 15px;\" src=\"\${data[i]['fromInfo']['avatar'] || '/resource/adimin/assets/images/avatar.png'}\"
\t\t                         alt=\"Jason's Photo\">
\t\t                    <span class=\"user-info msgcon\" style=\"margin-top: 4px; color: #00ffff;\">
                                <small style=\"color: #00a3ff;margin-bottom: 4px;\">\${data[i].fromInfo.name}</small>
                                \${data[i].content}
                            </span>
\t\t                </a>
\t\t                <span style=\" display: block;font-size: 12px; line-height: 10px !important; float: right;position: absolute;top:17px;right: 10px;\">\${data[i]['read_time'] ? cs.getNowTime(data[i]['read_time'],true) :  cs.getNowTime(data[i]['create_at'],true)}</span>
\t\t                <span class=\"readmark\" style=\"display:inline-block;height:8px;width:8px; border-radius:5px 5px;background:\${data[i].is_read==0?'red':''};position: absolute;top:23px;right: 17px;\"></span>
\t\t            </li>`;
\t\t\t}
\t\t\t\t\$('#msgList').html(msgHtml);
\t\t\t\t\$('.message').html(_data.not_read ? _data.not_read :0);
\t\t\t\t//图片路径错误处理
\t\t\t\t// imgErrorHandle();

\t\t\t\tvar numbers = \$('#mesConBox').find('li').length;
\t\t\t\tif (numbers>99) {
\t\t\t\t\tnumbers = \"99+\";
\t\t\t\t}
\t\t\t\t\$('.badge').text(numbers);
\t\t\t\treadMsg();
\t\t\t\t}
\t\t\t})
\t\t}

\t\t\$('#onProcess').remove()
\t\tvar div = document.createElement(\"div\");
\t\tvar html = '<div class=\"dataTables_processing\" id=\"onProcess\">' + '<div id=\"mark\"></div><div class=\"note-success\" style=\"padding:10px;border-radius:10px;\">' + '<img  style=\"margin-right:10px;top:-1px;display: inline-block; position:relative\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABAElEQVQ4T6WTUVEDQRBEXysgcRAcBAUEBSABFICE4AAHHA5wACgACZGAg6Z6a44ix90FKv2ztTUzPdO9s+JIaKre9hXwWPELSR9juXMEr8B5Fb1J2theA5+Sdj3ZHMEzcFmJT0AIf06UO3sEtq+BlaSt7QWwTUfgAQhhP9F9cn4RzPlZnnSVs+k9mZTw18f5JrAd1qbrwCSRcwt0km4aQbn7DiwlRfMkbCd+0vQHhzoO42V0zM4E3b8JhoRjz7iQFJ17sL0CInMn6Wx0kWznrdeSkhxv2pnNi8nASxWe9ts4nCDLk4JmZBlmScu639UEadQw64Ht9oEk5Q+M4mgTvwDVbGURV0/HhAAAAABJRU5ErkJggg==\" class=\"rotate\"/>' + '<span style=\"font-size:14px;\">' + '数据玩命加载中...' + '</div>' + '</div>'
\t\tdiv.innerHTML = \"\";
\t\t//页面出初始化  判断是分享页面还是自己登陆的页面链接
\t\tif(getUrlParam('url') == 'null' || getUrlParam('i') == 'null' || getUrlParam('type') == 'null' || getUrlParam('url') == null || getUrlParam('url') == null || getUrlParam('url') == null) {
//\t\t\tconsole.log(getUrlParam('i'));
\t\t\tvar home_url = \$('#navBox #nav-list:first').find('li').eq(0).attr('data-url');
\t\t\tvar url = 'http://' + window.location.host + home_url;
\t\t\tvar data = {
\t\t\t\tcurrentIndex: '0-0',
\t\t\t\tliType: '0'
\t\t\t}
\t\t\tgetPageContent(url, true, data);
\t\t\t//bottonLine
\t\t\tvar left = \$('#sidebar-shortcuts-large .btn').first().position().left;
\t\t\t\$('.bottonLine').css('left', left + 'px');
\t\t}

\t\t//分享页面功能
\t\tgetShare();
\t\tfunction getShare() {
\t\t\tvar getUrl = getUrlParam('url');
\t\t\t//当前为首页时  时没有url值的
\t\t\tvar dataIndex = getUrlParam('i') ? getUrlParam('i').split('-') : null;
\t\t\tvar dataLi = getUrlParam('type');
\t\t\tvar text = '';
\t\t\tif(dataIndex) {
\t\t\t\tif(dataLi == 0) {
\t\t\t\t\tvar thisEl = \$('#navBox #nav-list').eq(dataIndex[0]).children('li').eq(dataIndex[1]).addClass('active').siblings().removeClass('active').removeClass('active1');
\t\t\t\t\tthisEl.parents('#nav-list').siblings().children('li').removeClass('active').removeClass('active1');
\t\t\t\t\tthisEl.parents('#nav-list').siblings().children('li').find('.submenu').children().removeClass('active').removeClass('active1');
\t\t\t\t\tthisEl.parents('#nav-list').siblings().children('li').find('.submenu').stop().slideUp();
\t\t\t\t\tthisEl.parents('#nav-list').find('li .submenu').slideUp();
\t\t\t\t\ttext = \$('#navBox #nav-list').eq(dataIndex[0]).children('li').eq(dataIndex[1]).find('a').text();
\t\t\t\t\t//控制顶部左侧栏顶部操作
\t\t\t\t\t\$(\"#sidebar-shortcuts-large .btn\").eq(dataIndex[0]).attr('id', 'btn').siblings().attr('id', '');
\t\t\t\t\tvar left = \$(\"#sidebar-shortcuts-large .btn\").eq(dataIndex[0]).position().left;
\t\t\t\t\tvar navList = \$(\"#navBox .nav-list\");
\t\t\t\t\tnavList.eq(dataIndex[0]).css('display', 'block').siblings().css('display', 'none');
\t\t\t\t\t\$('.bottonLine').css('left', left);
\t\t\t\t} else {
\t\t\t\t\tvar thatEl = \$('#navBox #nav-list').eq(dataIndex[0]).children('li').eq(dataIndex[1]);
\t\t\t\t\tthatEl.parents('#nav-list').siblings().children('li').removeClass('active').removeClass('active1');
\t\t\t\t\tthatEl.addClass('active').addClass('active1').find('li').eq(dataIndex[2]).addClass('active1').addClass('active').siblings().removeClass('active').removeClass('active1');
\t\t\t\t\tthatEl.find('.submenu').stop().slideDown();
\t\t\t\t\tthatEl.siblings().removeClass('active').removeClass('active1').find('li').removeClass('active').removeClass('active1')
\t\t\t\t\tthatEl.siblings().find('.submenu').stop().slideUp();

\t\t\t\t\ttext = \$('#navBox #nav-list').eq(dataIndex[0]).children('li').eq(dataIndex[1]).children('.submenu').find('li').eq(dataIndex[2]).find('a').text();
\t\t\t\t\t//控制顶部左侧栏顶部操作
\t\t\t\t\t\$(\"#sidebar-shortcuts-large .btn\").eq(dataIndex[0]).attr('id', 'btn').siblings().attr('id', '');
\t\t\t\t\tvar left = \$(\"#sidebar-shortcuts-large .btn\").eq(dataIndex[0]).position().left;
\t\t\t\t\tvar navList = \$(\"#navBox .nav-list\");
\t\t\t\t\tnavList.eq(dataIndex[0]).css('display', 'block').siblings().css('display', 'none');
\t\t\t\t\t\$('.bottonLine').css('left', left);
\t\t\t\t}

\t\t\t\tdataIndex = dataIndex.join('-')
\t\t\t\tvar data = {
\t\t\t\t\tcurrentIndex: dataIndex,
\t\t\t\t\tliType: dataLi
\t\t\t\t}

\t\t\t\tgetPageContent(getUrl, true, data);
\t\t\t\tvar num = 0;
\t\t\t\tif(dataIndex != '0-0') {
\t\t\t\t\t\$('.navCon .page-tabs-content').find('a').each(function(i, item) {
\t\t\t\t\t\tif(\$(this).attr('data-url') == getUrl) {
\t\t\t\t\t\t\t\$(this).addClass('active').parent().siblings().find('a').removeClass('active');
\t\t\t\t\t\t\tnum += 1;
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t}

\t\t\t\tif(num == 0 && dataIndex != '0-0') {
\t\t\t\t\tvar navConCon = '<div class=\"page-tabs-content\"><a class=\"active\" data-index=\"' + dataIndex + '\" data-li=\"' + dataLi + '\" data-url=\"' + getUrl + '\">' + text + '<i id=\"fa-close\" class=\"iconfont tit-close\">&#xe618;</i></a></div>';
\t\t\t\t\t\$('.navCon').append(navConCon);
                    \$('.pageTable').scrollLeft(\$('.pageTable').scrollLeft() + 200);
\t\t\t\t\t\$('.navCon .page-tabs-content').eq(0).children('a').removeClass('active');
\t\t\t\t}
\t\t\t}
\t\t}

\t\t\$('#userInfo').click(function() {
\t\t\tvar url = \$(this).attr('data-url');
\t\t\tvar dataIndex = getUrlParam('i') ? getUrlParam('i') : null;
\t\t\tvar dataLi = getUrlParam('type');
\t\t\tvar data = {
\t\t\t\tcurrentIndex: dataIndex,
\t\t\t\tliType: dataLi
\t\t\t}
\t\t\tgetPageContent(url, true, data);
\t\t})


        \$('#showprofile').click(function () {
           \$(\"#sidebar-shortcuts-large\").find(\".btn\").eq(3).click();
           \$(\"#navBox\").find('.nav-list').eq(3).find(\"li\").last().click();
        })

\t\t\$('#navBox #nav-list li').click(function() {
\t\t\tvar currentIndex = ''; //index集合
\t\t\tvar liType = ''; //判断是够是一级菜单还是二级菜单  0为1级   1 为2级
\t\t\tif(!\$(this).hasClass('active1')) {
\t\t\t\t\$(this).addClass('active1')
\t\t\t\t\$(this).parents('#nav-list').siblings().children('li').removeClass('active');

\t\t\t\t//当为第一栏时
\t\t\t\tif(\$(this).parents('#nav-list').siblings().eq(0)) {
\t\t\t\t\t\$(this).parents('#nav-list').siblings().children('li').removeClass('active').removeClass('active1');
\t\t\t\t\t\$(this).parents('#nav-list').siblings().children('li').find('.submenu').children().removeClass('active').removeClass('active1')
\t\t\t\t\t\$(this).parents('#nav-list').siblings().children('li').find('.submenu').stop().slideUp();
\t\t\t\t} else { //当不为第一栏时
\t\t\t\t\t\$(this).parents('#nav-list').siblings().children('li').removeClass('active').removeClass('active1');
\t\t\t\t}

\t\t\t\t//选中当前一级导航添加选中属性  其他移除选中状态
\t\t\t\t\$(this).addClass('active').siblings().removeClass('active').removeClass('active1');
\t\t\t\t//二级子节点删除选中状态
\t\t\t\t\$(this).siblings().find('.submenu').children('li').removeClass('active').removeClass('active1');
\t\t\t\t\$(this).siblings().find('.submenu').stop().slideUp(function(){
//\t\t\t\t\t\$('.goMini').css('top',(\$('#sidebar .left>ul:visible').height() / 2 - 50) + 'px');
\t\t\t\t})
\t\t\t\t//二级菜单展开
\t\t\t\t\$(this).find('.submenu').stop().slideDown(function(){
//\t\t\t\t\t\$('.goMini').css('top',(\$('#sidebar .left>ul:visible').height() / 2 - 50) + 'px');
\t\t\t\t});

\t\t\t\tif(!\$(this).hasClass('menuB')) {
\t\t\t\t\tif(\$(this).parent().parent().hasClass('menuB')) {
\t\t\t\t\t\tvar first = \$(this).parents('#nav-list').index().toString();
\t\t\t\t\t\tvar scend = \$(this).parent().parent().index().toString();
\t\t\t\t\t\tvar three = \$(this).index().toString();
\t\t\t\t\t\tcurrentIndex = (first + '-' + scend + '-' + three);
\t\t\t\t\t\tliType = 1;
\t\t\t\t\t} else {
\t\t\t\t\t\tvar _first = \$(this).parents('#nav-list').index().toString();
\t\t\t\t\t\tvar _scend = \$(this).index().toString();
\t\t\t\t\t\tcurrentIndex = (_first + '-' + _scend);
\t\t\t\t\t\tliType = 0;
\t\t\t\t\t}

\t\t\t\t\tvar length = \$('.navCon .page-tabs-content').length;
\t\t\t\t\t//右上navCon选项卡
\t\t\t\t\tvar text = \$(this).text().trim();
\t\t\t\t\tvar _url = \$(this).attr('data-url');
\t\t\t\t\t_url = _url.slice(_url.lastIndexOf('/') + 1, _url.length);
\t\t\t\t\tvar num = 0;
\t\t\t\t\t\$('.navCon .page-tabs-content').find('a').each(function(i, item) {
\t\t\t\t\t\tif(\$(this).attr('data-url') == _url) {
\t\t\t\t\t\t\t\$(this).addClass('active').parent().siblings().find('a').removeClass('active');
\t\t\t\t\t\t\tnum += 1;
\t\t\t\t\t\t}
\t\t\t\t\t})

\t\t\t\t\tif(num == 0) {
                        var navConCon = '<div class=\"page-tabs-content\"><a class=\"active\" data-index=\"' + currentIndex + '\" data-li=\"' + liType + '\" data-url=\"' + _url + '\">' + text + '<i id=\"fa-close\" class=\"iconfont tit-close\">&#xe618;</i></a></div>';
\t\t\t\t\t\t\$('.navCon').append(navConCon);
\t\t\t\t\t\t\$('.pageTable').scrollLeft(\$('.pageTable').scrollLeft() + 200);
\t\t\t\t\t}

\t\t\t\t\t//给其他选项卡移除选中事件
\t\t\t\t\t\$('.navCon .page-tabs-content').eq(length).siblings().find('a').removeClass('active');
\t\t\t\t\tvar url = 'http://' + window.location.host + \$(this).attr('data-url');
\t\t\t\t\tvar data = {
\t\t\t\t\t\tcurrentIndex: currentIndex,
\t\t\t\t\t\tliType: liType
\t\t\t\t\t}
\t\t\t\t\tgetPageContent(url, true, data);
\t\t\t\t\tykp.setCookie('filter',\"\");
\t\t\t\t\tykp.setCookie('month2',\"\");
\t\t\t\t}

\t\t\t} else {
\t\t\t\t//双击二级选项卡关闭下拉
\t\t\t\t\$(this).removeClass('active1');
\t\t\t\t\$(this).find('.submenu').stop().slideUp(function(){
//\t\t\t\t\t\$('.goMini').css('top',(\$('#sidebar .left>ul:visible').height() / 2 - 50) + 'px');
\t\t\t\t});
\t\t\t}
\t\t\treturn false;
\t\t})

\t\t//点击顶部选项卡
\t\t\$('.navCon').on('click', '.page-tabs-content', function(){
\t\t\tif(\$(this).find('a').hasClass('active')){
\t\t\t\treturn;
\t\t\t}
\t\t\t
\t\t\tykp.setCookie('filter',\"\");
\t\t\tykp.setCookie('month2',\"\");
\t\t\t
\t\t\tvar _index = \$(this).index();
\t\t\tvar dataIndex = \$(this).find('a').attr('data-index');
\t\t\tvar dataLi = \$(this).find('a').attr('data-li');
\t\t\tgetACtiveEl(dataIndex, dataLi);
\t\t\tchangeMini(dataIndex, dataLi);
\t\t\t\$(this).find('a').addClass('active').parent().siblings().find('a').removeClass('active');
\t\t\tvar url = \$(this).find('a').attr('data-url');
\t\t\tvar currentIndex = \$(this).find('a').attr('data-index');
\t\t\tvar liType = \$(this).find('a').attr('data-li');
\t\t\tvar data = {
\t\t\t\tcurrentIndex: currentIndex,
\t\t\t\tliType: liType
\t\t\t}
\t\t\tgetPageContent(url, false, data);
\t\t})

\t\t//点击顶部选项卡删除按钮
\t\t\$('.navCon').on('click', '.tit-close', function(event) {
\t\t\tif(!\$(this).parent().hasClass('active')){
\t\t\t\treturn false;   //未选中选项卡不可删除
\t\t\t}

\t\t\t//清除LocalStorag缓存
\t\t\tvar index = \$(this).parent().attr('data-index');
\t\t\tykp.delLocalStorage(index);

\t\t\tvar parent = \$(this).parents('.navCon').find('.page-tabs-content');
\t\t\tvar circleindex = \$(this).parents('.page-tabs-content').index();
\t\t\tvar el = \$('.navCon .page-tabs-content').eq(circleindex + 1);
\t\t\tif(\$(this).parent().hasClass('active')) {
\t\t\t\t//判断当前选项卡后面是否有选项卡
\t\t\t\tif(el.length == 1) {
\t\t\t\t\tparent.eq((circleindex + 1)).children('a').addClass('active');
\t\t\t\t\tvar that = parent.eq((circleindex + 1)).children('a');
\t\t\t\t\tvar url = that.attr('data-url');
\t\t\t\t\tvar dataIndex = that.attr('data-index');
\t\t\t\t\tvar dataLi = that.attr('data-li');

\t\t\t\t\tvar data = {
\t\t\t\t\t\tcurrentIndex: dataIndex,
\t\t\t\t\t\tliType: dataLi
\t\t\t\t\t}

\t\t\t\t\tgetACtiveEl(dataIndex, dataLi);
\t\t\t\t\tchangeMini(dataIndex, dataLi);

\t\t\t\t\tgetPageContent(url, false, data);
\t\t\t\t} else {
\t\t\t\t\tparent.eq((circleindex - 1)).children('a').addClass('active');
\t\t\t\t\tvar That = parent.eq((circleindex - 1)).children('a');
\t\t\t\t\tvar url = That.attr('data-url');
\t\t\t\t\tvar dataIndex = That.attr('data-index');
\t\t\t\t\tvar dataLi = That.attr('data-li');
\t\t\t\t\tvar data = {
\t\t\t\t\t\tcurrentIndex: dataIndex,
\t\t\t\t\t\tliType: dataLi
\t\t\t\t\t}

\t\t\t\t\tgetACtiveEl(dataIndex, dataLi);
\t\t\t\t\tchangeMini(dataIndex, dataLi);

\t\t\t\t\tgetPageContent(url, false, data);

\t\t\t\t}
\t\t\t\t\$(this).parents('.page-tabs-content').remove();
\t\t\t\t//防止冒泡
\t\t\t\treturn false;
\t\t\t} else {
\t\t\t\t\$(this).parents('.page-tabs-content').remove();
\t\t\t\t//防止冒泡
\t\t\t\treturn false;
\t\t\t}
\t\t});
\t\t//滚动左右pageNav的滚动条实现左右移动
\t\t\$('.navBarTable .pageleft').unbind('click').click(function() {
            // console.log(1)
            //\$('.pageTable').scrollLeft(\$('.pageTable').scrollLeft() - 200);
\t\t\t\$('.pageTable').animate({scrollLeft:\$('.pageTable').scrollLeft() - 150},500);
\t\t});

\t\t\$('.navBarTable .pageright').unbind('click').click(function() {
            // console.log(2)
            //\$('.pageTable').scrollLeft(\$('.pageTable').scrollLeft() + 200);
\t\t\t\$('.pageTable').animate({scrollLeft:\$('.pageTable').scrollLeft() + 150},500);
\t\t});

\t\t//关闭所有操作
\t\t\$('.pageClose1').click(function() {
\t\t\t
\t\t\t//清除缓存
\t\t\tvar navA = \$('.navCon a');//获取顶部选项卡中所有的a元素
\t\t\tvar indexs = [];
\t\t\tnavA.each(function(){
\t\t\t\tindexs.push(\$(this).attr('data-index'));
\t\t\t});
\t\t\tfor(var i in indexs){
\t\t\t\tif(indexs[i] != '0-0'){
\t\t\t\t\tykp.delLocalStorage(indexs[i]);
\t\t\t\t}
\t\t\t}

\t\t\tvar That1 = \$('.navCon').find('.page-tabs-content').eq(0).children(\"a\");
\t\t\tvar url = That1.attr('data-url');
\t\t\tvar dataIndex = That1.attr('data-index');
\t\t\tvar dataLi = That1.attr('data-li');

\t\t\tvar data = {
\t\t\t\tcurrentIndex: dataIndex,
\t\t\t\tliType: dataLi
\t\t\t}

\t\t\tgetACtiveEl(dataIndex, dataLi);
\t\t\tchangeMini(dataIndex, dataLi);

\t\t\tgetPageContent(url, false, data);
\t\t\t\$('.navCon').find('.page-tabs-content').eq(0).children('a').addClass('active');
\t\t\t\$('.navCon').find('.page-tabs-content').eq(0).siblings().remove();
\t\t})
\t\t
\t\t//关闭其他操作
\t\t\$('.pageClose2').click(function() {

\t\t\t//清除缓存
\t\t\tvar navA = \$('.navCon a').not('.active');//获取顶部选项卡中除了被选中的所有a元素
\t\t\tvar indexs = [];
\t\t\tnavA.each(function(){
\t\t\t\tindexs.push(\$(this).attr('data-index'));
\t\t\t});
\t\t\tfor(var i in indexs){
\t\t\t\tif(indexs[i] != '0-0'){
\t\t\t\t\tykp.delLocalStorage(indexs[i]);
\t\t\t\t}
\t\t\t}

\t\t\tvar index = '';
\t\t\t\$('.navCon .page-tabs-content').find('a').each(function() {
\t\t\t\tif(\$(this).hasClass('active')) {
\t\t\t\t\tindex = \$(this).parent().index();
\t\t\t\t}
\t\t\t})

\t\t\tvar el = \$('.navCon').find('.page-tabs-content');
\t\t\t\$('.navCon .page-tabs-content').each(function(i) {
\t\t\t\tif(i != 0 && i != index) {
\t\t\t\t\t\$(this).remove();
\t\t\t\t}
\t\t\t})
\t\t})

\t\t

\t\tgoMini();

\t\tfunction goMini() {
\t\t\t\$('.goMini').click(function() {
\t\t\t\tif(\$(this).find('i').hasClass('fa-angle-double-left')) {
\t\t\t\t\t\$(this).find('i').addClass('fa-angle-double-right').removeClass('fa-angle-double-left');
\t\t\t\t}else{
\t\t\t\t\t\$(this).find('i').addClass('fa-angle-double-left').removeClass('fa-angle-double-right');
\t\t\t\t}
\t\t\t\t
\t\t\t\tvar icon = '';
\t\t\t\tvar index = '';
\t\t\t\tvar icon1 = '';
\t\t\t\tvar dataindex = \$('.navCon .active').attr('data-index');
\t\t\t\tvar dataLi = \$('.navCon .active').attr('data-li');
\t\t\t\tif(\$('#sidebar').hasClass('mini')) {
\t\t\t\t\t//小型侧栏状态 变大型侧栏
\t\t\t\t\t\$('#sidebar').css('width', '190px');
\t\t\t\t\t\$('.sidebarCon').show().css('width', '190px');
\t\t\t\t\t\$('#sidebar').removeClass('mini');
\t\t\t\t\t\$('.navBarTable').css('cssText','width: calc(100% - 190px) !important;')
\t\t\t\t\t\$('#right').css('width','calc(100% - 190px) ')
\t\t\t\t\t\$('.miniNavCon').fadeOut(300);
\t\t\t\t\t\$('.miniNav').fadeOut(300);
\t\t\t\t\t\$('#miniTool').fadeOut(300);
\t\t\t\t\t\$('#navBox').fadeIn(300);
\t\t\t\t\t\$('.miniNav #miniNavList').hide();
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\$('#sidebar-shortcuts-large').show();
\t\t\t\t\t\t\$('#sidebar-shortcuts').fadeIn(300);
\t\t\t\t\t\ticon1 = \$('#miniTool>a').find('i').attr('class');
\t\t\t\t\t\t\$('#sidebar-shortcuts-large .btn').each(function(i) {
\t\t\t\t\t\t\tif(\$(this).children('i').attr('class') == icon1) {
\t\t\t\t\t\t\t\tindex = i;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t\t\$(\"#sidebar-shortcuts-large .btn\").eq(index).attr('id','btn').siblings().attr('id', '');

\t\t\t\t\t\tvar left = \$(\"#sidebar-shortcuts-large .btn\").eq(index).position().left;
\t\t\t\t\t\t\$('.bottonLine').css('left', left);
\t\t\t\t\t\t\$(\"#navBox .nav-list\").eq(index).css('display', 'block').siblings().css('display', 'none');

\t\t\t\t\t\tgetACtiveEl(dataindex, dataLi);

\t\t\t\t\t\tsetTimeout(function(){
\t\t\t\t\t\t\tsetCurrentLeftHeight();
\t\t\t\t\t\t\t
\t\t\t\t\t\t},300);
\t\t\t\t\t\t
\t\t\t\t\t},300);
\t\t\t\t\t\$(\"#goMinibox\").css('width',\"190px\");
\t\t\t\t} else {
\t\t\t\t\t//大型侧栏状态  变小型侧栏
\t\t\t\t\t\$('#sidebar-shortcuts-large .btn').each(function(i) {
\t\t\t\t\t\tif(\$(this).attr('id') == 'btn') {
\t\t\t\t\t\t\ticon = \$(this).children().attr('class');
\t\t\t\t\t\t\tindex = i;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t\$(\"#goMinibox\").css('width',\"60px\");
\t\t\t\t\t\$('#sidebar').css('width', '60px');
\t\t\t\t\t\$('.sidebarCon').css('width', '60px');
\t\t\t\t\t\$('#sidebar').addClass('mini');
\t\t\t\t\t\$('#right').css('cssText','width:calc(100% - 60px) !important ');
\t\t\t\t\t\$('.navBarTable').css('cssText','width: calc(100% - 60px) !important;');
\t\t\t\t\t\$('#navBox').fadeOut(300);
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\$('.miniNavCon').fadeIn(300);
\t\t\t\t\t\t\$('#sidebar-shortcuts').hide();
\t\t\t\t\t\t\$('.sidebarCon').hide();
\t\t\t\t\t\t\$('#miniTool').fadeIn(300);
\t\t\t\t\t\t\$('.miniNav').fadeIn(300);
\t\t\t\t\t\t
\t\t\t\t\t\t\$('.miniNav #miniNavList').eq(index).css('display','block');
\t\t\t\t\t\t\$('#miniTool>a').find('i').attr('class',icon);
\t\t\t\t\t\t\$('#miniTool .tooleUl li').find('i').each(function(i) {
\t\t\t\t\t\t\tif(\$(this).hasClass(icon)) {
\t\t\t\t\t\t\t\t\$(this).parent().addClass('active').parent().siblings().children('a').removeClass('active');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t\tchangeMini(dataindex,dataLi);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t})
\t\t}
\t\t//页面跳转
\t\tfunction skPage(urls){\t
\t\t\turls = urls.split('&');

\t\t\t//路径
\t\t\tvar url = urls[0].split('=')[1];
\t\t\t//下标
\t\t\tvar index = urls[1].split('=')[1];

\t\t\tindex = index.split('-');

\t\t\t//切换至对应的所属模块（首页 || 审批 || 报表 || 系统色值）
\t\t\t\$('#sidebar-shortcuts-large div').eq(index[0]).click();

\t\t\t//将所有li的激活class删除
\t\t\t\$('.left li').not('.menuB').removeClass('active').removeClass('active1');

\t\t\t//3级目录额外处理
\t\t\tif(index.length == 3){
\t\t\t\t// console.log(2);
\t\t\t\t//如果需要展开的选项跟当前展开的选项不一致时，收起当前展开的选项并且打开相应的选项
\t\t\t\tif(!\$('.left').eq(1).find('li[data-url=\"/admin/'+  url +'\"]').parents('.menuB').hasClass('active1')){
\t\t\t\t\t// console.log(1);
\t\t\t\t\t//先收起侧边栏打开的选项
\t\t\t\t\t\$('.left .menuB.active1').removeClass('active').removeClass('active1').children('.submenu').slideUp();
\t\t\t\t\t//展开对应的选项
\t\t\t\t\t\$('.left').eq(1).children('ul').eq(index[0]).children('li').eq(index[1]).addClass('active1').addClass('active').children('.submenu').slideDown();
\t\t\t\t};
\t\t\t}
\t\t\t

\t\t\t//跳转
\t\t\t\$('.left').eq(1).find('li[data-url=\"/admin/'+  url +'\"]').click();\t
\t\t}
\t\t/**
\t\t * 小型navList  toolBar点击时间
\t\t */
\t\t
\t\tclickMiniBar();
\t\tfunction clickMiniBar() {
\t\t\t\$('#miniTool .tooleUl li').stop().click(function() {
\t\t\t\tvar clickIndex = \$(this).index();
\t\t\t\t\$(this).children('a').addClass('active').parent().siblings().children('a').removeClass('active');
\t\t\t\tvar icon = \$(this).find('i').attr('class');
\t\t\t\t//给总栏添加选中状态icon图标
\t\t\t\t\$(this).parents('#miniTool').children('a').find('i').attr('class',icon);
\t\t\t\t\$('.miniNav #miniNavList').eq(clickIndex).show().siblings().hide();
\t\t\t\tsetCurrentLeftHeight();
\t\t\t})
\t\t}

\t\t/**
\t\t * 获取当前下标点击的状态并改变状态
\t\t * @param {Object} dataIndex  下标
\t\t * @param {Object} dataLi  菜单类型
\t\t */
\t\tfunction getACtiveEl(dataIndex, dataLi) {
\t\t\tdataIndex = dataIndex.split('-');
\t\t\tif(dataLi == 0) {
\t\t\t\tvar thisEl = \$('#navBox #nav-list').eq(dataIndex[0]).children('li').eq(dataIndex[1]).addClass('active').siblings().removeClass('active').removeClass('active1');

\t\t\t\tthisEl.parents('#nav-list').siblings().children('li').removeClass('active').removeClass('active1');
\t\t\t\tthisEl.parents('#nav-list').siblings().children('li').find('.submenu').children().removeClass('active').removeClass('active1');   
\t\t\t\tthisEl.parents('#nav-list').siblings().children('li').find('.submenu').stop().slideUp();
\t\t\t\tthisEl.parents('#nav-list').find('li .submenu').slideUp();

\t\t\t\t//控制顶部左侧栏顶部操作
\t\t\t\t\$(\"#sidebar-shortcuts-large .btn\").eq(dataIndex[0]).attr('id', 'btn').siblings().attr('id', '');
\t\t\t\tvar left = \$(\"#sidebar-shortcuts-large .btn\").eq(dataIndex[0]).position().left;
\t\t\t\tvar navList = \$(\"#navBox .nav-list\");
\t\t\t\tnavList.eq(dataIndex[0]).css('display', 'block').siblings().css('display', 'none');
\t\t\t\t\$('.bottonLine').css('left', left);
\t\t\t} else {
\t\t\t\tvar thatEl = \$('#navBox #nav-list').eq(dataIndex[0]).children('li').eq(dataIndex[1]);
\t\t\t\t
\t\t\t\tvar thatEl1 =  \$('#navBox #nav-list').eq(dataIndex[0]).siblings().find('.submenu').stop().slideUp();

\t\t\t\tthatEl.parents('#nav-list').siblings().children('li').removeClass('active').removeClass('active1');
\t\t\t\tthatEl.addClass('active').addClass('active1').find('li').eq(dataIndex[2]).addClass('active1').addClass('active').siblings().removeClass('active').removeClass('active1');
\t\t\t\tthatEl1.addClass('active').addClass('active1').find('li').eq(dataIndex[2]).addClass('active1').addClass('active').siblings().removeClass('active').removeClass('active1');
\t\t\t\t
\t\t\t\tthatEl.find('.submenu').stop().slideDown();
\t\t\t\tthatEl.siblings().removeClass('active').removeClass('active1').find('li').removeClass('active').removeClass('active1')
\t\t\t\tthatEl.siblings().find('.submenu').stop().slideUp();

\t\t\t\t//控制顶部左侧栏顶部操作
\t\t\t\t\$(\"#sidebar-shortcuts-large .btn\").eq(dataIndex[0]).attr('id', 'btn').siblings().attr('id', '');
\t\t\t\tvar left = \$(\"#sidebar-shortcuts-large .btn\").eq(dataIndex[0]).position().left;

\t\t\t\tvar navList = \$(\"#navBox .nav-list\");
\t\t\t\tnavList.eq(dataIndex[0]).css('display', 'block').siblings().css('display', 'none');
\t\t\t\t\$('.bottonLine').css('left', left);
\t\t\t}
\t\t}

\t\t/**
\t\t * 获取页面数据
\t\t * @param {string} url   地址
\t\t * @param {Bool} state  是否玩命加载
\t\t * @param {Object} data  参数
\t\t */
\t\tfunction getPageContent(url, state, data) {
\t\t\t//获取页面内容，改变地址栏数据
\t\t\tvar newUrl = '';
\t\t\tvar index = url.lastIndexOf('/');
\t\t\tvar controller = url.slice((index + 1), url.length);
\t\t\tif(data && data.currentIndex != '0-0' && data.currentIndex != 'undefined') {
\t\t\t\tnewUrl = \"/admin/?url=\" + controller + '&i=' + data.currentIndex + '&type=' + data.liType;
\t\t\t} else if(data.currentIndex == '0-0') {
\t\t\t\tnewUrl = \"/admin/\";
\t\t\t} else {
\t\t\t\tnewUrl = \"/admin/?url=\" + controller;
\t\t\t}

\t\t\tvar stateObject = {};
\t\t\tvar title = \"\";
\t\t\thistory.pushState(stateObject, title, newUrl);

\t\t\t//判断是否有缓存数据
\t\t\tvar content = ykp.getLocalStorage(data.currentIndex);
\t\t\tif(content){
\t\t\t\t\$('#contentBox').html(content);
\t\t\t\tsetCurrentLeftHeight();
\t\t\t\treturn;
\t\t\t}
\t\t\tvar Fun = function() {

\t\t\t};
\t\t\tif(state)
\t\t\t\tFun = function() {
\t\t\t\t\t/**
\t\t\t\t\t * 有过有节点时  先删除再添加
\t\t\t\t\t */
\t\t\t\t\tif(\$('#onProcess')){
\t\t\t\t\t\t\$('#onProcess').parent().remove()
\t\t\t\t\t}
\t\t\t\t\t\$('body').append(div);
\t\t\t\t};
\t\t\t\$.get({
\t\t\t\tbeforeSend: Fun,
\t\t\t\turl: url,
\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\$('#contentBox').html(res);
\t\t\t\t\t// var height = \$(window).height();
//\t\t\t\t\t\$('.custom_table').css('height', '458px');
\t\t\t\t\tsetCurrentLeftHeight();
\t\t\t\t\tykp.setLocalStorage(data.currentIndex,res);
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\$('#onProcess').parent().remove()
\t\t\t\t\t}, 500);
\t\t\t\t},
\t\t\t\terror:function(err) {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\$('#onProcess').parent().remove()
\t\t\t\t\t}, 500);
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//mini菜单操作栏
\t\t\$('.miniLi li').click(function() {
\t\t\tif(\$(this).hasClass('active')) {
\t\t\t\treturn;
\t\t\t}

\t\t\tvar data = {};
\t\t\tdata.currentIndex = \$('.tooleUl .active').parent().index() + '-' + \$(this).parent().parent().index();//index集合

\t\t\t//判断是否有二级菜单,大于0则有2级菜单
\t\t\tif(\$(this).siblings().length > 0){
\t\t\t\tif(\$(this).index() == 0){ 
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\thighlight(\$(this));//高亮效果
\t\t\t\tdata.currentIndex = data.currentIndex + '-' +(\$(this).index() - 1);
\t\t\t\tdata.liType = 1;//判断是够是一级菜单还是二级菜单  0为1级   1 为2级

\t\t\t\tcontrolTab(data,\$(this));
\t\t\t\treturn;
\t\t\t}

\t\t\thighlight(\$(this));//高亮效果

\t\t\tdata.liType = 0;//判断是够是一级菜单还是二级菜单  0为1级   1 为2级

\t\t\tcontrolTab(data,\$(this));

\t\t\tsetCurrentLeftHeight();
\t\t});
\t\t
\t\t
\t\t

\t\t//mini菜单操作栏高亮效果
\t\tfunction highlight(minili){
\t\t\t\$('.miniNav').find('.active').removeClass('active');
\t\t\tminili.parent().prev().addClass('active');
\t\t\tminili.addClass('active');
\t\t}

\t\t//操作mini菜单栏顶部选项卡发生改变
\t\tfunction controlTab(data,minili){
\t\t\tvar text = minili.text();
\t\t\tvar url = minili.attr('data-url');\t\t\t\t
\t\t\turl = url.substring(url.lastIndexOf('/') + 1);

\t\t\tvar navA = \$('.navCon a');//获取顶部选项卡中所有的a元素
\t\t\tvar indexs = [];
\t\t\tnavA.each(function(){
\t\t\t\tindexs.push(\$(this).attr('data-index'));
\t\t\t});

\t\t\t//如果顶部选项卡中包含了该选项，则切换到该选项卡
\t\t\tif(\$.inArray(data.currentIndex,indexs) != -1){
\t\t\t\t\$('.navCon a').removeClass('active');
\t\t\t\t\$('.navCon a[data-index='+data.currentIndex+']').addClass('active');

\t\t\t\t//获取页面内容
\t\t\t\turl = 'http://' + window.location.host + minili.attr('data-url');
\t\t\t\tgetPageContent(url, false, data);
\t\t\t\treturn;
\t\t\t}

\t\t\t//顶部选项卡
\t\t\t\$('.navCon a').removeClass('active');
\t\t\tvar navContent = '<div class=\"page-tabs-content\"><a class=\"active\" data-index=\"' + data.currentIndex + '\" data-li=\"' + data.liType + '\" data-url=\"' + url + '\">' + text + '<i id=\"fa-close\" class=\"iconfont tit-close\">&#xe618;</i></a></div>';
\t\t\t\$('.navCon').append(navContent);
\t\t\t\$('.pageTable').scrollLeft(\$('.pageTable').scrollLeft() + 200);

\t\t\t//获取页面内容
\t\t\turl = 'http://' + window.location.host + minili.attr('data-url');
\t\t\tgetPageContent(url, true, data);
\t\t}

\t\t//点击顶部选项卡，mini侧边栏样式改变
\t\tfunction changeMini(dataIndex,dataLi){
\t\t\t\$('.miniNav .active').removeClass('active');

\t\t\tdataIndex = dataIndex.split('-');
\t\t\t\$('.tooleUl a').eq(dataIndex[0]).click();
\t\t\tif(dataLi == 0){
\t\t\t\t\$('.miniNav>ul').eq(dataIndex[0]).children('li').eq(dataIndex[1]).find('li').addClass('active').parent().parent().find('a').addClass('active');
\t\t\t}
\t\t\tif(dataLi == 1){
\t\t\t\tvar index = eval(dataIndex[2] + '+' +1);
\t\t\t\t\$('.miniNav>ul').eq(dataIndex[0]).children('li').eq(dataIndex[1]).find('li').eq(index).addClass('active').parent().parent().find('a').addClass('active');
\t\t\t}
\t\t}
\t\t/*setTimeout(function(){
\t\t\tconsole.log(\$('.select2-search__field'));
\t\t\t
\t\t},10000)*/
//\t\t\$('.in').on('input', function() {
//\t\t\tif(\$(this).hasClass('modal-backdrop')){
//\t\t\t\t\$('.select2-search__field').on('input', function() {
//\t\t\t\t\talert(1);
//\t\t\t\t\t\$(this).val(\$(this).val().trim())
//\t\t\t\t})
//\t\t\t}
//\t\t\t\talert(2);
//\t\t\t\t\$(this).val(\$(this).val().trim())
//\t\t})
\t})
</script>";
    }

    public function getTemplateName()
    {
        return "admin/footer.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <script src="/resource/adimin/components/jquery.1x/dist/jquery.js"></script>*/
/* <script src="/resource/adimin/components/moment/moment.js"></script>*/
/* <!--时间范围-->*/
/* <script src="/resource/adimin/components/bootstrap-daterangepicker/daterangepicker.js"></script>*/
/* */
/* <script src="/resource/adimin/components/_mod/bootstrap-multiselect/bootstrap-multiselect.js">*/
/* </script>*/
/* <script src="/resource/adimin/components/_mod/fuelux/tree.js"></script>*/
/* */
/* <script src="/resource/adimin/components/bootstrap/dist/js/bootstrap.js"></script>*/
/* <script src="/resource/adimin/assets/js/ykp.js"></script>*/
/* <script src="/resource/adimin/assets/js/echarts.min.js"></script>*/
/* <!-- page specific plugin scripts -->*/
/* <script src="/resource/adimin/components/datatables/media/js/jquery.dataTables.js"></script>*/
/* <script src="/resource/adimin/components/_mod/datatables/jquery.dataTables.bootstrap.js"></script>*/
/* */
/* <script src="/resource/adimin/components/datatables.net-select/js/dataTables.select.js"></script>*/
/* <script src="/resource/adimin/components/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js"></script>*/
/* */
/* <script src="/resource/adimin/assets/js/src/elements.treeview.js"></script>*/
/* <script src="/resource/adimin/assets/js/jquery.pagination.min.js"></script>*/
/* <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* <script src="/resource/adimin/assets/js/clipboard.min.js"></script>*/
/* <script src="/resource/adimin/assets/js/src/bootbox.js"></script>*/
/* <style type="text/css">*/
/* */
/* .select2-container--open .select2-dropdown--below{*/
/*     left: 0;*/
/*     top: 96px;*/
/* }*/
/* */
/* .user-info{*/
/* 	max-width: 221px !important;*/
/* }*/
/* */
/* .showTheInfo{	*/
/*     white-space: normal !important;;*/
/* }*/
/* */
/* .select2 .select2-container .select2-container--default .select2-container--above .select2-container--focus{*/
/* 	width: 120px!important*/
/* }*/
/* .dropdown-menu{min-width:124px;}*/
/* */
/* #msgList a{background: transparent;}*/
/* */
/* </style>*/
/* */
/* <!-- inline scripts related to this page -->*/
/* <script type="text/javascript">*/
/* 	jQuery(function($) {*/
/* 	    //获取公司名称 和 公司logo*/
/* 		getCompanyInfo();*/
/* 		function getCompanyInfo(){*/
/*             var userinfo = JSON.parse(ykp.getCookie('userinfo'));*/
/* 			var company_info = userinfo['company'] || [];			*/
/* 			if(company_info['logo']){*/
/* 				$('#company_logo #logo').attr('src',company_info['logo']);*/
/* 			}*/
/* 			if(company_info['name']){*/
/* 				$('#company_logo #company').text(company_info['name']);*/
/* 			}*/
/* 		}*/
/* 		*/
/* 		var ws = new WebSocket("wss://echo.websocket.org");*/
/* */
/* */
/* */
/*  		getSchedule();*/
/* 		function getSchedule(){*/
/* 		    var is_schedule = ykp.getCookie('schedule')*/
/*             var _ntime = Date.now();*/
/* 		   /* if(!is_schedule){*/
/*                 ykp.setCookie('schedule',_ntime);*/
/*                 showSchedule()*/
/*                 return false;*/
/*             }else if((is_schedule - 43200000) > is_schedule ){*/
/*                 ykp.setCookie('schedule',_ntime);*/
/*                 showSchedule();*/
/*                 return false;*/
/*             }*//* */
/*             showSchedule();*/
/*            function showSchedule() {*/
/*                ykp.doAjax({*/
/*                    url:"/api/api_plan/get_none_plan",*/
/*                    method:"get",*/
/*                    data:{},*/
/*                    success:function(res){*/
/*                        var data = res.data;*/
/*                        var id  = "";*/
/*                        for(var i = 0; i < data.length; i++) {*/
/*                            console.log(data[i]['zhenghe']);*/
/*                            if(data[i]['zhenghe']=="日程"){*/
/*                                (function(i){*/
/*                                    setTimeout(function(){*/
/* */
/*                                        $('.main-content').append(`<div id="scheduleBox${i}" class="scheduleBox">*/
/*                                 <div style="line-height: 30px;color:#fff;padding: 0px 15px;font-size:14px;box-shadow: 0 2px 3px #9d9d9d;background:#484848;border-radius:5px;">*/
/*                                     <p style="width:100%;margin: 0 auto;">*/
/*                                         <p> ${cs.getNowTime(data[i].plan_start_time,true) + " 至 " + cs.getNowTime(data[i].plan_end_time,true)}</p>*/
/*                                         <p> ${data[i].name + " 有 " + data[i].title_name + "的日程任务"}</p>*/
/*                                         <p> ${"备注为 " +data[i].remark+" ，请知悉！"}</p>*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </div>`);*/
/*                                    },(i)*5000);*/
/*                                    setTimeout(function(){*/
/*                                        ykp.doAjax({*/
/*                                            url:"/api/api_plan/is_read_plan",*/
/*                                            method:"post",*/
/*                                            data:{*/
/*                                                id:data[i].id*/
/*                                            },*/
/*                                            success:function(){*/
/*                                                $('#scheduleBox'+i).remove();*/
/*                                            }*/
/*                                        })*/
/*                                        $('#scheduleBox'+i).remove();*/
/*                                    },(i+1)*5001)*/
/*                                })(i)*/
/*                            }else {*/
/*                                (function(i){*/
/*                                    setTimeout(function(){*/
/*                                        $('.main-content').append(`<div id="scheduleBox${i}" class="scheduleBox">*/
/*                                 <div style="line-height: 30px;color:#fff;padding: 0px 15px;font-size:14px;box-shadow: 0 2px 3px #9d9d9d;background:#484848;border-radius:5px;">*/
/*                                     <p style="width:100%;margin: 0 auto;">*/
/*                                         <p> ${cs.getNowTime(data[i].next_time,true)+","+data[i].name+"有待跟进线索"}</p>*/
/*                                         <p> ${"团队人员为："+data[i].user_name+","+data[i].team_name}</p>*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </div>`);*/
/*                                    },(i)*5000);*/
/*                                    setTimeout(function(){*/
/*                                        ykp.doAjax({*/
/*                                            url:"/api/api_plan/is_read_clue",*/
/*                                            method:"post",*/
/*                                            data:{*/
/*                                                id:data[i].id*/
/*                                            },*/
/*                                            success:function(){*/
/*                                                $('#scheduleBox'+i).remove();*/
/*                                            }*/
/*                                        })*/
/*                                        $('#scheduleBox'+i).remove();*/
/*                                    },(i+1)*5001)*/
/*                                })(i)*/
/*                            }*/
/*                        }*/
/* */
/*                    }*/
/*                })*/
/*            }*/
/* 		}*/
/* 		*/
/* 		ykp.setCookie("filter","");*/
/* 		ykp.setCookie("order","");*/
/* */
/* 		//刷新页面,两种处理*/
/* 		//第一，清缓存，回首页*/
/* 		ykp.clearLocalStorage();*/
/* //		history.pushState(null, '', '/admin/');*/
/* 		//第二,依原网页照搬*/
/* */
/* //		isLogin();*/
/* 		//重定向  未登录直接跳转到登录页面*/
/* 		function isLogin() {*/
/* 			var NikeName = ykp.getCookie('uid');*/
/* 			if(!NikeName) {*/
/* 				ykp.showOk({*/
/* 					text: '您还没有登录'*/
/* 				})*/
/* 				var getUrl = getUrlParam('url');*/
/* 				var dataIndex = getUrlParam('i');*/
/* 				var dataLi = getUrlParam('type');*/
/* 				//window.location = '/login/?url=' + getUrl + '&i=' + dataIndex + '&type=' + dataLi*/
/*                 window.location = '/login'*/
/* 			}*/
/* 		}*/
/* */
/* 		function getUrlParam(name) {*/
/* 			var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象*/
/* 			var r = window.location.search.substr(1).match(reg); //匹配目标参数*/
/* 			if(r != null)*/
/* 				return unescape(r[2]);*/
/* 			return null; //返回参数值*/
/* 		}*/
/* 		*/
/* 		//获取公司名 和 公司logo*/
/* 	    // getCompanyInfo();*/
/* 	    // function getCompanyInfo(){*/
/* 	    // 	console.log(ykp.getCookie('uid'));*/
/* 	    //     ykp.doAjax({*/
/* 	    //         url:'/api/api_customer/info',*/
/* 	    //         method:'post',*/
/* 	    //         data:{*/
/* 	    //             filter:'khm_customer = ' + ykp.getCookie('cid')*/
/* 	    //         },*/
/* 	    //         success:function(res){*/
/* */
/* 	    //         }*/
/* 	    //     });*/
/* 	    // }*/
/* */
/* 		//任务、通知、消息切换*/
/* 		$('#chooseNav li').click(function(){*/
/* 			if($(this).hasClass('active')){*/
/* 				return;*/
/* 			}*/
/* 			$(this).addClass('active').siblings().removeClass('active');*/
/* 			var index = $(this).index();*/
/* 			var left = $(this).position().left;*/
/* 			$('.line').css('left', left + 'px');*/
/* 			$('#mesConBox>div').eq(index).css('display', 'block').siblings().css('display', 'none');*/
/* 		})*/
/* */
/* */
/* */
/* 		$("#sidebar-shortcuts-large .btn").click(function() {*/
/* 			var i = $(this).index();*/
/* 			$(this).attr('id', 'btn').siblings(i).attr('id', '');*/
/* 			var left = $(this).position().left;*/
/* 			var navList = $("#navBox .nav-list");*/
/* 			navList.eq(i).css('display', 'block').siblings(i).css('display', 'none');*/
/* 			$('.bottonLine').css('left', left);*/
/* 			setCurrentLeftHeight();*/
/* 		})*/
/* */
/* 		//获取审批开启关闭状态*/
/* 		getPageList();*/
/* 		function getPageList() {*/
/* 			ykp.doAjax({*/
/* 				url: '/api/api_manage/index',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: 999, */
/* 				},*/
/* 				success:function(res) {*/
/* 					var spList = [];*/
/* 					var data = res.data.items;*/
/* 					var obj = {};*/
/* 					for(var i in data){*/
/* 						obj[data[i][0]['spm_manage.name']] = {status:data[i][0]['spm_manage.status'],user:data[i][0]['spm_manage.user']};*/
/* 					}*/
/* 					ykp.setCookie('spList',JSON.stringify(obj));*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		//得到所有员工*/
/* 		function allemp(){*/
/* 			var emps;*/
/* 			ykp.doAjax({*/
/* 				url:'/api/api_employees/f7',*/
/*                 method:'post',*/
/*                 data:{},*/
/*                 async:false,*/
/*             	success:function(res){*/
/*                 	emps=res.data;*/
/* 	            }*/
/* 	        })*/
/* 	        return emps;*/
/* 		}*/
/* */
/* 			getEmple("#contacts");*/
/* 			function getEmple(el){*/
/* 				var emps = allemp();*/
/* 				$(el).select2({*/
/* 					allowClear: true*/
/* 				})*/
/* */
/* 			    var option='';*/
/* 	        	for(var i in emps){*/
/* 	        		if(emps[i]['bmm_employees.name']){*/
/* 	        			option+=`<option value="${emps[i]['bmm_employees.id']}">*/
/* 								${emps[i]['bmm_employees.name']}*/
/* 	        				</option>`;*/
/* 	        		}*/
/* 	        		*/
/* 	        	}*/
/* 	        	$(el).append(option);*/
/* 	        	// $(el).val(ykp.getCookie('uid')).trigger('change');*/
/* 			}*/
/* 			var rightPage = [{*/
/* 				page:1,*/
/* 				status:false   //true  无更多数据下同*/
/* 			},{*/
/* 				page:1,*/
/* 				status:false*/
/* 			},{*/
/* 				page:1,*/
/* 				status:false*/
/* 			}]*/
/* */
/* 			allTask()*/
/* 			//获取所有任务*/
/* 			function allTask(){*/
/* 				var index = $('#chooseNav').find('.active').index();*/
/* 				ykp.doAjax({*/
/* 					url:'/api/api_home/get_my_task',*/
/* 					method:'get',*/
/* 					anync:false,*/
/* 					data:{*/
/* 						limit:10,*/
/* 						page:rightPage[index].page*/
/* 					},   //根据下标去page参数*/
/* 					success:function(res){*/
/* 						var totalNum = 0;*/
/* 						var long_money = res.data.long_money;*/
/* 						var one_money = res.data.one_money;*/
/* 						var service_done = res.data.service_done;*/
/* 						var service_sp = res.data.service_sp;*/
/* 						var status = ['未开始','待审核','通过','未通过'];*/
/* 						var li='';*/
/* 						var service_name=['收单','整单','记账','客服','报税','送单'];*/
/* 						var service_spname=['记账审批','送单审批','','','仓位审批','','','退单审批','','整单审批','','','报税审批','客服审批','收单审批','投诉审批'];*/
/* 						//加载服务任务*/
/* //						for(var i in service_done){*/
/* //							totalNum++;*/
/* //							li+=`<li data-clipboard-text='${service_done[i]['name']}' type="ts${service_done[i]['type']}" >*/
/* //									<div class="mesTitle" style="margin-top:-20px;color:#00ffff;top:8px "> ${service_done[i]['name']} </div>*/
/* //									<label class="mesTitle" style="top:12px">${service_name[service_done[i]['type']-1]}</label>									*/
/* //									<label class="mesStatus" style="top:12px">${status[service_done[i]['status']]}</label>*/
/* //								 </li> `*/
/* //						}*/
/* */
/* 						//加载审批任务*/
/* 						for(var i in service_sp){*/
/* 							totalNum++;*/
/* 							li+=`<li data-clipboard-text='${service_sp[i]['customer_name']}' type="sp${service_sp[i]['approve_type']}">*/
/* 									<div class="mesTitle" style="color:#00ffff "> ${service_sp[i]['customer_name']} </div>*/
/* 									<label class="mesTitle" style="margin-top:9px">${service_spname[service_sp[i]['approve_type']-6]}</label>*/
/* 									<label class="mesStatus" style="top:37px">${status[service_sp[i]['approve_result']]}</label>*/
/* 								 </li>`*/
/* 						}*/
/* */
/* 						//加载一次性欠款*/
/* 						for(var i in one_money){*/
/* 							totalNum++;*/
/* 							li+=`<li data-clipboard-text='${one_money[i]['name']}' type="qk" >*/
/* 									<div class="mesTitle" style="color:#00ffff ">${one_money[i]['name']} </div>*/
/* 									<label class="mesTitle" style="margin-top:9px">一次性欠款</label>*/
/* 									<label class="mesStatus" style="top:37px">待收款</label>*/
/* 								 </li>`*/
/* 						}*/
/* */
/* 						//加载长期欠款*/
/* 						for(var i in long_money){*/
/* 							totalNum++;*/
/* 							li+=`<li data-clipboard-text='${long_money[i]['name']}' type="qk" >*/
/* 									<div class="mesTitle" style="color:#00ffff ">${long_money[i]['name']} </div>*/
/* 									<label class="mesTitle" style="margin-top:9px">长期欠款</label>*/
/* 									<label class="mesStatus" style="top:37px">待收款</label>*/
/* 								 </li>`*/
/* 						}*/
/* 						$("#taskList").append(li);*/
/* 						rightPage[index].page += 1;*/
/* 						$('.rw').html(res.data.total);*/
/* 						var numbers = $('#mesConBox').find('li').length;*/
/* 						if (numbers>99) {*/
/* 							numbers = "99+";*/
/* 						}*/
/* 						$('.badge').text(numbers);*/
/* 						tzPageOnTaskAndInfo();*/
/* 						infoScrool(index);*/
/* 					}*/
/* 				})*/
/* 			}*/
/* 			*/
/* 			/*  滚动条*//* */
/* 			function infoScrool(params) {*/
/* 				var status;*/
/* 				$('#mesConBox').find('.nav-list').eq(params).unbind('scroll').scroll(function() {*/
/* 					var navList = $(this)*/
/* 					var height = $(this).height();*/
/* 					var contentH  = $(this).get(0).scrollHeight;*/
/* 					var scrollTop = $(this).scrollTop();//滚动高度*/
/* //					console.log(height+","+contentH+",");*/
/* //					params.status*/
/* 					if(status) {*/
/* 						clearInterval(status);*/
/* 					}*/
/* 					if(contentH - height - scrollTop <= 50) {*/
/* 						status = setTimeout(function() {*/
/* 							allTask();*/
/* 						},300)*/
/* 					}*/
/* 				})*/
/* 				*/
/* 				*/
/* 			}*/
/* */
/* 			var customers = {};*/
/* 			ykp.doAjax({*/
/* 				url:'/api/api_customer/f7',*/
/* 				method:'post',*/
/* 				async:false,*/
/* 				data:{*/
/* 					select:'khm_customer.id,khm_customer.name'*/
/* 				},*/
/* 				success:function(res){*/
/* 					var data = res.data;*/
/* 					for(var i in data){*/
/* 						customers[data[i]['id']]=data[i]['name'];*/
/* 					}*/
/* 				}*/
/* 			})*/
/* */
/* */
/* 			//跳转页面，sp代表记账报税审批页面，ts代表记账报税页面，qk为欠款页面*/
/* 			var type_url={*/
/* 				sp6:'?url=tally&i=1-1&type=1',*/
/* 				sp7:'?url=auditing_single&i=1-0&type=1',*/
/* 				sp10:'?url=auditPosition&i=1-4&type=1',*/
/* 				sp13:'?url=depotChargeback&i=0-4-2&type=1',*/
/* 				sp15:'?url=auditEntireSingle&i=1-0&type=1',*/
/* 				sp18:'?url=auditTax&i=1-3&type=1',*/
/* 				sp19:'?url=auditCustomerService&i=1-2&type=1',*/
/* 				sp20:'?url=auditGetList&i=1-0-0&type=1',*/
/* 				sp21:'?url=customer&i=0-1-5&type=1',*/
/* 				ts1:'?url=getList&i=0-1-2&type=1',*/
/* 				ts2:'?url=entire&i=0-1-3&type=1',*/
/* 				ts3:'?url=account&i=0-1-4&type=1',*/
/* 				ts4:'?url=customer&i=0-1-5&type=1',*/
/* 				ts5:'?url=tax&i=0-1-6&type=1',*/
/* 				ts6:'?url=single&i=0-1-7&type=1',*/
/* 				qk:'?url=lackOfrecord&i=0-5-0&type=1',*/
/* 				kp:'?url=pf_billing&i=0-2-10&type=1',*/
/* 				book:'?url=contacts&i=0-2-5&type=1',*/
/* 				ht:'?url=contracts&i=0-3-0&type=1',*/
/* 				zc:'?url=expenditure&i=0-5-4&type=1',*/
/* 				ck:'?url=depotOutGo&i=0-4-1&type=1',*/
/* 				rk:'?url=depotStorage&i=0-4-0&type=1',*/
/* 				pd:'?url=depotCheck&i=0-4-3&type=1',*/
/* 				jd:'?url=financeBorrow&i=0-5-5&type=1',*/
/* 				lxjl:'?url=contactRecord&i=0-2-4&type=1',*/
/* 				opp:'?url=opportunity&i=0-2-8&type=1',*/
/* 				plan:'?url=journal&i=0-2-6&type=1',*/
/* 				td:'?url=depotChargeback&i=0-4-2&type=1',*/
/* 				visit:'?url=visit&i=0-2-9&type=1',*/
/* 				wage:'?url=wages&i=0-5-3&type=1',*/
/* 				schedule:'?url=schedule&i=0-2-7&type=1'*/
/* 			}*/
/* */
/* 			*/
/* 			//var num = $('#mesConBox').length();*/
/* 			//alert(num)*/
/* 			//加载通知*/
/* 			function addInfoList(res){*/
/* 				var data=res.data;*/
/* 				var datas = {*/
/* 					bill_list:data.bill_list,//开票*/
/* 					book_list:data.book_list,//联系人*/
/* 					contract_list:data.contract_list,//合同*/
/* 					expenditure_list:data.expenditure_list,//支出*/
/* 					in_list:data.in_list,//入库*/
/* 					inventory_list:data.inventory_list,//出库*/
/* 					loan_list:data.loan_list,//借贷*/
/* 					log_list:data.log_list,//联系记录*/
/* 					opportunity_list:data.opportunity_list,//商机*/
/* 					out_list:data.out_list,//出库*/
/* 					plan_out_list:data.plan_out_list,//日程*/
/* 					plan_list:data.plan_list,//日志*/
/* 					retreat_list:data.retreat_list,//退单*/
/* 					visit_list:data.visit_list,//拜访*/
/* 					wages_list:data.wages_list//工资*/
/* 				}*/
/* */
/* 				var totalNum = 0;*/
/* 				var li = '';*/
/* 				var status_1 = ['待审核','不通过'];*/
/* 				var status_3 = ['未成交','已成交','挂起中'];*/
/* 				var status_2 = ['待审核','未通过','已审核'];*/
/* 				//开票通知,完成*/
/* 				for (var i in datas.bill_list) {*/
/* 					totalNum++;*/
/* 					li+=`<li data-clipboard-text='${customers[datas.bill_list[i]['customer_id']]}' type="kp">*/
/* 							<div class="mesTitle" style="color:#00ffff"> ${customers[datas.bill_list[i]['customer_id']]} </div>*/
/* 							<label class="mesTitle" style="margin-top:6px">开票单号：${datas.bill_list[i]['bill_id']}</label>*/
/* 							<label class="mesStatus" style="top:35px">待审批</label>*/
/* 						</li>`*/
/* 				}*/
/* 						*/
/* 				//联系人通知*/
/* 				for (var i in datas.book_list) {*/
/* 					totalNum++;*/
/* 					li+=`<li data-clipboard-text='${datas.book_list[i]['name']}' type="book">*/
/* 							<div class="mesTitle" style="color:#00ffff "> ${datas.book_list[i]['name']} </div>*/
/* 							<label class="mesTitle"style="margin-top:6px">待添加联系人</label>*/
/* 							<label class="mesStatus" style="top:35px"></label>*/
/* 						</li>`*/
/* 				}*/
/* */
/* 				//合同通知，完成*/
/* 				for (var i in datas.contract_list) {*/
/* 					if (datas.contract_list[i]['auth_status1']!=2) {*/
/* 						totalNum++;*/
/* 					li+=`<li data-clipboard-text='${datas.contract_list[i]['customer_name']}' type="ht">*/
/* 							<div class="mesTitle" style="color:#00ffff">${datas.contract_list[i]['customer_name']}</div>*/
/* 							<label class="mesTitle" style="margin-top:6px">合同订单号：${datas.contract_list[i]['contract_code']}</label>*/
/* 							<label class="mesStatus" style="top:35px">${status_1[datas.contract_list[i]['auth_status1']]}</label>*/
/* 						</li>`*/
/* 					}*/
/* 				}*/
/* */
/* 				//支出*/
/* 				for (var i in datas.expenditure_list) {*/
/* 					if (datas.expenditure_list[i]['status']!=1) {*/
/* 						totalNum++;*/
/* 					li+=`<li data-clipboard-text='${customers[datas.expenditure_list[i]['customer_id']]}' type="zc">*/
/* 							<div class="mesTitle" style="color:#00ffff">${customers[datas.expenditure_list[i]['customer_id']]}</div>*/
/* 							<label class="mesTitle" style="margin-top:6px">合同订单号：${datas.expenditure_list[i]['contract_code']}</label>*/
/* 							<label class="mesStatus" style="top:35px">${status_2[datas.expenditure_list[i]['status']]}</label>*/
/* 						</li>`*/
/* 					}*/
/* 				}*/
/* */
/* 				//入库通知，完成*/
/* 				for (var i in datas.in_list) {*/
/* 					if (datas.in_list[i]['status']!=2) {*/
/* 						totalNum++;*/
/* 					li+=`<li data-clipboard-text='${datas.in_list[i]['customer_name']}' type="rk">*/
/* 							<div class="mesTitle" style="color:#00ffff">${datas.in_list[i]['customer_name']}</div>*/
/* 							<label class="mesTitle" style="margin-top:6px">入库单号：${datas.in_list[i]['num']}</label>*/
/* 							<label class="mesStatus" style="top:35px">${status_1[datas.in_list[i]['status']]}</label>*/
/* 						</li>`*/
/* 					}*/
/* 				}*/
/* */
/* 				//盘点*/
/* 				for(var i in datas.inventory_list){*/
/* 					if (datas.inventory_list[i]['status']!=2) {*/
/* 						totalNum++;*/
/* 						li+=`<li data-clipboard-text='${customers[datas.inventory_list[i]['customer_id']]}' type="pd">*/
/* 								<div class="mesTitle" style="color:#00ffff">${customers[datas.inventory_list[i]['customer_id']]}</div>*/
/* 								<label class="mesTitle" style="margin-top:6px">盘点编号：${datas.inventory_list[i]['num']}</label>*/
/* 								<label class="mesStatus" style="top:35px">${status_2[datas.inventory_list[i]['status']]}</label>*/
/* 							</li>`*/
/* 					}*/
/* 				}*/
/* */
/* 				//借贷通知*/
/* 				for (var i in datas.loan_list) {*/
/* 					totalNum++;*/
/* 					li+=`<li data-clipboard-text='${customers[datas.loan_list[i]['cid']]}' type="jd">*/
/* 							<div class="mesTitle" style="color:#00ffff">${customers[datas.loan_list[i]['cid']]}</div>*/
/* 							<label class="mesTitle" style="margin-top:6px">借款：${datas.loan_list[i]['num']}</label>*/
/* 							<label class="mesStatus" style="top:35px">${status_1[datas.loan_list[i]['status']]}</label>*/
/* 						</li>`*/
/* 				}*/
/* */
/* 				//联系记录通知，完成*/
/* 				for (var i in datas.log_list) {*/
/* 					totalNum++;*/
/* 					li+=`<li data-clipboard-text='${customers[datas.log_list[i]['customer_id']]}' type="lxjl">*/
/* 							<div class="mesTitle" style="color:#00ffff">${datas.log_list[i]['customer_name']}</div>*/
/* 							<label class="mesTitle" style="margin-top:6px;text-overflow:ellipsis;text-align:left;width:200px">联系内容：${datas.log_list[i]['contact_msg']}</label>*/
/* 							<label class="mesStatus" style="top:35px">${cs.getNowTime(datas.log_list[i]['log_time'])}</label>*/
/* 						</li>`*/
/* 				}*/
/* */
/* 				//商机通知,完成*/
/* 				for (var i in datas.opportunity_list) {*/
/* 					if (datas.opportunity_list[i]['status']==0) {*/
/* 						totalNum++;*/
/* 					li+=`<li data-clipboard-text='${datas.opportunity_list[i]['customer_name']}' type="opp">*/
/* 							<div class="mesTitle" style="color:#00ffff">${datas.opportunity_list[i]['customer_name']}</div>*/
/* 							<label class="mesTitle" style="margin-top:6px">商机名称：${datas.opportunity_list[i]['name']}</label>*/
/* 							<label class="mesStatus" style="top:35px">${status_3[datas.opportunity_list[i]['status']]}</label>*/
/* 						</li>`*/
/* 					}*/
/* 				}	*/
/* */
/* 				//出库，完成*/
/* 				for (var i in datas.out_list) {*/
/* 					if (datas.out_list[i]!=2) {*/
/* 						totalNum++;*/
/* 					li+=`<li data-clipboard-text='${datas.out_list[i]['customer_name']}' type="ck">*/
/* 							<div class="mesTitle" style="color:#00ffff">${datas.out_list[i]['customer_name']}</div>*/
/* 							<label class="mesTitle" style="margin-top:6px">出库单号：${datas.out_list[i]['num']}</label>*/
/* 							<label class="mesStatus" style="top:35px">${status_1[datas.out_list[i]['status']]}</label>*/
/* 						</li>`*/
/* 					}*/
/* 				}*/
/* */
/* 				//日程，完成*/
/* 				var themes = ['','处理税务','业务签单','注册公司','变更公司','注册商标','注销公司','外勤配送','网站建设'];*/
/* 				for (var i in datas.plan_out_list) {*/
/* 					totalNum++;*/
/* 					li+=`<li type="schedule" >*/
/* 							<div class="mesTitle" style="color:#00ffff">${themes[datas.plan_out_list[i]['tkm_plan_out.title']]}</div>*/
/* 							<label class="mesTitle" style="margin-top:6px">${datas.plan_out_list[i]['ckm_position.name']}：${cs.getNowTime(datas.plan_out_list[i]['tkm_plan_out.plan_time'])}</label>*/
/* 							<label class="mesStatus" style="top:35px">未完成</label>*/
/* 						</li>`;*/
/* 				}*/
/* */
/* 				//日志，完成*/
/* 				var title = ['处理税务','业务签单','注册公司','变更公司','注册商标','注销公司','外勤配送','网站建设'];*/
/* 				for (var i in datas.plan_list) {*/
/* 					if (datas.plan_list[i]['type']==1) {*/
/* 						totalNum++;*/
/* 					li+=`<li type="plan">*/
/* 							<label class="mesTitle" >日志提醒：</label>*/
/* 							<label class="mesStatus">今天的日志还未填写，不要忘记哦</label>*/
/* 						</li>`*/
/* 					}*/
/* 					if (datas.plan_list[i]['type']==2 && new Date().getDay() == 4) {*/
/* 						*/
/* 						totalNum++;*/
/* 					li+=`<li type="plan">*/
/* 							<label class="mesTitle" >日志提醒：</label>*/
/* 							<label class="mesStatus">本周的日志还未填写，不要忘记哦</label>*/
/* 						</li>`*/
/* 					}*/
/* 					if (datas.plan_list[i]['type']==3 && new Date().getDate() > 27) {*/
/* 						totalNum++;*/
/* 					li+=`<li type="plan">*/
/* 							<label class="mesTitle" >日志提醒：</label>*/
/* 							<label class="mesStatus">本月的日志还未填写，不要忘记哦</label>*/
/* 						</li>`*/
/* 					}*/
/* 				}*/
/* */
/* 				//退单*/
/* 				for(var i in datas.retreat_list){*/
/* 					if (datas.retreat_list[i]['auth_status']!=2) {*/
/* 						totalNum++;*/
/* 						li+=`<li data-clipboard-text='${datas.retreat_list[i]['customer_name']}' type="td">*/
/* 							<div class="mesTitle" style="top:8px;color:#00ffff">${datas.retreat_list[i]['customer_name']}</div>*/
/* 							<label class="mesTitle" style="top:12px">退单</label>*/
/* 							<label class="mesStatus" style="top:12px">${status_1[datas.retreat_list[i]['auth_status']]}</label>*/
/* 						</li>`*/
/* 					}*/
/* 				}*/
/* */
/* 				//拜访，完成*/
/* 				for(var i in datas.visit_list){*/
/* 					if (datas.visit_list[i]['status']==0||datas.visit_list[i]['status']==2) {*/
/* 						totalNum++;*/
/* 						li+=`<li data-clipboard-text='${datas.visit_list[i]['customer_name']}' type="visit">*/
/* 							<div class="mesTitle" style="top:8px;color:#00ffff">${datas.visit_list[i]['customer_name']}</div>*/
/* 							<label class="mesTitle" style="top:12px">拜访主题：${datas.visit_list[i]['theme']}</label>*/
/* 							<label class="mesStatus" style="top:12px">${status_3[datas.visit_list[i]['status']]}</label>*/
/* 						</li>`*/
/* 					}*/
/* 				}	*/
/* */
/* 				//工资通知，完成		*/
/* 				for(var i in datas.wages_list){*/
/* */
/* 					if (datas.wages_list[i]['is_sign']==0) {*/
/* 						totalNum++;*/
/* 						li+=`<li data-clipboard-text='${datas.wages_list[i].userInfo['name']}' type="wage">*/
/* 							<div class="mesTitle" style="top:8px;color:#00ffff">${datas.wages_list[i].userInfo['name']}</div>*/
/* 						*/
/* 							<label class="mesTitle" style="top:12px">${(datas.wages_list[i].month +"工资表")}</label>*/
/* 							<label class="mesStatus" style="top:12px">未复核</label>*/
/* 						</li>`*/
/* 					}*/
/* 				}*/
/* 				$('#infoList').html(li);*/
/* 				$('.tz').html($('#infoList').find('li').length);*/
/* 				//var nowNum = parseInt($('.badge').text().trim());*/
/* 				//console.log($('.badge').text().trim());*/
/* 				//console.log(totalNum+nowNum)*/
/* 				var numbers = $('#mesConBox').find('li').length;*/
/* 				if (numbers>99) {*/
/* 					numbers = "99+";*/
/* 				}*/
/* 				$('.badge').text(numbers);*/
/* 				tzPageOnTaskAndInfo();*/
/* 			}*/
/* */
/* 		//任务和通知点击跳转*/
/* 		function tzPageOnTaskAndInfo(){*/
/* 			$('#taskList li,#infoList li').unbind('click').click(function(){*/
/* 				var type=$(this).attr('type');*/
/* 				if (type!='plan' && type != 'schedule') {*/
/* 					ykp.prompt('已将公司名称复制到剪贴板！');*/
/* 				}*/
/* 				if (type=='wage') {*/
/* 					ykp.prompt('已将员工姓名复制到剪贴板！');*/
/* 				}*/
/* 				skPage(type_url[type]);*/
/* 			})*/
/* 		}*/
/* */
/* 		getAllInfo();*/
/* 		//显示所有通知*/
/* 		function getAllInfo(){*/
/* 			ykp.doAjax({*/
/* 				url:'/api/api_home/get_my_tz',*/
/* 				method:'get',*/
/* 				anync:false,*/
/* 				success:function(res){*/
/* 					addInfoList(res);*/
/* 					*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		copys();//点击将公司名称复制到剪切板*/
/* 		function copys() {*/
/* 			//设置任务列表的点击事件*/
/* 			var task = new Clipboard('#taskList li');*/
/* 		    task.on('success', function(e) {*/
/* */
/* 		        // console.log(e);*/
/* 		    });*/
/* 		    task.on('error', function(e) {*/
/* 		        // console.log(e);*/
/* 		    });*/
/* 		    //设置通知列表的点击事件*/
/* 		    var info = new Clipboard('#infoList li');*/
/* 		    info.on('success', function(e) {*/
/* 		        // console.log(e);*/
/* 		    });*/
/* 		    info.on('error', function(e) {*/
/* 		        // console.log(e);*/
/* 		    });*/
/* 		}*/
/* */
/* 		//顶部搜索框显示  隐藏*/
/* 		$('.nav-user-search').click(function(){*/
/* 			if($(this).hasClass('rightnow')){*/
/* 				$(this).removeClass('rightnow').next().hide();*/
/* 				return;*/
/* 			}*/
/* 			$(this).addClass('rightnow').next().show();*/
/* 		});*/
/* 		//打开弹框*/
/* 		$('#open').click(function() {*/
/*             if($('#messageCon').css('right')=='-320px'){*/
/*                getAllInfo();*/
/*                allTask();*/
/*                getMessageList();*/
/*                $('#messageCon').css('right', '0px')*/
/*             }else {*/
/*                 $('#messageCon').css('right', '-320px')*/
/*             }*/
/* */
/* 		})*/
/* */
/* 			*/
/* 		getUserinfo();		//获取用户信息*/
/* 		getMessageList();   //获取消息列表*/
/* 		setLeftMinHeight();  //设置侧边栏minHeight*/
/* 		setCurrentLeftHeight();*/
/* */
/* 		//判断是否登录，获取用户信息*/
/* 		function getUserinfo() {*/
/* 			if(!ykp.getCookie('uid')) {*/
/* 				$('#noLogin').css('display', 'block');*/
/* 				$('#loginIn').css('display', 'none');*/
/* 			} else {*/
/* 				$('#noLogin').css('display', 'none');*/
/* 				$('#loginIn').css('display', 'block');*/
/* 				$('#NickName').text(JSON.parse(ykp.getCookie('userinfo')).name);*/
/* 				var avatar= JSON.parse(ykp.getCookie('userinfo')).avatar || '/resource/adimin/assets/images/avatar.png';*/
/* */
/* 				$('#showprofile').attr('src', avatar);*/
/* 			}*/
/* 		}*/
/* */
/* 		//设置当前侧边栏height*/
/* 		function setCurrentLeftHeight(){*/
/* 			var dHeight = $(document.body).height();*/
/* 			var uHeight = $('#sidebar .left>ul:visible').height();*/
/* 			var wHeight = $(window).height();*/
/* 			if(dHeight >= uHeight){*/
/* 				$('#sidebar .left>ul:visible').parent().css('height',dHeight+ 'px');*/
/* 			} else {*/
/* 				$('#sidebar .left>ul:visible').parent().css('height',uHeight+ 'px');*/
/* 			}*/
/* //			$('.goMini').css('top',((wHeight/2)-158)+'px');*/
/* 			$('.goMini').css('bottom','0px');*/
/* //			$('.goMini').css('top',(uHeight / 2 - 50) + 'px');*/
/* 		}*/
/* */
/* 		function setLeftMinHeight() {*/
/* 			var height = $(window).height();*/
/* 			//console.log(height);*/
/* 			$('#contentBox').css('height',(height-91) + 'px');*/
/* 			$('.left').css('min-height',(height - 90) + 'px');*/
/* 			$("#goMinibox").css("top",(height-30)+ 'px').show();*/
/* 			$(window).resize(function(){*/
/* 				height = $(window).height();*/
/* 				//console.log(height);*/
/* //				$('.custom_table').css('height',(height-350) + 'px')*/
/* 				$('#contentBox').css('height',(height-91) + 'px');*/
/* 				$('.left').css('min-height',(height - 90) + 'px');*/
/* 				$("#goMinibox").css("top",(height-30)+ 'px');*/
/* 				*/
/* 			});*/
/* 		}*/
/* */
/* 		//阅读消息*/
/* 		function readMsg(){*/
/* 			$("#msgList li").click(function(){*/
/* 				*/
/* 				$("#contacts").val($(this).find('img').attr('data-id')).trigger('change')*/
/* 			var dat=$(this).find('.msgcon').text();*/
/* 			copys(dat);*/
/* 			if ($(this).attr("isread")==1){*/
/* 				$(this).find(".user-info").addClass("showTheInfo");*/
/* 				return;*/
/* 			}*/
/* 			$(this).find(".user-info").addClass("showTheInfo");*/
/* 			$(this).find(".readmark").css("background",'');*/
/* 			var id = $(this).attr("data-id");*/
/* 			ykp.doAjax({*/
/* 				url:'/api/api_msg/read_msg',*/
/* 				data:{id:id},*/
/* 				method:'post',*/
/* 				success:function(res){*/
/* */
/* 				}*/
/* 				})*/
/* 			})*/
/* 		}*/
/* */
/* 		sendMsg();*/
/* 		//发消息*/
/* 		function sendMsg(){*/
/* 			$(".send").click(function(){*/
/* 				var emp_id=$("#contacts").val();*/
/* 				var msg=$("#msg").val();*/
/* 				$("#msg").val('');*/
/* 				ykp.doAjax({*/
/* 					url:'/api/api_msg/add',*/
/* 					data:{to_user:emp_id,content:msg},*/
/* 					method:'post',*/
/* 					success:function(res){*/
/* 						ykp.prompt('发送成功！');*/
/* 					}*/
/* 				})*/
/* 			})*/
/* 		}*/
/* */
/* 			//getNoRead();*/
/* 		//获取未读消息数*/
/* 		function getNoRead(){*/
/* 			ykp.doAjax({*/
/* 				url:'/api/api_msg/get_not_read',*/
/* 				method:'get',*/
/* 				success:function(res){*/
/* 					var totalNum =res.data.length;*/
/* 					//$('.badge').text(parseInt($('.badge').text())+totalNum);*/
/* 					/*if (num>99) {*/
/* 						totalNum='99+';*/
/* 						return;*/
/* 					}*//* */
/* 				}*/
/* 			})*/
/* 		}	*/
/* */
/* 		//图片路径错误处理*/
/* 		function imgErrorHandle(){*/
/* 			$('#msgList img').unbind('error').error(function(){*/
/* 				$(this).attr('src','/resource/adimin/assets/images/avatar.png');*/
/* 			});*/
/* 		}*/
/* */
/* 		//获取消息列表*/
/* 		function getMessageList(){*/
/* 			var msgHtml = "";*/
/* 			ykp.doAjax({*/
/* 				url:'/api/api_msg/get_list',*/
/* 				method:'get',*/
/* 				success:function(res){*/
/* 					var data=res.data.list;*/
/*                     var _data =res.data;*/
/*                     for(var i in data) {*/
/* 						msgHtml += ` <li style="padding-right:10px;" data-id="${data[i].id}" isread="${data[i].is_read}" class="light-blue dropdown-modal nav ace-nav">*/
/* 		                <a data-toggle="dropdown" href="#" class="dropdown-toggle" style="margin-top: 15px;">*/
/* 		                    <img data-id="${data[i].fromInfo.id}" class="nav-user-photo " style="top: 15px;" src="${data[i]['fromInfo']['avatar'] || '/resource/adimin/assets/images/avatar.png'}"*/
/* 		                         alt="Jason's Photo">*/
/* 		                    <span class="user-info msgcon" style="margin-top: 4px; color: #00ffff;">*/
/*                                 <small style="color: #00a3ff;margin-bottom: 4px;">${data[i].fromInfo.name}</small>*/
/*                                 ${data[i].content}*/
/*                             </span>*/
/* 		                </a>*/
/* 		                <span style=" display: block;font-size: 12px; line-height: 10px !important; float: right;position: absolute;top:17px;right: 10px;">${data[i]['read_time'] ? cs.getNowTime(data[i]['read_time'],true) :  cs.getNowTime(data[i]['create_at'],true)}</span>*/
/* 		                <span class="readmark" style="display:inline-block;height:8px;width:8px; border-radius:5px 5px;background:${data[i].is_read==0?'red':''};position: absolute;top:23px;right: 17px;"></span>*/
/* 		            </li>`;*/
/* 			}*/
/* 				$('#msgList').html(msgHtml);*/
/* 				$('.message').html(_data.not_read ? _data.not_read :0);*/
/* 				//图片路径错误处理*/
/* 				// imgErrorHandle();*/
/* */
/* 				var numbers = $('#mesConBox').find('li').length;*/
/* 				if (numbers>99) {*/
/* 					numbers = "99+";*/
/* 				}*/
/* 				$('.badge').text(numbers);*/
/* 				readMsg();*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		$('#onProcess').remove()*/
/* 		var div = document.createElement("div");*/
/* 		var html = '<div class="dataTables_processing" id="onProcess">' + '<div id="mark"></div><div class="note-success" style="padding:10px;border-radius:10px;">' + '<img  style="margin-right:10px;top:-1px;display: inline-block; position:relative" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABAElEQVQ4T6WTUVEDQRBEXysgcRAcBAUEBSABFICE4AAHHA5wACgACZGAg6Z6a44ix90FKv2ztTUzPdO9s+JIaKre9hXwWPELSR9juXMEr8B5Fb1J2theA5+Sdj3ZHMEzcFmJT0AIf06UO3sEtq+BlaSt7QWwTUfgAQhhP9F9cn4RzPlZnnSVs+k9mZTw18f5JrAd1qbrwCSRcwt0km4aQbn7DiwlRfMkbCd+0vQHhzoO42V0zM4E3b8JhoRjz7iQFJ17sL0CInMn6Wx0kWznrdeSkhxv2pnNi8nASxWe9ts4nCDLk4JmZBlmScu639UEadQw64Ht9oEk5Q+M4mgTvwDVbGURV0/HhAAAAABJRU5ErkJggg==" class="rotate"/>' + '<span style="font-size:14px;">' + '数据玩命加载中...' + '</div>' + '</div>'*/
/* 		div.innerHTML = "";*/
/* 		//页面出初始化  判断是分享页面还是自己登陆的页面链接*/
/* 		if(getUrlParam('url') == 'null' || getUrlParam('i') == 'null' || getUrlParam('type') == 'null' || getUrlParam('url') == null || getUrlParam('url') == null || getUrlParam('url') == null) {*/
/* //			console.log(getUrlParam('i'));*/
/* 			var home_url = $('#navBox #nav-list:first').find('li').eq(0).attr('data-url');*/
/* 			var url = 'http://' + window.location.host + home_url;*/
/* 			var data = {*/
/* 				currentIndex: '0-0',*/
/* 				liType: '0'*/
/* 			}*/
/* 			getPageContent(url, true, data);*/
/* 			//bottonLine*/
/* 			var left = $('#sidebar-shortcuts-large .btn').first().position().left;*/
/* 			$('.bottonLine').css('left', left + 'px');*/
/* 		}*/
/* */
/* 		//分享页面功能*/
/* 		getShare();*/
/* 		function getShare() {*/
/* 			var getUrl = getUrlParam('url');*/
/* 			//当前为首页时  时没有url值的*/
/* 			var dataIndex = getUrlParam('i') ? getUrlParam('i').split('-') : null;*/
/* 			var dataLi = getUrlParam('type');*/
/* 			var text = '';*/
/* 			if(dataIndex) {*/
/* 				if(dataLi == 0) {*/
/* 					var thisEl = $('#navBox #nav-list').eq(dataIndex[0]).children('li').eq(dataIndex[1]).addClass('active').siblings().removeClass('active').removeClass('active1');*/
/* 					thisEl.parents('#nav-list').siblings().children('li').removeClass('active').removeClass('active1');*/
/* 					thisEl.parents('#nav-list').siblings().children('li').find('.submenu').children().removeClass('active').removeClass('active1');*/
/* 					thisEl.parents('#nav-list').siblings().children('li').find('.submenu').stop().slideUp();*/
/* 					thisEl.parents('#nav-list').find('li .submenu').slideUp();*/
/* 					text = $('#navBox #nav-list').eq(dataIndex[0]).children('li').eq(dataIndex[1]).find('a').text();*/
/* 					//控制顶部左侧栏顶部操作*/
/* 					$("#sidebar-shortcuts-large .btn").eq(dataIndex[0]).attr('id', 'btn').siblings().attr('id', '');*/
/* 					var left = $("#sidebar-shortcuts-large .btn").eq(dataIndex[0]).position().left;*/
/* 					var navList = $("#navBox .nav-list");*/
/* 					navList.eq(dataIndex[0]).css('display', 'block').siblings().css('display', 'none');*/
/* 					$('.bottonLine').css('left', left);*/
/* 				} else {*/
/* 					var thatEl = $('#navBox #nav-list').eq(dataIndex[0]).children('li').eq(dataIndex[1]);*/
/* 					thatEl.parents('#nav-list').siblings().children('li').removeClass('active').removeClass('active1');*/
/* 					thatEl.addClass('active').addClass('active1').find('li').eq(dataIndex[2]).addClass('active1').addClass('active').siblings().removeClass('active').removeClass('active1');*/
/* 					thatEl.find('.submenu').stop().slideDown();*/
/* 					thatEl.siblings().removeClass('active').removeClass('active1').find('li').removeClass('active').removeClass('active1')*/
/* 					thatEl.siblings().find('.submenu').stop().slideUp();*/
/* */
/* 					text = $('#navBox #nav-list').eq(dataIndex[0]).children('li').eq(dataIndex[1]).children('.submenu').find('li').eq(dataIndex[2]).find('a').text();*/
/* 					//控制顶部左侧栏顶部操作*/
/* 					$("#sidebar-shortcuts-large .btn").eq(dataIndex[0]).attr('id', 'btn').siblings().attr('id', '');*/
/* 					var left = $("#sidebar-shortcuts-large .btn").eq(dataIndex[0]).position().left;*/
/* 					var navList = $("#navBox .nav-list");*/
/* 					navList.eq(dataIndex[0]).css('display', 'block').siblings().css('display', 'none');*/
/* 					$('.bottonLine').css('left', left);*/
/* 				}*/
/* */
/* 				dataIndex = dataIndex.join('-')*/
/* 				var data = {*/
/* 					currentIndex: dataIndex,*/
/* 					liType: dataLi*/
/* 				}*/
/* */
/* 				getPageContent(getUrl, true, data);*/
/* 				var num = 0;*/
/* 				if(dataIndex != '0-0') {*/
/* 					$('.navCon .page-tabs-content').find('a').each(function(i, item) {*/
/* 						if($(this).attr('data-url') == getUrl) {*/
/* 							$(this).addClass('active').parent().siblings().find('a').removeClass('active');*/
/* 							num += 1;*/
/* 						}*/
/* 					})*/
/* 				}*/
/* */
/* 				if(num == 0 && dataIndex != '0-0') {*/
/* 					var navConCon = '<div class="page-tabs-content"><a class="active" data-index="' + dataIndex + '" data-li="' + dataLi + '" data-url="' + getUrl + '">' + text + '<i id="fa-close" class="iconfont tit-close">&#xe618;</i></a></div>';*/
/* 					$('.navCon').append(navConCon);*/
/*                     $('.pageTable').scrollLeft($('.pageTable').scrollLeft() + 200);*/
/* 					$('.navCon .page-tabs-content').eq(0).children('a').removeClass('active');*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		$('#userInfo').click(function() {*/
/* 			var url = $(this).attr('data-url');*/
/* 			var dataIndex = getUrlParam('i') ? getUrlParam('i') : null;*/
/* 			var dataLi = getUrlParam('type');*/
/* 			var data = {*/
/* 				currentIndex: dataIndex,*/
/* 				liType: dataLi*/
/* 			}*/
/* 			getPageContent(url, true, data);*/
/* 		})*/
/* */
/* */
/*         $('#showprofile').click(function () {*/
/*            $("#sidebar-shortcuts-large").find(".btn").eq(3).click();*/
/*            $("#navBox").find('.nav-list').eq(3).find("li").last().click();*/
/*         })*/
/* */
/* 		$('#navBox #nav-list li').click(function() {*/
/* 			var currentIndex = ''; //index集合*/
/* 			var liType = ''; //判断是够是一级菜单还是二级菜单  0为1级   1 为2级*/
/* 			if(!$(this).hasClass('active1')) {*/
/* 				$(this).addClass('active1')*/
/* 				$(this).parents('#nav-list').siblings().children('li').removeClass('active');*/
/* */
/* 				//当为第一栏时*/
/* 				if($(this).parents('#nav-list').siblings().eq(0)) {*/
/* 					$(this).parents('#nav-list').siblings().children('li').removeClass('active').removeClass('active1');*/
/* 					$(this).parents('#nav-list').siblings().children('li').find('.submenu').children().removeClass('active').removeClass('active1')*/
/* 					$(this).parents('#nav-list').siblings().children('li').find('.submenu').stop().slideUp();*/
/* 				} else { //当不为第一栏时*/
/* 					$(this).parents('#nav-list').siblings().children('li').removeClass('active').removeClass('active1');*/
/* 				}*/
/* */
/* 				//选中当前一级导航添加选中属性  其他移除选中状态*/
/* 				$(this).addClass('active').siblings().removeClass('active').removeClass('active1');*/
/* 				//二级子节点删除选中状态*/
/* 				$(this).siblings().find('.submenu').children('li').removeClass('active').removeClass('active1');*/
/* 				$(this).siblings().find('.submenu').stop().slideUp(function(){*/
/* //					$('.goMini').css('top',($('#sidebar .left>ul:visible').height() / 2 - 50) + 'px');*/
/* 				})*/
/* 				//二级菜单展开*/
/* 				$(this).find('.submenu').stop().slideDown(function(){*/
/* //					$('.goMini').css('top',($('#sidebar .left>ul:visible').height() / 2 - 50) + 'px');*/
/* 				});*/
/* */
/* 				if(!$(this).hasClass('menuB')) {*/
/* 					if($(this).parent().parent().hasClass('menuB')) {*/
/* 						var first = $(this).parents('#nav-list').index().toString();*/
/* 						var scend = $(this).parent().parent().index().toString();*/
/* 						var three = $(this).index().toString();*/
/* 						currentIndex = (first + '-' + scend + '-' + three);*/
/* 						liType = 1;*/
/* 					} else {*/
/* 						var _first = $(this).parents('#nav-list').index().toString();*/
/* 						var _scend = $(this).index().toString();*/
/* 						currentIndex = (_first + '-' + _scend);*/
/* 						liType = 0;*/
/* 					}*/
/* */
/* 					var length = $('.navCon .page-tabs-content').length;*/
/* 					//右上navCon选项卡*/
/* 					var text = $(this).text().trim();*/
/* 					var _url = $(this).attr('data-url');*/
/* 					_url = _url.slice(_url.lastIndexOf('/') + 1, _url.length);*/
/* 					var num = 0;*/
/* 					$('.navCon .page-tabs-content').find('a').each(function(i, item) {*/
/* 						if($(this).attr('data-url') == _url) {*/
/* 							$(this).addClass('active').parent().siblings().find('a').removeClass('active');*/
/* 							num += 1;*/
/* 						}*/
/* 					})*/
/* */
/* 					if(num == 0) {*/
/*                         var navConCon = '<div class="page-tabs-content"><a class="active" data-index="' + currentIndex + '" data-li="' + liType + '" data-url="' + _url + '">' + text + '<i id="fa-close" class="iconfont tit-close">&#xe618;</i></a></div>';*/
/* 						$('.navCon').append(navConCon);*/
/* 						$('.pageTable').scrollLeft($('.pageTable').scrollLeft() + 200);*/
/* 					}*/
/* */
/* 					//给其他选项卡移除选中事件*/
/* 					$('.navCon .page-tabs-content').eq(length).siblings().find('a').removeClass('active');*/
/* 					var url = 'http://' + window.location.host + $(this).attr('data-url');*/
/* 					var data = {*/
/* 						currentIndex: currentIndex,*/
/* 						liType: liType*/
/* 					}*/
/* 					getPageContent(url, true, data);*/
/* 					ykp.setCookie('filter',"");*/
/* 					ykp.setCookie('month2',"");*/
/* 				}*/
/* */
/* 			} else {*/
/* 				//双击二级选项卡关闭下拉*/
/* 				$(this).removeClass('active1');*/
/* 				$(this).find('.submenu').stop().slideUp(function(){*/
/* //					$('.goMini').css('top',($('#sidebar .left>ul:visible').height() / 2 - 50) + 'px');*/
/* 				});*/
/* 			}*/
/* 			return false;*/
/* 		})*/
/* */
/* 		//点击顶部选项卡*/
/* 		$('.navCon').on('click', '.page-tabs-content', function(){*/
/* 			if($(this).find('a').hasClass('active')){*/
/* 				return;*/
/* 			}*/
/* 			*/
/* 			ykp.setCookie('filter',"");*/
/* 			ykp.setCookie('month2',"");*/
/* 			*/
/* 			var _index = $(this).index();*/
/* 			var dataIndex = $(this).find('a').attr('data-index');*/
/* 			var dataLi = $(this).find('a').attr('data-li');*/
/* 			getACtiveEl(dataIndex, dataLi);*/
/* 			changeMini(dataIndex, dataLi);*/
/* 			$(this).find('a').addClass('active').parent().siblings().find('a').removeClass('active');*/
/* 			var url = $(this).find('a').attr('data-url');*/
/* 			var currentIndex = $(this).find('a').attr('data-index');*/
/* 			var liType = $(this).find('a').attr('data-li');*/
/* 			var data = {*/
/* 				currentIndex: currentIndex,*/
/* 				liType: liType*/
/* 			}*/
/* 			getPageContent(url, false, data);*/
/* 		})*/
/* */
/* 		//点击顶部选项卡删除按钮*/
/* 		$('.navCon').on('click', '.tit-close', function(event) {*/
/* 			if(!$(this).parent().hasClass('active')){*/
/* 				return false;   //未选中选项卡不可删除*/
/* 			}*/
/* */
/* 			//清除LocalStorag缓存*/
/* 			var index = $(this).parent().attr('data-index');*/
/* 			ykp.delLocalStorage(index);*/
/* */
/* 			var parent = $(this).parents('.navCon').find('.page-tabs-content');*/
/* 			var circleindex = $(this).parents('.page-tabs-content').index();*/
/* 			var el = $('.navCon .page-tabs-content').eq(circleindex + 1);*/
/* 			if($(this).parent().hasClass('active')) {*/
/* 				//判断当前选项卡后面是否有选项卡*/
/* 				if(el.length == 1) {*/
/* 					parent.eq((circleindex + 1)).children('a').addClass('active');*/
/* 					var that = parent.eq((circleindex + 1)).children('a');*/
/* 					var url = that.attr('data-url');*/
/* 					var dataIndex = that.attr('data-index');*/
/* 					var dataLi = that.attr('data-li');*/
/* */
/* 					var data = {*/
/* 						currentIndex: dataIndex,*/
/* 						liType: dataLi*/
/* 					}*/
/* */
/* 					getACtiveEl(dataIndex, dataLi);*/
/* 					changeMini(dataIndex, dataLi);*/
/* */
/* 					getPageContent(url, false, data);*/
/* 				} else {*/
/* 					parent.eq((circleindex - 1)).children('a').addClass('active');*/
/* 					var That = parent.eq((circleindex - 1)).children('a');*/
/* 					var url = That.attr('data-url');*/
/* 					var dataIndex = That.attr('data-index');*/
/* 					var dataLi = That.attr('data-li');*/
/* 					var data = {*/
/* 						currentIndex: dataIndex,*/
/* 						liType: dataLi*/
/* 					}*/
/* */
/* 					getACtiveEl(dataIndex, dataLi);*/
/* 					changeMini(dataIndex, dataLi);*/
/* */
/* 					getPageContent(url, false, data);*/
/* */
/* 				}*/
/* 				$(this).parents('.page-tabs-content').remove();*/
/* 				//防止冒泡*/
/* 				return false;*/
/* 			} else {*/
/* 				$(this).parents('.page-tabs-content').remove();*/
/* 				//防止冒泡*/
/* 				return false;*/
/* 			}*/
/* 		});*/
/* 		//滚动左右pageNav的滚动条实现左右移动*/
/* 		$('.navBarTable .pageleft').unbind('click').click(function() {*/
/*             // console.log(1)*/
/*             //$('.pageTable').scrollLeft($('.pageTable').scrollLeft() - 200);*/
/* 			$('.pageTable').animate({scrollLeft:$('.pageTable').scrollLeft() - 150},500);*/
/* 		});*/
/* */
/* 		$('.navBarTable .pageright').unbind('click').click(function() {*/
/*             // console.log(2)*/
/*             //$('.pageTable').scrollLeft($('.pageTable').scrollLeft() + 200);*/
/* 			$('.pageTable').animate({scrollLeft:$('.pageTable').scrollLeft() + 150},500);*/
/* 		});*/
/* */
/* 		//关闭所有操作*/
/* 		$('.pageClose1').click(function() {*/
/* 			*/
/* 			//清除缓存*/
/* 			var navA = $('.navCon a');//获取顶部选项卡中所有的a元素*/
/* 			var indexs = [];*/
/* 			navA.each(function(){*/
/* 				indexs.push($(this).attr('data-index'));*/
/* 			});*/
/* 			for(var i in indexs){*/
/* 				if(indexs[i] != '0-0'){*/
/* 					ykp.delLocalStorage(indexs[i]);*/
/* 				}*/
/* 			}*/
/* */
/* 			var That1 = $('.navCon').find('.page-tabs-content').eq(0).children("a");*/
/* 			var url = That1.attr('data-url');*/
/* 			var dataIndex = That1.attr('data-index');*/
/* 			var dataLi = That1.attr('data-li');*/
/* */
/* 			var data = {*/
/* 				currentIndex: dataIndex,*/
/* 				liType: dataLi*/
/* 			}*/
/* */
/* 			getACtiveEl(dataIndex, dataLi);*/
/* 			changeMini(dataIndex, dataLi);*/
/* */
/* 			getPageContent(url, false, data);*/
/* 			$('.navCon').find('.page-tabs-content').eq(0).children('a').addClass('active');*/
/* 			$('.navCon').find('.page-tabs-content').eq(0).siblings().remove();*/
/* 		})*/
/* 		*/
/* 		//关闭其他操作*/
/* 		$('.pageClose2').click(function() {*/
/* */
/* 			//清除缓存*/
/* 			var navA = $('.navCon a').not('.active');//获取顶部选项卡中除了被选中的所有a元素*/
/* 			var indexs = [];*/
/* 			navA.each(function(){*/
/* 				indexs.push($(this).attr('data-index'));*/
/* 			});*/
/* 			for(var i in indexs){*/
/* 				if(indexs[i] != '0-0'){*/
/* 					ykp.delLocalStorage(indexs[i]);*/
/* 				}*/
/* 			}*/
/* */
/* 			var index = '';*/
/* 			$('.navCon .page-tabs-content').find('a').each(function() {*/
/* 				if($(this).hasClass('active')) {*/
/* 					index = $(this).parent().index();*/
/* 				}*/
/* 			})*/
/* */
/* 			var el = $('.navCon').find('.page-tabs-content');*/
/* 			$('.navCon .page-tabs-content').each(function(i) {*/
/* 				if(i != 0 && i != index) {*/
/* 					$(this).remove();*/
/* 				}*/
/* 			})*/
/* 		})*/
/* */
/* 		*/
/* */
/* 		goMini();*/
/* */
/* 		function goMini() {*/
/* 			$('.goMini').click(function() {*/
/* 				if($(this).find('i').hasClass('fa-angle-double-left')) {*/
/* 					$(this).find('i').addClass('fa-angle-double-right').removeClass('fa-angle-double-left');*/
/* 				}else{*/
/* 					$(this).find('i').addClass('fa-angle-double-left').removeClass('fa-angle-double-right');*/
/* 				}*/
/* 				*/
/* 				var icon = '';*/
/* 				var index = '';*/
/* 				var icon1 = '';*/
/* 				var dataindex = $('.navCon .active').attr('data-index');*/
/* 				var dataLi = $('.navCon .active').attr('data-li');*/
/* 				if($('#sidebar').hasClass('mini')) {*/
/* 					//小型侧栏状态 变大型侧栏*/
/* 					$('#sidebar').css('width', '190px');*/
/* 					$('.sidebarCon').show().css('width', '190px');*/
/* 					$('#sidebar').removeClass('mini');*/
/* 					$('.navBarTable').css('cssText','width: calc(100% - 190px) !important;')*/
/* 					$('#right').css('width','calc(100% - 190px) ')*/
/* 					$('.miniNavCon').fadeOut(300);*/
/* 					$('.miniNav').fadeOut(300);*/
/* 					$('#miniTool').fadeOut(300);*/
/* 					$('#navBox').fadeIn(300);*/
/* 					$('.miniNav #miniNavList').hide();*/
/* 					setTimeout(function() {*/
/* 						$('#sidebar-shortcuts-large').show();*/
/* 						$('#sidebar-shortcuts').fadeIn(300);*/
/* 						icon1 = $('#miniTool>a').find('i').attr('class');*/
/* 						$('#sidebar-shortcuts-large .btn').each(function(i) {*/
/* 							if($(this).children('i').attr('class') == icon1) {*/
/* 								index = i;*/
/* 							}*/
/* 						});*/
/* 						$("#sidebar-shortcuts-large .btn").eq(index).attr('id','btn').siblings().attr('id', '');*/
/* */
/* 						var left = $("#sidebar-shortcuts-large .btn").eq(index).position().left;*/
/* 						$('.bottonLine').css('left', left);*/
/* 						$("#navBox .nav-list").eq(index).css('display', 'block').siblings().css('display', 'none');*/
/* */
/* 						getACtiveEl(dataindex, dataLi);*/
/* */
/* 						setTimeout(function(){*/
/* 							setCurrentLeftHeight();*/
/* 							*/
/* 						},300);*/
/* 						*/
/* 					},300);*/
/* 					$("#goMinibox").css('width',"190px");*/
/* 				} else {*/
/* 					//大型侧栏状态  变小型侧栏*/
/* 					$('#sidebar-shortcuts-large .btn').each(function(i) {*/
/* 						if($(this).attr('id') == 'btn') {*/
/* 							icon = $(this).children().attr('class');*/
/* 							index = i;*/
/* 						}*/
/* 					});*/
/* 					$("#goMinibox").css('width',"60px");*/
/* 					$('#sidebar').css('width', '60px');*/
/* 					$('.sidebarCon').css('width', '60px');*/
/* 					$('#sidebar').addClass('mini');*/
/* 					$('#right').css('cssText','width:calc(100% - 60px) !important ');*/
/* 					$('.navBarTable').css('cssText','width: calc(100% - 60px) !important;');*/
/* 					$('#navBox').fadeOut(300);*/
/* 					setTimeout(function() {*/
/* 						$('.miniNavCon').fadeIn(300);*/
/* 						$('#sidebar-shortcuts').hide();*/
/* 						$('.sidebarCon').hide();*/
/* 						$('#miniTool').fadeIn(300);*/
/* 						$('.miniNav').fadeIn(300);*/
/* 						*/
/* 						$('.miniNav #miniNavList').eq(index).css('display','block');*/
/* 						$('#miniTool>a').find('i').attr('class',icon);*/
/* 						$('#miniTool .tooleUl li').find('i').each(function(i) {*/
/* 							if($(this).hasClass(icon)) {*/
/* 								$(this).parent().addClass('active').parent().siblings().children('a').removeClass('active');*/
/* 							}*/
/* 						})*/
/* 						changeMini(dataindex,dataLi);*/
/* 					});*/
/* 				}*/
/* 			})*/
/* 		}*/
/* 		//页面跳转*/
/* 		function skPage(urls){	*/
/* 			urls = urls.split('&');*/
/* */
/* 			//路径*/
/* 			var url = urls[0].split('=')[1];*/
/* 			//下标*/
/* 			var index = urls[1].split('=')[1];*/
/* */
/* 			index = index.split('-');*/
/* */
/* 			//切换至对应的所属模块（首页 || 审批 || 报表 || 系统色值）*/
/* 			$('#sidebar-shortcuts-large div').eq(index[0]).click();*/
/* */
/* 			//将所有li的激活class删除*/
/* 			$('.left li').not('.menuB').removeClass('active').removeClass('active1');*/
/* */
/* 			//3级目录额外处理*/
/* 			if(index.length == 3){*/
/* 				// console.log(2);*/
/* 				//如果需要展开的选项跟当前展开的选项不一致时，收起当前展开的选项并且打开相应的选项*/
/* 				if(!$('.left').eq(1).find('li[data-url="/admin/'+  url +'"]').parents('.menuB').hasClass('active1')){*/
/* 					// console.log(1);*/
/* 					//先收起侧边栏打开的选项*/
/* 					$('.left .menuB.active1').removeClass('active').removeClass('active1').children('.submenu').slideUp();*/
/* 					//展开对应的选项*/
/* 					$('.left').eq(1).children('ul').eq(index[0]).children('li').eq(index[1]).addClass('active1').addClass('active').children('.submenu').slideDown();*/
/* 				};*/
/* 			}*/
/* 			*/
/* */
/* 			//跳转*/
/* 			$('.left').eq(1).find('li[data-url="/admin/'+  url +'"]').click();	*/
/* 		}*/
/* 		/***/
/* 		 * 小型navList  toolBar点击时间*/
/* 		 *//* */
/* 		*/
/* 		clickMiniBar();*/
/* 		function clickMiniBar() {*/
/* 			$('#miniTool .tooleUl li').stop().click(function() {*/
/* 				var clickIndex = $(this).index();*/
/* 				$(this).children('a').addClass('active').parent().siblings().children('a').removeClass('active');*/
/* 				var icon = $(this).find('i').attr('class');*/
/* 				//给总栏添加选中状态icon图标*/
/* 				$(this).parents('#miniTool').children('a').find('i').attr('class',icon);*/
/* 				$('.miniNav #miniNavList').eq(clickIndex).show().siblings().hide();*/
/* 				setCurrentLeftHeight();*/
/* 			})*/
/* 		}*/
/* */
/* 		/***/
/* 		 * 获取当前下标点击的状态并改变状态*/
/* 		 * @param {Object} dataIndex  下标*/
/* 		 * @param {Object} dataLi  菜单类型*/
/* 		 *//* */
/* 		function getACtiveEl(dataIndex, dataLi) {*/
/* 			dataIndex = dataIndex.split('-');*/
/* 			if(dataLi == 0) {*/
/* 				var thisEl = $('#navBox #nav-list').eq(dataIndex[0]).children('li').eq(dataIndex[1]).addClass('active').siblings().removeClass('active').removeClass('active1');*/
/* */
/* 				thisEl.parents('#nav-list').siblings().children('li').removeClass('active').removeClass('active1');*/
/* 				thisEl.parents('#nav-list').siblings().children('li').find('.submenu').children().removeClass('active').removeClass('active1');   */
/* 				thisEl.parents('#nav-list').siblings().children('li').find('.submenu').stop().slideUp();*/
/* 				thisEl.parents('#nav-list').find('li .submenu').slideUp();*/
/* */
/* 				//控制顶部左侧栏顶部操作*/
/* 				$("#sidebar-shortcuts-large .btn").eq(dataIndex[0]).attr('id', 'btn').siblings().attr('id', '');*/
/* 				var left = $("#sidebar-shortcuts-large .btn").eq(dataIndex[0]).position().left;*/
/* 				var navList = $("#navBox .nav-list");*/
/* 				navList.eq(dataIndex[0]).css('display', 'block').siblings().css('display', 'none');*/
/* 				$('.bottonLine').css('left', left);*/
/* 			} else {*/
/* 				var thatEl = $('#navBox #nav-list').eq(dataIndex[0]).children('li').eq(dataIndex[1]);*/
/* 				*/
/* 				var thatEl1 =  $('#navBox #nav-list').eq(dataIndex[0]).siblings().find('.submenu').stop().slideUp();*/
/* */
/* 				thatEl.parents('#nav-list').siblings().children('li').removeClass('active').removeClass('active1');*/
/* 				thatEl.addClass('active').addClass('active1').find('li').eq(dataIndex[2]).addClass('active1').addClass('active').siblings().removeClass('active').removeClass('active1');*/
/* 				thatEl1.addClass('active').addClass('active1').find('li').eq(dataIndex[2]).addClass('active1').addClass('active').siblings().removeClass('active').removeClass('active1');*/
/* 				*/
/* 				thatEl.find('.submenu').stop().slideDown();*/
/* 				thatEl.siblings().removeClass('active').removeClass('active1').find('li').removeClass('active').removeClass('active1')*/
/* 				thatEl.siblings().find('.submenu').stop().slideUp();*/
/* */
/* 				//控制顶部左侧栏顶部操作*/
/* 				$("#sidebar-shortcuts-large .btn").eq(dataIndex[0]).attr('id', 'btn').siblings().attr('id', '');*/
/* 				var left = $("#sidebar-shortcuts-large .btn").eq(dataIndex[0]).position().left;*/
/* */
/* 				var navList = $("#navBox .nav-list");*/
/* 				navList.eq(dataIndex[0]).css('display', 'block').siblings().css('display', 'none');*/
/* 				$('.bottonLine').css('left', left);*/
/* 			}*/
/* 		}*/
/* */
/* 		/***/
/* 		 * 获取页面数据*/
/* 		 * @param {string} url   地址*/
/* 		 * @param {Bool} state  是否玩命加载*/
/* 		 * @param {Object} data  参数*/
/* 		 *//* */
/* 		function getPageContent(url, state, data) {*/
/* 			//获取页面内容，改变地址栏数据*/
/* 			var newUrl = '';*/
/* 			var index = url.lastIndexOf('/');*/
/* 			var controller = url.slice((index + 1), url.length);*/
/* 			if(data && data.currentIndex != '0-0' && data.currentIndex != 'undefined') {*/
/* 				newUrl = "/admin/?url=" + controller + '&i=' + data.currentIndex + '&type=' + data.liType;*/
/* 			} else if(data.currentIndex == '0-0') {*/
/* 				newUrl = "/admin/";*/
/* 			} else {*/
/* 				newUrl = "/admin/?url=" + controller;*/
/* 			}*/
/* */
/* 			var stateObject = {};*/
/* 			var title = "";*/
/* 			history.pushState(stateObject, title, newUrl);*/
/* */
/* 			//判断是否有缓存数据*/
/* 			var content = ykp.getLocalStorage(data.currentIndex);*/
/* 			if(content){*/
/* 				$('#contentBox').html(content);*/
/* 				setCurrentLeftHeight();*/
/* 				return;*/
/* 			}*/
/* 			var Fun = function() {*/
/* */
/* 			};*/
/* 			if(state)*/
/* 				Fun = function() {*/
/* 					/***/
/* 					 * 有过有节点时  先删除再添加*/
/* 					 *//* */
/* 					if($('#onProcess')){*/
/* 						$('#onProcess').parent().remove()*/
/* 					}*/
/* 					$('body').append(div);*/
/* 				};*/
/* 			$.get({*/
/* 				beforeSend: Fun,*/
/* 				url: url,*/
/* 				success: function(res) {*/
/* 					$('#contentBox').html(res);*/
/* 					// var height = $(window).height();*/
/* //					$('.custom_table').css('height', '458px');*/
/* 					setCurrentLeftHeight();*/
/* 					ykp.setLocalStorage(data.currentIndex,res);*/
/* 					setTimeout(function() {*/
/* 						$('#onProcess').parent().remove()*/
/* 					}, 500);*/
/* 				},*/
/* 				error:function(err) {*/
/* 					setTimeout(function() {*/
/* 						$('#onProcess').parent().remove()*/
/* 					}, 500);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//mini菜单操作栏*/
/* 		$('.miniLi li').click(function() {*/
/* 			if($(this).hasClass('active')) {*/
/* 				return;*/
/* 			}*/
/* */
/* 			var data = {};*/
/* 			data.currentIndex = $('.tooleUl .active').parent().index() + '-' + $(this).parent().parent().index();//index集合*/
/* */
/* 			//判断是否有二级菜单,大于0则有2级菜单*/
/* 			if($(this).siblings().length > 0){*/
/* 				if($(this).index() == 0){ */
/* 					return;*/
/* 				}*/
/* 				highlight($(this));//高亮效果*/
/* 				data.currentIndex = data.currentIndex + '-' +($(this).index() - 1);*/
/* 				data.liType = 1;//判断是够是一级菜单还是二级菜单  0为1级   1 为2级*/
/* */
/* 				controlTab(data,$(this));*/
/* 				return;*/
/* 			}*/
/* */
/* 			highlight($(this));//高亮效果*/
/* */
/* 			data.liType = 0;//判断是够是一级菜单还是二级菜单  0为1级   1 为2级*/
/* */
/* 			controlTab(data,$(this));*/
/* */
/* 			setCurrentLeftHeight();*/
/* 		});*/
/* 		*/
/* 		*/
/* 		*/
/* */
/* 		//mini菜单操作栏高亮效果*/
/* 		function highlight(minili){*/
/* 			$('.miniNav').find('.active').removeClass('active');*/
/* 			minili.parent().prev().addClass('active');*/
/* 			minili.addClass('active');*/
/* 		}*/
/* */
/* 		//操作mini菜单栏顶部选项卡发生改变*/
/* 		function controlTab(data,minili){*/
/* 			var text = minili.text();*/
/* 			var url = minili.attr('data-url');				*/
/* 			url = url.substring(url.lastIndexOf('/') + 1);*/
/* */
/* 			var navA = $('.navCon a');//获取顶部选项卡中所有的a元素*/
/* 			var indexs = [];*/
/* 			navA.each(function(){*/
/* 				indexs.push($(this).attr('data-index'));*/
/* 			});*/
/* */
/* 			//如果顶部选项卡中包含了该选项，则切换到该选项卡*/
/* 			if($.inArray(data.currentIndex,indexs) != -1){*/
/* 				$('.navCon a').removeClass('active');*/
/* 				$('.navCon a[data-index='+data.currentIndex+']').addClass('active');*/
/* */
/* 				//获取页面内容*/
/* 				url = 'http://' + window.location.host + minili.attr('data-url');*/
/* 				getPageContent(url, false, data);*/
/* 				return;*/
/* 			}*/
/* */
/* 			//顶部选项卡*/
/* 			$('.navCon a').removeClass('active');*/
/* 			var navContent = '<div class="page-tabs-content"><a class="active" data-index="' + data.currentIndex + '" data-li="' + data.liType + '" data-url="' + url + '">' + text + '<i id="fa-close" class="iconfont tit-close">&#xe618;</i></a></div>';*/
/* 			$('.navCon').append(navContent);*/
/* 			$('.pageTable').scrollLeft($('.pageTable').scrollLeft() + 200);*/
/* */
/* 			//获取页面内容*/
/* 			url = 'http://' + window.location.host + minili.attr('data-url');*/
/* 			getPageContent(url, true, data);*/
/* 		}*/
/* */
/* 		//点击顶部选项卡，mini侧边栏样式改变*/
/* 		function changeMini(dataIndex,dataLi){*/
/* 			$('.miniNav .active').removeClass('active');*/
/* */
/* 			dataIndex = dataIndex.split('-');*/
/* 			$('.tooleUl a').eq(dataIndex[0]).click();*/
/* 			if(dataLi == 0){*/
/* 				$('.miniNav>ul').eq(dataIndex[0]).children('li').eq(dataIndex[1]).find('li').addClass('active').parent().parent().find('a').addClass('active');*/
/* 			}*/
/* 			if(dataLi == 1){*/
/* 				var index = eval(dataIndex[2] + '+' +1);*/
/* 				$('.miniNav>ul').eq(dataIndex[0]).children('li').eq(dataIndex[1]).find('li').eq(index).addClass('active').parent().parent().find('a').addClass('active');*/
/* 			}*/
/* 		}*/
/* 		/*setTimeout(function(){*/
/* 			console.log($('.select2-search__field'));*/
/* 			*/
/* 		},10000)*//* */
/* //		$('.in').on('input', function() {*/
/* //			if($(this).hasClass('modal-backdrop')){*/
/* //				$('.select2-search__field').on('input', function() {*/
/* //					alert(1);*/
/* //					$(this).val($(this).val().trim())*/
/* //				})*/
/* //			}*/
/* //				alert(2);*/
/* //				$(this).val($(this).val().trim())*/
/* //		})*/
/* 	})*/
/* </script>*/
