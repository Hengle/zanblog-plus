<?php
/**
 * The template part for displaying content
 *
 * @package ZanBlog_Plus
 * @since ZanBlog Plus 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('entry panel panel-default clearfix'); ?>>
	<header class="entry-header">
		<?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
		<div class="entry-meta">
			<?php if (is_sticky()) : ?>
				<i class="fas fa-bookmark entry-stick hidden-xs"></i>
				<span class="label label-meta visible-xs-inline"><i class="fas fa-bookmark"></i> <?php _e('Sticky', 'zanblog-plus'); ?></span>
			<?php endif; ?>
			<div class="date-mark hidden-xs">
				<span class="month"><?php echo __(get_the_date('M')); ?></span>
				<span class="day"><?php echo get_the_date('d'); ?></span>
			</div>
			<?php zan_entry_meta(); ?>
		</div>
	</header>
	<?php zan_post_thumbnail(); ?>
	<div class="entry-summary well">
		<?php the_excerpt(); ?>
	</div>
	<footer class="entry-footer">
		<?php zan_entry_tag_list(); ?>
		<a class="btn btn-danger pull-right more-link" href="<?php the_permalink(); ?>">
			<?php _e('Read more'); ?>
		</a>
	</footer>

</article>