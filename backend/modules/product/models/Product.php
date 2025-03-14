<?php

namespace backend\modules\product\models;
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
            [['name', 'price','delivery_id'], 'required'],
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
            'delivery_id' => 'Delivery Brand',
        ];
    }
    public function getDelivery()
    {
        return $this->hasOne(Delivery::class, ['id' => 'delivery_id']);
    }

}