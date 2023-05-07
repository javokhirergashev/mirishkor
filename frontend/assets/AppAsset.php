<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/frontend-files';
    public $css = [
//        "css/bootstrap.min.css",
        "css/bootstrap.min.css",
        "css/flaticon.css",
        "css/remixicon.css",
        "css/owl.carousel.min.css",
        "css/odometer.min.css",
        "css/fancybox.css",
        "css/aos.css",
        "css/style.css",
        "css/responsive.css",
        "css/dark-theme.css",
        "img/favicon.png",
    ];
    public $js = [
        "cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js",
        "js/jquery.min.js",
        "js/bootstrap.bundle.min.js",
        "js/form-validator.min.js",
        "js/contact-form-script.js",
        "js/aos.js",
        "js/owl.carousel.min.js",
        "js/odometer.min.js",
        "js/fancybox.js",
        "js/jquery.appear.js",
        "js/tweenmax.min.js",
        "js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
