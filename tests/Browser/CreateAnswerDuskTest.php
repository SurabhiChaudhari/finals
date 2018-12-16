<?php
namespace Tests\Browser;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
class AddAnswerTest extends DuskTestCase
{
    /**
     * A Dusk test Create Answer is Created
     *
     * @return void
     */
    public function testAddAnswer()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000')
                ->assertTitle('Laravel')
                ->clickLink('Login')
                ->type('#email', 'suru200@gmail.com')
                ->type('#password', 'Welcome1')
                ->press('button[type="submit"]')
                ->assertSee('Questions')
                ->clickLink('Create a Question')
                ->assertSee('Create Question')
                ->type('#body', 'what is Laravel?')
                ->press('#submit')
                ->assertSee('IT WORKS!')
                ->clickLink('View')
                ->assertSee('Question')
                ->clickLink('Answer Question')
                ->type('#body', 'Laravel is a Framework')
                ->press('#submit')
                ->assertSee('Saved')
                ->clickLink('View')
                ->clickLink('Edit Answer')
                ->type('#body', 'Laravel is a framework which can be used build perfect php applications')
                ->press('#submit')
                ->assertSee('Updated')
                ->press('#submit')
                ->assertSee('Delete')
                ->press('#navbarDropdown')
                ->clickLink('Logout')
                ->assertTitle('Laravel');
        });
    }
}
