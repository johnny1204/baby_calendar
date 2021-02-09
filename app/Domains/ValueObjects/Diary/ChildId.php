<?php

namespace App\Domains\ValueObjects\Diary;

use ValueObjects\Number\Integer;

/**
 * @package App\Domains\ValueObjects\Diary
 */
class ChildId extends Integer
{
    /**
     * @param $value
     */
    public function __construct($value)
    {
        parent::__construct($value);
    }
}
