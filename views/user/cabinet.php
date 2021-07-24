<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>

<section class="userfiles">
    <div class="container">
        <div class="row">
            <h5 class="col search_title">Мои файлы</h5>
        </div>

        <div class="row">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link" href="#">Профиль</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Добавить файл</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Мои файлы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Пополнить баланс</a>
                </li>
            </ul>
        </div>

        <div class="row">
            <?foreach ($myfiles as $item){?>
                <div class="col-12 userfile_item">
                    <div class="row">
                        <div class="col-12 col-sm-4 userfile_info">
                            <p><?=$item->name?></p>
                            <p><?=$item->desc_ru?></p>
                        </div>
                        <div class="col-12 col-sm-4 userfile_option"></div>
                        <div class="col-12 col-sm-4 useraction">
                            <a href="<?=$item->path?>" download=""
                            ><i class="fas fa-long-arrow-alt-down"></i> Скачать</a
                            >
                        </div>
                    </div>
                </div>
            <? }?>
        </div>


    </div>
    </div>
</section>
