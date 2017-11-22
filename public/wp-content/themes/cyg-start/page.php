<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
	
		<div class="page_wrap">
			<div class="content_social">
				<div class="social_wrap">
					<div class="fb-like" data-href="<?php echo the_permalink() ?>" data-width="450" data-layout="box_count" data-show-faces="true" data-send="true"></div>
					<a href="https://twitter.com/share" class="twitter-share-button" data-text="Check out the Society for the College at William and Mary" data-via="@SocietyforWM" data-count="vertical">Tweet</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</div><!-- /.social_wrap -->
			</div><!-- /.content_social -->
			<div class="content_wrap">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<?php comments_template( '', false ); ?>
				<?php endwhile; ?>
			</div><!-- /.content_wrap -->
		</div><!-- /.page_wrap -->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>