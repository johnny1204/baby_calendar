<?php

namespace App\Domains\ValueObjects\User;

use ValueObjects\Number\Integer;

/**
 * Class UserId
 * @package App\Domains\ValueObjects\User
 */
class UserId extends Integer
{
    /**
     * @param int $value
     */
    public function __construct(int $value)
    {
        parent::__construct($value);
    }
}
