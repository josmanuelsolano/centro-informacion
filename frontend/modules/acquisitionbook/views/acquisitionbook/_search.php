<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\acquisition\AcquisitionBooksSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="acquisition-books-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'acquisition_books_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'author_name') ?>

    <?= $form->field($model, 'publishing_house') ?>

    <?= $form->field($model, 'edition') ?>

    <?php // echo $form->field($model, 'publishing_year') ?>

    <?php // echo $form->field($model, 'quantity') ?>

    <?php // echo $form->field($model, 'another_material') ?>

    <?php // echo $form->field($model, 'acquisition_format_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
