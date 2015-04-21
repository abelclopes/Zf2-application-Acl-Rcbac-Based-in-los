<?php


return array(
    'doctrine' => array(
	'configuration' => array(
	    'orm_default' => array(
		'query_cache' => 'array',
		'result_cache' => 'array',
		'metadata_cache' => 'array'
	    )
	),
	'connection' => array(
	    'orm_default' => array(
		'params' => array(
		    'password' => ''
		)
	    )
	)
    )
);
