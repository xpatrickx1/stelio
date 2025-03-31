<?php

  $examples = [
  
    [
      'price' => '25 000 грн. ',
      'title' => 'Натяжной потолок для кухни 10 м2',
      'text' => 'Качественная установка, недорогая цена',
      'square' => '10м2',
      'pserimeter' => '14м2',
      'canvas' => 'MSD Evolution',
      'rod' => '2 м.п.',
      'angle' => '2 шт.',
      'lightingPoints' => '2 шт.',
    ],
    [
      'price' => '35 000 грн. ',
      'title' => 'Натяжной потолок для кухни 10 м2',
      'text' => 'Быстрая установка, доступная цена',
      'square' => '10м2',
      'pserimeter' => '14м2',
      'canvas' => 'MSD Evolution',
      'rod' => '2 м.п.',
      'angle' => '2 шт.',
      'lightingPoints' => '2 шт.',
    ],
    [
      'price' => '17 000 грн. ',
      'title' => 'Потолок для детской 10 м2',
      'text' => 'Классический белый матовый потолок с люстрой',
      'square' => '10м2',
      'pserimeter' => '14м2',
      'canvas' => 'MSD Evolution',
      'rod' => '2 м.п.',
      'angle' => '2 шт.',
      'lightingPoints' => '2 шт.',
    ],
    [
      'price' => '25 000 грн. ',
      'title' => 'Натяжной потолок для кухни 10 м2',
      'text' => 'Качественная установка, недорогая цена',
      'square' => '10м2',
      'pserimeter' => '14м2',
      'canvas' => 'MSD Evolution',
      'rod' => '2 м.п.',
      'angle' => '2 шт.',
      'lightingPoints' => '2 шт.',
    ],
    [
      'price' => '35 000 грн. ',
      'title' => 'Натяжной потолок для кухни 10 м2',
      'text' => 'Быстрая установка, доступная цена',
      'square' => '10м2',
      'pserimeter' => '14м2',
      'canvas' => 'MSD Evolution',
      'rod' => '2 м.п.',
      'angle' => '2 шт.',
      'lightingPoints' => '2 шт.',
    ],
    [
      'price' => '17 000 грн. ',
      'title' => 'Потолок для детской 10 м2',
      'text' => 'Классический белый матовый потолок с люстрой',
      'square' => '10м2',
      'pserimeter' => '14м2',
      'canvas' => 'MSD Evolution',
      'rod' => '2 м.п.',
      'angle' => '2 шт.',
      'lightingPoints' => '2 шт.',
    ],
  ];

?>
<section class="examples">
  <div class="container examples__wrap">

    <div class="examples__top">
      <h2>
      <?php if ( get_field('examples_title'))  { 
          echo get_field('examples_title') ;
          } else { 
          if (get_bloginfo("language") == 'ru') {
            echo 'Примеры установленных натяжных потолков' ;
          } else {
            echo 'Зразки натяжних стель, які були встановлені';
          } 
        }; ?>
      </h2>

      <div class="examples__description section-description">
      <?php if ( get_field('examples_description'))  { 
          echo get_field('examples_description') ;
          } else { 
          if (get_bloginfo("language") == 'ru') {
            echo 'Примеры установленных натяжных потолков в Киеве и области с учётом всех работ, материалов и комплектующих. Цена зависит от материала полотна, профильной системы примыкания к стене и светотехнического оборудования.' ;
          } else {
            echo 'Зразки натяжних стель, встановлених у Києві та області, з урахуванням всіх робіт, матеріалів і комплектуючих. Вартість залежить від типу полотна, профільної системи приєднання до стіни та світлового обладнання.';
          } 
        }; ?>
      </div>
    </div>

    <div class="examples__center">
      <ul class="examples__list">
        <?php if (have_rows('examples_list')) :
          while ( have_rows('examples_list')) : the_row(); ?>
            <li class="item">
              <div class="item__price">
                <div class="item__top">
                  <div class="item__top--text"><?= get_bloginfo("language") == 'ru' ? 'Всё включено' : 'Все включено'?></div> <div class="item__value"><?= get_sub_field('item_price') ?></div>
                </div>
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
              <div class="item__main">
                <div class="item__title"><?= get_sub_field('item_title') ?></div>
                <div class="item__text"><?= get_sub_field('item_text') ?></div>
              </div>
              <div class="item__bottom">
                <?php if (have_rows('item_params')) :
                  while ( have_rows('item_params')) : the_row(); ?>
                    <div class="item__info">
                      <span class="item__info--left"><?= get_sub_field('param_title'); ?></span> <span class="item__info--right"><?= get_sub_field('param_value'); ?></span>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </li>
          <?php endwhile; ?>
        <?php else : ?>
          <?php foreach ( $examples as $key => $item ) : ?>
            <li class="item">
              <div class="item__price">
                <div class="item__top">
                  <div class="item__top--text"><?= get_bloginfo("language") == 'ru' ? 'Всё включено' : 'Все включено'?></div> <div class="item__value"><?= $item['price'] ?></div>
                </div>
              </div>
              <div class="item__img">
                <img 
                  src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                  data-src="<?= bloginfo('template_url') . '/images/page-front/examples' . ($key + 1) . '.webp' ?>"
                  class="lazy"
                  width="1px"
                  height="1px"
                />
              </div>
              <div class="item__main">
                <div class="item__title"><?= $item['title'] ?></div>
                <div class="item__text"><?= $item['text'] ?></div>
              </div>
              <div class="item__bottom">
                
                <div class="item__info item__square">
                  <span class="item__info--left">площадь:</span> <span class="item__info--right"><?= $item['square'] ?></span>
                </div>
                <div class="item__info item__pserimeter">
                  <span class="item__info--left">периметр:</span> <span class="item__info--right"><?= $item['pserimeter'] ?></span>
                </div>
                <div class="item__info item__canvas">
                  <span class="item__info--left">канва:</span> <span class="item__info--right"><?= $item['canvas'] ?></span>
                </div>
                <div class="item__info item__rod">
                  <span class="item__info--left">рольга:</span> <span class="item__info--right"><?= $item['rod'] ?></span>
                </div>
                <div class="item__info item__angle">
                  <span class="item__info--left">уголки:</span> <span class="item__info--right"><?= $item['angle'] ?></span>
                </div>
                <div class="item__info item__lightingPoints">
                  <span class="item__info--left">точки освещения:</span> <span class="item__info--right"><?= $item['lightingPoints'] ?></span>
                </div>
              </div>
            </li>
          <?php endforeach; ?>

        <?php endif; ?>
      </ul>
    </div>

  </div>
</section>