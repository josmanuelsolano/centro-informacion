<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-practical-a-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
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
        ]
    ],
    'modules' => [
        'book' => [
            'class' => 'app\modules\book\Book',
        ],
        'loan' => [
            'class' => 'app\modules\loan\Loan',
        ],
        'acquisition' => [
            'class' => 'app\modules\acquisition\Acquisition',
        ],
        'acquisitionbook' => [
            'class' => 'app\modules\acquisitionbook\Acquisitionbook',
        ],
        'rules' => [
            'class' => 'app\modules\rules\Rules',
        ],
    ],
    'params' => $params,
];
