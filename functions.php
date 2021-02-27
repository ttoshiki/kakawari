<?php
/**
 * media_wp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package media_wp
 */

if ( ! function_exists( 'media_wp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function media_wp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on media_wp, use a find and replace
		 * to change 'media_wp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'media_wp', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'media_wp' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'media_wp_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'media_wp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function media_wp_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'media_wp_content_width', 640 );
}
add_action( 'after_setup_theme', 'media_wp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function media_wp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'media_wp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'media_wp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'media_wp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function media_wp_scripts() {
	wp_enqueue_style( 'media_wp-style', get_stylesheet_uri() );

	wp_enqueue_script( 'media_wp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'media_wp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'media_wp_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//
//
//// カスタムタクソノミーの追加
//register_taxonomy(
//    'pickup', // 分類名
//    'post',  // 投稿タイプ名
//    array(
//        'label' => 'PICK UP', // フロントで表示する分類名
//        'hierarchical' => true,   // 階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
//        'query_var' => true,
//        'rewrite' => true
//    )
//);
//
//
// 管理画面カスマイズ local 11
function my_admin_style() {
    echo '<style>


    #taxonomy-category #category-7{
    font-weight:bold;
    }

  </style>'.PHP_EOL;
}
add_action('admin_print_styles', 'my_admin_style');



// アーカイブのタイトル前の項目削除

add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

        $title = single_cat_title( '', false );

    } elseif ( is_tag() ) {

        $title = single_tag_title( '', false );

    }

    return $title;

});

