<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
  public function ShowMovie(Request $request){
    $movie = (array)DB::select('select * from Movies');
    $result = response()->json($movie,200);
    return $result;

  }
  public function login(Request $request ){
    // dd($request['username']);
    if($request->has('username' ) and $request->has('password')){
      $movie = (array)DB::select('select * from Users where USERNAME="'.$request['username'].'"'.' and PASSWORD="'.$request['password'].'"');// AND PASSWORD="'.$request['password'].'"');
      $result = response()->json($movie,200);
      return $result
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }
  }
}
