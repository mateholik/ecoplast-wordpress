<?php
/*
 * Template name: Homepage
 */

get_header(); ?>
 <div class="lander">
    <section class="hero">
      <div id="heroSLider" class="glide slider">
        <div class="slider--arrows" data-glide-el="controls">
          <div class="arrow arrow--left" data-glide-dir="<">
            <img loading="lazy" width="46" height="46" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/slider-arrow.svg" alt="arrow left" />
          </div>
          <div class="arrow arrow--right" data-glide-dir=">">
            <img loading="lazy" width="46" height="46" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/slider-arrow.svg" alt="arrow right" />
          </div>
        </div>
        <div class="slider--dots" data-glide-el="controls[nav]">
          <div class="dot" data-glide-dir="=0"></div>
          <div class="dot" data-glide-dir="=1"></div>
          <div class="dot" data-glide-dir="=2"></div>
        </div>
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <?php 
              $rows = get_field('slider');
              if( $rows ) {
                foreach( $rows as $row ) {
                    ?>
                    <li class="glide__slide">
                      <div
                        class="slide"
                        style="background-image: url('<?php echo $row['image'] ?>')"
                      >
                        <div class="container">
                          <h1><?php echo $row['title'] ?></h1>
                          <span><?php echo $row['subtitle'] ?></span>
                          <div class="btn-holder">
                            <a href="<?php echo $row['button_link'] ?>" class="btn">Plačiau</a>
                          </div>
                        </div>
                      </div>
                    </li>
                  <?php
                }
              }
            ?>
          </ul>
        </div>
      </div>
    </section>

    <section class="alternative">
      <div class="container">
        <?php
        $alternative = get_field('alternative');
           if( $alternative ): ?>
            <h2> <?php echo $alternative['title']; ?> </h2>
            <div class="content">
              <?php echo $alternative['text']; ?>
            </div>
            <div class="wrap">
              <div>
                <img loading="lazy" width="585" height="365" src="<?php echo $alternative['image_1']; ?>" alt="img" />
              </div>
              <div>
                <img loading="lazy" width="585" height="365" src="<?php echo $alternative['image_2']; ?>" alt="img" />
              </div>
            </div>
            <div class="btn-holder">
              <a href="https://ecoplast.lt/katalogas/" class="btn">Katalogas</a>
            </div>
          <?php endif;
          ?>
      </div>
    </section>

    <section class="benefits">
      <div class="container">
      <?php
        $benefits = get_field('benefits');
           if( $benefits ): ?>
        <h2><?php echo $benefits['title'] ?></h2>
        <ul>
          <?php 
              $rows = $benefits['block'];
              if( $rows ) {
                foreach( $rows as $row ) {
                    ?>
                    <li>
                      <img loading="lazy" width="80" height="80" src="<?php echo $row['icon'] ?>" alt="icon" />
                      <?php echo $row['text'] ?>
                    </li>
                  <?php
                }
              }
            ?>
        </ul>
        <?php endif; ?>
      </div>
    </section>

    <section class="areas">
      <div class="container">
        <?php
          $areas = get_field('areas_slider');
            if( $areas ): ?>
          <h2><?php echo $areas['title'] ?></h2>
          <div class="slider">
            <div id="areasSLider" class="glide">
              <div class="slider--arrows" data-glide-el="controls">
                <div class="arrow arrow--left" data-glide-dir="<">
                  <img loading="lazy" width="46" height="46" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/slider-arrow.svg" alt="arrow left" />
                </div>
                <div class="arrow arrow--right" data-glide-dir=">">
                  <img loading="lazy" width="46" height="46" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/slider-arrow.svg" alt="arrow right" />
                </div>
              </div>
              <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                  <?php 
                  $rows = $areas['slide'];
                  if( $rows ) {
                    foreach( $rows as $row ) {
                        ?>
                        <li class="glide__slide">
                          <div class="slide">
                            <div class="top">
                              <img width="348" height="365" class="thumb" src="<?php echo $row['image'] ?>" alt="<?php echo $row['title'] ?>" />
                              <div class="content">
                                <div>
                                  <div class="title"><?php echo $row['title'] ?></div>
                                  <p>
                                    <?php echo $row['text'] ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <a href="<?php echo $row['link'] ?>" class="more">
                              Skaityti daugiau
                              <img loading="lazy" width="15" height="15"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/slider-arrow-more.svg"
                                alt="read more"
                              />
                            </a>
                          </div>
                        </li>
                        <?php
                      }
                    }
                  ?>
                  
                </ul>
              </div>
            </div>
          </div>
          <?php endif; ?>
      </div>
    </section>

    <section class="text-video">
      <div class="container">
      <?php
          $textVideo = get_field('text_video');
          if( $textVideo ): ?>
          <div class="row">
            <div class="col">
              <div class="title"><?php echo $textVideo['title'] ?></div>
              <?php echo $textVideo['text'] ?>
            </div>
            <div class="col">
              <div class="aspect-ratio">
                <?php echo $textVideo['video'] ?>
              </div>
            </div>
          </div>
          <?php endif; ?>
      </div>
    </section>

    <section class="partner">
      <div class="container">
       <?php
          $partner = get_field('partner');
          if( $partner ): ?>
          <h2><?php echo $partner['title'] ?></h2>
          <div class="wrap">
            <div class="front">
              <div class="image">
                <img loading="lazy" width="480" height="288" src="<?php echo $partner['image'] ?>" alt="partner" />
              </div>
              <div class="content">
                <?php echo $partner['text'] ?>
                <ul>
                <?php 
                  $rows = $partner['points'];
                  if( $rows ) {
                    foreach( $rows as $row ) {
                        ?>
                         <li>
                          <img loading="lazy" width="22" height="22" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/check.svg" alt="check" />
                          <?php echo $row['point'] ?>
                        </li>
                        <?php
                      }
                    }
                  ?>
                </ul>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </section>

    <section class="contact">
      <div class="container">
      <?php
          $contact = get_field('contact');
          if( $partner ): ?>
          <h2><?php echo $contact['title'] ?></h2>
          <?php echo $contact['text'] ?>
          <div class="row">
            <div class="col">
              <?php echo do_shortcode($contact['form_shortcode']) ?>
            </div>
            <div class="col">
              <img loading="lazy" width="545" height="362" src="<?php echo $contact['image'] ?>" alt="contact" />
            </div>
          </div>
        <?php endif; ?>
      </div>
    </section>
  </div>
<?php
get_footer();