<?php
/**
 * Theme footer.
 *
 * @package StarterClean
 */
?>
</main>

<footer class="site-footer">
	<div class="container">
		<p>
			&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?>
			<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
		</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
