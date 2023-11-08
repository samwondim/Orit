<?php
if(is_page('about') || is_page('workloading') || is_page('assets') || is_page('inventory')) {
	get_header('new');
} else if(is_page('inventory')) {
	get_header('inventory');
}
else {
	get_header();
}
?>
<main id="" class="">
	<?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', 'page');
		the_content();
		endwhile; // End of the loop.
	?>
	<!-- < ?php do_shortcode("[mp_gl_chat_ui]"); ?> -->
</main><!-- #main -->
<?php
if(is_page('workloading') || is_page('assets'))  {
	get_footer('new');
} else if('inventory') {
	get_footer('inventory');
}
else {
	get_footer();
}