<?php

  $quality = [
    [
      'title' => 'От замерщика',
      'text' => 'Он должен понять, что хочет заказчик, составить точный замерный лист и согласовать его с клиентом. Замерный лист передаётся в цех, где по нему подготавливаются полотна и другие конструкции.',
    ],
    [
      'title' => 'От качества подготовки материалов',
      'text' => 'Раскраиваем в цеху полотна под размеры вашего помещения, не обращаясь к посредникам. Поэтому мы контролируем качество процесса на каждом этапе производства и выполняем заказ в сжатые сроки.',
    ],
    [
      'title' => 'От квалификации монтажников',
      'text' => 'Монтажники должны уметь устанавливать сложные конструкции, красиво обходить трубы, углы и выступы, работать чисто, аккуратно. Мастерство приходит только с опытом и его оттачивают годами.',
    ],
    [
      'title' => 'От наличия необходимых инструментов',
      'text' => 'Мастера оснащены профессиональным инструментом, без которого невозможен качественный монтаж:',
      'sublist' => [ 
        'перфораторы с пылесборником',
        'монтажный пистолет',
        'пылесос',
        'торцевую пилу для алюминиевого профиля',
        'если на объекте высокие потолки, то привозим с собой высокие стремянки или туры.',
      ]
    ],
  ];

?>

<section id="quality" class="quality">
  <div class="container quality__wrap">

    <div class="quality__top">
      <h2>
        <?= get_field('quality_title') ? the_field('quality_title') : 'Фанатично относимся к качеству' ?>
      </h2>

      <div class="quality__description section-description">
        <?= get_field('quality_description') ? the_field('quality_description') : 'Мы даём 7 лет гарантии не только на полотна, но и на все виды монтажных работ. Нам просто невыгодно использовать дешёвые материалы. Поэтому мы закупаем сертифицированные полотна, усиленный профиль и надёжное световое оборудование. Будьте уверены, что натяжные потолки, установленные в нашей компании, будут иметь безупречный внешний вид и прослужат минимум 10-15 лет.' ?>
      </div>
    </div>
    
    <div class="quality_guarantee guarantee">
      <?php if (have_rows('quality_guarantee')) :
        while ( have_rows('quality_guarantee')) : the_row(); ?>
          <div class="guarantee__item">
            <div class="guarantee--title">
              <?= get_sub_field('quality_guarantee_title') ?>
            </div> 
            <div class="guarantee--text">
              <?= get_sub_field('quality_guarantee_text') ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php else : ?>
        <div class="guarantee__item">
          <div class="guarantee--title">
            7
          </div> 
          <div class="guarantee--text">
            лет гарантии </br>на все
          </div>
        </div>
        <div class="guarantee__item">
          <div class="guarantee--title">
            15
          </div> 
          <div class="guarantee--text">
            лет минимум </br>прослужат
          </div>
        </div>
      <?php endif; ?>
    </div>

      <div class="quality__list-wrp">
        <div class="quality__list-title">
          <?= get_field('quality_list_title') ? the_field('quality_list_title') : 'Факторы, от которых зависит правильный монтаж' ?>
        </div>
        <ul class="quality__list">
          <?php if (have_rows('quality_list')) :
            while ( have_rows('quality_list')) : the_row(); ?>
              <li class="item">
                <div class="item__title">
                  <?= get_sub_field('item_title') ?>
                </div>
                <div class="item__text">
                  <?= get_sub_field('item_text') ?>
                </div>
                <?php if (have_rows('item_sublist')) : ?>
                  <ul class="quality__sublist">
                  <?php while ( have_rows('item_sublist')) : the_row(); ?>
                    <li class="item__info">
                      <?= get_sub_field('sublist_text'); ?>
                    </li>
                  <?php endwhile; ?>
                  </ul>
                <?php endif; ?>
              </li>
            <?php endwhile; ?>
          <?php else : ?>
            <?php foreach ( $quality as $key => $item ) : ?>
              <li class="item">
                <div class="item__title">
                  <?= $item['title'] ?>
                </div>
                <div class="item__text">
                  <?= $item['text'] ?>
                </div>

                <?php if ($item['sublist']) :?>
                  <ul class="quality__sublist">
                    <?php foreach ( $item['sublist'] as $k => $sublist ) : ?>
                      <li><?= $sublist ?></li>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>
              </li>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
      </div>
  </div>
</section>