<?php
/**
 * Single service template.
 *
 * @package StarterClean
 */

get_header();
?>

<section class="content-area container">
	<?php
	while ( have_posts() ) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry entry--single entry--service' ); ?>>
			<header class="entry__header">
				<p class="eyebrow"><?php esc_html_e( 'Service', 'starter-clean' ); ?></p>
				<h1 class="entry__title"><?php the_title(); ?></h1>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="entry__image">
					<?php the_post_thumbnail( 'large' ); ?>
				</div>
			<?php endif; ?>

			<div class="entry__content">
				<?php the_content(); ?>
			</div>
		</article>

		<?php
	endwhile;
	?>
</section>

<?php
get_footer();
