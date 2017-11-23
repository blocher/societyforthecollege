<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	  		<script>

					var userAgentString = navigator.userAgent;

					if ( userAgentString.indexOf('iPad') == -1 ){
						var viewport = document.createElement('meta');
						viewport.setAttribute('name', 'viewport');
						viewport.setAttribute('content', 'width=device-width');
						document.getElementsByTagName('head')[0].appendChild( viewport );
					}

					else {
						var viewport = document.createElement('meta');
						viewport.setAttribute('name', 'viewport');
						viewport.setAttribute('content', 'width=1024');
						document.getElementsByTagName('head')[0].appendChild( viewport );
					}

	  		</script>

	  	<!-- HTML5 Shiv for IE8 and below -->
	  			<!--[if lt IE 9]>
	  	  			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	  			<![endif]-->

	  			<!-- Specical Stylesheet for IE8 and below -->
	  			<!--[if lt IE 9]>
	  	  			<link href="<?php echo get_template_directory_uri();?>/css/ie8.css" rel="stylesheet" type="text/css">
	  			<![endif]-->

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon_idevice.png" />

		<!-- FONT Calls -->
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>


		<!-- JS Calls -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/jquery.bxslider.min.js"></script>
		<link href="<?php echo get_template_directory_uri();?>/css/jquery.bxslider.css" rel="stylesheet" />

		<!-- CSS Calls -->

				<?php

				// Stylesheets
				wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css', false );
				wp_enqueue_style( 'boostrap', get_template_directory_uri() . '/css/bootstrap.css', false );
				wp_enqueue_style( 'bootstrap-responsive', get_template_directory_uri() . '/css/bootstrap-responsive.css', false );
				wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/driver.css', false );
				wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/css/media-queries.css', false );
				wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css', false );

				?>

		<!-- Open Graph -->

				<?php

				// If post, put "article"
				if ( get_post_type() == 'page' ){
					$post_type = 'website';
				}
				else {
					$post_type = 'article';
				}

				// If post has featured image, put Open Graph image.  Else, put logo.
				if ( has_post_thumbnail() ){
					$image_url = wp_get_attachment_image_src( get_post_thumbnail_id() ,’large’, true );
					$image_url = $image_url[0];
				}
				else {
					$image_url = get_template_directory_uri(). '/img/logo_facebook.png';
				}

				// use the first two sentences as the description
				$post_object = get_post( $post_id );
				$post_content = $post_object->post_content;
				$post_content = strip_tags($post_content);
				$post_content = explode('. ', $post_content);
				$post_content = array_slice($post_content, 0, 2);
				$post_content = implode('. ', $post_content);
				$meta_description = $post_content . '.';

				?>



		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=533565373371000";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
