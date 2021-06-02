<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $akademik = User::create([
            'name' => 'Akademik',
            'email' => 'akademik@itk.ac.id',
            'password' => bcrypt('12345678'),
        ]);

        $akademik->assignRole('akademik');

        $mahasiswa = User::create([
            'name' => 'Patrick Polii',
            'email' => '11171003@student.itk.ac.id',
            'password' => bcrypt('12345678'),
        ]);

        $mahasiswa->assignRole('mahasiswa');

        $mahasiswa = User::create([
            'name' => 'Reynaldi Yulizar',
            'email' => '10171064@student.itk.ac.id',
            'password' => bcrypt('12345678'),
        ]);

        $mahasiswa->assignRole('mahasiswa');

        $unit_kerja = User::create([
            'name' => 'JMTI',
            'email' => 'jmti@staff.itk.ac.id',
            'password' => bcrypt('12345678'),
        ]);

        $unit_kerja->assignRole('unit_kerja');

        $unit_kerja = User::create([
            'name' => 'JTIP',
            'email' => 'jtip@staff.itk.ac.id',
            'password' => bcrypt('12345678'),
        ]);

        $unit_kerja->assignRole('unit_kerja');
    }
}
