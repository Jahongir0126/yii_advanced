<?php

namespace backend\modules\product\actions\Delivery;

use backend\modules\product\models\Delivery;
use Yii;
use yii\base\Action;

class DeleteDeliveryAction extends Action
{
    public function  run($id)
    {
        $delivery= Delivery::findOne($id);
        if($delivery){
            $delivery->delete();
            Yii::$app->session->setFlash('success', 'Delivery deleted successfully');
        }else{
            Yii::$app->session->setFlash('error', 'Delivery not found');
        }
        return $this->controller->redirect(['/delivery']);

    }
}