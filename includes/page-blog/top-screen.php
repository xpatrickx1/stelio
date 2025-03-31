<div class="top-screen">
  <div class="container">
    <div class="container catalog__wrap">
      <div class="breadcrumbs">
        <span><a href="<?= home_url(); ?>">Натяжные потолки в Киеве</a></span>
        <span class="breadcrumbs__slash"> / </span>
        <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : 'Каталог потолков' ?></span>
      </div>
    <div class="catalog__top">
      <h2>
          <?= get_field('catalog_title') ? the_field('catalog_title') : 'Каталог натяжных потолков' ?>
      </h2>
    </div>
  </div>
</div>