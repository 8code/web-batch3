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


            $dataartikel = artikel::all();
            return view("artikel", compact("dataartikel"));

            
        }else{
            return redirect('login');
        }
    }

    // Tambah Artikel
    public function tambah(Request $req){

        // enctype="multipart/form-data"
        
        $this->validate($req, [
            'judul' => 'required',
            'isi' => 'required',
            'kategori' => 'required',
            'image' => 'required|image:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($req->file('image')){
            $image = $req->file('image'); // Mengambil File Image
            $imagename = time().'.'.$image->getClientOriginalExtension(); // Ubah Nama
            $destinationPath = public_path('/img'); // Set Folder Penyimpanan File
            $image->move($destinationPath, $imagename); //
        }else{
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
     // Edit Artikel
    public function edit(Request $req){

        $slug = Str::slug($req["judul"], '-');

        // $artikel = new artikel; dirubah
        $artikel = artikel::find($req['id']);

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
     // Delete Artikel
    public function delete(Request $req){

        // $artikel = new artikel; dirubah
        $artikel = artikel::find($req['id']);
        $artikel->delete();

        return redirect('artikel');
    }

}
