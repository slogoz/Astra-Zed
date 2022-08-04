<?php

return array(
    [
        'id' => 'products_list',
        'label' => 'Список',
        'type' => 'tab',
        'section' => 'products'
    ],
    [
        'id' => 'products_list_title',
        'label' => __('Заголовок', 'concrete'),
        'desc' => 'Введите заголовок блока',
        'std' => 'Наша продукция',
        'type' => 'text',
        'section' => 'products',
        'operator' => 'and',
    ],
    [
        'id' => 'products_list_count',
        'label' => __('Количество', 'concrete'),
        'desc' => 'Выводимое количество продукции на главной',
        'std' => '6',
        'type' => 'text',
        'section' => 'products',
        'operator' => 'and',
    ],
    [
        'id' => 'products_list_img',
        'label' => __('Картинка', 'concrete'),
        'desc' => 'Картинка по умолчанию',
        'std' => get_template_directory_uri() . '/assets/images/mini-truck.png',
        'type' => 'upload',
        'section' => 'products',
        'operator' => 'and',
    ],
//   TODO: Прайс-лист
    [
        'id' => 'price_list',
        'label' => 'Прайс',
        'type' => 'tab',
        'section' => 'products'
    ],
    [
        'id' => 'price_list_title',
        'label' => __('Заголовок', 'concrete'),
        'desc' => 'Введите заголовок блока',
        'std' => 'Наш прайс-лист',
        'type' => 'text',
        'section' => 'products',
    ],
    [
        'id' => 'price_list_order_on_off',
        'label' => __('Форма "Заказ бетона по прайсу"', 'concrete'),
        'desc' => __('Включить или отключить форму', 'concrete'),
        'std' => 'on',
        'type' => 'on-off',
        'section' => 'products',
        'operator' => 'and',
    ],
    [
        'id' => 'price_list_order_button_caption',
        'label' => __('Название кнопки', 'concrete'),
        'desc' => __('Введите название кнопки', 'concrete'),
        'std' => 'Заказать',
        'type' => 'text',
        'section' => 'products',
        'operator' => 'and',
        'condition' => 'price_list_order_on_off:is(on)'
    ],
    [
        'id' => 'price_list_order_form_title',
        'label' => __('Заголовок формы', 'concrete'),
        'desc' => __('Введите заголовок формы', 'concrete'),
        'std' => 'Заказ по прайс-листу',
        'type' => 'text',
        'section' => 'products',
        'operator' => 'and',
        'condition' => 'price_list_order_on_off:is(on)'
    ],
    [
        'id' => 'price_list_order_form_shortcode',
        'label' => __('Шорткод формы', 'concrete'),
        'desc' => __('Введите шорткод формы Contact Form 7', 'concrete'),
        'std' => '',
        'type' => 'text',
        'section' => 'products',
        'operator' => 'and',
        'condition' => 'price_list_order_on_off:is(on)'
    ],
    [
        'id' => 'products_catalog',
        'label' => 'Каталог',
        'type' => 'tab',
        'section' => 'products'
    ],
    [
        'id' => 'products_catalog_count',
        'label' => __('Количество', 'concrete'),
        'desc' => 'Выводимое количество продукции в каталоге',
        'std' => '6',
        'type' => 'text',
        'section' => 'products',
        'operator' => 'and',
    ],
    [
        'id' => 'products_catalog_count',
        'label' => __('Количество', 'concrete'),
        'desc' => 'Выводимое количество продукции в каталоге',
        'std' => '3',
        'type' => 'text',
        'section' => 'products',
        'operator' => 'and',
    ],
//    TODO: Текстовый блок в две колонки (text_block_2col)
    [
        'id' => 'catalog_text_block_2col',
        'label' => 'Текстовый блок',
        'desc' => 'Тестовый блок в две колонки',
        'type' => 'tab',
        'section' => 'products'
    ],
    [
        'id' => 'catalog_text_block_2col_title',
        'label' => __('Заголовок', 'concrete'),
        'desc' => 'Введите заголовок блока',
        'std' => 'Какой-то заголовок',
        'type' => 'text',
        'section' => 'products',
    ],
    [
        'id' => 'catalog_text_block_2col_left',
        'label' => __('Первая колонка', 'concrete'),
        'desc' => 'Введите текстовый контент в первую колонку',
        'std' => 'Благодаря собственному заводу и высокому сервису',
        'type' => 'textarea',
        'section' => 'products',
    ],
    [
        'id' => 'catalog_text_block_2col_right',
        'label' => __('Вторая колонка', 'concrete'),
        'desc' => 'Введите текстовый контент во вторую колонку',
        'std' => 'Благодаря собственному заводу и высокому сервису',
        'type' => 'textarea',
        'section' => 'products',
    ],
//    TODO: Форма на странице продукта
    [
        'id' => 'product_order_form',
        'label' => 'Форма',
        'type' => 'tab',
        'section' => 'products'
    ],
    [
        'id' => 'product_order_form_caption',
        'label' => __('Название кнопки', 'concrete'),
        'desc' => __('Введите название кнопки', 'concrete'),
        'std' => 'Заказать',
        'type' => 'text',
        'section' => 'products',
    ],
    [
        'id' => 'product_order_form_caption_title',
        'label' => __('Заголовок формы', 'concrete'),
        'desc' => __('Введите заголовок формы', 'concrete'),
        'std' => 'Заказ бетона',
        'type' => 'text',
        'section' => 'products',
    ],
    [
        'id' => 'product_order_form_shortcode',
        'label' => __('Шорткод формы', 'concrete'),
        'desc' => __('Введите шорткод формы Contact Form 7', 'concrete'),
        'type' => 'text',
        'section' => 'products',
    ],
);