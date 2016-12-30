<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\acquisition\Acquisition */

$this->title = 'Create Acquisition';
$this->params['breadcrumbs'][] = ['label' => 'Acquisitions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acquisition-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'acquisitionBook' => $acquisitionBook,
    ]) ?>

</div>
