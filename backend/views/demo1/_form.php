<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Demo1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="demo1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TenT2')->dropDownlist(["prompt"=>"-chon loại san phẩm"],['id'=>"tensp"]) ?>

    <?= $form->field($model, 'MaT1')->dropDownlist($datademo,['prompt'=>"chọn loại sản phẩm",'onchange'=>'
    $.post("dsdemo?id="+$(this).val(), function(data){
     $("#tensp").html(data);
    })'



    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
