<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        // for ($x = 1; $x <= 20; $x++){

        	// DB::table('siswa')->insert([
        	// 	'nama'=>$faker->name,
        	// 	'nik'=>$faker->numberBetween(1167050001,1167050100),
         //        'email'=>$faker->email,
         //        'alamat'=>$faker->address,
         //        'no_telp'=>$faker->phoneNumber,
         //        'tmpt_lahir'=>$faker->city,
         //        'tgl_lahir'=>$faker->date("Y-m-d H:i:s"),
         //        'jk'=>$faker->randomElement($array = array('Laki-laki','Perempuan')),
        	// 	'created_at'=>$faker->date("Y-m-d H:i:s")

        	// ]);
                // }
            DB::table('siswa')->insert([
                'nis'=>"111232080020190625",
                'nisn'=>"45071267",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"ANGGITA AYU DIANSIH",
                'tgl_lahir'=>"2004-05-04",
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Perempuan",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);

            DB::table('siswa')->insert([
                'nis'=>"111232080020190626",
                'nisn'=>"45071268",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"AHMADI TAUFIKUROHMAN",
                'tgl_lahir'=>"2004-04-06",
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Laki-laki",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);

            DB::table('siswa')->insert([
                'nis'=>"111232080020190627",
                'nisn'=>"45071343",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"AZZAHRA",
                'tgl_lahir'=>"2004-08-22",
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Perempuan",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);

            DB::table('siswa')->insert([
                'nis'=>"111232080020190628",
                'nisn'=>"45071453",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"AZZAHRA AULIA S.P.",
                'tgl_lahir'=>"2004-02-06",
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Perempuan",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);

            DB::table('siswa')->insert([
                'nis'=>"111232080020190629",
                'nisn'=>"45071435",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"BILQIS TRESHVA AULIA",
                'tgl_lahir'=>"2004-04-07",
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Perempuan",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);

            DB::table('siswa')->insert([
                'nis'=>"111232080020190630",
                'nisn'=>"45071464",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"DIMAS ARYO IBRAHIM",
                'tgl_lahir'=>"2004-05-12",
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Laki-laki",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);

            DB::table('siswa')->insert([
                'nis'=>"111232080020190631",
                'nisn'=>"45071475",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"ELVINA RAHMA KHOIRUNNISA",
                'tgl_lahir'=>"2004-12-02",
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Perempuan",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);

            DB::table('siswa')->insert([
                'nis'=>"111232080020190632",
                'nisn'=>"45071485",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"FABIAN DWIKY AGHNIA FIRDAUS",
                'tgl_lahir'=>"2003-12-28",
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Laki-laki",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);

            DB::table('siswa')->insert([
                'nis'=>"111232080020190633",
                'nisn'=>"45071632",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"FAQIH ABDUL SIDIQ",
                'tgl_lahir'=>"2004-02-18",
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Laki-laki",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);

            DB::table('siswa')->insert([
                'nis'=>"111232080020190634",
                'nisn'=>"45071654",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"FARHANDO NIAGARA",
                'tgl_lahir'=>"2004-06-12",
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Laki-laki",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);

            DB::table('siswa')->insert([
                'nis'=>"111232080020190635",
                'nisn'=>"45071655",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"FARREL MAHARDHIKA A.",
                'tgl_lahir'=>"2004-04-05",
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Laki-laki",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);

            DB::table('siswa')->insert([
                'nis'=>"111232080020190636",
                'nisn'=>"45071656",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"FAZA RUZIQYANI FIRDAUSA",
                'tgl_lahir'=>"2004-07-26",
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Perempuan",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);

            DB::table('siswa')->insert([
                'nis'=>"111232080020190637",
                'nisn'=>"45071657",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"FERLY ROICHAN FIRDAUS",
                'tgl_lahir'=>$faker->date("2004-m-d H:i:s"),
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Laki-laki",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);


            DB::table('siswa')->insert([
                'nis'=>"111232080020190638",
                'nisn'=>"45071658",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"GHANIA PUTRI VISTYANI",
                'tgl_lahir'=>$faker->date("2004-m-d H:i:s"),
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Perempuan",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);


            DB::table('siswa')->insert([
                'nis'=>"111232080020190639",
                'nisn'=>"45071670",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"KRISNA NALENDRA",
                'tgl_lahir'=>$faker->date("2004-m-d H:i:s"),
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Laki-laki",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);


            DB::table('siswa')->insert([
                'nis'=>"111232080020190640",
                'nisn'=>"45071672",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"LU'LU ROFIATUSHOLIHAH AS SHOFA MARWAH",
                'tgl_lahir'=>$faker->date("2004-m-d H:i:s"),
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Perempuan",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);

            DB::table('siswa')->insert([
                'nis'=>"111232080020190641",
                'nisn'=>"45071675",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"MUHAMMAD DANENDRA ARLIANSYAH",
                'tgl_lahir'=>$faker->date("2004-m-d H:i:s"),
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Laki-laki",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);

            DB::table('siswa')->insert([
                'nis'=>"111232080020190642",
                'nisn'=>"45071687",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"MUHAMMAD LUTHFI SALIM",
                'tgl_lahir'=>$faker->date("2004-m-d H:i:s"),
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Laki-laki",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);

            DB::table('siswa')->insert([
                'nis'=>"111232080020190643",
                'nisn'=>"45071689",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"MUKHAMAD RAFFA",
                'tgl_lahir'=>$faker->date("2004-m-d H:i:s"),
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Laki-laki",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);

            DB::table('siswa')->insert([
                'nis'=>"111232080020190644",
                'nisn'=>"45071693",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"MULKI HURINA AZKA",
                'tgl_lahir'=>$faker->date("2004-m-d H:i:s"),
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Laki-laki",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);

            DB::table('siswa')->insert([
                'nis'=>"111232080020190645",
                'nisn'=>"45071696",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"NASYWA ULYA VANIA RACHMA",
                'tgl_lahir'=>$faker->date("2004-m-d H:i:s"),
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Perempuan",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);

            DB::table('siswa')->insert([
                'nis'=>"111232080020190646",
                'nisn'=>"45071698",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"RONALDY HAIDIR AL LUBIS",
                'tgl_lahir'=>$faker->date("2004-m-d H:i:s"),
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Laki-laki",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);

            DB::table('siswa')->insert([
                'nis'=>"111232080020190647",
                'nisn'=>"45071701",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"SITI NURASHRI AZKATYA",
                'tgl_lahir'=>$faker->date("2004-m-d H:i:s"),
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Perempuan",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);

            DB::table('siswa')->insert([
                'nis'=>"111232080020190648",
                'nisn'=>"45071705",
                'angkatan'=>"2019",
                'id_kelas'=>"1",
                'nama_siswa'=>"WULAN NUR IMANIA",
                'tgl_lahir'=>$faker->date("2004-m-d H:i:s"),
                'tmpt_lahir'=>"Bandung",
                'jk_siswa'=>"Perempuan",
                'alamat_siswa'=>"Bandung",
                'created_at'=>$faker->date("Y-m-d H:i:s")
            ]);

    }
}
