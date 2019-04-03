<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Patient::class)->create([
            'name' => 'Patient',
            'email' => 'patient@example.com',
            'password' => bcrypt('patient'),
        ]);
    }
}
