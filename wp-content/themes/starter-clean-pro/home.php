<?php
/**
 * Posts index template.
 *
 * @package StarterCleanPro
 */

get_header();
?>

<div class="content-layout container">
	<section class="content-area">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Latest Posts', 'starter-clean-pro' ); ?></h1>
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
