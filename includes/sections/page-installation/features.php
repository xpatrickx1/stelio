<?php

$features = [
  'ru' => [
      [
        'title' => 'Тканевые натяжные потолки',
        'text' => 'Тканевые полотна устанавливаются на фирменный пластиковый профиль-прищепку методом натяжки без необходимости нагрева помещения. Профиль крепится с шагом 5-7 см, а ткань отрезается с запасом по 25 см с каждой стороны для удобства монтажа. В отличие от ПВХ-плёнки, ткань не требует сварки с гарпуном, и пластиковая вставка не используется благодаря уникальной системе крепления.',
      ],
      [
        'title' => 'Процесс создания многоуровневой конструкции',
        'text' => 'На этапе замера разрабатывается макет, который согласовывается с клиентом. После доработки макет отправляется в цех, где изготавливается из профилей Prozet. На объекте монтажники собирают конструкцию из привезённых элементов.',
      ],
      [
        'title' => 'Установка световых потолков',
        'text' => 'Светодиодная лента монтируется на черновой потолок, поверх которого натягивается светопрозрачное полотно. Подготовка базового потолка включает грунтовку или отделку пластиком для устранения просвечивания.',
      ],
    ],
    'ua' => [
      [
        'title' => 'Натяжні стелі від 149₴/м2',
        'text' => 'Ціна тільки за дешеве полотно, без профілю та монтажних робіт.',
      ],
      [
        'title' => 'Матеріал із встановленням 420 ₴ / м2',
        'text' => 'Вартість без урахування профілю по периметру. Тільки плівка та натяжка полотна.',
      ],
      [
        'title' => 'Гарантія 15 років на стелю',
        'text' => 'Це не монтажні роботи, а гарантія виробника.',
      ],
    ]
];

?>

<section id="features" class="features">
  <div class="container features__wrap">

    <div class="features__top">
      <h2>
      <?php if ( get_field('features_title'))  { 
          echo get_field('features_title') ;
          } else { 
          if (get_bloginfo("language") == 'ru') {
            echo 'Особенности монтажа различных типов потолков' ;
          } else {
            echo 'Особливості монтажу різних типів стель';
          } 
        }; ?>
      </h2>

      <ul class="features__list">
        <?php if (have_rows('features_list')) :
          while ( have_rows('features_list')) : the_row(); ?>
            <li class="item">
                <div class="item__title item-title18">
                <?= get_sub_field('item_title') ?>
                </div>  
                <div class="item__text">
                <?= get_sub_field('item_text') ?>
                </div>  
            </li>
          <?php endwhile; ?>
        <?php else : ?>
          <?php foreach ( get_bloginfo("language") == 'ru' ? $features['ru'] : $features['ua'] as $key => $item ) : ?>
            <li class="item">
              <div class="item__title item-title18">
                <?= $item['title'] ?>
              </div>  
              <div class="item__text">
                <?= $item['text'] ?> 
              </div>  
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </div>

    <ul class="features__bottom">
    <?php if (have_rows('features_images')) :
          while ( have_rows('features_images')) : the_row(); ?>
          <li>
            <img 
              src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
              data-src="<?= get_sub_field('item_img')['url'] ?>"
              class="lazy"
              width="1px"
              height="1px"
            />
            <div class="item__text">
                <?= get_sub_field('item_text') ?>
            </div>
          </li>
          <?php endwhile; ?>
        <?php else : ?>
          <li>
            <img 
              src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
              data-src="<?= bloginfo('template_url') . '/images/page-installation/features1.png' ?>"
              class="lazy"
              width="1px"
              height="1px"
            />
            <div class="item__text">
            <?= get_bloginfo("language") == 'ru' ? ' Мастер заводит полотно в профиль' : 'Майстер заводить полотно у профіль'?>
            </div>  
          </li>
          <li>
            <img 
              src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
              data-src="<?= bloginfo('template_url') . '/images/page-installation/features2.png' ?>"
              class="lazy"
              width="1px"
              height="1px"
            />
            <div class="item__text">
            <?= get_bloginfo("language") == 'ru' ? 'Сборка перехода уровня' : 'Складання переходу рівня'?>
            
            </div>  
          </li>
          <li>
            <img 
              src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
              data-src="<?= bloginfo('template_url') . '/images/page-installation/features3.png' ?>"
              class="lazy"
              width="1px"
              height="1px"
            />
            <div class="item__text">
            <?= get_bloginfo("language") == 'ru' ? 'Проклейка светодиодной ленты' : 'Проклеювання світлодіодної стрічки'?>
            
            </div>  
          </li>
        <?php endif; ?>
    </ul>
  </div>
</section>