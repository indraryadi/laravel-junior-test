<?php

namespace Database\Seeders;

use App\Models\employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        employee::factory(30)->create();
    }
}
