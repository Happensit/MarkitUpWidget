<?php
namespace happensit\markitup;

use Yii;
use yii\widgets\InputWidget;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;
use yii\web\AssetBundle;

use backend\assets\MarkitupAsset;

class Markitup extends InputWidget
{
    public $options = [];

  /**
   * @inheritdoc
   */
  public function run()
  {
    if ($this->hasModel()) {
      echo Html::activeTextarea($this->model, $this->attribute, $this->options);
    } else {
      echo Html::textarea($this->name, $this->value, $this->options);
    }

    $this->registerClientScript();

  }

  /**
   * Registers tinyMCE js plugin
   */
  protected function registerClientScript()
  {
    $js = [];
    $view = $this->getView();

    MarkitupAsset::register($this->getView());

    $this->options = array_merge($this->_defaultOptions, $this->options);

    $id = $this->options['id'];

    $js[] = "jQuery('#{$id}').markItUp(mySettings());";

    $view->registerJs(implode("\n", $js));
  }

}
