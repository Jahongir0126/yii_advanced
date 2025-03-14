<?php

namespace backend\modules\product\actions\Product;

use backend\modules\product\models\Delivery;
use backend\modules\product\models\Product;
use Yii;
use yii\base\Action;
use yii\web\NotFoundHttpException;

class UpdateProductAction extends Action
{
    public function run($id)
    {
        $model =Product::findOne($id);
        $deliveryOptions = Delivery::find()
            ->select(['id', "CONCAT(name, ' (', type, ')') as name_with_type"]) // Объединяем name и type
            ->asArray() // Сортируем по названию
            ->orderBy(['name' => SORT_ASC])    // Устанавливаем id как ключи массива
            ->all();        // Преобразуем в массив id => name_with_type

        $deliveryOptions = array_column($deliveryOptions, 'name_with_type', 'id');
        if(!$model){
            throw new NotFoundHttpException('Product not found');
        }
        if($model->load(Yii::$app->request->post()) && $model->validate()
            && $model->save()){
            Yii::$app->session->setFlash('success', 'Product successful updated');
            return $this->controller->redirect(['/product']);
        }
        return $this->controller->render('update', [
            'model' => $model,
            'deliveryOptions' => $deliveryOptions,
        ]);

    }
}