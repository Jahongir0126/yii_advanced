<?php

namespace backend\modules\user\service;

use common\models\Users;

class UserService
{

    public function getActiveUsers()
    {
        return Users::find()->active()->all();
    }
    public function findByUsername(string $username): ?Users {
        return Users::find()->byUsername($username)->one();
    }

}