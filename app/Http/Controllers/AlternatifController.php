<?php

namespace App\Http\Controllers;

use App\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function calculasi(Request $request)
    {
        /**
         * analisa
         */
        // harga cost 
        // ongkos cost 
        // internal benefit
        // ram  benefit
        // kamera benefit

        /**
         * 
         * normalisasi
         */

        // jika benefit maka bagi dengan nilai terbesar
        $min_harga = Alternatif::min("harga");
        $min_ongkos = Alternatif::min("ongkos_kirim");
        $max_internal = Alternatif::max("internal");
        $max_ram = Alternatif::max("ram");
        $max_kamera = Alternatif::max("kamera");

        $alternatif = Alternatif::whereIn("id", $request->pilih)->get();

        $normalisasi = [];
        foreach ($alternatif as $key => $value) {
            $normalisasi[$key]["id"] = $value->id;
            $normalisasi[$key]["harga"] = $value->harga / $min_harga;
            $normalisasi[$key]["ongkos_kirim"] = $value->ongkos_kirim / $min_ongkos ;
            $normalisasi[$key]["internal"] = $value->internal / $max_internal ;
            $normalisasi[$key]["ram"] = $value->ram / $max_ram ;
            $normalisasi[$key]["kamera"] = $value->kamera / $max_kamera ;
        }

        $hasil_rangking = [];
        $id_rangking = []; 
        foreach ($normalisasi as $key => $value) {
            $hasil_rangking[$key]["hasil"]  =  ($value["harga"] * 30) + ($value["ongkos_kirim"] * 10) + ($value["ram"] * 20) + ($value["internal"] * 20) + ($value["kamera"] * 20);
            $hasil_rangking[$key]["id"]     =  $value["id"];
        
            array_push($id_rangking, $value["id"]);
        }

        sort($id_rangking);

        $result = Alternatif::whereIn("id", $id_rangking)->get();
    
        return view("calculasi.index", compact("result"));
    }
}
