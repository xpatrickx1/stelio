<?php

  $payments = [
    [
      'title' => 'Наличный расчёт',
      'list' => [
        [
          'text' => 'В офисе компании.',
        ],
        [
          'text' => 'На месте, сразу после замера и согласования деталей.',
        ],
      ],
    ],
    [
      'title' => 'Наличный расчёт',
      'list' => [
        [
          'text' => 'Онлайн-оплата по QR-коду. Менеджер отправит договор с QR-кодом для оплаты по электронной почте или в мессенджер.',
        ],
        [
          'text' => 'Банковский перевод на наш расчётный счёт через онлайн-банк, мобильное приложение или в офисе банка. В назначении платежа укажите номер договора.',
        ],
      ],
    ],
    [
      'title' => 'Банковской картой',
      'list' => [
        [
          'text' => 'В нашем офисе.',
        ],
        [
          'text' => 'При замере, по предварительной договорённости',
        ],
      ],
    ],
  ];

?>

<section class="payments">
  <div class="container">
    
  </div>
  
  <div class="container payments__wrap">

    <h3>
      <?= get_field('payments_title') ? the_field('payments_title') : 'Для физических лиц' ?>
    </h3>
  
    <ul class="payments__list">
      <?php if (have_rows('payments_method')) :
        while ( have_rows('payments_method')) : the_row(); ?>
          <li class="item"><div class="item__title">
            <?= get_sub_field('item_title') ?>
            </div>
            <ul class="item__list">
              <?php if (have_rows('item_list')) :
                while ( have_rows('item_list')) : the_row(); ?>
                 <li><?= get_sub_field('item_text') ?></li>
                <?php endwhile; ?>
              <?php endif; ?>
            </ul> 
            <?php if ( get_row_index() == 3 ) : ?>
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/icons/payments.webp' ?>"
                class="lazy"
                width="1px"
                height="1px"
              />
            <?php endif; ?>
            </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $payments as $key => $item ) : ?>
          <li class="item">
            <div class="item__title">
              <?= $item['title'] ?>
            </div>
            <ul class="item__list">
            <?php foreach ( $item['list'] as $k => $i ) : ?> 
              <li>
                <?= $i['text'] ?>
              </li>
            <?php endforeach; ?>
            </ul> 
            <?php if ( $key == 2 ) : ?>
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/icons/payments.webp' ?>"
                class="lazy"
                width="1px"
                height="1px"
              />
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>

    <div class="payments__bottom">
      <h3 class="payments__title">
      <?php if ( get_field('payments_title_ur'))  { 
        echo get_field('payments_title_ur') ;
        } else { 
        if (get_bloginfo("language") == 'ru') {
          echo 'Для юридических лиц' ;
        } else {
          echo 'Для юридичних осіб';
        } 
      }; ?>
      </h3>
      <div class="payments__text">
        <?= get_field('payments_subtitle') ? the_field('payments_subtitle') : '<p>Коммерческие организации могут оплатить услуги безналичным переводом на расчётный счёт ООО. Мы работаем с НДС и без НДС в зависимости от вашей системы налогообложения.</p><p>Реквизиты, режим работы и адрес офиса в разделе контакты.</p>' ?>
      </div>

    </div>
  </div>
</section>

