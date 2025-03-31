<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no">
    <title><?php ' | ' . wp_title(); ?></title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
    <?php wp_head(); ?>
</head>

<?php include(locate_template('main-vars.php', true)); ?>

<body>

<header class="header">
    
    <div class="header--top">
      <div class="container header--top-wrp">
        <div class='header__schedule'>
          Пн - Сб: c 9:00 до 19:00
        </div>

        <div class='header__autonom'>
          <?= get_bloginfo("language") == 'ru' ? 'Рабоаем автономно' : 'Працюємо автономно'?>
        </div>

        <div class="header--top-left">
          <?php if (function_exists ('wpm_language_switcher')) wpm_language_switcher (); ?>

          <a 
            class="header__phone" 
            href="tel:+38 063 654 63 85" 
            rel="nofollow">
            +38 063 654 63 85
          </a>
          <div class="header__show-phones">
          <?php $nav_args = array(
                'theme_location' => 'header_phones',
                'container' => '',
                'items_wrap' => '%3$s',
                'walker' => new My_Walker_Nav_Menu(),
              );
            ?>
            <ul class="header__phones">
              <li>+38 067 654 63 85</li>
              <li>+38 093 654 63 85</li>
            </ul>
          </div>
        </div>
        
      </div>
    </div>
    <div class="container">
      <div class="header--bottom">
          <a href="<?= get_bloginfo("language") == 'ru' ? '/ru/' : '/'?>"
            class="header__logo" aria-label="Header logo"
          >
            <div class="logo__desktop">
                <img src="<?= bloginfo('template_url') . '/images/loader.gif' ?>"
                  data-src="<?= bloginfo('template_url') . '/images/icons/header-logo.svg' ?>" class="lazy"
                  alt="Back to homepage logo link"
                  width="200px"
                  height="41px"
                >
            </div>

            <div class="logo__mobile">
              <img
                src="<?php bloginfo('template_url'); ?>/images/loader.gif"
                data-src="<?= bloginfo('template_url') . '/images/icons/header-logo.svg' ?>" class="lazy"
                alt="Back to homepage logo link"
                class="lazy"
                width="74px"
                height="78px">
            </div>
          </a>

          <ul class="header__navigation navigation">
            <?php if (get_bloginfo("language") == 'ru') { 
              $nav_args = array(
                'theme_location' => 'header_menu_ru',
                'container' => '',
                'items_wrap' => '%3$s',
                'walker' => new My_Walker_Nav_Menu(),
              );
              wp_nav_menu($nav_args);
            } else {
              $nav_args = array(
                'theme_location' => 'header_menu',
                'container' => '',
                'items_wrap' => '%3$s',
                'walker' => new My_Walker_Nav_Menu(),
              );
              wp_nav_menu($nav_args);
            }; ?>

            <li class="desctop__hidden"><?php if (function_exists ('wpm_language_switcher')) wpm_language_switcher (); ?></li>
          </ul>

          

          <div class="header__phones-wrp">
            <a 
              class="header__phone header__phone--mobile" 
              href="tel:+38 063 654 63 85" 
              rel="nofollow">
              +38 063 654 63 85
            </a>
            <div class="header__show-phones">
            <?php $nav_args = array(
                  'theme_location' => 'header_phones',
                  'container' => '',
                  'items_wrap' => '%3$s',
                  'walker' => new My_Walker_Nav_Menu(),
                );
              ?>
              <ul class="header__phones">
                <li>+38 067 654 63 85</li>
                <li>+38 093 654 63 85</li>
              </ul>
            </div>
          </div>

          <a 
            href="/prices/"
            rel="nofollow" id="headerCallbackPopup"
            class="button--second">
            <?php if (get_bloginfo("language") == 'ru') {
                  echo 'калькулятор стоимости' ;
                } else {
                  echo 'калькулятор вартостi';
                }; ?>
          </a>

          <div class="header__hamburger js-hamburger">
            <div class="hamburger-line1"></div>
            <div class="hamburger-line2"></div>
            <div class="hamburger-line3"></div>
          </div>

      </div>

    </div>

</header>

<main id="main" class="main">