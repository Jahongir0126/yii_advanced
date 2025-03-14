<?php


namespace backend\modules\user\actions\Auth;

use backend\modules\user\models\Login;
use backend\modules\user\service\UserService;
use Yii;
use yii\base\Action;

class LoginAction extends Action
{
    private UserService $userService;

    public function __construct($id, $controller, UserService $userService)
    {
        $this->userService = $userService;
        parent::__construct($id, $controller);
    }

    public function run()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->controller->goHome();
        }


        $model = new Login();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->controller->redirect('/');
        }
        $model->password = '';
        return $this->controller->render('login', [
            'model' => $model,
        ]);
    }
}