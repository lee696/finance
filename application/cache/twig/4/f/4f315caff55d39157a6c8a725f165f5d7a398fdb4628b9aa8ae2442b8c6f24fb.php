<?php

/* admin/manage/warehouse.html */
class __TwigTemplate_a6e8ccb3898484ac79d56b9a4183f272b6f54f4e3c0efa1617bb5195c8b69b27 extends Twig_Template
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
\t.dist {
\t\tdisplay: none;
\t}
\t.btn-group:first-child {
\t\twidth: 100%;
\t}
\t.cur {
\t\ttext-align: center;
\t}
\t#templateCon label{width:80px;}
\t#templateBox{width:550px;}
</style>
<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<!-- <h3 class=\"header smaller lighter blue\">仓位管理</h3> -->
\t\t\t<div class=\"row\" style=\"margin-top: 20px;\" id=\"topTool\">
\t\t\t\t<!--<h3 class=\"header smaller lighter blue\">送单</h3>-->
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right:5px;\">
\t\t\t\t\t<input type=\"text\" pts=0 sear=\"ckm_position.name\" placeholder=\"仓位名称\" class=\"kh_code\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right:5px;\">
\t\t\t\t\t<input type=\"text\" pts=1 area=\"1\" placeholder=\"区域名称\" class=\"kh_name\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right:5px;\">
\t\t\t\t\t<button type=\"button\" title=\"搜索\" id=\"search\" class=\"btn btn-info btn-sm\">
\t                    <i class=\"fa fa-search\"></i>
\t                </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right:5px;\">
\t\t\t\t\t<button id=\"heightsearch\" title=\"高级搜索\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #00c0ef !important;\">
                        <i class=\"fa fa-filter\"></i>
                    </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right:5px;\">
\t\t\t\t\t<button id=\"flush\" title=\"刷新\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
\t                    <i class=\"fa fa-refresh\"></i>
\t                </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"213\" style=\" float: left;margin-right:5px;\">
                \t<button type=\"button\" title=\"添加\" id=\"add\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32\t !important;\">
                        <i class=\"fa fa-plus\"></i>
                   </button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left;margin-right: 5px; margin-bottom:5px;\">
\t\t\t\t\t<label type=\"button\" title=\"导入\" id=\"mergeItem\" style=\"background-color: #1E9FFF!important; border-color: #1E9FFF;\"
\t                                class=\"btn btn-info btn-sm mergeItem\" for=\"leading-in\" >
\t                            <i class=\"fa fa-sign-in\"></i>
\t           \t\t</label>
           \t\t</div>
\t\t\t\t<div class=\"col-sx-4\" contentAuthority=\"311\" style=\" float: left; margin-right: 5px;\">
\t\t\t\t\t<button type=\"button\"  title=\"导出\" style=\"outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;\" class=\"exportfile moveToClue btn addBtn btn-info btn-sm position-relative\">
\t\t\t\t\t\t<i class=\"fa fa-sign-out\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t
              <div id=\"heightsearch1\" class=\"col-sx-12\" style=\"margin-top:30px;position: absolute; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>仓位编号</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"text\" gjs=9 sear=\"ckm_position.num\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>区域名称</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"text\" gjs=7 marketing-id=\"3\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>仓位名称</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select gjs=0 sear=\"ckm_position.id\" class=\"cw\" data-type=\"gj\" style=\"width:180px;\">
\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>整单负责人</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select style=\"width: 180px\" gjs=2 sear=\"zd\" class=\"advandced-search select2-hidden-accssible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>做账负责人</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select style=\"width: 180px\" gjs=2 sear=\"zz\" class=\"advandced-search select2-hidden-accssible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>报税负责人</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select style=\"width: 180px\" gjs=2 sear=\"bs\" class=\"advandced-search select2-hidden-accssible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>客服负责人</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select style=\"width: 180px\" gjs=2 sear=\"kf\" class=\"advandced-search select2-hidden-accssible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>送单负责人</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select style=\"width: 180px\" gjs=2 sear=\"sod\" class=\"advandced-search select2-hidden-accssible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-bottom:5px;\">
\t\t\t\t\t\t<label>收单负责人</label>
\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t<option> = </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select style=\"width: 180px\" gjs=2 sear=\"sd\" class=\"advandced-search select2-hidden-accssible\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<option value=\"\">请选择</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"text-align:center;clear:both;padding-top:10px; \">
\t\t\t\t\t\t<button type=\"button\" id=\"search1\" class=\"search1 btn btn-info btn-sm\" style=\"width:180px;\">
\t\t                        查询
\t\t                    </button>
\t\t                     <button type=\"button\" id=\"rest\" class=\" btn btn-info btn-sm\" style=\"width:180px;\">
\t\t                       重置
\t\t                    </button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t</div>

\t\t\t
\t\t\t<div class=\"custom_table\">
\t\t\t\t<table id=\"dynamic-table\" style=\"margin-bottom:0px;\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr class=\"thColor\">
\t\t\t\t\t\t\t<th class=\" center\">操作</th>
\t\t\t\t\t\t\t<th class=\"center thColor\" data-num=\"1\">仓位编号</th>
\t\t\t\t\t\t\t<th class=\"center\" data-num=\"2\">区域名称</th>
\t\t\t\t\t\t\t<th class=\" center\" data-num=\"3\">仓位</th>
\t\t\t\t\t\t\t<th class=\" center \" data-num=\"4\">客户数量</th>
\t\t\t\t\t\t\t<th class=\" center\" data-num=\"5\">整单负责人</th>
\t\t\t\t\t\t\t<th class=\" center\" data-num=\"6\">做账负责人</th>
\t\t\t\t\t\t\t<th class=\" center\" data-num=\"7\">报税负责人</th>
\t\t\t\t\t\t\t<th class=\" center\" data-num=\"8\">客服负责人</th>
\t\t\t\t\t\t\t<th class=\" center\" data-num=\"9\">送单负责人</th>
\t\t\t\t\t\t\t<th class=\" center\" data-num=\"10\">收单负责人</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<tbody id=\"dataList\">

\t\t\t\t\t</tbody>

\t\t\t\t</table>
\t\t\t\t
\t\t\t</div>
\t\t\t<div align=\"center\" style=\"margin-top: 20px; margin-bottom: 20px;\">
\t\t\t\t\t<div align=\"left\" style=\"padding-left: 15px; float: left; width: 10%;\" id=\"num\"></div>
\t\t\t\t\t<!--<div id=\"pagination\" style=\"float: left; width: 80%; height: 25px;\"></div>-->
\t\t\t\t\t<div id=\"pageBar\" class=\"pagination\"></div>
\t\t\t\t\t<div align=\"right\" style=\"float: right; margin-right: 15px;  width: 10%;\">
\t\t\t\t\t\t<select style=\"width: 100px;\" id=\"changePageNum\">
\t\t\t\t\t\t\t<option value=\"10\">每页10条</option>
\t\t\t\t\t\t\t<option value=\"20\">每页20条</option>
\t\t\t\t\t\t\t<option value=\"50\">每页50条</option>
\t\t\t\t\t\t\t<option value=\"100\">每页100条</option>
\t\t\t\t\t\t\t<option value=\"200\">每页200条</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row\" id=\"template\" style=\"display:none;\">

