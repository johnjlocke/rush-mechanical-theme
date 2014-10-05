<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="57x57" href="/wp-content/favicons/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="/wp-content/favicons/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="/wp-content/favicons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="/wp-content/favicons/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="60x60" href="/wp-content/favicons/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="/wp-content/favicons/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="/wp-content/favicons/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="/wp-content/favicons/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="/wp-content/favicons/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="/wp-content/favicons/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="/wp-content/favicons/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="/wp-content/favicons/favicon-160x160.png" sizes="160x160" />
	<link rel="shortcut icon" type="image/x-icon" href="/wp-content/favicons/favicon.ico">

	<!--[if IE]>
		<link rel="shortcut icon" href="/favicon.ico">
	<![endif]-->
	<!-- Favicon for IE10 Win -->
	<meta name="msapplication-TileColor" content="#224668">
	<meta name="msapplication-TileImage" content="/wp-content/favicons/win8-tile-icon.png">


<link href='http://fonts.googleapis.com/css?family=Lato:400,700,300italic,900italic|Arvo:700' rel='stylesheet' type='text/css'> 
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <style>
      .screen-reader-text {visibility: hidden; opacity: 0;}
    </style>
<![endif]-->
<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <?php do_action( 'before' ); ?>
	<div id="masthead" class="site-header header" role="banner">
		<div class="site-branding">
                   <div class="header-inner-wrap">
                     <div class="header-main-info header-span3">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Rush<br/>Mechanical</a></h1>
                        <div class="menu-toggle" id="mobile-toggle"><span>MENU</span><br><img src="/wp-content/themes/rush-mechanical/rush-mechanical/images/menu-icon.png" alt="Mobile Menu Icon" /></div> 
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                     </div>
                     <div class="header-secondary header-span3">
                       <p><span class="callus">Call Us:</span><br> <span class="lrg-phone"><a href="tel:19164860517">(916) 486-0517</a></span></p>
                       <p class="disappear"><span class="emergency">24 Hour Emergency Service</span><img src="/wp-content/uploads/2014/01/logo-bbb.png" alt="Better Business Bureau A+ Accredited Business" class="bbb-header" /></p>
                     </div>
                     <div class="header-tertiary header-span3 disappear">
                       <a href="http://rushmechanical.net/schedule-hvac-service/" class="lt-blue-btn">Schedule Service</a>
                       <a href="http://rushmechanical.net/sacramento-hvac-equipment" class="lt-grn-btn tighten-text"><span class="subtext">Request Estimate on</span> Equipment</a>
                     </div>
                  </div>
		</div>

		<div id="site-navigation" class="main-navigation" role="navigation">
                   <div class="header-inner-wrap">
			<!-- <div class="menu-toggle" id="mobile-toggle"><?php /* _e( '', 'rush-mechanical' ); */ ?><img src="/wp-content/themes/rush-mechanical/rush-mechanical/images/menu-icon.png" alt="Mobile Menu Icon" /></div> -->
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'rush-mechanical' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                   </div>
		</div><!-- #site-navigation -->
	</div><!-- #masthead .header  -->

	<div id="content" class="site-content">
