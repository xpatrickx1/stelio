<section class="recommendation">
  <div class="container recommendation__wrap">

    <h5>
      <?= get_field('recommendation_title') ? the_field('recommendation_title') : 'Наш подход ценят заказчики и партнёры' ?>
    </h5>

    <div class="recommendation__center">
      <div class="recommendation__description">
        <?= get_field('recommendation_description') ? the_field('recommendation_description') : 'Принцип компании — детальная проработка проекта до старта работ. Проектирование позволяет быстро и качественно устанавливать натяжные потолки и освещение любой сложности.' ?>
      </div>

      <a 
        href="#"
        data-hover="<?= get_field('recommendation_btn') ? the_field('recommendation_btn') : 'Бесплатный замер' ?>"
        rel="nofollow" id="recommendationOrder"
        class="button--main">
        <span><?= get_field('recommendation_btn') ? the_field('recommendation_btn') : 'Бесплатный замер' ?></span>
      </a>
    </div>

    <div class="recommendation__reviews">
      <div class="recommendation__reviews--title"><?= get_field('recommendation_rating_title') ? the_field('recommendation_rating_title') : 'Stelio рекомендуют' ?></div>
      <div class="recommendation__reviews--top">
        <div class="recommendation__reviews--center">
          <span class="recommendation__reviews--rating">
            <strong><?= get_field('recommendation_rating') ? the_field('recommendation_rating') : '4.7' ?>
          </strong>/5</span>
          <span class="recommendation__stars">
          <img 
            src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
            data-src="<?= bloginfo('template_url') . '/images/first-screen/stars.png' ?>"
            class="lazy"
            width="1px"
            height="1px"
          />  
          </span>
          <span class="recommendation__reviews--text"><?= get_field('recommendation_reviews') ? the_field('recommendation_reviews') : '27 отывов' ?></span>
        </div>
      </div>
      <a class="recommendation__reviews--maps" href="<?= get_field('recommendation_href') ? the_field('recommendation_href') : '#' ?>"><?= get_field('recommendation_link_text') ? the_field('recommendation_link_text') : 'google maps рейтинг' ?></a>
    </div>

  </div>
</section>