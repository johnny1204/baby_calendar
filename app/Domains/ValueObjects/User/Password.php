<?php

namespace App\Domains\ValueObjects\User;

use Illuminate\Validation\ValidationException;
use Log;
use ValueObjects\StringLiteral\StringLiteral;

/**
 * @package App\Domains\ValueObjects\User\Password
 */
class Password extends StringLiteral
{
    /*
     * @param string $value
     */
    public function __construct(string $value)
    {
        if (strlen($value) < 12) {
            $is_valid = false;
        } elseif (!preg_match('/^(?=.*?[a-z])(?=.*?\d)[a-z\d]{12,}$/i', $value)) {
            $is_valid = false;
        } else {
            $is_valid = true;
        }

        if (!$is_valid) {
            throw ValidationException::withMessages(['パスワード英語、数字それぞれ1文字を含んだ12文字以上にしてください。']);
        }

        parent::__construct($value);
    }
}
