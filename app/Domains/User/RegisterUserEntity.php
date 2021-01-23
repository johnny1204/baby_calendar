<?php

namespace App\Domains\User;

use App\Domains\ValueObjects\User\NickName;
use App\Domains\ValueObjects\User\Password;
use ValueObjects\Web\EmailAddress;

/**
 * @package App\Domains\User\RegisterUserEntity
 */
class RegisterUserEntity
{
    /** @var NickName */
    private NickName $nickname;

    /** @var string */
    private EmailAddress $email;

    /** @var string */
    private Password $password;

    /**
     * RegisterUserEntity constructor
     *
     * @param NickName $nickname
     * @param EmailAddress $email
     * @param Password $password
     */
    public function __construct(NickName $nickname, EmailAddress $email, Password $password)
    {
        $this->nickname = $nickname;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return NickName
     */
    public function getName(): NickName
    {
        return $this->name;
    }

    /**
     * @return EmailAddress
     */
    public function getEmail(): EmailAddress
    {
        return $this->email;
    }

    /**
     * @return Password
     */
    public function getPassword(): Password
    {
        return $this->password;
    }
}
