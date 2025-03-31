<?php

  $catalogTop = [
    [
      'title' => 'Многоуровневые',
      'text' => 'Потолки с переходом уровней из металлических конструкций. Для сметы требуется выезд технол...',
      'link' => '#',
    ],
    [
      'title' => 'Звездное небо',
      'text' => 'Натяжной потолок со звёздным небом это инсталляция из мерцающих звёзд с помощью оптоволоко...',
      'link' => '#',
    ],
    [
      'title' => 'С фотопечатью',
      'text' => 'Качественная UV фотопечать на натяжном потолке шириной до 5,5 метров. Нанести изображения ...',
      'link' => '#',
    ]
  ];

  $catalogBrand = [
    [
      'title' => 'Teqtum',
      'text' => 'Противопожарные натяжные потолки TEQTUM KM2 отвечает требованиям украинского законодательства...',
      'link' => '#',
    ],
    [
      'title' => 'MSD',
      'text' => 'Потолки MSD (МСД) — мировой лидер среди производителей пленки для натяжных потолков.',
      'link' => '#',
    ],
    [
      'title' => 'Система Stelio',
      'text' => 'Бесщелевой натяжной потолок «Стелио» - идеальное примыкание полотна к стене, без резиновой..',
      'link' => '#',
    ],
    [
      'title' => 'Descor',
      'text' => 'Немецкие натяжные потолки из ткани с оптимальным соотношением цена-качество.',
      'link' => '#',
    ]
  ];

  $catalogRow3 = [
    [
      'title' => 'Двухуровневые потолки',
      'text' => 'Зонируют помещение, основа для многих дизайнерских решений. Крепятся на специальную констр...',
      'img' => 'catalog-3-1',
      'link' => '#',
    ],
    [
      'title' => 'С трековыми светильниками',
      'text' => 'Трековая система освещения для натяжных потолков создаёт разные сценарии подсветки в интерьере..',
      'link' => '#',
      'img' => 'catalog-3-2',
    ],
    [
      'title' => 'Контурная подсветка',
      'text' => 'Контурная подсветка для натяжного потолка акцентирует внимание на геометрии помещения. Све...',
      'link' => '#',
      'img' => 'catalog-3-3',
    ],
  ];

  $catalogRow4 = [
    [
      'title' => 'Clipso',
      'text' => 'Бесшовные тканевые потолки премиум-класса. Эстетическое и функциональное решение для потол...',
      'link' => '#',
    ],
    [
      'title' => 'Cerutti St',
      'text' => 'Широкоформатное тканевое полотно с двухсторонней пропиткой и слоем защитного лака с больши...',
      'link' => '#',
    ],
    [
      'title' => 'Парящая подсветка',
      'text' => 'Натяжной потолок с эффектом «парения», благодаря специальному парящему профилю и светодиод...',
      'link' => '#',
    ],
  ];
  
  $catalogRow5 = [
    [
      'title' => 'Бесщелевой потолок',
      'text' => 'Бесщелевое примыкание потолка к стене, без декоративного резинового плинтуса. Реализуется ...',
      'link' => '#',
    ],
    [
      'title' => 'Световые потолки',
      'text' => 'Натяжной потолок со светодиодной подсветкой внутри через светопрозрачное полотно. Равномер...',
      'link' => '#',
    ],
    [
      'title' => 'С подсветкой',
      'text' => 'Натяжные потолки со светодиодной подсветкой в качестве декоративного или основного освещен...',
      'link' => '#',
    ],
    [
      'title' => 'Световые линии',
      'text' => 'Световые линии на натяжном потолке - встроенный профиль со светодиодной подсветкой полосам...',
      'link' => '#',
    ],
  ];

  $catalogRow6 = [
    [
      'title' => 'Теневой потолок',
      'text' => 'Теневое примыкание создаёт впечатление парения потолка с аккуратной линией тени.
Подходит ...',
      'link' => '#',
    ],
    [
      'title' => 'Double Vision',
      'text' => 'При включении светодиодной подсветки на натяжном потолке появляется скрытый рисунок фотопе...',
      'link' => '#',
    ],
    [
      'title' => 'Тканевые потолки',
      'text' => 'Тканевый натяжной потолок из полиэстера с акриловой пропиткой. Экологичный и гип...',
      'link' => '#',
    ],
  ];

  $catalogRow7 = [
    [
      'title' => 'Матовый потолок',
      'text' => 'Внешний вид матовой фактуры натяжного потолка похож на оштукатуренную поверхность или пото...',
      'link' => '/steli/catalog/matte-stretch-ceilings',
    ],
    [
      'title' => 'Сатиновые',
      'text' => 'Потолки из сатина - гладкая, приятная поверхность с небольшим перламутровым глянцем. Униве...',
      'link' => '#',
    ],
    [
      'title' => 'Глянцевые',
      'text' => 'Глянцевая (лаковая) фактура для акцентов в дизайне или недорогого варианта отделки вашего ...',
      'link' => '#',
    ],
  ];

