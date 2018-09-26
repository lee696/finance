<?php

/* admin/login/login.html */
class __TwigTemplate_4315ba1c6eab1c0eb28276f0821bd24b469b9d47aab1f4e72e69de2cf6ef91da extends Twig_Template
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
        <title>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo " - 管到位智慧管理系统</title>

        <meta name=\"description\" content=\"overview &amp; stats\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />

        <!-- bootstrap & fontawesome -->
        <link rel=\"stylesheet\" href=\"/resource/adimin/assets/css/main/public.css\" />
        <link rel=\"stylesheet\" href=\"/resource/adimin/assets/css/bootstrap.css\" />
        <link rel=\"stylesheet\" href=\"/resource/adimin/components/font-awesome/css/font-awesome.css\" />

        <style>
            body {
                background: url(/resource/adimin/images/background.jpg) no-repeat;
                /*background-size: cover;*/
            }

            .login {
                margin: 150px auto 0 auto;
                min-height: 420px;
                max-width: 420px;
                padding: 40px;
                background-color: #ffffff;
                margin-left: auto;
                margin-right: auto;
                border-radius: 4px;
                box-sizing: border-box;

            }

            .title {
                margin: 10px 0 30px -58px;
                padding: 18px 10px 18px 60px;
                background: lightskyblue;
                color: #fff;
                font-size: 16px;
                position: relative;
                width: 438px;
            }

            .title:before {
                position: absolute;
                content: \"\";
                width: 0px;
                height: 0px;
                border: 10px solid;
                border-top-width: 9px;
                border-right-width: 9px;
                border-bottom-width: 9px;
                border-left-width: 9px;
                transform: rotateZ(360deg);
                border-color: black black transparent transparent;
                left: 0px;
                top: 100%;
            }

            .image {
                background: url(/resource/front/images/aiwrap.png);
                width: 18px;
                height: 10px;
                margin: 0 0 20px -58px;
                position: relative;
            }

            .btn {
                width: 100%;
            }
            #forget-password:hover{
                color:#000 !important;
            }
        </style>
    </head>

    <body>
        <div class=\"login  animated fadeInRight\" id=\"loginFrom\">
            <div class=\"title\">管到位 <span style=\"width: 5px;height: 5px;background: #fff;border-radius: 50%;display:inline-block ;position:relative;top: -2px\"> </span> 智慧管理系统</div>
            <!--<div class=\"image\"></div>-->

            <form class=\"m-t\" role=\"form\" action=\"\">
                <div class=\"form-group\" style=\"margin-bottom: 20px; height: 50px;\">
                    <input type=\"text\" id=\"username\" class=\"form-control\" placeholder=\"用户名\" required=\"true\" validate=\"required\" msg=\"用户名不能为空！\" style=\" height: 50px;\">
                </div>
                <div class=\"form-group\" style=\"margin-bottom: 5px;\">
                    <input type=\"password\" id=\"password\" class=\"form-control\" placeholder=\"密码\" required=\"true\" validate=\"password\" msg=\"请正确输入密码\" style=\" height: 50px;\">
                </div>
                <div style=\"text-align:right;padding:5px;margin-bottom:30px;\">
                    <a href=\"javascript:;\" style=\"text-decoration:underline;\" id=\"forget-password\">忘记密码</a>
                </div>
                <button type=\"button\" id=\"login\" class=\"btn btn-primary block full-width m-b\" style=\"height:40px;font-size:18px;\">登 录</button>
            </form>
        </div>
    </body>
    <script src=\"/resource/adimin/assets/js/jquery-3.2.1.min.js\"></script>
    <script src=\"/resource/adimin/assets/js/ykp.js\"></script>
    <script>
