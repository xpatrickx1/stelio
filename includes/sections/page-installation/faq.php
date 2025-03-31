<?php include 'faq-data.php' ?>

<section class="faq" id="faq">

    <div class="container">
        <h2><?php if ( get_field('faq_title'))  { 
          echo get_field('faq_title') ;
          } else { 
          if (get_bloginfo("language") == 'ru') {
            echo 'Подготовка. Важные вопросы и ответы на них.' ;
          } else {
            echo 'Підготовка. Важливі питання та відповіді на них.';
          } 
        }; ?>
        </h2>

        <div class="faq__wrap ">
          <div class="faq__accordion">
          <?php if (have_rows('faq_list')) :
            while ( have_rows('faq_list')) : the_row(); ?>
              <div class="faq__item">
                <div class="faq__title-wrap">
                  <h3><?= get_sub_field('item_title') ?></h3>
                  <span class="faq__question-icon"></span>
                </div>
                <div class="faq__description item-description" ><?= get_sub_field('item_text') ?></div>
              </div>
            <?php endwhile; ?>
          <?php else : ?>
            <?php foreach ( get_bloginfo("language") == 'ru' ? $faqData['ru'] : $faqData['ua'] as $key => $item ) : ?>
              <div class="faq__item">
                <div class="faq__title-wrap">
                  <h3><?= $item[ 'title' ] ?></h3>
                  <span class="faq__question-icon"></span>
                </div>
                <div class="faq__description item-description" ><?= $item[ 'description' ] ?></div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
          </div>
        </div>
    </div>
</section>

