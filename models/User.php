<?php

namespace app\models;
use mdm\admin\models\User as UserModel;

class User extends UserModel
{
    public function attributeLabels()
    {
        return [
            'username' => 'Nombre de usuario',
            'password' => 'contraseña'
        ];
    }	
}
