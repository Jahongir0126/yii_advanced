<?php

namespace backend\actions\Product;

use backend\models\Product;
use yii\base\Action;
use Yii;

class DeleteProductAction extends Action
{
    public function run($id){
        $model = Product::findOne($id);
        if($model){
            $model->delete();
            Yii::$app->session->setFlash('success','Product successful deleted');
        }else{
            Yii::$app->session->setFlash('error','Product not found');
        }
        return $this->controller->redirect(['index']);
    }
}