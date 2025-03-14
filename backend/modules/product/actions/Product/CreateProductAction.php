<?php

namespace backend\modules\product\actions\Product;

use backend\modules\product\models\Delivery;
use backend\modules\product\models\Product;
use Yii;
use yii\base\Action;


class CreateProductAction extends Action
{


    public function run()
    {
        $products = new Product();
        $deliveryOptions = Delivery::find()
            ->select(['id', "CONCAT(name, ' (', type, ')') as name_with_type"]) // Объединяем name и type
            ->asArray() // Сортируем по названию
            ->orderBy(['name' => SORT_ASC])    // Устанавливаем id как ключи массива
            ->all();        // Преобразуем в массив id => name_with_type

        $deliveryOptions = array_column($deliveryOptions, 'name_with_type', 'id');

        if ($products->load(Yii::$app->request->post()) && $products->save() && $products->validate()) {
            Yii::$app->session->setFlash('success', 'product successful created');

            return $this->controller->redirect(['/product']);

        }
        return $this->controller->render('create', [
            'products' => $products,
            'deliveryOptions' => $deliveryOptions,
        ]);


    }
}