\t\t<div class=\"col-sm-12\">
\t\t\t<div class=\"space-12\"></div>

\t\t\t<div class=\"widget-box\">\t\t\t\t

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t<form class=\"form-horizontal\" role=\"form\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \"> 仓位名称： </label>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"cnumber1\" addfield=\"name\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \"> 区域： </label>
\t\t\t\t\t\t\t\t<span id=\"city\" title_=\"area\">
\t\t\t                        <select class=\"prov\"></select>   
\t\t\t                        <select class=\"city\" disabled=\"disabled\"></select>  
\t\t\t                        <select class=\"dist\" style=\"display: none;\" disabled=\"disabled\"></select>  
\t\t\t                    </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \"> 收单负责人： </label>
\t\t\t\t\t\t\t\t<select multiple=\"\" id=\"state0\" name=\"state\" addfield=\"sd\" class=\"state select2 select2-hidden-accessible\" data-placeholder=\"选择收单负责人\" style=\"width: 200px;\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \"> 整单负责人： </label>
\t\t\t\t\t\t\t\t<select multiple=\"\" id=\"state1\" name=\"state\" addfield=\"zd\" class=\" state select2 select2-hidden-accessible\" data-placeholder=\"选择整单负责人\" style=\"width: 200px;\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \"> 做账负责人： </label>
\t\t\t\t\t\t\t\t<select multiple=\"\" id=\"state2\" name=\"state\" addfield=\"zz\" class=\"state select2 select2-hidden-accessible\" data-placeholder=\"选择做账负责人\" style=\"width: 200px;\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \"> 报税负责人： </label>
\t\t\t\t\t\t\t\t<select multiple=\"\" id=\"state3\" name=\"state\" addfield=\"bs\" class=\"state select2 select2-hidden-accessible\" data-placeholder=\"选择报税负责人\" style=\"width: 200px;\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \"> 客服负责人： </label>
\t\t\t\t\t\t\t\t<select multiple=\"\" id=\"state4\" name=\"state\" addfield=\"kf\" class=\"state select2 select2-hidden-accessible\" data-placeholder=\"选择客服负责人\" style=\"width: 200px;\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label col-xs-12  col-sm-3 no-padding-left \"> 送单负责人： </label>
\t\t\t\t\t\t\t\t<select multiple=\"\" id=\"state5\" name=\"state\" addfield=\"sod\" class=\"state select2 select2-hidden-accessible\" data-placeholder=\"选择送单负责人\" style=\"width: 200px;\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<!--保存按钮-->
\t\t\t\t\t<div class=\" padding-4 clearfix\">
\t\t\t\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t\t\t\t<div class=\"cur\">
\t\t\t\t\t\t\t<button class=\"btn btn-info\" id=\"submit\">
                                    <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                    保存
                                </button>
                                </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"label_popup\" id=\"export\" style=\"position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;\">
\t\t<div style=\"width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;
\t            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);\">
\t\t\t<div style=\"padding:15px;border-bottom:1px solid #ddd;\">
\t\t\t\t<span style=\"display: inline-block;\">导入仓位</span>
\t\t\t\t<a href=\"javascript:;\" class=\"close_label\" style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
\t\t\t</div>
\t\t\t<div style=\"padding: 10px 50px;\">
\t\t\t\t<input type=\"file\" width=\"200px\" style=\"margin: auto;\" id=\"efile\" />
\t\t\t\t<!--<hr>-->
\t\t\t</div>
\t\t\t<div style=\"padding:15px;text-align:right;\">
\t\t\t\t<button id=\"ghItem\"  class=\" btn\">仓位模板</button>
\t\t\t\t<button class=\"btn btn-info  submit\" style=\"padding: 6px; border-radius: 0px;\">保存</button>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 281
        $this->loadTemplate("admin/mark.html", "admin/manage/warehouse.html", 281)->display($context);
        // line 282
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/assets/js/src/jquery.cityselect.js\"></script>
<script>
\tjQuery(function(\$) {
\t\tcs.getNodes([213]);

        //导出功能
        cs.exportFile({
            url:\"/api/api_accountancies/cw_export\",
            title:\"仓位管理\"

        });

\t\tvar order ='ckm_position.id';
\t\tvar page_size = 10;
\t\tvar resData = '';
\t\tvar employees= {};
\t\tvar filter = ''; //过滤条件
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
                \tif(data[i]['name']) {
                    employees[data[i]['id']] =data[i]['name'] ;
                    \$('.advandced-search').append(new Option(data[i]['name'],data[i]['id']));
                }
                }
            }
        });
\t\t
\t\t//通用排序
\t\tcs.general_sort({
\t\t\turl: '/api/api_accountancies/list_position',
\t\t\tmethod: 'post',
\t\t\tdata: {
\t\t\t\tfilter:filter,
\t\t\t\tlimit: page_size
\t\t\t},
\t\t\tpageBar: {
\t\t\t\tid: '.pageBar'
\t\t\t},
\t\t\tcontentId:\"#datalist\",  //默认排序
\t\t\tinitOrder:\"\",   //初始化sort
\t\t\tdefaultOrder:order,
\t\t\tparams:[{
\t\t\t\tid:\"#dynamic-table\",
\t\t\t\tfield:[\"\",\"ckm_position.num\",\"ckm_position.city\",\"ckm_position.name\"]
\t\t\t}]
\t\t}, function(res, _sort_role) {
\t\t\tsort_role = _sort_role;
\t\t\taddList(res);
\t\t});
\t\t
\t\tcs.getAllCw(function(option) {
\t\t\t\$('#heightsearch1 .cw').html(option);
\t\t\t\$('#heightsearch1 .cw').select2({
\t\t\t\tallowClear: true
\t\t\t})
\t\t})

\t\t//高级搜索按钮
\t\tcs.showHeightSearch('#heightsearch','#heightsearch1');
\t\t
\t\thSearch();
\t\t
\t\tfunction hSearch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_accountancies/list_position',
\t\t\t\tmethods: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit:page_size,
\t\t\t\t\torder:order
\t\t\t\t}
\t\t\t}
\t\t\tcs.hSearch('.search1', data, 'filter', false, function(res, _filter) {
\t\t\t\t\tfilter = _filter;
\t\t\t\t\t\$('.in').removeClass('modal-backdrop');
\t\t\t\t\t\$(\"#heightsearch1\").slideUp();
\t\t\t\t\t\$(\"#heightsearch\").removeClass('active').css('z-index','');
\t\t\t\t\tresData = res.data.items;
\t\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\t\tsetTimeout(function(){
                        \tykp.prompt('暂无数据！');
                    \t},1000);
\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"color:#7d7d7d !important;text-align:center !important;\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}else {
\t\t\t\t\t\taddList(res);
\t\t\t\t\t}
\t\t\t\t})
\t\t}
\t\t
\t\tseaarch();

