<?php

namespace backend\modules\product\controllers;

use backend\modules\product\actions\Product\CreateProductAction;
use backend\modules\product\actions\Product\DeleteProductAction;
use backend\modules\product\actions\Product\GetProductAction;
use backend\modules\product\actions\Product\updateProductAction;
use backend\modules\product\rules\Rules;
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