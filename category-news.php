<?php
    /*
     * Template Name: Custom Category Template - My Category
     * Template Post Type: category
     */

    get_header();  ?>
    
<section class="top-screen">
    <div class="container">
        <div class="breadcrumbs">
            <span><a href="<?= home_url(); ?>"><?= get_bloginfo("language") == 'ru' ? 'Натяжные потолки в Киеве' : 'Натяжні стелі у Києві' ?></a></span>
            <span class="breadcrumbs__slash"> / </span>
            <span><?= get_bloginfo("language") == 'ru' ? 'Новости' : 'Новини' ?></span>
        </div>
    </div>

    <div class="container">
        <div class="top-screen__wrap">
            <h1>
                <?= get_queried_object()->name; ?>
                <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                ?>
                <?php if ($paged !== 1) { echo " - Page " . $paged;} ?>
            </h1>   
    </div>
</section>

<section class="blog">
    <div class="container">
        <div class="blog__wrap">
        <?php
            if (have_posts() ) {
                while ( have_posts() ) : the_post();
                    ?>
                    <article class="blog__item item">
                        <a href="<?php the_permalink(); ?>" class="item__img" style="background-image: url(<?= has_post_thumbnail() ? get_the_post_thumbnail_url() : bloginfo('template_url') . '/images/features/blog.jpg' ?>)"></a>
                        <div class="item--left">
                        </div>
                            <div class="item__date"><?= get_the_date('F d, Y') ?></div>
                            <h2 class="item__title">
                                <a href="<?php the_permalink(); ?>">
                                    <?= the_title( '<h2>', '</h2>' ) ?>
                                </a>
                            </h2>
                            <!-- <div class="item__text"><?= the_excerpt() ?></div> -->
                        
                    </article>
            <?php
                endwhile;
            }
        ?>
        </div>
    </div>
</section>

<?php  get_footer(); ?>