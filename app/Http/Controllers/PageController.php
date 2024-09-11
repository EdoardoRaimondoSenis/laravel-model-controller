<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller {
    public function index() {

        // prendo tutti gli elementi della tabella con all()
        $movies = Movie::all();
        dd($movies);

        return view('home');
    }
}
