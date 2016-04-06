<?php
/**
 * Template part for displaying single posts.
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="single-project">
		<div class="container">
			<div><?php the_post_thumbnail(); ?></div>
			<h1><?php the_title(); ?></h1>
			<div><?php the_content(); ?></div>
		</div>
	</div>

</article><!-- #post-## -->

