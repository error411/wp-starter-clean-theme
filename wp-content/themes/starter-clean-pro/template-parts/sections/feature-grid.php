<?php
/**
 * Feature grid section.
 *
 * @package StarterCleanPro
 */

$heading  = starter_clean_pro_get_sub_field( 'heading' );
$features = starter_clean_pro_get_sub_field( 'features', array() );
?>

<section class="section section--features">
	<div class="container">
		<?php if ( $heading ) : ?>
			<header class="section-header">
				<h2><?php echo esc_html( $heading ); ?></h2>
			</header>
		<?php endif; ?>

		<?php if ( ! empty( $features ) && is_array( $features ) ) : ?>
			<div class="feature-grid">
				<?php foreach ( $features as $feature ) : ?>
					<?php
					$title       = isset( $feature['title'] ) ? $feature['title'] : '';
					$description = isset( $feature['description'] ) ? $feature['description'] : '';
					?>
					<article class="feature-card">
						<?php if ( $title ) : ?>
							<h3><?php echo esc_html( $title ); ?></h3>
						<?php endif; ?>

						<?php if ( $description ) : ?>
							<p><?php echo esc_html( $description ); ?></p>
						<?php endif; ?>
					</article>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
