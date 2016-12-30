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
            //'book_id',
            //'acquisition',
            'title',
            'carrerCarrer.name',
            'classification',
        ],
    ]) ?>

</div>
