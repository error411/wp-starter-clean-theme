<?php
/**
 * CTA section.
 *
 * @package StarterCleanPro
 */

$heading     = starter_clean_pro_get_sub_field( 'heading' );
$text        = starter_clean_pro_get_sub_field( 'text' );
$button_text = starter_clean_pro_get_sub_field( 'button_text' );
$button_url  = starter_clean_pro_get_sub_field( 'button_url' );
?>

<section class="section section--cta">
	<div class="container cta">
		<div>
			<?php if ( $heading ) : ?>
				<h2><?php echo esc_html( $heading ); ?></h2>
			<?php endif; ?>

			<?php if ( $text ) : ?>
				<p><?php echo esc_html( $text ); ?></p>
			<?php endif; ?>
		</div>

		<?php if ( $button_text && $button_url ) : ?>
			<a class="button" href="<?php echo esc_url( $button_url ); ?>"><?php echo esc_html( $button_text ); ?></a>
		<?php endif; ?>
	</div>
</section>
