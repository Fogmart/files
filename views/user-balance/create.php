<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserBalance */

$this->title = 'Добавление';
$this->params['breadcrumbs'][] = ['label' => 'Баланс', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-balance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
