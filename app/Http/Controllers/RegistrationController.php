<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegistrationController extends Controller
{
    //

    public function index(){

        return view('register.index');

    }

    public function users(){
        $user = \DB::table('users')->get();
        return $user;

    }

    public function insert(){
        $data = [
            'name' => \Request::get('name'),
            'email'=> \Request::get('email'),
            'password'=> \Request::get('password')
        ];

        //dd($data);

        \DB::table('users')->insert($data);

    }

    public function delete($id){

        dd('hi');    }
}
