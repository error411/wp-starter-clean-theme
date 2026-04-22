<?php
/**
 * Theme footer.
 *
 * @package StarterCleanPro
 */
?>
</main>

<footer class="site-footer">
	<div class="site-footer__inner container">
		<p>
			&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?>
			<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
		</p>

		<nav class="footer-nav" aria-label="<?php esc_attr_e( 'Footer menu', 'starter-clean-pro' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu_class'     => 'footer-nav__menu',
					'container'      => false,
					'fallback_cb'    => false,
					'depth'          => 1,
				)
			);
			?>
		</nav>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
