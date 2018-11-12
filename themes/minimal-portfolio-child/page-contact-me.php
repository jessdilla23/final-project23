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

						<p1> Contact Me </p1><br>
						<p2>Feel free to reach out with any questions or comments. E-mail checked daily! 🙂</p2><br>


						<form method="post" action="http://heyoitsjesso.com/submission-received/">

						<form>
							<label for="name">Your Name:</label>
							<input type="text"/>

							 
							<label for="idlabel">Your Email:</label>
							 <input type="email"/>

							 <label for="subject">Subject:</label>
							 <input type="email"/>

						   <label for="message">Message:</label> <textarea name="label"    maxlength="800" rows="6"
							cols="23"></textarea><br>

							<input type="submit" value="Submit"/>
	
						</form>


						<?php while ( have_posts() ) : the_post();
				
							get_template_part( 'template-parts/page/content', 'page' );
				
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
				
						endwhile; // End of the loop. ?>



					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
		</div>
	</div>
</div>
<?php get_footer();
