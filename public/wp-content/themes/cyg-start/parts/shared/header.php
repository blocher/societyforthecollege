<?php wp_enqueue_script('navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery') ); ?>
<?php wp_enqueue_script('hoverintent', get_template_directory_uri() . '/js/hoverintent.js', array('jquery') ); ?>

<header>
	<?php get_template_part('parts/shared/top-nav'); ?>
</header>

<div class="container">
	<div class="row">
		<div class="page_container">
			<div class="page_body">
