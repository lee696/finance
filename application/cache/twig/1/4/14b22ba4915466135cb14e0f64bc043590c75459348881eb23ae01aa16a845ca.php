<?php

/* admin/login/404.html */
class __TwigTemplate_4df6f3ff5aab472e6da29cefa4696e5df7580c94a100c2866cb44d411d17990b extends Twig_Template
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
                background: #f5f5f5;
                /*background-size: cover;*/
            }

            .login {
                position: absolute;
\t\t\t    top: 0px;
\t\t\t    bottom: 0px;
\t\t\t    left: 0px;
\t\t\t    right: 0px;
\t\t\t    width: 700px;
\t\t\t    /* background: #fafafa; */
\t\t\t    color: #000;
\t\t\t    height: 400px;
\t\t\t    margin: auto;
\t\t\t    border: 1px solid #d7dde4;
\t\t\t    border-radius: 2px;
\t\t\t    -webkit-transition: 0.3s linear;
\t\t\t    transition: 0.3s linear;
\t\t\t    padding: 16px;
\t\t\t    background-size: inherit;
\t\t\t    /*background: url(/resource/adimin/assets/images/err.jpg);*/
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

           

            .btn {
                width: 100%;
            }
            #forget-password:hover{
                color:#000 !important;
            }
            .gohome{
            \tdisplay: inline-block;
\t\t\t    width: 167px;
\t\t\t    height: 80px;
\t\t\t    float: right;
\t\t\t    border: 0px;
\t\t\t    position: absolute;
\t\t\t    bottom: 45px;
\t\t\t    right: 106px;
            }
        </style>
    </head>

    <body>
        <div class=\"login  animated fadeInRight\" id=\"loginFrom\">
           \t<img src=\"/resource/adimin/assets/images/err.jpg\" width=\"100%\" height=\"90%\" />
           \t<a class=\"gohome\" style=\"display: inline-block;width: 100px; height: 100px; cursor: pointer;\"></a>
        </div>
    </body>
    <script src=\"/resource/adimin/assets/js/jquery-3.2.1.min.js\"></script>
    <script src=\"/resource/adimin/assets/js/ykp.js\"></script>
    <script>
\$(function () {
    
    ykp.loadJs(\"/resource/adimin/assets/js/src/bootbox.js\");
\t\$('.gohome').click(function() {
\t\tlocation.href = '/admin/';
\t})
 

    \$('.main-content-inner').css('height', \$(window).height() + 'px');
    \$('.main-content-inner').css('width', \$(window).width() + 'px')
})
    </script>";
    }

    public function getTemplateName()
    {
        return "admin/login/404.html";
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
/*                 background: #f5f5f5;*/
/*                 /*background-size: cover;*//* */
/*             }*/
/* */
/*             .login {*/
/*                 position: absolute;*/
/* 			    top: 0px;*/
/* 			    bottom: 0px;*/
/* 			    left: 0px;*/
/* 			    right: 0px;*/
/* 			    width: 700px;*/
/* 			    /* background: #fafafa; *//* */
/* 			    color: #000;*/
/* 			    height: 400px;*/
/* 			    margin: auto;*/
/* 			    border: 1px solid #d7dde4;*/
/* 			    border-radius: 2px;*/
/* 			    -webkit-transition: 0.3s linear;*/
/* 			    transition: 0.3s linear;*/
/* 			    padding: 16px;*/
/* 			    background-size: inherit;*/
/* 			    /*background: url(/resource/adimin/assets/images/err.jpg);*//* */
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
/*            */
/* */
/*             .btn {*/
/*                 width: 100%;*/
/*             }*/
/*             #forget-password:hover{*/
/*                 color:#000 !important;*/
/*             }*/
/*             .gohome{*/
/*             	display: inline-block;*/
/* 			    width: 167px;*/
/* 			    height: 80px;*/
/* 			    float: right;*/
/* 			    border: 0px;*/
/* 			    position: absolute;*/
/* 			    bottom: 45px;*/
/* 			    right: 106px;*/
/*             }*/
/*         </style>*/
/*     </head>*/
/* */
/*     <body>*/
/*         <div class="login  animated fadeInRight" id="loginFrom">*/
/*            	<img src="/resource/adimin/assets/images/err.jpg" width="100%" height="90%" />*/
/*            	<a class="gohome" style="display: inline-block;width: 100px; height: 100px; cursor: pointer;"></a>*/
/*         </div>*/
/*     </body>*/
/*     <script src="/resource/adimin/assets/js/jquery-3.2.1.min.js"></script>*/
/*     <script src="/resource/adimin/assets/js/ykp.js"></script>*/
/*     <script>*/
/* $(function () {*/
/*     */
/*     ykp.loadJs("/resource/adimin/assets/js/src/bootbox.js");*/
/* 	$('.gohome').click(function() {*/
/* 		location.href = '/admin/';*/
/* 	})*/
/*  */
/* */
/*     $('.main-content-inner').css('height', $(window).height() + 'px');*/
/*     $('.main-content-inner').css('width', $(window).width() + 'px')*/
/* })*/
/*     </script>*/
