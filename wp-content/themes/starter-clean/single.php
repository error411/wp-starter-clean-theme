<?php
/**
 * Single post template.
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

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry entry--single' ); ?>>
			<header class="entry__header">
				<h1 class="entry__title"><?php the_title(); ?></h1>
				<p class="entry__meta">
					<?php echo esc_html( get_the_date() ); ?>
				</p>
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
