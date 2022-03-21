<?php

namespace App\Http\Controllers;

use App\JamBuka;
use App\JarakPengguna;
use App\Kunjungan;
use App\RataHarga;
use App\Resto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiRestoController extends Controller
{
    public function index(Request $request)
    {
        $harga  = $request->harga   = 1;
        $jam    = $request->jam     = 3;
        $jarak  = $request->jarak   = 5;
        $lat    = $request->lat     = -8.2751524;
        $long   = $request->jarak   = 115.1203219;
        /**
         * keterangan 
         * w1 = harga = biaya
         * w2 = jam   = keuntungan
         * w3 = jarak  = keuntungan
         */

        /**
         * tahap 1
         */

        /**
         * mencari nilai bobot 
        */
        $w1_harga = $harga / RataHarga::sum("bobot");
        $w2_jam = $jam / JamBuka::sum("bobot");
        $w3_jarak = $jarak /JarakPengguna::sum("bobot");
        
        $w1_normalisasi_harga = $w1_harga * -1;
        $w2_normalisasi_jam = $w2_jam * 1;
        $w3_normalisasi_jarak = $w3_jarak * 1;

        /**
         * tahap 2
         * 
         * normaliasai alternatif
         */

        $restos = Resto::with("rataHarga")->get();
        $alternatif = [];
        // butuh jarak dan lama operasi
        foreach ($restos as $key => $value) {
            $lama_operasi = strtotime("$value->jam_tutup") -  strtotime("$value->jam_buka");
            // $jam = date("H:i", $lama_operasi);

            $response = Http::get('https://maps.googleapis.com/maps/api/distancematrix/json?origins=' . $lat . "%2C" . $long . "&destinations=" . $value->lat . "%2C" . $value->long . "&key=" . "AIzaSyCz3eZUTh3Q64QgJP9_dni_znwGqaOTQS4" );

            $jarak_pengguna = $response->object()->rows[0]->elements[0]->distance->value / 1000;

            $lama_operasi =  date("H", strtotime($response->object()->rows[0]->elements[0]->duration->value));

            $bobot_jarak = 0;
            if ($jarak_pengguna < 1){
                $bobot_jarak = 5;
            } else if ($jarak_pengguna >= 1 || $jarak_pengguna <= 2){
                $bobot_jarak = 3;
            }else{
                $bobot_jarak = 1;
            }

            $bobot_lama = 0;
            if ($lama_operasi < 7){
                $bobot_lama = 1;
            } else if ($lama_operasi >= 7 || $lama_operasi <= 12){
                $bobot_lama = 3;
            }else{
                $bobot_lama = 5;
            }

            $alternatif[$value->id]["rata_harga"]       = $value->rataHarga->bobot;
            $alternatif[$value->id]["jarak_pengguna"]   = $bobot_jarak;
            $alternatif[$value->id]["jam_buka"]         = $bobot_lama;
        }


        $alternatif_normalisasi = [];
        $sum_alternatif_normalisasi = 0;
        foreach ($alternatif as $key => $value) {
            $result = ($value["rata_harga"] / $w1_normalisasi_harga) * ($value["jarak_pengguna"] / $w2_normalisasi_jam) * ($value["jam_buka"] / $w3_normalisasi_jarak);

            $alternatif_normalisasi[$key]["result"] = $result;
            $sum_alternatif_normalisasi += $result; 
        }

        /**
         * tahap 3
         */

        $values = [];
        $nilai_hasil_alternatif = [];
        foreach ($alternatif_normalisasi as $key => $value) {
            $value = $value["result"] / $sum_alternatif_normalisasi;
        
            $values[$key]["hasil"] = $value;
            $nilai_hasil_alternatif[(int)$key]["id"] = $key;
            $nilai_hasil_alternatif[(int)$key]["nilai"] = $value;
        }

        foreach ($values as $key => $value) {
            
        }

// 
        $columns = array_column($nilai_hasil_alternatif, 'nilai');
        array_multisort($columns, SORT_ASC, $nilai_hasil_alternatif);
        
        $hasil_resto_terdekat = [];
        foreach ($nilai_hasil_alternatif as $key => $value) {

            $resto = Resto::with("imageMakanans", "rataHarga", "jenisHidangan")->where("id", $value["id"])->first();
            array_push($hasil_resto_terdekat, $resto);
        }

        return $hasil_resto_terdekat;

        // {
        //     "destination_addresses": [
        //       "Wongaya Gede, Penebel, Tabanan Regency, Bali, Indonesia"
        //     ],
        //     "origin_addresses": [
        //       "Jalan Tanpa Nama, Candikuning, Kec. Baturiti, Kabupaten Tabanan, Bali 82191, Indonesia"
        //     ],
        //     "rows": [
        //       {
        //         "elements": [
        //           {
        //             "distance": {
        //               "text": "35.1 km",
        //               "value": 35119 -> dikali 1000
        //             },
        //             "duration": {
        //               "text": "1 hour 21 mins",
        //               "value": 4837 -> str to time
        //             },
        //             "status": "OK"
        //           }
        //         ]
        //       }
        //     ],
        //     "status": "OK"
        //   }

        // return $w3_normalisasi;

    }

    public function kunjungan($id)
    {
        Kunjungan::create([
            "resto_id"  => $id
        ]);

        return response("berhasil");
    }
}
