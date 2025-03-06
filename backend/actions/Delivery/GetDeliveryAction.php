<?php

namespace backend\actions\Delivery;

use backend\models\Delivery;
use yii\base\Action;

class GetDeliveryAction extends Action
{
    public function run()
    {
        $delivery = Delivery::find()->all();

        return $this->controller-> render('index' ,['delivery' => $delivery]);

    }

}