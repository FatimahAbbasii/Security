<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UserLoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_logs_in_a_user_with_valid_credentials()
    {
        $user = User::factory()->create([
            'password' => bcrypt($password = 'Password@123'),
        ]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $password,
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function it_fails_to_log_in_a_user_with_invalid_credentials()
    {
        $user = User::factory()->create([
            'password' => bcrypt('Password@123'),
        ]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'InvalidPassword',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }
}
