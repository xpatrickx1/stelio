<aside>
  <ul class="inner__sidebar">
    <?php if (has_nav_menu('inner_sidebar')) :
      $nav_args = array(
        'theme_location' => 'inner_sidebar',
        'container' => '',
        'items_wrap' => '%3$s',
      );
      wp_nav_menu($nav_args);
    endif; ?>
  </ul>  
</aside>