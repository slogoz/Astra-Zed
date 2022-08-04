<?php

add_action( 'wp_footer', function () {

	if ( ot_get_option( 'zed_dbg_mon_on_off' ) === 'on' ) {
		zed_dbg_mon_style();
//		$zlog = zlog_render();
		add_filter('zedmon', 'zlog_mon_out');
		$class = ot_get_option('zedmon_show') === 'on' ? ' zd-dm_show' : '';
		$args = array(
			'class' => $class,
			'content' => apply_filters('zedmon', ot_get_option('zed_dbg_mon'))
		);
		zed_dbg_mon_template($args);
		zed_dbg_mon_script();
	}

} );

