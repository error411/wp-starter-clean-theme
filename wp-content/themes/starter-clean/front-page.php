<?php
/**
 * Front page template.
 *
 * @package StarterClean
 */

get_header();
?>

<section class="hero">
	<div class="container">
		<h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
		<p><?php esc_html_e( 'A lightweight WordPress starter theme for learning, experimentation, and portfolio work.', 'starter-clean' ); ?></p>
	</div>
</section>

<section class="latest-posts container">
	<header class="section-header">
		<h2><?php esc_html_e( 'Latest Posts', 'starter-clean' ); ?></h2>
	</header>

	<?php
	$latest_posts = new WP_Query(
		array(
			'post_type'           => 'post',
			'posts_per_page'      => 3,
			'ignore_sticky_posts' => true,
		)
	);
	?>

	<?php if ( $latest_posts->have_posts() ) : ?>
		<div class="post-list">
			<?php
			while ( $latest_posts->have_posts() ) :
				$latest_posts->the_post();

				get_template_part( 'partials/content' );
			endwhile;
			?>
		</div>

		<?php wp_reset_postdata(); ?>
	<?php else : ?>
		<?php get_template_part( 'partials/content', 'none' ); ?>
	<?php endif; ?>
</section>

<?php
get_footer();
