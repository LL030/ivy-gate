<?php
/**
 * Tavern Theme footer file
 * @package WordPress
 * @subpackage Tavern Theme
 * @since 1.0
 * TO BE INCLUDED IN ALL OTHER PAGES
 */
 ?>
 </div>
<a class="fixed-btn-group">
  		<div class="row">
	  		<div>
		  		<div class="row align-items-end">
			  		<div class="btt-btn col-flex pull-right">
				  		<div class="btt-box" onclick="$('html, body').animate({ scrollTop: 0 }, 'fast');">
					  		<span class="fa-chevron-up fa fa-2x"></span>
					  		<span>GO TOP</span>
				  		</div>
				  		</div>
		  		</div>
	  		</div>
	  		<div>
	  			<div class="row align-items-end">
			  		<div class="ctus-btn btn col-flex pull-right"><span onclick="window.location.href='http://feversoul.com/w/?page_id=58103'">Contack Us Today</span></div>
		  		</div>
	  		</div>
	  		<div>
		  		<div class="row align-items-end">
			  		<div class="fimeet-btn btn col-flex pull-right"><span onclick="window.location.href='http://feversoul.com/w/?page_id=58095'">Free Initial Meeting</span></div>
		  		</div>
	  		</div>
	  	</div>
</a>
  <footer class="row align-items-center animation-element">
  	<div class="container">
  		<div class="row margin-clear">
	  		<div class="col-md-7 col-sm-12">
	  			<div class="row align-items-center pull-left">
			  		<div class="cpright">Copyright © 2013 Ivy Gate Learning Center Ltd. All rights reserved. Terms of Use Privacy Policy</div>
		  		</div>
	  		</div>
	  		<div class="col-md-5 col-sm-12">
		  		<div class="row align-items-center pull-right">
			  		<div class="ctus-btn col-flex" onclick="window.location.href='http://feversoul.com/w/?page_id=58103'">Contack Us Today</div>
			  		<div class="fimeet-btn col-flex" onclick="window.location.href='http://feversoul.com/w/?page_id=58095'">Free Initial Meeting</div>
		  		</div>
	  		</div>
	  	</div>
  	</div>
  </footer>

  <script type="text/javascript">
	var home_url					=	'<?php echo home_url();?>';
	var template_directory_uri	=	'<?php echo get_template_directory_uri();?>';
	var retina_logo_url			=	'<?php echo( !empty($hgr_options['retina_logo']['url']) ? esc_url($hgr_options['retina_logo']['url']) : '' );?>';
	var menu_style				=	'<?php echo( !empty($hgr_options['menu-style']) ? esc_attr($hgr_options['menu-style']) : '' );?>';
	var is_front_page			=	'<?php echo( is_front_page() ? 'true' : 'false' );?>';
  </script>

	<?php wp_footer();?>
 </body>
</html>