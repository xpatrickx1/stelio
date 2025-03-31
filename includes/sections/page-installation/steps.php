<?php include 'steps-data.php' ?>

<section id="steps" class="steps">
  
  <div class="container steps__wrap">

    <div class="steps__top">
      <h3>
        <?= get_field('steps_title') ? the_field('steps_title') : 'Этапы установки по стандарту' ?>
      </h3>
      <div class="steps__description">
        <?= get_field('steps_description') ? the_field('steps_description') : 'Наши монтажные группы работают по внутренним стандартам качества, утверждённым техническим отделом. Мы также строго соблюдаем закон, исключая шумные работы с 13:00 до 15:00 и в воскресные дни.' ?>
      </div>
    </div>

    <div class="steps__preparation-title">
     <?= get_field('steps_preparation_title') ? the_field('steps_preparation_title') : 'Этапы подготовки:' ?>
    </div>
    <ul class="steps__preparation">
      <?php if (have_rows('steps_preparation')) :
        while ( have_rows('steps_preparation')) : the_row(); ?>
          <li class="item">
            <span class="item__number">
              <?= (get_row_index()) ?>.
            </span>
            <span class="item__title">
              <?= get_sub_field('item_title') ?>
            </span>  
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $preparation as $key => $item ) : ?>
          <li class="item">
            <span class="item__number">
              <?= ($key + 1) ?>.
            </span>
            <span class="item__title">
              <?= $item['title'] ?>
            </span>  
          </li>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>

    <div class="steps__title">
     <?= get_field('steps_steptitle') ? the_field('steps_steptitle') : 'Основные этапы монтажа' ?>
    </div>
      <ul class="steps__list">
        <?php if (have_rows('steps_list')) :
          while ( have_rows('steps_list')) : the_row(); ?>
          <li class="item">
              <div class="item__number">
                0<?= (get_row_index()) ?>
              </div>
              <div class="item__img">
                <img 
                  src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                  data-src="<?= get_sub_field('item_img')['url'] ?>"
                  class="lazy"
                  width="1px"
                  height="1px"
                />
              </div>
              <div class="item__right">
                <div class="item__title item-title18">
                <?= get_sub_field('item_title') ?>
                </div>  
                <div class="item__text">
                <?= get_sub_field('item_text') ?>
                </div>  
                
              </div>
            </li>
          
          <?php endwhile; ?>
        <?php else : ?>
          <?php foreach ( $steps as $key => $item ) : ?>
            <li class="item">
              <div class="item__number">
                0<?= ($key + 1) ?>
              </div>
              <div class="item__img">
                <img 
                  src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                  data-src="<?= bloginfo('template_url') . '/images/page-installation/steps' . ($key + 1) . '.png' ?>"
                  class="lazy"
                  width="1px"
                  height="1px"
                />
              </div>
              <div class="item__right">
                <div class="item__title item-title18">
                  <?= $item['title'] ?>
                </div>  
                <div class="item__text">
                  <?= $item['text'] ?> 
                </div>  
                
              </div>
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>

  </div>
</section>
