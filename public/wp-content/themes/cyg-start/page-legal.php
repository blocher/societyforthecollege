<?php
/*
 Template Name: Legal Page
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
	
		<div class="page_wrap">
			<div class="content_wrap">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<?php comments_template( '', false ); ?>
				<?php endwhile; ?>
			</div><!-- /.content_wrap -->
		</div><!-- /.page_wrap -->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>