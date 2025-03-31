<?php

  $order = [
    'ru' => [
      [
        'title' => 'Точная итоговая стоимость и сроки монтажа потолков.',
      ],
      [
        'title' => 'Замеры проводятся каждый день с 9 до 20 часов.',
      ],
      [
        'title' => 'Услуга бесплатная, даже если вы откажетесь от заказа!',
      ],
    ],
    'ua' => [
      [
        'title' => 'Точна підсумкова вартість та терміни монтажу стель.',
      ],
      [
        'title' => 'Заміри проводяться щодня з 9 до 20 години.',
      ],
      [
        'title' => 'Послуга безкоштовна, навіть якщо ви відмовитеся від замовлення!',
      ],
    ]
  ]

?>

<section id="order" class="order">
  <div class="container order__wrap">

    <div class="order__top">
      <h2>
      <?php if ( get_field('order_title'))  { 
        echo get_field('order_title') ;
          } else { 
            if (get_bloginfo("language") == 'ru') {
              echo 'Закажите детальный расчет стоимости' ;
            } else {
              echo 'Замовте детальний розрахунок вартості';
            } 
        }; ?>
      </h2>

      <div class="order__description section-description">
      <?php if ( get_field('order_description'))  { 
        echo get_field('order_description') ;
          } else { 
            if (get_bloginfo("language") == 'ru') {
              echo 'Отправьте ваш проект и требования по материалам. Мы посчитаем, составим предложение и перезвоним для консультации по смете.' ;
            } else {
              echo 'Надішліть ваш проект та вимоги за матеріалами. Ми порахуємо, складемо пропозицію та передзвонимо для консультації з кошторису.';
            } 
        }; ?>
      </div>
    

      <ul class="order__list">
        <?php if (have_rows('order_list')) :
          while ( have_rows('order_list')) : the_row(); ?>
            <li class="item"><?= get_sub_field('item_title') ?></li>
          <?php endwhile; ?>
        <?php else : ?>
          <?php foreach ( get_bloginfo("language") == 'ru' ? $order['ru'] : $order['ua'] as $key => $item ) : ?>
            <li class="item"><?= $item['title'] ?></li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </div>

    <div class="order__bottom">
      <?php echo do_shortcode('[contact-form-7 id="993d5f8" title="orderForm"]') ?>
    </div>

  </div>
</section>