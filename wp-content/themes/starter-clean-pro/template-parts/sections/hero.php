<?php
/**
 * Hero section.
 *
 * @package StarterCleanPro
 */

$eyebrow        = starter_clean_pro_get_sub_field( 'eyebrow' );
$heading        = starter_clean_pro_get_sub_field( 'heading', get_bloginfo( 'name' ) );
$subheading     = starter_clean_pro_get_sub_field( 'subheading' );
$primary_text   = starter_clean_pro_get_sub_field( 'primary_button_text' );
$primary_url    = starter_clean_pro_get_sub_field( 'primary_button_url' );
$secondary_text = starter_clean_pro_get_sub_field( 'secondary_button_text' );
$secondary_url  = starter_clean_pro_get_sub_field( 'secondary_button_url' );
?>

<section class="hero section">
	<div class="container hero__inner">
		<?php if ( $eyebrow ) : ?>
			<p class="eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
		<?php endif; ?>

		<?php if ( $heading ) : ?>
			<h1><?php echo esc_html( $heading ); ?></h1>
		<?php endif; ?>

		<?php if ( $subheading ) : ?>
			<p><?php echo esc_html( $subheading ); ?></p>
		<?php endif; ?>

		<?php if ( ( $primary_text && $primary_url ) || ( $secondary_text && $secondary_url ) ) : ?>
			<div class="button-group">
				<?php if ( $primary_text && $primary_url ) : ?>
					<a class="button" href="<?php echo esc_url( $primary_url ); ?>"><?php echo esc_html( $primary_text ); ?></a>
				<?php endif; ?>

				<?php if ( $secondary_text && $secondary_url ) : ?>
					<a class="button button--secondary" href="<?php echo esc_url( $secondary_url ); ?>"><?php echo esc_html( $secondary_text ); ?></a>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
