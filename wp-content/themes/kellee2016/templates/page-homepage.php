<?php
/**
 * Template Name: Homepage
 *
 * @package kellee
 */

$custom_meta = get_post_meta( get_the_ID() );
$imagedir = get_stylesheet_directory_uri() . "/assets/img";


function get_safe_meta( $key ) {
	global $custom_meta;
	return ( isset( $custom_meta[ $key ] ) && isset( $custom_meta[ $key ][0] ))
	? $custom_meta[ $key ][0]
	: "";
}

$form = get_safe_meta( '_kellee_form' );

get_header();

?>

<div class="home">
	
	<section>
		<div id="hero" class="hero">
			<div class="container">
				<h1>Kellee Martins</h1>
				<h2>Web Developer</h2>
				<div class="social-icons">
					<a href="https://github.com/kellsbells" target="_blank"> 
						<img src="<?php echo $imagedir ?>/icons/github.png">
					</a>
					<a href="http://instagram.com/kelleebutton/" target="_blank">
						<img src="<?php echo $imagedir ?>/icons/instagram.png">
					</a>
					<a href="https://www.linkedin.com/in/kelleemartins" target="_blank">
						<img src="<?php echo $imagedir ?>/icons/linkedin.png">
					</a>
					<a href="https://twitter.com/kelleebutton" target="_blank">
						<img src="<?php echo $imagedir ?>/icons/twitter.png">
					</a>
					<a href="https://www.facebook.com/kelleedawn" target="_blank">
						<img src="<?php echo $imagedir ?>/icons/facebook.png">
					</a>
					<a href="https://www.pinterest.com/kelleemartins/" target="_blank">
						<img src="<?php echo $imagedir ?>/icons/pinterest.png">
					</a>
					<a href="https://plus.google.com/u/0/114655936823227127569" target="_blank">
						<img src="<?php echo $imagedir ?>/icons/google-plus.png">
					</a>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div id="about" class="about">
			<div class="container">
				<h2>About Me</h2>
				<div class="imagetext">
					<img src="<?php echo $imagedir ?>/kellee.jpg" class="image">
					<div class="text">
						<p>About Kellee</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div id="tech" class="tech">
			<div class="container">
				<h2>What I Know and What I've Done</h2>
				<div class="icon-container">
					<img src="<?php echo $imagedir ?>/icons/html5.png">
					<img src="<?php echo $imagedir ?>/icons/css3.png">
					<img src="<?php echo $imagedir ?>/icons/javascript.png">
					<img src="<?php echo $imagedir ?>/icons/jquery.png">
					<img src="<?php echo $imagedir ?>/icons/angular.png">
					<img src="<?php echo $imagedir ?>/icons/wordpress.png">
					<img src="<?php echo $imagedir ?>/icons/php.png">
					<img src="<?php echo $imagedir ?>/icons/git.png">
					<img src="<?php echo $imagedir ?>/icons/sass.png">
					<img src="<?php echo $imagedir ?>/icons/susy.png">
					<img src="<?php echo $imagedir ?>/icons/gulp.png">
					<img src="<?php echo $imagedir ?>/icons/shopify.png">
					<img src="<?php echo $imagedir ?>/icons/photoshop.png">
					<img src="<?php echo $imagedir ?>/icons/bootstrap.png">
				</div>
				<div class="cta-buttons">
					<button class="button js-toggle-work">View Work History</button>
					<a href="<?php echo $imagedir ?>/Kellee-Martins-Resume.pdf" download class="button">Download Resume</a>
				</div>	
				<div class="work-history">
					<div class="job">
						<h3><a href="http://voltagead.com/">Voltage Advertising</a>: Web Developer</h3>
						<p>Senior: Randy Lybbert <a href="tel:7069948262">(706) 994-8262</a></p>
						<p>Mentor & Former Senior: Craig Freeman <a href="tel:6195592580">(619) 559-2580</a></p>
					</div>
					<div class="job">
						<h3><a href="http://ekragency.com/">Eli Kirk</a>/Novell: HTML Web Developer</h3>
						<p>Supervisor: Jarid Love <a href="tel:8013779321">(801) 377-9321</a></p>
					</div>
					<div class="job">
						<h3><a href="http://heritagemakers.com/">Heritage Makers</a>: Supervising Customer Support Agent</h3>
						<p>Supervisor: Suzy Berg <a href="tel:8014378000">(801) 437-8000</a></p>
					</div>
					<div class="job">
						<h3><a href="http://home.byu.edu/home/">Brigham Young University</a>: Lead Student Custodian</h3>
						<p>Supervisor: Thom Rudd <a href="tel:8016025507">(801) 602-5507</a></p>
					</div>
					<div class="job">
						<h3><a href="http://www.brockcabinets.com/">Brock Cabinets Inc.</a>: Assistant to GM</h3>
						<p>Supervisor: Nephi Brock <a href="tel:9104241776">(910) 424-1776</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div id="portfolio" class="portfolio">
			<div class="container">
				<h2>My Portfolio</h2>
				<p>A bunch of my stuff.</p>
				<div class="grid">

					<?php
					  	/* Retrieve all posts of type project */
					  	$project_args = array(
					  	    'posts_per_page'   => -1,
					  	    'orderby'          => 'title',
					  	    'order'            => 'ASC',
					  	    'post_type'        => 'projects'
					  	);
					  	
					  	$projects_query = new WP_Query( $project_args );
					  	while ( $projects_query->have_posts() ): $projects_query->the_post();
					?>
						<a href="<?php echo the_permalink(); ?>" class="grid-item"><?php the_post_thumbnail(); ?></a>
					<?php endwhile; ?>
				</div>	
			</div>
		</div>
	</section>
	<section>
		<div id="contact" class="contact">
			<div class="container">
				<h2>Contact Me</h2>
				<?php if ( isset( $form ) && ! empty( $form ) ):
					echo do_shortcode( $form );
				endif; ?>	
			</div>
		</div>
	</section>
</div>

<?php get_footer();