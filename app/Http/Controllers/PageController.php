<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Page;
use App\Word;
use App\Textarea;
use App\File;

class PageController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate data
        $this->validate($request, array(
                'name' => 'required|max:255',
            ));

        // Add title and save page
        $page = new Page;
        $page->name = $request->name;
        $page->save();

        // Make array out of all strings, textareas and files
        $wordRequests = $request->string;
        $textareaRequests = $request->textarea;
        $fileRequests = request()->file('image');

        // Save each string
        if($wordRequests != NULL){
            foreach ($wordRequests as $wordRequest) {
                $word = new Word;
                $word->word = $wordRequest;
                $page->strings()->save($word);
            }
        }

        // Save each textarea
        if($textareaRequests != NULL){
            foreach ($textareaRequests as $textareaRequest) {
                $textarea = new Textarea;
                $textarea->textarea = $textareaRequest;
                $page->textareas()->save($textarea);
            }
        }

        // Save each file
        if($fileRequests != NULL){
            foreach ($fileRequests as $fileRequest) {
                $fileRequest->store('images', 'public');
                $file = new File;
                $file->file = $fileRequest->hashName();
                $page->files()->save($file);
            }
        }

        // Flash succes message
        session()->flash('success', 'Your changes have been saved!');

        return redirect()->route('pages.edit', $page->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = Page::find($id);
        $words = Word::all()->where('page_id', $page->id);
        $textareas = Textarea::all()->where('page_id', $page->id);
        $files = File::all()->where('page_id', $page->id);

        return view('pages.show', compact('page', 'words', 'textareas', 'files'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);
        $words = Word::all()->where('page_id', $page->id);
        $textareas = Textarea::all()->where('page_id', $page->id);
        $files = File::all()->where('page_id', $page->id);

        return view('pages.edit', compact('page', 'words', 'textareas', 'files'));
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
        // Validate data
        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        // Find page and save title
        $page = Page::find($id);
        $page->name = $request->name;
        $page->save();

        // Find variables of this page
        $words = Word::all()->where('page_id', $page->id);
        $textareas = Textarea::all()->where('page_id', $page->id);
        $files = File::all()->where('page_id', $page->id);

        // Get all requests
        $wordRequests = $request->string;
        $textareaRequests = $request->textarea;
        $fileRequests = request()->file('image');

        // Loop through strings
        $i=0;
        foreach ($words as $word) {

            $word->word = $wordRequests[$i];
            $page->strings()->save($word);
            $i++;
        }

        // Loop through textareas
        $i=0;
        foreach ($textareas as $textarea) {

            $textarea->textarea = $textareaRequests[$i];
            $page->textareas()->save($textarea);
            $i++;

        }

        // Loop through files
        $i=0;
        foreach ($files as $file) {
            // If there's a file
            if(isset($fileRequests[$i])){
                // Store in public folder and save filename in database
                $fileRequests[$i]->store('images', 'public');
                $file->file = $fileRequests[$i]->hashName();
                $page->files()->save($file);
                $i++;
            }else{

                $i++;
            }
        }

        // Flash succes message
        session()->flash('success', 'Your changes have been saved!');

        return redirect()->route('pages.edit', $page->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        $page->delete();

        return redirect()->route('home');
    }
}
