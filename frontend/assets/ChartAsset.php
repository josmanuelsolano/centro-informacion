<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class ChartAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/frontend/assets';
    public $css = [
        'css/Treant.css',
        //'css/perfect-scrollbar.css',
        'css/organigrama.css',
        'css/site.css',
    ];
    public $js = [
      'js/jquery.easing.js',
      'js/jquery.mousewheel.js',
      'js/organigrama.js',
      'js/perfect-scrollbar.js',
      'js/raphael.js',
      'js/Treant.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
