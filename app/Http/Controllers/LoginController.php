<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    //
    public function getdata(Request $req){
        $data = new Login;

        $data->username = $req->username;
        $data->password = $req->password;
        $data->image = $req->file('file')->store('docs');
        $data->save();

        return redirect('home');
    }

    public function fetchdata(){
        $data = Login::all();
        return view('fetch',['detail'=>$data]);
    }
}
