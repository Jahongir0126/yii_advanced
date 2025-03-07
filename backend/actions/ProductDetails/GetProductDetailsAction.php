<?php

namespace backend\actions\ProductDetails;

use backend\models\ProductDetails;
use yii\base\Action;

class GetProductDetailsAction extends Action
{
    public function run()
    {
        $productDetails = ProductDetails::find()->with('product')->all();

        return $this->controller->render('index', ['productDetails' => $productDetails,]);

    }
//    isDeleted
}