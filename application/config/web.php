<?php

return [
    'id' => 'My site',
    'name' => 'My site',
    'basePath' => dirname(__DIR__),
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'runtimePath' => dirname(dirname(__DIR__)) . '/runtime',
    'aliases' => [
        '@admin' => '@app/modules/admin',
        '@site' => '@app/models/site'
    ],
    'components' => require(__DIR__ . '/web_components.php'),
    'modules' => require(__DIR__ . '/web_modules.php'),
    'bootstrap' => ['debug'],
];