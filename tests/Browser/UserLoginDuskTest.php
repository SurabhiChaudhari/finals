<?php
 namespace Tests\Browser;
 use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
 class LoginUserTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLoginUser()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000')
                    ->assertTitle('Laravel')
                    ->clickLink('Login')
                    ->value('#email', 'suru200@gmail.com')
                    ->value('#password', 'Welcome1')
                  ->click('button[type="submit"]')
                    ->assertSee('Questions')
                    ->click('#navbarDropdown')
                    ->clickLink('Logout')
                    ->assertSee('Laravel');
        });
    }
}
