<?php
/**
 * Archive template.
 *
 * @package StarterClean
 */

get_header();
?>

<section class="content-area container">
	<header class="archive-header">
		<?php
		the_archive_title( '<h1 class="archive-title">', '</h1>' );
		the_archive_description( '<div class="archive-description">', '</div>' );
		?>
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
		<p><?php esc_html_e( 'No posts found.', 'starter-clean' ); ?></p>
	<?php endif; ?>
</section>

<?php
get_footer();
