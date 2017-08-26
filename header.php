<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=0">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">

<title><?php echo get_bloginfo( 'name' ); ?></title>

<!-- Bootstrap core CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<script src="https://use.fontawesome.com/c3a481dfde.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/functions.js"></script>
<!-- Custom styles for this template -->
<link href="<?php echo get_bloginfo('template_directory'); ?>/blog.css" rel="stylesheet">
<link href="<?php echo get_bloginfo('template_directory');?>/mobile.css" type="text/css" media="only screen and (max-device-width: 480px)" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body>
<div id="top"></div>
	<div class="blog-masthead">
		<div class="container fixed">
			<nav class="blog-nav" style="font-family:Lane;">
				<img class="header-logo" src="<?php echo get_bloginfo('template_directory'); ?>/img/rpm-logo-darker.png" alt="header_logo" />
				<div id="desktop-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</div>
				<div id="mobile-menu">
					<div id="menu-button">
						<i class="fa fa-bars" aria-hidden="true" onclick="expandMenu(this,'menu-items');"></i>
					</div>
				</div>

			</nav>
		</div>
		<div id="menu-items" class="invisible lane"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></div>
		<div id="langbar"><?php dynamic_sidebar( 'lang_bar_1' ); ?> </div>
		<a href="#top"><div class="backtotop"><i class="fa fa-level-up" aria-hidden="true"></i></div></a>
	</div>

