<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authorController extends Controller
{
    public function __construct()
    {
        $this->middleware('CheckRole:author');
    }

    public function dashboard()
    {
      return view('author.dashboard');
    }

    public function posts()
    {
      return view('author.posts');
    }

    public function comments()
    {
      return view('author.comments');
    }
}
