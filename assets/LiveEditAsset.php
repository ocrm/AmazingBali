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
class LiveEditAsset extends AssetBundle
{
    public $publishOptions = [
        'forceCopy' => true
    ];
    
    public $sourcePath = '@app/modules/admin/assets';
    public $css = [
        'css/live-edit.css',
    ];
    public $js = [
        'js/ckeditor/ckeditor.js',
        'js/live-edit.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
