<?php

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'id_prodi' => '11',
            'id_users' => '2',
            'nim' => '11171003' 
        ]);

        DB::table('mahasiswa')->insert([
            'id_prodi' => '10',
            'id_users' => '3',
            'nim' => '10171064' 
        ]);

    }
}
