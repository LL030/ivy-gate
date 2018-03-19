<?php
/*
Template Name: News
*/
?>  <?php 
	get_header();
 ?>
 <!-- home.php -->
	<div class="success-banner banner row">
			<?php  $page_data = get_page_by_path('banner/news-banner'); ?>
			<?php echo wpautop($page_data->post_content); ?>
	</div>
	<div class="careers-tag row blog-tag">
		<div class="container">
			<div class="d-flex flex-wrap grid">
				<?php  $page_data = get_page_by_path('careers/careers-block-2'); ?>
				<?php
				$categories = get_categories( array(
				    'orderby' => 'name',
				    'order'   => 'ASC'
				) );
				foreach( $categories as $category ) {
				    $category_link = sprintf( 
				        '<a href="%1$s" alt="%2$s">%3$s</a>',
				        esc_url( get_category_link( $category->term_id ) ),
				        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
				        esc_html( $category->name )
				    );
				    /*echo '<div class="col-xs-6 col-sm-3 align-items-center justify-content-center blog-tag-col">' . sprintf( esc_html__( 'Category: %s', 'textdomain' ), $category_link ) . '</div> ';*/
				    echo '<div class="col-xs-6 col-sm-3 align-items-center justify-content-center blog-tag-col">' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</div> ';
				} 
				?>
			</div>
		</div>
	</div>
	<div class="careers-section row blog-section">
		<div class="container">
			<?php  $page_data = get_page_by_path('careers/careers-block-2'); ?>
			<?php
			$categories = get_categories( array(
			    'orderby' => 'name',
			    'order'   => 'ASC'
			) );
			foreach( $categories as $category ) {
			    $category_link = sprintf( 
			        '<a href="%1$s" alt="%2$s">%3$s</a>',
			        esc_url( get_category_link( $category->term_id ) ),
			        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
			        esc_html( $category->name )
			    );
			     $args = array(
					'posts_per_page'   => 5,
					'offset'           => 0,
					'category'         => $category->cat_ID,
					'orderby'          => 'date',
					'order'            => 'DESC',
					'post_type'        => 'post',
					'post_status'      => 'publish',
					'suppress_filters' => true 
				);
				$myposts = get_posts( $args );
				echo '<div class="d-flex flex-wrap grid" id="'.$category->name.'">';
					foreach ( $myposts as $post ) : setup_postdata( $post );
					$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					echo '<article class="col-sm-3 col-xs-6 d-flex">';
						echo '<div class="article-container d-flex flex-column">';

							echo '<div class="article-image article-row" style="background-image: url(\''.$url.'\')" >';
							echo '</div>';
							echo '<div class="article-title article-row" >';
								the_title();
							echo '</div>';

							echo '<div class="article-info article-row mt-auto align-items-center justify-content-start d-flex">';
								echo '<div class="col-xs-6 col-sm-6 article-col">';
									echo '<div class="date">';
										echo date('y-m-d',get_the_time('U'));
									echo '</div>';
								echo '</div>';
								echo '<div class="col-xs-6 col-sm-6 article-col">';
									/*echo '<div class="category">';
										the_category();
									echo '</div>';*/
								echo '</div>';
							echo '</div>';

						echo '</div>';
					echo '</article>';
					endforeach;
				echo "</div>";
			} 
			?>
		</div>
	</div>
 <?php 
 	get_footer();
 ?>