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

//Purple Section

$home_purple_heading = get_safe_meta( '_kellee_home_purple_heading' );

$home_purple_subheading = get_safe_meta( '_kellee_home_purple_subheading' );


//Green Section    

$home_home_green_grid_title_one = get_safe_meta( '_kellee_home_green_grid_title_one' );

$home_home_green_grid_title_two = get_safe_meta( '_kellee_home_green_grid_title_two' );

$grid_repeater = ( isset( $custom_meta['_kellee_home_green_grid_repeater'] ) && isset( $custom_meta['_kellee_home_green_grid_repeater'][0] ))
    ? maybe_unserialize( $custom_meta['_kellee_home_green_grid_repeater'][0] )
    : "";

$home_green_subsection_heading = get_safe_meta( '_kellee_home_green_subsection_heading' );

$home_green_subsection_subheading = get_safe_meta( '_kellee_home_green_subsection_subheading' );  

$home_green_subsection_copy = get_safe_meta( '_kellee_home_green_subsection_copy' );  

$home_green_cta_heading = get_safe_meta( '_kellee_home_green_cta_heading' );  

$home_green_cta_button_text = get_safe_meta( '_kellee_home_green_cta_button_text' );  

$home_green_cta_button_link = get_safe_meta( '_kellee_home_green_cta_button_link' );  


//Blue Section 

$home_blue_heading = get_safe_meta( '_kellee_home_blue_heading' );  

$home_blue_spotify_url = get_safe_meta( '_kellee_home_blue_spotify_url' );  

// $home_blue_apple_url = get_safe_meta( '_kellee_home_blue_apple_url' ); 

$home_blue_youtube_url = get_safe_meta( '_kellee_home_blue_youtube_url' );  




get_header();

?>

