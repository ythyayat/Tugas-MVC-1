<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function welcome(Request $req)
    {
        //dd($data->all());
        $data=[
            'depan' => strtoupper($req["first_name"]),
            'belakang' => strtoupper($req['last_name'])
        ]; 
        return view('welcome',$data);
    }

    public function table()
    {
        return view('tugas3/datatable');
    }
}
