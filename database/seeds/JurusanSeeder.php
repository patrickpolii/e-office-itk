<?php

use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusan')->insert([
        	'nama_jurusan' => 'JMTI' 
        ]);

        DB::table('jurusan')->insert([
        	'nama_jurusan' => 'JTIP' 
        ]);

        DB::table('jurusan')->insert([
        	'nama_jurusan' => 'JIKL' 
        ]);

        DB::table('jurusan')->insert([
        	'nama_jurusan' => 'JSTPK' 
        ]);

        DB::table('jurusan')->insert([
        	'nama_jurusan' => 'JTSP' 
        ]);
    }
}
