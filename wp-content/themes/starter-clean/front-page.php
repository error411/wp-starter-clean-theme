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

<section class="featured-services container">
	<header class="section-header">
		<h2><?php esc_html_e( 'Services', 'starter-clean' ); ?></h2>
	</header>

	<?php
	$featured_services = new WP_Query(
		array(
			'post_type'           => 'service',
			'posts_per_page'      => 3,
			'ignore_sticky_posts' => true,
		)
	);
	?>

	<?php if ( $featured_services->have_posts() ) : ?>
		<div class="card-grid">
			<?php
			while ( $featured_services->have_posts() ) :
				$featured_services->the_post();

				get_template_part( 'partials/content' );
			endwhile;
			?>
		</div>

		<?php wp_reset_postdata(); ?>
	<?php else : ?>
		<p class="section-note"><?php esc_html_e( 'Add services in the WordPress admin to feature them here.', 'starter-clean' ); ?></p>
	<?php endif; ?>
</section>

<section class="testimonials container">
	<header class="section-header">
		<h2><?php esc_html_e( 'Testimonials', 'starter-clean' ); ?></h2>
	</header>

	<?php
	$testimonials = new WP_Query(
		array(
			'post_type'           => 'testimonial',
			'posts_per_page'      => 3,
			'ignore_sticky_posts' => true,
		)
	);
	?>

	<?php if ( $testimonials->have_posts() ) : ?>
		<div class="card-grid">
			<?php
			while ( $testimonials->have_posts() ) :
				$testimonials->the_post();
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'testimonial-card' ); ?>>
					<div class="testimonial-card__content">
						<?php the_excerpt(); ?>
					</div>

					<h3 class="testimonial-card__name"><?php the_title(); ?></h3>
				</article>

				<?php
			endwhile;
			?>
		</div>

		<?php wp_reset_postdata(); ?>
	<?php else : ?>
		<p class="section-note"><?php esc_html_e( 'Add testimonials in the WordPress admin to feature them here.', 'starter-clean' ); ?></p>
	<?php endif; ?>
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
