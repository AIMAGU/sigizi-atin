<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Sistem Menu Gizi Penderita Diabetes',
	'language'=>'id',
	'timeZone'=>'Asia/Jakarta',

	// preloading 'log' component
	'preload'=>array(
		'log',
		'bootstrap',
	),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'defaultController'=>'site/login',
	
	// application modules
	'modules'=>array(
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'atin',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1', '203.6.149.156', '203.6.148.114','::1'),
			'generatorPaths' => array(
	          	'bootstrap.gii', 
	       	),
		),
    ),
	
	// application components
	'components'=>array(
		'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
			'responsiveCss' => true,
        ),
		'user'=>array(
			// enable cookie-based authentication
			'class' => 'application.components.EWebUser',
			'allowAutoLogin'=>true,
		),
		// uncomment the following to use a MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=gizi',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		
		'request'=>array(
			'enableCsrfValidation'=>false,
		),
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
        	'urlSuffix'=>'.html',
        	'caseSensitive'=>false,
			'rules'=>array(
				'<controller:\w+>-<id:\d+>' || '<controller:\w+>-<id:\w+>'=>'<controller>/view',
        		'<controller:\w+>-<action:\w+>/<id:\d+>' || '<controller:\w+>-<action:\w+>/<id:\w+>'=>'<controller>/<action>',
        		'<controller:\w+>-<action:\w+>'=>'<controller>/<action>',
			),
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__).'/params.php'),
);