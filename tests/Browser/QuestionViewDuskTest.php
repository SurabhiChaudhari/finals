<?php
namespace Tests\Browser;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
class AddQuestionTest extends DuskTestCase
{
    /**
     * A Dusk test  to check View Question Functionality
     *
     * @return void
     */
    public function testAddQuestion()
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
                ->type('#body', 'What is Dusk Testing?')
                ->press('#submit')
                ->assertSee('IT WORKS!')
                ->clickLink('View')
                ->assertSee('Question')
                ->clickLink('Edit Question')
                ->assertSee('Body')
                ->type('#body', 'Why Dusk?')
                ->click('#submit')
                ->assertSee('Saved')
                ->press('#submit')
                ->assertSee('Deleted')
                ->press('#navbarDropdown')
                ->clickLink('Logout')
                ->assertTitle('Laravel');
        });
    }
}
