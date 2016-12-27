<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Loaisanpham */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loaisanpham-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Tenloaisp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Trangthai')->textInput() ?>

    <?= $form->field($model, 'Mota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Image')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
