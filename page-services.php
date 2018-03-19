 <?php 
	get_header();
 ?>
 <!-- home.php -->
<div>
	<div class="services-banner banner row">
			<?php  $page_data = get_page_by_path('banner/services-banner'); ?>
			<?php echo wpautop($page_data->post_content); ?>
	</div>
	<section class="services-feature services-block-1 row">
	 <div class="container">
	 	<div class="d-flex flex-wrap flex-row">
			<section class="col-md-3 col-xs-12 col-sm-6 feature-box d-flex">
				<div class="feature-container d-flex base-blue" style="">
					<?php $page_data = get_page_by_path('services/test-preparation'); ?>
					<div class="feature-content padding-bottom" onclick="window.location.href='http://feversoul.com/w/?page_id=58067'">
						<h1><?php echo $page_data->post_title; ?></h1>
						<?php echo wpautop($page_data->post_content); ?>
						<div class="go-btn">GO</div>
					</div>
				</div>
			</section>
			<section class="col-md-3 col-xs-12 col-sm-6 feature-box d-flex">
				<div class="feature-container d-flex base-green">
					<?php $page_data = get_page_by_path('services/academic-tutoring'); ?>
					<div class="feature-content padding-bottom" onclick="window.location.href='http://feversoul.com/w/?page_id=58070'">
						<h1><?php echo $page_data->post_title; ?></h1>
						<?php echo wpautop($page_data->post_content); ?>
						<div class="go-btn">GO</div>
					</div>
				</div>
			</section>
			<section class="col-md-3 col-xs-12 col-sm-6 feature-box d-flex">
				<div class="feature-container d-flex base-purple">
					<?php $page_data = get_page_by_path('services/admission-advisory'); ?>
					<div class="feature-content padding-bottom" onclick="window.location.href='http://feversoul.com/w/?page_id=58081'">
						<h1><?php echo $page_data->post_title; ?></h1>
						<?php echo wpautop($page_data->post_content); ?>
						<div class="go-btn">GO</div>
					</div>
				</div>
			</section>
			<section class="col-md-3 col-xs-12 col-sm-6 feature-box d-flex">
				<div class="feature-container d-flex light-blue">
					<?php $page_data = get_page_by_path('services/english-enhancement'); ?>
					<div class="feature-content padding-bottom" onclick="window.location.href='http://feversoul.com/w/?page_id=58096'">
						<h1><?php echo $page_data->post_title; ?></h1>
						<?php echo wpautop($page_data->post_content); ?>
						<div class="go-btn">GO</div>
					</div>
				</div>
			</section>
		</div>
	 </div>
	</section>
</div>
 <?php 
 	get_footer();
 ?>