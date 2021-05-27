<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<div class="celebCard">
    <div class="wrapper">
        <div class="image">
            <img src="/images/celebrity/<?= $model->image; ?>" alt="">
        </div>
        <a class="title" href="/people/<?= $model->id; ?>"><?= Html::encode($model->name) ?> Net Worth</a>
        <div class="shortDescription">
            <span><?= Html::encode($model->short_description) ?></span>
        </div>
    </div>
</div>