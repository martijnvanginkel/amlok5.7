@extends('layouts.app')

@section('content')

<div class="editWrapper">

    <form method="POST" action="{{ route('posts.store') }}" data-parsley-validate>
		<div class="titleBlock">
			<h2>Schrijf een nieuwe Update.</h2>
		</div>

		<div class="stringBlock">
			<label name="title">Titel</label>
			<input id="title" type="text" name="title" data-parsley-maxlength="32">
		</div>

		<div class="textareaBlock">	
		    <label name="body">Tekst</label>
		    <textarea id="body" name="body" rows="10" required></textarea>
		</div>

		<div class="submitBlock">
			<div class="button-save">		
			    <input type="submit" value="Maak nieuwe Update" class="button hvr-fade">
			</div>	
		</div>

	    <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>

    <hr>

    <div class="titleBlock">
    	<h2>Alle Updates.</h2>
    </div>

	<table class="updatesIndex">
		<tr>
			<th>Titel</th>
			<th>Tekst</th> 
			<th></th>
			<th></th>
		</tr>
		@foreach($posts as $post)
		<tr>
			<td>{{ substr($post->title, 0, 20) }} {{ strlen($post->title) > 20 ? ".." : "" }}</td>
			<td>{{ substr($post->body, 0, 30) }} {{ strlen($post->body) > 30 ? ".." : "" }}</td>
			<td>
				<div class="button-link">				
					<a class="button hvr-fade" href="{{ route('posts.edit', $post->id) }}">Bewerk</a>
				</div>
			</td>
			<td>
				<form method="POST" action="{{ route('posts.destroy', $post->id) }}">
					<div class="button-delete">					
					    <input type="submit" value="Verwijder" class="button hvr-fade">
					</div>
				    <input type="hidden" name="_token" value="{{ Session::token() }}">
				   {{ method_field('DELETE') }}
				</form>﻿
			</td>
		</tr>

		@endforeach
	</table>
	
</div>

  


@endsection