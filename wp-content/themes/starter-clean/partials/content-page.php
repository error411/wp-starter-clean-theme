<?php
/**
 * Page content partial.
 *
 * @package StarterClean
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry entry--page' ); ?>>
	<header class="entry__header">
		<h1 class="entry__title"><?php the_title(); ?></h1>
	</header>

	<div class="entry__content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'starter-clean' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
</article>
