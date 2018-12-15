<?php
namespace Tests\Browser;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
class RegisterUserTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testRegisterUser()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000')
                ->assertTitle('Laravel')
                ->clickLink('Register')
                ->assertSee('Register')
                ->type('#email', 'sc22633@njit.edu')
                ->type('#password', '1234567')
                ->type('#password-confirm', '123456')
                ->click('button[type="submit"]');
        });
    }
}
