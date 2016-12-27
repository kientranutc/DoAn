<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "demo1".
 *
 * @property integer $MaT2
 * @property string $TenT2
 * @property integer $MaT1
 */
class Demo1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'demo1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaT1'], 'integer'],
            [['TenT2'], 'string', 'max' => 233],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaT2' => 'Ma T2',
            'TenT2' => 'Ten T2',
            'MaT1' => 'Ma T1',
        ];
    }
}
