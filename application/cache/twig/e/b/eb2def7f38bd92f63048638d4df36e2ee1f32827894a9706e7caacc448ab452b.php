<?php

/* admin/map.html */
class __TwigTemplate_0ba128bf9b31a0fc210e17f392e3d2c273ddbdf3f4fec28b24013ed0458c4265 extends Twig_Template
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
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>客户地理展示</title>
\t<link rel=\"stylesheet\" href=\"http://cache.amap.com/lbs/static/main1119.css\"/>
\t<script src=\"/resource/adimin/components/jquery.1x/dist/jquery.js\"></script>
\t<script src=\"/resource/adimin/assets/js/ykp.js\"></script>
    <script src=\"http://cache.amap.com/lbs/static/es5.min.js\"></script>
    
</head>

<body>
<div id=\"container\"></div>\t
</body>
<script src=\"http://webapi.amap.com/maps?v=1.3&key=5c4a0d029c97c74f0c4683b6854f7121&callback=init\"></script>
<script type=\"text/javascript\">
\tfunction init(){

\t\tvar latitude = getParameter('lat')||'39';
        var longitude = getParameter('lng')||'116';
        var customerId = getParameter('cId')||'';
        var map = new AMap.Map('container', {
        \tresizeEnable: true,
            center: [longitude, latitude],
            zoom: 6
        });
        map.plugin([\"AMap.ToolBar\"], function() {
            map.addControl(new AMap.ToolBar());
        });
       getLocation();
        function getLocation(){
            ykp.doAjax({
                url: '/api/api_customer/point_one',
                method: 'get',
                async: true,
                data:{
                    customer_id:customerId
\t\t\t\t},
                success: function(res) {
                    var data = res.data;
                    addMarker(data);
                }
            });
        };
        /**
         * 公共方法定义
         * @example: http://xxx.com/a.do?productCode=P001
         * @Result:  C.getParameter('productCode')  // 'P001'
         */
        function getParameter (param) {
            var reg = new RegExp('[&,?,&amp;]' + param + '=([^\\\\&]*)', 'i');
            var hrefStr = location.search;
            hrefStr = decodeURIComponent(decodeURIComponent(hrefStr));
            var value = reg.exec(hrefStr);
            return value ? value[1] : '';
        };
        function addMarker(data) {
            var content,marker;
        //加标签1
        for(var i in data){
            //加标签1
          //content= \"<div class = 'taiwan'>\"+data[i].name+\"</div>\";
          var icon = \"http://webapi.amap.com/theme/v1.3/markers/n/mark_b.png\";
          if(latitude==data[i].location_lat&&longitude==data[i].location_lng){
          \ticon = \"http://webapi.amap.com/theme/v1.3/markers/n/mark_r.png\";
          }
            marker = new AMap.Marker({
                icon: icon,
                position: [data[i].location_lng,data[i].location_lat]/*,
                content: data[i].name*/
            });
            //处理标签点击
            marker.on('click',function(e){

                marker.markOnAMAP({
                    name:data[i].name,
                    position:marker.getPosition()
                })
            });
             // 设置鼠标划过点标记显示的文字提示
            marker.setTitle(data[i].address);

            // 设置label标签
            marker.setLabel({//label默认蓝框白底左上角显示，样式className为：amap-marker-label
                offset: new AMap.Pixel(20, 20),//修改label相对于maker的位置
                content: data[i].name
            });
            marker.setMap(map);
        }

    };
    //addMarker();

    };
</script>
</html>
";
    }

    public function getTemplateName()
    {
        return "admin/map.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>客户地理展示</title>*/
/* 	<link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>*/
/* 	<script src="/resource/adimin/components/jquery.1x/dist/jquery.js"></script>*/
/* 	<script src="/resource/adimin/assets/js/ykp.js"></script>*/
/*     <script src="http://cache.amap.com/lbs/static/es5.min.js"></script>*/
/*     */
/* </head>*/
/* */
/* <body>*/
/* <div id="container"></div>	*/
/* </body>*/
/* <script src="http://webapi.amap.com/maps?v=1.3&key=5c4a0d029c97c74f0c4683b6854f7121&callback=init"></script>*/
/* <script type="text/javascript">*/
/* 	function init(){*/
/* */
/* 		var latitude = getParameter('lat')||'39';*/
/*         var longitude = getParameter('lng')||'116';*/
/*         var customerId = getParameter('cId')||'';*/
/*         var map = new AMap.Map('container', {*/
/*         	resizeEnable: true,*/
/*             center: [longitude, latitude],*/
/*             zoom: 6*/
/*         });*/
/*         map.plugin(["AMap.ToolBar"], function() {*/
/*             map.addControl(new AMap.ToolBar());*/
/*         });*/
/*        getLocation();*/
/*         function getLocation(){*/
/*             ykp.doAjax({*/
/*                 url: '/api/api_customer/point_one',*/
/*                 method: 'get',*/
/*                 async: true,*/
/*                 data:{*/
/*                     customer_id:customerId*/
/* 				},*/
/*                 success: function(res) {*/
/*                     var data = res.data;*/
/*                     addMarker(data);*/
/*                 }*/
/*             });*/
/*         };*/
/*         /***/
/*          * 公共方法定义*/
/*          * @example: http://xxx.com/a.do?productCode=P001*/
/*          * @Result:  C.getParameter('productCode')  // 'P001'*/
/*          *//* */
/*         function getParameter (param) {*/
/*             var reg = new RegExp('[&,?,&amp;]' + param + '=([^\\&]*)', 'i');*/
/*             var hrefStr = location.search;*/
/*             hrefStr = decodeURIComponent(decodeURIComponent(hrefStr));*/
/*             var value = reg.exec(hrefStr);*/
/*             return value ? value[1] : '';*/
/*         };*/
/*         function addMarker(data) {*/
/*             var content,marker;*/
/*         //加标签1*/
/*         for(var i in data){*/
/*             //加标签1*/
/*           //content= "<div class = 'taiwan'>"+data[i].name+"</div>";*/
/*           var icon = "http://webapi.amap.com/theme/v1.3/markers/n/mark_b.png";*/
/*           if(latitude==data[i].location_lat&&longitude==data[i].location_lng){*/
/*           	icon = "http://webapi.amap.com/theme/v1.3/markers/n/mark_r.png";*/
/*           }*/
/*             marker = new AMap.Marker({*/
/*                 icon: icon,*/
/*                 position: [data[i].location_lng,data[i].location_lat]/*,*/
/*                 content: data[i].name*//* */
/*             });*/
/*             //处理标签点击*/
/*             marker.on('click',function(e){*/
/* */
/*                 marker.markOnAMAP({*/
/*                     name:data[i].name,*/
/*                     position:marker.getPosition()*/
/*                 })*/
/*             });*/
/*              // 设置鼠标划过点标记显示的文字提示*/
/*             marker.setTitle(data[i].address);*/
/* */
/*             // 设置label标签*/
/*             marker.setLabel({//label默认蓝框白底左上角显示，样式className为：amap-marker-label*/
/*                 offset: new AMap.Pixel(20, 20),//修改label相对于maker的位置*/
/*                 content: data[i].name*/
/*             });*/
/*             marker.setMap(map);*/
/*         }*/
/* */
/*     };*/
/*     //addMarker();*/
/* */
/*     };*/
/* </script>*/
/* </html>*/
/* */
