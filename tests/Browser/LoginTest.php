<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_cannot_login_with_invalid_credentials()
    {
        $user = factory(User::class)->create([
            'email' => 'user@user.com',
        ]);

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->visit('/login')
                    ->assertSee('Returning Customer')
                    ->type('email', 'user@user.com')
                    ->type('password', 'wrong-password')
                    ->press('Login')
                    ->assertPathIs('/login')
                    ->assertSee('credentials do not match');
        });
    }

    /** @test */
    public function a_user_can_login_with_valid_credentials()
    {
        $user = factory(User::class)->create([
            'email' => 'user@user.com',
        ]);

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->visit('/login')
                    ->assertSee('Returning Customer')
                    ->type('email', 'user@user.com')
                    ->type('password', 'secret')
                    ->press('Login')
                    ->assertPathIs('/');
        });
    }
}
