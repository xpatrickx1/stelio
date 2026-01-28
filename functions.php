<?php

// include_once('redirects.php');

//ADDING JS AND CSS FILES
//--------------------------------------------------
function ox_adding_scripts()
{
    if (!function_exists('is_login_page')) {
        function is_login_page()
        {
            return !strncmp($_SERVER['REQUEST_URI'], '/wp-login.php', strlen('/wp-login.php'));
        }
    }

    if (!is_admin() && !is_login_page()) {
        /*removed wp-embed.min.js*/
        wp_deregister_script('wp-embed');
        wp_dequeue_style('wp-block-library');

        /*jquery*/
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', null, '3.5.1', true);

      
        //общие для всего сайта стили и скрипты

        /*custom js*/
        wp_enqueue_script('main', get_template_directory_uri() . '/js/min/main.min.js', array('jquery'), time(), true);

        /*custom css*/
        wp_enqueue_style('main', get_template_directory_uri() . '/css/style.min.css', array(), time());



        add_action('wp_head', function () {
            if (is_front_page()) {
                if (wp_is_mobile()) {
                    echo '<link rel="preload" as="image" href="/wp-content/themes/steli/images/first-screen/natyzhnoy-potolok-s-podsvetkoy.jpg"/>';
                } else {
                    echo '<link rel="preload" as="image" href="/wp-content/themes/steli/images/first-screen/natyzhnoy-potolok-s-podsvetkoy.jpg"/>';
                }
            }
        }, 1000);



        //добавляем css и js для кастомных страниц
        $pageTemplate = get_page_template_slug();

        if (strrpos($pageTemplate, 'pages/') === 0) {
            $pageTemplateName = str_replace(['pages/', '.php'], '', $pageTemplate);

            $isCssFile = file_exists(get_theme_file_path('css/' . $pageTemplateName . '.min.css'));
            $isJsFile = file_exists(get_theme_file_path('js/min/' . $pageTemplateName . '.min.js'));

            if ($isCssFile) {
                $cssFilePath = get_theme_file_uri('css/' . $pageTemplateName . '.min.css');
                wp_enqueue_style($pageTemplateName, $cssFilePath, array(), time());
            }

            if ($isJsFile) {
                $jsFilePath = get_theme_file_uri('js/min/' . $pageTemplateName . '.min.js');
                wp_enqueue_script($pageTemplateName, $jsFilePath, array('jquery'), time(), true);
            }
        }
       
        //добавляем стили для блога и постов
        if (is_home() || is_single()) {
            wp_enqueue_style('post', get_template_directory_uri() . '/css/page-post.min.css', array(), time());
            wp_enqueue_script('post', get_template_directory_uri() . '/js/min/page-post.min.js', null, time(), true);
        }

        if (  get_post_meta( get_the_ID(), '_wp_page_template', true ) === 'single2.php' ) {
            wp_deregister_style('post');
            wp_dequeue_style('post');
            wp_dequeue_script('post');
            wp_enqueue_style('inner2', get_template_directory_uri() . '/css/page-inner-2.min.css', array(), time(), 'all');
            wp_enqueue_script('inner2js', get_template_directory_uri() . '/js/min/page-inner-2.min.js', null, time(), true);
        }

        if (  get_post_meta( get_the_ID(), '_wp_page_template', true ) === 'single3.php' ) {
            wp_deregister_style('post');
            wp_dequeue_style('post');
            wp_dequeue_script('post');
            wp_enqueue_style('inner3', get_template_directory_uri() . '/css/page-inner-3.min.css', array(), time(), 'all');
            wp_enqueue_script('inner3-js', get_template_directory_uri() . '/js/min/page-inner-3.min.js', null, time(), true);
        }

        if (  get_post_meta( get_the_ID(), '_wp_page_template', true ) === 'single-plain-content.php' ) {
            wp_deregister_style('post');
            wp_dequeue_style('post');
            wp_dequeue_script('post');
            wp_enqueue_style('innerplain', get_template_directory_uri() . '/css/page-inner-plain-content.min.css', array(), time(), 'all');
        }

        if (is_front_page()) {
            wp_enqueue_style('front', get_template_directory_uri() . '/css/page-front.min.css', array(), time());
            wp_enqueue_script('front-js', get_template_directory_uri() . '/js/min/page-front.min.js', null, time(), true);
        }

        //для лендингов(темплейт page.php)
        $isLanding = !is_page_template() && !is_home() && !is_single() && !is_404() && !is_front_page() && !is_category();
        if ($isLanding) {
            wp_enqueue_style('landing', get_template_directory_uri() . '/css/page-seo.min.css', array(), time());
        }

        // для категорий
        if (is_category('catalog')) {
            wp_dequeue_style('inner2');
            wp_enqueue_style('catalog', get_template_directory_uri() . '/css/page-catalog.min.css', array(), time());
            wp_enqueue_script('catalog', get_template_directory_uri() . '/js/min/page-catalog.min.js', null, time(), true);
        }

        if (is_category('blog')) {
            wp_dequeue_style('blog');
            wp_dequeue_style('post');
            wp_dequeue_script('post');
            wp_enqueue_style('blog', get_template_directory_uri() . '/css/page-blog.min.css', array(), time());
        }

        if (is_category('news')) {
            wp_dequeue_style('blog');
            wp_dequeue_style('post');
            wp_dequeue_script('post');
            wp_enqueue_style('news', get_template_directory_uri() . '/css/page-blog.min.css', array(), time());
            wp_enqueue_style('news', get_template_directory_uri() . '/css/page-blog.min.js', array(), time());
        }

        if ( is_category('works') ) {
            wp_enqueue_style('works', get_template_directory_uri() . '/css/page-works.min.css', array(), time(), 'all');
            wp_enqueue_script('works-js', get_template_directory_uri() . '/js/min/page-works.min.js', null, time(), true);
             wp_deregister_script('blog-js');
        }

        if (is_single() && get_post_meta(get_the_ID(), '_wp_page_template', true) === 'single-blog.php') {
            wp_dequeue_style('post');
            wp_enqueue_style('single-blog', get_template_directory_uri() . '/css/page-blog-post.min.css', array(), time());
        }

        if (is_single() && get_post_meta(get_the_ID(), '_wp_page_template', true) === 'single-news.php') {
            wp_dequeue_style('post');
            wp_enqueue_style('single-news', get_template_directory_uri() . '/css/page-blog-post.min.css', array(), time());
        }

        //для 404 страницы
        if (is_404()) {
            wp_enqueue_style('error', get_template_directory_uri() . '/css/page-error.min.css', array(), time());
        }

        // if (is_category() || is_home() || is_archive()) {
        //     wp_localize_script('load-more-ajax', 'ajax_object', array(
        //         'ajax_url' => admin_url('admin-ajax.php'),
        //         'nonce'    => wp_create_nonce('load_more_nonce'),
        //         'language' => get_bloginfo("language")
        //     ));
        // }
    }
}

