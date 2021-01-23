<?php
namespace App\Repositories\User;

use App\Domains\User\RegisterUserEntity;

interface UserRegisterRepository
{
    /**
     * @param RegisterUserEntity $user
     * @return void
     */
    public function register(RegisterUserEntity $user);
}
