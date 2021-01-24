<?php

namespace App\Domains\ValueObjects\User;

use ValueObjects\Number\Integer;

/**
 * @package App\Domains\ValueObjects\User
 */
class UserId extends Integer
{
    /**
     * @param integer $value
     */
    public function __construct(int $value)
    {
        parent::__construct($value);
    }
}
