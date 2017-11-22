<?php
/*
 Template Name: Homepage
 */
 
 Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header') );
 
?>
		<div class="page_wrap">
			<div class="home_slider hidden-phone">
				<img src="<?php echo get_template_directory_uri();?>/img/home_splash.jpg" alt="William and Mary University" />
			</div><!-- /.home_slider -->
			
			<div class="home_content">
				<h2>Welcome...</h2>
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
					
				<div class="mail-form">
					<!-- Begin MailChimp Signup Form -->
					<link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
					<div id="mc_embed_signup">
					<form action="//societyforthecollege.us5.list-manage.com/subscribe/post?u=e8240ccf0a667fc8478a906ad&amp;id=ff6b684c6f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    <div id="mc_embed_signup_scroll">
					    <label for="mce-EMAIL">Subscribe to our mailing list:</label>
					    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
					    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;"><input type="text" name="b_e8240ccf0a667fc8478a906ad_ff6b684c6f" tabindex="-1" value=""></div>
					    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					    </div>
					</form>
					</div>
				</div><!-- /.mail-form -->
				
				<!--End mc_embed_signup-->
					
				<h2>Upcoming Board Meetings:</h2>
					<?php 
					$page_id = 213; 
					$page_data = get_page( $page_id ); 
					echo apply_filters('the_content', $page_data->post_content); 
					?>
					
				<div class="home-row">
					<div class="home-column twitter-column">
					
						<h2>Twitter:</h2>
						
						<a class="twitter-timeline"  href="https://twitter.com/SocietyforWM" data-widget-id="586928193795395584">Tweets by @SocietyforWM</a>
						            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						            
					</div><!-- /.home-column -->
					<div class="home-column">
				
						<h2>News:</h2>
						
						<?php $new_loop = new WP_Query( array(
																'category_name' => 'news',
																'posts_per_page' => 3
															) );
										?>
														
												<?php while ($new_loop->have_posts()) : $new_loop->the_post(); ?>
												
													<div class="home_post">
														<h3 class="blog"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
														<?php the_excerpt(); ?>
													</div><!-- /.home_post -->
						
												<?php endwhile; ?>
												<?php wp_reset_query(); ?>
												
						<a href="<?php echo home_url(); ?>/category/news">&#8592; Read More</a>
						
					</div><!-- /.home-column -->
				</div><!-- /.home-row -->
			
			</div><!-- /.home_content -->
		</div><!-- /.page_wrap -->
		
		
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>