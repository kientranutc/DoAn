<?php
namespace frontend\controllers;
use yii;
use frontend\models\Demo1;
use common\libs\sendmail;   

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

    public function actionTestmail()
    {
     $content="        <table>
            <thead>
                <tr>
                    <th>header</th>
                    <th>header2</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>data</td>
                      <td>data2</td>

                </tr>
            </tbody>
        </table>";
    $mail=new sendmail();
    $mail->mail("domai95kxtb@gmail.com","test",$content);

    }

}
