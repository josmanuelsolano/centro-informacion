<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\assets\ChartAsset;
ChartAsset::register($this);

$this->title = 'Organigrama';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-chart">
  <h1><?= Html::encode($this->title) ?></h1>
</div>
<div class="chart" id="organigrama"></div>
