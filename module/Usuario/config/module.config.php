<?php
return [
    'controllers' => [
        'invokables' => [
            'Usuario\Controller\Crud' => 'Usuario\Controller\CrudController',
        ],
    ],
    'router' => [
        'routes' => [
            'usuario' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/usuario',
                    'defaults' => [
                        'controller' => 'Usuario\Controller\Crud',
                        'action' => 'list',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'list' => [
                        'type' => 'Literal',
                        'options' => [
                            'route' => '/list',
                            'defaults' => [
                                'controller' => 'Usuario\Controller\Crud',
                                'action' => 'list',
                            ],
                        ],
                    ],
                    'add' => [
                        'type' => 'Literal',
                        'options' => [
                            'route' => '/add',
                            'defaults' => [
                                'controller' => 'Usuario\Controller\Crud',
                                'action' => 'add',
                            ],
                        ],
                    ],
                    'edit' => [
                        'type' => 'Segment',
                        'options' => [
                            'route' => '/edit[/:id]',
                            'constraints' => [
                                'id' => '[0-9]+',
                            ],
                            'defaults' => [
                                'controller' => 'Usuario\Controller\Crud',
                                'action' => 'edit',
                                'id' => 0,
                            ],
                        ],
                    ],
                    'delete' => [
                        'type' => 'Segment',
                        'options' => [
                            'route' => '/delete[/:id]',
                            'constraints' => [
                                'id' => '[0-9]+',
                            ],
                            'defaults' => [
                                'controller' => 'Usuario\Controller\Crud',
                                'action' => 'delete',
                                'id' => 0,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'Usuario' => __DIR__.'/../view',
        ],
    ],
    'doctrine' => [
        'driver' => [
            'Usuario_driver' => [
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => [
                    __DIR__.'/../src/Usuario/Entity',
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    'Usuario\Entity' => 'Usuario_driver',
                ],
            ],
        ],
    ],
    'navigation' => [
        'default' => [
            'Crud' => [
                'pages' => [
                    'usuario' => [
                        'label' => 'Usuario',
                        'route' => 'usuario/list',
                        'pages' => [
                            'list' => [
                                'label' => 'List',
                                'route' => 'usuario/list',
                            ],
                            'add' => [
                                'label' => 'Add',
                                'route' => 'usuario/add',
                            ],
                            'edit' => [
                                'label' => 'Edit',
                                'route' => 'usuario/edit',
                            ],
                            'delete' => [
                                'label' => 'Delete',
                                'route' => 'usuario/delete',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ]
];
