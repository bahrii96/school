<?php

// Adding code before closing head tag

add_action('wp_head', function () {
	if (get_theme_mod('header-scripts-settings')) :
		echo get_theme_mod('header-scripts-settings');
	endif;
});

// Adding code before closing body tag

add_action('wp_footer', function () {
	if (get_theme_mod('footer-scripts-settings')) :
		echo get_theme_mod('footer-scripts-settings');
	endif;
});

/* Custom Theme Settings funcitons.php */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

register_nav_menus(array(
	'primary_left' => __('Primary Menu'),
));
register_nav_menus(array(
	'primary_footer' => __('Primary Footer First'),
));



add_theme_support('post-thumbnails');
//add_image_size('large-preview', 550, 365, true);\


function allow_svg_upload($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

add_filter('upload_mimes', 'allow_svg_upload');

// shortcodes connect
// include 'inc/shortcodes.php';

// theme custom settings
include 'inc/settings.php';
include 'inc/customizer-theme-settings.php';
include 'inc/assets.php';
include 'inc/disable-emojis.php';
include 'inc/features.php';

require_once get_stylesheet_directory() . '/inc/navigation.php';

function add_paragraph_tags_to_acf_wysiwyg_content($value, $post_id, $field)
{
	if ($field['type'] === 'wysiwyg') {
		$blocks = preg_split('/\n\s*\n/', $value);
		$blocks = array_filter($blocks);
		$formatted_content = '';
		foreach ($blocks as $block) {
			if (!preg_match('/^<p>/', $block)) {
				$formatted_content .= '<p>' . $block . '</p>';
			} else {
				$formatted_content .= $block;
			}
		}
		return $formatted_content;
	}

	return $value;
}
add_filter('acf/format_value', 'add_paragraph_tags_to_acf_wysiwyg_content', 10, 3);




// =========

// Додаємо код в functions.php чи в ваш плагін
function my_enqueue_scripts()
{
	wp_enqueue_script('custom-ajax', get_template_directory_uri() . '/assets/js/ajax-script.js', array('jquery'), '1.0', true);

	// Визначаємо ajaxurl через wp_localize_script
	wp_localize_script('custom-ajax', 'my_ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

// Функція для обробки AJAX-запиту
function my_custom_function()
{
	// Обробка отриманих даних
	// $_POST містить дані, які ви передали через AJAX-запит
	// Ваш код обробки даних і повернення результату

	// Приклад: виведення отриманих даних
	echo 'Отримано дані: ' . $_POST['some_data'];

	// Важливо завершити виконання скрипта
	wp_die();
}

// Додаємо дію для обробки AJAX-запиту в WordPress
add_action('wp_ajax_my_custom_action', 'my_custom_function');
add_action('wp_ajax_nopriv_my_custom_action', 'my_custom_function');