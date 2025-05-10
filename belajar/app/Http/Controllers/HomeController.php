<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $home = home::all();
        return view('home', ['homelist' => $home]);
    }
    public function show($id){
        $paint = Film::with(['class'])
            ->findOrFail($id);
        return view('home-detail', ['paint' => $paint]);
    }
}
