<?php
/*
 * Template Name: Custom Category Template - My Category
 * Template Post Type: category
 */

get_header();  

$posts_per_page = 8; // Фіксована кількість постів на сторінку
$current_page = 1; // Завжди показуємо першу сторінку
?>

<section class="top-screen">
<div class="container">
        <div class="breadcrumbs">
            <span><a href="<?= home_url(); ?>"><?= get_bloginfo("language") == 'ru' ? 'Натяжные потолки в Киеве' : 'Натяжні стелі у Києві' ?></a></span>
            <span class="breadcrumbs__slash"> / </span>
            <span><?= get_bloginfo("language") == 'ru' ? 'Блог' : 'Блог' ?></span>
        </div>
    </div>
</section>

<section class="blog">
    <div class="container">
        <div class="blog__wrap" id="blog-posts-container">
            <?php
            $posts_per_page = 8;

            $args = [
                'post_type'      => 'post',
                'posts_per_page' => $posts_per_page,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'DESC',
            ];
            
            if (is_category()) {
                $args['cat'] = get_queried_object_id();
            }
            
            $blog_query = new WP_Query($args);
            
            if ($blog_query->have_posts()) :
                while ($blog_query->have_posts()) : $blog_query->the_post();
            ?>
                    <article class="blog__item item" data-id="<?= get_the_ID() ?>">
                        <a href="<?php the_permalink(); ?>" class="item__img" style="background-image: url(<?= has_post_thumbnail() ? get_the_post_thumbnail_url() : bloginfo('template_url') . '/images/features/blog.jpg' ?>)"></a>
                        <div class="item--left"></div>
                        <div class="item__date"><?= get_the_date('F d, Y') ?></div>
                        <h2 class="item__title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                    </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>' . esc_html__('No posts found.', 'text-domain') . '</p>';
            endif;
            
            $total_posts = $blog_query->found_posts;
            $total_pages = ceil($total_posts / $posts_per_page);
            ?>
        </div>
        
        <?php if ($total_posts > $posts_per_page) : ?>
        <div class="load-more-container" id="load-more-container">
            <button 
                id="load-more-btn" 
                class="button--main" 
                data-page="2" 
                data-offset="<?php echo $posts_per_page; ?>" 
                data-category="<?php echo is_category() ? get_queried_object_id() : ''; ?>"
                data-max-pages="<?php echo $total_pages; ?>"
                data-posts-per-page="<?php echo $posts_per_page; ?>"
                data-total-posts="<?php echo $total_posts; ?>"
            >   
                <?= get_bloginfo("language") == 'ru' ? 'Загрузить еще' : 'Завантажити ще' ?>
            </button>
            <div class="loader" id="load-more-loader" style="display: none;"></div>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>