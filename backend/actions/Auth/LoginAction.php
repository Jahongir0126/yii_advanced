<?php

namespace backend\actions\Auth;

use Yii;
use yii\base\Action;
use backend\models\Login;

class LoginAction extends Action
{

    public function run(){

    if (!Yii::$app->user->isGuest) {
            return $this->controller->goHome();
        }


        $model = new Login();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            echo 'success';

            return $this->controller->redirect('/');
        }
        $model->password = '';
        echo $model->password;

        return $this->controller->render('login', [
            'model' => $model,
        ]);
}
}