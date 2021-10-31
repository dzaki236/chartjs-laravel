<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Siswa::create(['nama_lengkap'=>'Dzaki','jenis_kelamin'=>'l','alamat'=>'jalan raya tapos aja','kelas'=>'12 rpl 2','tanggal_lahir'=>date('Y-m-d',strtotime('8-august-2004'))]);
    }
}
