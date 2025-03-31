<?php

  $advantage = [
    [
      'title' => 'Без декоративной резиновой вставки',
    ],
    [
      'title' => 'Подходит для ПВХ и тканевого полотна',
    ]
  ];

?>

<section class="advantage">
  <div class="container advantage__wrap">

    <div class="advantage__top">
      <h3>
        <?= get_field('advantage_title') ? the_field('advantage_title') : 'Преимущество технологии' ?>
      </h3>

      <div class="advantage__description ">
        <?= get_field('advantage_description') ? the_field('advantage_description') : 'Натяжные потолки с теневым примыканием, визуально не отличается от потолка из гипсокартона.' ?>
      </div>
    </div>

    <div class="advantage__center">
      <ul class="advantage__list">
        <?php if (have_rows('advantage_list')) :
          while ( have_rows('advantage_list')) : the_row(); ?>
            <li class="item">
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
            </li>
          <?php endwhile; ?>
        <?php else : ?>
          <?php foreach ( $advantage as $key => $item ) : ?>
            <li class="item">
              <div class="item__img">
                <img 
                  src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                  data-src="<?= bloginfo('template_url') . '/images/page-inner/advantage' . ($key + 1) . '.webp' ?>"
                  class="lazy"
                  width="1px"
                  height="1px"
                />
              </div>
              <div class="item__title"><?= $item['title'] ?></div>
            </li>
          <?php endforeach; ?>

        <?php endif; ?>
      </ul>
    </div>

  </div>
</section>