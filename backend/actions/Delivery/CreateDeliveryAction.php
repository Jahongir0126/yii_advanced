<?php

namespace backend\actions\Delivery;

use Yii;
use yii\base\Action;
use backend\models\Delivery;

class CreateDeliveryAction extends Action
{

    public function run(){
        $model = new Delivery();
        if($model->load(Yii::$app->request->post())  && $model->save() && $model->validate() ){
            Yii::$app->session->setFlash('success', 'Delivery created successfully');

            return $this->controller->redirect(['delivery']);
        }
        return $this->controller->render('create', [
            'model' => $model,

        ]);
    }

}