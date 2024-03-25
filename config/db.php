<?php

return [
    'schemaMap' => [
        'mysql' => SamIT\Yii2\MariaDb\Schema::class
    ],
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=mariadb;dbname=otpixto',
    'username' => 'otpixto',
    'password' => 'otpixto',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
