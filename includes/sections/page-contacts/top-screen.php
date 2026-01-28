<section class="top-screen">
  <div class="container">
    <div class="breadcrumbs">
      <span><a href="<?= home_url(); ?>"><?= get_bloginfo("language") == 'ru' ? 'Натяжные потолки в Киеве' : 'Натяжні стелі у Києві' ?></a></span>
      <span class="breadcrumbs__slash"> / </span>
      <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : 'Контакти' ?></span>
    </div>
  </div>
  
  <div class="container ">
    <div class="top-screen__wrap">
      <div class="top-screen--top">
        <h1>
          <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
        </h1>
      
        <div class="top-screen--center">
          <div class="top-screen__address">
            <?= get_field('topscreen_address') ? the_field('topscreen_address') : 'Приезжайте в гости на кофе в центральный шоурум на ул. Б.Хмельницкого 33/34, офиc 9' ?>
          </div> 
          <div class="top-screen__phone">
            <?= get_field('topscreen_phone') ? the_field('topscreen_phone') : '+38 063 654 63 85' ?>
          </div>
          <a 
            class="top-screen__mail" 
            href="mailto:<?= get_field('topscreen_email') ? the_field('topscreen_email') : 'hi@stelio.com.ua' ?>">
            <?= get_field('topscreen_email') ? the_field('topscreen_email') : 'hi@stelio.com.ua' ?>
          </a>
        </div>

        <div class="top-screen--right">
          <div class="top-screen__work-title">
          <?php if ( get_field('topscreen_worktitle'))  { 
                echo get_field('topscreen_worktitle') ;
              } else { 
                if (get_bloginfo("language") == 'ru') {
                  echo 'Режим работы шоурума и отдела продаж:' ;
                } else {
                  echo 'Графік роботи шоуруму та відділу продажу:';
                } 
              }; ?>
          </div>
          <ul class="top-screen__work-time">
            <li>
              <?= get_field('topscreen_worktitle1') ? the_field('topscreen_worktitle1') : 'С понедельника по субботу: с <span>9:00</span> до <span>19:00</span>' ?>
            </li>
            <li>
              <?= get_field('topscreen_worktitle2') ? the_field('topscreen_worktitle2') : 'Воскресенье: офис — по согласованию.' ?>
            </li>
          </ul>
        </div>
      </div>

      <div class="top-screen__images">
        <div class="top-screen__img">
        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=777&amp;height=461&amp;hl=en&amp;q=богдана хмельницкого 33/34&amp;t=p&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://sprunkin.com/">Sprunki Game</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:461px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:461px;}.gmap_iframe {height:461px!important;}</style></div>
			
        <!-- <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= get_field('team_top_1')['url'] ? get_field('team_top_1')['url'] : bloginfo('template_url') . '/images/page-contacts/contacts1.webp' ?>"
          class="lazy"
          width="1px"
          height="1px"
        /> -->
        </div>
        <div class="top-screen__team">
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= get_field('team_top_2')['url'] ? get_field('team_top_2')['url'] : bloginfo('template_url') . '/images/page-contacts/contacts2.webp' ?>"
          class="lazy"
          width="1px"
          height="1px"
        />
        </div>
      </div>
        
    </div>
  </div>
</section>
