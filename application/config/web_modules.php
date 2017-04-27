<?php

return [
    'debug' => 'yii\debug\Module',
    'admin' => [
        'class' => 'yii\base\Module',
        'controllerNamespace' => 'admin\controllers',
        'viewPath' => '@admin/views/pages',
        'layoutPath' => '@admin/views/layouts',
        'layout' => 'main'
    ],
    'site' => [
        'class' => 'yii\base\Module',
        'controllerNamespace' => 'admin\controllers',
        'viewPath' => '@admin/views/pages',
        'layoutPath' => '@admin/views/layouts',
        'layout' => 'main'
    ]
];