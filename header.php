<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow">
    <meta name="Googlebot" content="index, follow">
    <title><?php echo get_bloginfo('name'); ?></title>
    <meta name="description" content="<?php echo get_bloginfo( 'description' );?>">
    <meta name="keywords" content="Poëzie, verzen, Jeremy Lanssiers, Powezielabo">
    <meta name="author" content="Jeremy Lanssiers">
    
    <link rel="canonical" href="https://www.jeremylanssiers.com/powezielabo" />
    <link rel="manifest" href="<?php echo get_bloginfo( 'template_directory' );?>/manifest.json">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_bloginfo( 'template_directory' );?>/favicon.ico" />
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">

    <meta property="og:title" content="<?php echo get_bloginfo('name'); ?>" />
    <meta property="og:description" content="<?php echo get_bloginfo( 'description' );?>" />
	<meta property="og:image" content="<?php echo get_bloginfo('template_directory'); ?>ogImage.jpg" />

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.js"></script>-->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/scripts.js" type="text/javascript"></script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M45DG3');</script>
    <!-- End Google Tag Manager -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>
<!--googleoff: all-->
	<div id="navbar">
		<div id="navToggle" class="notClicked">
			<a href="javascript:void(0);" id="navToggle-btn" class="right" onclick="menuCollapse()">&#9776;</a>
			<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
        </div>
	</div>
<!--googleon: all-->
	<div id="header">
		<div id="headerBoxWrapper">
			<a href="<?php echo get_bloginfo( 'wpurl' );?>">
				<div id="headerBox">
					<h1 class="sansSerif">
						<?php echo get_bloginfo('name'); ?>
					</h1>
					<p><?php echo get_bloginfo('description'); ?></p>
				</div>
			</a>
		</div>
	</div>

	<div id="mainContainer">
		<div id="mainWrapper">
