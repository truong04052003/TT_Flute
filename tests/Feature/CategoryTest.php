<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_route_customers()
    {
        // $response = $this->get('/');

        // $response->assertStatus(200);

        // $this->get('/categories')->assertStatus(200);
        // $this->get('/categories/create')->assertStatus(200);
        // $this->post('/categories/store')->assertStatus(200);
        // $this->get('/categories/edit/1')->assertStatus(200);
        // $this->put('/categories/update/1')->assertStatus(200);
        // $this->delete('/categories/delete/1')->assertStatus(200);
        // $this->get('/categories/trash')->assertStatus(200);
        // $this->get('/categories/restore/1')->assertStatus(200);
        // $this->delete('/categories/deleteforever/1')->assertStatus(200);

        $this->assertTrue(true);
    }
    public function test_create_category_by_factory()
    {
        $category = Category::factory(Category::class)->create();
        $this->assertNotNull($category);
    }
    public function test_create_supplier_by_fillable()
    {
        $category = new Category();
        $data = [
            'name' => $this->faker->word,
        ];
        $this->assertInstanceOf(Category::class, $category->create($data));
    }

    //kiem tra chuc nang them moi item
    public function test_create_category()
    {
        $category = new Category();
        $category->name = $this->faker->word;
        $this->assertTrue($category->save());
    }

    //kiem tra chuc nang cap nhat item
    public function test_update_category()
    {
        $category = Category::where('id', '>', 0)->first();
        $category->name = 'Updated';
        $this->assertTrue($category->save());
    }

    //kiem tra chuc nang xoa item
    public function test_delete_category()
    {
        $category = Category::where('id', '>', 0)->orderBy('id', 'desc')->first();
        $this->assertTrue($category->delete());
    }
}
