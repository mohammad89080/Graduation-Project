<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $ahmed = Admin::factory()->create([
            'name' => 'admin',
            'email' => 'test@gmail.com',
            'username' => 'admin',
            'password' =>bcrypt('admin') ,
            'com_code' =>1,

        ]);
        $ahmed = Admin::factory()->create([
            'name' => 'admin',
            'email' => 'test@gmail.com',
            'username' => 'admin',
            'password' =>bcrypt('admin') ,
            'com_code' =>1,

        ]);
    }
}
