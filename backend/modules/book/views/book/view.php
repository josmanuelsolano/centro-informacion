<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\book\Book */

$this->title = $model->title;
?>
<div class="book-view">

    <h1><?= Html::encode($this->title) ?></h1>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'book_id',
            'acquisition',
            'title',
            'carrerCarrer.name',
            'classification',
        ],
    ]) ?>
    <p>
        <?= Html::a('Actualizar', ['update', 'book_id' => $model->book_id, 'carrer_carrer_id' => $model->carrer_carrer_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['Delete', 'book_id' => $model->book_id, 'carrer_carrer_id' => $model->carrer_carrer_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
