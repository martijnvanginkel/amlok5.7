@extends('layouts.app')

@section('content')

<div class="editWrapper">

	@include('partials._messages')

	{!! Form::model($post, ['method' => 'PATCH', 'route' => ['posts.update', $post->id], 'files' => true, 'data-parsley-validate' => '']) !!}

		<div class="titleBlock">
			<h2>Bewerk Update.</h2>
		</div>

		<div class="stringBlock">
			{{ Form::label('Titel') }}
			{{ Form::text('title', $post->title, ['data-parsley-maxlength' => 32]) }}
		</div>

		<div class="textareaBlock">
			{{ Form::label('Tekstvlak') }}
			{{ Form::textarea('body', $post->body) }}			
		</div>

		<div class="submitBlock">
			<div class="button-save">
				{{ Form::submit('Opslaan', ['class' => 'button hvr-fade']) }}			
			</div>	
			<div class="button-delete">
		    	<a href="{{ route('posts.create') }}" class="button hvr-fade">Terug</a>
			</div>
		</div>
	


	{!! Form::close() !!}

</div>

@endsection
