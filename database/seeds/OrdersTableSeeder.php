<?php

use App\Order;
use App\OrderProduct;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert into orders table
        $order = Order::create([
            'user_id' => null,
            'billing_email' => 'email@email.com',
            'billing_name' => 'Fake Order',
            'billing_address' => 'Fake Address',
            'billing_city' => 'Fake City',
            'billing_province' => 'Fake Province',
            'billing_postalcode' => 'L5B4U2',
            'billing_phone' => '9052145636',
            'billing_name_on_card' => 'Fake Name on Card',
            'billing_discount' => 0,
            'billing_discount_code' => null,
            'billing_subtotal' => 12345,
            'billing_tax' => 1605,
            'billing_total' => 13950,
            'error' => null,
        ]);

        // Insert into order_product table
        OrderProduct::create([
            'order_id' => $order->id,
            'product_id' => 1,
            'quantity' => 1,
        ]);

        OrderProduct::create([
            'order_id' => $order->id,
            'product_id' => 2,
            'quantity' => 1,
        ]);

        // Insert into orders table
        $order2 = Order::create([
            'user_id' => null,
            'billing_email' => 'another@another.com',
            'billing_name' => 'Fake Order 2',
            'billing_address' => 'Fake Address 2',
            'billing_city' => 'Fake City 2',
            'billing_province' => 'Fake Province 2',
            'billing_postalcode' => 'L5B4U2',
            'billing_phone' => '9052145636',
            'billing_name_on_card' => 'Fake Name on Card',
            'billing_discount' => 0,
            'billing_discount_code' => null,
            'billing_subtotal' => 12345,
            'billing_tax' => 1605,
            'billing_total' => 13950,
            'error' => 'Card was declined',
        ]);

        // Insert into order_product table
        OrderProduct::create([
            'order_id' => $order2->id,
            'product_id' => 3,
            'quantity' => 1,
        ]);

        OrderProduct::create([
            'order_id' => $order2->id,
            'product_id' => 4,
            'quantity' => 1,
        ]);

        // Insert into orders table
        $order3 = Order::create([
            'user_id' => null,
            'billing_email' => 'fake@fake.com',
            'billing_name' => 'Fake Order 3',
            'billing_address' => 'Fake Address 3',
            'billing_city' => 'Fake City 3',
            'billing_province' => 'Fake Province 3',
            'billing_postalcode' => 'L5B4U2',
            'billing_phone' => '9052145636',
            'billing_name_on_card' => 'Fake Name on Card',
            'billing_discount' => 0,
            'billing_discount_code' => null,
            'billing_subtotal' => 12345,
            'billing_tax' => 1605,
            'billing_total' => 13950,
            'shipped' => true,
            'error' => null,
        ]);

        // Insert into order_product table
        OrderProduct::create([
            'order_id' => $order3->id,
            'product_id' => 5,
            'quantity' => 1,
        ]);

        OrderProduct::create([
            'order_id' => $order3->id,
            'product_id' => 6,
            'quantity' => 1,
        ]);
    }
}
