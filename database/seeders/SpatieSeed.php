<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SpatieSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            "medico" => ["edit-prontuario", "get-prontuario", "get-pacientes"],
            "paciente" => ["store-agenda", "get-prontuario", "get-prontuario"],
            "secretaria" => [
                "edit-agenda",
                "get-pacientes",
                "store-paciente",
                "get-pacientes",
                "edit-paciente",
            ],
        ];
        foreach ($roles as $role => $permissions) {
            $row = Role::updateOrCreate(
                ["name" => $role],
                ["guard_name" => "web"],
            );
            foreach ($permissions as $permission) {
                Permission::updateOrCreate(
                    ["name" => $permission],
                    ["guard_name" => "web"],
                );
                $row->givePermissionTo($permission);
            }
        }
    }
}
