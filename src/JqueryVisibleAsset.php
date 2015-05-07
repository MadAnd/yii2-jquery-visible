<?php
/**
 * @link https://github.com/MadAnd/yii2-jquery-visible
 * @copyright Copyright (c) 2015 MadAnd <dev@madand.net>
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace madand\jqueryvisible;

use yii\web\AssetBundle;

class JqueryVisibleAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/jquery-visible';
    public $js = [
        'jquery.visible.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
