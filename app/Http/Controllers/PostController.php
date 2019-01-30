<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::all();

        return view('posts.create')->with('posts', $posts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = new Post;

        //ingevulde data door de gebruiker wordt gevalideert door bovenstaande
        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        session()->flash('success', 'Your changes have been saved!');

        return redirect()->route('posts.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::all();
        $post = Post::find($id);

        return view('posts.show', compact('posts', 'post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
                'title' => 'required',
                'body' => 'required'
            ));

        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->body = $request->input('body');

        $post->save();

        session()->flash('success', 'Your changes have been saved!');

        return redirect()->route('posts.edit', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('posts.create');
    }
}
