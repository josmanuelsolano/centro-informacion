<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\carrer\Carrer */

$this->title = $model->name;
?>
<div class="carrer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'carrer_id',
            'name',
        ],
    ]) ?>
    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->carrer_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->carrer_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Estas seguro que deseas borrar esta carrera?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
