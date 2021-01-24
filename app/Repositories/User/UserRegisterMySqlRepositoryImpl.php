<?php

namespace App\Repositories\User;

use App\Domains\User\RegisterUserEntity;
use App\Domains\ValueObjects\User\UserId;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/**
 * @package App\Repositories\User\UserRegisterMySqlRepositoryImpl;
 */
class UserRegisterMySqlRepositoryImpl implements UserRegisterRepository
{
    /**
     * @param RegisterUserEntity $user
     * @return bool
     */
    public function register(RegisterUserEntity $user): UserId
    {
        /** @var User $user */
        $user = User::create([
            'name'     => $user->getName()->toNative(),
            'email'    => $user->getEmail()->toNative(),
            'password' => Hash::make($user->getPassword()->toNative()),
        ]);

        return new UserId($user->id);
    }

    /**
     * @param integer $id
     * @return User
     */
    public function getEloquentUserById(int $id): User
    {
        return User::find($id);
    }
}
