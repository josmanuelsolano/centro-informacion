<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\acquisition\AcquisitionBooks */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Acquisition Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acquisition-books-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'acquisition_books_id',
            'acquisition.request_date',
            'acquisition.name',
            'acquisition.academic_program',
            'title',
            'author_name',
            'publishing_house',
            'edition',
            'publishing_year',
            'quantity',
            //'acquisition_format_id',
            'another_material:ntext',
        ],
    ]) ?>

</div>
