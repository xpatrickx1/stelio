<?php

  $professionalism = [
    'Укомплектованы всеми необходимыми инструментами', 'Работают с безопасными композитными газовыми баллонами', 'Ежегодно проходят повышение квалификации',
    'Участвуют в межрегиональных конкурсах', 'Работают в перчатках, чтобы не испачкать полотна и стены'
  ];

?>

<section id="professionalism" class="professionalism">
  <div class="container professionalism__wrap">

    <div class="professionalism__top">
      <h2>
        <?= get_field('professionalism_title') ? the_field('professionalism_title') : 'От профессионализма монтажников зависит качество и срок службы' ?>
      </h2>

      <div class="professionalism__description section-description">
        <?= get_field('professionalism_description') ? the_field('professionalism_description') : 'Мастера каждый год проходят переподготовку по электрике и поэтому мы советуем клиентам доверить разводку проводов для светильников нам. Гарантия в течение 7 лет распространяется на все монтажные работы, включая разводку. Если произойдёт замыкание, то мы бесплатно приедем и устраним его.' ?>
      </div>
    
      <div class="professionalism__list-title">
        <?= get_field('professionalism_list_title') ? the_field('professionalism_list_title') : 'Наши монтажные бригады' ?>
      </div>
      <ul class="professionalism__list">
        <?php if (have_rows('professionalism_list')) :
          while ( have_rows('professionalism_list')) : the_row(); ?>
            <li class="item"><div class="item__title"><?= get_sub_field('item_title') ?></div></li>
          <?php endwhile; ?>
        <?php else : ?>
          <?php foreach ( $professionalism as $key => $item ) : ?>
            <li class="item">
              <div class="item__title">
                <?= $item ?>
              </div>
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </div>

    <div class="professionalism__bottom">
    <?php if (have_rows('quality_images')) :
          while ( have_rows('quality_images')) : the_row(); ?>
            <img 
              src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
              data-src="<?= get_sub_field('item_img')['url'] ?>"
              class="lazy"
              width="1px"
              height="1px"
            />
          <?php endwhile; ?>
        <?php else : ?>
          <img 
            src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
             data-src="<?= bloginfo('template_url') . '/images/page-installation/professionalism1.webp' ?>"
            class="lazy"
            width="1px"
            height="1px"
          />
          <img 
            src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
            data-src="<?= bloginfo('template_url') . '/images/page-installation/professionalism2.webp' ?>"
            class="lazy"
            width="1px"
            height="1px"
          />
          <img 
            src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
            data-src="<?= bloginfo('template_url') . '/images/page-installation/professionalism3.webp' ?>"
            class="lazy"
            width="1px"
            height="1px"
          />
          <img 
            src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
            data-src="<?= bloginfo('template_url') . '/images/page-installation/professionalism4.png' ?>"
            class="lazy"
            width="1px"
            height="1px"
          />
        <?php endif; ?>
    </div>
  </div>
</section>