<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script
            src="https://kit.fontawesome.com/02300fa59b.js"
            crossorigin="anonymous"
    ></script>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header class="header">
    <div class="container">
        <div class="row">
            <div class="header_banner"></div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="offcanvas"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">Меню</a>
                <div
                        class="navbar-collapse offcanvas-collapse"
                        id="navbarSupportedContent"
                >
                    <button
                            class="offcanvas-close"
                            type="button"
                            data-toggle="offcanvas-close"
                    >
                        ×
                    </button>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/site/index"
                            >Главная <span class="sr-only">(current)</span></a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/brand">Дампы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dash</a>
                        </li>
                        <? if(!Yii::$app->user->isGuest)
                            if(Yii::$app->user->identity->isadmin){?>
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin">Редактор</a>
                                </li>
                        <? } ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Поддержка</a>
                        </li>
                        <li class="nav-item">
                            <? if(Yii::$app->user->isGuest){?>
                                <a class="nav-link" href="/site/login">Вход</a>
                            <? } else {?>
                                <a class="nav-link" href="/site/logout">Выход</a>
                            <? } ?>
                        </li>
                    </ul>
                    <div class="nav-info">
                        <? if(!Yii::$app->user->isGuest){?>
                            <a href="/cabinet"><?=Yii::$app->user->identity->email?> </a>
                            <p href="#"><?=Yii::$app->user->identity->balance?></p>
                        <? }?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>

<div class="wrap">
    <?php
//
//    NavBar::begin([
//        'options' => [
//            'class' => 'navbar-inverse navbar-fixed-top',
//        ],
//    ]);
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' => [
//            ['label' => 'Home', 'url' => ['/site/index']],
//             ['label' => 'Files', 'url' => ['/file']],
//            ['label' => 'Users', 'url' => ['/user']],
//            ['label' => 'User Balance', 'url' => ['/user-balance']],
//            ['label' => 'My Files', 'url' => ['/user/myfiles']],
//            Yii::$app->user->isGuest ?
//                (['label' => 'Login', 'url' => ['/site/login']])
//                :
//                (
//                '<li>'
//                . Html::beginForm(['/site/logout'], 'post')
//                . Html::submitButton(
//                    'Logout (' . Yii::$app->user->identity->username . ')',
//                    ['class' => 'btn btn-link logout']
//                )
//                . Html::endForm()
//                . '</li>'
//                )
//        ],
//    ]);
//    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'homeLink' => ['label' => 'Редактор', 'url' => '/admin'],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
