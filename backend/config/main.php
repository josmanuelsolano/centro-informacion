<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-practical-a-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'language' => 'es-MX',
    'sourceLanguage' => 'en-US',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'modules' => [
        'book' => [
            'class' => 'app\modules\book\Book',
        ],
        'loan' => [
            'class' => 'app\modules\loan\Loan',
        ],
        'acquisitionbook' => [
            'class' => 'app\modules\acquisitionbook\Acquisitionbook',
        ],
        'carrer' => [
            'class' => 'app\modules\carrer\Carrer',
        ],
        'rules' => [
            'class' => 'app\modules\rules\Rules',
        ],
    ],
    'params' => $params,
];
