<?php

namespace app\models;

use Yii;

class Satuan extends \yii\mongodb\ActiveRecord
{
    public static function getDb()
    {
        return Yii::$app->get('mongodb');
    }

    public static function collectionName()
    {
        return 'satuan';
    }

    public function rules()
    {
        return [
            [['_id'], 'safe'],
            [['nm_satuan'], 'required'],
            [['nm_satuan'], 'string', 'max' => 100],
        ];
    }

    public function attributes()
    {
        return ['_id','nm_satuan'];
    }

    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'nm_satuan' => 'Nama Satuan',
        ];
    }

    // public function getBarangs()
    // {
    //     return $this->hasMany(Barang::className(), ['satuan_id' => 'id']);
    // }
}
