<?php

namespace backend\modules\product\models;

use backend\modules\product\models\Traits\TimestampTrait;
use yii\behaviors\BlameableBehavior;
use yii\db\ActiveRecord;

class ProductDetails extends ActiveRecord
{
    use TimestampTrait;
    public static function tableName()
    {
        return 'product_details';
    }

    public function rules()
    {
        return  array_merge( parent::rules(),[
            [['product_id','brand'],'required'],
            [['product_id',],'integer'],
            [['brand'], 'string'],
            [['material'], 'string'],
            [['color'], 'string'],
            [['brand' , 'material' , 'color'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'targetClass' => Product::class, 'targetAttribute' => 'id'],
        ]);

    }
    public function attributeLabels()
    {
        return array_merge( parent::attributeLabels(),[
            'id'=>'ID',
            'product_id'=>'Product ID',
            'brand'=>'Brand',
            'material'=>'Material',
            'color'=>'Color',
        ]);
    }
    public function behaviors()
    {
        return [
            'blameable' => [
                'class' => BlameableBehavior::class,
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ],
        ];
    }
    public function getProduct()
    {
        return $this->hasOne(Product::class, ['id' => 'product_id']);
    }


}