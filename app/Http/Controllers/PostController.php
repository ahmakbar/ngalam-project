<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        return view('index', 
    [
        "title" => "Home",
        "post" => Post::all(),
        
    ]);
    }
}
