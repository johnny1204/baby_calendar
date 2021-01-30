<?php

namespace App\Domains\User;

use App\Domains\ValueObjects\User\NickName;
use App\Domains\ValueObjects\User\Password;
use ValueObjects\Web\EmailAddress;

/**
 * Class RegisterUserFactory
 * @package App\Domains\User
 */
class RegisterUserFactory
{
    /**
     * @param string $name
     * @param string $email
     * @param string $password
     * @return RegisterUserEntity
     */
    public function createEntity(string $name, string $email, string $password): RegisterUserEntity
    {
        return new RegisterUserEntity(
            NickName::fromNative($name),
            EmailAddress::fromNative($email),
            Password::fromNative($password)
        );
    }
}
