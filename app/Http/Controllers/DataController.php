<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;
use App\Page;
use App\Post;
use App\Word;
use App\Textarea;

class DataController extends Controller
{

    public function getIndex()
    {

        // $page = Page::first();
        // $words = Word::all()->where('page_id', $page->id);
        // $textareas = Textarea::all()->where('page_id', $page->id);
        // $posts = Post::orderBy('id', 'desc')->take(4)->get();
        // $latestPost = Post::all()->last();
        //
        // return view('index', compact('posts', 'latestPost', 'page', 'words', 'textareas'));

        return view('index');
    }

}
