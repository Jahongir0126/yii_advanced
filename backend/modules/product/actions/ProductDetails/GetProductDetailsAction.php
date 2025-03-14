<?php

namespace backend\modules\product\actions\ProductDetails;

use backend\modules\product\models\ProductDetails;
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