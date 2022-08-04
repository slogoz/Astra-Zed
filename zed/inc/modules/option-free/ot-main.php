<?php

return array(
    [
        'id' => 'entry_header',
        'label' => 'Заголовок',
        'desc' => '',
        'type' => 'tab',
        'section' => 'main'
    ],
    [
        'id' => 'entry_header_title',
        'label' => __('Заголовок', 'concrete'),
        'desc' => __('Введите заголовок H1', 'concrete'),
        'std' => 'Изготовим и доставим бетон<br>любой марки до Вашего<br>объекта за <span>50 минут</span>',
        'type' => 'text',
        'section' => 'main',
        'operator' => 'and',

    ],
    [
        'id' => 'entry_header_info',
        'label' => __('Информация', 'concrete'),
        'desc' => __('Введите дополнительную информацию', 'concrete'),
        'std' => 'С сохранением 100% прочности при перевозке<br>и 4х ступенчатым контролем качества',
        'type' => 'text',
        'section' => 'main',
        'operator' => 'and',

    ],
    [
        'id' => 'entry_header_img',
        'label' => __('Картинка', 'concrete'),
        'desc' => sprintf(__('Загрузите картинку для заголовка', 'concrete'), 'FTP'),
        'type' => 'upload',
        'section' => 'main',
        'operator' => 'and',
    ],
    [
        'id' => 'entry_header_bg',
        'label' => __('Фоновую картинка', 'concrete'),
        'desc' => __('Загрузите фоновую картинку', 'concrete'),
        'type' => 'upload',
        'section' => 'main',
        'operator' => 'and',
    ],
    [
        'id' => 'concrete_order_on_off',
        'label' => __('Форма "Заказ бетона"', 'concrete'),
        'desc' => __('Включить или отключить форму', 'concrete'),
        'std' => 'on',
        'type' => 'on-off',
        'section' => 'main',
        'operator' => 'and',
    ],
    [
        'id' => 'concrete_order_button_caption',
        'label' => __('Название кнопки', 'concrete'),
        'desc' => __('Введите название кнопки', 'concrete'),
        'std' => 'Заказать',
        'type' => 'text',
        'section' => 'main',
        'operator' => 'and',
        'condition' => 'concrete_order_on_off:is(on)'
    ],
    [
        'id' => 'concrete_order_form_title',
        'label' => __('Заголовок формы', 'concrete'),
        'desc' => __('Введите заголовок формы', 'concrete'),
        'std' => 'Заказ бетона',
        'type' => 'text',
        'section' => 'main',
        'operator' => 'and',
        'condition' => 'concrete_order_on_off:is(on)'
    ],
    [
        'id' => 'concrete_order_form_shortcode',
        'label' => __('Шорткод формы', 'concrete'),
        'desc' => __('Введите шорткод формы Contact Form 7', 'concrete'),
        'std' => '',
        'type' => 'text',
        'section' => 'main',
        'operator' => 'and',
        'condition' => 'concrete_order_on_off:is(on)'
    ],
//    TODO: Факты (facts)
    [
        'id' => 'facts_list',
        'label' => 'Факты',
        'desc' => '',
        'type' => 'tab',
        'section' => 'main'
    ],
    [
        'id' => 'facts_title',
        'label' => __('Заголовок', 'concrete'),
        'desc' => 'Введите заголовок блока',
        'std' => 'Факты',
        'type' => 'text',
        'section' => 'main',
        'operator' => 'and',
    ],
    [
        'id' => 'facts_list_item',
        'label' => __('Список фактов', 'concrete'),
        'desc' => __('', 'concrete'),
        'std' => '',
        'type' => 'list-item',
        'section' => 'main',
        'operator' => 'and',
        'settings' => array(
            [
                'id' => 'desc',
                'label' => __('Описание', 'concrete'),
                'desc' => '',
                'std' => 'Для современного мира высокое качество позиционных исследований играет 
важную роль в формировании экономической целесообразности принимаемых 
решений. Также как базовый вектор развития говорит о возможностях системы 
обучения кадров, соответствующей насущным потребностям. Принимая во 
внимание показатели успешности, укрепление и развитие внутренней структуры 
однозначно фиксирует необходимость прогресса профессионального сообщества.',
                'type' => 'textarea-simple',
                'rows' => '7',
                'operator' => 'and',
            ],
        ),
    ],
//    TODO: Преимущества (advantages)
    [
        'id' => 'adv',
        'label' => 'Преимущества',
        'desc' => '',
        'type' => 'tab',
        'section' => 'main'
    ],
    [
        'id' => 'adv_title',
        'label' => __('Заголовок', 'concrete'),
        'desc' => 'Введите заголовок блока',
        'std' => '<span>За 13 лет опыта</span>мы не допустили 
не одного риска для наших клиентов',
        'type' => 'text',
        'section' => 'main',
        'operator' => 'and',
    ],
    [
        'id' => 'adv_desc',
        'label' => __('Описание', 'concrete'),
        'desc' => 'Введите описание блока',
        'std' => 'Благодаря собственному заводу и высокому сервису',
        'type' => 'text',
        'section' => 'main',
        'operator' => 'and',
    ],
    [
        'id' => 'adv_list_item',
        'label' => __('Список преимуществ', 'concrete'),
        'desc' => __('', 'concrete'),
        'std' => '',
        'type' => 'list-item',
        'section' => 'main',
        'operator' => 'and',
        'settings' => array(
            [
                'id' => 'desc',
                'label' => __('Описание', 'concrete'),
                'desc' => '',
                'std' => 'Но семантический разбор внешних 
противодействий предопределяет высокую
востребованность системы обучения кадров, 
соответствующей насущным потребностям. 
Как уже неоднократно упомянуто, сторонники 
тоталитаризма в науке могут быть в равной 
степени предоставлены сами себе. В рамках 
спецификации современных стандартов, 
диаграммы связей и по сей день остаются 
уделом либералов, которые жаждут быть.',
                'type' => 'textarea-simple',
                'rows' => '7',
                'operator' => 'and',
            ],
            [
                'id' => 'img',
                'label' => __('Картинка', 'concrete'),
                'desc' => 'Можно вставить небольшую картинку',
                'std' => '',
                'type' => 'upload',
                'operator' => 'and',
            ],
        ),
    ],
//    TODO: Текстовый блок в две колонки (text_block_2col)
    [
        'id' => 'text_block_2col',
        'label' => 'Две колонки',
        'desc' => 'Тестовый блок в две колонки',
        'type' => 'tab',
        'section' => 'main'
    ],
    [
        'id' => 'text_block_2col_title',
        'label' => __('Заголовок', 'concrete'),
        'desc' => 'Введите заголовок блока',
        'std' => 'Какой-то заголовок',
        'type' => 'text',
        'section' => 'main',
    ],
    [
        'id' => 'text_block_2col_left',
        'label' => __('Первая колонка', 'concrete'),
        'desc' => 'Введите текстовый контент в первую колонку',
        'std' => 'Благодаря собственному заводу и высокому сервису',
        'type' => 'textarea',
        'section' => 'main',
    ],
    [
        'id' => 'text_block_2col_right',
        'label' => __('Вторая колонка', 'concrete'),
        'desc' => 'Введите текстовый контент во вторую колонку',
        'std' => 'Благодаря собственному заводу и высокому сервису',
        'type' => 'textarea',
        'section' => 'main',
    ],
//    TODO: Новости и статьи (news_posts)
    [
        'id' => 'news_posts',
        'label' => 'Новости и статьи',
        'type' => 'tab',
        'section' => 'main'
    ],
    [
        'id' => 'news_posts_title',
        'label' => __('Заголовок', 'concrete'),
        'desc' => 'Введите заголовок блока',
        'std' => 'Наши новости и полезные статьи',
        'type' => 'text',
        'section' => 'main',
    ],
    [
        'id' => 'news_posts_url',
        'label' => __('Ссылка кнопки', 'concrete'),
        'desc' => 'Введите url на страницу статей',
        'std' => '#',
        'type' => 'text',
        'section' => 'main',
    ],
);