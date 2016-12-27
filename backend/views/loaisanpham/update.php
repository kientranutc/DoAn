<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Loaisanpham */

$this->title = 'Update Loaisanpham: ' . $model->MaLSP;
$this->params['breadcrumbs'][] = ['label' => 'Loaisanphams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MaLSP, 'url' => ['view', 'id' => $model->MaLSP]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="loaisanpham-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
