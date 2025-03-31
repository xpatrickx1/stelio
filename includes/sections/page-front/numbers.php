<?php

  $numbers = [
    'ru' => [
      [
        'title' => '10+',
        'text' => 'лет опыта',
      ],
      [
        'title' => '170+',
        'text' => 'реализованных проектов',
      ],
      [
        'title' => '18',
        'text' => 'монтажников готовых к работе',
      ],
      [
        'title' => '2400+',
        'text' => 'метров натянутых потолков',
      ],
    ],
    'ua' => [
      [
        'title' => '10+',
        'text' => 'років досвіду',
      ],
      [
        'title' => '170+',
        'text' => 'реалізованих проектів',
      ],
      [
        'title' => '18',
        'text' => 'майстрів готових до роботи',
      ],
      [
        'title' => '2400+',
        'text' => 'метрів зроблених стель',
      ],
    ]
    
  ];

?>

<section class="numbers">
  <div class="container numbers__wrap">

    <div class="numbers__top">
      <h2>
        <?= get_field('numbers_title') ? the_field('numbers_title') : 'Stelio в цыфрах' ?>
      </h2>
    </div>

    <div class="numbers__center">
      <ul class="numbers__list">
        <?php if (have_rows('numbers_list')) :
          while ( have_rows('numbers_list')) : the_row(); ?>
            <li class="item">
              <div class="item__title"><?= get_sub_field('item_title') ?></div>
              <div class="item__text"><?= get_sub_field('item_description') ?></div>
            </li>
          <?php endwhile; ?>
        <?php else : ?>
          <?php foreach ( get_bloginfo("language") == 'ru' ? $numbers['ru'] : $numbers['ua'] as $key => $item ) : ?>
            <li class="item">
              <div class="item__title"><?= $item['title'] ?></div>
              <div class="item__text"><?= $item['text'] ?></div>
            </li>
          <?php endforeach; ?>

        <?php endif; ?>
      </ul>
    </div>

  </div>
</section>