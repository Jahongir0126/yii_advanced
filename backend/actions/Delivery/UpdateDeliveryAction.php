<?php

namespace backend\actions\Delivery;

use Yii;
use backend\models\Delivery;
use yii\base\Action;

class UpdateDeliveryAction extends Action
{
    public function run($id)
    {
        $delivery = Delivery::findOne($id);
        if($delivery->load(Yii::$app->request->post()) && $delivery->save() && $delivery->validate()){
            Yii::$app->session->setFlash('success', 'Delivery updated successfully');
        echo 'test';
            return $this->controller->redirect(['/delivery']);

        }
        return $this->controller->render('update', ['model'=>$delivery]);
    }

}