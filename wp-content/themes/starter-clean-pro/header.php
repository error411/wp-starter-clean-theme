<?php
/**
 * Theme header.
 *
 * @package StarterCleanPro
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'starter-clean-pro' ); ?></a>

<header class="site-header">
	<div class="site-header__inner container">
		<?php starter_clean_pro_site_branding(); ?>

		<button class="nav-toggle" type="button" aria-controls="primary-menu" aria-expanded="false">
			<span class="nav-toggle__label"><?php esc_html_e( 'Menu', 'starter-clean-pro' ); ?></span>
		</button>

		<nav class="primary-nav" aria-label="<?php esc_attr_e( 'Primary menu', 'starter-clean-pro' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'primary-nav__menu',
					'container'      => false,
					'fallback_cb'    => false,
					'depth'          => 2,
				)
			);
			?>
		</nav>
	</div>
</header>

<main id="main" class="site-main">
