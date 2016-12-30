<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\acquisition\AcquisitionBooksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Solicitud de Adquisiciones';
?>
<div class="acquisition-books-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            'title',
            'author_name',
            'acquisition.name',
            'acquisition.request_date',
            //'acquisition_books_id',
            //'acquisition.academic_program',
            //'publishing_house',
            //'edition',
            // 'publishing_year',
            // 'quantity',
            // 'another_material:ntext',
            // 'acquisition_format_id',

            [
              'class' => 'yii\grid\ActionColumn',
              'template' => '&nbsp;{view}&nbsp;'
            ],
        ],
    ]); ?>
    <p>
        <?= Html::a('Solicitar Adquisición', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::end(); ?>
</div>
