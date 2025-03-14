<?php

namespace backend\modules\product\actions\ProductDetails;

use backend\modules\product\models\ProductDetails;
use Yii;
use yii\base\Action;

class DeleteProductDetailsAction extends Action
{

    public function run($id)
    {
        $productDetail = ProductDetails::findOne($id);
        if ($productDetail) {
        $productDetail->delete();
        Yii::$app->session->setFlash('success', 'Success deleted product details');
        }else{
            yii::$app->session->setFlash('error', 'Error deleted product details');
        }
        $this->controller->redirect(['/product-details']);

    }

}