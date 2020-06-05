<?php
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');


/*Подключение стилей*/
function add_styles_method()
{
	//if(is_home()) {
		$template_dir = get_template_directory_uri();
		/*Бутстрап*/
		wp_enqueue_style( 'bootstrap-css', $template_dir . '/libs/bootstrap/css/bootstrap.min.css', array(), '4.4.1', 'all' );
		/*Slick слайдер*/
		wp_enqueue_style( 'slick-css', $template_dir . '/libs/slick/slick.css', array(), '1.8.1', 'all' );
		/*Slick слайдер тема*/
		wp_enqueue_style( 'slick-theme-css', $template_dir . '/libs/slick/slick-theme.css', array(), '1.8.1', 'all' );
		/*Fancybox*/
		wp_enqueue_style( 'fancybox-css', $template_dir . '/libs/fancybox-master/dist/jquery.fancybox.min.css', array(), '3.5.7', 'all' );
		/*Unite галлерея*/
		wp_enqueue_style( 'unite-gallery-css', $template_dir . '/libs/unitegallery-master/dist/css/unite-gallery.css', array(), '1.7.28', 'all' );
        /*Bootstrap Star-Rating style*/
        //wp_enqueue_style('star-rating-style', $template_dir . '/libs/bootstrap-star-rating/css/star-rating.css', array(), '4.0.6', 'all' );
        /*Bootstrap Star-Rating Theme*/
        //wp_enqueue_style('star-rating-theme-style', $template_dir . '/libs/bootstrap-star-rating/themes/krajee-fas/theme.css', array(), '1', 'all' );
		/*Главный стиль*/
		wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ), 'all' );
		wp_enqueue_style( 'main-style', $template_dir . '/css/app.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
		wp_enqueue_style( 'main-custom', $template_dir . '/css/main-custom.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
	//}
}
add_action('wp_enqueue_scripts', 'add_styles_method');

/*Подключение скриптов*/
function add_scripts_method()
{
    $template_dir = get_template_directory_uri();
    wp_enqueue_script('jquery-js', $template_dir . '/libs/jQuery/jquery.min.js', array(), '3.4.1', true);
    wp_enqueue_script('bootstrap-js', $template_dir . '/libs/bootstrap/js/bootstrap.min.js', array(), '4.4.1', true);
    /*Выходит ли элемент за границы экрана*/
    wp_enqueue_script('offscreen-js', $template_dir . '/libs/jQuery/jquery.offscreen.js', array(), wp_get_theme()->get( 'Version' ), true);
    /*Fontawesome*/
    //wp_enqueue_script('fontawesome-js', $template_dir . '/libs/fontawesome-free-web/js/all.min.js', array(), '5.10.1', true);
    /*Slick слайдер js*/
    wp_enqueue_script('slick-js', $template_dir . '/libs/slick/slick.min.js', array(), '1.8.1', true);
    /*Fancybox*/
    wp_enqueue_script('fancybox-js', $template_dir . '/libs/fancybox-master/dist/jquery.fancybox.min.js', array(), '3.5.7', true);
    /*Unite галлерея*/
    wp_enqueue_script('unitegallery-js', $template_dir . '/libs/unitegallery-master/dist/js/unitegallery.min.js', array(), '1.7.45', true);
    /*Unite галлерея тема*/
    wp_enqueue_script('ug-theme-compact-js', $template_dir . '/libs/unitegallery-master/dist/themes/compact/ug-theme-compact.js', array(), '1.7.45', true);
    /*jquery maskedinput*/
    wp_enqueue_script('maskedinput-js', $template_dir . '/libs/maskedinput/jquery.maskedinput.min.js', array(), '1.4.1', true);
    /*Bootstrap Star-Rating js*/
    //wp_enqueue_script('star-rating-js', $template_dir . '/libs/bootstrap-star-rating/js/star-rating.js', array(), '4.0.6', true);
    /*Bootstrap Star-Rating Theme js*/
    //p_enqueue_script('star-rating-theme-js', $template_dir . '/libs/bootstrap-star-rating/themes/krajee-fas/theme.js', array(), '1', true);
    /*Главный скрипт*/
    wp_enqueue_script('main-js', $template_dir . '/js/app.js', array(), wp_get_theme()->get( 'Version' ), true);
    wp_enqueue_script('custom-js', $template_dir . '/js/custom.js', array(), wp_get_theme()->get( 'Version' ), true);


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'add_scripts_method');

/*Поиск id страницы по названию*/
function get_page_id_by_title($title) {
    $page = get_page_by_title($title);
    return $page->ID;
}

function theme_setup() {
    /*Регистрация менюх*/
    register_nav_menus( array(
        'top_bar' => 'top-bar',
        'bottom_menu_1' => 'bottom-menu_1',
        'bottom_menu_2' => 'bottom-menu_2'
    ));
    /*Thumbnail for Post*/
    add_theme_support('post-thumbnails');

    /*Logo*/
    add_theme_support('custom-logo', array(
        'width' => 98,
        'height' => 52,
        'flex-width' => false,
    ));
}
add_action( 'after_setup_theme', 'theme_setup' );

/*Порядок вывода полей формы комментов*/
function kama_reorder_comment_fields( $fields ){
    // print_r( $fields ); // посмотрим какие поля есть
    $new_fields = array(); // сюда соберем поля в новом порядке
    $myorder = array('author','email','url','comment'); // нужный порядок
    foreach( $myorder as $key ){
        $new_fields[ $key ] = $fields[ $key ];
        unset( $fields[ $key ] );
    }
    // если остались еще какие-то поля добавим их в конец
    if( $fields )
        foreach( $fields as $key => $val )
            $new_fields[ $key ] = $val;

    return $new_fields;
}
add_filter('comment_form_fields', 'kama_reorder_comment_fields' );

/*Удалить чекбокс сохранения Email и Имени при написании коммента*/
remove_action( 'set_comment_cookies', 'wp_set_comment_cookies' );

function mytheme_enqueue_comment_reply() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
// Hook into wp_enqueue_scripts
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_comment_reply' );

/*Отключаем ненужное*/
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
