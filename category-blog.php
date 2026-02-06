<?php
/*
 * Template Post Type: category
 */

get_header();  

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$posts_per_page = 8;
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
            $args = [
                'post_type'      => 'post',
                'posts_per_page' => $posts_per_page,
                'paged'          => $paged, 
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'DESC',
            ];
            
            if (is_category()) {
                $args['cat'] = get_queried_object_id();
            }
            
            $blog_query = new WP_Query($args);
            
            if ($blog_query->have_posts()) :
                $post_counter = 0;
                while ($blog_query->have_posts()) : $blog_query->the_post();
                    $post_counter++;
                    error_log('Post #' . $post_counter . ' on page ' . $paged . ': ' . get_the_ID() . ' - ' . get_the_title());
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
                        <div class="debug-info" style="display: none;">
                            Page: <?php echo $paged; ?> | Post: <?php echo $post_counter; ?>
                        </div>
                    </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>' . esc_html__('No posts found.', 'text-domain') . '</p>';
            endif;
            ?>
        </div>
        
        <?php
        $total_pages = $blog_query->max_num_pages;
        
        if ($total_pages > 1) {
            $current_page = max(1, $paged);
            
            echo '<div class="load-more-container">';
            echo '<div class="blog-pagination">';
            echo paginate_links([
                'base'      => str_replace(
                    999999999,
                    '%#%',
                    esc_url(get_pagenum_link(999999999))
                ),
                'format'    => 'page/%#%/',
                'current'   => $paged,
                'total'     => $blog_query->max_num_pages,
                'prev_text' => '←',
                'next_text' => '→',
            ]);
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</section>
<?php get_template_part('includes/modules/offices')?>

<?php get_footer(); ?>