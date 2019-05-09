<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\artikel;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    public function index(){
        if(Auth::user()){

          $dataartikel = artikel::paginate(10);
            return view("artikel", compact("dataartikel"));
        }else{
            return redirect('login');
        }
    }

    // Tambah Artikel
    public function tambah(Request $req){

      $this->validate($req, [

        'judul' => 'required',
        'isi' => 'required',
        'kategori' => 'required',
        'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

      if ($req->file('img')) {
        $image = $req->file('img');
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $image->move($destinationPath, $imagename);
      }else {
          $imagename = "sample.png";
      }

        $slug = Str::slug($req["judul"], '-');

        $artikel = new artikel;

        $artikel->judul = $req["judul"];
        $artikel->isi = $req['isi'];
        $artikel->kategori = $req['kategori'];
        $artikel->video = $req['video'];
        $artikel->user_id = Auth::user()->id;
        $artikel->slug = $slug;
        $artikel->img = $imagename;

        $artikel->save();

        return redirect('artikel');
    }

    //editartikel
    public function edit(Request $req){

      $this->validate($req, [

        'judul' => 'required',
        'isi' => 'required',
        'kategori' => 'required',
      ]);

      if ($req->file('img')) {
        
        $this->validate($req, [
          'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $req->file('img');
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $image->move($destinationPath, $imagename);
      }

        $slug = Str::slug($req["judul"], '-');

        $artikel = artikel::find($req["id"]);

        $artikel->judul = $req["judul"];
        $artikel->isi = $req['isi'];
        $artikel->kategori = $req['kategori'];
        $artikel->video = $req['video'];
        $artikel->user_id = Auth::user()->id;
        $artikel->slug = $slug;
        $artikel->img = $imagename;

        $artikel->save();

        return redirect('artikel');
    }

    //deleteartikel
    public function delete(Request $req){

        $slug = Str::slug($req["judul"], '-');

        $artikel = artikel::find($req["id"]);

        $artikel->delete();

        return redirect('artikel');
    }

}
