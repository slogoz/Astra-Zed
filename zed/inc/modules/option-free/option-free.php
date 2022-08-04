<?php

include_once 'load-option-free.php';

add_action('init', 'ot_add_options');

function ot_add_options()
{
    // OptionTree is not loaded yet, or this is not an admin request.
    if (!function_exists('ot_settings_id') || !is_admin()) {
        return false;
    }

    $saved_settings = get_option(ot_settings_id(), array());

    $common = include "ot-common.php";

    $settings = array();
	$settings = array_merge($settings, $common);

    $custom_settings = array(
        'sections' => array(
            [
                'id' => 'common',
                'title' => 'Общие'
            ],
        ),
        'settings' => $settings
    );

    // Allow settings to be filtered before saving.
    $custom_settings = apply_filters(ot_settings_id() . '_args', $custom_settings);

    // Settings are not the same update the DB.
    if ($saved_settings !== $custom_settings) {
        update_option(ot_settings_id(), $custom_settings);
    }

    // Lets OptionTree know the UI Builder is being overridden.
    global $ot_has_custom_theme_options;
    $ot_has_custom_theme_options = true;
}
