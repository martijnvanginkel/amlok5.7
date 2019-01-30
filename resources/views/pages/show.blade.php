@extends('layouts.app')

@section('content')

@include('partials._messages')

<!-- Title -->
	<h1>{{ $page->title }}</h1>

<!-- String -->
	<ul>
		@foreach ($titles as $title)
		<li>{{ $title->title }}</li>
		@endforeach
	</ul>

	<!-- $strings[1]->string -->

<!-- Textarea -->
	<ul>
		@foreach($textareas as $textarea)
		<li>{{ $textarea->textarea }}</li>
		@endforeach
	</ul>

	<!-- $textareas[1]->textarea -->

<!-- File -->
	<ul>
		@foreach($files as $file)
		<li>{{ $file->file }}</li>
		@endforeach
	</ul>

{{-- 	<h1>{{ $strings[0]->string }}</h1>
	<h1>{{ $strings[1]->string }}</h1> --}}

{{-- 	<img src="{{ URL::asset('storage/images/' . $files[0]->file) }}">
	<img src="{{ URL::asset('storage/images/' . $files[1]->file) }}"> --}}


	<!-- $files[1]->file -->

@endsection