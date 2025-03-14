<?php

namespace backend\modules\product\rules;

class Rules
{
    public static array $rules = [
        [
            'allow' => true,
            'roles' => ['@'], // Только для авторизованных пользователей
        ],
        [

            'allow' => false,
            'roles' => ['?'], // Гости не имеют доступа
        ],
        [
            'actions' => ['create', 'update', 'delete'],
            'allow' => true,
            'roles' => ['admin'], // Только администраторы
        ],
    ];
}