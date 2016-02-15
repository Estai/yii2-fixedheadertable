<?php

namespace estai\fixedheadert\assets;
use yii\web\AssetBundle;

class JFixedHeaderTableAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery.fixedtable';

    public $js = [
        'jquery.fixedheadertable.min.js'
    ];
     public $css = [
        'defaultTheme.css'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'nsept\mousewheel\MousewheelAsset',
    ];
}