function custom_archive_title( $title ){
    if ( is_post_type_archive() ) {
        if ( is_year() ) {
            $title = post_type_archive_title( '', false ) . ' ' . sprintf( __( 'Year: %s' ), get_the_date( _x( 'Y', 'yearly archives date format' ) ) );
        } elseif ( is_month() ) {
            $title = post_type_archive_title( '', false ) . ' ' . sprintf( __( 'Month: %s' ), get_the_date( _x( 'F Y', 'monthly archives date format' ) ) );
        } elseif ( is_day() ) {
            $title = post_type_archive_title( '', false ) . ' ' . sprintf( __( 'Day: %s' ), get_the_date( _x( 'F j, Y', 'daily archives date format' ) ) );
        } else {
            $title = post_type_archive_title( '', false );
        }
    } else if ( is_tax() ) {
        $title = single_term_title( '', false );
    } elseif ( is_year() ) {
        $title = '' . sprintf( __( '%s' ), get_the_date( _x( 'Y', 'yearly archives date format' ) ) );
    } elseif ( is_month() ) {
        $title = '' . sprintf( __( '%s' ), get_the_date( _x( 'F Y', 'monthly archives date format' ) ) );
    } elseif ( is_day() ) {
        $title = '' . sprintf( __( '%s' ), get_the_date( _x( 'F j, Y', 'daily archives date format' ) ) );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'custom_archive_title', 10 );




//popular post からquery_posts生成
function get_popular_args($range= "weekly", $limit = 8){
    //urlを作成
    $shortcode = '[wpp';
    $atts = '
          post_html="{url},"
          wpp_start=""
          wpp_end=""
          order_by="views"
          post_type="post"
          stats_comments=0
          stats_views=1
            ';
    $atts_2 = ' range='. $range;
    $atts_3 = ' limit='. $limit;
    $shortcode .= ' ' . $atts . $atts_2 . $atts_3 . ']';
    $result = explode(",", strip_tags(do_shortcode( $shortcode )));
    $ranked_post_ids = array();

    //urlから投稿IDを作成
    foreach($result as $_url){
        if(!empty($_url) && trim($_url) != ''){
            $id_string = url_to_postid($_url);
            array_push ($ranked_post_ids, intval($id_string));
        }
    }

    //idをreturn
    $args = array(
        'posts_per_page' => 20,
        'post__in' => $ranked_post_ids,
        'orderby' => 'post__in'
    );

    return $args;
}



//アイキャッチ画像
add_image_size('col-4-thumbnail', 530, 340, true);



//本文中のURLをはてなブログカードタグに変更する
function url_to_hatena_blog_card($the_content) {
  if ( is_singular() ) {//投稿ページもしくは固定ページのとき
    //1行にURLのみが期待されている行（URL）を全て$mに取得
    $res = preg_match_all('/^(<p>)?(<a.+?>)?https?:\/\/[-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+(<\/a>)?(<\/p>)?(<br ? \/>)?$/im', $the_content,$m);
    //マッチしたURL一つ一つをループしてカードを作成
    foreach ($m[0] as $match) {
      $url = strip_tags($match);//URL

//      //サイトの内部リンクは処理しない場合（Simplicity対策）
//      preg_match( '/https?:\/\/(.+?)\//i', admin_url(), $r );//自サイトのドメイン取得
//      if ( strpos( $url, $r[1] ) ) {
//        continue ;
//      }

      //取得した情報からブログカードのHTMLタグを作成
      $tag = '<iframe class="hatenablogcard" src="https://hatenablog-parts.com/embed?url='.$url.'" frameborder="0" scrolling="no"></iframe>';
      //本文中のURLをブログカードタグで置換
      $the_content = preg_replace('{'.preg_quote($match).'}', $tag , $the_content, 1);
    }
  }
  return $the_content;//置換後のコンテンツを返す
}
add_filter('the_content','url_to_hatena_blog_card');//本文表示をフック

function override_widget_categories() {
    class WP_Widget_Categories_Taxonomy extends WP_Widget_Categories {
        private $taxonomy = 'category';

        public function widget( $args, $instance ) {
            if ( !empty( $instance['taxonomy'] ) ) {
                $this->taxonomy = $instance['taxonomy'];
            }

            add_filter( 'widget_categories_dropdown_args', array( $this, 'add_taxonomy_dropdown_args' ), 10 );
            add_filter( 'widget_categories_args', array( $this, 'add_taxonomy_dropdown_args' ), 10 );
            parent::widget( $args, $instance );
        }

        public function update( $new_instance, $old_instance ) {
            $instance = parent::update( $new_instance, $old_instance );
            $taxonomies = $this->get_taxonomies();
            $instance['taxonomy'] = 'category';
            if ( in_array( $new_instance['taxonomy'], $taxonomies ) ) {
                $instance['taxonomy'] = $new_instance['taxonomy'];
            }
            return $instance;
        }

        public function form( $instance ) {
            parent::form( $instance );
            $taxonomy = 'category';
            if ( !empty( $instance['taxonomy'] ) ) {
                $taxonomy = $instance['taxonomy'];
            }
            $taxonomies = $this->get_taxonomies();
            ?>
            <p>
                <label for="<?php echo $this->get_field_id( 'taxonomy' ); ?>"><?php _e( 'Taxonomy:' ); ?></label><br />
                <select id="<?php echo $this->get_field_id( 'taxonomy' ); ?>" name="<?php echo $this->get_field_name( 'taxonomy' ); ?>">
                    <?php foreach ( $taxonomies as $value ) : ?>
                    <option value="<?php echo esc_attr( $value ); ?>"<?php selected( $taxonomy, $value ); ?>><?php echo esc_attr( $value ); ?></option>
                    <?php endforeach; ?>
                </select>
            </p>
            <?php
        }

        public function add_taxonomy_dropdown_args( $cat_args ) {
            $cat_args['taxonomy'] = $this->taxonomy;
            return $cat_args;
        }

        private function get_taxonomies() {
            $taxonomies = get_taxonomies( array(
                'public' => true,
            ) );
            return $taxonomies;
        }
    }
    unregister_widget( 'WP_Widget_Categories' );
    register_widget( 'WP_Widget_Categories_Taxonomy' );
}
add_action( 'widgets_init', 'override_widget_categories' );

add_filter( 'tiny_mce_before_init', function ($settings) {
    //フォントサイズの指定
    $settings['fontsize_formats'] =
        '10px 12px 14px 15px 16px 18px 20px 24px 28px 32px 36px 42px 48px';
    //$settings['fontsize_formats'] = '0.8em 1.6em 2em 3em';
    //$settings['fontsize_formats'] = '80% 160% 200% 300%';

    return $settings;
} );
//Wordpressビジュアルエディタに文字サイズの変更機能を追加
add_filter('mce_buttons_3', function ($buttons){
    array_push($buttons, 'fontsizeselect');
    return $buttons;
});

remove_filter('pre_user_description', 'wp_filter_kses');

add_editor_style("editor-style.css");

remove_filter('pre_user_description', 'wp_filter_kses');






//iphoneまたはipodで閲覧されているかどうかを判定
function is_iphone()
{
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if(
        strpos($ua, 'iPhone')!== false||
        strpos($ua, 'iPod')!== false
    )
    {
        return true;
    }
    else
    {
        return false;
    }
}
//androidスマートフォンで閲覧されているかどうかを判定する関数
//「mobile」文字列の有無を見ることで、タブレット端末をfalse判定
function is_android()
{
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if(
        strpos($ua, 'Android')!== false&&strpos($ua, 'Mobile')!== false
    )
    {
        return true;
    }
    else
    {
        return false;
    }
}
//Mozillaが開発するスマートフォン用OS「Firefox OS」の判定関数
function is_firefox_os()
{
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if(
        strpos($ua, 'Android')=== false&&strpos($ua, 'Firefox')!== false&&strpos($ua, 'Mobile')!== false
    )
    {
        return true;
    }
    else
    {
        return false;
    }
}
//Windows Phoneで閲覧されているかどうかを判定する関数
//「mobile」文字列の有無を確認することで、タブレット端末をfalse判定
function is_windows_phone()
{
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if(
        strpos($ua, 'Windows')!== false&&strpos($ua, 'Phone')!== false
    )
    {
        return true;
    }
    else
    {
        return false;
    }
}
//BlackBerryで閲覧されているかどうかを判定する関数
function is_blackberry()
{
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if(
        strpos($ua, 'BlackBerry')!== false
    )
    {
        return true;
    }
    else
    {
        return false;
    }
}
//ガラケーで閲覧されているかどうか判定する関数
function is_ktai()
{
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if(
        strpos($ua, 'DoCoMo')!== false||
        strpos($ua, 'KDDI')!== false||
        strpos($ua, 'UP.Browser')!== false||
        strpos($ua, 'MOT-')!== false||
        strpos($ua, 'J-PHONE')!== false||
        strpos($ua, 'WILLCOM')!== false||
        strpos($ua, 'Vodafone')!== false||
        strpos($ua, 'SoftBank')!== false
    )
    {
        return true;
    }
    else
    {
        return false;
    }
}
/*****
is_ktai()、is_iphone()、is_android()、
is_firefox_os()、is_windows_phone()、
is_blackberry()のどれかがTRUEを返すと
is_mymobile()はTRUEを返します。
つまりガラケー･スマホでの閲覧時にはTRUE、
PC・タブレットでの閲覧時にはFALSEを返します。
******/
function is_mymobile()
{
    if(
        is_ktai()||
        is_iphone()||
        is_android()||
        is_firefox_os()||
        is_windows_phone()||
        is_blackberry()
    )
    {
        return true;
    }
    else
    {
        return false;
    }
}

add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );

