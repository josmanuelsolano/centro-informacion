<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\acquisition\AcquisitionBooks */

$this->title = 'Nueva Solicitud de Adquisicion';
?>
<div class="acquisition-books-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'acquisition' => $acquisition,
    ]) ?>

</div>
