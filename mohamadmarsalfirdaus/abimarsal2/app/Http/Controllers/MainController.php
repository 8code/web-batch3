<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MainController extends Controller
{
    //
    public function index(){
        return "Hi Juga";
    }
    public function hello(){
        return "Hello Juga";
    }
    public function welcome(){
        return view('welcome');
    }
    public function ambildatauser(){

        $users = User::all();

        return $users[0]->name;
    }
}
