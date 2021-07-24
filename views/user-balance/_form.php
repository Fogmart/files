<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserBalance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-balance-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'user_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\User::find()->all(), "id", "username")
    ) ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
