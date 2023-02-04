<?php

namespace app\Controller;

use app\Services\UserService;

class UserController
{
    private UserService|null $userService = null;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function create()
    {
        return $this->userService->create('user@gmail.com', 123);
    }

}