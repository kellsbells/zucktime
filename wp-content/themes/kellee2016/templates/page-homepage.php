<?php
/**
 * Template Name: Homepage
 *
 * @package kellee
 */

$imagedir = get_stylesheet_directory_uri() . "/assets/img";
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
					<p class="text">I guess it all started when I wanted to write a blog and was trying to find a design. Nothing seemed totally right and I had ideas of my own I wanted to implement. So I started by deleting lines of code and seeing how it changed the page. That was pretty much the beginning of the end because I haven't stopped coding since, although now I try to take a little bit more of an educated approach.

					After breaking down countless blogs I decided to take it a step further and applied and was accepted to DevMountain, an intensive, twelve week front end web development bootcamp. My experience there was mind-blowing. The world of web development totally opened up to me and I fell in love. Each lesson was incredibly fast paced and pretty much a whirlwind, it was amazing. You can check out their cirriculum here to get a better idea of what I learned during the course.

					Towards the end of my time at DevMountain I was actually approached by the team of another local web development bootcamp, Isomer. They needed some additional design and development help and offered to allow me to take the class for free in exchange for my work on various projects. It was a fantastic opportunity to really experiment with my skills. Isomer was a much more selective community and I was able to get lots of one on one with the instructors to broaden and solidify my understanding of more complex development concepts. Check out their website here if you're interested to know what was covered in the course. And watch that video on the front page, I'm in it!

					So that's what I've done but what can I actually do? HTML5, CSS3, JavaScript, AngularJS, JQuery, NodeJS, Express, Bootstrap, Git & Github, Photoshop, Illustrator

					I’m very important. I have many leather-bound books and my apartment smells of rich mahogany.

					Ron Burgundy Anchorman
					But who is Kellee really? Who is she as a person? As an employee? I guess that is pretty relevant to talk about. I like to think of myself as a "sunshiney" person. I'm calm and almost always good humored. I'm a 0 or 100 kind of person. I don't get into much, but when I find something I love, I obsess. That's when I made the career switch to web development, from the beginning it was a '100' kind of thing. Consequently I don't have tons of hobbies, but I do have a few that I really love. I love to hike and run and be outdoors. I love photography and do a lot with graphic design. I'm suffering from an extreme Netflix addiction currently and I love all things architecture.

					Actually since I was young I wanted to be an architect. I loved drafting, creating these buildings from nothing and just letting my creativity explore. I loved the satisfaction from problem solving and being innovative with materials and really finding unique approaches. But when I spoke with people in the field I always heard the same thing, the art and the industry are completely different. But what was I supposed to do? I needed my fix. And then... then I wrote that blog and everything changed. I realized that everything I loved about architecture I found in web development. While working on my blog I felt the same satisfaction that I felt while working in AutoCAD, except even better. It was even easier to push the limits and create something unique. There was a million more ways to solve problems and hey a lot less regulation and chance of lawsuit. Having the ability to create something exactly as you imagined that portrays you as an individual and reaches other people has been one of the most powerful feelings in my life, it's so amazing.

					I'm so passionate. That would be my best quality, I think. I love what I do and it really matters to me that my name is attached to high quality work. My worst quality? I have no patience. Not with others and especially not with myself. I love learning new things, but I get grumpy with myself quickly and that's been my biggest hurdle while learning to code. My poor instructors at both DevMountain and Isomer were so patient with me and it's still something I have to confront everyday but it's always been worth it and I truly believe that hard work pays off. As an employee, and I think my former employers will echo this, I am incredibly dependable and don't shy away from hard work. I'm overly aware of the fact that I am a junior developer and there is so much growing and learning to be done. I hate that I don't already know everything but I am just so excited to be in this industry and increase my capabilities. In a job I am looking for a team that will foster learning and help me achieve my growth goals.

					Well I guess now that you've read all my ramblings if there is one last thing I could say to you as my future employer it would be that I am here to change the world. I am in this industry to make a difference. And while I might still be learning small and basic things now, my goals are not small and basic. I don't yet have a clear picture of exactly how I'll do it, but I want to impact peoples lives and I truly believe that I'll be able to do that as a Web Developer. My lack of experience and junior status may result in a gamble for you but my passion is unmatched and I will work every moment to be more than what you expect from me. Thank you so much for taking the time to read this, seriously, if you made it this far you deserve an award. Please feel free to email me, because it would send me over the moon. Thanks again!</p>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div id="tech" class="tech">
			<div class="container">
				<h2>My Toolbelt</h2>
				<div class="icon-container">
					<img src="<?php echo $imagedir ?>/icons/css3.png">
					<img src="<?php echo $imagedir ?>/icons/html5.png">
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
				<form>
					<input placeholder="Name"></input>
					<input placeholder="Email"></input>
					<textarea rows="5" class="message" placeholder="Message"></textarea>
					<button type="submit" class="button">Say Hi!</button>
				</form>
			</div>
		</div>
	</section>
</div>

<?php get_footer();