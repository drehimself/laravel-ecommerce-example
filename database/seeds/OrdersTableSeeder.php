<?php

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
        factory(App\Order::class, 100)->create()->each(function ($order) {
            $order->created_at = \Carbon\Carbon::now()->addDays(rand(-10, 0));
            $order->save();
        });
    }
}
