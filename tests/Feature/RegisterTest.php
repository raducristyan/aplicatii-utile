<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use App\Institution;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     *
     * @return void
     */
    public function user_can_view_the_register_form()
    {
        $response = $this->get('/register');

        $response->assertSuccessful();
        $response->assertViewIs('auth.register');
    }

    /**
     * @test
     *
     * @return void
     */
    public function user_can_register_with_corect_data()
    {
        $institution = factory(\App\Institution::class)->create();
        $user = factory(\App\User::class)->create(['institution_id' => $institution->id, 'password' => Hash::make($password = '11111111')]);

        $response = $this->post(
            '/register',
            [
                'cif' => $institution->cif,
                'name' => $institution->name,
                'first_name' => $user->first_name,
                'cif' => $user->cif,
                'email' => $user->email,
                'password' => $password
            ]
        );

        $response->assertStatus(302)
            ->assertRedirect('/');

        $this->assertCount(1, $users = User::all());
        $this->assertCount(1, $institutions = Institution::all());

        $this->assertGuest();

        $this->assertEquals($user->first_name, $users->first()->first_name);
        $this->assertEquals($user->last_name, $users->first()->last_name);

        $this->assertEquals($institution->name, $institutions->first()->name);
        $this->assertEquals($institution->cif, $institutions->first()->cif);

        $this->assertEquals($users->first()->institution_id, $institutions->first()->id);

        $this->assertEquals(0, $institutions->first()->active);
    }
}
