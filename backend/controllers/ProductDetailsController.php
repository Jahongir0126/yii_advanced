<?php

namespace backend\controllers;

use backend\actions\ProductDetails\CreateProductDetailsAction;
use backend\actions\ProductDetails\DeleteProductDetailsAction;
use backend\actions\ProductDetails\GetProductDetailsAction;
use backend\actions\ProductDetails\UpdateProductDetailsAction;
use backend\rules\Rules;
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