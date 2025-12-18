<?php
/*
* Template Name: Blog post
 * Template Post Type: post, page
*/
?>

<?php get_header(); ?>

<section class="top-screen">
    <div class="container top-screen__wrap">

        <div class="top-screen--left">

            <div class="breadcrumbs">
            <span><a href="<?= home_url(); ?>"><?= get_bloginfo("language") == 'ru' ? 'Натяжные потолки в Киеве' : 'Натяжні стелі у Києві' ?></a></span>
                <span class="breadcrumbs__slash"> / </span>
                <span><a href="/blog/"><?= get_bloginfo("language") == 'ru' ? 'Блог' : 'Блог' ?></a></span>
                <span class="breadcrumbs__slash"> / </span>
                <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : get_the_title() ?></span>
            </div>

            <h1>
                <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
            </h1>

            <?php if( get_field('page_description') ) : ?>
                <p class="top-screen__description section-subtitle">
                    <?= the_field('page_description') ?>
                </p>
            <?php endif; ?>
        </div>

        

    </div>
</section>

<section class="content">
    <div class="container">
        <div class="content__wrap">
            <div class="content--left">
                <img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url() : bloginfo('template_url') . '/images/features/blog.jpg' ?>)" alt="" title="" width="1px" height="1px" />
            </div>
            <div class="content-content__wrap">
                <?php
                    if (have_posts() ) {
                        while (have_posts()) : the_post();
                            echo the_content();
                        endwhile;
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<?php include('rand-post.php')?>

<div class="post-recent">
  <div class="container">
      <?php echo do_shortcode("[random-posts]"); ?>
  </div>
</div>

<?php
function rand_posts()
{
    $args = array(
        'post_type' => 'post',
//        'orderby' => 'rand',
//        'posts_per_page' => 3,
        'post__not_in' => [get_the_ID()],
        'category_name' => 'blog',
        'posts_per_page'   => -1,
    );

    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        $string .= '<div class="post-recent__wrap">';
        
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $postID = get_the_id();
            
            $string .= '
            <article id="post-' . $postID . '" class="blog__item item">
                <a href="' . get_permalink() . '" class="item__img" style="background-image: url(' . (has_post_thumbnail() ? get_the_post_thumbnail_url() : get_bloginfo('template_url') . '/images/features/blog.jpg') . ')"></a>
                <div class="item--left">
                    <div class="item__date">' . get_the_date('F d, Y') . '</div>
                    <div class="item__title">
                        <a href="' . get_permalink() . '">
                            ' . get_the_title() . '
                        </a>
                    </div>
                </div>
            </article>';
        }
        
        $string .= '</div>';
        /* Restore original Post Data */
        wp_reset_postdata();
    } else {
        $string .= 'no posts found';
    }
    return $string;
}
?>

<?php get_footer(); ?>