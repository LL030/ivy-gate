 <?php 
	get_header();
 ?>
 <!-- home.php -->
	<div class="success-banner banner row">
			<?php  $page_data = get_page_by_path('banner/post-banner'); ?>
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
			<div class="content">
				<article>
					<div class="article-container">
						<?php if ( have_posts() ) : the_post(); ?>
						<?php $thumb_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
						<div class="article-image article-row animation-element" style="background-image: url(<?php echo $thumb_url;?>)" ></div>
						<div class="article-sub d-flex flex-wrap animation-element">
							<div class="article-title d-flex align-items-center no-padding">
								<h1><?php the_title(); ?></h1>
							</div>
							<div class="article-info ml-auto d-flex align-items-center no-padding">
							by <?php the_author(); ?>
							<span class="v-break">|</span>
							<?php  echo date('y-m-d',get_the_time('U')); ?>
							</div>
						</div>
						<div class="article-content animation-element">
							<?php the_content(); ?>
						</div>
						<?php endif; ?>
					</div>
				</article>
			</div>
			<section class="similar-post d-flex flex-wrap grid animation-element">
				<?php get_similar_post($post->ID); ?>
			</section>
		</div>
	</div>
 <?php 
 	get_footer();
 ?>