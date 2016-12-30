<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\acquisition\AcquisitionBooks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="acquisition-books-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($acquisition, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($acquisition, 'academic_program')->textInput(['maxlength' => true]) ?>

    <?= $form->field($acquisition, 'email')->textInput(['maxlength' => true]) ?>

    <!--Add fields from acquisition Fomm ^ -->

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publishing_house')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publishing_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'another_material')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Solicitar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
