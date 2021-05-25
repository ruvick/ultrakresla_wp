<?php

define("COMPANY_NAME", "АВТОМОБИЛЬНЫЕ СИДЕНЬЯ");
define("MAIL_RESEND", "noreply@ultrakresla.ru");

//----Подключене carbon fields
//----Инструкции по подключению полей см. в комментариях themes-fields.php
include "carbon-fields/carbon-fields-plugin.php";

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' ); 
function crb_attach_theme_options() {
	require_once __DIR__ . "/themes-fields.php";
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( 'carbon-fields/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
} 

//-----Блок описания вывода меню
// 1. Осмысленные названия для алиаса и для описания на русском.
// если это меню в подвали пишем - Меню в подвале 
// если в шапке то пишем - Меню в шапке 
// если 2 меню в шапке пишем  - Меню в шапке (верхняя часть)

add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'menu_hot' => 'Меню актуальных предложений (рядом с каталогом)',
		'menu_cat' => 'Меню каталога', 
		'menu_main' => 'Меню основное',
		'menu_corp' => 'Общекорпоративное меню (верхняя шапка)', 
	] );
} ); 

add_filter( 'nav_menu_css_class', 'change_menu_item_css_classes', 10, 4 );

function change_menu_item_css_classes( $classes, $item, $args, $depth ) {
	if( 30 === $item->ID  && 'menu_corp' === $args->theme_location ){
		$classes[] = 'link__drop-down';
	}

	if( 34 === $item->ID  && 'menu_main' === $args->theme_location ){
		$classes[] = 'menu__catalogy';
	}

	return $classes;
}

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 185, 185 ); 

add_post_type_support( 'page', 'excerpt' );

// Подключение стилей и nonce для Ajax в админку 
add_action('admin_head', 'my_assets_admin');
function my_assets_admin(){
	wp_enqueue_style("style-adm",get_template_directory_uri()."/style-admin.css");
	
	wp_localize_script( 'jquery', 'allAjax', array(
			'nonce'   => wp_create_nonce( 'NEHERTUTLAZIT' )
		) );
}

define("allversion", "1.0.10");

// Подключение стилей и nonce для Ajax и скриптов во фронтенд 
add_action( 'wp_enqueue_scripts', 'my_assets' );
	function my_assets() {

		// Подключение стилей 

		// $style_version = "1.0.1";
		// $scrypt_version = "1.0.1"; 
		
		wp_enqueue_style("style-modal", get_template_directory_uri()."/css/jquery.arcticmodal-0.3.css", array(), allversion, 'all'); //Модальные окна (стили)
		wp_enqueue_style("style-lightbox", get_template_directory_uri()."/css/lightbox.min.css", array(), allversion, 'all'); //Лайтбокс (стили)
		wp_enqueue_style("style-slik", get_template_directory_uri()."/css/slick.css", array(), allversion, 'all'); //Слайдер (стили)
		wp_enqueue_style("style-fancybox", get_template_directory_uri()."/css/fancybox.css", array(), allversion, 'all'); //fancybox (стили)

		wp_enqueue_style("main-style", get_stylesheet_uri(), array(), allversion, 'all' ); // Подключение основных стилей в самом конце

		// Подключение скриптов
		
		wp_enqueue_script( 'jquery');

		wp_enqueue_script( 'amodal', get_template_directory_uri().'/js/jquery.arcticmodal-0.3.min.js', array(), allversion, true); //Модальные окна
		wp_enqueue_script( 'mask', get_template_directory_uri().'/js/jquery.inputmask.bundle.js', array(), allversion, true); //маска для инпутов
		wp_enqueue_script( 'lightbox', get_template_directory_uri().'/js/lightbox.min.js', array(), allversion, true); //Лайтбокс
		wp_enqueue_script( 'slick', get_template_directory_uri().'/js/slick.min.js', array(), allversion, true); //Слайдер
		wp_enqueue_script( 'fancybox', get_template_directory_uri().'/js/jquery.fancybox.min.js', array(), allversion, true); //fancybox
		wp_enqueue_script( 'share', get_template_directory_uri().'/share42/share42.js', array(), allversion, true); 

		wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array(), allversion, true); // Подключение основного скрипта в самом конце
		
		
		wp_localize_script( 'main', 'allAjax', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'NEHERTUTLAZIT' )
		) );
	}

	// Заготовка для вызова ajax
	
	// add_action( 'wp_ajax_aj_fnc', 'aj_fnc' );
	// add_action( 'wp_ajax_nopriv_aj_fnc', 'aj_fnc' );

	// function aj_fnc() {
	// 	if ( empty( $_REQUEST['nonce'] ) ) {
	// 		wp_die( '0' );
	// 	}
		
	// 	if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {


			
	// 	} else {
	// 		wp_die( 'НО-НО-НО!', '', 403 );
	// 	}
	// }
	


