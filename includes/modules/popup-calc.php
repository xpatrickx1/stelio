<div id="popupCalc" class="popup disabled">
  <div class="popup__wrap">
    <div class="popup__close"></div>

    <?php echo do_shortcode('[contact-form-7 id="d30b5b3" title="Contact form 1_copy"]') ?>

    <!-- <div class="popup__right">
      <div class="correct__title">
        <?php if ( get_field('calculator_correct_title'))  { 
        echo get_field('calculator_correct_title') ;
        } else { 
          if (get_bloginfo("language") == 'ru') {
            echo 'Калькулятор стоимости' ;
          } else {
            echo 'Калькулятор вартості';
          } 
        }; ?>
      </div>
      <div class="correct__desc">
        <?php if ( get_field('calculator_correct_subtitle'))  { 
            echo get_field('calculator_correct_subtitle') ;
            } else { 
              if (get_bloginfo("language") == 'ru') {
                echo 'Стоимость включает установку и материалы' ;
              } else {
                echo 'У рахунок входить ціна за втсановлення та матеріали ';
              } 
            }; ?>
      </div>  
      <ul class="correct__list">
          <?php if (have_rows('calculator_correct_list')) :
            while ( have_rows('calculator_correct_list')) : the_row(); ?>
              <li>
                <?= get_sub_field('correct_text'); ?>
              </li>
            <?php endwhile; ?>
          <?php else : ?>
            <li><?= get_bloginfo("language") == 'ru' ? 'Алюминиевый профиль' : 'Алюмінієвий профіль'?></li>
            <li><?= get_bloginfo("language") == 'ru' ? 'Монтажные работы' : 'Монтажні роботи'?></li>
            <li><?= get_bloginfo("language") == 'ru' ? 'Установка светильников' : 'Встановлення світильників'?></li>
            <li><?= get_bloginfo("language") == 'ru' ? 'Гарантия на монтаж 3 года' : 'Гарантія на монтаж 3 роки'?></li>
          <?php endif; ?>
        
      </ul> 
    </div>   -->
  </div> 
  <div class="popup__bg"></div>
</div>