<?php

namespace backend\actions\Product;

use Yii;
use backend\models\Product;
use yii\base\Action;
use yii\web\NotFoundHttpException;

class UpdateProductAction extends Action
{
    public function run($id)
    {
        $model =Product::findOne($id);
        if(!$model){
            throw new NotFoundHttpException('Product not found');
        }
        if($model->load(Yii::$app->request->post()) && $model->validate()
            && $model->save()){
            Yii::$app->session->setFlash('success', 'Product successful updated');
            return $this->controller->redirect(['index']);
        }
        return $this->controller->render('update', [
            'model' => $model,
        ]);

    }
}