<?php

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

// 加载自动加载器

// 加载应用配置
$config = require __DIR__ . '\config\web.php';

require_once __DIR__ . '/../yii2-2.0.42/framework/Yii.php';

// 创建、配置、运行一个应用
(new yii\web\Application($config))->run();


