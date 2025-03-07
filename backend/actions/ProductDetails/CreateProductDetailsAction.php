<?php

namespace backend\actions\ProductDetails;

use Yii;
use backend\models\ProductDetails;
use yii\base\Action;

class CreateProductDetailsAction extends Action
{
    public function run($id)
    {
        $productDetails = new ProductDetails();
        $productDetails->product_id = $id; // Передаем значение продукта из параметра $id

        if( $productDetails->load(Yii::$app->request->post()) && $productDetails->save()){
            Yii::$app->session->setFlash('success','Success created product details');
        return $this->controller->redirect(['/hard-product']);
        }
        return $this->controller->render('create',[
            'productDetails' => $productDetails,
        ]);
    }

//    checkDuplicate


}