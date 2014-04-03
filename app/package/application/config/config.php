<?php

return [
    'application' => [],

    'spiffy.mvc' => [
        'controllers' => [
            'home' => 'Application\Home\HomeController'
        ],

        'routes' => [
            ['home', '/', ['defaults' => ['controller' => 'home', 'action' => 'index']]],
        ],

        'view_manager' => [
            'twig' => [
                'loader_paths' => [__DIR__ . '/../view']
            ]
        ]
    ],
];
