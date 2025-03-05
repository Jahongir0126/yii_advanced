<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use backend\models\Product;
use yii\web\NotFoundHttpException;
use \yii\web\Response;

class ProductController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'], // Только для авторизованных пользователей
                    ],
                ],
            ],
        ];
    }

    public function actionCreate()
    {
        $model = new Product();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'product successful created');
            return $this->redirect(['index']);

        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionIndex()
    {
        $products = Product::find()->all();

        return $this->render('index',[
            'products'=>$products,
        ]);
    }

    public function actionGetProducts()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $products=Product::find()->asArray()->all();


        return [
            'status'=>'success',
            'data'=>$products,
        ];
    }
    public function actionDelete($id){
        $model = Product::findOne($id);
        if($model){
            $model->delete();
            Yii::$app->session->setFlash('success','Product successful deleted');
        }else{
            Yii::$app->session->setFlash('error','Product not found');
        }
        return $this->redirect(['index']);
    }


    public function actionUpdate($id)
    {
        $model =Product::findOne($id);
        if(!$model){
            throw new NotFoundHttpException('Product not found');
        }
        if($model->load(Yii::$app->request->post()) && $model->validate()
             && $model->save()){
            Yii::$app->session->setFlash('success', 'Product successful updated');
            return $this->redirect(['index']);
        }
            return $this->render('update', [
            'model' => $model,
        ]);

    }


}