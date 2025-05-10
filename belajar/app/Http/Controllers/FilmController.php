<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Director;
use Illuminate\Http\Request;
use Doctrine\DBAL\Schema\Table;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FilmController extends Controller
{
    public function index(Request $request) {
        $keyword = $request->keyword;
        $film = Film::where('judul', 'LIKE', '%'.$keyword.'%')
                        ->orWhere('tahun', 'LIKE', '%'.$keyword.'%')
                        ->orderBy('id', 'desc')
                        ->paginate(8);
        $director = Director::select('id', 'director')->get();
        return view('film', ['filmlist' => $film,'director' => $director]);
        
    }
    public function show($id){
        $film = Film::with('director')->findOrFail($id);
        $director = Director::where('id', '!=', $film->directors_id)->get(['id', 'director']);
        return view('film-detail', ['film' => $film, 'director' => $director]);
    }
    
    // public function create() {
    //     $director = Director::select('id', 'director')->get();
    //     return view('film-add', ['director' => $director]);
    // }

    public function store(Request $request) {
        // Menyimpan data baru
        // $film = new Film;
        // $film->judul = $request->judul;
        // $film->sinopsis = $request->sinopsis;
        // $film->tahun = $request->tahun;
        // $film->rating  = $request->rating;
        // $film->image = $request->image;
        // $film->link = $request->link;
        // $film->directors_id = $request->directors_id;
        // $film->save();

        $film = Film::create($request->all());
        if($request->hasFile('image')) {
            $request->file('image')->move('img/', $request->file('image')->getClientOriginalName());
            $film->image = $request->file('image')->getClientOriginalName();
            $film->save();
        }

        

        // //Menyimpan data baru menggunakan mass assignment
        // $film = Film::create($request->all());
        if ($film) {
            Session::flash('status', 'success');     
            Session::flash('message', 'Add New Movie Success!');
        }
        
        return redirect('/film');
    }

    public function update($id, Request $request) {
        $film = Film::with('director')->findOrFail($id);
        $film->update($request->all());
        if($request->hasFile('image')) {
            $destination = 'img/'.$film->image;
            if (Film::exists($destination)) {
                Film::delete($destination);
            } 

            $request->file('image')->move('img/', $request->file('image')->getClientOriginalName());
            $film->image = $request->file('image')->getClientOriginalName();
            $film->update();
        }
        if ($film) {
            Session::flash('status', 'success');     
            Session::flash('message', 'Edit Success!');
        }
        $director = Director::where('id', '!=', $film->directors_id)->get(['id', 'director']);
        return view('film-detail',  ['film' => $film, 'director' => $director]);
    }

    public function delete($id) {
        $deleteFilm = DB::table('films')->where('id', $id)->delete();
        if ($deleteFilm) {
            Session::flash('status', 'success');     
            Session::flash('message', 'Delete Data Success!');
        }
        return redirect('/film');
    }
}
     
