<?php

namespace backend\modules\product\models\Traits;

trait TimestampTrait
{
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
        ];


    }
    public function attributeLabels()
    {
        return [
            'created_at' => 'Created Date',
            'created_by' => 'Created By',
            'updated_at' => 'Updated Date',
            'updated_by' => 'Updated By',
        ];
    }



}