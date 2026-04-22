<?php
/**
 * Small template helper functions.
 *
 * @package StarterClean
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'starter_clean_site_branding' ) ) {
	/**
	 * Output custom logo or text site title with optional description.
	 */
	function starter_clean_site_branding() {
		$description = get_bloginfo( 'description', 'display' );
		?>
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			<?php endif; ?>

			<?php if ( $description ) : ?>
				<p class="site-description"><?php echo esc_html( $description ); ?></p>
			<?php endif; ?>
		</div>
		<?php
	}
}

if ( ! function_exists( 'starter_clean_posted_on' ) ) {
	/**
	 * Output a linked post date.
	 */
	function starter_clean_posted_on() {
		printf(
			'<time class="entry__date" datetime="%1$s">%2$s</time>',
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() )
		);
	}
}
