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

        $jurusan = User::create([
            'name' => 'JMTI',
            'email' => 'jmti@staff.itk.ac.id',
            'password' => bcrypt('12345678'),
        ]);

        $jurusan->assignRole('jurusan');

        $jurusan = User::create([
            'name' => 'JTIP',
            'email' => 'jtip@staff.itk.ac.id',
            'password' => bcrypt('12345678'),
        ]);

        $jurusan->assignRole('jurusan');

        $unit_kerja = User::create([
            'name' => 'UPT',
            'email' => 'upt@staff.itk.ac.id',
            'password' => bcrypt('12345678'),
        ]);

        $unit_kerja->assignRole('unit_kerja');

        $arsiparis = User::create([
            'name' => 'Arsiparis',
            'email' => 'arsiparis@staff.itk.ac.id',
            'password' => bcrypt('12345678'),
        ]);

        $arsiparis->assignRole('arsiparis');

        $sekretariat = User::create([
            'name' => 'Sekretariat',
            'email' => 'sekretariat@staff.itk.ac.id',
            'password' => bcrypt('12345678'),
        ]);

        $sekretariat->assignRole('sekretariat');

        $wakil_rektor = User::create([
            'name' => 'Wakil Rektor',
            'email' => 'wakilrektor@staff.itk.ac.id',
            'password' => bcrypt('12345678'),
        ]);

        $wakil_rektor->assignRole('wakil_rektor');

        $rektor = User::create([
            'name' => 'Rektor',
            'email' => 'rektor@staff.itk.ac.id',
            'password' => bcrypt('12345678'),
        ]);

        $rektor->assignRole('rektor');
    }
}
