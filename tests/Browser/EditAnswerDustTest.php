<?php
namespace Tests\Browser;
use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
class EditAnswerTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = factory(User::class)->make();
        $user->save();
        $this->browse(function ($browser) use ($user) {
            $browser->visit('http://localhost:8000')
                ->assertTitle('Laravel')
                ->clickLink('Login')
                ->type('#email', 'suru200@gmail.com')
                ->type('#password', 'Welcome1')
                ->press('button[type="submit"]')
                ->assertSee('Questions')
                ->clickLink('View')
                ->assertSee('Question')
                ->clickLink('Answer Question')
                ->type('#body', 'This is the Answer')
                ->press('#submit')
                ->assertSee('Saved')
                ->clickLink('View')
                ->clickLink('Edit Answer')
                ->type('#body', 'This is edit feature tested Answer')
                ->press('#submit')
                ->assertSee('Updated')
                ->press('#navbarDropdown')
                ->clickLink('Logout')
                ->assertTitle('Laravel');
        });
    }
}
