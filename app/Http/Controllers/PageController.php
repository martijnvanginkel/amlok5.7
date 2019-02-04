<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{
  public function getIndex()
  {
    $post = Post::first();

    return view('index', compact('post'));
  }

  public function getHome()
  {
    $post = Post::first();

    return view('home', compact('post'));
  }
}
