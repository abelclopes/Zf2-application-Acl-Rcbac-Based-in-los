<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */


return array(
    'service_manager' => array(
        'invokables' => array(
            'Zend\Session\SessionManager' => 'Zend\Session\SessionManager',
        ),
        'aliases' => [
            'Zend\Authentication\AuthenticationService' => 'zfcuser_auth_service'
        ]
    ),
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host' => 'localhost',
                    'port' => '3306',
                    'user' => 'root',
                    'dbname' => 'SEU BANCO DE DADOS',
                    'charset' => 'UTF8',
                    'driverOptions' => array(
                        'charset' => 'UTF8'
                    )
                )
            )
        ),
        'entitymanager' => array(
            'orm_default' => array(
                'connection' => 'orm_default',
                'configuration' => 'orm_default'
            )
        ),
        'configuration' => array(
            'orm_default' => array(
                'query_cache' => 'apc',
                'result_cache' => 'apc',
                'metadata_cache' => 'apc'
            )
        )
    ),
    'view_manager' => array(
        'template_map' => array(
            'error/403' => __DIR__ . '/../../module/Application/view/error/403.phtml',
        ),
    ),
);
