<?php

namespace frontend\controllers;
use frontend\models\Demo1;

class Demo1Controller extends \yii\web\Controller
{
    public function actionIndex()
    {    
    	$data=Demo1::getall();
        return $this->render('index',[
             'data'=>$data
        	]);
    }

    public function actionLimit()
    {
        $id=$_POST['id'];
    	$datalimit=Demo1::getlimit($id);
        return $this->render('index',[
             'data'=>$datalimit
        	]);
    
    }

}
