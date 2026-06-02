<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        app()[
            \Spatie\Permission\PermissionRegistrar::class
        ]->forgetCachedPermissions();

        $this->call([SpatieSeed::class]);

        if (app()->environment("local")) {
            // $this->call([UserSeeder::class, DummyDataSeeder::class]);
            $this->call([FactoryDevSeed::class]);
        }
    }
}
