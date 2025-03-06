<?php

namespace backend\controllers;

use yii\web\Controller;

class SiteController extends Controller
{

    public $layout = 'main';

    public function actionIndex()
    {
        return $this->render('index'); // Рендерит "views/site/index.php"
    }



}