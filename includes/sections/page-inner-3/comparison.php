
<?php if( get_field('comparison_title') ) : ?>
<section class="comparison">
  <div class="container comparison__wrap">

    <div class="comparison__top">
      <h2>
        <?= get_field('comparison_title') ? the_field('comparison_title') : 'Глянцевый и матовый натяжной потолок фото сравнение' ?>
      </h2>

      <div class="comparison__description section-description">
        <?= get_field('comparison_description') ? the_field('comparison_description') : 'Нейтральные и матовые материалы без искусственного глянца. Полная идентичность оштукатуренной поверхности.' ?>
      </div>
    </div>

    <?php
      if( have_rows('comparison_list') ):
        $my_fields = get_field_object('comparison_list');
        $count = (count($my_fields['value']));
      endif;
    ?>

    <div class="comparison__center">
      <ul class="comparison__list <?= $count == 3 ? 'comparison__list--trible' : 'comparison__list--double' ?>">
        <?php if (have_rows('comparison_list')) :
          while ( have_rows('comparison_list')) : the_row(); ?>
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
              <div class="item__text"><?= get_sub_field('item_text') ?></div>

              <?php if(get_sub_field('item_list')) : ?>
                <ul class="item__list">
                  <?php while(have_rows('item_list')) : the_row(); ?>
                    <li class="list-item">
                      <div class="list-item__text">
                        <?= get_sub_field('item_list_text') ?>
                      </div>
                    </li>
                  <?php endwhile; ?>
                </ul>
              <?php endif; ?>

            </li>
          <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </div>

  </div>
</section>
<?php endif; ?>