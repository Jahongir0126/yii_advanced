<?php

namespace backend\controllers;

use backend\actions\Delivery\CreateDeliveryAction;
use backend\actions\Delivery\DeleteDeliveryAction;
use backend\actions\Delivery\GetDeliveryAction;
use backend\actions\Delivery\UpdateDeliveryAction;
use backend\rules\Rules;
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

