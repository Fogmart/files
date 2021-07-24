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
        <?foreach ($lst as $item){?>
        <a
          href="/brand/<?=$item->id?>" class="col-6 col-sm-3 col-md-2 col-lg-2 search_icon"
        >
            <?if ($item->logo) {?>
                <img src="<?=$item->logo?>" alt="<?=$item->name?>"/>
            <? } else {?>
                <?=$item->name?>
            <? }?>
        </a>
        <? }?>
    </div>

</div>
