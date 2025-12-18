<!DOCTYPE html>
<html lang="<?= get_bloginfo('language') == 'ru-RU' ? 'ru' : 'uk' ?>">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no">
    <title><?php ' | ' . wp_title(); ?> </title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
    <?php wp_head(); ?>
	
	
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1315290299582370"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-1315290299582370');
</script>
	
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
            href="tel:+380678380813" 
            rel="nofollow">
            +38 067 838 08 13
          </a>
          <div class="header__show-phones">
            <ul class="header__phones">
              <li><a 
            class="header__phone" 
            href="tel:+380678380813" 
            rel="nofollow">+38 067 838 08 13</a></li>
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
			<li class="desctop__hidden">
				<a 
            	class="header__phone" 
				   style="display: block; margin-left: 0;"
            	href="tel:+380678380813" 
            	rel="nofollow">+38 067 838 08 13
				</a>
			</li>
          </ul>
		  
		  <div class="header__phones-wrp">
            <a 
              class="header__phone header__phone--mobile" 
              href="tel:+380678380813" 
              rel="nofollow">
              +38 067 838 08 13
            </a>
          </div>
		  
		  <a 
            href="#"
            rel="nofollow" id="headerQuizPopup"
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
	
	<script type="application/ld+json">
var pageLang = window.location.pathname.includes('/ru/') ? 'ru' : 'uk';

var jsonLdBusiness = {
    "@context": "http://schema.org/",
    "@type": "LocalBusiness",
    "name": "Stelio",
    "alternateName": "Стелио",
    "image": "https://stelio.com.ua/wp-content/themes/steli/images/icons/header-logo.svg",
    "priceRange": "$$",
    "telephone": "+38 067 129 17 88",
    "url": pageLang === 'ru' ? "https://stelio.com.ua/ru/" : "https://stelio.com.ua/",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Б.Хмельницького 33/34, офіс 9",
        "addressLocality": pageLang === 'ru' ? "Киев" : "Київ",
        "addressCountry": "Україна"
    },
    "openingHoursSpecification": [
        {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "opens": "09:00",
            "closes": "19:00"
        }
    ]
};

var jsonLdFAQ = {
    "@context": "http://schema.org/",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": pageLang === 'ru' ? "Какая гарантия на материал и выполненные работы?" : "Яка гарантія на матеріал та виконані роботи?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": pageLang === 'ru' ? "Гарантия на полотна и комплектующие 10 лет, 2 года на монтажные работы." : "Гарантія на полотна та комплектуючі 10 років, 2 роки на монтажні роботи."
            }
        },
        {
            "@type": "Question",
            "name": pageLang === 'ru' ? "На каком этапе ремонта делать натяжные потолки?" : "На якому етапі ремонту робити натяжні стелі?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": pageLang === 'ru' ? "Сначала проводятся все коммуникации, затем подготовка стен... Затем мы делаем замеры и устанавливаем потолок." : "Спочатку проводяться всі комунікації, потім підготовка стін... Потім ми робимо заміри і встановлюємо стелю."
            }
        },
        {
            "@type": "Question",
            "name": pageLang === 'ru' ? "На сколько опустится потолок?" : "На скільки опуститься стеля?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": pageLang === 'ru' ? "Обычно потолок опускается на 4-5 см, но возможный минимум — 2,5 см при использовании потолочного багета. Если базовый потолок имеет неровности, то опускание следует считать от самой низкой точки." : "Зазвичай стеля опускається на 4-5 см, але мінімум можливий — 2,5 см при використанні стельового багету. Якщо базова стеля має нерівності, опускання слід рахувати від найнижчої точки."
            }
        },
        {
            "@type": "Question",
            "name": pageLang === 'ru' ? "Как подготовить помещение к установке натяжного потолка?" : "Як підготувати приміщення до встановлення натяжної стелі?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": pageLang === 'ru' ? "Перед монтажом необходимо освободить доступ к стенам, отодвинуть мебель, если её нельзя убрать. Также следует удалить предметы, чувствительные к высокой температуре, так как при натяжке полотна используется нагрев до 70°C." : "Перед монтажем необхідно звільнити доступ до стін, відсунути меблі, якщо її не можна винести. Також слід видалити предмети, чутливі до високої температури, оскільки при натяжці полотна використовується нагрів до 70°C."
            }
        }
    ]
};

// Вставка JSON-LD в <head>
var scriptBusiness = document.createElement('script');
scriptBusiness.type = "application/ld+json";
scriptBusiness.text = JSON.stringify(jsonLdBusiness);
document.head.appendChild(scriptBusiness);

var scriptFAQ = document.createElement('script');
scriptFAQ.type = "application/ld+json";
scriptFAQ.text = JSON.stringify(jsonLdFAQ);
document.head.appendChild(scriptFAQ);
</script>


</header>

<main id="main" class="main">