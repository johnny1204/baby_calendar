<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserRelation
 *
 * @property int $id
 * @property int $parent_user_id
 * @property int $user_id
 * @property int $relation_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserRelation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRelation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRelation query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRelation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRelation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRelation whereParentUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRelation whereRelationType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRelation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRelation whereUserId($value)
 * @mixin \Eloquent
 */
class UserRelation extends Model
{
    //
}
