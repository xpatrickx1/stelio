<section class="offices">
  <div class="container">
    
  </div>
  
  <div class="container offices__wrap">

    <h3>
      <?php if ( get_field('offices_title'))  { 
          echo get_field('offices_title') ;
          } else { 
          if (get_bloginfo("language") == 'ru') {
            echo 'Мобильные офисы </br> и представительства' ;
          } else {
            echo 'Мобільні офіси </br> та представництва';
          } 
        }; ?>
    </h3>

    <div class="offices__description">
      <?php if ( get_field('officesn_description'))  { 
          echo get_field('officesn_description') ;
          } else { 
          if (get_bloginfo("language") == 'ru') {
            echo 'Приезжайте в гости на кофе в центральный шоурум на ул. Б.Хмельницкого 33/34, офиc 9' ;
          } else {
            echo 'Приїжджайте на каву в центральний шоурум на вул. Б.Хмельницького 33/34, офіс 9';
          } 
        }; ?>
    </div> 

    <div class="offices__list-title">
      <?php if ( get_field('offices_list_title'))  { 
          echo get_field('offices_list_title') ;
          } else { 
          if (get_bloginfo("language") == 'ru') {
            echo 'Мы устанавливаем натяжные потолки в городах:' ;
          } else {
            echo 'Ми встановлюємо натяжні стелі в містах:';
          } 
        }; ?>
    </div> 
  
    
    <div class="offices__list">
      <?php
        $args = [
          'category_name'  => 'offices',
          'post_type'      => 'post',
          'posts_per_page' => -1,
          'post_status'    => 'publish',
        ];

            
        $offices_query = new WP_Query($args);
      
      if ($offices_query->have_posts()) :
          while ($offices_query->have_posts()) : $offices_query->the_post();
      ?>
              <a class="offices__item item" href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
      <?php
          endwhile;
          wp_reset_postdata();
      endif;
        ?>
      
    </div>
  </div>
</section>
