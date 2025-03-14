<?php

namespace backend\modules\product\actions\Delivery;

use backend\modules\product\models\Delivery;
use yii\base\Action;

class GetDeliveryAction extends Action
{
    public function run()
    {
        $delivery = Delivery::find()->all();

        return $this->controller-> render('index' ,['delivery' => $delivery]);

    }

}