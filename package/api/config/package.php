<?php

return [
    'doctrine-orm' => [
        'main' => [
            'drivers' => [
                'Api' => [
                    'type' => 'annotation',
                    'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                    'paths' => [__DIR__ . '/../src']
                ]
            ]
        ]
    ],
];
