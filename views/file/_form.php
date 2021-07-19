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

    <?= $form->field($model, 'brand_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\CarBrand::find()->all(), "id", "name")
    ) ?>

    <?= $form->field($model, 'model_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\CarModel::find()->all(), "id", "name")
    ) ?>


    <?= $form->field($model, 'motor')->textInput() ?>

    <?= $form->field($model, 'fuel')->dropDownList(
        \app\models\File::FUEL
    ) ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'desc_ru')->textarea() ?>
    <?= $form->field($model, 'desc_en')->textarea() ?>


    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'file')->fileInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
