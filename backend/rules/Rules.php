<?php

namespace backend\rules;

class Rules
{
    public static $rules = [
        [

            'allow' => true,
            'roles' => ['@'], // Только для авторизованных пользователей
        ],
        [
            'allow' => false,
            'roles' => ['?'], // Гости не имеют доступа
        ],
    ];
}