<?php

use App\Alternatif;
use Illuminate\Database\Seeder;

class AlternatifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alternatif::create([
            
                "nama"  => "samsung",
                "harga" => 12000000,
                "ongkos_kirim"  => 10000,
                "internal"  => 6,
                "kamera" => 64
            
            // [
            //     "nama"  => "sony",
            //     "harga" => 12000000,
            //     "ongkos_kirim"  => 10000,
            //     "internal"  => 60,
            //     "kamera" => 24
            // ],
            // [
            //     "nama"  => "lenovo",
            //     "harga" => 13000000,
            //     "ongkos_kirim"  => 15000,
            //     "internal"  => 300,
            //     "kamera" => 64
            // ],
            
        ]);
    }
}
