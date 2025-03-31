<?php

  $call = [
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
        'title' => 'Виміри проводяться щодня з 9 до 20 години.',
      ],
      [
        'title' => 'Послуга безкоштовна, навіть якщо ви відмовитеся від замовлення!',
      ],
    ]
  ];

?>

<section class="call">
  <div class="container call__wrap">

    <div class="call__top">
      <h2>
        <?php if ( get_field('call_title'))  { 
                echo get_field('call_title') ;
                } else { 
                if (get_bloginfo("language") == 'ru') {
                  echo 'Запишитесь на бесплатный замер потолков' ;
                } else {
                  echo 'Запишіться на безкоштовне вимірювання стель';
                } 
              }; ?>
      </h2>
      
      <div class="call__description section-description">
        <?php if ( get_field('call_title'))  { 
          echo get_field('call_title') ;
          } else { 
          if (get_bloginfo("language") == 'ru') {
            echo 'Технолог приедет в удобное для вас время. Замерит помещения, продемонстрирует материалы, подберёт подходящие конструкции.' ;
          } else {
            echo 'Технолог приїде у зручний для вас час. Заміряє приміщення, продемонструє матеріали, підбере відповідні конструкції.';
          } 
        }; ?>
      </div>
    

      <ul class="call__list">
        <?php if (have_rows('call_list')) :
          while ( have_rows('call_list')) : the_row(); ?>
            <li class="item"><?= get_sub_field('item_title') ?></li>
          <?php endwhile; ?>
        <?php else : ?>
          <?php foreach ( get_bloginfo("language") == 'ru' ? $call['ru'] : $call['ua'] as $key => $item ) : ?>
            <li class="item"><?= $item['title'] ?></li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </div>

    <div class="call__bottom">
      <?php echo do_shortcode('[contact-form-7 id="af0fa90" title="Contact form 1"]') ?>
    </div>

  </div>
</section>