<?php
/*
Template Name: InitialMeeting
*/
?>    <?php 
	get_header();
 ?>
 <!-- home.php -->
	<div class="form-section dashed-top row animation-element">
		<div class="container">
			<div class="form-header col-sm-4">
				<div class="title-two-line">
					<span>REACH</span>
					<span>US DIRECTLY</span>
				</div>
				<div class="content">
					<?php  $page_data = get_page_by_path('address'); ?>
					<?php echo wpautop($page_data->post_content); ?>
				</div>
			</div>
			<div class="form-body col-sm-7 col-sm-offset-1">
				<div class="title-two-line">
					<span>Book An</span>
					<span>Initial Meeting</span>
				</div>
				<div class="content">
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