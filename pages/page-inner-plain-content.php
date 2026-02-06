<?php
/* Template Name: Inner plain content Template */

get_header();
?>

<section class="top-screen">
  <div class="container">
    <div class="breadcrumbs">
      <span><a href="<?= home_url(); ?>"><?= get_bloginfo("language") == 'ru' ? 'Натяжные потолки в Киеве' : 'Натяжні стелі у Києві' ?></a></span>
      <span class="breadcrumbs__slash"> / </span>
      <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : 'Матовый потолок' ?></span>
    </div>
  </div>

  <div class="container">
    <div class="top-screen__wrap">
      <h1>
        <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
      </h1>
</section>

<section class="category-content">
  <div class="container">
    <div class="category-content__wrap">
      <?php
        if (have_posts() ) {
          while (have_posts()) : the_post();
            echo apply_filters( 'the_content', get_the_content() );
          endwhile;
        }
      ?>
    </div>
  </div>
</section>

<?php if ( get_field('faq_title') ) : ?>
  <?php get_template_part( 'includes/modules/faq' ); ?>
<?php endif; ?>

<?php get_template_part('includes/modules/call')?>
<?php get_template_part('includes/modules/offices')?>

<?php get_footer(); ?>