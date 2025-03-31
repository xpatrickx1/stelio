<?php

  $advertising = [
  'ru' => [
      [
        'title' => 'Натяжные потолки от 149 ₴ / м2',
        'text' => 'Цена только за дешевое полотно, без профиля и монтажных работ.',
      ],
      [
        'title' => 'Материал с установкой 420 ₴ / м2',
        'text' => 'Стоимость без учёта профиля по периметру. Только плёнка и натяжка полотна.',
      ],
      [
        'title' => 'Гарантия 15 лет на потолоки',
        'text' => 'Это не монтажные работы, а гарантия производителя плёнки.',
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

<section class="advertising">
  <div class="container advertising__wrap">

    <div class="advertising__top">
      <h2>
      <?php if ( get_field('advertising_title'))  { 
          echo get_field('advertising_title') ;
          } else { 
          if (get_bloginfo("language") == 'ru') {
            echo 'Недостоверная реклама натяжных потолков' ;
          } else {
            echo 'Недостовірна реклама натяжних стель';
          } 
        }; ?>
      </h2>

      <div class="advertising__description section-description">
        <?php if ( get_field('advertising_description'))  { 
          echo get_field('advertising_description') ;
          } else { 
          if (get_bloginfo("language") == 'ru') {
            echo 'Кажется, что все компании по натяжным потолкам в Киеве одинаковые. На самом деле, за рекламными ухищрениями с низкими ценами за мистический 1 м2 прячется много подводных камней. Самая частая занижение ценника, без указания стоимости профиля и монтажных работ.' ;
          } else {
            echo 'Здається, що всі компанії з натяжних стель у Києві однакові. Насправді за рекламними хитрощами з низькими цінами за містичний 1 м2 ховається багато підводних каменів. Найчастіше заниження цінника, без зазначення вартості профілю та монтажних робіт.';
          } 
        }; ?>
      </div>
    </div>
   
    <div class="advertising__center">
      <ul class="advertising__list">
        <?php if (have_rows('advertising_list')) :
          while ( have_rows('advertising_list')) : the_row(); ?>
            <li class="item item--<?= get_row_index() ; ?>">
              <div class="item__top">реклама</div>
              <div class="item__title"><?= get_sub_field('item_title') ?></div>
              <div class="item__true"><?= get_bloginfo("language") == 'ru' ? 'на самом деле' : 'насправді'?></div>
              <div class="item__text"><?= get_sub_field('item_text') ?></div>
            </li>
            <?php if(get_row_index() == 1 ) : ?>
              <li class="item empty">
                <div class="item__top">реклама</div>
                <div class="empty__title empty__line"></div>
                <div class="empty__line"></div>
                <div class="empty__line"></div>
                <div class="empty__line"></div>
              </li>
              <li class="item empty">
                <div class="item__top">реклама</div>
                <div class="empty__title empty__line"></div>
                <div class="empty__line"></div>
                <div class="empty__line"></div>
                <div class="empty__line"></div>
              </li>
              <li class="item empty mobhidden">
                <div class="item__top">реклама</div>
                <div class="empty__title empty__line"></div>
                <div class="empty__line"></div>
                <div class="empty__line"></div>
                <div class="empty__line"></div>
              </li>
            <?php endif; ?> 
          <?php endwhile; ?>
        <?php else : ?>
        <li class="item">
          <div class="item__top">реклама</div>
          <div class="item__title"><?= get_bloginfo("language") == 'ru' ? $advertising['ru'][0]['title'] : $advertising['ua'][0]['title'] ?></div>
          <div class="item__true"><?= get_bloginfo("language") == 'ru' ? 'на самом деле' : 'насправді'?></div>
          <div class="item__text"><?= get_bloginfo("language") == 'ru' ? $advertising['ru'][0]['text'] : $advertising['ua'][0]['text'] ; ?></div>
        </li>
        <li class="item empty">
          <div class="item__top">реклама</div>
          <div class="empty__title empty__line"></div>
          <div class="empty__line"></div>
          <div class="empty__line"></div>
          <div class="empty__line"></div>
        </li>
        <li class="item empty">
          <div class="item__top">реклама</div>
          <div class="empty__title empty__line"></div>
          <div class="empty__line"></div>
          <div class="empty__line"></div>
          <div class="empty__line"></div>
        </li>
        <li class="item empty mobhidden">
          <div class="item__top">реклама</div>
          <div class="empty__title empty__line"></div>
          <div class="empty__line"></div>
          <div class="empty__line"></div>
          <div class="empty__line"></div>
        </li>
        <li class="item item--2">
          <div class="item__top">реклама</div>
          <div class="item__title"><?= get_bloginfo("language") == 'ru' ? $advertising['ru'][1]['title'] : $advertising['ua'][1]['title'] ?></div>
          <div class="item__true"><?= get_bloginfo("language") == 'ru' ? 'на самом деле' : 'насправді'?></div>
          <div class="item__text"><?= get_bloginfo("language") == 'ru' ? $advertising['ru'][1]['text'] : $advertising['ua'][1]['text'] ?></div>
        </li>
        <li class="item item--3">
          <div class="item__top">реклама</div>
          <div class="item__title"><?= get_bloginfo("language") == 'ru' ? $advertising['ru'][2]['title'] : $advertising['ua'][2]['title'] ?></div>
          <div class="item__true"><?= get_bloginfo("language") == 'ru' ? 'на самом деле' : 'насправді'?></div>
          <div class="item__text"><?= get_bloginfo("language") == 'ru' ? $advertising['ru'][2]['text'] : $advertising['ua'][2]['text'] ?></div>
        </li>

        <?php endif; ?> 
       
      </ul>
    </div>

  </div>
</section>