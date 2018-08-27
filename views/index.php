<?php

use yii\helpers\Html;

?>

<div id="slugGeneratorWidget">
    <?= $form->field($model, $model->nameAttribute)->textInput(['maxlength' => true, 'data' => ['field' => 'name']]) ?>
    <?= $form->field($model, $model->slugAttribute)->textInput(['maxlength' => true, 'data' => ['field' => 'slug']]) ?>
</div>
