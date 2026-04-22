<?php
/**
 * Front page template.
 *
 * @package StarterCleanPro
 */

get_header();

$rendered_sections = starter_clean_pro_render_page_sections( get_the_ID() );

if ( ! $rendered_sections ) :
	?>
	<section class="hero section">
		<div class="container hero__inner">
			<p class="eyebrow"><?php esc_html_e( 'Starter Clean Pro', 'starter-clean-pro' ); ?></p>
			<h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
			<p><?php esc_html_e( 'A lean classic WordPress foundation for small business websites and custom client builds.', 'starter-clean-pro' ); ?></p>
			<div class="button-group">
				<a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php esc_html_e( 'Explore the site', 'starter-clean-pro' ); ?>
				</a>
			</div>
		</div>
	</section>

	<section class="section latest-posts container">
		<header class="section-header">
			<h2><?php esc_html_e( 'Latest Posts', 'starter-clean-pro' ); ?></h2>
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
endif;

get_footer();
