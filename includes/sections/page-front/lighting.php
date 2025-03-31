<?php

  $lighting = [
  
    [
      'title' => 'Парящая подсветка',
      'text' => 'Натяжной потолок с эффектом «парения», благодаря специальному парящему профилю и светодиодной подсветки по периметру. Используется для акцентных подсветок вдоль стен.',
      'link' => '#',
    ],
    [
      'title' => 'C трековыми светильниками',
      'text' => 'Трековая система освещения для натяжных потолков создаёт разные сценарии подсветки в интерьере. Мы устанавливаем все виды систем: встроенные, накладные и с магнитными светильниками.',
      'link' => '#',
    ],
    [
      'title' => 'Световые линии',
      'text' => 'Световые линии на натяжном потолке – встроенный профиль со светодиодной подсветкой полосами, прямолинейной или криволинейной формы. В качестве акцентного или основного освещения комнаты.',
      'link' => '#',
    ],
    [
      'title' => 'Световые потолки',
      'text' => 'Натяжной потолок со светодиодной подсветкой внутри через светопрозрачное полотно. � авномерное мягкое заполнение светом всей площади потолка. Используют как основное освещение.',
      'link' => '#',
    ],
    [
      'title' => 'Контурная подсветка',
      'text' => 'Контурная подсветка для натяжного потолка акцентирует внимание на геометрии помещения. Светодиодная лента устанавливается в профиль за полотном. Мягкая подсветка с рассеянным свечением по периметру стен.',
      'link' => '#',
    ],
    [
      'title' => 'С подсветкой',
      'text' => 'Натяжные потолки со светодиодной подсветкой в качестве декоративного или основного освещения. Варианты подсветки: по периметру помещения, подсветка за полотном с полным засветом.',
      'link' => '#',
    ],
  ];

?>

<section class="lighting">
  <div class="container lighting__wrap">

    <div class="lighting__top">
      <h2>
        <?= get_field('lighting_title') ? the_field('lighting_title') : 'Освещение для натяжного потолка' ?>
      </h2>

      <div class="lighting__description section-description">
        <?= get_field('lighting_description') ? the_field('lighting_description') : 'Встроенная светодиодная подсветка в качестве основного или декоративного освещения. Разные световые сценарии, комбинации и расстановка акцентов. Натяжной потолок — идеальное решение для функционального освещения интерьера.' ?>
      </div>
    </div>

    <div class="lighting__center">
      <ul class="lighting__list">
        <?php if (have_rows('lighting_list')) :
          while ( have_rows('lighting_list')) : the_row(); ?>
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
          <?php foreach ( $lighting as $key => $item ) : ?>
            <li class="item">
            <a href="<?= $item['link'] ?>">
              <div class="item__img">
                <img 
                  src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                  data-src="<?= bloginfo('template_url') . '/images/page-front/lighting' . ($key + 1) . '.webp' ?>"
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