<?php

namespace App\Http\API\v1\Controllers;

use App\Http\API\v1\Resources\UserResource;
use App\Models\User;

class UserController
{
    public function getAdmins()
    {
        $users = User::where('role', 'admin')->get();

        return response()->json(new UserResource($users));
    }

    public function getMembers()
    {
        $users = User::where('role', 'member')->get();

        return new UserResource($users);
    }
}
