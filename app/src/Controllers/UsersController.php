<?php

namespace App\Controllers;

use App\Models\Users;

class UsersController
{
    public function showAll($container)
    {
        $users = new Users($container);
        return $users->getAll();
    }

    public function show($container, $request)
    {
        $user = new Users($container);
        return $user->getById($request->attributes->get(1));
    }
}
