<?php

namespace App\Http\Controllers;

use App\Alternatif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlternatifController extends Controller
{
    public function index(Request $request)
    {

        // harga ongkos_kirim internal ram kamera
        if(!empty($request->nama)){
            $alternatif = Alternatif::where("nama", "like", "%" . $request->nama . "%")
            ->orWhere("harga", "like", "%" . $request->nama . "%")
            ->orWhere("ongkos_kirim", "like", "%" . $request->nama . "%")
            ->orWhere("internal", "like", "%" . $request->nama . "%")
            ->orWhere("ram", "like", "%" . $request->nama . "%")
            ->orWhere("kamera", "like", "%" . $request->nama . "%")
            ->get();
        }else{
            $alternatif = Alternatif::get();
        }
        
        return view("hp.index", compact("alternatif"));
    }

    public function store(Request $request)
    {
        $originName     = $request->file("image")->getClientOriginalName();
        $fileName       = pathinfo($originName, PATHINFO_FILENAME);
        $extension      = $request->file("image")->getClientOriginalExtension();
        $fileName       = "hp/". $fileName.'_'.time().'.'.$extension;

        $request->file("image")->storeAs(
            "public", $fileName
        );

        Alternatif::create([
            "nama"          => $request->nama,
            "harga"          => $request->harga,
            "ongkos_kirim"          => $request->ongkos_kirim,
            "internal"          => $request->internal,
            "kamera"          => $request->kamera,
            "ram"          => $request->ram,
            "img"          => $fileName,
        ]);

        return redirect("/hp")->with('message', 'HP telah ditambahkan');
    }


    public function update(Request $request, $id)
    {
        
        if($request->hasFile("image")){

            $originName     = $request->file("image")->getClientOriginalName();
            $fileName       = pathinfo($originName, PATHINFO_FILENAME);
            $extension      = $request->file("image")->getClientOriginalExtension();
            $fileName       = "hp/". $fileName.'_'.time().'.'.$extension;

            $request->file("image")->storeAs(
                "public", $fileName
            );

            $alternatif = Alternatif::where("id", $id)->first();
            $alternatif->update([
                "nama"          => $request->nama,
                "harga"          => $request->harga,
                "ongkos_kirim"          => $request->ongkos_kirim,
                "internal"          => $request->internal,
                "ram"          => $request->ram,
                "kamera"          => $request->kamera,
                "img"          => $fileName,
            ]);
    
        }else {
            $alternatif = Alternatif::where("id", $id)->first();
            $alternatif->update([
                "nama"          => $request->nama,
                "harga"          => $request->harga,
                "ongkos_kirim"          => $request->ongkos_kirim,
                "ram"          => $request->ram,
                "internal"          => $request->internal,
                "kamera"          => $request->kamera,
            ]);
        }
        
        return redirect("/hp")->with('message', 'HP telah berhasil terupdate');;
    }


    public function delete($id)
    {
        $resto = Alternatif::where("id", $id)->first();

        $resto->delete();

        return redirect("/hp")->with('message', 'alternatif telah berhasil dihapus');;
    }
}
