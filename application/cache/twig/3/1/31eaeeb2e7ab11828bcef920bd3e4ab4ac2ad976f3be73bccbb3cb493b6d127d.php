<?php

/* admin/manage/companyInfo.html */
class __TwigTemplate_1ea20cc70f487b694d16819e6382b94c6ee34e2caf7b1a80abe1c7bd8f3a0b26 extends Twig_Template
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
    .companyInfo .c_items{position:relative;padding-left:148px;margin-top: 7px;min-height: 32px;}
    .companyInfo .c_items .items_tit{position:absolute;left:0;height:29px;line-height:32px;display: inline-block;text-align:right;width: 88px;font-size: 14px;color: #333;}
    .companyInfo .c_items .items_con{display:inline-block;width:100%;height:29px;line-height:29px;}
    #editInfor{font-size: 14px;color:#ff8c00;margin-left: 20px;cursor: pointer; }
    #templateBox .form-horizontal .form-group>div{width: 60%;}
    #templateBox .form-horizontal .form-group label{width: 131px;}
    .editable input{
        padding:4px;
        width:200px;
        border: 1px solid #f5f5f5;
    }
    .editable>span{
        line-height: 32px;
    }
    
</style>
<div class=\" widget-main\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <!-- <h3 class=\"header smaller lighter blue\">企业信息<span id=\"editInfor\">编辑</span></h3> -->
                <div class=\"row companyInfo\">
                    <div style=\"margin-top: 0;\" class=\"c_items\">
                        <span class=\"items_tit\">企业LOGO</span>
                        <span id=\"logo\" style=\"position:relative;\">
                            <span>
                                <input type=\"file\" id=\"upload\" disabled style=\"position: absolute;opacity: 0;left:-9999px;\">
                                <label class=\"\" for=\"upload\" style=\"margin-bottom:0;border:1px solid #000;line-height:100px;display: inline-block;width: 100px;height: 100px;cursor: pointer; text-align: center;\">
                                    <i class=\"fa fa-plus fa-2x\" aria-hidden=\"true\" style=\"position: relative;top: 5px;\"></i>
                                    
                                </label>
                            </span>
                        </span>
                        <button class=\"btn btn-info btn-sm _edit\" contentAuthority=\"234\" style=\"position: relative;top: 34px;right: -10px;\">编辑</button>
                        <button class=\"btn btn-info btn-sm _save\" style=\"display:none;position: relative;top: 34px;right: -10px;\">保存</button>
                    </div>
                    <div class=\"c_items\">
                        <span class=\"items_tit\">企业名称</span>
                        <sapn class=\"editable\" title=\"请联系管理员修改\">
                            <span field=\"name\">深圳税脉财务有限公司</span>
                            <input field=\"name\"  id=\"name\" style=\"display:none;\">
                        </sapn>
                    </div>
                    <div class=\"c_items\">
                        <span class=\"items_tit\">成立日期</span>
                        <sapn class=\"editable\">
                            <span field=\"build_time\">20170105</span>
                            <!--<input field=\"build_time\" style=\"display:none;\">-->
                            <div class=\"form_data\" style=\"display:none;\">
\t\t\t\t\t\t\t\t<div class=\"input-group\" style=\"display: inline-flex; width: 180px;\">
\t\t\t\t\t\t\t\t\t<input class=\"date-timepicker1 required\" field=\"build_time\"  class=\"form-control\" style=\"height: 30px; width: 170px;\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"width:30px;height:30px;\">
\t\t\t                            <i class=\"fa fa-clock-o bigger-110\" style=\"position:relative;right:3px;\"></i>
\t\t\t                        </span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                        </sapn>
                    </div>
                    <div class=\"c_items\">
                        <span class=\"items_tit\">联系地址</span>
                        <sapn class=\"editable\">
                            <span field=\"address\">深圳龙华新区东环一路天虹</span>
                            <input field=\"address\" style=\"display:none;\">
                        </sapn>
                    </div>
                    <div class=\"c_items\">
                        <span class=\"items_tit\">负责人</span>
                        <sapn class=\"editable\">
                            <span field=\"contact_user\">李辞</span>
                            <input field=\"contact_user\" style=\"display:none;\">
                        </sapn>
                    </div>
                    <div class=\"c_items\">
                        <span class=\"items_tit\">固定电话</span>
                        <sapn class=\"editable\">
                            <span field=\"tel\">0755-83488000</span>
                            <input field=\"tel\" style=\"display:none;\">
                        </sapn>
                    </div>
                    <div class=\"c_items\">
                        <span class=\"items_tit\">联系手机</span>
                        <sapn class=\"editable\">
                            <span field=\"phone\">18654856985</span>
                            <input field=\"phone\" style=\"display:none;\">
                        </sapn>
                    </div>
                    <div class=\"c_items\">
                        <span class=\"items_tit\">邮箱</span>
                        <sapn class=\"editable\">
                            <span field=\"email\">45646546@qq.com</span>
                            <input field=\"email\" style=\"display:none;\">
                        </sapn>
                    </div>
                    <div class=\"c_items\">
                        <span class=\"items_tit\">QQ</span>
                        <sapn class=\"editable\">
                            <span field=\"qq\">45646546</span>
                            <input field=\"qq\" style=\"display:none;\">
                        </sapn>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 104
        $this->loadTemplate("admin/mark.html", "admin/manage/companyInfo.html", 104)->display($context);
        // line 105
        echo "    </div>
<script src=\"/resource/adimin/assets/js/src/public.js\"></script>
<script>
    jQuery(function (\$) {
        cs.getNodes();
        
        //获取企业信息
        getCompany();
        function getCompany(){
            ykp.doAjax({
                url:'/api/api_company/com_info',
                method:'get',
                data:{},
                success:function(res){
                    var data = res.data;
                    \$('#logo img').show().attr('src',data.logo).siblings().hide();
                    if(data['logo'] != ''){
                        \$('#logo label').css('border','none');
                        \$('#logo i').hide();
                        \$('[for=\"upload\"]').find('img').remove();
                        \$('[for=\"upload\"]').append('<img src=\"'+ data['logo'] +'\" style=\"width:100px;height:100px;\"/>');
                    }

                    for(var i in data) {
                     \t\$('.editable span[field]').each(function(j) {
                     \t\tif(\$(this).attr('field') == i) {
                     \t\t\ti == 'build_time' ? (data[i] != '0' ? \$(this).text(cs.getNowTime(data[i])) : '') : \$(this).text(data[i]);
                     \t\t}
                     \t})
                    }
                }
            });
        }

        //图片上传
        uploadImg();
        function uploadImg(){
            \$('#upload').change(function(){
                var file = this.files[0];
                if(!file.type || !/\\.(jpg|png|)\$/.test(file.name) ){
                \tykp.prompt('请上传JPG、PNG格式的图片');
                \treturn false;
                }
                var fr = new FileReader();
                var postdata = {};
                if(!file){
                    return;     
                }

                fr.readAsDataURL(file);
                fr.onloadend = function(e){
                    var base64 = e.target.result;
                    postdata['name'] = file.name;
                    postdata['dir'] = 'log';
                    postdata['base64'] = base64.split(',')[1];

                    ykp.doAjax({
                        url:'/api/api_common/upload_img',
                        method:'post',
                        data:postdata,
                        success:function(res){
                            \$('#logo label').css('border','none');
                            \$('#logo i').hide();
                            \$('[for=\"upload\"]').find('img').remove();
                            \$('[for=\"upload\"]').append('<img src=\"'+ res.data.url +'\" style=\"width:100px;height:100px;\"/>');
                        }
                    });
                }
            });
        }

        //编辑企业信息
        editCompany();
        function editCompany(){
            \$('._edit').click(function(){
                \$(this).hide();
                var userinfo = JSON.parse(ykp.getCookie('userinfo'));
//              if(userinfo.id == 1){
//              \t\$('#name').prop('disabled',false);
//              }
                \$('#upload').prop('disabled',false);
                \$(this).siblings().show();
                var text = '';
                var flag = cs.getNodes([263],true);
                \$('.editable').each(function(i,e){
                    if(\$(this).find('input').attr('field') == 'name' && !flag){
                        return true;
                    }
                    text = \$(this).find('span').text().trim();
                    \$(this).find('span').eq(0).hide();
                    \$(this).find('input').show().val(text);
                    if(i == 1) {
                    \t\$(this).find('.form_data').show();
                    \tcs.timeplug();
                    }
                    text = '';
                });
            });
        }

        //保存企业信息
        saveCompany();
        function saveCompany(){
            \$('._save').click(function(){
                var it = \$(this);
                var postdata = {};
                \$('.editable input[field]').each(function(i,e){
                    if(\$(this).attr('field') == 'build_time'){
                        postdata[\$(this).attr('field')] = new Date(\$(this).val()) / 1000;
                        return true;
                    }
                    postdata[\$(this).attr('field')] = \$(this).val();
                });
                postdata['logo'] = \$('#logo img').attr('src') ? \$('#logo img').attr('src') : '';
                ykp.doAjax({
                    url:'/api/api_company/edit',
                    method:'post',
                    data:postdata,
                    success:function(res){
                        it.hide().siblings().show();
                        \$('#upload').prop('disabled',true);
                        var text = '';
                        \$('.editable').each(function(i,e){
                           
                            if(i == 1) {
                            \t\$(this).find('.form_data').hide();
                            \t \$(this).find('span').show();
                            }else {
                            \t text = \$(this).find('input').hide().val().trim();
                            \t\$(this).find('span').show();
                            }
                            text = '';
                        });
                        getCompany();
                    }
                });
            });
        }
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "admin/manage/companyInfo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 105,  124 => 104,  19 => 1,);
    }
}
/* <style>*/
/*     .companyInfo .c_items{position:relative;padding-left:148px;margin-top: 7px;min-height: 32px;}*/
/*     .companyInfo .c_items .items_tit{position:absolute;left:0;height:29px;line-height:32px;display: inline-block;text-align:right;width: 88px;font-size: 14px;color: #333;}*/
/*     .companyInfo .c_items .items_con{display:inline-block;width:100%;height:29px;line-height:29px;}*/
/*     #editInfor{font-size: 14px;color:#ff8c00;margin-left: 20px;cursor: pointer; }*/
/*     #templateBox .form-horizontal .form-group>div{width: 60%;}*/
/*     #templateBox .form-horizontal .form-group label{width: 131px;}*/
/*     .editable input{*/
/*         padding:4px;*/
/*         width:200px;*/
/*         border: 1px solid #f5f5f5;*/
/*     }*/
/*     .editable>span{*/
/*         line-height: 32px;*/
/*     }*/
/*     */
/* </style>*/
/* <div class=" widget-main">*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <!-- <h3 class="header smaller lighter blue">企业信息<span id="editInfor">编辑</span></h3> -->*/
/*                 <div class="row companyInfo">*/
/*                     <div style="margin-top: 0;" class="c_items">*/
/*                         <span class="items_tit">企业LOGO</span>*/
/*                         <span id="logo" style="position:relative;">*/
/*                             <span>*/
/*                                 <input type="file" id="upload" disabled style="position: absolute;opacity: 0;left:-9999px;">*/
/*                                 <label class="" for="upload" style="margin-bottom:0;border:1px solid #000;line-height:100px;display: inline-block;width: 100px;height: 100px;cursor: pointer; text-align: center;">*/
/*                                     <i class="fa fa-plus fa-2x" aria-hidden="true" style="position: relative;top: 5px;"></i>*/
/*                                     */
/*                                 </label>*/
/*                             </span>*/
/*                         </span>*/
/*                         <button class="btn btn-info btn-sm _edit" contentAuthority="234" style="position: relative;top: 34px;right: -10px;">编辑</button>*/
/*                         <button class="btn btn-info btn-sm _save" style="display:none;position: relative;top: 34px;right: -10px;">保存</button>*/
/*                     </div>*/
/*                     <div class="c_items">*/
/*                         <span class="items_tit">企业名称</span>*/
/*                         <sapn class="editable" title="请联系管理员修改">*/
/*                             <span field="name">深圳税脉财务有限公司</span>*/
/*                             <input field="name"  id="name" style="display:none;">*/
/*                         </sapn>*/
/*                     </div>*/
/*                     <div class="c_items">*/
/*                         <span class="items_tit">成立日期</span>*/
/*                         <sapn class="editable">*/
/*                             <span field="build_time">20170105</span>*/
/*                             <!--<input field="build_time" style="display:none;">-->*/
/*                             <div class="form_data" style="display:none;">*/
/* 								<div class="input-group" style="display: inline-flex; width: 180px;">*/
/* 									<input class="date-timepicker1 required" field="build_time"  class="form-control" style="height: 30px; width: 170px;">*/
/* 									<span class="input-group-addon" style="width:30px;height:30px;">*/
/* 			                            <i class="fa fa-clock-o bigger-110" style="position:relative;right:3px;"></i>*/
/* 			                        </span>*/
/* 								</div>*/
/* 							</div>*/
/*                         </sapn>*/
/*                     </div>*/
/*                     <div class="c_items">*/
/*                         <span class="items_tit">联系地址</span>*/
/*                         <sapn class="editable">*/
/*                             <span field="address">深圳龙华新区东环一路天虹</span>*/
/*                             <input field="address" style="display:none;">*/
/*                         </sapn>*/
/*                     </div>*/
/*                     <div class="c_items">*/
/*                         <span class="items_tit">负责人</span>*/
/*                         <sapn class="editable">*/
/*                             <span field="contact_user">李辞</span>*/
/*                             <input field="contact_user" style="display:none;">*/
/*                         </sapn>*/
/*                     </div>*/
/*                     <div class="c_items">*/
/*                         <span class="items_tit">固定电话</span>*/
/*                         <sapn class="editable">*/
/*                             <span field="tel">0755-83488000</span>*/
/*                             <input field="tel" style="display:none;">*/
/*                         </sapn>*/
/*                     </div>*/
/*                     <div class="c_items">*/
/*                         <span class="items_tit">联系手机</span>*/
/*                         <sapn class="editable">*/
/*                             <span field="phone">18654856985</span>*/
/*                             <input field="phone" style="display:none;">*/
/*                         </sapn>*/
/*                     </div>*/
/*                     <div class="c_items">*/
/*                         <span class="items_tit">邮箱</span>*/
/*                         <sapn class="editable">*/
/*                             <span field="email">45646546@qq.com</span>*/
/*                             <input field="email" style="display:none;">*/
/*                         </sapn>*/
/*                     </div>*/
/*                     <div class="c_items">*/
/*                         <span class="items_tit">QQ</span>*/
/*                         <sapn class="editable">*/
/*                             <span field="qq">45646546</span>*/
/*                             <input field="qq" style="display:none;">*/
/*                         </sapn>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% include 'admin/mark.html' %}*/
/*     </div>*/
/* <script src="/resource/adimin/assets/js/src/public.js"></script>*/
/* <script>*/
/*     jQuery(function ($) {*/
/*         cs.getNodes();*/
/*         */
/*         //获取企业信息*/
/*         getCompany();*/
/*         function getCompany(){*/
/*             ykp.doAjax({*/
/*                 url:'/api/api_company/com_info',*/
/*                 method:'get',*/
/*                 data:{},*/
/*                 success:function(res){*/
/*                     var data = res.data;*/
/*                     $('#logo img').show().attr('src',data.logo).siblings().hide();*/
/*                     if(data['logo'] != ''){*/
/*                         $('#logo label').css('border','none');*/
/*                         $('#logo i').hide();*/
/*                         $('[for="upload"]').find('img').remove();*/
/*                         $('[for="upload"]').append('<img src="'+ data['logo'] +'" style="width:100px;height:100px;"/>');*/
/*                     }*/
/* */
/*                     for(var i in data) {*/
/*                      	$('.editable span[field]').each(function(j) {*/
/*                      		if($(this).attr('field') == i) {*/
/*                      			i == 'build_time' ? (data[i] != '0' ? $(this).text(cs.getNowTime(data[i])) : '') : $(this).text(data[i]);*/
/*                      		}*/
/*                      	})*/
/*                     }*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         //图片上传*/
/*         uploadImg();*/
/*         function uploadImg(){*/
/*             $('#upload').change(function(){*/
/*                 var file = this.files[0];*/
/*                 if(!file.type || !/\.(jpg|png|)$/.test(file.name) ){*/
/*                 	ykp.prompt('请上传JPG、PNG格式的图片');*/
/*                 	return false;*/
/*                 }*/
/*                 var fr = new FileReader();*/
/*                 var postdata = {};*/
/*                 if(!file){*/
/*                     return;     */
/*                 }*/
/* */
/*                 fr.readAsDataURL(file);*/
/*                 fr.onloadend = function(e){*/
/*                     var base64 = e.target.result;*/
/*                     postdata['name'] = file.name;*/
/*                     postdata['dir'] = 'log';*/
/*                     postdata['base64'] = base64.split(',')[1];*/
/* */
/*                     ykp.doAjax({*/
/*                         url:'/api/api_common/upload_img',*/
/*                         method:'post',*/
/*                         data:postdata,*/
/*                         success:function(res){*/
/*                             $('#logo label').css('border','none');*/
/*                             $('#logo i').hide();*/
/*                             $('[for="upload"]').find('img').remove();*/
/*                             $('[for="upload"]').append('<img src="'+ res.data.url +'" style="width:100px;height:100px;"/>');*/
/*                         }*/
/*                     });*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         //编辑企业信息*/
/*         editCompany();*/
/*         function editCompany(){*/
/*             $('._edit').click(function(){*/
/*                 $(this).hide();*/
/*                 var userinfo = JSON.parse(ykp.getCookie('userinfo'));*/
/* //              if(userinfo.id == 1){*/
/* //              	$('#name').prop('disabled',false);*/
/* //              }*/
/*                 $('#upload').prop('disabled',false);*/
/*                 $(this).siblings().show();*/
/*                 var text = '';*/
/*                 var flag = cs.getNodes([263],true);*/
/*                 $('.editable').each(function(i,e){*/
/*                     if($(this).find('input').attr('field') == 'name' && !flag){*/
/*                         return true;*/
/*                     }*/
/*                     text = $(this).find('span').text().trim();*/
/*                     $(this).find('span').eq(0).hide();*/
/*                     $(this).find('input').show().val(text);*/
/*                     if(i == 1) {*/
/*                     	$(this).find('.form_data').show();*/
/*                     	cs.timeplug();*/
/*                     }*/
/*                     text = '';*/
/*                 });*/
/*             });*/
/*         }*/
/* */
/*         //保存企业信息*/
/*         saveCompany();*/
/*         function saveCompany(){*/
/*             $('._save').click(function(){*/
/*                 var it = $(this);*/
/*                 var postdata = {};*/
/*                 $('.editable input[field]').each(function(i,e){*/
/*                     if($(this).attr('field') == 'build_time'){*/
/*                         postdata[$(this).attr('field')] = new Date($(this).val()) / 1000;*/
/*                         return true;*/
/*                     }*/
/*                     postdata[$(this).attr('field')] = $(this).val();*/
/*                 });*/
/*                 postdata['logo'] = $('#logo img').attr('src') ? $('#logo img').attr('src') : '';*/
/*                 ykp.doAjax({*/
/*                     url:'/api/api_company/edit',*/
/*                     method:'post',*/
/*                     data:postdata,*/
/*                     success:function(res){*/
/*                         it.hide().siblings().show();*/
/*                         $('#upload').prop('disabled',true);*/
/*                         var text = '';*/
/*                         $('.editable').each(function(i,e){*/
/*                            */
/*                             if(i == 1) {*/
/*                             	$(this).find('.form_data').hide();*/
/*                             	 $(this).find('span').show();*/
/*                             }else {*/
/*                             	 text = $(this).find('input').hide().val().trim();*/
/*                             	$(this).find('span').show();*/
/*                             }*/
/*                             text = '';*/
/*                         });*/
/*                         getCompany();*/
/*                     }*/
/*                 });*/
/*             });*/
/*         }*/
/*     });*/
/* </script>*/
/* */
