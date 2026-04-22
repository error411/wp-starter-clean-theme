<?php
/**
 * 404 template.
 *
 * @package StarterClean
 */

get_header();
?>

<section class="content-area container">
	<article class="entry entry--not-found">
		<header class="entry__header">
			<h1 class="entry__title"><?php esc_html_e( 'Page not found', 'starter-clean' ); ?></h1>
		</header>

		<div class="entry__content">
			<p><?php esc_html_e( 'The page you are looking for does not exist. Try searching for what you need.', 'starter-clean' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</article>
</section>

<?php
get_footer();
