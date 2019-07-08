<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ImageController extends Controller
{
    public function index(){
    	return view('posts.index')->with('posts',Post::all());
    }
}
