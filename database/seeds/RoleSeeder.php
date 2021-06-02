<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'akademik',
            'guard_name' => 'web' 
        ]);

        Role::create([
            'name' => 'mahasiswa',
            'guard_name' => 'web' 
        ]);

        Role::create([
            'name' => 'unit_kerja',
            'guard_name' => 'web' 
        ]);

        
    }
}
