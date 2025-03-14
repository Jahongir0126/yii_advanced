<?php

namespace backend\modules\product\controllers;

use backend\modules\product\actions\ProductDetails\CreateProductDetailsAction;
use backend\modules\product\actions\ProductDetails\DeleteProductDetailsAction;
use backend\modules\product\actions\ProductDetails\GetProductDetailsAction;
use backend\modules\product\actions\ProductDetails\UpdateProductDetailsAction;
use backend\modules\product\rules\Rules;
use yii\filters\AccessControl;
use yii\web\Controller;

class ProductDetailsController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => Rules::$rules,
            ]
        ];

    }

    public function actions()
    {
        return [
            'create-product-details' => CreateProductDetailsAction::class,
            'get-product-details' => GetProductDetailsAction::class,
            'update-product-details'=>UpdateProductDetailsAction::class,
            'delete-product-details'=>DeleteProductDetailsAction::class,
        ];
    }

}