<div class="homepage">
	<section class="purple-section js-pink-navigation js-changing-div">
		<h5 class="artist-title-space js-artist-title-space uppercase"></h5>
			<div class="purple-overlay">
				
				<div class="diagonal"></div>

				<div class="page-content">
					<section class="kellee-heading">
						<img src="<?php echo $imagedir ?>/svglogo-randy.svg">
					</section>
					<?php if ( isset( $home_purple_heading ) && ! empty( $home_purple_heading ) ): ?>
						<section class="focus sub-hero-text small-container js-show-logo">
							<h1 class="text-pink uppercase"><?php echo $home_purple_heading; ?></h1>
						</section>
					<?php endif; ?>	
					<?php if ( isset( $home_purple_subheading ) && ! empty( $home_purple_subheading ) ): ?>
						<section class="focus sub-heading small-container">
							<h3><?php echo $home_purple_subheading; ?></h3>
						</section>
					<?php endif; ?>	
				</div>	

			</div>	
		
	</section>
	<section class="green-section js-yellow-navigation js-changing-div">	
		<div class="green-overlay">	
			<div class="page-content">
				<section class="focus everything-you-need container">
					<?php if ( isset( $home_home_green_grid_title_one ) && ! empty( $home_home_green_grid_title_one ) ): ?>
						<h2 class="text-yellow"><?php echo $home_home_green_grid_title_one; ?></h2>
					<?php endif; ?>	
					<?php if ( isset( $home_home_green_grid_title_two ) && ! empty( $home_home_green_grid_title_two ) ): ?>
						<h2><?php echo $home_home_green_grid_title_two ?></h2>
					<?php endif; ?>
				</section>
				<section class="container three-columns everything-you-need">
					<?php
						if (! empty( $grid_repeater ) ):
							foreach ( $grid_repeater as $grid_item ): ?>
								<div class="column">
									<?php if ( array_key_exists( '_kellee_grid_green_repeater_icon', $grid_item ) && !empty( $grid_item[ '_kellee_grid_green_repeater_icon' ] ) ): ?>
										<img src="<?php echo $grid_item['_kellee_grid_green_repeater_icon'] ?>">
									<?php endif; ?>

									<?php if ( array_key_exists( '_kellee_grid_green_repeater_heading', $grid_item ) && !empty( $grid_item[ '_kellee_grid_green_repeater_heading' ] ) ): ?>
										<h4 class="text-yellow"><?php echo $grid_item['_kellee_grid_green_repeater_heading']; ?></h4>
									<?php endif; ?>

									<?php if ( array_key_exists( '_kellee_grid_green_repeater_copy', $grid_item ) && !empty( $grid_item[ '_kellee_grid_green_repeater_copy' ] ) ): ?>
										<p><?php echo $grid_item['_kellee_grid_green_repeater_copy']; ?></p>
									<?php endif; ?>
								</div>
					<?php
			                endforeach;
			            endif;
			        ?>
				</section>
				<?php if ( isset( $home_green_subsection_heading ) && ! empty( $home_green_subsection_heading ) ): ?>
					<section class="container focus built-kellee">
						<h2 class="text-yellow"><?php echo $home_green_subsection_heading; ?></h2>
					</section>
				<?php endif; ?>
				<section class="container two-columns">
					<?php if ( isset( $home_green_subsection_subheading ) && ! empty( $home_green_subsection_subheading ) ): ?>
						<div class="column close-text">
							<h4><?php echo $home_green_subsection_subheading; ?></h4>
						</div>
					<?php endif; ?>	
					<?php if ( isset( $home_green_subsection_copy ) && ! empty( $home_green_subsection_copy ) ): ?>
						<div class="column close-text">
							<p><?php echo $home_green_subsection_copy; ?></p>
						</div>
					<?php endif; ?>	
				</section>
				<section class="focus learn-more small-container">
					<?php if ( isset( $home_green_cta_heading ) && ! empty( $home_green_cta_heading ) ): ?>
						<h3 class="text-yellow"><?php echo $home_green_cta_heading; ?></h3>
					<?php endif; ?>	
					<?php if ( isset( $home_green_cta_button_link ) && ! empty( $home_green_cta_button_link ) ): ?>
						<a class="button page-button yellow" href="<?php echo $home_green_cta_button_link; ?>"><?php echo $home_green_cta_button_text; ?></a>
					<?php endif; ?>	
				</section>
			</div>	
		</div>	
	</section>
	<section class="blue-section js-orange-navigation js-changing-div">
		<div class="blue-overlay">
			<div class="page-content">
				<?php if ( isset( $home_blue_heading ) && ! empty( $home_blue_heading ) ): ?>
					<section class="focus trending-tracks small-container">
						<h1 class="text-orange uppercase"><?php echo $home_blue_heading; ?></h1>
					</section>
				<?php endif; ?>
				<?php if ( isset( $home_blue_spotify_url ) && ! empty( $home_blue_spotify_url ) ): ?>
					<section>
						<div class="spotify-logo">
							<img src="<?php echo $imagedir ?>/spotify.png">
						</div>	
						<div class='embed-container spotify-embed-container'>
						    <iframe width='620' height='700' src='<?php echo $home_blue_spotify_url; ?>' frameborder='0' allowtransparency='true'></iframe>
						</div>
					</section>
				<?php endif; ?>	
				<?php if ( isset( $home_blue_youtube_url ) && ! empty( $home_blue_youtube_url ) ): ?>
					<section class="container">
						<div class="youtube-logo">
							<img src="<?php echo $imagedir ?>/youtube.png">
						</div>	
						<div class='embed-container fitvid-embed js-fitvid-embed'>
						    <iframe width='620' height='348' src="<?php echo $home_blue_youtube_url; ?>"></iframe>
						</div>
					</section>
				<?php endif; ?>	
			</div>	
		</div>	
	</section>
	<section class="shark-section js-lime-navigation js-changing-div">	
		<div class="shark-overlay">
			<div class="page-content"> 
				<section class="focus join-us small-container hide-on-success">
					<h1 class="text-green uppercase">Join Us</h1>
				</section>
				<p class="signup-success signup-success-form small-container">
					<span class="uppercase text-green">Thank you</span><br>
					Thank you for your interest in kellee! Please verify your email address by clicking the link we just sent you in order to continue the application.
				</p>
				<section class="container two-columns join-us-form">
					<div class="column hide-on-success">
						<h4>We&rsquo;ll send you an email with application and membership details.</h4>
						<p>Still have questions? <a href="/faq/">See our FAQ</a> or email us at <a href="mailto:info@kellee.com"> info@kellee.com</a></p>
					</div>
					<div class="column">
						<form class="signup-box" action="//kellee.us2.list-manage.com/subscribe/post-json?u=975de89ee399d461596c8824b&amp;id=9732344b12&c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
									
							<input type="text" required value="" name="FNAME" class="hide-on-success" id="mce-FNAME" placeholder="First Name">
							<input type="text" required value="" name="LNAME" class="hide-on-success" id="mce-LNAME" placeholder="Last Name">
							<input type="email" required name="EMAIL" class="email-input required email hide-on-success" id="mce-EMAIL" placeholder="Email">
							
							<input class="button page-button green hide-on-success" type="submit" value="Apply">

							<div class="form-message">
								<p class="invalid-email text-pink">
									Please enter a valid email address.
								</p>
								
								<p class="signup-failure text-pink">
									There was a problem submitting your form. Please double check the fields and try again.
								</p>
							</div>	
						</form>
					</div>
				</section>
			</div>	
		</div>	
	</section>	
</div>	

<?php get_footer();