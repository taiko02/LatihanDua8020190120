<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $objek = \App\User::latest()->paginate(10);
        $data['objek'] = $objek;
        return view('buku_index', $data);
    }
}
