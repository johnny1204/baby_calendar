<?php

namespace Tests\Unit\Domains\ValueObjects;

use App\Domains\ValueObjects\User\NickName;
use Illuminate\Validation\ValidationException;
use Tests\TestCase;

/**
 * @coversDefaultClass \App\Domains\ValueObjects\User\NickName
 */
class NickNameTest extends TestCase
{
    /**
     * @test
     * @covers __construct
     */
    public function new_nickname_文字数制限以内()
    {
        $nickname = new NickName(str_repeat('a', 10));
        $this->assertEquals('aaaaaaaaaa', $nickname->toNative());
    }

    /**
     * @test
     * @covers __construct
     */
    public function new_nickname_文字数オーバー()
    {
        $this->expectException(ValidationException::class);
        new NickName(str_repeat('a', 11));
    }
}
