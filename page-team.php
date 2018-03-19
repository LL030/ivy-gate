<?php
/*
Template Name: Team
*/
?>  <?php 
	get_header();
 ?>
 <!-- home.php -->
	<div class="home-slider row">
        <?php 
            echo do_shortcode("[metaslider id=58117]"); 
        ?>
	</div>
	<div class="team-tag row">
		<div class="container">
			<div class="d-flex flex-wrap">
				<?php  $page_data = get_page_by_path('team'); ?>
				<?php 
					function cmp($a, $b){
					    if ($a->menu_order == $b->menu_order) {
					        return 0;
					    }
					    return ($a->menu_order < $b->menu_order) ? -1 : 1;
					}
					$result = get_child_pages_by_parent_title($page_data->ID); 
					usort($result, "cmp");
					foreach ($result as $key => $value) {
						/*if($key == 0){
							echo '<div class="row">';
						}else {
							if($key%6 == 0){
								echo '</div><div class="row">';
							}
						}*/
						echo '<div class="col-md-2 col-xs-6"><div class="tag-box">';
						echo '<a href="#'.($value->post_name).'">';
						if(get_the_post_thumbnail_url( $value->ID)){
							echo '<div class="tag-pic" style="background-image: url(\''.get_the_post_thumbnail_url( $value->ID).'\')"></div>';
						}else{
							echo '<div class="tag-pic"><i class="fa-user-circle-o fa fa-80"></i></div>';
						}
					    echo '<span class="tag-name">'.get_post_meta($value->ID,'name',true).'</span>';
					    echo "</a>";
					    echo '</div></div>';
						/*if($key+1 == count($result)){
							echo '</div>';
						}*/
					}
				?>
			</div>
		</div>
	</div>
	<div class="team-content row">
		<div class="container">
			<?php  $page_data = get_page_by_path('team'); ?>
			<?php 
				$result = get_child_pages_by_parent_title($page_data->ID); 
				usort($result, "cmp");
				foreach ($result as $key => $value) {
					echo '<div class="profile d-sm-flex flex-row animation-element" id="'.($value->post_name).'">';
					echo '<section class="col-sm-3">';
						echo '<div class="A">';
						echo '<strong class="profile-name">'.get_post_meta($value->ID,'name',true).'</strong><br/>';
						if(get_post_meta($value->ID,'relationship',true)){
						echo '<strong class="profile-relationship">'.get_post_meta($value->ID,'relationship',true).'</strong><br/>';
						}
						if(get_post_meta($value->ID,'post',true)){
						echo '<strong class="profile-post">'.get_post_meta($value->ID,'post',true).'</strong><br/>';
						}
						if(get_post_meta($value->ID,'education',true)){
						echo '<span class="profile-education">'.get_post_meta($value->ID,'education',true).'</span><br/>';
						}
						echo '</div>';
						echo '<div class="B">';
						echo '<span class="profile-pic" style="background-image: url(\''.get_the_post_thumbnail_url( $value->ID).'\')"></span>';
						echo '</div>';
				    echo '</section>';
					echo '<section class="col-sm-9">';
						echo '<article>';
						echo wpautop($value->post_content);
						echo '</article>';
				    echo '</section>';
				    echo '</div>';
				}
			?>
			<?php
			/**<div class="profile d-flex flex-row">
				<section class="col-md-3">
					<?php $page_data = get_page_by_path('team/team-content-1'); ?>
					<strong class="profile-name"><?php echo get_post_meta($page_data->ID,'name',true); ?></strong><br/>
					<strong><?php echo get_post_meta($page_data->ID,'relationship',true); ?></strong><br/>
					<strong><?php echo get_post_meta($page_data->ID,'post',true); ?></strong><br/>
					<span class="profile-education"><?php echo get_post_meta($page_data->ID,'education',true); ?></span><br/>
					<span class="profile-pic"><?php echo get_the_post_thumbnail( $page_data->ID, 'thumbnail' ); ?></span>
				</section>
				<section class="col-md-9">
					<article>
						<?php $page_data = get_page_by_path('team/team-content-1'); ?>
						<?php echo wpautop($page_data->post_content); ?>
					</article>
				</section>
			</div>**/
			?>
		</div>
	</div>
 <?php 
 	get_footer();
 ?>