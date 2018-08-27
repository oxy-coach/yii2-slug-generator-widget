<?php
namespace oxycoach\slugwidget\SlugGenerator;

use Codeception\Exception\ConfigurationException;
use yii\base\Widget;
use yii\helpers\Url;

class SlugGeneratorWidget extends Widget
{
    public $form;
    public $model;
    public $slugGenerationAction = ['generate-slug'];

    private $_assetBundle;

    public function init()
    {
        parent::init();
        $this->_assetBundle = SlugGeneratorAsset::register($this->getView());

        if (!$this->model->hasProperty('nameAttribute')) {
            throw new ConfigurationException("SeoBehavior is not attached to model {$this->model::className()}");
        }

        $this->slugGenerationAction = Url::to($this->slugGenerationAction);
    }

    public function run()
    {
        $view = $this->getView();
        $view->registerJs("jQuery('body').ChangeNameHandler('{$this->slugGenerationAction}');");

        return $this->render('index', [
            'form' => $this->form,
            'model' => $this->model,
        ]);
    }
}
