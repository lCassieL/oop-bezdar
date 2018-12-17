<?php
namespace models;
use core\models\Main;

class Users extends Main{
    public function getUsers(){
        return array(
            array(
                'login'=>'asd',
                'password'=>'456',
            ),
            array(
                'login'=>'qwe',
                'password'=>'123',
            ),
            array(
                'login'=>'zxc',
                'password'=>'789',
            ),
        );
    }
}