\t\tfunction seaarch() {
\t\t\tvar data = {
\t\t\t\turl: '/api/api_accountancies/list_position',
\t\t\t\tmethod: 'post',
\t\t\t\tdata: {
\t\t\t\t\tlimit: page_size,
\t\t\t\t\torder:order
\t\t\t\t}
\t\t\t}
\t\t\tcs.doSearch('#search', data, 'filter', false, function(res, _filter) {
\t\t\t\tfilter = _filter;
\t\t\t\tresData = res.data.items;
\t\t\t\tif(res.data.items == \"\") {
\t\t\t\t\tsetTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"color:#7d7d7d !important;text-align:center !important;\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\treturn false;
\t\t\t\t} else {
\t\t\t\t\taddList(res);
\t\t\t\t}
\t\t\t})
\t\t}

\t\t\$('#changePageNum').change(function() {
\t\t\tpage_size = \$(this).val();
\t\t\tykp.setCookie('page_size', page_size);
\t\t\tgetList(1);
\t\t})

\t\t\$('#flush').click(function(){
\t\t\t\$('#topTool input').val('');
\t\t\tfilter = '';
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tgetList();
\t\t})

\t\tgetList(1, 1);

\t\tfunction getList(curent, isInit) {
\t\t\tif(isInit == 1){
\t\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\t\tykp.setCookie(\"where\", \"\");
\t\t\t}
\t\t\tseaarch();
\t\t\thSearch();
\t\t\tykp.list({
\t\t\t\turl: '/api/api_accountancies/list_position',
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
\t\t\t\t\t\tsetTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);
\t\t\t\t\t\t\$('#dataList').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"color:#7d7d7d !important;text-align:center !important;\" class=\"page\">暂无数据</div></td></tr>');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}

\t\t\t\t\tresData = res.data.items;
\t\t\t\t\taddList(res);

//\t\t\t\t\tcheckName('1,2');
\t\t\t\t}
\t\t\t});

\t\t}

