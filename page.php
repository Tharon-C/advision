<?php get_header(); ?>
<div class="page-title color-1">
				<div class="p-wrap pad-tb-20px txt-wht title-1"><?php echo the_title(); ?></div>
			</div>
	<main role="main">
		<!-- section -->
		<section>
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			
			<article class="content page-wrapper clear" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
