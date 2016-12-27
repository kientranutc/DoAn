<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Demo */

$this->title = 'Update Demo: ' . $model->MaT1;
$this->params['breadcrumbs'][] = ['label' => 'Demos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MaT1, 'url' => ['view', 'id' => $model->MaT1]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="demo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
