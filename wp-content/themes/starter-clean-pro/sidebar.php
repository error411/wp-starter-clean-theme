<?php
/**
 * Sidebar template.
 *
 * @package StarterCleanPro
 */

if ( ! is_active_sidebar( 'primary-sidebar' ) ) {
	return;
}
?>

<aside class="site-sidebar" aria-label="<?php esc_attr_e( 'Primary sidebar', 'starter-clean-pro' ); ?>">
	<?php dynamic_sidebar( 'primary-sidebar' ); ?>
</aside>
