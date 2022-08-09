<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\companie::factory(5)->create();
    }
}
