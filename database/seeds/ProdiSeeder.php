<?php

use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prodi')->insert([
            'id_jurusan' => '4',
        	'nama_prodi' => 'Fisika' 
        ]);
        DB::table('prodi')->insert([
            'id_jurusan' => '1',
        	'nama_prodi' => 'Matematika' 
        ]);
        DB::table('prodi')->insert([
            'id_jurusan' => '2',
        	'nama_prodi' => 'Teknik Mesin' 
        ]);
        DB::table('prodi')->insert([
            'id_jurusan' => '2',
        	'nama_prodi' => 'Teknik Elektro' 
        ]);
        DB::table('prodi')->insert([
            'id_jurusan' => '2',
        	'nama_prodi' => 'Teknik Kimia' 
        ]);
        DB::table('prodi')->insert([
            'id_jurusan' => '3',
        	'nama_prodi' => 'Teknik Material dan Metalurgi' 
        ]);
        DB::table('prodi')->insert([
            'id_jurusan' => '5',
        	'nama_prodi' => 'Teknik Sipil' 
        ]);
        DB::table('prodi')->insert([
            'id_jurusan' => '5',
        	'nama_prodi' => 'Perencanaan Wilayah dan Tata Kota' 
        ]);
        DB::table('prodi')->insert([
            'id_jurusan' => '4',
        	'nama_prodi' => 'Teknik Perkapalan' 
        ]);
        DB::table('prodi')->insert([
            'id_jurusan' => '1',
        	'nama_prodi' => 'Sistem Informasi' 
        ]);
        DB::table('prodi')->insert([
            'id_jurusan' => '1',
        	'nama_prodi' => 'Informatika' 
        ]);
        DB::table('prodi')->insert([
            'id_jurusan' => '2',
        	'nama_prodi' => 'Teknik Industri' 
        ]);
        DB::table('prodi')->insert([
            'id_jurusan' => '3',
        	'nama_prodi' => 'Teknik Lingkungan' 
        ]);

    }
}
