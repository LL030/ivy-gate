<?php
add_theme_support( 'post-thumbnails' ); 
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}
function get_child_pages_by_parent_title($pageId,$limit = -1)
{
    // needed to use $post
    global $post;
    // used to store the result
    $pages = array();

    // What to select
    $args = array(
        'post_type' => 'page',
        'post_parent' => $pageId,
        'posts_per_page' => $limit
    );
    $the_query = new WP_Query( $args );

    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        $pages[] = $post;
    }
    wp_reset_postdata();
    return $pages;
}
/* 相關文章 */

function get_similar_post($post_id){
   $tags = wp_get_post_tags($post_id);
   $cat = get_the_category($post_id);
   $catid = $cat[0]->term_id;
   ?>
   <?php
        $first_tag = $tags[0]->term_id;
        $i = 0;
        foreach($tags as $key => $value){
        $tagid= $value ->term_id;
        $tagname = ($value ->name);
        ?>
        <?php query_posts('&tag='.$tagname.'&showposts=4'); ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php 
/*          $postid_tag[$i] = get_the_ID(); 
            if($postid_tag[$i] == $post_id||$i>=4){
            }else{
                print_similar_post();
                $i++; 
            } */
            ?>
            <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        <?php } ?>
        <?php query_posts('&cat='.$catid.'&orderby=rand'); ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php 
             $postid_cat = get_the_ID(); 
/*          if( in_array($postid_cat, $postid_tag)||$postid_cat==$post_id||$i>=4){ */
            if( $postid_cat==$post_id||$i>=4){
            }else{
                print_similar_post();
                $i++;
            } 
            ?>
            <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        <?php
}
function print_similar_post(){
    ?>
            <article class="col-sm-3 col-xs-6 d-flex">
                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
                <div class="article-container d-flex flex-column" onclick="window.location.href='<?php the_permalink() ?>'">
                    <div class="article-image article-row" style="background-image: url(<?php echo $url;?>)"></div>
                    <div class="article-title article-row"><?php the_title(); ?></div>
                </div>
            </article>
    <?php
}
?>