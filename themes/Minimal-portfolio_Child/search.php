<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package minimal-portfolio
 */

get_header();
?>
<div id="content" class="site-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div id="primary" class="content-area">
					<main id="main" class="site-main post-grid-layout">
			
					<?php if ( have_posts() ) : ?>
			
						<?php while ( have_posts() ) : the_post();
			
							get_template_part( 'template-parts/post/content' );
			
						endwhile;
			
						the_posts_pagination();
			
					else :
			
						get_template_part( 'template-parts/content', 'none' );
			
					endif;
					?>
			
					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
			<div class="col-lg-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();
