<?php

  $design = [
  
    [
      'title' => 'Двухуровнивые потолки',
      'text' => 'Зонируют помещение, основа для многих дизайнерских решений. Крепятся на специальную конструкцию из ...',
      'link' => '#',
    ],
    [
      'title' => 'С фотопечатью',
      'text' => 'Качественная UV фотопечать на натяжном потолке шириной до 5,5 метров. Нанести изображения можно на ...',
      'link' => '#',
    ],
    [
      'title' => 'Многоуровнивые',
      'text' => 'Потолки с переходом уровней из металлических конструкций. Для сметы требуется выезд технолога.',
      'link' => '#',
    ],
  ];

?>

<section class="design">
  <div class="container design__wrap">

    <div class="design__top">
      <h2>
        <?= get_field('design_title') ? the_field('design_title') : 'Конструкции и оригинальный дизайн' ?>
      </h2>
    </div>

    <div class="design__center">
      <ul class="design__list">
        <?php if (have_rows('design_list')) :
          while ( have_rows('design_list')) : the_row(); ?>
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
          <?php foreach ( $design as $key => $item ) : ?>
            <li class="item">
            <a href="<?= $item['link'] ?>">
              <div class="item__img">
                <img 
                  src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                  data-src="<?= bloginfo('template_url') . '/images/page-front/design' . ($key + 1) . '.webp' ?>"
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

  </div>
</section>