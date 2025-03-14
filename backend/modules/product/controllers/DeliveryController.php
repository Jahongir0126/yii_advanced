<?php

namespace backend\modules\product\controllers;

use backend\modules\product\actions\Delivery\CreateDeliveryAction;
use backend\modules\product\actions\Delivery\DeleteDeliveryAction;
use backend\modules\product\actions\Delivery\GetDeliveryAction;
use backend\modules\product\actions\Delivery\UpdateDeliveryAction;
use backend\modules\product\rules\Rules;
use yii\filters\AccessControl;
use yii\web\Controller;

class DeliveryController extends Controller
{
public function behaviors()
{
    return [
      'access'=>[
          'class'=>AccessControl::class,
          'rules'=>Rules::$rules
      ]
    ];

}
    public function actions()
    {
        return [
            'create-delivery'=>CreateDeliveryAction::class,
            'update-delivery'=>UpdateDeliveryAction::class,
            'delete-delivery'=>DeleteDeliveryAction::class,
            'get-delivery'=>GetDeliveryAction::class,

        ];

    }

}

