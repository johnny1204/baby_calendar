<?php

namespace Unit\Http\Requests\Diary;

use App\Http\Requests\Diary\ListRequest;
use Tests\TestCase;

/**
 * @package Unit\Http\Requests\Diary
 *
 * @coversDefaultClass \App\Http\Requests\Diary\ListRequest
 */
class ListRequestTest extends TestCase
{
    /**
     * @test
     * @covers ::rules
     * @param array $inputs
     * @param array $messages
     * @dataProvider rulesData
     */
    public function rules(array $inputs, array $messages)
    {
        $request = new ListRequest;
        $validator = validator($inputs, $request->rules(), $request->messages(), $request->attributes());
        if (empty($messages)) {
            $this->assertTrue($validator->passes(), 'validation通過');
        } else {
            $this->assertFalse($validator->passes(), 'validationエラーあり');
            $errors = $validator->errors()->getMessages();
            foreach ($messages as $key => $value) {
                $this->assertEquals($value, $errors[$key][0], 'エラーメッセージが一致すること');
                unset($errors[$key]);
            }

            $this->assertEmpty($errors, '全エラーメッセージ確認');
        }
    }

    /**
     * @return array
     */
    public function rulesData(): array
    {
        return [
            '正常' => [
                'inputs' => [
                    'date_from' => '2021-02-05',
                    'date_to'   => '2021-02-06',
                    'child_id'  => 1,
                ],
                'messages' => [],
            ],
            'date_fromなし' => [
                'inputs' => [
                    'date_from' => '',
                    'date_to'   => '2021-02-06',
                    'child_id'  => 1,
                ],
                'messages' => [
                    'date_from' => '取得開始日は必須です。',
                    'date_to'   => '取得終了日には、取得開始日より後の日付を指定してください。'
                ],
            ],
            'date_from日付以外' => [
                'inputs' => [
                    'date_from' => '1',
                    'date_to'   => '2021-02-06',
                    'child_id'  => 1,
                ],
                'messages' => [
                    'date_from' => '取得開始日には有効な日付を指定してください。'
                ],
            ],
            'date_toなし' => [
                'inputs' => [
                    'date_from' => '2021-02-05',
                    'date_to'   => '',
                    'child_id'  => 1,
                ],
                'messages' => [
                    'date_to' => '取得終了日は必須です。'
                ],
            ],
            'date_to日付以外' => [
                'inputs' => [
                    'date_from' => '2021-02-05',
                    'date_to'   => '1',
                    'child_id'  => 1,
                ],
                'messages' => [
                    'date_to' => '取得終了日には有効な日付を指定してください。'
                ],
            ],
            'date_toがdate_fromより前' => [
                'inputs' => [
                    'date_from' => '2021-02-05',
                    'date_to'   => '2021-02-04',
                    'child_id'  => 1,
                ],
                'messages' => [
                    'date_to' => '取得終了日には、取得開始日より後の日付を指定してください。'
                ],
            ],
            'child_idなし' => [
                'inputs' => [
                    'date_from' => '2021-02-05',
                    'date_to'   => '2021-02-06',
                    'child_id'  => '',
                ],
                'messages' => [
                    'child_id' => '対象子どもIDは必須です。'
                ],
            ],
            'child_id数値以外' => [
                'inputs' => [
                    'date_from' => '2021-02-05',
                    'date_to'   => '2021-02-06',
                    'child_id'  => 'aaa',
                ],
                'messages' => [
                    'child_id' => '対象子どもIDは整数で指定してください。'
                ],
            ],
        ];
    }
}
