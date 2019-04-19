<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Admin::class)->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
        ]);

        factory(\App\Models\Admin::class)->create([
            'name' => 'Admin2',
            'email' => 'admin2@example.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
