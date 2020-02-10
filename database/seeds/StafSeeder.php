<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class StafSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create('id_ID');
    	
         DB::table('staf')->insert([
                'nip_staf'=>"1",
                'nama_staf'=>"M. NURDIN",
                'tgl_lahir_staf'=>"1985-02-25",
                'tempat_lahir_staf'=>"Bandung",
                'alamat_staf'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);
         DB::table('staf')->insert([
                'nip_staf'=>"2",
                'nama_staf'=>"RAMA",
                'tgl_lahir_staf'=>"1991-07-19",
                'tempat_lahir_staf'=>"Bandung",
                'alamat_staf'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);
    }
}
