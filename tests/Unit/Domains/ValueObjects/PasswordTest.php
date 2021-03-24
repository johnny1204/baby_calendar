<?php

namespace Tests\Unit\Domains\ValueObjects;

use App\Domains\ValueObjects\User\Password;
use Illuminate\Validation\ValidationException;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \App\Domains\ValueObjects\User\Password
 */
class PasswordTest extends TestCase
{
    /**
     * @test
     * @covers ::__construct
     */
    public function new_nickname_英数字含む12文字以上()
    {
        $password = new Password('aaaa1111bbbb');
        $this->assertEquals('aaaa1111bbbb', $password->toNative());
    }

    /**
     * @test
     * @covers ::__construct
     */
    public function new_nickname_英数字含む12文字未満()
    {
        $this->expectException(ValidationException::class);
        new Password('aaaa1111bbb');
    }

    /**
     * @test
     * @covers ::__construct
     */
    public function new_nickname_英語のみ12文字以上()
    {
        $this->expectException(ValidationException::class);
        new Password('aaaabbbbcccc');
    }

    /**
     * @test
     * @covers ::__construct
     */
    public function new_nickname_数字のみ12文字以上()
    {
        $this->expectException(ValidationException::class);
        new Password('111122223333');
    }

    /**
     * @test
     * @covers ::__construct
     */
    public function new_nickname_英数字以外12文字以上()
    {
        $this->expectException(ValidationException::class);
        new Password('ああああああああああああ');
    }
}
