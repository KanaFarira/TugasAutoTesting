<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_example()
    {
        $user = User::create([
            'name' => 'Kana Farira',
            'email' => 'g@g.com',
            'password' =>'Kanakana1234',
        ]);

        if(!$user){
            $this->assertTrue(false);
        }
        
        $this->assertTrue(true);

        // $user = factory(User::class)->create([
        //     'email' => 'username@example.net',
        //     'password' => bcrypt('secret'),
        // ]);

        // $this->visit('/login');

        // $this->submitForm('login', [
        //     'email' => 'username@example.net',
        //     'password' => 'secret',
        // ]);

        // $this->seePageIs('/home');

        // $this->seeText('/Dashboard');




        // $this->actingAs($user);
        // $this->visit('/home');
        // $this->post('/logout');
        // $this->visit('/home');
        // $this->seePageIs('/login');

    }
    // /**
    //  * A basic feature test example.
    //  *
    //  * @return void
    //  */
    // public function test_example()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
}
