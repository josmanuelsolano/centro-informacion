<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\acquisition\Acquisition */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Acquisitions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acquisition-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->acquisition_format_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->acquisition_format_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'acquisition_format_id',
            'name',
            'request_date',
            'academic_program',
            'email:email',
        ],
    ]) ?>

</div>
