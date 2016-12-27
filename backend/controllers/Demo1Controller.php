<?php

namespace backend\controllers;

use Yii;
use backend\models\Demo1;
use backend\models\Demo1Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use backend\models\Demo;


/**
 * Demo1Controller implements the CRUD actions for Demo1 model.
 */
class Demo1Controller extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Demo1 models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Demo1Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Demo1 model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Demo1 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Demo1();
        $datademo=Demo::getall();

        $datademo=ArrayHelper::map($datademo,'MaT1','TenT1');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->MaT2]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'datademo'=>$datademo
            ]);
        }
    }

    /**
     * Updates an existing Demo1 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->MaT2]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Demo1 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
                if (!Yii::$app->request->isAjax) {
                return $this->redirect(['index']);
           }
    }

    /**
     * Finds the Demo1 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Demo1 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Demo1::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionDsdemo($id)
    {
        $count=Demo1::find()->where(['MaT1'=>$id])->count();
         $post = Demo1::find()
         ->where(['MaT1' => $id])
    
         ->all();
         if($count>0){
         foreach($post as $post){

         echo "<option value='".$post->MaT2."'>".$post->TenT2."</option>";
         }
         }
         else{
         echo "<option>-</option>";
         }

    }
}
