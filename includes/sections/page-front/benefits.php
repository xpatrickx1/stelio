<?php

  $benefits = [
  
    [
      'title' => 'Частные заказчики',
      'text' => 'сделаем красивые натяжные потолки на качественных комплектующих;',
    ],
    [
      'title' => 'Дизайнеры, строители',
      'text' => 'проработаем ваш проект и профессионально реализуем на объекте;',
    ],
    [
      'title' => 'Монтажные бригады',
      'text' => 'выгодные дилерские условия и ассортимент.',
    ],
  ];

?>

<section class="benefits">
  <div class="container benefits__wrap">

    <div class="benefits__top">
      <h2>
        <?= get_field('benefits_title') ? the_field('benefits_title') : 'Кому выгодно заказывать у нас натяжные потолки' ?>
      </h2>
    </div>

    <div class="benefits__center">
      <div class="benefits__description section-description">
        <?= get_field('benefits_description') ? the_field('benefits_description') : '<strong>Мы решаем задачи разной сложности:</strong> от комплектовки простых заказов до партнёрских проектов с уникальным дизайном и поэтапной реализацией.' ?>
      </div>
      <ul class="benefits__list">
        <?php if (have_rows('benefits_list')) :
          while ( have_rows('benefits_list')) : the_row(); ?>
            <li class="item">
              <div class="item__title"><?= get_sub_field('item_title') ?></div>
              <div class="item__text"><?= get_sub_field('item_description') ?></div>
            </li>
          <?php endwhile; ?>
        <?php else : ?>
          <?php foreach ( $benefits as $key => $item ) : ?>
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