<?php

namespace App\Http\Controllers\Api\Event;

use Illuminate\Routing\Controller;

/**
 * @package App\Http\Controllers\Api\Event
 *
 * @OA\Get(
 *   path="/api/events/",
 *   tags={"カレンダーイベント"},
 *   summary="カレンダーイベント取得",
 *   @OA\Parameter(
 *      name="date_from",
 *      description="取得開始日",
 *      required=true,
 *      in="query",
 *      @OA\Schema(
 *        type="string",
 *        format="date",
 *        example="2021-02-05",
 *      ),
 *   ),
 *   @OA\Parameter(
 *      name="date_to",
 *      description="取得終了日",
 *      required=true,
 *      in="query",
 *      @OA\Schema(
 *        type="string",
 *        format="date",
 *        example="2021-02-06",
 *      ),
 *   ),
 *   @OA\Parameter(
 *     ref="#/components/parameters/X-XSRF-TOKEN"
 *   ),
 *   @OA\Response(
 *     response="200",
 *     description="success",
 *     @OA\JsonContent(
 *       @OA\Property(
 *         type="array",
 *         property="result",
 *         description="結果",
 *         @OA\Items(
 *           required={"start_date","end_date","event_name","excretion","sleep","memo"},
 *           @OA\Property(
 *             property="start_date",
 *             type="string",
 *             format="datetime",
 *             description="イベント日",
 *             example="2021-02-05 00:00:00",
 *           ),
 *           @OA\Property(
 *             property="end_date",
 *             type="string",
 *             format="datetime",
 *             description="イベント日",
 *             example="2021-02-05 01:00:00",
 *           ),
 *           @OA\Property(
 *             property="event_name",
 *             type="boolean",
 *             description="イベント名",
 *           ),
 *           @OA\Property(
 *             property="excretion",
 *             type="object",
 *             description="排泄",
 *             @OA\Property(
 *               property="small",
 *               type="boolean",
 *               description="小"
 *             ),
 *             @OA\Property(
 *               property="big",
 *               type="boolean",
 *               description="大"
 *             ),
 *           ),
 *           @OA\Property(
 *             property="sleep",
 *             type="boolean",
 *             description="睡眠",
 *           ),
 *           @OA\Property(
 *             property="memo",
 *             type="string",
 *             description="その他",
 *             example="メモ"
 *           ),
 *         )
 *       )
 *     )
 *   ),
 *   @OA\Response(
 *     response="400",
 *     description="パラメータ不足",
 *   ),
 *   @OA\Response(
 *     response="500",
 *     description="Internet Server Error"
 *   )
 * )
 */
class ListController extends Controller
{
    public function __invoke()
    {
    }
}
