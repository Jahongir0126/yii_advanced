<?php

namespace backend\actions\Product;

use backend\models\Delivery;
use Yii;
use backend\models\Product;
use yii\base\Action;


class CreateProductAction extends Action
{


    public function run()
    {
        $model = new Product();
        $deliveryOptions = Delivery::find()
            ->select(['id', "CONCAT(name, ' (', type, ')') as name_with_type"]) // Объединяем name и type
            ->asArray() // Сортируем по названию
            ->orderBy(['name' => SORT_ASC])    // Устанавливаем id как ключи массива
            ->all();        // Преобразуем в массив id => name_with_type

        $deliveryOptions = array_column($deliveryOptions, 'name_with_type', 'id');

        if ($model->load(Yii::$app->request->post()) && $model->save() && $model->validate()) {
            Yii::$app->session->setFlash('success', 'product successful created');

            return $this->controller->redirect(['/product']);

        }
        return $this->controller->render('create', [
            'model' => $model,
            'deliveryOptions' => $deliveryOptions,
        ]);


    }
}

