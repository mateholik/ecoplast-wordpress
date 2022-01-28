<?php
/*
 * Template name: Catalog
 */

get_header(); ?>
  <div class="catalog">
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

    <section id="first" class="variant">
      <div class="container">
        <?php
        $block = get_field('polikarbon_block');
        $info = $block['info'];
        $priceBlock = $block['price_block'];
        $images = $block['images'];
        if( $block ): ?>
          <div class="top">
            <h2><?php echo $block['section_title'] ?></h2>
            <div class="row">
              <div class="col">
                <h3><?php echo $info['title'] ?></h3>
                <ul>
                <?php 
                  $rows = $info['points'];
                  if( $rows ) {
                    foreach( $rows as $row ) {
                        ?>
                         <li>
                         <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/check-blue.svg" alt="check" />
                          <?php echo $row['point'] ?>
                        </li>
                        <?php
                      }
                    }
                ?>
                </ul>
              </div>
              <div class="col">
                <img loading="lazy" width="498" height="246" src="<?php echo $info['image'] ?>" alt="polikarbonatas" />
              </div>
            </div>
          </div>

          <div class="tables-title">Kainoraštis</div>
          <div id="tables" class="tables">
            <?php 
              $rows = $priceBlock;
              if( $rows ) {
                foreach( $rows as $row ) {
                    ?>
                      <div class="table-holder">
                      <div class="table">
                        <div class="title"><?php echo $row['matmenys']; ?></div>
                        <div class="content">
                          <ul>
                          <li>
                            <span class="left">Storis, mm</span>
                            <span class="right">Kaina, €</span>
                          </li>
                            <?php 
                              $blokeliai = $row['blokelis'];
                              if( $rows ) {
                                foreach( $blokeliai as $blokelis ) {
                                    ?>
                                    <li>
                                      <span class="left"><?php echo $blokelis['storis']; ?></span>
                                      <span class="right"><?php echo $blokelis['kaina']; ?></span>
                                    </li>
                                    <?php
                                  }
                                }
                            ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <?php
                  }
                }
            ?>
          </div>
          <div id="more" class="tables-more">
            <span>Žiūrėti visus išmatavimus</span>
            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/arrow-down.svg" alt="" />
          </div>

          <div class="images">
            <div>
              <img loading="lazy" width="400" height="274" src="<?php echo $images['image_1']; ?>" alt="img" />
            </div>
            <div>
              <img loading="lazy" width="400" height="274" src="<?php echo $images['image_2']; ?>" alt="img" />
            </div>
            <div>
              <img loading="lazy" width="400" height="274" src="<?php echo $images['image_3']; ?>" alt="img" />
            </div>
          </div>
          <div class="btn-holder">
            <a href="<?php echo home_url(); ?>/kontaktai" class="btn">Susisiekite</a>
          </div>
        <?php endif; ?>
      </div>
    </section>

    <section id="second" class="variant">
      <div class="container">
        <?php
        $block = get_field('polikarbon_block_bronze');
        $info = $block['info'];
        $priceBlock = $block['price_block'];
        $images = $block['images'];
        if( $block ): ?>
          <div class="top">
            <h2><?php echo $block['section_title'] ?></h2>
            <div class="row">
              <div class="col">
                <h3><?php echo $info['title'] ?></h3>
                <ul>
                <?php 
                  $rows = $info['points'];
                  if( $rows ) {
                    foreach( $rows as $row ) {
                        ?>
                         <li>
                         <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/check-blue.svg" alt="check" />
                          <?php echo $row['point'] ?>
                        </li>
                        <?php
                      }
                    }
                ?>
                </ul>
              </div>
              <div class="col">
                <img loading="lazy" width="498" height="246" src="<?php echo $info['image'] ?>" alt="polikarbonatas" />
              </div>
            </div>
          </div>

          <div class="tables-title">Kainoraštis</div>
          <div id="tables" class="tables">
            <?php 
              $rows = $priceBlock;
              if( $rows ) {
                foreach( $rows as $row ) {
                    ?>
                      <div class="table-holder">
                      <div class="table">
                        <div class="title"><?php echo $row['matmenys']; ?></div>
                        <div class="content">
                          <ul>
                          <li>
                            <span class="left">Storis, mm</span>
                            <span class="right">Kaina, €</span>
                          </li>
                            <?php 
                              $blokeliai = $row['blokelis'];
                              if( $rows ) {
                                foreach( $blokeliai as $blokelis ) {
                                    ?>
                                    <li>
                                      <span class="left"><?php echo $blokelis['storis']; ?></span>
                                      <span class="right"><?php echo $blokelis['kaina']; ?></span>
                                    </li>
                                    <?php
                                  }
                                }
                            ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <?php
                  }
                }
            ?>
          </div>
          <div id="more" class="tables-more">
            <span>Žiūrėti visus išmatavimus</span>
            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/arrow-down.svg" alt="" />
          </div>

          <div class="images">
            <div>
              <img width="400" height="274" loading="lazy" src="<?php echo $images['image_1']; ?>" alt="img" />
            </div>
            <div>
              <img width="400" height="274" loading="lazy" src="<?php echo $images['image_2']; ?>" alt="img" />
            </div>
            <div>
              <img width="400" height="274" loading="lazy" src="<?php echo $images['image_3']; ?>" alt="img" />
            </div>
          </div>
          <div class="btn-holder">
            <a href="<?php echo home_url(); ?>/kontaktai" class="btn">Susisiekite</a>
          </div>
        <?php endif; ?>
      </div>
    </section>
  </div>
<?php
get_footer();