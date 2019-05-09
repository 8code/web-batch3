<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\artikel;
use Illuminate\Support\Str;
class ArtikelController extends Controller
{
    public function index(){
        if (Auth::user()){

            $dataartikel = artikel::all();
            return view("artikel",compact("dataartikel"));
  
        }else{
            return redirect('login');
        }
    }

    /// tambah artikel
    public function tambah(Request $req){

        $slug = Str::slug($req["judul"], '-');

        $artikel = new artikel;

        $artikel->judul = $req["judul"];
        $artikel->isi = $req['isi'];
        $artikel->kategori = $req['kategori'];
        $artikel->video = $req['video'];
        $artikel->user_id = Auth::user()->id;
        $artikel->slug = $slug;
        $artikel->img = "sample.jpg";

        $artikel->save();

        return redirect('artikel');
    }


//edit artikel
public function edit(Request $req){

    $slug = Str::slug($req["judul"], '-');

    $artikel =  artikel::find($req['id']);

    $artikel->judul = $req["judul"];
    $artikel->isi = $req['isi'];
    $artikel->kategori = $req['kategori'];
    $artikel->video = $req['video'];
    $artikel->user_id = Auth::user()->id;
    $artikel->slug = $slug;
    $artikel->img = "sample.jpg";

    $artikel->save();

    return redirect('artikel');
}
//fungsi delete
public function delete(Request $req){

    $artikel =  artikel::find($req['id']);

  

    $artikel->delete();

    return redirect('artikel');
}


}