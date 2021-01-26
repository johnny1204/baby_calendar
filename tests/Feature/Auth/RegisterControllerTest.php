<?php

namespace Feature\Auth;

use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

/**
 * @coversDefaultClass \App\Http\Controllers\Auth\RegisterController
 */
class RegisterControllerTest extends TestCase
{
    /**
     * @test
     * @covers ::register
     */
    public function register()
    {
        Event::fake();
        $response = $this->post('register', [
            'nickname'         => 'ニックネーム',
            'email'            => 'test@example.com',
            'password'         => 'password1234',
            'password_confirmation' => 'password1234'
        ]);

        Event::assertDispatched(Registered::class, fn (Registered $event) => $event->user->email === 'test@example.com');
        $response->assertRedirect(route('home'));
    }
}
