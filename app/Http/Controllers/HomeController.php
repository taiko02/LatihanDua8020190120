<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['judul'] = "Data Buku berhasil di Muat!";
        $objek = \App\Buku::latest()->paginate(10);
        $data['objek'] = $objek;
        return view('home',$data);
    }
}
