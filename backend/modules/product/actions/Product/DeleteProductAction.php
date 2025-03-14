<?php

namespace backend\modules\product\actions\Product;

use backend\modules\product\models\Product;
use Yii;
use yii\base\Action;

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
        return $this->controller->redirect(['/product']);
    }
}