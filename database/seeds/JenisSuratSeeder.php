<?php

use Illuminate\Database\Seeder;

class JenisSuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_surat')->insert([
        	'nama_surat' => 'SK Aktif Studi' 
        ]);

        DB::table('jenis_surat')->insert([
        	'nama_surat' => 'SK Pengganti KTM' 
        ]);

        DB::table('jenis_surat')->insert([
        	'nama_surat' => 'SK Aktif Organisasi' 
        ]);

        DB::table('jenis_surat')->insert([
        	'nama_surat' => 'SK Pernah Studi' 
        ]);

        DB::table('jenis_surat')->insert([
        	'nama_surat' => 'SK Lulus' 
        ]);
    }
}
