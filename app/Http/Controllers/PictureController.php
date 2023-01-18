<?php

namespace App\Http\Controllers;

use App\Models\picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Validation\PictureValidation;
use Illuminate\Support\Facades\Auth;


class PictureController extends Controller
{
    public function index(){
        $picture = Picture::all();
        return response()->json($picture);
    }

    public function show($id){
        $picture = Picture::find($id);
        if(!picture){
            return response()->json(['message' => 'Resource Not Found'], 403 );
        }
        return response()->json($picture);
    }

    public function store(Request $request,PictureValidation $validation){
        //return response()->json(Auth::user());
        $validator = Validator::make($request->all(), $validation->rules(), $validation->messages());

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 401);
        }

        $fullFileName = $request->file('image')->getClientOriginalName();
        $fileName = pathinfo($fullFileName, PATHINFO_FILENAME);
        $extension = $request->file('image')->getClientOriginalExtension();
        $file = $fileName.'_'.time().'.'.$extension;

        $request->file('image')->storeAs('public/pictures',$file);



        $picture =Picture::create([
            'image' => $file,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'user_id' => Auth::user()->id
    ]);
        return response()->json($picture);
    }
}
