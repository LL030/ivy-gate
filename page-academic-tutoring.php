<?php
/*
Template Name: AcademicTutoring
*/
?> <?php 
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
				<div class="feature-container d-flex base-blue">
					<div class="feature-content none-padding-bottom">
						<h1  onclick="window.location.href='http://feversoul.com/w/?page_id=58067'">Test<br/>Preparation</h1>
					</div>
				</div>
			</section>
			<section class="col-xs-6 col-sm-6 col-md-3 feature-box d-flex">
				<div class="feature-container d-flex base-green">
					<div class="feature-content  on-hover">
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
					<div class="feature-content">
						<h1 onclick="window.location.href='http://feversoul.com/w/?page_id=58096'">English<br/>Enhancement</h1>
					</div>
				</div>
			</section>
		</div>
	 </div>
	</section>
	<section class="services-nav academic-tutoring-block-2 row">
		<div class="tag">
			<div class="container">
				<ul class="d-flex flex-wrap">
				<?php  $page_data = get_page_by_path('services/academic-tutoring/academic-tutoring-block-2'); ?>
				<?php 
					$result = get_child_pages_by_parent_title($page_data->ID); 
					function cmp($a, $b){
					    if ($a->menu_order == $b->menu_order) {
					        return 0;
					    }
					    return ($a->menu_order < $b->menu_order) ? -1 : 1;
					}
					usort($result, "cmp");
					foreach ($result as $key => $value) {
						echo '<li class="col-flex"><a href="#'.$value->post_name.'">'.($value->post_content).'</a></li>';
					}
				?>
				</ul>
			</div>
		</div>
	</section>
	<section class="services-section main academic-tutoring-block-1 row">
		<div class="content">
			<article class="academic-tutoring-block-1-1 animation-element">
				<div class="container">
					<?php $page_data = get_page_by_path('services/academic-tutoring/academic-tutoring-block-1/academic-tutoring-block-1-1'); ?>
					<?php echo wpautop($page_data->post_content); ?>
				</div>
			</article>
			<article class="academic-tutoring-block-1-2 animation-element">
				<div class="container">
					<?php $page_data = get_page_by_path('services/academic-tutoring/academic-tutoring-block-1/academic-tutoring-block-1-2'); ?>
					<?php echo wpautop($page_data->post_content); ?>
				</div>
			</article>
			<article class="academic-tutoring-block-1-3 animation-element">
				<div class="container">
					<?php $page_data = get_page_by_path('services/academic-tutoring/academic-tutoring-block-1/academic-tutoring-block-1-3'); ?>
					<?php echo wpautop($page_data->post_content); ?>
				</div>
			</article>
			<article class="academic-tutoring-block-1-4 animation-element">
				<div class="container">
					<?php $page_data = get_page_by_path('services/academic-tutoring/academic-tutoring-block-1/academic-tutoring-block-1-4'); ?>
					<?php echo wpautop($page_data->post_content); ?>
				</div>
			</article>
		</div>
	</section>

	<?php  $page_data = get_page_by_path('services/academic-tutoring/academic-tutoring-block-2'); ?>
	<?php 
		$result = get_child_pages_by_parent_title($page_data->ID); 
		usort($result, "cmp");
		foreach ($result as $key => $value) {
			echo '<section class="services-section row">';
			echo '<div class="section-tag-title animation-element" id="'.$value->post_name.'"><h1>'.($value->post_content).'</h1></div>';
			echo '<div class="content">';
			$result_sub = get_child_pages_by_parent_title($value->ID); 
			foreach ($result_sub as $key => $value_sub) {
				echo '<article class="'.$value_sub->post_name.' animation-element">';
				echo '<div class="container">';
				echo wpautop($value_sub->post_content);
				echo '</div>';
				echo '</article>';
			}
			echo '</div>';
			echo "</section>";
		}
	?>
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