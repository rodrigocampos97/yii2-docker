<?php

if (!in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {
    die('You are not allowed to access this file.');
}

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

defined('YII_DEBUG') or define('YII_DEBUG', $_ENV['APP_DEBUG']);
defined('YII_ENV') or define('YII_ENV', $_ENV['APP_ENV']);

require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/test.php';

(new yii\web\Application($config))->run();
