<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
return array(
    'router'		 => array(
	'routes' => array(
	    'home'		 => array(
		'type'		 => 'Zend\Mvc\Router\Http\Literal',
		'options'	 => array(
		    'route'		 => '/',
		    'defaults'	 => array(
			'controller'	 => 'Application\Controller\Index',
			'action'	 => 'index',
		    ),
		),
	    ),
	    'dashboard'	 => array(
		'type'		 => 'Literal',
		'options'	 => array(
		    'route'		 => '/dashboard',
		    'defaults'	 => array(
			'controller'	 => 'Application\Controller\Index',
			'action'	 => 'dashboard',
		    ),
		),
	    ),
	    'sobre'	 => array(
		'type'		 => 'Literal',
		'options'	 => array(
		    'route'		 => '/sobre',
		    'defaults'	 => array(
			'controller'	 => 'Application\Controller\Index',
			'action'	 => 'sobre',
		    ),
		),
	    ),
	    // The following is a route to simplify getting started creating
	    // new controllers and actions without needing to create a new
	    // module. Simply drop new controllers in, and you can access them
	    // using the path /application/:controller/:action
	    'application'	 => array(
		'type'		 => 'Literal',
		'options'	 => array(
		    'route'		 => '/application',
		    'defaults'	 => array(
			'__NAMESPACE__'	 => 'Application\Controller',
			'controller'	 => 'Index',
			'action'	 => 'index',
		    ),
		),
		'error'		 => array(
		    'type'		 => 'Literal',
		    'options'	 => array(
			'route'		 => '/error',
			'defaults'	 => array(
			    'controller'	 => 'Application\Controller\Index',
			    'action'	 => 'error',
			),
		    ),
		    'may_terminate'	 => false,
		    'child_routes'	 => array(
			'403' => array(
			    'type'		 => 'Literal',
			    'options'	 => array(
				'route'		 => '/403',
				'defaults'	 => array(
				    'controller'	 => 'Application\Controller\Error',
				    'action'	 => 'error403'
				)
			    )
			),
		    )
		),
	    ),
	),
    ),
    'service_manager'	 => array(
	'abstract_factories'	 => array(
	    'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
	    'Zend\Log\LoggerAbstractServiceFactory',
	),
	'factories'		 => array(
	    'translator'	 => 'Zend\I18n\Translator\TranslatorServiceFactory',
	    'navigation'	 => 'Zend\Navigation\Service\DefaultNavigationFactory',
	),
    ),
    'translator'		 => array(
	'locale'			 => 'pt_BR',
	'translation_file_patterns'	 => array(
	    array(
		'type'		 => 'gettext',
		'base_dir'	 => __DIR__ . '/../language',
		'pattern'	 => '%s.mo',
	    ),
	),
    ),
    'controllers'		 => array(
	'invokables' => array(
	    'Application\Controller\Index'	 => 'Application\Controller\IndexController',
	    'Application\Controller\Error'	 => 'Application\Controller\ErrorController'
	),
    ),
    'view_manager'		 => array(
	'display_not_found_reason'	 => true,
	'display_exceptions'		 => true,
	'doctype'			 => 'HTML5',
	'not_found_template'		 => 'error/404',
	'exception_template'		 => 'error/index',
	'template_map'			 => array(
	    'layout/layout'			 => __DIR__ . '/../view/layout/layout.phtml',
	    'application/index/index'	 => __DIR__ . '/../view/application/index/index.phtml',
	    'error/404'			 => __DIR__ . '/../view/error/404.phtml',
	    'error/403'			 => __DIR__ . '/../view/error/403.phtml',
	    'error/index'			 => __DIR__ . '/../view/error/index.phtml',
	),
	'template_path_stack'		 => array(
	    __DIR__ . '/../view',
	),
    ),
    // Placeholder for console routes
    'console'		 => array(
	'router' => array(
	    'routes' => array(
	    ),
	),
    ),
    'navigation'		 => array(
	'default' => array(
	    array(
		'label'	 => 'Home',
		'route'	 => 'home',
	    ),
	    'sobre' => array(
		'label'	 => 'Sobre',
		'uri'	 => 'sobre',
	    ),
	    'Crud' => array(
		'label'	 => 'Cadastro',
		'uri'	 => '#',
	    ),
	),
    ),
    'navigation2'		 => array(
	'default' => array(
	    array(
		'label'	 => 'Home',
		'route'	 => 'home',
	    ),
	    'sobre' => array(
		'label'	 => 'Sobre',
		'uri'	 => 'sobre',
	    ),
	),
    ),
);
