<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecoplast
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/src/img/favicon.png" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet"
  />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ecoplast' ); ?></a>

  <header>
    <div class="container">
      <div class="wrap">
        <a href="<?php echo home_url(); ?>" class="logo">
          <img  width="150" height="34" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/logo.svg" alt="logo" />
        </a>
        <nav class="desktop">
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-menu',
            )
          );
        ?>
        </nav>
        <button
          id="hamburger"
          class="hamburger hamburger--vortex"
          type="button"
          aria-label="mobile menu"
        >
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
    </div>
    <nav id="mobileMenu" class="mobile">
    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'menu-1',
        'menu_id'        => 'primary-menu',
      )
    );
    ?>
    </nav>
  </header>
