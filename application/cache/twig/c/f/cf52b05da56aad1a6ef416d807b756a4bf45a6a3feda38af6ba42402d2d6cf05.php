<?php

/* admin/header_nonav.html */
class __TwigTemplate_382dd8119f0154743625208cb113b347314ba5ef508defb6f55c10b2cdf699b0 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
        <meta charset=\"utf-8\" />
        <title>管到位·智慧管理一步到位</title>
        <meta name=\"description\" content=\"overview &amp; stats\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />

        <style type=\"text/css\">
            #mesNav li {
                cursor: pointer;
            }

            #mesNav li:hover>a {
                color: #00ffff;
            }

            #mesNav .active a {
                color: #00ffff;
            }

            .exit {
                cursor: pointer;
            }

            .nav-list{
                height: 500px!important

            }
            #messageCon .select2-container--default .select2-selection--single .select2-selection__rendered{
                color: #fff;
            }

            #navbar-container .select2-container--default .select2-selection--single .select2-selection__rendered{
                color:#fff !important;
            }
            #navbar-container .select2-container--default .select2-selection--single{
                border:1px solid #ddd !important;
            }
            #navbar-container .select2-container--default .select2-selection--single .select2-selection__arrow b{
                border-color: #ddd transparent transparent transparent !important;
            }
            .reqired_label{color:#f00;padding:0 5px;position:relative;top:3px;font-style: normal;font-size:14px;}
            #mesConBox ul li{
            \toverflow: hidden;
            }
        </style>
        <!-- bootstrap & fontawesome -->
        <link rel=\"stylesheet\" href=\"/resource/adimin/assets/css/font/iconfont.css\" />
        <link rel=\"stylesheet\" href=\"/resource/adimin/assets/css/main/public.css\" />
        <link rel=\"stylesheet\" href=\"/resource/adimin/assets/css/main/jquery.pagination.css\" />

        <link rel=\"stylesheet\" href=\"/resource/adimin/assets/css/main/customerDetail.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/resource/adimin/assets/css/platform/s_platform.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/resource/adimin/assets/css/auditing/s_auditing.css\">
        <link rel=\"stylesheet\" href=\"/resource/adimin/assets/css/bootstrap.css\" />
        <!--<link rel=\"stylesheet\" href=\"/resource/adimin/assets/css/bootstrap.min.css\"/>-->
        <!--    <link rel=\"stylesheet\" href=\"/resource/adimin/assets/css/main/jqPaginator.min.css\"/>-->
        <link rel=\"stylesheet\" href=\"/resource/adimin/components/font-awesome/css/font-awesome.css\" />
        <link rel=\"stylesheet\" href=\"/resource/adimin/components/_mod/jquery-ui/jquery-ui.css\" />
        <link rel=\"stylesheet\" href=\"/resource/adimin/components/_mod/jqgrid/ui.jqgrid.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"http://cdn.staticfile.org/twitter-bootstrap/3.1.1/css/bootstrap.min.css\" />
        <!-- page specific plugin styles -->
        <!-- text fonts -->
        <link rel=\"stylesheet\" href=\"/resource/adimin/assets/css/ace-fonts.css\" />

        <!-- ace styles -->
        <link rel=\"stylesheet\" href=\"/resource/adimin/assets/css/ace.css\" class=\"ace-main-stylesheet\" id=\"main-ace-style\" />

        <!--[if lte IE 9]>
