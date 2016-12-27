<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Demo1 */

$this->title = 'Update Demo1: ' . $model->MaT2;
$this->params['breadcrumbs'][] = ['label' => 'Demo1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MaT2, 'url' => ['view', 'id' => $model->MaT2]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="demo1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
