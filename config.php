<?php

return [
    'production' => false,
    'community' => [
        'name' => 'PHP Valencia',
        'description' => 'Grupo local de desarrolladores web que usan el lenguaje #PHP. Y, como siempre, después de cada charla, algunos van a cenar por la zona, ¡todos sois bienvenidos!'
    ],
    'collections' => ['events'],
    'menu' => [
        [
            'title' => '¿Qué es?',
            'url' => '/'
        ],
        [
            'title' => 'Eventos',
            'url' => '/events'
        ],
        [
            'title' => 'Aloja el evento',
            'url' => '/host-the-event'
        ]
    ]
];
