<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
  <div class="container">
    <div class="row">
      <div class="col-xs-4 col-md-4">
        <?= Html::img(Yii::getAlias('@web/frontend/web/img/logoSEP_hoz.png'), ['class' => 'img-responsive', 'height'=> 91]) ?>
        <!--<?= Html::img(Yii::getAlias('@web/frontend/web/img/separador.png'), ['class' => 'img-responsive','height'=> 91]) ?>-->
      </div>
      <div class="col-xs-5 col-md-7">
          <h4>TECNOLÓGICO NACIONAL DE MÉXICO <h5>INSTITUTO TECNOLÓGICO DE ENSENADA</h5></h4>
          <!--<h5 class="col-xs-5 col-md-7">INSTITUTO TECNOLÓGICO DE ENSENADA</h5>-->
      </div>
      <div class="col-xs-2 col-md-1">
        <?php echo Html::img(Yii::getAlias('@web/frontend/web/img/logo_ite.png'), ['class' => 'img-responsive', 'height'=> 91]) ?>
      </div>
    </div>
  </div>
<div class="wrap">
  <div class="container">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img(Yii::getAlias('@web/frontend/web/img/logo.png'), ['width' => 50, 'height'=> 50, 'style' =>'border-radius:100px;']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'nav navbar-nav navbar-right my-navbar',
        ],
    ]);

    $menuItems = [
        ['label' => 'Inicio', 'url' => ['/']],
        ['label' => 'Libros', 'url' => ['/book/book/']],
        ['label' => 'Quienes somos', 'url' => ['/site/about']],
        ['label' => 'Servicios', 'url' => ['/site/services']],
        ['label' => 'Guías', 'url' => ['/site/guides']],
        ['label' => 'Reglamentos', 'url' => ['/rules/rules']],
        ['label' => 'Organigrama', 'url' => ['/site/chart']],
        ['label' => 'Recursos Electrónicos', 'url' => ['#'], 'items' => [
            ['label' => 'Gale Cengage Learning', 'url' => 'http://infotrac.galegroup.com/itweb/estensenada1'],
            ['label' => 'Ebsco Host', 'url' => 'http://search.ebscohost.com'],
        ]],
    ];
    /*if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }*/
    echo Nav::widget([
        'options' => ['class' => 'nav navbar-nav navbar-right my-navbar'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
</div>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Instituto Tecnológico de Ensenada <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>
<?php $this->endBody() ?>
<script>
    tree = new Treant( chart_config );
</script>
</body>
</html>
<?php $this->endPage() ?>
