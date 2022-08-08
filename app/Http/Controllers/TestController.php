<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getMethode(){
        return response() -> json(['success' => 'Méthode GET']);
    }
    public function postMethode(Request $request){
        return $request->all();
    }
}
