<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets_b\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
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

<div class="wrap">
  <div class="container">
    <?php
    NavBar::begin([
        'brandLabel' => 'Centro de Información',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'nav navbar-nav navbar-right my-navbar',
        ],
    ]);
    $menuItems = [];
    if (Yii::$app->user->isGuest) {
        //$menuItems[] = ['label' => 'Iniciar Sesión', 'url' => ['/site/login']];
    } else {
        $menuItems[] = $menuItems + ['label' => 'Libros', 'url' => ['/book/book/']];
        $menuItems[] = $menuItems + ['label' => 'Carreras', 'url' => ['/carrer/carrer/']];
        $menuItems[] = $menuItems + ['label' => 'Adquisiciones', 'url' => ['/acquisitionbook/acquisitionbook/']];
        $menuItems[] = $menuItems + ['label' => 'Reglamentos', 'url' => ['/rules/rules/']];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Cerrar Sesión (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
  </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Instituto Tecnológico de Ensenada <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
