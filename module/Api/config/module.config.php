<?php
return [
    'doctrine' => [
        'driver' => [
            'api_entity' => [
                'class' =>'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => [__DIR__ . '/../src/Api/Entity']
            ],
            'orm_default' => [
                'drivers' => [
                    'Api\Entity' => 'api_entity',
                ]
            ]
        ]
    ],

    'controllers' => [
        'invokables' => [
            'Api\Controller\Collection' => 'Api\Controller\ApiController',
        ],
    ],

//    'view_helpers' => array(
//        'invokables' => array(
//            'showMessages' => 'Api\View\Helper\ShowMessages',
//        ),
//    ),


    'router' => [
        'routes' => [
            'api' => [
                'type'    => 'segment',
                'options' => [
                    'route'    => '/api[/][:action][/:id]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => 'Api\Controller\Collection',
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],

    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],

];