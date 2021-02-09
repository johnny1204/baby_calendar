<?php

namespace Tests\Unit\Repositories\User;

use App\Domains\User\RegisterUserEntity;
use App\Domains\ValueObjects\User\NickName;
use App\Domains\ValueObjects\User\Password;
use App\Models\User;
use App\Repositories\User\UserRegisterSqlRepositoryImpl;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use ValueObjects\Web\EmailAddress;

/**
 * Class UserRegisterMySqlRepositoryImplTest
 * @package Tests\Unit\Repositories\User
 *
 * @coversDefaultClass \App\Repositories\User\UserRegisterSqlRepositoryImpl
 */
class UserRegisterSqlRepositoryImplTest extends TestCase
{
    /**
     * @test
     * @covers ::register
     */
    public function register()
    {
        $repo = new UserRegisterSqlRepositoryImpl;
        $user_id = $repo->register(new RegisterUserEntity(
            new NickName('ニックネーム'),
            new EmailAddress('test@example.com'),
            new Password('password1234')
        ));

        $this->assertDatabaseHas((new User())->getTable(), [
            'nickname' => 'ニックネーム',
            'email'    => 'test@example.com'
        ]);
        $user = User::find($user_id->toNative());
        $this->assertTrue(Hash::check('password1234', $user->password));
    }

    /**
     * @test
     * @covers ::getEloquentUserById
     */
    public function getEloquentUserById()
    {
        /** @var User $factory_user */
        $factory_user = User::factory()->create([
            'nickname' => 'テストニックネーム',
            'email'    => 'test@example.com',
            'password' => Hash::make('password1234')
        ]);
        $repo = new UserRegisterSqlRepositoryImpl;
        $user = $repo->getEloquentUserById($factory_user->id);

        $this->assertEquals('テストニックネーム', $user->nickname, '取得したユーザーのnicknameが同じであること');
        $this->assertEquals('test@example.com', $user->email, '取得したユーザーのemailが同じであること');
        $this->assertTrue(Hash::check('password1234', $user->password));
    }
}
