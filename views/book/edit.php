<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = '编辑图书';
$this->params['breadcrumbs'][] = ['label' => '图书列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <?php $form = ActiveForm::begin(['id' => 'edit-form']); ?>
        <?= $form->field($model, 'book_name')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'book_author')->textInput() ?>
        <?= $form->field($model, 'book_press')->textInput() ?>
        <?= $form->field($model, 'book_price')->textInput() ?>
        <div class="form-group">
            <?= Html::submitButton('提交', ['class'=>'btn btn-primary']) ?>
            <?= Html::resetButton('重置', ['class'=>'btn btn-primary']) ?>
        </div>

    <?php ActiveForm::end(); ?>
</div>
