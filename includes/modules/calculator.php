<?php

  $calculator = [
    [
      'title' => 'Тканевые потолки',
      'text' => 'Тканевый натяжной потолок из полиэстера с акриловой пропиткой. Экологичный и гипоаллергенный материал с оригинальной фактурой. Устанавливаются без нагревания.',
      'link' => '#',
    ],
    [
      'title' => 'Матовый потолок',
      'text' => 'Внешний вид матовой фактуры натяжного потолка похож на оштукатуренную поверхность или потолок из гипсокартона. Универсальное решение для стильных интерьеров, без блика и отражений.',
      'link' => '#',
    ]
  ];

?>

<section id="calculator" class="calculator">
  <div class="container ">
    <div class="calculator__wrap">
      <div class="calculator__top">
        <h2>
          <?php if ( get_field('calculator_title'))  { 
                echo get_field('calculator_title') ;
              } else { 
                if (get_bloginfo("language") == 'ru') {
                  echo 'Калькулятор натяжного потолка' ;
                } else {
                  echo 'Калькулятор натяжної стелі';
                } 
              }; ?>
        </h2>

        <div class="calculator__description section-description">
        <?php if ( get_field('calculator_description'))  { 
                echo get_field('calculator_description') ;
              } else { 
                if (get_bloginfo("language") == 'ru') {
                  echo 'Рассчитайте стоимость натяжного потолка с монтажом по своим размерам.' ;
                } else {
                  echo 'Проведіть розрахунок вартості натяжної стелі з установкою, беручи до уваги ваші розміри';
                } 
              }; ?>
        </div>
      </div>

      <div class="calc">
        <div id="parameters">
          <div class="input-group">
            <label for="square"><?= get_bloginfo("language") == 'ru' ? 'Площадь, м2' : 'Площа, м2'?></label>
            <input type="number" id="square" value="<?= get_field('calculator_square_value') ? the_field('calculator_square_value') : 17 ?>">
            <div class="calc__buttons">
              <button class="decrement">-</button>
              <button class="increment">+</button>
            </div>
          </div>
          <div class="input-group">
            <label for="angles"><?= get_bloginfo("language") == 'ru' ? 'Количество углов' : 'Кількість кутів'?></label>
            <input type="number" id="angles" value="4">
            <div class="calc__buttons">
              <button class="decrement">-</button>
              <button class="increment">+</button>
            </div>
          </div>
          <div class="input-group">
            <label for="lightingPoints"><?= get_bloginfo("language") == 'ru' ? 'Светильники' : 'Світильники'?></label>
            <input type="number" id="lightingPoints" value="0">
            <div class="calc__buttons">
              <button class="decrement">-</button>
              <button class="increment">+</button>
            </div>
          </div>
          <div class="input-group">
            <label for="chandeliers"><?= get_bloginfo("language") == 'ru' ? 'Люстры' : 'Люстри'?></label>
            <input type="number" id="chandeliers" value="0">
            <div class="calc__buttons">
              <button class="decrement">-</button>
              <button class="increment">+</button>
            </div>
          </div>
          <div class="input-group">
            <label for="rod"><?= get_bloginfo("language") == 'ru' ? 'Трубы' : 'Труби'?></label>
            <input type="number" id="pipes" value="0">
            <div class="calc__buttons">
              <button class="decrement">-</button>
              <button class="increment">+</button>
            </div>
          </div>
        </div>
        <div class="result">
          <div class="calc__wrong wrong">
            <div class="wrong__title">
              <?php if ( get_field('calculator_wrong_title'))  { 
                echo get_field('calculator_wrong_title') ;
              } else { 
                if (get_bloginfo("language") == 'ru') {
                  echo 'Недостоверный расчёт по интернету' ;
                } else {
                  echo 'Недостовірний онлайн-розрахунок';
                } 
              }; ?>
            </div>
            <div class="wrong__price">~ <span id="wrongPrice"></span> ₴</div>  
            <div class="wrong__desc">
              <?php if ( get_field('calculator_wrong_subtitle'))  { 
                echo get_field('calculator_wrong_subtitle') ;
                } else { 
                if (get_bloginfo("language") == 'ru') {
                  echo 'Пример заниженного расчёта стоимости на других онлайн-калькуляторах. Такая низкая итоговая сумма означает:';
                } else {
                  echo 'Зразок заниженого розрахунку ціни на інших онлайн-калькуляторах. Така низька сума на виході свідчить про те, що:';
                } 
              }; ?>
              <?= get_field('calculator_wrong_subtitle') ? the_field('calculator_wrong_title') : 'Пример заниженного расчёта стоимости на других онлайн-калькуляторах. Такая низкая итоговая сумма означает:' ?></div>  
              <ul class="wrong__list">
                <?php if (have_rows('calculator_wrong_list')) :
                  while ( have_rows('calculator_wrong_list')) : the_row(); ?>
                    <li class="wrong__cause">
                      <?= get_sub_field('wrong_text'); ?>
                    </li>
                  <?php endwhile; ?>
                <?php else : ?>
                  <li class="wrong__cause"><?= get_bloginfo("language") == 'ru' ? 'Цена за материал и работу, но без профиля по периметру. Или эконом плёнка и пластиковый багет.' : 'Вартість матеріалу та роботи, але без профілю по периметру. '?></li>  
                  <li class="wrong__cause"><?= get_bloginfo("language") == 'ru' ? 'Или эконом плёнка и пластиковый багет.' : 'Або ж використання економ-плівки та пластикового багета.'?></li>  
                <?php endif; ?>
              </ul>
          </div>
          <div class="calc__correct correct">
            <div class="correct__title">
              <?php if ( get_field('calculator_correct_title'))  { 
                echo get_field('calculator_correct_title') ;
                } else { 
                  if (get_bloginfo("language") == 'ru') {
                    echo 'Наша предварительная цена' ;
                  } else {
                    echo 'Наша попередня ціна';
                  } 
                }; ?>
              </div>
            <div class="correct__price" ><span id="resultPriceFrom"></span> - <span id="resultPriceTo"></span> ₴</div>  
            <div class="correct__desc">
            <?php if ( get_field('calculator_correct_subtitle'))  { 
                echo get_field('calculator_correct_subtitle') ;
                } else { 
                  if (get_bloginfo("language") == 'ru') {
                    echo 'Стоимость включает установку и материалы' ;
                  } else {
                    echo 'У рахунок входить ціна за втсановлення та матеріали ';
                  } 
                }; ?></div>  
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
            <a 
            id="caculatorOrder"
            data-hover="
            <?php if ( get_field('calculator_brn_name'))  { 
                    echo get_field('calculator_brn_name') ;
                    } else { 
                      if (get_bloginfo("language") == 'ru') {
                        echo 'Бесплатный замер' ;
                      } else {
                        echo 'Безкоштовний замір';
                      } 
                  }; ?>"
            href="<?= get_field('calculator_brn_href') ? the_field('calculator_brn_href') : '#' ?>" class="correct__btn button--main">
            <span><?php if ( get_field('calculator_brn_name'))  { 
                echo get_field('calculator_brn_name') ;
                } else { 
                  if (get_bloginfo("language") == 'ru') {
                    echo 'Бесплатный замер' ;
                  } else {
                    echo 'Безкоштовний замір';
                  } 
                }; ?></span>
                </a> 
          </div>
      </div>
    </div>
  </div>
</section>