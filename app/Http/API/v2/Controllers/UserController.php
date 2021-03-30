<?php

namespace App\Http\API\v2\Controllers;

use App\Http\API\v1\Controllers\UserController as v1UserController;
use App\Http\API\v2\Resources\UserResource;
use App\Models\User;

class UserController extends v1UserController
{
    public function getAdmins()
    {
        $users = User::where('role', 'admin')->get()->map(function($user){ $user->extra_field = 'something'; return $user; });

        return response()->json(new UserResource($users));
    }

    public function getClowns()
    {
        $users = User::where('role', 'clown')->paginate();

        return response()->json(new UserResource($users));
    }
}
