<?php

/* admin/platform/journal.html */
class __TwigTemplate_75ffb27750f42901083a720d59d54e192faa4b602fe2e07644062f82702990f6 extends Twig_Template
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
.content{
\twhite-space: normal;
\theight: 148px;
\tbackground-color:#f2f9f9;
\ttransition-property: background-color,height;
\ttransition-timing-function: linear;
\ttransition-duration:0.2s;   

}

.contractType  label{
\twidth: 80px !important;
}
.contractType  span[field]{
\tmin-width: 180px !important;
\tdisplay: inline-block;
}
</style>


<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<div>
\t\t\t<!--  <h3 class=\"header smaller lighter blue\">日志</h3> -->
\t\t\t<div class=\"actions\" id=\"topTool\" style=\"display: inline-block;width: 100%\">
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<select style=\"width: 180px\" pts=3 sear=\"tkm_plan.user_id\" class=\"advandced-search select2-hidden-accssible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\">创建人</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<select style=\"width: 180px\" pts=3 sear=\"tkm_plan.read_id\" class=\"advandced-search select2-hidden-accssible\"  tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t<option value=\"\"> 审阅人</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button id=\"search\" title=\"搜索\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t                        <button id=\"heightsearch\" title=\"高级搜索\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color:#00c0ef !important;\">
\t                            <i class=\"fa fa-filter\"></i>
\t                        </button>
\t             </div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
\t\t\t\t\t<button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
\t                    <i class=\"fa fa-refresh\"></i>
\t                </button>
\t\t\t\t</div>
\t\t\t\t<span contentAuthority=\"126\" style=\"float: left;margin-left: 1px\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"add\" title=\"添加\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32 !important;\">
\t\t                        <i class=\"fa fa-plus\"></i>

\t\t                    </button>
\t\t\t\t</span>
\t\t\t\t<div id=\"heightsearch1\" class=\"col-sx-12\" style=\"position: absolute;margin-top: 65px; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;\">
\t\t\t\t\t<div class=\"row\" id=\"SearchCon\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t
\t\t\t\t</div>
\t\t\t\t<!--审批-->
\t\t\t</div>
\t\t\t<div style=\"margin-top: 0px;\">

\t\t\t\t<div class=\"widget-box transparent\" id=\"recent-box\">
\t\t\t\t\t<div style=\"padding-left:0;\">
\t\t\t\t\t\t<div class=\"widget-toolbar no-border\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"recent-tab\">
\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" data-type=\"1\" href=\"#task-tab\">日计划</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" data-type=\"2\" href=\"#member-tab\">周计划</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" data-type=\"3\" href=\"#month-tab\">月计划</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--<span contentAuthority=\"126\" style=\"float: right;\">-->
\t\t\t\t\t\t\t<!--<button type=\"button\" id=\"add\" title=\"添加\" class=\"btn btn-info btn-sm\" style=\"background-color: #009688 !important;\">-->
\t\t                        <!--<i class=\"fa fa-plus\"></i>-->

\t\t                    <!--</button>-->
\t\t\t\t\t\t<!--</span>-->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t<div class=\"tab-content\" style=\"margin-top:8px;\">
\t\t\t\t\t\t\t<div id=\"task-tab\" class=\"tab-pane active custom_table\">
\t\t\t\t\t\t\t\t<table id=\"dynamic-table\">
\t\t\t\t\t\t\t\t\t<thead>

\t\t\t\t\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t\t\t\t\t<th >操作</th>
\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"1\">创建人</th>
\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"2\">工作总结</th>
\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"3\" class=\"hidden-480\">工作计划</th>
\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"4\" class=\"hidden-480\">心得体会</th>
\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"5\" class=\"hidden-480\">创建时间</th>
\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"6\" class=\"hidden-480\">审阅人</th>
\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"7\" class=\"hidden-480\">审阅时间</th>
\t\t\t\t\t\t\t\t\t\t\t<th data-num=\"8\" class=\"hidden-480\">审阅批注</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody id=\"dataList\">
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" id=\"num\"></div>
\t\t\t\t\t\t\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t\t\t\t\t\t\t<div id=\"pageBar\" class=\"pagination\"></div>
\t\t\t\t\t\t\t\t<div align=\"right\" style=\"float: right;  width: 10%;\">
\t\t\t\t\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- /.widget-body -->

\t\t\t\t\t<div id=\"addPage\" style=\"display: none\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sx-12\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"widget-box\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-main\" id=\"addcontent\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-corner pull-center planChoice\" style=\"display: block; height: 10px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"planBtn\" type=\"1\" style=\"cursor:pointer;padding: 0; margin-bottom: 20px;\">日计划</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"planBtn\" type=\"2\" style=\"cursor: pointer;padding: 0; margin-bottom: 20px;\">周计划</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"planBtn\" type=\"3\" style=\"cursor: pointer;padding: 0; margin-bottom: 20px;\">月计划</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row add_plan\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin:10px auto;\">工作总结：</div>     
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control curday\" addfield=\"summary\" id=\"curday\" placeholder=\"请填写今日工作总结\" style=\"height: 100px; max-width: 100%;max-height: 200px;\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin:10px auto;\">工作计划：</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control tomday\" addfield=\"plan\" id=\"tomday\" placeholder=\"请填写明日工作计划\" style=\"height: 100px;max-height:200px; max-width: 100%;\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin:10px auto;\">心得体会：</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control workData\" addfield=\"heart\" id=\"workData\" placeholder=\"请填写工作心得体会\" style=\"height: 100px; max-width: 100%;max-height:200px;\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row add_plan\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin-top:10px;\">工作总结：</div>    
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control curday\" addfield=\"summary\" id=\"curday\" placeholder=\"请填写本周工作总结\" style=\"height: 100px; max-width: 100%;max-height:200px;\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin:10px auto;\">工作计划：</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control tomday\" addfield=\"plan\" id=\"tomday\" placeholder=\"请填写下周工作计划\" style=\"height: 100px; max-width: 100%;max-height:200px;\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin:10px auto;\">心得体会：</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control workData\" addfield=\"heart\" id=\"workData\" placeholder=\"请填写工作心得体会\" style=\"height: 100px; max-width: 100%;max-height:200px;\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row add_plan\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin-top:10px;\">工作总结：</div>    
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control curday\" addfield=\"summary\" id=\"curday\" placeholder=\"请填写本月工作总结\" style=\"height: 100px; max-width: 100%;max-height:200px;\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin:10px auto;\">工作计划：</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control tomday\" addfield=\"plan\" id=\"tomday\" placeholder=\"请填写下月工作计划\" style=\"height: 100px; max-width: 100%;max-height:200px;\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin:10px auto;\">心得体会：</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control workData\" addfield=\"heart\" id=\"workData\" placeholder=\"请填写工作心得体会\" cols=\"10\" style=\"height: 100px; max-width:100%;max-height:200px;\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sx-4 \" style=\"margin-top: -10px;text-align: left;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label style=\"width: 50px;\">审阅人</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select  id=\"read_id\" style=\"margin: 12px!important;width: 180px\" class=\"advandced-search select2-hidden-accessible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">  请选择审阅人  </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div style=\"text-align: center;margin-top: 20px;\">
\t\t \t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"release\" class=\"btn btn-info btn-sm\">
\t                                                    发布
\t                                                </button>
                                                </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.widget-box -->
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row\" id=\"template2\" style=\"display:none;\">
\t\t\t\t<div class=\"contractType\" style=\"\">
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label>创建人: </label>
\t\t\t\t\t\t<span field=\"tkm_plan.user_id\"></span>
\t\t\t\t\t\t<label>工作总结： </label>
\t\t\t\t\t\t<span field=\"tkm_plan.summary\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label>工作计划： </label>
\t\t\t\t\t\t<span field=\"tkm_plan.plan\"></span>
\t\t\t\t\t\t<label>心得体会： </label>
\t\t\t\t\t\t<span field=\"tkm_plan.heart\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label> 创建时间： </label>
\t\t\t\t\t\t<span field=\"tkm_plan.create_time\"></span>
\t\t\t\t\t\t<label> 审阅人： </label>
\t\t\t\t\t\t<span field=\"tkm_plan.read_id\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:15px;\">
\t\t\t\t\t\t<label> 审阅时间: </label>
\t\t\t\t\t\t<span field=\"tkm_plan.read_time\"></span>
\t\t\t\t\t\t<label> 审阅批注： </label>
\t\t\t\t\t\t<span field=\"tkm_plan.remark\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"label_popup\" id=\"feedBack\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t\t\t    box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t\t\t<span style=\"display: inline-block;\">审阅批注</span>
\t\t\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t\t\t<input type=\"text\" style=\"margin:auto;width:300px\" id=\"labelName\" />
\t\t\t\t\t\t<!--<hr>-->
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t\t\t<button class=\"close_label\">关闭</button>
\t\t\t\t\t\t<button class=\"hold\">保存</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.col -->
\t\t</div>
\t</div>
\t";
        // line 265
        $this->loadTemplate("admin/mark.html", "admin/platform/journal.html", 265)->display($context);
        // line 266
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script>
\tjQuery(function() {
\t\tcs.getNodes([126]);
\t\tvar order ='tkm_plan.id desc';
\t\tvar page_size = 10;
\t\tvar type = 1; //初始化类型
\t\tvar employees = {};//所有员工
\t\tvar employees_2 = [];
\t\tvar filter = \"\";
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
                for(var i in data) {
                \t if(data[i]['name']) {
                \t \tif(JSON.parse(ykp.getCookie('userinfo')).id != data[i]['id']) {
                \t \t\temployees_2.push(new Option(data[i]['name'],data[i]['id']));
                \t \t}
\t                    employees[data[i]['id']] =data[i]['name'] ;
\t                     \$('.advandced-search').append(new Option(data[i]['name'],data[i]['id']));
//\t                      \$('.advandced-search').select2();
\t                }
                }
            }
        });

        getSearch();
