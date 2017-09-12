<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MapAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyDmqThJbTsIjOOzwJ2Cc-UDYXDp690w6xE',
        'js/map.js'
    ];
    public $depends = [
        'app\assets\AppAsset',
    ];
}