add_action('wp_enqueue_scripts', 'ox_adding_scripts');

//ADDING CRITICAL CSS (only for front-page)
//--------------------------------------------------
//render-blocking styles
$css_files = array(
    'front',
    'main',
    'inner',
    'inner2',
    'inner3',
    'innerplain',
    'calculator',
    'catalog',
    'contacts',
    'installation',
    'order',
    'payments',
    'team',
);

add_action('wp_enqueue_scripts', 'ox_adding_critical_css');

function ox_adding_critical_css()
{

    global $wp_styles, $css_files;

    if (empty($css_files)) return;

    $registered_styles = $css_files;
    $css_files = array();
    $ver_variable = '?ver=';
    $ver_variable_length = strlen($ver_variable);

    foreach ($registered_styles as $item) {
        $s = $wp_styles->registered[$item]->src . $ver_variable . $wp_styles->registered[$item]->ver;
        $current_style_length = strlen($s);
        if ($current_style_length > $ver_variable_length) {
            $css_files[$item] = $s;
        }
    }

    /* $critical_css = load_template_part('css/critical.css');
    echo '<style>' . $critical_css . '</style>'; */

    $pageTemplates = array(
        "front-page" => "front",
        "page-inner" => "inner",
        "page-calculator" => "calculator",
        "page-catalog" => "catalog",
        "page-contacts" => "contacts",
        "page-inner-2" => "inner2",
        "page-inner-3" => "inner3",
        "page-inner-plain" => "innerplain",
        "page-installation" => "installation",
        "page-order" => "order",
        "page-payments" => "payments",
        "page-team" => "team",
        "page-works" => "works",
        "page-price" => "price",
        "page-single-works" => "singleworks",
    );
    $currentPageTemplate = get_page_template_slug();
    $currentPageTemplateName = str_replace(['pages/', '.php'], '', $currentPageTemplate);
    $pageTemplateKeys = array_keys($pageTemplates);
    $counter = 0;
    foreach ($pageTemplates as $currentTemplate) {
        if ($currentPageTemplateName == $pageTemplateKeys[$counter]) {
            $currentCritical = load_template_part("css/critical-$pageTemplates[$currentPageTemplateName].css");
            echo '<style>' . $currentCritical . '</style>';
        }
        $counter = $counter + 1;
    }

    if (  get_post_meta( get_the_ID(), '_wp_page_template', true ) === 'single-works.php' ) {
        $currentCritical = load_template_part("css/critical-singleworks.css");
        echo '<style>' . $currentCritical . '</style>';
    }

    if (  get_post_meta( get_the_ID(), '_wp_page_template', true ) === 'single2.php' ) {
        $currentCritical = load_template_part("css/critical-inner2.css");
        echo '<style>' . $currentCritical . '</style>';
    }

    if (  get_post_meta( get_the_ID(), '_wp_page_template', true ) === 'single3.php' ) {
        $currentCritical = load_template_part("css/critical-inner3.css");
        echo '<style>' . $currentCritical . '</style>';
    }
    
    if (  get_post_meta( get_the_ID(), '_wp_page_template', true ) === 'single.php' ) {
        $currentCritical = load_template_part("css/critical-inner.css");
        echo '<style>' . $currentCritical . '</style>';
    }

    global $css_files;

    foreach ($css_files as $key => $item) {
        wp_deregister_style($key);
        echo "<noscript><link rel='stylesheet' href='$item'/></noscript>";
    }

    function hook_non_critical_css()
    {
        global $css_files;

        foreach ($css_files as $key => $item) {
            echo '<script>function loadCSS(e,t,n){"use strict";var i=window.document.createElement("link");var o=t||window.document.getElementsByTagName("script")[0];i.rel="stylesheet";i.href=e;i.media="only x";o.parentNode.insertBefore(i,o);setTimeout(function(){i.media=n||"all"})}loadCSS("' . $item . '");</script>';
        }
    }

    add_action('wp_footer', 'hook_non_critical_css');
}


