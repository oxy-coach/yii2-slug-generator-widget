<?php
namespace oxycoach\slugwidget;

use Yii;
use yii\base\Action;
use oxycoach\seobehavior\TransliterationHelper;

class SlugGeneratorAction extends Action
{

    public function run()
    {
        $name = Yii::$app->request->post('name', '');

        return TransliterationHelper::createSlug($name);
    }
}