function wp_corenavi() {
  global $wp_query;
  $total = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
  $a['total'] = $total;
  $a['mid_size'] = 3; // сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; // сколько ссылок показывать в начале и в конце
  $a['prev_text'] = ''; // текст ссылки "Предыдущая страница"
  $a['next_text'] = ''; // текст ссылки "Следующая страница"

  if ( $total > 1 ) echo '<nav class="pagination">';
  echo paginate_links( $a );
  if ( $total > 1 ) echo '</nav>';
}
	
	
	/* Отправка почты
		
			$headers = array(
				'From: Сайт '.COMPANY_NAME.' <MAIL_RESEND>',
				'content-type: text/html',
			);
		
			add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
			
			$adr_to_send = <Присваиваем поле карбона c адресами для отправки>;
			$mail_content = "<Тело письма>";
			$mail_them = "<Тема письма>";

			if (wp_mail($adr_to_send, $mail_them, $mail_content, $headers)) {
				wp_die(json_encode(array("send" => true )));
			}
			else {
				wp_die( 'Ошибка отправки!', '', 403 );
			}
	*/
	
	
	/*	Заготовка шорткода
		function true_url_external( $atts ) {
			$params = shortcode_atts( array( // в массиве укажите значения параметров по умолчанию
				'anchor' => 'Миша Рудрастых', // параметр 1
				'url' => 'https://misha.blog', // параметр 2
			), $atts );
			return "<a href='{$params['url']}' target='_blank'>{$params['anchor']}</a>";
		}
		add_shortcode( 'trueurl', 'true_url_external' );
	*/
	

// Регистрация кастомного поста

add_action( 'init', 'create_taxonomies' );

function create_taxonomies(){

	register_taxonomy('ultracat', array('ultra'), array(
		'hierarchical'  => true,
		'labels'        => array(
			'name'              => "Категория товара",
			'singular_name'     => "Категория товара",
			'search_items'      => "Найти категорию товара",
			'all_items'         => __( 'Все категории' ),
			'parent_item'       => __( 'Дочерние категории' ),
			'parent_item_colon' => __( 'Дочерние категории:' ),
			'edit_item'         => __( 'Редактировать категорию' ),
			'update_item'       => __( 'Обновить категорию' ),
			'add_new_item'      => __( 'Добавить новую категорию товара' ),
			'new_item_name'     => __( 'Имя новой категории товара' ),
			'menu_name'         => __( 'Категории товара' ),
		),
		'description' => "Категория товаров для магазина",
		'public' => true,
		'show_ui'       => true,
		'query_var'     => true,
		'show_in_rest'  => true,
		'show_admin_column'     => true,
	));

	register_taxonomy('ultrastyle', array('ultra'), array(
		'hierarchical'  => false,
		'labels'        => array(
			'name'              => "Стиль дизайна",
			'singular_name'     => "Стиль дизайна",
			'search_items'      => "Найти стиль",
			'all_items'         => __( 'Все стили' ),
			'parent_item'       => __( 'Дочерние стили' ),
			'parent_item_colon' => __( 'Дочерние стили:' ),
			'edit_item'         => __( 'Редактировать стиль' ),
			'update_item'       => __( 'Обновить стиль' ),
			'add_new_item'      => __( 'Добавить новый стиль' ),
			'new_item_name'     => __( 'Имя новго стиля товара' ),
			'menu_name'         => __( 'Стили товара' ),
		),
		'description' => "Стиль дизайна товаров",
		'public' => true,
		'show_ui'       => true,
		'query_var'     => true,
		'show_in_rest'  => true,
		'show_admin_column'     => true,
	));
}


