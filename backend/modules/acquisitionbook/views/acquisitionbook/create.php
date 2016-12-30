<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\acquisition\AcquisitionBooks */

$this->title = 'Create Acquisition Books';
$this->params['breadcrumbs'][] = ['label' => 'Acquisition Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acquisition-books-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
