<?php

namespace App\Repositories\Diary;

use Carbon\Carbon;
use App\Models\DiaryContent;
use App\Domains\ValueObjects\Diary\ChildId;
use Illuminate\Database\Eloquent\Collection;

/**
 * @package App\Repositories\Diary
 */
class ContentSqlRepositoryImpl implements ContentRepository
{
    /**
     * @param Carbon $dateFrom
     * @param Carbon $dateTo
     * @return Collection
     */
    public function fetchEventsByBetweenDate(ChildId $childId, Carbon $dateFrom, Carbon $dateTo): Collection
    {
        $query = DiaryContent::query();
        $query->whereChildId($childId->toNative());
        $query->whereDate('evented_at', '>=', $dateFrom);
        $query->whereDate('evented_at', '<=', $dateTo);
        $query->orderBy('evented_at');
        return $query->get();
    }
}
