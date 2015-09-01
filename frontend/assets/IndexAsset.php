<?php 
/**
 * @link http://www.yiiframework.com/
* @copyright Copyright (c) 2008 Yii Software LLC
* @license http://www.yiiframework.com/license/
*/

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class IndexAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    'css/jasny-bootstrap.css',
    'css/prettyPhoto.css',
    'css/style.css',
    ];
    public $js = [

    ];
    public $depends = [
    'yii\web\YiiAsset',
    'yii\bootstrap\BootstrapAsset',
    'frontend\assets\AppAsset',
    ];
}
