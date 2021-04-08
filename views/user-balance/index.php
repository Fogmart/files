<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserBalanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Balances';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-balance-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User Balance', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'amount',
            'whn',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
