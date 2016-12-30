<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\acquisition\AcquisitionBooks */

$this->title = 'Update Acquisition Books: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Acquisition Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'acquisition_books_id' => $model->acquisition_books_id, 'acquisition_format_id' => $model->acquisition_format_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="acquisition-books-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
