<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Demo1 */

$this->title = 'Create Demo1';
$this->params['breadcrumbs'][] = ['label' => 'Demo1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="demo1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'datademo'=>$datademo
    ]) ?>

</div>
