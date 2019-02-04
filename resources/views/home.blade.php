@extends('layouts.cms')

@section('content')

  <h1 class="title">Pas hier je teksten aan</h1>

  <form method="post" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <div class="field">
      <label class="label" for="title">Over ons titel</label>
      <div class="control">
        <input class="input" name="aboutustitle" type="text" placeholder="Title here" value="{{ $post->aboutustitle }}">
      </div>
    </div>

    <div class="field">
      <label for="text"class="label">Over ons tekst *</label>
      <div class="control">
        <textarea class="textarea" name="aboutustext" placeholder="Text here" required>{{ $post->aboutustext }}</textarea>
      </div>
    </div>

    <div class="field">
      <label class="label" for="title">Icoon 1</label>
      <div class="control">
        <input class="input" name="icon1title" type="text" placeholder="Title here" value="{{ $post->icon1title }}">
      </div>
    </div>

    <div class="field">
      <label for="text"class="label">Icoon tekst 1*</label>
      <div class="control">
        <textarea class="textarea" name="icontext1" placeholder="Text here" required>{{ $post->icontext2 }}</textarea>
      </div>
    </div>

    <div class="field">
      <label class="label" for="title">Icoon 2</label>
      <div class="control">
        <input class="input" name="icon2title" type="text" placeholder="Title here" value="{{ $post->icon2title }}">
      </div>
    </div>

    <div class="field">
      <label for="text"class="label">Icoon tekst 2*</label>
      <div class="control">
        <textarea class="textarea" name="icontext2" placeholder="Text here" required>{{ $post->icontext2 }}</textarea>
      </div>
    </div>

    <div class="field">
      <label class="label" for="title">Icoon 3</label>
      <div class="control">
        <input class="input" name="icon3title" type="text" placeholder="Title here" value="{{ $post->icon3title }}">
      </div>
    </div>

    <div class="field">
      <label for="text"class="label">Icoon tekst 3*</label>
      <div class="control">
        <textarea class="textarea" name="icontext3" placeholder="Text here" required>{{ $post->icontext3 }}</textarea>
      </div>
    </div>

    <button type="submit" class="button">Submit</button>
  </form>

@endsection
