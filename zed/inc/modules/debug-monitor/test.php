<?php

add_filter( 'zedmon', 'zedmon_test' );

function zedmon_test( $content ) {
	$content = 'Module: debug-monitor';

	return $content;
}

add_action( 'wp_head', 'zedmon_is_test' );

function zedmon_is_test() {
	zlog( array(
		'is_front_page' => is_front_page() ? 'да' : 'нет',
		'is_home'       => is_home() ? 'да' : 'нет',
		'is_single'     => is_single() ? 'да' : 'нет',
		'is_page'       => is_page() ? 'да' : 'нет',
	), 'Состояние проверочных функций-тегов' );
}