function load_template_part($template_name, $part_name = null)
{
    ob_start();
    get_template_part($template_name, $part_name);
    $var = ob_get_contents();
    ob_end_clean();
    return $var;
}


//REWOVE SOME META TAGS AND UNNECESSARY LINKS
//--------------------------------------------------
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head', 10);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');

//remove wpemoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

//remove wp-json
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);


//REGISTRATION MENU
//--------------------------------------------------
register_nav_menus(array(
    'header_menu' => 'Header Menu',
    'header_phones' => 'Header Phones',
    'header_menu_ru' => 'Header Menu RU',
    'footer_menu_terms' => 'Footer Terms Menu',
    'footer_menu_terms_ru' => 'Footer Terms Menu RU',
    'footer_menu_post' => 'Footer Post Menu',
    'footer_menu_post_ru' => 'Footer Post Menu RU',
    'footer_menu_catalog' => 'Footer Menu Catalog',
    'footer_menu_catalog_ru' => 'Footer Menu Catalog RU',
    'footer_menu_lighting' => 'Footer Menu Lighting',
    'footer_menu_lighting_ru' => 'Footer Menu Lighting RU',
    'footer_menu_price' => 'Footer Menu Price',
    'footer_menu_price_ru' => 'Footer Menu Price RU',
    'footer_menu_works' => 'Footer Menu Works',
    'footer_menu_works_ru' => 'Footer Menu Works RU',
    'footer_menu_customers' => 'Footer Menu Customers',
    'footer_menu_customers_ru' => 'Footer Menu Customers RU',
    'footer_menu_contacts' => 'Footer Menu Contacts',
    'inner_sidebar' => 'Inner Sidebar Menu',
    'inner3_sidebar' => 'Inner 3 Sidebar Menu',
    'installation_sidebar' => 'Installation Sidebar Menu',
    'categoty_works' => 'Categoty Works Menu',
    'categoty_works_ru' => 'Categoty Works Menu RU',
));

