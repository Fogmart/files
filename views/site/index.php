<?php

/* @var $this yii\web\View */

$this->title = 'Files';


?>
<div class="site-index">

    <div class="body-content">
        <ul>
            <?foreach ($files as $file) {?>
                <li><?=$file->name?> <a href="/file/<?=$file->id?>" target="_blank">...</a></li>
            <? } ?>
        </ul>
    </div>
</div>
