<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\Pjax;
use common\models\rules\RulesCategory;
use common\models\rules\Rules;
use frontend\assets\RulesAsset;
RulesAsset::register($this);
/* @var $this yii\web\View */
/* @var $searchModel common\models\rules\RulesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reglamento';
?>
<div class="rules-index">
  <h1><?= Html::encode($this->title) ?></h1>
  <?php Pjax::begin(); ?>
  <section id="content">
    <div class="container">
      <div class="row">
        <div class="col-md-12 wow fadeInDown">
          <div class="tab-wrap">
            <div class="media">
              <div class="parent pull-left">
                <ul class="nav nav-tabs nav-stacked">
                  <?php
                  $categories = RulesCategory::find()->All();
                  foreach ($categories as $category) {?>
                    <li class=""><a href=<?= "#tab".$category->rules_category_id ?> data-toggle="tab" class="analistic-01"><?= $category->name ?></a></li>
                  <?php } ?>
                </ul>
              </div>
              <div class="parent media-body">
                <div class="tab-content">
                  <?php
                  $categoriesRules = RulesCategory::find()->All();
                  $rules = Rules::find()->All();
                  foreach ($categoriesRules as $categoryRule) { ?>
                    <div class="tab-pane fade" id=<?= "tab".$categoryRule->rules_category_id ?>>
                      <div class="media">
                        <div class="pull-left">
                              <?= Html::img(Yii::getAlias('@web/frontend/web/img/articulos.jpg'), ['width' => 100, 'height'=> 100, 'style' =>'border-radius:100px;']) ?>
                          </div>
                          <div class="media-body">
                          <?php foreach ($rules as $rule) {
                            if ($categoryRule->rules_category_id == $rule->rules_category_id) { ?>
                              <h2>Art.<?= $rule->rule_number?></h2>
                              <p><?= $rule->description ?></p>
                            <?php } ?>
                          <?php } ?>
                          </div>
                      </div>
                    </div>
                  <?php } ?>
                </div><!--/.tab-content-->
              </div><!--/.parrent media-body-->
            </div><!--/.media-->
          </div><!--/.tab-wrap-->
        </div><!--/.col-md-12-->
      </div><!--/.row-->
    </div><!--/.container-->
  </section><!--/#content-->
  <?php Pjax::end(); ?>
</div>