//custom classes for menu items
// function nav_class_filter($classes, $item, $args, $depth)
// {
//     //добавлять классы только для меню в хедере
//     if ($args->theme_location === 'header_menu' || $args->theme_location === 'header_ppc' || $args->theme_location === 'header_menu-tiktok' || $args->theme_location === 'header_menu-remarketmob' || $args->theme_location === 'header_menu-admission' || $args->theme_location === 'header_menu-mob' || $args->theme_location === 'header_menu-arabic' ) {
//         $classes = ['navigation__link']; //такая запись переписывает все классы для элемента меню
//     }

//     if ($args->theme_location === 'header_submenu') {
//         $classes = ['submenu__link']; //такая запись переписывает все классы для элемента меню
//     }

//     //добавлять классы только для меню в футере
//     if ($args->theme_location === 'footer_menu_terms') {
//         $classes[] = ['footer-menu__link text--uppercase'];  //такая запись добавляет класс в общий массив классов, формирующийся вордпрессом
//     }
//     if ($args->theme_location === 'footer_menu_post') {
//         $classes[] = ['footer-menu__link text--capitalize'];  //такая запись добавляет класс в общий массив классов, формирующийся вордпрессом
//     }

//     return $classes;
// }

// add_filter('nav_menu_css_class', 'nav_class_filter', 10, 4);

class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
      // Змінюємо клас для елементів першого рівня
      if ( $depth == 0 ) {
          $item->classes[] = 'navigation__link';
      }
      if ( $depth == 1 ) {
        $item->classes[] = 'tab-item';
    }

      // Решта коду з батьківського класу
      parent::start_el( $output, $item, $depth, $args, $id );
  }
}

function my_custom_nav_menu( $args ) {
  $args['walker'] = new My_Walker_Nav_Menu();
  return $args;
}
add_filter( 'wp_nav_menu_args', 'my_custom_nav_menu' );

function prefix_nav_description( $item_output, $item, $depth, $args ) {
  if ( !empty( $item->description ) ) {
      $item_output = str_replace( $args->link_after . '</a>', '<span class="menu-item-description">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output );
  }

  return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );


add_filter( 'nav_menu_submenu_css_class', 'rename_sub_menus', 10, 3 );
function rename_sub_menus( $classes, $args, $depth ){
    foreach ( $classes as $key => $class ) {
    if ( $class == 'sub-menu'  && $depth == 0) {
        $classes[ $key ] = 'sub-menu';
    } else if ( $class == 'sub-menu'  && $depth == 1) {
      $classes[ $key ] = 'second-level-sub-menu';
    } else if ( $class == 'sub-menu'  && $depth == 2) {
      $classes[ $key ] = 'third-level-sub-menu';
    }
}

return $classes;
}

/***
 * new pagination template for blog
 * @param $template
 * @param $class
 * @return string
 */
function my_navigation_template($template, $class)
{
    return '
            <nav class="%1$s blog__pagination" role="navigation">
                %3$s
            </nav>    
            ';
}

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2);

/**
 * Limit excerpt to a number of characters
 * added read more btn
 *
 * @param string $excerpt
 * @return string
 */
function custom_short_excerpt($excerpt)
{
    global $post;
    return substr($excerpt, 0, 166) . '...';
}

