<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteUser()
    {
        $user = User::find(46);
        $user->delete();
        $user = User::all();
        $this->assertDatabaseMissing('users',['id' => '46']);
    }
}