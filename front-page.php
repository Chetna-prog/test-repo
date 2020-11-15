<?php
/**
 * The main template file
 **/

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();