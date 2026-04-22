<?php
/**
 * Main template file.
 *
 * @package StarterClean
 */

get_header();
?>

<section class="content-area container">
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
