
<?php get_header(); ?>

<?php get_template_part('includes/sections/page-works/top-screen')?>

<?php

function my_search_filter( $query ) {
    if ( $query->is_category('works') ) {
        $query->set( 'posts_per_page', -1 );
    }
    return $query;
}

add_filter( 'pre_get_posts', 'my_search_filter' );
?>

<div class="category-content">
    <div class="container">
        <div class="category-content__wrap">
            <?php if (have_posts() ) :
                while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?> 
                <?php endwhile;
            endif; ?>
        </div>
    </div>
</div>
    
<?php get_footer(); ?>