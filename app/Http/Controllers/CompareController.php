<?php

namespace App\Http\Controllers;

use App\Alternatif;
use Illuminate\Http\Request;

class CompareController extends Controller
{
    public function index(Request $request)
    {
        $alternatif_selected = Alternatif::where("selected", 1)->get();

        if(!empty($request->nama)){
            $alternatif_not_selected = Alternatif::where("selected", 0)->where("nama", "like", "%" . $request->nama ."%")
            ->orWhere("harga", "like", "%" . $request->nama . "%")
            ->orWhere("ongkos_kirim", "like", "%" . $request->nama . "%")
            ->orWhere("internal", "like", "%" . $request->nama . "%")
            ->orWhere("ram", "like", "%" . $request->nama . "%")
            ->orWhere("kamera", "like", "%" . $request->nama . "%")
            ->get();
        }else{
            $alternatif_not_selected = Alternatif::where("selected", 0)->get();
        }
        
        return view("compare.index", compact(["alternatif_selected", "alternatif_not_selected"]));
    }

    public function store($id)
    {
        $alternatif = Alternatif::where("id", $id)->first();

        $alternatif->update([
            "selected" => 1
        ]);

        return redirect("/compare")->with("msg", "hp sudah dipilih");
    }

    public function delete($id)
    {
        $alternatif = Alternatif::where("id", $id)->first();

        $alternatif->update([
            "selected" => 0
        ]);

        return redirect("/compare")->with("msg", "hp sudah terhapus dari daftar");
    }

}
