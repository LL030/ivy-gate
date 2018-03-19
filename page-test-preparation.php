<?php
/*
Template Name: TestPreparation
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
				<div class="feature-container d-flex base-blue" style="">
					<div class="feature-content on-hover">
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
					<div class="feature-content">
						<h1 onclick="window.location.href='http://feversoul.com/w/?page_id=58096'">English<br/>Enhancement</h1>
					</div>
				</div>
			</section>
		</div>
	 </div>
	</section>
	<section class="services-nav test-preparation-block-2 row">
		<div class="tag">
			<div class="container">
				<ul class="d-flex flex-wrap">
				<?php  $page_data = get_page_by_path('services/test-preparation/test-preparation-block-2'); ?>
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
	<section class="services-section main test-preparation-block-1 row">
		<div class="content">
			<article class="test-preparation-block-1-1 animation-element">
				<div class="container">
					<?php $page_data = get_page_by_path('services/test-preparation/test-preparation-block-1/test-preparation-block-1-1'); ?>
					<?php echo wpautop($page_data->post_content); ?>
				</div>
			</article>
			<article class="test-preparation-block-1-2 animation-element">
				<div class="container">
					<?php $page_data = get_page_by_path('services/test-preparation/test-preparation-block-1/test-preparation-block-1-2'); ?>
					<?php echo wpautop($page_data->post_content); ?>
				</div>
			</article>
		</div>
	</section>
	<?php  $page_data = get_page_by_path('services/test-preparation/test-preparation-block-2'); ?>
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
				switch ($value_sub->post_name) {
					case 'test-preparation-block-2-1-1':
						# code...
						echo'
						<section class="icon-group animation-element">
							<div class="container">
								<div class="row">
									<div class="col-xs-6 col-sm-3 col-md-3 glyphicon-box">
										<i class="col-xs-12 col-sm-12 glyphicon glyphicon-book fa-5x" aria-hidden="true"></i>
										<span class="col-xs-12 col-sm-12 glyphicon-text">Reading Test</span>
									</div>
									<div class="col-xs-6 col-sm-3 col-md-3 glyphicon-box">
										<i class="col-xs-12 col-sm-12  glyphicon glyphicon-duplicate fa-5x" aria-hidden="true"></i>
										<span class="col-xs-12 col-sm-12 glyphicon-text">Writing & Language Test</span>
									</div>
									<div class="col-xs-6 col-sm-3 col-md-3 glyphicon-box">
										<i class="col-xs-12 col-sm-12 glyphicon glyphicon-list-alt fa-5x" aria-hidden="true"></i>
										<span class="col-xs-12 col-sm-12 glyphicon-text">Math Test (No Calculator)</span>
									</div>
									<div class="col-xs-6 col-sm-3 col-md-3 glyphicon-box">
										<i class="col-xs-12 col-sm-12 glyphicon glyphicon-modal-window fa-5x" aria-hidden="true"></i>
										<span class="col-xs-12 col-sm-12 glyphicon-text">Math Test</span>
									</div>
								</div>
							</div>
						</section>
						';
						break;
					
					case 'test-preparation-block-2-2-1':
						# code...
						echo'
						<section class="icon-group animation-element">
							<div class="row">
								<div class="container">
									<div class="col-xs-6 col-sm-3 col-md-3 glyphicon-box">
										<i class="col-xs-12 col-sm-12 col-md-12 fa fa-bug fa-5x" aria-hidden="true"></i>
										<span class="col-xs-12 col-sm-12 col-md-12 glyphicon-text">Biology</span>
									</div>
									<div class="col-xs-6 col-sm-3 col-md-3 glyphicon-box">
										<i class="col-xs-12 col-sm-12 col-md-12 fa fa-bomb fa-5x" aria-hidden="true"></i>
										<span class="col-xs-12 col-sm-12 col-md-12 glyphicon-text">Chemistry</span>
									</div>
									<div class="col-xs-6 col-sm-3 col-md-3 glyphicon-box">
										<i class="col-xs-12 col-sm-12 col-md-12 fa fa-grav fa-5x" aria-hidden="true"></i>
										<span class="col-xs-12 col-sm-12 col-md-12 glyphicon-text">Physics</span>
									</div>
									<div class="col-xs-6 col-sm-3 col-md-3 glyphicon-box">
										<i class="col-xs-12 col-sm-12 col-md-12 fa fa-calculator fa-5x" aria-hidden="true"></i>
										<span class="col-xs-12 col-sm-12 col-md-12 glyphicon-text">Math Level I & II</span>
									</div>
								</div>
							</div>
						</section>
						';
						break;
					
					case 'test-preparation-block-2-3-1':
						# code...
						echo'
						<section class="icon-group animation-element">
							<div class="container">
								<div class="d-flex flex-xs-wrap">
									<div class="col-xs-6 glyphicon-box">
										<i class="col-xs-12 col-sm-12 col-md-12 fa fa-language fa-5x" aria-hidden="true"></i>
										<span class="col-xs-12 col-sm-12 col-md-12 glyphicon-text">English</span>
									</div>
									<div class="col-xs-6 glyphicon-box">
										<i class="col-xs-12 col-sm-12 col-md-12 fa fa-calculator fa-5x" aria-hidden="true"></i>
										<span class="col-xs-12 col-sm-12 col-md-12 glyphicon-text">Math</span>
									</div>
									<div class="col-xs-6 glyphicon-box">
										<i class="col-xs-12 col-sm-12 col-md-12 fa fa-book fa-5x" aria-hidden="true"></i>
										<span class="col-xs-12 col-sm-12 col-md-12 glyphicon-text">Reading</span>
									</div>
									<div class="col-xs-6 glyphicon-box">
										<i class="col-xs-12 col-sm-12 col-md-12 fa fa-flask fa-5x" aria-hidden="true"></i>
										<span class="col-xs-12 col-sm-12 col-md-12 glyphicon-text">Science</span>
									</div>
									<div class="col-xs-6 glyphicon-box">
										<i class="col-xs-12 col-sm-12 col-md-12 fa fa-pencil fa-5x" aria-hidden="true"></i>
										<span class="col-xs-12 col-sm-12 col-md-12 glyphicon-text">Writing</span>
									</div>
								</div>
							</div>
						</section>
						';
						break;
					
					case 'test-preparation-block-2-4-1':
						# code...
						echo'
						<section class="icon-group animation-element">
							<div class="container">
								<div class="d-flex flex-xs-wrap">
									<div class="col-xs-6 glyphicon-box">
										<i class="col-xs-12 col-sm-12 col-md-12 fa fa-commenting-o fa-5x" aria-hidden="true"></i>
										<span class="col-xs-12 col-sm-12 col-md-12 glyphicon-text">Verbal</span>
									</div>
									<div class="col-xs-6 glyphicon-box">
										<i class="col-xs-12 col-sm-12 col-md-12 fa fa-area-chart fa-5x" aria-hidden="true"></i>
										<span class="col-xs-12 col-sm-12 col-md-12 glyphicon-text">Quantitative</span>
									</div>
									<div class="col-xs-6 glyphicon-box">
										<i class="col-xs-12 col-sm-12 col-md-12 fa fa-book fa-5x" aria-hidden="true"></i>
										<span class="col-xs-12 col-sm-12 col-md-12 glyphicon-text">Reading</span>
									</div>
									<div class="col-xs-6 glyphicon-box">
										<i class="col-xs-12 col-sm-12 col-md-12 fa fa-pencil fa-5x" aria-hidden="true"></i>
										<span class="col-xs-12 col-sm-12 col-md-12 glyphicon-text">Writing Sample</span>
									</div>
									<div class="col-xs-6 glyphicon-box">
										<i class="col-xs-12 col-sm-12 col-md-12 fa fa-flask fa-5x" aria-hidden="true"></i>
										<span class="col-xs-12 col-sm-12 col-md-12 glyphicon-text">Experimental</span>
									</div>
								</div>
							</div>
						</section>
						';
						break;
					
					default:
						# code...
						break;
				}
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