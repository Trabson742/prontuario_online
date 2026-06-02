<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class FactoryDevSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->attachRole("medico")->count(10)->create();
        User::factory()->attachRole("paciente")->count(20)->create();
        User::factory()->attachRole("secretaria")->count(5)->create();
    }
}
