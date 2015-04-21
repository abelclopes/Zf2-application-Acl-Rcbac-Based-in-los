<?php

$settings = array(
    //'zend_db_adapter' => 'Zend\Db\Adapter\Adapter',
    'user_entity_class'			 => 'Usuario\Entity\Usuario',
    'enable_default_entities'		 => false,
    'enable_registration'			 => false,
    'enable_username'			 => false,
    'auth_adapters'				 => array(100 => 'ZfcUser\Authentication\Adapter\Db'),
    'enable_display_name'			 => true,
    'auth_identity_fields'			 => array('email'),
    'login_form_timeout'			 => 300,
    'user_form_timeout'			 => 300,
    'use_redirect_parameter_if_present'	 => true,
    //'user_login_widget_view_template' => 'zfc-user/user/login.phtml',
    'login_redirect_route'			 => 'dashboard',
    'logout_redirect_route'			 => 'home',
    //'password_cost' => 14,
    'enable_user_state'			 => false,
    'table_name'				 => 'user',
);
return array(
    'zfcuser'		 => $settings,
    'service_manager'	 => array(
	'aliases' => array(
	    'zfcuser_zend_db_adapter' => (isset($settings['zend_db_adapter'])) ? $settings['zend_db_adapter'] : 'Zend\Db\Adapter\Adapter',
	),
    ),
);
