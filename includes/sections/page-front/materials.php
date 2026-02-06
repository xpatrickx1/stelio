<?php

$materials = [
  [
    'title' => get_bloginfo("language") == 'ru' ? 'Тканевые потолки' : 'Тканинні стелі',
    'text' => get_bloginfo("language") == 'ru' 
      ? 'Тканевый натяжной потолок из полиэстера с акриловой пропиткой. Экологичный и гипоаллергенный материал с оригинальной фактурой. Устанавливаются без нагревания.'
      : 'Тканинна натяжна стеля з поліестеру з акриловим просоченням. Екологічний та гіпоалергенний матеріал з оригінальною фактурою. Встановлюються без нагрівання.',
    'link' => '#',
  ],
  [
    'title' => get_bloginfo("language") == 'ru' ? 'Матовый потолок' : 'Матова стеля',
    'text' => get_bloginfo("language") == 'ru'
      ? 'Внешний вид матовой фактуры натяжного потолка похож на оштукатуренную поверхность или потолок из гипсокартона. Универсальное решение для стильных интерьеров, без блика и отражений.'
      : 'Зовнішній вигляд матової фактури натяжної стелі схожий на оштукатурену поверхню або стелю з гіпсокартону. Універсальне рішення для стильних інтер\'єрів, без блисків та відображень.',
    'link' => '#',
  ]
];


?>

<section class="materials">
  <div class="container materials__wrap">

    <div class="materials__top">
      <h2>
        <?php if ( get_field('materials_title'))  { 
          echo get_field('materials_title') ;
          } else { 
          if (get_bloginfo("language") == 'ru') {
            echo 'Современные полотна для натяжного потолка' ;
          } else {
            echo 'Сучасні полотна для натяжної стелі';
          } 
        }; ?>
      </h2>

      <div class="materials__description section-description">
        <?php if ( get_field('materials_title'))  { 
          echo get_field('materials_title') ;
          } else { 
          if (get_bloginfo("language") == 'ru') {
            echo 'Нейтральные и матовые материалы без искусственного глянца. Полная идентичность оштукатуренной поверхности.' ;
          } else {
            echo 'Нейтральні та матові матеріали без штучного глянцю. Повна ідентичність оштукатуреної поверхні.';
          } 
        }; ?>
      </div>
    </div>

    <div class="materials__center">
      <ul class="materials__list">
        <?php if (have_rows('materials_list')) :
          while ( have_rows('materials_list')) : the_row(); ?>
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
          <?php foreach ( $materials as $key => $item ) : ?>
            <li class="item">
            <a href="<?= $item['link'] ?>">
              <div class="item__img">
                <img 
                  src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                  data-src="<?= bloginfo('template_url') . '/images/page-front/materials' . ($key + 1) . '.webp' ?>"
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