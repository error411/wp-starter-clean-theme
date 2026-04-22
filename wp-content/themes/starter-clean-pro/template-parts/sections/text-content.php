<?php
/**
 * Text content section.
 *
 * @package StarterCleanPro
 */

$heading = starter_clean_pro_get_sub_field( 'section_heading' );
$content = starter_clean_pro_get_sub_field( 'body_content' );
?>

<section class="section section--text">
	<div class="container section__narrow">
		<?php if ( $heading ) : ?>
			<header class="section-header">
				<h2><?php echo esc_html( $heading ); ?></h2>
			</header>
		<?php endif; ?>

		<?php if ( $content ) : ?>
			<div class="entry__content">
				<?php echo wp_kses_post( $content ); ?>
			</div>
		<?php endif; ?>
	</div>
</section>
