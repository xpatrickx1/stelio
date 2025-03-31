

<?php

$args = array(
  'category_name' => 'works', 
  'posts_per_page' => 10, 
  'orderby' => 'date', 
  'order' => 'DESC' 
);
$the_query = new WP_Query( $args );
?>

<div class="category-content">
    <div class="container">
        <div class="category-content__wrap">
<?php
if ( $the_query->have_posts() ) {
  while ( $the_query->have_posts() ) {
      $the_query->the_post(); 
      ?>
      <?php the_content(); ?>
      <?php
  }
  wp_reset_postdata(); 
} else {
  // No posts found
}

?>
</div>
    </div>
</div>
