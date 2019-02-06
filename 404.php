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
    <style type="text/css">
		body {
			line-height: 2em;
		}
		p {
			padding:0;
		}
		h1 {
			padding: 0;
		}
		h1:before, h1:after {
		    display: flex;
		    margin: .5em auto 0;
		    border-top: 5px solid #f70d8a;
		    height: .5em;
		    vertical-align: bottom;
		    content: "";
		}
		h1:before {
			width:25%;
		}
		h1:after {
			width: 75%;
		}
		h1:hover {
			color: unset;
		}
		#mainWrapper {
			max-width: unset; width:calc(650px - 2em);padding: 5vh 0 0 0;
		}
	</style>
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
<body style="background-color: #fff;">
	<div id="mainContainer">
			<div id="mainWrapper">
	            <h1 class="sansSerif centerTxt">404, A.K.A. NOT FUCKING FOUND</h1>
	            <img src="https://www.jeremylanssiers.com/assets/samuelLJackson.gif" style="display: block; margin: 0 auto; height: 250px;">
	            <p>The fucking page you were looking for wasn't fucking found. Don't waste this server's fucking time, motherfucker. Or I will strike down upon thee with great vegeance and furious anger. And you will know, my name is the LORD!</p>
	            <p>Sincerely, <a href="https://www.jeremylanssiers.com" target="self">www.jeremy fucking lanssiers.com</a></p>
	        </section>
		</div>
	</div>
</body>