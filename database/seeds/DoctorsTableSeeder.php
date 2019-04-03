<?php

use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Doctor::class)->create([
            'name' => 'Doctor',
            'email' => 'doctor@example.com',
            'password' => bcrypt('doctor'),
        ]);
    }
}
