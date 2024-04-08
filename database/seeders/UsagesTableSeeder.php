<?php

namespace Database\Seeders;

use App\Models\Usage;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usage::factory()->count(30)->create();
    }
}
