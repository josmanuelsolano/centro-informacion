<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\acquisition\Acquisition */

$this->title = 'Update Acquisition: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Acquisitions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->acquisition_format_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="acquisition-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
