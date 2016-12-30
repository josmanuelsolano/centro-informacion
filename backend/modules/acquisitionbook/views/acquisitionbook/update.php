<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\acquisition\AcquisitionBooks */

$this->title = 'Actualizar Adquisición: ' . $model->title;
?>
<div class="acquisition-books-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
