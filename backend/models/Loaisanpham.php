<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "loaisanpham".
 *
 * @property integer $MaLSP
 * @property string $Tenloaisp
 * @property integer $Trangthai
 * @property string $Mota
 * @property string $Image
 */
class Loaisanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loaisanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Tenloaisp'], 'required'],
            [['Trangthai'], 'integer'],
            [['Tenloaisp', 'Mota', 'Image'], 'string', 'max' => 255],
            [['Tenloaisp'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaLSP' => 'Ma Lsp',
            'Tenloaisp' => 'Tenloaisp',
            'Trangthai' => 'Trangthai',
            'Mota' => 'Mota',
            'Image' => 'Image',
        ];
    }
}
