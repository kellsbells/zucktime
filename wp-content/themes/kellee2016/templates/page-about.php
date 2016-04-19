<?php
/**
 * Template Name: About
 *
 * @package kellee
 */

get_header();

?>

	<div class="about">
		<div class="container">
			<div><?php the_post_thumbnail(); ?></div>
			<h1><?php the_title(); ?></h1>
			<div><?php the_content(); ?></div>
		</div>
	</div>

<?php get_footer();