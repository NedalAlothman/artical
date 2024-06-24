<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index (){
      $posts = post::all();  // Elquent ORM Get All Posts From DataBase
      //return $posts;
       // $posts->load(['Factory', 'seeders']);
        return view('posts', compact('posts'));
    }
}
