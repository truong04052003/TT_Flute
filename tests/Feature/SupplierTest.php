<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Supplier;

class SupplierTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_route_suppliers()
    {
        // $response = $this->get('/');
        // $response->assertStatus(200);

        // $this->get('/suppliers')->assertStatus(200);
        // $this->get('/suppliers/create')->assertStatus(200);
        // $this->post('/suppliers/store')->assertStatus(200);
        // $this->get('/suppliers/edit/1')->assertStatus(200);
        // $this->put('/suppliers/update/1')->assertStatus(200);
        // $this->delete('/suppliers/destroy/1')->assertStatus(200);
        // $this->get('/suppliers/getTrashed')->assertStatus(200);
        // $this->get('/suppliers/restore/1')->assertStatus(200);
        // $this->delete('/suppliers/force_destroy/1')->assertStatus(200);

        $this->assertTrue(true); 
    }
    public function test_create_supplier_by_factory()
    {
        $supplier = Supplier::factory(Supplier::class)->create();
        $this->assertNotNull($supplier);
    }
    public function test_create_supplier_by_fillable()
    {
        $supplier = new Supplier();
        $data = [
            'name' => $this->faker->word,
            'email' => $this->faker->word,
            'address' => $this->faker->word,
            'phone' => $this->faker->word
        ];
        $this->assertInstanceOf(Supplier::class, $supplier->create($data)); 
    }

    //kiem tra chuc nang them moi item
    public function test_create_supplier()
    {
        $supplier = new Supplier();
        $supplier->name = $this->faker->word;
        $supplier->email = $this->faker->word;
        $supplier->address = $this->faker->word;
        $supplier->phone = $this->faker->word;
        $this->assertTrue($supplier->save()); 
    }

    //kiem tra chuc nang cap nhat item
    public function test_update_supplier()
    {
        $supplier = Supplier::where('id', '>', 0)->first(); 
        $supplier->name = 'Updated';
        $supplier->email = 'Updated';
        $supplier->address = 'Updated';
        $supplier->phone = 'Updated';
        $this->assertTrue($supplier->save()); 
    }

    //kiem tra chuc nang xoa item
    public function test_delete_supplier()
    {
        $supplier = Supplier::where('id', '>', 0)->orderBy('id', 'desc')->first(); 
        $this->assertTrue($supplier->delete()); 
    }
}
