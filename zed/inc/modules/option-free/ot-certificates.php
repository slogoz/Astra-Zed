<?php

return array(
//    [
//        'id' => 'certificates',
//        'label' => 'Сертификаты',
//        'type' => 'tab',
//        'section' => 'certificates'
//    ]
    [
        'id' => 'certificates_title',
        'label' => __('Заголовок', 'concrete'),
        'desc' => __('Заголовок для блока', 'concrete'),
        'std' => '',
        'type' => 'text',
        'section' => 'certificates',
    ],
    [
        'id' => 'certificates_page_url',
        'label' => __('Ссылка', 'concrete'),
        'desc' => __('Ссылка на страницу с сертификатами', 'concrete'),
        'std' => '',
        'type' => 'page-select',
        'section' => 'certificates',
    ],
    [
        'id' => 'certificates',
        'label' => __('Сертификаты', 'concrete'),
        'desc' => __('', 'concrete'),
        'std' => '',
        'type' => 'list-item',
        'section' => 'certificates',
        'settings' => array(
            [
                'id' => 'img',
                'label' => __('Изображение', 'concrete'),
                'desc' => 'Изображение (скан) сертификата',
                'type' => 'upload',
            ],
            [
                'id' => 'desc',
                'label' => __('Описание', 'concrete'),
                'desc' => '',
                'type' => 'textarea',
                'rows' => '7',
            ],
        ),
    ],
);