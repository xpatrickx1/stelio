</main><?php // main-container end ?>

<?php include(locate_template('main-vars.php', true)); ?>

<?php get_template_part('includes/modules/popup')?>

<a class="viber" href="viber://chat?number=%2B380671287636">
  <img 
    src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
    data-src="<?= bloginfo('template_url') . '/images/icons/socialIcons/viber.png' ?>"
    class="lazy"
    width="1px"
    height="1px"
  />
</a>

<footer class="footer">
  <div class="footer__top">
    <div class="container">
      <div class="footer__top--left">
        <a href="/"
          class="footer__logo" 
          aria-label="Footer logo">
          <img src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" data-src="<?= bloginfo('template_url') . '/images/icons/footer-logo.svg' ?>" class="lazy" width="170px" height="57px" alt="footer site logo">
        </a>
        <div class="footer__desc">
          <?php if ( get_field('footer_desc'))  { 
              echo get_field('footer_desc') ;
             } else { 
              if (get_bloginfo("language") == 'ru') {
                echo 'Современные натяжные потолки и освещение в Киеве' ;
              } else {
                echo 'Сучасні натяжні стелі та освітлення у Києві';
              } 
          }; ?>
        </div>
      </div>

      <div class="footer__phone">
        <?= get_field('footer_phone') ? the_field('footer_phone') : '+38 063 654 63 85' ?>
      </div>
      <div class="footer__orders">
        <?php if ( get_field('footer_orders'))  { 
          echo get_field('footer_orders') ;
          } else { 
          if (get_bloginfo("language") == 'ru') {
            echo 'Прием заявок на сайте происходит круглосуточно' ;
          } else {
            echo 'Прийом заявок на сайті відбувається цілодобово';
          } 
        }; ?>
      </div>
      <a href="#" 
         id="footerOrder"
         class="button--second"
         data-hover="<?= get_bloginfo("language") == 'ru' ? 'вам перезвонить ?' : 'Вам передзвонити?'?>">
         <span><?= get_bloginfo("language") == 'ru' ? 'вам перезвонить ?' : 'Вам передзвонити?'?></span>
        </a>
    </div>
  </div>

    
  <div class="footer__main">
    <div class="container">
      <div class="footer__menu-wrp">
        <div class="footer__menu">
          <div class="footer__menu-title"><?= get_bloginfo("language") == 'ru' ? 'каталог потолков' : 'каталог стель'?></div>
          <ul class="footer__menu footer__menu--post text--capitalize">
            <?php if (get_bloginfo("language") == 'ru') { 
              if (has_nav_menu('footer_menu_catalog_ru')) {
              $nav_args = array(
                'theme_location' => 'footer_menu_catalog_ru',
                'container' => '',
                'items_wrap' => '%3$s',
              );
              wp_nav_menu($nav_args);
            }
            } else {
              if (has_nav_menu('footer_menu_catalog')) {
              $nav_args = array(
                'theme_location' => 'footer_menu_catalog',
                'container' => '',
                'items_wrap' => '%3$s',
              );
              wp_nav_menu($nav_args);
            }
            }; ?>
          </ul>
        </div>

        <div class="footer__menu">
          <div class="footer__menu-title"><?= get_bloginfo("language") == 'ru' ? 'потолки с подсветкой' : 'стелі з підсвічуванням'?></div>
          <ul class="footer__menu footer__menu--post text--capitalize">
            <?php if (get_bloginfo("language") == 'ru') { 
               if (has_nav_menu('footer_menu_lighting_ru')) {
              $nav_args = array(
                'theme_location' => 'footer_menu_lighting_ru',
                'container' => '',
                'items_wrap' => '%3$s',
              );
              wp_nav_menu($nav_args);
            }
            } else {
              if (has_nav_menu('footer_menu_lighting')) {
              $nav_args = array(
                'theme_location' => 'footer_menu_lighting',
                'container' => '',
                'items_wrap' => '%3$s',
              );
              wp_nav_menu($nav_args);
            }
            }; ?>
          </ul>
        </div>

        <div class="footer__menu">
          <div class="footer__menu-title"><?= get_bloginfo("language") == 'ru' ? 'цены' : 'ціни'?></div>
          <ul class="footer__menu footer__menu--post text--capitalize">
            <?php if (get_bloginfo("language") == 'ru') { 
                if (has_nav_menu('footer_menu_price_ru')) {
              $nav_args = array(
                'theme_location' => 'footer_menu_price_ru',
                'container' => '',
                'items_wrap' => '%3$s',
              );
              wp_nav_menu($nav_args);
            }
            } else {
              if (has_nav_menu('footer_menu_price')) {
              $nav_args = array(
                'theme_location' => 'footer_menu_price',
                'container' => '',
                'items_wrap' => '%3$s',
              );
              wp_nav_menu($nav_args);
            }
            }; ?>
          </ul>
        </div>

        <div class="footer__menu">
          <div class="footer__menu-title"><?= get_bloginfo("language") == 'ru' ? 'наши работы' : 'наші роботи'?></div>
          <ul class="footer__menu footer__menu--post text--capitalize">
            <?php if (get_bloginfo("language") == 'ru') { 
              if (has_nav_menu('footer_menu_works_ru')) {
              $nav_args = array(
                'theme_location' => 'footer_menu_works_ru',
                'container' => '',
                'items_wrap' => '%3$s',
              );
              wp_nav_menu($nav_args);
            }
            } else {
              if (has_nav_menu('footer_menu_works')) {
              $nav_args = array(
                'theme_location' => 'footer_menu_works',
                'container' => '',
                'items_wrap' => '%3$s',
              );
              wp_nav_menu($nav_args);
            }
            }; ?>
          </ul>
        </div>

        <div class="footer__menu">
          <div class="footer__menu-title"><?= get_bloginfo("language") == 'ru' ? 'заказчикам' : 'замовникам'?></div>
          <ul class="footer__menu footer__menu--post text--capitalize">
            <?php if (get_bloginfo("language") == 'ru') { 
              if (has_nav_menu('footer_menu_customers_ru')) {
                $nav_args = array(
                  'theme_location' => 'footer_menu_customers_ru',
                  'container' => '',
                  'items_wrap' => '%3$s',
                );
                wp_nav_menu($nav_args);
              }
            } else {
              if (has_nav_menu('footer_menu_customers')) {
                $nav_args = array(
                  'theme_location' => 'footer_menu_customers',
                  'container' => '',
                  'items_wrap' => '%3$s',
                );
                wp_nav_menu($nav_args);
            }
            }; ?>
          </ul>
        </div>

        <div class="footer__menu">
          <div class="footer__menu-title"><?= get_bloginfo("language") == 'ru' ? 'контакты' : 'контакти'?></div>
          <ul class="footer__menu footer__menu--post text--capitalize">
            <?php if (has_nav_menu('footer_menu_contacts')) :
              $nav_args = array(
                'theme_location' => 'footer_menu_contacts',
                'container' => '',
                'items_wrap' => '%3$s',
              );
              wp_nav_menu($nav_args);
            endif; ?>
          </ul>
        </div>
      </div>
      

      <div class='footer__autonom'>
        <?= get_bloginfo("language") == 'ru' ? 'Рабоаем автономно' : 'Працюємо автономно'?>
      </div>

    </div>
  </div>
  
  <div class="footer__bottom">
    <?= get_bloginfo("language") == 'ru' ? 'Работаем по Киеву и Киевской области' : 'Працюємо по Києву та Київській області'?>
  </div>
</footer>

<?php wp_footer(); ?>

<div data-crm-widget="disclaimer" data-params='{"theme":"dark"}'></div>

</body>
</html>
