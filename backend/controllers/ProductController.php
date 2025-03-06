<?php

namespace backend\controllers;

use backend\actions\Product\CreateProductAction;
use backend\actions\Product\DeleteProductAction;
use backend\actions\Product\GetProductAction;
use backend\actions\Product\updateProductAction;
use backend\rules\Rules;
use yii\filters\AccessControl;
use yii\web\Controller;

class ProductController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' =>Rules::$rules,

            ],
        ];
    }

    public function actions()
    {
        return[
            'create-product'=>CreateProductAction::class,
            'update-product'=>UpdateProductAction::class,
            'delete-product'=>DeleteProductAction::class,
            'get-product'=>GetProductAction::class,
        ];
    }










}