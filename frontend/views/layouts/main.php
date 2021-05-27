<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'The Richest People', 'url' => ['/people/index']],
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
    <?= $content ?>
</div>

<footer id="footer">
    <div class="cnw_waist_band">
        <div class="logo">Celebrity Net Worth</div>
        <div class="aside">
            <ul id="menu-footer-links" class="links">
                <li
                        id="menu-item-145035"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-145035"
                >
                    <a href="https://www.celebworld.online/about-us/"
                    >About Us</a
                    >
                </li>
                <li
                        id="menu-item-145037"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-145037"
                >
                    <a href="https://www.celebworld.online/contact/"
                    >Contact Us</a
                    >
                </li>
                <li
                        id="menu-item-145040"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-145040"
                >
                    <a href="https://www.celebworld.online/privacy-policy/"
                    >Privacy Policy</a
                    >
                </li>
                <li
                        id="menu-item-308536"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-308536"
                >
                    <a href="https://www.celebworld.online/accessibility/"
                    >Accessibility</a
                    >
                </li>
                <li
                        id="menu-item-145038"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-145038"
                >
                    <a
                            title="DMCA Policy"
                            href="https://www.celebworld.online/dmca-policy/"
                    >DMCA</a
                    >
                </li>
                <li
                        id="menu-item-145041"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-145041"
                >
                    <a
                            title="Terms and Conditions"
                            href="https://www.celebworld.online/terms/"
                    >Terms of Use</a
                    >
                </li>
                <li>
                    <a class="ot-sdk-show-settings" href="#"
                    >Do Not Sell My Personal Information</a
                    >
                </li>
            </ul>
            <p>© 2021 Celebworld / All Rights Reserved</p>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
