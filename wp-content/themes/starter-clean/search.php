<?php
/**
 * Search results template.
 *
 * @package StarterClean
 */

get_header();
?>

<section class="content-area container">
	<header class="page-header">
		<h1 class="page-title">
			<?php
			printf(
				/* translators: %s: Search query. */
				esc_html__( 'Search results for: %s', 'starter-clean' ),
				'<span>' . esc_html( get_search_query() ) . '</span>'
			);
			?>
		</h1>
	</header>

	<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'partials/content' );
		endwhile;
		?>

		<?php the_posts_pagination(); ?>
	<?php else : ?>
		<?php get_template_part( 'partials/content', 'none' ); ?>
	<?php endif; ?>
</section>

<?php
get_footer();
