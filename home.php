 <?php
/**
 * Tavern Theme: Blog, front page
 * @package WordPress
 * @subpackage Ive-Gate Theme
 * @since 1.0
 */
 ?>
 
 <?php 
	get_header();
 ?>
 <!-- home.php -->
 <div>
   <div class="home-slider row">
        <?php 
            echo do_shortcode("[metaslider id=58117]"); 
        ?>
   </div>
   <section class="home-intro row animation-element">
     <div class="container">
       <div class="row">
         <section class="col-md-4" data-toggle="modal" data-target="#download-our-schedule">
            <?php $page_data = get_page_by_path('home/download-our-schedule'); ?>
            <?php echo wpautop($page_data->post_content); ?>
         </section>
         <section class="col-md-4" onclick="window.location.href='http://feversoul.com/w/?page_id=33'">
            <?php $page_data = get_page_by_path('home/meet-the-team'); ?>
            <?php echo wpautop($page_data->post_content); ?>
         </section>
         <section class="col-md-4" onclick="window.location.href='http://feversoul.com/w/?page_id=58103'">
            <?php $page_data = get_page_by_path('home/contact-us-today'); ?>
            <?php echo wpautop($page_data->post_content); ?>
         </section>
       </div>
     </div>
   </section>
   <section class="home-feature row d-flex">
     <div class="container">
       <div class="row d-flex flex-wrap">
         <section class="home-feature-container base-blue col-xs-12 col-sm-6 col-md-3 d-flex">
            <?php $page_data = get_page_by_path('services/test-preparation'); ?>
            <div class="home-feature-content" onclick="window.location.href='http://feversoul.com/w/?page_id=58067'">
                <h1><?php echo $page_data->post_title; ?></h1>
                <?php echo wpautop($page_data->post_content); ?>
            </div>
         </section>
         <section class="home-feature-container base-green col-xs-12 col-sm-6 col-md-3 d-flex">
            <?php $page_data = get_page_by_path('services/academic-tutoring'); ?>
            <div class="home-feature-content" onclick="window.location.href='http://feversoul.com/w/?page_id=58070'">
                <h1><?php echo $page_data->post_title; ?></h1>
                <?php echo wpautop($page_data->post_content); ?>
            </div>
         </section>
         <section class="home-feature-container base-purple col-xs-12 col-sm-6 col-md-3 d-flex">
            <?php $page_data = get_page_by_path('services/admission-advisory'); ?>
            <div class="home-feature-content" onclick="window.location.href='http://feversoul.com/w/?page_id=58081'">
                <h1><?php echo $page_data->post_title; ?></h1>
                <?php echo wpautop($page_data->post_content); ?>
            </div>
         </section>
         <section class="home-feature-container light-blue col-xs-12 col-sm-6 col-md-3 d-flex">
            <?php $page_data = get_page_by_path('services/english-enhancement'); ?>
            <div class="home-feature-content" onclick="window.location.href='http://feversoul.com/w/?page_id=58096'">
                <h1><?php echo $page_data->post_title; ?></h1>
                <?php echo wpautop($page_data->post_content); ?>
            </div>
         </section>
       </div>
     </div>
   </section>
 </div>
 <!-- Modal -->
 <div id="download-our-schedule" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Download Our Schedule</h4>
      </div>
      <div class="modal-body">
            <?php $page_data = get_page_by_path('home/download-our-schedule/download-our-schedule-dialog'); ?>
            <?php echo wpautop($page_data->post_content); ?>
      </div>
      <div class="modal-footer">
      </div>
    </div>

  </div>
</div>
 <?php 
 	get_footer();
 ?>