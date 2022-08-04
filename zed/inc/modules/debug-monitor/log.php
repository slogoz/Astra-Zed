<?php

$GLOBALS['zed_debug_data'] = [];

function zed_log_add_data( $data = 'Данные...', $name = 'ZEDDATA' ) {
	static $id = 0;
	if ( $name === 'ZEDDATA' ) {
		$name = $name . '_' . $id ++;
	}
	$GLOBALS['zed_debug_data'][ $name ] = $data;
}

function zlog( $data = 'zlog($data, $name)', $name = 'ZEDDATA' ) {
	zed_log_add_data( $data, $name );
}

function zlog_render( $before = 'def', $after = 'def' ) {

	$_before = '<div class="z-data-item"><div class="z-data-item__top"><div class="zd-dm__close zd--toggle" data-toggle=".z-data-item__bottom"><div class="zd-dm__close-roll"></div></div>%s</div><div class="z-data-item__bottom">';
	$_after = '</div></div>';

	if($before === 'def') {
		$before = $_before;
	}

	if($after === 'def') {
		$after = $_after;
	}

	$data = $GLOBALS['zed_debug_data'];

	$out = '';

	foreach ( $data as $name => $dt ) {
		$_before = sprintf($before, $name);
		if(is_scalar($dt)) {
			$out .= $_before . print_r( $dt, true ) . $after;
		} else {
			$out .= $_before . '<pre>' . print_r( $dt, true ) . '</pre>' . $after;
		}
	}

	return $out;
}

function zlog_out( $before = '<div class="z-data-item">', $after = '</div>' ) {
	echo zlog_render( $before, $after );
}

function zlog_mon_out($data) {
	$data .= zlog_render();

	return $data;
}