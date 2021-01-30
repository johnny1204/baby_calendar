<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserRegisterType
 *
 * @property int $id
 * @property int $user_id
 * @property int $type
 * @property string|null $token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserRegisterType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRegisterType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRegisterType query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRegisterType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRegisterType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRegisterType whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRegisterType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRegisterType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRegisterType whereUserId($value)
 * @mixin Eloquent
 */
class UserRegisterType extends Model
{
    //
}
