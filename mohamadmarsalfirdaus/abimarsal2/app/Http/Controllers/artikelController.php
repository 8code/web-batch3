<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;


class artikelController extends Controller
{
    public function create()
    {
        return view('artikel.create');
    }

    public function store()
    {
        artikel::create([
          'judul' => request('judul'),
          'isi' => request('isi')
        ]);
    }
}
