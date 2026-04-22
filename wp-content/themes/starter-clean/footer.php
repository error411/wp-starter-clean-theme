<?php
/**
 * Theme footer.
 *
 * @package StarterClean
 */
?>
</main>

<footer class="site-footer">
	<div class="site-footer__inner container">
		<p>
			&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?>
			<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
		</p>

		<?php starter_clean_business_contact(); ?>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
