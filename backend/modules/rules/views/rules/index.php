<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\rules\RulesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reglamento';
?>
<div class="rules-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options'=> ['style'=>'word-wrap:break-word; table-layout:fixed; '],
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'rules_id',
            'rule_number',
            //'description:ntext',
            [
              'attribute' => 'description',
              'value' => 'description',
              'contentOptions'=> ['class' => 'text-wrap',] // <-- right here
            ],
            'rulesCategory.name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <p>
        <?= Html::a('Crear Reglamento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::end(); ?>
</div>