\$(function () {
    login();
    ykp.loadJs(\"/resource/adimin/assets/js/src/bootbox.js\");
    forget_passwrod();

    //忘记密码  弹出提示框
    function forget_passwrod() {
        \$('#forget-password').click(function () {
            ykp.prompt('请联系管理员！');
        });
    }

    function login() {

        \$(document).keydown(function (event) {
            if (event.keyCode == 13) {
                \$(\"#login\").trigger(\"click\");
            }
        });

        \$('#login').click(function () {
            userLogin();
        });
    }

    function userLogin() {
        var data = ykp.getFormData('#loginFrom', true);
        if (data.status) {
            ykp.doAjax({
                url: '/api/api_user/admin_login',
                data: {
                    username: data.username,
                    password: data.password
                },
                method: 'post',
                success: function (res) {
                    var login_data = res.data;
                    ykp.setCookie('login_token', login_data['login_token']);
                    ykp.setCookie('loginTime', Date.now());
                    get_user_nodes(login_data);
                }
            });
        }
    }

    //获取用户权限  并将权限和用户信息存入cookie中
    function get_user_nodes(login_data) {
        ykp.doAjax({
            async: false,
            url: '/api/api_role/get_user_nodes',
            method: \"get\",
            data: {},
            success: function (res) {
                ykp.clearLocalStorage();
                ykp.setCookie('nodes', res.data.nodes);

                ykp.setCookie('userinfo', JSON.stringify(login_data));
                ykp.setCookie('uid', login_data.id);
                ykp.setCookie('code', res.code);
                var getUrl = getUrlParam('url');
                var dataIndex = getUrlParam('i');
                var dataLi = getUrlParam('type');
                location.href = '/admin/?url=' + getUrl + '&i=' + dataIndex + '&type=' + dataLi;
            }
        })
    }

    function getUrlParam(name) {
        var reg = new RegExp(\"(^|&)\" + name + \"=([^&]*)(&|\$)\"); //构造一个含有目标参数的正则表达式对象
        var r = window.location.search.substr(1).match(reg); //匹配目标参数
        if (r != null)
            return unescape(r[2]);
        return null; //返回参数值
    }

    \$('.main-content-inner').css('height', \$(window).height() + 'px');
    \$('.main-content-inner').css('width', \$(window).width() + 'px')
})
    </script>";
    }

    public function getTemplateName()
    {
        return "admin/login/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/*     <head>*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />*/
/*         <meta charset="utf-8" />*/
/*         <title>{{title}} - 管到位智慧管理系统</title>*/
/* */
/*         <meta name="description" content="overview &amp; stats" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />*/
/* */
/*         <!-- bootstrap & fontawesome -->*/
/*         <link rel="stylesheet" href="/resource/adimin/assets/css/main/public.css" />*/
/*         <link rel="stylesheet" href="/resource/adimin/assets/css/bootstrap.css" />*/
/*         <link rel="stylesheet" href="/resource/adimin/components/font-awesome/css/font-awesome.css" />*/
/* */
/*         <style>*/
/*             body {*/
/*                 background: url(/resource/adimin/images/background.jpg) no-repeat;*/
/*                 /*background-size: cover;*//* */
/*             }*/
/* */
/*             .login {*/
/*                 margin: 150px auto 0 auto;*/
/*                 min-height: 420px;*/
/*                 max-width: 420px;*/
/*                 padding: 40px;*/
/*                 background-color: #ffffff;*/
/*                 margin-left: auto;*/
/*                 margin-right: auto;*/
/*                 border-radius: 4px;*/
/*                 box-sizing: border-box;*/
/* */
/*             }*/
/* */
/*             .title {*/
/*                 margin: 10px 0 30px -58px;*/
/*                 padding: 18px 10px 18px 60px;*/
/*                 background: lightskyblue;*/
/*                 color: #fff;*/
/*                 font-size: 16px;*/
/*                 position: relative;*/
/*                 width: 438px;*/
/*             }*/
/* */
/*             .title:before {*/
/*                 position: absolute;*/
/*                 content: "";*/
/*                 width: 0px;*/
/*                 height: 0px;*/
/*                 border: 10px solid;*/
/*                 border-top-width: 9px;*/
/*                 border-right-width: 9px;*/
/*                 border-bottom-width: 9px;*/
/*                 border-left-width: 9px;*/
/*                 transform: rotateZ(360deg);*/
/*                 border-color: black black transparent transparent;*/
/*                 left: 0px;*/
/*                 top: 100%;*/
/*             }*/
/* */
/*             .image {*/
/*                 background: url(/resource/front/images/aiwrap.png);*/
/*                 width: 18px;*/
/*                 height: 10px;*/
/*                 margin: 0 0 20px -58px;*/
/*                 position: relative;*/
/*             }*/
/* */
/*             .btn {*/
/*                 width: 100%;*/
/*             }*/
/*             #forget-password:hover{*/
/*                 color:#000 !important;*/
/*             }*/
/*         </style>*/
/*     </head>*/
/* */
/*     <body>*/
/*         <div class="login  animated fadeInRight" id="loginFrom">*/
/*             <div class="title">管到位 <span style="width: 5px;height: 5px;background: #fff;border-radius: 50%;display:inline-block ;position:relative;top: -2px"> </span> 智慧管理系统</div>*/
/*             <!--<div class="image"></div>-->*/
/* */
/*             <form class="m-t" role="form" action="">*/
/*                 <div class="form-group" style="margin-bottom: 20px; height: 50px;">*/
/*                     <input type="text" id="username" class="form-control" placeholder="用户名" required="true" validate="required" msg="用户名不能为空！" style=" height: 50px;">*/
/*                 </div>*/
/*                 <div class="form-group" style="margin-bottom: 5px;">*/
/*                     <input type="password" id="password" class="form-control" placeholder="密码" required="true" validate="password" msg="请正确输入密码" style=" height: 50px;">*/
/*                 </div>*/
/*                 <div style="text-align:right;padding:5px;margin-bottom:30px;">*/
/*                     <a href="javascript:;" style="text-decoration:underline;" id="forget-password">忘记密码</a>*/
/*                 </div>*/
/*                 <button type="button" id="login" class="btn btn-primary block full-width m-b" style="height:40px;font-size:18px;">登 录</button>*/
/*             </form>*/
/*         </div>*/
/*     </body>*/
/*     <script src="/resource/adimin/assets/js/jquery-3.2.1.min.js"></script>*/
/*     <script src="/resource/adimin/assets/js/ykp.js"></script>*/
/*     <script>*/
/* $(function () {*/
/*     login();*/
/*     ykp.loadJs("/resource/adimin/assets/js/src/bootbox.js");*/
/*     forget_passwrod();*/
/* */
/*     //忘记密码  弹出提示框*/
/*     function forget_passwrod() {*/
/*         $('#forget-password').click(function () {*/
/*             ykp.prompt('请联系管理员！');*/
/*         });*/
/*     }*/
/* */
/*     function login() {*/
/* */
/*         $(document).keydown(function (event) {*/
/*             if (event.keyCode == 13) {*/
/*                 $("#login").trigger("click");*/
/*             }*/
/*         });*/
/* */
/*         $('#login').click(function () {*/
/*             userLogin();*/
/*         });*/
/*     }*/
/* */
/*     function userLogin() {*/
/*         var data = ykp.getFormData('#loginFrom', true);*/
/*         if (data.status) {*/
/*             ykp.doAjax({*/
/*                 url: '/api/api_user/admin_login',*/
/*                 data: {*/
/*                     username: data.username,*/
/*                     password: data.password*/
/*                 },*/
/*                 method: 'post',*/
/*                 success: function (res) {*/
/*                     var login_data = res.data;*/
/*                     ykp.setCookie('login_token', login_data['login_token']);*/
/*                     ykp.setCookie('loginTime', Date.now());*/
/*                     get_user_nodes(login_data);*/
/*                 }*/
/*             });*/
/*         }*/
/*     }*/
/* */
/*     //获取用户权限  并将权限和用户信息存入cookie中*/
/*     function get_user_nodes(login_data) {*/
/*         ykp.doAjax({*/
/*             async: false,*/
/*             url: '/api/api_role/get_user_nodes',*/
/*             method: "get",*/
/*             data: {},*/
/*             success: function (res) {*/
/*                 ykp.clearLocalStorage();*/
/*                 ykp.setCookie('nodes', res.data.nodes);*/
/* */
/*                 ykp.setCookie('userinfo', JSON.stringify(login_data));*/
/*                 ykp.setCookie('uid', login_data.id);*/
/*                 ykp.setCookie('code', res.code);*/
/*                 var getUrl = getUrlParam('url');*/
/*                 var dataIndex = getUrlParam('i');*/
/*                 var dataLi = getUrlParam('type');*/
/*                 location.href = '/admin/?url=' + getUrl + '&i=' + dataIndex + '&type=' + dataLi;*/
/*             }*/
/*         })*/
/*     }*/
/* */
/*     function getUrlParam(name) {*/
/*         var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象*/
/*         var r = window.location.search.substr(1).match(reg); //匹配目标参数*/
/*         if (r != null)*/
/*             return unescape(r[2]);*/
/*         return null; //返回参数值*/
/*     }*/
/* */
/*     $('.main-content-inner').css('height', $(window).height() + 'px');*/
/*     $('.main-content-inner').css('width', $(window).width() + 'px')*/
/* })*/
/*     </script>*/