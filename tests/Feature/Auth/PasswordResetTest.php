<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PasswordResetTest extends TestCase
{
    use RefreshDatabase;

    public function test_password_reset_routes_are_disabled(): void
    {
        $this->get('/forgot-password')->assertNotFound();

        $this->post('/forgot-password', [
            'email' => 'admin@example.com',
        ])->assertNotFound();

        $this->get('/reset-password/fake-token')->assertNotFound();

        $this->post('/reset-password', [
            'token' => 'fake-token',
            'email' => 'admin@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ])->assertNotFound();
    }
}
