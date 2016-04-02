<?php
use Illuminate\Database\Capsule\Manager as DB;

// BASE_PATH
define('BASE_PATH', __DIR__);

// VIEW_BASE_PATH
define('VIEW_BASE_PATH', BASE_PATH.'/app/views/');

// Autoload
require BASE_PATH.'/vendor/autoload.php';

// Log
if (!is_dir(BASE_PATH.'/logs/')) {
  mkdir(BASE_PATH.'/logs/', 0700);
}
$monolog = new \Monolog\Logger('system');
$monolog->pushHandler(new \Monolog\Handler\StreamHandler(BASE_PATH.'/logs/app.log', \Monolog\Logger::ERROR));

// BASE_URL
$config = require BASE_PATH.'/config/config.php';
define('BASE_URL', $config['base_url']);

// whoops: php errors for cool kids
$whoops = new \Whoops\Run;
if ($config['debug']) {
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    if (\Whoops\Util\Misc::isAjaxRequest()) {
        $whoops->pushHandler(new \Whoops\Handler\JsonResponseHandler);
    }
} else {
    $whoops->pushHandler(new \Whoops\Handler\PlainTextHandler($monolog));
}
$whoops->register();

// TIME_ZONE
date_default_timezone_set($config['time_zone']);

// Eloquent ORM
$db = new DB;
$db->addConnection(require BASE_PATH.'/config/database.php');
$db->setAsGlobal();
$db->bootEloquent();

