<div class="container hidden-phone">
	<div class="row">
		<div class="site_header">
			<div class="site_header_logo">
				<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/img/header_logo.png" alt="The Society for the College" border="0"></a>
			</div><!-- /.site_header_logo -->
			<div class="site_header_menu">
				<?php wp_nav_menu( array(
						'menu' => 'Main Navigation',
						'container' => ''
					) ) ; ?>
					
				<div class="social_buttons">
					<a href="https://www.facebook.com/pages/The-Society-for-the-College/233112646774873?sk=timeline" target="_blank" class="img-circle"><img src="<?php echo get_template_directory_uri();?>/img/social_facebook.png" border="0" alt="Connect with The Society on Facebook" /></a>
					<a href="http://twitter.com/societyforwm" target="_blank" class="img-circle"><img src="<?php echo get_template_directory_uri();?>/img/social_twitter.png" border="0" alt="Connect with The Society on Twitter" /></a>
				</div><!-- /.top_bar_social -->
			</div><!-- /.site_header_menu -->
			<div class="site_header_social">
			
			</div><!-- /.site_header_social -->
		</div><!-- /.site_header -->
	</div><!-- /.row -->
</div><!-- /.container -->	

<div class="site_header_phone">
	<h1><a href="<?php echo home_url(); ?>" title="Go to Homepage"><img src="<?php echo get_template_directory_uri();?>/img/header_logo.png" border="0" alt="The Society for the College" /></a></h1>
	
	<nav class="mobile_menu hidden-desktop hidden-tablet">
		<a id="menu_toggle" class="open_menu_button" href=""><i class="icon-reorder icon"></i>MENU</a>
		<?php wp_nav_menu( array(
				'menu' => 'Main Navigation',
				'container' => ''
			) ) ; ?>
	</nav><!-- /.mobile_menu -->
</div><!-- /.site_header_phone -->