add_filter('the_excerpt', 'custom_short_excerpt');

/**
 * added thumbnails for blog
 */
add_theme_support('post-thumbnails', array('post'));

/**
 * Custom excerpt for recent posts
 */
function the_recent_post_excerpt($post)
{
    $excerpt = $post['post_excerpt'] ? $post['post_excerpt'] : $post['post_content'];
    return substr(wp_strip_all_tags($excerpt), 0, 200) . '... <a class="article-preview__more" href="' . get_permalink($post['ID']) . '">Read More>></a>';
}

/**
 * get template part with custom data
 * @param $template
 * @param array $data
 */
function get_template_part_params($template, $data = array())
{
    extract($data);
    require locate_template($template . '.php');
}


/**
 * Следующие две функции позволяют отделять заголовок от основного контента
 */

/**
 * get title
 * @param $text
 * @return string|string[]|null
 */
function getPageTitle($text)
{
    $pattern = '/<h1[^>]*>\s*(.*?)\s*<\/h1>/i';
    preg_match($pattern, $text, $matches);
    $h1 = preg_replace('/<h1[^>]*?>([\\s\\S]*?)<\/h1>/',
        '\\1', $matches[0]);
    return $h1;
}

/**
 * get content without page title
 * @param $text
 * @return string|string[]|null
 */
function removeTitleFromContent($text)
{
    if (is_page() && !is_front_page()) {
        $pattern = '/<h1[^>]*>\s*(.*?)\s*<\/h1>/i';
        $result = preg_replace($pattern, "", $text);
        return $result;
    } else {
        return $text;
    }
}

add_theme_support('post-thumbnails');

//add_filter('the_content', 'removeTitleFromContent');

add_filter('the_content', 'replace_shortcode');
function replace_shortcode($content)
{
    return preg_replace('[\[ad-(.*)]', '', $content);
}

//include('postViews.php');

//Просчет приблизительного время прочтения поста
function estimated_reading_time()
{
    $post = get_post();
    $postcnt = strip_tags($post->post_content);
    $words = count(preg_split('/\s+/', $postcnt));
    $minutes = floor($words / 120);
    $seconds = floor($words % 120 / (120 / 60));
    if (1 <= $minutes) {
        $estimated_time = $minutes . ' min read';   // . ($minutes == 1 ? '' : 's')
    } else {
        $estimated_time = $seconds . ' s read';     // . ($seconds == 1 ? '' : 's')
    }
    return $estimated_time;
}



add_shortcode('random-posts', 'rand_posts');

add_filter('widget_text', 'do_shortcode');


// Do not include the above opening tag.
// WPOrbit code for lazy loading youtube videos. Visit: https://wporbit.net

function iframelazy($content) {
        if(is_single()) {
                
        $content = str_replace('src="https://www.youtube.com/embed/','class="klazyiframe" data-src="https://www.youtube.com/embed/',$content);

	ob_start();
?>
	<script>
	var ytflag = 0;
		
	var myListener = function () {
    	document.removeEventListener('mousemove', myListener, false);
    	lazyloadmyframes();
	};

	document.addEventListener('mousemove', myListener, false);

	window.addEventListener('scroll', function() {
	if(ytflag == 0){
		lazyloadmyframes();
		ytflag = 1;
	}
	});
		
function lazyloadmyframes(){	
	var ytv = document.getElementsByClassName("klazyiframe");
	for (var i = 0; i < ytv.length; i++) {
		ytv[i].src = ytv[i].getAttribute('data-src');
	}
};

</script>
<?php

	$jqueryappend = ob_get_contents();
	ob_end_clean();

}

    return $content.$jqueryappend;
};

add_filter('the_content', 'iframelazy');


function add_webp_upload_mime( $mimes ) {
    $mimes['webp'] = 'image/webp';
    return $mimes;
}

add_filter( 'mime_types', 'add_webp_upload_mime' );

function webp_is_displayable($result, $path) {
    if ($result === false) {
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );
        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayabe_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }
  return $result;
}

add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);

