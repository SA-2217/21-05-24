<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function show()
    {
        return('Home');
    }
    public function showUser(string $id)
    {
        return view('userview',['id'=>$id]);
    }
}
