<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AboutAsset;
AboutAsset::register($this);

$this->title = 'Quienes Somos';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
  <h1><?= Html::encode($this->title) ?></h1>
  <div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <!-- /.row -->
    <!-- Content Row -->
    <div class="container">
      <!-- Map Column -->
      <div class="col-md-8">
        <!-- Embedded Google Map -->
        <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3390.6969307256804!2d-116.5923132852319!3d31.806008681276076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d88e39f768d7d3%3A0x536c67072ac8e5e7!2sInstituto+Tecnol%C3%B3gico+de+Ensenada!5e0!3m2!1ses!2smx!4v1479120899332"></iframe>
      </div>
      <!-- Contact Details Column -->
      <div class="col-md-4">
        <h3>Detalles de Contacto</h3>
        <p>
          Direccion: Bvld. Tecnológico<br> No. 150 Edif. 600<br>
        </p>
        <p><i class="fa fa-phone"></i>
          <abbr title="Phone"></abbr>(646) 177-56-80 ext 1001</p>
          <p><i class="fa fa-envelope-o"></i>
            <abbr title="Email"></abbr>cinformacion@ite.edu.mx
          </p>
          <p><i class="fa fa-clock-o"></i>
            <abbr title="Hours"></abbr>Lunes - Viernes: 8:00 AM A 8:00 PM</p>
            <div class="row">
              <div class="col-md-6">
                <ul class="social">
                  <li><a href="https://www.facebook.com/ciite/" target="_blank"><i class="icon-facebook icon-social"></i> Facebook</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <section id="services" class="service-item" >
        <div  style="  background: #000 url(../frontend/web/img/bg_services.png);
        background-cover: 100%;">
        <div class="center wow fadeInDown">
          <h2>Nuestros Valores</h2>
          <p class="lead">Trabajamos con valores que nos forman como profesionistas</p>
        </div>
        <div class="container">
          <div id="team-scroller" class="carousel scale">
            <div class="carousel-inner">
              <div class="item active">
                <div class="container">
                  <div class="col-md-3">
                    <div class="member">
                      <p><?= Html::img(Yii::getAlias('@web/frontend/web/img/R.jpg'), ['class' => 'img-responsive img-thumbnail img-circle']) ?></p>
                      <!--<p><img class="img-responsive img-thumbnail img-circle" src="imagenes/R.jpg" alt="" ></p>-->
                      <h3 style="color:#fff;">Respeto<small class="designation" >
                      </small></h3>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="member">
                      <p><?= Html::img(Yii::getAlias('@web/frontend/web/img/S.jpg'), ['class' => 'img-responsive img-thumbnail img-circle']) ?></p>
                      <h3 style="color:#fff;">Servicio<small class="designation"></small></h3>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="member">
                      <p><?= Html::img(Yii::getAlias('@web/frontend/web/img/L.jpg'), ['class' => 'img-responsive img-thumbnail img-circle']) ?></p>
                      <h3 style="color:#fff;">Lealtad<small class="designation"></small></h3>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="member">
                      <p><?= Html::img(Yii::getAlias('@web/frontend/web/img/H.jpg'), ['class' => 'img-responsive img-thumbnail img-circle']) ?></p>
                      <h3 style="color:#fff;">Honestidad<small class="designation"></small></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item ">
                <div class="container" >
                  <div class="col-md-4">
                    <div class="member">
                      <p><?= Html::img(Yii::getAlias('@web/frontend/web/img/R.jpg'), ['class' => 'img-responsive img-thumbnail img-circle']) ?></p>
                      <h3 style="color:#fff;">Responsabilidad<small class="designation"></small></h3>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="member">
                      <p><?= Html::img(Yii::getAlias('@web/frontend/web/img/O.jpg'), ['class' => 'img-responsive img-thumbnail img-circle']) ?></p>
                      <h3 style="color:#fff;">Orden<small class="designation"></small></h3>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="member">
                      <p><?= Html::img(Yii::getAlias('@web/frontend/web/img/D.jpg'), ['class' => 'img-responsive img-thumbnail img-circle']) ?></p>
                      <h3 style="color:#fff;">Disiplina<small class="designation"></small></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="left-arrow" href="#team-scroller" data-slide="prev">
              <i class="icon-angle-left icon-4x"></i>
            </a>
            <a class="right-arrow" href="#team-scroller" data-slide="next">
              <i class="icon-angle-right icon-4x"></i>
            </a>
          </div><!--/.carousel-->
        </div><!--/.row-->
      </div><!--/.container-->
    </section><!--/#services-->
    <div class="container">

      <div class="col-md-6">
        <div class="media services-wrap wow fadeInDown">
          <div class="pull-left">
            <?= Html::img(Yii::getAlias('@web/frontend/web/img/mision.png'), ['class' => 'img-responsive', 'width'=>100, 'height'=>100]) ?>
            <!--<img class="img-responsive" src="imagenes/mision.png" width="100" height="100">-->
          </div>
          <div class="media-body">
            <h3 class="media-heading">Misión</h3>
            <p style="text-align: justify;" >   Gestionar, promover y facilitar recursos y servicios documentales,

              creando una cultura de acceso a la información, para contribuir a

              la formación integral de profesionistas competitivos, en el marco de

              los objetivos institucionales</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="media services-wrap wow fadeInDown">
            <div class="pull-left">
              <?= Html::img(Yii::getAlias('@web/frontend/web/img/vision.png'), ['class' => 'img-responsive', 'width'=>140, 'height'=>100]) ?>
            </div>
            <div class="media-body">
              <h3 class="media-heading">Visión</h3>
              <p style="text-align: justify;" >  Unidades orgánicas del sistema nacional de institutos tecnológicos,

                de amplia repercusión académica con recursos documentales y

                servicios de información, para impulsar la docencia, investigación,

                vinculación y cultura; tecnología de vanguardia, ambiente óptimo,

                personal capacitado, con actitud de servicio, inmersas en un

                proceso de mejora continua y equidad, acorde al modelo

                educativo vigente </p>
              </div>
            </div>
          </div>
        </div>

        <section id="contact-page">
          <div class="container">
            <div class="center">
              <h2>Envianos un mensaje</h2>
              <p class="lead">Si tienes alguna queja, sugerencia o duda, contactanos</p>
              <p class="lead">Pero si deseas puedes solicitar que se adquiera material bibliográfico pulsando <?= Html::a(' aquí', Url::to('@web/acquisitionbook/acquisitionbook', true))?></p>
            </div>
            <div class="row contact-wrap">
              <div class="status alert alert-success" style="display: none">
              </div>
              <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                <div class="col-sm-5 col-sm-offset-1">
                  <div class="form-group">
                    <label>
                      Nombre
                    </label>
                    <input type="text" name="name" class="form-control" required="required">
                  </div>
                  <div class="form-group">
                    <label>
                      Correo Electronico
                    </label>
                    <input type="email" name="email" class="form-control" required="required">
                  </div>
                  <div class="form-group">
                    <label>
                      Telefono
                    </label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">
                      <span class="glyphicon glyphicon-send">
                      </span>  Enviar Solicitud
                    </button>
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="form-group">
                    <label>
                      Asunto
                    </label>
                    <input type="text" name="subject" class="form-control" required="required">
                  </div>
                  <div class="form-group">
                    <label>Mensaje</label>
                    <textarea name="message" id="message" required="required" class="form-control" rows="5">
                    </textarea>
                  </div>

                </div>
              </form>
            </div><!--/.row-->
          </div><!--/.container-->
        </section><!--/#contact-page-->
    </div>
