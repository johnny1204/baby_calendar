<?php

namespace App\Services\User;

use App\Domains\User\RegisterUserFactory;
use App\Models\User;
use App\Repositories\User\UserRegisterRepository;

/**
 * Class RegisterService
 * @package App\Services\User
 */
class RegisterService
{
    /**
     * @param array $params
     * @return int
     */
    public function createUser(array $params): int
    {
        /** @var RegisterUserFactory factory */
        $factory = app(RegisterUserFactory::class);
        $entity = $factory->createEntity($params['nickname'], $params['email'], $params['password']);

        /** @var UserRegisterRepository $repo */
        $repo = app(UserRegisterRepository::class);
        $user_id = $repo->register($entity);

        return $user_id->toNative();
    }

    /**
     * @param int $id
     * @return User
     */
    public function getLoginUser(int $id): User
    {
        /** @var UserRegisterRepository $repo */
        $repo = app(UserRegisterRepository::class);
        return $repo->getEloquentUserById($id);
    }
}
