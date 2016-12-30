<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\acquisition\AcquisitionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Acquisitions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acquisition-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Acquisition', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'acquisition_format_id',
            'name',
            'request_date',
            'academic_program',
            'email:email',
            'acquisitionBooks.title',
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
