<?php

namespace backend\modules\product\actions\Product;

use backend\modules\product\models\Product;
use yii\base\Action;

class GetProductAction extends Action
{
    public function run()
    {
        $products = Product::find()->all();
        return $this->controller->render('index',['products'=>$products,]);

    }
}