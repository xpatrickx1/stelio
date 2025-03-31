<?php include 'reviews-data.php' ?>

<section class="reviews">
  <div class="container reviews__wrap">

    <div class="reviews__top">
      <h2>
      <?php if ( get_field('reviews_title'))  { 
        echo get_field('reviews_title') ;
        } else { 
        if (get_bloginfo("language") == 'ru') {
          echo 'Отзывы с google карт' ;
        } else {
          echo 'Відгуки з google карт';
        } 
      }; ?>
      </h2>

      <div class="reviews__description section-description">
        <?= get_field('reviews_description') ? the_field('reviews_description') : 'Всі відгуки залишені реальними людьми. У цьому ви можете легко переконатися, зв’язавшись з ними по контактах у соціальних мережах.' ?>
      </div>
    </div>

    <div class="reviews__center">
      <ul class="reviews__list">
        <?php if (have_rows('reviews_list')) :
          while ( have_rows('reviews_list')) : the_row(); ?>
            <li class="item">
              <div class="item__title">
                <?= get_sub_field('item_title') ?>
                <span class='item__stars item__stars--<?= get_sub_field('item_rating') ?>'></span>
              </div>
              <div class="item__date"><?= get_sub_field('item_date') ?></div>
              <div class="item__text"><?= get_sub_field('item_text') ?></div>
            </li>
          <?php endwhile; ?>
        <?php else : ?>
          <?php foreach ( $reviews as $key => $item ) : ?>
            <li class="item">
              <div class="item__title">
                <?= $item['title'] ?>
                <span class='item__stars item__stars--<?= $item['stars'] ?>'></span>
              </div>
              <div class="item__date"><?= $item['date'] ?></div>
              <div class="item__text"><?= $item['text'] ?></div>
            </li>
          <?php endforeach; ?>

        <?php endif; ?>
        
      </ul>

    </div>
    <button id="reviewsShowmore" class="reviews__showmore button--second">
    <?php if ( get_field('reviews_showmore'))  { 
      echo get_field('reviews_showmore') ;
      } else { 
      if (get_bloginfo("language") == 'ru') {
        echo 'Загрузить еще' ;
      } else {
        echo 'Завантажити ще';
      } 
    }; ?>
  </button>
</section>