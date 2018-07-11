<?php

namespace Tests\Feature;

use App\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewLandingPageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function landing_page_loads_correctly()
    {
        //Arrange

        //Act
        $response = $this->get('/');

        //Assert
        $response->assertStatus(200);
        $response->assertSee('Laravel Ecommerce');
        $response->assertSee('Includes multiple products');
    }

    /** @test */
    public function featured_product_is_visible()
    {
        // Arrange
        $featuredProduct = factory(Product::class)->create([
            'featured' => true,
            'name' => 'Laptop 1',
            'price' => 149999,
        ]);

        // Act
        $response = $this->get('/');

        // Assert
        $response->assertSee($featuredProduct->name);
        $response->assertSee('$1499.99');
    }

    /** @test */
    public function not_featured_product_is_not_visible()
    {
        // Arrange
        $notFeaturedProduct = factory(Product::class)->create([
            'featured' => false,
            'name' => 'Laptop 1',
            'price' => 149999,
        ]);

        // Act
        $response = $this->get('/');

        // Assert
        $response->assertDontSee($notFeaturedProduct->name);
        $response->assertDontSee('$1499.99');
    }
}
