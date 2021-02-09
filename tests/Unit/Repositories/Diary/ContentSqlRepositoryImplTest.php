<?php

namespace Unit\Repositories\Diary;

use App\Domains\ValueObjects\Diary\ChildId;
use App\Models\Child;
use App\Models\DiaryContent;
use App\Repositories\Diary\ContentSqlRepositoryImpl;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Tests\TestCase;

/**
 * @package Unit\Repositories\Diary
 *
 * @coversDefaultClass \App\Repositories\Diary\ContentSqlRepository
 */
class ContentSqlRepositoryImplTest extends TestCase
{
    use HasFactory;

    /**
     * @test
     * @covers ::fetchEventsByBetweenDate
     */
    public function getApiResponse()
    {
        Carbon::setTestNow('2021-02-09 13:00');

        $child = Child::factory()->create();
        DiaryContent::factory(3)->create([
            'child_id'   => $child->id,
            'evented_at' => Carbon::getTestNow()
        ]);

        // Past Content
        DiaryContent::factory()->create([
            'child_id'   => $child->id,
            'evented_at' => Carbon::parse('2021-02-06')
        ]);

        // Future Content
        DiaryContent::factory()->create([
            'child_id'   => $child->id,
            'evented_at' => Carbon::parse('2021-02-14')
        ]);

        // Another Child Content
        DiaryContent::factory()->create([
            'child_id'   => Child::factory()->create()->id,
            'evented_at' => Carbon::parse('2021-02-07')
        ]);

        $repository = new ContentSqlRepositoryImpl;
        $results = $repository->fetchEventsByBetweenDate(
            new ChildId($child->id),
            Carbon::parse('2021-02-07'),
            Carbon::parse('2021-02-13')
        );

        $this->assertCount(3, $results, '期間内の件数は3件のはず');
    }
}