<link rel=\"stylesheet\" href=\"/resource/adimin/assets/css/ace-part2.css\" class=\"ace-main-stylesheet\"/>
<![endif]-->
        <link rel=\"stylesheet\" href=\"/resource/adimin/assets/css/ace-skins.css\" />
        <link rel=\"stylesheet\" href=\"/resource/adimin/assets/css/ace-rtl.css\" />
        <link rel=\"stylesheet\" href=\"/resource/adimin/assets/css/bootstrap.css\" />
        <link rel=\"stylesheet\" href=\"/resource/adimin/components/font-awesome/css/font-awesome.css\" />

        <!-- page specific plugin styles -->
        <link rel=\"stylesheet\" href=\"/resource/adimin/components/bootstrap-duallistbox/dist/bootstrap-duallistbox.css\" />
        <link rel=\"stylesheet\" href=\"/resource/adimin/components/select2/dist/css/select2.css\" />
        <link rel=\"stylesheet\" href=\"/resource/adimin/components/bootstrap-multiselect/dist/css/bootstrap-multiselect.css\" />
        <!--[if lte IE 9]-->
        <link rel=\"stylesheet\" href=\"/resource/adimin/assets/css/ace-ie.css\" />
        <link rel=\"stylesheet\" href=\"/resource/adimin/components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css\" />
        <link rel=\"stylesheet\" href=\"/resource/adimin/components/bootstrap-timepicker/css/bootstrap-timepicker.css\" />
        <link rel=\"stylesheet\" href=\"/resource/adimin/components/bootstrap-daterangepicker/daterangepicker.css\" />
        <link rel=\"stylesheet\" href=\"/resource/adimin/components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css\" />
        <link rel=\"stylesheet\" href=\"/resource/adimin/components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css\" />

        <!--[endif]-->
        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src=\"/resource/adimin/assets/js/ace-extra.js\"></script>
        <link rel=\"stylesheet\" href=\"/resource/adimin/layui/css/layui.css\" />
        <script type=\"text/javascript\" src=\"/resource/adimin/layui/layui.js\" ></script>
        <!--[if lte IE 8]-->
        <script src=\"/resource/adimin/components/html5shiv/dist/html5shiv.min.js\"></script>
        <script src=\"/resource/adimin/components/respond/dest/respond.min.js\"></script>
        <!--[endif]-->
        ";
        // line 103
        $this->loadTemplate("admin/footer.html", "admin/header_nonav.html", 103)->display($context);
        // line 104
        echo "    </head>

    <body class=\"no-skin\" style=\"overflow: hidden;\">
        <!--width: calc(100% - 190px) !important;-->
        <div id=\"navbar\" class=\"navbar navbar-default ace-save-state\" style=\"width: 100%;\">
            <div class=\"navbar-container ace-save-state\" id=\"navbar-container\" style=\"background-color: #16aad8;height:50px;\">
                <div class=\"navbar-buttons navbar-header pull-right\" role=\"navigation\" style=\"background: transparent !important; \">
                    <div id='company_logo' class=\"logo\" style=\" position: fixed !important;left: -10px; top: 0;cursor:pointer;\" title=\"点击刷新首页\">
                        <img id=\"logo\" src=\"/resource/adimin/images/logo1.png\"/>
                        <span id=\"company\" style=\"height:50px; font-size: 16px;   line-height: 51px;padding-left:15px;font-family:'微软雅黑';color:#fff; \"></span>
                    </div>
                    <ul class=\"nav ace-nav\" style=\"padding-right:10px;\">
                        <li class=\"light-blue dropdown-modal\" id=\"noLogin\" style=\"display: none;line-height:normal; padding-top: 8px;\">
                            <a href=\"/admin/login\">
                                <span class=\"user-info\" style=\"color:#fff!important;\">
                                    <small>还未登录,请登录</small>
                                </span>
                            </a>
                        </li>
                        <li class=\"light-blue dropdown-modal\" id=\"loginIn\" style=\"display: none;line-height:normal;padding: 7px 0px;\">
                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" style=\"position: relative;right: -4px;bottom: 9px\">
                                <img class=\"nav-user-photo\" id=\"showprofile\" src=\"/resource/adimin/assets/avatars/user.jpg\" alt=\"Jason's Photo\" style=\"max-width:32px;margin-bottom: 0px;position: relative;left: 8px; border-radius:-1px; border: none;\" />

                                <span style=\"position: relative;left:7px;top:10px;margin-right: 4px;\">
                                    <span class=\"user-info\" style=\"line-height:20px;color:#fff;\">
                                        <small id=\"NickName\" style=\"font-size:16px;color:#fff;margin-bottom: 10px\">
                                        </small>
                                    </span>
                                </span>
                            </a>

                        </li>

                        </li>

                        <li class=\"purple dropdown-modal\" id=\"open\" style=\"line-height:normal;\">
                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" style=\"padding-top:7px ;left: 2px;\" href=\"#\">
                                <i class=\"fa fa-bell-o\" style=\"position: relative;top:13px;font-size:17px;color:#fff;  right: -5px\"></i>
                                <span style=\"display: none;\" class=\"badge badge-important\" style=\"position: relative;top: 0px;\">0</span>
                            </a>
                        </li>
                        <li style=\"\">
                            <label style=\"font-size:17px;margin-left: 18px; color:#fff;position: relative;top:6px;\" class=\"exit\"><i class=\"ace-icon fa fa-power-off\"></i></label>
                        </li>
                    </ul>
                </div>

                <!-- /section:basics/navbar.dropdown -->
            </div>

            <!-- /.navbar-container -->
            <div id=\"messageCon\" style=\"height: 100%;overflow:hidden;\">
                <!-- 关闭 -->
               <!-- <div class=\"widget-header widget-header-small\" id=\"close\" style=\"background: transparent;margin-top: 10px;right: 15px;border: none; text-align: right;\">
                   <i class=\"ace-icon fa fa-arrow-right icon-on-right pull-right\" style=\"color: #fff;\"> </i>
                \t&lt;!&ndash;<i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>&ndash;&gt;
                </div>-->
                <div class=\"col-sx-12 mesNav\" id=\"mesNav\" style=\"height:calc(100% - 51px);\">
                    <ul id=\"chooseNav\">
                        <li class=\"active\">
                            <a>任务(<span class=\"rw\"></span>)</a>
                        </li>
                        <li>
                            <a>消息(<span class=\"message\"></span>)</a>
                        </li>
                        <li>
                            <a>通知(<span class=\"tz\"></span>)</a>
                        </li>
                        <div class=\"line\"></div>
                    </ul>
                    <div id=\"mesConBox\" style=\"height:calc(100% - 50px);\">
                        <!-- 任务 -->
                        <div class=\"nav nav-list\" style=\"display:block;height:100%!important;overflow: auto;\">
                            <ul id=\"taskList\" style=\"height: 100%!important\">

                            </ul>
                        </div>

                        <!-- 消息 -->

                        <div class=\"nav nav-list\" style=\"display: none;position:relative;height:100% !important;\">
                            <div style=\"height: calc(100% - 110px);overflow:auto;\">
                                <ul class=\"\" id=\"msgList\" style=\"height:97%!important;width:100%;\">

                                </ul>
                            </div>
                            <div style=\"height:110px;width: 100%;padding:10px;\">
                                <div style=\"border:0px red solid;width: 100%;margin-bottom:5px;position:relative;\">
                                    <select style=\"background-color:#fff!important;width:245px;\" class=\"select2-hidden-accessible\" id=\"contacts\">
                                        <option value=\"\" style=\"color:#fff!important\">请选择</option>
                                    </select>
                                    <button class=\"btn send\" style=\"width:45px;padding:4px 0;margin-left:5px;\">
                                        发送
                                    </button>
                                </div>
                                <div>
                                    <textarea id=\"msg\" cols=\"20\" rows=\"3\" style=\"height:50px;padding:3px;background-color:#fff !important;width: 300px; display: block;line-height:23px;\" ></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- 通知 -->
                        <div class=\"nav nav-list\" style=\"display: none;overflow:auto; height: 100%!important\">
                            <ul id=\"infoList\" style=\"height: 100%!important\">


                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"navBarBox\" style=\"width:calc(100%-190px) !important;\">
                <div class=\"\" id=\"miniTool\" style=\"display: none; float: left;\">
                    <a><i class=\"icon-only ace-icon fa fa-align-justify\"></i></a>
                    <ul class=\"tooleUl\">
                        <li title=\"首页\">
                            <a href=\"#\"><i class=\"ace-icon fa fa-desktop\"></i></a>
                        </li>
                        <li title=\"审批\">
                            <a href=\"#\"><i class=\"fa fa-envelope\"></i></a>
                        </li>
                        <li title=\"报表\">
                            <a href=\"#\"><i class=\"ace-icon fa fa-line-chart\"></i></a>
                        </li>
                        <li title=\"系统设置\">
                            <a href=\"#\"><i class=\"ace-icon fa fa-cog bigger-130\"></i></a>
                        </li>
                    </ul>
                </div>
                <div class=\"sidebar-shortcuts\" id=\"sidebar-shortcuts\" style=\"width: 190px; overflow: hidden; float: left;\">
                    <!--左侧栏顶部按钮-->
                    <div class=\"sidebar-shortcuts-large\" id=\"sidebar-shortcuts-large\" style=\"height: 40px;\">
                        <div title=\"首页\" class=\"btn\" id=\"btn\" style=\"background: transparent !important; \">
                            <i class=\"ace-icon fa fa-desktop\"></i>
                        </div>
                        <div title=\"审批\" class=\"btn\" style=\"background: transparent !important;\">
                            <i class=\"fa fa-random\" style=\"font-size: 14px;\"></i>
                        </div>
                        <div title=\"报表\" class=\"btn \" style=\"background: transparent !important; \">
                            <i class=\"ace-icon fa fa-line-chart\"></i>
                        </div>
                        <!-- #section:basics/sidebar.layout.shortcuts -->
                        <div title=\"系统设置\" class=\"btn \" style=\"background: transparent !important;padding-right:10px;\">
                            <i class=\"ace-icon fa fa-cog bigger-130\"></i>
                        </div>
                        <div class=\"bottonLine\" style=\"left: 7.4375px;\"></div>
                    </div>
                </div>
                <div class=\"navBarTable\" style=\"float: left;\">
                    <div class=\"pageTable\">
                        <div class=\"navCon\">
                            <div class=\"page-tabs-content\">
                                <a data-url=\"home\" data-index=\"0-0\" data-li=\"0\" class=\"active\" id=\"home\">首页</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"pageleft\" style=\"float: left;\"><i class=\"fa fa-caret-left\"></i></div>
                    <div class=\"pageright\" style=\"float: left;\"><i class=\"fa fa-caret-right\"></i></div>
                </div>

                <div class=\"pageClose\" style=\"float: left;\">

                    <li style=\"text-align: center\" class=\"light-blue dropdown-modal\" id=\"loginIn\">
                        <a data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
                            关闭操作
                            <i class=\"ace-icon fa fa-caret-down\" style=\"color: #ccc !important;\"></i>
                        </a>
                        <ul style=\"min-width: 120px\" class=\"user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">
                            <li class=\"pageClose1\">
                                <a  href=\"#\">
                                    关闭所有操作
                                </a>
                            </li>
                            <li class=\"pageClose2\">
                                <a href=\"#\">
                                    关闭其他操作
                                </a>
                            </li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>

        ";
        // line 289
        $this->loadTemplate("admin/left.html", "admin/header_nonav.html", 289)->display($context);
        // line 290
        echo "        <script src=\"/resource/adimin/assets/js/src/public.js\"></script>
        <script src=\"/resource/adimin/components/select2/dist/js/select2.js\"></script>

        <script type=\"text/javascript\">
            cs.authority();//权限样式设置

//获取页面
            var content = [{
                    name: '客户服务',
                    id: '2',
                    url: '?url=customerService&i=0-1-0&type=1'
                },
                {
                    name: '服务期',
                    id: '3',
                    url: '?url=periodOfservice&i=0-1-1&type=1'
                },
                {
                    name: '收单',
                    id: '4',
                    url: '?url=getList&i=0-1-2&type=1'
                },
                {
                    name: '整单',
                    id: '5',
                    url: '?url=entire&i=0-1-3&type=1'
                },
                {
                    name: '记账',
                    id: '6',
                    url: '?url=account&i=0-1-4&type=1'
                },
                {
                    name: '客服',
                    id: '7',
                    url: '?url=customer&i=0-1-5&type=1'
                }, {
                    name: '报税',
                    id: '8',
                    url: '?url=tax&i=0-1-6&type=1'
                }, {
                    name: '送单',
                    id: '9',
                    url: '?url=single&i=0-1-7&type=1'
                }, {
                    name: '合作客户',
                    id: '10',
                    url: '?url=partner&i=0-2-0&type=1'
                }, {
                    name: '所有任务',
                    id: '11',
                    url: '?url=alltask&i=0-2-1&type=1'
                }, {
                    name: '客户公海',
                    id: '12',
                    url: '?url=seaOfclients&i=0-2-2&type=1'
                }, {
                    name: '线索',
                    id: '13',
                    url: '?url=accountSales&i=0-2-3&type=1'
                }, {
                    name: '联系记录',
                    id: '14',
                    url: '?url=contactRecord&i=0-2-4&type=1'
                }, {
                    name: '联系人',
                    id: '15',
                    url: '?url=contacts&i=0-2-5&type=1'
                }, {
                    name: '日志',
                    id: '16',
                    url: '?url=journal&i=0-2-6&type=1'
                }, {
                    name: '日程',
                    id: '17',
                    url: '?url=schedule&i=0-2-7&type=1'
                }, {
                    name: '商机',
                    id: '18',
                    url: '?url=opportunity&i=0-2-8&type=1'
                }, {
                    name: '拜访',
                    id: '19',
                    url: '?url=visit&i=0-2-9&type=1'
                }, {
                    name: '转介绍',
                    id: '20',
                    url: '?url=writeoff&i=0-2-10&type=1'
                }, {
                    name: '合同',
                    id: '21',
                    url: '?url=contracts&i=0-3-0&type=1'
                }, {
                    name: '合同授权',
                    id: '22',
                    url: '?url=contractAuthorization&i=0-3-1&type=1'
                }, {
                    name: '合同书',
                    id: '23',
                    url: '?url=contractBook&i=0-3-2&type=1'
                }, {
                    name: '入库',
                    id: '24',
                    url: '?url=depotStorage&i=0-4-0&type=1'
                }, {
                    name: '出库',
                    id: '25',
                    url: '?url=depotOutGo&i=0-4-1&type=1'
                }, {
                    name: '退单',
                    id: '26',
                    url: '?url=depotChargeback&i=0-4-2&type=1'
                }, {
                    name: '盘点',
                    id: '27',
                    url: '?url=depotCheck&i=0-4-3&type=1'
                }, {
                    name: '欠款记录',
                    id: '28',
                    url: '?url=lackOfrecord&i=0-5-0&type=1'
                }, {
                    name: '收款记录',
                    id: '29',
                    url: '?url=collectionRecord&i=0-5-1&type=1'
                }, {
                    name: '员工绩效',
                    id: '30',
                    url: '?url=employeePerformance&i=0-5-2&type=1'
                }, {
                    name: '员工工资',
                    id: '31',
                    url: '?url=wages&i=0-5-3&type=1'
                }, {
                    name: '支出',
                    id: '32',
                    url: '?url=expenditure&i=0-5-4&type=1'
                }, {
                    name: '借贷',
                    id: '33',
                    url: '?url=financeBorrow&i=0-5-5&type=1'
                }, {
                    name: '开票',
                    id: '34',
                    url: '?url=pf_billing&i=0-5-6&type=1'
                }, {
                    name: '知识库',
                    id: '35',
                    url: '?url=knowledge&i=0-6&type=0'
                },
                {
                    name: '收单审批',
                    id: '36',
                    url: '?url=auditGetList&i=1-0-0&type=1'
                }, {
                    name: '整单审批',
                    id: '37',
                    url: '?url=auditEntireSingle&i=1-0-1&type=1'
                }, {
                    name: '记账审批',
                    id: '38',
                    url: '?url=tally&i=1-0-2&type=1'
                }, {
                    name: '客服审批',
                    id: '39',
                    url: '?url=auditCustomerService&i=1-0-3&type=1'
                }, {
                    name: '报税审批',
                    id: '40',
                    url: '?url=auditTax&i=1-0-4&type=1'
                }, {
                    name: '送单审批',
                    id: '41',
                    url: '?url=auditing_single&i=1-0-5&type=1'
                }, {
                    name: '仓位审批',
                    id: '42',
                    url: '?url=auditPosition&i=1-1-0&type=1'
                }, {
                    name: '客户报表',
                    id: '43',
                    url: '?url=coustomer&i=2-0-0&type=1'
                }, {
                    name: '收单报表',
                    id: '44',
                    url: '?url=acquir_table&i=2-0-1&type=1'
                }, {
                    name: '整单报表',
                    id: '45',
                    url: '?url=entire_table&i=2-0-2&type=1'
                }, {
                    name: '记账报表',
                    id: '46',
                    url: '?url=accound_table&i=2-0-3&type=1'
                }, {
                    name: '客服报表',
                    id: '47',
                    url: '?url=customerTable&i=2-0-4&type=1'
                }, {
                    name: '报税报表',
                    id: '48',
                    url: '?url=tax_table&i=2-0-5&type=1'
                }, {
                    name: '送单报表',
                    id: '49',
                    url: '?url=single_table&i=2-0-6&type=1'
                }, {
                    name: '任务报表',
                    id: '50',
                    url: '?url=task_table&i=2-1-0&type=1'
                }, {
                    name: '公海报表',
                    id: '51',
                    url: '?url=high_seas_table&i=2-1-1&type=1'
                }, {
                    name: '线索报表',
                    id: '52',
                    url: '?url=clue_table&i=2-1-2&type=1'
                }, {
                    name: '联系人报表',
                    id: '53',
                    url: '?url=linkman_table&i=2-1-3&type=1'
                }, {
                    name: '联系记录报表',
                    id: '54',
                    url: '?url=linkman_record_table&i=2-1-4&type=1'
                }, {
                    name: '日志报表',
                    id: '55',
                    url: '?url=journal_table&i=2-1-5&type=1'
                }, {
                    name: '日程报表',
                    id: '56',
                    url: '?url=schedule_table&i=2-1-6&type=1'
                }, {
                    name: '商机报表',
                    id: '57',
                    url: '?url=business_opportunity_table&i=2-1-7&type=1'
                }, {
                    name: '拜访报表',
                    id: '58',
                    url: '?url=visit_table&i=2-1-8&type=1'
                }/*, {
                 name: '查账报表',
                 url: '?url=audit_table&i=2-1-9&type=1'
                 }*/, {
                    name: '欠款报表',
                    id: '60',
                    url: '?url=debt_table&i=2-2-0&type=1'
                }, {
                    name: '收款报表',
                    id: '61',
                    url: '?url=gathering_table&i=2-2-1&type=1'
                }, {
                    name: '支出报表',
                    id: '62',
                    url: '?url=expenditurereport&i=2-2-2&type=1'
                }, {
                    name: '绩效报表',
                    id: '63',
                    url: '?url=performance_table&i=2-2-3&type=1'
                }, {
                    name: '工资报表',
                    id: '64',
                    url: '?url=wages_table&i=2-2-4&type=1'
                }, {
                    name: '借贷报表',
                    id: '65',
                    url: '?url=toloan_table&i=2-2-5&type=1'
                }, {
                    name: '企业盈余报表',
                    id: '66',
                    url: '?url=surplus_table&i=2-2-6&type=1'
                }, {
                    name: '开票报表',
                    id: '67',
                    url: '?url=billingreport&i=2-1-10&type=1'
                }, {
                    name: '合同报表',
                    id: '68',
                    url: '?url=contract_table&i=2-3&type=0'
                }, {
                    name: '仓库报表',
                    id: '69',
                    url: '?url=warehoursereport&i=2-4&type=0'
                }, {
                    name: '部门员工',
                    id: '70',
                    url: '?url=staff&i=3-0&type=0'
                }, {
                    name: '角色权限',
                    id: '71',
                    url: '?url=jurisdiction&i=3-1&type=0'
                }, {
                    name: '仓库管理',
                    id: '72',
                    url: '?url=storehouse&i=3-2&type=0'
                }, {
                    name: '仓位管理',
                    id: '73',
                    url: '?url=warehouse&i=3-3&type=0'
                }, {
                    name: '行政区域',
                    id: '74',
                    url: '?url=administration&i=3-4&type=0'
                }, {
                    name: '标签管理',
                    id: '75',
                    url: '?url=label&i=3-5&type=0'
                }, {
                    name: '账户管理',
                    id: '76',
                    url: '?url=accountManage&i=3-6&type=0'
                }, {
                    name: '产品管理',
                    id: '77',
                    url: '?url=products&i=3-7&type=0'
                }, {
                    name: '流程管理',
                    id: '78',
                    url: '?url=procedure&i=3-8&type=0'
                }, {
                    name: '审批管理',
                    id: '79',
                    url: '?url=procedure&i=3-8&type=0'
                }, {
                    name: '备份管理',
                    id: '80',
                    url: '?url=backups&i=3-10&type=0'
                }, {
                    name: '企业信息',
                    id: '81',
                    url: '?url=companyInfo&i=3-11&type=0'
                }, {
                    name: '短信管理',
                    id: '82',
                    url: '?url=companyInfo&i=3-12&type=0'
                }, {
                    name: '付费管理',
                    id: '83',
                    url: '?url=companyInfo&i=3-13&type=0'
                }
            ];

            getEmple(\".page\");
            function getEmple(el) {
                var option = '', nodes;
                \$(el).select2({
                    allowClear: true
                });
                if (!ykp.getCookie('nodes')) {
                    return;
                } else {
                    nodes = ykp.getCookie('nodes').split(',');
                }
                ;
                for (var i in content) {
                    if (nodes && \$.inArray(content[i].id, nodes) != -1) {
                        option += '<option value=\"' + content[i].url + '\">' + content[i].name + '</option>';
                    }
                }
                ;
                \$(el).append(option);
            }


//退出登录
            \$('.exit').click(function () {
                ykp.prompt('退出成功');
                ykp.setCookie('uid', '');
                ykp.setCookie('code', '');
                ykp.setCookie('ci_session', '');
                ykp.setCookie('userinfo', '');
                ykp.setCookie('login_token', '');
                sessionStorage.setItem('userinfo', '');
                window.location = '/admin/logout';
            })

//页面跳转
            function skPage(urls) {
                var url_ = urls.split('&')[0].split('=')[1];
                \$('#navBox #nav-list li').find('li[data-url\$=\"' + url_ + '\"]').click();
            }


            \$(\".page\").change(function () {
                var url_ = \$(this).val();
                if (url_ == '') {
                    ykp.prompt(\"请先选择需要查询的页面\");
                    return;
                }
                skPage(url_);
//cs.skipPage(url_);
//window.location = url;

            });

            \$('#company_logo').click(function () {
                location.href = '/admin';
            });

        </script>";
    }

    public function getTemplateName()
    {
        return "admin/header_nonav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 290,  312 => 289,  125 => 104,  123 => 103,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/*     <head>*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />*/
/*         <meta charset="utf-8" />*/
/*         <title>管到位·智慧管理一步到位</title>*/
/*         <meta name="description" content="overview &amp; stats" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />*/
/* */
/*         <style type="text/css">*/
/*             #mesNav li {*/
/*                 cursor: pointer;*/
/*             }*/
/* */
/*             #mesNav li:hover>a {*/
/*                 color: #00ffff;*/
/*             }*/
/* */
/*             #mesNav .active a {*/
/*                 color: #00ffff;*/
/*             }*/
/* */
/*             .exit {*/
/*                 cursor: pointer;*/
/*             }*/
/* */
/*             .nav-list{*/
/*                 height: 500px!important*/
/* */
/*             }*/
/*             #messageCon .select2-container--default .select2-selection--single .select2-selection__rendered{*/
/*                 color: #fff;*/
/*             }*/
/* */
/*             #navbar-container .select2-container--default .select2-selection--single .select2-selection__rendered{*/
/*                 color:#fff !important;*/
/*             }*/
/*             #navbar-container .select2-container--default .select2-selection--single{*/
/*                 border:1px solid #ddd !important;*/
/*             }*/
/*             #navbar-container .select2-container--default .select2-selection--single .select2-selection__arrow b{*/
/*                 border-color: #ddd transparent transparent transparent !important;*/
/*             }*/
/*             .reqired_label{color:#f00;padding:0 5px;position:relative;top:3px;font-style: normal;font-size:14px;}*/
/*             #mesConBox ul li{*/
/*             	overflow: hidden;*/
/*             }*/
/*         </style>*/
/*         <!-- bootstrap & fontawesome -->*/
/*         <link rel="stylesheet" href="/resource/adimin/assets/css/font/iconfont.css" />*/
/*         <link rel="stylesheet" href="/resource/adimin/assets/css/main/public.css" />*/
/*         <link rel="stylesheet" href="/resource/adimin/assets/css/main/jquery.pagination.css" />*/
/* */
/*         <link rel="stylesheet" href="/resource/adimin/assets/css/main/customerDetail.css" />*/
/*         <link rel="stylesheet" type="text/css" href="/resource/adimin/assets/css/platform/s_platform.css">*/
/*         <link rel="stylesheet" type="text/css" href="/resource/adimin/assets/css/auditing/s_auditing.css">*/
/*         <link rel="stylesheet" href="/resource/adimin/assets/css/bootstrap.css" />*/
/*         <!--<link rel="stylesheet" href="/resource/adimin/assets/css/bootstrap.min.css"/>-->*/
/*         <!--    <link rel="stylesheet" href="/resource/adimin/assets/css/main/jqPaginator.min.css"/>-->*/
/*         <link rel="stylesheet" href="/resource/adimin/components/font-awesome/css/font-awesome.css" />*/
/*         <link rel="stylesheet" href="/resource/adimin/components/_mod/jquery-ui/jquery-ui.css" />*/
/*         <link rel="stylesheet" href="/resource/adimin/components/_mod/jqgrid/ui.jqgrid.css" />*/
/*         <link type="text/css" rel="stylesheet" href="http://cdn.staticfile.org/twitter-bootstrap/3.1.1/css/bootstrap.min.css" />*/
/*         <!-- page specific plugin styles -->*/
/*         <!-- text fonts -->*/
/*         <link rel="stylesheet" href="/resource/adimin/assets/css/ace-fonts.css" />*/
/* */
/*         <!-- ace styles -->*/
/*         <link rel="stylesheet" href="/resource/adimin/assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />*/
/* */
/*         <!--[if lte IE 9]>*/
/* <link rel="stylesheet" href="/resource/adimin/assets/css/ace-part2.css" class="ace-main-stylesheet"/>*/
/* <![endif]-->*/
/*         <link rel="stylesheet" href="/resource/adimin/assets/css/ace-skins.css" />*/
/*         <link rel="stylesheet" href="/resource/adimin/assets/css/ace-rtl.css" />*/
/*         <link rel="stylesheet" href="/resource/adimin/assets/css/bootstrap.css" />*/
/*         <link rel="stylesheet" href="/resource/adimin/components/font-awesome/css/font-awesome.css" />*/
/* */
/*         <!-- page specific plugin styles -->*/
/*         <link rel="stylesheet" href="/resource/adimin/components/bootstrap-duallistbox/dist/bootstrap-duallistbox.css" />*/
/*         <link rel="stylesheet" href="/resource/adimin/components/select2/dist/css/select2.css" />*/
/*         <link rel="stylesheet" href="/resource/adimin/components/bootstrap-multiselect/dist/css/bootstrap-multiselect.css" />*/
/*         <!--[if lte IE 9]-->*/
/*         <link rel="stylesheet" href="/resource/adimin/assets/css/ace-ie.css" />*/
/*         <link rel="stylesheet" href="/resource/adimin/components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" />*/
/*         <link rel="stylesheet" href="/resource/adimin/components/bootstrap-timepicker/css/bootstrap-timepicker.css" />*/
/*         <link rel="stylesheet" href="/resource/adimin/components/bootstrap-daterangepicker/daterangepicker.css" />*/
/*         <link rel="stylesheet" href="/resource/adimin/components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" />*/
/*         <link rel="stylesheet" href="/resource/adimin/components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css" />*/
/* */
/*         <!--[endif]-->*/
/*         <!-- inline styles related to this page -->*/
/* */
/*         <!-- ace settings handler -->*/
/*         <script src="/resource/adimin/assets/js/ace-extra.js"></script>*/
/*         <link rel="stylesheet" href="/resource/adimin/layui/css/layui.css" />*/
/*         <script type="text/javascript" src="/resource/adimin/layui/layui.js" ></script>*/
/*         <!--[if lte IE 8]-->*/
/*         <script src="/resource/adimin/components/html5shiv/dist/html5shiv.min.js"></script>*/
/*         <script src="/resource/adimin/components/respond/dest/respond.min.js"></script>*/
/*         <!--[endif]-->*/
/*         {% include 'admin/footer.html' %}*/
/*     </head>*/
/* */
/*     <body class="no-skin" style="overflow: hidden;">*/
/*         <!--width: calc(100% - 190px) !important;-->*/
/*         <div id="navbar" class="navbar navbar-default ace-save-state" style="width: 100%;">*/
/*             <div class="navbar-container ace-save-state" id="navbar-container" style="background-color: #16aad8;height:50px;">*/
/*                 <div class="navbar-buttons navbar-header pull-right" role="navigation" style="background: transparent !important; ">*/
/*                     <div id='company_logo' class="logo" style=" position: fixed !important;left: -10px; top: 0;cursor:pointer;" title="点击刷新首页">*/
/*                         <img id="logo" src="/resource/adimin/images/logo1.png"/>*/
/*                         <span id="company" style="height:50px; font-size: 16px;   line-height: 51px;padding-left:15px;font-family:'微软雅黑';color:#fff; "></span>*/
/*                     </div>*/
/*                     <ul class="nav ace-nav" style="padding-right:10px;">*/
/*                         <li class="light-blue dropdown-modal" id="noLogin" style="display: none;line-height:normal; padding-top: 8px;">*/
/*                             <a href="/admin/login">*/
/*                                 <span class="user-info" style="color:#fff!important;">*/
/*                                     <small>还未登录,请登录</small>*/
/*                                 </span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="light-blue dropdown-modal" id="loginIn" style="display: none;line-height:normal;padding: 7px 0px;">*/
/*                             <a data-toggle="dropdown" class="dropdown-toggle" style="position: relative;right: -4px;bottom: 9px">*/
/*                                 <img class="nav-user-photo" id="showprofile" src="/resource/adimin/assets/avatars/user.jpg" alt="Jason's Photo" style="max-width:32px;margin-bottom: 0px;position: relative;left: 8px; border-radius:-1px; border: none;" />*/
/* */
/*                                 <span style="position: relative;left:7px;top:10px;margin-right: 4px;">*/
/*                                     <span class="user-info" style="line-height:20px;color:#fff;">*/
/*                                         <small id="NickName" style="font-size:16px;color:#fff;margin-bottom: 10px">*/
/*                                         </small>*/
/*                                     </span>*/
/*                                 </span>*/
/*                             </a>*/
/* */
/*                         </li>*/
/* */
/*                         </li>*/
/* */
/*                         <li class="purple dropdown-modal" id="open" style="line-height:normal;">*/
/*                             <a data-toggle="dropdown" class="dropdown-toggle" style="padding-top:7px ;left: 2px;" href="#">*/
/*                                 <i class="fa fa-bell-o" style="position: relative;top:13px;font-size:17px;color:#fff;  right: -5px"></i>*/
/*                                 <span style="display: none;" class="badge badge-important" style="position: relative;top: 0px;">0</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li style="">*/
/*                             <label style="font-size:17px;margin-left: 18px; color:#fff;position: relative;top:6px;" class="exit"><i class="ace-icon fa fa-power-off"></i></label>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/* */
/*                 <!-- /section:basics/navbar.dropdown -->*/
/*             </div>*/
/* */
/*             <!-- /.navbar-container -->*/
/*             <div id="messageCon" style="height: 100%;overflow:hidden;">*/
/*                 <!-- 关闭 -->*/
/*                <!-- <div class="widget-header widget-header-small" id="close" style="background: transparent;margin-top: 10px;right: 15px;border: none; text-align: right;">*/
/*                    <i class="ace-icon fa fa-arrow-right icon-on-right pull-right" style="color: #fff;"> </i>*/
/*                 	&lt;!&ndash;<i class="fa fa-arrow-left" aria-hidden="true"></i>&ndash;&gt;*/
/*                 </div>-->*/
/*                 <div class="col-sx-12 mesNav" id="mesNav" style="height:calc(100% - 51px);">*/
/*                     <ul id="chooseNav">*/
/*                         <li class="active">*/
/*                             <a>任务(<span class="rw"></span>)</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a>消息(<span class="message"></span>)</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a>通知(<span class="tz"></span>)</a>*/
/*                         </li>*/
/*                         <div class="line"></div>*/
/*                     </ul>*/
/*                     <div id="mesConBox" style="height:calc(100% - 50px);">*/
/*                         <!-- 任务 -->*/
/*                         <div class="nav nav-list" style="display:block;height:100%!important;overflow: auto;">*/
/*                             <ul id="taskList" style="height: 100%!important">*/
/* */
/*                             </ul>*/
/*                         </div>*/
/* */
/*                         <!-- 消息 -->*/
/* */
/*                         <div class="nav nav-list" style="display: none;position:relative;height:100% !important;">*/
/*                             <div style="height: calc(100% - 110px);overflow:auto;">*/
/*                                 <ul class="" id="msgList" style="height:97%!important;width:100%;">*/
/* */
/*                                 </ul>*/
/*                             </div>*/
/*                             <div style="height:110px;width: 100%;padding:10px;">*/
/*                                 <div style="border:0px red solid;width: 100%;margin-bottom:5px;position:relative;">*/
/*                                     <select style="background-color:#fff!important;width:245px;" class="select2-hidden-accessible" id="contacts">*/
/*                                         <option value="" style="color:#fff!important">请选择</option>*/
/*                                     </select>*/
/*                                     <button class="btn send" style="width:45px;padding:4px 0;margin-left:5px;">*/
/*                                         发送*/
/*                                     </button>*/
/*                                 </div>*/
/*                                 <div>*/
/*                                     <textarea id="msg" cols="20" rows="3" style="height:50px;padding:3px;background-color:#fff !important;width: 300px; display: block;line-height:23px;" ></textarea>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <!-- 通知 -->*/
/*                         <div class="nav nav-list" style="display: none;overflow:auto; height: 100%!important">*/
/*                             <ul id="infoList" style="height: 100%!important">*/
/* */
/* */
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="navBarBox" style="width:calc(100%-190px) !important;">*/
/*                 <div class="" id="miniTool" style="display: none; float: left;">*/
/*                     <a><i class="icon-only ace-icon fa fa-align-justify"></i></a>*/
/*                     <ul class="tooleUl">*/
/*                         <li title="首页">*/
/*                             <a href="#"><i class="ace-icon fa fa-desktop"></i></a>*/
/*                         </li>*/
/*                         <li title="审批">*/
/*                             <a href="#"><i class="fa fa-envelope"></i></a>*/
/*                         </li>*/
/*                         <li title="报表">*/
/*                             <a href="#"><i class="ace-icon fa fa-line-chart"></i></a>*/
/*                         </li>*/
/*                         <li title="系统设置">*/
/*                             <a href="#"><i class="ace-icon fa fa-cog bigger-130"></i></a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="sidebar-shortcuts" id="sidebar-shortcuts" style="width: 190px; overflow: hidden; float: left;">*/
/*                     <!--左侧栏顶部按钮-->*/
/*                     <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large" style="height: 40px;">*/
/*                         <div title="首页" class="btn" id="btn" style="background: transparent !important; ">*/
/*                             <i class="ace-icon fa fa-desktop"></i>*/
/*                         </div>*/
/*                         <div title="审批" class="btn" style="background: transparent !important;">*/
/*                             <i class="fa fa-random" style="font-size: 14px;"></i>*/
/*                         </div>*/
/*                         <div title="报表" class="btn " style="background: transparent !important; ">*/
/*                             <i class="ace-icon fa fa-line-chart"></i>*/
/*                         </div>*/
/*                         <!-- #section:basics/sidebar.layout.shortcuts -->*/
/*                         <div title="系统设置" class="btn " style="background: transparent !important;padding-right:10px;">*/
/*                             <i class="ace-icon fa fa-cog bigger-130"></i>*/
/*                         </div>*/
/*                         <div class="bottonLine" style="left: 7.4375px;"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="navBarTable" style="float: left;">*/
/*                     <div class="pageTable">*/
/*                         <div class="navCon">*/
/*                             <div class="page-tabs-content">*/
/*                                 <a data-url="home" data-index="0-0" data-li="0" class="active" id="home">首页</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="pageleft" style="float: left;"><i class="fa fa-caret-left"></i></div>*/
/*                     <div class="pageright" style="float: left;"><i class="fa fa-caret-right"></i></div>*/
/*                 </div>*/
/* */
/*                 <div class="pageClose" style="float: left;">*/
/* */
/*                     <li style="text-align: center" class="light-blue dropdown-modal" id="loginIn">*/
/*                         <a data-toggle="dropdown" href="#" class="dropdown-toggle">*/
/*                             关闭操作*/
/*                             <i class="ace-icon fa fa-caret-down" style="color: #ccc !important;"></i>*/
/*                         </a>*/
/*                         <ul style="min-width: 120px" class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">*/
/*                             <li class="pageClose1">*/
/*                                 <a  href="#">*/
/*                                     关闭所有操作*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="pageClose2">*/
/*                                 <a href="#">*/
/*                                     关闭其他操作*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% include 'admin/left.html' %}*/
/*         <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/*         <script src="/resource/adimin/components/select2/dist/js/select2.js"></script>*/
/* */
/*         <script type="text/javascript">*/
/*             cs.authority();//权限样式设置*/
/* */
/* //获取页面*/
/*             var content = [{*/
/*                     name: '客户服务',*/
/*                     id: '2',*/
/*                     url: '?url=customerService&i=0-1-0&type=1'*/
/*                 },*/
/*                 {*/
/*                     name: '服务期',*/
/*                     id: '3',*/
/*                     url: '?url=periodOfservice&i=0-1-1&type=1'*/
/*                 },*/
/*                 {*/
/*                     name: '收单',*/
/*                     id: '4',*/
/*                     url: '?url=getList&i=0-1-2&type=1'*/
/*                 },*/
/*                 {*/
/*                     name: '整单',*/
/*                     id: '5',*/
/*                     url: '?url=entire&i=0-1-3&type=1'*/
/*                 },*/
/*                 {*/
/*                     name: '记账',*/
/*                     id: '6',*/
/*                     url: '?url=account&i=0-1-4&type=1'*/
/*                 },*/
/*                 {*/
/*                     name: '客服',*/
/*                     id: '7',*/
/*                     url: '?url=customer&i=0-1-5&type=1'*/
/*                 }, {*/
/*                     name: '报税',*/
/*                     id: '8',*/
/*                     url: '?url=tax&i=0-1-6&type=1'*/
/*                 }, {*/
/*                     name: '送单',*/
/*                     id: '9',*/
/*                     url: '?url=single&i=0-1-7&type=1'*/
/*                 }, {*/
/*                     name: '合作客户',*/
/*                     id: '10',*/
/*                     url: '?url=partner&i=0-2-0&type=1'*/
/*                 }, {*/
/*                     name: '所有任务',*/
/*                     id: '11',*/
/*                     url: '?url=alltask&i=0-2-1&type=1'*/
/*                 }, {*/
/*                     name: '客户公海',*/
/*                     id: '12',*/
/*                     url: '?url=seaOfclients&i=0-2-2&type=1'*/
/*                 }, {*/
/*                     name: '线索',*/
/*                     id: '13',*/
/*                     url: '?url=accountSales&i=0-2-3&type=1'*/
/*                 }, {*/
/*                     name: '联系记录',*/
/*                     id: '14',*/
/*                     url: '?url=contactRecord&i=0-2-4&type=1'*/
/*                 }, {*/
/*                     name: '联系人',*/
/*                     id: '15',*/
/*                     url: '?url=contacts&i=0-2-5&type=1'*/
/*                 }, {*/
/*                     name: '日志',*/
/*                     id: '16',*/
/*                     url: '?url=journal&i=0-2-6&type=1'*/
/*                 }, {*/
/*                     name: '日程',*/
/*                     id: '17',*/
/*                     url: '?url=schedule&i=0-2-7&type=1'*/
/*                 }, {*/
/*                     name: '商机',*/
/*                     id: '18',*/
/*                     url: '?url=opportunity&i=0-2-8&type=1'*/
/*                 }, {*/
/*                     name: '拜访',*/
/*                     id: '19',*/
/*                     url: '?url=visit&i=0-2-9&type=1'*/
/*                 }, {*/
/*                     name: '转介绍',*/
/*                     id: '20',*/
/*                     url: '?url=writeoff&i=0-2-10&type=1'*/
/*                 }, {*/
/*                     name: '合同',*/
/*                     id: '21',*/
/*                     url: '?url=contracts&i=0-3-0&type=1'*/
/*                 }, {*/
/*                     name: '合同授权',*/
/*                     id: '22',*/
/*                     url: '?url=contractAuthorization&i=0-3-1&type=1'*/
/*                 }, {*/
/*                     name: '合同书',*/
/*                     id: '23',*/
/*                     url: '?url=contractBook&i=0-3-2&type=1'*/
/*                 }, {*/
/*                     name: '入库',*/
/*                     id: '24',*/
/*                     url: '?url=depotStorage&i=0-4-0&type=1'*/
/*                 }, {*/
/*                     name: '出库',*/
/*                     id: '25',*/
/*                     url: '?url=depotOutGo&i=0-4-1&type=1'*/
/*                 }, {*/
/*                     name: '退单',*/
/*                     id: '26',*/
/*                     url: '?url=depotChargeback&i=0-4-2&type=1'*/
/*                 }, {*/
/*                     name: '盘点',*/
/*                     id: '27',*/
/*                     url: '?url=depotCheck&i=0-4-3&type=1'*/
/*                 }, {*/
/*                     name: '欠款记录',*/
/*                     id: '28',*/
/*                     url: '?url=lackOfrecord&i=0-5-0&type=1'*/
/*                 }, {*/
/*                     name: '收款记录',*/
/*                     id: '29',*/
/*                     url: '?url=collectionRecord&i=0-5-1&type=1'*/
/*                 }, {*/
/*                     name: '员工绩效',*/
/*                     id: '30',*/
/*                     url: '?url=employeePerformance&i=0-5-2&type=1'*/
/*                 }, {*/
/*                     name: '员工工资',*/
/*                     id: '31',*/
/*                     url: '?url=wages&i=0-5-3&type=1'*/
/*                 }, {*/
/*                     name: '支出',*/
/*                     id: '32',*/
/*                     url: '?url=expenditure&i=0-5-4&type=1'*/
/*                 }, {*/
/*                     name: '借贷',*/
/*                     id: '33',*/
/*                     url: '?url=financeBorrow&i=0-5-5&type=1'*/
/*                 }, {*/
/*                     name: '开票',*/
/*                     id: '34',*/
/*                     url: '?url=pf_billing&i=0-5-6&type=1'*/
/*                 }, {*/
/*                     name: '知识库',*/
/*                     id: '35',*/
/*                     url: '?url=knowledge&i=0-6&type=0'*/
/*                 },*/
/*                 {*/
/*                     name: '收单审批',*/
/*                     id: '36',*/
/*                     url: '?url=auditGetList&i=1-0-0&type=1'*/
/*                 }, {*/
/*                     name: '整单审批',*/
/*                     id: '37',*/
/*                     url: '?url=auditEntireSingle&i=1-0-1&type=1'*/
/*                 }, {*/
/*                     name: '记账审批',*/
/*                     id: '38',*/
/*                     url: '?url=tally&i=1-0-2&type=1'*/
/*                 }, {*/
/*                     name: '客服审批',*/
/*                     id: '39',*/
/*                     url: '?url=auditCustomerService&i=1-0-3&type=1'*/
/*                 }, {*/
/*                     name: '报税审批',*/
/*                     id: '40',*/
/*                     url: '?url=auditTax&i=1-0-4&type=1'*/
/*                 }, {*/
/*                     name: '送单审批',*/
/*                     id: '41',*/
/*                     url: '?url=auditing_single&i=1-0-5&type=1'*/
/*                 }, {*/
/*                     name: '仓位审批',*/
/*                     id: '42',*/
/*                     url: '?url=auditPosition&i=1-1-0&type=1'*/
/*                 }, {*/
/*                     name: '客户报表',*/
/*                     id: '43',*/
/*                     url: '?url=coustomer&i=2-0-0&type=1'*/
/*                 }, {*/
/*                     name: '收单报表',*/
/*                     id: '44',*/
/*                     url: '?url=acquir_table&i=2-0-1&type=1'*/
/*                 }, {*/
/*                     name: '整单报表',*/
/*                     id: '45',*/
/*                     url: '?url=entire_table&i=2-0-2&type=1'*/
/*                 }, {*/
/*                     name: '记账报表',*/
/*                     id: '46',*/
/*                     url: '?url=accound_table&i=2-0-3&type=1'*/
/*                 }, {*/
/*                     name: '客服报表',*/
/*                     id: '47',*/
/*                     url: '?url=customerTable&i=2-0-4&type=1'*/
/*                 }, {*/
/*                     name: '报税报表',*/
/*                     id: '48',*/
/*                     url: '?url=tax_table&i=2-0-5&type=1'*/
/*                 }, {*/
/*                     name: '送单报表',*/
/*                     id: '49',*/
/*                     url: '?url=single_table&i=2-0-6&type=1'*/
/*                 }, {*/
/*                     name: '任务报表',*/
/*                     id: '50',*/
/*                     url: '?url=task_table&i=2-1-0&type=1'*/
/*                 }, {*/
/*                     name: '公海报表',*/
/*                     id: '51',*/
/*                     url: '?url=high_seas_table&i=2-1-1&type=1'*/
/*                 }, {*/
/*                     name: '线索报表',*/
/*                     id: '52',*/
/*                     url: '?url=clue_table&i=2-1-2&type=1'*/
/*                 }, {*/
/*                     name: '联系人报表',*/
/*                     id: '53',*/
/*                     url: '?url=linkman_table&i=2-1-3&type=1'*/
/*                 }, {*/
/*                     name: '联系记录报表',*/
/*                     id: '54',*/
/*                     url: '?url=linkman_record_table&i=2-1-4&type=1'*/
/*                 }, {*/
/*                     name: '日志报表',*/
/*                     id: '55',*/
/*                     url: '?url=journal_table&i=2-1-5&type=1'*/
/*                 }, {*/
/*                     name: '日程报表',*/
/*                     id: '56',*/
/*                     url: '?url=schedule_table&i=2-1-6&type=1'*/
/*                 }, {*/
/*                     name: '商机报表',*/
/*                     id: '57',*/
/*                     url: '?url=business_opportunity_table&i=2-1-7&type=1'*/
/*                 }, {*/
/*                     name: '拜访报表',*/
/*                     id: '58',*/
/*                     url: '?url=visit_table&i=2-1-8&type=1'*/
/*                 }/*, {*/
/*                  name: '查账报表',*/
/*                  url: '?url=audit_table&i=2-1-9&type=1'*/
/*                  }*//* , {*/
/*                     name: '欠款报表',*/
/*                     id: '60',*/
/*                     url: '?url=debt_table&i=2-2-0&type=1'*/
/*                 }, {*/
/*                     name: '收款报表',*/
/*                     id: '61',*/
/*                     url: '?url=gathering_table&i=2-2-1&type=1'*/
/*                 }, {*/
/*                     name: '支出报表',*/
/*                     id: '62',*/
/*                     url: '?url=expenditurereport&i=2-2-2&type=1'*/
/*                 }, {*/
/*                     name: '绩效报表',*/
/*                     id: '63',*/
/*                     url: '?url=performance_table&i=2-2-3&type=1'*/
/*                 }, {*/
/*                     name: '工资报表',*/
/*                     id: '64',*/
/*                     url: '?url=wages_table&i=2-2-4&type=1'*/
/*                 }, {*/
/*                     name: '借贷报表',*/
/*                     id: '65',*/
/*                     url: '?url=toloan_table&i=2-2-5&type=1'*/
/*                 }, {*/
/*                     name: '企业盈余报表',*/
/*                     id: '66',*/
/*                     url: '?url=surplus_table&i=2-2-6&type=1'*/
/*                 }, {*/
/*                     name: '开票报表',*/
/*                     id: '67',*/
/*                     url: '?url=billingreport&i=2-1-10&type=1'*/
/*                 }, {*/
/*                     name: '合同报表',*/
/*                     id: '68',*/
/*                     url: '?url=contract_table&i=2-3&type=0'*/
/*                 }, {*/
/*                     name: '仓库报表',*/
/*                     id: '69',*/
/*                     url: '?url=warehoursereport&i=2-4&type=0'*/
/*                 }, {*/
/*                     name: '部门员工',*/
/*                     id: '70',*/
/*                     url: '?url=staff&i=3-0&type=0'*/
/*                 }, {*/
/*                     name: '角色权限',*/
/*                     id: '71',*/
/*                     url: '?url=jurisdiction&i=3-1&type=0'*/
/*                 }, {*/
/*                     name: '仓库管理',*/
/*                     id: '72',*/
/*                     url: '?url=storehouse&i=3-2&type=0'*/
/*                 }, {*/
/*                     name: '仓位管理',*/
/*                     id: '73',*/
/*                     url: '?url=warehouse&i=3-3&type=0'*/
/*                 }, {*/
/*                     name: '行政区域',*/
/*                     id: '74',*/
/*                     url: '?url=administration&i=3-4&type=0'*/
/*                 }, {*/
/*                     name: '标签管理',*/
/*                     id: '75',*/
/*                     url: '?url=label&i=3-5&type=0'*/
/*                 }, {*/
/*                     name: '账户管理',*/
/*                     id: '76',*/
/*                     url: '?url=accountManage&i=3-6&type=0'*/
/*                 }, {*/
/*                     name: '产品管理',*/
/*                     id: '77',*/
/*                     url: '?url=products&i=3-7&type=0'*/
/*                 }, {*/
/*                     name: '流程管理',*/
/*                     id: '78',*/
/*                     url: '?url=procedure&i=3-8&type=0'*/
/*                 }, {*/
/*                     name: '审批管理',*/
/*                     id: '79',*/
/*                     url: '?url=procedure&i=3-8&type=0'*/
/*                 }, {*/
/*                     name: '备份管理',*/
/*                     id: '80',*/
/*                     url: '?url=backups&i=3-10&type=0'*/
/*                 }, {*/
/*                     name: '企业信息',*/
/*                     id: '81',*/
/*                     url: '?url=companyInfo&i=3-11&type=0'*/
/*                 }, {*/
/*                     name: '短信管理',*/
/*                     id: '82',*/
/*                     url: '?url=companyInfo&i=3-12&type=0'*/
/*                 }, {*/
/*                     name: '付费管理',*/
/*                     id: '83',*/
/*                     url: '?url=companyInfo&i=3-13&type=0'*/
/*                 }*/
/*             ];*/
/* */
/*             getEmple(".page");*/
/*             function getEmple(el) {*/
/*                 var option = '', nodes;*/
/*                 $(el).select2({*/
/*                     allowClear: true*/
/*                 });*/
/*                 if (!ykp.getCookie('nodes')) {*/
/*                     return;*/
/*                 } else {*/
/*                     nodes = ykp.getCookie('nodes').split(',');*/
/*                 }*/
/*                 ;*/
/*                 for (var i in content) {*/
/*                     if (nodes && $.inArray(content[i].id, nodes) != -1) {*/
/*                         option += '<option value="' + content[i].url + '">' + content[i].name + '</option>';*/
/*                     }*/
/*                 }*/
/*                 ;*/
/*                 $(el).append(option);*/
/*             }*/
/* */
/* */
/* //退出登录*/
/*             $('.exit').click(function () {*/
/*                 ykp.prompt('退出成功');*/
/*                 ykp.setCookie('uid', '');*/
/*                 ykp.setCookie('code', '');*/
/*                 ykp.setCookie('ci_session', '');*/
/*                 ykp.setCookie('userinfo', '');*/
/*                 ykp.setCookie('login_token', '');*/
/*                 sessionStorage.setItem('userinfo', '');*/
/*                 window.location = '/admin/logout';*/
/*             })*/
/* */
/* //页面跳转*/
/*             function skPage(urls) {*/
/*                 var url_ = urls.split('&')[0].split('=')[1];*/
/*                 $('#navBox #nav-list li').find('li[data-url$="' + url_ + '"]').click();*/
/*             }*/
/* */
/* */
/*             $(".page").change(function () {*/
/*                 var url_ = $(this).val();*/
/*                 if (url_ == '') {*/
/*                     ykp.prompt("请先选择需要查询的页面");*/
/*                     return;*/
/*                 }*/
/*                 skPage(url_);*/
/* //cs.skipPage(url_);*/
/* //window.location = url;*/
/* */
/*             });*/
/* */
/*             $('#company_logo').click(function () {*/
/*                 location.href = '/admin';*/
/*             });*/
/* */
/*         </script>*/
