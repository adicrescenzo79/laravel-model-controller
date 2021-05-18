<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;


class HomeController extends Controller
{
  public function index()
  {
    $title = 'Home';
    $movies = Movie::all();
    return view('home', compact('movies'))->with('title', $title);
  }
}
