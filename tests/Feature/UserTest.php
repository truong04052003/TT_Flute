<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_route_users()
    {
        // $response = $this->get('/');
        // $response->assertStatus(200);

        //   $this->get('/users')->assertStatus(200);
        // $this->get('/users/create')->assertStatus(200);
        // $this->post('/users/store')->assertStatus(200);
        // $this->get('/users/edit/1')->assertStatus(200);
        // $this->put('/users/update/1')->assertStatus(200);
        // $this->delete('/users/destroy/1')->assertStatus(200);
        // $this->get('/users/1')->assertStatus(200);
        // $this->post('users/update-password/1')->assertStatus(200);
        $this->assertTrue(true);
  
    }
    public function test_create_user_by_factory()
    {
        $user = User::factory(User::class)->create();
        $this->assertNotNull($user);
    }
    public function test_create_user_by_fillable()
    {
        $user = new User();
        $data = [
            'name' => $this->faker->word,
            'email' => $this->faker->word,
            'password' => $this->faker->word,
            'address' => $this->faker->word,
            'phone' => $this->faker->word,
            'image' => $this->faker->word,
            'gender' => $this->faker->word,
            'group_id'=> $this->faker->word,
        ];
        $this->assertInstanceOf(User::class, $user->create($data));
    }

    //kiem tra chuc nang them moi item
    public function test_create_user()
    {
        $user = new User();
        $user->name = $this->faker->word;
        $this->assertTrue($user->save());
    }

    //kiem tra chuc nang cap nhat item
    public function test_update_user()
    {
        $user = User::where('id', '>', 0)->first();
        $user->name = 'Updated';
        $user->email = 'Updated';
        $user->password = 'Updated';
        $user->address = 'Updated';
        $user->phone = 'Updated';
        $user->image = 'Updated';
        $user->gender = 'Updated';
        $this->assertTrue($user->save());
    }

    //kiem tra chuc nang xoa item
    public function test_delete_user()
    {
        $user = User::where('id', '>', 0)->orderBy('id', 'desc')->first();
        $this->assertTrue($user->delete());
    }
}
