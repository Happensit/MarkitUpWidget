<?php
namespace happensit\markitup;

use yii\web\AssetBundle;

class MarkitupAsset extends AssetBundle
{

    public $sourcePath = '@app/modules/backend/assets/markitup';
    public $depends = ['yii\web\JqueryAsset'];

    public function init()
    {

            $this->js[] = 'jquery.markitup.js';
            $this->js[] = 'settings.js';
            $this->css[] = 'skins/simple/redactor.css';
            $this->css[] = 'sets/markitup.css';
    }

}