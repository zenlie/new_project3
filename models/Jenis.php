<?php

namespace app\models;

use Yii;

class Jenis extends \yii\db\ActiveRecord
{
    public static function getDb()
    {
        return Yii::$app->get('mysqldb');
    }

    public static function tableName()
    {
        return 'jenis';
    }

    public function rules()
    {
        return [
            [['nm_jenis'], 'required'],
            [['nm_jenis'], 'string', 'max' => 100],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nm_jenis' => 'Nama Jenis',
        ];
    }

    public function getBarangs()
    {
        return $this->hasMany(Barang::className(), ['jenis_id' => 'id']);
    }
}
