<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\carrer\Carrer */

$this->title = 'Actualizar Carrera: ' . $model->name;
?>
<div class="carrer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
