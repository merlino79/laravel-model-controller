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

    $movies2 = Movie::find(5);
    dump($movies2);

    $movies3 = Movie::where('title', 'like', 'the%')->get();
    dump($movies3);

    $movies4 = Movie::where('original_title', 'like', 'the%')
      ->orderBy('original_title')
      ->get();

      dump($movies4);

    $data = [
      'movies' => $movies,
      'movies1' => $movies1,
      'movies4' => $movies4,
      
     
      
      
    ];
    return view('home', $data);
  }
}
