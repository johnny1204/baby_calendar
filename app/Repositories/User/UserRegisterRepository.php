<?php
namespace App\Repositories\User;

use App\Domains\User\RegisterUserEntity;
use App\Domains\ValueObjects\User\UserId;
use App\Models\User;

/**
 * @package App\Repositories\User
 * @method UserId register()
 * @method User getEloquentUserById()
 */
interface UserRegisterRepository
{
    /**
     * @param RegisterUserEntity $user
     * @return UserId
     */
    public function register(RegisterUserEntity $user): UserId;

    /**
     * ログイン処理はDomainObjectをわざわざ作るよりEloquentを使う
     *
     * @param integer $id
     * @return User
     */
    public function getEloquentUserById(int $id): User;
}
