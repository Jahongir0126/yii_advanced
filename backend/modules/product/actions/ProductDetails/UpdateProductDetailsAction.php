<?php

namespace backend\modules\product\actions\ProductDetails;

use backend\modules\product\models\ProductDetails;
use Yii;
use yii\base\Action;

class UpdateProductDetailsAction extends Action
{
    public function run($id)
    {
        $productDetail = ProductDetails::findOne($id);
        if ($productDetail->load(Yii::$app->request->post()) && $productDetail->save()) {
            Yii::$app->session->setFlash('success', 'Success updated product details');
            $this->controller->redirect(['/product-details']);
        }

        return $this->controller->render('update',['productDetails' => $productDetail,]);
    }

//    isCreated

}