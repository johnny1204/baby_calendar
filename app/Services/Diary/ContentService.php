<?php

namespace App\Services\Diary;

use App\Domains\ValueObjects\Diary\ChildId;
use App\Repositories\Diary\ContentRepository;
use Carbon\Carbon;

/**
 * @package App\Services\Diary
 */
class ContentService
{
    /**
     * @return array
     */
    public function getApiResponse(array $params): array
    {
        /** @var ContentRepository $repository */
        $repository = app(ContentRepository::class);
        $result = $repository->fetchEventsByBetweenDate(
            ChildId::fromNative($params['child_id']),
            Carbon::parse($params['date_from']),
            Carbon::parse($params['date_to'])
        );
        
        return ['result' => $result];
    }
}
