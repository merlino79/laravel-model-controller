<?php

namespace App\Http\Controllers;
use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $movies = Movie::all();
    
    //dump($movies);
    $movies1 = Movie::where('title', 'Pulp Fiction')->get();
    dump($movies1[0]['title']);
    $data = [
      'movies' => $movies,
      'movies1' => $movies1,
      
      
    ];
    return view('home', $data);
  }
}
