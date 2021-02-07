<?php

namespace Unit\Http\Requests;

use App\Http\Requests\User\RegisterRequest;
use App\Models\User;
use Database\Factories\UserFactory;
use Tests\TestCase;

/**
 * @coversDefaultClass \App\Http\Requests\User\RegisterRequest
 */
class RegisterRequestTest extends TestCase
{
    /**
     * @test
     * @covers ::rules
     * @dataProvider rulesData
     * @param array $inputs
     * @param array $messages
     */
    public function rules(array $inputs, array $messages)
    {
        User::factory()->create(['email' => 'multiple@example.com']);
        $request = new RegisterRequest;
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
    public function rulesData()
    {
        return [
            '正常' => [
                'inputs' => [
                    'nickname'              => 'ニックネーム',
                    'email'                 => 'test@example.com',
                    'password'              => 'password1234',
                    'password_confirmation' => 'password1234',
                ],
                'messages' => []
            ],
            'nicknameなし' => [
                'inputs' => [
                    'nickname'              => '',
                    'email'                 => 'test@example.com',
                    'password'              => 'password1234',
                    'password_confirmation' => 'password1234',
                ],
                'messages' => [
                    'nickname' => 'ニックネームは必須です。'
                ]
            ],
            'nickname文字列以外' => [
                'inputs' => [
                    'nickname'              => 1,
                    'email'                 => 'test@example.com',
                    'password'              => 'password1234',
                    'password_confirmation' => 'password1234',
                ],
                'messages' => [
                    'nickname' => 'ニックネームは文字列にしてください。'
                ]
            ],
            'emailなし' => [
                'inputs' => [
                    'nickname'              => 'ニックネーム',
                    'email'                 => '',
                    'password'              => 'password1234',
                    'password_confirmation' => 'password1234',
                ],
                'messages' => [
                    'email' => 'メールアドレスは必須です。'
                ]
            ],
            'emailメールアドレス形式以外' => [
                'inputs' => [
                    'nickname'              => 'ニックネーム',
                    'email'                 => 'aaaaaaaaa',
                    'password'              => 'password1234',
                    'password_confirmation' => 'password1234',
                ],
                'messages' => [
                    'email' => 'メールアドレスには、有効なメールアドレスを指定してください。'
                ]
            ],
            'emailメールアドレス重複' => [
                'inputs' => [
                    'nickname'              => 'ニックネーム',
                    'email'                 => 'multiple@example.com',
                    'password'              => 'password1234',
                    'password_confirmation' => 'password1234',
                ],
                'messages' => [
                    'email' => '既に存在するメールアドレスです。'
                ]
            ],
            'passwordなし' => [
                'inputs' => [
                    'nickname'              => 'ニックネーム',
                    'email'                 => 'test@example.com',
                    'password'              => '',
                    'password_confirmation' => 'password1234',
                ],
                'messages' => [
                    'password' => 'パスワードは必須です。'
                ]
            ],
            'password文字列以外' => [
                'inputs' => [
                    'nickname'              => 'ニックネーム',
                    'email'                 => 'test@example.com',
                    'password'              => 1,
                    'password_confirmation' => 'password1234',
                ],
                'messages' => [
                    'password' => 'パスワードは文字列にしてください。'
                ]
            ],
            'password文字列以外' => [
                'inputs' => [
                    'nickname'              => 'ニックネーム',
                    'email'                 => 'test@example.com',
                    'password'              => 'password1234',
                    'password_confirmation' => 'password12345',
                ],
                'messages' => [
                    'password' => 'パスワードと確認パスワードが一致していません。'
                ]
            ],
        ];
    }
}
