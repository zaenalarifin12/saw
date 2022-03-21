<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->search;

        if(!empty($search)){
            $user = User::where("level", "1")
            ->where("name", "like", '%' . $search .'%')
            ->orWhere("email", "like", '%' . $search .'%')
            ->orWhere("no_telephone", "like", '%' . $search .'%')
            ->get();
        }else{
            $user = User::where("level", "1")->get();

        }
        
        return view("user.index", compact("user"));
    }

    public function store(Request $request)
    {
        User::create([
            "name"          => $request->name,
            "email"         => $request->email,
            "no_telephone"  => $request->no_telephone,
            "password"      => Hash::make($request->password),
            "level"         => 1
        ]);

        return redirect("/user")->with("message", "user created");
    }

    public function update(Request $request, $id)
    {
        $user = User::where("id", $id)->first();

        if(!empty($request->password)){
            $user->update([
                "name"          => $request->name,
                "email"         => $request->email,
                "no_telephone"  => $request->no_telephone,
                "password"      => Hash::make($request->password),
            ]);   
        }else{
            $user->update([
                "name"          => $request->name,
                "email"         => $request->email,
                "no_telephone"  => $request->no_telephone,
            ]);
        }

        return redirect("/user")->with("message", "user updated");
    }

    public function delete($id)
    {
        $user = User::where("id", $id)->first();
        $user->delete();

        return redirect("/user")->with("message", "user deleted");
    }
}
