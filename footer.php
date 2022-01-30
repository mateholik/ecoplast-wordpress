<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecoplast
 */

?>

<footer>
  <div class="container">
    <div class="wrap">
      <div class="nav">
        <div class="logo">
          <img  width="130" height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/logo.svg" alt="logo" />
        </div>
        <?php
            wp_nav_menu(
              array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
              )
            );
          ?>
      </div>
      <div class="contacts">
        <ul>
          <li>
            <a href="tel:+37067503048"
              ><img loading="lazy" width="20" height="20" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/phone-light.svg" alt="phone" />Tel:
              +37067503048</a
            >
          </li>
          <li>
            <a href="mailto:info@ecoplast.lt"
              ><img loading="lazy" width="20" height="20" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/mail-light.svg" alt="mail" />El. paštas:
              info@ecoplast.lt</a
            >
          </li>
          <li>
            <a href="https://www.facebook.com/"
              ><img loading="lazy" width="20" height="20" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/fb-light.svg" alt="fb" />Sekite mus Facebook</a
            >
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>

  <section class="copyryght">
    <div class="container">
      <p>Ecoplast © <?php echo date("Y"); ?> - Visos teisės saugomos</p>
    </div>
  </section>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
