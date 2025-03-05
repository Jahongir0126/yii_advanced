<?php

namespace backend\models;
use Yii;
use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName()
    {
        return 'products';
    }

    public function rules()
    {
        return [
            [['name', 'price'], 'required'],
            [['price'], 'number'],
            [['description'], 'string'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id'=>'ID',
            'name'=>'Product Name',
            'price'=>'Product Price',
            'description'=>'Product Description',
            'created_at'=>'Created Date',
        ];
    }
}