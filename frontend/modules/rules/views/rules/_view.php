<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\rules\Rules */


?>
<div class="rules-view">
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12 wow fadeInDown">
            <div class="tab-wrap">
              <div class="media">
                <div class="parent pull-left">
                  <ul class="nav nav-tabs nav-stacked">
                    <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-01">DE LOS USUARIOS</a></li>
                    <li class=""><a href="#tab3" data-toggle="tab" class="analistic-02">DE LOS USUARIOS</a></li>
                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">SANCIONES Y MULTAS</a></li>
                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">SANCIONES Y MULTAS</a></li>
                    <li class=""><a href="#tab6" data-toggle="tab" class="tehnical">PERDIDAS</a></li>
                    <li class=""><a href="#tab7" data-toggle="tab" class="tehnical">FONDO BIBLIOGRAFICO</a></li>
                    <li class=""><a href="#tab9" data-toggle="tab" class="tehnical">PAQUETERIA</a></li>
                  </ul>
                </div>
                <div class="parrent media-body">
                  <div class="tab-content">
                    <div class="tab-pane fade active in" id="tab2">
                      <div class="media">
                        <div class="pull-left">
                          <?= Html::img(Yii::getAlias('@web/frontend/web/img/online.jpg'), ['width' => 100, 'height'=> 100, 'style' =>'border-radius:100px;']) ?>
                        </div>
                        <div class="media-body">
                          <h2 >Art.2</h2>
                          <p>
                            El préstamo se hará con la credencial de la institución,
                            la cual es personal e intransferible, en caso de pérdida
                            de la credencial el alumno deberá reportar de inmediato
                            por escrito a la Jefatura de Servicios Escolares, de lo
                            contrario se responsabilizará del mal uso que se haga de ella.
                           </p>

                          <h2>Art.3</h2>
                          <p>
                            El usuario que lleve material bibliográfico en préstamo
                            externo se hará responsable de entregarlo en buenas condiciones
                            de uso.
                          </p>

                          <h2>Art.4</h2>
                          <p>
                            El Centro de Información ofrece sus servicios a toda la
                            comunidad tecnológica.
                          </p>

                          <h2>Art.5</h2>
                          <p>
                            El alumno que tenga en préstamo material bibliográfico
                            deberá entregarlo en la fecha establecida en la papeleta
                            de devolución que se encuentra en la parte posterior del
                            libro, de lo contrario se hará acreedor a una sanción
                            como lo marca el articulo (11).
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab3">
                      <div class="media">
                        <div class="pull-left">
                          <?= Html::img(Yii::getAlias('@web/frontend/web/img/online.jpg'), ['width' => 100, 'height'=> 100, 'style' =>'border-radius:100px;']) ?>
                        </div>
                        <div class="media-body">
                          <h2>Art.6</h2>
                          <p>Los alumnos deberán respetar los lineamientos conductuales del Centro de Información, el desconocimiento del reglamento no lo excluye de la sanción correspondiente. (dejar los libros que utilizan en los muebles correspondiente,mantener orden, respeto y limpias las mesas de trabajo)
                          </p>
                          <h2>Art.7</h2>
                          <p>Si el alumno tiene libros en préstamo externo podrá entrar a la sala de lectura y deberá de reportarlos cuando salga con ellos de no hacerlo se hará acreedor a una sanción. (Por hacer sonar el arco de seguridad del Centro de Información)
                          </p>
                          <h2>Art.9 Prestamo Externo</h2>
                          <p>Alumnos inscritos y personal que labora en el Instituto Tecnológico de Ensenada, podrán retirar a un tiempo hasta dos libros por un plazo máximo de dos días hábiles, de igual manera podrá solicitar un libro para fotocopiarlo (el cual deberá de entregar ese mismo día). La renovación de los libros podrás realizarla por internet y correo electrónico en dos ocasiones y la tercera deberás acudir al Centro de Información.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab4">
                      <div class="media">
                        <div class="pull-left">
                          <?= Html::img(Yii::getAlias('@web/frontend/web/img/articulos.jpg'), ['width' => 100, 'height'=> 100, 'style' =>'border-radius:100px;']) ?>
                        </div>
                        <div class="media-body">
                          <h2>Art.10</h2>
                          <p>10 Al usuario del Centro de Información que no mantenga el orden en el mismo, se le solicitará que abandone la sala y/o se le suspenderá el servicio
                          </p>
                          <h2>Art.11 </h2>
                          <p>En caso de incumplimiento con el plazo de entrega del material bibliográfico prestado, se aplicará una sanción monetaria de $20.00 (veinte pesos 00/100 M.N.) por día de retraso, que se pagará en el Sistema de Pago Electrónico (SPE) entregando una copia en recepción o por correo electrónico a la dirección cinformacion@ite.edu.mx
                          </p>
                          <h2>Art.12 </h2>
                          <p>El usuario que utilice y/o solicite en préstamo un ejemplar y éste se encuentre en malas condiciones lo deberá reportar de inmediato, ya que quien entregue la bibliografía mutilada o en mal estado se le aplicará una sanción de acuerdo al artículo 17.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab5">
                      <div class="media">
                        <div class="pull-left">
                          <?= Html::img(Yii::getAlias('@web/frontend/web/img/articulos.jpg'), ['width' => 100, 'height'=> 100, 'style' =>'border-radius:100px;']) ?>
                        </div>
                        <div class="media-body">
                          <h2>Art.13</h2>
                          <p>En caso de no colocar el libro en su lugar como es, fila y estante se hará acreedor al acomodo de una fila asignada por el Jefe de la Oficina de Servicios a Usuarios.
                          </p>
                          <h2>Art.14 </h2>
                          <p>En caso de dejar sobre la mesa basura o libros se hará acreedor a un mes de suspensión de servicio de préstamo a domicilio.
                          </p>
                          <h2>Art.15</h2>
                          <p>Si el usuario hace sonar el arco de seguridad a la salida del Centro de Información, sin tener el libro o revista en préstamo, deberá hacer 20 horas de servicio social en la biblioteca.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab6">
                      <div class="media">
                        <div class="pull-left">
                          <?= Html::img(Yii::getAlias('@web/frontend/web/img/articulos.jpg'), ['width' => 100, 'height'=> 100, 'style' =>'border-radius:100px;']) ?>
                        </div>
                        <div class="media-body">
                          <h2>Art.17</h2>
                          <p>1° En caso de pérdida del material bibliográfico prestado, el usuario deberá reponer el mismo libro, de edición reciente. 2° Cuando no se consiga el material bibliográfico extraviado, el usuario deberá solicitar el Jefe del Centro de Información la asignación de un nuevo título.
                          </p>
                          <h2>Art.18 </h2>
                          <p>En caso de mutilaciones bibliográficas, maltrato, rayar, doblar, rasgar, o hacer sonar el sistema antirrobo, el usuario será sancionado de acuerdo al reglamento de los alumnos inscritos en los Institutos Tecnológicos (en el art. 256 inciso E)
                          </p>
                          <h2>Art.19</h2>
                          <p>El usuario que al final de semestre adeude libros o multas por retraso de entrega, no podrá reinscribirse al siguiente periodo ni tendrá derecho a la documentación escolar hasta no devolver el material con la respectiva sanción señalada en el artículo 11. Si tiene algún adeudo en el Centro de Información, no se le otorgará el servicio de préstamo a domicilio.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab7">
                      <div class="media">
                        <div class="pull-left">
                          <?= Html::img(Yii::getAlias('@web/frontend/web/img/articulos.jpg'), ['width' => 100, 'height'=> 100, 'style' =>'border-radius:100px;']) ?>
                        </div>
                        <div class="media-body">
                          <h2>Art.20</h2>
                          <p>El material bibliográfico de reciente adquisición se dará a conocer en el Portal del Tecnológico, Redes Sociales y por Correo Electrónico
                          </p>
                          <h2>Art.21 </h2>
                          <p>Préstamo del material bibliográfico está determinado en función de sus características y número de ejemplares disponibles por obra. Obras de consulta. (Diccionarios, manuales, enciclopedias y tesis) así como publicaciones periódicas solo podrán ser consultadas en la sala de lectura.
                          </p>
                        </div>
                      </div>
                    </div> <!--/.tab-content-->
                    <div class="tab-pane fade" id="tab9">
                      <div class="media">
                        <div class="pull-left">
                          <?= Html::img(Yii::getAlias('@web/frontend/web/img/articulos.jpg'), ['width' => 100, 'height'=> 100, 'style' =>'border-radius:100px;']) ?>
                        </div>
                        <div class="media-body">
                          <h2>Art.22</h2>
                          <p>Dará uso exclusivamente a los usuarios que ingresen al Centro de Información, paquetería no se responsabiliza por pérdidas.
                          </p>
                          <h2>Art.23</h2>
                          <p>Todo lo no previsto en la presente normatividad será resuelto por el personal de este Centro..
                          </p>
                          <h2>Nota:  </h2>
                          <p>Todo usuario sin excepción deberá apegarse a la normatividad vigente.
                          </p>
                        </div>
                      </div>
                    </div> <!--/.tab-content-->
                  </div> <!--/.media-body-->
                </div> <!--/.media-->
              </div><!--/.tab-wrap-->
            </div><!--/.col-sm-6-->
          </div><!--/.row-->
        </div><!--/.container-->
      </div>
      </section><!--/#content-->

</div>
