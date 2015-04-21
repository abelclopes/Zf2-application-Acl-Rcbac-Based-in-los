<?php

return [
    'zfc_rbac' => [
	// 'identity_provider' => 'ZfcRbac\Identity\AuthenticationIdentityProvider',
	'guest_role'		 => 'visitante',
	'guards'		 => [
	    'ZfcRbac\Guard\RouteGuard'	 => [
		'home'		 => ['visitante'],
		'sobre'		 => ['visitante'],
		'dashboard'	 => ['usuario'],
		'cliente/*'	 => ['admin'],
		'usuario/*'	 => ['admin'],
	    ],
	    'ZfcRbac\Guard\ControllerGuard'	 => [
		[
		    'controller'	 => 'Usuario\Controller\Usuario',
		    'roles'		 => ['admin']
		],
	    ]
	],
	// 'protection_policy' => \ZfcRbac\Guard\GuardInterface::POLICY_ALLOW,
	'role_provider'		  => [
	    'ZfcRbac\Role\InMemoryRoleProvider' => [
		'admin'   => [
		    'children'	  => ['usuario'],
		    'permissions' => ['admin', 'deleteOthers', 'autorizar']
		],
		'usuario'   => [
		    'children'	  => ['visitante'],
		    'permissions' => ['usuario', 'delete']
		],
		'visitante'
	    ]
	],
	'unauthorized_strategy'	 => [
	    'template' => 'error/403'
	],
	'redirect_strategy'	 => [
	    'redirect_when_connected'	 => true,
	    'redirect_to_route_connected'	 => 'error/403',
	    'redirect_to_route_disconnected' => 'zfcuser/login',
	    'append_previous_uri'		 => false,
	    'previous_uri_query_key'	 => 'redirect'
	],
    // 'guard_manager'               => [],
    // 'role_provider_manager'       => []
    ]
];
