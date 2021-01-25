<?php

namespace App\Repositories\User;

use App\Domains\User\RegisterUserEntity;
use App\Domains\ValueObjects\User\UserId;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserRegisterMySqlRepositoryImpl
 * @package App\Repositories\User
 */
class UserRegisterMySqlRepositoryImpl implements UserRegisterRepository
{
    /**
     * @param RegisterUserEntity $user_entity
     * @return UserId
     */
    public function register(RegisterUserEntity $user_entity): UserId
    {
        /** @var User $user */
        $user = User::create([
            'nickname'     => $user_entity->getName()->toNative(),
            'email'    => $user_entity->getEmail()->toNative(),
            'password' => Hash::make($user_entity->getPassword()->toNative()),
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
