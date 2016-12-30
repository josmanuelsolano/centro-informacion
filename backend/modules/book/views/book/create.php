<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\book\Book */

$this->title = 'Crear Libro';
?>
<div class="book-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
