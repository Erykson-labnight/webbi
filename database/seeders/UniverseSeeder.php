<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniverseSeeder extends Seeder
{
    public function run()
    {
        DB::table('universes')->insert([
            ['name' => 'Marvel'],
            ['name' => 'DC'],
            ['name' => 'Dark Horse'],
        ]);
    }
}
