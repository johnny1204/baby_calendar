<?php

namespace Tests\Unit\Services;

use App\Models\DiaryContent;
use App\Repositories\Diary\ContentRepository;
use App\Services\Diary\ContentService;
use Mockery\MockInterface;
use Tests\TestCase;

/**
 * @coversDefaultClass \App\Services\Diary\ContentService
 */
class ContentServiceTest extends TestCase
{
    /**
     * @test
     * @covers ::getApiResponse
     */
    public function getApiResponse()
    {
        $records = DiaryContent::factory(2)->create();
        $this->partialMock(ContentRepository::class, function (MockInterface $mock) use ($records) {
            $mock->shouldReceive('fetchEventsByBetweenDate')->once()->andReturn($records);
        });
        
        $service = new ContentService;
        $results = $service->getApiResponse(['child_id' => 1, 'date_from' => '2021-02-14', 'date_to' => '2021-02-15']);

        $this->assertEquals(
            $records->pluck('id')->sortBy('id')->toArray(),
            collect($results['result'])->pluck('id')->sortBy('id')->toArray()
        );
    }
}
