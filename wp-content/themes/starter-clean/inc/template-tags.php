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

if ( ! function_exists( 'starter_clean_business_contact' ) ) {
	/**
	 * Output business contact details saved in the Customizer.
	 */
	function starter_clean_business_contact() {
		$phone   = get_theme_mod( 'starter_clean_business_phone', '' );
		$email   = get_theme_mod( 'starter_clean_business_email', '' );
		$street  = get_theme_mod( 'starter_clean_business_street', '' );
		$city    = get_theme_mod( 'starter_clean_business_city', '' );
		$region  = get_theme_mod( 'starter_clean_business_region', '' );
		$postal  = get_theme_mod( 'starter_clean_business_postal', '' );
		$country = get_theme_mod( 'starter_clean_business_country', '' );

		if ( ! $phone && ! $email && ! $street && ! $city && ! $region && ! $postal && ! $country ) {
			return;
		}
		?>

		<address class="business-contact">
			<?php if ( $phone ) : ?>
				<a href="<?php echo esc_url( 'tel:' . preg_replace( '/[^0-9+]/', '', $phone ) ); ?>"><?php echo esc_html( $phone ); ?></a>
			<?php endif; ?>

			<?php if ( $email ) : ?>
				<a href="<?php echo esc_url( 'mailto:' . sanitize_email( $email ) ); ?>"><?php echo esc_html( antispambot( $email ) ); ?></a>
			<?php endif; ?>

			<?php if ( $street || $city || $region || $postal || $country ) : ?>
				<span>
					<?php
					echo esc_html(
						implode(
							', ',
							array_filter( array( $street, trim( $city . ' ' . $region . ' ' . $postal ), $country ) )
						)
					);
					?>
				</span>
			<?php endif; ?>
		</address>
		<?php
	}
}
