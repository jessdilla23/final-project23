<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package minimal-portfolio
 */

?>

	<footer id="colophon" class="site-footer">
	<?php 

            if ( is_active_sidebar( 'footer-1' ) ||
                 is_active_sidebar( 'footer-2' ) ||
                 is_active_sidebar( 'footer-3' ) ||
                 is_active_sidebar( 'footer-4' ) ) :
         
         get_template_part( 'template-parts/footer/widgets' );
         
         endif; ?>
		 <div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="site-info">
							
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

			<a href="https://www.linkedin.com/in/jessodonnell23/" class="fa fa-linkedin"></a>

			<a href="https://www.instagram.com/holyjesssus/" class="fa fa-instagram"></a>

			<a href="https://twitter.com/holyjesssus" class="fa fa-twitter"></a><br>

			<br>

			<p4>Copyright 2017 © Jessica O'Donnell </p4>

	</footer><!-- #colophon -->

</body>
</html>
