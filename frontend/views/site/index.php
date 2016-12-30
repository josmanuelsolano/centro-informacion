<?php

/* @var $this yii\web\View */
use yii\bootstrap\Carousel ;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">

    <?=  Carousel::widget([
      'items' => [
        [
            'content' => Html::a(Html::img(Yii::getAlias('@web/frontend/web/img/carousel/horarios_20171.jpg'), ['width' => 1400,'height'=> 500]), Url::to('http://www.itensenada.edu.mx/?page_id=991', true)),
            //'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
        ],
        [
            'content' => Html::a(Html::img(Yii::getAlias('@web/frontend/web/img/carousel/slider_gracias.jpg'), ['width' => 1400,'height'=> 500]), Url::to('http://www.itensenada.edu.mx/?page_id=991', true))
        ],
        [
            'content' => Html::a(Html::img(Yii::getAlias('@web/frontend/web/img/carousel/encuesta_superior.jpg'),['width' => 1400,'height'=> 500]), Url::to('www.itensenada.edu.mx/?page_id=995', true))
        ],
        [
            'content' => Html::a(Html::img(Yii::getAlias('@web/frontend/web/img/carousel/conri.jpg'), ['width' => 1400,'height'=> 500]), Url::to('http://www.conricyt.mx/encuesta.php?i=10', true))
        ],
        [
            'content' => Html::a(Html::img(Yii::getAlias('@web/frontend/web/img/carousel/imss_urge.jpg'), ['width' => 1400,'height'=> 500]), Url::to('http://www.itensenada.edu.mx/?page_id=897', true))
        ],
      ]
    ]);?>

    </div>
</div>
