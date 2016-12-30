<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\loan\Loan */

$this->title = $model->loan_id;
$this->params['breadcrumbs'][] = ['label' => 'Loans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'loan_id' => $model->loan_id, 'book_book_id' => $model->book_book_id, 'status_status_id' => $model->status_status_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'loan_id' => $model->loan_id, 'book_book_id' => $model->book_book_id, 'status_status_id' => $model->status_status_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'loan_id',
            'borrowed_control',
            'borrowed_date',
            'delivery_date',
            'book_book_id',
            'status_status_id',
        ],
    ]) ?>

</div>
