<?php

namespace Tests\Unit;

use App\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelpersTest extends TestCase
{
    /** @test */
    public function can_get_formatted_price()
    {
        $product = factory(Product::class)->make([
            'name' => 'Product 1',
            'price' => 29999
        ]);

        $this->assertEquals('$299.99', presentPrice($product->price));
    }
}
