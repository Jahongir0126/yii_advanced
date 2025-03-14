<?php

namespace backend\modules\user\actions\Auth;

use backend\modules\user\models\Signup;
use Yii;
use yii\base\Action;

class SignUpAction extends Action
{
    public function run()
    {
        $model = new Signup();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success',
                'Thank you for registration. 
                Please check your inbox for verification email.');

            return $this->controller->goHome();
        }
        return $this->controller->render('signup', [
            'model' => $model,
        ]);

    }
}