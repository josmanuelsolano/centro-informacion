<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\BaseArrayHelper;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel common\models\book\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Libros';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'book_id',
            'acquisition',
            'title',
            [
                'attribute' => 'carrer_carrer_id',
                'value' => 'carrerCarrer.name',
            ],
            'classification',
            [
              'class' => 'yii\grid\ActionColumn',
              'template' => '&nbsp;{view}&nbsp;',
            ],
        ],
    ]); ?>
    <!--<p>
        <?= Html::a('Create Book', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->
    <?php Pjax::end(); ?>
</div>