add_action('init', 'ultra_custom_init');

function ultra_custom_init(){
	register_post_type('ultra', array(
		'labels'             => array(
			'name'               => 'Продукты', // Основное название типа записи
			'singular_name'      => 'Продукты', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый товар',
			'edit_item'          => 'Редактировать товар',
			'new_item'           => 'Новый товар',
			'view_item'          => 'Посмотреть товар',
			'search_items'       => 'Найти товар',
			'not_found'          =>  'Товаров не найдено',
			'not_found_in_trash' => 'В корзине товаров не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Товары'

		  ),
		'taxonomies' => array('ultracat'), 
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'show_admin_column'        => true,
		'show_in_quick_edit'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array('title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats')
	) );
}

// Колонки в таблицу админки

add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
 
function posts_columns($defaults){
    $defaults['riv_post_sku'] = __('Артикул');
	$defaults['riv_post_thumbs'] = __('Миниатюра');
	$defaults['riv_post_price'] = __('Цена');
	return $defaults;
}
 
function posts_custom_columns($column_name, $id){
	
	
	if($column_name === 'riv_post_sku'){
		$SKU_t = get_post_meta(get_the_ID(), "_offer_sku", true);
		echo empty($SKU_t)?"-":$SKU_t;
	}
	
	if($column_name === 'riv_post_thumbs'){	
		$img1 = get_the_post_thumbnail_url( get_the_ID(), "thumbnail");
		
		if (empty($img1))
			$img1 = get_bloginfo("template_url")."/img/no-photo.jpg";
		
		echo '<img width = "60" src = "'.$img1.'" />';
			
	
	}
	
	if($column_name === 'riv_post_price'){
		$PRICE = get_post_meta(get_the_ID(), "_offer_price", true);
		echo empty($PRICE)?"0 руб.":$PRICE." руб.";
	}
	
	
}

add_action( 'wp_ajax_sendphone', 'sendphone' );
add_action( 'wp_ajax_nopriv_sendphone', 'sendphone' );

  function sendphone() {
    if ( empty( $_REQUEST['nonce'] ) ) {
      wp_die( '0' );
    }
    
    if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
      
      $headers = array(
        'From: Сайт '.COMPANY_NAME.' <'.MAIL_RESEND.'>', 
        'content-type: text/html',
      );
    
      add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
       if (wp_mail(carbon_get_theme_option( 'as_email_send' ), 'Заказ звонка', '<strong>Имя:</strong> '.$_REQUEST["name"]. ' <br/> <strong>Телефон:</strong> '.$_REQUEST["tel"], $headers))
        wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
      else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>"); 
      
    } else {
      wp_die( 'НО-НО-НО!', '', 403 );
    }
  }


add_action( 'wp_ajax_sendcashB', 'sendcashB' );
add_action( 'wp_ajax_nopriv_sendcashB', 'sendcashB' );

  function sendcashB() {
    if ( empty( $_REQUEST['nonce'] ) ) {
      wp_die( '0' );
    }
    
    if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
      
      $headers = array(
        'From: Сайт '.COMPANY_NAME.' <'.MAIL_RESEND.'>', 
        'content-type: text/html',
      );
    
      add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
       if (wp_mail(carbon_get_theme_option( 'as_email_send' ), 'Получить Кешбек', '<strong>Имя:</strong> '.$_REQUEST["name"]. ' <br/> <strong>Телефон:</strong> '.$_REQUEST["tel"], $headers))
        wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
      else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>"); 
      
    } else {
      wp_die( 'НО-НО-НО!', '', 403 );
    }
  }



add_action( 'wp_ajax_sendcontacts', 'sendcontacts' );
add_action( 'wp_ajax_nopriv_sendcontacts', 'sendcontacts' );

  function sendcontacts() {
    if ( empty( $_REQUEST['nonce'] ) ) {
      wp_die( '0' );
    }
    
    if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
      
      $headers = array(
        'From: Сайт '.COMPANY_NAME.' <'.MAIL_RESEND.'>', 
        'content-type: text/html',
      );
    
      add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
       if (wp_mail(carbon_get_theme_option( 'as_email_send' ), 'Заявка со стр.Контакты', '<strong>Имя:</strong> '.$_REQUEST["name"]. ' <br/> <strong>Телефон:</strong> '.$_REQUEST["tel"]. ' <br/> <strong>Сообщение:</strong> '.$_REQUEST["msg"], $headers))
        wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
      else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>"); 
      
    } else {
      wp_die( 'НО-НО-НО!', '', 403 );
    }
  }


