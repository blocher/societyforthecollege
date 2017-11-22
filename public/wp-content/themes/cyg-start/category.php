<?php
/**
 * The template for displaying Category Archive pages
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
		<div class="content_wrap">
			<?php if ( have_posts() ): ?>
			<h2><?php echo single_cat_title( '', false ); ?></h2>
			<?php while ( have_posts() ) : the_post(); ?>
					<article>
						<h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>Posted <?php echo get_the_date(); ?></time> 
						<?php the_excerpt(); ?>
					</article>
			<?php endwhile; ?>
			<div class="nav-previous alignleft">&#8592; <?php next_posts_link( 'Older posts' ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?> &#8594;</div>
			<?php else: ?>
			<h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>
			<?php endif; ?>
			
			
		</div><!-- /.content_wrap -->
	</div><!-- /.page_wrap -->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>