<?php

namespace backend\modules\user\query;

use common\models\Users;
use yii\db\ActiveQuery;

class UserQuery extends ActiveQuery
{

    public function active()
    {
        return $this->andWhere(['status' => Users::STATUS_ACTIVE]);
    }

    public function byUsername(string $username)
    {
        return $this->andWhere(['username' => $username]);
    }
}
