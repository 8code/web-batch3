<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\komentar;
use Auth;
class KomentarController extends Controller

{
    //
    public function GetKomentar($artikelid){
    }



    //
    public function GetReply(){
    }



    //tambah komentar
    public function tambahKomentar(request $req){
        $this->validate($req, [
            'komentar' => 'required',
            'artikel_id' => 'required',
        ]);

        $komentar = new komentar;
        $komentar->komentar = $req['komentar'];

        // if ($req['induk']){
            $komentar->induk = $req['induk'];
        // }
        // $komentar->induk = $req['induk'];
        $komentar->artikel_id = $req['artikel_id'];
        $komentar->user_id = Auth::user()->id;
        $komentar->save();
        

        return array($komentar, Auth::user());
    }




    //edit Komentar
    public function editKomentar(request $req, $id){
        $this->validate($req, [
            'komentar' => 'required',
    
            'artikel_id' => 'required',
        ]);

        $komentar = komentar::find($id);
        $komentar->komentar = $req['komentar'];
        if ($req['induk']){
            $komentar->induk = $req['indux'];
        }
        // $komentar->induk = $req['induk'];
        $komentar->artikel_id = $req['artikel_id'];
        $komentar->user_id = Auth::user()->id;
        $komentar->update();
        
        return $komentar;
          
    }



    //hapus Komentar
    public function hapusKomentar($id){
        
        
            $komentar = komentar::find($id);  
            $komentar->delete();
            return $komentar;
        
    }

}
