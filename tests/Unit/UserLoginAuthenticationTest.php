<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserLoginAuthenticationTest extends TestCase
{
    /** @test */
    public function it_authenticates_user_with_valid_credentials()
    {
        $user = User::factory()->create([
            'password' => Hash::make('Password@123'),
        ]);

        $credentials = [
            'email' => $user->email,
            'password' => 'Password@123',
        ];

        $this->assertTrue(auth()->attempt($credentials));
    }

    /** @test */
    public function it_fails_authentication_with_invalid_credentials()
    {
        $user = User::factory()->create([
            'password' => Hash::make('Password@123'),
        ]);

        $credentials = [
            'email' => $user->email,
            'password' => 'InvalidPassword',
        ];

        $this->assertFalse(auth()->attempt($credentials));
    }
}
