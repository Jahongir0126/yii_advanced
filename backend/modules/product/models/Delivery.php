<?php

namespace backend\modules\product\models;

use yii\db\ActiveRecord;

class Delivery extends ActiveRecord
{
    public static function tableName(){
        return 'delivery';

    }
    public function rules(){
        return [
            [['name','type'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['delivery_product'], 'string', 'max' => 255],
            [['type'], 'string'],
            [['created_at'], 'safe'],
        ];
    }
    public function attributeLabels()
    {

        return [
            'id'=>'ID',
            'name'=>'Delivery Name',
            'deliver_product'=>'Delivery Product',
            'type'=>'Delivery Type',
            'created_at'=>'Created Date',
        ];
    }
}