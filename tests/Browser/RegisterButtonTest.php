<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterButtonTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_if_register_button_is_working()
    {
        $this->browse(function ($browser) {
            $browser->maximize()
                ->visit('/register')
                ->assertSee('Înregistrare')
                ->press('Creează contul');
        });
    }
}
