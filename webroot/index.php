<?php
require dirname(__DIR__) . '/src/bootstrap.php';

$di = new Xhgui_ServiceContainer();

$app = $di['app'];

require XHGUI_ROOT_DIR . '/src/routes.php';

require __DIR__ . '/../vendor/xiian/xhgui-importer/src/bootstrap.php';

$app->run();
