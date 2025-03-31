<?php include get_template_directory() . '/includes/modules/reviews-data.php' ?>

<section id="reviews" class="reviews">
  <div class="container reviews__wrap">

    <div class="reviews__top">
      <h2>
        <?= get_field('reviews_title') ? the_field('reviews_title') : '' ?>
        <?php if ( get_field('reviews_title'))  { 
        echo get_field('reviews_title') ;
        } else { 
        if (get_bloginfo("language") == 'ru') {
          echo 'Достоверные отзывы наших заказчиков' ;
        } else {
          echo 'Чесні відгуки наших замовників.';
        } 
      }; ?>
      </h2>

      <div class="reviews__description section-description">
      <?php if ( get_field('reviews_description'))  { 
        echo get_field('reviews_description') ;
        } else { 
        if (get_bloginfo("language") == 'ru') {
          echo 'Все отзывы оставлены реальными людьми. В этом можно легко убедиться, связавшись с ними по контактам в социальных сетях.' ;
        } else {
          echo 'Всі відгуки залишені реальними людьми. У цьому ви можете легко переконатися, зв’язавшись з ними по контактах у соціальних мережах.';
        } 
      }; ?>
        <?= get_field('reviews_description') ? the_field('reviews_description') : 'Всі відгуки залишені реальними людьми. У цьому ви можете легко переконатися, зв’язавшись з ними по контактах у соціальних мережах.' ?>
      </div>
    </div>

    <div class="reviews__center">
      <ul class="reviews__list">
        <?php if (have_rows('reviews_list')) :
          while ( have_rows('reviews_list')) : the_row(); ?>
            <li class="item">
              <div class="item__title"><?= get_sub_field('item_title') ?></div>
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
  </div>
</section>