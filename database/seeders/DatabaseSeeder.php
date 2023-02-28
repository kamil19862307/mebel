<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AdminUser;
use App\Models\Color;
use App\Models\Phone;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Product::factory(30)->create([
            'image' => '/product1.jpg',
        ]);

        Color::factory(10)->create();

        Phone::factory(10)->create([
            'admin_user_id' => 1,
        ]);

        AdminUser::factory(1)->create([
            'name' => 'admin',
            'email' => 'admin@admin.ru',
            'password' => bcrypt('admin'),
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
