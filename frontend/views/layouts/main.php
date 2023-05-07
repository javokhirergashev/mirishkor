<?php

/** @var \yii\web\View $this */

/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <!--Preloader starts-->
    <div class="loader js-preloader">
        <div class="absCenter">
            <div class="loaderPill">
                <div class="loaderPill-anim">
                    <div class="loaderPill-anim-bounce">
                        <div class="loaderPill-anim-flop">
                            <div class="loaderPill-pill"></div>
                        </div>
                    </div>
                </div>
                <div class="loaderPill-floor">
                    <div class="loaderPill-floor-shadow"></div>
                </div>
            </div>
        </div>
    </div>
    <!--Preloader ends-->

    <!-- Theme Switcher Start -->
    <div class="switch-theme-mode">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>
    <!-- Theme Switcher End -->
    <!-- Page Wrapper End -->
    <div class="page-wrapper">
<!--        <div>-->
<!--            --><?php
//            NavBar::begin([
//                'brandLabel' => Yii::$app->name,
//                'brandUrl' => Yii::$app->homeUrl,
//                'options' => [
//                    'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
//                ],
//            ]);
//            $menuItems = [
//                ['label' => 'Home', 'url' => ['/site/index']],
//                ['label' => 'About', 'url' => ['/site/about']],
//                ['label' => 'Contact', 'url' => ['/site/contact']],
//                ['label' => 'Signup', 'url' => ['/site/signup']],
//            ];
//
//
//            echo Nav::widget([
//                'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
//                'items' => $menuItems,
//            ]);
//            if (Yii::$app->user->isGuest) {
//                echo Html::tag('div',Html::a('Login',['/site/login'],['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]);
//            } else {
//                echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
//                    . Html::submitButton(
//                        'Logout (' . Yii::$app->user->identity->username . ')',
//                        ['class' => 'btn btn-link logout text-decoration-none']
//                    )
//                    . Html::endForm();
//            }
//            NavBar::end();
//            ?>
<!--        </div>-->
        <?= \frontend\widgets\Header::widget() ?>
        <?= $content ?>
        <?= \frontend\widgets\Footer::widget() ?>
    </div>
    <!-- Back-to-top button Start -->
    <a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>
    <!-- Back-to-top button End -->
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
