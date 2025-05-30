<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create(['name' => 'customer']);
        Role::create(['name' => 'storage-staff']);
        Role::create(['name' => 'sales']);
    }
}
