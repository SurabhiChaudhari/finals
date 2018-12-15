<?php
namespace Tests\Browser;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
class DeleteQuestionTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testDeleteQuestion()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000')
                ->assertTitle('Laravel')
                ->clickLink('Login')
                ->type('#email', 'suru200@gmail.com')
                ->type('#password', 'Welcome1')
                ->press('button[type="submit"]')
                ->assertSee('Questions')
                ->clickLink('View')
                ->assertSee('Question')
                ->press('#submit')
                ->assertSee('Deleted')
                ->press('#navbarDropdown')
                ->clickLink('Logout')
                ->assertTitle('Laravel');
        });
    }
    }
