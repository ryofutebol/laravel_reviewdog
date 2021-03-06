<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{

    /**
     * @return User
     */
    public function getUserName(): User
    {
        $user = User::query()->findOrFail(1);
        return $user->name;
    }

}
