<?php

$offices = [
  'Киев', 'Вышгород', 'Ирпень','Новоселки','Новоселки','Лютеж','Макаров','Боярка','Васильков','Белая Церковь','Белогородка',
  'Борисполь','Бородянка','Борщаговка','Боярка','Бровары','Буча','Васильков','Великая Дымерка',
  'Вишневое','Ворзель','Вышгород','Глеваха','Гоголев','Гореничи','Гостомель','Демидов','Дымер','Житомир',
  'Зазимье','Ирпень','Коцюбинское','Лебедевка','Лютеж','Макаров','Новоселки','Новые Петровцы','Обухов'
];

?>

<section class="offices">
  <div class="container">
    
  </div>
  
  <div class="container offices__wrap">

    <h3>
      <?= get_field('offices_title') ? the_field('offices_title') : 'Мобильные офисы </br> и представительства' ?>
    </h3>

    <div class="offices__description">
      <?= get_field('officesn_description') ? the_field('officesn_description') : 'Приезжайте в гости на кофе в центральный шоурум на ул. Б.Хмельницкого 33/34, офиc 9' ?>
    </div> 

    <div class="offices__list-title">
      <?= get_field('offices_list_title') ? the_field('offices_list_title') : 'Мы устанавливаем натяжные потолки в городах:' ?>
    </div> 
  
    <ul class="offices__list">
      <?php if (have_rows('offices_list')) :
        while ( have_rows('offices_list')) : the_row(); ?>
          <li class="item">
            <li class="item"><?= get_sub_field('item_text') ?></li>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $offices as $key => $item ) : ?>
          <li class="item"><?= $item ?></li>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
  </div>
</section>
