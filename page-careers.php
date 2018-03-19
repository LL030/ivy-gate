<?php
/*
Template Name: Careers
*/
?>  <?php 
	get_header();
 ?>
 <!-- home.php -->
	<div class="success-banner banner row">
			<?php  $page_data = get_page_by_path('banner/careers-banner'); ?>
			<?php echo wpautop($page_data->post_content); ?>
	</div>
	<div class="careers-tag row">
		<div class="container">
			<div class="d-flex flex-wrap">
				<?php  $page_data = get_page_by_path('careers/careers-block-2'); ?>
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
						echo '<div class="col-flex"><div class="careers-box">';
						echo '<a href="#'.($value->post_name).'">';
					    echo '<span class="careers-name">'.get_post_meta($value->ID,'careers-position',true).'</span>';
					    echo "</a>";
						if($key+1 == count($result)){
						}else{
						    echo '<span class="careers-spacing">|</span>';
						}
					    echo '</div></div>';
					}
				?>
			</div>
		</div>
	</div>
	<div class="careers-section row">
		<div class="container">
			<?php  $page_data = get_page_by_path('careers/careers-block-1'); ?>
			<?php echo $page_data->post_content; ?>
		</div>
	</div>
	<div class="careers-section row">
		<div class="container">
			<?php  $page_data = get_page_by_path('careers/careers-block-2'); ?>
			<?php 
				$result = get_child_pages_by_parent_title($page_data->ID); 
				usort($result, "cmp");
				foreach ($result as $key => $value) {
					echo '<div class="profile d-sm-flex flex-row" id="'.($value->post_name).'">';
					echo '<section class="col-sm-3">';
						echo '<strong class="profile-name">'.get_post_meta($value->ID,'careers-position',true).'</strong><br/>';
				    echo '</section>';
					echo '<section class="col-sm-9">';
						echo '<article>';
						echo wpautop($value->post_content);
						echo '</article>';
				    echo '</section>';
				    echo '</div>';
				}
			?>
		</div>
	</div>
 <?php 
 	get_footer();
 ?>