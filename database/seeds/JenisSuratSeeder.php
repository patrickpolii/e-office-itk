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

        DB::table('jenis_surat')->insert([
        	'nama_surat' => 'Surat Permohonan Data' 
        ]);

        DB::table('jenis_surat')->insert([
        	'nama_surat' => 'Surat Pengantar KP' 
        ]);

        DB::table('jenis_surat')->insert([
        	'nama_surat' => 'Surat Pengantar Proposal KP' 
        ]);

        DB::table('jenis_surat')->insert([
        	'nama_surat' => 'Surat Rekomendasi Beasiswa' 
        ]);

        DB::table('jenis_surat')->insert([
        	'nama_surat' => 'Surat Pengantar Magang' 
        ]);

        DB::table('jenis_surat')->insert([
        	'nama_surat' => 'SK Pengerjaan TA' 
        ]);

        DB::table('jenis_surat')->insert([
        	'nama_surat' => 'SK Perjalanan' 
        ]);

        DB::table('jenis_surat')->insert([
        	'nama_surat' => 'Surat Permohonan Dispensasi' 
        ]);

        DB::table('jenis_surat')->insert([
        	'nama_surat' => 'Surat Permohonan Peminjaman Alat' 
        ]);

        DB::table('jenis_surat')->insert([
        	'nama_surat' => 'SP-MMTA' 
        ]);

        DB::table('jenis_surat')->insert([
        	'nama_surat' => 'Surat Permohonan Peminjaman Ruangan' 
        ]);

        DB::table('jenis_surat')->insert([
        	'nama_surat' => 'SK Sedang Mengerjakan TA' 
        ]);

        DB::table('jenis_surat')->insert([
        	'nama_surat' => 'Surat Ijin Melanjutkan Penelitian' 
        ]);
    }
}
