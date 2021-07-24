<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Files';

?>
<div class="file-index">

    <div class="row">
        <?foreach ($lst as $item) {?>
        <a href="/file/<?=$item->id?>"" class="col-12 col-sm-6 col-md-4 link"><?=$item->name?></a>
        <? } ?>
    </div>

</div>
