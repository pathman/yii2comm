<?php
namespace backend\assets;

use yii\web\AssetBundle;

class ProfileAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    'css/font-awesome.css',
    'css/jquery-ui.css',
    'css/fullcalendar.css',
    'css/fullcalendar.print.css',
    'css/prettyPhoto.css',
    'css/rateit.css',
    'css/bootstrap-datetimepicker.min.css',
    'css/jquery.gritter.css',
    'css/jquery.cleditor.css',
    'css/bootstrap-switch.css',
    'css/widgets.css',
    ];
    public $js = [
    'js/jquery-ui-1.10.2.custom.min.js',
    'js/moment.min.js',
    'js/fullcalendar.min.js',
    'js/gcal.js',
    'js/jquery.rateit.min.js',
    'js/jquery.prettyPhoto.js',
    'js/excanvas.min.js',
    'js/jquery.flot.js',
    'js/jquery.flot.resize.js',
    'js/jquery.flot.pie.js',
    'js/jquery.flot.stack.js',
    'js/jquery.gritter.min.js',
    'js/sparklines.js',
    'js/jquery.cleditor.min.js',
    'js/bootstrap-datetimepicker.min.js',
    'js/bootstrap-switch.min.js',
    'js/filter.js',
    'js/custom.js',
    'js/charts.js',
    'js/jquery.slimscroll.min.js',
    ];
    public $depends = [
    'yii\web\YiiAsset',
    'yii\bootstrap\BootstrapAsset',
    'backend\assets\AppAsset',
    ];
}