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
             return view("artikel");
        }else{
            return redirect('login');
        }
       
    }

    // tambah artikel
    public function tambah(Request $req){

        $slug = Str::slug($req["judul"],'-');

        $artikel = new artikel;
        $artikel->judul = $req['judul'];
        $artikel->isi = $req['isi'];
        $artikel->kategori = $req['kategori'];
        $artikel->video = $req['video'];
        $artikel->user_id = Auth::user()->id;
        $artikel->slug = $slug;
        $artikel->img = "sample.jpg";

        
        $artikel->save();
        return redirect('artikel');
    }
}
