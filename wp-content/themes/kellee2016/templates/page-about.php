<?php
/**
 * Template Name: About
 *
 * @package kellee
 */

get_header();

?>

	<?php
            if ( have_posts() ):
                while ( have_posts() ): 
                    the_post();
        ?>   

						<div class="about-page">
							<div class="container">
								<div><?php the_post_thumbnail(); ?></div>
								<h1><?php the_title(); ?></h1>
								<?php the_content(); ?>
							</div>
						</div>
	<?php   
                endwhile;
            endif;
        ?>					

<?php get_footer();