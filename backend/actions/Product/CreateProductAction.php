<?php
namespace backend\actions\Product;

use Yii;
use backend\models\Product;
use yii\base\Action;


class CreateProductAction extends Action
{


    public function run()
    {
        $model = new Product();
        if ($model->load(Yii::$app->request->post()) && $model->save() && $model->validate()) {
            Yii::$app->session->setFlash('success', 'product successful created');

            return $this->controller->redirect(['product/index']);

        }
        return $this->controller->render('create', [
            'model' => $model,
        ]);

    }
}