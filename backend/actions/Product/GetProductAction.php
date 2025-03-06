<?php

namespace backend\actions\Product;

use backend\models\Product;
use yii\base\Action;

class GetProductAction extends Action
{
    public function run()
    {
        $products = Product::find()->all();

        return $this->controller->render('index',['products'=>$products,]);

    }
}