<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\komentar;
use Auth;

class KomentarController extends Controller
{
    // Get all komentar artikel id
    public function getKomentar($artikelId){
        
    }
    // get all komentar reply id
    public function getReply($komentarId){
        
    }
    // tambah
    public function tambahKomentar(Request $req){
        $this->validate($req, [
            'komentar' => 'required',
            'artikel_id' => 'required',
        ]);

        $komentar = new komentar;
        $komentar->komentar = $req['komentar'];

        if($req['induk']){
            $komentar->induk = $req['induk'];
        }

        $komentar->artikel_id = $req['artikel_id'];
        $komentar->user_id = Auth::user()->id;
        $komentar->save();
        
        return array($komentar, Auth::user());


    }
   
    // edit
    public function editKomentar(Request $req, $id){
         $this->validate($req, [
            'komentar' => 'required',
            'artikel_id' => 'required',
        ]);

        $komentar = komentar::find($id);
        $komentar->komentar = $req['komentar'];
        if($req['induk']){
            $komentar->induk = $req['induk'];
        }

        $komentar->artikel_id = $req['artikel_id'];
        $komentar->user_id = Auth::user()->id;
        $komentar->update();
        
        return $komentar;
    }
    // hapus
    public function hapusKomentar($id){
        $komentar=komentar::find($id);
        $komentar->delete();
        return $komentar;
    }
}
