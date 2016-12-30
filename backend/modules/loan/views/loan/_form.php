<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\loan\Loan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'borrowed_control')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'borrowed_date')->textInput() ?>

    <?= $form->field($model, 'delivery_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'book_book_id')->textInput() ?>

    <?= $form->field($model, 'status_status_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
