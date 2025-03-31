<?php include 'solutions-data.php' ?>

<section class="solutions">
  
  <div class="container solutions__wrap">

    <div class="solutions__top">
      <h3>
        <?= get_field('solutions_title') ? the_field('solutions_title') : 'Комплексные решения с прозрачными процессами' ?>
      </h3>
      <div class="solutions__description">
        <?= get_field('solutions_description') ? the_field('solutions_description') : 'Для нас каждый заказ в компании — проект. Будь то частный заказчик или подряд на сложный объект. Мы предложим оптимальное решение вашей задачи с чёткими и понятными этапами работы.' ?>
      </div>
    </div>

      <ul class="solutions__list">
        <?php if (have_rows('solutions_list')) :
          while ( have_rows('solutions_list')) : the_row(); ?>
          <li class="item">
              <div class="item__number">
                0<?= (get_row_index()) ?>
              </div>
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                 data-src="<?= get_sub_field('item_img')['url'] ?>"
                class="lazy"
                width="1px"
                height="1px"
              />
              <div class="item__right">
                <div class="item__title item-title18">
                <?= get_sub_field('item_title') ?>
                </div>  
                <div class="item__text">
                <?= get_sub_field('item_text') ?>
                </div>  
                <ul class="item__list">
                  <?php if (have_rows('subitem_list')) :
                    while ( have_rows('subitem_list')) : the_row(); ?>
                      <li class="item__info">
                        <?= get_sub_field('subitem_title'); ?>
                      </li>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </ul>
              </div>
            </li>
          
          <?php endwhile; ?>
        <?php else : ?>
          <?php foreach ( $solutions as $key => $item ) : ?>
            <li class="item">
              <div class="item__number">
                0<?= ($key + 1) ?>
              </div>
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-team/solution' . ($key + 1) . '.webp' ?>"
                class="lazy"
                width="1px"
                height="1px"
              />
              <div class="item__right">
                <div class="item__title item-title18">
                  <?= $item['title'] ?>
                </div>  
                <div class="item__text">
                  <?= $item['text'] ?> 
                </div>  
                <ul class="item__list">
                  <?php foreach ( $item['items'] as $key => $i ) : ?>
                    <li><?= $i['text'] ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </div>

  </div>
</section>
