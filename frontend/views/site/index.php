<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = 'Celebrities World';
?>
<div class="site-index">
<div class="container">
    <h1>The Richest Celebrities</h1>
    <?
    echo ListView::widget([
        'id'=> 'celebList',
        'options'=> ['class' => 'list-view row'],
        'dataProvider' => $celebrities,
        'itemOptions' => ['class' => 'col-xs-6 col-sm-3'],
        'itemView' => '_celebCard',
        'summary'=>'',
    ]);
    ?>
</div>
</div>
