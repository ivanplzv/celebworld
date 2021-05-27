<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = 'The richest Celebrities in the World';
?>
<div class="site-index">
    <div class="container">
        <h1>The Richest Celebrities List</h1>
        <?
        echo ListView::widget([
            'id'=> 'celebList',
            'options'=> ['class' => 'list-view row'],
            'dataProvider' => $celebrities,
            'itemOptions' => ['class' => 'col-xs-6 col-sm-3'],
            'itemView' => '/site/_celebCard',
            'summary'=>'',
        ]);
        ?>
    </div>
</div>
