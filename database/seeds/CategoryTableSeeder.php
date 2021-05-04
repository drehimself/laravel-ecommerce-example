<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'دسته یک', 'slug' => 'cat1', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'دسته دوم', 'slug' => 'cat2', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'دسته سوم', 'slug' => 'cat3', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'دسته چهارم', 'slug' => 'cat4', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'دسته پنجم', 'slug' => 'cat5', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'دسته ششم', 'slug' => 'cat6', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'دسته هفتم', 'slug' => 'cat7', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
