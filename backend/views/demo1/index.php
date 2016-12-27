<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\Demo1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Demo1s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="demo1-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Demo1', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(['id'=>"pjax-container"]);
 ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
        
            ['class' => 'yii\grid\SerialColumn'],

            'MaT2',
            'TenT2',
            'MaT1',

          [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'delete' => function ($url) {
                        return Html::a(Yii::t('yii', '<span class="glyphicon glyphicon-trash"></span>'), '#', [
                            'onclick' => "
                                if (confirm('bạn có muốn xóa không')) {
                                    $.ajax('$url', {
                                        type: 'POST'
                                    }).done(function(data) {
                                        $.pjax.reload({container: '#pjax-container'});
                                    });
                                }
                                return false;
                            ",
                        ]);
                    },
                ],
            ],        ],
    ]); 
   Pjax::end();

    ?>
</div>
