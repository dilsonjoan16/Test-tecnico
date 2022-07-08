<?php

namespace Tests\Feature\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    function test_new_users_can_register()
    {
        $response = $this->post('/register', [
            'name' => 'Mi Casino Test',
            'email' => 'dilson@micasino.com',
            'password' => 'Usuar10#',
            'password_confirmation' => 'Usuar10#',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
