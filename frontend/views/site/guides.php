<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Guias';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-guides">
  <h1><?= Html::encode($this->title) ?></h1>
  <div class="container">
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">
          <div class="col-xs-1">
            <?= Html::img(Yii::getAlias('@web/frontend/web/img/logo.png'), ['width' => 50, 'height'=> 50, 'style' =>'border-radius:100px;']) ?>
          </div>
          Cómo buscar libros en la biblioteca
        </div>
        <div class="panel-body">
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/EDQgU1CPpis?list=PL-0jO4hbioW00b2IdSYZVgX4acB6wpmsm" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">
          <div class="col-xs-1">
            <?= Html::img(Yii::getAlias('@web/frontend/web/img/logo.png'), ['width' => 50, 'height'=> 50, 'style' =>'border-radius:100px;']) ?>
          </div>
          Proceso de renovación por correo
        </div>
        <div class="panel-body">
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/-ov3sE3PASQ" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">
          <div class="col-xs-1">
            <?= Html::img(Yii::getAlias('@web/frontend/web/img/logo.png'), ['width' => 50, 'height'=> 50, 'style' =>'border-radius:100px;']) ?>
          </div>
          Cómo solicitar un cubículo
        </div>
        <div class="panel-body">
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/-ov3sE3PASQ" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
