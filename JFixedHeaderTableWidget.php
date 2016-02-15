<?php

namespace Estai\fixedheadert;

use yii\base\Widget;
use Estai\fixedheadert\assets\JFixedHeaderTableAsset;
use nsept\mousewheel\MousewheelAsset;
use yii\helpers\Json;
use yii\web\View;

class JFixedHeaderTableWidget extends Widget {

    public $container = '.table';
    public $mousewheel = true;
    public $settings = [];

    public function run()
    {
        return $this->registerJFixedHeaderTableJs();
    }

    private function registerJFixedHeaderTableJs()
    {
        $jQueryContainer = "$('{$this->container}')";

        JFixedHeaderTableAsset::register($this->view);
            MousewheelAsset::register($this->view);
        

        if(!empty($this->settings)) {
            $var = uniqid('$container');
            $query = "var {$var} = {$jQueryContainer};" . PHP_EOL;

            $options = Json::encode($this->settings);

            return $this->view->registerJs($query . "{$var} . fixedHeaderTable({$options})", View::POS_READY);
        }

        return $this->view->registerJs($jQueryContainer . " . fixedHeaderTable()", View::POS_READY);
    }
}
