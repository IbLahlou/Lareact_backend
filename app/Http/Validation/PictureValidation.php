<?php

namespace App\Http\Validation;

class PictureValidation {

    public function rules (){
         return         [
            'title' =>['required','string','max:150' ],
            'description' =>['required','max:250'],
            'image' =>['required','image']
    ];
}


    public function messages (){
         return                [

            'title.required' => 'Vous devez spécifier votre un titre',
            'description.required' => 'Vous devez spécifier un description' ,
            'image.required' => 'Vous devez spécifier une image' ,
            'image.image' => 'Votre formatd\'image n\'est pas valide' ,
        ];}

    }




