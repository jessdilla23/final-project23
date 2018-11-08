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
<?php 
	$minimal_portfolio_footer_twitter_link = minimal_portfolio_get_option( 'https://twitter.com/holyjesssus' );
	$minimal_portfolio_footer_instagram_link = minimal_portfolio_get_option( 'https://www.instagram.com/holyjesssus' );
	$minimal_portfolio_backto_top_status = minimal_portfolio_get_option( 'minimal_portfolio_backto_top_status' );
	$minimal_portfolio_copyright_author = minimal_portfolio_get_option( 'minimal_portfolio_copyright_author' );
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
				
	</footer><!-- #colophon -->


</body>
</html>