\t\tfunction checkName(col, data) {
\t\t\tvar arr = [];
//\t\t\tif(col){
\t\t\t\tcol.split(',').forEach(function(item) {
\t\t\t\t\tif(employees[item]){
\t\t\t\t\t\tarr.push(employees[item])
\t\t\t\t\t}
\t\t\t\t})
//\t\t\t}
\t\t\t
\t\t\treturn arr.join(',');
\t\t}
\t\t
\t\t//导入导出
\t\tvar data = {
\t\t\tUrl:\"/resource/excel_templete/postion.xlsx\",
\t\t\ttype:'2',
\t\t\ttitle:'仓位模板',
\t\t\tkey:'position',
\t\t\turl1:'/api/api_inventory/upload_position'
\t\t}
\t\tcs.jzexport(data,function(res) {
\t\t\tif(res.data) {
\t\t\t\tykp.prompt(\"上传信息有误\");
\t\t\t\twindow.open(res.data);
\t\t\t}else{
\t\t\t\tykp.prompt(\"上传成功\");
\t\t\t\twindow.location.reload();
\t\t\t}
\t\t\t\$('.label_popup').hide();
\t        getList(1);
\t\t})
\t\t
\t\t
\t\tcs.custorm_check('#dynamic-table', '#dataList', true);

\t\tfunction addList(res) {
\t\t\tvar data = res.data.items;
\t\t\tvar html = '';
\t\t\tvar styles = [];
            \$('#dynamic-table th').each(function(i,e){
                styles.push(\$(this).css('display'));
            });

\t\t\tfor(var i in data) {
\t\t\t\thtml += `<tr data-id=\${data[i]['ckm_position.id']} num=\"\${data[i]['number']}\">

\t\t            <td class=\"center\">
\t\t\t            <label class=\"pos-rel\">
\t\t\t            <a href=\"#\" id=\"edit\${i}\" class=\"edit btBlue\" contentAuthority=\"214\" title=\"编辑\"><i class=\"fa fa-pencil-square-o\"></i></a>
\t\t\t             <a href=\"#\"  class=\"del btRed\" style=\"display: \${data[i]['number'] == 0 ? 'inline-block' : 'none'};\" contentAuthority=\"214\" title=\"删除\"><i class=\"fa fa-trash-o\"></i></a>
\t\t\t        \t</label>
\t\t\t        </td>
\t\t            <td class=\"center\" style=\"display:\${styles[1]}\" data-num=\"1\">
\t\t            <span class=\"lbl edit4\">\${data[i]['ckm_position.num']}</span>
\t\t            </td>
\t\t            <td class=\"center\" style=\"display:\${styles[2]}\" data-num=\"2\">
\t\t            <span class=\"lbl edit4\">\${data[i]['ckm_position.city']}</span>
\t\t            </td>
\t\t            <td class=\"center\" style=\"display:\${styles[3]}\" data-num=\"3\">
\t\t            <span class=\"lbl edit4\">\${data[i]['ckm_position.name']}</span>
\t\t            </td>
\t\t            <td class=\"center\" style=\"display:\${styles[4]}\" data-num=\"4\">
\t\t            <span class=\"lbl edit4\">\${data[i]['number']}</span>
\t\t            </td>
\t\t
\t\t            <td class=\"center\" style=\"display:\${styles[5]}\" data-num=\"5\">
\t\t            <span class=\"lbl edit4\">\${checkName(data[i]['ckm_position.zd'])}</span>
\t\t            </td>
\t\t            <td class=\"center\" style=\"display:\${styles[6]}\" data-num=\"6\">
\t\t            <span class=\"lbl edit4\">\${checkName(data[i]['ckm_position.zz'])}</span>
\t\t            </td>
\t\t
\t\t            <td class=\"center\" style=\"display:\${styles[7]}\" data-num=\"7\">
\t\t            <span class=\"lbl edit4\">\${checkName(data[i]['ckm_position.bs'])}</span>
\t\t            </td>
\t\t            <td class=\"center\" style=\"display:\${styles[8]}\" data-num=\"8\">
\t\t            <span class=\"lbl edit4\">\${checkName(data[i]['ckm_position.kf'])}</span>
\t\t            </td>
\t\t            <td class=\"center\" style=\"display:\${styles[9]}\" data-num=\"9\">
\t\t            <span class=\"lbl edit4\">\${checkName(data[i]['ckm_position.sod'])}</span>
\t\t            </td>
\t\t             <td class=\"center\" style=\"display:\${styles[10]}\" data-num=\"10\">
\t\t            <span class=\"lbl edit4\">\${checkName(data[i]['ckm_position.sd'])}</span>
\t\t            </td>
\t\t            
\t\t        </tr>`;
\t\t\t}
\t\t\t\$('#dataList').html(html);

\t\t\tcs.getNodes([214]);

\t\t\t\$('#dataList tr').find('.edit').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id'); //获取id值
\t\t\t\tvar index = \$(this).parents('tr').index();
\t\t\t\tshowMark('#template');
\t\t\t\t\$('#showBox .title').text('编辑');
\t\t\t\t\$(\"#templateCon #city\").citySelect({
\t\t\t\t\turl: \"/resource/adimin/assets/js/src/city.min.js\",
\t\t\t\t\tprov: resData[index]['ckm_position.province'] ? resData[index]['ckm_position.province'] : '广东', //省份 
\t\t\t\t\tcity: resData[index]['ckm_position.city'] ? resData[index]['ckm_position.city'] : '深圳', //月份
\t\t\t\t\tnodata: \"none\" //当子集无数据时，隐藏select  
\t\t\t\t});
\t\t\t\t//获取所有员工
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_employees/f7',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\tif(data[i]['bmm_employees.name']) {
\t\t\t\t\t\t\t\$('#templateCon .state').append(new Option(data[i]['bmm_employees.name'], data[i]['bmm_employees.id']));
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t\tselect2();
\t\t\t\t\t\t\$(\"#templateCon \").find('input[type=\"text\"]').eq(0).val(resData[index]['ckm_position.name']);
\t\t\t\t\t\t//给选项框赋值  设置默认选中项
\t\t\t\t\t\t\$(\"#templateCon #state0\").val(resData[index]['ckm_position.sd'].split(\",\")).trigger('change');
\t\t\t\t\t\t\$(\"#templateCon #state1\").val(resData[index]['ckm_position.zd'].split(\",\")).trigger('change');
\t\t\t\t\t\t\$(\"#templateCon #state2\").val(resData[index]['ckm_position.zz'].split(\",\")).trigger('change');
\t\t\t\t\t\t\$(\"#templateCon #state3\").val(resData[index]['ckm_position.bs'].split(\",\")).trigger('change');
\t\t\t\t\t\t\$(\"#templateCon #state4\").val(resData[index]['ckm_position.kf'].split(\",\")).trigger('change');
\t\t\t\t\t\t\$(\"#templateCon #state5\").val(resData[index]['ckm_position.sod'].split(\",\")).trigger('change');
\t\t\t\t\t\tsubmit(false, id);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t//\t\t\t\tselect2();\t
\t\t\t})
\t\t\t
\t\t\t//删除
\t\t\t\$('.del').click(function() {
\t\t\t\tvar id = \$(this).parents('tr').attr('data-id');
\t\t\t\tvar num = \$(this).parents('tr').attr('num');
\t\t\t\tif(num > 0){
\t\t\t\t\tykp.prompt('有客户不能删除');
\t\t\t\t\treturn false;
\t\t\t\t}
//\t\t\t\tbootbox.confirm('确认删除该仓位？',function(flag){
//\t\t\t\t\tif(flag){
//\t\t\t\t\t\tykp.doAjax({
//\t\t\t\t\t\t\turl: '/api/api_accountancies/del_position',
//\t\t\t\t\t\t\tmethod: 'post',
//\t\t\t\t\t\t\tdata: {
//\t\t\t\t\t\t\t\tid: id
//\t\t\t\t\t\t\t},
//\t\t\t\t\t\t\tsuccess: function(res) {
//\t\t\t\t\t\t\t\tykp.prompt('删除成功!');
//\t\t\t\t\t\t\t\tgetList(1);
//\t\t\t\t\t\t\t}
//\t\t\t\t\t\t})
//\t\t\t\t\t}
//\t\t\t\t});
\t\t\tlayui.use('layer',function(){
\t\t\t\tvar layer =layui.layer;
\t\t\t\tlayer.confirm('确认删除该仓位？',function(flag){
\t\t\t\t\t\t\tif(flag){
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: '/api/api_accountancies/del_position',
\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tid: id
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tykp.prompt('删除成功!');
\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t\tgetList(1);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t})
\t\t\t})
\t\t\t\t
\t\t\t})

\t\t\t//全选
\t\t\tcheckAll();

\t\t}

\t\tpageinfo();

\t\tfunction pageinfo() {
\t\t\t//添加仓位
\t\t\t\$('#add').click(function() {
\t\t\t\tshowMark('#template');
\t\t\t\t\$('#showBox .title').text('添加仓位');
\t\t\t\t\$(\"#templateCon #city\").citySelect({
\t\t\t\t\turl: \"/resource/adimin/assets/js/src/city.min.js\",
\t\t\t\t\tprov: '北京', //省份 
\t\t\t\t\tcity: '东城区',
\t\t\t\t\tnodata: \"none\" //当子集无数据时，隐藏select  
\t\t\t\t});
\t\t\t\t//获取所有员工
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/api/api_employees/f7',
\t\t\t\t\tmethod: 'post',
\t\t\t\t\tdata: {},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\tfor(var i in data) {
\t\t\t\t\t\t\tif(data[i]['bmm_employees.name']) {
\t\t\t\t\t\t\t\$('#templateCon .state').append(new Option(data[i]['bmm_employees.name'], data[i]['bmm_employees.id']));
\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\tsubmit(true);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tselect2();

\t\t\t})
\t\t}

\t\t//添加编辑提交仓位
\t\tfunction submit(type, id) {
\t\t\tvar data = {};
\t\t\tvar objs;
\t\t\tvar ids = '';
\t\t\tvar status = false;
\t\t\t\$('#templateCon #submit').click(function() {
\t\t\t\t//获取所有选项框的值
\t\t\t\t\$('#templateCon .state').each(function(i) {
\t\t\t\t\tobjs = \$('#templateCon #state' + i).select2('data');
\t\t\t\t\tfor(var j in objs) {
\t\t\t\t\t\tids += objs[j].id + ','
\t\t\t\t\t}
\t\t\t\t\tdata[\$(this).attr('addfield')] = ids.substr(0, ids.length - 1);
\t\t\t\t\tids = '';
\t\t\t\t})
\t\t\t\t\$('#templateCon .state').each(function(i) {
\t\t\t\t\tif(data[\$(this).attr('addfield')] == \"\") {
\t\t\t\t\t\tykp.prompt('所有责任人选项框不能为空');
\t\t\t\t\t\tstatus = false;
\t\t\t\t\t\treturn false;
\t\t\t\t\t} else {
\t\t\t\t\t\tstatus = true;
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t\$('#templateCon').find('input[addfield]').each(function() {
\t\t\t\t\tif(\$(this).val() == \"\") {
\t\t\t\t\t\tykp.prompt('所有输入框不能为空!');
\t\t\t\t\t\tstatus = false;
\t\t\t\t\t\treturn false;
\t\t\t\t\t} else {
\t\t\t\t\t\tdata[\$(this).attr('addfield')] = \$(this).val().trim();
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\tdata.province = \$('#templateCon .prov').val();
\t\t\t\tdata.city = \$('#templateCon .city').val();
\t\t\t\tif(!type) {
\t\t\t\t\tdata.id = id;
\t\t\t\t}
\t\t\t\tif(status) {
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: '/api/api_accountancies/add_edit_position',
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\tdata: data,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tykp.prompt('添加成功!');
\t\t\t\t\t\t\tcs.close();
\t\t\t\t\t\t\tgetList(1);
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t}
\t\t\t})
\t\t}

\t});

\tfunction select2() {
\t\t//参与人员
\t\t\$('#templateCon .select2').css('width', '435px').select2({
\t\t\tallowClear: true
\t\t})
\t\t\$('#select2-multiple-style .btn').on('click', function(e) {
\t\t\tvar target = \$(this).find('input[type=radio]');
\t\t\tvar which = parseInt(target.val());
\t\t\tif(which == 2)
\t\t\t\t\$('.select2').addClass('tag-input-style');
\t\t\telse
\t\t\t\t\$('.select2').removeClass('tag-input-style');
\t\t});
\t}

\tfunction checkAll(status) {
\t\t\$(\"tbody input[name='check']\").each(function(i, n) {
\t\t\tn.checked = status;
\t\t});
\t}
</script>";
    }

    public function getTemplateName()
    {
        return "admin/manage/warehouse.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 282,  301 => 281,  19 => 1,);
    }
}
/* <style>*/
/* 	.dist {*/
/* 		display: none;*/
/* 	}*/
/* 	.btn-group:first-child {*/
/* 		width: 100%;*/
/* 	}*/
/* 	.cur {*/
/* 		text-align: center;*/
/* 	}*/
/* 	#templateCon label{width:80px;}*/
/* 	#templateBox{width:550px;}*/
/* </style>*/
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<div class="col-lg-12">*/
/* 			<!-- <h3 class="header smaller lighter blue">仓位管理</h3> -->*/
/* 			<div class="row" style="margin-top: 20px;" id="topTool">*/
/* 				<!--<h3 class="header smaller lighter blue">送单</h3>-->*/
/* 				<div class="col-sx-4" style=" float: left;margin-right:5px;">*/
/* 					<input type="text" pts=0 sear="ckm_position.name" placeholder="仓位名称" class="kh_code" />*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right:5px;">*/
/* 					<input type="text" pts=1 area="1" placeholder="区域名称" class="kh_name" />*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right:5px;">*/
/* 					<button type="button" title="搜索" id="search" class="btn btn-info btn-sm">*/
/* 	                    <i class="fa fa-search"></i>*/
/* 	                </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right:5px;">*/
/* 					<button id="heightsearch" title="高级搜索" type="button" class="btn btn-info btn-sm" style="background-color: #00c0ef !important;">*/
/*                         <i class="fa fa-filter"></i>*/
/*                     </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right:5px;">*/
/* 					<button id="flush" title="刷新" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/* 	                    <i class="fa fa-refresh"></i>*/
/* 	                </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" contentAuthority="213" style=" float: left;margin-right:5px;">*/
/*                 	<button type="button" title="添加" id="add" class="btn btn-info btn-sm" style="background-color: #32CD32	 !important;">*/
/*                         <i class="fa fa-plus"></i>*/
/*                    </button>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left;margin-right: 5px; margin-bottom:5px;">*/
/* 					<label type="button" title="导入" id="mergeItem" style="background-color: #1E9FFF!important; border-color: #1E9FFF;"*/
/* 	                                class="btn btn-info btn-sm mergeItem" for="leading-in" >*/
/* 	                            <i class="fa fa-sign-in"></i>*/
/* 	           		</label>*/
/*            		</div>*/
/* 				<div class="col-sx-4" contentAuthority="311" style=" float: left; margin-right: 5px;">*/
/* 					<button type="button"  title="导出" style="outline: none;background-color: #1E9FFF !important; border-color: #1E9FFF;" class="exportfile moveToClue btn addBtn btn-info btn-sm position-relative">*/
/* 						<i class="fa fa-sign-out"></i>*/
/* 					</button>*/
/* 				</div>*/
/* 				*/
/*               <div id="heightsearch1" class="col-sx-12" style="margin-top:30px;position: absolute; background: #fff; z-index: 1041;overflow: auto; padding: 10px 0px; display: none;">*/
/* 				<div class="row">*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>仓位编号</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<input type="text" gjs=9 sear="ckm_position.num" />*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>区域名称</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<input type="text" gjs=7 marketing-id="3" />*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>仓位名称</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select gjs=0 sear="ckm_position.id" class="cw" data-type="gj" style="width:180px;">*/
/* 					</select>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>整单负责人</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select style="width: 180px" gjs=2 sear="zd" class="advandced-search select2-hidden-accssible" tabindex="-1" aria-hidden="true">*/
/* 							<option value="">请选择</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>做账负责人</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select style="width: 180px" gjs=2 sear="zz" class="advandced-search select2-hidden-accssible" tabindex="-1" aria-hidden="true">*/
/* 							<option value="">请选择</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>报税负责人</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select style="width: 180px" gjs=2 sear="bs" class="advandced-search select2-hidden-accssible" tabindex="-1" aria-hidden="true">*/
/* 							<option value="">请选择</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>客服负责人</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select style="width: 180px" gjs=2 sear="kf" class="advandced-search select2-hidden-accssible" tabindex="-1" aria-hidden="true">*/
/* 							<option value="">请选择</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>送单负责人</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select style="width: 180px" gjs=2 sear="sod" class="advandced-search select2-hidden-accssible" tabindex="-1" aria-hidden="true">*/
/* 							<option value="">请选择</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col-sx-4" style=" float: left; margin-bottom:5px;">*/
/* 						<label>收单负责人</label>*/
/* 						<select>*/
/* 							<option> = </option>*/
/* 						</select>*/
/* 						<select style="width: 180px" gjs=2 sear="sd" class="advandced-search select2-hidden-accssible" tabindex="-1" aria-hidden="true">*/
/* 							<option value="">请选择</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div style="text-align:center;clear:both;padding-top:10px; ">*/
/* 						<button type="button" id="search1" class="search1 btn btn-info btn-sm" style="width:180px;">*/
/* 		                        查询*/
/* 		                    </button>*/
/* 		                     <button type="button" id="rest" class=" btn btn-info btn-sm" style="width:180px;">*/
/* 		                       重置*/
/* 		                    </button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			</div>*/
/* */
/* 			*/
/* 			<div class="custom_table">*/
/* 				<table id="dynamic-table" style="margin-bottom:0px;">*/
/* 					<thead>*/
/* 						<tr class="thColor">*/
/* 							<th class=" center">操作</th>*/
/* 							<th class="center thColor" data-num="1">仓位编号</th>*/
/* 							<th class="center" data-num="2">区域名称</th>*/
/* 							<th class=" center" data-num="3">仓位</th>*/
/* 							<th class=" center " data-num="4">客户数量</th>*/
/* 							<th class=" center" data-num="5">整单负责人</th>*/
/* 							<th class=" center" data-num="6">做账负责人</th>*/
/* 							<th class=" center" data-num="7">报税负责人</th>*/
/* 							<th class=" center" data-num="8">客服负责人</th>*/
/* 							<th class=" center" data-num="9">送单负责人</th>*/
/* 							<th class=" center" data-num="10">收单负责人</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* */
/* 					<tbody id="dataList">*/
/* */
/* 					</tbody>*/
/* */
/* 				</table>*/
/* 				*/
/* 			</div>*/
/* 			<div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/* 					<div align="left" style="padding-left: 15px; float: left; width: 10%;" id="num"></div>*/
/* 					<!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/* 					<div id="pageBar" class="pagination"></div>*/
/* 					<div align="right" style="float: right; margin-right: 15px;  width: 10%;">*/
/* 						<select style="width: 100px;" id="changePageNum">*/
/* 							<option value="10">每页10条</option>*/
/* 							<option value="20">每页20条</option>*/
/* 							<option value="50">每页50条</option>*/
/* 							<option value="100">每页100条</option>*/
/* 							<option value="200">每页200条</option>*/
/* 						</select>*/
/* 					</div>*/
/* 				</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row" id="template" style="display:none;">*/
/* */
/* 		<div class="col-sm-12">*/
/* 			<div class="space-12"></div>*/
/* */
/* 			<div class="widget-box">				*/
/* */
/* 				<div class="row">*/
/* 					<div class="col-xs-12">*/
/* 						<form class="form-horizontal" role="form">*/
/* 							<div class="form-group">*/
/* 								<label class="control-label col-xs-12  col-sm-3 no-padding-left "> 仓位名称： </label>*/
/* 								<input type="text" id="cnumber1" addfield="name">*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="control-label col-xs-12  col-sm-3 no-padding-left "> 区域： </label>*/
/* 								<span id="city" title_="area">*/
/* 			                        <select class="prov"></select>   */
/* 			                        <select class="city" disabled="disabled"></select>  */
/* 			                        <select class="dist" style="display: none;" disabled="disabled"></select>  */
/* 			                    </span>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="control-label col-xs-12  col-sm-3 no-padding-left "> 收单负责人： </label>*/
/* 								<select multiple="" id="state0" name="state" addfield="sd" class="state select2 select2-hidden-accessible" data-placeholder="选择收单负责人" style="width: 200px;" tabindex="-1" aria-hidden="true">*/
/* 								</select>*/
/* 							</div>*/
/* */
/* 							<div class="form-group">*/
/* 								<label class="control-label col-xs-12  col-sm-3 no-padding-left "> 整单负责人： </label>*/
/* 								<select multiple="" id="state1" name="state" addfield="zd" class=" state select2 select2-hidden-accessible" data-placeholder="选择整单负责人" style="width: 200px;" tabindex="-1" aria-hidden="true">*/
/* 								</select>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="control-label col-xs-12  col-sm-3 no-padding-left "> 做账负责人： </label>*/
/* 								<select multiple="" id="state2" name="state" addfield="zz" class="state select2 select2-hidden-accessible" data-placeholder="选择做账负责人" style="width: 200px;" tabindex="-1" aria-hidden="true">*/
/* 								</select>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="control-label col-xs-12  col-sm-3 no-padding-left "> 报税负责人： </label>*/
/* 								<select multiple="" id="state3" name="state" addfield="bs" class="state select2 select2-hidden-accessible" data-placeholder="选择报税负责人" style="width: 200px;" tabindex="-1" aria-hidden="true">*/
/* 								</select>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="control-label col-xs-12  col-sm-3 no-padding-left "> 客服负责人： </label>*/
/* 								<select multiple="" id="state4" name="state" addfield="kf" class="state select2 select2-hidden-accessible" data-placeholder="选择客服负责人" style="width: 200px;" tabindex="-1" aria-hidden="true">*/
/* 								</select>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="control-label col-xs-12  col-sm-3 no-padding-left "> 送单负责人： </label>*/
/* 								<select multiple="" id="state5" name="state" addfield="sod" class="state select2 select2-hidden-accessible" data-placeholder="选择送单负责人" style="width: 200px;" tabindex="-1" aria-hidden="true">*/
/* 								</select>*/
/* 							</div>*/
/* 						</form>*/
/* 					</div>*/
/* 					<!--保存按钮-->*/
/* 					<div class=" padding-4 clearfix">*/
/* 						<div class="btn-group pull-right">*/
/* 							<div class="cur">*/
/* 							<button class="btn btn-info" id="submit">*/
/*                                     <i class="fa fa-check" aria-hidden="true"></i>*/
/*                                     保存*/
/*                                 </button>*/
/*                                 </div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="label_popup" id="export" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;">*/
/* 		<div style="width:400px;margin:39px auto;z-index:1060;background:#fff;position:relative;border:1px solid #ddd;*/
/* 	            box-shadow:0px 0px 15px rgba(0, 0, 0, 0.2);">*/
/* 			<div style="padding:15px;border-bottom:1px solid #ddd;">*/
/* 				<span style="display: inline-block;">导入仓位</span>*/
/* 				<a href="javascript:;" class="close_label" style="float: right;"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/* 			</div>*/
/* 			<div style="padding: 10px 50px;">*/
/* 				<input type="file" width="200px" style="margin: auto;" id="efile" />*/
/* 				<!--<hr>-->*/
/* 			</div>*/
/* 			<div style="padding:15px;text-align:right;">*/
/* 				<button id="ghItem"  class=" btn">仓位模板</button>*/
/* 				<button class="btn btn-info  submit" style="padding: 6px; border-radius: 0px;">保存</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	{% include 'admin/mark.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/assets/js/src/jquery.cityselect.js"></script>*/
/* <script>*/
/* 	jQuery(function($) {*/
/* 		cs.getNodes([213]);*/
/* */
/*         //导出功能*/
/*         cs.exportFile({*/
/*             url:"/api/api_accountancies/cw_export",*/
/*             title:"仓位管理"*/
/* */
/*         });*/
/* */
/* 		var order ='ckm_position.id';*/
/* 		var page_size = 10;*/
/* 		var resData = '';*/
/* 		var employees= {};*/
/* 		var filter = ''; //过滤条件*/
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
/*                 	if(data[i]['name']) {*/
/*                     employees[data[i]['id']] =data[i]['name'] ;*/
/*                     $('.advandced-search').append(new Option(data[i]['name'],data[i]['id']));*/
/*                 }*/
/*                 }*/
/*             }*/
/*         });*/
/* 		*/
/* 		//通用排序*/
/* 		cs.general_sort({*/
/* 			url: '/api/api_accountancies/list_position',*/
/* 			method: 'post',*/
/* 			data: {*/
/* 				filter:filter,*/
/* 				limit: page_size*/
/* 			},*/
/* 			pageBar: {*/
/* 				id: '.pageBar'*/
/* 			},*/
/* 			contentId:"#datalist",  //默认排序*/
/* 			initOrder:"",   //初始化sort*/
/* 			defaultOrder:order,*/
/* 			params:[{*/
/* 				id:"#dynamic-table",*/
/* 				field:["","ckm_position.num","ckm_position.city","ckm_position.name"]*/
/* 			}]*/
/* 		}, function(res, _sort_role) {*/
/* 			sort_role = _sort_role;*/
/* 			addList(res);*/
/* 		});*/
/* 		*/
/* 		cs.getAllCw(function(option) {*/
/* 			$('#heightsearch1 .cw').html(option);*/
/* 			$('#heightsearch1 .cw').select2({*/
/* 				allowClear: true*/
/* 			})*/
/* 		})*/
/* */
/* 		//高级搜索按钮*/
/* 		cs.showHeightSearch('#heightsearch','#heightsearch1');*/
/* 		*/
/* 		hSearch();*/
/* 		*/
/* 		function hSearch() {*/
/* 			var data = {*/
/* 				url: '/api/api_accountancies/list_position',*/
/* 				methods: 'post',*/
/* 				data: {*/
/* 					limit:page_size,*/
/* 					order:order*/
/* 				}*/
/* 			}*/
/* 			cs.hSearch('.search1', data, 'filter', false, function(res, _filter) {*/
/* 					filter = _filter;*/
/* 					$('.in').removeClass('modal-backdrop');*/
/* 					$("#heightsearch1").slideUp();*/
/* 					$("#heightsearch").removeClass('active').css('z-index','');*/
/* 					resData = res.data.items;*/
/* 					if(res.data.items == "") {*/
/* 						setTimeout(function(){*/
/*                         	ykp.prompt('暂无数据！');*/
/*                     	},1000);*/
/* 						$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="color:#7d7d7d !important;text-align:center !important;" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					}else {*/
/* 						addList(res);*/
/* 					}*/
/* 				})*/
/* 		}*/
/* 		*/
/* 		seaarch();*/
/* */
/* 		function seaarch() {*/
/* 			var data = {*/
/* 				url: '/api/api_accountancies/list_position',*/
/* 				method: 'post',*/
/* 				data: {*/
/* 					limit: page_size,*/
/* 					order:order*/
/* 				}*/
/* 			}*/
/* 			cs.doSearch('#search', data, 'filter', false, function(res, _filter) {*/
/* 				filter = _filter;*/
/* 				resData = res.data.items;*/
/* 				if(res.data.items == "") {*/
/* 					setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 					$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="color:#7d7d7d !important;text-align:center !important;" class="page">暂无数据</div></td></tr>');*/
/* 					return false;*/
/* 				} else {*/
/* 					addList(res);*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 		$('#changePageNum').change(function() {*/
/* 			page_size = $(this).val();*/
/* 			ykp.setCookie('page_size', page_size);*/
/* 			getList(1);*/
/* 		})*/
/* */
/* 		$('#flush').click(function(){*/
/* 			$('#topTool input').val('');*/
/* 			filter = '';*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			getList();*/
/* 		})*/
/* */
/* 		getList(1, 1);*/
/* */
/* 		function getList(curent, isInit) {*/
/* 			if(isInit == 1){*/
/* 				ykp.setCookie("filter", "");*/
/* 				ykp.setCookie("where", "");*/
/* 			}*/
/* 			seaarch();*/
/* 			hSearch();*/
/* 			ykp.list({*/
/* 				url: '/api/api_accountancies/list_position',*/
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
/* 						setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* 						$('#dataList').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="color:#7d7d7d !important;text-align:center !important;" class="page">暂无数据</div></td></tr>');*/
/* 						return false;*/
/* 					}*/
/* */
/* 					resData = res.data.items;*/
/* 					addList(res);*/
/* */
/* //					checkName('1,2');*/
/* 				}*/
/* 			});*/
/* */
/* 		}*/
/* */
/* 		function checkName(col, data) {*/
/* 			var arr = [];*/
/* //			if(col){*/
/* 				col.split(',').forEach(function(item) {*/
/* 					if(employees[item]){*/
/* 						arr.push(employees[item])*/
/* 					}*/
/* 				})*/
/* //			}*/
/* 			*/
/* 			return arr.join(',');*/
/* 		}*/
/* 		*/
/* 		//导入导出*/
/* 		var data = {*/
/* 			Url:"/resource/excel_templete/postion.xlsx",*/
/* 			type:'2',*/
/* 			title:'仓位模板',*/
/* 			key:'position',*/
/* 			url1:'/api/api_inventory/upload_position'*/
/* 		}*/
/* 		cs.jzexport(data,function(res) {*/
/* 			if(res.data) {*/
/* 				ykp.prompt("上传信息有误");*/
/* 				window.open(res.data);*/
/* 			}else{*/
/* 				ykp.prompt("上传成功");*/
/* 				window.location.reload();*/
/* 			}*/
/* 			$('.label_popup').hide();*/
/* 	        getList(1);*/
/* 		})*/
/* 		*/
/* 		*/
/* 		cs.custorm_check('#dynamic-table', '#dataList', true);*/
/* */
/* 		function addList(res) {*/
/* 			var data = res.data.items;*/
/* 			var html = '';*/
/* 			var styles = [];*/
/*             $('#dynamic-table th').each(function(i,e){*/
/*                 styles.push($(this).css('display'));*/
/*             });*/
/* */
/* 			for(var i in data) {*/
/* 				html += `<tr data-id=${data[i]['ckm_position.id']} num="${data[i]['number']}">*/
/* */
/* 		            <td class="center">*/
/* 			            <label class="pos-rel">*/
/* 			            <a href="#" id="edit${i}" class="edit btBlue" contentAuthority="214" title="编辑"><i class="fa fa-pencil-square-o"></i></a>*/
/* 			             <a href="#"  class="del btRed" style="display: ${data[i]['number'] == 0 ? 'inline-block' : 'none'};" contentAuthority="214" title="删除"><i class="fa fa-trash-o"></i></a>*/
/* 			        	</label>*/
/* 			        </td>*/
/* 		            <td class="center" style="display:${styles[1]}" data-num="1">*/
/* 		            <span class="lbl edit4">${data[i]['ckm_position.num']}</span>*/
/* 		            </td>*/
/* 		            <td class="center" style="display:${styles[2]}" data-num="2">*/
/* 		            <span class="lbl edit4">${data[i]['ckm_position.city']}</span>*/
/* 		            </td>*/
/* 		            <td class="center" style="display:${styles[3]}" data-num="3">*/
/* 		            <span class="lbl edit4">${data[i]['ckm_position.name']}</span>*/
/* 		            </td>*/
/* 		            <td class="center" style="display:${styles[4]}" data-num="4">*/
/* 		            <span class="lbl edit4">${data[i]['number']}</span>*/
/* 		            </td>*/
/* 		*/
/* 		            <td class="center" style="display:${styles[5]}" data-num="5">*/
/* 		            <span class="lbl edit4">${checkName(data[i]['ckm_position.zd'])}</span>*/
/* 		            </td>*/
/* 		            <td class="center" style="display:${styles[6]}" data-num="6">*/
/* 		            <span class="lbl edit4">${checkName(data[i]['ckm_position.zz'])}</span>*/
/* 		            </td>*/
/* 		*/
/* 		            <td class="center" style="display:${styles[7]}" data-num="7">*/
/* 		            <span class="lbl edit4">${checkName(data[i]['ckm_position.bs'])}</span>*/
/* 		            </td>*/
/* 		            <td class="center" style="display:${styles[8]}" data-num="8">*/
/* 		            <span class="lbl edit4">${checkName(data[i]['ckm_position.kf'])}</span>*/
/* 		            </td>*/
/* 		            <td class="center" style="display:${styles[9]}" data-num="9">*/
/* 		            <span class="lbl edit4">${checkName(data[i]['ckm_position.sod'])}</span>*/
/* 		            </td>*/
/* 		             <td class="center" style="display:${styles[10]}" data-num="10">*/
/* 		            <span class="lbl edit4">${checkName(data[i]['ckm_position.sd'])}</span>*/
/* 		            </td>*/
/* 		            */
/* 		        </tr>`;*/
/* 			}*/
/* 			$('#dataList').html(html);*/
/* */
/* 			cs.getNodes([214]);*/
/* */
/* 			$('#dataList tr').find('.edit').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id'); //获取id值*/
/* 				var index = $(this).parents('tr').index();*/
/* 				showMark('#template');*/
/* 				$('#showBox .title').text('编辑');*/
/* 				$("#templateCon #city").citySelect({*/
/* 					url: "/resource/adimin/assets/js/src/city.min.js",*/
/* 					prov: resData[index]['ckm_position.province'] ? resData[index]['ckm_position.province'] : '广东', //省份 */
/* 					city: resData[index]['ckm_position.city'] ? resData[index]['ckm_position.city'] : '深圳', //月份*/
/* 					nodata: "none" //当子集无数据时，隐藏select  */
/* 				});*/
/* 				//获取所有员工*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_employees/f7',*/
/* 					method: 'post',*/
/* 					data: {},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						for(var i in data) {*/
/* 							if(data[i]['bmm_employees.name']) {*/
/* 							$('#templateCon .state').append(new Option(data[i]['bmm_employees.name'], data[i]['bmm_employees.id']));*/
/* 						}*/
/* 					}*/
/* 						select2();*/
/* 						$("#templateCon ").find('input[type="text"]').eq(0).val(resData[index]['ckm_position.name']);*/
/* 						//给选项框赋值  设置默认选中项*/
/* 						$("#templateCon #state0").val(resData[index]['ckm_position.sd'].split(",")).trigger('change');*/
/* 						$("#templateCon #state1").val(resData[index]['ckm_position.zd'].split(",")).trigger('change');*/
/* 						$("#templateCon #state2").val(resData[index]['ckm_position.zz'].split(",")).trigger('change');*/
/* 						$("#templateCon #state3").val(resData[index]['ckm_position.bs'].split(",")).trigger('change');*/
/* 						$("#templateCon #state4").val(resData[index]['ckm_position.kf'].split(",")).trigger('change');*/
/* 						$("#templateCon #state5").val(resData[index]['ckm_position.sod'].split(",")).trigger('change');*/
/* 						submit(false, id);*/
/* 					}*/
/* 				});*/
/* 				//				select2();	*/
/* 			})*/
/* 			*/
/* 			//删除*/
/* 			$('.del').click(function() {*/
/* 				var id = $(this).parents('tr').attr('data-id');*/
/* 				var num = $(this).parents('tr').attr('num');*/
/* 				if(num > 0){*/
/* 					ykp.prompt('有客户不能删除');*/
/* 					return false;*/
/* 				}*/
/* //				bootbox.confirm('确认删除该仓位？',function(flag){*/
/* //					if(flag){*/
/* //						ykp.doAjax({*/
/* //							url: '/api/api_accountancies/del_position',*/
/* //							method: 'post',*/
/* //							data: {*/
/* //								id: id*/
/* //							},*/
/* //							success: function(res) {*/
/* //								ykp.prompt('删除成功!');*/
/* //								getList(1);*/
/* //							}*/
/* //						})*/
/* //					}*/
/* //				});*/
/* 			layui.use('layer',function(){*/
/* 				var layer =layui.layer;*/
/* 				layer.confirm('确认删除该仓位？',function(flag){*/
/* 							if(flag){*/
/* 						ykp.doAjax({*/
/* 							url: '/api/api_accountancies/del_position',*/
/* 							method: 'post',*/
/* 							data: {*/
/* 								id: id*/
/* 							},*/
/* 							success: function(res) {*/
/* 								ykp.prompt('删除成功!');*/
/* 								layer.closeAll();*/
/* 								getList(1);*/
/* 							}*/
/* 						})*/
/* 					}*/
/* 					*/
/* 				})*/
/* 			})*/
/* 				*/
/* 			})*/
/* */
/* 			//全选*/
/* 			checkAll();*/
/* */
/* 		}*/
/* */
/* 		pageinfo();*/
/* */
/* 		function pageinfo() {*/
/* 			//添加仓位*/
/* 			$('#add').click(function() {*/
/* 				showMark('#template');*/
/* 				$('#showBox .title').text('添加仓位');*/
/* 				$("#templateCon #city").citySelect({*/
/* 					url: "/resource/adimin/assets/js/src/city.min.js",*/
/* 					prov: '北京', //省份 */
/* 					city: '东城区',*/
/* 					nodata: "none" //当子集无数据时，隐藏select  */
/* 				});*/
/* 				//获取所有员工*/
/* 				ykp.doAjax({*/
/* 					url: '/api/api_employees/f7',*/
/* 					method: 'post',*/
/* 					data: {},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						for(var i in data) {*/
/* 							if(data[i]['bmm_employees.name']) {*/
/* 							$('#templateCon .state').append(new Option(data[i]['bmm_employees.name'], data[i]['bmm_employees.id']));*/
/* 						}*/
/* 						}*/
/* 						*/
/* 						submit(true);*/
/* 					}*/
/* 				});*/
/* */
/* 				select2();*/
/* */
/* 			})*/
/* 		}*/
/* */
/* 		//添加编辑提交仓位*/
/* 		function submit(type, id) {*/
/* 			var data = {};*/
/* 			var objs;*/
/* 			var ids = '';*/
/* 			var status = false;*/
/* 			$('#templateCon #submit').click(function() {*/
/* 				//获取所有选项框的值*/
/* 				$('#templateCon .state').each(function(i) {*/
/* 					objs = $('#templateCon #state' + i).select2('data');*/
/* 					for(var j in objs) {*/
/* 						ids += objs[j].id + ','*/
/* 					}*/
/* 					data[$(this).attr('addfield')] = ids.substr(0, ids.length - 1);*/
/* 					ids = '';*/
/* 				})*/
/* 				$('#templateCon .state').each(function(i) {*/
/* 					if(data[$(this).attr('addfield')] == "") {*/
/* 						ykp.prompt('所有责任人选项框不能为空');*/
/* 						status = false;*/
/* 						return false;*/
/* 					} else {*/
/* 						status = true;*/
/* 					}*/
/* 				})*/
/* 				$('#templateCon').find('input[addfield]').each(function() {*/
/* 					if($(this).val() == "") {*/
/* 						ykp.prompt('所有输入框不能为空!');*/
/* 						status = false;*/
/* 						return false;*/
/* 					} else {*/
/* 						data[$(this).attr('addfield')] = $(this).val().trim();*/
/* 					}*/
/* 				})*/
/* 				data.province = $('#templateCon .prov').val();*/
/* 				data.city = $('#templateCon .city').val();*/
/* 				if(!type) {*/
/* 					data.id = id;*/
/* 				}*/
/* 				if(status) {*/
/* 					ykp.doAjax({*/
/* 						url: '/api/api_accountancies/add_edit_position',*/
/* 						method: 'post',*/
/* 						data: data,*/
/* 						success: function(res) {*/
/* 							ykp.prompt('添加成功!');*/
/* 							cs.close();*/
/* 							getList(1);*/
/* 						}*/
/* 					})*/
/* 				}*/
/* 			})*/
/* 		}*/
/* */
/* 	});*/
/* */
/* 	function select2() {*/
/* 		//参与人员*/
/* 		$('#templateCon .select2').css('width', '435px').select2({*/
/* 			allowClear: true*/
/* 		})*/
/* 		$('#select2-multiple-style .btn').on('click', function(e) {*/
/* 			var target = $(this).find('input[type=radio]');*/
/* 			var which = parseInt(target.val());*/
/* 			if(which == 2)*/
/* 				$('.select2').addClass('tag-input-style');*/
/* 			else*/
/* 				$('.select2').removeClass('tag-input-style');*/
/* 		});*/
/* 	}*/
/* */
/* 	function checkAll(status) {*/
/* 		$("tbody input[name='check']").each(function(i, n) {*/
/* 			n.checked = status;*/
/* 		});*/
/* 	}*/
/* </script>*/
