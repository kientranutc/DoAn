<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "demo".
 *
 * @property integer $MaT1
 * @property string $TenT1
 * @property integer $trangthai
 */
class Demo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'demo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trangthai'], 'integer'],
            [['TenT1'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaT1' => 'Ma T1',
            'TenT1' => 'Ten T1',
            'trangthai' => 'Trangthai',
        ];
    }
    public function getall()
    {
        $datademo=Demo::find()->asArray()->all();
        return $datademo;
    }
}
