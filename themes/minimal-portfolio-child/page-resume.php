<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package minimal-portfolio
 */

get_header();
?>
<div id="content" class="site-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">

						<?php while ( have_posts() ) : the_post();
				
							get_template_part( 'template-parts/page/content', 'page' );
				
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
				
						endwhile; // End of the loop. ?>

						<p style="text-align: center;"><iframe src="https://docs.google.com/document/d/e/2PACX-1vRUikrhPbgxlAj_12Y8JxKgV17Zu19T38SF6YHhOqi9PiJQxRFc6uWFoHlq9uuZhrAhP6n6JFPWp0Ld/pub?embedded=true" width="70%" height="1000px">&nbsp;</iframe>


					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
		</div>
	</div>
</div>
<?php get_footer();
