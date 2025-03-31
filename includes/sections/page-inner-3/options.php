<?php

  $options = [
    [
      'title' => 'Толщина',
      'text' => 'Каждый производитель выпускает пленки определенной толщины и величина эта колеблется от <strong>0,17</strong> до <strong>0,25 мм</strong>',
    ],
    [
      'title' => 'Влагостойкость',
      'text' => 'ПВХ потолки обладают антистатичным действием, не впитывают воду и запахи, специальная пропитка препятствует размножению болезнетворных микробов и грибков',
    ],
    [
      'title' => 'Лишний Вес',
      'text' => 'Зависит от толщины материала. Примерно от <strong>180 до 300 гр на м2</strong>',
    ],
    [
      'title' => 'Температурный режим',
      'text' => 'Подходят для использования в помещениях с температурой от <strong>3 до 45 С</strong>',
    ],
    [
      'title' => 'Прочность',
      'text' => 'Пленки средней толщины выдерживают нагрузку до <strong>150 кг на м2</strong> Класс пожаробезопасности — самый высокий уровень безопасности имеют пленки класса <strong>М-1</strong>',
    ],
  
  ];

?>

<section id="options" class="options">
  <div class="container options__wrap">

    <div class="options__top">
      <?php
        if (have_posts() ) { ?>

        <div class="options__content">

          <?php while (have_posts()) : the_post();
              echo the_content();
          endwhile; ?>
        </div>
        <?php }
      ?>
    </div>

    <?php if (have_rows('green_markers_list')) : ?>
     <div class="options__greenlist-wrp">
      <div class="options__list-title">
        <?= get_field('green_markers_list_title') ? the_field('green_markers_list_title') : 'Как сэкономить?' ?>
      </div>
      <ul class="options__greenlist">
        <?php while ( have_rows('green_markers_list')) : the_row(); ?>
            <li class="item">
              <?= get_sub_field('item_text') ?>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
    <?php endif; ?>

    <?php if (have_rows('options_list')) : ?>
     
      <div class="options__list-title">
        Характеристики
      </div>
      <ul class="options__list">
        <?php while ( have_rows('options_list')) : the_row(); ?>
            <li class="item">
            <div class="item__left">
              <div class="item__title"><?= get_sub_field('item_title') ?></div>
              <div class="item__text"><?= get_sub_field('item_text') ?></div>
              </div>
            </li>
          <?php endwhile; ?>
      </ul>
    <?php endif; ?>

    <ul class="options__advantages advantages">
      <?php if (have_rows('advantages_list')) :
        while ( have_rows('advantages_list')) : the_row(); ?>
          <li class="item <?= get_row_index() == 1 ? 'item__green' : 'item__gray' ?>">
            <div class="item__title"><?= get_sub_field('item_title') ? get_sub_field('item_title') : 'Плюсы матовых полотен' ?></div>
            <ul class="item__list">
              <?php if (have_rows('item_list')) :
                while ( have_rows('item_list')) : the_row(); ?>
                  <li>
                    <?= get_sub_field('item_text'); ?>
                  </li>
                <?php endwhile; ?>
              <?php endif; ?>
            </ul>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
          <li class="item item__green">
            <div class="item__title">Плюсы матовых полотен</div>
            <ul class="item__list">
              <li>Отсутствие бликов и отражения предметов.</li>
              <li>Сочетается с разными материалами и светильниками.</li>
              <li>Хороший фон для фотопечати.</li>
              <li>Подходит для всех помещений по стилю.</li>
              <li>Не выгорает со временем.</li>
              <li>Быстрый монтаж.</li>
              <li>Неприхотлив в обслуживании — легко моется губкой 
              и мыльным раствором.</li>
              <li>Не заметны швы.</li>
            </ul>
          </li>
          <li class="item  item__gray">
            <div class="item__title">Минусы</div>
            <ul class="item__list">
              <li>Небольшой выбор расцветок</li>
              <li>Матовая ПВХ пленка не подходит для помещений с минусовой температурой — может лопнуть. </li>
              <li>Выход: использовать натяжные потолки из ткани.</li>
            </ul>
          </li>

      <?php endif; ?>
    </ul>

    <?php if (get_field('options_bottom_title')) : ?>
      <div class="options__bottom">
      <div class="options__bottom--title">
        <?= get_field('options_bottom_title') ? the_field('options_bottom_title') : 'Расценки на дополнительные услуги' ?>
      </div>
      <div class="options__bottom--text">
        <?= the_field('options_bottom_text') ; ?>
      </div>
      </div>
    <?php endif; ?>

    
      
    
  </div>
</section>
