<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'name'=>'Hello world',
    'language'=>'ro',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log','test'],
//    'defaultRoute'=>'my-article/hello-world',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'W8QTCLEKFM3jMkgLSHskBQEHM_v03qDj',
            'parsers'=>[
                'application/json'=>\yii\web\JsonParser::class
            ]
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'assetManager'=>[
//            'class'=>'app\components\AssetManager'
//            'appendTimestamp'=>true,
        ],
        'test'=>[
            'class'=>'app\components\TestComponent'
        ]
    ],
    'params' => $params,
//    'on beforeRequest' =>function()
//    {
//        echo '<prev> <br><br>';
//        var_dump('From before request');
//        echo '</prev>';
//    }
//    'on beforeAction'=>function(){
//        echo '<prev>.<br><br><br>';
//        var_dump("Application before action.");
//        echo '</prev>';
//        Yii::$app->controller->on(\yii\web\Controller::EVENT_BEFORE_ACTION,function (){
//            echo '<prev>';
//            var_dump("Controller before action from -> on method");
//            echo '</prev>';
//        });
//    },
//    'on beforeAction'=>function(){
//        echo Yii::$app->view->render('@app/views/page/about-pagina');
//    }

];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
