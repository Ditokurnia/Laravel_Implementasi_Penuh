<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAuth()
    {
        $pass = "Password123";
        $hashPass = Hash::make(env('SALT_PASSWORD') . $pass);
        dd(Hash::check(env('SALT_PASSWORD') . $pass, $hashPass));
    }
}
