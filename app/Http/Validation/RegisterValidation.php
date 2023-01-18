<?php

namespace App\Http\Validation;

class RegisterValidation {

    public function rules (){
         return         [
            'name' =>['required' , 'string' , 'max:150', 'min:3'],
            'email' =>['required' , 'string' , 'email' ,'max:150', 'min:3' , 'unique:users' ],
            'password' =>['required' , 'string' , 'min:8'],
            'confirm_password' =>[ 'required' , 'same:password']
    ];}


    public function messages (){
         return                [
            'name.required' => 'Vous devez spécifier votre nom',
            'email.required' => 'Vous devez spécifier votre email',
            'email.unique' => 'Cet email est déja utilisé',
            'password.min' => 'Votre mot de passe doit faire au minimum 9 caractère' ,
            'confirm_password.same' => 'Votre mot de passe et votre mot de passe de confirmation doivent être identiques'
        ];}

    }




