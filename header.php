<?php
/**
 * Tavern Theme header file
 * @package WordPress
 * @subpackage Tavern Theme
 * @since 1.0
 * TO BE INCLUDED IN ALL OTHER PAGES
 */
 $hgr_options = get_option( 'redux_options' );
 
 if( !is_array($hgr_options) && !isset( $hgr_options['menu-bgcolor'] ) ){
		$hgr_options['menu-style'] = 1;
	}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --> 
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
<?php echo ( !empty($hgr_options['retina_favicon']['url']) ? '<link href="'.$hgr_options['retina_favicon']['url'].'" rel="icon">'."\r\n" : '' ); ?>
<?php echo ( !empty($hgr_options['iphone_icon']['url']) ? '<link href="'.$hgr_options['iphone_icon']['url'].'" rel="apple-touch-icon">'."\r\n" : ''); ?>
<?php echo ( !empty($hgr_options['retina_iphone_icon']['url']) ? '<link href="'.$hgr_options['retina_iphone_icon']['url'].'" rel="apple-touch-icon" sizes="76x76" />'."\r\n" : ''); ?>
<?php echo ( !empty($hgr_options['ipad_icon']['url']) ? '<link href="'.$hgr_options['ipad_icon']['url'].'" rel="apple-touch-icon" sizes="120x120" />'."\r\n" : ''); ?>
<?php echo ( !empty($hgr_options['ipad_retina_icon']['url']) ? '<link href="'.$hgr_options['ipad_retina_icon']['url'].'" rel="apple-touch-icon" sizes="152x152" />'."\r\n" : ''); ?>
<?php endif; ?>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/highgrade/js/html5shiv.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/highgrade/js/respond.min.js"></script>
    <![endif]-->

<?php wp_head(); ?>
<!-- Latest compiled and minified CSS -->

<!-- Latest compiled and minified JavaScript -->

<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<?php wp_enqueue_script( 'jquery-3', 'https://code.jquery.com/jquery-3.1.1.min.js', array( 'jquery' ) ); ?>
<?php wp_enqueue_script( 'bootstrap-tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array( 'jquery' ) ); ?>
<?php wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array( 'jquery' ) ); ?>

<?php wp_enqueue_script( 'smooth-scrolling', get_template_directory_uri().'/js/smooth-scrolling.js?ver'.rand(), array( 'jquery' ) ); ?>
<?php wp_enqueue_script( 'text-animate', get_template_directory_uri().'/js/text-animate.js?ver'.rand(), array( 'jquery' ) ); ?>

<?php wp_enqueue_script( 'slider', get_template_directory_uri().'/js/slider.js', array( 'jquery' ) ); ?>
<!-- Latest less -->
<?php wp_enqueue_script( 'less', '//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js?ver'.rand(), array( 'jquery' ) ); ?>
<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles.less?ver<?php echo rand(); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles.css" />
<!-- jquery easing -->
<?php wp_enqueue_script( 'easingc', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.compatibility.js', array( 'jquery' ) ); ?>
<?php wp_enqueue_script( 'easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js', array( 'jquery' ) ); ?>

<!-- jquery easing -->
<?php wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/f0ae774c90.js', array( 'jquery' ) ); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/font-awesome-4.7.0/">
</head>
<body class="container-fluid">
<header class="row d-flex">
	<div class="container-fluid d-flex">
		<div class="col-xs-12 col-sm-12 d-flex">
			<div class="col align-items-center justify-content-start">
				<div class="col-xs-6 logo justify-content-start"  onclick="window.location.href='http://feversoul.com/w/'">
				</div>
			</div>
			<div class="col ml-auto align-items-center justify-content-end">
				<div class="col-flex"></div>
				<div class="col-flex"></div>
				<div class="col-flex">
					<div class="shortcut align-items-center">
						<div class="col-flex fb-btn" onclick="window.location.href='https://www.facebook.com/IvyGateHK/'">
							<span class="fa fa-facebook-square fa-2x"></span>
						</div>
						<div class="col-flex google-plus-btn" onclick="window.location.href='https://plus.google.com/113039893365320156422'">
							<span class="fa fa-google-plus-square  fa-2x"></span>
						</div>
						<div class="col-flex news-btn" onclick="window.location.href='http://feversoul.com/w/?page_id=421'">
							<!-- <span class="fa fa-handshake-o fa-2x"></span> -->NEWS
						</div>
						<div class="col-flex careers-btn" onclick="window.location.href='http://feversoul.com/w/?page_id=58088'">
							<!-- <span class="fa fa-handshake-o fa-2x"></span> -->CAREERS
						</div>
						<div class="col-flex align-items-center meeting-btn" onclick="window.location.href='http://feversoul.com/w/?page_id=58095'">
							<span class="fa fa-chevron-circle-right fa-2x"></span>FREE INITIAL MEETING
						</div>
						<div class="col-flex align-items-center nav-btn" data-toggle="collapse" data-target="#collapse-nav" aria-expanded="false" aria-controls="collapseExample">
							<span class="fa fa-navicon fa-2x"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<nav class="row collapse" id="collapse-nav">
	<div class="container">
		<div class="row">
			<a class="col-sm-3 gutter align-items-center justify-content-center" onclick="window.location.href='http://feversoul.com/w/?page_id=33'">
				<span class="fa fa-user-o fa-2x"></span>OUR TEAM
			</a>
			<a class="col-sm-3 gutter align-items-center justify-content-center" onclick="window.location.href='http://feversoul.com/w/?page_id=58062'">
				<span class="fa fa-book fa-2x"></span>OUR SERVICES
			</a>
			<a class="col-sm-3 gutter align-items-center justify-content-center" onclick="window.location.href='http://feversoul.com/w/?page_id=58085'">
			<span class="fa fa-trophy fa-2x"></span>OUR SUCCESS
			</a>
			<a class="col-sm-3 gutter align-items-center justify-content-center" onclick="window.location.href='http://feversoul.com/w/?page_id=58103'">
			<span class="fa fa-comments fa-2x"></span>CONTACT
			</a>
		</div>
	</div>
</nav>
<div class="content-container">
<!--/ header --> 
 