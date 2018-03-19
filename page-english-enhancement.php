<?php
/*
Template Name: EnglishEnhancement
*/
?>   <?php 
	get_header();
 ?>
 <!-- home.php -->
<div>
	<div class="services-cover-line row" style="min-height:30px;">
		<div class="container">
		</div>
	</div>
	<section class="services-feature services-block-1 row">
	 <div class="container">
	 	<div class="d-flex flex-row flex-wrap">
			<section class="col-xs-6 col-sm-6 col-md-3 feature-box d-flex">
				<div class="feature-container d-flex base-blue" style="">
					<div class="feature-content">
						<h1  onclick="window.location.href='http://feversoul.com/w/?page_id=58067'">Test<br/>Preparation</h1>
					</div>
				</div>
			</section>
			<section class="col-xs-6 col-sm-6 col-md-3 feature-box d-flex">
				<div class="feature-container d-flex base-green">
					<div class="feature-content none-padding-bottom">
						<h1 onclick="window.location.href='http://feversoul.com/w/?page_id=58070'">Academic<br/>Tutoring</h1>
					</div>
				</div>
			</section>
			<section class="col-xs-6 col-sm-6 col-md-3 feature-box d-flex">
				<div class="feature-container d-flex base-purple">
					<div class="feature-content">
						<h1 onclick="window.location.href='http://feversoul.com/w/?page_id=58081'">Admission<br/>Advisory</h1>
					</div>
				</div>
			</section>
			<section class="col-xs-6 col-sm-6 col-md-3 feature-box d-flex">
				<div class="feature-container d-flex light-blue">
					<div class="feature-content on-hover">
						<h1 onclick="window.location.href='http://feversoul.com/w/?page_id=58096'">English<br/>Enhancement</h1>
					</div>
				</div>
			</section>
		</div>
	 </div>
	</section>
	<section class="services-section main row">
		<div class="content">
			<article class="english-enhancement-block-1 animation-element">
				<div class="container">
					<?php $page_data = get_page_by_path('services/english-enhancement/english-enhancement-block-1'); ?>
					<?php echo wpautop($page_data->post_content); ?>
				</div>
			</article>
			<article class="english-enhancement-block-1-2 animation-element">
				<div class="container">
					<?php $page_data = get_page_by_path('services/english-enhancement/english-enhancement-block-2'); ?>
					<?php echo wpautop($page_data->post_content); ?>
				</div>
			</article>
			<article class="english-enhancement-block-1-3 animation-element">
				<div class="container">
					<?php $page_data = get_page_by_path('services/english-enhancement/english-enhancement-block-3'); ?>
					<?php echo wpautop($page_data->post_content); ?>
				</div>
			</article>
			<article class="english-enhancement-block-1-4 animation-element">
				<div class="container">
					<?php $page_data = get_page_by_path('services/english-enhancement/english-enhancement-block-4'); ?>
					<?php echo wpautop($page_data->post_content); ?>
				</div>
			</article>
			<article class="english-enhancement-block-1-5 animation-element">
				<div class="container">
					<?php $page_data = get_page_by_path('services/english-enhancement/english-enhancement-block-5'); ?>
					<?php echo wpautop($page_data->post_content); ?>
				</div>
			</article>
			<article class="english-enhancement-block-1-6 animation-element">
				<div class="container">
					<?php $page_data = get_page_by_path('services/english-enhancement/english-enhancement-block-6'); ?>
					<?php echo wpautop($page_data->post_content); ?>
				</div>
			</article>
		</div>
	</section>
	<div class="form-section row animation-element embed-form">
		<div class="container">
			<div class="form-body embed">
				<div class="content">
				<?php  $page_data = get_page_by_path('services-contact-us'); ?>
				<?php query_posts('page_id='.$page_data->ID); ?>
				<?php if ( have_posts() ) : the_post(); ?>
					<article class="article-content">
						<div class="inner-content">
							<?php the_content(); ?>
						</div>
						<div class="clear"></div>
					</article>
				<?php endif ?>
			</div>
		</div>
	</div>
</div>
 <?php 
 	get_footer();
 ?>