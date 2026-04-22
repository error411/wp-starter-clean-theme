<?php
/**
 * Empty state partial.
 *
 * @package StarterCleanPro
 */
?>

<section class="entry entry--none">
	<header class="entry__header">
		<h2 class="entry__title"><?php esc_html_e( 'Nothing found', 'starter-clean-pro' ); ?></h2>
	</header>

	<div class="entry__content">
		<?php if ( is_search() ) : ?>
			<p><?php esc_html_e( 'No results matched your search. Try a different phrase.', 'starter-clean-pro' ); ?></p>
			<?php get_search_form(); ?>
		<?php else : ?>
			<p><?php esc_html_e( 'No content has been published yet.', 'starter-clean-pro' ); ?></p>
		<?php endif; ?>
	</div>
</section>
