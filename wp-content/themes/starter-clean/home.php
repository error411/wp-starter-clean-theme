<?php
/**
 * Posts index template.
 *
 * @package StarterClean
 */

get_header();
?>

<section class="content-area container">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Posts', 'starter-clean' ); ?></h1>
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
