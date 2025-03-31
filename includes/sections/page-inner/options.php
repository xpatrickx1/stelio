<?php

  $options = [
    [
      'title' => 'EuroKraab Strong',
      'text' => '<p>Усиленный профиль для неровных стен. Благодаря, повышенной жёсткости он остаётся прямым, и рельеф стены не сказывается на геометрии потолка. </p><p>Также усиленный профиль применяем поверх керамогранита — нужно меньше крепёжных отверстий.</p>',
    ],
    [
      'title' => 'Потолочный EuroKraab',
      'text' => '<p>Крепится на черновом потолке. </p><p>Это решает вопрос крепления к проблемным стенам — например, выполненным из мягкого материала или облицованным твёрдым керамогранитом.</p>',
    ],
    [
      'title' => 'Вентиляционный профиль AirKraab 2.0',
      'text' => '<p>Создаёт зазоры для движения воздуха по контуру потолка. </p><p>Давление воздуха над и под полотном уравновешивается.</p><p>Устраняет эффекта «гуляющего потолка», когда при открывании и закрывании двери полотно начинает колыхаться.</p>',
    ],
    [
      'title' => 'EuroSlott для ткани',
      'text' => '<p>Применяем для теневого зазора у тканевых натяжных потолков. </p><p>Создаёт мягкую тень и иллюзию отсутствия контакта потолка с вертикальными поверхностями.</p>',
    ],
  ];

?>

<section id="options" class="options">
  <div class="container options__wrap">

    <div class="options__top">
      <h2>
        <?= get_field('options_title') ? the_field('options_title') : 'Варианты теневых профилей под разные задачи' ?>
      </h2>

      <div class="options__description">
        <?= get_field('options_description') ? the_field('options_description') : 'Теневой зазор по периметру потолка получается благодаря особой геометрии профиля. Его кромка наклонена относительно плоскости примыкания, и полотно огибает её под острым углом. Это подчёркивает чёткие контуры потолка.  Крепление к стене поднято вверх относительно края полотна, что позволяет скрыть детали крепежа и контур припайки гарпуна к полотну.' ?>
      </div>
    </div>

    <ul class="options__list">
      <?php if (have_rows('options_list')) :
        while ( have_rows('options_list')) : the_row(); ?>
          <li class="item">
            <div class="item__left">
              <div class="item__title"><?= get_sub_field('item_title') ?></div>
              <div class="item__text"><?= get_sub_field('item_text') ?></div>
            </div>
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
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $options as $key => $item ) : ?>
          <li class="item">
            <div class="item__left">
              <div class="item__title"><?= $item['title'] ?></div>
              <div class="item__text"><?= $item['text'] ?></div>
            </div>
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-inner/options' . ($key + 1) . '.webp' ?>"
                class="lazy"
                width="1px"
                height="1px"
              />
            </div>
          </li>
        <?php endforeach; ?>

      <?php endif; ?>
    </ul>

  </div>
</section>