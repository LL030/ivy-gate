<?php
/*
Template Name: Success
*/
?>    <?php 
	get_header();
 ?>
 <!-- home.php -->
	<div class="success-banner banner row">
			<?php  $page_data = get_page_by_path('banner/success-banner'); ?>
			<?php echo wpautop($page_data->post_content); ?>
	</div>
	<div class="success-tag row">
		<div class="container">
			<div class="d-flex row">
				<div class="col-sm-4 col-xs-4 d-flex justify-content-center text-align-center">
					 <a href="#1d" class="d-flex">
						<div class="success-tag-item">
							<div class="success-tag-number">1</div>
							<?php  $page_data = get_page_by_path('success/success-block-1/success-block-1-1'); ?>
							<?php echo $page_data->post_content; ?>
						</div>
					</a>
				</div>
				<div class="col-sm-4 col-xs-4 d-flex justify-content-center text-align-center">
					<a href="#2d" class="d-flex">
						<div class="success-tag-item">
							<div class="success-tag-number">2</div>
							<?php  $page_data = get_page_by_path('success/success-block-1/success-block-1-2'); ?>
							<?php echo $page_data->post_content; ?>
						</div>
					</a>
				</div>
				<div class="col-xs-4 col-sm-4 d-flex justify-content-center text-align-center">
					<a href="#3d" class="d-flex">
						<div class="success-tag-item">
							<div class="success-tag-number">3</div>
							<?php  $page_data = get_page_by_path('success/success-block-1/success-block-1-3'); ?>
							<?php echo $page_data->post_content; ?>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<section class="success-section main admission-advisory-block-1-1 row">
		<article class="success-block-1-1 animation-element" id="1d">
			<div class="container">
				<?php  $page_data = get_page_by_path('success/success-block-1/success-block-1-1/success-block-1-1-1'); ?>
				<?php echo $page_data->post_content; ?>
			</div>
		</article>
		<article class="success-block-1-2 animation-element" id="2d">
			<div class="container">
				<?php  $page_data = get_page_by_path('success/success-block-1/success-block-1-2/success-block-1-2-1'); ?>
				<?php echo $page_data->post_content; ?>
			</div>
		</article>
		<article class="success-block-1-3 animation-element" id="3d">
			<div class="container">
				<?php  $page_data = get_page_by_path('success/success-block-1/success-block-1-3/success-block-1-3-1'); ?>
				<?php echo $page_data->post_content; ?>
			</div>
		</article>
	</section>
 <?php 
 	get_footer();
 ?>