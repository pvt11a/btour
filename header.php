<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta name="author" content="pvt" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
<link rel="shortcut icon" href="<?php echo bloginfo('template_directory'); ?>/images/searchbtn.PNG"/>
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11"/>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/> 
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <div class="container">
        <h1><a href="<?php echo get_site_url(); ?>">LOGO</a></h1>
    </div><!--end .container-->
</header>
<nav>
    <?php 
        wp_nav_menu(
            array(
                'theme_location' => 'main-menu',
                'container'=>'',
                'fallback_cb' => 'alert_menu'
                )
        );   
    ?>    
</nav>
