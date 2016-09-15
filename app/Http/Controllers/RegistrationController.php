<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class RegistrationController extends Controller
{
    //

    public function index(){

        return view('register.index');

    }

    public function users(){
        $users = \DB::table('users')->get();
        return $users;

    }

    public function insert(){
        $data = [
            'name' => \Request::get('name'),
            'email'=> \Request::get('email'),
            'password'=> bcrypt(\Request::get('password'))
        ];

        //dd($data);

        \DB::table('users')->insert($data);

    }

    public function delete($id){
        //$id = $request->get('id');
        DB::table('users')->where('id',$id)->delete();
    
    }
}
