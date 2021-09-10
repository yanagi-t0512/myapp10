<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $posts = DB::table('posts')->get();

        return view('welcome')->with('posts', $posts);

    }
}
