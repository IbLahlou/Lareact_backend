<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
   protected $fillable = [
    'title' ,
    'description',
    'image',
    'user_id'
];

    protected $with = [
        'user'
];

   function user(){
    return $this->belongsTo('App\Models\User');
   }
}
