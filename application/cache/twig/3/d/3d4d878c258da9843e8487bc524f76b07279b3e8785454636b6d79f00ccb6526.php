<?php

/* admin/statistics/acquir_table.html */
class __TwigTemplate_84450a37c77c22c1f1ace49a95c79811b2187f67d0aa1ad1067af51d9ba6c8bf extends Twig_Template
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
        echo "<div class=\"widget-main\">
\t<div class=\"row\">
\t\t<!-- <h3 class=\"header smaller lighter blue\">客户报表</h3> -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<select class=\"search_select hidden\" style=\"float:left;height:34px;margin-right:10px;\">
\t\t\t\t\t<option>自定义</option>
\t\t\t\t\t<option>本周</option>
\t\t\t\t\t<option>上周</option>
\t\t\t\t\t<option>本月</option>
\t\t\t\t\t<option>上月</option>
\t\t\t\t\t<option>本季</option>
\t\t\t\t\t<option>上季</option>
\t\t\t\t\t<option>今年</option>
\t\t\t\t\t<option>去年</option>
\t\t\t\t\t<option>近7天</option>
\t\t\t\t\t<option>近30天</option>
\t\t\t\t</select>
\t\t\t\t<div class=\"col-xs-4 col-sm-3\" id=\"timeBox\" style=\"display: block;padding-left:0;\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"date-range-picker\" id=\"id-date-range-picker-1\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sx-4\" style=\" float: left; margin-right: 15px;\">
\t\t\t\t\t<button type=\"button\" id=\"countSearch\" class=\"btn btn-info btn-sm\" style=\" height:34px;\">
                        \t查询
                    </button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-2 leftTool\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"\">本日收单： </label>
