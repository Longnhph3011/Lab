<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tincontroller extends Controller
{
    function index()
    {
        return view('index');
    }
    function lienHe()
    {
        return view('lienhe');
    }
    function lay1Tin($id, $name)
    {
        $data = ['id' => $id, 'name' => $name];
        return view('chitiet', $data);
    }
    function updateUser(Request $request)
    {
        echo $request->id;
    }
    function listUser()
    {
        $users = [
            [
                'id' => '1',
                'name' => 'long'
            ],
            [
                'id' => '2',
                'name' => 'longg'
            ]
        ];
        return view('list-user')->with([
            'users' => $users
        ]);
        // return view('list-user', compact('users'));
    }
}
