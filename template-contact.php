<?php
/*
 * Template name: Contact
 */

get_header(); ?>
   <div class="contact">
      <?php
        $hero = get_field('hero_section');
        if( $hero ): ?>
        <section
          class="hero"
          style="background-image: url('<?php echo $hero['image'] ?>')">
          <div class="container">
            
            <h1><?php echo $hero['title'] ?></h1>
            <span><?php echo $hero['subtitle'] ?></span>
          </div>
        </section>
      <?php endif; ?>

      <section class="content">
        <div class="container">
          <h4>PARAŠYKITE MUMS</h4>
          <div class="row">
            <div class="col">
            <?php echo do_shortcode('[hf_form slug="contact-form"]') ?>
            </div>
            <div class="col">
              <div class="contacts">
                <ul>
                  <li>
                    <a href="tel:+37067503048"
                      ><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/phone.svg" alt="phone" />Tel:
                      +37067503048</a
                    >
                  </li>
                  <li>
                    <a href="mailto:info@ecoplast.lt"
                      ><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/mail.svg" alt="mail" />El. paštas:
                      info@ecoplast.lt</a
                    >
                  </li>
                  <li>
                    <a target="_blank" href="https://www.facebook.com/"
                      ><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/fb.svg" alt="fb" />Sekite mus
                      Facebook</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
<?php
get_footer();