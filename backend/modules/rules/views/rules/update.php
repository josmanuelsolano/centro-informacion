<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\rules\RulesCategory;

/* @var $this yii\web\View */
/* @var $model common\models\rules\Rules */

$this->title = 'Actualizar artículo: ' . $model->rule_number;
?>
<div class="rules-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rule_number')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 8]) ?>

    <?= $form->field($model, 'rules_category_id')->dropDownList(
        ArrayHelper::map(RulesCategory::find()->all(), 'rules_category_id','name')
      ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
