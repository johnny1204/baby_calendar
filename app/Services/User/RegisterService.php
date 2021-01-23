<?php

namespace App\Services\User;

use App\Domains\User\RegisterUserFactory;
use App\Repositories\User\UserRegisterRepository;

/**
 * @package App\Services\User\RegisterService
 */
class RegisterService
{
    /**
     * @param array $params
     * @return void
     */
    public function createUser(array $params)
    {
        /** @var RegisterUserFactory factory */
        $factory = app(RegisterUserFactory::class);
        $entity = $factory->createEntity($params['nickname'], $params['email'], $params['pasword']);

        /** @var UserRegisterRepository $repo */
        $repo = app(UserRegisterRepository::class);
        $repo->register($entity);
    }
}
