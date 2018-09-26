<?php

/* admin/financialManagement/wages.html */
class __TwigTemplate_55eda2b2e38ce3e7600818f57b9dfaeee2dea112ce388bfce9b580690b0cdf40 extends Twig_Template
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
    th,td{
        border:1px solid #ddd;
        text-align: center;
    }
    table{
        border-collapse: collapse;
    }
    #templateCon label{
        width:60px;
    }
    .check{
        padding: 2px 6px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px;
        border-color: #46b8da;
        top: -1px;
        color:white;
        background-color: #6FB3E0 !important;
    }
    .custom_table tr td{
    \ttext-align: right !important; 
    }
</style>
<div class=\"widget-main\">
    <div class=\"row\">
        <!--  <h3 class=\"header smaller lighter blue\">员工工资</h3> -->
        <div class=\"actions\" id=\"topTool\">
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <select pts=1 sear=\"month\" status=\"time\" class=\"monthList\">
                    <option value=\"\"> 请选择月份 </option>
                    <option value=\"01\"> 1月 </option>
                    <option value=\"02\"> 2月 </option>
                    <option value=\"03\"> 3月 </option>
                    <option value=\"04\"> 4月 </option>
                    <option value=\"05\"> 5月 </option>
                    <option value=\"06\"> 6月 </option>
                    <option value=\"07\"> 7月 </option>
                    <option value=\"08\"> 8月 </option>
                    <option value=\"09\"> 9月 </option>
                    <option value=\"10\"> 10月 </option>
                    <option value=\"11\"> 11月 </option>
                    <option value=\"12\"> 12月 </option>
                </select>
            </div>
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <select pts=1 sear=\"department\">
                    <option value=\"\">部门 </option>
                </select>
            </div>
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
               <!-- <input type=\"text\" pts=0 placeholder=\"员工\" sear=\"bmm_employees.name\">-->
                <select style=\"width: 180px\"  pts=0  sear=\"bmm_employees.name\" class=\"advandced-search \" tabindex=\"-1\" data-type=\"gj\" \">
                    <option value=\"\"> 员工 </option>
                </select>
            </div>
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <button title=\"搜索\" class=\"search btn btn-info btn-sm\">
                    <i class=\"fa fa-search\"></i>
                </button>
            </div>
            <div class=\"col-sx-4\" style=\" float: left;margin-right: 5px;\">
                <button title=\"刷新\" id=\"flush\" type=\"button\" class=\"btn btn-info btn-sm\" style=\"background-color: #32CD32    !important;\">
                    <i class=\"fa fa-refresh\"></i>
                </button>
            </div>
            <div class=\"col-sx-4\" contentAuthority=\"166\" style=\" float: left;margin-right: 5px;\" >
                <button title=\"打印\" class=\"print btn btn-info btn-sm\" style=\"background-color: #1E9FFF !important;\">
                    <i class=\"fa fa-print\"></i>
                </button>
            </div>
        </div>
    </div>
        <div class=\"platform-data custom_table\">
            <!--startprint-->
            <style media=print type=\"text/css\"> 
                table{
                    border:1px solid #000;
                    border-collapse: collapse;
                }
                table thead tr{                        
                    height: 42px;
                }
               \ttd,th{
                    text-align:center;
                    border:1px solid #000;
                    white-space: nowrap !important;
                    text-align: center;
                } 
                #qm{
                \tborder: none;
                \t width: 50px;
                }
                
                td{
                    height:40px;
                }
            </style>
            <table id=\"dynamic-table\">
                <thead>
                \t  <tr>
                        <th colspan=\"26\" id=\"gs\" style=\"text-align: center !important;\"></th>
                     </tr>
                    <tr>
                        <th rowspan=\"2\" class=\"fh\">复核</th>
                        <th rowspan=\"2\">序号</th>
                        <th rowspan=\"2\">部门</th>
                        <th rowspan=\"2\">姓名</th>
                        <!--<th rowspan=\"2\">月工资标准</th>-->
                       
                        <th colspan=\"8\">基本部分</th>
                        <th colspan=\"3\">绩效部分</th>
                        <th colspan=\"3\">出勤栏</th>
                        <th rowspan=\"2\">应发合计</th>
                        <th colspan=\"3\">代缴费用</th>
                        <th rowspan=\"2\" >应扣合计</th>
                         <th rowspan=\"2\" >实发工资(元)</th>
                        <th rowspan=\"2\" class=\"qm\" style=\"background: #fff;display:none;\">  签  名  </th>
                    </tr>
                    <!--<tr>
                        
                    </tr>-->
                    <tr>
                        <th>岗位工资</th>
                        <th>考核工资</th>
                        <th>全勤奖</th>
                        <th>通讯补贴</th>
                        <th>岗位补贴</th>
                        <th>加班工资</th>
                        <th>其他</th>
                        <th>合计</th>
                        <th>绩效标准(元)</th>
                        <th>比例(%)</th>
                        <th>合计</th>
                        <th>迟到早退</th>
                        <th>病事假</th>
                        <th>旷工</th>
                        <th>社保</th>
                        <th>个税</th>
                        <th>其他</th>
                    </tr>
                </thead>
                <tbody id=\"datalist\">
                    
                </tbody>
                <!--<tfoot>
                    <tr colspan=\"32\">
                        <td colspan=\"30\"></td>
                    </tr>
                </tfoot>-->
                <tfoot id=\"tfoot\">
                    <tr>
                        <td colspan=\"4\" id=\"heji\" style=\"font-weight:bold;\">分栏合计</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class=\"qm\" style=\"background: #fff; display:none;\"></td>
                         <td class=\"qm\" style=\"background: #fff; display:none;\"></td>
                    </tr>
                </tfoot>
                 
            </table>
            <!--endprint-->
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

        <div class=\"popup_new\" style=\"display:none\">
            <div class=\"row\">
                <form class=\"item_form\" role=\"form\">
                    <div class=\"form_data\">
                        <label> 部门 </label>
                        <select>
                            <option> - - - 请选择 - - - </option>
                        </select>
                        <label> 姓名 </label>
                        <select>
                            <option> - - - 请选择 - - - </option>
                        </select>
                        <label style=\"width:70px;\"> 月工资标准 </label>
                        <select >
                            <option>
                                - - - 请选择 - - - 
                            </option>
                        </select>
                    </div>
                    <div class=\"form_data\" style=\"line-height:50px;\">
                        <p style=\"font-weight:bold;\"> 应发金额： </p>
                    </div>
                    <div class=\"form_data\">
                        <label> 岗位工资 </label>
                        <input type=\"text\"/>
                        <label> 考核工资 </label>
                        <input type=\"text\"/>
                        <label> 全勤奖 </label>
                        <input type=\"text\"/>
                    </div>
                    <div class=\"form_data\">
                        <label> 通讯补贴 </label>
                        <input type=\"text\"/>
                        <label> 岗位补贴 </label>
                        <input type=\"text\"/>
                        <label> 加班工资 </label>
                        <input type=\"text\"/>
                    </div>
                    <div class=\"form_data\">
                        <label> 其他 </label>
                        <input type=\"text\"/>
                        <label> 绩效标准</label>
                        <input type=\"text\"/>
                        <label> 比例(%) </label>
                        <input type=\"text\"/>
                    </div>
                     <div class=\"form_data\">
                        <label> 迟到早退 </label>
                        <input type=\"text\"/>
                        <label> 病事假 </label>
                        <input type=\"text\"/>
                        <label> 旷工 </label>
                        <input type=\"text\"/>
                    </div>
                    <div class=\"form_data\" style=\"line-height:50px;\">
                        <p style=\"font-weight:bold;\"> 应扣金额： </p>
                    </div>
                    <div class=\"form_data\">
                        <label> 社保 </label>
                        <input type=\"text\"/>
                        <label> 个税 </label>
                        <input type=\"text\"/>
                        <label> 其他 </label>
                        <input type=\"text\"/>
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
    </div>
    ";
        // line 273
        $this->loadTemplate("admin/mark.html", "admin/financialManagement/wages.html", 273)->display($context);
        // line 274
        echo "</div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script src=\"/resource/adimin/assets/js/jQuery.print.js\"></script>
