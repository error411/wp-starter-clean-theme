<?php
/**
 * Page template.
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

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry entry--page' ); ?>>
			<header class="entry__header">
				<h1 class="entry__title"><?php the_title(); ?></h1>
			</header>

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
