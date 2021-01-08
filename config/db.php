<?php

// return [
//     'class' => 'yii\db\Connection',
//     'dsn' => 'mysql:host=localhost;dbname=project3',
//     'username' => 'root',
//     'password' => '',
//     'charset' => 'utf8',

//     // Schema cache options (for production environment)
//     //'enableSchemaCache' => true,
//     //'schemaCacheDuration' => 60,
//     //'schemaCache' => 'cache',
// ];

$db = [
    'mysqldb' => [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;port=3306;dbname=project3',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
    ],

	'mongodb' => [
        'class' => '\yii\mongodb\Connection',
        'dsn' => 'mongodb://localhost:27017/collection',
        'options' => [
            // 'readPreference' => 'secondary',
            // 'readConcernLevel' => 'local',
            'socketTimeoutMS' => 60000
        ]
    ]
];

return $db;