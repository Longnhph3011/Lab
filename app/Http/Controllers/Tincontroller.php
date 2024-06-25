<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tincontroller extends Controller
{
    function index()
    {
        return view('index');
    }
    function lienhe()
    {
        return view('lienhe');
    }
    function lay1tin($id)
    {
        $data = ['id' => $id];
        return view('chitiet', $data);
    }
}
