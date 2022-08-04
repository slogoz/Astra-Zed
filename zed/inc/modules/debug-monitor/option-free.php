<?php
add_filter( 'option_tree_settings_args', function ( $custom_settings ) {

	$custom_settings['settings'][] = [
		'id'      => 'zed_debug_monitor',
		'label'   => 'Дебаг-монитор',
		'type'    => 'tab',
		'section' => 'common'
	];
	$custom_settings['settings'][] = [
		'id'       => 'zed_dbg_mon_on_off',
		'label'    => __( 'Дебаг-монитор', 'concrete' ),
		'desc'     => __( 'Включить или отключить функцию "дебаг-монитора"', 'concrete' ),
		'std'      => 'off',
		'type'     => 'on-off',
		'section'  => 'common',
		'operator' => 'and',
	];
	$custom_settings['settings'][] = [
		'id'       => 'zedmon_show',
		'label'    => __( 'Развернуть по умолчанию', 'concrete' ),
		'desc'     => __( 'Развернуть окно монитора по умолчанию', 'concrete' ),
		'std'      => 'off',
		'type'     => 'on-off',
		'section'  => 'common',
		'operator' => 'and',
	];
	$custom_settings['settings'][] = [
		'id'        => 'zed_dbg_mon',
		'label'     => __( 'Hello', 'concrete' ),
		'desc'      => __( 'Приветствие', 'concrete' ),
		'std'       => 'Привет!',
		'type'      => 'text',
		'section'   => 'common',
		'operator'  => 'and',
		'condition' => 'zed_dbg_mon_on_off:is(on)'
	];

	return $custom_settings;
} );
