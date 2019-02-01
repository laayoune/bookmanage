<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = '编辑结果';
$this->params['breadcrumbs'][] = ['label' => '图书列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-view">
    <div class="alert alert-success" role="alert">操作以下数据成功！</div>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'book_id',
            'book_name',
            'book_author',
            'book_press',
            'book_price',
        ],
    ]) ?>
</div>