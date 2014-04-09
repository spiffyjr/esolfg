<?php

return [
    'application' => [],

    'spiffy.mvc' => [
        'controllers' => [
            'home' => 'Application\Home\HomeController'
        ],

        'routes' => [
            'home' => ['/', 'home']
        ],

        'view_manager' => [
            'twig' => [
                'loader_paths' => [
                    'application' => __DIR__ . '/../view'
                ],
                'options' => [
                    //'cache' => 'cache',
                    'debug' => true
                ]
            ]
        ]
    ],
];
