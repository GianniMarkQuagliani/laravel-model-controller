<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function movies(){
        $movies = Movie::all();
        $title = 'I miei film';
        return view('movies', compact('movies', 'title'));
    }

    public function contacts(){
        return view('contacts');
    }

    public function movies_detail($id){
        // $move = Movie::where('id', $id)->first();
        $movies = Movie::find($id);
        return view('movies_detail', compact('movies'));
    }
}
