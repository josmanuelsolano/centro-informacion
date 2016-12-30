<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\loan\Loan */

$this->title = 'Update Loan: ' . $model->loan_id;
$this->params['breadcrumbs'][] = ['label' => 'Loans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->loan_id, 'url' => ['view', 'loan_id' => $model->loan_id, 'book_book_id' => $model->book_book_id, 'status_status_id' => $model->status_status_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="loan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
