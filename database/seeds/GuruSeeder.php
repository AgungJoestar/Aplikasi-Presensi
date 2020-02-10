<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 $faker = Faker::create('id_ID');
    	
         DB::table('guru')->insert([
                'nip'=>"1",
                'nama'=>"YOGA ABDIKA ALFAZA",
                'tgl_lahir'=>"1993-02-22",
                'tempat_lahir'=>"Bandung",
                'alamat'=>"Cinunuk",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);
         DB::table('guru')->insert([
                'nip'=>"2",
                'nama'=>"MIDKAL FARAN",
                'tgl_lahir'=>"1995-05-31",
                'tempat_lahir'=>"Bandung",
                'alamat'=>"Rancaekek",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);
         DB::table('guru')->insert([
                'nip'=>"3",
                'nama'=>"VIKA HURI RAHMADANI",
                'tgl_lahir'=>"1992-07-22",
                'tempat_lahir'=>"Bandung",
                'alamat'=>"Cibiru",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);
         DB::table('guru')->insert([
                'nip'=>"4",
                'nama'=>"DEDE HERMANSYAH",
                'tgl_lahir'=>"1987-11-12",
                'tempat_lahir'=>"Bandung",
                'alamat'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);
         DB::table('guru')->insert([
                'nip'=>"5",
                'nama'=>"MOHAMAD BESTMAN",
                'tgl_lahir'=>"1990-11-27",
                'tempat_lahir'=>"Bandung",
                'alamat'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);
    }
}
