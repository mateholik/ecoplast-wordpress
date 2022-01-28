<?php
/*
 * Template name: Use case
 */

get_header(); ?>
   <div class="use-case">
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


      <?php 
      $rows = get_field('info_block');
      $i=0;
      if( $rows ) {
        foreach( $rows as $row ) {
          $i++;
          $classes=($i%2==0?'case-reverse gray':'case');
            ?>
              <section class="<?php echo $classes ?>">
                <div class="container">
                  <div class="row">
                    <div class="col">
                      <img loading="lazy" width="545" height="383" src="<?php echo $row['image'] ?>" alt="image" />
                    </div>
                    <div class="col">
                      <h2><?php echo $row['title'] ?></h2>
                      <?php echo $row['text'] ?>
                    </div>
                  </div>
                </div>
              </section>
            <?php
          }
        }
      ?>
    </div>
<?php
get_footer();