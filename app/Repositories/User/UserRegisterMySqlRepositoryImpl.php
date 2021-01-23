<?php

namespace App\Repositories\User;

use App\Domains\User\RegisterUserEntity;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/**
 * @package App\Repositories\User\UserRegisterMySqlRepositoryImpl;
 */
class UserRegisterMySqlRepositoryImpl implements UserRegisterRepository
{
    /**
     * @param RegisterUserEntity $user
     * @return void
     */
    public function register(RegisterUserEntity $user)
    {
        User::create([
            'name'     => $user->getName()->toNative(),
            'email'    => $user->getEmail()->toNative(),
            'password' => Hash::make($user->getPassword()->toNative()),
        ]);
    }
}
