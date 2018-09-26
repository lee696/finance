<?php

/* admin/index.html */
class __TwigTemplate_a090f48118ae51fb97fce88c6377b4c2c06efe26b633d94f15aabd5c309e997f extends Twig_Template
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
        $this->loadTemplate("admin/header_nonav.html", "admin/index.html", 1)->display($context);
        // line 2
        echo "<style>
\t#right {
\t\t/*margin-left: 190px !important;*/
\t\tmargin-top: 107px;
\t\tpadding: 20px 20px 0px 20px;
\t\tz-index: 1;
\t}
\t
\t#right .row {
\t\tmargin: 10px 0 !important;
\t}
\t
\t#right .widget-header {
\t\tbackground: #e6ecf2 !important;
\t}
\t
\tbody {
\t\tbackground: #e6ecf2 !important;
\t}
</style>
<div id=\"right\" class=\"main-content\">
\t<div class=\"main-content-inner\" id=\"contentBox\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<!-- PAGE CONTENT BEGINS -->
\t\t\t\t<div class=\"\" id=\"main-widget-container\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--<div class=\"scheduleBox\">
\t\t<div style=\"\">
\t\t\t <p style=\"color:#fff;width:100%;line-height: 30px;margin: 0 auto;padding: 0px 15px;font-size:14px;box-shadow: 0 2px 3px #9d9d9d;background:#484848;border-radius:5px;\">
\t\t\t    123131231312313123131231312313123131231312313
\t\t\t</p>
\t\t</div>
\t</div>-->
</div>

