<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ZanBlog_Plus
 * @since ZanBlog Plus 1.0
 */

if (!is_active_sidebar('sidebar-1')) {
  return;
}
?>
<aside id="secondary" class="widget-area col-md-4" role="complementary" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'zanblog-plus' ); ?>">
  <?php dynamic_sidebar('sidebar-1') ?>
</aside>