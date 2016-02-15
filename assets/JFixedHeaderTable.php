<?php

namespace Estai\fixedheadert\assets;
use yii\web\AssetBundle;

class JFixedHeaderTableAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery.fixedheadertable';

    public $js = [
        'jquery.fixedheadertable.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'nsept\mousewheel\MousewheelAsset',
    ];
}