<script>
//\tjQuery.fn.dataTableExt.oSort['string-case-asc'] = function(x, y) {
//\t\treturn((x < y) ? -1 : ((x > y) ? 1 : 0));
//\t};
//
//\tjQuery.fn.dataTableExt.oSort['string-case-desc'] = function(x, y) {
//\t\treturn((x < y) ? 1 : ((x > y) ? -1 : 0));
//\t};
//\tjQuery(function(\$) {
//\t\t
//\t\t//table checkboxes
//\t\t\$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
//
//\t\t//select/deselect all rows according to table header checkbox
//\t\t\$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function() {
//\t\t\tvar th_checked = this.checked; //checkbox inside \"TH\" table header
//
//\t\t\t\$('#dynamic-table').find('tbody > tr').each(function() {
//\t\t\t\tvar row = this;
//\t\t\t\tif(th_checked)
//\t\t\t\t\tmyTable.row(row).select();
//\t\t\t\telse
//\t\t\t\t\tmyTable.row(row).deselect();
//\t\t\t});
//\t\t});
//
//\t\t//select/deselect a row when the checkbox is checked/unchecked
//\t\t\$('#dynamic-table').on('click', 'td input[type=checkbox]', function() {
//\t\t\tvar row = \$(this).closest('tr').get(0);
//\t\t\tif(this.checked)
//\t\t\t\tmyTable.row(row).deselect();
//\t\t\telse
//\t\t\t\tmyTable.row(row).select();
//\t\t});
//
//\t\t\$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
//\t\t\te.stopImmediatePropagation();
//\t\t\te.stopPropagation();
//\t\t\te.preventDefault();
//\t\t});
//
//\t\t//And for the first simple table, which doesn't have TableTools or dataTables
//\t\t//select/deselect all rows according to table header checkbox
//\t\tvar active_class = 'active';
//\t\t\$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function() {
//\t\t\tvar th_checked = this.checked; //checkbox inside \"TH\" table header
//
//\t\t\t\$(this).closest('table').find('tbody > tr').each(function() {
//\t\t\t\tvar row = this;
//\t\t\t\tif(th_checked)
//\t\t\t\t\t\$(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
//\t\t\t\telse
//\t\t\t\t\t\$(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
//\t\t\t});
//\t\t});
//
//\t\t//select/deselect a row when the checkbox is checked/unchecked
//\t\t\$('#simple-table').on('click', 'td input[type=checkbox]', function() {
//\t\t\tvar \$row = \$(this).closest('tr');
//\t\t\tif(\$row.is('.detail-row '))
//\t\t\t\treturn;
//\t\t\tif(this.checked)
//\t\t\t\t\$row.addClass(active_class);
//\t\t\telse
//\t\t\t\t\$row.removeClass(active_class);
//\t\t});
//
//\t\t/********************************/
//\t\t//add tooltip for small view action buttons in dropdown menu
//\t\t\$('[data-rel=\"tooltip\"]').tooltip({
//\t\t\tplacement: tooltip_placement
//\t\t});
//
//\t\t//tooltip placement on right or left
//\t\tfunction tooltip_placement(context, source) {
//\t\t\tvar \$source = \$(source);
//\t\t\tvar \$parent = \$source.closest('table')
//\t\t\tvar off1 = \$parent.offset();
//\t\t\tvar w1 = \$parent.width();
//
//\t\t\tvar off2 = \$source.offset();
//\t\t\t//var w2 = \$source.width();
//
//\t\t\tif(parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
//\t\t\t\treturn 'right';
//\t\t\treturn 'left';
//\t\t}
//
//\t\t/***************/
//\t\t\$('.show-details-btn').on('click', function(e) {
//\t\t\te.preventDefault();
//\t\t\t\$(this).closest('tr').next().toggleClass('open');
//\t\t\t\$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
//\t\t});
//\t\t/***************/
//
//\t\t/**
//\t\t //add horizontal scrollbars to a simple table
//\t\t \$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style=\"width: 1000px;\" />').parent().ace_scroll(
//\t\t {
//\t\t horizontal: true,
//\t\t styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
//\t\t size: 2000,
//\t\t mouseWheelLock: true
//\t\t }
//\t\t ).css('padding-top', '12px');
//\t\t */
//
//\t})
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/header_nonav.html' %}*/
/* <style>*/
/* 	#right {*/
/* 		/*margin-left: 190px !important;*//* */
/* 		margin-top: 107px;*/
/* 		padding: 20px 20px 0px 20px;*/
/* 		z-index: 1;*/
/* 	}*/
/* 	*/
/* 	#right .row {*/
/* 		margin: 10px 0 !important;*/
/* 	}*/
/* 	*/
/* 	#right .widget-header {*/
/* 		background: #e6ecf2 !important;*/
/* 	}*/
/* 	*/
/* 	body {*/
/* 		background: #e6ecf2 !important;*/
/* 	}*/
/* </style>*/
/* <div id="right" class="main-content">*/
/* 	<div class="main-content-inner" id="contentBox">*/
/* 		<div class="row">*/
/* 			<div class="col-xs-12">*/
/* 				<!-- PAGE CONTENT BEGINS -->*/
/* 				<div class="" id="main-widget-container">*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!--<div class="scheduleBox">*/
/* 		<div style="">*/
/* 			 <p style="color:#fff;width:100%;line-height: 30px;margin: 0 auto;padding: 0px 15px;font-size:14px;box-shadow: 0 2px 3px #9d9d9d;background:#484848;border-radius:5px;">*/
/* 			    123131231312313123131231312313123131231312313*/
/* 			</p>*/
/* 		</div>*/
/* 	</div>-->*/
/* </div>*/
/* */
/* <script>*/
/* //	jQuery.fn.dataTableExt.oSort['string-case-asc'] = function(x, y) {*/
/* //		return((x < y) ? -1 : ((x > y) ? 1 : 0));*/
/* //	};*/
/* //*/
/* //	jQuery.fn.dataTableExt.oSort['string-case-desc'] = function(x, y) {*/
/* //		return((x < y) ? 1 : ((x > y) ? -1 : 0));*/
/* //	};*/
/* //	jQuery(function($) {*/
/* //		*/
/* //		//table checkboxes*/
/* //		$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);*/
/* //*/
/* //		//select/deselect all rows according to table header checkbox*/
/* //		$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function() {*/
/* //			var th_checked = this.checked; //checkbox inside "TH" table header*/
/* //*/
/* //			$('#dynamic-table').find('tbody > tr').each(function() {*/
/* //				var row = this;*/
/* //				if(th_checked)*/
/* //					myTable.row(row).select();*/
/* //				else*/
/* //					myTable.row(row).deselect();*/
/* //			});*/
/* //		});*/
/* //*/
/* //		//select/deselect a row when the checkbox is checked/unchecked*/
/* //		$('#dynamic-table').on('click', 'td input[type=checkbox]', function() {*/
/* //			var row = $(this).closest('tr').get(0);*/
/* //			if(this.checked)*/
/* //				myTable.row(row).deselect();*/
/* //			else*/
/* //				myTable.row(row).select();*/
/* //		});*/
/* //*/
/* //		$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {*/
/* //			e.stopImmediatePropagation();*/
/* //			e.stopPropagation();*/
/* //			e.preventDefault();*/
/* //		});*/
/* //*/
/* //		//And for the first simple table, which doesn't have TableTools or dataTables*/
/* //		//select/deselect all rows according to table header checkbox*/
/* //		var active_class = 'active';*/
/* //		$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function() {*/
/* //			var th_checked = this.checked; //checkbox inside "TH" table header*/
/* //*/
/* //			$(this).closest('table').find('tbody > tr').each(function() {*/
/* //				var row = this;*/
/* //				if(th_checked)*/
/* //					$(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);*/
/* //				else*/
/* //					$(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);*/
/* //			});*/
/* //		});*/
/* //*/
/* //		//select/deselect a row when the checkbox is checked/unchecked*/
/* //		$('#simple-table').on('click', 'td input[type=checkbox]', function() {*/
/* //			var $row = $(this).closest('tr');*/
/* //			if($row.is('.detail-row '))*/
/* //				return;*/
/* //			if(this.checked)*/
/* //				$row.addClass(active_class);*/
/* //			else*/
/* //				$row.removeClass(active_class);*/
/* //		});*/
/* //*/
/* //		/********************************//* */
/* //		//add tooltip for small view action buttons in dropdown menu*/
/* //		$('[data-rel="tooltip"]').tooltip({*/
/* //			placement: tooltip_placement*/
/* //		});*/
/* //*/
/* //		//tooltip placement on right or left*/
/* //		function tooltip_placement(context, source) {*/
/* //			var $source = $(source);*/
/* //			var $parent = $source.closest('table')*/
/* //			var off1 = $parent.offset();*/
/* //			var w1 = $parent.width();*/
/* //*/
/* //			var off2 = $source.offset();*/
/* //			//var w2 = $source.width();*/
/* //*/
/* //			if(parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))*/
/* //				return 'right';*/
/* //			return 'left';*/
/* //		}*/
/* //*/
/* //		/***************//* */
/* //		$('.show-details-btn').on('click', function(e) {*/
/* //			e.preventDefault();*/
/* //			$(this).closest('tr').next().toggleClass('open');*/
/* //			$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');*/
/* //		});*/
/* //		/***************//* */
/* //*/
/* //		/***/
/* //		 //add horizontal scrollbars to a simple table*/
/* //		 $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(*/
/* //		 {*/
/* //		 horizontal: true,*/
/* //		 styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)*/
/* //		 size: 2000,*/
/* //		 mouseWheelLock: true*/
/* //		 }*/
/* //		 ).css('padding-top', '12px');*/
/* //		 *//* */
/* //*/
/* //	})*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
