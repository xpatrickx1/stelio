
<section class="team">
  <div class="container ">
    <div class="team__wrap">
      <div class="team__title">Наша команда</div>
      <ul class="team__list">
        <?php if (have_rows('team_list')) :
          while ( have_rows('team_list')) : the_row(); ?>
            <li class="item">
              <div class="item__img">
                <img 
                  src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                  data-src="<?= get_sub_field('avatar')['url'] ? get_sub_field('avatar')['url'] : bloginfo('template_url') . '/images/page-team/team4.webp' ?>"
                  class="lazy avatar"
                  width="1px"
                  height="1px"
                />
                <img 
                  src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                  data-src="<?= get_sub_field('avatar_hover')['url'] ? get_sub_field('avatar_hover')['url'] : bloginfo('template_url') . '/images/page-team/team4.webp' ?>"
                  class="lazy avatar__hover"
                  width="1px"
                  height="1px"
                />
              </div>
              <div class="item__name">
                <?= get_sub_field('name') ?>
              </div>
              <div class="item__position">
                <?= get_sub_field('position') ?>
              </div>
            </li>
          <?php endwhile; ?>
        <?php else : ?>
          <?php foreach ( $order as $key => $item ) : ?>
            <li class="item"><?= $item['text'] ?> </li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>

    </div>
  </div>
</section>
