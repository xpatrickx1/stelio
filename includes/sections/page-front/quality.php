<?php

  $quality = [
  
    [
      'title' => 'Descor',
      'text' => 'Немецкие натяжные потолки из ткани с оптимальным соотношением цена-качество.',
      'link' => '#',
    ],
    [
      'title' => 'MSD',
      'text' => 'Потолки MSD (МСД) — мировой лидер среди производителей пленки для натяжных потолков.',
      'link' => '#',
    ],
    [
      'title' => 'TEQTUM',
      'text' => 'Противопожарные натяжные потолки TEQTUM KM2 отвечает требованиям российского законодательства о ...',
      'link' => '#',
    ],
  ];

?>

<section class="quality">
  <div class="container quality__wrap">

    <div class="quality__top">
      <h2>
        <?= get_field('quality_title') ? the_field('quality_title') : 'Мы используем только качественные материалы и комплектующие' ?>
      </h2>

      <div class="quality__description section-description">
        <?= get_field('quality_description') ? the_field('quality_description') : 'Используем в работе проверенные временем решения, которые гарантируют качество и надёжность потолочной конструкции. Гарантия на установку 7 лет по договору. Все материалы и комплектующие сертифицированы. Любой сертификат качества может продемонстрировать наш менеджер.' ?>
      </div>
    </div>

    <div class="quality__center">
      <ul class="quality__list">
        <?php if (have_rows('quality_list')) :
          while ( have_rows('quality_list')) : the_row(); ?>
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
          <?php foreach ( $quality as $key => $item ) : ?>
            <li class="item">
            <a href="<?= $item['link'] ?>">
              <div class="item__img">
                <img 
                  src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                  data-src="<?= bloginfo('template_url') . '/images/page-front/quality' . ($key + 1) . '.webp' ?>"
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