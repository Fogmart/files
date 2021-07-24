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

    </div>

    <div class="row">
        <?foreach ($lst as $item){?>
            <a href="#" class="col-12 text"></a>
            <div class="col-12 search_item">
                <div class="row">
                    <div class="col-sm-4 search_item_description">
                        <p><?=$item->name?></p>
                        <p><?=$item->desc_ru?></p>
                    </div>
                    <div class="col-sm-4 search_item_price">
                        <p><?=$item->price?> руб.</p>
                    </div>
                    <div class="col-sm-4 search_item_action">
                        <?if ($item->isBought) {?>
                            <a href="" ><i class="fas fa-long-arrow-alt-down"> </i>Скачать</a>
                        <? } else {?>
                            <button onclick="buy(<?=$item->id?>)"><i class="fas fa-shopping-cart"></i> Купить</button>
                        <? } ?>
                    </div>
                </div>
            </div>
        <? }?>
    </div>


</div>

<script>
    function buy(id) {
        if (!confirm('Купить файл?')) return;
        $.get('/file/buy?id='+id, function () {
          document.location.reload()
        } )

    }
</script>