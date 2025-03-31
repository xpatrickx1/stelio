<section class="blog">
  <div class="container">
    <div class="blog__wrap">

      <?php
        $args = array('category_name' => 'projects',
                      'posts_per_page'=> -1
                  );
             
        $the_query = new WP_Query( $args );
    
        if ( $the_query->have_posts() ) {
            $i = 1;
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
      ?>

      <?php if($i == 1){ ?>
          <div class="blog__group">
      <?php } ?>

        <article id="post-<?php the_ID(); ?>" class="blog__item item">
          <a href="<?php the_permalink(); ?>" class="item__wrap" style="background-image: url(<?= has_post_thumbnail() ? get_the_post_thumbnail_url() : bloginfo('template_url') . '/images/blog.jpg' ?>)">
                
            <div class="info__top">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M31.4749 29.9691L31.722 0.068989C24.2315 0.141078 9.31225 0.244271 1.8219 0.316098L1.76016 4.05876C8.49646 3.99438 17.4387 3.93818 25.3053 3.86569L0.759206 28.4118L3.37704 31.0296L27.9231 6.48352L27.7116 30.0102L31.4749 29.9691Z" fill="white"/>
              </svg>
            </div>

            <h2><?php the_title(); ?></h2>

            <div class="item__info info">
              <div class="info__left">
                <?php if (have_rows('post_main_info')) :
                  while ( have_rows('post_main_info')) : the_row(); ?>

                      <div class="info__col">
                          <div class="info__title">
                              <?= get_sub_field('post_main_title'); ?>
                          </div>
                          <div class="info__description">
                              <?= get_sub_field('post_main_description'); ?>
                          </div>
                      </div>

                    <?php endwhile; ?>
                <?php endif; ?>
              </div>

              <div class="info__right">
                <svg width="45" height="46" viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.71387 44.7301L44.4938 45.0837C44.3907 34.3666 44.243 13.0206 44.1403 2.30373L38.7854 2.21538C38.8775 11.8534 38.9579 24.6476 39.0616 35.9029L3.94201 0.783257L0.196509 4.52875L35.3161 39.6484L1.65504 39.3457L1.71387 44.7301Z" fill="white"/>
                </svg>
              </div>

            </div>
          </a>
        </article>
      <?php if($i == 6) { ?>
    </div>
    <?php $i = 1;}else{$i++;} ?>

    <?php }
    } ?>

    </div>
  </div>
</section>