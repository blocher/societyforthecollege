<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div class="page_wrap">
			<div class="content_social">
				<div class="social_wrap">
					<div class="fb-like" data-href="<?php echo the_permalink() ?>" data-width="450" data-layout="box_count" data-show-faces="true" data-send="true"></div>
					<a href="https://twitter.com/share" class="twitter-share-button" data-text="<?php the_title(); ?>" data-via="SocietyForWM" data-count="vertical">Tweet</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</div><!-- /.social_wrap -->
			</div><!-- /.content_social -->
			<div class="content_wrap">
		
				<article>
				
					<h2><?php the_title(); ?></h2>
					
					<div class="meta-info">
						<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time> 
						<span class="hidden-phone"> &nbsp; | &nbsp;
						<strong>Share Link:</strong> &nbsp; <a href="<?php echo get_permalink(); ?>"><?php echo get_permalink(); ?></a></span>
					</div><!-- /meta-info -->
					
					<?php the_content(); ?>			
				
					<?php if ( get_the_author_meta( 'description' ) ) : ?>
					<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
					<h3>About <?php echo get_the_author() ; ?></h3>
					<?php the_author_meta( 'description' ); ?>
					<?php endif; ?>
				
					<?php comments_template( '', true ); ?>
				
				</article>
			<?php endwhile; ?>
		
			</div><!-- /.content_wrap -->
		</div><!-- /.page_wrap -->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>