\t\tfunction getSearch() {
\t\t\t
\t\t\tvar list = [
\t\t\t\t{name:\"创建人\",search:\"tkm_plan.user_id\",type:\"select\",url:\"/api/api_employees/f7\",key:\"people\"},
\t\t\t\t{name:\"工作总结\",search:\"tkm_plan.summary\",type:\"text\"},
\t\t\t\t{name:\"工作计划\",search:\"tkm_plan.plan\",type:\"text\"},
\t\t\t\t{name:\"心得体会\",search:\"tkm_plan.heart\",type:\"text\",},
\t\t\t\t{name:\"创建时间\",search:\"tkm_plan.create_time\",type:\"time\"},
\t\t\t\t{name:\"审阅人\",search:\"tkm_plan.read_id\",type:\"select\",url:\"/api/api_employees/f7\",key:\"people\"},
\t\t\t\t{name:\"审阅时间\",search:\"tkm_plan.read_time\",type:\"time\"},
\t\t\t\t{name:\"审阅批注\",search:\"tkm_plan.remark\",type:\"text\"}
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
\t\t\t\t\turl: '/api/api_plan/index_plan',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tlimit:page_size,
\t\t\t\t\t\torder:order,
\t\t\t\t\t\tfilter: filter
\t\t\t\t\t}
\t\t\t\t}
                cs.hSearch('.search1', data, 'filter', false, function(res, _filter) {
\t\t\t\t\tfilter = _filter;
\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\t\$(\"#heightsearch\").removeClass('active').css('z-index', '');
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function(){
\t                        ykp.prompt('暂无数据！');
\t                    },1000);
\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\t addList(res);
\t\t\t\t},'tkm_plan.is_del = 0 and type ='+ type )
\t\t\t}\t\t\t\t\t
\t\t}
\t\t
\t\t
\t\tsearch();
\t\tfunction search() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_plan/index_plan',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\ttype: 1,
\t\t\t\t\tlimit: page_size,
\t\t\t\t\torder:order,
\t\t\t\t},
\t\t\t\ttype:'1' 
\t\t\t}
\t\t\t
\t\t\tcs.doSearch('#search', data, 'filter', false, function(res,_filter) {
\t\t\t\tfilter = _filter;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t} else {
\t\t\t\t\t addList(res);
\t\t\t\t}
\t\t\t},'tkm_plan.is_del = 0');
\t\t}
\t\t
\t\t
\t\t\$('#flush').click(function(){
\t\t\t\$('[sear=\"tkm_plan.user_id\"]').val('').trigger('change');
\t\t\t\$('[sear=\"tkm_plan.read_id\"]').val('').trigger('change');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tfilter = '';
\t\t\tgetList(1, 1);
\t\t})
\t\t
\t\t
\t\tgetList(1, 1, 1);

\t\t//通用排序
        cs.general_sort({
            url: '/api/api_plan/index_plan',
            method: 'post',
            data: {
                filter:'',
                limit: page_size,
                type:1
            },
            pageBar: {
                id: '#pageBar'
            },
            initOrder:'khm_customer.id',
            defaultOrder: order,
            contentId: \"#dataList\",
            params:[{
                id: \"#dynamic-table\",
                field:[\"\",\"tkm_plan.user_id\",\"tkm_plan.summary\",\"tkm_plan.plan\",\"tkm_plan.heart\",
                    \"tkm_plan.create_time\",\"tkm_plan.read_id\",\"tkm_plan.read_time\",\"tkm_plan.remark\"
                ]
            }]
        }, function(res, _sort_role) {
            sort_role = _sort_role;
            addList(res);
        });

\t\tfunction getList(current, type, isInit = 0) {
\t\t\tif(isInit){
\t\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\t\tykp.setCookie(\"where\", \"\");
\t\t\t}
\t\t\tykp.list({
\t\t\t\turl: '/api/api_plan/index_plan',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: page_size,
\t\t\t\t\tfilter: 'type = ' + type + ' and is_del = 0',
\t\t\t\t\torder: order
\t\t\t\t},
\t\t\t\tpageBar: {
\t\t\t\t\tid: '#pageBar'
\t\t\t\t},
\t\t\t\tloadList: function(res) {
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\t setTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t});
\t\t}

\t\t//自定义列表
        cs.custorm_check('#dynamic-table', '#dataList', false);
\t\tfunction addList(res) {
            var ths = \$('.thColor th');
            var styles = [];
\t\t\tvar content = [];
\t\t\tvar data = res.data.items;
\t\t\tvar user =JSON.parse(ykp.getCookie('userinfo'));

            for(var i = 0; i < ths.length; i++) {
                styles.push(ths.eq(i).css('display'));
            }
            for(var i in data) {
\t\t\t\tcontent.push(
\t\t\t\t\t`<tr data-id=\"\${data[i]['tkm_plan.id']}\" read_id=\"\${data[i]['tkm_plan.read_id']}\" data-type=\"\${data[i]['tkm_plan.type']}\">
\t\t\t\t\t\t<td>
\t\t\t\t\t\t<label class=\"pos-rel\">
\t\t\t\t\t\t\t<a href=\"#\"> <span style=\"cursor: pointer\" title=\"详情\" class=\"btOrange _edit\"><i class=\"fa fa-info\"></i></span></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"edit btBlue\" contentAuthority=\"127\" title=\"编辑\" style=\"color:#fff !important;display:\${user.id==data[i]['tkm_plan.user_id']?'':'none'};\"><i class=\"fa fa-pencil-square-o\"></i></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"del btRed\" contentAuthority=\"128\" title=\"删除\" style=\"color:#fff !important;display:\${user.id==data[i]['tkm_plan.user_id']?'':'none'};\"><i class=\"fa fa-trash-o\"></i></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"sy \${data[i]['tkm_plan.status'] == 2 ? 'btRed':'btGreen'}\" data-status = \"2\" title=\"审阅\" style=\"display: \${user.id != data[i]['tkm_plan.read_id'] ?'none': (data[i]['tkm_plan.read_time'] != 0 && data[i]['tkm_plan.status'] == 1 ? 'none' : '')};\"><i class=\"fa fa-envelope-o\"></i></a>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t</td>
                        <td data-num=\"1\" style=\"display:\${styles[1]}\">
                         <a href=\"#\">\${employees[data[i]['tkm_plan.user_id']] || \"\"}</a>
                        </td>
                        <td data-num=\"2\" class=\"center contents\"  title=\"\${data[i]['tkm_plan.summary']}\"style=\"display:\${styles[2]};max-width:200px;overflow:hidden;text-overflow:ellipsis;white-space: nowrap;\">
                       \t\t\${data[i]['tkm_plan.summary']}
\t\t\t\t\t\t</td>
                        <td data-num=\"3\" class=\"center contents\" title=\"\${data[i]['tkm_plan.plan']}\" style=\"display:\${styles[3]};max-width:200px;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;\">\${data[i]['tkm_plan.plan']}</td>

                        <td data-num=\"4\" class=\"center contents\" title=\"\${data[i]['tkm_plan.heart']}\" style=\"display:\${styles[4]};max-width:200px;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;\">
                            <span class=\"lbl\">\${data[i]['tkm_plan.heart']}</span>
                        </td>
                        <td data-num=\"5\" class=\"center\" style=\"display:\${styles[5]}\">
                            <span class=\"lbl\">\${data[i]['tkm_plan.create_time'] != '0' ? cs.getNowTime(data[i]['tkm_plan.create_time'],true) : ''}</span>
                        </td>
                         <td data-num=\"6\" class=\"center contents\" title=\"\${data[i]['tkm_plan.read_id']}\" style=\"display:\${styles[6]};max-width:200px;overflow:hidden;text-overflow:ellipsis;white-space: nowrap;\">
                            \${data[i]['readInfo']['name']}
                        </td>
                         <td data-num=\"7\" class=\"center contents\" title=\"\${data[i]['tkm_plan.read_time']}\" style=\"display:\${styles[7]};max-width:200px;overflow:hidden;text-overflow:ellipsis;white-space: nowrap;\">
                            \${data[i]['tkm_plan.read_time'] != '0' ? cs.getNowTime(data[i]['tkm_plan.read_time'],true) : ''}
                        </td>
                        <td data-num=\"8\" class=\"center\" style=\"display:\${styles[8]}\">
                            \${data[i]['tkm_plan.remark']}
                        </td>`
\t\t\t\t);
\t\t\t}

\t\t\t\$('#dataList').html(content.join(''));
\t\t\t\$('#dataList').find('.contents').mouseover(function(){
\t\t\t\t\$(this).addClass('.content');
\t\t\t})
\t\t\tcs.getNodes([127,128]);

\t\t\t//点击审阅
\t\t\t\$('.sy').unbind('click').click(function(){
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\t\$('#labelName').val('');
\t\t\t\t\$('#feedBack').fadeIn().attr('data-id',id);
\t\t\t})
\t\t\t
\t\t\t
\t\t\t\$('._edit').click(function(){
\t\t\t\tshowMark('#template2');
\t\t\t\t\$('#showBox .title').text('日志详情');
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_plan/index_plan',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter:\"tkm_plan.id = \"+id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data.items[0];
\t\t\t\t\t\t\$('#templateCon .contractType').find('[field]').each(function(i, e) {
\t\t\t\t\t\t\tif(\$(this).attr('field') == 'tkm_plan.read_time' || \$(this).attr('field') == 'tkm_plan.create_time') {
\t\t\t\t\t\t\t\t\$(this).text(data[\$(this).attr('field')] != '0' ? cs.getNowTime(data[\$(this).attr('field')]) : '');
\t\t\t\t\t\t\t}else if(\$(this).attr('field') == 'tkm_plan.user_id'){
\t\t\t\t\t\t\t\t\$(this).text(employees[data['tkm_plan.user_id']]);
\t\t\t\t\t\t\t}else if(\$(this).attr('field') == 'tkm_plan.read_id'){
\t\t\t\t\t\t\t\t\$(this).text(data['readInfo']['name']);
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\$(this).text(data[\$(this).attr('field')]);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\$(this).css('min-width','180px');
\t\t\t\t\t\t\t
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t});
//\t\t\t\tfield
\t\t\t\t
\t\t\t})

\t\t\t//关闭审阅
\t\t\t\$('.close_label').unbind('click').click(function(){
\t\t\t\t\$('#feedBack').fadeOut();
\t\t\t})
\t\t\t//保存审阅
\t\t\t\$('.hold').unbind('click').click(function(){
\t\t\t\tvar remark = \$('#labelName').val().trim();
\t\t\t\tvar id = \$('#feedBack').attr('data-id');
//\t\t\t\tif (remark == '') {
//\t\t\t\t\tykp.prompt('批注内容不能为空！');
//\t\t\t\t\t\$('#labelName').val('');
//\t\t\t\t\treturn;
//\t\t\t\t}
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_plan/add_remark',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t\tid: id,
\t\t\t\t\t\tremark:remark
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tykp.prompt('审阅成功!');
\t\t\t\t\t\t\$('#feedBack').fadeOut();
\t\t\t\t\t\tgetList(1,type);
\t\t\t\t\t}
\t\t\t\t})
\t\t\t})

\t\t\t\$('.del').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
                layui.use('layer', function() {
                    var layer = layui.layer;
                    layer.confirm('确认删除吗？', function (index) {
                        ykp.doAjax({
                            url: '/api/api_plan/del_plan',
                            method: 'post',
                            data: {
                                id: id
                            },
                            success: function (res) {
                                ykp.prompt('删除成功!');
                                getList(1, type);
                                layer.closeAll();
                            }
                        })
                    })
                })
\t\t\t})

