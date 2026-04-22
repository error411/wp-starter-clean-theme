<?php
/**
 * Page template.
 *
 * @package StarterCleanPro
 */

get_header();
?>

<section class="content-area container">
	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'partials/content', 'page' );
		starter_clean_pro_render_page_sections( get_the_ID() );
	endwhile;
	?>
</section>

<?php
get_footer();
