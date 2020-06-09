<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_user_can_view_the_login_form()
    {
        $response = $this->get('/login');

        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }


    /**
     * @test
     *
     * @return void
     */
    public function user_can_login_with_corect_credentials()
    {
        $institution = factory(\App\Institution::class)->create(['active' => true]);
        $user = factory(\App\User::class)->create(['institution_id' => $institution->id, 'password' => Hash::make($password = '11111111')]);

        $response = $this->post('/login', ['email' => $user->email, 'password' => $password]);

        $response->assertStatus(302)
            ->assertRedirect('/dashboard')
            ->assertLocation('/dashboard');

        $this->assertAuthenticatedAs($user);
    }

    /**
     * @test
     *
     * @return void
     */
    public function user_cannot_login_with_wrong_password()
    {
        $institution = factory(\App\Institution::class)->create(['active' => true]);
        $user = factory(\App\User::class)->create(['institution_id' => $institution->id, 'password' => Hash::make($password = '11111111')]);

        $response = $this->post('/login', ['email' => $user->email, 'password' => '123']);

        $response->assertStatus(302)
            ->assertSessionHasErrors('email')
            ->assertRedirect('/');

        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }

    /**
     * @test
     *
     * @return void
     */
    public function user_cannot_login_with_wrong_email()
    {
        $institution = factory(\App\Institution::class)->create(['active' => true]);
        $user = factory(\App\User::class)->create(['institution_id' => $institution->id, 'password' => Hash::make($password = '11111111')]);

        $response = $this->post('/login', ['email' => 'wrong@email.com', 'password' => '11111111']);

        $response->assertStatus(302)
            ->assertSessionHasErrors('email')
            ->assertRedirect('/');

        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }

    /**
     * @test
     *
     * @return void
     */
    public function user_can_logout()
    {
        $institution = factory(\App\Institution::class)->create(['active' => true]);
        $user = factory(\App\User::class)->create(['institution_id' => $institution->id, 'password' => Hash::make($password = '11111111')]);

        $this->actingAs($user);

        $response = $this->post('/logout', ['email' => $user->email, 'password' => '123']);

        $response->assertStatus(302)
            ->assertRedirect('/');

        $this->assertGuest();
    }

    /**
     * @test
     *
     * @return void
     */
    public function user_can_login_with_remember_me_functionality()
    {
        $institution = factory(\App\Institution::class)->create(['active' => true]);
        $user = factory(\App\User::class)->create(['institution_id' => $institution->id, 'password' => Hash::make($password = '11111111')]);

        $response = $this->post('/login', ['email' => $user->email, 'password' => $password, 'remember' => true]);

        $user = $user->fresh();

        $response->assertStatus(302)
            ->assertRedirect('/dashboard')
            ->assertLocation('/dashboard')
            ->assertCookie(auth()->guard()->getRecallerName(), vsprintf('%s|%s|%s', [
                $user->id,
                $user->getRememberToken(),
                $user->password,
            ]));

        $this->assertAuthenticatedAs($user);
    }

    /**
     * @test
     *
     * @return void
     */
    public function user_cannot_logout_when_is_not_authenticated()
    {
        $response = $this->post('/logout');

        $response->assertStatus(302)
            ->assertRedirect('/');

        $this->assertGuest();
    }

    /**
     * @test
     *
     * @return void
     */
    public function user_cannot_view_login_form_when_is_authenticated()
    {
        $institution = factory(\App\Institution::class)->create();
        $user = factory(\App\User::class)->create(['institution_id' => $institution->id, 'password' => Hash::make($password = '11111111')]);

        $response = $this->actingAs($user)->get('/login');

        $response->assertStatus(302)
            ->assertRedirect('/');

        $this->assertAuthenticated();
    }

    /**
     * @test
     *
     * @return void
     */
    public function user_cannot_make_more_then_five_attempts_in_one_minute_to_login()
    {
        $institution = factory(\App\Institution::class)->create();
        $user = factory(\App\User::class)->create(['institution_id' => $institution->id, 'password' => Hash::make($password = '11111111')]);

        foreach (range(0, 5) as $_) {
            $response = $this->from('/login')->post('/login', ['email' => $user->email, 'password' => 'wrong password']);
        };

        $response->assertRedirect('/login')
            ->assertSessionHasErrors('email');

        $this->assertRegExp(
            sprintf('/^%s$/', str_replace('\:seconds', '\d+', preg_quote(__('auth.throttle'), '/'))),
            collect(
                $response
                    ->baseResponse
                    ->getSession()
                    ->get('errors')
                    ->getBag('default')
                    ->get('email')
            )->first()
        );

        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }
}
