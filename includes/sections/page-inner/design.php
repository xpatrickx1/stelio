<?php

  $design = [
    [
      'title' => 'Гарпун фиксируется в посадочном месте. Её кромка находится на расстоянии 7 мм от стены и обеспечивает теневой зазор.',
    ],
    [
      'title' => 'Профиль и гарпун выполняют в чёрном цвете — это даёт эффект глубокой тени и скрывает детали крепежа.',
    ]
  ];

?>

<section class="design">
  <div class="container design__wrap">

    <div class="design__top">
      <h3>
        <?= get_field('design_title') ? the_field('design_title') : 'Конструкция системы' ?>
      </h3>

      <div class="design__description">
        <?= get_field('design_description') ? the_field('design_description') : '<p>Теневой зазор по периметру потолка получается благодаря особой геометрии профиля. </p><p>Его кромка наклонена относительно плоскости примыкания, и полотно огибает её под острым углом. </p><p>Это подчёркивает чёткие контуры потолка. </p><p>Крепление к стене поднято вверх относительно края полотна, что позволяет скрыть детали крепежа и контур припайки гарпуна к полотну.</p>' ?>
      </div>
    </div>

    <ul class="design__list">
      <?php if (have_rows('design_list')) :
        while ( have_rows('design_list')) : the_row(); ?>
          <li class="item">
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
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $design as $key => $item ) : ?>
          <li class="item">
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-inner/innerDesign' . ($key + 1) . '.webp' ?>"
                class="lazy"
                width="1px"
                height="1px"
              />
            </div>
            <div class="item__title"><?= $item['title'] ?></div>
          </li>
        <?php endforeach; ?>

      <?php endif; ?>
    </ul>

  </div>
</section>