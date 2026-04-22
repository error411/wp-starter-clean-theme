<?php
/**
 * Search results template.
 *
 * @package StarterCleanPro
 */

get_header();
?>

<div class="content-layout container">
	<section class="content-area">
		<header class="page-header">
			<h1 class="page-title">
				<?php
				printf(
					/* translators: %s: Search query. */
					esc_html__( 'Search results for: %s', 'starter-clean-pro' ),
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
</div>

<?php
get_footer();
