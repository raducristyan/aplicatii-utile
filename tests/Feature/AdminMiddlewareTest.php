<?php

namespace Tests\Feature;

use App\Http\Middleware\Admin as AdminMiddleware;
use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class AdminMiddlewareTest extends TestCase
{
    use RefreshDatabase;
    use WithoutMiddleware;
    /**
     * @test
     */
    public function a_request_from_a_user_that_is_admin_is_not_redirected()
    {
        $this->withoutMiddleware();

        $institution = factory(\App\Institution::class)->create(['active' => true]);
        $user = factory(\App\User::class)->create(['institution_id' => $institution->id, 'password' => Hash::make($password = '11111111')]);

        $role = factory(\App\Role::class)->create();
        $user->roles()->attach($role);
        $this->actingAs($user);

        $request = Request::create('/dashboard', 'GET');

        $middleware = new AdminMiddleware;

        $response = $middleware->handle($request, function () {
        });
        $this->assertEquals($response, null);
    }

    /**
     * @test
     */
    public function a_request_from_a_user_that_is_not_admin_is_redirected()
    {
        $this->withoutMiddleware();

        $institution = factory(\App\Institution::class)->create(['active' => true]);
        $user = factory(\App\User::class)->create(['institution_id' => $institution->id, 'password' => Hash::make($password = '11111111')]);
        $role = factory(\App\Role::class)->state('user')->create();
        $user->roles()->attach($role);

        $this->actingAs($user);

        $this->assertFalse($user->isAdmin());

        $request = Request::create('/dashboard', 'GET');

        $middleware = new AdminMiddleware;

        $response = $middleware->handle($request, function () {
        });

        $this->assertEquals($response->getStatusCode(), 302);
    }
}
