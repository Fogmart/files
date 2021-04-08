<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\File */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="file-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype'=>'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'cat_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Category::find()->all(), "id", "name")
    ) ?>

    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'file')->fileInput() ?>


    <?= $form->field($model, 'active')->dropDownList(
        \app\models\File::FILE_ACTIVE
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
