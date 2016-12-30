<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\acquisition\Acquisition */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="acquisition-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'academic_program')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <!-- form for AcquisitionBook added below-->

    <?= $form->field($acquisitionBook, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($acquisitionBook, 'author_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($acquisitionBook, 'publishing_house')->textInput(['maxlength' => true]) ?>

    <?= $form->field($acquisitionBook, 'edition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($acquisitionBook, 'publishing_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($acquisitionBook, 'quantity')->textInput() ?>

    <?= $form->field($acquisitionBook, 'another_material')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