\t\t\t\$('.edit').click(function() {
\t\t\t\tvar data = [];
\t\t\t\tvar read_id = \$(this).parents('tr').attr('read_id');
\t\t\t\t\$(this).parents('td').siblings().each(function(i) {
\t\t\t\t\tif(i != 4 && i != 0) {
\t\t\t\t\t\tdata.push(\$(this).text().trim());
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tvar type = \$(this).parents('tr').attr('data-type');
\t\t\t\tshowMark('#addPage');
\t\t\t\t\$('#templateCon .planChoice').hide();
\t\t\t\t\$('#templateCon #remark').parent().show();
\t\t\t\t\$('#showBox .title').text('编辑总结');
\t\t\t\t\$('#templateCon .advandced-search').select2({allowClear:true});
\t\t\t\t/*for(var i in employees_2){
\t\t\t\t\t\$('#templateCon .advandced-search').append(employees_2[i]);
\t\t\t\t}*/
\t\t\t\t\$('#templateCon .advandced-search').val(read_id).trigger('change');
\t\t\t\t\$('#templateBox .btn-group .planBtn').eq(type-1).addClass('btnActive').siblings().removeClass('btnActive');
\t\t\t\t\$('#templateCon .add_plan').eq(type-1).show().not(0).siblings().hide();
\t\t\t\t\$('#templateCon .select2-container').eq(1).remove();
\t\t\t\tvar curDay = \$(' #templateCon .add_plan').eq(type-1).find('.curday').val(data[0]);
\t\t\t\tvar tomday = \$(' #templateCon .add_plan').eq(type-1).find('.tomday').val(data[1]);
\t\t\t\tvar workData =\$(' #templateCon .add_plan').eq(type-1).find('.workData').val(data[2]);

\t\t\t\t\$('#templateBox .btn-group .planBtn').click(function() {
\t\t\t\t\tvar index = \$(this).index();
\t\t\t\t\t\$(this).addClass('btnActive').siblings().removeClass('btnActive');
\t\t\t\t\t\$('#templateCon .add_plan').eq(index).show().not(0).siblings().hide();
\t\t\t\t\tsubmit(read_id,true,id);
\t\t\t\t})
\t\t\t\tsubmit(read_id,true,id);
\t\t\t})
\t\t}

\t\t\$('#changePageNum').change(function() {
\t\t\tpage_size = \$(this).val();
\t\t\tykp.setCookie('page_size', page_size);
\t\t\tgetList(1, type);
\t\t})

\t\t\$('#recent-tab li').find('a').click(function() {
\t\t\tvar nowType = \$(this).attr('data-type');
\t\t\ttype = nowType;
\t\t\tgetList(1, type)
            getSearch();
\t\t})

\t\t\$('#add').click(function() {
\t\t\tshowMark('#addPage');
\t\t\tvar _index = \$('#recent-tab').find('.active').index();
\t\t\t\$('#templateCon .advandced-search').select2({allowClear:true});

           // console.log(employees_2);
           /* for(var i in employees_2){
\t\t\t\t\$('#templateCon .advandced-search').append(employees_2[i]);
\t\t\t}*/
\t\t\tvar userinfo = JSON.parse(ykp.getCookie('userinfo'));
\t\t\tif(userinfo.up_user != '0'){
\t\t\t\t\$('#templateCon .advandced-search').val(userinfo.up_user).trigger('change');
\t\t\t}
\t\t\t\$('#templateCon .select2-container').eq(1).remove();

\t\t\t\$('#showBox .title').text('添加总结');
\t\t\t\$('#templateCon .add_plan').eq(_index).show().not(0).siblings().hide();
\t\t\t\$('#templateCon .planChoice').find('.planBtn').eq(_index).siblings().remove();
//\t\t\t\$('#templateBox .btn-group .planBtn').click(function() {
//\t\t\t\tvar index = \$(this).index();
//\t\t\t\t\$(this).addClass('btnActive').siblings().removeClass('btnActive');
//\t\t\t\t\$('#templateCon .add_plan').eq(index).show().not(0).siblings().hide();
//\t\t\t})
\t\t\tsubmit();
\t\t})
\t\tfunction submit(read_id,status,id) {
\t\t\t\$('#templateBox #release').click(function() {
\t\t\t\tvar Type = parseInt(\$('#templateBox .planBtn').attr('type'));
\t\t\t\tvar curDay = '';
\t\t\t\tvar tomday = '';
\t\t\t\tvar workData ='';
\t\t\t\tif(Type==1){
\t\t\t\t\tcurDay = \$(' #templateBox #curday').eq(0).val().trim();
\t\t\t\t\ttomday = \$(' #templateBox #tomday').eq(0).val().trim();
\t\t\t\t\tworkData =\$(' #templateBox #workData').eq(0).val().trim();
\t\t\t\t}else if(Type==2){
                    curDay = \$(' #templateBox #curday').eq(1).val().trim();
                    tomday = \$(' #templateBox #tomday').eq(1).val().trim();
                    workData =\$(' #templateBox #workData').eq(1).val().trim();
\t\t\t\t}else if(Type==3){
                    curDay = \$(' #templateBox #curday').eq(2).val().trim();
                    tomday = \$(' #templateBox #tomday').eq(2).val().trim();
                    workData =\$(' #templateBox #workData').eq(2).val().trim();
                }
                read_id =\$(' #templateBox #read_id').val().trim();
                if(!curDay) {
\t\t\t\t\tykp.prompt('请填工作总结');
\t\t\t\t\treturn false;
\t\t\t\t} else if(!tomday) {
\t\t\t\t\tykp.prompt('请填写工作计划');
\t\t\t\t\treturn false;
\t\t\t\t} else if(!workData) {
\t\t\t\t\tykp.prompt('请填写工作心得');
\t\t\t\t\treturn false;
\t\t\t\t}else if(!read_id) {
                    ykp.prompt('请选择审阅人');
                    return false;
                }
\t\t\t\tvar data = {
\t\t\t\t\ttype:Type,
\t\t\t\t\tsummary:curDay,
\t\t\t\t\tplan:tomday,
\t\t\t\t\theart:workData,
\t\t\t\t\tread_id:read_id
\t\t\t\t}
\t\t\t\tif(status) {
\t\t\t\t\tdata.id = id
\t\t\t\t}else{
\t\t\t\t\tdata.read_id = \$('#templateCon .advandced-search').val();
\t\t\t\t}
                console.log(data);
                ykp.doAjax({
                    url:'/api/api_plan/add_plan',
                    method:'post',
                    data:data,
                    success:function(res) {
                        ykp.prompt('编写成功!');
                        cs.close();
                        getList(1,Type);
                    }
                })

\t\t\t})
\t\t}
\t})
</script>";
    }

    public function getTemplateName()
    {
        return "admin/platform/journal.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 266,  285 => 265,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* .content{*/
/* 	white-space: normal;*/
/* 	height: 148px;*/
/* 	background-color:#f2f9f9;*/
/* 	transition-property: background-color,height;*/
/* 	transition-timing-function: linear;*/
/* 	transition-duration:0.2s;   */
/* */
/* }*/
/* */
/* .contractType  label{*/
/* 	width: 80px !important;*/
/* }*/
/* .contractType  span[field]{*/
/* 	min-width: 180px !important;*/
/* 	display: inline-block;*/
/* }*/
/* </style>*/
/* */
/* */
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<div>*/
/* 			<!--  <h3 class="header smaller lighter blue">日志</h3> -->*/
/* 			<div class="actions" id="topTool" style="display: inline-block;width: 100%">*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<select style="width: 180px" pts=3 sear="tkm_plan.user_id" class="advandced-search select2-hidden-accssible" tabindex="-1" aria-hidden="true">*/
/* 						<option value="">创建人</option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<select style="width: 180px" pts=3 sear="tkm_plan.read_id" class="advandced-search select2-hidden-accssible"  tabindex="-1" aria-hidden="true">*/
/* 						<option value=""> 审阅人</option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<button id="search" title="搜索" class="btn btn-info btn-sm">*/
/* 						<i class="fa fa-search"></i>*/
/* 					</button>*/
/* 				</div>*/
/* 				 <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 	                        <button id="heightsearch" title="高级搜索" type="button" class="btn btn-info btn-sm" style="background-color:#00c0ef !important;">*/
/* 	                            <i class="fa fa-filter"></i>*/
/* 	                        </button>*/
/* 	             </div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/* 					<button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/* 	                    <i class="fa fa-refresh"></i>*/
/* 	                </button>*/
/* 				</div>*/
/* 				<span contentAuthority="126" style="float: left;margin-left: 1px">*/
/* 							<button type="button" id="add" title="添加" class="btn btn-info btn-sm" style="background-color: #32CD32 !important;">*/
/* 		                        <i class="fa fa-plus"></i>*/
/* */
/* 		                    </button>*/
/* 				</span>*/
/* 				<div id="heightsearch1" class="col-sx-12" style="position: absolute;margin-top: 65px; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;">*/
/* 					<div class="row" id="SearchCon">*/
/* 						*/
/* 					</div>*/
/* 	*/
/* 				</div>*/
/* 				<!--审批-->*/
/* 			</div>*/
/* 			<div style="margin-top: 0px;">*/
/* */
/* 				<div class="widget-box transparent" id="recent-box">*/
/* 					<div style="padding-left:0;">*/
/* 						<div class="widget-toolbar no-border">*/
/* 							<ul class="nav nav-tabs" id="recent-tab">*/
/* 								<li class="active">*/
/* 									<a data-toggle="tab" data-type="1" href="#task-tab">日计划</a>*/
/* 								</li>*/
/* */
/* 								<li>*/
/* 									<a data-toggle="tab" data-type="2" href="#member-tab">周计划</a>*/
/* 								</li>*/
/* 								<li>*/
/* 									<a data-toggle="tab" data-type="3" href="#month-tab">月计划</a>*/
/* 								</li>*/
/* 							</ul>*/
/* */
/* 						</div>*/
/* 						<!--<span contentAuthority="126" style="float: right;">-->*/
/* 							<!--<button type="button" id="add" title="添加" class="btn btn-info btn-sm" style="background-color: #009688 !important;">-->*/
/* 		                        <!--<i class="fa fa-plus"></i>-->*/
/* */
/* 		                    <!--</button>-->*/
/* 						<!--</span>-->*/
/* 					</div>*/
/* 					<div class="widget-body">*/
/* 						<div class="tab-content" style="margin-top:8px;">*/
/* 							<div id="task-tab" class="tab-pane active custom_table">*/
/* 								<table id="dynamic-table">*/
/* 									<thead>*/
/* */
/* 										<tr class="thColor">*/
/* 											<th >操作</th>*/
/* 											<th data-num="1">创建人</th>*/
/* 											<th data-num="2">工作总结</th>*/
/* 											<th data-num="3" class="hidden-480">工作计划</th>*/
/* 											<th data-num="4" class="hidden-480">心得体会</th>*/
/* 											<th data-num="5" class="hidden-480">创建时间</th>*/
/* 											<th data-num="6" class="hidden-480">审阅人</th>*/
/* 											<th data-num="7" class="hidden-480">审阅时间</th>*/
/* 											<th data-num="8" class="hidden-480">审阅批注</th>*/
/* 										</tr>*/
/* 									</thead>*/
/* 									<tbody id="dataList">*/
/* 									</tbody>*/
/* 								</table>*/
/* */
/* 							</div>*/
/* 							<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 								<div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
/* 								<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 								<div id="pageBar" class="pagination"></div>*/
/* 								<div align="right" style="float: right;  width: 10%;">*/
/* 									<select style="width: 100px;" id="changePageNum">*/
/* 										<option value="10">每页10条</option>*/
/* 										<option value="20">每页20条</option>*/
/* 										<option value="50">每页50条</option>*/
/* 										<option value="100">每页100条</option>*/
/* 										<option value="200">每页200条</option>*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<!-- /.widget-body -->*/
/* */
/* 					<div id="addPage" style="display: none">*/
/* 						<div class="row">*/
/* 							<div class="col-sx-12">*/
/* 								<div class="col-xs-12 col-sm-12">*/
/* 									<div class="widget-box">										*/
/* 											<div class="widget-main" id="addcontent">*/
/* 												<div class="btn-group btn-corner pull-center planChoice" style="display: block; height: 10px;">*/
/* 													<div class="planBtn" type="1" style="cursor:pointer;padding: 0; margin-bottom: 20px;">日计划</div>*/
/* 													<div class="planBtn" type="2" style="cursor: pointer;padding: 0; margin-bottom: 20px;">周计划</div>*/
/* 													<div class="planBtn" type="3" style="cursor: pointer;padding: 0; margin-bottom: 20px;">月计划</div>*/
/* 												</div>*/
/* 												<div class="row">*/
/* 													<div class="row add_plan">*/
/* 														<div>*/
/* 															<div style="margin:10px auto;">工作总结：</div>     */
/* 															<textarea class="form-control curday" addfield="summary" id="curday" placeholder="请填写今日工作总结" style="height: 100px; max-width: 100%;max-height: 200px;"></textarea>*/
/* 														</div>*/
/* 														<div>*/
/* 															<div style="margin:10px auto;">工作计划：</div>*/
/* 															<textarea class="form-control tomday" addfield="plan" id="tomday" placeholder="请填写明日工作计划" style="height: 100px;max-height:200px; max-width: 100%;"></textarea>*/
/* 														</div>*/
/* 														<div>*/
/* 															<div style="margin:10px auto;">心得体会：</div>*/
/* 															<textarea class="form-control workData" addfield="heart" id="workData" placeholder="请填写工作心得体会" style="height: 100px; max-width: 100%;max-height:200px;"></textarea>*/
/* 														</div>*/
/* 													</div>*/
/* 													<div class="row add_plan" style="display: none;">*/
/* 														<div>*/
/* 															<div style="margin-top:10px;">工作总结：</div>    */
/* 															<textarea class="form-control curday" addfield="summary" id="curday" placeholder="请填写本周工作总结" style="height: 100px; max-width: 100%;max-height:200px;"></textarea>*/
/* 														</div>*/
/* 														<hr/>*/
/* 														<div>*/
/* 															<div style="margin:10px auto;">工作计划：</div>*/
/* 															<textarea class="form-control tomday" addfield="plan" id="tomday" placeholder="请填写下周工作计划" style="height: 100px; max-width: 100%;max-height:200px;"></textarea>*/
/* 														</div>*/
/* 														<div>*/
/* 															<div style="margin:10px auto;">心得体会：</div>*/
/* 															<textarea class="form-control workData" addfield="heart" id="workData" placeholder="请填写工作心得体会" style="height: 100px; max-width: 100%;max-height:200px;"></textarea>*/
/* 														</div>*/
/* 													</div>*/
/* 													<div class="row add_plan" style="display: none;">*/
/* 														<div>*/
/* 															<div style="margin-top:10px;">工作总结：</div>    */
/* 															<textarea class="form-control curday" addfield="summary" id="curday" placeholder="请填写本月工作总结" style="height: 100px; max-width: 100%;max-height:200px;"></textarea>*/
/* 														</div>*/
/* 														<div>*/
/* 															<div style="margin:10px auto;">工作计划：</div>*/
/* 															<textarea class="form-control tomday" addfield="plan" id="tomday" placeholder="请填写下月工作计划" style="height: 100px; max-width: 100%;max-height:200px;"></textarea>*/
/* 														</div>*/
/* 														<div>*/
/* 															<div style="margin:10px auto;">心得体会：</div>*/
/* 															<textarea class="form-control workData" addfield="heart" id="workData" placeholder="请填写工作心得体会" cols="10" style="height: 100px; max-width:100%;max-height:200px;"></textarea>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* */
/* 											<div class="col-sx-4 " style="margin-top: -10px;text-align: left;">*/
/* 												<div style="">*/
/* 													<label style="width: 50px;">审阅人</label>*/
/* 													<select  id="read_id" style="margin: 12px!important;width: 180px" class="advandced-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">*/
/* 														<option value="">  请选择审阅人  </option>*/
/* 													</select>*/
/* 												</div>*/
/* 												*/
/* 											</div>*/
/* 											<div style="text-align: center;margin-top: 20px;">*/
/* 		 											<button type="button" id="release" class="btn btn-info btn-sm">*/
/* 	                                                    发布*/
/* 	                                                </button>*/
/*                                                 </div>*/
/* 									</div>*/
/* 								</div>*/
/* */
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<!-- /.widget-box -->*/
/* 			</div>*/
/* 			*/
/* 			<div class="row" id="template2" style="display:none;">*/
/* 				<div class="contractType" style="">*/
/* 					<div style="margin-top:15px;">*/
/* 						<label>创建人: </label>*/
/* 						<span field="tkm_plan.user_id"></span>*/
/* 						<label>工作总结： </label>*/
/* 						<span field="tkm_plan.summary"></span>*/
/* 					</div>*/
/* 					<div style="margin-top:15px;">*/
/* 						<label>工作计划： </label>*/
/* 						<span field="tkm_plan.plan"></span>*/
/* 						<label>心得体会： </label>*/
/* 						<span field="tkm_plan.heart"></span>*/
/* 					</div>*/
/* 					<div style="margin-top:15px;">*/
/* 						<label> 创建时间： </label>*/
/* 						<span field="tkm_plan.create_time"></span>*/
/* 						<label> 审阅人： </label>*/
/* 						<span field="tkm_plan.read_id"></span>*/
/* 					</div>*/
/* 					<div style="margin-top:15px;">*/
/* 						<label> 审阅时间: </label>*/
/* 						<span field="tkm_plan.read_time"></span>*/
/* 						<label> 审阅批注： </label>*/
/* 						<span field="tkm_plan.remark"></span>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="label_popup" id="feedBack" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 				<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 			    box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 					<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 						<span style="display: inline-block;">审阅批注</span>*/
/* 						<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 					</div>*/
/* 					<div style="padding: 10px 50px;">*/
/* 						<input type="text" style="margin:auto;width:300px" id="labelName" />*/
/* 						<!--<hr>-->*/
/* 					</div>*/
/* 					<div style="padding:15px;text-align:right;">*/
/* 						<button class="close_label">关闭</button>*/
/* 						<button class="hold">保存</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- /.col -->*/
/* 		</div>*/
/* 	</div>*/
/* 	{% include 'admin/mark.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script>*/
/* 	jQuery(function() {*/
/* 		cs.getNodes([126]);*/
/* 		var order ='tkm_plan.id desc';*/
/* 		var page_size = 10;*/
/* 		var type = 1; //初始化类型*/
/* 		var employees = {};//所有员工*/
/* 		var employees_2 = [];*/
/* 		var filter = "";*/
/*  		//获取所有员工*/
/*         ykp.doAjax({*/
/*         	async:false,*/
/*             url:'/api/api_employees/f7',*/
/*             method:'post',*/
/*             data:{*/
/*                 select:'bmm_employees.id,bmm_employees.name'*/
/*             },*/
/*             success:function(res){*/
/*                 var data = res.data;*/
/*                 for(var i in data) {*/
/*                 	 if(data[i]['name']) {*/
/*                 	 	if(JSON.parse(ykp.getCookie('userinfo')).id != data[i]['id']) {*/
/*                 	 		employees_2.push(new Option(data[i]['name'],data[i]['id']));*/
/*                 	 	}*/
/* 	                    employees[data[i]['id']] =data[i]['name'] ;*/
/* 	                     $('.advandced-search').append(new Option(data[i]['name'],data[i]['id']));*/
/* //	                      $('.advandced-search').select2();*/
/* 	                }*/
/*                 }*/
/*             }*/
/*         });*/
/* */
/*         getSearch();*/
/* 		function getSearch() {*/
/* 			*/
/* 			var list = [*/
/* 				{name:"创建人",search:"tkm_plan.user_id",type:"select",url:"/api/api_employees/f7",key:"people"},*/
/* 				{name:"工作总结",search:"tkm_plan.summary",type:"text"},*/
/* 				{name:"工作计划",search:"tkm_plan.plan",type:"text"},*/
/* 				{name:"心得体会",search:"tkm_plan.heart",type:"text",},*/
/* 				{name:"创建时间",search:"tkm_plan.create_time",type:"time"},*/
/* 				{name:"审阅人",search:"tkm_plan.read_id",type:"select",url:"/api/api_employees/f7",key:"people"},*/
/* 				{name:"审阅时间",search:"tkm_plan.read_time",type:"time"},*/
/* 				{name:"审阅批注",search:"tkm_plan.remark",type:"text"}*/
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
/* 					url: '/api/api_plan/index_plan',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						limit:page_size,*/
/* 						order:order,*/
/* 						filter: filter*/
/* 					}*/
/* 				}*/
/*                 cs.hSearch('.search1', data, 'filter', false, function(res, _filter) {*/
/* 					filter = _filter;*/
/* 					$('.in').removeClass('modal-backdrop');*/
/* 					$("#heightsearch1").slideUp();*/
/* 					$("#heightsearch").removeClass('active').css('z-index', '');*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function(){*/
/* 	                        ykp.prompt('暂无数据！');*/
/* 	                    },1000);*/
/* 						$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					}*/
/* 					 addList(res);*/
/* 				},'tkm_plan.is_del = 0 and type ='+ type )*/
/* 			}					*/
/* 		}*/
/* 		*/
/* 		*/
/* 		search();*/
/* 		function search() {*/
/* 			var data = {*/
/* 				url: '/api/api_plan/index_plan',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					type: 1,*/
/* 					limit: page_size,*/
/* 					order:order,*/
/* 				},*/
/* 				type:'1' */
/* 			}*/
/* 			*/
/* 			cs.doSearch('#search', data, 'filter', false, function(res,_filter) {*/
/* 				filter = _filter;*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 					$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 				} else {*/
/* 					 addList(res);*/
/* 				}*/
/* 			},'tkm_plan.is_del = 0');*/
/* 		}*/
/* 		*/
/* 		*/
/* 		$('#flush').click(function(){*/
/* 			$('[sear="tkm_plan.user_id"]').val('').trigger('change');*/
/* 			$('[sear="tkm_plan.read_id"]').val('').trigger('change');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			filter = '';*/
/* 			getList(1, 1);*/
/* 		})*/
/* 		*/
/* 		*/
/* 		getList(1, 1, 1);*/
/* */
/* 		//通用排序*/
/*         cs.general_sort({*/
/*             url: '/api/api_plan/index_plan',*/
/*             method: 'post',*/
/*             data: {*/
/*                 filter:'',*/
/*                 limit: page_size,*/
/*                 type:1*/
/*             },*/
/*             pageBar: {*/
/*                 id: '#pageBar'*/
/*             },*/
/*             initOrder:'khm_customer.id',*/
/*             defaultOrder: order,*/
/*             contentId: "#dataList",*/
/*             params:[{*/
/*                 id: "#dynamic-table",*/
/*                 field:["","tkm_plan.user_id","tkm_plan.summary","tkm_plan.plan","tkm_plan.heart",*/
/*                     "tkm_plan.create_time","tkm_plan.read_id","tkm_plan.read_time","tkm_plan.remark"*/
/*                 ]*/
/*             }]*/
/*         }, function(res, _sort_role) {*/
/*             sort_role = _sort_role;*/
/*             addList(res);*/
/*         });*/
/* */
/* 		function getList(current, type, isInit = 0) {*/
/* 			if(isInit){*/
/* 				ykp.setCookie("filter", "");*/
/* 				ykp.setCookie("where", "");*/
/* 			}*/
/* 			ykp.list({*/
/* 				url: '/api/api_plan/index_plan',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: page_size,*/
/* 					filter: 'type = ' + type + ' and is_del = 0',*/
/* 					order: order*/
/* 				},*/
/* 				pageBar: {*/
/* 					id: '#pageBar'*/
/* 				},*/
/* 				loadList: function(res) {*/
/* 					if(res.data.items == "") {*/
/* 						 setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 						$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					}*/
/* 					addList(res);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* */
/* 		//自定义列表*/
/*         cs.custorm_check('#dynamic-table', '#dataList', false);*/
/* 		function addList(res) {*/
/*             var ths = $('.thColor th');*/
/*             var styles = [];*/
/* 			var content = [];*/
/* 			var data = res.data.items;*/
/* 			var user =JSON.parse(ykp.getCookie('userinfo'));*/
/* */
/*             for(var i = 0; i < ths.length; i++) {*/
/*                 styles.push(ths.eq(i).css('display'));*/
/*             }*/
/*             for(var i in data) {*/
/* 				content.push(*/
/* 					`<tr data-id="${data[i]['tkm_plan.id']}" read_id="${data[i]['tkm_plan.read_id']}" data-type="${data[i]['tkm_plan.type']}">*/
/* 						<td>*/
/* 						<label class="pos-rel">*/
/* 							<a href="#"> <span style="cursor: pointer" title="详情" class="btOrange _edit"><i class="fa fa-info"></i></span></a>*/
/* 							<a href="#" class="edit btBlue" contentAuthority="127" title="编辑" style="color:#fff !important;display:${user.id==data[i]['tkm_plan.user_id']?'':'none'};"><i class="fa fa-pencil-square-o"></i></a>*/
/* 							<a href="#" class="del btRed" contentAuthority="128" title="删除" style="color:#fff !important;display:${user.id==data[i]['tkm_plan.user_id']?'':'none'};"><i class="fa fa-trash-o"></i></a>*/
/* 							<a href="#" class="sy ${data[i]['tkm_plan.status'] == 2 ? 'btRed':'btGreen'}" data-status = "2" title="审阅" style="display: ${user.id != data[i]['tkm_plan.read_id'] ?'none': (data[i]['tkm_plan.read_time'] != 0 && data[i]['tkm_plan.status'] == 1 ? 'none' : '')};"><i class="fa fa-envelope-o"></i></a>*/
/* 						</label>*/
/* 						</td>*/
/*                         <td data-num="1" style="display:${styles[1]}">*/
/*                          <a href="#">${employees[data[i]['tkm_plan.user_id']] || ""}</a>*/
/*                         </td>*/
/*                         <td data-num="2" class="center contents"  title="${data[i]['tkm_plan.summary']}"style="display:${styles[2]};max-width:200px;overflow:hidden;text-overflow:ellipsis;white-space: nowrap;">*/
/*                        		${data[i]['tkm_plan.summary']}*/
/* 						</td>*/
/*                         <td data-num="3" class="center contents" title="${data[i]['tkm_plan.plan']}" style="display:${styles[3]};max-width:200px;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;">${data[i]['tkm_plan.plan']}</td>*/
/* */
/*                         <td data-num="4" class="center contents" title="${data[i]['tkm_plan.heart']}" style="display:${styles[4]};max-width:200px;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;">*/
/*                             <span class="lbl">${data[i]['tkm_plan.heart']}</span>*/
/*                         </td>*/
/*                         <td data-num="5" class="center" style="display:${styles[5]}">*/
/*                             <span class="lbl">${data[i]['tkm_plan.create_time'] != '0' ? cs.getNowTime(data[i]['tkm_plan.create_time'],true) : ''}</span>*/
/*                         </td>*/
/*                          <td data-num="6" class="center contents" title="${data[i]['tkm_plan.read_id']}" style="display:${styles[6]};max-width:200px;overflow:hidden;text-overflow:ellipsis;white-space: nowrap;">*/
/*                             ${data[i]['readInfo']['name']}*/
/*                         </td>*/
/*                          <td data-num="7" class="center contents" title="${data[i]['tkm_plan.read_time']}" style="display:${styles[7]};max-width:200px;overflow:hidden;text-overflow:ellipsis;white-space: nowrap;">*/
/*                             ${data[i]['tkm_plan.read_time'] != '0' ? cs.getNowTime(data[i]['tkm_plan.read_time'],true) : ''}*/
/*                         </td>*/
/*                         <td data-num="8" class="center" style="display:${styles[8]}">*/
/*                             ${data[i]['tkm_plan.remark']}*/
/*                         </td>`*/
/* 				);*/
/* 			}*/
/* */
/* 			$('#dataList').html(content.join(''));*/
/* 			$('#dataList').find('.contents').mouseover(function(){*/
/* 				$(this).addClass('.content');*/
/* 			})*/
/* 			cs.getNodes([127,128]);*/
/* */
/* 			//点击审阅*/
/* 			$('.sy').unbind('click').click(function(){*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				$('#labelName').val('');*/
/* 				$('#feedBack').fadeIn().attr('data-id',id);*/
/* 			})*/
/* 			*/
/* 			*/
/* 			$('._edit').click(function(){*/
/* 				showMark('#template2');*/
/* 				$('#showBox .title').text('日志详情');*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_plan/index_plan',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						filter:"tkm_plan.id = "+id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data.items[0];*/
/* 						$('#templateCon .contractType').find('[field]').each(function(i, e) {*/
/* 							if($(this).attr('field') == 'tkm_plan.read_time' || $(this).attr('field') == 'tkm_plan.create_time') {*/
/* 								$(this).text(data[$(this).attr('field')] != '0' ? cs.getNowTime(data[$(this).attr('field')]) : '');*/
/* 							}else if($(this).attr('field') == 'tkm_plan.user_id'){*/
/* 								$(this).text(employees[data['tkm_plan.user_id']]);*/
/* 							}else if($(this).attr('field') == 'tkm_plan.read_id'){*/
/* 								$(this).text(data['readInfo']['name']);*/
/* 							}else{*/
/* 								$(this).text(data[$(this).attr('field')]);*/
/* 							}*/
/* 							$(this).css('min-width','180px');*/
/* 							*/
/* 						})*/
/* 					}*/
/* 				});*/
/* //				field*/
/* 				*/
/* 			})*/
/* */
/* 			//关闭审阅*/
/* 			$('.close_label').unbind('click').click(function(){*/
/* 				$('#feedBack').fadeOut();*/
/* 			})*/
/* 			//保存审阅*/
/* 			$('.hold').unbind('click').click(function(){*/
/* 				var remark = $('#labelName').val().trim();*/
/* 				var id = $('#feedBack').attr('data-id');*/
/* //				if (remark == '') {*/
/* //					ykp.prompt('批注内容不能为空！');*/
/* //					$('#labelName').val('');*/
/* //					return;*/
/* //				}*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_plan/add_remark',*/
/* 					method: 'post',*/
/* 					data: {*/
/* 						id: id,*/
/* 						remark:remark*/
/* 					},*/
/* 					success: function(res) {*/
/* 						ykp.prompt('审阅成功!');*/
/* 						$('#feedBack').fadeOut();*/
/* 						getList(1,type);*/
/* 					}*/
/* 				})*/
/* 			})*/
/* */
/* 			$('.del').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/*                 layui.use('layer', function() {*/
/*                     var layer = layui.layer;*/
/*                     layer.confirm('确认删除吗？', function (index) {*/
/*                         ykp.doAjax({*/
/*                             url: '/api/api_plan/del_plan',*/
/*                             method: 'post',*/
/*                             data: {*/
/*                                 id: id*/
/*                             },*/
/*                             success: function (res) {*/
/*                                 ykp.prompt('删除成功!');*/
/*                                 getList(1, type);*/
/*                                 layer.closeAll();*/
/*                             }*/
/*                         })*/
/*                     })*/
/*                 })*/
/* 			})*/
/* */
/* 			$('.edit').click(function() {*/
/* 				var data = [];*/
/* 				var read_id = $(this).parents('tr').attr('read_id');*/
/* 				$(this).parents('td').siblings().each(function(i) {*/
/* 					if(i != 4 && i != 0) {*/
/* 						data.push($(this).text().trim());*/
/* 					}*/
/* 				})*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				var type = $(this).parents('tr').attr('data-type');*/
/* 				showMark('#addPage');*/
/* 				$('#templateCon .planChoice').hide();*/
/* 				$('#templateCon #remark').parent().show();*/
/* 				$('#showBox .title').text('编辑总结');*/
/* 				$('#templateCon .advandced-search').select2({allowClear:true});*/
/* 				/*for(var i in employees_2){*/
/* 					$('#templateCon .advandced-search').append(employees_2[i]);*/
/* 				}*//* */
/* 				$('#templateCon .advandced-search').val(read_id).trigger('change');*/
/* 				$('#templateBox .btn-group .planBtn').eq(type-1).addClass('btnActive').siblings().removeClass('btnActive');*/
/* 				$('#templateCon .add_plan').eq(type-1).show().not(0).siblings().hide();*/
/* 				$('#templateCon .select2-container').eq(1).remove();*/
/* 				var curDay = $(' #templateCon .add_plan').eq(type-1).find('.curday').val(data[0]);*/
/* 				var tomday = $(' #templateCon .add_plan').eq(type-1).find('.tomday').val(data[1]);*/
/* 				var workData =$(' #templateCon .add_plan').eq(type-1).find('.workData').val(data[2]);*/
/* */
/* 				$('#templateBox .btn-group .planBtn').click(function() {*/
/* 					var index = $(this).index();*/
/* 					$(this).addClass('btnActive').siblings().removeClass('btnActive');*/
/* 					$('#templateCon .add_plan').eq(index).show().not(0).siblings().hide();*/
/* 					submit(read_id,true,id);*/
/* 				})*/
/* 				submit(read_id,true,id);*/
/* 			})*/
/* 		}*/
/* */
/* 		$('#changePageNum').change(function() {*/
/* 			page_size = $(this).val();*/
/* 			ykp.setCookie('page_size', page_size);*/
/* 			getList(1, type);*/
/* 		})*/
/* */
/* 		$('#recent-tab li').find('a').click(function() {*/
/* 			var nowType = $(this).attr('data-type');*/
/* 			type = nowType;*/
/* 			getList(1, type)*/
/*             getSearch();*/
/* 		})*/
/* */
/* 		$('#add').click(function() {*/
/* 			showMark('#addPage');*/
/* 			var _index = $('#recent-tab').find('.active').index();*/
/* 			$('#templateCon .advandced-search').select2({allowClear:true});*/
/* */
/*            // console.log(employees_2);*/
/*            /* for(var i in employees_2){*/
/* 				$('#templateCon .advandced-search').append(employees_2[i]);*/
/* 			}*//* */
/* 			var userinfo = JSON.parse(ykp.getCookie('userinfo'));*/
/* 			if(userinfo.up_user != '0'){*/
/* 				$('#templateCon .advandced-search').val(userinfo.up_user).trigger('change');*/
/* 			}*/
/* 			$('#templateCon .select2-container').eq(1).remove();*/
/* */
/* 			$('#showBox .title').text('添加总结');*/
/* 			$('#templateCon .add_plan').eq(_index).show().not(0).siblings().hide();*/
/* 			$('#templateCon .planChoice').find('.planBtn').eq(_index).siblings().remove();*/
/* //			$('#templateBox .btn-group .planBtn').click(function() {*/
/* //				var index = $(this).index();*/
/* //				$(this).addClass('btnActive').siblings().removeClass('btnActive');*/
/* //				$('#templateCon .add_plan').eq(index).show().not(0).siblings().hide();*/
/* //			})*/
/* 			submit();*/
/* 		})*/
/* 		function submit(read_id,status,id) {*/
/* 			$('#templateBox #release').click(function() {*/
/* 				var Type = parseInt($('#templateBox .planBtn').attr('type'));*/
/* 				var curDay = '';*/
/* 				var tomday = '';*/
/* 				var workData ='';*/
/* 				if(Type==1){*/
/* 					curDay = $(' #templateBox #curday').eq(0).val().trim();*/
/* 					tomday = $(' #templateBox #tomday').eq(0).val().trim();*/
/* 					workData =$(' #templateBox #workData').eq(0).val().trim();*/
/* 				}else if(Type==2){*/
/*                     curDay = $(' #templateBox #curday').eq(1).val().trim();*/
/*                     tomday = $(' #templateBox #tomday').eq(1).val().trim();*/
/*                     workData =$(' #templateBox #workData').eq(1).val().trim();*/
/* 				}else if(Type==3){*/
/*                     curDay = $(' #templateBox #curday').eq(2).val().trim();*/
/*                     tomday = $(' #templateBox #tomday').eq(2).val().trim();*/
/*                     workData =$(' #templateBox #workData').eq(2).val().trim();*/
/*                 }*/
/*                 read_id =$(' #templateBox #read_id').val().trim();*/
/*                 if(!curDay) {*/
/* 					ykp.prompt('请填工作总结');*/
/* 					return false;*/
/* 				} else if(!tomday) {*/
/* 					ykp.prompt('请填写工作计划');*/
/* 					return false;*/
/* 				} else if(!workData) {*/
/* 					ykp.prompt('请填写工作心得');*/
/* 					return false;*/
/* 				}else if(!read_id) {*/
/*                     ykp.prompt('请选择审阅人');*/
/*                     return false;*/
/*                 }*/
/* 				var data = {*/
/* 					type:Type,*/
/* 					summary:curDay,*/
/* 					plan:tomday,*/
/* 					heart:workData,*/
/* 					read_id:read_id*/
/* 				}*/
/* 				if(status) {*/
/* 					data.id = id*/
/* 				}else{*/
/* 					data.read_id = $('#templateCon .advandced-search').val();*/
/* 				}*/
/*                 console.log(data);*/
/*                 ykp.doAjax({*/
/*                     url:'/api/api_plan/add_plan',*/
/*                     method:'post',*/
/*                     data:data,*/
/*                     success:function(res) {*/
/*                         ykp.prompt('编写成功!');*/
/*                         cs.close();*/
/*                         getList(1,Type);*/
/*                     }*/
/*                 })*/
/* */
/* 			})*/
/* 		}*/
/* 	})*/
/* </script>*/
