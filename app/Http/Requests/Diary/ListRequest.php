<?php

namespace App\Http\Requests\Diary;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @package App\Http\Requests\Diary
 */
class ListRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'date_from' => ['required', 'date'],
            'date_to'   => ['required', 'date', 'after:date_from'],
            'child_id'  => ['required', 'int'],
        ];
    }

    /**
     * @return array
     */
    public function attributes(): array
    {
        return [
            'date_from' => '取得開始日',
            'date_to'   => '取得終了日',
            'child_id'  => '対象子どもID',
        ];
    }
}
