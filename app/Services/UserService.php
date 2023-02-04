<?php

namespace app\Services;

class UserService
{
    public function create($email, $password)
    {
        echo 'User created: ' . $email;
        return true;
    }

}