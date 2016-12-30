<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\ServicesAsset;
ServicesAsset::register($this);

$this->title = 'Servicios';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <section id="services" class="service-item" >
      <div  style="background: #000 url(../frontend/web/img/bg_services.png);background-cover: 100%;">
        <div class="container">
          <br><br>
          <div class="col-sm-6 col-md-4">
            <div class="media services-wrap wow fadeInDown">
              <div class="pull-left">
                <?= Html::img(Yii::getAlias('@web/frontend/web/img/orientacion.png'), ['width' => 78, 'height'=> 91]) ?>
                <!--<img class="img-responsive" src="imagenes/orientacion.png" width="78" height="91">-->
              </div>
              <div class="media-body">
                <h3 class="media-heading">Orientación</h3>
                <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>

              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="media services-wrap wow fadeInDown">
              <div class="pull-left">
                <?= Html::img(Yii::getAlias('@web/frontend/web/img/consulta.png'), ['width' => 78, 'height'=> 91]) ?>
                <!--<img class="img-responsive" src="imagenes/consulta.png" width="78" height="91">-->
              </div>
              <div class="media-body">
                <h3 class="media-heading"><?= Html::a('Consulta Interna', [Url::to('book/book')]) ?></h3>
                <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="media services-wrap wow fadeInDown">
              <div class="pull-left">
                <?= Html::img(Yii::getAlias('@web/frontend/web/img/prestamos.png'), ['width' => 78, 'height'=> 91]) ?>
                <!--<img class="img-responsive" src="imagenes/prestamos.png" width="78" height="91">-->
              </div>
              <div class="media-body">
                <h3 class="media-heading">P. a domicilio</h3>
                <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="media services-wrap wow fadeInDown">
              <div class="pull-left">
                <?= Html::img(Yii::getAlias('@web/frontend/web/img/cubiculos.png'), ['width' => 78, 'height'=> 91]) ?>
                <!--<img class="img-responsive" src="imagenes/cubiculos.png" width="78" height="91">-->
              </div>
              <div class="media-body">
                <h3 class="media-heading">Cubículos</h3>
                <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="media services-wrap wow fadeInDown">
              <div class="pull-left">
                <?= Html::img(Yii::getAlias('@web/frontend/web/img/bibliografias.png'), ['width' => 78, 'height'=> 91]) ?>
                <!--<img class="img-responsive" src="imagenes/bibliografias.png" width="78" height="91">-->
              </div>
              <div class="media-body">
                <h3 class="media-heading">Bibliografías</h3>
                <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="media services-wrap wow fadeInDown">
              <div class="pull-left">
                <?= Html::img(Yii::getAlias('@web/frontend/web/img/internet.png'), ['width' => 78, 'height'=> 91]) ?>
                <!--<img class="img-responsive" src="imagenes/internet.png" width="78" height="91">-->
              </div>
              <div class="media-body">
                <h3 class="media-heading">Internet</h3>
                <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
              </div>
            </div>
          </div>
        </div><!--/.container-->
      </div><!--background-->
    </section><!--/#services-->
</div>
