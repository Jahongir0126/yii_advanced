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
            [['delivery_id'], 'integer'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['delivery_id'], 'exist', 'targetClass' => Delivery::class, 'targetAttribute' => 'id'],
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