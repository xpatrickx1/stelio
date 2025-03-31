<?php
  $topscreenList = [
    'Минимальная предоплата составляет 50%',
    'Первая часть оплачивается после подписания договора',
    'Оставшиеся 50% — после завершения и приёмки работ',
  ];
?>

<section class="top-screen">
  
  <div class="container">

    <div class="breadcrumbs">
      <span><a href="<?= home_url(); ?>"><?= get_bloginfo("language") == 'ru' ? 'Натяжные потолки в Киеве' : 'Натяжні стелі у Києві' ?></a></span>
      <span class="breadcrumbs__slash"> / </span>
      <span><a href="/catalog/"><?= get_bloginfo("language") == 'ru' ? 'Заказчикам' : 'Замовникам' ?></a></span>
      <span class="breadcrumbs__slash"> / </span>
      <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : 'Каталог потолков' ?></span>
    </div>

    <div class="top-screen__wrap">
    
      <h1>
      <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
      </h1>

      <div class="top-screen__right">
        <div class="top-screen__description">
          <?= get_field('top_screen_description') ? the_field('top_screen_description') : 'После проведения бесплатного замера и согласования всех деталей заключается договор на установку натяжных потолков. В договоре фиксируются права и обязанности сторон, гарантии, сроки выполнения работ, стоимость и порядок оплаты.' ?>
        </div>
        <div class="top-screen__list-title">
          <?= get_field('list_title') ? the_field('list_title') : 'Мы предлагаем варианты полной или частичной предоплаты:' ?>
        </div>
        <ul class="top-screen__list">
          <?php if (have_rows('top_screen_list')) :
            while ( have_rows('top_screen_list')) : the_row(); ?>
              <li class="item"><?= get_sub_field('item_title') ?></li>
            <?php endwhile; ?>
          <?php else : ?>
            <?php foreach ( $topscreenList as $key => $item ) : ?>
              <li class="item"><?= $item ?></li>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
