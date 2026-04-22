<?php
/**
 * Services archive template.
 *
 * @package StarterClean
 */

get_header();
?>

<section class="content-area container">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Services', 'starter-clean' ); ?></h1>
		<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
	</header>

	<?php if ( have_posts() ) : ?>
		<div class="card-grid">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'partials/content' );
			endwhile;
			?>
		</div>

		<?php the_posts_pagination(); ?>
	<?php else : ?>
		<?php get_template_part( 'partials/content', 'none' ); ?>
	<?php endif; ?>
</section>

<?php
get_footer();
