<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DiaryContent
 *
 * @property int $id
 * @property int $user_id
 * @property int $child_id
 * @property string $evented_at
 * @property int $toilet_small
 * @property int $toilet_big
 * @property int|null $milk
 * @property int $sleep
 * @property string|null $meal
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DiaryContent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DiaryContent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DiaryContent query()
 * @method static \Illuminate\Database\Eloquent\Builder|DiaryContent whereChildId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiaryContent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiaryContent whereEventedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiaryContent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiaryContent whereMeal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiaryContent whereMilk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiaryContent whereSleep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiaryContent whereToiletBig($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiaryContent whereToiletSmall($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiaryContent whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiaryContent whereUserId($value)
 * @mixin Eloquent
 */
class DiaryContent extends Model
{
    //
}
