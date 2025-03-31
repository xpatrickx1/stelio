<?php include get_template_directory() . '/includes/modules/price-data.php' ?>

<section id="prices" class="price">
  <div class="container price__wrap">

    <div class="price__top">
      <h2>
        <?php if ( get_field('price_title'))  { 
          echo get_field('price_title') ;
          } else { 
          if (get_bloginfo("language") == 'ru') {
            echo 'Стоимость материалов и установки теневого потолока' ;
          } else {
            echo 'Ціна за матеріали і установку тіньового потолка.';
          } 
        }; ?>
      </h2>

      <div class="price__description section-description">
        <?php if ( get_field('price_description'))  { 
          echo get_field('price_description') ;
          } else { 
          if (get_bloginfo("language") == 'ru') {
            echo 'У нас вы найдете все необходимое для вашего проекта: комплектующие, карнизы и освещение. С нашей комплектацией вы сэкономите время на доставке, будете уверены в их совместимости и сможете легко уложиться в свой бюджет.' ;
          } else {
            echo 'У нашому асортименті ви знайдете все необхідне для реалізації вашого проекту: комплектуючі, карнизи та освітлення. Використовуючи нашу комплектацію, ви зекономите час на доставці, забезпечите сумісність і зможете дотриматися запланованого бюджету.';
          } 
        }; ?>
      </div>
    </div>

    <ul class="price__list">
      <?php if (have_rows('price_list')) :
        while ( have_rows('price_list')) : the_row(); ?>
          <li class="item">
            <div class="item__title"><?= get_sub_field('item_title') ?> <span>₴</span></div>
            <div class="item__main">
              <?php if (get_sub_field('item_list')) :
                  while ( have_rows('item_list')) : the_row(); ?>
                    <div class="item__param">
                      <span><?= get_sub_field('item_param') ?></span>
                      <span><?= get_sub_field('item_val') ?></span>
                    </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </li>  
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $price as $key => $item ) : ?>
          <li class="item">
            <div class="item__title"><?= $item['title'] ?> <span>₴</span></div>
            <div class="item__main">
              <?php foreach ( $item['items'] as $key => $i ) : ?>
                <div class="item__param">
                  <span><?= $i['param'] ?></span>
                  <span><?= $i['val'] ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          </li>
        <?php endforeach; ?>

      <?php endif; ?>
    </ul>

  </div>
</section>