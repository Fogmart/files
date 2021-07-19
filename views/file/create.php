<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\File */

$this->title = 'Добавление файла';
?>
<div class="file-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
