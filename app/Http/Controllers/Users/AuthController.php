<?php

namespace App\Http\Controllers\Users;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use App\Services\Server\BaseApiService;
use App\Services\Server\Dto\Requests\RegisterUserRequestDto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Throwable;

class AuthController
{

    public function store(RegisterUserRequest $request)
    {

        $user           = new User();
        $user->name     = $request->get('name');
        $user->email    = $request->get('email');
        $user->password = Hash::make($request->get('password'));

        $user->save();

        try {
            $serverUser = app(BaseApiService::class)->registerUser(RegisterUserRequestDto::createFromModel($user));
        } catch (Throwable $e) {
            return redirect('register')->with('error', $e->getMessage());
        }

        $user->server_user_id    = $serverUser->user_id;
        $user->server_user_token = $serverUser->access_token;

        $user->save();

    }

    public function login(Request $request)
    {


    }


}
