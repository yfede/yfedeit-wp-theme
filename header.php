<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_enqueue_script("jquery"); ?>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>

	<!-- Page menu code -->
	<script type='text/javascript'> 
	jQuery(document).ready(function() { 
	jQuery("#dropmenu ul").css({display: "none"}); // Opera Fix 
	jQuery("#dropmenu li").hover(function(){ 
			jQuery(this).find('ul:first').css({visibility: "visible",display: "none"}).show(268); 
			},function(){ 
			jQuery(this).find('ul:first').css({visibility: "hidden"}); 
			}); 
	}); 
	</script> 
	<!-- End Page mneu Code -->
</head>
<body>


<div id="main_center">
<div id="left_col">

	<!-- Header -->
	<div id="left_header">
		<div id="emaillink"><a href="mailto:<?php bloginfo('admin_email'); ?>"></a></div>
		<div id="rsslink"><a href="<?php bloginfo('rss2_url'); ?>"></a></div>
		<div id="facebooklink"><a href="http://www.facebook.com/yfede.it"></a></div>
		<div id="blog_title">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<h2><?php bloginfo('description'); ?></h2>
		</div>
		
		<div id="splashimage"><a href="<?php echo get_option('home'); ?>"></a></div>

	</div>

	<div id="main_topmenu">
		<ul id="dropmenu"> 
		<li class="page_item"><a href="<?php echo get_option('home'); ?>/"  id="homelink" title="Home" >Home</a></li>
		<?php wp_list_pages('sort_column=menu_order&title_li='); ?>
		</ul> 
	</div><!-- End main_topmenu -->
	
		


