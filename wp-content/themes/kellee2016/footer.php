<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */

$imagedir = get_stylesheet_directory_uri() . "/assets/img";

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="container">
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
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-<!-- INSERT CODE SPECIFIC TO GTM ACCOUNT HERE EX.PLB42T -->"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-<!-- INSERT CODE SPECIFIC TO GTM ACCOUNT HERE EX.PLB42T -->');</script>
<!-- End Google Tag Manager -->

</body>
</html>
