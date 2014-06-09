<?php

return [
    'doctrine-orm' => [
        'main' => [
            'connection' => [
                'dbname' => 'vagrant',
                'user' => 'vagrant',
                'password' => 'vagrant',
                'driver' => 'pdo_mysql',
            ]
        ]
    ],
    'framework' => [
        'twig' => ['paths' => [__DIR__ . '/../view']]
    ]
];