<script type=\"text/javascript\">
    \$(function(){
        cs.getNodes([166]);
\t\tcs.getYearAndMonth('2015-1-1', '2025-12-31','.monthList');
    \tvar order ='bmm_employees.id desc';
        var page_size = 10; //每页显示的默认条目数
        var filter = '';
        var month = \"\";
\t\tsetTimeout(function() {
\t\t\t\$('#gs').html(JSON.parse(ykp.getCookie('userinfo')).company.name +\" \"+ \$('select[sear=month]').val()+\"工资表\");
\t\t},500)
//\t\t\$('#yf').html(\$('select[sear=month]').val());
        //获取所有部门 以及 设置月份的value
        getDepartments();
        function getDepartments(){
            ykp.doAjax({
                url:'/api/api_department/f7',
                method:'post',
                data:{
                    select:'bmm_department.id,bmm_department.name',
                    filter:'bmm_department.is_del <> 1'
                },
                success:function(res){
                    var data = res.data;
                    var department_html = [];
                    for(var i in data){
                        department_html.push('<option value=\"'+ data[i]['id'] +'\">'+ data[i]['name'] +'</option>');
                    }
                    \$('[sear=\"department\"]').append(department_html.join(''));

//                  \$('[sear=\"month\"]').find('option').not(':first').each(function(i,e){
//                      \$(this).val(new Date().getFullYear() + \$(this).val());
//                  });
                }
            });
        }

        //获取所有员工
        getEmployees();

        function getEmployees() {
            ykp.doAjax({
                url: '/api/api_employees/f7',
                method: 'post',
                async: false,
                data: {
                    select: 'bmm_employees.id,bmm_employees.name'
                },
                success: function(res) {
                    var data = res.data;
                    \$('.advandced-search').select2({
                        allowClear: true
                    });
                    for(var i in data) {
                        if(data[i]['name']) {
                            //employees[data[i]['id']] = data[i]['name'];
                            \$('.advandced-search').append(new Option(data[i]['name'], data[i]['name']));
                        }
                    }
                }
            });
        }

        initData(1);

        //打印
        printWages();
        function printWages(){
            \$('.print').unbind('click').on('click', function() {
            \t\$('.fh').hide();
            \t\$('.qm').show();
            \t\$('#heji').attr(\"colspan\",3);
                //Print ele4 with custom options
                \$(\".platform-data.custom_table\").print({
                    //Use Global styles
                    globalStyles : false,
                    //Add link with attrbute media=print
                    mediaPrint : false,
                    //Custom stylesheet
                    stylesheet : null,
                    //Print in a hidden iframe
                    iframe : true,
                    //Don't print this
                    noPrintSelector : \".no-print\",
                    //Add this at top
                    prepend : null,
                    //Add this on bottom
                    append : null,
                    //Log to console when printing is done via a deffered callback
                    deferred: \$.Deferred().done(function() { console.log('Printing done', arguments); })
                });
                \$('.fh').show();
                \$('.qm').hide();
                \$('#heji').attr(\"colspan\",4);
            });
        }

        //改变每页显示的条目数
        \$('.changePageNum').change(function() {
            page_size = \$(this).val();
            ykp.setCookie('page_size',page_size);
            initData();
        })

        //普通搜索
        generalSearch();
        function generalSearch(){
            var data={
                url:'/api/api_finance/weges_list',
                method:'post',
                data:{
                    limit:page_size,
                    order:order
                }
            }

            cs.doSearch('.search',data,'filter',false,function(res,_filter,otherSear){
                filter = _filter;
                month = otherSear.month;
                if(judgeData(res)){
                    addList(res);
                    
                }
                \$('#gs').html(JSON.parse(ykp.getCookie('userinfo')).company.name +\" \"+ \$('select[sear=month]').val()+\"工资单\");
//              \$('#gs').html(JSON.parse(ykp.getCookie('userinfo')).company.name);
//\t\t\t\t\t\$('#yf').html(\$('select[sear=month]').val());
            },'','',true);
            
        }

        //获取工资数据
        function initData(isInit){
        \tif(isInit == 1 ){
\t\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\t\tykp.setCookie(\"where\", \"\");
        \t}
            ykp.list({
                url:'/api/api_finance/weges_list',
                method:'post',
                pageBar:{
                    id:'.pageBar'
                },
                data:{
                    limit:page_size,
                    filter:filter,
                    month:month
                },
                loadList:function(res){
                    if(judgeData(res)){
                        addList(res);
                    }
                }
            });
        }

\t\t\$('#flush').click(function(){
\t\t\tfilter = '';
\t\t\t\$('[sear=\"month\"]').val('').trigger('change');
\t\t\t\$('[sear=\"department\"]').val('').trigger('change');
\t\t\t\$('[sear=\"bmm_employees.name\"]').val('').trigger('change');
\t\t\tykp.setCookie(\"filter\", \"\");
\t\t\tykp.setCookie(\"where\", \"\");
\t\t\tinitData();
\t\t})


        //判断是否有返回的数据
        function judgeData(res){
        \t\$('.monthList').val(res.data.return_month);
            if(res.data.items == \"\") {
                setTimeout(function(){
                        ykp.prompt('暂无数据！');
                    },1000);

                \$('#datalist').html('<tr><td colspan=\"30\"><div class=\"table-actions clearfix\"></div> <div style=\"text-align: center;color:#7d7d7d\" class=\"page\">暂无数据</div></td></tr>');
                \$('#tfoot td').not(':first').text('0');
                \$('#tfoot').hide();
                return false;
            }
            return true;
        }


        //工资表中添加获取到的工资数据
        function addList(res){
            var data = res.data.items;
            var html = [];
\t\t\tvar userLastList = res.data.userLastList;
\t\t\t//<td class=\"basicwage\" field=\"base\">\${data[i]['cwm_wages.base'] || (userLastList[data[i]['cwm_wages.id']] ? userLastList[data[i]['cwm_wages.id']]['base'] : \"\") || 0}</td>
            for(var i in data){
                html.push(`<tr class=\"wage_item\" data-id=\"\${data[i]['cwm_wages.id']}\">
                        <td class=\"useless fh \" style=\"text-align: left!important;\"  data-status=\"\${data[i]['cwm_wages.is_sign']}\">\${data[i]['cwm_wages.is_sign'] === '0' ? '<span class=\"pos-rel checked btGreen\" contentAuthority=\"167\" title=\"复核\"><i class=\"fa fa-check-circle-o \"></i></span>' : '<span class=\"pos-rel checked btOrange\" contentAuthority=\"167\" title=\"取消复核\"><i class=\"fa fa-rotate-left \"></i></span>'}</td>
                        <td class=\"useless wage_id\">\${parseInt(i)+1}</td>
                        <td class=\"useless\">\${data[i]['bmm_department.name']}</td>
                        <td class=\"useless emp_id\" employee-id=\"\${data[i]['bmm_employees.id']}\">\${data[i]['bmm_employees.name']}</td>
                        
                        <td class=\"base\" field=\"true\">\${data[i]['cwm_wages.true'] || (userLastList[data[i]['cwm_wages.id']] ? userLastList[data[i]['cwm_wages.id']]['true'] : \"\") || 0}</td>
                        
                        <td class=\"base\" field=\"assessment\">\${data[i]['cwm_wages.assessment'] || (userLastList[data[i]['cwm_wages.id']] ? userLastList[data[i]['cwm_wages.id']]['assessment'] : \"\") || 0}</td>
                        <td class=\"base\" field=\"attendance\">\${data[i]['cwm_wages.attendance'] || (userLastList[data[i]['cwm_wages.id']] ? userLastList[data[i]['cwm_wages.id']]['attendance'] : \"\") || 0}</td>
                        <td class=\"base\" field=\"communication\">\${data[i]['cwm_wages.communication']  || (userLastList[data[i]['cwm_wages.id']] ? userLastList[data[i]['cwm_wages.id']]['communication'] : \"\") || 0}</td>
                        <td class=\"base\" field=\"post_subsidy\">\${data[i]['cwm_wages.post_subsidy']}</td>
                        <td class=\"base\" field=\"overtime\">\${data[i]['cwm_wages.overtime']}</td>
                        <td class=\"base\" field=\"other\">\${data[i]['cwm_wages.other']}</td>
                        <td class=\"basetotal\"></td>
                        <td class=\"performence\">\${eval(data[i]['cwm_wages.standard_1'] + '+' + data[i]['cwm_wages.standard_2']).toFixed(2)}</td>
                        <td class=\"performence\" field=\"percent\">\${data[i]['cwm_wages.percent'] ? (data[i]['cwm_wages.percent']) : \"100\"}</td>
                        <td class=\"performencetotal\"></td>
                        <td class=\"attendance\" field=\"late\">\${data[i]['cwm_wages.late']}</td>
                        <td class=\"attendance\" field=\"leave\">\${data[i]['cwm_wages.leave']}</td>
                        <td class=\"attendance\" field=\"absenteeism\">\${data[i]['cwm_wages.absenteeism']}</td>
                        <td class=\"totalpayable\"></td>
                        <td class=\"deductible\" field=\"social\">\${data[i]['cwm_wages.social']}</td>
                        <td class=\"deductible\" field=\"tax\">\${data[i]['cwm_wages.tax']}</td>
                        <td class=\"deductible\" field=\"other2\">\${data[i]['cwm_wages.other2']}</td>
                        <td class=\"totaldeductible\"></td>
                        <td class=\"realwages\"></td>
                        <td class=\"qm\" style=\"background:#fff; display:none;\"></td>
                    </tr>`);
            }

            html = \$(html.join(''));
            

            inTotal(html);
            \$('#tfoot').show();
            \$('#datalist').html(html);

            cs.getNodes([167]);
            var edit_statu = cs.getNodes([246],true);
            
            check();
            if(edit_statu ){
                changeMoney();
            }
            
        }

        function inTotal(html){
             //基本部分合计
            var total = 0;
            html.find('.basetotal').each(function(index,ele){
                \$(this).siblings('.base').each(function(i,e){
                    total += parseFloat(\$(e).text().trim());
                });

                \$(ele).text(total.toFixed(2));
                total = 0;
            });

            //绩效部分合计
            total = 1;
            html.find('.performencetotal').each(function(index,ele){
                \$(this).siblings('.performence').each(function(i,e){
                    total *= parseFloat(\$(e).text().trim());
                });

                \$(ele).text((total / 100).toFixed(2));
                total = 1;
            });

            //应扣合计
            total = 0;
            html.find('.totaldeductible').each(function(index,ele){
                \$(this).siblings('.deductible').each(function(i,e){
                    total += parseFloat(\$(e).text().trim());
                });

                \$(ele).text(total.toFixed(2));
                total = 0;
            });

            //应发合计
             html.find('.totalpayable').each(function(index,ele){
                total = eval(\$(this).siblings('.basetotal').text().trim() +'+'+ \$(this).siblings('.performencetotal').text().trim() );   //+'+'+ \$(this).siblings('.basicwage').text().trim()
                \$(this).siblings('.attendance').each(function(i,e){
                    total -= parseFloat(\$(e).text().trim());
                });

                \$(ele).text(total.toFixed(2));
                total = 0;
             });

            //实发工资
            html.find('.realwages').each(function(index,ele){
                total = eval(\$(this).siblings('.totalpayable').text().trim() +'-'+ \$(this).siblings('.totaldeductible').text().trim());

                \$(ele).text(total.toFixed(2));
             });

            //分栏合计
            total = 0;
            var rows = [];
            html.each(function(i,e){
                rows.push(this);
            });
            \$('#tfoot td').not(':first').each(function(index,element){
                for(var i in rows){
                    total += parseFloat(\$(rows[i].cells[index + 4]).text().trim());
                }
\t\t\t\tif(index !=  \$('#tfoot td').not(':first').length-1 && index != 9) {
\t\t\t\t\t\$(element).text(total.toFixed(2) !=\"NaN\"?total.toFixed(2):\"\");
               \t\ttotal = 0;
\t\t\t\t}else if(index == 9){
\t\t\t\t\t \$(element).text((total / rows.length).toFixed(0)!=\"NaN\"? (total / rows.length).toFixed(0) : \"\");
\t\t\t\t\t total = 0;
\t\t\t\t}
                
            });
        }

        //修改金额
        function changeMoney(){
            \$('#datalist [field]').dblclick(function(){
            \tvar status = \$(this).parents('tr').find('td').eq(0).attr('data-status');
            \tif(status == 0) {
            \t\t\$(this).html('<input type=\"number\" style=\"width:50px;\" class=\"pos-rel\"/>');
\t                \$(this).find('input.pos-rel').focus();
\t                saveChange();
            \t}
            });
        }

        //失去焦点保存数据
        function saveChange(){
            \$('input.pos-rel').blur(function(){
                var it = \$(this);

                var money = it.val().trim() ? it.val().trim() : '0';

                if(!money.match(/^\\d+\$/)){
                    ykp.prompt('请输入数字');
                    return;
                }

                var postdata = {};
                postdata['id'] = it.parents('tr').attr('data-id');
                postdata['employee_id'] = it.parent().siblings('.emp_id').attr('employee-id');

                postdata[it.parent().attr('field')] = money;

                it.parent().siblings('[field]').each(function(i,e){
                    postdata[\$(this).attr('field')] = \$(this).text().trim();
                });

                it.parent().html(money);

                ykp.doAjax({
                    url:'/api/api_finance/wagesEdit',
                    method:'post',
                    data:postdata,
                    success:function(res){
                        initData();
                    }
                });
            });
        }

        //复核
        function check(){
            \$('.checked').click(function(){
                var it =\$(this);
                var postdata = {};
\t\t\t\tpostdata['id'] = \$(this).parents('tr').attr('data-id');
\t\t        postdata['is_sign'] =  \$(this).parent().attr('data-status') == 1 ? 0 : 1; 
\t\t\t\tlayui.use(['layer'],function() {
\t\t\t\t\tvar layer = layui.layer;
\t\t\t\t\t layer.confirm(it.parent().attr('data-status') ==1 ? '确认取消复核吗？':'确认复核吗？', function(index){
\t\t                ykp.doAjax({
\t\t                    url:'/api/api_finance/weges_sh',
\t\t                    method:'post',
\t\t                    data:postdata,
\t\t                    success:function(res){
\t\t                        initData();
\t\t                    }
\t\t                });
\t\t\t\t        layer.close(index);
\t\t\t\t     });
\t\t\t\t})
                
            });
        }   
    });
</script>";
    }

    public function getTemplateName()
    {
        return "admin/financialManagement/wages.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 274,  293 => 273,  19 => 1,);
    }
}
/* <style type="text/css">*/
/*     th,td{*/
/*         border:1px solid #ddd;*/
/*         text-align: center;*/
/*     }*/
/*     table{*/
/*         border-collapse: collapse;*/
/*     }*/
/*     #templateCon label{*/
/*         width:60px;*/
/*     }*/
/*     .check{*/
/*         padding: 2px 6px;*/
/*         font-size: 12px;*/
/*         line-height: 1.5;*/
/*         border-radius: 3px;*/
/*         border-color: #46b8da;*/
/*         top: -1px;*/
/*         color:white;*/
/*         background-color: #6FB3E0 !important;*/
/*     }*/
/*     .custom_table tr td{*/
/*     	text-align: right !important; */
/*     }*/
/* </style>*/
/* <div class="widget-main">*/
/*     <div class="row">*/
/*         <!--  <h3 class="header smaller lighter blue">员工工资</h3> -->*/
/*         <div class="actions" id="topTool">*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <select pts=1 sear="month" status="time" class="monthList">*/
/*                     <option value=""> 请选择月份 </option>*/
/*                     <option value="01"> 1月 </option>*/
/*                     <option value="02"> 2月 </option>*/
/*                     <option value="03"> 3月 </option>*/
/*                     <option value="04"> 4月 </option>*/
/*                     <option value="05"> 5月 </option>*/
/*                     <option value="06"> 6月 </option>*/
/*                     <option value="07"> 7月 </option>*/
/*                     <option value="08"> 8月 </option>*/
/*                     <option value="09"> 9月 </option>*/
/*                     <option value="10"> 10月 </option>*/
/*                     <option value="11"> 11月 </option>*/
/*                     <option value="12"> 12月 </option>*/
/*                 </select>*/
/*             </div>*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <select pts=1 sear="department">*/
/*                     <option value="">部门 </option>*/
/*                 </select>*/
/*             </div>*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                <!-- <input type="text" pts=0 placeholder="员工" sear="bmm_employees.name">-->*/
/*                 <select style="width: 180px"  pts=0  sear="bmm_employees.name" class="advandced-search " tabindex="-1" data-type="gj" ">*/
/*                     <option value=""> 员工 </option>*/
/*                 </select>*/
/*             </div>*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <button title="搜索" class="search btn btn-info btn-sm">*/
/*                     <i class="fa fa-search"></i>*/
/*                 </button>*/
/*             </div>*/
/*             <div class="col-sx-4" style=" float: left;margin-right: 5px;">*/
/*                 <button title="刷新" id="flush" type="button" class="btn btn-info btn-sm" style="background-color: #32CD32    !important;">*/
/*                     <i class="fa fa-refresh"></i>*/
/*                 </button>*/
/*             </div>*/
/*             <div class="col-sx-4" contentAuthority="166" style=" float: left;margin-right: 5px;" >*/
/*                 <button title="打印" class="print btn btn-info btn-sm" style="background-color: #1E9FFF !important;">*/
/*                     <i class="fa fa-print"></i>*/
/*                 </button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*         <div class="platform-data custom_table">*/
/*             <!--startprint-->*/
/*             <style media=print type="text/css"> */
/*                 table{*/
/*                     border:1px solid #000;*/
/*                     border-collapse: collapse;*/
/*                 }*/
/*                 table thead tr{                        */
/*                     height: 42px;*/
/*                 }*/
/*                	td,th{*/
/*                     text-align:center;*/
/*                     border:1px solid #000;*/
/*                     white-space: nowrap !important;*/
/*                     text-align: center;*/
/*                 } */
/*                 #qm{*/
/*                 	border: none;*/
/*                 	 width: 50px;*/
/*                 }*/
/*                 */
/*                 td{*/
/*                     height:40px;*/
/*                 }*/
/*             </style>*/
/*             <table id="dynamic-table">*/
/*                 <thead>*/
/*                 	  <tr>*/
/*                         <th colspan="26" id="gs" style="text-align: center !important;"></th>*/
/*                      </tr>*/
/*                     <tr>*/
/*                         <th rowspan="2" class="fh">复核</th>*/
/*                         <th rowspan="2">序号</th>*/
/*                         <th rowspan="2">部门</th>*/
/*                         <th rowspan="2">姓名</th>*/
/*                         <!--<th rowspan="2">月工资标准</th>-->*/
/*                        */
/*                         <th colspan="8">基本部分</th>*/
/*                         <th colspan="3">绩效部分</th>*/
/*                         <th colspan="3">出勤栏</th>*/
/*                         <th rowspan="2">应发合计</th>*/
/*                         <th colspan="3">代缴费用</th>*/
/*                         <th rowspan="2" >应扣合计</th>*/
/*                          <th rowspan="2" >实发工资(元)</th>*/
/*                         <th rowspan="2" class="qm" style="background: #fff;display:none;">  签  名  </th>*/
/*                     </tr>*/
/*                     <!--<tr>*/
/*                         */
/*                     </tr>-->*/
/*                     <tr>*/
/*                         <th>岗位工资</th>*/
/*                         <th>考核工资</th>*/
/*                         <th>全勤奖</th>*/
/*                         <th>通讯补贴</th>*/
/*                         <th>岗位补贴</th>*/
/*                         <th>加班工资</th>*/
/*                         <th>其他</th>*/
/*                         <th>合计</th>*/
/*                         <th>绩效标准(元)</th>*/
/*                         <th>比例(%)</th>*/
/*                         <th>合计</th>*/
/*                         <th>迟到早退</th>*/
/*                         <th>病事假</th>*/
/*                         <th>旷工</th>*/
/*                         <th>社保</th>*/
/*                         <th>个税</th>*/
/*                         <th>其他</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody id="datalist">*/
/*                     */
/*                 </tbody>*/
/*                 <!--<tfoot>*/
/*                     <tr colspan="32">*/
/*                         <td colspan="30"></td>*/
/*                     </tr>*/
/*                 </tfoot>-->*/
/*                 <tfoot id="tfoot">*/
/*                     <tr>*/
/*                         <td colspan="4" id="heji" style="font-weight:bold;">分栏合计</td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td class="qm" style="background: #fff; display:none;"></td>*/
/*                          <td class="qm" style="background: #fff; display:none;"></td>*/
/*                     </tr>*/
/*                 </tfoot>*/
/*                  */
/*             </table>*/
/*             <!--endprint-->*/
/*         </div>*/
/*         <div align="center" style="margin-top: 20px; margin-bottom: 20px;">*/
/*             <div align="left" style="padding-left: 15px; float: left; width: 10%;" class="_num"></div>*/
/*             <!--<div id="pagination" style="float: left; width: 80%; height: 25px;"></div>-->*/
/*             <div class="pageBar pagination"></div>*/
/*             <div align="right" style="float: right;  width: 10%;">*/
/*                 <select style="width: 100px;" class="changePageNum">*/
/*                     <option value="10">每页10条</option>*/
/*                     <option value="20">每页20条</option>*/
/*                     <option value="50">每页50条</option>*/
/*                     <option value="100">每页100条</option>*/
/*                     <option value="200">每页200条</option>*/
/*                 </select>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="popup_new" style="display:none">*/
/*             <div class="row">*/
/*                 <form class="item_form" role="form">*/
/*                     <div class="form_data">*/
/*                         <label> 部门 </label>*/
/*                         <select>*/
/*                             <option> - - - 请选择 - - - </option>*/
/*                         </select>*/
/*                         <label> 姓名 </label>*/
/*                         <select>*/
/*                             <option> - - - 请选择 - - - </option>*/
/*                         </select>*/
/*                         <label style="width:70px;"> 月工资标准 </label>*/
/*                         <select >*/
/*                             <option>*/
/*                                 - - - 请选择 - - - */
/*                             </option>*/
/*                         </select>*/
/*                     </div>*/
/*                     <div class="form_data" style="line-height:50px;">*/
/*                         <p style="font-weight:bold;"> 应发金额： </p>*/
/*                     </div>*/
/*                     <div class="form_data">*/
/*                         <label> 岗位工资 </label>*/
/*                         <input type="text"/>*/
/*                         <label> 考核工资 </label>*/
/*                         <input type="text"/>*/
/*                         <label> 全勤奖 </label>*/
/*                         <input type="text"/>*/
/*                     </div>*/
/*                     <div class="form_data">*/
/*                         <label> 通讯补贴 </label>*/
/*                         <input type="text"/>*/
/*                         <label> 岗位补贴 </label>*/
/*                         <input type="text"/>*/
/*                         <label> 加班工资 </label>*/
/*                         <input type="text"/>*/
/*                     </div>*/
/*                     <div class="form_data">*/
/*                         <label> 其他 </label>*/
/*                         <input type="text"/>*/
/*                         <label> 绩效标准</label>*/
/*                         <input type="text"/>*/
/*                         <label> 比例(%) </label>*/
/*                         <input type="text"/>*/
/*                     </div>*/
/*                      <div class="form_data">*/
/*                         <label> 迟到早退 </label>*/
/*                         <input type="text"/>*/
/*                         <label> 病事假 </label>*/
/*                         <input type="text"/>*/
/*                         <label> 旷工 </label>*/
/*                         <input type="text"/>*/
/*                     </div>*/
/*                     <div class="form_data" style="line-height:50px;">*/
/*                         <p style="font-weight:bold;"> 应扣金额： </p>*/
/*                     </div>*/
/*                     <div class="form_data">*/
/*                         <label> 社保 </label>*/
/*                         <input type="text"/>*/
/*                         <label> 个税 </label>*/
/*                         <input type="text"/>*/
/*                         <label> 其他 </label>*/
/*                         <input type="text"/>*/
/*                     </div>*/
/*                 </form>    */
/*                 <div class="popup_button">*/
/*                     <button class="sure_button">*/
/*                         <i class="fa fa-check" aria-hidden="true"></i>*/
/*                         保存*/
/*                     </button>*/
/*                 </div>            */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% include 'admin/mark.html' %}*/
/* </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script src="/resource/adimin/assets/js/jQuery.print.js"></script>*/
/* <script type="text/javascript">*/
/*     $(function(){*/
/*         cs.getNodes([166]);*/
/* 		cs.getYearAndMonth('2015-1-1', '2025-12-31','.monthList');*/
/*     	var order ='bmm_employees.id desc';*/
/*         var page_size = 10; //每页显示的默认条目数*/
/*         var filter = '';*/
/*         var month = "";*/
/* 		setTimeout(function() {*/
/* 			$('#gs').html(JSON.parse(ykp.getCookie('userinfo')).company.name +" "+ $('select[sear=month]').val()+"工资表");*/
/* 		},500)*/
/* //		$('#yf').html($('select[sear=month]').val());*/
/*         //获取所有部门 以及 设置月份的value*/
/*         getDepartments();*/
/*         function getDepartments(){*/
/*             ykp.doAjax({*/
/*                 url:'/api/api_department/f7',*/
/*                 method:'post',*/
/*                 data:{*/
/*                     select:'bmm_department.id,bmm_department.name',*/
/*                     filter:'bmm_department.is_del <> 1'*/
/*                 },*/
/*                 success:function(res){*/
/*                     var data = res.data;*/
/*                     var department_html = [];*/
/*                     for(var i in data){*/
/*                         department_html.push('<option value="'+ data[i]['id'] +'">'+ data[i]['name'] +'</option>');*/
/*                     }*/
/*                     $('[sear="department"]').append(department_html.join(''));*/
/* */
/* //                  $('[sear="month"]').find('option').not(':first').each(function(i,e){*/
/* //                      $(this).val(new Date().getFullYear() + $(this).val());*/
/* //                  });*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         //获取所有员工*/
/*         getEmployees();*/
/* */
/*         function getEmployees() {*/
/*             ykp.doAjax({*/
/*                 url: '/api/api_employees/f7',*/
/*                 method: 'post',*/
/*                 async: false,*/
/*                 data: {*/
/*                     select: 'bmm_employees.id,bmm_employees.name'*/
/*                 },*/
/*                 success: function(res) {*/
/*                     var data = res.data;*/
/*                     $('.advandced-search').select2({*/
/*                         allowClear: true*/
/*                     });*/
/*                     for(var i in data) {*/
/*                         if(data[i]['name']) {*/
/*                             //employees[data[i]['id']] = data[i]['name'];*/
/*                             $('.advandced-search').append(new Option(data[i]['name'], data[i]['name']));*/
/*                         }*/
/*                     }*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         initData(1);*/
/* */
/*         //打印*/
/*         printWages();*/
/*         function printWages(){*/
/*             $('.print').unbind('click').on('click', function() {*/
/*             	$('.fh').hide();*/
/*             	$('.qm').show();*/
/*             	$('#heji').attr("colspan",3);*/
/*                 //Print ele4 with custom options*/
/*                 $(".platform-data.custom_table").print({*/
/*                     //Use Global styles*/
/*                     globalStyles : false,*/
/*                     //Add link with attrbute media=print*/
/*                     mediaPrint : false,*/
/*                     //Custom stylesheet*/
/*                     stylesheet : null,*/
/*                     //Print in a hidden iframe*/
/*                     iframe : true,*/
/*                     //Don't print this*/
/*                     noPrintSelector : ".no-print",*/
/*                     //Add this at top*/
/*                     prepend : null,*/
/*                     //Add this on bottom*/
/*                     append : null,*/
/*                     //Log to console when printing is done via a deffered callback*/
/*                     deferred: $.Deferred().done(function() { console.log('Printing done', arguments); })*/
/*                 });*/
/*                 $('.fh').show();*/
/*                 $('.qm').hide();*/
/*                 $('#heji').attr("colspan",4);*/
/*             });*/
/*         }*/
/* */
/*         //改变每页显示的条目数*/
/*         $('.changePageNum').change(function() {*/
/*             page_size = $(this).val();*/
/*             ykp.setCookie('page_size',page_size);*/
/*             initData();*/
/*         })*/
/* */
/*         //普通搜索*/
/*         generalSearch();*/
/*         function generalSearch(){*/
/*             var data={*/
/*                 url:'/api/api_finance/weges_list',*/
/*                 method:'post',*/
/*                 data:{*/
/*                     limit:page_size,*/
/*                     order:order*/
/*                 }*/
/*             }*/
/* */
/*             cs.doSearch('.search',data,'filter',false,function(res,_filter,otherSear){*/
/*                 filter = _filter;*/
/*                 month = otherSear.month;*/
/*                 if(judgeData(res)){*/
/*                     addList(res);*/
/*                     */
/*                 }*/
/*                 $('#gs').html(JSON.parse(ykp.getCookie('userinfo')).company.name +" "+ $('select[sear=month]').val()+"工资单");*/
/* //              $('#gs').html(JSON.parse(ykp.getCookie('userinfo')).company.name);*/
/* //					$('#yf').html($('select[sear=month]').val());*/
/*             },'','',true);*/
/*             */
/*         }*/
/* */
/*         //获取工资数据*/
/*         function initData(isInit){*/
/*         	if(isInit == 1 ){*/
/* 				ykp.setCookie("filter", "");*/
/* 				ykp.setCookie("where", "");*/
/*         	}*/
/*             ykp.list({*/
/*                 url:'/api/api_finance/weges_list',*/
/*                 method:'post',*/
/*                 pageBar:{*/
/*                     id:'.pageBar'*/
/*                 },*/
/*                 data:{*/
/*                     limit:page_size,*/
/*                     filter:filter,*/
/*                     month:month*/
/*                 },*/
/*                 loadList:function(res){*/
/*                     if(judgeData(res)){*/
/*                         addList(res);*/
/*                     }*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/* 		$('#flush').click(function(){*/
/* 			filter = '';*/
/* 			$('[sear="month"]').val('').trigger('change');*/
/* 			$('[sear="department"]').val('').trigger('change');*/
/* 			$('[sear="bmm_employees.name"]').val('').trigger('change');*/
/* 			ykp.setCookie("filter", "");*/
/* 			ykp.setCookie("where", "");*/
/* 			initData();*/
/* 		})*/
/* */
/* */
/*         //判断是否有返回的数据*/
/*         function judgeData(res){*/
/*         	$('.monthList').val(res.data.return_month);*/
/*             if(res.data.items == "") {*/
/*                 setTimeout(function(){*/
/*                         ykp.prompt('暂无数据！');*/
/*                     },1000);*/
/* */
/*                 $('#datalist').html('<tr><td colspan="30"><div class="table-actions clearfix"></div> <div style="text-align: center;color:#7d7d7d" class="page">暂无数据</div></td></tr>');*/
/*                 $('#tfoot td').not(':first').text('0');*/
/*                 $('#tfoot').hide();*/
/*                 return false;*/
/*             }*/
/*             return true;*/
/*         }*/
/* */
/* */
/*         //工资表中添加获取到的工资数据*/
/*         function addList(res){*/
/*             var data = res.data.items;*/
/*             var html = [];*/
/* 			var userLastList = res.data.userLastList;*/
/* 			//<td class="basicwage" field="base">${data[i]['cwm_wages.base'] || (userLastList[data[i]['cwm_wages.id']] ? userLastList[data[i]['cwm_wages.id']]['base'] : "") || 0}</td>*/
/*             for(var i in data){*/
/*                 html.push(`<tr class="wage_item" data-id="${data[i]['cwm_wages.id']}">*/
/*                         <td class="useless fh " style="text-align: left!important;"  data-status="${data[i]['cwm_wages.is_sign']}">${data[i]['cwm_wages.is_sign'] === '0' ? '<span class="pos-rel checked btGreen" contentAuthority="167" title="复核"><i class="fa fa-check-circle-o "></i></span>' : '<span class="pos-rel checked btOrange" contentAuthority="167" title="取消复核"><i class="fa fa-rotate-left "></i></span>'}</td>*/
/*                         <td class="useless wage_id">${parseInt(i)+1}</td>*/
/*                         <td class="useless">${data[i]['bmm_department.name']}</td>*/
/*                         <td class="useless emp_id" employee-id="${data[i]['bmm_employees.id']}">${data[i]['bmm_employees.name']}</td>*/
/*                         */
/*                         <td class="base" field="true">${data[i]['cwm_wages.true'] || (userLastList[data[i]['cwm_wages.id']] ? userLastList[data[i]['cwm_wages.id']]['true'] : "") || 0}</td>*/
/*                         */
/*                         <td class="base" field="assessment">${data[i]['cwm_wages.assessment'] || (userLastList[data[i]['cwm_wages.id']] ? userLastList[data[i]['cwm_wages.id']]['assessment'] : "") || 0}</td>*/
/*                         <td class="base" field="attendance">${data[i]['cwm_wages.attendance'] || (userLastList[data[i]['cwm_wages.id']] ? userLastList[data[i]['cwm_wages.id']]['attendance'] : "") || 0}</td>*/
/*                         <td class="base" field="communication">${data[i]['cwm_wages.communication']  || (userLastList[data[i]['cwm_wages.id']] ? userLastList[data[i]['cwm_wages.id']]['communication'] : "") || 0}</td>*/
/*                         <td class="base" field="post_subsidy">${data[i]['cwm_wages.post_subsidy']}</td>*/
/*                         <td class="base" field="overtime">${data[i]['cwm_wages.overtime']}</td>*/
/*                         <td class="base" field="other">${data[i]['cwm_wages.other']}</td>*/
/*                         <td class="basetotal"></td>*/
/*                         <td class="performence">${eval(data[i]['cwm_wages.standard_1'] + '+' + data[i]['cwm_wages.standard_2']).toFixed(2)}</td>*/
/*                         <td class="performence" field="percent">${data[i]['cwm_wages.percent'] ? (data[i]['cwm_wages.percent']) : "100"}</td>*/
/*                         <td class="performencetotal"></td>*/
/*                         <td class="attendance" field="late">${data[i]['cwm_wages.late']}</td>*/
/*                         <td class="attendance" field="leave">${data[i]['cwm_wages.leave']}</td>*/
/*                         <td class="attendance" field="absenteeism">${data[i]['cwm_wages.absenteeism']}</td>*/
/*                         <td class="totalpayable"></td>*/
/*                         <td class="deductible" field="social">${data[i]['cwm_wages.social']}</td>*/
/*                         <td class="deductible" field="tax">${data[i]['cwm_wages.tax']}</td>*/
/*                         <td class="deductible" field="other2">${data[i]['cwm_wages.other2']}</td>*/
/*                         <td class="totaldeductible"></td>*/
/*                         <td class="realwages"></td>*/
/*                         <td class="qm" style="background:#fff; display:none;"></td>*/
/*                     </tr>`);*/
/*             }*/
/* */
/*             html = $(html.join(''));*/
/*             */
/* */
/*             inTotal(html);*/
/*             $('#tfoot').show();*/
/*             $('#datalist').html(html);*/
/* */
/*             cs.getNodes([167]);*/
/*             var edit_statu = cs.getNodes([246],true);*/
/*             */
/*             check();*/
/*             if(edit_statu ){*/
/*                 changeMoney();*/
/*             }*/
/*             */
/*         }*/
/* */
/*         function inTotal(html){*/
/*              //基本部分合计*/
/*             var total = 0;*/
/*             html.find('.basetotal').each(function(index,ele){*/
/*                 $(this).siblings('.base').each(function(i,e){*/
/*                     total += parseFloat($(e).text().trim());*/
/*                 });*/
/* */
/*                 $(ele).text(total.toFixed(2));*/
/*                 total = 0;*/
/*             });*/
/* */
/*             //绩效部分合计*/
/*             total = 1;*/
/*             html.find('.performencetotal').each(function(index,ele){*/
/*                 $(this).siblings('.performence').each(function(i,e){*/
/*                     total *= parseFloat($(e).text().trim());*/
/*                 });*/
/* */
/*                 $(ele).text((total / 100).toFixed(2));*/
/*                 total = 1;*/
/*             });*/
/* */
/*             //应扣合计*/
/*             total = 0;*/
/*             html.find('.totaldeductible').each(function(index,ele){*/
/*                 $(this).siblings('.deductible').each(function(i,e){*/
/*                     total += parseFloat($(e).text().trim());*/
/*                 });*/
/* */
/*                 $(ele).text(total.toFixed(2));*/
/*                 total = 0;*/
/*             });*/
/* */
/*             //应发合计*/
/*              html.find('.totalpayable').each(function(index,ele){*/
/*                 total = eval($(this).siblings('.basetotal').text().trim() +'+'+ $(this).siblings('.performencetotal').text().trim() );   //+'+'+ $(this).siblings('.basicwage').text().trim()*/
/*                 $(this).siblings('.attendance').each(function(i,e){*/
/*                     total -= parseFloat($(e).text().trim());*/
/*                 });*/
/* */
/*                 $(ele).text(total.toFixed(2));*/
/*                 total = 0;*/
/*              });*/
/* */
/*             //实发工资*/
/*             html.find('.realwages').each(function(index,ele){*/
/*                 total = eval($(this).siblings('.totalpayable').text().trim() +'-'+ $(this).siblings('.totaldeductible').text().trim());*/
/* */
/*                 $(ele).text(total.toFixed(2));*/
/*              });*/
/* */
/*             //分栏合计*/
/*             total = 0;*/
/*             var rows = [];*/
/*             html.each(function(i,e){*/
/*                 rows.push(this);*/
/*             });*/
/*             $('#tfoot td').not(':first').each(function(index,element){*/
/*                 for(var i in rows){*/
/*                     total += parseFloat($(rows[i].cells[index + 4]).text().trim());*/
/*                 }*/
/* 				if(index !=  $('#tfoot td').not(':first').length-1 && index != 9) {*/
/* 					$(element).text(total.toFixed(2) !="NaN"?total.toFixed(2):"");*/
/*                		total = 0;*/
/* 				}else if(index == 9){*/
/* 					 $(element).text((total / rows.length).toFixed(0)!="NaN"? (total / rows.length).toFixed(0) : "");*/
/* 					 total = 0;*/
/* 				}*/
/*                 */
/*             });*/
/*         }*/
/* */
/*         //修改金额*/
/*         function changeMoney(){*/
/*             $('#datalist [field]').dblclick(function(){*/
/*             	var status = $(this).parents('tr').find('td').eq(0).attr('data-status');*/
/*             	if(status == 0) {*/
/*             		$(this).html('<input type="number" style="width:50px;" class="pos-rel"/>');*/
/* 	                $(this).find('input.pos-rel').focus();*/
/* 	                saveChange();*/
/*             	}*/
/*             });*/
/*         }*/
/* */
/*         //失去焦点保存数据*/
/*         function saveChange(){*/
/*             $('input.pos-rel').blur(function(){*/
/*                 var it = $(this);*/
/* */
/*                 var money = it.val().trim() ? it.val().trim() : '0';*/
/* */
/*                 if(!money.match(/^\d+$/)){*/
/*                     ykp.prompt('请输入数字');*/
/*                     return;*/
/*                 }*/
/* */
/*                 var postdata = {};*/
/*                 postdata['id'] = it.parents('tr').attr('data-id');*/
/*                 postdata['employee_id'] = it.parent().siblings('.emp_id').attr('employee-id');*/
/* */
/*                 postdata[it.parent().attr('field')] = money;*/
/* */
/*                 it.parent().siblings('[field]').each(function(i,e){*/
/*                     postdata[$(this).attr('field')] = $(this).text().trim();*/
/*                 });*/
/* */
/*                 it.parent().html(money);*/
/* */
/*                 ykp.doAjax({*/
/*                     url:'/api/api_finance/wagesEdit',*/
/*                     method:'post',*/
/*                     data:postdata,*/
/*                     success:function(res){*/
/*                         initData();*/
/*                     }*/
/*                 });*/
/*             });*/
/*         }*/
/* */
/*         //复核*/
/*         function check(){*/
/*             $('.checked').click(function(){*/
/*                 var it =$(this);*/
/*                 var postdata = {};*/
/* 				postdata['id'] = $(this).parents('tr').attr('data-id');*/
/* 		        postdata['is_sign'] =  $(this).parent().attr('data-status') == 1 ? 0 : 1; */
/* 				layui.use(['layer'],function() {*/
/* 					var layer = layui.layer;*/
/* 					 layer.confirm(it.parent().attr('data-status') ==1 ? '确认取消复核吗？':'确认复核吗？', function(index){*/
/* 		                ykp.doAjax({*/
/* 		                    url:'/api/api_finance/weges_sh',*/
/* 		                    method:'post',*/
/* 		                    data:postdata,*/
/* 		                    success:function(res){*/
/* 		                        initData();*/
/* 		                    }*/
/* 		                });*/
/* 				        layer.close(index);*/
/* 				     });*/
/* 				})*/
/*                 */
/*             });*/
/*         }   */
/*     });*/
/* </script>*/
