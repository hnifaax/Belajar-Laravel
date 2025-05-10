<?php

namespace App\Http\Controllers;

use App\Models\about;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index() {
       
        $about = about::all();
        return view('about', ['about' => $about]);
    }
}
