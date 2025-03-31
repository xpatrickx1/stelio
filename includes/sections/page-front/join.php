<?php

  $join = [
    [
      'title' => 'Безщелевой потолок',
      'text' => 'Бесщелевое примыкание потолка к стене, без декоративного резинового плинтуса. Реализуется с помощью ...',
      'link' => '#',
    ],
    [
      'title' => 'Теневой потолок',
      'text' => 'Теневое примыкание создаёт впечатление парения потолка с аккуратной линией тени. Подходит для всех ...',
      'link' => '#',
    ]
  ];

?>

<section class="join">
  <div class="container join__wrap">

    <div class="join__top">
      <h2>
        <?= get_field('join_title') ? the_field('join_title') : 'Виды примыкания натяжного потолка к стене' ?>
      </h2>

      <div class="join__description-wrp">
        <div class="join__description">
          <?= get_field('join_description') ? the_field('join_description') : 'Современный натяжной потолок это конструкция без декоративного плинтуса-заглушки по периметру стен. 
  Новые профильные системы для монтажа натяжного потолка создают эстетичное теневое или бесщелевое примыкание.' ?>
        </div>
      </div>
    </div>

    <ul class="join__list">
      <?php if (have_rows('join_list')) :
        while ( have_rows('join_list')) : the_row(); ?>
          <li class="item">
            <a href="<?= get_sub_field('item_link') ?>">
              <div class="item__img">
                <?php if(get_sub_field('item_img')['url']) : ?>
                  <img 
                    src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                    data-src="<?= get_sub_field('item_img')['url'] ?>"
                    class="lazy"
                    width="1px"
                    height="1px"
                  />
                <?php endif; ?>
              </div>
              <div class="item__title"><?= get_sub_field('item_title') ?></div>
              <div class="item__text"><?= get_sub_field('item_text') ?></div>
            </a>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $join as $key => $item ) : ?>
          <li class="item">
          <a href="<?= $item['link'] ?>">
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-front/join' . ($key + 1) . '.webp' ?>"
                class="lazy"
                width="1px"
                height="1px"
              />
            </div>
            <div class="item__title"><?= $item['title'] ?></div>
            <div class="item__text"><?= $item['text'] ?></div>
            </a>
          </li>
        <?php endforeach; ?>

      <?php endif; ?>
    </ul>

  </div>
</section>