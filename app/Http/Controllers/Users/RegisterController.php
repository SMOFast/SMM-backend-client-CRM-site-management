<?php

namespace App\Http\Controllers\Users;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use App\Services\Server\BaseApiService;
use App\Services\Server\Dto\Requests\RegisterUserRequestDto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Throwable;

class RegisterController
{

    public function store(RegisterUserRequest $request)
    {

        try {
            DB::transaction(function () use ($request) {
                $user           = new User();
                $user->name     = $request->get('name');
                $user->email    = $request->get('email');
                $user->password = Hash::make($request->get('password'));

                $user->save();

                try {
                    $dto        = (new RegisterUserRequestDto($user->makeVisible('password')->toArray()));
                    $serverUser = app(BaseApiService::class)->registerUser($dto);
                } catch (Throwable $e) {
                    throw new \RuntimeException($e->getMessage());
                }

                $user->server_user_id    = $serverUser->user_id;
                $user->server_user_token = $serverUser->access_token;

                $user->save();

                return $user;
            });
        } catch (\Throwable $e) {
            return redirect('register')->with('error', $e->getMessage());
        }

        return redirect('dashboard');

    }

}
