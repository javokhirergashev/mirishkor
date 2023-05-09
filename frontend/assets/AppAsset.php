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
        "images/favicon.png",
        "images/apple-touch-icon.png",
        "images/apple-touch-icon-72x72.png",
        "images/apple-touch-icon-114x114.png",
        "images/apple-touch-icon-144x144.png",
        "css/bootstrap.min.css",
        "css/animate.min.css",
        "css/javascript-plugins-bundle.css",
        "js/menuzord/css/menuzord.css",
        "css/style-main.css",
        "css/responsive.css",
        "css/colors/theme-skin-color-set1.css",
    ];
    public $js = [
        "js/jquery.js",
        "js/popper.min.js",
        "js/bootstrap.min.js",
        "js/javascript-plugins-bundle.js",
        "js/menuzord/js/menuzord.js",
        "js/custom.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
