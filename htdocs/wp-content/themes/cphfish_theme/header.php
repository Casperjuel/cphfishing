<?php
/**
 * @package cphfish_theme
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
<script>
  WebFont.load({
    google: {
      families: ['Source Sans Pro']
    }
  });
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'adapt_base_theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="inner">
			<nav class="usermenu">
					<?php wp_nav_menu( array( 'theme_location' => 'usermenu', 'menu_id' => 'usermenu' ) ); ?>
			</nav>
			<div class="site-branding">
				<img alt="Logo" src="/wp-content/themes/cphfish_theme/img/logo.svg">
			</div>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div>
	</header>

	<div id="content" class="site-content">
