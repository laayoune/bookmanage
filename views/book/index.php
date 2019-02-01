<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

//设置面包屑
$this->title = '图书列表';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['index']];
?>

<div>
    <?php $form = ActiveForm::begin(['method' => 'post']); ?>
    <div class="querypanel">
        <div>
            <div class="form-group">
                <label>序号:</label>
                <?= Html::input('text', 'book_id') ?>
            </div>
            <div class="form-group">
                <label>书名:</label>
                <?= Html::input('text', 'book_name') ?>
            </div>
            <?= Html::submitButton('查询', ['class'=>'btn btn-info']) ?>
        </div>
        <div style="">
            <?= Html::a('增加图书', ['create'], ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'emptyText'=>'当前没有图书',
        'emptyTextOptions'=>['style'=>'font-weight:bold'],
        'layout' => "\n{items}\n{pager}" ,
        'columns' => [
            'book_id',
            'book_name',
            [
                'attribute'=>'book_author',
                'enableSorting'=>false,
            ],
            [
                'attribute'=>'book_press',
                'enableSorting'=>false,
            ],
            [
                'attribute'=>'book_price',
                'value' => function ($data) {
                    return $data -> book_price/100;
                },
                'enableSorting'=>false,
                'options' => ['class'=>'right'], 
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                "header" => "操作",
                'headerOptions' => ['width' => '80'],
                'template'=>'{get} {yes} {no} {update} {delete}',
                "buttons" => [
                    "delete"=>function ($url, $model, $key) {
                        return Html::a('<span class="glyphicon glyphicon-remove"></span>', ['delete','id'=>$model->book_id]);
                    },
                    "update"=>function ($url, $model, $key) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', Url::to(['book/update','id'=>$model->book_id]),['title'=>'修改图书']);
                    },
                ],
            ],
        ],
        'pager'=>[
            'firstPageLabel'=>"首页",
            'prevPageLabel'=>'上一页',
            'nextPageLabel'=>'下一页',
            'lastPageLabel'=>'尾页',
        ],
    ]); ?>
</div>

