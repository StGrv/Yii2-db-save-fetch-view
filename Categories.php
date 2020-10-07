<?php
namespace backend\models;

use Yii;

class Categories extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'categories';
    }

    public function rules()
    {
        return [
            [['mark', 'model'], 'required'],
            [['mark', 'model', 'engine', 'transmission'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mark' => 'Mark',
            'model' => 'Model',
            'engine' => 'Engine',
            'transmission' => 'Transmission',
        ];
    }

} // End of the model
