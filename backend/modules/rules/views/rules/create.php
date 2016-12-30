<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\rules\Rules */

$this->title = 'Crear Reglamento';
?>
<div class="rules-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
