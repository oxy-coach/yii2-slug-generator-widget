<?php
namespace oxycoach\slugwidget\SlugGenerator;

class SlugGeneratorAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/oxy-coach/yii2-slug-generator-widget/assets';

    public $js = [
        'js/main.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
