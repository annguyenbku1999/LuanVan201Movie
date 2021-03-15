<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
  public function ShowMovie($slug1, $slug2 = null, $slug3 = null){
    $this->slug = $slug3 ?? $slug2 ?? $slug1;
    if(isset($this->slug)){
      $movie = DB::table('Movies')
                ->where('Slug','like', $this->slug)
                ->select()
                ->get();
      $result = response()->json($movie,200);
      return $result
      ->header('Access-Control-Allow-Origin', '*')
      ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }
  }
}