// add_filter('the_content', 'set_lightbox_image');
// function set_lightbox_image( $text ){
// 	if( false === strpos( $text, '<img') || false === strpos( $text, '<a') )
// 		return;

// 	$text = preg_replace('~<a([^>]+>\s*<img)~', '<a data-lightbox="image"$1', $text );

// 	return $text;
// }


/**
 * Возможность загружать изображения для элементов указанных таксономий: категории, метки.
 *
 * Пример получения ID и URL картинки термина:
 * $image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );
 * $image_url = wp_get_attachment_image_url( $image_id, 'thumbnail' );
 *
 * @author: Kama (http://wp-kama.ru)
 *
 * @ver: 2.8
 */
if( is_admin() && ! class_exists('Term_Meta_Image') ) {
	// init
	//add_action('current_screen', 'Term_Meta_Image_init');
	add_action('admin_init', 'Term_Meta_Image_init');
	function Term_Meta_Image_init() {
			$GLOBALS['Term_Meta_Image'] = new Term_Meta_Image();
	}

	class Term_Meta_Image {

			// для каких таксономий включить код. По умолчанию для всех публичных
			static $taxes = Array(); // пример: array('category', 'post_tag');

			// название мета ключа
			static $meta_key = '_thumbnail_id';

			// URL пустой картинки
			static $add_img_url = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkAQMAAABKLAcXAAAABlBMVEUAAAC7u7s37rVJAAAAAXRSTlMAQObYZgAAACJJREFUOMtjGAV0BvL/G0YMr/4/CDwY0rzBFJ704o0CWgMAvyaRh+c6m54AAAAASUVORK5CYII=';

			public function __construct() {
					if ( isset($GLOBALS['Term_Meta_Image']) ) 
							return $GLOBALS['Term_Meta_Image']; // once

					$taxes = self::$taxes ? self::$taxes : get_taxonomies( Array( 'public'=>true ), 'names' );

					foreach ( $taxes as $taxname ) {
							add_action("{$taxname}_add_form_fields",   Array( & $this, 'add_term_image' ),     10, 2 );
							add_action("{$taxname}_edit_form_fields",  Array( & $this, 'update_term_image' ),  10, 2 );
							add_action("created_{$taxname}",           Array( & $this, 'save_term_image' ),    10, 2 );
							add_action("edited_{$taxname}",            Array( & $this, 'updated_term_image' ), 10, 2 );

							add_filter("manage_edit-{$taxname}_columns",  Array( & $this, 'add_image_column' ) );
							add_filter("manage_{$taxname}_custom_column", Array( & $this, 'fill_image_column' ), 10, 3 );
					}
			}

			## поля при создании термина
			public function add_term_image( $taxonomy ) {
					wp_enqueue_media(); // подключим стили медиа, если их нет

					add_action('admin_print_footer_scripts', array( & $this, 'add_script' ), 99 );
					$this->css(); ?>
					<div class="form-field term-group">
							<label><?php _e('Image', 'default'); ?></label>
							<div class="term__image__wrapper">
									<a class="termeta_img_button" href="#">
											<img src="<?php echo self::$add_img_url ?>" alt="">
									</a>
									<input type="button" class="button button-secondary termeta_img_remove" value="<?php _e( 'Remove', 'default' ); ?>" />
							</div>

							<input type="hidden" id="term_imgid" name="term_imgid" value="">
					</div>
			<?php
			}

			## поля при редактировании термина
			public function update_term_image( $term, $taxonomy ) {
					wp_enqueue_media(); // подключим стили медиа, если их нет

					add_action('admin_print_footer_scripts', array( & $this, 'add_script' ), 99 );

					$image_id = get_term_meta( $term->term_id, self::$meta_key, true );
					$image_url = $image_id ? wp_get_attachment_image_url( $image_id, 'thumbnail' ) : self::$add_img_url;
					$this->css();
					?>
					<tr class="form-field term-group-wrap">
							<th scope="row"><?php 
									_e( 'Image', 'default' ); 
							?></th>
							<td>
									<div class="term__image__wrapper">
											<a class="termeta_img_button" href="#">
													<?php echo '<img src="'. $image_url .'" alt="">'; ?>
											</a>
											<input type="button" class="button button-secondary termeta_img_remove" value="<?php _e( 'Remove', 'default' ); ?>" />
									</div>
									<input type="hidden" id="term_imgid" name="term_imgid" value="<?php echo $image_id; ?>">
							</td>
					</tr>
				<?php
			}

			public function css() {
					?>
					<style>
							.termeta_img_button{ display:inline-block; margin-right:1em; }
							.termeta_img_button img{ display:block; float:left; margin:0; padding:0; min-width:100px; max-width:150px; height:auto; background:rgba(0,0,0,.07); }
							.termeta_img_button:hover img{ opacity:.8; }
							.termeta_img_button:after{ content:''; display:table; clear:both; }
					</style>
					<?php
			}

			## Add script
			public function add_script() {
					// выходим если не на нужной странице таксономии
					//$cs = get_current_screen();
					//if( ! in_array($cs->base, array('edit-tags','term')) || ! in_array($cs->taxonomy, (array) $this->for_taxes) )
					//  return;

					$title = __('Featured Image', 'default');
					$button_txt = __('Set featured image', 'default');
					?>
					<script>
							jQuery(document).ready(function($) {
									var frame,
											$imgwrap = $('.term__image__wrapper'),
											$imgid   = $('#term_imgid');

									// добавление
									$('.termeta_img_button').click(function(ev) {
											ev.preventDefault();

											if ( frame ) { 
													frame.open(); 
													return; 
											}

											// задаем media frame
											frame = wp.media.frames.questImgAdd = wp.media({
													states: [
															new wp.media.controller.Library({
																	title:    '<?php echo $title ?>',
																	library:   wp.media.query({ type: 'image' }),
																	multiple: false,
																	//date:   false
															})
													],
											button: {
													text: '<?php echo $button_txt ?>', // Set the text of the button.
											}
									});

									// выбор
									frame.on('select', function() {
											var selected = frame.state().get('selection').first().toJSON();
											if ( selected ) {
													$imgid.val( selected.id );
													$imgwrap.find('img').attr('src', selected.sizes.thumbnail.url );
											}
									});

									// открываем
									frame.on('open', function() {
											if ( $imgid.val() ) 
													frame.state().get('selection').add( wp.media.attachment( $imgid.val() ) );
									});

									frame.open();
							});

							// удаление
							$('.termeta_img_remove').click(function() {
									$imgid.val('');
									$imgwrap.find('img').attr('src','<?php echo self::$add_img_url ?>');
							});
						});
				</script>

			<?php
			}

			## Добавляет колонку картинки в таблицу терминов
			public function add_image_column($columns) {
					// подправим ширину колонки через css
					add_action('admin_notices', function() {
							echo '<style>.column-image{ width:50px; text-align:center; }</style>';
					});

					$num = 1; // после какой по счету колонки вставлять

					$new_columns = Array( 'image' => '' ); // колонка без названия...

					return array_slice( $columns, 0, $num ) + $new_columns + array_slice( $columns, $num );
			}

			public function fill_image_column( $string, $column_name, $term_id ) {
					// если есть картинка
					if ( $image_id = get_term_meta( $term_id, self::$meta_key, 1 ) )
							$string = '<img src="' . wp_get_attachment_image_url( $image_id, 'thumbnail' ) .'" width="50" height="50" alt="" style="border-radius:4px;" />';

					return $string;
			}

			## Save the form field
			public function save_term_image( $term_id, $tt_id ) {
					if ( isset($_POST['term_imgid']) && $image = (int) $_POST['term_imgid'] )
							add_term_meta( $term_id, self::$meta_key, $image, true );
			}

			## Update the form field value
			public function updated_term_image($term_id, $tt_id) {
					if ( !isset($_POST['term_imgid']) )
							return;

					if ( $image = (int) $_POST['term_imgid'] )
							update_term_meta($term_id, self::$meta_key, $image);
					else
							delete_term_meta($term_id, self::$meta_key);
			}

	}
}



?>