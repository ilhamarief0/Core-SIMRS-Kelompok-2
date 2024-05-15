<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['Administrator', 'Admin Dokter', 'Admin UGD'];

        foreach ($roles as $role) {
            Role::factory()->create([
                'role_name' => $role,
            ]);
        }
    }
}