function display_webp_in_media_library( $result, $path ) {
    if ( $result === false ) {
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );
        if ( empty( $info ) ) {
            $result = false;
        } elseif ( ! in_array( $info[2], $displayable_image_types ) ) {
            $result = false;
        } else {
            $result = true;
        }
    }
    return $result;
}

add_filter( 'file_is_displayable_image', 'display_webp_in_media_library', 10, 2 );


function disable_wp_auto_p( $content ) {
    if (is_page_template(['pages/page-works.php']) || is_category('works') || is_page_template(['single-works.php'])) {
      remove_filter( 'the_content', 'wpautop' );
      remove_filter( 'the_excerpt', 'wpautop' );
    }
    return $content;
  }
  add_filter( 'the_content', 'disable_wp_auto_p', 0 );


  function get_subcategory_name() {
    $categories = get_the_category();

    if ( ! empty( $categories ) ) {
        foreach ( $categories as $category ) {
            if ( $category->parent > 0 ) {
                // Post belongs to a subcategory
                return $category->name;
            }
        }
    }

    return ''; // No subcategory found
}


function remove_wp_version() {
    remove_action('wp_head', 'wp_generator');
}
add_action('init', 'remove_wp_version');


add_filter( 'wpseo_title', 'custom_wpseo_title' );

function custom_wpseo_title ($title) {
$site_name = get_bloginfo('name');
return get_the_title() . ' | ' . $site_name;
}


function stelio_quiz_iframe() {
    return '<iframe src="https://quiz.stelio.com.ua/" width="100%" height="650" style="border:none;border-radius:10px;" loading="lazy"></iframe>';
}
add_shortcode('stelio_quiz', 'stelio_quiz_iframe');

  
add_action('wp_ajax_load_more_posts', 'load_more_posts_callback');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts_callback');

function load_more_posts_callback() {
    
    check_ajax_referer('load_more_nonce', 'nonce');
    
    $page = isset($_POST['page']) ? intval($_POST['page']) : 2;
    $offset = isset($_POST['offset']) ? intval($_POST['offset']) : 8;
    $category = isset($_POST['category']) ? intval($_POST['category']) : '';
    $posts_per_page = isset($_POST['posts_per_page']) ? intval($_POST['posts_per_page']) : 8;
    
    error_log('Page: ' . $page);
    error_log('Offset: ' . $offset);
    error_log('Category: ' . $category);
    error_log('Posts per page: ' . $posts_per_page);
    
    $args = [
        'post_type'      => 'post',
        'posts_per_page' => $posts_per_page,
        'offset'         => $offset,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
    ];
    
    if (!empty($category)) {
        $args['cat'] = $category;
    }
    
    $query = new WP_Query($args);
    
    error_log('Found posts: ' . $query->found_posts);
    error_log('Query SQL: ' . $query->request);
    
    if ($query->have_posts()) :
        $count = 0;
        while ($query->have_posts()) : $query->the_post();
            $count++;
            ob_start();
            ?>
            <article class="blog__item item" data-id="<?= get_the_ID() ?>">
                <a href="<?php the_permalink(); ?>" class="item__img" style="background-image: url(<?= has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/images/features/blog.jpg' ?>)"></a>
                <div class="item--left"></div>
                <div class="item__date"><?php echo get_the_date('F d, Y'); ?></div>
                <h2 class="item__title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
            </article>
            <?php
            echo ob_get_clean();
        endwhile;
        error_log('Posts output: ' . $count);
        wp_reset_postdata();
    else :
        error_log('No more posts found');
        echo 'no_more_posts';
    endif;
    
    wp_die();
}
  
add_action('wp_enqueue_scripts', 'load_more_scripts');
function load_more_scripts() {
    if (is_category() || is_home() || is_archive()) {
        
        wp_localize_script('load-more-ajax', 'ajax_object', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('load_more_nonce'),
            'language' => get_bloginfo("language")
        ));
    }
}
wp_enqueue_script('load-more-ajax', get_template_directory_uri() . '/js/plugins/load-more.js', array('jquery'), '1.0', true);