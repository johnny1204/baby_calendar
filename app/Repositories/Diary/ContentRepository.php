<?php

namespace App\Repositories\Diary;

use App\Domains\ValueObjects\Diary\ChildId;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

/**
 * @package App\Repositories\Diary
 */
interface ContentRepository
{
    /**
     * @param ChildId $userId
     * @param Carbon $dateFrom
     * @param Carbon $dateTo
     * @return Collection
     */
    public function fetchEventsByBetweenDate(ChildId $userId, Carbon $dateFrom, Carbon $dateTo): Collection;
}