?>

<section class="catalog">
  <div class="container ">
    <div class="catalog__wrap">
    <div class="breadcrumbs">
      <span><a href="<?= home_url(); ?>"><?= get_bloginfo("language") == 'ru' ? 'Натяжные потолки в Киеве' : 'Натяжні стелі у Києві' ?></a></span>
      <span class="breadcrumbs__slash"> / </span>
      <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : 'Каталог потолков' ?></span>
    </div>
    <div class="catalog__top">
      <h1>
        <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
      </h1>

    <ul class="catalog__list">
      <?php if (have_rows('catalog_top')) :
        while ( have_rows('catalog_top')) : the_row(); ?>
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
        <?php foreach ( $catalogTop as $key => $item ) : ?>
          <li class="item">
          <a href="<?= $item['link'] ?>">
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-catalog/catalog' . ($key + 1) . '.webp' ?>"
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

    <ul class="catalog__list list__brands">
      <?php if (have_rows('catalog_brandlist')) :
        while ( have_rows('catalog_brandlist')) : the_row(); ?>
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
        <?php foreach ( $catalogBrand as $key => $item ) : ?>
          <li class="item">
          <a href="<?= $item['link'] ?>">
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-catalog/catalogBrand' . ($key + 1) . '.webp' ?>"
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

    <ul class="catalog__list catalog__list_3">
      <?php if (have_rows('catalog__list_3')) :
        while ( have_rows('catalog__list_3')) : the_row(); ?>
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
        <?php foreach ( $catalogRow3 as $key => $item ) : ?>
          <li class="item">
          <a href="<?= $item['link'] ?>">
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-catalog/catalog-3-' . ($key + 1) . '.webp' ?>"
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

    <ul class="catalog__list catalog__list_4">
      <?php if (have_rows('catalog_list_4')) :
        while ( have_rows('catalog_list_4')) : the_row(); ?>
          <li class="item">
            <a href="<?= get_sub_field('item_link') ?>">
              <div class="item__img">
                <?php if(get_sub_field('item_image')['url']) : ?>
                  <img 
                    src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                    data-src="<?= get_sub_field('item_image')['url'] ?>"
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
        <?php foreach ( $catalogRow4 as $key => $item ) : ?>
          <li class="item">
          <a href="<?= $item['link'] ?>">
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-catalog/catalog-4-' . ($key + 1) . '.webp' ?>"
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

    <ul class="catalog__list catalog__list_5">
      <?php if (have_rows('catalog__list_5')) :
        while ( have_rows('catalog__list_5')) : the_row(); ?>
          <li class="item">
            <a href="<?= get_sub_field('item_link') ?>">
              <div class="item__img">
                  <img 
                    src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                    data-src="<?= get_sub_field('item_img')['url'] ?>"
                    class="lazy"
                    width="1px"
                    height="1px"
                  />
              </div>
              <div class="item__title"><?= get_sub_field('item_title') ?></div>
              <div class="item__text"><?= get_sub_field('item_text') ?></div>
            </a>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $catalogRow5 as $key => $item ) : ?>
          <li class="item">
          <a href="<?= $item['link'] ?>">
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-catalog/catalog-5-' . ($key + 1) . '.webp' ?>"
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
    
    <ul class="catalog__list catalog__list_6">
    <?php if (have_rows('catalog_list_6')) :
        while ( have_rows('catalog_list_6')) : the_row(); ?>
          <li class="item">
            <a href="<?= get_sub_field('item_link') ?>">
              <div class="item__img">
                <?php if(get_sub_field('item_image')['url']) : ?>
                  <img 
                    src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                    data-src="<?= get_sub_field('item_image')['url'] ?>"
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
        <?php foreach ( $catalogRow6 as $key => $item ) : ?>
          <li class="item">
          <a href="<?= $item['link'] ?>">
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-catalog/catalog-6-' . ($key + 1) . '.webp' ?>"
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

    <ul class="catalog__list catalog__list_7">
      <?php if (have_rows('catalog__list_7')) :
        while ( have_rows('catalog__list_7')) : the_row(); ?>
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
        <?php foreach ( $catalogRow7 as $key => $item ) : ?>
          <li class="item">
          <a href="<?= $item['link'] ?>">
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-catalog/catalog-7-' . ($key + 1) . '.webp' ?>"
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