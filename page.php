<?php get_header(); ?>
<div class="row">
	<main class="col-md-8">
		<?php
		// Start the Loop.
		while (have_posts()) :
			the_post();
		?>
			<article class="article well clearfix">
				<?php the_content(); ?>
			</article>
		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;

		endwhile; // End the loop.
		?>
	</main>
	<?php get_sidebar(); ?>
</div>
<?php get_footer();
