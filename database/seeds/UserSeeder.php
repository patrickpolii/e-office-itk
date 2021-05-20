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
            'email' => 'patrick@student.itk.ac.id',
            'password' => bcrypt('12345678'),
        ]);

        $mahasiswa->assignRole('mahasiswa');

        $mahasiswa = User::create([
            'name' => 'Holilrurahman',
            'email' => 'holil@student.itk.ac.id',
            'password' => bcrypt('12345678'),
        ]);

        $mahasiswa->assignRole('mahasiswa');
    }
}
