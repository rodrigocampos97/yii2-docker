<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=yii2_docker_database;dbname=yii2-docker',
    'username' => 'yii2-docker',
    'password' => 'yii2-docker',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
