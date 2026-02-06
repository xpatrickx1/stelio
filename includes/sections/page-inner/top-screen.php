<section class="top-screen">
  <div class="container ">
    <div class="top-screen__wrap">
      <div class="breadcrumbs">
        <span><a href="<?= home_url(); ?>"><?= get_bloginfo("language") == 'ru' ? 'Натяжные потолки в Киеве' : 'Натяжні стелі у Києві' ?></a></span>
        <span class="breadcrumbs__slash"> / </span>
        <span><a href="/catalog/"><?= get_bloginfo("language") == 'ru' ? 'Каталог' : 'Каталог' ?></a></span>
        <span class="breadcrumbs__slash"> / </span>
        <?php 
          if ( get_subcategory_name() ) { 
          ?>
              <span href="/design-sub"><?php echo get_subcategory_name(); ?></span>
              <span class="breadcrumbs__slash"> / </span>
          <?php } 
        ?>
        <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : 'Каталог потолков' ?></span>
      </div>
       
    
      
      <div class="top-screen__top">
        <div class="top-screen--left">
          <img 
            src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
            data-src="<?= get_field('inner_top_1')['url'] ? get_field('inner_top_1')['url'] : bloginfo('template_url') . '/images/page-inner/innerTop1.webp' ?>"
            class="lazy"
            width="1px"
            height="1px"
          />
        </div>
        
        <div class="top-screen--right">
          <div class="top-screen__img">
            <img 
              src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
              data-src="<?= get_field('inner_top_2')['url'] ? get_field('inner_top_2')['url'] : bloginfo('template_url') . '/images/page-inner/innerTop2.webp' ?>"
              class="lazy"
              width="1px"
              height="1px"
            />
          </div>
          <div class="top-screen__img">
            <img 
              src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
              data-src="<?= get_field('inner_top_3')['url'] ? get_field('inner_top_3')['url'] : bloginfo('template_url') . '/images/page-inner/innerTop3.webp' ?>"
              class="lazy"
              width="1px"
              height="1px"
            />
          </div>
        </div>
        
      </div>

      <div class="top-screen__bottom">
        <h1>
          <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
        </h1>
        <div class="top-screen__bottom--left">
          <div class="top-screen__description">
            <?php if ( get_field('top_screen_description_1'))  { 
              echo get_field('top_screen_description_1') ;
              } else { 
              if (get_bloginfo("language") == 'ru') {
                echo 'Теневое примыкание натяжного потолка создаёт визуальный эффект — между потолочной конструкцией и стеной пролегает глубокая тень.' ;
              } else {
                echo 'Тіньове примикання натяжної стелі створює візуальний ефект – між стельовою конструкцією та стіною пролягає глибока тінь.';
              } 
            }; ?>
          </div>
          <div class="top-screen__description">
            <?php if ( get_field('top_screen_description2'))  { 
              echo get_field('top_screen_description2') ;
              } else { 
              if (get_bloginfo("language") == 'ru') {
                echo 'Из-за этого кажется, что потолочная «плита» парит в воздухе, не соприкасаясь со стеной. Они хорошо смотрятся в современных и минималистичных интерьерах.' ;
              } else {
                echo 'Через це здається, що стельова «плита» ширяє в повітрі, не стикаючись зі стіною. Вони добре виглядають у сучасних та мінімалістичних інтер’єрах.';
              } 
            }; ?>
          </div>
          
          <a 
            href="#"
            data-hover="<?= get_bloginfo("language") == 'ru' ? 'Бесплатный замер' : 'Безкоштовний замір' ?>"
            rel="nofollow" id="headerOrderBtn"
            class="button--main">
            <span><?= get_bloginfo("language") == 'ru' ? 'Бесплатный замер' : 'Безкоштовний замір'?></span>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>
