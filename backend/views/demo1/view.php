<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Demo1 */

$this->title = $model->MaT2;
$this->params['breadcrumbs'][] = ['label' => 'Demo1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="demo1-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->MaT2], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->MaT2], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'MaT2',
            'TenT2',
            'MaT1',
        ],
    ]) ?>

</div>
