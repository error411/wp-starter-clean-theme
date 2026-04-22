<?php
/**
 * Archive template.
 *
 * @package StarterCleanPro
 */

get_header();
?>

<div class="content-layout container">
	<section class="content-area">
		<header class="page-header">
			<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
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
			<?php get_template_part( 'partials/content', 'none' ); ?>
		<?php endif; ?>
	</section>

	<?php get_sidebar(); ?>
</div>

<?php
get_footer();
