<?php
/**
 * Post summary partial.
 *
 * @package StarterCleanPro
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry entry--card' ); ?>>
	<header class="entry__header">
		<h2 class="entry__title">
			<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
		</h2>
		<p class="entry__meta"><?php starter_clean_pro_posted_on(); ?></p>
	</header>

	<div class="entry__summary">
		<?php the_excerpt(); ?>
	</div>

	<a class="read-more" href="<?php echo esc_url( get_permalink() ); ?>">
		<?php esc_html_e( 'Read more', 'starter-clean-pro' ); ?>
	</a>
</article>
