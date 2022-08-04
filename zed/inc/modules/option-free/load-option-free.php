<?php

/* Подключаем плагин OptionTree в режиме темы и настраиваем его */
add_filter('ot_theme_mode', '__return_true');
add_filter('ot_child_theme_mode', '__return_true');
add_filter('ot_show_new_layout', '__return_false');
add_filter('ot_show_pages', '__return_false');

// Подключение файла перевода
add_action('after_setup_theme', function () {
	load_textdomain('option-tree', ZED_DIR . 'vendore/option-tree/languages/theme-mode/ru_RU.mo');
});

// Перенос настроек на отдельную страница
add_filter('ot_theme_options_parent_slug', function ($parent) {
//	$parent = '';
	return $parent;
}, 20);

//require ZED_DIR . 'vendore/option-tree/includes/ot-functions-admin.php';

require ZED_DIR . 'vendore/option-tree/ot-loader.php';

