# Yii2 Slug Generator Widget
Slug generating widget **working with [SeoBehavior](https://github.com/oxy-coach/yii2-seo-behavior)** for creating slug string on-fly using js.

## Installation via Composer

Run the following command

```bash
$ composer require oxy-coach/yii2-slug-generator-widget "*"
```

or add

```bash
$ "oxy-coach/yii2-slug-generator-widget": "*"
```

to the require section of your `composer.json` file.

## Configuring

Add action in the controller, for example:

```php
use oxycoach\slugwidget\SlugGeneratorAction;

\\ ...

    public function actions()
    {
        return [
            'slug-generate' => [
                'class' => SlugGeneratorAction::class,
            ],
        ];
    }
```
## Usage

```php 
use oxycoach\slugwidget\SlugGeneratorWidget;

\\ ...

    <?= SlugGeneratorWidget::widget([
        'form' => $form,
        'model' => $model,
        'slugGenerationAction' => ['slug-generate']
    ]); ?>
```

Configure `slugGenerationAction` property for different slug generating url route
