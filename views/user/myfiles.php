<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div >

    <h1>My files</h1>

    <div class="body-content">
        <ul>
            <?foreach ($files as $file) {?>
                <li><?=$file->file->name?> <a href="/file/<?=$file->id?>" target="_blank">...</a></li>
            <? } ?>
        </ul>
    </div>

</div>
