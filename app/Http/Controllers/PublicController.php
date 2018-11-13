<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $posts = Post::all();
      return view('welcome', compact('posts') );   
    }

    public function contact()
    {
      return view('contact');
    }
    
    public function contactPost()
    {
      
    }
    
    public function about()
    {
        return view('about');
    }

    public function singlePost($id)
    {
        return view('post');
    }
}
