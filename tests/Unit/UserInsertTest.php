<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class UserInsertTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = new User();
        $user->name = 'nalanda magam';
        $user->email = 'nalanda@gmail.com';
        $user->email_verified_at = now();
        $user->password = 'nalanda';
        $user->remember_token = str_random(10);
        $this->assertTrue($user->save());

    }
}
