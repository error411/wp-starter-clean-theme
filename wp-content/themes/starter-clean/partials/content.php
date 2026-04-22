<?php
/**
 * Post content partial.
 *
 * @package StarterClean
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry entry--summary' ); ?>>
	<header class="entry__header">
		<h2 class="entry__title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>
	</header>

	<div class="entry__summary">
		<?php the_excerpt(); ?>
	</div>

	<a class="read-more" href="<?php the_permalink(); ?>">
		<?php esc_html_e( 'Read more', 'starter-clean' ); ?>
	</a>
</article>