\t\t\t\t\t\t<label class=\"all_count_day\">0 </label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"\">本月收单： </label>
\t\t\t\t\t\t<label class=\"all_count_month\">0 </label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"\">本年收单： </label>
\t\t\t\t\t\t<label class=\"all_count_year\">0 </label>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"sumBtn\" style=\"\">收单总数</div>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-10\" style=\"display:inline-block;\">
\t\t\t\t<div id=\"main\" style=\"height: 300px;\"></div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-xs-12\" style=\"display: none;\">
\t\t\t\t<div id=\"main1\" style=\"height: 300px;\"></div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-xs-12\" style=\"margin-top: 100px;\">
\t\t\t\t<div id=\"main2\" style=\"height: 500px;\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</div>
";
        // line 67
        $this->loadTemplate("admin/mark.html", "admin/statistics/acquir_table.html", 67)->display($context);
        // line 68
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script>
\tjQuery(function() {
        //\t时间范围
        \$('input[name=date-range-picker]').daterangepicker({
            'applyClass': 'btn-sm btn-success',
            'cancelClass': 'btn-sm btn-default',
            startDate: moment().subtract(12, 'month'),
            locale: {
                format: 'YYYY-MM',
                applyLabel: '确认',
                cancelLabel: '取消',
                customRangeLabel:'自定义日期',
            },
            ranges: {
                '最近': [moment().startOf('month'), moment().endOf('month')],
                '近一个月': [moment().subtract(1, 'month'), moment().endOf('month')],
                '近半年': [moment().subtract(6, 'month'), moment().endOf('month')],
                '近一年': [moment().subtract(12, 'month'), moment().endOf('month')]
            }
        });

        \$('#countSearch').click(function() {
            loadData();
        });
        loadData();

        function loadData() {
            ykp.doAjax({
                url: '/api/api_accounting_form/get_other_table',
                method: 'get',
                data: {
                    type:1,
                    date: \$('input[name=date-range-picker]').val()
                },
                success: function(res) {
                    if(res.data.all_count){
                        \$(\".all_count_day\").html(res.data.all_count.day_count);
                        \$(\".all_count_month\").html(res.data.all_count.month_count);
                        \$(\".all_count_year\").html(res.data.all_count.year_count);
                    }

                    var Ddata = {
                        el:'main',
                        title: {
                            text: res.data.month_title,
                            x: 'center'
                        },
                        lData:['客户数量'],
                        name:'客户数量',
                        xData:res.data.month_key,
                        sData:res.data.month_data
                    }
                    cs.drowBline(Ddata);

\t\t\t\t\t// 使用刚指定的配置项和数据显示图表。
                    var data1 = {
                        el: 'main2',
                        title: {
                            text: res.data.series.title,
                            x: 'center'
                        },
                        legend: {
                            show: true,
                            data: res.data.series.legend_title
                        },
                        series: {
                            name: res.data.series.title,
                            data: res.data.series.legend_data,
                        }
                    }
                    cs.drowPieCharts(data1);
                }
            })


        }
\t})
</script>";
    }

    public function getTemplateName()
    {
        return "admin/statistics/acquir_table.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 68,  87 => 67,  19 => 1,);
    }
}
/* <div class="widget-main">*/
/* 	<div class="row">*/
/* 		<!-- <h3 class="header smaller lighter blue">客户报表</h3> -->*/
/* 		<div class="row">*/
/* 			<div class="col-xs-12">*/
/* 				<select class="search_select hidden" style="float:left;height:34px;margin-right:10px;">*/
/* 					<option>自定义</option>*/
/* 					<option>本周</option>*/
/* 					<option>上周</option>*/
/* 					<option>本月</option>*/
/* 					<option>上月</option>*/
/* 					<option>本季</option>*/
/* 					<option>上季</option>*/
/* 					<option>今年</option>*/
/* 					<option>去年</option>*/
/* 					<option>近7天</option>*/
/* 					<option>近30天</option>*/
/* 				</select>*/
/* 				<div class="col-xs-4 col-sm-3" id="timeBox" style="display: block;padding-left:0;">*/
/* 					<div class="input-group">*/
/* 						<span class="input-group-addon">*/
/* 							<i class="fa fa-calendar bigger-110"></i>*/
/* 						</span>*/
/* 						<input class="form-control" type="text" name="date-range-picker" id="id-date-range-picker-1">*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-sx-4" style=" float: left; margin-right: 15px;">*/
/* 					<button type="button" id="countSearch" class="btn btn-info btn-sm" style=" height:34px;">*/
/*                         	查询*/
/*                     </button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			<div class="col-xs-2 leftTool">*/
/* 					<div class="form-group">*/
/* 						<label class="">本日收单： </label>*/
/* 						<label class="all_count_day">0 </label>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="">本月收单： </label>*/
/* 						<label class="all_count_month">0 </label>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="">本年收单： </label>*/
/* 						<label class="all_count_year">0 </label>*/
/* 					</div>*/
/* 					<div>*/
/* 						<div class="sumBtn" style="">收单总数</div>*/
/* 					</div>*/
/* 			</div>*/
/* 			<div class="col-xs-10" style="display:inline-block;">*/
/* 				<div id="main" style="height: 300px;"></div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="col-xs-12" style="display: none;">*/
/* 				<div id="main1" style="height: 300px;"></div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="col-xs-12" style="margin-top: 100px;">*/
/* 				<div id="main2" style="height: 500px;"></div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* </div>*/
/* {% include 'admin/mark.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script>*/
/* 	jQuery(function() {*/
/*         //	时间范围*/
/*         $('input[name=date-range-picker]').daterangepicker({*/
/*             'applyClass': 'btn-sm btn-success',*/
/*             'cancelClass': 'btn-sm btn-default',*/
/*             startDate: moment().subtract(12, 'month'),*/
/*             locale: {*/
/*                 format: 'YYYY-MM',*/
/*                 applyLabel: '确认',*/
/*                 cancelLabel: '取消',*/
/*                 customRangeLabel:'自定义日期',*/
/*             },*/
/*             ranges: {*/
/*                 '最近': [moment().startOf('month'), moment().endOf('month')],*/
/*                 '近一个月': [moment().subtract(1, 'month'), moment().endOf('month')],*/
/*                 '近半年': [moment().subtract(6, 'month'), moment().endOf('month')],*/
/*                 '近一年': [moment().subtract(12, 'month'), moment().endOf('month')]*/
/*             }*/
/*         });*/
/* */
/*         $('#countSearch').click(function() {*/
/*             loadData();*/
/*         });*/
/*         loadData();*/
/* */
/*         function loadData() {*/
/*             ykp.doAjax({*/
/*                 url: '/api/api_accounting_form/get_other_table',*/
/*                 method: 'get',*/
/*                 data: {*/
/*                     type:1,*/
/*                     date: $('input[name=date-range-picker]').val()*/
/*                 },*/
/*                 success: function(res) {*/
/*                     if(res.data.all_count){*/
/*                         $(".all_count_day").html(res.data.all_count.day_count);*/
/*                         $(".all_count_month").html(res.data.all_count.month_count);*/
/*                         $(".all_count_year").html(res.data.all_count.year_count);*/
/*                     }*/
/* */
/*                     var Ddata = {*/
/*                         el:'main',*/
/*                         title: {*/
/*                             text: res.data.month_title,*/
/*                             x: 'center'*/
/*                         },*/
/*                         lData:['客户数量'],*/
/*                         name:'客户数量',*/
/*                         xData:res.data.month_key,*/
/*                         sData:res.data.month_data*/
/*                     }*/
/*                     cs.drowBline(Ddata);*/
/* */
/* 					// 使用刚指定的配置项和数据显示图表。*/
/*                     var data1 = {*/
/*                         el: 'main2',*/
/*                         title: {*/
/*                             text: res.data.series.title,*/
/*                             x: 'center'*/
/*                         },*/
/*                         legend: {*/
/*                             show: true,*/
/*                             data: res.data.series.legend_title*/
/*                         },*/
/*                         series: {*/
/*                             name: res.data.series.title,*/
/*                             data: res.data.series.legend_data,*/
/*                         }*/
/*                     }*/
/*                     cs.drowPieCharts(data1);*/
/*                 }*/
/*             })*/
/* */
/* */
/*         }*/
/* 	})*/
/* </script>*/
